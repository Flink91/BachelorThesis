<?php
class FluidCache_Powermail_Module_partial_Module_Search_16eb611352e91ab9114dcf9fde6f8dd891a3fdd5 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

<div class="powermail_module_search_field searchall searchall_mails">

	<label for="searchall_mails">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'BackendListFilterFulltextSearch';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
	</label>

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments3 = array();
$arguments3['property'] = 'all';
$arguments3['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('piVars'), 'filter.all', $renderingContext);
$arguments3['id'] = 'searchall_mails';
$arguments3['class'] = 'searchall_mails';
$arguments3['additionalAttributes'] = NULL;
$arguments3['data'] = NULL;
$arguments3['required'] = false;
$arguments3['type'] = 'text';
$arguments3['name'] = NULL;
$arguments3['autofocus'] = NULL;
$arguments3['disabled'] = NULL;
$arguments3['maxlength'] = NULL;
$arguments3['readonly'] = NULL;
$arguments3['size'] = NULL;
$arguments3['placeholder'] = NULL;
$arguments3['pattern'] = NULL;
$arguments3['errorClass'] = 'f3-form-error';
$arguments3['dir'] = NULL;
$arguments3['lang'] = NULL;
$arguments3['style'] = NULL;
$arguments3['title'] = NULL;
$arguments3['accesskey'] = NULL;
$arguments3['tabindex'] = NULL;
$arguments3['onclick'] = NULL;
$renderChildrenClosure4 = function() {return NULL;};
$viewHelper5 = $self->getViewHelper('$viewHelper5', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper5->setArguments($arguments3);
$viewHelper5->setRenderingContext($renderingContext);
$viewHelper5->setRenderChildrenClosure($renderChildrenClosure4);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper5->initializeArgumentsAndRender();

$output0 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments6 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments7 = array();
$arguments7['subject'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('formUids');
};
$arguments6['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext), 1);
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output10 = '';

$output10 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments11 = array();
$arguments11['property'] = 'form';
$arguments11['options'] = $currentVariableContainer->getOrNull('formUids');
$arguments11['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('piVars'), 'filter.form', $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments12 = array();
$arguments12['key'] = 'BackendListFilterFulltextSearchFormFilter';
$arguments12['default'] = 'Reduce to one form:';
$arguments12['id'] = NULL;
$arguments12['htmlEscape'] = NULL;
$arguments12['arguments'] = NULL;
$arguments12['extensionName'] = NULL;
$renderChildrenClosure13 = function() {return NULL;};
$arguments11['prependOptionLabel'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);
$arguments11['prependOptionValue'] = '';
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['name'] = NULL;
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['size'] = NULL;
$arguments11['disabled'] = NULL;
$arguments11['optionValueField'] = NULL;
$arguments11['optionLabelField'] = NULL;
$arguments11['sortByOptionLabel'] = false;
$arguments11['selectAllByDefault'] = false;
$arguments11['errorClass'] = 'f3-form-error';
$arguments11['multiple'] = false;
$renderChildrenClosure14 = function() {return NULL;};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper15->setArguments($arguments11);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output10 .= $viewHelper15->initializeArgumentsAndRender();

$output10 .= '
	';
return $output10;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure9, $renderingContext);

$output0 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments16 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments17 = array();
$arguments17['key'] = 'BackendListFilterFulltextSearchSubmit';
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['htmlEscape'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$renderChildrenClosure18 = function() {return NULL;};
$arguments16['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);
$arguments16['class'] = 'searchall_submit';
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['name'] = NULL;
$arguments16['property'] = NULL;
$arguments16['disabled'] = NULL;
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$renderChildrenClosure19 = function() {return NULL;};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper20->setArguments($arguments16);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output0 .= $viewHelper20->initializeArgumentsAndRender();

$output0 .= '

</div>






<h4 class="extended_search_title powermail-close">
	<span class="t3-icon t3-icon-actions t3-icon-actions-view t3-icon-move-down collapseIcon">&nbsp;</span>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments21 = array();
$arguments21['key'] = 'BackendListFilterExtendedSearch';
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['htmlEscape'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$renderChildrenClosure22 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output0 .= '
</h4>


<fieldset class="extended_search powermail-close">

	<div class="powermail_module_search_field_container1">
		<div class="powermail_module_search_field searchStart">
			<label for="searchStart">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments23 = array();
$arguments23['key'] = 'BackendListFilterStart';
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['htmlEscape'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$renderChildrenClosure24 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output0 .= '
			</label>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments25 = array();
$arguments25['property'] = 'start';
$arguments25['id'] = 'searchStart';
$arguments25['class'] = 'powermail_module_search_field_start powermail_date';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Validation\DatepickerDataAttributeViewHelper
$arguments26 = array();
$arguments26['field'] = $currentVariableContainer->getOrNull('field');
$arguments26['additionalAttributes'] = array (
);
$arguments26['value'] = '';
$renderChildrenClosure27 = function() {return NULL;};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'In2code\Powermail\ViewHelpers\Validation\DatepickerDataAttributeViewHelper');
$viewHelper28->setArguments($arguments26);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper In2code\Powermail\ViewHelpers\Validation\DatepickerDataAttributeViewHelper
$arguments25['additionalAttributes'] = $viewHelper28->initializeArgumentsAndRender();
$arguments25['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('piVars'), 'filter.start', $renderingContext);
$arguments25['data'] = NULL;
$arguments25['required'] = false;
$arguments25['type'] = 'text';
$arguments25['name'] = NULL;
$arguments25['autofocus'] = NULL;
$arguments25['disabled'] = NULL;
$arguments25['maxlength'] = NULL;
$arguments25['readonly'] = NULL;
$arguments25['size'] = NULL;
$arguments25['placeholder'] = NULL;
$arguments25['pattern'] = NULL;
$arguments25['errorClass'] = 'f3-form-error';
$arguments25['dir'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['title'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['tabindex'] = NULL;
$arguments25['onclick'] = NULL;
$renderChildrenClosure29 = function() {return NULL;};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper30->setArguments($arguments25);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper30->initializeArgumentsAndRender();

$output0 .= '
		</div>

		<div class="powermail_module_search_field searchEnd">
			<label for="searchEnd">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments31 = array();
$arguments31['key'] = 'BackendListFilterEnd';
$arguments31['id'] = NULL;
$arguments31['default'] = NULL;
$arguments31['htmlEscape'] = NULL;
$arguments31['arguments'] = NULL;
$arguments31['extensionName'] = NULL;
$renderChildrenClosure32 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output0 .= '
			</label>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments33 = array();
$arguments33['property'] = 'stop';
$arguments33['id'] = 'searchEnd';
$arguments33['class'] = 'powermail_module_search_field_end powermail_date';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Validation\DatepickerDataAttributeViewHelper
$arguments34 = array();
$arguments34['field'] = $currentVariableContainer->getOrNull('field');
$arguments34['additionalAttributes'] = array (
);
$arguments34['value'] = '';
$renderChildrenClosure35 = function() {return NULL;};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'In2code\Powermail\ViewHelpers\Validation\DatepickerDataAttributeViewHelper');
$viewHelper36->setArguments($arguments34);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper In2code\Powermail\ViewHelpers\Validation\DatepickerDataAttributeViewHelper
$arguments33['additionalAttributes'] = $viewHelper36->initializeArgumentsAndRender();
$arguments33['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('piVars'), 'filter.stop', $renderingContext);
$arguments33['data'] = NULL;
$arguments33['required'] = false;
$arguments33['type'] = 'text';
$arguments33['name'] = NULL;
$arguments33['autofocus'] = NULL;
$arguments33['disabled'] = NULL;
$arguments33['maxlength'] = NULL;
$arguments33['readonly'] = NULL;
$arguments33['size'] = NULL;
$arguments33['placeholder'] = NULL;
$arguments33['pattern'] = NULL;
$arguments33['errorClass'] = 'f3-form-error';
$arguments33['dir'] = NULL;
$arguments33['lang'] = NULL;
$arguments33['style'] = NULL;
$arguments33['title'] = NULL;
$arguments33['accesskey'] = NULL;
$arguments33['tabindex'] = NULL;
$arguments33['onclick'] = NULL;
$renderChildrenClosure37 = function() {return NULL;};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper38->setArguments($arguments33);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper38->initializeArgumentsAndRender();

$output0 .= '
		</div>

		<div class="powermail_module_search_field searchName">
			<label for="searchName">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments39 = array();
$arguments39['key'] = 'BackendListFilterName';
$arguments39['id'] = NULL;
$arguments39['default'] = NULL;
$arguments39['htmlEscape'] = NULL;
$arguments39['arguments'] = NULL;
$arguments39['extensionName'] = NULL;
$renderChildrenClosure40 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output0 .= '
			</label>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments41 = array();
$arguments41['property'] = 'sender_name';
$arguments41['id'] = 'searchName';
$arguments41['class'] = 'powermail_module_search_field_name';
$arguments41['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('piVars'), 'filter.sender_name', $renderingContext);
$arguments41['additionalAttributes'] = NULL;
$arguments41['data'] = NULL;
$arguments41['required'] = false;
$arguments41['type'] = 'text';
$arguments41['name'] = NULL;
$arguments41['autofocus'] = NULL;
$arguments41['disabled'] = NULL;
$arguments41['maxlength'] = NULL;
$arguments41['readonly'] = NULL;
$arguments41['size'] = NULL;
$arguments41['placeholder'] = NULL;
$arguments41['pattern'] = NULL;
$arguments41['errorClass'] = 'f3-form-error';
$arguments41['dir'] = NULL;
$arguments41['lang'] = NULL;
$arguments41['style'] = NULL;
$arguments41['title'] = NULL;
$arguments41['accesskey'] = NULL;
$arguments41['tabindex'] = NULL;
$arguments41['onclick'] = NULL;
$renderChildrenClosure42 = function() {return NULL;};
$viewHelper43 = $self->getViewHelper('$viewHelper43', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper43->setArguments($arguments41);
$viewHelper43->setRenderingContext($renderingContext);
$viewHelper43->setRenderChildrenClosure($renderChildrenClosure42);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper43->initializeArgumentsAndRender();

$output0 .= '
		</div>

		<div class="powermail_module_search_field searchMail">
			<label for="searchMail">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments44 = array();
$arguments44['key'] = 'BackendListFilterMail';
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['htmlEscape'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$renderChildrenClosure45 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output0 .= '
			</label>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments46 = array();
$arguments46['property'] = 'sender_mail';
$arguments46['id'] = 'searchMail';
$arguments46['class'] = 'powermail_module_search_field_mail';
$arguments46['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('piVars'), 'filter.sender_mail', $renderingContext);
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['required'] = false;
$arguments46['type'] = 'text';
$arguments46['name'] = NULL;
$arguments46['autofocus'] = NULL;
$arguments46['disabled'] = NULL;
$arguments46['maxlength'] = NULL;
$arguments46['readonly'] = NULL;
$arguments46['size'] = NULL;
$arguments46['placeholder'] = NULL;
$arguments46['pattern'] = NULL;
$arguments46['errorClass'] = 'f3-form-error';
$arguments46['dir'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['tabindex'] = NULL;
$arguments46['onclick'] = NULL;
$renderChildrenClosure47 = function() {return NULL;};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper48->setArguments($arguments46);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper48->initializeArgumentsAndRender();

$output0 .= '
		</div>

		<div class="powermail_module_search_field searchSubject">
			<label for="searchSubject">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments49 = array();
$arguments49['key'] = 'BackendListFilterSubject';
$arguments49['id'] = NULL;
$arguments49['default'] = NULL;
$arguments49['htmlEscape'] = NULL;
$arguments49['arguments'] = NULL;
$arguments49['extensionName'] = NULL;
$renderChildrenClosure50 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output0 .= '
			</label>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments51 = array();
$arguments51['property'] = 'subject';
$arguments51['id'] = 'searchSubject';
$arguments51['class'] = 'powermail_module_search_field_subject';
$arguments51['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('piVars'), 'filter.subject', $renderingContext);
$arguments51['additionalAttributes'] = NULL;
$arguments51['data'] = NULL;
$arguments51['required'] = false;
$arguments51['type'] = 'text';
$arguments51['name'] = NULL;
$arguments51['autofocus'] = NULL;
$arguments51['disabled'] = NULL;
$arguments51['maxlength'] = NULL;
$arguments51['readonly'] = NULL;
$arguments51['size'] = NULL;
$arguments51['placeholder'] = NULL;
$arguments51['pattern'] = NULL;
$arguments51['errorClass'] = 'f3-form-error';
$arguments51['dir'] = NULL;
$arguments51['lang'] = NULL;
$arguments51['style'] = NULL;
$arguments51['title'] = NULL;
$arguments51['accesskey'] = NULL;
$arguments51['tabindex'] = NULL;
$arguments51['onclick'] = NULL;
$renderChildrenClosure52 = function() {return NULL;};
$viewHelper53 = $self->getViewHelper('$viewHelper53', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper53->setArguments($arguments51);
$viewHelper53->setRenderingContext($renderingContext);
$viewHelper53->setRenderChildrenClosure($renderChildrenClosure52);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper53->initializeArgumentsAndRender();

$output0 .= '
		</div>

		<div class="powermail_module_search_field searchHidden">
			<label for="searchHidden">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments54 = array();
$arguments54['key'] = 'BackendListFilterHidden';
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['htmlEscape'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$renderChildrenClosure55 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output0 .= '
			</label>
			';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Form\AdvancedSelectViewHelper
$arguments56 = array();
$arguments56['property'] = 'hidden';
// Rendering Array
$array57 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments58 = array();
$arguments58['key'] = 'BackendListFilterShowNonHidden';
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['htmlEscape'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$renderChildrenClosure59 = function() {return NULL;};
$array57['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments60 = array();
$arguments60['key'] = 'BackendListFilterShowHidden';
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['htmlEscape'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$renderChildrenClosure61 = function() {return NULL;};
$array57['2'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);
$arguments56['options'] = $array57;
$arguments56['id'] = 'searchHidden';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments62 = array();
$arguments62['key'] = 'pleaseChoose';
$arguments62['id'] = NULL;
$arguments62['default'] = NULL;
$arguments62['htmlEscape'] = NULL;
$arguments62['arguments'] = NULL;
$arguments62['extensionName'] = NULL;
$renderChildrenClosure63 = function() {return NULL;};
$arguments56['defaultOption'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);
$arguments56['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('piVars'), 'filter.hidden', $renderingContext);
$arguments56['additionalAttributes'] = NULL;
$arguments56['data'] = NULL;
$arguments56['name'] = NULL;
$arguments56['class'] = NULL;
$arguments56['dir'] = NULL;
$arguments56['lang'] = NULL;
$arguments56['style'] = NULL;
$arguments56['title'] = NULL;
$arguments56['accesskey'] = NULL;
$arguments56['tabindex'] = NULL;
$arguments56['onclick'] = NULL;
$arguments56['size'] = NULL;
$arguments56['disabled'] = NULL;
$arguments56['optionValueField'] = NULL;
$arguments56['optionLabelField'] = NULL;
$arguments56['sortByOptionLabel'] = false;
$arguments56['selectAllByDefault'] = false;
$arguments56['errorClass'] = 'f3-form-error';
$arguments56['prependOptionLabel'] = NULL;
$arguments56['prependOptionValue'] = NULL;
$arguments56['multiple'] = false;
$renderChildrenClosure64 = function() {return NULL;};
$viewHelper65 = $self->getViewHelper('$viewHelper65', $renderingContext, 'In2code\Powermail\ViewHelpers\Form\AdvancedSelectViewHelper');
$viewHelper65->setArguments($arguments56);
$viewHelper65->setRenderingContext($renderingContext);
$viewHelper65->setRenderChildrenClosure($renderChildrenClosure64);
// End of ViewHelper In2code\Powermail\ViewHelpers\Form\AdvancedSelectViewHelper

$output0 .= $viewHelper65->initializeArgumentsAndRender();

$output0 .= '
		</div>

		<div class="powermail_module_search_field searchAddField clear">
			<label>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments66 = array();
$arguments66['key'] = 'BackendListFilterAddField';
$arguments66['id'] = NULL;
$arguments66['default'] = NULL;
$arguments66['htmlEscape'] = NULL;
$arguments66['arguments'] = NULL;
$arguments66['extensionName'] = NULL;
$renderChildrenClosure67 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output0 .= '
			</label>
			<span class="t3-icon t3-icon-actions t3-icon-actions-document t3-icon-document-new addSearchField">&nbsp;</span>
		</div>

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments68 = array();
// Rendering Boolean node
$arguments68['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('piVars'), 'filter', $renderingContext));
$arguments68['then'] = NULL;
$arguments68['else'] = NULL;
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output70 = '';

$output70 .= '
			<div class="powermail_module_search_field">
				<label>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments71 = array();
$arguments71['key'] = 'BackendListFilterClean';
$arguments71['id'] = NULL;
$arguments71['default'] = NULL;
$arguments71['htmlEscape'] = NULL;
$arguments71['arguments'] = NULL;
$arguments71['extensionName'] = NULL;
$renderChildrenClosure72 = function() {return NULL;};

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
				</label>
				<span class="cleanLink">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments73 = array();
$arguments73['action'] = $currentVariableContainer->getOrNull('forwardToAction');
$arguments73['additionalAttributes'] = NULL;
$arguments73['data'] = NULL;
$arguments73['arguments'] = array (
);
$arguments73['controller'] = NULL;
$arguments73['extensionName'] = NULL;
$arguments73['pluginName'] = NULL;
$arguments73['pageUid'] = NULL;
$arguments73['pageType'] = 0;
$arguments73['noCache'] = false;
$arguments73['noCacheHash'] = false;
$arguments73['section'] = '';
$arguments73['format'] = '';
$arguments73['linkAccessRestrictedPages'] = false;
$arguments73['additionalParams'] = array (
);
$arguments73['absolute'] = false;
$arguments73['addQueryString'] = false;
$arguments73['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments73['addQueryStringMethod'] = NULL;
$arguments73['class'] = NULL;
$arguments73['dir'] = NULL;
$arguments73['id'] = NULL;
$arguments73['lang'] = NULL;
$arguments73['style'] = NULL;
$arguments73['title'] = NULL;
$arguments73['accesskey'] = NULL;
$arguments73['tabindex'] = NULL;
$arguments73['onclick'] = NULL;
$arguments73['name'] = NULL;
$arguments73['rel'] = NULL;
$arguments73['rev'] = NULL;
$arguments73['target'] = NULL;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output75 = '';

$output75 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments76 = array();
$arguments76['key'] = 'BackendListFilterCleanLink';
$arguments76['id'] = NULL;
$arguments76['default'] = NULL;
$arguments76['htmlEscape'] = NULL;
$arguments76['arguments'] = NULL;
$arguments76['extensionName'] = NULL;
$renderChildrenClosure77 = function() {return NULL;};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
					';
return $output75;
};
$viewHelper78 = $self->getViewHelper('$viewHelper78', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper78->setArguments($arguments73);
$viewHelper78->setRenderingContext($renderingContext);
$viewHelper78->setRenderChildrenClosure($renderChildrenClosure74);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output70 .= $viewHelper78->initializeArgumentsAndRender();

$output70 .= '
				</span>
			</div>
		';
return $output70;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output0 .= '
	</div>

	<div class="powermail_module_search_field_container2 powermail-close">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments79 = array();
$arguments79['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('firstForm'), 'pages', $renderingContext);
$arguments79['as'] = 'page';
$arguments79['key'] = '';
$arguments79['reverse'] = false;
$arguments79['iteration'] = NULL;
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output81 = '';

$output81 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments82 = array();
$arguments82['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'fields', $renderingContext);
$arguments82['as'] = 'field';
$arguments82['key'] = '';
$arguments82['reverse'] = false;
$arguments82['iteration'] = NULL;
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output84 = '';

$output84 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments85 = array();
// Rendering Boolean node
$arguments85['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'advancedFieldType', $renderingContext));
$arguments85['then'] = NULL;
$arguments85['else'] = NULL;
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output87 = '';

$output87 .= '
					<div class="powermail_module_search_field searchHidden">
						<label>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments88 = array();
$arguments88['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'title', $renderingContext);
$arguments88['keepQuotes'] = false;
$arguments88['encoding'] = NULL;
$arguments88['doubleEncode'] = true;
$renderChildrenClosure89 = function() {return NULL;};
$value90 = ($arguments88['value'] !== NULL ? $arguments88['value'] : $renderChildrenClosure89());

$output87 .= (!is_string($value90) ? $value90 : htmlspecialchars($value90, ($arguments88['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments88['encoding'] !== NULL ? $arguments88['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments88['doubleEncode']));

$output87 .= '
						</label>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments91 = array();
$output92 = '';

$output92 .= 'answer.';

$output92 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'uid', $renderingContext);
$arguments91['property'] = $output92;
$arguments91['class'] = 'powermail_module_search_field_dynamicfield';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Getter\GetPiVarAnswerFieldViewHelper
$arguments93 = array();
$arguments93['piVars'] = $currentVariableContainer->getOrNull('piVars');
$arguments93['field'] = $currentVariableContainer->getOrNull('field');
$renderChildrenClosure94 = function() {return NULL;};
$viewHelper95 = $self->getViewHelper('$viewHelper95', $renderingContext, 'In2code\Powermail\ViewHelpers\Getter\GetPiVarAnswerFieldViewHelper');
$viewHelper95->setArguments($arguments93);
$viewHelper95->setRenderingContext($renderingContext);
$viewHelper95->setRenderChildrenClosure($renderChildrenClosure94);
// End of ViewHelper In2code\Powermail\ViewHelpers\Getter\GetPiVarAnswerFieldViewHelper
$arguments91['value'] = $viewHelper95->initializeArgumentsAndRender();
$arguments91['additionalAttributes'] = NULL;
$arguments91['data'] = NULL;
$arguments91['required'] = false;
$arguments91['type'] = 'text';
$arguments91['name'] = NULL;
$arguments91['autofocus'] = NULL;
$arguments91['disabled'] = NULL;
$arguments91['maxlength'] = NULL;
$arguments91['readonly'] = NULL;
$arguments91['size'] = NULL;
$arguments91['placeholder'] = NULL;
$arguments91['pattern'] = NULL;
$arguments91['errorClass'] = 'f3-form-error';
$arguments91['dir'] = NULL;
$arguments91['id'] = NULL;
$arguments91['lang'] = NULL;
$arguments91['style'] = NULL;
$arguments91['title'] = NULL;
$arguments91['accesskey'] = NULL;
$arguments91['tabindex'] = NULL;
$arguments91['onclick'] = NULL;
$renderChildrenClosure96 = function() {return NULL;};
$viewHelper97 = $self->getViewHelper('$viewHelper97', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper97->setArguments($arguments91);
$viewHelper97->setRenderingContext($renderingContext);
$viewHelper97->setRenderChildrenClosure($renderChildrenClosure96);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output87 .= $viewHelper97->initializeArgumentsAndRender();

$output87 .= '
					</div>
				';
return $output87;
};

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
			';
return $output84;
};

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
		';
return $output81;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output0 .= '
	</div>
</fieldset>
';


return $output0;
}


}
#1462872074    35578     