<?php
class FluidCache_Extensionmanager_List_action_index_2c9536846fef0d053188e35c1ed4266a005f8368 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments142 = array();
// Rendering Boolean node
$arguments142['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'description', $renderingContext));
$arguments142['then'] = NULL;
$arguments142['else'] = NULL;
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output144 = '';

$output144 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments145 = array();
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output147 = '';

$output147 .= '
						<td title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments148 = array();
$arguments148['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'description', $renderingContext);
$arguments148['keepQuotes'] = false;
$arguments148['encoding'] = NULL;
$arguments148['doubleEncode'] = true;
$renderChildrenClosure149 = function() {return NULL;};
$value150 = ($arguments148['value'] !== NULL ? $arguments148['value'] : $renderChildrenClosure149());

$output147 .= (!is_string($value150) ? $value150 : htmlspecialchars($value150, ($arguments148['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments148['encoding'] !== NULL ? $arguments148['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments148['doubleEncode']));

$output147 .= '">
					';
return $output147;
};

$output144 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output144 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments151 = array();
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
						<td>
					';
};

$output144 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output144 .= '
				';
return $output144;
};
$arguments142['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output153 = '';

$output153 .= '
						<td title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments154 = array();
$arguments154['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'description', $renderingContext);
$arguments154['keepQuotes'] = false;
$arguments154['encoding'] = NULL;
$arguments154['doubleEncode'] = true;
$renderChildrenClosure155 = function() {return NULL;};
$value156 = ($arguments154['value'] !== NULL ? $arguments154['value'] : $renderChildrenClosure155());

$output153 .= (!is_string($value156) ? $value156 : htmlspecialchars($value156, ($arguments154['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments154['encoding'] !== NULL ? $arguments154['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments154['doubleEncode']));

$output153 .= '">
					';
return $output153;
};
$arguments142['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
						<td>
					';
};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output31 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments157 = array();
// Rendering Boolean node
$arguments157['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'ext_icon', $renderingContext));
$arguments157['then'] = NULL;
$arguments157['else'] = NULL;
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output159 = '';

$output159 .= '
						<img class="ext-icon" src="../';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments160 = array();
$arguments160['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'siteRelPath', $renderingContext);
$arguments160['keepQuotes'] = false;
$arguments160['encoding'] = NULL;
$arguments160['doubleEncode'] = true;
$renderChildrenClosure161 = function() {return NULL;};
$value162 = ($arguments160['value'] !== NULL ? $arguments160['value'] : $renderChildrenClosure161());

$output159 .= (!is_string($value162) ? $value162 : htmlspecialchars($value162, ($arguments160['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments160['encoding'] !== NULL ? $arguments160['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments160['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments163 = array();
$arguments163['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'ext_icon', $renderingContext);
$arguments163['keepQuotes'] = false;
$arguments163['encoding'] = NULL;
$arguments163['doubleEncode'] = true;
$renderChildrenClosure164 = function() {return NULL;};
$value165 = ($arguments163['value'] !== NULL ? $arguments163['value'] : $renderChildrenClosure164());

$output159 .= (!is_string($value165) ? $value165 : htmlspecialchars($value165, ($arguments163['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments163['encoding'] !== NULL ? $arguments163['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments163['doubleEncode']));

$output159 .= '" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments166 = array();
$arguments166['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'title', $renderingContext);
$arguments166['keepQuotes'] = false;
$arguments166['encoding'] = NULL;
$arguments166['doubleEncode'] = true;
$renderChildrenClosure167 = function() {return NULL;};
$value168 = ($arguments166['value'] !== NULL ? $arguments166['value'] : $renderChildrenClosure167());

$output159 .= (!is_string($value168) ? $value168 : htmlspecialchars($value168, ($arguments166['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments166['encoding'] !== NULL ? $arguments166['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments166['doubleEncode']));

$output159 .= '" />
					';
return $output159;
};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output31 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$arguments169 = array();
$arguments169['extension'] = $currentVariableContainer->getOrNull('extension');
// Rendering Boolean node
$arguments169['forceConfiguration'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Boolean node
$arguments169['showDescription'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments169['additionalAttributes'] = NULL;
$arguments169['data'] = NULL;
$arguments169['class'] = NULL;
$arguments169['dir'] = NULL;
$arguments169['id'] = NULL;
$arguments169['lang'] = NULL;
$arguments169['style'] = NULL;
$arguments169['title'] = NULL;
$arguments169['accesskey'] = NULL;
$arguments169['tabindex'] = NULL;
$arguments169['onclick'] = NULL;
$arguments169['name'] = NULL;
$arguments169['rel'] = NULL;
$arguments169['rev'] = NULL;
$arguments169['target'] = NULL;
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments171 = array();
$arguments171['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'title', $renderingContext);
$arguments171['keepQuotes'] = false;
$arguments171['encoding'] = NULL;
$arguments171['doubleEncode'] = true;
$renderChildrenClosure172 = function() {return NULL;};
$value173 = ($arguments171['value'] !== NULL ? $arguments171['value'] : $renderChildrenClosure172());
return (!is_string($value173) ? $value173 : htmlspecialchars($value173, ($arguments171['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments171['encoding'] !== NULL ? $arguments171['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments171['doubleEncode']));
};
$viewHelper174 = $self->getViewHelper('$viewHelper174', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper');
$viewHelper174->setArguments($arguments169);
$viewHelper174->setRenderingContext($renderingContext);
$viewHelper174->setRenderChildrenClosure($renderChildrenClosure170);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper

$output31 .= $viewHelper174->initializeArgumentsAndRender();

$output31 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments175 = array();
$arguments175['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments175['keepQuotes'] = false;
$arguments175['encoding'] = NULL;
$arguments175['doubleEncode'] = true;
$renderChildrenClosure176 = function() {return NULL;};
$value177 = ($arguments175['value'] !== NULL ? $arguments175['value'] : $renderChildrenClosure176());

$output31 .= (!is_string($value177) ? $value177 : htmlspecialchars($value177, ($arguments175['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments175['encoding'] !== NULL ? $arguments175['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments175['doubleEncode']));

$output31 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments178 = array();
$arguments178['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'version', $renderingContext);
$arguments178['keepQuotes'] = false;
$arguments178['encoding'] = NULL;
$arguments178['doubleEncode'] = true;
$renderChildrenClosure179 = function() {return NULL;};
$value180 = ($arguments178['value'] !== NULL ? $arguments178['value'] : $renderChildrenClosure179());

$output31 .= (!is_string($value180) ? $value180 : htmlspecialchars($value180, ($arguments178['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments178['encoding'] !== NULL ? $arguments178['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments178['doubleEncode']));

$output31 .= '
				</td>
				<td>
					<span class="label label-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments181 = array();
$arguments181['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext);
$arguments181['keepQuotes'] = false;
$arguments181['encoding'] = NULL;
$arguments181['doubleEncode'] = true;
$renderChildrenClosure182 = function() {return NULL;};
$value183 = ($arguments181['value'] !== NULL ? $arguments181['value'] : $renderChildrenClosure182());

$output31 .= (!is_string($value183) ? $value183 : htmlspecialchars($value183, ($arguments181['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments181['encoding'] !== NULL ? $arguments181['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments181['doubleEncode']));

$output31 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments184 = array();
$arguments184['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext);
$arguments184['keepQuotes'] = false;
$arguments184['encoding'] = NULL;
$arguments184['doubleEncode'] = true;
$renderChildrenClosure185 = function() {return NULL;};
$value186 = ($arguments184['value'] !== NULL ? $arguments184['value'] : $renderChildrenClosure185());

$output31 .= (!is_string($value186) ? $value186 : htmlspecialchars($value186, ($arguments184['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments184['encoding'] !== NULL ? $arguments184['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments184['doubleEncode']));

$output31 .= '</span>
				</td>
				<td>
					<div class="btn-group">
						';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$arguments187 = array();
$arguments187['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments187['additionalAttributes'] = NULL;
$arguments187['data'] = NULL;
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output189 = '';

$output189 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$arguments190 = array();
$arguments190['class'] = 'btn btn-default';
$arguments190['extension'] = $currentVariableContainer->getOrNull('extension');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments191 = array();
$arguments191['key'] = 'extensionList.configure';
$arguments191['id'] = NULL;
$arguments191['default'] = NULL;
$arguments191['htmlEscape'] = NULL;
$arguments191['arguments'] = NULL;
$arguments191['extensionName'] = NULL;
$renderChildrenClosure192 = function() {return NULL;};
$arguments190['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);
$arguments190['additionalAttributes'] = NULL;
$arguments190['data'] = NULL;
$arguments190['forceConfiguration'] = true;
$arguments190['showDescription'] = false;
$arguments190['dir'] = NULL;
$arguments190['id'] = NULL;
$arguments190['lang'] = NULL;
$arguments190['style'] = NULL;
$arguments190['accesskey'] = NULL;
$arguments190['tabindex'] = NULL;
$arguments190['onclick'] = NULL;
$arguments190['name'] = NULL;
$arguments190['rel'] = NULL;
$arguments190['rev'] = NULL;
$arguments190['target'] = NULL;
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output194 = '';

$output194 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments195 = array();
$arguments195['identifier'] = 'actions-system-extension-configure';
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
$viewHelper197 = $self->getViewHelper('$viewHelper197', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper');
$viewHelper197->setArguments($arguments190);
$viewHelper197->setRenderingContext($renderingContext);
$viewHelper197->setRenderChildrenClosure($renderChildrenClosure193);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper

$output189 .= $viewHelper197->initializeArgumentsAndRender();

$output189 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$arguments198 = array();
$arguments198['class'] = 'btn btn-default';
$arguments198['extensionKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
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
$viewHelper200 = $self->getViewHelper('$viewHelper200', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper');
$viewHelper200->setArguments($arguments198);
$viewHelper200->setRenderingContext($renderingContext);
$viewHelper200->setRenderChildrenClosure($renderChildrenClosure199);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper

$output189 .= $viewHelper200->initializeArgumentsAndRender();

$output189 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$arguments201 = array();
$arguments201['class'] = 'btn btn-default';
$arguments201['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments201['additionalAttributes'] = NULL;
$arguments201['data'] = NULL;
$arguments201['dir'] = NULL;
$arguments201['id'] = NULL;
$arguments201['lang'] = NULL;
$arguments201['style'] = NULL;
$arguments201['title'] = NULL;
$arguments201['accesskey'] = NULL;
$arguments201['tabindex'] = NULL;
$arguments201['onclick'] = NULL;
$arguments201['name'] = NULL;
$arguments201['rel'] = NULL;
$arguments201['rev'] = NULL;
$arguments201['target'] = NULL;
$renderChildrenClosure202 = function() {return NULL;};
$viewHelper203 = $self->getViewHelper('$viewHelper203', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper');
$viewHelper203->setArguments($arguments201);
$viewHelper203->setRenderingContext($renderingContext);
$viewHelper203->setRenderChildrenClosure($renderChildrenClosure202);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper

$output189 .= $viewHelper203->initializeArgumentsAndRender();

$output189 .= '
							<span class="btn btn-default">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments204 = array();
$arguments204['action'] = 'downloadExtensionZip';
$arguments204['controller'] = 'Action';
// Rendering Array
$array205 = array();
$array205['extension'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$arguments204['arguments'] = $array205;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments206 = array();
$arguments206['key'] = 'extensionList.downloadzip';
$arguments206['id'] = NULL;
$arguments206['default'] = NULL;
$arguments206['htmlEscape'] = NULL;
$arguments206['arguments'] = NULL;
$arguments206['extensionName'] = NULL;
$renderChildrenClosure207 = function() {return NULL;};
$arguments204['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);
$arguments204['additionalAttributes'] = NULL;
$arguments204['data'] = NULL;
$arguments204['extensionName'] = NULL;
$arguments204['pluginName'] = NULL;
$arguments204['pageUid'] = NULL;
$arguments204['pageType'] = 0;
$arguments204['noCache'] = false;
$arguments204['noCacheHash'] = false;
$arguments204['section'] = '';
$arguments204['format'] = '';
$arguments204['linkAccessRestrictedPages'] = false;
$arguments204['additionalParams'] = array (
);
$arguments204['absolute'] = false;
$arguments204['addQueryString'] = false;
$arguments204['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments204['addQueryStringMethod'] = NULL;
$arguments204['class'] = NULL;
$arguments204['dir'] = NULL;
$arguments204['id'] = NULL;
$arguments204['lang'] = NULL;
$arguments204['style'] = NULL;
$arguments204['accesskey'] = NULL;
$arguments204['tabindex'] = NULL;
$arguments204['onclick'] = NULL;
$arguments204['name'] = NULL;
$arguments204['rel'] = NULL;
$arguments204['rev'] = NULL;
$arguments204['target'] = NULL;
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output209 = '';

$output209 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments210 = array();
$arguments210['identifier'] = 'actions-system-extension-download';
$arguments210['size'] = 'small';
$arguments210['overlay'] = NULL;
$arguments210['state'] = 'default';
$arguments210['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure211 = function() {return NULL;};

$output209 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output209 .= '
								';
return $output209;
};
$viewHelper212 = $self->getViewHelper('$viewHelper212', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper212->setArguments($arguments204);
$viewHelper212->setRenderingContext($renderingContext);
$viewHelper212->setRenderChildrenClosure($renderChildrenClosure208);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output189 .= $viewHelper212->initializeArgumentsAndRender();

$output189 .= '
							</span>
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper
$arguments213 = array();
$arguments213['class'] = 'btn btn-default';
$arguments213['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments213['additionalAttributes'] = NULL;
$arguments213['data'] = NULL;
$arguments213['dir'] = NULL;
$arguments213['id'] = NULL;
$arguments213['lang'] = NULL;
$arguments213['style'] = NULL;
$arguments213['title'] = NULL;
$arguments213['accesskey'] = NULL;
$arguments213['tabindex'] = NULL;
$arguments213['onclick'] = NULL;
$arguments213['name'] = NULL;
$arguments213['rel'] = NULL;
$arguments213['rev'] = NULL;
$arguments213['target'] = NULL;
$renderChildrenClosure214 = function() {return NULL;};
$viewHelper215 = $self->getViewHelper('$viewHelper215', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper');
$viewHelper215->setArguments($arguments213);
$viewHelper215->setRenderingContext($renderingContext);
$viewHelper215->setRenderChildrenClosure($renderChildrenClosure214);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper

$output189 .= $viewHelper215->initializeArgumentsAndRender();

$output189 .= '
						';
return $output189;
};
$viewHelper216 = $self->getViewHelper('$viewHelper216', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper');
$viewHelper216->setArguments($arguments187);
$viewHelper216->setRenderingContext($renderingContext);
$viewHelper216->setRenderChildrenClosure($renderChildrenClosure188);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper

$output31 .= $viewHelper216->initializeArgumentsAndRender();

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

$output217 = '';

$output217 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments218 = array();
$arguments218['name'] = 'main';
$renderChildrenClosure219 = function() {return NULL;};
$viewHelper220 = $self->getViewHelper('$viewHelper220', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper220->setArguments($arguments218);
$viewHelper220->setRenderingContext($renderingContext);
$viewHelper220->setRenderChildrenClosure($renderChildrenClosure219);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output217 .= $viewHelper220->initializeArgumentsAndRender();

$output217 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments221 = array();
$arguments221['name'] = 'headline';
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output223 = '';

$output223 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments224 = array();
$arguments224['key'] = 'installedExtensions';
$arguments224['id'] = NULL;
$arguments224['default'] = NULL;
$arguments224['htmlEscape'] = NULL;
$arguments224['arguments'] = NULL;
$arguments224['extensionName'] = NULL;
$renderChildrenClosure225 = function() {return NULL;};

$output223 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output223 .= '</h1>
';
return $output223;
};

$output217 .= '';

$output217 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments226 = array();
$arguments226['name'] = 'content';
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output228 = '';

$output228 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments229 = array();
$arguments229['partial'] = 'List/UploadForm';
$arguments229['section'] = NULL;
$arguments229['arguments'] = array (
);
$arguments229['optional'] = false;
$renderChildrenClosure230 = function() {return NULL;};

$output228 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output228 .= '

	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments231 = array();
$arguments231['name'] = 'Tx_Extensionmanager_extensionkey';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments232 = array();
$arguments232['key'] = 'extensionList.search';
$arguments232['id'] = NULL;
$arguments232['default'] = NULL;
$arguments232['htmlEscape'] = NULL;
$arguments232['arguments'] = NULL;
$arguments232['extensionName'] = NULL;
$renderChildrenClosure233 = function() {return NULL;};
$arguments231['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);
$arguments231['id'] = 'Tx_Extensionmanager_extensionkey';
$arguments231['value'] = $currentVariableContainer->getOrNull('search');
$arguments231['class'] = 'form-control';
$arguments231['additionalAttributes'] = NULL;
$arguments231['data'] = NULL;
$arguments231['required'] = false;
$arguments231['type'] = 'text';
$arguments231['property'] = NULL;
$arguments231['autofocus'] = NULL;
$arguments231['disabled'] = NULL;
$arguments231['maxlength'] = NULL;
$arguments231['readonly'] = NULL;
$arguments231['size'] = NULL;
$arguments231['pattern'] = NULL;
$arguments231['errorClass'] = 'f3-form-error';
$arguments231['dir'] = NULL;
$arguments231['lang'] = NULL;
$arguments231['style'] = NULL;
$arguments231['title'] = NULL;
$arguments231['accesskey'] = NULL;
$arguments231['tabindex'] = NULL;
$arguments231['onclick'] = NULL;
$renderChildrenClosure234 = function() {return NULL;};
$viewHelper235 = $self->getViewHelper('$viewHelper235', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper235->setArguments($arguments231);
$viewHelper235->setRenderingContext($renderingContext);
$viewHelper235->setRenderChildrenClosure($renderChildrenClosure234);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output228 .= $viewHelper235->initializeArgumentsAndRender();

$output228 .= '
		</div>
	</form>
	<br>
	<div class="table-fit">
		<table id="typo3-extension-list" class="table table-striped table-hover typo3-extension-list">
		<thead>
			<tr>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments236 = array();
$arguments236['key'] = 'extensionList.header.title.update';
$arguments236['id'] = NULL;
$arguments236['default'] = NULL;
$arguments236['htmlEscape'] = NULL;
$arguments236['arguments'] = NULL;
$arguments236['extensionName'] = NULL;
$renderChildrenClosure237 = function() {return NULL;};

$output228 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output228 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments238 = array();
$arguments238['key'] = 'extensionList.header.update';
$arguments238['id'] = NULL;
$arguments238['default'] = NULL;
$arguments238['htmlEscape'] = NULL;
$arguments238['arguments'] = NULL;
$arguments238['extensionName'] = NULL;
$renderChildrenClosure239 = function() {return NULL;};

$output228 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext);

$output228 .= '</th>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments240 = array();
$arguments240['key'] = 'extensionList.header.title.activate';
$arguments240['id'] = NULL;
$arguments240['default'] = NULL;
$arguments240['htmlEscape'] = NULL;
$arguments240['arguments'] = NULL;
$arguments240['extensionName'] = NULL;
$renderChildrenClosure241 = function() {return NULL;};

$output228 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);

$output228 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments242 = array();
$arguments242['key'] = 'extensionList.header.activate';
$arguments242['id'] = NULL;
$arguments242['default'] = NULL;
$arguments242['htmlEscape'] = NULL;
$arguments242['arguments'] = NULL;
$arguments242['extensionName'] = NULL;
$renderChildrenClosure243 = function() {return NULL;};

$output228 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output228 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments244 = array();
$arguments244['key'] = 'extensionList.header.extensionName';
$arguments244['id'] = NULL;
$arguments244['default'] = NULL;
$arguments244['htmlEscape'] = NULL;
$arguments244['arguments'] = NULL;
$arguments244['extensionName'] = NULL;
$renderChildrenClosure245 = function() {return NULL;};

$output228 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output228 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments246 = array();
$arguments246['key'] = 'extensionList.header.extensionKey';
$arguments246['id'] = NULL;
$arguments246['default'] = NULL;
$arguments246['htmlEscape'] = NULL;
$arguments246['arguments'] = NULL;
$arguments246['extensionName'] = NULL;
$renderChildrenClosure247 = function() {return NULL;};

$output228 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output228 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments248 = array();
$arguments248['key'] = 'extensionList.header.extensionVersion';
$arguments248['id'] = NULL;
$arguments248['default'] = NULL;
$arguments248['htmlEscape'] = NULL;
$arguments248['arguments'] = NULL;
$arguments248['extensionName'] = NULL;
$renderChildrenClosure249 = function() {return NULL;};

$output228 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);

$output228 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments250 = array();
$arguments250['key'] = 'extensionList.header.extensionState';
$arguments250['id'] = NULL;
$arguments250['default'] = NULL;
$arguments250['htmlEscape'] = NULL;
$arguments250['arguments'] = NULL;
$arguments250['extensionName'] = NULL;
$renderChildrenClosure251 = function() {return NULL;};

$output228 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output228 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments252 = array();
$arguments252['key'] = 'extensionList.header.extensionActions';
$arguments252['id'] = NULL;
$arguments252['default'] = NULL;
$arguments252['htmlEscape'] = NULL;
$arguments252['arguments'] = NULL;
$arguments252['extensionName'] = NULL;
$renderChildrenClosure253 = function() {return NULL;};

$output228 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output228 .= '</th>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments254 = array();
$arguments254['each'] = $currentVariableContainer->getOrNull('extensions');
$arguments254['as'] = 'extension';
$arguments254['key'] = 'extensionKey';
$arguments254['reverse'] = false;
$arguments254['iteration'] = NULL;
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output256 = '';

$output256 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments257 = array();
// Rendering Boolean node
$arguments257['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject', $renderingContext));
$arguments257['then'] = NULL;
$arguments257['else'] = NULL;
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output259 = '';

$output259 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments260 = array();
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output262 = '';

$output262 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments263 = array();
$arguments263['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments263['keepQuotes'] = false;
$arguments263['encoding'] = NULL;
$arguments263['doubleEncode'] = true;
$renderChildrenClosure264 = function() {return NULL;};
$value265 = ($arguments263['value'] !== NULL ? $arguments263['value'] : $renderChildrenClosure264());

$output262 .= (!is_string($value265) ? $value265 : htmlspecialchars($value265, ($arguments263['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments263['encoding'] !== NULL ? $arguments263['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments263['doubleEncode']));

$output262 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments266 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments267 = array();
$arguments267['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments267['keepQuotes'] = false;
$arguments267['encoding'] = NULL;
$arguments267['doubleEncode'] = true;
$renderChildrenClosure268 = function() {return NULL;};
$value269 = ($arguments267['value'] !== NULL ? $arguments267['value'] : $renderChildrenClosure268());
$arguments266['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value269) ? $value269 : htmlspecialchars($value269, ($arguments267['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments267['encoding'] !== NULL ? $arguments267['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments267['doubleEncode'])), -1);
$arguments266['then'] = 'insecure';
$arguments266['else'] = NULL;
$renderChildrenClosure270 = function() {return NULL;};

$output262 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments266, $renderChildrenClosure270, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments271 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments272 = array();
$arguments272['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments272['keepQuotes'] = false;
$arguments272['encoding'] = NULL;
$arguments272['doubleEncode'] = true;
$renderChildrenClosure273 = function() {return NULL;};
$value274 = ($arguments272['value'] !== NULL ? $arguments272['value'] : $renderChildrenClosure273());
$arguments271['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value274) ? $value274 : htmlspecialchars($value274, ($arguments272['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments272['encoding'] !== NULL ? $arguments272['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments272['doubleEncode'])), -2);
$arguments271['then'] = 'outdated';
$arguments271['else'] = NULL;
$renderChildrenClosure275 = function() {return NULL;};

$output262 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments271, $renderChildrenClosure275, $renderingContext);

$output262 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments276 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments277 = array();
$arguments277['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments277['keepQuotes'] = false;
$arguments277['encoding'] = NULL;
$arguments277['doubleEncode'] = true;
$renderChildrenClosure278 = function() {return NULL;};
$value279 = ($arguments277['value'] !== NULL ? $arguments277['value'] : $renderChildrenClosure278());
$arguments276['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value279) ? $value279 : htmlspecialchars($value279, ($arguments277['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments277['encoding'] !== NULL ? $arguments277['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments277['doubleEncode'])));
$arguments276['then'] = '';
$arguments276['else'] = 'inactive';
$renderChildrenClosure280 = function() {return NULL;};

$output262 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments276, $renderChildrenClosure280, $renderingContext);

$output262 .= '">
					';
return $output262;
};

$output259 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output259 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments281 = array();
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output283 = '';

$output283 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments284 = array();
$arguments284['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments284['keepQuotes'] = false;
$arguments284['encoding'] = NULL;
$arguments284['doubleEncode'] = true;
$renderChildrenClosure285 = function() {return NULL;};
$value286 = ($arguments284['value'] !== NULL ? $arguments284['value'] : $renderChildrenClosure285());

$output283 .= (!is_string($value286) ? $value286 : htmlspecialchars($value286, ($arguments284['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments284['encoding'] !== NULL ? $arguments284['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments284['doubleEncode']));

$output283 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments287 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments288 = array();
$arguments288['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments288['keepQuotes'] = false;
$arguments288['encoding'] = NULL;
$arguments288['doubleEncode'] = true;
$renderChildrenClosure289 = function() {return NULL;};
$value290 = ($arguments288['value'] !== NULL ? $arguments288['value'] : $renderChildrenClosure289());
$arguments287['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value290) ? $value290 : htmlspecialchars($value290, ($arguments288['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments288['encoding'] !== NULL ? $arguments288['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments288['doubleEncode'])));
$arguments287['then'] = '';
$arguments287['else'] = 'inactive';
$renderChildrenClosure291 = function() {return NULL;};

$output283 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments287, $renderChildrenClosure291, $renderingContext);

$output283 .= '">
					';
return $output283;
};

$output259 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);

$output259 .= '
				';
return $output259;
};
$arguments257['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output292 = '';

$output292 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments293 = array();
$arguments293['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments293['keepQuotes'] = false;
$arguments293['encoding'] = NULL;
$arguments293['doubleEncode'] = true;
$renderChildrenClosure294 = function() {return NULL;};
$value295 = ($arguments293['value'] !== NULL ? $arguments293['value'] : $renderChildrenClosure294());

$output292 .= (!is_string($value295) ? $value295 : htmlspecialchars($value295, ($arguments293['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments293['encoding'] !== NULL ? $arguments293['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments293['doubleEncode']));

$output292 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments296 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments297 = array();
$arguments297['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments297['keepQuotes'] = false;
$arguments297['encoding'] = NULL;
$arguments297['doubleEncode'] = true;
$renderChildrenClosure298 = function() {return NULL;};
$value299 = ($arguments297['value'] !== NULL ? $arguments297['value'] : $renderChildrenClosure298());
$arguments296['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value299) ? $value299 : htmlspecialchars($value299, ($arguments297['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments297['encoding'] !== NULL ? $arguments297['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments297['doubleEncode'])), -1);
$arguments296['then'] = 'insecure';
$arguments296['else'] = NULL;
$renderChildrenClosure300 = function() {return NULL;};

$output292 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments296, $renderChildrenClosure300, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments301 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments302 = array();
$arguments302['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments302['keepQuotes'] = false;
$arguments302['encoding'] = NULL;
$arguments302['doubleEncode'] = true;
$renderChildrenClosure303 = function() {return NULL;};
$value304 = ($arguments302['value'] !== NULL ? $arguments302['value'] : $renderChildrenClosure303());
$arguments301['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value304) ? $value304 : htmlspecialchars($value304, ($arguments302['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments302['encoding'] !== NULL ? $arguments302['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments302['doubleEncode'])), -2);
$arguments301['then'] = 'outdated';
$arguments301['else'] = NULL;
$renderChildrenClosure305 = function() {return NULL;};

$output292 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments301, $renderChildrenClosure305, $renderingContext);

$output292 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments306 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments307 = array();
$arguments307['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments307['keepQuotes'] = false;
$arguments307['encoding'] = NULL;
$arguments307['doubleEncode'] = true;
$renderChildrenClosure308 = function() {return NULL;};
$value309 = ($arguments307['value'] !== NULL ? $arguments307['value'] : $renderChildrenClosure308());
$arguments306['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value309) ? $value309 : htmlspecialchars($value309, ($arguments307['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments307['encoding'] !== NULL ? $arguments307['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments307['doubleEncode'])));
$arguments306['then'] = '';
$arguments306['else'] = 'inactive';
$renderChildrenClosure310 = function() {return NULL;};

$output292 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments306, $renderChildrenClosure310, $renderingContext);

$output292 .= '">
					';
return $output292;
};
$arguments257['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output311 = '';

$output311 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments312 = array();
$arguments312['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments312['keepQuotes'] = false;
$arguments312['encoding'] = NULL;
$arguments312['doubleEncode'] = true;
$renderChildrenClosure313 = function() {return NULL;};
$value314 = ($arguments312['value'] !== NULL ? $arguments312['value'] : $renderChildrenClosure313());

$output311 .= (!is_string($value314) ? $value314 : htmlspecialchars($value314, ($arguments312['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments312['encoding'] !== NULL ? $arguments312['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments312['doubleEncode']));

$output311 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments315 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments316 = array();
$arguments316['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments316['keepQuotes'] = false;
$arguments316['encoding'] = NULL;
$arguments316['doubleEncode'] = true;
$renderChildrenClosure317 = function() {return NULL;};
$value318 = ($arguments316['value'] !== NULL ? $arguments316['value'] : $renderChildrenClosure317());
$arguments315['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value318) ? $value318 : htmlspecialchars($value318, ($arguments316['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments316['encoding'] !== NULL ? $arguments316['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments316['doubleEncode'])));
$arguments315['then'] = '';
$arguments315['else'] = 'inactive';
$renderChildrenClosure319 = function() {return NULL;};

$output311 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments315, $renderChildrenClosure319, $renderingContext);

$output311 .= '">
					';
return $output311;
};

$output256 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output256 .= '
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments320 = array();
// Rendering Boolean node
$arguments320['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateAvailable', $renderingContext));
$arguments320['then'] = NULL;
$arguments320['else'] = NULL;
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output322 = '';

$output322 .= '
						<div class="btn-group">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments323 = array();
// Rendering Boolean node
$arguments323['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext), 'excludeFromUpdates');
$arguments323['then'] = NULL;
$arguments323['else'] = NULL;
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output325 = '';

$output325 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments326 = array();
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output328 = '';

$output328 .= '
									<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments329 = array();
$arguments329['key'] = 'extensionList.updateDisabled';
$arguments329['id'] = NULL;
$arguments329['default'] = NULL;
$arguments329['htmlEscape'] = NULL;
$arguments329['arguments'] = NULL;
$arguments329['extensionName'] = NULL;
$renderChildrenClosure330 = function() {return NULL;};

$output328 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext);

$output328 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments331 = array();
$arguments331['identifier'] = 'actions-system-extension-update';
$arguments331['size'] = 'small';
$arguments331['overlay'] = NULL;
$arguments331['state'] = 'default';
$arguments331['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure332 = function() {return NULL;};

$output328 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext);

$output328 .= '
									</span>
								';
return $output328;
};

$output325 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext);

$output325 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments333 = array();
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output335 = '';

$output335 .= '
									<span class="btn btn-default">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments336 = array();
$arguments336['action'] = 'updateCommentForUpdatableVersions';
// Rendering Array
$array337 = array();
$array337['data-action'] = 'update-extension';
$arguments336['additionalAttributes'] = $array337;
$arguments336['format'] = 'json';
$arguments336['controller'] = 'Download';
// Rendering Array
$array338 = array();
$array338['extension'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$array338['integerVersionStart'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.integerVersion', $renderingContext);
$array338['integerVersionStop'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.integerVersion', $renderingContext);
$arguments336['arguments'] = $array338;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments339 = array();
$arguments339['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array340 = array();
$array340['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.version', $renderingContext);
$arguments339['arguments'] = $array340;
$arguments339['id'] = NULL;
$arguments339['default'] = NULL;
$arguments339['htmlEscape'] = NULL;
$arguments339['extensionName'] = NULL;
$renderChildrenClosure341 = function() {return NULL;};
$arguments336['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments339, $renderChildrenClosure341, $renderingContext);
$arguments336['data'] = NULL;
$arguments336['extensionName'] = NULL;
$arguments336['pluginName'] = NULL;
$arguments336['pageUid'] = NULL;
$arguments336['pageType'] = 0;
$arguments336['noCache'] = false;
$arguments336['noCacheHash'] = false;
$arguments336['section'] = '';
$arguments336['linkAccessRestrictedPages'] = false;
$arguments336['additionalParams'] = array (
);
$arguments336['absolute'] = false;
$arguments336['addQueryString'] = false;
$arguments336['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments336['addQueryStringMethod'] = NULL;
$arguments336['class'] = NULL;
$arguments336['dir'] = NULL;
$arguments336['id'] = NULL;
$arguments336['lang'] = NULL;
$arguments336['style'] = NULL;
$arguments336['accesskey'] = NULL;
$arguments336['tabindex'] = NULL;
$arguments336['onclick'] = NULL;
$arguments336['name'] = NULL;
$arguments336['rel'] = NULL;
$arguments336['rev'] = NULL;
$arguments336['target'] = NULL;
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output343 = '';

$output343 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments344 = array();
$arguments344['identifier'] = 'actions-system-extension-update';
$arguments344['size'] = 'small';
$arguments344['overlay'] = NULL;
$arguments344['state'] = 'default';
$arguments344['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure345 = function() {return NULL;};

$output343 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext);

$output343 .= '
										';
return $output343;
};
$viewHelper346 = $self->getViewHelper('$viewHelper346', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper346->setArguments($arguments336);
$viewHelper346->setRenderingContext($renderingContext);
$viewHelper346->setRenderChildrenClosure($renderChildrenClosure342);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output335 .= $viewHelper346->initializeArgumentsAndRender();

$output335 .= '
									</span>
								';
return $output335;
};

$output325 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext);

$output325 .= '
							';
return $output325;
};
$arguments323['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output347 = '';

$output347 .= '
									<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments348 = array();
$arguments348['key'] = 'extensionList.updateDisabled';
$arguments348['id'] = NULL;
$arguments348['default'] = NULL;
$arguments348['htmlEscape'] = NULL;
$arguments348['arguments'] = NULL;
$arguments348['extensionName'] = NULL;
$renderChildrenClosure349 = function() {return NULL;};

$output347 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments348, $renderChildrenClosure349, $renderingContext);

$output347 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments350 = array();
$arguments350['identifier'] = 'actions-system-extension-update';
$arguments350['size'] = 'small';
$arguments350['overlay'] = NULL;
$arguments350['state'] = 'default';
$arguments350['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure351 = function() {return NULL;};

$output347 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext);

$output347 .= '
									</span>
								';
return $output347;
};
$arguments323['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output352 = '';

$output352 .= '
									<span class="btn btn-default">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments353 = array();
$arguments353['action'] = 'updateCommentForUpdatableVersions';
// Rendering Array
$array354 = array();
$array354['data-action'] = 'update-extension';
$arguments353['additionalAttributes'] = $array354;
$arguments353['format'] = 'json';
$arguments353['controller'] = 'Download';
// Rendering Array
$array355 = array();
$array355['extension'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$array355['integerVersionStart'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.integerVersion', $renderingContext);
$array355['integerVersionStop'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.integerVersion', $renderingContext);
$arguments353['arguments'] = $array355;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments356 = array();
$arguments356['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array357 = array();
$array357['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.version', $renderingContext);
$arguments356['arguments'] = $array357;
$arguments356['id'] = NULL;
$arguments356['default'] = NULL;
$arguments356['htmlEscape'] = NULL;
$arguments356['extensionName'] = NULL;
$renderChildrenClosure358 = function() {return NULL;};
$arguments353['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments356, $renderChildrenClosure358, $renderingContext);
$arguments353['data'] = NULL;
$arguments353['extensionName'] = NULL;
$arguments353['pluginName'] = NULL;
$arguments353['pageUid'] = NULL;
$arguments353['pageType'] = 0;
$arguments353['noCache'] = false;
$arguments353['noCacheHash'] = false;
$arguments353['section'] = '';
$arguments353['linkAccessRestrictedPages'] = false;
$arguments353['additionalParams'] = array (
);
$arguments353['absolute'] = false;
$arguments353['addQueryString'] = false;
$arguments353['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments353['addQueryStringMethod'] = NULL;
$arguments353['class'] = NULL;
$arguments353['dir'] = NULL;
$arguments353['id'] = NULL;
$arguments353['lang'] = NULL;
$arguments353['style'] = NULL;
$arguments353['accesskey'] = NULL;
$arguments353['tabindex'] = NULL;
$arguments353['onclick'] = NULL;
$arguments353['name'] = NULL;
$arguments353['rel'] = NULL;
$arguments353['rev'] = NULL;
$arguments353['target'] = NULL;
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output360 = '';

$output360 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments361 = array();
$arguments361['identifier'] = 'actions-system-extension-update';
$arguments361['size'] = 'small';
$arguments361['overlay'] = NULL;
$arguments361['state'] = 'default';
$arguments361['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure362 = function() {return NULL;};

$output360 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext);

$output360 .= '
										';
return $output360;
};
$viewHelper363 = $self->getViewHelper('$viewHelper363', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper363->setArguments($arguments353);
$viewHelper363->setRenderingContext($renderingContext);
$viewHelper363->setRenderChildrenClosure($renderChildrenClosure359);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output352 .= $viewHelper363->initializeArgumentsAndRender();

$output352 .= '
									</span>
								';
return $output352;
};

$output322 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output322 .= '
						</div>
					';
return $output322;
};

$output256 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);

$output256 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$arguments364 = array();
$arguments364['extension'] = $currentVariableContainer->getOrNull('extension');
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
$renderChildrenClosure365 = function() {return NULL;};
$viewHelper366 = $self->getViewHelper('$viewHelper366', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper');
$viewHelper366->setArguments($arguments364);
$viewHelper366->setRenderingContext($renderingContext);
$viewHelper366->setRenderChildrenClosure($renderChildrenClosure365);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper

$output256 .= $viewHelper366->initializeArgumentsAndRender();

$output256 .= '
				</td>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments367 = array();
// Rendering Boolean node
$arguments367['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'description', $renderingContext));
$arguments367['then'] = NULL;
$arguments367['else'] = NULL;
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output369 = '';

$output369 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments370 = array();
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output372 = '';

$output372 .= '
						<td title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments373 = array();
$arguments373['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'description', $renderingContext);
$arguments373['keepQuotes'] = false;
$arguments373['encoding'] = NULL;
$arguments373['doubleEncode'] = true;
$renderChildrenClosure374 = function() {return NULL;};
$value375 = ($arguments373['value'] !== NULL ? $arguments373['value'] : $renderChildrenClosure374());

$output372 .= (!is_string($value375) ? $value375 : htmlspecialchars($value375, ($arguments373['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments373['encoding'] !== NULL ? $arguments373['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments373['doubleEncode']));

$output372 .= '">
					';
return $output372;
};

$output369 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments370, $renderChildrenClosure371, $renderingContext);

$output369 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments376 = array();
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
						<td>
					';
};

$output369 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext);

$output369 .= '
				';
return $output369;
};
$arguments367['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output378 = '';

$output378 .= '
						<td title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments379 = array();
$arguments379['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'description', $renderingContext);
$arguments379['keepQuotes'] = false;
$arguments379['encoding'] = NULL;
$arguments379['doubleEncode'] = true;
$renderChildrenClosure380 = function() {return NULL;};
$value381 = ($arguments379['value'] !== NULL ? $arguments379['value'] : $renderChildrenClosure380());

$output378 .= (!is_string($value381) ? $value381 : htmlspecialchars($value381, ($arguments379['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments379['encoding'] !== NULL ? $arguments379['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments379['doubleEncode']));

$output378 .= '">
					';
return $output378;
};
$arguments367['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
						<td>
					';
};

$output256 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments367, $renderChildrenClosure368, $renderingContext);

$output256 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments382 = array();
// Rendering Boolean node
$arguments382['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'ext_icon', $renderingContext));
$arguments382['then'] = NULL;
$arguments382['else'] = NULL;
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output384 = '';

$output384 .= '
						<img class="ext-icon" src="../';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments385 = array();
$arguments385['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'siteRelPath', $renderingContext);
$arguments385['keepQuotes'] = false;
$arguments385['encoding'] = NULL;
$arguments385['doubleEncode'] = true;
$renderChildrenClosure386 = function() {return NULL;};
$value387 = ($arguments385['value'] !== NULL ? $arguments385['value'] : $renderChildrenClosure386());

$output384 .= (!is_string($value387) ? $value387 : htmlspecialchars($value387, ($arguments385['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments385['encoding'] !== NULL ? $arguments385['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments385['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments388 = array();
$arguments388['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'ext_icon', $renderingContext);
$arguments388['keepQuotes'] = false;
$arguments388['encoding'] = NULL;
$arguments388['doubleEncode'] = true;
$renderChildrenClosure389 = function() {return NULL;};
$value390 = ($arguments388['value'] !== NULL ? $arguments388['value'] : $renderChildrenClosure389());

$output384 .= (!is_string($value390) ? $value390 : htmlspecialchars($value390, ($arguments388['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments388['encoding'] !== NULL ? $arguments388['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments388['doubleEncode']));

$output384 .= '" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments391 = array();
$arguments391['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'title', $renderingContext);
$arguments391['keepQuotes'] = false;
$arguments391['encoding'] = NULL;
$arguments391['doubleEncode'] = true;
$renderChildrenClosure392 = function() {return NULL;};
$value393 = ($arguments391['value'] !== NULL ? $arguments391['value'] : $renderChildrenClosure392());

$output384 .= (!is_string($value393) ? $value393 : htmlspecialchars($value393, ($arguments391['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments391['encoding'] !== NULL ? $arguments391['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments391['doubleEncode']));

$output384 .= '" />
					';
return $output384;
};

$output256 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output256 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$arguments394 = array();
$arguments394['extension'] = $currentVariableContainer->getOrNull('extension');
// Rendering Boolean node
$arguments394['forceConfiguration'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Boolean node
$arguments394['showDescription'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments394['additionalAttributes'] = NULL;
$arguments394['data'] = NULL;
$arguments394['class'] = NULL;
$arguments394['dir'] = NULL;
$arguments394['id'] = NULL;
$arguments394['lang'] = NULL;
$arguments394['style'] = NULL;
$arguments394['title'] = NULL;
$arguments394['accesskey'] = NULL;
$arguments394['tabindex'] = NULL;
$arguments394['onclick'] = NULL;
$arguments394['name'] = NULL;
$arguments394['rel'] = NULL;
$arguments394['rev'] = NULL;
$arguments394['target'] = NULL;
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments396 = array();
$arguments396['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'title', $renderingContext);
$arguments396['keepQuotes'] = false;
$arguments396['encoding'] = NULL;
$arguments396['doubleEncode'] = true;
$renderChildrenClosure397 = function() {return NULL;};
$value398 = ($arguments396['value'] !== NULL ? $arguments396['value'] : $renderChildrenClosure397());
return (!is_string($value398) ? $value398 : htmlspecialchars($value398, ($arguments396['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments396['encoding'] !== NULL ? $arguments396['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments396['doubleEncode']));
};
$viewHelper399 = $self->getViewHelper('$viewHelper399', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper');
$viewHelper399->setArguments($arguments394);
$viewHelper399->setRenderingContext($renderingContext);
$viewHelper399->setRenderChildrenClosure($renderChildrenClosure395);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper

$output256 .= $viewHelper399->initializeArgumentsAndRender();

$output256 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments400 = array();
$arguments400['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments400['keepQuotes'] = false;
$arguments400['encoding'] = NULL;
$arguments400['doubleEncode'] = true;
$renderChildrenClosure401 = function() {return NULL;};
$value402 = ($arguments400['value'] !== NULL ? $arguments400['value'] : $renderChildrenClosure401());

$output256 .= (!is_string($value402) ? $value402 : htmlspecialchars($value402, ($arguments400['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments400['encoding'] !== NULL ? $arguments400['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments400['doubleEncode']));

$output256 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments403 = array();
$arguments403['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'version', $renderingContext);
$arguments403['keepQuotes'] = false;
$arguments403['encoding'] = NULL;
$arguments403['doubleEncode'] = true;
$renderChildrenClosure404 = function() {return NULL;};
$value405 = ($arguments403['value'] !== NULL ? $arguments403['value'] : $renderChildrenClosure404());

$output256 .= (!is_string($value405) ? $value405 : htmlspecialchars($value405, ($arguments403['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments403['encoding'] !== NULL ? $arguments403['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments403['doubleEncode']));

$output256 .= '
				</td>
				<td>
					<span class="label label-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments406 = array();
$arguments406['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext);
$arguments406['keepQuotes'] = false;
$arguments406['encoding'] = NULL;
$arguments406['doubleEncode'] = true;
$renderChildrenClosure407 = function() {return NULL;};
$value408 = ($arguments406['value'] !== NULL ? $arguments406['value'] : $renderChildrenClosure407());

$output256 .= (!is_string($value408) ? $value408 : htmlspecialchars($value408, ($arguments406['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments406['encoding'] !== NULL ? $arguments406['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments406['doubleEncode']));

$output256 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments409 = array();
$arguments409['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext);
$arguments409['keepQuotes'] = false;
$arguments409['encoding'] = NULL;
$arguments409['doubleEncode'] = true;
$renderChildrenClosure410 = function() {return NULL;};
$value411 = ($arguments409['value'] !== NULL ? $arguments409['value'] : $renderChildrenClosure410());

$output256 .= (!is_string($value411) ? $value411 : htmlspecialchars($value411, ($arguments409['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments409['encoding'] !== NULL ? $arguments409['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments409['doubleEncode']));

$output256 .= '</span>
				</td>
				<td>
					<div class="btn-group">
						';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$arguments412 = array();
$arguments412['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments412['additionalAttributes'] = NULL;
$arguments412['data'] = NULL;
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output414 = '';

$output414 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$arguments415 = array();
$arguments415['class'] = 'btn btn-default';
$arguments415['extension'] = $currentVariableContainer->getOrNull('extension');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments416 = array();
$arguments416['key'] = 'extensionList.configure';
$arguments416['id'] = NULL;
$arguments416['default'] = NULL;
$arguments416['htmlEscape'] = NULL;
$arguments416['arguments'] = NULL;
$arguments416['extensionName'] = NULL;
$renderChildrenClosure417 = function() {return NULL;};
$arguments415['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments416, $renderChildrenClosure417, $renderingContext);
$arguments415['additionalAttributes'] = NULL;
$arguments415['data'] = NULL;
$arguments415['forceConfiguration'] = true;
$arguments415['showDescription'] = false;
$arguments415['dir'] = NULL;
$arguments415['id'] = NULL;
$arguments415['lang'] = NULL;
$arguments415['style'] = NULL;
$arguments415['accesskey'] = NULL;
$arguments415['tabindex'] = NULL;
$arguments415['onclick'] = NULL;
$arguments415['name'] = NULL;
$arguments415['rel'] = NULL;
$arguments415['rev'] = NULL;
$arguments415['target'] = NULL;
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output419 = '';

$output419 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments420 = array();
$arguments420['identifier'] = 'actions-system-extension-configure';
$arguments420['size'] = 'small';
$arguments420['overlay'] = NULL;
$arguments420['state'] = 'default';
$arguments420['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure421 = function() {return NULL;};

$output419 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext);

$output419 .= '
							';
return $output419;
};
$viewHelper422 = $self->getViewHelper('$viewHelper422', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper');
$viewHelper422->setArguments($arguments415);
$viewHelper422->setRenderingContext($renderingContext);
$viewHelper422->setRenderChildrenClosure($renderChildrenClosure418);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper

$output414 .= $viewHelper422->initializeArgumentsAndRender();

$output414 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$arguments423 = array();
$arguments423['class'] = 'btn btn-default';
$arguments423['extensionKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$arguments423['additionalAttributes'] = NULL;
$arguments423['data'] = NULL;
$arguments423['dir'] = NULL;
$arguments423['id'] = NULL;
$arguments423['lang'] = NULL;
$arguments423['style'] = NULL;
$arguments423['title'] = NULL;
$arguments423['accesskey'] = NULL;
$arguments423['tabindex'] = NULL;
$arguments423['onclick'] = NULL;
$arguments423['name'] = NULL;
$arguments423['rel'] = NULL;
$arguments423['rev'] = NULL;
$arguments423['target'] = NULL;
$renderChildrenClosure424 = function() {return NULL;};
$viewHelper425 = $self->getViewHelper('$viewHelper425', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper');
$viewHelper425->setArguments($arguments423);
$viewHelper425->setRenderingContext($renderingContext);
$viewHelper425->setRenderChildrenClosure($renderChildrenClosure424);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper

$output414 .= $viewHelper425->initializeArgumentsAndRender();

$output414 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$arguments426 = array();
$arguments426['class'] = 'btn btn-default';
$arguments426['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments426['additionalAttributes'] = NULL;
$arguments426['data'] = NULL;
$arguments426['dir'] = NULL;
$arguments426['id'] = NULL;
$arguments426['lang'] = NULL;
$arguments426['style'] = NULL;
$arguments426['title'] = NULL;
$arguments426['accesskey'] = NULL;
$arguments426['tabindex'] = NULL;
$arguments426['onclick'] = NULL;
$arguments426['name'] = NULL;
$arguments426['rel'] = NULL;
$arguments426['rev'] = NULL;
$arguments426['target'] = NULL;
$renderChildrenClosure427 = function() {return NULL;};
$viewHelper428 = $self->getViewHelper('$viewHelper428', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper');
$viewHelper428->setArguments($arguments426);
$viewHelper428->setRenderingContext($renderingContext);
$viewHelper428->setRenderChildrenClosure($renderChildrenClosure427);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper

$output414 .= $viewHelper428->initializeArgumentsAndRender();

$output414 .= '
							<span class="btn btn-default">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments429 = array();
$arguments429['action'] = 'downloadExtensionZip';
$arguments429['controller'] = 'Action';
// Rendering Array
$array430 = array();
$array430['extension'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$arguments429['arguments'] = $array430;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments431 = array();
$arguments431['key'] = 'extensionList.downloadzip';
$arguments431['id'] = NULL;
$arguments431['default'] = NULL;
$arguments431['htmlEscape'] = NULL;
$arguments431['arguments'] = NULL;
$arguments431['extensionName'] = NULL;
$renderChildrenClosure432 = function() {return NULL;};
$arguments429['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments431, $renderChildrenClosure432, $renderingContext);
$arguments429['additionalAttributes'] = NULL;
$arguments429['data'] = NULL;
$arguments429['extensionName'] = NULL;
$arguments429['pluginName'] = NULL;
$arguments429['pageUid'] = NULL;
$arguments429['pageType'] = 0;
$arguments429['noCache'] = false;
$arguments429['noCacheHash'] = false;
$arguments429['section'] = '';
$arguments429['format'] = '';
$arguments429['linkAccessRestrictedPages'] = false;
$arguments429['additionalParams'] = array (
);
$arguments429['absolute'] = false;
$arguments429['addQueryString'] = false;
$arguments429['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments429['addQueryStringMethod'] = NULL;
$arguments429['class'] = NULL;
$arguments429['dir'] = NULL;
$arguments429['id'] = NULL;
$arguments429['lang'] = NULL;
$arguments429['style'] = NULL;
$arguments429['accesskey'] = NULL;
$arguments429['tabindex'] = NULL;
$arguments429['onclick'] = NULL;
$arguments429['name'] = NULL;
$arguments429['rel'] = NULL;
$arguments429['rev'] = NULL;
$arguments429['target'] = NULL;
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output434 = '';

$output434 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments435 = array();
$arguments435['identifier'] = 'actions-system-extension-download';
$arguments435['size'] = 'small';
$arguments435['overlay'] = NULL;
$arguments435['state'] = 'default';
$arguments435['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure436 = function() {return NULL;};

$output434 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments435, $renderChildrenClosure436, $renderingContext);

$output434 .= '
								';
return $output434;
};
$viewHelper437 = $self->getViewHelper('$viewHelper437', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper437->setArguments($arguments429);
$viewHelper437->setRenderingContext($renderingContext);
$viewHelper437->setRenderChildrenClosure($renderChildrenClosure433);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output414 .= $viewHelper437->initializeArgumentsAndRender();

$output414 .= '
							</span>
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper
$arguments438 = array();
$arguments438['class'] = 'btn btn-default';
$arguments438['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments438['additionalAttributes'] = NULL;
$arguments438['data'] = NULL;
$arguments438['dir'] = NULL;
$arguments438['id'] = NULL;
$arguments438['lang'] = NULL;
$arguments438['style'] = NULL;
$arguments438['title'] = NULL;
$arguments438['accesskey'] = NULL;
$arguments438['tabindex'] = NULL;
$arguments438['onclick'] = NULL;
$arguments438['name'] = NULL;
$arguments438['rel'] = NULL;
$arguments438['rev'] = NULL;
$arguments438['target'] = NULL;
$renderChildrenClosure439 = function() {return NULL;};
$viewHelper440 = $self->getViewHelper('$viewHelper440', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper');
$viewHelper440->setArguments($arguments438);
$viewHelper440->setRenderingContext($renderingContext);
$viewHelper440->setRenderChildrenClosure($renderChildrenClosure439);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper

$output414 .= $viewHelper440->initializeArgumentsAndRender();

$output414 .= '
						';
return $output414;
};
$viewHelper441 = $self->getViewHelper('$viewHelper441', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper');
$viewHelper441->setArguments($arguments412);
$viewHelper441->setRenderingContext($renderingContext);
$viewHelper441->setRenderChildrenClosure($renderChildrenClosure413);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper

$output256 .= $viewHelper441->initializeArgumentsAndRender();

$output256 .= '
					</div>
				</td>
				</tr>
			';
return $output256;
};

$output228 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output228 .= '
		</tbody>
	</table>
	</div>
';
return $output228;
};

$output217 .= '';


return $output217;
}


}
#1458752140    130746    