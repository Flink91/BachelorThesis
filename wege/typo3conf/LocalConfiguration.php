<?php
return [
    'BE' => [
        'debug' => true,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$P$C7y7tTfDBtb7cqXVeWKR9sTNpCqyBb/',
        'loginSecurityLevel' => 'rsa',
    ],
    'DB' => [
        'database' => 'tpo3',
        'host' => '127.0.0.1',
        'password' => '',
        'port' => 3306,
        'username' => 'root',
    ],
    'EXT' => [
        'extConf' => [
            'bootstrap_core' => 'a:1:{s:27:"enableHeaderRenderingOption";s:1:"1";}',
            'bsdist' => 'a:0:{}',
            'cal' => 'a:19:{s:13:"noTabDividers";s:1:"0";s:21:"hideLocationTextfield";s:1:"0";s:22:"hideOrganizerTextfield";s:1:"0";s:20:"useLocationStructure";s:15:"tx_cal_location";s:21:"useOrganizerStructure";s:16:"tx_cal_organizer";s:11:"todoSubtype";s:5:"event";s:16:"categoryTVHeight";s:3:"280";s:11:"treeOrderBy";s:3:"uid";s:9:"showTimes";s:1:"1";s:9:"useTeaser";s:1:"0";s:20:"hideDeviationRecords";s:1:"1";s:15:"categoryService";s:15:"tx_cal_category";s:15:"recurrenceStart";s:8:"20140101";s:13:"recurrenceEnd";s:8:"20201231";s:18:"useInternalCaching";s:1:"1";s:11:"cachingMode";s:6:"normal";s:13:"cacheLifetime";s:1:"0";s:13:"cachingEngine";s:8:"internal";s:30:"enableRealURLAutoConfiguration";s:1:"1";}',
            'css_styled_content' => 'a:1:{s:32:"loadContentElementWizardTsConfig";s:1:"1";}',
            'dce' => 'a:5:{s:16:"filebasedDcePath";s:0:"";s:21:"disableAutoClearCache";s:1:"0";s:29:"disableAutoClearFrontendCache";s:1:"0";s:17:"disableCodemirror";s:1:"0";s:17:"enableUpdateCheck";s:1:"0";}',
            'external_import' => 'a:8:{s:10:"storagePID";s:1:"0";s:10:"logStorage";s:1:"0";s:9:"timelimit";s:2:"-1";s:11:"reportEmail";s:0:"";s:13:"reportSubject";s:0:"";s:12:"previewLimit";s:2:"10";s:5:"debug";s:1:"0";s:10:"disableLog";s:1:"0";}',
            'externalimport_tut' => 'a:0:{}',
            'fluid_styled_content' => 'a:1:{s:32:"loadContentElementWizardTsConfig";s:1:"1";}',
            'mask' => 'a:4:{s:4:"json";s:19:"typo3conf/mask.json";s:7:"content";s:28:"fileadmin/templates/content/";s:7:"preview";s:28:"fileadmin/templates/preview/";s:7:"backend";s:28:"fileadmin/templates/backend/";}',
            'news' => 'a:18:{s:29:"removeListActionFromFlexforms";s:1:"2";s:20:"pageModuleFieldsNews";s:317:"LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:pagemodule_simple=title,datetime;LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:pagemodule_advanced=title,datetime,teaser,categories;LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:pagemodule_complex=title,datetime,teaser,categories,archive;";s:24:"pageModuleFieldsCategory";s:17:"title,description";s:11:"archiveDate";s:4:"date";s:13:"prependAtCopy";s:1:"1";s:6:"tagPid";s:1:"1";s:25:"showMediaDescriptionField";s:1:"0";s:12:"rteForTeaser";s:1:"0";s:22:"contentElementRelation";s:1:"0";s:13:"manualSorting";s:1:"0";s:19:"categoryRestriction";s:0:"";s:34:"categoryBeGroupTceFormsRestriction";s:1:"0";s:6:"useFal";s:1:"1";s:19:"dateTimeNotRequired";s:1:"0";s:12:"showImporter";s:1:"0";s:18:"storageUidImporter";s:1:"1";s:22:"resourceFolderImporter";s:12:"/news_import";s:24:"showAdministrationModule";s:1:"1";}',
            'powermail' => 'a:8:{s:12:"disableIpLog";s:1:"0";s:27:"disableMarketingInformation";s:1:"0";s:20:"disableBackendModule";s:1:"0";s:24:"disablePluginInformation";s:1:"0";s:13:"enableCaching";s:1:"0";s:28:"enableTableGarbageCollection";s:1:"0";s:15:"l10n_mode_merge";s:1:"0";s:29:"replaceIrreWithElementBrowser";s:1:"0";}',
            'pt_extbase' => 'a:4:{s:11:"logFilePath";s:0:"";s:17:"logLevelThreshold";s:1:"6";s:22:"emailLogLevelThreshold";s:1:"2";s:14:"emailReceivers";s:0:"";}',
            'pt_extlist' => 'a:0:{}',
            'realurl' => 'a:5:{s:10:"configFile";s:26:"typo3conf/realurl_conf.php";s:14:"enableAutoConf";s:1:"0";s:14:"autoConfFormat";s:1:"0";s:12:"enableDevLog";s:1:"0";s:17:"enableBadBehavior";s:1:"0";}',
            'recycler' => 'a:0:{}',
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
            'scheduler' => 'a:4:{s:11:"maxLifetime";s:4:"1440";s:11:"enableBELog";s:1:"1";s:15:"showSampleTasks";s:1:"1";s:11:"useAtdaemon";s:1:"0";}',
            'seo_basics' => 'a:1:{s:10:"xmlSitemap";s:1:"1";}',
            'sr_feuser_register' => 'a:3:{s:12:"uploadFolder";s:27:"uploads/tx_srfeuserregister";s:10:"imageTypes";s:30:"png, jpg, jpeg, gif, tif, tiff";s:12:"imageMaxSize";s:3:"500";}',
            'static_info_tables' => 'a:1:{s:13:"enableManager";s:1:"0";}',
            'svconnector' => 'a:1:{s:5:"debug";s:1:"0";}',
            'svconnector_csv' => 'a:1:{s:5:"debug";s:1:"0";}',
            'svconnector_feed' => 'a:1:{s:5:"debug";s:1:"0";}',
            'typo3_forum' => 'a:0:{}',
            'yag' => 'a:3:{s:18:"hashFilesystemRoot";s:13:"typo3temp/yag";s:13:"origFilesRoot";s:13:"fileadmin/yag";s:38:"clearResFileCacheWithCacheClearCommand";s:5:"false";}',
        ],
    ],
    'FE' => [
        'debug' => true,
        'loginSecurityLevel' => 'rsa',
    ],
    'GFX' => [
        'colorspace' => 'RGB',
        'im' => '1',
        'im_mask_temp_ext_gif' => '1',
        'im_path' => '/usr/bin/',
        'im_path_lzw' => '/usr/bin/',
        'im_v5effects' => '0',
        'im_version_5' => 'im6',
        'image_processing' => '1',
        'jpg_quality' => '80',
    ],
    'INSTALL' => [
        'wizardDone' => [
            'TYPO3\CMS\Install\Updates\AccessRightParametersUpdate' => 1,
            'TYPO3\CMS\Install\Updates\BackendUserStartModuleUpdate' => 1,
            'TYPO3\CMS\Install\Updates\Compatibility6ExtractionUpdate' => 1,
            'TYPO3\CMS\Install\Updates\ContentTypesToTextMediaUpdate' => 1,
            'TYPO3\CMS\Install\Updates\FileListIsStartModuleUpdate' => 1,
            'TYPO3\CMS\Install\Updates\FilesReplacePermissionUpdate' => 1,
            'TYPO3\CMS\Install\Updates\LanguageIsoCodeUpdate' => 1,
            'TYPO3\CMS\Install\Updates\MediaceExtractionUpdate' => 1,
            'TYPO3\CMS\Install\Updates\MigrateMediaToAssetsForTextMediaCe' => 1,
            'TYPO3\CMS\Install\Updates\MigrateShortcutUrlsAgainUpdate' => 1,
            'TYPO3\CMS\Install\Updates\OpenidExtractionUpdate' => 1,
            'TYPO3\CMS\Install\Updates\PageShortcutParentUpdate' => 1,
            'TYPO3\CMS\Install\Updates\ProcessedFileChecksumUpdate' => 1,
            'TYPO3\CMS\Install\Updates\TableFlexFormToTtContentFieldsUpdate' => 1,
            'TYPO3\CMS\Install\Updates\WorkspacesNotificationSettingsUpdate' => 1,
            'TYPO3\CMS\Rtehtmlarea\Hook\Install\DeprecatedRteProperties' => 1,
            'TYPO3\CMS\Rtehtmlarea\Hook\Install\RteAcronymButtonRenamedToAbbreviation' => 1,
        ],
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'extbase_object' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
                    'groups' => [
                        'system',
                    ],
                    'options' => [
                        'defaultLifetime' => 0,
                    ],
                ],
            ],
        ],
        'clearCacheSystem' => true,
        'devIPmask' => '*',
        'displayErrors' => 1,
        'enableDeprecationLog' => 'file',
        'encryptionKey' => 'ea6d9d8b78c8485b6460f6f58109fb95841527e196461846d3f37bd89ea48ff699508986e599b85161849ec42e679cfb',
        'exceptionalErrors' => 28674,
        'isInitialDatabaseImportDone' => true,
        'isInitialInstallationInProgress' => false,
        'sitename' => 'WegE Fallstudie',
        'sqlDebug' => 1,
        'systemLogLevel' => 0,
        't3lib_cs_convMethod' => 'mbstring',
        't3lib_cs_utils' => 'mbstring',
    ],
];
