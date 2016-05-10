<?php
class FluidCache_Yag_Gallery_partial_EXT_yag_Resources_Private_Templates_Themes_Backend_Gallery_Partials_IndexTabAlbums_html_67acd1e16dc3989e6f370e9deb4e5ca079734e59 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listData'), 'count', $renderingContext));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments4 = array();
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
        <table id="sortable" class="table table-striped table-hover">
            <thead>
            <tr class="t3-row-header" role="row">
                <th colspan="4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments7 = array();
$arguments7['action'] = 'new';
$arguments7['controller'] = 'Album';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments8 = array();
$arguments8['key'] = 'tx_yag_controller_album.addAlbum';
$arguments8['id'] = NULL;
$arguments8['default'] = NULL;
$arguments8['htmlEscape'] = NULL;
$arguments8['arguments'] = NULL;
$arguments8['extensionName'] = NULL;
$renderChildrenClosure9 = function() {return NULL;};
$arguments7['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);
$arguments7['class'] = 'btn btn-default';
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['arguments'] = array (
);
$arguments7['extensionName'] = NULL;
$arguments7['pluginName'] = NULL;
$arguments7['pageUid'] = NULL;
$arguments7['pageType'] = 0;
$arguments7['noCache'] = false;
$arguments7['noCacheHash'] = false;
$arguments7['section'] = '';
$arguments7['format'] = '';
$arguments7['linkAccessRestrictedPages'] = false;
$arguments7['additionalParams'] = array (
);
$arguments7['absolute'] = false;
$arguments7['addQueryString'] = false;
$arguments7['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments7['addQueryStringMethod'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['name'] = NULL;
$arguments7['rel'] = NULL;
$arguments7['rev'] = NULL;
$arguments7['target'] = NULL;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments11 = array();
$arguments11['identifier'] = 'actions-document-new';
$arguments11['size'] = 'small';
$arguments11['overlay'] = NULL;
$arguments11['state'] = 'default';
$arguments11['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure12 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);
};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper13->setArguments($arguments7);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure10);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output6 .= $viewHelper13->initializeArgumentsAndRender();

$output6 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments14 = array();
$arguments14['key'] = 'tx_yag_domain_model_album';
$arguments14['id'] = NULL;
$arguments14['default'] = NULL;
$arguments14['htmlEscape'] = NULL;
$arguments14['arguments'] = NULL;
$arguments14['extensionName'] = NULL;
$renderChildrenClosure15 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output6 .= '
                    (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'itemCount', $renderingContext);
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = NULL;
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() {return NULL;};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());

