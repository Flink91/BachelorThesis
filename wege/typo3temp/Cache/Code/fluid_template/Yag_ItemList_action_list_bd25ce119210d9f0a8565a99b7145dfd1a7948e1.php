<?php
class FluidCache_Yag_ItemList_action_list_bd25ce119210d9f0a8565a99b7145dfd1a7948e1 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section head
 */
public function section_1a954628a960aaef81d7b2d4521929579f3541e6(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();



return NULL;
}
/**
 * section main
 */
public function section_b28b7af69320201d1cf206ebf28373980add1451(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '

    <div id="yag-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'contextIdentifier', $renderingContext);
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() {return NULL;};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1['encoding'] !== NULL ? $arguments1['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1['doubleEncode']));

$output0 .= '" class="yag-list-wrap yag-gallery" data-yag-gallery-settings=\'';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_JsonSettingsViewHelper
$arguments4 = array();
$arguments4['tsPath'] = 'javaScriptSettings';
$arguments4['settings'] = NULL;
$arguments4['onlyKeyValuePairs'] = false;
$renderChildrenClosure5 = function() {return NULL;};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_JsonSettingsViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_JsonSettingsViewHelper

$output0 .= $viewHelper6->initializeArgumentsAndRender();

$output0 .= '\'>

        <ul>
            <div class="offPageItems">
                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_OffPageItemListViewHelper
$arguments7 = array();
$arguments7['type'] = 'pre';
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments10 = array();
$arguments10['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.imageThumbPartial', $renderingContext);
// Rendering Array
$array11 = array();
$array11['config'] = $currentVariableContainer->getOrNull('config');
$array11['image'] = $currentVariableContainer->getOrNull('image');
$array11['rowIndex'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'specialValues.absoluteRowIndex', $renderingContext);
$array11['pager'] = $currentVariableContainer->getOrNull('pager');
$array11['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
$array11['hideThumb'] = '1';
$arguments10['arguments'] = $array11;
$arguments10['section'] = NULL;
$arguments10['optional'] = false;
$renderChildrenClosure12 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments10, $renderChildrenClosure12, $renderingContext);

$output9 .= '
                ';
return $output9;
};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'Tx_Yag_ViewHelpers_OffPageItemListViewHelper');
$viewHelper13->setArguments($arguments7);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper Tx_Yag_ViewHelpers_OffPageItemListViewHelper

$output0 .= $viewHelper13->initializeArgumentsAndRender();

$output0 .= '
            </div>

			<div class="tx-yag-items">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments14 = array();
$arguments14['each'] = $currentVariableContainer->getOrNull('listData');
$arguments14['key'] = 'rowIndex';
$arguments14['as'] = 'listRow';
$arguments14['reverse'] = false;
$arguments14['iteration'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output16 = '';

$output16 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments17 = array();
$arguments17['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.imageThumbPartial', $renderingContext);
// Rendering Array
$array18 = array();
$array18['config'] = $currentVariableContainer->getOrNull('config');
$array18['image'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'image.value', $renderingContext);
$array18['rowIndex'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'specialValues.absoluteRowIndex', $renderingContext);
$array18['pager'] = $currentVariableContainer->getOrNull('pager');
$array18['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
$arguments17['arguments'] = $array18;
$arguments17['section'] = NULL;
$arguments17['optional'] = false;
$renderChildrenClosure19 = function() {return NULL;};

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments17, $renderChildrenClosure19, $renderingContext);

$output16 .= '
                ';
return $output16;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output0 .= '
			</div>

            <div class="offPageItems">
                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_OffPageItemListViewHelper
$arguments20 = array();
$arguments20['type'] = 'post';
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments23 = array();
$arguments23['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.imageThumbPartial', $renderingContext);
// Rendering Array
$array24 = array();
$array24['config'] = $currentVariableContainer->getOrNull('config');
$array24['image'] = $currentVariableContainer->getOrNull('image');
$array24['rowIndex'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'specialValues.absoluteRowIndex', $renderingContext);
$array24['pager'] = $currentVariableContainer->getOrNull('pager');
$array24['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
$array24['hideThumb'] = '1';
$arguments23['arguments'] = $array24;
$arguments23['section'] = NULL;
$arguments23['optional'] = false;
$renderChildrenClosure25 = function() {return NULL;};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments23, $renderChildrenClosure25, $renderingContext);

$output22 .= '
                ';
return $output22;
};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'Tx_Yag_ViewHelpers_OffPageItemListViewHelper');
$viewHelper26->setArguments($arguments20);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper Tx_Yag_ViewHelpers_OffPageItemListViewHelper

