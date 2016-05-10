<?php
class FluidCache_Yag_ItemList_partial_Image_ImageThumb_29ff1599cc5a3e0430b7042a8a2ea7a4e33a435e extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
Template for rendering a thumbnail image

Here is a list of objects / variables that can be accessed in this template:

Tx_Yag_Domain_Model_Item item               Item object to be rendered

@package YAG
@author Michael Knoll <mimi@kaktusteam.de>
@author Daniel Lienert <typo3@lienert.cc>
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

<div class="tx-yag-thumb-innerframe">
	<div>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
// Rendering Array
$array5 = array();
$array5['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.linkMode', $renderingContext);
// Rendering Array
$array6 = array();
$array6['0'] = 'show';
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array5, $array6);
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output8 = '';

$output8 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments9 = array();
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments12 = array();
// Rendering Boolean node
$arguments12['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('rowIndex'));
$arguments12['then'] = NULL;
$arguments12['else'] = NULL;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output14 = '';

$output14 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments15 = array();
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output17 = '';

$output17 .= '
                        ';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper
$arguments18 = array();
$arguments18['action'] = 'show';
$arguments18['controller'] = 'Item';
// Rendering Array
$array19 = array();
$array19['itemListOffset'] = $currentVariableContainer->getOrNull('rowIndex');
$arguments18['arguments'] = $array19;
$arguments18['additionalAttributes'] = NULL;
$arguments18['data'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['pluginName'] = NULL;
$arguments18['pageUid'] = NULL;
$arguments18['pageType'] = 0;
$arguments18['noCache'] = false;
$arguments18['noCacheHash'] = false;
$arguments18['section'] = '';
$arguments18['format'] = '';
$arguments18['linkAccessRestrictedPages'] = false;
$arguments18['additionalParams'] = array (
);
$arguments18['absolute'] = false;
$arguments18['addQueryString'] = false;
$arguments18['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments18['class'] = NULL;
$arguments18['dir'] = NULL;
$arguments18['id'] = NULL;
$arguments18['lang'] = NULL;
$arguments18['style'] = NULL;
$arguments18['title'] = NULL;
$arguments18['accesskey'] = NULL;
$arguments18['tabindex'] = NULL;
$arguments18['onclick'] = NULL;
$arguments18['name'] = NULL;
$arguments18['rel'] = NULL;
$arguments18['rev'] = NULL;
$arguments18['target'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output21 = '';

$output21 .= '
                            ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments22 = array();
$arguments22['item'] = $currentVariableContainer->getOrNull('image');
$arguments22['resolutionName'] = 'thumb';
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$arguments22['alt'] = NULL;
$arguments22['centerVertical'] = NULL;
$arguments22['width'] = NULL;
$arguments22['height'] = NULL;
$arguments22['quality'] = 80;
$renderChildrenClosure23 = function() {return NULL;};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper24->setArguments($arguments22);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output21 .= $viewHelper24->initializeArgumentsAndRender();

$output21 .= '
                        ';
return $output21;
};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper');
$viewHelper25->setArguments($arguments18);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper

$output17 .= $viewHelper25->initializeArgumentsAndRender();

$output17 .= '
                    ';
return $output17;
};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments26 = array();
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output28 = '';

$output28 .= '
                        ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_ImageViewHelper
$arguments29 = array();
$arguments29['item'] = $currentVariableContainer->getOrNull('image');
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['itemUid'] = NULL;
$arguments29['pageUid'] = NULL;
$arguments29['pageType'] = 0;
$arguments29['class'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['title'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$arguments29['name'] = NULL;
$arguments29['rel'] = NULL;
$arguments29['rev'] = NULL;
$arguments29['target'] = NULL;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
                            ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments32 = array();
$arguments32['item'] = $currentVariableContainer->getOrNull('image');
$arguments32['resolutionName'] = 'thumb';
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$arguments32['alt'] = NULL;
$arguments32['centerVertical'] = NULL;
$arguments32['width'] = NULL;
$arguments32['height'] = NULL;
$arguments32['quality'] = 80;
$renderChildrenClosure33 = function() {return NULL;};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper34->setArguments($arguments32);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output31 .= $viewHelper34->initializeArgumentsAndRender();

$output31 .= '
                        ';
return $output31;
};
$viewHelper35 = $self->getViewHelper('$viewHelper35', $renderingContext, 'Tx_Yag_ViewHelpers_Link_ImageViewHelper');
$viewHelper35->setArguments($arguments29);
$viewHelper35->setRenderingContext($renderingContext);
$viewHelper35->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_ImageViewHelper

$output28 .= $viewHelper35->initializeArgumentsAndRender();

$output28 .= '
                    ';
return $output28;
};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output14 .= '
                ';
return $output14;
};
$arguments12['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output36 = '';

$output36 .= '
                        ';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper
$arguments37 = array();
$arguments37['action'] = 'show';
$arguments37['controller'] = 'Item';
// Rendering Array
$array38 = array();
$array38['itemListOffset'] = $currentVariableContainer->getOrNull('rowIndex');
$arguments37['arguments'] = $array38;
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['extensionName'] = NULL;
$arguments37['pluginName'] = NULL;
$arguments37['pageUid'] = NULL;
$arguments37['pageType'] = 0;
$arguments37['noCache'] = false;
$arguments37['noCacheHash'] = false;
$arguments37['section'] = '';
$arguments37['format'] = '';
$arguments37['linkAccessRestrictedPages'] = false;
$arguments37['additionalParams'] = array (
);
$arguments37['absolute'] = false;
$arguments37['addQueryString'] = false;
$arguments37['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$arguments37['name'] = NULL;
$arguments37['rel'] = NULL;
$arguments37['rev'] = NULL;
$arguments37['target'] = NULL;
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output40 = '';

$output40 .= '
                            ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments41 = array();
$arguments41['item'] = $currentVariableContainer->getOrNull('image');
$arguments41['resolutionName'] = 'thumb';
$arguments41['additionalAttributes'] = NULL;
$arguments41['data'] = NULL;
$arguments41['class'] = NULL;
$arguments41['dir'] = NULL;
$arguments41['id'] = NULL;
$arguments41['lang'] = NULL;
$arguments41['style'] = NULL;
$arguments41['title'] = NULL;
$arguments41['accesskey'] = NULL;
$arguments41['tabindex'] = NULL;
$arguments41['onclick'] = NULL;
$arguments41['alt'] = NULL;
$arguments41['centerVertical'] = NULL;
$arguments41['width'] = NULL;
$arguments41['height'] = NULL;
$arguments41['quality'] = 80;
$renderChildrenClosure42 = function() {return NULL;};
$viewHelper43 = $self->getViewHelper('$viewHelper43', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper43->setArguments($arguments41);
$viewHelper43->setRenderingContext($renderingContext);
$viewHelper43->setRenderChildrenClosure($renderChildrenClosure42);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output40 .= $viewHelper43->initializeArgumentsAndRender();

$output40 .= '
                        ';
return $output40;
};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper');
$viewHelper44->setArguments($arguments37);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure39);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper

$output36 .= $viewHelper44->initializeArgumentsAndRender();

$output36 .= '
                    ';
return $output36;
};
$arguments12['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output45 = '';

$output45 .= '
                        ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_ImageViewHelper
$arguments46 = array();
$arguments46['item'] = $currentVariableContainer->getOrNull('image');
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['itemUid'] = NULL;
$arguments46['pageUid'] = NULL;
$arguments46['pageType'] = 0;
$arguments46['class'] = NULL;
$arguments46['dir'] = NULL;
$arguments46['id'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['tabindex'] = NULL;
$arguments46['onclick'] = NULL;
$arguments46['name'] = NULL;
$arguments46['rel'] = NULL;
$arguments46['rev'] = NULL;
$arguments46['target'] = NULL;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output48 = '';

$output48 .= '
                            ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments49 = array();
$arguments49['item'] = $currentVariableContainer->getOrNull('image');
$arguments49['resolutionName'] = 'thumb';
$arguments49['additionalAttributes'] = NULL;
$arguments49['data'] = NULL;
$arguments49['class'] = NULL;
$arguments49['dir'] = NULL;
$arguments49['id'] = NULL;
$arguments49['lang'] = NULL;
$arguments49['style'] = NULL;
$arguments49['title'] = NULL;
$arguments49['accesskey'] = NULL;
$arguments49['tabindex'] = NULL;
$arguments49['onclick'] = NULL;
$arguments49['alt'] = NULL;
$arguments49['centerVertical'] = NULL;
$arguments49['width'] = NULL;
$arguments49['height'] = NULL;
$arguments49['quality'] = 80;
$renderChildrenClosure50 = function() {return NULL;};
$viewHelper51 = $self->getViewHelper('$viewHelper51', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper51->setArguments($arguments49);
$viewHelper51->setRenderingContext($renderingContext);
$viewHelper51->setRenderChildrenClosure($renderChildrenClosure50);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output48 .= $viewHelper51->initializeArgumentsAndRender();

$output48 .= '
                        ';
return $output48;
};
$viewHelper52 = $self->getViewHelper('$viewHelper52', $renderingContext, 'Tx_Yag_ViewHelpers_Link_ImageViewHelper');
$viewHelper52->setArguments($arguments46);
$viewHelper52->setRenderingContext($renderingContext);
$viewHelper52->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_ImageViewHelper

$output45 .= $viewHelper52->initializeArgumentsAndRender();

$output45 .= '
                    ';
return $output45;
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
            ';
return $output11;
};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments53 = array();
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output55 = '';

$output55 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments56 = array();
// Rendering Boolean node
// Rendering Array
$array57 = array();
$array57['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.linkTargetPluginMode', $renderingContext);
// Rendering Array
$array58 = array();
$array58['0'] = 'gallery';
$arguments56['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array57, $array58);
$arguments56['then'] = NULL;
$arguments56['else'] = NULL;
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output60 = '';

$output60 .= '
                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper
$arguments61 = array();
$arguments61['gallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'album.gallery', $renderingContext);
$arguments61['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.linkTargetPageUid', $renderingContext);
$arguments61['additionalAttributes'] = NULL;
$arguments61['data'] = NULL;
$arguments61['galleryUid'] = NULL;
$arguments61['pageType'] = 0;
$arguments61['noCache'] = false;
$arguments61['noCacheHash'] = false;
$arguments61['section'] = '';
$arguments61['format'] = '';
$arguments61['class'] = NULL;
$arguments61['dir'] = NULL;
$arguments61['id'] = NULL;
$arguments61['lang'] = NULL;
$arguments61['style'] = NULL;
$arguments61['title'] = NULL;
$arguments61['accesskey'] = NULL;
$arguments61['tabindex'] = NULL;
$arguments61['onclick'] = NULL;
$arguments61['name'] = NULL;
$arguments61['rel'] = NULL;
$arguments61['rev'] = NULL;
$arguments61['target'] = NULL;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output63 = '';

$output63 .= '
                        ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments64 = array();
$arguments64['item'] = $currentVariableContainer->getOrNull('image');
$arguments64['resolutionName'] = 'thumb';
$arguments64['additionalAttributes'] = NULL;
$arguments64['data'] = NULL;
$arguments64['class'] = NULL;
$arguments64['dir'] = NULL;
$arguments64['id'] = NULL;
$arguments64['lang'] = NULL;
$arguments64['style'] = NULL;
$arguments64['title'] = NULL;
$arguments64['accesskey'] = NULL;
$arguments64['tabindex'] = NULL;
$arguments64['onclick'] = NULL;
$arguments64['alt'] = NULL;
$arguments64['centerVertical'] = NULL;
$arguments64['width'] = NULL;
$arguments64['height'] = NULL;
$arguments64['quality'] = 80;
$renderChildrenClosure65 = function() {return NULL;};
$viewHelper66 = $self->getViewHelper('$viewHelper66', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper66->setArguments($arguments64);
$viewHelper66->setRenderingContext($renderingContext);
$viewHelper66->setRenderChildrenClosure($renderChildrenClosure65);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output63 .= $viewHelper66->initializeArgumentsAndRender();

$output63 .= '
                    ';
return $output63;
};
$viewHelper67 = $self->getViewHelper('$viewHelper67', $renderingContext, 'Tx_Yag_ViewHelpers_Link_GalleryViewHelper');
$viewHelper67->setArguments($arguments61);
$viewHelper67->setRenderingContext($renderingContext);
$viewHelper67->setRenderChildrenClosure($renderChildrenClosure62);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper

$output60 .= $viewHelper67->initializeArgumentsAndRender();

$output60 .= '
                ';
return $output60;
};

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, $renderChildrenClosure59, $renderingContext);

$output55 .= '

                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments68 = array();
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array69['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.linkTargetPluginMode', $renderingContext);
// Rendering Array
$array70 = array();
$array70['0'] = 'album';
$arguments68['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array69, $array70);
$arguments68['then'] = NULL;
$arguments68['else'] = NULL;
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output72 = '';

$output72 .= '
                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_AlbumViewHelper
$arguments73 = array();
$arguments73['album'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'album', $renderingContext);
$arguments73['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.linkTargetPageUid', $renderingContext);
$arguments73['additionalAttributes'] = NULL;
$arguments73['data'] = NULL;
$arguments73['albumUid'] = 0;
$arguments73['gallery'] = NULL;
$arguments73['pageType'] = 0;
$arguments73['noCache'] = false;
$arguments73['noCacheHash'] = false;
$arguments73['section'] = '';
$arguments73['format'] = '';
$arguments73['class'] = NULL;
$arguments73['dir'] = NULL;
$arguments73['id'] = NULL;
$arguments73['lang'] = NULL;
$arguments73['style'] = NULL;
$arguments73['title'] = NULL;
$arguments73['accesskey'] = NULL;
$arguments73['tabindex'] = NULL;
$arguments73['onclick'] = NULL;
$arguments73['name'] = NULL;
$arguments73['rel'] = NULL;
$arguments73['rev'] = NULL;
$arguments73['target'] = NULL;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output75 = '';

$output75 .= '
                        ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments76 = array();
$arguments76['item'] = $currentVariableContainer->getOrNull('image');
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

$output75 .= $viewHelper78->initializeArgumentsAndRender();

$output75 .= '
                    ';
return $output75;
};
$viewHelper79 = $self->getViewHelper('$viewHelper79', $renderingContext, 'Tx_Yag_ViewHelpers_Link_AlbumViewHelper');
$viewHelper79->setArguments($arguments73);
$viewHelper79->setRenderingContext($renderingContext);
$viewHelper79->setRenderChildrenClosure($renderChildrenClosure74);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_AlbumViewHelper

$output72 .= $viewHelper79->initializeArgumentsAndRender();

$output72 .= '
                ';
return $output72;
};

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, $renderChildrenClosure71, $renderingContext);

