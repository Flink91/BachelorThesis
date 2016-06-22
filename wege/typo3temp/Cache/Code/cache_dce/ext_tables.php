<?php

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
	0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce_long',
	1 => '--div--'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', array(

));


	///////////////////////////////////////////////////// uid: 3 ///
	
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
	'tt_content',
	'CType',
	array(
		'Wege Box',
		'dce_dceuid3',
		'content-plugin'
	)
);
		


		$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['dce_dceuid3'] =
		'content-plugin';
	

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_dceuid3'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_dceuid3'] = '<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet.tabGeneral><ROOT><TCEforms><sheetTitle>LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab</sheetTitle></TCEforms><type>array</type><el><settings.wgppb><TCEforms><label>Ein Feld zum Customizen</label><config><type>input</type><size>30</size><eval>trim</eval><softref>typolink,typolink_tag,images,url</softref><wizards><_PADDING>2</_PADDING><link><type>popup</type><title>Link</title><module><name>wizard_element_browser</name><urlParameters><mode>wizard</mode></urlParameters></module><icon>link_popup.gif</icon><script>browse_links.php?mode=wizard</script><params><!--<blindLinkOptions>page,file,folder,url,spec</blindLinkOptions>--></params><JSopenParams>height=500,width=500,status=0,menubar=0,scrollbars=1</JSopenParams></link></wizards></config></TCEforms></settings.wgppb></el></ROOT></sheet.tabGeneral></sheets></T3DataStructure>';
$GLOBALS['TCA']['tt_content']['types']['dce_dceuid3']['showitem'] = '--palette--;;dce_palette_3_head,--palette--;;dce_palette_3,pi_flexform,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended';

	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_3_head']['canNotCollapse'] = true;
	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_3_head']['showitem'] = 'CType';

	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_3']['canNotCollapse'] = true;
	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_3']['showitem'] = 'sys_language_uid, l18n_parent, colPos, spaceBefore, spaceAfter, section_frame, hidden';





// global definitions
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
	0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.miscellaneous',
	1 => '--div--'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('mod.wizards.newContentElement.wizardItems.dce.header = LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce_long');
