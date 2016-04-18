<?php
class FluidCache_News_News_partial_Detail_Opengraph_7b672f8d83bcae8bb8539db58311419cbc4aafc2 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'alternativeTitle', $renderingContext));
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
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments6 = array();
$arguments6['property'] = 'og:title';
$arguments6['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'alternativeTitle', $renderingContext);
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['useCurrentDomain'] = false;
$arguments6['forceAbsoluteUrl'] = false;
$arguments6['name'] = NULL;
$renderChildrenClosure7 = function() {return NULL;};
$viewHelper8 = $self->getViewHelper('$viewHelper8', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper8->setArguments($arguments6);
$viewHelper8->setRenderingContext($renderingContext);
$viewHelper8->setRenderChildrenClosure($renderChildrenClosure7);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
return $viewHelper8->initializeArgumentsAndRender();
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments9 = array();
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments11 = array();
$arguments11['property'] = 'og:title';
$arguments11['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['useCurrentDomain'] = false;
$arguments11['forceAbsoluteUrl'] = false;
$arguments11['name'] = NULL;
$renderChildrenClosure12 = function() {return NULL;};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper13->setArguments($arguments11);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
return $viewHelper13->initializeArgumentsAndRender();
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output3 .= '
';
return $output3;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments14 = array();
$arguments14['property'] = 'og:title';
$arguments14['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'alternativeTitle', $renderingContext);
$arguments14['additionalAttributes'] = NULL;
$arguments14['data'] = NULL;
$arguments14['useCurrentDomain'] = false;
$arguments14['forceAbsoluteUrl'] = false;
$arguments14['name'] = NULL;
$renderChildrenClosure15 = function() {return NULL;};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper16->setArguments($arguments14);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
return $viewHelper16->initializeArgumentsAndRender();
};
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments17 = array();
$arguments17['property'] = 'og:title';
$arguments17['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['useCurrentDomain'] = false;
$arguments17['forceAbsoluteUrl'] = false;
$arguments17['name'] = NULL;
$renderChildrenClosure18 = function() {return NULL;};
$viewHelper19 = $self->getViewHelper('$viewHelper19', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper19->setArguments($arguments17);
$viewHelper19->setRenderingContext($renderingContext);
$viewHelper19->setRenderChildrenClosure($renderChildrenClosure18);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
return $viewHelper19->initializeArgumentsAndRender();
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments20 = array();
$arguments20['property'] = 'og:type';
$arguments20['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.type', $renderingContext);
$arguments20['additionalAttributes'] = NULL;
$arguments20['data'] = NULL;
$arguments20['useCurrentDomain'] = false;
$arguments20['forceAbsoluteUrl'] = false;
$arguments20['name'] = NULL;
$renderChildrenClosure21 = function() {return NULL;};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper22->setArguments($arguments20);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper22->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments23 = array();
$arguments23['property'] = 'og:url';
$arguments23['content'] = '';
// Rendering Boolean node
$arguments23['useCurrentDomain'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments23['additionalAttributes'] = NULL;
$arguments23['data'] = NULL;
$arguments23['forceAbsoluteUrl'] = false;
$arguments23['name'] = NULL;
$renderChildrenClosure24 = function() {return NULL;};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper25->setArguments($arguments23);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper25->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments26 = array();
$arguments26['property'] = 'og:site_name';
$arguments26['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.site_name', $renderingContext);
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['useCurrentDomain'] = false;
$arguments26['forceAbsoluteUrl'] = false;
$arguments26['name'] = NULL;
$renderChildrenClosure27 = function() {return NULL;};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper28->setArguments($arguments26);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper28->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments29 = array();
// Rendering Boolean node
$arguments29['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'firstFalImagePreview', $renderingContext));
$arguments29['then'] = NULL;
$arguments29['else'] = NULL;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments32 = array();
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output34 = '';

$output34 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments35 = array();
$arguments35['property'] = 'og:image';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments36 = array();
$arguments36['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'firstFalImagePreview.uid', $renderingContext);
// Rendering Boolean node
$arguments36['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments36['maxWidth'] = '500';
$arguments36['image'] = NULL;
$arguments36['width'] = NULL;
$arguments36['height'] = NULL;
$arguments36['minWidth'] = NULL;
$arguments36['minHeight'] = NULL;
$arguments36['maxHeight'] = NULL;
$arguments36['crop'] = NULL;
$arguments36['absolute'] = false;
$renderChildrenClosure37 = function() {return NULL;};
$arguments35['content'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);
// Rendering Boolean node
$arguments35['forceAbsoluteUrl'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments35['additionalAttributes'] = NULL;
$arguments35['data'] = NULL;
$arguments35['useCurrentDomain'] = false;
$arguments35['name'] = NULL;
$renderChildrenClosure38 = function() {return NULL;};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper39->setArguments($arguments35);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure38);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output34 .= $viewHelper39->initializeArgumentsAndRender();

$output34 .= '
	';
return $output34;
};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments40 = array();
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output42 = '';

$output42 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments43 = array();
// Rendering Boolean node
$arguments43['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'firstImagePreview.image', $renderingContext));
$arguments43['then'] = NULL;
$arguments43['else'] = NULL;
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output45 = '';

$output45 .= '
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments46 = array();
$arguments46['property'] = 'og:image';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments47 = array();
$output48 = '';

$output48 .= 'uploads/tx_news/';

$output48 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'firstImagePreview.image', $renderingContext);
$arguments47['src'] = $output48;
$arguments47['maxWidth'] = '500';
$arguments47['image'] = NULL;
$arguments47['width'] = NULL;
$arguments47['height'] = NULL;
$arguments47['minWidth'] = NULL;
$arguments47['minHeight'] = NULL;
$arguments47['maxHeight'] = NULL;
$arguments47['treatIdAsReference'] = false;
$arguments47['crop'] = NULL;
$arguments47['absolute'] = false;
$renderChildrenClosure49 = function() {return NULL;};
$arguments46['content'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments47, $renderChildrenClosure49, $renderingContext);
// Rendering Boolean node
$arguments46['forceAbsoluteUrl'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['useCurrentDomain'] = false;
$arguments46['name'] = NULL;
$renderChildrenClosure50 = function() {return NULL;};
$viewHelper51 = $self->getViewHelper('$viewHelper51', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper51->setArguments($arguments46);
$viewHelper51->setRenderingContext($renderingContext);
$viewHelper51->setRenderChildrenClosure($renderChildrenClosure50);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output45 .= $viewHelper51->initializeArgumentsAndRender();

$output45 .= '
		';
return $output45;
};

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
	';
return $output42;
};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output31 .= '
';
return $output31;
};
$arguments29['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output52 = '';

$output52 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments53 = array();
$arguments53['property'] = 'og:image';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments54 = array();
$arguments54['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'firstFalImagePreview.uid', $renderingContext);
// Rendering Boolean node
$arguments54['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments54['maxWidth'] = '500';
$arguments54['image'] = NULL;
$arguments54['width'] = NULL;
$arguments54['height'] = NULL;
$arguments54['minWidth'] = NULL;
$arguments54['minHeight'] = NULL;
$arguments54['maxHeight'] = NULL;
$arguments54['crop'] = NULL;
$arguments54['absolute'] = false;
$renderChildrenClosure55 = function() {return NULL;};
$arguments53['content'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);
// Rendering Boolean node
$arguments53['forceAbsoluteUrl'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments53['additionalAttributes'] = NULL;
$arguments53['data'] = NULL;
$arguments53['useCurrentDomain'] = false;
$arguments53['name'] = NULL;
$renderChildrenClosure56 = function() {return NULL;};
$viewHelper57 = $self->getViewHelper('$viewHelper57', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper57->setArguments($arguments53);
$viewHelper57->setRenderingContext($renderingContext);
$viewHelper57->setRenderChildrenClosure($renderChildrenClosure56);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output52 .= $viewHelper57->initializeArgumentsAndRender();

$output52 .= '
	';
return $output52;
};
$arguments29['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output58 = '';

$output58 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments59 = array();
// Rendering Boolean node
$arguments59['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'firstImagePreview.image', $renderingContext));
$arguments59['then'] = NULL;
$arguments59['else'] = NULL;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output61 = '';

$output61 .= '
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments62 = array();
$arguments62['property'] = 'og:image';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments63 = array();
$output64 = '';

$output64 .= 'uploads/tx_news/';

$output64 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'firstImagePreview.image', $renderingContext);
$arguments63['src'] = $output64;
$arguments63['maxWidth'] = '500';
$arguments63['image'] = NULL;
$arguments63['width'] = NULL;
$arguments63['height'] = NULL;
$arguments63['minWidth'] = NULL;
$arguments63['minHeight'] = NULL;
$arguments63['maxHeight'] = NULL;
$arguments63['treatIdAsReference'] = false;
$arguments63['crop'] = NULL;
$arguments63['absolute'] = false;
$renderChildrenClosure65 = function() {return NULL;};
$arguments62['content'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments63, $renderChildrenClosure65, $renderingContext);
// Rendering Boolean node
$arguments62['forceAbsoluteUrl'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments62['additionalAttributes'] = NULL;
$arguments62['data'] = NULL;
$arguments62['useCurrentDomain'] = false;
$arguments62['name'] = NULL;
$renderChildrenClosure66 = function() {return NULL;};
$viewHelper67 = $self->getViewHelper('$viewHelper67', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper67->setArguments($arguments62);
$viewHelper67->setRenderingContext($renderingContext);
$viewHelper67->setRenderChildrenClosure($renderChildrenClosure66);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output61 .= $viewHelper67->initializeArgumentsAndRender();

$output61 .= '
		';
return $output61;
};

$output58 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '
	';
return $output58;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments68 = array();
// Rendering Boolean node
$arguments68['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'description', $renderingContext));
$arguments68['then'] = NULL;
$arguments68['else'] = NULL;
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output70 = '';

$output70 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments71 = array();
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output73 = '';

$output73 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments74 = array();
$arguments74['name'] = 'description';
$arguments74['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'description', $renderingContext);
$arguments74['additionalAttributes'] = NULL;
$arguments74['data'] = NULL;
$arguments74['useCurrentDomain'] = false;
$arguments74['forceAbsoluteUrl'] = false;
$arguments74['property'] = NULL;
$renderChildrenClosure75 = function() {return NULL;};
$viewHelper76 = $self->getViewHelper('$viewHelper76', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper76->setArguments($arguments74);
$viewHelper76->setRenderingContext($renderingContext);
$viewHelper76->setRenderChildrenClosure($renderChildrenClosure75);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output73 .= $viewHelper76->initializeArgumentsAndRender();

$output73 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments77 = array();
$arguments77['property'] = 'og:description';
$arguments77['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'description', $renderingContext);
$arguments77['additionalAttributes'] = NULL;
$arguments77['data'] = NULL;
$arguments77['useCurrentDomain'] = false;
$arguments77['forceAbsoluteUrl'] = false;
$arguments77['name'] = NULL;
$renderChildrenClosure78 = function() {return NULL;};
$viewHelper79 = $self->getViewHelper('$viewHelper79', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper79->setArguments($arguments77);
$viewHelper79->setRenderingContext($renderingContext);
$viewHelper79->setRenderChildrenClosure($renderChildrenClosure78);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output73 .= $viewHelper79->initializeArgumentsAndRender();

$output73 .= '
	';
return $output73;
};

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments80 = array();
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output82 = '';

$output82 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments83 = array();
$arguments83['name'] = 'description';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
$arguments84 = array();
$arguments84['value'] = NULL;
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext);
};
$arguments83['content'] = TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);
$arguments83['additionalAttributes'] = NULL;
$arguments83['data'] = NULL;
$arguments83['useCurrentDomain'] = false;
$arguments83['forceAbsoluteUrl'] = false;
$arguments83['property'] = NULL;
$renderChildrenClosure86 = function() {return NULL;};
$viewHelper87 = $self->getViewHelper('$viewHelper87', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper87->setArguments($arguments83);
$viewHelper87->setRenderingContext($renderingContext);
$viewHelper87->setRenderChildrenClosure($renderChildrenClosure86);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output82 .= $viewHelper87->initializeArgumentsAndRender();

$output82 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments88 = array();
$arguments88['property'] = 'og:description';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
$arguments89 = array();
$arguments89['value'] = NULL;
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext);
};
$arguments88['content'] = TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);
$arguments88['additionalAttributes'] = NULL;
$arguments88['data'] = NULL;
$arguments88['useCurrentDomain'] = false;
$arguments88['forceAbsoluteUrl'] = false;
$arguments88['name'] = NULL;
$renderChildrenClosure91 = function() {return NULL;};
$viewHelper92 = $self->getViewHelper('$viewHelper92', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper92->setArguments($arguments88);
$viewHelper92->setRenderingContext($renderingContext);
$viewHelper92->setRenderChildrenClosure($renderChildrenClosure91);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output82 .= $viewHelper92->initializeArgumentsAndRender();

$output82 .= '
	';
return $output82;
};

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output70 .= '
';
return $output70;
};
$arguments68['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output93 = '';

$output93 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments94 = array();
$arguments94['name'] = 'description';
$arguments94['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'description', $renderingContext);
$arguments94['additionalAttributes'] = NULL;
$arguments94['data'] = NULL;
$arguments94['useCurrentDomain'] = false;
$arguments94['forceAbsoluteUrl'] = false;
$arguments94['property'] = NULL;
$renderChildrenClosure95 = function() {return NULL;};
$viewHelper96 = $self->getViewHelper('$viewHelper96', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper96->setArguments($arguments94);
$viewHelper96->setRenderingContext($renderingContext);
$viewHelper96->setRenderChildrenClosure($renderChildrenClosure95);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output93 .= $viewHelper96->initializeArgumentsAndRender();

$output93 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments97 = array();
$arguments97['property'] = 'og:description';
$arguments97['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'description', $renderingContext);
$arguments97['additionalAttributes'] = NULL;
$arguments97['data'] = NULL;
$arguments97['useCurrentDomain'] = false;
$arguments97['forceAbsoluteUrl'] = false;
$arguments97['name'] = NULL;
$renderChildrenClosure98 = function() {return NULL;};
$viewHelper99 = $self->getViewHelper('$viewHelper99', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper99->setArguments($arguments97);
$viewHelper99->setRenderingContext($renderingContext);
$viewHelper99->setRenderChildrenClosure($renderChildrenClosure98);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output93 .= $viewHelper99->initializeArgumentsAndRender();

$output93 .= '
	';
return $output93;
};
$arguments68['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output100 = '';

$output100 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments101 = array();
$arguments101['name'] = 'description';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
$arguments102 = array();
$arguments102['value'] = NULL;
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext);
};
$arguments101['content'] = TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);
$arguments101['additionalAttributes'] = NULL;
$arguments101['data'] = NULL;
$arguments101['useCurrentDomain'] = false;
$arguments101['forceAbsoluteUrl'] = false;
$arguments101['property'] = NULL;
$renderChildrenClosure104 = function() {return NULL;};
$viewHelper105 = $self->getViewHelper('$viewHelper105', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper105->setArguments($arguments101);
$viewHelper105->setRenderingContext($renderingContext);
$viewHelper105->setRenderChildrenClosure($renderChildrenClosure104);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output100 .= $viewHelper105->initializeArgumentsAndRender();

$output100 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments106 = array();
$arguments106['property'] = 'og:description';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
$arguments107 = array();
$arguments107['value'] = NULL;
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext);
};
$arguments106['content'] = TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);
$arguments106['additionalAttributes'] = NULL;
$arguments106['data'] = NULL;
$arguments106['useCurrentDomain'] = false;
$arguments106['forceAbsoluteUrl'] = false;
$arguments106['name'] = NULL;
$renderChildrenClosure109 = function() {return NULL;};
$viewHelper110 = $self->getViewHelper('$viewHelper110', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper110->setArguments($arguments106);
$viewHelper110->setRenderingContext($renderingContext);
$viewHelper110->setRenderChildrenClosure($renderChildrenClosure109);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output100 .= $viewHelper110->initializeArgumentsAndRender();

$output100 .= '
	';
return $output100;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments111 = array();
$arguments111['name'] = 'keywords';
$arguments111['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'keywords', $renderingContext);
$arguments111['additionalAttributes'] = NULL;
$arguments111['data'] = NULL;
$arguments111['useCurrentDomain'] = false;
$arguments111['forceAbsoluteUrl'] = false;
$arguments111['property'] = NULL;
$renderChildrenClosure112 = function() {return NULL;};
$viewHelper113 = $self->getViewHelper('$viewHelper113', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper113->setArguments($arguments111);
$viewHelper113->setRenderingContext($renderingContext);
$viewHelper113->setRenderChildrenClosure($renderChildrenClosure112);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper113->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments114 = array();
$arguments114['property'] = 'fb:admins';
$arguments114['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.admins', $renderingContext);
$arguments114['additionalAttributes'] = NULL;
$arguments114['data'] = NULL;
$arguments114['useCurrentDomain'] = false;
$arguments114['forceAbsoluteUrl'] = false;
$arguments114['name'] = NULL;
$renderChildrenClosure115 = function() {return NULL;};
$viewHelper116 = $self->getViewHelper('$viewHelper116', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper116->setArguments($arguments114);
$viewHelper116->setRenderingContext($renderingContext);
$viewHelper116->setRenderChildrenClosure($renderChildrenClosure115);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper116->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments117 = array();
$arguments117['property'] = 'og:email';
$arguments117['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.email', $renderingContext);
$arguments117['additionalAttributes'] = NULL;
$arguments117['data'] = NULL;
$arguments117['useCurrentDomain'] = false;
$arguments117['forceAbsoluteUrl'] = false;
$arguments117['name'] = NULL;
$renderChildrenClosure118 = function() {return NULL;};
$viewHelper119 = $self->getViewHelper('$viewHelper119', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper119->setArguments($arguments117);
$viewHelper119->setRenderingContext($renderingContext);
$viewHelper119->setRenderChildrenClosure($renderChildrenClosure118);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper119->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments120 = array();
$arguments120['property'] = 'og:phone_number';
$arguments120['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.phone_number', $renderingContext);
$arguments120['additionalAttributes'] = NULL;
$arguments120['data'] = NULL;
$arguments120['useCurrentDomain'] = false;
$arguments120['forceAbsoluteUrl'] = false;
$arguments120['name'] = NULL;
$renderChildrenClosure121 = function() {return NULL;};
$viewHelper122 = $self->getViewHelper('$viewHelper122', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper122->setArguments($arguments120);
$viewHelper122->setRenderingContext($renderingContext);
$viewHelper122->setRenderChildrenClosure($renderChildrenClosure121);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper122->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments123 = array();
$arguments123['property'] = 'og:fax_number';
$arguments123['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.fax_number', $renderingContext);
$arguments123['additionalAttributes'] = NULL;
$arguments123['data'] = NULL;
$arguments123['useCurrentDomain'] = false;
$arguments123['forceAbsoluteUrl'] = false;
$arguments123['name'] = NULL;
$renderChildrenClosure124 = function() {return NULL;};
$viewHelper125 = $self->getViewHelper('$viewHelper125', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper125->setArguments($arguments123);
$viewHelper125->setRenderingContext($renderingContext);
$viewHelper125->setRenderChildrenClosure($renderChildrenClosure124);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper125->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments126 = array();
$arguments126['property'] = 'og:latitude';
$arguments126['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.latitude', $renderingContext);
$arguments126['additionalAttributes'] = NULL;
$arguments126['data'] = NULL;
$arguments126['useCurrentDomain'] = false;
$arguments126['forceAbsoluteUrl'] = false;
$arguments126['name'] = NULL;
$renderChildrenClosure127 = function() {return NULL;};
$viewHelper128 = $self->getViewHelper('$viewHelper128', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper128->setArguments($arguments126);
$viewHelper128->setRenderingContext($renderingContext);
$viewHelper128->setRenderChildrenClosure($renderChildrenClosure127);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper128->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments129 = array();
$arguments129['property'] = 'og:longitude';
$arguments129['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.longitude', $renderingContext);
$arguments129['additionalAttributes'] = NULL;
$arguments129['data'] = NULL;
$arguments129['useCurrentDomain'] = false;
$arguments129['forceAbsoluteUrl'] = false;
$arguments129['name'] = NULL;
$renderChildrenClosure130 = function() {return NULL;};
$viewHelper131 = $self->getViewHelper('$viewHelper131', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper131->setArguments($arguments129);
$viewHelper131->setRenderingContext($renderingContext);
$viewHelper131->setRenderChildrenClosure($renderChildrenClosure130);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper131->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments132 = array();
$arguments132['property'] = 'og:street-address';
$arguments132['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.street-address', $renderingContext);
$arguments132['additionalAttributes'] = NULL;
$arguments132['data'] = NULL;
$arguments132['useCurrentDomain'] = false;
$arguments132['forceAbsoluteUrl'] = false;
$arguments132['name'] = NULL;
$renderChildrenClosure133 = function() {return NULL;};
$viewHelper134 = $self->getViewHelper('$viewHelper134', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper134->setArguments($arguments132);
$viewHelper134->setRenderingContext($renderingContext);
$viewHelper134->setRenderChildrenClosure($renderChildrenClosure133);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper134->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments135 = array();
$arguments135['property'] = 'og:locality';
$arguments135['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.locality', $renderingContext);
$arguments135['additionalAttributes'] = NULL;
$arguments135['data'] = NULL;
$arguments135['useCurrentDomain'] = false;
$arguments135['forceAbsoluteUrl'] = false;
$arguments135['name'] = NULL;
$renderChildrenClosure136 = function() {return NULL;};
$viewHelper137 = $self->getViewHelper('$viewHelper137', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper137->setArguments($arguments135);
$viewHelper137->setRenderingContext($renderingContext);
$viewHelper137->setRenderChildrenClosure($renderChildrenClosure136);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper137->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments138 = array();
$arguments138['property'] = 'og:region';
$arguments138['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.region', $renderingContext);
$arguments138['additionalAttributes'] = NULL;
$arguments138['data'] = NULL;
$arguments138['useCurrentDomain'] = false;
$arguments138['forceAbsoluteUrl'] = false;
$arguments138['name'] = NULL;
$renderChildrenClosure139 = function() {return NULL;};
$viewHelper140 = $self->getViewHelper('$viewHelper140', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper140->setArguments($arguments138);
$viewHelper140->setRenderingContext($renderingContext);
$viewHelper140->setRenderChildrenClosure($renderChildrenClosure139);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper140->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments141 = array();
$arguments141['property'] = 'og:postal-code';
$arguments141['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.postal-code', $renderingContext);
$arguments141['additionalAttributes'] = NULL;
$arguments141['data'] = NULL;
$arguments141['useCurrentDomain'] = false;
$arguments141['forceAbsoluteUrl'] = false;
$arguments141['name'] = NULL;
$renderChildrenClosure142 = function() {return NULL;};
$viewHelper143 = $self->getViewHelper('$viewHelper143', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper143->setArguments($arguments141);
$viewHelper143->setRenderingContext($renderingContext);
$viewHelper143->setRenderChildrenClosure($renderChildrenClosure142);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper143->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments144 = array();
$arguments144['property'] = 'og:country-name';
$arguments144['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.country-name', $renderingContext);
$arguments144['additionalAttributes'] = NULL;
$arguments144['data'] = NULL;
$arguments144['useCurrentDomain'] = false;
$arguments144['forceAbsoluteUrl'] = false;
$arguments144['name'] = NULL;
$renderChildrenClosure145 = function() {return NULL;};
$viewHelper146 = $self->getViewHelper('$viewHelper146', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper146->setArguments($arguments144);
$viewHelper146->setRenderingContext($renderingContext);
$viewHelper146->setRenderChildrenClosure($renderChildrenClosure145);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper146->initializeArgumentsAndRender();


return $output0;
}


}
#1460558029    44722     