<?php
class FluidCache_Standalone_template_file_localconf_ed95b7ea26846a0e408aa52d1870ca971a79d4d7 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<?php
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments1 = array();
$arguments1['each'] = $currentVariableContainer->getOrNull('dceArray');
$arguments1['as'] = 'dce';
$arguments1['key'] = '';
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'hidden', $renderingContext), 0);
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
///////////////////////////////////////////////////// ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments7 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments8 = array();
$arguments8['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments8['keepQuotes'] = false;
$arguments8['encoding'] = NULL;
$arguments8['doubleEncode'] = true;
$renderChildrenClosure9 = function() {return NULL;};
$value10 = ($arguments8['value'] !== NULL ? $arguments8['value'] : $renderChildrenClosure9());
$arguments7['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value10) ? $value10 : htmlspecialchars($value10, ($arguments8['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments8['encoding'] !== NULL ? $arguments8['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments8['doubleEncode'])));
$output11 = '';

$output11 .= 'uid: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments12 = array();
$arguments12['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments12['keepQuotes'] = false;
$arguments12['encoding'] = NULL;
$arguments12['doubleEncode'] = true;
$renderChildrenClosure13 = function() {return NULL;};
$value14 = ($arguments12['value'] !== NULL ? $arguments12['value'] : $renderChildrenClosure13());

$output11 .= (!is_string($value14) ? $value14 : htmlspecialchars($value14, ($arguments12['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments12['encoding'] !== NULL ? $arguments12['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments12['doubleEncode']));
$arguments7['then'] = $output11;
$output15 = '';

$output15 .= 'identifier: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'identifier', $renderingContext);
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = NULL;
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() {return NULL;};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());

$output15 .= (!is_string($value18) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments16['encoding'] !== NULL ? $arguments16['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments16['doubleEncode']));
$arguments7['else'] = $output15;
$renderChildrenClosure19 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure19, $renderingContext);

$output6 .= ' ///
\\TYPO3\\CMS\\Extbase\\Utility\\ExtensionUtility::configurePlugin(
	\'ArminVieweg.dce\',
	\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments20 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments21 = array();
$arguments21['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments21['keepQuotes'] = false;
$arguments21['encoding'] = NULL;
$arguments21['doubleEncode'] = true;
$renderChildrenClosure22 = function() {return NULL;};
$value23 = ($arguments21['value'] !== NULL ? $arguments21['value'] : $renderChildrenClosure22());
$arguments20['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value23) ? $value23 : htmlspecialchars($value23, ($arguments21['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments21['encoding'] !== NULL ? $arguments21['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments21['doubleEncode'])));
$output24 = '';

$output24 .= 'dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments25 = array();
$arguments25['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments25['keepQuotes'] = false;
$arguments25['encoding'] = NULL;
$arguments25['doubleEncode'] = true;
$renderChildrenClosure26 = function() {return NULL;};
$value27 = ($arguments25['value'] !== NULL ? $arguments25['value'] : $renderChildrenClosure26());

$output24 .= (!is_string($value27) ? $value27 : htmlspecialchars($value27, ($arguments25['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments25['encoding'] !== NULL ? $arguments25['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments25['doubleEncode']));
$arguments20['then'] = $output24;
$output28 = '';

$output28 .= 'dce_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments29 = array();
$arguments29['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'identifier', $renderingContext);
$arguments29['keepQuotes'] = false;
$arguments29['encoding'] = NULL;
$arguments29['doubleEncode'] = true;
$renderChildrenClosure30 = function() {return NULL;};
$value31 = ($arguments29['value'] !== NULL ? $arguments29['value'] : $renderChildrenClosure30());

$output28 .= (!is_string($value31) ? $value31 : htmlspecialchars($value31, ($arguments29['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments29['encoding'] !== NULL ? $arguments29['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments29['doubleEncode']));
$arguments20['else'] = $output28;
$renderChildrenClosure32 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure32, $renderingContext);

$output6 .= '\',
	array(
		\'Dce\' => \'show\',
	),
	array(
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments33 = array();
// Rendering Boolean node
$arguments33['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'cache_dce', $renderingContext));
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output35 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments36 = array();
$renderChildrenClosure37 = function() {return NULL;};

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments38 = array();
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '\'Dce\' => \'show\'';
};

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);
return $output35;
};
$arguments33['__thenClosure'] = function() {return NULL;};
$arguments33['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '\'Dce\' => \'show\'';
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output6 .= '
	),
    \\TYPO3\\CMS\\Extbase\\Utility\\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

\\TYPO3\\CMS\\Core\\Utility\\ExtensionManagementUtility::addTypoScript(\'dce\', \'setup\', \'
# Hide lib.stdheader for DCE with uid ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments40 = array();
$arguments40['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments40['keepQuotes'] = false;
$arguments40['encoding'] = NULL;
$arguments40['doubleEncode'] = true;
$renderChildrenClosure41 = function() {return NULL;};
$value42 = ($arguments40['value'] !== NULL ? $arguments40['value'] : $renderChildrenClosure41());

$output6 .= (!is_string($value42) ? $value42 : htmlspecialchars($value42, ($arguments40['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments40['encoding'] !== NULL ? $arguments40['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments40['doubleEncode']));

$output6 .= '
\' . \'tt_content.dce_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments43 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments44 = array();
$arguments44['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments44['keepQuotes'] = false;
$arguments44['encoding'] = NULL;
$arguments44['doubleEncode'] = true;
$renderChildrenClosure45 = function() {return NULL;};
$value46 = ($arguments44['value'] !== NULL ? $arguments44['value'] : $renderChildrenClosure45());
$arguments43['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value46) ? $value46 : htmlspecialchars($value46, ($arguments44['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments44['encoding'] !== NULL ? $arguments44['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments44['doubleEncode'])));
$output47 = '';

$output47 .= 'dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments48 = array();
$arguments48['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments48['keepQuotes'] = false;
$arguments48['encoding'] = NULL;
$arguments48['doubleEncode'] = true;
$renderChildrenClosure49 = function() {return NULL;};
$value50 = ($arguments48['value'] !== NULL ? $arguments48['value'] : $renderChildrenClosure49());

$output47 .= (!is_string($value50) ? $value50 : htmlspecialchars($value50, ($arguments48['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments48['encoding'] !== NULL ? $arguments48['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments48['doubleEncode']));
$arguments43['then'] = $output47;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments51 = array();
$arguments51['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'identifier', $renderingContext);
$arguments51['keepQuotes'] = false;
$arguments51['encoding'] = NULL;
$arguments51['doubleEncode'] = true;
$renderChildrenClosure52 = function() {return NULL;};
$value53 = ($arguments51['value'] !== NULL ? $arguments51['value'] : $renderChildrenClosure52());
$arguments43['else'] = (!is_string($value53) ? $value53 : htmlspecialchars($value53, ($arguments51['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments51['encoding'] !== NULL ? $arguments51['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments51['doubleEncode']));
$renderChildrenClosure54 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure54, $renderingContext);

$output6 .= '.10 >\', 43);

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments55 = array();
// Rendering Boolean node
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ExtensionLoadedViewHelper
$arguments56 = array();
$arguments56['key'] = 'css_styled_content';
$renderChildrenClosure57 = function() {return NULL;};
$viewHelper58 = $self->getViewHelper('$viewHelper58', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\ExtensionLoadedViewHelper');
$viewHelper58->setArguments($arguments56);
$viewHelper58->setRenderingContext($renderingContext);
$viewHelper58->setRenderChildrenClosure($renderChildrenClosure57);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ExtensionLoadedViewHelper
$arguments55['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper58->initializeArgumentsAndRender());
$arguments55['then'] = NULL;
$arguments55['else'] = NULL;
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output60 = '';

$output60 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments61 = array();
// Rendering Boolean node
$arguments61['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'hide_default_ce_wrap', $renderingContext));
$arguments61['then'] = NULL;
$arguments61['else'] = NULL;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output63 = '';

$output63 .= '
\\TYPO3\\CMS\\Core\\Utility\\ExtensionManagementUtility::addTypoScript(\'dce\', \'setup\', \'
# Hide default wrapping for content elements for DCE with uid ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments64 = array();
$arguments64['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments64['keepQuotes'] = false;
$arguments64['encoding'] = NULL;
$arguments64['doubleEncode'] = true;
$renderChildrenClosure65 = function() {return NULL;};
$value66 = ($arguments64['value'] !== NULL ? $arguments64['value'] : $renderChildrenClosure65());

$output63 .= (!is_string($value66) ? $value66 : htmlspecialchars($value66, ($arguments64['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments64['encoding'] !== NULL ? $arguments64['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments64['doubleEncode']));

$output63 .= '
\' . \'tt_content.stdWrap.innerWrap.cObject.default.stdWrap.if.value := addToList(dce_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments67 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments68 = array();
$arguments68['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments68['keepQuotes'] = false;
$arguments68['encoding'] = NULL;
$arguments68['doubleEncode'] = true;
$renderChildrenClosure69 = function() {return NULL;};
$value70 = ($arguments68['value'] !== NULL ? $arguments68['value'] : $renderChildrenClosure69());
$arguments67['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value70) ? $value70 : htmlspecialchars($value70, ($arguments68['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments68['encoding'] !== NULL ? $arguments68['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments68['doubleEncode'])));
$output71 = '';

$output71 .= 'dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments72 = array();
$arguments72['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments72['keepQuotes'] = false;
$arguments72['encoding'] = NULL;
$arguments72['doubleEncode'] = true;
$renderChildrenClosure73 = function() {return NULL;};
$value74 = ($arguments72['value'] !== NULL ? $arguments72['value'] : $renderChildrenClosure73());

$output71 .= (!is_string($value74) ? $value74 : htmlspecialchars($value74, ($arguments72['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments72['encoding'] !== NULL ? $arguments72['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments72['doubleEncode']));
$arguments67['then'] = $output71;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments75 = array();
$arguments75['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'identifier', $renderingContext);
$arguments75['keepQuotes'] = false;
$arguments75['encoding'] = NULL;
$arguments75['doubleEncode'] = true;
$renderChildrenClosure76 = function() {return NULL;};
$value77 = ($arguments75['value'] !== NULL ? $arguments75['value'] : $renderChildrenClosure76());
$arguments67['else'] = (!is_string($value77) ? $value77 : htmlspecialchars($value77, ($arguments75['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments75['encoding'] !== NULL ? $arguments75['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments75['doubleEncode']));
$renderChildrenClosure78 = function() {return NULL;};

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, $renderChildrenClosure78, $renderingContext);

$output63 .= ')\', 43);
';
return $output63;
};

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
';
return $output60;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments55, $renderChildrenClosure59, $renderingContext);

$output6 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments79 = array();
// Rendering Boolean node
$arguments79['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_enable', $renderingContext));
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output81 = '';

$output81 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments82 = array();
// Rendering Boolean node
$arguments82['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'hasCustomWizardIcon', $renderingContext));
$arguments82['then'] = NULL;
$arguments82['else'] = NULL;
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output84 = '';

$output84 .= '
		if (\\TYPO3\\CMS\\Core\\Utility\\GeneralUtility::compat_version(\'7.6\')) {
		$iconRegistry = \\TYPO3\\CMS\\Core\\Utility\\GeneralUtility::makeInstance(\'TYPO3\\CMS\\Core\\Imaging\\IconRegistry\');
		$iconRegistry->registerIcon(
		\'ext-dce-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments85 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments86 = array();
$arguments86['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments86['keepQuotes'] = false;
$arguments86['encoding'] = NULL;
$arguments86['doubleEncode'] = true;
$renderChildrenClosure87 = function() {return NULL;};
$value88 = ($arguments86['value'] !== NULL ? $arguments86['value'] : $renderChildrenClosure87());
$arguments85['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value88) ? $value88 : htmlspecialchars($value88, ($arguments86['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments86['encoding'] !== NULL ? $arguments86['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments86['doubleEncode'])));
$output89 = '';

$output89 .= 'dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments90 = array();
$arguments90['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments90['keepQuotes'] = false;
$arguments90['encoding'] = NULL;
$arguments90['doubleEncode'] = true;
$renderChildrenClosure91 = function() {return NULL;};
$value92 = ($arguments90['value'] !== NULL ? $arguments90['value'] : $renderChildrenClosure91());

$output89 .= (!is_string($value92) ? $value92 : htmlspecialchars($value92, ($arguments90['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments90['encoding'] !== NULL ? $arguments90['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments90['doubleEncode']));
$arguments85['then'] = $output89;
$output93 = '';

$output93 .= 'dce_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments94 = array();
$arguments94['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'identifier', $renderingContext);
$arguments94['keepQuotes'] = false;
$arguments94['encoding'] = NULL;
$arguments94['doubleEncode'] = true;
$renderChildrenClosure95 = function() {return NULL;};
$value96 = ($arguments94['value'] !== NULL ? $arguments94['value'] : $renderChildrenClosure95());

$output93 .= (!is_string($value96) ? $value96 : htmlspecialchars($value96, ($arguments94['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments94['encoding'] !== NULL ? $arguments94['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments94['doubleEncode']));
$arguments85['else'] = $output93;
$renderChildrenClosure97 = function() {return NULL;};

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments85, $renderChildrenClosure97, $renderingContext);

$output84 .= '-customwizardicon\',
		\'TYPO3\\CMS\\Core\\Imaging\\IconProvider\\BitmapIconProvider\',
		array(\'source\' => \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments98 = array();
$arguments98['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_custom_icon', $renderingContext);
$arguments98['keepQuotes'] = false;
$arguments98['encoding'] = NULL;
$arguments98['doubleEncode'] = true;
$renderChildrenClosure99 = function() {return NULL;};
$value100 = ($arguments98['value'] !== NULL ? $arguments98['value'] : $renderChildrenClosure99());

$output84 .= (!is_string($value100) ? $value100 : htmlspecialchars($value100, ($arguments98['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments98['encoding'] !== NULL ? $arguments98['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments98['doubleEncode']));

$output84 .= '\')
		);
		}
	';
return $output84;
};

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
	\\TYPO3\\CMS\\Core\\Utility\\ExtensionManagementUtility::addPageTSConfig(\'
	mod.wizards.newContentElement.wizardItems.';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments101 = array();
$arguments101['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_category', $renderingContext);
$arguments101['keepQuotes'] = false;
$arguments101['encoding'] = NULL;
$arguments101['doubleEncode'] = true;
$renderChildrenClosure102 = function() {return NULL;};
$value103 = ($arguments101['value'] !== NULL ? $arguments101['value'] : $renderChildrenClosure102());

$output81 .= (!is_string($value103) ? $value103 : htmlspecialchars($value103, ($arguments101['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments101['encoding'] !== NULL ? $arguments101['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments101['doubleEncode']));

$output81 .= '.elements.dce_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments104 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments105 = array();
$arguments105['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments105['keepQuotes'] = false;
$arguments105['encoding'] = NULL;
$arguments105['doubleEncode'] = true;
$renderChildrenClosure106 = function() {return NULL;};
$value107 = ($arguments105['value'] !== NULL ? $arguments105['value'] : $renderChildrenClosure106());
$arguments104['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value107) ? $value107 : htmlspecialchars($value107, ($arguments105['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments105['encoding'] !== NULL ? $arguments105['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments105['doubleEncode'])));
$output108 = '';

$output108 .= 'dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments109 = array();
$arguments109['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments109['keepQuotes'] = false;
$arguments109['encoding'] = NULL;
$arguments109['doubleEncode'] = true;
$renderChildrenClosure110 = function() {return NULL;};
$value111 = ($arguments109['value'] !== NULL ? $arguments109['value'] : $renderChildrenClosure110());

$output108 .= (!is_string($value111) ? $value111 : htmlspecialchars($value111, ($arguments109['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments109['encoding'] !== NULL ? $arguments109['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments109['doubleEncode']));
$arguments104['then'] = $output108;
$output112 = '';

$output112 .= 'dce_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments113 = array();
$arguments113['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'identifier', $renderingContext);
$arguments113['keepQuotes'] = false;
$arguments113['encoding'] = NULL;
$arguments113['doubleEncode'] = true;
$renderChildrenClosure114 = function() {return NULL;};
$value115 = ($arguments113['value'] !== NULL ? $arguments113['value'] : $renderChildrenClosure114());

$output112 .= (!is_string($value115) ? $value115 : htmlspecialchars($value115, ($arguments113['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments113['encoding'] !== NULL ? $arguments113['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments113['doubleEncode']));
$arguments104['else'] = $output112;
$renderChildrenClosure116 = function() {return NULL;};

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments104, $renderChildrenClosure116, $renderingContext);

$output81 .= ' {
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments117 = array();
// Rendering Boolean node
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper
$arguments118 = array();
// Rendering Boolean node
$arguments118['returnInt'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$renderChildrenClosure119 = function() {return NULL;};
$viewHelper120 = $self->getViewHelper('$viewHelper120', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper');
$viewHelper120->setArguments($arguments118);
$viewHelper120->setRenderingContext($renderingContext);
$viewHelper120->setRenderChildrenClosure($renderChildrenClosure119);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper
$arguments117['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', $viewHelper120->initializeArgumentsAndRender(), 7006000);
$arguments117['then'] = NULL;
$arguments117['else'] = NULL;
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output122 = '';

$output122 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments123 = array();
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output125 = '';

$output125 .= '
			icon = ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments126 = array();
// Rendering Boolean node
$arguments126['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'hasCustomWizardIcon', $renderingContext));
$arguments126['then'] = NULL;
$arguments126['else'] = NULL;
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output128 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments129 = array();
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output131 = '';

$output131 .= '../';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments132 = array();
$arguments132['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_custom_icon', $renderingContext);
$arguments132['keepQuotes'] = false;
$arguments132['encoding'] = NULL;
$arguments132['doubleEncode'] = true;
$renderChildrenClosure133 = function() {return NULL;};
$value134 = ($arguments132['value'] !== NULL ? $arguments132['value'] : $renderChildrenClosure133());

$output131 .= (!is_string($value134) ? $value134 : htmlspecialchars($value134, ($arguments132['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments132['encoding'] !== NULL ? $arguments132['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments132['doubleEncode']));
return $output131;
};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments135 = array();
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper
$arguments137 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments138 = array();
$arguments138['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_icon', $renderingContext);
$arguments138['keepQuotes'] = false;
$arguments138['encoding'] = NULL;
$arguments138['doubleEncode'] = true;
$renderChildrenClosure139 = function() {return NULL;};
$value140 = ($arguments138['value'] !== NULL ? $arguments138['value'] : $renderChildrenClosure139());
$arguments137['name'] = (!is_string($value140) ? $value140 : htmlspecialchars($value140, ($arguments138['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments138['encoding'] !== NULL ? $arguments138['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments138['doubleEncode']));
$renderChildrenClosure141 = function() {return NULL;};
$viewHelper142 = $self->getViewHelper('$viewHelper142', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper');
$viewHelper142->setArguments($arguments137);
$viewHelper142->setRenderingContext($renderingContext);
$viewHelper142->setRenderChildrenClosure($renderChildrenClosure141);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper
return $viewHelper142->initializeArgumentsAndRender();
};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);
return $output128;
};
$arguments126['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output143 = '';

$output143 .= '../';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments144 = array();
$arguments144['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_custom_icon', $renderingContext);
$arguments144['keepQuotes'] = false;
$arguments144['encoding'] = NULL;
$arguments144['doubleEncode'] = true;
$renderChildrenClosure145 = function() {return NULL;};
$value146 = ($arguments144['value'] !== NULL ? $arguments144['value'] : $renderChildrenClosure145());

$output143 .= (!is_string($value146) ? $value146 : htmlspecialchars($value146, ($arguments144['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments144['encoding'] !== NULL ? $arguments144['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments144['doubleEncode']));
return $output143;
};
$arguments126['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper
$arguments147 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments148 = array();
$arguments148['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_icon', $renderingContext);
$arguments148['keepQuotes'] = false;
$arguments148['encoding'] = NULL;
$arguments148['doubleEncode'] = true;
$renderChildrenClosure149 = function() {return NULL;};
$value150 = ($arguments148['value'] !== NULL ? $arguments148['value'] : $renderChildrenClosure149());
$arguments147['name'] = (!is_string($value150) ? $value150 : htmlspecialchars($value150, ($arguments148['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments148['encoding'] !== NULL ? $arguments148['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments148['doubleEncode']));
$renderChildrenClosure151 = function() {return NULL;};
$viewHelper152 = $self->getViewHelper('$viewHelper152', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper');
$viewHelper152->setArguments($arguments147);
$viewHelper152->setRenderingContext($renderingContext);
$viewHelper152->setRenderChildrenClosure($renderChildrenClosure151);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper
return $viewHelper152->initializeArgumentsAndRender();
};

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output125 .= '
		';
return $output125;
};

$output122 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output122 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments153 = array();
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output155 = '';

$output155 .= '
			iconIdentifier = ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments156 = array();
// Rendering Boolean node
$arguments156['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'hasCustomWizardIcon', $renderingContext));
$arguments156['then'] = NULL;
$arguments156['else'] = NULL;
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output158 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments159 = array();
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output161 = '';

$output161 .= 'ext-dce-dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments162 = array();
$arguments162['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments162['keepQuotes'] = false;
$arguments162['encoding'] = NULL;
$arguments162['doubleEncode'] = true;
$renderChildrenClosure163 = function() {return NULL;};
$value164 = ($arguments162['value'] !== NULL ? $arguments162['value'] : $renderChildrenClosure163());

$output161 .= (!is_string($value164) ? $value164 : htmlspecialchars($value164, ($arguments162['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments162['encoding'] !== NULL ? $arguments162['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments162['doubleEncode']));

$output161 .= '-customwizardicon';
return $output161;
};

$output158 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments165 = array();
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output167 = '';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper
$arguments168 = array();
$arguments168['name'] = '';
$renderChildrenClosure169 = function() {return NULL;};
$viewHelper170 = $self->getViewHelper('$viewHelper170', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper');
$viewHelper170->setArguments($arguments168);
$viewHelper170->setRenderingContext($renderingContext);
$viewHelper170->setRenderChildrenClosure($renderChildrenClosure169);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper

$output167 .= $viewHelper170->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments171 = array();
$arguments171['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_icon', $renderingContext);
$arguments171['keepQuotes'] = false;
$arguments171['encoding'] = NULL;
$arguments171['doubleEncode'] = true;
$renderChildrenClosure172 = function() {return NULL;};
$value173 = ($arguments171['value'] !== NULL ? $arguments171['value'] : $renderChildrenClosure172());

$output167 .= (!is_string($value173) ? $value173 : htmlspecialchars($value173, ($arguments171['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments171['encoding'] !== NULL ? $arguments171['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments171['doubleEncode']));
return $output167;
};

$output158 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);
return $output158;
};
$arguments156['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output174 = '';

$output174 .= 'ext-dce-dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments175 = array();
$arguments175['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments175['keepQuotes'] = false;
$arguments175['encoding'] = NULL;
$arguments175['doubleEncode'] = true;
$renderChildrenClosure176 = function() {return NULL;};
$value177 = ($arguments175['value'] !== NULL ? $arguments175['value'] : $renderChildrenClosure176());

$output174 .= (!is_string($value177) ? $value177 : htmlspecialchars($value177, ($arguments175['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments175['encoding'] !== NULL ? $arguments175['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments175['doubleEncode']));

$output174 .= '-customwizardicon';
return $output174;
};
$arguments156['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output178 = '';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper
$arguments179 = array();
$arguments179['name'] = '';
$renderChildrenClosure180 = function() {return NULL;};
$viewHelper181 = $self->getViewHelper('$viewHelper181', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper');
$viewHelper181->setArguments($arguments179);
$viewHelper181->setRenderingContext($renderingContext);
$viewHelper181->setRenderChildrenClosure($renderChildrenClosure180);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper

$output178 .= $viewHelper181->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments182 = array();
$arguments182['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_icon', $renderingContext);
$arguments182['keepQuotes'] = false;
$arguments182['encoding'] = NULL;
$arguments182['doubleEncode'] = true;
$renderChildrenClosure183 = function() {return NULL;};
$value184 = ($arguments182['value'] !== NULL ? $arguments182['value'] : $renderChildrenClosure183());

$output178 .= (!is_string($value184) ? $value184 : htmlspecialchars($value184, ($arguments182['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments182['encoding'] !== NULL ? $arguments182['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments182['doubleEncode']));
return $output178;
};

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output155 .= '
		';
return $output155;
};

$output122 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output122 .= '
	';
return $output122;
};
$arguments117['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output185 = '';

$output185 .= '
			icon = ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments186 = array();
// Rendering Boolean node
$arguments186['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'hasCustomWizardIcon', $renderingContext));
$arguments186['then'] = NULL;
$arguments186['else'] = NULL;
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output188 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments189 = array();
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output191 = '';

$output191 .= '../';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments192 = array();
$arguments192['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_custom_icon', $renderingContext);
$arguments192['keepQuotes'] = false;
$arguments192['encoding'] = NULL;
$arguments192['doubleEncode'] = true;
$renderChildrenClosure193 = function() {return NULL;};
$value194 = ($arguments192['value'] !== NULL ? $arguments192['value'] : $renderChildrenClosure193());

$output191 .= (!is_string($value194) ? $value194 : htmlspecialchars($value194, ($arguments192['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments192['encoding'] !== NULL ? $arguments192['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments192['doubleEncode']));
return $output191;
};

$output188 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments195 = array();
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper
$arguments197 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments198 = array();
$arguments198['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_icon', $renderingContext);
$arguments198['keepQuotes'] = false;
$arguments198['encoding'] = NULL;
$arguments198['doubleEncode'] = true;
$renderChildrenClosure199 = function() {return NULL;};
$value200 = ($arguments198['value'] !== NULL ? $arguments198['value'] : $renderChildrenClosure199());
$arguments197['name'] = (!is_string($value200) ? $value200 : htmlspecialchars($value200, ($arguments198['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments198['encoding'] !== NULL ? $arguments198['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments198['doubleEncode']));
$renderChildrenClosure201 = function() {return NULL;};
$viewHelper202 = $self->getViewHelper('$viewHelper202', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper');
$viewHelper202->setArguments($arguments197);
$viewHelper202->setRenderingContext($renderingContext);
$viewHelper202->setRenderChildrenClosure($renderChildrenClosure201);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper
return $viewHelper202->initializeArgumentsAndRender();
};

$output188 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);
return $output188;
};
$arguments186['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output203 = '';

$output203 .= '../';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments204 = array();
$arguments204['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_custom_icon', $renderingContext);
$arguments204['keepQuotes'] = false;
$arguments204['encoding'] = NULL;
$arguments204['doubleEncode'] = true;
$renderChildrenClosure205 = function() {return NULL;};
$value206 = ($arguments204['value'] !== NULL ? $arguments204['value'] : $renderChildrenClosure205());

$output203 .= (!is_string($value206) ? $value206 : htmlspecialchars($value206, ($arguments204['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments204['encoding'] !== NULL ? $arguments204['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments204['doubleEncode']));
return $output203;
};
$arguments186['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper
$arguments207 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments208 = array();
$arguments208['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_icon', $renderingContext);
$arguments208['keepQuotes'] = false;
$arguments208['encoding'] = NULL;
$arguments208['doubleEncode'] = true;
$renderChildrenClosure209 = function() {return NULL;};
$value210 = ($arguments208['value'] !== NULL ? $arguments208['value'] : $renderChildrenClosure209());
$arguments207['name'] = (!is_string($value210) ? $value210 : htmlspecialchars($value210, ($arguments208['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments208['encoding'] !== NULL ? $arguments208['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments208['doubleEncode']));
$renderChildrenClosure211 = function() {return NULL;};
$viewHelper212 = $self->getViewHelper('$viewHelper212', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper');
$viewHelper212->setArguments($arguments207);
$viewHelper212->setRenderingContext($renderingContext);
$viewHelper212->setRenderChildrenClosure($renderChildrenClosure211);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper
return $viewHelper212->initializeArgumentsAndRender();
};

$output185 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output185 .= '
		';
return $output185;
};
$arguments117['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output213 = '';

$output213 .= '
			iconIdentifier = ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments214 = array();
// Rendering Boolean node
$arguments214['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'hasCustomWizardIcon', $renderingContext));
$arguments214['then'] = NULL;
$arguments214['else'] = NULL;
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output216 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments217 = array();
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output219 = '';

$output219 .= 'ext-dce-dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments220 = array();
$arguments220['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments220['keepQuotes'] = false;
$arguments220['encoding'] = NULL;
$arguments220['doubleEncode'] = true;
$renderChildrenClosure221 = function() {return NULL;};
$value222 = ($arguments220['value'] !== NULL ? $arguments220['value'] : $renderChildrenClosure221());

$output219 .= (!is_string($value222) ? $value222 : htmlspecialchars($value222, ($arguments220['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments220['encoding'] !== NULL ? $arguments220['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments220['doubleEncode']));

$output219 .= '-customwizardicon';
return $output219;
};

$output216 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments223 = array();
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output225 = '';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper
$arguments226 = array();
$arguments226['name'] = '';
$renderChildrenClosure227 = function() {return NULL;};
$viewHelper228 = $self->getViewHelper('$viewHelper228', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper');
$viewHelper228->setArguments($arguments226);
$viewHelper228->setRenderingContext($renderingContext);
$viewHelper228->setRenderChildrenClosure($renderChildrenClosure227);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper

$output225 .= $viewHelper228->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments229 = array();
$arguments229['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_icon', $renderingContext);
$arguments229['keepQuotes'] = false;
$arguments229['encoding'] = NULL;
$arguments229['doubleEncode'] = true;
$renderChildrenClosure230 = function() {return NULL;};
$value231 = ($arguments229['value'] !== NULL ? $arguments229['value'] : $renderChildrenClosure230());

$output225 .= (!is_string($value231) ? $value231 : htmlspecialchars($value231, ($arguments229['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments229['encoding'] !== NULL ? $arguments229['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments229['doubleEncode']));
return $output225;
};

$output216 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);
return $output216;
};
$arguments214['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output232 = '';

$output232 .= 'ext-dce-dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments233 = array();
$arguments233['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments233['keepQuotes'] = false;
$arguments233['encoding'] = NULL;
$arguments233['doubleEncode'] = true;
$renderChildrenClosure234 = function() {return NULL;};
$value235 = ($arguments233['value'] !== NULL ? $arguments233['value'] : $renderChildrenClosure234());

$output232 .= (!is_string($value235) ? $value235 : htmlspecialchars($value235, ($arguments233['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments233['encoding'] !== NULL ? $arguments233['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments233['doubleEncode']));

$output232 .= '-customwizardicon';
return $output232;
};
$arguments214['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output236 = '';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper
$arguments237 = array();
$arguments237['name'] = '';
$renderChildrenClosure238 = function() {return NULL;};
$viewHelper239 = $self->getViewHelper('$viewHelper239', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper');
$viewHelper239->setArguments($arguments237);
$viewHelper239->setRenderingContext($renderingContext);
$viewHelper239->setRenderChildrenClosure($renderChildrenClosure238);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper

$output236 .= $viewHelper239->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments240 = array();
$arguments240['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_icon', $renderingContext);
$arguments240['keepQuotes'] = false;
$arguments240['encoding'] = NULL;
$arguments240['doubleEncode'] = true;
$renderChildrenClosure241 = function() {return NULL;};
$value242 = ($arguments240['value'] !== NULL ? $arguments240['value'] : $renderChildrenClosure241());

$output236 .= (!is_string($value242) ? $value242 : htmlspecialchars($value242, ($arguments240['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments240['encoding'] !== NULL ? $arguments240['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments240['doubleEncode']));
return $output236;
};

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output213 .= '
		';
return $output213;
};

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments117, $renderChildrenClosure121, $renderingContext);

$output81 .= '
	title = ';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\AddcslashesViewHelper
$arguments243 = array();
$arguments243['subject'] = NULL;
$arguments243['charlist'] = '\'';
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments245 = array();
$arguments245['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'title', $renderingContext);
$arguments245['keepQuotes'] = false;
$arguments245['encoding'] = NULL;
$arguments245['doubleEncode'] = true;
$renderChildrenClosure246 = function() {return NULL;};
$value247 = ($arguments245['value'] !== NULL ? $arguments245['value'] : $renderChildrenClosure246());
return (!is_string($value247) ? $value247 : htmlspecialchars($value247, ($arguments245['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments245['encoding'] !== NULL ? $arguments245['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments245['doubleEncode']));
};
$viewHelper248 = $self->getViewHelper('$viewHelper248', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\AddcslashesViewHelper');
$viewHelper248->setArguments($arguments243);
$viewHelper248->setRenderingContext($renderingContext);
$viewHelper248->setRenderChildrenClosure($renderChildrenClosure244);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\AddcslashesViewHelper

$output81 .= $viewHelper248->initializeArgumentsAndRender();

$output81 .= '
	description = ';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\AddcslashesViewHelper
$arguments249 = array();
$arguments249['subject'] = NULL;
$arguments249['charlist'] = '\'';
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments251 = array();
$arguments251['value'] = NULL;
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_description', $renderingContext);
};
return TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);
};
$viewHelper253 = $self->getViewHelper('$viewHelper253', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\AddcslashesViewHelper');
$viewHelper253->setArguments($arguments249);
$viewHelper253->setRenderingContext($renderingContext);
$viewHelper253->setRenderChildrenClosure($renderChildrenClosure250);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\AddcslashesViewHelper

$output81 .= $viewHelper253->initializeArgumentsAndRender();

$output81 .= '
	tt_content_defValues {
	CType = dce_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments254 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments255 = array();
$arguments255['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments255['keepQuotes'] = false;
$arguments255['encoding'] = NULL;
$arguments255['doubleEncode'] = true;
$renderChildrenClosure256 = function() {return NULL;};
$value257 = ($arguments255['value'] !== NULL ? $arguments255['value'] : $renderChildrenClosure256());
$arguments254['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value257) ? $value257 : htmlspecialchars($value257, ($arguments255['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments255['encoding'] !== NULL ? $arguments255['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments255['doubleEncode'])));
$output258 = '';

$output258 .= 'dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments259 = array();
$arguments259['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments259['keepQuotes'] = false;
$arguments259['encoding'] = NULL;
$arguments259['doubleEncode'] = true;
$renderChildrenClosure260 = function() {return NULL;};
$value261 = ($arguments259['value'] !== NULL ? $arguments259['value'] : $renderChildrenClosure260());

$output258 .= (!is_string($value261) ? $value261 : htmlspecialchars($value261, ($arguments259['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments259['encoding'] !== NULL ? $arguments259['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments259['doubleEncode']));
$arguments254['then'] = $output258;
$output262 = '';

$output262 .= 'dce_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments263 = array();
$arguments263['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'identifier', $renderingContext);
$arguments263['keepQuotes'] = false;
$arguments263['encoding'] = NULL;
$arguments263['doubleEncode'] = true;
$renderChildrenClosure264 = function() {return NULL;};
$value265 = ($arguments263['value'] !== NULL ? $arguments263['value'] : $renderChildrenClosure264());

$output262 .= (!is_string($value265) ? $value265 : htmlspecialchars($value265, ($arguments263['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments263['encoding'] !== NULL ? $arguments263['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments263['doubleEncode']));
$arguments254['else'] = $output262;
$renderChildrenClosure266 = function() {return NULL;};

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments254, $renderChildrenClosure266, $renderingContext);

$output81 .= '
	}
	}
	mod.wizards.newContentElement.wizardItems.';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments267 = array();
$arguments267['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_category', $renderingContext);
$arguments267['keepQuotes'] = false;
$arguments267['encoding'] = NULL;
$arguments267['doubleEncode'] = true;
$renderChildrenClosure268 = function() {return NULL;};
$value269 = ($arguments267['value'] !== NULL ? $arguments267['value'] : $renderChildrenClosure268());

$output81 .= (!is_string($value269) ? $value269 : htmlspecialchars($value269, ($arguments267['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments267['encoding'] !== NULL ? $arguments267['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments267['doubleEncode']));

$output81 .= '.show := addToList(dce_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments270 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments271 = array();
$arguments271['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments271['keepQuotes'] = false;
$arguments271['encoding'] = NULL;
$arguments271['doubleEncode'] = true;
$renderChildrenClosure272 = function() {return NULL;};
$value273 = ($arguments271['value'] !== NULL ? $arguments271['value'] : $renderChildrenClosure272());
$arguments270['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value273) ? $value273 : htmlspecialchars($value273, ($arguments271['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments271['encoding'] !== NULL ? $arguments271['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments271['doubleEncode'])));
$output274 = '';

$output274 .= 'dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments275 = array();
$arguments275['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments275['keepQuotes'] = false;
$arguments275['encoding'] = NULL;
$arguments275['doubleEncode'] = true;
$renderChildrenClosure276 = function() {return NULL;};
$value277 = ($arguments275['value'] !== NULL ? $arguments275['value'] : $renderChildrenClosure276());

$output274 .= (!is_string($value277) ? $value277 : htmlspecialchars($value277, ($arguments275['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments275['encoding'] !== NULL ? $arguments275['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments275['doubleEncode']));
$arguments270['then'] = $output274;
$output278 = '';

$output278 .= 'dce_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments279 = array();
$arguments279['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'identifier', $renderingContext);
$arguments279['keepQuotes'] = false;
$arguments279['encoding'] = NULL;
$arguments279['doubleEncode'] = true;
$renderChildrenClosure280 = function() {return NULL;};
$value281 = ($arguments279['value'] !== NULL ? $arguments279['value'] : $renderChildrenClosure280());

$output278 .= (!is_string($value281) ? $value281 : htmlspecialchars($value281, ($arguments279['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments279['encoding'] !== NULL ? $arguments279['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments279['doubleEncode']));
$arguments270['else'] = $output278;
$renderChildrenClosure282 = function() {return NULL;};

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments270, $renderChildrenClosure282, $renderingContext);

$output81 .= ')
	\');
';
return $output81;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output6 .= '
';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
';
return $output3;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';


return $output0;
}


}
#1466630312    71755     