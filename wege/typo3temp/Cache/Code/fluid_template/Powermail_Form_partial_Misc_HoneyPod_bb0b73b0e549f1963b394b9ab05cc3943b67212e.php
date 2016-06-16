<?php
class FluidCache_Powermail_Form_partial_Misc_HoneyPod_bb0b73b0e549f1963b394b9ab05cc3943b67212e extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments0 = array();
// Rendering Boolean node
$arguments0['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'spamshield.indicator.honeypod', $renderingContext));
$arguments0['then'] = NULL;
$arguments0['else'] = NULL;
$renderChildrenClosure1 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output2 = '';

$output2 .= '
	<div style="margin-left: -99999px; position: absolute;">
		<label for="powermail_hp_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments3 = array();
$arguments3['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('form'), 'uid', $renderingContext);
$arguments3['keepQuotes'] = false;
$arguments3['encoding'] = NULL;
$arguments3['doubleEncode'] = true;
$renderChildrenClosure4 = function() {return NULL;};
$value5 = ($arguments3['value'] !== NULL ? $arguments3['value'] : $renderChildrenClosure4());

$output2 .= (!is_string($value5) ? $value5 : htmlspecialchars($value5, ($arguments3['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments3['encoding'] !== NULL ? $arguments3['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments3['doubleEncode']));

$output2 .= '">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments6 = array();
$arguments6['key'] = 'honeypodLabel';
$arguments6['id'] = NULL;
$arguments6['default'] = NULL;
$arguments6['htmlEscape'] = NULL;
$arguments6['arguments'] = NULL;
$arguments6['extensionName'] = NULL;
$renderChildrenClosure7 = function() {return NULL;};

$output2 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output2 .= '
		</label>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments8 = array();
$arguments8['name'] = 'field[__hp]';
$arguments8['value'] = '';
$output9 = '';

$output9 .= 'powermail_hp_';

$output9 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('form'), 'uid', $renderingContext);
$arguments8['id'] = $output9;
// Rendering Array
$array10 = array();
$array10['autocomplete'] = 'off';
$arguments8['additionalAttributes'] = $array10;
$arguments8['data'] = NULL;
$arguments8['required'] = false;
$arguments8['type'] = 'text';
$arguments8['property'] = NULL;
$arguments8['autofocus'] = NULL;
$arguments8['disabled'] = NULL;
$arguments8['maxlength'] = NULL;
$arguments8['readonly'] = NULL;
$arguments8['size'] = NULL;
$arguments8['placeholder'] = NULL;
$arguments8['pattern'] = NULL;
$arguments8['errorClass'] = 'f3-form-error';
$arguments8['class'] = NULL;
$arguments8['dir'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$renderChildrenClosure11 = function() {return NULL;};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper12->setArguments($arguments8);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output2 .= $viewHelper12->initializeArgumentsAndRender();

$output2 .= '
	</div>
';
return $output2;
};


return TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments0, $renderChildrenClosure1, $renderingContext);
}


}
#1466115702    4668      