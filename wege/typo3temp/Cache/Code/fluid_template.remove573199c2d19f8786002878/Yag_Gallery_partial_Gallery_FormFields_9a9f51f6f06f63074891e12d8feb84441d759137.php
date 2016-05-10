<?php
class FluidCache_Yag_Gallery_partial_Gallery_FormFields_9a9f51f6f06f63074891e12d8feb84441d759137 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

<div class="outer-wrapper">
	<label for="tx-yag-gallery-name" >
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'tx_yag_domain_model_gallery.name';
$arguments1['default'] = 'Name';
$arguments1['id'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= ' <span class="required">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments3 = array();
$arguments3['key'] = 'tx_yag_general.required';
$arguments3['default'] = '(required)';
$arguments3['id'] = NULL;
$arguments3['htmlEscape'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$renderChildrenClosure4 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '</span>
	</label>
	<div class="outer-field-wrapper">
		<div class="field-wrapper type-text">
			 ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments5 = array();
$arguments5['property'] = 'name';
$arguments5['id'] = 'tx-yag-gallery-name';
$arguments5['additionalAttributes'] = NULL;
$arguments5['data'] = NULL;
$arguments5['required'] = false;
$arguments5['type'] = 'text';
$arguments5['name'] = NULL;
$arguments5['value'] = NULL;
$arguments5['autofocus'] = NULL;
$arguments5['disabled'] = NULL;
$arguments5['maxlength'] = NULL;
$arguments5['readonly'] = NULL;
$arguments5['size'] = NULL;
$arguments5['placeholder'] = NULL;
$arguments5['pattern'] = NULL;
$arguments5['errorClass'] = 'f3-form-error';
$arguments5['class'] = NULL;
$arguments5['dir'] = NULL;
$arguments5['lang'] = NULL;
$arguments5['style'] = NULL;
$arguments5['title'] = NULL;
$arguments5['accesskey'] = NULL;
$arguments5['tabindex'] = NULL;
$arguments5['onclick'] = NULL;
$renderChildrenClosure6 = function() {return NULL;};
$viewHelper7 = $self->getViewHelper('$viewHelper7', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper7->setArguments($arguments5);
$viewHelper7->setRenderingContext($renderingContext);
$viewHelper7->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper7->initializeArgumentsAndRender();

$output0 .= '
		</div>
	</div>
</div>

<div class="outer-wrapper">
	<label for="tx-yag-gallery-description" >
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments8 = array();
$arguments8['key'] = 'tx_yag_domain_model_gallery.description';
$arguments8['id'] = NULL;
$arguments8['default'] = NULL;
$arguments8['htmlEscape'] = NULL;
$arguments8['arguments'] = NULL;
$arguments8['extensionName'] = NULL;
$renderChildrenClosure9 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
	</label>
	<div class="outer-field-wrapper">
		<div class="field-wrapper type-text">
			 ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper
$arguments10 = array();
$arguments10['property'] = 'description';
$arguments10['rows'] = '8';
$arguments10['cols'] = '46';
$arguments10['id'] = 'tx-yag-gallery-description';
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['name'] = NULL;
$arguments10['value'] = NULL;
$arguments10['autofocus'] = NULL;
$arguments10['disabled'] = NULL;
$arguments10['placeholder'] = NULL;
$arguments10['errorClass'] = 'f3-form-error';
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$renderChildrenClosure11 = function() {return NULL;};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper

$output0 .= $viewHelper12->initializeArgumentsAndRender();

$output0 .= '
		</div>
	</div>
</div>

<div class="outer-wrapper">
	<label for="tx-yag-gallery-date" >
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments13 = array();
$arguments13['key'] = 'tx_yag_domain_model_gallery.date';
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$renderChildrenClosure14 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
	</label>
	<div class="outer-field-wrapper">
		<div class="field-wrapper type-text">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments15 = array();
$arguments15['name'] = 'gallery[date][date]';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments16 = array();
$arguments16['date'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'date', $renderingContext);
$arguments16['format'] = '';
$arguments16['base'] = NULL;
$renderChildrenClosure17 = function() {return NULL;};
$arguments15['value'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);
$arguments15['id'] = 'tx-yag-gallery-date';
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['required'] = false;
$arguments15['type'] = 'text';
$arguments15['property'] = NULL;
$arguments15['autofocus'] = NULL;
$arguments15['disabled'] = NULL;
$arguments15['maxlength'] = NULL;
$arguments15['readonly'] = NULL;
$arguments15['size'] = NULL;
$arguments15['placeholder'] = NULL;
$arguments15['pattern'] = NULL;
$arguments15['errorClass'] = 'f3-form-error';
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$renderChildrenClosure18 = function() {return NULL;};
$viewHelper19 = $self->getViewHelper('$viewHelper19', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper19->setArguments($arguments15);
$viewHelper19->setRenderingContext($renderingContext);
$viewHelper19->setRenderChildrenClosure($renderChildrenClosure18);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper19->initializeArgumentsAndRender();

$output0 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments20 = array();
$arguments20['name'] = 'gallery[date][dateFormat]';
$arguments20['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'extensionConfig.sysDateFormat', $renderingContext);
$arguments20['additionalAttributes'] = NULL;
$arguments20['data'] = NULL;
$arguments20['property'] = NULL;
$arguments20['class'] = NULL;
$arguments20['dir'] = NULL;
$arguments20['id'] = NULL;
$arguments20['lang'] = NULL;
$arguments20['style'] = NULL;
$arguments20['title'] = NULL;
$arguments20['accesskey'] = NULL;
$arguments20['tabindex'] = NULL;
$arguments20['onclick'] = NULL;
$renderChildrenClosure21 = function() {return NULL;};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper22->setArguments($arguments20);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output0 .= $viewHelper22->initializeArgumentsAndRender();

$output0 .= '
		</div>
	</div>
</div>

<div class="outer-wrapper">
	<label for="tx-yag-gallery-hide" >
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments23 = array();
$arguments23['key'] = 'tx_yag_domain_model_gallery.hide';
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['htmlEscape'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$renderChildrenClosure24 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output0 .= '
	</label>
	<div class="outer-field-wrapper">
		<div class="field-wrapper type-text">
			 ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$arguments25 = array();
$arguments25['property'] = 'hidden';
$arguments25['value'] = '1';
// Rendering Boolean node
$arguments25['checked'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'hidden', $renderingContext));
$arguments25['id'] = 'tx-yag-gallery-hide';
$arguments25['additionalAttributes'] = NULL;
$arguments25['data'] = NULL;
$arguments25['multiple'] = false;
$arguments25['name'] = NULL;
$arguments25['disabled'] = NULL;
$arguments25['errorClass'] = 'f3-form-error';
$arguments25['class'] = NULL;
$arguments25['dir'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['title'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['tabindex'] = NULL;
$arguments25['onclick'] = NULL;
$renderChildrenClosure26 = function() {return NULL;};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper');
$viewHelper27->setArguments($arguments25);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper

$output0 .= $viewHelper27->initializeArgumentsAndRender();

$output0 .= '
		</div>
	</div>
</div>';


return $output0;
}


}
#1461666467    11447     