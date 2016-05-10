<?php
class FluidCache_Powermail_Module_partial_Module_Export_e13edee587d539b320f5fdb87ed1088741f4780e extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

<div class="export_icons" >
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments1 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments2 = array();
$arguments2['path'] = 'Image/icon_csv.gif';
$arguments2['extensionName'] = NULL;
$arguments2['absolute'] = false;
$renderChildrenClosure3 = function() {return NULL;};
$arguments1['src'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);
$arguments1['alt'] = 'CSV';
$arguments1['class'] = 'export_icon export_icon_csv';
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['width'] = NULL;
$arguments1['height'] = NULL;
$arguments1['minWidth'] = NULL;
$arguments1['minHeight'] = NULL;
$arguments1['maxWidth'] = NULL;
$arguments1['maxHeight'] = NULL;
$arguments1['treatIdAsReference'] = false;
$arguments1['image'] = NULL;
$arguments1['crop'] = NULL;
$arguments1['absolute'] = false;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['ismap'] = NULL;
$arguments1['longdesc'] = NULL;
$arguments1['usemap'] = NULL;
$renderChildrenClosure4 = function() {return NULL;};
$viewHelper5 = $self->getViewHelper('$viewHelper5', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper5->setArguments($arguments1);
$viewHelper5->setRenderingContext($renderingContext);
$viewHelper5->setRenderChildrenClosure($renderChildrenClosure4);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output0 .= $viewHelper5->initializeArgumentsAndRender();

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments6 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments7 = array();
$arguments7['path'] = 'Image/icon_xls.gif';
$arguments7['extensionName'] = NULL;
$arguments7['absolute'] = false;
$renderChildrenClosure8 = function() {return NULL;};
$arguments6['src'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);
$arguments6['alt'] = 'XLS';
$arguments6['class'] = 'export_icon export_icon_xls';
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['width'] = NULL;
$arguments6['height'] = NULL;
$arguments6['minWidth'] = NULL;
$arguments6['minHeight'] = NULL;
$arguments6['maxWidth'] = NULL;
$arguments6['maxHeight'] = NULL;
$arguments6['treatIdAsReference'] = false;
$arguments6['image'] = NULL;
$arguments6['crop'] = NULL;
$arguments6['absolute'] = false;
$arguments6['dir'] = NULL;
$arguments6['id'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$arguments6['ismap'] = NULL;
$arguments6['longdesc'] = NULL;
$arguments6['usemap'] = NULL;
$renderChildrenClosure9 = function() {return NULL;};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper10->setArguments($arguments6);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output0 .= $viewHelper10->initializeArgumentsAndRender();

$output0 .= '
</div>

<h4 class="extended_export_title powermail-close">
	<span class="t3-icon t3-icon-actions t3-icon-actions-view t3-icon-move-down collapseIcon">&nbsp;</span>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments11 = array();
$arguments11['key'] = 'BackendListFilterExtendedExport';
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$renderChildrenClosure12 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '
</h4>


<fieldset class="extended_export powermail-close">

	<div class="extended_export_inner">

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments13 = array();
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			Left column with selected fields for export
		';
};

$output0 .= '';

$output0 .= '
		<div class="extended_export_inner_left">
			<label for="export_field_selection" class="export_field_selection_label">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments15 = array();
$arguments15['key'] = 'BackendListFilterExtendedExportLeftLabel';
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
			</label>
			<ul class="extended_export_field connected" id="export_field_selection">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments17 = array();
$arguments17['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('firstForm'), 'pages', $renderingContext);
$arguments17['as'] = 'page';
$arguments17['key'] = '';
$arguments17['reverse'] = false;
$arguments17['iteration'] = NULL;
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output19 = '';

$output19 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments20 = array();
$arguments20['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'fields', $renderingContext);
$arguments20['as'] = 'field';
$arguments20['key'] = '';
$arguments20['reverse'] = false;
$arguments20['iteration'] = NULL;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments23 = array();
// Rendering Boolean node
$arguments23['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'advancedFieldType', $renderingContext));
$arguments23['then'] = NULL;
$arguments23['else'] = NULL;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output25 = '';

$output25 .= '
							<li id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments26 = array();
$arguments26['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'uid', $renderingContext);
$arguments26['keepQuotes'] = false;
$arguments26['encoding'] = NULL;
$arguments26['doubleEncode'] = true;
$renderChildrenClosure27 = function() {return NULL;};
$value28 = ($arguments26['value'] !== NULL ? $arguments26['value'] : $renderChildrenClosure27());

$output25 .= (!is_string($value28) ? $value28 : htmlspecialchars($value28, ($arguments26['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments26['encoding'] !== NULL ? $arguments26['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments26['doubleEncode']));

$output25 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments29 = array();
$arguments29['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'title', $renderingContext);
$arguments29['keepQuotes'] = false;
$arguments29['encoding'] = NULL;
$arguments29['doubleEncode'] = true;
$renderChildrenClosure30 = function() {return NULL;};
$value31 = ($arguments29['value'] !== NULL ? $arguments29['value'] : $renderChildrenClosure30());

$output25 .= (!is_string($value31) ? $value31 : htmlspecialchars($value31, ($arguments29['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments29['encoding'] !== NULL ? $arguments29['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments29['doubleEncode']));

$output25 .= ' <span class="info">(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments32 = array();
$arguments32['key'] = 'FormField';
$arguments32['id'] = NULL;
$arguments32['default'] = NULL;
$arguments32['htmlEscape'] = NULL;
$arguments32['arguments'] = NULL;
$arguments32['extensionName'] = NULL;
$renderChildrenClosure33 = function() {return NULL;};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output25 .= ')</span>
							</li>
						';
return $output25;
};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
					';
return $output22;
};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
				';
return $output19;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '
			</ul>
		</div>

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments34 = array();
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			Right column with pool of fields
		';
};

$output0 .= '';

$output0 .= '
		<div class="extended_export_inner_right">
			<label for="export_field_selection_container" class="export_field_selection_container_label">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments36 = array();
$arguments36['key'] = 'BackendListFilterExtendedExportRightLabel';
$arguments36['id'] = NULL;
$arguments36['default'] = NULL;
$arguments36['htmlEscape'] = NULL;
$arguments36['arguments'] = NULL;
$arguments36['extensionName'] = NULL;
$renderChildrenClosure37 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output0 .= '
			</label>
			<ul class="extended_export_field_container connected" id="export_field_selection_container" style="min-height: 20px;">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments38 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments39 = array();
$arguments39['table'] = 'tx_powermail_domain_model_mails';
$arguments39['field'] = 'crdate';
$renderChildrenClosure40 = function() {return NULL;};
$viewHelper41 = $self->getViewHelper('$viewHelper41', $renderingContext, 'In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper');
$viewHelper41->setArguments($arguments39);
$viewHelper41->setRenderingContext($renderingContext);
$viewHelper41->setRenderChildrenClosure($renderChildrenClosure40);
// End of ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments38['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper41->initializeArgumentsAndRender());
$arguments38['then'] = NULL;
$arguments38['else'] = NULL;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output43 = '';

$output43 .= '
					<li id="crdate">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments44 = array();
$arguments44['key'] = '\\In2code\\Powermail\\Domain\\Model\\Mail.date';
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['htmlEscape'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$renderChildrenClosure45 = function() {return NULL;};

$output43 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output43 .= '
					</li>
				';
return $output43;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, $renderChildrenClosure42, $renderingContext);

$output0 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments46 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments47 = array();
$arguments47['table'] = 'tx_powermail_domain_model_mails';
$arguments47['field'] = 'sender_name';
$renderChildrenClosure48 = function() {return NULL;};
$viewHelper49 = $self->getViewHelper('$viewHelper49', $renderingContext, 'In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper');
$viewHelper49->setArguments($arguments47);
$viewHelper49->setRenderingContext($renderingContext);
$viewHelper49->setRenderChildrenClosure($renderChildrenClosure48);
// End of ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments46['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper49->initializeArgumentsAndRender());
$arguments46['then'] = NULL;
$arguments46['else'] = NULL;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output51 = '';

$output51 .= '
					<li id="sender_name">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments52 = array();
$arguments52['key'] = '\\In2code\\Powermail\\Domain\\Model\\Mail.senderName';
$arguments52['id'] = NULL;
$arguments52['default'] = NULL;
$arguments52['htmlEscape'] = NULL;
$arguments52['arguments'] = NULL;
$arguments52['extensionName'] = NULL;
$renderChildrenClosure53 = function() {return NULL;};

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
					</li>
				';
return $output51;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments46, $renderChildrenClosure50, $renderingContext);

$output0 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments54 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments55 = array();
$arguments55['table'] = 'tx_powermail_domain_model_mails';
$arguments55['field'] = 'sender_mail';
$renderChildrenClosure56 = function() {return NULL;};
$viewHelper57 = $self->getViewHelper('$viewHelper57', $renderingContext, 'In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper');
$viewHelper57->setArguments($arguments55);
$viewHelper57->setRenderingContext($renderingContext);
$viewHelper57->setRenderChildrenClosure($renderChildrenClosure56);
// End of ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments54['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper57->initializeArgumentsAndRender());
$arguments54['then'] = NULL;
$arguments54['else'] = NULL;
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output59 = '';

$output59 .= '
					<li id="sender_mail">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments60 = array();
$arguments60['key'] = '\\In2code\\Powermail\\Domain\\Model\\Mail.senderMail';
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['htmlEscape'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$renderChildrenClosure61 = function() {return NULL;};

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
					</li>
				';
return $output59;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments54, $renderChildrenClosure58, $renderingContext);

$output0 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments62 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments63 = array();
$arguments63['table'] = 'tx_powermail_domain_model_mails';
$arguments63['field'] = 'receiver_mail';
$renderChildrenClosure64 = function() {return NULL;};
$viewHelper65 = $self->getViewHelper('$viewHelper65', $renderingContext, 'In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper');
$viewHelper65->setArguments($arguments63);
$viewHelper65->setRenderingContext($renderingContext);
$viewHelper65->setRenderChildrenClosure($renderChildrenClosure64);
// End of ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments62['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper65->initializeArgumentsAndRender());
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output67 = '';

$output67 .= '
					<li id="receiver_mail">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments68 = array();
$arguments68['key'] = '\\In2code\\Powermail\\Domain\\Model\\Mail.receiverMail';
$arguments68['id'] = NULL;
$arguments68['default'] = NULL;
$arguments68['htmlEscape'] = NULL;
$arguments68['arguments'] = NULL;
$arguments68['extensionName'] = NULL;
$renderChildrenClosure69 = function() {return NULL;};

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '
					</li>
				';
return $output67;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure66, $renderingContext);

$output0 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments70 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments71 = array();
$arguments71['table'] = 'tx_powermail_domain_model_mails';
$arguments71['field'] = 'subject';
$renderChildrenClosure72 = function() {return NULL;};
$viewHelper73 = $self->getViewHelper('$viewHelper73', $renderingContext, 'In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper');
$viewHelper73->setArguments($arguments71);
$viewHelper73->setRenderingContext($renderingContext);
$viewHelper73->setRenderChildrenClosure($renderChildrenClosure72);
// End of ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments70['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper73->initializeArgumentsAndRender());
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output75 = '';

$output75 .= '
					<li id="subject">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments76 = array();
$arguments76['key'] = '\\In2code\\Powermail\\Domain\\Model\\Mail.subject';
$arguments76['id'] = NULL;
$arguments76['default'] = NULL;
$arguments76['htmlEscape'] = NULL;
$arguments76['arguments'] = NULL;
$arguments76['extensionName'] = NULL;
$renderChildrenClosure77 = function() {return NULL;};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
					</li>
				';
return $output75;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure74, $renderingContext);

$output0 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments78 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Condition\IsMarketingInformationEnabledGloballyViewHelper
$arguments79 = array();
$renderChildrenClosure80 = function() {return NULL;};
$viewHelper81 = $self->getViewHelper('$viewHelper81', $renderingContext, 'In2code\Powermail\ViewHelpers\Condition\IsMarketingInformationEnabledGloballyViewHelper');
$viewHelper81->setArguments($arguments79);
$viewHelper81->setRenderingContext($renderingContext);
$viewHelper81->setRenderChildrenClosure($renderChildrenClosure80);
// End of ViewHelper In2code\Powermail\ViewHelpers\Condition\IsMarketingInformationEnabledGloballyViewHelper
$arguments78['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper81->initializeArgumentsAndRender());
$arguments78['then'] = NULL;
$arguments78['else'] = NULL;
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output83 = '';

$output83 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments84 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments85 = array();
$arguments85['table'] = 'tx_powermail_domain_model_mails';
$arguments85['field'] = 'marketing_referer_domain';
$renderChildrenClosure86 = function() {return NULL;};
$viewHelper87 = $self->getViewHelper('$viewHelper87', $renderingContext, 'In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper');
$viewHelper87->setArguments($arguments85);
$viewHelper87->setRenderingContext($renderingContext);
$viewHelper87->setRenderChildrenClosure($renderChildrenClosure86);
// End of ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments84['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper87->initializeArgumentsAndRender());
$arguments84['then'] = NULL;
$arguments84['else'] = NULL;
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output89 = '';

$output89 .= '
						<li id="marketing_referer_domain">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments90 = array();
$arguments90['key'] = '\\In2code\\Powermail\\Domain\\Model\\Mail.marketingRefererDomain';
$arguments90['id'] = NULL;
$arguments90['default'] = NULL;
$arguments90['htmlEscape'] = NULL;
$arguments90['arguments'] = NULL;
$arguments90['extensionName'] = NULL;
$renderChildrenClosure91 = function() {return NULL;};

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
						</li>
					';
return $output89;
};

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments84, $renderChildrenClosure88, $renderingContext);

$output83 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments92 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments93 = array();
$arguments93['table'] = 'tx_powermail_domain_model_mails';
$arguments93['field'] = 'marketing_referer';
$renderChildrenClosure94 = function() {return NULL;};
$viewHelper95 = $self->getViewHelper('$viewHelper95', $renderingContext, 'In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper');
$viewHelper95->setArguments($arguments93);
$viewHelper95->setRenderingContext($renderingContext);
$viewHelper95->setRenderChildrenClosure($renderChildrenClosure94);
// End of ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments92['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper95->initializeArgumentsAndRender());
$arguments92['then'] = NULL;
$arguments92['else'] = NULL;
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output97 = '';

$output97 .= '
						<li id="marketing_referer">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments98 = array();
$arguments98['key'] = '\\In2code\\Powermail\\Domain\\Model\\Mail.marketingReferer';
$arguments98['id'] = NULL;
$arguments98['default'] = NULL;
$arguments98['htmlEscape'] = NULL;
$arguments98['arguments'] = NULL;
$arguments98['extensionName'] = NULL;
$renderChildrenClosure99 = function() {return NULL;};

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output97 .= '
						</li>
					';
return $output97;
};

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments92, $renderChildrenClosure96, $renderingContext);

$output83 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments100 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments101 = array();
$arguments101['table'] = 'tx_powermail_domain_model_mails';
$arguments101['field'] = 'marketing_frontend_language';
$renderChildrenClosure102 = function() {return NULL;};
$viewHelper103 = $self->getViewHelper('$viewHelper103', $renderingContext, 'In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper');
$viewHelper103->setArguments($arguments101);
$viewHelper103->setRenderingContext($renderingContext);
$viewHelper103->setRenderChildrenClosure($renderChildrenClosure102);
// End of ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments100['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper103->initializeArgumentsAndRender());
$arguments100['then'] = NULL;
$arguments100['else'] = NULL;
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output105 = '';

$output105 .= '
						<li id="marketing_frontend_language">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments106 = array();
$arguments106['key'] = '\\In2code\\Powermail\\Domain\\Model\\Mail.marketingFrontendLanguage';
$arguments106['id'] = NULL;
$arguments106['default'] = NULL;
$arguments106['htmlEscape'] = NULL;
$arguments106['arguments'] = NULL;
$arguments106['extensionName'] = NULL;
$renderChildrenClosure107 = function() {return NULL;};

$output105 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
						</li>
					';
return $output105;
};

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments100, $renderChildrenClosure104, $renderingContext);

