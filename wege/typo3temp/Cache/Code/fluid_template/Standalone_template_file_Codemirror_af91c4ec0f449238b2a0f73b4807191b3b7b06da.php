<?php
class FluidCache_Standalone_template_file_Codemirror_af91c4ec0f449238b2a0f73b4807191b3b7b06da extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<div id="dceConfigurationWizard">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('disableCodemirror'));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments4 = array();
$renderChildrenClosure5 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments6 = array();
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output8 = '';

$output8 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments9 = array();
// Rendering Boolean node
$arguments9['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('parameters'), 'showTemplates', $renderingContext));
$arguments9['then'] = NULL;
$arguments9['else'] = NULL;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments12 = array();
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output14 = '';

$output14 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments15 = array();
$arguments15['partial'] = 'ConfigurationEditor/AvailableTemplates';
// Rendering Array
$array16 = array();
$array16['uniqueIdentifier'] = $currentVariableContainer->getOrNull('uniqueIdentifier');
$array16['availableTemplates'] = $currentVariableContainer->getOrNull('availableTemplates');
$arguments15['arguments'] = $array16;
$arguments15['section'] = NULL;
$arguments15['optional'] = false;
$renderChildrenClosure17 = function() {return NULL;};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments15, $renderChildrenClosure17, $renderingContext);

$output14 .= '
				';
return $output14;
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments18 = array();
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output20 = '';

$output20 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments21 = array();
$arguments21['partial'] = 'ConfigurationEditor/AvailableVariables';
// Rendering Array
$array22 = array();
$array22['showFields'] = $currentVariableContainer->getOrNull('showFields');
$array22['uniqueIdentifier'] = $currentVariableContainer->getOrNull('uniqueIdentifier');
$array22['availableFields'] = $currentVariableContainer->getOrNull('availableFields');
$array22['famousViewHelpers'] = $currentVariableContainer->getOrNull('famousViewHelpers');
$array22['dceViewHelpers'] = $currentVariableContainer->getOrNull('dceViewHelpers');
$arguments21['arguments'] = $array22;
$arguments21['section'] = NULL;
$arguments21['optional'] = false;
$renderChildrenClosure23 = function() {return NULL;};

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments21, $renderChildrenClosure23, $renderingContext);

$output20 .= '
				';
return $output20;
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output11 .= '
			';
return $output11;
};
$arguments9['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output24 = '';

$output24 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments25 = array();
$arguments25['partial'] = 'ConfigurationEditor/AvailableTemplates';
// Rendering Array
$array26 = array();
$array26['uniqueIdentifier'] = $currentVariableContainer->getOrNull('uniqueIdentifier');
$array26['availableTemplates'] = $currentVariableContainer->getOrNull('availableTemplates');
$arguments25['arguments'] = $array26;
$arguments25['section'] = NULL;
$arguments25['optional'] = false;
$renderChildrenClosure27 = function() {return NULL;};

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments25, $renderChildrenClosure27, $renderingContext);

$output24 .= '
				';
return $output24;
};
$arguments9['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output28 = '';

$output28 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments29 = array();
$arguments29['partial'] = 'ConfigurationEditor/AvailableVariables';
// Rendering Array
$array30 = array();
$array30['showFields'] = $currentVariableContainer->getOrNull('showFields');
$array30['uniqueIdentifier'] = $currentVariableContainer->getOrNull('uniqueIdentifier');
$array30['availableFields'] = $currentVariableContainer->getOrNull('availableFields');
$array30['famousViewHelpers'] = $currentVariableContainer->getOrNull('famousViewHelpers');
$array30['dceViewHelpers'] = $currentVariableContainer->getOrNull('dceViewHelpers');
$arguments29['arguments'] = $array30;
$arguments29['section'] = NULL;
$arguments29['optional'] = false;
$renderChildrenClosure31 = function() {return NULL;};

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments29, $renderChildrenClosure31, $renderingContext);

$output28 .= '
				';
return $output28;
};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
		';
return $output8;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
	';
return $output3;
};
$arguments1['__thenClosure'] = function() {return NULL;};
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output32 = '';

$output32 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments33 = array();
// Rendering Boolean node
$arguments33['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('parameters'), 'showTemplates', $renderingContext));
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output35 = '';

$output35 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments36 = array();
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments39 = array();
$arguments39['partial'] = 'ConfigurationEditor/AvailableTemplates';
// Rendering Array
$array40 = array();
$array40['uniqueIdentifier'] = $currentVariableContainer->getOrNull('uniqueIdentifier');
$array40['availableTemplates'] = $currentVariableContainer->getOrNull('availableTemplates');
$arguments39['arguments'] = $array40;
$arguments39['section'] = NULL;
$arguments39['optional'] = false;
$renderChildrenClosure41 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments39, $renderChildrenClosure41, $renderingContext);

