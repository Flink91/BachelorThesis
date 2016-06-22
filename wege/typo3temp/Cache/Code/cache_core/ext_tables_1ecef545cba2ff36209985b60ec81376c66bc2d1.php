<?php
/**
 * Compiled ext_tables.php cache file
 */

global $T3_SERVICES, $T3_VAR, $TYPO3_CONF_VARS;
global $TBE_MODULES, $TBE_MODULES_EXT, $TCA;
global $PAGES_TYPES, $TBE_STYLES;
global $_EXTKEY;

/**
 * Extension: core
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/core/ext_tables.php
 */

$_EXTKEY = 'core';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

/**
 * $GLOBALS['PAGES_TYPES'] defines the various types of pages (field: doktype) the system
 * can handle and what restrictions may apply to them.
 * Here you can set the icon and especially you can define which tables are
 * allowed on a certain pagetype (doktype)
 * NOTE: The 'default' entry in the $GLOBALS['PAGES_TYPES'] array is the 'base' for all
 * types, and for every type the entries simply overrides the entries in the 'default' type!
 */
$GLOBALS['PAGES_TYPES'] = array(
    (string)\TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_LINK => array(),
    (string)\TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_SHORTCUT => array(),
    (string)\TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_BE_USER_SECTION => array(
        'type' => 'web',
        'allowedTables' => '*'
    ),
    (string)\TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_MOUNTPOINT => array(),
    (string)\TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_SPACER => array(
        'type' => 'sys'
    ),
    (string)\TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_SYSFOLDER => array(
        //  Doktype 254 is a 'Folder' - a general purpose storage folder for whatever you like.
        // In CMS context it's NOT a viewable page. Can contain any element.
        'type' => 'sys',
        'allowedTables' => '*'
    ),
    (string)\TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_RECYCLER => array(
        // Doktype 255 is a recycle-bin.
        'type' => 'sys',
        'allowedTables' => '*'
    ),
    'default' => array(
        'type' => 'web',
        'allowedTables' => 'pages',
        'onlyAllowedTables' => '0'
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('sys_category,sys_file_reference,sys_file_collection');

/** @var \TYPO3\CMS\Core\Resource\Driver\DriverRegistry $registry */
$registry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Resource\Driver\DriverRegistry::class);
$registry->addDriversToTCA();

/**
 * $TBE_MODULES contains the structure of the backend modules as they are
 * arranged in main- and sub-modules. Every entry in this array represents a
 * menu item on either first (key) or second level (value from list) in the
 * left menu in the TYPO3 backend
 * For information about adding modules to TYPO3 you should consult the
 * documentation found in "Inside TYPO3"
 */
$GLOBALS['TBE_MODULES'] = array(
    'web' => 'list',
    'file' => '',
    'user' => '',
    'tools' => '',
    'system' => '',
    'help' => '',
    '_configuration' => array(
        'web' => array(
            'labels' => array(
                'll_ref' => 'LLL:EXT:lang/locallang_mod_web.xlf'
            ),
            'name' => 'web',
            'iconIdentifier' => 'module-web'
        ),
        'file' => array(
            'labels' => array(
                'll_ref' => 'LLL:EXT:lang/locallang_mod_file.xlf'
            ),
            'navigationFrameModule' => 'file_navframe',
            'name' => 'file',
            'workspaces' => 'online,custom',
            'iconIdentifier' => 'module-file'
        ),
        'user' => array(
            'labels' => array(
                'll_ref' => 'LLL:EXT:lang/locallang_mod_usertools.xlf'
            ),
            'name' => 'user',
            'iconIdentifier' => 'status-user-backend'
        ),
        'tools' => array(
            'labels' => array(
                'll_ref' => 'LLL:EXT:lang/locallang_mod_admintools.xlf'
            ),
            'name' => 'tools',
            'iconIdentifier' => 'module-tools'
        ),
        'system' => array(
            'labels' => array(
                'll_ref' => 'LLL:EXT:lang/locallang_mod_system.xlf'
            ),
            'name' => 'system',
            'iconIdentifier' => 'module-system'
        ),
        'help' => array(
            'labels' => array(
                'll_ref' => 'LLL:EXT:lang/locallang_mod_help.xlf'
            ),
            'name' => 'help',
            'iconIdentifier' => 'module-help'
        )
    )
);

// Register the page tree core navigation component
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addCoreNavigationComponent('web', 'typo3-pagetree');

/**
 * $TBE_STYLES configures backend styles and colors; Basically this contains
 * all the values that can be used to create new skins for TYPO3.
 * For information about making skins to TYPO3 you should consult the
 * documentation found in "Inside TYPO3"
 */
$GLOBALS['TBE_STYLES'] = array(
    'skinImg' => array()
);

/**
 * Setting up $TCA_DESCR - Context Sensitive Help (CSH)
 * For information about using the CSH API in TYPO3 you should consult the
 * documentation found in "Inside TYPO3"
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('pages', 'EXT:lang/locallang_csh_pages.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('be_users', 'EXT:lang/locallang_csh_be_users.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('be_groups', 'EXT:lang/locallang_csh_be_groups.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_filemounts', 'EXT:lang/locallang_csh_sysfilem.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_language', 'EXT:lang/locallang_csh_syslang.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_news', 'EXT:lang/locallang_csh_sysnews.xlf');
// General Core
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('xMOD_csh_corebe', 'EXT:lang/locallang_csh_corebe.xlf');
// Web > Info
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_info', 'EXT:lang/locallang_csh_web_info.xlf');
// Web > Func
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_func', 'EXT:lang/locallang_csh_web_func.xlf');

/**
 * Backend sprite icon-names
 */
$GLOBALS['TBE_STYLES']['spriteIconApi']['coreSpriteImageNames'] = array(
    'actions-document-close',
    'actions-document-duplicates-select',
    'actions-document-edit-access',
    'actions-document-export-csv',
    'actions-document-export-t3d',
    'actions-document-history-open',
    'actions-document-import-t3d',
    'actions-document-info',
    'actions-document-localize',
    'actions-document-move',
    'actions-document-new',
    'actions-document-open',
    'actions-document-open-read-only',
    'actions-document-paste-after',
    'actions-document-paste-into',
    'actions-document-save',
    'actions-document-save-cleartranslationcache',
    'actions-document-save-close',
    'actions-document-save-new',
    'actions-document-save-translation',
    'actions-document-save-view',
    'actions-document-select',
    'actions-document-synchronize',
    'actions-document-view',
    'actions-edit-add',
    'actions-edit-copy',
    'actions-edit-copy-release',
    'actions-edit-cut',
    'actions-edit-cut-release',
    'actions-edit-delete',
    'actions-edit-download',
    'actions-edit-hide',
    'actions-edit-insert-default',
    'actions-edit-localize-status-high',
    'actions-edit-localize-status-low',
    'actions-edit-merge-localization',
    'actions-edit-pick-date',
    'actions-edit-rename',
    'actions-edit-replace',
    'actions-edit-restore',
    'actions-edit-undelete-edit',
    'actions-edit-undo',
    'actions-edit-unhide',
    'actions-edit-upload',
    'actions-input-clear',
    'actions-insert-record',
    'actions-insert-reference',
    'actions-markstate',
    'actions-message-error-close',
    'actions-message-information-close',
    'actions-message-notice-close',
    'actions-message-ok-close',
    'actions-message-warning-close',
    'actions-move-down',
    'actions-move-left',
    'actions-move-move',
    'actions-move-right',
    'actions-move-to-bottom',
    'actions-move-to-top',
    'actions-move-up',
    'actions-page-move',
    'actions-page-new',
    'actions-page-open',
    'actions-selection-delete',
    'actions-system-backend-user-emulate',
    'actions-system-backend-user-switch',
    'actions-system-cache-clear',
    'actions-system-cache-clear-impact-high',
    'actions-system-cache-clear-impact-low',
    'actions-system-cache-clear-impact-medium',
    'actions-system-cache-clear-rte',
    'actions-system-extension-configure',
    'actions-system-extension-documentation',
    'actions-system-extension-download',
    'actions-system-extension-import',
    'actions-system-extension-install',
    'actions-system-extension-sqldump',
    'actions-system-extension-uninstall',
    'actions-system-extension-update',
    'actions-system-extension-update-disabled',
    'actions-system-help-open',
    'actions-system-list-open',
    'actions-system-options-view',
    'actions-system-pagemodule-open',
    'actions-system-refresh',
    'actions-system-shortcut-new',
    'actions-system-tree-search-open',
    'actions-system-typoscript-documentation',
    'actions-system-typoscript-documentation-open',
    'actions-template-new',
    'actions-unmarkstate',
    'actions-version-document-remove',
    'actions-version-page-open',
    'actions-version-swap-version',
    'actions-version-swap-workspace',
    'actions-version-workspace-preview',
    'actions-version-workspace-sendtostage',
    'actions-view-go-back',
    'actions-view-go-down',
    'actions-view-go-forward',
    'actions-view-go-up',
    'actions-view-list-collapse',
    'actions-view-list-expand',
    'actions-view-paging-first',
    'actions-view-paging-first-disabled',
    'actions-view-paging-last',
    'actions-view-paging-last-disabled',
    'actions-view-paging-next',
    'actions-view-paging-next-disabled',
    'actions-view-paging-previous',
    'actions-view-paging-previous-disabled',
    'actions-view-table-collapse',
    'actions-view-table-expand',
    'actions-window-open',
    'apps-clipboard-images',
    'apps-clipboard-list',
    'apps-filetree-folder-add',
    'apps-filetree-folder-default',
    'apps-filetree-folder-list',
    'apps-filetree-folder-locked',
    'apps-filetree-folder-media',
    'apps-filetree-folder-news',
    'apps-filetree-folder-opened',
    'apps-filetree-folder-recycler',
    'apps-filetree-folder-temp',
    'apps-filetree-folder-user',
    'apps-filetree-mount',
    'apps-filetree-root',
    'apps-irre-collapsed',
    'apps-irre-expanded',
    'apps-pagetree-backend-user',
    'apps-pagetree-backend-user-hideinmenu',
    'apps-pagetree-collapse',
    'apps-pagetree-drag-copy-above',
    'apps-pagetree-drag-copy-below',
    'apps-pagetree-drag-move-above',
    'apps-pagetree-drag-move-below',
    'apps-pagetree-drag-move-between',
    'apps-pagetree-drag-move-into',
    'apps-pagetree-drag-new-between',
    'apps-pagetree-drag-new-inside',
    'apps-pagetree-drag-place-denied',
    'apps-pagetree-expand',
    'apps-pagetree-folder-contains-approve',
    'apps-pagetree-folder-contains-board',
    'apps-pagetree-folder-contains-fe_users',
    'apps-pagetree-folder-contains-news',
    'apps-pagetree-folder-contains-shop',
    'apps-pagetree-folder-default',
    'apps-pagetree-page-advanced',
    'apps-pagetree-page-advanced-hideinmenu',
    'apps-pagetree-page-advanced-root',
    'apps-pagetree-page-backend-users',
    'apps-pagetree-page-backend-users-hideinmenu',
    'apps-pagetree-page-backend-users-root',
    'apps-pagetree-page-content-from-page',
    'apps-pagetree-page-content-from-page-root',
    'apps-pagetree-page-content-from-page-hideinmenu',
    'apps-pagetree-page-default',
    'apps-pagetree-page-domain',
    'apps-pagetree-page-frontend-user',
    'apps-pagetree-page-frontend-user-hideinmenu',
    'apps-pagetree-page-frontend-user-root',
    'apps-pagetree-page-frontend-users',
    'apps-pagetree-page-frontend-users-hideinmenu',
    'apps-pagetree-page-frontend-users-root',
    'apps-pagetree-page-mountpoint',
    'apps-pagetree-page-mountpoint-hideinmenu',
    'apps-pagetree-page-mountpoint-root',
    'apps-pagetree-page-no-icon-found',
    'apps-pagetree-page-no-icon-found-hideinmenu',
    'apps-pagetree-page-no-icon-found-root',
    'apps-pagetree-page-not-in-menu',
    'apps-pagetree-page-recycler',
    'apps-pagetree-page-shortcut',
    'apps-pagetree-page-shortcut-external',
    'apps-pagetree-page-shortcut-external-hideinmenu',
    'apps-pagetree-page-shortcut-external-root',
    'apps-pagetree-page-shortcut-hideinmenu',
    'apps-pagetree-page-shortcut-root',
    'apps-pagetree-root',
    'apps-pagetree-spacer',
    'apps-tcatree-select-recursive',
    'apps-toolbar-menu-actions',
    'apps-toolbar-menu-cache',
    'apps-toolbar-menu-opendocs',
    'apps-toolbar-menu-search',
    'apps-toolbar-menu-shortcut',
    'apps-toolbar-menu-workspace',
    'mimetypes-compressed',
    'mimetypes-excel',
    'mimetypes-media-audio',
    'mimetypes-media-flash',
    'mimetypes-media-image',
    'mimetypes-media-video',
    'mimetypes-other-other',
    'mimetypes-pdf',
    'mimetypes-powerpoint',
    'mimetypes-text-css',
    'mimetypes-text-csv',
    'mimetypes-text-html',
    'mimetypes-text-js',
    'mimetypes-text-php',
    'mimetypes-text-text',
    'mimetypes-word',
    'mimetypes-x-content-divider',
    'mimetypes-x-content-domain',
    'mimetypes-x-content-form',
    'mimetypes-x-content-form-search',
    'mimetypes-x-content-header',
    'mimetypes-x-content-html',
    'mimetypes-x-content-image',
    'mimetypes-x-content-link',
    'mimetypes-x-content-list-bullets',
    'mimetypes-x-content-list-files',
    'mimetypes-x-content-login',
    'mimetypes-x-content-menu',
    'mimetypes-x-content-multimedia',
    'mimetypes-x-content-page-language-overlay',
    'mimetypes-x-content-plugin',
    'mimetypes-x-content-script',
    'mimetypes-x-content-table',
    'mimetypes-x-content-template',
    'mimetypes-x-content-template-extension',
    'mimetypes-x-content-template-static',
    'mimetypes-x-content-text',
    'mimetypes-x-content-text-picture',
    'mimetypes-x-content-text-media',
    'mimetypes-x-sys_action',
    'mimetypes-x-sys_category',
    'mimetypes-x-sys_language',
    'mimetypes-x-sys_news',
    'mimetypes-x-sys_workspace',
    'mimetypes-x_belayout',
    'status-dialog-error',
    'status-dialog-information',
    'status-dialog-notification',
    'status-dialog-ok',
    'status-dialog-warning',
    'status-overlay-access-restricted',
    'status-overlay-deleted',
    'status-overlay-hidden',
    'status-overlay-icon-missing',
    'status-overlay-includes-subpages',
    'status-overlay-locked',
    'status-overlay-scheduled',
    'status-overlay-scheduled-future-end',
    'status-overlay-translated',
    'status-status-checked',
    'status-status-current',
    'status-status-edit-read-only',
    'status-status-icon-missing',
    'status-status-locked',
    'status-status-permission-denied',
    'status-status-permission-granted',
    'status-status-readonly',
    'status-status-reference-hard',
    'status-status-reference-soft',
    'status-status-sorting-asc',
    'status-status-sorting-desc',
    'status-status-sorting-light-asc',
    'status-status-sorting-light-desc',
    'status-status-workspace-draft',
    'status-system-extension-required',
    'status-user-admin',
    'status-user-backend',
    'status-user-frontend',
    'status-user-group-backend',
    'status-user-group-frontend',
    'status-warning-in-use',
    'status-warning-lock',
    'module-web',
    'module-file',
    'module-system',
    'module-tools',
    'module-user',
    'module-help'
);

$GLOBALS['TBE_STYLES']['spriteIconApi']['spriteIconRecordOverlayPriorities'] = array(
    'deleted',
    'hidden',
    'starttime',
    'endtime',
    'futureendtime',
    'fe_group',
    'protectedSection'
);

$GLOBALS['TBE_STYLES']['spriteIconApi']['spriteIconRecordOverlayNames'] = array(
    'hidden' => 'status-overlay-hidden',
    'fe_group' => 'status-overlay-access-restricted',
    'starttime' => 'status-overlay-scheduled',
    'endtime' => 'status-overlay-scheduled',
    'futureendtime' => 'status-overlay-scheduled-future-end',
    'readonly' => 'status-overlay-locked',
    'deleted' => 'status-overlay-deleted',
    'missing' => 'status-overlay-missing',
    'translated' => 'status-overlay-translated',
    'protectedSection' => 'status-overlay-includes-subpages'
);

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: extbase
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/extbase/ext_tables.php
 */

$_EXTKEY = 'extbase';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['extbase'][] = \TYPO3\CMS\Extbase\Utility\ExtbaseRequirementsCheckUtility::class;

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Extbase\Scheduler\Task::class] = array(
    'extension' => 'extbase',
    'title' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:task.name',
    'description' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:task.description',
    'additionalFields' => \TYPO3\CMS\Extbase\Scheduler\FieldProvider::class
);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['checkFlexFormValue'][] = \TYPO3\CMS\Extbase\Hook\DataHandler\CheckFlexFormValue::class;

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: fluid
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/fluid/ext_tables.php
 */

