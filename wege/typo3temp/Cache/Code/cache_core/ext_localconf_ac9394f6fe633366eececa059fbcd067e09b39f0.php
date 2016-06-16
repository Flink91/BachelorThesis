<?php
/**
 * Compiled ext_localconf.php cache file
 */

global $TYPO3_CONF_VARS, $T3_SERVICES, $T3_VAR;

/**
 * Extension: core
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/core/ext_localconf.php
 */

$_EXTKEY = 'core';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

/** @var \TYPO3\CMS\Extbase\SignalSlot\Dispatcher $signalSlotDispatcher */
$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);

if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
    // FAL SECURITY CHECKS
    $signalSlotDispatcher->connect(
        \TYPO3\CMS\Core\Resource\ResourceFactory::class,
        \TYPO3\CMS\Core\Resource\ResourceFactoryInterface::SIGNAL_PostProcessStorage,
        \TYPO3\CMS\Core\Resource\Security\StoragePermissionsAspect::class,
        'addUserPermissionsToStorage'
    );
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = \TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = \TYPO3\CMS\Core\Hooks\BackendUserGroupIntegrityCheck::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/alt_doc.php']['makeEditForm_accessCheck'][] = \TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect::class . '->isAllowedToShowEditForm';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tceforms_inline.php']['checkAccess'][] = \TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect::class . '->isAllowedToShowEditForm';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['checkModifyAccessList'][] = \TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect::class;

    // PACKAGE MANAGEMENT
    $signalSlotDispatcher->connect(
        'PackageManagement',
        'packagesMayHaveChanged',
        \TYPO3\CMS\Core\Package\PackageManager::class,
        'scanAvailablePackages'
    );
}

$signalSlotDispatcher->connect(
    \TYPO3\CMS\Core\Resource\ResourceStorage::class,
    \TYPO3\CMS\Core\Resource\ResourceStorageInterface::SIGNAL_PostFileDelete,
    \TYPO3\CMS\Core\Resource\Processing\FileDeletionAspect::class,
    'removeFromRepository'
);

$signalSlotDispatcher->connect(
    \TYPO3\CMS\Core\Resource\ResourceStorage::class,
    \TYPO3\CMS\Core\Resource\ResourceStorageInterface::SIGNAL_PostFileAdd,
    \TYPO3\CMS\Core\Resource\Processing\FileDeletionAspect::class,
    'cleanupProcessedFilesPostFileAdd'
);

$signalSlotDispatcher->connect(
    \TYPO3\CMS\Core\Resource\ResourceStorage::class,
    \TYPO3\CMS\Core\Resource\ResourceStorageInterface::SIGNAL_PostFileReplace,
    \TYPO3\CMS\Core\Resource\Processing\FileDeletionAspect::class,
    'cleanupProcessedFilesPostFileReplace'
);

if (!\TYPO3\CMS\Core\Core\Bootstrap::usesComposerClassLoading()) {
    $signalSlotDispatcher->connect(
        \TYPO3\CMS\Extensionmanager\Utility\InstallUtility::class,
        'afterExtensionInstall',
        \TYPO3\CMS\Core\Core\ClassLoadingInformation::class,
        'dumpClassLoadingInformation'
    );
    $signalSlotDispatcher->connect(
        \TYPO3\CMS\Extensionmanager\Utility\InstallUtility::class,
        'afterExtensionUninstall',
        \TYPO3\CMS\Core\Core\ClassLoadingInformation::class,
        'dumpClassLoadingInformation'
    );
}
$signalSlotDispatcher->connect(
    TYPO3\CMS\Core\Resource\ResourceStorage::class,
    \TYPO3\CMS\Core\Resource\Service\FileProcessingService::SIGNAL_PreFileProcess,
    \TYPO3\CMS\Core\Resource\OnlineMedia\Processing\PreviewProcessing::class,
    'processFile'
);

unset($signalSlotDispatcher);

$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['dumpFile'] = \TYPO3\CMS\Core\Controller\FileDumpController::class . '::dumpAction';

/** @var \TYPO3\CMS\Core\Resource\Rendering\RendererRegistry $rendererRegistry */
$rendererRegistry = \TYPO3\CMS\Core\Resource\Rendering\RendererRegistry::getInstance();
$rendererRegistry->registerRendererClass(\TYPO3\CMS\Core\Resource\Rendering\AudioTagRenderer::class);
$rendererRegistry->registerRendererClass(\TYPO3\CMS\Core\Resource\Rendering\VideoTagRenderer::class);
$rendererRegistry->registerRendererClass(\TYPO3\CMS\Core\Resource\Rendering\YouTubeRenderer::class);
$rendererRegistry->registerRendererClass(\TYPO3\CMS\Core\Resource\Rendering\VimeoRenderer::class);
unset($rendererRegistry);

$textExtractorRegistry = \TYPO3\CMS\Core\Resource\TextExtraction\TextExtractorRegistry::getInstance();
$textExtractorRegistry->registerTextExtractor(\TYPO3\CMS\Core\Resource\TextExtraction\PlainTextExtractor::class);
unset($textExtractorRegistry);

$extractorRegistry = \TYPO3\CMS\Core\Resource\Index\ExtractorRegistry::getInstance();
$extractorRegistry->registerExtractionService(\TYPO3\CMS\Core\Resource\OnlineMedia\Metadata\Extractor::class);
unset($extractorRegistry);


/**
 * Extension: extbase
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/extbase/ext_localconf.php
 */

$_EXTKEY = 'extbase';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// We set the default implementation for Storage Backend & Query Settings in Backend and Frontend.
// The code below is NO PUBLIC API!
/** @var $extbaseObjectContainer \TYPO3\CMS\Extbase\Object\Container\Container */
$extbaseObjectContainer = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class);
// Singleton
$extbaseObjectContainer->registerImplementation(\TYPO3\CMS\Extbase\Persistence\QueryInterface::class, \TYPO3\CMS\Extbase\Persistence\Generic\Query::class);
$extbaseObjectContainer->registerImplementation(\TYPO3\CMS\Extbase\Persistence\QueryResultInterface::class, \TYPO3\CMS\Extbase\Persistence\Generic\QueryResult::class);
$extbaseObjectContainer->registerImplementation(\TYPO3\CMS\Extbase\Persistence\PersistenceManagerInterface::class, \TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager::class);
$extbaseObjectContainer->registerImplementation(\TYPO3\CMS\Extbase\Persistence\Generic\Storage\BackendInterface::class, \TYPO3\CMS\Extbase\Persistence\Generic\Storage\Typo3DbBackend::class);
$extbaseObjectContainer->registerImplementation(\TYPO3\CMS\Extbase\Persistence\Generic\QuerySettingsInterface::class, \TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings::class);
unset($extbaseObjectContainer);

// Register type converters
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\ArrayConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\BooleanConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\FloatConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\IntegerConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\ObjectStorageConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\PersistentObjectConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\ObjectConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\StringConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\CoreTypeConverter::class);
// Experimental FAL<->extbase converters
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\FileConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\FileReferenceConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\FolderBasedFileCollectionConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\StaticFileCollectionConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\FolderConverter::class);

if (TYPO3_MODE === 'BE') {
    // registers Extbase at the cli_dispatcher with key "extbase".
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['cliKeys']['extbase'] = array(
        function () {
            $bootstrap = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Core\Bootstrap::class);
            echo $bootstrap->run('', array());
        },
        '_CLI_lowlevel'
    );
    // register help command
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][] = \TYPO3\CMS\Extbase\Command\HelpCommandController::class;
}


/**
 * Extension: extensionmanager
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/extensionmanager/ext_localconf.php
 */

$_EXTKEY = 'extensionmanager';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register extension list update task
$_EXTCONF = unserialize($_EXTCONF);
if (empty($_EXTCONF['offlineMode'])) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Extensionmanager\Task\UpdateExtensionListTask::class] = array(
        'extension' => $_EXTKEY,
        'title' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf:task.updateExtensionListTask.name',
        'description' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf:task.updateExtensionListTask.description',
        'additionalFields' => '',
    );
}

if (TYPO3_MODE === 'BE') {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][] = \TYPO3\CMS\Extensionmanager\Command\ExtensionCommandController::class;
    if (!(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
        $signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
        $signalSlotDispatcher->connect(
            \TYPO3\CMS\Extensionmanager\Service\ExtensionManagementService::class,
            'willInstallExtensions',
            \TYPO3\CMS\Core\Package\PackageManager::class,
            'scanAvailablePackages'
        );
        $signalSlotDispatcher->connect(
            \TYPO3\CMS\Extensionmanager\Utility\InstallUtility::class,
            'tablesDefinitionIsBeingBuilt',
            \TYPO3\CMS\Core\Cache\DatabaseSchemaService::class,
            'addCachingFrameworkRequiredDatabaseSchemaForInstallUtility'
        );
        $signalSlotDispatcher->connect(
            \TYPO3\CMS\Extensionmanager\Utility\InstallUtility::class,
            'tablesDefinitionIsBeingBuilt',
            \TYPO3\CMS\Core\Category\CategoryRegistry::class,
            'addExtensionCategoryDatabaseSchemaToTablesDefinition'
        );
    }
}


/**
 * Extension: lang
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/lang/ext_localconf.php
 */

$_EXTKEY = 'lang';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register language update command controller
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][] = \TYPO3\CMS\Lang\Command\LanguageCommandController::class;


/**
 * Extension: saltedpasswords
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/saltedpasswords/ext_localconf.php
 */

$_EXTKEY = 'saltedpasswords';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Form evaluation function for fe_users
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals'][\TYPO3\CMS\Saltedpasswords\Evaluation\FrontendEvaluator::class] = '';
// Form evaluation function for be_users
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals'][\TYPO3\CMS\Saltedpasswords\Evaluation\BackendEvaluator::class] = '';

// Hook for processing "forgotPassword" in felogin
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['felogin']['password_changed'][] = \TYPO3\CMS\Saltedpasswords\Utility\SaltedPasswordsUtility::class . '->feloginForgotPasswordHook';

// Extension may register additional salted hashing methods in this array
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/saltedpasswords']['saltMethods'] = array();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService('saltedpasswords', 'auth', \TYPO3\CMS\Saltedpasswords\SaltedPasswordService::class, array(
    'title' => 'FE/BE Authentification salted',
    'description' => 'Salting of passwords for Frontend and Backend',
    'subtype' => 'authUserFE,authUserBE',
    'available' => true,
    'priority' => 70,
    // must be higher than \TYPO3\CMS\Sv\AuthenticationService (50) and rsaauth (60) but lower than OpenID (75)
    'quality' => 70,
    'os' => '',
    'exec' => '',
    'className' => \TYPO3\CMS\Saltedpasswords\SaltedPasswordService::class
));

// Register bulk update task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Saltedpasswords\Task\BulkUpdateTask::class] = array(
    'extension' => 'saltedpasswords',
    'title' => 'LLL:EXT:saltedpasswords/Resources/Private/Language/locallang.xlf:ext.saltedpasswords.tasks.bulkupdate.name',
    'description' => 'LLL:EXT:saltedpasswords/Resources/Private/Language/locallang.xlf:ext.saltedpasswords.tasks.bulkupdate.description',
    'additionalFields' => \TYPO3\CMS\Saltedpasswords\Task\BulkUpdateFieldProvider::class
);


/**
 * Extension: backend
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/backend/ext_localconf.php
 */

$_EXTKEY = 'backend';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class)->connect(
        \TYPO3\CMS\Core\Tree\TableConfiguration\DatabaseTreeDataProvider::class,
        \TYPO3\CMS\Core\Tree\TableConfiguration\DatabaseTreeDataProvider::SIGNAL_PostProcessTreeData,
        \TYPO3\CMS\Backend\Security\CategoryPermissionsAspect::class,
        'addUserPermissionsToCategoryTreeData'
    );

    $GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433106] = \TYPO3\CMS\Backend\Backend\ToolbarItems\ClearCacheToolbarItem::class;
    $GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433107] = \TYPO3\CMS\Backend\Backend\ToolbarItems\HelpToolbarItem::class;
    $GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433108] = \TYPO3\CMS\Backend\Backend\ToolbarItems\LiveSearchToolbarItem::class;
    $GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433109] = \TYPO3\CMS\Backend\Backend\ToolbarItems\ShortcutToolbarItem::class;
    $GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433110] = \TYPO3\CMS\Backend\Backend\ToolbarItems\SystemInformationToolbarItem::class;
    $GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433111] = \TYPO3\CMS\Backend\Backend\ToolbarItems\UserToolbarItem::class;

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['backend']['loginProviders'][1433416747] = array(
        'provider' => \TYPO3\CMS\Backend\LoginProvider\UsernamePasswordLoginProvider::class,
        'sorting' => 50,
        'icon-class' => 'fa-key',
        'label' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.link'
    );

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['backend']['avatarProviders']['defaultAvatarProvider'] = array(
        'provider' => \TYPO3\CMS\Backend\Backend\Avatar\DefaultAvatarProvider::class
    );
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tsfebeuserauth.php']['frontendEditingController']['default'] = \TYPO3\CMS\Core\FrontendEditing\FrontendEditingController::class;

// Register search key shortcuts
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['page'] = 'pages';

// Include base TSconfig setup
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:backend/Configuration/PageTSconfig/NewContentElementWizard.ts">');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:backend/Configuration/UserTSconfig/Options.ts">');


/**
 * Extension: frontend
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/frontend/ext_localconf.php
 */

$_EXTKEY = 'frontend';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'FE' && !isset($_REQUEST['eID'])) {
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class)->connect(
        \TYPO3\CMS\Core\Resource\Index\MetaDataRepository::class,
        'recordPostRetrieval',
        \TYPO3\CMS\Frontend\Aspect\FileMetadataOverlayAspect::class,
        'languageAndWorkspaceOverlay'
    );
}

