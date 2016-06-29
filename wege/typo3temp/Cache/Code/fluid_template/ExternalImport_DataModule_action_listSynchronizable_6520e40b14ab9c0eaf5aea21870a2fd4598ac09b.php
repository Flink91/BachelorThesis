<?php
class FluidCache_ExternalImport_DataModule_action_listSynchronizable_6520e40b14ab9c0eaf5aea21870a2fd4598ac09b extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['renderMode'] = NULL;
$arguments1['as'] = NULL;
$arguments1['class'] = NULL;
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

	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments4 = array();
$arguments4['id'] = 'function_sync';
$arguments4['key'] = NULL;
$arguments4['default'] = NULL;
$arguments4['htmlEscape'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '</h1>

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments6 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments7 = array();
$arguments7['subject'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('configurations');
};
$arguments6['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext));
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output10 = '';

$output10 .= '
		<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments11 = array();
$arguments11['id'] = 'external_tables_intro';
$arguments11['key'] = NULL;
$arguments11['default'] = NULL;
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$renderChildrenClosure12 = function() {return NULL;};

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '</p>

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments13 = array();
// Rendering Boolean node
$arguments13['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('globalWriteAccess'), 'all');
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output15 = '';

$output15 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments16 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments17 = array();
$arguments17['id'] = 'full_autosync';
$arguments17['key'] = NULL;
$arguments17['default'] = NULL;
$arguments17['htmlEscape'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$renderChildrenClosure18 = function() {return NULL;};
$arguments16['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);
$arguments16['state'] = '-2';
// Rendering Boolean node
$arguments16['disableIcon'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments16['message'] = NULL;
$arguments16['iconName'] = NULL;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output20 = '';

$output20 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments21 = array();
// Rendering Boolean node
$arguments21['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('fullSynchronizationTask'));
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output23 = '';

$output23 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments24 = array();
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output26 = '';

$output26 .= '
						<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments27 = array();
$arguments27['id'] = 'next_full_autosync';
// Rendering Array
$array28 = array();
$array28['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('fullSynchronizationTask'), 'frequencyText', $renderingContext);
$array28['1'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('fullSynchronizationTask'), 'nextexecution', $renderingContext);
$arguments27['arguments'] = $array28;
$arguments27['key'] = NULL;
$arguments27['default'] = NULL;
$arguments27['htmlEscape'] = NULL;
$arguments27['extensionName'] = NULL;
$renderChildrenClosure29 = function() {return NULL;};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure29, $renderingContext);

$output26 .= '</p>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments30 = array();
$arguments30['partial'] = 'DataModule/Actions/EditButton';
// Rendering Array
$array31 = array();
$array31['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('fullSynchronizationTask'), 'uid', $renderingContext);
$arguments30['arguments'] = $array31;
$arguments30['section'] = NULL;
$arguments30['optional'] = false;
$renderChildrenClosure32 = function() {return NULL;};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments30, $renderChildrenClosure32, $renderingContext);

$output26 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments33 = array();
$arguments33['partial'] = 'DataModule/Actions/DeleteButton';
// Rendering Array
$array34 = array();
$array34['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('fullSynchronizationTask'), 'uid', $renderingContext);
$arguments33['arguments'] = $array34;
$arguments33['section'] = NULL;
$arguments33['optional'] = false;
$renderChildrenClosure35 = function() {return NULL;};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments33, $renderChildrenClosure35, $renderingContext);

$output26 .= '
					';
return $output26;
};

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments36 = array();
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
						<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments39 = array();
$arguments39['id'] = 'no_full_autosync';
$arguments39['key'] = NULL;
$arguments39['default'] = NULL;
$arguments39['htmlEscape'] = NULL;
$arguments39['arguments'] = NULL;
$arguments39['extensionName'] = NULL;
$renderChildrenClosure40 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '</p>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments41 = array();
$arguments41['partial'] = 'DataModule/Actions/AddButton';
// Rendering Array
$array42 = array();
$array42['table'] = 'all';
$array42['index'] = '';
$arguments41['arguments'] = $array42;
$arguments41['section'] = NULL;
$arguments41['optional'] = false;
$renderChildrenClosure43 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments41, $renderChildrenClosure43, $renderingContext);

$output38 .= '
					';
return $output38;
};

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output23 .= '
				';
return $output23;
};
$arguments21['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output44 = '';

$output44 .= '
						<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments45 = array();
$arguments45['id'] = 'next_full_autosync';
// Rendering Array
$array46 = array();
$array46['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('fullSynchronizationTask'), 'frequencyText', $renderingContext);
$array46['1'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('fullSynchronizationTask'), 'nextexecution', $renderingContext);
$arguments45['arguments'] = $array46;
$arguments45['key'] = NULL;
$arguments45['default'] = NULL;
$arguments45['htmlEscape'] = NULL;
$arguments45['extensionName'] = NULL;
$renderChildrenClosure47 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments45, $renderChildrenClosure47, $renderingContext);

$output44 .= '</p>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments48 = array();
$arguments48['partial'] = 'DataModule/Actions/EditButton';
// Rendering Array
$array49 = array();
$array49['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('fullSynchronizationTask'), 'uid', $renderingContext);
$arguments48['arguments'] = $array49;
$arguments48['section'] = NULL;
$arguments48['optional'] = false;
$renderChildrenClosure50 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments48, $renderChildrenClosure50, $renderingContext);

$output44 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments51 = array();
$arguments51['partial'] = 'DataModule/Actions/DeleteButton';
// Rendering Array
$array52 = array();
$array52['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('fullSynchronizationTask'), 'uid', $renderingContext);
$arguments51['arguments'] = $array52;
$arguments51['section'] = NULL;
$arguments51['optional'] = false;
$renderChildrenClosure53 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments51, $renderChildrenClosure53, $renderingContext);

$output44 .= '
					';
return $output44;
};
$arguments21['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output54 = '';

$output54 .= '
						<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments55 = array();
$arguments55['id'] = 'no_full_autosync';
$arguments55['key'] = NULL;
$arguments55['default'] = NULL;
$arguments55['htmlEscape'] = NULL;
$arguments55['arguments'] = NULL;
$arguments55['extensionName'] = NULL;
$renderChildrenClosure56 = function() {return NULL;};

$output54 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '</p>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments57 = array();
$arguments57['partial'] = 'DataModule/Actions/AddButton';
// Rendering Array
$array58 = array();
$array58['table'] = 'all';
$array58['index'] = '';
$arguments57['arguments'] = $array58;
$arguments57['section'] = NULL;
$arguments57['optional'] = false;
$renderChildrenClosure59 = function() {return NULL;};

$output54 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments57, $renderChildrenClosure59, $renderingContext);

$output54 .= '
					';
return $output54;
};

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
			';
return $output20;
};

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments16, $renderChildrenClosure19, $renderingContext);

