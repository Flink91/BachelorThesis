<?php
class FluidCache_Yag_Item_action_show_b1a6a2b340da012dc0bd62900bf782709dbcb38f extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

	<div class="tx-yag-singleview">
		<div class="tx-yag-image">
		    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('lastItem'));
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
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments7 = array();
$arguments7['item'] = $currentVariableContainer->getOrNull('mainItem');
$arguments7['resolutionName'] = 'medium';
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['alt'] = NULL;
$arguments7['centerVertical'] = NULL;
$arguments7['width'] = NULL;
$arguments7['height'] = NULL;
$arguments7['quality'] = 80;
$renderChildrenClosure8 = function() {return NULL;};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output6 .= $viewHelper9->initializeArgumentsAndRender();

$output6 .= '
			    ';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
			    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments10 = array();
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output12 = '';

$output12 .= '
			        ';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper
$arguments13 = array();
$arguments13['action'] = 'show';
// Rendering Array
$array14 = array();
$array14['itemListOffset'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'nextPage', $renderingContext);
$arguments13['arguments'] = $array14;
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['controller'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['pluginName'] = NULL;
$arguments13['pageUid'] = NULL;
$arguments13['pageType'] = 0;
$arguments13['noCache'] = false;
$arguments13['noCacheHash'] = false;
$arguments13['section'] = '';
$arguments13['format'] = '';
$arguments13['linkAccessRestrictedPages'] = false;
$arguments13['additionalParams'] = array (
);
$arguments13['absolute'] = false;
$arguments13['addQueryString'] = false;
$arguments13['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['name'] = NULL;
$arguments13['rel'] = NULL;
$arguments13['rev'] = NULL;
$arguments13['target'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output16 = '';

$output16 .= '
				        ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments17 = array();
$arguments17['item'] = $currentVariableContainer->getOrNull('mainItem');
$arguments17['resolutionName'] = 'medium';
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['class'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$arguments17['alt'] = NULL;
$arguments17['centerVertical'] = NULL;
$arguments17['width'] = NULL;
$arguments17['height'] = NULL;
$arguments17['quality'] = 80;
$renderChildrenClosure18 = function() {return NULL;};
$viewHelper19 = $self->getViewHelper('$viewHelper19', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper19->setArguments($arguments17);
$viewHelper19->setRenderingContext($renderingContext);
$viewHelper19->setRenderChildrenClosure($renderChildrenClosure18);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output16 .= $viewHelper19->initializeArgumentsAndRender();

$output16 .= '
				    ';
return $output16;
};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper');
$viewHelper20->setArguments($arguments13);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper

$output12 .= $viewHelper20->initializeArgumentsAndRender();

$output12 .= '
			    ';
return $output12;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output3 .= '
		    ';
return $output3;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output21 = '';

$output21 .= '
			        ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments22 = array();
$arguments22['item'] = $currentVariableContainer->getOrNull('mainItem');
$arguments22['resolutionName'] = 'medium';
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
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output25 = '';

$output25 .= '
			        ';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper
$arguments26 = array();
$arguments26['action'] = 'show';
// Rendering Array
$array27 = array();
$array27['itemListOffset'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'nextPage', $renderingContext);
$arguments26['arguments'] = $array27;
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['controller'] = NULL;
$arguments26['extensionName'] = NULL;
$arguments26['pluginName'] = NULL;
$arguments26['pageUid'] = NULL;
$arguments26['pageType'] = 0;
$arguments26['noCache'] = false;
$arguments26['noCacheHash'] = false;
$arguments26['section'] = '';
$arguments26['format'] = '';
$arguments26['linkAccessRestrictedPages'] = false;
$arguments26['additionalParams'] = array (
);
$arguments26['absolute'] = false;
$arguments26['addQueryString'] = false;
$arguments26['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments26['class'] = NULL;
$arguments26['dir'] = NULL;
$arguments26['id'] = NULL;
$arguments26['lang'] = NULL;
$arguments26['style'] = NULL;
$arguments26['title'] = NULL;
$arguments26['accesskey'] = NULL;
$arguments26['tabindex'] = NULL;
$arguments26['onclick'] = NULL;
$arguments26['name'] = NULL;
$arguments26['rel'] = NULL;
$arguments26['rev'] = NULL;
$arguments26['target'] = NULL;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output29 = '';

$output29 .= '
				        ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments30 = array();
$arguments30['item'] = $currentVariableContainer->getOrNull('mainItem');
$arguments30['resolutionName'] = 'medium';
$arguments30['additionalAttributes'] = NULL;
$arguments30['data'] = NULL;
$arguments30['class'] = NULL;
$arguments30['dir'] = NULL;
$arguments30['id'] = NULL;
$arguments30['lang'] = NULL;
$arguments30['style'] = NULL;
$arguments30['title'] = NULL;
$arguments30['accesskey'] = NULL;
$arguments30['tabindex'] = NULL;
$arguments30['onclick'] = NULL;
$arguments30['alt'] = NULL;
$arguments30['centerVertical'] = NULL;
$arguments30['width'] = NULL;
$arguments30['height'] = NULL;
$arguments30['quality'] = 80;
$renderChildrenClosure31 = function() {return NULL;};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper32->setArguments($arguments30);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure31);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output29 .= $viewHelper32->initializeArgumentsAndRender();

$output29 .= '
				    ';
return $output29;
};
$viewHelper33 = $self->getViewHelper('$viewHelper33', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper');
$viewHelper33->setArguments($arguments26);
$viewHelper33->setRenderingContext($renderingContext);
$viewHelper33->setRenderChildrenClosure($renderChildrenClosure28);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper

$output25 .= $viewHelper33->initializeArgumentsAndRender();

$output25 .= '
			    ';
return $output25;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
		</div>
		
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

$output36 .= '
			<div class="tx_yag-single-title">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments37 = array();
$arguments37['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainItem'), 'title', $renderingContext);
$arguments37['keepQuotes'] = false;
$arguments37['encoding'] = NULL;
$arguments37['doubleEncode'] = true;
$renderChildrenClosure38 = function() {return NULL;};
$value39 = ($arguments37['value'] !== NULL ? $arguments37['value'] : $renderChildrenClosure38());

$output36 .= (!is_string($value39) ? $value39 : htmlspecialchars($value39, ($arguments37['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments37['encoding'] !== NULL ? $arguments37['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments37['doubleEncode']));

$output36 .= '
			</div>
		';
return $output36;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output0 .= '		
		
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments40 = array();
// Rendering Boolean node
$arguments40['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.item.showDescription', $renderingContext));
$arguments40['then'] = NULL;
$arguments40['else'] = NULL;
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output42 = '';

$output42 .= '
			<div class="tx_yag-single-description">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments43 = array();
$arguments43['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainItem'), 'description', $renderingContext);
$arguments43['keepQuotes'] = false;
$arguments43['encoding'] = NULL;
$arguments43['doubleEncode'] = true;
$renderChildrenClosure44 = function() {return NULL;};
$value45 = ($arguments43['value'] !== NULL ? $arguments43['value'] : $renderChildrenClosure44());

$output42 .= (!is_string($value45) ? $value45 : htmlspecialchars($value45, ($arguments43['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments43['encoding'] !== NULL ? $arguments43['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments43['doubleEncode']));

$output42 .= '
			</div>
		';
return $output42;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output0 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments46 = array();
$arguments46['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.item.interaction', $renderingContext);
$arguments46['as'] = 'partial';
$arguments46['key'] = '';
$arguments46['reverse'] = false;
$arguments46['iteration'] = NULL;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output48 = '';

$output48 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments49 = array();
// Rendering Boolean node
$arguments49['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('partial'), 'show', $renderingContext));
$arguments49['then'] = NULL;
$arguments49['else'] = NULL;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output51 = '';

$output51 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments52 = array();
$arguments52['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('partial'), 'path', $renderingContext);
// Rendering Array
$array53 = array();
$array53['item'] = $currentVariableContainer->getOrNull('mainItem');
$array53['pager'] = $currentVariableContainer->getOrNull('pager');
$array53['config'] = $currentVariableContainer->getOrNull('config');
$array53['settings'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('partial'), 'settings', $renderingContext);
$arguments52['arguments'] = $array53;
$arguments52['section'] = NULL;
$arguments52['optional'] = false;
$renderChildrenClosure54 = function() {return NULL;};

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments52, $renderChildrenClosure54, $renderingContext);

$output51 .= '
            ';
return $output51;
};

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '
        ';
return $output48;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output0 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments55 = array();
// Rendering Boolean node
$arguments55['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.item.showPager', $renderingContext));
$arguments55['then'] = NULL;
$arguments55['else'] = NULL;
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output57 = '';

$output57 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments58 = array();
$arguments58['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.item.pagerPartial', $renderingContext);
// Rendering Array
$array59 = array();
$array59['mainItem'] = $currentVariableContainer->getOrNull('mainItem');
$array59['pager'] = $currentVariableContainer->getOrNull('pager');
$arguments58['arguments'] = $array59;
$arguments58['section'] = NULL;
$arguments58['optional'] = false;
$renderChildrenClosure60 = function() {return NULL;};

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments58, $renderChildrenClosure60, $renderingContext);

$output57 .= '
        ';
return $output57;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output0 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments61 = array();
// Rendering Boolean node
$arguments61['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.item.showItemMeta', $renderingContext));
$arguments61['then'] = NULL;
$arguments61['else'] = NULL;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output63 = '';

$output63 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments64 = array();
$arguments64['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemConfig.itemMetaPartial', $renderingContext);
// Rendering Array
$array65 = array();
$array65['mainItem'] = $currentVariableContainer->getOrNull('mainItem');
$arguments64['arguments'] = $array65;
$arguments64['section'] = NULL;
$arguments64['optional'] = false;
$renderChildrenClosure66 = function() {return NULL;};

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments64, $renderChildrenClosure66, $renderingContext);

$output63 .= '
        ';
return $output63;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output0 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments67 = array();
// Rendering Boolean node
$arguments67['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.item.showOriginalDownloadLink', $renderingContext));
$arguments67['then'] = NULL;
$arguments67['else'] = NULL;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output69 = '';

