<?php
class FluidCache_News_News_action_detail_228f54efc26ca0dae73c49520d69b55f0cec2095 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'Detail.html';
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
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('newsItem'));
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
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\NothingViewHelper
$arguments7 = array();
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments10 = array();
// Rendering Boolean node
$arguments10['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'alternativeTitle', $renderingContext));
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
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$arguments16 = array();
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output18 = '';

$output18 .= '
							';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$arguments19 = array();
$arguments19['value'] = NULL;
$arguments19['keepQuotes'] = false;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'alternativeTitle', $renderingContext);
};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper');
$viewHelper21->setArguments($arguments19);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper

$output18 .= $viewHelper21->initializeArgumentsAndRender();

$output18 .= '
						';
return $output18;
};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'GeorgRinger\News\ViewHelpers\TitleTagViewHelper');
$viewHelper22->setArguments($arguments16);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper

$output15 .= $viewHelper22->initializeArgumentsAndRender();

$output15 .= '
					';
return $output15;
};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments23 = array();
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output25 = '';

$output25 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$arguments26 = array();
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output28 = '';

$output28 .= '
							';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$arguments29 = array();
$arguments29['value'] = NULL;
$arguments29['keepQuotes'] = false;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
};
$viewHelper31 = $self->getViewHelper('$viewHelper31', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper');
$viewHelper31->setArguments($arguments29);
$viewHelper31->setRenderingContext($renderingContext);
$viewHelper31->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper

$output28 .= $viewHelper31->initializeArgumentsAndRender();

$output28 .= '
						';
return $output28;
};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'GeorgRinger\News\ViewHelpers\TitleTagViewHelper');
$viewHelper32->setArguments($arguments26);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper

$output25 .= $viewHelper32->initializeArgumentsAndRender();

$output25 .= '
					';
return $output25;
};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output12 .= '
				';
return $output12;
};
$arguments10['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output33 = '';

$output33 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$arguments34 = array();
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output36 = '';

$output36 .= '
							';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$arguments37 = array();
$arguments37['value'] = NULL;
$arguments37['keepQuotes'] = false;
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'alternativeTitle', $renderingContext);
};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper');
$viewHelper39->setArguments($arguments37);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure38);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper

$output36 .= $viewHelper39->initializeArgumentsAndRender();

$output36 .= '
						';
return $output36;
};
$viewHelper40 = $self->getViewHelper('$viewHelper40', $renderingContext, 'GeorgRinger\News\ViewHelpers\TitleTagViewHelper');
$viewHelper40->setArguments($arguments34);
$viewHelper40->setRenderingContext($renderingContext);
$viewHelper40->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper

$output33 .= $viewHelper40->initializeArgumentsAndRender();

$output33 .= '
					';
return $output33;
};
$arguments10['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output41 = '';

$output41 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$arguments42 = array();
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output44 = '';

$output44 .= '
							';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$arguments45 = array();
$arguments45['value'] = NULL;
$arguments45['keepQuotes'] = false;
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
};
$viewHelper47 = $self->getViewHelper('$viewHelper47', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper');
$viewHelper47->setArguments($arguments45);
$viewHelper47->setRenderingContext($renderingContext);
$viewHelper47->setRenderChildrenClosure($renderChildrenClosure46);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper

$output44 .= $viewHelper47->initializeArgumentsAndRender();

$output44 .= '
						';
return $output44;
};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'GeorgRinger\News\ViewHelpers\TitleTagViewHelper');
$viewHelper48->setArguments($arguments42);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper

$output41 .= $viewHelper48->initializeArgumentsAndRender();

$output41 .= '
					';
return $output41;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments49 = array();
$arguments49['partial'] = 'Detail/Opengraph';
// Rendering Array
$array50 = array();
$array50['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$array50['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments49['arguments'] = $array50;
$arguments49['section'] = NULL;
$arguments49['optional'] = false;
$renderChildrenClosure51 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments49, $renderChildrenClosure51, $renderingContext);

$output9 .= '
			';
