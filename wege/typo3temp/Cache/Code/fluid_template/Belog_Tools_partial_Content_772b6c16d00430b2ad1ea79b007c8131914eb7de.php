<?php
class FluidCache_Belog_Tools_partial_Content_772b6c16d00430b2ad1ea79b007c8131914eb7de extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<h1>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'adminLog';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
</h1>

<div>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments3 = array();
$arguments3['partial'] = 'Content/Filter';
$arguments3['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments3['section'] = NULL;
$arguments3['optional'] = false;
$renderChildrenClosure4 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
</div>

<div class="divider"></div>

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments5 = array();
$arguments5['partial'] = 'Content/LogEntries';
$arguments5['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments5['section'] = NULL;
$arguments5['optional'] = false;
$renderChildrenClosure6 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);


return $output0;
}


}
#1467129043    2306      