$_EXTKEY = 'fluid';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Fluid: (Optional) default ajax configuration');

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: extensionmanager
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/extensionmanager/ext_tables.php
 */

$_EXTKEY = 'extensionmanager';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Extensionmanager',
        'tools',
        'extensionmanager', '', array(
            'List' => 'index,unresolvedDependencies,ter,showAllVersions,distributions',
            'Action' => 'toggleExtensionInstallationState,installExtensionWithoutSystemDependencyCheck,removeExtension,downloadExtensionZip,downloadExtensionData',
            'Configuration' => 'showConfigurationForm,save,saveAndClose',
            'Download' => 'checkDependencies,installFromTer,installExtensionWithoutSystemDependencyCheck,installDistribution,updateExtension,updateCommentForUpdatableVersions',
            'UpdateScript' => 'show',
            'UpdateFromTer' => 'updateExtensionListFromTer',
            'UploadExtensionFile' => 'form,extract',
            'Distribution' => 'show'
        ),
        array(
            'access' => 'admin',
            'icon' => 'EXT:extensionmanager/Resources/Public/Icons/module-extensionmanager.svg',
            'labels' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_mod.xlf',
        )
    );

    // Register extension status report system
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['Extension Manager'][] =
        \TYPO3\CMS\Extensionmanager\Report\ExtensionStatus::class;
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: lang
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/lang/ext_tables.php
 */

$_EXTKEY = 'lang';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {

    // Register the backend module
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Lang',
        'tools',
        'language',
        'after:extensionmanager',
        array(
            'Language' => 'listLanguages, listTranslations, getTranslations, updateLanguage, updateTranslation, activateLanguage, deactivateLanguage',
        ),
        array(
            'access' => 'admin',
            'icon' => 'EXT:lang/Resources/Public/Icons/module-lang.svg',
            'labels' => 'LLL:EXT:lang/Resources/Private/Language/locallang_mod.xlf',
        )
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: saltedpasswords
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/saltedpasswords/ext_tables.php
 */

$_EXTKEY = 'saltedpasswords';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Add context sensitive help (csh) for scheduler task
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_txsaltedpasswords', 'EXT:saltedpasswords/Resources/Private/Language/locallang_csh_saltedpasswords.xlf');

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: backend
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/backend/ext_tables.php
 */

$_EXTKEY = 'backend';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'web',
        'layout',
        'top',
        '',
        array(
            'routeTarget' => \TYPO3\CMS\Backend\Controller\PageLayoutController::class . '::mainAction',
            'access' => 'user,group',
            'name' => 'web_layout',
            'labels' => array(
                'tabs_images' => array(
                    'tab' => 'EXT:backend/Resources/Public/Icons/module-page.svg',
                ),
                'll_ref' => 'LLL:EXT:backend/Resources/Private/Language/locallang_mod.xlf',
            ),
        )
    );

    // Register BackendLayoutDataProvider for PageTs
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['BackendLayoutDataProvider']['pagets'] = \TYPO3\CMS\Backend\Provider\PageTsBackendLayoutDataProvider::class;
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: frontend
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/frontend/ext_tables.php
 */

