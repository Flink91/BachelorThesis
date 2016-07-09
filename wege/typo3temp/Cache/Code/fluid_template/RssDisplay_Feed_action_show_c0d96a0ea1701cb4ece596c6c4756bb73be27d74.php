<?php
class FluidCache_RssDisplay_Feed_action_show_c0d96a0ea1701cb4ece596c6c4756bb73be27d74 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	<h2>
		<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = $currentVariableContainer->getOrNull('titleLink');
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() {return NULL;};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1['encoding'] !== NULL ? $arguments1['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1['doubleEncode']));

$output0 .= '" target=\'_blank\'>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments4 = array();
$arguments4['value'] = $currentVariableContainer->getOrNull('title');
$arguments4['keepQuotes'] = false;
$arguments4['encoding'] = NULL;
$arguments4['doubleEncode'] = true;
$renderChildrenClosure5 = function() {return NULL;};
$value6 = ($arguments4['value'] !== NULL ? $arguments4['value'] : $renderChildrenClosure5());

$output0 .= (!is_string($value6) ? $value6 : htmlspecialchars($value6, ($arguments4['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments4['encoding'] !== NULL ? $arguments4['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments4['doubleEncode']));

$output0 .= '</a>
	</h2>

	<ul class="tx-rssdisplay-list">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments7 = array();
$arguments7['each'] = $currentVariableContainer->getOrNull('items');
$arguments7['as'] = 'item';
$arguments7['key'] = '';
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
			<li class="tx-rssdisplay-item">
				<span class="tx-rssdisplay-item-title">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments10 = array();
// Rendering Boolean node
// Rendering ViewHelper Tx_RssDisplay_ViewHelpers_Item_LinkViewHelper
$arguments11 = array();
$renderChildrenClosure12 = function() {return NULL;};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'Tx_RssDisplay_ViewHelpers_Item_LinkViewHelper');
$viewHelper13->setArguments($arguments11);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper Tx_RssDisplay_ViewHelpers_Item_LinkViewHelper
$arguments10['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper13->initializeArgumentsAndRender());
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output15 = '';

$output15 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments16 = array();
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output18 = '';

$output18 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$arguments19 = array();
// Rendering ViewHelper Tx_RssDisplay_ViewHelpers_Item_LinkViewHelper
$arguments20 = array();
$renderChildrenClosure21 = function() {return NULL;};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'Tx_RssDisplay_ViewHelpers_Item_LinkViewHelper');
$viewHelper22->setArguments($arguments20);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper Tx_RssDisplay_ViewHelpers_Item_LinkViewHelper
$arguments19['uri'] = $viewHelper22->initializeArgumentsAndRender();
$arguments19['additionalAttributes'] = NULL;
$arguments19['data'] = NULL;
$arguments19['defaultScheme'] = 'http';
$arguments19['class'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$arguments19['name'] = NULL;
$arguments19['rel'] = NULL;
$arguments19['rev'] = NULL;
$arguments19['target'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output24 = '';

$output24 .= '
								';
// Rendering ViewHelper Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper
$arguments25 = array();
$renderChildrenClosure26 = function() {return NULL;};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper');
$viewHelper27->setArguments($arguments25);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper

$output24 .= $viewHelper27->initializeArgumentsAndRender();

$output24 .= '
							';
return $output24;
};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper');
$viewHelper28->setArguments($arguments19);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper

$output18 .= $viewHelper28->initializeArgumentsAndRender();

$output18 .= '
						';
return $output18;
};

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments29 = array();
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
							';
// Rendering ViewHelper Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper
$arguments32 = array();
$renderChildrenClosure33 = function() {return NULL;};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper');
$viewHelper34->setArguments($arguments32);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper

$output31 .= $viewHelper34->initializeArgumentsAndRender();

$output31 .= '
						';
return $output31;
};

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output15 .= '
					';
return $output15;
};
$arguments10['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output35 = '';

$output35 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$arguments36 = array();
// Rendering ViewHelper Tx_RssDisplay_ViewHelpers_Item_LinkViewHelper
$arguments37 = array();
$renderChildrenClosure38 = function() {return NULL;};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'Tx_RssDisplay_ViewHelpers_Item_LinkViewHelper');
$viewHelper39->setArguments($arguments37);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure38);
// End of ViewHelper Tx_RssDisplay_ViewHelpers_Item_LinkViewHelper
$arguments36['uri'] = $viewHelper39->initializeArgumentsAndRender();
$arguments36['additionalAttributes'] = NULL;
$arguments36['data'] = NULL;
$arguments36['defaultScheme'] = 'http';
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
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output41 = '';

