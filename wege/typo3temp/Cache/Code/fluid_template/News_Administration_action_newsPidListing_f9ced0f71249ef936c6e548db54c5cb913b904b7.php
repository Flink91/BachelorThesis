<?php
class FluidCache_News_Administration_action_newsPidListing_f9ced0f71249ef936c6e548db54c5cb913b904b7 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'Backend/Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	<h1>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.newsPidListing.header';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
	</h1>
	<p class="lead">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments3 = array();
$arguments3['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.newsPidListing.description';
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['htmlEscape'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$renderChildrenClosure4 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
	</p>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments5 = array();
$arguments5['action'] = 'newsPidListing';
$arguments5['class'] = 'form-horizontal';
$arguments5['additionalAttributes'] = NULL;
$arguments5['data'] = NULL;
$arguments5['arguments'] = array (
);
$arguments5['controller'] = NULL;
$arguments5['extensionName'] = NULL;
$arguments5['pluginName'] = NULL;
$arguments5['pageUid'] = NULL;
$arguments5['object'] = NULL;
$arguments5['pageType'] = 0;
$arguments5['noCache'] = false;
$arguments5['noCacheHash'] = false;
$arguments5['section'] = '';
$arguments5['format'] = '';
$arguments5['additionalParams'] = array (
);
$arguments5['absolute'] = false;
$arguments5['addQueryString'] = false;
$arguments5['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments5['fieldNamePrefix'] = NULL;
$arguments5['actionUri'] = NULL;
$arguments5['objectName'] = NULL;
$arguments5['hiddenFieldClassName'] = NULL;
$arguments5['enctype'] = NULL;
$arguments5['method'] = NULL;
$arguments5['name'] = NULL;
$arguments5['onreset'] = NULL;
$arguments5['onsubmit'] = NULL;
$arguments5['dir'] = NULL;
$arguments5['id'] = NULL;
$arguments5['lang'] = NULL;
$arguments5['style'] = NULL;
$arguments5['title'] = NULL;
$arguments5['accesskey'] = NULL;
$arguments5['tabindex'] = NULL;
$arguments5['onclick'] = NULL;
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output7 = '';

$output7 .= '
		<div class="form-group">
			<label for="treeLevel" class="col-sm-3 control-label">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments8 = array();
$arguments8['key'] = 'LLL:EXT:lang/locallang_general.xlf:LGL.recursive';
$arguments8['id'] = NULL;
$arguments8['default'] = NULL;
$arguments8['htmlEscape'] = NULL;
$arguments8['arguments'] = NULL;
$arguments8['extensionName'] = NULL;
$renderChildrenClosure9 = function() {return NULL;};

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
			</label>
			<div class="col-sm-4">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments10 = array();
$arguments10['class'] = 'form-control';
$arguments10['name'] = 'treeLevel';
$arguments10['id'] = 'treeLevel';
// Rendering Array
$array11 = array();
$array11['1'] = 1;
$array11['2'] = 2;
$array11['3'] = 3;
$array11['4'] = 4;
$array11['5'] = 5;
$array11['6'] = 6;
$array11['7'] = 7;
$arguments10['options'] = $array11;
$arguments10['value'] = $currentVariableContainer->getOrNull('treeLevel');
// Rendering Array
$array12 = array();
$array12['onchange'] = 'this.form.submit()';
$arguments10['additionalAttributes'] = $array12;
$arguments10['data'] = NULL;
$arguments10['property'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['size'] = NULL;
$arguments10['disabled'] = NULL;
$arguments10['optionValueField'] = NULL;
$arguments10['optionLabelField'] = NULL;
$arguments10['sortByOptionLabel'] = false;
$arguments10['selectAllByDefault'] = false;
$arguments10['errorClass'] = 'f3-form-error';
$arguments10['prependOptionLabel'] = NULL;
$arguments10['prependOptionValue'] = NULL;
$arguments10['multiple'] = false;
$renderChildrenClosure13 = function() {return NULL;};
$viewHelper14 = $self->getViewHelper('$viewHelper14', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper14->setArguments($arguments10);
$viewHelper14->setRenderingContext($renderingContext);
$viewHelper14->setRenderChildrenClosure($renderChildrenClosure13);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output7 .= $viewHelper14->initializeArgumentsAndRender();

$output7 .= '
			</div>
		</div>
	';
return $output7;
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper15->setArguments($arguments5);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper15->initializeArgumentsAndRender();

$output0 .= '
	<table class="t3-table">
		<thead>
			<tr class="t3-row-header">
				<th>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments16 = array();
$arguments16['key'] = 'LLL:EXT:lang/locallang_tca.xlf:pages';
$arguments16['id'] = NULL;
$arguments16['default'] = NULL;
$arguments16['htmlEscape'] = NULL;
$arguments16['arguments'] = NULL;
$arguments16['extensionName'] = NULL;
$renderChildrenClosure17 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '
				</th>
				<th>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments18 = array();
$arguments18['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news';
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['htmlEscape'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$renderChildrenClosure19 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output0 .= '
				</th>
				<th>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments20 = array();
$arguments20['key'] = 'LLL:EXT:lang/locallang_tca.xlf:sys_category';
$arguments20['id'] = NULL;
$arguments20['default'] = NULL;
$arguments20['htmlEscape'] = NULL;
$arguments20['arguments'] = NULL;
$arguments20['extensionName'] = NULL;
$renderChildrenClosure21 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '
				</th>
			</tr>
		</thead>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments22 = array();
$arguments22['each'] = $currentVariableContainer->getOrNull('tree');
$arguments22['as'] = 'item';
$arguments22['key'] = '';
$arguments22['reverse'] = false;
$arguments22['iteration'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output24 = '';

$output24 .= '
			<tr class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments25 = array();
// Rendering Boolean node
$arguments25['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'countNewsAndCategories', $renderingContext));
$arguments25['then'] = '';
$arguments25['else'] = 'hide_line';
$renderChildrenClosure26 = function() {return NULL;};

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '">
				<td nowrap="nowrap">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments27 = array();
$arguments27['parseFuncTSPath'] = '';
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'HTML', $renderingContext);
};

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output24 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments29 = array();
$arguments29['action'] = 'index';
// Rendering Array
$array30 = array();
$array30['id'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'row.uid', $renderingContext);
$arguments29['additionalParams'] = $array30;
$output31 = '';

$output31 .= 'UID: ';

$output31 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'row.uid', $renderingContext);
$arguments29['title'] = $output31;
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['arguments'] = array (
);
$arguments29['controller'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['pluginName'] = NULL;
$arguments29['pageUid'] = NULL;
$arguments29['pageType'] = 0;
$arguments29['noCache'] = false;
$arguments29['noCacheHash'] = false;
$arguments29['section'] = '';
$arguments29['format'] = '';
$arguments29['linkAccessRestrictedPages'] = false;
$arguments29['absolute'] = false;
$arguments29['addQueryString'] = false;
$arguments29['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments29['addQueryStringMethod'] = NULL;
$arguments29['class'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$arguments29['name'] = NULL;
$arguments29['rel'] = NULL;
$arguments29['rev'] = NULL;
$arguments29['target'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments33 = array();
$arguments33['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'row.title', $renderingContext);
$arguments33['keepQuotes'] = false;
$arguments33['encoding'] = NULL;
$arguments33['doubleEncode'] = true;
$renderChildrenClosure34 = function() {return NULL;};
$value35 = ($arguments33['value'] !== NULL ? $arguments33['value'] : $renderChildrenClosure34());
return (!is_string($value35) ? $value35 : htmlspecialchars($value35, ($arguments33['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments33['encoding'] !== NULL ? $arguments33['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments33['doubleEncode']));
};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper36->setArguments($arguments29);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure32);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output24 .= $viewHelper36->initializeArgumentsAndRender();

$output24 .= '
				</td>
				<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments37 = array();
// Rendering Boolean node
$arguments37['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'countNews', $renderingContext));
$arguments37['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'countNews', $renderingContext);
$arguments37['else'] = '';
$renderChildrenClosure38 = function() {return NULL;};

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output24 .= '</td>
				<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments39 = array();
// Rendering Boolean node
$arguments39['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'countCategories', $renderingContext));
$arguments39['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'countCategories', $renderingContext);
$arguments39['else'] = '';
$renderChildrenClosure40 = function() {return NULL;};

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output24 .= '</td>
			</tr>
		';
return $output24;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output0 .= '
	</table>
';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output41 = '';

$output41 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments42 = array();
$arguments42['name'] = 'Backend/Default';
$renderChildrenClosure43 = function() {return NULL;};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper44->setArguments($arguments42);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output41 .= $viewHelper44->initializeArgumentsAndRender();

$output41 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments45 = array();
$arguments45['name'] = 'content';
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output47 = '';

$output47 .= '
	<h1>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments48 = array();
$arguments48['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.newsPidListing.header';
$arguments48['id'] = NULL;
$arguments48['default'] = NULL;
$arguments48['htmlEscape'] = NULL;
$arguments48['arguments'] = NULL;
$arguments48['extensionName'] = NULL;
$renderChildrenClosure49 = function() {return NULL;};

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
	</h1>
	<p class="lead">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments50 = array();
$arguments50['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.newsPidListing.description';
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['htmlEscape'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$renderChildrenClosure51 = function() {return NULL;};

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output47 .= '
	</p>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments52 = array();
$arguments52['action'] = 'newsPidListing';
$arguments52['class'] = 'form-horizontal';
$arguments52['additionalAttributes'] = NULL;
$arguments52['data'] = NULL;
$arguments52['arguments'] = array (
);
$arguments52['controller'] = NULL;
$arguments52['extensionName'] = NULL;
$arguments52['pluginName'] = NULL;
$arguments52['pageUid'] = NULL;
$arguments52['object'] = NULL;
$arguments52['pageType'] = 0;
$arguments52['noCache'] = false;
$arguments52['noCacheHash'] = false;
$arguments52['section'] = '';
$arguments52['format'] = '';
$arguments52['additionalParams'] = array (
);
$arguments52['absolute'] = false;
$arguments52['addQueryString'] = false;
$arguments52['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments52['fieldNamePrefix'] = NULL;
$arguments52['actionUri'] = NULL;
$arguments52['objectName'] = NULL;
$arguments52['hiddenFieldClassName'] = NULL;
$arguments52['enctype'] = NULL;
$arguments52['method'] = NULL;
$arguments52['name'] = NULL;
$arguments52['onreset'] = NULL;
$arguments52['onsubmit'] = NULL;
$arguments52['dir'] = NULL;
$arguments52['id'] = NULL;
$arguments52['lang'] = NULL;
$arguments52['style'] = NULL;
$arguments52['title'] = NULL;
$arguments52['accesskey'] = NULL;
$arguments52['tabindex'] = NULL;
$arguments52['onclick'] = NULL;
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output54 = '';

$output54 .= '
		<div class="form-group">
			<label for="treeLevel" class="col-sm-3 control-label">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments55 = array();
$arguments55['key'] = 'LLL:EXT:lang/locallang_general.xlf:LGL.recursive';
$arguments55['id'] = NULL;
$arguments55['default'] = NULL;
$arguments55['htmlEscape'] = NULL;
$arguments55['arguments'] = NULL;
$arguments55['extensionName'] = NULL;
$renderChildrenClosure56 = function() {return NULL;};

$output54 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '
			</label>
			<div class="col-sm-4">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments57 = array();
$arguments57['class'] = 'form-control';
$arguments57['name'] = 'treeLevel';
$arguments57['id'] = 'treeLevel';
// Rendering Array
$array58 = array();
$array58['1'] = 1;
$array58['2'] = 2;
$array58['3'] = 3;
$array58['4'] = 4;
$array58['5'] = 5;
$array58['6'] = 6;
$array58['7'] = 7;
$arguments57['options'] = $array58;
$arguments57['value'] = $currentVariableContainer->getOrNull('treeLevel');
// Rendering Array
$array59 = array();
$array59['onchange'] = 'this.form.submit()';
$arguments57['additionalAttributes'] = $array59;
$arguments57['data'] = NULL;
$arguments57['property'] = NULL;
$arguments57['dir'] = NULL;
$arguments57['lang'] = NULL;
$arguments57['style'] = NULL;
$arguments57['title'] = NULL;
$arguments57['accesskey'] = NULL;
$arguments57['tabindex'] = NULL;
$arguments57['onclick'] = NULL;
$arguments57['size'] = NULL;
$arguments57['disabled'] = NULL;
$arguments57['optionValueField'] = NULL;
$arguments57['optionLabelField'] = NULL;
$arguments57['sortByOptionLabel'] = false;
$arguments57['selectAllByDefault'] = false;
$arguments57['errorClass'] = 'f3-form-error';
$arguments57['prependOptionLabel'] = NULL;
$arguments57['prependOptionValue'] = NULL;
$arguments57['multiple'] = false;
$renderChildrenClosure60 = function() {return NULL;};
$viewHelper61 = $self->getViewHelper('$viewHelper61', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper61->setArguments($arguments57);
$viewHelper61->setRenderingContext($renderingContext);
$viewHelper61->setRenderChildrenClosure($renderChildrenClosure60);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output54 .= $viewHelper61->initializeArgumentsAndRender();

$output54 .= '
			</div>
		</div>
	';
return $output54;
};
$viewHelper62 = $self->getViewHelper('$viewHelper62', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper62->setArguments($arguments52);
$viewHelper62->setRenderingContext($renderingContext);
$viewHelper62->setRenderChildrenClosure($renderChildrenClosure53);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output47 .= $viewHelper62->initializeArgumentsAndRender();

$output47 .= '
	<table class="t3-table">
		<thead>
			<tr class="t3-row-header">
				<th>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments63 = array();
$arguments63['key'] = 'LLL:EXT:lang/locallang_tca.xlf:pages';
$arguments63['id'] = NULL;
$arguments63['default'] = NULL;
$arguments63['htmlEscape'] = NULL;
$arguments63['arguments'] = NULL;
$arguments63['extensionName'] = NULL;
$renderChildrenClosure64 = function() {return NULL;};

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output47 .= '
				</th>
				<th>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments65 = array();
$arguments65['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news';
$arguments65['id'] = NULL;
$arguments65['default'] = NULL;
$arguments65['htmlEscape'] = NULL;
$arguments65['arguments'] = NULL;
$arguments65['extensionName'] = NULL;
$renderChildrenClosure66 = function() {return NULL;};

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output47 .= '
				</th>
				<th>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments67 = array();
$arguments67['key'] = 'LLL:EXT:lang/locallang_tca.xlf:sys_category';
$arguments67['id'] = NULL;
$arguments67['default'] = NULL;
$arguments67['htmlEscape'] = NULL;
$arguments67['arguments'] = NULL;
$arguments67['extensionName'] = NULL;
$renderChildrenClosure68 = function() {return NULL;};

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output47 .= '
				</th>
			</tr>
		</thead>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments69 = array();
$arguments69['each'] = $currentVariableContainer->getOrNull('tree');
$arguments69['as'] = 'item';
$arguments69['key'] = '';
$arguments69['reverse'] = false;
$arguments69['iteration'] = NULL;
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output71 = '';

$output71 .= '
			<tr class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments72 = array();
// Rendering Boolean node
$arguments72['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'countNewsAndCategories', $renderingContext));
$arguments72['then'] = '';
$arguments72['else'] = 'hide_line';
$renderChildrenClosure73 = function() {return NULL;};

$output71 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '">
				<td nowrap="nowrap">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments74 = array();
$arguments74['parseFuncTSPath'] = '';
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'HTML', $renderingContext);
};

$output71 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output71 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments76 = array();
$arguments76['action'] = 'index';
// Rendering Array
$array77 = array();
$array77['id'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'row.uid', $renderingContext);
$arguments76['additionalParams'] = $array77;
$output78 = '';

$output78 .= 'UID: ';

$output78 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'row.uid', $renderingContext);
$arguments76['title'] = $output78;
$arguments76['additionalAttributes'] = NULL;
$arguments76['data'] = NULL;
$arguments76['arguments'] = array (
);
$arguments76['controller'] = NULL;
$arguments76['extensionName'] = NULL;
$arguments76['pluginName'] = NULL;
$arguments76['pageUid'] = NULL;
$arguments76['pageType'] = 0;
$arguments76['noCache'] = false;
$arguments76['noCacheHash'] = false;
$arguments76['section'] = '';
$arguments76['format'] = '';
$arguments76['linkAccessRestrictedPages'] = false;
$arguments76['absolute'] = false;
$arguments76['addQueryString'] = false;
$arguments76['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments76['addQueryStringMethod'] = NULL;
$arguments76['class'] = NULL;
$arguments76['dir'] = NULL;
$arguments76['id'] = NULL;
$arguments76['lang'] = NULL;
$arguments76['style'] = NULL;
$arguments76['accesskey'] = NULL;
$arguments76['tabindex'] = NULL;
$arguments76['onclick'] = NULL;
$arguments76['name'] = NULL;
$arguments76['rel'] = NULL;
$arguments76['rev'] = NULL;
$arguments76['target'] = NULL;
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments80 = array();
$arguments80['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'row.title', $renderingContext);
$arguments80['keepQuotes'] = false;
$arguments80['encoding'] = NULL;
$arguments80['doubleEncode'] = true;
$renderChildrenClosure81 = function() {return NULL;};
$value82 = ($arguments80['value'] !== NULL ? $arguments80['value'] : $renderChildrenClosure81());
return (!is_string($value82) ? $value82 : htmlspecialchars($value82, ($arguments80['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments80['encoding'] !== NULL ? $arguments80['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments80['doubleEncode']));
};
$viewHelper83 = $self->getViewHelper('$viewHelper83', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper83->setArguments($arguments76);
$viewHelper83->setRenderingContext($renderingContext);
$viewHelper83->setRenderChildrenClosure($renderChildrenClosure79);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output71 .= $viewHelper83->initializeArgumentsAndRender();

$output71 .= '
				</td>
				<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments84 = array();
// Rendering Boolean node
$arguments84['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'countNews', $renderingContext));
$arguments84['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'countNews', $renderingContext);
$arguments84['else'] = '';
$renderChildrenClosure85 = function() {return NULL;};

$output71 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output71 .= '</td>
				<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments86 = array();
// Rendering Boolean node
$arguments86['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'countCategories', $renderingContext));
$arguments86['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'countCategories', $renderingContext);
$arguments86['else'] = '';
$renderChildrenClosure87 = function() {return NULL;};

$output71 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output71 .= '</td>
			</tr>
		';
return $output71;
};

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output47 .= '
	</table>
';
return $output47;
};

$output41 .= '';

$output41 .= '
';


return $output41;
}


}
#1460988703    30408     