<?php
class FluidCache_Yag_Gallery_partial_Pager_Delta_830261d645912a5aaff39ca7799e13b1a9a42f1d extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper
$arguments1 = array();
$arguments1['show'] = false;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
<!--  
Template for rendering a Pager.

Here is a list of objects / variables that can be accessed in this template:

Tx_PtExtlist_Domain_Model_Pager				The pager object

@package Typo3
@subpackage pt_extlist
@author Michael Knoll <knoll@punkt.de>
@author Daniel Lienert <lienert@punkt.de>
-->
';
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'Tx_PtExtlist_ViewHelpers_CommentViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'itemCount', $renderingContext));
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
    <div class="tx-ptextlist-pager-item-display">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments7 = array();
// Rendering Boolean node
$arguments7['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'firstItemIndex', $renderingContext));
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments10 = array();
$arguments10['key'] = 'pager.showItems';
$arguments10['default'] = 'Show items from';
$arguments10['id'] = NULL;
$arguments10['htmlEscape'] = NULL;
$arguments10['arguments'] = NULL;
$arguments10['extensionName'] = NULL;
$renderChildrenClosure11 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= ' <span class="first">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments12 = array();
$arguments12['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'firstItemIndex', $renderingContext);
$arguments12['keepQuotes'] = false;
$arguments12['encoding'] = NULL;
$arguments12['doubleEncode'] = true;
$renderChildrenClosure13 = function() {return NULL;};
$value14 = ($arguments12['value'] !== NULL ? $arguments12['value'] : $renderChildrenClosure13());

$output9 .= (!is_string($value14) ? $value14 : htmlspecialchars($value14, ($arguments12['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments12['encoding'] !== NULL ? $arguments12['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments12['doubleEncode']));

$output9 .= '</span>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments15 = array();
$arguments15['key'] = 'pager.to';
$arguments15['default'] = 'to';
$arguments15['id'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output9 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments17 = array();
// Rendering Boolean node
$arguments17['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'itemCount', $renderingContext), \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'lastItemIndex', $renderingContext));
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output19 = '';

$output19 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments20 = array();
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= '<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments23 = array();
$arguments23['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'itemCount', $renderingContext);
$arguments23['keepQuotes'] = false;
$arguments23['encoding'] = NULL;
$arguments23['doubleEncode'] = true;
$renderChildrenClosure24 = function() {return NULL;};
$value25 = ($arguments23['value'] !== NULL ? $arguments23['value'] : $renderChildrenClosure24());

$output22 .= (!is_string($value25) ? $value25 : htmlspecialchars($value25, ($arguments23['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments23['encoding'] !== NULL ? $arguments23['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments23['doubleEncode']));

$output22 .= '</span>';
return $output22;
};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments26 = array();
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output28 = '';

$output28 .= '<span class="last">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments29 = array();
$arguments29['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'lastItemIndex', $renderingContext);
$arguments29['keepQuotes'] = false;
$arguments29['encoding'] = NULL;
$arguments29['doubleEncode'] = true;
$renderChildrenClosure30 = function() {return NULL;};
$value31 = ($arguments29['value'] !== NULL ? $arguments29['value'] : $renderChildrenClosure30());

$output28 .= (!is_string($value31) ? $value31 : htmlspecialchars($value31, ($arguments29['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments29['encoding'] !== NULL ? $arguments29['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments29['doubleEncode']));

$output28 .= '</span>';
return $output28;
};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output19 .= '
            ';
return $output19;
};
$arguments17['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output32 = '';

$output32 .= '<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments33 = array();
$arguments33['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'itemCount', $renderingContext);
$arguments33['keepQuotes'] = false;
$arguments33['encoding'] = NULL;
$arguments33['doubleEncode'] = true;
$renderChildrenClosure34 = function() {return NULL;};
$value35 = ($arguments33['value'] !== NULL ? $arguments33['value'] : $renderChildrenClosure34());

$output32 .= (!is_string($value35) ? $value35 : htmlspecialchars($value35, ($arguments33['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments33['encoding'] !== NULL ? $arguments33['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments33['doubleEncode']));

$output32 .= '</span>';
return $output32;
};
$arguments17['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output36 = '';

$output36 .= '<span class="last">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments37 = array();
$arguments37['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'lastItemIndex', $renderingContext);
$arguments37['keepQuotes'] = false;
$arguments37['encoding'] = NULL;
$arguments37['doubleEncode'] = true;
$renderChildrenClosure38 = function() {return NULL;};
$value39 = ($arguments37['value'] !== NULL ? $arguments37['value'] : $renderChildrenClosure38());

$output36 .= (!is_string($value39) ? $value39 : htmlspecialchars($value39, ($arguments37['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments37['encoding'] !== NULL ? $arguments37['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments37['doubleEncode']));

$output36 .= '</span>';
return $output36;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output9 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments40 = array();
$arguments40['key'] = 'pager.of';
$arguments40['default'] = 'of';
$arguments40['id'] = NULL;
$arguments40['htmlEscape'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['extensionName'] = NULL;
$renderChildrenClosure41 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output9 .= ' <span class="count">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments42 = array();
$arguments42['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'itemCount', $renderingContext);
$arguments42['keepQuotes'] = false;
$arguments42['encoding'] = NULL;
$arguments42['doubleEncode'] = true;
$renderChildrenClosure43 = function() {return NULL;};
$value44 = ($arguments42['value'] !== NULL ? $arguments42['value'] : $renderChildrenClosure43());

$output9 .= (!is_string($value44) ? $value44 : htmlspecialchars($value44, ($arguments42['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments42['encoding'] !== NULL ? $arguments42['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments42['doubleEncode']));

$output9 .= '</span>
        ';
return $output9;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
    </div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments45 = array();
// Rendering Boolean node
$arguments45['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'itemCount', $renderingContext), \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'itemsPerPage', $renderingContext));
$arguments45['then'] = NULL;
$arguments45['else'] = NULL;
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output47 = '';

$output47 .= '
        <ul class="tx-ptextlist-pager" id="tx-ptextlist-pager-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments48 = array();
$arguments48['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'pagerIdentifier', $renderingContext);
$arguments48['keepQuotes'] = false;
$arguments48['encoding'] = NULL;
$arguments48['doubleEncode'] = true;
$renderChildrenClosure49 = function() {return NULL;};
$value50 = ($arguments48['value'] !== NULL ? $arguments48['value'] : $renderChildrenClosure49());

$output47 .= (!is_string($value50) ? $value50 : htmlspecialchars($value50, ($arguments48['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments48['encoding'] !== NULL ? $arguments48['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments48['doubleEncode']));

$output47 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments51 = array();
// Rendering Boolean node
$arguments51['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('!=', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'currentPage', $renderingContext), \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'firstPage', $renderingContext));
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output53 = '';

$output53 .= '
                <li class="first">';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper
$arguments54 = array();
$arguments54['action'] = $currentVariableContainer->getOrNull('action');
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments55 = array();
$arguments55['object'] = $currentVariableContainer->getOrNull('pagerCollection');
$output56 = '';

$output56 .= 'page:';

$output56 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'firstPage', $renderingContext);
$arguments55['arguments'] = $output56;
$arguments55['nameSpace'] = '';
$renderChildrenClosure57 = function() {return NULL;};
$viewHelper58 = $self->getViewHelper('$viewHelper58', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper58->setArguments($arguments55);
$viewHelper58->setRenderingContext($renderingContext);
$viewHelper58->setRenderChildrenClosure($renderChildrenClosure57);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments54['arguments'] = $viewHelper58->initializeArgumentsAndRender();
$arguments54['additionalAttributes'] = NULL;
$arguments54['data'] = NULL;
$arguments54['controller'] = NULL;
$arguments54['extensionName'] = NULL;
$arguments54['pluginName'] = NULL;
$arguments54['pageUid'] = NULL;
$arguments54['pageType'] = 0;
$arguments54['noCache'] = false;
$arguments54['noCacheHash'] = false;
$arguments54['section'] = '';
$arguments54['format'] = '';
$arguments54['linkAccessRestrictedPages'] = false;
$arguments54['additionalParams'] = array (
);
$arguments54['absolute'] = false;
$arguments54['addQueryString'] = false;
$arguments54['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments54['class'] = NULL;
$arguments54['dir'] = NULL;
$arguments54['id'] = NULL;
$arguments54['lang'] = NULL;
$arguments54['style'] = NULL;
$arguments54['title'] = NULL;
$arguments54['accesskey'] = NULL;
$arguments54['tabindex'] = NULL;
$arguments54['onclick'] = NULL;
$arguments54['name'] = NULL;
$arguments54['rel'] = NULL;
$arguments54['rev'] = NULL;
$arguments54['target'] = NULL;
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '<span>&lt;&lt;</span>';
};
$viewHelper60 = $self->getViewHelper('$viewHelper60', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper');
$viewHelper60->setArguments($arguments54);
$viewHelper60->setRenderingContext($renderingContext);
$viewHelper60->setRenderChildrenClosure($renderChildrenClosure59);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper

$output53 .= $viewHelper60->initializeArgumentsAndRender();

$output53 .= '</li>
            ';
return $output53;
};

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output47 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments61 = array();
// Rendering Boolean node
$arguments61['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('!=', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'currentPage', $renderingContext), \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'firstPage', $renderingContext));
$arguments61['then'] = NULL;
$arguments61['else'] = NULL;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output63 = '';

$output63 .= '
                <li class="previous">';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper
$arguments64 = array();
$arguments64['action'] = $currentVariableContainer->getOrNull('action');
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments65 = array();
$arguments65['object'] = $currentVariableContainer->getOrNull('pagerCollection');
$output66 = '';

$output66 .= 'page:';

$output66 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'previousPage', $renderingContext);
$arguments65['arguments'] = $output66;
$arguments65['nameSpace'] = '';
$renderChildrenClosure67 = function() {return NULL;};
$viewHelper68 = $self->getViewHelper('$viewHelper68', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper68->setArguments($arguments65);
$viewHelper68->setRenderingContext($renderingContext);
$viewHelper68->setRenderChildrenClosure($renderChildrenClosure67);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments64['arguments'] = $viewHelper68->initializeArgumentsAndRender();
$arguments64['additionalAttributes'] = NULL;
$arguments64['data'] = NULL;
$arguments64['controller'] = NULL;
$arguments64['extensionName'] = NULL;
$arguments64['pluginName'] = NULL;
$arguments64['pageUid'] = NULL;
$arguments64['pageType'] = 0;
$arguments64['noCache'] = false;
$arguments64['noCacheHash'] = false;
$arguments64['section'] = '';
$arguments64['format'] = '';
$arguments64['linkAccessRestrictedPages'] = false;
$arguments64['additionalParams'] = array (
);
$arguments64['absolute'] = false;
$arguments64['addQueryString'] = false;
$arguments64['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments64['class'] = NULL;
$arguments64['dir'] = NULL;
$arguments64['id'] = NULL;
$arguments64['lang'] = NULL;
$arguments64['style'] = NULL;
$arguments64['title'] = NULL;
$arguments64['accesskey'] = NULL;
$arguments64['tabindex'] = NULL;
$arguments64['onclick'] = NULL;
$arguments64['name'] = NULL;
$arguments64['rel'] = NULL;
$arguments64['rev'] = NULL;
$arguments64['target'] = NULL;
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '<span>&lt;</span>';
};
$viewHelper70 = $self->getViewHelper('$viewHelper70', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper');
$viewHelper70->setArguments($arguments64);
$viewHelper70->setRenderingContext($renderingContext);
$viewHelper70->setRenderChildrenClosure($renderChildrenClosure69);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper

$output63 .= $viewHelper70->initializeArgumentsAndRender();

$output63 .= '</li>
            ';
return $output63;
};

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output47 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments71 = array();
$arguments71['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'pages', $renderingContext);
$arguments71['key'] = 'i';
$arguments71['as'] = 'pageNumber';
$arguments71['reverse'] = false;
$arguments71['iteration'] = NULL;
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output73 = '';

$output73 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments74 = array();
// Rendering Boolean node
$arguments74['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('!=', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'currentPage', $renderingContext), $currentVariableContainer->getOrNull('pageNumber'));
$arguments74['then'] = NULL;
$arguments74['else'] = NULL;
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output76 = '';

$output76 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments77 = array();
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output79 = '';

$output79 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments80 = array();
// Rendering Boolean node
$arguments80['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('i'), $currentVariableContainer->getOrNull('pageNumber'));
$arguments80['then'] = NULL;
$arguments80['else'] = NULL;
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output82 = '';

$output82 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments83 = array();
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output85 = '';

$output85 .= '
                                <li class="number">';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper
$arguments86 = array();
$arguments86['action'] = $currentVariableContainer->getOrNull('action');
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments87 = array();
$arguments87['object'] = $currentVariableContainer->getOrNull('pagerCollection');
$output88 = '';

$output88 .= 'page:';

$output88 .= $currentVariableContainer->getOrNull('pageNumber');
$arguments87['arguments'] = $output88;
$arguments87['nameSpace'] = '';
$renderChildrenClosure89 = function() {return NULL;};
$viewHelper90 = $self->getViewHelper('$viewHelper90', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper90->setArguments($arguments87);
$viewHelper90->setRenderingContext($renderingContext);
$viewHelper90->setRenderChildrenClosure($renderChildrenClosure89);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments86['arguments'] = $viewHelper90->initializeArgumentsAndRender();
$arguments86['additionalAttributes'] = NULL;
$arguments86['data'] = NULL;
$arguments86['controller'] = NULL;
$arguments86['extensionName'] = NULL;
$arguments86['pluginName'] = NULL;
$arguments86['pageUid'] = NULL;
$arguments86['pageType'] = 0;
$arguments86['noCache'] = false;
$arguments86['noCacheHash'] = false;
$arguments86['section'] = '';
$arguments86['format'] = '';
$arguments86['linkAccessRestrictedPages'] = false;
$arguments86['additionalParams'] = array (
);
$arguments86['absolute'] = false;
$arguments86['addQueryString'] = false;
$arguments86['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments86['class'] = NULL;
$arguments86['dir'] = NULL;
$arguments86['id'] = NULL;
$arguments86['lang'] = NULL;
$arguments86['style'] = NULL;
$arguments86['title'] = NULL;
$arguments86['accesskey'] = NULL;
$arguments86['tabindex'] = NULL;
$arguments86['onclick'] = NULL;
$arguments86['name'] = NULL;
$arguments86['rel'] = NULL;
$arguments86['rev'] = NULL;
$arguments86['target'] = NULL;
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output92 = '';

$output92 .= '<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments93 = array();
$arguments93['value'] = $currentVariableContainer->getOrNull('pageNumber');
$arguments93['keepQuotes'] = false;
$arguments93['encoding'] = NULL;
$arguments93['doubleEncode'] = true;
$renderChildrenClosure94 = function() {return NULL;};
$value95 = ($arguments93['value'] !== NULL ? $arguments93['value'] : $renderChildrenClosure94());

$output92 .= (!is_string($value95) ? $value95 : htmlspecialchars($value95, ($arguments93['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments93['encoding'] !== NULL ? $arguments93['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments93['doubleEncode']));

$output92 .= '</span>';
return $output92;
};
$viewHelper96 = $self->getViewHelper('$viewHelper96', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper');
$viewHelper96->setArguments($arguments86);
$viewHelper96->setRenderingContext($renderingContext);
$viewHelper96->setRenderChildrenClosure($renderChildrenClosure91);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper

$output85 .= $viewHelper96->initializeArgumentsAndRender();

$output85 .= '</li>
                            ';
return $output85;
};

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments97 = array();
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output99 = '';

$output99 .= '
                                <li class="number"><span class="fill">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments100 = array();
$arguments100['value'] = $currentVariableContainer->getOrNull('pageNumber');
$arguments100['keepQuotes'] = false;
$arguments100['encoding'] = NULL;
$arguments100['doubleEncode'] = true;
$renderChildrenClosure101 = function() {return NULL;};
$value102 = ($arguments100['value'] !== NULL ? $arguments100['value'] : $renderChildrenClosure101());

$output99 .= (!is_string($value102) ? $value102 : htmlspecialchars($value102, ($arguments100['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments100['encoding'] !== NULL ? $arguments100['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments100['doubleEncode']));

$output99 .= '</span></li>
                            ';
return $output99;
};

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output82 .= '
                        ';
return $output82;
};
$arguments80['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output103 = '';

$output103 .= '
                                <li class="number">';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper
$arguments104 = array();
$arguments104['action'] = $currentVariableContainer->getOrNull('action');
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments105 = array();
$arguments105['object'] = $currentVariableContainer->getOrNull('pagerCollection');
$output106 = '';

$output106 .= 'page:';

$output106 .= $currentVariableContainer->getOrNull('pageNumber');
$arguments105['arguments'] = $output106;
$arguments105['nameSpace'] = '';
$renderChildrenClosure107 = function() {return NULL;};
$viewHelper108 = $self->getViewHelper('$viewHelper108', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper108->setArguments($arguments105);
$viewHelper108->setRenderingContext($renderingContext);
$viewHelper108->setRenderChildrenClosure($renderChildrenClosure107);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments104['arguments'] = $viewHelper108->initializeArgumentsAndRender();
$arguments104['additionalAttributes'] = NULL;
$arguments104['data'] = NULL;
$arguments104['controller'] = NULL;
$arguments104['extensionName'] = NULL;
$arguments104['pluginName'] = NULL;
$arguments104['pageUid'] = NULL;
$arguments104['pageType'] = 0;
$arguments104['noCache'] = false;
$arguments104['noCacheHash'] = false;
$arguments104['section'] = '';
$arguments104['format'] = '';
$arguments104['linkAccessRestrictedPages'] = false;
$arguments104['additionalParams'] = array (
);
$arguments104['absolute'] = false;
$arguments104['addQueryString'] = false;
$arguments104['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments104['class'] = NULL;
$arguments104['dir'] = NULL;
$arguments104['id'] = NULL;
$arguments104['lang'] = NULL;
$arguments104['style'] = NULL;
$arguments104['title'] = NULL;
$arguments104['accesskey'] = NULL;
$arguments104['tabindex'] = NULL;
$arguments104['onclick'] = NULL;
$arguments104['name'] = NULL;
$arguments104['rel'] = NULL;
$arguments104['rev'] = NULL;
$arguments104['target'] = NULL;
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output110 = '';

$output110 .= '<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments111 = array();
$arguments111['value'] = $currentVariableContainer->getOrNull('pageNumber');
$arguments111['keepQuotes'] = false;
$arguments111['encoding'] = NULL;
$arguments111['doubleEncode'] = true;
$renderChildrenClosure112 = function() {return NULL;};
$value113 = ($arguments111['value'] !== NULL ? $arguments111['value'] : $renderChildrenClosure112());

$output110 .= (!is_string($value113) ? $value113 : htmlspecialchars($value113, ($arguments111['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments111['encoding'] !== NULL ? $arguments111['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments111['doubleEncode']));

$output110 .= '</span>';
return $output110;
};
$viewHelper114 = $self->getViewHelper('$viewHelper114', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper');
$viewHelper114->setArguments($arguments104);
$viewHelper114->setRenderingContext($renderingContext);
$viewHelper114->setRenderChildrenClosure($renderChildrenClosure109);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper

$output103 .= $viewHelper114->initializeArgumentsAndRender();

$output103 .= '</li>
                            ';
return $output103;
};
$arguments80['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output115 = '';

$output115 .= '
                                <li class="number"><span class="fill">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments116 = array();
$arguments116['value'] = $currentVariableContainer->getOrNull('pageNumber');
$arguments116['keepQuotes'] = false;
$arguments116['encoding'] = NULL;
$arguments116['doubleEncode'] = true;
$renderChildrenClosure117 = function() {return NULL;};
$value118 = ($arguments116['value'] !== NULL ? $arguments116['value'] : $renderChildrenClosure117());

$output115 .= (!is_string($value118) ? $value118 : htmlspecialchars($value118, ($arguments116['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments116['encoding'] !== NULL ? $arguments116['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments116['doubleEncode']));

$output115 .= '</span></li>
                            ';
return $output115;
};

$output79 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
                    ';
return $output79;
};

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments119 = array();
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output121 = '';

$output121 .= '
                        <li class="number"><span class="cur">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments122 = array();
$arguments122['value'] = $currentVariableContainer->getOrNull('pageNumber');
$arguments122['keepQuotes'] = false;
$arguments122['encoding'] = NULL;
$arguments122['doubleEncode'] = true;
$renderChildrenClosure123 = function() {return NULL;};
$value124 = ($arguments122['value'] !== NULL ? $arguments122['value'] : $renderChildrenClosure123());

$output121 .= (!is_string($value124) ? $value124 : htmlspecialchars($value124, ($arguments122['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments122['encoding'] !== NULL ? $arguments122['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments122['doubleEncode']));

$output121 .= '</span></li>
                    ';
return $output121;
};

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output76 .= '
                ';
return $output76;
};
$arguments74['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output125 = '';

$output125 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments126 = array();
// Rendering Boolean node
$arguments126['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('i'), $currentVariableContainer->getOrNull('pageNumber'));
$arguments126['then'] = NULL;
$arguments126['else'] = NULL;
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output128 = '';

$output128 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments129 = array();
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output131 = '';

$output131 .= '
                                <li class="number">';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper
$arguments132 = array();
$arguments132['action'] = $currentVariableContainer->getOrNull('action');
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments133 = array();
$arguments133['object'] = $currentVariableContainer->getOrNull('pagerCollection');
$output134 = '';

$output134 .= 'page:';

$output134 .= $currentVariableContainer->getOrNull('pageNumber');
$arguments133['arguments'] = $output134;
$arguments133['nameSpace'] = '';
$renderChildrenClosure135 = function() {return NULL;};
$viewHelper136 = $self->getViewHelper('$viewHelper136', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper136->setArguments($arguments133);
$viewHelper136->setRenderingContext($renderingContext);
$viewHelper136->setRenderChildrenClosure($renderChildrenClosure135);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments132['arguments'] = $viewHelper136->initializeArgumentsAndRender();
$arguments132['additionalAttributes'] = NULL;
$arguments132['data'] = NULL;
$arguments132['controller'] = NULL;
$arguments132['extensionName'] = NULL;
$arguments132['pluginName'] = NULL;
$arguments132['pageUid'] = NULL;
$arguments132['pageType'] = 0;
$arguments132['noCache'] = false;
$arguments132['noCacheHash'] = false;
$arguments132['section'] = '';
$arguments132['format'] = '';
$arguments132['linkAccessRestrictedPages'] = false;
$arguments132['additionalParams'] = array (
);
$arguments132['absolute'] = false;
$arguments132['addQueryString'] = false;
$arguments132['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments132['class'] = NULL;
$arguments132['dir'] = NULL;
$arguments132['id'] = NULL;
$arguments132['lang'] = NULL;
$arguments132['style'] = NULL;
$arguments132['title'] = NULL;
$arguments132['accesskey'] = NULL;
$arguments132['tabindex'] = NULL;
$arguments132['onclick'] = NULL;
$arguments132['name'] = NULL;
$arguments132['rel'] = NULL;
$arguments132['rev'] = NULL;
$arguments132['target'] = NULL;
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output138 = '';

$output138 .= '<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments139 = array();
$arguments139['value'] = $currentVariableContainer->getOrNull('pageNumber');
$arguments139['keepQuotes'] = false;
$arguments139['encoding'] = NULL;
$arguments139['doubleEncode'] = true;
$renderChildrenClosure140 = function() {return NULL;};
$value141 = ($arguments139['value'] !== NULL ? $arguments139['value'] : $renderChildrenClosure140());

$output138 .= (!is_string($value141) ? $value141 : htmlspecialchars($value141, ($arguments139['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments139['encoding'] !== NULL ? $arguments139['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments139['doubleEncode']));

$output138 .= '</span>';
return $output138;
};
$viewHelper142 = $self->getViewHelper('$viewHelper142', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper');
$viewHelper142->setArguments($arguments132);
$viewHelper142->setRenderingContext($renderingContext);
$viewHelper142->setRenderChildrenClosure($renderChildrenClosure137);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper

$output131 .= $viewHelper142->initializeArgumentsAndRender();

$output131 .= '</li>
                            ';
return $output131;
};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output128 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments143 = array();
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output145 = '';

$output145 .= '
                                <li class="number"><span class="fill">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments146 = array();
$arguments146['value'] = $currentVariableContainer->getOrNull('pageNumber');
$arguments146['keepQuotes'] = false;
$arguments146['encoding'] = NULL;
$arguments146['doubleEncode'] = true;
$renderChildrenClosure147 = function() {return NULL;};
$value148 = ($arguments146['value'] !== NULL ? $arguments146['value'] : $renderChildrenClosure147());

$output145 .= (!is_string($value148) ? $value148 : htmlspecialchars($value148, ($arguments146['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments146['encoding'] !== NULL ? $arguments146['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments146['doubleEncode']));

$output145 .= '</span></li>
                            ';
return $output145;
};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output128 .= '
                        ';
return $output128;
};
$arguments126['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output149 = '';

$output149 .= '
                                <li class="number">';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper
$arguments150 = array();
$arguments150['action'] = $currentVariableContainer->getOrNull('action');
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments151 = array();
$arguments151['object'] = $currentVariableContainer->getOrNull('pagerCollection');
$output152 = '';

$output152 .= 'page:';

$output152 .= $currentVariableContainer->getOrNull('pageNumber');
$arguments151['arguments'] = $output152;
$arguments151['nameSpace'] = '';
$renderChildrenClosure153 = function() {return NULL;};
$viewHelper154 = $self->getViewHelper('$viewHelper154', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper154->setArguments($arguments151);
$viewHelper154->setRenderingContext($renderingContext);
$viewHelper154->setRenderChildrenClosure($renderChildrenClosure153);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments150['arguments'] = $viewHelper154->initializeArgumentsAndRender();
$arguments150['additionalAttributes'] = NULL;
$arguments150['data'] = NULL;
$arguments150['controller'] = NULL;
$arguments150['extensionName'] = NULL;
$arguments150['pluginName'] = NULL;
$arguments150['pageUid'] = NULL;
$arguments150['pageType'] = 0;
$arguments150['noCache'] = false;
$arguments150['noCacheHash'] = false;
$arguments150['section'] = '';
$arguments150['format'] = '';
$arguments150['linkAccessRestrictedPages'] = false;
$arguments150['additionalParams'] = array (
);
$arguments150['absolute'] = false;
$arguments150['addQueryString'] = false;
$arguments150['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments150['class'] = NULL;
$arguments150['dir'] = NULL;
$arguments150['id'] = NULL;
$arguments150['lang'] = NULL;
$arguments150['style'] = NULL;
$arguments150['title'] = NULL;
$arguments150['accesskey'] = NULL;
$arguments150['tabindex'] = NULL;
$arguments150['onclick'] = NULL;
$arguments150['name'] = NULL;
$arguments150['rel'] = NULL;
$arguments150['rev'] = NULL;
$arguments150['target'] = NULL;
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output156 = '';

$output156 .= '<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments157 = array();
$arguments157['value'] = $currentVariableContainer->getOrNull('pageNumber');
$arguments157['keepQuotes'] = false;
$arguments157['encoding'] = NULL;
$arguments157['doubleEncode'] = true;
$renderChildrenClosure158 = function() {return NULL;};
$value159 = ($arguments157['value'] !== NULL ? $arguments157['value'] : $renderChildrenClosure158());

$output156 .= (!is_string($value159) ? $value159 : htmlspecialchars($value159, ($arguments157['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments157['encoding'] !== NULL ? $arguments157['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments157['doubleEncode']));

$output156 .= '</span>';
return $output156;
};
$viewHelper160 = $self->getViewHelper('$viewHelper160', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper');
$viewHelper160->setArguments($arguments150);
$viewHelper160->setRenderingContext($renderingContext);
$viewHelper160->setRenderChildrenClosure($renderChildrenClosure155);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper

$output149 .= $viewHelper160->initializeArgumentsAndRender();

$output149 .= '</li>
                            ';
return $output149;
};
$arguments126['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output161 = '';

$output161 .= '
                                <li class="number"><span class="fill">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments162 = array();
$arguments162['value'] = $currentVariableContainer->getOrNull('pageNumber');
$arguments162['keepQuotes'] = false;
$arguments162['encoding'] = NULL;
$arguments162['doubleEncode'] = true;
$renderChildrenClosure163 = function() {return NULL;};
$value164 = ($arguments162['value'] !== NULL ? $arguments162['value'] : $renderChildrenClosure163());

$output161 .= (!is_string($value164) ? $value164 : htmlspecialchars($value164, ($arguments162['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments162['encoding'] !== NULL ? $arguments162['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments162['doubleEncode']));

$output161 .= '</span></li>
                            ';
return $output161;
};

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output125 .= '
                    ';
return $output125;
};
$arguments74['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output165 = '';

$output165 .= '
                        <li class="number"><span class="cur">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments166 = array();
$arguments166['value'] = $currentVariableContainer->getOrNull('pageNumber');
$arguments166['keepQuotes'] = false;
$arguments166['encoding'] = NULL;
$arguments166['doubleEncode'] = true;
$renderChildrenClosure167 = function() {return NULL;};
$value168 = ($arguments166['value'] !== NULL ? $arguments166['value'] : $renderChildrenClosure167());

$output165 .= (!is_string($value168) ? $value168 : htmlspecialchars($value168, ($arguments166['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments166['encoding'] !== NULL ? $arguments166['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments166['doubleEncode']));

$output165 .= '</span></li>
                    ';
return $output165;
};

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
            ';
return $output73;
};

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output47 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments169 = array();
// Rendering Boolean node
$arguments169['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('!=', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'currentPage', $renderingContext), \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'lastPage', $renderingContext));
$arguments169['then'] = NULL;
$arguments169['else'] = NULL;
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output171 = '';

$output171 .= '
                <li class="next">';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper
$arguments172 = array();
$arguments172['action'] = $currentVariableContainer->getOrNull('action');
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments173 = array();
$arguments173['object'] = $currentVariableContainer->getOrNull('pagerCollection');
$output174 = '';

$output174 .= 'page:';

$output174 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'nextPage', $renderingContext);
$arguments173['arguments'] = $output174;
$arguments173['nameSpace'] = '';
$renderChildrenClosure175 = function() {return NULL;};
$viewHelper176 = $self->getViewHelper('$viewHelper176', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper176->setArguments($arguments173);
$viewHelper176->setRenderingContext($renderingContext);
$viewHelper176->setRenderChildrenClosure($renderChildrenClosure175);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments172['arguments'] = $viewHelper176->initializeArgumentsAndRender();
$arguments172['additionalAttributes'] = NULL;
$arguments172['data'] = NULL;
$arguments172['controller'] = NULL;
$arguments172['extensionName'] = NULL;
$arguments172['pluginName'] = NULL;
$arguments172['pageUid'] = NULL;
$arguments172['pageType'] = 0;
$arguments172['noCache'] = false;
$arguments172['noCacheHash'] = false;
$arguments172['section'] = '';
$arguments172['format'] = '';
$arguments172['linkAccessRestrictedPages'] = false;
$arguments172['additionalParams'] = array (
);
$arguments172['absolute'] = false;
$arguments172['addQueryString'] = false;
$arguments172['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments172['class'] = NULL;
$arguments172['dir'] = NULL;
$arguments172['id'] = NULL;
$arguments172['lang'] = NULL;
$arguments172['style'] = NULL;
$arguments172['title'] = NULL;
$arguments172['accesskey'] = NULL;
$arguments172['tabindex'] = NULL;
$arguments172['onclick'] = NULL;
$arguments172['name'] = NULL;
$arguments172['rel'] = NULL;
$arguments172['rev'] = NULL;
$arguments172['target'] = NULL;
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '<span>&gt;</span>';
};
$viewHelper178 = $self->getViewHelper('$viewHelper178', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper');
$viewHelper178->setArguments($arguments172);
$viewHelper178->setRenderingContext($renderingContext);
$viewHelper178->setRenderChildrenClosure($renderChildrenClosure177);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper

$output171 .= $viewHelper178->initializeArgumentsAndRender();

$output171 .= '</li>
            ';
return $output171;
};

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output47 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments179 = array();
// Rendering Boolean node
$arguments179['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('!=', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'currentPage', $renderingContext), \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'lastPage', $renderingContext));
$arguments179['then'] = NULL;
$arguments179['else'] = NULL;
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output181 = '';

$output181 .= '
                <li class="last">';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper
$arguments182 = array();
$arguments182['action'] = $currentVariableContainer->getOrNull('action');
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments183 = array();
$arguments183['object'] = $currentVariableContainer->getOrNull('pagerCollection');
$output184 = '';

$output184 .= 'page:';

$output184 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'lastPage', $renderingContext);
$arguments183['arguments'] = $output184;
$arguments183['nameSpace'] = '';
$renderChildrenClosure185 = function() {return NULL;};
$viewHelper186 = $self->getViewHelper('$viewHelper186', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper186->setArguments($arguments183);
$viewHelper186->setRenderingContext($renderingContext);
$viewHelper186->setRenderChildrenClosure($renderChildrenClosure185);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments182['arguments'] = $viewHelper186->initializeArgumentsAndRender();
$arguments182['additionalAttributes'] = NULL;
$arguments182['data'] = NULL;
$arguments182['controller'] = NULL;
$arguments182['extensionName'] = NULL;
$arguments182['pluginName'] = NULL;
$arguments182['pageUid'] = NULL;
$arguments182['pageType'] = 0;
$arguments182['noCache'] = false;
$arguments182['noCacheHash'] = false;
$arguments182['section'] = '';
$arguments182['format'] = '';
$arguments182['linkAccessRestrictedPages'] = false;
$arguments182['additionalParams'] = array (
);
$arguments182['absolute'] = false;
$arguments182['addQueryString'] = false;
$arguments182['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments182['class'] = NULL;
$arguments182['dir'] = NULL;
$arguments182['id'] = NULL;
$arguments182['lang'] = NULL;
$arguments182['style'] = NULL;
$arguments182['title'] = NULL;
$arguments182['accesskey'] = NULL;
$arguments182['tabindex'] = NULL;
$arguments182['onclick'] = NULL;
$arguments182['name'] = NULL;
$arguments182['rel'] = NULL;
$arguments182['rev'] = NULL;
$arguments182['target'] = NULL;
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '<span>&gt;&gt;</span>';
};
$viewHelper188 = $self->getViewHelper('$viewHelper188', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper');
$viewHelper188->setArguments($arguments182);
$viewHelper188->setRenderingContext($renderingContext);
$viewHelper188->setRenderChildrenClosure($renderChildrenClosure187);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper

$output181 .= $viewHelper188->initializeArgumentsAndRender();

$output181 .= '</li>
            ';
return $output181;
};

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output47 .= '
        </ul>
    ';
return $output47;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output6 .= '
    <div class="cleardiv">&nbsp;</div>
';
return $output6;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);


return $output0;
}


}
#1461068249    57058     