return $output9;
};
$viewHelper52 = $self->getViewHelper('$viewHelper52', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\NothingViewHelper');
$viewHelper52->setArguments($arguments7);
$viewHelper52->setRenderingContext($renderingContext);
$viewHelper52->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\NothingViewHelper

$output6 .= $viewHelper52->initializeArgumentsAndRender();

$output6 .= '
			<div class="header">
				<h3 itemprop="headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments53 = array();
$arguments53['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments53['keepQuotes'] = false;
$arguments53['encoding'] = NULL;
$arguments53['doubleEncode'] = true;
$renderChildrenClosure54 = function() {return NULL;};
$value55 = ($arguments53['value'] !== NULL ? $arguments53['value'] : $renderChildrenClosure54());

$output6 .= (!is_string($value55) ? $value55 : htmlspecialchars($value55, ($arguments53['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments53['encoding'] !== NULL ? $arguments53['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments53['doubleEncode']));

$output6 .= '</h3>
			</div>
			<div class="footer">
				<p>
					<!-- date -->
					<span class="news-list-date">
						<time datetime="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments56 = array();
$arguments56['date'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'datetime', $renderingContext);
$arguments56['format'] = 'Y-m-d';
$arguments56['base'] = NULL;
$renderChildrenClosure57 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output6 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments58 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments59 = array();
$arguments59['key'] = 'dateFormat';
$arguments59['id'] = NULL;
$arguments59['default'] = NULL;
$arguments59['htmlEscape'] = NULL;
$arguments59['arguments'] = NULL;
$arguments59['extensionName'] = NULL;
$renderChildrenClosure60 = function() {return NULL;};
$arguments58['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);
$arguments58['date'] = NULL;
$arguments58['base'] = NULL;
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'datetime', $renderingContext);
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments58, $renderChildrenClosure61, $renderingContext);

$output6 .= '
							<meta itemprop="datePublished" content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments62 = array();
$arguments62['date'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'datetime', $renderingContext);
$arguments62['format'] = 'Y-m-d';
$arguments62['base'] = NULL;
$renderChildrenClosure63 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output6 .= '" />
						</time>
					</span>

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments64 = array();
// Rendering Boolean node
$arguments64['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'categories', $renderingContext));
$arguments64['then'] = NULL;
$arguments64['else'] = NULL;
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output66 = '';

$output66 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments67 = array();
$arguments67['partial'] = 'Category/Items';
// Rendering Array
$array68 = array();
$array68['categories'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'categories', $renderingContext);
$array68['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments67['arguments'] = $array68;
$arguments67['section'] = NULL;
$arguments67['optional'] = false;
$renderChildrenClosure69 = function() {return NULL;};

$output66 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments67, $renderChildrenClosure69, $renderingContext);

$output66 .= '
					';
return $output66;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output6 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments70 = array();
// Rendering Boolean node
$arguments70['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'tags', $renderingContext));
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output72 = '';

$output72 .= '
						<!-- Tags -->
						<span class="news-list-tags" itemprop="keywords">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments73 = array();
$arguments73['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'tags', $renderingContext);
$arguments73['as'] = 'tag';
$arguments73['key'] = '';
$arguments73['reverse'] = false;
$arguments73['iteration'] = NULL;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output75 = '';

$output75 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments76 = array();
$arguments76['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('tag'), 'title', $renderingContext);
$arguments76['keepQuotes'] = false;
$arguments76['encoding'] = NULL;
$arguments76['doubleEncode'] = true;
$renderChildrenClosure77 = function() {return NULL;};
$value78 = ($arguments76['value'] !== NULL ? $arguments76['value'] : $renderChildrenClosure77());

$output75 .= (!is_string($value78) ? $value78 : htmlspecialchars($value78, ($arguments76['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments76['encoding'] !== NULL ? $arguments76['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments76['doubleEncode']));

$output75 .= '
						';
return $output75;
};

$output72 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output72 .= '
						</span>
					';
return $output72;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output6 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments79 = array();
// Rendering Boolean node
$arguments79['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'author', $renderingContext));
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output81 = '';

$output81 .= '
						<!-- author -->
						<span class="news-list-author" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments82 = array();
$arguments82['key'] = 'author_simple';
$arguments82['id'] = NULL;
$arguments82['default'] = NULL;
$arguments82['htmlEscape'] = NULL;
$arguments82['arguments'] = NULL;
$arguments82['extensionName'] = NULL;
$renderChildrenClosure83 = function() {return NULL;};

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= ' <span itemprop="name">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments84 = array();
$arguments84['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'author', $renderingContext);
$arguments84['keepQuotes'] = false;
$arguments84['encoding'] = NULL;
$arguments84['doubleEncode'] = true;
$renderChildrenClosure85 = function() {return NULL;};
$value86 = ($arguments84['value'] !== NULL ? $arguments84['value'] : $renderChildrenClosure85());

$output81 .= (!is_string($value86) ? $value86 : htmlspecialchars($value86, ($arguments84['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments84['encoding'] !== NULL ? $arguments84['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments84['doubleEncode']));

$output81 .= '</span>
						</span>
					';
return $output81;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output6 .= '
				</p>
			</div>

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments87 = array();
// Rendering Boolean node
$arguments87['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext));
$arguments87['then'] = NULL;
$arguments87['else'] = NULL;
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output89 = '';

$output89 .= '
				<!-- teaser -->
				<div class="teaser-text" itemprop="description">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments90 = array();
$arguments90['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext);
};

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
				</div>
			';
return $output89;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output6 .= '

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments92 = array();
// Rendering Boolean node
$arguments92['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'contentElements', $renderingContext));
$arguments92['then'] = NULL;
$arguments92['else'] = NULL;
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output94 = '';

$output94 .= '
				<!-- content elements -->
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments95 = array();
$arguments95['typoscriptObjectPath'] = 'lib.tx_news.contentElementRendering';
$arguments95['data'] = NULL;
$arguments95['currentValueKey'] = NULL;
$arguments95['table'] = '';
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'contentElementIdList', $renderingContext);
};
$viewHelper97 = $self->getViewHelper('$viewHelper97', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper97->setArguments($arguments95);
$viewHelper97->setRenderingContext($renderingContext);
$viewHelper97->setRenderChildrenClosure($renderChildrenClosure96);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output94 .= $viewHelper97->initializeArgumentsAndRender();

$output94 .= '
			';
return $output94;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output6 .= '

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments98 = array();
$arguments98['partial'] = 'Detail/FalMediaContainer';
// Rendering Array
$array99 = array();
$array99['media'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falMedia', $renderingContext);
$array99['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments98['arguments'] = $array99;
$arguments98['section'] = NULL;
$arguments98['optional'] = false;
$renderChildrenClosure100 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments98, $renderChildrenClosure100, $renderingContext);

$output6 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments101 = array();
$arguments101['partial'] = 'Detail/MediaContainer';
// Rendering Array
$array102 = array();
$array102['media'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'media', $renderingContext);
$array102['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments101['arguments'] = $array102;
$arguments101['section'] = NULL;
$arguments101['optional'] = false;
$renderChildrenClosure103 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments101, $renderChildrenClosure103, $renderingContext);

$output6 .= '

			<!-- main text -->
			<div class="news-text-wrap" itemprop="articleBody">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments104 = array();
$arguments104['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'bodytext', $renderingContext);
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output6 .= '
			</div>

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments106 = array();
// Rendering Boolean node
$arguments106['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'backPid', $renderingContext));
$arguments106['then'] = NULL;
$arguments106['else'] = NULL;
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output108 = '';

$output108 .= '
				<!-- Link Back -->
				<div class="news-backlink-wrap">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments109 = array();
$arguments109['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'backPid', $renderingContext);
$arguments109['additionalAttributes'] = NULL;
$arguments109['data'] = NULL;
$arguments109['additionalParams'] = array (
);
$arguments109['pageType'] = 0;
$arguments109['noCache'] = false;
$arguments109['noCacheHash'] = false;
$arguments109['section'] = '';
$arguments109['linkAccessRestrictedPages'] = false;
$arguments109['absolute'] = false;
$arguments109['addQueryString'] = false;
$arguments109['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments109['addQueryStringMethod'] = NULL;
$arguments109['class'] = NULL;
$arguments109['dir'] = NULL;
$arguments109['id'] = NULL;
$arguments109['lang'] = NULL;
$arguments109['style'] = NULL;
$arguments109['title'] = NULL;
$arguments109['accesskey'] = NULL;
$arguments109['tabindex'] = NULL;
$arguments109['onclick'] = NULL;
$arguments109['target'] = NULL;
$arguments109['rel'] = NULL;
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output111 = '';

$output111 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments112 = array();
$arguments112['key'] = 'back-link';
$arguments112['id'] = NULL;
$arguments112['default'] = NULL;
$arguments112['htmlEscape'] = NULL;
$arguments112['arguments'] = NULL;
$arguments112['extensionName'] = NULL;
$renderChildrenClosure113 = function() {return NULL;};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output111 .= '
					';
return $output111;
};
$viewHelper114 = $self->getViewHelper('$viewHelper114', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper114->setArguments($arguments109);
$viewHelper114->setRenderingContext($renderingContext);
$viewHelper114->setRenderChildrenClosure($renderChildrenClosure110);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output108 .= $viewHelper114->initializeArgumentsAndRender();

$output108 .= '
				</div>
			';
return $output108;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output6 .= '

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments115 = array();
// Rendering Boolean node
$arguments115['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'detail.showSocialShareButtons', $renderingContext));
$arguments115['then'] = NULL;
$arguments115['else'] = NULL;
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output117 = '';

$output117 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments118 = array();
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output120 = '';

$output120 .= '
					';

$output120 .= '
					Care about the privacy of your readers?
					Checkout https://typo3.org/extensions/repository/view/rx_shariff
					and integrate it here with:
					<div >
						<rx:shariff services="facebook,xing,twitter,twitter" enableBackend="true" />
					</div>
					';

$output120 .= '
				';
return $output120;
};

$output117 .= '';

$output117 .= '
				<div class="facebook">
					<div class="like">
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Social\Facebook\LikeViewHelper
$arguments121 = array();
$arguments121['additionalAttributes'] = NULL;
$arguments121['data'] = NULL;
$arguments121['href'] = NULL;
$arguments121['layout'] = NULL;
$arguments121['width'] = NULL;
$arguments121['font'] = NULL;
$arguments121['javaScript'] = NULL;
$renderChildrenClosure122 = function() {return NULL;};
$viewHelper123 = $self->getViewHelper('$viewHelper123', $renderingContext, 'GeorgRinger\News\ViewHelpers\Social\Facebook\LikeViewHelper');
$viewHelper123->setArguments($arguments121);
$viewHelper123->setRenderingContext($renderingContext);
$viewHelper123->setRenderChildrenClosure($renderChildrenClosure122);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Social\Facebook\LikeViewHelper

$output117 .= $viewHelper123->initializeArgumentsAndRender();

$output117 .= '
					</div>
					<div class="share">
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Social\Facebook\ShareViewHelper
$arguments124 = array();
$arguments124['additionalAttributes'] = NULL;
$arguments124['data'] = NULL;
$arguments124['loadJs'] = true;
$arguments124['type'] = NULL;
$renderChildrenClosure125 = function() {return NULL;};
$viewHelper126 = $self->getViewHelper('$viewHelper126', $renderingContext, 'GeorgRinger\News\ViewHelpers\Social\Facebook\ShareViewHelper');
$viewHelper126->setArguments($arguments124);
$viewHelper126->setRenderingContext($renderingContext);
$viewHelper126->setRenderChildrenClosure($renderChildrenClosure125);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Social\Facebook\ShareViewHelper

$output117 .= $viewHelper126->initializeArgumentsAndRender();

$output117 .= '
					</div>
					<div class="twitter">
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Social\TwitterViewHelper
$arguments127 = array();
$arguments127['additionalAttributes'] = NULL;
$arguments127['data'] = NULL;
$arguments127['class'] = NULL;
$arguments127['datacount'] = NULL;
$arguments127['datavia'] = NULL;
$arguments127['datarelated'] = NULL;
$arguments127['datatext'] = NULL;
$arguments127['dataurl'] = NULL;
$arguments127['datalang'] = NULL;
$arguments127['javaScript'] = NULL;
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Twitter';
};
$viewHelper129 = $self->getViewHelper('$viewHelper129', $renderingContext, 'GeorgRinger\News\ViewHelpers\Social\TwitterViewHelper');
$viewHelper129->setArguments($arguments127);
$viewHelper129->setRenderingContext($renderingContext);
$viewHelper129->setRenderChildrenClosure($renderChildrenClosure128);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Social\TwitterViewHelper

$output117 .= $viewHelper129->initializeArgumentsAndRender();

$output117 .= '
					</div>
				</div>
			';
return $output117;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output6 .= '

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments130 = array();
// Rendering Boolean node
$arguments130['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'detail.disqusShortname', $renderingContext));
$arguments130['then'] = NULL;
$arguments130['else'] = NULL;
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output132 = '';

$output132 .= '
				<div id="disqus_thread"></div>
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Social\DisqusViewHelper
$arguments133 = array();
$arguments133['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments133['shortName'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'detail.disqusShortname', $renderingContext);
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments134 = array();
$arguments134['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments134['settings'] = $currentVariableContainer->getOrNull('settings');
// Rendering Boolean node
$arguments134['uriOnly'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
// Rendering Array
$array135 = array();
$array135['forceAbsoluteUrl'] = 1;
$arguments134['configuration'] = $array135;
$arguments134['additionalAttributes'] = NULL;
$arguments134['data'] = NULL;
$arguments134['content'] = '';
$arguments134['class'] = NULL;
$arguments134['dir'] = NULL;
$arguments134['id'] = NULL;
$arguments134['lang'] = NULL;
$arguments134['style'] = NULL;
$arguments134['title'] = NULL;
$arguments134['accesskey'] = NULL;
$arguments134['tabindex'] = NULL;
$arguments134['onclick'] = NULL;
$arguments134['section'] = NULL;
$renderChildrenClosure136 = function() {return NULL;};
$viewHelper137 = $self->getViewHelper('$viewHelper137', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper137->setArguments($arguments134);
$viewHelper137->setRenderingContext($renderingContext);
$viewHelper137->setRenderChildrenClosure($renderChildrenClosure136);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments133['link'] = $viewHelper137->initializeArgumentsAndRender();
$renderChildrenClosure138 = function() {return NULL;};
$viewHelper139 = $self->getViewHelper('$viewHelper139', $renderingContext, 'GeorgRinger\News\ViewHelpers\Social\DisqusViewHelper');
$viewHelper139->setArguments($arguments133);
$viewHelper139->setRenderingContext($renderingContext);
$viewHelper139->setRenderChildrenClosure($renderChildrenClosure138);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Social\DisqusViewHelper

$output132 .= $viewHelper139->initializeArgumentsAndRender();

$output132 .= '
			';
return $output132;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output6 .= '

			<!-- related things -->
			<div class="news-related-wrap">

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments140 = array();
// Rendering Boolean node
$arguments140['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'allRelatedSorted', $renderingContext));
$arguments140['then'] = NULL;
$arguments140['else'] = NULL;
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output142 = '';

$output142 .= '
					<!-- Related news records -->
					<div class="news-related news-related-news">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments143 = array();
$arguments143['key'] = 'related-news';
$arguments143['id'] = NULL;
$arguments143['default'] = NULL;
$arguments143['htmlEscape'] = NULL;
$arguments143['arguments'] = NULL;
$arguments143['extensionName'] = NULL;
$renderChildrenClosure144 = function() {return NULL;};

$output142 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output142 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments145 = array();
$arguments145['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'allRelatedSorted', $renderingContext);
$arguments145['as'] = 'related';
$arguments145['key'] = '';
$arguments145['reverse'] = false;
$arguments145['iteration'] = NULL;
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output147 = '';

$output147 .= '
								<li>
									<span class="news-related-news-date">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments148 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments149 = array();
$arguments149['key'] = 'dateFormat';
$arguments149['id'] = NULL;
$arguments149['default'] = NULL;
$arguments149['htmlEscape'] = NULL;
$arguments149['arguments'] = NULL;
$arguments149['extensionName'] = NULL;
$renderChildrenClosure150 = function() {return NULL;};
$arguments148['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);
$arguments148['date'] = NULL;
$arguments148['base'] = NULL;
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('related'), 'datetime', $renderingContext);
};

$output147 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments148, $renderChildrenClosure151, $renderingContext);

$output147 .= '</span>
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments152 = array();
$arguments152['newsItem'] = $currentVariableContainer->getOrNull('related');
$arguments152['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments152['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('related'), 'title', $renderingContext);
$arguments152['additionalAttributes'] = NULL;
$arguments152['data'] = NULL;
$arguments152['uriOnly'] = false;
$arguments152['configuration'] = array (
);
$arguments152['content'] = '';
$arguments152['class'] = NULL;
$arguments152['dir'] = NULL;
$arguments152['id'] = NULL;
$arguments152['lang'] = NULL;
$arguments152['style'] = NULL;
$arguments152['accesskey'] = NULL;
$arguments152['tabindex'] = NULL;
$arguments152['onclick'] = NULL;
$arguments152['section'] = NULL;
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output154 = '';

$output154 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments155 = array();
$arguments155['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('related'), 'title', $renderingContext);
$arguments155['keepQuotes'] = false;
$arguments155['encoding'] = NULL;
$arguments155['doubleEncode'] = true;
$renderChildrenClosure156 = function() {return NULL;};
$value157 = ($arguments155['value'] !== NULL ? $arguments155['value'] : $renderChildrenClosure156());

$output154 .= (!is_string($value157) ? $value157 : htmlspecialchars($value157, ($arguments155['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments155['encoding'] !== NULL ? $arguments155['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments155['doubleEncode']));

$output154 .= '
									';
return $output154;
};
$viewHelper158 = $self->getViewHelper('$viewHelper158', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper158->setArguments($arguments152);
$viewHelper158->setRenderingContext($renderingContext);
$viewHelper158->setRenderChildrenClosure($renderChildrenClosure153);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output147 .= $viewHelper158->initializeArgumentsAndRender();

$output147 .= '
								</li>

							';
return $output147;
};

$output142 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output142 .= '
						</ul>
					</div>
				';
return $output142;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output6 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments159 = array();
// Rendering Boolean node
$arguments159['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'relatedFiles', $renderingContext));
$arguments159['then'] = NULL;
$arguments159['else'] = NULL;
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output161 = '';

$output161 .= '
					<!-- Related files -->
					<div class="news-related news-related-files">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments162 = array();
$arguments162['key'] = 'related-files';
$arguments162['id'] = NULL;
$arguments162['default'] = NULL;
$arguments162['htmlEscape'] = NULL;
$arguments162['arguments'] = NULL;
$arguments162['extensionName'] = NULL;
$renderChildrenClosure163 = function() {return NULL;};

$output161 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output161 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments164 = array();
$arguments164['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'relatedFiles', $renderingContext);
$arguments164['as'] = 'relatedFile';
$arguments164['key'] = '';
$arguments164['reverse'] = false;
$arguments164['iteration'] = NULL;
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output166 = '';

$output166 .= '
								<li>
									<span class="news-related-files-link">
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\FileDownloadViewHelper
$arguments167 = array();
$output168 = '';

$output168 .= 'uploads/tx_news/';

$output168 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'file', $renderingContext);
$arguments167['file'] = $output168;
$arguments167['configuration'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'relatedFiles.download', $renderingContext);
$arguments167['hideError'] = false;
$arguments167['class'] = '';
$arguments167['target'] = '';
$arguments167['alt'] = '';
$arguments167['title'] = '';
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output170 = '';

$output170 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments171 = array();
// Rendering Boolean node
$arguments171['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'title', $renderingContext));
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
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments177 = array();
$arguments177['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'title', $renderingContext);
$arguments177['keepQuotes'] = false;
$arguments177['encoding'] = NULL;
$arguments177['doubleEncode'] = true;
$renderChildrenClosure178 = function() {return NULL;};
$value179 = ($arguments177['value'] !== NULL ? $arguments177['value'] : $renderChildrenClosure178());

$output176 .= (!is_string($value179) ? $value179 : htmlspecialchars($value179, ($arguments177['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments177['encoding'] !== NULL ? $arguments177['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments177['doubleEncode']));

$output176 .= '
												';
return $output176;
};

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output173 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments180 = array();
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output182 = '';

$output182 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments183 = array();
$arguments183['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'file', $renderingContext);
$arguments183['keepQuotes'] = false;
$arguments183['encoding'] = NULL;
$arguments183['doubleEncode'] = true;
$renderChildrenClosure184 = function() {return NULL;};
$value185 = ($arguments183['value'] !== NULL ? $arguments183['value'] : $renderChildrenClosure184());

$output182 .= (!is_string($value185) ? $value185 : htmlspecialchars($value185, ($arguments183['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments183['encoding'] !== NULL ? $arguments183['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments183['doubleEncode']));

$output182 .= '
												';
return $output182;
};

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output173 .= '
											';
return $output173;
};
$arguments171['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output186 = '';

$output186 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments187 = array();
$arguments187['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'title', $renderingContext);
$arguments187['keepQuotes'] = false;
$arguments187['encoding'] = NULL;
$arguments187['doubleEncode'] = true;
$renderChildrenClosure188 = function() {return NULL;};
$value189 = ($arguments187['value'] !== NULL ? $arguments187['value'] : $renderChildrenClosure188());

$output186 .= (!is_string($value189) ? $value189 : htmlspecialchars($value189, ($arguments187['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments187['encoding'] !== NULL ? $arguments187['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments187['doubleEncode']));

$output186 .= '
												';
return $output186;
};
$arguments171['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output190 = '';

$output190 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments191 = array();
$arguments191['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'file', $renderingContext);
$arguments191['keepQuotes'] = false;
$arguments191['encoding'] = NULL;
$arguments191['doubleEncode'] = true;
$renderChildrenClosure192 = function() {return NULL;};
$value193 = ($arguments191['value'] !== NULL ? $arguments191['value'] : $renderChildrenClosure192());

$output190 .= (!is_string($value193) ? $value193 : htmlspecialchars($value193, ($arguments191['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments191['encoding'] !== NULL ? $arguments191['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments191['doubleEncode']));

$output190 .= '
												';
return $output190;
};

$output170 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output170 .= '
										';
return $output170;
};
$viewHelper194 = $self->getViewHelper('$viewHelper194', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\FileDownloadViewHelper');
$viewHelper194->setArguments($arguments167);
$viewHelper194->setRenderingContext($renderingContext);
$viewHelper194->setRenderChildrenClosure($renderChildrenClosure169);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\FileDownloadViewHelper

$output166 .= $viewHelper194->initializeArgumentsAndRender();

$output166 .= '
									</span>
									<span class="news-related-files-size">
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\FileSizeViewHelper
$arguments195 = array();
$output196 = '';

$output196 .= 'uploads/tx_news/';

$output196 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'file', $renderingContext);
$arguments195['file'] = $output196;
$arguments195['format'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'relatedFiles.fileSizeLabels', $renderingContext);
$arguments195['hideError'] = false;
$arguments195['fileSize'] = NULL;
$renderChildrenClosure197 = function() {return NULL;};
$viewHelper198 = $self->getViewHelper('$viewHelper198', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\FileSizeViewHelper');
$viewHelper198->setArguments($arguments195);
$viewHelper198->setRenderingContext($renderingContext);
$viewHelper198->setRenderChildrenClosure($renderChildrenClosure197);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\FileSizeViewHelper

$output166 .= $viewHelper198->initializeArgumentsAndRender();

$output166 .= '
									</span>
								</li>
							';
return $output166;
};

$output161 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output161 .= '
						</ul>
					</div>
				';
return $output161;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output6 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments199 = array();
// Rendering Boolean node
$arguments199['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falRelatedFiles', $renderingContext));
$arguments199['then'] = NULL;
$arguments199['else'] = NULL;
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output201 = '';

$output201 .= '
					<!-- FAL related files -->
					<div class="news-related news-related-files">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments202 = array();
$arguments202['key'] = 'related-files';
$arguments202['id'] = NULL;
$arguments202['default'] = NULL;
$arguments202['htmlEscape'] = NULL;
$arguments202['arguments'] = NULL;
$arguments202['extensionName'] = NULL;
$renderChildrenClosure203 = function() {return NULL;};

$output201 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output201 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments204 = array();
$arguments204['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falRelatedFiles', $renderingContext);
$arguments204['as'] = 'relatedFile';
$arguments204['key'] = '';
$arguments204['reverse'] = false;
$arguments204['iteration'] = NULL;
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output206 = '';

$output206 .= '
								<li>
									<span class="news-related-files-link">
										<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments207 = array();
$arguments207['value'] = NULL;
$arguments207['keepQuotes'] = false;
$arguments207['encoding'] = NULL;
$arguments207['doubleEncode'] = true;
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'originalResource.publicUrl', $renderingContext);
};
$value209 = ($arguments207['value'] !== NULL ? $arguments207['value'] : $renderChildrenClosure208());

$output206 .= (!is_string($value209) ? $value209 : htmlspecialchars($value209, ($arguments207['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments207['encoding'] !== NULL ? $arguments207['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments207['doubleEncode']));

$output206 .= '" target="_blank">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments210 = array();
// Rendering Boolean node
$arguments210['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'originalResource.title', $renderingContext));
$arguments210['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'originalResource.title', $renderingContext);
$arguments210['else'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'originalResource.name', $renderingContext);
$renderChildrenClosure211 = function() {return NULL;};

$output206 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output206 .= '
										</a>
									</span>
									<span class="news-related-files-size">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$arguments212 = array();
$arguments212['value'] = NULL;
$arguments212['decimals'] = 0;
$arguments212['decimalSeparator'] = '.';
$arguments212['thousandsSeparator'] = ',';
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments214 = array();
$arguments214['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'originalResource.size', $renderingContext);
$arguments214['keepQuotes'] = false;
$arguments214['encoding'] = NULL;
$arguments214['doubleEncode'] = true;
$renderChildrenClosure215 = function() {return NULL;};
$value216 = ($arguments214['value'] !== NULL ? $arguments214['value'] : $renderChildrenClosure215());
return (!is_string($value216) ? $value216 : htmlspecialchars($value216, ($arguments214['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments214['encoding'] !== NULL ? $arguments214['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments214['doubleEncode']));
};

$output206 .= TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output206 .= '
									</span>
								</li>
							';
return $output206;
};

$output201 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output201 .= '
						</ul>
					</div>
				';
return $output201;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output6 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments217 = array();
// Rendering Boolean node
$arguments217['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'relatedLinks', $renderingContext));
$arguments217['then'] = NULL;
$arguments217['else'] = NULL;
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output219 = '';

$output219 .= '
					<!-- Related links -->
					<div class="news-related news-related-links">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments220 = array();
$arguments220['key'] = 'related-links';
$arguments220['id'] = NULL;
$arguments220['default'] = NULL;
$arguments220['htmlEscape'] = NULL;
$arguments220['arguments'] = NULL;
$arguments220['extensionName'] = NULL;
$renderChildrenClosure221 = function() {return NULL;};

$output219 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output219 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments222 = array();
$arguments222['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'relatedLinks', $renderingContext);
$arguments222['as'] = 'relatedLink';
$arguments222['key'] = '';
$arguments222['reverse'] = false;
$arguments222['iteration'] = NULL;
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output224 = '';

$output224 .= '
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments225 = array();
$arguments225['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'uri', $renderingContext);
$arguments225['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'title', $renderingContext);
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TargetLinkViewHelper
$arguments226 = array();
$arguments226['link'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'uri', $renderingContext);
$renderChildrenClosure227 = function() {return NULL;};
$viewHelper228 = $self->getViewHelper('$viewHelper228', $renderingContext, 'GeorgRinger\News\ViewHelpers\TargetLinkViewHelper');
$viewHelper228->setArguments($arguments226);
$viewHelper228->setRenderingContext($renderingContext);
$viewHelper228->setRenderChildrenClosure($renderChildrenClosure227);
// End of ViewHelper GeorgRinger\News\ViewHelpers\TargetLinkViewHelper
$arguments225['target'] = $viewHelper228->initializeArgumentsAndRender();
$arguments225['additionalAttributes'] = NULL;
$arguments225['data'] = NULL;
$arguments225['additionalParams'] = array (
);
$arguments225['pageType'] = 0;
$arguments225['noCache'] = false;
$arguments225['noCacheHash'] = false;
$arguments225['section'] = '';
$arguments225['linkAccessRestrictedPages'] = false;
$arguments225['absolute'] = false;
$arguments225['addQueryString'] = false;
$arguments225['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments225['addQueryStringMethod'] = NULL;
$arguments225['class'] = NULL;
$arguments225['dir'] = NULL;
$arguments225['id'] = NULL;
$arguments225['lang'] = NULL;
$arguments225['style'] = NULL;
$arguments225['accesskey'] = NULL;
$arguments225['tabindex'] = NULL;
$arguments225['onclick'] = NULL;
$arguments225['rel'] = NULL;
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments230 = array();
// Rendering Boolean node
$arguments230['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'title', $renderingContext));
$arguments230['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'title', $renderingContext);
$arguments230['else'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'uri', $renderingContext);
$renderChildrenClosure231 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);
};
$viewHelper232 = $self->getViewHelper('$viewHelper232', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper232->setArguments($arguments225);
$viewHelper232->setRenderingContext($renderingContext);
$viewHelper232->setRenderChildrenClosure($renderChildrenClosure229);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output224 .= $viewHelper232->initializeArgumentsAndRender();

$output224 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments233 = array();
// Rendering Boolean node
$arguments233['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'description', $renderingContext));
$arguments233['then'] = NULL;
$arguments233['else'] = NULL;
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output235 = '';

$output235 .= '<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments236 = array();
$arguments236['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'description', $renderingContext);
$arguments236['keepQuotes'] = false;
$arguments236['encoding'] = NULL;
$arguments236['doubleEncode'] = true;
$renderChildrenClosure237 = function() {return NULL;};
$value238 = ($arguments236['value'] !== NULL ? $arguments236['value'] : $renderChildrenClosure237());

$output235 .= (!is_string($value238) ? $value238 : htmlspecialchars($value238, ($arguments236['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments236['encoding'] !== NULL ? $arguments236['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments236['doubleEncode']));

$output235 .= '</span>';
return $output235;
};

$output224 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output224 .= '
								</li>
							';
return $output224;
};

$output219 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output219 .= '
						</ul>
					</div>
				';
return $output219;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output6 .= '
			</div>
		';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments239 = array();
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '

		';
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output3 .= '
	';
return $output3;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output241 = '';

$output241 .= '
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\NothingViewHelper
$arguments242 = array();
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output244 = '';

$output244 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments245 = array();
// Rendering Boolean node
$arguments245['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'alternativeTitle', $renderingContext));
$arguments245['then'] = NULL;
$arguments245['else'] = NULL;
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output247 = '';

$output247 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments248 = array();
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output250 = '';

$output250 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$arguments251 = array();
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output253 = '';

$output253 .= '
							';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$arguments254 = array();
$arguments254['value'] = NULL;
$arguments254['keepQuotes'] = false;
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'alternativeTitle', $renderingContext);
};
$viewHelper256 = $self->getViewHelper('$viewHelper256', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper');
$viewHelper256->setArguments($arguments254);
$viewHelper256->setRenderingContext($renderingContext);
$viewHelper256->setRenderChildrenClosure($renderChildrenClosure255);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper

$output253 .= $viewHelper256->initializeArgumentsAndRender();

$output253 .= '
						';
return $output253;
};
$viewHelper257 = $self->getViewHelper('$viewHelper257', $renderingContext, 'GeorgRinger\News\ViewHelpers\TitleTagViewHelper');
$viewHelper257->setArguments($arguments251);
$viewHelper257->setRenderingContext($renderingContext);
$viewHelper257->setRenderChildrenClosure($renderChildrenClosure252);
// End of ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper

$output250 .= $viewHelper257->initializeArgumentsAndRender();

$output250 .= '
					';
return $output250;
};

$output247 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);

$output247 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments258 = array();
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output260 = '';

$output260 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$arguments261 = array();
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output263 = '';

$output263 .= '
							';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$arguments264 = array();
$arguments264['value'] = NULL;
$arguments264['keepQuotes'] = false;
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
};
$viewHelper266 = $self->getViewHelper('$viewHelper266', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper');
$viewHelper266->setArguments($arguments264);
$viewHelper266->setRenderingContext($renderingContext);
$viewHelper266->setRenderChildrenClosure($renderChildrenClosure265);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper

$output263 .= $viewHelper266->initializeArgumentsAndRender();

$output263 .= '
						';
return $output263;
};
$viewHelper267 = $self->getViewHelper('$viewHelper267', $renderingContext, 'GeorgRinger\News\ViewHelpers\TitleTagViewHelper');
$viewHelper267->setArguments($arguments261);
$viewHelper267->setRenderingContext($renderingContext);
$viewHelper267->setRenderChildrenClosure($renderChildrenClosure262);
// End of ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper

$output260 .= $viewHelper267->initializeArgumentsAndRender();

$output260 .= '
					';
return $output260;
};

$output247 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext);

$output247 .= '
				';
return $output247;
};
$arguments245['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output268 = '';

$output268 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$arguments269 = array();
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output271 = '';

$output271 .= '
							';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$arguments272 = array();
$arguments272['value'] = NULL;
$arguments272['keepQuotes'] = false;
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'alternativeTitle', $renderingContext);
};
$viewHelper274 = $self->getViewHelper('$viewHelper274', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper');
$viewHelper274->setArguments($arguments272);
$viewHelper274->setRenderingContext($renderingContext);
$viewHelper274->setRenderChildrenClosure($renderChildrenClosure273);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper

$output271 .= $viewHelper274->initializeArgumentsAndRender();

$output271 .= '
						';
return $output271;
};
$viewHelper275 = $self->getViewHelper('$viewHelper275', $renderingContext, 'GeorgRinger\News\ViewHelpers\TitleTagViewHelper');
$viewHelper275->setArguments($arguments269);
$viewHelper275->setRenderingContext($renderingContext);
$viewHelper275->setRenderChildrenClosure($renderChildrenClosure270);
// End of ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper

$output268 .= $viewHelper275->initializeArgumentsAndRender();

$output268 .= '
					';
return $output268;
};
$arguments245['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output276 = '';

$output276 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$arguments277 = array();
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output279 = '';

$output279 .= '
							';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$arguments280 = array();
$arguments280['value'] = NULL;
$arguments280['keepQuotes'] = false;
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
};
$viewHelper282 = $self->getViewHelper('$viewHelper282', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper');
$viewHelper282->setArguments($arguments280);
$viewHelper282->setRenderingContext($renderingContext);
$viewHelper282->setRenderChildrenClosure($renderChildrenClosure281);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper

$output279 .= $viewHelper282->initializeArgumentsAndRender();

$output279 .= '
						';
return $output279;
};
$viewHelper283 = $self->getViewHelper('$viewHelper283', $renderingContext, 'GeorgRinger\News\ViewHelpers\TitleTagViewHelper');
$viewHelper283->setArguments($arguments277);
$viewHelper283->setRenderingContext($renderingContext);
$viewHelper283->setRenderChildrenClosure($renderChildrenClosure278);
// End of ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper

$output276 .= $viewHelper283->initializeArgumentsAndRender();

$output276 .= '
					';
return $output276;
};

$output244 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output244 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments284 = array();
$arguments284['partial'] = 'Detail/Opengraph';
// Rendering Array
$array285 = array();
$array285['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$array285['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments284['arguments'] = $array285;
$arguments284['section'] = NULL;
$arguments284['optional'] = false;
$renderChildrenClosure286 = function() {return NULL;};

$output244 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments284, $renderChildrenClosure286, $renderingContext);

$output244 .= '
			';
return $output244;
};
$viewHelper287 = $self->getViewHelper('$viewHelper287', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\NothingViewHelper');
$viewHelper287->setArguments($arguments242);
$viewHelper287->setRenderingContext($renderingContext);
$viewHelper287->setRenderChildrenClosure($renderChildrenClosure243);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\NothingViewHelper

$output241 .= $viewHelper287->initializeArgumentsAndRender();

$output241 .= '
			<div class="header">
				<h3 itemprop="headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments288 = array();
$arguments288['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments288['keepQuotes'] = false;
$arguments288['encoding'] = NULL;
$arguments288['doubleEncode'] = true;
$renderChildrenClosure289 = function() {return NULL;};
$value290 = ($arguments288['value'] !== NULL ? $arguments288['value'] : $renderChildrenClosure289());

$output241 .= (!is_string($value290) ? $value290 : htmlspecialchars($value290, ($arguments288['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments288['encoding'] !== NULL ? $arguments288['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments288['doubleEncode']));

$output241 .= '</h3>
			</div>
			<div class="footer">
				<p>
					<!-- date -->
					<span class="news-list-date">
						<time datetime="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments291 = array();
$arguments291['date'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'datetime', $renderingContext);
$arguments291['format'] = 'Y-m-d';
$arguments291['base'] = NULL;
$renderChildrenClosure292 = function() {return NULL;};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext);

$output241 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments293 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments294 = array();
$arguments294['key'] = 'dateFormat';
$arguments294['id'] = NULL;
$arguments294['default'] = NULL;
$arguments294['htmlEscape'] = NULL;
$arguments294['arguments'] = NULL;
$arguments294['extensionName'] = NULL;
$renderChildrenClosure295 = function() {return NULL;};
$arguments293['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);
$arguments293['date'] = NULL;
$arguments293['base'] = NULL;
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'datetime', $renderingContext);
};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments293, $renderChildrenClosure296, $renderingContext);

$output241 .= '
							<meta itemprop="datePublished" content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments297 = array();
$arguments297['date'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'datetime', $renderingContext);
$arguments297['format'] = 'Y-m-d';
$arguments297['base'] = NULL;
$renderChildrenClosure298 = function() {return NULL;};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);

$output241 .= '" />
						</time>
					</span>

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments299 = array();
// Rendering Boolean node
$arguments299['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'categories', $renderingContext));
$arguments299['then'] = NULL;
$arguments299['else'] = NULL;
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output301 = '';

$output301 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments302 = array();
$arguments302['partial'] = 'Category/Items';
// Rendering Array
$array303 = array();
$array303['categories'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'categories', $renderingContext);
$array303['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments302['arguments'] = $array303;
$arguments302['section'] = NULL;
$arguments302['optional'] = false;
$renderChildrenClosure304 = function() {return NULL;};

$output301 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments302, $renderChildrenClosure304, $renderingContext);

$output301 .= '
					';
return $output301;
};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output241 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments305 = array();
// Rendering Boolean node
$arguments305['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'tags', $renderingContext));
$arguments305['then'] = NULL;
$arguments305['else'] = NULL;
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output307 = '';

$output307 .= '
						<!-- Tags -->
						<span class="news-list-tags" itemprop="keywords">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments308 = array();
$arguments308['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'tags', $renderingContext);
$arguments308['as'] = 'tag';
$arguments308['key'] = '';
$arguments308['reverse'] = false;
$arguments308['iteration'] = NULL;
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output310 = '';

$output310 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments311 = array();
$arguments311['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('tag'), 'title', $renderingContext);
$arguments311['keepQuotes'] = false;
$arguments311['encoding'] = NULL;
$arguments311['doubleEncode'] = true;
$renderChildrenClosure312 = function() {return NULL;};
$value313 = ($arguments311['value'] !== NULL ? $arguments311['value'] : $renderChildrenClosure312());

$output310 .= (!is_string($value313) ? $value313 : htmlspecialchars($value313, ($arguments311['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments311['encoding'] !== NULL ? $arguments311['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments311['doubleEncode']));

$output310 .= '
						';
return $output310;
};

$output307 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);

$output307 .= '
						</span>
					';
return $output307;
};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output241 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments314 = array();
// Rendering Boolean node
$arguments314['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'author', $renderingContext));
$arguments314['then'] = NULL;
$arguments314['else'] = NULL;
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output316 = '';

$output316 .= '
						<!-- author -->
						<span class="news-list-author" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments317 = array();
$arguments317['key'] = 'author_simple';
$arguments317['id'] = NULL;
$arguments317['default'] = NULL;
$arguments317['htmlEscape'] = NULL;
$arguments317['arguments'] = NULL;
$arguments317['extensionName'] = NULL;
$renderChildrenClosure318 = function() {return NULL;};

$output316 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output316 .= ' <span itemprop="name">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments319 = array();
$arguments319['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'author', $renderingContext);
$arguments319['keepQuotes'] = false;
$arguments319['encoding'] = NULL;
$arguments319['doubleEncode'] = true;
$renderChildrenClosure320 = function() {return NULL;};
$value321 = ($arguments319['value'] !== NULL ? $arguments319['value'] : $renderChildrenClosure320());

$output316 .= (!is_string($value321) ? $value321 : htmlspecialchars($value321, ($arguments319['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments319['encoding'] !== NULL ? $arguments319['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments319['doubleEncode']));

$output316 .= '</span>
						</span>
					';
return $output316;
};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output241 .= '
				</p>
			</div>

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments322 = array();
// Rendering Boolean node
$arguments322['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext));
$arguments322['then'] = NULL;
$arguments322['else'] = NULL;
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output324 = '';

$output324 .= '
				<!-- teaser -->
				<div class="teaser-text" itemprop="description">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments325 = array();
$arguments325['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext);
};

$output324 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output324 .= '
				</div>
			';
return $output324;
};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments322, $renderChildrenClosure323, $renderingContext);

$output241 .= '

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments327 = array();
// Rendering Boolean node
$arguments327['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'contentElements', $renderingContext));
$arguments327['then'] = NULL;
$arguments327['else'] = NULL;
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output329 = '';

$output329 .= '
				<!-- content elements -->
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments330 = array();
$arguments330['typoscriptObjectPath'] = 'lib.tx_news.contentElementRendering';
$arguments330['data'] = NULL;
$arguments330['currentValueKey'] = NULL;
$arguments330['table'] = '';
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'contentElementIdList', $renderingContext);
};
$viewHelper332 = $self->getViewHelper('$viewHelper332', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper332->setArguments($arguments330);
$viewHelper332->setRenderingContext($renderingContext);
$viewHelper332->setRenderChildrenClosure($renderChildrenClosure331);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output329 .= $viewHelper332->initializeArgumentsAndRender();

$output329 .= '
			';
return $output329;
};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext);

$output241 .= '

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments333 = array();
$arguments333['partial'] = 'Detail/FalMediaContainer';
// Rendering Array
$array334 = array();
$array334['media'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falMedia', $renderingContext);
$array334['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments333['arguments'] = $array334;
$arguments333['section'] = NULL;
$arguments333['optional'] = false;
$renderChildrenClosure335 = function() {return NULL;};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments333, $renderChildrenClosure335, $renderingContext);

$output241 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments336 = array();
$arguments336['partial'] = 'Detail/MediaContainer';
// Rendering Array
$array337 = array();
$array337['media'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'media', $renderingContext);
$array337['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments336['arguments'] = $array337;
$arguments336['section'] = NULL;
$arguments336['optional'] = false;
$renderChildrenClosure338 = function() {return NULL;};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments336, $renderChildrenClosure338, $renderingContext);

$output241 .= '

			<!-- main text -->
			<div class="news-text-wrap" itemprop="articleBody">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments339 = array();
$arguments339['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'bodytext', $renderingContext);
};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext);

$output241 .= '
			</div>

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments341 = array();
// Rendering Boolean node
$arguments341['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'backPid', $renderingContext));
$arguments341['then'] = NULL;
$arguments341['else'] = NULL;
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output343 = '';

$output343 .= '
				<!-- Link Back -->
				<div class="news-backlink-wrap">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments344 = array();
$arguments344['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'backPid', $renderingContext);
$arguments344['additionalAttributes'] = NULL;
$arguments344['data'] = NULL;
$arguments344['additionalParams'] = array (
);
$arguments344['pageType'] = 0;
$arguments344['noCache'] = false;
$arguments344['noCacheHash'] = false;
$arguments344['section'] = '';
$arguments344['linkAccessRestrictedPages'] = false;
$arguments344['absolute'] = false;
$arguments344['addQueryString'] = false;
$arguments344['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments344['addQueryStringMethod'] = NULL;
$arguments344['class'] = NULL;
$arguments344['dir'] = NULL;
$arguments344['id'] = NULL;
$arguments344['lang'] = NULL;
$arguments344['style'] = NULL;
$arguments344['title'] = NULL;
$arguments344['accesskey'] = NULL;
$arguments344['tabindex'] = NULL;
$arguments344['onclick'] = NULL;
$arguments344['target'] = NULL;
$arguments344['rel'] = NULL;
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output346 = '';

$output346 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments347 = array();
$arguments347['key'] = 'back-link';
$arguments347['id'] = NULL;
$arguments347['default'] = NULL;
$arguments347['htmlEscape'] = NULL;
$arguments347['arguments'] = NULL;
$arguments347['extensionName'] = NULL;
$renderChildrenClosure348 = function() {return NULL;};

$output346 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext);

$output346 .= '
					';
return $output346;
};
$viewHelper349 = $self->getViewHelper('$viewHelper349', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper349->setArguments($arguments344);
$viewHelper349->setRenderingContext($renderingContext);
$viewHelper349->setRenderChildrenClosure($renderChildrenClosure345);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output343 .= $viewHelper349->initializeArgumentsAndRender();

$output343 .= '
				</div>
			';
return $output343;
};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);

$output241 .= '

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments350 = array();
// Rendering Boolean node
$arguments350['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'detail.showSocialShareButtons', $renderingContext));
$arguments350['then'] = NULL;
$arguments350['else'] = NULL;
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output352 = '';

$output352 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments353 = array();
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output355 = '';

$output355 .= '
					';

$output355 .= '
					Care about the privacy of your readers?
					Checkout https://typo3.org/extensions/repository/view/rx_shariff
					and integrate it here with:
					<div >
						<rx:shariff services="facebook,xing,twitter,twitter" enableBackend="true" />
					</div>
					';

$output355 .= '
				';
return $output355;
};

$output352 .= '';

$output352 .= '
				<div class="facebook">
					<div class="like">
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Social\Facebook\LikeViewHelper
$arguments356 = array();
$arguments356['additionalAttributes'] = NULL;
$arguments356['data'] = NULL;
$arguments356['href'] = NULL;
$arguments356['layout'] = NULL;
$arguments356['width'] = NULL;
$arguments356['font'] = NULL;
$arguments356['javaScript'] = NULL;
$renderChildrenClosure357 = function() {return NULL;};
$viewHelper358 = $self->getViewHelper('$viewHelper358', $renderingContext, 'GeorgRinger\News\ViewHelpers\Social\Facebook\LikeViewHelper');
$viewHelper358->setArguments($arguments356);
$viewHelper358->setRenderingContext($renderingContext);
$viewHelper358->setRenderChildrenClosure($renderChildrenClosure357);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Social\Facebook\LikeViewHelper

$output352 .= $viewHelper358->initializeArgumentsAndRender();

$output352 .= '
					</div>
					<div class="share">
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Social\Facebook\ShareViewHelper
$arguments359 = array();
$arguments359['additionalAttributes'] = NULL;
$arguments359['data'] = NULL;
$arguments359['loadJs'] = true;
$arguments359['type'] = NULL;
$renderChildrenClosure360 = function() {return NULL;};
$viewHelper361 = $self->getViewHelper('$viewHelper361', $renderingContext, 'GeorgRinger\News\ViewHelpers\Social\Facebook\ShareViewHelper');
$viewHelper361->setArguments($arguments359);
$viewHelper361->setRenderingContext($renderingContext);
$viewHelper361->setRenderChildrenClosure($renderChildrenClosure360);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Social\Facebook\ShareViewHelper

$output352 .= $viewHelper361->initializeArgumentsAndRender();

$output352 .= '
					</div>
					<div class="twitter">
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Social\TwitterViewHelper
$arguments362 = array();
$arguments362['additionalAttributes'] = NULL;
$arguments362['data'] = NULL;
$arguments362['class'] = NULL;
$arguments362['datacount'] = NULL;
$arguments362['datavia'] = NULL;
$arguments362['datarelated'] = NULL;
$arguments362['datatext'] = NULL;
$arguments362['dataurl'] = NULL;
$arguments362['datalang'] = NULL;
$arguments362['javaScript'] = NULL;
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Twitter';
};
$viewHelper364 = $self->getViewHelper('$viewHelper364', $renderingContext, 'GeorgRinger\News\ViewHelpers\Social\TwitterViewHelper');
$viewHelper364->setArguments($arguments362);
$viewHelper364->setRenderingContext($renderingContext);
$viewHelper364->setRenderChildrenClosure($renderChildrenClosure363);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Social\TwitterViewHelper

$output352 .= $viewHelper364->initializeArgumentsAndRender();

$output352 .= '
					</div>
				</div>
			';
return $output352;
};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext);

$output241 .= '

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments365 = array();
// Rendering Boolean node
$arguments365['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'detail.disqusShortname', $renderingContext));
$arguments365['then'] = NULL;
$arguments365['else'] = NULL;
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output367 = '';

$output367 .= '
				<div id="disqus_thread"></div>
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Social\DisqusViewHelper
$arguments368 = array();
$arguments368['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments368['shortName'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'detail.disqusShortname', $renderingContext);
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments369 = array();
$arguments369['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments369['settings'] = $currentVariableContainer->getOrNull('settings');
// Rendering Boolean node
$arguments369['uriOnly'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
// Rendering Array
$array370 = array();
$array370['forceAbsoluteUrl'] = 1;
$arguments369['configuration'] = $array370;
$arguments369['additionalAttributes'] = NULL;
$arguments369['data'] = NULL;
$arguments369['content'] = '';
$arguments369['class'] = NULL;
$arguments369['dir'] = NULL;
$arguments369['id'] = NULL;
$arguments369['lang'] = NULL;
$arguments369['style'] = NULL;
$arguments369['title'] = NULL;
$arguments369['accesskey'] = NULL;
$arguments369['tabindex'] = NULL;
$arguments369['onclick'] = NULL;
$arguments369['section'] = NULL;
$renderChildrenClosure371 = function() {return NULL;};
$viewHelper372 = $self->getViewHelper('$viewHelper372', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper372->setArguments($arguments369);
$viewHelper372->setRenderingContext($renderingContext);
$viewHelper372->setRenderChildrenClosure($renderChildrenClosure371);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments368['link'] = $viewHelper372->initializeArgumentsAndRender();
$renderChildrenClosure373 = function() {return NULL;};
$viewHelper374 = $self->getViewHelper('$viewHelper374', $renderingContext, 'GeorgRinger\News\ViewHelpers\Social\DisqusViewHelper');
$viewHelper374->setArguments($arguments368);
$viewHelper374->setRenderingContext($renderingContext);
$viewHelper374->setRenderChildrenClosure($renderChildrenClosure373);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Social\DisqusViewHelper

$output367 .= $viewHelper374->initializeArgumentsAndRender();

$output367 .= '
			';
return $output367;
};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext);

$output241 .= '

			<!-- related things -->
			<div class="news-related-wrap">

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments375 = array();
// Rendering Boolean node
$arguments375['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'allRelatedSorted', $renderingContext));
$arguments375['then'] = NULL;
$arguments375['else'] = NULL;
$renderChildrenClosure376 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output377 = '';

$output377 .= '
					<!-- Related news records -->
					<div class="news-related news-related-news">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments378 = array();
$arguments378['key'] = 'related-news';
$arguments378['id'] = NULL;
$arguments378['default'] = NULL;
$arguments378['htmlEscape'] = NULL;
$arguments378['arguments'] = NULL;
$arguments378['extensionName'] = NULL;
$renderChildrenClosure379 = function() {return NULL;};

$output377 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments378, $renderChildrenClosure379, $renderingContext);

$output377 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments380 = array();
$arguments380['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'allRelatedSorted', $renderingContext);
$arguments380['as'] = 'related';
$arguments380['key'] = '';
$arguments380['reverse'] = false;
$arguments380['iteration'] = NULL;
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output382 = '';

$output382 .= '
								<li>
									<span class="news-related-news-date">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments383 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments384 = array();
$arguments384['key'] = 'dateFormat';
$arguments384['id'] = NULL;
$arguments384['default'] = NULL;
$arguments384['htmlEscape'] = NULL;
$arguments384['arguments'] = NULL;
$arguments384['extensionName'] = NULL;
$renderChildrenClosure385 = function() {return NULL;};
$arguments383['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments384, $renderChildrenClosure385, $renderingContext);
$arguments383['date'] = NULL;
$arguments383['base'] = NULL;
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('related'), 'datetime', $renderingContext);
};

$output382 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments383, $renderChildrenClosure386, $renderingContext);

$output382 .= '</span>
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments387 = array();
$arguments387['newsItem'] = $currentVariableContainer->getOrNull('related');
$arguments387['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments387['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('related'), 'title', $renderingContext);
$arguments387['additionalAttributes'] = NULL;
$arguments387['data'] = NULL;
$arguments387['uriOnly'] = false;
$arguments387['configuration'] = array (
);
$arguments387['content'] = '';
$arguments387['class'] = NULL;
$arguments387['dir'] = NULL;
$arguments387['id'] = NULL;
$arguments387['lang'] = NULL;
$arguments387['style'] = NULL;
$arguments387['accesskey'] = NULL;
$arguments387['tabindex'] = NULL;
$arguments387['onclick'] = NULL;
$arguments387['section'] = NULL;
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output389 = '';

$output389 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments390 = array();
$arguments390['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('related'), 'title', $renderingContext);
$arguments390['keepQuotes'] = false;
$arguments390['encoding'] = NULL;
$arguments390['doubleEncode'] = true;
$renderChildrenClosure391 = function() {return NULL;};
$value392 = ($arguments390['value'] !== NULL ? $arguments390['value'] : $renderChildrenClosure391());

$output389 .= (!is_string($value392) ? $value392 : htmlspecialchars($value392, ($arguments390['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments390['encoding'] !== NULL ? $arguments390['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments390['doubleEncode']));

$output389 .= '
									';
return $output389;
};
$viewHelper393 = $self->getViewHelper('$viewHelper393', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper393->setArguments($arguments387);
$viewHelper393->setRenderingContext($renderingContext);
$viewHelper393->setRenderChildrenClosure($renderChildrenClosure388);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output382 .= $viewHelper393->initializeArgumentsAndRender();

$output382 .= '
								</li>

							';
return $output382;
};

$output377 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments380, $renderChildrenClosure381, $renderingContext);

$output377 .= '
						</ul>
					</div>
				';
return $output377;
};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments375, $renderChildrenClosure376, $renderingContext);

$output241 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments394 = array();
// Rendering Boolean node
$arguments394['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'relatedFiles', $renderingContext));
$arguments394['then'] = NULL;
$arguments394['else'] = NULL;
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output396 = '';

$output396 .= '
					<!-- Related files -->
					<div class="news-related news-related-files">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments397 = array();
$arguments397['key'] = 'related-files';
$arguments397['id'] = NULL;
$arguments397['default'] = NULL;
$arguments397['htmlEscape'] = NULL;
$arguments397['arguments'] = NULL;
$arguments397['extensionName'] = NULL;
$renderChildrenClosure398 = function() {return NULL;};

$output396 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext);

$output396 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments399 = array();
$arguments399['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'relatedFiles', $renderingContext);
$arguments399['as'] = 'relatedFile';
$arguments399['key'] = '';
$arguments399['reverse'] = false;
$arguments399['iteration'] = NULL;
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output401 = '';

$output401 .= '
								<li>
									<span class="news-related-files-link">
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\FileDownloadViewHelper
$arguments402 = array();
$output403 = '';

$output403 .= 'uploads/tx_news/';

$output403 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'file', $renderingContext);
$arguments402['file'] = $output403;
$arguments402['configuration'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'relatedFiles.download', $renderingContext);
$arguments402['hideError'] = false;
$arguments402['class'] = '';
$arguments402['target'] = '';
$arguments402['alt'] = '';
$arguments402['title'] = '';
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output405 = '';

$output405 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments406 = array();
// Rendering Boolean node
$arguments406['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'title', $renderingContext));
$arguments406['then'] = NULL;
$arguments406['else'] = NULL;
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output408 = '';

$output408 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments409 = array();
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output411 = '';

$output411 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments412 = array();
$arguments412['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'title', $renderingContext);
$arguments412['keepQuotes'] = false;
$arguments412['encoding'] = NULL;
$arguments412['doubleEncode'] = true;
$renderChildrenClosure413 = function() {return NULL;};
$value414 = ($arguments412['value'] !== NULL ? $arguments412['value'] : $renderChildrenClosure413());

$output411 .= (!is_string($value414) ? $value414 : htmlspecialchars($value414, ($arguments412['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments412['encoding'] !== NULL ? $arguments412['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments412['doubleEncode']));

$output411 .= '
												';
return $output411;
};

$output408 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments409, $renderChildrenClosure410, $renderingContext);

$output408 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments415 = array();
$renderChildrenClosure416 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output417 = '';

$output417 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments418 = array();
$arguments418['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'file', $renderingContext);
$arguments418['keepQuotes'] = false;
$arguments418['encoding'] = NULL;
$arguments418['doubleEncode'] = true;
$renderChildrenClosure419 = function() {return NULL;};
$value420 = ($arguments418['value'] !== NULL ? $arguments418['value'] : $renderChildrenClosure419());

$output417 .= (!is_string($value420) ? $value420 : htmlspecialchars($value420, ($arguments418['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments418['encoding'] !== NULL ? $arguments418['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments418['doubleEncode']));

$output417 .= '
												';
return $output417;
};

$output408 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments415, $renderChildrenClosure416, $renderingContext);

$output408 .= '
											';
return $output408;
};
$arguments406['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output421 = '';

$output421 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments422 = array();
$arguments422['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'title', $renderingContext);
$arguments422['keepQuotes'] = false;
$arguments422['encoding'] = NULL;
$arguments422['doubleEncode'] = true;
$renderChildrenClosure423 = function() {return NULL;};
$value424 = ($arguments422['value'] !== NULL ? $arguments422['value'] : $renderChildrenClosure423());

$output421 .= (!is_string($value424) ? $value424 : htmlspecialchars($value424, ($arguments422['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments422['encoding'] !== NULL ? $arguments422['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments422['doubleEncode']));

$output421 .= '
												';
return $output421;
};
$arguments406['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output425 = '';

$output425 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments426 = array();
$arguments426['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'file', $renderingContext);
$arguments426['keepQuotes'] = false;
$arguments426['encoding'] = NULL;
$arguments426['doubleEncode'] = true;
$renderChildrenClosure427 = function() {return NULL;};
$value428 = ($arguments426['value'] !== NULL ? $arguments426['value'] : $renderChildrenClosure427());

$output425 .= (!is_string($value428) ? $value428 : htmlspecialchars($value428, ($arguments426['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments426['encoding'] !== NULL ? $arguments426['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments426['doubleEncode']));

$output425 .= '
												';
return $output425;
};

$output405 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext);

$output405 .= '
										';
return $output405;
};
$viewHelper429 = $self->getViewHelper('$viewHelper429', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\FileDownloadViewHelper');
$viewHelper429->setArguments($arguments402);
$viewHelper429->setRenderingContext($renderingContext);
$viewHelper429->setRenderChildrenClosure($renderChildrenClosure404);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\FileDownloadViewHelper

$output401 .= $viewHelper429->initializeArgumentsAndRender();

$output401 .= '
									</span>
									<span class="news-related-files-size">
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\FileSizeViewHelper
$arguments430 = array();
$output431 = '';

$output431 .= 'uploads/tx_news/';

$output431 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'file', $renderingContext);
$arguments430['file'] = $output431;
$arguments430['format'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'relatedFiles.fileSizeLabels', $renderingContext);
$arguments430['hideError'] = false;
$arguments430['fileSize'] = NULL;
$renderChildrenClosure432 = function() {return NULL;};
$viewHelper433 = $self->getViewHelper('$viewHelper433', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\FileSizeViewHelper');
$viewHelper433->setArguments($arguments430);
$viewHelper433->setRenderingContext($renderingContext);
$viewHelper433->setRenderChildrenClosure($renderChildrenClosure432);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\FileSizeViewHelper

$output401 .= $viewHelper433->initializeArgumentsAndRender();

$output401 .= '
									</span>
								</li>
							';
return $output401;
};

$output396 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments399, $renderChildrenClosure400, $renderingContext);

$output396 .= '
						</ul>
					</div>
				';
return $output396;
};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext);

$output241 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments434 = array();
// Rendering Boolean node
$arguments434['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falRelatedFiles', $renderingContext));
$arguments434['then'] = NULL;
$arguments434['else'] = NULL;
$renderChildrenClosure435 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output436 = '';

$output436 .= '
					<!-- FAL related files -->
					<div class="news-related news-related-files">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments437 = array();
$arguments437['key'] = 'related-files';
$arguments437['id'] = NULL;
$arguments437['default'] = NULL;
$arguments437['htmlEscape'] = NULL;
$arguments437['arguments'] = NULL;
$arguments437['extensionName'] = NULL;
$renderChildrenClosure438 = function() {return NULL;};

$output436 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments437, $renderChildrenClosure438, $renderingContext);

$output436 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments439 = array();
$arguments439['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falRelatedFiles', $renderingContext);
$arguments439['as'] = 'relatedFile';
$arguments439['key'] = '';
$arguments439['reverse'] = false;
$arguments439['iteration'] = NULL;
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output441 = '';

$output441 .= '
								<li>
									<span class="news-related-files-link">
										<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments442 = array();
$arguments442['value'] = NULL;
$arguments442['keepQuotes'] = false;
$arguments442['encoding'] = NULL;
$arguments442['doubleEncode'] = true;
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'originalResource.publicUrl', $renderingContext);
};
$value444 = ($arguments442['value'] !== NULL ? $arguments442['value'] : $renderChildrenClosure443());

$output441 .= (!is_string($value444) ? $value444 : htmlspecialchars($value444, ($arguments442['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments442['encoding'] !== NULL ? $arguments442['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments442['doubleEncode']));

$output441 .= '" target="_blank">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments445 = array();
// Rendering Boolean node
$arguments445['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'originalResource.title', $renderingContext));
$arguments445['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'originalResource.title', $renderingContext);
$arguments445['else'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'originalResource.name', $renderingContext);
$renderChildrenClosure446 = function() {return NULL;};

$output441 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments445, $renderChildrenClosure446, $renderingContext);

$output441 .= '
										</a>
									</span>
									<span class="news-related-files-size">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$arguments447 = array();
$arguments447['value'] = NULL;
$arguments447['decimals'] = 0;
$arguments447['decimalSeparator'] = '.';
$arguments447['thousandsSeparator'] = ',';
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments449 = array();
$arguments449['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'originalResource.size', $renderingContext);
$arguments449['keepQuotes'] = false;
$arguments449['encoding'] = NULL;
$arguments449['doubleEncode'] = true;
$renderChildrenClosure450 = function() {return NULL;};
$value451 = ($arguments449['value'] !== NULL ? $arguments449['value'] : $renderChildrenClosure450());
return (!is_string($value451) ? $value451 : htmlspecialchars($value451, ($arguments449['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments449['encoding'] !== NULL ? $arguments449['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments449['doubleEncode']));
};

$output441 .= TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);

$output441 .= '
									</span>
								</li>
							';
return $output441;
};

$output436 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext);

$output436 .= '
						</ul>
					</div>
				';
return $output436;
};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments434, $renderChildrenClosure435, $renderingContext);

$output241 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments452 = array();
// Rendering Boolean node
$arguments452['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'relatedLinks', $renderingContext));
$arguments452['then'] = NULL;
$arguments452['else'] = NULL;
$renderChildrenClosure453 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output454 = '';

$output454 .= '
					<!-- Related links -->
					<div class="news-related news-related-links">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments455 = array();
$arguments455['key'] = 'related-links';
$arguments455['id'] = NULL;
$arguments455['default'] = NULL;
$arguments455['htmlEscape'] = NULL;
$arguments455['arguments'] = NULL;
$arguments455['extensionName'] = NULL;
$renderChildrenClosure456 = function() {return NULL;};

$output454 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments455, $renderChildrenClosure456, $renderingContext);

$output454 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments457 = array();
$arguments457['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'relatedLinks', $renderingContext);
$arguments457['as'] = 'relatedLink';
$arguments457['key'] = '';
$arguments457['reverse'] = false;
$arguments457['iteration'] = NULL;
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output459 = '';

$output459 .= '
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments460 = array();
$arguments460['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'uri', $renderingContext);
$arguments460['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'title', $renderingContext);
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TargetLinkViewHelper
$arguments461 = array();
$arguments461['link'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'uri', $renderingContext);
$renderChildrenClosure462 = function() {return NULL;};
$viewHelper463 = $self->getViewHelper('$viewHelper463', $renderingContext, 'GeorgRinger\News\ViewHelpers\TargetLinkViewHelper');
$viewHelper463->setArguments($arguments461);
$viewHelper463->setRenderingContext($renderingContext);
$viewHelper463->setRenderChildrenClosure($renderChildrenClosure462);
// End of ViewHelper GeorgRinger\News\ViewHelpers\TargetLinkViewHelper
$arguments460['target'] = $viewHelper463->initializeArgumentsAndRender();
$arguments460['additionalAttributes'] = NULL;
$arguments460['data'] = NULL;
$arguments460['additionalParams'] = array (
);
$arguments460['pageType'] = 0;
$arguments460['noCache'] = false;
$arguments460['noCacheHash'] = false;
$arguments460['section'] = '';
$arguments460['linkAccessRestrictedPages'] = false;
$arguments460['absolute'] = false;
$arguments460['addQueryString'] = false;
$arguments460['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments460['addQueryStringMethod'] = NULL;
$arguments460['class'] = NULL;
$arguments460['dir'] = NULL;
$arguments460['id'] = NULL;
$arguments460['lang'] = NULL;
$arguments460['style'] = NULL;
$arguments460['accesskey'] = NULL;
$arguments460['tabindex'] = NULL;
$arguments460['onclick'] = NULL;
$arguments460['rel'] = NULL;
$renderChildrenClosure464 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments465 = array();
// Rendering Boolean node
$arguments465['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'title', $renderingContext));
$arguments465['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'title', $renderingContext);
$arguments465['else'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'uri', $renderingContext);
$renderChildrenClosure466 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments465, $renderChildrenClosure466, $renderingContext);
};
$viewHelper467 = $self->getViewHelper('$viewHelper467', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper467->setArguments($arguments460);
$viewHelper467->setRenderingContext($renderingContext);
$viewHelper467->setRenderChildrenClosure($renderChildrenClosure464);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output459 .= $viewHelper467->initializeArgumentsAndRender();

$output459 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments468 = array();
// Rendering Boolean node
$arguments468['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'description', $renderingContext));
$arguments468['then'] = NULL;
$arguments468['else'] = NULL;
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output470 = '';

$output470 .= '<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments471 = array();
$arguments471['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'description', $renderingContext);
$arguments471['keepQuotes'] = false;
$arguments471['encoding'] = NULL;
$arguments471['doubleEncode'] = true;
$renderChildrenClosure472 = function() {return NULL;};
$value473 = ($arguments471['value'] !== NULL ? $arguments471['value'] : $renderChildrenClosure472());

$output470 .= (!is_string($value473) ? $value473 : htmlspecialchars($value473, ($arguments471['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments471['encoding'] !== NULL ? $arguments471['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments471['doubleEncode']));

$output470 .= '</span>';
return $output470;
};

$output459 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext);

$output459 .= '
								</li>
							';
return $output459;
};

$output454 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments457, $renderChildrenClosure458, $renderingContext);

$output454 .= '
						</ul>
					</div>
				';
return $output454;
};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments452, $renderChildrenClosure453, $renderingContext);

$output241 .= '
			</div>
		';
return $output241;
};
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '

		';
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

$output474 = '';

$output474 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments475 = array();
$arguments475['name'] = 'Detail.html';
$renderChildrenClosure476 = function() {return NULL;};
$viewHelper477 = $self->getViewHelper('$viewHelper477', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper477->setArguments($arguments475);
$viewHelper477->setRenderingContext($renderingContext);
$viewHelper477->setRenderChildrenClosure($renderChildrenClosure476);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output474 .= $viewHelper477->initializeArgumentsAndRender();

$output474 .= '

<!--
	=====================
		News/Detail.html
-->

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments478 = array();
$arguments478['name'] = 'content';
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output480 = '';

$output480 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments481 = array();
// Rendering Boolean node
$arguments481['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('newsItem'));
$arguments481['then'] = NULL;
$arguments481['else'] = NULL;
$renderChildrenClosure482 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output483 = '';

$output483 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments484 = array();
$renderChildrenClosure485 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output486 = '';

$output486 .= '
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\NothingViewHelper
$arguments487 = array();
$renderChildrenClosure488 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output489 = '';

$output489 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments490 = array();
// Rendering Boolean node
$arguments490['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'alternativeTitle', $renderingContext));
$arguments490['then'] = NULL;
$arguments490['else'] = NULL;
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output492 = '';

$output492 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments493 = array();
$renderChildrenClosure494 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output495 = '';

$output495 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$arguments496 = array();
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output498 = '';

$output498 .= '
							';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$arguments499 = array();
$arguments499['value'] = NULL;
$arguments499['keepQuotes'] = false;
$renderChildrenClosure500 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'alternativeTitle', $renderingContext);
};
$viewHelper501 = $self->getViewHelper('$viewHelper501', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper');
$viewHelper501->setArguments($arguments499);
$viewHelper501->setRenderingContext($renderingContext);
$viewHelper501->setRenderChildrenClosure($renderChildrenClosure500);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper

$output498 .= $viewHelper501->initializeArgumentsAndRender();

$output498 .= '
						';
return $output498;
};
$viewHelper502 = $self->getViewHelper('$viewHelper502', $renderingContext, 'GeorgRinger\News\ViewHelpers\TitleTagViewHelper');
$viewHelper502->setArguments($arguments496);
$viewHelper502->setRenderingContext($renderingContext);
$viewHelper502->setRenderChildrenClosure($renderChildrenClosure497);
// End of ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper

$output495 .= $viewHelper502->initializeArgumentsAndRender();

$output495 .= '
					';
return $output495;
};

$output492 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments493, $renderChildrenClosure494, $renderingContext);

$output492 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments503 = array();
$renderChildrenClosure504 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output505 = '';

$output505 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$arguments506 = array();
$renderChildrenClosure507 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output508 = '';

$output508 .= '
							';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$arguments509 = array();
$arguments509['value'] = NULL;
$arguments509['keepQuotes'] = false;
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
};
$viewHelper511 = $self->getViewHelper('$viewHelper511', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper');
$viewHelper511->setArguments($arguments509);
$viewHelper511->setRenderingContext($renderingContext);
$viewHelper511->setRenderChildrenClosure($renderChildrenClosure510);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper

$output508 .= $viewHelper511->initializeArgumentsAndRender();

$output508 .= '
						';
return $output508;
};
$viewHelper512 = $self->getViewHelper('$viewHelper512', $renderingContext, 'GeorgRinger\News\ViewHelpers\TitleTagViewHelper');
$viewHelper512->setArguments($arguments506);
$viewHelper512->setRenderingContext($renderingContext);
$viewHelper512->setRenderChildrenClosure($renderChildrenClosure507);
// End of ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper

$output505 .= $viewHelper512->initializeArgumentsAndRender();

$output505 .= '
					';
return $output505;
};

$output492 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments503, $renderChildrenClosure504, $renderingContext);

$output492 .= '
				';
return $output492;
};
$arguments490['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output513 = '';

$output513 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$arguments514 = array();
$renderChildrenClosure515 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output516 = '';

$output516 .= '
							';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$arguments517 = array();
$arguments517['value'] = NULL;
$arguments517['keepQuotes'] = false;
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'alternativeTitle', $renderingContext);
};
$viewHelper519 = $self->getViewHelper('$viewHelper519', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper');
$viewHelper519->setArguments($arguments517);
$viewHelper519->setRenderingContext($renderingContext);
$viewHelper519->setRenderChildrenClosure($renderChildrenClosure518);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper

$output516 .= $viewHelper519->initializeArgumentsAndRender();

$output516 .= '
						';
return $output516;
};
$viewHelper520 = $self->getViewHelper('$viewHelper520', $renderingContext, 'GeorgRinger\News\ViewHelpers\TitleTagViewHelper');
$viewHelper520->setArguments($arguments514);
$viewHelper520->setRenderingContext($renderingContext);
$viewHelper520->setRenderChildrenClosure($renderChildrenClosure515);
// End of ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper

$output513 .= $viewHelper520->initializeArgumentsAndRender();

$output513 .= '
					';
return $output513;
};
$arguments490['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output521 = '';

$output521 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$arguments522 = array();
$renderChildrenClosure523 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output524 = '';

$output524 .= '
							';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$arguments525 = array();
$arguments525['value'] = NULL;
$arguments525['keepQuotes'] = false;
$renderChildrenClosure526 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
};
$viewHelper527 = $self->getViewHelper('$viewHelper527', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper');
$viewHelper527->setArguments($arguments525);
$viewHelper527->setRenderingContext($renderingContext);
$viewHelper527->setRenderChildrenClosure($renderChildrenClosure526);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper

$output524 .= $viewHelper527->initializeArgumentsAndRender();

$output524 .= '
						';
return $output524;
};
$viewHelper528 = $self->getViewHelper('$viewHelper528', $renderingContext, 'GeorgRinger\News\ViewHelpers\TitleTagViewHelper');
$viewHelper528->setArguments($arguments522);
$viewHelper528->setRenderingContext($renderingContext);
$viewHelper528->setRenderChildrenClosure($renderChildrenClosure523);
// End of ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper

$output521 .= $viewHelper528->initializeArgumentsAndRender();

$output521 .= '
					';
return $output521;
};

$output489 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext);

$output489 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments529 = array();
$arguments529['partial'] = 'Detail/Opengraph';
// Rendering Array
$array530 = array();
$array530['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$array530['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments529['arguments'] = $array530;
$arguments529['section'] = NULL;
$arguments529['optional'] = false;
$renderChildrenClosure531 = function() {return NULL;};

$output489 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments529, $renderChildrenClosure531, $renderingContext);

$output489 .= '
			';
return $output489;
};
$viewHelper532 = $self->getViewHelper('$viewHelper532', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\NothingViewHelper');
$viewHelper532->setArguments($arguments487);
$viewHelper532->setRenderingContext($renderingContext);
$viewHelper532->setRenderChildrenClosure($renderChildrenClosure488);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\NothingViewHelper

$output486 .= $viewHelper532->initializeArgumentsAndRender();

$output486 .= '
			<div class="header">
				<h3 itemprop="headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments533 = array();
$arguments533['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments533['keepQuotes'] = false;
$arguments533['encoding'] = NULL;
$arguments533['doubleEncode'] = true;
$renderChildrenClosure534 = function() {return NULL;};
$value535 = ($arguments533['value'] !== NULL ? $arguments533['value'] : $renderChildrenClosure534());

$output486 .= (!is_string($value535) ? $value535 : htmlspecialchars($value535, ($arguments533['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments533['encoding'] !== NULL ? $arguments533['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments533['doubleEncode']));

$output486 .= '</h3>
			</div>
			<div class="footer">
				<p>
					<!-- date -->
					<span class="news-list-date">
						<time datetime="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments536 = array();
$arguments536['date'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'datetime', $renderingContext);
$arguments536['format'] = 'Y-m-d';
$arguments536['base'] = NULL;
$renderChildrenClosure537 = function() {return NULL;};

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext);

$output486 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments538 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments539 = array();
$arguments539['key'] = 'dateFormat';
$arguments539['id'] = NULL;
$arguments539['default'] = NULL;
$arguments539['htmlEscape'] = NULL;
$arguments539['arguments'] = NULL;
$arguments539['extensionName'] = NULL;
$renderChildrenClosure540 = function() {return NULL;};
$arguments538['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments539, $renderChildrenClosure540, $renderingContext);
$arguments538['date'] = NULL;
$arguments538['base'] = NULL;
$renderChildrenClosure541 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'datetime', $renderingContext);
};

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments538, $renderChildrenClosure541, $renderingContext);

$output486 .= '
							<meta itemprop="datePublished" content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments542 = array();
$arguments542['date'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'datetime', $renderingContext);
$arguments542['format'] = 'Y-m-d';
$arguments542['base'] = NULL;
$renderChildrenClosure543 = function() {return NULL;};

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments542, $renderChildrenClosure543, $renderingContext);

$output486 .= '" />
						</time>
					</span>

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments544 = array();
// Rendering Boolean node
$arguments544['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'categories', $renderingContext));
$arguments544['then'] = NULL;
$arguments544['else'] = NULL;
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output546 = '';

$output546 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments547 = array();
$arguments547['partial'] = 'Category/Items';
// Rendering Array
$array548 = array();
$array548['categories'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'categories', $renderingContext);
$array548['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments547['arguments'] = $array548;
$arguments547['section'] = NULL;
$arguments547['optional'] = false;
$renderChildrenClosure549 = function() {return NULL;};

$output546 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments547, $renderChildrenClosure549, $renderingContext);

$output546 .= '
					';
return $output546;
};

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext);

$output486 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments550 = array();
// Rendering Boolean node
$arguments550['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'tags', $renderingContext));
$arguments550['then'] = NULL;
$arguments550['else'] = NULL;
$renderChildrenClosure551 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output552 = '';

$output552 .= '
						<!-- Tags -->
						<span class="news-list-tags" itemprop="keywords">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments553 = array();
$arguments553['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'tags', $renderingContext);
$arguments553['as'] = 'tag';
$arguments553['key'] = '';
$arguments553['reverse'] = false;
$arguments553['iteration'] = NULL;
$renderChildrenClosure554 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output555 = '';

$output555 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments556 = array();
$arguments556['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('tag'), 'title', $renderingContext);
$arguments556['keepQuotes'] = false;
$arguments556['encoding'] = NULL;
$arguments556['doubleEncode'] = true;
$renderChildrenClosure557 = function() {return NULL;};
$value558 = ($arguments556['value'] !== NULL ? $arguments556['value'] : $renderChildrenClosure557());

$output555 .= (!is_string($value558) ? $value558 : htmlspecialchars($value558, ($arguments556['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments556['encoding'] !== NULL ? $arguments556['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments556['doubleEncode']));

$output555 .= '
						';
return $output555;
};

$output552 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments553, $renderChildrenClosure554, $renderingContext);

$output552 .= '
						</span>
					';
return $output552;
};

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments550, $renderChildrenClosure551, $renderingContext);

$output486 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments559 = array();
// Rendering Boolean node
$arguments559['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'author', $renderingContext));
$arguments559['then'] = NULL;
$arguments559['else'] = NULL;
$renderChildrenClosure560 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output561 = '';

$output561 .= '
						<!-- author -->
						<span class="news-list-author" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments562 = array();
$arguments562['key'] = 'author_simple';
$arguments562['id'] = NULL;
$arguments562['default'] = NULL;
$arguments562['htmlEscape'] = NULL;
$arguments562['arguments'] = NULL;
$arguments562['extensionName'] = NULL;
$renderChildrenClosure563 = function() {return NULL;};

$output561 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments562, $renderChildrenClosure563, $renderingContext);

$output561 .= ' <span itemprop="name">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments564 = array();
$arguments564['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'author', $renderingContext);
$arguments564['keepQuotes'] = false;
$arguments564['encoding'] = NULL;
$arguments564['doubleEncode'] = true;
$renderChildrenClosure565 = function() {return NULL;};
$value566 = ($arguments564['value'] !== NULL ? $arguments564['value'] : $renderChildrenClosure565());

$output561 .= (!is_string($value566) ? $value566 : htmlspecialchars($value566, ($arguments564['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments564['encoding'] !== NULL ? $arguments564['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments564['doubleEncode']));

$output561 .= '</span>
						</span>
					';
return $output561;
};

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments559, $renderChildrenClosure560, $renderingContext);

$output486 .= '
				</p>
			</div>

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments567 = array();
// Rendering Boolean node
$arguments567['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext));
$arguments567['then'] = NULL;
$arguments567['else'] = NULL;
$renderChildrenClosure568 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output569 = '';

$output569 .= '
				<!-- teaser -->
				<div class="teaser-text" itemprop="description">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments570 = array();
$arguments570['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure571 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext);
};

$output569 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments570, $renderChildrenClosure571, $renderingContext);

$output569 .= '
				</div>
			';
return $output569;
};

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments567, $renderChildrenClosure568, $renderingContext);

$output486 .= '

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments572 = array();
// Rendering Boolean node
$arguments572['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'contentElements', $renderingContext));
$arguments572['then'] = NULL;
$arguments572['else'] = NULL;
$renderChildrenClosure573 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output574 = '';

$output574 .= '
				<!-- content elements -->
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments575 = array();
$arguments575['typoscriptObjectPath'] = 'lib.tx_news.contentElementRendering';
$arguments575['data'] = NULL;
$arguments575['currentValueKey'] = NULL;
$arguments575['table'] = '';
$renderChildrenClosure576 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'contentElementIdList', $renderingContext);
};
$viewHelper577 = $self->getViewHelper('$viewHelper577', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper577->setArguments($arguments575);
$viewHelper577->setRenderingContext($renderingContext);
$viewHelper577->setRenderChildrenClosure($renderChildrenClosure576);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output574 .= $viewHelper577->initializeArgumentsAndRender();

$output574 .= '
			';
return $output574;
};

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments572, $renderChildrenClosure573, $renderingContext);

$output486 .= '

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments578 = array();
$arguments578['partial'] = 'Detail/FalMediaContainer';
// Rendering Array
$array579 = array();
$array579['media'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falMedia', $renderingContext);
$array579['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments578['arguments'] = $array579;
$arguments578['section'] = NULL;
$arguments578['optional'] = false;
$renderChildrenClosure580 = function() {return NULL;};

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments578, $renderChildrenClosure580, $renderingContext);

$output486 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments581 = array();
$arguments581['partial'] = 'Detail/MediaContainer';
// Rendering Array
$array582 = array();
$array582['media'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'media', $renderingContext);
$array582['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments581['arguments'] = $array582;
$arguments581['section'] = NULL;
$arguments581['optional'] = false;
$renderChildrenClosure583 = function() {return NULL;};

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments581, $renderChildrenClosure583, $renderingContext);

$output486 .= '

			<!-- main text -->
			<div class="news-text-wrap" itemprop="articleBody">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments584 = array();
$arguments584['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure585 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'bodytext', $renderingContext);
};

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments584, $renderChildrenClosure585, $renderingContext);

$output486 .= '
			</div>

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments586 = array();
// Rendering Boolean node
$arguments586['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'backPid', $renderingContext));
$arguments586['then'] = NULL;
$arguments586['else'] = NULL;
$renderChildrenClosure587 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output588 = '';

$output588 .= '
				<!-- Link Back -->
				<div class="news-backlink-wrap">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments589 = array();
$arguments589['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'backPid', $renderingContext);
$arguments589['additionalAttributes'] = NULL;
$arguments589['data'] = NULL;
$arguments589['additionalParams'] = array (
);
$arguments589['pageType'] = 0;
$arguments589['noCache'] = false;
$arguments589['noCacheHash'] = false;
$arguments589['section'] = '';
$arguments589['linkAccessRestrictedPages'] = false;
$arguments589['absolute'] = false;
$arguments589['addQueryString'] = false;
$arguments589['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments589['addQueryStringMethod'] = NULL;
$arguments589['class'] = NULL;
$arguments589['dir'] = NULL;
$arguments589['id'] = NULL;
$arguments589['lang'] = NULL;
$arguments589['style'] = NULL;
$arguments589['title'] = NULL;
$arguments589['accesskey'] = NULL;
$arguments589['tabindex'] = NULL;
$arguments589['onclick'] = NULL;
$arguments589['target'] = NULL;
$arguments589['rel'] = NULL;
$renderChildrenClosure590 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output591 = '';

$output591 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments592 = array();
$arguments592['key'] = 'back-link';
$arguments592['id'] = NULL;
$arguments592['default'] = NULL;
$arguments592['htmlEscape'] = NULL;
$arguments592['arguments'] = NULL;
$arguments592['extensionName'] = NULL;
$renderChildrenClosure593 = function() {return NULL;};

$output591 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext);

$output591 .= '
					';
return $output591;
};
$viewHelper594 = $self->getViewHelper('$viewHelper594', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper594->setArguments($arguments589);
$viewHelper594->setRenderingContext($renderingContext);
$viewHelper594->setRenderChildrenClosure($renderChildrenClosure590);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output588 .= $viewHelper594->initializeArgumentsAndRender();

$output588 .= '
				</div>
			';
return $output588;
};

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments586, $renderChildrenClosure587, $renderingContext);

$output486 .= '

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments595 = array();
// Rendering Boolean node
$arguments595['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'detail.showSocialShareButtons', $renderingContext));
$arguments595['then'] = NULL;
$arguments595['else'] = NULL;
$renderChildrenClosure596 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output597 = '';

$output597 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments598 = array();
$renderChildrenClosure599 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output600 = '';

$output600 .= '
					';

$output600 .= '
					Care about the privacy of your readers?
					Checkout https://typo3.org/extensions/repository/view/rx_shariff
					and integrate it here with:
					<div >
						<rx:shariff services="facebook,xing,twitter,twitter" enableBackend="true" />
					</div>
					';

$output600 .= '
				';
return $output600;
};

$output597 .= '';

$output597 .= '
				<div class="facebook">
					<div class="like">
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Social\Facebook\LikeViewHelper
$arguments601 = array();
$arguments601['additionalAttributes'] = NULL;
$arguments601['data'] = NULL;
$arguments601['href'] = NULL;
$arguments601['layout'] = NULL;
$arguments601['width'] = NULL;
$arguments601['font'] = NULL;
$arguments601['javaScript'] = NULL;
$renderChildrenClosure602 = function() {return NULL;};
$viewHelper603 = $self->getViewHelper('$viewHelper603', $renderingContext, 'GeorgRinger\News\ViewHelpers\Social\Facebook\LikeViewHelper');
$viewHelper603->setArguments($arguments601);
$viewHelper603->setRenderingContext($renderingContext);
$viewHelper603->setRenderChildrenClosure($renderChildrenClosure602);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Social\Facebook\LikeViewHelper

$output597 .= $viewHelper603->initializeArgumentsAndRender();

$output597 .= '
					</div>
					<div class="share">
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Social\Facebook\ShareViewHelper
$arguments604 = array();
$arguments604['additionalAttributes'] = NULL;
$arguments604['data'] = NULL;
$arguments604['loadJs'] = true;
$arguments604['type'] = NULL;
$renderChildrenClosure605 = function() {return NULL;};
$viewHelper606 = $self->getViewHelper('$viewHelper606', $renderingContext, 'GeorgRinger\News\ViewHelpers\Social\Facebook\ShareViewHelper');
$viewHelper606->setArguments($arguments604);
$viewHelper606->setRenderingContext($renderingContext);
$viewHelper606->setRenderChildrenClosure($renderChildrenClosure605);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Social\Facebook\ShareViewHelper

$output597 .= $viewHelper606->initializeArgumentsAndRender();

$output597 .= '
					</div>
					<div class="twitter">
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Social\TwitterViewHelper
$arguments607 = array();
$arguments607['additionalAttributes'] = NULL;
$arguments607['data'] = NULL;
$arguments607['class'] = NULL;
$arguments607['datacount'] = NULL;
$arguments607['datavia'] = NULL;
$arguments607['datarelated'] = NULL;
$arguments607['datatext'] = NULL;
$arguments607['dataurl'] = NULL;
$arguments607['datalang'] = NULL;
$arguments607['javaScript'] = NULL;
$renderChildrenClosure608 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Twitter';
};
$viewHelper609 = $self->getViewHelper('$viewHelper609', $renderingContext, 'GeorgRinger\News\ViewHelpers\Social\TwitterViewHelper');
$viewHelper609->setArguments($arguments607);
$viewHelper609->setRenderingContext($renderingContext);
$viewHelper609->setRenderChildrenClosure($renderChildrenClosure608);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Social\TwitterViewHelper

$output597 .= $viewHelper609->initializeArgumentsAndRender();

$output597 .= '
					</div>
				</div>
			';
return $output597;
};

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments595, $renderChildrenClosure596, $renderingContext);

$output486 .= '

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments610 = array();
// Rendering Boolean node
$arguments610['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'detail.disqusShortname', $renderingContext));
$arguments610['then'] = NULL;
$arguments610['else'] = NULL;
$renderChildrenClosure611 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output612 = '';

$output612 .= '
				<div id="disqus_thread"></div>
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Social\DisqusViewHelper
$arguments613 = array();
$arguments613['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments613['shortName'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'detail.disqusShortname', $renderingContext);
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments614 = array();
$arguments614['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments614['settings'] = $currentVariableContainer->getOrNull('settings');
// Rendering Boolean node
$arguments614['uriOnly'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
// Rendering Array
$array615 = array();
$array615['forceAbsoluteUrl'] = 1;
$arguments614['configuration'] = $array615;
$arguments614['additionalAttributes'] = NULL;
$arguments614['data'] = NULL;
$arguments614['content'] = '';
$arguments614['class'] = NULL;
$arguments614['dir'] = NULL;
$arguments614['id'] = NULL;
$arguments614['lang'] = NULL;
$arguments614['style'] = NULL;
$arguments614['title'] = NULL;
$arguments614['accesskey'] = NULL;
$arguments614['tabindex'] = NULL;
$arguments614['onclick'] = NULL;
$arguments614['section'] = NULL;
$renderChildrenClosure616 = function() {return NULL;};
$viewHelper617 = $self->getViewHelper('$viewHelper617', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper617->setArguments($arguments614);
$viewHelper617->setRenderingContext($renderingContext);
$viewHelper617->setRenderChildrenClosure($renderChildrenClosure616);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments613['link'] = $viewHelper617->initializeArgumentsAndRender();
$renderChildrenClosure618 = function() {return NULL;};
$viewHelper619 = $self->getViewHelper('$viewHelper619', $renderingContext, 'GeorgRinger\News\ViewHelpers\Social\DisqusViewHelper');
$viewHelper619->setArguments($arguments613);
$viewHelper619->setRenderingContext($renderingContext);
$viewHelper619->setRenderChildrenClosure($renderChildrenClosure618);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Social\DisqusViewHelper

$output612 .= $viewHelper619->initializeArgumentsAndRender();

$output612 .= '
			';
return $output612;
};

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments610, $renderChildrenClosure611, $renderingContext);

$output486 .= '

			<!-- related things -->
			<div class="news-related-wrap">

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments620 = array();
// Rendering Boolean node
$arguments620['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'allRelatedSorted', $renderingContext));
$arguments620['then'] = NULL;
$arguments620['else'] = NULL;
$renderChildrenClosure621 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output622 = '';

$output622 .= '
					<!-- Related news records -->
					<div class="news-related news-related-news">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments623 = array();
$arguments623['key'] = 'related-news';
$arguments623['id'] = NULL;
$arguments623['default'] = NULL;
$arguments623['htmlEscape'] = NULL;
$arguments623['arguments'] = NULL;
$arguments623['extensionName'] = NULL;
$renderChildrenClosure624 = function() {return NULL;};

$output622 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments623, $renderChildrenClosure624, $renderingContext);

$output622 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments625 = array();
$arguments625['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'allRelatedSorted', $renderingContext);
$arguments625['as'] = 'related';
$arguments625['key'] = '';
$arguments625['reverse'] = false;
$arguments625['iteration'] = NULL;
$renderChildrenClosure626 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output627 = '';

$output627 .= '
								<li>
									<span class="news-related-news-date">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments628 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments629 = array();
$arguments629['key'] = 'dateFormat';
$arguments629['id'] = NULL;
$arguments629['default'] = NULL;
$arguments629['htmlEscape'] = NULL;
$arguments629['arguments'] = NULL;
$arguments629['extensionName'] = NULL;
$renderChildrenClosure630 = function() {return NULL;};
$arguments628['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments629, $renderChildrenClosure630, $renderingContext);
$arguments628['date'] = NULL;
$arguments628['base'] = NULL;
$renderChildrenClosure631 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('related'), 'datetime', $renderingContext);
};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments628, $renderChildrenClosure631, $renderingContext);

$output627 .= '</span>
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments632 = array();
$arguments632['newsItem'] = $currentVariableContainer->getOrNull('related');
$arguments632['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments632['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('related'), 'title', $renderingContext);
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
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments635 = array();
$arguments635['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('related'), 'title', $renderingContext);
$arguments635['keepQuotes'] = false;
$arguments635['encoding'] = NULL;
$arguments635['doubleEncode'] = true;
$renderChildrenClosure636 = function() {return NULL;};
$value637 = ($arguments635['value'] !== NULL ? $arguments635['value'] : $renderChildrenClosure636());

$output634 .= (!is_string($value637) ? $value637 : htmlspecialchars($value637, ($arguments635['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments635['encoding'] !== NULL ? $arguments635['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments635['doubleEncode']));

$output634 .= '
									';
return $output634;
};
$viewHelper638 = $self->getViewHelper('$viewHelper638', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper638->setArguments($arguments632);
$viewHelper638->setRenderingContext($renderingContext);
$viewHelper638->setRenderChildrenClosure($renderChildrenClosure633);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output627 .= $viewHelper638->initializeArgumentsAndRender();

$output627 .= '
								</li>

							';
return $output627;
};

$output622 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments625, $renderChildrenClosure626, $renderingContext);

$output622 .= '
						</ul>
					</div>
				';
return $output622;
};

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments620, $renderChildrenClosure621, $renderingContext);

$output486 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments639 = array();
// Rendering Boolean node
$arguments639['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'relatedFiles', $renderingContext));
$arguments639['then'] = NULL;
$arguments639['else'] = NULL;
$renderChildrenClosure640 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output641 = '';

$output641 .= '
					<!-- Related files -->
					<div class="news-related news-related-files">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments642 = array();
$arguments642['key'] = 'related-files';
$arguments642['id'] = NULL;
$arguments642['default'] = NULL;
$arguments642['htmlEscape'] = NULL;
$arguments642['arguments'] = NULL;
$arguments642['extensionName'] = NULL;
$renderChildrenClosure643 = function() {return NULL;};

$output641 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments642, $renderChildrenClosure643, $renderingContext);

$output641 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments644 = array();
$arguments644['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'relatedFiles', $renderingContext);
$arguments644['as'] = 'relatedFile';
$arguments644['key'] = '';
$arguments644['reverse'] = false;
$arguments644['iteration'] = NULL;
$renderChildrenClosure645 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output646 = '';

$output646 .= '
								<li>
									<span class="news-related-files-link">
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\FileDownloadViewHelper
$arguments647 = array();
$output648 = '';

$output648 .= 'uploads/tx_news/';

$output648 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'file', $renderingContext);
$arguments647['file'] = $output648;
$arguments647['configuration'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'relatedFiles.download', $renderingContext);
$arguments647['hideError'] = false;
$arguments647['class'] = '';
$arguments647['target'] = '';
$arguments647['alt'] = '';
$arguments647['title'] = '';
$renderChildrenClosure649 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output650 = '';

$output650 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments651 = array();
// Rendering Boolean node
$arguments651['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'title', $renderingContext));
$arguments651['then'] = NULL;
$arguments651['else'] = NULL;
$renderChildrenClosure652 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output653 = '';

$output653 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments654 = array();
$renderChildrenClosure655 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output656 = '';

$output656 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments657 = array();
$arguments657['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'title', $renderingContext);
$arguments657['keepQuotes'] = false;
$arguments657['encoding'] = NULL;
$arguments657['doubleEncode'] = true;
$renderChildrenClosure658 = function() {return NULL;};
$value659 = ($arguments657['value'] !== NULL ? $arguments657['value'] : $renderChildrenClosure658());

$output656 .= (!is_string($value659) ? $value659 : htmlspecialchars($value659, ($arguments657['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments657['encoding'] !== NULL ? $arguments657['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments657['doubleEncode']));

$output656 .= '
												';
return $output656;
};

$output653 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments654, $renderChildrenClosure655, $renderingContext);

$output653 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments660 = array();
$renderChildrenClosure661 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output662 = '';

$output662 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments663 = array();
$arguments663['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'file', $renderingContext);
$arguments663['keepQuotes'] = false;
$arguments663['encoding'] = NULL;
$arguments663['doubleEncode'] = true;
$renderChildrenClosure664 = function() {return NULL;};
$value665 = ($arguments663['value'] !== NULL ? $arguments663['value'] : $renderChildrenClosure664());

$output662 .= (!is_string($value665) ? $value665 : htmlspecialchars($value665, ($arguments663['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments663['encoding'] !== NULL ? $arguments663['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments663['doubleEncode']));

$output662 .= '
												';
return $output662;
};

$output653 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments660, $renderChildrenClosure661, $renderingContext);

$output653 .= '
											';
return $output653;
};
$arguments651['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output666 = '';

$output666 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments667 = array();
$arguments667['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'title', $renderingContext);
$arguments667['keepQuotes'] = false;
$arguments667['encoding'] = NULL;
$arguments667['doubleEncode'] = true;
$renderChildrenClosure668 = function() {return NULL;};
$value669 = ($arguments667['value'] !== NULL ? $arguments667['value'] : $renderChildrenClosure668());

$output666 .= (!is_string($value669) ? $value669 : htmlspecialchars($value669, ($arguments667['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments667['encoding'] !== NULL ? $arguments667['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments667['doubleEncode']));

$output666 .= '
												';
return $output666;
};
$arguments651['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output670 = '';

$output670 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments671 = array();
$arguments671['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'file', $renderingContext);
$arguments671['keepQuotes'] = false;
$arguments671['encoding'] = NULL;
$arguments671['doubleEncode'] = true;
$renderChildrenClosure672 = function() {return NULL;};
$value673 = ($arguments671['value'] !== NULL ? $arguments671['value'] : $renderChildrenClosure672());

$output670 .= (!is_string($value673) ? $value673 : htmlspecialchars($value673, ($arguments671['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments671['encoding'] !== NULL ? $arguments671['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments671['doubleEncode']));

$output670 .= '
												';
return $output670;
};

$output650 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments651, $renderChildrenClosure652, $renderingContext);

$output650 .= '
										';
return $output650;
};
$viewHelper674 = $self->getViewHelper('$viewHelper674', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\FileDownloadViewHelper');
$viewHelper674->setArguments($arguments647);
$viewHelper674->setRenderingContext($renderingContext);
$viewHelper674->setRenderChildrenClosure($renderChildrenClosure649);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\FileDownloadViewHelper

$output646 .= $viewHelper674->initializeArgumentsAndRender();

$output646 .= '
									</span>
									<span class="news-related-files-size">
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\FileSizeViewHelper
$arguments675 = array();
$output676 = '';

$output676 .= 'uploads/tx_news/';

$output676 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'file', $renderingContext);
$arguments675['file'] = $output676;
$arguments675['format'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'relatedFiles.fileSizeLabels', $renderingContext);
$arguments675['hideError'] = false;
$arguments675['fileSize'] = NULL;
$renderChildrenClosure677 = function() {return NULL;};
$viewHelper678 = $self->getViewHelper('$viewHelper678', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\FileSizeViewHelper');
$viewHelper678->setArguments($arguments675);
$viewHelper678->setRenderingContext($renderingContext);
$viewHelper678->setRenderChildrenClosure($renderChildrenClosure677);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\FileSizeViewHelper

$output646 .= $viewHelper678->initializeArgumentsAndRender();

$output646 .= '
									</span>
								</li>
							';
return $output646;
};

$output641 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments644, $renderChildrenClosure645, $renderingContext);

$output641 .= '
						</ul>
					</div>
				';
return $output641;
};

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments639, $renderChildrenClosure640, $renderingContext);

$output486 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments679 = array();
// Rendering Boolean node
$arguments679['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falRelatedFiles', $renderingContext));
$arguments679['then'] = NULL;
$arguments679['else'] = NULL;
$renderChildrenClosure680 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output681 = '';

$output681 .= '
					<!-- FAL related files -->
					<div class="news-related news-related-files">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments682 = array();
$arguments682['key'] = 'related-files';
$arguments682['id'] = NULL;
$arguments682['default'] = NULL;
$arguments682['htmlEscape'] = NULL;
$arguments682['arguments'] = NULL;
$arguments682['extensionName'] = NULL;
$renderChildrenClosure683 = function() {return NULL;};

$output681 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments682, $renderChildrenClosure683, $renderingContext);

$output681 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments684 = array();
$arguments684['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falRelatedFiles', $renderingContext);
$arguments684['as'] = 'relatedFile';
$arguments684['key'] = '';
$arguments684['reverse'] = false;
$arguments684['iteration'] = NULL;
$renderChildrenClosure685 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output686 = '';

$output686 .= '
								<li>
									<span class="news-related-files-link">
										<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments687 = array();
$arguments687['value'] = NULL;
$arguments687['keepQuotes'] = false;
$arguments687['encoding'] = NULL;
$arguments687['doubleEncode'] = true;
$renderChildrenClosure688 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'originalResource.publicUrl', $renderingContext);
};
$value689 = ($arguments687['value'] !== NULL ? $arguments687['value'] : $renderChildrenClosure688());

$output686 .= (!is_string($value689) ? $value689 : htmlspecialchars($value689, ($arguments687['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments687['encoding'] !== NULL ? $arguments687['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments687['doubleEncode']));

$output686 .= '" target="_blank">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments690 = array();
// Rendering Boolean node
$arguments690['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'originalResource.title', $renderingContext));
$arguments690['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'originalResource.title', $renderingContext);
$arguments690['else'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'originalResource.name', $renderingContext);
$renderChildrenClosure691 = function() {return NULL;};

$output686 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments690, $renderChildrenClosure691, $renderingContext);

$output686 .= '
										</a>
									</span>
									<span class="news-related-files-size">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$arguments692 = array();
$arguments692['value'] = NULL;
$arguments692['decimals'] = 0;
$arguments692['decimalSeparator'] = '.';
$arguments692['thousandsSeparator'] = ',';
$renderChildrenClosure693 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments694 = array();
$arguments694['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'originalResource.size', $renderingContext);
$arguments694['keepQuotes'] = false;
$arguments694['encoding'] = NULL;
$arguments694['doubleEncode'] = true;
$renderChildrenClosure695 = function() {return NULL;};
$value696 = ($arguments694['value'] !== NULL ? $arguments694['value'] : $renderChildrenClosure695());
return (!is_string($value696) ? $value696 : htmlspecialchars($value696, ($arguments694['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments694['encoding'] !== NULL ? $arguments694['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments694['doubleEncode']));
};

$output686 .= TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments692, $renderChildrenClosure693, $renderingContext);

$output686 .= '
									</span>
								</li>
							';
return $output686;
};

$output681 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments684, $renderChildrenClosure685, $renderingContext);

$output681 .= '
						</ul>
					</div>
				';
return $output681;
};

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments679, $renderChildrenClosure680, $renderingContext);

$output486 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments697 = array();
// Rendering Boolean node
$arguments697['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'relatedLinks', $renderingContext));
$arguments697['then'] = NULL;
$arguments697['else'] = NULL;
$renderChildrenClosure698 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output699 = '';

$output699 .= '
					<!-- Related links -->
					<div class="news-related news-related-links">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments700 = array();
$arguments700['key'] = 'related-links';
$arguments700['id'] = NULL;
$arguments700['default'] = NULL;
$arguments700['htmlEscape'] = NULL;
$arguments700['arguments'] = NULL;
$arguments700['extensionName'] = NULL;
$renderChildrenClosure701 = function() {return NULL;};

$output699 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments700, $renderChildrenClosure701, $renderingContext);

$output699 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments702 = array();
$arguments702['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'relatedLinks', $renderingContext);
$arguments702['as'] = 'relatedLink';
$arguments702['key'] = '';
$arguments702['reverse'] = false;
$arguments702['iteration'] = NULL;
$renderChildrenClosure703 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output704 = '';

$output704 .= '
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments705 = array();
$arguments705['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'uri', $renderingContext);
$arguments705['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'title', $renderingContext);
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TargetLinkViewHelper
$arguments706 = array();
$arguments706['link'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'uri', $renderingContext);
$renderChildrenClosure707 = function() {return NULL;};
$viewHelper708 = $self->getViewHelper('$viewHelper708', $renderingContext, 'GeorgRinger\News\ViewHelpers\TargetLinkViewHelper');
$viewHelper708->setArguments($arguments706);
$viewHelper708->setRenderingContext($renderingContext);
$viewHelper708->setRenderChildrenClosure($renderChildrenClosure707);
// End of ViewHelper GeorgRinger\News\ViewHelpers\TargetLinkViewHelper
$arguments705['target'] = $viewHelper708->initializeArgumentsAndRender();
$arguments705['additionalAttributes'] = NULL;
$arguments705['data'] = NULL;
$arguments705['additionalParams'] = array (
);
$arguments705['pageType'] = 0;
$arguments705['noCache'] = false;
$arguments705['noCacheHash'] = false;
$arguments705['section'] = '';
$arguments705['linkAccessRestrictedPages'] = false;
$arguments705['absolute'] = false;
$arguments705['addQueryString'] = false;
$arguments705['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments705['addQueryStringMethod'] = NULL;
$arguments705['class'] = NULL;
$arguments705['dir'] = NULL;
$arguments705['id'] = NULL;
$arguments705['lang'] = NULL;
$arguments705['style'] = NULL;
$arguments705['accesskey'] = NULL;
$arguments705['tabindex'] = NULL;
$arguments705['onclick'] = NULL;
$arguments705['rel'] = NULL;
$renderChildrenClosure709 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments710 = array();
// Rendering Boolean node
$arguments710['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'title', $renderingContext));
$arguments710['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'title', $renderingContext);
$arguments710['else'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'uri', $renderingContext);
$renderChildrenClosure711 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments710, $renderChildrenClosure711, $renderingContext);
};
$viewHelper712 = $self->getViewHelper('$viewHelper712', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper712->setArguments($arguments705);
$viewHelper712->setRenderingContext($renderingContext);
$viewHelper712->setRenderChildrenClosure($renderChildrenClosure709);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output704 .= $viewHelper712->initializeArgumentsAndRender();

$output704 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments713 = array();
// Rendering Boolean node
$arguments713['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'description', $renderingContext));
$arguments713['then'] = NULL;
$arguments713['else'] = NULL;
$renderChildrenClosure714 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output715 = '';

$output715 .= '<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments716 = array();
$arguments716['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'description', $renderingContext);
$arguments716['keepQuotes'] = false;
$arguments716['encoding'] = NULL;
$arguments716['doubleEncode'] = true;
$renderChildrenClosure717 = function() {return NULL;};
$value718 = ($arguments716['value'] !== NULL ? $arguments716['value'] : $renderChildrenClosure717());

$output715 .= (!is_string($value718) ? $value718 : htmlspecialchars($value718, ($arguments716['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments716['encoding'] !== NULL ? $arguments716['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments716['doubleEncode']));

$output715 .= '</span>';
return $output715;
};

$output704 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments713, $renderChildrenClosure714, $renderingContext);

$output704 .= '
								</li>
							';
return $output704;
};

$output699 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments702, $renderChildrenClosure703, $renderingContext);

$output699 .= '
						</ul>
					</div>
				';
return $output699;
};

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments697, $renderChildrenClosure698, $renderingContext);

$output486 .= '
			</div>
		';
return $output486;
};

$output483 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments484, $renderChildrenClosure485, $renderingContext);

$output483 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments719 = array();
$renderChildrenClosure720 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '

		';
};

$output483 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments719, $renderChildrenClosure720, $renderingContext);

$output483 .= '
	';
return $output483;
};
$arguments481['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output721 = '';

$output721 .= '
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\NothingViewHelper
$arguments722 = array();
$renderChildrenClosure723 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output724 = '';

$output724 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments725 = array();
// Rendering Boolean node
$arguments725['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'alternativeTitle', $renderingContext));
$arguments725['then'] = NULL;
$arguments725['else'] = NULL;
$renderChildrenClosure726 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output727 = '';

$output727 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments728 = array();
$renderChildrenClosure729 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output730 = '';

$output730 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$arguments731 = array();
$renderChildrenClosure732 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output733 = '';

$output733 .= '
							';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$arguments734 = array();
$arguments734['value'] = NULL;
$arguments734['keepQuotes'] = false;
$renderChildrenClosure735 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'alternativeTitle', $renderingContext);
};
$viewHelper736 = $self->getViewHelper('$viewHelper736', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper');
$viewHelper736->setArguments($arguments734);
$viewHelper736->setRenderingContext($renderingContext);
$viewHelper736->setRenderChildrenClosure($renderChildrenClosure735);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper

$output733 .= $viewHelper736->initializeArgumentsAndRender();

$output733 .= '
						';
return $output733;
};
$viewHelper737 = $self->getViewHelper('$viewHelper737', $renderingContext, 'GeorgRinger\News\ViewHelpers\TitleTagViewHelper');
$viewHelper737->setArguments($arguments731);
$viewHelper737->setRenderingContext($renderingContext);
$viewHelper737->setRenderChildrenClosure($renderChildrenClosure732);
// End of ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper

$output730 .= $viewHelper737->initializeArgumentsAndRender();

$output730 .= '
					';
return $output730;
};

$output727 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments728, $renderChildrenClosure729, $renderingContext);

$output727 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments738 = array();
$renderChildrenClosure739 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output740 = '';

$output740 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$arguments741 = array();
$renderChildrenClosure742 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output743 = '';

$output743 .= '
							';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$arguments744 = array();
$arguments744['value'] = NULL;
$arguments744['keepQuotes'] = false;
$renderChildrenClosure745 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
};
$viewHelper746 = $self->getViewHelper('$viewHelper746', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper');
$viewHelper746->setArguments($arguments744);
$viewHelper746->setRenderingContext($renderingContext);
$viewHelper746->setRenderChildrenClosure($renderChildrenClosure745);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper

$output743 .= $viewHelper746->initializeArgumentsAndRender();

$output743 .= '
						';
return $output743;
};
$viewHelper747 = $self->getViewHelper('$viewHelper747', $renderingContext, 'GeorgRinger\News\ViewHelpers\TitleTagViewHelper');
$viewHelper747->setArguments($arguments741);
$viewHelper747->setRenderingContext($renderingContext);
$viewHelper747->setRenderChildrenClosure($renderChildrenClosure742);
// End of ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper

$output740 .= $viewHelper747->initializeArgumentsAndRender();

$output740 .= '
					';
return $output740;
};

$output727 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments738, $renderChildrenClosure739, $renderingContext);

$output727 .= '
				';
return $output727;
};
$arguments725['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output748 = '';

$output748 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$arguments749 = array();
$renderChildrenClosure750 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output751 = '';

$output751 .= '
							';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$arguments752 = array();
$arguments752['value'] = NULL;
$arguments752['keepQuotes'] = false;
$renderChildrenClosure753 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'alternativeTitle', $renderingContext);
};
$viewHelper754 = $self->getViewHelper('$viewHelper754', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper');
$viewHelper754->setArguments($arguments752);
$viewHelper754->setRenderingContext($renderingContext);
$viewHelper754->setRenderChildrenClosure($renderChildrenClosure753);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper

$output751 .= $viewHelper754->initializeArgumentsAndRender();

$output751 .= '
						';
return $output751;
};
$viewHelper755 = $self->getViewHelper('$viewHelper755', $renderingContext, 'GeorgRinger\News\ViewHelpers\TitleTagViewHelper');
$viewHelper755->setArguments($arguments749);
$viewHelper755->setRenderingContext($renderingContext);
$viewHelper755->setRenderChildrenClosure($renderChildrenClosure750);
// End of ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper

$output748 .= $viewHelper755->initializeArgumentsAndRender();

$output748 .= '
					';
return $output748;
};
$arguments725['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output756 = '';

$output756 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper
$arguments757 = array();
$renderChildrenClosure758 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output759 = '';

$output759 .= '
							';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$arguments760 = array();
$arguments760['value'] = NULL;
$arguments760['keepQuotes'] = false;
$renderChildrenClosure761 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
};
$viewHelper762 = $self->getViewHelper('$viewHelper762', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper');
$viewHelper762->setArguments($arguments760);
$viewHelper762->setRenderingContext($renderingContext);
$viewHelper762->setRenderChildrenClosure($renderChildrenClosure761);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\HtmlentitiesDecodeViewHelper

$output759 .= $viewHelper762->initializeArgumentsAndRender();

$output759 .= '
						';
return $output759;
};
$viewHelper763 = $self->getViewHelper('$viewHelper763', $renderingContext, 'GeorgRinger\News\ViewHelpers\TitleTagViewHelper');
$viewHelper763->setArguments($arguments757);
$viewHelper763->setRenderingContext($renderingContext);
$viewHelper763->setRenderChildrenClosure($renderChildrenClosure758);
// End of ViewHelper GeorgRinger\News\ViewHelpers\TitleTagViewHelper

$output756 .= $viewHelper763->initializeArgumentsAndRender();

$output756 .= '
					';
return $output756;
};

$output724 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments725, $renderChildrenClosure726, $renderingContext);

$output724 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments764 = array();
$arguments764['partial'] = 'Detail/Opengraph';
// Rendering Array
$array765 = array();
$array765['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$array765['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments764['arguments'] = $array765;
$arguments764['section'] = NULL;
$arguments764['optional'] = false;
$renderChildrenClosure766 = function() {return NULL;};

$output724 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments764, $renderChildrenClosure766, $renderingContext);

$output724 .= '
			';
return $output724;
};
$viewHelper767 = $self->getViewHelper('$viewHelper767', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\NothingViewHelper');
$viewHelper767->setArguments($arguments722);
$viewHelper767->setRenderingContext($renderingContext);
$viewHelper767->setRenderChildrenClosure($renderChildrenClosure723);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\NothingViewHelper

$output721 .= $viewHelper767->initializeArgumentsAndRender();

$output721 .= '
			<div class="header">
				<h3 itemprop="headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments768 = array();
$arguments768['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments768['keepQuotes'] = false;
$arguments768['encoding'] = NULL;
$arguments768['doubleEncode'] = true;
$renderChildrenClosure769 = function() {return NULL;};
$value770 = ($arguments768['value'] !== NULL ? $arguments768['value'] : $renderChildrenClosure769());

$output721 .= (!is_string($value770) ? $value770 : htmlspecialchars($value770, ($arguments768['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments768['encoding'] !== NULL ? $arguments768['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments768['doubleEncode']));

$output721 .= '</h3>
			</div>
			<div class="footer">
				<p>
					<!-- date -->
					<span class="news-list-date">
						<time datetime="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments771 = array();
$arguments771['date'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'datetime', $renderingContext);
$arguments771['format'] = 'Y-m-d';
$arguments771['base'] = NULL;
$renderChildrenClosure772 = function() {return NULL;};

$output721 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments771, $renderChildrenClosure772, $renderingContext);

$output721 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments773 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments774 = array();
$arguments774['key'] = 'dateFormat';
$arguments774['id'] = NULL;
$arguments774['default'] = NULL;
$arguments774['htmlEscape'] = NULL;
$arguments774['arguments'] = NULL;
$arguments774['extensionName'] = NULL;
$renderChildrenClosure775 = function() {return NULL;};
$arguments773['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments774, $renderChildrenClosure775, $renderingContext);
$arguments773['date'] = NULL;
$arguments773['base'] = NULL;
$renderChildrenClosure776 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'datetime', $renderingContext);
};

$output721 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments773, $renderChildrenClosure776, $renderingContext);

$output721 .= '
							<meta itemprop="datePublished" content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments777 = array();
$arguments777['date'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'datetime', $renderingContext);
$arguments777['format'] = 'Y-m-d';
$arguments777['base'] = NULL;
$renderChildrenClosure778 = function() {return NULL;};

$output721 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments777, $renderChildrenClosure778, $renderingContext);

$output721 .= '" />
						</time>
					</span>

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments779 = array();
// Rendering Boolean node
$arguments779['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'categories', $renderingContext));
$arguments779['then'] = NULL;
$arguments779['else'] = NULL;
$renderChildrenClosure780 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output781 = '';

$output781 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments782 = array();
$arguments782['partial'] = 'Category/Items';
// Rendering Array
$array783 = array();
$array783['categories'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'categories', $renderingContext);
$array783['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments782['arguments'] = $array783;
$arguments782['section'] = NULL;
$arguments782['optional'] = false;
$renderChildrenClosure784 = function() {return NULL;};

$output781 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments782, $renderChildrenClosure784, $renderingContext);

$output781 .= '
					';
return $output781;
};

$output721 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments779, $renderChildrenClosure780, $renderingContext);

$output721 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments785 = array();
// Rendering Boolean node
$arguments785['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'tags', $renderingContext));
$arguments785['then'] = NULL;
$arguments785['else'] = NULL;
$renderChildrenClosure786 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output787 = '';

$output787 .= '
						<!-- Tags -->
						<span class="news-list-tags" itemprop="keywords">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments788 = array();
$arguments788['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'tags', $renderingContext);
$arguments788['as'] = 'tag';
$arguments788['key'] = '';
$arguments788['reverse'] = false;
$arguments788['iteration'] = NULL;
$renderChildrenClosure789 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output790 = '';

$output790 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments791 = array();
$arguments791['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('tag'), 'title', $renderingContext);
$arguments791['keepQuotes'] = false;
$arguments791['encoding'] = NULL;
$arguments791['doubleEncode'] = true;
$renderChildrenClosure792 = function() {return NULL;};
$value793 = ($arguments791['value'] !== NULL ? $arguments791['value'] : $renderChildrenClosure792());

$output790 .= (!is_string($value793) ? $value793 : htmlspecialchars($value793, ($arguments791['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments791['encoding'] !== NULL ? $arguments791['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments791['doubleEncode']));

$output790 .= '
						';
return $output790;
};

$output787 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments788, $renderChildrenClosure789, $renderingContext);

$output787 .= '
						</span>
					';
return $output787;
};

$output721 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments785, $renderChildrenClosure786, $renderingContext);

$output721 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments794 = array();
// Rendering Boolean node
$arguments794['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'author', $renderingContext));
$arguments794['then'] = NULL;
$arguments794['else'] = NULL;
$renderChildrenClosure795 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output796 = '';

$output796 .= '
						<!-- author -->
						<span class="news-list-author" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments797 = array();
$arguments797['key'] = 'author_simple';
$arguments797['id'] = NULL;
$arguments797['default'] = NULL;
$arguments797['htmlEscape'] = NULL;
$arguments797['arguments'] = NULL;
$arguments797['extensionName'] = NULL;
$renderChildrenClosure798 = function() {return NULL;};

$output796 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments797, $renderChildrenClosure798, $renderingContext);

$output796 .= ' <span itemprop="name">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments799 = array();
$arguments799['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'author', $renderingContext);
$arguments799['keepQuotes'] = false;
$arguments799['encoding'] = NULL;
$arguments799['doubleEncode'] = true;
$renderChildrenClosure800 = function() {return NULL;};
$value801 = ($arguments799['value'] !== NULL ? $arguments799['value'] : $renderChildrenClosure800());

$output796 .= (!is_string($value801) ? $value801 : htmlspecialchars($value801, ($arguments799['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments799['encoding'] !== NULL ? $arguments799['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments799['doubleEncode']));

$output796 .= '</span>
						</span>
					';
return $output796;
};

$output721 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments794, $renderChildrenClosure795, $renderingContext);

$output721 .= '
				</p>
			</div>

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments802 = array();
// Rendering Boolean node
$arguments802['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext));
$arguments802['then'] = NULL;
$arguments802['else'] = NULL;
$renderChildrenClosure803 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output804 = '';

$output804 .= '
				<!-- teaser -->
				<div class="teaser-text" itemprop="description">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments805 = array();
$arguments805['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure806 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext);
};

$output804 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments805, $renderChildrenClosure806, $renderingContext);

$output804 .= '
				</div>
			';
return $output804;
};

$output721 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments802, $renderChildrenClosure803, $renderingContext);

$output721 .= '

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments807 = array();
// Rendering Boolean node
$arguments807['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'contentElements', $renderingContext));
$arguments807['then'] = NULL;
$arguments807['else'] = NULL;
$renderChildrenClosure808 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output809 = '';

$output809 .= '
				<!-- content elements -->
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments810 = array();
$arguments810['typoscriptObjectPath'] = 'lib.tx_news.contentElementRendering';
$arguments810['data'] = NULL;
$arguments810['currentValueKey'] = NULL;
$arguments810['table'] = '';
$renderChildrenClosure811 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'contentElementIdList', $renderingContext);
};
$viewHelper812 = $self->getViewHelper('$viewHelper812', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper812->setArguments($arguments810);
$viewHelper812->setRenderingContext($renderingContext);
$viewHelper812->setRenderChildrenClosure($renderChildrenClosure811);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output809 .= $viewHelper812->initializeArgumentsAndRender();

$output809 .= '
			';
return $output809;
};

$output721 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments807, $renderChildrenClosure808, $renderingContext);

$output721 .= '

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments813 = array();
$arguments813['partial'] = 'Detail/FalMediaContainer';
// Rendering Array
$array814 = array();
$array814['media'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falMedia', $renderingContext);
$array814['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments813['arguments'] = $array814;
$arguments813['section'] = NULL;
$arguments813['optional'] = false;
$renderChildrenClosure815 = function() {return NULL;};

$output721 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments813, $renderChildrenClosure815, $renderingContext);

$output721 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments816 = array();
$arguments816['partial'] = 'Detail/MediaContainer';
// Rendering Array
$array817 = array();
$array817['media'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'media', $renderingContext);
$array817['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments816['arguments'] = $array817;
$arguments816['section'] = NULL;
$arguments816['optional'] = false;
$renderChildrenClosure818 = function() {return NULL;};

$output721 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments816, $renderChildrenClosure818, $renderingContext);

$output721 .= '

			<!-- main text -->
			<div class="news-text-wrap" itemprop="articleBody">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments819 = array();
$arguments819['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure820 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'bodytext', $renderingContext);
};

$output721 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments819, $renderChildrenClosure820, $renderingContext);

$output721 .= '
			</div>

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments821 = array();
// Rendering Boolean node
$arguments821['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'backPid', $renderingContext));
$arguments821['then'] = NULL;
$arguments821['else'] = NULL;
$renderChildrenClosure822 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output823 = '';

$output823 .= '
				<!-- Link Back -->
				<div class="news-backlink-wrap">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments824 = array();
$arguments824['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'backPid', $renderingContext);
$arguments824['additionalAttributes'] = NULL;
$arguments824['data'] = NULL;
$arguments824['additionalParams'] = array (
);
$arguments824['pageType'] = 0;
$arguments824['noCache'] = false;
$arguments824['noCacheHash'] = false;
$arguments824['section'] = '';
$arguments824['linkAccessRestrictedPages'] = false;
$arguments824['absolute'] = false;
$arguments824['addQueryString'] = false;
$arguments824['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments824['addQueryStringMethod'] = NULL;
$arguments824['class'] = NULL;
$arguments824['dir'] = NULL;
$arguments824['id'] = NULL;
$arguments824['lang'] = NULL;
$arguments824['style'] = NULL;
$arguments824['title'] = NULL;
$arguments824['accesskey'] = NULL;
$arguments824['tabindex'] = NULL;
$arguments824['onclick'] = NULL;
$arguments824['target'] = NULL;
$arguments824['rel'] = NULL;
$renderChildrenClosure825 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output826 = '';

$output826 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments827 = array();
$arguments827['key'] = 'back-link';
$arguments827['id'] = NULL;
$arguments827['default'] = NULL;
$arguments827['htmlEscape'] = NULL;
$arguments827['arguments'] = NULL;
$arguments827['extensionName'] = NULL;
$renderChildrenClosure828 = function() {return NULL;};

$output826 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments827, $renderChildrenClosure828, $renderingContext);

$output826 .= '
					';
return $output826;
};
$viewHelper829 = $self->getViewHelper('$viewHelper829', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper829->setArguments($arguments824);
$viewHelper829->setRenderingContext($renderingContext);
$viewHelper829->setRenderChildrenClosure($renderChildrenClosure825);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output823 .= $viewHelper829->initializeArgumentsAndRender();

$output823 .= '
				</div>
			';
return $output823;
};

$output721 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments821, $renderChildrenClosure822, $renderingContext);

$output721 .= '

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments830 = array();
// Rendering Boolean node
$arguments830['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'detail.showSocialShareButtons', $renderingContext));
$arguments830['then'] = NULL;
$arguments830['else'] = NULL;
$renderChildrenClosure831 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output832 = '';

$output832 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments833 = array();
$renderChildrenClosure834 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output835 = '';

$output835 .= '
					';

$output835 .= '
					Care about the privacy of your readers?
					Checkout https://typo3.org/extensions/repository/view/rx_shariff
					and integrate it here with:
					<div >
						<rx:shariff services="facebook,xing,twitter,twitter" enableBackend="true" />
					</div>
					';

$output835 .= '
				';
return $output835;
};

$output832 .= '';

$output832 .= '
				<div class="facebook">
					<div class="like">
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Social\Facebook\LikeViewHelper
$arguments836 = array();
$arguments836['additionalAttributes'] = NULL;
$arguments836['data'] = NULL;
$arguments836['href'] = NULL;
$arguments836['layout'] = NULL;
$arguments836['width'] = NULL;
$arguments836['font'] = NULL;
$arguments836['javaScript'] = NULL;
$renderChildrenClosure837 = function() {return NULL;};
$viewHelper838 = $self->getViewHelper('$viewHelper838', $renderingContext, 'GeorgRinger\News\ViewHelpers\Social\Facebook\LikeViewHelper');
$viewHelper838->setArguments($arguments836);
$viewHelper838->setRenderingContext($renderingContext);
$viewHelper838->setRenderChildrenClosure($renderChildrenClosure837);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Social\Facebook\LikeViewHelper

$output832 .= $viewHelper838->initializeArgumentsAndRender();

$output832 .= '
					</div>
					<div class="share">
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Social\Facebook\ShareViewHelper
$arguments839 = array();
$arguments839['additionalAttributes'] = NULL;
$arguments839['data'] = NULL;
$arguments839['loadJs'] = true;
$arguments839['type'] = NULL;
$renderChildrenClosure840 = function() {return NULL;};
$viewHelper841 = $self->getViewHelper('$viewHelper841', $renderingContext, 'GeorgRinger\News\ViewHelpers\Social\Facebook\ShareViewHelper');
$viewHelper841->setArguments($arguments839);
$viewHelper841->setRenderingContext($renderingContext);
$viewHelper841->setRenderChildrenClosure($renderChildrenClosure840);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Social\Facebook\ShareViewHelper

$output832 .= $viewHelper841->initializeArgumentsAndRender();

$output832 .= '
					</div>
					<div class="twitter">
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Social\TwitterViewHelper
$arguments842 = array();
$arguments842['additionalAttributes'] = NULL;
$arguments842['data'] = NULL;
$arguments842['class'] = NULL;
$arguments842['datacount'] = NULL;
$arguments842['datavia'] = NULL;
$arguments842['datarelated'] = NULL;
$arguments842['datatext'] = NULL;
$arguments842['dataurl'] = NULL;
$arguments842['datalang'] = NULL;
$arguments842['javaScript'] = NULL;
$renderChildrenClosure843 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Twitter';
};
$viewHelper844 = $self->getViewHelper('$viewHelper844', $renderingContext, 'GeorgRinger\News\ViewHelpers\Social\TwitterViewHelper');
$viewHelper844->setArguments($arguments842);
$viewHelper844->setRenderingContext($renderingContext);
$viewHelper844->setRenderChildrenClosure($renderChildrenClosure843);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Social\TwitterViewHelper

$output832 .= $viewHelper844->initializeArgumentsAndRender();

$output832 .= '
					</div>
				</div>
			';
return $output832;
};