$output55 .= '

                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments80 = array();
// Rendering Boolean node
// Rendering Array
$array81 = array();
$array81['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.linkTargetPluginMode', $renderingContext);
// Rendering Array
$array82 = array();
$array82['0'] = 'image';
$arguments80['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array81, $array82);
$arguments80['then'] = NULL;
$arguments80['else'] = NULL;
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output84 = '';

$output84 .= '
                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_ImageViewHelper
$arguments85 = array();
$arguments85['item'] = $currentVariableContainer->getOrNull('image');
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['itemUid'] = NULL;
$arguments85['pageUid'] = NULL;
$arguments85['pageType'] = 0;
$arguments85['class'] = NULL;
$arguments85['dir'] = NULL;
$arguments85['id'] = NULL;
$arguments85['lang'] = NULL;
$arguments85['style'] = NULL;
$arguments85['title'] = NULL;
$arguments85['accesskey'] = NULL;
$arguments85['tabindex'] = NULL;
$arguments85['onclick'] = NULL;
$arguments85['name'] = NULL;
$arguments85['rel'] = NULL;
$arguments85['rev'] = NULL;
$arguments85['target'] = NULL;
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output87 = '';

$output87 .= '
                        ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments88 = array();
$arguments88['item'] = $currentVariableContainer->getOrNull('image');
$arguments88['resolutionName'] = 'thumb';
$arguments88['additionalAttributes'] = NULL;
$arguments88['data'] = NULL;
$arguments88['class'] = NULL;
$arguments88['dir'] = NULL;
$arguments88['id'] = NULL;
$arguments88['lang'] = NULL;
$arguments88['style'] = NULL;
$arguments88['title'] = NULL;
$arguments88['accesskey'] = NULL;
$arguments88['tabindex'] = NULL;
$arguments88['onclick'] = NULL;
$arguments88['alt'] = NULL;
$arguments88['centerVertical'] = NULL;
$arguments88['width'] = NULL;
$arguments88['height'] = NULL;
$arguments88['quality'] = 80;
$renderChildrenClosure89 = function() {return NULL;};
$viewHelper90 = $self->getViewHelper('$viewHelper90', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper90->setArguments($arguments88);
$viewHelper90->setRenderingContext($renderingContext);
$viewHelper90->setRenderChildrenClosure($renderChildrenClosure89);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output87 .= $viewHelper90->initializeArgumentsAndRender();

$output87 .= '
                    ';
return $output87;
};
$viewHelper91 = $self->getViewHelper('$viewHelper91', $renderingContext, 'Tx_Yag_ViewHelpers_Link_ImageViewHelper');
$viewHelper91->setArguments($arguments85);
$viewHelper91->setRenderingContext($renderingContext);
$viewHelper91->setRenderChildrenClosure($renderChildrenClosure86);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_ImageViewHelper

$output84 .= $viewHelper91->initializeArgumentsAndRender();

$output84 .= '
                ';
return $output84;
};

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments80, $renderChildrenClosure83, $renderingContext);