$output69 .= '
            <div class="tx-yag-single-download">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments70 = array();
$arguments70['controller'] = 'Item';
$arguments70['action'] = 'download';
// Rendering Array
$array71 = array();
$array71['item'] = $currentVariableContainer->getOrNull('mainItem');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments72 = array();
$arguments72['maxCharacters'] = '5';
$arguments72['append'] = '';
$arguments72['respectWordBoundaries'] = true;
$arguments72['respectHtml'] = true;
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainItem'), 'fileHash', $renderingContext);
};
$array71['fileHash'] = TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);
$arguments70['arguments'] = $array71;
$arguments70['additionalAttributes'] = NULL;
$arguments70['data'] = NULL;
$arguments70['extensionName'] = NULL;
$arguments70['pluginName'] = NULL;
$arguments70['pageUid'] = NULL;
$arguments70['pageType'] = 0;
$arguments70['noCache'] = false;
$arguments70['noCacheHash'] = false;
$arguments70['section'] = '';
$arguments70['format'] = '';
$arguments70['linkAccessRestrictedPages'] = false;
$arguments70['additionalParams'] = array (
);
$arguments70['absolute'] = false;
$arguments70['addQueryString'] = false;
$arguments70['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments70['addQueryStringMethod'] = NULL;
$arguments70['class'] = NULL;
$arguments70['dir'] = NULL;
$arguments70['id'] = NULL;
$arguments70['lang'] = NULL;
$arguments70['style'] = NULL;
$arguments70['title'] = NULL;
$arguments70['accesskey'] = NULL;
$arguments70['tabindex'] = NULL;
$arguments70['onclick'] = NULL;
$arguments70['name'] = NULL;
$arguments70['rel'] = NULL;
$arguments70['rev'] = NULL;
$arguments70['target'] = NULL;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output75 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments76 = array();
$arguments76['key'] = 'tx_yag_controller_item.downloadOrig';
$arguments76['default'] = '';
$arguments76['id'] = NULL;
$arguments76['htmlEscape'] = NULL;
$arguments76['arguments'] = NULL;
$arguments76['extensionName'] = NULL;
$renderChildrenClosure77 = function() {return NULL;};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments78 = array();
$arguments78['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainItem'), 'width', $renderingContext);
$arguments78['keepQuotes'] = false;
$arguments78['encoding'] = NULL;
$arguments78['doubleEncode'] = true;
$renderChildrenClosure79 = function() {return NULL;};
$value80 = ($arguments78['value'] !== NULL ? $arguments78['value'] : $renderChildrenClosure79());

