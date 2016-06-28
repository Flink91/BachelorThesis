<?php
class FluidCache_Standalone_template_file_ListTasks_fe1e8c7d9a0cf2660b2c60e0525496b53767512f extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments1 = array();
$arguments1['value'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('table');
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
<button class="btn btn-default" name="go" id="scheduler_executeselected">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments3 = array();
$arguments3['key'] = 'label.executeSelected';
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['htmlEscape'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$renderChildrenClosure4 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
</button>

<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments5 = array();
$arguments5['key'] = 'label.serverTime';
$arguments5['id'] = NULL;
$arguments5['default'] = NULL;
$arguments5['htmlEscape'] = NULL;
$arguments5['arguments'] = NULL;
$arguments5['extensionName'] = NULL;
$renderChildrenClosure6 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '</h3>
<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments7 = array();
$arguments7['key'] = 'msg.serverTimeHelp';
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '</p>
<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments9 = array();
$arguments9['key'] = 'msg.serverTime';
// Rendering Array
$array10 = array();
$array10['0'] = $currentVariableContainer->getOrNull('now');
$arguments9['arguments'] = $array10;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['htmlEscape'] = NULL;
$arguments9['extensionName'] = NULL;
$renderChildrenClosure11 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure11, $renderingContext);

$output0 .= '</p>';


return $output0;
}


}
#1467130103    3520      