$output55 .= '
            ';
return $output55;
};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output8 .= '
        ';
return $output8;
};
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output92 = '';

$output92 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments93 = array();
// Rendering Boolean node
$arguments93['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('rowIndex'));
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output95 = '';

$output95 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments96 = array();
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output98 = '';

$output98 .= '
                        ';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper
$arguments99 = array();
$arguments99['action'] = 'show';
$arguments99['controller'] = 'Item';
// Rendering Array
$array100 = array();
$array100['itemListOffset'] = $currentVariableContainer->getOrNull('rowIndex');
$arguments99['arguments'] = $array100;
$arguments99['additionalAttributes'] = NULL;
$arguments99['data'] = NULL;
$arguments99['extensionName'] = NULL;
$arguments99['pluginName'] = NULL;
$arguments99['pageUid'] = NULL;
$arguments99['pageType'] = 0;
$arguments99['noCache'] = false;
$arguments99['noCacheHash'] = false;
$arguments99['section'] = '';
$arguments99['format'] = '';
$arguments99['linkAccessRestrictedPages'] = false;
$arguments99['additionalParams'] = array (
);
$arguments99['absolute'] = false;
$arguments99['addQueryString'] = false;
$arguments99['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments99['class'] = NULL;
$arguments99['dir'] = NULL;
$arguments99['id'] = NULL;
$arguments99['lang'] = NULL;
$arguments99['style'] = NULL;
$arguments99['title'] = NULL;
$arguments99['accesskey'] = NULL;
$arguments99['tabindex'] = NULL;
$arguments99['onclick'] = NULL;
$arguments99['name'] = NULL;
$arguments99['rel'] = NULL;
$arguments99['rev'] = NULL;
$arguments99['target'] = NULL;
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output102 = '';

$output102 .= '
                            ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments103 = array();
$arguments103['item'] = $currentVariableContainer->getOrNull('image');
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

$output102 .= $viewHelper105->initializeArgumentsAndRender();

$output102 .= '
                        ';
return $output102;
};
$viewHelper106 = $self->getViewHelper('$viewHelper106', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper');
$viewHelper106->setArguments($arguments99);
$viewHelper106->setRenderingContext($renderingContext);
$viewHelper106->setRenderChildrenClosure($renderChildrenClosure101);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper

$output98 .= $viewHelper106->initializeArgumentsAndRender();

$output98 .= '
                    ';
return $output98;
};

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments107 = array();
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output109 = '';

$output109 .= '
                        ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_ImageViewHelper
$arguments110 = array();
$arguments110['item'] = $currentVariableContainer->getOrNull('image');
$arguments110['additionalAttributes'] = NULL;
$arguments110['data'] = NULL;
$arguments110['itemUid'] = NULL;
$arguments110['pageUid'] = NULL;
$arguments110['pageType'] = 0;
$arguments110['class'] = NULL;
$arguments110['dir'] = NULL;
$arguments110['id'] = NULL;
$arguments110['lang'] = NULL;
$arguments110['style'] = NULL;
$arguments110['title'] = NULL;
$arguments110['accesskey'] = NULL;
$arguments110['tabindex'] = NULL;
$arguments110['onclick'] = NULL;
$arguments110['name'] = NULL;
$arguments110['rel'] = NULL;
$arguments110['rev'] = NULL;
$arguments110['target'] = NULL;
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output112 = '';

$output112 .= '
                            ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments113 = array();
$arguments113['item'] = $currentVariableContainer->getOrNull('image');
$arguments113['resolutionName'] = 'thumb';
$arguments113['additionalAttributes'] = NULL;
$arguments113['data'] = NULL;
$arguments113['class'] = NULL;
$arguments113['dir'] = NULL;
$arguments113['id'] = NULL;
$arguments113['lang'] = NULL;
$arguments113['style'] = NULL;
$arguments113['title'] = NULL;
$arguments113['accesskey'] = NULL;
$arguments113['tabindex'] = NULL;
$arguments113['onclick'] = NULL;
$arguments113['alt'] = NULL;
$arguments113['centerVertical'] = NULL;
$arguments113['width'] = NULL;
$arguments113['height'] = NULL;
$arguments113['quality'] = 80;
$renderChildrenClosure114 = function() {return NULL;};
$viewHelper115 = $self->getViewHelper('$viewHelper115', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper115->setArguments($arguments113);
$viewHelper115->setRenderingContext($renderingContext);
$viewHelper115->setRenderChildrenClosure($renderChildrenClosure114);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output112 .= $viewHelper115->initializeArgumentsAndRender();

$output112 .= '
                        ';
return $output112;
};
$viewHelper116 = $self->getViewHelper('$viewHelper116', $renderingContext, 'Tx_Yag_ViewHelpers_Link_ImageViewHelper');
$viewHelper116->setArguments($arguments110);
$viewHelper116->setRenderingContext($renderingContext);
$viewHelper116->setRenderChildrenClosure($renderChildrenClosure111);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_ImageViewHelper

$output109 .= $viewHelper116->initializeArgumentsAndRender();

$output109 .= '
                    ';
return $output109;
};

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output95 .= '
                ';