$output75 .= (!is_string($value80) ? $value80 : htmlspecialchars($value80, ($arguments78['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments78['encoding'] !== NULL ? $arguments78['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments78['doubleEncode']));

$output75 .= ' x ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments81 = array();
$arguments81['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainItem'), 'height', $renderingContext);
$arguments81['keepQuotes'] = false;
$arguments81['encoding'] = NULL;
$arguments81['doubleEncode'] = true;
$renderChildrenClosure82 = function() {return NULL;};
$value83 = ($arguments81['value'] !== NULL ? $arguments81['value'] : $renderChildrenClosure82());

$output75 .= (!is_string($value83) ? $value83 : htmlspecialchars($value83, ($arguments81['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments81['encoding'] !== NULL ? $arguments81['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments81['doubleEncode']));

$output75 .= ')';
return $output75;
};
$viewHelper84 = $self->getViewHelper('$viewHelper84', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper84->setArguments($arguments70);
$viewHelper84->setRenderingContext($renderingContext);
$viewHelper84->setRenderChildrenClosure($renderChildrenClosure74);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output69 .= $viewHelper84->initializeArgumentsAndRender();

$output69 .= '
            </div>
        ';
return $output69;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

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

$output85 = '';

$output85 .= '
	';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper
$arguments86 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments87 = array();
$arguments87['action'] = 'show';
$arguments87['controller'] = 'ItemList';
// Rendering Array
$array88 = array();
$array88['backFromItemUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainItem'), 'uid', $renderingContext);
$arguments87['arguments'] = $array88;
$arguments87['extensionName'] = NULL;
$arguments87['pluginName'] = NULL;
$arguments87['pageUid'] = NULL;
$arguments87['pageType'] = 0;
$arguments87['noCache'] = false;
$arguments87['noCacheHash'] = false;
$arguments87['section'] = '';
$arguments87['format'] = '';
$arguments87['linkAccessRestrictedPages'] = false;
$arguments87['additionalParams'] = array (
);
$arguments87['absolute'] = false;
$arguments87['addQueryString'] = false;
$arguments87['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments87['addQueryStringMethod'] = NULL;
$renderChildrenClosure89 = function() {return NULL;};
$viewHelper90 = $self->getViewHelper('$viewHelper90', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper90->setArguments($arguments87);
$viewHelper90->setRenderingContext($renderingContext);
$viewHelper90->setRenderChildrenClosure($renderChildrenClosure89);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments86['uri'] = $viewHelper90->initializeArgumentsAndRender();
$arguments86['icon'] = 'actions-document-close';
$arguments86['title'] = '';
$arguments86['onclick'] = NULL;
$renderChildrenClosure91 = function() {return NULL;};
$viewHelper92 = $self->getViewHelper('$viewHelper92', $renderingContext, 'Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper');
$viewHelper92->setArguments($arguments86);
$viewHelper92->setRenderingContext($renderingContext);
$viewHelper92->setRenderChildrenClosure($renderChildrenClosure91);
// End of ViewHelper Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper

$output85 .= $viewHelper92->initializeArgumentsAndRender();

$output85 .= '
';


return $output85;
}
/**
 * section feEdit
 */
public function section_70142cdf206387b7141dfd354a9ffa8f190cd9d7(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output93 = '';

$output93 .= '
	';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper
$arguments94 = array();
// Rendering Array
$array95 = array();
$array95['1'] = 'item.delete';
$arguments94['hasAny'] = $array95;
$arguments94['then'] = NULL;
$arguments94['else'] = NULL;
$arguments94['object'] = NULL;
$arguments94['action'] = NULL;
$arguments94['hasAll'] = NULL;
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output97 = '';

$output97 .= '
		<div class="form-actions">
			<ul class="nav nav-pills">
				';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper
$arguments98 = array();
$arguments98['object'] = 'item';
$arguments98['action'] = 'delete';
$arguments98['then'] = NULL;
$arguments98['else'] = NULL;
$arguments98['hasAny'] = NULL;
$arguments98['hasAll'] = NULL;
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output100 = '';

$output100 .= '
					<li>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments101 = array();
$arguments101['action'] = 'delete';
$arguments101['controller'] = 'Item';
// Rendering Array
$array102 = array();
$array102['album'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainItem'), 'album', $renderingContext);
$array102['item'] = $currentVariableContainer->getOrNull('mainItem');
$arguments101['arguments'] = $array102;
$arguments101['additionalAttributes'] = NULL;
$arguments101['data'] = NULL;
$arguments101['extensionName'] = NULL;
$arguments101['pluginName'] = NULL;
$arguments101['pageUid'] = NULL;
$arguments101['pageType'] = 0;
$arguments101['noCache'] = false;
$arguments101['noCacheHash'] = false;
$arguments101['section'] = '';
$arguments101['format'] = '';
$arguments101['linkAccessRestrictedPages'] = false;
$arguments101['additionalParams'] = array (
);
$arguments101['absolute'] = false;
$arguments101['addQueryString'] = false;
$arguments101['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments101['addQueryStringMethod'] = NULL;
$arguments101['class'] = NULL;
$arguments101['dir'] = NULL;
$arguments101['id'] = NULL;
$arguments101['lang'] = NULL;
$arguments101['style'] = NULL;
$arguments101['title'] = NULL;
$arguments101['accesskey'] = NULL;
$arguments101['tabindex'] = NULL;
$arguments101['onclick'] = NULL;
$arguments101['name'] = NULL;
$arguments101['rel'] = NULL;
$arguments101['rev'] = NULL;
$arguments101['target'] = NULL;
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments104 = array();
$arguments104['key'] = 'tx_yag_controller_item.deleteItem';
$arguments104['id'] = NULL;
$arguments104['default'] = NULL;
$arguments104['htmlEscape'] = NULL;
$arguments104['arguments'] = NULL;
$arguments104['extensionName'] = NULL;
$renderChildrenClosure105 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);
};
$viewHelper106 = $self->getViewHelper('$viewHelper106', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper106->setArguments($arguments101);
$viewHelper106->setRenderingContext($renderingContext);
$viewHelper106->setRenderChildrenClosure($renderChildrenClosure103);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output100 .= $viewHelper106->initializeArgumentsAndRender();

$output100 .= '
					</li>
				';
return $output100;
};

$output97 .= Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output97 .= '
			</ul>
		</div>
	';
return $output97;
};

$output93 .= Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper::renderStatic($arguments94, $renderChildrenClosure96, $renderingContext);

$output93 .= '
';


return $output93;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output107 = '';

$output107 .= '



';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper
$arguments108 = array();
$arguments108['show'] = false;
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
<!--  
Template for rendering single item

Here is a list of objects / variables that can be accessed in this template:

Tx_Yag_Domain_Model_Item mainItem              Item to be rendered

@package YAG
@author Michael Knoll <mimi@kaktusteam.de>
@author Daniel Lienert <typo3@lienert.cc>
-->
';
};
$viewHelper110 = $self->getViewHelper('$viewHelper110', $renderingContext, 'Tx_PtExtlist_ViewHelpers_CommentViewHelper');
$viewHelper110->setArguments($arguments108);
$viewHelper110->setRenderingContext($renderingContext);
$viewHelper110->setRenderChildrenClosure($renderChildrenClosure109);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper

$output107 .= $viewHelper110->initializeArgumentsAndRender();

$output107 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments111 = array();
$arguments111['name'] = 'Default';
$renderChildrenClosure112 = function() {return NULL;};
$viewHelper113 = $self->getViewHelper('$viewHelper113', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper113->setArguments($arguments111);
$viewHelper113->setRenderingContext($renderingContext);
$viewHelper113->setRenderChildrenClosure($renderChildrenClosure112);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output107 .= $viewHelper113->initializeArgumentsAndRender();

$output107 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments114 = array();
$arguments114['name'] = 'head';
$renderChildrenClosure115 = function() {return NULL;};

$output107 .= '';

$output107 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments116 = array();
$arguments116['name'] = 'main';
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output118 = '';

$output118 .= '

	<div class="tx-yag-singleview">
		<div class="tx-yag-image">
		    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments119 = array();
// Rendering Boolean node
$arguments119['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('lastItem'));
$arguments119['then'] = NULL;
$arguments119['else'] = NULL;
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output121 = '';

$output121 .= '
		        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments122 = array();
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output124 = '';

$output124 .= '
			        ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments125 = array();
$arguments125['item'] = $currentVariableContainer->getOrNull('mainItem');
$arguments125['resolutionName'] = 'medium';
$arguments125['additionalAttributes'] = NULL;
$arguments125['data'] = NULL;
$arguments125['class'] = NULL;
$arguments125['dir'] = NULL;
$arguments125['id'] = NULL;
$arguments125['lang'] = NULL;
$arguments125['style'] = NULL;
$arguments125['title'] = NULL;
$arguments125['accesskey'] = NULL;
$arguments125['tabindex'] = NULL;
$arguments125['onclick'] = NULL;
$arguments125['alt'] = NULL;
$arguments125['centerVertical'] = NULL;
$arguments125['width'] = NULL;
$arguments125['height'] = NULL;
$arguments125['quality'] = 80;
$renderChildrenClosure126 = function() {return NULL;};
$viewHelper127 = $self->getViewHelper('$viewHelper127', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper127->setArguments($arguments125);
$viewHelper127->setRenderingContext($renderingContext);
$viewHelper127->setRenderChildrenClosure($renderChildrenClosure126);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output124 .= $viewHelper127->initializeArgumentsAndRender();

$output124 .= '
			    ';
return $output124;
};

$output121 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output121 .= '
			    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments128 = array();
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output130 = '';

$output130 .= '
			        ';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper
$arguments131 = array();
$arguments131['action'] = 'show';
// Rendering Array
$array132 = array();
$array132['itemListOffset'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'nextPage', $renderingContext);
$arguments131['arguments'] = $array132;
$arguments131['additionalAttributes'] = NULL;
$arguments131['data'] = NULL;
$arguments131['controller'] = NULL;
$arguments131['extensionName'] = NULL;
$arguments131['pluginName'] = NULL;
$arguments131['pageUid'] = NULL;
$arguments131['pageType'] = 0;
$arguments131['noCache'] = false;
$arguments131['noCacheHash'] = false;
$arguments131['section'] = '';
$arguments131['format'] = '';
$arguments131['linkAccessRestrictedPages'] = false;
$arguments131['additionalParams'] = array (
);
$arguments131['absolute'] = false;
$arguments131['addQueryString'] = false;
$arguments131['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments131['class'] = NULL;
$arguments131['dir'] = NULL;
$arguments131['id'] = NULL;
$arguments131['lang'] = NULL;
$arguments131['style'] = NULL;
$arguments131['title'] = NULL;
$arguments131['accesskey'] = NULL;
$arguments131['tabindex'] = NULL;
$arguments131['onclick'] = NULL;
$arguments131['name'] = NULL;
$arguments131['rel'] = NULL;
$arguments131['rev'] = NULL;
$arguments131['target'] = NULL;
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output134 = '';

$output134 .= '
				        ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments135 = array();
$arguments135['item'] = $currentVariableContainer->getOrNull('mainItem');
$arguments135['resolutionName'] = 'medium';
$arguments135['additionalAttributes'] = NULL;
$arguments135['data'] = NULL;
$arguments135['class'] = NULL;
$arguments135['dir'] = NULL;
$arguments135['id'] = NULL;
$arguments135['lang'] = NULL;
$arguments135['style'] = NULL;
$arguments135['title'] = NULL;
$arguments135['accesskey'] = NULL;
$arguments135['tabindex'] = NULL;
$arguments135['onclick'] = NULL;
$arguments135['alt'] = NULL;
$arguments135['centerVertical'] = NULL;
$arguments135['width'] = NULL;
$arguments135['height'] = NULL;
$arguments135['quality'] = 80;
$renderChildrenClosure136 = function() {return NULL;};
$viewHelper137 = $self->getViewHelper('$viewHelper137', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper137->setArguments($arguments135);
$viewHelper137->setRenderingContext($renderingContext);
$viewHelper137->setRenderChildrenClosure($renderChildrenClosure136);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output134 .= $viewHelper137->initializeArgumentsAndRender();

$output134 .= '
				    ';
return $output134;
};
$viewHelper138 = $self->getViewHelper('$viewHelper138', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper');
$viewHelper138->setArguments($arguments131);
$viewHelper138->setRenderingContext($renderingContext);
$viewHelper138->setRenderChildrenClosure($renderChildrenClosure133);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper

$output130 .= $viewHelper138->initializeArgumentsAndRender();

$output130 .= '
			    ';
return $output130;
};

$output121 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output121 .= '
		    ';
return $output121;
};
$arguments119['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output139 = '';

$output139 .= '
			        ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments140 = array();
$arguments140['item'] = $currentVariableContainer->getOrNull('mainItem');
$arguments140['resolutionName'] = 'medium';
$arguments140['additionalAttributes'] = NULL;
$arguments140['data'] = NULL;
$arguments140['class'] = NULL;
$arguments140['dir'] = NULL;
$arguments140['id'] = NULL;
$arguments140['lang'] = NULL;
$arguments140['style'] = NULL;
$arguments140['title'] = NULL;
$arguments140['accesskey'] = NULL;
$arguments140['tabindex'] = NULL;
$arguments140['onclick'] = NULL;
$arguments140['alt'] = NULL;
$arguments140['centerVertical'] = NULL;
$arguments140['width'] = NULL;
$arguments140['height'] = NULL;
$arguments140['quality'] = 80;
$renderChildrenClosure141 = function() {return NULL;};
$viewHelper142 = $self->getViewHelper('$viewHelper142', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper142->setArguments($arguments140);
$viewHelper142->setRenderingContext($renderingContext);
$viewHelper142->setRenderChildrenClosure($renderChildrenClosure141);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output139 .= $viewHelper142->initializeArgumentsAndRender();

$output139 .= '
			    ';
return $output139;
};
$arguments119['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output143 = '';

$output143 .= '
			        ';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper
$arguments144 = array();
$arguments144['action'] = 'show';
// Rendering Array
$array145 = array();
$array145['itemListOffset'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'nextPage', $renderingContext);
$arguments144['arguments'] = $array145;
$arguments144['additionalAttributes'] = NULL;
$arguments144['data'] = NULL;
$arguments144['controller'] = NULL;
$arguments144['extensionName'] = NULL;
$arguments144['pluginName'] = NULL;
$arguments144['pageUid'] = NULL;
$arguments144['pageType'] = 0;
$arguments144['noCache'] = false;
$arguments144['noCacheHash'] = false;
$arguments144['section'] = '';
$arguments144['format'] = '';
$arguments144['linkAccessRestrictedPages'] = false;
$arguments144['additionalParams'] = array (
);
$arguments144['absolute'] = false;
$arguments144['addQueryString'] = false;
$arguments144['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments144['class'] = NULL;
$arguments144['dir'] = NULL;
$arguments144['id'] = NULL;
$arguments144['lang'] = NULL;
$arguments144['style'] = NULL;
$arguments144['title'] = NULL;
$arguments144['accesskey'] = NULL;
$arguments144['tabindex'] = NULL;
$arguments144['onclick'] = NULL;
$arguments144['name'] = NULL;
$arguments144['rel'] = NULL;
$arguments144['rev'] = NULL;
$arguments144['target'] = NULL;
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output147 = '';

$output147 .= '
				        ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments148 = array();
$arguments148['item'] = $currentVariableContainer->getOrNull('mainItem');
$arguments148['resolutionName'] = 'medium';
$arguments148['additionalAttributes'] = NULL;
$arguments148['data'] = NULL;
$arguments148['class'] = NULL;
$arguments148['dir'] = NULL;
$arguments148['id'] = NULL;
$arguments148['lang'] = NULL;
$arguments148['style'] = NULL;
$arguments148['title'] = NULL;
$arguments148['accesskey'] = NULL;
$arguments148['tabindex'] = NULL;
$arguments148['onclick'] = NULL;
$arguments148['alt'] = NULL;
$arguments148['centerVertical'] = NULL;
$arguments148['width'] = NULL;
$arguments148['height'] = NULL;
$arguments148['quality'] = 80;
$renderChildrenClosure149 = function() {return NULL;};
$viewHelper150 = $self->getViewHelper('$viewHelper150', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper150->setArguments($arguments148);
$viewHelper150->setRenderingContext($renderingContext);
$viewHelper150->setRenderChildrenClosure($renderChildrenClosure149);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output147 .= $viewHelper150->initializeArgumentsAndRender();

$output147 .= '
				    ';
return $output147;
};
$viewHelper151 = $self->getViewHelper('$viewHelper151', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper');
$viewHelper151->setArguments($arguments144);
$viewHelper151->setRenderingContext($renderingContext);
$viewHelper151->setRenderChildrenClosure($renderChildrenClosure146);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Link_ActionViewHelper

$output143 .= $viewHelper151->initializeArgumentsAndRender();

$output143 .= '
			    ';
return $output143;
};

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '
		</div>
		
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments152 = array();
// Rendering Boolean node
$arguments152['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.item.showTitle', $renderingContext));
$arguments152['then'] = NULL;
$arguments152['else'] = NULL;
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output154 = '';

$output154 .= '
			<div class="tx_yag-single-title">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments155 = array();
$arguments155['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainItem'), 'title', $renderingContext);
$arguments155['keepQuotes'] = false;
$arguments155['encoding'] = NULL;
$arguments155['doubleEncode'] = true;
$renderChildrenClosure156 = function() {return NULL;};
$value157 = ($arguments155['value'] !== NULL ? $arguments155['value'] : $renderChildrenClosure156());

$output154 .= (!is_string($value157) ? $value157 : htmlspecialchars($value157, ($arguments155['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments155['encoding'] !== NULL ? $arguments155['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments155['doubleEncode']));

$output154 .= '
			</div>
		';
return $output154;
};

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output118 .= '		
		
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments158 = array();
// Rendering Boolean node
$arguments158['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.item.showDescription', $renderingContext));
$arguments158['then'] = NULL;
$arguments158['else'] = NULL;
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output160 = '';

$output160 .= '
			<div class="tx_yag-single-description">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments161 = array();
$arguments161['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainItem'), 'description', $renderingContext);
$arguments161['keepQuotes'] = false;
$arguments161['encoding'] = NULL;
$arguments161['doubleEncode'] = true;
$renderChildrenClosure162 = function() {return NULL;};
$value163 = ($arguments161['value'] !== NULL ? $arguments161['value'] : $renderChildrenClosure162());

$output160 .= (!is_string($value163) ? $value163 : htmlspecialchars($value163, ($arguments161['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments161['encoding'] !== NULL ? $arguments161['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments161['doubleEncode']));

$output160 .= '
			</div>
		';
return $output160;
};

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output118 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments164 = array();
$arguments164['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.item.interaction', $renderingContext);
$arguments164['as'] = 'partial';
$arguments164['key'] = '';
$arguments164['reverse'] = false;
$arguments164['iteration'] = NULL;
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output166 = '';

$output166 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments167 = array();
// Rendering Boolean node
$arguments167['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('partial'), 'show', $renderingContext));
$arguments167['then'] = NULL;
$arguments167['else'] = NULL;
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output169 = '';

$output169 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments170 = array();
$arguments170['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('partial'), 'path', $renderingContext);
// Rendering Array
$array171 = array();
$array171['item'] = $currentVariableContainer->getOrNull('mainItem');
$array171['pager'] = $currentVariableContainer->getOrNull('pager');
$array171['config'] = $currentVariableContainer->getOrNull('config');
$array171['settings'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('partial'), 'settings', $renderingContext);
$arguments170['arguments'] = $array171;
$arguments170['section'] = NULL;
$arguments170['optional'] = false;
$renderChildrenClosure172 = function() {return NULL;};

$output169 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments170, $renderChildrenClosure172, $renderingContext);

$output169 .= '
            ';
return $output169;
};

$output166 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output166 .= '
        ';
return $output166;
};

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output118 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments173 = array();
// Rendering Boolean node
$arguments173['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.item.showPager', $renderingContext));
$arguments173['then'] = NULL;
$arguments173['else'] = NULL;
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output175 = '';

$output175 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments176 = array();
$arguments176['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.item.pagerPartial', $renderingContext);
// Rendering Array
$array177 = array();
$array177['mainItem'] = $currentVariableContainer->getOrNull('mainItem');
$array177['pager'] = $currentVariableContainer->getOrNull('pager');
$arguments176['arguments'] = $array177;
$arguments176['section'] = NULL;
$arguments176['optional'] = false;
$renderChildrenClosure178 = function() {return NULL;};

$output175 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments176, $renderChildrenClosure178, $renderingContext);

$output175 .= '
        ';
return $output175;
};

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output118 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments179 = array();
// Rendering Boolean node
$arguments179['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.item.showItemMeta', $renderingContext));
$arguments179['then'] = NULL;
$arguments179['else'] = NULL;
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output181 = '';