// Register all available content objects
$GLOBALS['TYPO3_CONF_VARS']['FE']['ContentObjects'] = array_merge($GLOBALS['TYPO3_CONF_VARS']['FE']['ContentObjects'], array(
    'TEXT'             => \TYPO3\CMS\Frontend\ContentObject\TextContentObject::class,
    'CASE'             => \TYPO3\CMS\Frontend\ContentObject\CaseContentObject::class,
    'COA'              => \TYPO3\CMS\Frontend\ContentObject\ContentObjectArrayContentObject::class,
    'COA_INT'          => \TYPO3\CMS\Frontend\ContentObject\ContentObjectArrayInternalContentObject::class,
    'USER'             => \TYPO3\CMS\Frontend\ContentObject\UserContentObject::class,
    'USER_INT'         => \TYPO3\CMS\Frontend\ContentObject\UserInternalContentObject::class,
    'FILE'             => \TYPO3\CMS\Frontend\ContentObject\FileContentObject::class,
    'FILES'            => \TYPO3\CMS\Frontend\ContentObject\FilesContentObject::class,
    'IMAGE'            => \TYPO3\CMS\Frontend\ContentObject\ImageContentObject::class,
    'IMG_RESOURCE'     => \TYPO3\CMS\Frontend\ContentObject\ImageResourceContentObject::class,
    'CONTENT'          => \TYPO3\CMS\Frontend\ContentObject\ContentContentObject::class,
    'RECORDS'          => \TYPO3\CMS\Frontend\ContentObject\RecordsContentObject::class,
    'HMENU'            => \TYPO3\CMS\Frontend\ContentObject\HierarchicalMenuContentObject::class,
    'LOAD_REGISTER'    => \TYPO3\CMS\Frontend\ContentObject\LoadRegisterContentObject::class,
    'RESTORE_REGISTER' => \TYPO3\CMS\Frontend\ContentObject\RestoreRegisterContentObject::class,
    'TEMPLATE'         => \TYPO3\CMS\Frontend\ContentObject\TemplateContentObject::class,
    'FLUIDTEMPLATE'    => \TYPO3\CMS\Frontend\ContentObject\FluidTemplateContentObject::class,
    'SVG'              => \TYPO3\CMS\Frontend\ContentObject\ScalableVectorGraphicsContentObject::class,
    'EDITPANEL'        => \TYPO3\CMS\Frontend\ContentObject\EditPanelContentObject::class
));

if (TYPO3_MODE === 'FE') {

    // Register eID provider for showpic
    $GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['tx_cms_showpic'] = \TYPO3\CMS\Frontend\Controller\ShowImageController::class . '::processRequest';
    // Register eID provider for ExtDirect for the frontend
    $GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['ExtDirect'] = \TYPO3\CMS\Frontend\Controller\ExtDirectEidController::class . '::processRequest';
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
	options.saveDocView = 1
	options.saveDocNew = 1
	options.saveDocNew.pages = 0
	options.saveDocNew.sys_file = 0
	options.saveDocNew.sys_file_metadata = 0
	options.disableDelete.sys_file = 1
');

// Registering hooks for the treelist cache
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = \TYPO3\CMS\Frontend\Hooks\TreelistCacheUpdateHooks::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass'][] = \TYPO3\CMS\Frontend\Hooks\TreelistCacheUpdateHooks::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['moveRecordClass'][] = \TYPO3\CMS\Frontend\Hooks\TreelistCacheUpdateHooks::class;

// Register hook to show preview info
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['hook_previewInfo']['cms'] = \TYPO3\CMS\Frontend\Hooks\FrontendHooks::class . '->hook_previewInfo';

// Register search key shortcuts
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['content'] = 'tt_content';

// Register URL handler for external pages.
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['urlProcessing']['urlHandlers']['frontendExternalUrl'] = [
    'handler' => \TYPO3\CMS\Frontend\Page\ExternalPageUrlHandler::class,
];


/**
 * Extension: install
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/install/ext_localconf.php
 */

$_EXTKEY = 'install';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// TYPO3 CMS 7
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['accessRightParameters'] = \TYPO3\CMS\Install\Updates\AccessRightParametersUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['backendUserStartModule'] = \TYPO3\CMS\Install\Updates\BackendUserStartModuleUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['languageIsoCode'] = \TYPO3\CMS\Install\Updates\LanguageIsoCodeUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['PageShortcutParent'] = \TYPO3\CMS\Install\Updates\PageShortcutParentUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['backendShortcuts'] = \TYPO3\CMS\Install\Updates\MigrateShortcutUrlsAgainUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['processedFilesChecksum'] = \TYPO3\CMS\Install\Updates\ProcessedFileChecksumUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['filesReplacePermission'] = \TYPO3\CMS\Install\Updates\FilesReplacePermissionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['tableCType'] = \TYPO3\CMS\Install\Updates\TableFlexFormToTtContentFieldsUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\FileListIsStartModuleUpdate::class] = \TYPO3\CMS\Install\Updates\FileListIsStartModuleUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['textmediaCType'] = \TYPO3\CMS\Install\Updates\ContentTypesToTextMediaUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\WorkspacesNotificationSettingsUpdate::class] = \TYPO3\CMS\Install\Updates\WorkspacesNotificationSettingsUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['textmediaAssets'] = \TYPO3\CMS\Install\Updates\MigrateMediaToAssetsForTextMediaCe::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['compatibility6Extension'] = \TYPO3\CMS\Install\Updates\Compatibility6ExtractionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['mediaceExtension'] = \TYPO3\CMS\Install\Updates\MediaceExtractionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['openidExtension'] = \TYPO3\CMS\Install\Updates\OpenidExtractionUpdate::class;

$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
$signalSlotDispatcher->connect(
    \TYPO3\CMS\Install\Service\SqlExpectedSchemaService::class,
    'tablesDefinitionIsBeingBuilt',
    \TYPO3\CMS\Core\Cache\DatabaseSchemaService::class,
    'addCachingFrameworkRequiredDatabaseSchemaForSqlExpectedSchemaService'
);
$signalSlotDispatcher->connect(
    \TYPO3\CMS\Install\Service\SqlExpectedSchemaService::class,
    'tablesDefinitionIsBeingBuilt',
    \TYPO3\CMS\Core\Category\CategoryRegistry::class,
    'addCategoryDatabaseSchemaToTablesDefinition'
);

// Do not delete this wizard. This makes sure new installations get the TER repository set in the database.
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\ExtensionManagerTables::class]
    = \TYPO3\CMS\Install\Updates\ExtensionManagerTables::class;


/**
 * Extension: sv
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/sv/ext_localconf.php
 */

$_EXTKEY = 'sv';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register base authentication service
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService(
    'sv',
    'auth',
    \TYPO3\CMS\Sv\AuthenticationService::class,
    array(
        'title' => 'User authentication',
        'description' => 'Authentication with username/password.',
        'subtype' => 'getUserBE,authUserBE,getUserFE,authUserFE,getGroupsFE,processLoginDataBE,processLoginDataFE',
        'available' => true,
        'priority' => 50,
        'quality' => 50,
        'os' => '',
        'exec' => '',
        'className' => \TYPO3\CMS\Sv\AuthenticationService::class
    )
);


/**
 * Extension: t3skin
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/t3skin/ext_localconf.php
 */

$_EXTKEY = 't3skin';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	RTE.default.skin = EXT:t3skin/rtehtmlarea/htmlarea.css
	RTE.default.FE.skin = EXT:t3skin/rtehtmlarea/htmlarea.css
');


/**
 * Extension: documentation
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/documentation/ext_localconf.php
 */

$_EXTKEY = 'documentation';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Open extension manual from within Extension Manager
$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
$signalSlotDispatcher->connect(
    \TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper::class,
    'processActions',
    \TYPO3\CMS\Documentation\Slots\ExtensionManager::class,
    'processActions'
);


/**
 * Extension: rtehtmlarea
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/rtehtmlarea/ext_localconf.php
 */

$_EXTKEY = 'rtehtmlarea';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register FormEngine node type resolver hook to render RTE in FormEngine if enabled
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeResolver'][1433167475] = array(
    'nodeName' => 'text',
    'priority' => 40,
    'class' => \TYPO3\CMS\Rtehtmlarea\Form\Resolver\RichTextNodeResolver::class,
);

// Make the extension version number available to the extension scripts
require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('rtehtmlarea') . 'ext_emconf.php';

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['version'] = $EM_CONF['rtehtmlarea']['version'];
// Unserializing the configuration so we can use it here
$_EXTCONF = unserialize($_EXTCONF);

// Add default RTE transformation configuration
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:rtehtmlarea/Configuration/PageTSconfig/Proc/pageTSConfig.txt">');

