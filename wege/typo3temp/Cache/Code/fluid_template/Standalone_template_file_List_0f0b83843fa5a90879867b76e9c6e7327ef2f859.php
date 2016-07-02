<?php
class FluidCache_Standalone_template_file_List_0f0b83843fa5a90879867b76e9c6e7327ef2f859 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'HeaderContentFooter';
}
public function hasLayout() {
return TRUE;
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments1 = array();
$output2 = '';

$output2 .= 'tt_content.list.20.';

$output2 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'list_type', $renderingContext);
$arguments1['typoscriptObjectPath'] = $output2;
$arguments1['data'] = $currentVariableContainer->getOrNull('data');
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$renderChildrenClosure3 = function() {return NULL;};
$viewHelper4 = $self->getViewHelper('$viewHelper4', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper4->setArguments($arguments1);
$viewHelper4->setRenderingContext($renderingContext);
$viewHelper4->setRenderChildrenClosure($renderChildrenClosure3);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper4->initializeArgumentsAndRender();

$output0 .= '
';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output5 = '';

$output5 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments6 = array();
$arguments6['name'] = 'HeaderContentFooter';
$renderChildrenClosure7 = function() {return NULL;};
$viewHelper8 = $self->getViewHelper('$viewHelper8', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper8->setArguments($arguments6);
$viewHelper8->setRenderingContext($renderingContext);
$viewHelper8->setRenderChildrenClosure($renderChildrenClosure7);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output5 .= $viewHelper8->initializeArgumentsAndRender();

$output5 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments9 = array();
$arguments9['name'] = 'content';
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments12 = array();
$output13 = '';

$output13 .= 'tt_content.list.20.';

$output13 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'list_type', $renderingContext);
$arguments12['typoscriptObjectPath'] = $output13;
$arguments12['data'] = $currentVariableContainer->getOrNull('data');
$arguments12['currentValueKey'] = NULL;
$arguments12['table'] = '';
$renderChildrenClosure14 = function() {return NULL;};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper15->setArguments($arguments12);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output11 .= $viewHelper15->initializeArgumentsAndRender();

$output11 .= '
';
return $output11;
};

$output5 .= '';

$output5 .= '
';


return $output5;
}


}
#1467305632    4110      