$output83 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments108 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments109 = array();
$arguments109['table'] = 'tx_powermail_domain_model_mails';
$arguments109['field'] = 'marketing_browser_language';
$renderChildrenClosure110 = function() {return NULL;};
$viewHelper111 = $self->getViewHelper('$viewHelper111', $renderingContext, 'In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper');
$viewHelper111->setArguments($arguments109);
$viewHelper111->setRenderingContext($renderingContext);
$viewHelper111->setRenderChildrenClosure($renderChildrenClosure110);
// End of ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments108['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper111->initializeArgumentsAndRender());
$arguments108['then'] = NULL;
$arguments108['else'] = NULL;
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output113 = '';

$output113 .= '
						<li id="marketing_browser_language">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments114 = array();
$arguments114['key'] = '\\In2code\\Powermail\\Domain\\Model\\Mail.marketingBrowserLanguage';
$arguments114['id'] = NULL;
$arguments114['default'] = NULL;
$arguments114['htmlEscape'] = NULL;
$arguments114['arguments'] = NULL;
$arguments114['extensionName'] = NULL;
$renderChildrenClosure115 = function() {return NULL;};

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output113 .= '
						</li>
					';
return $output113;
};

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments108, $renderChildrenClosure112, $renderingContext);

$output83 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments116 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments117 = array();
$arguments117['table'] = 'tx_powermail_domain_model_mails';
$arguments117['field'] = 'marketing_country';
$renderChildrenClosure118 = function() {return NULL;};
$viewHelper119 = $self->getViewHelper('$viewHelper119', $renderingContext, 'In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper');
$viewHelper119->setArguments($arguments117);
$viewHelper119->setRenderingContext($renderingContext);
$viewHelper119->setRenderChildrenClosure($renderChildrenClosure118);
// End of ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments116['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper119->initializeArgumentsAndRender());
$arguments116['then'] = NULL;
$arguments116['else'] = NULL;
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output121 = '';

