<?php
class FluidCache_News_News_partial_List_Item_0db78f144a664ffd1dadc0e23ba73e471b515f60 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<!--
	=====================
		Partials/List/Item.html
-->
<div class="article articletype-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'type', $renderingContext);
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() {return NULL;};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1['encoding'] !== NULL ? $arguments1['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'istopnews', $renderingContext));
$arguments4['then'] = ' topnews';
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '" itemscope="itemscope" itemtype="http://schema.org/Article">
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper
$arguments6 = array();
$arguments6['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$renderChildrenClosure7 = function() {return NULL;};
$viewHelper8 = $self->getViewHelper('$viewHelper8', $renderingContext, 'GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper');
$viewHelper8->setArguments($arguments6);
$viewHelper8->setRenderingContext($renderingContext);
$viewHelper8->setRenderChildrenClosure($renderChildrenClosure7);
// End of ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper

$output0 .= $viewHelper8->initializeArgumentsAndRender();

$output0 .= '
	<!-- header -->
	<div class="header">
		<h3>
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments9 = array();
$arguments9['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments9['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments9['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments9['additionalAttributes'] = NULL;
$arguments9['data'] = NULL;
$arguments9['uriOnly'] = false;
$arguments9['configuration'] = array (
);
$arguments9['content'] = '';
$arguments9['class'] = NULL;
$arguments9['dir'] = NULL;
$arguments9['id'] = NULL;
$arguments9['lang'] = NULL;
$arguments9['style'] = NULL;
$arguments9['accesskey'] = NULL;
$arguments9['tabindex'] = NULL;
$arguments9['onclick'] = NULL;
$arguments9['section'] = NULL;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
				<span itemprop="headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments12 = array();
$arguments12['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments12['keepQuotes'] = false;
$arguments12['encoding'] = NULL;
$arguments12['doubleEncode'] = true;
$renderChildrenClosure13 = function() {return NULL;};
$value14 = ($arguments12['value'] !== NULL ? $arguments12['value'] : $renderChildrenClosure13());

$output11 .= (!is_string($value14) ? $value14 : htmlspecialchars($value14, ($arguments12['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments12['encoding'] !== NULL ? $arguments12['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments12['doubleEncode']));

$output11 .= '</span>
			';
return $output11;
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper15->setArguments($arguments9);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure10);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output0 .= $viewHelper15->initializeArgumentsAndRender();

$output0 .= '
		</h3>
	</div>

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments16 = array();
// Rendering Boolean node
$arguments16['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falMedia', $renderingContext));
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output18 = '';

$output18 .= '
		<!-- fal media preview element -->
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments19 = array();
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output21 = '';

$output21 .= '
			<div class="news-img-wrap">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments22 = array();
// Rendering Boolean node
$arguments22['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falMediaPreviews', $renderingContext));
$arguments22['then'] = NULL;
$arguments22['else'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output24 = '';

$output24 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments25 = array();
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output27 = '';

$output27 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments28 = array();
$arguments28['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments28['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments28['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['uriOnly'] = false;
$arguments28['configuration'] = array (
);
$arguments28['content'] = '';
$arguments28['class'] = NULL;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['section'] = NULL;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output30 = '';

$output30 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments31 = array();
// Rendering Array
$array32 = array();
$array32['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falMediaPreviews.0', $renderingContext);
$arguments31['map'] = $array32;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output34 = '';

$output34 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments35 = array();
// Rendering Boolean node
$arguments35['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 2);
$arguments35['then'] = NULL;
$arguments35['else'] = NULL;
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output37 = '';

$output37 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments38 = array();
$arguments38['image'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments38['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.title', $renderingContext);
$arguments38['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.alternative', $renderingContext);
$arguments38['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments38['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments38['additionalAttributes'] = NULL;
$arguments38['data'] = NULL;
$arguments38['src'] = NULL;
$arguments38['width'] = NULL;
$arguments38['height'] = NULL;
$arguments38['minWidth'] = NULL;
$arguments38['minHeight'] = NULL;
$arguments38['treatIdAsReference'] = false;
$arguments38['crop'] = NULL;
$arguments38['absolute'] = false;
$arguments38['class'] = NULL;
$arguments38['dir'] = NULL;
$arguments38['id'] = NULL;
$arguments38['lang'] = NULL;
$arguments38['style'] = NULL;
$arguments38['accesskey'] = NULL;
$arguments38['tabindex'] = NULL;
$arguments38['onclick'] = NULL;
$arguments38['ismap'] = NULL;
$arguments38['longdesc'] = NULL;
$arguments38['usemap'] = NULL;
$renderChildrenClosure39 = function() {return NULL;};
$viewHelper40 = $self->getViewHelper('$viewHelper40', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper40->setArguments($arguments38);
$viewHelper40->setRenderingContext($renderingContext);
$viewHelper40->setRenderChildrenClosure($renderChildrenClosure39);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output37 .= $viewHelper40->initializeArgumentsAndRender();

$output37 .= '
								';
return $output37;
};

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments41 = array();
// Rendering Boolean node
$arguments41['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 4);
$arguments41['then'] = NULL;
$arguments41['else'] = NULL;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output43 = '';

$output43 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments44 = array();
$arguments44['partial'] = 'Detail/FalMediaVideo';
// Rendering Array
$array45 = array();
$array45['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments44['arguments'] = $array45;
$arguments44['section'] = NULL;
$arguments44['optional'] = false;
$renderChildrenClosure46 = function() {return NULL;};

$output43 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments44, $renderChildrenClosure46, $renderingContext);

$output43 .= '
								';
return $output43;
};

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output34 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments47 = array();
// Rendering Boolean node
$arguments47['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 5);
$arguments47['then'] = NULL;
$arguments47['else'] = NULL;
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output49 = '';

$output49 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments50 = array();
$arguments50['image'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments50['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.title', $renderingContext);
$arguments50['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.alternative', $renderingContext);
$arguments50['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments50['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments50['additionalAttributes'] = NULL;
$arguments50['data'] = NULL;
$arguments50['src'] = NULL;
$arguments50['width'] = NULL;
$arguments50['height'] = NULL;
$arguments50['minWidth'] = NULL;
$arguments50['minHeight'] = NULL;
$arguments50['treatIdAsReference'] = false;
$arguments50['crop'] = NULL;
$arguments50['absolute'] = false;
$arguments50['class'] = NULL;
$arguments50['dir'] = NULL;
$arguments50['id'] = NULL;
$arguments50['lang'] = NULL;
$arguments50['style'] = NULL;
$arguments50['accesskey'] = NULL;
$arguments50['tabindex'] = NULL;
$arguments50['onclick'] = NULL;
$arguments50['ismap'] = NULL;
$arguments50['longdesc'] = NULL;
$arguments50['usemap'] = NULL;
$renderChildrenClosure51 = function() {return NULL;};
$viewHelper52 = $self->getViewHelper('$viewHelper52', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper52->setArguments($arguments50);
$viewHelper52->setRenderingContext($renderingContext);
$viewHelper52->setRenderChildrenClosure($renderChildrenClosure51);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output49 .= $viewHelper52->initializeArgumentsAndRender();

$output49 .= '
								';
return $output49;
};

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output34 .= '
							';
return $output34;
};

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments31, $renderChildrenClosure33, $renderingContext);

$output30 .= '
						';
return $output30;
};
$viewHelper53 = $self->getViewHelper('$viewHelper53', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper53->setArguments($arguments28);
$viewHelper53->setRenderingContext($renderingContext);
$viewHelper53->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output27 .= $viewHelper53->initializeArgumentsAndRender();

$output27 .= '
					';
return $output27;
};

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments54 = array();
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output56 = '';

$output56 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments57 = array();
// Rendering Boolean node
$arguments57['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments57['then'] = NULL;
$arguments57['else'] = NULL;
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output59 = '';

$output59 .= '
							<span class="no-media-element">
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments60 = array();
$arguments60['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments60['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments60['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments60['additionalAttributes'] = NULL;
$arguments60['data'] = NULL;
$arguments60['uriOnly'] = false;
$arguments60['configuration'] = array (
);
$arguments60['content'] = '';
$arguments60['class'] = NULL;
$arguments60['dir'] = NULL;
$arguments60['id'] = NULL;
$arguments60['lang'] = NULL;
$arguments60['style'] = NULL;
$arguments60['accesskey'] = NULL;
$arguments60['tabindex'] = NULL;
$arguments60['onclick'] = NULL;
$arguments60['section'] = NULL;
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output62 = '';

$output62 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments63 = array();
$arguments63['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments63['title'] = '';
$arguments63['alt'] = '';
$arguments63['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments63['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments63['additionalAttributes'] = NULL;
$arguments63['data'] = NULL;
$arguments63['width'] = NULL;
$arguments63['height'] = NULL;
$arguments63['minWidth'] = NULL;
$arguments63['minHeight'] = NULL;
$arguments63['treatIdAsReference'] = false;
$arguments63['image'] = NULL;
$arguments63['crop'] = NULL;
$arguments63['absolute'] = false;
$arguments63['class'] = NULL;
$arguments63['dir'] = NULL;
$arguments63['id'] = NULL;
$arguments63['lang'] = NULL;
$arguments63['style'] = NULL;
$arguments63['accesskey'] = NULL;
$arguments63['tabindex'] = NULL;
$arguments63['onclick'] = NULL;
$arguments63['ismap'] = NULL;
$arguments63['longdesc'] = NULL;
$arguments63['usemap'] = NULL;
$renderChildrenClosure64 = function() {return NULL;};
$viewHelper65 = $self->getViewHelper('$viewHelper65', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper65->setArguments($arguments63);
$viewHelper65->setRenderingContext($renderingContext);
$viewHelper65->setRenderChildrenClosure($renderChildrenClosure64);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output62 .= $viewHelper65->initializeArgumentsAndRender();

$output62 .= '
								';
return $output62;
};
$viewHelper66 = $self->getViewHelper('$viewHelper66', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper66->setArguments($arguments60);
$viewHelper66->setRenderingContext($renderingContext);
$viewHelper66->setRenderChildrenClosure($renderChildrenClosure61);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output59 .= $viewHelper66->initializeArgumentsAndRender();

$output59 .= '
							</span>
						';
return $output59;
};

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
					';
return $output56;
};

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output24 .= '
				';
return $output24;
};
$arguments22['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output67 = '';

$output67 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments68 = array();
$arguments68['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments68['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments68['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments68['additionalAttributes'] = NULL;
$arguments68['data'] = NULL;
$arguments68['uriOnly'] = false;
$arguments68['configuration'] = array (
);
$arguments68['content'] = '';
$arguments68['class'] = NULL;
$arguments68['dir'] = NULL;
$arguments68['id'] = NULL;
$arguments68['lang'] = NULL;
$arguments68['style'] = NULL;
$arguments68['accesskey'] = NULL;
$arguments68['tabindex'] = NULL;
$arguments68['onclick'] = NULL;
$arguments68['section'] = NULL;
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output70 = '';

$output70 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments71 = array();
// Rendering Array
$array72 = array();
$array72['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falMediaPreviews.0', $renderingContext);
$arguments71['map'] = $array72;
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output74 = '';

$output74 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments75 = array();
// Rendering Boolean node
$arguments75['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 2);
$arguments75['then'] = NULL;
$arguments75['else'] = NULL;
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output77 = '';

$output77 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments78 = array();
$arguments78['image'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments78['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.title', $renderingContext);
$arguments78['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.alternative', $renderingContext);
$arguments78['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments78['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['src'] = NULL;
$arguments78['width'] = NULL;
$arguments78['height'] = NULL;
$arguments78['minWidth'] = NULL;
$arguments78['minHeight'] = NULL;
$arguments78['treatIdAsReference'] = false;
$arguments78['crop'] = NULL;
$arguments78['absolute'] = false;
$arguments78['class'] = NULL;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$arguments78['ismap'] = NULL;
$arguments78['longdesc'] = NULL;
$arguments78['usemap'] = NULL;
$renderChildrenClosure79 = function() {return NULL;};
$viewHelper80 = $self->getViewHelper('$viewHelper80', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper80->setArguments($arguments78);
$viewHelper80->setRenderingContext($renderingContext);
$viewHelper80->setRenderChildrenClosure($renderChildrenClosure79);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output77 .= $viewHelper80->initializeArgumentsAndRender();

$output77 .= '
								';
return $output77;
};

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments81 = array();
// Rendering Boolean node
$arguments81['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 4);
$arguments81['then'] = NULL;
$arguments81['else'] = NULL;
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output83 = '';

$output83 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments84 = array();
$arguments84['partial'] = 'Detail/FalMediaVideo';
// Rendering Array
$array85 = array();
$array85['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments84['arguments'] = $array85;
$arguments84['section'] = NULL;
$arguments84['optional'] = false;
$renderChildrenClosure86 = function() {return NULL;};

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments84, $renderChildrenClosure86, $renderingContext);

$output83 .= '
								';
return $output83;
};

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output74 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments87 = array();
// Rendering Boolean node
$arguments87['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 5);
$arguments87['then'] = NULL;
$arguments87['else'] = NULL;
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output89 = '';

$output89 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments90 = array();
$arguments90['image'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments90['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.title', $renderingContext);
$arguments90['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.alternative', $renderingContext);
$arguments90['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments90['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments90['additionalAttributes'] = NULL;
$arguments90['data'] = NULL;
$arguments90['src'] = NULL;
$arguments90['width'] = NULL;
$arguments90['height'] = NULL;
$arguments90['minWidth'] = NULL;
$arguments90['minHeight'] = NULL;
$arguments90['treatIdAsReference'] = false;
$arguments90['crop'] = NULL;
$arguments90['absolute'] = false;
$arguments90['class'] = NULL;
$arguments90['dir'] = NULL;
$arguments90['id'] = NULL;
$arguments90['lang'] = NULL;
$arguments90['style'] = NULL;
$arguments90['accesskey'] = NULL;
$arguments90['tabindex'] = NULL;
$arguments90['onclick'] = NULL;
$arguments90['ismap'] = NULL;
$arguments90['longdesc'] = NULL;
$arguments90['usemap'] = NULL;
$renderChildrenClosure91 = function() {return NULL;};
$viewHelper92 = $self->getViewHelper('$viewHelper92', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper92->setArguments($arguments90);
$viewHelper92->setRenderingContext($renderingContext);
$viewHelper92->setRenderChildrenClosure($renderChildrenClosure91);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output89 .= $viewHelper92->initializeArgumentsAndRender();

$output89 .= '
								';
return $output89;
};

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output74 .= '
							';
return $output74;
};

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments71, $renderChildrenClosure73, $renderingContext);

$output70 .= '
						';
return $output70;
};
$viewHelper93 = $self->getViewHelper('$viewHelper93', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper93->setArguments($arguments68);
$viewHelper93->setRenderingContext($renderingContext);
$viewHelper93->setRenderChildrenClosure($renderChildrenClosure69);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output67 .= $viewHelper93->initializeArgumentsAndRender();

$output67 .= '
					';
return $output67;
};
$arguments22['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output94 = '';

$output94 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments95 = array();
// Rendering Boolean node
$arguments95['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output97 = '';

$output97 .= '
							<span class="no-media-element">
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments98 = array();
$arguments98['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments98['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments98['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments98['additionalAttributes'] = NULL;
$arguments98['data'] = NULL;
$arguments98['uriOnly'] = false;
$arguments98['configuration'] = array (
);
$arguments98['content'] = '';
$arguments98['class'] = NULL;
$arguments98['dir'] = NULL;
$arguments98['id'] = NULL;
$arguments98['lang'] = NULL;
$arguments98['style'] = NULL;
$arguments98['accesskey'] = NULL;
$arguments98['tabindex'] = NULL;
$arguments98['onclick'] = NULL;
$arguments98['section'] = NULL;
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output100 = '';

$output100 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments101 = array();
$arguments101['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments101['title'] = '';
$arguments101['alt'] = '';
$arguments101['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments101['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments101['additionalAttributes'] = NULL;
$arguments101['data'] = NULL;
$arguments101['width'] = NULL;
$arguments101['height'] = NULL;
$arguments101['minWidth'] = NULL;
$arguments101['minHeight'] = NULL;
$arguments101['treatIdAsReference'] = false;
$arguments101['image'] = NULL;
$arguments101['crop'] = NULL;
$arguments101['absolute'] = false;
$arguments101['class'] = NULL;
$arguments101['dir'] = NULL;
$arguments101['id'] = NULL;
$arguments101['lang'] = NULL;
$arguments101['style'] = NULL;
$arguments101['accesskey'] = NULL;
$arguments101['tabindex'] = NULL;
$arguments101['onclick'] = NULL;
$arguments101['ismap'] = NULL;
$arguments101['longdesc'] = NULL;
$arguments101['usemap'] = NULL;
$renderChildrenClosure102 = function() {return NULL;};
$viewHelper103 = $self->getViewHelper('$viewHelper103', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper103->setArguments($arguments101);
$viewHelper103->setRenderingContext($renderingContext);
$viewHelper103->setRenderChildrenClosure($renderChildrenClosure102);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output100 .= $viewHelper103->initializeArgumentsAndRender();

$output100 .= '
								';
return $output100;
};
$viewHelper104 = $self->getViewHelper('$viewHelper104', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper104->setArguments($arguments98);
$viewHelper104->setRenderingContext($renderingContext);
$viewHelper104->setRenderChildrenClosure($renderChildrenClosure99);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output97 .= $viewHelper104->initializeArgumentsAndRender();

$output97 .= '
							</span>
						';
return $output97;
};

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
					';
return $output94;
};

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '

			</div>
		';
return $output21;
};

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments105 = array();
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output107 = '';

$output107 .= '

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments108 = array();
// Rendering Boolean node
$arguments108['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'media', $renderingContext));
$arguments108['then'] = NULL;
$arguments108['else'] = NULL;
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output110 = '';

$output110 .= '
				<!-- media preview element -->
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments111 = array();
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output113 = '';

$output113 .= '
					<div class="news-img-wrap">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments114 = array();
// Rendering Boolean node
$arguments114['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews', $renderingContext));
$arguments114['then'] = NULL;
$arguments114['else'] = NULL;
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output116 = '';

$output116 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments117 = array();
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output119 = '';

$output119 .= '
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments120 = array();
$arguments120['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments120['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments120['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments120['additionalAttributes'] = NULL;
$arguments120['data'] = NULL;
$arguments120['uriOnly'] = false;
$arguments120['configuration'] = array (
);
$arguments120['content'] = '';
$arguments120['class'] = NULL;
$arguments120['dir'] = NULL;
$arguments120['id'] = NULL;
$arguments120['lang'] = NULL;
$arguments120['style'] = NULL;
$arguments120['accesskey'] = NULL;
$arguments120['tabindex'] = NULL;
$arguments120['onclick'] = NULL;
$arguments120['section'] = NULL;
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output122 = '';

$output122 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments123 = array();
// Rendering Array
$array124 = array();
$array124['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews.0', $renderingContext);
$arguments123['map'] = $array124;
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output126 = '';

$output126 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments127 = array();
// Rendering Boolean node
$arguments127['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 0);
$arguments127['then'] = NULL;
$arguments127['else'] = NULL;
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output129 = '';

$output129 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments130 = array();
$output131 = '';

$output131 .= 'uploads/tx_news/';

$output131 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'image', $renderingContext);
$arguments130['src'] = $output131;
$arguments130['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'title', $renderingContext);
$arguments130['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'alt', $renderingContext);
$arguments130['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments130['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments130['additionalAttributes'] = NULL;
$arguments130['data'] = NULL;
$arguments130['width'] = NULL;
$arguments130['height'] = NULL;
$arguments130['minWidth'] = NULL;
$arguments130['minHeight'] = NULL;
$arguments130['treatIdAsReference'] = false;
$arguments130['image'] = NULL;
$arguments130['crop'] = NULL;
$arguments130['absolute'] = false;
$arguments130['class'] = NULL;
$arguments130['dir'] = NULL;
$arguments130['id'] = NULL;
$arguments130['lang'] = NULL;
$arguments130['style'] = NULL;
$arguments130['accesskey'] = NULL;
$arguments130['tabindex'] = NULL;
$arguments130['onclick'] = NULL;
$arguments130['ismap'] = NULL;
$arguments130['longdesc'] = NULL;
$arguments130['usemap'] = NULL;
$renderChildrenClosure132 = function() {return NULL;};
$viewHelper133 = $self->getViewHelper('$viewHelper133', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper133->setArguments($arguments130);
$viewHelper133->setRenderingContext($renderingContext);
$viewHelper133->setRenderChildrenClosure($renderChildrenClosure132);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output129 .= $viewHelper133->initializeArgumentsAndRender();

$output129 .= '
										';
return $output129;
};

$output126 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments134 = array();
// Rendering Boolean node
$arguments134['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 1);
$arguments134['then'] = NULL;
$arguments134['else'] = NULL;
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output136 = '';

$output136 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments137 = array();
$arguments137['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array138 = array();
$array138['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments137['arguments'] = $array138;
$arguments137['section'] = NULL;
$arguments137['optional'] = false;
$renderChildrenClosure139 = function() {return NULL;};

$output136 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments137, $renderChildrenClosure139, $renderingContext);

$output136 .= '
										';
return $output136;
};

$output126 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output126 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments140 = array();
// Rendering Boolean node
$arguments140['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 2);
$arguments140['then'] = NULL;
$arguments140['else'] = NULL;
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output142 = '';

$output142 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments143 = array();
$arguments143['partial'] = 'Detail/MediaHtml';
// Rendering Array
$array144 = array();
$array144['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments143['arguments'] = $array144;
$arguments143['section'] = NULL;
$arguments143['optional'] = false;
$renderChildrenClosure145 = function() {return NULL;};

$output142 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments143, $renderChildrenClosure145, $renderingContext);

$output142 .= '
										';
return $output142;
};

$output126 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output126 .= '
									';
return $output126;
};

$output122 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments123, $renderChildrenClosure125, $renderingContext);

$output122 .= '
								';
return $output122;
};
$viewHelper146 = $self->getViewHelper('$viewHelper146', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper146->setArguments($arguments120);
$viewHelper146->setRenderingContext($renderingContext);
$viewHelper146->setRenderChildrenClosure($renderChildrenClosure121);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output119 .= $viewHelper146->initializeArgumentsAndRender();

$output119 .= '
							';
return $output119;
};

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output116 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments147 = array();
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output149 = '';

$output149 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments150 = array();
// Rendering Boolean node
$arguments150['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments150['then'] = NULL;
$arguments150['else'] = NULL;
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output152 = '';

$output152 .= '
									<span class="no-media-element">
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments153 = array();
$arguments153['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments153['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments153['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments153['additionalAttributes'] = NULL;
$arguments153['data'] = NULL;
$arguments153['uriOnly'] = false;
$arguments153['configuration'] = array (
);
$arguments153['content'] = '';
$arguments153['class'] = NULL;
$arguments153['dir'] = NULL;
$arguments153['id'] = NULL;
$arguments153['lang'] = NULL;
$arguments153['style'] = NULL;
$arguments153['accesskey'] = NULL;
$arguments153['tabindex'] = NULL;
$arguments153['onclick'] = NULL;
$arguments153['section'] = NULL;
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output155 = '';

$output155 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments156 = array();
$arguments156['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments156['title'] = '';
$arguments156['alt'] = '';
$arguments156['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments156['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments156['additionalAttributes'] = NULL;
$arguments156['data'] = NULL;
$arguments156['width'] = NULL;
$arguments156['height'] = NULL;
$arguments156['minWidth'] = NULL;
$arguments156['minHeight'] = NULL;
$arguments156['treatIdAsReference'] = false;
$arguments156['image'] = NULL;
$arguments156['crop'] = NULL;
$arguments156['absolute'] = false;
$arguments156['class'] = NULL;
$arguments156['dir'] = NULL;
$arguments156['id'] = NULL;
$arguments156['lang'] = NULL;
$arguments156['style'] = NULL;
$arguments156['accesskey'] = NULL;
$arguments156['tabindex'] = NULL;
$arguments156['onclick'] = NULL;
$arguments156['ismap'] = NULL;
$arguments156['longdesc'] = NULL;
$arguments156['usemap'] = NULL;
$renderChildrenClosure157 = function() {return NULL;};
$viewHelper158 = $self->getViewHelper('$viewHelper158', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper158->setArguments($arguments156);
$viewHelper158->setRenderingContext($renderingContext);
$viewHelper158->setRenderChildrenClosure($renderChildrenClosure157);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output155 .= $viewHelper158->initializeArgumentsAndRender();

$output155 .= '
										';
return $output155;
};
$viewHelper159 = $self->getViewHelper('$viewHelper159', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper159->setArguments($arguments153);
$viewHelper159->setRenderingContext($renderingContext);
$viewHelper159->setRenderChildrenClosure($renderChildrenClosure154);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output152 .= $viewHelper159->initializeArgumentsAndRender();

$output152 .= '
									</span>
								';
return $output152;
};

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
							';
return $output149;
};

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output116 .= '
						';
return $output116;
};
$arguments114['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output160 = '';

$output160 .= '
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments161 = array();
$arguments161['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments161['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments161['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments161['additionalAttributes'] = NULL;
$arguments161['data'] = NULL;
$arguments161['uriOnly'] = false;
$arguments161['configuration'] = array (
);
$arguments161['content'] = '';
$arguments161['class'] = NULL;
$arguments161['dir'] = NULL;
$arguments161['id'] = NULL;
$arguments161['lang'] = NULL;
$arguments161['style'] = NULL;
$arguments161['accesskey'] = NULL;
$arguments161['tabindex'] = NULL;
$arguments161['onclick'] = NULL;
$arguments161['section'] = NULL;
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output163 = '';

$output163 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments164 = array();
// Rendering Array
$array165 = array();
$array165['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews.0', $renderingContext);
$arguments164['map'] = $array165;
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output167 = '';

$output167 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments168 = array();
// Rendering Boolean node
$arguments168['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 0);
$arguments168['then'] = NULL;
$arguments168['else'] = NULL;
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output170 = '';

$output170 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments171 = array();
$output172 = '';

$output172 .= 'uploads/tx_news/';

$output172 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'image', $renderingContext);
$arguments171['src'] = $output172;
$arguments171['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'title', $renderingContext);
$arguments171['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'alt', $renderingContext);
$arguments171['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments171['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments171['additionalAttributes'] = NULL;
$arguments171['data'] = NULL;
$arguments171['width'] = NULL;
$arguments171['height'] = NULL;
$arguments171['minWidth'] = NULL;
$arguments171['minHeight'] = NULL;
$arguments171['treatIdAsReference'] = false;
$arguments171['image'] = NULL;
$arguments171['crop'] = NULL;
$arguments171['absolute'] = false;
$arguments171['class'] = NULL;
$arguments171['dir'] = NULL;
$arguments171['id'] = NULL;
$arguments171['lang'] = NULL;
$arguments171['style'] = NULL;
$arguments171['accesskey'] = NULL;
$arguments171['tabindex'] = NULL;
$arguments171['onclick'] = NULL;
$arguments171['ismap'] = NULL;
$arguments171['longdesc'] = NULL;
$arguments171['usemap'] = NULL;
$renderChildrenClosure173 = function() {return NULL;};
$viewHelper174 = $self->getViewHelper('$viewHelper174', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper174->setArguments($arguments171);
$viewHelper174->setRenderingContext($renderingContext);
$viewHelper174->setRenderChildrenClosure($renderChildrenClosure173);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output170 .= $viewHelper174->initializeArgumentsAndRender();

$output170 .= '
										';
return $output170;
};

$output167 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output167 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments175 = array();
// Rendering Boolean node
$arguments175['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 1);
$arguments175['then'] = NULL;
$arguments175['else'] = NULL;
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output177 = '';

$output177 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments178 = array();
$arguments178['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array179 = array();
$array179['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments178['arguments'] = $array179;
$arguments178['section'] = NULL;
$arguments178['optional'] = false;
$renderChildrenClosure180 = function() {return NULL;};

$output177 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments178, $renderChildrenClosure180, $renderingContext);

$output177 .= '
										';
return $output177;
};

$output167 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output167 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments181 = array();
// Rendering Boolean node
$arguments181['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 2);
$arguments181['then'] = NULL;
$arguments181['else'] = NULL;
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output183 = '';

$output183 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments184 = array();
$arguments184['partial'] = 'Detail/MediaHtml';
// Rendering Array
$array185 = array();
$array185['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments184['arguments'] = $array185;
$arguments184['section'] = NULL;
$arguments184['optional'] = false;
$renderChildrenClosure186 = function() {return NULL;};

$output183 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments184, $renderChildrenClosure186, $renderingContext);

$output183 .= '
										';
return $output183;
};

$output167 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output167 .= '
									';
return $output167;
};

$output163 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments164, $renderChildrenClosure166, $renderingContext);

$output163 .= '
								';
return $output163;
};
$viewHelper187 = $self->getViewHelper('$viewHelper187', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper187->setArguments($arguments161);
$viewHelper187->setRenderingContext($renderingContext);
$viewHelper187->setRenderChildrenClosure($renderChildrenClosure162);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output160 .= $viewHelper187->initializeArgumentsAndRender();

$output160 .= '
							';
return $output160;
};
$arguments114['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output188 = '';

$output188 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments189 = array();
// Rendering Boolean node
$arguments189['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments189['then'] = NULL;
$arguments189['else'] = NULL;
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output191 = '';

$output191 .= '
									<span class="no-media-element">
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments192 = array();
$arguments192['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments192['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments192['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments192['additionalAttributes'] = NULL;
$arguments192['data'] = NULL;
$arguments192['uriOnly'] = false;
$arguments192['configuration'] = array (
);
$arguments192['content'] = '';
$arguments192['class'] = NULL;
$arguments192['dir'] = NULL;
$arguments192['id'] = NULL;
$arguments192['lang'] = NULL;
$arguments192['style'] = NULL;
$arguments192['accesskey'] = NULL;
$arguments192['tabindex'] = NULL;
$arguments192['onclick'] = NULL;
$arguments192['section'] = NULL;
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output194 = '';

$output194 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments195 = array();
$arguments195['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments195['title'] = '';
$arguments195['alt'] = '';
$arguments195['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments195['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments195['additionalAttributes'] = NULL;
$arguments195['data'] = NULL;
$arguments195['width'] = NULL;
$arguments195['height'] = NULL;
$arguments195['minWidth'] = NULL;
$arguments195['minHeight'] = NULL;
$arguments195['treatIdAsReference'] = false;
$arguments195['image'] = NULL;
$arguments195['crop'] = NULL;
$arguments195['absolute'] = false;
$arguments195['class'] = NULL;
$arguments195['dir'] = NULL;
$arguments195['id'] = NULL;
$arguments195['lang'] = NULL;
$arguments195['style'] = NULL;
$arguments195['accesskey'] = NULL;
$arguments195['tabindex'] = NULL;
$arguments195['onclick'] = NULL;
$arguments195['ismap'] = NULL;
$arguments195['longdesc'] = NULL;
$arguments195['usemap'] = NULL;
$renderChildrenClosure196 = function() {return NULL;};
$viewHelper197 = $self->getViewHelper('$viewHelper197', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper197->setArguments($arguments195);
$viewHelper197->setRenderingContext($renderingContext);
$viewHelper197->setRenderChildrenClosure($renderChildrenClosure196);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output194 .= $viewHelper197->initializeArgumentsAndRender();

$output194 .= '
										';
return $output194;
};
$viewHelper198 = $self->getViewHelper('$viewHelper198', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper198->setArguments($arguments192);
$viewHelper198->setRenderingContext($renderingContext);
$viewHelper198->setRenderChildrenClosure($renderChildrenClosure193);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output191 .= $viewHelper198->initializeArgumentsAndRender();

$output191 .= '
									</span>
								';
return $output191;
};

$output188 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output188 .= '
							';
return $output188;
};

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output113 .= '

					</div>
				';
return $output113;
};

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output110 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments199 = array();
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output201 = '';

$output201 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments202 = array();
// Rendering Boolean node
$arguments202['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments202['then'] = NULL;
$arguments202['else'] = NULL;
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output204 = '';

$output204 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments205 = array();
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output207 = '';

$output207 .= '
							<div class="news-img-wrap">
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments208 = array();
$arguments208['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments208['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments208['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments208['additionalAttributes'] = NULL;
$arguments208['data'] = NULL;
$arguments208['uriOnly'] = false;
$arguments208['configuration'] = array (
);
$arguments208['content'] = '';
$arguments208['class'] = NULL;
$arguments208['dir'] = NULL;
$arguments208['id'] = NULL;
$arguments208['lang'] = NULL;
$arguments208['style'] = NULL;
$arguments208['accesskey'] = NULL;
$arguments208['tabindex'] = NULL;
$arguments208['onclick'] = NULL;
$arguments208['section'] = NULL;
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output210 = '';

$output210 .= '
									<span class="no-media-element">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments211 = array();
$arguments211['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments211['title'] = '';
$arguments211['alt'] = '';
$arguments211['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments211['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments211['additionalAttributes'] = NULL;
$arguments211['data'] = NULL;
$arguments211['width'] = NULL;
$arguments211['height'] = NULL;
$arguments211['minWidth'] = NULL;
$arguments211['minHeight'] = NULL;
$arguments211['treatIdAsReference'] = false;
$arguments211['image'] = NULL;
$arguments211['crop'] = NULL;
$arguments211['absolute'] = false;
$arguments211['class'] = NULL;
$arguments211['dir'] = NULL;
$arguments211['id'] = NULL;
$arguments211['lang'] = NULL;
$arguments211['style'] = NULL;
$arguments211['accesskey'] = NULL;
$arguments211['tabindex'] = NULL;
$arguments211['onclick'] = NULL;
$arguments211['ismap'] = NULL;
$arguments211['longdesc'] = NULL;
$arguments211['usemap'] = NULL;
$renderChildrenClosure212 = function() {return NULL;};
$viewHelper213 = $self->getViewHelper('$viewHelper213', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper213->setArguments($arguments211);
$viewHelper213->setRenderingContext($renderingContext);
$viewHelper213->setRenderChildrenClosure($renderChildrenClosure212);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output210 .= $viewHelper213->initializeArgumentsAndRender();

$output210 .= '
									</span>
								';
return $output210;
};
$viewHelper214 = $self->getViewHelper('$viewHelper214', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper214->setArguments($arguments208);
$viewHelper214->setRenderingContext($renderingContext);
$viewHelper214->setRenderChildrenClosure($renderChildrenClosure209);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output207 .= $viewHelper214->initializeArgumentsAndRender();

$output207 .= '
							</div>
						';
return $output207;
};

$output204 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output204 .= '
					';
return $output204;
};
$arguments202['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output215 = '';

$output215 .= '
							<div class="news-img-wrap">
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments216 = array();
$arguments216['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments216['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments216['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments216['additionalAttributes'] = NULL;
$arguments216['data'] = NULL;
$arguments216['uriOnly'] = false;
$arguments216['configuration'] = array (
);
$arguments216['content'] = '';
$arguments216['class'] = NULL;
$arguments216['dir'] = NULL;
$arguments216['id'] = NULL;
$arguments216['lang'] = NULL;
$arguments216['style'] = NULL;
$arguments216['accesskey'] = NULL;
$arguments216['tabindex'] = NULL;
$arguments216['onclick'] = NULL;
$arguments216['section'] = NULL;
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output218 = '';

$output218 .= '
									<span class="no-media-element">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments219 = array();
$arguments219['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments219['title'] = '';
$arguments219['alt'] = '';
$arguments219['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments219['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments219['additionalAttributes'] = NULL;
$arguments219['data'] = NULL;
$arguments219['width'] = NULL;
$arguments219['height'] = NULL;
$arguments219['minWidth'] = NULL;
$arguments219['minHeight'] = NULL;
$arguments219['treatIdAsReference'] = false;
$arguments219['image'] = NULL;
$arguments219['crop'] = NULL;
$arguments219['absolute'] = false;
$arguments219['class'] = NULL;
$arguments219['dir'] = NULL;
$arguments219['id'] = NULL;
$arguments219['lang'] = NULL;
$arguments219['style'] = NULL;
$arguments219['accesskey'] = NULL;
$arguments219['tabindex'] = NULL;
$arguments219['onclick'] = NULL;
$arguments219['ismap'] = NULL;
$arguments219['longdesc'] = NULL;
$arguments219['usemap'] = NULL;
$renderChildrenClosure220 = function() {return NULL;};
$viewHelper221 = $self->getViewHelper('$viewHelper221', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper221->setArguments($arguments219);
$viewHelper221->setRenderingContext($renderingContext);
$viewHelper221->setRenderChildrenClosure($renderChildrenClosure220);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output218 .= $viewHelper221->initializeArgumentsAndRender();

$output218 .= '
									</span>
								';
return $output218;
};
$viewHelper222 = $self->getViewHelper('$viewHelper222', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper222->setArguments($arguments216);
$viewHelper222->setRenderingContext($renderingContext);
$viewHelper222->setRenderChildrenClosure($renderChildrenClosure217);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output215 .= $viewHelper222->initializeArgumentsAndRender();

$output215 .= '
							</div>
						';
return $output215;
};

$output201 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output201 .= '
				';
return $output201;
};

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output110 .= '
			';
return $output110;
};
$arguments108['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output223 = '';

$output223 .= '
					<div class="news-img-wrap">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments224 = array();
// Rendering Boolean node
$arguments224['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews', $renderingContext));
$arguments224['then'] = NULL;
$arguments224['else'] = NULL;
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output226 = '';

$output226 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments227 = array();
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output229 = '';

$output229 .= '
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments230 = array();
$arguments230['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments230['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments230['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments230['additionalAttributes'] = NULL;
$arguments230['data'] = NULL;
$arguments230['uriOnly'] = false;
$arguments230['configuration'] = array (
);
$arguments230['content'] = '';
$arguments230['class'] = NULL;
$arguments230['dir'] = NULL;
$arguments230['id'] = NULL;
$arguments230['lang'] = NULL;
$arguments230['style'] = NULL;
$arguments230['accesskey'] = NULL;
$arguments230['tabindex'] = NULL;
$arguments230['onclick'] = NULL;
$arguments230['section'] = NULL;
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output232 = '';

$output232 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments233 = array();
// Rendering Array
$array234 = array();
$array234['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews.0', $renderingContext);
$arguments233['map'] = $array234;
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output236 = '';

$output236 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments237 = array();
// Rendering Boolean node
$arguments237['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 0);
$arguments237['then'] = NULL;
$arguments237['else'] = NULL;
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output239 = '';

$output239 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments240 = array();
$output241 = '';

$output241 .= 'uploads/tx_news/';

$output241 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'image', $renderingContext);
$arguments240['src'] = $output241;
$arguments240['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'title', $renderingContext);
$arguments240['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'alt', $renderingContext);
$arguments240['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments240['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments240['additionalAttributes'] = NULL;
$arguments240['data'] = NULL;
$arguments240['width'] = NULL;
$arguments240['height'] = NULL;
$arguments240['minWidth'] = NULL;
$arguments240['minHeight'] = NULL;
$arguments240['treatIdAsReference'] = false;
$arguments240['image'] = NULL;
$arguments240['crop'] = NULL;
$arguments240['absolute'] = false;
$arguments240['class'] = NULL;
$arguments240['dir'] = NULL;
$arguments240['id'] = NULL;
$arguments240['lang'] = NULL;
$arguments240['style'] = NULL;
$arguments240['accesskey'] = NULL;
$arguments240['tabindex'] = NULL;
$arguments240['onclick'] = NULL;
$arguments240['ismap'] = NULL;
$arguments240['longdesc'] = NULL;
$arguments240['usemap'] = NULL;
$renderChildrenClosure242 = function() {return NULL;};
$viewHelper243 = $self->getViewHelper('$viewHelper243', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper243->setArguments($arguments240);
$viewHelper243->setRenderingContext($renderingContext);
$viewHelper243->setRenderChildrenClosure($renderChildrenClosure242);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output239 .= $viewHelper243->initializeArgumentsAndRender();

$output239 .= '
										';
return $output239;
};

$output236 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output236 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments244 = array();
// Rendering Boolean node
$arguments244['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 1);
$arguments244['then'] = NULL;
$arguments244['else'] = NULL;
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output246 = '';

$output246 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments247 = array();
$arguments247['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array248 = array();
$array248['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments247['arguments'] = $array248;
$arguments247['section'] = NULL;
$arguments247['optional'] = false;
$renderChildrenClosure249 = function() {return NULL;};

$output246 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments247, $renderChildrenClosure249, $renderingContext);

$output246 .= '
										';
return $output246;
};

$output236 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output236 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments250 = array();
// Rendering Boolean node
$arguments250['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 2);
$arguments250['then'] = NULL;
$arguments250['else'] = NULL;
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output252 = '';

$output252 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments253 = array();
$arguments253['partial'] = 'Detail/MediaHtml';
// Rendering Array
$array254 = array();
$array254['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments253['arguments'] = $array254;
$arguments253['section'] = NULL;
$arguments253['optional'] = false;
$renderChildrenClosure255 = function() {return NULL;};

$output252 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments253, $renderChildrenClosure255, $renderingContext);

$output252 .= '
										';
return $output252;
};

$output236 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output236 .= '
									';
return $output236;
};

$output232 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments233, $renderChildrenClosure235, $renderingContext);

$output232 .= '
								';
return $output232;
};
$viewHelper256 = $self->getViewHelper('$viewHelper256', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper256->setArguments($arguments230);
$viewHelper256->setRenderingContext($renderingContext);
$viewHelper256->setRenderChildrenClosure($renderChildrenClosure231);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output229 .= $viewHelper256->initializeArgumentsAndRender();

$output229 .= '
							';
return $output229;
};

$output226 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output226 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments257 = array();
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output259 = '';

$output259 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments260 = array();
// Rendering Boolean node
$arguments260['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments260['then'] = NULL;
$arguments260['else'] = NULL;
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output262 = '';

$output262 .= '
									<span class="no-media-element">
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments263 = array();
$arguments263['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments263['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments263['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments263['additionalAttributes'] = NULL;
$arguments263['data'] = NULL;
$arguments263['uriOnly'] = false;
$arguments263['configuration'] = array (
);
$arguments263['content'] = '';
$arguments263['class'] = NULL;
$arguments263['dir'] = NULL;
$arguments263['id'] = NULL;
$arguments263['lang'] = NULL;
$arguments263['style'] = NULL;
$arguments263['accesskey'] = NULL;
$arguments263['tabindex'] = NULL;
$arguments263['onclick'] = NULL;
$arguments263['section'] = NULL;
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output265 = '';

$output265 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments266 = array();
$arguments266['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments266['title'] = '';
$arguments266['alt'] = '';
$arguments266['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments266['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments266['additionalAttributes'] = NULL;
$arguments266['data'] = NULL;
$arguments266['width'] = NULL;
$arguments266['height'] = NULL;
$arguments266['minWidth'] = NULL;
$arguments266['minHeight'] = NULL;
$arguments266['treatIdAsReference'] = false;
$arguments266['image'] = NULL;
$arguments266['crop'] = NULL;
$arguments266['absolute'] = false;
$arguments266['class'] = NULL;
$arguments266['dir'] = NULL;
$arguments266['id'] = NULL;
$arguments266['lang'] = NULL;
$arguments266['style'] = NULL;
$arguments266['accesskey'] = NULL;
$arguments266['tabindex'] = NULL;
$arguments266['onclick'] = NULL;
$arguments266['ismap'] = NULL;
$arguments266['longdesc'] = NULL;
$arguments266['usemap'] = NULL;
$renderChildrenClosure267 = function() {return NULL;};
$viewHelper268 = $self->getViewHelper('$viewHelper268', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper268->setArguments($arguments266);
$viewHelper268->setRenderingContext($renderingContext);
$viewHelper268->setRenderChildrenClosure($renderChildrenClosure267);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output265 .= $viewHelper268->initializeArgumentsAndRender();

$output265 .= '
										';
return $output265;
};
$viewHelper269 = $self->getViewHelper('$viewHelper269', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper269->setArguments($arguments263);
$viewHelper269->setRenderingContext($renderingContext);
$viewHelper269->setRenderChildrenClosure($renderChildrenClosure264);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output262 .= $viewHelper269->initializeArgumentsAndRender();

$output262 .= '
									</span>
								';
return $output262;
};

$output259 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output259 .= '
							';
return $output259;
};

$output226 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output226 .= '
						';
return $output226;
};
$arguments224['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output270 = '';

$output270 .= '
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments271 = array();
$arguments271['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments271['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments271['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments271['additionalAttributes'] = NULL;
$arguments271['data'] = NULL;
$arguments271['uriOnly'] = false;
$arguments271['configuration'] = array (
);
$arguments271['content'] = '';
$arguments271['class'] = NULL;
$arguments271['dir'] = NULL;
$arguments271['id'] = NULL;
$arguments271['lang'] = NULL;
$arguments271['style'] = NULL;
$arguments271['accesskey'] = NULL;
$arguments271['tabindex'] = NULL;
$arguments271['onclick'] = NULL;
$arguments271['section'] = NULL;
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output273 = '';

$output273 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments274 = array();
// Rendering Array
$array275 = array();
$array275['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews.0', $renderingContext);
$arguments274['map'] = $array275;
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output277 = '';

$output277 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments278 = array();
// Rendering Boolean node
$arguments278['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 0);
$arguments278['then'] = NULL;
$arguments278['else'] = NULL;
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output280 = '';

$output280 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments281 = array();
$output282 = '';

$output282 .= 'uploads/tx_news/';

$output282 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'image', $renderingContext);
$arguments281['src'] = $output282;
$arguments281['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'title', $renderingContext);
$arguments281['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'alt', $renderingContext);
$arguments281['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments281['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments281['additionalAttributes'] = NULL;
$arguments281['data'] = NULL;
$arguments281['width'] = NULL;
$arguments281['height'] = NULL;
$arguments281['minWidth'] = NULL;
$arguments281['minHeight'] = NULL;
$arguments281['treatIdAsReference'] = false;
$arguments281['image'] = NULL;
$arguments281['crop'] = NULL;
$arguments281['absolute'] = false;
$arguments281['class'] = NULL;
$arguments281['dir'] = NULL;
$arguments281['id'] = NULL;
$arguments281['lang'] = NULL;
$arguments281['style'] = NULL;
$arguments281['accesskey'] = NULL;
$arguments281['tabindex'] = NULL;
$arguments281['onclick'] = NULL;
$arguments281['ismap'] = NULL;
$arguments281['longdesc'] = NULL;
$arguments281['usemap'] = NULL;
$renderChildrenClosure283 = function() {return NULL;};
$viewHelper284 = $self->getViewHelper('$viewHelper284', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper284->setArguments($arguments281);
$viewHelper284->setRenderingContext($renderingContext);
$viewHelper284->setRenderChildrenClosure($renderChildrenClosure283);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output280 .= $viewHelper284->initializeArgumentsAndRender();

$output280 .= '
										';
return $output280;
};

$output277 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);

$output277 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments285 = array();
// Rendering Boolean node
$arguments285['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 1);
$arguments285['then'] = NULL;
$arguments285['else'] = NULL;
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output287 = '';

$output287 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments288 = array();
$arguments288['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array289 = array();
$array289['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments288['arguments'] = $array289;
$arguments288['section'] = NULL;
$arguments288['optional'] = false;
$renderChildrenClosure290 = function() {return NULL;};

$output287 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments288, $renderChildrenClosure290, $renderingContext);

$output287 .= '
										';
return $output287;
};

$output277 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output277 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments291 = array();
// Rendering Boolean node
$arguments291['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 2);
$arguments291['then'] = NULL;
$arguments291['else'] = NULL;
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output293 = '';

$output293 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments294 = array();
$arguments294['partial'] = 'Detail/MediaHtml';
// Rendering Array
$array295 = array();
$array295['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments294['arguments'] = $array295;
$arguments294['section'] = NULL;
$arguments294['optional'] = false;
$renderChildrenClosure296 = function() {return NULL;};

$output293 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments294, $renderChildrenClosure296, $renderingContext);

$output293 .= '
										';
return $output293;
};

$output277 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext);

$output277 .= '
									';
return $output277;
};

$output273 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments274, $renderChildrenClosure276, $renderingContext);

$output273 .= '
								';
return $output273;
};
$viewHelper297 = $self->getViewHelper('$viewHelper297', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper297->setArguments($arguments271);
$viewHelper297->setRenderingContext($renderingContext);
$viewHelper297->setRenderChildrenClosure($renderChildrenClosure272);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output270 .= $viewHelper297->initializeArgumentsAndRender();

$output270 .= '
							';
return $output270;
};
$arguments224['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output298 = '';

$output298 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments299 = array();
// Rendering Boolean node
$arguments299['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments299['then'] = NULL;
$arguments299['else'] = NULL;
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output301 = '';

$output301 .= '
									<span class="no-media-element">
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments302 = array();
$arguments302['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments302['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments302['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments302['additionalAttributes'] = NULL;
$arguments302['data'] = NULL;
$arguments302['uriOnly'] = false;
$arguments302['configuration'] = array (
);
$arguments302['content'] = '';
$arguments302['class'] = NULL;
$arguments302['dir'] = NULL;
$arguments302['id'] = NULL;
$arguments302['lang'] = NULL;
$arguments302['style'] = NULL;
$arguments302['accesskey'] = NULL;
$arguments302['tabindex'] = NULL;
$arguments302['onclick'] = NULL;
$arguments302['section'] = NULL;
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output304 = '';

$output304 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments305 = array();
$arguments305['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments305['title'] = '';
$arguments305['alt'] = '';
$arguments305['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments305['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments305['additionalAttributes'] = NULL;
$arguments305['data'] = NULL;
$arguments305['width'] = NULL;
$arguments305['height'] = NULL;
$arguments305['minWidth'] = NULL;
$arguments305['minHeight'] = NULL;
$arguments305['treatIdAsReference'] = false;
$arguments305['image'] = NULL;
$arguments305['crop'] = NULL;
$arguments305['absolute'] = false;
$arguments305['class'] = NULL;
$arguments305['dir'] = NULL;
$arguments305['id'] = NULL;
$arguments305['lang'] = NULL;
$arguments305['style'] = NULL;
$arguments305['accesskey'] = NULL;
$arguments305['tabindex'] = NULL;
$arguments305['onclick'] = NULL;
$arguments305['ismap'] = NULL;
$arguments305['longdesc'] = NULL;
$arguments305['usemap'] = NULL;
$renderChildrenClosure306 = function() {return NULL;};
$viewHelper307 = $self->getViewHelper('$viewHelper307', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper307->setArguments($arguments305);
$viewHelper307->setRenderingContext($renderingContext);
$viewHelper307->setRenderChildrenClosure($renderChildrenClosure306);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output304 .= $viewHelper307->initializeArgumentsAndRender();

$output304 .= '
										';
return $output304;
};
$viewHelper308 = $self->getViewHelper('$viewHelper308', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper308->setArguments($arguments302);
$viewHelper308->setRenderingContext($renderingContext);
$viewHelper308->setRenderChildrenClosure($renderChildrenClosure303);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output301 .= $viewHelper308->initializeArgumentsAndRender();

$output301 .= '
									</span>
								';
return $output301;
};

$output298 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output298 .= '
							';
return $output298;
};

$output223 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output223 .= '

					</div>
				';
return $output223;
};
$arguments108['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output309 = '';

$output309 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments310 = array();
// Rendering Boolean node
$arguments310['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments310['then'] = NULL;
$arguments310['else'] = NULL;
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output312 = '';

$output312 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments313 = array();
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output315 = '';

$output315 .= '
							<div class="news-img-wrap">
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments316 = array();
$arguments316['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments316['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments316['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments316['additionalAttributes'] = NULL;
$arguments316['data'] = NULL;
$arguments316['uriOnly'] = false;
$arguments316['configuration'] = array (
);
$arguments316['content'] = '';
$arguments316['class'] = NULL;
$arguments316['dir'] = NULL;
$arguments316['id'] = NULL;
$arguments316['lang'] = NULL;
$arguments316['style'] = NULL;
$arguments316['accesskey'] = NULL;
$arguments316['tabindex'] = NULL;
$arguments316['onclick'] = NULL;
$arguments316['section'] = NULL;
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output318 = '';

$output318 .= '
									<span class="no-media-element">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments319 = array();
$arguments319['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments319['title'] = '';
$arguments319['alt'] = '';
$arguments319['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments319['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments319['additionalAttributes'] = NULL;
$arguments319['data'] = NULL;
$arguments319['width'] = NULL;
$arguments319['height'] = NULL;
$arguments319['minWidth'] = NULL;
$arguments319['minHeight'] = NULL;
$arguments319['treatIdAsReference'] = false;
$arguments319['image'] = NULL;
$arguments319['crop'] = NULL;
$arguments319['absolute'] = false;
$arguments319['class'] = NULL;
$arguments319['dir'] = NULL;
$arguments319['id'] = NULL;
$arguments319['lang'] = NULL;
$arguments319['style'] = NULL;
$arguments319['accesskey'] = NULL;
$arguments319['tabindex'] = NULL;
$arguments319['onclick'] = NULL;
$arguments319['ismap'] = NULL;
$arguments319['longdesc'] = NULL;
$arguments319['usemap'] = NULL;
$renderChildrenClosure320 = function() {return NULL;};
$viewHelper321 = $self->getViewHelper('$viewHelper321', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper321->setArguments($arguments319);
$viewHelper321->setRenderingContext($renderingContext);
$viewHelper321->setRenderChildrenClosure($renderChildrenClosure320);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output318 .= $viewHelper321->initializeArgumentsAndRender();

$output318 .= '
									</span>
								';
return $output318;
};
$viewHelper322 = $self->getViewHelper('$viewHelper322', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper322->setArguments($arguments316);
$viewHelper322->setRenderingContext($renderingContext);
$viewHelper322->setRenderChildrenClosure($renderChildrenClosure317);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output315 .= $viewHelper322->initializeArgumentsAndRender();

$output315 .= '
							</div>
						';
return $output315;
};

$output312 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output312 .= '
					';
return $output312;
};
$arguments310['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output323 = '';

$output323 .= '
							<div class="news-img-wrap">
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments324 = array();
$arguments324['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments324['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments324['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments324['additionalAttributes'] = NULL;
$arguments324['data'] = NULL;
$arguments324['uriOnly'] = false;
$arguments324['configuration'] = array (
);
$arguments324['content'] = '';
$arguments324['class'] = NULL;
$arguments324['dir'] = NULL;
$arguments324['id'] = NULL;
$arguments324['lang'] = NULL;
$arguments324['style'] = NULL;
$arguments324['accesskey'] = NULL;
$arguments324['tabindex'] = NULL;
$arguments324['onclick'] = NULL;
$arguments324['section'] = NULL;
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output326 = '';

$output326 .= '
									<span class="no-media-element">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments327 = array();
$arguments327['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments327['title'] = '';
$arguments327['alt'] = '';
$arguments327['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments327['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments327['additionalAttributes'] = NULL;
$arguments327['data'] = NULL;
$arguments327['width'] = NULL;
$arguments327['height'] = NULL;
$arguments327['minWidth'] = NULL;
$arguments327['minHeight'] = NULL;
$arguments327['treatIdAsReference'] = false;
$arguments327['image'] = NULL;
$arguments327['crop'] = NULL;
$arguments327['absolute'] = false;
$arguments327['class'] = NULL;
$arguments327['dir'] = NULL;
$arguments327['id'] = NULL;
$arguments327['lang'] = NULL;
$arguments327['style'] = NULL;
$arguments327['accesskey'] = NULL;
$arguments327['tabindex'] = NULL;
$arguments327['onclick'] = NULL;
$arguments327['ismap'] = NULL;
$arguments327['longdesc'] = NULL;
$arguments327['usemap'] = NULL;
$renderChildrenClosure328 = function() {return NULL;};
$viewHelper329 = $self->getViewHelper('$viewHelper329', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper329->setArguments($arguments327);
$viewHelper329->setRenderingContext($renderingContext);
$viewHelper329->setRenderChildrenClosure($renderChildrenClosure328);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output326 .= $viewHelper329->initializeArgumentsAndRender();

$output326 .= '
									</span>
								';
return $output326;
};
$viewHelper330 = $self->getViewHelper('$viewHelper330', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper330->setArguments($arguments324);
$viewHelper330->setRenderingContext($renderingContext);
$viewHelper330->setRenderChildrenClosure($renderChildrenClosure325);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output323 .= $viewHelper330->initializeArgumentsAndRender();

$output323 .= '
							</div>
						';
return $output323;
};

$output309 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext);

$output309 .= '
				';
return $output309;
};

$output107 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output107 .= '

		';
return $output107;
};

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output18 .= '
	';
return $output18;
};
$arguments16['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output331 = '';

$output331 .= '
			<div class="news-img-wrap">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments332 = array();
// Rendering Boolean node
$arguments332['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falMediaPreviews', $renderingContext));
$arguments332['then'] = NULL;
$arguments332['else'] = NULL;
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output334 = '';

$output334 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments335 = array();
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output337 = '';

$output337 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments338 = array();
$arguments338['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments338['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments338['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments338['additionalAttributes'] = NULL;
$arguments338['data'] = NULL;
$arguments338['uriOnly'] = false;
$arguments338['configuration'] = array (
);
$arguments338['content'] = '';
$arguments338['class'] = NULL;
$arguments338['dir'] = NULL;
$arguments338['id'] = NULL;
$arguments338['lang'] = NULL;
$arguments338['style'] = NULL;
$arguments338['accesskey'] = NULL;
$arguments338['tabindex'] = NULL;
$arguments338['onclick'] = NULL;
$arguments338['section'] = NULL;
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output340 = '';

$output340 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments341 = array();
// Rendering Array
$array342 = array();
$array342['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falMediaPreviews.0', $renderingContext);
$arguments341['map'] = $array342;
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output344 = '';

$output344 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments345 = array();
// Rendering Boolean node
$arguments345['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 2);
$arguments345['then'] = NULL;
$arguments345['else'] = NULL;
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output347 = '';

$output347 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments348 = array();
$arguments348['image'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments348['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.title', $renderingContext);
$arguments348['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.alternative', $renderingContext);
$arguments348['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments348['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments348['additionalAttributes'] = NULL;
$arguments348['data'] = NULL;
$arguments348['src'] = NULL;
$arguments348['width'] = NULL;
$arguments348['height'] = NULL;
$arguments348['minWidth'] = NULL;
$arguments348['minHeight'] = NULL;
$arguments348['treatIdAsReference'] = false;
$arguments348['crop'] = NULL;
$arguments348['absolute'] = false;
$arguments348['class'] = NULL;
$arguments348['dir'] = NULL;
$arguments348['id'] = NULL;
$arguments348['lang'] = NULL;
$arguments348['style'] = NULL;
$arguments348['accesskey'] = NULL;
$arguments348['tabindex'] = NULL;
$arguments348['onclick'] = NULL;
$arguments348['ismap'] = NULL;
$arguments348['longdesc'] = NULL;
$arguments348['usemap'] = NULL;
$renderChildrenClosure349 = function() {return NULL;};
$viewHelper350 = $self->getViewHelper('$viewHelper350', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper350->setArguments($arguments348);
$viewHelper350->setRenderingContext($renderingContext);
$viewHelper350->setRenderChildrenClosure($renderChildrenClosure349);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output347 .= $viewHelper350->initializeArgumentsAndRender();

$output347 .= '
								';
return $output347;
};

$output344 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext);

$output344 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments351 = array();
// Rendering Boolean node
$arguments351['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 4);
$arguments351['then'] = NULL;
$arguments351['else'] = NULL;
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output353 = '';

$output353 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments354 = array();
$arguments354['partial'] = 'Detail/FalMediaVideo';
// Rendering Array
$array355 = array();
$array355['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments354['arguments'] = $array355;
$arguments354['section'] = NULL;
$arguments354['optional'] = false;
$renderChildrenClosure356 = function() {return NULL;};

$output353 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments354, $renderChildrenClosure356, $renderingContext);

$output353 .= '
								';
return $output353;
};

$output344 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);

$output344 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments357 = array();
// Rendering Boolean node
$arguments357['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 5);
$arguments357['then'] = NULL;
$arguments357['else'] = NULL;
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output359 = '';

$output359 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments360 = array();
$arguments360['image'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments360['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.title', $renderingContext);
$arguments360['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.alternative', $renderingContext);
$arguments360['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments360['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments360['additionalAttributes'] = NULL;
$arguments360['data'] = NULL;
$arguments360['src'] = NULL;
$arguments360['width'] = NULL;
$arguments360['height'] = NULL;
$arguments360['minWidth'] = NULL;
$arguments360['minHeight'] = NULL;
$arguments360['treatIdAsReference'] = false;
$arguments360['crop'] = NULL;
$arguments360['absolute'] = false;
$arguments360['class'] = NULL;
$arguments360['dir'] = NULL;
$arguments360['id'] = NULL;
$arguments360['lang'] = NULL;
$arguments360['style'] = NULL;
$arguments360['accesskey'] = NULL;
$arguments360['tabindex'] = NULL;
$arguments360['onclick'] = NULL;
$arguments360['ismap'] = NULL;
$arguments360['longdesc'] = NULL;
$arguments360['usemap'] = NULL;
$renderChildrenClosure361 = function() {return NULL;};
$viewHelper362 = $self->getViewHelper('$viewHelper362', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper362->setArguments($arguments360);
$viewHelper362->setRenderingContext($renderingContext);
$viewHelper362->setRenderChildrenClosure($renderChildrenClosure361);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output359 .= $viewHelper362->initializeArgumentsAndRender();

$output359 .= '
								';
return $output359;
};

$output344 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext);

$output344 .= '
							';
return $output344;
};

$output340 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments341, $renderChildrenClosure343, $renderingContext);

$output340 .= '
						';
return $output340;
};
$viewHelper363 = $self->getViewHelper('$viewHelper363', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper363->setArguments($arguments338);
$viewHelper363->setRenderingContext($renderingContext);
$viewHelper363->setRenderChildrenClosure($renderChildrenClosure339);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output337 .= $viewHelper363->initializeArgumentsAndRender();

$output337 .= '
					';
return $output337;
};

$output334 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output334 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments364 = array();
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output366 = '';

$output366 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments367 = array();
// Rendering Boolean node
$arguments367['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments367['then'] = NULL;
$arguments367['else'] = NULL;
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output369 = '';

$output369 .= '
							<span class="no-media-element">
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments370 = array();
$arguments370['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments370['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments370['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments370['additionalAttributes'] = NULL;
$arguments370['data'] = NULL;
$arguments370['uriOnly'] = false;
$arguments370['configuration'] = array (
);
$arguments370['content'] = '';
$arguments370['class'] = NULL;
$arguments370['dir'] = NULL;
$arguments370['id'] = NULL;
$arguments370['lang'] = NULL;
$arguments370['style'] = NULL;
$arguments370['accesskey'] = NULL;
$arguments370['tabindex'] = NULL;
$arguments370['onclick'] = NULL;
$arguments370['section'] = NULL;
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output372 = '';

$output372 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments373 = array();
$arguments373['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments373['title'] = '';
$arguments373['alt'] = '';
$arguments373['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments373['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments373['additionalAttributes'] = NULL;
$arguments373['data'] = NULL;
$arguments373['width'] = NULL;
$arguments373['height'] = NULL;
$arguments373['minWidth'] = NULL;
$arguments373['minHeight'] = NULL;
$arguments373['treatIdAsReference'] = false;
$arguments373['image'] = NULL;
$arguments373['crop'] = NULL;
$arguments373['absolute'] = false;
$arguments373['class'] = NULL;
$arguments373['dir'] = NULL;
$arguments373['id'] = NULL;
$arguments373['lang'] = NULL;
$arguments373['style'] = NULL;
$arguments373['accesskey'] = NULL;
$arguments373['tabindex'] = NULL;
$arguments373['onclick'] = NULL;
$arguments373['ismap'] = NULL;
$arguments373['longdesc'] = NULL;
$arguments373['usemap'] = NULL;
$renderChildrenClosure374 = function() {return NULL;};
$viewHelper375 = $self->getViewHelper('$viewHelper375', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper375->setArguments($arguments373);
$viewHelper375->setRenderingContext($renderingContext);
$viewHelper375->setRenderChildrenClosure($renderChildrenClosure374);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output372 .= $viewHelper375->initializeArgumentsAndRender();

$output372 .= '
								';
return $output372;
};
$viewHelper376 = $self->getViewHelper('$viewHelper376', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper376->setArguments($arguments370);
$viewHelper376->setRenderingContext($renderingContext);
$viewHelper376->setRenderChildrenClosure($renderChildrenClosure371);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output369 .= $viewHelper376->initializeArgumentsAndRender();

$output369 .= '
							</span>
						';
return $output369;
};

$output366 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments367, $renderChildrenClosure368, $renderingContext);

$output366 .= '
					';
return $output366;
};

$output334 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext);

$output334 .= '
				';
return $output334;
};
$arguments332['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output377 = '';

$output377 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments378 = array();
$arguments378['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments378['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments378['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments378['additionalAttributes'] = NULL;
$arguments378['data'] = NULL;
$arguments378['uriOnly'] = false;
$arguments378['configuration'] = array (
);
$arguments378['content'] = '';
$arguments378['class'] = NULL;
$arguments378['dir'] = NULL;
$arguments378['id'] = NULL;
$arguments378['lang'] = NULL;
$arguments378['style'] = NULL;
$arguments378['accesskey'] = NULL;
$arguments378['tabindex'] = NULL;
$arguments378['onclick'] = NULL;
$arguments378['section'] = NULL;
$renderChildrenClosure379 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output380 = '';

$output380 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments381 = array();
// Rendering Array
$array382 = array();
$array382['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falMediaPreviews.0', $renderingContext);
$arguments381['map'] = $array382;
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output384 = '';

$output384 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments385 = array();
// Rendering Boolean node
$arguments385['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 2);
$arguments385['then'] = NULL;
$arguments385['else'] = NULL;
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output387 = '';

$output387 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments388 = array();
$arguments388['image'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments388['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.title', $renderingContext);
$arguments388['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.alternative', $renderingContext);
$arguments388['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments388['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments388['additionalAttributes'] = NULL;
$arguments388['data'] = NULL;
$arguments388['src'] = NULL;
$arguments388['width'] = NULL;
$arguments388['height'] = NULL;
$arguments388['minWidth'] = NULL;
$arguments388['minHeight'] = NULL;
$arguments388['treatIdAsReference'] = false;
$arguments388['crop'] = NULL;
$arguments388['absolute'] = false;
$arguments388['class'] = NULL;
$arguments388['dir'] = NULL;
$arguments388['id'] = NULL;
$arguments388['lang'] = NULL;
$arguments388['style'] = NULL;
$arguments388['accesskey'] = NULL;
$arguments388['tabindex'] = NULL;
$arguments388['onclick'] = NULL;
$arguments388['ismap'] = NULL;
$arguments388['longdesc'] = NULL;
$arguments388['usemap'] = NULL;
$renderChildrenClosure389 = function() {return NULL;};
$viewHelper390 = $self->getViewHelper('$viewHelper390', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper390->setArguments($arguments388);
$viewHelper390->setRenderingContext($renderingContext);
$viewHelper390->setRenderChildrenClosure($renderChildrenClosure389);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output387 .= $viewHelper390->initializeArgumentsAndRender();

$output387 .= '
								';
return $output387;
};

$output384 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext);

$output384 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments391 = array();
// Rendering Boolean node
$arguments391['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 4);
$arguments391['then'] = NULL;
$arguments391['else'] = NULL;
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output393 = '';

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments394 = array();
$arguments394['partial'] = 'Detail/FalMediaVideo';
// Rendering Array
$array395 = array();
$array395['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments394['arguments'] = $array395;
$arguments394['section'] = NULL;
$arguments394['optional'] = false;
$renderChildrenClosure396 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments394, $renderChildrenClosure396, $renderingContext);

$output393 .= '
								';
return $output393;
};

$output384 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments391, $renderChildrenClosure392, $renderingContext);

$output384 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments397 = array();
// Rendering Boolean node
$arguments397['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.type', $renderingContext), 5);
$arguments397['then'] = NULL;
$arguments397['else'] = NULL;
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output399 = '';

$output399 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments400 = array();
$arguments400['image'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments400['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.title', $renderingContext);
$arguments400['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.alternative', $renderingContext);
$arguments400['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments400['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments400['additionalAttributes'] = NULL;
$arguments400['data'] = NULL;
$arguments400['src'] = NULL;
$arguments400['width'] = NULL;
$arguments400['height'] = NULL;
$arguments400['minWidth'] = NULL;
$arguments400['minHeight'] = NULL;
$arguments400['treatIdAsReference'] = false;
$arguments400['crop'] = NULL;
$arguments400['absolute'] = false;
$arguments400['class'] = NULL;
$arguments400['dir'] = NULL;
$arguments400['id'] = NULL;
$arguments400['lang'] = NULL;
$arguments400['style'] = NULL;
$arguments400['accesskey'] = NULL;
$arguments400['tabindex'] = NULL;
$arguments400['onclick'] = NULL;
$arguments400['ismap'] = NULL;
$arguments400['longdesc'] = NULL;
$arguments400['usemap'] = NULL;
$renderChildrenClosure401 = function() {return NULL;};
$viewHelper402 = $self->getViewHelper('$viewHelper402', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper402->setArguments($arguments400);
$viewHelper402->setRenderingContext($renderingContext);
$viewHelper402->setRenderChildrenClosure($renderChildrenClosure401);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output399 .= $viewHelper402->initializeArgumentsAndRender();

$output399 .= '
								';
return $output399;
};

$output384 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext);

$output384 .= '
							';
return $output384;
};

$output380 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments381, $renderChildrenClosure383, $renderingContext);

$output380 .= '
						';
return $output380;
};
$viewHelper403 = $self->getViewHelper('$viewHelper403', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper403->setArguments($arguments378);
$viewHelper403->setRenderingContext($renderingContext);
$viewHelper403->setRenderChildrenClosure($renderChildrenClosure379);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output377 .= $viewHelper403->initializeArgumentsAndRender();

$output377 .= '
					';
return $output377;
};
$arguments332['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output404 = '';

$output404 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments405 = array();
// Rendering Boolean node
$arguments405['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments405['then'] = NULL;
$arguments405['else'] = NULL;
$renderChildrenClosure406 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output407 = '';

$output407 .= '
							<span class="no-media-element">
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments408 = array();
$arguments408['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments408['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments408['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments408['additionalAttributes'] = NULL;
$arguments408['data'] = NULL;
$arguments408['uriOnly'] = false;
$arguments408['configuration'] = array (
);
$arguments408['content'] = '';
$arguments408['class'] = NULL;
$arguments408['dir'] = NULL;
$arguments408['id'] = NULL;
$arguments408['lang'] = NULL;
$arguments408['style'] = NULL;
$arguments408['accesskey'] = NULL;
$arguments408['tabindex'] = NULL;
$arguments408['onclick'] = NULL;
$arguments408['section'] = NULL;
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output410 = '';

$output410 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments411 = array();
$arguments411['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments411['title'] = '';
$arguments411['alt'] = '';
$arguments411['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments411['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments411['additionalAttributes'] = NULL;
$arguments411['data'] = NULL;
$arguments411['width'] = NULL;
$arguments411['height'] = NULL;
$arguments411['minWidth'] = NULL;
$arguments411['minHeight'] = NULL;
$arguments411['treatIdAsReference'] = false;
$arguments411['image'] = NULL;
$arguments411['crop'] = NULL;
$arguments411['absolute'] = false;
$arguments411['class'] = NULL;
$arguments411['dir'] = NULL;
$arguments411['id'] = NULL;
$arguments411['lang'] = NULL;
$arguments411['style'] = NULL;
$arguments411['accesskey'] = NULL;
$arguments411['tabindex'] = NULL;
$arguments411['onclick'] = NULL;
$arguments411['ismap'] = NULL;
$arguments411['longdesc'] = NULL;
$arguments411['usemap'] = NULL;
$renderChildrenClosure412 = function() {return NULL;};
$viewHelper413 = $self->getViewHelper('$viewHelper413', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper413->setArguments($arguments411);
$viewHelper413->setRenderingContext($renderingContext);
$viewHelper413->setRenderChildrenClosure($renderChildrenClosure412);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output410 .= $viewHelper413->initializeArgumentsAndRender();

$output410 .= '
								';
return $output410;
};
$viewHelper414 = $self->getViewHelper('$viewHelper414', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper414->setArguments($arguments408);
$viewHelper414->setRenderingContext($renderingContext);
$viewHelper414->setRenderChildrenClosure($renderChildrenClosure409);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output407 .= $viewHelper414->initializeArgumentsAndRender();

$output407 .= '
							</span>
						';
return $output407;
};

$output404 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments405, $renderChildrenClosure406, $renderingContext);

$output404 .= '
					';
return $output404;
};

$output331 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);

$output331 .= '

			</div>
		';
return $output331;
};
$arguments16['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output415 = '';

$output415 .= '

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments416 = array();
// Rendering Boolean node
$arguments416['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'media', $renderingContext));
$arguments416['then'] = NULL;
$arguments416['else'] = NULL;
$renderChildrenClosure417 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output418 = '';

$output418 .= '
				<!-- media preview element -->
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments419 = array();
$renderChildrenClosure420 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output421 = '';

$output421 .= '
					<div class="news-img-wrap">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments422 = array();
// Rendering Boolean node
$arguments422['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews', $renderingContext));
$arguments422['then'] = NULL;
$arguments422['else'] = NULL;
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output424 = '';

$output424 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments425 = array();
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output427 = '';

$output427 .= '
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments428 = array();
$arguments428['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments428['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments428['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments428['additionalAttributes'] = NULL;
$arguments428['data'] = NULL;
$arguments428['uriOnly'] = false;
$arguments428['configuration'] = array (
);
$arguments428['content'] = '';
$arguments428['class'] = NULL;
$arguments428['dir'] = NULL;
$arguments428['id'] = NULL;
$arguments428['lang'] = NULL;
$arguments428['style'] = NULL;
$arguments428['accesskey'] = NULL;
$arguments428['tabindex'] = NULL;
$arguments428['onclick'] = NULL;
$arguments428['section'] = NULL;
$renderChildrenClosure429 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output430 = '';

$output430 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments431 = array();
// Rendering Array
$array432 = array();
$array432['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews.0', $renderingContext);
$arguments431['map'] = $array432;
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output434 = '';

$output434 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments435 = array();
// Rendering Boolean node
$arguments435['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 0);
$arguments435['then'] = NULL;
$arguments435['else'] = NULL;
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output437 = '';

$output437 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments438 = array();
$output439 = '';

$output439 .= 'uploads/tx_news/';

$output439 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'image', $renderingContext);
$arguments438['src'] = $output439;
$arguments438['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'title', $renderingContext);
$arguments438['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'alt', $renderingContext);
$arguments438['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments438['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments438['additionalAttributes'] = NULL;
$arguments438['data'] = NULL;
$arguments438['width'] = NULL;
$arguments438['height'] = NULL;
$arguments438['minWidth'] = NULL;
$arguments438['minHeight'] = NULL;
$arguments438['treatIdAsReference'] = false;
$arguments438['image'] = NULL;
$arguments438['crop'] = NULL;
$arguments438['absolute'] = false;
$arguments438['class'] = NULL;
$arguments438['dir'] = NULL;
$arguments438['id'] = NULL;
$arguments438['lang'] = NULL;
$arguments438['style'] = NULL;
$arguments438['accesskey'] = NULL;
$arguments438['tabindex'] = NULL;
$arguments438['onclick'] = NULL;
$arguments438['ismap'] = NULL;
$arguments438['longdesc'] = NULL;
$arguments438['usemap'] = NULL;
$renderChildrenClosure440 = function() {return NULL;};
$viewHelper441 = $self->getViewHelper('$viewHelper441', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper441->setArguments($arguments438);
$viewHelper441->setRenderingContext($renderingContext);
$viewHelper441->setRenderChildrenClosure($renderChildrenClosure440);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output437 .= $viewHelper441->initializeArgumentsAndRender();

$output437 .= '
										';
return $output437;
};

$output434 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments435, $renderChildrenClosure436, $renderingContext);

$output434 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments442 = array();
// Rendering Boolean node
$arguments442['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 1);
$arguments442['then'] = NULL;
$arguments442['else'] = NULL;
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output444 = '';

$output444 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments445 = array();
$arguments445['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array446 = array();
$array446['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments445['arguments'] = $array446;
$arguments445['section'] = NULL;
$arguments445['optional'] = false;
$renderChildrenClosure447 = function() {return NULL;};

$output444 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments445, $renderChildrenClosure447, $renderingContext);

$output444 .= '
										';
return $output444;
};

$output434 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments442, $renderChildrenClosure443, $renderingContext);

$output434 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments448 = array();
// Rendering Boolean node
$arguments448['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 2);
$arguments448['then'] = NULL;
$arguments448['else'] = NULL;
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output450 = '';

$output450 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments451 = array();
$arguments451['partial'] = 'Detail/MediaHtml';
// Rendering Array
$array452 = array();
$array452['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments451['arguments'] = $array452;
$arguments451['section'] = NULL;
$arguments451['optional'] = false;
$renderChildrenClosure453 = function() {return NULL;};

$output450 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments451, $renderChildrenClosure453, $renderingContext);

$output450 .= '
										';
return $output450;
};

$output434 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments448, $renderChildrenClosure449, $renderingContext);

$output434 .= '
									';
return $output434;
};

$output430 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments431, $renderChildrenClosure433, $renderingContext);

$output430 .= '
								';
return $output430;
};
$viewHelper454 = $self->getViewHelper('$viewHelper454', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper454->setArguments($arguments428);
$viewHelper454->setRenderingContext($renderingContext);
$viewHelper454->setRenderChildrenClosure($renderChildrenClosure429);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output427 .= $viewHelper454->initializeArgumentsAndRender();

$output427 .= '
							';
return $output427;
};

$output424 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext);

$output424 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments455 = array();
$renderChildrenClosure456 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output457 = '';

$output457 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments458 = array();
// Rendering Boolean node
$arguments458['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments458['then'] = NULL;
$arguments458['else'] = NULL;
$renderChildrenClosure459 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output460 = '';

$output460 .= '
									<span class="no-media-element">
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments461 = array();
$arguments461['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments461['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments461['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments461['additionalAttributes'] = NULL;
$arguments461['data'] = NULL;
$arguments461['uriOnly'] = false;
$arguments461['configuration'] = array (
);
$arguments461['content'] = '';
$arguments461['class'] = NULL;
$arguments461['dir'] = NULL;
$arguments461['id'] = NULL;
$arguments461['lang'] = NULL;
$arguments461['style'] = NULL;
$arguments461['accesskey'] = NULL;
$arguments461['tabindex'] = NULL;
$arguments461['onclick'] = NULL;
$arguments461['section'] = NULL;
$renderChildrenClosure462 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output463 = '';

$output463 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments464 = array();
$arguments464['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments464['title'] = '';
$arguments464['alt'] = '';
$arguments464['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments464['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments464['additionalAttributes'] = NULL;
$arguments464['data'] = NULL;
$arguments464['width'] = NULL;
$arguments464['height'] = NULL;
$arguments464['minWidth'] = NULL;
$arguments464['minHeight'] = NULL;
$arguments464['treatIdAsReference'] = false;
$arguments464['image'] = NULL;
$arguments464['crop'] = NULL;
$arguments464['absolute'] = false;
$arguments464['class'] = NULL;
$arguments464['dir'] = NULL;
$arguments464['id'] = NULL;
$arguments464['lang'] = NULL;
$arguments464['style'] = NULL;
$arguments464['accesskey'] = NULL;
$arguments464['tabindex'] = NULL;
$arguments464['onclick'] = NULL;
$arguments464['ismap'] = NULL;
$arguments464['longdesc'] = NULL;
$arguments464['usemap'] = NULL;
$renderChildrenClosure465 = function() {return NULL;};
$viewHelper466 = $self->getViewHelper('$viewHelper466', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper466->setArguments($arguments464);
$viewHelper466->setRenderingContext($renderingContext);
$viewHelper466->setRenderChildrenClosure($renderChildrenClosure465);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output463 .= $viewHelper466->initializeArgumentsAndRender();

$output463 .= '
										';
return $output463;
};
$viewHelper467 = $self->getViewHelper('$viewHelper467', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper467->setArguments($arguments461);
$viewHelper467->setRenderingContext($renderingContext);
$viewHelper467->setRenderChildrenClosure($renderChildrenClosure462);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output460 .= $viewHelper467->initializeArgumentsAndRender();

$output460 .= '
									</span>
								';
return $output460;
};

$output457 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments458, $renderChildrenClosure459, $renderingContext);

$output457 .= '
							';
return $output457;
};

$output424 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments455, $renderChildrenClosure456, $renderingContext);

$output424 .= '
						';
return $output424;
};
$arguments422['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output468 = '';

$output468 .= '
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments469 = array();
$arguments469['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments469['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments469['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments469['additionalAttributes'] = NULL;
$arguments469['data'] = NULL;
$arguments469['uriOnly'] = false;
$arguments469['configuration'] = array (
);
$arguments469['content'] = '';
$arguments469['class'] = NULL;
$arguments469['dir'] = NULL;
$arguments469['id'] = NULL;
$arguments469['lang'] = NULL;
$arguments469['style'] = NULL;
$arguments469['accesskey'] = NULL;
$arguments469['tabindex'] = NULL;
$arguments469['onclick'] = NULL;
$arguments469['section'] = NULL;
$renderChildrenClosure470 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output471 = '';

$output471 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments472 = array();
// Rendering Array
$array473 = array();
$array473['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews.0', $renderingContext);
$arguments472['map'] = $array473;
$renderChildrenClosure474 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output475 = '';

$output475 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments476 = array();
// Rendering Boolean node
$arguments476['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 0);
$arguments476['then'] = NULL;
$arguments476['else'] = NULL;
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output478 = '';

$output478 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments479 = array();
$output480 = '';

$output480 .= 'uploads/tx_news/';

$output480 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'image', $renderingContext);
$arguments479['src'] = $output480;
$arguments479['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'title', $renderingContext);
$arguments479['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'alt', $renderingContext);
$arguments479['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments479['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments479['additionalAttributes'] = NULL;
$arguments479['data'] = NULL;
$arguments479['width'] = NULL;
$arguments479['height'] = NULL;
$arguments479['minWidth'] = NULL;
$arguments479['minHeight'] = NULL;
$arguments479['treatIdAsReference'] = false;
$arguments479['image'] = NULL;
$arguments479['crop'] = NULL;
$arguments479['absolute'] = false;
$arguments479['class'] = NULL;
$arguments479['dir'] = NULL;
$arguments479['id'] = NULL;
$arguments479['lang'] = NULL;
$arguments479['style'] = NULL;
$arguments479['accesskey'] = NULL;
$arguments479['tabindex'] = NULL;
$arguments479['onclick'] = NULL;
$arguments479['ismap'] = NULL;
$arguments479['longdesc'] = NULL;
$arguments479['usemap'] = NULL;
$renderChildrenClosure481 = function() {return NULL;};
$viewHelper482 = $self->getViewHelper('$viewHelper482', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper482->setArguments($arguments479);
$viewHelper482->setRenderingContext($renderingContext);
$viewHelper482->setRenderChildrenClosure($renderChildrenClosure481);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output478 .= $viewHelper482->initializeArgumentsAndRender();

$output478 .= '
										';
return $output478;
};

$output475 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments476, $renderChildrenClosure477, $renderingContext);

$output475 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments483 = array();
// Rendering Boolean node
$arguments483['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 1);
$arguments483['then'] = NULL;
$arguments483['else'] = NULL;
$renderChildrenClosure484 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output485 = '';

$output485 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments486 = array();
$arguments486['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array487 = array();
$array487['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments486['arguments'] = $array487;
$arguments486['section'] = NULL;
$arguments486['optional'] = false;
$renderChildrenClosure488 = function() {return NULL;};

$output485 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments486, $renderChildrenClosure488, $renderingContext);

$output485 .= '
										';
return $output485;
};

$output475 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments483, $renderChildrenClosure484, $renderingContext);

$output475 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments489 = array();
// Rendering Boolean node
$arguments489['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 2);
$arguments489['then'] = NULL;
$arguments489['else'] = NULL;
$renderChildrenClosure490 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output491 = '';

$output491 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments492 = array();
$arguments492['partial'] = 'Detail/MediaHtml';
// Rendering Array
$array493 = array();
$array493['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments492['arguments'] = $array493;
$arguments492['section'] = NULL;
$arguments492['optional'] = false;
$renderChildrenClosure494 = function() {return NULL;};

$output491 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments492, $renderChildrenClosure494, $renderingContext);

$output491 .= '
										';
return $output491;
};

$output475 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments489, $renderChildrenClosure490, $renderingContext);

$output475 .= '
									';
return $output475;
};

$output471 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments472, $renderChildrenClosure474, $renderingContext);

$output471 .= '
								';
return $output471;
};
$viewHelper495 = $self->getViewHelper('$viewHelper495', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper495->setArguments($arguments469);
$viewHelper495->setRenderingContext($renderingContext);
$viewHelper495->setRenderChildrenClosure($renderChildrenClosure470);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output468 .= $viewHelper495->initializeArgumentsAndRender();

$output468 .= '
							';
return $output468;
};
$arguments422['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output496 = '';

$output496 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments497 = array();
// Rendering Boolean node
$arguments497['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments497['then'] = NULL;
$arguments497['else'] = NULL;
$renderChildrenClosure498 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output499 = '';

$output499 .= '
									<span class="no-media-element">
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments500 = array();
$arguments500['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments500['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments500['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments500['additionalAttributes'] = NULL;
$arguments500['data'] = NULL;
$arguments500['uriOnly'] = false;
$arguments500['configuration'] = array (
);
$arguments500['content'] = '';
$arguments500['class'] = NULL;
$arguments500['dir'] = NULL;
$arguments500['id'] = NULL;
$arguments500['lang'] = NULL;
$arguments500['style'] = NULL;
$arguments500['accesskey'] = NULL;
$arguments500['tabindex'] = NULL;
$arguments500['onclick'] = NULL;
$arguments500['section'] = NULL;
$renderChildrenClosure501 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output502 = '';

$output502 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments503 = array();
$arguments503['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments503['title'] = '';
$arguments503['alt'] = '';
$arguments503['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments503['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments503['additionalAttributes'] = NULL;
$arguments503['data'] = NULL;
$arguments503['width'] = NULL;
$arguments503['height'] = NULL;
$arguments503['minWidth'] = NULL;
$arguments503['minHeight'] = NULL;
$arguments503['treatIdAsReference'] = false;
$arguments503['image'] = NULL;
$arguments503['crop'] = NULL;
$arguments503['absolute'] = false;
$arguments503['class'] = NULL;
$arguments503['dir'] = NULL;
$arguments503['id'] = NULL;
$arguments503['lang'] = NULL;
$arguments503['style'] = NULL;
$arguments503['accesskey'] = NULL;
$arguments503['tabindex'] = NULL;
$arguments503['onclick'] = NULL;
$arguments503['ismap'] = NULL;
$arguments503['longdesc'] = NULL;
$arguments503['usemap'] = NULL;
$renderChildrenClosure504 = function() {return NULL;};
$viewHelper505 = $self->getViewHelper('$viewHelper505', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper505->setArguments($arguments503);
$viewHelper505->setRenderingContext($renderingContext);
$viewHelper505->setRenderChildrenClosure($renderChildrenClosure504);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output502 .= $viewHelper505->initializeArgumentsAndRender();

$output502 .= '
										';
return $output502;
};
$viewHelper506 = $self->getViewHelper('$viewHelper506', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper506->setArguments($arguments500);
$viewHelper506->setRenderingContext($renderingContext);
$viewHelper506->setRenderChildrenClosure($renderChildrenClosure501);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output499 .= $viewHelper506->initializeArgumentsAndRender();

$output499 .= '
									</span>
								';
return $output499;
};

$output496 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments497, $renderChildrenClosure498, $renderingContext);

$output496 .= '
							';
return $output496;
};

$output421 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments422, $renderChildrenClosure423, $renderingContext);

$output421 .= '

					</div>
				';
return $output421;
};

$output418 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments419, $renderChildrenClosure420, $renderingContext);

$output418 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments507 = array();
$renderChildrenClosure508 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output509 = '';

$output509 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments510 = array();
// Rendering Boolean node
$arguments510['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments510['then'] = NULL;
$arguments510['else'] = NULL;
$renderChildrenClosure511 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output512 = '';

$output512 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments513 = array();
$renderChildrenClosure514 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output515 = '';

$output515 .= '
							<div class="news-img-wrap">
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments516 = array();
$arguments516['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments516['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments516['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments516['additionalAttributes'] = NULL;
$arguments516['data'] = NULL;
$arguments516['uriOnly'] = false;
$arguments516['configuration'] = array (
);
$arguments516['content'] = '';
$arguments516['class'] = NULL;
$arguments516['dir'] = NULL;
$arguments516['id'] = NULL;
$arguments516['lang'] = NULL;
$arguments516['style'] = NULL;
$arguments516['accesskey'] = NULL;
$arguments516['tabindex'] = NULL;
$arguments516['onclick'] = NULL;
$arguments516['section'] = NULL;
$renderChildrenClosure517 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output518 = '';

$output518 .= '
									<span class="no-media-element">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments519 = array();
$arguments519['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments519['title'] = '';
$arguments519['alt'] = '';
$arguments519['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments519['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments519['additionalAttributes'] = NULL;
$arguments519['data'] = NULL;
$arguments519['width'] = NULL;
$arguments519['height'] = NULL;
$arguments519['minWidth'] = NULL;
$arguments519['minHeight'] = NULL;
$arguments519['treatIdAsReference'] = false;
$arguments519['image'] = NULL;
$arguments519['crop'] = NULL;
$arguments519['absolute'] = false;
$arguments519['class'] = NULL;
$arguments519['dir'] = NULL;
$arguments519['id'] = NULL;
$arguments519['lang'] = NULL;
$arguments519['style'] = NULL;
$arguments519['accesskey'] = NULL;
$arguments519['tabindex'] = NULL;
$arguments519['onclick'] = NULL;
$arguments519['ismap'] = NULL;
$arguments519['longdesc'] = NULL;
$arguments519['usemap'] = NULL;
$renderChildrenClosure520 = function() {return NULL;};
$viewHelper521 = $self->getViewHelper('$viewHelper521', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper521->setArguments($arguments519);
$viewHelper521->setRenderingContext($renderingContext);
$viewHelper521->setRenderChildrenClosure($renderChildrenClosure520);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output518 .= $viewHelper521->initializeArgumentsAndRender();

$output518 .= '
									</span>
								';
return $output518;
};
$viewHelper522 = $self->getViewHelper('$viewHelper522', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper522->setArguments($arguments516);
$viewHelper522->setRenderingContext($renderingContext);
$viewHelper522->setRenderChildrenClosure($renderChildrenClosure517);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output515 .= $viewHelper522->initializeArgumentsAndRender();

$output515 .= '
							</div>
						';
return $output515;
};

$output512 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments513, $renderChildrenClosure514, $renderingContext);

$output512 .= '
					';
return $output512;
};
$arguments510['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output523 = '';

$output523 .= '
							<div class="news-img-wrap">
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments524 = array();
$arguments524['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments524['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments524['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments524['additionalAttributes'] = NULL;
$arguments524['data'] = NULL;
$arguments524['uriOnly'] = false;
$arguments524['configuration'] = array (
);
$arguments524['content'] = '';
$arguments524['class'] = NULL;
$arguments524['dir'] = NULL;
$arguments524['id'] = NULL;
$arguments524['lang'] = NULL;
$arguments524['style'] = NULL;
$arguments524['accesskey'] = NULL;
$arguments524['tabindex'] = NULL;
$arguments524['onclick'] = NULL;
$arguments524['section'] = NULL;
$renderChildrenClosure525 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output526 = '';

$output526 .= '
									<span class="no-media-element">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments527 = array();
$arguments527['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments527['title'] = '';
$arguments527['alt'] = '';
$arguments527['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments527['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments527['additionalAttributes'] = NULL;
$arguments527['data'] = NULL;
$arguments527['width'] = NULL;
$arguments527['height'] = NULL;
$arguments527['minWidth'] = NULL;
$arguments527['minHeight'] = NULL;
$arguments527['treatIdAsReference'] = false;
$arguments527['image'] = NULL;
$arguments527['crop'] = NULL;
$arguments527['absolute'] = false;
$arguments527['class'] = NULL;
$arguments527['dir'] = NULL;
$arguments527['id'] = NULL;
$arguments527['lang'] = NULL;
$arguments527['style'] = NULL;
$arguments527['accesskey'] = NULL;
$arguments527['tabindex'] = NULL;
$arguments527['onclick'] = NULL;
$arguments527['ismap'] = NULL;
$arguments527['longdesc'] = NULL;
$arguments527['usemap'] = NULL;
$renderChildrenClosure528 = function() {return NULL;};
$viewHelper529 = $self->getViewHelper('$viewHelper529', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper529->setArguments($arguments527);
$viewHelper529->setRenderingContext($renderingContext);
$viewHelper529->setRenderChildrenClosure($renderChildrenClosure528);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output526 .= $viewHelper529->initializeArgumentsAndRender();

$output526 .= '
									</span>
								';
return $output526;
};
$viewHelper530 = $self->getViewHelper('$viewHelper530', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper530->setArguments($arguments524);
$viewHelper530->setRenderingContext($renderingContext);
$viewHelper530->setRenderChildrenClosure($renderChildrenClosure525);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output523 .= $viewHelper530->initializeArgumentsAndRender();

$output523 .= '
							</div>
						';
return $output523;
};

$output509 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments510, $renderChildrenClosure511, $renderingContext);

$output509 .= '
				';
return $output509;
};

$output418 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments507, $renderChildrenClosure508, $renderingContext);

$output418 .= '
			';
return $output418;
};
$arguments416['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output531 = '';

$output531 .= '
					<div class="news-img-wrap">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments532 = array();
// Rendering Boolean node
$arguments532['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews', $renderingContext));
$arguments532['then'] = NULL;
$arguments532['else'] = NULL;
$renderChildrenClosure533 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output534 = '';

$output534 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments535 = array();
$renderChildrenClosure536 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output537 = '';

$output537 .= '
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments538 = array();
$arguments538['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments538['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments538['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments538['additionalAttributes'] = NULL;
$arguments538['data'] = NULL;
$arguments538['uriOnly'] = false;
$arguments538['configuration'] = array (
);
$arguments538['content'] = '';
$arguments538['class'] = NULL;
$arguments538['dir'] = NULL;
$arguments538['id'] = NULL;
$arguments538['lang'] = NULL;
$arguments538['style'] = NULL;
$arguments538['accesskey'] = NULL;
$arguments538['tabindex'] = NULL;
$arguments538['onclick'] = NULL;
$arguments538['section'] = NULL;
$renderChildrenClosure539 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output540 = '';

$output540 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments541 = array();
// Rendering Array
$array542 = array();
$array542['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews.0', $renderingContext);
$arguments541['map'] = $array542;
$renderChildrenClosure543 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output544 = '';

$output544 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments545 = array();
// Rendering Boolean node
$arguments545['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 0);
$arguments545['then'] = NULL;
$arguments545['else'] = NULL;
$renderChildrenClosure546 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output547 = '';

$output547 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments548 = array();
$output549 = '';

$output549 .= 'uploads/tx_news/';

$output549 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'image', $renderingContext);
$arguments548['src'] = $output549;
$arguments548['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'title', $renderingContext);
$arguments548['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'alt', $renderingContext);
$arguments548['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments548['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments548['additionalAttributes'] = NULL;
$arguments548['data'] = NULL;
$arguments548['width'] = NULL;
$arguments548['height'] = NULL;
$arguments548['minWidth'] = NULL;
$arguments548['minHeight'] = NULL;
$arguments548['treatIdAsReference'] = false;
$arguments548['image'] = NULL;
$arguments548['crop'] = NULL;
$arguments548['absolute'] = false;
$arguments548['class'] = NULL;
$arguments548['dir'] = NULL;
$arguments548['id'] = NULL;
$arguments548['lang'] = NULL;
$arguments548['style'] = NULL;
$arguments548['accesskey'] = NULL;
$arguments548['tabindex'] = NULL;
$arguments548['onclick'] = NULL;
$arguments548['ismap'] = NULL;
$arguments548['longdesc'] = NULL;
$arguments548['usemap'] = NULL;
$renderChildrenClosure550 = function() {return NULL;};
$viewHelper551 = $self->getViewHelper('$viewHelper551', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper551->setArguments($arguments548);
$viewHelper551->setRenderingContext($renderingContext);
$viewHelper551->setRenderChildrenClosure($renderChildrenClosure550);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output547 .= $viewHelper551->initializeArgumentsAndRender();

$output547 .= '
										';
return $output547;
};

$output544 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments545, $renderChildrenClosure546, $renderingContext);

$output544 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments552 = array();
// Rendering Boolean node
$arguments552['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 1);
$arguments552['then'] = NULL;
$arguments552['else'] = NULL;
$renderChildrenClosure553 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output554 = '';

$output554 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments555 = array();
$arguments555['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array556 = array();
$array556['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments555['arguments'] = $array556;
$arguments555['section'] = NULL;
$arguments555['optional'] = false;
$renderChildrenClosure557 = function() {return NULL;};

$output554 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments555, $renderChildrenClosure557, $renderingContext);

$output554 .= '
										';
return $output554;
};

$output544 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments552, $renderChildrenClosure553, $renderingContext);

$output544 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments558 = array();
// Rendering Boolean node
$arguments558['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 2);
$arguments558['then'] = NULL;
$arguments558['else'] = NULL;
$renderChildrenClosure559 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output560 = '';

$output560 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments561 = array();
$arguments561['partial'] = 'Detail/MediaHtml';
// Rendering Array
$array562 = array();
$array562['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments561['arguments'] = $array562;
$arguments561['section'] = NULL;
$arguments561['optional'] = false;
$renderChildrenClosure563 = function() {return NULL;};

$output560 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments561, $renderChildrenClosure563, $renderingContext);

$output560 .= '
										';
return $output560;
};

$output544 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments558, $renderChildrenClosure559, $renderingContext);

$output544 .= '
									';
return $output544;
};

$output540 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments541, $renderChildrenClosure543, $renderingContext);

$output540 .= '
								';
return $output540;
};
$viewHelper564 = $self->getViewHelper('$viewHelper564', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper564->setArguments($arguments538);
$viewHelper564->setRenderingContext($renderingContext);
$viewHelper564->setRenderChildrenClosure($renderChildrenClosure539);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output537 .= $viewHelper564->initializeArgumentsAndRender();

$output537 .= '
							';
return $output537;
};

$output534 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments535, $renderChildrenClosure536, $renderingContext);

$output534 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments565 = array();
$renderChildrenClosure566 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output567 = '';

$output567 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments568 = array();
// Rendering Boolean node
$arguments568['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments568['then'] = NULL;
$arguments568['else'] = NULL;
$renderChildrenClosure569 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output570 = '';

$output570 .= '
									<span class="no-media-element">
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments571 = array();
$arguments571['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments571['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments571['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments571['additionalAttributes'] = NULL;
$arguments571['data'] = NULL;
$arguments571['uriOnly'] = false;
$arguments571['configuration'] = array (
);
$arguments571['content'] = '';
$arguments571['class'] = NULL;
$arguments571['dir'] = NULL;
$arguments571['id'] = NULL;
$arguments571['lang'] = NULL;
$arguments571['style'] = NULL;
$arguments571['accesskey'] = NULL;
$arguments571['tabindex'] = NULL;
$arguments571['onclick'] = NULL;
$arguments571['section'] = NULL;
$renderChildrenClosure572 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output573 = '';

$output573 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments574 = array();
$arguments574['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments574['title'] = '';
$arguments574['alt'] = '';
$arguments574['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments574['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments574['additionalAttributes'] = NULL;
$arguments574['data'] = NULL;
$arguments574['width'] = NULL;
$arguments574['height'] = NULL;
$arguments574['minWidth'] = NULL;
$arguments574['minHeight'] = NULL;
$arguments574['treatIdAsReference'] = false;
$arguments574['image'] = NULL;
$arguments574['crop'] = NULL;
$arguments574['absolute'] = false;
$arguments574['class'] = NULL;
$arguments574['dir'] = NULL;
$arguments574['id'] = NULL;
$arguments574['lang'] = NULL;
$arguments574['style'] = NULL;
$arguments574['accesskey'] = NULL;
$arguments574['tabindex'] = NULL;
$arguments574['onclick'] = NULL;
$arguments574['ismap'] = NULL;
$arguments574['longdesc'] = NULL;
$arguments574['usemap'] = NULL;
$renderChildrenClosure575 = function() {return NULL;};
$viewHelper576 = $self->getViewHelper('$viewHelper576', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper576->setArguments($arguments574);
$viewHelper576->setRenderingContext($renderingContext);
$viewHelper576->setRenderChildrenClosure($renderChildrenClosure575);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output573 .= $viewHelper576->initializeArgumentsAndRender();

$output573 .= '
										';
return $output573;
};
$viewHelper577 = $self->getViewHelper('$viewHelper577', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper577->setArguments($arguments571);
$viewHelper577->setRenderingContext($renderingContext);
$viewHelper577->setRenderChildrenClosure($renderChildrenClosure572);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output570 .= $viewHelper577->initializeArgumentsAndRender();

$output570 .= '
									</span>
								';
return $output570;
};

$output567 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments568, $renderChildrenClosure569, $renderingContext);

$output567 .= '
							';
return $output567;
};

$output534 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments565, $renderChildrenClosure566, $renderingContext);

$output534 .= '
						';
return $output534;
};
$arguments532['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output578 = '';

$output578 .= '
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments579 = array();
$arguments579['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments579['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments579['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments579['additionalAttributes'] = NULL;
$arguments579['data'] = NULL;
$arguments579['uriOnly'] = false;
$arguments579['configuration'] = array (
);
$arguments579['content'] = '';
$arguments579['class'] = NULL;
$arguments579['dir'] = NULL;
$arguments579['id'] = NULL;
$arguments579['lang'] = NULL;
$arguments579['style'] = NULL;
$arguments579['accesskey'] = NULL;
$arguments579['tabindex'] = NULL;
$arguments579['onclick'] = NULL;
$arguments579['section'] = NULL;
$renderChildrenClosure580 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output581 = '';

$output581 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments582 = array();
// Rendering Array
$array583 = array();
$array583['mediaElement'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews.0', $renderingContext);
$arguments582['map'] = $array583;
$renderChildrenClosure584 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output585 = '';

$output585 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments586 = array();
// Rendering Boolean node
$arguments586['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 0);
$arguments586['then'] = NULL;
$arguments586['else'] = NULL;
$renderChildrenClosure587 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output588 = '';

$output588 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments589 = array();
$output590 = '';

$output590 .= 'uploads/tx_news/';

$output590 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'image', $renderingContext);
$arguments589['src'] = $output590;
$arguments589['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'title', $renderingContext);
$arguments589['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'alt', $renderingContext);
$arguments589['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments589['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments589['additionalAttributes'] = NULL;
$arguments589['data'] = NULL;
$arguments589['width'] = NULL;
$arguments589['height'] = NULL;
$arguments589['minWidth'] = NULL;
$arguments589['minHeight'] = NULL;
$arguments589['treatIdAsReference'] = false;
$arguments589['image'] = NULL;
$arguments589['crop'] = NULL;
$arguments589['absolute'] = false;
$arguments589['class'] = NULL;
$arguments589['dir'] = NULL;
$arguments589['id'] = NULL;
$arguments589['lang'] = NULL;
$arguments589['style'] = NULL;
$arguments589['accesskey'] = NULL;
$arguments589['tabindex'] = NULL;
$arguments589['onclick'] = NULL;
$arguments589['ismap'] = NULL;
$arguments589['longdesc'] = NULL;
$arguments589['usemap'] = NULL;
$renderChildrenClosure591 = function() {return NULL;};
$viewHelper592 = $self->getViewHelper('$viewHelper592', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper592->setArguments($arguments589);
$viewHelper592->setRenderingContext($renderingContext);
$viewHelper592->setRenderChildrenClosure($renderChildrenClosure591);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output588 .= $viewHelper592->initializeArgumentsAndRender();

$output588 .= '
										';
return $output588;
};

$output585 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments586, $renderChildrenClosure587, $renderingContext);

$output585 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments593 = array();
// Rendering Boolean node
$arguments593['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 1);
$arguments593['then'] = NULL;
$arguments593['else'] = NULL;
$renderChildrenClosure594 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output595 = '';

$output595 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments596 = array();
$arguments596['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array597 = array();
$array597['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments596['arguments'] = $array597;
$arguments596['section'] = NULL;
$arguments596['optional'] = false;
$renderChildrenClosure598 = function() {return NULL;};

$output595 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments596, $renderChildrenClosure598, $renderingContext);

$output595 .= '
										';
return $output595;
};

$output585 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments593, $renderChildrenClosure594, $renderingContext);

$output585 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments599 = array();
// Rendering Boolean node
$arguments599['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'type', $renderingContext), 2);
$arguments599['then'] = NULL;
$arguments599['else'] = NULL;
$renderChildrenClosure600 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output601 = '';

$output601 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments602 = array();
$arguments602['partial'] = 'Detail/MediaHtml';
// Rendering Array
$array603 = array();
$array603['mediaElement'] = $currentVariableContainer->getOrNull('mediaElement');
$arguments602['arguments'] = $array603;
$arguments602['section'] = NULL;
$arguments602['optional'] = false;
$renderChildrenClosure604 = function() {return NULL;};

$output601 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments602, $renderChildrenClosure604, $renderingContext);

$output601 .= '
										';
return $output601;
};

$output585 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments599, $renderChildrenClosure600, $renderingContext);

$output585 .= '
									';
return $output585;
};

$output581 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments582, $renderChildrenClosure584, $renderingContext);

$output581 .= '
								';
return $output581;
};
$viewHelper605 = $self->getViewHelper('$viewHelper605', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper605->setArguments($arguments579);
$viewHelper605->setRenderingContext($renderingContext);
$viewHelper605->setRenderChildrenClosure($renderChildrenClosure580);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output578 .= $viewHelper605->initializeArgumentsAndRender();

$output578 .= '
							';
return $output578;
};
$arguments532['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output606 = '';

$output606 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments607 = array();
// Rendering Boolean node
$arguments607['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments607['then'] = NULL;
$arguments607['else'] = NULL;
$renderChildrenClosure608 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output609 = '';

$output609 .= '
									<span class="no-media-element">
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments610 = array();
$arguments610['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments610['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments610['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments610['additionalAttributes'] = NULL;
$arguments610['data'] = NULL;
$arguments610['uriOnly'] = false;
$arguments610['configuration'] = array (
);
$arguments610['content'] = '';
$arguments610['class'] = NULL;
$arguments610['dir'] = NULL;
$arguments610['id'] = NULL;
$arguments610['lang'] = NULL;
$arguments610['style'] = NULL;
$arguments610['accesskey'] = NULL;
$arguments610['tabindex'] = NULL;
$arguments610['onclick'] = NULL;
$arguments610['section'] = NULL;
$renderChildrenClosure611 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output612 = '';

$output612 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments613 = array();
$arguments613['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments613['title'] = '';
$arguments613['alt'] = '';
$arguments613['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments613['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments613['additionalAttributes'] = NULL;
$arguments613['data'] = NULL;
$arguments613['width'] = NULL;
$arguments613['height'] = NULL;
$arguments613['minWidth'] = NULL;
$arguments613['minHeight'] = NULL;
$arguments613['treatIdAsReference'] = false;
$arguments613['image'] = NULL;
$arguments613['crop'] = NULL;
$arguments613['absolute'] = false;
$arguments613['class'] = NULL;
$arguments613['dir'] = NULL;
$arguments613['id'] = NULL;
$arguments613['lang'] = NULL;
$arguments613['style'] = NULL;
$arguments613['accesskey'] = NULL;
$arguments613['tabindex'] = NULL;
$arguments613['onclick'] = NULL;
$arguments613['ismap'] = NULL;
$arguments613['longdesc'] = NULL;
$arguments613['usemap'] = NULL;
$renderChildrenClosure614 = function() {return NULL;};
$viewHelper615 = $self->getViewHelper('$viewHelper615', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper615->setArguments($arguments613);
$viewHelper615->setRenderingContext($renderingContext);
$viewHelper615->setRenderChildrenClosure($renderChildrenClosure614);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output612 .= $viewHelper615->initializeArgumentsAndRender();

$output612 .= '
										';
return $output612;
};
$viewHelper616 = $self->getViewHelper('$viewHelper616', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper616->setArguments($arguments610);
$viewHelper616->setRenderingContext($renderingContext);
$viewHelper616->setRenderChildrenClosure($renderChildrenClosure611);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output609 .= $viewHelper616->initializeArgumentsAndRender();

$output609 .= '
									</span>
								';
return $output609;
};

$output606 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments607, $renderChildrenClosure608, $renderingContext);

$output606 .= '
							';
return $output606;
};

$output531 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments532, $renderChildrenClosure533, $renderingContext);

$output531 .= '

					</div>
				';
return $output531;
};
$arguments416['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output617 = '';

$output617 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments618 = array();
// Rendering Boolean node
$arguments618['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments618['then'] = NULL;
$arguments618['else'] = NULL;
$renderChildrenClosure619 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output620 = '';

$output620 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments621 = array();
$renderChildrenClosure622 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output623 = '';

$output623 .= '
							<div class="news-img-wrap">
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments624 = array();
$arguments624['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments624['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments624['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments624['additionalAttributes'] = NULL;
$arguments624['data'] = NULL;
$arguments624['uriOnly'] = false;
$arguments624['configuration'] = array (
);
$arguments624['content'] = '';
$arguments624['class'] = NULL;
$arguments624['dir'] = NULL;
$arguments624['id'] = NULL;
$arguments624['lang'] = NULL;
$arguments624['style'] = NULL;
$arguments624['accesskey'] = NULL;
$arguments624['tabindex'] = NULL;
$arguments624['onclick'] = NULL;
$arguments624['section'] = NULL;
$renderChildrenClosure625 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output626 = '';

$output626 .= '
									<span class="no-media-element">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments627 = array();
$arguments627['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments627['title'] = '';
$arguments627['alt'] = '';
$arguments627['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments627['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments627['additionalAttributes'] = NULL;
$arguments627['data'] = NULL;
$arguments627['width'] = NULL;
$arguments627['height'] = NULL;
$arguments627['minWidth'] = NULL;
$arguments627['minHeight'] = NULL;
$arguments627['treatIdAsReference'] = false;
$arguments627['image'] = NULL;
$arguments627['crop'] = NULL;
$arguments627['absolute'] = false;
$arguments627['class'] = NULL;
$arguments627['dir'] = NULL;
$arguments627['id'] = NULL;
$arguments627['lang'] = NULL;
$arguments627['style'] = NULL;
$arguments627['accesskey'] = NULL;
$arguments627['tabindex'] = NULL;
$arguments627['onclick'] = NULL;
$arguments627['ismap'] = NULL;
$arguments627['longdesc'] = NULL;
$arguments627['usemap'] = NULL;
$renderChildrenClosure628 = function() {return NULL;};
$viewHelper629 = $self->getViewHelper('$viewHelper629', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper629->setArguments($arguments627);
$viewHelper629->setRenderingContext($renderingContext);
$viewHelper629->setRenderChildrenClosure($renderChildrenClosure628);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output626 .= $viewHelper629->initializeArgumentsAndRender();

$output626 .= '
									</span>
								';
return $output626;
};
$viewHelper630 = $self->getViewHelper('$viewHelper630', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper630->setArguments($arguments624);
$viewHelper630->setRenderingContext($renderingContext);
$viewHelper630->setRenderChildrenClosure($renderChildrenClosure625);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output623 .= $viewHelper630->initializeArgumentsAndRender();

$output623 .= '
							</div>
						';
return $output623;
};

$output620 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments621, $renderChildrenClosure622, $renderingContext);

$output620 .= '
					';
return $output620;
};
$arguments618['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output631 = '';

$output631 .= '
							<div class="news-img-wrap">
								';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments632 = array();
$arguments632['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments632['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments632['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments632['additionalAttributes'] = NULL;
$arguments632['data'] = NULL;
$arguments632['uriOnly'] = false;
$arguments632['configuration'] = array (
);
$arguments632['content'] = '';
$arguments632['class'] = NULL;
$arguments632['dir'] = NULL;
$arguments632['id'] = NULL;
$arguments632['lang'] = NULL;
$arguments632['style'] = NULL;
$arguments632['accesskey'] = NULL;
$arguments632['tabindex'] = NULL;
$arguments632['onclick'] = NULL;
$arguments632['section'] = NULL;
$renderChildrenClosure633 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output634 = '';

$output634 .= '
									<span class="no-media-element">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments635 = array();
$arguments635['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments635['title'] = '';
$arguments635['alt'] = '';
$arguments635['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments635['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments635['additionalAttributes'] = NULL;
$arguments635['data'] = NULL;
$arguments635['width'] = NULL;
$arguments635['height'] = NULL;
$arguments635['minWidth'] = NULL;
$arguments635['minHeight'] = NULL;
$arguments635['treatIdAsReference'] = false;
$arguments635['image'] = NULL;
$arguments635['crop'] = NULL;
$arguments635['absolute'] = false;
$arguments635['class'] = NULL;
$arguments635['dir'] = NULL;
$arguments635['id'] = NULL;
$arguments635['lang'] = NULL;
$arguments635['style'] = NULL;
$arguments635['accesskey'] = NULL;
$arguments635['tabindex'] = NULL;
$arguments635['onclick'] = NULL;
$arguments635['ismap'] = NULL;
$arguments635['longdesc'] = NULL;
$arguments635['usemap'] = NULL;
$renderChildrenClosure636 = function() {return NULL;};
$viewHelper637 = $self->getViewHelper('$viewHelper637', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper637->setArguments($arguments635);
$viewHelper637->setRenderingContext($renderingContext);
$viewHelper637->setRenderChildrenClosure($renderChildrenClosure636);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output634 .= $viewHelper637->initializeArgumentsAndRender();

$output634 .= '
									</span>
								';
return $output634;
};
$viewHelper638 = $self->getViewHelper('$viewHelper638', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper638->setArguments($arguments632);
$viewHelper638->setRenderingContext($renderingContext);
$viewHelper638->setRenderChildrenClosure($renderChildrenClosure633);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output631 .= $viewHelper638->initializeArgumentsAndRender();

$output631 .= '
							</div>
						';
return $output631;
};

$output617 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments618, $renderChildrenClosure619, $renderingContext);

$output617 .= '
				';
return $output617;
};

$output415 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments416, $renderChildrenClosure417, $renderingContext);

$output415 .= '

		';
return $output415;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '


	<!-- teaser -->
	<div class="teaser-text">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments639 = array();
// Rendering Boolean node
$arguments639['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext));
$arguments639['then'] = NULL;
$arguments639['else'] = NULL;
$renderChildrenClosure640 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output641 = '';

$output641 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments642 = array();
$renderChildrenClosure643 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output644 = '';

$output644 .= '
				<span itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments645 = array();
$arguments645['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure646 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments647 = array();
$arguments647['maxCharacters'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'cropMaxCharacters', $renderingContext);
// Rendering Boolean node
$arguments647['respectWordBoundaries'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments647['append'] = '...';
$arguments647['respectHtml'] = true;
$renderChildrenClosure648 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext);
};
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments647, $renderChildrenClosure648, $renderingContext);
};

$output644 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments645, $renderChildrenClosure646, $renderingContext);

$output644 .= '</span>
			';
return $output644;
};

$output641 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments642, $renderChildrenClosure643, $renderingContext);

$output641 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments649 = array();
$renderChildrenClosure650 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output651 = '';

$output651 .= '
				<span itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments652 = array();
$arguments652['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure653 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments654 = array();
$arguments654['maxCharacters'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'cropMaxCharacters', $renderingContext);
// Rendering Boolean node
$arguments654['respectWordBoundaries'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments654['append'] = '...';
$arguments654['respectHtml'] = true;
$renderChildrenClosure655 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'bodytext', $renderingContext);
};
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments654, $renderChildrenClosure655, $renderingContext);
};

$output651 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments652, $renderChildrenClosure653, $renderingContext);

$output651 .= '</span>
			';
return $output651;
};

$output641 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments649, $renderChildrenClosure650, $renderingContext);

$output641 .= '
		';
return $output641;
};
$arguments639['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output656 = '';

$output656 .= '
				<span itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments657 = array();
$arguments657['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure658 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments659 = array();
$arguments659['maxCharacters'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'cropMaxCharacters', $renderingContext);
// Rendering Boolean node
$arguments659['respectWordBoundaries'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments659['append'] = '...';
$arguments659['respectHtml'] = true;
$renderChildrenClosure660 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext);
};
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments659, $renderChildrenClosure660, $renderingContext);
};

$output656 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments657, $renderChildrenClosure658, $renderingContext);

$output656 .= '</span>
			';
return $output656;
};
$arguments639['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output661 = '';

$output661 .= '
				<span itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments662 = array();
$arguments662['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure663 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments664 = array();
$arguments664['maxCharacters'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'cropMaxCharacters', $renderingContext);
// Rendering Boolean node
$arguments664['respectWordBoundaries'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments664['append'] = '...';
$arguments664['respectHtml'] = true;
$renderChildrenClosure665 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'bodytext', $renderingContext);
};
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments664, $renderChildrenClosure665, $renderingContext);
};

$output661 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments662, $renderChildrenClosure663, $renderingContext);

$output661 .= '</span>
			';
return $output661;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments639, $renderChildrenClosure640, $renderingContext);

$output0 .= '

		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments666 = array();
$arguments666['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments666['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments666['class'] = 'more';
$arguments666['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments666['additionalAttributes'] = NULL;
$arguments666['data'] = NULL;
$arguments666['uriOnly'] = false;
$arguments666['configuration'] = array (
);
$arguments666['content'] = '';
$arguments666['dir'] = NULL;
$arguments666['id'] = NULL;
$arguments666['lang'] = NULL;
$arguments666['style'] = NULL;
$arguments666['accesskey'] = NULL;
$arguments666['tabindex'] = NULL;
$arguments666['onclick'] = NULL;
$arguments666['section'] = NULL;
$renderChildrenClosure667 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output668 = '';

$output668 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments669 = array();
$arguments669['key'] = 'more-link';
$arguments669['id'] = NULL;
$arguments669['default'] = NULL;
$arguments669['htmlEscape'] = NULL;
$arguments669['arguments'] = NULL;
$arguments669['extensionName'] = NULL;
$renderChildrenClosure670 = function() {return NULL;};

$output668 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments669, $renderChildrenClosure670, $renderingContext);

$output668 .= '
		';
return $output668;
};
$viewHelper671 = $self->getViewHelper('$viewHelper671', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper671->setArguments($arguments666);
$viewHelper671->setRenderingContext($renderingContext);
$viewHelper671->setRenderChildrenClosure($renderChildrenClosure667);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output0 .= $viewHelper671->initializeArgumentsAndRender();

$output0 .= '
	</div>

	<!-- footer information -->
	<div class="footer">
		<p>
			<!-- date -->
			<span class="news-list-date">
				<time datetime="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments672 = array();
$arguments672['date'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'datetime', $renderingContext);
$arguments672['format'] = 'Y-m-d';
$arguments672['base'] = NULL;
$renderChildrenClosure673 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments672, $renderChildrenClosure673, $renderingContext);

$output0 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments674 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments675 = array();
$arguments675['key'] = 'dateFormat';
$arguments675['id'] = NULL;
$arguments675['default'] = NULL;
$arguments675['htmlEscape'] = NULL;
$arguments675['arguments'] = NULL;
$arguments675['extensionName'] = NULL;
$renderChildrenClosure676 = function() {return NULL;};
$arguments674['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments675, $renderChildrenClosure676, $renderingContext);
$arguments674['date'] = NULL;
$arguments674['base'] = NULL;
$renderChildrenClosure677 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'datetime', $renderingContext);
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments674, $renderChildrenClosure677, $renderingContext);

$output0 .= '
					<meta itemprop="datePublished" content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments678 = array();
$arguments678['date'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'datetime', $renderingContext);
$arguments678['format'] = 'Y-m-d';
$arguments678['base'] = NULL;
$renderChildrenClosure679 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments678, $renderChildrenClosure679, $renderingContext);

$output0 .= '" />
				</time>
			</span>

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments680 = array();
// Rendering Boolean node
$arguments680['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'firstCategory', $renderingContext));
$arguments680['then'] = NULL;
$arguments680['else'] = NULL;
$renderChildrenClosure681 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output682 = '';

$output682 .= '
				<!-- first category -->
				<span class="news-list-category">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments683 = array();
$arguments683['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'firstCategory.title', $renderingContext);
$arguments683['keepQuotes'] = false;
$arguments683['encoding'] = NULL;
$arguments683['doubleEncode'] = true;
$renderChildrenClosure684 = function() {return NULL;};
$value685 = ($arguments683['value'] !== NULL ? $arguments683['value'] : $renderChildrenClosure684());

$output682 .= (!is_string($value685) ? $value685 : htmlspecialchars($value685, ($arguments683['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments683['encoding'] !== NULL ? $arguments683['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments683['doubleEncode']));

$output682 .= '</span>
			';
return $output682;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments680, $renderChildrenClosure681, $renderingContext);

$output0 .= '

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments686 = array();
// Rendering Boolean node
$arguments686['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'tags', $renderingContext));
$arguments686['then'] = NULL;
$arguments686['else'] = NULL;
$renderChildrenClosure687 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output688 = '';

$output688 .= '
				<!-- Tags -->
				<span class="news-list-tags" itemprop="keywords">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments689 = array();
$arguments689['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'tags', $renderingContext);
$arguments689['as'] = 'tag';
$arguments689['key'] = '';
$arguments689['reverse'] = false;
$arguments689['iteration'] = NULL;
$renderChildrenClosure690 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output691 = '';

$output691 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments692 = array();
$arguments692['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('tag'), 'title', $renderingContext);
$arguments692['keepQuotes'] = false;
$arguments692['encoding'] = NULL;
$arguments692['doubleEncode'] = true;
$renderChildrenClosure693 = function() {return NULL;};
$value694 = ($arguments692['value'] !== NULL ? $arguments692['value'] : $renderChildrenClosure693());

$output691 .= (!is_string($value694) ? $value694 : htmlspecialchars($value694, ($arguments692['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments692['encoding'] !== NULL ? $arguments692['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments692['doubleEncode']));

$output691 .= '
					';
return $output691;
};

$output688 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments689, $renderChildrenClosure690, $renderingContext);

$output688 .= '
				</span>
			';
return $output688;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments686, $renderChildrenClosure687, $renderingContext);

$output0 .= '

			<!-- author -->
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments695 = array();
// Rendering Boolean node
$arguments695['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'author', $renderingContext));
$arguments695['then'] = NULL;
$arguments695['else'] = NULL;
$renderChildrenClosure696 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output697 = '';

$output697 .= '
				<span class="news-list-author">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments698 = array();
$arguments698['key'] = 'author';
// Rendering Array
$array699 = array();
$array699['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'author', $renderingContext);
$arguments698['arguments'] = $array699;
$arguments698['id'] = NULL;
$arguments698['default'] = NULL;
$arguments698['htmlEscape'] = NULL;
$arguments698['extensionName'] = NULL;
$renderChildrenClosure700 = function() {return NULL;};

$output697 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments698, $renderChildrenClosure700, $renderingContext);

$output697 .= '
				</span>
			';
return $output697;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments695, $renderChildrenClosure696, $renderingContext);

$output0 .= '
		</p>
	</div>
</div>
';


return $output0;
}


}
#1464993226    237120    