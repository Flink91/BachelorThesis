<?php


///////////////////////////////////////////////////// uid: 3 ///
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'ArminVieweg.dce',
	'dceuid3',
	array(
		'Dce' => 'show',
	),
	array(
		
	),
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript('dce', 'setup', '
# Hide lib.stdheader for DCE with uid 3
' . 'tt_content.dce_dceuid3.10 >', 43);





	
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	mod.wizards.newContentElement.wizardItems.common.elements.dce_dceuid3 {
	
			iconIdentifier = content-plugin
		
	title = Wege Box
	description = Zeigt eine Box an in der man nur einen Link ändern kann.
	tt_content_defValues {
	CType = dce_dceuid3
	}
	}
	mod.wizards.newContentElement.wizardItems.common.show := addToList(dce_dceuid3)
	');



