<?php
class FluidCache_News_ViewHelpers_Widget_Paginate_action_index_9f8e5ef6467bb2e1c88c004f0f6c48cf0580a60d extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section paginator
 */
public function section_31b8d545b1939b065e8931304bab52b99d8b4567(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext), 1);
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.paginate', $renderingContext));
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments7 = array();
// Rendering Boolean node
$arguments7['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext));
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments10 = array();
// Rendering Boolean node
$arguments10['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext), 1);
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output12 = '';

$output12 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments13 = array();
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output15 = '';

$output15 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$arguments16 = array();
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output18 = '';

$output18 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$arguments19 = array();
$arguments19['value'] = NULL;
$arguments19['keepQuotes'] = false;
$arguments19['encoding'] = NULL;
$arguments19['doubleEncode'] = true;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments21 = array();
// Rendering Array
$array22 = array();
$array22['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext);
$arguments21['arguments'] = $array22;
$arguments21['action'] = NULL;
$arguments21['section'] = '';
$arguments21['format'] = '';
$arguments21['ajax'] = false;
$arguments21['addQueryStringMethod'] = NULL;
$renderChildrenClosure23 = function() {return NULL;};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper24->setArguments($arguments21);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
return $viewHelper24->initializeArgumentsAndRender();
};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper');
$viewHelper25->setArguments($arguments19);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper

$output18 .= $viewHelper25->initializeArgumentsAndRender();

$output18 .= '" />';
return $output18;
};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'GeorgRinger\News\ViewHelpers\HeaderDataViewHelper');
$viewHelper26->setArguments($arguments16);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper

$output15 .= $viewHelper26->initializeArgumentsAndRender();

$output15 .= '
					';
return $output15;
};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments27 = array();
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output29 = '';

$output29 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$arguments30 = array();
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output32 = '';

$output32 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$arguments33 = array();
$arguments33['value'] = NULL;
$arguments33['keepQuotes'] = false;
$arguments33['encoding'] = NULL;
$arguments33['doubleEncode'] = true;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments35 = array();
$arguments35['action'] = NULL;
$arguments35['arguments'] = array (
);
$arguments35['section'] = '';
$arguments35['format'] = '';
$arguments35['ajax'] = false;
$arguments35['addQueryStringMethod'] = NULL;
$renderChildrenClosure36 = function() {return NULL;};
$viewHelper37 = $self->getViewHelper('$viewHelper37', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper37->setArguments($arguments35);
$viewHelper37->setRenderingContext($renderingContext);
$viewHelper37->setRenderChildrenClosure($renderChildrenClosure36);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
return $viewHelper37->initializeArgumentsAndRender();
};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper');
$viewHelper38->setArguments($arguments33);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure34);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper

$output32 .= $viewHelper38->initializeArgumentsAndRender();

$output32 .= '" />';
return $output32;
};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'GeorgRinger\News\ViewHelpers\HeaderDataViewHelper');
$viewHelper39->setArguments($arguments30);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure31);
// End of ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper

$output29 .= $viewHelper39->initializeArgumentsAndRender();

$output29 .= '
					';
return $output29;
};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output12 .= '
				';
