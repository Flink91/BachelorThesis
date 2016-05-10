<?php
class FluidCache_Typo3Forum_Post_partial_Post_Form_ba20ef89efe540be6d8bdd7974c55a695b7906cd extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments1 = array();
$arguments1['name'] = 'post';
$arguments1['object'] = $currentVariableContainer->getOrNull('post');
$arguments1['controller'] = 'Post';
$arguments1['action'] = $currentVariableContainer->getOrNull('action');
$arguments1['id'] = 'post';
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['extensionName'] = NULL;
$arguments1['pluginName'] = NULL;
$arguments1['pageUid'] = NULL;
$arguments1['pageType'] = 0;
$arguments1['noCache'] = false;
$arguments1['noCacheHash'] = false;
$arguments1['section'] = '';
$arguments1['format'] = '';
$arguments1['additionalParams'] = array (
);
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['fieldNamePrefix'] = NULL;
$arguments1['actionUri'] = NULL;
$arguments1['objectName'] = NULL;
$arguments1['hiddenFieldClassName'] = NULL;
$arguments1['enctype'] = NULL;
$arguments1['method'] = NULL;
$arguments1['onreset'] = NULL;
$arguments1['onsubmit'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
    <fieldset>
        <legend>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('post'), 'uid', $renderingContext));
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments7 = array();
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments10 = array();
$arguments10['key'] = 'Post_Edit';
// Rendering Array
$array11 = array();
$array11['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('topic'), 'subject', $renderingContext);
$arguments10['arguments'] = $array11;
$arguments10['id'] = NULL;
$arguments10['default'] = NULL;
$arguments10['htmlEscape'] = NULL;
$arguments10['extensionName'] = NULL;
$renderChildrenClosure12 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure12, $renderingContext);

$output9 .= '
                ';
return $output9;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments13 = array();
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output15 = '';

$output15 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments16 = array();
$arguments16['key'] = 'Post_New';
// Rendering Array
$array17 = array();
$array17['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('topic'), 'subject', $renderingContext);
$arguments16['arguments'] = $array17;
$arguments16['id'] = NULL;
$arguments16['default'] = NULL;
$arguments16['htmlEscape'] = NULL;
$arguments16['extensionName'] = NULL;
$renderChildrenClosure18 = function() {return NULL;};

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments16, $renderChildrenClosure18, $renderingContext);

$output15 .= '
                ';
return $output15;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output6 .= '
            ';
return $output6;
};
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output19 = '';

$output19 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments20 = array();
$arguments20['key'] = 'Post_Edit';
// Rendering Array
$array21 = array();
$array21['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('topic'), 'subject', $renderingContext);
$arguments20['arguments'] = $array21;
$arguments20['id'] = NULL;
$arguments20['default'] = NULL;
$arguments20['htmlEscape'] = NULL;
$arguments20['extensionName'] = NULL;
$renderChildrenClosure22 = function() {return NULL;};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure22, $renderingContext);

$output19 .= '
                ';
return $output19;
};
$arguments4['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output23 = '';

$output23 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments24 = array();
$arguments24['key'] = 'Post_New';
// Rendering Array
$array25 = array();
$array25['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('topic'), 'subject', $renderingContext);
$arguments24['arguments'] = $array25;
$arguments24['id'] = NULL;
$arguments24['default'] = NULL;
$arguments24['htmlEscape'] = NULL;
$arguments24['extensionName'] = NULL;
$renderChildrenClosure26 = function() {return NULL;};

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure26, $renderingContext);

$output23 .= '
                ';
return $output23;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
        </legend>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments27 = array();
// Rendering Boolean node
$arguments27['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('currentUser'), 'anonymous', $renderingContext));
$arguments27['then'] = NULL;
$arguments27['else'] = NULL;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output29 = '';

$output29 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments30 = array();
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output32 = '';

$output32 .= '
                ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper
$arguments33 = array();
$arguments33['llLabel'] = 'Post_New_Author';
$arguments33['error'] = 'post.authorName';
$arguments33['errorLLPrefix'] = 'Post_New_Error_Author';
$arguments33['additionalAttributes'] = NULL;
$arguments33['data'] = NULL;
$arguments33['label'] = '';
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output35 = '';

$output35 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments36 = array();
$arguments36['property'] = 'authorName';
$arguments36['additionalAttributes'] = NULL;
$arguments36['data'] = NULL;
$arguments36['required'] = false;
$arguments36['type'] = 'text';
$arguments36['name'] = NULL;
$arguments36['value'] = NULL;
$arguments36['autofocus'] = NULL;
$arguments36['disabled'] = NULL;
$arguments36['maxlength'] = NULL;
$arguments36['readonly'] = NULL;
$arguments36['size'] = NULL;
$arguments36['placeholder'] = NULL;
$arguments36['pattern'] = NULL;
$arguments36['errorClass'] = 'f3-form-error';
$arguments36['class'] = NULL;
$arguments36['dir'] = NULL;
$arguments36['id'] = NULL;
$arguments36['lang'] = NULL;
$arguments36['style'] = NULL;
$arguments36['title'] = NULL;
$arguments36['accesskey'] = NULL;
$arguments36['tabindex'] = NULL;
$arguments36['onclick'] = NULL;
$renderChildrenClosure37 = function() {return NULL;};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper38->setArguments($arguments36);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output35 .= $viewHelper38->initializeArgumentsAndRender();

$output35 .= '
                ';
return $output35;
};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper');
$viewHelper39->setArguments($arguments33);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure34);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper

