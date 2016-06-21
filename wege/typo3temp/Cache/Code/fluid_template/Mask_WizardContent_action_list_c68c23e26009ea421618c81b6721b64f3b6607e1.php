<?php
class FluidCache_Mask_WizardContent_action_list_c68c23e26009ea421618c81b6721b64f3b6607e1 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments1 = array();
$arguments1['partial'] = 'Tabs';
// Rendering Array
$array2 = array();
$array2['active'] = 'WizardContent';
$arguments1['arguments'] = $array2;
$arguments1['section'] = NULL;
$arguments1['optional'] = false;
$renderChildrenClosure3 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure3, $renderingContext);

$output0 .= '

	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="DTM-mask-1">
			<div class="form-section">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments4 = array();
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['renderMode'] = NULL;
$arguments4['as'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['queueIdentifier'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output0 .= $viewHelper6->initializeArgumentsAndRender();

$output0 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments7 = array();
$arguments7['each'] = $currentVariableContainer->getOrNull('messages');
$arguments7['as'] = 'message';
$arguments7['key'] = '';
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
					<div class="typo3-message message-error"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments10 = array();
$arguments10['key'] = 'tx_mask.content.error';
$arguments10['id'] = NULL;
$arguments10['default'] = NULL;
$arguments10['htmlEscape'] = NULL;
$arguments10['arguments'] = NULL;
$arguments10['extensionName'] = NULL;
$renderChildrenClosure11 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '</strong> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments12 = array();
$arguments12['value'] = $currentVariableContainer->getOrNull('message');
$arguments12['keepQuotes'] = false;
$arguments12['encoding'] = NULL;
$arguments12['doubleEncode'] = true;
$renderChildrenClosure13 = function() {return NULL;};
$value14 = ($arguments12['value'] !== NULL ? $arguments12['value'] : $renderChildrenClosure13());

$output9 .= (!is_string($value14) ? $value14 : htmlspecialchars($value14, ($arguments12['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments12['encoding'] !== NULL ? $arguments12['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments12['doubleEncode']));

$output9 .= '</div>
				';
return $output9;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments15 = array();
// Rendering Boolean node
$arguments15['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('missingFolders'));
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output17 = '';

$output17 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments18 = array();
$arguments18['action'] = 'createMissingFolders';
$arguments18['controller'] = 'WizardContent';
$arguments18['additionalAttributes'] = NULL;
$arguments18['data'] = NULL;
$arguments18['arguments'] = array (
);
$arguments18['extensionName'] = NULL;
$arguments18['pluginName'] = NULL;
$arguments18['pageUid'] = NULL;
$arguments18['object'] = NULL;
$arguments18['pageType'] = 0;
$arguments18['noCache'] = false;
$arguments18['noCacheHash'] = false;
$arguments18['section'] = '';
$arguments18['format'] = '';
$arguments18['additionalParams'] = array (
);
$arguments18['absolute'] = false;
$arguments18['addQueryString'] = false;
$arguments18['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments18['fieldNamePrefix'] = NULL;
$arguments18['actionUri'] = NULL;
$arguments18['objectName'] = NULL;
$arguments18['hiddenFieldClassName'] = NULL;
$arguments18['enctype'] = NULL;
$arguments18['method'] = NULL;
$arguments18['name'] = NULL;
$arguments18['onreset'] = NULL;
$arguments18['onsubmit'] = NULL;
$arguments18['class'] = NULL;
$arguments18['dir'] = NULL;
$arguments18['id'] = NULL;
$arguments18['lang'] = NULL;
$arguments18['style'] = NULL;
$arguments18['title'] = NULL;
$arguments18['accesskey'] = NULL;
$arguments18['tabindex'] = NULL;
$arguments18['onclick'] = NULL;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output20 = '';

$output20 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments21 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments22 = array();
$arguments22['key'] = 'tx_mask.all.createmissingfolders';
$arguments22['id'] = NULL;
$arguments22['default'] = NULL;
$arguments22['htmlEscape'] = NULL;
$arguments22['arguments'] = NULL;
$arguments22['extensionName'] = NULL;
$renderChildrenClosure23 = function() {return NULL;};
$arguments21['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);
$arguments21['class'] = 'btn btn-primary';
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['name'] = NULL;
$arguments21['property'] = NULL;
$arguments21['disabled'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$renderChildrenClosure24 = function() {return NULL;};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper25->setArguments($arguments21);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output20 .= $viewHelper25->initializeArgumentsAndRender();

$output20 .= '
					';
return $output20;
};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper26->setArguments($arguments18);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output17 .= $viewHelper26->initializeArgumentsAndRender();

$output17 .= '
				';
return $output17;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '

				<div class="panel panel-space panel-default">
					<div class="panel-heading">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments27 = array();
$arguments27['key'] = 'tx_mask.all.contentelements';
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['htmlEscape'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$renderChildrenClosure28 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output0 .= '</div>


					<div class="table-fit collapse in" id="recordlist-be_users" data-state="expanded">
						<table cellspacing="0" cellpadding="0" border="0" class="table table-striped table-hover">
							<thead>
								<tr>
									<td nowrap="nowrap" class="col-icon">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments29 = array();
$arguments29['action'] = 'new';
$arguments29['class'] = 'btn btn-default';
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['arguments'] = array (
);
$arguments29['controller'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['pluginName'] = NULL;
$arguments29['pageUid'] = NULL;
$arguments29['pageType'] = 0;
$arguments29['noCache'] = false;
$arguments29['noCacheHash'] = false;
$arguments29['section'] = '';
$arguments29['format'] = '';
$arguments29['linkAccessRestrictedPages'] = false;
$arguments29['additionalParams'] = array (
);
$arguments29['absolute'] = false;
$arguments29['addQueryString'] = false;
$arguments29['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments29['addQueryStringMethod'] = NULL;
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
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments31 = array();
$arguments31['identifier'] = 'actions-document-new';
$arguments31['size'] = 'small';
$arguments31['overlay'] = NULL;
$arguments31['state'] = 'default';
$arguments31['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure32 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);
};
$viewHelper33 = $self->getViewHelper('$viewHelper33', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper33->setArguments($arguments29);
$viewHelper33->setRenderingContext($renderingContext);
$viewHelper33->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper33->initializeArgumentsAndRender();

$output0 .= '</td>
							<td nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments34 = array();
$arguments34['key'] = 'tx_mask.content.image';
$arguments34['id'] = NULL;
$arguments34['default'] = NULL;
$arguments34['htmlEscape'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['extensionName'] = NULL;
$renderChildrenClosure35 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output0 .= '</td>
							<td nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments36 = array();
$arguments36['key'] = 'tx_mask.content.titlekey';
$arguments36['id'] = NULL;
$arguments36['default'] = NULL;
$arguments36['htmlEscape'] = NULL;
$arguments36['arguments'] = NULL;
$arguments36['extensionName'] = NULL;
$renderChildrenClosure37 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output0 .= '</td>
							<td nowrap="nowrap" class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments38 = array();
$arguments38['key'] = 'tx_mask.content.description';
$arguments38['id'] = NULL;
$arguments38['default'] = NULL;
$arguments38['htmlEscape'] = NULL;
$arguments38['arguments'] = NULL;
$arguments38['extensionName'] = NULL;
$renderChildrenClosure39 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output0 .= '</td>
							<td nowrap="nowrap" class="col-control">&nbsp;</td>
							</tr>
							</thead>
							<tbody>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments40 = array();
$arguments40['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storages'), 'tt_content.elements', $renderingContext);
$arguments40['as'] = 'storage';
$arguments40['key'] = 'key';
$arguments40['reverse'] = false;
$arguments40['iteration'] = NULL;
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output42 = '';

$output42 .= '
								<tr>
									<td></td>
									<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments43 = array();
$arguments43['action'] = 'edit';
// Rendering Array
$array44 = array();
$array44['type'] = 'tt_content';
$array44['key'] = $currentVariableContainer->getOrNull('key');
$arguments43['arguments'] = $array44;
$arguments43['additionalAttributes'] = NULL;
$arguments43['data'] = NULL;
$arguments43['controller'] = NULL;
$arguments43['extensionName'] = NULL;
$arguments43['pluginName'] = NULL;
$arguments43['pageUid'] = NULL;
$arguments43['pageType'] = 0;
$arguments43['noCache'] = false;
$arguments43['noCacheHash'] = false;
$arguments43['section'] = '';
$arguments43['format'] = '';
$arguments43['linkAccessRestrictedPages'] = false;
$arguments43['additionalParams'] = array (
);
$arguments43['absolute'] = false;
$arguments43['addQueryString'] = false;
$arguments43['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments43['addQueryStringMethod'] = NULL;
$arguments43['class'] = NULL;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['title'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$arguments43['name'] = NULL;
$arguments43['rel'] = NULL;
$arguments43['rev'] = NULL;
$arguments43['target'] = NULL;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output46 = '';

$output46 .= '
									<!-- mask:icon should be replaced by core:icon when compatibility for TYPO3 6.2 isn\'t needed anymore -->
									';
// Rendering ViewHelper MASK\Mask\ViewHelpers\IconViewHelper
$arguments47 = array();
$output48 = '';

$output48 .= 'mask-ce-';

$output48 .= $currentVariableContainer->getOrNull('key');
$arguments47['identifier'] = $output48;
$arguments47['size'] = 'large';
$arguments47['overlay'] = NULL;
$arguments47['altSrc'] = '';
$arguments47['altText'] = '';
$renderChildrenClosure49 = function() {return NULL;};
$viewHelper50 = $self->getViewHelper('$viewHelper50', $renderingContext, 'MASK\Mask\ViewHelpers\IconViewHelper');
$viewHelper50->setArguments($arguments47);
$viewHelper50->setRenderingContext($renderingContext);
$viewHelper50->setRenderChildrenClosure($renderChildrenClosure49);
// End of ViewHelper MASK\Mask\ViewHelpers\IconViewHelper

$output46 .= $viewHelper50->initializeArgumentsAndRender();

$output46 .= '
								';
return $output46;
};
$viewHelper51 = $self->getViewHelper('$viewHelper51', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper51->setArguments($arguments43);
$viewHelper51->setRenderingContext($renderingContext);
$viewHelper51->setRenderChildrenClosure($renderChildrenClosure45);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output42 .= $viewHelper51->initializeArgumentsAndRender();

$output42 .= '</td>
								<td nowrap="nowrap"><p><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments52 = array();
$arguments52['action'] = 'edit';
// Rendering Array
$array53 = array();
$array53['type'] = 'tt_content';
$array53['key'] = $currentVariableContainer->getOrNull('key');
$arguments52['arguments'] = $array53;
$arguments52['additionalAttributes'] = NULL;
$arguments52['data'] = NULL;
$arguments52['controller'] = NULL;
$arguments52['extensionName'] = NULL;
$arguments52['pluginName'] = NULL;
$arguments52['pageUid'] = NULL;
$arguments52['pageType'] = 0;
$arguments52['noCache'] = false;
$arguments52['noCacheHash'] = false;
$arguments52['section'] = '';
$arguments52['format'] = '';
$arguments52['linkAccessRestrictedPages'] = false;
$arguments52['additionalParams'] = array (
);
$arguments52['absolute'] = false;
$arguments52['addQueryString'] = false;
$arguments52['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments52['addQueryStringMethod'] = NULL;
$arguments52['class'] = NULL;
$arguments52['dir'] = NULL;
$arguments52['id'] = NULL;
$arguments52['lang'] = NULL;
$arguments52['style'] = NULL;
$arguments52['title'] = NULL;
$arguments52['accesskey'] = NULL;
$arguments52['tabindex'] = NULL;
$arguments52['onclick'] = NULL;
$arguments52['name'] = NULL;
$arguments52['rel'] = NULL;
$arguments52['rev'] = NULL;
$arguments52['target'] = NULL;
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments55 = array();
$arguments55['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'label', $renderingContext);
$arguments55['keepQuotes'] = false;
$arguments55['encoding'] = NULL;
$arguments55['doubleEncode'] = true;
$renderChildrenClosure56 = function() {return NULL;};
$value57 = ($arguments55['value'] !== NULL ? $arguments55['value'] : $renderChildrenClosure56());
return (!is_string($value57) ? $value57 : htmlspecialchars($value57, ($arguments55['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments55['encoding'] !== NULL ? $arguments55['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments55['doubleEncode']));
};
$viewHelper58 = $self->getViewHelper('$viewHelper58', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper58->setArguments($arguments52);
$viewHelper58->setRenderingContext($renderingContext);
$viewHelper58->setRenderChildrenClosure($renderChildrenClosure54);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output42 .= $viewHelper58->initializeArgumentsAndRender();

$output42 .= '</strong><br />';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments59 = array();
$arguments59['value'] = $currentVariableContainer->getOrNull('key');
$arguments59['keepQuotes'] = false;
$arguments59['encoding'] = NULL;
$arguments59['doubleEncode'] = true;
$renderChildrenClosure60 = function() {return NULL;};
$value61 = ($arguments59['value'] !== NULL ? $arguments59['value'] : $renderChildrenClosure60());

$output42 .= (!is_string($value61) ? $value61 : htmlspecialchars($value61, ($arguments59['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments59['encoding'] !== NULL ? $arguments59['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments59['doubleEncode']));

$output42 .= '</p></td>
								<td>
									<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments62 = array();
$arguments62['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'description', $renderingContext);
$arguments62['keepQuotes'] = false;
$arguments62['encoding'] = NULL;
$arguments62['doubleEncode'] = true;
$renderChildrenClosure63 = function() {return NULL;};
$value64 = ($arguments62['value'] !== NULL ? $arguments62['value'] : $renderChildrenClosure63());

$output42 .= (!is_string($value64) ? $value64 : htmlspecialchars($value64, ($arguments62['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments62['encoding'] !== NULL ? $arguments62['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments62['doubleEncode']));

$output42 .= '</p>
								';
// Rendering ViewHelper MASK\Mask\ViewHelpers\LinkViewHelper
$arguments65 = array();
$arguments65['data'] = $currentVariableContainer->getOrNull('key');
$renderChildrenClosure66 = function() {return NULL;};
$viewHelper67 = $self->getViewHelper('$viewHelper67', $renderingContext, 'MASK\Mask\ViewHelpers\LinkViewHelper');
$viewHelper67->setArguments($arguments65);
$viewHelper67->setRenderingContext($renderingContext);
$viewHelper67->setRenderChildrenClosure($renderChildrenClosure66);
// End of ViewHelper MASK\Mask\ViewHelpers\LinkViewHelper

$output42 .= $viewHelper67->initializeArgumentsAndRender();

$output42 .= '
								</td>
								<td nowrap="nowrap">
									<div class="btn-group" role="group">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments68 = array();
$arguments68['action'] = 'edit';
// Rendering Array
$array69 = array();
$array69['type'] = 'tt_content';
$array69['key'] = $currentVariableContainer->getOrNull('key');
$arguments68['arguments'] = $array69;
$arguments68['class'] = 'btn btn-default';
$arguments68['additionalAttributes'] = NULL;
$arguments68['data'] = NULL;
$arguments68['controller'] = NULL;
$arguments68['extensionName'] = NULL;
$arguments68['pluginName'] = NULL;
$arguments68['pageUid'] = NULL;
$arguments68['pageType'] = 0;
$arguments68['noCache'] = false;
$arguments68['noCacheHash'] = false;
$arguments68['section'] = '';
$arguments68['format'] = '';
$arguments68['linkAccessRestrictedPages'] = false;
$arguments68['additionalParams'] = array (
);
$arguments68['absolute'] = false;
$arguments68['addQueryString'] = false;
$arguments68['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments68['addQueryStringMethod'] = NULL;
$arguments68['dir'] = NULL;
$arguments68['id'] = NULL;
$arguments68['lang'] = NULL;
$arguments68['style'] = NULL;
$arguments68['title'] = NULL;
$arguments68['accesskey'] = NULL;
$arguments68['tabindex'] = NULL;
$arguments68['onclick'] = NULL;
$arguments68['name'] = NULL;
$arguments68['rel'] = NULL;
$arguments68['rev'] = NULL;
$arguments68['target'] = NULL;
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments71 = array();
$arguments71['identifier'] = 'actions-document-open';
$arguments71['size'] = 'small';
$arguments71['overlay'] = NULL;
$arguments71['state'] = 'default';
$arguments71['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure72 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);
};
$viewHelper73 = $self->getViewHelper('$viewHelper73', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper73->setArguments($arguments68);
$viewHelper73->setRenderingContext($renderingContext);
$viewHelper73->setRenderChildrenClosure($renderChildrenClosure70);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output42 .= $viewHelper73->initializeArgumentsAndRender();

$output42 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments74 = array();
$arguments74['action'] = 'showHtml';
// Rendering Array
$array75 = array();
$array75['key'] = $currentVariableContainer->getOrNull('key');
$arguments74['arguments'] = $array75;
$arguments74['onclick'] = 'window.open(this.href, \'HTML\', \'width=800,height=600,resizable=yes,scrollbars=yes\');
												return false;';
$arguments74['class'] = 'btn btn-default';
$arguments74['additionalAttributes'] = NULL;
$arguments74['data'] = NULL;
$arguments74['controller'] = NULL;
$arguments74['extensionName'] = NULL;
$arguments74['pluginName'] = NULL;
$arguments74['pageUid'] = NULL;
$arguments74['pageType'] = 0;
$arguments74['noCache'] = false;
$arguments74['noCacheHash'] = false;
$arguments74['section'] = '';
$arguments74['format'] = '';
$arguments74['linkAccessRestrictedPages'] = false;
$arguments74['additionalParams'] = array (
);
$arguments74['absolute'] = false;
$arguments74['addQueryString'] = false;
$arguments74['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments74['addQueryStringMethod'] = NULL;
$arguments74['dir'] = NULL;
$arguments74['id'] = NULL;
$arguments74['lang'] = NULL;
$arguments74['style'] = NULL;
$arguments74['title'] = NULL;
$arguments74['accesskey'] = NULL;
$arguments74['tabindex'] = NULL;
$arguments74['name'] = NULL;
$arguments74['rel'] = NULL;
$arguments74['rev'] = NULL;
$arguments74['target'] = NULL;
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments77 = array();
$arguments77['identifier'] = 'sysnote-type-2';
$arguments77['size'] = 'small';
$arguments77['overlay'] = NULL;
$arguments77['state'] = 'default';
$arguments77['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure78 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);
};
$viewHelper79 = $self->getViewHelper('$viewHelper79', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper79->setArguments($arguments74);
$viewHelper79->setRenderingContext($renderingContext);
$viewHelper79->setRenderChildrenClosure($renderChildrenClosure76);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output42 .= $viewHelper79->initializeArgumentsAndRender();

$output42 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments80 = array();
$arguments80['action'] = 'delete';
// Rendering Array
$array81 = array();
$array81['type'] = 'tt_content';
$array81['key'] = $currentVariableContainer->getOrNull('key');
$arguments80['arguments'] = $array81;
$output82 = '';

$output82 .= 'return confirm(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments83 = array();
$arguments83['key'] = 'tx_mask.all.confirmdelete';
$arguments83['id'] = NULL;
$arguments83['default'] = NULL;
$arguments83['htmlEscape'] = NULL;
$arguments83['arguments'] = NULL;
$arguments83['extensionName'] = NULL;
$renderChildrenClosure84 = function() {return NULL;};

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '\')';
$arguments80['onclick'] = $output82;
$arguments80['class'] = 'btn btn-default';
$arguments80['additionalAttributes'] = NULL;
$arguments80['data'] = NULL;
$arguments80['controller'] = NULL;
$arguments80['extensionName'] = NULL;
$arguments80['pluginName'] = NULL;
$arguments80['pageUid'] = NULL;
$arguments80['pageType'] = 0;
$arguments80['noCache'] = false;
$arguments80['noCacheHash'] = false;
$arguments80['section'] = '';
$arguments80['format'] = '';
$arguments80['linkAccessRestrictedPages'] = false;
$arguments80['additionalParams'] = array (
);
$arguments80['absolute'] = false;
$arguments80['addQueryString'] = false;
$arguments80['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments80['addQueryStringMethod'] = NULL;
$arguments80['dir'] = NULL;
$arguments80['id'] = NULL;
$arguments80['lang'] = NULL;
$arguments80['style'] = NULL;
$arguments80['title'] = NULL;
$arguments80['accesskey'] = NULL;
$arguments80['tabindex'] = NULL;
$arguments80['name'] = NULL;
$arguments80['rel'] = NULL;
$arguments80['rev'] = NULL;
$arguments80['target'] = NULL;
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments86 = array();
$arguments86['identifier'] = 'actions-edit-delete';
$arguments86['size'] = 'small';
$arguments86['overlay'] = NULL;
$arguments86['state'] = 'default';
$arguments86['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure87 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);
};
$viewHelper88 = $self->getViewHelper('$viewHelper88', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper88->setArguments($arguments80);
$viewHelper88->setRenderingContext($renderingContext);
$viewHelper88->setRenderChildrenClosure($renderChildrenClosure85);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output42 .= $viewHelper88->initializeArgumentsAndRender();

$output42 .= '
									</div>
								</td>
								</tr>
							';
return $output42;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output0 .= '
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output89 = '';

$output89 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments90 = array();
$arguments90['name'] = 'Default';
$renderChildrenClosure91 = function() {return NULL;};
$viewHelper92 = $self->getViewHelper('$viewHelper92', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper92->setArguments($arguments90);
$viewHelper92->setRenderingContext($renderingContext);
$viewHelper92->setRenderChildrenClosure($renderChildrenClosure91);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output89 .= $viewHelper92->initializeArgumentsAndRender();

$output89 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments93 = array();
$arguments93['name'] = 'content';
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output95 = '';

$output95 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments96 = array();
$arguments96['partial'] = 'Tabs';
// Rendering Array
$array97 = array();
$array97['active'] = 'WizardContent';
$arguments96['arguments'] = $array97;
$arguments96['section'] = NULL;
$arguments96['optional'] = false;
$renderChildrenClosure98 = function() {return NULL;};

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments96, $renderChildrenClosure98, $renderingContext);

$output95 .= '

	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="DTM-mask-1">
			<div class="form-section">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments99 = array();
$arguments99['additionalAttributes'] = NULL;
$arguments99['data'] = NULL;
$arguments99['renderMode'] = NULL;
$arguments99['as'] = NULL;
$arguments99['class'] = NULL;
$arguments99['dir'] = NULL;
$arguments99['id'] = NULL;
$arguments99['lang'] = NULL;
$arguments99['style'] = NULL;
$arguments99['title'] = NULL;
$arguments99['accesskey'] = NULL;
$arguments99['tabindex'] = NULL;
$arguments99['onclick'] = NULL;
$arguments99['queueIdentifier'] = NULL;
$renderChildrenClosure100 = function() {return NULL;};
$viewHelper101 = $self->getViewHelper('$viewHelper101', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper101->setArguments($arguments99);
$viewHelper101->setRenderingContext($renderingContext);
$viewHelper101->setRenderChildrenClosure($renderChildrenClosure100);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output95 .= $viewHelper101->initializeArgumentsAndRender();

$output95 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments102 = array();
$arguments102['each'] = $currentVariableContainer->getOrNull('messages');
$arguments102['as'] = 'message';
$arguments102['key'] = '';
$arguments102['reverse'] = false;
$arguments102['iteration'] = NULL;
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output104 = '';

$output104 .= '
					<div class="typo3-message message-error"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments105 = array();
$arguments105['key'] = 'tx_mask.content.error';
$arguments105['id'] = NULL;
$arguments105['default'] = NULL;
$arguments105['htmlEscape'] = NULL;
$arguments105['arguments'] = NULL;
$arguments105['extensionName'] = NULL;
$renderChildrenClosure106 = function() {return NULL;};

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '</strong> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments107 = array();
$arguments107['value'] = $currentVariableContainer->getOrNull('message');
$arguments107['keepQuotes'] = false;
$arguments107['encoding'] = NULL;
$arguments107['doubleEncode'] = true;
$renderChildrenClosure108 = function() {return NULL;};
$value109 = ($arguments107['value'] !== NULL ? $arguments107['value'] : $renderChildrenClosure108());

$output104 .= (!is_string($value109) ? $value109 : htmlspecialchars($value109, ($arguments107['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments107['encoding'] !== NULL ? $arguments107['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments107['doubleEncode']));

$output104 .= '</div>
				';
return $output104;
};

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output95 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments110 = array();
// Rendering Boolean node
$arguments110['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('missingFolders'));
$arguments110['then'] = NULL;
$arguments110['else'] = NULL;
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output112 = '';

$output112 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments113 = array();
$arguments113['action'] = 'createMissingFolders';
$arguments113['controller'] = 'WizardContent';
$arguments113['additionalAttributes'] = NULL;
$arguments113['data'] = NULL;
$arguments113['arguments'] = array (
);
$arguments113['extensionName'] = NULL;
$arguments113['pluginName'] = NULL;
$arguments113['pageUid'] = NULL;
$arguments113['object'] = NULL;
$arguments113['pageType'] = 0;
$arguments113['noCache'] = false;
$arguments113['noCacheHash'] = false;
$arguments113['section'] = '';
$arguments113['format'] = '';
$arguments113['additionalParams'] = array (
);
$arguments113['absolute'] = false;
$arguments113['addQueryString'] = false;
$arguments113['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments113['fieldNamePrefix'] = NULL;
$arguments113['actionUri'] = NULL;
$arguments113['objectName'] = NULL;
$arguments113['hiddenFieldClassName'] = NULL;
$arguments113['enctype'] = NULL;
$arguments113['method'] = NULL;
$arguments113['name'] = NULL;
$arguments113['onreset'] = NULL;
$arguments113['onsubmit'] = NULL;
$arguments113['class'] = NULL;
$arguments113['dir'] = NULL;
$arguments113['id'] = NULL;
$arguments113['lang'] = NULL;
$arguments113['style'] = NULL;
$arguments113['title'] = NULL;
$arguments113['accesskey'] = NULL;
$arguments113['tabindex'] = NULL;
$arguments113['onclick'] = NULL;
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output115 = '';

$output115 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments116 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments117 = array();
$arguments117['key'] = 'tx_mask.all.createmissingfolders';
$arguments117['id'] = NULL;
$arguments117['default'] = NULL;
$arguments117['htmlEscape'] = NULL;
$arguments117['arguments'] = NULL;
$arguments117['extensionName'] = NULL;
$renderChildrenClosure118 = function() {return NULL;};
$arguments116['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);
$arguments116['class'] = 'btn btn-primary';
$arguments116['additionalAttributes'] = NULL;
$arguments116['data'] = NULL;
$arguments116['name'] = NULL;
$arguments116['property'] = NULL;
$arguments116['disabled'] = NULL;
$arguments116['dir'] = NULL;
$arguments116['id'] = NULL;
$arguments116['lang'] = NULL;
$arguments116['style'] = NULL;
$arguments116['title'] = NULL;
$arguments116['accesskey'] = NULL;
$arguments116['tabindex'] = NULL;
$arguments116['onclick'] = NULL;
$renderChildrenClosure119 = function() {return NULL;};
$viewHelper120 = $self->getViewHelper('$viewHelper120', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper120->setArguments($arguments116);
$viewHelper120->setRenderingContext($renderingContext);
$viewHelper120->setRenderChildrenClosure($renderChildrenClosure119);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output115 .= $viewHelper120->initializeArgumentsAndRender();

$output115 .= '
					';
return $output115;
};
$viewHelper121 = $self->getViewHelper('$viewHelper121', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper121->setArguments($arguments113);
$viewHelper121->setRenderingContext($renderingContext);
$viewHelper121->setRenderChildrenClosure($renderChildrenClosure114);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output112 .= $viewHelper121->initializeArgumentsAndRender();

$output112 .= '
				';
return $output112;
};

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output95 .= '

				<div class="panel panel-space panel-default">
					<div class="panel-heading">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments122 = array();
$arguments122['key'] = 'tx_mask.all.contentelements';
$arguments122['id'] = NULL;
$arguments122['default'] = NULL;
$arguments122['htmlEscape'] = NULL;
$arguments122['arguments'] = NULL;
$arguments122['extensionName'] = NULL;
$renderChildrenClosure123 = function() {return NULL;};

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output95 .= '</div>


					<div class="table-fit collapse in" id="recordlist-be_users" data-state="expanded">
						<table cellspacing="0" cellpadding="0" border="0" class="table table-striped table-hover">
							<thead>
								<tr>
									<td nowrap="nowrap" class="col-icon">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments124 = array();
$arguments124['action'] = 'new';
$arguments124['class'] = 'btn btn-default';
$arguments124['additionalAttributes'] = NULL;
$arguments124['data'] = NULL;
$arguments124['arguments'] = array (
);
$arguments124['controller'] = NULL;
$arguments124['extensionName'] = NULL;
$arguments124['pluginName'] = NULL;
$arguments124['pageUid'] = NULL;
$arguments124['pageType'] = 0;
$arguments124['noCache'] = false;
$arguments124['noCacheHash'] = false;
$arguments124['section'] = '';
$arguments124['format'] = '';
$arguments124['linkAccessRestrictedPages'] = false;
$arguments124['additionalParams'] = array (
);
$arguments124['absolute'] = false;
$arguments124['addQueryString'] = false;
$arguments124['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments124['addQueryStringMethod'] = NULL;
$arguments124['dir'] = NULL;
$arguments124['id'] = NULL;
$arguments124['lang'] = NULL;
$arguments124['style'] = NULL;
$arguments124['title'] = NULL;
$arguments124['accesskey'] = NULL;
$arguments124['tabindex'] = NULL;
$arguments124['onclick'] = NULL;
$arguments124['name'] = NULL;
$arguments124['rel'] = NULL;
$arguments124['rev'] = NULL;
$arguments124['target'] = NULL;
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments126 = array();
$arguments126['identifier'] = 'actions-document-new';
$arguments126['size'] = 'small';
$arguments126['overlay'] = NULL;
$arguments126['state'] = 'default';
$arguments126['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure127 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);
};
$viewHelper128 = $self->getViewHelper('$viewHelper128', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper128->setArguments($arguments124);
$viewHelper128->setRenderingContext($renderingContext);
$viewHelper128->setRenderChildrenClosure($renderChildrenClosure125);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output95 .= $viewHelper128->initializeArgumentsAndRender();

$output95 .= '</td>
							<td nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments129 = array();
$arguments129['key'] = 'tx_mask.content.image';
$arguments129['id'] = NULL;
$arguments129['default'] = NULL;
$arguments129['htmlEscape'] = NULL;
$arguments129['arguments'] = NULL;
$arguments129['extensionName'] = NULL;
$renderChildrenClosure130 = function() {return NULL;};

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output95 .= '</td>
							<td nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments131 = array();
$arguments131['key'] = 'tx_mask.content.titlekey';
$arguments131['id'] = NULL;
$arguments131['default'] = NULL;
$arguments131['htmlEscape'] = NULL;
$arguments131['arguments'] = NULL;
$arguments131['extensionName'] = NULL;
$renderChildrenClosure132 = function() {return NULL;};

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output95 .= '</td>
							<td nowrap="nowrap" class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments133 = array();
$arguments133['key'] = 'tx_mask.content.description';
$arguments133['id'] = NULL;
$arguments133['default'] = NULL;
$arguments133['htmlEscape'] = NULL;
$arguments133['arguments'] = NULL;
$arguments133['extensionName'] = NULL;
$renderChildrenClosure134 = function() {return NULL;};

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output95 .= '</td>
							<td nowrap="nowrap" class="col-control">&nbsp;</td>
							</tr>
							</thead>
							<tbody>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments135 = array();
$arguments135['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storages'), 'tt_content.elements', $renderingContext);
$arguments135['as'] = 'storage';
$arguments135['key'] = 'key';
$arguments135['reverse'] = false;
$arguments135['iteration'] = NULL;
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output137 = '';

$output137 .= '
								<tr>
									<td></td>
									<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments138 = array();
$arguments138['action'] = 'edit';
// Rendering Array
$array139 = array();
$array139['type'] = 'tt_content';
$array139['key'] = $currentVariableContainer->getOrNull('key');
$arguments138['arguments'] = $array139;
$arguments138['additionalAttributes'] = NULL;
$arguments138['data'] = NULL;
$arguments138['controller'] = NULL;
$arguments138['extensionName'] = NULL;
$arguments138['pluginName'] = NULL;
$arguments138['pageUid'] = NULL;
$arguments138['pageType'] = 0;
$arguments138['noCache'] = false;
$arguments138['noCacheHash'] = false;
$arguments138['section'] = '';
$arguments138['format'] = '';
$arguments138['linkAccessRestrictedPages'] = false;
$arguments138['additionalParams'] = array (
);
$arguments138['absolute'] = false;
$arguments138['addQueryString'] = false;
$arguments138['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments138['addQueryStringMethod'] = NULL;
$arguments138['class'] = NULL;
$arguments138['dir'] = NULL;
$arguments138['id'] = NULL;
$arguments138['lang'] = NULL;
$arguments138['style'] = NULL;
$arguments138['title'] = NULL;
$arguments138['accesskey'] = NULL;
$arguments138['tabindex'] = NULL;
$arguments138['onclick'] = NULL;
$arguments138['name'] = NULL;
$arguments138['rel'] = NULL;
$arguments138['rev'] = NULL;
$arguments138['target'] = NULL;
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output141 = '';

$output141 .= '
									<!-- mask:icon should be replaced by core:icon when compatibility for TYPO3 6.2 isn\'t needed anymore -->
									';
// Rendering ViewHelper MASK\Mask\ViewHelpers\IconViewHelper
$arguments142 = array();
$output143 = '';

$output143 .= 'mask-ce-';

$output143 .= $currentVariableContainer->getOrNull('key');
$arguments142['identifier'] = $output143;
$arguments142['size'] = 'large';
$arguments142['overlay'] = NULL;
$arguments142['altSrc'] = '';
$arguments142['altText'] = '';
$renderChildrenClosure144 = function() {return NULL;};
$viewHelper145 = $self->getViewHelper('$viewHelper145', $renderingContext, 'MASK\Mask\ViewHelpers\IconViewHelper');
$viewHelper145->setArguments($arguments142);
$viewHelper145->setRenderingContext($renderingContext);
$viewHelper145->setRenderChildrenClosure($renderChildrenClosure144);
// End of ViewHelper MASK\Mask\ViewHelpers\IconViewHelper

$output141 .= $viewHelper145->initializeArgumentsAndRender();

$output141 .= '
								';
return $output141;
};
$viewHelper146 = $self->getViewHelper('$viewHelper146', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper146->setArguments($arguments138);
$viewHelper146->setRenderingContext($renderingContext);
$viewHelper146->setRenderChildrenClosure($renderChildrenClosure140);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output137 .= $viewHelper146->initializeArgumentsAndRender();

$output137 .= '</td>
								<td nowrap="nowrap"><p><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments147 = array();
$arguments147['action'] = 'edit';
// Rendering Array
$array148 = array();
$array148['type'] = 'tt_content';
$array148['key'] = $currentVariableContainer->getOrNull('key');
$arguments147['arguments'] = $array148;
$arguments147['additionalAttributes'] = NULL;
$arguments147['data'] = NULL;
$arguments147['controller'] = NULL;
$arguments147['extensionName'] = NULL;
$arguments147['pluginName'] = NULL;
$arguments147['pageUid'] = NULL;
$arguments147['pageType'] = 0;
$arguments147['noCache'] = false;
$arguments147['noCacheHash'] = false;
$arguments147['section'] = '';
$arguments147['format'] = '';
$arguments147['linkAccessRestrictedPages'] = false;
$arguments147['additionalParams'] = array (
);
$arguments147['absolute'] = false;
$arguments147['addQueryString'] = false;
$arguments147['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments147['addQueryStringMethod'] = NULL;
$arguments147['class'] = NULL;
$arguments147['dir'] = NULL;
$arguments147['id'] = NULL;
$arguments147['lang'] = NULL;
$arguments147['style'] = NULL;
$arguments147['title'] = NULL;
$arguments147['accesskey'] = NULL;
$arguments147['tabindex'] = NULL;
$arguments147['onclick'] = NULL;
$arguments147['name'] = NULL;
$arguments147['rel'] = NULL;
$arguments147['rev'] = NULL;
$arguments147['target'] = NULL;
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments150 = array();
$arguments150['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'label', $renderingContext);
$arguments150['keepQuotes'] = false;
$arguments150['encoding'] = NULL;
$arguments150['doubleEncode'] = true;
$renderChildrenClosure151 = function() {return NULL;};
$value152 = ($arguments150['value'] !== NULL ? $arguments150['value'] : $renderChildrenClosure151());
return (!is_string($value152) ? $value152 : htmlspecialchars($value152, ($arguments150['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments150['encoding'] !== NULL ? $arguments150['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments150['doubleEncode']));
};
$viewHelper153 = $self->getViewHelper('$viewHelper153', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper153->setArguments($arguments147);
$viewHelper153->setRenderingContext($renderingContext);
$viewHelper153->setRenderChildrenClosure($renderChildrenClosure149);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output137 .= $viewHelper153->initializeArgumentsAndRender();

$output137 .= '</strong><br />';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments154 = array();
$arguments154['value'] = $currentVariableContainer->getOrNull('key');
$arguments154['keepQuotes'] = false;
$arguments154['encoding'] = NULL;
$arguments154['doubleEncode'] = true;
$renderChildrenClosure155 = function() {return NULL;};
$value156 = ($arguments154['value'] !== NULL ? $arguments154['value'] : $renderChildrenClosure155());

$output137 .= (!is_string($value156) ? $value156 : htmlspecialchars($value156, ($arguments154['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments154['encoding'] !== NULL ? $arguments154['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments154['doubleEncode']));

$output137 .= '</p></td>
								<td>
									<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments157 = array();
$arguments157['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'description', $renderingContext);
$arguments157['keepQuotes'] = false;
$arguments157['encoding'] = NULL;
$arguments157['doubleEncode'] = true;
$renderChildrenClosure158 = function() {return NULL;};
$value159 = ($arguments157['value'] !== NULL ? $arguments157['value'] : $renderChildrenClosure158());

$output137 .= (!is_string($value159) ? $value159 : htmlspecialchars($value159, ($arguments157['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments157['encoding'] !== NULL ? $arguments157['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments157['doubleEncode']));

$output137 .= '</p>
								';
// Rendering ViewHelper MASK\Mask\ViewHelpers\LinkViewHelper
$arguments160 = array();
$arguments160['data'] = $currentVariableContainer->getOrNull('key');
$renderChildrenClosure161 = function() {return NULL;};
$viewHelper162 = $self->getViewHelper('$viewHelper162', $renderingContext, 'MASK\Mask\ViewHelpers\LinkViewHelper');
$viewHelper162->setArguments($arguments160);
$viewHelper162->setRenderingContext($renderingContext);
$viewHelper162->setRenderChildrenClosure($renderChildrenClosure161);
// End of ViewHelper MASK\Mask\ViewHelpers\LinkViewHelper

$output137 .= $viewHelper162->initializeArgumentsAndRender();

$output137 .= '
								</td>
								<td nowrap="nowrap">
									<div class="btn-group" role="group">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments163 = array();
$arguments163['action'] = 'edit';
// Rendering Array
$array164 = array();
$array164['type'] = 'tt_content';
$array164['key'] = $currentVariableContainer->getOrNull('key');
$arguments163['arguments'] = $array164;
$arguments163['class'] = 'btn btn-default';
$arguments163['additionalAttributes'] = NULL;
$arguments163['data'] = NULL;
$arguments163['controller'] = NULL;
$arguments163['extensionName'] = NULL;
$arguments163['pluginName'] = NULL;
$arguments163['pageUid'] = NULL;
$arguments163['pageType'] = 0;
$arguments163['noCache'] = false;
$arguments163['noCacheHash'] = false;
$arguments163['section'] = '';
$arguments163['format'] = '';
$arguments163['linkAccessRestrictedPages'] = false;
$arguments163['additionalParams'] = array (
);
$arguments163['absolute'] = false;
$arguments163['addQueryString'] = false;
$arguments163['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments163['addQueryStringMethod'] = NULL;
$arguments163['dir'] = NULL;
$arguments163['id'] = NULL;
$arguments163['lang'] = NULL;
$arguments163['style'] = NULL;
$arguments163['title'] = NULL;
$arguments163['accesskey'] = NULL;
$arguments163['tabindex'] = NULL;
$arguments163['onclick'] = NULL;
$arguments163['name'] = NULL;
$arguments163['rel'] = NULL;
$arguments163['rev'] = NULL;
$arguments163['target'] = NULL;
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments166 = array();
$arguments166['identifier'] = 'actions-document-open';
$arguments166['size'] = 'small';
$arguments166['overlay'] = NULL;
$arguments166['state'] = 'default';
$arguments166['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure167 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);
};
$viewHelper168 = $self->getViewHelper('$viewHelper168', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper168->setArguments($arguments163);
$viewHelper168->setRenderingContext($renderingContext);
$viewHelper168->setRenderChildrenClosure($renderChildrenClosure165);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output137 .= $viewHelper168->initializeArgumentsAndRender();

$output137 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments169 = array();
$arguments169['action'] = 'showHtml';
// Rendering Array
$array170 = array();
$array170['key'] = $currentVariableContainer->getOrNull('key');
$arguments169['arguments'] = $array170;
$arguments169['onclick'] = 'window.open(this.href, \'HTML\', \'width=800,height=600,resizable=yes,scrollbars=yes\');
												return false;';
$arguments169['class'] = 'btn btn-default';
$arguments169['additionalAttributes'] = NULL;
$arguments169['data'] = NULL;
$arguments169['controller'] = NULL;
$arguments169['extensionName'] = NULL;
$arguments169['pluginName'] = NULL;
$arguments169['pageUid'] = NULL;
$arguments169['pageType'] = 0;
$arguments169['noCache'] = false;
$arguments169['noCacheHash'] = false;
$arguments169['section'] = '';
$arguments169['format'] = '';
$arguments169['linkAccessRestrictedPages'] = false;
$arguments169['additionalParams'] = array (
);
$arguments169['absolute'] = false;
$arguments169['addQueryString'] = false;
$arguments169['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments169['addQueryStringMethod'] = NULL;
$arguments169['dir'] = NULL;
$arguments169['id'] = NULL;
$arguments169['lang'] = NULL;
$arguments169['style'] = NULL;
$arguments169['title'] = NULL;
$arguments169['accesskey'] = NULL;
$arguments169['tabindex'] = NULL;
$arguments169['name'] = NULL;
$arguments169['rel'] = NULL;
$arguments169['rev'] = NULL;
$arguments169['target'] = NULL;
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments172 = array();
$arguments172['identifier'] = 'sysnote-type-2';
$arguments172['size'] = 'small';
$arguments172['overlay'] = NULL;
$arguments172['state'] = 'default';
$arguments172['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure173 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);
};
$viewHelper174 = $self->getViewHelper('$viewHelper174', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper174->setArguments($arguments169);
$viewHelper174->setRenderingContext($renderingContext);
$viewHelper174->setRenderChildrenClosure($renderChildrenClosure171);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output137 .= $viewHelper174->initializeArgumentsAndRender();

$output137 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments175 = array();
$arguments175['action'] = 'delete';
// Rendering Array
$array176 = array();
$array176['type'] = 'tt_content';
$array176['key'] = $currentVariableContainer->getOrNull('key');
$arguments175['arguments'] = $array176;
$output177 = '';

$output177 .= 'return confirm(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments178 = array();
$arguments178['key'] = 'tx_mask.all.confirmdelete';
$arguments178['id'] = NULL;
$arguments178['default'] = NULL;
$arguments178['htmlEscape'] = NULL;
$arguments178['arguments'] = NULL;
$arguments178['extensionName'] = NULL;
$renderChildrenClosure179 = function() {return NULL;};

$output177 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);

$output177 .= '\')';
$arguments175['onclick'] = $output177;
$arguments175['class'] = 'btn btn-default';
$arguments175['additionalAttributes'] = NULL;
$arguments175['data'] = NULL;
$arguments175['controller'] = NULL;
$arguments175['extensionName'] = NULL;
$arguments175['pluginName'] = NULL;
$arguments175['pageUid'] = NULL;
$arguments175['pageType'] = 0;
$arguments175['noCache'] = false;
$arguments175['noCacheHash'] = false;
$arguments175['section'] = '';
$arguments175['format'] = '';
$arguments175['linkAccessRestrictedPages'] = false;
$arguments175['additionalParams'] = array (
);
$arguments175['absolute'] = false;
$arguments175['addQueryString'] = false;
$arguments175['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments175['addQueryStringMethod'] = NULL;
$arguments175['dir'] = NULL;
$arguments175['id'] = NULL;
$arguments175['lang'] = NULL;
$arguments175['style'] = NULL;
$arguments175['title'] = NULL;
$arguments175['accesskey'] = NULL;
$arguments175['tabindex'] = NULL;
$arguments175['name'] = NULL;
$arguments175['rel'] = NULL;
$arguments175['rev'] = NULL;
$arguments175['target'] = NULL;
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments181 = array();
$arguments181['identifier'] = 'actions-edit-delete';
$arguments181['size'] = 'small';
$arguments181['overlay'] = NULL;
$arguments181['state'] = 'default';
$arguments181['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure182 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);
};
$viewHelper183 = $self->getViewHelper('$viewHelper183', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper183->setArguments($arguments175);
$viewHelper183->setRenderingContext($renderingContext);
$viewHelper183->setRenderChildrenClosure($renderChildrenClosure180);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output137 .= $viewHelper183->initializeArgumentsAndRender();

$output137 .= '
									</div>
								</td>
								</tr>
							';
return $output137;
};

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output95 .= '
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
';
return $output95;
};

$output89 .= '';

$output89 .= '
';


return $output89;
}


}
#1466545035    62835     