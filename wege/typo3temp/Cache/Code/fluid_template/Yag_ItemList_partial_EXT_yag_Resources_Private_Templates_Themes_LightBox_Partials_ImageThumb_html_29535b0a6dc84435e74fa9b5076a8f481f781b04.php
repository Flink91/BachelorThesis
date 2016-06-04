<?php
class FluidCache_Yag_ItemList_partial_EXT_yag_Resources_Private_Templates_Themes_LightBox_Partials_ImageThumb_html_29535b0a6dc84435e74fa9b5076a8f481f781b04 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<li class="tx-yag-thumb-outerframe yag-item-thumb-outerframe" id="yag_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments4 = array();
$arguments4['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'uid', $renderingContext);
$arguments4['keepQuotes'] = false;
$arguments4['encoding'] = NULL;
$arguments4['doubleEncode'] = true;
$renderChildrenClosure5 = function() {return NULL;};
$value6 = ($arguments4['value'] !== NULL ? $arguments4['value'] : $renderChildrenClosure5());

$output0 .= (!is_string($value6) ? $value6 : htmlspecialchars($value6, ($arguments4['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments4['encoding'] !== NULL ? $arguments4['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments4['doubleEncode']));

$output0 .= '">
	<div class="tx-yag-thumb-innerframe yag-item-thumb-innerframe">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments7 = array();
// Rendering Boolean node
// Rendering Array
$array8 = array();
$array8['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.linkMode', $renderingContext);
// Rendering Array
$array9 = array();
$array9['0'] = 'show';
$arguments7['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array8, $array9);
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments12 = array();
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output14 = '';

$output14 .= '
				<a href="';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Resource_ImageViewHelper
$arguments15 = array();
$arguments15['item'] = $currentVariableContainer->getOrNull('image');
$arguments15['resolutionName'] = 'medium';
$arguments15['width'] = NULL;
$arguments15['height'] = NULL;
$arguments15['quality'] = NULL;
$arguments15['absolute'] = false;
$renderChildrenClosure16 = function() {return NULL;};
$viewHelper17 = $self->getViewHelper('$viewHelper17', $renderingContext, 'Tx_Yag_ViewHelpers_Resource_ImageViewHelper');
$viewHelper17->setArguments($arguments15);
$viewHelper17->setRenderingContext($renderingContext);
$viewHelper17->setRenderChildrenClosure($renderChildrenClosure16);
// End of ViewHelper Tx_Yag_ViewHelpers_Resource_ImageViewHelper

$output14 .= $viewHelper17->initializeArgumentsAndRender();

$output14 .= '"
					 class="yag-lightbox-link"
					 rel="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments18 = array();
$arguments18['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'contextIdentifier', $renderingContext);
$arguments18['keepQuotes'] = false;
$arguments18['encoding'] = NULL;
$arguments18['doubleEncode'] = true;
$renderChildrenClosure19 = function() {return NULL;};
$value20 = ($arguments18['value'] !== NULL ? $arguments18['value'] : $renderChildrenClosure19());

$output14 .= (!is_string($value20) ? $value20 : htmlspecialchars($value20, ($arguments18['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments18['encoding'] !== NULL ? $arguments18['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments18['doubleEncode']));

$output14 .= '"
					 title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments21 = array();
// Rendering Boolean node
$arguments21['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.item.showTitle', $renderingContext));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments22 = array();
$arguments22['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'title', $renderingContext);
$arguments22['keepQuotes'] = false;
$arguments22['encoding'] = NULL;
$arguments22['doubleEncode'] = true;
$renderChildrenClosure23 = function() {return NULL;};
$value24 = ($arguments22['value'] !== NULL ? $arguments22['value'] : $renderChildrenClosure23());
$arguments21['then'] = (!is_string($value24) ? $value24 : htmlspecialchars($value24, ($arguments22['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments22['encoding'] !== NULL ? $arguments22['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments22['doubleEncode']));
$arguments21['else'] = '';
$renderChildrenClosure25 = function() {return NULL;};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure25, $renderingContext);

$output14 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments26 = array();
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array27['0'] = '';
// Rendering Array
$array28 = array();
$array28['0'] = $currentVariableContainer->getOrNull('hideThumb');
$arguments26['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array27, $array28);
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output30 = '';

$output30 .= '
						';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments31 = array();
$arguments31['item'] = $currentVariableContainer->getOrNull('image');
$arguments31['resolutionName'] = 'thumb';
$arguments31['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'title', $renderingContext);
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['class'] = NULL;
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['title'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['tabindex'] = NULL;
$arguments31['onclick'] = NULL;
$arguments31['centerVertical'] = NULL;
$arguments31['width'] = NULL;
$arguments31['height'] = NULL;
$arguments31['quality'] = 80;
$renderChildrenClosure32 = function() {return NULL;};
$viewHelper33 = $self->getViewHelper('$viewHelper33', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper33->setArguments($arguments31);
$viewHelper33->setRenderingContext($renderingContext);
$viewHelper33->setRenderChildrenClosure($renderChildrenClosure32);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output30 .= $viewHelper33->initializeArgumentsAndRender();

$output30 .= '
					';
return $output30;
};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure29, $renderingContext);

$output14 .= '

				</a>

                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments34 = array();
// Rendering Boolean node
$arguments34['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.item.showTitle', $renderingContext));
$arguments34['then'] = NULL;
$arguments34['else'] = NULL;
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output36 = '';

$output36 .= '<div class="titleBox">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments37 = array();
$arguments37['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'title', $renderingContext);
$arguments37['keepQuotes'] = false;
$arguments37['encoding'] = NULL;
$arguments37['doubleEncode'] = true;
$renderChildrenClosure38 = function() {return NULL;};
$value39 = ($arguments37['value'] !== NULL ? $arguments37['value'] : $renderChildrenClosure38());

$output36 .= (!is_string($value39) ? $value39 : htmlspecialchars($value39, ($arguments37['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments37['encoding'] !== NULL ? $arguments37['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments37['doubleEncode']));

$output36 .= '</div>';
return $output36;
};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output14 .= '

				<div class="yag-lightbox-meta">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments40 = array();
$arguments40['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.item.lightBoxMetaPartial', $renderingContext);
// Rendering Array
$array41 = array();
$array41['config'] = $currentVariableContainer->getOrNull('config');
$array41['image'] = $currentVariableContainer->getOrNull('image');
$arguments40['arguments'] = $array41;
$arguments40['section'] = NULL;
$arguments40['optional'] = false;
$renderChildrenClosure42 = function() {return NULL;};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments40, $renderChildrenClosure42, $renderingContext);

$output14 .= '
				</div>
			';
return $output14;
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments43 = array();
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output45 = '';

$output45 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments46 = array();
// Rendering Boolean node
// Rendering Array
$array47 = array();
$array47['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.linkTargetPluginMode', $renderingContext);
// Rendering Array
$array48 = array();
$array48['0'] = 'gallery';
$arguments46['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array47, $array48);
$arguments46['then'] = NULL;
$arguments46['else'] = NULL;
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output50 = '';

$output50 .= '
					';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper
$arguments51 = array();
$arguments51['gallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'album.gallery', $renderingContext);
$arguments51['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.linkTargetPageUid', $renderingContext);
$arguments51['additionalAttributes'] = NULL;
$arguments51['data'] = NULL;
$arguments51['galleryUid'] = NULL;
$arguments51['pageType'] = 0;
$arguments51['noCache'] = false;
$arguments51['noCacheHash'] = false;
$arguments51['section'] = '';
$arguments51['format'] = '';
$arguments51['class'] = NULL;
$arguments51['dir'] = NULL;
$arguments51['id'] = NULL;
$arguments51['lang'] = NULL;
$arguments51['style'] = NULL;
$arguments51['title'] = NULL;
$arguments51['accesskey'] = NULL;
$arguments51['tabindex'] = NULL;
$arguments51['onclick'] = NULL;
$arguments51['name'] = NULL;
$arguments51['rel'] = NULL;
$arguments51['rev'] = NULL;
$arguments51['target'] = NULL;
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output53 = '';

$output53 .= '
						';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments54 = array();
$arguments54['item'] = $currentVariableContainer->getOrNull('image');
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

$output53 .= $viewHelper56->initializeArgumentsAndRender();

$output53 .= '
					';
return $output53;
};
$viewHelper57 = $self->getViewHelper('$viewHelper57', $renderingContext, 'Tx_Yag_ViewHelpers_Link_GalleryViewHelper');
$viewHelper57->setArguments($arguments51);
$viewHelper57->setRenderingContext($renderingContext);
$viewHelper57->setRenderChildrenClosure($renderChildrenClosure52);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper

$output50 .= $viewHelper57->initializeArgumentsAndRender();

$output50 .= '
				';
return $output50;
};

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments46, $renderChildrenClosure49, $renderingContext);

$output45 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments58 = array();
// Rendering Boolean node
// Rendering Array
$array59 = array();
$array59['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.linkTargetPluginMode', $renderingContext);
// Rendering Array
$array60 = array();
$array60['0'] = 'album';
$arguments58['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array59, $array60);
$arguments58['then'] = NULL;
$arguments58['else'] = NULL;
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output62 = '';

$output62 .= '
					';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_AlbumViewHelper
$arguments63 = array();
$arguments63['album'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'album', $renderingContext);
$arguments63['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.linkTargetPageUid', $renderingContext);
$arguments63['additionalAttributes'] = NULL;
$arguments63['data'] = NULL;
$arguments63['albumUid'] = 0;
$arguments63['gallery'] = NULL;
$arguments63['pageType'] = 0;
$arguments63['noCache'] = false;
$arguments63['noCacheHash'] = false;
$arguments63['section'] = '';
$arguments63['format'] = '';
$arguments63['class'] = NULL;
$arguments63['dir'] = NULL;
$arguments63['id'] = NULL;
$arguments63['lang'] = NULL;
$arguments63['style'] = NULL;
$arguments63['title'] = NULL;
$arguments63['accesskey'] = NULL;
$arguments63['tabindex'] = NULL;
$arguments63['onclick'] = NULL;
$arguments63['name'] = NULL;
$arguments63['rel'] = NULL;
$arguments63['rev'] = NULL;
$arguments63['target'] = NULL;
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output65 = '';

$output65 .= '
						';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments66 = array();
$arguments66['item'] = $currentVariableContainer->getOrNull('image');
$arguments66['resolutionName'] = 'thumb';
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['class'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$arguments66['alt'] = NULL;
$arguments66['centerVertical'] = NULL;
$arguments66['width'] = NULL;
$arguments66['height'] = NULL;
$arguments66['quality'] = 80;
$renderChildrenClosure67 = function() {return NULL;};
$viewHelper68 = $self->getViewHelper('$viewHelper68', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper68->setArguments($arguments66);
$viewHelper68->setRenderingContext($renderingContext);
$viewHelper68->setRenderChildrenClosure($renderChildrenClosure67);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output65 .= $viewHelper68->initializeArgumentsAndRender();

$output65 .= '
					';
return $output65;
};
$viewHelper69 = $self->getViewHelper('$viewHelper69', $renderingContext, 'Tx_Yag_ViewHelpers_Link_AlbumViewHelper');
$viewHelper69->setArguments($arguments63);
$viewHelper69->setRenderingContext($renderingContext);
$viewHelper69->setRenderChildrenClosure($renderChildrenClosure64);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_AlbumViewHelper

$output62 .= $viewHelper69->initializeArgumentsAndRender();

$output62 .= '
				';
return $output62;
};

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments58, $renderChildrenClosure61, $renderingContext);

$output45 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments70 = array();
// Rendering Boolean node
// Rendering Array
$array71 = array();
$array71['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.linkTargetPluginMode', $renderingContext);
// Rendering Array
$array72 = array();
$array72['0'] = 'image';
$arguments70['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array71, $array72);
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output74 = '';

$output74 .= '
					';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_ImageViewHelper
$arguments75 = array();
$arguments75['item'] = $currentVariableContainer->getOrNull('image');
$arguments75['additionalAttributes'] = NULL;
$arguments75['data'] = NULL;
$arguments75['itemUid'] = NULL;
$arguments75['pageUid'] = NULL;
$arguments75['pageType'] = 0;
$arguments75['class'] = NULL;
$arguments75['dir'] = NULL;
$arguments75['id'] = NULL;
$arguments75['lang'] = NULL;
$arguments75['style'] = NULL;
$arguments75['title'] = NULL;
$arguments75['accesskey'] = NULL;
$arguments75['tabindex'] = NULL;
$arguments75['onclick'] = NULL;
$arguments75['name'] = NULL;
$arguments75['rel'] = NULL;
$arguments75['rev'] = NULL;
$arguments75['target'] = NULL;
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output77 = '';

$output77 .= '
						';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments78 = array();
$arguments78['item'] = $currentVariableContainer->getOrNull('image');
$arguments78['resolutionName'] = 'thumb';
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['class'] = NULL;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$arguments78['alt'] = NULL;
$arguments78['centerVertical'] = NULL;
$arguments78['width'] = NULL;
$arguments78['height'] = NULL;
$arguments78['quality'] = 80;
$renderChildrenClosure79 = function() {return NULL;};
$viewHelper80 = $self->getViewHelper('$viewHelper80', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper80->setArguments($arguments78);
$viewHelper80->setRenderingContext($renderingContext);
$viewHelper80->setRenderChildrenClosure($renderChildrenClosure79);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output77 .= $viewHelper80->initializeArgumentsAndRender();

$output77 .= '
					';
return $output77;
};
$viewHelper81 = $self->getViewHelper('$viewHelper81', $renderingContext, 'Tx_Yag_ViewHelpers_Link_ImageViewHelper');
$viewHelper81->setArguments($arguments75);
$viewHelper81->setRenderingContext($renderingContext);
$viewHelper81->setRenderChildrenClosure($renderChildrenClosure76);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_ImageViewHelper

$output74 .= $viewHelper81->initializeArgumentsAndRender();

$output74 .= '
				';
return $output74;
};

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure73, $renderingContext);

$output45 .= '
			';
return $output45;
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output11 .= '
		';
return $output11;
};
$arguments7['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output82 = '';

$output82 .= '
				<a href="';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Resource_ImageViewHelper
$arguments83 = array();
$arguments83['item'] = $currentVariableContainer->getOrNull('image');
$arguments83['resolutionName'] = 'medium';
$arguments83['width'] = NULL;
$arguments83['height'] = NULL;
$arguments83['quality'] = NULL;
$arguments83['absolute'] = false;
$renderChildrenClosure84 = function() {return NULL;};
$viewHelper85 = $self->getViewHelper('$viewHelper85', $renderingContext, 'Tx_Yag_ViewHelpers_Resource_ImageViewHelper');
$viewHelper85->setArguments($arguments83);
$viewHelper85->setRenderingContext($renderingContext);
$viewHelper85->setRenderChildrenClosure($renderChildrenClosure84);
// End of ViewHelper Tx_Yag_ViewHelpers_Resource_ImageViewHelper

$output82 .= $viewHelper85->initializeArgumentsAndRender();

$output82 .= '"
					 class="yag-lightbox-link"
					 rel="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments86 = array();
$arguments86['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'contextIdentifier', $renderingContext);
$arguments86['keepQuotes'] = false;
$arguments86['encoding'] = NULL;
$arguments86['doubleEncode'] = true;
$renderChildrenClosure87 = function() {return NULL;};
$value88 = ($arguments86['value'] !== NULL ? $arguments86['value'] : $renderChildrenClosure87());

$output82 .= (!is_string($value88) ? $value88 : htmlspecialchars($value88, ($arguments86['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments86['encoding'] !== NULL ? $arguments86['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments86['doubleEncode']));

$output82 .= '"
					 title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments89 = array();
// Rendering Boolean node
$arguments89['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.item.showTitle', $renderingContext));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments90 = array();
$arguments90['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'title', $renderingContext);
$arguments90['keepQuotes'] = false;
$arguments90['encoding'] = NULL;
$arguments90['doubleEncode'] = true;
$renderChildrenClosure91 = function() {return NULL;};
$value92 = ($arguments90['value'] !== NULL ? $arguments90['value'] : $renderChildrenClosure91());
$arguments89['then'] = (!is_string($value92) ? $value92 : htmlspecialchars($value92, ($arguments90['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments90['encoding'] !== NULL ? $arguments90['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments90['doubleEncode']));
$arguments89['else'] = '';
$renderChildrenClosure93 = function() {return NULL;};

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments89, $renderChildrenClosure93, $renderingContext);

$output82 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments94 = array();
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array95['0'] = '';
// Rendering Array
$array96 = array();
$array96['0'] = $currentVariableContainer->getOrNull('hideThumb');
$arguments94['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array95, $array96);
$arguments94['then'] = NULL;
$arguments94['else'] = NULL;
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output98 = '';

$output98 .= '
						';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments99 = array();
$arguments99['item'] = $currentVariableContainer->getOrNull('image');
$arguments99['resolutionName'] = 'thumb';
$arguments99['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'title', $renderingContext);
$arguments99['additionalAttributes'] = NULL;
$arguments99['data'] = NULL;
$arguments99['class'] = NULL;
$arguments99['dir'] = NULL;
$arguments99['id'] = NULL;
$arguments99['lang'] = NULL;
$arguments99['style'] = NULL;
$arguments99['title'] = NULL;
$arguments99['accesskey'] = NULL;
$arguments99['tabindex'] = NULL;
$arguments99['onclick'] = NULL;
$arguments99['centerVertical'] = NULL;
$arguments99['width'] = NULL;
$arguments99['height'] = NULL;
$arguments99['quality'] = 80;
$renderChildrenClosure100 = function() {return NULL;};
$viewHelper101 = $self->getViewHelper('$viewHelper101', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper101->setArguments($arguments99);
$viewHelper101->setRenderingContext($renderingContext);
$viewHelper101->setRenderChildrenClosure($renderChildrenClosure100);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output98 .= $viewHelper101->initializeArgumentsAndRender();

$output98 .= '
					';
return $output98;
};

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments94, $renderChildrenClosure97, $renderingContext);

$output82 .= '

				</a>

                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments102 = array();
// Rendering Boolean node
$arguments102['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.item.showTitle', $renderingContext));
$arguments102['then'] = NULL;
$arguments102['else'] = NULL;
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output104 = '';

$output104 .= '<div class="titleBox">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments105 = array();
$arguments105['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'title', $renderingContext);
$arguments105['keepQuotes'] = false;
$arguments105['encoding'] = NULL;
$arguments105['doubleEncode'] = true;
$renderChildrenClosure106 = function() {return NULL;};
$value107 = ($arguments105['value'] !== NULL ? $arguments105['value'] : $renderChildrenClosure106());

$output104 .= (!is_string($value107) ? $value107 : htmlspecialchars($value107, ($arguments105['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments105['encoding'] !== NULL ? $arguments105['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments105['doubleEncode']));

$output104 .= '</div>';
return $output104;
};

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output82 .= '

				<div class="yag-lightbox-meta">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments108 = array();
$arguments108['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.item.lightBoxMetaPartial', $renderingContext);
// Rendering Array
$array109 = array();
$array109['config'] = $currentVariableContainer->getOrNull('config');
$array109['image'] = $currentVariableContainer->getOrNull('image');
$arguments108['arguments'] = $array109;
$arguments108['section'] = NULL;
$arguments108['optional'] = false;
$renderChildrenClosure110 = function() {return NULL;};

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments108, $renderChildrenClosure110, $renderingContext);

$output82 .= '
				</div>
			';
return $output82;
};
$arguments7['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output111 = '';

$output111 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments112 = array();
// Rendering Boolean node
// Rendering Array
$array113 = array();
$array113['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.linkTargetPluginMode', $renderingContext);
// Rendering Array
$array114 = array();
$array114['0'] = 'gallery';
$arguments112['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array113, $array114);
$arguments112['then'] = NULL;
$arguments112['else'] = NULL;
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output116 = '';

$output116 .= '
					';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper
$arguments117 = array();
$arguments117['gallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'album.gallery', $renderingContext);
$arguments117['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.linkTargetPageUid', $renderingContext);
$arguments117['additionalAttributes'] = NULL;
$arguments117['data'] = NULL;
$arguments117['galleryUid'] = NULL;
$arguments117['pageType'] = 0;
$arguments117['noCache'] = false;
$arguments117['noCacheHash'] = false;
$arguments117['section'] = '';
$arguments117['format'] = '';
$arguments117['class'] = NULL;
$arguments117['dir'] = NULL;
$arguments117['id'] = NULL;
$arguments117['lang'] = NULL;
$arguments117['style'] = NULL;
$arguments117['title'] = NULL;
$arguments117['accesskey'] = NULL;
$arguments117['tabindex'] = NULL;
$arguments117['onclick'] = NULL;
$arguments117['name'] = NULL;
$arguments117['rel'] = NULL;
$arguments117['rev'] = NULL;
$arguments117['target'] = NULL;
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output119 = '';

$output119 .= '
						';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments120 = array();
$arguments120['item'] = $currentVariableContainer->getOrNull('image');
$arguments120['resolutionName'] = 'thumb';
$arguments120['additionalAttributes'] = NULL;
$arguments120['data'] = NULL;
$arguments120['class'] = NULL;
$arguments120['dir'] = NULL;
$arguments120['id'] = NULL;
$arguments120['lang'] = NULL;
$arguments120['style'] = NULL;
$arguments120['title'] = NULL;
$arguments120['accesskey'] = NULL;
$arguments120['tabindex'] = NULL;
$arguments120['onclick'] = NULL;
$arguments120['alt'] = NULL;
$arguments120['centerVertical'] = NULL;
$arguments120['width'] = NULL;
$arguments120['height'] = NULL;
$arguments120['quality'] = 80;
$renderChildrenClosure121 = function() {return NULL;};
$viewHelper122 = $self->getViewHelper('$viewHelper122', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper122->setArguments($arguments120);
$viewHelper122->setRenderingContext($renderingContext);
$viewHelper122->setRenderChildrenClosure($renderChildrenClosure121);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output119 .= $viewHelper122->initializeArgumentsAndRender();

$output119 .= '
					';
return $output119;
};
$viewHelper123 = $self->getViewHelper('$viewHelper123', $renderingContext, 'Tx_Yag_ViewHelpers_Link_GalleryViewHelper');
$viewHelper123->setArguments($arguments117);
$viewHelper123->setRenderingContext($renderingContext);
$viewHelper123->setRenderChildrenClosure($renderChildrenClosure118);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_GalleryViewHelper

$output116 .= $viewHelper123->initializeArgumentsAndRender();

$output116 .= '
				';
return $output116;
};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments112, $renderChildrenClosure115, $renderingContext);

$output111 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments124 = array();
// Rendering Boolean node
// Rendering Array
$array125 = array();
$array125['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.linkTargetPluginMode', $renderingContext);
// Rendering Array
$array126 = array();
$array126['0'] = 'album';
$arguments124['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array125, $array126);
$arguments124['then'] = NULL;
$arguments124['else'] = NULL;
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output128 = '';

$output128 .= '
					';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_AlbumViewHelper
$arguments129 = array();
$arguments129['album'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'album', $renderingContext);
$arguments129['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.linkTargetPageUid', $renderingContext);
$arguments129['additionalAttributes'] = NULL;
$arguments129['data'] = NULL;
$arguments129['albumUid'] = 0;
$arguments129['gallery'] = NULL;
$arguments129['pageType'] = 0;
$arguments129['noCache'] = false;
$arguments129['noCacheHash'] = false;
$arguments129['section'] = '';
$arguments129['format'] = '';
$arguments129['class'] = NULL;
$arguments129['dir'] = NULL;
$arguments129['id'] = NULL;
$arguments129['lang'] = NULL;
$arguments129['style'] = NULL;
$arguments129['title'] = NULL;
$arguments129['accesskey'] = NULL;
$arguments129['tabindex'] = NULL;
$arguments129['onclick'] = NULL;
$arguments129['name'] = NULL;
$arguments129['rel'] = NULL;
$arguments129['rev'] = NULL;
$arguments129['target'] = NULL;
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output131 = '';

$output131 .= '
						';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments132 = array();
$arguments132['item'] = $currentVariableContainer->getOrNull('image');
$arguments132['resolutionName'] = 'thumb';
$arguments132['additionalAttributes'] = NULL;
$arguments132['data'] = NULL;
$arguments132['class'] = NULL;
$arguments132['dir'] = NULL;
$arguments132['id'] = NULL;
$arguments132['lang'] = NULL;
$arguments132['style'] = NULL;
$arguments132['title'] = NULL;
$arguments132['accesskey'] = NULL;
$arguments132['tabindex'] = NULL;
$arguments132['onclick'] = NULL;
$arguments132['alt'] = NULL;
$arguments132['centerVertical'] = NULL;
$arguments132['width'] = NULL;
$arguments132['height'] = NULL;
$arguments132['quality'] = 80;
$renderChildrenClosure133 = function() {return NULL;};
$viewHelper134 = $self->getViewHelper('$viewHelper134', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper134->setArguments($arguments132);
$viewHelper134->setRenderingContext($renderingContext);
$viewHelper134->setRenderChildrenClosure($renderChildrenClosure133);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output131 .= $viewHelper134->initializeArgumentsAndRender();

$output131 .= '
					';
return $output131;
};
$viewHelper135 = $self->getViewHelper('$viewHelper135', $renderingContext, 'Tx_Yag_ViewHelpers_Link_AlbumViewHelper');
$viewHelper135->setArguments($arguments129);
$viewHelper135->setRenderingContext($renderingContext);
$viewHelper135->setRenderChildrenClosure($renderChildrenClosure130);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_AlbumViewHelper

$output128 .= $viewHelper135->initializeArgumentsAndRender();

$output128 .= '
				';
return $output128;
};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments124, $renderChildrenClosure127, $renderingContext);

$output111 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments136 = array();
// Rendering Boolean node
// Rendering Array
$array137 = array();
$array137['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.linkTargetPluginMode', $renderingContext);
// Rendering Array
$array138 = array();
$array138['0'] = 'image';
$arguments136['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array137, $array138);
$arguments136['then'] = NULL;
$arguments136['else'] = NULL;
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output140 = '';

$output140 .= '
					';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_ImageViewHelper
$arguments141 = array();
$arguments141['item'] = $currentVariableContainer->getOrNull('image');
$arguments141['additionalAttributes'] = NULL;
$arguments141['data'] = NULL;
$arguments141['itemUid'] = NULL;
$arguments141['pageUid'] = NULL;
$arguments141['pageType'] = 0;
$arguments141['class'] = NULL;
$arguments141['dir'] = NULL;
$arguments141['id'] = NULL;
$arguments141['lang'] = NULL;
$arguments141['style'] = NULL;
$arguments141['title'] = NULL;
$arguments141['accesskey'] = NULL;
$arguments141['tabindex'] = NULL;
$arguments141['onclick'] = NULL;
$arguments141['name'] = NULL;
$arguments141['rel'] = NULL;
$arguments141['rev'] = NULL;
$arguments141['target'] = NULL;
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output143 = '';

$output143 .= '
						';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments144 = array();
$arguments144['item'] = $currentVariableContainer->getOrNull('image');
$arguments144['resolutionName'] = 'thumb';
$arguments144['additionalAttributes'] = NULL;
$arguments144['data'] = NULL;
$arguments144['class'] = NULL;
$arguments144['dir'] = NULL;
$arguments144['id'] = NULL;
$arguments144['lang'] = NULL;
$arguments144['style'] = NULL;
$arguments144['title'] = NULL;
$arguments144['accesskey'] = NULL;
$arguments144['tabindex'] = NULL;
$arguments144['onclick'] = NULL;
$arguments144['alt'] = NULL;
$arguments144['centerVertical'] = NULL;
$arguments144['width'] = NULL;
$arguments144['height'] = NULL;
$arguments144['quality'] = 80;
$renderChildrenClosure145 = function() {return NULL;};
$viewHelper146 = $self->getViewHelper('$viewHelper146', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper146->setArguments($arguments144);
$viewHelper146->setRenderingContext($renderingContext);
$viewHelper146->setRenderChildrenClosure($renderChildrenClosure145);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output143 .= $viewHelper146->initializeArgumentsAndRender();

$output143 .= '
					';
return $output143;
};
$viewHelper147 = $self->getViewHelper('$viewHelper147', $renderingContext, 'Tx_Yag_ViewHelpers_Link_ImageViewHelper');
$viewHelper147->setArguments($arguments141);
$viewHelper147->setRenderingContext($renderingContext);
$viewHelper147->setRenderChildrenClosure($renderChildrenClosure142);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_ImageViewHelper

$output140 .= $viewHelper147->initializeArgumentsAndRender();

$output140 .= '
				';
return $output140;
};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments136, $renderChildrenClosure139, $renderingContext);

$output111 .= '
			';
return $output111;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure10, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments148 = array();
// Rendering Boolean node
$arguments148['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.itemList.showTitle', $renderingContext));
$arguments148['then'] = NULL;
$arguments148['else'] = NULL;
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output150 = '';

$output150 .= '
				<div class="tx-yag-thumb-caption">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments151 = array();
$arguments151['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'title', $renderingContext);
$arguments151['keepQuotes'] = false;
$arguments151['encoding'] = NULL;
$arguments151['doubleEncode'] = true;
$renderChildrenClosure152 = function() {return NULL;};
$value153 = ($arguments151['value'] !== NULL ? $arguments151['value'] : $renderChildrenClosure152());

$output150 .= (!is_string($value153) ? $value153 : htmlspecialchars($value153, ($arguments151['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments151['encoding'] !== NULL ? $arguments151['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments151['doubleEncode']));

$output150 .= '</div>
		';
return $output150;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output0 .= '
	</div>
</li>
';


return $output0;
}


}
#1465043428    45857     