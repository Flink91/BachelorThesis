<?php
class FluidCache_Extensionmanager_List_action_index_b7a53a72d6fb1269987e64e102c43c9b5828bf93 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'main';
}
public function hasLayout() {
return TRUE;
}

/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'installedExtensions';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '</h1>
';


return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments4 = array();
$arguments4['partial'] = 'List/UploadForm';
$arguments4['section'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$renderChildrenClosure5 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '

	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments6 = array();
$arguments6['name'] = 'Tx_Extensionmanager_extensionkey';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments7 = array();
$arguments7['key'] = 'extensionList.search';
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};
$arguments6['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);
$arguments6['id'] = 'Tx_Extensionmanager_extensionkey';
$arguments6['value'] = $currentVariableContainer->getOrNull('search');
$arguments6['class'] = 'form-control';
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['required'] = false;
$arguments6['type'] = 'text';
$arguments6['property'] = NULL;
$arguments6['autofocus'] = NULL;
$arguments6['disabled'] = NULL;
$arguments6['maxlength'] = NULL;
$arguments6['readonly'] = NULL;
$arguments6['size'] = NULL;
$arguments6['pattern'] = NULL;
$arguments6['errorClass'] = 'f3-form-error';
$arguments6['dir'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$renderChildrenClosure9 = function() {return NULL;};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper10->setArguments($arguments6);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper10->initializeArgumentsAndRender();

$output3 .= '
		</div>
	</form>
	<br>
	<div class="table-fit">
		<table id="typo3-extension-list" class="table table-striped table-hover typo3-extension-list">
		<thead>
			<tr>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments11 = array();
$arguments11['key'] = 'extensionList.header.title.update';
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$renderChildrenClosure12 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output3 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments13 = array();
$arguments13['key'] = 'extensionList.header.update';
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$renderChildrenClosure14 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output3 .= '</th>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments15 = array();
$arguments15['key'] = 'extensionList.header.title.activate';
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output3 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments17 = array();
$arguments17['key'] = 'extensionList.header.activate';
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['htmlEscape'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$renderChildrenClosure18 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments19 = array();
$arguments19['key'] = 'extensionList.header.extensionName';
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['htmlEscape'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$renderChildrenClosure20 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments21 = array();
$arguments21['key'] = 'extensionList.header.extensionKey';
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['htmlEscape'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$renderChildrenClosure22 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments23 = array();
$arguments23['key'] = 'extensionList.header.extensionVersion';
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['htmlEscape'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$renderChildrenClosure24 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments25 = array();
$arguments25['key'] = 'extensionList.header.extensionState';
$arguments25['id'] = NULL;
$arguments25['default'] = NULL;
$arguments25['htmlEscape'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['extensionName'] = NULL;
$renderChildrenClosure26 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments27 = array();
$arguments27['key'] = 'extensionList.header.extensionActions';
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['htmlEscape'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$renderChildrenClosure28 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output3 .= '</th>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments29 = array();
$arguments29['each'] = $currentVariableContainer->getOrNull('extensions');
$arguments29['as'] = 'extension';
$arguments29['key'] = 'extensionKey';
$arguments29['reverse'] = false;
$arguments29['iteration'] = NULL;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments32 = array();
// Rendering Boolean node
$arguments32['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject', $renderingContext));
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output34 = '';

$output34 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments35 = array();
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output37 = '';

$output37 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments38 = array();
$arguments38['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments38['keepQuotes'] = false;
$arguments38['encoding'] = NULL;
$arguments38['doubleEncode'] = true;
$renderChildrenClosure39 = function() {return NULL;};
$value40 = ($arguments38['value'] !== NULL ? $arguments38['value'] : $renderChildrenClosure39());

$output37 .= (!is_string($value40) ? $value40 : htmlspecialchars($value40, ($arguments38['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments38['encoding'] !== NULL ? $arguments38['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments38['doubleEncode']));

$output37 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments41 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments42 = array();
$arguments42['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments42['keepQuotes'] = false;
$arguments42['encoding'] = NULL;
$arguments42['doubleEncode'] = true;
$renderChildrenClosure43 = function() {return NULL;};
$value44 = ($arguments42['value'] !== NULL ? $arguments42['value'] : $renderChildrenClosure43());
$arguments41['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value44) ? $value44 : htmlspecialchars($value44, ($arguments42['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments42['encoding'] !== NULL ? $arguments42['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments42['doubleEncode'])), -1);
$arguments41['then'] = 'insecure';
$arguments41['else'] = NULL;
$renderChildrenClosure45 = function() {return NULL;};

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments41, $renderChildrenClosure45, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments46 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments47 = array();
$arguments47['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments47['keepQuotes'] = false;
$arguments47['encoding'] = NULL;
$arguments47['doubleEncode'] = true;
$renderChildrenClosure48 = function() {return NULL;};
$value49 = ($arguments47['value'] !== NULL ? $arguments47['value'] : $renderChildrenClosure48());
$arguments46['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value49) ? $value49 : htmlspecialchars($value49, ($arguments47['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments47['encoding'] !== NULL ? $arguments47['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments47['doubleEncode'])), -2);
$arguments46['then'] = 'outdated';
$arguments46['else'] = NULL;
$renderChildrenClosure50 = function() {return NULL;};

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments46, $renderChildrenClosure50, $renderingContext);

$output37 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments51 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments52 = array();
$arguments52['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments52['keepQuotes'] = false;
$arguments52['encoding'] = NULL;
$arguments52['doubleEncode'] = true;
$renderChildrenClosure53 = function() {return NULL;};
$value54 = ($arguments52['value'] !== NULL ? $arguments52['value'] : $renderChildrenClosure53());
$arguments51['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value54) ? $value54 : htmlspecialchars($value54, ($arguments52['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments52['encoding'] !== NULL ? $arguments52['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments52['doubleEncode'])));
$arguments51['then'] = '';
$arguments51['else'] = 'inactive';
$renderChildrenClosure55 = function() {return NULL;};

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure55, $renderingContext);

$output37 .= '">
					';
return $output37;
};

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments56 = array();
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output58 = '';

$output58 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments59 = array();
$arguments59['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments59['keepQuotes'] = false;
$arguments59['encoding'] = NULL;
$arguments59['doubleEncode'] = true;
$renderChildrenClosure60 = function() {return NULL;};
$value61 = ($arguments59['value'] !== NULL ? $arguments59['value'] : $renderChildrenClosure60());

$output58 .= (!is_string($value61) ? $value61 : htmlspecialchars($value61, ($arguments59['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments59['encoding'] !== NULL ? $arguments59['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments59['doubleEncode']));

$output58 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments62 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments63 = array();
$arguments63['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments63['keepQuotes'] = false;
$arguments63['encoding'] = NULL;
$arguments63['doubleEncode'] = true;
$renderChildrenClosure64 = function() {return NULL;};
$value65 = ($arguments63['value'] !== NULL ? $arguments63['value'] : $renderChildrenClosure64());
$arguments62['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value65) ? $value65 : htmlspecialchars($value65, ($arguments63['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments63['encoding'] !== NULL ? $arguments63['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments63['doubleEncode'])));
$arguments62['then'] = '';
$arguments62['else'] = 'inactive';
$renderChildrenClosure66 = function() {return NULL;};

$output58 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure66, $renderingContext);

$output58 .= '">
					';
return $output58;
};

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output34 .= '
				';
return $output34;
};
$arguments32['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output67 = '';

$output67 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments68 = array();
$arguments68['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments68['keepQuotes'] = false;
$arguments68['encoding'] = NULL;
$arguments68['doubleEncode'] = true;
$renderChildrenClosure69 = function() {return NULL;};
$value70 = ($arguments68['value'] !== NULL ? $arguments68['value'] : $renderChildrenClosure69());

$output67 .= (!is_string($value70) ? $value70 : htmlspecialchars($value70, ($arguments68['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments68['encoding'] !== NULL ? $arguments68['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments68['doubleEncode']));

$output67 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments71 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments72 = array();
$arguments72['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments72['keepQuotes'] = false;
$arguments72['encoding'] = NULL;
$arguments72['doubleEncode'] = true;
$renderChildrenClosure73 = function() {return NULL;};
$value74 = ($arguments72['value'] !== NULL ? $arguments72['value'] : $renderChildrenClosure73());
$arguments71['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value74) ? $value74 : htmlspecialchars($value74, ($arguments72['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments72['encoding'] !== NULL ? $arguments72['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments72['doubleEncode'])), -1);
$arguments71['then'] = 'insecure';
$arguments71['else'] = NULL;
$renderChildrenClosure75 = function() {return NULL;};

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments71, $renderChildrenClosure75, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments76 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments77 = array();
$arguments77['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments77['keepQuotes'] = false;
$arguments77['encoding'] = NULL;
$arguments77['doubleEncode'] = true;
$renderChildrenClosure78 = function() {return NULL;};
$value79 = ($arguments77['value'] !== NULL ? $arguments77['value'] : $renderChildrenClosure78());
$arguments76['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value79) ? $value79 : htmlspecialchars($value79, ($arguments77['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments77['encoding'] !== NULL ? $arguments77['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments77['doubleEncode'])), -2);
$arguments76['then'] = 'outdated';
$arguments76['else'] = NULL;
$renderChildrenClosure80 = function() {return NULL;};

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments76, $renderChildrenClosure80, $renderingContext);

$output67 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments81 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments82 = array();
$arguments82['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments82['keepQuotes'] = false;
$arguments82['encoding'] = NULL;
$arguments82['doubleEncode'] = true;
$renderChildrenClosure83 = function() {return NULL;};
$value84 = ($arguments82['value'] !== NULL ? $arguments82['value'] : $renderChildrenClosure83());
$arguments81['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value84) ? $value84 : htmlspecialchars($value84, ($arguments82['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments82['encoding'] !== NULL ? $arguments82['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments82['doubleEncode'])));
$arguments81['then'] = '';
$arguments81['else'] = 'inactive';
$renderChildrenClosure85 = function() {return NULL;};

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, $renderChildrenClosure85, $renderingContext);

$output67 .= '">
					';
return $output67;
};
$arguments32['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output86 = '';

$output86 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments87 = array();
$arguments87['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments87['keepQuotes'] = false;
$arguments87['encoding'] = NULL;
$arguments87['doubleEncode'] = true;
$renderChildrenClosure88 = function() {return NULL;};
$value89 = ($arguments87['value'] !== NULL ? $arguments87['value'] : $renderChildrenClosure88());

$output86 .= (!is_string($value89) ? $value89 : htmlspecialchars($value89, ($arguments87['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments87['encoding'] !== NULL ? $arguments87['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments87['doubleEncode']));

$output86 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments90 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments91 = array();
$arguments91['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments91['keepQuotes'] = false;
$arguments91['encoding'] = NULL;
$arguments91['doubleEncode'] = true;
$renderChildrenClosure92 = function() {return NULL;};
$value93 = ($arguments91['value'] !== NULL ? $arguments91['value'] : $renderChildrenClosure92());
$arguments90['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value93) ? $value93 : htmlspecialchars($value93, ($arguments91['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments91['encoding'] !== NULL ? $arguments91['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments91['doubleEncode'])));
$arguments90['then'] = '';
$arguments90['else'] = 'inactive';
$renderChildrenClosure94 = function() {return NULL;};

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure94, $renderingContext);

$output86 .= '">
					';
return $output86;
};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments95 = array();
// Rendering Boolean node
$arguments95['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateAvailable', $renderingContext));
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output97 = '';

$output97 .= '
						<div class="btn-group">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments98 = array();
// Rendering Boolean node
$arguments98['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext), 'excludeFromUpdates');
$arguments98['then'] = NULL;
$arguments98['else'] = NULL;
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output100 = '';

$output100 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments101 = array();
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output103 = '';

$output103 .= '
									<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments104 = array();
$arguments104['key'] = 'extensionList.updateDisabled';
$arguments104['id'] = NULL;
$arguments104['default'] = NULL;
$arguments104['htmlEscape'] = NULL;
$arguments104['arguments'] = NULL;
$arguments104['extensionName'] = NULL;
$renderChildrenClosure105 = function() {return NULL;};

$output103 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output103 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments106 = array();
$arguments106['identifier'] = 'actions-system-extension-update';
$arguments106['size'] = 'small';
$arguments106['overlay'] = NULL;
$arguments106['state'] = 'default';
$arguments106['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure107 = function() {return NULL;};

$output103 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output103 .= '
									</span>
								';
return $output103;
};

$output100 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output100 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments108 = array();
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output110 = '';

$output110 .= '
									<span class="btn btn-default">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments111 = array();
$arguments111['action'] = 'updateCommentForUpdatableVersions';
// Rendering Array
$array112 = array();
$array112['data-action'] = 'update-extension';
$arguments111['additionalAttributes'] = $array112;
$arguments111['format'] = 'json';
$arguments111['controller'] = 'Download';
// Rendering Array
$array113 = array();
$array113['extension'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$array113['integerVersionStart'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.integerVersion', $renderingContext);
$array113['integerVersionStop'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.integerVersion', $renderingContext);
$arguments111['arguments'] = $array113;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments114 = array();
$arguments114['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array115 = array();
$array115['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.version', $renderingContext);
$arguments114['arguments'] = $array115;
$arguments114['id'] = NULL;
$arguments114['default'] = NULL;
$arguments114['htmlEscape'] = NULL;
$arguments114['extensionName'] = NULL;
$renderChildrenClosure116 = function() {return NULL;};
$arguments111['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure116, $renderingContext);
$arguments111['data'] = NULL;
$arguments111['extensionName'] = NULL;
$arguments111['pluginName'] = NULL;
$arguments111['pageUid'] = NULL;
$arguments111['pageType'] = 0;
$arguments111['noCache'] = false;
$arguments111['noCacheHash'] = false;
$arguments111['section'] = '';
$arguments111['linkAccessRestrictedPages'] = false;
$arguments111['additionalParams'] = array (
);
$arguments111['absolute'] = false;
$arguments111['addQueryString'] = false;
$arguments111['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments111['addQueryStringMethod'] = NULL;
$arguments111['class'] = NULL;
$arguments111['dir'] = NULL;
$arguments111['id'] = NULL;
$arguments111['lang'] = NULL;
$arguments111['style'] = NULL;
$arguments111['accesskey'] = NULL;
$arguments111['tabindex'] = NULL;
$arguments111['onclick'] = NULL;
$arguments111['name'] = NULL;
$arguments111['rel'] = NULL;
$arguments111['rev'] = NULL;
$arguments111['target'] = NULL;
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output118 = '';

$output118 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments119 = array();
$arguments119['identifier'] = 'actions-system-extension-update';
$arguments119['size'] = 'small';
$arguments119['overlay'] = NULL;
$arguments119['state'] = 'default';
$arguments119['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure120 = function() {return NULL;};

$output118 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '
										';
return $output118;
};
$viewHelper121 = $self->getViewHelper('$viewHelper121', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper121->setArguments($arguments111);
$viewHelper121->setRenderingContext($renderingContext);
$viewHelper121->setRenderChildrenClosure($renderChildrenClosure117);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output110 .= $viewHelper121->initializeArgumentsAndRender();

$output110 .= '
									</span>
								';
return $output110;
};

$output100 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output100 .= '
							';
return $output100;
};
$arguments98['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output122 = '';

$output122 .= '
									<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments123 = array();
$arguments123['key'] = 'extensionList.updateDisabled';
$arguments123['id'] = NULL;
$arguments123['default'] = NULL;
$arguments123['htmlEscape'] = NULL;
$arguments123['arguments'] = NULL;
$arguments123['extensionName'] = NULL;
$renderChildrenClosure124 = function() {return NULL;};

$output122 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output122 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments125 = array();
$arguments125['identifier'] = 'actions-system-extension-update';
$arguments125['size'] = 'small';
$arguments125['overlay'] = NULL;
$arguments125['state'] = 'default';
$arguments125['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure126 = function() {return NULL;};

$output122 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output122 .= '
									</span>
								';
return $output122;
};
$arguments98['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output127 = '';

$output127 .= '
									<span class="btn btn-default">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments128 = array();
$arguments128['action'] = 'updateCommentForUpdatableVersions';
// Rendering Array
$array129 = array();
$array129['data-action'] = 'update-extension';
$arguments128['additionalAttributes'] = $array129;
$arguments128['format'] = 'json';
$arguments128['controller'] = 'Download';
// Rendering Array
$array130 = array();
$array130['extension'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$array130['integerVersionStart'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.integerVersion', $renderingContext);
$array130['integerVersionStop'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.integerVersion', $renderingContext);
$arguments128['arguments'] = $array130;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments131 = array();
$arguments131['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array132 = array();
$array132['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.version', $renderingContext);
$arguments131['arguments'] = $array132;
$arguments131['id'] = NULL;
$arguments131['default'] = NULL;
$arguments131['htmlEscape'] = NULL;
$arguments131['extensionName'] = NULL;
$renderChildrenClosure133 = function() {return NULL;};
$arguments128['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments131, $renderChildrenClosure133, $renderingContext);
$arguments128['data'] = NULL;
$arguments128['extensionName'] = NULL;
$arguments128['pluginName'] = NULL;
$arguments128['pageUid'] = NULL;
$arguments128['pageType'] = 0;
$arguments128['noCache'] = false;
$arguments128['noCacheHash'] = false;
$arguments128['section'] = '';
$arguments128['linkAccessRestrictedPages'] = false;
$arguments128['additionalParams'] = array (
);
$arguments128['absolute'] = false;
$arguments128['addQueryString'] = false;
$arguments128['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments128['addQueryStringMethod'] = NULL;
$arguments128['class'] = NULL;
$arguments128['dir'] = NULL;
$arguments128['id'] = NULL;
$arguments128['lang'] = NULL;
$arguments128['style'] = NULL;
$arguments128['accesskey'] = NULL;
$arguments128['tabindex'] = NULL;
$arguments128['onclick'] = NULL;
$arguments128['name'] = NULL;
$arguments128['rel'] = NULL;
$arguments128['rev'] = NULL;
$arguments128['target'] = NULL;
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output135 = '';

$output135 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments136 = array();
$arguments136['identifier'] = 'actions-system-extension-update';
$arguments136['size'] = 'small';
$arguments136['overlay'] = NULL;
$arguments136['state'] = 'default';
$arguments136['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure137 = function() {return NULL;};

$output135 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '
										';
return $output135;
};
$viewHelper138 = $self->getViewHelper('$viewHelper138', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper138->setArguments($arguments128);
$viewHelper138->setRenderingContext($renderingContext);
$viewHelper138->setRenderChildrenClosure($renderChildrenClosure134);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output127 .= $viewHelper138->initializeArgumentsAndRender();

$output127 .= '
									</span>
								';
return $output127;
};

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output97 .= '
						</div>
					';
return $output97;
};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output31 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$arguments139 = array();
$arguments139['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments139['additionalAttributes'] = NULL;
$arguments139['data'] = NULL;
$arguments139['class'] = NULL;
$arguments139['dir'] = NULL;
$arguments139['id'] = NULL;
$arguments139['lang'] = NULL;
$arguments139['style'] = NULL;
$arguments139['title'] = NULL;
$arguments139['accesskey'] = NULL;
$arguments139['tabindex'] = NULL;
$arguments139['onclick'] = NULL;
$arguments139['name'] = NULL;
$arguments139['rel'] = NULL;
$arguments139['rev'] = NULL;
$arguments139['target'] = NULL;
$renderChildrenClosure140 = function() {return NULL;};
$viewHelper141 = $self->getViewHelper('$viewHelper141', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper');
$viewHelper141->setArguments($arguments139);
$viewHelper141->setRenderingContext($renderingContext);
$viewHelper141->setRenderChildrenClosure($renderChildrenClosure140);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper

$output31 .= $viewHelper141->initializeArgumentsAndRender();

$output31 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments142 = array();
// Rendering Boolean node
$arguments142['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'ext_icon', $renderingContext));
$arguments142['then'] = NULL;
$arguments142['else'] = NULL;
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output144 = '';

$output144 .= '
						<img class="ext-icon" src="../';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments145 = array();
$arguments145['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'siteRelPath', $renderingContext);
$arguments145['keepQuotes'] = false;
$arguments145['encoding'] = NULL;
$arguments145['doubleEncode'] = true;
$renderChildrenClosure146 = function() {return NULL;};
$value147 = ($arguments145['value'] !== NULL ? $arguments145['value'] : $renderChildrenClosure146());

$output144 .= (!is_string($value147) ? $value147 : htmlspecialchars($value147, ($arguments145['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments145['encoding'] !== NULL ? $arguments145['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments145['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments148 = array();
$arguments148['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'ext_icon', $renderingContext);
$arguments148['keepQuotes'] = false;
$arguments148['encoding'] = NULL;
$arguments148['doubleEncode'] = true;
$renderChildrenClosure149 = function() {return NULL;};
$value150 = ($arguments148['value'] !== NULL ? $arguments148['value'] : $renderChildrenClosure149());

$output144 .= (!is_string($value150) ? $value150 : htmlspecialchars($value150, ($arguments148['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments148['encoding'] !== NULL ? $arguments148['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments148['doubleEncode']));

$output144 .= '" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments151 = array();
$arguments151['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'title', $renderingContext);
$arguments151['keepQuotes'] = false;
$arguments151['encoding'] = NULL;
$arguments151['doubleEncode'] = true;
$renderChildrenClosure152 = function() {return NULL;};
$value153 = ($arguments151['value'] !== NULL ? $arguments151['value'] : $renderChildrenClosure152());

$output144 .= (!is_string($value153) ? $value153 : htmlspecialchars($value153, ($arguments151['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments151['encoding'] !== NULL ? $arguments151['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments151['doubleEncode']));

$output144 .= '" />
					';
return $output144;
};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output31 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$arguments154 = array();
$arguments154['extension'] = $currentVariableContainer->getOrNull('extension');
// Rendering Boolean node
$arguments154['forceConfiguration'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Boolean node
$arguments154['showDescription'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments154['additionalAttributes'] = NULL;
$arguments154['data'] = NULL;
$arguments154['class'] = NULL;
$arguments154['dir'] = NULL;
$arguments154['id'] = NULL;
$arguments154['lang'] = NULL;
$arguments154['style'] = NULL;
$arguments154['title'] = NULL;
$arguments154['accesskey'] = NULL;
$arguments154['tabindex'] = NULL;
$arguments154['onclick'] = NULL;
$arguments154['name'] = NULL;
$arguments154['rel'] = NULL;
$arguments154['rev'] = NULL;
$arguments154['target'] = NULL;
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments156 = array();
$arguments156['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'title', $renderingContext);
$arguments156['keepQuotes'] = false;
$arguments156['encoding'] = NULL;
$arguments156['doubleEncode'] = true;
$renderChildrenClosure157 = function() {return NULL;};
$value158 = ($arguments156['value'] !== NULL ? $arguments156['value'] : $renderChildrenClosure157());
return (!is_string($value158) ? $value158 : htmlspecialchars($value158, ($arguments156['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments156['encoding'] !== NULL ? $arguments156['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments156['doubleEncode']));
};
$viewHelper159 = $self->getViewHelper('$viewHelper159', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper');
$viewHelper159->setArguments($arguments154);
$viewHelper159->setRenderingContext($renderingContext);
$viewHelper159->setRenderChildrenClosure($renderChildrenClosure155);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper

$output31 .= $viewHelper159->initializeArgumentsAndRender();

$output31 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments160 = array();
$arguments160['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments160['keepQuotes'] = false;
$arguments160['encoding'] = NULL;
$arguments160['doubleEncode'] = true;
$renderChildrenClosure161 = function() {return NULL;};
$value162 = ($arguments160['value'] !== NULL ? $arguments160['value'] : $renderChildrenClosure161());

$output31 .= (!is_string($value162) ? $value162 : htmlspecialchars($value162, ($arguments160['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments160['encoding'] !== NULL ? $arguments160['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments160['doubleEncode']));

$output31 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments163 = array();
$arguments163['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'version', $renderingContext);
$arguments163['keepQuotes'] = false;
$arguments163['encoding'] = NULL;
$arguments163['doubleEncode'] = true;
$renderChildrenClosure164 = function() {return NULL;};
$value165 = ($arguments163['value'] !== NULL ? $arguments163['value'] : $renderChildrenClosure164());

$output31 .= (!is_string($value165) ? $value165 : htmlspecialchars($value165, ($arguments163['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments163['encoding'] !== NULL ? $arguments163['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments163['doubleEncode']));

$output31 .= '
				</td>
				<td>
					<span class="label label-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments166 = array();
$arguments166['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext);
$arguments166['keepQuotes'] = false;
$arguments166['encoding'] = NULL;
$arguments166['doubleEncode'] = true;
$renderChildrenClosure167 = function() {return NULL;};
$value168 = ($arguments166['value'] !== NULL ? $arguments166['value'] : $renderChildrenClosure167());

$output31 .= (!is_string($value168) ? $value168 : htmlspecialchars($value168, ($arguments166['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments166['encoding'] !== NULL ? $arguments166['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments166['doubleEncode']));

$output31 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments169 = array();
$arguments169['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext);
$arguments169['keepQuotes'] = false;
$arguments169['encoding'] = NULL;
$arguments169['doubleEncode'] = true;
$renderChildrenClosure170 = function() {return NULL;};
$value171 = ($arguments169['value'] !== NULL ? $arguments169['value'] : $renderChildrenClosure170());

$output31 .= (!is_string($value171) ? $value171 : htmlspecialchars($value171, ($arguments169['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments169['encoding'] !== NULL ? $arguments169['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments169['doubleEncode']));

$output31 .= '</span>
				</td>
				<td>
					<div class="btn-group">
						';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$arguments172 = array();
$arguments172['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments172['additionalAttributes'] = NULL;
$arguments172['data'] = NULL;
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output174 = '';

$output174 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$arguments175 = array();
$arguments175['class'] = 'btn btn-default';
$arguments175['extension'] = $currentVariableContainer->getOrNull('extension');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments176 = array();
$arguments176['key'] = 'extensionList.configure';
$arguments176['id'] = NULL;
$arguments176['default'] = NULL;
$arguments176['htmlEscape'] = NULL;
$arguments176['arguments'] = NULL;
$arguments176['extensionName'] = NULL;
$renderChildrenClosure177 = function() {return NULL;};
$arguments175['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);
$arguments175['additionalAttributes'] = NULL;
$arguments175['data'] = NULL;
$arguments175['forceConfiguration'] = true;
$arguments175['showDescription'] = false;
$arguments175['dir'] = NULL;
$arguments175['id'] = NULL;
$arguments175['lang'] = NULL;
$arguments175['style'] = NULL;
$arguments175['accesskey'] = NULL;
$arguments175['tabindex'] = NULL;
$arguments175['onclick'] = NULL;
$arguments175['name'] = NULL;
$arguments175['rel'] = NULL;
$arguments175['rev'] = NULL;
$arguments175['target'] = NULL;
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output179 = '';

$output179 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments180 = array();
$arguments180['identifier'] = 'actions-system-extension-configure';
$arguments180['size'] = 'small';
$arguments180['overlay'] = NULL;
$arguments180['state'] = 'default';
$arguments180['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure181 = function() {return NULL;};

$output179 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output179 .= '
							';
return $output179;
};
$viewHelper182 = $self->getViewHelper('$viewHelper182', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper');
$viewHelper182->setArguments($arguments175);
$viewHelper182->setRenderingContext($renderingContext);
$viewHelper182->setRenderChildrenClosure($renderChildrenClosure178);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper

$output174 .= $viewHelper182->initializeArgumentsAndRender();

$output174 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$arguments183 = array();
$arguments183['class'] = 'btn btn-default';
$arguments183['extensionKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$arguments183['additionalAttributes'] = NULL;
$arguments183['data'] = NULL;
$arguments183['dir'] = NULL;
$arguments183['id'] = NULL;
$arguments183['lang'] = NULL;
$arguments183['style'] = NULL;
$arguments183['title'] = NULL;
$arguments183['accesskey'] = NULL;
$arguments183['tabindex'] = NULL;
$arguments183['onclick'] = NULL;
$arguments183['name'] = NULL;
$arguments183['rel'] = NULL;
$arguments183['rev'] = NULL;
$arguments183['target'] = NULL;
$renderChildrenClosure184 = function() {return NULL;};
$viewHelper185 = $self->getViewHelper('$viewHelper185', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper');
$viewHelper185->setArguments($arguments183);
$viewHelper185->setRenderingContext($renderingContext);
$viewHelper185->setRenderChildrenClosure($renderChildrenClosure184);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper

$output174 .= $viewHelper185->initializeArgumentsAndRender();

$output174 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$arguments186 = array();
$arguments186['class'] = 'btn btn-default';
$arguments186['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments186['additionalAttributes'] = NULL;
$arguments186['data'] = NULL;
$arguments186['dir'] = NULL;
$arguments186['id'] = NULL;
$arguments186['lang'] = NULL;
$arguments186['style'] = NULL;
$arguments186['title'] = NULL;
$arguments186['accesskey'] = NULL;
$arguments186['tabindex'] = NULL;
$arguments186['onclick'] = NULL;
$arguments186['name'] = NULL;
$arguments186['rel'] = NULL;
$arguments186['rev'] = NULL;
$arguments186['target'] = NULL;
$renderChildrenClosure187 = function() {return NULL;};
$viewHelper188 = $self->getViewHelper('$viewHelper188', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper');
$viewHelper188->setArguments($arguments186);
$viewHelper188->setRenderingContext($renderingContext);
$viewHelper188->setRenderChildrenClosure($renderChildrenClosure187);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper

$output174 .= $viewHelper188->initializeArgumentsAndRender();

$output174 .= '
							<span class="btn btn-default">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments189 = array();
$arguments189['action'] = 'downloadExtensionZip';
$arguments189['controller'] = 'Action';
// Rendering Array
$array190 = array();
$array190['extension'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$arguments189['arguments'] = $array190;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments191 = array();
$arguments191['key'] = 'extensionList.downloadzip';
$arguments191['id'] = NULL;
$arguments191['default'] = NULL;
$arguments191['htmlEscape'] = NULL;
$arguments191['arguments'] = NULL;
$arguments191['extensionName'] = NULL;
$renderChildrenClosure192 = function() {return NULL;};
$arguments189['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);
$arguments189['additionalAttributes'] = NULL;
$arguments189['data'] = NULL;
$arguments189['extensionName'] = NULL;
$arguments189['pluginName'] = NULL;
$arguments189['pageUid'] = NULL;
$arguments189['pageType'] = 0;
$arguments189['noCache'] = false;
$arguments189['noCacheHash'] = false;
$arguments189['section'] = '';
$arguments189['format'] = '';
$arguments189['linkAccessRestrictedPages'] = false;
$arguments189['additionalParams'] = array (
);
$arguments189['absolute'] = false;
$arguments189['addQueryString'] = false;
$arguments189['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments189['addQueryStringMethod'] = NULL;
$arguments189['class'] = NULL;
$arguments189['dir'] = NULL;
$arguments189['id'] = NULL;
$arguments189['lang'] = NULL;
$arguments189['style'] = NULL;
$arguments189['accesskey'] = NULL;
$arguments189['tabindex'] = NULL;
$arguments189['onclick'] = NULL;
$arguments189['name'] = NULL;
$arguments189['rel'] = NULL;
$arguments189['rev'] = NULL;
$arguments189['target'] = NULL;
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output194 = '';

$output194 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments195 = array();
$arguments195['identifier'] = 'actions-system-extension-download';
$arguments195['size'] = 'small';
$arguments195['overlay'] = NULL;
$arguments195['state'] = 'default';
$arguments195['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure196 = function() {return NULL;};

$output194 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output194 .= '
								';
return $output194;
};
$viewHelper197 = $self->getViewHelper('$viewHelper197', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper197->setArguments($arguments189);
$viewHelper197->setRenderingContext($renderingContext);
$viewHelper197->setRenderChildrenClosure($renderChildrenClosure193);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output174 .= $viewHelper197->initializeArgumentsAndRender();

$output174 .= '
							</span>
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper
$arguments198 = array();
$arguments198['class'] = 'btn btn-default';
$arguments198['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments198['additionalAttributes'] = NULL;
$arguments198['data'] = NULL;
$arguments198['dir'] = NULL;
$arguments198['id'] = NULL;
$arguments198['lang'] = NULL;
$arguments198['style'] = NULL;
$arguments198['title'] = NULL;
$arguments198['accesskey'] = NULL;
$arguments198['tabindex'] = NULL;
$arguments198['onclick'] = NULL;
$arguments198['name'] = NULL;
$arguments198['rel'] = NULL;
$arguments198['rev'] = NULL;
$arguments198['target'] = NULL;
$renderChildrenClosure199 = function() {return NULL;};
$viewHelper200 = $self->getViewHelper('$viewHelper200', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper');
$viewHelper200->setArguments($arguments198);
$viewHelper200->setRenderingContext($renderingContext);
$viewHelper200->setRenderChildrenClosure($renderChildrenClosure199);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper

$output174 .= $viewHelper200->initializeArgumentsAndRender();

$output174 .= '
						';
return $output174;
};
$viewHelper201 = $self->getViewHelper('$viewHelper201', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper');
$viewHelper201->setArguments($arguments172);
$viewHelper201->setRenderingContext($renderingContext);
$viewHelper201->setRenderChildrenClosure($renderChildrenClosure173);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper

$output31 .= $viewHelper201->initializeArgumentsAndRender();

$output31 .= '
					</div>
				</td>
				</tr>
			';
return $output31;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output3 .= '
		</tbody>
	</table>
	</div>
';


return $output3;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output202 = '';

$output202 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments203 = array();
$arguments203['name'] = 'main';
$renderChildrenClosure204 = function() {return NULL;};
$viewHelper205 = $self->getViewHelper('$viewHelper205', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper205->setArguments($arguments203);
$viewHelper205->setRenderingContext($renderingContext);
$viewHelper205->setRenderChildrenClosure($renderChildrenClosure204);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output202 .= $viewHelper205->initializeArgumentsAndRender();

$output202 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments206 = array();
$arguments206['name'] = 'headline';
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output208 = '';

$output208 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments209 = array();
$arguments209['key'] = 'installedExtensions';
$arguments209['id'] = NULL;
$arguments209['default'] = NULL;
$arguments209['htmlEscape'] = NULL;
$arguments209['arguments'] = NULL;
$arguments209['extensionName'] = NULL;
$renderChildrenClosure210 = function() {return NULL;};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

$output208 .= '</h1>
';
return $output208;
};

$output202 .= '';

$output202 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments211 = array();
$arguments211['name'] = 'content';
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output213 = '';

$output213 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments214 = array();
$arguments214['partial'] = 'List/UploadForm';
$arguments214['section'] = NULL;
$arguments214['arguments'] = array (
);
$arguments214['optional'] = false;
$renderChildrenClosure215 = function() {return NULL;};

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output213 .= '

	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments216 = array();
$arguments216['name'] = 'Tx_Extensionmanager_extensionkey';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments217 = array();
$arguments217['key'] = 'extensionList.search';
$arguments217['id'] = NULL;
$arguments217['default'] = NULL;
$arguments217['htmlEscape'] = NULL;
$arguments217['arguments'] = NULL;
$arguments217['extensionName'] = NULL;
$renderChildrenClosure218 = function() {return NULL;};
$arguments216['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);
$arguments216['id'] = 'Tx_Extensionmanager_extensionkey';
$arguments216['value'] = $currentVariableContainer->getOrNull('search');
$arguments216['class'] = 'form-control';
$arguments216['additionalAttributes'] = NULL;
$arguments216['data'] = NULL;
$arguments216['required'] = false;
$arguments216['type'] = 'text';
$arguments216['property'] = NULL;
$arguments216['autofocus'] = NULL;
$arguments216['disabled'] = NULL;
$arguments216['maxlength'] = NULL;
$arguments216['readonly'] = NULL;
$arguments216['size'] = NULL;
$arguments216['pattern'] = NULL;
$arguments216['errorClass'] = 'f3-form-error';
$arguments216['dir'] = NULL;
$arguments216['lang'] = NULL;
$arguments216['style'] = NULL;
$arguments216['title'] = NULL;
$arguments216['accesskey'] = NULL;
$arguments216['tabindex'] = NULL;
$arguments216['onclick'] = NULL;
$renderChildrenClosure219 = function() {return NULL;};
$viewHelper220 = $self->getViewHelper('$viewHelper220', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper220->setArguments($arguments216);
$viewHelper220->setRenderingContext($renderingContext);
$viewHelper220->setRenderChildrenClosure($renderChildrenClosure219);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output213 .= $viewHelper220->initializeArgumentsAndRender();

$output213 .= '
		</div>
	</form>
	<br>
	<div class="table-fit">
		<table id="typo3-extension-list" class="table table-striped table-hover typo3-extension-list">
		<thead>
			<tr>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments221 = array();
$arguments221['key'] = 'extensionList.header.title.update';
$arguments221['id'] = NULL;
$arguments221['default'] = NULL;
$arguments221['htmlEscape'] = NULL;
$arguments221['arguments'] = NULL;
$arguments221['extensionName'] = NULL;
$renderChildrenClosure222 = function() {return NULL;};

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output213 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments223 = array();
$arguments223['key'] = 'extensionList.header.update';
$arguments223['id'] = NULL;
$arguments223['default'] = NULL;
$arguments223['htmlEscape'] = NULL;
$arguments223['arguments'] = NULL;
$arguments223['extensionName'] = NULL;
$renderChildrenClosure224 = function() {return NULL;};

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output213 .= '</th>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments225 = array();
$arguments225['key'] = 'extensionList.header.title.activate';
$arguments225['id'] = NULL;
$arguments225['default'] = NULL;
$arguments225['htmlEscape'] = NULL;
$arguments225['arguments'] = NULL;
$arguments225['extensionName'] = NULL;
$renderChildrenClosure226 = function() {return NULL;};

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output213 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments227 = array();
$arguments227['key'] = 'extensionList.header.activate';
$arguments227['id'] = NULL;
$arguments227['default'] = NULL;
$arguments227['htmlEscape'] = NULL;
$arguments227['arguments'] = NULL;
$arguments227['extensionName'] = NULL;
$renderChildrenClosure228 = function() {return NULL;};

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output213 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments229 = array();
$arguments229['key'] = 'extensionList.header.extensionName';
$arguments229['id'] = NULL;
$arguments229['default'] = NULL;
$arguments229['htmlEscape'] = NULL;
$arguments229['arguments'] = NULL;
$arguments229['extensionName'] = NULL;
$renderChildrenClosure230 = function() {return NULL;};

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output213 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments231 = array();
$arguments231['key'] = 'extensionList.header.extensionKey';
$arguments231['id'] = NULL;
$arguments231['default'] = NULL;
$arguments231['htmlEscape'] = NULL;
$arguments231['arguments'] = NULL;
$arguments231['extensionName'] = NULL;
$renderChildrenClosure232 = function() {return NULL;};

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output213 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments233 = array();
$arguments233['key'] = 'extensionList.header.extensionVersion';
$arguments233['id'] = NULL;
$arguments233['default'] = NULL;
$arguments233['htmlEscape'] = NULL;
$arguments233['arguments'] = NULL;
$arguments233['extensionName'] = NULL;
$renderChildrenClosure234 = function() {return NULL;};

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output213 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments235 = array();
$arguments235['key'] = 'extensionList.header.extensionState';
$arguments235['id'] = NULL;
$arguments235['default'] = NULL;
$arguments235['htmlEscape'] = NULL;
$arguments235['arguments'] = NULL;
$arguments235['extensionName'] = NULL;
$renderChildrenClosure236 = function() {return NULL;};

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output213 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments237 = array();
$arguments237['key'] = 'extensionList.header.extensionActions';
$arguments237['id'] = NULL;
$arguments237['default'] = NULL;
$arguments237['htmlEscape'] = NULL;
$arguments237['arguments'] = NULL;
$arguments237['extensionName'] = NULL;
$renderChildrenClosure238 = function() {return NULL;};

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output213 .= '</th>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments239 = array();
$arguments239['each'] = $currentVariableContainer->getOrNull('extensions');
$arguments239['as'] = 'extension';
$arguments239['key'] = 'extensionKey';
$arguments239['reverse'] = false;
$arguments239['iteration'] = NULL;
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output241 = '';

$output241 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments242 = array();
// Rendering Boolean node
$arguments242['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject', $renderingContext));
$arguments242['then'] = NULL;
$arguments242['else'] = NULL;
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output244 = '';

$output244 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments245 = array();
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output247 = '';

$output247 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments248 = array();
$arguments248['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments248['keepQuotes'] = false;
$arguments248['encoding'] = NULL;
$arguments248['doubleEncode'] = true;
$renderChildrenClosure249 = function() {return NULL;};
$value250 = ($arguments248['value'] !== NULL ? $arguments248['value'] : $renderChildrenClosure249());

$output247 .= (!is_string($value250) ? $value250 : htmlspecialchars($value250, ($arguments248['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments248['encoding'] !== NULL ? $arguments248['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments248['doubleEncode']));

$output247 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments251 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments252 = array();
$arguments252['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments252['keepQuotes'] = false;
$arguments252['encoding'] = NULL;
$arguments252['doubleEncode'] = true;
$renderChildrenClosure253 = function() {return NULL;};
$value254 = ($arguments252['value'] !== NULL ? $arguments252['value'] : $renderChildrenClosure253());
$arguments251['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value254) ? $value254 : htmlspecialchars($value254, ($arguments252['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments252['encoding'] !== NULL ? $arguments252['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments252['doubleEncode'])), -1);
$arguments251['then'] = 'insecure';
$arguments251['else'] = NULL;
$renderChildrenClosure255 = function() {return NULL;};

$output247 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments251, $renderChildrenClosure255, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments256 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments257 = array();
$arguments257['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments257['keepQuotes'] = false;
$arguments257['encoding'] = NULL;
$arguments257['doubleEncode'] = true;
$renderChildrenClosure258 = function() {return NULL;};
$value259 = ($arguments257['value'] !== NULL ? $arguments257['value'] : $renderChildrenClosure258());
$arguments256['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value259) ? $value259 : htmlspecialchars($value259, ($arguments257['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments257['encoding'] !== NULL ? $arguments257['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments257['doubleEncode'])), -2);
$arguments256['then'] = 'outdated';
$arguments256['else'] = NULL;
$renderChildrenClosure260 = function() {return NULL;};

$output247 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments256, $renderChildrenClosure260, $renderingContext);

$output247 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments261 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments262 = array();
$arguments262['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments262['keepQuotes'] = false;
$arguments262['encoding'] = NULL;
$arguments262['doubleEncode'] = true;
$renderChildrenClosure263 = function() {return NULL;};
$value264 = ($arguments262['value'] !== NULL ? $arguments262['value'] : $renderChildrenClosure263());
$arguments261['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value264) ? $value264 : htmlspecialchars($value264, ($arguments262['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments262['encoding'] !== NULL ? $arguments262['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments262['doubleEncode'])));
$arguments261['then'] = '';
$arguments261['else'] = 'inactive';
$renderChildrenClosure265 = function() {return NULL;};

$output247 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments261, $renderChildrenClosure265, $renderingContext);

$output247 .= '">
					';
return $output247;
};

$output244 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output244 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments266 = array();
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output268 = '';

$output268 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments269 = array();
$arguments269['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments269['keepQuotes'] = false;
$arguments269['encoding'] = NULL;
$arguments269['doubleEncode'] = true;
$renderChildrenClosure270 = function() {return NULL;};
$value271 = ($arguments269['value'] !== NULL ? $arguments269['value'] : $renderChildrenClosure270());

$output268 .= (!is_string($value271) ? $value271 : htmlspecialchars($value271, ($arguments269['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments269['encoding'] !== NULL ? $arguments269['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments269['doubleEncode']));

$output268 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments272 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments273 = array();
$arguments273['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments273['keepQuotes'] = false;
$arguments273['encoding'] = NULL;
$arguments273['doubleEncode'] = true;
$renderChildrenClosure274 = function() {return NULL;};
$value275 = ($arguments273['value'] !== NULL ? $arguments273['value'] : $renderChildrenClosure274());
$arguments272['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value275) ? $value275 : htmlspecialchars($value275, ($arguments273['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments273['encoding'] !== NULL ? $arguments273['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments273['doubleEncode'])));
$arguments272['then'] = '';
$arguments272['else'] = 'inactive';
$renderChildrenClosure276 = function() {return NULL;};

$output268 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments272, $renderChildrenClosure276, $renderingContext);

$output268 .= '">
					';
return $output268;
};

$output244 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);

$output244 .= '
				';
return $output244;
};
$arguments242['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output277 = '';

$output277 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments278 = array();
$arguments278['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments278['keepQuotes'] = false;
$arguments278['encoding'] = NULL;
$arguments278['doubleEncode'] = true;
$renderChildrenClosure279 = function() {return NULL;};
$value280 = ($arguments278['value'] !== NULL ? $arguments278['value'] : $renderChildrenClosure279());

$output277 .= (!is_string($value280) ? $value280 : htmlspecialchars($value280, ($arguments278['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments278['encoding'] !== NULL ? $arguments278['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments278['doubleEncode']));

$output277 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments281 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments282 = array();
$arguments282['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments282['keepQuotes'] = false;
$arguments282['encoding'] = NULL;
$arguments282['doubleEncode'] = true;
$renderChildrenClosure283 = function() {return NULL;};
$value284 = ($arguments282['value'] !== NULL ? $arguments282['value'] : $renderChildrenClosure283());
$arguments281['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value284) ? $value284 : htmlspecialchars($value284, ($arguments282['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments282['encoding'] !== NULL ? $arguments282['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments282['doubleEncode'])), -1);
$arguments281['then'] = 'insecure';
$arguments281['else'] = NULL;
$renderChildrenClosure285 = function() {return NULL;};

$output277 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments281, $renderChildrenClosure285, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments286 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments287 = array();
$arguments287['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments287['keepQuotes'] = false;
$arguments287['encoding'] = NULL;
$arguments287['doubleEncode'] = true;
$renderChildrenClosure288 = function() {return NULL;};
$value289 = ($arguments287['value'] !== NULL ? $arguments287['value'] : $renderChildrenClosure288());
$arguments286['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value289) ? $value289 : htmlspecialchars($value289, ($arguments287['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments287['encoding'] !== NULL ? $arguments287['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments287['doubleEncode'])), -2);
$arguments286['then'] = 'outdated';
$arguments286['else'] = NULL;
$renderChildrenClosure290 = function() {return NULL;};

$output277 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments286, $renderChildrenClosure290, $renderingContext);

$output277 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments291 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments292 = array();
$arguments292['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments292['keepQuotes'] = false;
$arguments292['encoding'] = NULL;
$arguments292['doubleEncode'] = true;
$renderChildrenClosure293 = function() {return NULL;};
$value294 = ($arguments292['value'] !== NULL ? $arguments292['value'] : $renderChildrenClosure293());
$arguments291['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value294) ? $value294 : htmlspecialchars($value294, ($arguments292['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments292['encoding'] !== NULL ? $arguments292['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments292['doubleEncode'])));
$arguments291['then'] = '';
$arguments291['else'] = 'inactive';
$renderChildrenClosure295 = function() {return NULL;};

$output277 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments291, $renderChildrenClosure295, $renderingContext);

$output277 .= '">
					';
return $output277;
};
$arguments242['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output296 = '';

$output296 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments297 = array();
$arguments297['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments297['keepQuotes'] = false;
$arguments297['encoding'] = NULL;
$arguments297['doubleEncode'] = true;
$renderChildrenClosure298 = function() {return NULL;};
$value299 = ($arguments297['value'] !== NULL ? $arguments297['value'] : $renderChildrenClosure298());

$output296 .= (!is_string($value299) ? $value299 : htmlspecialchars($value299, ($arguments297['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments297['encoding'] !== NULL ? $arguments297['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments297['doubleEncode']));

$output296 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments300 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments301 = array();
$arguments301['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments301['keepQuotes'] = false;
$arguments301['encoding'] = NULL;
$arguments301['doubleEncode'] = true;
$renderChildrenClosure302 = function() {return NULL;};
$value303 = ($arguments301['value'] !== NULL ? $arguments301['value'] : $renderChildrenClosure302());
$arguments300['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value303) ? $value303 : htmlspecialchars($value303, ($arguments301['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments301['encoding'] !== NULL ? $arguments301['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments301['doubleEncode'])));
$arguments300['then'] = '';
$arguments300['else'] = 'inactive';
$renderChildrenClosure304 = function() {return NULL;};

$output296 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments300, $renderChildrenClosure304, $renderingContext);

$output296 .= '">
					';
return $output296;
};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output241 .= '
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments305 = array();
// Rendering Boolean node
$arguments305['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateAvailable', $renderingContext));
$arguments305['then'] = NULL;
$arguments305['else'] = NULL;
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output307 = '';

$output307 .= '
						<div class="btn-group">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments308 = array();
// Rendering Boolean node
$arguments308['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext), 'excludeFromUpdates');
$arguments308['then'] = NULL;
$arguments308['else'] = NULL;
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output310 = '';

$output310 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments311 = array();
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output313 = '';

$output313 .= '
									<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments314 = array();
$arguments314['key'] = 'extensionList.updateDisabled';
$arguments314['id'] = NULL;
$arguments314['default'] = NULL;
$arguments314['htmlEscape'] = NULL;
$arguments314['arguments'] = NULL;
$arguments314['extensionName'] = NULL;
$renderChildrenClosure315 = function() {return NULL;};

$output313 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output313 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments316 = array();
$arguments316['identifier'] = 'actions-system-extension-update';
$arguments316['size'] = 'small';
$arguments316['overlay'] = NULL;
$arguments316['state'] = 'default';
$arguments316['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure317 = function() {return NULL;};

$output313 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);

$output313 .= '
									</span>
								';
return $output313;
};

$output310 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext);

$output310 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments318 = array();
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output320 = '';

$output320 .= '
									<span class="btn btn-default">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments321 = array();
$arguments321['action'] = 'updateCommentForUpdatableVersions';
// Rendering Array
$array322 = array();
$array322['data-action'] = 'update-extension';
$arguments321['additionalAttributes'] = $array322;
$arguments321['format'] = 'json';
$arguments321['controller'] = 'Download';
// Rendering Array
$array323 = array();
$array323['extension'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$array323['integerVersionStart'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.integerVersion', $renderingContext);
$array323['integerVersionStop'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.integerVersion', $renderingContext);
$arguments321['arguments'] = $array323;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments324 = array();
$arguments324['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array325 = array();
$array325['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.version', $renderingContext);
$arguments324['arguments'] = $array325;
$arguments324['id'] = NULL;
$arguments324['default'] = NULL;
$arguments324['htmlEscape'] = NULL;
$arguments324['extensionName'] = NULL;
$renderChildrenClosure326 = function() {return NULL;};
$arguments321['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments324, $renderChildrenClosure326, $renderingContext);
$arguments321['data'] = NULL;
$arguments321['extensionName'] = NULL;
$arguments321['pluginName'] = NULL;
$arguments321['pageUid'] = NULL;
$arguments321['pageType'] = 0;
$arguments321['noCache'] = false;
$arguments321['noCacheHash'] = false;
$arguments321['section'] = '';
$arguments321['linkAccessRestrictedPages'] = false;
$arguments321['additionalParams'] = array (
);
$arguments321['absolute'] = false;
$arguments321['addQueryString'] = false;
$arguments321['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments321['addQueryStringMethod'] = NULL;
$arguments321['class'] = NULL;
$arguments321['dir'] = NULL;
$arguments321['id'] = NULL;
$arguments321['lang'] = NULL;
$arguments321['style'] = NULL;
$arguments321['accesskey'] = NULL;
$arguments321['tabindex'] = NULL;
$arguments321['onclick'] = NULL;
$arguments321['name'] = NULL;
$arguments321['rel'] = NULL;
$arguments321['rev'] = NULL;
$arguments321['target'] = NULL;
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output328 = '';

$output328 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments329 = array();
$arguments329['identifier'] = 'actions-system-extension-update';
$arguments329['size'] = 'small';
$arguments329['overlay'] = NULL;
$arguments329['state'] = 'default';
$arguments329['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure330 = function() {return NULL;};

$output328 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext);

$output328 .= '
										';
return $output328;
};
$viewHelper331 = $self->getViewHelper('$viewHelper331', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper331->setArguments($arguments321);
$viewHelper331->setRenderingContext($renderingContext);
$viewHelper331->setRenderChildrenClosure($renderChildrenClosure327);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output320 .= $viewHelper331->initializeArgumentsAndRender();

$output320 .= '
									</span>
								';
return $output320;
};

$output310 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output310 .= '
							';
return $output310;
};
$arguments308['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output332 = '';

$output332 .= '
									<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments333 = array();
$arguments333['key'] = 'extensionList.updateDisabled';
$arguments333['id'] = NULL;
$arguments333['default'] = NULL;
$arguments333['htmlEscape'] = NULL;
$arguments333['arguments'] = NULL;
$arguments333['extensionName'] = NULL;
$renderChildrenClosure334 = function() {return NULL;};

$output332 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext);

$output332 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments335 = array();
$arguments335['identifier'] = 'actions-system-extension-update';
$arguments335['size'] = 'small';
$arguments335['overlay'] = NULL;
$arguments335['state'] = 'default';
$arguments335['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure336 = function() {return NULL;};

$output332 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output332 .= '
									</span>
								';
return $output332;
};
$arguments308['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output337 = '';

$output337 .= '
									<span class="btn btn-default">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments338 = array();
$arguments338['action'] = 'updateCommentForUpdatableVersions';
// Rendering Array
$array339 = array();
$array339['data-action'] = 'update-extension';
$arguments338['additionalAttributes'] = $array339;
$arguments338['format'] = 'json';
$arguments338['controller'] = 'Download';
// Rendering Array
$array340 = array();
$array340['extension'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$array340['integerVersionStart'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.integerVersion', $renderingContext);
$array340['integerVersionStop'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.integerVersion', $renderingContext);
$arguments338['arguments'] = $array340;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments341 = array();
$arguments341['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array342 = array();
$array342['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.version', $renderingContext);
$arguments341['arguments'] = $array342;
$arguments341['id'] = NULL;
$arguments341['default'] = NULL;
$arguments341['htmlEscape'] = NULL;
$arguments341['extensionName'] = NULL;
$renderChildrenClosure343 = function() {return NULL;};
$arguments338['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments341, $renderChildrenClosure343, $renderingContext);
$arguments338['data'] = NULL;
$arguments338['extensionName'] = NULL;
$arguments338['pluginName'] = NULL;
$arguments338['pageUid'] = NULL;
$arguments338['pageType'] = 0;
$arguments338['noCache'] = false;
$arguments338['noCacheHash'] = false;
$arguments338['section'] = '';
$arguments338['linkAccessRestrictedPages'] = false;
$arguments338['additionalParams'] = array (
);
$arguments338['absolute'] = false;
$arguments338['addQueryString'] = false;
$arguments338['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments338['addQueryStringMethod'] = NULL;
$arguments338['class'] = NULL;
$arguments338['dir'] = NULL;
$arguments338['id'] = NULL;
$arguments338['lang'] = NULL;
$arguments338['style'] = NULL;
$arguments338['accesskey'] = NULL;
$arguments338['tabindex'] = NULL;
$arguments338['onclick'] = NULL;
$arguments338['name'] = NULL;
$arguments338['rel'] = NULL;
$arguments338['rev'] = NULL;
$arguments338['target'] = NULL;
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output345 = '';

$output345 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments346 = array();
$arguments346['identifier'] = 'actions-system-extension-update';
$arguments346['size'] = 'small';
$arguments346['overlay'] = NULL;
$arguments346['state'] = 'default';
$arguments346['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure347 = function() {return NULL;};

$output345 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);

$output345 .= '
										';
return $output345;
};
$viewHelper348 = $self->getViewHelper('$viewHelper348', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper348->setArguments($arguments338);
$viewHelper348->setRenderingContext($renderingContext);
$viewHelper348->setRenderChildrenClosure($renderChildrenClosure344);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output337 .= $viewHelper348->initializeArgumentsAndRender();

$output337 .= '
									</span>
								';
return $output337;
};

$output307 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);

$output307 .= '
						</div>
					';
return $output307;
};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output241 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$arguments349 = array();
$arguments349['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments349['additionalAttributes'] = NULL;
$arguments349['data'] = NULL;
$arguments349['class'] = NULL;
$arguments349['dir'] = NULL;
$arguments349['id'] = NULL;
$arguments349['lang'] = NULL;
$arguments349['style'] = NULL;
$arguments349['title'] = NULL;
$arguments349['accesskey'] = NULL;
$arguments349['tabindex'] = NULL;
$arguments349['onclick'] = NULL;
$arguments349['name'] = NULL;
$arguments349['rel'] = NULL;
$arguments349['rev'] = NULL;
$arguments349['target'] = NULL;
$renderChildrenClosure350 = function() {return NULL;};
$viewHelper351 = $self->getViewHelper('$viewHelper351', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper');
$viewHelper351->setArguments($arguments349);
$viewHelper351->setRenderingContext($renderingContext);
$viewHelper351->setRenderChildrenClosure($renderChildrenClosure350);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper

$output241 .= $viewHelper351->initializeArgumentsAndRender();

$output241 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments352 = array();
// Rendering Boolean node
$arguments352['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'ext_icon', $renderingContext));
$arguments352['then'] = NULL;
$arguments352['else'] = NULL;
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output354 = '';

$output354 .= '
						<img class="ext-icon" src="../';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments355 = array();
$arguments355['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'siteRelPath', $renderingContext);
$arguments355['keepQuotes'] = false;
$arguments355['encoding'] = NULL;
$arguments355['doubleEncode'] = true;
$renderChildrenClosure356 = function() {return NULL;};
$value357 = ($arguments355['value'] !== NULL ? $arguments355['value'] : $renderChildrenClosure356());

$output354 .= (!is_string($value357) ? $value357 : htmlspecialchars($value357, ($arguments355['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments355['encoding'] !== NULL ? $arguments355['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments355['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments358 = array();
$arguments358['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'ext_icon', $renderingContext);
$arguments358['keepQuotes'] = false;
$arguments358['encoding'] = NULL;
$arguments358['doubleEncode'] = true;
$renderChildrenClosure359 = function() {return NULL;};
$value360 = ($arguments358['value'] !== NULL ? $arguments358['value'] : $renderChildrenClosure359());

$output354 .= (!is_string($value360) ? $value360 : htmlspecialchars($value360, ($arguments358['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments358['encoding'] !== NULL ? $arguments358['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments358['doubleEncode']));

$output354 .= '" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments361 = array();
$arguments361['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'title', $renderingContext);
$arguments361['keepQuotes'] = false;
$arguments361['encoding'] = NULL;
$arguments361['doubleEncode'] = true;
$renderChildrenClosure362 = function() {return NULL;};
$value363 = ($arguments361['value'] !== NULL ? $arguments361['value'] : $renderChildrenClosure362());

$output354 .= (!is_string($value363) ? $value363 : htmlspecialchars($value363, ($arguments361['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments361['encoding'] !== NULL ? $arguments361['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments361['doubleEncode']));

$output354 .= '" />
					';
return $output354;
};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments352, $renderChildrenClosure353, $renderingContext);

$output241 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$arguments364 = array();
$arguments364['extension'] = $currentVariableContainer->getOrNull('extension');
// Rendering Boolean node
$arguments364['forceConfiguration'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Boolean node
$arguments364['showDescription'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments364['additionalAttributes'] = NULL;
$arguments364['data'] = NULL;
$arguments364['class'] = NULL;
$arguments364['dir'] = NULL;
$arguments364['id'] = NULL;
$arguments364['lang'] = NULL;
$arguments364['style'] = NULL;
$arguments364['title'] = NULL;
$arguments364['accesskey'] = NULL;
$arguments364['tabindex'] = NULL;
$arguments364['onclick'] = NULL;
$arguments364['name'] = NULL;
$arguments364['rel'] = NULL;
$arguments364['rev'] = NULL;
$arguments364['target'] = NULL;
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments366 = array();
$arguments366['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'title', $renderingContext);
$arguments366['keepQuotes'] = false;
$arguments366['encoding'] = NULL;
$arguments366['doubleEncode'] = true;
$renderChildrenClosure367 = function() {return NULL;};
$value368 = ($arguments366['value'] !== NULL ? $arguments366['value'] : $renderChildrenClosure367());
return (!is_string($value368) ? $value368 : htmlspecialchars($value368, ($arguments366['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments366['encoding'] !== NULL ? $arguments366['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments366['doubleEncode']));
};
$viewHelper369 = $self->getViewHelper('$viewHelper369', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper');
$viewHelper369->setArguments($arguments364);
$viewHelper369->setRenderingContext($renderingContext);
$viewHelper369->setRenderChildrenClosure($renderChildrenClosure365);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper

$output241 .= $viewHelper369->initializeArgumentsAndRender();

$output241 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments370 = array();
$arguments370['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments370['keepQuotes'] = false;
$arguments370['encoding'] = NULL;
$arguments370['doubleEncode'] = true;
$renderChildrenClosure371 = function() {return NULL;};
$value372 = ($arguments370['value'] !== NULL ? $arguments370['value'] : $renderChildrenClosure371());

$output241 .= (!is_string($value372) ? $value372 : htmlspecialchars($value372, ($arguments370['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments370['encoding'] !== NULL ? $arguments370['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments370['doubleEncode']));

$output241 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments373 = array();
$arguments373['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'version', $renderingContext);
$arguments373['keepQuotes'] = false;
$arguments373['encoding'] = NULL;
$arguments373['doubleEncode'] = true;
$renderChildrenClosure374 = function() {return NULL;};
$value375 = ($arguments373['value'] !== NULL ? $arguments373['value'] : $renderChildrenClosure374());

$output241 .= (!is_string($value375) ? $value375 : htmlspecialchars($value375, ($arguments373['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments373['encoding'] !== NULL ? $arguments373['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments373['doubleEncode']));

$output241 .= '
				</td>
				<td>
					<span class="label label-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments376 = array();
$arguments376['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext);
$arguments376['keepQuotes'] = false;
$arguments376['encoding'] = NULL;
$arguments376['doubleEncode'] = true;
$renderChildrenClosure377 = function() {return NULL;};
$value378 = ($arguments376['value'] !== NULL ? $arguments376['value'] : $renderChildrenClosure377());

$output241 .= (!is_string($value378) ? $value378 : htmlspecialchars($value378, ($arguments376['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments376['encoding'] !== NULL ? $arguments376['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments376['doubleEncode']));

$output241 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments379 = array();
$arguments379['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext);
$arguments379['keepQuotes'] = false;
$arguments379['encoding'] = NULL;
$arguments379['doubleEncode'] = true;
$renderChildrenClosure380 = function() {return NULL;};
$value381 = ($arguments379['value'] !== NULL ? $arguments379['value'] : $renderChildrenClosure380());

$output241 .= (!is_string($value381) ? $value381 : htmlspecialchars($value381, ($arguments379['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments379['encoding'] !== NULL ? $arguments379['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments379['doubleEncode']));

$output241 .= '</span>
				</td>
				<td>
					<div class="btn-group">
						';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$arguments382 = array();
$arguments382['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments382['additionalAttributes'] = NULL;
$arguments382['data'] = NULL;
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output384 = '';

$output384 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$arguments385 = array();
$arguments385['class'] = 'btn btn-default';
$arguments385['extension'] = $currentVariableContainer->getOrNull('extension');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments386 = array();
$arguments386['key'] = 'extensionList.configure';
$arguments386['id'] = NULL;
$arguments386['default'] = NULL;
$arguments386['htmlEscape'] = NULL;
$arguments386['arguments'] = NULL;
$arguments386['extensionName'] = NULL;
$renderChildrenClosure387 = function() {return NULL;};
$arguments385['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments386, $renderChildrenClosure387, $renderingContext);
$arguments385['additionalAttributes'] = NULL;
$arguments385['data'] = NULL;
$arguments385['forceConfiguration'] = true;
$arguments385['showDescription'] = false;
$arguments385['dir'] = NULL;
$arguments385['id'] = NULL;
$arguments385['lang'] = NULL;
$arguments385['style'] = NULL;
$arguments385['accesskey'] = NULL;
$arguments385['tabindex'] = NULL;
$arguments385['onclick'] = NULL;
$arguments385['name'] = NULL;
$arguments385['rel'] = NULL;
$arguments385['rev'] = NULL;
$arguments385['target'] = NULL;
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output389 = '';

$output389 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments390 = array();
$arguments390['identifier'] = 'actions-system-extension-configure';
$arguments390['size'] = 'small';
$arguments390['overlay'] = NULL;
$arguments390['state'] = 'default';
$arguments390['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure391 = function() {return NULL;};

$output389 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext);

$output389 .= '
							';
return $output389;
};
$viewHelper392 = $self->getViewHelper('$viewHelper392', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper');
$viewHelper392->setArguments($arguments385);
$viewHelper392->setRenderingContext($renderingContext);
$viewHelper392->setRenderChildrenClosure($renderChildrenClosure388);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper

$output384 .= $viewHelper392->initializeArgumentsAndRender();

$output384 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$arguments393 = array();
$arguments393['class'] = 'btn btn-default';
$arguments393['extensionKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$arguments393['additionalAttributes'] = NULL;
$arguments393['data'] = NULL;
$arguments393['dir'] = NULL;
$arguments393['id'] = NULL;
$arguments393['lang'] = NULL;
$arguments393['style'] = NULL;
$arguments393['title'] = NULL;
$arguments393['accesskey'] = NULL;
$arguments393['tabindex'] = NULL;
$arguments393['onclick'] = NULL;
$arguments393['name'] = NULL;
$arguments393['rel'] = NULL;
$arguments393['rev'] = NULL;
$arguments393['target'] = NULL;
$renderChildrenClosure394 = function() {return NULL;};
$viewHelper395 = $self->getViewHelper('$viewHelper395', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper');
$viewHelper395->setArguments($arguments393);
$viewHelper395->setRenderingContext($renderingContext);
$viewHelper395->setRenderChildrenClosure($renderChildrenClosure394);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper

$output384 .= $viewHelper395->initializeArgumentsAndRender();

$output384 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$arguments396 = array();
$arguments396['class'] = 'btn btn-default';
$arguments396['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments396['additionalAttributes'] = NULL;
$arguments396['data'] = NULL;
$arguments396['dir'] = NULL;
$arguments396['id'] = NULL;
$arguments396['lang'] = NULL;
$arguments396['style'] = NULL;
$arguments396['title'] = NULL;
$arguments396['accesskey'] = NULL;
$arguments396['tabindex'] = NULL;
$arguments396['onclick'] = NULL;
$arguments396['name'] = NULL;
$arguments396['rel'] = NULL;
$arguments396['rev'] = NULL;
$arguments396['target'] = NULL;
$renderChildrenClosure397 = function() {return NULL;};
$viewHelper398 = $self->getViewHelper('$viewHelper398', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper');
$viewHelper398->setArguments($arguments396);
$viewHelper398->setRenderingContext($renderingContext);
$viewHelper398->setRenderChildrenClosure($renderChildrenClosure397);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper

$output384 .= $viewHelper398->initializeArgumentsAndRender();

$output384 .= '
							<span class="btn btn-default">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments399 = array();
$arguments399['action'] = 'downloadExtensionZip';
$arguments399['controller'] = 'Action';
// Rendering Array
$array400 = array();
$array400['extension'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$arguments399['arguments'] = $array400;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments401 = array();
$arguments401['key'] = 'extensionList.downloadzip';
$arguments401['id'] = NULL;
$arguments401['default'] = NULL;
$arguments401['htmlEscape'] = NULL;
$arguments401['arguments'] = NULL;
$arguments401['extensionName'] = NULL;
$renderChildrenClosure402 = function() {return NULL;};
$arguments399['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments401, $renderChildrenClosure402, $renderingContext);
$arguments399['additionalAttributes'] = NULL;
$arguments399['data'] = NULL;
$arguments399['extensionName'] = NULL;
$arguments399['pluginName'] = NULL;
$arguments399['pageUid'] = NULL;
$arguments399['pageType'] = 0;
$arguments399['noCache'] = false;
$arguments399['noCacheHash'] = false;
$arguments399['section'] = '';
$arguments399['format'] = '';
$arguments399['linkAccessRestrictedPages'] = false;
$arguments399['additionalParams'] = array (
);
$arguments399['absolute'] = false;
$arguments399['addQueryString'] = false;
$arguments399['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments399['addQueryStringMethod'] = NULL;
$arguments399['class'] = NULL;
$arguments399['dir'] = NULL;
$arguments399['id'] = NULL;
$arguments399['lang'] = NULL;
$arguments399['style'] = NULL;
$arguments399['accesskey'] = NULL;
$arguments399['tabindex'] = NULL;
$arguments399['onclick'] = NULL;
$arguments399['name'] = NULL;
$arguments399['rel'] = NULL;
$arguments399['rev'] = NULL;
$arguments399['target'] = NULL;
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output404 = '';

$output404 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments405 = array();
$arguments405['identifier'] = 'actions-system-extension-download';
$arguments405['size'] = 'small';
$arguments405['overlay'] = NULL;
$arguments405['state'] = 'default';
$arguments405['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure406 = function() {return NULL;};

$output404 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments405, $renderChildrenClosure406, $renderingContext);

$output404 .= '
								';
return $output404;
};
$viewHelper407 = $self->getViewHelper('$viewHelper407', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper407->setArguments($arguments399);
$viewHelper407->setRenderingContext($renderingContext);
$viewHelper407->setRenderChildrenClosure($renderChildrenClosure403);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output384 .= $viewHelper407->initializeArgumentsAndRender();

$output384 .= '
							</span>
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper
$arguments408 = array();
$arguments408['class'] = 'btn btn-default';
$arguments408['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments408['additionalAttributes'] = NULL;
$arguments408['data'] = NULL;
$arguments408['dir'] = NULL;
$arguments408['id'] = NULL;
$arguments408['lang'] = NULL;
$arguments408['style'] = NULL;
$arguments408['title'] = NULL;
$arguments408['accesskey'] = NULL;
$arguments408['tabindex'] = NULL;
$arguments408['onclick'] = NULL;
$arguments408['name'] = NULL;
$arguments408['rel'] = NULL;
$arguments408['rev'] = NULL;
$arguments408['target'] = NULL;
$renderChildrenClosure409 = function() {return NULL;};
$viewHelper410 = $self->getViewHelper('$viewHelper410', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper');
$viewHelper410->setArguments($arguments408);
$viewHelper410->setRenderingContext($renderingContext);
$viewHelper410->setRenderChildrenClosure($renderChildrenClosure409);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper

$output384 .= $viewHelper410->initializeArgumentsAndRender();

$output384 .= '
						';
return $output384;
};
$viewHelper411 = $self->getViewHelper('$viewHelper411', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper');
$viewHelper411->setArguments($arguments382);
$viewHelper411->setRenderingContext($renderingContext);
$viewHelper411->setRenderChildrenClosure($renderChildrenClosure383);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper

$output241 .= $viewHelper411->initializeArgumentsAndRender();

$output241 .= '
					</div>
				</td>
				</tr>
			';
return $output241;
};

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output213 .= '
		</tbody>
	</table>
	</div>
';
return $output213;
};

$output202 .= '';


return $output202;
}


}
#1468426740    123113    