$output181 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments182 = array();
$arguments182['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemConfig.itemMetaPartial', $renderingContext);
// Rendering Array
$array183 = array();
$array183['mainItem'] = $currentVariableContainer->getOrNull('mainItem');
$arguments182['arguments'] = $array183;
$arguments182['section'] = NULL;
$arguments182['optional'] = false;
$renderChildrenClosure184 = function() {return NULL;};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments182, $renderChildrenClosure184, $renderingContext);

$output181 .= '
        ';
return $output181;
};

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output118 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments185 = array();
// Rendering Boolean node
$arguments185['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.item.showOriginalDownloadLink', $renderingContext));
$arguments185['then'] = NULL;
$arguments185['else'] = NULL;
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output187 = '';

$output187 .= '
            <div class="tx-yag-single-download">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments188 = array();
$arguments188['controller'] = 'Item';
$arguments188['action'] = 'download';
// Rendering Array
$array189 = array();
$array189['item'] = $currentVariableContainer->getOrNull('mainItem');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments190 = array();
$arguments190['maxCharacters'] = '5';
$arguments190['append'] = '';
$arguments190['respectWordBoundaries'] = true;
$arguments190['respectHtml'] = true;
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainItem'), 'fileHash', $renderingContext);
};
$array189['fileHash'] = TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);
$arguments188['arguments'] = $array189;
$arguments188['additionalAttributes'] = NULL;
$arguments188['data'] = NULL;
$arguments188['extensionName'] = NULL;
$arguments188['pluginName'] = NULL;
$arguments188['pageUid'] = NULL;
$arguments188['pageType'] = 0;
$arguments188['noCache'] = false;
$arguments188['noCacheHash'] = false;
$arguments188['section'] = '';
$arguments188['format'] = '';
$arguments188['linkAccessRestrictedPages'] = false;
$arguments188['additionalParams'] = array (
);
$arguments188['absolute'] = false;
$arguments188['addQueryString'] = false;
$arguments188['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments188['addQueryStringMethod'] = NULL;
$arguments188['class'] = NULL;
$arguments188['dir'] = NULL;
$arguments188['id'] = NULL;
$arguments188['lang'] = NULL;
$arguments188['style'] = NULL;
$arguments188['title'] = NULL;
$arguments188['accesskey'] = NULL;
$arguments188['tabindex'] = NULL;
$arguments188['onclick'] = NULL;
$arguments188['name'] = NULL;
$arguments188['rel'] = NULL;
$arguments188['rev'] = NULL;
$arguments188['target'] = NULL;
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output193 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments194 = array();
$arguments194['key'] = 'tx_yag_controller_item.downloadOrig';
$arguments194['default'] = '';
$arguments194['id'] = NULL;
$arguments194['htmlEscape'] = NULL;
$arguments194['arguments'] = NULL;
$arguments194['extensionName'] = NULL;
$renderChildrenClosure195 = function() {return NULL;};

$output193 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output193 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments196 = array();
$arguments196['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainItem'), 'width', $renderingContext);
$arguments196['keepQuotes'] = false;
$arguments196['encoding'] = NULL;
$arguments196['doubleEncode'] = true;
$renderChildrenClosure197 = function() {return NULL;};
$value198 = ($arguments196['value'] !== NULL ? $arguments196['value'] : $renderChildrenClosure197());