$output0 .= $viewHelper26->initializeArgumentsAndRender();

$output0 .= '
            </div>

            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments27 = array();
// Rendering Boolean node
$arguments27['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.itemList.zipDownload.active', $renderingContext));
$arguments27['then'] = NULL;
$arguments27['else'] = NULL;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output29 = '';

$output29 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments30 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments31 = array();
$arguments31['subject'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('listData');
};
$arguments30['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext));
$arguments30['then'] = NULL;
$arguments30['else'] = NULL;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output34 = '';

$output34 .= '
                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_ZipDownloadViewHelper
$arguments35 = array();
$arguments35['album'] = $currentVariableContainer->getOrNull('album');
$arguments35['additionalAttributes'] = NULL;
$arguments35['data'] = NULL;
$arguments35['gallery'] = NULL;
$arguments35['pageUid'] = NULL;
$arguments35['pageType'] = 0;
$arguments35['noCache'] = false;
$arguments35['noCacheHash'] = false;
$arguments35['section'] = '';
$arguments35['format'] = '';
$arguments35['class'] = NULL;
$arguments35['dir'] = NULL;
$arguments35['id'] = NULL;
$arguments35['lang'] = NULL;
$arguments35['style'] = NULL;
$arguments35['title'] = NULL;
$arguments35['accesskey'] = NULL;
$arguments35['tabindex'] = NULL;
$arguments35['onclick'] = NULL;
$arguments35['name'] = NULL;
$arguments35['rel'] = NULL;
$arguments35['rev'] = NULL;
$arguments35['target'] = NULL;
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments37 = array();
$arguments37['key'] = 'tx_yag_controller_album.downloadAsZip';
$arguments37['id'] = NULL;
$arguments37['default'] = NULL;
$arguments37['htmlEscape'] = NULL;
$arguments37['arguments'] = NULL;
$arguments37['extensionName'] = NULL;
$renderChildrenClosure38 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);
};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'Tx_Yag_ViewHelpers_Link_ZipDownloadViewHelper');
$viewHelper39->setArguments($arguments35);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure36);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_ZipDownloadViewHelper

$output34 .= $viewHelper39->initializeArgumentsAndRender();

$output34 .= '
                ';
return $output34;
};

$output29 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, $renderChildrenClosure33, $renderingContext);

$output29 .= '
            ';
return $output29;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output0 .= '

            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments40 = array();
// Rendering Boolean node
$arguments40['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.itemList.showPager', $renderingContext));
$arguments40['then'] = NULL;
$arguments40['else'] = NULL;
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output42 = '';

$output42 .= '
                <div class="tx-yag-pager">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments43 = array();
$arguments43['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.pagerPartial', $renderingContext);
// Rendering Array
$array44 = array();
$array44['action'] = $currentVariableContainer->getOrNull('listAction');
$array44['controller'] = 'ItemList';
$array44['pager'] = $currentVariableContainer->getOrNull('pager');
$array44['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments45 = array();
$arguments45['key'] = 'tx_yag_domain_model_album.items';
$arguments45['id'] = NULL;
$arguments45['default'] = NULL;
$arguments45['htmlEscape'] = NULL;
$arguments45['arguments'] = NULL;
$arguments45['extensionName'] = NULL;
$renderChildrenClosure46 = function() {return NULL;};
$array44['itemsText'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);
$arguments43['arguments'] = $array44;
$arguments43['section'] = NULL;
$arguments43['optional'] = false;
$renderChildrenClosure47 = function() {return NULL;};

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments43, $renderChildrenClosure47, $renderingContext);

