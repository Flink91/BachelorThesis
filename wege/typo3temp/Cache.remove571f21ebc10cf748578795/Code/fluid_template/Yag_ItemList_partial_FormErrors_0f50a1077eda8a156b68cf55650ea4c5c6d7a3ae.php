<?php
class FluidCache_Yag_ItemList_partial_FormErrors_0f50a1077eda8a156b68cf55650ea4c5c6d7a3ae extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_ErrorMessagesViewHelper
$arguments1 = array();
$arguments1['extension'] = 'yag';
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['file'] = 'errors.xlf';
$renderChildrenClosure2 = function() {return NULL;};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'Tx_PtExtbase_ViewHelpers_ErrorMessagesViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper Tx_PtExtbase_ViewHelpers_ErrorMessagesViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();


return $output0;
}


}
#1461068777    1534      