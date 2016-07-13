<?php
class FluidCache_Extensionmanager_Download_action_updateCommentForUpdatableVersions_c1d789f50b784d5cc29e9999117a355aaba226c3 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\Format\JsonEncodeViewHelper
$arguments1 = array();
// Rendering Array
$array2 = array();
$array2['updateComments'] = $currentVariableContainer->getOrNull('updateComments');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments3 = array();
$arguments3['action'] = 'updateExtension';
$arguments3['controller'] = 'Download';
// Rendering Array
$array4 = array();
$array4['extension'] = $currentVariableContainer->getOrNull('extensionKey');
$array4['version'] = $currentVariableContainer->getOrNull('version');
$array4['format'] = 'json';
$arguments3['arguments'] = $array4;
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
$renderChildrenClosure5 = function() {return NULL;};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper6->setArguments($arguments3);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$array2['url'] = $viewHelper6->initializeArgumentsAndRender();
$arguments1['additionalAttributes'] = $array2;
$renderChildrenClosure7 = function() {return NULL;};

$output0 .= TYPO3\CMS\Extensionmanager\ViewHelpers\Format\JsonEncodeViewHelper::renderStatic($arguments1, $renderChildrenClosure7, $renderingContext);

$output0 .= '
';


return $output0;
}


}
#1468426786    2830      