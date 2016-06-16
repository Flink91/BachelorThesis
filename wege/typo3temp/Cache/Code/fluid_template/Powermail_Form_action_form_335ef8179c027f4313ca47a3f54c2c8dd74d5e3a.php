<?php
class FluidCache_Powermail_Form_action_form_335ef8179c027f4313ca47a3f54c2c8dd74d5e3a extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section main
 */
public function section_b28b7af69320201d1cf206ebf28373980add1451(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments1 = array();
$arguments1['class'] = 'powermail_message powermail_message_error';
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['renderMode'] = NULL;
$arguments1['as'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['queueIdentifier'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('forms'));
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments7 = array();
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments10 = array();
$arguments10['each'] = $currentVariableContainer->getOrNull('forms');
$arguments10['as'] = 'form';
$arguments10['key'] = '';
$arguments10['reverse'] = false;
$arguments10['iteration'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output12 = '';

$output12 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments13 = array();
$arguments13['action'] = $currentVariableContainer->getOrNull('action');
$arguments13['name'] = 'field';
$arguments13['enctype'] = 'multipart/form-data';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Validation\EnableParsleyAndAjaxViewHelper
$arguments14 = array();
$arguments14['form'] = $currentVariableContainer->getOrNull('form');
$arguments14['additionalAttributes'] = array (
);
$renderChildrenClosure15 = function() {return NULL;};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'In2code\Powermail\ViewHelpers\Validation\EnableParsleyAndAjaxViewHelper');
$viewHelper16->setArguments($arguments14);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper In2code\Powermail\ViewHelpers\Validation\EnableParsleyAndAjaxViewHelper
$arguments13['additionalAttributes'] = $viewHelper16->initializeArgumentsAndRender();
// Rendering Boolean node
$arguments13['addQueryString'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'misc.addQueryString', $renderingContext));
$output17 = '';

$output17 .= 'powermail_form powermail_form_';

$output17 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('form'), 'uid', $renderingContext);

$output17 .= ' ';

$output17 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('form'), 'css', $renderingContext);

$output17 .= ' ';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Misc\MorestepClassViewHelper
$arguments18 = array();
// Rendering Boolean node
$arguments18['activate'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'main.moresteps', $renderingContext));
$arguments18['class'] = 'powermail_morestep';
$renderChildrenClosure19 = function() {return NULL;};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'In2code\Powermail\ViewHelpers\Misc\MorestepClassViewHelper');
$viewHelper20->setArguments($arguments18);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper In2code\Powermail\ViewHelpers\Misc\MorestepClassViewHelper