$_EXTKEY = 'frontend';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Add allowed records to pages
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('pages_language_overlay,tt_content,sys_template,sys_domain,backend_layout');

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_layout', 'EXT:frontend/Resources/Private/Language/locallang_csh_weblayout.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_info', 'EXT:frontend/Resources/Private/Language/locallang_csh_webinfo.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_info',
        \TYPO3\CMS\Frontend\Controller\PageInformationController::class,
        null,
        'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:mod_tx_cms_webinfo_page'
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_info',
        \TYPO3\CMS\Frontend\Controller\TranslationStatusController::class,
        null,
        'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:mod_tx_cms_webinfo_lang'
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: install
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/install/ext_tables.php
 */

$_EXTKEY = 'install';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    // Register report module additions
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['typo3'][] = \TYPO3\CMS\Install\Report\InstallStatusReport::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['security'][] = \TYPO3\CMS\Install\Report\SecurityStatusReport::class;

    // Only add the environment status report if not in CLI mode
    if (!defined('TYPO3_cliMode') || !TYPO3_cliMode) {
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['system'][] = \TYPO3\CMS\Install\Report\EnvironmentStatusReport::class;
    }

    // Register backend module
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Install',
        'system',
        'install', '', array(
            'BackendModule' => 'index, showEnableInstallToolButton, enableInstallTool',
        ),
        array(
            'access' => 'admin',
            'icon' => 'EXT:install/Resources/Public/Icons/module-install.svg',
            'labels' => 'LLL:EXT:install/Resources/Private/Language/BackendModule.xlf',
        )
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: recordlist
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/recordlist/ext_tables.php
 */

$_EXTKEY = 'recordlist';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'web',
        'list',
        '',
        '',
        array(
            'routeTarget' => \TYPO3\CMS\Recordlist\RecordList::class . '::mainAction',
            'access' => 'user,group',
            'name' => 'web_list',
            'labels' => array(
                'tabs_images' => array(
                    'tab' => 'EXT:recordlist/Resources/Public/Icons/module-list.svg',
                ),
                'll_ref' => 'LLL:EXT:lang/locallang_mod_web_list.xlf',
            ),
        )
    );

    // register element browsers
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ElementBrowsers']['db'] =  \TYPO3\CMS\Recordlist\Browser\DatabaseBrowser::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ElementBrowsers']['file'] =  \TYPO3\CMS\Recordlist\Browser\FileBrowser::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ElementBrowsers']['folder'] =  \TYPO3\CMS\Recordlist\Browser\FolderBrowser::class;

    // register default link handlers
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
		TCEMAIN.linkHandler {
			page {
				handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\PageLinkHandler
				label = LLL:EXT:lang/locallang_browse_links.xlf:page
			}
			file {
				handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\FileLinkHandler
				label = LLL:EXT:lang/locallang_browse_links.xlf:file
				displayAfter = page
				scanAfter = page
			}
			folder {
				handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\FolderLinkHandler
				label = LLL:EXT:lang/locallang_browse_links.xlf:folder
				displayAfter = file
				scanAfter = file
			}
			url {
				handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\UrlLinkHandler
				label = LLL:EXT:lang/locallang_browse_links.xlf:extUrl
				displayAfter = folder
				scanAfter = mail
			}
			mail {
				handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\MailLinkHandler
				label = LLL:EXT:lang/locallang_browse_links.xlf:email
				displayAfter = url
			}
		}
	');
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: sv
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/sv/ext_tables.php
 */

$_EXTKEY = 'sv';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['sv']['services'] = array(
        'title' => 'LLL:EXT:sv/Resources/Private/Language/locallang.xlf:report_title',
        'description' => 'LLL:EXT:sv/Resources/Private/Language/locallang.xlf:report_description',
        'icon' => 'EXT:sv/Resources/Public/Images/service-reports.png',
        'report' => \TYPO3\CMS\Sv\Report\ServicesListReport::class
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: t3skin
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/t3skin/ext_tables.php
 */

$_EXTKEY = 't3skin';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE' || TYPO3_MODE === 'FE' && isset($GLOBALS['BE_USER'])) {

    // Register as a skin
    $GLOBALS['TBE_STYLES']['skins']['t3skin'] = array(
        'name' => 't3skin',
        'stylesheetDirectories' => array(
            'sprites' => 'EXT:t3skin/stylesheets/sprites/',
            'css' => 'EXT:t3skin/Resources/Public/Css/'
        )
    );

    // Setting up auto detection of alternative icons:
    $GLOBALS['TBE_STYLES']['skinImgAutoCfg'] = array(
        'absDir' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('t3skin') . 'icons/',
        'relDir' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('t3skin') . 'icons/',
        'forceFileExtension' => 'gif',
        // Force to look for PNG alternatives...
        'iconSizeWidth' => 16,
        'iconSizeHeight' => 16
    );

    // Changing icon for filemounts, needs to be done here as overwriting the original icon would also change the filelist tree's root icon
    $GLOBALS['TCA']['sys_filemounts']['ctrl']['iconfile'] = 'apps-filetree-mount';

    $GLOBALS['TCA']['pages']['columns']['module']['config']['items'][1][2] = 'status-user-frontend';

    // extJS theme
    $GLOBALS['TBE_STYLES']['extJS']['theme'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('t3skin') . 'extjs/xtheme-t3skin.css';
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: documentation
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/documentation/ext_tables.php
 */

$_EXTKEY = 'documentation';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    // Registers a Backend Module
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Documentation',
        'help',
        'documentation',
        'top',
        array(
            'Document' => 'list, download, fetch',
        ),
        array(
            'access' => 'user,group',
            'icon'   => 'EXT:documentation/Resources/Public/Icons/module-documentation.svg',
            'labels' => 'LLL:EXT:documentation/Resources/Private/Language/locallang_mod.xlf',
        )
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: info
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/info/ext_tables.php
 */

$_EXTKEY = 'info';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'web',
        'info',
        '',
        '',
        array(
            'routeTarget' => \TYPO3\CMS\Info\Controller\InfoModuleController::class . '::mainAction',
            'access' => 'user,group',
            'name' => 'web_info',
            'labels' => array(
                'tabs_images' => array(
                    'tab' => 'EXT:info/Resources/Public/Icons/module-info.svg',
                ),
                'll_ref' => 'LLL:EXT:lang/locallang_mod_web_info.xlf',
            ),
        )
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: info_pagetsconfig
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/info_pagetsconfig/ext_tables.php
 */

$_EXTKEY = 'info_pagetsconfig';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_info',
        \TYPO3\CMS\InfoPagetsconfig\Controller\InfoPageTyposcriptConfigController::class,
        null,
        'LLL:EXT:info_pagetsconfig/Resources/Private/Language/locallang.xlf:mod_pagetsconfig'
    );
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_info', 'EXT:info_pagetsconfig/Resources/Private/Language/locallang_csh_webinfo.xlf');

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: setup
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/setup/ext_tables.php
 */

$_EXTKEY = 'setup';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'user',
        'setup',
        'after:task',
        '',
        array(
            'routeTarget' => \TYPO3\CMS\Setup\Controller\SetupModuleController::class . '::mainAction',
            'access' => 'group,user',
            'name' => 'user_setup',
            'labels' => array(
                'tabs_images' => array(
                    'tab' => 'EXT:setup/Resources/Public/Icons/module-setup.svg',
                ),
                'll_ref' => 'LLL:EXT:setup/Resources/Private/Language/locallang_mod.xlf',
            ),
        )
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
        '_MOD_user_setup',
        'EXT:setup/Resources/Private/Language/locallang_csh_mod.xlf'
    );

    $GLOBALS['TYPO3_USER_SETTINGS'] = array(
        'columns' => array(
            'realName' => array(
                'type' => 'text',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:beUser_realName',
                'table' => 'be_users',
                'csh' => 'beUser_realName'
            ),
            'email' => array(
                'type' => 'email',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:beUser_email',
                'table' => 'be_users',
                'csh' => 'beUser_email'
            ),
            'emailMeAtLogin' => array(
                'type' => 'check',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:emailMeAtLogin',
                'csh' => 'emailMeAtLogin'
            ),
            'password' => array(
                'type' => 'password',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:newPassword',
                'table' => 'be_users',
                'csh' => 'newPassword',
            ),
            'password2' => array(
                'type' => 'password',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:newPasswordAgain',
                'table' => 'be_users',
                'csh' => 'newPasswordAgain',
            ),
            'passwordCurrent' => array(
                'type' => 'password',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:passwordCurrent',
                'table' => 'be_users',
                'csh' => 'passwordCurrent',
            ),
            'avatar' => array(
                'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_users.avatar',
                'type' => 'avatar',
                'table' => 'be_users',
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
            'lang' => array(
                'type' => 'select',
                'itemsProcFunc' => \TYPO3\CMS\Setup\Controller\SetupModuleController::class . '->renderLanguageSelect',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:language',
                'csh' => 'language'
            ),
            'startModule' => array(
                'type' => 'select',
                'itemsProcFunc' => \TYPO3\CMS\Setup\Controller\SetupModuleController::class . '->renderStartModuleSelect',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:startModule',
                'csh' => 'startModule'
            ),
            'thumbnailsByDefault' => array(
                'type' => 'check',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:showThumbs',
                'csh' => 'showThumbs'
            ),
            'titleLen' => array(
                'type' => 'text',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:maxTitleLen',
                'csh' => 'maxTitleLen'
            ),
            'edit_RTE' => array(
                'type' => 'check',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:edit_RTE',
                'csh' => 'edit_RTE'
            ),
            'edit_docModuleUpload' => array(
                'type' => 'check',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:edit_docModuleUpload',
                'csh' => 'edit_docModuleUpload'
            ),
            'showHiddenFilesAndFolders' => array(
                'type' => 'check',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:showHiddenFilesAndFolders',
                'csh' => 'showHiddenFilesAndFolders'
            ),
            'copyLevels' => array(
                'type' => 'text',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:copyLevels',
                'csh' => 'copyLevels'
            ),
            'recursiveDelete' => array(
                'type' => 'check',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:recursiveDelete',
                'csh' => 'recursiveDelete'
            ),
            'resetConfiguration' => array(
                'type' => 'button',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:resetConfiguration',
                'buttonlabel' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:resetConfigurationButton',
                'csh' => 'reset',
                'confirm' => true,
                'confirmData' => array(
                    'message' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:setToStandardQuestion',
                    'jsCodeAfterOk' => 'document.getElementById(\'setValuesToDefault\').value = 1; document.getElementById(\'SetupModuleController\').submit();'
                )
            ),
            'resizeTextareas_Flexible' => array(
                'type' => 'check',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:resizeTextareas_Flexible',
                'csh' => 'resizeTextareas_Flexible'
            ),
            'resizeTextareas_MaxHeight' => array(
                'type' => 'text',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:flexibleTextareas_MaxHeight',
                'csh' => 'flexibleTextareas_MaxHeight'
            ),
            'debugInWindow' => array(
                'type' => 'check',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:debugInWindow',
                'access' => 'admin'
            )
        ),
        'showitem' => '--div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:personal_data,realName,email,emailMeAtLogin,avatar,lang,
				--div--;LLL:EXT:setup/Resources/Private/Language/locallang.xml:passwordHeader,passwordCurrent,password,password2,
				--div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:opening,startModule,thumbnailsByDefault,titleLen,
				--div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:editFunctionsTab,edit_RTE,edit_docModuleUpload,showHiddenFilesAndFolders,resizeTextareas_Flexible,resizeTextareas_MaxHeight,copyLevels,recursiveDelete,resetConfiguration,
				--div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:adminFunctions,debugInWindow'
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: rtehtmlarea
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/rtehtmlarea/ext_tables.php
 */

$_EXTKEY = 'rtehtmlarea';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Add static template for Click-enlarge rendering
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('rtehtmlarea', 'static/clickenlarge/', 'Clickenlarge Rendering');

// Add Abbreviation records (as of 7.0 not working in Configuration/TCA/Overrides)
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_rtehtmlarea_acronym');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_rtehtmlarea_acronym', 'EXT:rtehtmlarea/Resources/Private/Language/locallang_csh_abbreviation.xlf');

// Add contextual help files
$htmlAreaRteContextHelpFiles = array(
    'General' => 'EXT:rtehtmlarea/Resources/Private/Language/locallang_csh.xlf',
    'Abbreviation' => 'EXT:rtehtmlarea/Resources/Private/Language/Plugins/Abbreviation/locallang_csh.xlf',
    'EditElement' => 'EXT:rtehtmlarea/Resources/Private/Language/Plugins/EditElement/locallang_csh.xlf',
    'Language' => 'EXT:rtehtmlarea/Resources/Private/Language/Plugins/Language/locallang_csh.xlf',
    'MicrodataSchema' => 'EXT:rtehtmlarea/Resources/Private/Language/Plugins/MicrodataSchema/locallang_csh.xlf',
    'PlainText' => 'EXT:rtehtmlarea/Resources/Private/Language/Plugins/PlainText/locallang_csh.xlf',
    'RemoveFormat' => 'EXT:rtehtmlarea/Resources/Private/Language/Plugins/RemoveFormat/locallang_csh.xlf',
    'TableOperations' => 'EXT:rtehtmlarea/Resources/Private/Language/Plugins/TableOperations/locallang_csh.xlf'
);
foreach ($htmlAreaRteContextHelpFiles as $key => $file) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('xEXT_rtehtmlarea_' . $key, $file);
}
unset($htmlAreaRteContextHelpFiles);

