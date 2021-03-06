<?php
namespace In2code\Powermail\Utility\Hook;

use In2code\Powermail\Domain\Model\Form;
use In2code\Powermail\Utility\BackendUtility;
use In2code\Powermail\Utility\ConfigurationUtility;
use In2code\Powermail\Utility\FrontendUtility;
use In2code\Powermail\Utility\ObjectUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Alex Kellner <alexander.kellner@in2code.de>, in2code.de
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Show Plugin Information in Page Module to every powermail content element
 *
 * @package powermail
 * @license http://www.gnu.org/licenses/lgpl.html
 *          GNU Lesser General Public License, version 3 or later
 */
class PluginInformation
{

    /**
     * Params
     *
     * @var array
     */
    public $params;

    /**
     * Path to locallang file
     *
     * @var string
     */
    protected $locallangPath = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:pluginInfo.';

    /**
     * @var \TYPO3\CMS\Lang\LanguageService
     */
    protected $languageService = null;

    /**
     * @var \TYPO3\CMS\Core\Database\DatabaseConnection
     */
    protected $databaseConnection = null;

    /**
     * Build HTML table for plugin information
     *
     * @param array $params
     * @return string
     */
    public function build(array $params = [])
    {
        $this->initialize($params);
        if (ConfigurationUtility::isDisablePluginInformationActive()) {
            return '';
        }
        return $this->createOutputMarkup();
    }

    /**
     * Create HTML Output
     *
     * @return string
     */
    protected function createOutputMarkup()
    {
        $count = 0;
        $content = '';
        $content .= '<tr class="bgColor2">';
        $content .= '<td style="padding: 5px;"><strong>Settings</strong></td>';
        $content .= '<td style="padding: 5px;"><strong>Value</strong></td>';
        $content .= '</tr>';
        foreach ($this->getLabelsAndValues() as $label => $value) {
            $content .= '<tr class="bgColor' . ($count % 2 ? '1' : '4') . '">';
            $content .= '<td style="width: 40%; padding: 5px;">' . $label . '</td>';
            $content .= '<td style="padding: 5px;">' . $value . '</td>';
            $content .= '</tr>';
            $count++;
        }
        return '<table class="typo3-dblist" style="width: 100%; border: 1px solid #d7d7d7;">' . $content . '</table>';
    }

    /**
     * Build array with label => value for table view
     *
     * @return array
     */
    protected function getLabelsAndValues()
    {
        $array = [
            $this->getLocalizedLabel('receiverEmail') => $this->getReceiverEmail(),
            $this->getLocalizedLabel('receiverName') => $this->getFieldFromFlexform('receiver', 'receiver.name'),
            $this->getLocalizedLabel('subject') => $this->getFieldFromFlexform('receiver', 'receiver.subject'),
            $this->getLocalizedLabel('form') =>
                '<a href="' . $this->buildEditFormLink() . '" style="text-decoration:underline;">'
                . $this->getFormProperty($this->getFieldFromFlexform('main', 'main.form')) . '</a>',
            $this->getLocalizedLabel('confirmationPage') => $this->buildImageMarkup('Image/icon-check.png', '1'),
            $this->getLocalizedLabel('optin') => $this->buildImageMarkup('Image/icon-check.png', '1'),
        ];
        if (!$this->getFieldFromFlexform('main', 'main.confirmation')) {
            $array[$this->getLocalizedLabel('confirmationPage')] =
                $this->buildImageMarkup('Image/icon-notchecked.png', '0');
        }
        if (!$this->getFieldFromFlexform('main', 'main.optin')) {
            $array[$this->getLocalizedLabel('optin')] = $this->buildImageMarkup('Image/icon-notchecked.png', '0');
        }
        return $array;
    }

    /**
     * Get receiver mail
     *
     * @return string
     */
    protected function getReceiverEmail()
    {
        $receiver = $this->getFieldFromFlexform('receiver', 'receiver.email');
        if ((int) $this->getFieldFromFlexform('receiver', 'receiver.type') === 1) {
            $receiver = 'Frontenduser Group ' . $this->getFieldFromFlexform('receiver', 'receiver.fe_group');
        }
        if ((int) $this->getFieldFromFlexform('receiver', 'receiver.type') === 2) {
            $receiver = 'Predefined "' . $this->getFieldFromFlexform('receiver', 'receiver.predefinedemail') . '"';
        }
        $this->getDevelopmentContextEmailMarkup($receiver);
        return $receiver;
    }

