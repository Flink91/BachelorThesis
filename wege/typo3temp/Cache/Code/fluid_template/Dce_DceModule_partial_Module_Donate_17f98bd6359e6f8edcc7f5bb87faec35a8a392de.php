<?php
class FluidCache_Dce_DceModule_partial_Module_Donate_17f98bd6359e6f8edcc7f5bb87faec35a8a392de extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<form method="get" action="https://www.paypal.com/cgi-bin/webscr" target="_blank" class="form-inline">
	<input type="hidden" name="cmd" value="_s-xclick" />
	<input type="hidden" name="hosted_button_id" value="2DCCULSKFRZFU" />
	<input type="hidden" name="thank" value="you very much" />
	<button class="btn ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments2 = array();
$arguments2['value'] = $currentVariableContainer->getOrNull('primary');
$arguments2['keepQuotes'] = false;
$arguments2['encoding'] = NULL;
$arguments2['doubleEncode'] = true;
$renderChildrenClosure3 = function() {return NULL;};
$value4 = ($arguments2['value'] !== NULL ? $arguments2['value'] : $renderChildrenClosure3());
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value4) ? $value4 : htmlspecialchars($value4, ($arguments2['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments2['encoding'] !== NULL ? $arguments2['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments2['doubleEncode'])));
$arguments1['then'] = 'btn-primary';
$arguments1['else'] = 'btn-default';
$renderChildrenClosure5 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure5, $renderingContext);

$output0 .= '" type="submit">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments6 = array();
$arguments6['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang_mod.xml:donate';
$arguments6['id'] = NULL;
$arguments6['default'] = NULL;
$arguments6['htmlEscape'] = NULL;
$arguments6['arguments'] = NULL;
$arguments6['extensionName'] = NULL;
$renderChildrenClosure7 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '</button>
</form>';


return $output0;
}


}
#1466614709    2925      