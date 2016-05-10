<?php
class FluidCache_Mask_WizardContent_action_edit_b253654f4609df7dcd64d3ce1309d1320d706c04 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'label', $renderingContext);
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = NULL;
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() {return NULL;};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output0 .= (!is_string($value9) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments7['encoding'] !== NULL ? $arguments7['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments7['doubleEncode']));

$output0 .= '</h1>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments10 = array();
$arguments10['partial'] = 'FormErrors';
$arguments10['section'] = NULL;
$arguments10['arguments'] = array (
);
$arguments10['optional'] = false;
$renderChildrenClosure11 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments12 = array();
$arguments12['action'] = 'update';
$arguments12['name'] = 'storage';
$arguments12['object'] = $currentVariableContainer->getOrNull('storage');
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['arguments'] = array (
);
$arguments12['controller'] = NULL;
$arguments12['extensionName'] = NULL;
$arguments12['pluginName'] = NULL;
$arguments12['pageUid'] = NULL;
$arguments12['pageType'] = 0;
$arguments12['noCache'] = false;
$arguments12['noCacheHash'] = false;
$arguments12['section'] = '';
$arguments12['format'] = '';
$arguments12['additionalParams'] = array (
);
$arguments12['absolute'] = false;
$arguments12['addQueryString'] = false;
$arguments12['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments12['fieldNamePrefix'] = NULL;
$arguments12['actionUri'] = NULL;
$arguments12['objectName'] = NULL;
$arguments12['hiddenFieldClassName'] = NULL;
$arguments12['enctype'] = NULL;
$arguments12['method'] = NULL;
$arguments12['onreset'] = NULL;
$arguments12['onsubmit'] = NULL;
$arguments12['class'] = NULL;
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['title'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output14 = '';

$output14 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments15 = array();
$arguments15['partial'] = 'WizardContent/Metadata';
// Rendering Array
$array16 = array();
$array16['storage'] = $currentVariableContainer->getOrNull('storage');
$array16['editMode'] = 1;
$arguments15['arguments'] = $array16;
$arguments15['section'] = NULL;
$arguments15['optional'] = false;
$renderChildrenClosure17 = function() {return NULL;};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments15, $renderChildrenClosure17, $renderingContext);

$output14 .= '
					<div class="row bench">
						<div class="form-group col-sm-3 tx_mask_borderright tx_mask_tabcell1">
							<ul class="tx_mask_fieldtypes" id="dragstart">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments18 = array();
$arguments18['partial'] = 'FormTypeButton';
// Rendering Array
$array19 = array();
$array19['name'] = 'String';
$arguments18['arguments'] = $array19;
$arguments18['section'] = NULL;
$arguments18['optional'] = false;
$renderChildrenClosure20 = function() {return NULL;};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments18, $renderChildrenClosure20, $renderingContext);

$output14 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments21 = array();
$arguments21['partial'] = 'FormTypeButton';
// Rendering Array
$array22 = array();
$array22['name'] = 'Integer';
$arguments21['arguments'] = $array22;
$arguments21['section'] = NULL;
$arguments21['optional'] = false;
$renderChildrenClosure23 = function() {return NULL;};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments21, $renderChildrenClosure23, $renderingContext);

$output14 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments24 = array();
$arguments24['partial'] = 'FormTypeButton';
// Rendering Array
$array25 = array();
$array25['name'] = 'Float';
$arguments24['arguments'] = $array25;
$arguments24['section'] = NULL;
$arguments24['optional'] = false;
$renderChildrenClosure26 = function() {return NULL;};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments24, $renderChildrenClosure26, $renderingContext);

$output14 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments27 = array();
$arguments27['partial'] = 'FormTypeButton';
// Rendering Array
$array28 = array();
$array28['name'] = 'Link';
$arguments27['arguments'] = $array28;
$arguments27['section'] = NULL;
$arguments27['optional'] = false;
$renderChildrenClosure29 = function() {return NULL;};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments27, $renderChildrenClosure29, $renderingContext);

$output14 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments30 = array();
$arguments30['partial'] = 'FormTypeButton';
// Rendering Array
$array31 = array();
$array31['name'] = 'Date';
$arguments30['arguments'] = $array31;
$arguments30['section'] = NULL;
$arguments30['optional'] = false;
$renderChildrenClosure32 = function() {return NULL;};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments30, $renderChildrenClosure32, $renderingContext);

$output14 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments33 = array();
$arguments33['partial'] = 'FormTypeButton';
// Rendering Array
$array34 = array();
$array34['name'] = 'Datetime';
$arguments33['arguments'] = $array34;
$arguments33['section'] = NULL;
$arguments33['optional'] = false;
$renderChildrenClosure35 = function() {return NULL;};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments33, $renderChildrenClosure35, $renderingContext);

$output14 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments36 = array();
$arguments36['partial'] = 'FormTypeButton';
// Rendering Array
$array37 = array();
$array37['name'] = 'Text';
$arguments36['arguments'] = $array37;
$arguments36['section'] = NULL;
$arguments36['optional'] = false;
$renderChildrenClosure38 = function() {return NULL;};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments36, $renderChildrenClosure38, $renderingContext);

$output14 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments39 = array();
$arguments39['partial'] = 'FormTypeButton';
// Rendering Array
$array40 = array();
$array40['name'] = 'Richtext';
$arguments39['arguments'] = $array40;
$arguments39['section'] = NULL;
$arguments39['optional'] = false;
$renderChildrenClosure41 = function() {return NULL;};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments39, $renderChildrenClosure41, $renderingContext);

$output14 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments42 = array();
$arguments42['partial'] = 'FormTypeButton';
// Rendering Array
$array43 = array();
$array43['name'] = 'Check';
$arguments42['arguments'] = $array43;
$arguments42['section'] = NULL;
$arguments42['optional'] = false;
$renderChildrenClosure44 = function() {return NULL;};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments42, $renderChildrenClosure44, $renderingContext);

$output14 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments45 = array();
$arguments45['partial'] = 'FormTypeButton';
// Rendering Array
$array46 = array();
$array46['name'] = 'Radio';
$arguments45['arguments'] = $array46;
$arguments45['section'] = NULL;
$arguments45['optional'] = false;
$renderChildrenClosure47 = function() {return NULL;};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments45, $renderChildrenClosure47, $renderingContext);

$output14 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments48 = array();
$arguments48['partial'] = 'FormTypeButton';
// Rendering Array
$array49 = array();
$array49['name'] = 'Select';
$arguments48['arguments'] = $array49;
$arguments48['section'] = NULL;
$arguments48['optional'] = false;
$renderChildrenClosure50 = function() {return NULL;};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments48, $renderChildrenClosure50, $renderingContext);

$output14 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments51 = array();
$arguments51['partial'] = 'FormTypeButton';
// Rendering Array
$array52 = array();
$array52['name'] = 'File';
$arguments51['arguments'] = $array52;
$arguments51['section'] = NULL;
$arguments51['optional'] = false;
$renderChildrenClosure53 = function() {return NULL;};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments51, $renderChildrenClosure53, $renderingContext);

$output14 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments54 = array();
$arguments54['partial'] = 'FormTypeButton';
// Rendering Array
$array55 = array();
$array55['name'] = 'Inline';
$arguments54['arguments'] = $array55;
$arguments54['section'] = NULL;
$arguments54['optional'] = false;
$renderChildrenClosure56 = function() {return NULL;};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments54, $renderChildrenClosure56, $renderingContext);

$output14 .= '
							</ul>
							<div>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments57 = array();