if (TYPO3_MODE === 'BE') {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['RteImageSelector']['hooks']['editImageHandler'] = [
        'handler' => \TYPO3\CMS\Rtehtmlarea\ImageHandler\EditImageHandler::class
    ];
}

// Extend TYPO3 User Settings Configuration
if (TYPO3_MODE === 'BE' && \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('setup') && is_array($GLOBALS['TYPO3_USER_SETTINGS'])) {
    $GLOBALS['TYPO3_USER_SETTINGS']['columns'] = array_merge($GLOBALS['TYPO3_USER_SETTINGS']['columns'], array(
        'rteWidth' => array(
            'type' => 'text',
            'label' => 'LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang.xlf:rteWidth',
            'csh' => 'xEXT_rtehtmlarea_General:rteWidth'
        ),
        'rteHeight' => array(
            'type' => 'text',
            'label' => 'LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang.xlf:rteHeight',
            'csh' => 'xEXT_rtehtmlarea_General:rteHeight'
        ),
        'rteResize' => array(
            'type' => 'check',
            'label' => 'LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang.xlf:rteResize',
            'csh' => 'xEXT_rtehtmlarea_General:rteResize'
        ),
        'rteMaxHeight' => array(
            'type' => 'text',
            'label' => 'LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang.xlf:rteMaxHeight',
            'csh' => 'xEXT_rtehtmlarea_General:rteMaxHeight'
        ),
        'rteCleanPasteBehaviour' => array(
            'type' => 'select',
            'renderType' => 'selectSingle',
            'label' => 'LLL:EXT:rtehtmlarea/Resources/Private/Language/Plugins/PlainText/locallang_js.xlf:rteCleanPasteBehaviour',
            'items' => array(
                'plainText' => 'LLL:EXT:rtehtmlarea/Resources/Private/Language/Plugins/PlainText/locallang_js.xlf:plainText',
                'pasteStructure' => 'LLL:EXT:rtehtmlarea/Resources/Private/Language/Plugins/PlainText/locallang_js.xlf:pasteStructure',
                'pasteFormat' => 'LLL:EXT:rtehtmlarea/Resources/Private/Language/Plugins/PlainText/locallang_js.xlf:pasteFormat'
            ),
            'csh' => 'xEXT_rtehtmlarea_PlainText:behaviour'
        )
    ));
    $GLOBALS['TYPO3_USER_SETTINGS']['showitem'] .= ',--div--;LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang.xlf:rteSettings,rteWidth,rteHeight,rteResize,rteMaxHeight,rteCleanPasteBehaviour';
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: func
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/func/ext_tables.php
 */

$_EXTKEY = 'func';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'web',
        'func',
        '',
        '',
        array(
            'routeTarget' => \TYPO3\CMS\Func\Controller\PageFunctionsController::class . '::mainAction',
            'access' => 'user,group',
            'name' => 'web_func',
            'labels' => array(
                'tabs_images' => array(
                    'tab' => 'EXT:func/Resources/Public/Icons/module-func.svg',
                ),
                'll_ref' => 'LLL:EXT:lang/locallang_mod_web_func.xlf',
            ),
        )
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: wizard_crpages
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/wizard_crpages/ext_tables.php
 */

$_EXTKEY = 'wizard_crpages';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_func',
        \TYPO3\CMS\WizardCrpages\Controller\CreatePagesWizardModuleFunctionController::class,
        null,
        'LLL:EXT:wizard_crpages/Resources/Private/Language/locallang.xlf:wiz_crMany'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
        '_MOD_web_func',
        'EXT:wizard_crpages/Resources/Private/Language/locallang_csh.xlf'
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: wizard_sortpages
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/wizard_sortpages/ext_tables.php
 */

$_EXTKEY = 'wizard_sortpages';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_func',
        \TYPO3\CMS\WizardSortpages\View\SortPagesWizardModuleFunction::class,
        null,
        'LLL:EXT:wizard_sortpages/Resources/Private/Language/locallang.xlf:wiz_sort'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
        '_MOD_web_func',
        'EXT:wizard_sortpages/Resources/Private/Language/locallang_csh.xlf'
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: about
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/about/ext_tables.php
 */

$_EXTKEY = 'about';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Avoid that this block is loaded in frontend or within upgrade wizards
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.About',
        'help',
        'about',
        'top',
        array('About' => 'index'),
        array(
            'access' => 'user,group',
            'icon' => 'EXT:about/Resources/Public/Icons/module-about.svg',
            'labels' => 'LLL:EXT:lang/locallang_mod_help_about.xlf'
        )
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: aboutmodules
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/aboutmodules/ext_tables.php
 */

$_EXTKEY = 'aboutmodules';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Avoid that this block is loaded in frontend or within upgrade wizards
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Aboutmodules',
        'help',
        'aboutmodules',
        'after:about',
        array(
            'Modules' => 'index'
        ),
        array(
            'access' => 'user,group',
            'icon' => 'EXT:aboutmodules/Resources/Public/Icons/module-aboutmodules.svg',
            'labels' => 'LLL:EXT:aboutmodules/Resources/Private/Language/locallang_mod.xlf'
        )
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: belog
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/belog/ext_tables.php
 */

$_EXTKEY = 'belog';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register backend modules, but not in frontend or within upgrade wizards
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
    // Module Web->Info->Log
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_info',
        \TYPO3\CMS\Belog\Module\BackendLogModuleBootstrap::class,
        null,
        'Log'
    );

    // Module Tools->Log
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Belog',
        'system',
        'log',
        '',
        array(
            'Tools' => 'index',
            'WebInfo' => 'index',
        ),
        array(
            'access' => 'admin',
            'icon' => 'EXT:belog/Resources/Public/Icons/module-belog.svg',
            'labels' => 'LLL:EXT:belog/Resources/Private/Language/locallang_mod.xlf',
        )
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: beuser
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/beuser/ext_tables.php
 */

