<?php
class FluidCache_Mask_WizardContent_partial_Tabs_9b57fffa94b3ea76a3496a4ccd14742919dbd667 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

<ul class="nav nav-tabs t3js-tabs" role="tablist" id="tabs-DTM-mask" data-store-last-tab="1">
	<li role="presentation" class="t3js-tabmenu-item';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments2 = array();
$arguments2['value'] = $currentVariableContainer->getOrNull('active');
$arguments2['keepQuotes'] = false;
$arguments2['encoding'] = NULL;
$arguments2['doubleEncode'] = true;
$renderChildrenClosure3 = function() {return NULL;};
$value4 = ($arguments2['value'] !== NULL ? $arguments2['value'] : $renderChildrenClosure3());
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value4) ? $value4 : htmlspecialchars($value4, ($arguments2['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments2['encoding'] !== NULL ? $arguments2['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments2['doubleEncode'])), 'WizardContent');
$arguments1['then'] = ' active';
$arguments1['else'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure5, $renderingContext);

$output0 .= '">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments6 = array();
$arguments6['action'] = 'list';
$arguments6['controller'] = 'WizardContent';
// Rendering Array
$array7 = array();
$array7['aria-controls'] = 'DTM-mask-1';
$array7['role'] = 'tab';
$array7['data-toggle'] = 'tab';
$arguments6['additionalParams'] = $array7;
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['arguments'] = array (
);
$arguments6['extensionName'] = NULL;
$arguments6['pluginName'] = NULL;
$arguments6['pageUid'] = NULL;
$arguments6['pageType'] = 0;
$arguments6['noCache'] = false;
$arguments6['noCacheHash'] = false;
$arguments6['section'] = '';
$arguments6['format'] = '';
$arguments6['linkAccessRestrictedPages'] = false;
$arguments6['absolute'] = false;
$arguments6['addQueryString'] = false;
$arguments6['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments6['addQueryStringMethod'] = NULL;
$arguments6['class'] = NULL;
$arguments6['dir'] = NULL;
$arguments6['id'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$arguments6['name'] = NULL;
$arguments6['rel'] = NULL;
$arguments6['rev'] = NULL;
$arguments6['target'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments9 = array();
$arguments9['key'] = 'tx_mask.all.contentelements';
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['htmlEscape'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$renderChildrenClosure10 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);
};
$viewHelper11 = $self->getViewHelper('$viewHelper11', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper11->setArguments($arguments6);
$viewHelper11->setRenderingContext($renderingContext);
$viewHelper11->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper11->initializeArgumentsAndRender();

$output0 .= '
	</li>
	<li role="presentation" class="t3js-tabmenu-item';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments12 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments13 = array();
$arguments13['value'] = $currentVariableContainer->getOrNull('active');
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = NULL;
$arguments13['doubleEncode'] = true;
$renderChildrenClosure14 = function() {return NULL;};
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());
$arguments12['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value15) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments13['encoding'] !== NULL ? $arguments13['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments13['doubleEncode'])), 'WizardPage');
$arguments12['then'] = ' active';
$arguments12['else'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure16, $renderingContext);

$output0 .= '">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments17 = array();
$arguments17['action'] = 'list';
$arguments17['controller'] = 'WizardPage';
// Rendering Array
$array18 = array();
$array18['aria-controls'] = 'DTM-mask-2';
$array18['role'] = 'tab';
$array18['data-toggle'] = 'tab';
$arguments17['additionalParams'] = $array18;
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['arguments'] = array (
);
$arguments17['extensionName'] = NULL;
$arguments17['pluginName'] = NULL;
$arguments17['pageUid'] = NULL;
$arguments17['pageType'] = 0;
$arguments17['noCache'] = false;
$arguments17['noCacheHash'] = false;
$arguments17['section'] = '';
$arguments17['format'] = '';
$arguments17['linkAccessRestrictedPages'] = false;
$arguments17['absolute'] = false;
$arguments17['addQueryString'] = false;
$arguments17['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments17['addQueryStringMethod'] = NULL;
$arguments17['class'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$arguments17['name'] = NULL;
$arguments17['rel'] = NULL;
$arguments17['rev'] = NULL;
$arguments17['target'] = NULL;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments20 = array();
$arguments20['key'] = 'tx_mask.all.pagetemplates';
$arguments20['id'] = NULL;
$arguments20['default'] = NULL;
$arguments20['htmlEscape'] = NULL;
$arguments20['arguments'] = NULL;
$arguments20['extensionName'] = NULL;
$renderChildrenClosure21 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);
};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper22->setArguments($arguments17);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper22->initializeArgumentsAndRender();

$output0 .= '
	</li>
	<li role="presentation" class="t3js-tabmenu-item">
		';
// Rendering ViewHelper MASK\Mask\ViewHelpers\ConfigureExtensionViewHelper
$arguments23 = array();
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper MASK\Mask\ViewHelpers\IconViewHelper
$arguments25 = array();
$arguments25['identifier'] = 'actions-system-extension-configure';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments26 = array();
$arguments26['key'] = 'tx_mask.all.configure';
$arguments26['id'] = NULL;
$arguments26['default'] = NULL;
$arguments26['htmlEscape'] = NULL;
$arguments26['arguments'] = NULL;
$arguments26['extensionName'] = NULL;
$renderChildrenClosure27 = function() {return NULL;};
$arguments25['altText'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);
$arguments25['size'] = NULL;
$arguments25['overlay'] = NULL;
$arguments25['altSrc'] = '';
$renderChildrenClosure28 = function() {return NULL;};
$viewHelper29 = $self->getViewHelper('$viewHelper29', $renderingContext, 'MASK\Mask\ViewHelpers\IconViewHelper');
$viewHelper29->setArguments($arguments25);
$viewHelper29->setRenderingContext($renderingContext);
$viewHelper29->setRenderChildrenClosure($renderChildrenClosure28);
// End of ViewHelper MASK\Mask\ViewHelpers\IconViewHelper
return $viewHelper29->initializeArgumentsAndRender();
};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'MASK\Mask\ViewHelpers\ConfigureExtensionViewHelper');
$viewHelper30->setArguments($arguments23);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper MASK\Mask\ViewHelpers\ConfigureExtensionViewHelper

$output0 .= $viewHelper30->initializeArgumentsAndRender();

$output0 .= '
	</li>
</ul>';


return $output0;
}


}
#1462874981    10316     