return $output95;
};
$arguments93['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output117 = '';

$output117 .= '
                        ';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper
$arguments118 = array();
$arguments118['action'] = 'show';
$arguments118['controller'] = 'Item';
// Rendering Array
$array119 = array();
$array119['itemListOffset'] = $currentVariableContainer->getOrNull('rowIndex');
$arguments118['arguments'] = $array119;
$arguments118['additionalAttributes'] = NULL;
$arguments118['data'] = NULL;
$arguments118['extensionName'] = NULL;
$arguments118['pluginName'] = NULL;
$arguments118['pageUid'] = NULL;
$arguments118['pageType'] = 0;
$arguments118['noCache'] = false;
$arguments118['noCacheHash'] = false;
$arguments118['section'] = '';
$arguments118['format'] = '';
$arguments118['linkAccessRestrictedPages'] = false;
$arguments118['additionalParams'] = array (
);
$arguments118['absolute'] = false;
$arguments118['addQueryString'] = false;
$arguments118['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments118['class'] = NULL;
$arguments118['dir'] = NULL;
$arguments118['id'] = NULL;
$arguments118['lang'] = NULL;
$arguments118['style'] = NULL;
$arguments118['title'] = NULL;
$arguments118['accesskey'] = NULL;
$arguments118['tabindex'] = NULL;
$arguments118['onclick'] = NULL;
$arguments118['name'] = NULL;
$arguments118['rel'] = NULL;
$arguments118['rev'] = NULL;
$arguments118['target'] = NULL;
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output121 = '';

$output121 .= '
                            ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments122 = array();
$arguments122['item'] = $currentVariableContainer->getOrNull('image');
$arguments122['resolutionName'] = 'thumb';
$arguments122['additionalAttributes'] = NULL;
$arguments122['data'] = NULL;
$arguments122['class'] = NULL;
$arguments122['dir'] = NULL;
$arguments122['id'] = NULL;
$arguments122['lang'] = NULL;
$arguments122['style'] = NULL;
$arguments122['title'] = NULL;
$arguments122['accesskey'] = NULL;
$arguments122['tabindex'] = NULL;
$arguments122['onclick'] = NULL;
$arguments122['alt'] = NULL;
$arguments122['centerVertical'] = NULL;
$arguments122['width'] = NULL;
$arguments122['height'] = NULL;
$arguments122['quality'] = 80;
$renderChildrenClosure123 = function() {return NULL;};
$viewHelper124 = $self->getViewHelper('$viewHelper124', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper124->setArguments($arguments122);
$viewHelper124->setRenderingContext($renderingContext);
$viewHelper124->setRenderChildrenClosure($renderChildrenClosure123);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output121 .= $viewHelper124->initializeArgumentsAndRender();

$output121 .= '
                        ';
return $output121;
};
$viewHelper125 = $self->getViewHelper('$viewHelper125', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper');
$viewHelper125->setArguments($arguments118);
$viewHelper125->setRenderingContext($renderingContext);
$viewHelper125->setRenderChildrenClosure($renderChildrenClosure120);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper

$output117 .= $viewHelper125->initializeArgumentsAndRender();

$output117 .= '
                    ';
return $output117;
};
$arguments93['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output126 = '';

$output126 .= '
                        ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_ImageViewHelper
$arguments127 = array();
$arguments127['item'] = $currentVariableContainer->getOrNull('image');
$arguments127['additionalAttributes'] = NULL;
$arguments127['data'] = NULL;
$arguments127['itemUid'] = NULL;
$arguments127['pageUid'] = NULL;
$arguments127['pageType'] = 0;
$arguments127['class'] = NULL;
$arguments127['dir'] = NULL;
$arguments127['id'] = NULL;
$arguments127['lang'] = NULL;
$arguments127['style'] = NULL;
$arguments127['title'] = NULL;
$arguments127['accesskey'] = NULL;
$arguments127['tabindex'] = NULL;
$arguments127['onclick'] = NULL;
$arguments127['name'] = NULL;
$arguments127['rel'] = NULL;
$arguments127['rev'] = NULL;
$arguments127['target'] = NULL;
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output129 = '';

$output129 .= '
                            ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments130 = array();
$arguments130['item'] = $currentVariableContainer->getOrNull('image');
$arguments130['resolutionName'] = 'thumb';
$arguments130['additionalAttributes'] = NULL;
$arguments130['data'] = NULL;
$arguments130['class'] = NULL;
$arguments130['dir'] = NULL;
$arguments130['id'] = NULL;
$arguments130['lang'] = NULL;
$arguments130['style'] = NULL;
$arguments130['title'] = NULL;
$arguments130['accesskey'] = NULL;
$arguments130['tabindex'] = NULL;
$arguments130['onclick'] = NULL;
$arguments130['alt'] = NULL;
$arguments130['centerVertical'] = NULL;
$arguments130['width'] = NULL;
$arguments130['height'] = NULL;
$arguments130['quality'] = 80;
$renderChildrenClosure131 = function() {return NULL;};
$viewHelper132 = $self->getViewHelper('$viewHelper132', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper132->setArguments($arguments130);
$viewHelper132->setRenderingContext($renderingContext);
$viewHelper132->setRenderChildrenClosure($renderChildrenClosure131);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output129 .= $viewHelper132->initializeArgumentsAndRender();

$output129 .= '
                        ';
return $output129;
};
$viewHelper133 = $self->getViewHelper('$viewHelper133', $renderingContext, 'Tx_Yag_ViewHelpers_Link_ImageViewHelper');
$viewHelper133->setArguments($arguments127);
$viewHelper133->setRenderingContext($renderingContext);
$viewHelper133->setRenderChildrenClosure($renderChildrenClosure128);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_ImageViewHelper

$output126 .= $viewHelper133->initializeArgumentsAndRender();

$output126 .= '
                    ';
return $output126;
};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '
            ';
return $output92;
};
$arguments4['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output134 = '';

$output134 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments135 = array();
// Rendering Boolean node
// Rendering Array
$array136 = array();
$array136['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.linkTargetPluginMode', $renderingContext);
// Rendering Array
$array137 = array();
$array137['0'] = 'gallery';
$arguments135['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array136, $array137);
$arguments135['then'] = NULL;
$arguments135['else'] = NULL;
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output139 = '';

$output139 .= '
                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper
$arguments140 = array();
$arguments140['gallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'album.gallery', $renderingContext);
$arguments140['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.linkTargetPageUid', $renderingContext);
$arguments140['additionalAttributes'] = NULL;
$arguments140['data'] = NULL;
$arguments140['galleryUid'] = NULL;
$arguments140['pageType'] = 0;
$arguments140['noCache'] = false;
$arguments140['noCacheHash'] = false;
$arguments140['section'] = '';
$arguments140['format'] = '';
$arguments140['class'] = NULL;
$arguments140['dir'] = NULL;
$arguments140['id'] = NULL;
$arguments140['lang'] = NULL;
$arguments140['style'] = NULL;
$arguments140['title'] = NULL;
$arguments140['accesskey'] = NULL;
$arguments140['tabindex'] = NULL;
$arguments140['onclick'] = NULL;
$arguments140['name'] = NULL;
$arguments140['rel'] = NULL;
$arguments140['rev'] = NULL;
$arguments140['target'] = NULL;
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output142 = '';

$output142 .= '
                        ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments143 = array();
$arguments143['item'] = $currentVariableContainer->getOrNull('image');
$arguments143['resolutionName'] = 'thumb';
$arguments143['additionalAttributes'] = NULL;
$arguments143['data'] = NULL;
$arguments143['class'] = NULL;
$arguments143['dir'] = NULL;
$arguments143['id'] = NULL;
$arguments143['lang'] = NULL;
$arguments143['style'] = NULL;
$arguments143['title'] = NULL;
$arguments143['accesskey'] = NULL;
$arguments143['tabindex'] = NULL;
$arguments143['onclick'] = NULL;
$arguments143['alt'] = NULL;
$arguments143['centerVertical'] = NULL;
$arguments143['width'] = NULL;
$arguments143['height'] = NULL;
$arguments143['quality'] = 80;
$renderChildrenClosure144 = function() {return NULL;};
$viewHelper145 = $self->getViewHelper('$viewHelper145', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper145->setArguments($arguments143);
$viewHelper145->setRenderingContext($renderingContext);
$viewHelper145->setRenderChildrenClosure($renderChildrenClosure144);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output142 .= $viewHelper145->initializeArgumentsAndRender();

$output142 .= '
                    ';
return $output142;
};
$viewHelper146 = $self->getViewHelper('$viewHelper146', $renderingContext, 'Tx_Yag_ViewHelpers_Link_GalleryViewHelper');
$viewHelper146->setArguments($arguments140);
$viewHelper146->setRenderingContext($renderingContext);
$viewHelper146->setRenderChildrenClosure($renderChildrenClosure141);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper

$output139 .= $viewHelper146->initializeArgumentsAndRender();

$output139 .= '
                ';
return $output139;
};

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments135, $renderChildrenClosure138, $renderingContext);

$output134 .= '

                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments147 = array();
// Rendering Boolean node
// Rendering Array
$array148 = array();
$array148['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.linkTargetPluginMode', $renderingContext);
// Rendering Array
$array149 = array();
$array149['0'] = 'album';
$arguments147['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array148, $array149);
$arguments147['then'] = NULL;
$arguments147['else'] = NULL;
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output151 = '';

$output151 .= '
                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_AlbumViewHelper
$arguments152 = array();
$arguments152['album'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'album', $renderingContext);
$arguments152['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.linkTargetPageUid', $renderingContext);
$arguments152['additionalAttributes'] = NULL;
$arguments152['data'] = NULL;
$arguments152['albumUid'] = 0;
$arguments152['gallery'] = NULL;
$arguments152['pageType'] = 0;
$arguments152['noCache'] = false;
$arguments152['noCacheHash'] = false;
$arguments152['section'] = '';
$arguments152['format'] = '';
$arguments152['class'] = NULL;
$arguments152['dir'] = NULL;
$arguments152['id'] = NULL;
$arguments152['lang'] = NULL;
$arguments152['style'] = NULL;
$arguments152['title'] = NULL;
$arguments152['accesskey'] = NULL;
$arguments152['tabindex'] = NULL;
$arguments152['onclick'] = NULL;
$arguments152['name'] = NULL;
$arguments152['rel'] = NULL;
$arguments152['rev'] = NULL;
$arguments152['target'] = NULL;
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output154 = '';

$output154 .= '
                        ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments155 = array();
$arguments155['item'] = $currentVariableContainer->getOrNull('image');
$arguments155['resolutionName'] = 'thumb';
$arguments155['additionalAttributes'] = NULL;
$arguments155['data'] = NULL;
$arguments155['class'] = NULL;
$arguments155['dir'] = NULL;
$arguments155['id'] = NULL;
$arguments155['lang'] = NULL;
$arguments155['style'] = NULL;
$arguments155['title'] = NULL;
$arguments155['accesskey'] = NULL;
$arguments155['tabindex'] = NULL;
$arguments155['onclick'] = NULL;
$arguments155['alt'] = NULL;
$arguments155['centerVertical'] = NULL;
$arguments155['width'] = NULL;
$arguments155['height'] = NULL;
$arguments155['quality'] = 80;
$renderChildrenClosure156 = function() {return NULL;};
$viewHelper157 = $self->getViewHelper('$viewHelper157', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper157->setArguments($arguments155);
$viewHelper157->setRenderingContext($renderingContext);
$viewHelper157->setRenderChildrenClosure($renderChildrenClosure156);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output154 .= $viewHelper157->initializeArgumentsAndRender();

$output154 .= '
                    ';
return $output154;
};
$viewHelper158 = $self->getViewHelper('$viewHelper158', $renderingContext, 'Tx_Yag_ViewHelpers_Link_AlbumViewHelper');
$viewHelper158->setArguments($arguments152);
$viewHelper158->setRenderingContext($renderingContext);
$viewHelper158->setRenderChildrenClosure($renderChildrenClosure153);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_AlbumViewHelper

$output151 .= $viewHelper158->initializeArgumentsAndRender();

$output151 .= '
                ';
return $output151;
};

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments147, $renderChildrenClosure150, $renderingContext);

$output134 .= '

                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments159 = array();
// Rendering Boolean node
// Rendering Array
$array160 = array();
$array160['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.linkTargetPluginMode', $renderingContext);
// Rendering Array
$array161 = array();
$array161['0'] = 'image';
$arguments159['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array160, $array161);
$arguments159['then'] = NULL;
$arguments159['else'] = NULL;
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output163 = '';

$output163 .= '
                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_ImageViewHelper
$arguments164 = array();
$arguments164['item'] = $currentVariableContainer->getOrNull('image');
$arguments164['additionalAttributes'] = NULL;
$arguments164['data'] = NULL;
$arguments164['itemUid'] = NULL;
$arguments164['pageUid'] = NULL;
$arguments164['pageType'] = 0;
$arguments164['class'] = NULL;
$arguments164['dir'] = NULL;
$arguments164['id'] = NULL;
$arguments164['lang'] = NULL;
$arguments164['style'] = NULL;
$arguments164['title'] = NULL;
$arguments164['accesskey'] = NULL;
$arguments164['tabindex'] = NULL;
$arguments164['onclick'] = NULL;
$arguments164['name'] = NULL;
$arguments164['rel'] = NULL;
$arguments164['rev'] = NULL;
$arguments164['target'] = NULL;
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output166 = '';

$output166 .= '
                        ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments167 = array();
$arguments167['item'] = $currentVariableContainer->getOrNull('image');
$arguments167['resolutionName'] = 'thumb';
$arguments167['additionalAttributes'] = NULL;
$arguments167['data'] = NULL;
$arguments167['class'] = NULL;
$arguments167['dir'] = NULL;
$arguments167['id'] = NULL;
$arguments167['lang'] = NULL;
$arguments167['style'] = NULL;
$arguments167['title'] = NULL;
$arguments167['accesskey'] = NULL;
$arguments167['tabindex'] = NULL;
$arguments167['onclick'] = NULL;
$arguments167['alt'] = NULL;
$arguments167['centerVertical'] = NULL;
$arguments167['width'] = NULL;
$arguments167['height'] = NULL;
$arguments167['quality'] = 80;
$renderChildrenClosure168 = function() {return NULL;};
$viewHelper169 = $self->getViewHelper('$viewHelper169', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper169->setArguments($arguments167);
$viewHelper169->setRenderingContext($renderingContext);
$viewHelper169->setRenderChildrenClosure($renderChildrenClosure168);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output166 .= $viewHelper169->initializeArgumentsAndRender();

$output166 .= '
                    ';
return $output166;
};
$viewHelper170 = $self->getViewHelper('$viewHelper170', $renderingContext, 'Tx_Yag_ViewHelpers_Link_ImageViewHelper');
$viewHelper170->setArguments($arguments164);
$viewHelper170->setRenderingContext($renderingContext);
$viewHelper170->setRenderChildrenClosure($renderChildrenClosure165);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_ImageViewHelper

$output163 .= $viewHelper170->initializeArgumentsAndRender();

$output163 .= '
                ';
return $output163;
};

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments159, $renderChildrenClosure162, $renderingContext);

$output134 .= '
            ';
return $output134;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure7, $renderingContext);

$output0 .= '
	</div>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments171 = array();
// Rendering Boolean node
$arguments171['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.itemList.showTitle', $renderingContext));
$arguments171['then'] = NULL;
$arguments171['else'] = NULL;
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output173 = '';

$output173 .= '
		<div class="tx-yag-thumb-caption">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments174 = array();
$arguments174['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'title', $renderingContext);
$arguments174['keepQuotes'] = false;
$arguments174['encoding'] = NULL;
$arguments174['doubleEncode'] = true;
$renderChildrenClosure175 = function() {return NULL;};
$value176 = ($arguments174['value'] !== NULL ? $arguments174['value'] : $renderChildrenClosure175());

$output173 .= (!is_string($value176) ? $value176 : htmlspecialchars($value176, ($arguments174['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments174['encoding'] !== NULL ? $arguments174['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments174['doubleEncode']));

$output173 .= '</div>
	';
return $output173;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output0 .= '
</div>
';


return $output0;
}


}
#1461762518    56923     