$output41 .= '
								';
// Rendering ViewHelper Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper
$arguments42 = array();
$renderChildrenClosure43 = function() {return NULL;};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper');
$viewHelper44->setArguments($arguments42);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper

$output41 .= $viewHelper44->initializeArgumentsAndRender();

$output41 .= '
							';
return $output41;
};
$viewHelper45 = $self->getViewHelper('$viewHelper45', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper');
$viewHelper45->setArguments($arguments36);
$viewHelper45->setRenderingContext($renderingContext);
$viewHelper45->setRenderChildrenClosure($renderChildrenClosure40);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper

$output35 .= $viewHelper45->initializeArgumentsAndRender();

$output35 .= '
						';
return $output35;
};
$arguments10['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output46 = '';

$output46 .= '
							';
// Rendering ViewHelper Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper
$arguments47 = array();
$renderChildrenClosure48 = function() {return NULL;};
$viewHelper49 = $self->getViewHelper('$viewHelper49', $renderingContext, 'Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper');
$viewHelper49->setArguments($arguments47);
$viewHelper49->setRenderingContext($renderingContext);
$viewHelper49->setRenderChildrenClosure($renderChildrenClosure48);
// End of ViewHelper Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper

$output46 .= $viewHelper49->initializeArgumentsAndRender();

$output46 .= '
						';
return $output46;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure14, $renderingContext);

$output9 .= '
				</span>

				<p class="tx-rssdisplay-item-description">
					';
// Rendering ViewHelper Tx_RssDisplay_ViewHelpers_Item_ContentViewHelper
$arguments50 = array();
$renderChildrenClosure51 = function() {return NULL;};
$viewHelper52 = $self->getViewHelper('$viewHelper52', $renderingContext, 'Tx_RssDisplay_ViewHelpers_Item_ContentViewHelper');
$viewHelper52->setArguments($arguments50);
$viewHelper52->setRenderingContext($renderingContext);
$viewHelper52->setRenderChildrenClosure($renderChildrenClosure51);
// End of ViewHelper Tx_RssDisplay_ViewHelpers_Item_ContentViewHelper

$output9 .= $viewHelper52->initializeArgumentsAndRender();

$output9 .= '
				</p>
			</li>
		';
return $output9;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
	</ul>
';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output53 = '';

$output53 .= '<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" > <!-- after 6.2 migration -->