$output193 .= (!is_string($value198) ? $value198 : htmlspecialchars($value198, ($arguments196['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments196['encoding'] !== NULL ? $arguments196['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments196['doubleEncode']));

$output193 .= ' x ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments199 = array();
$arguments199['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainItem'), 'height', $renderingContext);
$arguments199['keepQuotes'] = false;
$arguments199['encoding'] = NULL;
$arguments199['doubleEncode'] = true;
$renderChildrenClosure200 = function() {return NULL;};
$value201 = ($arguments199['value'] !== NULL ? $arguments199['value'] : $renderChildrenClosure200());

$output193 .= (!is_string($value201) ? $value201 : htmlspecialchars($value201, ($arguments199['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments199['encoding'] !== NULL ? $arguments199['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments199['doubleEncode']));

$output193 .= ')';
return $output193;
};
$viewHelper202 = $self->getViewHelper('$viewHelper202', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper202->setArguments($arguments188);
$viewHelper202->setRenderingContext($renderingContext);
$viewHelper202->setRenderChildrenClosure($renderChildrenClosure192);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output187 .= $viewHelper202->initializeArgumentsAndRender();

$output187 .= '
            </div>
        ';
return $output187;
};

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output118 .= '
	   
	</div>
';
return $output118;
};

$output107 .= '';

$output107 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments203 = array();
$arguments203['name'] = 'beButtonsLeft';
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output205 = '';

$output205 .= '
	';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper
$arguments206 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments207 = array();
$arguments207['action'] = 'show';
$arguments207['controller'] = 'ItemList';
// Rendering Array
$array208 = array();
$array208['backFromItemUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainItem'), 'uid', $renderingContext);
$arguments207['arguments'] = $array208;
$arguments207['extensionName'] = NULL;
$arguments207['pluginName'] = NULL;
$arguments207['pageUid'] = NULL;
$arguments207['pageType'] = 0;
$arguments207['noCache'] = false;
$arguments207['noCacheHash'] = false;
$arguments207['section'] = '';
$arguments207['format'] = '';
$arguments207['linkAccessRestrictedPages'] = false;
$arguments207['additionalParams'] = array (
);
$arguments207['absolute'] = false;
$arguments207['addQueryString'] = false;
$arguments207['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments207['addQueryStringMethod'] = NULL;
$renderChildrenClosure209 = function() {return NULL;};
$viewHelper210 = $self->getViewHelper('$viewHelper210', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper210->setArguments($arguments207);
$viewHelper210->setRenderingContext($renderingContext);
$viewHelper210->setRenderChildrenClosure($renderChildrenClosure209);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments206['uri'] = $viewHelper210->initializeArgumentsAndRender();
$arguments206['icon'] = 'actions-document-close';
$arguments206['title'] = '';
$arguments206['onclick'] = NULL;
$renderChildrenClosure211 = function() {return NULL;};
$viewHelper212 = $self->getViewHelper('$viewHelper212', $renderingContext, 'Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper');
$viewHelper212->setArguments($arguments206);
$viewHelper212->setRenderingContext($renderingContext);
$viewHelper212->setRenderChildrenClosure($renderChildrenClosure211);
// End of ViewHelper Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper

$output205 .= $viewHelper212->initializeArgumentsAndRender();

$output205 .= '
';
return $output205;
};

$output107 .= '';

$output107 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments213 = array();
$arguments213['name'] = 'feEdit';
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output215 = '';

$output215 .= '
	';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper
$arguments216 = array();
// Rendering Array
$array217 = array();
$array217['1'] = 'item.delete';
$arguments216['hasAny'] = $array217;
$arguments216['then'] = NULL;
$arguments216['else'] = NULL;
$arguments216['object'] = NULL;
$arguments216['action'] = NULL;
$arguments216['hasAll'] = NULL;
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output219 = '';

$output219 .= '
		<div class="form-actions">
			<ul class="nav nav-pills">
				';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper
$arguments220 = array();
$arguments220['object'] = 'item';
$arguments220['action'] = 'delete';
$arguments220['then'] = NULL;
$arguments220['else'] = NULL;
$arguments220['hasAny'] = NULL;
$arguments220['hasAll'] = NULL;
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output222 = '';

$output222 .= '
					<li>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments223 = array();
$arguments223['action'] = 'delete';
$arguments223['controller'] = 'Item';
// Rendering Array
$array224 = array();
$array224['album'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainItem'), 'album', $renderingContext);
$array224['item'] = $currentVariableContainer->getOrNull('mainItem');
$arguments223['arguments'] = $array224;
$arguments223['additionalAttributes'] = NULL;
$arguments223['data'] = NULL;
$arguments223['extensionName'] = NULL;
$arguments223['pluginName'] = NULL;
$arguments223['pageUid'] = NULL;
$arguments223['pageType'] = 0;
$arguments223['noCache'] = false;
$arguments223['noCacheHash'] = false;
$arguments223['section'] = '';
$arguments223['format'] = '';
$arguments223['linkAccessRestrictedPages'] = false;
$arguments223['additionalParams'] = array (
);
$arguments223['absolute'] = false;
$arguments223['addQueryString'] = false;
$arguments223['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments223['addQueryStringMethod'] = NULL;
$arguments223['class'] = NULL;
$arguments223['dir'] = NULL;
$arguments223['id'] = NULL;
$arguments223['lang'] = NULL;
$arguments223['style'] = NULL;
$arguments223['title'] = NULL;
$arguments223['accesskey'] = NULL;
$arguments223['tabindex'] = NULL;
$arguments223['onclick'] = NULL;
$arguments223['name'] = NULL;
$arguments223['rel'] = NULL;
$arguments223['rev'] = NULL;
$arguments223['target'] = NULL;
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments226 = array();
$arguments226['key'] = 'tx_yag_controller_item.deleteItem';
$arguments226['id'] = NULL;
$arguments226['default'] = NULL;
$arguments226['htmlEscape'] = NULL;
$arguments226['arguments'] = NULL;
$arguments226['extensionName'] = NULL;
$renderChildrenClosure227 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);
};
$viewHelper228 = $self->getViewHelper('$viewHelper228', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper228->setArguments($arguments223);
$viewHelper228->setRenderingContext($renderingContext);
$viewHelper228->setRenderChildrenClosure($renderChildrenClosure225);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output222 .= $viewHelper228->initializeArgumentsAndRender();

$output222 .= '
					</li>
				';
return $output222;
};

$output219 .= Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output219 .= '
			</ul>
		</div>
	';
return $output219;
};

$output215 .= Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper::renderStatic($arguments216, $renderChildrenClosure218, $renderingContext);

$output215 .= '
';
return $output215;
};

$output107 .= '';


return $output107;
}


}
#1461667531    70392     