$output17 .= $viewHelper20->initializeArgumentsAndRender();
$arguments13['class'] = $output17;
$arguments13['data'] = NULL;
$arguments13['arguments'] = array (
);
$arguments13['controller'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['pluginName'] = NULL;
$arguments13['pageUid'] = NULL;
$arguments13['object'] = NULL;
$arguments13['pageType'] = 0;
$arguments13['noCache'] = false;
$arguments13['noCacheHash'] = false;
$arguments13['section'] = '';
$arguments13['format'] = '';
$arguments13['additionalParams'] = array (
);
$arguments13['absolute'] = false;
$arguments13['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments13['fieldNamePrefix'] = NULL;
$arguments13['actionUri'] = NULL;
$arguments13['objectName'] = NULL;
$arguments13['hiddenFieldClassName'] = NULL;
$arguments13['method'] = NULL;
$arguments13['onreset'] = NULL;
$arguments13['onsubmit'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= '

					<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments23 = array();
$arguments23['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('form'), 'title', $renderingContext);
$arguments23['keepQuotes'] = false;
$arguments23['encoding'] = NULL;
$arguments23['doubleEncode'] = true;
$renderChildrenClosure24 = function() {return NULL;};
$value25 = ($arguments23['value'] !== NULL ? $arguments23['value'] : $renderChildrenClosure24());

$output22 .= (!is_string($value25) ? $value25 : htmlspecialchars($value25, ($arguments23['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments23['encoding'] !== NULL ? $arguments23['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments23['doubleEncode']));

$output22 .= '</h3>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments26 = array();
$arguments26['partial'] = 'Misc/FormError';
$arguments26['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments26['section'] = NULL;
$arguments26['optional'] = false;
$renderChildrenClosure27 = function() {return NULL;};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output22 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments28 = array();
$arguments28['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('form'), 'pages', $renderingContext);
$arguments28['as'] = 'page';
$arguments28['key'] = '';
$arguments28['reverse'] = false;
$arguments28['iteration'] = NULL;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output30 = '';

$output30 .= '
						<fieldset class="powermail_fieldset powermail_fieldset_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments31 = array();
$arguments31['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'uid', $renderingContext);
$arguments31['keepQuotes'] = false;
$arguments31['encoding'] = NULL;
$arguments31['doubleEncode'] = true;
$renderChildrenClosure32 = function() {return NULL;};
$value33 = ($arguments31['value'] !== NULL ? $arguments31['value'] : $renderChildrenClosure32());

$output30 .= (!is_string($value33) ? $value33 : htmlspecialchars($value33, ($arguments31['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments31['encoding'] !== NULL ? $arguments31['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments31['doubleEncode']));

$output30 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments34 = array();
$arguments34['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'css', $renderingContext);
$arguments34['keepQuotes'] = false;
$arguments34['encoding'] = NULL;
$arguments34['doubleEncode'] = true;
$renderChildrenClosure35 = function() {return NULL;};
$value36 = ($arguments34['value'] !== NULL ? $arguments34['value'] : $renderChildrenClosure35());

$output30 .= (!is_string($value36) ? $value36 : htmlspecialchars($value36, ($arguments34['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments34['encoding'] !== NULL ? $arguments34['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments34['doubleEncode']));

$output30 .= '">
							<legend class="powermail_legend">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments37 = array();
$arguments37['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'title', $renderingContext);
$arguments37['keepQuotes'] = false;
$arguments37['encoding'] = NULL;
$arguments37['doubleEncode'] = true;
$renderChildrenClosure38 = function() {return NULL;};
$value39 = ($arguments37['value'] !== NULL ? $arguments37['value'] : $renderChildrenClosure38());

$output30 .= (!is_string($value39) ? $value39 : htmlspecialchars($value39, ($arguments37['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments37['encoding'] !== NULL ? $arguments37['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments37['doubleEncode']));

$output30 .= '</legend>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments40 = array();
$arguments40['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'fields', $renderingContext);
$arguments40['as'] = 'field';
$arguments40['key'] = '';
$arguments40['reverse'] = false;
$arguments40['iteration'] = NULL;
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output42 = '';

$output42 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments43 = array();
$output44 = '';

$output44 .= 'Form/';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\String\UpperViewHelper
$arguments45 = array();
$arguments45['string'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'type', $renderingContext);
$renderChildrenClosure46 = function() {return NULL;};
$viewHelper47 = $self->getViewHelper('$viewHelper47', $renderingContext, 'In2code\Powermail\ViewHelpers\String\UpperViewHelper');
$viewHelper47->setArguments($arguments45);
$viewHelper47->setRenderingContext($renderingContext);
$viewHelper47->setRenderChildrenClosure($renderChildrenClosure46);
// End of ViewHelper In2code\Powermail\ViewHelpers\String\UpperViewHelper

$output44 .= $viewHelper47->initializeArgumentsAndRender();
$arguments43['partial'] = $output44;
// Rendering Array
$array48 = array();
$array48['field'] = $currentVariableContainer->getOrNull('field');
$arguments43['arguments'] = $array48;
$arguments43['section'] = NULL;
$arguments43['optional'] = false;
$renderChildrenClosure49 = function() {return NULL;};

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments43, $renderChildrenClosure49, $renderingContext);

$output42 .= '
							';
return $output42;
};

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output30 .= '
						</fieldset>
					';
return $output30;
};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output22 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments50 = array();
$arguments50['name'] = 'mail[form]';
$arguments50['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('form'), 'uid', $renderingContext);
$arguments50['class'] = 'powermail_form_uid';
$arguments50['additionalAttributes'] = NULL;
$arguments50['data'] = NULL;
$arguments50['property'] = NULL;
$arguments50['dir'] = NULL;
$arguments50['id'] = NULL;
$arguments50['lang'] = NULL;
$arguments50['style'] = NULL;
$arguments50['title'] = NULL;
$arguments50['accesskey'] = NULL;
$arguments50['tabindex'] = NULL;
$arguments50['onclick'] = NULL;
$renderChildrenClosure51 = function() {return NULL;};
$viewHelper52 = $self->getViewHelper('$viewHelper52', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper52->setArguments($arguments50);
$viewHelper52->setRenderingContext($renderingContext);
$viewHelper52->setRenderChildrenClosure($renderChildrenClosure51);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output22 .= $viewHelper52->initializeArgumentsAndRender();

$output22 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments53 = array();
$arguments53['partial'] = 'Misc/HoneyPod';
// Rendering Array
$array54 = array();
$array54['form'] = $currentVariableContainer->getOrNull('form');
$arguments53['arguments'] = $array54;
$arguments53['section'] = NULL;
$arguments53['optional'] = false;
$renderChildrenClosure55 = function() {return NULL;};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments53, $renderChildrenClosure55, $renderingContext);

$output22 .= '
				';
return $output22;
};
$viewHelper56 = $self->getViewHelper('$viewHelper56', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper56->setArguments($arguments13);
$viewHelper56->setRenderingContext($renderingContext);
$viewHelper56->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output12 .= $viewHelper56->initializeArgumentsAndRender();

$output12 .= '
			';
return $output12;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
		';
return $output9;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments57 = array();
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output59 = '';

$output59 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments60 = array();
$arguments60['key'] = 'error_no_form';
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['htmlEscape'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$renderChildrenClosure61 = function() {return NULL;};

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
		';
return $output59;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output6 .= '
	';
return $output6;
};
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output62 = '';

$output62 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments63 = array();
$arguments63['each'] = $currentVariableContainer->getOrNull('forms');
$arguments63['as'] = 'form';
$arguments63['key'] = '';
$arguments63['reverse'] = false;
$arguments63['iteration'] = NULL;
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output65 = '';

$output65 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments66 = array();
$arguments66['action'] = $currentVariableContainer->getOrNull('action');
$arguments66['name'] = 'field';
$arguments66['enctype'] = 'multipart/form-data';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Validation\EnableParsleyAndAjaxViewHelper
$arguments67 = array();
$arguments67['form'] = $currentVariableContainer->getOrNull('form');
$arguments67['additionalAttributes'] = array (
);
$renderChildrenClosure68 = function() {return NULL;};
$viewHelper69 = $self->getViewHelper('$viewHelper69', $renderingContext, 'In2code\Powermail\ViewHelpers\Validation\EnableParsleyAndAjaxViewHelper');
$viewHelper69->setArguments($arguments67);
$viewHelper69->setRenderingContext($renderingContext);
$viewHelper69->setRenderChildrenClosure($renderChildrenClosure68);
// End of ViewHelper In2code\Powermail\ViewHelpers\Validation\EnableParsleyAndAjaxViewHelper
$arguments66['additionalAttributes'] = $viewHelper69->initializeArgumentsAndRender();
// Rendering Boolean node
$arguments66['addQueryString'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'misc.addQueryString', $renderingContext));
$output70 = '';

$output70 .= 'powermail_form powermail_form_';

$output70 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('form'), 'uid', $renderingContext);

$output70 .= ' ';

$output70 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('form'), 'css', $renderingContext);

$output70 .= ' ';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Misc\MorestepClassViewHelper
$arguments71 = array();
// Rendering Boolean node
$arguments71['activate'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'main.moresteps', $renderingContext));
$arguments71['class'] = 'powermail_morestep';
$renderChildrenClosure72 = function() {return NULL;};
$viewHelper73 = $self->getViewHelper('$viewHelper73', $renderingContext, 'In2code\Powermail\ViewHelpers\Misc\MorestepClassViewHelper');
$viewHelper73->setArguments($arguments71);
$viewHelper73->setRenderingContext($renderingContext);
$viewHelper73->setRenderChildrenClosure($renderChildrenClosure72);
// End of ViewHelper In2code\Powermail\ViewHelpers\Misc\MorestepClassViewHelper

$output70 .= $viewHelper73->initializeArgumentsAndRender();
$arguments66['class'] = $output70;
$arguments66['data'] = NULL;
$arguments66['arguments'] = array (
);
$arguments66['controller'] = NULL;
$arguments66['extensionName'] = NULL;
$arguments66['pluginName'] = NULL;
$arguments66['pageUid'] = NULL;
$arguments66['object'] = NULL;
$arguments66['pageType'] = 0;
$arguments66['noCache'] = false;
$arguments66['noCacheHash'] = false;
$arguments66['section'] = '';
$arguments66['format'] = '';
$arguments66['additionalParams'] = array (
);
$arguments66['absolute'] = false;
$arguments66['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments66['fieldNamePrefix'] = NULL;
$arguments66['actionUri'] = NULL;
$arguments66['objectName'] = NULL;
$arguments66['hiddenFieldClassName'] = NULL;
$arguments66['method'] = NULL;
$arguments66['onreset'] = NULL;
$arguments66['onsubmit'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output75 = '';

$output75 .= '

					<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments76 = array();
$arguments76['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('form'), 'title', $renderingContext);
$arguments76['keepQuotes'] = false;
$arguments76['encoding'] = NULL;
$arguments76['doubleEncode'] = true;
$renderChildrenClosure77 = function() {return NULL;};
$value78 = ($arguments76['value'] !== NULL ? $arguments76['value'] : $renderChildrenClosure77());

$output75 .= (!is_string($value78) ? $value78 : htmlspecialchars($value78, ($arguments76['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments76['encoding'] !== NULL ? $arguments76['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments76['doubleEncode']));

$output75 .= '</h3>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments79 = array();
$arguments79['partial'] = 'Misc/FormError';
$arguments79['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments79['section'] = NULL;
$arguments79['optional'] = false;
$renderChildrenClosure80 = function() {return NULL;};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output75 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments81 = array();
$arguments81['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('form'), 'pages', $renderingContext);
$arguments81['as'] = 'page';
$arguments81['key'] = '';
$arguments81['reverse'] = false;
$arguments81['iteration'] = NULL;
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output83 = '';

$output83 .= '
						<fieldset class="powermail_fieldset powermail_fieldset_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments84 = array();
$arguments84['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'uid', $renderingContext);
$arguments84['keepQuotes'] = false;
$arguments84['encoding'] = NULL;
$arguments84['doubleEncode'] = true;
$renderChildrenClosure85 = function() {return NULL;};
$value86 = ($arguments84['value'] !== NULL ? $arguments84['value'] : $renderChildrenClosure85());

$output83 .= (!is_string($value86) ? $value86 : htmlspecialchars($value86, ($arguments84['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments84['encoding'] !== NULL ? $arguments84['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments84['doubleEncode']));

$output83 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments87 = array();
$arguments87['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'css', $renderingContext);
$arguments87['keepQuotes'] = false;
$arguments87['encoding'] = NULL;
$arguments87['doubleEncode'] = true;
$renderChildrenClosure88 = function() {return NULL;};
$value89 = ($arguments87['value'] !== NULL ? $arguments87['value'] : $renderChildrenClosure88());

$output83 .= (!is_string($value89) ? $value89 : htmlspecialchars($value89, ($arguments87['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments87['encoding'] !== NULL ? $arguments87['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments87['doubleEncode']));

$output83 .= '">
							<legend class="powermail_legend">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments90 = array();
$arguments90['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'title', $renderingContext);
$arguments90['keepQuotes'] = false;
$arguments90['encoding'] = NULL;
$arguments90['doubleEncode'] = true;
$renderChildrenClosure91 = function() {return NULL;};
$value92 = ($arguments90['value'] !== NULL ? $arguments90['value'] : $renderChildrenClosure91());

$output83 .= (!is_string($value92) ? $value92 : htmlspecialchars($value92, ($arguments90['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments90['encoding'] !== NULL ? $arguments90['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments90['doubleEncode']));

$output83 .= '</legend>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments93 = array();
$arguments93['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'fields', $renderingContext);
$arguments93['as'] = 'field';
$arguments93['key'] = '';
$arguments93['reverse'] = false;
$arguments93['iteration'] = NULL;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output95 = '';

$output95 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments96 = array();
$output97 = '';

$output97 .= 'Form/';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\String\UpperViewHelper
$arguments98 = array();
$arguments98['string'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'type', $renderingContext);
$renderChildrenClosure99 = function() {return NULL;};
$viewHelper100 = $self->getViewHelper('$viewHelper100', $renderingContext, 'In2code\Powermail\ViewHelpers\String\UpperViewHelper');
$viewHelper100->setArguments($arguments98);
$viewHelper100->setRenderingContext($renderingContext);
$viewHelper100->setRenderChildrenClosure($renderChildrenClosure99);
// End of ViewHelper In2code\Powermail\ViewHelpers\String\UpperViewHelper

$output97 .= $viewHelper100->initializeArgumentsAndRender();
$arguments96['partial'] = $output97;
// Rendering Array
$array101 = array();
$array101['field'] = $currentVariableContainer->getOrNull('field');
$arguments96['arguments'] = $array101;
$arguments96['section'] = NULL;
$arguments96['optional'] = false;
$renderChildrenClosure102 = function() {return NULL;};

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments96, $renderChildrenClosure102, $renderingContext);

$output95 .= '
							';
return $output95;
};

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output83 .= '
						</fieldset>
					';
return $output83;
};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output75 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments103 = array();
$arguments103['name'] = 'mail[form]';
$arguments103['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('form'), 'uid', $renderingContext);
$arguments103['class'] = 'powermail_form_uid';
$arguments103['additionalAttributes'] = NULL;
$arguments103['data'] = NULL;
$arguments103['property'] = NULL;
$arguments103['dir'] = NULL;
$arguments103['id'] = NULL;
$arguments103['lang'] = NULL;
$arguments103['style'] = NULL;
$arguments103['title'] = NULL;
$arguments103['accesskey'] = NULL;
$arguments103['tabindex'] = NULL;
$arguments103['onclick'] = NULL;
$renderChildrenClosure104 = function() {return NULL;};
$viewHelper105 = $self->getViewHelper('$viewHelper105', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper105->setArguments($arguments103);
$viewHelper105->setRenderingContext($renderingContext);
$viewHelper105->setRenderChildrenClosure($renderChildrenClosure104);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output75 .= $viewHelper105->initializeArgumentsAndRender();

$output75 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments106 = array();
$arguments106['partial'] = 'Misc/HoneyPod';
// Rendering Array
$array107 = array();
$array107['form'] = $currentVariableContainer->getOrNull('form');
$arguments106['arguments'] = $array107;
$arguments106['section'] = NULL;
$arguments106['optional'] = false;
$renderChildrenClosure108 = function() {return NULL;};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments106, $renderChildrenClosure108, $renderingContext);

$output75 .= '
				';
return $output75;
};
$viewHelper109 = $self->getViewHelper('$viewHelper109', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper109->setArguments($arguments66);
$viewHelper109->setRenderingContext($renderingContext);
$viewHelper109->setRenderChildrenClosure($renderChildrenClosure74);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output65 .= $viewHelper109->initializeArgumentsAndRender();

$output65 .= '
			';
return $output65;
};

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output62 .= '
		';
return $output62;
};
$arguments4['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output110 = '';

$output110 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments111 = array();
$arguments111['key'] = 'error_no_form';
$arguments111['id'] = NULL;
$arguments111['default'] = NULL;
$arguments111['htmlEscape'] = NULL;
$arguments111['arguments'] = NULL;
$arguments111['extensionName'] = NULL;
$renderChildrenClosure112 = function() {return NULL;};

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output110 .= '
		';
return $output110;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '

';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output113 = '';

$output113 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments114 = array();
$arguments114['name'] = 'Default';
$renderChildrenClosure115 = function() {return NULL;};
$viewHelper116 = $self->getViewHelper('$viewHelper116', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper116->setArguments($arguments114);
$viewHelper116->setRenderingContext($renderingContext);
$viewHelper116->setRenderChildrenClosure($renderChildrenClosure115);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output113 .= $viewHelper116->initializeArgumentsAndRender();

$output113 .= '

Render Powermail Form
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments117 = array();
$arguments117['value'] = $currentVariableContainer->getOrNull('forms');
$arguments117['keepQuotes'] = false;
$arguments117['encoding'] = NULL;
$arguments117['doubleEncode'] = true;
$renderChildrenClosure118 = function() {return NULL;};
$value119 = ($arguments117['value'] !== NULL ? $arguments117['value'] : $renderChildrenClosure118());

$output113 .= (!is_string($value119) ? $value119 : htmlspecialchars($value119, ($arguments117['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments117['encoding'] !== NULL ? $arguments117['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments117['doubleEncode']));

$output113 .= ' 			All Forms with their Pages and their Fields
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments120 = array();
$arguments120['value'] = $currentVariableContainer->getOrNull('ttContentData');
$arguments120['keepQuotes'] = false;
$arguments120['encoding'] = NULL;
$arguments120['doubleEncode'] = true;
$renderChildrenClosure121 = function() {return NULL;};
$value122 = ($arguments120['value'] !== NULL ? $arguments120['value'] : $renderChildrenClosure121());

$output113 .= (!is_string($value122) ? $value122 : htmlspecialchars($value122, ($arguments120['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments120['encoding'] !== NULL ? $arguments120['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments120['doubleEncode']));

$output113 .= '		All values from content element with plugin


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments123 = array();
$arguments123['name'] = 'main';
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output125 = '';

$output125 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments126 = array();
$arguments126['class'] = 'powermail_message powermail_message_error';
$arguments126['additionalAttributes'] = NULL;
$arguments126['data'] = NULL;
$arguments126['renderMode'] = NULL;
$arguments126['as'] = NULL;
$arguments126['dir'] = NULL;
$arguments126['id'] = NULL;
$arguments126['lang'] = NULL;
$arguments126['style'] = NULL;
$arguments126['title'] = NULL;
$arguments126['accesskey'] = NULL;
$arguments126['tabindex'] = NULL;
$arguments126['onclick'] = NULL;
$arguments126['queueIdentifier'] = NULL;
$renderChildrenClosure127 = function() {return NULL;};
$viewHelper128 = $self->getViewHelper('$viewHelper128', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper128->setArguments($arguments126);
$viewHelper128->setRenderingContext($renderingContext);
$viewHelper128->setRenderChildrenClosure($renderChildrenClosure127);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output125 .= $viewHelper128->initializeArgumentsAndRender();

$output125 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments129 = array();
// Rendering Boolean node
$arguments129['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('forms'));
$arguments129['then'] = NULL;
$arguments129['else'] = NULL;
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output131 = '';

$output131 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments132 = array();
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output134 = '';

$output134 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments135 = array();
$arguments135['each'] = $currentVariableContainer->getOrNull('forms');
$arguments135['as'] = 'form';
$arguments135['key'] = '';
$arguments135['reverse'] = false;
$arguments135['iteration'] = NULL;
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output137 = '';

$output137 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments138 = array();
$arguments138['action'] = $currentVariableContainer->getOrNull('action');
$arguments138['name'] = 'field';
$arguments138['enctype'] = 'multipart/form-data';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Validation\EnableParsleyAndAjaxViewHelper
$arguments139 = array();
$arguments139['form'] = $currentVariableContainer->getOrNull('form');
$arguments139['additionalAttributes'] = array (
);
$renderChildrenClosure140 = function() {return NULL;};
$viewHelper141 = $self->getViewHelper('$viewHelper141', $renderingContext, 'In2code\Powermail\ViewHelpers\Validation\EnableParsleyAndAjaxViewHelper');
$viewHelper141->setArguments($arguments139);
$viewHelper141->setRenderingContext($renderingContext);
$viewHelper141->setRenderChildrenClosure($renderChildrenClosure140);
// End of ViewHelper In2code\Powermail\ViewHelpers\Validation\EnableParsleyAndAjaxViewHelper
$arguments138['additionalAttributes'] = $viewHelper141->initializeArgumentsAndRender();
// Rendering Boolean node
$arguments138['addQueryString'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'misc.addQueryString', $renderingContext));
$output142 = '';

$output142 .= 'powermail_form powermail_form_';

$output142 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('form'), 'uid', $renderingContext);

$output142 .= ' ';

$output142 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('form'), 'css', $renderingContext);

$output142 .= ' ';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Misc\MorestepClassViewHelper
$arguments143 = array();
// Rendering Boolean node
$arguments143['activate'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'main.moresteps', $renderingContext));
$arguments143['class'] = 'powermail_morestep';
$renderChildrenClosure144 = function() {return NULL;};
$viewHelper145 = $self->getViewHelper('$viewHelper145', $renderingContext, 'In2code\Powermail\ViewHelpers\Misc\MorestepClassViewHelper');
$viewHelper145->setArguments($arguments143);
$viewHelper145->setRenderingContext($renderingContext);
$viewHelper145->setRenderChildrenClosure($renderChildrenClosure144);
// End of ViewHelper In2code\Powermail\ViewHelpers\Misc\MorestepClassViewHelper

$output142 .= $viewHelper145->initializeArgumentsAndRender();
$arguments138['class'] = $output142;
$arguments138['data'] = NULL;
$arguments138['arguments'] = array (
);
$arguments138['controller'] = NULL;
$arguments138['extensionName'] = NULL;
$arguments138['pluginName'] = NULL;
$arguments138['pageUid'] = NULL;
$arguments138['object'] = NULL;
$arguments138['pageType'] = 0;
$arguments138['noCache'] = false;
$arguments138['noCacheHash'] = false;
$arguments138['section'] = '';
$arguments138['format'] = '';
$arguments138['additionalParams'] = array (
);
$arguments138['absolute'] = false;
$arguments138['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments138['fieldNamePrefix'] = NULL;
$arguments138['actionUri'] = NULL;
$arguments138['objectName'] = NULL;
$arguments138['hiddenFieldClassName'] = NULL;
$arguments138['method'] = NULL;
$arguments138['onreset'] = NULL;
$arguments138['onsubmit'] = NULL;
$arguments138['dir'] = NULL;
$arguments138['id'] = NULL;
$arguments138['lang'] = NULL;
$arguments138['style'] = NULL;
$arguments138['title'] = NULL;
$arguments138['accesskey'] = NULL;
$arguments138['tabindex'] = NULL;
$arguments138['onclick'] = NULL;
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output147 = '';

$output147 .= '

					<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments148 = array();
$arguments148['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('form'), 'title', $renderingContext);
$arguments148['keepQuotes'] = false;
$arguments148['encoding'] = NULL;
$arguments148['doubleEncode'] = true;
$renderChildrenClosure149 = function() {return NULL;};
$value150 = ($arguments148['value'] !== NULL ? $arguments148['value'] : $renderChildrenClosure149());

$output147 .= (!is_string($value150) ? $value150 : htmlspecialchars($value150, ($arguments148['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments148['encoding'] !== NULL ? $arguments148['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments148['doubleEncode']));

$output147 .= '</h3>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments151 = array();
$arguments151['partial'] = 'Misc/FormError';
$arguments151['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments151['section'] = NULL;
$arguments151['optional'] = false;
$renderChildrenClosure152 = function() {return NULL;};

$output147 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output147 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments153 = array();
$arguments153['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('form'), 'pages', $renderingContext);
$arguments153['as'] = 'page';
$arguments153['key'] = '';
$arguments153['reverse'] = false;
$arguments153['iteration'] = NULL;
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output155 = '';

$output155 .= '
						<fieldset class="powermail_fieldset powermail_fieldset_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments156 = array();
$arguments156['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'uid', $renderingContext);
$arguments156['keepQuotes'] = false;
$arguments156['encoding'] = NULL;
$arguments156['doubleEncode'] = true;
$renderChildrenClosure157 = function() {return NULL;};
$value158 = ($arguments156['value'] !== NULL ? $arguments156['value'] : $renderChildrenClosure157());

$output155 .= (!is_string($value158) ? $value158 : htmlspecialchars($value158, ($arguments156['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments156['encoding'] !== NULL ? $arguments156['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments156['doubleEncode']));

$output155 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments159 = array();
$arguments159['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'css', $renderingContext);
$arguments159['keepQuotes'] = false;
$arguments159['encoding'] = NULL;
$arguments159['doubleEncode'] = true;
$renderChildrenClosure160 = function() {return NULL;};
$value161 = ($arguments159['value'] !== NULL ? $arguments159['value'] : $renderChildrenClosure160());

$output155 .= (!is_string($value161) ? $value161 : htmlspecialchars($value161, ($arguments159['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments159['encoding'] !== NULL ? $arguments159['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments159['doubleEncode']));

$output155 .= '">
							<legend class="powermail_legend">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments162 = array();
$arguments162['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'title', $renderingContext);
$arguments162['keepQuotes'] = false;
$arguments162['encoding'] = NULL;
$arguments162['doubleEncode'] = true;
$renderChildrenClosure163 = function() {return NULL;};
$value164 = ($arguments162['value'] !== NULL ? $arguments162['value'] : $renderChildrenClosure163());

$output155 .= (!is_string($value164) ? $value164 : htmlspecialchars($value164, ($arguments162['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments162['encoding'] !== NULL ? $arguments162['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments162['doubleEncode']));

$output155 .= '</legend>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments165 = array();
$arguments165['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'fields', $renderingContext);
$arguments165['as'] = 'field';
$arguments165['key'] = '';
$arguments165['reverse'] = false;
$arguments165['iteration'] = NULL;
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output167 = '';

$output167 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments168 = array();
$output169 = '';

$output169 .= 'Form/';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\String\UpperViewHelper
$arguments170 = array();
$arguments170['string'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'type', $renderingContext);
$renderChildrenClosure171 = function() {return NULL;};
$viewHelper172 = $self->getViewHelper('$viewHelper172', $renderingContext, 'In2code\Powermail\ViewHelpers\String\UpperViewHelper');
$viewHelper172->setArguments($arguments170);
$viewHelper172->setRenderingContext($renderingContext);
$viewHelper172->setRenderChildrenClosure($renderChildrenClosure171);
// End of ViewHelper In2code\Powermail\ViewHelpers\String\UpperViewHelper

$output169 .= $viewHelper172->initializeArgumentsAndRender();
$arguments168['partial'] = $output169;
// Rendering Array
$array173 = array();
$array173['field'] = $currentVariableContainer->getOrNull('field');
$arguments168['arguments'] = $array173;
$arguments168['section'] = NULL;
$arguments168['optional'] = false;
$renderChildrenClosure174 = function() {return NULL;};

$output167 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments168, $renderChildrenClosure174, $renderingContext);

$output167 .= '
							';
return $output167;
};

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output155 .= '
						</fieldset>
					';
return $output155;
};

$output147 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output147 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments175 = array();
$arguments175['name'] = 'mail[form]';
$arguments175['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('form'), 'uid', $renderingContext);
$arguments175['class'] = 'powermail_form_uid';
$arguments175['additionalAttributes'] = NULL;
$arguments175['data'] = NULL;
$arguments175['property'] = NULL;
$arguments175['dir'] = NULL;
$arguments175['id'] = NULL;
$arguments175['lang'] = NULL;
$arguments175['style'] = NULL;
$arguments175['title'] = NULL;
$arguments175['accesskey'] = NULL;
$arguments175['tabindex'] = NULL;
$arguments175['onclick'] = NULL;
$renderChildrenClosure176 = function() {return NULL;};
$viewHelper177 = $self->getViewHelper('$viewHelper177', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper177->setArguments($arguments175);
$viewHelper177->setRenderingContext($renderingContext);
$viewHelper177->setRenderChildrenClosure($renderChildrenClosure176);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output147 .= $viewHelper177->initializeArgumentsAndRender();

$output147 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments178 = array();
$arguments178['partial'] = 'Misc/HoneyPod';
// Rendering Array
$array179 = array();
$array179['form'] = $currentVariableContainer->getOrNull('form');
$arguments178['arguments'] = $array179;
$arguments178['section'] = NULL;
$arguments178['optional'] = false;
$renderChildrenClosure180 = function() {return NULL;};

$output147 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments178, $renderChildrenClosure180, $renderingContext);

$output147 .= '
				';
return $output147;
};
$viewHelper181 = $self->getViewHelper('$viewHelper181', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper181->setArguments($arguments138);
$viewHelper181->setRenderingContext($renderingContext);
$viewHelper181->setRenderChildrenClosure($renderChildrenClosure146);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output137 .= $viewHelper181->initializeArgumentsAndRender();

$output137 .= '
			';
return $output137;
};

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output134 .= '
		';
return $output134;
};

$output131 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output131 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments182 = array();
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output184 = '';

$output184 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments185 = array();
$arguments185['key'] = 'error_no_form';
$arguments185['id'] = NULL;
$arguments185['default'] = NULL;
$arguments185['htmlEscape'] = NULL;
$arguments185['arguments'] = NULL;
$arguments185['extensionName'] = NULL;
$renderChildrenClosure186 = function() {return NULL;};

$output184 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output184 .= '
		';
return $output184;
};

$output131 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output131 .= '
	';
return $output131;
};
$arguments129['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output187 = '';

$output187 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments188 = array();
$arguments188['each'] = $currentVariableContainer->getOrNull('forms');
$arguments188['as'] = 'form';
$arguments188['key'] = '';
$arguments188['reverse'] = false;
$arguments188['iteration'] = NULL;
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output190 = '';

$output190 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments191 = array();
$arguments191['action'] = $currentVariableContainer->getOrNull('action');
$arguments191['name'] = 'field';
$arguments191['enctype'] = 'multipart/form-data';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Validation\EnableParsleyAndAjaxViewHelper
$arguments192 = array();
$arguments192['form'] = $currentVariableContainer->getOrNull('form');
$arguments192['additionalAttributes'] = array (
);
$renderChildrenClosure193 = function() {return NULL;};
$viewHelper194 = $self->getViewHelper('$viewHelper194', $renderingContext, 'In2code\Powermail\ViewHelpers\Validation\EnableParsleyAndAjaxViewHelper');
$viewHelper194->setArguments($arguments192);
$viewHelper194->setRenderingContext($renderingContext);
$viewHelper194->setRenderChildrenClosure($renderChildrenClosure193);
// End of ViewHelper In2code\Powermail\ViewHelpers\Validation\EnableParsleyAndAjaxViewHelper
$arguments191['additionalAttributes'] = $viewHelper194->initializeArgumentsAndRender();
// Rendering Boolean node
$arguments191['addQueryString'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'misc.addQueryString', $renderingContext));
$output195 = '';

$output195 .= 'powermail_form powermail_form_';

$output195 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('form'), 'uid', $renderingContext);

$output195 .= ' ';

$output195 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('form'), 'css', $renderingContext);

$output195 .= ' ';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Misc\MorestepClassViewHelper
$arguments196 = array();
// Rendering Boolean node
$arguments196['activate'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'main.moresteps', $renderingContext));
$arguments196['class'] = 'powermail_morestep';
$renderChildrenClosure197 = function() {return NULL;};
$viewHelper198 = $self->getViewHelper('$viewHelper198', $renderingContext, 'In2code\Powermail\ViewHelpers\Misc\MorestepClassViewHelper');
$viewHelper198->setArguments($arguments196);
$viewHelper198->setRenderingContext($renderingContext);
$viewHelper198->setRenderChildrenClosure($renderChildrenClosure197);
// End of ViewHelper In2code\Powermail\ViewHelpers\Misc\MorestepClassViewHelper

$output195 .= $viewHelper198->initializeArgumentsAndRender();
$arguments191['class'] = $output195;
$arguments191['data'] = NULL;
$arguments191['arguments'] = array (
);
$arguments191['controller'] = NULL;
$arguments191['extensionName'] = NULL;
$arguments191['pluginName'] = NULL;
$arguments191['pageUid'] = NULL;
$arguments191['object'] = NULL;
$arguments191['pageType'] = 0;
$arguments191['noCache'] = false;
$arguments191['noCacheHash'] = false;
$arguments191['section'] = '';
$arguments191['format'] = '';
$arguments191['additionalParams'] = array (
);
$arguments191['absolute'] = false;
$arguments191['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments191['fieldNamePrefix'] = NULL;
$arguments191['actionUri'] = NULL;
$arguments191['objectName'] = NULL;
$arguments191['hiddenFieldClassName'] = NULL;
$arguments191['method'] = NULL;
$arguments191['onreset'] = NULL;
$arguments191['onsubmit'] = NULL;
$arguments191['dir'] = NULL;
$arguments191['id'] = NULL;
$arguments191['lang'] = NULL;
$arguments191['style'] = NULL;
$arguments191['title'] = NULL;
$arguments191['accesskey'] = NULL;
$arguments191['tabindex'] = NULL;
$arguments191['onclick'] = NULL;
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output200 = '';

$output200 .= '

					<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments201 = array();
$arguments201['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('form'), 'title', $renderingContext);
$arguments201['keepQuotes'] = false;
$arguments201['encoding'] = NULL;
$arguments201['doubleEncode'] = true;
$renderChildrenClosure202 = function() {return NULL;};
$value203 = ($arguments201['value'] !== NULL ? $arguments201['value'] : $renderChildrenClosure202());

$output200 .= (!is_string($value203) ? $value203 : htmlspecialchars($value203, ($arguments201['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments201['encoding'] !== NULL ? $arguments201['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments201['doubleEncode']));

$output200 .= '</h3>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments204 = array();
$arguments204['partial'] = 'Misc/FormError';
$arguments204['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments204['section'] = NULL;
$arguments204['optional'] = false;
$renderChildrenClosure205 = function() {return NULL;};

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output200 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments206 = array();
$arguments206['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('form'), 'pages', $renderingContext);
$arguments206['as'] = 'page';
$arguments206['key'] = '';
$arguments206['reverse'] = false;
$arguments206['iteration'] = NULL;
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output208 = '';

$output208 .= '
						<fieldset class="powermail_fieldset powermail_fieldset_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments209 = array();
$arguments209['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'uid', $renderingContext);
$arguments209['keepQuotes'] = false;
$arguments209['encoding'] = NULL;
$arguments209['doubleEncode'] = true;
$renderChildrenClosure210 = function() {return NULL;};
$value211 = ($arguments209['value'] !== NULL ? $arguments209['value'] : $renderChildrenClosure210());

$output208 .= (!is_string($value211) ? $value211 : htmlspecialchars($value211, ($arguments209['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments209['encoding'] !== NULL ? $arguments209['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments209['doubleEncode']));

$output208 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments212 = array();
$arguments212['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'css', $renderingContext);
$arguments212['keepQuotes'] = false;
$arguments212['encoding'] = NULL;
$arguments212['doubleEncode'] = true;
$renderChildrenClosure213 = function() {return NULL;};
$value214 = ($arguments212['value'] !== NULL ? $arguments212['value'] : $renderChildrenClosure213());

$output208 .= (!is_string($value214) ? $value214 : htmlspecialchars($value214, ($arguments212['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments212['encoding'] !== NULL ? $arguments212['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments212['doubleEncode']));

$output208 .= '">
							<legend class="powermail_legend">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments215 = array();
$arguments215['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'title', $renderingContext);
$arguments215['keepQuotes'] = false;
$arguments215['encoding'] = NULL;
$arguments215['doubleEncode'] = true;
$renderChildrenClosure216 = function() {return NULL;};
$value217 = ($arguments215['value'] !== NULL ? $arguments215['value'] : $renderChildrenClosure216());

$output208 .= (!is_string($value217) ? $value217 : htmlspecialchars($value217, ($arguments215['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments215['encoding'] !== NULL ? $arguments215['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments215['doubleEncode']));

$output208 .= '</legend>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments218 = array();
$arguments218['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'fields', $renderingContext);
$arguments218['as'] = 'field';
$arguments218['key'] = '';
$arguments218['reverse'] = false;
$arguments218['iteration'] = NULL;
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output220 = '';

$output220 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments221 = array();
$output222 = '';

$output222 .= 'Form/';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\String\UpperViewHelper
$arguments223 = array();
$arguments223['string'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'type', $renderingContext);
$renderChildrenClosure224 = function() {return NULL;};
$viewHelper225 = $self->getViewHelper('$viewHelper225', $renderingContext, 'In2code\Powermail\ViewHelpers\String\UpperViewHelper');
$viewHelper225->setArguments($arguments223);
$viewHelper225->setRenderingContext($renderingContext);
$viewHelper225->setRenderChildrenClosure($renderChildrenClosure224);
// End of ViewHelper In2code\Powermail\ViewHelpers\String\UpperViewHelper

$output222 .= $viewHelper225->initializeArgumentsAndRender();
$arguments221['partial'] = $output222;
// Rendering Array
$array226 = array();
$array226['field'] = $currentVariableContainer->getOrNull('field');
$arguments221['arguments'] = $array226;
$arguments221['section'] = NULL;
$arguments221['optional'] = false;
$renderChildrenClosure227 = function() {return NULL;};

$output220 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments221, $renderChildrenClosure227, $renderingContext);

$output220 .= '
							';
return $output220;
};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output208 .= '
						</fieldset>
					';
return $output208;
};

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output200 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments228 = array();
$arguments228['name'] = 'mail[form]';
$arguments228['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('form'), 'uid', $renderingContext);
$arguments228['class'] = 'powermail_form_uid';
$arguments228['additionalAttributes'] = NULL;
$arguments228['data'] = NULL;
$arguments228['property'] = NULL;
$arguments228['dir'] = NULL;
$arguments228['id'] = NULL;
$arguments228['lang'] = NULL;
$arguments228['style'] = NULL;
$arguments228['title'] = NULL;
$arguments228['accesskey'] = NULL;
$arguments228['tabindex'] = NULL;
$arguments228['onclick'] = NULL;
$renderChildrenClosure229 = function() {return NULL;};
$viewHelper230 = $self->getViewHelper('$viewHelper230', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper230->setArguments($arguments228);
$viewHelper230->setRenderingContext($renderingContext);
$viewHelper230->setRenderChildrenClosure($renderChildrenClosure229);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output200 .= $viewHelper230->initializeArgumentsAndRender();

$output200 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments231 = array();
$arguments231['partial'] = 'Misc/HoneyPod';
// Rendering Array
$array232 = array();
$array232['form'] = $currentVariableContainer->getOrNull('form');
$arguments231['arguments'] = $array232;
$arguments231['section'] = NULL;
$arguments231['optional'] = false;
$renderChildrenClosure233 = function() {return NULL;};

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments231, $renderChildrenClosure233, $renderingContext);

$output200 .= '
				';
return $output200;
};
$viewHelper234 = $self->getViewHelper('$viewHelper234', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper234->setArguments($arguments191);
$viewHelper234->setRenderingContext($renderingContext);
$viewHelper234->setRenderChildrenClosure($renderChildrenClosure199);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output190 .= $viewHelper234->initializeArgumentsAndRender();

$output190 .= '
			';
return $output190;
};

$output187 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output187 .= '
		';
return $output187;
};
$arguments129['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output235 = '';

$output235 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments236 = array();
$arguments236['key'] = 'error_no_form';
$arguments236['id'] = NULL;
$arguments236['default'] = NULL;
$arguments236['htmlEscape'] = NULL;
$arguments236['arguments'] = NULL;
$arguments236['extensionName'] = NULL;
$renderChildrenClosure237 = function() {return NULL;};

$output235 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output235 .= '
		';
return $output235;
};

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output125 .= '

';
return $output125;
};

$output113 .= '';

$output113 .= '
';


return $output113;
}


}
#1466115702    67995     