$_EXTKEY = 'beuser';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    // Module System > Backend Users
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Beuser',
        'system',
        'tx_Beuser',
        'top',
        array(
            'BackendUser' => 'index, addToCompareList, removeFromCompareList, compare, online, terminateBackendUserSession',
            'BackendUserGroup' => 'index'
        ),
        array(
            'access' => 'admin',
            'icon' => 'EXT:beuser/Resources/Public/Icons/module-beuser.svg',
            'labels' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod.xlf'
        )
    );

    // Module System > Access
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Beuser',
        'system',
        'tx_Permission',
        'top',
        array(
            'Permission' => 'index, edit, update'
        ),
        array(
            'access' => 'admin',
            'icon' => 'EXT:beuser/Resources/Public/Icons/module-permission.svg',
            'labels' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf',
            'navigationComponentId' => 'typo3-pagetree'
        )
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: context_help
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/context_help/ext_tables.php
 */

$_EXTKEY = 'context_help';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('fe_groups', 'EXT:context_help/Resources/Private/Language/locallang_csh_fe_groups.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('fe_users', 'EXT:context_help/Resources/Private/Language/locallang_csh_fe_users.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('pages', 'EXT:context_help/Resources/Private/Language/locallang_csh_pages.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('pages_language_overlay', 'EXT:context_help/Resources/Private/Language/locallang_csh_pageslol.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('static_template', 'EXT:context_help/Resources/Private/Language/locallang_csh_statictpl.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_domain', 'EXT:context_help/Resources/Private/Language/locallang_csh_sysdomain.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_file_storage', 'EXT:context_help/Resources/Private/Language/locallang_csh_sysfilestorage.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_template', 'EXT:context_help/Resources/Private/Language/locallang_csh_systmpl.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tt_content', 'EXT:context_help/Resources/Private/Language/locallang_csh_ttcontent.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_file_reference', 'EXT:context_help/Resources/Private/Language/locallang_csh_sysfilereference.xlf');

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: cshmanual
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/cshmanual/ext_tables.php
 */

$_EXTKEY = 'cshmanual';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Cshmanual',
        'help',
        'cshmanual',
        'top',
        array(
            'Help' => 'index,all,detail',
        ),
        array(
            'access' => 'user,group',
            'icon' => 'EXT:cshmanual/Resources/Public/Icons/module-cshmanual.svg',
            'labels' => 'LLL:EXT:lang/locallang_mod_help_cshmanual.xlf',
        )
    );

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/template.php']['preStartPageHook']['cshmanual'] = \TYPO3\CMS\Cshmanual\Service\JavaScriptService::class . '->addJavaScript';
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: filelist
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/filelist/ext_tables.php
 */

$_EXTKEY = 'filelist';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Filelist',
        'file',
        'list',
        '',
        array(
            'FileList' => 'index, search',
        ),
        array(
            'access' => 'user,group',
            'workspaces' => 'online,custom',
            'icon' => 'EXT:filelist/Resources/Public/Icons/module-filelist.svg',
            'labels' => 'LLL:EXT:lang/locallang_mod_file_list.xlf'
        )
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: form
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/form/ext_tables.php
 */

$_EXTKEY = 'form';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register static TypoScript resource
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('form', 'Configuration/TypoScript/', 'Default TS');

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: impexp
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/impexp/ext_tables.php
 */

$_EXTKEY = 'impexp';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    $GLOBALS['TBE_MODULES_EXT']['xMOD_alt_clickmenu']['extendCMclasses'][] = array(
        'name' => \TYPO3\CMS\Impexp\Clickmenu::class
    );
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['taskcenter']['impexp']['TYPO3\\CMS\\Impexp\\Task\\ImportExportTask'] = array(
        'title' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_csh.xlf:.alttitle',
        'description' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_csh.xlf:.description',
        'icon' => 'EXT:impexp/Resources/Public/Images/export.gif'
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('xMOD_tx_impexp', 'EXT:impexp/Resources/Private/Language/locallang_csh.xlf');
    // CSH labels for TYPO3 4.5 and greater.  These labels override the ones set above, while still falling back to the original labels if no translation is available.
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:impexp/Resources/Private/Language/locallang_csh.xml'][] = 'EXT:impexp/Resources/Private/Language/locallang_csh_45.xlf';
    // Special context menu actions for the import/export module
    $importExportActions = '
		9000 = DIVIDER

		9100 = ITEM
		9100 {
			name = exportT3d
			label = LLL:EXT:impexp/Resources/Private/Language/locallang.xlf:export
			iconName = actions-document-export-t3d
			callbackAction = exportT3d
		}

		9200 = ITEM
		9200 {
			name = importT3d
			label = LLL:EXT:impexp/Resources/Private/Language/locallang.xlf:import
			iconName = actions-document-import-t3d
			callbackAction = importT3d
		}
	';
    // Context menu user default configuration
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
		options.contextMenu.table {
			virtual_root.items {
				' . $importExportActions . '
			}

			pages_root.items {
				' . $importExportActions . '
			}

			pages.items.1000 {
				' . $importExportActions . '
			}
		}
	');
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: lowlevel
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/lowlevel/ext_tables.php
 */

$_EXTKEY = 'lowlevel';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'system',
        'dbint',
        '',
        '',
        array(
            'routeTarget' => \TYPO3\CMS\Lowlevel\View\DatabaseIntegrityView::class . '::mainAction',
            'access' => 'admin',
            'name' => 'system_dbint',
            'workspaces' => 'online',
            'labels' => array(
                'tabs_images' => array(
                    'tab' => 'EXT:lowlevel/Resources/Public/Icons/module-dbint.svg',
                ),
                'll_ref' => 'LLL:EXT:lowlevel/Resources/Private/Language/locallang_mod.xlf',
            ),
        )
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'system',
        'config',
        '',
        '',
        array(
            'routeTarget' => \TYPO3\CMS\Lowlevel\View\ConfigurationView::class . '::mainAction',
            'access' => 'admin',
            'name' => 'system_config',
            'workspaces' => 'online',
            'labels' => array(
                'tabs_images' => array(
                    'tab' => 'EXT:lowlevel/Resources/Public/Icons/module-config.svg',
                ),
                'll_ref' => 'LLL:EXT:lowlevel/Resources/Private/Language/locallang_mod_configuration.xlf',
            ),
        )
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: recycler
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/recycler/ext_tables.php
 */

$_EXTKEY = 'recycler';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Recycler',
        'web',
        'Recycler',
        '',
        array(
            'RecyclerModule' => 'index',
        ),
        array(
            'access' => 'user,group',
            'icon' => 'EXT:recycler/Resources/Public/Icons/module-recycler.svg',
            'labels' => 'LLL:EXT:recycler/Resources/Private/Language/locallang_mod.xlf',
        )
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: reports
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/reports/ext_tables.php
 */

$_EXTKEY = 'reports';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Reports',
        'system',
        'txreportsM1',
        '',
        array(
            'Report' => 'index,detail'
        ), array(
            'access' => 'admin',
            'icon' => 'EXT:reports/Resources/Public/Icons/module-reports.svg',
            'labels' => 'LLL:EXT:reports/Resources/Private/Language/locallang.xlf'
        )
    );
    $statusReport = array(
        'title' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_report_title',
        'icon' => 'EXT:reports/Resources/Public/Icons/module-reports.svg',
        'description' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_report_description',
        'report' => \TYPO3\CMS\Reports\Report\Status\Status::class
    );
    if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'])) {
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'] = array();
    }
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'] = array_merge($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'], $statusReport);
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['typo3'][] = \TYPO3\CMS\Reports\Report\Status\Typo3Status::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['system'][] = \TYPO3\CMS\Reports\Report\Status\SystemStatus::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['security'][] = \TYPO3\CMS\Reports\Report\Status\SecurityStatus::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['configuration'][] = \TYPO3\CMS\Reports\Report\Status\ConfigurationStatus::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['fal'][] = \TYPO3\CMS\Reports\Report\Status\FalStatus::class;
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: scheduler
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/scheduler/ext_tables.php
 */

$_EXTKEY = 'scheduler';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    // Add module
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'system',
        'txschedulerM1',
        '',
        '',
        array(
            'routeTarget' => \TYPO3\CMS\Scheduler\Controller\SchedulerModuleController::class . '::mainAction',
            'access' => 'admin',
            'name' => 'system_txschedulerM1',
            'labels' => array(
                'tabs_images' => array(
                    'tab' => 'EXT:scheduler/Resources/Public/Icons/module-scheduler.svg',
                ),
                'll_ref' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_mod.xlf',
            ),
        )
    );

    // Add context sensitive help (csh) to the backend module
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
        '_MOD_system_txschedulerM1',
        'EXT:scheduler/Resources/Private/Language/locallang_csh_scheduler.xlf'
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: sys_note
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/sys_note/ext_tables.php
 */

$_EXTKEY = 'sys_note';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('sys_note');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_note', 'EXT:sys_note/Resources/Private/Language/locallang_csh_sysnote.xlf');

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: tstemplate
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/tstemplate/ext_tables.php
 */

$_EXTKEY = 'tstemplate';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'web',
        'ts',
        '',
        '',
        array(
            'routeTarget' => \TYPO3\CMS\Tstemplate\Controller\TypoScriptTemplateModuleController::class . '::mainAction',
            'access' => 'admin',
            'name' => 'web_ts',
            'labels' => array(
                'tabs_images' => array(
                    'tab' => 'EXT:tstemplate/Resources/Public/Icons/module-tstemplate.svg',
                ),
                'll_ref' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_mod.xlf',
            ),
        )
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_ts',
        \TYPO3\CMS\Tstemplate\Controller\TypoScriptTemplateConstantEditorModuleFunctionController::class,
        null,
        'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:constantEditor'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_ts',
        \TYPO3\CMS\Tstemplate\Controller\TypoScriptTemplateInformationModuleFunctionController::class,
        null,
        'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:infoModify'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_ts',
        \TYPO3\CMS\Tstemplate\Controller\TypoScriptTemplateObjectBrowserModuleFunctionController::class,
        null,
        'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:objectBrowser'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_ts',
        \TYPO3\CMS\Tstemplate\Controller\TemplateAnalyzerModuleFunctionController::class,
        null,
        'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:templateAnalyzer'
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: viewpage
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/viewpage/ext_tables.php
 */