$output721 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments830, $renderChildrenClosure831, $renderingContext);

$output721 .= '

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments845 = array();
// Rendering Boolean node
$arguments845['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'detail.disqusShortname', $renderingContext));
$arguments845['then'] = NULL;
$arguments845['else'] = NULL;
$renderChildrenClosure846 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output847 = '';

$output847 .= '
				<div id="disqus_thread"></div>
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Social\DisqusViewHelper
$arguments848 = array();
$arguments848['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments848['shortName'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'detail.disqusShortname', $renderingContext);
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments849 = array();
$arguments849['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments849['settings'] = $currentVariableContainer->getOrNull('settings');
// Rendering Boolean node
$arguments849['uriOnly'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
// Rendering Array
$array850 = array();
$array850['forceAbsoluteUrl'] = 1;
$arguments849['configuration'] = $array850;
$arguments849['additionalAttributes'] = NULL;
$arguments849['data'] = NULL;
$arguments849['content'] = '';
$arguments849['class'] = NULL;
$arguments849['dir'] = NULL;
$arguments849['id'] = NULL;
$arguments849['lang'] = NULL;
$arguments849['style'] = NULL;
$arguments849['title'] = NULL;
$arguments849['accesskey'] = NULL;
$arguments849['tabindex'] = NULL;
$arguments849['onclick'] = NULL;
$arguments849['section'] = NULL;
$renderChildrenClosure851 = function() {return NULL;};
$viewHelper852 = $self->getViewHelper('$viewHelper852', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper852->setArguments($arguments849);
$viewHelper852->setRenderingContext($renderingContext);
$viewHelper852->setRenderChildrenClosure($renderChildrenClosure851);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments848['link'] = $viewHelper852->initializeArgumentsAndRender();
$renderChildrenClosure853 = function() {return NULL;};
$viewHelper854 = $self->getViewHelper('$viewHelper854', $renderingContext, 'GeorgRinger\News\ViewHelpers\Social\DisqusViewHelper');
$viewHelper854->setArguments($arguments848);
$viewHelper854->setRenderingContext($renderingContext);
$viewHelper854->setRenderChildrenClosure($renderChildrenClosure853);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Social\DisqusViewHelper

$output847 .= $viewHelper854->initializeArgumentsAndRender();

$output847 .= '
			';
return $output847;
};

$output721 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments845, $renderChildrenClosure846, $renderingContext);

$output721 .= '

			<!-- related things -->
			<div class="news-related-wrap">

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments855 = array();
// Rendering Boolean node
$arguments855['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'allRelatedSorted', $renderingContext));
$arguments855['then'] = NULL;
$arguments855['else'] = NULL;
$renderChildrenClosure856 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output857 = '';

$output857 .= '
					<!-- Related news records -->
					<div class="news-related news-related-news">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments858 = array();
$arguments858['key'] = 'related-news';
$arguments858['id'] = NULL;
$arguments858['default'] = NULL;
$arguments858['htmlEscape'] = NULL;
$arguments858['arguments'] = NULL;
$arguments858['extensionName'] = NULL;
$renderChildrenClosure859 = function() {return NULL;};

$output857 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments858, $renderChildrenClosure859, $renderingContext);

$output857 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments860 = array();
$arguments860['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'allRelatedSorted', $renderingContext);
$arguments860['as'] = 'related';
$arguments860['key'] = '';
$arguments860['reverse'] = false;
$arguments860['iteration'] = NULL;
$renderChildrenClosure861 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output862 = '';

$output862 .= '
								<li>
									<span class="news-related-news-date">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments863 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments864 = array();
$arguments864['key'] = 'dateFormat';
$arguments864['id'] = NULL;
$arguments864['default'] = NULL;
$arguments864['htmlEscape'] = NULL;
$arguments864['arguments'] = NULL;
$arguments864['extensionName'] = NULL;
$renderChildrenClosure865 = function() {return NULL;};
$arguments863['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments864, $renderChildrenClosure865, $renderingContext);
$arguments863['date'] = NULL;
$arguments863['base'] = NULL;
$renderChildrenClosure866 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('related'), 'datetime', $renderingContext);
};

$output862 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments863, $renderChildrenClosure866, $renderingContext);

$output862 .= '</span>
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments867 = array();
$arguments867['newsItem'] = $currentVariableContainer->getOrNull('related');
$arguments867['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments867['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('related'), 'title', $renderingContext);
$arguments867['additionalAttributes'] = NULL;
$arguments867['data'] = NULL;
$arguments867['uriOnly'] = false;
$arguments867['configuration'] = array (
);
$arguments867['content'] = '';
$arguments867['class'] = NULL;
$arguments867['dir'] = NULL;
$arguments867['id'] = NULL;
$arguments867['lang'] = NULL;
$arguments867['style'] = NULL;
$arguments867['accesskey'] = NULL;
$arguments867['tabindex'] = NULL;
$arguments867['onclick'] = NULL;
$arguments867['section'] = NULL;
$renderChildrenClosure868 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output869 = '';

$output869 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments870 = array();
$arguments870['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('related'), 'title', $renderingContext);
$arguments870['keepQuotes'] = false;
$arguments870['encoding'] = NULL;
$arguments870['doubleEncode'] = true;
$renderChildrenClosure871 = function() {return NULL;};
$value872 = ($arguments870['value'] !== NULL ? $arguments870['value'] : $renderChildrenClosure871());

$output869 .= (!is_string($value872) ? $value872 : htmlspecialchars($value872, ($arguments870['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments870['encoding'] !== NULL ? $arguments870['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments870['doubleEncode']));

$output869 .= '
									';
return $output869;
};
$viewHelper873 = $self->getViewHelper('$viewHelper873', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper873->setArguments($arguments867);
$viewHelper873->setRenderingContext($renderingContext);
$viewHelper873->setRenderChildrenClosure($renderChildrenClosure868);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output862 .= $viewHelper873->initializeArgumentsAndRender();

$output862 .= '
								</li>

							';
return $output862;
};

$output857 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments860, $renderChildrenClosure861, $renderingContext);

$output857 .= '
						</ul>
					</div>
				';
return $output857;
};

$output721 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments855, $renderChildrenClosure856, $renderingContext);

$output721 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments874 = array();
// Rendering Boolean node
$arguments874['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'relatedFiles', $renderingContext));
$arguments874['then'] = NULL;
$arguments874['else'] = NULL;
$renderChildrenClosure875 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output876 = '';

$output876 .= '
					<!-- Related files -->
					<div class="news-related news-related-files">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments877 = array();
$arguments877['key'] = 'related-files';
$arguments877['id'] = NULL;
$arguments877['default'] = NULL;
$arguments877['htmlEscape'] = NULL;
$arguments877['arguments'] = NULL;
$arguments877['extensionName'] = NULL;
$renderChildrenClosure878 = function() {return NULL;};

$output876 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments877, $renderChildrenClosure878, $renderingContext);

$output876 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments879 = array();
$arguments879['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'relatedFiles', $renderingContext);
$arguments879['as'] = 'relatedFile';
$arguments879['key'] = '';
$arguments879['reverse'] = false;
$arguments879['iteration'] = NULL;
$renderChildrenClosure880 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output881 = '';

$output881 .= '
								<li>
									<span class="news-related-files-link">
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\FileDownloadViewHelper
$arguments882 = array();
$output883 = '';

$output883 .= 'uploads/tx_news/';

$output883 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'file', $renderingContext);
$arguments882['file'] = $output883;
$arguments882['configuration'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'relatedFiles.download', $renderingContext);
$arguments882['hideError'] = false;
$arguments882['class'] = '';
$arguments882['target'] = '';
$arguments882['alt'] = '';
$arguments882['title'] = '';
$renderChildrenClosure884 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output885 = '';

$output885 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments886 = array();
// Rendering Boolean node
$arguments886['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'title', $renderingContext));
$arguments886['then'] = NULL;
$arguments886['else'] = NULL;
$renderChildrenClosure887 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output888 = '';

$output888 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments889 = array();
$renderChildrenClosure890 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output891 = '';

$output891 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments892 = array();
$arguments892['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'title', $renderingContext);
$arguments892['keepQuotes'] = false;
$arguments892['encoding'] = NULL;
$arguments892['doubleEncode'] = true;
$renderChildrenClosure893 = function() {return NULL;};
$value894 = ($arguments892['value'] !== NULL ? $arguments892['value'] : $renderChildrenClosure893());

$output891 .= (!is_string($value894) ? $value894 : htmlspecialchars($value894, ($arguments892['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments892['encoding'] !== NULL ? $arguments892['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments892['doubleEncode']));

$output891 .= '
												';
return $output891;
};

$output888 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments889, $renderChildrenClosure890, $renderingContext);

$output888 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments895 = array();
$renderChildrenClosure896 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output897 = '';

$output897 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments898 = array();
$arguments898['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'file', $renderingContext);
$arguments898['keepQuotes'] = false;
$arguments898['encoding'] = NULL;
$arguments898['doubleEncode'] = true;
$renderChildrenClosure899 = function() {return NULL;};
$value900 = ($arguments898['value'] !== NULL ? $arguments898['value'] : $renderChildrenClosure899());

$output897 .= (!is_string($value900) ? $value900 : htmlspecialchars($value900, ($arguments898['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments898['encoding'] !== NULL ? $arguments898['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments898['doubleEncode']));

$output897 .= '
												';
return $output897;
};

$output888 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments895, $renderChildrenClosure896, $renderingContext);

$output888 .= '
											';
return $output888;
};
$arguments886['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output901 = '';

$output901 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments902 = array();
$arguments902['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'title', $renderingContext);
$arguments902['keepQuotes'] = false;
$arguments902['encoding'] = NULL;
$arguments902['doubleEncode'] = true;
$renderChildrenClosure903 = function() {return NULL;};
$value904 = ($arguments902['value'] !== NULL ? $arguments902['value'] : $renderChildrenClosure903());

$output901 .= (!is_string($value904) ? $value904 : htmlspecialchars($value904, ($arguments902['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments902['encoding'] !== NULL ? $arguments902['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments902['doubleEncode']));

$output901 .= '
												';
return $output901;
};
$arguments886['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output905 = '';

$output905 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments906 = array();
$arguments906['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'file', $renderingContext);
$arguments906['keepQuotes'] = false;
$arguments906['encoding'] = NULL;
$arguments906['doubleEncode'] = true;
$renderChildrenClosure907 = function() {return NULL;};
$value908 = ($arguments906['value'] !== NULL ? $arguments906['value'] : $renderChildrenClosure907());

$output905 .= (!is_string($value908) ? $value908 : htmlspecialchars($value908, ($arguments906['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments906['encoding'] !== NULL ? $arguments906['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments906['doubleEncode']));

$output905 .= '
												';
return $output905;
};

$output885 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments886, $renderChildrenClosure887, $renderingContext);

$output885 .= '
										';
return $output885;
};
$viewHelper909 = $self->getViewHelper('$viewHelper909', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\FileDownloadViewHelper');
$viewHelper909->setArguments($arguments882);
$viewHelper909->setRenderingContext($renderingContext);
$viewHelper909->setRenderChildrenClosure($renderChildrenClosure884);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\FileDownloadViewHelper

$output881 .= $viewHelper909->initializeArgumentsAndRender();

$output881 .= '
									</span>
									<span class="news-related-files-size">
										';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Format\FileSizeViewHelper
$arguments910 = array();
$output911 = '';

$output911 .= 'uploads/tx_news/';

$output911 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'file', $renderingContext);
$arguments910['file'] = $output911;
$arguments910['format'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'relatedFiles.fileSizeLabels', $renderingContext);
$arguments910['hideError'] = false;
$arguments910['fileSize'] = NULL;
$renderChildrenClosure912 = function() {return NULL;};
$viewHelper913 = $self->getViewHelper('$viewHelper913', $renderingContext, 'GeorgRinger\News\ViewHelpers\Format\FileSizeViewHelper');
$viewHelper913->setArguments($arguments910);
$viewHelper913->setRenderingContext($renderingContext);
$viewHelper913->setRenderChildrenClosure($renderChildrenClosure912);
// End of ViewHelper GeorgRinger\News\ViewHelpers\Format\FileSizeViewHelper

$output881 .= $viewHelper913->initializeArgumentsAndRender();

$output881 .= '
									</span>
								</li>
							';
return $output881;
};

$output876 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments879, $renderChildrenClosure880, $renderingContext);

$output876 .= '
						</ul>
					</div>
				';
return $output876;
};

$output721 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments874, $renderChildrenClosure875, $renderingContext);

$output721 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments914 = array();
// Rendering Boolean node
$arguments914['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falRelatedFiles', $renderingContext));
$arguments914['then'] = NULL;
$arguments914['else'] = NULL;
$renderChildrenClosure915 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output916 = '';

$output916 .= '
					<!-- FAL related files -->
					<div class="news-related news-related-files">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments917 = array();
$arguments917['key'] = 'related-files';
$arguments917['id'] = NULL;
$arguments917['default'] = NULL;
$arguments917['htmlEscape'] = NULL;
$arguments917['arguments'] = NULL;
$arguments917['extensionName'] = NULL;
$renderChildrenClosure918 = function() {return NULL;};

$output916 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments917, $renderChildrenClosure918, $renderingContext);

$output916 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments919 = array();
$arguments919['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'falRelatedFiles', $renderingContext);
$arguments919['as'] = 'relatedFile';
$arguments919['key'] = '';
$arguments919['reverse'] = false;
$arguments919['iteration'] = NULL;
$renderChildrenClosure920 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output921 = '';

$output921 .= '
								<li>
									<span class="news-related-files-link">
										<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments922 = array();
$arguments922['value'] = NULL;
$arguments922['keepQuotes'] = false;
$arguments922['encoding'] = NULL;
$arguments922['doubleEncode'] = true;
$renderChildrenClosure923 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'originalResource.publicUrl', $renderingContext);
};
$value924 = ($arguments922['value'] !== NULL ? $arguments922['value'] : $renderChildrenClosure923());