$output15 .= '
		';
return $output15;
};

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output10 .= '

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments60 = array();
$arguments60['partial'] = 'DataModule/SearchField';
$arguments60['section'] = NULL;
$arguments60['arguments'] = array (
);
$arguments60['optional'] = false;
$renderChildrenClosure61 = function() {return NULL;};

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output10 .= '
		<table class="table table-striped table-hover" id="tx_externalimport_list" data-list-type="sync">
			<thead>
				<tr>
					<th>&nbsp;</th>
					<th>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments62 = array();
$arguments62['id'] = 'table';
$arguments62['key'] = NULL;
$arguments62['default'] = NULL;
$arguments62['htmlEscape'] = NULL;
$arguments62['arguments'] = NULL;
$arguments62['extensionName'] = NULL;
$renderChildrenClosure63 = function() {return NULL;};

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output10 .= '
					</th>
					<th>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments64 = array();
$arguments64['id'] = 'description';
$arguments64['key'] = NULL;
$arguments64['default'] = NULL;
$arguments64['htmlEscape'] = NULL;
$arguments64['arguments'] = NULL;
$arguments64['extensionName'] = NULL;
$renderChildrenClosure65 = function() {return NULL;};

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output10 .= '
					</th>
					<th>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments66 = array();
$arguments66['id'] = 'priority';
$arguments66['key'] = NULL;
$arguments66['default'] = NULL;
$arguments66['htmlEscape'] = NULL;
$arguments66['arguments'] = NULL;
$arguments66['extensionName'] = NULL;
$renderChildrenClosure67 = function() {return NULL;};

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output10 .= '
					</th>
					<th>&nbsp;</th>
					<th>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments68 = array();
