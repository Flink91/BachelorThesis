<?php
class FluidCache_Mask_WizardContent_partial_RenderFieldContent_fbf994e78c6be0524a9d9b3f54e63dfbefa29083 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'inlineParent', $renderingContext));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments4 = array();
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments7 = array();
$arguments7['partial'] = 'Forms/Form';
// Rendering Array
$array8 = array();
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments9 = array();
$arguments9['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments9['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments9['type'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'inlineParent', $renderingContext);
$renderChildrenClosure10 = function() {return NULL;};
$viewHelper11 = $self->getViewHelper('$viewHelper11', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper11->setArguments($arguments9);
$viewHelper11->setRenderingContext($renderingContext);
$viewHelper11->setRenderChildrenClosure($renderChildrenClosure10);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$array8['form'] = $viewHelper11->initializeArgumentsAndRender();
$array8['storage'] = $currentVariableContainer->getOrNull('storage');
$array8['field'] = $currentVariableContainer->getOrNull('field');
$array8['key'] = $currentVariableContainer->getOrNull('key');
$array8['editMode'] = 1;
$array8['type'] = $currentVariableContainer->getOrNull('type');
$arguments7['arguments'] = $array8;
$arguments7['section'] = NULL;
$arguments7['optional'] = false;
$renderChildrenClosure12 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments7, $renderChildrenClosure12, $renderingContext);

$output6 .= '
	';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments13 = array();
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output15 = '';

$output15 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments16 = array();
$arguments16['partial'] = 'Forms/Form';
// Rendering Array
$array17 = array();
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments18 = array();
$arguments18['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments18['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments18['type'] = $currentVariableContainer->getOrNull('type');
$renderChildrenClosure19 = function() {return NULL;};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper20->setArguments($arguments18);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$array17['form'] = $viewHelper20->initializeArgumentsAndRender();
$array17['storage'] = $currentVariableContainer->getOrNull('storage');
$array17['field'] = $currentVariableContainer->getOrNull('field');
$array17['key'] = $currentVariableContainer->getOrNull('key');
$array17['editMode'] = 1;
$array17['type'] = $currentVariableContainer->getOrNull('type');
$arguments16['arguments'] = $array17;
$arguments16['section'] = NULL;
$arguments16['optional'] = false;
$renderChildrenClosure21 = function() {return NULL;};

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure21, $renderingContext);

$output15 .= '
	';
return $output15;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output3 .= '
';
return $output3;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments23 = array();
$arguments23['partial'] = 'Forms/Form';
// Rendering Array
$array24 = array();
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments25 = array();
$arguments25['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments25['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments25['type'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'inlineParent', $renderingContext);
$renderChildrenClosure26 = function() {return NULL;};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper27->setArguments($arguments25);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$array24['form'] = $viewHelper27->initializeArgumentsAndRender();
$array24['storage'] = $currentVariableContainer->getOrNull('storage');
$array24['field'] = $currentVariableContainer->getOrNull('field');
$array24['key'] = $currentVariableContainer->getOrNull('key');
$array24['editMode'] = 1;
$array24['type'] = $currentVariableContainer->getOrNull('type');
$arguments23['arguments'] = $array24;
$arguments23['section'] = NULL;
$arguments23['optional'] = false;
$renderChildrenClosure28 = function() {return NULL;};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments23, $renderChildrenClosure28, $renderingContext);

$output22 .= '
	';
return $output22;
};
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output29 = '';

$output29 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments30 = array();
$arguments30['partial'] = 'Forms/Form';
// Rendering Array
$array31 = array();
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments32 = array();
$arguments32['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments32['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments32['type'] = $currentVariableContainer->getOrNull('type');
$renderChildrenClosure33 = function() {return NULL;};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper34->setArguments($arguments32);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$array31['form'] = $viewHelper34->initializeArgumentsAndRender();
$array31['storage'] = $currentVariableContainer->getOrNull('storage');
$array31['field'] = $currentVariableContainer->getOrNull('field');
$array31['key'] = $currentVariableContainer->getOrNull('key');
$array31['editMode'] = 1;
$array31['type'] = $currentVariableContainer->getOrNull('type');
$arguments30['arguments'] = $array31;
$arguments30['section'] = NULL;
$arguments30['optional'] = false;
$renderChildrenClosure35 = function() {return NULL;};

$output29 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments30, $renderChildrenClosure35, $renderingContext);

