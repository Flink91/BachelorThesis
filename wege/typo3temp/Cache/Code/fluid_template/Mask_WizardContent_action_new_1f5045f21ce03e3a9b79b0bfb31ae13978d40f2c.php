<?php
class FluidCache_Mask_WizardContent_action_new_1f5045f21ce03e3a9b79b0bfb31ae13978d40f2c extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
				<h1 style="margin-bottom: 10px;">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments7 = array();
$arguments7['key'] = 'tx_mask.content.newheader';
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '</h1>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments9 = array();
$arguments9['partial'] = 'FormErrors';
$arguments9['section'] = NULL;
$arguments9['arguments'] = array (
);
$arguments9['optional'] = false;
$renderChildrenClosure10 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments11 = array();
$arguments11['action'] = 'create';
$arguments11['name'] = 'storage';
$arguments11['object'] = $currentVariableContainer->getOrNull('storage');
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['arguments'] = array (
);
$arguments11['controller'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['pluginName'] = NULL;
$arguments11['pageUid'] = NULL;
$arguments11['pageType'] = 0;
$arguments11['noCache'] = false;
$arguments11['noCacheHash'] = false;
$arguments11['section'] = '';
$arguments11['format'] = '';
$arguments11['additionalParams'] = array (
);
$arguments11['absolute'] = false;
$arguments11['addQueryString'] = false;
$arguments11['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments11['fieldNamePrefix'] = NULL;
$arguments11['actionUri'] = NULL;
$arguments11['objectName'] = NULL;
$arguments11['hiddenFieldClassName'] = NULL;
$arguments11['enctype'] = NULL;
$arguments11['method'] = NULL;
$arguments11['onreset'] = NULL;
$arguments11['onsubmit'] = NULL;
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output13 = '';

$output13 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments14 = array();
$arguments14['partial'] = 'WizardContent/Metadata';
// Rendering Array
$array15 = array();
$array15['storage'] = $currentVariableContainer->getOrNull('storage');
$arguments14['arguments'] = $array15;
$arguments14['section'] = NULL;
$arguments14['optional'] = false;
$renderChildrenClosure16 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments14, $renderChildrenClosure16, $renderingContext);

$output13 .= '
					<div class="row bench">
						<div class="form-group col-sm-3 tx_mask_borderright tx_mask_tabcell1">
							<ul class="tx_mask_fieldtypes" id="dragstart">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments17 = array();
$arguments17['partial'] = 'FormTypeButton';
// Rendering Array
$array18 = array();
$array18['name'] = 'String';
$arguments17['arguments'] = $array18;
$arguments17['section'] = NULL;
$arguments17['optional'] = false;
$renderChildrenClosure19 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments17, $renderChildrenClosure19, $renderingContext);

$output13 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments20 = array();
$arguments20['partial'] = 'FormTypeButton';
// Rendering Array
$array21 = array();
$array21['name'] = 'Integer';
$arguments20['arguments'] = $array21;
$arguments20['section'] = NULL;
$arguments20['optional'] = false;
$renderChildrenClosure22 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure22, $renderingContext);

$output13 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments23 = array();
$arguments23['partial'] = 'FormTypeButton';
// Rendering Array
$array24 = array();
$array24['name'] = 'Float';
$arguments23['arguments'] = $array24;
$arguments23['section'] = NULL;
$arguments23['optional'] = false;
$renderChildrenClosure25 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments23, $renderChildrenClosure25, $renderingContext);

$output13 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments26 = array();
$arguments26['partial'] = 'FormTypeButton';
// Rendering Array
$array27 = array();
$array27['name'] = 'Link';
$arguments26['arguments'] = $array27;
$arguments26['section'] = NULL;
$arguments26['optional'] = false;
$renderChildrenClosure28 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments26, $renderChildrenClosure28, $renderingContext);

$output13 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments29 = array();
$arguments29['partial'] = 'FormTypeButton';
// Rendering Array
$array30 = array();
$array30['name'] = 'Date';
$arguments29['arguments'] = $array30;
$arguments29['section'] = NULL;
$arguments29['optional'] = false;
$renderChildrenClosure31 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments29, $renderChildrenClosure31, $renderingContext);

$output13 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments32 = array();
$arguments32['partial'] = 'FormTypeButton';
// Rendering Array
$array33 = array();
$array33['name'] = 'Datetime';
$arguments32['arguments'] = $array33;
$arguments32['section'] = NULL;
$arguments32['optional'] = false;
$renderChildrenClosure34 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments32, $renderChildrenClosure34, $renderingContext);