// Add default Page TS Config RTE configuration
if (strstr($_EXTCONF['defaultConfiguration'], 'Minimal')) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['defaultConfiguration'] = 'Advanced';
} elseif (strstr($_EXTCONF['defaultConfiguration'], 'Demo')) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['defaultConfiguration'] = 'Demo';
} else {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['defaultConfiguration'] = 'Typical';
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:rtehtmlarea/Configuration/PageTSconfig/' . $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['defaultConfiguration'] . '/pageTSConfig.txt">');
// Add default User TS Config RTE configuration
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:rtehtmlarea/Configuration/UserTSconfig/' . $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['defaultConfiguration'] . '/userTSConfig.txt">');

// Registering soft reference parser for image tags in RTE content
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['softRefParser']['rtehtmlarea_images'] = \TYPO3\CMS\Rtehtmlarea\Hook\SoftReferenceHook::class;

// Add Status Report about Conflicting Extensions
if (TYPO3_MODE === 'BE') {
    // Take note of conflicting extensions
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['conflicts'] = $EM_CONF['rtehtmlarea']['constraints']['conflicts'];
    // Register Status Report Hook
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['htmlArea RTE'][] = \TYPO3\CMS\Rtehtmlarea\Hook\StatusReportConflictsCheckHook::class;
}

// Set warning in the Update Wizard of the Install Tool for deprecated Page TS Config properties
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['checkForDeprecatedRtePageTSConfigProperties'] = \TYPO3\CMS\Rtehtmlarea\Hook\Install\DeprecatedRteProperties::class;
// Set warning in the Update Wizard of the Install Tool for replacement of "acronym" button by "abbreviation" button
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['checkForRteAcronymButtonRenamedToAbbreviation'] = \TYPO3\CMS\Rtehtmlarea\Hook\Install\RteAcronymButtonRenamedToAbbreviation::class;

// Initialize plugin registration array
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins'] = array();

// Editor Mode configuration
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['EditorMode'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['EditorMode']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\EditorMode::class;

// General Element configuration
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['EditElement'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['EditElement']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\EditElement::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['EditElement']['disableInFE'] = 0;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['MicrodataSchema'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['MicrodataSchema']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\MicroDataSchema::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['MicrodataSchema']['disableInFE'] = 0;

// Inline Elements configuration
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['DefaultInline'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['DefaultInline']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\DefaultInline::class;
if ($_EXTCONF['enableInlineElements']) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['InlineElements'] = array();
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['InlineElements']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\InlineElements::class;
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:rtehtmlarea/Configuration/PageTSconfig/Extensions/InlineElements/pageTSConfig.txt">');
}

// Block Elements configuration
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['BlockElements'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['BlockElements']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\BlockElements::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['DefinitionList'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['DefinitionList']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\DefinitionList::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['BlockStyle'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['BlockStyle']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\BlockStyle::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['CharacterMap'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['CharacterMap']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\CharacterMap::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['Abbreviation'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['Abbreviation']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\Abbreviation::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['Abbreviation']['disableInFE'] = 1;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['UserElements'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['UserElements']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\UserElements::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['UserElements']['disableInFE'] = 1;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TextStyle'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TextStyle']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\TextStyle::class;

// Enable images and add default Page TS Config RTE configuration for enabling images with the Minimal and Typical default configuration
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['enableImages'] = $_EXTCONF['enableImages'] ?: 0;
if ($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['defaultConfiguration'] == 'Demo') {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['enableImages'] = 1;
}
if ($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['enableImages']) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['DefaultImage'] = array();
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['DefaultImage']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\DefaultImage::class;

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3Image'] = array();
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3Image']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\Typo3Image::class;
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3Image']['disableInFE'] = 1;

    if ($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['defaultConfiguration'] == 'Advanced' || $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['defaultConfiguration'] == 'Typical') {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:rtehtmlarea/Configuration/PageTSconfig/Image/pageTSConfig.txt">');
    }
}
// Add frontend image rendering TypoScript anyways
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript('rtehtmlarea', 'setup', '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:rtehtmlarea/Configuration/TypoScript/ImageRendering/setup.txt">', 'defaultContentRendering');

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['DefaultLink'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['DefaultLink']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\DefaultLink::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3Link'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3Link']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\Typo3Link::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3Link']['disableInFE'] = 1;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3Link']['additionalAttributes'] = 'rel';

// Add default Page TS Config RTE configuration for enabling links accessibility icons
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['enableAccessibilityIcons'] = $_EXTCONF['enableAccessibilityIcons'] ?: 0;
if ($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['enableAccessibilityIcons']) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:rtehtmlarea/Configuration/PageTSconfig/AccessibilityIcons/pageTSConfig.txt">');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript('rtehtmlarea', 'setup', '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:rtehtmlarea/res/accessibilityicons/setup.txt">', 'defaultContentRendering');
}

// Register features that use the style attribute
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['allowStyleAttribute'] = isset($_EXTCONF['allowStyleAttribute']) && !$_EXTCONF['allowStyleAttribute'] ? 0 : 1;
if ($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['allowStyleAttribute']) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3Color'] = array();
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3Color']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\Typo3Color::class;
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3Color']['disableInFE'] = 0;

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['SelectFont'] = array();
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['SelectFont']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\SelectFont::class;
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['SelectFont']['disableInFE'] = 0;
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:rtehtmlarea/Configuration/PageTSconfig/Style/pageTSConfig.txt">');
}

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TextIndicator'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TextIndicator']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\TextIndicator::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TextIndicator']['disableInFE'] = 0;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['InsertSmiley'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['InsertSmiley']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\InsertSmiley::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['InsertSmiley']['disableInFE'] = 0;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['Language'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['Language']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\Language::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['Language']['disableInFE'] = 0;

// Spell checking configuration
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['rtehtmlarea_spellchecker'] = \TYPO3\CMS\Rtehtmlarea\Controller\SpellCheckingController::class . '::processRequest';

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['SpellChecker'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['SpellChecker']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\Spellchecker::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['SpellChecker']['disableInFE'] = 0;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['SpellChecker']['AspellDirectory'] = $_EXTCONF['AspellDirectory'] ? $_EXTCONF['AspellDirectory'] : '/usr/bin/aspell';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['SpellChecker']['noSpellCheckLanguages'] = $_EXTCONF['noSpellCheckLanguages'] ? $_EXTCONF['noSpellCheckLanguages'] : 'ja,km,ko,lo,th,zh,b5,gb';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['SpellChecker']['forceCommandMode'] = $_EXTCONF['forceCommandMode'] ? $_EXTCONF['forceCommandMode'] : 0;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['FindReplace'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['FindReplace']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\FindReplace::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['FindReplace']['disableInFE'] = 0;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['RemoveFormat'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['RemoveFormat']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\RemoveFormat::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['RemoveFormat']['disableInFE'] = 0;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['PlainText'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['PlainText']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\Plaintext::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['PlainText']['disableInFE'] = 0;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['DefaultClean'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['DefaultClean']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\DefaultClean::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3HtmlParser'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3HtmlParser']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\Typo3HtmlParser::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3HtmlParser']['disableInFE'] = 1;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['QuickTag'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['QuickTag']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\QuickTag::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['QuickTag']['disableInFE'] = 0;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TableOperations'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TableOperations']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\TableOperations::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TableOperations']['disableInFE'] = 0;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['AboutEditor'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['AboutEditor']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\AboutEditor::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['AboutEditor']['disableInFE'] = 0;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['ContextMenu'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['ContextMenu']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\ContextMenu::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['ContextMenu']['disableInFE'] = 0;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['UndoRedo'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['UndoRedo']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\UndoRedo::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['UndoRedo']['disableInFE'] = 0;

// Copy & Paste configuration
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['CopyPaste'] = array();
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['CopyPaste']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\CopyPaste::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['CopyPaste']['disableInFE'] = 0;


/**
 * Extension: rsaauth
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/rsaauth/ext_localconf.php
 */

$_EXTKEY = 'rsaauth';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Add the service
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService('rsaauth', 'auth', \TYPO3\CMS\Rsaauth\RsaAuthService::class, array(
    'title' => 'RSA authentication',
    'description' => 'Authenticates users by using encrypted passwords',
    'subtype' => 'processLoginDataBE,processLoginDataFE',
    'available' => true,
    'priority' => 60,
    // tx_svauth_sv1 has 50, t3sec_saltedpw has 55. This service must have higher priority!
    'quality' => 60,
    // tx_svauth_sv1 has 50. This service must have higher quality!
    'os' => '',
    'exec' => '',
    // Do not put a dependency on openssh here or service loading will fail!
    'className' => \TYPO3\CMS\Rsaauth\RsaAuthService::class
));

// Add hook for user setup module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/setup/mod/index.php']['setupScriptHook']['rsaauth'] = \TYPO3\CMS\Rsaauth\Hook\UserSetupHook::class . '->getLoginScripts';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/setup/mod/index.php']['modifyUserDataBeforeSave']['rsaauth'] = \TYPO3\CMS\Rsaauth\Hook\UserSetupHook::class . '->decryptPassword';
// Add a hook to the FE login form (felogin system extension)
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['felogin']['loginFormOnSubmitFuncs']['rsaauth'] = \TYPO3\CMS\Rsaauth\Hook\FrontendLoginHook::class . '->loginFormHook';
// Add a hook to show Backend warnings
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['displayWarningMessages']['rsaauth'] = \TYPO3\CMS\Rsaauth\BackendWarnings::class;

// eID for FrontendLoginRsaPublicKey
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['RsaPublicKeyGenerationController'] = \TYPO3\CMS\Rsaauth\Controller\RsaPublicKeyGenerationController::class . '::processRequest';

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class)->connect(
    \TYPO3\CMS\Backend\LoginProvider\UsernamePasswordLoginProvider::class,
    \TYPO3\CMS\Backend\LoginProvider\UsernamePasswordLoginProvider::SIGNAL_getPageRenderer,
    \TYPO3\CMS\Rsaauth\Slot\UsernamePasswordProviderSlot::class,
    'getPageRenderer'
);

// Register automatic decryption in DataHandler
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['rsaauth'] = \TYPO3\CMS\Rsaauth\Hook\DecryptionHook::class;

// Add own form element
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1436965601] = array(
    'nodeName' => 'rsaInput',
    'priority' => '70',
    'class' => \TYPO3\CMS\Rsaauth\Form\Element\RsaInputElement::class,
);


/**
 * Extension: belog
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/belog/ext_localconf.php
 */

$_EXTKEY = 'belog';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
    $signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
    $signalSlotDispatcher->connect(
        \TYPO3\CMS\Backend\Backend\ToolbarItems\SystemInformationToolbarItem::class,
        'loadMessages',
        \TYPO3\CMS\Belog\Controller\SystemInformationController::class,
        'appendMessage'
    );
}


/**
 * Extension: beuser
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/beuser/ext_localconf.php
 */

$_EXTKEY = 'beuser';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_userauth.php']['logoff_pre_processing'][] = \TYPO3\CMS\Beuser\Hook\SwitchBackUserHook::class . '->switchBack';


/**
 * Extension: css_styled_content
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/css_styled_content/ext_localconf.php
 */

$_EXTKEY = 'css_styled_content';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Get the extension configuration
$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);

// Disable image positions that make no sense on CType=image (it leaves just "above left", "center" and "right")
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	TCEFORM.tt_content.imageorient.types.image.removeItems = 8,9,10,17,18,25,26
');

// Mark the delivered TypoScript templates as "content rendering template" (providing the hooks of "static template 43" = content (default))
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'cssstyledcontent/static/';
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'cssstyledcontent/static/v6.2/';

// Register for hook to show preview of tt_content element of CType="image" in page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['image'] =
    \TYPO3\CMS\CssStyledContent\Hooks\PageLayoutView\ImagePreviewRenderer::class;

// Register for hook to show preview of tt_content element of CType="textpic" in page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['textpic'] =
    \TYPO3\CMS\CssStyledContent\Hooks\PageLayoutView\TextpicPreviewRenderer::class;

// Register for hook to show preview of tt_content element of CType="text" in page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['text'] =
    \TYPO3\CMS\CssStyledContent\Hooks\PageLayoutView\TextPreviewRenderer::class;

if (TYPO3_MODE === 'BE') {
    call_user_func(
        function ($extKey) {
            // Get the extension configuration
            $extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$extKey]);

            if (!isset($extConf['loadContentElementWizardTsConfig']) || (int)$extConf['loadContentElementWizardTsConfig'] === 1) {
                // Include new content elements to modWizards
                \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:css_styled_content/Configuration/PageTSconfig/NewContentElementWizard.ts">');
            }

            $dispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
            $dispatcher->connect(
                \TYPO3\CMS\Extensionmanager\Controller\ConfigurationController::class,
                'afterExtensionConfigurationWrite',
                \TYPO3\CMS\CssStyledContent\Hooks\TcaCacheClearing::class,
                'clearTcaCache'
            );
        },
        $_EXTKEY
    );
}


/**
 * Extension: felogin
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/felogin/ext_localconf.php
 */

$_EXTKEY = 'felogin';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Add a default TypoScript for the CType "login" (also replaces history login functionality)
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript('TYPO3.CMS.Felogin', 'constants', '
styles.content.loginform {
    # cat=content/cLogin; type=int+; label= PID of user archive: Enter the page-uid number (PID) of the folder where you keep your fe_users that are supposed to login on this site. This setting is necessary, if login is going to work!
  pid =
    # cat=content/cLogin; type=; label= Login template: Enter the path for the HTML template to be used
  templateFile = EXT:felogin/Resources/Private/Templates/FrontendLogin.html
}
', 'defaultContentRendering');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript('TYPO3.CMS.Felogin', 'setup', '
# Setting "felogin" plugin TypoScript
tt_content.login = COA
tt_content.login {
	10 =< lib.stdheader
	20 >
	20 =< plugin.tx_felogin_pi1
}
', 'defaultContentRendering');

// add login to new content element wizard
if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	mod.wizards.newContentElement.wizardItems.forms {
		elements.login {
			iconIdentifier = content-elements-login
			title = LLL:EXT:backend/Resources/Private/Language/locallang_db_new_content_el.xlf:forms_login_title
			description = LLL:EXT:backend/Resources/Private/Language/locallang_db_new_content_el.xlf:forms_login_description
			tt_content_defValues {
				CType = login
			}
		}
		show :=addToList(login)
	}
	');
}

// Page module hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['felogin'] = \TYPO3\CMS\Felogin\Hooks\CmsLayout::class;


/**
 * Extension: fluid_styled_content
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/fluid_styled_content/ext_localconf.php
 */

$_EXTKEY = 'fluid_styled_content';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Define TypoScript as content rendering template
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'fluidstyledcontent/Configuration/TypoScript/Static/';

// Register for hook to show preview of tt_content element of CType="textmedia" in page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['textmedia'] = \TYPO3\CMS\FluidStyledContent\Hooks\TextmediaPreviewRenderer::class;

if (TYPO3_MODE === 'BE') {
    call_user_func(
        function ($extKey) {
            // Get the extension configuration
            $extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$extKey]);

            if (!isset($extConf['loadContentElementWizardTsConfig']) || (int)$extConf['loadContentElementWizardTsConfig'] === 1) {
                // Include new content elements to modWizards
                \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/PageTSconfig/NewContentElementWizard.ts">');
            }

            $dispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
            $dispatcher->connect(
                \TYPO3\CMS\Extensionmanager\Controller\ConfigurationController::class,
                'afterExtensionConfigurationWrite',
                \TYPO3\CMS\FluidStyledContent\Hooks\TcaCacheClearing::class,
                'clearTcaCache'
            );
        },
        $_EXTKEY
    );
}


/**
 * Extension: form
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/form/ext_localconf.php
 */

$_EXTKEY = 'form';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    // Apply PageTSconfig
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:form/Configuration/PageTS/modWizards.ts">'
    );

    // Backend view
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['mailform'] =
        \TYPO3\CMS\Form\Hooks\PageLayoutView\MailformPreviewRenderer::class;
} else {
    // Handling of cObjects "FORM" and "FORM_INT"
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_content.php']['cObjTypeAndClass'][] = array(
        'FORM',
        \TYPO3\CMS\Form\Hooks\ContentObjectHook::class
    );
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_content.php']['cObjTypeAndClass'][] = array(
        'FORM_INT',
        \TYPO3\CMS\Form\Hooks\ContentObjectHook::class
    );

    // Extbase handling
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(
        \TYPO3\CMS\Form\Domain\Property\TypeConverter\ArrayToValidationElementConverter::class
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'TYPO3.CMS.Form',
        'Form',
        array('Frontend' => 'show, confirmation, dispatchConfirmationButtonClick, process, afterProcess'),
        array('Frontend' => 'show, confirmation, dispatchConfirmationButtonClick, process, afterProcess')
    );

    $signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
    $signalSlotDispatcher->connect(
        \TYPO3\CMS\Form\Domain\Builder\FormBuilder::class,
        'txFormHandleIncomingValues',
        \TYPO3\CMS\Form\Hooks\HandleIncomingFormValues::class,
        'handleIncomingFormValues'
    );
}


/**
 * Extension: impexp
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/impexp/ext_localconf.php
 */

$_EXTKEY = 'impexp';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/backend.php']['constructPostProcess'][] = 'TYPO3\\CMS\\Impexp\\Hook\\BackendControllerHook->addJavaScript';


/**
 * Extension: lowlevel
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/lowlevel/ext_localconf.php
 */

$_EXTKEY = 'lowlevel';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    // Setting up scripts that can be run from the cli_dispatch.phpsh script.
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['cliKeys']['lowlevel_refindex'] = array(
        function () {
            // Call the functionality
            if (in_array('-e', $_SERVER['argv']) || in_array('-c', $_SERVER['argv'])) {
                $testOnly = in_array('-c', $_SERVER['argv']);
                $refIndexObj = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Database\ReferenceIndex::class);
                list($headerContent, $bodyContent) = $refIndexObj->updateIndex($testOnly, !in_array('-s', $_SERVER['argv']));
                $bodyContent = str_replace('##LF##', LF, $bodyContent);
            } else {
                echo '
			Options:
			-c = Check refindex
			-e = Update refindex
			-s = Silent
			';
                die;
            }
        },
        '_CLI_lowlevel'
    );
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['cliKeys']['lowlevel_cleaner'] = array(
        function () {
            $cleanerObj = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Lowlevel\CleanerCommand::class);
            $cleanerObj->cli_main($_SERVER['argv']);
        },
        '_CLI_lowlevel'
    );
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['cliKeys']['lowlevel_admin'] = array(
        function () {
            $adminObj = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Lowlevel\AdminCommand::class);
            $adminObj->cli_main($_SERVER['argv']);
        },
        '_CLI_lowlevel'
    );
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['missing_files'] = array(\TYPO3\CMS\Lowlevel\MissingFilesCommand::class);
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['missing_relations'] = array(\TYPO3\CMS\Lowlevel\MissingRelationsCommand::class);
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['double_files'] = array(\TYPO3\CMS\Lowlevel\DoubleFilesCommand::class);
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['rte_images'] = array(\TYPO3\CMS\Lowlevel\RteImagesCommand::class);
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['lost_files'] = array(\TYPO3\CMS\Lowlevel\LostFilesCommand::class);
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['orphan_records'] = array(\TYPO3\CMS\Lowlevel\OrphanRecordsCommand::class);
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['deleted'] = array(\TYPO3\CMS\Lowlevel\DeletedRecordsCommand::class);
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['versions'] = array(\TYPO3\CMS\Lowlevel\VersionsCommand::class);
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['cleanflexform'] = array(\TYPO3\CMS\Lowlevel\CleanFlexformCommand::class);
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['syslog'] = array(\TYPO3\CMS\Lowlevel\SyslogCommand::class);
}


/**
 * Extension: recycler
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/recycler/ext_localconf.php
 */

$_EXTKEY = 'recycler';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Recycler\Task\CleanerTask::class] = array(
    'extension' => 'recycler',
    'title' => 'LLL:EXT:recycler/Resources/Private/Language/locallang_tasks.xlf:cleanerTaskTitle',
    'description' => 'LLL:EXT:recycler/Resources/Private/Language/locallang_tasks.xlf:cleanerTaskDescription',
    'additionalFields' => \TYPO3\CMS\Recycler\Task\CleanerFieldProvider::class
);


/**
 * Extension: reports
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/reports/ext_localconf.php
 */

$_EXTKEY = 'reports';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Reports\Task\SystemStatusUpdateTask::class] = array(
    'extension' => 'reports',
    'title' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_updateTaskTitle',
    'description' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_updateTaskDescription',
    'additionalFields' => \TYPO3\CMS\Reports\Task\SystemStatusUpdateTaskNotificationEmailField::class
);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['displayWarningMessages']['tx_reports_WarningMessagePostProcessor'] = \TYPO3\CMS\Reports\Report\Status\WarningMessagePostProcessor::class;


/**
 * Extension: scheduler
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/scheduler/ext_localconf.php
 */

$_EXTKEY = 'scheduler';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register the Scheduler as a possible key for CLI calls
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['cliKeys']['scheduler'] = array(
    function () {
        $schedulerCliController = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Scheduler\Controller\SchedulerCliController::class);
        $schedulerCliController->run();
    },
    '_CLI_scheduler'
);
// Get the extensions's configuration
$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['scheduler']);
// If sample tasks should be shown,
// register information for the test and sleep tasks
if (!empty($extConf['showSampleTasks'])) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Example\TestTask::class] = array(
        'extension' => 'scheduler',
        'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:testTask.name',
        'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:testTask.description',
        'additionalFields' => \TYPO3\CMS\Scheduler\Example\TestTaskAdditionalFieldProvider::class
    );
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Example\SleepTask::class] = array(
        'extension' => 'scheduler',
        'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:sleepTask.name',
        'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:sleepTask.description',
        'additionalFields' => \TYPO3\CMS\Scheduler\Example\SleepTaskAdditionalFieldProvider::class
    );
}

// Add caching framework garbage collection task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\CachingFrameworkGarbageCollectionTask::class] = array(
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:cachingFrameworkGarbageCollection.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:cachingFrameworkGarbageCollection.description',
    'additionalFields' => \TYPO3\CMS\Scheduler\Task\CachingFrameworkGarbageCollectionAdditionalFieldProvider::class
);