$_EXTKEY = 'viewpage';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
    // Module Web->View
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Viewpage',
        'web',
        'view',
        'after:layout',
        array(
            'ViewModule' => 'show'
        ),
        array(
            'icon' => 'EXT:viewpage/Resources/Public/Icons/module-viewpage.svg',
            'labels' => 'LLL:EXT:viewpage/Resources/Private/Language/locallang_mod.xlf',
            'access' => 'user,group'
        )
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: svconnector
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/svconnector/ext_tables.php
 */

$_EXTKEY = 'svconnector';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Add module to the BE
if (TYPO3_MODE === 'BE') {
	// Register the backend module
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
			'Cobweb.Svconnector',
            // Make it a submodule of 'Admin Tools'
			'tools',
            // Submodule key
			'tx_Svconnector',
            // Position
			'',
			array(
				// An array holding the controller-action-combinations that are accessible
				'Testing' => 'default'
			),
			array(
					'access' => 'admin',
					'icon' => 'EXT:svconnector/Resources/Public/Images/ModuleSvconnector.svg',
					'labels' => 'LLL:EXT:svconnector/Resources/Private/Language/locallang.xlf'
			)
	);
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: external_import
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/external_import/ext_tables.php
 */

$_EXTKEY = 'external_import';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

// Load the module only in the BE context
if (TYPO3_MODE === 'BE') {
    // First register a main module
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
            'Cobweb.ExternalImport',
            // New main module
            'ExternalImport',
            '',
            '',
            array(),
            array(
                    'access' => '',
                    'icon' => 'EXT:' . $_EXTKEY . '/Resources/Public/Images/MainModuleIcon.svg',
                    'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/MainModule.xlf'
            )
    );
    // Register the "Data Import" backend module
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
            'Cobweb.ExternalImport',
            // Make it a submodule of 'ExternalImport'
            'ExternalImport',
            // Submodule key
            'external_import',
            // Position
            '',
            array(
                    // An array holding the controller-action-combinations that are accessible
                    'DataModule' => 'listSynchronizable, listNonSynchronizable, synchronize, viewConfiguration, newTask, createTask, editTask, updateTask, deleteTask'
            ),
            array(
                    'access' => 'user,group',
                    'icon' => 'EXT:' . $_EXTKEY . '/Resources/Public/Images/DataModuleIcon.svg',
                    'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/DataModule.xlf'
            )
    );
    // Register the "Log" backend module
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
            'Cobweb.ExternalImport',
            // Make it a submodule of 'ExternalImport'
            'ExternalImport',
            // Submodule key
            'external_import_log',
            // Position
            '',
            array(
                    // An array holding the controller-action-combinations that are accessible
                    'LogModule' => 'list, get'
            ),
            array(
                    'access' => 'user,group',
                    'icon' => 'EXT:' . $_EXTKEY . '/Resources/Public/Images/LogModuleIcon.svg',
                    'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/LogModule.xlf'
            )
    );
}

// Register sprite icons for new tables
/** @var \TYPO3\CMS\Core\Imaging\IconRegistry $iconRegistry */
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
        'tx_external_import-log',
        \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
        [
                'source' => 'EXT:external_import/Resources/Public/Images/Log.png'
        ]
);

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: news
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/news/ext_tables.php
 */

$_EXTKEY = 'news';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

$boot = function () {

    // CSH - context sensitive help
    foreach (['news', 'media', 'file', 'link', 'tag'] as $table) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_news_domain_model_' . $table);
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
            'tx_news_domain_model_' . $table, 'EXT:news/Resources/Private/Language/locallang_csh_' . $table . '.xlf');
    }

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
        'tt_content.pi_flexform.news_pi1.list', 'EXT:news/Resources/Private/Language/locallang_csh_flexforms.xlf');

    // Extension manager configuration
    $configuration = \GeorgRinger\News\Utility\EmConfiguration::getSettings();

    if (TYPO3_MODE === 'BE') {
        // Override news icon
        $GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = [
            0 => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:news-folder',
            1 => 'news',
            2 => 'apps-pagetree-folder-contains-news'
        ];

        /***************
         * Show news table in page module
         */
        if ($configuration->getPageModuleFieldsNews()) {
            $addTableItems = \TYPO3\CMS\Core\Utility\GeneralUtility::trimExplode(';',
                $configuration->getPageModuleFieldsNews(), true);
            foreach ($addTableItems as $item) {
                $split = \TYPO3\CMS\Core\Utility\GeneralUtility::trimExplode('=', $item, true);
                if (count($split) == 2) {
                    $fTitle = $split[0];
                    $fList = $split[1];
                } else {
                    $fTitle = '';
                    $fList = $split[0];
                }
                $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cms']['db_layout']['addTables']['tx_news_domain_model_news'][] = [
                    'MENU' => $fTitle,
                    'fList' => $fList,
                    'icon' => true,
                ];
            }
        }

        if ($configuration->getPageModuleFieldsCategory()) {
            $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cms']['db_layout']['addTables']['sys_category'][0] = [
                'fList' => htmlspecialchars($configuration->getPageModuleFieldsCategory()),
                'icon' => true
            ];
        }

        // Extend user settings
        $GLOBALS['TYPO3_USER_SETTINGS']['columns']['newsoverlay'] = [
            'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:usersettings.overlay',
            'type' => 'select',
            'itemsProcFunc' => \GeorgRinger\News\Hooks\ItemsProcFunc::class . '->user_categoryOverlay',
        ];
        $GLOBALS['TYPO3_USER_SETTINGS']['showitem'] .= ',
			--div--;LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:pi1_title,newsoverlay';

        // Add tables to livesearch (e.g. "#news:fo" or "#newscat:fo")
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['news'] = 'tx_news_domain_model_news';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['newstag'] = 'tx_news_domain_model_tag';

        /* ===========================================================================
            Register BE-Modules
        =========================================================================== */
        if ($configuration->getShowImporter()) {
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'GeorgRinger.news',
                'web',
                'tx_news_m1',
                '',
                ['Import' => 'index, runJob, jobInfo'],
                [
                    'access' => 'user,group',
                    'icon' => 'EXT:news/Resources/Public/Icons/module_import.svg',
                    'labels' => 'LLL:EXT:news/Resources/Private/Language/locallang_mod.xlf',
                ]
            );
        }

        /* ===========================================================================
            Register BE-Module for Administration
        =========================================================================== */
        if ($configuration->getShowAdministrationModule()) {
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'GeorgRinger.news',
                'web',
                'tx_news_m2',
                '',
                ['Administration' => 'index,newNews,newCategory,newTag,newsPidListing'],
                [
                    'access' => 'user,group',
                    'icon' => 'EXT:news/Resources/Public/Icons/module_administration.svg',
                    'labels' => 'LLL:EXT:news/Resources/Private/Language/locallang_modadministration.xlf',
                ]
            );
        }

        /* ===========================================================================
            Ajax call to save tags
        =========================================================================== */
        $GLOBALS['TYPO3_CONF_VARS']['BE']['AJAX']['News::createTag'] = [
            'callbackMethod' => \GeorgRinger\News\Hooks\SuggestReceiverCall::class . '->createTag',
            'csrfTokenCheck' => false
        ];
    }

    /* ===========================================================================
        Default configuration
    =========================================================================== */
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['orderByCategory'] = 'uid,title,tstamp,sorting';
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['orderByNews'] = 'tstamp,datetime,crdate,title' . ($configuration->getManualSorting() ? ',sorting' : '');
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['orderByTag'] = 'tstamp,crdate,title';
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['switchableControllerActions']['list'] = $configuration->getRemoveListActionFromFlexforms();

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        'news',
        'Configuration/TSconfig/Page/news_only.txt',
        'EXT:news :: Restrict pages to news records');

};

$boot();
unset($boot);

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: externalimport_tut
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/externalimport_tut/ext_tables.php
 */

$_EXTKEY = 'externalimport_tut';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}


// Register sprite icons for new tables
/** @var \TYPO3\CMS\Core\Imaging\IconRegistry $iconRegistry */
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
        'tx_externalimport_tut-department',
        \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
        [
                'source' => 'EXT:externalimport_tut/Resources/Public/Icons/Department.png'
        ]
);
$iconRegistry->registerIcon(
        'tx_externalimport_tut-team',
        \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
        [
                'source' => 'EXT:externalimport_tut/Resources/Public/Icons/Team.png'
        ]
);

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: static_info_tables
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/static_info_tables/ext_tables.php
 */

$_EXTKEY = 'static_info_tables';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE == 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
	/**
	 * Registers the Static Info Tables Manager backend module, if enabled
	 */
	if ($GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['enableManager']) {
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
			'SJBR.' . $_EXTKEY,
			// Make module a submodule of 'tools'
			'tools',
			// Submodule key
			'Manager',
			// Position
			'',
			// An array holding the controller-action combinations that are accessible
			array(
				'Manager' => 'information,newLanguagePack,createLanguagePack,testForm,testFormResult,sqlDumpNonLocalizedData'
			),
			array(
				'access' => 'user,group',
				'icon' => 'EXT:' . $_EXTKEY . '/Resources/Public/Images/Icons/StaticInfoTablesManager.png',
				'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xlf'
			)
		);
		// Add module configuration setup
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY, 'setup', '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TypoScript/Manager/setup.txt">');
		
		// Enable editing Static Info Tables
		if (is_array($GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['tables'])) {
			$tableNames = array_keys($GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['tables']);
			foreach ($tableNames as $tableName) {
				$GLOBALS['TCA'][$tableName]['ctrl']['readOnly'] = 0;
			}
		}
	}
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: sr_feuser_register
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/sr_feuser_register/ext_tables.php
 */

$_EXTKEY = 'sr_feuser_register';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('fe_groups_language_overlay');

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: typo3_forum
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/typo3_forum/ext_tables.php
 */

$_EXTKEY = 'typo3_forum';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];



if (!defined('TYPO3_MODE'))
	die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Mittwald.Typo3Forum', 'Pi1', 'typo3_forum'
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Mittwald.Typo3Forum', 'Widget', 'typo3_forum Widgets'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'typo3_forum');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Bootstrap', 'typo3_forum Bootstrap Template');

$pluginSignature = strtolower(\TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY)) . '_pi1';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/Pi1.xml');