$output13 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments35 = array();
$arguments35['partial'] = 'FormTypeButton';
// Rendering Array
$array36 = array();
$array36['name'] = 'Text';
$arguments35['arguments'] = $array36;
$arguments35['section'] = NULL;
$arguments35['optional'] = false;
$renderChildrenClosure37 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments35, $renderChildrenClosure37, $renderingContext);

$output13 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments38 = array();
$arguments38['partial'] = 'FormTypeButton';
// Rendering Array
$array39 = array();
$array39['name'] = 'Richtext';
$arguments38['arguments'] = $array39;
$arguments38['section'] = NULL;
$arguments38['optional'] = false;
$renderChildrenClosure40 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments38, $renderChildrenClosure40, $renderingContext);

$output13 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments41 = array();
$arguments41['partial'] = 'FormTypeButton';
// Rendering Array
$array42 = array();
$array42['name'] = 'Check';
$arguments41['arguments'] = $array42;
$arguments41['section'] = NULL;
$arguments41['optional'] = false;
$renderChildrenClosure43 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments41, $renderChildrenClosure43, $renderingContext);

$output13 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments44 = array();
$arguments44['partial'] = 'FormTypeButton';
// Rendering Array
$array45 = array();
$array45['name'] = 'Radio';
$arguments44['arguments'] = $array45;
$arguments44['section'] = NULL;
$arguments44['optional'] = false;
$renderChildrenClosure46 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments44, $renderChildrenClosure46, $renderingContext);

$output13 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments47 = array();
$arguments47['partial'] = 'FormTypeButton';
// Rendering Array
$array48 = array();
$array48['name'] = 'Select';
$arguments47['arguments'] = $array48;
$arguments47['section'] = NULL;
$arguments47['optional'] = false;
$renderChildrenClosure49 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments47, $renderChildrenClosure49, $renderingContext);

$output13 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments50 = array();
$arguments50['partial'] = 'FormTypeButton';
// Rendering Array
$array51 = array();
$array51['name'] = 'File';
$arguments50['arguments'] = $array51;
$arguments50['section'] = NULL;
$arguments50['optional'] = false;
$renderChildrenClosure52 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments50, $renderChildrenClosure52, $renderingContext);

$output13 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments53 = array();
$arguments53['partial'] = 'FormTypeButton';
// Rendering Array
$array54 = array();
$array54['name'] = 'Inline';
$arguments53['arguments'] = $array54;
$arguments53['section'] = NULL;
$arguments53['optional'] = false;
$renderChildrenClosure55 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments53, $renderChildrenClosure55, $renderingContext);

$output13 .= '
							</ul>
							<div>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments56 = array();