$output32 .= $viewHelper39->initializeArgumentsAndRender();

$output32 .= '
            ';
return $output32;
};

$output29 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
        ';
return $output29;
};
$arguments27['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output40 = '';

$output40 .= '
                ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper
$arguments41 = array();
$arguments41['llLabel'] = 'Post_New_Author';
$arguments41['error'] = 'post.authorName';
$arguments41['errorLLPrefix'] = 'Post_New_Error_Author';
$arguments41['additionalAttributes'] = NULL;
$arguments41['data'] = NULL;
$arguments41['label'] = '';
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output43 = '';

$output43 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments44 = array();
$arguments44['property'] = 'authorName';
$arguments44['additionalAttributes'] = NULL;
$arguments44['data'] = NULL;
$arguments44['required'] = false;
$arguments44['type'] = 'text';
$arguments44['name'] = NULL;
$arguments44['value'] = NULL;
$arguments44['autofocus'] = NULL;
$arguments44['disabled'] = NULL;
$arguments44['maxlength'] = NULL;
$arguments44['readonly'] = NULL;
$arguments44['size'] = NULL;
$arguments44['placeholder'] = NULL;
$arguments44['pattern'] = NULL;
$arguments44['errorClass'] = 'f3-form-error';
$arguments44['class'] = NULL;
$arguments44['dir'] = NULL;
$arguments44['id'] = NULL;
$arguments44['lang'] = NULL;
$arguments44['style'] = NULL;
$arguments44['title'] = NULL;
$arguments44['accesskey'] = NULL;
$arguments44['tabindex'] = NULL;
$arguments44['onclick'] = NULL;
$renderChildrenClosure45 = function() {return NULL;};
$viewHelper46 = $self->getViewHelper('$viewHelper46', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper46->setArguments($arguments44);
$viewHelper46->setRenderingContext($renderingContext);
$viewHelper46->setRenderChildrenClosure($renderChildrenClosure45);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output43 .= $viewHelper46->initializeArgumentsAndRender();

$output43 .= '
                ';
return $output43;
};
$viewHelper47 = $self->getViewHelper('$viewHelper47', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper');
$viewHelper47->setArguments($arguments41);
$viewHelper47->setRenderingContext($renderingContext);
$viewHelper47->setRenderChildrenClosure($renderChildrenClosure42);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper

$output40 .= $viewHelper47->initializeArgumentsAndRender();

$output40 .= '
            ';
return $output40;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output3 .= '
        ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper
$arguments48 = array();
$arguments48['llLabel'] = 'Topic_New_Subject';
$arguments48['additionalAttributes'] = NULL;
$arguments48['data'] = NULL;
$arguments48['label'] = '';
$arguments48['error'] = NULL;
$arguments48['errorLLPrefix'] = NULL;
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output50 = '';

$output50 .= '
            <span class="input-xlarge uneditable-input span8">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments51 = array();
$arguments51['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('topic'), 'subject', $renderingContext);
$arguments51['keepQuotes'] = false;
$arguments51['encoding'] = NULL;
$arguments51['doubleEncode'] = true;
$renderChildrenClosure52 = function() {return NULL;};
$value53 = ($arguments51['value'] !== NULL ? $arguments51['value'] : $renderChildrenClosure52());

$output50 .= (!is_string($value53) ? $value53 : htmlspecialchars($value53, ($arguments51['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments51['encoding'] !== NULL ? $arguments51['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments51['doubleEncode']));

$output50 .= '</span>
        ';
return $output50;
};
$viewHelper54 = $self->getViewHelper('$viewHelper54', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper');
$viewHelper54->setArguments($arguments48);
$viewHelper54->setRenderingContext($renderingContext);
$viewHelper54->setRenderChildrenClosure($renderChildrenClosure49);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper

$output3 .= $viewHelper54->initializeArgumentsAndRender();

$output3 .= '
        ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper
$arguments55 = array();
$arguments55['llLabel'] = 'Post_New_Text';
$arguments55['error'] = 'post.text';
$arguments55['errorLLPrefix'] = 'Post_New_Error_Text';
$arguments55['additionalAttributes'] = NULL;
$arguments55['data'] = NULL;
$arguments55['label'] = '';
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output57 = '';

$output57 .= '
            ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Form\BbCodeEditorViewHelper
$arguments58 = array();
$arguments58['property'] = 'text';
$arguments58['id'] = 'typo3forum_editor';
$arguments58['rows'] = '20';
$arguments58['cols'] = '40';
$arguments58['class'] = 'tx-typo3forum-editor span8';
$arguments58['additionalAttributes'] = NULL;
$arguments58['data'] = NULL;
$arguments58['name'] = NULL;
$arguments58['value'] = NULL;
$arguments58['autofocus'] = NULL;
$arguments58['disabled'] = NULL;
$arguments58['placeholder'] = NULL;
$arguments58['errorClass'] = 'f3-form-error';
$arguments58['dir'] = NULL;
$arguments58['lang'] = NULL;
$arguments58['style'] = NULL;
$arguments58['title'] = NULL;
$arguments58['accesskey'] = NULL;
$arguments58['tabindex'] = NULL;
$arguments58['onclick'] = NULL;
$arguments58['configuration'] = 'plugin.tx_typo3forum.settings.textParsing.editorPanel';
$renderChildrenClosure59 = function() {return NULL;};
$viewHelper60 = $self->getViewHelper('$viewHelper60', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Form\BbCodeEditorViewHelper');
$viewHelper60->setArguments($arguments58);
$viewHelper60->setRenderingContext($renderingContext);
$viewHelper60->setRenderChildrenClosure($renderChildrenClosure59);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Form\BbCodeEditorViewHelper

$output57 .= $viewHelper60->initializeArgumentsAndRender();

$output57 .= '
        ';
return $output57;
};
$viewHelper61 = $self->getViewHelper('$viewHelper61', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper');
$viewHelper61->setArguments($arguments55);
$viewHelper61->setRenderingContext($renderingContext);
$viewHelper61->setRenderChildrenClosure($renderChildrenClosure56);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper

$output3 .= $viewHelper61->initializeArgumentsAndRender();

$output3 .= '
        ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Authentication\IfAccessViewHelper
$arguments62 = array();
$arguments62['object'] = $currentVariableContainer->getOrNull('topic');
$arguments62['accessType'] = 'newAttachment';
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output64 = '';

$output64 .= '
            ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper
$arguments65 = array();
$arguments65['llLabel'] = 'Post_New_Attachments';
$arguments65['additionalAttributes'] = NULL;
$arguments65['data'] = NULL;
$arguments65['label'] = '';
$arguments65['error'] = NULL;
$arguments65['errorLLPrefix'] = NULL;
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output67 = '';

$output67 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments68 = array();
// Rendering Boolean node
$arguments68['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('post'), 'attachments', $renderingContext));
$arguments68['then'] = NULL;
$arguments68['else'] = NULL;
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output70 = '';

$output70 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments71 = array();
$arguments71['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('post'), 'attachments', $renderingContext);
$arguments71['as'] = 'attachment';
$arguments71['key'] = '';
$arguments71['reverse'] = false;
$arguments71['iteration'] = NULL;
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output73 = '';

$output73 .= '
                        <div>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments74 = array();
$arguments74['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('attachment'), 'filename', $renderingContext);
$arguments74['keepQuotes'] = false;
$arguments74['encoding'] = NULL;
$arguments74['doubleEncode'] = true;
$renderChildrenClosure75 = function() {return NULL;};
$value76 = ($arguments74['value'] !== NULL ? $arguments74['value'] : $renderChildrenClosure75());

$output73 .= (!is_string($value76) ? $value76 : htmlspecialchars($value76, ($arguments74['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments74['encoding'] !== NULL ? $arguments74['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments74['doubleEncode']));

$output73 .= ',
                            ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Format\FileSizeViewHelper
$arguments77 = array();
$arguments77['decimals'] = 2;
$arguments77['decimalSeparator'] = ',';
$arguments77['thousandsSeparator'] = '.';
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments79 = array();
$arguments79['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('attachment'), 'filesize', $renderingContext);
$arguments79['keepQuotes'] = false;
$arguments79['encoding'] = NULL;
$arguments79['doubleEncode'] = true;
$renderChildrenClosure80 = function() {return NULL;};
$value81 = ($arguments79['value'] !== NULL ? $arguments79['value'] : $renderChildrenClosure80());
return (!is_string($value81) ? $value81 : htmlspecialchars($value81, ($arguments79['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments79['encoding'] !== NULL ? $arguments79['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments79['doubleEncode']));
};
$viewHelper82 = $self->getViewHelper('$viewHelper82', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Format\FileSizeViewHelper');
$viewHelper82->setArguments($arguments77);
$viewHelper82->setRenderingContext($renderingContext);
$viewHelper82->setRenderChildrenClosure($renderChildrenClosure78);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Format\FileSizeViewHelper

$output73 .= $viewHelper82->initializeArgumentsAndRender();

$output73 .= '
                        </div>
                    ';
return $output73;
};

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
                ';
return $output70;
};

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper
$arguments83 = array();
$arguments83['name'] = 'attachments[]';
$arguments83['additionalAttributes'] = NULL;
$arguments83['data'] = NULL;
$arguments83['value'] = NULL;
$arguments83['property'] = NULL;
$arguments83['disabled'] = NULL;
$arguments83['multiple'] = NULL;
$arguments83['errorClass'] = 'f3-form-error';
$arguments83['class'] = NULL;
$arguments83['dir'] = NULL;
$arguments83['id'] = NULL;
$arguments83['lang'] = NULL;
$arguments83['style'] = NULL;
$arguments83['title'] = NULL;
$arguments83['accesskey'] = NULL;
$arguments83['tabindex'] = NULL;
$arguments83['onclick'] = NULL;
$renderChildrenClosure84 = function() {return NULL;};
$viewHelper85 = $self->getViewHelper('$viewHelper85', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper');
$viewHelper85->setArguments($arguments83);
$viewHelper85->setRenderingContext($renderingContext);
$viewHelper85->setRenderChildrenClosure($renderChildrenClosure84);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper

$output67 .= $viewHelper85->initializeArgumentsAndRender();

$output67 .= '
            ';
return $output67;
};
$viewHelper86 = $self->getViewHelper('$viewHelper86', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper');
$viewHelper86->setArguments($arguments65);
$viewHelper86->setRenderingContext($renderingContext);
$viewHelper86->setRenderChildrenClosure($renderChildrenClosure66);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\Form\RowViewHelper

$output64 .= $viewHelper86->initializeArgumentsAndRender();

$output64 .= '
        ';
return $output64;
};
$viewHelper87 = $self->getViewHelper('$viewHelper87', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Authentication\IfAccessViewHelper');
$viewHelper87->setArguments($arguments62);
$viewHelper87->setRenderingContext($renderingContext);
$viewHelper87->setRenderChildrenClosure($renderChildrenClosure63);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Authentication\IfAccessViewHelper

$output3 .= $viewHelper87->initializeArgumentsAndRender();

$output3 .= '
        <div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments88 = array();
$arguments88['name'] = 'topic';
$arguments88['value'] = $currentVariableContainer->getOrNull('topic');
$arguments88['additionalAttributes'] = NULL;
$arguments88['data'] = NULL;
$arguments88['property'] = NULL;
$arguments88['class'] = NULL;
$arguments88['dir'] = NULL;
$arguments88['id'] = NULL;
$arguments88['lang'] = NULL;
$arguments88['style'] = NULL;
$arguments88['title'] = NULL;
$arguments88['accesskey'] = NULL;
$arguments88['tabindex'] = NULL;
$arguments88['onclick'] = NULL;
$renderChildrenClosure89 = function() {return NULL;};
$viewHelper90 = $self->getViewHelper('$viewHelper90', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper90->setArguments($arguments88);
$viewHelper90->setRenderingContext($renderingContext);
$viewHelper90->setRenderChildrenClosure($renderChildrenClosure89);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output3 .= $viewHelper90->initializeArgumentsAndRender();

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments91 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments92 = array();
$arguments92['key'] = 'Post_New_Submit';
$arguments92['id'] = NULL;
$arguments92['default'] = NULL;
$arguments92['htmlEscape'] = NULL;
$arguments92['arguments'] = NULL;
$arguments92['extensionName'] = NULL;
$renderChildrenClosure93 = function() {return NULL;};
$arguments91['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);
$arguments91['additionalAttributes'] = NULL;
$arguments91['data'] = NULL;
$arguments91['name'] = NULL;
$arguments91['property'] = NULL;
$arguments91['disabled'] = NULL;
$arguments91['class'] = NULL;
$arguments91['dir'] = NULL;
$arguments91['id'] = NULL;
$arguments91['lang'] = NULL;
$arguments91['style'] = NULL;
$arguments91['title'] = NULL;
$arguments91['accesskey'] = NULL;
$arguments91['tabindex'] = NULL;
$arguments91['onclick'] = NULL;
$renderChildrenClosure94 = function() {return NULL;};
$viewHelper95 = $self->getViewHelper('$viewHelper95', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper95->setArguments($arguments91);
$viewHelper95->setRenderingContext($renderingContext);
$viewHelper95->setRenderChildrenClosure($renderChildrenClosure94);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output3 .= $viewHelper95->initializeArgumentsAndRender();

$output3 .= '
            ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\ButtonViewHelper
$arguments96 = array();
$arguments96['controller'] = 'Topic';
$arguments96['action'] = 'show';
// Rendering Array
$array97 = array();
$array97['topic'] = $currentVariableContainer->getOrNull('topic');
$arguments96['arguments'] = $array97;
$arguments96['label'] = 'Button_Back';
$arguments96['additionalAttributes'] = NULL;
$arguments96['data'] = NULL;
$arguments96['extensionName'] = NULL;
$arguments96['pluginName'] = NULL;
$arguments96['pageUid'] = NULL;
$arguments96['pageType'] = 0;
$arguments96['noCache'] = false;
$arguments96['noCacheHash'] = false;
$arguments96['section'] = '';
$arguments96['format'] = '';
$arguments96['linkAccessRestrictedPages'] = false;
$arguments96['additionalParams'] = array (
);
$arguments96['absolute'] = false;
$arguments96['addQueryString'] = false;
$arguments96['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments96['addQueryStringMethod'] = NULL;
$arguments96['class'] = NULL;
$arguments96['dir'] = NULL;
$arguments96['id'] = NULL;
$arguments96['lang'] = NULL;
$arguments96['style'] = NULL;
$arguments96['title'] = NULL;
$arguments96['accesskey'] = NULL;
$arguments96['tabindex'] = NULL;
$arguments96['onclick'] = NULL;
$arguments96['name'] = NULL;
$arguments96['rel'] = NULL;
$arguments96['rev'] = NULL;
$arguments96['target'] = NULL;
$arguments96['primary'] = false;
$arguments96['icon'] = NULL;
$renderChildrenClosure98 = function() {return NULL;};
$viewHelper99 = $self->getViewHelper('$viewHelper99', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Bootstrap\ButtonViewHelper');
$viewHelper99->setArguments($arguments96);
$viewHelper99->setRenderingContext($renderingContext);
$viewHelper99->setRenderChildrenClosure($renderChildrenClosure98);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Bootstrap\ButtonViewHelper

$output3 .= $viewHelper99->initializeArgumentsAndRender();

$output3 .= '
        </div>
    </fieldset>
';
return $output3;
};
$viewHelper100 = $self->getViewHelper('$viewHelper100', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper100->setArguments($arguments1);
$viewHelper100->setRenderingContext($renderingContext);
$viewHelper100->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper100->initializeArgumentsAndRender();

$output0 .= '
';


return $output0;
}


}
#1461666148    30943     