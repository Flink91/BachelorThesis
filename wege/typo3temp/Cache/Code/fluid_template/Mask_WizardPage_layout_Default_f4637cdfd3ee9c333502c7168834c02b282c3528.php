<?php
class FluidCache_Mask_WizardPage_layout_Default_f4637cdfd3ee9c333502c7168834c02b282c3528 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper
$arguments1 = array();
$arguments1['pageTitle'] = '';
$arguments1['enableClickMenu'] = true;
$arguments1['loadExtJs'] = false;
$arguments1['loadExtJsTheme'] = true;
$arguments1['enableExtJsDebug'] = false;
$arguments1['loadJQuery'] = false;
$arguments1['includeCssFiles'] = NULL;
$arguments1['includeJsFiles'] = NULL;
$arguments1['addJsInlineLabels'] = NULL;
$arguments1['includeRequireJsModules'] = NULL;
$arguments1['jQueryNamespace'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
	<link media="all" href="../typo3conf/ext/mask/Resources/Public/Styles/styles.css" type="text/css" rel="stylesheet" />
	<div class="typo3-fullDoc">
		<div id="typo3-docheader">
			<div class="typo3-docheader-functions">
			</div>
			<div class="typo3-docheader-buttons">
				<div class="docheader-row2-left">
				</div>
				<div class="docheader-row2-right">
					<!--';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper
$arguments4 = array();
$arguments4['getVars'] = array (
);
$arguments4['setVars'] = array (
);
$renderChildrenClosure5 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '-->
				</div>
			</div>
		</div>
		<div id="typo3-docbody">
			<div id="typo3-inner-docbody">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments6 = array();
$arguments6['renderMode'] = 'div';
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['as'] = NULL;
$arguments6['class'] = NULL;
$arguments6['dir'] = NULL;
$arguments6['id'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$arguments6['queueIdentifier'] = NULL;
$renderChildrenClosure7 = function() {return NULL;};
$viewHelper8 = $self->getViewHelper('$viewHelper8', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper8->setArguments($arguments6);
$viewHelper8->setRenderingContext($renderingContext);
$viewHelper8->setRenderChildrenClosure($renderChildrenClosure7);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output3 .= $viewHelper8->initializeArgumentsAndRender();

$output3 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments9 = array();
$arguments9['section'] = 'content';
$arguments9['partial'] = NULL;
$arguments9['arguments'] = array (
);
$arguments9['optional'] = false;
$renderChildrenClosure10 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output3 .= '
			</div>
		</div>
	</div>
	<script src="../typo3conf/ext/mask/Resources/Public/Scripts/libs.js?_cache=';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments11 = array();
$arguments11['date'] = '';
$arguments11['format'] = 'dmYHis';
$arguments11['base'] = NULL;
$renderChildrenClosure12 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output3 .= '"></script>
	<script src="../typo3conf/ext/mask/Resources/Public/Scripts/scripts.js?_cache=';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments13 = array();
$arguments13['date'] = '';
$arguments13['format'] = 'dmYHis';
$arguments13['base'] = NULL;
$renderChildrenClosure14 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output3 .= '"></script>
';
return $output3;
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper');
$viewHelper15->setArguments($arguments1);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper

$output0 .= $viewHelper15->initializeArgumentsAndRender();

$output0 .= '
';


return $output0;
}


}
#1462875002    5292      