$arguments56['name'] = 'formAction[save]';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments57 = array();
$arguments57['key'] = 'tx_mask.content.save';
$arguments57['id'] = NULL;
$arguments57['default'] = NULL;
$arguments57['htmlEscape'] = NULL;
$arguments57['arguments'] = NULL;
$arguments57['extensionName'] = NULL;
$renderChildrenClosure58 = function() {return NULL;};
$arguments56['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);
$arguments56['class'] = 'btn btn-success col-sm-12';
$arguments56['additionalAttributes'] = NULL;
$arguments56['data'] = NULL;
$arguments56['property'] = NULL;
$arguments56['disabled'] = NULL;
$arguments56['dir'] = NULL;
$arguments56['id'] = NULL;
$arguments56['lang'] = NULL;
$arguments56['style'] = NULL;
$arguments56['title'] = NULL;
$arguments56['accesskey'] = NULL;
$arguments56['tabindex'] = NULL;
$arguments56['onclick'] = NULL;
$renderChildrenClosure59 = function() {return NULL;};
$viewHelper60 = $self->getViewHelper('$viewHelper60', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper60->setArguments($arguments56);
$viewHelper60->setRenderingContext($renderingContext);
$viewHelper60->setRenderChildrenClosure($renderChildrenClosure59);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output13 .= $viewHelper60->initializeArgumentsAndRender();

$output13 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments61 = array();
$arguments61['name'] = 'formAction[saveAndExit]';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments62 = array();
$arguments62['key'] = 'tx_mask.content.saveandexit';
$arguments62['id'] = NULL;
$arguments62['default'] = NULL;
$arguments62['htmlEscape'] = NULL;
$arguments62['arguments'] = NULL;
$arguments62['extensionName'] = NULL;
$renderChildrenClosure63 = function() {return NULL;};
$arguments61['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);
$arguments61['class'] = 'btn btn-default col-sm-12';
$arguments61['additionalAttributes'] = NULL;
$arguments61['data'] = NULL;
$arguments61['property'] = NULL;
$arguments61['disabled'] = NULL;
$arguments61['dir'] = NULL;
$arguments61['id'] = NULL;
$arguments61['lang'] = NULL;
$arguments61['style'] = NULL;
$arguments61['title'] = NULL;
$arguments61['accesskey'] = NULL;
$arguments61['tabindex'] = NULL;
$arguments61['onclick'] = NULL;
$renderChildrenClosure64 = function() {return NULL;};
$viewHelper65 = $self->getViewHelper('$viewHelper65', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper65->setArguments($arguments61);
$viewHelper65->setRenderingContext($renderingContext);
$viewHelper65->setRenderChildrenClosure($renderChildrenClosure64);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output13 .= $viewHelper65->initializeArgumentsAndRender();

$output13 .= '
							</div>
						</div>

						<div class="form-group col-sm-3 tx_mask_borderright tx_mask_tabcell2">
							<ul class="tx_mask_fieldtypes dragtarget"></ul>
						</div>

						<div class="form-group col-sm-6 tx_mask_tabcell3"></div>
					</div>
				';
return $output13;
};
$viewHelper66 = $self->getViewHelper('$viewHelper66', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper66->setArguments($arguments11);
$viewHelper66->setRenderingContext($renderingContext);
$viewHelper66->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper66->initializeArgumentsAndRender();

$output0 .= '

				<div style="display:none;" id="templates">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments67 = array();
$arguments67['partial'] = 'Forms/Form';
// Rendering Array
$array68 = array();
$array68['form'] = 'String';
$array68['storage'] = $currentVariableContainer->getOrNull('storage');
$array68['type'] = 'tt_content';
$arguments67['arguments'] = $array68;
$arguments67['section'] = NULL;
$arguments67['optional'] = false;
$renderChildrenClosure69 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments67, $renderChildrenClosure69, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments70 = array();
$arguments70['partial'] = 'Forms/Form';
// Rendering Array
$array71 = array();
$array71['form'] = 'Integer';
$array71['storage'] = $currentVariableContainer->getOrNull('storage');
$array71['type'] = 'tt_content';
$arguments70['arguments'] = $array71;
$arguments70['section'] = NULL;
$arguments70['optional'] = false;
$renderChildrenClosure72 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments70, $renderChildrenClosure72, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments73 = array();
$arguments73['partial'] = 'Forms/Form';
// Rendering Array
$array74 = array();
$array74['form'] = 'Float';
$array74['storage'] = $currentVariableContainer->getOrNull('storage');
$array74['type'] = 'tt_content';
$arguments73['arguments'] = $array74;
$arguments73['section'] = NULL;
$arguments73['optional'] = false;
$renderChildrenClosure75 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments73, $renderChildrenClosure75, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments76 = array();
$arguments76['partial'] = 'Forms/Form';
// Rendering Array
$array77 = array();
$array77['form'] = 'Link';
$array77['storage'] = $currentVariableContainer->getOrNull('storage');
$array77['type'] = 'tt_content';
$arguments76['arguments'] = $array77;
$arguments76['section'] = NULL;
$arguments76['optional'] = false;
$renderChildrenClosure78 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments76, $renderChildrenClosure78, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments79 = array();
$arguments79['partial'] = 'Forms/Form';
// Rendering Array
$array80 = array();
$array80['form'] = 'Date';
$array80['storage'] = $currentVariableContainer->getOrNull('storage');
$array80['type'] = 'tt_content';
$arguments79['arguments'] = $array80;
$arguments79['section'] = NULL;
$arguments79['optional'] = false;
$renderChildrenClosure81 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments79, $renderChildrenClosure81, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments82 = array();
$arguments82['partial'] = 'Forms/Form';
// Rendering Array
$array83 = array();
$array83['form'] = 'Datetime';
$array83['storage'] = $currentVariableContainer->getOrNull('storage');
$array83['type'] = 'tt_content';
$arguments82['arguments'] = $array83;
$arguments82['section'] = NULL;
$arguments82['optional'] = false;
$renderChildrenClosure84 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments82, $renderChildrenClosure84, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments85 = array();
$arguments85['partial'] = 'Forms/Form';
// Rendering Array
$array86 = array();
$array86['form'] = 'Text';
$array86['storage'] = $currentVariableContainer->getOrNull('storage');
$array86['type'] = 'tt_content';
$arguments85['arguments'] = $array86;
$arguments85['section'] = NULL;
$arguments85['optional'] = false;
$renderChildrenClosure87 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments85, $renderChildrenClosure87, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments88 = array();
$arguments88['partial'] = 'Forms/Form';
// Rendering Array
$array89 = array();
$array89['form'] = 'Richtext';
$array89['storage'] = $currentVariableContainer->getOrNull('storage');
$array89['type'] = 'tt_content';
$arguments88['arguments'] = $array89;
$arguments88['section'] = NULL;
$arguments88['optional'] = false;
$renderChildrenClosure90 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments88, $renderChildrenClosure90, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments91 = array();
$arguments91['partial'] = 'Forms/Form';
// Rendering Array
$array92 = array();
$array92['form'] = 'Check';
$array92['storage'] = $currentVariableContainer->getOrNull('storage');
$array92['type'] = 'tt_content';
$arguments91['arguments'] = $array92;
$arguments91['section'] = NULL;
$arguments91['optional'] = false;
$renderChildrenClosure93 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments91, $renderChildrenClosure93, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments94 = array();
$arguments94['partial'] = 'Forms/Form';
// Rendering Array
$array95 = array();
$array95['form'] = 'Radio';
$array95['storage'] = $currentVariableContainer->getOrNull('storage');
$array95['type'] = 'tt_content';
$arguments94['arguments'] = $array95;
$arguments94['section'] = NULL;
$arguments94['optional'] = false;
$renderChildrenClosure96 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments94, $renderChildrenClosure96, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments97 = array();
$arguments97['partial'] = 'Forms/Form';
// Rendering Array
$array98 = array();
$array98['form'] = 'Select';
$array98['storage'] = $currentVariableContainer->getOrNull('storage');
$array98['type'] = 'tt_content';
$arguments97['arguments'] = $array98;
$arguments97['section'] = NULL;
$arguments97['optional'] = false;
$renderChildrenClosure99 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments97, $renderChildrenClosure99, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments100 = array();
$arguments100['partial'] = 'Forms/Form';
// Rendering Array
$array101 = array();
$array101['form'] = 'File';
$array101['storage'] = $currentVariableContainer->getOrNull('storage');
$array101['type'] = 'tt_content';
$arguments100['arguments'] = $array101;
$arguments100['section'] = NULL;
$arguments100['optional'] = false;
$renderChildrenClosure102 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments100, $renderChildrenClosure102, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments103 = array();
$arguments103['partial'] = 'Forms/Form';
// Rendering Array
$array104 = array();
$array104['form'] = 'Inline';
$array104['storage'] = $currentVariableContainer->getOrNull('storage');
$array104['type'] = 'tt_content';
$arguments103['arguments'] = $array104;
$arguments103['section'] = NULL;
$arguments103['optional'] = false;
$renderChildrenClosure105 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments103, $renderChildrenClosure105, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments106 = array();
$arguments106['partial'] = 'Forms/Form';
// Rendering Array
$array107 = array();
$array107['form'] = 'Content';
$array107['storage'] = $currentVariableContainer->getOrNull('storage');
$array107['type'] = 'tt_content';
$arguments106['arguments'] = $array107;
$arguments106['section'] = NULL;
$arguments106['optional'] = false;
$renderChildrenClosure108 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments106, $renderChildrenClosure108, $renderingContext);

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

$output109 = '';

$output109 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments110 = array();
$arguments110['name'] = 'Default';
$renderChildrenClosure111 = function() {return NULL;};
$viewHelper112 = $self->getViewHelper('$viewHelper112', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper112->setArguments($arguments110);
$viewHelper112->setRenderingContext($renderingContext);
$viewHelper112->setRenderChildrenClosure($renderChildrenClosure111);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output109 .= $viewHelper112->initializeArgumentsAndRender();

$output109 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments113 = array();
$arguments113['name'] = 'content';
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output115 = '';

$output115 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments116 = array();
$arguments116['partial'] = 'Tabs';
// Rendering Array
$array117 = array();
$array117['active'] = 'WizardContent';
$arguments116['arguments'] = $array117;
$arguments116['section'] = NULL;
$arguments116['optional'] = false;
$renderChildrenClosure118 = function() {return NULL;};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments116, $renderChildrenClosure118, $renderingContext);

$output115 .= '

	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="DTM-mask-1">
			<div class="form-section">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments119 = array();
$arguments119['additionalAttributes'] = NULL;
$arguments119['data'] = NULL;
$arguments119['renderMode'] = NULL;
$arguments119['as'] = NULL;
$arguments119['class'] = NULL;
$arguments119['dir'] = NULL;
$arguments119['id'] = NULL;
$arguments119['lang'] = NULL;
$arguments119['style'] = NULL;
$arguments119['title'] = NULL;
$arguments119['accesskey'] = NULL;
$arguments119['tabindex'] = NULL;
$arguments119['onclick'] = NULL;
$arguments119['queueIdentifier'] = NULL;
$renderChildrenClosure120 = function() {return NULL;};
$viewHelper121 = $self->getViewHelper('$viewHelper121', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper121->setArguments($arguments119);
$viewHelper121->setRenderingContext($renderingContext);
$viewHelper121->setRenderChildrenClosure($renderChildrenClosure120);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output115 .= $viewHelper121->initializeArgumentsAndRender();

$output115 .= '
				<h1 style="margin-bottom: 10px;">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments122 = array();
$arguments122['key'] = 'tx_mask.content.newheader';
$arguments122['id'] = NULL;
$arguments122['default'] = NULL;
$arguments122['htmlEscape'] = NULL;
$arguments122['arguments'] = NULL;
$arguments122['extensionName'] = NULL;
$renderChildrenClosure123 = function() {return NULL;};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output115 .= '</h1>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments124 = array();
$arguments124['partial'] = 'FormErrors';
$arguments124['section'] = NULL;
$arguments124['arguments'] = array (
);
$arguments124['optional'] = false;
$renderChildrenClosure125 = function() {return NULL;};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output115 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments126 = array();
$arguments126['action'] = 'create';
$arguments126['name'] = 'storage';
$arguments126['object'] = $currentVariableContainer->getOrNull('storage');
$arguments126['additionalAttributes'] = NULL;
$arguments126['data'] = NULL;
$arguments126['arguments'] = array (
);
$arguments126['controller'] = NULL;
$arguments126['extensionName'] = NULL;
$arguments126['pluginName'] = NULL;
$arguments126['pageUid'] = NULL;
$arguments126['pageType'] = 0;
$arguments126['noCache'] = false;
$arguments126['noCacheHash'] = false;
$arguments126['section'] = '';
$arguments126['format'] = '';
$arguments126['additionalParams'] = array (
);
$arguments126['absolute'] = false;
$arguments126['addQueryString'] = false;
$arguments126['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments126['fieldNamePrefix'] = NULL;
$arguments126['actionUri'] = NULL;
$arguments126['objectName'] = NULL;
$arguments126['hiddenFieldClassName'] = NULL;
$arguments126['enctype'] = NULL;
$arguments126['method'] = NULL;
$arguments126['onreset'] = NULL;
$arguments126['onsubmit'] = NULL;
$arguments126['class'] = NULL;
$arguments126['dir'] = NULL;
$arguments126['id'] = NULL;
$arguments126['lang'] = NULL;
$arguments126['style'] = NULL;
$arguments126['title'] = NULL;
$arguments126['accesskey'] = NULL;
$arguments126['tabindex'] = NULL;
$arguments126['onclick'] = NULL;
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output128 = '';

$output128 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments129 = array();
$arguments129['partial'] = 'WizardContent/Metadata';
// Rendering Array
$array130 = array();
$array130['storage'] = $currentVariableContainer->getOrNull('storage');
$arguments129['arguments'] = $array130;
$arguments129['section'] = NULL;
$arguments129['optional'] = false;
$renderChildrenClosure131 = function() {return NULL;};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments129, $renderChildrenClosure131, $renderingContext);

$output128 .= '
					<div class="row bench">
						<div class="form-group col-sm-3 tx_mask_borderright tx_mask_tabcell1">
							<ul class="tx_mask_fieldtypes" id="dragstart">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments132 = array();
$arguments132['partial'] = 'FormTypeButton';
// Rendering Array
$array133 = array();
$array133['name'] = 'String';
$arguments132['arguments'] = $array133;
$arguments132['section'] = NULL;
$arguments132['optional'] = false;
$renderChildrenClosure134 = function() {return NULL;};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments132, $renderChildrenClosure134, $renderingContext);

$output128 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments135 = array();
$arguments135['partial'] = 'FormTypeButton';
// Rendering Array
$array136 = array();
$array136['name'] = 'Integer';
$arguments135['arguments'] = $array136;
$arguments135['section'] = NULL;
$arguments135['optional'] = false;
$renderChildrenClosure137 = function() {return NULL;};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments135, $renderChildrenClosure137, $renderingContext);

$output128 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments138 = array();
$arguments138['partial'] = 'FormTypeButton';
// Rendering Array
$array139 = array();
$array139['name'] = 'Float';
$arguments138['arguments'] = $array139;
$arguments138['section'] = NULL;
$arguments138['optional'] = false;
$renderChildrenClosure140 = function() {return NULL;};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments138, $renderChildrenClosure140, $renderingContext);

$output128 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments141 = array();
$arguments141['partial'] = 'FormTypeButton';
// Rendering Array
$array142 = array();
$array142['name'] = 'Link';
$arguments141['arguments'] = $array142;
$arguments141['section'] = NULL;
$arguments141['optional'] = false;
$renderChildrenClosure143 = function() {return NULL;};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments141, $renderChildrenClosure143, $renderingContext);