$output38 .= '
				';
return $output38;
};

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments42 = array();
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output44 = '';

$output44 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments45 = array();
$arguments45['partial'] = 'ConfigurationEditor/AvailableVariables';
// Rendering Array
$array46 = array();
$array46['showFields'] = $currentVariableContainer->getOrNull('showFields');
$array46['uniqueIdentifier'] = $currentVariableContainer->getOrNull('uniqueIdentifier');
$array46['availableFields'] = $currentVariableContainer->getOrNull('availableFields');
$array46['famousViewHelpers'] = $currentVariableContainer->getOrNull('famousViewHelpers');
$array46['dceViewHelpers'] = $currentVariableContainer->getOrNull('dceViewHelpers');
$arguments45['arguments'] = $array46;
$arguments45['section'] = NULL;
$arguments45['optional'] = false;
$renderChildrenClosure47 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments45, $renderChildrenClosure47, $renderingContext);

$output44 .= '
				';
return $output44;
};

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output35 .= '
			';
return $output35;
};
$arguments33['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output48 = '';

$output48 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments49 = array();
$arguments49['partial'] = 'ConfigurationEditor/AvailableTemplates';
// Rendering Array
$array50 = array();
$array50['uniqueIdentifier'] = $currentVariableContainer->getOrNull('uniqueIdentifier');
$array50['availableTemplates'] = $currentVariableContainer->getOrNull('availableTemplates');
$arguments49['arguments'] = $array50;
$arguments49['section'] = NULL;
$arguments49['optional'] = false;
$renderChildrenClosure51 = function() {return NULL;};

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments49, $renderChildrenClosure51, $renderingContext);

$output48 .= '
				';
return $output48;
};
$arguments33['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output52 = '';

$output52 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments53 = array();
$arguments53['partial'] = 'ConfigurationEditor/AvailableVariables';
// Rendering Array
$array54 = array();
$array54['showFields'] = $currentVariableContainer->getOrNull('showFields');
$array54['uniqueIdentifier'] = $currentVariableContainer->getOrNull('uniqueIdentifier');
$array54['availableFields'] = $currentVariableContainer->getOrNull('availableFields');
$array54['famousViewHelpers'] = $currentVariableContainer->getOrNull('famousViewHelpers');
$array54['dceViewHelpers'] = $currentVariableContainer->getOrNull('dceViewHelpers');
$arguments53['arguments'] = $array54;
$arguments53['section'] = NULL;
$arguments53['optional'] = false;
$renderChildrenClosure55 = function() {return NULL;};

$output52 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments53, $renderChildrenClosure55, $renderingContext);

$output52 .= '
				';
return $output52;
};

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
		';
return $output32;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
	<div>
		<textarea id="codemirror_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments56 = array();
$arguments56['value'] = $currentVariableContainer->getOrNull('uniqueIdentifier');
$arguments56['keepQuotes'] = false;
$arguments56['encoding'] = NULL;
$arguments56['doubleEncode'] = true;
$renderChildrenClosure57 = function() {return NULL;};
$value58 = ($arguments56['value'] !== NULL ? $arguments56['value'] : $renderChildrenClosure57());