// Add task to index file in a storage
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\FileStorageIndexingTask::class] = array(
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageIndexing.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageIndexing.description',
    'additionalFields' => \TYPO3\CMS\Scheduler\Task\FileStorageIndexingAdditionalFieldProvider::class
);

// Add task for extracting metadata from files in a storage
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\FileStorageExtractionTask::class] = array(
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageExtraction.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageExtraction.description',
    'additionalFields' => \TYPO3\CMS\Scheduler\Task\FileStorageExtractionAdditionalFieldProvider::class

);

// Add recycler directory cleanup task. Windows is not supported
// because "filectime" does not change after moving a file
if (TYPO3_OS !== 'WIN') {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\RecyclerGarbageCollectionTask::class] = array(
        'extension' => 'scheduler',
        'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:recyclerGarbageCollection.name',
        'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:recyclerGarbageCollection.description',
        'additionalFields' => \TYPO3\CMS\Scheduler\Task\RecyclerGarbageCollectionAdditionalFieldProvider::class
    );
}

// Save any previous option array for table garbage collection task
// to temporary variable so it can be pre-populated by other
// extensions and LocalConfiguration/AdditionalConfiguration
$garbageCollectionTaskOptions = array();
if (is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class]['options'])) {
    $garbageCollectionTaskOptions = $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class]['options'];
}
// Initialize tables sub-array if not set already
if (!is_array($garbageCollectionTaskOptions['tables'])) {
    $garbageCollectionTaskOptions['tables'] = array();
}
// Add table garbage collection task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class] = array(
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:tableGarbageCollection.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:tableGarbageCollection.description',
    'additionalFields' => \TYPO3\CMS\Scheduler\Task\TableGarbageCollectionAdditionalFieldProvider::class,
    'options' => $garbageCollectionTaskOptions
);
unset($garbageCollectionTaskOptions);

// Register sys_log and sys_history table in table garbage collection task
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class]['options']['tables']['sys_log'])) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class]['options']['tables']['sys_log'] = array(
        'dateField' => 'tstamp',
        'expirePeriod' => 180
    );
}

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class]['options']['tables']['sys_history'])) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class]['options']['tables']['sys_history'] = array(
        'dateField' => 'tstamp',
        'expirePeriod' => 30
    );
}

// Add task for optimizing database tables
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\OptimizeDatabaseTableTask::class] = array(
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:optimizeDatabaseTable.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:optimizeDatabaseTable.description',
    'additionalFields' => \TYPO3\CMS\Scheduler\Task\OptimizeDatabaseTableAdditionalFieldProvider::class

);


/**
 * Extension: sys_note
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/sys_note/ext_localconf.php
 */

$_EXTKEY = 'sys_note';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register "switchableControllerActions" manually because there is no plugin or module for sys_note available
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['extbase']['extensions']['SysNote']['modules']['Note']['controllers'] = array(
    'Note' => array(
        'actions' => array('list')
    )
);

// Hook into the list module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['recordlist/Modules/Recordlist/index.php']['drawFooterHook']['sys_note'] = \TYPO3\CMS\SysNote\Hook\RecordListHook::class . '->render';
// Hook into the page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/db_layout.php']['drawFooterHook']['sys_note'] = \TYPO3\CMS\SysNote\Hook\PageHook::class . '->render';
// Hook into the info module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/web_info/class.tx_cms_webinfo.php']['drawFooterHook']['sys_note'] = \TYPO3\CMS\SysNote\Hook\InfoModuleHook::class . '->render';


/**
 * Extension: t3editor
 * File: C:/wamp64/www/BachelorThesis/wege/typo3/sysext/t3editor/ext_localconf.php
 */

$_EXTKEY = 't3editor';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    // Register hooks for tstemplate module
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/template.php']['preStartPageHook'][] = \TYPO3\CMS\T3editor\Hook\TypoScriptTemplateInfoHook::class . '->preStartPageHook';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/tstemplate_info/class.tx_tstemplateinfo.php']['postOutputProcessingHook'][] = \TYPO3\CMS\T3editor\Hook\TypoScriptTemplateInfoHook::class . '->postOutputProcessingHook';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/t3editor/classes/class.tx_t3editor.php']['ajaxSaveCode']['tx_tstemplateinfo'] = \TYPO3\CMS\T3editor\Hook\TypoScriptTemplateInfoHook::class . '->save';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/t3editor/classes/class.tx_t3editor.php']['ajaxSaveCode']['file_edit'] = \TYPO3\CMS\T3editor\Hook\FileEditHook::class . '->save';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/template.php']['preStartPageHook'][] = \TYPO3\CMS\T3editor\Hook\FileEditHook::class . '->preStartPageHook';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/file_edit.php']['preOutputProcessingHook'][] = \TYPO3\CMS\T3editor\Hook\FileEditHook::class . '->preOutputProcessingHook';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/file_edit.php']['postOutputProcessingHook'][] = \TYPO3\CMS\T3editor\Hook\FileEditHook::class . '->postOutputProcessingHook';
}

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1433089350] = array(
    'nodeName' => 't3editor',
    'priority' => 40,
    'class' => \TYPO3\CMS\T3editor\Form\Element\T3editorElement::class,
);


/**
 * Extension: static_info_tables
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/static_info_tables/ext_localconf.php
 */

$_EXTKEY = 'static_info_tables';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (!defined ('STATIC_INFO_TABLES_EXTkey')) {
	define('STATIC_INFO_TABLES_EXTkey', $_EXTKEY);
}

if (!defined ('PATH_BE_staticinfotables')) {
	define('PATH_BE_staticinfotables', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY));
}

if (!defined ('PATH_BE_staticinfotables_rel')) {
	define('PATH_BE_staticinfotables_rel', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY));
}
// Unserializing the configuration so we can use it here
$_EXTCONF = unserialize($_EXTCONF);

// Including Extbase configuration
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TypoScript/Extbase/setup.txt">');

// Register cache static_info_tables
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations'][$_EXTKEY])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations'][$_EXTKEY] = array();
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations'][$_EXTKEY]['groups'] = array('all');
}
if (!isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations'][$_EXTKEY]['frontend'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations'][$_EXTKEY]['frontend'] = 'TYPO3\\CMS\\Core\\Cache\\Frontend\\PhpFrontend';
}
if (!isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations'][$_EXTKEY]['backend'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations'][$_EXTKEY]['backend'] = 'TYPO3\\CMS\\Core\\Cache\\Backend\\FileBackend';
}

// Configure clear cache post processing for extended domain model
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc'][$_EXTKEY] = 'SJBR\\StaticInfoTables\\Cache\\ClassCacheManager->reBuild';

// Names of static entities
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['entities'] = array(
	'Country',
	'CountryZone',
	'Currency',
	'Language',
	'Territory'
);

// Register cached domain model classes autoloader
require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/Cache/CachedClassLoader.php');
\SJBR\StaticInfoTables\Cache\CachedClassLoader::registerAutoloader();

// Possible label fields for different languages. Default as last.
$labelTable = array(
	'static_territories' => array(
		'label_fields' => array(
			'tr_name_##', 'tr_name_en',
		),
		'isocode_field' => array(
			'tr_iso_##',
		),
	),
	'static_countries' => array(
		'label_fields' => array(
			'cn_short_##', 'cn_short_en',
		),
		'isocode_field' => array(
			'cn_iso_##',
		),
	),
	'static_country_zones' => array(
		'label_fields' => array(
			'zn_name_##', 'zn_name_local',
		),
		'isocode_field' => array(
			'zn_code', 'zn_country_iso_##',
		),
	),
	'static_languages' => array(
		'label_fields' => array(
			'lg_name_##', 'lg_name_en',
		),
		'isocode_field' => array(
			'lg_iso_##', 'lg_country_iso_##',
		),
	),
	'static_currencies' => array(
		'label_fields' => array(
			'cu_name_##', 'cu_name_en',
		),
		'isocode_field' => array(
			'cu_iso_##',
		),
	),
);

if (isset($GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['tables']) && is_array($GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['tables'])) {
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['tables'] = array_merge($labelTable, $GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['tables']);
} else {
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['tables'] = $labelTable;
}
unset($labelTable);

// Registering backend form select field pre-rendering hook in order to localize selected items
if (\TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version) < 7000000) {
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tceforms.php']['getSingleFieldClass'][] = 'SJBR\\StaticInfoTables\\Hook\\Backend\\Form\\ElementRenderingHelper';
}

// Add data handling hook to manage ISO codes redundancies on records
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'SJBR\\StaticInfoTables\\Hook\\Core\\DataHandling\\ProcessDataMap';

// Register slot for AfterExtensionInstall signal
$dispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher');
$dispatcher->connect('TYPO3\\CMS\\Extensionmanager\\Utility\\InstallUtility', 'afterExtensionInstall', 'SJBR\\StaticInfoTables\\Slot\\Extensionmanager\\AfterExtensionInstall', 'executeUpdateScript');

// Enabling the Static Info Tables Manager module
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['enableManager'] = isset($_EXTCONF['enableManager']) ? $_EXTCONF['enableManager'] : '0';

// Make the extension version and constraints available when creating language packs and to other extensions
require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'ext_emconf.php');
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['version'] = $EM_CONF[$_EXTKEY]['version'];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['constraints'] = $EM_CONF[$_EXTKEY]['constraints'];


/**
 * Extension: sr_feuser_register
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/sr_feuser_register/ext_localconf.php
 */

$_EXTKEY = 'sr_feuser_register';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Unserialize the configuration so we can use it here
$_EXTCONF = unserialize($_EXTCONF);
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['uploadfolder'] = $_EXTCONF['uploadFolder'] ? $_EXTCONF['uploadFolder'] : 'uploads/tx_srfeuserregister';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['imageMaxSize'] = $_EXTCONF['imageMaxSize'] ? $_EXTCONF['imageMaxSize'] : 250;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['imageTypes'] = $_EXTCONF['imageTypes'] ? $_EXTCONF['imageTypes'] : 'png,jpeg,jpg,gif,tif,tiff';

// Example of configuration of hooks
// $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['sr_feuser_register']['tx_srfeuserregister_pi1']['confirmRegistrationClass'][] = 'SJBR\\SrFeuserRegister\\Hooks\\Handler';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['sr_feuser_register']['tx_srfeuserregister_pi1']['registrationProcess'][] = 'SJBR\\SrFeuserRegister\\Hooks\\RegistrationProcessHooks';

// Save extension version and constraints
require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'ext_emconf.php');
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['version'] = $EM_CONF[$_EXTKEY]['version'];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['constraints'] = $EM_CONF[$_EXTKEY]['constraints'];

// Set possible login security levels
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['loginSecurityLevels'] = array('normal', 'rsa');

// Configure captcha hooks
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['captcha'])) {
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['captcha'] = array();
}
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['captcha'][] = 'SJBR\\SrFeuserRegister\\Captcha\\Captcha';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['captcha'][] = 'SJBR\\SrFeuserRegister\\Captcha\\Freecap';

// Configure usergroup hooks
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['sr_feuser_register']['tx_srfeuserregister_pi1']['configuration'][] = 'SJBR\\SrFeuserRegister\\Hooks\\UsergroupHooks';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['sr_feuser_register']['tx_srfeuserregister_pi1']['fe_users']['usergroup'][] = 'SJBR\\SrFeuserRegister\\Hooks\\UsergroupHooks';

if (TYPO3_MODE === 'BE') {
	// Take note of conflicting extensions
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['sr_feuser_register']['constraints'] = $EM_CONF['sr_feuser_register']['constraints'];
	// Register Status Report Hook
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['Front End User Registration'][] = 'SJBR\\SrFeuserRegister\\Configuration\\Reports\\StatusProvider';

	if (!defined($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cms']['db_layout']['addTables']['fe_users']['MENU'])) {
		$tableArray = array('fe_users', 'fe_groups', 'fe_groups_language_overlay');
		foreach ($tableArray as $theTable) {
			$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cms']['db_layout']['LLFile'][$theTable] = 'EXT:sr_feuser_register/Resources/Private/Language/locallang_db_layout.xlf';
		}
		$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cms']['db_layout']['addTables']['fe_users'] = array(
			'default' => array(
				'MENU' => 'm_default',
				'fList' =>  'username,usergroup,name,cnum,zip,city,email,telephone,gender,uid',
				'icon' => true
			),
			'ext' => array (
				'MENU' => 'm_ext',
				'fList' =>  'username,first_name,middle_name,last_name,title,date_of_birth,comments',
				'icon' => true
			),
			'country' => array(
				'MENU' => 'm_country',
				'fList' =>  'username,static_info_country,zone,language',
				'icon' => true
			),
			'other' => array(
				'MENU' => 'm_other',
				'fList' =>  'username,www,company,status,image,lastlogin,by_invitation,terms_acknowledged,is_online,module_sys_dmail_html',
				'icon' => true
			)
		);
		$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cms']['db_layout']['addTables']['fe_groups'] = array(
			'default' => array(
				'MENU' => 'm_default',
				'fList' =>  'title,description',
				'icon' => true
			),
			'ext' => array(
				'MENU' => 'm_ext',
				'fList' =>  'title,subgroup,lockToDomain,TSconfig',
				'icon' => true
			)
		);
		$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cms']['db_layout']['addTables']['fe_groups_language_overlay'] = array(
			'default' => array(
				'MENU' => 'm_default',
				'fList' =>  'title,fe_group,sys_language_uid',
				'icon' => true
			)
		);
	}
}


/**
 * Extension: typo3_forum
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/typo3_forum/ext_localconf.php
 */

$_EXTKEY = 'typo3_forum';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];



if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$_EXTKEY = 'typo3_forum';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TSconfig/pageTS.txt">');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Mittwald.Typo3Forum',
	'Pi1',
	[
		'Forum' => 'index, show, markRead, showUnread',
		'Topic' => 'show, new, create, solution, listLatest',
		'Post' => 'show, new, create, edit, update, delete',
		'User' => 'showMyProfile, index, list, subscribe, favSubscribe, show, disableUser, unDisableUser, listNotifications, listMessages, createMessage, newMessage',
		'Report' => 'newUserReport, newPostReport, createUserReport, createPostReport',
		'Moderation' => 'indexReport, editReport, newReportComment, editTopic, updateTopic, updateUserReportStatus, updatePostReportStatus, createUserReportComment, createPostReportComment, topicConformDelete',
		'Tag' => 'list, show, new, create, listUserTags, newUserTag, deleteUserTag',
	],
	[
		'Forum' => 'show, index, create, update, delete, markRead, showUnread',
		'Topic' => 'create',
		'Post' => 'new, create, edit, update, delete',
		'User' => 'showMyProfile, dashboard, subscribe, favSubscribe, listFavorites, listNotifications, listTopics, listMessages, createMessage',
		'Report' => 'newUserReport, newPostReport, createUserReport, createPostReport',
		'Moderation' => 'indexReport, updateTopic, updateUserReportStatus, updatePostReportStatus, newReportComment, createUserReportComment, createPostReportComment',
		'Tag' => 'list, show, new, create, listUserTags, newUserTag, deleteUserTag',
	]
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Mittwald.Typo3Forum',
	'Widget',
	[
		'User' => 'list',
		'Stats' => 'list',
	],
	[
		'User' => 'list',
	]
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Mittwald.Typo3Forum',
	'Ajax',
	[
		'Forum' => 'index',
		'Post' => 'preview, addSupporter, removeSupporter',
		'Tag' => 'autoComplete',
		'Ajax' => 'main, postSummary, loginbox'
	],
	[
		'Forum' => 'index',
		'Post' => 'preview, addSupporter, removeSupporter',
		'Ajax' => 'main, postSummary, loginbox',
	]
);