$output128 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments144 = array();
$arguments144['partial'] = 'FormTypeButton';
// Rendering Array
$array145 = array();
$array145['name'] = 'Date';
$arguments144['arguments'] = $array145;
$arguments144['section'] = NULL;
$arguments144['optional'] = false;
$renderChildrenClosure146 = function() {return NULL;};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments144, $renderChildrenClosure146, $renderingContext);

$output128 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments147 = array();
$arguments147['partial'] = 'FormTypeButton';
// Rendering Array
$array148 = array();
$array148['name'] = 'Datetime';
$arguments147['arguments'] = $array148;
$arguments147['section'] = NULL;
$arguments147['optional'] = false;
$renderChildrenClosure149 = function() {return NULL;};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments147, $renderChildrenClosure149, $renderingContext);

$output128 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments150 = array();
$arguments150['partial'] = 'FormTypeButton';
// Rendering Array
$array151 = array();
$array151['name'] = 'Text';
$arguments150['arguments'] = $array151;
$arguments150['section'] = NULL;
$arguments150['optional'] = false;
$renderChildrenClosure152 = function() {return NULL;};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments150, $renderChildrenClosure152, $renderingContext);

$output128 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments153 = array();
$arguments153['partial'] = 'FormTypeButton';
// Rendering Array
$array154 = array();
$array154['name'] = 'Richtext';
$arguments153['arguments'] = $array154;
$arguments153['section'] = NULL;
$arguments153['optional'] = false;
$renderChildrenClosure155 = function() {return NULL;};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments153, $renderChildrenClosure155, $renderingContext);