$output921 .= (!is_string($value924) ? $value924 : htmlspecialchars($value924, ($arguments922['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments922['encoding'] !== NULL ? $arguments922['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments922['doubleEncode']));

$output921 .= '" target="_blank">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments925 = array();
// Rendering Boolean node
$arguments925['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'originalResource.title', $renderingContext));
$arguments925['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'originalResource.title', $renderingContext);
$arguments925['else'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'originalResource.name', $renderingContext);
$renderChildrenClosure926 = function() {return NULL;};

$output921 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments925, $renderChildrenClosure926, $renderingContext);

$output921 .= '
										</a>
									</span>
									<span class="news-related-files-size">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$arguments927 = array();
$arguments927['value'] = NULL;
$arguments927['decimals'] = 0;
$arguments927['decimalSeparator'] = '.';
$arguments927['thousandsSeparator'] = ',';
$renderChildrenClosure928 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments929 = array();
$arguments929['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedFile'), 'originalResource.size', $renderingContext);
$arguments929['keepQuotes'] = false;
$arguments929['encoding'] = NULL;
$arguments929['doubleEncode'] = true;
$renderChildrenClosure930 = function() {return NULL;};
$value931 = ($arguments929['value'] !== NULL ? $arguments929['value'] : $renderChildrenClosure930());
return (!is_string($value931) ? $value931 : htmlspecialchars($value931, ($arguments929['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments929['encoding'] !== NULL ? $arguments929['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments929['doubleEncode']));
};

$output921 .= TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments927, $renderChildrenClosure928, $renderingContext);

$output921 .= '
									</span>
								</li>
							';
return $output921;
};

$output916 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments919, $renderChildrenClosure920, $renderingContext);

