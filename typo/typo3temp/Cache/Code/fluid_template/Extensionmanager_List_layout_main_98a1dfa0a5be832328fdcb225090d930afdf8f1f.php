<?php
class FluidCache_Extensionmanager_List_layout_main_98a1dfa0a5be832328fdcb225090d930afdf8f1f extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['loadJQuery'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments1['jQueryNamespace'] = 'none';
// Rendering Array
$array2 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments3 = array();
$arguments3['path'] = 'Contrib/LoadMask/jquery.loadmask.css';
$arguments3['extensionName'] = NULL;
$arguments3['absolute'] = false;
$renderChildrenClosure4 = function() {return NULL;};
$array2['0'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);
$arguments1['includeCssFiles'] = $array2;
// Rendering Array
$array5 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments6 = array();
$arguments6['path'] = 'JavaScript/jquery-validate-1.11.1.min.js';
$arguments6['extensionName'] = NULL;
$arguments6['absolute'] = false;
$renderChildrenClosure7 = function() {return NULL;};
$array5['0'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments8 = array();
$arguments8['path'] = 'Contrib/LoadMask/jquery.loadmask.js';
$arguments8['extensionName'] = NULL;
$arguments8['absolute'] = false;
$renderChildrenClosure9 = function() {return NULL;};
$array5['1'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);
$arguments1['includeJsFiles'] = $array5;
// Rendering Array
$array10 = array();
$array10['0'] = 'TYPO3/CMS/Extensionmanager/Main';
$arguments1['includeRequireJsModules'] = $array10;
$arguments1['pageTitle'] = '';
$arguments1['loadExtJs'] = false;
$arguments1['loadExtJsTheme'] = true;
$arguments1['enableExtJsDebug'] = false;
$arguments1['addJsInlineLabels'] = NULL;
$renderChildrenClosure11 = function() {return NULL;};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper');
$viewHelper12->setArguments($arguments1);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper

$output0 .= $viewHelper12->initializeArgumentsAndRender();

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\Be\TriggerViewHelper
$arguments13 = array();
$arguments13['triggers'] = $currentVariableContainer->getOrNull('triggers');
$renderChildrenClosure14 = function() {return NULL;};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\Be\TriggerViewHelper');
$viewHelper15->setArguments($arguments13);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\Be\TriggerViewHelper

$output0 .= $viewHelper15->initializeArgumentsAndRender();

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments16 = array();
$arguments16['section'] = 'headline';
$arguments16['partial'] = NULL;
$arguments16['arguments'] = array (
);
$arguments16['optional'] = false;
$renderChildrenClosure17 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments18 = array();
$arguments18['section'] = 'content';
$arguments18['partial'] = NULL;
$arguments18['arguments'] = array (
);
$arguments18['optional'] = false;
$renderChildrenClosure19 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);


return $output0;
}


}
#1458752140    4923      