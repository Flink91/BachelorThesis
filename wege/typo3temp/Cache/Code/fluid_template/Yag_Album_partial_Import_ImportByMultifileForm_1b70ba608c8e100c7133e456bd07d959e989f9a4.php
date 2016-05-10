<?php
class FluidCache_Yag_Album_partial_Import_ImportByMultifileForm_1b70ba608c8e100c7133e456bd07d959e989f9a4 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper
$arguments1 = array();
$arguments1['show'] = false;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
<!--  
Partial for rendering import form for multifile importer

Here is a list of objects / variables that can be accessed in this template:

Tx_Yag_Domain_Model_Album album               The album object

@package YAG
@author Daniel Lienert <lienert@punkt.de>
-->
';
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'Tx_PtExtlist_ViewHelpers_CommentViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '

<div id="content">

    <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments4 = array();
$arguments4['key'] = 'tx_yag_swfupload.header';
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['htmlEscape'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '</h2>

    <form>
        <div id="queue"></div>
        <input id="file_upload" name="file_upload" type="file" multiple="true">
    </form>

    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper
$arguments6 = array();
$arguments6['templatePath'] = 'EXT:yag/Resources/Private/JSTemplates/SWFUpload.js';
$arguments6['position'] = 'current';
// Rendering Array
$array7 = array();
$array7['albumUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$array7['file_size_limit'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'upload.multiFile.file_size_limit', $renderingContext);
$array7['file_upload_limit'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'upload.multiFile.file_upload_limit', $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments8 = array();
$arguments8['controller'] = 'FileUpload';
$arguments8['action'] = 'upload';
// Rendering Boolean node
$arguments8['absolute'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments8['arguments'] = array (
);
$arguments8['extensionName'] = NULL;
$arguments8['pluginName'] = NULL;
$arguments8['pageUid'] = NULL;
$arguments8['pageType'] = 0;
$arguments8['noCache'] = false;
$arguments8['noCacheHash'] = false;
$arguments8['section'] = '';
$arguments8['format'] = '';
$arguments8['linkAccessRestrictedPages'] = false;
$arguments8['additionalParams'] = array (
);
$arguments8['addQueryString'] = false;
$arguments8['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments8['addQueryStringMethod'] = NULL;
$renderChildrenClosure9 = function() {return NULL;};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper10->setArguments($arguments8);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$array7['uploadURL'] = $viewHelper10->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments11 = array();
$arguments11['path'] = 'Uploadify/uploadify.swf';
$arguments11['extensionName'] = NULL;
$arguments11['absolute'] = false;
$renderChildrenClosure12 = function() {return NULL;};
$array7['swfURL'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);
$arguments6['arguments'] = $array7;
$arguments6['type'] = 'text/javascript';
$renderChildrenClosure13 = function() {return NULL;};
$viewHelper14 = $self->getViewHelper('$viewHelper14', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper');
$viewHelper14->setArguments($arguments6);
$viewHelper14->setRenderingContext($renderingContext);
$viewHelper14->setRenderChildrenClosure($renderChildrenClosure13);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper

$output0 .= $viewHelper14->initializeArgumentsAndRender();

$output0 .= '

</div>
';


return $output0;
}


}
#1461666513    5665      