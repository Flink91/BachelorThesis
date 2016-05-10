<?php
class FluidCache_Yag_Gallery_action_list_3b97303a31e5d5f9bf48e14b6fd0aa6903e14dda extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section main
 */
public function section_b28b7af69320201d1cf206ebf28373980add1451(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper
$arguments1 = array();
$arguments1['templatePath'] = 'EXT:yag/Resources/Private/JSTemplates/GalleryAdminList.js';
// Rendering Array
$array2 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments3 = array();
$arguments3['controller'] = 'Ajax';
$arguments3['action'] = NULL;
$arguments3['arguments'] = array (
);
$arguments3['extensionName'] = NULL;
$arguments3['pluginName'] = NULL;
$arguments3['pageUid'] = NULL;
$arguments3['pageType'] = 0;
$arguments3['noCache'] = false;
$arguments3['noCacheHash'] = false;
$arguments3['section'] = '';
$arguments3['format'] = '';
$arguments3['linkAccessRestrictedPages'] = false;
$arguments3['additionalParams'] = array (
);
$arguments3['absolute'] = false;
$arguments3['addQueryString'] = false;
$arguments3['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments3['addQueryStringMethod'] = NULL;
$renderChildrenClosure4 = function() {return NULL;};
$viewHelper5 = $self->getViewHelper('$viewHelper5', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper5->setArguments($arguments3);
$viewHelper5->setRenderingContext($renderingContext);
$viewHelper5->setRenderChildrenClosure($renderChildrenClosure4);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$array2['ajaxBaseURL'] = $viewHelper5->initializeArgumentsAndRender();
$arguments1['arguments'] = $array2;
$arguments1['position'] = 'current';
$arguments1['type'] = 'text/javascript';
$renderChildrenClosure6 = function() {return NULL;};
$viewHelper7 = $self->getViewHelper('$viewHelper7', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper');
$viewHelper7->setArguments($arguments1);
$viewHelper7->setRenderingContext($renderingContext);
$viewHelper7->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper

$output0 .= $viewHelper7->initializeArgumentsAndRender();

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments8 = array();
// Rendering Boolean node
$arguments8['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listData'), 'count', $renderingContext));
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output10 = '';

$output10 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments11 = array();
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output13 = '';

$output13 .= '
            <h2>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments14 = array();
$arguments14['key'] = 'tx_yag_controller_gallery.listHeader';
$arguments14['id'] = NULL;
$arguments14['default'] = NULL;
$arguments14['htmlEscape'] = NULL;
$arguments14['arguments'] = NULL;
$arguments14['extensionName'] = NULL;
$renderChildrenClosure15 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
            </h2>
            <table id="sortable" class="table table-striped table-hover" cellspacing="0" cellpadding="0" border="0"
                   style="width:100%;">
                <thead>
                <tr class="t3-row-header" role="row">
                    <th colspan="4">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments16 = array();
$arguments16['action'] = 'new';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments17 = array();
$arguments17['key'] = 'tx_yag_controller_gallery.addGallery';
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['htmlEscape'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$renderChildrenClosure18 = function() {return NULL;};
$arguments16['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);
$arguments16['class'] = 'btn btn-default';
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['arguments'] = array (
);
$arguments16['controller'] = NULL;
$arguments16['extensionName'] = NULL;
$arguments16['pluginName'] = NULL;
$arguments16['pageUid'] = NULL;
$arguments16['pageType'] = 0;
$arguments16['noCache'] = false;
$arguments16['noCacheHash'] = false;
$arguments16['section'] = '';
$arguments16['format'] = '';
$arguments16['linkAccessRestrictedPages'] = false;
$arguments16['additionalParams'] = array (
);
$arguments16['absolute'] = false;
$arguments16['addQueryString'] = false;
$arguments16['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments16['addQueryStringMethod'] = NULL;
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$arguments16['name'] = NULL;
$arguments16['rel'] = NULL;
$arguments16['rev'] = NULL;
$arguments16['target'] = NULL;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments20 = array();
$arguments20['identifier'] = 'actions-document-new';
$arguments20['size'] = 'small';
$arguments20['overlay'] = NULL;
$arguments20['state'] = 'default';
$arguments20['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure21 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);
};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper22->setArguments($arguments16);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output13 .= $viewHelper22->initializeArgumentsAndRender();

$output13 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments23 = array();
$arguments23['key'] = 'tx_yag_domain_model_gallery';
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['htmlEscape'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$renderChildrenClosure24 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output13 .= '
                        (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments25 = array();
$arguments25['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'itemCount', $renderingContext);
$arguments25['keepQuotes'] = false;
$arguments25['encoding'] = NULL;
$arguments25['doubleEncode'] = true;
$renderChildrenClosure26 = function() {return NULL;};
$value27 = ($arguments25['value'] !== NULL ? $arguments25['value'] : $renderChildrenClosure26());

$output13 .= (!is_string($value27) ? $value27 : htmlspecialchars($value27, ($arguments25['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments25['encoding'] !== NULL ? $arguments25['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments25['doubleEncode']));

$output13 .= ')
                    </th>
                </tr>
                <tr class="c-headLine">
                    <td class="yag-col-thumb">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments28 = array();
$arguments28['key'] = 'tx_yag_domain_model_gallery.thumb';
$arguments28['id'] = NULL;
$arguments28['default'] = NULL;
$arguments28['htmlEscape'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$renderChildrenClosure29 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output13 .= '
                        :
                    </td>
                    <td colspan="2">
                    </td>
                </tr>
                </thead>
                <tbody class="ui-sortable">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments30 = array();
$arguments30['each'] = $currentVariableContainer->getOrNull('listData');
$arguments30['key'] = 'rowIndex';
$arguments30['as'] = 'listRow';
$arguments30['reverse'] = false;
$arguments30['iteration'] = NULL;
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output32 = '';

$output32 .= '
                    <tr id="galleryUid-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments33 = array();
$arguments33['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments33['keepQuotes'] = false;
$arguments33['encoding'] = NULL;
$arguments33['doubleEncode'] = true;
$renderChildrenClosure34 = function() {return NULL;};
$value35 = ($arguments33['value'] !== NULL ? $arguments33['value'] : $renderChildrenClosure34());

$output32 .= (!is_string($value35) ? $value35 : htmlspecialchars($value35, ($arguments33['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments33['encoding'] !== NULL ? $arguments33['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments33['doubleEncode']));

$output32 .= '" class="db_list_normal">
                        <td class="yag-col-thumb">
                            ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper
$arguments36 = array();
$arguments36['gallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value', $renderingContext);
$arguments36['additionalAttributes'] = NULL;
$arguments36['data'] = NULL;
$arguments36['galleryUid'] = NULL;
$arguments36['pageUid'] = NULL;
$arguments36['pageType'] = 0;
$arguments36['noCache'] = false;
$arguments36['noCacheHash'] = false;
$arguments36['section'] = '';
$arguments36['format'] = '';
$arguments36['class'] = NULL;
$arguments36['dir'] = NULL;
$arguments36['id'] = NULL;
$arguments36['lang'] = NULL;
$arguments36['style'] = NULL;
$arguments36['title'] = NULL;
$arguments36['accesskey'] = NULL;
$arguments36['tabindex'] = NULL;
$arguments36['onclick'] = NULL;
$arguments36['name'] = NULL;
$arguments36['rel'] = NULL;
$arguments36['rev'] = NULL;
$arguments36['target'] = NULL;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments39 = array();
// Rendering Boolean node
$arguments39['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.albumCount', $renderingContext), 0);
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output41 = '';

$output41 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments42 = array();
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output44 = '';

$output44 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments45 = array();
// Rendering Boolean node
$arguments45['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.hidden', $renderingContext));
$arguments45['then'] = NULL;
$arguments45['else'] = NULL;
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output47 = '';

$output47 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments48 = array();
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output50 = '';

$output50 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments51 = array();
$arguments51['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments51['keepQuotes'] = false;
$arguments51['encoding'] = NULL;
$arguments51['doubleEncode'] = true;
$renderChildrenClosure52 = function() {return NULL;};
$value53 = ($arguments51['value'] !== NULL ? $arguments51['value'] : $renderChildrenClosure52());

$output50 .= (!is_string($value53) ? $value53 : htmlspecialchars($value53, ($arguments51['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments51['encoding'] !== NULL ? $arguments51['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments51['doubleEncode']));

$output50 .= '-transparency"
                                                     class="tx-yag-transparency-half">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments54 = array();
$arguments54['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments54['resolutionName'] = 'thumb';
$arguments54['additionalAttributes'] = NULL;
$arguments54['data'] = NULL;
$arguments54['class'] = NULL;
$arguments54['dir'] = NULL;
$arguments54['id'] = NULL;
$arguments54['lang'] = NULL;
$arguments54['style'] = NULL;
$arguments54['title'] = NULL;
$arguments54['accesskey'] = NULL;
$arguments54['tabindex'] = NULL;
$arguments54['onclick'] = NULL;
$arguments54['alt'] = NULL;
$arguments54['centerVertical'] = NULL;
$arguments54['width'] = NULL;
$arguments54['height'] = NULL;
$arguments54['quality'] = 80;
$renderChildrenClosure55 = function() {return NULL;};
$viewHelper56 = $self->getViewHelper('$viewHelper56', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper56->setArguments($arguments54);
$viewHelper56->setRenderingContext($renderingContext);
$viewHelper56->setRenderChildrenClosure($renderChildrenClosure55);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output50 .= $viewHelper56->initializeArgumentsAndRender();

$output50 .= '
                                                </div>
                                            ';
return $output50;
};

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments57 = array();
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output59 = '';

$output59 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments60 = array();
$arguments60['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments60['keepQuotes'] = false;
$arguments60['encoding'] = NULL;
$arguments60['doubleEncode'] = true;
$renderChildrenClosure61 = function() {return NULL;};
$value62 = ($arguments60['value'] !== NULL ? $arguments60['value'] : $renderChildrenClosure61());

$output59 .= (!is_string($value62) ? $value62 : htmlspecialchars($value62, ($arguments60['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments60['encoding'] !== NULL ? $arguments60['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments60['doubleEncode']));

$output59 .= '-transparency">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments63 = array();
$arguments63['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments63['resolutionName'] = 'thumb';
$arguments63['additionalAttributes'] = NULL;
$arguments63['data'] = NULL;
$arguments63['class'] = NULL;
$arguments63['dir'] = NULL;
$arguments63['id'] = NULL;
$arguments63['lang'] = NULL;
$arguments63['style'] = NULL;
$arguments63['title'] = NULL;
$arguments63['accesskey'] = NULL;
$arguments63['tabindex'] = NULL;
$arguments63['onclick'] = NULL;
$arguments63['alt'] = NULL;
$arguments63['centerVertical'] = NULL;
$arguments63['width'] = NULL;
$arguments63['height'] = NULL;
$arguments63['quality'] = 80;
$renderChildrenClosure64 = function() {return NULL;};
$viewHelper65 = $self->getViewHelper('$viewHelper65', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper65->setArguments($arguments63);
$viewHelper65->setRenderingContext($renderingContext);
$viewHelper65->setRenderChildrenClosure($renderChildrenClosure64);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output59 .= $viewHelper65->initializeArgumentsAndRender();

$output59 .= '
                                                </div>
                                            ';
return $output59;
};

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output47 .= '
                                        ';
return $output47;
};
$arguments45['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output66 = '';

$output66 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments67 = array();
$arguments67['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments67['keepQuotes'] = false;
$arguments67['encoding'] = NULL;
$arguments67['doubleEncode'] = true;
$renderChildrenClosure68 = function() {return NULL;};
$value69 = ($arguments67['value'] !== NULL ? $arguments67['value'] : $renderChildrenClosure68());

$output66 .= (!is_string($value69) ? $value69 : htmlspecialchars($value69, ($arguments67['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments67['encoding'] !== NULL ? $arguments67['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments67['doubleEncode']));

$output66 .= '-transparency"
                                                     class="tx-yag-transparency-half">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments70 = array();
$arguments70['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments70['resolutionName'] = 'thumb';
$arguments70['additionalAttributes'] = NULL;
$arguments70['data'] = NULL;
$arguments70['class'] = NULL;
$arguments70['dir'] = NULL;
$arguments70['id'] = NULL;
$arguments70['lang'] = NULL;
$arguments70['style'] = NULL;
$arguments70['title'] = NULL;
$arguments70['accesskey'] = NULL;
$arguments70['tabindex'] = NULL;
$arguments70['onclick'] = NULL;
$arguments70['alt'] = NULL;
$arguments70['centerVertical'] = NULL;
$arguments70['width'] = NULL;
$arguments70['height'] = NULL;
$arguments70['quality'] = 80;
$renderChildrenClosure71 = function() {return NULL;};
$viewHelper72 = $self->getViewHelper('$viewHelper72', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper72->setArguments($arguments70);
$viewHelper72->setRenderingContext($renderingContext);
$viewHelper72->setRenderChildrenClosure($renderChildrenClosure71);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output66 .= $viewHelper72->initializeArgumentsAndRender();

$output66 .= '
                                                </div>
                                            ';
return $output66;
};
$arguments45['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output73 = '';

$output73 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments74 = array();
$arguments74['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments74['keepQuotes'] = false;
$arguments74['encoding'] = NULL;
$arguments74['doubleEncode'] = true;
$renderChildrenClosure75 = function() {return NULL;};
$value76 = ($arguments74['value'] !== NULL ? $arguments74['value'] : $renderChildrenClosure75());

$output73 .= (!is_string($value76) ? $value76 : htmlspecialchars($value76, ($arguments74['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments74['encoding'] !== NULL ? $arguments74['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments74['doubleEncode']));

$output73 .= '-transparency">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments77 = array();
$arguments77['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments77['resolutionName'] = 'thumb';
$arguments77['additionalAttributes'] = NULL;
$arguments77['data'] = NULL;
$arguments77['class'] = NULL;
$arguments77['dir'] = NULL;
$arguments77['id'] = NULL;
$arguments77['lang'] = NULL;
$arguments77['style'] = NULL;
$arguments77['title'] = NULL;
$arguments77['accesskey'] = NULL;
$arguments77['tabindex'] = NULL;
$arguments77['onclick'] = NULL;
$arguments77['alt'] = NULL;
$arguments77['centerVertical'] = NULL;
$arguments77['width'] = NULL;
$arguments77['height'] = NULL;
$arguments77['quality'] = 80;
$renderChildrenClosure78 = function() {return NULL;};
$viewHelper79 = $self->getViewHelper('$viewHelper79', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper79->setArguments($arguments77);
$viewHelper79->setRenderingContext($renderingContext);
$viewHelper79->setRenderChildrenClosure($renderChildrenClosure78);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output73 .= $viewHelper79->initializeArgumentsAndRender();

$output73 .= '
                                                </div>
                                            ';
return $output73;
};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
                                    ';
return $output44;
};

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments80 = array();
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output82 = '';

$output82 .= '
                                        <div>
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments83 = array();
$arguments83['key'] = 'tx_yag_controller_gallery.noAlbums';
$arguments83['id'] = NULL;
$arguments83['default'] = NULL;
$arguments83['htmlEscape'] = NULL;
$arguments83['arguments'] = NULL;
$arguments83['extensionName'] = NULL;
$renderChildrenClosure84 = function() {return NULL;};

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
                                        </div>
                                    ';
return $output82;
};

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output41 .= '
                                ';
return $output41;
};
$arguments39['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output85 = '';

$output85 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments86 = array();
// Rendering Boolean node
$arguments86['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.hidden', $renderingContext));
$arguments86['then'] = NULL;
$arguments86['else'] = NULL;
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output88 = '';

$output88 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments89 = array();
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output91 = '';

$output91 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments92 = array();
$arguments92['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments92['keepQuotes'] = false;
$arguments92['encoding'] = NULL;
$arguments92['doubleEncode'] = true;
$renderChildrenClosure93 = function() {return NULL;};
$value94 = ($arguments92['value'] !== NULL ? $arguments92['value'] : $renderChildrenClosure93());

$output91 .= (!is_string($value94) ? $value94 : htmlspecialchars($value94, ($arguments92['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments92['encoding'] !== NULL ? $arguments92['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments92['doubleEncode']));

$output91 .= '-transparency"
                                                     class="tx-yag-transparency-half">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments95 = array();
$arguments95['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments95['resolutionName'] = 'thumb';
$arguments95['additionalAttributes'] = NULL;
$arguments95['data'] = NULL;
$arguments95['class'] = NULL;
$arguments95['dir'] = NULL;
$arguments95['id'] = NULL;
$arguments95['lang'] = NULL;
$arguments95['style'] = NULL;
$arguments95['title'] = NULL;
$arguments95['accesskey'] = NULL;
$arguments95['tabindex'] = NULL;
$arguments95['onclick'] = NULL;
$arguments95['alt'] = NULL;
$arguments95['centerVertical'] = NULL;
$arguments95['width'] = NULL;
$arguments95['height'] = NULL;
$arguments95['quality'] = 80;
$renderChildrenClosure96 = function() {return NULL;};
$viewHelper97 = $self->getViewHelper('$viewHelper97', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper97->setArguments($arguments95);
$viewHelper97->setRenderingContext($renderingContext);
$viewHelper97->setRenderChildrenClosure($renderChildrenClosure96);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output91 .= $viewHelper97->initializeArgumentsAndRender();

$output91 .= '
                                                </div>
                                            ';
return $output91;
};

$output88 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output88 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments98 = array();
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output100 = '';

$output100 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments101 = array();
$arguments101['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments101['keepQuotes'] = false;
$arguments101['encoding'] = NULL;
$arguments101['doubleEncode'] = true;
$renderChildrenClosure102 = function() {return NULL;};
$value103 = ($arguments101['value'] !== NULL ? $arguments101['value'] : $renderChildrenClosure102());

$output100 .= (!is_string($value103) ? $value103 : htmlspecialchars($value103, ($arguments101['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments101['encoding'] !== NULL ? $arguments101['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments101['doubleEncode']));

$output100 .= '-transparency">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments104 = array();
$arguments104['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments104['resolutionName'] = 'thumb';
$arguments104['additionalAttributes'] = NULL;
$arguments104['data'] = NULL;
$arguments104['class'] = NULL;
$arguments104['dir'] = NULL;
$arguments104['id'] = NULL;
$arguments104['lang'] = NULL;
$arguments104['style'] = NULL;
$arguments104['title'] = NULL;
$arguments104['accesskey'] = NULL;
$arguments104['tabindex'] = NULL;
$arguments104['onclick'] = NULL;
$arguments104['alt'] = NULL;
$arguments104['centerVertical'] = NULL;
$arguments104['width'] = NULL;
$arguments104['height'] = NULL;
$arguments104['quality'] = 80;
$renderChildrenClosure105 = function() {return NULL;};
$viewHelper106 = $self->getViewHelper('$viewHelper106', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper106->setArguments($arguments104);
$viewHelper106->setRenderingContext($renderingContext);
$viewHelper106->setRenderChildrenClosure($renderChildrenClosure105);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output100 .= $viewHelper106->initializeArgumentsAndRender();

$output100 .= '
                                                </div>
                                            ';
return $output100;
};

$output88 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output88 .= '
                                        ';
return $output88;
};
$arguments86['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output107 = '';

$output107 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments108 = array();
$arguments108['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments108['keepQuotes'] = false;
$arguments108['encoding'] = NULL;
$arguments108['doubleEncode'] = true;
$renderChildrenClosure109 = function() {return NULL;};
$value110 = ($arguments108['value'] !== NULL ? $arguments108['value'] : $renderChildrenClosure109());

$output107 .= (!is_string($value110) ? $value110 : htmlspecialchars($value110, ($arguments108['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments108['encoding'] !== NULL ? $arguments108['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments108['doubleEncode']));

$output107 .= '-transparency"
                                                     class="tx-yag-transparency-half">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments111 = array();
$arguments111['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments111['resolutionName'] = 'thumb';
$arguments111['additionalAttributes'] = NULL;
$arguments111['data'] = NULL;
$arguments111['class'] = NULL;
$arguments111['dir'] = NULL;
$arguments111['id'] = NULL;
$arguments111['lang'] = NULL;
$arguments111['style'] = NULL;
$arguments111['title'] = NULL;
$arguments111['accesskey'] = NULL;
$arguments111['tabindex'] = NULL;
$arguments111['onclick'] = NULL;
$arguments111['alt'] = NULL;
$arguments111['centerVertical'] = NULL;
$arguments111['width'] = NULL;
$arguments111['height'] = NULL;
$arguments111['quality'] = 80;
$renderChildrenClosure112 = function() {return NULL;};
$viewHelper113 = $self->getViewHelper('$viewHelper113', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper113->setArguments($arguments111);
$viewHelper113->setRenderingContext($renderingContext);
$viewHelper113->setRenderChildrenClosure($renderChildrenClosure112);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output107 .= $viewHelper113->initializeArgumentsAndRender();

$output107 .= '
                                                </div>
                                            ';
return $output107;
};
$arguments86['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output114 = '';

$output114 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments115 = array();
$arguments115['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments115['keepQuotes'] = false;
$arguments115['encoding'] = NULL;
$arguments115['doubleEncode'] = true;
$renderChildrenClosure116 = function() {return NULL;};
$value117 = ($arguments115['value'] !== NULL ? $arguments115['value'] : $renderChildrenClosure116());

$output114 .= (!is_string($value117) ? $value117 : htmlspecialchars($value117, ($arguments115['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments115['encoding'] !== NULL ? $arguments115['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments115['doubleEncode']));

$output114 .= '-transparency">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments118 = array();
$arguments118['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments118['resolutionName'] = 'thumb';
$arguments118['additionalAttributes'] = NULL;
$arguments118['data'] = NULL;
$arguments118['class'] = NULL;
$arguments118['dir'] = NULL;
$arguments118['id'] = NULL;
$arguments118['lang'] = NULL;
$arguments118['style'] = NULL;
$arguments118['title'] = NULL;
$arguments118['accesskey'] = NULL;
$arguments118['tabindex'] = NULL;
$arguments118['onclick'] = NULL;
$arguments118['alt'] = NULL;
$arguments118['centerVertical'] = NULL;
$arguments118['width'] = NULL;
$arguments118['height'] = NULL;
$arguments118['quality'] = 80;
$renderChildrenClosure119 = function() {return NULL;};
$viewHelper120 = $self->getViewHelper('$viewHelper120', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper120->setArguments($arguments118);
$viewHelper120->setRenderingContext($renderingContext);
$viewHelper120->setRenderChildrenClosure($renderChildrenClosure119);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output114 .= $viewHelper120->initializeArgumentsAndRender();

$output114 .= '
                                                </div>
                                            ';
return $output114;
};

$output85 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output85 .= '
                                    ';
return $output85;
};
$arguments39['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output121 = '';

$output121 .= '
                                        <div>
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments122 = array();
$arguments122['key'] = 'tx_yag_controller_gallery.noAlbums';
$arguments122['id'] = NULL;
$arguments122['default'] = NULL;
$arguments122['htmlEscape'] = NULL;
$arguments122['arguments'] = NULL;
$arguments122['extensionName'] = NULL;
$renderChildrenClosure123 = function() {return NULL;};

$output121 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output121 .= '
                                        </div>
                                    ';
return $output121;
};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
                            ';
return $output38;
};
$viewHelper124 = $self->getViewHelper('$viewHelper124', $renderingContext, 'Tx_Yag_ViewHelpers_Link_GalleryViewHelper');
$viewHelper124->setArguments($arguments36);
$viewHelper124->setRenderingContext($renderingContext);
$viewHelper124->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper

$output32 .= $viewHelper124->initializeArgumentsAndRender();

$output32 .= '
                        </td>
                        <td class="yag-col-title">
                            <div>
                                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper
$arguments125 = array();
$arguments125['gallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value', $renderingContext);
$arguments125['additionalAttributes'] = NULL;
$arguments125['data'] = NULL;
$arguments125['galleryUid'] = NULL;
$arguments125['pageUid'] = NULL;
$arguments125['pageType'] = 0;
$arguments125['noCache'] = false;
$arguments125['noCacheHash'] = false;
$arguments125['section'] = '';
$arguments125['format'] = '';
$arguments125['class'] = NULL;
$arguments125['dir'] = NULL;
$arguments125['id'] = NULL;
$arguments125['lang'] = NULL;
$arguments125['style'] = NULL;
$arguments125['title'] = NULL;
$arguments125['accesskey'] = NULL;
$arguments125['tabindex'] = NULL;
$arguments125['onclick'] = NULL;
$arguments125['name'] = NULL;
$arguments125['rel'] = NULL;
$arguments125['rev'] = NULL;
$arguments125['target'] = NULL;
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output127 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments128 = array();
$arguments128['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.name', $renderingContext);
$arguments128['keepQuotes'] = false;
$arguments128['encoding'] = NULL;
$arguments128['doubleEncode'] = true;
$renderChildrenClosure129 = function() {return NULL;};
$value130 = ($arguments128['value'] !== NULL ? $arguments128['value'] : $renderChildrenClosure129());

$output127 .= (!is_string($value130) ? $value130 : htmlspecialchars($value130, ($arguments128['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments128['encoding'] !== NULL ? $arguments128['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments128['doubleEncode']));

$output127 .= '
                                ';
return $output127;
};
$viewHelper131 = $self->getViewHelper('$viewHelper131', $renderingContext, 'Tx_Yag_ViewHelpers_Link_GalleryViewHelper');
$viewHelper131->setArguments($arguments125);
$viewHelper131->setRenderingContext($renderingContext);
$viewHelper131->setRenderChildrenClosure($renderChildrenClosure126);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper

$output32 .= $viewHelper131->initializeArgumentsAndRender();

$output32 .= '
                                <br/>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments132 = array();
$arguments132['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.albumCount', $renderingContext);
$arguments132['keepQuotes'] = false;
$arguments132['encoding'] = NULL;
$arguments132['doubleEncode'] = true;
$renderChildrenClosure133 = function() {return NULL;};
$value134 = ($arguments132['value'] !== NULL ? $arguments132['value'] : $renderChildrenClosure133());

$output32 .= (!is_string($value134) ? $value134 : htmlspecialchars($value134, ($arguments132['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments132['encoding'] !== NULL ? $arguments132['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments132['doubleEncode']));

$output32 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments135 = array();
// Rendering Boolean node
// Rendering Array
$array136 = array();
$array136['1'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.albumCount', $renderingContext);
// Rendering Array
$array137 = array();
$array137['1'] = 1;
$arguments135['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array136, $array137);
$arguments135['then'] = NULL;
$arguments135['else'] = NULL;
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output139 = '';

$output139 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments140 = array();
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output142 = '';

$output142 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments143 = array();
$arguments143['key'] = 'tx_yag_general.album';
$arguments143['id'] = NULL;
$arguments143['default'] = NULL;
$arguments143['htmlEscape'] = NULL;
$arguments143['arguments'] = NULL;
$arguments143['extensionName'] = NULL;
$renderChildrenClosure144 = function() {return NULL;};

$output142 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output142 .= '
                                    ';
return $output142;
};

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output139 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments145 = array();
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output147 = '';

$output147 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments148 = array();
$arguments148['key'] = 'tx_yag_general.albums';
$arguments148['id'] = NULL;
$arguments148['default'] = NULL;
$arguments148['htmlEscape'] = NULL;
$arguments148['arguments'] = NULL;
$arguments148['extensionName'] = NULL;
$renderChildrenClosure149 = function() {return NULL;};

$output147 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output147 .= '
                                    ';
return $output147;
};

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output139 .= '
                                ';
return $output139;
};
$arguments135['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output150 = '';

$output150 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments151 = array();
$arguments151['key'] = 'tx_yag_general.album';
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
$arguments135['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output153 = '';

$output153 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments154 = array();
$arguments154['key'] = 'tx_yag_general.albums';
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

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments135, $renderChildrenClosure138, $renderingContext);

$output32 .= '
                                <br/>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments156 = array();
$arguments156['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.itemCount', $renderingContext);
$arguments156['keepQuotes'] = false;
$arguments156['encoding'] = NULL;
$arguments156['doubleEncode'] = true;
$renderChildrenClosure157 = function() {return NULL;};
$value158 = ($arguments156['value'] !== NULL ? $arguments156['value'] : $renderChildrenClosure157());

$output32 .= (!is_string($value158) ? $value158 : htmlspecialchars($value158, ($arguments156['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments156['encoding'] !== NULL ? $arguments156['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments156['doubleEncode']));

$output32 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments159 = array();
// Rendering Boolean node
// Rendering Array
$array160 = array();
$array160['1'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.itemCount', $renderingContext);
// Rendering Array
$array161 = array();
$array161['1'] = 1;
$arguments159['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array160, $array161);
$arguments159['then'] = NULL;
$arguments159['else'] = NULL;
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output163 = '';

$output163 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments164 = array();
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output166 = '';

$output166 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments167 = array();
$arguments167['key'] = 'tx_yag_general.image';
$arguments167['id'] = NULL;
$arguments167['default'] = NULL;
$arguments167['htmlEscape'] = NULL;
$arguments167['arguments'] = NULL;
$arguments167['extensionName'] = NULL;
$renderChildrenClosure168 = function() {return NULL;};

$output166 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output166 .= '
                                    ';
return $output166;
};

$output163 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output163 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments169 = array();
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output171 = '';

$output171 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments172 = array();
$arguments172['key'] = 'tx_yag_general.images';
$arguments172['id'] = NULL;
$arguments172['default'] = NULL;
$arguments172['htmlEscape'] = NULL;
$arguments172['arguments'] = NULL;
$arguments172['extensionName'] = NULL;
$renderChildrenClosure173 = function() {return NULL;};

$output171 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output171 .= '
                                    ';
return $output171;
};

$output163 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output163 .= '
                                ';
return $output163;
};
$arguments159['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output174 = '';

$output174 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments175 = array();
$arguments175['key'] = 'tx_yag_general.image';
$arguments175['id'] = NULL;
$arguments175['default'] = NULL;
$arguments175['htmlEscape'] = NULL;
$arguments175['arguments'] = NULL;
$arguments175['extensionName'] = NULL;
$renderChildrenClosure176 = function() {return NULL;};

$output174 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output174 .= '
                                    ';
return $output174;
};
$arguments159['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output177 = '';

$output177 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments178 = array();
$arguments178['key'] = 'tx_yag_general.images';
$arguments178['id'] = NULL;
$arguments178['default'] = NULL;
$arguments178['htmlEscape'] = NULL;
$arguments178['arguments'] = NULL;
$arguments178['extensionName'] = NULL;
$renderChildrenClosure179 = function() {return NULL;};

$output177 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);

$output177 .= '
                                    ';
return $output177;
};

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments159, $renderChildrenClosure162, $renderingContext);

$output32 .= '
                            </div>
                        </td>
                        <td class="actions icons">
                            <div class="btn-group">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments180 = array();
// Rendering ViewHelper Tx_Yag_ViewHelpers_Uri_GalleryViewHelper
$arguments181 = array();
$arguments181['gallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value', $renderingContext);
$arguments181['section'] = 'tabs-3';
$arguments181['galleryUid'] = NULL;
$arguments181['pageUid'] = NULL;
$arguments181['pageType'] = 0;
$arguments181['noCache'] = false;
$arguments181['noCacheHash'] = false;
$arguments181['format'] = '';
$renderChildrenClosure182 = function() {return NULL;};
$viewHelper183 = $self->getViewHelper('$viewHelper183', $renderingContext, 'Tx_Yag_ViewHelpers_Uri_GalleryViewHelper');
$viewHelper183->setArguments($arguments181);
$viewHelper183->setRenderingContext($renderingContext);
$viewHelper183->setRenderChildrenClosure($renderChildrenClosure182);
// End of ViewHelper Tx_Yag_ViewHelpers_Uri_GalleryViewHelper
$arguments180['uri'] = $viewHelper183->initializeArgumentsAndRender();
$arguments180['icon'] = 'actions-document-open';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments184 = array();
$arguments184['key'] = 'tx_yag_controller_gallery.editGallery';
$arguments184['id'] = NULL;
$arguments184['default'] = NULL;
$arguments184['htmlEscape'] = NULL;
$arguments184['arguments'] = NULL;
$arguments184['extensionName'] = NULL;
$renderChildrenClosure185 = function() {return NULL;};
$arguments180['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);
// Rendering Array
$array186 = array();
$array186['class'] = 'btn';
$arguments180['additionalAttributes'] = $array186;
$renderChildrenClosure187 = function() {return NULL;};

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments180, $renderChildrenClosure187, $renderingContext);

$output32 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments188 = array();
// Rendering Boolean node
$arguments188['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.hidden', $renderingContext));
$arguments188['then'] = NULL;
$arguments188['else'] = NULL;
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output190 = '';

$output190 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments191 = array();
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output193 = '';

$output193 .= '
                                        <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments194 = array();
$arguments194['key'] = 'tx_yag_controller_gallery.unhideGallery';
$arguments194['id'] = NULL;
$arguments194['default'] = NULL;
$arguments194['htmlEscape'] = NULL;
$arguments194['arguments'] = NULL;
$arguments194['extensionName'] = NULL;
$renderChildrenClosure195 = function() {return NULL;};

$output193 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output193 .= '"
                                           id="unhide-gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments196 = array();
$arguments196['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments196['keepQuotes'] = false;
$arguments196['encoding'] = NULL;
$arguments196['doubleEncode'] = true;
$renderChildrenClosure197 = function() {return NULL;};
$value198 = ($arguments196['value'] !== NULL ? $arguments196['value'] : $renderChildrenClosure197());

$output193 .= (!is_string($value198) ? $value198 : htmlspecialchars($value198, ($arguments196['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments196['encoding'] !== NULL ? $arguments196['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments196['doubleEncode']));

$output193 .= '" class="unhide-gallery btn"
                                           galleryUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments199 = array();
$arguments199['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments199['keepQuotes'] = false;
$arguments199['encoding'] = NULL;
$arguments199['doubleEncode'] = true;
$renderChildrenClosure200 = function() {return NULL;};
$value201 = ($arguments199['value'] !== NULL ? $arguments199['value'] : $renderChildrenClosure200());

$output193 .= (!is_string($value201) ? $value201 : htmlspecialchars($value201, ($arguments199['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments199['encoding'] !== NULL ? $arguments199['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments199['doubleEncode']));

$output193 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments202 = array();
$arguments202['identifier'] = 'actions-edit-hide';
$arguments202['size'] = 'small';
$arguments202['overlay'] = NULL;
$arguments202['state'] = 'default';
$arguments202['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure203 = function() {return NULL;};

$output193 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output193 .= '
                                        </a>
                                    ';
return $output193;
};

$output190 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output190 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments204 = array();
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output206 = '';

$output206 .= '
                                        <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments207 = array();
$arguments207['key'] = 'tx_yag_controller_gallery.hideGallery';
$arguments207['id'] = NULL;
$arguments207['default'] = NULL;
$arguments207['htmlEscape'] = NULL;
$arguments207['arguments'] = NULL;
$arguments207['extensionName'] = NULL;
$renderChildrenClosure208 = function() {return NULL;};

$output206 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output206 .= '"
                                           id="hide-gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments209 = array();
$arguments209['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments209['keepQuotes'] = false;
$arguments209['encoding'] = NULL;
$arguments209['doubleEncode'] = true;
$renderChildrenClosure210 = function() {return NULL;};
$value211 = ($arguments209['value'] !== NULL ? $arguments209['value'] : $renderChildrenClosure210());

$output206 .= (!is_string($value211) ? $value211 : htmlspecialchars($value211, ($arguments209['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments209['encoding'] !== NULL ? $arguments209['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments209['doubleEncode']));

$output206 .= '" class="hide-gallery btn"
                                           galleryUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments212 = array();
$arguments212['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments212['keepQuotes'] = false;
$arguments212['encoding'] = NULL;
$arguments212['doubleEncode'] = true;
$renderChildrenClosure213 = function() {return NULL;};
$value214 = ($arguments212['value'] !== NULL ? $arguments212['value'] : $renderChildrenClosure213());

$output206 .= (!is_string($value214) ? $value214 : htmlspecialchars($value214, ($arguments212['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments212['encoding'] !== NULL ? $arguments212['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments212['doubleEncode']));

$output206 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments215 = array();
$arguments215['identifier'] = 'actions-edit-unhide';
$arguments215['size'] = 'small';
$arguments215['overlay'] = NULL;
$arguments215['state'] = 'default';
$arguments215['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure216 = function() {return NULL;};

$output206 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output206 .= '
                                        </a>
                                    ';
return $output206;
};

$output190 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output190 .= '
                                ';
return $output190;
};
$arguments188['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output217 = '';

$output217 .= '
                                        <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments218 = array();
$arguments218['key'] = 'tx_yag_controller_gallery.unhideGallery';
$arguments218['id'] = NULL;
$arguments218['default'] = NULL;
$arguments218['htmlEscape'] = NULL;
$arguments218['arguments'] = NULL;
$arguments218['extensionName'] = NULL;
$renderChildrenClosure219 = function() {return NULL;};

$output217 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output217 .= '"
                                           id="unhide-gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments220 = array();
$arguments220['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments220['keepQuotes'] = false;
$arguments220['encoding'] = NULL;
$arguments220['doubleEncode'] = true;
$renderChildrenClosure221 = function() {return NULL;};
$value222 = ($arguments220['value'] !== NULL ? $arguments220['value'] : $renderChildrenClosure221());

$output217 .= (!is_string($value222) ? $value222 : htmlspecialchars($value222, ($arguments220['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments220['encoding'] !== NULL ? $arguments220['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments220['doubleEncode']));

$output217 .= '" class="unhide-gallery btn"
                                           galleryUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments223 = array();
$arguments223['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments223['keepQuotes'] = false;
$arguments223['encoding'] = NULL;
$arguments223['doubleEncode'] = true;
$renderChildrenClosure224 = function() {return NULL;};
$value225 = ($arguments223['value'] !== NULL ? $arguments223['value'] : $renderChildrenClosure224());

$output217 .= (!is_string($value225) ? $value225 : htmlspecialchars($value225, ($arguments223['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments223['encoding'] !== NULL ? $arguments223['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments223['doubleEncode']));

$output217 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments226 = array();
$arguments226['identifier'] = 'actions-edit-hide';
$arguments226['size'] = 'small';
$arguments226['overlay'] = NULL;
$arguments226['state'] = 'default';
$arguments226['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure227 = function() {return NULL;};

$output217 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output217 .= '
                                        </a>
                                    ';
return $output217;
};
$arguments188['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output228 = '';

$output228 .= '
                                        <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments229 = array();
$arguments229['key'] = 'tx_yag_controller_gallery.hideGallery';
$arguments229['id'] = NULL;
$arguments229['default'] = NULL;
$arguments229['htmlEscape'] = NULL;
$arguments229['arguments'] = NULL;
$arguments229['extensionName'] = NULL;
$renderChildrenClosure230 = function() {return NULL;};

$output228 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output228 .= '"
                                           id="hide-gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments231 = array();
$arguments231['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments231['keepQuotes'] = false;
$arguments231['encoding'] = NULL;
$arguments231['doubleEncode'] = true;
$renderChildrenClosure232 = function() {return NULL;};
$value233 = ($arguments231['value'] !== NULL ? $arguments231['value'] : $renderChildrenClosure232());

$output228 .= (!is_string($value233) ? $value233 : htmlspecialchars($value233, ($arguments231['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments231['encoding'] !== NULL ? $arguments231['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments231['doubleEncode']));

$output228 .= '" class="hide-gallery btn"
                                           galleryUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments234 = array();
$arguments234['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments234['keepQuotes'] = false;
$arguments234['encoding'] = NULL;
$arguments234['doubleEncode'] = true;
$renderChildrenClosure235 = function() {return NULL;};
$value236 = ($arguments234['value'] !== NULL ? $arguments234['value'] : $renderChildrenClosure235());

$output228 .= (!is_string($value236) ? $value236 : htmlspecialchars($value236, ($arguments234['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments234['encoding'] !== NULL ? $arguments234['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments234['doubleEncode']));

$output228 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments237 = array();
$arguments237['identifier'] = 'actions-edit-unhide';
$arguments237['size'] = 'small';
$arguments237['overlay'] = NULL;
$arguments237['state'] = 'default';
$arguments237['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure238 = function() {return NULL;};

$output228 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output228 .= '
                                        </a>
                                    ';
return $output228;
};

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output32 .= '

                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments239 = array();
$arguments239['uri'] = '#';
$arguments239['icon'] = 'actions-edit-delete';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments240 = array();
$arguments240['key'] = 'tx_yag_controller_gallery.deleteGallery';
$arguments240['id'] = NULL;
$arguments240['default'] = NULL;
$arguments240['htmlEscape'] = NULL;
$arguments240['arguments'] = NULL;
$arguments240['extensionName'] = NULL;
$renderChildrenClosure241 = function() {return NULL;};
$arguments239['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);
// Rendering Array
$array242 = array();
$array242['class'] = 'gallery-linkbar-delete btn';
$array242['galleryUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments239['additionalAttributes'] = $array242;
$renderChildrenClosure243 = function() {return NULL;};

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments239, $renderChildrenClosure243, $renderingContext);

$output32 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments244 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments245 = array();
$arguments245['action'] = 'new';
$arguments245['controller'] = 'Album';
// Rendering Array
$array246 = array();
$array246['gallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value', $renderingContext);
$arguments245['arguments'] = $array246;
$arguments245['extensionName'] = NULL;
$arguments245['pluginName'] = NULL;
$arguments245['pageUid'] = NULL;
$arguments245['pageType'] = 0;
$arguments245['noCache'] = false;
$arguments245['noCacheHash'] = false;
$arguments245['section'] = '';
$arguments245['format'] = '';
$arguments245['linkAccessRestrictedPages'] = false;
$arguments245['additionalParams'] = array (
);
$arguments245['absolute'] = false;
$arguments245['addQueryString'] = false;
$arguments245['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments245['addQueryStringMethod'] = NULL;
$renderChildrenClosure247 = function() {return NULL;};
$viewHelper248 = $self->getViewHelper('$viewHelper248', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper248->setArguments($arguments245);
$viewHelper248->setRenderingContext($renderingContext);
$viewHelper248->setRenderChildrenClosure($renderChildrenClosure247);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments244['uri'] = $viewHelper248->initializeArgumentsAndRender();
$arguments244['icon'] = 'actions-document-new';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments249 = array();
$arguments249['key'] = 'tx_yag_controller_album.addAlbum';
$arguments249['id'] = NULL;
$arguments249['default'] = NULL;
$arguments249['htmlEscape'] = NULL;
$arguments249['arguments'] = NULL;
$arguments249['extensionName'] = NULL;
$renderChildrenClosure250 = function() {return NULL;};
$arguments244['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);
// Rendering Array
$array251 = array();
$array251['class'] = 'btn';
$arguments244['additionalAttributes'] = $array251;
$renderChildrenClosure252 = function() {return NULL;};

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments244, $renderChildrenClosure252, $renderingContext);

$output32 .= '

                            </div>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments253 = array();
// Rendering Boolean node
$arguments253['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.description', $renderingContext));
$arguments253['then'] = NULL;
$arguments253['else'] = NULL;
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output255 = '';

$output255 .= '
                                <div class="yag-description">
                                    <div class="typo3-dimmed">
                                        <b>
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments256 = array();
$arguments256['key'] = 'tx_yag_domain_model_gallery.description';
$arguments256['id'] = NULL;
$arguments256['default'] = NULL;
$arguments256['htmlEscape'] = NULL;
$arguments256['arguments'] = NULL;
$arguments256['extensionName'] = NULL;
$renderChildrenClosure257 = function() {return NULL;};

$output255 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);

$output255 .= '
                                        </b>
                                    </div>
                                    <div class="typo3-dimmed">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$arguments258 = array();
$arguments258['value'] = NULL;
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments260 = array();
$arguments260['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.description', $renderingContext);
$arguments260['keepQuotes'] = false;
$arguments260['encoding'] = NULL;
$arguments260['doubleEncode'] = true;
$renderChildrenClosure261 = function() {return NULL;};
$value262 = ($arguments260['value'] !== NULL ? $arguments260['value'] : $renderChildrenClosure261());
return (!is_string($value262) ? $value262 : htmlspecialchars($value262, ($arguments260['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments260['encoding'] !== NULL ? $arguments260['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments260['doubleEncode']));
};

$output255 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext);

$output255 .= '
                                    </div>
                                </div>
                            ';
return $output255;
};

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output32 .= '
                        </td>
                    </tr>
                ';
return $output32;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output13 .= '
                </tbody>
            </table>
        ';
return $output13;
};

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments263 = array();
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output265 = '';

$output265 .= '

            <div>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments266 = array();
// Rendering Boolean node
$arguments266['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pidDetector'), 'currentPageIsNoYagPage', $renderingContext));
$arguments266['then'] = NULL;
$arguments266['else'] = NULL;
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output268 = '';

$output268 .= '
                    <div class="tx-extbase-flash-message">
                        <div class="alert alert-info">
                            <h4>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments269 = array();
$arguments269['key'] = 'tx_yag_controller_gallery.notAYAGFolderHeader';
$arguments269['id'] = NULL;
$arguments269['default'] = NULL;
$arguments269['htmlEscape'] = NULL;
$arguments269['arguments'] = NULL;
$arguments269['extensionName'] = NULL;
$renderChildrenClosure270 = function() {return NULL;};

$output268 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output268 .= '
                            </h4>
                            <div class="alert-body">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments271 = array();
$arguments271['key'] = 'tx_yag_controller_gallery.selectPageWithYag';
$arguments271['id'] = NULL;
$arguments271['default'] = NULL;
$arguments271['htmlEscape'] = NULL;
$arguments271['arguments'] = NULL;
$arguments271['extensionName'] = NULL;
$renderChildrenClosure272 = function() {return NULL;};

$output268 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext);

$output268 .= '

                                <select id="yag_pid_selector"
                                        onchange="jumpToUrl(this.options[this.selectedIndex].value, this);">
                                    <option value="">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments273 = array();
$arguments273['key'] = 'tx_yag_controller_gallery.selectAPage';
$arguments273['id'] = NULL;
$arguments273['default'] = NULL;
$arguments273['htmlEscape'] = NULL;
$arguments273['arguments'] = NULL;
$arguments273['extensionName'] = NULL;
$renderChildrenClosure274 = function() {return NULL;};

$output268 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext);

$output268 .= '
                                    </option>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments275 = array();
$arguments275['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pidDetector'), 'pageRecords', $renderingContext);
$arguments275['as'] = 'page';
$arguments275['key'] = '';
$arguments275['reverse'] = false;
$arguments275['iteration'] = NULL;
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output277 = '';

$output277 .= '
                                        <option value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments278 = array();
$arguments278['controller'] = 'Gallery';
$arguments278['action'] = 'list';
// Rendering Array
$array279 = array();
$array279['id'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'uid', $renderingContext);
$arguments278['additionalParams'] = $array279;
$arguments278['arguments'] = array (
);
$arguments278['extensionName'] = NULL;
$arguments278['pluginName'] = NULL;
$arguments278['pageUid'] = NULL;
$arguments278['pageType'] = 0;
$arguments278['noCache'] = false;
$arguments278['noCacheHash'] = false;
$arguments278['section'] = '';
$arguments278['format'] = '';
$arguments278['linkAccessRestrictedPages'] = false;
$arguments278['absolute'] = false;
$arguments278['addQueryString'] = false;
$arguments278['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments278['addQueryStringMethod'] = NULL;
$renderChildrenClosure280 = function() {return NULL;};
$viewHelper281 = $self->getViewHelper('$viewHelper281', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper281->setArguments($arguments278);
$viewHelper281->setRenderingContext($renderingContext);
$viewHelper281->setRenderChildrenClosure($renderChildrenClosure280);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output277 .= $viewHelper281->initializeArgumentsAndRender();

$output277 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments282 = array();
$arguments282['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'title', $renderingContext);
$arguments282['keepQuotes'] = false;
$arguments282['encoding'] = NULL;
$arguments282['doubleEncode'] = true;
$renderChildrenClosure283 = function() {return NULL;};
$value284 = ($arguments282['value'] !== NULL ? $arguments282['value'] : $renderChildrenClosure283());

$output277 .= (!is_string($value284) ? $value284 : htmlspecialchars($value284, ($arguments282['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments282['encoding'] !== NULL ? $arguments282['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments282['doubleEncode']));

$output277 .= '
                                        </option>
                                    ';
return $output277;
};

$output268 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output268 .= '
                                </select><br/><br/>

                                <p>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments285 = array();
$arguments285['controller'] = 'Backend';
$arguments285['action'] = 'markPageAsYagSysFolder';
// Rendering Array
$array286 = array();
$array286['pid'] = $currentVariableContainer->getOrNull('currentPid');
$arguments285['arguments'] = $array286;
$arguments285['additionalAttributes'] = NULL;
$arguments285['data'] = NULL;
$arguments285['extensionName'] = NULL;
$arguments285['pluginName'] = NULL;
$arguments285['pageUid'] = NULL;
$arguments285['pageType'] = 0;
$arguments285['noCache'] = false;
$arguments285['noCacheHash'] = false;
$arguments285['section'] = '';
$arguments285['format'] = '';
$arguments285['linkAccessRestrictedPages'] = false;
$arguments285['additionalParams'] = array (
);
$arguments285['absolute'] = false;
$arguments285['addQueryString'] = false;
$arguments285['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments285['addQueryStringMethod'] = NULL;
$arguments285['class'] = NULL;
$arguments285['dir'] = NULL;
$arguments285['id'] = NULL;
$arguments285['lang'] = NULL;
$arguments285['style'] = NULL;
$arguments285['title'] = NULL;
$arguments285['accesskey'] = NULL;
$arguments285['tabindex'] = NULL;
$arguments285['onclick'] = NULL;
$arguments285['name'] = NULL;
$arguments285['rel'] = NULL;
$arguments285['rev'] = NULL;
$arguments285['target'] = NULL;
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output288 = '';

$output288 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments289 = array();
$arguments289['key'] = 'tx_yag_controller_gallery.markAsYagSysfolder';
$arguments289['id'] = NULL;
$arguments289['default'] = NULL;
$arguments289['htmlEscape'] = NULL;
$arguments289['arguments'] = NULL;
$arguments289['extensionName'] = NULL;
$renderChildrenClosure290 = function() {return NULL;};

$output288 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext);

$output288 .= '
                                    ';
return $output288;
};
$viewHelper291 = $self->getViewHelper('$viewHelper291', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper291->setArguments($arguments285);
$viewHelper291->setRenderingContext($renderingContext);
$viewHelper291->setRenderChildrenClosure($renderChildrenClosure287);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output268 .= $viewHelper291->initializeArgumentsAndRender();

$output268 .= '
                                </p>
                            </div>
                        </div>
                    </div>
                ';
return $output268;
};

$output265 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);

$output265 .= '

                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments292 = array();
// Rendering Boolean node
$arguments292['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pidDetector'), 'currentPageIsYagPage', $renderingContext));
$arguments292['then'] = NULL;
$arguments292['else'] = NULL;
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output294 = '';

$output294 .= '
                    <div class="tx-extbase-flash-message">
                        <div class="alert alert-info">
                            <h4>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments295 = array();
$arguments295['key'] = 'tx_yag_controller_gallery.createYagRecords';
$arguments295['id'] = NULL;
$arguments295['default'] = NULL;
$arguments295['htmlEscape'] = NULL;
$arguments295['arguments'] = NULL;
$arguments295['extensionName'] = NULL;
$renderChildrenClosure296 = function() {return NULL;};

$output294 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext);

$output294 .= '
                            </h4>
                            <div class="alert-body">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments297 = array();
$arguments297['key'] = 'tx_yag_domain_model_gallery.noGalleryClick';
$arguments297['id'] = NULL;
$arguments297['default'] = NULL;
$arguments297['htmlEscape'] = NULL;
$arguments297['arguments'] = NULL;
$arguments297['extensionName'] = NULL;
$renderChildrenClosure298 = function() {return NULL;};

$output294 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);

$output294 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments299 = array();
$arguments299['controller'] = 'Gallery';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments300 = array();
$arguments300['key'] = 'tx_yag_controller_gallery.addGallery';
$arguments300['id'] = NULL;
$arguments300['default'] = NULL;
$arguments300['htmlEscape'] = NULL;
$arguments300['arguments'] = NULL;
$arguments300['extensionName'] = NULL;
$renderChildrenClosure301 = function() {return NULL;};
$arguments299['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext);
$arguments299['action'] = 'new';
$arguments299['additionalAttributes'] = NULL;
$arguments299['data'] = NULL;
$arguments299['arguments'] = array (
);
$arguments299['extensionName'] = NULL;
$arguments299['pluginName'] = NULL;
$arguments299['pageUid'] = NULL;
$arguments299['pageType'] = 0;
$arguments299['noCache'] = false;
$arguments299['noCacheHash'] = false;
$arguments299['section'] = '';
$arguments299['format'] = '';
$arguments299['linkAccessRestrictedPages'] = false;
$arguments299['additionalParams'] = array (
);
$arguments299['absolute'] = false;
$arguments299['addQueryString'] = false;
$arguments299['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments299['addQueryStringMethod'] = NULL;
$arguments299['class'] = NULL;
$arguments299['dir'] = NULL;
$arguments299['id'] = NULL;
$arguments299['lang'] = NULL;
$arguments299['style'] = NULL;
$arguments299['accesskey'] = NULL;
$arguments299['tabindex'] = NULL;
$arguments299['onclick'] = NULL;
$arguments299['name'] = NULL;
$arguments299['rel'] = NULL;
$arguments299['rev'] = NULL;
$arguments299['target'] = NULL;
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output303 = '';

$output303 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments304 = array();
$arguments304['identifier'] = 'actions-document-new';
$arguments304['size'] = 'small';
$arguments304['overlay'] = NULL;
$arguments304['state'] = 'default';
$arguments304['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure305 = function() {return NULL;};

$output303 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext);

$output303 .= '
                                    <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments306 = array();
$arguments306['key'] = 'tx_yag_controller_gallery.addGallery';
$arguments306['id'] = NULL;
$arguments306['default'] = NULL;
$arguments306['htmlEscape'] = NULL;
$arguments306['arguments'] = NULL;
$arguments306['extensionName'] = NULL;
$renderChildrenClosure307 = function() {return NULL;};

$output303 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output303 .= '</span>
                                ';
return $output303;
};
$viewHelper308 = $self->getViewHelper('$viewHelper308', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper308->setArguments($arguments299);
$viewHelper308->setRenderingContext($renderingContext);
$viewHelper308->setRenderChildrenClosure($renderChildrenClosure302);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output294 .= $viewHelper308->initializeArgumentsAndRender();

$output294 .= '
                            </div>
                        </div>
                    </div>
                ';
return $output294;
};

$output265 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);

$output265 .= '
            </div>
        ';
return $output265;
};

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output10 .= '
    ';
return $output10;
};
$arguments8['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output309 = '';

$output309 .= '
            <h2>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments310 = array();
$arguments310['key'] = 'tx_yag_controller_gallery.listHeader';
$arguments310['id'] = NULL;
$arguments310['default'] = NULL;
$arguments310['htmlEscape'] = NULL;
$arguments310['arguments'] = NULL;
$arguments310['extensionName'] = NULL;
$renderChildrenClosure311 = function() {return NULL;};

$output309 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext);

$output309 .= '
            </h2>
            <table id="sortable" class="table table-striped table-hover" cellspacing="0" cellpadding="0" border="0"
                   style="width:100%;">
                <thead>
                <tr class="t3-row-header" role="row">
                    <th colspan="4">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments312 = array();
$arguments312['action'] = 'new';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments313 = array();
$arguments313['key'] = 'tx_yag_controller_gallery.addGallery';
$arguments313['id'] = NULL;
$arguments313['default'] = NULL;
$arguments313['htmlEscape'] = NULL;
$arguments313['arguments'] = NULL;
$arguments313['extensionName'] = NULL;
$renderChildrenClosure314 = function() {return NULL;};
$arguments312['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);
$arguments312['class'] = 'btn btn-default';
$arguments312['additionalAttributes'] = NULL;
$arguments312['data'] = NULL;
$arguments312['arguments'] = array (
);
$arguments312['controller'] = NULL;
$arguments312['extensionName'] = NULL;
$arguments312['pluginName'] = NULL;
$arguments312['pageUid'] = NULL;
$arguments312['pageType'] = 0;
$arguments312['noCache'] = false;
$arguments312['noCacheHash'] = false;
$arguments312['section'] = '';
$arguments312['format'] = '';
$arguments312['linkAccessRestrictedPages'] = false;
$arguments312['additionalParams'] = array (
);
$arguments312['absolute'] = false;
$arguments312['addQueryString'] = false;
$arguments312['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments312['addQueryStringMethod'] = NULL;
$arguments312['dir'] = NULL;
$arguments312['id'] = NULL;
$arguments312['lang'] = NULL;
$arguments312['style'] = NULL;
$arguments312['accesskey'] = NULL;
$arguments312['tabindex'] = NULL;
$arguments312['onclick'] = NULL;
$arguments312['name'] = NULL;
$arguments312['rel'] = NULL;
$arguments312['rev'] = NULL;
$arguments312['target'] = NULL;
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments316 = array();
$arguments316['identifier'] = 'actions-document-new';
$arguments316['size'] = 'small';
$arguments316['overlay'] = NULL;
$arguments316['state'] = 'default';
$arguments316['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure317 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);
};
$viewHelper318 = $self->getViewHelper('$viewHelper318', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper318->setArguments($arguments312);
$viewHelper318->setRenderingContext($renderingContext);
$viewHelper318->setRenderChildrenClosure($renderChildrenClosure315);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output309 .= $viewHelper318->initializeArgumentsAndRender();

$output309 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments319 = array();
$arguments319['key'] = 'tx_yag_domain_model_gallery';
$arguments319['id'] = NULL;
$arguments319['default'] = NULL;
$arguments319['htmlEscape'] = NULL;
$arguments319['arguments'] = NULL;
$arguments319['extensionName'] = NULL;
$renderChildrenClosure320 = function() {return NULL;};

$output309 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext);

$output309 .= '
                        (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments321 = array();
$arguments321['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'itemCount', $renderingContext);
$arguments321['keepQuotes'] = false;
$arguments321['encoding'] = NULL;
$arguments321['doubleEncode'] = true;
$renderChildrenClosure322 = function() {return NULL;};
$value323 = ($arguments321['value'] !== NULL ? $arguments321['value'] : $renderChildrenClosure322());

$output309 .= (!is_string($value323) ? $value323 : htmlspecialchars($value323, ($arguments321['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments321['encoding'] !== NULL ? $arguments321['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments321['doubleEncode']));

$output309 .= ')
                    </th>
                </tr>
                <tr class="c-headLine">
                    <td class="yag-col-thumb">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments324 = array();
$arguments324['key'] = 'tx_yag_domain_model_gallery.thumb';
$arguments324['id'] = NULL;
$arguments324['default'] = NULL;
$arguments324['htmlEscape'] = NULL;
$arguments324['arguments'] = NULL;
$arguments324['extensionName'] = NULL;
$renderChildrenClosure325 = function() {return NULL;};

$output309 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);

$output309 .= '
                        :
                    </td>
                    <td colspan="2">
                    </td>
                </tr>
                </thead>
                <tbody class="ui-sortable">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments326 = array();
$arguments326['each'] = $currentVariableContainer->getOrNull('listData');
$arguments326['key'] = 'rowIndex';
$arguments326['as'] = 'listRow';
$arguments326['reverse'] = false;
$arguments326['iteration'] = NULL;
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output328 = '';

$output328 .= '
                    <tr id="galleryUid-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments329 = array();
$arguments329['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments329['keepQuotes'] = false;
$arguments329['encoding'] = NULL;
$arguments329['doubleEncode'] = true;
$renderChildrenClosure330 = function() {return NULL;};
$value331 = ($arguments329['value'] !== NULL ? $arguments329['value'] : $renderChildrenClosure330());

$output328 .= (!is_string($value331) ? $value331 : htmlspecialchars($value331, ($arguments329['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments329['encoding'] !== NULL ? $arguments329['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments329['doubleEncode']));

$output328 .= '" class="db_list_normal">
                        <td class="yag-col-thumb">
                            ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper
$arguments332 = array();
$arguments332['gallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value', $renderingContext);
$arguments332['additionalAttributes'] = NULL;
$arguments332['data'] = NULL;
$arguments332['galleryUid'] = NULL;
$arguments332['pageUid'] = NULL;
$arguments332['pageType'] = 0;
$arguments332['noCache'] = false;
$arguments332['noCacheHash'] = false;
$arguments332['section'] = '';
$arguments332['format'] = '';
$arguments332['class'] = NULL;
$arguments332['dir'] = NULL;
$arguments332['id'] = NULL;
$arguments332['lang'] = NULL;
$arguments332['style'] = NULL;
$arguments332['title'] = NULL;
$arguments332['accesskey'] = NULL;
$arguments332['tabindex'] = NULL;
$arguments332['onclick'] = NULL;
$arguments332['name'] = NULL;
$arguments332['rel'] = NULL;
$arguments332['rev'] = NULL;
$arguments332['target'] = NULL;
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output334 = '';

$output334 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments335 = array();
// Rendering Boolean node
$arguments335['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.albumCount', $renderingContext), 0);
$arguments335['then'] = NULL;
$arguments335['else'] = NULL;
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output337 = '';

$output337 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments338 = array();
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output340 = '';

$output340 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments341 = array();
// Rendering Boolean node
$arguments341['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.hidden', $renderingContext));
$arguments341['then'] = NULL;
$arguments341['else'] = NULL;
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output343 = '';

$output343 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments344 = array();
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output346 = '';

$output346 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments347 = array();
$arguments347['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments347['keepQuotes'] = false;
$arguments347['encoding'] = NULL;
$arguments347['doubleEncode'] = true;
$renderChildrenClosure348 = function() {return NULL;};
$value349 = ($arguments347['value'] !== NULL ? $arguments347['value'] : $renderChildrenClosure348());

$output346 .= (!is_string($value349) ? $value349 : htmlspecialchars($value349, ($arguments347['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments347['encoding'] !== NULL ? $arguments347['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments347['doubleEncode']));

$output346 .= '-transparency"
                                                     class="tx-yag-transparency-half">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments350 = array();
$arguments350['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments350['resolutionName'] = 'thumb';
$arguments350['additionalAttributes'] = NULL;
$arguments350['data'] = NULL;
$arguments350['class'] = NULL;
$arguments350['dir'] = NULL;
$arguments350['id'] = NULL;
$arguments350['lang'] = NULL;
$arguments350['style'] = NULL;
$arguments350['title'] = NULL;
$arguments350['accesskey'] = NULL;
$arguments350['tabindex'] = NULL;
$arguments350['onclick'] = NULL;
$arguments350['alt'] = NULL;
$arguments350['centerVertical'] = NULL;
$arguments350['width'] = NULL;
$arguments350['height'] = NULL;
$arguments350['quality'] = 80;
$renderChildrenClosure351 = function() {return NULL;};
$viewHelper352 = $self->getViewHelper('$viewHelper352', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper352->setArguments($arguments350);
$viewHelper352->setRenderingContext($renderingContext);
$viewHelper352->setRenderChildrenClosure($renderChildrenClosure351);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output346 .= $viewHelper352->initializeArgumentsAndRender();

$output346 .= '
                                                </div>
                                            ';
return $output346;
};

$output343 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext);

$output343 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments353 = array();
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output355 = '';

$output355 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments356 = array();
$arguments356['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments356['keepQuotes'] = false;
$arguments356['encoding'] = NULL;
$arguments356['doubleEncode'] = true;
$renderChildrenClosure357 = function() {return NULL;};
$value358 = ($arguments356['value'] !== NULL ? $arguments356['value'] : $renderChildrenClosure357());

$output355 .= (!is_string($value358) ? $value358 : htmlspecialchars($value358, ($arguments356['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments356['encoding'] !== NULL ? $arguments356['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments356['doubleEncode']));

$output355 .= '-transparency">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments359 = array();
$arguments359['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments359['resolutionName'] = 'thumb';
$arguments359['additionalAttributes'] = NULL;
$arguments359['data'] = NULL;
$arguments359['class'] = NULL;
$arguments359['dir'] = NULL;
$arguments359['id'] = NULL;
$arguments359['lang'] = NULL;
$arguments359['style'] = NULL;
$arguments359['title'] = NULL;
$arguments359['accesskey'] = NULL;
$arguments359['tabindex'] = NULL;
$arguments359['onclick'] = NULL;
$arguments359['alt'] = NULL;
$arguments359['centerVertical'] = NULL;
$arguments359['width'] = NULL;
$arguments359['height'] = NULL;
$arguments359['quality'] = 80;
$renderChildrenClosure360 = function() {return NULL;};
$viewHelper361 = $self->getViewHelper('$viewHelper361', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper361->setArguments($arguments359);
$viewHelper361->setRenderingContext($renderingContext);
$viewHelper361->setRenderChildrenClosure($renderChildrenClosure360);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output355 .= $viewHelper361->initializeArgumentsAndRender();

$output355 .= '
                                                </div>
                                            ';
return $output355;
};

$output343 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output343 .= '
                                        ';
return $output343;
};
$arguments341['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output362 = '';

$output362 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments363 = array();
$arguments363['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments363['keepQuotes'] = false;
$arguments363['encoding'] = NULL;
$arguments363['doubleEncode'] = true;
$renderChildrenClosure364 = function() {return NULL;};
$value365 = ($arguments363['value'] !== NULL ? $arguments363['value'] : $renderChildrenClosure364());

$output362 .= (!is_string($value365) ? $value365 : htmlspecialchars($value365, ($arguments363['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments363['encoding'] !== NULL ? $arguments363['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments363['doubleEncode']));

$output362 .= '-transparency"
                                                     class="tx-yag-transparency-half">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments366 = array();
$arguments366['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments366['resolutionName'] = 'thumb';
$arguments366['additionalAttributes'] = NULL;
$arguments366['data'] = NULL;
$arguments366['class'] = NULL;
$arguments366['dir'] = NULL;
$arguments366['id'] = NULL;
$arguments366['lang'] = NULL;
$arguments366['style'] = NULL;
$arguments366['title'] = NULL;
$arguments366['accesskey'] = NULL;
$arguments366['tabindex'] = NULL;
$arguments366['onclick'] = NULL;
$arguments366['alt'] = NULL;
$arguments366['centerVertical'] = NULL;
$arguments366['width'] = NULL;
$arguments366['height'] = NULL;
$arguments366['quality'] = 80;
$renderChildrenClosure367 = function() {return NULL;};
$viewHelper368 = $self->getViewHelper('$viewHelper368', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper368->setArguments($arguments366);
$viewHelper368->setRenderingContext($renderingContext);
$viewHelper368->setRenderChildrenClosure($renderChildrenClosure367);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output362 .= $viewHelper368->initializeArgumentsAndRender();

$output362 .= '
                                                </div>
                                            ';
return $output362;
};
$arguments341['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output369 = '';

$output369 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments370 = array();
$arguments370['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments370['keepQuotes'] = false;
$arguments370['encoding'] = NULL;
$arguments370['doubleEncode'] = true;
$renderChildrenClosure371 = function() {return NULL;};
$value372 = ($arguments370['value'] !== NULL ? $arguments370['value'] : $renderChildrenClosure371());

$output369 .= (!is_string($value372) ? $value372 : htmlspecialchars($value372, ($arguments370['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments370['encoding'] !== NULL ? $arguments370['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments370['doubleEncode']));

$output369 .= '-transparency">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments373 = array();
$arguments373['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments373['resolutionName'] = 'thumb';
$arguments373['additionalAttributes'] = NULL;
$arguments373['data'] = NULL;
$arguments373['class'] = NULL;
$arguments373['dir'] = NULL;
$arguments373['id'] = NULL;
$arguments373['lang'] = NULL;
$arguments373['style'] = NULL;
$arguments373['title'] = NULL;
$arguments373['accesskey'] = NULL;
$arguments373['tabindex'] = NULL;
$arguments373['onclick'] = NULL;
$arguments373['alt'] = NULL;
$arguments373['centerVertical'] = NULL;
$arguments373['width'] = NULL;
$arguments373['height'] = NULL;
$arguments373['quality'] = 80;
$renderChildrenClosure374 = function() {return NULL;};
$viewHelper375 = $self->getViewHelper('$viewHelper375', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper375->setArguments($arguments373);
$viewHelper375->setRenderingContext($renderingContext);
$viewHelper375->setRenderChildrenClosure($renderChildrenClosure374);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output369 .= $viewHelper375->initializeArgumentsAndRender();

$output369 .= '
                                                </div>
                                            ';
return $output369;
};

$output340 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);

$output340 .= '
                                    ';
return $output340;
};

$output337 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext);

$output337 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments376 = array();
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output378 = '';

$output378 .= '
                                        <div>
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments379 = array();
$arguments379['key'] = 'tx_yag_controller_gallery.noAlbums';
$arguments379['id'] = NULL;
$arguments379['default'] = NULL;
$arguments379['htmlEscape'] = NULL;
$arguments379['arguments'] = NULL;
$arguments379['extensionName'] = NULL;
$renderChildrenClosure380 = function() {return NULL;};

$output378 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments379, $renderChildrenClosure380, $renderingContext);

$output378 .= '
                                        </div>
                                    ';
return $output378;
};

$output337 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext);

$output337 .= '
                                ';
return $output337;
};
$arguments335['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output381 = '';

$output381 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments382 = array();
// Rendering Boolean node
$arguments382['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.hidden', $renderingContext));
$arguments382['then'] = NULL;
$arguments382['else'] = NULL;
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output384 = '';

$output384 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments385 = array();
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output387 = '';

$output387 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments388 = array();
$arguments388['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments388['keepQuotes'] = false;
$arguments388['encoding'] = NULL;
$arguments388['doubleEncode'] = true;
$renderChildrenClosure389 = function() {return NULL;};
$value390 = ($arguments388['value'] !== NULL ? $arguments388['value'] : $renderChildrenClosure389());

$output387 .= (!is_string($value390) ? $value390 : htmlspecialchars($value390, ($arguments388['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments388['encoding'] !== NULL ? $arguments388['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments388['doubleEncode']));

$output387 .= '-transparency"
                                                     class="tx-yag-transparency-half">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments391 = array();
$arguments391['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments391['resolutionName'] = 'thumb';
$arguments391['additionalAttributes'] = NULL;
$arguments391['data'] = NULL;
$arguments391['class'] = NULL;
$arguments391['dir'] = NULL;
$arguments391['id'] = NULL;
$arguments391['lang'] = NULL;
$arguments391['style'] = NULL;
$arguments391['title'] = NULL;
$arguments391['accesskey'] = NULL;
$arguments391['tabindex'] = NULL;
$arguments391['onclick'] = NULL;
$arguments391['alt'] = NULL;
$arguments391['centerVertical'] = NULL;
$arguments391['width'] = NULL;
$arguments391['height'] = NULL;
$arguments391['quality'] = 80;
$renderChildrenClosure392 = function() {return NULL;};
$viewHelper393 = $self->getViewHelper('$viewHelper393', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper393->setArguments($arguments391);
$viewHelper393->setRenderingContext($renderingContext);
$viewHelper393->setRenderChildrenClosure($renderChildrenClosure392);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output387 .= $viewHelper393->initializeArgumentsAndRender();

$output387 .= '
                                                </div>
                                            ';
return $output387;
};

$output384 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext);

$output384 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments394 = array();
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output396 = '';

$output396 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments397 = array();
$arguments397['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments397['keepQuotes'] = false;
$arguments397['encoding'] = NULL;
$arguments397['doubleEncode'] = true;
$renderChildrenClosure398 = function() {return NULL;};
$value399 = ($arguments397['value'] !== NULL ? $arguments397['value'] : $renderChildrenClosure398());

$output396 .= (!is_string($value399) ? $value399 : htmlspecialchars($value399, ($arguments397['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments397['encoding'] !== NULL ? $arguments397['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments397['doubleEncode']));

$output396 .= '-transparency">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments400 = array();
$arguments400['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments400['resolutionName'] = 'thumb';
$arguments400['additionalAttributes'] = NULL;
$arguments400['data'] = NULL;
$arguments400['class'] = NULL;
$arguments400['dir'] = NULL;
$arguments400['id'] = NULL;
$arguments400['lang'] = NULL;
$arguments400['style'] = NULL;
$arguments400['title'] = NULL;
$arguments400['accesskey'] = NULL;
$arguments400['tabindex'] = NULL;
$arguments400['onclick'] = NULL;
$arguments400['alt'] = NULL;
$arguments400['centerVertical'] = NULL;
$arguments400['width'] = NULL;
$arguments400['height'] = NULL;
$arguments400['quality'] = 80;
$renderChildrenClosure401 = function() {return NULL;};
$viewHelper402 = $self->getViewHelper('$viewHelper402', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper402->setArguments($arguments400);
$viewHelper402->setRenderingContext($renderingContext);
$viewHelper402->setRenderChildrenClosure($renderChildrenClosure401);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output396 .= $viewHelper402->initializeArgumentsAndRender();

$output396 .= '
                                                </div>
                                            ';
return $output396;
};

$output384 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext);

$output384 .= '
                                        ';
return $output384;
};
$arguments382['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output403 = '';

$output403 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments404 = array();
$arguments404['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments404['keepQuotes'] = false;
$arguments404['encoding'] = NULL;
$arguments404['doubleEncode'] = true;
$renderChildrenClosure405 = function() {return NULL;};
$value406 = ($arguments404['value'] !== NULL ? $arguments404['value'] : $renderChildrenClosure405());

$output403 .= (!is_string($value406) ? $value406 : htmlspecialchars($value406, ($arguments404['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments404['encoding'] !== NULL ? $arguments404['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments404['doubleEncode']));

$output403 .= '-transparency"
                                                     class="tx-yag-transparency-half">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments407 = array();
$arguments407['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments407['resolutionName'] = 'thumb';
$arguments407['additionalAttributes'] = NULL;
$arguments407['data'] = NULL;
$arguments407['class'] = NULL;
$arguments407['dir'] = NULL;
$arguments407['id'] = NULL;
$arguments407['lang'] = NULL;
$arguments407['style'] = NULL;
$arguments407['title'] = NULL;
$arguments407['accesskey'] = NULL;
$arguments407['tabindex'] = NULL;
$arguments407['onclick'] = NULL;
$arguments407['alt'] = NULL;
$arguments407['centerVertical'] = NULL;
$arguments407['width'] = NULL;
$arguments407['height'] = NULL;
$arguments407['quality'] = 80;
$renderChildrenClosure408 = function() {return NULL;};
$viewHelper409 = $self->getViewHelper('$viewHelper409', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper409->setArguments($arguments407);
$viewHelper409->setRenderingContext($renderingContext);
$viewHelper409->setRenderChildrenClosure($renderChildrenClosure408);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output403 .= $viewHelper409->initializeArgumentsAndRender();

$output403 .= '
                                                </div>
                                            ';
return $output403;
};
$arguments382['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output410 = '';

$output410 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments411 = array();
$arguments411['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments411['keepQuotes'] = false;
$arguments411['encoding'] = NULL;
$arguments411['doubleEncode'] = true;
$renderChildrenClosure412 = function() {return NULL;};
$value413 = ($arguments411['value'] !== NULL ? $arguments411['value'] : $renderChildrenClosure412());

$output410 .= (!is_string($value413) ? $value413 : htmlspecialchars($value413, ($arguments411['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments411['encoding'] !== NULL ? $arguments411['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments411['doubleEncode']));

$output410 .= '-transparency">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments414 = array();
$arguments414['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments414['resolutionName'] = 'thumb';
$arguments414['additionalAttributes'] = NULL;
$arguments414['data'] = NULL;
$arguments414['class'] = NULL;
$arguments414['dir'] = NULL;
$arguments414['id'] = NULL;
$arguments414['lang'] = NULL;
$arguments414['style'] = NULL;
$arguments414['title'] = NULL;
$arguments414['accesskey'] = NULL;
$arguments414['tabindex'] = NULL;
$arguments414['onclick'] = NULL;
$arguments414['alt'] = NULL;
$arguments414['centerVertical'] = NULL;
$arguments414['width'] = NULL;
$arguments414['height'] = NULL;
$arguments414['quality'] = 80;
$renderChildrenClosure415 = function() {return NULL;};
$viewHelper416 = $self->getViewHelper('$viewHelper416', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper416->setArguments($arguments414);
$viewHelper416->setRenderingContext($renderingContext);
$viewHelper416->setRenderChildrenClosure($renderChildrenClosure415);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output410 .= $viewHelper416->initializeArgumentsAndRender();

$output410 .= '
                                                </div>
                                            ';
return $output410;
};

$output381 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output381 .= '
                                    ';
return $output381;
};
$arguments335['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output417 = '';

$output417 .= '
                                        <div>
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments418 = array();
$arguments418['key'] = 'tx_yag_controller_gallery.noAlbums';
$arguments418['id'] = NULL;
$arguments418['default'] = NULL;
$arguments418['htmlEscape'] = NULL;
$arguments418['arguments'] = NULL;
$arguments418['extensionName'] = NULL;
$renderChildrenClosure419 = function() {return NULL;};

$output417 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments418, $renderChildrenClosure419, $renderingContext);

$output417 .= '
                                        </div>
                                    ';
return $output417;
};

$output334 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output334 .= '
                            ';
return $output334;
};
$viewHelper420 = $self->getViewHelper('$viewHelper420', $renderingContext, 'Tx_Yag_ViewHelpers_Link_GalleryViewHelper');
$viewHelper420->setArguments($arguments332);
$viewHelper420->setRenderingContext($renderingContext);
$viewHelper420->setRenderChildrenClosure($renderChildrenClosure333);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper

$output328 .= $viewHelper420->initializeArgumentsAndRender();

$output328 .= '
                        </td>
                        <td class="yag-col-title">
                            <div>
                                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper
$arguments421 = array();
$arguments421['gallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value', $renderingContext);
$arguments421['additionalAttributes'] = NULL;
$arguments421['data'] = NULL;
$arguments421['galleryUid'] = NULL;
$arguments421['pageUid'] = NULL;
$arguments421['pageType'] = 0;
$arguments421['noCache'] = false;
$arguments421['noCacheHash'] = false;
$arguments421['section'] = '';
$arguments421['format'] = '';
$arguments421['class'] = NULL;
$arguments421['dir'] = NULL;
$arguments421['id'] = NULL;
$arguments421['lang'] = NULL;
$arguments421['style'] = NULL;
$arguments421['title'] = NULL;
$arguments421['accesskey'] = NULL;
$arguments421['tabindex'] = NULL;
$arguments421['onclick'] = NULL;
$arguments421['name'] = NULL;
$arguments421['rel'] = NULL;
$arguments421['rev'] = NULL;
$arguments421['target'] = NULL;
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output423 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments424 = array();
$arguments424['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.name', $renderingContext);
$arguments424['keepQuotes'] = false;
$arguments424['encoding'] = NULL;
$arguments424['doubleEncode'] = true;
$renderChildrenClosure425 = function() {return NULL;};
$value426 = ($arguments424['value'] !== NULL ? $arguments424['value'] : $renderChildrenClosure425());

$output423 .= (!is_string($value426) ? $value426 : htmlspecialchars($value426, ($arguments424['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments424['encoding'] !== NULL ? $arguments424['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments424['doubleEncode']));

$output423 .= '
                                ';
return $output423;
};
$viewHelper427 = $self->getViewHelper('$viewHelper427', $renderingContext, 'Tx_Yag_ViewHelpers_Link_GalleryViewHelper');
$viewHelper427->setArguments($arguments421);
$viewHelper427->setRenderingContext($renderingContext);
$viewHelper427->setRenderChildrenClosure($renderChildrenClosure422);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper

$output328 .= $viewHelper427->initializeArgumentsAndRender();

$output328 .= '
                                <br/>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments428 = array();
$arguments428['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.albumCount', $renderingContext);
$arguments428['keepQuotes'] = false;
$arguments428['encoding'] = NULL;
$arguments428['doubleEncode'] = true;
$renderChildrenClosure429 = function() {return NULL;};
$value430 = ($arguments428['value'] !== NULL ? $arguments428['value'] : $renderChildrenClosure429());

$output328 .= (!is_string($value430) ? $value430 : htmlspecialchars($value430, ($arguments428['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments428['encoding'] !== NULL ? $arguments428['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments428['doubleEncode']));

$output328 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments431 = array();
// Rendering Boolean node
// Rendering Array
$array432 = array();
$array432['1'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.albumCount', $renderingContext);
// Rendering Array
$array433 = array();
$array433['1'] = 1;
$arguments431['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array432, $array433);
$arguments431['then'] = NULL;
$arguments431['else'] = NULL;
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output435 = '';

$output435 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments436 = array();
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output438 = '';

$output438 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments439 = array();
$arguments439['key'] = 'tx_yag_general.album';
$arguments439['id'] = NULL;
$arguments439['default'] = NULL;
$arguments439['htmlEscape'] = NULL;
$arguments439['arguments'] = NULL;
$arguments439['extensionName'] = NULL;
$renderChildrenClosure440 = function() {return NULL;};

$output438 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext);

$output438 .= '
                                    ';
return $output438;
};

$output435 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments436, $renderChildrenClosure437, $renderingContext);

$output435 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments441 = array();
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output443 = '';

$output443 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments444 = array();
$arguments444['key'] = 'tx_yag_general.albums';
$arguments444['id'] = NULL;
$arguments444['default'] = NULL;
$arguments444['htmlEscape'] = NULL;
$arguments444['arguments'] = NULL;
$arguments444['extensionName'] = NULL;
$renderChildrenClosure445 = function() {return NULL;};

$output443 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments444, $renderChildrenClosure445, $renderingContext);

$output443 .= '
                                    ';
return $output443;
};

$output435 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments441, $renderChildrenClosure442, $renderingContext);

$output435 .= '
                                ';
return $output435;
};
$arguments431['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output446 = '';

$output446 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments447 = array();
$arguments447['key'] = 'tx_yag_general.album';
$arguments447['id'] = NULL;
$arguments447['default'] = NULL;
$arguments447['htmlEscape'] = NULL;
$arguments447['arguments'] = NULL;
$arguments447['extensionName'] = NULL;
$renderChildrenClosure448 = function() {return NULL;};

$output446 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);

$output446 .= '
                                    ';
return $output446;
};
$arguments431['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output449 = '';

$output449 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments450 = array();
$arguments450['key'] = 'tx_yag_general.albums';
$arguments450['id'] = NULL;
$arguments450['default'] = NULL;
$arguments450['htmlEscape'] = NULL;
$arguments450['arguments'] = NULL;
$arguments450['extensionName'] = NULL;
$renderChildrenClosure451 = function() {return NULL;};

$output449 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output449 .= '
                                    ';
return $output449;
};

$output328 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments431, $renderChildrenClosure434, $renderingContext);

$output328 .= '
                                <br/>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments452 = array();
$arguments452['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.itemCount', $renderingContext);
$arguments452['keepQuotes'] = false;
$arguments452['encoding'] = NULL;
$arguments452['doubleEncode'] = true;
$renderChildrenClosure453 = function() {return NULL;};
$value454 = ($arguments452['value'] !== NULL ? $arguments452['value'] : $renderChildrenClosure453());

$output328 .= (!is_string($value454) ? $value454 : htmlspecialchars($value454, ($arguments452['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments452['encoding'] !== NULL ? $arguments452['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments452['doubleEncode']));

$output328 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments455 = array();
// Rendering Boolean node
// Rendering Array
$array456 = array();
$array456['1'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.itemCount', $renderingContext);
// Rendering Array
$array457 = array();
$array457['1'] = 1;
$arguments455['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array456, $array457);
$arguments455['then'] = NULL;
$arguments455['else'] = NULL;
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output459 = '';

$output459 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments460 = array();
$renderChildrenClosure461 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output462 = '';

$output462 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments463 = array();
$arguments463['key'] = 'tx_yag_general.image';
$arguments463['id'] = NULL;
$arguments463['default'] = NULL;
$arguments463['htmlEscape'] = NULL;
$arguments463['arguments'] = NULL;
$arguments463['extensionName'] = NULL;
$renderChildrenClosure464 = function() {return NULL;};

$output462 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments463, $renderChildrenClosure464, $renderingContext);

$output462 .= '
                                    ';
return $output462;
};

$output459 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments460, $renderChildrenClosure461, $renderingContext);

$output459 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments465 = array();
$renderChildrenClosure466 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output467 = '';

$output467 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments468 = array();
$arguments468['key'] = 'tx_yag_general.images';
$arguments468['id'] = NULL;
$arguments468['default'] = NULL;
$arguments468['htmlEscape'] = NULL;
$arguments468['arguments'] = NULL;
$arguments468['extensionName'] = NULL;
$renderChildrenClosure469 = function() {return NULL;};

$output467 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext);

$output467 .= '
                                    ';
return $output467;
};

$output459 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments465, $renderChildrenClosure466, $renderingContext);

$output459 .= '
                                ';
return $output459;
};
$arguments455['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output470 = '';

$output470 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments471 = array();
$arguments471['key'] = 'tx_yag_general.image';
$arguments471['id'] = NULL;
$arguments471['default'] = NULL;
$arguments471['htmlEscape'] = NULL;
$arguments471['arguments'] = NULL;
$arguments471['extensionName'] = NULL;
$renderChildrenClosure472 = function() {return NULL;};

$output470 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments471, $renderChildrenClosure472, $renderingContext);

$output470 .= '
                                    ';
return $output470;
};
$arguments455['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output473 = '';

$output473 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments474 = array();
$arguments474['key'] = 'tx_yag_general.images';
$arguments474['id'] = NULL;
$arguments474['default'] = NULL;
$arguments474['htmlEscape'] = NULL;
$arguments474['arguments'] = NULL;
$arguments474['extensionName'] = NULL;
$renderChildrenClosure475 = function() {return NULL;};

$output473 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments474, $renderChildrenClosure475, $renderingContext);

$output473 .= '
                                    ';
return $output473;
};

$output328 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments455, $renderChildrenClosure458, $renderingContext);

$output328 .= '
                            </div>
                        </td>
                        <td class="actions icons">
                            <div class="btn-group">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments476 = array();
// Rendering ViewHelper Tx_Yag_ViewHelpers_Uri_GalleryViewHelper
$arguments477 = array();
$arguments477['gallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value', $renderingContext);
$arguments477['section'] = 'tabs-3';
$arguments477['galleryUid'] = NULL;
$arguments477['pageUid'] = NULL;
$arguments477['pageType'] = 0;
$arguments477['noCache'] = false;
$arguments477['noCacheHash'] = false;
$arguments477['format'] = '';
$renderChildrenClosure478 = function() {return NULL;};
$viewHelper479 = $self->getViewHelper('$viewHelper479', $renderingContext, 'Tx_Yag_ViewHelpers_Uri_GalleryViewHelper');
$viewHelper479->setArguments($arguments477);
$viewHelper479->setRenderingContext($renderingContext);
$viewHelper479->setRenderChildrenClosure($renderChildrenClosure478);
// End of ViewHelper Tx_Yag_ViewHelpers_Uri_GalleryViewHelper
$arguments476['uri'] = $viewHelper479->initializeArgumentsAndRender();
$arguments476['icon'] = 'actions-document-open';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments480 = array();
$arguments480['key'] = 'tx_yag_controller_gallery.editGallery';
$arguments480['id'] = NULL;
$arguments480['default'] = NULL;
$arguments480['htmlEscape'] = NULL;
$arguments480['arguments'] = NULL;
$arguments480['extensionName'] = NULL;
$renderChildrenClosure481 = function() {return NULL;};
$arguments476['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments480, $renderChildrenClosure481, $renderingContext);
// Rendering Array
$array482 = array();
$array482['class'] = 'btn';
$arguments476['additionalAttributes'] = $array482;
$renderChildrenClosure483 = function() {return NULL;};

$output328 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments476, $renderChildrenClosure483, $renderingContext);

$output328 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments484 = array();
// Rendering Boolean node
$arguments484['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.hidden', $renderingContext));
$arguments484['then'] = NULL;
$arguments484['else'] = NULL;
$renderChildrenClosure485 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output486 = '';

$output486 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments487 = array();
$renderChildrenClosure488 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output489 = '';

$output489 .= '
                                        <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments490 = array();
$arguments490['key'] = 'tx_yag_controller_gallery.unhideGallery';
$arguments490['id'] = NULL;
$arguments490['default'] = NULL;
$arguments490['htmlEscape'] = NULL;
$arguments490['arguments'] = NULL;
$arguments490['extensionName'] = NULL;
$renderChildrenClosure491 = function() {return NULL;};

$output489 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext);

$output489 .= '"
                                           id="unhide-gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments492 = array();
$arguments492['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments492['keepQuotes'] = false;
$arguments492['encoding'] = NULL;
$arguments492['doubleEncode'] = true;
$renderChildrenClosure493 = function() {return NULL;};
$value494 = ($arguments492['value'] !== NULL ? $arguments492['value'] : $renderChildrenClosure493());

$output489 .= (!is_string($value494) ? $value494 : htmlspecialchars($value494, ($arguments492['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments492['encoding'] !== NULL ? $arguments492['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments492['doubleEncode']));

$output489 .= '" class="unhide-gallery btn"
                                           galleryUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments495 = array();
$arguments495['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments495['keepQuotes'] = false;
$arguments495['encoding'] = NULL;
$arguments495['doubleEncode'] = true;
$renderChildrenClosure496 = function() {return NULL;};
$value497 = ($arguments495['value'] !== NULL ? $arguments495['value'] : $renderChildrenClosure496());

$output489 .= (!is_string($value497) ? $value497 : htmlspecialchars($value497, ($arguments495['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments495['encoding'] !== NULL ? $arguments495['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments495['doubleEncode']));

$output489 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments498 = array();
$arguments498['identifier'] = 'actions-edit-hide';
$arguments498['size'] = 'small';
$arguments498['overlay'] = NULL;
$arguments498['state'] = 'default';
$arguments498['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure499 = function() {return NULL;};

$output489 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments498, $renderChildrenClosure499, $renderingContext);

$output489 .= '
                                        </a>
                                    ';
return $output489;
};

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments487, $renderChildrenClosure488, $renderingContext);

$output486 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments500 = array();
$renderChildrenClosure501 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output502 = '';

$output502 .= '
                                        <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments503 = array();
$arguments503['key'] = 'tx_yag_controller_gallery.hideGallery';
$arguments503['id'] = NULL;
$arguments503['default'] = NULL;
$arguments503['htmlEscape'] = NULL;
$arguments503['arguments'] = NULL;
$arguments503['extensionName'] = NULL;
$renderChildrenClosure504 = function() {return NULL;};

$output502 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments503, $renderChildrenClosure504, $renderingContext);

$output502 .= '"
                                           id="hide-gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments505 = array();
$arguments505['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments505['keepQuotes'] = false;
$arguments505['encoding'] = NULL;
$arguments505['doubleEncode'] = true;
$renderChildrenClosure506 = function() {return NULL;};
$value507 = ($arguments505['value'] !== NULL ? $arguments505['value'] : $renderChildrenClosure506());

$output502 .= (!is_string($value507) ? $value507 : htmlspecialchars($value507, ($arguments505['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments505['encoding'] !== NULL ? $arguments505['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments505['doubleEncode']));

$output502 .= '" class="hide-gallery btn"
                                           galleryUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments508 = array();
$arguments508['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments508['keepQuotes'] = false;
$arguments508['encoding'] = NULL;
$arguments508['doubleEncode'] = true;
$renderChildrenClosure509 = function() {return NULL;};
$value510 = ($arguments508['value'] !== NULL ? $arguments508['value'] : $renderChildrenClosure509());

$output502 .= (!is_string($value510) ? $value510 : htmlspecialchars($value510, ($arguments508['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments508['encoding'] !== NULL ? $arguments508['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments508['doubleEncode']));

$output502 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments511 = array();
$arguments511['identifier'] = 'actions-edit-unhide';
$arguments511['size'] = 'small';
$arguments511['overlay'] = NULL;
$arguments511['state'] = 'default';
$arguments511['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure512 = function() {return NULL;};

$output502 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments511, $renderChildrenClosure512, $renderingContext);

$output502 .= '
                                        </a>
                                    ';
return $output502;
};

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments500, $renderChildrenClosure501, $renderingContext);

$output486 .= '
                                ';
return $output486;
};
$arguments484['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output513 = '';

$output513 .= '
                                        <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments514 = array();
$arguments514['key'] = 'tx_yag_controller_gallery.unhideGallery';
$arguments514['id'] = NULL;
$arguments514['default'] = NULL;
$arguments514['htmlEscape'] = NULL;
$arguments514['arguments'] = NULL;
$arguments514['extensionName'] = NULL;
$renderChildrenClosure515 = function() {return NULL;};

$output513 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments514, $renderChildrenClosure515, $renderingContext);

$output513 .= '"
                                           id="unhide-gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments516 = array();
$arguments516['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments516['keepQuotes'] = false;
$arguments516['encoding'] = NULL;
$arguments516['doubleEncode'] = true;
$renderChildrenClosure517 = function() {return NULL;};
$value518 = ($arguments516['value'] !== NULL ? $arguments516['value'] : $renderChildrenClosure517());

$output513 .= (!is_string($value518) ? $value518 : htmlspecialchars($value518, ($arguments516['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments516['encoding'] !== NULL ? $arguments516['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments516['doubleEncode']));

$output513 .= '" class="unhide-gallery btn"
                                           galleryUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments519 = array();
$arguments519['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments519['keepQuotes'] = false;
$arguments519['encoding'] = NULL;
$arguments519['doubleEncode'] = true;
$renderChildrenClosure520 = function() {return NULL;};
$value521 = ($arguments519['value'] !== NULL ? $arguments519['value'] : $renderChildrenClosure520());

$output513 .= (!is_string($value521) ? $value521 : htmlspecialchars($value521, ($arguments519['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments519['encoding'] !== NULL ? $arguments519['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments519['doubleEncode']));

$output513 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments522 = array();
$arguments522['identifier'] = 'actions-edit-hide';
$arguments522['size'] = 'small';
$arguments522['overlay'] = NULL;
$arguments522['state'] = 'default';
$arguments522['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure523 = function() {return NULL;};

$output513 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments522, $renderChildrenClosure523, $renderingContext);

$output513 .= '
                                        </a>
                                    ';
return $output513;
};
$arguments484['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output524 = '';

$output524 .= '
                                        <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments525 = array();
$arguments525['key'] = 'tx_yag_controller_gallery.hideGallery';
$arguments525['id'] = NULL;
$arguments525['default'] = NULL;
$arguments525['htmlEscape'] = NULL;
$arguments525['arguments'] = NULL;
$arguments525['extensionName'] = NULL;
$renderChildrenClosure526 = function() {return NULL;};

$output524 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments525, $renderChildrenClosure526, $renderingContext);

$output524 .= '"
                                           id="hide-gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments527 = array();
$arguments527['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments527['keepQuotes'] = false;
$arguments527['encoding'] = NULL;
$arguments527['doubleEncode'] = true;
$renderChildrenClosure528 = function() {return NULL;};
$value529 = ($arguments527['value'] !== NULL ? $arguments527['value'] : $renderChildrenClosure528());

$output524 .= (!is_string($value529) ? $value529 : htmlspecialchars($value529, ($arguments527['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments527['encoding'] !== NULL ? $arguments527['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments527['doubleEncode']));

$output524 .= '" class="hide-gallery btn"
                                           galleryUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments530 = array();
$arguments530['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments530['keepQuotes'] = false;
$arguments530['encoding'] = NULL;
$arguments530['doubleEncode'] = true;
$renderChildrenClosure531 = function() {return NULL;};
$value532 = ($arguments530['value'] !== NULL ? $arguments530['value'] : $renderChildrenClosure531());

$output524 .= (!is_string($value532) ? $value532 : htmlspecialchars($value532, ($arguments530['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments530['encoding'] !== NULL ? $arguments530['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments530['doubleEncode']));

$output524 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments533 = array();
$arguments533['identifier'] = 'actions-edit-unhide';
$arguments533['size'] = 'small';
$arguments533['overlay'] = NULL;
$arguments533['state'] = 'default';
$arguments533['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure534 = function() {return NULL;};

$output524 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments533, $renderChildrenClosure534, $renderingContext);

$output524 .= '
                                        </a>
                                    ';
return $output524;
};

$output328 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments484, $renderChildrenClosure485, $renderingContext);

$output328 .= '

                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments535 = array();
$arguments535['uri'] = '#';
$arguments535['icon'] = 'actions-edit-delete';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments536 = array();
$arguments536['key'] = 'tx_yag_controller_gallery.deleteGallery';
$arguments536['id'] = NULL;
$arguments536['default'] = NULL;
$arguments536['htmlEscape'] = NULL;
$arguments536['arguments'] = NULL;
$arguments536['extensionName'] = NULL;
$renderChildrenClosure537 = function() {return NULL;};
$arguments535['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext);
// Rendering Array
$array538 = array();
$array538['class'] = 'gallery-linkbar-delete btn';
$array538['galleryUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments535['additionalAttributes'] = $array538;
$renderChildrenClosure539 = function() {return NULL;};

$output328 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments535, $renderChildrenClosure539, $renderingContext);

$output328 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments540 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments541 = array();
$arguments541['action'] = 'new';
$arguments541['controller'] = 'Album';
// Rendering Array
$array542 = array();
$array542['gallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value', $renderingContext);
$arguments541['arguments'] = $array542;
$arguments541['extensionName'] = NULL;
$arguments541['pluginName'] = NULL;
$arguments541['pageUid'] = NULL;
$arguments541['pageType'] = 0;
$arguments541['noCache'] = false;
$arguments541['noCacheHash'] = false;
$arguments541['section'] = '';
$arguments541['format'] = '';
$arguments541['linkAccessRestrictedPages'] = false;
$arguments541['additionalParams'] = array (
);
$arguments541['absolute'] = false;
$arguments541['addQueryString'] = false;
$arguments541['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments541['addQueryStringMethod'] = NULL;
$renderChildrenClosure543 = function() {return NULL;};
$viewHelper544 = $self->getViewHelper('$viewHelper544', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper544->setArguments($arguments541);
$viewHelper544->setRenderingContext($renderingContext);
$viewHelper544->setRenderChildrenClosure($renderChildrenClosure543);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments540['uri'] = $viewHelper544->initializeArgumentsAndRender();
$arguments540['icon'] = 'actions-document-new';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments545 = array();
$arguments545['key'] = 'tx_yag_controller_album.addAlbum';
$arguments545['id'] = NULL;
$arguments545['default'] = NULL;
$arguments545['htmlEscape'] = NULL;
$arguments545['arguments'] = NULL;
$arguments545['extensionName'] = NULL;
$renderChildrenClosure546 = function() {return NULL;};
$arguments540['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments545, $renderChildrenClosure546, $renderingContext);
// Rendering Array
$array547 = array();
$array547['class'] = 'btn';
$arguments540['additionalAttributes'] = $array547;
$renderChildrenClosure548 = function() {return NULL;};

$output328 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments540, $renderChildrenClosure548, $renderingContext);

$output328 .= '

                            </div>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments549 = array();
// Rendering Boolean node
$arguments549['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.description', $renderingContext));
$arguments549['then'] = NULL;
$arguments549['else'] = NULL;
$renderChildrenClosure550 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output551 = '';

$output551 .= '
                                <div class="yag-description">
                                    <div class="typo3-dimmed">
                                        <b>
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments552 = array();
$arguments552['key'] = 'tx_yag_domain_model_gallery.description';
$arguments552['id'] = NULL;
$arguments552['default'] = NULL;
$arguments552['htmlEscape'] = NULL;
$arguments552['arguments'] = NULL;
$arguments552['extensionName'] = NULL;
$renderChildrenClosure553 = function() {return NULL;};

$output551 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments552, $renderChildrenClosure553, $renderingContext);

$output551 .= '
                                        </b>
                                    </div>
                                    <div class="typo3-dimmed">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$arguments554 = array();
$arguments554['value'] = NULL;
$renderChildrenClosure555 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments556 = array();
$arguments556['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.description', $renderingContext);
$arguments556['keepQuotes'] = false;
$arguments556['encoding'] = NULL;
$arguments556['doubleEncode'] = true;
$renderChildrenClosure557 = function() {return NULL;};
$value558 = ($arguments556['value'] !== NULL ? $arguments556['value'] : $renderChildrenClosure557());
return (!is_string($value558) ? $value558 : htmlspecialchars($value558, ($arguments556['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments556['encoding'] !== NULL ? $arguments556['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments556['doubleEncode']));
};

$output551 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments554, $renderChildrenClosure555, $renderingContext);

$output551 .= '
                                    </div>
                                </div>
                            ';
return $output551;
};

$output328 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments549, $renderChildrenClosure550, $renderingContext);

$output328 .= '
                        </td>
                    </tr>
                ';
return $output328;
};

$output309 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext);

$output309 .= '
                </tbody>
            </table>
        ';
return $output309;
};
$arguments8['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output559 = '';

$output559 .= '

            <div>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments560 = array();
// Rendering Boolean node
$arguments560['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pidDetector'), 'currentPageIsNoYagPage', $renderingContext));
$arguments560['then'] = NULL;
$arguments560['else'] = NULL;
$renderChildrenClosure561 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output562 = '';

$output562 .= '
                    <div class="tx-extbase-flash-message">
                        <div class="alert alert-info">
                            <h4>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments563 = array();
$arguments563['key'] = 'tx_yag_controller_gallery.notAYAGFolderHeader';
$arguments563['id'] = NULL;
$arguments563['default'] = NULL;
$arguments563['htmlEscape'] = NULL;
$arguments563['arguments'] = NULL;
$arguments563['extensionName'] = NULL;
$renderChildrenClosure564 = function() {return NULL;};

$output562 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments563, $renderChildrenClosure564, $renderingContext);

$output562 .= '
                            </h4>
                            <div class="alert-body">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments565 = array();
$arguments565['key'] = 'tx_yag_controller_gallery.selectPageWithYag';
$arguments565['id'] = NULL;
$arguments565['default'] = NULL;
$arguments565['htmlEscape'] = NULL;
$arguments565['arguments'] = NULL;
$arguments565['extensionName'] = NULL;
$renderChildrenClosure566 = function() {return NULL;};

$output562 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments565, $renderChildrenClosure566, $renderingContext);

$output562 .= '

                                <select id="yag_pid_selector"
                                        onchange="jumpToUrl(this.options[this.selectedIndex].value, this);">
                                    <option value="">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments567 = array();
$arguments567['key'] = 'tx_yag_controller_gallery.selectAPage';
$arguments567['id'] = NULL;
$arguments567['default'] = NULL;
$arguments567['htmlEscape'] = NULL;
$arguments567['arguments'] = NULL;
$arguments567['extensionName'] = NULL;
$renderChildrenClosure568 = function() {return NULL;};

$output562 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments567, $renderChildrenClosure568, $renderingContext);

$output562 .= '
                                    </option>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments569 = array();
$arguments569['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pidDetector'), 'pageRecords', $renderingContext);
$arguments569['as'] = 'page';
$arguments569['key'] = '';
$arguments569['reverse'] = false;
$arguments569['iteration'] = NULL;
$renderChildrenClosure570 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output571 = '';

$output571 .= '
                                        <option value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments572 = array();
$arguments572['controller'] = 'Gallery';
$arguments572['action'] = 'list';
// Rendering Array
$array573 = array();
$array573['id'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'uid', $renderingContext);
$arguments572['additionalParams'] = $array573;
$arguments572['arguments'] = array (
);
$arguments572['extensionName'] = NULL;
$arguments572['pluginName'] = NULL;
$arguments572['pageUid'] = NULL;
$arguments572['pageType'] = 0;
$arguments572['noCache'] = false;
$arguments572['noCacheHash'] = false;
$arguments572['section'] = '';
$arguments572['format'] = '';
$arguments572['linkAccessRestrictedPages'] = false;
$arguments572['absolute'] = false;
$arguments572['addQueryString'] = false;
$arguments572['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments572['addQueryStringMethod'] = NULL;
$renderChildrenClosure574 = function() {return NULL;};
$viewHelper575 = $self->getViewHelper('$viewHelper575', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper575->setArguments($arguments572);
$viewHelper575->setRenderingContext($renderingContext);
$viewHelper575->setRenderChildrenClosure($renderChildrenClosure574);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output571 .= $viewHelper575->initializeArgumentsAndRender();

$output571 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments576 = array();
$arguments576['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'title', $renderingContext);
$arguments576['keepQuotes'] = false;
$arguments576['encoding'] = NULL;
$arguments576['doubleEncode'] = true;
$renderChildrenClosure577 = function() {return NULL;};
$value578 = ($arguments576['value'] !== NULL ? $arguments576['value'] : $renderChildrenClosure577());

$output571 .= (!is_string($value578) ? $value578 : htmlspecialchars($value578, ($arguments576['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments576['encoding'] !== NULL ? $arguments576['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments576['doubleEncode']));

$output571 .= '
                                        </option>
                                    ';
return $output571;
};

$output562 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments569, $renderChildrenClosure570, $renderingContext);

$output562 .= '
                                </select><br/><br/>

                                <p>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments579 = array();
$arguments579['controller'] = 'Backend';
$arguments579['action'] = 'markPageAsYagSysFolder';
// Rendering Array
$array580 = array();
$array580['pid'] = $currentVariableContainer->getOrNull('currentPid');
$arguments579['arguments'] = $array580;
$arguments579['additionalAttributes'] = NULL;
$arguments579['data'] = NULL;
$arguments579['extensionName'] = NULL;
$arguments579['pluginName'] = NULL;
$arguments579['pageUid'] = NULL;
$arguments579['pageType'] = 0;
$arguments579['noCache'] = false;
$arguments579['noCacheHash'] = false;
$arguments579['section'] = '';
$arguments579['format'] = '';
$arguments579['linkAccessRestrictedPages'] = false;
$arguments579['additionalParams'] = array (
);
$arguments579['absolute'] = false;
$arguments579['addQueryString'] = false;
$arguments579['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments579['addQueryStringMethod'] = NULL;
$arguments579['class'] = NULL;
$arguments579['dir'] = NULL;
$arguments579['id'] = NULL;
$arguments579['lang'] = NULL;
$arguments579['style'] = NULL;
$arguments579['title'] = NULL;
$arguments579['accesskey'] = NULL;
$arguments579['tabindex'] = NULL;
$arguments579['onclick'] = NULL;
$arguments579['name'] = NULL;
$arguments579['rel'] = NULL;
$arguments579['rev'] = NULL;
$arguments579['target'] = NULL;
$renderChildrenClosure581 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output582 = '';

$output582 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments583 = array();
$arguments583['key'] = 'tx_yag_controller_gallery.markAsYagSysfolder';
$arguments583['id'] = NULL;
$arguments583['default'] = NULL;
$arguments583['htmlEscape'] = NULL;
$arguments583['arguments'] = NULL;
$arguments583['extensionName'] = NULL;
$renderChildrenClosure584 = function() {return NULL;};

$output582 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments583, $renderChildrenClosure584, $renderingContext);

$output582 .= '
                                    ';
return $output582;
};
$viewHelper585 = $self->getViewHelper('$viewHelper585', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper585->setArguments($arguments579);
$viewHelper585->setRenderingContext($renderingContext);
$viewHelper585->setRenderChildrenClosure($renderChildrenClosure581);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output562 .= $viewHelper585->initializeArgumentsAndRender();

$output562 .= '
                                </p>
                            </div>
                        </div>
                    </div>
                ';
return $output562;
};

$output559 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments560, $renderChildrenClosure561, $renderingContext);

$output559 .= '

                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments586 = array();
// Rendering Boolean node
$arguments586['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pidDetector'), 'currentPageIsYagPage', $renderingContext));
$arguments586['then'] = NULL;
$arguments586['else'] = NULL;
$renderChildrenClosure587 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output588 = '';

$output588 .= '
                    <div class="tx-extbase-flash-message">
                        <div class="alert alert-info">
                            <h4>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments589 = array();
$arguments589['key'] = 'tx_yag_controller_gallery.createYagRecords';
$arguments589['id'] = NULL;
$arguments589['default'] = NULL;
$arguments589['htmlEscape'] = NULL;
$arguments589['arguments'] = NULL;
$arguments589['extensionName'] = NULL;
$renderChildrenClosure590 = function() {return NULL;};

$output588 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments589, $renderChildrenClosure590, $renderingContext);

$output588 .= '
                            </h4>
                            <div class="alert-body">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments591 = array();
$arguments591['key'] = 'tx_yag_domain_model_gallery.noGalleryClick';
$arguments591['id'] = NULL;
$arguments591['default'] = NULL;
$arguments591['htmlEscape'] = NULL;
$arguments591['arguments'] = NULL;
$arguments591['extensionName'] = NULL;
$renderChildrenClosure592 = function() {return NULL;};

$output588 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments591, $renderChildrenClosure592, $renderingContext);

$output588 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments593 = array();
$arguments593['controller'] = 'Gallery';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments594 = array();
$arguments594['key'] = 'tx_yag_controller_gallery.addGallery';
$arguments594['id'] = NULL;
$arguments594['default'] = NULL;
$arguments594['htmlEscape'] = NULL;
$arguments594['arguments'] = NULL;
$arguments594['extensionName'] = NULL;
$renderChildrenClosure595 = function() {return NULL;};
$arguments593['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments594, $renderChildrenClosure595, $renderingContext);
$arguments593['action'] = 'new';
$arguments593['additionalAttributes'] = NULL;
$arguments593['data'] = NULL;
$arguments593['arguments'] = array (
);
$arguments593['extensionName'] = NULL;
$arguments593['pluginName'] = NULL;
$arguments593['pageUid'] = NULL;
$arguments593['pageType'] = 0;
$arguments593['noCache'] = false;
$arguments593['noCacheHash'] = false;
$arguments593['section'] = '';
$arguments593['format'] = '';
$arguments593['linkAccessRestrictedPages'] = false;
$arguments593['additionalParams'] = array (
);
$arguments593['absolute'] = false;
$arguments593['addQueryString'] = false;
$arguments593['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments593['addQueryStringMethod'] = NULL;
$arguments593['class'] = NULL;
$arguments593['dir'] = NULL;
$arguments593['id'] = NULL;
$arguments593['lang'] = NULL;
$arguments593['style'] = NULL;
$arguments593['accesskey'] = NULL;
$arguments593['tabindex'] = NULL;
$arguments593['onclick'] = NULL;
$arguments593['name'] = NULL;
$arguments593['rel'] = NULL;
$arguments593['rev'] = NULL;
$arguments593['target'] = NULL;
$renderChildrenClosure596 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output597 = '';

$output597 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments598 = array();
$arguments598['identifier'] = 'actions-document-new';
$arguments598['size'] = 'small';
$arguments598['overlay'] = NULL;
$arguments598['state'] = 'default';
$arguments598['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure599 = function() {return NULL;};

$output597 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments598, $renderChildrenClosure599, $renderingContext);

$output597 .= '
                                    <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments600 = array();
$arguments600['key'] = 'tx_yag_controller_gallery.addGallery';
$arguments600['id'] = NULL;
$arguments600['default'] = NULL;
$arguments600['htmlEscape'] = NULL;
$arguments600['arguments'] = NULL;
$arguments600['extensionName'] = NULL;
$renderChildrenClosure601 = function() {return NULL;};

$output597 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments600, $renderChildrenClosure601, $renderingContext);

$output597 .= '</span>
                                ';
return $output597;
};
$viewHelper602 = $self->getViewHelper('$viewHelper602', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper602->setArguments($arguments593);
$viewHelper602->setRenderingContext($renderingContext);
$viewHelper602->setRenderChildrenClosure($renderChildrenClosure596);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output588 .= $viewHelper602->initializeArgumentsAndRender();

$output588 .= '
                            </div>
                        </div>
                    </div>
                ';
return $output588;
};

$output559 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments586, $renderChildrenClosure587, $renderingContext);

$output559 .= '
            </div>
        ';
return $output559;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '


    <div class="tx-yag-pager">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments603 = array();
$arguments603['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'galleryListConfig.pagerPartial', $renderingContext);
// Rendering Array
$array604 = array();
$array604['pager'] = $currentVariableContainer->getOrNull('pager');
$array604['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments605 = array();
$arguments605['key'] = 'tx_yag_general.galleries';
$arguments605['id'] = NULL;
$arguments605['default'] = NULL;
$arguments605['htmlEscape'] = NULL;
$arguments605['arguments'] = NULL;
$arguments605['extensionName'] = NULL;
$renderChildrenClosure606 = function() {return NULL;};
$array604['itemsText'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments605, $renderChildrenClosure606, $renderingContext);
$arguments603['arguments'] = $array604;
$arguments603['section'] = NULL;
$arguments603['optional'] = false;
$renderChildrenClosure607 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments603, $renderChildrenClosure607, $renderingContext);

$output0 .= '
    </div>
';


return $output0;
}
/**
 * section beButtonsLeft
 */
public function section_cf0fe0f1a8ee78bebfb9f3c54af26f541cb3674a(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output608 = '';

$output608 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments609 = array();
$arguments609['action'] = 'new';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments610 = array();
$arguments610['key'] = 'tx_yag_controller_gallery.addGallery';
$arguments610['id'] = NULL;
$arguments610['default'] = NULL;
$arguments610['htmlEscape'] = NULL;
$arguments610['arguments'] = NULL;
$arguments610['extensionName'] = NULL;
$renderChildrenClosure611 = function() {return NULL;};
$arguments609['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments610, $renderChildrenClosure611, $renderingContext);
$arguments609['additionalAttributes'] = NULL;
$arguments609['data'] = NULL;
$arguments609['arguments'] = array (
);
$arguments609['controller'] = NULL;
$arguments609['extensionName'] = NULL;
$arguments609['pluginName'] = NULL;
$arguments609['pageUid'] = NULL;
$arguments609['pageType'] = 0;
$arguments609['noCache'] = false;
$arguments609['noCacheHash'] = false;
$arguments609['section'] = '';
$arguments609['format'] = '';
$arguments609['linkAccessRestrictedPages'] = false;
$arguments609['additionalParams'] = array (
);
$arguments609['absolute'] = false;
$arguments609['addQueryString'] = false;
$arguments609['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments609['addQueryStringMethod'] = NULL;
$arguments609['class'] = NULL;
$arguments609['dir'] = NULL;
$arguments609['id'] = NULL;
$arguments609['lang'] = NULL;
$arguments609['style'] = NULL;
$arguments609['accesskey'] = NULL;
$arguments609['tabindex'] = NULL;
$arguments609['onclick'] = NULL;
$arguments609['name'] = NULL;
$arguments609['rel'] = NULL;
$arguments609['rev'] = NULL;
$arguments609['target'] = NULL;
$renderChildrenClosure612 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments613 = array();
$arguments613['identifier'] = 'actions-document-new';
$arguments613['size'] = 'small';
$arguments613['overlay'] = NULL;
$arguments613['state'] = 'default';
$arguments613['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure614 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments613, $renderChildrenClosure614, $renderingContext);
};
$viewHelper615 = $self->getViewHelper('$viewHelper615', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper615->setArguments($arguments609);
$viewHelper615->setRenderingContext($renderingContext);
$viewHelper615->setRenderChildrenClosure($renderChildrenClosure612);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output608 .= $viewHelper615->initializeArgumentsAndRender();

$output608 .= '
';


return $output608;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output616 = '';

$output616 .= '



';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper
$arguments617 = array();
$arguments617['show'] = false;
$renderChildrenClosure618 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
    <!--
    Template for rendering gallery list

    Here is a list of objects / variables that can be accessed in this template:

    Tx_PtExtlist_Domain_Model_List_ListData  listData               Items to be rendered
    Tx_PtExtlist_Domain_Model_Pager_PagerInterface pager            Pager
    Tx_PtExtlist_Domain_Model_Pager_PagerCollection pagerCollection Collection of pagers

    @package YAG
    @author Michael Knoll <mimi@kaktusteam.de>
    @author Daniel Lienert <typo3@lienert.cc>
    -->
';
};
$viewHelper619 = $self->getViewHelper('$viewHelper619', $renderingContext, 'Tx_PtExtlist_ViewHelpers_CommentViewHelper');
$viewHelper619->setArguments($arguments617);
$viewHelper619->setRenderingContext($renderingContext);
$viewHelper619->setRenderChildrenClosure($renderChildrenClosure618);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper

$output616 .= $viewHelper619->initializeArgumentsAndRender();

$output616 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments620 = array();
$arguments620['name'] = 'Default';
$renderChildrenClosure621 = function() {return NULL;};
$viewHelper622 = $self->getViewHelper('$viewHelper622', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper622->setArguments($arguments620);
$viewHelper622->setRenderingContext($renderingContext);
$viewHelper622->setRenderChildrenClosure($renderChildrenClosure621);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output616 .= $viewHelper622->initializeArgumentsAndRender();

$output616 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments623 = array();
$arguments623['name'] = 'main';
$renderChildrenClosure624 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output625 = '';

$output625 .= '

    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper
$arguments626 = array();
$arguments626['templatePath'] = 'EXT:yag/Resources/Private/JSTemplates/GalleryAdminList.js';
// Rendering Array
$array627 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments628 = array();
$arguments628['controller'] = 'Ajax';
$arguments628['action'] = NULL;
$arguments628['arguments'] = array (
);
$arguments628['extensionName'] = NULL;
$arguments628['pluginName'] = NULL;
$arguments628['pageUid'] = NULL;
$arguments628['pageType'] = 0;
$arguments628['noCache'] = false;
$arguments628['noCacheHash'] = false;
$arguments628['section'] = '';
$arguments628['format'] = '';
$arguments628['linkAccessRestrictedPages'] = false;
$arguments628['additionalParams'] = array (
);
$arguments628['absolute'] = false;
$arguments628['addQueryString'] = false;
$arguments628['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments628['addQueryStringMethod'] = NULL;
$renderChildrenClosure629 = function() {return NULL;};
$viewHelper630 = $self->getViewHelper('$viewHelper630', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper630->setArguments($arguments628);
$viewHelper630->setRenderingContext($renderingContext);
$viewHelper630->setRenderChildrenClosure($renderChildrenClosure629);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$array627['ajaxBaseURL'] = $viewHelper630->initializeArgumentsAndRender();
$arguments626['arguments'] = $array627;
$arguments626['position'] = 'current';
$arguments626['type'] = 'text/javascript';
$renderChildrenClosure631 = function() {return NULL;};
$viewHelper632 = $self->getViewHelper('$viewHelper632', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper');
$viewHelper632->setArguments($arguments626);
$viewHelper632->setRenderingContext($renderingContext);
$viewHelper632->setRenderChildrenClosure($renderChildrenClosure631);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper

$output625 .= $viewHelper632->initializeArgumentsAndRender();

$output625 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments633 = array();
// Rendering Boolean node
$arguments633['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listData'), 'count', $renderingContext));
$arguments633['then'] = NULL;
$arguments633['else'] = NULL;
$renderChildrenClosure634 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output635 = '';

$output635 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments636 = array();
$renderChildrenClosure637 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output638 = '';

$output638 .= '
            <h2>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments639 = array();
$arguments639['key'] = 'tx_yag_controller_gallery.listHeader';
$arguments639['id'] = NULL;
$arguments639['default'] = NULL;
$arguments639['htmlEscape'] = NULL;
$arguments639['arguments'] = NULL;
$arguments639['extensionName'] = NULL;
$renderChildrenClosure640 = function() {return NULL;};

$output638 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments639, $renderChildrenClosure640, $renderingContext);

$output638 .= '
            </h2>
            <table id="sortable" class="table table-striped table-hover" cellspacing="0" cellpadding="0" border="0"
                   style="width:100%;">
                <thead>
                <tr class="t3-row-header" role="row">
                    <th colspan="4">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments641 = array();
$arguments641['action'] = 'new';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments642 = array();
$arguments642['key'] = 'tx_yag_controller_gallery.addGallery';
$arguments642['id'] = NULL;
$arguments642['default'] = NULL;
$arguments642['htmlEscape'] = NULL;
$arguments642['arguments'] = NULL;
$arguments642['extensionName'] = NULL;
$renderChildrenClosure643 = function() {return NULL;};
$arguments641['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments642, $renderChildrenClosure643, $renderingContext);
$arguments641['class'] = 'btn btn-default';
$arguments641['additionalAttributes'] = NULL;
$arguments641['data'] = NULL;
$arguments641['arguments'] = array (
);
$arguments641['controller'] = NULL;
$arguments641['extensionName'] = NULL;
$arguments641['pluginName'] = NULL;
$arguments641['pageUid'] = NULL;
$arguments641['pageType'] = 0;
$arguments641['noCache'] = false;
$arguments641['noCacheHash'] = false;
$arguments641['section'] = '';
$arguments641['format'] = '';
$arguments641['linkAccessRestrictedPages'] = false;
$arguments641['additionalParams'] = array (
);
$arguments641['absolute'] = false;
$arguments641['addQueryString'] = false;
$arguments641['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments641['addQueryStringMethod'] = NULL;
$arguments641['dir'] = NULL;
$arguments641['id'] = NULL;
$arguments641['lang'] = NULL;
$arguments641['style'] = NULL;
$arguments641['accesskey'] = NULL;
$arguments641['tabindex'] = NULL;
$arguments641['onclick'] = NULL;
$arguments641['name'] = NULL;
$arguments641['rel'] = NULL;
$arguments641['rev'] = NULL;
$arguments641['target'] = NULL;
$renderChildrenClosure644 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments645 = array();
$arguments645['identifier'] = 'actions-document-new';
$arguments645['size'] = 'small';
$arguments645['overlay'] = NULL;
$arguments645['state'] = 'default';
$arguments645['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure646 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments645, $renderChildrenClosure646, $renderingContext);
};
$viewHelper647 = $self->getViewHelper('$viewHelper647', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper647->setArguments($arguments641);
$viewHelper647->setRenderingContext($renderingContext);
$viewHelper647->setRenderChildrenClosure($renderChildrenClosure644);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output638 .= $viewHelper647->initializeArgumentsAndRender();

$output638 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments648 = array();
$arguments648['key'] = 'tx_yag_domain_model_gallery';
$arguments648['id'] = NULL;
$arguments648['default'] = NULL;
$arguments648['htmlEscape'] = NULL;
$arguments648['arguments'] = NULL;
$arguments648['extensionName'] = NULL;
$renderChildrenClosure649 = function() {return NULL;};

$output638 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments648, $renderChildrenClosure649, $renderingContext);

$output638 .= '
                        (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments650 = array();
$arguments650['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'itemCount', $renderingContext);
$arguments650['keepQuotes'] = false;
$arguments650['encoding'] = NULL;
$arguments650['doubleEncode'] = true;
$renderChildrenClosure651 = function() {return NULL;};
$value652 = ($arguments650['value'] !== NULL ? $arguments650['value'] : $renderChildrenClosure651());

$output638 .= (!is_string($value652) ? $value652 : htmlspecialchars($value652, ($arguments650['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments650['encoding'] !== NULL ? $arguments650['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments650['doubleEncode']));

$output638 .= ')
                    </th>
                </tr>
                <tr class="c-headLine">
                    <td class="yag-col-thumb">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments653 = array();
$arguments653['key'] = 'tx_yag_domain_model_gallery.thumb';
$arguments653['id'] = NULL;
$arguments653['default'] = NULL;
$arguments653['htmlEscape'] = NULL;
$arguments653['arguments'] = NULL;
$arguments653['extensionName'] = NULL;
$renderChildrenClosure654 = function() {return NULL;};

$output638 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments653, $renderChildrenClosure654, $renderingContext);

$output638 .= '
                        :
                    </td>
                    <td colspan="2">
                    </td>
                </tr>
                </thead>
                <tbody class="ui-sortable">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments655 = array();
$arguments655['each'] = $currentVariableContainer->getOrNull('listData');
$arguments655['key'] = 'rowIndex';
$arguments655['as'] = 'listRow';
$arguments655['reverse'] = false;
$arguments655['iteration'] = NULL;
$renderChildrenClosure656 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output657 = '';

$output657 .= '
                    <tr id="galleryUid-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments658 = array();
$arguments658['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments658['keepQuotes'] = false;
$arguments658['encoding'] = NULL;
$arguments658['doubleEncode'] = true;
$renderChildrenClosure659 = function() {return NULL;};
$value660 = ($arguments658['value'] !== NULL ? $arguments658['value'] : $renderChildrenClosure659());

$output657 .= (!is_string($value660) ? $value660 : htmlspecialchars($value660, ($arguments658['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments658['encoding'] !== NULL ? $arguments658['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments658['doubleEncode']));

$output657 .= '" class="db_list_normal">
                        <td class="yag-col-thumb">
                            ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper
$arguments661 = array();
$arguments661['gallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value', $renderingContext);
$arguments661['additionalAttributes'] = NULL;
$arguments661['data'] = NULL;
$arguments661['galleryUid'] = NULL;
$arguments661['pageUid'] = NULL;
$arguments661['pageType'] = 0;
$arguments661['noCache'] = false;
$arguments661['noCacheHash'] = false;
$arguments661['section'] = '';
$arguments661['format'] = '';
$arguments661['class'] = NULL;
$arguments661['dir'] = NULL;
$arguments661['id'] = NULL;
$arguments661['lang'] = NULL;
$arguments661['style'] = NULL;
$arguments661['title'] = NULL;
$arguments661['accesskey'] = NULL;
$arguments661['tabindex'] = NULL;
$arguments661['onclick'] = NULL;
$arguments661['name'] = NULL;
$arguments661['rel'] = NULL;
$arguments661['rev'] = NULL;
$arguments661['target'] = NULL;
$renderChildrenClosure662 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output663 = '';

$output663 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments664 = array();
// Rendering Boolean node
$arguments664['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.albumCount', $renderingContext), 0);
$arguments664['then'] = NULL;
$arguments664['else'] = NULL;
$renderChildrenClosure665 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output666 = '';

$output666 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments667 = array();
$renderChildrenClosure668 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output669 = '';

$output669 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments670 = array();
// Rendering Boolean node
$arguments670['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.hidden', $renderingContext));
$arguments670['then'] = NULL;
$arguments670['else'] = NULL;
$renderChildrenClosure671 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output672 = '';

$output672 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments673 = array();
$renderChildrenClosure674 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output675 = '';

$output675 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments676 = array();
$arguments676['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments676['keepQuotes'] = false;
$arguments676['encoding'] = NULL;
$arguments676['doubleEncode'] = true;
$renderChildrenClosure677 = function() {return NULL;};
$value678 = ($arguments676['value'] !== NULL ? $arguments676['value'] : $renderChildrenClosure677());

$output675 .= (!is_string($value678) ? $value678 : htmlspecialchars($value678, ($arguments676['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments676['encoding'] !== NULL ? $arguments676['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments676['doubleEncode']));

$output675 .= '-transparency"
                                                     class="tx-yag-transparency-half">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments679 = array();
$arguments679['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments679['resolutionName'] = 'thumb';
$arguments679['additionalAttributes'] = NULL;
$arguments679['data'] = NULL;
$arguments679['class'] = NULL;
$arguments679['dir'] = NULL;
$arguments679['id'] = NULL;
$arguments679['lang'] = NULL;
$arguments679['style'] = NULL;
$arguments679['title'] = NULL;
$arguments679['accesskey'] = NULL;
$arguments679['tabindex'] = NULL;
$arguments679['onclick'] = NULL;
$arguments679['alt'] = NULL;
$arguments679['centerVertical'] = NULL;
$arguments679['width'] = NULL;
$arguments679['height'] = NULL;
$arguments679['quality'] = 80;
$renderChildrenClosure680 = function() {return NULL;};
$viewHelper681 = $self->getViewHelper('$viewHelper681', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper681->setArguments($arguments679);
$viewHelper681->setRenderingContext($renderingContext);
$viewHelper681->setRenderChildrenClosure($renderChildrenClosure680);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output675 .= $viewHelper681->initializeArgumentsAndRender();

$output675 .= '
                                                </div>
                                            ';
return $output675;
};

$output672 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments673, $renderChildrenClosure674, $renderingContext);

$output672 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments682 = array();
$renderChildrenClosure683 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output684 = '';

$output684 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments685 = array();
$arguments685['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments685['keepQuotes'] = false;
$arguments685['encoding'] = NULL;
$arguments685['doubleEncode'] = true;
$renderChildrenClosure686 = function() {return NULL;};
$value687 = ($arguments685['value'] !== NULL ? $arguments685['value'] : $renderChildrenClosure686());

$output684 .= (!is_string($value687) ? $value687 : htmlspecialchars($value687, ($arguments685['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments685['encoding'] !== NULL ? $arguments685['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments685['doubleEncode']));

$output684 .= '-transparency">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments688 = array();
$arguments688['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments688['resolutionName'] = 'thumb';
$arguments688['additionalAttributes'] = NULL;
$arguments688['data'] = NULL;
$arguments688['class'] = NULL;
$arguments688['dir'] = NULL;
$arguments688['id'] = NULL;
$arguments688['lang'] = NULL;
$arguments688['style'] = NULL;
$arguments688['title'] = NULL;
$arguments688['accesskey'] = NULL;
$arguments688['tabindex'] = NULL;
$arguments688['onclick'] = NULL;
$arguments688['alt'] = NULL;
$arguments688['centerVertical'] = NULL;
$arguments688['width'] = NULL;
$arguments688['height'] = NULL;
$arguments688['quality'] = 80;
$renderChildrenClosure689 = function() {return NULL;};
$viewHelper690 = $self->getViewHelper('$viewHelper690', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper690->setArguments($arguments688);
$viewHelper690->setRenderingContext($renderingContext);
$viewHelper690->setRenderChildrenClosure($renderChildrenClosure689);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output684 .= $viewHelper690->initializeArgumentsAndRender();

$output684 .= '
                                                </div>
                                            ';
return $output684;
};

$output672 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments682, $renderChildrenClosure683, $renderingContext);

$output672 .= '
                                        ';
return $output672;
};
$arguments670['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output691 = '';

$output691 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments692 = array();
$arguments692['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments692['keepQuotes'] = false;
$arguments692['encoding'] = NULL;
$arguments692['doubleEncode'] = true;
$renderChildrenClosure693 = function() {return NULL;};
$value694 = ($arguments692['value'] !== NULL ? $arguments692['value'] : $renderChildrenClosure693());

$output691 .= (!is_string($value694) ? $value694 : htmlspecialchars($value694, ($arguments692['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments692['encoding'] !== NULL ? $arguments692['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments692['doubleEncode']));

$output691 .= '-transparency"
                                                     class="tx-yag-transparency-half">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments695 = array();
$arguments695['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments695['resolutionName'] = 'thumb';
$arguments695['additionalAttributes'] = NULL;
$arguments695['data'] = NULL;
$arguments695['class'] = NULL;
$arguments695['dir'] = NULL;
$arguments695['id'] = NULL;
$arguments695['lang'] = NULL;
$arguments695['style'] = NULL;
$arguments695['title'] = NULL;
$arguments695['accesskey'] = NULL;
$arguments695['tabindex'] = NULL;
$arguments695['onclick'] = NULL;
$arguments695['alt'] = NULL;
$arguments695['centerVertical'] = NULL;
$arguments695['width'] = NULL;
$arguments695['height'] = NULL;
$arguments695['quality'] = 80;
$renderChildrenClosure696 = function() {return NULL;};
$viewHelper697 = $self->getViewHelper('$viewHelper697', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper697->setArguments($arguments695);
$viewHelper697->setRenderingContext($renderingContext);
$viewHelper697->setRenderChildrenClosure($renderChildrenClosure696);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output691 .= $viewHelper697->initializeArgumentsAndRender();

$output691 .= '
                                                </div>
                                            ';
return $output691;
};
$arguments670['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output698 = '';

$output698 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments699 = array();
$arguments699['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments699['keepQuotes'] = false;
$arguments699['encoding'] = NULL;
$arguments699['doubleEncode'] = true;
$renderChildrenClosure700 = function() {return NULL;};
$value701 = ($arguments699['value'] !== NULL ? $arguments699['value'] : $renderChildrenClosure700());

$output698 .= (!is_string($value701) ? $value701 : htmlspecialchars($value701, ($arguments699['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments699['encoding'] !== NULL ? $arguments699['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments699['doubleEncode']));

$output698 .= '-transparency">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments702 = array();
$arguments702['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments702['resolutionName'] = 'thumb';
$arguments702['additionalAttributes'] = NULL;
$arguments702['data'] = NULL;
$arguments702['class'] = NULL;
$arguments702['dir'] = NULL;
$arguments702['id'] = NULL;
$arguments702['lang'] = NULL;
$arguments702['style'] = NULL;
$arguments702['title'] = NULL;
$arguments702['accesskey'] = NULL;
$arguments702['tabindex'] = NULL;
$arguments702['onclick'] = NULL;
$arguments702['alt'] = NULL;
$arguments702['centerVertical'] = NULL;
$arguments702['width'] = NULL;
$arguments702['height'] = NULL;
$arguments702['quality'] = 80;
$renderChildrenClosure703 = function() {return NULL;};
$viewHelper704 = $self->getViewHelper('$viewHelper704', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper704->setArguments($arguments702);
$viewHelper704->setRenderingContext($renderingContext);
$viewHelper704->setRenderChildrenClosure($renderChildrenClosure703);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output698 .= $viewHelper704->initializeArgumentsAndRender();

$output698 .= '
                                                </div>
                                            ';
return $output698;
};

$output669 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments670, $renderChildrenClosure671, $renderingContext);

$output669 .= '
                                    ';
return $output669;
};

$output666 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments667, $renderChildrenClosure668, $renderingContext);

$output666 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments705 = array();
$renderChildrenClosure706 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output707 = '';

$output707 .= '
                                        <div>
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments708 = array();
$arguments708['key'] = 'tx_yag_controller_gallery.noAlbums';
$arguments708['id'] = NULL;
$arguments708['default'] = NULL;
$arguments708['htmlEscape'] = NULL;
$arguments708['arguments'] = NULL;
$arguments708['extensionName'] = NULL;
$renderChildrenClosure709 = function() {return NULL;};

$output707 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments708, $renderChildrenClosure709, $renderingContext);

$output707 .= '
                                        </div>
                                    ';
return $output707;
};

$output666 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments705, $renderChildrenClosure706, $renderingContext);

$output666 .= '
                                ';
return $output666;
};
$arguments664['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output710 = '';

$output710 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments711 = array();
// Rendering Boolean node
$arguments711['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.hidden', $renderingContext));
$arguments711['then'] = NULL;
$arguments711['else'] = NULL;
$renderChildrenClosure712 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output713 = '';

$output713 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments714 = array();
$renderChildrenClosure715 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output716 = '';

$output716 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments717 = array();
$arguments717['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments717['keepQuotes'] = false;
$arguments717['encoding'] = NULL;
$arguments717['doubleEncode'] = true;
$renderChildrenClosure718 = function() {return NULL;};
$value719 = ($arguments717['value'] !== NULL ? $arguments717['value'] : $renderChildrenClosure718());

$output716 .= (!is_string($value719) ? $value719 : htmlspecialchars($value719, ($arguments717['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments717['encoding'] !== NULL ? $arguments717['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments717['doubleEncode']));

$output716 .= '-transparency"
                                                     class="tx-yag-transparency-half">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments720 = array();
$arguments720['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments720['resolutionName'] = 'thumb';
$arguments720['additionalAttributes'] = NULL;
$arguments720['data'] = NULL;
$arguments720['class'] = NULL;
$arguments720['dir'] = NULL;
$arguments720['id'] = NULL;
$arguments720['lang'] = NULL;
$arguments720['style'] = NULL;
$arguments720['title'] = NULL;
$arguments720['accesskey'] = NULL;
$arguments720['tabindex'] = NULL;
$arguments720['onclick'] = NULL;
$arguments720['alt'] = NULL;
$arguments720['centerVertical'] = NULL;
$arguments720['width'] = NULL;
$arguments720['height'] = NULL;
$arguments720['quality'] = 80;
$renderChildrenClosure721 = function() {return NULL;};
$viewHelper722 = $self->getViewHelper('$viewHelper722', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper722->setArguments($arguments720);
$viewHelper722->setRenderingContext($renderingContext);
$viewHelper722->setRenderChildrenClosure($renderChildrenClosure721);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output716 .= $viewHelper722->initializeArgumentsAndRender();

$output716 .= '
                                                </div>
                                            ';
return $output716;
};

$output713 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments714, $renderChildrenClosure715, $renderingContext);

$output713 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments723 = array();
$renderChildrenClosure724 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output725 = '';

$output725 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments726 = array();
$arguments726['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments726['keepQuotes'] = false;
$arguments726['encoding'] = NULL;
$arguments726['doubleEncode'] = true;
$renderChildrenClosure727 = function() {return NULL;};
$value728 = ($arguments726['value'] !== NULL ? $arguments726['value'] : $renderChildrenClosure727());

$output725 .= (!is_string($value728) ? $value728 : htmlspecialchars($value728, ($arguments726['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments726['encoding'] !== NULL ? $arguments726['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments726['doubleEncode']));

$output725 .= '-transparency">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments729 = array();
$arguments729['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments729['resolutionName'] = 'thumb';
$arguments729['additionalAttributes'] = NULL;
$arguments729['data'] = NULL;
$arguments729['class'] = NULL;
$arguments729['dir'] = NULL;
$arguments729['id'] = NULL;
$arguments729['lang'] = NULL;
$arguments729['style'] = NULL;
$arguments729['title'] = NULL;
$arguments729['accesskey'] = NULL;
$arguments729['tabindex'] = NULL;
$arguments729['onclick'] = NULL;
$arguments729['alt'] = NULL;
$arguments729['centerVertical'] = NULL;
$arguments729['width'] = NULL;
$arguments729['height'] = NULL;
$arguments729['quality'] = 80;
$renderChildrenClosure730 = function() {return NULL;};
$viewHelper731 = $self->getViewHelper('$viewHelper731', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper731->setArguments($arguments729);
$viewHelper731->setRenderingContext($renderingContext);
$viewHelper731->setRenderChildrenClosure($renderChildrenClosure730);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output725 .= $viewHelper731->initializeArgumentsAndRender();

$output725 .= '
                                                </div>
                                            ';
return $output725;
};

$output713 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments723, $renderChildrenClosure724, $renderingContext);

$output713 .= '
                                        ';
return $output713;
};
$arguments711['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output732 = '';

$output732 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments733 = array();
$arguments733['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments733['keepQuotes'] = false;
$arguments733['encoding'] = NULL;
$arguments733['doubleEncode'] = true;
$renderChildrenClosure734 = function() {return NULL;};
$value735 = ($arguments733['value'] !== NULL ? $arguments733['value'] : $renderChildrenClosure734());

$output732 .= (!is_string($value735) ? $value735 : htmlspecialchars($value735, ($arguments733['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments733['encoding'] !== NULL ? $arguments733['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments733['doubleEncode']));

$output732 .= '-transparency"
                                                     class="tx-yag-transparency-half">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments736 = array();
$arguments736['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments736['resolutionName'] = 'thumb';
$arguments736['additionalAttributes'] = NULL;
$arguments736['data'] = NULL;
$arguments736['class'] = NULL;
$arguments736['dir'] = NULL;
$arguments736['id'] = NULL;
$arguments736['lang'] = NULL;
$arguments736['style'] = NULL;
$arguments736['title'] = NULL;
$arguments736['accesskey'] = NULL;
$arguments736['tabindex'] = NULL;
$arguments736['onclick'] = NULL;
$arguments736['alt'] = NULL;
$arguments736['centerVertical'] = NULL;
$arguments736['width'] = NULL;
$arguments736['height'] = NULL;
$arguments736['quality'] = 80;
$renderChildrenClosure737 = function() {return NULL;};
$viewHelper738 = $self->getViewHelper('$viewHelper738', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper738->setArguments($arguments736);
$viewHelper738->setRenderingContext($renderingContext);
$viewHelper738->setRenderChildrenClosure($renderChildrenClosure737);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output732 .= $viewHelper738->initializeArgumentsAndRender();

$output732 .= '
                                                </div>
                                            ';
return $output732;
};
$arguments711['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output739 = '';

$output739 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments740 = array();
$arguments740['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments740['keepQuotes'] = false;
$arguments740['encoding'] = NULL;
$arguments740['doubleEncode'] = true;
$renderChildrenClosure741 = function() {return NULL;};
$value742 = ($arguments740['value'] !== NULL ? $arguments740['value'] : $renderChildrenClosure741());

$output739 .= (!is_string($value742) ? $value742 : htmlspecialchars($value742, ($arguments740['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments740['encoding'] !== NULL ? $arguments740['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments740['doubleEncode']));

$output739 .= '-transparency">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments743 = array();
$arguments743['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments743['resolutionName'] = 'thumb';
$arguments743['additionalAttributes'] = NULL;
$arguments743['data'] = NULL;
$arguments743['class'] = NULL;
$arguments743['dir'] = NULL;
$arguments743['id'] = NULL;
$arguments743['lang'] = NULL;
$arguments743['style'] = NULL;
$arguments743['title'] = NULL;
$arguments743['accesskey'] = NULL;
$arguments743['tabindex'] = NULL;
$arguments743['onclick'] = NULL;
$arguments743['alt'] = NULL;
$arguments743['centerVertical'] = NULL;
$arguments743['width'] = NULL;
$arguments743['height'] = NULL;
$arguments743['quality'] = 80;
$renderChildrenClosure744 = function() {return NULL;};
$viewHelper745 = $self->getViewHelper('$viewHelper745', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper745->setArguments($arguments743);
$viewHelper745->setRenderingContext($renderingContext);
$viewHelper745->setRenderChildrenClosure($renderChildrenClosure744);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output739 .= $viewHelper745->initializeArgumentsAndRender();

$output739 .= '
                                                </div>
                                            ';
return $output739;
};

$output710 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments711, $renderChildrenClosure712, $renderingContext);

$output710 .= '
                                    ';
return $output710;
};
$arguments664['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output746 = '';

$output746 .= '
                                        <div>
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments747 = array();
$arguments747['key'] = 'tx_yag_controller_gallery.noAlbums';
$arguments747['id'] = NULL;
$arguments747['default'] = NULL;
$arguments747['htmlEscape'] = NULL;
$arguments747['arguments'] = NULL;
$arguments747['extensionName'] = NULL;
$renderChildrenClosure748 = function() {return NULL;};

$output746 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments747, $renderChildrenClosure748, $renderingContext);

$output746 .= '
                                        </div>
                                    ';
return $output746;
};

$output663 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments664, $renderChildrenClosure665, $renderingContext);

$output663 .= '
                            ';
return $output663;
};
$viewHelper749 = $self->getViewHelper('$viewHelper749', $renderingContext, 'Tx_Yag_ViewHelpers_Link_GalleryViewHelper');
$viewHelper749->setArguments($arguments661);
$viewHelper749->setRenderingContext($renderingContext);
$viewHelper749->setRenderChildrenClosure($renderChildrenClosure662);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper

$output657 .= $viewHelper749->initializeArgumentsAndRender();

$output657 .= '
                        </td>
                        <td class="yag-col-title">
                            <div>
                                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper
$arguments750 = array();
$arguments750['gallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value', $renderingContext);
$arguments750['additionalAttributes'] = NULL;
$arguments750['data'] = NULL;
$arguments750['galleryUid'] = NULL;
$arguments750['pageUid'] = NULL;
$arguments750['pageType'] = 0;
$arguments750['noCache'] = false;
$arguments750['noCacheHash'] = false;
$arguments750['section'] = '';
$arguments750['format'] = '';
$arguments750['class'] = NULL;
$arguments750['dir'] = NULL;
$arguments750['id'] = NULL;
$arguments750['lang'] = NULL;
$arguments750['style'] = NULL;
$arguments750['title'] = NULL;
$arguments750['accesskey'] = NULL;
$arguments750['tabindex'] = NULL;
$arguments750['onclick'] = NULL;
$arguments750['name'] = NULL;
$arguments750['rel'] = NULL;
$arguments750['rev'] = NULL;
$arguments750['target'] = NULL;
$renderChildrenClosure751 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output752 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments753 = array();
$arguments753['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.name', $renderingContext);
$arguments753['keepQuotes'] = false;
$arguments753['encoding'] = NULL;
$arguments753['doubleEncode'] = true;
$renderChildrenClosure754 = function() {return NULL;};
$value755 = ($arguments753['value'] !== NULL ? $arguments753['value'] : $renderChildrenClosure754());

$output752 .= (!is_string($value755) ? $value755 : htmlspecialchars($value755, ($arguments753['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments753['encoding'] !== NULL ? $arguments753['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments753['doubleEncode']));

$output752 .= '
                                ';
return $output752;
};
$viewHelper756 = $self->getViewHelper('$viewHelper756', $renderingContext, 'Tx_Yag_ViewHelpers_Link_GalleryViewHelper');
$viewHelper756->setArguments($arguments750);
$viewHelper756->setRenderingContext($renderingContext);
$viewHelper756->setRenderChildrenClosure($renderChildrenClosure751);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper

$output657 .= $viewHelper756->initializeArgumentsAndRender();

$output657 .= '
                                <br/>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments757 = array();
$arguments757['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.albumCount', $renderingContext);
$arguments757['keepQuotes'] = false;
$arguments757['encoding'] = NULL;
$arguments757['doubleEncode'] = true;
$renderChildrenClosure758 = function() {return NULL;};
$value759 = ($arguments757['value'] !== NULL ? $arguments757['value'] : $renderChildrenClosure758());

$output657 .= (!is_string($value759) ? $value759 : htmlspecialchars($value759, ($arguments757['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments757['encoding'] !== NULL ? $arguments757['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments757['doubleEncode']));

$output657 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments760 = array();
// Rendering Boolean node
// Rendering Array
$array761 = array();
$array761['1'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.albumCount', $renderingContext);
// Rendering Array
$array762 = array();
$array762['1'] = 1;
$arguments760['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array761, $array762);
$arguments760['then'] = NULL;
$arguments760['else'] = NULL;
$renderChildrenClosure763 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output764 = '';

$output764 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments765 = array();
$renderChildrenClosure766 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output767 = '';

$output767 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments768 = array();
$arguments768['key'] = 'tx_yag_general.album';
$arguments768['id'] = NULL;
$arguments768['default'] = NULL;
$arguments768['htmlEscape'] = NULL;
$arguments768['arguments'] = NULL;
$arguments768['extensionName'] = NULL;
$renderChildrenClosure769 = function() {return NULL;};

$output767 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments768, $renderChildrenClosure769, $renderingContext);

$output767 .= '
                                    ';
return $output767;
};

$output764 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments765, $renderChildrenClosure766, $renderingContext);

$output764 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments770 = array();
$renderChildrenClosure771 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output772 = '';

$output772 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments773 = array();
$arguments773['key'] = 'tx_yag_general.albums';
$arguments773['id'] = NULL;
$arguments773['default'] = NULL;
$arguments773['htmlEscape'] = NULL;
$arguments773['arguments'] = NULL;
$arguments773['extensionName'] = NULL;
$renderChildrenClosure774 = function() {return NULL;};

$output772 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments773, $renderChildrenClosure774, $renderingContext);

$output772 .= '
                                    ';
return $output772;
};

$output764 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments770, $renderChildrenClosure771, $renderingContext);

$output764 .= '
                                ';
return $output764;
};
$arguments760['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output775 = '';

$output775 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments776 = array();
$arguments776['key'] = 'tx_yag_general.album';
$arguments776['id'] = NULL;
$arguments776['default'] = NULL;
$arguments776['htmlEscape'] = NULL;
$arguments776['arguments'] = NULL;
$arguments776['extensionName'] = NULL;
$renderChildrenClosure777 = function() {return NULL;};

$output775 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments776, $renderChildrenClosure777, $renderingContext);

$output775 .= '
                                    ';
return $output775;
};
$arguments760['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output778 = '';

$output778 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments779 = array();
$arguments779['key'] = 'tx_yag_general.albums';
$arguments779['id'] = NULL;
$arguments779['default'] = NULL;
$arguments779['htmlEscape'] = NULL;
$arguments779['arguments'] = NULL;
$arguments779['extensionName'] = NULL;
$renderChildrenClosure780 = function() {return NULL;};

$output778 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments779, $renderChildrenClosure780, $renderingContext);

$output778 .= '
                                    ';
return $output778;
};

$output657 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments760, $renderChildrenClosure763, $renderingContext);

$output657 .= '
                                <br/>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments781 = array();
$arguments781['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.itemCount', $renderingContext);
$arguments781['keepQuotes'] = false;
$arguments781['encoding'] = NULL;
$arguments781['doubleEncode'] = true;
$renderChildrenClosure782 = function() {return NULL;};
$value783 = ($arguments781['value'] !== NULL ? $arguments781['value'] : $renderChildrenClosure782());

$output657 .= (!is_string($value783) ? $value783 : htmlspecialchars($value783, ($arguments781['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments781['encoding'] !== NULL ? $arguments781['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments781['doubleEncode']));

$output657 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments784 = array();
// Rendering Boolean node
// Rendering Array
$array785 = array();
$array785['1'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.itemCount', $renderingContext);
// Rendering Array
$array786 = array();
$array786['1'] = 1;
$arguments784['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array785, $array786);
$arguments784['then'] = NULL;
$arguments784['else'] = NULL;
$renderChildrenClosure787 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output788 = '';

$output788 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments789 = array();
$renderChildrenClosure790 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output791 = '';

$output791 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments792 = array();
$arguments792['key'] = 'tx_yag_general.image';
$arguments792['id'] = NULL;
$arguments792['default'] = NULL;
$arguments792['htmlEscape'] = NULL;
$arguments792['arguments'] = NULL;
$arguments792['extensionName'] = NULL;
$renderChildrenClosure793 = function() {return NULL;};

$output791 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments792, $renderChildrenClosure793, $renderingContext);

$output791 .= '
                                    ';
return $output791;
};

$output788 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments789, $renderChildrenClosure790, $renderingContext);

$output788 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments794 = array();
$renderChildrenClosure795 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output796 = '';

$output796 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments797 = array();
$arguments797['key'] = 'tx_yag_general.images';
$arguments797['id'] = NULL;
$arguments797['default'] = NULL;
$arguments797['htmlEscape'] = NULL;
$arguments797['arguments'] = NULL;
$arguments797['extensionName'] = NULL;
$renderChildrenClosure798 = function() {return NULL;};

$output796 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments797, $renderChildrenClosure798, $renderingContext);

$output796 .= '
                                    ';
return $output796;
};

$output788 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments794, $renderChildrenClosure795, $renderingContext);

$output788 .= '
                                ';
return $output788;
};
$arguments784['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output799 = '';

$output799 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments800 = array();
$arguments800['key'] = 'tx_yag_general.image';
$arguments800['id'] = NULL;
$arguments800['default'] = NULL;
$arguments800['htmlEscape'] = NULL;
$arguments800['arguments'] = NULL;
$arguments800['extensionName'] = NULL;
$renderChildrenClosure801 = function() {return NULL;};

$output799 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments800, $renderChildrenClosure801, $renderingContext);

$output799 .= '
                                    ';
return $output799;
};
$arguments784['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output802 = '';

$output802 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments803 = array();
$arguments803['key'] = 'tx_yag_general.images';
$arguments803['id'] = NULL;
$arguments803['default'] = NULL;
$arguments803['htmlEscape'] = NULL;
$arguments803['arguments'] = NULL;
$arguments803['extensionName'] = NULL;
$renderChildrenClosure804 = function() {return NULL;};

$output802 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments803, $renderChildrenClosure804, $renderingContext);

$output802 .= '
                                    ';
return $output802;
};

$output657 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments784, $renderChildrenClosure787, $renderingContext);

$output657 .= '
                            </div>
                        </td>
                        <td class="actions icons">
                            <div class="btn-group">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments805 = array();
// Rendering ViewHelper Tx_Yag_ViewHelpers_Uri_GalleryViewHelper
$arguments806 = array();
$arguments806['gallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value', $renderingContext);
$arguments806['section'] = 'tabs-3';
$arguments806['galleryUid'] = NULL;
$arguments806['pageUid'] = NULL;
$arguments806['pageType'] = 0;
$arguments806['noCache'] = false;
$arguments806['noCacheHash'] = false;
$arguments806['format'] = '';
$renderChildrenClosure807 = function() {return NULL;};
$viewHelper808 = $self->getViewHelper('$viewHelper808', $renderingContext, 'Tx_Yag_ViewHelpers_Uri_GalleryViewHelper');
$viewHelper808->setArguments($arguments806);
$viewHelper808->setRenderingContext($renderingContext);
$viewHelper808->setRenderChildrenClosure($renderChildrenClosure807);
// End of ViewHelper Tx_Yag_ViewHelpers_Uri_GalleryViewHelper
$arguments805['uri'] = $viewHelper808->initializeArgumentsAndRender();
$arguments805['icon'] = 'actions-document-open';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments809 = array();
$arguments809['key'] = 'tx_yag_controller_gallery.editGallery';
$arguments809['id'] = NULL;
$arguments809['default'] = NULL;
$arguments809['htmlEscape'] = NULL;
$arguments809['arguments'] = NULL;
$arguments809['extensionName'] = NULL;
$renderChildrenClosure810 = function() {return NULL;};
$arguments805['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments809, $renderChildrenClosure810, $renderingContext);
// Rendering Array
$array811 = array();
$array811['class'] = 'btn';
$arguments805['additionalAttributes'] = $array811;
$renderChildrenClosure812 = function() {return NULL;};

$output657 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments805, $renderChildrenClosure812, $renderingContext);

$output657 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments813 = array();
// Rendering Boolean node
$arguments813['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.hidden', $renderingContext));
$arguments813['then'] = NULL;
$arguments813['else'] = NULL;
$renderChildrenClosure814 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output815 = '';

$output815 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments816 = array();
$renderChildrenClosure817 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output818 = '';

$output818 .= '
                                        <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments819 = array();
$arguments819['key'] = 'tx_yag_controller_gallery.unhideGallery';
$arguments819['id'] = NULL;
$arguments819['default'] = NULL;
$arguments819['htmlEscape'] = NULL;
$arguments819['arguments'] = NULL;
$arguments819['extensionName'] = NULL;
$renderChildrenClosure820 = function() {return NULL;};

$output818 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments819, $renderChildrenClosure820, $renderingContext);

$output818 .= '"
                                           id="unhide-gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments821 = array();
$arguments821['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments821['keepQuotes'] = false;
$arguments821['encoding'] = NULL;
$arguments821['doubleEncode'] = true;
$renderChildrenClosure822 = function() {return NULL;};
$value823 = ($arguments821['value'] !== NULL ? $arguments821['value'] : $renderChildrenClosure822());

$output818 .= (!is_string($value823) ? $value823 : htmlspecialchars($value823, ($arguments821['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments821['encoding'] !== NULL ? $arguments821['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments821['doubleEncode']));

$output818 .= '" class="unhide-gallery btn"
                                           galleryUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments824 = array();
$arguments824['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments824['keepQuotes'] = false;
$arguments824['encoding'] = NULL;
$arguments824['doubleEncode'] = true;
$renderChildrenClosure825 = function() {return NULL;};
$value826 = ($arguments824['value'] !== NULL ? $arguments824['value'] : $renderChildrenClosure825());

$output818 .= (!is_string($value826) ? $value826 : htmlspecialchars($value826, ($arguments824['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments824['encoding'] !== NULL ? $arguments824['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments824['doubleEncode']));

$output818 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments827 = array();
$arguments827['identifier'] = 'actions-edit-hide';
$arguments827['size'] = 'small';
$arguments827['overlay'] = NULL;
$arguments827['state'] = 'default';
$arguments827['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure828 = function() {return NULL;};

$output818 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments827, $renderChildrenClosure828, $renderingContext);

$output818 .= '
                                        </a>
                                    ';
return $output818;
};

$output815 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments816, $renderChildrenClosure817, $renderingContext);

$output815 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments829 = array();
$renderChildrenClosure830 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output831 = '';

$output831 .= '
                                        <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments832 = array();
$arguments832['key'] = 'tx_yag_controller_gallery.hideGallery';
$arguments832['id'] = NULL;
$arguments832['default'] = NULL;
$arguments832['htmlEscape'] = NULL;
$arguments832['arguments'] = NULL;
$arguments832['extensionName'] = NULL;
$renderChildrenClosure833 = function() {return NULL;};

$output831 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments832, $renderChildrenClosure833, $renderingContext);

$output831 .= '"
                                           id="hide-gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments834 = array();
$arguments834['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments834['keepQuotes'] = false;
$arguments834['encoding'] = NULL;
$arguments834['doubleEncode'] = true;
$renderChildrenClosure835 = function() {return NULL;};
$value836 = ($arguments834['value'] !== NULL ? $arguments834['value'] : $renderChildrenClosure835());

$output831 .= (!is_string($value836) ? $value836 : htmlspecialchars($value836, ($arguments834['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments834['encoding'] !== NULL ? $arguments834['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments834['doubleEncode']));

$output831 .= '" class="hide-gallery btn"
                                           galleryUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments837 = array();
$arguments837['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments837['keepQuotes'] = false;
$arguments837['encoding'] = NULL;
$arguments837['doubleEncode'] = true;
$renderChildrenClosure838 = function() {return NULL;};
$value839 = ($arguments837['value'] !== NULL ? $arguments837['value'] : $renderChildrenClosure838());

$output831 .= (!is_string($value839) ? $value839 : htmlspecialchars($value839, ($arguments837['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments837['encoding'] !== NULL ? $arguments837['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments837['doubleEncode']));

$output831 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments840 = array();
$arguments840['identifier'] = 'actions-edit-unhide';
$arguments840['size'] = 'small';
$arguments840['overlay'] = NULL;
$arguments840['state'] = 'default';
$arguments840['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure841 = function() {return NULL;};

$output831 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments840, $renderChildrenClosure841, $renderingContext);

$output831 .= '
                                        </a>
                                    ';
return $output831;
};

$output815 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments829, $renderChildrenClosure830, $renderingContext);

$output815 .= '
                                ';
return $output815;
};
$arguments813['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output842 = '';

$output842 .= '
                                        <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments843 = array();
$arguments843['key'] = 'tx_yag_controller_gallery.unhideGallery';
$arguments843['id'] = NULL;
$arguments843['default'] = NULL;
$arguments843['htmlEscape'] = NULL;
$arguments843['arguments'] = NULL;
$arguments843['extensionName'] = NULL;
$renderChildrenClosure844 = function() {return NULL;};

$output842 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments843, $renderChildrenClosure844, $renderingContext);

$output842 .= '"
                                           id="unhide-gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments845 = array();
$arguments845['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments845['keepQuotes'] = false;
$arguments845['encoding'] = NULL;
$arguments845['doubleEncode'] = true;
$renderChildrenClosure846 = function() {return NULL;};
$value847 = ($arguments845['value'] !== NULL ? $arguments845['value'] : $renderChildrenClosure846());

$output842 .= (!is_string($value847) ? $value847 : htmlspecialchars($value847, ($arguments845['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments845['encoding'] !== NULL ? $arguments845['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments845['doubleEncode']));

$output842 .= '" class="unhide-gallery btn"
                                           galleryUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments848 = array();
$arguments848['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments848['keepQuotes'] = false;
$arguments848['encoding'] = NULL;
$arguments848['doubleEncode'] = true;
$renderChildrenClosure849 = function() {return NULL;};
$value850 = ($arguments848['value'] !== NULL ? $arguments848['value'] : $renderChildrenClosure849());

$output842 .= (!is_string($value850) ? $value850 : htmlspecialchars($value850, ($arguments848['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments848['encoding'] !== NULL ? $arguments848['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments848['doubleEncode']));

$output842 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments851 = array();
$arguments851['identifier'] = 'actions-edit-hide';
$arguments851['size'] = 'small';
$arguments851['overlay'] = NULL;
$arguments851['state'] = 'default';
$arguments851['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure852 = function() {return NULL;};

$output842 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments851, $renderChildrenClosure852, $renderingContext);

$output842 .= '
                                        </a>
                                    ';
return $output842;
};
$arguments813['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output853 = '';

$output853 .= '
                                        <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments854 = array();
$arguments854['key'] = 'tx_yag_controller_gallery.hideGallery';
$arguments854['id'] = NULL;
$arguments854['default'] = NULL;
$arguments854['htmlEscape'] = NULL;
$arguments854['arguments'] = NULL;
$arguments854['extensionName'] = NULL;
$renderChildrenClosure855 = function() {return NULL;};

$output853 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments854, $renderChildrenClosure855, $renderingContext);

$output853 .= '"
                                           id="hide-gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments856 = array();
$arguments856['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments856['keepQuotes'] = false;
$arguments856['encoding'] = NULL;
$arguments856['doubleEncode'] = true;
$renderChildrenClosure857 = function() {return NULL;};
$value858 = ($arguments856['value'] !== NULL ? $arguments856['value'] : $renderChildrenClosure857());

$output853 .= (!is_string($value858) ? $value858 : htmlspecialchars($value858, ($arguments856['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments856['encoding'] !== NULL ? $arguments856['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments856['doubleEncode']));

$output853 .= '" class="hide-gallery btn"
                                           galleryUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments859 = array();
$arguments859['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments859['keepQuotes'] = false;
$arguments859['encoding'] = NULL;
$arguments859['doubleEncode'] = true;
$renderChildrenClosure860 = function() {return NULL;};
$value861 = ($arguments859['value'] !== NULL ? $arguments859['value'] : $renderChildrenClosure860());

$output853 .= (!is_string($value861) ? $value861 : htmlspecialchars($value861, ($arguments859['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments859['encoding'] !== NULL ? $arguments859['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments859['doubleEncode']));

$output853 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments862 = array();
$arguments862['identifier'] = 'actions-edit-unhide';
$arguments862['size'] = 'small';
$arguments862['overlay'] = NULL;
$arguments862['state'] = 'default';
$arguments862['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure863 = function() {return NULL;};

$output853 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments862, $renderChildrenClosure863, $renderingContext);

$output853 .= '
                                        </a>
                                    ';
return $output853;
};

$output657 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments813, $renderChildrenClosure814, $renderingContext);

$output657 .= '

                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments864 = array();
$arguments864['uri'] = '#';
$arguments864['icon'] = 'actions-edit-delete';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments865 = array();
$arguments865['key'] = 'tx_yag_controller_gallery.deleteGallery';
$arguments865['id'] = NULL;
$arguments865['default'] = NULL;
$arguments865['htmlEscape'] = NULL;
$arguments865['arguments'] = NULL;
$arguments865['extensionName'] = NULL;
$renderChildrenClosure866 = function() {return NULL;};
$arguments864['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments865, $renderChildrenClosure866, $renderingContext);
// Rendering Array
$array867 = array();
$array867['class'] = 'gallery-linkbar-delete btn';
$array867['galleryUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments864['additionalAttributes'] = $array867;
$renderChildrenClosure868 = function() {return NULL;};

$output657 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments864, $renderChildrenClosure868, $renderingContext);

$output657 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments869 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments870 = array();
$arguments870['action'] = 'new';
$arguments870['controller'] = 'Album';
// Rendering Array
$array871 = array();
$array871['gallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value', $renderingContext);
$arguments870['arguments'] = $array871;
$arguments870['extensionName'] = NULL;
$arguments870['pluginName'] = NULL;
$arguments870['pageUid'] = NULL;
$arguments870['pageType'] = 0;
$arguments870['noCache'] = false;
$arguments870['noCacheHash'] = false;
$arguments870['section'] = '';
$arguments870['format'] = '';
$arguments870['linkAccessRestrictedPages'] = false;
$arguments870['additionalParams'] = array (
);
$arguments870['absolute'] = false;
$arguments870['addQueryString'] = false;
$arguments870['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments870['addQueryStringMethod'] = NULL;
$renderChildrenClosure872 = function() {return NULL;};
$viewHelper873 = $self->getViewHelper('$viewHelper873', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper873->setArguments($arguments870);
$viewHelper873->setRenderingContext($renderingContext);
$viewHelper873->setRenderChildrenClosure($renderChildrenClosure872);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments869['uri'] = $viewHelper873->initializeArgumentsAndRender();
$arguments869['icon'] = 'actions-document-new';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments874 = array();
$arguments874['key'] = 'tx_yag_controller_album.addAlbum';
$arguments874['id'] = NULL;
$arguments874['default'] = NULL;
$arguments874['htmlEscape'] = NULL;
$arguments874['arguments'] = NULL;
$arguments874['extensionName'] = NULL;
$renderChildrenClosure875 = function() {return NULL;};
$arguments869['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments874, $renderChildrenClosure875, $renderingContext);
// Rendering Array
$array876 = array();
$array876['class'] = 'btn';
$arguments869['additionalAttributes'] = $array876;
$renderChildrenClosure877 = function() {return NULL;};

$output657 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments869, $renderChildrenClosure877, $renderingContext);

$output657 .= '

                            </div>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments878 = array();
// Rendering Boolean node
$arguments878['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.description', $renderingContext));
$arguments878['then'] = NULL;
$arguments878['else'] = NULL;
$renderChildrenClosure879 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output880 = '';

$output880 .= '
                                <div class="yag-description">
                                    <div class="typo3-dimmed">
                                        <b>
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments881 = array();
$arguments881['key'] = 'tx_yag_domain_model_gallery.description';
$arguments881['id'] = NULL;
$arguments881['default'] = NULL;
$arguments881['htmlEscape'] = NULL;
$arguments881['arguments'] = NULL;
$arguments881['extensionName'] = NULL;
$renderChildrenClosure882 = function() {return NULL;};

$output880 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments881, $renderChildrenClosure882, $renderingContext);

$output880 .= '
                                        </b>
                                    </div>
                                    <div class="typo3-dimmed">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$arguments883 = array();
$arguments883['value'] = NULL;
$renderChildrenClosure884 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments885 = array();
$arguments885['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.description', $renderingContext);
$arguments885['keepQuotes'] = false;
$arguments885['encoding'] = NULL;
$arguments885['doubleEncode'] = true;
$renderChildrenClosure886 = function() {return NULL;};
$value887 = ($arguments885['value'] !== NULL ? $arguments885['value'] : $renderChildrenClosure886());
return (!is_string($value887) ? $value887 : htmlspecialchars($value887, ($arguments885['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments885['encoding'] !== NULL ? $arguments885['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments885['doubleEncode']));
};

$output880 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments883, $renderChildrenClosure884, $renderingContext);

$output880 .= '
                                    </div>
                                </div>
                            ';
return $output880;
};

$output657 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments878, $renderChildrenClosure879, $renderingContext);

$output657 .= '
                        </td>
                    </tr>
                ';
return $output657;
};

$output638 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments655, $renderChildrenClosure656, $renderingContext);

$output638 .= '
                </tbody>
            </table>
        ';
return $output638;
};

$output635 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments636, $renderChildrenClosure637, $renderingContext);

$output635 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments888 = array();
$renderChildrenClosure889 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output890 = '';

$output890 .= '

            <div>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments891 = array();
// Rendering Boolean node
$arguments891['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pidDetector'), 'currentPageIsNoYagPage', $renderingContext));
$arguments891['then'] = NULL;
$arguments891['else'] = NULL;
$renderChildrenClosure892 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output893 = '';

$output893 .= '
                    <div class="tx-extbase-flash-message">
                        <div class="alert alert-info">
                            <h4>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments894 = array();
$arguments894['key'] = 'tx_yag_controller_gallery.notAYAGFolderHeader';
$arguments894['id'] = NULL;
$arguments894['default'] = NULL;
$arguments894['htmlEscape'] = NULL;
$arguments894['arguments'] = NULL;
$arguments894['extensionName'] = NULL;
$renderChildrenClosure895 = function() {return NULL;};

$output893 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments894, $renderChildrenClosure895, $renderingContext);

$output893 .= '
                            </h4>
                            <div class="alert-body">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments896 = array();
$arguments896['key'] = 'tx_yag_controller_gallery.selectPageWithYag';
$arguments896['id'] = NULL;
$arguments896['default'] = NULL;
$arguments896['htmlEscape'] = NULL;
$arguments896['arguments'] = NULL;
$arguments896['extensionName'] = NULL;
$renderChildrenClosure897 = function() {return NULL;};

$output893 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments896, $renderChildrenClosure897, $renderingContext);

$output893 .= '

                                <select id="yag_pid_selector"
                                        onchange="jumpToUrl(this.options[this.selectedIndex].value, this);">
                                    <option value="">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments898 = array();
$arguments898['key'] = 'tx_yag_controller_gallery.selectAPage';
$arguments898['id'] = NULL;
$arguments898['default'] = NULL;
$arguments898['htmlEscape'] = NULL;
$arguments898['arguments'] = NULL;
$arguments898['extensionName'] = NULL;
$renderChildrenClosure899 = function() {return NULL;};

$output893 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments898, $renderChildrenClosure899, $renderingContext);

$output893 .= '
                                    </option>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments900 = array();
$arguments900['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pidDetector'), 'pageRecords', $renderingContext);
$arguments900['as'] = 'page';
$arguments900['key'] = '';
$arguments900['reverse'] = false;
$arguments900['iteration'] = NULL;
$renderChildrenClosure901 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output902 = '';

$output902 .= '
                                        <option value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments903 = array();
$arguments903['controller'] = 'Gallery';
$arguments903['action'] = 'list';
// Rendering Array
$array904 = array();
$array904['id'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'uid', $renderingContext);
$arguments903['additionalParams'] = $array904;
$arguments903['arguments'] = array (
);
$arguments903['extensionName'] = NULL;
$arguments903['pluginName'] = NULL;
$arguments903['pageUid'] = NULL;
$arguments903['pageType'] = 0;
$arguments903['noCache'] = false;
$arguments903['noCacheHash'] = false;
$arguments903['section'] = '';
$arguments903['format'] = '';
$arguments903['linkAccessRestrictedPages'] = false;
$arguments903['absolute'] = false;
$arguments903['addQueryString'] = false;
$arguments903['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments903['addQueryStringMethod'] = NULL;
$renderChildrenClosure905 = function() {return NULL;};
$viewHelper906 = $self->getViewHelper('$viewHelper906', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper906->setArguments($arguments903);
$viewHelper906->setRenderingContext($renderingContext);
$viewHelper906->setRenderChildrenClosure($renderChildrenClosure905);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output902 .= $viewHelper906->initializeArgumentsAndRender();

$output902 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments907 = array();
$arguments907['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'title', $renderingContext);
$arguments907['keepQuotes'] = false;
$arguments907['encoding'] = NULL;
$arguments907['doubleEncode'] = true;
$renderChildrenClosure908 = function() {return NULL;};
$value909 = ($arguments907['value'] !== NULL ? $arguments907['value'] : $renderChildrenClosure908());

$output902 .= (!is_string($value909) ? $value909 : htmlspecialchars($value909, ($arguments907['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments907['encoding'] !== NULL ? $arguments907['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments907['doubleEncode']));

$output902 .= '
                                        </option>
                                    ';
return $output902;
};

$output893 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments900, $renderChildrenClosure901, $renderingContext);

$output893 .= '
                                </select><br/><br/>

                                <p>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments910 = array();
$arguments910['controller'] = 'Backend';
$arguments910['action'] = 'markPageAsYagSysFolder';
// Rendering Array
$array911 = array();
$array911['pid'] = $currentVariableContainer->getOrNull('currentPid');
$arguments910['arguments'] = $array911;
$arguments910['additionalAttributes'] = NULL;
$arguments910['data'] = NULL;
$arguments910['extensionName'] = NULL;
$arguments910['pluginName'] = NULL;
$arguments910['pageUid'] = NULL;
$arguments910['pageType'] = 0;
$arguments910['noCache'] = false;
$arguments910['noCacheHash'] = false;
$arguments910['section'] = '';
$arguments910['format'] = '';
$arguments910['linkAccessRestrictedPages'] = false;
$arguments910['additionalParams'] = array (
);
$arguments910['absolute'] = false;
$arguments910['addQueryString'] = false;
$arguments910['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments910['addQueryStringMethod'] = NULL;
$arguments910['class'] = NULL;
$arguments910['dir'] = NULL;
$arguments910['id'] = NULL;
$arguments910['lang'] = NULL;
$arguments910['style'] = NULL;
$arguments910['title'] = NULL;
$arguments910['accesskey'] = NULL;
$arguments910['tabindex'] = NULL;
$arguments910['onclick'] = NULL;
$arguments910['name'] = NULL;
$arguments910['rel'] = NULL;
$arguments910['rev'] = NULL;
$arguments910['target'] = NULL;
$renderChildrenClosure912 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output913 = '';

$output913 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments914 = array();
$arguments914['key'] = 'tx_yag_controller_gallery.markAsYagSysfolder';
$arguments914['id'] = NULL;
$arguments914['default'] = NULL;
$arguments914['htmlEscape'] = NULL;
$arguments914['arguments'] = NULL;
$arguments914['extensionName'] = NULL;
$renderChildrenClosure915 = function() {return NULL;};

$output913 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments914, $renderChildrenClosure915, $renderingContext);

$output913 .= '
                                    ';
return $output913;
};
$viewHelper916 = $self->getViewHelper('$viewHelper916', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper916->setArguments($arguments910);
$viewHelper916->setRenderingContext($renderingContext);
$viewHelper916->setRenderChildrenClosure($renderChildrenClosure912);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output893 .= $viewHelper916->initializeArgumentsAndRender();

$output893 .= '
                                </p>
                            </div>
                        </div>
                    </div>
                ';
return $output893;
};

$output890 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments891, $renderChildrenClosure892, $renderingContext);

$output890 .= '

                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments917 = array();
// Rendering Boolean node
$arguments917['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pidDetector'), 'currentPageIsYagPage', $renderingContext));
$arguments917['then'] = NULL;
$arguments917['else'] = NULL;
$renderChildrenClosure918 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output919 = '';

$output919 .= '
                    <div class="tx-extbase-flash-message">
                        <div class="alert alert-info">
                            <h4>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments920 = array();
$arguments920['key'] = 'tx_yag_controller_gallery.createYagRecords';
$arguments920['id'] = NULL;
$arguments920['default'] = NULL;
$arguments920['htmlEscape'] = NULL;
$arguments920['arguments'] = NULL;
$arguments920['extensionName'] = NULL;
$renderChildrenClosure921 = function() {return NULL;};

$output919 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments920, $renderChildrenClosure921, $renderingContext);

$output919 .= '
                            </h4>
                            <div class="alert-body">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments922 = array();
$arguments922['key'] = 'tx_yag_domain_model_gallery.noGalleryClick';
$arguments922['id'] = NULL;
$arguments922['default'] = NULL;
$arguments922['htmlEscape'] = NULL;
$arguments922['arguments'] = NULL;
$arguments922['extensionName'] = NULL;
$renderChildrenClosure923 = function() {return NULL;};

$output919 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments922, $renderChildrenClosure923, $renderingContext);

$output919 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments924 = array();
$arguments924['controller'] = 'Gallery';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments925 = array();
$arguments925['key'] = 'tx_yag_controller_gallery.addGallery';
$arguments925['id'] = NULL;
$arguments925['default'] = NULL;
$arguments925['htmlEscape'] = NULL;
$arguments925['arguments'] = NULL;
$arguments925['extensionName'] = NULL;
$renderChildrenClosure926 = function() {return NULL;};
$arguments924['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments925, $renderChildrenClosure926, $renderingContext);
$arguments924['action'] = 'new';
$arguments924['additionalAttributes'] = NULL;
$arguments924['data'] = NULL;
$arguments924['arguments'] = array (
);
$arguments924['extensionName'] = NULL;
$arguments924['pluginName'] = NULL;
$arguments924['pageUid'] = NULL;
$arguments924['pageType'] = 0;
$arguments924['noCache'] = false;
$arguments924['noCacheHash'] = false;
$arguments924['section'] = '';
$arguments924['format'] = '';
$arguments924['linkAccessRestrictedPages'] = false;
$arguments924['additionalParams'] = array (
);
$arguments924['absolute'] = false;
$arguments924['addQueryString'] = false;
$arguments924['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments924['addQueryStringMethod'] = NULL;
$arguments924['class'] = NULL;
$arguments924['dir'] = NULL;
$arguments924['id'] = NULL;
$arguments924['lang'] = NULL;
$arguments924['style'] = NULL;
$arguments924['accesskey'] = NULL;
$arguments924['tabindex'] = NULL;
$arguments924['onclick'] = NULL;
$arguments924['name'] = NULL;
$arguments924['rel'] = NULL;
$arguments924['rev'] = NULL;
$arguments924['target'] = NULL;
$renderChildrenClosure927 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output928 = '';

$output928 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments929 = array();
$arguments929['identifier'] = 'actions-document-new';
$arguments929['size'] = 'small';
$arguments929['overlay'] = NULL;
$arguments929['state'] = 'default';
$arguments929['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure930 = function() {return NULL;};

$output928 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments929, $renderChildrenClosure930, $renderingContext);

$output928 .= '
                                    <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments931 = array();
$arguments931['key'] = 'tx_yag_controller_gallery.addGallery';
$arguments931['id'] = NULL;
$arguments931['default'] = NULL;
$arguments931['htmlEscape'] = NULL;
$arguments931['arguments'] = NULL;
$arguments931['extensionName'] = NULL;
$renderChildrenClosure932 = function() {return NULL;};

$output928 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments931, $renderChildrenClosure932, $renderingContext);

$output928 .= '</span>
                                ';
return $output928;
};
$viewHelper933 = $self->getViewHelper('$viewHelper933', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper933->setArguments($arguments924);
$viewHelper933->setRenderingContext($renderingContext);
$viewHelper933->setRenderChildrenClosure($renderChildrenClosure927);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output919 .= $viewHelper933->initializeArgumentsAndRender();

$output919 .= '
                            </div>
                        </div>
                    </div>
                ';
return $output919;
};

$output890 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments917, $renderChildrenClosure918, $renderingContext);

$output890 .= '
            </div>
        ';
return $output890;
};

$output635 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments888, $renderChildrenClosure889, $renderingContext);

$output635 .= '
    ';
return $output635;
};
$arguments633['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output934 = '';

$output934 .= '
            <h2>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments935 = array();
$arguments935['key'] = 'tx_yag_controller_gallery.listHeader';
$arguments935['id'] = NULL;
$arguments935['default'] = NULL;
$arguments935['htmlEscape'] = NULL;
$arguments935['arguments'] = NULL;
$arguments935['extensionName'] = NULL;
$renderChildrenClosure936 = function() {return NULL;};

$output934 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments935, $renderChildrenClosure936, $renderingContext);

$output934 .= '
            </h2>
            <table id="sortable" class="table table-striped table-hover" cellspacing="0" cellpadding="0" border="0"
                   style="width:100%;">
                <thead>
                <tr class="t3-row-header" role="row">
                    <th colspan="4">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments937 = array();
$arguments937['action'] = 'new';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments938 = array();
$arguments938['key'] = 'tx_yag_controller_gallery.addGallery';
$arguments938['id'] = NULL;
$arguments938['default'] = NULL;
$arguments938['htmlEscape'] = NULL;
$arguments938['arguments'] = NULL;
$arguments938['extensionName'] = NULL;
$renderChildrenClosure939 = function() {return NULL;};
$arguments937['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments938, $renderChildrenClosure939, $renderingContext);
$arguments937['class'] = 'btn btn-default';
$arguments937['additionalAttributes'] = NULL;
$arguments937['data'] = NULL;
$arguments937['arguments'] = array (
);
$arguments937['controller'] = NULL;
$arguments937['extensionName'] = NULL;
$arguments937['pluginName'] = NULL;
$arguments937['pageUid'] = NULL;
$arguments937['pageType'] = 0;
$arguments937['noCache'] = false;
$arguments937['noCacheHash'] = false;
$arguments937['section'] = '';
$arguments937['format'] = '';
$arguments937['linkAccessRestrictedPages'] = false;
$arguments937['additionalParams'] = array (
);
$arguments937['absolute'] = false;
$arguments937['addQueryString'] = false;
$arguments937['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments937['addQueryStringMethod'] = NULL;
$arguments937['dir'] = NULL;
$arguments937['id'] = NULL;
$arguments937['lang'] = NULL;
$arguments937['style'] = NULL;
$arguments937['accesskey'] = NULL;
$arguments937['tabindex'] = NULL;
$arguments937['onclick'] = NULL;
$arguments937['name'] = NULL;
$arguments937['rel'] = NULL;
$arguments937['rev'] = NULL;
$arguments937['target'] = NULL;
$renderChildrenClosure940 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments941 = array();
$arguments941['identifier'] = 'actions-document-new';
$arguments941['size'] = 'small';
$arguments941['overlay'] = NULL;
$arguments941['state'] = 'default';
$arguments941['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure942 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments941, $renderChildrenClosure942, $renderingContext);
};
$viewHelper943 = $self->getViewHelper('$viewHelper943', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper943->setArguments($arguments937);
$viewHelper943->setRenderingContext($renderingContext);
$viewHelper943->setRenderChildrenClosure($renderChildrenClosure940);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output934 .= $viewHelper943->initializeArgumentsAndRender();

$output934 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments944 = array();
$arguments944['key'] = 'tx_yag_domain_model_gallery';
$arguments944['id'] = NULL;
$arguments944['default'] = NULL;
$arguments944['htmlEscape'] = NULL;
$arguments944['arguments'] = NULL;
$arguments944['extensionName'] = NULL;
$renderChildrenClosure945 = function() {return NULL;};

$output934 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments944, $renderChildrenClosure945, $renderingContext);

$output934 .= '
                        (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments946 = array();
$arguments946['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'itemCount', $renderingContext);
$arguments946['keepQuotes'] = false;
$arguments946['encoding'] = NULL;
$arguments946['doubleEncode'] = true;
$renderChildrenClosure947 = function() {return NULL;};
$value948 = ($arguments946['value'] !== NULL ? $arguments946['value'] : $renderChildrenClosure947());

$output934 .= (!is_string($value948) ? $value948 : htmlspecialchars($value948, ($arguments946['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments946['encoding'] !== NULL ? $arguments946['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments946['doubleEncode']));

$output934 .= ')
                    </th>
                </tr>
                <tr class="c-headLine">
                    <td class="yag-col-thumb">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments949 = array();
$arguments949['key'] = 'tx_yag_domain_model_gallery.thumb';
$arguments949['id'] = NULL;
$arguments949['default'] = NULL;
$arguments949['htmlEscape'] = NULL;
$arguments949['arguments'] = NULL;
$arguments949['extensionName'] = NULL;
$renderChildrenClosure950 = function() {return NULL;};

$output934 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments949, $renderChildrenClosure950, $renderingContext);

$output934 .= '
                        :
                    </td>
                    <td colspan="2">
                    </td>
                </tr>
                </thead>
                <tbody class="ui-sortable">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments951 = array();
$arguments951['each'] = $currentVariableContainer->getOrNull('listData');
$arguments951['key'] = 'rowIndex';
$arguments951['as'] = 'listRow';
$arguments951['reverse'] = false;
$arguments951['iteration'] = NULL;
$renderChildrenClosure952 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output953 = '';

$output953 .= '
                    <tr id="galleryUid-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments954 = array();
$arguments954['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments954['keepQuotes'] = false;
$arguments954['encoding'] = NULL;
$arguments954['doubleEncode'] = true;
$renderChildrenClosure955 = function() {return NULL;};
$value956 = ($arguments954['value'] !== NULL ? $arguments954['value'] : $renderChildrenClosure955());

$output953 .= (!is_string($value956) ? $value956 : htmlspecialchars($value956, ($arguments954['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments954['encoding'] !== NULL ? $arguments954['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments954['doubleEncode']));

$output953 .= '" class="db_list_normal">
                        <td class="yag-col-thumb">
                            ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper
$arguments957 = array();
$arguments957['gallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value', $renderingContext);
$arguments957['additionalAttributes'] = NULL;
$arguments957['data'] = NULL;
$arguments957['galleryUid'] = NULL;
$arguments957['pageUid'] = NULL;
$arguments957['pageType'] = 0;
$arguments957['noCache'] = false;
$arguments957['noCacheHash'] = false;
$arguments957['section'] = '';
$arguments957['format'] = '';
$arguments957['class'] = NULL;
$arguments957['dir'] = NULL;
$arguments957['id'] = NULL;
$arguments957['lang'] = NULL;
$arguments957['style'] = NULL;
$arguments957['title'] = NULL;
$arguments957['accesskey'] = NULL;
$arguments957['tabindex'] = NULL;
$arguments957['onclick'] = NULL;
$arguments957['name'] = NULL;
$arguments957['rel'] = NULL;
$arguments957['rev'] = NULL;
$arguments957['target'] = NULL;
$renderChildrenClosure958 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output959 = '';

$output959 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments960 = array();
// Rendering Boolean node
$arguments960['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.albumCount', $renderingContext), 0);
$arguments960['then'] = NULL;
$arguments960['else'] = NULL;
$renderChildrenClosure961 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output962 = '';

$output962 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments963 = array();
$renderChildrenClosure964 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output965 = '';

$output965 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments966 = array();
// Rendering Boolean node
$arguments966['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.hidden', $renderingContext));
$arguments966['then'] = NULL;
$arguments966['else'] = NULL;
$renderChildrenClosure967 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output968 = '';

$output968 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments969 = array();
$renderChildrenClosure970 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output971 = '';

$output971 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments972 = array();
$arguments972['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments972['keepQuotes'] = false;
$arguments972['encoding'] = NULL;
$arguments972['doubleEncode'] = true;
$renderChildrenClosure973 = function() {return NULL;};
$value974 = ($arguments972['value'] !== NULL ? $arguments972['value'] : $renderChildrenClosure973());

$output971 .= (!is_string($value974) ? $value974 : htmlspecialchars($value974, ($arguments972['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments972['encoding'] !== NULL ? $arguments972['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments972['doubleEncode']));

$output971 .= '-transparency"
                                                     class="tx-yag-transparency-half">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments975 = array();
$arguments975['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments975['resolutionName'] = 'thumb';
$arguments975['additionalAttributes'] = NULL;
$arguments975['data'] = NULL;
$arguments975['class'] = NULL;
$arguments975['dir'] = NULL;
$arguments975['id'] = NULL;
$arguments975['lang'] = NULL;
$arguments975['style'] = NULL;
$arguments975['title'] = NULL;
$arguments975['accesskey'] = NULL;
$arguments975['tabindex'] = NULL;
$arguments975['onclick'] = NULL;
$arguments975['alt'] = NULL;
$arguments975['centerVertical'] = NULL;
$arguments975['width'] = NULL;
$arguments975['height'] = NULL;
$arguments975['quality'] = 80;
$renderChildrenClosure976 = function() {return NULL;};
$viewHelper977 = $self->getViewHelper('$viewHelper977', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper977->setArguments($arguments975);
$viewHelper977->setRenderingContext($renderingContext);
$viewHelper977->setRenderChildrenClosure($renderChildrenClosure976);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output971 .= $viewHelper977->initializeArgumentsAndRender();

$output971 .= '
                                                </div>
                                            ';
return $output971;
};

$output968 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments969, $renderChildrenClosure970, $renderingContext);

$output968 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments978 = array();
$renderChildrenClosure979 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output980 = '';

$output980 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments981 = array();
$arguments981['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments981['keepQuotes'] = false;
$arguments981['encoding'] = NULL;
$arguments981['doubleEncode'] = true;
$renderChildrenClosure982 = function() {return NULL;};
$value983 = ($arguments981['value'] !== NULL ? $arguments981['value'] : $renderChildrenClosure982());

$output980 .= (!is_string($value983) ? $value983 : htmlspecialchars($value983, ($arguments981['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments981['encoding'] !== NULL ? $arguments981['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments981['doubleEncode']));

$output980 .= '-transparency">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments984 = array();
$arguments984['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments984['resolutionName'] = 'thumb';
$arguments984['additionalAttributes'] = NULL;
$arguments984['data'] = NULL;
$arguments984['class'] = NULL;
$arguments984['dir'] = NULL;
$arguments984['id'] = NULL;
$arguments984['lang'] = NULL;
$arguments984['style'] = NULL;
$arguments984['title'] = NULL;
$arguments984['accesskey'] = NULL;
$arguments984['tabindex'] = NULL;
$arguments984['onclick'] = NULL;
$arguments984['alt'] = NULL;
$arguments984['centerVertical'] = NULL;
$arguments984['width'] = NULL;
$arguments984['height'] = NULL;
$arguments984['quality'] = 80;
$renderChildrenClosure985 = function() {return NULL;};
$viewHelper986 = $self->getViewHelper('$viewHelper986', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper986->setArguments($arguments984);
$viewHelper986->setRenderingContext($renderingContext);
$viewHelper986->setRenderChildrenClosure($renderChildrenClosure985);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output980 .= $viewHelper986->initializeArgumentsAndRender();

$output980 .= '
                                                </div>
                                            ';
return $output980;
};

$output968 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments978, $renderChildrenClosure979, $renderingContext);

$output968 .= '
                                        ';
return $output968;
};
$arguments966['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output987 = '';

$output987 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments988 = array();
$arguments988['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments988['keepQuotes'] = false;
$arguments988['encoding'] = NULL;
$arguments988['doubleEncode'] = true;
$renderChildrenClosure989 = function() {return NULL;};
$value990 = ($arguments988['value'] !== NULL ? $arguments988['value'] : $renderChildrenClosure989());

$output987 .= (!is_string($value990) ? $value990 : htmlspecialchars($value990, ($arguments988['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments988['encoding'] !== NULL ? $arguments988['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments988['doubleEncode']));

$output987 .= '-transparency"
                                                     class="tx-yag-transparency-half">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments991 = array();
$arguments991['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments991['resolutionName'] = 'thumb';
$arguments991['additionalAttributes'] = NULL;
$arguments991['data'] = NULL;
$arguments991['class'] = NULL;
$arguments991['dir'] = NULL;
$arguments991['id'] = NULL;
$arguments991['lang'] = NULL;
$arguments991['style'] = NULL;
$arguments991['title'] = NULL;
$arguments991['accesskey'] = NULL;
$arguments991['tabindex'] = NULL;
$arguments991['onclick'] = NULL;
$arguments991['alt'] = NULL;
$arguments991['centerVertical'] = NULL;
$arguments991['width'] = NULL;
$arguments991['height'] = NULL;
$arguments991['quality'] = 80;
$renderChildrenClosure992 = function() {return NULL;};
$viewHelper993 = $self->getViewHelper('$viewHelper993', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper993->setArguments($arguments991);
$viewHelper993->setRenderingContext($renderingContext);
$viewHelper993->setRenderChildrenClosure($renderChildrenClosure992);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output987 .= $viewHelper993->initializeArgumentsAndRender();

$output987 .= '
                                                </div>
                                            ';
return $output987;
};
$arguments966['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output994 = '';

$output994 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments995 = array();
$arguments995['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments995['keepQuotes'] = false;
$arguments995['encoding'] = NULL;
$arguments995['doubleEncode'] = true;
$renderChildrenClosure996 = function() {return NULL;};
$value997 = ($arguments995['value'] !== NULL ? $arguments995['value'] : $renderChildrenClosure996());

$output994 .= (!is_string($value997) ? $value997 : htmlspecialchars($value997, ($arguments995['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments995['encoding'] !== NULL ? $arguments995['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments995['doubleEncode']));

$output994 .= '-transparency">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments998 = array();
$arguments998['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments998['resolutionName'] = 'thumb';
$arguments998['additionalAttributes'] = NULL;
$arguments998['data'] = NULL;
$arguments998['class'] = NULL;
$arguments998['dir'] = NULL;
$arguments998['id'] = NULL;
$arguments998['lang'] = NULL;
$arguments998['style'] = NULL;
$arguments998['title'] = NULL;
$arguments998['accesskey'] = NULL;
$arguments998['tabindex'] = NULL;
$arguments998['onclick'] = NULL;
$arguments998['alt'] = NULL;
$arguments998['centerVertical'] = NULL;
$arguments998['width'] = NULL;
$arguments998['height'] = NULL;
$arguments998['quality'] = 80;
$renderChildrenClosure999 = function() {return NULL;};
$viewHelper1000 = $self->getViewHelper('$viewHelper1000', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper1000->setArguments($arguments998);
$viewHelper1000->setRenderingContext($renderingContext);
$viewHelper1000->setRenderChildrenClosure($renderChildrenClosure999);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output994 .= $viewHelper1000->initializeArgumentsAndRender();

$output994 .= '
                                                </div>
                                            ';
return $output994;
};

$output965 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments966, $renderChildrenClosure967, $renderingContext);

$output965 .= '
                                    ';
return $output965;
};

$output962 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments963, $renderChildrenClosure964, $renderingContext);

$output962 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments1001 = array();
$renderChildrenClosure1002 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1003 = '';

$output1003 .= '
                                        <div>
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1004 = array();
$arguments1004['key'] = 'tx_yag_controller_gallery.noAlbums';
$arguments1004['id'] = NULL;
$arguments1004['default'] = NULL;
$arguments1004['htmlEscape'] = NULL;
$arguments1004['arguments'] = NULL;
$arguments1004['extensionName'] = NULL;
$renderChildrenClosure1005 = function() {return NULL;};

$output1003 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1004, $renderChildrenClosure1005, $renderingContext);

$output1003 .= '
                                        </div>
                                    ';
return $output1003;
};

$output962 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments1001, $renderChildrenClosure1002, $renderingContext);

$output962 .= '
                                ';
return $output962;
};
$arguments960['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1006 = '';

$output1006 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1007 = array();
// Rendering Boolean node
$arguments1007['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.hidden', $renderingContext));
$arguments1007['then'] = NULL;
$arguments1007['else'] = NULL;
$renderChildrenClosure1008 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1009 = '';

$output1009 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments1010 = array();
$renderChildrenClosure1011 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1012 = '';

$output1012 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1013 = array();
$arguments1013['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments1013['keepQuotes'] = false;
$arguments1013['encoding'] = NULL;
$arguments1013['doubleEncode'] = true;
$renderChildrenClosure1014 = function() {return NULL;};
$value1015 = ($arguments1013['value'] !== NULL ? $arguments1013['value'] : $renderChildrenClosure1014());

$output1012 .= (!is_string($value1015) ? $value1015 : htmlspecialchars($value1015, ($arguments1013['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1013['encoding'] !== NULL ? $arguments1013['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1013['doubleEncode']));

$output1012 .= '-transparency"
                                                     class="tx-yag-transparency-half">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments1016 = array();
$arguments1016['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments1016['resolutionName'] = 'thumb';
$arguments1016['additionalAttributes'] = NULL;
$arguments1016['data'] = NULL;
$arguments1016['class'] = NULL;
$arguments1016['dir'] = NULL;
$arguments1016['id'] = NULL;
$arguments1016['lang'] = NULL;
$arguments1016['style'] = NULL;
$arguments1016['title'] = NULL;
$arguments1016['accesskey'] = NULL;
$arguments1016['tabindex'] = NULL;
$arguments1016['onclick'] = NULL;
$arguments1016['alt'] = NULL;
$arguments1016['centerVertical'] = NULL;
$arguments1016['width'] = NULL;
$arguments1016['height'] = NULL;
$arguments1016['quality'] = 80;
$renderChildrenClosure1017 = function() {return NULL;};
$viewHelper1018 = $self->getViewHelper('$viewHelper1018', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper1018->setArguments($arguments1016);
$viewHelper1018->setRenderingContext($renderingContext);
$viewHelper1018->setRenderChildrenClosure($renderChildrenClosure1017);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output1012 .= $viewHelper1018->initializeArgumentsAndRender();

$output1012 .= '
                                                </div>
                                            ';
return $output1012;
};

$output1009 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments1010, $renderChildrenClosure1011, $renderingContext);

$output1009 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments1019 = array();
$renderChildrenClosure1020 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1021 = '';

$output1021 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1022 = array();
$arguments1022['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments1022['keepQuotes'] = false;
$arguments1022['encoding'] = NULL;
$arguments1022['doubleEncode'] = true;
$renderChildrenClosure1023 = function() {return NULL;};
$value1024 = ($arguments1022['value'] !== NULL ? $arguments1022['value'] : $renderChildrenClosure1023());

$output1021 .= (!is_string($value1024) ? $value1024 : htmlspecialchars($value1024, ($arguments1022['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1022['encoding'] !== NULL ? $arguments1022['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1022['doubleEncode']));

$output1021 .= '-transparency">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments1025 = array();
$arguments1025['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments1025['resolutionName'] = 'thumb';
$arguments1025['additionalAttributes'] = NULL;
$arguments1025['data'] = NULL;
$arguments1025['class'] = NULL;
$arguments1025['dir'] = NULL;
$arguments1025['id'] = NULL;
$arguments1025['lang'] = NULL;
$arguments1025['style'] = NULL;
$arguments1025['title'] = NULL;
$arguments1025['accesskey'] = NULL;
$arguments1025['tabindex'] = NULL;
$arguments1025['onclick'] = NULL;
$arguments1025['alt'] = NULL;
$arguments1025['centerVertical'] = NULL;
$arguments1025['width'] = NULL;
$arguments1025['height'] = NULL;
$arguments1025['quality'] = 80;
$renderChildrenClosure1026 = function() {return NULL;};
$viewHelper1027 = $self->getViewHelper('$viewHelper1027', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper1027->setArguments($arguments1025);
$viewHelper1027->setRenderingContext($renderingContext);
$viewHelper1027->setRenderChildrenClosure($renderChildrenClosure1026);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output1021 .= $viewHelper1027->initializeArgumentsAndRender();

$output1021 .= '
                                                </div>
                                            ';
return $output1021;
};

$output1009 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments1019, $renderChildrenClosure1020, $renderingContext);

$output1009 .= '
                                        ';
return $output1009;
};
$arguments1007['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1028 = '';

$output1028 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1029 = array();
$arguments1029['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments1029['keepQuotes'] = false;
$arguments1029['encoding'] = NULL;
$arguments1029['doubleEncode'] = true;
$renderChildrenClosure1030 = function() {return NULL;};
$value1031 = ($arguments1029['value'] !== NULL ? $arguments1029['value'] : $renderChildrenClosure1030());

$output1028 .= (!is_string($value1031) ? $value1031 : htmlspecialchars($value1031, ($arguments1029['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1029['encoding'] !== NULL ? $arguments1029['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1029['doubleEncode']));

$output1028 .= '-transparency"
                                                     class="tx-yag-transparency-half">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments1032 = array();
$arguments1032['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments1032['resolutionName'] = 'thumb';
$arguments1032['additionalAttributes'] = NULL;
$arguments1032['data'] = NULL;
$arguments1032['class'] = NULL;
$arguments1032['dir'] = NULL;
$arguments1032['id'] = NULL;
$arguments1032['lang'] = NULL;
$arguments1032['style'] = NULL;
$arguments1032['title'] = NULL;
$arguments1032['accesskey'] = NULL;
$arguments1032['tabindex'] = NULL;
$arguments1032['onclick'] = NULL;
$arguments1032['alt'] = NULL;
$arguments1032['centerVertical'] = NULL;
$arguments1032['width'] = NULL;
$arguments1032['height'] = NULL;
$arguments1032['quality'] = 80;
$renderChildrenClosure1033 = function() {return NULL;};
$viewHelper1034 = $self->getViewHelper('$viewHelper1034', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper1034->setArguments($arguments1032);
$viewHelper1034->setRenderingContext($renderingContext);
$viewHelper1034->setRenderChildrenClosure($renderChildrenClosure1033);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output1028 .= $viewHelper1034->initializeArgumentsAndRender();

$output1028 .= '
                                                </div>
                                            ';
return $output1028;
};
$arguments1007['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1035 = '';

$output1035 .= '
                                                <div id="gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1036 = array();
$arguments1036['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments1036['keepQuotes'] = false;
$arguments1036['encoding'] = NULL;
$arguments1036['doubleEncode'] = true;
$renderChildrenClosure1037 = function() {return NULL;};
$value1038 = ($arguments1036['value'] !== NULL ? $arguments1036['value'] : $renderChildrenClosure1037());

$output1035 .= (!is_string($value1038) ? $value1038 : htmlspecialchars($value1038, ($arguments1036['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1036['encoding'] !== NULL ? $arguments1036['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1036['doubleEncode']));

$output1035 .= '-transparency">
                                                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments1039 = array();
$arguments1039['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.thumbAlbum.thumb', $renderingContext);
$arguments1039['resolutionName'] = 'thumb';
$arguments1039['additionalAttributes'] = NULL;
$arguments1039['data'] = NULL;
$arguments1039['class'] = NULL;
$arguments1039['dir'] = NULL;
$arguments1039['id'] = NULL;
$arguments1039['lang'] = NULL;
$arguments1039['style'] = NULL;
$arguments1039['title'] = NULL;
$arguments1039['accesskey'] = NULL;
$arguments1039['tabindex'] = NULL;
$arguments1039['onclick'] = NULL;
$arguments1039['alt'] = NULL;
$arguments1039['centerVertical'] = NULL;
$arguments1039['width'] = NULL;
$arguments1039['height'] = NULL;
$arguments1039['quality'] = 80;
$renderChildrenClosure1040 = function() {return NULL;};
$viewHelper1041 = $self->getViewHelper('$viewHelper1041', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper1041->setArguments($arguments1039);
$viewHelper1041->setRenderingContext($renderingContext);
$viewHelper1041->setRenderChildrenClosure($renderChildrenClosure1040);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output1035 .= $viewHelper1041->initializeArgumentsAndRender();

$output1035 .= '
                                                </div>
                                            ';
return $output1035;
};

$output1006 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1007, $renderChildrenClosure1008, $renderingContext);

$output1006 .= '
                                    ';
return $output1006;
};
$arguments960['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1042 = '';

$output1042 .= '
                                        <div>
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1043 = array();
$arguments1043['key'] = 'tx_yag_controller_gallery.noAlbums';
$arguments1043['id'] = NULL;
$arguments1043['default'] = NULL;
$arguments1043['htmlEscape'] = NULL;
$arguments1043['arguments'] = NULL;
$arguments1043['extensionName'] = NULL;
$renderChildrenClosure1044 = function() {return NULL;};

$output1042 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1043, $renderChildrenClosure1044, $renderingContext);

$output1042 .= '
                                        </div>
                                    ';
return $output1042;
};

$output959 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments960, $renderChildrenClosure961, $renderingContext);

$output959 .= '
                            ';
return $output959;
};
$viewHelper1045 = $self->getViewHelper('$viewHelper1045', $renderingContext, 'Tx_Yag_ViewHelpers_Link_GalleryViewHelper');
$viewHelper1045->setArguments($arguments957);
$viewHelper1045->setRenderingContext($renderingContext);
$viewHelper1045->setRenderChildrenClosure($renderChildrenClosure958);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper

$output953 .= $viewHelper1045->initializeArgumentsAndRender();

$output953 .= '
                        </td>
                        <td class="yag-col-title">
                            <div>
                                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper
$arguments1046 = array();
$arguments1046['gallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value', $renderingContext);
$arguments1046['additionalAttributes'] = NULL;
$arguments1046['data'] = NULL;
$arguments1046['galleryUid'] = NULL;
$arguments1046['pageUid'] = NULL;
$arguments1046['pageType'] = 0;
$arguments1046['noCache'] = false;
$arguments1046['noCacheHash'] = false;
$arguments1046['section'] = '';
$arguments1046['format'] = '';
$arguments1046['class'] = NULL;
$arguments1046['dir'] = NULL;
$arguments1046['id'] = NULL;
$arguments1046['lang'] = NULL;
$arguments1046['style'] = NULL;
$arguments1046['title'] = NULL;
$arguments1046['accesskey'] = NULL;
$arguments1046['tabindex'] = NULL;
$arguments1046['onclick'] = NULL;
$arguments1046['name'] = NULL;
$arguments1046['rel'] = NULL;
$arguments1046['rev'] = NULL;
$arguments1046['target'] = NULL;
$renderChildrenClosure1047 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1048 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1049 = array();
$arguments1049['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.name', $renderingContext);
$arguments1049['keepQuotes'] = false;
$arguments1049['encoding'] = NULL;
$arguments1049['doubleEncode'] = true;
$renderChildrenClosure1050 = function() {return NULL;};
$value1051 = ($arguments1049['value'] !== NULL ? $arguments1049['value'] : $renderChildrenClosure1050());

$output1048 .= (!is_string($value1051) ? $value1051 : htmlspecialchars($value1051, ($arguments1049['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1049['encoding'] !== NULL ? $arguments1049['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1049['doubleEncode']));

$output1048 .= '
                                ';
return $output1048;
};
$viewHelper1052 = $self->getViewHelper('$viewHelper1052', $renderingContext, 'Tx_Yag_ViewHelpers_Link_GalleryViewHelper');
$viewHelper1052->setArguments($arguments1046);
$viewHelper1052->setRenderingContext($renderingContext);
$viewHelper1052->setRenderChildrenClosure($renderChildrenClosure1047);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper

$output953 .= $viewHelper1052->initializeArgumentsAndRender();

$output953 .= '
                                <br/>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1053 = array();
$arguments1053['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.albumCount', $renderingContext);
$arguments1053['keepQuotes'] = false;
$arguments1053['encoding'] = NULL;
$arguments1053['doubleEncode'] = true;
$renderChildrenClosure1054 = function() {return NULL;};
$value1055 = ($arguments1053['value'] !== NULL ? $arguments1053['value'] : $renderChildrenClosure1054());

$output953 .= (!is_string($value1055) ? $value1055 : htmlspecialchars($value1055, ($arguments1053['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1053['encoding'] !== NULL ? $arguments1053['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1053['doubleEncode']));

$output953 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1056 = array();
// Rendering Boolean node
// Rendering Array
$array1057 = array();
$array1057['1'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.albumCount', $renderingContext);
// Rendering Array
$array1058 = array();
$array1058['1'] = 1;
$arguments1056['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array1057, $array1058);
$arguments1056['then'] = NULL;
$arguments1056['else'] = NULL;
$renderChildrenClosure1059 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1060 = '';

$output1060 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments1061 = array();
$renderChildrenClosure1062 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1063 = '';

$output1063 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1064 = array();
$arguments1064['key'] = 'tx_yag_general.album';
$arguments1064['id'] = NULL;
$arguments1064['default'] = NULL;
$arguments1064['htmlEscape'] = NULL;
$arguments1064['arguments'] = NULL;
$arguments1064['extensionName'] = NULL;
$renderChildrenClosure1065 = function() {return NULL;};

$output1063 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1064, $renderChildrenClosure1065, $renderingContext);

$output1063 .= '
                                    ';
return $output1063;
};

$output1060 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments1061, $renderChildrenClosure1062, $renderingContext);

$output1060 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments1066 = array();
$renderChildrenClosure1067 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1068 = '';

$output1068 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1069 = array();
$arguments1069['key'] = 'tx_yag_general.albums';
$arguments1069['id'] = NULL;
$arguments1069['default'] = NULL;
$arguments1069['htmlEscape'] = NULL;
$arguments1069['arguments'] = NULL;
$arguments1069['extensionName'] = NULL;
$renderChildrenClosure1070 = function() {return NULL;};

$output1068 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1069, $renderChildrenClosure1070, $renderingContext);

$output1068 .= '
                                    ';
return $output1068;
};

$output1060 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments1066, $renderChildrenClosure1067, $renderingContext);

$output1060 .= '
                                ';
return $output1060;
};
$arguments1056['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1071 = '';

$output1071 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1072 = array();
$arguments1072['key'] = 'tx_yag_general.album';
$arguments1072['id'] = NULL;
$arguments1072['default'] = NULL;
$arguments1072['htmlEscape'] = NULL;
$arguments1072['arguments'] = NULL;
$arguments1072['extensionName'] = NULL;
$renderChildrenClosure1073 = function() {return NULL;};

$output1071 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1072, $renderChildrenClosure1073, $renderingContext);

$output1071 .= '
                                    ';
return $output1071;
};
$arguments1056['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1074 = '';

$output1074 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1075 = array();
$arguments1075['key'] = 'tx_yag_general.albums';
$arguments1075['id'] = NULL;
$arguments1075['default'] = NULL;
$arguments1075['htmlEscape'] = NULL;
$arguments1075['arguments'] = NULL;
$arguments1075['extensionName'] = NULL;
$renderChildrenClosure1076 = function() {return NULL;};

$output1074 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1075, $renderChildrenClosure1076, $renderingContext);

$output1074 .= '
                                    ';
return $output1074;
};

$output953 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1056, $renderChildrenClosure1059, $renderingContext);

$output953 .= '
                                <br/>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1077 = array();
$arguments1077['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.itemCount', $renderingContext);
$arguments1077['keepQuotes'] = false;
$arguments1077['encoding'] = NULL;
$arguments1077['doubleEncode'] = true;
$renderChildrenClosure1078 = function() {return NULL;};
$value1079 = ($arguments1077['value'] !== NULL ? $arguments1077['value'] : $renderChildrenClosure1078());

$output953 .= (!is_string($value1079) ? $value1079 : htmlspecialchars($value1079, ($arguments1077['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1077['encoding'] !== NULL ? $arguments1077['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1077['doubleEncode']));

$output953 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1080 = array();
// Rendering Boolean node
// Rendering Array
$array1081 = array();
$array1081['1'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.itemCount', $renderingContext);
// Rendering Array
$array1082 = array();
$array1082['1'] = 1;
$arguments1080['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array1081, $array1082);
$arguments1080['then'] = NULL;
$arguments1080['else'] = NULL;
$renderChildrenClosure1083 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1084 = '';

$output1084 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments1085 = array();
$renderChildrenClosure1086 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1087 = '';

$output1087 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1088 = array();
$arguments1088['key'] = 'tx_yag_general.image';
$arguments1088['id'] = NULL;
$arguments1088['default'] = NULL;
$arguments1088['htmlEscape'] = NULL;
$arguments1088['arguments'] = NULL;
$arguments1088['extensionName'] = NULL;
$renderChildrenClosure1089 = function() {return NULL;};

$output1087 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1088, $renderChildrenClosure1089, $renderingContext);

$output1087 .= '
                                    ';
return $output1087;
};

$output1084 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments1085, $renderChildrenClosure1086, $renderingContext);

$output1084 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments1090 = array();
$renderChildrenClosure1091 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1092 = '';

$output1092 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1093 = array();
$arguments1093['key'] = 'tx_yag_general.images';
$arguments1093['id'] = NULL;
$arguments1093['default'] = NULL;
$arguments1093['htmlEscape'] = NULL;
$arguments1093['arguments'] = NULL;
$arguments1093['extensionName'] = NULL;
$renderChildrenClosure1094 = function() {return NULL;};

$output1092 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1093, $renderChildrenClosure1094, $renderingContext);

$output1092 .= '
                                    ';
return $output1092;
};

$output1084 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments1090, $renderChildrenClosure1091, $renderingContext);

$output1084 .= '
                                ';
return $output1084;
};
$arguments1080['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1095 = '';

$output1095 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1096 = array();
$arguments1096['key'] = 'tx_yag_general.image';
$arguments1096['id'] = NULL;
$arguments1096['default'] = NULL;
$arguments1096['htmlEscape'] = NULL;
$arguments1096['arguments'] = NULL;
$arguments1096['extensionName'] = NULL;
$renderChildrenClosure1097 = function() {return NULL;};

$output1095 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1096, $renderChildrenClosure1097, $renderingContext);

$output1095 .= '
                                    ';
return $output1095;
};
$arguments1080['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1098 = '';

$output1098 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1099 = array();
$arguments1099['key'] = 'tx_yag_general.images';
$arguments1099['id'] = NULL;
$arguments1099['default'] = NULL;
$arguments1099['htmlEscape'] = NULL;
$arguments1099['arguments'] = NULL;
$arguments1099['extensionName'] = NULL;
$renderChildrenClosure1100 = function() {return NULL;};

$output1098 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1099, $renderChildrenClosure1100, $renderingContext);

$output1098 .= '
                                    ';
return $output1098;
};

$output953 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1080, $renderChildrenClosure1083, $renderingContext);

$output953 .= '
                            </div>
                        </td>
                        <td class="actions icons">
                            <div class="btn-group">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments1101 = array();
// Rendering ViewHelper Tx_Yag_ViewHelpers_Uri_GalleryViewHelper
$arguments1102 = array();
$arguments1102['gallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value', $renderingContext);
$arguments1102['section'] = 'tabs-3';
$arguments1102['galleryUid'] = NULL;
$arguments1102['pageUid'] = NULL;
$arguments1102['pageType'] = 0;
$arguments1102['noCache'] = false;
$arguments1102['noCacheHash'] = false;
$arguments1102['format'] = '';
$renderChildrenClosure1103 = function() {return NULL;};
$viewHelper1104 = $self->getViewHelper('$viewHelper1104', $renderingContext, 'Tx_Yag_ViewHelpers_Uri_GalleryViewHelper');
$viewHelper1104->setArguments($arguments1102);
$viewHelper1104->setRenderingContext($renderingContext);
$viewHelper1104->setRenderChildrenClosure($renderChildrenClosure1103);
// End of ViewHelper Tx_Yag_ViewHelpers_Uri_GalleryViewHelper
$arguments1101['uri'] = $viewHelper1104->initializeArgumentsAndRender();
$arguments1101['icon'] = 'actions-document-open';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1105 = array();
$arguments1105['key'] = 'tx_yag_controller_gallery.editGallery';
$arguments1105['id'] = NULL;
$arguments1105['default'] = NULL;
$arguments1105['htmlEscape'] = NULL;
$arguments1105['arguments'] = NULL;
$arguments1105['extensionName'] = NULL;
$renderChildrenClosure1106 = function() {return NULL;};
$arguments1101['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1105, $renderChildrenClosure1106, $renderingContext);
// Rendering Array
$array1107 = array();
$array1107['class'] = 'btn';
$arguments1101['additionalAttributes'] = $array1107;
$renderChildrenClosure1108 = function() {return NULL;};

$output953 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments1101, $renderChildrenClosure1108, $renderingContext);

$output953 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1109 = array();
// Rendering Boolean node
$arguments1109['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.hidden', $renderingContext));
$arguments1109['then'] = NULL;
$arguments1109['else'] = NULL;
$renderChildrenClosure1110 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1111 = '';

$output1111 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments1112 = array();
$renderChildrenClosure1113 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1114 = '';

$output1114 .= '
                                        <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1115 = array();
$arguments1115['key'] = 'tx_yag_controller_gallery.unhideGallery';
$arguments1115['id'] = NULL;
$arguments1115['default'] = NULL;
$arguments1115['htmlEscape'] = NULL;
$arguments1115['arguments'] = NULL;
$arguments1115['extensionName'] = NULL;
$renderChildrenClosure1116 = function() {return NULL;};

$output1114 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1115, $renderChildrenClosure1116, $renderingContext);

$output1114 .= '"
                                           id="unhide-gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1117 = array();
$arguments1117['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments1117['keepQuotes'] = false;
$arguments1117['encoding'] = NULL;
$arguments1117['doubleEncode'] = true;
$renderChildrenClosure1118 = function() {return NULL;};
$value1119 = ($arguments1117['value'] !== NULL ? $arguments1117['value'] : $renderChildrenClosure1118());

$output1114 .= (!is_string($value1119) ? $value1119 : htmlspecialchars($value1119, ($arguments1117['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1117['encoding'] !== NULL ? $arguments1117['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1117['doubleEncode']));

$output1114 .= '" class="unhide-gallery btn"
                                           galleryUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1120 = array();
$arguments1120['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments1120['keepQuotes'] = false;
$arguments1120['encoding'] = NULL;
$arguments1120['doubleEncode'] = true;
$renderChildrenClosure1121 = function() {return NULL;};
$value1122 = ($arguments1120['value'] !== NULL ? $arguments1120['value'] : $renderChildrenClosure1121());

$output1114 .= (!is_string($value1122) ? $value1122 : htmlspecialchars($value1122, ($arguments1120['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1120['encoding'] !== NULL ? $arguments1120['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1120['doubleEncode']));

$output1114 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments1123 = array();
$arguments1123['identifier'] = 'actions-edit-hide';
$arguments1123['size'] = 'small';
$arguments1123['overlay'] = NULL;
$arguments1123['state'] = 'default';
$arguments1123['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure1124 = function() {return NULL;};

$output1114 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1123, $renderChildrenClosure1124, $renderingContext);

$output1114 .= '
                                        </a>
                                    ';
return $output1114;
};

$output1111 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments1112, $renderChildrenClosure1113, $renderingContext);

$output1111 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments1125 = array();
$renderChildrenClosure1126 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1127 = '';

$output1127 .= '
                                        <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1128 = array();
$arguments1128['key'] = 'tx_yag_controller_gallery.hideGallery';
$arguments1128['id'] = NULL;
$arguments1128['default'] = NULL;
$arguments1128['htmlEscape'] = NULL;
$arguments1128['arguments'] = NULL;
$arguments1128['extensionName'] = NULL;
$renderChildrenClosure1129 = function() {return NULL;};

$output1127 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1128, $renderChildrenClosure1129, $renderingContext);

$output1127 .= '"
                                           id="hide-gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1130 = array();
$arguments1130['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments1130['keepQuotes'] = false;
$arguments1130['encoding'] = NULL;
$arguments1130['doubleEncode'] = true;
$renderChildrenClosure1131 = function() {return NULL;};
$value1132 = ($arguments1130['value'] !== NULL ? $arguments1130['value'] : $renderChildrenClosure1131());

$output1127 .= (!is_string($value1132) ? $value1132 : htmlspecialchars($value1132, ($arguments1130['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1130['encoding'] !== NULL ? $arguments1130['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1130['doubleEncode']));

$output1127 .= '" class="hide-gallery btn"
                                           galleryUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1133 = array();
$arguments1133['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments1133['keepQuotes'] = false;
$arguments1133['encoding'] = NULL;
$arguments1133['doubleEncode'] = true;
$renderChildrenClosure1134 = function() {return NULL;};
$value1135 = ($arguments1133['value'] !== NULL ? $arguments1133['value'] : $renderChildrenClosure1134());

$output1127 .= (!is_string($value1135) ? $value1135 : htmlspecialchars($value1135, ($arguments1133['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1133['encoding'] !== NULL ? $arguments1133['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1133['doubleEncode']));

$output1127 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments1136 = array();
$arguments1136['identifier'] = 'actions-edit-unhide';
$arguments1136['size'] = 'small';
$arguments1136['overlay'] = NULL;
$arguments1136['state'] = 'default';
$arguments1136['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure1137 = function() {return NULL;};

$output1127 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1136, $renderChildrenClosure1137, $renderingContext);

$output1127 .= '
                                        </a>
                                    ';
return $output1127;
};

$output1111 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments1125, $renderChildrenClosure1126, $renderingContext);

$output1111 .= '
                                ';
return $output1111;
};
$arguments1109['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1138 = '';

$output1138 .= '
                                        <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1139 = array();
$arguments1139['key'] = 'tx_yag_controller_gallery.unhideGallery';
$arguments1139['id'] = NULL;
$arguments1139['default'] = NULL;
$arguments1139['htmlEscape'] = NULL;
$arguments1139['arguments'] = NULL;
$arguments1139['extensionName'] = NULL;
$renderChildrenClosure1140 = function() {return NULL;};

$output1138 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1139, $renderChildrenClosure1140, $renderingContext);

$output1138 .= '"
                                           id="unhide-gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1141 = array();
$arguments1141['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments1141['keepQuotes'] = false;
$arguments1141['encoding'] = NULL;
$arguments1141['doubleEncode'] = true;
$renderChildrenClosure1142 = function() {return NULL;};
$value1143 = ($arguments1141['value'] !== NULL ? $arguments1141['value'] : $renderChildrenClosure1142());

$output1138 .= (!is_string($value1143) ? $value1143 : htmlspecialchars($value1143, ($arguments1141['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1141['encoding'] !== NULL ? $arguments1141['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1141['doubleEncode']));

$output1138 .= '" class="unhide-gallery btn"
                                           galleryUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1144 = array();
$arguments1144['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments1144['keepQuotes'] = false;
$arguments1144['encoding'] = NULL;
$arguments1144['doubleEncode'] = true;
$renderChildrenClosure1145 = function() {return NULL;};
$value1146 = ($arguments1144['value'] !== NULL ? $arguments1144['value'] : $renderChildrenClosure1145());

$output1138 .= (!is_string($value1146) ? $value1146 : htmlspecialchars($value1146, ($arguments1144['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1144['encoding'] !== NULL ? $arguments1144['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1144['doubleEncode']));

$output1138 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments1147 = array();
$arguments1147['identifier'] = 'actions-edit-hide';
$arguments1147['size'] = 'small';
$arguments1147['overlay'] = NULL;
$arguments1147['state'] = 'default';
$arguments1147['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure1148 = function() {return NULL;};

$output1138 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1147, $renderChildrenClosure1148, $renderingContext);

$output1138 .= '
                                        </a>
                                    ';
return $output1138;
};
$arguments1109['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1149 = '';

$output1149 .= '
                                        <a title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1150 = array();
$arguments1150['key'] = 'tx_yag_controller_gallery.hideGallery';
$arguments1150['id'] = NULL;
$arguments1150['default'] = NULL;
$arguments1150['htmlEscape'] = NULL;
$arguments1150['arguments'] = NULL;
$arguments1150['extensionName'] = NULL;
$renderChildrenClosure1151 = function() {return NULL;};

$output1149 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1150, $renderChildrenClosure1151, $renderingContext);

$output1149 .= '"
                                           id="hide-gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1152 = array();
$arguments1152['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments1152['keepQuotes'] = false;
$arguments1152['encoding'] = NULL;
$arguments1152['doubleEncode'] = true;
$renderChildrenClosure1153 = function() {return NULL;};
$value1154 = ($arguments1152['value'] !== NULL ? $arguments1152['value'] : $renderChildrenClosure1153());

$output1149 .= (!is_string($value1154) ? $value1154 : htmlspecialchars($value1154, ($arguments1152['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1152['encoding'] !== NULL ? $arguments1152['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1152['doubleEncode']));

$output1149 .= '" class="hide-gallery btn"
                                           galleryUid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1155 = array();
$arguments1155['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments1155['keepQuotes'] = false;
$arguments1155['encoding'] = NULL;
$arguments1155['doubleEncode'] = true;
$renderChildrenClosure1156 = function() {return NULL;};
$value1157 = ($arguments1155['value'] !== NULL ? $arguments1155['value'] : $renderChildrenClosure1156());

$output1149 .= (!is_string($value1157) ? $value1157 : htmlspecialchars($value1157, ($arguments1155['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1155['encoding'] !== NULL ? $arguments1155['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1155['doubleEncode']));

$output1149 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments1158 = array();
$arguments1158['identifier'] = 'actions-edit-unhide';
$arguments1158['size'] = 'small';
$arguments1158['overlay'] = NULL;
$arguments1158['state'] = 'default';
$arguments1158['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure1159 = function() {return NULL;};

$output1149 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1158, $renderChildrenClosure1159, $renderingContext);

$output1149 .= '
                                        </a>
                                    ';
return $output1149;
};

$output953 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1109, $renderChildrenClosure1110, $renderingContext);

$output953 .= '

                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments1160 = array();
$arguments1160['uri'] = '#';
$arguments1160['icon'] = 'actions-edit-delete';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1161 = array();
$arguments1161['key'] = 'tx_yag_controller_gallery.deleteGallery';
$arguments1161['id'] = NULL;
$arguments1161['default'] = NULL;
$arguments1161['htmlEscape'] = NULL;
$arguments1161['arguments'] = NULL;
$arguments1161['extensionName'] = NULL;
$renderChildrenClosure1162 = function() {return NULL;};
$arguments1160['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1161, $renderChildrenClosure1162, $renderingContext);
// Rendering Array
$array1163 = array();
$array1163['class'] = 'gallery-linkbar-delete btn';
$array1163['galleryUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments1160['additionalAttributes'] = $array1163;
$renderChildrenClosure1164 = function() {return NULL;};

$output953 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments1160, $renderChildrenClosure1164, $renderingContext);

$output953 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments1165 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments1166 = array();
$arguments1166['action'] = 'new';
$arguments1166['controller'] = 'Album';
// Rendering Array
$array1167 = array();
$array1167['gallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value', $renderingContext);
$arguments1166['arguments'] = $array1167;
$arguments1166['extensionName'] = NULL;
$arguments1166['pluginName'] = NULL;
$arguments1166['pageUid'] = NULL;
$arguments1166['pageType'] = 0;
$arguments1166['noCache'] = false;
$arguments1166['noCacheHash'] = false;
$arguments1166['section'] = '';
$arguments1166['format'] = '';
$arguments1166['linkAccessRestrictedPages'] = false;
$arguments1166['additionalParams'] = array (
);
$arguments1166['absolute'] = false;
$arguments1166['addQueryString'] = false;
$arguments1166['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1166['addQueryStringMethod'] = NULL;
$renderChildrenClosure1168 = function() {return NULL;};
$viewHelper1169 = $self->getViewHelper('$viewHelper1169', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper1169->setArguments($arguments1166);
$viewHelper1169->setRenderingContext($renderingContext);
$viewHelper1169->setRenderChildrenClosure($renderChildrenClosure1168);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments1165['uri'] = $viewHelper1169->initializeArgumentsAndRender();
$arguments1165['icon'] = 'actions-document-new';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1170 = array();
$arguments1170['key'] = 'tx_yag_controller_album.addAlbum';
$arguments1170['id'] = NULL;
$arguments1170['default'] = NULL;
$arguments1170['htmlEscape'] = NULL;
$arguments1170['arguments'] = NULL;
$arguments1170['extensionName'] = NULL;
$renderChildrenClosure1171 = function() {return NULL;};
$arguments1165['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1170, $renderChildrenClosure1171, $renderingContext);
// Rendering Array
$array1172 = array();
$array1172['class'] = 'btn';
$arguments1165['additionalAttributes'] = $array1172;
$renderChildrenClosure1173 = function() {return NULL;};

$output953 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments1165, $renderChildrenClosure1173, $renderingContext);

$output953 .= '

                            </div>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1174 = array();
// Rendering Boolean node
$arguments1174['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.description', $renderingContext));
$arguments1174['then'] = NULL;
$arguments1174['else'] = NULL;
$renderChildrenClosure1175 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1176 = '';

$output1176 .= '
                                <div class="yag-description">
                                    <div class="typo3-dimmed">
                                        <b>
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1177 = array();
$arguments1177['key'] = 'tx_yag_domain_model_gallery.description';
$arguments1177['id'] = NULL;
$arguments1177['default'] = NULL;
$arguments1177['htmlEscape'] = NULL;
$arguments1177['arguments'] = NULL;
$arguments1177['extensionName'] = NULL;
$renderChildrenClosure1178 = function() {return NULL;};

$output1176 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1177, $renderChildrenClosure1178, $renderingContext);

$output1176 .= '
                                        </b>
                                    </div>
                                    <div class="typo3-dimmed">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$arguments1179 = array();
$arguments1179['value'] = NULL;
$renderChildrenClosure1180 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1181 = array();
$arguments1181['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.description', $renderingContext);
$arguments1181['keepQuotes'] = false;
$arguments1181['encoding'] = NULL;
$arguments1181['doubleEncode'] = true;
$renderChildrenClosure1182 = function() {return NULL;};
$value1183 = ($arguments1181['value'] !== NULL ? $arguments1181['value'] : $renderChildrenClosure1182());
return (!is_string($value1183) ? $value1183 : htmlspecialchars($value1183, ($arguments1181['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1181['encoding'] !== NULL ? $arguments1181['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1181['doubleEncode']));
};

$output1176 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments1179, $renderChildrenClosure1180, $renderingContext);

$output1176 .= '
                                    </div>
                                </div>
                            ';
return $output1176;
};

$output953 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1174, $renderChildrenClosure1175, $renderingContext);

$output953 .= '
                        </td>
                    </tr>
                ';
return $output953;
};

$output934 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments951, $renderChildrenClosure952, $renderingContext);

$output934 .= '
                </tbody>
            </table>
        ';
return $output934;
};
$arguments633['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1184 = '';

$output1184 .= '

            <div>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1185 = array();
// Rendering Boolean node
$arguments1185['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pidDetector'), 'currentPageIsNoYagPage', $renderingContext));
$arguments1185['then'] = NULL;
$arguments1185['else'] = NULL;
$renderChildrenClosure1186 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1187 = '';

$output1187 .= '
                    <div class="tx-extbase-flash-message">
                        <div class="alert alert-info">
                            <h4>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1188 = array();
$arguments1188['key'] = 'tx_yag_controller_gallery.notAYAGFolderHeader';
$arguments1188['id'] = NULL;
$arguments1188['default'] = NULL;
$arguments1188['htmlEscape'] = NULL;
$arguments1188['arguments'] = NULL;
$arguments1188['extensionName'] = NULL;
$renderChildrenClosure1189 = function() {return NULL;};

$output1187 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1188, $renderChildrenClosure1189, $renderingContext);

$output1187 .= '
                            </h4>
                            <div class="alert-body">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1190 = array();
$arguments1190['key'] = 'tx_yag_controller_gallery.selectPageWithYag';
$arguments1190['id'] = NULL;
$arguments1190['default'] = NULL;
$arguments1190['htmlEscape'] = NULL;
$arguments1190['arguments'] = NULL;
$arguments1190['extensionName'] = NULL;
$renderChildrenClosure1191 = function() {return NULL;};

$output1187 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1190, $renderChildrenClosure1191, $renderingContext);

$output1187 .= '

                                <select id="yag_pid_selector"
                                        onchange="jumpToUrl(this.options[this.selectedIndex].value, this);">
                                    <option value="">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1192 = array();
$arguments1192['key'] = 'tx_yag_controller_gallery.selectAPage';
$arguments1192['id'] = NULL;
$arguments1192['default'] = NULL;
$arguments1192['htmlEscape'] = NULL;
$arguments1192['arguments'] = NULL;
$arguments1192['extensionName'] = NULL;
$renderChildrenClosure1193 = function() {return NULL;};

$output1187 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1192, $renderChildrenClosure1193, $renderingContext);

$output1187 .= '
                                    </option>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments1194 = array();
$arguments1194['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pidDetector'), 'pageRecords', $renderingContext);
$arguments1194['as'] = 'page';
$arguments1194['key'] = '';
$arguments1194['reverse'] = false;
$arguments1194['iteration'] = NULL;
$renderChildrenClosure1195 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1196 = '';

$output1196 .= '
                                        <option value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments1197 = array();
$arguments1197['controller'] = 'Gallery';
$arguments1197['action'] = 'list';
// Rendering Array
$array1198 = array();
$array1198['id'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'uid', $renderingContext);
$arguments1197['additionalParams'] = $array1198;
$arguments1197['arguments'] = array (
);
$arguments1197['extensionName'] = NULL;
$arguments1197['pluginName'] = NULL;
$arguments1197['pageUid'] = NULL;
$arguments1197['pageType'] = 0;
$arguments1197['noCache'] = false;
$arguments1197['noCacheHash'] = false;
$arguments1197['section'] = '';
$arguments1197['format'] = '';
$arguments1197['linkAccessRestrictedPages'] = false;
$arguments1197['absolute'] = false;
$arguments1197['addQueryString'] = false;
$arguments1197['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1197['addQueryStringMethod'] = NULL;
$renderChildrenClosure1199 = function() {return NULL;};
$viewHelper1200 = $self->getViewHelper('$viewHelper1200', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper1200->setArguments($arguments1197);
$viewHelper1200->setRenderingContext($renderingContext);
$viewHelper1200->setRenderChildrenClosure($renderChildrenClosure1199);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output1196 .= $viewHelper1200->initializeArgumentsAndRender();

$output1196 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1201 = array();
$arguments1201['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'title', $renderingContext);
$arguments1201['keepQuotes'] = false;
$arguments1201['encoding'] = NULL;
$arguments1201['doubleEncode'] = true;
$renderChildrenClosure1202 = function() {return NULL;};
$value1203 = ($arguments1201['value'] !== NULL ? $arguments1201['value'] : $renderChildrenClosure1202());

$output1196 .= (!is_string($value1203) ? $value1203 : htmlspecialchars($value1203, ($arguments1201['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1201['encoding'] !== NULL ? $arguments1201['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1201['doubleEncode']));

$output1196 .= '
                                        </option>
                                    ';
return $output1196;
};

$output1187 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1194, $renderChildrenClosure1195, $renderingContext);

$output1187 .= '
                                </select><br/><br/>

                                <p>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments1204 = array();
$arguments1204['controller'] = 'Backend';
$arguments1204['action'] = 'markPageAsYagSysFolder';
// Rendering Array
$array1205 = array();
$array1205['pid'] = $currentVariableContainer->getOrNull('currentPid');
$arguments1204['arguments'] = $array1205;
$arguments1204['additionalAttributes'] = NULL;
$arguments1204['data'] = NULL;
$arguments1204['extensionName'] = NULL;
$arguments1204['pluginName'] = NULL;
$arguments1204['pageUid'] = NULL;
$arguments1204['pageType'] = 0;
$arguments1204['noCache'] = false;
$arguments1204['noCacheHash'] = false;
$arguments1204['section'] = '';
$arguments1204['format'] = '';
$arguments1204['linkAccessRestrictedPages'] = false;
$arguments1204['additionalParams'] = array (
);
$arguments1204['absolute'] = false;
$arguments1204['addQueryString'] = false;
$arguments1204['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1204['addQueryStringMethod'] = NULL;
$arguments1204['class'] = NULL;
$arguments1204['dir'] = NULL;
$arguments1204['id'] = NULL;
$arguments1204['lang'] = NULL;
$arguments1204['style'] = NULL;
$arguments1204['title'] = NULL;
$arguments1204['accesskey'] = NULL;
$arguments1204['tabindex'] = NULL;
$arguments1204['onclick'] = NULL;
$arguments1204['name'] = NULL;
$arguments1204['rel'] = NULL;
$arguments1204['rev'] = NULL;
$arguments1204['target'] = NULL;
$renderChildrenClosure1206 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1207 = '';

$output1207 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1208 = array();
$arguments1208['key'] = 'tx_yag_controller_gallery.markAsYagSysfolder';
$arguments1208['id'] = NULL;
$arguments1208['default'] = NULL;
$arguments1208['htmlEscape'] = NULL;
$arguments1208['arguments'] = NULL;
$arguments1208['extensionName'] = NULL;
$renderChildrenClosure1209 = function() {return NULL;};

$output1207 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1208, $renderChildrenClosure1209, $renderingContext);

$output1207 .= '
                                    ';
return $output1207;
};
$viewHelper1210 = $self->getViewHelper('$viewHelper1210', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper1210->setArguments($arguments1204);
$viewHelper1210->setRenderingContext($renderingContext);
$viewHelper1210->setRenderChildrenClosure($renderChildrenClosure1206);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output1187 .= $viewHelper1210->initializeArgumentsAndRender();

$output1187 .= '
                                </p>
                            </div>
                        </div>
                    </div>
                ';
return $output1187;
};

$output1184 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1185, $renderChildrenClosure1186, $renderingContext);

$output1184 .= '

                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1211 = array();
// Rendering Boolean node
$arguments1211['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pidDetector'), 'currentPageIsYagPage', $renderingContext));
$arguments1211['then'] = NULL;
$arguments1211['else'] = NULL;
$renderChildrenClosure1212 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1213 = '';

$output1213 .= '
                    <div class="tx-extbase-flash-message">
                        <div class="alert alert-info">
                            <h4>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1214 = array();
$arguments1214['key'] = 'tx_yag_controller_gallery.createYagRecords';
$arguments1214['id'] = NULL;
$arguments1214['default'] = NULL;
$arguments1214['htmlEscape'] = NULL;
$arguments1214['arguments'] = NULL;
$arguments1214['extensionName'] = NULL;
$renderChildrenClosure1215 = function() {return NULL;};

$output1213 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1214, $renderChildrenClosure1215, $renderingContext);

$output1213 .= '
                            </h4>
                            <div class="alert-body">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1216 = array();
$arguments1216['key'] = 'tx_yag_domain_model_gallery.noGalleryClick';
$arguments1216['id'] = NULL;
$arguments1216['default'] = NULL;
$arguments1216['htmlEscape'] = NULL;
$arguments1216['arguments'] = NULL;
$arguments1216['extensionName'] = NULL;
$renderChildrenClosure1217 = function() {return NULL;};

$output1213 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1216, $renderChildrenClosure1217, $renderingContext);

$output1213 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments1218 = array();
$arguments1218['controller'] = 'Gallery';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1219 = array();
$arguments1219['key'] = 'tx_yag_controller_gallery.addGallery';
$arguments1219['id'] = NULL;
$arguments1219['default'] = NULL;
$arguments1219['htmlEscape'] = NULL;
$arguments1219['arguments'] = NULL;
$arguments1219['extensionName'] = NULL;
$renderChildrenClosure1220 = function() {return NULL;};
$arguments1218['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1219, $renderChildrenClosure1220, $renderingContext);
$arguments1218['action'] = 'new';
$arguments1218['additionalAttributes'] = NULL;
$arguments1218['data'] = NULL;
$arguments1218['arguments'] = array (
);
$arguments1218['extensionName'] = NULL;
$arguments1218['pluginName'] = NULL;
$arguments1218['pageUid'] = NULL;
$arguments1218['pageType'] = 0;
$arguments1218['noCache'] = false;
$arguments1218['noCacheHash'] = false;
$arguments1218['section'] = '';
$arguments1218['format'] = '';
$arguments1218['linkAccessRestrictedPages'] = false;
$arguments1218['additionalParams'] = array (
);
$arguments1218['absolute'] = false;
$arguments1218['addQueryString'] = false;
$arguments1218['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1218['addQueryStringMethod'] = NULL;
$arguments1218['class'] = NULL;
$arguments1218['dir'] = NULL;
$arguments1218['id'] = NULL;
$arguments1218['lang'] = NULL;
$arguments1218['style'] = NULL;
$arguments1218['accesskey'] = NULL;
$arguments1218['tabindex'] = NULL;
$arguments1218['onclick'] = NULL;
$arguments1218['name'] = NULL;
$arguments1218['rel'] = NULL;
$arguments1218['rev'] = NULL;
$arguments1218['target'] = NULL;
$renderChildrenClosure1221 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1222 = '';

$output1222 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments1223 = array();
$arguments1223['identifier'] = 'actions-document-new';
$arguments1223['size'] = 'small';
$arguments1223['overlay'] = NULL;
$arguments1223['state'] = 'default';
$arguments1223['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure1224 = function() {return NULL;};

$output1222 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1223, $renderChildrenClosure1224, $renderingContext);

$output1222 .= '
                                    <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1225 = array();
$arguments1225['key'] = 'tx_yag_controller_gallery.addGallery';
$arguments1225['id'] = NULL;
$arguments1225['default'] = NULL;
$arguments1225['htmlEscape'] = NULL;
$arguments1225['arguments'] = NULL;
$arguments1225['extensionName'] = NULL;
$renderChildrenClosure1226 = function() {return NULL;};

$output1222 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1225, $renderChildrenClosure1226, $renderingContext);

$output1222 .= '</span>
                                ';
return $output1222;
};
$viewHelper1227 = $self->getViewHelper('$viewHelper1227', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper1227->setArguments($arguments1218);
$viewHelper1227->setRenderingContext($renderingContext);
$viewHelper1227->setRenderChildrenClosure($renderChildrenClosure1221);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output1213 .= $viewHelper1227->initializeArgumentsAndRender();

$output1213 .= '
                            </div>
                        </div>
                    </div>
                ';
return $output1213;
};

$output1184 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1211, $renderChildrenClosure1212, $renderingContext);

$output1184 .= '
            </div>
        ';
return $output1184;
};

$output625 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments633, $renderChildrenClosure634, $renderingContext);

$output625 .= '


    <div class="tx-yag-pager">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments1228 = array();
$arguments1228['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'galleryListConfig.pagerPartial', $renderingContext);
// Rendering Array
$array1229 = array();
$array1229['pager'] = $currentVariableContainer->getOrNull('pager');
$array1229['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1230 = array();
$arguments1230['key'] = 'tx_yag_general.galleries';
$arguments1230['id'] = NULL;
$arguments1230['default'] = NULL;
$arguments1230['htmlEscape'] = NULL;
$arguments1230['arguments'] = NULL;
$arguments1230['extensionName'] = NULL;
$renderChildrenClosure1231 = function() {return NULL;};
$array1229['itemsText'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1230, $renderChildrenClosure1231, $renderingContext);
$arguments1228['arguments'] = $array1229;
$arguments1228['section'] = NULL;
$arguments1228['optional'] = false;
$renderChildrenClosure1232 = function() {return NULL;};

$output625 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1228, $renderChildrenClosure1232, $renderingContext);

$output625 .= '
    </div>
';
return $output625;
};

$output616 .= '';

$output616 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments1233 = array();
$arguments1233['name'] = 'beButtonsLeft';
$renderChildrenClosure1234 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output1235 = '';

$output1235 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments1236 = array();
$arguments1236['action'] = 'new';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1237 = array();
$arguments1237['key'] = 'tx_yag_controller_gallery.addGallery';
$arguments1237['id'] = NULL;
$arguments1237['default'] = NULL;
$arguments1237['htmlEscape'] = NULL;
$arguments1237['arguments'] = NULL;
$arguments1237['extensionName'] = NULL;
$renderChildrenClosure1238 = function() {return NULL;};
$arguments1236['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1237, $renderChildrenClosure1238, $renderingContext);
$arguments1236['additionalAttributes'] = NULL;
$arguments1236['data'] = NULL;
$arguments1236['arguments'] = array (
);
$arguments1236['controller'] = NULL;
$arguments1236['extensionName'] = NULL;
$arguments1236['pluginName'] = NULL;
$arguments1236['pageUid'] = NULL;
$arguments1236['pageType'] = 0;
$arguments1236['noCache'] = false;
$arguments1236['noCacheHash'] = false;
$arguments1236['section'] = '';
$arguments1236['format'] = '';
$arguments1236['linkAccessRestrictedPages'] = false;
$arguments1236['additionalParams'] = array (
);
$arguments1236['absolute'] = false;
$arguments1236['addQueryString'] = false;
$arguments1236['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1236['addQueryStringMethod'] = NULL;
$arguments1236['class'] = NULL;
$arguments1236['dir'] = NULL;
$arguments1236['id'] = NULL;
$arguments1236['lang'] = NULL;
$arguments1236['style'] = NULL;
$arguments1236['accesskey'] = NULL;
$arguments1236['tabindex'] = NULL;
$arguments1236['onclick'] = NULL;
$arguments1236['name'] = NULL;
$arguments1236['rel'] = NULL;
$arguments1236['rev'] = NULL;
$arguments1236['target'] = NULL;
$renderChildrenClosure1239 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments1240 = array();
$arguments1240['identifier'] = 'actions-document-new';
$arguments1240['size'] = 'small';
$arguments1240['overlay'] = NULL;
$arguments1240['state'] = 'default';
$arguments1240['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure1241 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1240, $renderChildrenClosure1241, $renderingContext);
};
$viewHelper1242 = $self->getViewHelper('$viewHelper1242', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper1242->setArguments($arguments1236);
$viewHelper1242->setRenderingContext($renderingContext);
$viewHelper1242->setRenderChildrenClosure($renderChildrenClosure1239);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output1235 .= $viewHelper1242->initializeArgumentsAndRender();

$output1235 .= '
';
return $output1235;
};

$output616 .= '';


return $output616;
}


}
#1461665713    391409    