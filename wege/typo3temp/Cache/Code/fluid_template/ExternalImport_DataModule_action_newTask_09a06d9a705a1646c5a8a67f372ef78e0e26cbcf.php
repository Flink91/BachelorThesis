<?php
class FluidCache_ExternalImport_DataModule_action_newTask_09a06d9a705a1646c5a8a67f372ef78e0e26cbcf extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['id'] = 'add_sync';
$arguments1['key'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '</h1>
	<p>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments3 = array();
// Rendering Boolean node
$arguments3['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('table'), 'all');
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output5 = '';

$output5 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments6 = array();
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output8 = '';

$output8 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments9 = array();
$arguments9['id'] = 'set_full_sync_info';
$arguments9['key'] = NULL;
$arguments9['default'] = NULL;
$arguments9['htmlEscape'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$renderChildrenClosure10 = function() {return NULL;};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
			';
return $output8;
};

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments11 = array();
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output13 = '';

$output13 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments14 = array();
$arguments14['id'] = 'set_sync_info';
// Rendering Array
$array15 = array();
// Rendering ViewHelper Cobweb\ExternalImport\ViewHelpers\Be\TableTitleViewHelper
$arguments16 = array();
$arguments16['table'] = $currentVariableContainer->getOrNull('table');
$renderChildrenClosure17 = function() {return NULL;};
$array15['0'] = Cobweb\ExternalImport\ViewHelpers\Be\TableTitleViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);
$array15['1'] = $currentVariableContainer->getOrNull('table');
$array15['2'] = $currentVariableContainer->getOrNull('index');
$arguments14['arguments'] = $array15;
$arguments14['key'] = NULL;
$arguments14['default'] = NULL;
$arguments14['htmlEscape'] = NULL;
$arguments14['extensionName'] = NULL;
$renderChildrenClosure18 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure18, $renderingContext);

$output13 .= '
			';
return $output13;
};

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output5 .= '
		';
return $output5;
};
$arguments3['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output19 = '';

$output19 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments20 = array();
$arguments20['id'] = 'set_full_sync_info';
$arguments20['key'] = NULL;
$arguments20['default'] = NULL;
$arguments20['htmlEscape'] = NULL;
$arguments20['arguments'] = NULL;
$arguments20['extensionName'] = NULL;
$renderChildrenClosure21 = function() {return NULL;};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
			';
return $output19;
};
$arguments3['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments23 = array();
$arguments23['id'] = 'set_sync_info';
// Rendering Array
$array24 = array();
// Rendering ViewHelper Cobweb\ExternalImport\ViewHelpers\Be\TableTitleViewHelper
$arguments25 = array();
$arguments25['table'] = $currentVariableContainer->getOrNull('table');
$renderChildrenClosure26 = function() {return NULL;};
$array24['0'] = Cobweb\ExternalImport\ViewHelpers\Be\TableTitleViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);
$array24['1'] = $currentVariableContainer->getOrNull('table');
$array24['2'] = $currentVariableContainer->getOrNull('index');
$arguments23['arguments'] = $array24;
$arguments23['key'] = NULL;
$arguments23['default'] = NULL;
$arguments23['htmlEscape'] = NULL;
$arguments23['extensionName'] = NULL;
$renderChildrenClosure27 = function() {return NULL;};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure27, $renderingContext);

$output22 .= '
			';
return $output22;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
	</p>

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments28 = array();
$arguments28['name'] = 'taskForm';
$arguments28['action'] = 'createTask';
$arguments28['method'] = 'post';
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['arguments'] = array (
);
$arguments28['controller'] = NULL;
$arguments28['extensionName'] = NULL;
$arguments28['pluginName'] = NULL;
$arguments28['pageUid'] = NULL;
$arguments28['object'] = NULL;
$arguments28['pageType'] = 0;
$arguments28['noCache'] = false;
$arguments28['noCacheHash'] = false;
$arguments28['section'] = '';
$arguments28['format'] = '';
$arguments28['additionalParams'] = array (
);
$arguments28['absolute'] = false;
$arguments28['addQueryString'] = false;
$arguments28['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments28['fieldNamePrefix'] = NULL;
$arguments28['actionUri'] = NULL;
$arguments28['objectName'] = NULL;
$arguments28['hiddenFieldClassName'] = NULL;
$arguments28['enctype'] = NULL;
$arguments28['onreset'] = NULL;
$arguments28['onsubmit'] = NULL;
$arguments28['class'] = NULL;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output30 = '';

$output30 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments31 = array();
$arguments31['partial'] = 'DataModule/TaskFields';
$arguments31['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments31['section'] = NULL;
$arguments31['optional'] = false;
$renderChildrenClosure32 = function() {return NULL;};

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
	';
return $output30;
};
$viewHelper33 = $self->getViewHelper('$viewHelper33', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper33->setArguments($arguments28);
$viewHelper33->setRenderingContext($renderingContext);
$viewHelper33->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper33->initializeArgumentsAndRender();

$output0 .= '
';


return $output0;
}


}
#1466717543    8984      