$output121 .= '
						<li id="marketing_country">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments122 = array();
$arguments122['key'] = '\\In2code\\Powermail\\Domain\\Model\\Mail.marketingCountry';
$arguments122['id'] = NULL;
$arguments122['default'] = NULL;
$arguments122['htmlEscape'] = NULL;
$arguments122['arguments'] = NULL;
$arguments122['extensionName'] = NULL;
$renderChildrenClosure123 = function() {return NULL;};

$output121 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output121 .= '
						</li>
					';
return $output121;
};

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments116, $renderChildrenClosure120, $renderingContext);

$output83 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments124 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments125 = array();
$arguments125['table'] = 'tx_powermail_domain_model_mails';
$arguments125['field'] = 'marketing_mobile_device';
$renderChildrenClosure126 = function() {return NULL;};
$viewHelper127 = $self->getViewHelper('$viewHelper127', $renderingContext, 'In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper');
$viewHelper127->setArguments($arguments125);
$viewHelper127->setRenderingContext($renderingContext);
$viewHelper127->setRenderChildrenClosure($renderChildrenClosure126);
// End of ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments124['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper127->initializeArgumentsAndRender());
$arguments124['then'] = NULL;
$arguments124['else'] = NULL;
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output129 = '';

$output129 .= '
						<li id="marketing_mobile_device">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments130 = array();