$output128 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments156 = array();
$arguments156['partial'] = 'FormTypeButton';
// Rendering Array
$array157 = array();
$array157['name'] = 'Check';
$arguments156['arguments'] = $array157;
$arguments156['section'] = NULL;
$arguments156['optional'] = false;
$renderChildrenClosure158 = function() {return NULL;};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments156, $renderChildrenClosure158, $renderingContext);

$output128 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments159 = array();
$arguments159['partial'] = 'FormTypeButton';
// Rendering Array
$array160 = array();
$array160['name'] = 'Radio';
$arguments159['arguments'] = $array160;
$arguments159['section'] = NULL;
$arguments159['optional'] = false;
$renderChildrenClosure161 = function() {return NULL;};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments159, $renderChildrenClosure161, $renderingContext);

$output128 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments162 = array();
$arguments162['partial'] = 'FormTypeButton';
// Rendering Array
$array163 = array();
$array163['name'] = 'Select';
$arguments162['arguments'] = $array163;
$arguments162['section'] = NULL;
$arguments162['optional'] = false;
$renderChildrenClosure164 = function() {return NULL;};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments162, $renderChildrenClosure164, $renderingContext);

$output128 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments165 = array();
$arguments165['partial'] = 'FormTypeButton';
// Rendering Array
$array166 = array();
$array166['name'] = 'File';
$arguments165['arguments'] = $array166;
$arguments165['section'] = NULL;
$arguments165['optional'] = false;
$renderChildrenClosure167 = function() {return NULL;};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments165, $renderChildrenClosure167, $renderingContext);

