<?php
class FluidCache_Standalone_template_file_HeaderOnly_95e2a54785273ca0599da7abea4ee5ada5caf395 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments1 = array();
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return ' Only used for lib.stdheader purposes. ';
};

$output0 .= '';

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments3 = array();
$arguments3['partial'] = 'Header';
$arguments3['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments3['section'] = NULL;
$arguments3['optional'] = false;
$renderChildrenClosure4 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
';


return $output0;
}


}
#1465042880    1628      