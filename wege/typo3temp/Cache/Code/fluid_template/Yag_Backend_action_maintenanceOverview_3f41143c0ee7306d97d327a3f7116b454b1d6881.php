<?php
class FluidCache_Yag_Backend_action_maintenanceOverview_3f41143c0ee7306d97d327a3f7116b454b1d6881 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section main
 */
public function section_b28b7af69320201d1cf206ebf28373980add1451(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '

	';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper
$arguments1 = array();
$arguments1['templatePath'] = 'EXT:yag/Resources/Private/JSTemplates/Maintenance.js';
// Rendering Array
$array2 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments3 = array();
$arguments3['controller'] = 'ResolutionFileCache';
$arguments3['action'] = 'buildResolutionByConfiguration';
$arguments3['arguments'] = array (
);
$arguments3['extensionName'] = NULL;
$arguments3['pluginName'] = NULL;
$arguments3['pageUid'] = NULL;
$arguments3['pageType'] = 0;
$arguments3['noCache'] = false;
$arguments3['noCacheHash'] = false;
$arguments3['section'] = '';
$arguments3['format'] = '';
$arguments3['linkAccessRestrictedPages'] = false;
$arguments3['additionalParams'] = array (
);
$arguments3['absolute'] = false;
$arguments3['addQueryString'] = false;
$arguments3['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments3['addQueryStringMethod'] = NULL;
$renderChildrenClosure4 = function() {return NULL;};
$viewHelper5 = $self->getViewHelper('$viewHelper5', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper5->setArguments($arguments3);
$viewHelper5->setRenderingContext($renderingContext);
$viewHelper5->setRenderChildrenClosure($renderChildrenClosure4);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$array2['rfcControllerURL'] = $viewHelper5->initializeArgumentsAndRender();
$arguments1['arguments'] = $array2;
$arguments1['position'] = 'current';
$arguments1['type'] = 'text/javascript';
$renderChildrenClosure6 = function() {return NULL;};
$viewHelper7 = $self->getViewHelper('$viewHelper7', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper');
$viewHelper7->setArguments($arguments1);
$viewHelper7->setRenderingContext($renderingContext);
$viewHelper7->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper

$output0 .= $viewHelper7->initializeArgumentsAndRender();

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments8 = array();
$arguments8['class'] = 'tx-extbase-flash-message';
$arguments8['renderMode'] = 'div';
$arguments8['additionalAttributes'] = NULL;
$arguments8['data'] = NULL;
$arguments8['as'] = NULL;
$arguments8['dir'] = NULL;
$arguments8['id'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$arguments8['queueIdentifier'] = NULL;
$renderChildrenClosure9 = function() {return NULL;};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper10->setArguments($arguments8);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output0 .= $viewHelper10->initializeArgumentsAndRender();

$output0 .= '


	<script>
		jQuery(function () {
			jQuery("#tabs").tabs();
		});
	</script>

	<h1>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments11 = array();
$arguments11['key'] = 'tx_yag_controller_backend_MaintenanceOverview.header';
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$renderChildrenClosure12 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '
	</h1>

	<div id="tabs">
		<ul>
			<li><a href="#tabs-1">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments13 = array();
$arguments13['key'] = 'tx_yag_controller_backend_MaintenanceOverview.statistics';
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$renderChildrenClosure14 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
			</a></li>
			<li><a href="#tabs-2">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments15 = array();
$arguments15['key'] = 'tx_yag_controller_backend_MaintenanceOverview.resolutionFileCacheHeader';
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
			</a></li>
		</ul>
		<div id="tabs-1">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments17 = array();
$arguments17['partial'] = 'Backend/MaintenanceOverview/Statistics';
// Rendering Array
$array18 = array();
$array18['folderStatistics'] = $currentVariableContainer->getOrNull('folderStatistics');
$array18['globalStatistics'] = $currentVariableContainer->getOrNull('globalStatistics');
$array18['resolutionFileCache'] = $currentVariableContainer->getOrNull('resolutionFileCache');
$arguments17['arguments'] = $array18;
$arguments17['section'] = NULL;
$arguments17['optional'] = false;
$renderChildrenClosure19 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments17, $renderChildrenClosure19, $renderingContext);

$output0 .= '
		</div>
		<div id="tabs-2">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments20 = array();
$arguments20['partial'] = 'Backend/MaintenanceOverview/ResolutionFileCache';
// Rendering Array
$array21 = array();
$array21['resolutionFileCache'] = $currentVariableContainer->getOrNull('resolutionFileCache');
$array21['firstItemUid'] = $currentVariableContainer->getOrNull('firstItemUid');
$arguments20['arguments'] = $array21;
$arguments20['section'] = NULL;
$arguments20['optional'] = false;
$renderChildrenClosure22 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure22, $renderingContext);

$output0 .= '
		</div>
	</div>
';


return $output0;
}
/**
 * section beButtonsLeft
 */
public function section_cf0fe0f1a8ee78bebfb9f3c54af26f541cb3674a(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();



return '
';
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output23 = '';

$output23 .= '



';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper
$arguments24 = array();
$arguments24['show'] = false;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
	<!--
	Template for rendering the maintenance overview

	Here is a list of objects / variables that can be accessed in this template:

	resolutionFileCache		Tx_Yag_Domain_FileSystem_ResolutionFileCache

	@package YAG
	@author Michael Knoll <mimi@kaktusteam.de>
	@author Daniel Lienert <typo3@lienert.cc>
	-->
';
};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'Tx_PtExtlist_ViewHelpers_CommentViewHelper');
$viewHelper26->setArguments($arguments24);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper

$output23 .= $viewHelper26->initializeArgumentsAndRender();

$output23 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments27 = array();
$arguments27['name'] = 'Default';
$renderChildrenClosure28 = function() {return NULL;};
$viewHelper29 = $self->getViewHelper('$viewHelper29', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper29->setArguments($arguments27);
$viewHelper29->setRenderingContext($renderingContext);
$viewHelper29->setRenderChildrenClosure($renderChildrenClosure28);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output23 .= $viewHelper29->initializeArgumentsAndRender();

$output23 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments30 = array();
$arguments30['name'] = 'main';
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output32 = '';

$output32 .= '

	';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper
$arguments33 = array();
$arguments33['templatePath'] = 'EXT:yag/Resources/Private/JSTemplates/Maintenance.js';
// Rendering Array
$array34 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments35 = array();
$arguments35['controller'] = 'ResolutionFileCache';
$arguments35['action'] = 'buildResolutionByConfiguration';
$arguments35['arguments'] = array (
);
$arguments35['extensionName'] = NULL;
$arguments35['pluginName'] = NULL;
$arguments35['pageUid'] = NULL;
$arguments35['pageType'] = 0;
$arguments35['noCache'] = false;
$arguments35['noCacheHash'] = false;
$arguments35['section'] = '';
$arguments35['format'] = '';
$arguments35['linkAccessRestrictedPages'] = false;
$arguments35['additionalParams'] = array (
);
$arguments35['absolute'] = false;
$arguments35['addQueryString'] = false;
$arguments35['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments35['addQueryStringMethod'] = NULL;
$renderChildrenClosure36 = function() {return NULL;};
$viewHelper37 = $self->getViewHelper('$viewHelper37', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper37->setArguments($arguments35);
$viewHelper37->setRenderingContext($renderingContext);
$viewHelper37->setRenderChildrenClosure($renderChildrenClosure36);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$array34['rfcControllerURL'] = $viewHelper37->initializeArgumentsAndRender();
$arguments33['arguments'] = $array34;
$arguments33['position'] = 'current';
$arguments33['type'] = 'text/javascript';
$renderChildrenClosure38 = function() {return NULL;};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper');
$viewHelper39->setArguments($arguments33);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure38);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper

$output32 .= $viewHelper39->initializeArgumentsAndRender();

$output32 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments40 = array();
$arguments40['class'] = 'tx-extbase-flash-message';
$arguments40['renderMode'] = 'div';
$arguments40['additionalAttributes'] = NULL;
$arguments40['data'] = NULL;
$arguments40['as'] = NULL;
$arguments40['dir'] = NULL;
$arguments40['id'] = NULL;
$arguments40['lang'] = NULL;
$arguments40['style'] = NULL;
$arguments40['title'] = NULL;
$arguments40['accesskey'] = NULL;
$arguments40['tabindex'] = NULL;
$arguments40['onclick'] = NULL;
$arguments40['queueIdentifier'] = NULL;
$renderChildrenClosure41 = function() {return NULL;};
$viewHelper42 = $self->getViewHelper('$viewHelper42', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper42->setArguments($arguments40);
$viewHelper42->setRenderingContext($renderingContext);
$viewHelper42->setRenderChildrenClosure($renderChildrenClosure41);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output32 .= $viewHelper42->initializeArgumentsAndRender();

$output32 .= '


	<script>
		jQuery(function () {
			jQuery("#tabs").tabs();
		});
	</script>

	<h1>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments43 = array();
$arguments43['key'] = 'tx_yag_controller_backend_MaintenanceOverview.header';
$arguments43['id'] = NULL;
$arguments43['default'] = NULL;
$arguments43['htmlEscape'] = NULL;
$arguments43['arguments'] = NULL;
$arguments43['extensionName'] = NULL;
$renderChildrenClosure44 = function() {return NULL;};

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output32 .= '
	</h1>

	<div id="tabs">
		<ul>
			<li><a href="#tabs-1">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments45 = array();
$arguments45['key'] = 'tx_yag_controller_backend_MaintenanceOverview.statistics';
$arguments45['id'] = NULL;
$arguments45['default'] = NULL;
$arguments45['htmlEscape'] = NULL;
$arguments45['arguments'] = NULL;
$arguments45['extensionName'] = NULL;
$renderChildrenClosure46 = function() {return NULL;};

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output32 .= '
			</a></li>
			<li><a href="#tabs-2">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments47 = array();
$arguments47['key'] = 'tx_yag_controller_backend_MaintenanceOverview.resolutionFileCacheHeader';
$arguments47['id'] = NULL;
$arguments47['default'] = NULL;
$arguments47['htmlEscape'] = NULL;
$arguments47['arguments'] = NULL;
$arguments47['extensionName'] = NULL;
$renderChildrenClosure48 = function() {return NULL;};

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output32 .= '
			</a></li>
		</ul>
		<div id="tabs-1">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments49 = array();
$arguments49['partial'] = 'Backend/MaintenanceOverview/Statistics';
// Rendering Array
$array50 = array();
$array50['folderStatistics'] = $currentVariableContainer->getOrNull('folderStatistics');
$array50['globalStatistics'] = $currentVariableContainer->getOrNull('globalStatistics');
$array50['resolutionFileCache'] = $currentVariableContainer->getOrNull('resolutionFileCache');
$arguments49['arguments'] = $array50;
$arguments49['section'] = NULL;
$arguments49['optional'] = false;
$renderChildrenClosure51 = function() {return NULL;};

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments49, $renderChildrenClosure51, $renderingContext);

$output32 .= '
		</div>
		<div id="tabs-2">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments52 = array();
$arguments52['partial'] = 'Backend/MaintenanceOverview/ResolutionFileCache';
// Rendering Array
$array53 = array();
$array53['resolutionFileCache'] = $currentVariableContainer->getOrNull('resolutionFileCache');
$array53['firstItemUid'] = $currentVariableContainer->getOrNull('firstItemUid');
$arguments52['arguments'] = $array53;
$arguments52['section'] = NULL;
$arguments52['optional'] = false;
$renderChildrenClosure54 = function() {return NULL;};

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments52, $renderChildrenClosure54, $renderingContext);

$output32 .= '
		</div>
	</div>
';
return $output32;
};

$output23 .= '';

$output23 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments55 = array();
$arguments55['name'] = 'beButtonsLeft';
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
';
};

$output23 .= '';

$output23 .= '
';


return $output23;
}


}
#1461666645    17071     