$output128 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments168 = array();
$arguments168['partial'] = 'FormTypeButton';
// Rendering Array
$array169 = array();
$array169['name'] = 'Inline';
$arguments168['arguments'] = $array169;
$arguments168['section'] = NULL;
$arguments168['optional'] = false;
$renderChildrenClosure170 = function() {return NULL;};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments168, $renderChildrenClosure170, $renderingContext);

$output128 .= '
							</ul>
							<div>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments171 = array();
$arguments171['name'] = 'formAction[save]';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments172 = array();
$arguments172['key'] = 'tx_mask.content.save';
$arguments172['id'] = NULL;
$arguments172['default'] = NULL;
$arguments172['htmlEscape'] = NULL;
$arguments172['arguments'] = NULL;
$arguments172['extensionName'] = NULL;
$renderChildrenClosure173 = function() {return NULL;};
$arguments171['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);
$arguments171['class'] = 'btn btn-success col-sm-12';
$arguments171['additionalAttributes'] = NULL;
$arguments171['data'] = NULL;
$arguments171['property'] = NULL;
$arguments171['disabled'] = NULL;
$arguments171['dir'] = NULL;
$arguments171['id'] = NULL;
$arguments171['lang'] = NULL;
$arguments171['style'] = NULL;
$arguments171['title'] = NULL;
$arguments171['accesskey'] = NULL;
$arguments171['tabindex'] = NULL;
$arguments171['onclick'] = NULL;
$renderChildrenClosure174 = function() {return NULL;};
$viewHelper175 = $self->getViewHelper('$viewHelper175', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper175->setArguments($arguments171);
$viewHelper175->setRenderingContext($renderingContext);
$viewHelper175->setRenderChildrenClosure($renderChildrenClosure174);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output128 .= $viewHelper175->initializeArgumentsAndRender();

$output128 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments176 = array();
$arguments176['name'] = 'formAction[saveAndExit]';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments177 = array();
$arguments177['key'] = 'tx_mask.content.saveandexit';
$arguments177['id'] = NULL;
$arguments177['default'] = NULL;
$arguments177['htmlEscape'] = NULL;
$arguments177['arguments'] = NULL;
$arguments177['extensionName'] = NULL;
$renderChildrenClosure178 = function() {return NULL;};
$arguments176['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);
$arguments176['class'] = 'btn btn-default col-sm-12';
$arguments176['additionalAttributes'] = NULL;
$arguments176['data'] = NULL;
$arguments176['property'] = NULL;
$arguments176['disabled'] = NULL;
$arguments176['dir'] = NULL;
$arguments176['id'] = NULL;
$arguments176['lang'] = NULL;
$arguments176['style'] = NULL;
$arguments176['title'] = NULL;
$arguments176['accesskey'] = NULL;
$arguments176['tabindex'] = NULL;
$arguments176['onclick'] = NULL;
$renderChildrenClosure179 = function() {return NULL;};
$viewHelper180 = $self->getViewHelper('$viewHelper180', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper180->setArguments($arguments176);
$viewHelper180->setRenderingContext($renderingContext);
$viewHelper180->setRenderChildrenClosure($renderChildrenClosure179);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output128 .= $viewHelper180->initializeArgumentsAndRender();

$output128 .= '
							</div>
						</div>

						<div class="form-group col-sm-3 tx_mask_borderright tx_mask_tabcell2">
							<ul class="tx_mask_fieldtypes dragtarget"></ul>
						</div>

						<div class="form-group col-sm-6 tx_mask_tabcell3"></div>
					</div>
				';
return $output128;
};
$viewHelper181 = $self->getViewHelper('$viewHelper181', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper181->setArguments($arguments126);
$viewHelper181->setRenderingContext($renderingContext);
$viewHelper181->setRenderChildrenClosure($renderChildrenClosure127);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output115 .= $viewHelper181->initializeArgumentsAndRender();

$output115 .= '

				<div style="display:none;" id="templates">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments182 = array();
$arguments182['partial'] = 'Forms/Form';
// Rendering Array
$array183 = array();
$array183['form'] = 'String';
$array183['storage'] = $currentVariableContainer->getOrNull('storage');
$array183['type'] = 'tt_content';
$arguments182['arguments'] = $array183;
$arguments182['section'] = NULL;
$arguments182['optional'] = false;
$renderChildrenClosure184 = function() {return NULL;};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments182, $renderChildrenClosure184, $renderingContext);

$output115 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments185 = array();
$arguments185['partial'] = 'Forms/Form';
// Rendering Array
$array186 = array();
$array186['form'] = 'Integer';
$array186['storage'] = $currentVariableContainer->getOrNull('storage');
$array186['type'] = 'tt_content';
$arguments185['arguments'] = $array186;
$arguments185['section'] = NULL;
$arguments185['optional'] = false;
$renderChildrenClosure187 = function() {return NULL;};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments185, $renderChildrenClosure187, $renderingContext);

$output115 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments188 = array();
$arguments188['partial'] = 'Forms/Form';
// Rendering Array
$array189 = array();
$array189['form'] = 'Float';
$array189['storage'] = $currentVariableContainer->getOrNull('storage');
$array189['type'] = 'tt_content';
$arguments188['arguments'] = $array189;
$arguments188['section'] = NULL;
$arguments188['optional'] = false;
$renderChildrenClosure190 = function() {return NULL;};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments188, $renderChildrenClosure190, $renderingContext);

$output115 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments191 = array();
$arguments191['partial'] = 'Forms/Form';
// Rendering Array
$array192 = array();
$array192['form'] = 'Link';
$array192['storage'] = $currentVariableContainer->getOrNull('storage');
$array192['type'] = 'tt_content';
$arguments191['arguments'] = $array192;
$arguments191['section'] = NULL;
$arguments191['optional'] = false;
$renderChildrenClosure193 = function() {return NULL;};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments191, $renderChildrenClosure193, $renderingContext);