$arguments130['key'] = '\\In2code\\Powermail\\Domain\\Model\\Mail.marketingMobileDevice';
$arguments130['id'] = NULL;
$arguments130['default'] = NULL;
$arguments130['htmlEscape'] = NULL;
$arguments130['arguments'] = NULL;
$arguments130['extensionName'] = NULL;
$renderChildrenClosure131 = function() {return NULL;};

$output129 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '
						</li>
					';
return $output129;
};

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments124, $renderChildrenClosure128, $renderingContext);

$output83 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments132 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments133 = array();
$arguments133['table'] = 'tx_powermail_domain_model_mails';
$arguments133['field'] = 'marketing_mobile_device';
$renderChildrenClosure134 = function() {return NULL;};
$viewHelper135 = $self->getViewHelper('$viewHelper135', $renderingContext, 'In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper');
$viewHelper135->setArguments($arguments133);
$viewHelper135->setRenderingContext($renderingContext);
$viewHelper135->setRenderChildrenClosure($renderChildrenClosure134);
// End of ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments132['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper135->initializeArgumentsAndRender());
$arguments132['then'] = NULL;
$arguments132['else'] = NULL;
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output137 = '';

$output137 .= '
						<li id="marketing_page_funnel">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments138 = array();
$arguments138['key'] = '\\In2code\\Powermail\\Domain\\Model\\Mail.marketingPageFunnel';
$arguments138['id'] = NULL;
$arguments138['default'] = NULL;
$arguments138['htmlEscape'] = NULL;
$arguments138['arguments'] = NULL;
$arguments138['extensionName'] = NULL;
$renderChildrenClosure139 = function() {return NULL;};