';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments54 = array();
$arguments54['name'] = 'Default';
$renderChildrenClosure55 = function() {return NULL;};
$viewHelper56 = $self->getViewHelper('$viewHelper56', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper56->setArguments($arguments54);
$viewHelper56->setRenderingContext($renderingContext);
$viewHelper56->setRenderChildrenClosure($renderChildrenClosure55);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output53 .= $viewHelper56->initializeArgumentsAndRender();

$output53 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments57 = array();
$arguments57['name'] = 'content';
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output59 = '';

$output59 .= '
	<h2>
		<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments60 = array();
$arguments60['value'] = $currentVariableContainer->getOrNull('titleLink');
$arguments60['keepQuotes'] = false;
$arguments60['encoding'] = NULL;
$arguments60['doubleEncode'] = true;
$renderChildrenClosure61 = function() {return NULL;};
$value62 = ($arguments60['value'] !== NULL ? $arguments60['value'] : $renderChildrenClosure61());

$output59 .= (!is_string($value62) ? $value62 : htmlspecialchars($value62, ($arguments60['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments60['encoding'] !== NULL ? $arguments60['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments60['doubleEncode']));

$output59 .= '" target=\'_blank\'>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments63 = array();
$arguments63['value'] = $currentVariableContainer->getOrNull('title');
$arguments63['keepQuotes'] = false;
$arguments63['encoding'] = NULL;
$arguments63['doubleEncode'] = true;
$renderChildrenClosure64 = function() {return NULL;};
$value65 = ($arguments63['value'] !== NULL ? $arguments63['value'] : $renderChildrenClosure64());

$output59 .= (!is_string($value65) ? $value65 : htmlspecialchars($value65, ($arguments63['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments63['encoding'] !== NULL ? $arguments63['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments63['doubleEncode']));

$output59 .= '</a>
	</h2>

	<ul class="tx-rssdisplay-list">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments66 = array();
$arguments66['each'] = $currentVariableContainer->getOrNull('items');
$arguments66['as'] = 'item';
$arguments66['key'] = '';
$arguments66['reverse'] = false;
$arguments66['iteration'] = NULL;
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output68 = '';

$output68 .= '
			<li class="tx-rssdisplay-item">
				<span class="tx-rssdisplay-item-title">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments69 = array();
// Rendering Boolean node
// Rendering ViewHelper Tx_RssDisplay_ViewHelpers_Item_LinkViewHelper
$arguments70 = array();
$renderChildrenClosure71 = function() {return NULL;};
$viewHelper72 = $self->getViewHelper('$viewHelper72', $renderingContext, 'Tx_RssDisplay_ViewHelpers_Item_LinkViewHelper');
$viewHelper72->setArguments($arguments70);
$viewHelper72->setRenderingContext($renderingContext);
$viewHelper72->setRenderChildrenClosure($renderChildrenClosure71);
// End of ViewHelper Tx_RssDisplay_ViewHelpers_Item_LinkViewHelper
$arguments69['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper72->initializeArgumentsAndRender());
$arguments69['then'] = NULL;
$arguments69['else'] = NULL;
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output74 = '';

$output74 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments75 = array();
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output77 = '';

$output77 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$arguments78 = array();
// Rendering ViewHelper Tx_RssDisplay_ViewHelpers_Item_LinkViewHelper
$arguments79 = array();
$renderChildrenClosure80 = function() {return NULL;};
$viewHelper81 = $self->getViewHelper('$viewHelper81', $renderingContext, 'Tx_RssDisplay_ViewHelpers_Item_LinkViewHelper');
$viewHelper81->setArguments($arguments79);
$viewHelper81->setRenderingContext($renderingContext);
$viewHelper81->setRenderChildrenClosure($renderChildrenClosure80);
// End of ViewHelper Tx_RssDisplay_ViewHelpers_Item_LinkViewHelper
$arguments78['uri'] = $viewHelper81->initializeArgumentsAndRender();
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['defaultScheme'] = 'http';
$arguments78['class'] = NULL;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$arguments78['name'] = NULL;
$arguments78['rel'] = NULL;
$arguments78['rev'] = NULL;
$arguments78['target'] = NULL;
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output83 = '';

$output83 .= '
								';
// Rendering ViewHelper Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper
$arguments84 = array();
$renderChildrenClosure85 = function() {return NULL;};
$viewHelper86 = $self->getViewHelper('$viewHelper86', $renderingContext, 'Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper');
$viewHelper86->setArguments($arguments84);
$viewHelper86->setRenderingContext($renderingContext);
$viewHelper86->setRenderChildrenClosure($renderChildrenClosure85);
// End of ViewHelper Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper

$output83 .= $viewHelper86->initializeArgumentsAndRender();

$output83 .= '
							';
return $output83;
};
$viewHelper87 = $self->getViewHelper('$viewHelper87', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper');
$viewHelper87->setArguments($arguments78);
$viewHelper87->setRenderingContext($renderingContext);
$viewHelper87->setRenderChildrenClosure($renderChildrenClosure82);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper

$output77 .= $viewHelper87->initializeArgumentsAndRender();

$output77 .= '
						';
return $output77;
};

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments88 = array();
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output90 = '';

$output90 .= '
							';
// Rendering ViewHelper Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper
$arguments91 = array();
$renderChildrenClosure92 = function() {return NULL;};
$viewHelper93 = $self->getViewHelper('$viewHelper93', $renderingContext, 'Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper');
$viewHelper93->setArguments($arguments91);
$viewHelper93->setRenderingContext($renderingContext);
$viewHelper93->setRenderChildrenClosure($renderChildrenClosure92);
// End of ViewHelper Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper

$output90 .= $viewHelper93->initializeArgumentsAndRender();

$output90 .= '
						';
return $output90;
};

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output74 .= '
					';
return $output74;
};
$arguments69['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output94 = '';

$output94 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$arguments95 = array();
// Rendering ViewHelper Tx_RssDisplay_ViewHelpers_Item_LinkViewHelper
$arguments96 = array();
$renderChildrenClosure97 = function() {return NULL;};
$viewHelper98 = $self->getViewHelper('$viewHelper98', $renderingContext, 'Tx_RssDisplay_ViewHelpers_Item_LinkViewHelper');
$viewHelper98->setArguments($arguments96);
$viewHelper98->setRenderingContext($renderingContext);
$viewHelper98->setRenderChildrenClosure($renderChildrenClosure97);
// End of ViewHelper Tx_RssDisplay_ViewHelpers_Item_LinkViewHelper
$arguments95['uri'] = $viewHelper98->initializeArgumentsAndRender();
$arguments95['additionalAttributes'] = NULL;
$arguments95['data'] = NULL;
$arguments95['defaultScheme'] = 'http';
$arguments95['class'] = NULL;
$arguments95['dir'] = NULL;
$arguments95['id'] = NULL;
$arguments95['lang'] = NULL;
$arguments95['style'] = NULL;
$arguments95['title'] = NULL;
$arguments95['accesskey'] = NULL;
$arguments95['tabindex'] = NULL;
$arguments95['onclick'] = NULL;
$arguments95['name'] = NULL;
$arguments95['rel'] = NULL;
$arguments95['rev'] = NULL;
$arguments95['target'] = NULL;
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output100 = '';

$output100 .= '
								';
// Rendering ViewHelper Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper
$arguments101 = array();
$renderChildrenClosure102 = function() {return NULL;};
$viewHelper103 = $self->getViewHelper('$viewHelper103', $renderingContext, 'Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper');
$viewHelper103->setArguments($arguments101);
$viewHelper103->setRenderingContext($renderingContext);
$viewHelper103->setRenderChildrenClosure($renderChildrenClosure102);
// End of ViewHelper Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper

$output100 .= $viewHelper103->initializeArgumentsAndRender();

$output100 .= '
							';
return $output100;
};
$viewHelper104 = $self->getViewHelper('$viewHelper104', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper');
$viewHelper104->setArguments($arguments95);
$viewHelper104->setRenderingContext($renderingContext);
$viewHelper104->setRenderChildrenClosure($renderChildrenClosure99);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper

$output94 .= $viewHelper104->initializeArgumentsAndRender();

$output94 .= '
						';
return $output94;
};
$arguments69['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output105 = '';

$output105 .= '
							';
// Rendering ViewHelper Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper
$arguments106 = array();
$renderChildrenClosure107 = function() {return NULL;};
$viewHelper108 = $self->getViewHelper('$viewHelper108', $renderingContext, 'Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper');
$viewHelper108->setArguments($arguments106);
$viewHelper108->setRenderingContext($renderingContext);
$viewHelper108->setRenderChildrenClosure($renderChildrenClosure107);
// End of ViewHelper Tx_RssDisplay_ViewHelpers_Item_TitleViewHelper

$output105 .= $viewHelper108->initializeArgumentsAndRender();

$output105 .= '
						';
return $output105;
};

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, $renderChildrenClosure73, $renderingContext);

$output68 .= '
				</span>

				<p class="tx-rssdisplay-item-description">
					';
// Rendering ViewHelper Tx_RssDisplay_ViewHelpers_Item_ContentViewHelper
$arguments109 = array();
$renderChildrenClosure110 = function() {return NULL;};
$viewHelper111 = $self->getViewHelper('$viewHelper111', $renderingContext, 'Tx_RssDisplay_ViewHelpers_Item_ContentViewHelper');
$viewHelper111->setArguments($arguments109);
$viewHelper111->setRenderingContext($renderingContext);
$viewHelper111->setRenderChildrenClosure($renderChildrenClosure110);
// End of ViewHelper Tx_RssDisplay_ViewHelpers_Item_ContentViewHelper

$output68 .= $viewHelper111->initializeArgumentsAndRender();

$output68 .= '
				</p>
			</li>
		';
return $output68;
};

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output59 .= '
	</ul>
';
return $output59;
};

$output53 .= '';

$output53 .= '

</html>';


return $output53;
}


}
#1468059597    25488     