$output916 .= '
						</ul>
					</div>
				';
return $output916;
};

$output721 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments914, $renderChildrenClosure915, $renderingContext);

$output721 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments932 = array();
// Rendering Boolean node
$arguments932['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'relatedLinks', $renderingContext));
$arguments932['then'] = NULL;
$arguments932['else'] = NULL;
$renderChildrenClosure933 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output934 = '';

$output934 .= '
					<!-- Related links -->
					<div class="news-related news-related-links">
						<h4>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments935 = array();
$arguments935['key'] = 'related-links';
$arguments935['id'] = NULL;
$arguments935['default'] = NULL;
$arguments935['htmlEscape'] = NULL;
$arguments935['arguments'] = NULL;
$arguments935['extensionName'] = NULL;
$renderChildrenClosure936 = function() {return NULL;};

$output934 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments935, $renderChildrenClosure936, $renderingContext);

$output934 .= '
						</h4>
						<ul>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments937 = array();
$arguments937['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'relatedLinks', $renderingContext);
$arguments937['as'] = 'relatedLink';
$arguments937['key'] = '';
$arguments937['reverse'] = false;
$arguments937['iteration'] = NULL;
$renderChildrenClosure938 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output939 = '';

$output939 .= '
								<li>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments940 = array();
$arguments940['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'uri', $renderingContext);
$arguments940['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'title', $renderingContext);
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\TargetLinkViewHelper
$arguments941 = array();
$arguments941['link'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'uri', $renderingContext);
$renderChildrenClosure942 = function() {return NULL;};
$viewHelper943 = $self->getViewHelper('$viewHelper943', $renderingContext, 'GeorgRinger\News\ViewHelpers\TargetLinkViewHelper');
$viewHelper943->setArguments($arguments941);
$viewHelper943->setRenderingContext($renderingContext);
$viewHelper943->setRenderChildrenClosure($renderChildrenClosure942);
// End of ViewHelper GeorgRinger\News\ViewHelpers\TargetLinkViewHelper
$arguments940['target'] = $viewHelper943->initializeArgumentsAndRender();
$arguments940['additionalAttributes'] = NULL;
$arguments940['data'] = NULL;
$arguments940['additionalParams'] = array (
);
$arguments940['pageType'] = 0;
$arguments940['noCache'] = false;
$arguments940['noCacheHash'] = false;
$arguments940['section'] = '';
$arguments940['linkAccessRestrictedPages'] = false;
$arguments940['absolute'] = false;
$arguments940['addQueryString'] = false;
$arguments940['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments940['addQueryStringMethod'] = NULL;
$arguments940['class'] = NULL;
$arguments940['dir'] = NULL;
$arguments940['id'] = NULL;
$arguments940['lang'] = NULL;
$arguments940['style'] = NULL;
$arguments940['accesskey'] = NULL;
$arguments940['tabindex'] = NULL;
$arguments940['onclick'] = NULL;
$arguments940['rel'] = NULL;
$renderChildrenClosure944 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments945 = array();
// Rendering Boolean node
$arguments945['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'title', $renderingContext));
$arguments945['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'title', $renderingContext);
$arguments945['else'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'uri', $renderingContext);
$renderChildrenClosure946 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments945, $renderChildrenClosure946, $renderingContext);
};
$viewHelper947 = $self->getViewHelper('$viewHelper947', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper947->setArguments($arguments940);
$viewHelper947->setRenderingContext($renderingContext);
$viewHelper947->setRenderChildrenClosure($renderChildrenClosure944);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output939 .= $viewHelper947->initializeArgumentsAndRender();

$output939 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments948 = array();
// Rendering Boolean node
$arguments948['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'description', $renderingContext));
$arguments948['then'] = NULL;
$arguments948['else'] = NULL;
$renderChildrenClosure949 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output950 = '';

$output950 .= '<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments951 = array();
$arguments951['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('relatedLink'), 'description', $renderingContext);
$arguments951['keepQuotes'] = false;
$arguments951['encoding'] = NULL;
$arguments951['doubleEncode'] = true;
$renderChildrenClosure952 = function() {return NULL;};
$value953 = ($arguments951['value'] !== NULL ? $arguments951['value'] : $renderChildrenClosure952());

$output950 .= (!is_string($value953) ? $value953 : htmlspecialchars($value953, ($arguments951['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments951['encoding'] !== NULL ? $arguments951['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments951['doubleEncode']));

$output950 .= '</span>';
return $output950;
};

$output939 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments948, $renderChildrenClosure949, $renderingContext);

$output939 .= '
								</li>
							';
return $output939;
};

$output934 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments937, $renderChildrenClosure938, $renderingContext);

$output934 .= '
						</ul>
					</div>
				';
return $output934;
};

$output721 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments932, $renderChildrenClosure933, $renderingContext);

$output721 .= '
			</div>
		';
return $output721;
};
$arguments481['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '

		';
};

$output480 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments481, $renderChildrenClosure482, $renderingContext);

$output480 .= '
';
return $output480;
};

$output474 .= '';


return $output474;
}


}
#1468427388    276636    