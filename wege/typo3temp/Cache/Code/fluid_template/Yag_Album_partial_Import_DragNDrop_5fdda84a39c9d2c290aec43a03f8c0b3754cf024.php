<?php
class FluidCache_Yag_Album_partial_Import_DragNDrop_5fdda84a39c9d2c290aec43a03f8c0b3754cf024 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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


<div id="yag-dropbox">
    <span class="yag-dropbox-message">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'tx_yag_controller_album_addItems.dropImagesToUpload';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '</span>
</div>

';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper
$arguments3 = array();
$arguments3['templatePath'] = 'EXT:yag/Resources/Private/JSTemplates/DragNDrop.js';
// Rendering Array
$array4 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments5 = array();
$arguments5['controller'] = 'FileUpload';
$arguments5['action'] = 'upload';
// Rendering Array
$array6 = array();
$array6['album'] = $currentVariableContainer->getOrNull('album');
$arguments5['arguments'] = $array6;
// Rendering Boolean node
$arguments5['absolute'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments5['extensionName'] = NULL;
$arguments5['pluginName'] = NULL;
$arguments5['pageUid'] = NULL;
$arguments5['pageType'] = 0;
$arguments5['noCache'] = false;
$arguments5['noCacheHash'] = false;
$arguments5['section'] = '';
$arguments5['format'] = '';
$arguments5['linkAccessRestrictedPages'] = false;
$arguments5['additionalParams'] = array (
);
$arguments5['addQueryString'] = false;
$arguments5['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments5['addQueryStringMethod'] = NULL;
$renderChildrenClosure7 = function() {return NULL;};
$viewHelper8 = $self->getViewHelper('$viewHelper8', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper8->setArguments($arguments5);
$viewHelper8->setRenderingContext($renderingContext);
$viewHelper8->setRenderChildrenClosure($renderChildrenClosure7);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$array4['uploadUrl'] = $viewHelper8->initializeArgumentsAndRender();
$array4['maxFiles'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.upload.dragNDrop.file_upload_limit', $renderingContext);
$array4['maxFileSize'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.upload.dragNDrop.file_size_limit', $renderingContext);
$arguments3['arguments'] = $array4;
$arguments3['position'] = 'current';
$arguments3['type'] = 'text/javascript';
$renderChildrenClosure9 = function() {return NULL;};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper');
$viewHelper10->setArguments($arguments3);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper

$output0 .= $viewHelper10->initializeArgumentsAndRender();


return $output0;
}


}
#1461666513    4091      