$arguments57['name'] = 'formAction[save]';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments58 = array();
$arguments58['key'] = 'tx_mask.content.save';
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['htmlEscape'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$renderChildrenClosure59 = function() {return NULL;};
$arguments57['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);
$arguments57['class'] = 'btn btn-success col-sm-12';
$arguments57['additionalAttributes'] = NULL;
$arguments57['data'] = NULL;
$arguments57['property'] = NULL;
$arguments57['disabled'] = NULL;
$arguments57['dir'] = NULL;
$arguments57['id'] = NULL;
$arguments57['lang'] = NULL;
$arguments57['style'] = NULL;
$arguments57['title'] = NULL;
$arguments57['accesskey'] = NULL;
$arguments57['tabindex'] = NULL;
$arguments57['onclick'] = NULL;
$renderChildrenClosure60 = function() {return NULL;};
$viewHelper61 = $self->getViewHelper('$viewHelper61', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper61->setArguments($arguments57);
$viewHelper61->setRenderingContext($renderingContext);
$viewHelper61->setRenderChildrenClosure($renderChildrenClosure60);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output14 .= $viewHelper61->initializeArgumentsAndRender();

$output14 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments62 = array();
$arguments62['name'] = 'formAction[saveAndExit]';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments63 = array();
$arguments63['key'] = 'tx_mask.content.saveandexit';
$arguments63['id'] = NULL;
$arguments63['default'] = NULL;
$arguments63['htmlEscape'] = NULL;
$arguments63['arguments'] = NULL;
$arguments63['extensionName'] = NULL;
$renderChildrenClosure64 = function() {return NULL;};
$arguments62['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);
$arguments62['class'] = 'btn btn-default col-sm-12';
$arguments62['additionalAttributes'] = NULL;
$arguments62['data'] = NULL;
$arguments62['property'] = NULL;
$arguments62['disabled'] = NULL;
$arguments62['dir'] = NULL;
$arguments62['id'] = NULL;
$arguments62['lang'] = NULL;
$arguments62['style'] = NULL;
$arguments62['title'] = NULL;
$arguments62['accesskey'] = NULL;
$arguments62['tabindex'] = NULL;
$arguments62['onclick'] = NULL;
$renderChildrenClosure65 = function() {return NULL;};
$viewHelper66 = $self->getViewHelper('$viewHelper66', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper66->setArguments($arguments62);
$viewHelper66->setRenderingContext($renderingContext);
$viewHelper66->setRenderChildrenClosure($renderChildrenClosure65);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output14 .= $viewHelper66->initializeArgumentsAndRender();

$output14 .= '
							</div>
						</div>
						<div class="form-group col-sm-3 tx_mask_borderright tx_mask_tabcell2">
							<ul class="tx_mask_fieldtypes dragtarget">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments67 = array();
$arguments67['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'tca', $renderingContext);
$arguments67['as'] = 'field';
$arguments67['key'] = 'key';
$arguments67['reverse'] = false;
$arguments67['iteration'] = NULL;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output69 = '';

$output69 .= '
									<li data-type="';
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments70 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments71 = array();
$arguments71['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments71['keepQuotes'] = false;
$arguments71['encoding'] = NULL;
$arguments71['doubleEncode'] = true;
$renderChildrenClosure72 = function() {return NULL;};
$value73 = ($arguments71['value'] !== NULL ? $arguments71['value'] : $renderChildrenClosure72());
$arguments70['elementKey'] = (!is_string($value73) ? $value73 : htmlspecialchars($value73, ($arguments71['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments71['encoding'] !== NULL ? $arguments71['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments71['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments74 = array();
$arguments74['value'] = $currentVariableContainer->getOrNull('key');
$arguments74['keepQuotes'] = false;
$arguments74['encoding'] = NULL;
$arguments74['doubleEncode'] = true;
$renderChildrenClosure75 = function() {return NULL;};
$value76 = ($arguments74['value'] !== NULL ? $arguments74['value'] : $renderChildrenClosure75());
$arguments70['fieldKey'] = (!is_string($value76) ? $value76 : htmlspecialchars($value76, ($arguments74['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments74['encoding'] !== NULL ? $arguments74['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments74['doubleEncode']));
$arguments70['type'] = 'tt_content';
$renderChildrenClosure77 = function() {return NULL;};
$viewHelper78 = $self->getViewHelper('$viewHelper78', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper78->setArguments($arguments70);
$viewHelper78->setRenderingContext($renderingContext);
$viewHelper78->setRenderChildrenClosure($renderChildrenClosure77);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper

$output69 .= $viewHelper78->initializeArgumentsAndRender();

$output69 .= '" class="id_';
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments79 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments80 = array();
$arguments80['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments80['keepQuotes'] = false;
$arguments80['encoding'] = NULL;
$arguments80['doubleEncode'] = true;
$renderChildrenClosure81 = function() {return NULL;};
$value82 = ($arguments80['value'] !== NULL ? $arguments80['value'] : $renderChildrenClosure81());
$arguments79['elementKey'] = (!is_string($value82) ? $value82 : htmlspecialchars($value82, ($arguments80['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments80['encoding'] !== NULL ? $arguments80['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments80['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments83 = array();
$arguments83['value'] = $currentVariableContainer->getOrNull('key');
$arguments83['keepQuotes'] = false;
$arguments83['encoding'] = NULL;
$arguments83['doubleEncode'] = true;
$renderChildrenClosure84 = function() {return NULL;};
$value85 = ($arguments83['value'] !== NULL ? $arguments83['value'] : $renderChildrenClosure84());
$arguments79['fieldKey'] = (!is_string($value85) ? $value85 : htmlspecialchars($value85, ($arguments83['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments83['encoding'] !== NULL ? $arguments83['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments83['doubleEncode']));
$arguments79['type'] = 'tt_content';
$renderChildrenClosure86 = function() {return NULL;};
$viewHelper87 = $self->getViewHelper('$viewHelper87', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper87->setArguments($arguments79);
$viewHelper87->setRenderingContext($renderingContext);
$viewHelper87->setRenderChildrenClosure($renderChildrenClosure86);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper

$output69 .= $viewHelper87->initializeArgumentsAndRender();

$output69 .= ' tx_mask_btn" data-fieldtype="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments88 = array();
// Rendering Boolean node
// Rendering ViewHelper MASK\Mask\ViewHelpers\SubstrViewHelper
$arguments89 = array();
$arguments89['string'] = $currentVariableContainer->getOrNull('key');
$arguments89['search'] = 'tx_mask';
$arguments89['from'] = '0';
$arguments89['length'] = '7';
$renderChildrenClosure90 = function() {return NULL;};
$viewHelper91 = $self->getViewHelper('$viewHelper91', $renderingContext, 'MASK\Mask\ViewHelpers\SubstrViewHelper');
$viewHelper91->setArguments($arguments89);
$viewHelper91->setRenderingContext($renderingContext);
$viewHelper91->setRenderChildrenClosure($renderChildrenClosure90);
// End of ViewHelper MASK\Mask\ViewHelpers\SubstrViewHelper
$arguments88['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper91->initializeArgumentsAndRender());
$arguments88['then'] = 'mask';
$arguments88['else'] = 'existing';
$renderChildrenClosure92 = function() {return NULL;};

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure92, $renderingContext);

$output69 .= '">
										<div class="tx_mask_btn_row">
											<div class="tx_mask_btn_img">
												';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments93 = array();
$output94 = '';

$output94 .= 'mask-fieldtype-';
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments95 = array();
$arguments95['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments95['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments95['type'] = 'tt_content';
$renderChildrenClosure96 = function() {return NULL;};
$viewHelper97 = $self->getViewHelper('$viewHelper97', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper97->setArguments($arguments95);
$viewHelper97->setRenderingContext($renderingContext);
$viewHelper97->setRenderChildrenClosure($renderChildrenClosure96);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper

$output94 .= $viewHelper97->initializeArgumentsAndRender();
$arguments93['identifier'] = $output94;
$arguments93['size'] = 'default';
$arguments93['overlay'] = NULL;
$arguments93['state'] = 'default';
$arguments93['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure98 = function() {return NULL;};

$output69 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments93, $renderChildrenClosure98, $renderingContext);

$output69 .= '
											</div>
											<div class="tx_mask_btn_text">
												<span class="id_typetext">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments99 = array();
$output100 = '';

$output100 .= 'tx_mask.field.';
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments101 = array();
$arguments101['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments101['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments101['type'] = 'tt_content';
$renderChildrenClosure102 = function() {return NULL;};
$viewHelper103 = $self->getViewHelper('$viewHelper103', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper103->setArguments($arguments101);
$viewHelper103->setRenderingContext($renderingContext);
$viewHelper103->setRenderChildrenClosure($renderChildrenClosure102);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper

$output100 .= $viewHelper103->initializeArgumentsAndRender();
$arguments99['key'] = $output100;
$arguments99['id'] = NULL;
$arguments99['default'] = NULL;
$arguments99['htmlEscape'] = NULL;
$arguments99['arguments'] = NULL;
$arguments99['extensionName'] = NULL;
$renderChildrenClosure104 = function() {return NULL;};

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments99, $renderChildrenClosure104, $renderingContext);

$output69 .= '</span>
												<span class="id_labeltext">';
// Rendering ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper
$arguments105 = array();
$arguments105['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments105['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments105['table'] = 'tt_content';
$arguments105['field'] = $currentVariableContainer->getOrNull('field');
$renderChildrenClosure106 = function() {return NULL;};
$viewHelper107 = $self->getViewHelper('$viewHelper107', $renderingContext, 'MASK\Mask\ViewHelpers\LabelViewHelper');
$viewHelper107->setArguments($arguments105);
$viewHelper107->setRenderingContext($renderingContext);
$viewHelper107->setRenderChildrenClosure($renderChildrenClosure106);
// End of ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper

$output69 .= $viewHelper107->initializeArgumentsAndRender();

$output69 .= '</span>
												<span class="id_keytext">
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments108 = array();
// Rendering Boolean node
$arguments108['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'key', $renderingContext));
$arguments108['then'] = NULL;
$arguments108['else'] = NULL;
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output110 = '';

$output110 .= '
														';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments111 = array();
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output113 = '';

$output113 .= '
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments114 = array();
$arguments114['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'key', $renderingContext);
$arguments114['keepQuotes'] = false;
$arguments114['encoding'] = NULL;
$arguments114['doubleEncode'] = true;
$renderChildrenClosure115 = function() {return NULL;};
$value116 = ($arguments114['value'] !== NULL ? $arguments114['value'] : $renderChildrenClosure115());

$output113 .= (!is_string($value116) ? $value116 : htmlspecialchars($value116, ($arguments114['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments114['encoding'] !== NULL ? $arguments114['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments114['doubleEncode']));

$output113 .= '
														';
return $output113;
};

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output110 .= '
														';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments117 = array();
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output119 = '';

$output119 .= '
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments120 = array();
$arguments120['value'] = $currentVariableContainer->getOrNull('key');
$arguments120['keepQuotes'] = false;
$arguments120['encoding'] = NULL;
$arguments120['doubleEncode'] = true;
$renderChildrenClosure121 = function() {return NULL;};
$value122 = ($arguments120['value'] !== NULL ? $arguments120['value'] : $renderChildrenClosure121());

$output119 .= (!is_string($value122) ? $value122 : htmlspecialchars($value122, ($arguments120['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments120['encoding'] !== NULL ? $arguments120['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments120['doubleEncode']));

$output119 .= '
														';
return $output119;
};

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output110 .= '
													';
return $output110;
};
$arguments108['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output123 = '';

$output123 .= '
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments124 = array();
$arguments124['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'key', $renderingContext);
$arguments124['keepQuotes'] = false;
$arguments124['encoding'] = NULL;
$arguments124['doubleEncode'] = true;
$renderChildrenClosure125 = function() {return NULL;};
$value126 = ($arguments124['value'] !== NULL ? $arguments124['value'] : $renderChildrenClosure125());

$output123 .= (!is_string($value126) ? $value126 : htmlspecialchars($value126, ($arguments124['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments124['encoding'] !== NULL ? $arguments124['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments124['doubleEncode']));

$output123 .= '
														';
return $output123;
};
$arguments108['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output127 = '';

$output127 .= '
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments128 = array();
$arguments128['value'] = $currentVariableContainer->getOrNull('key');
$arguments128['keepQuotes'] = false;
$arguments128['encoding'] = NULL;
$arguments128['doubleEncode'] = true;
$renderChildrenClosure129 = function() {return NULL;};
$value130 = ($arguments128['value'] !== NULL ? $arguments128['value'] : $renderChildrenClosure129());

$output127 .= (!is_string($value130) ? $value130 : htmlspecialchars($value130, ($arguments128['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments128['encoding'] !== NULL ? $arguments128['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments128['doubleEncode']));

$output127 .= '
														';
return $output127;
};

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output69 .= '
												</span>
											</div>
											<div class="tx_mask_btn_actions">
												<span class="id_add" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments131 = array();
$arguments131['key'] = 'tx_mask.field.titleAdd';
$arguments131['id'] = NULL;
$arguments131['default'] = NULL;
$arguments131['htmlEscape'] = NULL;
$arguments131['arguments'] = NULL;
$arguments131['extensionName'] = NULL;
$renderChildrenClosure132 = function() {return NULL;};

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output69 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments133 = array();
$arguments133['identifier'] = 'actions-edit-add';
$arguments133['size'] = 'default';
$arguments133['overlay'] = NULL;
$arguments133['state'] = 'default';
$arguments133['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure134 = function() {return NULL;};

$output69 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output69 .= '</span>
												<span class="id_delete" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments135 = array();
$arguments135['key'] = 'tx_mask.field.titleDelete';
$arguments135['id'] = NULL;
$arguments135['default'] = NULL;
$arguments135['htmlEscape'] = NULL;
$arguments135['arguments'] = NULL;
$arguments135['extensionName'] = NULL;
$renderChildrenClosure136 = function() {return NULL;};

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output69 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments137 = array();
$arguments137['identifier'] = 'actions-edit-delete';
$arguments137['size'] = 'small';
$arguments137['overlay'] = NULL;
$arguments137['state'] = 'default';
$arguments137['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure138 = function() {return NULL;};

$output69 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output69 .= '</span>
												<span class="id_move" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments139 = array();
$arguments139['key'] = 'tx_mask.field.titleMove';
$arguments139['id'] = NULL;
$arguments139['default'] = NULL;
$arguments139['htmlEscape'] = NULL;
$arguments139['arguments'] = NULL;
$arguments139['extensionName'] = NULL;
$renderChildrenClosure140 = function() {return NULL;};

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output69 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments141 = array();
$arguments141['identifier'] = 'actions-move-move';
$arguments141['size'] = 'small';
$arguments141['overlay'] = NULL;
$arguments141['state'] = 'default';
$arguments141['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure142 = function() {return NULL;};

$output69 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output69 .= '</span>
											</div>
										</div>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments143 = array();
// Rendering Boolean node
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments144 = array();
$arguments144['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments144['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments144['type'] = 'tt_content';
$renderChildrenClosure145 = function() {return NULL;};
$viewHelper146 = $self->getViewHelper('$viewHelper146', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper146->setArguments($arguments144);
$viewHelper146->setRenderingContext($renderingContext);
$viewHelper146->setRenderChildrenClosure($renderChildrenClosure145);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments143['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $viewHelper146->initializeArgumentsAndRender(), 'Inline');
$arguments143['then'] = NULL;
$arguments143['else'] = NULL;
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output148 = '';

$output148 .= '
										<div class="tx_mask_btn_caption">
											<ul class="dragtarget inline-container">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments149 = array();
$arguments149['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'inlineFields', $renderingContext);
$arguments149['as'] = 'inlineField';
$arguments149['key'] = 'inlineKey';
$arguments149['reverse'] = false;
$arguments149['iteration'] = NULL;
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output151 = '';

$output151 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments152 = array();
$arguments152['partial'] = 'Inline';
// Rendering Array
$array153 = array();
$array153['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$array153['field'] = $currentVariableContainer->getOrNull('inlineField');
$array153['storage'] = $currentVariableContainer->getOrNull('storage');
$arguments152['arguments'] = $array153;
$arguments152['section'] = NULL;
$arguments152['optional'] = false;
$renderChildrenClosure154 = function() {return NULL;};

$output151 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments152, $renderChildrenClosure154, $renderingContext);

$output151 .= '
												';
return $output151;
};

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output148 .= '
											</ul>
										</div>
									';
return $output148;
};

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments143, $renderChildrenClosure147, $renderingContext);

$output69 .= '
									</li>
								';
return $output69;
};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output14 .= '
							</ul>
						</div>
						<div class="form-group col-sm-6 tx_mask_tabcell3">
							<!--Edit-Mode-Features -->
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments155 = array();
$arguments155['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'tca', $renderingContext);
$arguments155['as'] = 'field';
$arguments155['key'] = 'key';
$arguments155['reverse'] = false;
$arguments155['iteration'] = NULL;
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output157 = '';

$output157 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments158 = array();
// Rendering Boolean node
// Rendering ViewHelper MASK\Mask\ViewHelpers\SubstrViewHelper
$arguments159 = array();
$arguments159['string'] = $currentVariableContainer->getOrNull('key');
$arguments159['search'] = 'tx_mask';
$arguments159['from'] = '0';
$arguments159['length'] = '7';
$renderChildrenClosure160 = function() {return NULL;};
$viewHelper161 = $self->getViewHelper('$viewHelper161', $renderingContext, 'MASK\Mask\ViewHelpers\SubstrViewHelper');
$viewHelper161->setArguments($arguments159);
$viewHelper161->setRenderingContext($renderingContext);
$viewHelper161->setRenderChildrenClosure($renderChildrenClosure160);
// End of ViewHelper MASK\Mask\ViewHelpers\SubstrViewHelper
$arguments158['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper161->initializeArgumentsAndRender());
$arguments158['then'] = NULL;
$arguments158['else'] = NULL;
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output163 = '';

$output163 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments164 = array();
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output166 = '';

$output166 .= '
										<!--Mask-Field-->
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments167 = array();
$arguments167['partial'] = 'RenderFieldContent';
// Rendering Array
$array168 = array();
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments169 = array();
$arguments169['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments169['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments169['type'] = 'tt_content';
$renderChildrenClosure170 = function() {return NULL;};
$viewHelper171 = $self->getViewHelper('$viewHelper171', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper171->setArguments($arguments169);
$viewHelper171->setRenderingContext($renderingContext);
$viewHelper171->setRenderChildrenClosure($renderChildrenClosure170);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$array168['form'] = $viewHelper171->initializeArgumentsAndRender();
$array168['storage'] = $currentVariableContainer->getOrNull('storage');
$array168['field'] = $currentVariableContainer->getOrNull('field');
$array168['key'] = $currentVariableContainer->getOrNull('key');
$array168['editMode'] = 1;
$array168['type'] = 'tt_content';
$arguments167['arguments'] = $array168;
$arguments167['section'] = NULL;
$arguments167['optional'] = false;
$renderChildrenClosure172 = function() {return NULL;};

$output166 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments167, $renderChildrenClosure172, $renderingContext);

$output166 .= '
									';
return $output166;
};

$output163 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output163 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments173 = array();
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output175 = '';

$output175 .= '
										<!--TYPO3-Standard-Field-->
										<div class="tx_mask_field">

											<!-- field header 3rd column: existing/TYPO3 fields (eg. bodytext) -->
											<div class="tx_mask_fieldheader">
												<div class="tx_mask_fieldheader_icon id_';
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments176 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments177 = array();
$arguments177['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments177['keepQuotes'] = false;
$arguments177['encoding'] = NULL;
$arguments177['doubleEncode'] = true;
$renderChildrenClosure178 = function() {return NULL;};
$value179 = ($arguments177['value'] !== NULL ? $arguments177['value'] : $renderChildrenClosure178());
$arguments176['elementKey'] = (!is_string($value179) ? $value179 : htmlspecialchars($value179, ($arguments177['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments177['encoding'] !== NULL ? $arguments177['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments177['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments180 = array();
$arguments180['value'] = $currentVariableContainer->getOrNull('key');
$arguments180['keepQuotes'] = false;
$arguments180['encoding'] = NULL;
$arguments180['doubleEncode'] = true;
$renderChildrenClosure181 = function() {return NULL;};
$value182 = ($arguments180['value'] !== NULL ? $arguments180['value'] : $renderChildrenClosure181());
$arguments176['fieldKey'] = (!is_string($value182) ? $value182 : htmlspecialchars($value182, ($arguments180['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments180['encoding'] !== NULL ? $arguments180['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments180['doubleEncode']));
$arguments176['type'] = 'tt_content';
$renderChildrenClosure183 = function() {return NULL;};
$viewHelper184 = $self->getViewHelper('$viewHelper184', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper184->setArguments($arguments176);
$viewHelper184->setRenderingContext($renderingContext);
$viewHelper184->setRenderChildrenClosure($renderChildrenClosure183);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper

$output175 .= $viewHelper184->initializeArgumentsAndRender();

$output175 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments185 = array();
$output186 = '';

$output186 .= 'mask-fieldtype-';
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments187 = array();
$arguments187['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments187['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments187['type'] = 'tt_content';
$renderChildrenClosure188 = function() {return NULL;};
$viewHelper189 = $self->getViewHelper('$viewHelper189', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper189->setArguments($arguments187);
$viewHelper189->setRenderingContext($renderingContext);
$viewHelper189->setRenderChildrenClosure($renderChildrenClosure188);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper

$output186 .= $viewHelper189->initializeArgumentsAndRender();
$arguments185['identifier'] = $output186;
$arguments185['size'] = 'default';
$arguments185['overlay'] = NULL;
$arguments185['state'] = 'default';
$arguments185['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure190 = function() {return NULL;};

$output175 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments185, $renderChildrenClosure190, $renderingContext);

$output175 .= '</div>
												<div class="tx_mask_fieldheader_text">
													<h1>';
// Rendering ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper
$arguments191 = array();
$arguments191['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments191['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments191['table'] = 'tt_content';
$arguments191['field'] = NULL;
$renderChildrenClosure192 = function() {return NULL;};
$viewHelper193 = $self->getViewHelper('$viewHelper193', $renderingContext, 'MASK\Mask\ViewHelpers\LabelViewHelper');
$viewHelper193->setArguments($arguments191);
$viewHelper193->setRenderingContext($renderingContext);
$viewHelper193->setRenderChildrenClosure($renderChildrenClosure192);
// End of ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper

$output175 .= $viewHelper193->initializeArgumentsAndRender();

$output175 .= '&nbsp;</h1>
													<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments194 = array();
$arguments194['value'] = $currentVariableContainer->getOrNull('key');
$arguments194['keepQuotes'] = false;
$arguments194['encoding'] = NULL;
$arguments194['doubleEncode'] = true;
$renderChildrenClosure195 = function() {return NULL;};
$value196 = ($arguments194['value'] !== NULL ? $arguments194['value'] : $renderChildrenClosure195());

$output175 .= (!is_string($value196) ? $value196 : htmlspecialchars($value196, ($arguments194['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments194['encoding'] !== NULL ? $arguments194['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments194['doubleEncode']));

$output175 .= '</p>
												</div>
											</div>

											<div class="row tx_mask_fieldcontent">
												<div class="form-group col-sm-12">
													<label class="t3js-formengine-label" for="all_overwrite">
														';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments197 = array();
$arguments197['key'] = 'tx_mask.field.overwritelabel';
$arguments197['id'] = NULL;
$arguments197['default'] = NULL;
$arguments197['htmlEscape'] = NULL;
$arguments197['arguments'] = NULL;
$arguments197['extensionName'] = NULL;
$renderChildrenClosure198 = function() {return NULL;};

$output175 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output175 .= '
													</label>
													<div class="t3js-formengine-field-item">
														<div class="form-control-wrap" style="">
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments199 = array();
// Rendering Boolean node
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments200 = array();
$arguments200['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments200['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments200['type'] = 'tt_content';
$renderChildrenClosure201 = function() {return NULL;};
$viewHelper202 = $self->getViewHelper('$viewHelper202', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper202->setArguments($arguments200);
$viewHelper202->setRenderingContext($renderingContext);
$viewHelper202->setRenderChildrenClosure($renderChildrenClosure201);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments199['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $viewHelper202->initializeArgumentsAndRender(), 'Richtext');
$arguments199['then'] = NULL;
$arguments199['else'] = NULL;
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
																<input type="hidden" name="tx_mask_tools_maskmask[storage][elements][options][--index--]" value="rte" />
															';
};

$output175 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments199, $renderChildrenClosure203, $renderingContext);

$output175 .= '
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments204 = array();
$arguments204['value'] = $currentVariableContainer->getOrNull('key');
$arguments204['name'] = 'storage[elements][columns][--index--]';
$arguments204['additionalAttributes'] = NULL;
$arguments204['data'] = NULL;
$arguments204['property'] = NULL;
$arguments204['class'] = NULL;
$arguments204['dir'] = NULL;
$arguments204['id'] = NULL;
$arguments204['lang'] = NULL;
$arguments204['style'] = NULL;
$arguments204['title'] = NULL;
$arguments204['accesskey'] = NULL;
$arguments204['tabindex'] = NULL;
$arguments204['onclick'] = NULL;
$renderChildrenClosure205 = function() {return NULL;};
$viewHelper206 = $self->getViewHelper('$viewHelper206', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper206->setArguments($arguments204);
$viewHelper206->setRenderingContext($renderingContext);
$viewHelper206->setRenderChildrenClosure($renderChildrenClosure205);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output175 .= $viewHelper206->initializeArgumentsAndRender();

$output175 .= '
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments207 = array();
$arguments207['id'] = 'all_overwrite';
$arguments207['class'] = 'form-control';
// Rendering ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper
$arguments208 = array();
$arguments208['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments208['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments208['table'] = 'tt_content';
$arguments208['field'] = $currentVariableContainer->getOrNull('field');
$renderChildrenClosure209 = function() {return NULL;};
$viewHelper210 = $self->getViewHelper('$viewHelper210', $renderingContext, 'MASK\Mask\ViewHelpers\LabelViewHelper');
$viewHelper210->setArguments($arguments208);
$viewHelper210->setRenderingContext($renderingContext);
$viewHelper210->setRenderChildrenClosure($renderChildrenClosure209);
// End of ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper
$arguments207['value'] = $viewHelper210->initializeArgumentsAndRender();
$arguments207['name'] = 'storage[elements][labels][--index--]';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments211 = array();
$arguments211['key'] = 'tx_mask.all.label';
$arguments211['id'] = NULL;
$arguments211['default'] = NULL;
$arguments211['htmlEscape'] = NULL;
$arguments211['arguments'] = NULL;
$arguments211['extensionName'] = NULL;
$renderChildrenClosure212 = function() {return NULL;};
$arguments207['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments213 = array();
$arguments213['key'] = 'tx_mask.all.label';
$arguments213['id'] = NULL;
$arguments213['default'] = NULL;
$arguments213['htmlEscape'] = NULL;
$arguments213['arguments'] = NULL;
$arguments213['extensionName'] = NULL;
$renderChildrenClosure214 = function() {return NULL;};
$arguments207['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);
$arguments207['additionalAttributes'] = NULL;
$arguments207['data'] = NULL;
$arguments207['required'] = false;
$arguments207['type'] = 'text';
$arguments207['property'] = NULL;
$arguments207['autofocus'] = NULL;
$arguments207['disabled'] = NULL;
$arguments207['maxlength'] = NULL;
$arguments207['readonly'] = NULL;
$arguments207['size'] = NULL;
$arguments207['pattern'] = NULL;
$arguments207['errorClass'] = 'f3-form-error';
$arguments207['dir'] = NULL;
$arguments207['lang'] = NULL;
$arguments207['style'] = NULL;
$arguments207['accesskey'] = NULL;
$arguments207['tabindex'] = NULL;
$arguments207['onclick'] = NULL;
$renderChildrenClosure215 = function() {return NULL;};
$viewHelper216 = $self->getViewHelper('$viewHelper216', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper216->setArguments($arguments207);
$viewHelper216->setRenderingContext($renderingContext);
$viewHelper216->setRenderChildrenClosure($renderChildrenClosure215);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output175 .= $viewHelper216->initializeArgumentsAndRender();

$output175 .= '
															<!-- Neu -->
															<div class="tx_mask_fieldcontent_new">	</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									';
return $output175;
};

$output163 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output163 .= '
								';
return $output163;
};
$arguments158['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output217 = '';

$output217 .= '
										<!--Mask-Field-->
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments218 = array();
$arguments218['partial'] = 'RenderFieldContent';
// Rendering Array
$array219 = array();
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments220 = array();
$arguments220['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments220['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments220['type'] = 'tt_content';
$renderChildrenClosure221 = function() {return NULL;};
$viewHelper222 = $self->getViewHelper('$viewHelper222', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper222->setArguments($arguments220);
$viewHelper222->setRenderingContext($renderingContext);
$viewHelper222->setRenderChildrenClosure($renderChildrenClosure221);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$array219['form'] = $viewHelper222->initializeArgumentsAndRender();
$array219['storage'] = $currentVariableContainer->getOrNull('storage');
$array219['field'] = $currentVariableContainer->getOrNull('field');
$array219['key'] = $currentVariableContainer->getOrNull('key');
$array219['editMode'] = 1;
$array219['type'] = 'tt_content';
$arguments218['arguments'] = $array219;
$arguments218['section'] = NULL;
$arguments218['optional'] = false;
$renderChildrenClosure223 = function() {return NULL;};

$output217 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments218, $renderChildrenClosure223, $renderingContext);

$output217 .= '
									';
return $output217;
};
$arguments158['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output224 = '';

$output224 .= '
										<!--TYPO3-Standard-Field-->
										<div class="tx_mask_field">

											<!-- field header 3rd column: existing/TYPO3 fields (eg. bodytext) -->
											<div class="tx_mask_fieldheader">
												<div class="tx_mask_fieldheader_icon id_';
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments225 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments226 = array();
$arguments226['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments226['keepQuotes'] = false;
$arguments226['encoding'] = NULL;
$arguments226['doubleEncode'] = true;
$renderChildrenClosure227 = function() {return NULL;};
$value228 = ($arguments226['value'] !== NULL ? $arguments226['value'] : $renderChildrenClosure227());
$arguments225['elementKey'] = (!is_string($value228) ? $value228 : htmlspecialchars($value228, ($arguments226['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments226['encoding'] !== NULL ? $arguments226['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments226['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments229 = array();
$arguments229['value'] = $currentVariableContainer->getOrNull('key');
$arguments229['keepQuotes'] = false;
$arguments229['encoding'] = NULL;
$arguments229['doubleEncode'] = true;
$renderChildrenClosure230 = function() {return NULL;};
$value231 = ($arguments229['value'] !== NULL ? $arguments229['value'] : $renderChildrenClosure230());
$arguments225['fieldKey'] = (!is_string($value231) ? $value231 : htmlspecialchars($value231, ($arguments229['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments229['encoding'] !== NULL ? $arguments229['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments229['doubleEncode']));
$arguments225['type'] = 'tt_content';
$renderChildrenClosure232 = function() {return NULL;};
$viewHelper233 = $self->getViewHelper('$viewHelper233', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper233->setArguments($arguments225);
$viewHelper233->setRenderingContext($renderingContext);
$viewHelper233->setRenderChildrenClosure($renderChildrenClosure232);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper

$output224 .= $viewHelper233->initializeArgumentsAndRender();

$output224 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments234 = array();
$output235 = '';

$output235 .= 'mask-fieldtype-';
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments236 = array();
$arguments236['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments236['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments236['type'] = 'tt_content';
$renderChildrenClosure237 = function() {return NULL;};
$viewHelper238 = $self->getViewHelper('$viewHelper238', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper238->setArguments($arguments236);
$viewHelper238->setRenderingContext($renderingContext);
$viewHelper238->setRenderChildrenClosure($renderChildrenClosure237);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper

$output235 .= $viewHelper238->initializeArgumentsAndRender();
$arguments234['identifier'] = $output235;
$arguments234['size'] = 'default';
$arguments234['overlay'] = NULL;
$arguments234['state'] = 'default';
$arguments234['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure239 = function() {return NULL;};

$output224 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments234, $renderChildrenClosure239, $renderingContext);

$output224 .= '</div>
												<div class="tx_mask_fieldheader_text">
													<h1>';
// Rendering ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper
$arguments240 = array();
$arguments240['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments240['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments240['table'] = 'tt_content';
$arguments240['field'] = NULL;
$renderChildrenClosure241 = function() {return NULL;};
$viewHelper242 = $self->getViewHelper('$viewHelper242', $renderingContext, 'MASK\Mask\ViewHelpers\LabelViewHelper');
$viewHelper242->setArguments($arguments240);
$viewHelper242->setRenderingContext($renderingContext);
$viewHelper242->setRenderChildrenClosure($renderChildrenClosure241);
// End of ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper

$output224 .= $viewHelper242->initializeArgumentsAndRender();

$output224 .= '&nbsp;</h1>
													<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments243 = array();
$arguments243['value'] = $currentVariableContainer->getOrNull('key');
$arguments243['keepQuotes'] = false;
$arguments243['encoding'] = NULL;
$arguments243['doubleEncode'] = true;
$renderChildrenClosure244 = function() {return NULL;};
$value245 = ($arguments243['value'] !== NULL ? $arguments243['value'] : $renderChildrenClosure244());

$output224 .= (!is_string($value245) ? $value245 : htmlspecialchars($value245, ($arguments243['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments243['encoding'] !== NULL ? $arguments243['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments243['doubleEncode']));

$output224 .= '</p>
												</div>
											</div>

											<div class="row tx_mask_fieldcontent">
												<div class="form-group col-sm-12">
													<label class="t3js-formengine-label" for="all_overwrite">
														';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments246 = array();
$arguments246['key'] = 'tx_mask.field.overwritelabel';
$arguments246['id'] = NULL;
$arguments246['default'] = NULL;
$arguments246['htmlEscape'] = NULL;
$arguments246['arguments'] = NULL;
$arguments246['extensionName'] = NULL;
$renderChildrenClosure247 = function() {return NULL;};

$output224 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output224 .= '
													</label>
													<div class="t3js-formengine-field-item">
														<div class="form-control-wrap" style="">
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments248 = array();
// Rendering Boolean node
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments249 = array();
$arguments249['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments249['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments249['type'] = 'tt_content';
$renderChildrenClosure250 = function() {return NULL;};
$viewHelper251 = $self->getViewHelper('$viewHelper251', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper251->setArguments($arguments249);
$viewHelper251->setRenderingContext($renderingContext);
$viewHelper251->setRenderChildrenClosure($renderChildrenClosure250);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments248['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $viewHelper251->initializeArgumentsAndRender(), 'Richtext');
$arguments248['then'] = NULL;
$arguments248['else'] = NULL;
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
																<input type="hidden" name="tx_mask_tools_maskmask[storage][elements][options][--index--]" value="rte" />
															';
};

$output224 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments248, $renderChildrenClosure252, $renderingContext);

$output224 .= '
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments253 = array();
$arguments253['value'] = $currentVariableContainer->getOrNull('key');
$arguments253['name'] = 'storage[elements][columns][--index--]';
$arguments253['additionalAttributes'] = NULL;
$arguments253['data'] = NULL;
$arguments253['property'] = NULL;
$arguments253['class'] = NULL;
$arguments253['dir'] = NULL;
$arguments253['id'] = NULL;
$arguments253['lang'] = NULL;
$arguments253['style'] = NULL;
$arguments253['title'] = NULL;
$arguments253['accesskey'] = NULL;
$arguments253['tabindex'] = NULL;
$arguments253['onclick'] = NULL;
$renderChildrenClosure254 = function() {return NULL;};
$viewHelper255 = $self->getViewHelper('$viewHelper255', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper255->setArguments($arguments253);
$viewHelper255->setRenderingContext($renderingContext);
$viewHelper255->setRenderChildrenClosure($renderChildrenClosure254);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output224 .= $viewHelper255->initializeArgumentsAndRender();

$output224 .= '
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments256 = array();
$arguments256['id'] = 'all_overwrite';
$arguments256['class'] = 'form-control';
// Rendering ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper
$arguments257 = array();
$arguments257['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments257['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments257['table'] = 'tt_content';
$arguments257['field'] = $currentVariableContainer->getOrNull('field');
$renderChildrenClosure258 = function() {return NULL;};
$viewHelper259 = $self->getViewHelper('$viewHelper259', $renderingContext, 'MASK\Mask\ViewHelpers\LabelViewHelper');
$viewHelper259->setArguments($arguments257);
$viewHelper259->setRenderingContext($renderingContext);
$viewHelper259->setRenderChildrenClosure($renderChildrenClosure258);
// End of ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper
$arguments256['value'] = $viewHelper259->initializeArgumentsAndRender();
$arguments256['name'] = 'storage[elements][labels][--index--]';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments260 = array();
$arguments260['key'] = 'tx_mask.all.label';
$arguments260['id'] = NULL;
$arguments260['default'] = NULL;
$arguments260['htmlEscape'] = NULL;
$arguments260['arguments'] = NULL;
$arguments260['extensionName'] = NULL;
$renderChildrenClosure261 = function() {return NULL;};
$arguments256['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments262 = array();
$arguments262['key'] = 'tx_mask.all.label';
$arguments262['id'] = NULL;
$arguments262['default'] = NULL;
$arguments262['htmlEscape'] = NULL;
$arguments262['arguments'] = NULL;
$arguments262['extensionName'] = NULL;
$renderChildrenClosure263 = function() {return NULL;};
$arguments256['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext);
$arguments256['additionalAttributes'] = NULL;
$arguments256['data'] = NULL;
$arguments256['required'] = false;
$arguments256['type'] = 'text';
$arguments256['property'] = NULL;
$arguments256['autofocus'] = NULL;
$arguments256['disabled'] = NULL;
$arguments256['maxlength'] = NULL;
$arguments256['readonly'] = NULL;
$arguments256['size'] = NULL;
$arguments256['pattern'] = NULL;
$arguments256['errorClass'] = 'f3-form-error';
$arguments256['dir'] = NULL;
$arguments256['lang'] = NULL;
$arguments256['style'] = NULL;
$arguments256['accesskey'] = NULL;
$arguments256['tabindex'] = NULL;
$arguments256['onclick'] = NULL;
$renderChildrenClosure264 = function() {return NULL;};
$viewHelper265 = $self->getViewHelper('$viewHelper265', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper265->setArguments($arguments256);
$viewHelper265->setRenderingContext($renderingContext);
$viewHelper265->setRenderChildrenClosure($renderChildrenClosure264);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output224 .= $viewHelper265->initializeArgumentsAndRender();

$output224 .= '
															<!-- Neu -->
															<div class="tx_mask_fieldcontent_new">	</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									';
return $output224;
};

$output157 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments158, $renderChildrenClosure162, $renderingContext);

$output157 .= '
							';
return $output157;
};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output14 .= '
						</div>
					</div>
				';
return $output14;
};
$viewHelper266 = $self->getViewHelper('$viewHelper266', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper266->setArguments($arguments12);
$viewHelper266->setRenderingContext($renderingContext);
$viewHelper266->setRenderChildrenClosure($renderChildrenClosure13);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper266->initializeArgumentsAndRender();

$output0 .= '

				<div style="display:none;" id="templates">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments267 = array();
$arguments267['partial'] = 'Forms/Form';
// Rendering Array
$array268 = array();
$array268['form'] = 'String';
$array268['storage'] = $currentVariableContainer->getOrNull('storage');
$array268['type'] = 'tt_content';
$arguments267['arguments'] = $array268;
$arguments267['section'] = NULL;
$arguments267['optional'] = false;
$renderChildrenClosure269 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments267, $renderChildrenClosure269, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments270 = array();
$arguments270['partial'] = 'Forms/Form';
// Rendering Array
$array271 = array();
$array271['form'] = 'Integer';
$array271['storage'] = $currentVariableContainer->getOrNull('storage');
$array271['type'] = 'tt_content';
$arguments270['arguments'] = $array271;
$arguments270['section'] = NULL;
$arguments270['optional'] = false;
$renderChildrenClosure272 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments270, $renderChildrenClosure272, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments273 = array();
$arguments273['partial'] = 'Forms/Form';
// Rendering Array
$array274 = array();
$array274['form'] = 'Float';
$array274['storage'] = $currentVariableContainer->getOrNull('storage');
$array274['type'] = 'tt_content';
$arguments273['arguments'] = $array274;
$arguments273['section'] = NULL;
$arguments273['optional'] = false;
$renderChildrenClosure275 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments273, $renderChildrenClosure275, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments276 = array();
$arguments276['partial'] = 'Forms/Form';
// Rendering Array
$array277 = array();
$array277['form'] = 'Link';
$array277['storage'] = $currentVariableContainer->getOrNull('storage');
$array277['type'] = 'tt_content';
$arguments276['arguments'] = $array277;
$arguments276['section'] = NULL;
$arguments276['optional'] = false;
$renderChildrenClosure278 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments276, $renderChildrenClosure278, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments279 = array();
$arguments279['partial'] = 'Forms/Form';
// Rendering Array
$array280 = array();
$array280['form'] = 'Date';
$array280['storage'] = $currentVariableContainer->getOrNull('storage');
$array280['type'] = 'tt_content';
$arguments279['arguments'] = $array280;
$arguments279['section'] = NULL;
$arguments279['optional'] = false;
$renderChildrenClosure281 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments279, $renderChildrenClosure281, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments282 = array();
$arguments282['partial'] = 'Forms/Form';
// Rendering Array
$array283 = array();
$array283['form'] = 'Datetime';
$array283['storage'] = $currentVariableContainer->getOrNull('storage');
$array283['type'] = 'tt_content';
$arguments282['arguments'] = $array283;
$arguments282['section'] = NULL;
$arguments282['optional'] = false;
$renderChildrenClosure284 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments282, $renderChildrenClosure284, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments285 = array();
$arguments285['partial'] = 'Forms/Form';
// Rendering Array
$array286 = array();
$array286['form'] = 'Text';
$array286['storage'] = $currentVariableContainer->getOrNull('storage');
$array286['type'] = 'tt_content';
$arguments285['arguments'] = $array286;
$arguments285['section'] = NULL;
$arguments285['optional'] = false;
$renderChildrenClosure287 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments285, $renderChildrenClosure287, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments288 = array();
$arguments288['partial'] = 'Forms/Form';
// Rendering Array
$array289 = array();
$array289['form'] = 'Richtext';
$array289['storage'] = $currentVariableContainer->getOrNull('storage');
$array289['type'] = 'tt_content';
$arguments288['arguments'] = $array289;
$arguments288['section'] = NULL;
$arguments288['optional'] = false;
$renderChildrenClosure290 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments288, $renderChildrenClosure290, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments291 = array();
$arguments291['partial'] = 'Forms/Form';
// Rendering Array
$array292 = array();
$array292['form'] = 'Check';
$array292['storage'] = $currentVariableContainer->getOrNull('storage');
$array292['type'] = 'tt_content';
$arguments291['arguments'] = $array292;
$arguments291['section'] = NULL;
$arguments291['optional'] = false;
$renderChildrenClosure293 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments291, $renderChildrenClosure293, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments294 = array();
$arguments294['partial'] = 'Forms/Form';
// Rendering Array
$array295 = array();
$array295['form'] = 'Radio';
$array295['storage'] = $currentVariableContainer->getOrNull('storage');
$array295['type'] = 'tt_content';
$arguments294['arguments'] = $array295;
$arguments294['section'] = NULL;
$arguments294['optional'] = false;
$renderChildrenClosure296 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments294, $renderChildrenClosure296, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments297 = array();
$arguments297['partial'] = 'Forms/Form';
// Rendering Array
$array298 = array();
$array298['form'] = 'Select';
$array298['storage'] = $currentVariableContainer->getOrNull('storage');
$array298['type'] = 'tt_content';
$arguments297['arguments'] = $array298;
$arguments297['section'] = NULL;
$arguments297['optional'] = false;
$renderChildrenClosure299 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments297, $renderChildrenClosure299, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments300 = array();
$arguments300['partial'] = 'Forms/Form';
// Rendering Array
$array301 = array();
$array301['form'] = 'File';
$array301['storage'] = $currentVariableContainer->getOrNull('storage');
$array301['type'] = 'tt_content';
$arguments300['arguments'] = $array301;
$arguments300['section'] = NULL;
$arguments300['optional'] = false;
$renderChildrenClosure302 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments300, $renderChildrenClosure302, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments303 = array();
$arguments303['partial'] = 'Forms/Form';
// Rendering Array
$array304 = array();
$array304['form'] = 'Inline';
$array304['storage'] = $currentVariableContainer->getOrNull('storage');
$array304['type'] = 'tt_content';
$arguments303['arguments'] = $array304;
$arguments303['section'] = NULL;
$arguments303['optional'] = false;
$renderChildrenClosure305 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments303, $renderChildrenClosure305, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments306 = array();
$arguments306['partial'] = 'Forms/Form';
// Rendering Array
$array307 = array();
$array307['form'] = 'Content';
$array307['storage'] = $currentVariableContainer->getOrNull('storage');
$array307['type'] = 'tt_content';
$arguments306['arguments'] = $array307;
$arguments306['section'] = NULL;
$arguments306['optional'] = false;
$renderChildrenClosure308 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments306, $renderChildrenClosure308, $renderingContext);

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

$output309 = '';

$output309 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments310 = array();
$arguments310['name'] = 'Default';
$renderChildrenClosure311 = function() {return NULL;};
$viewHelper312 = $self->getViewHelper('$viewHelper312', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper312->setArguments($arguments310);
$viewHelper312->setRenderingContext($renderingContext);
$viewHelper312->setRenderChildrenClosure($renderChildrenClosure311);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output309 .= $viewHelper312->initializeArgumentsAndRender();

$output309 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments313 = array();
$arguments313['name'] = 'content';
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output315 = '';

$output315 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments316 = array();
$arguments316['partial'] = 'Tabs';
// Rendering Array
$array317 = array();
$array317['active'] = 'WizardContent';
$arguments316['arguments'] = $array317;
$arguments316['section'] = NULL;
$arguments316['optional'] = false;
$renderChildrenClosure318 = function() {return NULL;};

$output315 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments316, $renderChildrenClosure318, $renderingContext);

$output315 .= '

	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="DTM-mask-1">
			<div class="form-section">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments319 = array();
$arguments319['additionalAttributes'] = NULL;
$arguments319['data'] = NULL;
$arguments319['renderMode'] = NULL;
$arguments319['as'] = NULL;
$arguments319['class'] = NULL;
$arguments319['dir'] = NULL;
$arguments319['id'] = NULL;
$arguments319['lang'] = NULL;
$arguments319['style'] = NULL;
$arguments319['title'] = NULL;
$arguments319['accesskey'] = NULL;
$arguments319['tabindex'] = NULL;
$arguments319['onclick'] = NULL;
$arguments319['queueIdentifier'] = NULL;
$renderChildrenClosure320 = function() {return NULL;};
$viewHelper321 = $self->getViewHelper('$viewHelper321', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper321->setArguments($arguments319);
$viewHelper321->setRenderingContext($renderingContext);
$viewHelper321->setRenderChildrenClosure($renderChildrenClosure320);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output315 .= $viewHelper321->initializeArgumentsAndRender();

$output315 .= '
				<h1 style="margin-bottom: 10px;">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments322 = array();
$arguments322['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'label', $renderingContext);
$arguments322['keepQuotes'] = false;
$arguments322['encoding'] = NULL;
$arguments322['doubleEncode'] = true;
$renderChildrenClosure323 = function() {return NULL;};
$value324 = ($arguments322['value'] !== NULL ? $arguments322['value'] : $renderChildrenClosure323());

$output315 .= (!is_string($value324) ? $value324 : htmlspecialchars($value324, ($arguments322['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments322['encoding'] !== NULL ? $arguments322['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments322['doubleEncode']));

$output315 .= '</h1>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments325 = array();
$arguments325['partial'] = 'FormErrors';
$arguments325['section'] = NULL;
$arguments325['arguments'] = array (
);
$arguments325['optional'] = false;
$renderChildrenClosure326 = function() {return NULL;};

$output315 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output315 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments327 = array();
$arguments327['action'] = 'update';
$arguments327['name'] = 'storage';
$arguments327['object'] = $currentVariableContainer->getOrNull('storage');
$arguments327['additionalAttributes'] = NULL;
$arguments327['data'] = NULL;
$arguments327['arguments'] = array (
);
$arguments327['controller'] = NULL;
$arguments327['extensionName'] = NULL;
$arguments327['pluginName'] = NULL;
$arguments327['pageUid'] = NULL;
$arguments327['pageType'] = 0;
$arguments327['noCache'] = false;
$arguments327['noCacheHash'] = false;
$arguments327['section'] = '';
$arguments327['format'] = '';
$arguments327['additionalParams'] = array (
);
$arguments327['absolute'] = false;
$arguments327['addQueryString'] = false;
$arguments327['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments327['fieldNamePrefix'] = NULL;
$arguments327['actionUri'] = NULL;
$arguments327['objectName'] = NULL;
$arguments327['hiddenFieldClassName'] = NULL;
$arguments327['enctype'] = NULL;
$arguments327['method'] = NULL;
$arguments327['onreset'] = NULL;
$arguments327['onsubmit'] = NULL;
$arguments327['class'] = NULL;
$arguments327['dir'] = NULL;
$arguments327['id'] = NULL;
$arguments327['lang'] = NULL;
$arguments327['style'] = NULL;
$arguments327['title'] = NULL;
$arguments327['accesskey'] = NULL;
$arguments327['tabindex'] = NULL;
$arguments327['onclick'] = NULL;
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output329 = '';

$output329 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments330 = array();
$arguments330['partial'] = 'WizardContent/Metadata';
// Rendering Array
$array331 = array();
$array331['storage'] = $currentVariableContainer->getOrNull('storage');
$array331['editMode'] = 1;
$arguments330['arguments'] = $array331;
$arguments330['section'] = NULL;
$arguments330['optional'] = false;
$renderChildrenClosure332 = function() {return NULL;};

$output329 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments330, $renderChildrenClosure332, $renderingContext);

$output329 .= '
					<div class="row bench">
						<div class="form-group col-sm-3 tx_mask_borderright tx_mask_tabcell1">
							<ul class="tx_mask_fieldtypes" id="dragstart">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments333 = array();
$arguments333['partial'] = 'FormTypeButton';
// Rendering Array
$array334 = array();
$array334['name'] = 'String';
$arguments333['arguments'] = $array334;
$arguments333['section'] = NULL;
$arguments333['optional'] = false;
$renderChildrenClosure335 = function() {return NULL;};

$output329 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments333, $renderChildrenClosure335, $renderingContext);

$output329 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments336 = array();
$arguments336['partial'] = 'FormTypeButton';
// Rendering Array
$array337 = array();
$array337['name'] = 'Integer';
$arguments336['arguments'] = $array337;
$arguments336['section'] = NULL;
$arguments336['optional'] = false;
$renderChildrenClosure338 = function() {return NULL;};

$output329 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments336, $renderChildrenClosure338, $renderingContext);

$output329 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments339 = array();
$arguments339['partial'] = 'FormTypeButton';
// Rendering Array
$array340 = array();
$array340['name'] = 'Float';
$arguments339['arguments'] = $array340;
$arguments339['section'] = NULL;
$arguments339['optional'] = false;
$renderChildrenClosure341 = function() {return NULL;};

$output329 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments339, $renderChildrenClosure341, $renderingContext);

$output329 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments342 = array();
$arguments342['partial'] = 'FormTypeButton';
// Rendering Array
$array343 = array();
$array343['name'] = 'Link';
$arguments342['arguments'] = $array343;
$arguments342['section'] = NULL;
$arguments342['optional'] = false;
$renderChildrenClosure344 = function() {return NULL;};

$output329 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments342, $renderChildrenClosure344, $renderingContext);

$output329 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments345 = array();
$arguments345['partial'] = 'FormTypeButton';
// Rendering Array
$array346 = array();
$array346['name'] = 'Date';
$arguments345['arguments'] = $array346;
$arguments345['section'] = NULL;
$arguments345['optional'] = false;
$renderChildrenClosure347 = function() {return NULL;};

$output329 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments345, $renderChildrenClosure347, $renderingContext);

$output329 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments348 = array();
$arguments348['partial'] = 'FormTypeButton';
// Rendering Array
$array349 = array();
$array349['name'] = 'Datetime';
$arguments348['arguments'] = $array349;
$arguments348['section'] = NULL;
$arguments348['optional'] = false;
$renderChildrenClosure350 = function() {return NULL;};

$output329 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments348, $renderChildrenClosure350, $renderingContext);

$output329 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments351 = array();
$arguments351['partial'] = 'FormTypeButton';
// Rendering Array
$array352 = array();
$array352['name'] = 'Text';
$arguments351['arguments'] = $array352;
$arguments351['section'] = NULL;
$arguments351['optional'] = false;
$renderChildrenClosure353 = function() {return NULL;};

$output329 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments351, $renderChildrenClosure353, $renderingContext);

$output329 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments354 = array();
$arguments354['partial'] = 'FormTypeButton';
// Rendering Array
$array355 = array();
$array355['name'] = 'Richtext';
$arguments354['arguments'] = $array355;
$arguments354['section'] = NULL;
$arguments354['optional'] = false;
$renderChildrenClosure356 = function() {return NULL;};

$output329 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments354, $renderChildrenClosure356, $renderingContext);

$output329 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments357 = array();
$arguments357['partial'] = 'FormTypeButton';
// Rendering Array
$array358 = array();
$array358['name'] = 'Check';
$arguments357['arguments'] = $array358;
$arguments357['section'] = NULL;
$arguments357['optional'] = false;
$renderChildrenClosure359 = function() {return NULL;};

$output329 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments357, $renderChildrenClosure359, $renderingContext);

$output329 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments360 = array();
$arguments360['partial'] = 'FormTypeButton';
// Rendering Array
$array361 = array();
$array361['name'] = 'Radio';
$arguments360['arguments'] = $array361;
$arguments360['section'] = NULL;
$arguments360['optional'] = false;
$renderChildrenClosure362 = function() {return NULL;};

$output329 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments360, $renderChildrenClosure362, $renderingContext);

$output329 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments363 = array();
$arguments363['partial'] = 'FormTypeButton';
// Rendering Array
$array364 = array();
$array364['name'] = 'Select';
$arguments363['arguments'] = $array364;
$arguments363['section'] = NULL;
$arguments363['optional'] = false;
$renderChildrenClosure365 = function() {return NULL;};

$output329 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments363, $renderChildrenClosure365, $renderingContext);

$output329 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments366 = array();
$arguments366['partial'] = 'FormTypeButton';
// Rendering Array
$array367 = array();
$array367['name'] = 'File';
$arguments366['arguments'] = $array367;
$arguments366['section'] = NULL;
$arguments366['optional'] = false;
$renderChildrenClosure368 = function() {return NULL;};

$output329 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments366, $renderChildrenClosure368, $renderingContext);

$output329 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments369 = array();
$arguments369['partial'] = 'FormTypeButton';
// Rendering Array
$array370 = array();
$array370['name'] = 'Inline';
$arguments369['arguments'] = $array370;
$arguments369['section'] = NULL;
$arguments369['optional'] = false;
$renderChildrenClosure371 = function() {return NULL;};

$output329 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments369, $renderChildrenClosure371, $renderingContext);

$output329 .= '
							</ul>
							<div>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments372 = array();
$arguments372['name'] = 'formAction[save]';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments373 = array();
$arguments373['key'] = 'tx_mask.content.save';
$arguments373['id'] = NULL;
$arguments373['default'] = NULL;
$arguments373['htmlEscape'] = NULL;
$arguments373['arguments'] = NULL;
$arguments373['extensionName'] = NULL;
$renderChildrenClosure374 = function() {return NULL;};
$arguments372['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext);
$arguments372['class'] = 'btn btn-success col-sm-12';
$arguments372['additionalAttributes'] = NULL;
$arguments372['data'] = NULL;
$arguments372['property'] = NULL;
$arguments372['disabled'] = NULL;
$arguments372['dir'] = NULL;
$arguments372['id'] = NULL;
$arguments372['lang'] = NULL;
$arguments372['style'] = NULL;
$arguments372['title'] = NULL;
$arguments372['accesskey'] = NULL;
$arguments372['tabindex'] = NULL;
$arguments372['onclick'] = NULL;
$renderChildrenClosure375 = function() {return NULL;};
$viewHelper376 = $self->getViewHelper('$viewHelper376', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper376->setArguments($arguments372);
$viewHelper376->setRenderingContext($renderingContext);
$viewHelper376->setRenderChildrenClosure($renderChildrenClosure375);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output329 .= $viewHelper376->initializeArgumentsAndRender();

$output329 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments377 = array();
$arguments377['name'] = 'formAction[saveAndExit]';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments378 = array();
$arguments378['key'] = 'tx_mask.content.saveandexit';
$arguments378['id'] = NULL;
$arguments378['default'] = NULL;
$arguments378['htmlEscape'] = NULL;
$arguments378['arguments'] = NULL;
$arguments378['extensionName'] = NULL;
$renderChildrenClosure379 = function() {return NULL;};
$arguments377['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments378, $renderChildrenClosure379, $renderingContext);
$arguments377['class'] = 'btn btn-default col-sm-12';
$arguments377['additionalAttributes'] = NULL;
$arguments377['data'] = NULL;
$arguments377['property'] = NULL;
$arguments377['disabled'] = NULL;
$arguments377['dir'] = NULL;
$arguments377['id'] = NULL;
$arguments377['lang'] = NULL;
$arguments377['style'] = NULL;
$arguments377['title'] = NULL;
$arguments377['accesskey'] = NULL;
$arguments377['tabindex'] = NULL;
$arguments377['onclick'] = NULL;
$renderChildrenClosure380 = function() {return NULL;};
$viewHelper381 = $self->getViewHelper('$viewHelper381', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper381->setArguments($arguments377);
$viewHelper381->setRenderingContext($renderingContext);
$viewHelper381->setRenderChildrenClosure($renderChildrenClosure380);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output329 .= $viewHelper381->initializeArgumentsAndRender();

$output329 .= '
							</div>
						</div>
						<div class="form-group col-sm-3 tx_mask_borderright tx_mask_tabcell2">
							<ul class="tx_mask_fieldtypes dragtarget">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments382 = array();
$arguments382['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'tca', $renderingContext);
$arguments382['as'] = 'field';
$arguments382['key'] = 'key';
$arguments382['reverse'] = false;
$arguments382['iteration'] = NULL;
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output384 = '';

$output384 .= '
									<li data-type="';
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments385 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments386 = array();
$arguments386['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments386['keepQuotes'] = false;
$arguments386['encoding'] = NULL;
$arguments386['doubleEncode'] = true;
$renderChildrenClosure387 = function() {return NULL;};
$value388 = ($arguments386['value'] !== NULL ? $arguments386['value'] : $renderChildrenClosure387());
$arguments385['elementKey'] = (!is_string($value388) ? $value388 : htmlspecialchars($value388, ($arguments386['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments386['encoding'] !== NULL ? $arguments386['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments386['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments389 = array();
$arguments389['value'] = $currentVariableContainer->getOrNull('key');
$arguments389['keepQuotes'] = false;
$arguments389['encoding'] = NULL;
$arguments389['doubleEncode'] = true;
$renderChildrenClosure390 = function() {return NULL;};
$value391 = ($arguments389['value'] !== NULL ? $arguments389['value'] : $renderChildrenClosure390());
$arguments385['fieldKey'] = (!is_string($value391) ? $value391 : htmlspecialchars($value391, ($arguments389['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments389['encoding'] !== NULL ? $arguments389['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments389['doubleEncode']));
$arguments385['type'] = 'tt_content';
$renderChildrenClosure392 = function() {return NULL;};
$viewHelper393 = $self->getViewHelper('$viewHelper393', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper393->setArguments($arguments385);
$viewHelper393->setRenderingContext($renderingContext);
$viewHelper393->setRenderChildrenClosure($renderChildrenClosure392);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper

$output384 .= $viewHelper393->initializeArgumentsAndRender();

$output384 .= '" class="id_';
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments394 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments395 = array();
$arguments395['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments395['keepQuotes'] = false;
$arguments395['encoding'] = NULL;
$arguments395['doubleEncode'] = true;
$renderChildrenClosure396 = function() {return NULL;};
$value397 = ($arguments395['value'] !== NULL ? $arguments395['value'] : $renderChildrenClosure396());
$arguments394['elementKey'] = (!is_string($value397) ? $value397 : htmlspecialchars($value397, ($arguments395['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments395['encoding'] !== NULL ? $arguments395['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments395['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments398 = array();
$arguments398['value'] = $currentVariableContainer->getOrNull('key');
$arguments398['keepQuotes'] = false;
$arguments398['encoding'] = NULL;
$arguments398['doubleEncode'] = true;
$renderChildrenClosure399 = function() {return NULL;};
$value400 = ($arguments398['value'] !== NULL ? $arguments398['value'] : $renderChildrenClosure399());
$arguments394['fieldKey'] = (!is_string($value400) ? $value400 : htmlspecialchars($value400, ($arguments398['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments398['encoding'] !== NULL ? $arguments398['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments398['doubleEncode']));
$arguments394['type'] = 'tt_content';
$renderChildrenClosure401 = function() {return NULL;};
$viewHelper402 = $self->getViewHelper('$viewHelper402', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper402->setArguments($arguments394);
$viewHelper402->setRenderingContext($renderingContext);
$viewHelper402->setRenderChildrenClosure($renderChildrenClosure401);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper

$output384 .= $viewHelper402->initializeArgumentsAndRender();

$output384 .= ' tx_mask_btn" data-fieldtype="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments403 = array();
// Rendering Boolean node
// Rendering ViewHelper MASK\Mask\ViewHelpers\SubstrViewHelper
$arguments404 = array();
$arguments404['string'] = $currentVariableContainer->getOrNull('key');
$arguments404['search'] = 'tx_mask';
$arguments404['from'] = '0';
$arguments404['length'] = '7';
$renderChildrenClosure405 = function() {return NULL;};
$viewHelper406 = $self->getViewHelper('$viewHelper406', $renderingContext, 'MASK\Mask\ViewHelpers\SubstrViewHelper');
$viewHelper406->setArguments($arguments404);
$viewHelper406->setRenderingContext($renderingContext);
$viewHelper406->setRenderChildrenClosure($renderChildrenClosure405);
// End of ViewHelper MASK\Mask\ViewHelpers\SubstrViewHelper
$arguments403['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper406->initializeArgumentsAndRender());
$arguments403['then'] = 'mask';
$arguments403['else'] = 'existing';
$renderChildrenClosure407 = function() {return NULL;};

$output384 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments403, $renderChildrenClosure407, $renderingContext);

$output384 .= '">
										<div class="tx_mask_btn_row">
											<div class="tx_mask_btn_img">
												';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments408 = array();
$output409 = '';

$output409 .= 'mask-fieldtype-';
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments410 = array();
$arguments410['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments410['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments410['type'] = 'tt_content';
$renderChildrenClosure411 = function() {return NULL;};
$viewHelper412 = $self->getViewHelper('$viewHelper412', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper412->setArguments($arguments410);
$viewHelper412->setRenderingContext($renderingContext);
$viewHelper412->setRenderChildrenClosure($renderChildrenClosure411);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper

$output409 .= $viewHelper412->initializeArgumentsAndRender();
$arguments408['identifier'] = $output409;
$arguments408['size'] = 'default';
$arguments408['overlay'] = NULL;
$arguments408['state'] = 'default';
$arguments408['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure413 = function() {return NULL;};

$output384 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments408, $renderChildrenClosure413, $renderingContext);

$output384 .= '
											</div>
											<div class="tx_mask_btn_text">
												<span class="id_typetext">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments414 = array();
$output415 = '';

$output415 .= 'tx_mask.field.';
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments416 = array();
$arguments416['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments416['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments416['type'] = 'tt_content';
$renderChildrenClosure417 = function() {return NULL;};
$viewHelper418 = $self->getViewHelper('$viewHelper418', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper418->setArguments($arguments416);
$viewHelper418->setRenderingContext($renderingContext);
$viewHelper418->setRenderChildrenClosure($renderChildrenClosure417);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper

$output415 .= $viewHelper418->initializeArgumentsAndRender();
$arguments414['key'] = $output415;
$arguments414['id'] = NULL;
$arguments414['default'] = NULL;
$arguments414['htmlEscape'] = NULL;
$arguments414['arguments'] = NULL;
$arguments414['extensionName'] = NULL;
$renderChildrenClosure419 = function() {return NULL;};

$output384 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments414, $renderChildrenClosure419, $renderingContext);

$output384 .= '</span>
												<span class="id_labeltext">';
// Rendering ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper
$arguments420 = array();
$arguments420['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments420['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments420['table'] = 'tt_content';
$arguments420['field'] = $currentVariableContainer->getOrNull('field');
$renderChildrenClosure421 = function() {return NULL;};
$viewHelper422 = $self->getViewHelper('$viewHelper422', $renderingContext, 'MASK\Mask\ViewHelpers\LabelViewHelper');
$viewHelper422->setArguments($arguments420);
$viewHelper422->setRenderingContext($renderingContext);
$viewHelper422->setRenderChildrenClosure($renderChildrenClosure421);
// End of ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper

$output384 .= $viewHelper422->initializeArgumentsAndRender();

$output384 .= '</span>
												<span class="id_keytext">
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments423 = array();
// Rendering Boolean node
$arguments423['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'key', $renderingContext));
$arguments423['then'] = NULL;
$arguments423['else'] = NULL;
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output425 = '';

$output425 .= '
														';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments426 = array();
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output428 = '';

$output428 .= '
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments429 = array();
$arguments429['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'key', $renderingContext);
$arguments429['keepQuotes'] = false;
$arguments429['encoding'] = NULL;
$arguments429['doubleEncode'] = true;
$renderChildrenClosure430 = function() {return NULL;};
$value431 = ($arguments429['value'] !== NULL ? $arguments429['value'] : $renderChildrenClosure430());

$output428 .= (!is_string($value431) ? $value431 : htmlspecialchars($value431, ($arguments429['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments429['encoding'] !== NULL ? $arguments429['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments429['doubleEncode']));

$output428 .= '
														';
return $output428;
};

$output425 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext);

$output425 .= '
														';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments432 = array();
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output434 = '';

$output434 .= '
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments435 = array();
$arguments435['value'] = $currentVariableContainer->getOrNull('key');
$arguments435['keepQuotes'] = false;
$arguments435['encoding'] = NULL;
$arguments435['doubleEncode'] = true;
$renderChildrenClosure436 = function() {return NULL;};
$value437 = ($arguments435['value'] !== NULL ? $arguments435['value'] : $renderChildrenClosure436());

$output434 .= (!is_string($value437) ? $value437 : htmlspecialchars($value437, ($arguments435['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments435['encoding'] !== NULL ? $arguments435['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments435['doubleEncode']));

$output434 .= '
														';
return $output434;
};

$output425 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext);

$output425 .= '
													';
return $output425;
};
$arguments423['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output438 = '';

$output438 .= '
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments439 = array();
$arguments439['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'key', $renderingContext);
$arguments439['keepQuotes'] = false;
$arguments439['encoding'] = NULL;
$arguments439['doubleEncode'] = true;
$renderChildrenClosure440 = function() {return NULL;};
$value441 = ($arguments439['value'] !== NULL ? $arguments439['value'] : $renderChildrenClosure440());

$output438 .= (!is_string($value441) ? $value441 : htmlspecialchars($value441, ($arguments439['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments439['encoding'] !== NULL ? $arguments439['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments439['doubleEncode']));

$output438 .= '
														';
return $output438;
};
$arguments423['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output442 = '';

$output442 .= '
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments443 = array();
$arguments443['value'] = $currentVariableContainer->getOrNull('key');
$arguments443['keepQuotes'] = false;
$arguments443['encoding'] = NULL;
$arguments443['doubleEncode'] = true;
$renderChildrenClosure444 = function() {return NULL;};
$value445 = ($arguments443['value'] !== NULL ? $arguments443['value'] : $renderChildrenClosure444());

$output442 .= (!is_string($value445) ? $value445 : htmlspecialchars($value445, ($arguments443['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments443['encoding'] !== NULL ? $arguments443['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments443['doubleEncode']));

$output442 .= '
														';
return $output442;
};

$output384 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments423, $renderChildrenClosure424, $renderingContext);

$output384 .= '
												</span>
											</div>
											<div class="tx_mask_btn_actions">
												<span class="id_add" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments446 = array();
$arguments446['key'] = 'tx_mask.field.titleAdd';
$arguments446['id'] = NULL;
$arguments446['default'] = NULL;
$arguments446['htmlEscape'] = NULL;
$arguments446['arguments'] = NULL;
$arguments446['extensionName'] = NULL;
$renderChildrenClosure447 = function() {return NULL;};

$output384 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments446, $renderChildrenClosure447, $renderingContext);

$output384 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments448 = array();
$arguments448['identifier'] = 'actions-edit-add';
$arguments448['size'] = 'default';
$arguments448['overlay'] = NULL;
$arguments448['state'] = 'default';
$arguments448['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure449 = function() {return NULL;};

$output384 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments448, $renderChildrenClosure449, $renderingContext);

$output384 .= '</span>
												<span class="id_delete" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments450 = array();
$arguments450['key'] = 'tx_mask.field.titleDelete';
$arguments450['id'] = NULL;
$arguments450['default'] = NULL;
$arguments450['htmlEscape'] = NULL;
$arguments450['arguments'] = NULL;
$arguments450['extensionName'] = NULL;
$renderChildrenClosure451 = function() {return NULL;};

$output384 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output384 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments452 = array();
$arguments452['identifier'] = 'actions-edit-delete';
$arguments452['size'] = 'small';
$arguments452['overlay'] = NULL;
$arguments452['state'] = 'default';
$arguments452['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure453 = function() {return NULL;};

$output384 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments452, $renderChildrenClosure453, $renderingContext);

$output384 .= '</span>
												<span class="id_move" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments454 = array();
$arguments454['key'] = 'tx_mask.field.titleMove';
$arguments454['id'] = NULL;
$arguments454['default'] = NULL;
$arguments454['htmlEscape'] = NULL;
$arguments454['arguments'] = NULL;
$arguments454['extensionName'] = NULL;
$renderChildrenClosure455 = function() {return NULL;};

$output384 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments454, $renderChildrenClosure455, $renderingContext);

$output384 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments456 = array();
$arguments456['identifier'] = 'actions-move-move';
$arguments456['size'] = 'small';
$arguments456['overlay'] = NULL;
$arguments456['state'] = 'default';
$arguments456['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure457 = function() {return NULL;};

$output384 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);

$output384 .= '</span>
											</div>
										</div>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments458 = array();
// Rendering Boolean node
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments459 = array();
$arguments459['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments459['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments459['type'] = 'tt_content';
$renderChildrenClosure460 = function() {return NULL;};
$viewHelper461 = $self->getViewHelper('$viewHelper461', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper461->setArguments($arguments459);
$viewHelper461->setRenderingContext($renderingContext);
$viewHelper461->setRenderChildrenClosure($renderChildrenClosure460);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments458['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $viewHelper461->initializeArgumentsAndRender(), 'Inline');
$arguments458['then'] = NULL;
$arguments458['else'] = NULL;
$renderChildrenClosure462 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output463 = '';

$output463 .= '
										<div class="tx_mask_btn_caption">
											<ul class="dragtarget inline-container">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments464 = array();
$arguments464['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'inlineFields', $renderingContext);
$arguments464['as'] = 'inlineField';
$arguments464['key'] = 'inlineKey';
$arguments464['reverse'] = false;
$arguments464['iteration'] = NULL;
$renderChildrenClosure465 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output466 = '';

$output466 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments467 = array();
$arguments467['partial'] = 'Inline';
// Rendering Array
$array468 = array();
$array468['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$array468['field'] = $currentVariableContainer->getOrNull('inlineField');
$array468['storage'] = $currentVariableContainer->getOrNull('storage');
$arguments467['arguments'] = $array468;
$arguments467['section'] = NULL;
$arguments467['optional'] = false;
$renderChildrenClosure469 = function() {return NULL;};

$output466 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments467, $renderChildrenClosure469, $renderingContext);

$output466 .= '
												';
return $output466;
};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments464, $renderChildrenClosure465, $renderingContext);

$output463 .= '
											</ul>
										</div>
									';
return $output463;
};

$output384 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments458, $renderChildrenClosure462, $renderingContext);

$output384 .= '
									</li>
								';
return $output384;
};

$output329 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output329 .= '
							</ul>
						</div>
						<div class="form-group col-sm-6 tx_mask_tabcell3">
							<!--Edit-Mode-Features -->
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments470 = array();
$arguments470['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'tca', $renderingContext);
$arguments470['as'] = 'field';
$arguments470['key'] = 'key';
$arguments470['reverse'] = false;
$arguments470['iteration'] = NULL;
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output472 = '';

$output472 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments473 = array();
// Rendering Boolean node
// Rendering ViewHelper MASK\Mask\ViewHelpers\SubstrViewHelper
$arguments474 = array();
$arguments474['string'] = $currentVariableContainer->getOrNull('key');
$arguments474['search'] = 'tx_mask';
$arguments474['from'] = '0';
$arguments474['length'] = '7';
$renderChildrenClosure475 = function() {return NULL;};
$viewHelper476 = $self->getViewHelper('$viewHelper476', $renderingContext, 'MASK\Mask\ViewHelpers\SubstrViewHelper');
$viewHelper476->setArguments($arguments474);
$viewHelper476->setRenderingContext($renderingContext);
$viewHelper476->setRenderChildrenClosure($renderChildrenClosure475);
// End of ViewHelper MASK\Mask\ViewHelpers\SubstrViewHelper
$arguments473['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper476->initializeArgumentsAndRender());
$arguments473['then'] = NULL;
$arguments473['else'] = NULL;
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output478 = '';

$output478 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments479 = array();
$renderChildrenClosure480 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output481 = '';

$output481 .= '
										<!--Mask-Field-->
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments482 = array();
$arguments482['partial'] = 'RenderFieldContent';
// Rendering Array
$array483 = array();
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments484 = array();
$arguments484['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments484['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments484['type'] = 'tt_content';
$renderChildrenClosure485 = function() {return NULL;};
$viewHelper486 = $self->getViewHelper('$viewHelper486', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper486->setArguments($arguments484);
$viewHelper486->setRenderingContext($renderingContext);
$viewHelper486->setRenderChildrenClosure($renderChildrenClosure485);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$array483['form'] = $viewHelper486->initializeArgumentsAndRender();
$array483['storage'] = $currentVariableContainer->getOrNull('storage');
$array483['field'] = $currentVariableContainer->getOrNull('field');
$array483['key'] = $currentVariableContainer->getOrNull('key');
$array483['editMode'] = 1;
$array483['type'] = 'tt_content';
$arguments482['arguments'] = $array483;
$arguments482['section'] = NULL;
$arguments482['optional'] = false;
$renderChildrenClosure487 = function() {return NULL;};

$output481 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments482, $renderChildrenClosure487, $renderingContext);

$output481 .= '
									';
return $output481;
};

$output478 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments479, $renderChildrenClosure480, $renderingContext);

$output478 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments488 = array();
$renderChildrenClosure489 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output490 = '';

$output490 .= '
										<!--TYPO3-Standard-Field-->
										<div class="tx_mask_field">

											<!-- field header 3rd column: existing/TYPO3 fields (eg. bodytext) -->
											<div class="tx_mask_fieldheader">
												<div class="tx_mask_fieldheader_icon id_';
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments491 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments492 = array();
$arguments492['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments492['keepQuotes'] = false;
$arguments492['encoding'] = NULL;
$arguments492['doubleEncode'] = true;
$renderChildrenClosure493 = function() {return NULL;};
$value494 = ($arguments492['value'] !== NULL ? $arguments492['value'] : $renderChildrenClosure493());
$arguments491['elementKey'] = (!is_string($value494) ? $value494 : htmlspecialchars($value494, ($arguments492['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments492['encoding'] !== NULL ? $arguments492['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments492['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments495 = array();
$arguments495['value'] = $currentVariableContainer->getOrNull('key');
$arguments495['keepQuotes'] = false;
$arguments495['encoding'] = NULL;
$arguments495['doubleEncode'] = true;
$renderChildrenClosure496 = function() {return NULL;};
$value497 = ($arguments495['value'] !== NULL ? $arguments495['value'] : $renderChildrenClosure496());
$arguments491['fieldKey'] = (!is_string($value497) ? $value497 : htmlspecialchars($value497, ($arguments495['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments495['encoding'] !== NULL ? $arguments495['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments495['doubleEncode']));
$arguments491['type'] = 'tt_content';
$renderChildrenClosure498 = function() {return NULL;};
$viewHelper499 = $self->getViewHelper('$viewHelper499', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper499->setArguments($arguments491);
$viewHelper499->setRenderingContext($renderingContext);
$viewHelper499->setRenderChildrenClosure($renderChildrenClosure498);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper

$output490 .= $viewHelper499->initializeArgumentsAndRender();

$output490 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments500 = array();
$output501 = '';

$output501 .= 'mask-fieldtype-';
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments502 = array();
$arguments502['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments502['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments502['type'] = 'tt_content';
$renderChildrenClosure503 = function() {return NULL;};
$viewHelper504 = $self->getViewHelper('$viewHelper504', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper504->setArguments($arguments502);
$viewHelper504->setRenderingContext($renderingContext);
$viewHelper504->setRenderChildrenClosure($renderChildrenClosure503);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper

$output501 .= $viewHelper504->initializeArgumentsAndRender();
$arguments500['identifier'] = $output501;
$arguments500['size'] = 'default';
$arguments500['overlay'] = NULL;
$arguments500['state'] = 'default';
$arguments500['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure505 = function() {return NULL;};

$output490 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments500, $renderChildrenClosure505, $renderingContext);

$output490 .= '</div>
												<div class="tx_mask_fieldheader_text">
													<h1>';
// Rendering ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper
$arguments506 = array();
$arguments506['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments506['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments506['table'] = 'tt_content';
$arguments506['field'] = NULL;
$renderChildrenClosure507 = function() {return NULL;};
$viewHelper508 = $self->getViewHelper('$viewHelper508', $renderingContext, 'MASK\Mask\ViewHelpers\LabelViewHelper');
$viewHelper508->setArguments($arguments506);
$viewHelper508->setRenderingContext($renderingContext);
$viewHelper508->setRenderChildrenClosure($renderChildrenClosure507);
// End of ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper

$output490 .= $viewHelper508->initializeArgumentsAndRender();

$output490 .= '&nbsp;</h1>
													<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments509 = array();
$arguments509['value'] = $currentVariableContainer->getOrNull('key');
$arguments509['keepQuotes'] = false;
$arguments509['encoding'] = NULL;
$arguments509['doubleEncode'] = true;
$renderChildrenClosure510 = function() {return NULL;};
$value511 = ($arguments509['value'] !== NULL ? $arguments509['value'] : $renderChildrenClosure510());

$output490 .= (!is_string($value511) ? $value511 : htmlspecialchars($value511, ($arguments509['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments509['encoding'] !== NULL ? $arguments509['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments509['doubleEncode']));

$output490 .= '</p>
												</div>
											</div>

											<div class="row tx_mask_fieldcontent">
												<div class="form-group col-sm-12">
													<label class="t3js-formengine-label" for="all_overwrite">
														';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments512 = array();
$arguments512['key'] = 'tx_mask.field.overwritelabel';
$arguments512['id'] = NULL;
$arguments512['default'] = NULL;
$arguments512['htmlEscape'] = NULL;
$arguments512['arguments'] = NULL;
$arguments512['extensionName'] = NULL;
$renderChildrenClosure513 = function() {return NULL;};

$output490 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments512, $renderChildrenClosure513, $renderingContext);

$output490 .= '
													</label>
													<div class="t3js-formengine-field-item">
														<div class="form-control-wrap" style="">
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments514 = array();
// Rendering Boolean node
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments515 = array();
$arguments515['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments515['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments515['type'] = 'tt_content';
$renderChildrenClosure516 = function() {return NULL;};
$viewHelper517 = $self->getViewHelper('$viewHelper517', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper517->setArguments($arguments515);
$viewHelper517->setRenderingContext($renderingContext);
$viewHelper517->setRenderChildrenClosure($renderChildrenClosure516);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments514['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $viewHelper517->initializeArgumentsAndRender(), 'Richtext');
$arguments514['then'] = NULL;
$arguments514['else'] = NULL;
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
																<input type="hidden" name="tx_mask_tools_maskmask[storage][elements][options][--index--]" value="rte" />
															';
};

$output490 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments514, $renderChildrenClosure518, $renderingContext);

$output490 .= '
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments519 = array();
$arguments519['value'] = $currentVariableContainer->getOrNull('key');
$arguments519['name'] = 'storage[elements][columns][--index--]';
$arguments519['additionalAttributes'] = NULL;
$arguments519['data'] = NULL;
$arguments519['property'] = NULL;
$arguments519['class'] = NULL;
$arguments519['dir'] = NULL;
$arguments519['id'] = NULL;
$arguments519['lang'] = NULL;
$arguments519['style'] = NULL;
$arguments519['title'] = NULL;
$arguments519['accesskey'] = NULL;
$arguments519['tabindex'] = NULL;
$arguments519['onclick'] = NULL;
$renderChildrenClosure520 = function() {return NULL;};
$viewHelper521 = $self->getViewHelper('$viewHelper521', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper521->setArguments($arguments519);
$viewHelper521->setRenderingContext($renderingContext);
$viewHelper521->setRenderChildrenClosure($renderChildrenClosure520);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output490 .= $viewHelper521->initializeArgumentsAndRender();

$output490 .= '
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments522 = array();
$arguments522['id'] = 'all_overwrite';
$arguments522['class'] = 'form-control';
// Rendering ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper
$arguments523 = array();
$arguments523['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments523['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments523['table'] = 'tt_content';
$arguments523['field'] = $currentVariableContainer->getOrNull('field');
$renderChildrenClosure524 = function() {return NULL;};
$viewHelper525 = $self->getViewHelper('$viewHelper525', $renderingContext, 'MASK\Mask\ViewHelpers\LabelViewHelper');
$viewHelper525->setArguments($arguments523);
$viewHelper525->setRenderingContext($renderingContext);
$viewHelper525->setRenderChildrenClosure($renderChildrenClosure524);
// End of ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper
$arguments522['value'] = $viewHelper525->initializeArgumentsAndRender();
$arguments522['name'] = 'storage[elements][labels][--index--]';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments526 = array();
$arguments526['key'] = 'tx_mask.all.label';
$arguments526['id'] = NULL;
$arguments526['default'] = NULL;
$arguments526['htmlEscape'] = NULL;
$arguments526['arguments'] = NULL;
$arguments526['extensionName'] = NULL;
$renderChildrenClosure527 = function() {return NULL;};
$arguments522['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments526, $renderChildrenClosure527, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments528 = array();
$arguments528['key'] = 'tx_mask.all.label';
$arguments528['id'] = NULL;
$arguments528['default'] = NULL;
$arguments528['htmlEscape'] = NULL;
$arguments528['arguments'] = NULL;
$arguments528['extensionName'] = NULL;
$renderChildrenClosure529 = function() {return NULL;};
$arguments522['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments528, $renderChildrenClosure529, $renderingContext);
$arguments522['additionalAttributes'] = NULL;
$arguments522['data'] = NULL;
$arguments522['required'] = false;
$arguments522['type'] = 'text';
$arguments522['property'] = NULL;
$arguments522['autofocus'] = NULL;
$arguments522['disabled'] = NULL;
$arguments522['maxlength'] = NULL;
$arguments522['readonly'] = NULL;
$arguments522['size'] = NULL;
$arguments522['pattern'] = NULL;
$arguments522['errorClass'] = 'f3-form-error';
$arguments522['dir'] = NULL;
$arguments522['lang'] = NULL;
$arguments522['style'] = NULL;
$arguments522['accesskey'] = NULL;
$arguments522['tabindex'] = NULL;
$arguments522['onclick'] = NULL;
$renderChildrenClosure530 = function() {return NULL;};
$viewHelper531 = $self->getViewHelper('$viewHelper531', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper531->setArguments($arguments522);
$viewHelper531->setRenderingContext($renderingContext);
$viewHelper531->setRenderChildrenClosure($renderChildrenClosure530);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output490 .= $viewHelper531->initializeArgumentsAndRender();

$output490 .= '
															<!-- Neu -->
															<div class="tx_mask_fieldcontent_new">	</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									';
return $output490;
};

$output478 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments488, $renderChildrenClosure489, $renderingContext);

$output478 .= '
								';
return $output478;
};
$arguments473['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output532 = '';

$output532 .= '
										<!--Mask-Field-->
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments533 = array();
$arguments533['partial'] = 'RenderFieldContent';
// Rendering Array
$array534 = array();
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments535 = array();
$arguments535['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments535['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments535['type'] = 'tt_content';
$renderChildrenClosure536 = function() {return NULL;};
$viewHelper537 = $self->getViewHelper('$viewHelper537', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper537->setArguments($arguments535);
$viewHelper537->setRenderingContext($renderingContext);
$viewHelper537->setRenderChildrenClosure($renderChildrenClosure536);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$array534['form'] = $viewHelper537->initializeArgumentsAndRender();
$array534['storage'] = $currentVariableContainer->getOrNull('storage');
$array534['field'] = $currentVariableContainer->getOrNull('field');
$array534['key'] = $currentVariableContainer->getOrNull('key');
$array534['editMode'] = 1;
$array534['type'] = 'tt_content';
$arguments533['arguments'] = $array534;
$arguments533['section'] = NULL;
$arguments533['optional'] = false;
$renderChildrenClosure538 = function() {return NULL;};

$output532 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments533, $renderChildrenClosure538, $renderingContext);

$output532 .= '
									';
return $output532;
};
$arguments473['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output539 = '';

$output539 .= '
										<!--TYPO3-Standard-Field-->
										<div class="tx_mask_field">

											<!-- field header 3rd column: existing/TYPO3 fields (eg. bodytext) -->
											<div class="tx_mask_fieldheader">
												<div class="tx_mask_fieldheader_icon id_';
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments540 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments541 = array();
$arguments541['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments541['keepQuotes'] = false;
$arguments541['encoding'] = NULL;
$arguments541['doubleEncode'] = true;
$renderChildrenClosure542 = function() {return NULL;};
$value543 = ($arguments541['value'] !== NULL ? $arguments541['value'] : $renderChildrenClosure542());
$arguments540['elementKey'] = (!is_string($value543) ? $value543 : htmlspecialchars($value543, ($arguments541['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments541['encoding'] !== NULL ? $arguments541['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments541['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments544 = array();
$arguments544['value'] = $currentVariableContainer->getOrNull('key');
$arguments544['keepQuotes'] = false;
$arguments544['encoding'] = NULL;
$arguments544['doubleEncode'] = true;
$renderChildrenClosure545 = function() {return NULL;};
$value546 = ($arguments544['value'] !== NULL ? $arguments544['value'] : $renderChildrenClosure545());
$arguments540['fieldKey'] = (!is_string($value546) ? $value546 : htmlspecialchars($value546, ($arguments544['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments544['encoding'] !== NULL ? $arguments544['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments544['doubleEncode']));
$arguments540['type'] = 'tt_content';
$renderChildrenClosure547 = function() {return NULL;};
$viewHelper548 = $self->getViewHelper('$viewHelper548', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper548->setArguments($arguments540);
$viewHelper548->setRenderingContext($renderingContext);
$viewHelper548->setRenderChildrenClosure($renderChildrenClosure547);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper

$output539 .= $viewHelper548->initializeArgumentsAndRender();

$output539 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments549 = array();
$output550 = '';

$output550 .= 'mask-fieldtype-';
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments551 = array();
$arguments551['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments551['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments551['type'] = 'tt_content';
$renderChildrenClosure552 = function() {return NULL;};
$viewHelper553 = $self->getViewHelper('$viewHelper553', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper553->setArguments($arguments551);
$viewHelper553->setRenderingContext($renderingContext);
$viewHelper553->setRenderChildrenClosure($renderChildrenClosure552);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper

$output550 .= $viewHelper553->initializeArgumentsAndRender();
$arguments549['identifier'] = $output550;
$arguments549['size'] = 'default';
$arguments549['overlay'] = NULL;
$arguments549['state'] = 'default';
$arguments549['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure554 = function() {return NULL;};

$output539 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments549, $renderChildrenClosure554, $renderingContext);

$output539 .= '</div>
												<div class="tx_mask_fieldheader_text">
													<h1>';
// Rendering ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper
$arguments555 = array();
$arguments555['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments555['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments555['table'] = 'tt_content';
$arguments555['field'] = NULL;
$renderChildrenClosure556 = function() {return NULL;};
$viewHelper557 = $self->getViewHelper('$viewHelper557', $renderingContext, 'MASK\Mask\ViewHelpers\LabelViewHelper');
$viewHelper557->setArguments($arguments555);
$viewHelper557->setRenderingContext($renderingContext);
$viewHelper557->setRenderChildrenClosure($renderChildrenClosure556);
// End of ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper

$output539 .= $viewHelper557->initializeArgumentsAndRender();

$output539 .= '&nbsp;</h1>
													<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments558 = array();
$arguments558['value'] = $currentVariableContainer->getOrNull('key');
$arguments558['keepQuotes'] = false;
$arguments558['encoding'] = NULL;
$arguments558['doubleEncode'] = true;
$renderChildrenClosure559 = function() {return NULL;};
$value560 = ($arguments558['value'] !== NULL ? $arguments558['value'] : $renderChildrenClosure559());

$output539 .= (!is_string($value560) ? $value560 : htmlspecialchars($value560, ($arguments558['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments558['encoding'] !== NULL ? $arguments558['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments558['doubleEncode']));

$output539 .= '</p>
												</div>
											</div>

											<div class="row tx_mask_fieldcontent">
												<div class="form-group col-sm-12">
													<label class="t3js-formengine-label" for="all_overwrite">
														';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments561 = array();
$arguments561['key'] = 'tx_mask.field.overwritelabel';
$arguments561['id'] = NULL;
$arguments561['default'] = NULL;
$arguments561['htmlEscape'] = NULL;
$arguments561['arguments'] = NULL;
$arguments561['extensionName'] = NULL;
$renderChildrenClosure562 = function() {return NULL;};

$output539 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments561, $renderChildrenClosure562, $renderingContext);

$output539 .= '
													</label>
													<div class="t3js-formengine-field-item">
														<div class="form-control-wrap" style="">
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments563 = array();
// Rendering Boolean node
// Rendering ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments564 = array();
$arguments564['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments564['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments564['type'] = 'tt_content';
$renderChildrenClosure565 = function() {return NULL;};
$viewHelper566 = $self->getViewHelper('$viewHelper566', $renderingContext, 'MASK\Mask\ViewHelpers\FormTypeViewHelper');
$viewHelper566->setArguments($arguments564);
$viewHelper566->setRenderingContext($renderingContext);
$viewHelper566->setRenderChildrenClosure($renderChildrenClosure565);
// End of ViewHelper MASK\Mask\ViewHelpers\FormTypeViewHelper
$arguments563['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $viewHelper566->initializeArgumentsAndRender(), 'Richtext');
$arguments563['then'] = NULL;
$arguments563['else'] = NULL;
$renderChildrenClosure567 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
																<input type="hidden" name="tx_mask_tools_maskmask[storage][elements][options][--index--]" value="rte" />
															';
};

$output539 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments563, $renderChildrenClosure567, $renderingContext);

$output539 .= '
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments568 = array();
$arguments568['value'] = $currentVariableContainer->getOrNull('key');
$arguments568['name'] = 'storage[elements][columns][--index--]';
$arguments568['additionalAttributes'] = NULL;
$arguments568['data'] = NULL;
$arguments568['property'] = NULL;
$arguments568['class'] = NULL;
$arguments568['dir'] = NULL;
$arguments568['id'] = NULL;
$arguments568['lang'] = NULL;
$arguments568['style'] = NULL;
$arguments568['title'] = NULL;
$arguments568['accesskey'] = NULL;
$arguments568['tabindex'] = NULL;
$arguments568['onclick'] = NULL;
$renderChildrenClosure569 = function() {return NULL;};
$viewHelper570 = $self->getViewHelper('$viewHelper570', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper570->setArguments($arguments568);
$viewHelper570->setRenderingContext($renderingContext);
$viewHelper570->setRenderChildrenClosure($renderChildrenClosure569);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output539 .= $viewHelper570->initializeArgumentsAndRender();

$output539 .= '
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments571 = array();
$arguments571['id'] = 'all_overwrite';
$arguments571['class'] = 'form-control';
// Rendering ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper
$arguments572 = array();
$arguments572['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments572['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments572['table'] = 'tt_content';
$arguments572['field'] = $currentVariableContainer->getOrNull('field');
$renderChildrenClosure573 = function() {return NULL;};
$viewHelper574 = $self->getViewHelper('$viewHelper574', $renderingContext, 'MASK\Mask\ViewHelpers\LabelViewHelper');
$viewHelper574->setArguments($arguments572);
$viewHelper574->setRenderingContext($renderingContext);
$viewHelper574->setRenderChildrenClosure($renderChildrenClosure573);
// End of ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper
$arguments571['value'] = $viewHelper574->initializeArgumentsAndRender();
$arguments571['name'] = 'storage[elements][labels][--index--]';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments575 = array();
$arguments575['key'] = 'tx_mask.all.label';
$arguments575['id'] = NULL;
$arguments575['default'] = NULL;
$arguments575['htmlEscape'] = NULL;
$arguments575['arguments'] = NULL;
$arguments575['extensionName'] = NULL;
$renderChildrenClosure576 = function() {return NULL;};
$arguments571['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments575, $renderChildrenClosure576, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments577 = array();
$arguments577['key'] = 'tx_mask.all.label';
$arguments577['id'] = NULL;
$arguments577['default'] = NULL;
$arguments577['htmlEscape'] = NULL;
$arguments577['arguments'] = NULL;
$arguments577['extensionName'] = NULL;
$renderChildrenClosure578 = function() {return NULL;};
$arguments571['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments577, $renderChildrenClosure578, $renderingContext);
$arguments571['additionalAttributes'] = NULL;
$arguments571['data'] = NULL;
$arguments571['required'] = false;
$arguments571['type'] = 'text';
$arguments571['property'] = NULL;
$arguments571['autofocus'] = NULL;
$arguments571['disabled'] = NULL;
$arguments571['maxlength'] = NULL;
$arguments571['readonly'] = NULL;
$arguments571['size'] = NULL;
$arguments571['pattern'] = NULL;
$arguments571['errorClass'] = 'f3-form-error';
$arguments571['dir'] = NULL;
$arguments571['lang'] = NULL;
$arguments571['style'] = NULL;
$arguments571['accesskey'] = NULL;
$arguments571['tabindex'] = NULL;
$arguments571['onclick'] = NULL;
$renderChildrenClosure579 = function() {return NULL;};
$viewHelper580 = $self->getViewHelper('$viewHelper580', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper580->setArguments($arguments571);
$viewHelper580->setRenderingContext($renderingContext);
$viewHelper580->setRenderChildrenClosure($renderChildrenClosure579);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output539 .= $viewHelper580->initializeArgumentsAndRender();

$output539 .= '
															<!-- Neu -->
															<div class="tx_mask_fieldcontent_new">	</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									';
return $output539;
};

$output472 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments473, $renderChildrenClosure477, $renderingContext);

$output472 .= '
							';
return $output472;
};

$output329 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output329 .= '
						</div>
					</div>
				';
return $output329;
};
$viewHelper581 = $self->getViewHelper('$viewHelper581', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper581->setArguments($arguments327);
$viewHelper581->setRenderingContext($renderingContext);
$viewHelper581->setRenderChildrenClosure($renderChildrenClosure328);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output315 .= $viewHelper581->initializeArgumentsAndRender();

$output315 .= '

				<div style="display:none;" id="templates">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments582 = array();
$arguments582['partial'] = 'Forms/Form';
// Rendering Array
$array583 = array();
$array583['form'] = 'String';
$array583['storage'] = $currentVariableContainer->getOrNull('storage');
$array583['type'] = 'tt_content';
$arguments582['arguments'] = $array583;
$arguments582['section'] = NULL;
$arguments582['optional'] = false;
$renderChildrenClosure584 = function() {return NULL;};

$output315 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments582, $renderChildrenClosure584, $renderingContext);

$output315 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments585 = array();
$arguments585['partial'] = 'Forms/Form';
// Rendering Array
$array586 = array();
$array586['form'] = 'Integer';
$array586['storage'] = $currentVariableContainer->getOrNull('storage');
$array586['type'] = 'tt_content';
$arguments585['arguments'] = $array586;
$arguments585['section'] = NULL;
$arguments585['optional'] = false;
$renderChildrenClosure587 = function() {return NULL;};

$output315 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments585, $renderChildrenClosure587, $renderingContext);

$output315 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments588 = array();
$arguments588['partial'] = 'Forms/Form';
// Rendering Array
$array589 = array();
$array589['form'] = 'Float';
$array589['storage'] = $currentVariableContainer->getOrNull('storage');
$array589['type'] = 'tt_content';
$arguments588['arguments'] = $array589;
$arguments588['section'] = NULL;
$arguments588['optional'] = false;
$renderChildrenClosure590 = function() {return NULL;};

$output315 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments588, $renderChildrenClosure590, $renderingContext);

$output315 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments591 = array();
$arguments591['partial'] = 'Forms/Form';
// Rendering Array
$array592 = array();
$array592['form'] = 'Link';
$array592['storage'] = $currentVariableContainer->getOrNull('storage');
$array592['type'] = 'tt_content';
$arguments591['arguments'] = $array592;
$arguments591['section'] = NULL;
$arguments591['optional'] = false;
$renderChildrenClosure593 = function() {return NULL;};

$output315 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments591, $renderChildrenClosure593, $renderingContext);

$output315 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments594 = array();
$arguments594['partial'] = 'Forms/Form';
// Rendering Array
$array595 = array();
$array595['form'] = 'Date';
$array595['storage'] = $currentVariableContainer->getOrNull('storage');
$array595['type'] = 'tt_content';
$arguments594['arguments'] = $array595;
$arguments594['section'] = NULL;
$arguments594['optional'] = false;
$renderChildrenClosure596 = function() {return NULL;};

$output315 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments594, $renderChildrenClosure596, $renderingContext);

$output315 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments597 = array();
$arguments597['partial'] = 'Forms/Form';
// Rendering Array
$array598 = array();
$array598['form'] = 'Datetime';
$array598['storage'] = $currentVariableContainer->getOrNull('storage');
$array598['type'] = 'tt_content';
$arguments597['arguments'] = $array598;
$arguments597['section'] = NULL;
$arguments597['optional'] = false;
$renderChildrenClosure599 = function() {return NULL;};

$output315 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments597, $renderChildrenClosure599, $renderingContext);

$output315 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments600 = array();
$arguments600['partial'] = 'Forms/Form';
// Rendering Array
$array601 = array();
$array601['form'] = 'Text';
$array601['storage'] = $currentVariableContainer->getOrNull('storage');
$array601['type'] = 'tt_content';
$arguments600['arguments'] = $array601;
$arguments600['section'] = NULL;
$arguments600['optional'] = false;
$renderChildrenClosure602 = function() {return NULL;};

$output315 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments600, $renderChildrenClosure602, $renderingContext);

$output315 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments603 = array();
$arguments603['partial'] = 'Forms/Form';
// Rendering Array
$array604 = array();
$array604['form'] = 'Richtext';
$array604['storage'] = $currentVariableContainer->getOrNull('storage');
$array604['type'] = 'tt_content';
$arguments603['arguments'] = $array604;
$arguments603['section'] = NULL;
$arguments603['optional'] = false;
$renderChildrenClosure605 = function() {return NULL;};

$output315 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments603, $renderChildrenClosure605, $renderingContext);

$output315 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments606 = array();
$arguments606['partial'] = 'Forms/Form';
// Rendering Array
$array607 = array();
$array607['form'] = 'Check';
$array607['storage'] = $currentVariableContainer->getOrNull('storage');
$array607['type'] = 'tt_content';
$arguments606['arguments'] = $array607;
$arguments606['section'] = NULL;
$arguments606['optional'] = false;
$renderChildrenClosure608 = function() {return NULL;};

$output315 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments606, $renderChildrenClosure608, $renderingContext);

$output315 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments609 = array();
$arguments609['partial'] = 'Forms/Form';
// Rendering Array
$array610 = array();
$array610['form'] = 'Radio';
$array610['storage'] = $currentVariableContainer->getOrNull('storage');
$array610['type'] = 'tt_content';
$arguments609['arguments'] = $array610;
$arguments609['section'] = NULL;
$arguments609['optional'] = false;
$renderChildrenClosure611 = function() {return NULL;};

$output315 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments609, $renderChildrenClosure611, $renderingContext);

$output315 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments612 = array();
$arguments612['partial'] = 'Forms/Form';
// Rendering Array
$array613 = array();
$array613['form'] = 'Select';
$array613['storage'] = $currentVariableContainer->getOrNull('storage');
$array613['type'] = 'tt_content';
$arguments612['arguments'] = $array613;
$arguments612['section'] = NULL;
$arguments612['optional'] = false;
$renderChildrenClosure614 = function() {return NULL;};

$output315 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments612, $renderChildrenClosure614, $renderingContext);

$output315 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments615 = array();
$arguments615['partial'] = 'Forms/Form';
// Rendering Array
$array616 = array();
$array616['form'] = 'File';
$array616['storage'] = $currentVariableContainer->getOrNull('storage');
$array616['type'] = 'tt_content';
$arguments615['arguments'] = $array616;
$arguments615['section'] = NULL;
$arguments615['optional'] = false;
$renderChildrenClosure617 = function() {return NULL;};

$output315 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments615, $renderChildrenClosure617, $renderingContext);

$output315 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments618 = array();
$arguments618['partial'] = 'Forms/Form';
// Rendering Array
$array619 = array();
$array619['form'] = 'Inline';
$array619['storage'] = $currentVariableContainer->getOrNull('storage');
$array619['type'] = 'tt_content';
$arguments618['arguments'] = $array619;
$arguments618['section'] = NULL;
$arguments618['optional'] = false;
$renderChildrenClosure620 = function() {return NULL;};

$output315 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments618, $renderChildrenClosure620, $renderingContext);

$output315 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments621 = array();
$arguments621['partial'] = 'Forms/Form';
// Rendering Array
$array622 = array();
$array622['form'] = 'Content';
$array622['storage'] = $currentVariableContainer->getOrNull('storage');
$array622['type'] = 'tt_content';
$arguments621['arguments'] = $array622;
$arguments621['section'] = NULL;
$arguments621['optional'] = false;
$renderChildrenClosure623 = function() {return NULL;};

$output315 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments621, $renderChildrenClosure623, $renderingContext);

$output315 .= '
				</div>
			</div>
		</div>
	</div>
';
return $output315;
};

$output309 .= '';


return $output309;
}


}
#1462875135    163848    