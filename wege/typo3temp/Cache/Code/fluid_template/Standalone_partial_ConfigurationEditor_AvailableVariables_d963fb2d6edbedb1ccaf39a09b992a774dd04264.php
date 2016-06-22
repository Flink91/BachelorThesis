<?php
class FluidCache_Standalone_partial_ConfigurationEditor_AvailableVariables_d963fb2d6edbedb1ccaf39a09b992a774dd04264 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<select class="availableVariables select" id="variables_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = $currentVariableContainer->getOrNull('uniqueIdentifier');
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() {return NULL;};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1['encoding'] !== NULL ? $arguments1['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1['doubleEncode']));

$output0 .= '">
	<option></option>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('showFields'));
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
		<optgroup label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments7 = array();
$arguments7['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:availableVariables';
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '" class="c-divider">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments9 = array();
$arguments9['each'] = $currentVariableContainer->getOrNull('availableFields');
$arguments9['as'] = 'field';
$arguments9['key'] = '';
$arguments9['reverse'] = false;
$arguments9['iteration'] = NULL;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments12 = array();
// Rendering Boolean node
$arguments12['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'type', $renderingContext), 2);
$arguments12['then'] = NULL;
$arguments12['else'] = NULL;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output14 = '';

$output14 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments15 = array();
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output17 = '';

$output17 .= '
					<option value=\'f:';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper
$arguments18 = array();
$arguments18['subject'] = '\\<f:for each="{field.';
$arguments18['performTrim'] = false;
$renderChildrenClosure19 = function() {return NULL;};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper');
$viewHelper20->setArguments($arguments18);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper

$output17 .= $viewHelper20->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments21 = array();
$arguments21['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'variable', $renderingContext);
$arguments21['keepQuotes'] = false;
$arguments21['encoding'] = NULL;
$arguments21['doubleEncode'] = true;
$renderChildrenClosure22 = function() {return NULL;};
$value23 = ($arguments21['value'] !== NULL ? $arguments21['value'] : $renderChildrenClosure22());

$output17 .= (!is_string($value23) ? $value23 : htmlspecialchars($value23, ($arguments21['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments21['encoding'] !== NULL ? $arguments21['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments21['doubleEncode']));
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper
$arguments24 = array();
$arguments24['subject'] = '\\}" as=" ';
// Rendering Boolean node
$arguments24['performTrim'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$renderChildrenClosure25 = function() {return NULL;};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper');
$viewHelper26->setArguments($arguments24);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper

$output17 .= $viewHelper26->initializeArgumentsAndRender();
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StrtolowerViewHelper
$arguments27 = array();
$arguments27['subject'] = NULL;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments29 = array();
$arguments29['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'section_fields_tag', $renderingContext);
$arguments29['keepQuotes'] = false;
$arguments29['encoding'] = NULL;
$arguments29['doubleEncode'] = true;
$renderChildrenClosure30 = function() {return NULL;};
$value31 = ($arguments29['value'] !== NULL ? $arguments29['value'] : $renderChildrenClosure30());
return (!is_string($value31) ? $value31 : htmlspecialchars($value31, ($arguments29['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments29['encoding'] !== NULL ? $arguments29['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments29['doubleEncode']));
};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\StrtolowerViewHelper');
$viewHelper32->setArguments($arguments27);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure28);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StrtolowerViewHelper

$output17 .= $viewHelper32->initializeArgumentsAndRender();
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper
$arguments33 = array();
$arguments33['subject'] = '">';
$arguments33['performTrim'] = false;
$renderChildrenClosure34 = function() {return NULL;};
$viewHelper35 = $self->getViewHelper('$viewHelper35', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper');
$viewHelper35->setArguments($arguments33);
$viewHelper35->setRenderingContext($renderingContext);
$viewHelper35->setRenderChildrenClosure($renderChildrenClosure34);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper

$output17 .= $viewHelper35->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments36 = array();
$arguments36['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'sectionFields', $renderingContext);
$arguments36['as'] = 'sectionField';
$arguments36['key'] = '';
$arguments36['reverse'] = false;
$arguments36['iteration'] = NULL;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments39 = array();
$arguments39['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('sectionField'), 'title', $renderingContext);
$arguments39['keepQuotes'] = false;
$arguments39['encoding'] = NULL;
$arguments39['doubleEncode'] = true;
$renderChildrenClosure40 = function() {return NULL;};
$value41 = ($arguments39['value'] !== NULL ? $arguments39['value'] : $renderChildrenClosure40());

$output38 .= (!is_string($value41) ? $value41 : htmlspecialchars($value41, ($arguments39['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments39['encoding'] !== NULL ? $arguments39['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments39['doubleEncode']));

$output38 .= ': ';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper
$arguments42 = array();
$arguments42['subject'] = '\\{';
$arguments42['performTrim'] = false;
$renderChildrenClosure43 = function() {return NULL;};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper');
$viewHelper44->setArguments($arguments42);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper

$output38 .= $viewHelper44->initializeArgumentsAndRender();
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StrtolowerViewHelper
$arguments45 = array();
$arguments45['subject'] = NULL;
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments47 = array();
$arguments47['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'section_fields_tag', $renderingContext);
$arguments47['keepQuotes'] = false;
$arguments47['encoding'] = NULL;
$arguments47['doubleEncode'] = true;
$renderChildrenClosure48 = function() {return NULL;};
$value49 = ($arguments47['value'] !== NULL ? $arguments47['value'] : $renderChildrenClosure48());
return (!is_string($value49) ? $value49 : htmlspecialchars($value49, ($arguments47['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments47['encoding'] !== NULL ? $arguments47['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments47['doubleEncode']));
};
$viewHelper50 = $self->getViewHelper('$viewHelper50', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\StrtolowerViewHelper');
$viewHelper50->setArguments($arguments45);
$viewHelper50->setRenderingContext($renderingContext);
$viewHelper50->setRenderChildrenClosure($renderChildrenClosure46);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StrtolowerViewHelper

$output38 .= $viewHelper50->initializeArgumentsAndRender();

$output38 .= '.';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments51 = array();
$arguments51['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('sectionField'), 'variable', $renderingContext);
$arguments51['keepQuotes'] = false;
$arguments51['encoding'] = NULL;
$arguments51['doubleEncode'] = true;
$renderChildrenClosure52 = function() {return NULL;};
$value53 = ($arguments51['value'] !== NULL ? $arguments51['value'] : $renderChildrenClosure52());

$output38 .= (!is_string($value53) ? $value53 : htmlspecialchars($value53, ($arguments51['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments51['encoding'] !== NULL ? $arguments51['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments51['doubleEncode']));
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper
$arguments54 = array();
$arguments54['subject'] = '\\}';
$arguments54['performTrim'] = false;
$renderChildrenClosure55 = function() {return NULL;};
$viewHelper56 = $self->getViewHelper('$viewHelper56', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper');
$viewHelper56->setArguments($arguments54);
$viewHelper56->setRenderingContext($renderingContext);
$viewHelper56->setRenderChildrenClosure($renderChildrenClosure55);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper

$output38 .= $viewHelper56->initializeArgumentsAndRender();

$output38 .= '<br />';
return $output38;
};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output17 .= '
	';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper
$arguments57 = array();
$arguments57['subject'] = '<\\/f:for>';
$arguments57['performTrim'] = false;
$renderChildrenClosure58 = function() {return NULL;};
$viewHelper59 = $self->getViewHelper('$viewHelper59', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper');
$viewHelper59->setArguments($arguments57);
$viewHelper59->setRenderingContext($renderingContext);
$viewHelper59->setRenderChildrenClosure($renderChildrenClosure58);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper

$output17 .= $viewHelper59->initializeArgumentsAndRender();

$output17 .= '\'>';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\WrapWithCurlyBracesViewHelper
$arguments60 = array();
$arguments60['prepend'] = 'field.';
$arguments60['subject'] = NULL;
$arguments60['append'] = '';
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments62 = array();
$arguments62['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'variable', $renderingContext);
$arguments62['keepQuotes'] = false;
$arguments62['encoding'] = NULL;
$arguments62['doubleEncode'] = true;
$renderChildrenClosure63 = function() {return NULL;};
$value64 = ($arguments62['value'] !== NULL ? $arguments62['value'] : $renderChildrenClosure63());
return (!is_string($value64) ? $value64 : htmlspecialchars($value64, ($arguments62['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments62['encoding'] !== NULL ? $arguments62['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments62['doubleEncode']));
};
$viewHelper65 = $self->getViewHelper('$viewHelper65', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\WrapWithCurlyBracesViewHelper');
$viewHelper65->setArguments($arguments60);
$viewHelper65->setRenderingContext($renderingContext);
$viewHelper65->setRenderChildrenClosure($renderChildrenClosure61);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\WrapWithCurlyBracesViewHelper

$output17 .= $viewHelper65->initializeArgumentsAndRender();

$output17 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments66 = array();
$arguments66['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'title', $renderingContext);
$arguments66['keepQuotes'] = false;
$arguments66['encoding'] = NULL;
$arguments66['doubleEncode'] = true;
$renderChildrenClosure67 = function() {return NULL;};
$value68 = ($arguments66['value'] !== NULL ? $arguments66['value'] : $renderChildrenClosure67());

$output17 .= (!is_string($value68) ? $value68 : htmlspecialchars($value68, ($arguments66['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments66['encoding'] !== NULL ? $arguments66['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments66['doubleEncode']));

$output17 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments69 = array();
$arguments69['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:useForViewhelper';
$arguments69['id'] = NULL;
$arguments69['default'] = NULL;
$arguments69['htmlEscape'] = NULL;
$arguments69['arguments'] = NULL;
$arguments69['extensionName'] = NULL;
$renderChildrenClosure70 = function() {return NULL;};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output17 .= ')</option>
				';
return $output17;
};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments71 = array();
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output73 = '';

$output73 .= '
					<option value="v:field.';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments74 = array();
$arguments74['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'variable', $renderingContext);
$arguments74['keepQuotes'] = false;
$arguments74['encoding'] = NULL;
$arguments74['doubleEncode'] = true;
$renderChildrenClosure75 = function() {return NULL;};
$value76 = ($arguments74['value'] !== NULL ? $arguments74['value'] : $renderChildrenClosure75());

$output73 .= (!is_string($value76) ? $value76 : htmlspecialchars($value76, ($arguments74['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments74['encoding'] !== NULL ? $arguments74['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments74['doubleEncode']));

$output73 .= '">';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\WrapWithCurlyBracesViewHelper
$arguments77 = array();
$arguments77['prepend'] = 'field.';
$arguments77['subject'] = NULL;
$arguments77['append'] = '';
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments79 = array();
$arguments79['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'variable', $renderingContext);
$arguments79['keepQuotes'] = false;
$arguments79['encoding'] = NULL;
$arguments79['doubleEncode'] = true;
$renderChildrenClosure80 = function() {return NULL;};
$value81 = ($arguments79['value'] !== NULL ? $arguments79['value'] : $renderChildrenClosure80());
return (!is_string($value81) ? $value81 : htmlspecialchars($value81, ($arguments79['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments79['encoding'] !== NULL ? $arguments79['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments79['doubleEncode']));
};
$viewHelper82 = $self->getViewHelper('$viewHelper82', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\WrapWithCurlyBracesViewHelper');
$viewHelper82->setArguments($arguments77);
$viewHelper82->setRenderingContext($renderingContext);
$viewHelper82->setRenderChildrenClosure($renderChildrenClosure78);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\WrapWithCurlyBracesViewHelper

$output73 .= $viewHelper82->initializeArgumentsAndRender();

$output73 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments83 = array();
$arguments83['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'title', $renderingContext);
$arguments83['keepQuotes'] = false;
$arguments83['encoding'] = NULL;
$arguments83['doubleEncode'] = true;
$renderChildrenClosure84 = function() {return NULL;};
$value85 = ($arguments83['value'] !== NULL ? $arguments83['value'] : $renderChildrenClosure84());

$output73 .= (!is_string($value85) ? $value85 : htmlspecialchars($value85, ($arguments83['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments83['encoding'] !== NULL ? $arguments83['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments83['doubleEncode']));

$output73 .= '</option>
				';
return $output73;
};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output14 .= '
			';
return $output14;
};
$arguments12['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output86 = '';

$output86 .= '
					<option value=\'f:';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper
$arguments87 = array();
$arguments87['subject'] = '\\<f:for each="{field.';
$arguments87['performTrim'] = false;
$renderChildrenClosure88 = function() {return NULL;};
$viewHelper89 = $self->getViewHelper('$viewHelper89', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper');
$viewHelper89->setArguments($arguments87);
$viewHelper89->setRenderingContext($renderingContext);
$viewHelper89->setRenderChildrenClosure($renderChildrenClosure88);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper

$output86 .= $viewHelper89->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments90 = array();
$arguments90['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'variable', $renderingContext);
$arguments90['keepQuotes'] = false;
$arguments90['encoding'] = NULL;
$arguments90['doubleEncode'] = true;
$renderChildrenClosure91 = function() {return NULL;};
$value92 = ($arguments90['value'] !== NULL ? $arguments90['value'] : $renderChildrenClosure91());

$output86 .= (!is_string($value92) ? $value92 : htmlspecialchars($value92, ($arguments90['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments90['encoding'] !== NULL ? $arguments90['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments90['doubleEncode']));
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper
$arguments93 = array();
$arguments93['subject'] = '\\}" as=" ';
// Rendering Boolean node
$arguments93['performTrim'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$renderChildrenClosure94 = function() {return NULL;};
$viewHelper95 = $self->getViewHelper('$viewHelper95', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper');
$viewHelper95->setArguments($arguments93);
$viewHelper95->setRenderingContext($renderingContext);
$viewHelper95->setRenderChildrenClosure($renderChildrenClosure94);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper

$output86 .= $viewHelper95->initializeArgumentsAndRender();
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StrtolowerViewHelper
$arguments96 = array();
$arguments96['subject'] = NULL;
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments98 = array();
$arguments98['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'section_fields_tag', $renderingContext);
$arguments98['keepQuotes'] = false;
$arguments98['encoding'] = NULL;
$arguments98['doubleEncode'] = true;
$renderChildrenClosure99 = function() {return NULL;};
$value100 = ($arguments98['value'] !== NULL ? $arguments98['value'] : $renderChildrenClosure99());
return (!is_string($value100) ? $value100 : htmlspecialchars($value100, ($arguments98['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments98['encoding'] !== NULL ? $arguments98['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments98['doubleEncode']));
};
$viewHelper101 = $self->getViewHelper('$viewHelper101', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\StrtolowerViewHelper');
$viewHelper101->setArguments($arguments96);
$viewHelper101->setRenderingContext($renderingContext);
$viewHelper101->setRenderChildrenClosure($renderChildrenClosure97);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StrtolowerViewHelper

$output86 .= $viewHelper101->initializeArgumentsAndRender();
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper
$arguments102 = array();
$arguments102['subject'] = '">';
$arguments102['performTrim'] = false;
$renderChildrenClosure103 = function() {return NULL;};
$viewHelper104 = $self->getViewHelper('$viewHelper104', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper');
$viewHelper104->setArguments($arguments102);
$viewHelper104->setRenderingContext($renderingContext);
$viewHelper104->setRenderChildrenClosure($renderChildrenClosure103);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper

$output86 .= $viewHelper104->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments105 = array();
$arguments105['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'sectionFields', $renderingContext);
$arguments105['as'] = 'sectionField';
$arguments105['key'] = '';
$arguments105['reverse'] = false;
$arguments105['iteration'] = NULL;
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output107 = '';

$output107 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments108 = array();
$arguments108['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('sectionField'), 'title', $renderingContext);
$arguments108['keepQuotes'] = false;
$arguments108['encoding'] = NULL;
$arguments108['doubleEncode'] = true;
$renderChildrenClosure109 = function() {return NULL;};
$value110 = ($arguments108['value'] !== NULL ? $arguments108['value'] : $renderChildrenClosure109());

$output107 .= (!is_string($value110) ? $value110 : htmlspecialchars($value110, ($arguments108['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments108['encoding'] !== NULL ? $arguments108['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments108['doubleEncode']));

$output107 .= ': ';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper
$arguments111 = array();
$arguments111['subject'] = '\\{';
$arguments111['performTrim'] = false;
$renderChildrenClosure112 = function() {return NULL;};
$viewHelper113 = $self->getViewHelper('$viewHelper113', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper');
$viewHelper113->setArguments($arguments111);
$viewHelper113->setRenderingContext($renderingContext);
$viewHelper113->setRenderChildrenClosure($renderChildrenClosure112);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper

$output107 .= $viewHelper113->initializeArgumentsAndRender();
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StrtolowerViewHelper
$arguments114 = array();
$arguments114['subject'] = NULL;
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments116 = array();
$arguments116['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'section_fields_tag', $renderingContext);
$arguments116['keepQuotes'] = false;
$arguments116['encoding'] = NULL;
$arguments116['doubleEncode'] = true;
$renderChildrenClosure117 = function() {return NULL;};
$value118 = ($arguments116['value'] !== NULL ? $arguments116['value'] : $renderChildrenClosure117());
return (!is_string($value118) ? $value118 : htmlspecialchars($value118, ($arguments116['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments116['encoding'] !== NULL ? $arguments116['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments116['doubleEncode']));
};
$viewHelper119 = $self->getViewHelper('$viewHelper119', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\StrtolowerViewHelper');
$viewHelper119->setArguments($arguments114);
$viewHelper119->setRenderingContext($renderingContext);
$viewHelper119->setRenderChildrenClosure($renderChildrenClosure115);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StrtolowerViewHelper

$output107 .= $viewHelper119->initializeArgumentsAndRender();

$output107 .= '.';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments120 = array();
$arguments120['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('sectionField'), 'variable', $renderingContext);
$arguments120['keepQuotes'] = false;
$arguments120['encoding'] = NULL;
$arguments120['doubleEncode'] = true;
$renderChildrenClosure121 = function() {return NULL;};
$value122 = ($arguments120['value'] !== NULL ? $arguments120['value'] : $renderChildrenClosure121());

$output107 .= (!is_string($value122) ? $value122 : htmlspecialchars($value122, ($arguments120['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments120['encoding'] !== NULL ? $arguments120['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments120['doubleEncode']));
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper
$arguments123 = array();
$arguments123['subject'] = '\\}';
$arguments123['performTrim'] = false;
$renderChildrenClosure124 = function() {return NULL;};
$viewHelper125 = $self->getViewHelper('$viewHelper125', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper');
$viewHelper125->setArguments($arguments123);
$viewHelper125->setRenderingContext($renderingContext);
$viewHelper125->setRenderChildrenClosure($renderChildrenClosure124);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper

$output107 .= $viewHelper125->initializeArgumentsAndRender();

$output107 .= '<br />';
return $output107;
};

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output86 .= '
	';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper
$arguments126 = array();
$arguments126['subject'] = '<\\/f:for>';
$arguments126['performTrim'] = false;
$renderChildrenClosure127 = function() {return NULL;};
$viewHelper128 = $self->getViewHelper('$viewHelper128', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper');
$viewHelper128->setArguments($arguments126);
$viewHelper128->setRenderingContext($renderingContext);
$viewHelper128->setRenderChildrenClosure($renderChildrenClosure127);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\StripslashesViewHelper

$output86 .= $viewHelper128->initializeArgumentsAndRender();

$output86 .= '\'>';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\WrapWithCurlyBracesViewHelper
$arguments129 = array();
$arguments129['prepend'] = 'field.';
$arguments129['subject'] = NULL;
$arguments129['append'] = '';
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments131 = array();
$arguments131['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'variable', $renderingContext);
$arguments131['keepQuotes'] = false;
$arguments131['encoding'] = NULL;
$arguments131['doubleEncode'] = true;
$renderChildrenClosure132 = function() {return NULL;};
$value133 = ($arguments131['value'] !== NULL ? $arguments131['value'] : $renderChildrenClosure132());
return (!is_string($value133) ? $value133 : htmlspecialchars($value133, ($arguments131['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments131['encoding'] !== NULL ? $arguments131['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments131['doubleEncode']));
};
$viewHelper134 = $self->getViewHelper('$viewHelper134', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\WrapWithCurlyBracesViewHelper');
$viewHelper134->setArguments($arguments129);
$viewHelper134->setRenderingContext($renderingContext);
$viewHelper134->setRenderChildrenClosure($renderChildrenClosure130);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\WrapWithCurlyBracesViewHelper

$output86 .= $viewHelper134->initializeArgumentsAndRender();

$output86 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments135 = array();
$arguments135['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'title', $renderingContext);
$arguments135['keepQuotes'] = false;
$arguments135['encoding'] = NULL;
$arguments135['doubleEncode'] = true;
$renderChildrenClosure136 = function() {return NULL;};
$value137 = ($arguments135['value'] !== NULL ? $arguments135['value'] : $renderChildrenClosure136());

$output86 .= (!is_string($value137) ? $value137 : htmlspecialchars($value137, ($arguments135['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments135['encoding'] !== NULL ? $arguments135['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments135['doubleEncode']));

$output86 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments138 = array();
$arguments138['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:useForViewhelper';
$arguments138['id'] = NULL;
$arguments138['default'] = NULL;
$arguments138['htmlEscape'] = NULL;
$arguments138['arguments'] = NULL;
$arguments138['extensionName'] = NULL;
$renderChildrenClosure139 = function() {return NULL;};

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output86 .= ')</option>
				';
return $output86;
};
$arguments12['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output140 = '';

$output140 .= '
					<option value="v:field.';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments141 = array();
$arguments141['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'variable', $renderingContext);
$arguments141['keepQuotes'] = false;
$arguments141['encoding'] = NULL;
$arguments141['doubleEncode'] = true;
$renderChildrenClosure142 = function() {return NULL;};
$value143 = ($arguments141['value'] !== NULL ? $arguments141['value'] : $renderChildrenClosure142());

$output140 .= (!is_string($value143) ? $value143 : htmlspecialchars($value143, ($arguments141['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments141['encoding'] !== NULL ? $arguments141['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments141['doubleEncode']));

$output140 .= '">';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\WrapWithCurlyBracesViewHelper
$arguments144 = array();
$arguments144['prepend'] = 'field.';
$arguments144['subject'] = NULL;
$arguments144['append'] = '';
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments146 = array();
$arguments146['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'variable', $renderingContext);
$arguments146['keepQuotes'] = false;
$arguments146['encoding'] = NULL;
$arguments146['doubleEncode'] = true;
$renderChildrenClosure147 = function() {return NULL;};
$value148 = ($arguments146['value'] !== NULL ? $arguments146['value'] : $renderChildrenClosure147());
return (!is_string($value148) ? $value148 : htmlspecialchars($value148, ($arguments146['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments146['encoding'] !== NULL ? $arguments146['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments146['doubleEncode']));
};
$viewHelper149 = $self->getViewHelper('$viewHelper149', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\WrapWithCurlyBracesViewHelper');
$viewHelper149->setArguments($arguments144);
$viewHelper149->setRenderingContext($renderingContext);
$viewHelper149->setRenderChildrenClosure($renderChildrenClosure145);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\WrapWithCurlyBracesViewHelper

$output140 .= $viewHelper149->initializeArgumentsAndRender();

$output140 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments150 = array();
$arguments150['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'title', $renderingContext);
$arguments150['keepQuotes'] = false;
$arguments150['encoding'] = NULL;
$arguments150['doubleEncode'] = true;
$renderChildrenClosure151 = function() {return NULL;};
$value152 = ($arguments150['value'] !== NULL ? $arguments150['value'] : $renderChildrenClosure151());

$output140 .= (!is_string($value152) ? $value152 : htmlspecialchars($value152, ($arguments150['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments150['encoding'] !== NULL ? $arguments150['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments150['doubleEncode']));

$output140 .= '</option>
				';
return $output140;
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments153 = array();
// Rendering Boolean node
$arguments153['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'hasSectionFields', $renderingContext));
$arguments153['then'] = NULL;
$arguments153['else'] = NULL;
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output155 = '';

$output155 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments156 = array();
$arguments156['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'sectionFields', $renderingContext);
$arguments156['as'] = 'sectionField';
$arguments156['key'] = '';
$arguments156['reverse'] = false;
$arguments156['iteration'] = NULL;
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output158 = '';

$output158 .= '
					<option value="f:.';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments159 = array();
$arguments159['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('sectionField'), 'variable', $renderingContext);
$arguments159['keepQuotes'] = false;
$arguments159['encoding'] = NULL;
$arguments159['doubleEncode'] = true;
$renderChildrenClosure160 = function() {return NULL;};
$value161 = ($arguments159['value'] !== NULL ? $arguments159['value'] : $renderChildrenClosure160());

$output158 .= (!is_string($value161) ? $value161 : htmlspecialchars($value161, ($arguments159['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments159['encoding'] !== NULL ? $arguments159['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments159['doubleEncode']));

$output158 .= '">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments162 = array();
$arguments162['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('sectionField'), 'variable', $renderingContext);
$arguments162['keepQuotes'] = false;
$arguments162['encoding'] = NULL;
$arguments162['doubleEncode'] = true;
$renderChildrenClosure163 = function() {return NULL;};
$value164 = ($arguments162['value'] !== NULL ? $arguments162['value'] : $renderChildrenClosure163());

$output158 .= (!is_string($value164) ? $value164 : htmlspecialchars($value164, ($arguments162['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments162['encoding'] !== NULL ? $arguments162['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments162['doubleEncode']));

$output158 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments165 = array();
$arguments165['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('sectionField'), 'title', $renderingContext);
$arguments165['keepQuotes'] = false;
$arguments165['encoding'] = NULL;
$arguments165['doubleEncode'] = true;
$renderChildrenClosure166 = function() {return NULL;};
$value167 = ($arguments165['value'] !== NULL ? $arguments165['value'] : $renderChildrenClosure166());

$output158 .= (!is_string($value167) ? $value167 : htmlspecialchars($value167, ($arguments165['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments165['encoding'] !== NULL ? $arguments165['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments165['doubleEncode']));

$output158 .= '</option>
				';
return $output158;
};

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output155 .= '
			';
return $output155;
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output11 .= '
		';
return $output11;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output6 .= '
		</optgroup>
	';
return $output6;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
	<optgroup label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments168 = array();
$arguments168['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:availableBaseVariables';
$arguments168['id'] = NULL;
$arguments168['default'] = NULL;
$arguments168['htmlEscape'] = NULL;
$arguments168['arguments'] = NULL;
$arguments168['extensionName'] = NULL;
$renderChildrenClosure169 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output0 .= '" class="c-divider">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments170 = array();
// Rendering Boolean node
$arguments170['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('showFields'));
$arguments170['then'] = NULL;
$arguments170['else'] = NULL;
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output172 = '';

$output172 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments173 = array();
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output175 = '';

$output175 .= '
			<option value="v:dce">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments176 = array();
$arguments176['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:dceObjectNode';
$arguments176['id'] = NULL;
$arguments176['default'] = NULL;
$arguments176['htmlEscape'] = NULL;
$arguments176['arguments'] = NULL;
$arguments176['extensionName'] = NULL;
$renderChildrenClosure177 = function() {return NULL;};

$output175 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output175 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments178 = array();
$arguments178['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:dceObject';
$arguments178['id'] = NULL;
$arguments178['default'] = NULL;
$arguments178['htmlEscape'] = NULL;
$arguments178['arguments'] = NULL;
$arguments178['extensionName'] = NULL;
$renderChildrenClosure179 = function() {return NULL;};

$output175 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);

$output175 .= '</option>
			<option value="v:contentObject">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments180 = array();
$arguments180['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:contentObjectNode';
$arguments180['id'] = NULL;
$arguments180['default'] = NULL;
$arguments180['htmlEscape'] = NULL;
$arguments180['arguments'] = NULL;
$arguments180['extensionName'] = NULL;
$renderChildrenClosure181 = function() {return NULL;};

$output175 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output175 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments182 = array();
$arguments182['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:contentObject';
$arguments182['id'] = NULL;
$arguments182['default'] = NULL;
$arguments182['htmlEscape'] = NULL;
$arguments182['arguments'] = NULL;
$arguments182['extensionName'] = NULL;
$renderChildrenClosure183 = function() {return NULL;};

$output175 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output175 .= '</option>
			';
return $output175;
};

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output172 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments184 = array();
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output186 = '';

$output186 .= '
				<option value="v:dces">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments187 = array();
$arguments187['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:dcesObjectNode';
$arguments187['id'] = NULL;
$arguments187['default'] = NULL;
$arguments187['htmlEscape'] = NULL;
$arguments187['arguments'] = NULL;
$arguments187['extensionName'] = NULL;
$renderChildrenClosure188 = function() {return NULL;};

$output186 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output186 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments189 = array();
$arguments189['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:dcesObject';
$arguments189['id'] = NULL;
$arguments189['default'] = NULL;
$arguments189['htmlEscape'] = NULL;
$arguments189['arguments'] = NULL;
$arguments189['extensionName'] = NULL;
$renderChildrenClosure190 = function() {return NULL;};

$output186 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output186 .= '</option>
			';
return $output186;
};

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output172 .= '
		';
return $output172;
};
$arguments170['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output191 = '';

$output191 .= '
			<option value="v:dce">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments192 = array();
$arguments192['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:dceObjectNode';
$arguments192['id'] = NULL;
$arguments192['default'] = NULL;
$arguments192['htmlEscape'] = NULL;
$arguments192['arguments'] = NULL;
$arguments192['extensionName'] = NULL;
$renderChildrenClosure193 = function() {return NULL;};

$output191 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output191 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments194 = array();
$arguments194['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:dceObject';
$arguments194['id'] = NULL;
$arguments194['default'] = NULL;
$arguments194['htmlEscape'] = NULL;
$arguments194['arguments'] = NULL;
$arguments194['extensionName'] = NULL;
$renderChildrenClosure195 = function() {return NULL;};

$output191 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output191 .= '</option>
			<option value="v:contentObject">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments196 = array();
$arguments196['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:contentObjectNode';
$arguments196['id'] = NULL;
$arguments196['default'] = NULL;
$arguments196['htmlEscape'] = NULL;
$arguments196['arguments'] = NULL;
$arguments196['extensionName'] = NULL;
$renderChildrenClosure197 = function() {return NULL;};

$output191 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output191 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments198 = array();
$arguments198['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:contentObject';
$arguments198['id'] = NULL;
$arguments198['default'] = NULL;
$arguments198['htmlEscape'] = NULL;
$arguments198['arguments'] = NULL;
$arguments198['extensionName'] = NULL;
$renderChildrenClosure199 = function() {return NULL;};

$output191 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output191 .= '</option>
			';
return $output191;
};
$arguments170['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output200 = '';

$output200 .= '
				<option value="v:dces">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments201 = array();
$arguments201['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:dcesObjectNode';
$arguments201['id'] = NULL;
$arguments201['default'] = NULL;
$arguments201['htmlEscape'] = NULL;
$arguments201['arguments'] = NULL;
$arguments201['extensionName'] = NULL;
$renderChildrenClosure202 = function() {return NULL;};

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output200 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments203 = array();
$arguments203['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:dcesObject';
$arguments203['id'] = NULL;
$arguments203['default'] = NULL;
$arguments203['htmlEscape'] = NULL;
$arguments203['arguments'] = NULL;
$arguments203['extensionName'] = NULL;
$renderChildrenClosure204 = function() {return NULL;};

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output200 .= '</option>
			';
return $output200;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output0 .= '
		<option value="v:TSFE">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments205 = array();
$arguments205['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:tsfeObjectNode';
$arguments205['id'] = NULL;
$arguments205['default'] = NULL;
$arguments205['htmlEscape'] = NULL;
$arguments205['arguments'] = NULL;
$arguments205['extensionName'] = NULL;
$renderChildrenClosure206 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output0 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments207 = array();
$arguments207['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:tsfeObject';
$arguments207['id'] = NULL;
$arguments207['default'] = NULL;
$arguments207['htmlEscape'] = NULL;
$arguments207['arguments'] = NULL;
$arguments207['extensionName'] = NULL;
$renderChildrenClosure208 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output0 .= '</option>
		<option value="v:page">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments209 = array();
$arguments209['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:pageObjectNode';
$arguments209['id'] = NULL;
$arguments209['default'] = NULL;
$arguments209['htmlEscape'] = NULL;
$arguments209['arguments'] = NULL;
$arguments209['extensionName'] = NULL;
$renderChildrenClosure210 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

$output0 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments211 = array();
$arguments211['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:pageObject';
$arguments211['id'] = NULL;
$arguments211['default'] = NULL;
$arguments211['htmlEscape'] = NULL;
$arguments211['arguments'] = NULL;
$arguments211['extensionName'] = NULL;
$renderChildrenClosure212 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output0 .= '</option>
		<option value="v:tsSetup">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments213 = array();
$arguments213['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:tsSetupObjectNode';
$arguments213['id'] = NULL;
$arguments213['default'] = NULL;
$arguments213['htmlEscape'] = NULL;
$arguments213['arguments'] = NULL;
$arguments213['extensionName'] = NULL;
$renderChildrenClosure214 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output0 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments215 = array();
$arguments215['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:tsSetupObject';
$arguments215['id'] = NULL;
$arguments215['default'] = NULL;
$arguments215['htmlEscape'] = NULL;
$arguments215['arguments'] = NULL;
$arguments215['extensionName'] = NULL;
$renderChildrenClosure216 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output0 .= '</option>
	</optgroup>
	<optgroup label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments217 = array();
$arguments217['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:famousViewHelper';
$arguments217['id'] = NULL;
$arguments217['default'] = NULL;
$arguments217['htmlEscape'] = NULL;
$arguments217['arguments'] = NULL;
$arguments217['extensionName'] = NULL;
$renderChildrenClosure218 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output0 .= '" class="c-divider">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments219 = array();
$arguments219['each'] = $currentVariableContainer->getOrNull('famousViewHelpers');
$arguments219['as'] = 'viewhelperValue';
$arguments219['key'] = 'viewhelperName';
$arguments219['reverse'] = false;
$arguments219['iteration'] = NULL;
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output221 = '';

$output221 .= '
			<option value="f:';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments222 = array();
$arguments222['value'] = $currentVariableContainer->getOrNull('viewhelperValue');
$arguments222['keepQuotes'] = false;
$arguments222['encoding'] = NULL;
$arguments222['doubleEncode'] = true;
$renderChildrenClosure223 = function() {return NULL;};
$value224 = ($arguments222['value'] !== NULL ? $arguments222['value'] : $renderChildrenClosure223());

$output221 .= (!is_string($value224) ? $value224 : htmlspecialchars($value224, ($arguments222['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments222['encoding'] !== NULL ? $arguments222['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments222['doubleEncode']));

$output221 .= '">f:';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments225 = array();
$arguments225['value'] = $currentVariableContainer->getOrNull('viewhelperName');
$arguments225['keepQuotes'] = false;
$arguments225['encoding'] = NULL;
$arguments225['doubleEncode'] = true;
$renderChildrenClosure226 = function() {return NULL;};
$value227 = ($arguments225['value'] !== NULL ? $arguments225['value'] : $renderChildrenClosure226());

$output221 .= (!is_string($value227) ? $value227 : htmlspecialchars($value227, ($arguments225['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments225['encoding'] !== NULL ? $arguments225['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments225['doubleEncode']));

$output221 .= '</option>
		';
return $output221;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output0 .= '
	</optgroup>
	<optgroup label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments228 = array();
$arguments228['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang.xml:dceViewHelper';
$arguments228['id'] = NULL;
$arguments228['default'] = NULL;
$arguments228['htmlEscape'] = NULL;
$arguments228['arguments'] = NULL;
$arguments228['extensionName'] = NULL;
$renderChildrenClosure229 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output0 .= '" class="c-divider">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments230 = array();
$arguments230['each'] = $currentVariableContainer->getOrNull('dceViewHelpers');
$arguments230['as'] = 'dceViewhelperValue';
$arguments230['key'] = 'dceViewhelperName';
$arguments230['reverse'] = false;
$arguments230['iteration'] = NULL;
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output232 = '';

$output232 .= '
			<option value="f:';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments233 = array();
$arguments233['value'] = $currentVariableContainer->getOrNull('dceViewhelperValue');
$arguments233['keepQuotes'] = false;
$arguments233['encoding'] = NULL;
$arguments233['doubleEncode'] = true;
$renderChildrenClosure234 = function() {return NULL;};
$value235 = ($arguments233['value'] !== NULL ? $arguments233['value'] : $renderChildrenClosure234());

$output232 .= (!is_string($value235) ? $value235 : htmlspecialchars($value235, ($arguments233['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments233['encoding'] !== NULL ? $arguments233['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments233['doubleEncode']));

$output232 .= '">dce:';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments236 = array();
$arguments236['value'] = $currentVariableContainer->getOrNull('dceViewhelperName');
$arguments236['keepQuotes'] = false;
$arguments236['encoding'] = NULL;
$arguments236['doubleEncode'] = true;
$renderChildrenClosure237 = function() {return NULL;};
$value238 = ($arguments236['value'] !== NULL ? $arguments236['value'] : $renderChildrenClosure237());

$output232 .= (!is_string($value238) ? $value238 : htmlspecialchars($value238, ($arguments236['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments236['encoding'] !== NULL ? $arguments236['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments236['doubleEncode']));

$output232 .= '</option>
		';
return $output232;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);

$output0 .= '
	</optgroup>
</select>
';


return $output0;
}


}
#1466617618    64503     