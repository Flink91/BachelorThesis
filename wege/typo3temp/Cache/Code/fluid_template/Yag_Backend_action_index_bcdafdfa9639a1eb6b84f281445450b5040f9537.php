<?php
class FluidCache_Yag_Backend_action_index_bcdafdfa9639a1eb6b84f281445450b5040f9537 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments0['partial'] = 'Backend/Flexform/FlexFormAlbumList.html';
// Rendering Array
$array1 = array();
$array1['selectedAlbumUid'] = $currentVariableContainer->getOrNull('selectedAlbumUid');
$array1['albums'] = $currentVariableContainer->getOrNull('albums');
$arguments0['arguments'] = $array1;
$arguments0['section'] = NULL;
$arguments0['optional'] = false;
$renderChildrenClosure2 = function() {return NULL;};


return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments0, $renderChildrenClosure2, $renderingContext);
}


}
#1461667483    1403      