$pluginSignature = strtolower(\TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY)) . '_widget';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/Widgets.xml');

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: cal
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/cal/ext_tables.php
 */

$_EXTKEY = 'cal';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (! defined ('TYPO3_MODE'))
	die ('Access denied.');

$extPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath ($_EXTKEY);

// Allow all calendar records on standard pages, in addition to SysFolders.
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages ('tx_cal_event');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages ('tx_cal_category');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages ('tx_cal_calendar');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages ('tx_cal_exception_event');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages ('tx_cal_exception_event_group');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages ('tx_cal_location');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages ('tx_cal_organizer');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages ('tx_cal_unknown_users');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages ('tx_cal_attendee');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages ('tx_cal_fe_user_event_monitor_mm');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages ('tx_cal_event_deviation');

// Add Calendar Events to the "Insert Records" content element
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToInsertRecords ('tx_cal_event');

// initalize 'context sensitive help' (csh)
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr ('tx_cal_event', 'EXT:cal/Resources/Private/Help/locallang_csh_txcalevent.php');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr ('tx_cal_calendar', 'EXT:cal/Resources/Private/Help/locallang_csh_txcalcal.php');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr ('tx_cal_category', 'EXT:cal/Resources/Private/Help/locallang_csh_txcalcat.php');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr ('tx_cal_exception_event', 'EXT:cal/Resources/Private/Help/locallang_csh_txcalexceptionevent.php');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr ('tx_cal_exception_event_group', 'EXT:cal/Resources/Private/Help/locallang_csh_txcalexceptioneventgroup.php');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr ('tx_cal_location', 'EXT:cal/Resources/Private/Help/locallang_csh_txcallocation.php');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr ('tx_cal_organizer', 'EXT:cal/Resources/Private/Help/locallang_csh_txcalorganizer.php');

if (TYPO3_MODE == "BE") {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule ("tools", "calrecurrencegenerator", "", $extPath . "Classes/Backend/Modul/");
	$GLOBALS['TBE_MODULES_EXT'] ['xMOD_db_new_content_el'] ['addElClasses'] ['TYPO3\CMS\Cal\Backend\CalWizIcon'] = $extPath . 'Classes/Backend/CalWizIcon.php';
}


TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: dce
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/dce/ext_tables.php
 */

$_EXTKEY = 'dce';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];



/*  | This extension is part of the TYPO3 project. The TYPO3 project is
 *  | free software and is licensed under GNU General Public License.
 *  |
 *  | (c) 2012-2016 Armin Ruediger Vieweg <armin@v.ieweg.de>
 */

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$boot = function ($extensionKey) {
    // Include cached ext_tables
    if (!\ArminVieweg\Dce\Cache::cacheExists(\ArminVieweg\Dce\Cache::CACHE_TYPE_EXTTABLES)) {
        /** @var $dceCache \ArminVieweg\Dce\Cache */
        $dceCache = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('ArminVieweg\Dce\Cache');
        $dceCache->createExtTables();
    }
    if (\ArminVieweg\Dce\Cache::cacheExists(\ArminVieweg\Dce\Cache::CACHE_TYPE_EXTTABLES)) {
        require_once(PATH_site . \ArminVieweg\Dce\Cache::CACHE_PATH . \ArminVieweg\Dce\Cache::CACHE_TYPE_EXTTABLES);
    }


    $extensionIconPath = 'EXT:' . $extensionKey . '/Resources/Public/Icons/ext_icon.svg';
    if (!\TYPO3\CMS\Core\Utility\GeneralUtility::compat_version('7.6')) {
        $extensionIconPath = 'EXT:' . $extensionKey . '/ext_icon.png';
    }

    // Register backend module
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'ArminVieweg.' . $extensionKey,
        'tools',
        'dceModule',
        '',
        array(
            'DceModule' => 'index,hallOfFame,updatePreviewTemplates,updateTcaMappings',
            'Dce' => 'renderPreview'
        ),
        array(
            'access' => 'user,group',
            'icon' => $extensionIconPath,
            'labels' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_mod.xml',
        )
    );

    // Register PageTS defaults
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('tx_dce.defaults {
        simpleBackendView {
            titleCropLength = 10
            titleCropAppendix = ...

            imageWidth = 50c
            imageHeight = 50c

            containerGroupColors {
                10 = #0079BF
                11 = #D29034
                12 = #519839
                13 = #B04632
                14 = #838C91
                15 = #CD5A91
                16 = #4BBF6B
                17 = #89609E
                18 = #00AECC
                19 = #ED2448
                20 = #FF8700
            }
        }
    ');

    if (\TYPO3\CMS\Core\Utility\GeneralUtility::compat_version('7.6')) {
        /** @var \TYPO3\CMS\Core\Imaging\IconRegistry $iconRegistry */
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Core\Imaging\IconRegistry');
        // DCE Type Icons
        $iconRegistry->registerIcon(
            'ext-dce-dce-type-databased',
            'TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider',
            array('source' => 'EXT:dce/Resources/Public/Icons/tx_dce_domain_model_dce_databased.png')
        );
        $iconRegistry->registerIcon(
            'ext-dce-dce-type-filebased',
            'TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider',
            array('source' => 'EXT:dce/Resources/Public/Icons/tx_dce_domain_model_dce_filebased.png')
        );
        // DCE Field Type Icons
        $iconRegistry->registerIcon(
            'ext-dce-dcefield-type-element',
            'TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider',
            array('source' => 'EXT:dce/Resources/Public/Icons/tx_dce_domain_model_dcefield_element.png')
        );
        $iconRegistry->registerIcon(
            'ext-dce-dcefield-type-tab',
            'TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider',
            array('source' => 'EXT:dce/Resources/Public/Icons/tx_dce_domain_model_dcefield_tab.png')
        );
        $iconRegistry->registerIcon(
            'ext-dce-dcefield-type-section',
            'TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider',
            array('source' => 'EXT:dce/Resources/Public/Icons/tx_dce_domain_model_dcefield_section.png')
        );
    }
};

$boot($_EXTKEY);
unset($boot);

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: mask
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/mask/ext_tables.php
 */

$_EXTKEY = 'mask';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

if (TYPO3_MODE === 'BE') {

    /**
     * Registers a Backend Module
     */
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'MASK.' . $_EXTKEY, 'tools', // Make module a submodule of 'admin'
        'mask', // Submodule key
        'top', // Position
        array(
        'WizardContent' => 'list, new, create, edit, update, delete, generate, showHtml, createMissingFolders',
        'WizardPage' => 'list, new, create, edit, update, delete',
        ), array(
        'access' => 'admin',
        'icon' => 'EXT:' . $_EXTKEY . '/Resources/Public/Icons/module-mask_wizard.svg',
        'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mask.xlf',
        )
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerAjaxHandler(
        'WizardController::checkFieldKey', 'MASK\Mask\Controller\WizardController->checkFieldKey'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerAjaxHandler(
        'WizardController::checkElementKey', 'MASK\Mask\Controller\WizardController->checkElementKey'
    );
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Mask');

// Load JSON-File from $_EXTCONF:
$extConf = unserialize($_EXTCONF);
if (!empty($extConf["json"]) && file_exists(PATH_site . $extConf["json"])) {

    $json = json_decode(file_get_contents(PATH_site . $extConf["json"]), true);

    /* @var $objectManager TYPO3\CMS\Extbase\Object\ObjectManager */
    $objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
    $utility = new \MASK\Mask\Utility\MaskUtility($objectManager);

    // Generate TCA for Content-Elements
    $contentColumns = $utility->generateFieldsTca($json["tt_content"]["tca"]);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $contentColumns);
    $utility->setElementsTca($json["tt_content"]["elements"]);

    // Generate TCA for Pages
    $pagesColumns = $utility->generateFieldsTca($json["pages"]["tca"]);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $pagesColumns);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages_language_overlay', $pagesColumns);
    $utility->setPageTca($json["pages"]["tca"], $dummy);

    // Generate TCA for Inline-Fields
    $utility->setInlineTca($json);
}

// include css for styling of backend preview of mask content elements
$TBE_STYLES['skins']['mask']['name'] = 'mask';
$TBE_STYLES['skins']['mask']['stylesheetDirectories'][] = 'EXT:mask/Resources/Public/Styles/Backend/';
//$TBE_STYLES['skins']['mask']['stylesheetDirectories'][] = "/" . $extConf["backend"];

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: powermail
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/powermail/ext_tables.php
 */

$_EXTKEY = 'powermail';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

/**
 * Include Plugins
 */
// Pi1
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($_EXTKEY, 'Pi1', 'Powermail');
// Pi2
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($_EXTKEY, 'Pi2', 'Powermail_Frontend');

/**
 * Disable non needed fields in tt_content
 */
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY . '_pi1'] = 'select_key,pages,recursive';

/**
 * Include Backend Module
 * @todo remove condition for TYPO3 6.2 in upcoming major version
 */
if (
    TYPO3_MODE === 'BE' &&
    !\In2code\Powermail\Utility\ConfigurationUtility::isDisableBackendModuleActive() &&
    !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)
) {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'In2code.' . $_EXTKEY,
        'web',
        'm1',
        '',
        array(
            'Module' => 'dispatch, list, exportXls, exportCsv, reportingBe, toolsBe, overviewBe, ' .
                'checkBe, converterBe, converterUpdateBe, reportingFormBe, reportingMarketingBe, ' .
                'fixUploadFolder, fixWrongLocalizedForms, fixFilledMarkersInLocalizedFields, ' .
                'fixWrongLocalizedPages, fixFilledMarkersInLocalizedPages'
        ),
        array(
            'access' => 'user,group',
            'icon' => 'EXT:' . $_EXTKEY . '/ext_icon.' .
                (\TYPO3\CMS\Core\Utility\GeneralUtility::compat_version('7.0') ? 'svg' : 'gif'),
            'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xlf',
        )
    );
}

/**
 * Include Flexform
 * @todo remove condition for TYPO3 6.2 in upcoming major version
 */