# TCE-Main hook for clearing all typo3_forum caches
$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc'][] = 'Mittwald\Typo3Forum\Cache\CacheManager->clearAll';

if (!is_array($TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['typo3forum_main'])) {
	$TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['typo3forum_main'] = [];
}

if (\TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version) < '4006000') {
	if (!isset($TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['typo3forum_main']['frontend'])) {
		$TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['typo3forum_main']['frontend'] = 't3lib_cache_frontend_VariableFrontend';
	}
	if (!isset($TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['typo3forum_main']['backend'])) {
		$TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['typo3forum_main']['backend'] = 't3lib_cache_backend_DbBackend';
	}
	if (!isset($TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['typo3forum_main']['options'])) {
		$TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['typo3forum_main']['options'] = [];
	}
	if (!isset($TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['typo3forum_main']['options']['cacheTable'])) {
		$TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['typo3forum_main']['options']['cacheTable'] = 'tx_typo3forum_cache';
	}
	if (!isset($TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['typo3forum_main']['options']['tagsTable'])) {
		$TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['typo3forum_main']['options']['tagsTable'] = 'tx_typo3forum_cache_tags';
	}
}

$TYPO3_CONF_VARS['FE']['eID_include']['typo3_forum'] = 'EXT:typo3_forum/Classes/Ajax/Dispatcher.php';

// Connect signals to slots. Some parts of extbase suck, but the signal-slot
// pattern is really cool! :P
$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Extbase\SignalSlot\Dispatcher');
$signalSlotDispatcher->connect('Mittwald\Typo3Forum\Domain\Model\Forum\Post', 'postCreated', 'Mittwald\Typo3Forum\Service\Notification\SubscriptionListener', 'onPostCreated');
$signalSlotDispatcher->connect('Mittwald\Typo3Forum\Domain\Model\Forum\Topic', 'topicCreated', 'Mittwald\Typo3Forum\Service\Notification\SubscriptionListener', 'onTopicCreated');

// adding scheduler tasks

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['Mittwald\Typo3Forum\Scheduler\Counter'] = [
	'extension' => $_EXTKEY,
	'title' => 'LLL:EXT:typo3_forum/Resources/Private/Language/locallang.xml:tx_typo3forum_scheduler_counter_title',
	'description' => 'LLL:EXT:typo3_forum/Resources/Private/Language/locallang.xml:tx_typo3forum_scheduler_counter_description',
	'additionalFields' => 'Mittwald\Typo3Forum\Scheduler\CounterAdditionalFieldProvider'
];

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['Mittwald\Typo3Forum\Scheduler\DatabaseMigrator'] = [
	'extension' => $_EXTKEY,
	'title' => 'LLL:EXT:typo3_forum/Resources/Private/Language/locallang.xml:tx_typo3forum_scheduler_databaseMigrator_title',
	'description' => 'LLL:EXT:typo3_forum/Resources/Private/Language/locallang.xml:tx_typo3forum_scheduler_databaseMigrator_description',
];

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['Mittwald\Typo3Forum\Scheduler\ForumRead'] = [
	'extension' => $_EXTKEY,
	'title' => 'LLL:EXT:typo3_forum/Resources/Private/Language/locallang.xml:tx_typo3forum_scheduler_forumRead_title',
	'description' => 'LLL:EXT:typo3_forum/Resources/Private/Language/locallang.xml:tx_typo3forum_scheduler_forumRead_description',
	'additionalFields' => 'Mittwald\Typo3Forum\Scheduler\ForumReadAdditionalFieldProvider',
];

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['Mittwald\Typo3Forum\Scheduler\Notification'] = [
	'extension' => $_EXTKEY,
	'title' => 'LLL:EXT:typo3_forum/Resources/Private/Language/locallang.xml:tx_typo3forum_scheduler_notification_title',
	'description' => 'LLL:EXT:typo3_forum/Resources/Private/Language/locallang.xml:tx_typo3forum_scheduler_notification_description',
	'additionalFields' => 'Mittwald\Typo3Forum\Scheduler\NotificationAdditionalFieldProvider',
];

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['Mittwald\Typo3Forum\Scheduler\SessionResetter'] = [
	'extension' => $_EXTKEY,
	'title' => 'LLL:EXT:typo3_forum/Resources/Private/Language/locallang.xml:tx_typo3forum_scheduler_sessionResetter_title',
	'description' => 'LLL:EXT:typo3_forum/Resources/Private/Language/locallang.xml:tx_typo3forum_scheduler_sessionResetter_description',
	'additionalFields' => 'Mittwald\Typo3Forum\Scheduler\SessionResetterAdditionalFieldProvider',
];

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['Mittwald\Typo3Forum\Scheduler\StatsSummary'] = [
	'extension' => $_EXTKEY,
	'title' => 'LLL:EXT:typo3_forum/Resources/Private/Language/locallang.xml:tx_typo3forum_scheduler_statsSummary_title',
	'description' => 'LLL:EXT:typo3_forum/Resources/Private/Language/locallang.xml:tx_typo3forum_scheduler_statsSummary_description',
	'additionalFields' => 'Mittwald\Typo3Forum\Scheduler\StatsSummaryAdditionalFieldProvider',
];


/**
 * Extension: cal
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/cal/ext_localconf.php
 */

$_EXTKEY = 'cal';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (! defined ('TYPO3_MODE'))
	die ('Access denied.');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43 ($_EXTKEY, 'Classes/Controller/Controller.php', '_controller', 'list_type', 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig ('options.saveDocNew.tx_cal_event=1');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig ('options.saveDocNew.tx_cal_exception_event=1');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript ($_EXTKEY, 'setup', '
	tt_content.shortcut.20.conf.tx_cal_event = < plugin.tx_cal_controller
	tt_content.shortcut.20.conf.tx_cal_event {
		displayCurrentRecord = 1
		// If you don\'t want that this record is reacting on certain piVars, add those to this list. To clear all piVars, use keyword "all"
		clearPiVars = uid,getdate,type,view
		// If you want that this record doesn\'t react on any piVar or session-stored var of cal - uncomment this option
		#dontListenToPiVars = 1
	}
', 43);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig ('options.tx_cal_controller.headerStyles = default_catheader=#557CA3,green_catheader=#53A062,orange_catheader=#E84F25,pink_catheader=#B257A2,red_catheader=#D42020,yellow_catheader=#B88F0B,grey_catheader=#73738C
	 options.tx_cal_controller.bodyStyles = default_catbody=#6699CC,green_catbody=#4FC464,orange_catbody=#FF6D3B,pink_catbody=#EA62D4,red_catbody=#FF5E56,yellow_catbody=#CCB21F,grey_catbody=#9292A1');

$GLOBALS['TYPO3_CONF_VARS'] ['FE'] ['eID_include'] ['cal_ajax'] = 'EXT:cal/Classes/Ajax/Ajax.php';

/**
 * Both views and model are provided using TYPO3 services.
 * Models should be
 * of the type 'cal_model' with a an extension key specific to that model.
 * Views can be of two types. The 'cal_view' type is used for views that
 * display multiple events. Within this type, subtypes for 'single', 'day',
 * 'week', 'month', 'year', and 'custom' are available. The default views
 * each have the key 'default'. Custom views tied to a specific model should
 * have service keys identical to the key of that model.
 */

/* Cal Example Concrete Model */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_event_model' /* sv type */,  'tx_cal_fnb' /* sv key */,
	array (
		'title' => 'Cal Free and Busy Model',
		'description' => '',
		'subtype' => 'event',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\Service\\FnbEventService' 
));

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_event_model' /* sv type */,  'tx_cal_phpicalendar' /* sv key */,
	array (
		'title' => 'Cal PHPiCalendar Model',
		'description' => '',
		'subtype' => 'event',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\Service\\EventService' 
));

// get extension confArr
$confArr = unserialize ($GLOBALS ['TYPO3_CONF_VARS'] ['EXT'] ['extConf'] ['cal']);

/* Cal Todo Model */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_event_model' /* sv type */,  'tx_cal_todo' /* sv key */,
	array (
		'title' => 'Cal Todo Model',
		'description' => '',
		'subtype' => $confArr ['todoSubtype'],
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\Service\\TodoService' 
));

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_event_model' /* sv type */,  'tx_cal_nearby' /* sv key */,
	array (
		'title' => 'Cal Nearby Model',
		'description' => '',
		'subtype' => 'event',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\Service\\NearbyEventService' 
));

/* Cal Example Concrete Model */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_organizer_model' /* sv type */,  'tx_partner_main' /* sv key */,
	array (
		'title' => 'Cal Organizer Model',
		'description' => '',
		'subtype' => 'organizer',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\Service\\OrganizerPartnerService' 
));

/* Cal Example Concrete Model */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_organizer_model' /* sv type */,  'tx_cal_organizer' /* sv key */,
	array (
		'title' => 'Cal Organizer Model',
		'description' => '',
		'subtype' => 'organizer',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\Service\\OrganizerService' 
));

/* Cal Example Concrete Model */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_organizer_model' /* sv type */,  'tx_tt_address' /* sv key */,
	array (
		'title' => 'Cal Organizer Model',
		'description' => '',
		'subtype' => 'organizer',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\Service\\OrganizerAddressService' 
));

/* Cal Example Concrete Model */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_organizer_model' /* sv type */,  'tx_feuser' /* sv key */,
	array (
		'title' => 'Frontend User Organizer Model',
		'description' => '',
		'subtype' => 'organizer',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\Service\\OrganizerFeUserService' 
));

/* Cal Example Concrete Model */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_location_model' /* sv type */,  'tx_partner_main' /* sv key */,
	array (
		'title' => 'Cal Location Model',
		'description' => '',
		'subtype' => 'location',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\Service\\LocationPartnerService' 
));

/* Cal Example Concrete Model */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_location_model' /* sv type */,  'tx_tt_address' /* sv key */,
	array (
		'title' => 'Cal Location Model',
		'description' => '',
		'subtype' => 'location',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\Service\\LocationAddressService' 
));

/* Cal Example Concrete Model */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_location_model' /* sv type */,  'tx_cal_location' /* sv key */,
	array (
		'title' => 'Cal Location Model',
		'description' => '',
		'subtype' => 'location',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\Service\\LocationService' 
));

/* Cal Example Concrete Model */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_attendee_model' /* sv type */,  'tx_cal_attendee' /* sv key */,
	array (
		'title' => 'Cal Attendee Model',
		'description' => '',
		'subtype' => 'attendee',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\Service\\AttendeeService' 
));

/* Cal Example Concrete Model */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_calendar_model' /* sv type */,  'tx_cal_calendar' /* sv key */,
	array (
		'title' => 'Cal Calendar Model',
		'description' => '',
		'subtype' => 'calendar',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\Service\\CalendarService' 
));

/* Cal Example Concrete Model */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_category_model' /* sv type */,  'tx_cal_category' /* sv key */,
	array (
		'title' => 'Cal Category Model',
		'description' => '',
		'subtype' => 'category',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\Service\\CategoryService' 
));

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_category_model' /* sv type */,  'sys_category' /* sv key */,
	array (
		'title' => 'System Category Model',
		'description' => '',
		'subtype' => 'category',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\Service\\SysCategoryService'
));

/* Default day View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_event' /* sv key */,
	array (
		'title' => 'Default Event View',
		'description' => '',
		'subtype' => 'event',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\EventView' 
));

/* Default day View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_day' /* sv key */,
	array (
		'title' => 'Default Day View',
		'description' => '',
		'subtype' => 'day',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\DayView' 
));

/* Default week View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_week' /* sv key */,
	array (
		'title' => 'Default Week View',
		'description' => '',
		'subtype' => 'week',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\WeekView' 
));

/* Default month View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_month' /* sv key */,
	array (
		'title' => 'Default Month View',
		'description' => '',
		'subtype' => 'month',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\MonthView' 
));

/* Default year View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_year' /* sv key */,
	array (
		'title' => 'Default Year View',
		'description' => '',
		'subtype' => 'year',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\YearView' 
));

/* Default list View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_list' /* sv key */,
	array (
		'title' => 'Default List View',
		'description' => '',
		'subtype' => 'list',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\ListView' 
));

/* Default ics View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_ics' /* sv key */,
	array (
		'title' => 'Default Ics View',
		'description' => '',
		'subtype' => 'ics',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\IcsView' 
));

/* Default icslist View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_icslist' /* sv key */,
	array (
		'title' => 'Default Ics List View',
		'description' => '',
		'subtype' => 'ics',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\IcsView' 
));

/* Default rss View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_rss' /* sv key */,
	array (
		'title' => 'Default Rss View',
		'description' => '',
		'subtype' => 'rss',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\RssView' 
));

/* Default admin View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_admin' /* sv key */,
	array (
		'title' => 'Default Admin View',
		'description' => '',
		'subtype' => 'admin',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\AdminView' 
));

/* Default location View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_location' /* sv key */,
	array (
		'title' => 'Default Location View',
		'description' => '',
		'subtype' => 'location',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\LocationView' 
));

/* Default organizer View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_organizer' /* sv key */,
	array (
		'title' => 'Default Organizer View',
		'description' => '',
		'subtype' => 'organizer',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\OrganizerView' 
));

/* Default create event View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_create_event' /* sv key */,
	array (
		'title' => 'Default Create Event View',
		'description' => '',
		'subtype' => 'create_event',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\CreateEventView' 
));

/* Default confirm event View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_confirm_event' /* sv key */,
	array (
		'title' => 'Default Confirm Event View',
		'description' => '',
		'subtype' => 'confirm_event',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\ConfirmEventView' 
));

/* Default delete event View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_delete_event' /* sv key */,
	array (
		'title' => 'Default Delete Event View',
		'description' => '',
		'subtype' => 'delete_event',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\DeleteEventView' 
));

/* Default remove event service */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_remove_event' /* sv key */,
	array (
		'title' => 'Default Remove Event View',
		'description' => '',
		'subtype' => 'remove_event',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\EventView' 
));

/* Default create location View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_create_location' /* sv key */,
	array (
		'title' => 'Default Create Location View',
		'description' => '',
		'subtype' => 'create_location',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\CreateLocationOrganizerView' 
));

/* Default confirm location View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_confirm_location' /* sv key */,
	array (
		'title' => 'Default Confirm Location View',
		'description' => '',
		'subtype' => 'confirm_location',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\ConfirmLocationOrganizerView' 
));