return $output12;
};
$arguments10['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output40 = '';

$output40 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$arguments41 = array();
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output43 = '';

$output43 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$arguments44 = array();
$arguments44['value'] = NULL;
$arguments44['keepQuotes'] = false;
$arguments44['encoding'] = NULL;
$arguments44['doubleEncode'] = true;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments46 = array();
// Rendering Array
$array47 = array();
$array47['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext);
$arguments46['arguments'] = $array47;
$arguments46['action'] = NULL;
$arguments46['section'] = '';
$arguments46['format'] = '';
$arguments46['ajax'] = false;
$arguments46['addQueryStringMethod'] = NULL;
$renderChildrenClosure48 = function() {return NULL;};
$viewHelper49 = $self->getViewHelper('$viewHelper49', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper49->setArguments($arguments46);
$viewHelper49->setRenderingContext($renderingContext);
$viewHelper49->setRenderChildrenClosure($renderChildrenClosure48);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
return $viewHelper49->initializeArgumentsAndRender();
};
$viewHelper50 = $self->getViewHelper('$viewHelper50', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper');
$viewHelper50->setArguments($arguments44);
$viewHelper50->setRenderingContext($renderingContext);
$viewHelper50->setRenderChildrenClosure($renderChildrenClosure45);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper

$output43 .= $viewHelper50->initializeArgumentsAndRender();

$output43 .= '" />';
return $output43;
};
$viewHelper51 = $self->getViewHelper('$viewHelper51', $renderingContext, 'GeorgRinger\News\ViewHelpers\HeaderDataViewHelper');
$viewHelper51->setArguments($arguments41);
$viewHelper51->setRenderingContext($renderingContext);
$viewHelper51->setRenderChildrenClosure($renderChildrenClosure42);
// End of ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper

$output40 .= $viewHelper51->initializeArgumentsAndRender();

$output40 .= '
					';
return $output40;
};
$arguments10['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output52 = '';

$output52 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$arguments53 = array();
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output55 = '';

$output55 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$arguments56 = array();
$arguments56['value'] = NULL;
$arguments56['keepQuotes'] = false;
$arguments56['encoding'] = NULL;
$arguments56['doubleEncode'] = true;
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments58 = array();
$arguments58['action'] = NULL;
$arguments58['arguments'] = array (
);
$arguments58['section'] = '';
$arguments58['format'] = '';
$arguments58['ajax'] = false;
$arguments58['addQueryStringMethod'] = NULL;
$renderChildrenClosure59 = function() {return NULL;};
$viewHelper60 = $self->getViewHelper('$viewHelper60', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper60->setArguments($arguments58);
$viewHelper60->setRenderingContext($renderingContext);
$viewHelper60->setRenderChildrenClosure($renderChildrenClosure59);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
return $viewHelper60->initializeArgumentsAndRender();
};
$viewHelper61 = $self->getViewHelper('$viewHelper61', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper');
$viewHelper61->setArguments($arguments56);
$viewHelper61->setRenderingContext($renderingContext);
$viewHelper61->setRenderChildrenClosure($renderChildrenClosure57);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper

$output55 .= $viewHelper61->initializeArgumentsAndRender();

$output55 .= '" />';
return $output55;
};
$viewHelper62 = $self->getViewHelper('$viewHelper62', $renderingContext, 'GeorgRinger\News\ViewHelpers\HeaderDataViewHelper');
$viewHelper62->setArguments($arguments53);
$viewHelper62->setRenderingContext($renderingContext);
$viewHelper62->setRenderChildrenClosure($renderChildrenClosure54);
// End of ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper

$output52 .= $viewHelper62->initializeArgumentsAndRender();

$output52 .= '
					';
return $output52;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
			';
return $output9;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments63 = array();
// Rendering Boolean node
$arguments63['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'nextPage', $renderingContext));
$arguments63['then'] = NULL;
$arguments63['else'] = NULL;
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output65 = '';

$output65 .= '
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$arguments66 = array();
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output68 = '';

$output68 .= '<link rel="next" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$arguments69 = array();
$arguments69['value'] = NULL;
$arguments69['keepQuotes'] = false;
$arguments69['encoding'] = NULL;
$arguments69['doubleEncode'] = true;
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments71 = array();
// Rendering Array
$array72 = array();
$array72['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'nextPage', $renderingContext);
$arguments71['arguments'] = $array72;
$arguments71['action'] = NULL;
$arguments71['section'] = '';
$arguments71['format'] = '';
$arguments71['ajax'] = false;
$arguments71['addQueryStringMethod'] = NULL;
$renderChildrenClosure73 = function() {return NULL;};
$viewHelper74 = $self->getViewHelper('$viewHelper74', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper74->setArguments($arguments71);
$viewHelper74->setRenderingContext($renderingContext);
$viewHelper74->setRenderChildrenClosure($renderChildrenClosure73);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
return $viewHelper74->initializeArgumentsAndRender();
};
$viewHelper75 = $self->getViewHelper('$viewHelper75', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper');
$viewHelper75->setArguments($arguments69);
$viewHelper75->setRenderingContext($renderingContext);
$viewHelper75->setRenderChildrenClosure($renderChildrenClosure70);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper

$output68 .= $viewHelper75->initializeArgumentsAndRender();

$output68 .= '" />';
return $output68;
};
$viewHelper76 = $self->getViewHelper('$viewHelper76', $renderingContext, 'GeorgRinger\News\ViewHelpers\HeaderDataViewHelper');
$viewHelper76->setArguments($arguments66);
$viewHelper76->setRenderingContext($renderingContext);
$viewHelper76->setRenderChildrenClosure($renderChildrenClosure67);
// End of ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper

$output65 .= $viewHelper76->initializeArgumentsAndRender();

$output65 .= '
			';
return $output65;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output6 .= '
		';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '

		<div class="page-navigation">
			<p>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments77 = array();
$arguments77['key'] = 'paginate_overall';
// Rendering Array
$array78 = array();
$array78['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'current', $renderingContext);
$array78['1'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext);
$arguments77['arguments'] = $array78;
$arguments77['id'] = NULL;
$arguments77['default'] = NULL;
$arguments77['htmlEscape'] = NULL;
$arguments77['extensionName'] = NULL;
$renderChildrenClosure79 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments77, $renderChildrenClosure79, $renderingContext);

$output3 .= '
			</p>
			<ul class="f3-widget-paginator">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments80 = array();
// Rendering Boolean node
$arguments80['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext));
$arguments80['then'] = NULL;
$arguments80['else'] = NULL;
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output82 = '';

$output82 .= '
					<li class="previous">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments83 = array();
// Rendering Boolean node
$arguments83['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext), 1);
$arguments83['then'] = NULL;
$arguments83['else'] = NULL;
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output85 = '';

$output85 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments86 = array();
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output88 = '';

$output88 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments89 = array();
// Rendering Array
$array90 = array();
$array90['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext);
$arguments89['arguments'] = $array90;
$arguments89['additionalAttributes'] = NULL;
$arguments89['data'] = NULL;
$arguments89['action'] = NULL;
$arguments89['section'] = '';
$arguments89['format'] = '';
$arguments89['ajax'] = false;
$arguments89['class'] = NULL;
$arguments89['dir'] = NULL;
$arguments89['id'] = NULL;
$arguments89['lang'] = NULL;
$arguments89['style'] = NULL;
$arguments89['title'] = NULL;
$arguments89['accesskey'] = NULL;
$arguments89['tabindex'] = NULL;
$arguments89['onclick'] = NULL;
$arguments89['name'] = NULL;
$arguments89['rel'] = NULL;
$arguments89['rev'] = NULL;
$arguments89['target'] = NULL;
$arguments89['addQueryStringMethod'] = NULL;
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output92 = '';

$output92 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments93 = array();
$arguments93['key'] = 'paginate_previous';
$arguments93['id'] = NULL;
$arguments93['default'] = NULL;
$arguments93['htmlEscape'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['extensionName'] = NULL;
$renderChildrenClosure94 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '
								';
return $output92;
};
$viewHelper95 = $self->getViewHelper('$viewHelper95', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper95->setArguments($arguments89);
$viewHelper95->setRenderingContext($renderingContext);
$viewHelper95->setRenderChildrenClosure($renderChildrenClosure91);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output88 .= $viewHelper95->initializeArgumentsAndRender();

$output88 .= '
							';
return $output88;
};

$output85 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output85 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments96 = array();
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output98 = '';

$output98 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments99 = array();
$arguments99['additionalAttributes'] = NULL;
$arguments99['data'] = NULL;
$arguments99['action'] = NULL;
$arguments99['arguments'] = array (
);
$arguments99['section'] = '';
$arguments99['format'] = '';
$arguments99['ajax'] = false;
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
$arguments99['addQueryStringMethod'] = NULL;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output101 = '';

$output101 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments102 = array();
$arguments102['key'] = 'paginate_previous';
$arguments102['id'] = NULL;
$arguments102['default'] = NULL;
$arguments102['htmlEscape'] = NULL;
$arguments102['arguments'] = NULL;
$arguments102['extensionName'] = NULL;
$renderChildrenClosure103 = function() {return NULL;};

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output101 .= '
								';
return $output101;
};
$viewHelper104 = $self->getViewHelper('$viewHelper104', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper104->setArguments($arguments99);
$viewHelper104->setRenderingContext($renderingContext);
$viewHelper104->setRenderChildrenClosure($renderChildrenClosure100);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output98 .= $viewHelper104->initializeArgumentsAndRender();

$output98 .= '
							';
return $output98;
};

$output85 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output85 .= '
						';
return $output85;
};
$arguments83['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output105 = '';

$output105 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments106 = array();
// Rendering Array
$array107 = array();
$array107['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext);
$arguments106['arguments'] = $array107;
$arguments106['additionalAttributes'] = NULL;
$arguments106['data'] = NULL;
$arguments106['action'] = NULL;
$arguments106['section'] = '';
$arguments106['format'] = '';
$arguments106['ajax'] = false;
$arguments106['class'] = NULL;
$arguments106['dir'] = NULL;
$arguments106['id'] = NULL;
$arguments106['lang'] = NULL;
$arguments106['style'] = NULL;
$arguments106['title'] = NULL;
$arguments106['accesskey'] = NULL;
$arguments106['tabindex'] = NULL;
$arguments106['onclick'] = NULL;
$arguments106['name'] = NULL;
$arguments106['rel'] = NULL;
$arguments106['rev'] = NULL;
$arguments106['target'] = NULL;
$arguments106['addQueryStringMethod'] = NULL;
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output109 = '';

$output109 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments110 = array();
$arguments110['key'] = 'paginate_previous';
$arguments110['id'] = NULL;
$arguments110['default'] = NULL;
$arguments110['htmlEscape'] = NULL;
$arguments110['arguments'] = NULL;
$arguments110['extensionName'] = NULL;
$renderChildrenClosure111 = function() {return NULL;};

$output109 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output109 .= '
								';
return $output109;
};
$viewHelper112 = $self->getViewHelper('$viewHelper112', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper112->setArguments($arguments106);
$viewHelper112->setRenderingContext($renderingContext);
$viewHelper112->setRenderChildrenClosure($renderChildrenClosure108);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output105 .= $viewHelper112->initializeArgumentsAndRender();

$output105 .= '
							';
return $output105;
};
$arguments83['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output113 = '';

$output113 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments114 = array();
$arguments114['additionalAttributes'] = NULL;
$arguments114['data'] = NULL;
$arguments114['action'] = NULL;
$arguments114['arguments'] = array (
);
$arguments114['section'] = '';
$arguments114['format'] = '';
$arguments114['ajax'] = false;
$arguments114['class'] = NULL;
$arguments114['dir'] = NULL;
$arguments114['id'] = NULL;
$arguments114['lang'] = NULL;
$arguments114['style'] = NULL;
$arguments114['title'] = NULL;
$arguments114['accesskey'] = NULL;
$arguments114['tabindex'] = NULL;
$arguments114['onclick'] = NULL;
$arguments114['name'] = NULL;
$arguments114['rel'] = NULL;
$arguments114['rev'] = NULL;
$arguments114['target'] = NULL;
$arguments114['addQueryStringMethod'] = NULL;
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output116 = '';

$output116 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments117 = array();
$arguments117['key'] = 'paginate_previous';
$arguments117['id'] = NULL;
$arguments117['default'] = NULL;
$arguments117['htmlEscape'] = NULL;
$arguments117['arguments'] = NULL;
$arguments117['extensionName'] = NULL;
$renderChildrenClosure118 = function() {return NULL;};

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output116 .= '
								';
return $output116;
};
$viewHelper119 = $self->getViewHelper('$viewHelper119', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper119->setArguments($arguments114);
$viewHelper119->setRenderingContext($renderingContext);
$viewHelper119->setRenderChildrenClosure($renderChildrenClosure115);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output113 .= $viewHelper119->initializeArgumentsAndRender();

$output113 .= '
							';
return $output113;
};

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
					</li>
				';
return $output82;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output3 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments120 = array();
// Rendering Boolean node
$arguments120['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'displayRangeStart', $renderingContext), 1);
$arguments120['then'] = NULL;
$arguments120['else'] = NULL;
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output122 = '';

$output122 .= '
					<li class="first">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments123 = array();
$arguments123['additionalAttributes'] = NULL;
$arguments123['data'] = NULL;
$arguments123['action'] = NULL;
$arguments123['arguments'] = array (
);
$arguments123['section'] = '';
$arguments123['format'] = '';
$arguments123['ajax'] = false;
$arguments123['class'] = NULL;
$arguments123['dir'] = NULL;
$arguments123['id'] = NULL;
$arguments123['lang'] = NULL;
$arguments123['style'] = NULL;
$arguments123['title'] = NULL;
$arguments123['accesskey'] = NULL;
$arguments123['tabindex'] = NULL;
$arguments123['onclick'] = NULL;
$arguments123['name'] = NULL;
$arguments123['rel'] = NULL;
$arguments123['rev'] = NULL;
$arguments123['target'] = NULL;
$arguments123['addQueryStringMethod'] = NULL;
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '1';
};
$viewHelper125 = $self->getViewHelper('$viewHelper125', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper125->setArguments($arguments123);
$viewHelper125->setRenderingContext($renderingContext);
$viewHelper125->setRenderChildrenClosure($renderChildrenClosure124);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output122 .= $viewHelper125->initializeArgumentsAndRender();

$output122 .= '
					</li>
				';
return $output122;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output3 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments126 = array();
// Rendering Boolean node
$arguments126['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'hasLessPages', $renderingContext));
$arguments126['then'] = NULL;
$arguments126['else'] = NULL;
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
					<li>....</li>
				';
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output3 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments128 = array();
$arguments128['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'pages', $renderingContext);
$arguments128['as'] = 'page';
$arguments128['key'] = '';
$arguments128['reverse'] = false;
$arguments128['iteration'] = NULL;
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output130 = '';

$output130 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments131 = array();
// Rendering Boolean node
$arguments131['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'isCurrent', $renderingContext));
$arguments131['then'] = NULL;
$arguments131['else'] = NULL;
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output133 = '';

$output133 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments134 = array();
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output136 = '';

$output136 .= '
							<li class="current">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments137 = array();
$arguments137['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments137['keepQuotes'] = false;
$arguments137['encoding'] = NULL;
$arguments137['doubleEncode'] = true;
$renderChildrenClosure138 = function() {return NULL;};
$value139 = ($arguments137['value'] !== NULL ? $arguments137['value'] : $renderChildrenClosure138());

$output136 .= (!is_string($value139) ? $value139 : htmlspecialchars($value139, ($arguments137['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments137['encoding'] !== NULL ? $arguments137['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments137['doubleEncode']));

$output136 .= '</li>
						';
return $output136;
};

$output133 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output133 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments140 = array();
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output142 = '';

$output142 .= '
							<li>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments143 = array();
// Rendering Boolean node
$arguments143['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext), 1);
$arguments143['then'] = NULL;
$arguments143['else'] = NULL;
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output145 = '';

$output145 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments146 = array();
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output148 = '';

$output148 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments149 = array();
// Rendering Array
$array150 = array();
$array150['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments149['arguments'] = $array150;
$arguments149['additionalAttributes'] = NULL;
$arguments149['data'] = NULL;
$arguments149['action'] = NULL;
$arguments149['section'] = '';
$arguments149['format'] = '';
$arguments149['ajax'] = false;
$arguments149['class'] = NULL;
$arguments149['dir'] = NULL;
$arguments149['id'] = NULL;
$arguments149['lang'] = NULL;
$arguments149['style'] = NULL;
$arguments149['title'] = NULL;
$arguments149['accesskey'] = NULL;
$arguments149['tabindex'] = NULL;
$arguments149['onclick'] = NULL;
$arguments149['name'] = NULL;
$arguments149['rel'] = NULL;
$arguments149['rev'] = NULL;
$arguments149['target'] = NULL;
$arguments149['addQueryStringMethod'] = NULL;
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments152 = array();
$arguments152['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments152['keepQuotes'] = false;
$arguments152['encoding'] = NULL;
$arguments152['doubleEncode'] = true;
$renderChildrenClosure153 = function() {return NULL;};
$value154 = ($arguments152['value'] !== NULL ? $arguments152['value'] : $renderChildrenClosure153());
return (!is_string($value154) ? $value154 : htmlspecialchars($value154, ($arguments152['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments152['encoding'] !== NULL ? $arguments152['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments152['doubleEncode']));
};
$viewHelper155 = $self->getViewHelper('$viewHelper155', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper155->setArguments($arguments149);
$viewHelper155->setRenderingContext($renderingContext);
$viewHelper155->setRenderChildrenClosure($renderChildrenClosure151);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output148 .= $viewHelper155->initializeArgumentsAndRender();

$output148 .= '
									';
return $output148;
};

$output145 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output145 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments156 = array();
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output158 = '';

$output158 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments159 = array();
$arguments159['additionalAttributes'] = NULL;
$arguments159['data'] = NULL;
$arguments159['action'] = NULL;
$arguments159['arguments'] = array (
);
$arguments159['section'] = '';
$arguments159['format'] = '';
$arguments159['ajax'] = false;
$arguments159['class'] = NULL;
$arguments159['dir'] = NULL;
$arguments159['id'] = NULL;
$arguments159['lang'] = NULL;
$arguments159['style'] = NULL;
$arguments159['title'] = NULL;
$arguments159['accesskey'] = NULL;
$arguments159['tabindex'] = NULL;
$arguments159['onclick'] = NULL;
$arguments159['name'] = NULL;
$arguments159['rel'] = NULL;
$arguments159['rev'] = NULL;
$arguments159['target'] = NULL;
$arguments159['addQueryStringMethod'] = NULL;
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments161 = array();
$arguments161['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments161['keepQuotes'] = false;
$arguments161['encoding'] = NULL;
$arguments161['doubleEncode'] = true;
$renderChildrenClosure162 = function() {return NULL;};
$value163 = ($arguments161['value'] !== NULL ? $arguments161['value'] : $renderChildrenClosure162());
return (!is_string($value163) ? $value163 : htmlspecialchars($value163, ($arguments161['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments161['encoding'] !== NULL ? $arguments161['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments161['doubleEncode']));
};
$viewHelper164 = $self->getViewHelper('$viewHelper164', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper164->setArguments($arguments159);
$viewHelper164->setRenderingContext($renderingContext);
$viewHelper164->setRenderChildrenClosure($renderChildrenClosure160);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output158 .= $viewHelper164->initializeArgumentsAndRender();

$output158 .= '
									';
return $output158;
};

$output145 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output145 .= '
								';
return $output145;
};
$arguments143['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output165 = '';

$output165 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments166 = array();
// Rendering Array
$array167 = array();
$array167['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments166['arguments'] = $array167;
$arguments166['additionalAttributes'] = NULL;
$arguments166['data'] = NULL;
$arguments166['action'] = NULL;
$arguments166['section'] = '';
$arguments166['format'] = '';
$arguments166['ajax'] = false;
$arguments166['class'] = NULL;
$arguments166['dir'] = NULL;
$arguments166['id'] = NULL;
$arguments166['lang'] = NULL;
$arguments166['style'] = NULL;
$arguments166['title'] = NULL;
$arguments166['accesskey'] = NULL;
$arguments166['tabindex'] = NULL;
$arguments166['onclick'] = NULL;
$arguments166['name'] = NULL;
$arguments166['rel'] = NULL;
$arguments166['rev'] = NULL;
$arguments166['target'] = NULL;
$arguments166['addQueryStringMethod'] = NULL;
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments169 = array();
$arguments169['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments169['keepQuotes'] = false;
$arguments169['encoding'] = NULL;
$arguments169['doubleEncode'] = true;
$renderChildrenClosure170 = function() {return NULL;};
$value171 = ($arguments169['value'] !== NULL ? $arguments169['value'] : $renderChildrenClosure170());
return (!is_string($value171) ? $value171 : htmlspecialchars($value171, ($arguments169['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments169['encoding'] !== NULL ? $arguments169['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments169['doubleEncode']));
};
$viewHelper172 = $self->getViewHelper('$viewHelper172', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper172->setArguments($arguments166);
$viewHelper172->setRenderingContext($renderingContext);
$viewHelper172->setRenderChildrenClosure($renderChildrenClosure168);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output165 .= $viewHelper172->initializeArgumentsAndRender();

$output165 .= '
									';
return $output165;
};
$arguments143['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output173 = '';

$output173 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments174 = array();
$arguments174['additionalAttributes'] = NULL;
$arguments174['data'] = NULL;
$arguments174['action'] = NULL;
$arguments174['arguments'] = array (
);
$arguments174['section'] = '';
$arguments174['format'] = '';
$arguments174['ajax'] = false;
$arguments174['class'] = NULL;
$arguments174['dir'] = NULL;
$arguments174['id'] = NULL;
$arguments174['lang'] = NULL;
$arguments174['style'] = NULL;
$arguments174['title'] = NULL;
$arguments174['accesskey'] = NULL;
$arguments174['tabindex'] = NULL;
$arguments174['onclick'] = NULL;
$arguments174['name'] = NULL;
$arguments174['rel'] = NULL;
$arguments174['rev'] = NULL;
$arguments174['target'] = NULL;
$arguments174['addQueryStringMethod'] = NULL;
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments176 = array();
$arguments176['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments176['keepQuotes'] = false;
$arguments176['encoding'] = NULL;
$arguments176['doubleEncode'] = true;
$renderChildrenClosure177 = function() {return NULL;};
$value178 = ($arguments176['value'] !== NULL ? $arguments176['value'] : $renderChildrenClosure177());
return (!is_string($value178) ? $value178 : htmlspecialchars($value178, ($arguments176['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments176['encoding'] !== NULL ? $arguments176['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments176['doubleEncode']));
};
$viewHelper179 = $self->getViewHelper('$viewHelper179', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper179->setArguments($arguments174);
$viewHelper179->setRenderingContext($renderingContext);
$viewHelper179->setRenderChildrenClosure($renderChildrenClosure175);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output173 .= $viewHelper179->initializeArgumentsAndRender();

$output173 .= '
									';
return $output173;
};

$output142 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output142 .= '
							</li>
						';
return $output142;
};

$output133 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output133 .= '
					';
return $output133;
};
$arguments131['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output180 = '';

$output180 .= '
							<li class="current">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments181 = array();
$arguments181['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments181['keepQuotes'] = false;
$arguments181['encoding'] = NULL;
$arguments181['doubleEncode'] = true;
$renderChildrenClosure182 = function() {return NULL;};
$value183 = ($arguments181['value'] !== NULL ? $arguments181['value'] : $renderChildrenClosure182());

$output180 .= (!is_string($value183) ? $value183 : htmlspecialchars($value183, ($arguments181['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments181['encoding'] !== NULL ? $arguments181['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments181['doubleEncode']));

$output180 .= '</li>
						';
return $output180;
};
$arguments131['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output184 = '';

$output184 .= '
							<li>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments185 = array();
// Rendering Boolean node
$arguments185['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext), 1);
$arguments185['then'] = NULL;
$arguments185['else'] = NULL;
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output187 = '';

$output187 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments188 = array();
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output190 = '';

$output190 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments191 = array();
// Rendering Array
$array192 = array();
$array192['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments191['arguments'] = $array192;
$arguments191['additionalAttributes'] = NULL;
$arguments191['data'] = NULL;
$arguments191['action'] = NULL;
$arguments191['section'] = '';
$arguments191['format'] = '';
$arguments191['ajax'] = false;
$arguments191['class'] = NULL;
$arguments191['dir'] = NULL;
$arguments191['id'] = NULL;
$arguments191['lang'] = NULL;
$arguments191['style'] = NULL;
$arguments191['title'] = NULL;
$arguments191['accesskey'] = NULL;
$arguments191['tabindex'] = NULL;
$arguments191['onclick'] = NULL;
$arguments191['name'] = NULL;
$arguments191['rel'] = NULL;
$arguments191['rev'] = NULL;
$arguments191['target'] = NULL;
$arguments191['addQueryStringMethod'] = NULL;
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments194 = array();
$arguments194['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments194['keepQuotes'] = false;
$arguments194['encoding'] = NULL;
$arguments194['doubleEncode'] = true;
$renderChildrenClosure195 = function() {return NULL;};
$value196 = ($arguments194['value'] !== NULL ? $arguments194['value'] : $renderChildrenClosure195());
return (!is_string($value196) ? $value196 : htmlspecialchars($value196, ($arguments194['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments194['encoding'] !== NULL ? $arguments194['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments194['doubleEncode']));
};
$viewHelper197 = $self->getViewHelper('$viewHelper197', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper197->setArguments($arguments191);
$viewHelper197->setRenderingContext($renderingContext);
$viewHelper197->setRenderChildrenClosure($renderChildrenClosure193);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output190 .= $viewHelper197->initializeArgumentsAndRender();

$output190 .= '
									';
return $output190;
};

$output187 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output187 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments198 = array();
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output200 = '';

$output200 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments201 = array();
$arguments201['additionalAttributes'] = NULL;
$arguments201['data'] = NULL;
$arguments201['action'] = NULL;
$arguments201['arguments'] = array (
);
$arguments201['section'] = '';
$arguments201['format'] = '';
$arguments201['ajax'] = false;
$arguments201['class'] = NULL;
$arguments201['dir'] = NULL;
$arguments201['id'] = NULL;
$arguments201['lang'] = NULL;
$arguments201['style'] = NULL;
$arguments201['title'] = NULL;
$arguments201['accesskey'] = NULL;
$arguments201['tabindex'] = NULL;
$arguments201['onclick'] = NULL;
$arguments201['name'] = NULL;
$arguments201['rel'] = NULL;
$arguments201['rev'] = NULL;
$arguments201['target'] = NULL;
$arguments201['addQueryStringMethod'] = NULL;
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments203 = array();
$arguments203['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments203['keepQuotes'] = false;
$arguments203['encoding'] = NULL;
$arguments203['doubleEncode'] = true;
$renderChildrenClosure204 = function() {return NULL;};
$value205 = ($arguments203['value'] !== NULL ? $arguments203['value'] : $renderChildrenClosure204());
return (!is_string($value205) ? $value205 : htmlspecialchars($value205, ($arguments203['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments203['encoding'] !== NULL ? $arguments203['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments203['doubleEncode']));
};
$viewHelper206 = $self->getViewHelper('$viewHelper206', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper206->setArguments($arguments201);
$viewHelper206->setRenderingContext($renderingContext);
$viewHelper206->setRenderChildrenClosure($renderChildrenClosure202);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output200 .= $viewHelper206->initializeArgumentsAndRender();

$output200 .= '
									';
return $output200;
};

$output187 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output187 .= '
								';
return $output187;
};
$arguments185['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output207 = '';

$output207 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments208 = array();
// Rendering Array
$array209 = array();
$array209['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments208['arguments'] = $array209;
$arguments208['additionalAttributes'] = NULL;
$arguments208['data'] = NULL;
$arguments208['action'] = NULL;
$arguments208['section'] = '';
$arguments208['format'] = '';
$arguments208['ajax'] = false;
$arguments208['class'] = NULL;
$arguments208['dir'] = NULL;
$arguments208['id'] = NULL;
$arguments208['lang'] = NULL;
$arguments208['style'] = NULL;
$arguments208['title'] = NULL;
$arguments208['accesskey'] = NULL;
$arguments208['tabindex'] = NULL;
$arguments208['onclick'] = NULL;
$arguments208['name'] = NULL;
$arguments208['rel'] = NULL;
$arguments208['rev'] = NULL;
$arguments208['target'] = NULL;
$arguments208['addQueryStringMethod'] = NULL;
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments211 = array();
$arguments211['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments211['keepQuotes'] = false;
$arguments211['encoding'] = NULL;
$arguments211['doubleEncode'] = true;
$renderChildrenClosure212 = function() {return NULL;};
$value213 = ($arguments211['value'] !== NULL ? $arguments211['value'] : $renderChildrenClosure212());
return (!is_string($value213) ? $value213 : htmlspecialchars($value213, ($arguments211['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments211['encoding'] !== NULL ? $arguments211['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments211['doubleEncode']));
};
$viewHelper214 = $self->getViewHelper('$viewHelper214', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper214->setArguments($arguments208);
$viewHelper214->setRenderingContext($renderingContext);
$viewHelper214->setRenderChildrenClosure($renderChildrenClosure210);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output207 .= $viewHelper214->initializeArgumentsAndRender();

$output207 .= '
									';
return $output207;
};
$arguments185['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output215 = '';

$output215 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments216 = array();
$arguments216['additionalAttributes'] = NULL;
$arguments216['data'] = NULL;
$arguments216['action'] = NULL;
$arguments216['arguments'] = array (
);
$arguments216['section'] = '';
$arguments216['format'] = '';
$arguments216['ajax'] = false;
$arguments216['class'] = NULL;
$arguments216['dir'] = NULL;
$arguments216['id'] = NULL;
$arguments216['lang'] = NULL;
$arguments216['style'] = NULL;
$arguments216['title'] = NULL;
$arguments216['accesskey'] = NULL;
$arguments216['tabindex'] = NULL;
$arguments216['onclick'] = NULL;
$arguments216['name'] = NULL;
$arguments216['rel'] = NULL;
$arguments216['rev'] = NULL;
$arguments216['target'] = NULL;
$arguments216['addQueryStringMethod'] = NULL;
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments218 = array();
$arguments218['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments218['keepQuotes'] = false;
$arguments218['encoding'] = NULL;
$arguments218['doubleEncode'] = true;
$renderChildrenClosure219 = function() {return NULL;};
$value220 = ($arguments218['value'] !== NULL ? $arguments218['value'] : $renderChildrenClosure219());
return (!is_string($value220) ? $value220 : htmlspecialchars($value220, ($arguments218['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments218['encoding'] !== NULL ? $arguments218['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments218['doubleEncode']));
};
$viewHelper221 = $self->getViewHelper('$viewHelper221', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper221->setArguments($arguments216);
$viewHelper221->setRenderingContext($renderingContext);
$viewHelper221->setRenderChildrenClosure($renderChildrenClosure217);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output215 .= $viewHelper221->initializeArgumentsAndRender();

$output215 .= '
									';
return $output215;
};

$output184 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output184 .= '
							</li>
						';
return $output184;
};

$output130 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output130 .= '
				';
return $output130;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output3 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments222 = array();
// Rendering Boolean node
$arguments222['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'hasMorePages', $renderingContext));
$arguments222['then'] = NULL;
$arguments222['else'] = NULL;
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
					<li>....</li>
				';
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output3 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments224 = array();
// Rendering Boolean node
$arguments224['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'displayRangeEnd', $renderingContext), \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext));
$arguments224['then'] = NULL;
$arguments224['else'] = NULL;
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output226 = '';

$output226 .= '
					<li class="last">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments227 = array();
// Rendering Array
$array228 = array();
$array228['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext);
$arguments227['arguments'] = $array228;
$arguments227['additionalAttributes'] = NULL;
$arguments227['data'] = NULL;
$arguments227['action'] = NULL;
$arguments227['section'] = '';
$arguments227['format'] = '';
$arguments227['ajax'] = false;
$arguments227['class'] = NULL;
$arguments227['dir'] = NULL;
$arguments227['id'] = NULL;
$arguments227['lang'] = NULL;
$arguments227['style'] = NULL;
$arguments227['title'] = NULL;
$arguments227['accesskey'] = NULL;
$arguments227['tabindex'] = NULL;
$arguments227['onclick'] = NULL;
$arguments227['name'] = NULL;
$arguments227['rel'] = NULL;
$arguments227['rev'] = NULL;
$arguments227['target'] = NULL;
$arguments227['addQueryStringMethod'] = NULL;
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments230 = array();
$arguments230['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext);
$arguments230['keepQuotes'] = false;
$arguments230['encoding'] = NULL;
$arguments230['doubleEncode'] = true;
$renderChildrenClosure231 = function() {return NULL;};
$value232 = ($arguments230['value'] !== NULL ? $arguments230['value'] : $renderChildrenClosure231());
return (!is_string($value232) ? $value232 : htmlspecialchars($value232, ($arguments230['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments230['encoding'] !== NULL ? $arguments230['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments230['doubleEncode']));
};
$viewHelper233 = $self->getViewHelper('$viewHelper233', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper233->setArguments($arguments227);
$viewHelper233->setRenderingContext($renderingContext);
$viewHelper233->setRenderChildrenClosure($renderChildrenClosure229);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output226 .= $viewHelper233->initializeArgumentsAndRender();

$output226 .= '
					</li>
				';
return $output226;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output3 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments234 = array();
// Rendering Boolean node
$arguments234['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'nextPage', $renderingContext));
$arguments234['then'] = NULL;
$arguments234['else'] = NULL;
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output236 = '';

$output236 .= '
					<li class="last next">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments237 = array();
// Rendering Array
$array238 = array();
$array238['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'nextPage', $renderingContext);
$arguments237['arguments'] = $array238;
$arguments237['additionalAttributes'] = NULL;
$arguments237['data'] = NULL;
$arguments237['action'] = NULL;
$arguments237['section'] = '';
$arguments237['format'] = '';
$arguments237['ajax'] = false;
$arguments237['class'] = NULL;
$arguments237['dir'] = NULL;
$arguments237['id'] = NULL;
$arguments237['lang'] = NULL;
$arguments237['style'] = NULL;
$arguments237['title'] = NULL;
$arguments237['accesskey'] = NULL;
$arguments237['tabindex'] = NULL;
$arguments237['onclick'] = NULL;
$arguments237['name'] = NULL;
$arguments237['rel'] = NULL;
$arguments237['rev'] = NULL;
$arguments237['target'] = NULL;
$arguments237['addQueryStringMethod'] = NULL;
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output240 = '';

$output240 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments241 = array();
$arguments241['key'] = 'paginate_next';
$arguments241['id'] = NULL;
$arguments241['default'] = NULL;
$arguments241['htmlEscape'] = NULL;
$arguments241['arguments'] = NULL;
$arguments241['extensionName'] = NULL;
$renderChildrenClosure242 = function() {return NULL;};

$output240 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output240 .= '
						';
return $output240;
};
$viewHelper243 = $self->getViewHelper('$viewHelper243', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper243->setArguments($arguments237);
$viewHelper243->setRenderingContext($renderingContext);
$viewHelper243->setRenderChildrenClosure($renderChildrenClosure239);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output236 .= $viewHelper243->initializeArgumentsAndRender();

$output236 .= '
					</li>
				';
return $output236;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$output3 .= '
			</ul>
		</div>
		<div class="news-clear"></div>
	';
return $output3;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output244 = '';

$output244 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments245 = array();
// Rendering Boolean node
$arguments245['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'insertAbove', $renderingContext));
$arguments245['then'] = NULL;
$arguments245['else'] = NULL;
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output247 = '';

$output247 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments248 = array();
$arguments248['section'] = 'paginator';
// Rendering Array
$array249 = array();
$array249['pagination'] = $currentVariableContainer->getOrNull('pagination');
$array249['configuration'] = $currentVariableContainer->getOrNull('configuration');
$arguments248['arguments'] = $array249;
$arguments248['partial'] = NULL;
$arguments248['optional'] = false;
$renderChildrenClosure250 = function() {return NULL;};

$output247 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments248, $renderChildrenClosure250, $renderingContext);

$output247 .= '
';
return $output247;
};

$output244 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output244 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper
$arguments251 = array();
$arguments251['arguments'] = $currentVariableContainer->getOrNull('contentArguments');
$renderChildrenClosure252 = function() {return NULL;};
$viewHelper253 = $self->getViewHelper('$viewHelper253', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper');
$viewHelper253->setArguments($arguments251);
$viewHelper253->setRenderingContext($renderingContext);
$viewHelper253->setRenderChildrenClosure($renderChildrenClosure252);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper

$output244 .= $viewHelper253->initializeArgumentsAndRender();

$output244 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments254 = array();
// Rendering Boolean node
$arguments254['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'insertBelow', $renderingContext));
$arguments254['then'] = NULL;
$arguments254['else'] = NULL;
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output256 = '';

$output256 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments257 = array();
$arguments257['section'] = 'paginator';
// Rendering Array
$array258 = array();
$array258['pagination'] = $currentVariableContainer->getOrNull('pagination');
$array258['configuration'] = $currentVariableContainer->getOrNull('configuration');
$arguments257['arguments'] = $array258;
$arguments257['partial'] = NULL;
$arguments257['optional'] = false;
$renderChildrenClosure259 = function() {return NULL;};

$output256 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments257, $renderChildrenClosure259, $renderingContext);

$output256 .= '
';
return $output256;
};

$output244 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output244 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments260 = array();
$arguments260['name'] = 'paginator';
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output262 = '';

$output262 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments263 = array();
// Rendering Boolean node
$arguments263['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext), 1);
$arguments263['then'] = NULL;
$arguments263['else'] = NULL;
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output265 = '';

$output265 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments266 = array();
// Rendering Boolean node
$arguments266['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.paginate', $renderingContext));
$arguments266['then'] = NULL;
$arguments266['else'] = NULL;
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output268 = '';

$output268 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments269 = array();
// Rendering Boolean node
$arguments269['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext));
$arguments269['then'] = NULL;
$arguments269['else'] = NULL;
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output271 = '';

$output271 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments272 = array();
// Rendering Boolean node
$arguments272['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext), 1);
$arguments272['then'] = NULL;
$arguments272['else'] = NULL;
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output274 = '';

$output274 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments275 = array();
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output277 = '';

$output277 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$arguments278 = array();
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output280 = '';

$output280 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$arguments281 = array();
$arguments281['value'] = NULL;
$arguments281['keepQuotes'] = false;
$arguments281['encoding'] = NULL;
$arguments281['doubleEncode'] = true;
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments283 = array();
// Rendering Array
$array284 = array();
$array284['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext);
$arguments283['arguments'] = $array284;
$arguments283['action'] = NULL;
$arguments283['section'] = '';
$arguments283['format'] = '';
$arguments283['ajax'] = false;
$arguments283['addQueryStringMethod'] = NULL;
$renderChildrenClosure285 = function() {return NULL;};
$viewHelper286 = $self->getViewHelper('$viewHelper286', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper286->setArguments($arguments283);
$viewHelper286->setRenderingContext($renderingContext);
$viewHelper286->setRenderChildrenClosure($renderChildrenClosure285);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
return $viewHelper286->initializeArgumentsAndRender();
};
$viewHelper287 = $self->getViewHelper('$viewHelper287', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper');
$viewHelper287->setArguments($arguments281);
$viewHelper287->setRenderingContext($renderingContext);
$viewHelper287->setRenderChildrenClosure($renderChildrenClosure282);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper

$output280 .= $viewHelper287->initializeArgumentsAndRender();

$output280 .= '" />';
return $output280;
};
$viewHelper288 = $self->getViewHelper('$viewHelper288', $renderingContext, 'GeorgRinger\News\ViewHelpers\HeaderDataViewHelper');
$viewHelper288->setArguments($arguments278);
$viewHelper288->setRenderingContext($renderingContext);
$viewHelper288->setRenderChildrenClosure($renderChildrenClosure279);
// End of ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper

$output277 .= $viewHelper288->initializeArgumentsAndRender();

$output277 .= '
					';
return $output277;
};

$output274 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output274 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments289 = array();
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output291 = '';

$output291 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$arguments292 = array();
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output294 = '';

$output294 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$arguments295 = array();
$arguments295['value'] = NULL;
$arguments295['keepQuotes'] = false;
$arguments295['encoding'] = NULL;
$arguments295['doubleEncode'] = true;
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments297 = array();
$arguments297['action'] = NULL;
$arguments297['arguments'] = array (
);
$arguments297['section'] = '';
$arguments297['format'] = '';
$arguments297['ajax'] = false;
$arguments297['addQueryStringMethod'] = NULL;
$renderChildrenClosure298 = function() {return NULL;};
$viewHelper299 = $self->getViewHelper('$viewHelper299', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper299->setArguments($arguments297);
$viewHelper299->setRenderingContext($renderingContext);
$viewHelper299->setRenderChildrenClosure($renderChildrenClosure298);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
return $viewHelper299->initializeArgumentsAndRender();
};
$viewHelper300 = $self->getViewHelper('$viewHelper300', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper');
$viewHelper300->setArguments($arguments295);
$viewHelper300->setRenderingContext($renderingContext);
$viewHelper300->setRenderChildrenClosure($renderChildrenClosure296);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper

$output294 .= $viewHelper300->initializeArgumentsAndRender();

$output294 .= '" />';
return $output294;
};
$viewHelper301 = $self->getViewHelper('$viewHelper301', $renderingContext, 'GeorgRinger\News\ViewHelpers\HeaderDataViewHelper');
$viewHelper301->setArguments($arguments292);
$viewHelper301->setRenderingContext($renderingContext);
$viewHelper301->setRenderChildrenClosure($renderChildrenClosure293);
// End of ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper

$output291 .= $viewHelper301->initializeArgumentsAndRender();

$output291 .= '
					';
return $output291;
};

$output274 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext);

$output274 .= '
				';
return $output274;
};
$arguments272['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output302 = '';

$output302 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$arguments303 = array();
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output305 = '';

$output305 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$arguments306 = array();
$arguments306['value'] = NULL;
$arguments306['keepQuotes'] = false;
$arguments306['encoding'] = NULL;
$arguments306['doubleEncode'] = true;
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments308 = array();
// Rendering Array
$array309 = array();
$array309['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext);
$arguments308['arguments'] = $array309;
$arguments308['action'] = NULL;
$arguments308['section'] = '';
$arguments308['format'] = '';
$arguments308['ajax'] = false;
$arguments308['addQueryStringMethod'] = NULL;
$renderChildrenClosure310 = function() {return NULL;};
$viewHelper311 = $self->getViewHelper('$viewHelper311', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper311->setArguments($arguments308);
$viewHelper311->setRenderingContext($renderingContext);
$viewHelper311->setRenderChildrenClosure($renderChildrenClosure310);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
return $viewHelper311->initializeArgumentsAndRender();
};
$viewHelper312 = $self->getViewHelper('$viewHelper312', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper');
$viewHelper312->setArguments($arguments306);
$viewHelper312->setRenderingContext($renderingContext);
$viewHelper312->setRenderChildrenClosure($renderChildrenClosure307);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper

$output305 .= $viewHelper312->initializeArgumentsAndRender();

$output305 .= '" />';
return $output305;
};
$viewHelper313 = $self->getViewHelper('$viewHelper313', $renderingContext, 'GeorgRinger\News\ViewHelpers\HeaderDataViewHelper');
$viewHelper313->setArguments($arguments303);
$viewHelper313->setRenderingContext($renderingContext);
$viewHelper313->setRenderChildrenClosure($renderChildrenClosure304);
// End of ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper

$output302 .= $viewHelper313->initializeArgumentsAndRender();

$output302 .= '
					';
return $output302;
};
$arguments272['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output314 = '';

$output314 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$arguments315 = array();
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output317 = '';

$output317 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$arguments318 = array();
$arguments318['value'] = NULL;
$arguments318['keepQuotes'] = false;
$arguments318['encoding'] = NULL;
$arguments318['doubleEncode'] = true;
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments320 = array();
$arguments320['action'] = NULL;
$arguments320['arguments'] = array (
);
$arguments320['section'] = '';
$arguments320['format'] = '';
$arguments320['ajax'] = false;
$arguments320['addQueryStringMethod'] = NULL;
$renderChildrenClosure321 = function() {return NULL;};
$viewHelper322 = $self->getViewHelper('$viewHelper322', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper322->setArguments($arguments320);
$viewHelper322->setRenderingContext($renderingContext);
$viewHelper322->setRenderChildrenClosure($renderChildrenClosure321);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
return $viewHelper322->initializeArgumentsAndRender();
};
$viewHelper323 = $self->getViewHelper('$viewHelper323', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper');
$viewHelper323->setArguments($arguments318);
$viewHelper323->setRenderingContext($renderingContext);
$viewHelper323->setRenderChildrenClosure($renderChildrenClosure319);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper

$output317 .= $viewHelper323->initializeArgumentsAndRender();

$output317 .= '" />';
return $output317;
};
$viewHelper324 = $self->getViewHelper('$viewHelper324', $renderingContext, 'GeorgRinger\News\ViewHelpers\HeaderDataViewHelper');
$viewHelper324->setArguments($arguments315);
$viewHelper324->setRenderingContext($renderingContext);
$viewHelper324->setRenderChildrenClosure($renderChildrenClosure316);
// End of ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper

$output314 .= $viewHelper324->initializeArgumentsAndRender();

$output314 .= '
					';
return $output314;
};

$output271 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output271 .= '
			';
return $output271;
};

$output268 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output268 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments325 = array();
// Rendering Boolean node
$arguments325['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'nextPage', $renderingContext));
$arguments325['then'] = NULL;
$arguments325['else'] = NULL;
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output327 = '';

$output327 .= '
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$arguments328 = array();
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output330 = '';

$output330 .= '<link rel="next" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$arguments331 = array();
$arguments331['value'] = NULL;
$arguments331['keepQuotes'] = false;
$arguments331['encoding'] = NULL;
$arguments331['doubleEncode'] = true;
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments333 = array();
// Rendering Array
$array334 = array();
$array334['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'nextPage', $renderingContext);
$arguments333['arguments'] = $array334;
$arguments333['action'] = NULL;
$arguments333['section'] = '';
$arguments333['format'] = '';
$arguments333['ajax'] = false;
$arguments333['addQueryStringMethod'] = NULL;
$renderChildrenClosure335 = function() {return NULL;};
$viewHelper336 = $self->getViewHelper('$viewHelper336', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper336->setArguments($arguments333);
$viewHelper336->setRenderingContext($renderingContext);
$viewHelper336->setRenderChildrenClosure($renderChildrenClosure335);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
return $viewHelper336->initializeArgumentsAndRender();
};
$viewHelper337 = $self->getViewHelper('$viewHelper337', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper');
$viewHelper337->setArguments($arguments331);
$viewHelper337->setRenderingContext($renderingContext);
$viewHelper337->setRenderChildrenClosure($renderChildrenClosure332);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper

$output330 .= $viewHelper337->initializeArgumentsAndRender();

$output330 .= '" />';
return $output330;
};
$viewHelper338 = $self->getViewHelper('$viewHelper338', $renderingContext, 'GeorgRinger\News\ViewHelpers\HeaderDataViewHelper');
$viewHelper338->setArguments($arguments328);
$viewHelper338->setRenderingContext($renderingContext);
$viewHelper338->setRenderChildrenClosure($renderChildrenClosure329);
// End of ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper

$output327 .= $viewHelper338->initializeArgumentsAndRender();

$output327 .= '
			';
return $output327;
};

$output268 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output268 .= '
		';
return $output268;
};

$output265 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);

$output265 .= '

		<div class="page-navigation">
			<p>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments339 = array();
$arguments339['key'] = 'paginate_overall';
// Rendering Array
$array340 = array();
$array340['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'current', $renderingContext);
$array340['1'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext);
$arguments339['arguments'] = $array340;
$arguments339['id'] = NULL;
$arguments339['default'] = NULL;
$arguments339['htmlEscape'] = NULL;
$arguments339['extensionName'] = NULL;
$renderChildrenClosure341 = function() {return NULL;};

$output265 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments339, $renderChildrenClosure341, $renderingContext);

$output265 .= '
			</p>
			<ul class="f3-widget-paginator">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments342 = array();
// Rendering Boolean node
$arguments342['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext));
$arguments342['then'] = NULL;
$arguments342['else'] = NULL;
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output344 = '';

$output344 .= '
					<li class="previous">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments345 = array();
// Rendering Boolean node
$arguments345['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext), 1);
$arguments345['then'] = NULL;
$arguments345['else'] = NULL;
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output347 = '';

$output347 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments348 = array();
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output350 = '';

$output350 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments351 = array();
// Rendering Array
$array352 = array();
$array352['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext);
$arguments351['arguments'] = $array352;
$arguments351['additionalAttributes'] = NULL;
$arguments351['data'] = NULL;
$arguments351['action'] = NULL;
$arguments351['section'] = '';
$arguments351['format'] = '';
$arguments351['ajax'] = false;
$arguments351['class'] = NULL;
$arguments351['dir'] = NULL;
$arguments351['id'] = NULL;
$arguments351['lang'] = NULL;
$arguments351['style'] = NULL;
$arguments351['title'] = NULL;
$arguments351['accesskey'] = NULL;
$arguments351['tabindex'] = NULL;
$arguments351['onclick'] = NULL;
$arguments351['name'] = NULL;
$arguments351['rel'] = NULL;
$arguments351['rev'] = NULL;
$arguments351['target'] = NULL;
$arguments351['addQueryStringMethod'] = NULL;
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output354 = '';

$output354 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments355 = array();
$arguments355['key'] = 'paginate_previous';
$arguments355['id'] = NULL;
$arguments355['default'] = NULL;
$arguments355['htmlEscape'] = NULL;
$arguments355['arguments'] = NULL;
$arguments355['extensionName'] = NULL;
$renderChildrenClosure356 = function() {return NULL;};

$output354 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext);

$output354 .= '
								';
return $output354;
};
$viewHelper357 = $self->getViewHelper('$viewHelper357', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper357->setArguments($arguments351);
$viewHelper357->setRenderingContext($renderingContext);
$viewHelper357->setRenderChildrenClosure($renderChildrenClosure353);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output350 .= $viewHelper357->initializeArgumentsAndRender();

$output350 .= '
							';
return $output350;
};

$output347 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments348, $renderChildrenClosure349, $renderingContext);

$output347 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments358 = array();
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output360 = '';

$output360 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments361 = array();
$arguments361['additionalAttributes'] = NULL;
$arguments361['data'] = NULL;
$arguments361['action'] = NULL;
$arguments361['arguments'] = array (
);
$arguments361['section'] = '';
$arguments361['format'] = '';
$arguments361['ajax'] = false;
$arguments361['class'] = NULL;
$arguments361['dir'] = NULL;
$arguments361['id'] = NULL;
$arguments361['lang'] = NULL;
$arguments361['style'] = NULL;
$arguments361['title'] = NULL;
$arguments361['accesskey'] = NULL;
$arguments361['tabindex'] = NULL;
$arguments361['onclick'] = NULL;
$arguments361['name'] = NULL;
$arguments361['rel'] = NULL;
$arguments361['rev'] = NULL;
$arguments361['target'] = NULL;
$arguments361['addQueryStringMethod'] = NULL;
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output363 = '';

$output363 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments364 = array();
$arguments364['key'] = 'paginate_previous';
$arguments364['id'] = NULL;
$arguments364['default'] = NULL;
$arguments364['htmlEscape'] = NULL;
$arguments364['arguments'] = NULL;
$arguments364['extensionName'] = NULL;
$renderChildrenClosure365 = function() {return NULL;};

$output363 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext);

$output363 .= '
								';
return $output363;
};
$viewHelper366 = $self->getViewHelper('$viewHelper366', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper366->setArguments($arguments361);
$viewHelper366->setRenderingContext($renderingContext);
$viewHelper366->setRenderChildrenClosure($renderChildrenClosure362);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output360 .= $viewHelper366->initializeArgumentsAndRender();

$output360 .= '
							';
return $output360;
};

$output347 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext);

$output347 .= '
						';
return $output347;
};
$arguments345['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output367 = '';

$output367 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments368 = array();
// Rendering Array
$array369 = array();
$array369['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext);
$arguments368['arguments'] = $array369;
$arguments368['additionalAttributes'] = NULL;
$arguments368['data'] = NULL;
$arguments368['action'] = NULL;
$arguments368['section'] = '';
$arguments368['format'] = '';
$arguments368['ajax'] = false;
$arguments368['class'] = NULL;
$arguments368['dir'] = NULL;
$arguments368['id'] = NULL;
$arguments368['lang'] = NULL;
$arguments368['style'] = NULL;
$arguments368['title'] = NULL;
$arguments368['accesskey'] = NULL;
$arguments368['tabindex'] = NULL;
$arguments368['onclick'] = NULL;
$arguments368['name'] = NULL;
$arguments368['rel'] = NULL;
$arguments368['rev'] = NULL;
$arguments368['target'] = NULL;
$arguments368['addQueryStringMethod'] = NULL;
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output371 = '';

$output371 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments372 = array();
$arguments372['key'] = 'paginate_previous';
$arguments372['id'] = NULL;
$arguments372['default'] = NULL;
$arguments372['htmlEscape'] = NULL;
$arguments372['arguments'] = NULL;
$arguments372['extensionName'] = NULL;
$renderChildrenClosure373 = function() {return NULL;};

$output371 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments372, $renderChildrenClosure373, $renderingContext);

$output371 .= '
								';
return $output371;
};
$viewHelper374 = $self->getViewHelper('$viewHelper374', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper374->setArguments($arguments368);
$viewHelper374->setRenderingContext($renderingContext);
$viewHelper374->setRenderChildrenClosure($renderChildrenClosure370);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output367 .= $viewHelper374->initializeArgumentsAndRender();

$output367 .= '
							';
return $output367;
};
$arguments345['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output375 = '';

$output375 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments376 = array();
$arguments376['additionalAttributes'] = NULL;
$arguments376['data'] = NULL;
$arguments376['action'] = NULL;
$arguments376['arguments'] = array (
);
$arguments376['section'] = '';
$arguments376['format'] = '';
$arguments376['ajax'] = false;
$arguments376['class'] = NULL;
$arguments376['dir'] = NULL;
$arguments376['id'] = NULL;
$arguments376['lang'] = NULL;
$arguments376['style'] = NULL;
$arguments376['title'] = NULL;
$arguments376['accesskey'] = NULL;
$arguments376['tabindex'] = NULL;
$arguments376['onclick'] = NULL;
$arguments376['name'] = NULL;
$arguments376['rel'] = NULL;
$arguments376['rev'] = NULL;
$arguments376['target'] = NULL;
$arguments376['addQueryStringMethod'] = NULL;
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output378 = '';

$output378 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments379 = array();
$arguments379['key'] = 'paginate_previous';
$arguments379['id'] = NULL;
$arguments379['default'] = NULL;
$arguments379['htmlEscape'] = NULL;
$arguments379['arguments'] = NULL;
$arguments379['extensionName'] = NULL;
$renderChildrenClosure380 = function() {return NULL;};

$output378 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments379, $renderChildrenClosure380, $renderingContext);

$output378 .= '
								';
return $output378;
};
$viewHelper381 = $self->getViewHelper('$viewHelper381', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper381->setArguments($arguments376);
$viewHelper381->setRenderingContext($renderingContext);
$viewHelper381->setRenderChildrenClosure($renderChildrenClosure377);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output375 .= $viewHelper381->initializeArgumentsAndRender();

$output375 .= '
							';
return $output375;
};

$output344 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext);

$output344 .= '
					</li>
				';
return $output344;
};

$output265 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments342, $renderChildrenClosure343, $renderingContext);

$output265 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments382 = array();
// Rendering Boolean node
$arguments382['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'displayRangeStart', $renderingContext), 1);
$arguments382['then'] = NULL;
$arguments382['else'] = NULL;
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output384 = '';

$output384 .= '
					<li class="first">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments385 = array();
$arguments385['additionalAttributes'] = NULL;
$arguments385['data'] = NULL;
$arguments385['action'] = NULL;
$arguments385['arguments'] = array (
);
$arguments385['section'] = '';
$arguments385['format'] = '';
$arguments385['ajax'] = false;
$arguments385['class'] = NULL;
$arguments385['dir'] = NULL;
$arguments385['id'] = NULL;
$arguments385['lang'] = NULL;
$arguments385['style'] = NULL;
$arguments385['title'] = NULL;
$arguments385['accesskey'] = NULL;
$arguments385['tabindex'] = NULL;
$arguments385['onclick'] = NULL;
$arguments385['name'] = NULL;
$arguments385['rel'] = NULL;
$arguments385['rev'] = NULL;
$arguments385['target'] = NULL;
$arguments385['addQueryStringMethod'] = NULL;
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '1';
};
$viewHelper387 = $self->getViewHelper('$viewHelper387', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper387->setArguments($arguments385);
$viewHelper387->setRenderingContext($renderingContext);
$viewHelper387->setRenderChildrenClosure($renderChildrenClosure386);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output384 .= $viewHelper387->initializeArgumentsAndRender();

$output384 .= '
					</li>
				';
return $output384;
};

$output265 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output265 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments388 = array();
// Rendering Boolean node
$arguments388['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'hasLessPages', $renderingContext));
$arguments388['then'] = NULL;
$arguments388['else'] = NULL;
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
					<li>....</li>
				';
};

$output265 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments388, $renderChildrenClosure389, $renderingContext);

$output265 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments390 = array();
$arguments390['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'pages', $renderingContext);
$arguments390['as'] = 'page';
$arguments390['key'] = '';
$arguments390['reverse'] = false;
$arguments390['iteration'] = NULL;
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output392 = '';

$output392 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments393 = array();
// Rendering Boolean node
$arguments393['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'isCurrent', $renderingContext));
$arguments393['then'] = NULL;
$arguments393['else'] = NULL;
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output395 = '';

$output395 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments396 = array();
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output398 = '';

$output398 .= '
							<li class="current">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments399 = array();
$arguments399['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments399['keepQuotes'] = false;
$arguments399['encoding'] = NULL;
$arguments399['doubleEncode'] = true;
$renderChildrenClosure400 = function() {return NULL;};
$value401 = ($arguments399['value'] !== NULL ? $arguments399['value'] : $renderChildrenClosure400());

$output398 .= (!is_string($value401) ? $value401 : htmlspecialchars($value401, ($arguments399['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments399['encoding'] !== NULL ? $arguments399['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments399['doubleEncode']));

$output398 .= '</li>
						';
return $output398;
};

$output395 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output395 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments402 = array();
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output404 = '';

$output404 .= '
							<li>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments405 = array();
// Rendering Boolean node
$arguments405['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext), 1);
$arguments405['then'] = NULL;
$arguments405['else'] = NULL;
$renderChildrenClosure406 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output407 = '';

$output407 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments408 = array();
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output410 = '';

$output410 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments411 = array();
// Rendering Array
$array412 = array();
$array412['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments411['arguments'] = $array412;
$arguments411['additionalAttributes'] = NULL;
$arguments411['data'] = NULL;
$arguments411['action'] = NULL;
$arguments411['section'] = '';
$arguments411['format'] = '';
$arguments411['ajax'] = false;
$arguments411['class'] = NULL;
$arguments411['dir'] = NULL;
$arguments411['id'] = NULL;
$arguments411['lang'] = NULL;
$arguments411['style'] = NULL;
$arguments411['title'] = NULL;
$arguments411['accesskey'] = NULL;
$arguments411['tabindex'] = NULL;
$arguments411['onclick'] = NULL;
$arguments411['name'] = NULL;
$arguments411['rel'] = NULL;
$arguments411['rev'] = NULL;
$arguments411['target'] = NULL;
$arguments411['addQueryStringMethod'] = NULL;
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments414 = array();
$arguments414['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments414['keepQuotes'] = false;
$arguments414['encoding'] = NULL;
$arguments414['doubleEncode'] = true;
$renderChildrenClosure415 = function() {return NULL;};
$value416 = ($arguments414['value'] !== NULL ? $arguments414['value'] : $renderChildrenClosure415());
return (!is_string($value416) ? $value416 : htmlspecialchars($value416, ($arguments414['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments414['encoding'] !== NULL ? $arguments414['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments414['doubleEncode']));
};
$viewHelper417 = $self->getViewHelper('$viewHelper417', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper417->setArguments($arguments411);
$viewHelper417->setRenderingContext($renderingContext);
$viewHelper417->setRenderChildrenClosure($renderChildrenClosure413);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output410 .= $viewHelper417->initializeArgumentsAndRender();

$output410 .= '
									';
return $output410;
};

$output407 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);

$output407 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments418 = array();
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output420 = '';

$output420 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments421 = array();
$arguments421['additionalAttributes'] = NULL;
$arguments421['data'] = NULL;
$arguments421['action'] = NULL;
$arguments421['arguments'] = array (
);
$arguments421['section'] = '';
$arguments421['format'] = '';
$arguments421['ajax'] = false;
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
$arguments421['addQueryStringMethod'] = NULL;
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments423 = array();
$arguments423['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments423['keepQuotes'] = false;
$arguments423['encoding'] = NULL;
$arguments423['doubleEncode'] = true;
$renderChildrenClosure424 = function() {return NULL;};
$value425 = ($arguments423['value'] !== NULL ? $arguments423['value'] : $renderChildrenClosure424());
return (!is_string($value425) ? $value425 : htmlspecialchars($value425, ($arguments423['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments423['encoding'] !== NULL ? $arguments423['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments423['doubleEncode']));
};
$viewHelper426 = $self->getViewHelper('$viewHelper426', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper426->setArguments($arguments421);
$viewHelper426->setRenderingContext($renderingContext);
$viewHelper426->setRenderChildrenClosure($renderChildrenClosure422);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output420 .= $viewHelper426->initializeArgumentsAndRender();

$output420 .= '
									';
return $output420;
};

$output407 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments418, $renderChildrenClosure419, $renderingContext);

$output407 .= '
								';
return $output407;
};
$arguments405['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output427 = '';

$output427 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments428 = array();
// Rendering Array
$array429 = array();
$array429['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments428['arguments'] = $array429;
$arguments428['additionalAttributes'] = NULL;
$arguments428['data'] = NULL;
$arguments428['action'] = NULL;
$arguments428['section'] = '';
$arguments428['format'] = '';
$arguments428['ajax'] = false;
$arguments428['class'] = NULL;
$arguments428['dir'] = NULL;
$arguments428['id'] = NULL;
$arguments428['lang'] = NULL;
$arguments428['style'] = NULL;
$arguments428['title'] = NULL;
$arguments428['accesskey'] = NULL;
$arguments428['tabindex'] = NULL;
$arguments428['onclick'] = NULL;
$arguments428['name'] = NULL;
$arguments428['rel'] = NULL;
$arguments428['rev'] = NULL;
$arguments428['target'] = NULL;
$arguments428['addQueryStringMethod'] = NULL;
$renderChildrenClosure430 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments431 = array();
$arguments431['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments431['keepQuotes'] = false;
$arguments431['encoding'] = NULL;
$arguments431['doubleEncode'] = true;
$renderChildrenClosure432 = function() {return NULL;};
$value433 = ($arguments431['value'] !== NULL ? $arguments431['value'] : $renderChildrenClosure432());
return (!is_string($value433) ? $value433 : htmlspecialchars($value433, ($arguments431['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments431['encoding'] !== NULL ? $arguments431['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments431['doubleEncode']));
};
$viewHelper434 = $self->getViewHelper('$viewHelper434', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper434->setArguments($arguments428);
$viewHelper434->setRenderingContext($renderingContext);
$viewHelper434->setRenderChildrenClosure($renderChildrenClosure430);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output427 .= $viewHelper434->initializeArgumentsAndRender();

$output427 .= '
									';
return $output427;
};
$arguments405['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output435 = '';

$output435 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments436 = array();
$arguments436['additionalAttributes'] = NULL;
$arguments436['data'] = NULL;
$arguments436['action'] = NULL;
$arguments436['arguments'] = array (
);
$arguments436['section'] = '';
$arguments436['format'] = '';
$arguments436['ajax'] = false;
$arguments436['class'] = NULL;
$arguments436['dir'] = NULL;
$arguments436['id'] = NULL;
$arguments436['lang'] = NULL;
$arguments436['style'] = NULL;
$arguments436['title'] = NULL;
$arguments436['accesskey'] = NULL;
$arguments436['tabindex'] = NULL;
$arguments436['onclick'] = NULL;
$arguments436['name'] = NULL;
$arguments436['rel'] = NULL;
$arguments436['rev'] = NULL;
$arguments436['target'] = NULL;
$arguments436['addQueryStringMethod'] = NULL;
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments438 = array();
$arguments438['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments438['keepQuotes'] = false;
$arguments438['encoding'] = NULL;
$arguments438['doubleEncode'] = true;
$renderChildrenClosure439 = function() {return NULL;};
$value440 = ($arguments438['value'] !== NULL ? $arguments438['value'] : $renderChildrenClosure439());
return (!is_string($value440) ? $value440 : htmlspecialchars($value440, ($arguments438['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments438['encoding'] !== NULL ? $arguments438['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments438['doubleEncode']));
};
$viewHelper441 = $self->getViewHelper('$viewHelper441', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper441->setArguments($arguments436);
$viewHelper441->setRenderingContext($renderingContext);
$viewHelper441->setRenderChildrenClosure($renderChildrenClosure437);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output435 .= $viewHelper441->initializeArgumentsAndRender();

$output435 .= '
									';
return $output435;
};

$output404 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments405, $renderChildrenClosure406, $renderingContext);

$output404 .= '
							</li>
						';
return $output404;
};

$output395 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext);

$output395 .= '
					';
return $output395;
};
$arguments393['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output442 = '';

$output442 .= '
							<li class="current">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments443 = array();
$arguments443['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments443['keepQuotes'] = false;
$arguments443['encoding'] = NULL;
$arguments443['doubleEncode'] = true;
$renderChildrenClosure444 = function() {return NULL;};
$value445 = ($arguments443['value'] !== NULL ? $arguments443['value'] : $renderChildrenClosure444());

$output442 .= (!is_string($value445) ? $value445 : htmlspecialchars($value445, ($arguments443['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments443['encoding'] !== NULL ? $arguments443['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments443['doubleEncode']));

$output442 .= '</li>
						';
return $output442;
};
$arguments393['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output446 = '';

$output446 .= '
							<li>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments447 = array();
// Rendering Boolean node
$arguments447['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext), 1);
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
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments453 = array();
// Rendering Array
$array454 = array();
$array454['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments453['arguments'] = $array454;
$arguments453['additionalAttributes'] = NULL;
$arguments453['data'] = NULL;
$arguments453['action'] = NULL;
$arguments453['section'] = '';
$arguments453['format'] = '';
$arguments453['ajax'] = false;
$arguments453['class'] = NULL;
$arguments453['dir'] = NULL;
$arguments453['id'] = NULL;
$arguments453['lang'] = NULL;
$arguments453['style'] = NULL;
$arguments453['title'] = NULL;
$arguments453['accesskey'] = NULL;
$arguments453['tabindex'] = NULL;
$arguments453['onclick'] = NULL;
$arguments453['name'] = NULL;
$arguments453['rel'] = NULL;
$arguments453['rev'] = NULL;
$arguments453['target'] = NULL;
$arguments453['addQueryStringMethod'] = NULL;
$renderChildrenClosure455 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments456 = array();
$arguments456['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments456['keepQuotes'] = false;
$arguments456['encoding'] = NULL;
$arguments456['doubleEncode'] = true;
$renderChildrenClosure457 = function() {return NULL;};
$value458 = ($arguments456['value'] !== NULL ? $arguments456['value'] : $renderChildrenClosure457());
return (!is_string($value458) ? $value458 : htmlspecialchars($value458, ($arguments456['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments456['encoding'] !== NULL ? $arguments456['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments456['doubleEncode']));
};
$viewHelper459 = $self->getViewHelper('$viewHelper459', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper459->setArguments($arguments453);
$viewHelper459->setRenderingContext($renderingContext);
$viewHelper459->setRenderChildrenClosure($renderChildrenClosure455);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output452 .= $viewHelper459->initializeArgumentsAndRender();

$output452 .= '
									';
return $output452;
};

$output449 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output449 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments460 = array();
$renderChildrenClosure461 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output462 = '';

$output462 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments463 = array();
$arguments463['additionalAttributes'] = NULL;
$arguments463['data'] = NULL;
$arguments463['action'] = NULL;
$arguments463['arguments'] = array (
);
$arguments463['section'] = '';
$arguments463['format'] = '';
$arguments463['ajax'] = false;
$arguments463['class'] = NULL;
$arguments463['dir'] = NULL;
$arguments463['id'] = NULL;
$arguments463['lang'] = NULL;
$arguments463['style'] = NULL;
$arguments463['title'] = NULL;
$arguments463['accesskey'] = NULL;
$arguments463['tabindex'] = NULL;
$arguments463['onclick'] = NULL;
$arguments463['name'] = NULL;
$arguments463['rel'] = NULL;
$arguments463['rev'] = NULL;
$arguments463['target'] = NULL;
$arguments463['addQueryStringMethod'] = NULL;
$renderChildrenClosure464 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments465 = array();
$arguments465['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments465['keepQuotes'] = false;
$arguments465['encoding'] = NULL;
$arguments465['doubleEncode'] = true;
$renderChildrenClosure466 = function() {return NULL;};
$value467 = ($arguments465['value'] !== NULL ? $arguments465['value'] : $renderChildrenClosure466());
return (!is_string($value467) ? $value467 : htmlspecialchars($value467, ($arguments465['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments465['encoding'] !== NULL ? $arguments465['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments465['doubleEncode']));
};
$viewHelper468 = $self->getViewHelper('$viewHelper468', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper468->setArguments($arguments463);
$viewHelper468->setRenderingContext($renderingContext);
$viewHelper468->setRenderChildrenClosure($renderChildrenClosure464);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output462 .= $viewHelper468->initializeArgumentsAndRender();

$output462 .= '
									';
return $output462;
};

$output449 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments460, $renderChildrenClosure461, $renderingContext);

$output449 .= '
								';
return $output449;
};
$arguments447['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output469 = '';

$output469 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments470 = array();
// Rendering Array
$array471 = array();
$array471['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments470['arguments'] = $array471;
$arguments470['additionalAttributes'] = NULL;
$arguments470['data'] = NULL;
$arguments470['action'] = NULL;
$arguments470['section'] = '';
$arguments470['format'] = '';
$arguments470['ajax'] = false;
$arguments470['class'] = NULL;
$arguments470['dir'] = NULL;
$arguments470['id'] = NULL;
$arguments470['lang'] = NULL;
$arguments470['style'] = NULL;
$arguments470['title'] = NULL;
$arguments470['accesskey'] = NULL;
$arguments470['tabindex'] = NULL;
$arguments470['onclick'] = NULL;
$arguments470['name'] = NULL;
$arguments470['rel'] = NULL;
$arguments470['rev'] = NULL;
$arguments470['target'] = NULL;
$arguments470['addQueryStringMethod'] = NULL;
$renderChildrenClosure472 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments473 = array();
$arguments473['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments473['keepQuotes'] = false;
$arguments473['encoding'] = NULL;
$arguments473['doubleEncode'] = true;
$renderChildrenClosure474 = function() {return NULL;};
$value475 = ($arguments473['value'] !== NULL ? $arguments473['value'] : $renderChildrenClosure474());
return (!is_string($value475) ? $value475 : htmlspecialchars($value475, ($arguments473['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments473['encoding'] !== NULL ? $arguments473['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments473['doubleEncode']));
};
$viewHelper476 = $self->getViewHelper('$viewHelper476', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper476->setArguments($arguments470);
$viewHelper476->setRenderingContext($renderingContext);
$viewHelper476->setRenderChildrenClosure($renderChildrenClosure472);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output469 .= $viewHelper476->initializeArgumentsAndRender();

$output469 .= '
									';
return $output469;
};
$arguments447['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output477 = '';

$output477 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments478 = array();
$arguments478['additionalAttributes'] = NULL;
$arguments478['data'] = NULL;
$arguments478['action'] = NULL;
$arguments478['arguments'] = array (
);
$arguments478['section'] = '';
$arguments478['format'] = '';
$arguments478['ajax'] = false;
$arguments478['class'] = NULL;
$arguments478['dir'] = NULL;
$arguments478['id'] = NULL;
$arguments478['lang'] = NULL;
$arguments478['style'] = NULL;
$arguments478['title'] = NULL;
$arguments478['accesskey'] = NULL;
$arguments478['tabindex'] = NULL;
$arguments478['onclick'] = NULL;
$arguments478['name'] = NULL;
$arguments478['rel'] = NULL;
$arguments478['rev'] = NULL;
$arguments478['target'] = NULL;
$arguments478['addQueryStringMethod'] = NULL;
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments480 = array();
$arguments480['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments480['keepQuotes'] = false;
$arguments480['encoding'] = NULL;
$arguments480['doubleEncode'] = true;
$renderChildrenClosure481 = function() {return NULL;};
$value482 = ($arguments480['value'] !== NULL ? $arguments480['value'] : $renderChildrenClosure481());
return (!is_string($value482) ? $value482 : htmlspecialchars($value482, ($arguments480['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments480['encoding'] !== NULL ? $arguments480['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments480['doubleEncode']));
};
$viewHelper483 = $self->getViewHelper('$viewHelper483', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper483->setArguments($arguments478);
$viewHelper483->setRenderingContext($renderingContext);
$viewHelper483->setRenderChildrenClosure($renderChildrenClosure479);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output477 .= $viewHelper483->initializeArgumentsAndRender();

$output477 .= '
									';
return $output477;
};

$output446 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);

$output446 .= '
							</li>
						';
return $output446;
};

$output392 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments393, $renderChildrenClosure394, $renderingContext);

$output392 .= '
				';
return $output392;
};

$output265 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext);

$output265 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments484 = array();
// Rendering Boolean node
$arguments484['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'hasMorePages', $renderingContext));
$arguments484['then'] = NULL;
$arguments484['else'] = NULL;
$renderChildrenClosure485 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
					<li>....</li>
				';
};

$output265 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments484, $renderChildrenClosure485, $renderingContext);

$output265 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments486 = array();
// Rendering Boolean node
$arguments486['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'displayRangeEnd', $renderingContext), \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext));
$arguments486['then'] = NULL;
$arguments486['else'] = NULL;
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output488 = '';

$output488 .= '
					<li class="last">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments489 = array();
// Rendering Array
$array490 = array();
$array490['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext);
$arguments489['arguments'] = $array490;
$arguments489['additionalAttributes'] = NULL;
$arguments489['data'] = NULL;
$arguments489['action'] = NULL;
$arguments489['section'] = '';
$arguments489['format'] = '';
$arguments489['ajax'] = false;
$arguments489['class'] = NULL;
$arguments489['dir'] = NULL;
$arguments489['id'] = NULL;
$arguments489['lang'] = NULL;
$arguments489['style'] = NULL;
$arguments489['title'] = NULL;
$arguments489['accesskey'] = NULL;
$arguments489['tabindex'] = NULL;
$arguments489['onclick'] = NULL;
$arguments489['name'] = NULL;
$arguments489['rel'] = NULL;
$arguments489['rev'] = NULL;
$arguments489['target'] = NULL;
$arguments489['addQueryStringMethod'] = NULL;
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments492 = array();
$arguments492['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext);
$arguments492['keepQuotes'] = false;
$arguments492['encoding'] = NULL;
$arguments492['doubleEncode'] = true;
$renderChildrenClosure493 = function() {return NULL;};
$value494 = ($arguments492['value'] !== NULL ? $arguments492['value'] : $renderChildrenClosure493());
return (!is_string($value494) ? $value494 : htmlspecialchars($value494, ($arguments492['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments492['encoding'] !== NULL ? $arguments492['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments492['doubleEncode']));
};
$viewHelper495 = $self->getViewHelper('$viewHelper495', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper495->setArguments($arguments489);
$viewHelper495->setRenderingContext($renderingContext);
$viewHelper495->setRenderChildrenClosure($renderChildrenClosure491);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output488 .= $viewHelper495->initializeArgumentsAndRender();

$output488 .= '
					</li>
				';
return $output488;
};

$output265 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);

$output265 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments496 = array();
// Rendering Boolean node
$arguments496['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'nextPage', $renderingContext));
$arguments496['then'] = NULL;
$arguments496['else'] = NULL;
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output498 = '';

$output498 .= '
					<li class="last next">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments499 = array();
// Rendering Array
$array500 = array();
$array500['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'nextPage', $renderingContext);
$arguments499['arguments'] = $array500;
$arguments499['additionalAttributes'] = NULL;
$arguments499['data'] = NULL;
$arguments499['action'] = NULL;
$arguments499['section'] = '';
$arguments499['format'] = '';
$arguments499['ajax'] = false;
$arguments499['class'] = NULL;
$arguments499['dir'] = NULL;
$arguments499['id'] = NULL;
$arguments499['lang'] = NULL;
$arguments499['style'] = NULL;
$arguments499['title'] = NULL;
$arguments499['accesskey'] = NULL;
$arguments499['tabindex'] = NULL;
$arguments499['onclick'] = NULL;
$arguments499['name'] = NULL;
$arguments499['rel'] = NULL;
$arguments499['rev'] = NULL;
$arguments499['target'] = NULL;
$arguments499['addQueryStringMethod'] = NULL;
$renderChildrenClosure501 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output502 = '';

$output502 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments503 = array();
$arguments503['key'] = 'paginate_next';
$arguments503['id'] = NULL;
$arguments503['default'] = NULL;
$arguments503['htmlEscape'] = NULL;
$arguments503['arguments'] = NULL;
$arguments503['extensionName'] = NULL;
$renderChildrenClosure504 = function() {return NULL;};

$output502 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments503, $renderChildrenClosure504, $renderingContext);

$output502 .= '
						';
return $output502;
};
$viewHelper505 = $self->getViewHelper('$viewHelper505', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper505->setArguments($arguments499);
$viewHelper505->setRenderingContext($renderingContext);
$viewHelper505->setRenderChildrenClosure($renderChildrenClosure501);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output498 .= $viewHelper505->initializeArgumentsAndRender();

$output498 .= '
					</li>
				';
return $output498;
};

$output265 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments496, $renderChildrenClosure497, $renderingContext);

$output265 .= '
			</ul>
		</div>
		<div class="news-clear"></div>
	';
return $output265;
};

$output262 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output262 .= '
';
return $output262;
};

$output244 .= '';

$output244 .= '
';


return $output244;
}


}
#1468058006    144041    