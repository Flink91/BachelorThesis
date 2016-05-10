<?php
class FluidCache_Mask_WizardPage_action_list_31293661533cf1d3babd3c5492d725db54ea4415 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$array2['active'] = 'WizardPage';
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments7 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments8 = array();
$arguments8['subject'] = NULL;
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('backendLayouts');
};
$arguments7['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext), 0);
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
						<div class="typo3-message message-warning"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments15 = array();
$arguments15['key'] = 'tx_mask.page.warning';
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '</strong> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments17 = array();
$arguments17['key'] = 'tx_mask.page.nobackendlayout';
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['htmlEscape'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$renderChildrenClosure18 = function() {return NULL;};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output14 .= '</div>
					';
return $output14;
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments19 = array();
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output21 = '';

$output21 .= '
						<div class="table-fit collapse in" id="recordlist-be_users" data-state="expanded">
							<table cellspacing="0" cellpadding="0" border="0" class="table table-striped table-hover">
								<thead>
									<tr>
										<td nowrap="nowrap" class="col-icon">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments22 = array();
$arguments22['key'] = 'tx_mask.page.image';
$arguments22['id'] = NULL;
$arguments22['default'] = NULL;
$arguments22['htmlEscape'] = NULL;
$arguments22['arguments'] = NULL;
$arguments22['extensionName'] = NULL;
$renderChildrenClosure23 = function() {return NULL;};

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '</td>
								<td nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments24 = array();
$arguments24['key'] = 'tx_mask.page.titleuid';
$arguments24['id'] = NULL;
$arguments24['default'] = NULL;
$arguments24['htmlEscape'] = NULL;
$arguments24['arguments'] = NULL;
$arguments24['extensionName'] = NULL;
$renderChildrenClosure25 = function() {return NULL;};

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output21 .= '</td>
								<td nowrap="nowrap" class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments26 = array();
$arguments26['key'] = 'tx_mask.page.description';
$arguments26['id'] = NULL;
$arguments26['default'] = NULL;
$arguments26['htmlEscape'] = NULL;
$arguments26['arguments'] = NULL;
$arguments26['extensionName'] = NULL;
$renderChildrenClosure27 = function() {return NULL;};

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output21 .= '</td>
								<td nowrap="nowrap" class="col-control">&nbsp;</td>
								</tr>
								</thead>
								<tbody>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments28 = array();
$arguments28['each'] = $currentVariableContainer->getOrNull('backendLayouts');
$arguments28['as'] = 'layout';
$arguments28['key'] = '';
$arguments28['reverse'] = false;
$arguments28['iteration'] = NULL;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output30 = '';

$output30 .= '
									<tr>
										<td>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments31 = array();
// Rendering Boolean node
$arguments31['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('layout'), 'icon', $renderingContext));
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output33 = '';

$output33 .= '
										<img src="/uploads/media/';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments34 = array();
$arguments34['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('layout'), 'icon', $renderingContext);
$arguments34['keepQuotes'] = false;
$arguments34['encoding'] = NULL;
$arguments34['doubleEncode'] = true;
$renderChildrenClosure35 = function() {return NULL;};
$value36 = ($arguments34['value'] !== NULL ? $arguments34['value'] : $renderChildrenClosure35());

$output33 .= (!is_string($value36) ? $value36 : htmlspecialchars($value36, ($arguments34['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments34['encoding'] !== NULL ? $arguments34['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments34['doubleEncode']));

$output33 .= '" />
									';
return $output33;
};

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '</td>
									<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments37 = array();
$arguments37['action'] = 'edit';
// Rendering Array
$array38 = array();
$array38['layout'] = $currentVariableContainer->getOrNull('layout');
$arguments37['arguments'] = $array38;
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['controller'] = NULL;
$arguments37['extensionName'] = NULL;
$arguments37['pluginName'] = NULL;
$arguments37['pageUid'] = NULL;
$arguments37['pageType'] = 0;
$arguments37['noCache'] = false;
$arguments37['noCacheHash'] = false;
$arguments37['section'] = '';
$arguments37['format'] = '';
$arguments37['linkAccessRestrictedPages'] = false;
$arguments37['additionalParams'] = array (
);
$arguments37['absolute'] = false;
$arguments37['addQueryString'] = false;
$arguments37['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments37['addQueryStringMethod'] = NULL;
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$arguments37['name'] = NULL;
$arguments37['rel'] = NULL;
$arguments37['rev'] = NULL;
$arguments37['target'] = NULL;
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output40 = '';

$output40 .= '<p><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments41 = array();
$arguments41['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('layout'), 'title', $renderingContext);
$arguments41['keepQuotes'] = false;
$arguments41['encoding'] = NULL;
$arguments41['doubleEncode'] = true;
$renderChildrenClosure42 = function() {return NULL;};
$value43 = ($arguments41['value'] !== NULL ? $arguments41['value'] : $renderChildrenClosure42());

$output40 .= (!is_string($value43) ? $value43 : htmlspecialchars($value43, ($arguments41['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments41['encoding'] !== NULL ? $arguments41['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments41['doubleEncode']));

$output40 .= '</strong><br />';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments44 = array();
$arguments44['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('layout'), 'uid', $renderingContext);
$arguments44['keepQuotes'] = false;
$arguments44['encoding'] = NULL;
$arguments44['doubleEncode'] = true;
$renderChildrenClosure45 = function() {return NULL;};
$value46 = ($arguments44['value'] !== NULL ? $arguments44['value'] : $renderChildrenClosure45());

$output40 .= (!is_string($value46) ? $value46 : htmlspecialchars($value46, ($arguments44['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments44['encoding'] !== NULL ? $arguments44['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments44['doubleEncode']));

$output40 .= '</p>';
return $output40;
};
$viewHelper47 = $self->getViewHelper('$viewHelper47', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper47->setArguments($arguments37);
$viewHelper47->setRenderingContext($renderingContext);
$viewHelper47->setRenderChildrenClosure($renderChildrenClosure39);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output30 .= $viewHelper47->initializeArgumentsAndRender();

$output30 .= '</td>
									<td><p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments48 = array();
$arguments48['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('layout'), 'description', $renderingContext);
$arguments48['keepQuotes'] = false;
$arguments48['encoding'] = NULL;
$arguments48['doubleEncode'] = true;
$renderChildrenClosure49 = function() {return NULL;};
$value50 = ($arguments48['value'] !== NULL ? $arguments48['value'] : $renderChildrenClosure49());

$output30 .= (!is_string($value50) ? $value50 : htmlspecialchars($value50, ($arguments48['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments48['encoding'] !== NULL ? $arguments48['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments48['doubleEncode']));

$output30 .= '</p></td>
									<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments51 = array();
$arguments51['action'] = 'edit';
// Rendering Array
$array52 = array();
$array52['layout'] = $currentVariableContainer->getOrNull('layout');
$arguments51['arguments'] = $array52;
$arguments51['class'] = 'btn btn-default';
$arguments51['additionalAttributes'] = NULL;
$arguments51['data'] = NULL;
$arguments51['controller'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['pluginName'] = NULL;
$arguments51['pageUid'] = NULL;
$arguments51['pageType'] = 0;
$arguments51['noCache'] = false;
$arguments51['noCacheHash'] = false;
$arguments51['section'] = '';
$arguments51['format'] = '';
$arguments51['linkAccessRestrictedPages'] = false;
$arguments51['additionalParams'] = array (
);
$arguments51['absolute'] = false;
$arguments51['addQueryString'] = false;
$arguments51['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments51['addQueryStringMethod'] = NULL;
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
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments54 = array();
$arguments54['identifier'] = 'actions-document-open';
$arguments54['size'] = 'small';
$arguments54['overlay'] = NULL;
$arguments54['state'] = 'default';
$arguments54['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure55 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);
};
$viewHelper56 = $self->getViewHelper('$viewHelper56', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper56->setArguments($arguments51);
$viewHelper56->setRenderingContext($renderingContext);
$viewHelper56->setRenderChildrenClosure($renderChildrenClosure53);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output30 .= $viewHelper56->initializeArgumentsAndRender();

$output30 .= '</td>
									</tr>
								';
return $output30;
};

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output21 .= '
								</tbody>
							</table>
					';
return $output21;
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output11 .= '
				';
return $output11;
};
$arguments7['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output57 = '';

$output57 .= '
						<div class="typo3-message message-warning"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments58 = array();
$arguments58['key'] = 'tx_mask.page.warning';
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['htmlEscape'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$renderChildrenClosure59 = function() {return NULL;};

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '</strong> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments60 = array();
$arguments60['key'] = 'tx_mask.page.nobackendlayout';
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['htmlEscape'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$renderChildrenClosure61 = function() {return NULL;};

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output57 .= '</div>
					';
return $output57;
};
$arguments7['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output62 = '';

$output62 .= '
						<div class="table-fit collapse in" id="recordlist-be_users" data-state="expanded">
							<table cellspacing="0" cellpadding="0" border="0" class="table table-striped table-hover">
								<thead>
									<tr>
										<td nowrap="nowrap" class="col-icon">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments63 = array();
$arguments63['key'] = 'tx_mask.page.image';
$arguments63['id'] = NULL;
$arguments63['default'] = NULL;
$arguments63['htmlEscape'] = NULL;
$arguments63['arguments'] = NULL;
$arguments63['extensionName'] = NULL;
$renderChildrenClosure64 = function() {return NULL;};

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output62 .= '</td>
								<td nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments65 = array();
$arguments65['key'] = 'tx_mask.page.titleuid';
$arguments65['id'] = NULL;
$arguments65['default'] = NULL;
$arguments65['htmlEscape'] = NULL;
$arguments65['arguments'] = NULL;
$arguments65['extensionName'] = NULL;
$renderChildrenClosure66 = function() {return NULL;};

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output62 .= '</td>
								<td nowrap="nowrap" class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments67 = array();
$arguments67['key'] = 'tx_mask.page.description';
$arguments67['id'] = NULL;
$arguments67['default'] = NULL;
$arguments67['htmlEscape'] = NULL;
$arguments67['arguments'] = NULL;
$arguments67['extensionName'] = NULL;
$renderChildrenClosure68 = function() {return NULL;};

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output62 .= '</td>
								<td nowrap="nowrap" class="col-control">&nbsp;</td>
								</tr>
								</thead>
								<tbody>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments69 = array();
$arguments69['each'] = $currentVariableContainer->getOrNull('backendLayouts');
$arguments69['as'] = 'layout';
$arguments69['key'] = '';
$arguments69['reverse'] = false;
$arguments69['iteration'] = NULL;
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output71 = '';

$output71 .= '
									<tr>
										<td>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments72 = array();
// Rendering Boolean node
$arguments72['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('layout'), 'icon', $renderingContext));
$arguments72['then'] = NULL;
$arguments72['else'] = NULL;
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output74 = '';

$output74 .= '
										<img src="/uploads/media/';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments75 = array();
$arguments75['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('layout'), 'icon', $renderingContext);
$arguments75['keepQuotes'] = false;
$arguments75['encoding'] = NULL;
$arguments75['doubleEncode'] = true;
$renderChildrenClosure76 = function() {return NULL;};
$value77 = ($arguments75['value'] !== NULL ? $arguments75['value'] : $renderChildrenClosure76());

$output74 .= (!is_string($value77) ? $value77 : htmlspecialchars($value77, ($arguments75['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments75['encoding'] !== NULL ? $arguments75['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments75['doubleEncode']));

$output74 .= '" />
									';
return $output74;
};

$output71 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '</td>
									<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments78 = array();
$arguments78['action'] = 'edit';
// Rendering Array
$array79 = array();
$array79['layout'] = $currentVariableContainer->getOrNull('layout');
$arguments78['arguments'] = $array79;
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['controller'] = NULL;
$arguments78['extensionName'] = NULL;
$arguments78['pluginName'] = NULL;
$arguments78['pageUid'] = NULL;
$arguments78['pageType'] = 0;
$arguments78['noCache'] = false;
$arguments78['noCacheHash'] = false;
$arguments78['section'] = '';
$arguments78['format'] = '';
$arguments78['linkAccessRestrictedPages'] = false;
$arguments78['additionalParams'] = array (
);
$arguments78['absolute'] = false;
$arguments78['addQueryString'] = false;
$arguments78['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments78['addQueryStringMethod'] = NULL;
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
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output81 = '';

$output81 .= '<p><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments82 = array();
$arguments82['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('layout'), 'title', $renderingContext);
$arguments82['keepQuotes'] = false;
$arguments82['encoding'] = NULL;
$arguments82['doubleEncode'] = true;
$renderChildrenClosure83 = function() {return NULL;};
$value84 = ($arguments82['value'] !== NULL ? $arguments82['value'] : $renderChildrenClosure83());

$output81 .= (!is_string($value84) ? $value84 : htmlspecialchars($value84, ($arguments82['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments82['encoding'] !== NULL ? $arguments82['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments82['doubleEncode']));

$output81 .= '</strong><br />';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments85 = array();
$arguments85['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('layout'), 'uid', $renderingContext);
$arguments85['keepQuotes'] = false;
$arguments85['encoding'] = NULL;
$arguments85['doubleEncode'] = true;
$renderChildrenClosure86 = function() {return NULL;};
$value87 = ($arguments85['value'] !== NULL ? $arguments85['value'] : $renderChildrenClosure86());

$output81 .= (!is_string($value87) ? $value87 : htmlspecialchars($value87, ($arguments85['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments85['encoding'] !== NULL ? $arguments85['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments85['doubleEncode']));

$output81 .= '</p>';
return $output81;
};
$viewHelper88 = $self->getViewHelper('$viewHelper88', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper88->setArguments($arguments78);
$viewHelper88->setRenderingContext($renderingContext);
$viewHelper88->setRenderChildrenClosure($renderChildrenClosure80);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output71 .= $viewHelper88->initializeArgumentsAndRender();

$output71 .= '</td>
									<td><p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments89 = array();
$arguments89['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('layout'), 'description', $renderingContext);
$arguments89['keepQuotes'] = false;
$arguments89['encoding'] = NULL;
$arguments89['doubleEncode'] = true;
$renderChildrenClosure90 = function() {return NULL;};
$value91 = ($arguments89['value'] !== NULL ? $arguments89['value'] : $renderChildrenClosure90());

$output71 .= (!is_string($value91) ? $value91 : htmlspecialchars($value91, ($arguments89['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments89['encoding'] !== NULL ? $arguments89['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments89['doubleEncode']));

$output71 .= '</p></td>
									<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments92 = array();
$arguments92['action'] = 'edit';
// Rendering Array
$array93 = array();
$array93['layout'] = $currentVariableContainer->getOrNull('layout');
$arguments92['arguments'] = $array93;
$arguments92['class'] = 'btn btn-default';
$arguments92['additionalAttributes'] = NULL;
$arguments92['data'] = NULL;
$arguments92['controller'] = NULL;
$arguments92['extensionName'] = NULL;
$arguments92['pluginName'] = NULL;
$arguments92['pageUid'] = NULL;
$arguments92['pageType'] = 0;
$arguments92['noCache'] = false;
$arguments92['noCacheHash'] = false;
$arguments92['section'] = '';
$arguments92['format'] = '';
$arguments92['linkAccessRestrictedPages'] = false;
$arguments92['additionalParams'] = array (
);
$arguments92['absolute'] = false;
$arguments92['addQueryString'] = false;
$arguments92['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments92['addQueryStringMethod'] = NULL;
$arguments92['dir'] = NULL;
$arguments92['id'] = NULL;
$arguments92['lang'] = NULL;
$arguments92['style'] = NULL;
$arguments92['title'] = NULL;
$arguments92['accesskey'] = NULL;
$arguments92['tabindex'] = NULL;
$arguments92['onclick'] = NULL;
$arguments92['name'] = NULL;
$arguments92['rel'] = NULL;
$arguments92['rev'] = NULL;
$arguments92['target'] = NULL;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments95 = array();
$arguments95['identifier'] = 'actions-document-open';
$arguments95['size'] = 'small';
$arguments95['overlay'] = NULL;
$arguments95['state'] = 'default';
$arguments95['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure96 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);
};
$viewHelper97 = $self->getViewHelper('$viewHelper97', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper97->setArguments($arguments92);
$viewHelper97->setRenderingContext($renderingContext);
$viewHelper97->setRenderChildrenClosure($renderChildrenClosure94);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output71 .= $viewHelper97->initializeArgumentsAndRender();

$output71 .= '</td>
									</tr>
								';
return $output71;
};

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output62 .= '
								</tbody>
							</table>
					';
return $output62;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure10, $renderingContext);

$output0 .= '
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

$output98 = '';

$output98 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments99 = array();
$arguments99['name'] = 'Default';
$renderChildrenClosure100 = function() {return NULL;};
$viewHelper101 = $self->getViewHelper('$viewHelper101', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper101->setArguments($arguments99);
$viewHelper101->setRenderingContext($renderingContext);
$viewHelper101->setRenderChildrenClosure($renderChildrenClosure100);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output98 .= $viewHelper101->initializeArgumentsAndRender();

$output98 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments102 = array();
$arguments102['name'] = 'content';
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output104 = '';

$output104 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments105 = array();
$arguments105['partial'] = 'Tabs';
// Rendering Array
$array106 = array();
$array106['active'] = 'WizardPage';
$arguments105['arguments'] = $array106;
$arguments105['section'] = NULL;
$arguments105['optional'] = false;
$renderChildrenClosure107 = function() {return NULL;};

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments105, $renderChildrenClosure107, $renderingContext);

$output104 .= '

	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="DTM-mask-1">
			<div class="form-section">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments108 = array();
$arguments108['additionalAttributes'] = NULL;
$arguments108['data'] = NULL;
$arguments108['renderMode'] = NULL;
$arguments108['as'] = NULL;
$arguments108['class'] = NULL;
$arguments108['dir'] = NULL;
$arguments108['id'] = NULL;
$arguments108['lang'] = NULL;
$arguments108['style'] = NULL;
$arguments108['title'] = NULL;
$arguments108['accesskey'] = NULL;
$arguments108['tabindex'] = NULL;
$arguments108['onclick'] = NULL;
$arguments108['queueIdentifier'] = NULL;
$renderChildrenClosure109 = function() {return NULL;};
$viewHelper110 = $self->getViewHelper('$viewHelper110', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper110->setArguments($arguments108);
$viewHelper110->setRenderingContext($renderingContext);
$viewHelper110->setRenderChildrenClosure($renderChildrenClosure109);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output104 .= $viewHelper110->initializeArgumentsAndRender();

$output104 .= '

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments111 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments112 = array();
$arguments112['subject'] = NULL;
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('backendLayouts');
};
$arguments111['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext), 0);
$arguments111['then'] = NULL;
$arguments111['else'] = NULL;
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output115 = '';

$output115 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments116 = array();
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output118 = '';

$output118 .= '
						<div class="typo3-message message-warning"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments119 = array();
$arguments119['key'] = 'tx_mask.page.warning';
$arguments119['id'] = NULL;
$arguments119['default'] = NULL;
$arguments119['htmlEscape'] = NULL;
$arguments119['arguments'] = NULL;
$arguments119['extensionName'] = NULL;
$renderChildrenClosure120 = function() {return NULL;};

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '</strong> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments121 = array();
$arguments121['key'] = 'tx_mask.page.nobackendlayout';
$arguments121['id'] = NULL;
$arguments121['default'] = NULL;
$arguments121['htmlEscape'] = NULL;
$arguments121['arguments'] = NULL;
$arguments121['extensionName'] = NULL;
$renderChildrenClosure122 = function() {return NULL;};

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output118 .= '</div>
					';
return $output118;
};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output115 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments123 = array();
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output125 = '';

$output125 .= '
						<div class="table-fit collapse in" id="recordlist-be_users" data-state="expanded">
							<table cellspacing="0" cellpadding="0" border="0" class="table table-striped table-hover">
								<thead>
									<tr>
										<td nowrap="nowrap" class="col-icon">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments126 = array();
$arguments126['key'] = 'tx_mask.page.image';
$arguments126['id'] = NULL;
$arguments126['default'] = NULL;
$arguments126['htmlEscape'] = NULL;
$arguments126['arguments'] = NULL;
$arguments126['extensionName'] = NULL;
$renderChildrenClosure127 = function() {return NULL;};

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output125 .= '</td>
								<td nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments128 = array();
$arguments128['key'] = 'tx_mask.page.titleuid';
$arguments128['id'] = NULL;
$arguments128['default'] = NULL;
$arguments128['htmlEscape'] = NULL;
$arguments128['arguments'] = NULL;
$arguments128['extensionName'] = NULL;
$renderChildrenClosure129 = function() {return NULL;};

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output125 .= '</td>
								<td nowrap="nowrap" class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments130 = array();
$arguments130['key'] = 'tx_mask.page.description';
$arguments130['id'] = NULL;
$arguments130['default'] = NULL;
$arguments130['htmlEscape'] = NULL;
$arguments130['arguments'] = NULL;
$arguments130['extensionName'] = NULL;
$renderChildrenClosure131 = function() {return NULL;};

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output125 .= '</td>
								<td nowrap="nowrap" class="col-control">&nbsp;</td>
								</tr>
								</thead>
								<tbody>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments132 = array();
$arguments132['each'] = $currentVariableContainer->getOrNull('backendLayouts');
$arguments132['as'] = 'layout';
$arguments132['key'] = '';
$arguments132['reverse'] = false;
$arguments132['iteration'] = NULL;
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output134 = '';

$output134 .= '
									<tr>
										<td>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments135 = array();
// Rendering Boolean node
$arguments135['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('layout'), 'icon', $renderingContext));
$arguments135['then'] = NULL;
$arguments135['else'] = NULL;
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output137 = '';

$output137 .= '
										<img src="/uploads/media/';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments138 = array();
$arguments138['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('layout'), 'icon', $renderingContext);
$arguments138['keepQuotes'] = false;
$arguments138['encoding'] = NULL;
$arguments138['doubleEncode'] = true;
$renderChildrenClosure139 = function() {return NULL;};
$value140 = ($arguments138['value'] !== NULL ? $arguments138['value'] : $renderChildrenClosure139());

$output137 .= (!is_string($value140) ? $value140 : htmlspecialchars($value140, ($arguments138['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments138['encoding'] !== NULL ? $arguments138['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments138['doubleEncode']));

$output137 .= '" />
									';
return $output137;
};

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output134 .= '</td>
									<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments141 = array();
$arguments141['action'] = 'edit';
// Rendering Array
$array142 = array();
$array142['layout'] = $currentVariableContainer->getOrNull('layout');
$arguments141['arguments'] = $array142;
$arguments141['additionalAttributes'] = NULL;
$arguments141['data'] = NULL;
$arguments141['controller'] = NULL;
$arguments141['extensionName'] = NULL;
$arguments141['pluginName'] = NULL;
$arguments141['pageUid'] = NULL;
$arguments141['pageType'] = 0;
$arguments141['noCache'] = false;
$arguments141['noCacheHash'] = false;
$arguments141['section'] = '';
$arguments141['format'] = '';
$arguments141['linkAccessRestrictedPages'] = false;
$arguments141['additionalParams'] = array (
);
$arguments141['absolute'] = false;
$arguments141['addQueryString'] = false;
$arguments141['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments141['addQueryStringMethod'] = NULL;
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
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output144 = '';

$output144 .= '<p><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments145 = array();
$arguments145['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('layout'), 'title', $renderingContext);
$arguments145['keepQuotes'] = false;
$arguments145['encoding'] = NULL;
$arguments145['doubleEncode'] = true;
$renderChildrenClosure146 = function() {return NULL;};
$value147 = ($arguments145['value'] !== NULL ? $arguments145['value'] : $renderChildrenClosure146());

$output144 .= (!is_string($value147) ? $value147 : htmlspecialchars($value147, ($arguments145['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments145['encoding'] !== NULL ? $arguments145['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments145['doubleEncode']));

$output144 .= '</strong><br />';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments148 = array();
$arguments148['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('layout'), 'uid', $renderingContext);
$arguments148['keepQuotes'] = false;
$arguments148['encoding'] = NULL;
$arguments148['doubleEncode'] = true;
$renderChildrenClosure149 = function() {return NULL;};
$value150 = ($arguments148['value'] !== NULL ? $arguments148['value'] : $renderChildrenClosure149());

$output144 .= (!is_string($value150) ? $value150 : htmlspecialchars($value150, ($arguments148['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments148['encoding'] !== NULL ? $arguments148['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments148['doubleEncode']));

$output144 .= '</p>';
return $output144;
};
$viewHelper151 = $self->getViewHelper('$viewHelper151', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper151->setArguments($arguments141);
$viewHelper151->setRenderingContext($renderingContext);
$viewHelper151->setRenderChildrenClosure($renderChildrenClosure143);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output134 .= $viewHelper151->initializeArgumentsAndRender();

$output134 .= '</td>
									<td><p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments152 = array();
$arguments152['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('layout'), 'description', $renderingContext);
$arguments152['keepQuotes'] = false;
$arguments152['encoding'] = NULL;
$arguments152['doubleEncode'] = true;
$renderChildrenClosure153 = function() {return NULL;};
$value154 = ($arguments152['value'] !== NULL ? $arguments152['value'] : $renderChildrenClosure153());

$output134 .= (!is_string($value154) ? $value154 : htmlspecialchars($value154, ($arguments152['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments152['encoding'] !== NULL ? $arguments152['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments152['doubleEncode']));

$output134 .= '</p></td>
									<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments155 = array();
$arguments155['action'] = 'edit';
// Rendering Array
$array156 = array();
$array156['layout'] = $currentVariableContainer->getOrNull('layout');
$arguments155['arguments'] = $array156;
$arguments155['class'] = 'btn btn-default';
$arguments155['additionalAttributes'] = NULL;
$arguments155['data'] = NULL;
$arguments155['controller'] = NULL;
$arguments155['extensionName'] = NULL;
$arguments155['pluginName'] = NULL;
$arguments155['pageUid'] = NULL;
$arguments155['pageType'] = 0;
$arguments155['noCache'] = false;
$arguments155['noCacheHash'] = false;
$arguments155['section'] = '';
$arguments155['format'] = '';
$arguments155['linkAccessRestrictedPages'] = false;
$arguments155['additionalParams'] = array (
);
$arguments155['absolute'] = false;
$arguments155['addQueryString'] = false;
$arguments155['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments155['addQueryStringMethod'] = NULL;
$arguments155['dir'] = NULL;
$arguments155['id'] = NULL;
$arguments155['lang'] = NULL;
$arguments155['style'] = NULL;
$arguments155['title'] = NULL;
$arguments155['accesskey'] = NULL;
$arguments155['tabindex'] = NULL;
$arguments155['onclick'] = NULL;
$arguments155['name'] = NULL;
$arguments155['rel'] = NULL;
$arguments155['rev'] = NULL;
$arguments155['target'] = NULL;
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments158 = array();
$arguments158['identifier'] = 'actions-document-open';
$arguments158['size'] = 'small';
$arguments158['overlay'] = NULL;
$arguments158['state'] = 'default';
$arguments158['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure159 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);
};
$viewHelper160 = $self->getViewHelper('$viewHelper160', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper160->setArguments($arguments155);
$viewHelper160->setRenderingContext($renderingContext);
$viewHelper160->setRenderChildrenClosure($renderChildrenClosure157);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output134 .= $viewHelper160->initializeArgumentsAndRender();

$output134 .= '</td>
									</tr>
								';
return $output134;
};

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output125 .= '
								</tbody>
							</table>
					';
return $output125;
};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output115 .= '
				';
return $output115;
};
$arguments111['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output161 = '';

$output161 .= '
						<div class="typo3-message message-warning"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments162 = array();
$arguments162['key'] = 'tx_mask.page.warning';
$arguments162['id'] = NULL;
$arguments162['default'] = NULL;
$arguments162['htmlEscape'] = NULL;
$arguments162['arguments'] = NULL;
$arguments162['extensionName'] = NULL;
$renderChildrenClosure163 = function() {return NULL;};

$output161 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output161 .= '</strong> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments164 = array();
$arguments164['key'] = 'tx_mask.page.nobackendlayout';
$arguments164['id'] = NULL;
$arguments164['default'] = NULL;
$arguments164['htmlEscape'] = NULL;
$arguments164['arguments'] = NULL;
$arguments164['extensionName'] = NULL;
$renderChildrenClosure165 = function() {return NULL;};

$output161 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output161 .= '</div>
					';
return $output161;
};
$arguments111['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output166 = '';

$output166 .= '
						<div class="table-fit collapse in" id="recordlist-be_users" data-state="expanded">
							<table cellspacing="0" cellpadding="0" border="0" class="table table-striped table-hover">
								<thead>
									<tr>
										<td nowrap="nowrap" class="col-icon">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments167 = array();
$arguments167['key'] = 'tx_mask.page.image';
$arguments167['id'] = NULL;
$arguments167['default'] = NULL;
$arguments167['htmlEscape'] = NULL;
$arguments167['arguments'] = NULL;
$arguments167['extensionName'] = NULL;
$renderChildrenClosure168 = function() {return NULL;};

$output166 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output166 .= '</td>
								<td nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments169 = array();
$arguments169['key'] = 'tx_mask.page.titleuid';
$arguments169['id'] = NULL;
$arguments169['default'] = NULL;
$arguments169['htmlEscape'] = NULL;
$arguments169['arguments'] = NULL;
$arguments169['extensionName'] = NULL;
$renderChildrenClosure170 = function() {return NULL;};

$output166 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output166 .= '</td>
								<td nowrap="nowrap" class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments171 = array();
$arguments171['key'] = 'tx_mask.page.description';
$arguments171['id'] = NULL;
$arguments171['default'] = NULL;
$arguments171['htmlEscape'] = NULL;
$arguments171['arguments'] = NULL;
$arguments171['extensionName'] = NULL;
$renderChildrenClosure172 = function() {return NULL;};

$output166 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output166 .= '</td>
								<td nowrap="nowrap" class="col-control">&nbsp;</td>
								</tr>
								</thead>
								<tbody>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments173 = array();
$arguments173['each'] = $currentVariableContainer->getOrNull('backendLayouts');
$arguments173['as'] = 'layout';
$arguments173['key'] = '';
$arguments173['reverse'] = false;
$arguments173['iteration'] = NULL;
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output175 = '';

$output175 .= '
									<tr>
										<td>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments176 = array();
// Rendering Boolean node
$arguments176['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('layout'), 'icon', $renderingContext));
$arguments176['then'] = NULL;
$arguments176['else'] = NULL;
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output178 = '';

$output178 .= '
										<img src="/uploads/media/';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments179 = array();
$arguments179['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('layout'), 'icon', $renderingContext);
$arguments179['keepQuotes'] = false;
$arguments179['encoding'] = NULL;
$arguments179['doubleEncode'] = true;
$renderChildrenClosure180 = function() {return NULL;};
$value181 = ($arguments179['value'] !== NULL ? $arguments179['value'] : $renderChildrenClosure180());

$output178 .= (!is_string($value181) ? $value181 : htmlspecialchars($value181, ($arguments179['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments179['encoding'] !== NULL ? $arguments179['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments179['doubleEncode']));

$output178 .= '" />
									';
return $output178;
};

$output175 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output175 .= '</td>
									<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments182 = array();
$arguments182['action'] = 'edit';
// Rendering Array
$array183 = array();
$array183['layout'] = $currentVariableContainer->getOrNull('layout');
$arguments182['arguments'] = $array183;
$arguments182['additionalAttributes'] = NULL;
$arguments182['data'] = NULL;
$arguments182['controller'] = NULL;
$arguments182['extensionName'] = NULL;
$arguments182['pluginName'] = NULL;
$arguments182['pageUid'] = NULL;
$arguments182['pageType'] = 0;
$arguments182['noCache'] = false;
$arguments182['noCacheHash'] = false;
$arguments182['section'] = '';
$arguments182['format'] = '';
$arguments182['linkAccessRestrictedPages'] = false;
$arguments182['additionalParams'] = array (
);
$arguments182['absolute'] = false;
$arguments182['addQueryString'] = false;
$arguments182['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments182['addQueryStringMethod'] = NULL;
$arguments182['class'] = NULL;
$arguments182['dir'] = NULL;
$arguments182['id'] = NULL;
$arguments182['lang'] = NULL;
$arguments182['style'] = NULL;
$arguments182['title'] = NULL;
$arguments182['accesskey'] = NULL;
$arguments182['tabindex'] = NULL;
$arguments182['onclick'] = NULL;
$arguments182['name'] = NULL;
$arguments182['rel'] = NULL;
$arguments182['rev'] = NULL;
$arguments182['target'] = NULL;
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output185 = '';

$output185 .= '<p><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments186 = array();
$arguments186['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('layout'), 'title', $renderingContext);
$arguments186['keepQuotes'] = false;
$arguments186['encoding'] = NULL;
$arguments186['doubleEncode'] = true;
$renderChildrenClosure187 = function() {return NULL;};
$value188 = ($arguments186['value'] !== NULL ? $arguments186['value'] : $renderChildrenClosure187());

$output185 .= (!is_string($value188) ? $value188 : htmlspecialchars($value188, ($arguments186['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments186['encoding'] !== NULL ? $arguments186['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments186['doubleEncode']));

$output185 .= '</strong><br />';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments189 = array();
$arguments189['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('layout'), 'uid', $renderingContext);
$arguments189['keepQuotes'] = false;
$arguments189['encoding'] = NULL;
$arguments189['doubleEncode'] = true;
$renderChildrenClosure190 = function() {return NULL;};
$value191 = ($arguments189['value'] !== NULL ? $arguments189['value'] : $renderChildrenClosure190());

$output185 .= (!is_string($value191) ? $value191 : htmlspecialchars($value191, ($arguments189['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments189['encoding'] !== NULL ? $arguments189['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments189['doubleEncode']));

$output185 .= '</p>';
return $output185;
};
$viewHelper192 = $self->getViewHelper('$viewHelper192', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper192->setArguments($arguments182);
$viewHelper192->setRenderingContext($renderingContext);
$viewHelper192->setRenderChildrenClosure($renderChildrenClosure184);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output175 .= $viewHelper192->initializeArgumentsAndRender();

$output175 .= '</td>
									<td><p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments193 = array();
$arguments193['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('layout'), 'description', $renderingContext);
$arguments193['keepQuotes'] = false;
$arguments193['encoding'] = NULL;
$arguments193['doubleEncode'] = true;
$renderChildrenClosure194 = function() {return NULL;};
$value195 = ($arguments193['value'] !== NULL ? $arguments193['value'] : $renderChildrenClosure194());

$output175 .= (!is_string($value195) ? $value195 : htmlspecialchars($value195, ($arguments193['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments193['encoding'] !== NULL ? $arguments193['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments193['doubleEncode']));

$output175 .= '</p></td>
									<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments196 = array();
$arguments196['action'] = 'edit';
// Rendering Array
$array197 = array();
$array197['layout'] = $currentVariableContainer->getOrNull('layout');
$arguments196['arguments'] = $array197;
$arguments196['class'] = 'btn btn-default';
$arguments196['additionalAttributes'] = NULL;
$arguments196['data'] = NULL;
$arguments196['controller'] = NULL;
$arguments196['extensionName'] = NULL;
$arguments196['pluginName'] = NULL;
$arguments196['pageUid'] = NULL;
$arguments196['pageType'] = 0;
$arguments196['noCache'] = false;
$arguments196['noCacheHash'] = false;
$arguments196['section'] = '';
$arguments196['format'] = '';
$arguments196['linkAccessRestrictedPages'] = false;
$arguments196['additionalParams'] = array (
);
$arguments196['absolute'] = false;
$arguments196['addQueryString'] = false;
$arguments196['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments196['addQueryStringMethod'] = NULL;
$arguments196['dir'] = NULL;
$arguments196['id'] = NULL;
$arguments196['lang'] = NULL;
$arguments196['style'] = NULL;
$arguments196['title'] = NULL;
$arguments196['accesskey'] = NULL;
$arguments196['tabindex'] = NULL;
$arguments196['onclick'] = NULL;
$arguments196['name'] = NULL;
$arguments196['rel'] = NULL;
$arguments196['rev'] = NULL;
$arguments196['target'] = NULL;
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments199 = array();
$arguments199['identifier'] = 'actions-document-open';
$arguments199['size'] = 'small';
$arguments199['overlay'] = NULL;
$arguments199['state'] = 'default';
$arguments199['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure200 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);
};
$viewHelper201 = $self->getViewHelper('$viewHelper201', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper201->setArguments($arguments196);
$viewHelper201->setRenderingContext($renderingContext);
$viewHelper201->setRenderChildrenClosure($renderChildrenClosure198);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output175 .= $viewHelper201->initializeArgumentsAndRender();

$output175 .= '</td>
									</tr>
								';
return $output175;
};

$output166 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output166 .= '
								</tbody>
							</table>
					';
return $output166;
};

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments111, $renderChildrenClosure114, $renderingContext);

$output104 .= '
			</div>
		</div>
	</div>
</div>
';
return $output104;
};

$output98 .= '';


return $output98;
}


}
#1462875002    61772     