    /**
     * Get HTML markup for development context Email
     *        if development context is active and
     *        development context email was set
     *
     * @param string $receiver overwrite regulare receiver email address
     * @return void
     */
    protected function getDevelopmentContextEmailMarkup(&$receiver)
    {
        if (!ConfigurationUtility::getDevelopmentContextEmail()) {
            return;
        }
        $originalReceiver = $receiver;
        $receiver = '<span style="color: red;"><strong>';
        $receiver .= ConfigurationUtility::getDevelopmentContextEmail();
        $receiver .= '</strong> &lt;Development context&gt;';
        $receiver .= '</span><br />';
        $receiver .= '<span style="color: #999;">' . $originalReceiver . '</span>';
    }

    /**
     * Build edit link
     *
     * @return string
     */
    protected function buildEditFormLink()
    {
        return BackendUtility::createEditUri(
            Form::TABLE_NAME,
            $this->getFormProperty(
                $this->getFieldFromFlexform('main', 'main.form'),
                'uid'
            )
        );
    }

    /**
     * Get localized label from locallang_db.xlf
     *
     * @param string $key
     * @return string
     */
    protected function getLocalizedLabel($key)
    {
        return $this->languageService->sL($this->locallangPath . $key);
    }

    /**
     * Build image html tag
     *
     * @param string $pathAndFilename like "Image/icon.png"
     * @param string $alt
     * @return string
     */
    protected function buildImageMarkup($pathAndFilename, $alt = '0')
    {
        $imagePathAndFilename = FrontendUtility::getSubFolderOfCurrentUrl() .
            'typo3conf/ext/powermail/Resources/Public/';
        $imagePathAndFilename .= $pathAndFilename;
        return '<img src="' . $imagePathAndFilename . '" alt="' . $alt . '" />';
    }

    /**
     * Get form property from uid
     *
     * @param string $field
     * @param int $uid Form uid
     * @return string
     */
    protected function getFormProperty($uid, $field = 'title')
    {
        $uid = $this->getLocalizedFormUid($uid, $this->getSysLanguageUid());
        $select = $field;
        $from = Form::TABLE_NAME;
        $where = 'uid=' . (int) $uid;
        $row = $this->databaseConnection->exec_SELECTgetSingleRow($select, $from, $where);
        return htmlspecialchars($row[$field]);
    }

    /**
     * Get form uid of a localized form
     *
     * @param int $uid
     * @param int $sysLanguageUid
     * @return int
     */
    protected function getLocalizedFormUid($uid, $sysLanguageUid)
    {
        if ($sysLanguageUid > 0) {
            $select = 'uid';
            $from = Form::TABLE_NAME;
            $where = 'sys_language_uid=' . (int) $sysLanguageUid . ' and l10n_parent=' . (int) $uid;
            $row = $this->databaseConnection->exec_SELECTgetSingleRow($select, $from, $where);
            if (!empty($row['uid'])) {
                $uid = (int) $row['uid'];
            }
        }
        return $uid;
    }

    /**
     * Get field value from flexform configuration
     *
     * @param string $sheet name of the sheet
     * @param string $key name of the key
     * @return string|FALSE value if found
     */
    protected function getFieldFromFlexform($sheet, $key)
    {
        $key = 'settings.flexform.' . $key;
        $flexform = GeneralUtility::xml2array($this->params['row']['pi_flexform']);

        if (
            is_array($flexform) &&
            is_array($flexform['data'][$sheet]) &&
            is_array($flexform['data'][$sheet]['lDEF']) &&
            is_array($flexform['data'][$sheet]['lDEF'][$key]) &&
            isset($flexform['data'][$sheet]['lDEF'][$key]['vDEF'])
        ) {
            return htmlspecialchars($flexform['data'][$sheet]['lDEF'][$key]['vDEF']);
        }
        return false;
    }

    /**
     * Get current sys_language_uid from page content
     *
     * @return int
     */
    protected function getSysLanguageUid()
    {
        if (!empty($this->params['row']['sys_language_uid']) && $this->params['row']['sys_language_uid'] > 0) {
            return (int) $this->params['row']['sys_language_uid'];
        }
        return 0;
    }

    /**
     * Initialize some variables
     *
     * @param array $params
     * @return void
     */
    protected function initialize(array $params)
    {
        $this->params = $params;
        $this->languageService = $GLOBALS['LANG'];
        $this->databaseConnection = ObjectUtility::getDatabaseConnection();
    }
}