$output29 .= '
	';
return $output29;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments36 = array();
// Rendering Boolean node
$arguments36['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'inlineFields', $renderingContext));
$arguments36['then'] = NULL;
$arguments36['else'] = NULL;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments39 = array();
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output41 = '';

$output41 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments42 = array();
$arguments42['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'inlineFields', $renderingContext);
$arguments42['as'] = 'inlineField';
$arguments42['key'] = 'inlineKey';
$arguments42['reverse'] = false;
$arguments42['iteration'] = NULL;
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output44 = '';

$output44 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments45 = array();
$arguments45['partial'] = 'RenderFieldContent';
// Rendering Array
$array46 = array();
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments47 = array();
$arguments47['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments47['fieldKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('inlineField'), 'maskKey', $renderingContext);
$arguments47['type'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('inlineField'), 'inlineParent', $renderingContext);
$renderChildrenClosure48 = function() {return NULL;};
$viewHelper49 = $self->getViewHelper('$viewHelper49', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper49->setArguments($arguments47);
$viewHelper49->setRenderingContext($renderingContext);
$viewHelper49->setRenderChildrenClosure($renderChildrenClosure48);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$array46['form'] = $viewHelper49->initializeArgumentsAndRender();
$array46['storage'] = $currentVariableContainer->getOrNull('storage');
$array46['field'] = $currentVariableContainer->getOrNull('inlineField');
$array46['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('inlineField'), 'maskKey', $renderingContext);
$array46['editMode'] = 1;
$array46['type'] = $currentVariableContainer->getOrNull('type');
$arguments45['arguments'] = $array46;
$arguments45['section'] = NULL;
$arguments45['optional'] = false;
$renderChildrenClosure50 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments45, $renderChildrenClosure50, $renderingContext);

$output44 .= '
		';
return $output44;
};

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
	';
return $output41;
};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments51 = array();
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
	';
};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output38 .= '
';
return $output38;
};
$arguments36['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output53 = '';

$output53 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments54 = array();
$arguments54['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'inlineFields', $renderingContext);
$arguments54['as'] = 'inlineField';
$arguments54['key'] = 'inlineKey';
$arguments54['reverse'] = false;
$arguments54['iteration'] = NULL;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output56 = '';

$output56 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments57 = array();
$arguments57['partial'] = 'RenderFieldContent';
// Rendering Array
$array58 = array();
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments59 = array();
$arguments59['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments59['fieldKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('inlineField'), 'maskKey', $renderingContext);
$arguments59['type'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('inlineField'), 'inlineParent', $renderingContext);
$renderChildrenClosure60 = function() {return NULL;};
$viewHelper61 = $self->getViewHelper('$viewHelper61', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper61->setArguments($arguments59);
$viewHelper61->setRenderingContext($renderingContext);
$viewHelper61->setRenderChildrenClosure($renderChildrenClosure60);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$array58['form'] = $viewHelper61->initializeArgumentsAndRender();
$array58['storage'] = $currentVariableContainer->getOrNull('storage');
$array58['field'] = $currentVariableContainer->getOrNull('inlineField');
$array58['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('inlineField'), 'maskKey', $renderingContext);
$array58['editMode'] = 1;
$array58['type'] = $currentVariableContainer->getOrNull('type');
$arguments57['arguments'] = $array58;
$arguments57['section'] = NULL;
$arguments57['optional'] = false;
$renderChildrenClosure62 = function() {return NULL;};

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments57, $renderChildrenClosure62, $renderingContext);

$output56 .= '
		';
return $output56;
};

$output53 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
	';
return $output53;
};
$arguments36['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
	';
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);


return $output0;
}


}
#1462875135    17311     