// Pi1
$fileName = 'FlexformPi1.xml';
if (!\TYPO3\CMS\Core\Utility\GeneralUtility::compat_version('7.6')) {
    $fileName = 'FlexformPi1Old.xml';
}
$pluginSignature = str_replace('_', '', $_EXTKEY) . '_pi1';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignature,
    'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/' . $fileName
);

// Pi2
$pluginSignature = str_replace('_', '', $_EXTKEY) . '_pi2';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignature,
    'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/FlexformPi2.xml'
);

/**
 * ContentElementWizard for Pi1
 */
$TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses']['In2code\Powermail\Utility\Hook\ContentElementWizard'] =
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) .
    'Classes/Utility/Hook/ContentElementWizard.php';

/**
 * Include TypoScript
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript/Main',
    'Main Template'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript/Powermail_Frontend',
    'Powermail_Frontend'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript/CssDemo',
    'Add Demo CSS'
);
if (!\In2code\Powermail\Utility\ConfigurationUtility::isDisableMarketingInformationActive()) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $_EXTKEY,
        'Configuration/TypoScript/Marketing',
        'Marketing Information'
    );
}

/**
 * Table Configuration
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_powermail_domain_model_forms',
    'EXT:powermail/Resources/Private/Language/locallang_csh_tx_powermail_domain_model_forms.xlf'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_powermail_domain_model_forms');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_powermail_domain_model_pages',
    'EXT:powermail/Resources/Private/Language/locallang_csh_tx_powermail_domain_model_pages.xlf'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_powermail_domain_model_pages');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_powermail_domain_model_fields',
    'EXT:powermail/Resources/Private/Language/locallang_csh_tx_powermail_domain_model_fields.xlf'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_powermail_domain_model_fields');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_powermail_domain_model_mails',
    'EXT:powermail/Resources/Private/Language/locallang_csh_tx_powermail_domain_model_mails.xlf'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_powermail_domain_model_mails');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_powermail_domain_model_answers',
    'EXT:powermail/Resources/Private/Language/locallang_csh_tx_powermail_domain_model_answers.xlf'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_powermail_domain_model_answers');

/**
 * Garbage Collector
 */
if (\In2code\Powermail\Utility\ConfigurationUtility::isEnableTableGarbageCollectionActive()) {
    $tgct = 'TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask';
    $table = 'tx_powermail_domain_model_mails';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][$tgct]['options']['tables'][$table] = array(
        'dateField' => 'tstamp',
        'expirePeriod' => 30
    );
    $table = 'tx_powermail_domain_model_answers';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][$tgct]['options']['tables'][$table] = array(
        'dateField' => 'tstamp',
        'expirePeriod' => 30
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: pt_extbase
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/pt_extbase/ext_tables.php
 */

$_EXTKEY = 'pt_extbase';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', '[pt_extbase] Tools for Extbase development');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ptextbase_tree_node');

// Custom CSS include
if (TYPO3_MODE=="BE") {
    $TBE_STYLES['inDocStyles_TBEstyle'] .= '@import "/typo3conf/ext/pt_extbase/Resources/Public/CSS/Backend.css";';
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: pt_extlist
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/pt_extlist/ext_tables.php
 */

$_EXTKEY = 'pt_extlist';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}


if (TYPO3_MODE == 'BE') {

    // register the cache in BE so it will be cleared with "clear all caches"
// 	try {
// 		t3lib_cache::initializeCachingFramework();
// 			// State cache
// 		$GLOBALS['typo3CacheFactory']->create(
// 			'tx_ptextlist_cache_state',
// 			$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tx_ptextbase']['frontend'],
// 			$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tx_ptextbase']['backend'],
// 			$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tx_ptextbase']['options']
// 		);

// 	} catch(t3lib_cache_exception_NoSuchCache $exception) {

// 	}
}


/**
 * Load static templates for Typoscript settings
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', '[pt_extlist] Basic settings');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Export', '[pt_extlist] Export settings');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Demolist', '[pt_extlist] Demolist Package');

$pluginModes = array(
    'Pi1' => 'ExtList',
    'Cached' => 'ExtList (Cached)'
);

foreach ($pluginModes as $ident => $label) {
    
    /**
     * Register plugin in ExtBase
     */
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        $_EXTKEY,           // The extension name (in UpperCamelCase) or the extension key (in lower_underscore)
        $ident,                // A unique name of the plugin in UpperCamelCase
        $label        // A title shown in the backend dropdown field
    );
}



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ptextlist_domain_model_bookmark_bookmark');

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: realurl
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/realurl/ext_tables.php
 */

$_EXTKEY = 'realurl';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


// Backend module is available only in TYPO3 7.6 or newer
if (version_compare(TYPO3_version, '7.6.0', '>=')) {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'DmitryDulepov.Realurl',
		'web',
		'realurl',
		'',
		array(
			'Overview' => 'index',
			'Aliases' => 'index,edit,delete,deleteAll',
			'UrlCache' => 'index,delete,deleteAll,flush',
			'PathCache' => 'index,delete',
		),
		array(
			'access' => 'user,group',
			'icon' => 'EXT:realurl/ext_icon.gif',
			'labels' => 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf',
		)
	);
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: seo_basics
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/seo_basics/ext_tables.php
 */

$_EXTKEY = 'seo_basics';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Adding Web>Info module for SEO management
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_info',
		'B13\\SeoBasics\\BackendModule\\SeoModule',
		'',
		'LLL:EXT:seo_basics/Resources/Private/Language/db.xml:module.title',
		'function'
	);
}


// Adding a static template TypoScript configuration from static/ (deprecated)
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('seo_basics', 'static', 'Metatags and XML Sitemap (old), simple replaced by new one');

// Adding the static template for new TypoScript
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('seo_basics', 'Configuration/TypoScript', 'Metatags and XML Sitemap');

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: yag
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/yag/ext_tables.php
 */

$_EXTKEY = 'yag';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];



if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

/**
 * Register Frontend Plugin
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $_EXTKEY,
    'Pi1',
    'YAG - Yet Another Gallery'
);

/**
 * Register Backend Module
 */
if (TYPO3_MODE === 'BE') {

    /**
     * Registers a Backend Module
     */
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        $_EXTKEY,
        'web', // Make module a submodule of 'web'
        'tx_yag_m1', // Submodule key
        '', // Position
        array( // An array holding the controller-action-combinations that are accessible
            'Gallery' => 'list, index, show, new, create, edit, update, delete',
            'Album' => 'show, new, create, edit, update, delete, addItems, updateSorting, bulkUpdate',
            'FileUpload' => 'upload',
            'Item' => 'index, show, new, create, edit, update, delete, bulkUpdate',
            'ItemList' => 'list,submitFilter',
            'ItemFile' => 'index, show, new, create, edit, update, delete',
            'DirectoryImport' => 'showImportForm, importFromDirectory',
            'ZipImport' => 'showImportForm, importFromZip, createNewAlbumAndImportFromZip',
            'Remote' => 'addItemToAlbum, albumList, galleryList',
            'Ajax' => 'updateItemSorting,updateGallerySorting,directoryAutoComplete,deleteItem,deleteGallery,deleteAlbum,updateItemTitle,setItemAsAlbumThumb,
				updateItemDescription,updateAlbumSorting,updateAlbumTitle,updateAlbumDescription,updateGenericProperty,
				setAlbumAsGalleryThumb,hideAlbum,unhideAlbum,hideGallery,unhideGallery,getSubDirs',
            'AdminMenu' => 'index',

            // This is additional for backend! Keep in mind, when copy&pasting from ext_localconf
            'Backend' => 'settingsNotAvailable,extConfSettingsNotAvailable,noGalleryIsPosibleOnPIDZero,maintenanceOverview,clearAllPageCache,doDbUpdate,markPageAsYagSysFolder',
            'ResolutionFileCache' => 'clearResolutionFileCache,buildResolutionByConfiguration,buildAllItemResolutions',
        ),
        array(
            'access' => 'user,group',
            'icon' => 'EXT:yag/ext_icon.png',
            'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xlf',
        )
    );

    $TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses']['Tx_Yag_Utility_WizzardIcon'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/Utility/WizzardIcon.php';

    // Register status report checks in backend
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['YAG'] = array(
        'Tx_Yag_Report_ExternalLibraries',
        'Tx_Yag_Report_Filesystem',
        'Tx_Yag_Report_EnvironmentVariables'
    );


    // Add Backend TypoScript
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY, 'setup', '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:yag/Configuration/TypoScript/Backend/setup.txt">');
}


/**
 * Register Plugin as Page Content
 */
$extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_pi1';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'select_key,pages';


/**
 * Register static Typoscript Template
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', '[yag] Yet Another Gallery');


/**
 * Register flexform
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/Flexform.xml');
$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_pi1'] = 'pi_flexform';


/**
 * TCA Configuration
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_yag_domain_model_album', 'EXT:yag/Resources/Private/Language/locallang_csh_tx_yag_domain_model_album.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_yag_domain_model_album');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_yag_domain_model_gallery', 'EXT:yag/Resources/Private/Language/locallang_csh_tx_yag_domain_model_gallery.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_yag_domain_model_gallery');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_yag_domain_model_item', 'EXT:yag/Resources/Private/Language/locallang_csh_tx_yag_domain_model_item.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_yag_domain_model_item');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_yag_domain_model_resolutionfilecache', 'EXT:yag/Resources/Private/Language/locallang_csh_tx_yag_domain_model_resolutionfilecache.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_yag_domain_model_resolutionfilecache');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_yag_domain_model_itemmeta', 'EXT:yag/Resources/Private/Language/locallang_csh_tx_yag_domain_model_itemmeta.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_yag_domain_model_itemmeta');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_yag_domain_model_tag', 'EXT:yag/Resources/Private/Language/locallang_csh_tx_yag_domain_model_tag.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_yag_domain_model_tag');

// Register yag for 'contains plugin' in sysfolders
$TCA['pages']['columns']['module']['config']['items'][] = array('LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_general.yag', 'yag', 'i/ext_icon.png');
\TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon('pages', 'contains-yag', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('yag') . 'ext_icon.gif');

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

#