$output137 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '
						</li>
					';
return $output137;
};

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments132, $renderChildrenClosure136, $renderingContext);

$output83 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments140 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments141 = array();
$arguments141['table'] = 'tx_powermail_domain_model_mails';
$arguments141['field'] = 'user_agent';
$renderChildrenClosure142 = function() {return NULL;};
$viewHelper143 = $self->getViewHelper('$viewHelper143', $renderingContext, 'In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper');
$viewHelper143->setArguments($arguments141);
$viewHelper143->setRenderingContext($renderingContext);
$viewHelper143->setRenderChildrenClosure($renderChildrenClosure142);
// End of ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments140['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper143->initializeArgumentsAndRender());
$arguments140['then'] = NULL;
$arguments140['else'] = NULL;
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output145 = '';

$output145 .= '
						<li id="user_agent">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments146 = array();
$arguments146['key'] = '\\In2code\\Powermail\\Domain\\Model\\Mail.userAgent';
$arguments146['id'] = NULL;
$arguments146['default'] = NULL;
$arguments146['htmlEscape'] = NULL;
$arguments146['arguments'] = NULL;
$arguments146['extensionName'] = NULL;
$renderChildrenClosure147 = function() {return NULL;};

$output145 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output145 .= '
						</li>
					';