/* Default delete location View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_delete_location' /* sv key */,
	array (
		'title' => 'Default Delete Location View',
		'description' => '',
		'subtype' => 'delete_location',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\DeleteLocationOrganizerView' 
));

/* Default remove location service */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_remove_location' /* sv key */,
	array (
		'title' => 'Default Remove Location View',
		'description' => '',
		'subtype' => 'remove_location',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\LocationView' 
));

/* Default create organizer View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_create_organizer' /* sv key */,
	array (
		'title' => 'Default Create Organizer View',
		'description' => '',
		'subtype' => 'create_organizer',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\CreateLocationOrganizerView' 
));

/* Default confirm organizer View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_confirm_organizer' /* sv key */,
	array (
		'title' => 'Default Confirm Organizer View',
		'description' => '',
		'subtype' => 'confirm_organizer',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\ConfirmLocationOrganizerView' 
));

/* Default delete organizer View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_delete_organizer' /* sv key */,
	array (
		'title' => 'Default Delete Organizer View',
		'description' => '',
		'subtype' => 'delete_organizer',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\DeleteLocationOrganizerView' 
));

/* Default remove organizer service */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_remove_organizer' /* sv key */,
	array (
		'title' => 'Default Remove Organizer View',
		'description' => '',
		'subtype' => 'remove_organizer',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\OrganizerView' 
));

/* Default create calendar View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_create_calendar' /* sv key */,
	array (
		'title' => 'Default Create Location View',
		'description' => '',
		'subtype' => 'create_calendar',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\CreateCalendarView' 
));

/* Default confirm calendar View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_confirm_calendar' /* sv key */,
	array (
		'title' => 'Default Confirm Location View',
		'description' => '',
		'subtype' => 'confirm_calendar',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\ConfirmCalendarView' 
));

/* Default delete calendar View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_delete_calendar' /* sv key */,
	array (
		'title' => 'Default Delete Location View',
		'description' => '',
		'subtype' => 'delete_calendar',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\DeleteCalendarView' 
));

/* Default remove calendar service */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_remove_calendar' /* sv key */,
	array (
		'title' => 'Default Remove Location View',
		'description' => '',
		'subtype' => 'remove_calendar',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\DeleteCalendarView' 
));

/* Default create category View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_create_category' /* sv key */,
	array (
		'title' => 'Default Create Location View',
		'description' => '',
		'subtype' => 'create_category',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\CreateCategoryView' 
));

/* Default confirm category View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_confirm_category' /* sv key */,
	array (
		'title' => 'Default Confirm Location View',
		'description' => '',
		'subtype' => 'confirm_category',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\ConfirmCategoryView' 
));

/* Default delete category View */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_delete_category' /* sv key */,
	array (
		'title' => 'Default Delete Location View',
		'description' => '',
		'subtype' => 'delete_category',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\DeleteCategoryView' 
));

/* Default remove category service */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_remove_category' /* sv key */,
	array (
		'title' => 'Default Remove Location View',
		'description' => '',
		'subtype' => 'remove_category',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\DeleteCategoryView' 
));

/* Default search service */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_searchall' /* sv key */,
	array (
		'title' => 'Default Search View',
		'description' => '',
		'subtype' => 'search',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\SearchViews' 
));

/* Default search service */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_searchevent' /* sv key */,
	array (
		'title' => 'Default Search View',
		'description' => '',
		'subtype' => 'search',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\SearchViews' 
));

/* Default search service */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_searchlocation' /* sv key */,
	array (
		'title' => 'Default Search View',
		'description' => '',
		'subtype' => 'search',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\SearchViews' 
));

/* Default search service */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_searchorganizer' /* sv key */,
	array (
		'title' => 'Default Search View',
		'description' => '',
		'subtype' => 'search',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\SearchViews' 
));

/* Default notification service */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_notification' /* sv key */,
	array (
		'title' => 'Default notification service',
		'description' => '',
		'subtype' => 'notify',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\NotificationView' 
));

/* Default reminder service */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_default_reminder' /* sv key */,
	array (
		'title' => 'Default reminder service',
		'description' => '',
		'subtype' => 'remind',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\ReminderView' 
));

/* Default rights service */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_rights_model' /* sv type */,  'tx_cal_rights' /* sv key */,
	array (
		'title' => 'Default rights service',
		'description' => '',
		'subtype' => 'rights',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\Service\\RightsService' 
));
// Example for a module
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'TEST' /* sv type */,  'tx_cal_module' /* sv key */,
	array (
		'title' => 'Test module',
		'description' => '',
		'subtype' => 'module',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\Module\\Example' 
));

// Example for a module
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'LOCATIONLOADER' /* sv type */,  'tx_cal_module' /* sv key */,
	array (
		'title' => 'Location loader module',
		'description' => '',
		'subtype' => 'module',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\Module\\LocationLoader' 
));

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'ORGANIZERLOADER' /* sv type */,  'tx_cal_module' /* sv key */,
	array (
		'title' => 'Organizer loader module',
		'description' => '',
		'subtype' => 'module',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\Module\\OrganizerLoader' 
));

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_cal_subscription' /* sv key */,
	array (
		'title' => 'Subscription Manager',
		'description' => '',
		'subtype' => 'subscription',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\SubscriptionManagerView' 
));

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService ($_EXTKEY, 'cal_view' /* sv type */,  'tx_cal_meeting' /* sv key */,
	array (
		'title' => 'Meeting Manager',
		'description' => '',
		'subtype' => 'meeting',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Cal\\View\\MeetingManagerView' 
));

$GLOBALS ['TYPO3_CONF_VARS'] ['SC_OPTIONS'] ['t3lib/class.t3lib_tcemain.php'] ['processDatamapClass'] ['tx_cal'] = 'TYPO3\\CMS\\Cal\\Hooks\\TceMainProcessdatamap';
$GLOBALS ['TYPO3_CONF_VARS'] ['SC_OPTIONS'] ['t3lib/class.t3lib_tcemain.php'] ['processCmdmapClass'] ['tx_cal'] = 'TYPO3\\CMS\\Cal\\Hooks\\TceMainProcesscmdmap';

if (\TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version) >= 7005000) {
	\TYPO3\CMS\Cal\Backend\Form\FormDateDataProvider::register();
} else if (\TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version) >= 7001000) {
	\TYPO3\CMS\Cal\Slot\FormDataPreprocessorSlot::register();
} else {
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tceforms.php']['getMainFieldsClass']['tx_cal'] = 'TYPO3\\CMS\\Cal\\Hooks\\TceFormsGetmainfields';
}

$GLOBALS ['TYPO3_CONF_VARS'] ['SC_OPTIONS'] ['tslib/class.tslib_content.php'] ['typolinkLinkHandler'] ['calendar'] = 'TYPO3\\CMS\\Cal\\Hooks\\EventLinkHandler';
$GLOBALS ['TYPO3_CONF_VARS'] ['EXTCONF'] ['tx_wecmap_pi3'] ['markerHook'] ['cal'] = 'TYPO3\\CMS\\Cal\\Hooks\\WecMap:&WecMap->getMarkerContent';
$GLOBALS ['TYPO3_CONF_VARS'] ['SC_OPTIONS'] ['tce'] ['formevals'] ['tx_cal_dateeval'] = 'TYPO3\\CMS\\Cal\\Hooks\\DateEval';
// $GLOBALS ['TYPO3_CONF_VARS'] ['EXTCONF'] ['felogin'] ['loginFormOnSubmitFuncs'] [] = 'TYPO3\\CMS\\Cal\\Hooks\\LogoffPostProcessing:LogoffPostProcessing->clearSessionApiAfterLogoff';
// $GLOBALS ['TYPO3_CONF_VARS'] ['EXTCONF'] ['felogin'] ['login_confirmed'] [] = 'TYPO3\\CMS\\Cal\\Hooks\\LogoffPostProcessing:LogoffPostProcessing->clearSessionApiAfterLogin';

if (! isset ($confArr ['enableRealURLAutoConfiguration']) || $confArr ['enableRealURLAutoConfiguration']) {
	$GLOBALS ['TYPO3_CONF_VARS'] ['SC_OPTIONS'] ['ext/realurl/class.tx_realurl_autoconfgen.php'] ['extensionConfiguration'] ['cal'] = 'TYPO3\\CMS\\Cal\\Hooks\\RealUrl->addRealURLConfig';
}

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded ('gabriel')) {
	$GLOBALS ['TYPO3_CONF_VARS'] ['EXTCONF'] ['gabriel'] ['include'] [$_EXTKEY] = Array (
			'TYPO3\\CMS\\Cal\\Cron\\CalendarCron',
			'TYPO3\\CMS\\Cal\\Cron\\ReminderCron' 
	);
}

$GLOBALS ['TYPO3_CONF_VARS'] ['SC_OPTIONS'] ['scheduler'] ['tasks'] ['TYPO3\\CMS\\Cal\\Cron\\CalendarScheduler'] = Array (
		'extension' => $_EXTKEY,
		'title' => 'Updating external calendars (created by saving the calendar record)',
		'description' => 'cal calendar scheduler integration',
		'additionalFields' => ''
);
$GLOBALS ['TYPO3_CONF_VARS'] ['SC_OPTIONS'] ['scheduler'] ['tasks'] ['TYPO3\\CMS\\Cal\\Cron\\ReminderScheduler'] = Array (
		'extension' => $_EXTKEY,
		'title' => 'Sending reminder for events (created by saving the event record)',
		'description' => 'cal reminder scheduler integration',
		'additionalFields' => ''
);
$GLOBALS ['TYPO3_CONF_VARS'] ['SC_OPTIONS'] ['scheduler'] ['tasks'] ['TYPO3\\CMS\\Cal\\Cron\\IndexerScheduler'] = Array (
		'extension' => $_EXTKEY,
		'title' => 'Indexer for recurring events',
		'description' => 'Indexing recurring events',
		'additionalFields' => 'TYPO3\\CMS\\Cal\\Cron\\IndexerSchedulerAdditionalFieldProvider'
);

/* defining stuff for scheduler */
if (\TYPO3\CMS\Core\Utility\GeneralUtility::inList ($GLOBALS['TYPO3_CONF_VARS'] ['EXT'] ['extList'], 'scheduler')) {
	// find type of ext and determine paths
	// add these to the global TYPO3_LOADED_EXT
	$temp_extKey = 'scheduler';
	if (! isset ($GLOBALS ['TYPO3_LOADED_EXT'] [$temp_extKey])) {
		if (@is_dir (PATH_typo3conf . 'ext/' . $temp_extKey . '/')) {
			$GLOBALS ['TYPO3_LOADED_EXT'] [$temp_extKey] = Array (
					'type' => 'L',
					'siteRelPath' => 'typo3conf/ext/' . $temp_extKey . '/',
					'typo3RelPath' => '../typo3conf/ext/' . $temp_extKey . '/' 
			);
		} elseif (@is_dir (PATH_typo3 . 'ext/' . $temp_extKey . '/')) {
			$GLOBALS ['TYPO3_LOADED_EXT'] [$temp_extKey] = Array (
					'type' => 'G',
					'siteRelPath' => TYPO3_mainDir . 'ext/' . $temp_extKey . '/',
					'typo3RelPath' => 'ext/' . $temp_extKey . '/' 
			);
		} elseif (@is_dir (PATH_typo3 . 'sysext/' . $temp_extKey . '/')) {
			$GLOBALS ['TYPO3_LOADED_EXT'] [$temp_extKey] = Array (
					'type' => 'S',
					'siteRelPath' => TYPO3_mainDir . 'sysext/' . $temp_extKey . '/',
					'typo3RelPath' => 'sysext/' . $temp_extKey . '/' 
			);
		}
	}
	
	$GLOBALS ['TYPO3_CONF_VARS'] ['EXT'] ['extList_FE'] .= ',scheduler';
	$GLOBALS ['TYPO3_CONF_VARS'] ['SC_OPTIONS'] ['scheduler'] ['tasks'] ['TYPO3\\CMS\\Cal\\Cron\\CalendarScheduler'] = Array (
		'extension' => $_EXTKEY,
		'title' => 'Updating external calendars (created by saving the calendar record)',
		'description' => 'cal calendar scheduler integration',
		'additionalFields' => ''
	);
	$GLOBALS ['TYPO3_CONF_VARS'] ['SC_OPTIONS'] ['scheduler'] ['tasks'] ['TYPO3\\CMS\\Cal\\Cron\\ReminderScheduler'] = Array (
			'extension' => $_EXTKEY,
			'title' => 'Sending reminder for events (created by saving the event record)',
			'description' => 'cal reminder scheduler integration',
			'additionalFields' => ''
	);
	$GLOBALS ['TYPO3_CONF_VARS'] ['SC_OPTIONS'] ['scheduler'] ['tasks'] ['TYPO3\\CMS\\Cal\\Cron\\IndexerScheduler'] = Array (
			'extension' => $_EXTKEY,
			'title' => 'Indexer for recurring events',
			'description' => 'Indexing recurring events',
			'additionalFields' => 'TYPO3\\CMS\\Cal\\Cron\\IndexerSchedulerAdditionalFieldProvider'
	);
}

/* Include a custom userFunc for checking whether we're in frontend editing mode */
require_once (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath ($_EXTKEY) . 'Classes/Frontend/IsCalNotAllowedToBeCached.php');

// caching framework configuration
// Register cache 'tx_cal_cache'
if (! is_array ($GLOBALS['TYPO3_CONF_VARS'] ['SYS'] ['caching'] ['cacheConfigurations'] ['tx_cal_cache'])) {
	$GLOBALS['TYPO3_CONF_VARS'] ['SYS'] ['caching'] ['cacheConfigurations'] ['tx_cal_cache'] = Array ();
}
// Define string frontend as default frontend, this must be set with TYPO3 4.5 and below
// and overrides the default variable frontend of 4.6
if (! isset ($GLOBALS['TYPO3_CONF_VARS'] ['SYS'] ['caching'] ['cacheConfigurations'] ['tx_cal_cache'] ['frontend'])) {
	$GLOBALS['TYPO3_CONF_VARS'] ['SYS'] ['caching'] ['cacheConfigurations'] ['tx_cal_cache'] ['frontend'] = 'TYPO3\\CMS\\Core\\Cache\\Frontend\\StringFrontend';
}
if (\TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger (TYPO3_version) < '4006000') {
	// Define database backend as backend for 4.5 and below (default in 4.6)
	if (! isset ($GLOBALS['TYPO3_CONF_VARS'] ['SYS'] ['caching'] ['cacheConfigurations'] ['tx_cal_cache'] ['backend'])) {
		$GLOBALS['TYPO3_CONF_VARS'] ['SYS'] ['caching'] ['cacheConfigurations'] ['tx_cal_cache'] ['backend'] = 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend';
	}
	// Define data and tags table for 4.5 and below (obsolete in 4.6)
	if (! isset ($GLOBALS['TYPO3_CONF_VARS'] ['SYS'] ['caching'] ['cacheConfigurations'] ['tx_cal_cache'] ['options'])) {
		$GLOBALS['TYPO3_CONF_VARS'] ['SYS'] ['caching'] ['cacheConfigurations'] ['tx_cal_cache'] ['options'] = Array ();
	}
	if (! isset ($GLOBALS['TYPO3_CONF_VARS'] ['SYS'] ['caching'] ['cacheConfigurations'] ['tx_cal_cache'] ['options'] ['cacheTable'])) {
		$GLOBALS['TYPO3_CONF_VARS'] ['SYS'] ['caching'] ['cacheConfigurations'] ['tx_cal_cache'] ['options'] ['cacheTable'] = 'tx_cal_cache';
	}
	if (! isset ($GLOBALS['TYPO3_CONF_VARS'] ['SYS'] ['caching'] ['cacheConfigurations'] ['tx_cal_cache'] ['options'] ['tagsTable'])) {
		$GLOBALS['TYPO3_CONF_VARS'] ['SYS'] ['caching'] ['cacheConfigurations'] ['tx_cal_cache'] ['options'] ['tagsTable'] = 'tx_cal_cache_tags';
	}
}

