<?php
class FluidCache_Yag_Backend_action_index_eed7546c13e1d5f97a9ee466f458880d9214a59c extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments0 = array();
$arguments0['partial'] = 'Backend/Flexform/FlexFormGalleryList.html';
// Rendering Array
$array1 = array();
$array1['galleries'] = $currentVariableContainer->getOrNull('galleries');
$arguments0['arguments'] = $array1;
$arguments0['section'] = NULL;
$arguments0['optional'] = false;
$renderChildrenClosure2 = function() {return NULL;};


return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments0, $renderChildrenClosure2, $renderingContext);
}


}
#1465043385    1323      