return $output145;
};

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments140, $renderChildrenClosure144, $renderingContext);

$output83 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments148 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments149 = array();
$arguments149['table'] = 'tx_powermail_domain_model_mails';
$arguments149['field'] = 'time';
$renderChildrenClosure150 = function() {return NULL;};
$viewHelper151 = $self->getViewHelper('$viewHelper151', $renderingContext, 'In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper');
$viewHelper151->setArguments($arguments149);
$viewHelper151->setRenderingContext($renderingContext);
$viewHelper151->setRenderChildrenClosure($renderChildrenClosure150);
// End of ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments148['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper151->initializeArgumentsAndRender());
$arguments148['then'] = NULL;
$arguments148['else'] = NULL;
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output153 = '';

$output153 .= '
						<li id="time">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments154 = array();
$arguments154['key'] = '\\In2code\\Powermail\\Domain\\Model\\Mail.time';
$arguments154['id'] = NULL;
$arguments154['default'] = NULL;
$arguments154['htmlEscape'] = NULL;
$arguments154['arguments'] = NULL;
$arguments154['extensionName'] = NULL;
$renderChildrenClosure155 = function() {return NULL;};

$output153 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output153 .= '
						</li>
					';
return $output153;
};

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments148, $renderChildrenClosure152, $renderingContext);

$output83 .= '
				';
return $output83;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments78, $renderChildrenClosure82, $renderingContext);

$output0 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments156 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Condition\IsIpInformationEnabledGloballyViewHelper
$arguments157 = array();
$renderChildrenClosure158 = function() {return NULL;};
$viewHelper159 = $self->getViewHelper('$viewHelper159', $renderingContext, 'In2code\Powermail\ViewHelpers\Condition\IsIpInformationEnabledGloballyViewHelper');
$viewHelper159->setArguments($arguments157);
$viewHelper159->setRenderingContext($renderingContext);
$viewHelper159->setRenderChildrenClosure($renderChildrenClosure158);
// End of ViewHelper In2code\Powermail\ViewHelpers\Condition\IsIpInformationEnabledGloballyViewHelper
$arguments156['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper159->initializeArgumentsAndRender());
$arguments156['then'] = NULL;
$arguments156['else'] = NULL;
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output161 = '';

$output161 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments162 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments163 = array();
$arguments163['table'] = 'tx_powermail_domain_model_mails';
$arguments163['field'] = 'sender_ip';
$renderChildrenClosure164 = function() {return NULL;};
$viewHelper165 = $self->getViewHelper('$viewHelper165', $renderingContext, 'In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper');
$viewHelper165->setArguments($arguments163);
$viewHelper165->setRenderingContext($renderingContext);
$viewHelper165->setRenderChildrenClosure($renderChildrenClosure164);
// End of ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments162['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper165->initializeArgumentsAndRender());
$arguments162['then'] = NULL;
$arguments162['else'] = NULL;
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output167 = '';

$output167 .= '
						<li id="sender_ip">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments168 = array();
$arguments168['key'] = '\\In2code\\Powermail\\Domain\\Model\\Mail.senderIp';
$arguments168['id'] = NULL;
$arguments168['default'] = NULL;
$arguments168['htmlEscape'] = NULL;
$arguments168['arguments'] = NULL;
$arguments168['extensionName'] = NULL;
$renderChildrenClosure169 = function() {return NULL;};

$output167 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output167 .= '
						</li>
					';
return $output167;
};

$output161 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments162, $renderChildrenClosure166, $renderingContext);

$output161 .= '
				';
return $output161;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments156, $renderChildrenClosure160, $renderingContext);