$arguments68['id'] = 'autosync';
$arguments68['key'] = NULL;
$arguments68['default'] = NULL;
$arguments68['htmlEscape'] = NULL;
$arguments68['arguments'] = NULL;
$arguments68['extensionName'] = NULL;
$renderChildrenClosure69 = function() {return NULL;};

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output10 .= '
					</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments70 = array();
$arguments70['each'] = $currentVariableContainer->getOrNull('configurations');
$arguments70['as'] = 'configuration';
$arguments70['key'] = '';
$arguments70['reverse'] = false;
$arguments70['iteration'] = NULL;
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output72 = '';

$output72 .= '
					<tr>
						<td>
							';
// Rendering ViewHelper Cobweb\ExternalImport\ViewHelpers\Be\RecordIconViewHelper
$arguments73 = array();
$arguments73['table'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'table', $renderingContext);
$arguments73['record'] = array (
);
$arguments73['size'] = 'small';
$renderChildrenClosure74 = function() {return NULL;};

$output72 .= Cobweb\ExternalImport\ViewHelpers\Be\RecordIconViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output72 .= '
						</td>
						<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments75 = array();
$arguments75['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'tableName', $renderingContext);
$arguments75['keepQuotes'] = false;
$arguments75['encoding'] = NULL;
$arguments75['doubleEncode'] = true;
$renderChildrenClosure76 = function() {return NULL;};
$value77 = ($arguments75['value'] !== NULL ? $arguments75['value'] : $renderChildrenClosure76());

$output72 .= (!is_string($value77) ? $value77 : htmlspecialchars($value77, ($arguments75['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments75['encoding'] !== NULL ? $arguments75['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments75['doubleEncode']));

$output72 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments78 = array();
$arguments78['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'table', $renderingContext);
$arguments78['keepQuotes'] = false;
$arguments78['encoding'] = NULL;
$arguments78['doubleEncode'] = true;
$renderChildrenClosure79 = function() {return NULL;};
$value80 = ($arguments78['value'] !== NULL ? $arguments78['value'] : $renderChildrenClosure79());

$output72 .= (!is_string($value80) ? $value80 : htmlspecialchars($value80, ($arguments78['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments78['encoding'] !== NULL ? $arguments78['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments78['doubleEncode']));

$output72 .= ')</td>
						<td>[';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments81 = array();
$arguments81['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'index', $renderingContext);
$arguments81['keepQuotes'] = false;
$arguments81['encoding'] = NULL;
$arguments81['doubleEncode'] = true;
$renderChildrenClosure82 = function() {return NULL;};
$value83 = ($arguments81['value'] !== NULL ? $arguments81['value'] : $renderChildrenClosure82());

$output72 .= (!is_string($value83) ? $value83 : htmlspecialchars($value83, ($arguments81['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments81['encoding'] !== NULL ? $arguments81['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments81['doubleEncode']));

$output72 .= '] ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments84 = array();
$arguments84['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'description', $renderingContext);
$arguments84['keepQuotes'] = false;
$arguments84['encoding'] = NULL;
$arguments84['doubleEncode'] = true;
$renderChildrenClosure85 = function() {return NULL;};
$value86 = ($arguments84['value'] !== NULL ? $arguments84['value'] : $renderChildrenClosure85());

$output72 .= (!is_string($value86) ? $value86 : htmlspecialchars($value86, ($arguments84['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments84['encoding'] !== NULL ? $arguments84['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments84['doubleEncode']));

$output72 .= '</td>
						<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments87 = array();
$arguments87['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'priority', $renderingContext);
$arguments87['keepQuotes'] = false;
$arguments87['encoding'] = NULL;
$arguments87['doubleEncode'] = true;
$renderChildrenClosure88 = function() {return NULL;};
$value89 = ($arguments87['value'] !== NULL ? $arguments87['value'] : $renderChildrenClosure88());

$output72 .= (!is_string($value89) ? $value89 : htmlspecialchars($value89, ($arguments87['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments87['encoding'] !== NULL ? $arguments87['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments87['doubleEncode']));

$output72 .= '</td>
						<td>
							<div class="btn-group">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments90 = array();
$arguments90['action'] = 'viewConfiguration';
// Rendering Array
$array91 = array();
$array91['table'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'table', $renderingContext);
$array91['index'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'index', $renderingContext);
$arguments90['arguments'] = $array91;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments92 = array();
$arguments92['key'] = 'view_details';
$arguments92['id'] = NULL;
$arguments92['default'] = NULL;
$arguments92['htmlEscape'] = NULL;
$arguments92['arguments'] = NULL;
$arguments92['extensionName'] = NULL;
$renderChildrenClosure93 = function() {return NULL;};
$arguments90['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);
$arguments90['class'] = 'btn btn-default';
$arguments90['additionalAttributes'] = NULL;
$arguments90['data'] = NULL;
$arguments90['controller'] = NULL;
$arguments90['extensionName'] = NULL;
$arguments90['pluginName'] = NULL;
$arguments90['pageUid'] = NULL;
$arguments90['pageType'] = 0;
$arguments90['noCache'] = false;
$arguments90['noCacheHash'] = false;
$arguments90['section'] = '';
$arguments90['format'] = '';
$arguments90['linkAccessRestrictedPages'] = false;
$arguments90['additionalParams'] = array (
);
$arguments90['absolute'] = false;
$arguments90['addQueryString'] = false;
$arguments90['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments90['addQueryStringMethod'] = NULL;
$arguments90['dir'] = NULL;
$arguments90['id'] = NULL;
$arguments90['lang'] = NULL;
$arguments90['style'] = NULL;
$arguments90['accesskey'] = NULL;
$arguments90['tabindex'] = NULL;
$arguments90['onclick'] = NULL;
$arguments90['name'] = NULL;
$arguments90['rel'] = NULL;
$arguments90['rev'] = NULL;
$arguments90['target'] = NULL;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output95 = '';

$output95 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments96 = array();
$arguments96['identifier'] = 'actions-document-info';
$arguments96['size'] = 'small';
$arguments96['overlay'] = NULL;
$arguments96['state'] = 'default';
$arguments96['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure97 = function() {return NULL;};

$output95 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '
								';
return $output95;
};
$viewHelper98 = $self->getViewHelper('$viewHelper98', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper98->setArguments($arguments90);
$viewHelper98->setRenderingContext($renderingContext);
$viewHelper98->setRenderChildrenClosure($renderChildrenClosure94);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output72 .= $viewHelper98->initializeArgumentsAndRender();

$output72 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments99 = array();
// Rendering Boolean node
$arguments99['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'writeAccess', $renderingContext));
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output101 = '';

$output101 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments102 = array();
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output104 = '';

$output104 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments105 = array();
$arguments105['action'] = 'synchronize';
// Rendering Array
$array106 = array();
$array106['table'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'table', $renderingContext);
$array106['index'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'index', $renderingContext);
$arguments105['arguments'] = $array106;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments107 = array();
$arguments107['key'] = 'synchronise';
$arguments107['id'] = NULL;
$arguments107['default'] = NULL;
$arguments107['htmlEscape'] = NULL;
$arguments107['arguments'] = NULL;
$arguments107['extensionName'] = NULL;
$renderChildrenClosure108 = function() {return NULL;};
$arguments105['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);
$arguments105['class'] = 'btn btn-default';
$arguments105['additionalAttributes'] = NULL;
$arguments105['data'] = NULL;
$arguments105['controller'] = NULL;
$arguments105['extensionName'] = NULL;
$arguments105['pluginName'] = NULL;
$arguments105['pageUid'] = NULL;
$arguments105['pageType'] = 0;
$arguments105['noCache'] = false;
$arguments105['noCacheHash'] = false;
$arguments105['section'] = '';
$arguments105['format'] = '';
$arguments105['linkAccessRestrictedPages'] = false;
$arguments105['additionalParams'] = array (
);
$arguments105['absolute'] = false;
$arguments105['addQueryString'] = false;
$arguments105['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments105['addQueryStringMethod'] = NULL;
$arguments105['dir'] = NULL;
$arguments105['id'] = NULL;
$arguments105['lang'] = NULL;
$arguments105['style'] = NULL;
$arguments105['accesskey'] = NULL;
$arguments105['tabindex'] = NULL;
$arguments105['onclick'] = NULL;
$arguments105['name'] = NULL;
$arguments105['rel'] = NULL;
$arguments105['rev'] = NULL;
$arguments105['target'] = NULL;
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output110 = '';

$output110 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments111 = array();
$arguments111['identifier'] = 'actions-refresh';
$arguments111['size'] = 'small';
$arguments111['overlay'] = NULL;
$arguments111['state'] = 'default';
$arguments111['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure112 = function() {return NULL;};

$output110 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output110 .= '
										';
return $output110;
};
$viewHelper113 = $self->getViewHelper('$viewHelper113', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper113->setArguments($arguments105);
$viewHelper113->setRenderingContext($renderingContext);
$viewHelper113->setRenderChildrenClosure($renderChildrenClosure109);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output104 .= $viewHelper113->initializeArgumentsAndRender();

$output104 .= '
									';
return $output104;
};

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output101 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments114 = array();
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output116 = '';

$output116 .= '
										<span class="btn btn-default disabled">
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments117 = array();
$arguments117['identifier'] = 'actions-refresh';
$arguments117['size'] = 'small';
$arguments117['overlay'] = NULL;
$arguments117['state'] = 'default';
$arguments117['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure118 = function() {return NULL;};

$output116 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output116 .= '
										</span>
									';
return $output116;
};

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output101 .= '
								';
return $output101;
};
$arguments99['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output119 = '';

$output119 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments120 = array();
$arguments120['action'] = 'synchronize';
// Rendering Array
$array121 = array();
$array121['table'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'table', $renderingContext);
$array121['index'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'index', $renderingContext);
$arguments120['arguments'] = $array121;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments122 = array();
$arguments122['key'] = 'synchronise';
$arguments122['id'] = NULL;
$arguments122['default'] = NULL;
$arguments122['htmlEscape'] = NULL;
$arguments122['arguments'] = NULL;
$arguments122['extensionName'] = NULL;
$renderChildrenClosure123 = function() {return NULL;};
$arguments120['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);
$arguments120['class'] = 'btn btn-default';
$arguments120['additionalAttributes'] = NULL;
$arguments120['data'] = NULL;
$arguments120['controller'] = NULL;
$arguments120['extensionName'] = NULL;
$arguments120['pluginName'] = NULL;
$arguments120['pageUid'] = NULL;
$arguments120['pageType'] = 0;
$arguments120['noCache'] = false;
$arguments120['noCacheHash'] = false;
$arguments120['section'] = '';
$arguments120['format'] = '';
$arguments120['linkAccessRestrictedPages'] = false;
$arguments120['additionalParams'] = array (
);
$arguments120['absolute'] = false;
$arguments120['addQueryString'] = false;
$arguments120['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments120['addQueryStringMethod'] = NULL;
$arguments120['dir'] = NULL;
$arguments120['id'] = NULL;
$arguments120['lang'] = NULL;
$arguments120['style'] = NULL;
$arguments120['accesskey'] = NULL;
$arguments120['tabindex'] = NULL;
$arguments120['onclick'] = NULL;
$arguments120['name'] = NULL;
$arguments120['rel'] = NULL;
$arguments120['rev'] = NULL;
$arguments120['target'] = NULL;
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output125 = '';

$output125 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments126 = array();
$arguments126['identifier'] = 'actions-refresh';
$arguments126['size'] = 'small';
$arguments126['overlay'] = NULL;
$arguments126['state'] = 'default';
$arguments126['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure127 = function() {return NULL;};

$output125 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output125 .= '
										';
return $output125;
};
$viewHelper128 = $self->getViewHelper('$viewHelper128', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper128->setArguments($arguments120);
$viewHelper128->setRenderingContext($renderingContext);
$viewHelper128->setRenderChildrenClosure($renderChildrenClosure124);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output119 .= $viewHelper128->initializeArgumentsAndRender();

$output119 .= '
									';
return $output119;
};
$arguments99['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output129 = '';

$output129 .= '
										<span class="btn btn-default disabled">
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments130 = array();
$arguments130['identifier'] = 'actions-refresh';
$arguments130['size'] = 'small';
$arguments130['overlay'] = NULL;
$arguments130['state'] = 'default';
$arguments130['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure131 = function() {return NULL;};

$output129 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '
										</span>
									';
return $output129;
};

$output72 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output72 .= '
							</div>
						</td>
						<td>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments132 = array();
// Rendering Boolean node
$arguments132['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'automated', $renderingContext));
$arguments132['then'] = NULL;
$arguments132['else'] = NULL;
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output134 = '';

$output134 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments135 = array();
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output137 = '';

$output137 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments138 = array();
$arguments138['id'] = 'next_autosync';
// Rendering Array
$array139 = array();
$array139['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'task.frequencyText', $renderingContext);
$array139['1'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'task.nextexecution', $renderingContext);
$arguments138['arguments'] = $array139;
$arguments138['key'] = NULL;
$arguments138['default'] = NULL;
$arguments138['htmlEscape'] = NULL;
$arguments138['extensionName'] = NULL;
$renderChildrenClosure140 = function() {return NULL;};

$output137 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments138, $renderChildrenClosure140, $renderingContext);

$output137 .= '
								';
return $output137;
};

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output134 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments141 = array();
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output143 = '';

$output143 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments144 = array();
$arguments144['id'] = 'no_autosync';
$arguments144['key'] = NULL;
$arguments144['default'] = NULL;
$arguments144['htmlEscape'] = NULL;
$arguments144['arguments'] = NULL;
$arguments144['extensionName'] = NULL;
$renderChildrenClosure145 = function() {return NULL;};

$output143 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output143 .= '
								';
return $output143;
};

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output134 .= '
							';
return $output134;
};
$arguments132['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output146 = '';

$output146 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments147 = array();
$arguments147['id'] = 'next_autosync';
// Rendering Array
$array148 = array();
$array148['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'task.frequencyText', $renderingContext);
$array148['1'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'task.nextexecution', $renderingContext);
$arguments147['arguments'] = $array148;
$arguments147['key'] = NULL;
$arguments147['default'] = NULL;
$arguments147['htmlEscape'] = NULL;
$arguments147['extensionName'] = NULL;
$renderChildrenClosure149 = function() {return NULL;};

$output146 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments147, $renderChildrenClosure149, $renderingContext);

$output146 .= '
								';
return $output146;
};
$arguments132['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output150 = '';

$output150 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments151 = array();
$arguments151['id'] = 'no_autosync';
$arguments151['key'] = NULL;
$arguments151['default'] = NULL;
$arguments151['htmlEscape'] = NULL;
$arguments151['arguments'] = NULL;
$arguments151['extensionName'] = NULL;
$renderChildrenClosure152 = function() {return NULL;};

$output150 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output150 .= '
								';
return $output150;
};

$output72 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output72 .= '
						</td>
						<td class="tx_externalimport_actions">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments153 = array();
// Rendering Boolean node
$arguments153['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'writeAccess', $renderingContext));
$arguments153['then'] = NULL;
$arguments153['else'] = NULL;
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output155 = '';

$output155 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments156 = array();
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output158 = '';

$output158 .= '
									<div class="btn-group">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments159 = array();
// Rendering Boolean node
$arguments159['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'automated', $renderingContext));
$arguments159['then'] = NULL;
$arguments159['else'] = NULL;
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output161 = '';

$output161 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments162 = array();
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output164 = '';

$output164 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments165 = array();
$arguments165['partial'] = 'DataModule/Actions/EditButton';
// Rendering Array
$array166 = array();
$array166['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'task.uid', $renderingContext);
$arguments165['arguments'] = $array166;
$arguments165['section'] = NULL;
$arguments165['optional'] = false;
$renderChildrenClosure167 = function() {return NULL;};

$output164 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments165, $renderChildrenClosure167, $renderingContext);

$output164 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments168 = array();
$arguments168['partial'] = 'DataModule/Actions/DeleteButton';
// Rendering Array
$array169 = array();
$array169['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'task.uid', $renderingContext);
$arguments168['arguments'] = $array169;
$arguments168['section'] = NULL;
$arguments168['optional'] = false;
$renderChildrenClosure170 = function() {return NULL;};

$output164 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments168, $renderChildrenClosure170, $renderingContext);

$output164 .= '
											';
return $output164;
};

$output161 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output161 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments171 = array();
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output173 = '';

$output173 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments174 = array();
$arguments174['partial'] = 'DataModule/Actions/AddButton';
// Rendering Array
$array175 = array();
$array175['table'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'table', $renderingContext);
$array175['index'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'index', $renderingContext);
$arguments174['arguments'] = $array175;
$arguments174['section'] = NULL;
$arguments174['optional'] = false;
$renderChildrenClosure176 = function() {return NULL;};

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments174, $renderChildrenClosure176, $renderingContext);

$output173 .= '
											';
return $output173;
};

$output161 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output161 .= '
										';
return $output161;
};
$arguments159['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output177 = '';

$output177 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments178 = array();
$arguments178['partial'] = 'DataModule/Actions/EditButton';
// Rendering Array
$array179 = array();
$array179['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'task.uid', $renderingContext);
$arguments178['arguments'] = $array179;
$arguments178['section'] = NULL;
$arguments178['optional'] = false;
$renderChildrenClosure180 = function() {return NULL;};

$output177 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments178, $renderChildrenClosure180, $renderingContext);

$output177 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments181 = array();
$arguments181['partial'] = 'DataModule/Actions/DeleteButton';
// Rendering Array
$array182 = array();
$array182['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'task.uid', $renderingContext);
$arguments181['arguments'] = $array182;
$arguments181['section'] = NULL;
$arguments181['optional'] = false;
$renderChildrenClosure183 = function() {return NULL;};

$output177 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments181, $renderChildrenClosure183, $renderingContext);

$output177 .= '
											';
return $output177;
};
$arguments159['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output184 = '';

$output184 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments185 = array();
$arguments185['partial'] = 'DataModule/Actions/AddButton';
// Rendering Array
$array186 = array();
$array186['table'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'table', $renderingContext);
$array186['index'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'index', $renderingContext);
$arguments185['arguments'] = $array186;
$arguments185['section'] = NULL;
$arguments185['optional'] = false;
$renderChildrenClosure187 = function() {return NULL;};

$output184 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments185, $renderChildrenClosure187, $renderingContext);

$output184 .= '
											';
return $output184;
};

$output158 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output158 .= '
									</div>
								';
return $output158;
};

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output155 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments188 = array();
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '&nbsp;';
};

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output155 .= '
							';
return $output155;
};
$arguments153['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output190 = '';

$output190 .= '
									<div class="btn-group">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments191 = array();
// Rendering Boolean node
$arguments191['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'automated', $renderingContext));
$arguments191['then'] = NULL;
$arguments191['else'] = NULL;
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output193 = '';

$output193 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments194 = array();
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output196 = '';

$output196 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments197 = array();
$arguments197['partial'] = 'DataModule/Actions/EditButton';
// Rendering Array
$array198 = array();
$array198['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'task.uid', $renderingContext);
$arguments197['arguments'] = $array198;
$arguments197['section'] = NULL;
$arguments197['optional'] = false;
$renderChildrenClosure199 = function() {return NULL;};

$output196 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments197, $renderChildrenClosure199, $renderingContext);

$output196 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments200 = array();
$arguments200['partial'] = 'DataModule/Actions/DeleteButton';
// Rendering Array
$array201 = array();
$array201['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'task.uid', $renderingContext);
$arguments200['arguments'] = $array201;
$arguments200['section'] = NULL;
$arguments200['optional'] = false;
$renderChildrenClosure202 = function() {return NULL;};

$output196 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments200, $renderChildrenClosure202, $renderingContext);

$output196 .= '
											';
return $output196;
};

$output193 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output193 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments203 = array();
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output205 = '';

$output205 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments206 = array();
$arguments206['partial'] = 'DataModule/Actions/AddButton';
// Rendering Array
$array207 = array();
$array207['table'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'table', $renderingContext);
$array207['index'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'index', $renderingContext);
$arguments206['arguments'] = $array207;
$arguments206['section'] = NULL;
$arguments206['optional'] = false;
$renderChildrenClosure208 = function() {return NULL;};

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments206, $renderChildrenClosure208, $renderingContext);

$output205 .= '
											';
return $output205;
};

$output193 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output193 .= '
										';
return $output193;
};
$arguments191['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output209 = '';

$output209 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments210 = array();
$arguments210['partial'] = 'DataModule/Actions/EditButton';
// Rendering Array
$array211 = array();
$array211['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'task.uid', $renderingContext);
$arguments210['arguments'] = $array211;
$arguments210['section'] = NULL;
$arguments210['optional'] = false;
$renderChildrenClosure212 = function() {return NULL;};

$output209 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments210, $renderChildrenClosure212, $renderingContext);

$output209 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments213 = array();
$arguments213['partial'] = 'DataModule/Actions/DeleteButton';
// Rendering Array
$array214 = array();
$array214['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'task.uid', $renderingContext);
$arguments213['arguments'] = $array214;
$arguments213['section'] = NULL;
$arguments213['optional'] = false;
$renderChildrenClosure215 = function() {return NULL;};

$output209 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments213, $renderChildrenClosure215, $renderingContext);

$output209 .= '
											';
return $output209;
};
$arguments191['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output216 = '';

$output216 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments217 = array();
$arguments217['partial'] = 'DataModule/Actions/AddButton';
// Rendering Array
$array218 = array();
$array218['table'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'table', $renderingContext);
$array218['index'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'index', $renderingContext);
$arguments217['arguments'] = $array218;
$arguments217['section'] = NULL;
$arguments217['optional'] = false;
$renderChildrenClosure219 = function() {return NULL;};

$output216 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments217, $renderChildrenClosure219, $renderingContext);

$output216 .= '
											';
return $output216;
};

$output190 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output190 .= '
									</div>
								';
return $output190;
};
$arguments153['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '&nbsp;';
};

$output72 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output72 .= '
						</td>
					</tr>
				';
return $output72;
};

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output10 .= '
			</tbody>
		</table>
	';
return $output10;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure9, $renderingContext);

$output0 .= '
';


return $output0;
}


}
#1467226800    57925     