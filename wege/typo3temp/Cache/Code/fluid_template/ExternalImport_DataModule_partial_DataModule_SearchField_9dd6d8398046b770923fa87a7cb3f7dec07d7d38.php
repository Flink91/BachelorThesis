<?php
class FluidCache_ExternalImport_DataModule_partial_DataModule_SearchField_9dd6d8398046b770923fa87a7cb3f7dec07d7d38 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments1 = array();
$arguments1['name'] = 'externalimport-searchfield';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments2 = array();
$arguments2['key'] = 'search';
$arguments2['id'] = NULL;
$arguments2['default'] = NULL;
$arguments2['htmlEscape'] = NULL;
$arguments2['arguments'] = NULL;
$arguments2['extensionName'] = NULL;
$renderChildrenClosure3 = function() {return NULL;};
$arguments1['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);
$arguments1['id'] = 'tx_externalimport_search';
$arguments1['class'] = 'form-control t3js-externalimport-searchfield';
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['required'] = false;
$arguments1['type'] = 'text';
$arguments1['value'] = NULL;
$arguments1['property'] = NULL;
$arguments1['autofocus'] = NULL;
$arguments1['disabled'] = NULL;
$arguments1['maxlength'] = NULL;
$arguments1['readonly'] = NULL;
$arguments1['size'] = NULL;
$arguments1['pattern'] = NULL;
$arguments1['errorClass'] = 'f3-form-error';
$arguments1['dir'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$renderChildrenClosure4 = function() {return NULL;};
$viewHelper5 = $self->getViewHelper('$viewHelper5', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper5->setArguments($arguments1);
$viewHelper5->setRenderingContext($renderingContext);
$viewHelper5->setRenderChildrenClosure($renderChildrenClosure4);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper5->initializeArgumentsAndRender();

$output0 .= '
		</div>
	</form>
	<br />
';


return $output0;
}


}
#1467049443    2830      