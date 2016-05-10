<?php
class FluidCache_Typo3Forum_Topic_action_new_a876534f6f253af49b332e8fb0494107c912bec4 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section main
 */
public function section_b28b7af69320201d1cf206ebf28373980add1451(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments1 = array();
$arguments1['partial'] = 'FormErrors';
$arguments1['section'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['optional'] = false;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

	<h2>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments3 = array();
$arguments3['key'] = 'Topic_New';
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['htmlEscape'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$renderChildrenClosure4 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
	</h2>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments5 = array();
$arguments5['name'] = 'post';
$arguments5['object'] = $currentVariableContainer->getOrNull('post');
$arguments5['controller'] = 'Topic';
$arguments5['action'] = 'create';
$arguments5['id'] = 'topic';
$arguments5['additionalAttributes'] = NULL;
$arguments5['data'] = NULL;
$arguments5['arguments'] = array (
);
$arguments5['extensionName'] = NULL;
$arguments5['pluginName'] = NULL;
$arguments5['pageUid'] = NULL;
$arguments5['pageType'] = 0;
$arguments5['noCache'] = false;
$arguments5['noCacheHash'] = false;
$arguments5['section'] = '';
$arguments5['format'] = '';
$arguments5['additionalParams'] = array (
);
$arguments5['absolute'] = false;
$arguments5['addQueryString'] = false;
$arguments5['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments5['fieldNamePrefix'] = NULL;
$arguments5['actionUri'] = NULL;
$arguments5['objectName'] = NULL;
$arguments5['hiddenFieldClassName'] = NULL;
$arguments5['enctype'] = NULL;
$arguments5['method'] = NULL;
$arguments5['onreset'] = NULL;
$arguments5['onsubmit'] = NULL;
$arguments5['class'] = NULL;
$arguments5['dir'] = NULL;
$arguments5['lang'] = NULL;
$arguments5['style'] = NULL;
$arguments5['title'] = NULL;
$arguments5['accesskey'] = NULL;
$arguments5['tabindex'] = NULL;
$arguments5['onclick'] = NULL;
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output7 = '';

$output7 .= '
		<fieldset>
			<legend>Create a new topic</legend>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments8 = array();
// Rendering Boolean node
$arguments8['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('currentUser'), 'anonymous', $renderingContext));
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output10 = '';

$output10 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments11 = array();
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output13 = '';

$output13 .= '
					';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper
$arguments14 = array();
$arguments14['llLabel'] = 'Post_New_Author';
$arguments14['error'] = 'post.authorName';
$arguments14['errorLLPrefix'] = 'Post_New_Error_Author';
$arguments14['additionalAttributes'] = NULL;
$arguments14['data'] = NULL;
$arguments14['label'] = '';
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output16 = '';

$output16 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments17 = array();
$arguments17['property'] = 'authorName';
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['required'] = false;
$arguments17['type'] = 'text';
$arguments17['name'] = NULL;
$arguments17['value'] = NULL;
$arguments17['autofocus'] = NULL;
$arguments17['disabled'] = NULL;
$arguments17['maxlength'] = NULL;
$arguments17['readonly'] = NULL;
$arguments17['size'] = NULL;
$arguments17['placeholder'] = NULL;
$arguments17['pattern'] = NULL;
$arguments17['errorClass'] = 'f3-form-error';
$arguments17['class'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$renderChildrenClosure18 = function() {return NULL;};
$viewHelper19 = $self->getViewHelper('$viewHelper19', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper19->setArguments($arguments17);
$viewHelper19->setRenderingContext($renderingContext);
$viewHelper19->setRenderChildrenClosure($renderChildrenClosure18);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output16 .= $viewHelper19->initializeArgumentsAndRender();

$output16 .= '
					';
return $output16;
};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper');
$viewHelper20->setArguments($arguments14);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper

$output13 .= $viewHelper20->initializeArgumentsAndRender();

$output13 .= '
				';
return $output13;
};

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
			';
return $output10;
};
$arguments8['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output21 = '';

$output21 .= '
					';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper
$arguments22 = array();
$arguments22['llLabel'] = 'Post_New_Author';
$arguments22['error'] = 'post.authorName';
$arguments22['errorLLPrefix'] = 'Post_New_Error_Author';
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['label'] = '';
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output24 = '';

$output24 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments25 = array();
$arguments25['property'] = 'authorName';
$arguments25['additionalAttributes'] = NULL;
$arguments25['data'] = NULL;
$arguments25['required'] = false;
$arguments25['type'] = 'text';
$arguments25['name'] = NULL;
$arguments25['value'] = NULL;
$arguments25['autofocus'] = NULL;
$arguments25['disabled'] = NULL;
$arguments25['maxlength'] = NULL;
$arguments25['readonly'] = NULL;
$arguments25['size'] = NULL;
$arguments25['placeholder'] = NULL;
$arguments25['pattern'] = NULL;
$arguments25['errorClass'] = 'f3-form-error';
$arguments25['class'] = NULL;
$arguments25['dir'] = NULL;
$arguments25['id'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['title'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['tabindex'] = NULL;
$arguments25['onclick'] = NULL;
$renderChildrenClosure26 = function() {return NULL;};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper27->setArguments($arguments25);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output24 .= $viewHelper27->initializeArgumentsAndRender();

$output24 .= '
					';
return $output24;
};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper');
$viewHelper28->setArguments($arguments22);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper

$output21 .= $viewHelper28->initializeArgumentsAndRender();

$output21 .= '
				';
return $output21;
};

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
			';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper
$arguments29 = array();
$arguments29['llLabel'] = 'Topic_New_Subject';
$arguments29['error'] = 'subject';
$arguments29['errorLLPrefix'] = 'Topic_New_Error_Subject';
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['label'] = '';
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments32 = array();
$arguments32['name'] = 'subject';
$arguments32['value'] = $currentVariableContainer->getOrNull('subject');
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['required'] = false;
$arguments32['type'] = 'text';
$arguments32['property'] = NULL;
$arguments32['autofocus'] = NULL;
$arguments32['disabled'] = NULL;
$arguments32['maxlength'] = NULL;
$arguments32['readonly'] = NULL;
$arguments32['size'] = NULL;
$arguments32['placeholder'] = NULL;
$arguments32['pattern'] = NULL;
$arguments32['errorClass'] = 'f3-form-error';
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$renderChildrenClosure33 = function() {return NULL;};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper34->setArguments($arguments32);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output31 .= $viewHelper34->initializeArgumentsAndRender();

$output31 .= '
			';
return $output31;
};
$viewHelper35 = $self->getViewHelper('$viewHelper35', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper');
$viewHelper35->setArguments($arguments29);
$viewHelper35->setRenderingContext($renderingContext);
$viewHelper35->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper

$output7 .= $viewHelper35->initializeArgumentsAndRender();

$output7 .= '
			';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper
$arguments36 = array();
$arguments36['llLabel'] = 'Topic_New_Text';
$arguments36['error'] = 'post.text';
$arguments36['errorLLPrefix'] = 'Topic_New_Error_Post_Text';
$arguments36['additionalAttributes'] = NULL;
$arguments36['data'] = NULL;
$arguments36['label'] = '';
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
				';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Form\BbCodeEditorViewHelper
$arguments39 = array();
$arguments39['property'] = 'text';
$arguments39['id'] = 'typo3forum_editor';
$arguments39['rows'] = '20';
$arguments39['cols'] = '40';
$arguments39['additionalAttributes'] = NULL;
$arguments39['data'] = NULL;
$arguments39['name'] = NULL;
$arguments39['value'] = NULL;
$arguments39['autofocus'] = NULL;
$arguments39['disabled'] = NULL;
$arguments39['placeholder'] = NULL;
$arguments39['errorClass'] = 'f3-form-error';
$arguments39['class'] = NULL;
$arguments39['dir'] = NULL;
$arguments39['lang'] = NULL;
$arguments39['style'] = NULL;
$arguments39['title'] = NULL;
$arguments39['accesskey'] = NULL;
$arguments39['tabindex'] = NULL;
$arguments39['onclick'] = NULL;
$arguments39['configuration'] = 'plugin.tx_typo3forum.settings.textParsing.editorPanel';
$renderChildrenClosure40 = function() {return NULL;};
$viewHelper41 = $self->getViewHelper('$viewHelper41', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Form\BbCodeEditorViewHelper');
$viewHelper41->setArguments($arguments39);
$viewHelper41->setRenderingContext($renderingContext);
$viewHelper41->setRenderChildrenClosure($renderChildrenClosure40);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Form\BbCodeEditorViewHelper

$output38 .= $viewHelper41->initializeArgumentsAndRender();

$output38 .= '
			';
return $output38;
};
$viewHelper42 = $self->getViewHelper('$viewHelper42', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper');
$viewHelper42->setArguments($arguments36);
$viewHelper42->setRenderingContext($renderingContext);
$viewHelper42->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper

$output7 .= $viewHelper42->initializeArgumentsAndRender();

$output7 .= '
			';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Authentication\IfAccessViewHelper
$arguments43 = array();
$arguments43['object'] = $currentVariableContainer->getOrNull('forum');
$arguments43['accessType'] = 'newAttachment';
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output45 = '';

$output45 .= '
				';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper
$arguments46 = array();
$arguments46['llLabel'] = 'Topic_New_Attachments';
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['label'] = '';
$arguments46['error'] = NULL;
$arguments46['errorLLPrefix'] = NULL;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output48 = '';

$output48 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments49 = array();
// Rendering Boolean node
$arguments49['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('post'), 'attachments', $renderingContext));
$arguments49['then'] = NULL;
$arguments49['else'] = NULL;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output51 = '';

$output51 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments52 = array();
$arguments52['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('post'), 'attachments', $renderingContext);
$arguments52['as'] = 'attachment';
$arguments52['key'] = '';
$arguments52['reverse'] = false;
$arguments52['iteration'] = NULL;
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output54 = '';

$output54 .= '
							<div>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments55 = array();
$arguments55['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('attachment'), 'filename', $renderingContext);
$arguments55['keepQuotes'] = false;
$arguments55['encoding'] = NULL;
$arguments55['doubleEncode'] = true;
$renderChildrenClosure56 = function() {return NULL;};
$value57 = ($arguments55['value'] !== NULL ? $arguments55['value'] : $renderChildrenClosure56());

$output54 .= (!is_string($value57) ? $value57 : htmlspecialchars($value57, ($arguments55['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments55['encoding'] !== NULL ? $arguments55['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments55['doubleEncode']));

$output54 .= ',
								';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Format\FileSizeViewHelper
$arguments58 = array();
$arguments58['decimals'] = 2;
$arguments58['decimalSeparator'] = ',';
$arguments58['thousandsSeparator'] = '.';
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments60 = array();
$arguments60['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('attachment'), 'filesize', $renderingContext);
$arguments60['keepQuotes'] = false;
$arguments60['encoding'] = NULL;
$arguments60['doubleEncode'] = true;
$renderChildrenClosure61 = function() {return NULL;};
$value62 = ($arguments60['value'] !== NULL ? $arguments60['value'] : $renderChildrenClosure61());
return (!is_string($value62) ? $value62 : htmlspecialchars($value62, ($arguments60['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments60['encoding'] !== NULL ? $arguments60['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments60['doubleEncode']));
};
$viewHelper63 = $self->getViewHelper('$viewHelper63', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Format\FileSizeViewHelper');
$viewHelper63->setArguments($arguments58);
$viewHelper63->setRenderingContext($renderingContext);
$viewHelper63->setRenderChildrenClosure($renderChildrenClosure59);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Format\FileSizeViewHelper

$output54 .= $viewHelper63->initializeArgumentsAndRender();

$output54 .= '
							</div>
						';
return $output54;
};

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
					';
return $output51;
};

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper
$arguments64 = array();
$arguments64['name'] = 'attachments[]';
$arguments64['additionalAttributes'] = NULL;
$arguments64['data'] = NULL;
$arguments64['value'] = NULL;
$arguments64['property'] = NULL;
$arguments64['disabled'] = NULL;
$arguments64['multiple'] = NULL;
$arguments64['errorClass'] = 'f3-form-error';
$arguments64['class'] = NULL;
$arguments64['dir'] = NULL;
$arguments64['id'] = NULL;
$arguments64['lang'] = NULL;
$arguments64['style'] = NULL;
$arguments64['title'] = NULL;
$arguments64['accesskey'] = NULL;
$arguments64['tabindex'] = NULL;
$arguments64['onclick'] = NULL;
$renderChildrenClosure65 = function() {return NULL;};
$viewHelper66 = $self->getViewHelper('$viewHelper66', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper');
$viewHelper66->setArguments($arguments64);
$viewHelper66->setRenderingContext($renderingContext);
$viewHelper66->setRenderChildrenClosure($renderChildrenClosure65);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper

$output48 .= $viewHelper66->initializeArgumentsAndRender();

$output48 .= '
				';
return $output48;
};
$viewHelper67 = $self->getViewHelper('$viewHelper67', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper');
$viewHelper67->setArguments($arguments46);
$viewHelper67->setRenderingContext($renderingContext);
$viewHelper67->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper

$output45 .= $viewHelper67->initializeArgumentsAndRender();

$output45 .= '
			';
return $output45;
};
$viewHelper68 = $self->getViewHelper('$viewHelper68', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Authentication\IfAccessViewHelper');
$viewHelper68->setArguments($arguments43);
$viewHelper68->setRenderingContext($renderingContext);
$viewHelper68->setRenderChildrenClosure($renderChildrenClosure44);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Authentication\IfAccessViewHelper

$output7 .= $viewHelper68->initializeArgumentsAndRender();

$output7 .= '
			';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper
$arguments69 = array();
$arguments69['llLabel'] = 'Topic_New_Subscribe';
$arguments69['additionalAttributes'] = NULL;
$arguments69['data'] = NULL;
$arguments69['label'] = '';
$arguments69['error'] = NULL;
$arguments69['errorLLPrefix'] = NULL;
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output71 = '';

$output71 .= '
				<label >
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$arguments72 = array();
$arguments72['name'] = 'subscribe';
$arguments72['value'] = '1';
$arguments72['additionalAttributes'] = NULL;
$arguments72['data'] = NULL;
$arguments72['checked'] = NULL;
$arguments72['multiple'] = false;
$arguments72['property'] = NULL;
$arguments72['disabled'] = NULL;
$arguments72['errorClass'] = 'f3-form-error';
$arguments72['class'] = NULL;
$arguments72['dir'] = NULL;
$arguments72['id'] = NULL;
$arguments72['lang'] = NULL;
$arguments72['style'] = NULL;
$arguments72['title'] = NULL;
$arguments72['accesskey'] = NULL;
$arguments72['tabindex'] = NULL;
$arguments72['onclick'] = NULL;
$renderChildrenClosure73 = function() {return NULL;};
$viewHelper74 = $self->getViewHelper('$viewHelper74', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper');
$viewHelper74->setArguments($arguments72);
$viewHelper74->setRenderingContext($renderingContext);
$viewHelper74->setRenderChildrenClosure($renderChildrenClosure73);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper

$output71 .= $viewHelper74->initializeArgumentsAndRender();

$output71 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments75 = array();
$arguments75['key'] = 'Topic_New_SubscribeMore';
$arguments75['id'] = NULL;
$arguments75['default'] = NULL;
$arguments75['htmlEscape'] = NULL;
$arguments75['arguments'] = NULL;
$arguments75['extensionName'] = NULL;
$renderChildrenClosure76 = function() {return NULL;};

$output71 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output71 .= '
				</label>
			';
return $output71;
};
$viewHelper77 = $self->getViewHelper('$viewHelper77', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper');
$viewHelper77->setArguments($arguments69);
$viewHelper77->setRenderingContext($renderingContext);
$viewHelper77->setRenderChildrenClosure($renderChildrenClosure70);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper

$output7 .= $viewHelper77->initializeArgumentsAndRender();

$output7 .= '
			<div >
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments78 = array();
$arguments78['name'] = 'forum';
$arguments78['value'] = $currentVariableContainer->getOrNull('forum');
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['property'] = NULL;
$arguments78['class'] = NULL;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$renderChildrenClosure79 = function() {return NULL;};
$viewHelper80 = $self->getViewHelper('$viewHelper80', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper80->setArguments($arguments78);
$viewHelper80->setRenderingContext($renderingContext);
$viewHelper80->setRenderChildrenClosure($renderChildrenClosure79);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output7 .= $viewHelper80->initializeArgumentsAndRender();

$output7 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments81 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments82 = array();
$arguments82['key'] = 'Topic_New_Submit';
$arguments82['id'] = NULL;
$arguments82['default'] = NULL;
$arguments82['htmlEscape'] = NULL;
$arguments82['arguments'] = NULL;
$arguments82['extensionName'] = NULL;
$renderChildrenClosure83 = function() {return NULL;};
$arguments81['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);
$arguments81['additionalAttributes'] = NULL;
$arguments81['data'] = NULL;
$arguments81['name'] = NULL;
$arguments81['property'] = NULL;
$arguments81['disabled'] = NULL;
$arguments81['class'] = NULL;
$arguments81['dir'] = NULL;
$arguments81['id'] = NULL;
$arguments81['lang'] = NULL;
$arguments81['style'] = NULL;
$arguments81['title'] = NULL;
$arguments81['accesskey'] = NULL;
$arguments81['tabindex'] = NULL;
$arguments81['onclick'] = NULL;
$renderChildrenClosure84 = function() {return NULL;};
$viewHelper85 = $self->getViewHelper('$viewHelper85', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper85->setArguments($arguments81);
$viewHelper85->setRenderingContext($renderingContext);
$viewHelper85->setRenderChildrenClosure($renderChildrenClosure84);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output7 .= $viewHelper85->initializeArgumentsAndRender();

$output7 .= '
				';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\ButtonViewHelper
$arguments86 = array();
$arguments86['controller'] = 'Forum';
$arguments86['action'] = 'show';
// Rendering Array
$array87 = array();
$array87['forum'] = $currentVariableContainer->getOrNull('forum');
$arguments86['arguments'] = $array87;
$arguments86['label'] = 'Button_Back';
$arguments86['additionalAttributes'] = NULL;
$arguments86['data'] = NULL;
$arguments86['extensionName'] = NULL;
$arguments86['pluginName'] = NULL;
$arguments86['pageUid'] = NULL;
$arguments86['pageType'] = 0;
$arguments86['noCache'] = false;
$arguments86['noCacheHash'] = false;
$arguments86['section'] = '';
$arguments86['format'] = '';
$arguments86['linkAccessRestrictedPages'] = false;
$arguments86['additionalParams'] = array (
);
$arguments86['absolute'] = false;
$arguments86['addQueryString'] = false;
$arguments86['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments86['addQueryStringMethod'] = NULL;
$arguments86['class'] = NULL;
$arguments86['dir'] = NULL;
$arguments86['id'] = NULL;
$arguments86['lang'] = NULL;
$arguments86['style'] = NULL;
$arguments86['title'] = NULL;
$arguments86['accesskey'] = NULL;
$arguments86['tabindex'] = NULL;
$arguments86['onclick'] = NULL;
$arguments86['name'] = NULL;
$arguments86['rel'] = NULL;
$arguments86['rev'] = NULL;
$arguments86['target'] = NULL;
$arguments86['primary'] = false;
$arguments86['icon'] = NULL;
$renderChildrenClosure88 = function() {return NULL;};
$viewHelper89 = $self->getViewHelper('$viewHelper89', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Bootstrap\ButtonViewHelper');
$viewHelper89->setArguments($arguments86);
$viewHelper89->setRenderingContext($renderingContext);
$viewHelper89->setRenderChildrenClosure($renderChildrenClosure88);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\ButtonViewHelper

$output7 .= $viewHelper89->initializeArgumentsAndRender();

$output7 .= '
			</div>
		</fieldset>
	';
return $output7;
};
$viewHelper90 = $self->getViewHelper('$viewHelper90', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper90->setArguments($arguments5);
$viewHelper90->setRenderingContext($renderingContext);
$viewHelper90->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper90->initializeArgumentsAndRender();

$output0 .= '
';


return $output0;
}
/**
 * section menu
 */
public function section_252a25667dc7c65fe0e9bf62d474bbab9bab4068(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();



return NULL;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output91 = '';

$output91 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments92 = array();
$arguments92['name'] = 'default';
$renderChildrenClosure93 = function() {return NULL;};
$viewHelper94 = $self->getViewHelper('$viewHelper94', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper94->setArguments($arguments92);
$viewHelper94->setRenderingContext($renderingContext);
$viewHelper94->setRenderChildrenClosure($renderChildrenClosure93);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output91 .= $viewHelper94->initializeArgumentsAndRender();

$output91 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments95 = array();
$arguments95['name'] = 'main';
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output97 = '';

$output97 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments98 = array();
$arguments98['partial'] = 'FormErrors';
$arguments98['section'] = NULL;
$arguments98['arguments'] = array (
);
$arguments98['optional'] = false;
$renderChildrenClosure99 = function() {return NULL;};

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output97 .= '

	<h2>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments100 = array();
$arguments100['key'] = 'Topic_New';
$arguments100['id'] = NULL;
$arguments100['default'] = NULL;
$arguments100['htmlEscape'] = NULL;
$arguments100['arguments'] = NULL;
$arguments100['extensionName'] = NULL;
$renderChildrenClosure101 = function() {return NULL;};

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output97 .= '
	</h2>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments102 = array();
$arguments102['name'] = 'post';
$arguments102['object'] = $currentVariableContainer->getOrNull('post');
$arguments102['controller'] = 'Topic';
$arguments102['action'] = 'create';
$arguments102['id'] = 'topic';
$arguments102['additionalAttributes'] = NULL;
$arguments102['data'] = NULL;
$arguments102['arguments'] = array (
);
$arguments102['extensionName'] = NULL;
$arguments102['pluginName'] = NULL;
$arguments102['pageUid'] = NULL;
$arguments102['pageType'] = 0;
$arguments102['noCache'] = false;
$arguments102['noCacheHash'] = false;
$arguments102['section'] = '';
$arguments102['format'] = '';
$arguments102['additionalParams'] = array (
);
$arguments102['absolute'] = false;
$arguments102['addQueryString'] = false;
$arguments102['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments102['fieldNamePrefix'] = NULL;
$arguments102['actionUri'] = NULL;
$arguments102['objectName'] = NULL;
$arguments102['hiddenFieldClassName'] = NULL;
$arguments102['enctype'] = NULL;
$arguments102['method'] = NULL;
$arguments102['onreset'] = NULL;
$arguments102['onsubmit'] = NULL;
$arguments102['class'] = NULL;
$arguments102['dir'] = NULL;
$arguments102['lang'] = NULL;
$arguments102['style'] = NULL;
$arguments102['title'] = NULL;
$arguments102['accesskey'] = NULL;
$arguments102['tabindex'] = NULL;
$arguments102['onclick'] = NULL;
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output104 = '';

$output104 .= '
		<fieldset>
			<legend>Create a new topic</legend>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments105 = array();
// Rendering Boolean node
$arguments105['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('currentUser'), 'anonymous', $renderingContext));
$arguments105['then'] = NULL;
$arguments105['else'] = NULL;
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output107 = '';

$output107 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments108 = array();
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output110 = '';

$output110 .= '
					';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper
$arguments111 = array();
$arguments111['llLabel'] = 'Post_New_Author';
$arguments111['error'] = 'post.authorName';
$arguments111['errorLLPrefix'] = 'Post_New_Error_Author';
$arguments111['additionalAttributes'] = NULL;
$arguments111['data'] = NULL;
$arguments111['label'] = '';
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output113 = '';

$output113 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments114 = array();
$arguments114['property'] = 'authorName';
$arguments114['additionalAttributes'] = NULL;
$arguments114['data'] = NULL;
$arguments114['required'] = false;
$arguments114['type'] = 'text';
$arguments114['name'] = NULL;
$arguments114['value'] = NULL;
$arguments114['autofocus'] = NULL;
$arguments114['disabled'] = NULL;
$arguments114['maxlength'] = NULL;
$arguments114['readonly'] = NULL;
$arguments114['size'] = NULL;
$arguments114['placeholder'] = NULL;
$arguments114['pattern'] = NULL;
$arguments114['errorClass'] = 'f3-form-error';
$arguments114['class'] = NULL;
$arguments114['dir'] = NULL;
$arguments114['id'] = NULL;
$arguments114['lang'] = NULL;
$arguments114['style'] = NULL;
$arguments114['title'] = NULL;
$arguments114['accesskey'] = NULL;
$arguments114['tabindex'] = NULL;
$arguments114['onclick'] = NULL;
$renderChildrenClosure115 = function() {return NULL;};
$viewHelper116 = $self->getViewHelper('$viewHelper116', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper116->setArguments($arguments114);
$viewHelper116->setRenderingContext($renderingContext);
$viewHelper116->setRenderChildrenClosure($renderChildrenClosure115);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output113 .= $viewHelper116->initializeArgumentsAndRender();

$output113 .= '
					';
return $output113;
};
$viewHelper117 = $self->getViewHelper('$viewHelper117', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper');
$viewHelper117->setArguments($arguments111);
$viewHelper117->setRenderingContext($renderingContext);
$viewHelper117->setRenderChildrenClosure($renderChildrenClosure112);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper

$output110 .= $viewHelper117->initializeArgumentsAndRender();

$output110 .= '
				';
return $output110;
};

$output107 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output107 .= '
			';
return $output107;
};
$arguments105['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output118 = '';

$output118 .= '
					';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper
$arguments119 = array();
$arguments119['llLabel'] = 'Post_New_Author';
$arguments119['error'] = 'post.authorName';
$arguments119['errorLLPrefix'] = 'Post_New_Error_Author';
$arguments119['additionalAttributes'] = NULL;
$arguments119['data'] = NULL;
$arguments119['label'] = '';
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output121 = '';

$output121 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments122 = array();
$arguments122['property'] = 'authorName';
$arguments122['additionalAttributes'] = NULL;
$arguments122['data'] = NULL;
$arguments122['required'] = false;
$arguments122['type'] = 'text';
$arguments122['name'] = NULL;
$arguments122['value'] = NULL;
$arguments122['autofocus'] = NULL;
$arguments122['disabled'] = NULL;
$arguments122['maxlength'] = NULL;
$arguments122['readonly'] = NULL;
$arguments122['size'] = NULL;
$arguments122['placeholder'] = NULL;
$arguments122['pattern'] = NULL;
$arguments122['errorClass'] = 'f3-form-error';
$arguments122['class'] = NULL;
$arguments122['dir'] = NULL;
$arguments122['id'] = NULL;
$arguments122['lang'] = NULL;
$arguments122['style'] = NULL;
$arguments122['title'] = NULL;
$arguments122['accesskey'] = NULL;
$arguments122['tabindex'] = NULL;
$arguments122['onclick'] = NULL;
$renderChildrenClosure123 = function() {return NULL;};
$viewHelper124 = $self->getViewHelper('$viewHelper124', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper124->setArguments($arguments122);
$viewHelper124->setRenderingContext($renderingContext);
$viewHelper124->setRenderChildrenClosure($renderChildrenClosure123);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output121 .= $viewHelper124->initializeArgumentsAndRender();

$output121 .= '
					';
return $output121;
};
$viewHelper125 = $self->getViewHelper('$viewHelper125', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper');
$viewHelper125->setArguments($arguments119);
$viewHelper125->setRenderingContext($renderingContext);
$viewHelper125->setRenderChildrenClosure($renderChildrenClosure120);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper

$output118 .= $viewHelper125->initializeArgumentsAndRender();

$output118 .= '
				';
return $output118;
};

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '
			';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper
$arguments126 = array();
$arguments126['llLabel'] = 'Topic_New_Subject';
$arguments126['error'] = 'subject';
$arguments126['errorLLPrefix'] = 'Topic_New_Error_Subject';
$arguments126['additionalAttributes'] = NULL;
$arguments126['data'] = NULL;
$arguments126['label'] = '';
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output128 = '';

$output128 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments129 = array();
$arguments129['name'] = 'subject';
$arguments129['value'] = $currentVariableContainer->getOrNull('subject');
$arguments129['additionalAttributes'] = NULL;
$arguments129['data'] = NULL;
$arguments129['required'] = false;
$arguments129['type'] = 'text';
$arguments129['property'] = NULL;
$arguments129['autofocus'] = NULL;
$arguments129['disabled'] = NULL;
$arguments129['maxlength'] = NULL;
$arguments129['readonly'] = NULL;
$arguments129['size'] = NULL;
$arguments129['placeholder'] = NULL;
$arguments129['pattern'] = NULL;
$arguments129['errorClass'] = 'f3-form-error';
$arguments129['class'] = NULL;
$arguments129['dir'] = NULL;
$arguments129['id'] = NULL;
$arguments129['lang'] = NULL;
$arguments129['style'] = NULL;
$arguments129['title'] = NULL;
$arguments129['accesskey'] = NULL;
$arguments129['tabindex'] = NULL;
$arguments129['onclick'] = NULL;
$renderChildrenClosure130 = function() {return NULL;};
$viewHelper131 = $self->getViewHelper('$viewHelper131', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper131->setArguments($arguments129);
$viewHelper131->setRenderingContext($renderingContext);
$viewHelper131->setRenderChildrenClosure($renderChildrenClosure130);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output128 .= $viewHelper131->initializeArgumentsAndRender();

$output128 .= '
			';
return $output128;
};
$viewHelper132 = $self->getViewHelper('$viewHelper132', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper');
$viewHelper132->setArguments($arguments126);
$viewHelper132->setRenderingContext($renderingContext);
$viewHelper132->setRenderChildrenClosure($renderChildrenClosure127);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper

$output104 .= $viewHelper132->initializeArgumentsAndRender();

$output104 .= '
			';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper
$arguments133 = array();
$arguments133['llLabel'] = 'Topic_New_Text';
$arguments133['error'] = 'post.text';
$arguments133['errorLLPrefix'] = 'Topic_New_Error_Post_Text';
$arguments133['additionalAttributes'] = NULL;
$arguments133['data'] = NULL;
$arguments133['label'] = '';
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output135 = '';

$output135 .= '
				';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Form\BbCodeEditorViewHelper
$arguments136 = array();
$arguments136['property'] = 'text';
$arguments136['id'] = 'typo3forum_editor';
$arguments136['rows'] = '20';
$arguments136['cols'] = '40';
$arguments136['additionalAttributes'] = NULL;
$arguments136['data'] = NULL;
$arguments136['name'] = NULL;
$arguments136['value'] = NULL;
$arguments136['autofocus'] = NULL;
$arguments136['disabled'] = NULL;
$arguments136['placeholder'] = NULL;
$arguments136['errorClass'] = 'f3-form-error';
$arguments136['class'] = NULL;
$arguments136['dir'] = NULL;
$arguments136['lang'] = NULL;
$arguments136['style'] = NULL;
$arguments136['title'] = NULL;
$arguments136['accesskey'] = NULL;
$arguments136['tabindex'] = NULL;
$arguments136['onclick'] = NULL;
$arguments136['configuration'] = 'plugin.tx_typo3forum.settings.textParsing.editorPanel';
$renderChildrenClosure137 = function() {return NULL;};
$viewHelper138 = $self->getViewHelper('$viewHelper138', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Form\BbCodeEditorViewHelper');
$viewHelper138->setArguments($arguments136);
$viewHelper138->setRenderingContext($renderingContext);
$viewHelper138->setRenderChildrenClosure($renderChildrenClosure137);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Form\BbCodeEditorViewHelper

$output135 .= $viewHelper138->initializeArgumentsAndRender();

$output135 .= '
			';
return $output135;
};
$viewHelper139 = $self->getViewHelper('$viewHelper139', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper');
$viewHelper139->setArguments($arguments133);
$viewHelper139->setRenderingContext($renderingContext);
$viewHelper139->setRenderChildrenClosure($renderChildrenClosure134);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper

$output104 .= $viewHelper139->initializeArgumentsAndRender();

$output104 .= '
			';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Authentication\IfAccessViewHelper
$arguments140 = array();
$arguments140['object'] = $currentVariableContainer->getOrNull('forum');
$arguments140['accessType'] = 'newAttachment';
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output142 = '';

$output142 .= '
				';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper
$arguments143 = array();
$arguments143['llLabel'] = 'Topic_New_Attachments';
$arguments143['additionalAttributes'] = NULL;
$arguments143['data'] = NULL;
$arguments143['label'] = '';
$arguments143['error'] = NULL;
$arguments143['errorLLPrefix'] = NULL;
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output145 = '';

$output145 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments146 = array();
// Rendering Boolean node
$arguments146['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('post'), 'attachments', $renderingContext));
$arguments146['then'] = NULL;
$arguments146['else'] = NULL;
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output148 = '';

$output148 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments149 = array();
$arguments149['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('post'), 'attachments', $renderingContext);
$arguments149['as'] = 'attachment';
$arguments149['key'] = '';
$arguments149['reverse'] = false;
$arguments149['iteration'] = NULL;
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output151 = '';

$output151 .= '
							<div>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments152 = array();
$arguments152['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('attachment'), 'filename', $renderingContext);
$arguments152['keepQuotes'] = false;
$arguments152['encoding'] = NULL;
$arguments152['doubleEncode'] = true;
$renderChildrenClosure153 = function() {return NULL;};
$value154 = ($arguments152['value'] !== NULL ? $arguments152['value'] : $renderChildrenClosure153());

$output151 .= (!is_string($value154) ? $value154 : htmlspecialchars($value154, ($arguments152['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments152['encoding'] !== NULL ? $arguments152['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments152['doubleEncode']));

$output151 .= ',
								';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Format\FileSizeViewHelper
$arguments155 = array();
$arguments155['decimals'] = 2;
$arguments155['decimalSeparator'] = ',';
$arguments155['thousandsSeparator'] = '.';
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments157 = array();
$arguments157['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('attachment'), 'filesize', $renderingContext);
$arguments157['keepQuotes'] = false;
$arguments157['encoding'] = NULL;
$arguments157['doubleEncode'] = true;
$renderChildrenClosure158 = function() {return NULL;};
$value159 = ($arguments157['value'] !== NULL ? $arguments157['value'] : $renderChildrenClosure158());
return (!is_string($value159) ? $value159 : htmlspecialchars($value159, ($arguments157['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments157['encoding'] !== NULL ? $arguments157['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments157['doubleEncode']));
};
$viewHelper160 = $self->getViewHelper('$viewHelper160', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Format\FileSizeViewHelper');
$viewHelper160->setArguments($arguments155);
$viewHelper160->setRenderingContext($renderingContext);
$viewHelper160->setRenderChildrenClosure($renderChildrenClosure156);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Format\FileSizeViewHelper

$output151 .= $viewHelper160->initializeArgumentsAndRender();

$output151 .= '
							</div>
						';
return $output151;
};

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output148 .= '
					';
return $output148;
};

$output145 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output145 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper
$arguments161 = array();
$arguments161['name'] = 'attachments[]';
$arguments161['additionalAttributes'] = NULL;
$arguments161['data'] = NULL;
$arguments161['value'] = NULL;
$arguments161['property'] = NULL;
$arguments161['disabled'] = NULL;
$arguments161['multiple'] = NULL;
$arguments161['errorClass'] = 'f3-form-error';
$arguments161['class'] = NULL;
$arguments161['dir'] = NULL;
$arguments161['id'] = NULL;
$arguments161['lang'] = NULL;
$arguments161['style'] = NULL;
$arguments161['title'] = NULL;
$arguments161['accesskey'] = NULL;
$arguments161['tabindex'] = NULL;
$arguments161['onclick'] = NULL;
$renderChildrenClosure162 = function() {return NULL;};
$viewHelper163 = $self->getViewHelper('$viewHelper163', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper');
$viewHelper163->setArguments($arguments161);
$viewHelper163->setRenderingContext($renderingContext);
$viewHelper163->setRenderChildrenClosure($renderChildrenClosure162);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper

$output145 .= $viewHelper163->initializeArgumentsAndRender();

$output145 .= '
				';
return $output145;
};
$viewHelper164 = $self->getViewHelper('$viewHelper164', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper');
$viewHelper164->setArguments($arguments143);
$viewHelper164->setRenderingContext($renderingContext);
$viewHelper164->setRenderChildrenClosure($renderChildrenClosure144);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper

$output142 .= $viewHelper164->initializeArgumentsAndRender();

$output142 .= '
			';
return $output142;
};
$viewHelper165 = $self->getViewHelper('$viewHelper165', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Authentication\IfAccessViewHelper');
$viewHelper165->setArguments($arguments140);
$viewHelper165->setRenderingContext($renderingContext);
$viewHelper165->setRenderChildrenClosure($renderChildrenClosure141);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Authentication\IfAccessViewHelper

$output104 .= $viewHelper165->initializeArgumentsAndRender();

$output104 .= '
			';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper
$arguments166 = array();
$arguments166['llLabel'] = 'Topic_New_Subscribe';
$arguments166['additionalAttributes'] = NULL;
$arguments166['data'] = NULL;
$arguments166['label'] = '';
$arguments166['error'] = NULL;
$arguments166['errorLLPrefix'] = NULL;
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output168 = '';

$output168 .= '
				<label >
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$arguments169 = array();
$arguments169['name'] = 'subscribe';
$arguments169['value'] = '1';
$arguments169['additionalAttributes'] = NULL;
$arguments169['data'] = NULL;
$arguments169['checked'] = NULL;
$arguments169['multiple'] = false;
$arguments169['property'] = NULL;
$arguments169['disabled'] = NULL;
$arguments169['errorClass'] = 'f3-form-error';
$arguments169['class'] = NULL;
$arguments169['dir'] = NULL;
$arguments169['id'] = NULL;
$arguments169['lang'] = NULL;
$arguments169['style'] = NULL;
$arguments169['title'] = NULL;
$arguments169['accesskey'] = NULL;
$arguments169['tabindex'] = NULL;
$arguments169['onclick'] = NULL;
$renderChildrenClosure170 = function() {return NULL;};
$viewHelper171 = $self->getViewHelper('$viewHelper171', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper');
$viewHelper171->setArguments($arguments169);
$viewHelper171->setRenderingContext($renderingContext);
$viewHelper171->setRenderChildrenClosure($renderChildrenClosure170);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper

$output168 .= $viewHelper171->initializeArgumentsAndRender();

$output168 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments172 = array();
$arguments172['key'] = 'Topic_New_SubscribeMore';
$arguments172['id'] = NULL;
$arguments172['default'] = NULL;
$arguments172['htmlEscape'] = NULL;
$arguments172['arguments'] = NULL;
$arguments172['extensionName'] = NULL;
$renderChildrenClosure173 = function() {return NULL;};

$output168 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output168 .= '
				</label>
			';
return $output168;
};
$viewHelper174 = $self->getViewHelper('$viewHelper174', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper');
$viewHelper174->setArguments($arguments166);
$viewHelper174->setRenderingContext($renderingContext);
$viewHelper174->setRenderChildrenClosure($renderChildrenClosure167);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper

$output104 .= $viewHelper174->initializeArgumentsAndRender();

$output104 .= '
			<div >
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments175 = array();
$arguments175['name'] = 'forum';
$arguments175['value'] = $currentVariableContainer->getOrNull('forum');
$arguments175['additionalAttributes'] = NULL;
$arguments175['data'] = NULL;
$arguments175['property'] = NULL;
$arguments175['class'] = NULL;
$arguments175['dir'] = NULL;
$arguments175['id'] = NULL;
$arguments175['lang'] = NULL;
$arguments175['style'] = NULL;
$arguments175['title'] = NULL;
$arguments175['accesskey'] = NULL;
$arguments175['tabindex'] = NULL;
$arguments175['onclick'] = NULL;
$renderChildrenClosure176 = function() {return NULL;};
$viewHelper177 = $self->getViewHelper('$viewHelper177', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper177->setArguments($arguments175);
$viewHelper177->setRenderingContext($renderingContext);
$viewHelper177->setRenderChildrenClosure($renderChildrenClosure176);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output104 .= $viewHelper177->initializeArgumentsAndRender();

$output104 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments178 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments179 = array();
$arguments179['key'] = 'Topic_New_Submit';
$arguments179['id'] = NULL;
$arguments179['default'] = NULL;
$arguments179['htmlEscape'] = NULL;
$arguments179['arguments'] = NULL;
$arguments179['extensionName'] = NULL;
$renderChildrenClosure180 = function() {return NULL;};
$arguments178['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);
$arguments178['additionalAttributes'] = NULL;
$arguments178['data'] = NULL;
$arguments178['name'] = NULL;
$arguments178['property'] = NULL;
$arguments178['disabled'] = NULL;
$arguments178['class'] = NULL;
$arguments178['dir'] = NULL;
$arguments178['id'] = NULL;
$arguments178['lang'] = NULL;
$arguments178['style'] = NULL;
$arguments178['title'] = NULL;
$arguments178['accesskey'] = NULL;
$arguments178['tabindex'] = NULL;
$arguments178['onclick'] = NULL;
$renderChildrenClosure181 = function() {return NULL;};
$viewHelper182 = $self->getViewHelper('$viewHelper182', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper182->setArguments($arguments178);
$viewHelper182->setRenderingContext($renderingContext);
$viewHelper182->setRenderChildrenClosure($renderChildrenClosure181);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output104 .= $viewHelper182->initializeArgumentsAndRender();

$output104 .= '
				';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\ButtonViewHelper
$arguments183 = array();
$arguments183['controller'] = 'Forum';
$arguments183['action'] = 'show';
// Rendering Array
$array184 = array();
$array184['forum'] = $currentVariableContainer->getOrNull('forum');
$arguments183['arguments'] = $array184;
$arguments183['label'] = 'Button_Back';
$arguments183['additionalAttributes'] = NULL;
$arguments183['data'] = NULL;
$arguments183['extensionName'] = NULL;
$arguments183['pluginName'] = NULL;
$arguments183['pageUid'] = NULL;
$arguments183['pageType'] = 0;
$arguments183['noCache'] = false;
$arguments183['noCacheHash'] = false;
$arguments183['section'] = '';
$arguments183['format'] = '';
$arguments183['linkAccessRestrictedPages'] = false;
$arguments183['additionalParams'] = array (
);
$arguments183['absolute'] = false;
$arguments183['addQueryString'] = false;
$arguments183['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments183['addQueryStringMethod'] = NULL;
$arguments183['class'] = NULL;
$arguments183['dir'] = NULL;
$arguments183['id'] = NULL;
$arguments183['lang'] = NULL;
$arguments183['style'] = NULL;
$arguments183['title'] = NULL;
$arguments183['accesskey'] = NULL;
$arguments183['tabindex'] = NULL;
$arguments183['onclick'] = NULL;
$arguments183['name'] = NULL;
$arguments183['rel'] = NULL;
$arguments183['rev'] = NULL;
$arguments183['target'] = NULL;
$arguments183['primary'] = false;
$arguments183['icon'] = NULL;
$renderChildrenClosure185 = function() {return NULL;};
$viewHelper186 = $self->getViewHelper('$viewHelper186', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Bootstrap\ButtonViewHelper');
$viewHelper186->setArguments($arguments183);
$viewHelper186->setRenderingContext($renderingContext);
$viewHelper186->setRenderChildrenClosure($renderChildrenClosure185);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\ButtonViewHelper

$output104 .= $viewHelper186->initializeArgumentsAndRender();

$output104 .= '
			</div>
		</fieldset>
	';
return $output104;
};
$viewHelper187 = $self->getViewHelper('$viewHelper187', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper187->setArguments($arguments102);
$viewHelper187->setRenderingContext($renderingContext);
$viewHelper187->setRenderChildrenClosure($renderChildrenClosure103);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output97 .= $viewHelper187->initializeArgumentsAndRender();

$output97 .= '
';
return $output97;
};

$output91 .= '';

$output91 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments188 = array();
$arguments188['name'] = 'menu';
$renderChildrenClosure189 = function() {return NULL;};

$output91 .= '';

$output91 .= '
';


return $output91;
}


}
#1461665903    60944     