$output42 .= '
                </div>
            ';
return $output42;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output0 .= '
        </ul>
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



return NULL;
}
/**
 * section feEdit
 */
public function section_70142cdf206387b7141dfd354a9ffa8f190cd9d7(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();



return NULL;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output48 = '';

$output48 .= '


';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper
$arguments49 = array();
$arguments49['show'] = false;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
<!--  
Template for rendering an album.

Here is a list of objects / variables that can be accessed in this template:

Tx_PtExtlist_Domain_Model_List_ListData listData               List of items in album

@package YAG
@author Daniel Lienert <typo3@lienert.cc>
@author Michael Knoll <mimi@kaktusteam.de>
-->
';
};
$viewHelper51 = $self->getViewHelper('$viewHelper51', $renderingContext, 'Tx_PtExtlist_ViewHelpers_CommentViewHelper');
$viewHelper51->setArguments($arguments49);
$viewHelper51->setRenderingContext($renderingContext);
$viewHelper51->setRenderChildrenClosure($renderChildrenClosure50);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper

$output48 .= $viewHelper51->initializeArgumentsAndRender();

$output48 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments52 = array();
$arguments52['name'] = 'Default';
$renderChildrenClosure53 = function() {return NULL;};
$viewHelper54 = $self->getViewHelper('$viewHelper54', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper54->setArguments($arguments52);
$viewHelper54->setRenderingContext($renderingContext);
$viewHelper54->setRenderChildrenClosure($renderChildrenClosure53);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output48 .= $viewHelper54->initializeArgumentsAndRender();

$output48 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments55 = array();
$arguments55['name'] = 'head';
$renderChildrenClosure56 = function() {return NULL;};

$output48 .= '';

$output48 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments57 = array();
$arguments57['name'] = 'main';
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output59 = '';

$output59 .= '

    <div id="yag-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments60 = array();
$arguments60['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'contextIdentifier', $renderingContext);
$arguments60['keepQuotes'] = false;
$arguments60['encoding'] = NULL;
$arguments60['doubleEncode'] = true;
$renderChildrenClosure61 = function() {return NULL;};
$value62 = ($arguments60['value'] !== NULL ? $arguments60['value'] : $renderChildrenClosure61());

$output59 .= (!is_string($value62) ? $value62 : htmlspecialchars($value62, ($arguments60['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments60['encoding'] !== NULL ? $arguments60['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments60['doubleEncode']));

$output59 .= '" class="yag-list-wrap yag-gallery" data-yag-gallery-settings=\'';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_JsonSettingsViewHelper
$arguments63 = array();
$arguments63['tsPath'] = 'javaScriptSettings';
$arguments63['settings'] = NULL;
$arguments63['onlyKeyValuePairs'] = false;
$renderChildrenClosure64 = function() {return NULL;};
$viewHelper65 = $self->getViewHelper('$viewHelper65', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_JsonSettingsViewHelper');
$viewHelper65->setArguments($arguments63);
$viewHelper65->setRenderingContext($renderingContext);
$viewHelper65->setRenderChildrenClosure($renderChildrenClosure64);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_JsonSettingsViewHelper

$output59 .= $viewHelper65->initializeArgumentsAndRender();

$output59 .= '\'>

        <ul>
            <div class="offPageItems">
                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_OffPageItemListViewHelper
$arguments66 = array();
$arguments66['type'] = 'pre';
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output68 = '';

$output68 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments69 = array();
$arguments69['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.imageThumbPartial', $renderingContext);
// Rendering Array
$array70 = array();
$array70['config'] = $currentVariableContainer->getOrNull('config');
$array70['image'] = $currentVariableContainer->getOrNull('image');
$array70['rowIndex'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'specialValues.absoluteRowIndex', $renderingContext);
$array70['pager'] = $currentVariableContainer->getOrNull('pager');
$array70['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
$array70['hideThumb'] = '1';
$arguments69['arguments'] = $array70;
$arguments69['section'] = NULL;
$arguments69['optional'] = false;
$renderChildrenClosure71 = function() {return NULL;};

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments69, $renderChildrenClosure71, $renderingContext);

$output68 .= '
                ';
return $output68;
};
$viewHelper72 = $self->getViewHelper('$viewHelper72', $renderingContext, 'Tx_Yag_ViewHelpers_OffPageItemListViewHelper');
$viewHelper72->setArguments($arguments66);
$viewHelper72->setRenderingContext($renderingContext);
$viewHelper72->setRenderChildrenClosure($renderChildrenClosure67);
// End of ViewHelper Tx_Yag_ViewHelpers_OffPageItemListViewHelper

$output59 .= $viewHelper72->initializeArgumentsAndRender();

$output59 .= '
            </div>

			<div class="tx-yag-items">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments73 = array();
$arguments73['each'] = $currentVariableContainer->getOrNull('listData');
$arguments73['key'] = 'rowIndex';
$arguments73['as'] = 'listRow';
$arguments73['reverse'] = false;
$arguments73['iteration'] = NULL;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output75 = '';

$output75 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments76 = array();
$arguments76['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.imageThumbPartial', $renderingContext);
// Rendering Array
$array77 = array();
$array77['config'] = $currentVariableContainer->getOrNull('config');
$array77['image'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'image.value', $renderingContext);
$array77['rowIndex'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'specialValues.absoluteRowIndex', $renderingContext);
$array77['pager'] = $currentVariableContainer->getOrNull('pager');
$array77['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
$arguments76['arguments'] = $array77;
$arguments76['section'] = NULL;
$arguments76['optional'] = false;
$renderChildrenClosure78 = function() {return NULL;};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments76, $renderChildrenClosure78, $renderingContext);

$output75 .= '
                ';
return $output75;
};

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output59 .= '
			</div>

            <div class="offPageItems">
                ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_OffPageItemListViewHelper
$arguments79 = array();
$arguments79['type'] = 'post';
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output81 = '';

$output81 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments82 = array();
$arguments82['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.imageThumbPartial', $renderingContext);
// Rendering Array
$array83 = array();
$array83['config'] = $currentVariableContainer->getOrNull('config');
$array83['image'] = $currentVariableContainer->getOrNull('image');
$array83['rowIndex'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'specialValues.absoluteRowIndex', $renderingContext);
$array83['pager'] = $currentVariableContainer->getOrNull('pager');
$array83['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
$array83['hideThumb'] = '1';
$arguments82['arguments'] = $array83;
$arguments82['section'] = NULL;
$arguments82['optional'] = false;
$renderChildrenClosure84 = function() {return NULL;};

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments82, $renderChildrenClosure84, $renderingContext);

$output81 .= '
                ';
return $output81;
};
$viewHelper85 = $self->getViewHelper('$viewHelper85', $renderingContext, 'Tx_Yag_ViewHelpers_OffPageItemListViewHelper');
$viewHelper85->setArguments($arguments79);
$viewHelper85->setRenderingContext($renderingContext);
$viewHelper85->setRenderChildrenClosure($renderChildrenClosure80);
// End of ViewHelper Tx_Yag_ViewHelpers_OffPageItemListViewHelper

$output59 .= $viewHelper85->initializeArgumentsAndRender();

$output59 .= '
            </div>

            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments86 = array();
// Rendering Boolean node
$arguments86['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.itemList.zipDownload.active', $renderingContext));
$arguments86['then'] = NULL;
$arguments86['else'] = NULL;
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output88 = '';

$output88 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments89 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments90 = array();
$arguments90['subject'] = NULL;
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('listData');
};
$arguments89['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext));
$arguments89['then'] = NULL;
$arguments89['else'] = NULL;
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output93 = '';

$output93 .= '
                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_ZipDownloadViewHelper
$arguments94 = array();
$arguments94['album'] = $currentVariableContainer->getOrNull('album');
$arguments94['additionalAttributes'] = NULL;
$arguments94['data'] = NULL;
$arguments94['gallery'] = NULL;
$arguments94['pageUid'] = NULL;
$arguments94['pageType'] = 0;
$arguments94['noCache'] = false;
$arguments94['noCacheHash'] = false;
$arguments94['section'] = '';
$arguments94['format'] = '';
$arguments94['class'] = NULL;
$arguments94['dir'] = NULL;
$arguments94['id'] = NULL;
$arguments94['lang'] = NULL;
$arguments94['style'] = NULL;
$arguments94['title'] = NULL;
$arguments94['accesskey'] = NULL;
$arguments94['tabindex'] = NULL;
$arguments94['onclick'] = NULL;
$arguments94['name'] = NULL;
$arguments94['rel'] = NULL;
$arguments94['rev'] = NULL;
$arguments94['target'] = NULL;
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments96 = array();
$arguments96['key'] = 'tx_yag_controller_album.downloadAsZip';
$arguments96['id'] = NULL;
$arguments96['default'] = NULL;
$arguments96['htmlEscape'] = NULL;
$arguments96['arguments'] = NULL;
$arguments96['extensionName'] = NULL;
$renderChildrenClosure97 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);
};
$viewHelper98 = $self->getViewHelper('$viewHelper98', $renderingContext, 'Tx_Yag_ViewHelpers_Link_ZipDownloadViewHelper');
$viewHelper98->setArguments($arguments94);
$viewHelper98->setRenderingContext($renderingContext);
$viewHelper98->setRenderChildrenClosure($renderChildrenClosure95);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_ZipDownloadViewHelper

