<?php
class FluidCache_Yag_Backend_action_index_e68b40a888db592d316cdcb52170cb3b2ec4807d extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments0 = array();
$arguments0['name'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('PA'), 'itemFormElName', $renderingContext);
$arguments0['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('PA'), 'itemFormElValue', $renderingContext);
$arguments0['id'] = $currentVariableContainer->getOrNull('elementID');
$arguments0['additionalAttributes'] = NULL;
$arguments0['data'] = NULL;
$arguments0['property'] = NULL;
$arguments0['class'] = NULL;
$arguments0['dir'] = NULL;
$arguments0['lang'] = NULL;
$arguments0['style'] = NULL;
$arguments0['title'] = NULL;
$arguments0['accesskey'] = NULL;
$arguments0['tabindex'] = NULL;
$arguments0['onclick'] = NULL;
$renderChildrenClosure1 = function() {return NULL;};
$viewHelper2 = $self->getViewHelper('$viewHelper2', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper2->setArguments($arguments0);
$viewHelper2->setRenderingContext($renderingContext);
$viewHelper2->setRenderChildrenClosure($renderChildrenClosure1);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper


return $viewHelper2->initializeArgumentsAndRender();
}


}
#1465043378    2106      