$output115 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments194 = array();
$arguments194['partial'] = 'Forms/Form';
// Rendering Array
$array195 = array();
$array195['form'] = 'Date';
$array195['storage'] = $currentVariableContainer->getOrNull('storage');
$array195['type'] = 'tt_content';
$arguments194['arguments'] = $array195;
$arguments194['section'] = NULL;
$arguments194['optional'] = false;
$renderChildrenClosure196 = function() {return NULL;};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments194, $renderChildrenClosure196, $renderingContext);

$output115 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments197 = array();
$arguments197['partial'] = 'Forms/Form';
// Rendering Array
$array198 = array();
$array198['form'] = 'Datetime';
$array198['storage'] = $currentVariableContainer->getOrNull('storage');
$array198['type'] = 'tt_content';
$arguments197['arguments'] = $array198;
$arguments197['section'] = NULL;
$arguments197['optional'] = false;
$renderChildrenClosure199 = function() {return NULL;};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments197, $renderChildrenClosure199, $renderingContext);

$output115 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments200 = array();
$arguments200['partial'] = 'Forms/Form';
// Rendering Array
$array201 = array();
$array201['form'] = 'Text';
$array201['storage'] = $currentVariableContainer->getOrNull('storage');
$array201['type'] = 'tt_content';
$arguments200['arguments'] = $array201;
$arguments200['section'] = NULL;
$arguments200['optional'] = false;
$renderChildrenClosure202 = function() {return NULL;};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments200, $renderChildrenClosure202, $renderingContext);

