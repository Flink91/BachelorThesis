<?php
class FluidCache_ExternalImport_DataModule_partial_DataModule_TaskFields_1f89d2dbce8ba593d7d97b12d0644a2c62e9a0ca extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments1 = array();
$arguments1['name'] = 'table';
$arguments1['value'] = $currentVariableContainer->getOrNull('table');
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['property'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments4 = array();
$arguments4['name'] = 'index';
$arguments4['value'] = $currentVariableContainer->getOrNull('index');
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['property'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output0 .= $viewHelper6->initializeArgumentsAndRender();

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments7 = array();
$arguments7['name'] = 'uid';
$arguments7['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('task'), 'uid', $renderingContext);
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['property'] = NULL;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output0 .= $viewHelper9->initializeArgumentsAndRender();

$output0 .= '
	<div class="typo3-TCEforms">
		<div class="tab-pane">
			<fieldset class="form-section">
				<div class="form-group ';
// Rendering ViewHelper Cobweb\ExternalImport\ViewHelpers\HasErrorViewHelper
$arguments10 = array();
$arguments10['for'] = 'frequency';
$arguments10['then'] = 'has-error';
$arguments10['else'] = '';
$renderChildrenClosure11 = function() {return NULL;};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'Cobweb\ExternalImport\ViewHelpers\HasErrorViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper Cobweb\ExternalImport\ViewHelpers\HasErrorViewHelper

$output0 .= $viewHelper12->initializeArgumentsAndRender();

$output0 .= '">
					<label>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments13 = array();
$arguments13['id'] = 'frequency';
$arguments13['key'] = NULL;
$arguments13['default'] = NULL;
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$renderChildrenClosure14 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
					</label>
					<div class="field-control-wrap">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments15 = array();
$arguments15['class'] = 'form-control';
$arguments15['name'] = 'frequency';
$arguments15['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('task'), 'frequency', $renderingContext);
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['required'] = false;
$arguments15['type'] = 'text';
$arguments15['property'] = NULL;
$arguments15['autofocus'] = NULL;
$arguments15['disabled'] = NULL;
$arguments15['maxlength'] = NULL;
$arguments15['readonly'] = NULL;
$arguments15['size'] = NULL;
$arguments15['placeholder'] = NULL;
$arguments15['pattern'] = NULL;
$arguments15['errorClass'] = 'f3-form-error';
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};
$viewHelper17 = $self->getViewHelper('$viewHelper17', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper17->setArguments($arguments15);
$viewHelper17->setRenderingContext($renderingContext);
$viewHelper17->setRenderChildrenClosure($renderChildrenClosure16);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper17->initializeArgumentsAndRender();

$output0 .= '
					</div>
					<div class="help-text">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments18 = array();
$arguments18['id'] = 'frequency_help';
$arguments18['key'] = NULL;
$arguments18['default'] = NULL;
$arguments18['htmlEscape'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$renderChildrenClosure19 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output0 .= '</div>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$arguments20 = array();
$arguments20['for'] = 'frequency';
$arguments20['as'] = 'validationResults';
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments23 = array();
$arguments23['partial'] = 'DataModule/ErrorMessages';
// Rendering Array
$array24 = array();
$array24['validationResults'] = $currentVariableContainer->getOrNull('validationResults');
$arguments23['arguments'] = $array24;
$arguments23['section'] = NULL;
$arguments23['optional'] = false;
$renderChildrenClosure25 = function() {return NULL;};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments23, $renderChildrenClosure25, $renderingContext);

$output22 .= '
					';
return $output22;
};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper');
$viewHelper26->setArguments($arguments20);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper

$output0 .= $viewHelper26->initializeArgumentsAndRender();

$output0 .= '
				</div>
				<div class="form-group">
					<label>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments27 = array();
$arguments27['id'] = 'task_group';
$arguments27['key'] = NULL;
$arguments27['default'] = NULL;
$arguments27['htmlEscape'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$renderChildrenClosure28 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output0 .= '
					</label>
					<div class="field-control-wrap">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments29 = array();
$arguments29['class'] = 'form-control';
$arguments29['name'] = 'group';
$arguments29['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('task'), 'group', $renderingContext);
$arguments29['options'] = $currentVariableContainer->getOrNull('groups');
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['property'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['title'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$arguments29['size'] = NULL;
$arguments29['disabled'] = NULL;
$arguments29['optionValueField'] = NULL;
$arguments29['optionLabelField'] = NULL;
$arguments29['sortByOptionLabel'] = false;
$arguments29['selectAllByDefault'] = false;
$arguments29['errorClass'] = 'f3-form-error';
$arguments29['prependOptionLabel'] = NULL;
$arguments29['prependOptionValue'] = NULL;
$arguments29['multiple'] = false;
$renderChildrenClosure30 = function() {return NULL;};
$viewHelper31 = $self->getViewHelper('$viewHelper31', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper31->setArguments($arguments29);
$viewHelper31->setRenderingContext($renderingContext);
$viewHelper31->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output0 .= $viewHelper31->initializeArgumentsAndRender();

$output0 .= '
					</div>
				</div>
				<div class="form-group ';
// Rendering ViewHelper Cobweb\ExternalImport\ViewHelpers\HasErrorViewHelper
$arguments32 = array();
$arguments32['for'] = 'start_date_hr';
$arguments32['then'] = 'has-error';
$arguments32['else'] = '';
$renderChildrenClosure33 = function() {return NULL;};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'Cobweb\ExternalImport\ViewHelpers\HasErrorViewHelper');
$viewHelper34->setArguments($arguments32);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper Cobweb\ExternalImport\ViewHelpers\HasErrorViewHelper

$output0 .= $viewHelper34->initializeArgumentsAndRender();

$output0 .= '">
					<label>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments35 = array();
$arguments35['id'] = 'start_date';
$arguments35['key'] = NULL;
$arguments35['default'] = NULL;
$arguments35['htmlEscape'] = NULL;
$arguments35['arguments'] = NULL;
$arguments35['extensionName'] = NULL;
$renderChildrenClosure36 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output0 .= '
					</label>
					<div class="field-control-wrap">
						<div class="input-group">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments37 = array();
$arguments37['class'] = 'form-control t3js-datetimepicker t3js-clearable';
// Rendering Array
$array38 = array();
$array38['date-type'] = 'datetime';
$array38['date-offset'] = 0;
$arguments37['data'] = $array38;
$arguments37['name'] = 'start_date';
$arguments37['id'] = 'start_date';
$arguments37['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('task'), 'startDate', $renderingContext);
$arguments37['additionalAttributes'] = NULL;
$arguments37['required'] = false;
$arguments37['type'] = 'text';
$arguments37['property'] = NULL;
$arguments37['autofocus'] = NULL;
$arguments37['disabled'] = NULL;
$arguments37['maxlength'] = NULL;
$arguments37['readonly'] = NULL;
$arguments37['size'] = NULL;
$arguments37['placeholder'] = NULL;
$arguments37['pattern'] = NULL;
$arguments37['errorClass'] = 'f3-form-error';
$arguments37['dir'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$renderChildrenClosure39 = function() {return NULL;};
$viewHelper40 = $self->getViewHelper('$viewHelper40', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper40->setArguments($arguments37);
$viewHelper40->setRenderingContext($renderingContext);
$viewHelper40->setRenderChildrenClosure($renderChildrenClosure39);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper40->initializeArgumentsAndRender();

$output0 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments41 = array();
$arguments41['name'] = 'start_date_hr';
$arguments41['additionalAttributes'] = NULL;
$arguments41['data'] = NULL;
$arguments41['value'] = NULL;
$arguments41['property'] = NULL;
$arguments41['class'] = NULL;
$arguments41['dir'] = NULL;
$arguments41['id'] = NULL;
$arguments41['lang'] = NULL;
$arguments41['style'] = NULL;
$arguments41['title'] = NULL;
$arguments41['accesskey'] = NULL;
$arguments41['tabindex'] = NULL;
$arguments41['onclick'] = NULL;
$renderChildrenClosure42 = function() {return NULL;};
$viewHelper43 = $self->getViewHelper('$viewHelper43', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper43->setArguments($arguments41);
$viewHelper43->setRenderingContext($renderingContext);
$viewHelper43->setRenderChildrenClosure($renderChildrenClosure42);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output0 .= $viewHelper43->initializeArgumentsAndRender();

$output0 .= '
							<span class="input-group-btn"><label class="btn btn-default" for="start_date"><span class="fa fa-calendar"></span></label></span>
						</div>
						<div class="help-text">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments44 = array();
$arguments44['id'] = 'start_date_help';
$arguments44['key'] = NULL;
$arguments44['default'] = NULL;
$arguments44['htmlEscape'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$renderChildrenClosure45 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output0 .= '</div>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$arguments46 = array();
$arguments46['for'] = 'start_date_hr';
$arguments46['as'] = 'validationResults';
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output48 = '';

$output48 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments49 = array();
$arguments49['partial'] = 'DataModule/ErrorMessages';
// Rendering Array
$array50 = array();
$array50['validationResults'] = $currentVariableContainer->getOrNull('validationResults');
$arguments49['arguments'] = $array50;
$arguments49['section'] = NULL;
$arguments49['optional'] = false;
$renderChildrenClosure51 = function() {return NULL;};

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments49, $renderChildrenClosure51, $renderingContext);

$output48 .= '
						';
return $output48;
};
$viewHelper52 = $self->getViewHelper('$viewHelper52', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper');
$viewHelper52->setArguments($arguments46);
$viewHelper52->setRenderingContext($renderingContext);
$viewHelper52->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper

$output0 .= $viewHelper52->initializeArgumentsAndRender();

$output0 .= '
					</div>
				</div>
				<div class="form-group">
					<div class="field-control-wrap">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments53 = array();
$arguments53['name'] = 'saveTask';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments54 = array();
$arguments54['id'] = 'LLL:EXT:lang/locallang_common.xlf:save';
$arguments54['key'] = NULL;
$arguments54['default'] = NULL;
$arguments54['htmlEscape'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$renderChildrenClosure55 = function() {return NULL;};
$arguments53['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);
$arguments53['class'] = 'btn btn-default';
$arguments53['additionalAttributes'] = NULL;
$arguments53['data'] = NULL;
$arguments53['property'] = NULL;
$arguments53['disabled'] = NULL;
$arguments53['dir'] = NULL;
$arguments53['id'] = NULL;
$arguments53['lang'] = NULL;
$arguments53['style'] = NULL;
$arguments53['title'] = NULL;
$arguments53['accesskey'] = NULL;
$arguments53['tabindex'] = NULL;
$arguments53['onclick'] = NULL;
$renderChildrenClosure56 = function() {return NULL;};
$viewHelper57 = $self->getViewHelper('$viewHelper57', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper57->setArguments($arguments53);
$viewHelper57->setRenderingContext($renderingContext);
$viewHelper57->setRenderChildrenClosure($renderChildrenClosure56);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output0 .= $viewHelper57->initializeArgumentsAndRender();

$output0 .= '
					</div>
				</div>
			</fieldset>
		</div>
	</div>

';


return $output0;
}


}
#1467049499    19372     