// register cal cache table for "clear all caches"
if ($confArr ['cachingMode'] == 'normal') {
	$GLOBALS ['TYPO3_CONF_VARS'] ['SC_OPTIONS'] ['t3lib/class.t3lib_tcemain.php'] ['clearAllCache_additionalTables'] ['tx_cal_cache'] = 'tx_cal_cache';
}
$GLOBALS ['TYPO3_CONF_VARS'] ['SC_OPTIONS'] ['t3lib/class.t3lib_befunc.php'] ['postProcessValue'] [] = 'TYPO3\\CMS\\Cal\\Hooks\\Befunc->postprocessvalue';
$GLOBALS ['TYPO3_CONF_VARS'] ['SC_OPTIONS'] ['t3lib/class.t3lib_befunc.php'] ['preProcessValue'] [] = 'TYPO3\\CMS\\Cal\\Hooks\\Befunc->preprocessvalue';

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['cal_event_file_uploads'] = 'TYPO3\\CMS\\Cal\\Updates\\UploadsUpdateWizard';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['cal_event_images'] = 'TYPO3\\CMS\\Cal\\Updates\\EventImagesUpdateWizard';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['cal_location_images'] = 'TYPO3\\CMS\\Cal\\Updates\\LocationImagesUpdateWizard';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['cal_organizer_images'] = 'TYPO3\\CMS\\Cal\\Updates\\OrganizerImagesUpdateWizard';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['cal_sys_template'] = 'TYPO3\\CMS\\Cal\\Updates\\TypoScriptUpdateWizard';



/**
 * Extension: mask
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/mask/ext_localconf.php
 */

$_EXTKEY = 'mask';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


// backwards compatibility for typo3 6.2
$version = \TYPO3\CMS\Core\Utility\VersionNumberUtility::getNumericTypo3Version();
$versionNumber = \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger($version);

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'MASK.' . $_EXTKEY, 'ContentRenderer', array('Frontend' => 'contentelement'), array('Frontend' => '')
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:mask/Configuration/TypoScript/page.txt">');

// Load JSON file
$extConf = unserialize($_EXTCONF);
if (!empty($extConf["json"]) && file_exists(PATH_site . $extConf["json"])) {
    $json = json_decode(file_get_contents(PATH_site . $extConf["json"]), true);
}

// Icon registry
// backwards compatibility for typo3 6.2
if ($versionNumber >= 7005000) {
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance("TYPO3\CMS\Core\Imaging\IconRegistry");
    $maskIcons = array("Check", "Date", "Datetime", "File", "Float", "Inline", "Integer", "Link", "Radio", "Richtext", "Select", "String", "Text");
    foreach ($maskIcons as $maskIcon) {
        $iconRegistry->registerIcon(
            'mask-fieldtype-' . $maskIcon, 'TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider', array(
            'source' => 'EXT:mask/Resources/Public/Icons/fieldtypes/' . $maskIcon . '.svg'
            )
        );
    }
}

// generate page TSconfig
$content = "";
$temp = "";
// Load page.ts Template
$template = file_get_contents(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('mask') . "Resources/Private/Mask/page.ts", true);
// make content-Elements
if ($json["tt_content"]["elements"]) {

    foreach ($json["tt_content"]["elements"] as $element) {
        // backwards compatibility for typo3 6.2
        if ($versionNumber >= 7005000) {
            // Register icons for contentelements
            $iconIdentifier = 'mask-ce-' . $element["key"];
            $iconRegistry->registerIcon(
                $iconIdentifier, "MASK\Mask\Imaging\IconProvider\ContentElementIconProvider", array(
                'contentElementKey' => $element["key"]
                )
            );
            $temp = str_replace("###ICON###", "iconIdentifier = " . $iconIdentifier, $template);
        } else {
            $temp = str_replace("###ICON###", "icon = ../" . $extConf["preview"] . 'ce_' . $element["key"] . '.png', $template);
        }

        $temp = str_replace("###KEY###", $element["key"], $temp);
        $temp = str_replace("###LABEL###", $element["label"], $temp);
        $temp = str_replace("###DESCRIPTION###", $element["description"], $temp);
        $content.= $temp;

        // Labels
        $content .= "\n[userFunc = user_mask_contentType(CType|mask_" . $element["key"] . ")]\n";
        if ($element["columns"]) {
            foreach ($element["columns"] as $index => $column) {
                $content .= " TCEFORM.tt_content." . $column . ".label = " . $element["labels"][$index] . "\n";
            }
        }
        $content .= "[end]\n\n";
    }
}


// make pages
$pageColumns = array();
$disableColumns = "";
$pagesContent = "";
if ($json["pages"]["elements"]) {
    foreach ($json["pages"]["elements"] as $element) {
        // Labels for pages
        $pagesContent .= "\n[userFunc = user_mask_beLayout(" . $element["key"] . ")]\n";
        // if page has backendlayout with this element-key
        if ($element["columns"]) {
            foreach ($element["columns"] as $index => $column) {
                $pagesContent .= " TCEFORM.pages." . $column . ".label = " . $element["labels"][$index] . "\n";
                $pagesContent .= " TCEFORM.pages_language_overlay." . $column . ".label = " . $element["labels"][$index] . "\n";
            }
            $pagesContent .= "\n";
            foreach ($element["columns"] as $index => $column) {
                $pageColumns[] = $column;
                $pagesContent .= " TCEFORM.pages." . $column . ".disabled = 0\n";
                $pagesContent .= " TCEFORM.pages_language_overlay." . $column . ".disabled = 0\n";
            }
        }
        $pagesContent .= "[end]\n";
    }
}
// disable all fields by default and only activate by condition
foreach ($pageColumns as $column) {
    $disableColumns .= "TCEFORM.pages." . $column . ".disabled = 1\n";
    $disableColumns .= "TCEFORM.pages_language_overlay." . $column . ".disabled = 1\n";
}
$pagesContent = $disableColumns . "\n" . $pagesContent;
$content .= $pagesContent;

// put into page TSconfig:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig($content);

// generate TypoScript setup
$setupContent = '
module.tx_mask {
	view {
		templateRootPaths {
			10 = EXT:mask/Resources/Private/Backend62/Templates/
		}
		partialRootPaths {
			10 = EXT:mask/Resources/Private/Backend62/Partials/
		}
		layoutRootPaths {
			10 = EXT:mask/Resources/Private/Backend62/Layouts/
		}
	}
	persistence{
		classes {
			MASK\Mask\Domain\Model\BackendLayout {
				mapping {
					tableName = backend_layout
					columns {
						uid.mapOnProperty = uid
						title.mapOnProperty = title
					}
				}
			}
		}
	}
}
[compatVersion = 7.0.0]
module.tx_mask {
	view {
		templateRootPaths {
			10 = EXT:mask/Resources/Private/Backend/Templates/
		}
		partialRootPaths {
			10 = EXT:mask/Resources/Private/Backend/Partials/
		}
		layoutRootPaths {
			10 = EXT:mask/Resources/Private/Backend/Layouts/
		}
	}
}
[end]
';
// Load setup.ts Template
$template = file_get_contents(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('mask') . "Resources/Private/Mask/setup.ts", true);
// Fill setup.ts:
if ($json["tt_content"]["elements"]) {
    foreach ($json["tt_content"]["elements"] as $element) {
        $temp = str_replace("###KEY###", $element["key"], $template);
        $temp = str_replace("###PATH###", $extConf['content'] . $element["key"] . '.html', $temp);
        $setupContent.= $temp;
    }
}
// put into setup-field:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup($setupContent);

// for conditions on tt_content:
if (!function_exists('user_mask_contentType')) {

    function user_mask_contentType($param = "")
    {
        if (isset($_REQUEST["edit"]["tt_content"]) && is_array($_REQUEST["edit"]["tt_content"])) {
            $field = explode("|", $param);
            $request = $_REQUEST;
            $first = array_shift($request["edit"]["tt_content"]);

            if ($first == "new") { // if new element
                if ($_REQUEST["defVals"]["tt_content"]["CType"] == $field[1]) {
                    return true;
                } else {
                    return false;
                }
            } else { // if element exists
                $uid = intval(key($_REQUEST["edit"]["tt_content"]));
                $sql = $GLOBALS['TYPO3_DB']->exec_SELECTquery(
                    $field[0], "tt_content", "uid = " . $uid
                );
                $data = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($sql);
                if ($data[$field[0]] == $field[1]) {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }
}

// for conditions on the backend-layouts
if (!function_exists('user_mask_beLayout')) {

    function user_mask_beLayout($layout)
    {
        // get current page uid:
        if (is_array($_REQUEST["data"]["pages"])) { // after saving page
            $uid = intval(key($_REQUEST["data"]["pages"]));
        } elseif (is_array($_REQUEST["data"]["pages_language_overlay"])) {
            $po_uid = key($_REQUEST["data"]["pages_language_overlay"]);
            if ($_REQUEST["data"]["pages_language_overlay"][$po_uid]["pid"]) { // after saving a new pages_language_overlay
                $uid = $_REQUEST["data"]["pages_language_overlay"][$po_uid]["pid"];
            } else { // after saving an existing pages_language_overlay
                $po_uid = intval($po_uid);
                $sql = $GLOBALS['TYPO3_DB']->exec_SELECTquery(
                    "pid", "pages_language_overlay", "uid = " . $po_uid
                );
                $data = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($sql);
                $uid = $data["pid"];
            }
        } elseif ($GLOBALS["SOBE"]->editconf["pages"]) { // after opening pages
            $uid = intval(key($GLOBALS["SOBE"]->editconf["pages"]));
        } elseif ($GLOBALS["SOBE"]->viewId) { // after opening or creating pages_language_overlay
            $uid = $GLOBALS["SOBE"]->viewId;
        } else {
            if ($GLOBALS["_SERVER"]["HTTP_REFERER"] != "") {
                $url = $GLOBALS["_SERVER"]["HTTP_REFERER"];
                $queryString = parse_url($url, PHP_URL_QUERY);
                $result = array();
                parse_str($queryString, $result);
                if ($result["id"]) {
                    $uid = (int) $result["id"];
                }
            }
        }

        if ($uid) {
            $sql = $GLOBALS['TYPO3_DB']->exec_SELECTquery(
                "backend_layout, backend_layout_next_level", "pages", "uid = " . $uid
            );
            $data = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($sql);

            $backend_layout = $data["backend_layout"];
            $backend_layout_next_level = $data["backend_layout_next_level"];

            if ($backend_layout > 0) { // If backend_layout is set on current page
                if ($backend_layout == $layout) { // Check backend_layout of current page
                    return true;
                } else {
                    return false;
                }
            } elseif ($backend_layout_next_level > 0) { // If backend_layout_next_level is set on current page
                if ($backend_layout_next_level == $layout) { // Check backend_layout_next_level of current page
                    return true;
                } else {
                    return false;
                }
            } else { // If backend_layout and backend_layout_next_level is not set on current page, check backend_layout_next_level on rootline
                $sysPage = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Frontend\\Page\\PageRepository');
                $rootline = $sysPage->getRootLine($uid, '', TRUE);
                foreach ($rootline as $page) {
                    if ($page["backend_layout_next_level"] == $layout) {
                        return true;
                    }
                }
                return false;
            }
        } else {
            return false;
        }
    }
}

// set rootlinefields and pageoverlayfields
if ($json['pages']['tca']) {
    $rootlineFields = explode(",", $GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields']);
    $pageOverlayFields = explode(",", $GLOBALS['TYPO3_CONF_VARS']['FE']['pageOverlayFields']);
    foreach ($json['pages']['tca'] as $fieldKey => $value) {
        // Add addRootLineFields and pageOverlayFields for all pagefields
        $rootlineFields[] = $fieldKey;
        $pageOverlayFields[] = $fieldKey;
    }
    $GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] = implode(",", $rootlineFields);
    $GLOBALS['TYPO3_CONF_VARS']['FE']['pageOverlayFields'] = implode(",", $pageOverlayFields);
}

// SQL inject:
$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher');
$signalSlotDispatcher->connect('TYPO3\\CMS\\Install\\Service\\SqlExpectedSchemaService', 'tablesDefinitionIsBeingBuilt', 'MASK\\Mask\\Controller\\FrontendController', 'addDatabaseTablesDefinition');

// Hook for tt_content inline elements
//$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'EXT:mask/Classes/Hooks/class.tx_mask_tcemainprocdm.php:tx_mask_tcemainprocdm';
// Enhance Fluid Output with overridden FluidTemplateContentObject
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Frontend\\ContentObject\\FluidTemplateContentObject'] = array(
    'className' => 'MASK\\Mask\\Fluid\\FluidTemplateContentObject'
);

// Hook to override tt_content backend_preview
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem'][$_EXTKEY] = 'EXT:' . $_EXTKEY . '/Classes/Hooks/PageLayoutViewDrawItem.php:MASK\Mask\Hooks\PageLayoutViewDrawItem';


/**
 * Extension: news
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/news/ext_localconf.php
 */

$_EXTKEY = 'news';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

$boot = function () {
    // Extension manager configuration
    $configuration = \GeorgRinger\News\Utility\EmConfiguration::getSettings();

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'GeorgRinger.news',
        'Pi1',
        [
            'News' => 'list,detail,dateMenu,searchForm,searchResult',
            'Category' => 'list',
            'Tag' => 'list',
        ],
        [
            'News' => 'searchForm,searchResult',
        ]
    );

    // Page module hook
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['list_type_Info']['news' . '_pi1']['news'] =
        \GeorgRinger\News\Hooks\PageLayoutView::class . '->getExtensionSummary';

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc']['news_clearcache'] =
        \GeorgRinger\News\Hooks\DataHandler::class . '->clearCachePostProc';

    // Edit restriction for news records
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass']['news'] =
        \GeorgRinger\News\Hooks\DataHandler::class;

    // FormEngine: Rendering of fields
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tceforms.php']['getSingleFieldClass']['news'] =
        \GeorgRinger\News\Hooks\FormEngine::class;

    // FormEngine: Rendering of the whole FormEngine
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tceforms.php']['getMainFieldsClass']['news'] =
        \GeorgRinger\News\Hooks\FormEngine::class;

    // Modify flexform values
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['getFlexFormDSClass']['news'] =
        \GeorgRinger\News\Hooks\BackendUtility::class;

    // Inline records hook
    if ($configuration->getUseFal()) {
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tceforms_inline.php']['tceformsInlineHook']['news'] =
            \GeorgRinger\News\Hooks\InlineElementHook::class;
    }

    /* ===========================================================================
        Custom cache, done with the caching framework
    =========================================================================== */
    if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['cache_news_category'])) {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['cache_news_category'] = [];
    }
    // Define string frontend as default frontend, this must be set with TYPO3 4.5 and below
    // and overrides the default variable frontend of 4.6
    if (!isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['cache_news_category']['frontend'])) {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['cache_news_category']['frontend'] = \TYPO3\CMS\Core\Cache\Frontend\StringFrontend::class;
    }

    /* ===========================================================================
        Add TSconfig
    =========================================================================== */
    // For linkvalidator
    if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('linkvalidator')) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:news/Configuration/TSconfig/Page/mod.linkvalidator.txt">');
    }
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:news/Configuration/TSconfig/ContentElementWizard.txt">');

    /* ===========================================================================
        Hooks
    =========================================================================== */
    if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('realurl')) {
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/realurl/class.tx_realurl_autoconfgen.php']['extensionConfiguration']['news'] =
            \GeorgRinger\News\Hooks\RealUrlAutoConfiguration::class . '->addNewsConfig';
    }

    /* ===========================================================================
        Update scripts
    =========================================================================== */
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['news_fal'] = \GeorgRinger\News\Updates\FalUpdateWizard::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['news_mm'] = \GeorgRinger\News\Updates\TtContentRelation::class;

    // Register cache frontend for proxy class generation
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['news'] = [
        'frontend' => \TYPO3\CMS\Core\Cache\Frontend\PhpFrontend::class,
        'backend' => \TYPO3\CMS\Core\Cache\Backend\FileBackend::class,
        'groups' => [
            'all',
            'system',
        ],
        'options' => [
            'defaultLifetime' => 0,
        ]
    ];

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord'][\GeorgRinger\News\Backend\FormDataProvider\NewsRowInitializeNew::class] = [
        'depends' => [
            \TYPO3\CMS\Backend\Form\FormDataProvider\DatabaseRowInitializeNew::class,
        ]
    ];
    \GeorgRinger\News\Utility\ClassLoader::registerAutoloader();

    if (TYPO3_MODE === 'BE') {
        /** @var \TYPO3\CMS\Core\Imaging\IconRegistry $iconRegistry */
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        $iconRegistry->registerIcon(
            'apps-pagetree-folder-contains-news',
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => 'EXT:news/Resources/Public/Icons/ext-news-folder-tree.svg']
        );
        $iconRegistry->registerIcon(
            'ext-news-wizard-icon',
            \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
            ['source' => 'EXT:news/Resources/Public/Icons/ce_wiz.gif']
        );
        $iconRegistry->registerIcon(
            'ext-news-type-default',
            \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
            ['source' => 'EXT:news/Resources/Public/Icons/news_domain_model_news.gif']
        );
        $iconRegistry->registerIcon(
            'ext-news-type-internal',
            \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
            ['source' => 'EXT:news/Resources/Public/Icons/news_domain_model_news_internal.gif']
        );
        $iconRegistry->registerIcon(
            'ext-news-type-external',
            \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
            ['source' => 'EXT:news/Resources/Public/Icons/news_domain_model_news_external.gif']
        );
    }

    if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('dd_googlesitemap')) {
        $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['dd_googlesitemap']['sitemap']['txnews']
            = \GeorgRinger\News\Hooks\TxNewsSitemapGenerator::class . '->main';
    }
};