$output115 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments203 = array();
$arguments203['partial'] = 'Forms/Form';
// Rendering Array
$array204 = array();
$array204['form'] = 'Richtext';
$array204['storage'] = $currentVariableContainer->getOrNull('storage');
$array204['type'] = 'tt_content';
$arguments203['arguments'] = $array204;
$arguments203['section'] = NULL;
$arguments203['optional'] = false;
$renderChildrenClosure205 = function() {return NULL;};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments203, $renderChildrenClosure205, $renderingContext);

$output115 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments206 = array();
$arguments206['partial'] = 'Forms/Form';
// Rendering Array
$array207 = array();
$array207['form'] = 'Check';
$array207['storage'] = $currentVariableContainer->getOrNull('storage');
$array207['type'] = 'tt_content';
$arguments206['arguments'] = $array207;
$arguments206['section'] = NULL;
$arguments206['optional'] = false;
$renderChildrenClosure208 = function() {return NULL;};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments206, $renderChildrenClosure208, $renderingContext);

$output115 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments209 = array();
$arguments209['partial'] = 'Forms/Form';
// Rendering Array
$array210 = array();
$array210['form'] = 'Radio';
$array210['storage'] = $currentVariableContainer->getOrNull('storage');
$array210['type'] = 'tt_content';
$arguments209['arguments'] = $array210;
$arguments209['section'] = NULL;
$arguments209['optional'] = false;
$renderChildrenClosure211 = function() {return NULL;};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments209, $renderChildrenClosure211, $renderingContext);

$output115 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments212 = array();
$arguments212['partial'] = 'Forms/Form';
// Rendering Array
$array213 = array();
$array213['form'] = 'Select';
$array213['storage'] = $currentVariableContainer->getOrNull('storage');
$array213['type'] = 'tt_content';
$arguments212['arguments'] = $array213;
$arguments212['section'] = NULL;
$arguments212['optional'] = false;
$renderChildrenClosure214 = function() {return NULL;};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments212, $renderChildrenClosure214, $renderingContext);

$output115 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments215 = array();
$arguments215['partial'] = 'Forms/Form';
// Rendering Array
$array216 = array();
$array216['form'] = 'File';
$array216['storage'] = $currentVariableContainer->getOrNull('storage');
$array216['type'] = 'tt_content';
$arguments215['arguments'] = $array216;
$arguments215['section'] = NULL;
$arguments215['optional'] = false;
$renderChildrenClosure217 = function() {return NULL;};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments215, $renderChildrenClosure217, $renderingContext);

$output115 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments218 = array();
$arguments218['partial'] = 'Forms/Form';
// Rendering Array
$array219 = array();
$array219['form'] = 'Inline';
$array219['storage'] = $currentVariableContainer->getOrNull('storage');
$array219['type'] = 'tt_content';
$arguments218['arguments'] = $array219;
$arguments218['section'] = NULL;
$arguments218['optional'] = false;
$renderChildrenClosure220 = function() {return NULL;};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments218, $renderChildrenClosure220, $renderingContext);

$output115 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments221 = array();
$arguments221['partial'] = 'Forms/Form';
// Rendering Array
$array222 = array();
$array222['form'] = 'Content';
$array222['storage'] = $currentVariableContainer->getOrNull('storage');
$array222['type'] = 'tt_content';
$arguments221['arguments'] = $array222;
$arguments221['section'] = NULL;
$arguments221['optional'] = false;
$renderChildrenClosure223 = function() {return NULL;};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments221, $renderChildrenClosure223, $renderingContext);

$output115 .= '
				</div>
			</div>
		</div>
	</div>
';
return $output115;
};

$output109 .= '';


return $output109;
}


}
#1462875032    51644     