$output0 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments170 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments171 = array();
$arguments171['table'] = 'tx_powermail_domain_model_mails';
$arguments171['field'] = 'uid';
$renderChildrenClosure172 = function() {return NULL;};
$viewHelper173 = $self->getViewHelper('$viewHelper173', $renderingContext, 'In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper');
$viewHelper173->setArguments($arguments171);
$viewHelper173->setRenderingContext($renderingContext);
$viewHelper173->setRenderChildrenClosure($renderChildrenClosure172);
// End of ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments170['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper173->initializeArgumentsAndRender());
$arguments170['then'] = NULL;
$arguments170['else'] = NULL;
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output175 = '';

$output175 .= '
					<li id="uid">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments176 = array();
$arguments176['key'] = '\\In2code\\Powermail\\Domain\\Model\\Mail.uid';
$arguments176['id'] = NULL;
$arguments176['default'] = NULL;
$arguments176['htmlEscape'] = NULL;
$arguments176['arguments'] = NULL;
$arguments176['extensionName'] = NULL;
$renderChildrenClosure177 = function() {return NULL;};

$output175 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output175 .= '
					</li>
				';
return $output175;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments170, $renderChildrenClosure174, $renderingContext);

$output0 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments178 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments179 = array();
$arguments179['table'] = 'tx_powermail_domain_model_mails';
$arguments179['field'] = 'feuser';
$renderChildrenClosure180 = function() {return NULL;};
$viewHelper181 = $self->getViewHelper('$viewHelper181', $renderingContext, 'In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper');
$viewHelper181->setArguments($arguments179);
$viewHelper181->setRenderingContext($renderingContext);
$viewHelper181->setRenderChildrenClosure($renderChildrenClosure180);
// End of ViewHelper In2code\Powermail\ViewHelpers\Condition\IsBackendUserAllowedToViewFieldViewHelper
$arguments178['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper181->initializeArgumentsAndRender());
$arguments178['then'] = NULL;
$arguments178['else'] = NULL;
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output183 = '';

$output183 .= '
					<li id="feuser">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments184 = array();
$arguments184['key'] = '\\In2code\\Powermail\\Domain\\Model\\Mail.feuser';
$arguments184['id'] = NULL;
$arguments184['default'] = NULL;
$arguments184['htmlEscape'] = NULL;
$arguments184['arguments'] = NULL;
$arguments184['extensionName'] = NULL;
$renderChildrenClosure185 = function() {return NULL;};

$output183 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output183 .= '
					</li>
				';
return $output183;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments178, $renderChildrenClosure182, $renderingContext);

$output0 .= '
			</ul>
		</div>
	</div>

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments186 = array();
$arguments186['name'] = 'export[fields]';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments187 = array();
$arguments187['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('firstForm'), 'pages', $renderingContext);
$arguments187['as'] = 'page';
$arguments187['key'] = '';
$arguments187['reverse'] = false;
$arguments187['iteration'] = NULL;
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments189 = array();
$arguments189['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'fields', $renderingContext);
$arguments189['as'] = 'field';
$arguments189['key'] = '';
$arguments189['reverse'] = false;
$arguments189['iteration'] = NULL;
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments191 = array();
// Rendering Boolean node
$arguments191['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'advancedFieldType', $renderingContext));
$arguments191['then'] = NULL;
$arguments191['else'] = NULL;
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output193 = '';

$output193 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'uid', $renderingContext);

$output193 .= ',';
return $output193;
};
return TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);
};
return TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);
};
$arguments186['value'] = TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);
$arguments186['id'] = 'export_fields';
$arguments186['additionalAttributes'] = NULL;
$arguments186['data'] = NULL;
$arguments186['property'] = NULL;
$arguments186['class'] = NULL;
$arguments186['dir'] = NULL;
$arguments186['lang'] = NULL;
$arguments186['style'] = NULL;
$arguments186['title'] = NULL;
$arguments186['accesskey'] = NULL;
$arguments186['tabindex'] = NULL;
$arguments186['onclick'] = NULL;
$renderChildrenClosure194 = function() {return NULL;};
$viewHelper195 = $self->getViewHelper('$viewHelper195', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper195->setArguments($arguments186);
$viewHelper195->setRenderingContext($renderingContext);
$viewHelper195->setRenderChildrenClosure($renderChildrenClosure194);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output0 .= $viewHelper195->initializeArgumentsAndRender();

$output0 .= '

	</fieldset>
';


return $output0;
}


}
#1462872074    52328     