$output0 .= (!is_string($value58) ? $value58 : htmlspecialchars($value58, ($arguments56['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments56['encoding'] !== NULL ? $arguments56['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments56['doubleEncode']));

$output0 .= '" name=';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments59 = array();
$arguments59['value'] = $currentVariableContainer->getOrNull('name');
$arguments59['keepQuotes'] = false;
$arguments59['encoding'] = NULL;
$arguments59['doubleEncode'] = true;
$renderChildrenClosure60 = function() {return NULL;};
$value61 = ($arguments59['value'] !== NULL ? $arguments59['value'] : $renderChildrenClosure60());

$output0 .= (!is_string($value61) ? $value61 : htmlspecialchars($value61, ($arguments59['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments59['encoding'] !== NULL ? $arguments59['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments59['doubleEncode']));

$output0 .= ' cols="80" rows="15" onchange="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments62 = array();
$arguments62['value'] = $currentVariableContainer->getOrNull('onChangeFunc');
$arguments62['keepQuotes'] = false;
$arguments62['encoding'] = NULL;
$arguments62['doubleEncode'] = true;
$renderChildrenClosure63 = function() {return NULL;};
$value64 = ($arguments62['value'] !== NULL ? $arguments62['value'] : $renderChildrenClosure63());

$output0 .= (!is_string($value64) ? $value64 : htmlspecialchars($value64, ($arguments62['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments62['encoding'] !== NULL ? $arguments62['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments62['doubleEncode']));

$output0 .= '" ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments65 = array();
$arguments65['value'] = $currentVariableContainer->getOrNull('onFocus');
$arguments65['keepQuotes'] = false;
$arguments65['encoding'] = NULL;
$arguments65['doubleEncode'] = true;
$renderChildrenClosure66 = function() {return NULL;};
$value67 = ($arguments65['value'] !== NULL ? $arguments65['value'] : $renderChildrenClosure66());

$output0 .= (!is_string($value67) ? $value67 : htmlspecialchars($value67, ($arguments65['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments65['encoding'] !== NULL ? $arguments65['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments65['doubleEncode']));

$output0 .= '>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments68 = array();
$arguments68['value'] = $currentVariableContainer->getOrNull('value');
$arguments68['keepQuotes'] = false;
$arguments68['encoding'] = NULL;
$arguments68['doubleEncode'] = true;
$renderChildrenClosure69 = function() {return NULL;};
$value70 = ($arguments68['value'] !== NULL ? $arguments68['value'] : $renderChildrenClosure69());

$output0 .= (!is_string($value70) ? $value70 : htmlspecialchars($value70, ($arguments68['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments68['encoding'] !== NULL ? $arguments68['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments68['doubleEncode']));

$output0 .= '</textarea>
	</div>
</div>

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments71 = array();
// Rendering Boolean node
$arguments71['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('disableCodemirror'));
$arguments71['then'] = NULL;
$arguments71['else'] = NULL;
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output73 = '';

$output73 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments74 = array();
$renderChildrenClosure75 = function() {return NULL;};

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments76 = array();
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output78 = '';

$output78 .= '
		<script type="text/javascript">
			initCodeMirrorEditor(TYPO3.jQuery(\'#codemirror_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments79 = array();
$arguments79['value'] = $currentVariableContainer->getOrNull('uniqueIdentifier');
$arguments79['keepQuotes'] = false;
$arguments79['encoding'] = NULL;
$arguments79['doubleEncode'] = true;
$renderChildrenClosure80 = function() {return NULL;};
$value81 = ($arguments79['value'] !== NULL ? $arguments79['value'] : $renderChildrenClosure80());

$output78 .= (!is_string($value81) ? $value81 : htmlspecialchars($value81, ($arguments79['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments79['encoding'] !== NULL ? $arguments79['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments79['doubleEncode']));

$output78 .= '\'), \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments82 = array();
$arguments82['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('parameters'), 'mode', $renderingContext);
$arguments82['keepQuotes'] = false;
$arguments82['encoding'] = NULL;
$arguments82['doubleEncode'] = true;
$renderChildrenClosure83 = function() {return NULL;};
$value84 = ($arguments82['value'] !== NULL ? $arguments82['value'] : $renderChildrenClosure83());

$output78 .= (!is_string($value84) ? $value84 : htmlspecialchars($value84, ($arguments82['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments82['encoding'] !== NULL ? $arguments82['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments82['doubleEncode']));

$output78 .= '\');
		</script>
	';
return $output78;
};

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output73 .= '
';
return $output73;
};
$arguments71['__thenClosure'] = function() {return NULL;};
$arguments71['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output85 = '';

$output85 .= '
		<script type="text/javascript">
			initCodeMirrorEditor(TYPO3.jQuery(\'#codemirror_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments86 = array();
$arguments86['value'] = $currentVariableContainer->getOrNull('uniqueIdentifier');
$arguments86['keepQuotes'] = false;
$arguments86['encoding'] = NULL;
$arguments86['doubleEncode'] = true;
$renderChildrenClosure87 = function() {return NULL;};
$value88 = ($arguments86['value'] !== NULL ? $arguments86['value'] : $renderChildrenClosure87());

$output85 .= (!is_string($value88) ? $value88 : htmlspecialchars($value88, ($arguments86['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments86['encoding'] !== NULL ? $arguments86['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments86['doubleEncode']));

$output85 .= '\'), \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments89 = array();
$arguments89['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('parameters'), 'mode', $renderingContext);
$arguments89['keepQuotes'] = false;
$arguments89['encoding'] = NULL;
$arguments89['doubleEncode'] = true;
$renderChildrenClosure90 = function() {return NULL;};
$value91 = ($arguments89['value'] !== NULL ? $arguments89['value'] : $renderChildrenClosure90());

$output85 .= (!is_string($value91) ? $value91 : htmlspecialchars($value91, ($arguments89['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments89['encoding'] !== NULL ? $arguments89['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments89['doubleEncode']));

$output85 .= '\');
		</script>
	';
return $output85;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output0 .= '
';


return $output0;
}


}
#1466617618    22578     