$boot();
unset($boot);


/**
 * Extension: powermail
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/powermail/ext_localconf.php
 */

$_EXTKEY = 'powermail';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

/**
 * Enable caching for show action in form controller
 */
$uncachedFormActions = 'form';
if (\In2code\Powermail\Utility\ConfigurationUtility::isEnableCachingActive()) {
    $uncachedFormActions = '';
}
$uncachedFormActions .= ', create, confirmation, optinConfirm, marketing';

/**
 * Include Frontend Plugins for Powermail
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'In2code.' . $_EXTKEY,
    'Pi1',
    array(
        'Form' => 'form, create, confirmation, optinConfirm, marketing'
    ),
    array(
        'Form' => $uncachedFormActions
    )
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'In2code.' . $_EXTKEY,
    'Pi2',
    array(
        'Output' => 'list, show, edit, update, export, rss, delete'
    ),
    array(
        'Output' => 'list, edit, update, export, rss, delete'
    )
);

/**
 * Hook to show PluginInfo
 */
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']
    ['cms/layout/class.tx_cms_layout.php']['list_type_Info'][$_EXTKEY . '_pi1'][$_EXTKEY] =
        'EXT:' . $_EXTKEY . '/Classes/Utility/Hook/PluginInformation.php:' .
            'In2code\Powermail\Utility\Hook\PluginInformation->build';

/**
 * Hook for initially filling the marker field in backend
 */
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] =
        'EXT:' . $_EXTKEY . '/Classes/Utility/Hook/CreateMarker.php:In2code\Powermail\Utility\Hook\CreateMarker';

/**
 * Hook to extend the FlexForm
 */
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['getFlexFormDSClass'][] =
    'EXT:' . $_EXTKEY . '/Classes/Utility/Hook/FlexFormManipulationHook.php:' .
        'In2code\Powermail\Utility\Hook\FlexFormManipulationHook';

/**
 * JavaScript evaluation of TCA fields
 */
$TYPO3_CONF_VARS['SC_OPTIONS']['tce']['formevals']['\In2code\Powermail\Utility\Tca\EvaluateEmail'] =
    'EXT:powermail/Classes/Utility/Tca/EvaluateEmail.php';

/**
 * eID to get location from geo coordinates
 */
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['powermailEidGetLocation'] =
    'EXT:powermail/Classes/Utility/Eid/GetLocationEid.php';

/**
 * eID to store marketing information
 */
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['powermailEidMarketing'] =
    'EXT:powermail/Classes/Utility/Eid/MarketingEid.php';

/**
 * CommandController for powermail tasks
 */
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][] =
    'In2code\\Powermail\\Command\\TaskCommandController';


/**
 * Extension: pt_extbase
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/pt_extbase/ext_localconf.php
 */

$_EXTKEY = 'pt_extbase';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}


// TODO this is deactivated but we set it anyways in Tx_PtExtbase_State_Session_Storage_DBAdapterFactory since some websites crash otherwise. Fix this if you want to use caching!!!
/**
// Define state cache, if not already defined
if (!is_array($TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['tx_ptextbase'])) {
    $TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['tx_ptextbase'] = array(
        'frontend' => 't3lib_cache_frontend_VariableFrontend',
        'backend' => 't3lib_cache_backend_DbBackend',
        'options' => array(
            'cacheTable' => 'tx_ptextbase_cache_state',
            'tagsTable'  => 'tx_ptextbase_cache_state_tags',
        )
    );
}
*/

/**
 * Register LifeCycle Manager
 */
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['hook_eofe'][] = 'EXT:pt_extbase/Classes/Lifecycle/HookManager.php:tx_PtExtbase_Lifecycle_HookManager->updateEnd';

/**
 * Include the eId dispatcher in Frontend environment
 * TODO Mind, that there is no access controll ATM!!!!
 */
$TYPO3_CONF_VARS['FE']['eID_include']['ptxAjax'] = ExtensionManagementUtility::extPath('pt_extbase').'Classes/Utility/eIDDispatcher.php';

/**
 * Include the ajax dispatcher in Backend environment
 * TODO Mind, that there is no access controll ATM!!!
 */
$TYPO3_CONF_VARS['BE']['AJAX']['ptxAjax'] = ExtensionManagementUtility::extPath('pt_extbase').'Classes/Utility/AjaxDispatcher.php:Tx_PtExtbase_Utility_AjaxDispatcher->initAndDispatch';

// Scheduler Tasks
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['Tx_PtExtbase_Scheduler_SqlRunner_SqlRunnerTask'] = array(
    'extension' => $_EXTKEY,
    'title' => 'SQL Runner',
    'description' => 'Runs an SQL file.',
    'additionalFields' => 'Tx_PtExtbase_Scheduler_SqlRunner_SqlRunnerTaskAdditionalFields'
);

/*
 * Test Scheduler Task
 */
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['PunktDe\PtExtbase\Tests\Functional\Scheduler\TestTask'] = array(
    'extension' => $_EXTKEY,
    'title' => 'Pt_Extbase Test Abstract Scheduler Task',
    'description' => 'This Task is for Testing, do not run this task in Production Environment',
);


/**
 * Extension: pt_extlist
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/pt_extlist/ext_localconf.php
 */

$_EXTKEY = 'pt_extlist';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

/**
 * Configure the Plugin to call the
 * right combination of Controller and Action according to
 * the user input (default settings, FlexForm, URL etc.)
 * 
 * By default, first Action of first Controller is called
 * if no other settings are given.
 */

$controllerActions = array(                                                            // An array holding the controller-action-combinations that are accessible 
    'List' => 'list,sort', // The first controller and its first action will be the default
    'Export'=>'showLink,download',
    'Filterbox' => 'show,submit,reset,resetFilter',
    'Pager' => 'show',
    'Bookmark' => 'show,save,delete,restore',
    'BreadCrumbs' => 'index,resetFilter',
    'ColumnSelector' => 'show',
    'AjaxFilter' => 'getFilterElement'
);



\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $_EXTKEY,                                                                        // The extension name (in UpperCamelCase) or the extension key (in lower_underscore)
    'Pi1',                                                                            // A unique name of the plugin in UpperCamelCase
    $controllerActions,
    $controllerActions
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $_EXTKEY,                                                                        // The extension name (in UpperCamelCase) or the extension key (in lower_underscore)
    'Cached',                                                                        // A unique name of the plugin in UpperCamelCase
    $controllerActions,
    array()
);


if (TYPO3_MODE == 'BE') {
    // Hooks
    $TYPO3_CONF_VARS['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['list_type_Info']['ptextlist_pi1']['pt_extlist'] = 'EXT:pt_extlist/Classes/Hooks/CMSLayoutHook.php:user_Tx_PtExtlist_Hooks_CMSLayoutHook->getExtensionSummary';
}

require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('pt_extlist').'Classes/Utility/FlexformDataProvider.php';


/**
 * Register LifeCycle Manager
 */
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['hook_eofe'][] = 'EXT:pt_extbase/Classes/Lifecycle/HookManager.php:tx_PtExtbase_Lifecycle_HookManager->updateEnd';


/**
 * Extension: yag
 * File: C:/wamp64/www/BachelorThesis/wege/typo3conf/ext/yag/ext_localconf.php
 */

$_EXTKEY = 'yag';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


/***************************************************************
*  Copyright notice
*
*  (c) 2010-2011 Michael Knoll <mimi@kaktusteam.de>, Daniel Lienert <typo3@lienert.cc>
*            
*           
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
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
 * Configuration file for YAG gallery
 *
 * @author Daniel Lienert <typo3@lienert.cc>
 * @author Michael Knoll <mimi@kaktusteam.de>
 */

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}


/*
 * Main plugin
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $_EXTKEY,
    'Pi1',
    array(
          'Album' => 'show,showSingle,list,                      			new,delete,edit,addItems,create,update',
          'Gallery' => 'list, showSingle, index,                 			new,create,edit,update,delete',
          'Item' => 'index, show, showSingle, showRandomSingle, download,  	delete',
          'ItemList' => 'list,show,submitFilter,resetFilter,uncachedList,downloadAsZip',
          'FileUpload' => 'upload',
          'Error' => 'index',
    ),
    array(
        'Gallery' => 'new,create,edit,update,delete',
        'Album' => 'new,delete,edit,addItems,create,update',
        'Item' => 'delete, download',
        'ItemList' => 'unCachedList,downloadAsZip',
        'FileUpload' => 'upload',
    )
);



if (TYPO3_MODE == 'BE') {
    $yagExtConfig = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['yag']);

    // Hooks
    $TYPO3_CONF_VARS['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['list_type_Info']['yag_pi1']['yag'] = 'EXT:yag/Classes/Hooks/CMSLayoutHook.php:user_Tx_Yag_Hooks_CMSLayoutHook->getExtensionSummary';

    // Clear resFileCache with clearCacheCommand
    if ((int) $yagExtConfig['clearResFileCacheWithCacheClearCommand'] === 1) {
        $TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearAllCache_additionalTables']['tx_yag_domain_model_resolutionfilecache'] = 'tx_yag_domain_model_resolutionfilecache';
    }

    // Flexform general
    require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('yag').'Classes/Utility/Flexform/Div.php';


    // Flexform typoScript data provider
    require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('yag').'Classes/Utility/Flexform/TyposcriptDataProvider.php';


    // Flexform record selector
    require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('yag').'Classes/Utility/Flexform/RecordSelector.php';

    $yagGalleryRecordSelectorClass = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('yag') . 'Classes/Utility/Flexform/RecordSelector.php:user_Tx_Yag_Utility_Flexform_RecordSelector';


    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerAjaxHandler(
        'txyagM1::getGalleryList', $yagGalleryRecordSelectorClass . '->getGallerySelectList', false
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerAjaxHandler(
        'txyagM1::getAlbumList', $yagGalleryRecordSelectorClass . '->getAlbumSelectList', false
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerAjaxHandler(
        'txyagM1::getImageList', $yagGalleryRecordSelectorClass . '->getImageSelectList', false
    );


    /*
     * Scheduler Tasks
     */

    // Importer
/*	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['Tx_Yag_Scheduler_Importer_DirectoryImporterTask'] = array(
        'extension' => $_EXTKEY,
        'title' => 'YAG Importer',
        'description' => 'Imports images from a directory structure',
        'additionalFields' => 'Tx_Yag_Scheduler_Importer_DirectoryImporterTaskAdditionalFields'
    );
*/
    // Cache Warming
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['YAG\\Yag\\Scheduler\\Cache\\CacheWarmingTask'] = array(
        'extension' => $_EXTKEY,
        'title' => 'YAG Cache Warming',
        'description' => 'Warm up the YAG Image Cache',
        'additionalFields' => 'YAG\\Yag\\Scheduler\\Cache\\CacheWarmingTaskAdditionalFieldProvider'
    );
}


/*
$TYPO3_CONF_VARS['SYS']['fal']['registeredDrivers']['Yag'] = array(
        'class' => 'TYPO3\\CMS\\Yag\\Fal\\Driver\\YagDriver',
        'label' => 'Galerie',
        'flexFormDS' => 'EXT:yag/Configuration/FlexForms/YagDriverFlexForm.xml'
);
*/


#