$output6 .= (!is_string($value18) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments16['encoding'] !== NULL ? $arguments16['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments16['doubleEncode']));

$output6 .= ')
                </th>
            </tr>
            <tr class="c-headLine">
                <td class="yag-col-thumb">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments19 = array();
$arguments19['key'] = 'tx_yag_domain_model_album.thumb';
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['htmlEscape'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$renderChildrenClosure20 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output6 .= '
                </td>
                <td colspan="2">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments21 = array();
$arguments21['key'] = 'tx_yag_domain_model_album.name';
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['htmlEscape'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$renderChildrenClosure22 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output6 .= '
                </td>
            </tr>
            </thead>
            <tbody class="ui-sortable">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments23 = array();
$arguments23['each'] = $currentVariableContainer->getOrNull('listData');
$arguments23['key'] = 'rowIndex';
$arguments23['as'] = 'listRow';
$arguments23['reverse'] = false;
$arguments23['iteration'] = NULL;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output25 = '';

$output25 .= '
                <tr id="albumUid-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments26 = array();
$arguments26['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments26['keepQuotes'] = false;
$arguments26['encoding'] = NULL;
$arguments26['doubleEncode'] = true;
$renderChildrenClosure27 = function() {return NULL;};
$value28 = ($arguments26['value'] !== NULL ? $arguments26['value'] : $renderChildrenClosure27());

$output25 .= (!is_string($value28) ? $value28 : htmlspecialchars($value28, ($arguments26['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments26['encoding'] !== NULL ? $arguments26['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments26['doubleEncode']));

$output25 .= '"
                    class="db_list_normal ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments29 = array();
// Rendering Boolean node
$arguments29['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.isGalleryThumb', $renderingContext));
$arguments29['then'] = ' tx-yag-album-index-album';
$arguments29['else'] = NULL;
$renderChildrenClosure30 = function() {return NULL;};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output25 .= '">
                    <td>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments31 = array();
$arguments31['action'] = 'submitFilter';
$arguments31['controller'] = 'ItemList';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments32 = array();
$arguments32['object'] = $currentVariableContainer->getOrNull('yagContext');
$output33 = '';

$output33 .= 'albumUid:';

$output33 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments32['arguments'] = $output33;
$arguments32['nameSpace'] = '';
$renderChildrenClosure34 = function() {return NULL;};
$viewHelper35 = $self->getViewHelper('$viewHelper35', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper35->setArguments($arguments32);
$viewHelper35->setRenderingContext($renderingContext);
$viewHelper35->setRenderChildrenClosure($renderChildrenClosure34);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments31['arguments'] = $viewHelper35->initializeArgumentsAndRender();
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['extensionName'] = NULL;
$arguments31['pluginName'] = NULL;
$arguments31['pageUid'] = NULL;
$arguments31['pageType'] = 0;
$arguments31['noCache'] = false;
$arguments31['noCacheHash'] = false;
$arguments31['section'] = '';
$arguments31['format'] = '';
$arguments31['linkAccessRestrictedPages'] = false;
$arguments31['additionalParams'] = array (
);
$arguments31['absolute'] = false;
$arguments31['addQueryString'] = false;
$arguments31['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments31['addQueryStringMethod'] = NULL;
$arguments31['class'] = NULL;
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['title'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['tabindex'] = NULL;
$arguments31['onclick'] = NULL;
$arguments31['name'] = NULL;
$arguments31['rel'] = NULL;
$arguments31['rev'] = NULL;
$arguments31['target'] = NULL;
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output37 = '';

$output37 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments38 = array();
// Rendering Boolean node
$arguments38['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.itemCount', $renderingContext), 0);
$arguments38['then'] = NULL;
$arguments38['else'] = NULL;
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output40 = '';

$output40 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments41 = array();
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output43 = '';

$output43 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments44 = array();
// Rendering Boolean node
$arguments44['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.hidden', $renderingContext));
$arguments44['then'] = NULL;
$arguments44['else'] = NULL;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output46 = '';

$output46 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments47 = array();
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output49 = '';

$output49 .= '
                                            <div id="album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments50 = array();
$arguments50['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments50['keepQuotes'] = false;
$arguments50['encoding'] = NULL;
$arguments50['doubleEncode'] = true;
$renderChildrenClosure51 = function() {return NULL;};
$value52 = ($arguments50['value'] !== NULL ? $arguments50['value'] : $renderChildrenClosure51());

$output49 .= (!is_string($value52) ? $value52 : htmlspecialchars($value52, ($arguments50['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments50['encoding'] !== NULL ? $arguments50['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments50['doubleEncode']));

$output49 .= '-transparency"
                                                 class="tx-yag-transparency-half">
                                                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments53 = array();
$arguments53['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.thumb', $renderingContext);
$arguments53['resolutionName'] = 'thumb';
$arguments53['additionalAttributes'] = NULL;
$arguments53['data'] = NULL;
$arguments53['class'] = NULL;
$arguments53['dir'] = NULL;
$arguments53['id'] = NULL;
$arguments53['lang'] = NULL;
$arguments53['style'] = NULL;
$arguments53['title'] = NULL;
$arguments53['accesskey'] = NULL;
$arguments53['tabindex'] = NULL;
$arguments53['onclick'] = NULL;
$arguments53['alt'] = NULL;
$arguments53['centerVertical'] = NULL;
$arguments53['width'] = NULL;
$arguments53['height'] = NULL;
$arguments53['quality'] = 80;
$renderChildrenClosure54 = function() {return NULL;};
$viewHelper55 = $self->getViewHelper('$viewHelper55', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper55->setArguments($arguments53);
$viewHelper55->setRenderingContext($renderingContext);
$viewHelper55->setRenderChildrenClosure($renderChildrenClosure54);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output49 .= $viewHelper55->initializeArgumentsAndRender();

$output49 .= '
                                            </div>
                                        ';
return $output49;
};

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments56 = array();
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output58 = '';

$output58 .= '
                                            <div id="album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments59 = array();
$arguments59['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments59['keepQuotes'] = false;
$arguments59['encoding'] = NULL;
$arguments59['doubleEncode'] = true;
$renderChildrenClosure60 = function() {return NULL;};
$value61 = ($arguments59['value'] !== NULL ? $arguments59['value'] : $renderChildrenClosure60());

$output58 .= (!is_string($value61) ? $value61 : htmlspecialchars($value61, ($arguments59['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments59['encoding'] !== NULL ? $arguments59['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments59['doubleEncode']));

$output58 .= '-transparency">
                                                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments62 = array();
$arguments62['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.thumb', $renderingContext);
$arguments62['resolutionName'] = 'thumb';
$arguments62['additionalAttributes'] = NULL;
$arguments62['data'] = NULL;
$arguments62['class'] = NULL;
$arguments62['dir'] = NULL;
$arguments62['id'] = NULL;
$arguments62['lang'] = NULL;
$arguments62['style'] = NULL;
$arguments62['title'] = NULL;
$arguments62['accesskey'] = NULL;
$arguments62['tabindex'] = NULL;
$arguments62['onclick'] = NULL;
$arguments62['alt'] = NULL;
$arguments62['centerVertical'] = NULL;
$arguments62['width'] = NULL;
$arguments62['height'] = NULL;
$arguments62['quality'] = 80;
$renderChildrenClosure63 = function() {return NULL;};
$viewHelper64 = $self->getViewHelper('$viewHelper64', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper64->setArguments($arguments62);
$viewHelper64->setRenderingContext($renderingContext);
$viewHelper64->setRenderChildrenClosure($renderChildrenClosure63);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output58 .= $viewHelper64->initializeArgumentsAndRender();

$output58 .= '
                                            </div>
                                        ';
return $output58;
};

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output46 .= '
                                    ';
return $output46;
};
$arguments44['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output65 = '';

$output65 .= '
                                            <div id="album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments66 = array();
$arguments66['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments66['keepQuotes'] = false;
$arguments66['encoding'] = NULL;
$arguments66['doubleEncode'] = true;
$renderChildrenClosure67 = function() {return NULL;};
$value68 = ($arguments66['value'] !== NULL ? $arguments66['value'] : $renderChildrenClosure67());

$output65 .= (!is_string($value68) ? $value68 : htmlspecialchars($value68, ($arguments66['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments66['encoding'] !== NULL ? $arguments66['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments66['doubleEncode']));

$output65 .= '-transparency"
                                                 class="tx-yag-transparency-half">
                                                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments69 = array();
$arguments69['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.thumb', $renderingContext);
$arguments69['resolutionName'] = 'thumb';
$arguments69['additionalAttributes'] = NULL;
$arguments69['data'] = NULL;
$arguments69['class'] = NULL;
$arguments69['dir'] = NULL;
$arguments69['id'] = NULL;
$arguments69['lang'] = NULL;
$arguments69['style'] = NULL;
$arguments69['title'] = NULL;
$arguments69['accesskey'] = NULL;
$arguments69['tabindex'] = NULL;
$arguments69['onclick'] = NULL;
$arguments69['alt'] = NULL;
$arguments69['centerVertical'] = NULL;
$arguments69['width'] = NULL;
$arguments69['height'] = NULL;
$arguments69['quality'] = 80;
$renderChildrenClosure70 = function() {return NULL;};
$viewHelper71 = $self->getViewHelper('$viewHelper71', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper71->setArguments($arguments69);
$viewHelper71->setRenderingContext($renderingContext);
$viewHelper71->setRenderChildrenClosure($renderChildrenClosure70);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output65 .= $viewHelper71->initializeArgumentsAndRender();

$output65 .= '
                                            </div>
                                        ';
return $output65;
};
$arguments44['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output72 = '';

$output72 .= '
                                            <div id="album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments73 = array();
$arguments73['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments73['keepQuotes'] = false;
$arguments73['encoding'] = NULL;
$arguments73['doubleEncode'] = true;
$renderChildrenClosure74 = function() {return NULL;};
$value75 = ($arguments73['value'] !== NULL ? $arguments73['value'] : $renderChildrenClosure74());

$output72 .= (!is_string($value75) ? $value75 : htmlspecialchars($value75, ($arguments73['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments73['encoding'] !== NULL ? $arguments73['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments73['doubleEncode']));

$output72 .= '-transparency">
                                                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments76 = array();
$arguments76['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.thumb', $renderingContext);
$arguments76['resolutionName'] = 'thumb';
$arguments76['additionalAttributes'] = NULL;
$arguments76['data'] = NULL;
$arguments76['class'] = NULL;
$arguments76['dir'] = NULL;
$arguments76['id'] = NULL;
$arguments76['lang'] = NULL;
$arguments76['style'] = NULL;
$arguments76['title'] = NULL;
$arguments76['accesskey'] = NULL;
$arguments76['tabindex'] = NULL;
$arguments76['onclick'] = NULL;
$arguments76['alt'] = NULL;
$arguments76['centerVertical'] = NULL;
$arguments76['width'] = NULL;
$arguments76['height'] = NULL;
$arguments76['quality'] = 80;
$renderChildrenClosure77 = function() {return NULL;};
$viewHelper78 = $self->getViewHelper('$viewHelper78', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper78->setArguments($arguments76);
$viewHelper78->setRenderingContext($renderingContext);
$viewHelper78->setRenderChildrenClosure($renderChildrenClosure77);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output72 .= $viewHelper78->initializeArgumentsAndRender();

$output72 .= '
                                            </div>
                                        ';
return $output72;
};

$output43 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output43 .= '
                                ';
return $output43;
};

$output40 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments79 = array();
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output81 = '';

$output81 .= '
                                    <div>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments82 = array();
$arguments82['key'] = 'tx_yag_domain_model_album.noItem';
$arguments82['id'] = NULL;
$arguments82['default'] = NULL;
$arguments82['htmlEscape'] = NULL;
$arguments82['arguments'] = NULL;
$arguments82['extensionName'] = NULL;
$renderChildrenClosure83 = function() {return NULL;};

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
                                    </div>
                                ';
return $output81;
};

$output40 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output40 .= '
                            ';
return $output40;
};
$arguments38['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output84 = '';

$output84 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments85 = array();
// Rendering Boolean node
$arguments85['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.hidden', $renderingContext));
$arguments85['then'] = NULL;
$arguments85['else'] = NULL;
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output87 = '';

$output87 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments88 = array();
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output90 = '';

$output90 .= '
                                            <div id="album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments91 = array();
$arguments91['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments91['keepQuotes'] = false;
$arguments91['encoding'] = NULL;
$arguments91['doubleEncode'] = true;
$renderChildrenClosure92 = function() {return NULL;};
$value93 = ($arguments91['value'] !== NULL ? $arguments91['value'] : $renderChildrenClosure92());

$output90 .= (!is_string($value93) ? $value93 : htmlspecialchars($value93, ($arguments91['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments91['encoding'] !== NULL ? $arguments91['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments91['doubleEncode']));

$output90 .= '-transparency"
                                                 class="tx-yag-transparency-half">
                                                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments94 = array();
$arguments94['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.thumb', $renderingContext);
$arguments94['resolutionName'] = 'thumb';
$arguments94['additionalAttributes'] = NULL;
$arguments94['data'] = NULL;
$arguments94['class'] = NULL;
$arguments94['dir'] = NULL;
$arguments94['id'] = NULL;
$arguments94['lang'] = NULL;
$arguments94['style'] = NULL;
$arguments94['title'] = NULL;
$arguments94['accesskey'] = NULL;
$arguments94['tabindex'] = NULL;
$arguments94['onclick'] = NULL;
$arguments94['alt'] = NULL;
$arguments94['centerVertical'] = NULL;
$arguments94['width'] = NULL;
$arguments94['height'] = NULL;
$arguments94['quality'] = 80;
$renderChildrenClosure95 = function() {return NULL;};
$viewHelper96 = $self->getViewHelper('$viewHelper96', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper96->setArguments($arguments94);
$viewHelper96->setRenderingContext($renderingContext);
$viewHelper96->setRenderChildrenClosure($renderChildrenClosure95);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output90 .= $viewHelper96->initializeArgumentsAndRender();

$output90 .= '
                                            </div>
                                        ';
return $output90;
};

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments97 = array();
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output99 = '';

$output99 .= '
                                            <div id="album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments100 = array();
$arguments100['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments100['keepQuotes'] = false;
$arguments100['encoding'] = NULL;
$arguments100['doubleEncode'] = true;
$renderChildrenClosure101 = function() {return NULL;};
$value102 = ($arguments100['value'] !== NULL ? $arguments100['value'] : $renderChildrenClosure101());

$output99 .= (!is_string($value102) ? $value102 : htmlspecialchars($value102, ($arguments100['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments100['encoding'] !== NULL ? $arguments100['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments100['doubleEncode']));

$output99 .= '-transparency">
                                                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments103 = array();
$arguments103['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.thumb', $renderingContext);
$arguments103['resolutionName'] = 'thumb';
$arguments103['additionalAttributes'] = NULL;
$arguments103['data'] = NULL;
$arguments103['class'] = NULL;
$arguments103['dir'] = NULL;
$arguments103['id'] = NULL;
$arguments103['lang'] = NULL;
$arguments103['style'] = NULL;
$arguments103['title'] = NULL;
$arguments103['accesskey'] = NULL;
$arguments103['tabindex'] = NULL;
$arguments103['onclick'] = NULL;
$arguments103['alt'] = NULL;
$arguments103['centerVertical'] = NULL;
$arguments103['width'] = NULL;
$arguments103['height'] = NULL;
$arguments103['quality'] = 80;
$renderChildrenClosure104 = function() {return NULL;};
$viewHelper105 = $self->getViewHelper('$viewHelper105', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper105->setArguments($arguments103);
$viewHelper105->setRenderingContext($renderingContext);
$viewHelper105->setRenderChildrenClosure($renderChildrenClosure104);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output99 .= $viewHelper105->initializeArgumentsAndRender();

$output99 .= '
                                            </div>
                                        ';
return $output99;
};

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output87 .= '
                                    ';
return $output87;
};
$arguments85['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output106 = '';

$output106 .= '
                                            <div id="album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments107 = array();
$arguments107['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments107['keepQuotes'] = false;
$arguments107['encoding'] = NULL;
$arguments107['doubleEncode'] = true;
$renderChildrenClosure108 = function() {return NULL;};
$value109 = ($arguments107['value'] !== NULL ? $arguments107['value'] : $renderChildrenClosure108());

$output106 .= (!is_string($value109) ? $value109 : htmlspecialchars($value109, ($arguments107['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments107['encoding'] !== NULL ? $arguments107['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments107['doubleEncode']));

$output106 .= '-transparency"
                                                 class="tx-yag-transparency-half">
                                                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments110 = array();
$arguments110['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.thumb', $renderingContext);
$arguments110['resolutionName'] = 'thumb';
$arguments110['additionalAttributes'] = NULL;
$arguments110['data'] = NULL;
$arguments110['class'] = NULL;
$arguments110['dir'] = NULL;
$arguments110['id'] = NULL;
$arguments110['lang'] = NULL;
$arguments110['style'] = NULL;
$arguments110['title'] = NULL;
$arguments110['accesskey'] = NULL;
$arguments110['tabindex'] = NULL;
$arguments110['onclick'] = NULL;
$arguments110['alt'] = NULL;
$arguments110['centerVertical'] = NULL;
$arguments110['width'] = NULL;
$arguments110['height'] = NULL;
$arguments110['quality'] = 80;
$renderChildrenClosure111 = function() {return NULL;};
$viewHelper112 = $self->getViewHelper('$viewHelper112', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper112->setArguments($arguments110);
$viewHelper112->setRenderingContext($renderingContext);
$viewHelper112->setRenderChildrenClosure($renderChildrenClosure111);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output106 .= $viewHelper112->initializeArgumentsAndRender();

$output106 .= '
                                            </div>
                                        ';
return $output106;
};
$arguments85['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output113 = '';

$output113 .= '
                                            <div id="album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments114 = array();
$arguments114['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments114['keepQuotes'] = false;
$arguments114['encoding'] = NULL;
$arguments114['doubleEncode'] = true;
$renderChildrenClosure115 = function() {return NULL;};
$value116 = ($arguments114['value'] !== NULL ? $arguments114['value'] : $renderChildrenClosure115());

$output113 .= (!is_string($value116) ? $value116 : htmlspecialchars($value116, ($arguments114['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments114['encoding'] !== NULL ? $arguments114['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments114['doubleEncode']));

$output113 .= '-transparency">
                                                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments117 = array();
$arguments117['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.thumb', $renderingContext);
$arguments117['resolutionName'] = 'thumb';
$arguments117['additionalAttributes'] = NULL;
$arguments117['data'] = NULL;
$arguments117['class'] = NULL;
$arguments117['dir'] = NULL;
$arguments117['id'] = NULL;
$arguments117['lang'] = NULL;
$arguments117['style'] = NULL;
$arguments117['title'] = NULL;
$arguments117['accesskey'] = NULL;
$arguments117['tabindex'] = NULL;
$arguments117['onclick'] = NULL;
$arguments117['alt'] = NULL;
$arguments117['centerVertical'] = NULL;
$arguments117['width'] = NULL;
$arguments117['height'] = NULL;
$arguments117['quality'] = 80;
$renderChildrenClosure118 = function() {return NULL;};
$viewHelper119 = $self->getViewHelper('$viewHelper119', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper119->setArguments($arguments117);
$viewHelper119->setRenderingContext($renderingContext);
$viewHelper119->setRenderChildrenClosure($renderChildrenClosure118);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output113 .= $viewHelper119->initializeArgumentsAndRender();

$output113 .= '
                                            </div>
                                        ';
return $output113;
};

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
                                ';
return $output84;
};
$arguments38['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output120 = '';

$output120 .= '
                                    <div>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments121 = array();
$arguments121['key'] = 'tx_yag_domain_model_album.noItem';
$arguments121['id'] = NULL;
$arguments121['default'] = NULL;
$arguments121['htmlEscape'] = NULL;
$arguments121['arguments'] = NULL;
$arguments121['extensionName'] = NULL;
$renderChildrenClosure122 = function() {return NULL;};

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output120 .= '
                                    </div>
                                ';
return $output120;
};

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '
                        ';
return $output37;
};
$viewHelper123 = $self->getViewHelper('$viewHelper123', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper123->setArguments($arguments31);
$viewHelper123->setRenderingContext($renderingContext);
$viewHelper123->setRenderChildrenClosure($renderChildrenClosure36);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output25 .= $viewHelper123->initializeArgumentsAndRender();

$output25 .= '
                    </td>
                    <td class="yag-col-title">
                        <div>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments124 = array();
$arguments124['action'] = 'submitFilter';
$arguments124['controller'] = 'ItemList';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments125 = array();
$arguments125['object'] = $currentVariableContainer->getOrNull('yagContext');
$output126 = '';

$output126 .= 'albumUid:';

$output126 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments125['arguments'] = $output126;
$arguments125['nameSpace'] = '';
$renderChildrenClosure127 = function() {return NULL;};
$viewHelper128 = $self->getViewHelper('$viewHelper128', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper128->setArguments($arguments125);
$viewHelper128->setRenderingContext($renderingContext);
$viewHelper128->setRenderChildrenClosure($renderChildrenClosure127);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments124['arguments'] = $viewHelper128->initializeArgumentsAndRender();
$arguments124['additionalAttributes'] = NULL;
$arguments124['data'] = NULL;
$arguments124['extensionName'] = NULL;
$arguments124['pluginName'] = NULL;
$arguments124['pageUid'] = NULL;
$arguments124['pageType'] = 0;
$arguments124['noCache'] = false;
$arguments124['noCacheHash'] = false;
$arguments124['section'] = '';
$arguments124['format'] = '';
$arguments124['linkAccessRestrictedPages'] = false;
$arguments124['additionalParams'] = array (
);
$arguments124['absolute'] = false;
$arguments124['addQueryString'] = false;
$arguments124['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments124['addQueryStringMethod'] = NULL;
$arguments124['class'] = NULL;
$arguments124['dir'] = NULL;
$arguments124['id'] = NULL;
$arguments124['lang'] = NULL;
$arguments124['style'] = NULL;
$arguments124['title'] = NULL;
$arguments124['accesskey'] = NULL;
$arguments124['tabindex'] = NULL;
$arguments124['onclick'] = NULL;
$arguments124['name'] = NULL;
$arguments124['rel'] = NULL;
$arguments124['rev'] = NULL;
$arguments124['target'] = NULL;
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output130 = '';

$output130 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments131 = array();
$arguments131['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.name', $renderingContext);
$arguments131['keepQuotes'] = false;
$arguments131['encoding'] = NULL;
$arguments131['doubleEncode'] = true;
$renderChildrenClosure132 = function() {return NULL;};
$value133 = ($arguments131['value'] !== NULL ? $arguments131['value'] : $renderChildrenClosure132());

$output130 .= (!is_string($value133) ? $value133 : htmlspecialchars($value133, ($arguments131['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments131['encoding'] !== NULL ? $arguments131['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments131['doubleEncode']));

$output130 .= '
                            ';
return $output130;
};
$viewHelper134 = $self->getViewHelper('$viewHelper134', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper134->setArguments($arguments124);
$viewHelper134->setRenderingContext($renderingContext);
$viewHelper134->setRenderChildrenClosure($renderChildrenClosure129);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output25 .= $viewHelper134->initializeArgumentsAndRender();

$output25 .= '
                            <br/>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments135 = array();
$arguments135['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.itemCount', $renderingContext);
$arguments135['keepQuotes'] = false;
$arguments135['encoding'] = NULL;
$arguments135['doubleEncode'] = true;
$renderChildrenClosure136 = function() {return NULL;};
$value137 = ($arguments135['value'] !== NULL ? $arguments135['value'] : $renderChildrenClosure136());

$output25 .= (!is_string($value137) ? $value137 : htmlspecialchars($value137, ($arguments135['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments135['encoding'] !== NULL ? $arguments135['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments135['doubleEncode']));

$output25 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments138 = array();
// Rendering Boolean node
// Rendering Array
$array139 = array();
$array139['1'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.itemCount', $renderingContext);
// Rendering Array
$array140 = array();
$array140['1'] = 1;
$arguments138['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array139, $array140);
$arguments138['then'] = NULL;
$arguments138['else'] = NULL;
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output142 = '';

$output142 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments143 = array();
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output145 = '';

$output145 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments146 = array();
$arguments146['key'] = 'tx_yag_general.image';
$arguments146['id'] = NULL;
$arguments146['default'] = NULL;
$arguments146['htmlEscape'] = NULL;
$arguments146['arguments'] = NULL;
$arguments146['extensionName'] = NULL;
$renderChildrenClosure147 = function() {return NULL;};

$output145 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output145 .= '
                                ';
return $output145;
};

$output142 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output142 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments148 = array();
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output150 = '';

$output150 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments151 = array();
$arguments151['key'] = 'tx_yag_general.images';
$arguments151['id'] = NULL;
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

$output142 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output142 .= '
                            ';
return $output142;
};
$arguments138['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output153 = '';

$output153 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments154 = array();
$arguments154['key'] = 'tx_yag_general.image';
$arguments154['id'] = NULL;
$arguments154['default'] = NULL;
$arguments154['htmlEscape'] = NULL;
$arguments154['arguments'] = NULL;
$arguments154['extensionName'] = NULL;
$renderChildrenClosure155 = function() {return NULL;};

$output153 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output153 .= '
                                ';
return $output153;
};
$arguments138['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output156 = '';

$output156 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments157 = array();
$arguments157['key'] = 'tx_yag_general.images';
$arguments157['id'] = NULL;
$arguments157['default'] = NULL;
$arguments157['htmlEscape'] = NULL;
$arguments157['arguments'] = NULL;
$arguments157['extensionName'] = NULL;
$renderChildrenClosure158 = function() {return NULL;};

$output156 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output156 .= '
                                ';
return $output156;
};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments138, $renderChildrenClosure141, $renderingContext);

$output25 .= '
                        </div>
                    </td>
                    <td class="actions icons">
                        <div class="btn-group">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments159 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments160 = array();
$arguments160['key'] = 'tx_yag_controller_album.edit';
$arguments160['id'] = NULL;
$arguments160['default'] = NULL;
$arguments160['htmlEscape'] = NULL;
$arguments160['arguments'] = NULL;
$arguments160['extensionName'] = NULL;
$renderChildrenClosure161 = function() {return NULL;};
$arguments159['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);
$arguments159['controller'] = 'ItemList';
$arguments159['action'] = 'submitFilter';
$arguments159['section'] = 'tabs-3';
$arguments159['class'] = 'btn';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments162 = array();
$arguments162['object'] = $currentVariableContainer->getOrNull('yagContext');
$output163 = '';

$output163 .= 'albumUid:';

$output163 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments162['arguments'] = $output163;
$arguments162['nameSpace'] = '';
$renderChildrenClosure164 = function() {return NULL;};
$viewHelper165 = $self->getViewHelper('$viewHelper165', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper165->setArguments($arguments162);
$viewHelper165->setRenderingContext($renderingContext);
$viewHelper165->setRenderChildrenClosure($renderChildrenClosure164);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments159['arguments'] = $viewHelper165->initializeArgumentsAndRender();
$arguments159['additionalAttributes'] = NULL;
$arguments159['data'] = NULL;
$arguments159['extensionName'] = NULL;
$arguments159['pluginName'] = NULL;
$arguments159['pageUid'] = NULL;
$arguments159['pageType'] = 0;
$arguments159['noCache'] = false;
$arguments159['noCacheHash'] = false;
$arguments159['format'] = '';
$arguments159['linkAccessRestrictedPages'] = false;
$arguments159['additionalParams'] = array (
);
$arguments159['absolute'] = false;
$arguments159['addQueryString'] = false;
$arguments159['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments159['addQueryStringMethod'] = NULL;
$arguments159['dir'] = NULL;
$arguments159['id'] = NULL;
$arguments159['lang'] = NULL;
$arguments159['style'] = NULL;
$arguments159['accesskey'] = NULL;
$arguments159['tabindex'] = NULL;
$arguments159['onclick'] = NULL;
$arguments159['name'] = NULL;
$arguments159['rel'] = NULL;
$arguments159['rev'] = NULL;
$arguments159['target'] = NULL;
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output167 = '';

$output167 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments168 = array();
$arguments168['identifier'] = 'actions-document-open';
$arguments168['size'] = 'small';
$arguments168['overlay'] = NULL;
$arguments168['state'] = 'default';
$arguments168['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure169 = function() {return NULL;};

$output167 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output167 .= '
                            ';
return $output167;
};
$viewHelper170 = $self->getViewHelper('$viewHelper170', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper170->setArguments($arguments159);
$viewHelper170->setRenderingContext($renderingContext);
$viewHelper170->setRenderChildrenClosure($renderChildrenClosure166);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output25 .= $viewHelper170->initializeArgumentsAndRender();

$output25 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments171 = array();
// Rendering Boolean node
$arguments171['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.hidden', $renderingContext));
$arguments171['then'] = NULL;
$arguments171['else'] = NULL;
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output173 = '';

$output173 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments174 = array();
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output176 = '';

$output176 .= '
                                    <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments177 = array();
$arguments177['key'] = 'tx_yag_domain_model_album.unhide';
$arguments177['id'] = NULL;
$arguments177['default'] = NULL;
$arguments177['htmlEscape'] = NULL;
$arguments177['arguments'] = NULL;
$arguments177['extensionName'] = NULL;
$renderChildrenClosure178 = function() {return NULL;};

$output176 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output176 .= '"
                                       id="unhide-album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments179 = array();
$arguments179['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments179['keepQuotes'] = false;
$arguments179['encoding'] = NULL;
$arguments179['doubleEncode'] = true;
$renderChildrenClosure180 = function() {return NULL;};
$value181 = ($arguments179['value'] !== NULL ? $arguments179['value'] : $renderChildrenClosure180());

$output176 .= (!is_string($value181) ? $value181 : htmlspecialchars($value181, ($arguments179['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments179['encoding'] !== NULL ? $arguments179['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments179['doubleEncode']));

$output176 .= '" class="unhide-album btn"
                                       albumUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments182 = array();
$arguments182['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments182['keepQuotes'] = false;
$arguments182['encoding'] = NULL;
$arguments182['doubleEncode'] = true;
$renderChildrenClosure183 = function() {return NULL;};
$value184 = ($arguments182['value'] !== NULL ? $arguments182['value'] : $renderChildrenClosure183());

$output176 .= (!is_string($value184) ? $value184 : htmlspecialchars($value184, ($arguments182['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments182['encoding'] !== NULL ? $arguments182['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments182['doubleEncode']));

$output176 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments185 = array();
$arguments185['identifier'] = 'actions-edit-unhide';
$arguments185['size'] = 'small';
$arguments185['overlay'] = NULL;
$arguments185['state'] = 'default';
$arguments185['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure186 = function() {return NULL;};

$output176 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output176 .= '
                                    </a>
                                ';
return $output176;
};

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output173 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments187 = array();
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output189 = '';

$output189 .= '
                                    <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments190 = array();
$arguments190['key'] = 'tx_yag_domain_model_album.hide';
$arguments190['id'] = NULL;
$arguments190['default'] = NULL;
$arguments190['htmlEscape'] = NULL;
$arguments190['arguments'] = NULL;
$arguments190['extensionName'] = NULL;
$renderChildrenClosure191 = function() {return NULL;};

$output189 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output189 .= '"
                                       id="hide-album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments192 = array();
$arguments192['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments192['keepQuotes'] = false;
$arguments192['encoding'] = NULL;
$arguments192['doubleEncode'] = true;
$renderChildrenClosure193 = function() {return NULL;};
$value194 = ($arguments192['value'] !== NULL ? $arguments192['value'] : $renderChildrenClosure193());

$output189 .= (!is_string($value194) ? $value194 : htmlspecialchars($value194, ($arguments192['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments192['encoding'] !== NULL ? $arguments192['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments192['doubleEncode']));

$output189 .= '" class="hide-album btn"
                                       albumUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments195 = array();
$arguments195['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments195['keepQuotes'] = false;
$arguments195['encoding'] = NULL;
$arguments195['doubleEncode'] = true;
$renderChildrenClosure196 = function() {return NULL;};
$value197 = ($arguments195['value'] !== NULL ? $arguments195['value'] : $renderChildrenClosure196());

$output189 .= (!is_string($value197) ? $value197 : htmlspecialchars($value197, ($arguments195['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments195['encoding'] !== NULL ? $arguments195['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments195['doubleEncode']));

$output189 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments198 = array();
$arguments198['identifier'] = 'actions-edit-hide';
$arguments198['size'] = 'small';
$arguments198['overlay'] = NULL;
$arguments198['state'] = 'default';
$arguments198['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure199 = function() {return NULL;};

$output189 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output189 .= '
                                    </a>
                                ';
return $output189;
};

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output173 .= '
                            ';
return $output173;
};
$arguments171['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output200 = '';

$output200 .= '
                                    <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments201 = array();
$arguments201['key'] = 'tx_yag_domain_model_album.unhide';
$arguments201['id'] = NULL;
$arguments201['default'] = NULL;
$arguments201['htmlEscape'] = NULL;
$arguments201['arguments'] = NULL;
$arguments201['extensionName'] = NULL;
$renderChildrenClosure202 = function() {return NULL;};

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output200 .= '"
                                       id="unhide-album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments203 = array();
$arguments203['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments203['keepQuotes'] = false;
$arguments203['encoding'] = NULL;
$arguments203['doubleEncode'] = true;
$renderChildrenClosure204 = function() {return NULL;};
$value205 = ($arguments203['value'] !== NULL ? $arguments203['value'] : $renderChildrenClosure204());

$output200 .= (!is_string($value205) ? $value205 : htmlspecialchars($value205, ($arguments203['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments203['encoding'] !== NULL ? $arguments203['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments203['doubleEncode']));

$output200 .= '" class="unhide-album btn"
                                       albumUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments206 = array();
$arguments206['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments206['keepQuotes'] = false;
$arguments206['encoding'] = NULL;
$arguments206['doubleEncode'] = true;
$renderChildrenClosure207 = function() {return NULL;};
$value208 = ($arguments206['value'] !== NULL ? $arguments206['value'] : $renderChildrenClosure207());

$output200 .= (!is_string($value208) ? $value208 : htmlspecialchars($value208, ($arguments206['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments206['encoding'] !== NULL ? $arguments206['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments206['doubleEncode']));

$output200 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments209 = array();
$arguments209['identifier'] = 'actions-edit-unhide';
$arguments209['size'] = 'small';
$arguments209['overlay'] = NULL;
$arguments209['state'] = 'default';
$arguments209['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure210 = function() {return NULL;};

$output200 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

$output200 .= '
                                    </a>
                                ';
return $output200;
};
$arguments171['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output211 = '';

$output211 .= '
                                    <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments212 = array();
$arguments212['key'] = 'tx_yag_domain_model_album.hide';
$arguments212['id'] = NULL;
$arguments212['default'] = NULL;
$arguments212['htmlEscape'] = NULL;
$arguments212['arguments'] = NULL;
$arguments212['extensionName'] = NULL;
$renderChildrenClosure213 = function() {return NULL;};

$output211 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output211 .= '"
                                       id="hide-album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments214 = array();
$arguments214['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments214['keepQuotes'] = false;
$arguments214['encoding'] = NULL;
$arguments214['doubleEncode'] = true;
$renderChildrenClosure215 = function() {return NULL;};
$value216 = ($arguments214['value'] !== NULL ? $arguments214['value'] : $renderChildrenClosure215());

$output211 .= (!is_string($value216) ? $value216 : htmlspecialchars($value216, ($arguments214['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments214['encoding'] !== NULL ? $arguments214['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments214['doubleEncode']));

$output211 .= '" class="hide-album btn"
                                       albumUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments217 = array();
$arguments217['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments217['keepQuotes'] = false;
$arguments217['encoding'] = NULL;
$arguments217['doubleEncode'] = true;
$renderChildrenClosure218 = function() {return NULL;};
$value219 = ($arguments217['value'] !== NULL ? $arguments217['value'] : $renderChildrenClosure218());

$output211 .= (!is_string($value219) ? $value219 : htmlspecialchars($value219, ($arguments217['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments217['encoding'] !== NULL ? $arguments217['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments217['doubleEncode']));

$output211 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments220 = array();
$arguments220['identifier'] = 'actions-edit-hide';
$arguments220['size'] = 'small';
$arguments220['overlay'] = NULL;
$arguments220['state'] = 'default';
$arguments220['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure221 = function() {return NULL;};

$output211 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output211 .= '
                                    </a>
                                ';
return $output211;
};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output25 .= '
                            <a href="" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments222 = array();
$arguments222['key'] = 'tx_yag_domain_model_album.deleteAlbum';
$arguments222['id'] = NULL;
$arguments222['default'] = NULL;
$arguments222['htmlEscape'] = NULL;
$arguments222['arguments'] = NULL;
$arguments222['extensionName'] = NULL;
$renderChildrenClosure223 = function() {return NULL;};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output25 .= '"
                               albumUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments224 = array();
$arguments224['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments224['keepQuotes'] = false;
$arguments224['encoding'] = NULL;
$arguments224['doubleEncode'] = true;
$renderChildrenClosure225 = function() {return NULL;};
$value226 = ($arguments224['value'] !== NULL ? $arguments224['value'] : $renderChildrenClosure225());

$output25 .= (!is_string($value226) ? $value226 : htmlspecialchars($value226, ($arguments224['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments224['encoding'] !== NULL ? $arguments224['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments224['doubleEncode']));

$output25 .= '" class="album-linkbar-delete btn">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments227 = array();
$arguments227['identifier'] = 'actions-edit-delete';
$arguments227['size'] = 'small';
$arguments227['overlay'] = NULL;
$arguments227['state'] = 'default';
$arguments227['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure228 = function() {return NULL;};

$output25 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output25 .= '
                            </a>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments229 = array();
$arguments229['controller'] = 'Album';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments230 = array();
$arguments230['key'] = 'tx_yag_controller_album_addItems';
$arguments230['id'] = NULL;
$arguments230['default'] = NULL;
$arguments230['htmlEscape'] = NULL;
$arguments230['arguments'] = NULL;
$arguments230['extensionName'] = NULL;
$renderChildrenClosure231 = function() {return NULL;};
$arguments229['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);
$arguments229['action'] = 'addItems';
// Rendering Array
$array232 = array();
$array232['album'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value', $renderingContext);
$arguments229['arguments'] = $array232;
$arguments229['class'] = 'btn';
$arguments229['additionalAttributes'] = NULL;
$arguments229['data'] = NULL;
$arguments229['extensionName'] = NULL;
$arguments229['pluginName'] = NULL;
$arguments229['pageUid'] = NULL;
$arguments229['pageType'] = 0;
$arguments229['noCache'] = false;
$arguments229['noCacheHash'] = false;
$arguments229['section'] = '';
$arguments229['format'] = '';
$arguments229['linkAccessRestrictedPages'] = false;
$arguments229['additionalParams'] = array (
);
$arguments229['absolute'] = false;
$arguments229['addQueryString'] = false;
$arguments229['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments229['addQueryStringMethod'] = NULL;
$arguments229['dir'] = NULL;
$arguments229['id'] = NULL;
$arguments229['lang'] = NULL;
$arguments229['style'] = NULL;
$arguments229['accesskey'] = NULL;
$arguments229['tabindex'] = NULL;
$arguments229['onclick'] = NULL;
$arguments229['name'] = NULL;
$arguments229['rel'] = NULL;
$arguments229['rev'] = NULL;
$arguments229['target'] = NULL;
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output234 = '';

$output234 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments235 = array();
$arguments235['identifier'] = 'actions-edit-upload';
$arguments235['size'] = 'small';
$arguments235['overlay'] = NULL;
$arguments235['state'] = 'default';
$arguments235['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure236 = function() {return NULL;};

$output234 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output234 .= '
                            ';
return $output234;
};
$viewHelper237 = $self->getViewHelper('$viewHelper237', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper237->setArguments($arguments229);
$viewHelper237->setRenderingContext($renderingContext);
$viewHelper237->setRenderChildrenClosure($renderChildrenClosure233);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output25 .= $viewHelper237->initializeArgumentsAndRender();

$output25 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments238 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments239 = array();
$arguments239['key'] = 'tx_yag_controller_album.dragNdrop';
$arguments239['id'] = NULL;
$arguments239['default'] = NULL;
$arguments239['htmlEscape'] = NULL;
$arguments239['arguments'] = NULL;
$arguments239['extensionName'] = NULL;
$renderChildrenClosure240 = function() {return NULL;};
$arguments238['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);
$arguments238['action'] = 'submitFilter';
$arguments238['controller'] = 'ItemList';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments241 = array();
$arguments241['object'] = $currentVariableContainer->getOrNull('yagContext');
$output242 = '';

$output242 .= 'albumUid:';

$output242 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments241['arguments'] = $output242;
$arguments241['nameSpace'] = '';
$renderChildrenClosure243 = function() {return NULL;};
$viewHelper244 = $self->getViewHelper('$viewHelper244', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper244->setArguments($arguments241);
$viewHelper244->setRenderingContext($renderingContext);
$viewHelper244->setRenderChildrenClosure($renderChildrenClosure243);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments238['arguments'] = $viewHelper244->initializeArgumentsAndRender();
$arguments238['class'] = 'btn';
$arguments238['additionalAttributes'] = NULL;
$arguments238['data'] = NULL;
$arguments238['extensionName'] = NULL;
$arguments238['pluginName'] = NULL;
$arguments238['pageUid'] = NULL;
$arguments238['pageType'] = 0;
$arguments238['noCache'] = false;
$arguments238['noCacheHash'] = false;
$arguments238['section'] = '';
$arguments238['format'] = '';
$arguments238['linkAccessRestrictedPages'] = false;
$arguments238['additionalParams'] = array (
);
$arguments238['absolute'] = false;
$arguments238['addQueryString'] = false;
$arguments238['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments238['addQueryStringMethod'] = NULL;
$arguments238['dir'] = NULL;
$arguments238['id'] = NULL;
$arguments238['lang'] = NULL;
$arguments238['style'] = NULL;
$arguments238['accesskey'] = NULL;
$arguments238['tabindex'] = NULL;
$arguments238['onclick'] = NULL;
$arguments238['name'] = NULL;
$arguments238['rel'] = NULL;
$arguments238['rev'] = NULL;
$arguments238['target'] = NULL;
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output246 = '';

$output246 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments247 = array();
$arguments247['identifier'] = 'actions-document-move';
$arguments247['size'] = 'small';
$arguments247['overlay'] = NULL;
$arguments247['state'] = 'default';
$arguments247['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure248 = function() {return NULL;};

$output246 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output246 .= '
                            ';
return $output246;
};
$viewHelper249 = $self->getViewHelper('$viewHelper249', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper249->setArguments($arguments238);
$viewHelper249->setRenderingContext($renderingContext);
$viewHelper249->setRenderChildrenClosure($renderChildrenClosure245);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output25 .= $viewHelper249->initializeArgumentsAndRender();

$output25 .= '
                            <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments250 = array();
$arguments250['key'] = 'tx_yag_controller_album.setAlbumAsGalleryThumb';
$arguments250['id'] = NULL;
$arguments250['default'] = NULL;
$arguments250['htmlEscape'] = NULL;
$arguments250['arguments'] = NULL;
$arguments250['extensionName'] = NULL;
$renderChildrenClosure251 = function() {return NULL;};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output25 .= '"
                               class="set-as-gallery-thumb btn" albumUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments252 = array();
$arguments252['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments252['keepQuotes'] = false;
$arguments252['encoding'] = NULL;
$arguments252['doubleEncode'] = true;
$renderChildrenClosure253 = function() {return NULL;};
$value254 = ($arguments252['value'] !== NULL ? $arguments252['value'] : $renderChildrenClosure253());

$output25 .= (!is_string($value254) ? $value254 : htmlspecialchars($value254, ($arguments252['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments252['encoding'] !== NULL ? $arguments252['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments252['doubleEncode']));

$output25 .= '">
                                <span class="t3-icon t3-icon-apps t3-icon-apps-toolbar t3-icon-toolbar-menu-shortcut">&nbsp;</span>
                            </a>
                        </div>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments255 = array();
// Rendering Boolean node
$arguments255['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.description', $renderingContext));
$arguments255['then'] = NULL;
$arguments255['else'] = NULL;
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output257 = '';

$output257 .= '
                            <div class="yag-description">
                                <div class="typo3-dimmed">
                                    <b>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments258 = array();
$arguments258['key'] = 'tx_yag_domain_model_gallery.description';
$arguments258['id'] = NULL;
$arguments258['default'] = NULL;
$arguments258['htmlEscape'] = NULL;
$arguments258['arguments'] = NULL;
$arguments258['extensionName'] = NULL;
$renderChildrenClosure259 = function() {return NULL;};

$output257 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext);

$output257 .= '
                                    </b>
                                </div>
                                <div class="typo3-dimmed">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$arguments260 = array();
$arguments260['value'] = NULL;
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments262 = array();
$arguments262['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.description', $renderingContext);
$arguments262['keepQuotes'] = false;
$arguments262['encoding'] = NULL;
$arguments262['doubleEncode'] = true;
$renderChildrenClosure263 = function() {return NULL;};
$value264 = ($arguments262['value'] !== NULL ? $arguments262['value'] : $renderChildrenClosure263());
return (!is_string($value264) ? $value264 : htmlspecialchars($value264, ($arguments262['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments262['encoding'] !== NULL ? $arguments262['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments262['doubleEncode']));
};

$output257 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output257 .= '
                                </div>
                            </div>
                        ';
return $output257;
};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output25 .= '
                    </td>
                </tr>
            ';
return $output25;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output6 .= '
            </tbody>
        </table>
        <br/>

        <div class="tx-yag-pager">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments265 = array();
$arguments265['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'albumListConfig.pagerPartial', $renderingContext);
// Rendering Array
$array266 = array();
$array266['pager'] = $currentVariableContainer->getOrNull('pager');
$array266['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
$array266['controller'] = 'Gallery';
$array266['action'] = 'index';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments267 = array();
$arguments267['key'] = 'tx_yag_domain_model_albums';
$arguments267['id'] = NULL;
$arguments267['default'] = NULL;
$arguments267['htmlEscape'] = NULL;
$arguments267['arguments'] = NULL;
$arguments267['extensionName'] = NULL;
$renderChildrenClosure268 = function() {return NULL;};
$array266['itemsText'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);
$arguments265['arguments'] = $array266;
$arguments265['section'] = NULL;
$arguments265['optional'] = false;
$renderChildrenClosure269 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments265, $renderChildrenClosure269, $renderingContext);

$output6 .= '
        </div>
    ';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments270 = array();
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output272 = '';

$output272 .= '
        <div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments273 = array();
$arguments273['key'] = 'tx_yag_domain_model_gallery.noItemClick';
$arguments273['id'] = NULL;
$arguments273['default'] = NULL;
$arguments273['htmlEscape'] = NULL;
$arguments273['arguments'] = NULL;
$arguments273['extensionName'] = NULL;
$renderChildrenClosure274 = function() {return NULL;};

$output272 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext);

$output272 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments275 = array();
$arguments275['controller'] = 'Album';
$arguments275['action'] = 'new';
// Rendering Array
$array276 = array();
$array276['gallery'] = $currentVariableContainer->getOrNull('gallery');
$arguments275['arguments'] = $array276;
$arguments275['additionalAttributes'] = NULL;
$arguments275['data'] = NULL;
$arguments275['extensionName'] = NULL;
$arguments275['pluginName'] = NULL;
$arguments275['pageUid'] = NULL;
$arguments275['pageType'] = 0;
$arguments275['noCache'] = false;
$arguments275['noCacheHash'] = false;
$arguments275['section'] = '';
$arguments275['format'] = '';
$arguments275['linkAccessRestrictedPages'] = false;
$arguments275['additionalParams'] = array (
);
$arguments275['absolute'] = false;
$arguments275['addQueryString'] = false;
$arguments275['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments275['addQueryStringMethod'] = NULL;
$arguments275['class'] = NULL;
$arguments275['dir'] = NULL;
$arguments275['id'] = NULL;
$arguments275['lang'] = NULL;
$arguments275['style'] = NULL;
$arguments275['title'] = NULL;
$arguments275['accesskey'] = NULL;
$arguments275['tabindex'] = NULL;
$arguments275['onclick'] = NULL;
$arguments275['name'] = NULL;
$arguments275['rel'] = NULL;
$arguments275['rev'] = NULL;
$arguments275['target'] = NULL;
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output278 = '';

$output278 .= '
                <span class="t3-icon t3-icon-actions t3-icon-actions-document t3-icon-document-new">&nbsp;</span>
                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments279 = array();
$arguments279['key'] = 'tx_yag_controller_album.addAlbum';
$arguments279['id'] = NULL;
$arguments279['default'] = NULL;
$arguments279['htmlEscape'] = NULL;
$arguments279['arguments'] = NULL;
$arguments279['extensionName'] = NULL;
$renderChildrenClosure280 = function() {return NULL;};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext);

$output278 .= '</span>
            ';
return $output278;
};
$viewHelper281 = $self->getViewHelper('$viewHelper281', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper281->setArguments($arguments275);
$viewHelper281->setRenderingContext($renderingContext);
$viewHelper281->setRenderChildrenClosure($renderChildrenClosure277);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output272 .= $viewHelper281->initializeArgumentsAndRender();

$output272 .= '
        </div>
    ';
return $output272;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext);

$output3 .= '
';
return $output3;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output282 = '';

$output282 .= '
        <table id="sortable" class="table table-striped table-hover">
            <thead>
            <tr class="t3-row-header" role="row">
                <th colspan="4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments283 = array();
$arguments283['action'] = 'new';
$arguments283['controller'] = 'Album';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments284 = array();
$arguments284['key'] = 'tx_yag_controller_album.addAlbum';
$arguments284['id'] = NULL;
$arguments284['default'] = NULL;
$arguments284['htmlEscape'] = NULL;
$arguments284['arguments'] = NULL;
$arguments284['extensionName'] = NULL;
$renderChildrenClosure285 = function() {return NULL;};
$arguments283['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext);
$arguments283['class'] = 'btn btn-default';
$arguments283['additionalAttributes'] = NULL;
$arguments283['data'] = NULL;
$arguments283['arguments'] = array (
);
$arguments283['extensionName'] = NULL;
$arguments283['pluginName'] = NULL;
$arguments283['pageUid'] = NULL;
$arguments283['pageType'] = 0;
$arguments283['noCache'] = false;
$arguments283['noCacheHash'] = false;
$arguments283['section'] = '';
$arguments283['format'] = '';
$arguments283['linkAccessRestrictedPages'] = false;
$arguments283['additionalParams'] = array (
);
$arguments283['absolute'] = false;
$arguments283['addQueryString'] = false;
$arguments283['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments283['addQueryStringMethod'] = NULL;
$arguments283['dir'] = NULL;
$arguments283['id'] = NULL;
$arguments283['lang'] = NULL;
$arguments283['style'] = NULL;
$arguments283['accesskey'] = NULL;
$arguments283['tabindex'] = NULL;
$arguments283['onclick'] = NULL;
$arguments283['name'] = NULL;
$arguments283['rel'] = NULL;
$arguments283['rev'] = NULL;
$arguments283['target'] = NULL;
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments287 = array();
$arguments287['identifier'] = 'actions-document-new';
$arguments287['size'] = 'small';
$arguments287['overlay'] = NULL;
$arguments287['state'] = 'default';
$arguments287['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure288 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext);
};
$viewHelper289 = $self->getViewHelper('$viewHelper289', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper289->setArguments($arguments283);
$viewHelper289->setRenderingContext($renderingContext);
$viewHelper289->setRenderChildrenClosure($renderChildrenClosure286);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output282 .= $viewHelper289->initializeArgumentsAndRender();

$output282 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments290 = array();
$arguments290['key'] = 'tx_yag_domain_model_album';
$arguments290['id'] = NULL;
$arguments290['default'] = NULL;
$arguments290['htmlEscape'] = NULL;
$arguments290['arguments'] = NULL;
$arguments290['extensionName'] = NULL;
$renderChildrenClosure291 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments290, $renderChildrenClosure291, $renderingContext);

$output282 .= '
                    (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments292 = array();
$arguments292['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'itemCount', $renderingContext);
$arguments292['keepQuotes'] = false;
$arguments292['encoding'] = NULL;
$arguments292['doubleEncode'] = true;
$renderChildrenClosure293 = function() {return NULL;};
$value294 = ($arguments292['value'] !== NULL ? $arguments292['value'] : $renderChildrenClosure293());

$output282 .= (!is_string($value294) ? $value294 : htmlspecialchars($value294, ($arguments292['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments292['encoding'] !== NULL ? $arguments292['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments292['doubleEncode']));

$output282 .= ')
                </th>
            </tr>
            <tr class="c-headLine">
                <td class="yag-col-thumb">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments295 = array();
$arguments295['key'] = 'tx_yag_domain_model_album.thumb';
$arguments295['id'] = NULL;
$arguments295['default'] = NULL;
$arguments295['htmlEscape'] = NULL;
$arguments295['arguments'] = NULL;
$arguments295['extensionName'] = NULL;
$renderChildrenClosure296 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext);

$output282 .= '
                </td>
                <td colspan="2">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments297 = array();
$arguments297['key'] = 'tx_yag_domain_model_album.name';
$arguments297['id'] = NULL;
$arguments297['default'] = NULL;
$arguments297['htmlEscape'] = NULL;
$arguments297['arguments'] = NULL;
$arguments297['extensionName'] = NULL;
$renderChildrenClosure298 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);

$output282 .= '
                </td>
            </tr>
            </thead>
            <tbody class="ui-sortable">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments299 = array();
$arguments299['each'] = $currentVariableContainer->getOrNull('listData');
$arguments299['key'] = 'rowIndex';
$arguments299['as'] = 'listRow';
$arguments299['reverse'] = false;
$arguments299['iteration'] = NULL;
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output301 = '';

$output301 .= '
                <tr id="albumUid-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments302 = array();
$arguments302['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments302['keepQuotes'] = false;
$arguments302['encoding'] = NULL;
$arguments302['doubleEncode'] = true;
$renderChildrenClosure303 = function() {return NULL;};
$value304 = ($arguments302['value'] !== NULL ? $arguments302['value'] : $renderChildrenClosure303());

$output301 .= (!is_string($value304) ? $value304 : htmlspecialchars($value304, ($arguments302['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments302['encoding'] !== NULL ? $arguments302['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments302['doubleEncode']));

$output301 .= '"
                    class="db_list_normal ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments305 = array();
// Rendering Boolean node
$arguments305['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.isGalleryThumb', $renderingContext));
$arguments305['then'] = ' tx-yag-album-index-album';
$arguments305['else'] = NULL;
$renderChildrenClosure306 = function() {return NULL;};

$output301 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output301 .= '">
                    <td>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments307 = array();
$arguments307['action'] = 'submitFilter';
$arguments307['controller'] = 'ItemList';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments308 = array();
$arguments308['object'] = $currentVariableContainer->getOrNull('yagContext');
$output309 = '';

$output309 .= 'albumUid:';

$output309 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments308['arguments'] = $output309;
$arguments308['nameSpace'] = '';
$renderChildrenClosure310 = function() {return NULL;};
$viewHelper311 = $self->getViewHelper('$viewHelper311', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper311->setArguments($arguments308);
$viewHelper311->setRenderingContext($renderingContext);
$viewHelper311->setRenderChildrenClosure($renderChildrenClosure310);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments307['arguments'] = $viewHelper311->initializeArgumentsAndRender();
$arguments307['additionalAttributes'] = NULL;
$arguments307['data'] = NULL;
$arguments307['extensionName'] = NULL;
$arguments307['pluginName'] = NULL;
$arguments307['pageUid'] = NULL;
$arguments307['pageType'] = 0;
$arguments307['noCache'] = false;
$arguments307['noCacheHash'] = false;
$arguments307['section'] = '';
$arguments307['format'] = '';
$arguments307['linkAccessRestrictedPages'] = false;
$arguments307['additionalParams'] = array (
);
$arguments307['absolute'] = false;
$arguments307['addQueryString'] = false;
$arguments307['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments307['addQueryStringMethod'] = NULL;
$arguments307['class'] = NULL;
$arguments307['dir'] = NULL;
$arguments307['id'] = NULL;
$arguments307['lang'] = NULL;
$arguments307['style'] = NULL;
$arguments307['title'] = NULL;
$arguments307['accesskey'] = NULL;
$arguments307['tabindex'] = NULL;
$arguments307['onclick'] = NULL;
$arguments307['name'] = NULL;
$arguments307['rel'] = NULL;
$arguments307['rev'] = NULL;
$arguments307['target'] = NULL;
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output313 = '';

$output313 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments314 = array();
// Rendering Boolean node
$arguments314['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.itemCount', $renderingContext), 0);
$arguments314['then'] = NULL;
$arguments314['else'] = NULL;
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output316 = '';

$output316 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments317 = array();
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output319 = '';

$output319 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments320 = array();
// Rendering Boolean node
$arguments320['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.hidden', $renderingContext));
$arguments320['then'] = NULL;
$arguments320['else'] = NULL;
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output322 = '';

$output322 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments323 = array();
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output325 = '';

$output325 .= '
                                            <div id="album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments326 = array();
$arguments326['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments326['keepQuotes'] = false;
$arguments326['encoding'] = NULL;
$arguments326['doubleEncode'] = true;
$renderChildrenClosure327 = function() {return NULL;};
$value328 = ($arguments326['value'] !== NULL ? $arguments326['value'] : $renderChildrenClosure327());

$output325 .= (!is_string($value328) ? $value328 : htmlspecialchars($value328, ($arguments326['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments326['encoding'] !== NULL ? $arguments326['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments326['doubleEncode']));

$output325 .= '-transparency"
                                                 class="tx-yag-transparency-half">
                                                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments329 = array();
$arguments329['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.thumb', $renderingContext);
$arguments329['resolutionName'] = 'thumb';
$arguments329['additionalAttributes'] = NULL;
$arguments329['data'] = NULL;
$arguments329['class'] = NULL;
$arguments329['dir'] = NULL;
$arguments329['id'] = NULL;
$arguments329['lang'] = NULL;
$arguments329['style'] = NULL;
$arguments329['title'] = NULL;
$arguments329['accesskey'] = NULL;
$arguments329['tabindex'] = NULL;
$arguments329['onclick'] = NULL;
$arguments329['alt'] = NULL;
$arguments329['centerVertical'] = NULL;
$arguments329['width'] = NULL;
$arguments329['height'] = NULL;
$arguments329['quality'] = 80;
$renderChildrenClosure330 = function() {return NULL;};
$viewHelper331 = $self->getViewHelper('$viewHelper331', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper331->setArguments($arguments329);
$viewHelper331->setRenderingContext($renderingContext);
$viewHelper331->setRenderChildrenClosure($renderChildrenClosure330);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output325 .= $viewHelper331->initializeArgumentsAndRender();

$output325 .= '
                                            </div>
                                        ';
return $output325;
};

$output322 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output322 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments332 = array();
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output334 = '';

$output334 .= '
                                            <div id="album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments335 = array();
$arguments335['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments335['keepQuotes'] = false;
$arguments335['encoding'] = NULL;
$arguments335['doubleEncode'] = true;
$renderChildrenClosure336 = function() {return NULL;};
$value337 = ($arguments335['value'] !== NULL ? $arguments335['value'] : $renderChildrenClosure336());

$output334 .= (!is_string($value337) ? $value337 : htmlspecialchars($value337, ($arguments335['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments335['encoding'] !== NULL ? $arguments335['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments335['doubleEncode']));

$output334 .= '-transparency">
                                                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments338 = array();
$arguments338['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.thumb', $renderingContext);
$arguments338['resolutionName'] = 'thumb';
$arguments338['additionalAttributes'] = NULL;
$arguments338['data'] = NULL;
$arguments338['class'] = NULL;
$arguments338['dir'] = NULL;
$arguments338['id'] = NULL;
$arguments338['lang'] = NULL;
$arguments338['style'] = NULL;
$arguments338['title'] = NULL;
$arguments338['accesskey'] = NULL;
$arguments338['tabindex'] = NULL;
$arguments338['onclick'] = NULL;
$arguments338['alt'] = NULL;
$arguments338['centerVertical'] = NULL;
$arguments338['width'] = NULL;
$arguments338['height'] = NULL;
$arguments338['quality'] = 80;
$renderChildrenClosure339 = function() {return NULL;};
$viewHelper340 = $self->getViewHelper('$viewHelper340', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper340->setArguments($arguments338);
$viewHelper340->setRenderingContext($renderingContext);
$viewHelper340->setRenderChildrenClosure($renderChildrenClosure339);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output334 .= $viewHelper340->initializeArgumentsAndRender();

$output334 .= '
                                            </div>
                                        ';
return $output334;
};

$output322 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);

$output322 .= '
                                    ';
return $output322;
};
$arguments320['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output341 = '';

$output341 .= '
                                            <div id="album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments342 = array();
$arguments342['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments342['keepQuotes'] = false;
$arguments342['encoding'] = NULL;
$arguments342['doubleEncode'] = true;
$renderChildrenClosure343 = function() {return NULL;};
$value344 = ($arguments342['value'] !== NULL ? $arguments342['value'] : $renderChildrenClosure343());

$output341 .= (!is_string($value344) ? $value344 : htmlspecialchars($value344, ($arguments342['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments342['encoding'] !== NULL ? $arguments342['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments342['doubleEncode']));

$output341 .= '-transparency"
                                                 class="tx-yag-transparency-half">
                                                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments345 = array();
$arguments345['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.thumb', $renderingContext);
$arguments345['resolutionName'] = 'thumb';
$arguments345['additionalAttributes'] = NULL;
$arguments345['data'] = NULL;
$arguments345['class'] = NULL;
$arguments345['dir'] = NULL;
$arguments345['id'] = NULL;
$arguments345['lang'] = NULL;
$arguments345['style'] = NULL;
$arguments345['title'] = NULL;
$arguments345['accesskey'] = NULL;
$arguments345['tabindex'] = NULL;
$arguments345['onclick'] = NULL;
$arguments345['alt'] = NULL;
$arguments345['centerVertical'] = NULL;
$arguments345['width'] = NULL;
$arguments345['height'] = NULL;
$arguments345['quality'] = 80;
$renderChildrenClosure346 = function() {return NULL;};
$viewHelper347 = $self->getViewHelper('$viewHelper347', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper347->setArguments($arguments345);
$viewHelper347->setRenderingContext($renderingContext);
$viewHelper347->setRenderChildrenClosure($renderChildrenClosure346);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output341 .= $viewHelper347->initializeArgumentsAndRender();

$output341 .= '
                                            </div>
                                        ';
return $output341;
};
$arguments320['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output348 = '';

$output348 .= '
                                            <div id="album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments349 = array();
$arguments349['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments349['keepQuotes'] = false;
$arguments349['encoding'] = NULL;
$arguments349['doubleEncode'] = true;
$renderChildrenClosure350 = function() {return NULL;};
$value351 = ($arguments349['value'] !== NULL ? $arguments349['value'] : $renderChildrenClosure350());

$output348 .= (!is_string($value351) ? $value351 : htmlspecialchars($value351, ($arguments349['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments349['encoding'] !== NULL ? $arguments349['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments349['doubleEncode']));

$output348 .= '-transparency">
                                                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments352 = array();
$arguments352['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.thumb', $renderingContext);
$arguments352['resolutionName'] = 'thumb';
$arguments352['additionalAttributes'] = NULL;
$arguments352['data'] = NULL;
$arguments352['class'] = NULL;
$arguments352['dir'] = NULL;
$arguments352['id'] = NULL;
$arguments352['lang'] = NULL;
$arguments352['style'] = NULL;
$arguments352['title'] = NULL;
$arguments352['accesskey'] = NULL;
$arguments352['tabindex'] = NULL;
$arguments352['onclick'] = NULL;
$arguments352['alt'] = NULL;
$arguments352['centerVertical'] = NULL;
$arguments352['width'] = NULL;
$arguments352['height'] = NULL;
$arguments352['quality'] = 80;
$renderChildrenClosure353 = function() {return NULL;};
$viewHelper354 = $self->getViewHelper('$viewHelper354', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper354->setArguments($arguments352);
$viewHelper354->setRenderingContext($renderingContext);
$viewHelper354->setRenderChildrenClosure($renderChildrenClosure353);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output348 .= $viewHelper354->initializeArgumentsAndRender();

$output348 .= '
                                            </div>
                                        ';
return $output348;
};

$output319 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);

$output319 .= '
                                ';
return $output319;
};

$output316 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output316 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments355 = array();
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output357 = '';

$output357 .= '
                                    <div>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments358 = array();
$arguments358['key'] = 'tx_yag_domain_model_album.noItem';
$arguments358['id'] = NULL;
$arguments358['default'] = NULL;
$arguments358['htmlEscape'] = NULL;
$arguments358['arguments'] = NULL;
$arguments358['extensionName'] = NULL;
$renderChildrenClosure359 = function() {return NULL;};

$output357 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext);

$output357 .= '
                                    </div>
                                ';
return $output357;
};

$output316 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext);

$output316 .= '
                            ';
return $output316;
};
$arguments314['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output360 = '';

$output360 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments361 = array();
// Rendering Boolean node
$arguments361['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.hidden', $renderingContext));
$arguments361['then'] = NULL;
$arguments361['else'] = NULL;
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output363 = '';

$output363 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments364 = array();
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output366 = '';

$output366 .= '
                                            <div id="album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments367 = array();
$arguments367['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments367['keepQuotes'] = false;
$arguments367['encoding'] = NULL;
$arguments367['doubleEncode'] = true;
$renderChildrenClosure368 = function() {return NULL;};
$value369 = ($arguments367['value'] !== NULL ? $arguments367['value'] : $renderChildrenClosure368());

$output366 .= (!is_string($value369) ? $value369 : htmlspecialchars($value369, ($arguments367['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments367['encoding'] !== NULL ? $arguments367['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments367['doubleEncode']));

$output366 .= '-transparency"
                                                 class="tx-yag-transparency-half">
                                                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments370 = array();
$arguments370['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.thumb', $renderingContext);
$arguments370['resolutionName'] = 'thumb';
$arguments370['additionalAttributes'] = NULL;
$arguments370['data'] = NULL;
$arguments370['class'] = NULL;
$arguments370['dir'] = NULL;
$arguments370['id'] = NULL;
$arguments370['lang'] = NULL;
$arguments370['style'] = NULL;
$arguments370['title'] = NULL;
$arguments370['accesskey'] = NULL;
$arguments370['tabindex'] = NULL;
$arguments370['onclick'] = NULL;
$arguments370['alt'] = NULL;
$arguments370['centerVertical'] = NULL;
$arguments370['width'] = NULL;
$arguments370['height'] = NULL;
$arguments370['quality'] = 80;
$renderChildrenClosure371 = function() {return NULL;};
$viewHelper372 = $self->getViewHelper('$viewHelper372', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper372->setArguments($arguments370);
$viewHelper372->setRenderingContext($renderingContext);
$viewHelper372->setRenderChildrenClosure($renderChildrenClosure371);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output366 .= $viewHelper372->initializeArgumentsAndRender();

$output366 .= '
                                            </div>
                                        ';
return $output366;
};

$output363 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext);

$output363 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments373 = array();
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output375 = '';

$output375 .= '
                                            <div id="album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments376 = array();
$arguments376['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments376['keepQuotes'] = false;
$arguments376['encoding'] = NULL;
$arguments376['doubleEncode'] = true;
$renderChildrenClosure377 = function() {return NULL;};
$value378 = ($arguments376['value'] !== NULL ? $arguments376['value'] : $renderChildrenClosure377());

$output375 .= (!is_string($value378) ? $value378 : htmlspecialchars($value378, ($arguments376['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments376['encoding'] !== NULL ? $arguments376['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments376['doubleEncode']));

$output375 .= '-transparency">
                                                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments379 = array();
$arguments379['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.thumb', $renderingContext);
$arguments379['resolutionName'] = 'thumb';
$arguments379['additionalAttributes'] = NULL;
$arguments379['data'] = NULL;
$arguments379['class'] = NULL;
$arguments379['dir'] = NULL;
$arguments379['id'] = NULL;
$arguments379['lang'] = NULL;
$arguments379['style'] = NULL;
$arguments379['title'] = NULL;
$arguments379['accesskey'] = NULL;
$arguments379['tabindex'] = NULL;
$arguments379['onclick'] = NULL;
$arguments379['alt'] = NULL;
$arguments379['centerVertical'] = NULL;
$arguments379['width'] = NULL;
$arguments379['height'] = NULL;
$arguments379['quality'] = 80;
$renderChildrenClosure380 = function() {return NULL;};
$viewHelper381 = $self->getViewHelper('$viewHelper381', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper381->setArguments($arguments379);
$viewHelper381->setRenderingContext($renderingContext);
$viewHelper381->setRenderChildrenClosure($renderChildrenClosure380);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output375 .= $viewHelper381->initializeArgumentsAndRender();

$output375 .= '
                                            </div>
                                        ';
return $output375;
};

$output363 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext);

$output363 .= '
                                    ';
return $output363;
};
$arguments361['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output382 = '';

$output382 .= '
                                            <div id="album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments383 = array();
$arguments383['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments383['keepQuotes'] = false;
$arguments383['encoding'] = NULL;
$arguments383['doubleEncode'] = true;
$renderChildrenClosure384 = function() {return NULL;};
$value385 = ($arguments383['value'] !== NULL ? $arguments383['value'] : $renderChildrenClosure384());

$output382 .= (!is_string($value385) ? $value385 : htmlspecialchars($value385, ($arguments383['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments383['encoding'] !== NULL ? $arguments383['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments383['doubleEncode']));

$output382 .= '-transparency"
                                                 class="tx-yag-transparency-half">
                                                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments386 = array();
$arguments386['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.thumb', $renderingContext);
$arguments386['resolutionName'] = 'thumb';
$arguments386['additionalAttributes'] = NULL;
$arguments386['data'] = NULL;
$arguments386['class'] = NULL;
$arguments386['dir'] = NULL;
$arguments386['id'] = NULL;
$arguments386['lang'] = NULL;
$arguments386['style'] = NULL;
$arguments386['title'] = NULL;
$arguments386['accesskey'] = NULL;
$arguments386['tabindex'] = NULL;
$arguments386['onclick'] = NULL;
$arguments386['alt'] = NULL;
$arguments386['centerVertical'] = NULL;
$arguments386['width'] = NULL;
$arguments386['height'] = NULL;
$arguments386['quality'] = 80;
$renderChildrenClosure387 = function() {return NULL;};
$viewHelper388 = $self->getViewHelper('$viewHelper388', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper388->setArguments($arguments386);
$viewHelper388->setRenderingContext($renderingContext);
$viewHelper388->setRenderChildrenClosure($renderChildrenClosure387);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output382 .= $viewHelper388->initializeArgumentsAndRender();

$output382 .= '
                                            </div>
                                        ';
return $output382;
};
$arguments361['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output389 = '';

$output389 .= '
                                            <div id="album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments390 = array();
$arguments390['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments390['keepQuotes'] = false;
$arguments390['encoding'] = NULL;
$arguments390['doubleEncode'] = true;
$renderChildrenClosure391 = function() {return NULL;};
$value392 = ($arguments390['value'] !== NULL ? $arguments390['value'] : $renderChildrenClosure391());

$output389 .= (!is_string($value392) ? $value392 : htmlspecialchars($value392, ($arguments390['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments390['encoding'] !== NULL ? $arguments390['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments390['doubleEncode']));

$output389 .= '-transparency">
                                                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments393 = array();
$arguments393['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.thumb', $renderingContext);
$arguments393['resolutionName'] = 'thumb';
$arguments393['additionalAttributes'] = NULL;
$arguments393['data'] = NULL;
$arguments393['class'] = NULL;
$arguments393['dir'] = NULL;
$arguments393['id'] = NULL;
$arguments393['lang'] = NULL;
$arguments393['style'] = NULL;
$arguments393['title'] = NULL;
$arguments393['accesskey'] = NULL;
$arguments393['tabindex'] = NULL;
$arguments393['onclick'] = NULL;
$arguments393['alt'] = NULL;
$arguments393['centerVertical'] = NULL;
$arguments393['width'] = NULL;
$arguments393['height'] = NULL;
$arguments393['quality'] = 80;
$renderChildrenClosure394 = function() {return NULL;};
$viewHelper395 = $self->getViewHelper('$viewHelper395', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper395->setArguments($arguments393);
$viewHelper395->setRenderingContext($renderingContext);
$viewHelper395->setRenderChildrenClosure($renderChildrenClosure394);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output389 .= $viewHelper395->initializeArgumentsAndRender();

$output389 .= '
                                            </div>
                                        ';
return $output389;
};

$output360 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext);

$output360 .= '
                                ';
return $output360;
};
$arguments314['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output396 = '';

$output396 .= '
                                    <div>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments397 = array();
$arguments397['key'] = 'tx_yag_domain_model_album.noItem';
$arguments397['id'] = NULL;
$arguments397['default'] = NULL;
$arguments397['htmlEscape'] = NULL;
$arguments397['arguments'] = NULL;
$arguments397['extensionName'] = NULL;
$renderChildrenClosure398 = function() {return NULL;};

$output396 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext);

$output396 .= '
                                    </div>
                                ';
return $output396;
};

$output313 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output313 .= '
                        ';
return $output313;
};
$viewHelper399 = $self->getViewHelper('$viewHelper399', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper399->setArguments($arguments307);
$viewHelper399->setRenderingContext($renderingContext);
$viewHelper399->setRenderChildrenClosure($renderChildrenClosure312);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output301 .= $viewHelper399->initializeArgumentsAndRender();

$output301 .= '
                    </td>
                    <td class="yag-col-title">
                        <div>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments400 = array();
$arguments400['action'] = 'submitFilter';
$arguments400['controller'] = 'ItemList';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments401 = array();
$arguments401['object'] = $currentVariableContainer->getOrNull('yagContext');
$output402 = '';

$output402 .= 'albumUid:';

$output402 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments401['arguments'] = $output402;
$arguments401['nameSpace'] = '';
$renderChildrenClosure403 = function() {return NULL;};
$viewHelper404 = $self->getViewHelper('$viewHelper404', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper404->setArguments($arguments401);
$viewHelper404->setRenderingContext($renderingContext);
$viewHelper404->setRenderChildrenClosure($renderChildrenClosure403);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments400['arguments'] = $viewHelper404->initializeArgumentsAndRender();
$arguments400['additionalAttributes'] = NULL;
$arguments400['data'] = NULL;
$arguments400['extensionName'] = NULL;
$arguments400['pluginName'] = NULL;
$arguments400['pageUid'] = NULL;
$arguments400['pageType'] = 0;
$arguments400['noCache'] = false;
$arguments400['noCacheHash'] = false;
$arguments400['section'] = '';
$arguments400['format'] = '';
$arguments400['linkAccessRestrictedPages'] = false;
$arguments400['additionalParams'] = array (
);
$arguments400['absolute'] = false;
$arguments400['addQueryString'] = false;
$arguments400['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments400['addQueryStringMethod'] = NULL;
$arguments400['class'] = NULL;
$arguments400['dir'] = NULL;
$arguments400['id'] = NULL;
$arguments400['lang'] = NULL;
$arguments400['style'] = NULL;
$arguments400['title'] = NULL;
$arguments400['accesskey'] = NULL;
$arguments400['tabindex'] = NULL;
$arguments400['onclick'] = NULL;
$arguments400['name'] = NULL;
$arguments400['rel'] = NULL;
$arguments400['rev'] = NULL;
$arguments400['target'] = NULL;
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output406 = '';

$output406 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments407 = array();
$arguments407['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.name', $renderingContext);
$arguments407['keepQuotes'] = false;
$arguments407['encoding'] = NULL;
$arguments407['doubleEncode'] = true;
$renderChildrenClosure408 = function() {return NULL;};
$value409 = ($arguments407['value'] !== NULL ? $arguments407['value'] : $renderChildrenClosure408());

$output406 .= (!is_string($value409) ? $value409 : htmlspecialchars($value409, ($arguments407['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments407['encoding'] !== NULL ? $arguments407['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments407['doubleEncode']));

$output406 .= '
                            ';
return $output406;
};
$viewHelper410 = $self->getViewHelper('$viewHelper410', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper410->setArguments($arguments400);
$viewHelper410->setRenderingContext($renderingContext);
$viewHelper410->setRenderChildrenClosure($renderChildrenClosure405);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output301 .= $viewHelper410->initializeArgumentsAndRender();

$output301 .= '
                            <br/>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments411 = array();
$arguments411['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.itemCount', $renderingContext);
$arguments411['keepQuotes'] = false;
$arguments411['encoding'] = NULL;
$arguments411['doubleEncode'] = true;
$renderChildrenClosure412 = function() {return NULL;};
$value413 = ($arguments411['value'] !== NULL ? $arguments411['value'] : $renderChildrenClosure412());

$output301 .= (!is_string($value413) ? $value413 : htmlspecialchars($value413, ($arguments411['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments411['encoding'] !== NULL ? $arguments411['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments411['doubleEncode']));

$output301 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments414 = array();
// Rendering Boolean node
// Rendering Array
$array415 = array();
$array415['1'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.itemCount', $renderingContext);
// Rendering Array
$array416 = array();
$array416['1'] = 1;
$arguments414['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array415, $array416);
$arguments414['then'] = NULL;
$arguments414['else'] = NULL;
$renderChildrenClosure417 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output418 = '';

$output418 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments419 = array();
$renderChildrenClosure420 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output421 = '';

$output421 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments422 = array();
$arguments422['key'] = 'tx_yag_general.image';
$arguments422['id'] = NULL;
$arguments422['default'] = NULL;
$arguments422['htmlEscape'] = NULL;
$arguments422['arguments'] = NULL;
$arguments422['extensionName'] = NULL;
$renderChildrenClosure423 = function() {return NULL;};

$output421 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments422, $renderChildrenClosure423, $renderingContext);

$output421 .= '
                                ';
return $output421;
};

$output418 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments419, $renderChildrenClosure420, $renderingContext);

$output418 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments424 = array();
$renderChildrenClosure425 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output426 = '';

$output426 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments427 = array();
$arguments427['key'] = 'tx_yag_general.images';
$arguments427['id'] = NULL;
$arguments427['default'] = NULL;
$arguments427['htmlEscape'] = NULL;
$arguments427['arguments'] = NULL;
$arguments427['extensionName'] = NULL;
$renderChildrenClosure428 = function() {return NULL;};

$output426 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments427, $renderChildrenClosure428, $renderingContext);

$output426 .= '
                                ';
return $output426;
};

$output418 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments424, $renderChildrenClosure425, $renderingContext);

$output418 .= '
                            ';
return $output418;
};
$arguments414['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output429 = '';

$output429 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments430 = array();
$arguments430['key'] = 'tx_yag_general.image';
$arguments430['id'] = NULL;
$arguments430['default'] = NULL;
$arguments430['htmlEscape'] = NULL;
$arguments430['arguments'] = NULL;
$arguments430['extensionName'] = NULL;
$renderChildrenClosure431 = function() {return NULL;};

$output429 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments430, $renderChildrenClosure431, $renderingContext);

$output429 .= '
                                ';
return $output429;
};
$arguments414['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output432 = '';

$output432 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments433 = array();
$arguments433['key'] = 'tx_yag_general.images';
$arguments433['id'] = NULL;
$arguments433['default'] = NULL;
$arguments433['htmlEscape'] = NULL;
$arguments433['arguments'] = NULL;
$arguments433['extensionName'] = NULL;
$renderChildrenClosure434 = function() {return NULL;};

$output432 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments433, $renderChildrenClosure434, $renderingContext);

$output432 .= '
                                ';
return $output432;
};

$output301 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments414, $renderChildrenClosure417, $renderingContext);

$output301 .= '
                        </div>
                    </td>
                    <td class="actions icons">
                        <div class="btn-group">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments435 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments436 = array();
$arguments436['key'] = 'tx_yag_controller_album.edit';
$arguments436['id'] = NULL;
$arguments436['default'] = NULL;
$arguments436['htmlEscape'] = NULL;
$arguments436['arguments'] = NULL;
$arguments436['extensionName'] = NULL;
$renderChildrenClosure437 = function() {return NULL;};
$arguments435['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments436, $renderChildrenClosure437, $renderingContext);
$arguments435['controller'] = 'ItemList';
$arguments435['action'] = 'submitFilter';
$arguments435['section'] = 'tabs-3';
$arguments435['class'] = 'btn';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments438 = array();
$arguments438['object'] = $currentVariableContainer->getOrNull('yagContext');
$output439 = '';

$output439 .= 'albumUid:';

$output439 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments438['arguments'] = $output439;
$arguments438['nameSpace'] = '';
$renderChildrenClosure440 = function() {return NULL;};
$viewHelper441 = $self->getViewHelper('$viewHelper441', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper441->setArguments($arguments438);
$viewHelper441->setRenderingContext($renderingContext);
$viewHelper441->setRenderChildrenClosure($renderChildrenClosure440);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments435['arguments'] = $viewHelper441->initializeArgumentsAndRender();
$arguments435['additionalAttributes'] = NULL;
$arguments435['data'] = NULL;
$arguments435['extensionName'] = NULL;
$arguments435['pluginName'] = NULL;
$arguments435['pageUid'] = NULL;
$arguments435['pageType'] = 0;
$arguments435['noCache'] = false;
$arguments435['noCacheHash'] = false;
$arguments435['format'] = '';
$arguments435['linkAccessRestrictedPages'] = false;
$arguments435['additionalParams'] = array (
);
$arguments435['absolute'] = false;
$arguments435['addQueryString'] = false;
$arguments435['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments435['addQueryStringMethod'] = NULL;
$arguments435['dir'] = NULL;
$arguments435['id'] = NULL;
$arguments435['lang'] = NULL;
$arguments435['style'] = NULL;
$arguments435['accesskey'] = NULL;
$arguments435['tabindex'] = NULL;
$arguments435['onclick'] = NULL;
$arguments435['name'] = NULL;
$arguments435['rel'] = NULL;
$arguments435['rev'] = NULL;
$arguments435['target'] = NULL;
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output443 = '';

$output443 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments444 = array();
$arguments444['identifier'] = 'actions-document-open';
$arguments444['size'] = 'small';
$arguments444['overlay'] = NULL;
$arguments444['state'] = 'default';
$arguments444['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure445 = function() {return NULL;};

$output443 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments444, $renderChildrenClosure445, $renderingContext);

$output443 .= '
                            ';
return $output443;
};
$viewHelper446 = $self->getViewHelper('$viewHelper446', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper446->setArguments($arguments435);
$viewHelper446->setRenderingContext($renderingContext);
$viewHelper446->setRenderChildrenClosure($renderChildrenClosure442);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output301 .= $viewHelper446->initializeArgumentsAndRender();

$output301 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments447 = array();
// Rendering Boolean node
$arguments447['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.hidden', $renderingContext));
$arguments447['then'] = NULL;
$arguments447['else'] = NULL;
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output449 = '';

$output449 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments450 = array();
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output452 = '';

$output452 .= '
                                    <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments453 = array();
$arguments453['key'] = 'tx_yag_domain_model_album.unhide';
$arguments453['id'] = NULL;
$arguments453['default'] = NULL;
$arguments453['htmlEscape'] = NULL;
$arguments453['arguments'] = NULL;
$arguments453['extensionName'] = NULL;
$renderChildrenClosure454 = function() {return NULL;};

$output452 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext);

$output452 .= '"
                                       id="unhide-album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments455 = array();
$arguments455['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments455['keepQuotes'] = false;
$arguments455['encoding'] = NULL;
$arguments455['doubleEncode'] = true;
$renderChildrenClosure456 = function() {return NULL;};
$value457 = ($arguments455['value'] !== NULL ? $arguments455['value'] : $renderChildrenClosure456());

$output452 .= (!is_string($value457) ? $value457 : htmlspecialchars($value457, ($arguments455['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments455['encoding'] !== NULL ? $arguments455['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments455['doubleEncode']));

$output452 .= '" class="unhide-album btn"
                                       albumUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments458 = array();
$arguments458['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments458['keepQuotes'] = false;
$arguments458['encoding'] = NULL;
$arguments458['doubleEncode'] = true;
$renderChildrenClosure459 = function() {return NULL;};
$value460 = ($arguments458['value'] !== NULL ? $arguments458['value'] : $renderChildrenClosure459());

$output452 .= (!is_string($value460) ? $value460 : htmlspecialchars($value460, ($arguments458['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments458['encoding'] !== NULL ? $arguments458['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments458['doubleEncode']));

$output452 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments461 = array();
$arguments461['identifier'] = 'actions-edit-unhide';
$arguments461['size'] = 'small';
$arguments461['overlay'] = NULL;
$arguments461['state'] = 'default';
$arguments461['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure462 = function() {return NULL;};

$output452 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments461, $renderChildrenClosure462, $renderingContext);

$output452 .= '
                                    </a>
                                ';
return $output452;
};

$output449 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output449 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments463 = array();
$renderChildrenClosure464 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output465 = '';

$output465 .= '
                                    <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments466 = array();
$arguments466['key'] = 'tx_yag_domain_model_album.hide';
$arguments466['id'] = NULL;
$arguments466['default'] = NULL;
$arguments466['htmlEscape'] = NULL;
$arguments466['arguments'] = NULL;
$arguments466['extensionName'] = NULL;
$renderChildrenClosure467 = function() {return NULL;};

$output465 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext);

$output465 .= '"
                                       id="hide-album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments468 = array();
$arguments468['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments468['keepQuotes'] = false;
$arguments468['encoding'] = NULL;
$arguments468['doubleEncode'] = true;
$renderChildrenClosure469 = function() {return NULL;};
$value470 = ($arguments468['value'] !== NULL ? $arguments468['value'] : $renderChildrenClosure469());

$output465 .= (!is_string($value470) ? $value470 : htmlspecialchars($value470, ($arguments468['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments468['encoding'] !== NULL ? $arguments468['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments468['doubleEncode']));

$output465 .= '" class="hide-album btn"
                                       albumUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments471 = array();
$arguments471['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments471['keepQuotes'] = false;
$arguments471['encoding'] = NULL;
$arguments471['doubleEncode'] = true;
$renderChildrenClosure472 = function() {return NULL;};
$value473 = ($arguments471['value'] !== NULL ? $arguments471['value'] : $renderChildrenClosure472());

$output465 .= (!is_string($value473) ? $value473 : htmlspecialchars($value473, ($arguments471['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments471['encoding'] !== NULL ? $arguments471['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments471['doubleEncode']));

$output465 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments474 = array();
$arguments474['identifier'] = 'actions-edit-hide';
$arguments474['size'] = 'small';
$arguments474['overlay'] = NULL;
$arguments474['state'] = 'default';
$arguments474['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure475 = function() {return NULL;};

$output465 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments474, $renderChildrenClosure475, $renderingContext);

$output465 .= '
                                    </a>
                                ';
return $output465;
};

$output449 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments463, $renderChildrenClosure464, $renderingContext);

$output449 .= '
                            ';
return $output449;
};
$arguments447['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output476 = '';

$output476 .= '
                                    <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments477 = array();
$arguments477['key'] = 'tx_yag_domain_model_album.unhide';
$arguments477['id'] = NULL;
$arguments477['default'] = NULL;
$arguments477['htmlEscape'] = NULL;
$arguments477['arguments'] = NULL;
$arguments477['extensionName'] = NULL;
$renderChildrenClosure478 = function() {return NULL;};

$output476 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments477, $renderChildrenClosure478, $renderingContext);

$output476 .= '"
                                       id="unhide-album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments479 = array();
$arguments479['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments479['keepQuotes'] = false;
$arguments479['encoding'] = NULL;
$arguments479['doubleEncode'] = true;
$renderChildrenClosure480 = function() {return NULL;};
$value481 = ($arguments479['value'] !== NULL ? $arguments479['value'] : $renderChildrenClosure480());

$output476 .= (!is_string($value481) ? $value481 : htmlspecialchars($value481, ($arguments479['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments479['encoding'] !== NULL ? $arguments479['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments479['doubleEncode']));

$output476 .= '" class="unhide-album btn"
                                       albumUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments482 = array();
$arguments482['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments482['keepQuotes'] = false;
$arguments482['encoding'] = NULL;
$arguments482['doubleEncode'] = true;
$renderChildrenClosure483 = function() {return NULL;};
$value484 = ($arguments482['value'] !== NULL ? $arguments482['value'] : $renderChildrenClosure483());

$output476 .= (!is_string($value484) ? $value484 : htmlspecialchars($value484, ($arguments482['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments482['encoding'] !== NULL ? $arguments482['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments482['doubleEncode']));

$output476 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments485 = array();
$arguments485['identifier'] = 'actions-edit-unhide';
$arguments485['size'] = 'small';
$arguments485['overlay'] = NULL;
$arguments485['state'] = 'default';
$arguments485['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure486 = function() {return NULL;};

$output476 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments485, $renderChildrenClosure486, $renderingContext);

$output476 .= '
                                    </a>
                                ';
return $output476;
};
$arguments447['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output487 = '';

$output487 .= '
                                    <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments488 = array();
$arguments488['key'] = 'tx_yag_domain_model_album.hide';
$arguments488['id'] = NULL;
$arguments488['default'] = NULL;
$arguments488['htmlEscape'] = NULL;
$arguments488['arguments'] = NULL;
$arguments488['extensionName'] = NULL;
$renderChildrenClosure489 = function() {return NULL;};

$output487 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments488, $renderChildrenClosure489, $renderingContext);

$output487 .= '"
                                       id="hide-album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments490 = array();
$arguments490['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments490['keepQuotes'] = false;
$arguments490['encoding'] = NULL;
$arguments490['doubleEncode'] = true;
$renderChildrenClosure491 = function() {return NULL;};
$value492 = ($arguments490['value'] !== NULL ? $arguments490['value'] : $renderChildrenClosure491());

$output487 .= (!is_string($value492) ? $value492 : htmlspecialchars($value492, ($arguments490['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments490['encoding'] !== NULL ? $arguments490['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments490['doubleEncode']));

$output487 .= '" class="hide-album btn"
                                       albumUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments493 = array();
$arguments493['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments493['keepQuotes'] = false;
$arguments493['encoding'] = NULL;
$arguments493['doubleEncode'] = true;
$renderChildrenClosure494 = function() {return NULL;};
$value495 = ($arguments493['value'] !== NULL ? $arguments493['value'] : $renderChildrenClosure494());

$output487 .= (!is_string($value495) ? $value495 : htmlspecialchars($value495, ($arguments493['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments493['encoding'] !== NULL ? $arguments493['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments493['doubleEncode']));

$output487 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments496 = array();
$arguments496['identifier'] = 'actions-edit-hide';
$arguments496['size'] = 'small';
$arguments496['overlay'] = NULL;
$arguments496['state'] = 'default';
$arguments496['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure497 = function() {return NULL;};

$output487 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments496, $renderChildrenClosure497, $renderingContext);

$output487 .= '
                                    </a>
                                ';
return $output487;
};

$output301 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);

$output301 .= '
                            <a href="" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments498 = array();
$arguments498['key'] = 'tx_yag_domain_model_album.deleteAlbum';
$arguments498['id'] = NULL;
$arguments498['default'] = NULL;
$arguments498['htmlEscape'] = NULL;
$arguments498['arguments'] = NULL;
$arguments498['extensionName'] = NULL;
$renderChildrenClosure499 = function() {return NULL;};

$output301 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments498, $renderChildrenClosure499, $renderingContext);

$output301 .= '"
                               albumUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments500 = array();
$arguments500['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments500['keepQuotes'] = false;
$arguments500['encoding'] = NULL;
$arguments500['doubleEncode'] = true;
$renderChildrenClosure501 = function() {return NULL;};
$value502 = ($arguments500['value'] !== NULL ? $arguments500['value'] : $renderChildrenClosure501());

$output301 .= (!is_string($value502) ? $value502 : htmlspecialchars($value502, ($arguments500['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments500['encoding'] !== NULL ? $arguments500['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments500['doubleEncode']));

$output301 .= '" class="album-linkbar-delete btn">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments503 = array();
$arguments503['identifier'] = 'actions-edit-delete';
$arguments503['size'] = 'small';
$arguments503['overlay'] = NULL;
$arguments503['state'] = 'default';
$arguments503['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure504 = function() {return NULL;};

$output301 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments503, $renderChildrenClosure504, $renderingContext);

$output301 .= '
                            </a>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments505 = array();
$arguments505['controller'] = 'Album';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments506 = array();
$arguments506['key'] = 'tx_yag_controller_album_addItems';
$arguments506['id'] = NULL;
$arguments506['default'] = NULL;
$arguments506['htmlEscape'] = NULL;
$arguments506['arguments'] = NULL;
$arguments506['extensionName'] = NULL;
$renderChildrenClosure507 = function() {return NULL;};
$arguments505['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments506, $renderChildrenClosure507, $renderingContext);
$arguments505['action'] = 'addItems';
// Rendering Array
$array508 = array();
$array508['album'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value', $renderingContext);
$arguments505['arguments'] = $array508;
$arguments505['class'] = 'btn';
$arguments505['additionalAttributes'] = NULL;
$arguments505['data'] = NULL;
$arguments505['extensionName'] = NULL;
$arguments505['pluginName'] = NULL;
$arguments505['pageUid'] = NULL;
$arguments505['pageType'] = 0;
$arguments505['noCache'] = false;
$arguments505['noCacheHash'] = false;
$arguments505['section'] = '';
$arguments505['format'] = '';
$arguments505['linkAccessRestrictedPages'] = false;
$arguments505['additionalParams'] = array (
);
$arguments505['absolute'] = false;
$arguments505['addQueryString'] = false;
$arguments505['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments505['addQueryStringMethod'] = NULL;
$arguments505['dir'] = NULL;
$arguments505['id'] = NULL;
$arguments505['lang'] = NULL;
$arguments505['style'] = NULL;
$arguments505['accesskey'] = NULL;
$arguments505['tabindex'] = NULL;
$arguments505['onclick'] = NULL;
$arguments505['name'] = NULL;
$arguments505['rel'] = NULL;
$arguments505['rev'] = NULL;
$arguments505['target'] = NULL;
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output510 = '';

$output510 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments511 = array();
$arguments511['identifier'] = 'actions-edit-upload';
$arguments511['size'] = 'small';
$arguments511['overlay'] = NULL;
$arguments511['state'] = 'default';
$arguments511['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure512 = function() {return NULL;};

$output510 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments511, $renderChildrenClosure512, $renderingContext);

$output510 .= '
                            ';
return $output510;
};
$viewHelper513 = $self->getViewHelper('$viewHelper513', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper513->setArguments($arguments505);
$viewHelper513->setRenderingContext($renderingContext);
$viewHelper513->setRenderChildrenClosure($renderChildrenClosure509);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output301 .= $viewHelper513->initializeArgumentsAndRender();

$output301 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments514 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments515 = array();
$arguments515['key'] = 'tx_yag_controller_album.dragNdrop';
$arguments515['id'] = NULL;
$arguments515['default'] = NULL;
$arguments515['htmlEscape'] = NULL;
$arguments515['arguments'] = NULL;
$arguments515['extensionName'] = NULL;
$renderChildrenClosure516 = function() {return NULL;};
$arguments514['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments515, $renderChildrenClosure516, $renderingContext);
$arguments514['action'] = 'submitFilter';
$arguments514['controller'] = 'ItemList';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments517 = array();
$arguments517['object'] = $currentVariableContainer->getOrNull('yagContext');
$output518 = '';

$output518 .= 'albumUid:';

$output518 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments517['arguments'] = $output518;
$arguments517['nameSpace'] = '';
$renderChildrenClosure519 = function() {return NULL;};
$viewHelper520 = $self->getViewHelper('$viewHelper520', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper520->setArguments($arguments517);
$viewHelper520->setRenderingContext($renderingContext);
$viewHelper520->setRenderChildrenClosure($renderChildrenClosure519);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments514['arguments'] = $viewHelper520->initializeArgumentsAndRender();
$arguments514['class'] = 'btn';
$arguments514['additionalAttributes'] = NULL;
$arguments514['data'] = NULL;
$arguments514['extensionName'] = NULL;
$arguments514['pluginName'] = NULL;
$arguments514['pageUid'] = NULL;
$arguments514['pageType'] = 0;
$arguments514['noCache'] = false;
$arguments514['noCacheHash'] = false;
$arguments514['section'] = '';
$arguments514['format'] = '';
$arguments514['linkAccessRestrictedPages'] = false;
$arguments514['additionalParams'] = array (
);
$arguments514['absolute'] = false;
$arguments514['addQueryString'] = false;
$arguments514['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments514['addQueryStringMethod'] = NULL;
$arguments514['dir'] = NULL;
$arguments514['id'] = NULL;
$arguments514['lang'] = NULL;
$arguments514['style'] = NULL;
$arguments514['accesskey'] = NULL;
$arguments514['tabindex'] = NULL;
$arguments514['onclick'] = NULL;
$arguments514['name'] = NULL;
$arguments514['rel'] = NULL;
$arguments514['rev'] = NULL;
$arguments514['target'] = NULL;
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output522 = '';

$output522 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments523 = array();
$arguments523['identifier'] = 'actions-document-move';
$arguments523['size'] = 'small';
$arguments523['overlay'] = NULL;
$arguments523['state'] = 'default';
$arguments523['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure524 = function() {return NULL;};

$output522 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments523, $renderChildrenClosure524, $renderingContext);

$output522 .= '
                            ';
return $output522;
};
$viewHelper525 = $self->getViewHelper('$viewHelper525', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper525->setArguments($arguments514);
$viewHelper525->setRenderingContext($renderingContext);
$viewHelper525->setRenderChildrenClosure($renderChildrenClosure521);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output301 .= $viewHelper525->initializeArgumentsAndRender();

$output301 .= '
                            <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments526 = array();
$arguments526['key'] = 'tx_yag_controller_album.setAlbumAsGalleryThumb';
$arguments526['id'] = NULL;
$arguments526['default'] = NULL;
$arguments526['htmlEscape'] = NULL;
$arguments526['arguments'] = NULL;
$arguments526['extensionName'] = NULL;
$renderChildrenClosure527 = function() {return NULL;};

$output301 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments526, $renderChildrenClosure527, $renderingContext);

$output301 .= '"
                               class="set-as-gallery-thumb btn" albumUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments528 = array();
$arguments528['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.uid', $renderingContext);
$arguments528['keepQuotes'] = false;
$arguments528['encoding'] = NULL;
$arguments528['doubleEncode'] = true;
$renderChildrenClosure529 = function() {return NULL;};
$value530 = ($arguments528['value'] !== NULL ? $arguments528['value'] : $renderChildrenClosure529());

$output301 .= (!is_string($value530) ? $value530 : htmlspecialchars($value530, ($arguments528['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments528['encoding'] !== NULL ? $arguments528['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments528['doubleEncode']));

$output301 .= '">
                                <span class="t3-icon t3-icon-apps t3-icon-apps-toolbar t3-icon-toolbar-menu-shortcut">&nbsp;</span>
                            </a>
                        </div>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments531 = array();
// Rendering Boolean node
$arguments531['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.description', $renderingContext));
$arguments531['then'] = NULL;
$arguments531['else'] = NULL;
$renderChildrenClosure532 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output533 = '';

$output533 .= '
                            <div class="yag-description">
                                <div class="typo3-dimmed">
                                    <b>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments534 = array();
$arguments534['key'] = 'tx_yag_domain_model_gallery.description';
$arguments534['id'] = NULL;
$arguments534['default'] = NULL;
$arguments534['htmlEscape'] = NULL;
$arguments534['arguments'] = NULL;
$arguments534['extensionName'] = NULL;
$renderChildrenClosure535 = function() {return NULL;};

$output533 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments534, $renderChildrenClosure535, $renderingContext);

$output533 .= '
                                    </b>
                                </div>
                                <div class="typo3-dimmed">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$arguments536 = array();
$arguments536['value'] = NULL;
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments538 = array();
$arguments538['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value.description', $renderingContext);
$arguments538['keepQuotes'] = false;
$arguments538['encoding'] = NULL;
$arguments538['doubleEncode'] = true;
$renderChildrenClosure539 = function() {return NULL;};
$value540 = ($arguments538['value'] !== NULL ? $arguments538['value'] : $renderChildrenClosure539());
return (!is_string($value540) ? $value540 : htmlspecialchars($value540, ($arguments538['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments538['encoding'] !== NULL ? $arguments538['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments538['doubleEncode']));
};

$output533 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext);

$output533 .= '
                                </div>
                            </div>
                        ';
return $output533;
};

$output301 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments531, $renderChildrenClosure532, $renderingContext);

$output301 .= '
                    </td>
                </tr>
            ';
return $output301;
};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output282 .= '
            </tbody>
        </table>
        <br/>

        <div class="tx-yag-pager">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments541 = array();
$arguments541['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'albumListConfig.pagerPartial', $renderingContext);
// Rendering Array
$array542 = array();
$array542['pager'] = $currentVariableContainer->getOrNull('pager');
$array542['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
$array542['controller'] = 'Gallery';
$array542['action'] = 'index';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments543 = array();
$arguments543['key'] = 'tx_yag_domain_model_albums';
$arguments543['id'] = NULL;
$arguments543['default'] = NULL;
$arguments543['htmlEscape'] = NULL;
$arguments543['arguments'] = NULL;
$arguments543['extensionName'] = NULL;
$renderChildrenClosure544 = function() {return NULL;};
$array542['itemsText'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments543, $renderChildrenClosure544, $renderingContext);
$arguments541['arguments'] = $array542;
$arguments541['section'] = NULL;
$arguments541['optional'] = false;
$renderChildrenClosure545 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments541, $renderChildrenClosure545, $renderingContext);

$output282 .= '
        </div>
    ';
return $output282;
};
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output546 = '';

$output546 .= '
        <div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments547 = array();
$arguments547['key'] = 'tx_yag_domain_model_gallery.noItemClick';
$arguments547['id'] = NULL;
$arguments547['default'] = NULL;
$arguments547['htmlEscape'] = NULL;
$arguments547['arguments'] = NULL;
$arguments547['extensionName'] = NULL;
$renderChildrenClosure548 = function() {return NULL;};

$output546 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments547, $renderChildrenClosure548, $renderingContext);

$output546 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments549 = array();
$arguments549['controller'] = 'Album';
$arguments549['action'] = 'new';
// Rendering Array
$array550 = array();
$array550['gallery'] = $currentVariableContainer->getOrNull('gallery');
$arguments549['arguments'] = $array550;
$arguments549['additionalAttributes'] = NULL;
$arguments549['data'] = NULL;
$arguments549['extensionName'] = NULL;
$arguments549['pluginName'] = NULL;
$arguments549['pageUid'] = NULL;
$arguments549['pageType'] = 0;
$arguments549['noCache'] = false;
$arguments549['noCacheHash'] = false;
$arguments549['section'] = '';
$arguments549['format'] = '';
$arguments549['linkAccessRestrictedPages'] = false;
$arguments549['additionalParams'] = array (
);
$arguments549['absolute'] = false;
$arguments549['addQueryString'] = false;
$arguments549['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments549['addQueryStringMethod'] = NULL;
$arguments549['class'] = NULL;
$arguments549['dir'] = NULL;
$arguments549['id'] = NULL;
$arguments549['lang'] = NULL;
$arguments549['style'] = NULL;
$arguments549['title'] = NULL;
$arguments549['accesskey'] = NULL;
$arguments549['tabindex'] = NULL;
$arguments549['onclick'] = NULL;
$arguments549['name'] = NULL;
$arguments549['rel'] = NULL;
$arguments549['rev'] = NULL;
$arguments549['target'] = NULL;
$renderChildrenClosure551 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output552 = '';

$output552 .= '
                <span class="t3-icon t3-icon-actions t3-icon-actions-document t3-icon-document-new">&nbsp;</span>
                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments553 = array();
$arguments553['key'] = 'tx_yag_controller_album.addAlbum';
$arguments553['id'] = NULL;
$arguments553['default'] = NULL;
$arguments553['htmlEscape'] = NULL;
$arguments553['arguments'] = NULL;
$arguments553['extensionName'] = NULL;
$renderChildrenClosure554 = function() {return NULL;};

$output552 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments553, $renderChildrenClosure554, $renderingContext);

$output552 .= '</span>
            ';
return $output552;
};
$viewHelper555 = $self->getViewHelper('$viewHelper555', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper555->setArguments($arguments549);
$viewHelper555->setRenderingContext($renderingContext);
$viewHelper555->setRenderChildrenClosure($renderChildrenClosure551);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output546 .= $viewHelper555->initializeArgumentsAndRender();

$output546 .= '
        </div>
    ';
return $output546;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);


return $output0;
}


}
#1461666467    176977    