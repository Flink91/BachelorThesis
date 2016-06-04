<?php
class FluidCache_Standalone_partial_Header_Header_679e4f4e87f06349ea21aa8cdbf6a8195d2ddb2f extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper
$arguments1 = array();
$arguments1['expression'] = $currentVariableContainer->getOrNull('layout');
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments4 = array();
$arguments4['value'] = '1';
$arguments4['default'] = false;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
		<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments7 = array();
$arguments7['parameter'] = $currentVariableContainer->getOrNull('link');
$arguments7['target'] = '';
$arguments7['class'] = '';
$arguments7['title'] = '';
$arguments7['additionalParams'] = '';
$arguments7['additionalAttributes'] = array (
);
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments9 = array();
$arguments9['value'] = $currentVariableContainer->getOrNull('header');
$arguments9['keepQuotes'] = false;
$arguments9['encoding'] = NULL;
$arguments9['doubleEncode'] = true;
$renderChildrenClosure10 = function() {return NULL;};
$value11 = ($arguments9['value'] !== NULL ? $arguments9['value'] : $renderChildrenClosure10());
return (!is_string($value11) ? $value11 : htmlspecialchars($value11, ($arguments9['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments9['encoding'] !== NULL ? $arguments9['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments9['doubleEncode']));
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '</h1>
	';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments12 = array();
$arguments12['value'] = '2';
$arguments12['default'] = false;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output14 = '';

$output14 .= '
		<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments15 = array();
$arguments15['parameter'] = $currentVariableContainer->getOrNull('link');
$arguments15['target'] = '';
$arguments15['class'] = '';
$arguments15['title'] = '';
$arguments15['additionalParams'] = '';
$arguments15['additionalAttributes'] = array (
);
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments17 = array();
$arguments17['value'] = $currentVariableContainer->getOrNull('header');
$arguments17['keepQuotes'] = false;
$arguments17['encoding'] = NULL;
$arguments17['doubleEncode'] = true;
$renderChildrenClosure18 = function() {return NULL;};
$value19 = ($arguments17['value'] !== NULL ? $arguments17['value'] : $renderChildrenClosure18());
return (!is_string($value19) ? $value19 : htmlspecialchars($value19, ($arguments17['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments17['encoding'] !== NULL ? $arguments17['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments17['doubleEncode']));
};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '</h2>
	';
return $output14;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments20 = array();
$arguments20['value'] = '3';
$arguments20['default'] = false;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= '
		<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments23 = array();
$arguments23['parameter'] = $currentVariableContainer->getOrNull('link');
$arguments23['target'] = '';
$arguments23['class'] = '';
$arguments23['title'] = '';
$arguments23['additionalParams'] = '';
$arguments23['additionalAttributes'] = array (
);
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments25 = array();
$arguments25['value'] = $currentVariableContainer->getOrNull('header');
$arguments25['keepQuotes'] = false;
$arguments25['encoding'] = NULL;
$arguments25['doubleEncode'] = true;
$renderChildrenClosure26 = function() {return NULL;};
$value27 = ($arguments25['value'] !== NULL ? $arguments25['value'] : $renderChildrenClosure26());
return (!is_string($value27) ? $value27 : htmlspecialchars($value27, ($arguments25['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments25['encoding'] !== NULL ? $arguments25['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments25['doubleEncode']));
};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '</h3>
	';
return $output22;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments28 = array();
$arguments28['value'] = '4';
$arguments28['default'] = false;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output30 = '';

$output30 .= '
		<h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments31 = array();
$arguments31['parameter'] = $currentVariableContainer->getOrNull('link');
$arguments31['target'] = '';
$arguments31['class'] = '';
$arguments31['title'] = '';
$arguments31['additionalParams'] = '';
$arguments31['additionalAttributes'] = array (
);
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments33 = array();
$arguments33['value'] = $currentVariableContainer->getOrNull('header');
$arguments33['keepQuotes'] = false;
$arguments33['encoding'] = NULL;
$arguments33['doubleEncode'] = true;
$renderChildrenClosure34 = function() {return NULL;};
$value35 = ($arguments33['value'] !== NULL ? $arguments33['value'] : $renderChildrenClosure34());
return (!is_string($value35) ? $value35 : htmlspecialchars($value35, ($arguments33['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments33['encoding'] !== NULL ? $arguments33['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments33['doubleEncode']));
};

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '</h4>
	';
return $output30;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments36 = array();
$arguments36['value'] = '5';
$arguments36['default'] = false;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
		<h5>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments39 = array();
$arguments39['parameter'] = $currentVariableContainer->getOrNull('link');
$arguments39['target'] = '';
$arguments39['class'] = '';
$arguments39['title'] = '';
$arguments39['additionalParams'] = '';
$arguments39['additionalAttributes'] = array (
);
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments41 = array();
$arguments41['value'] = $currentVariableContainer->getOrNull('header');
$arguments41['keepQuotes'] = false;
$arguments41['encoding'] = NULL;
$arguments41['doubleEncode'] = true;
$renderChildrenClosure42 = function() {return NULL;};
$value43 = ($arguments41['value'] !== NULL ? $arguments41['value'] : $renderChildrenClosure42());
return (!is_string($value43) ? $value43 : htmlspecialchars($value43, ($arguments41['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments41['encoding'] !== NULL ? $arguments41['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments41['doubleEncode']));
};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '</h5>
	';
return $output38;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments44 = array();
$arguments44['value'] = '6';
$arguments44['default'] = false;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output46 = '';

$output46 .= '
		<h6>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments47 = array();
$arguments47['parameter'] = $currentVariableContainer->getOrNull('link');
$arguments47['target'] = '';
$arguments47['class'] = '';
$arguments47['title'] = '';
$arguments47['additionalParams'] = '';
$arguments47['additionalAttributes'] = array (
);
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments49 = array();
$arguments49['value'] = $currentVariableContainer->getOrNull('header');
$arguments49['keepQuotes'] = false;
$arguments49['encoding'] = NULL;
$arguments49['doubleEncode'] = true;
$renderChildrenClosure50 = function() {return NULL;};
$value51 = ($arguments49['value'] !== NULL ? $arguments49['value'] : $renderChildrenClosure50());
return (!is_string($value51) ? $value51 : htmlspecialchars($value51, ($arguments49['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments49['encoding'] !== NULL ? $arguments49['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments49['doubleEncode']));
};

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '</h6>
	';
return $output46;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments52 = array();
$arguments52['value'] = '100';
$arguments52['default'] = false;
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output54 = '';

$output54 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments55 = array();
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return ' -- do not show header -- ';
};

$output54 .= '';

$output54 .= '
	';
return $output54;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments57 = array();
// Rendering Boolean node
$arguments57['default'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments57['value'] = NULL;
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output59 = '';

$output59 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments60 = array();
// Rendering Boolean node
$arguments60['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('default'));
$arguments60['then'] = NULL;
$arguments60['else'] = NULL;
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output62 = '';

$output62 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments63 = array();
$arguments63['partial'] = 'Header/Header';
// Rendering Array
$array64 = array();
$array64['header'] = $currentVariableContainer->getOrNull('header');
$array64['layout'] = $currentVariableContainer->getOrNull('default');
$array64['link'] = $currentVariableContainer->getOrNull('link');
$arguments63['arguments'] = $array64;
$arguments63['section'] = NULL;
$arguments63['optional'] = false;
$renderChildrenClosure65 = function() {return NULL;};

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments63, $renderChildrenClosure65, $renderingContext);

$output62 .= '
		';
return $output62;
};

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
	';
return $output59;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output3 .= '
';
return $output3;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';


return $output0;
}


}
#1465043110    15689     