$output93 .= $viewHelper98->initializeArgumentsAndRender();

$output93 .= '
                ';
return $output93;
};

$output88 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments89, $renderChildrenClosure92, $renderingContext);

$output88 .= '
            ';
return $output88;
};

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output59 .= '

            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments99 = array();
// Rendering Boolean node
$arguments99['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.itemList.showPager', $renderingContext));
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output101 = '';

$output101 .= '
                <div class="tx-yag-pager">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments102 = array();
$arguments102['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.pagerPartial', $renderingContext);
// Rendering Array
$array103 = array();
$array103['action'] = $currentVariableContainer->getOrNull('listAction');
$array103['controller'] = 'ItemList';
$array103['pager'] = $currentVariableContainer->getOrNull('pager');
$array103['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments104 = array();
$arguments104['key'] = 'tx_yag_domain_model_album.items';
$arguments104['id'] = NULL;
$arguments104['default'] = NULL;
$arguments104['htmlEscape'] = NULL;
$arguments104['arguments'] = NULL;
$arguments104['extensionName'] = NULL;
$renderChildrenClosure105 = function() {return NULL;};
$array103['itemsText'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);
$arguments102['arguments'] = $array103;
$arguments102['section'] = NULL;
$arguments102['optional'] = false;
$renderChildrenClosure106 = function() {return NULL;};

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments102, $renderChildrenClosure106, $renderingContext);

$output101 .= '
                </div>
            ';
return $output101;
};

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output59 .= '
        </ul>
    </div>
';
return $output59;
};

$output48 .= '';

$output48 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments107 = array();
$arguments107['name'] = 'beButtonsLeft';
$renderChildrenClosure108 = function() {return NULL;};

$output48 .= '';

$output48 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments109 = array();
$arguments109['name'] = 'feEdit';
$renderChildrenClosure110 = function() {return NULL;};

$output48 .= '';

$output48 .= '
';


return $output48;
}


}
#1465043428    32784     