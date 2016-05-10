<?php
class FluidCache_Mask_WizardContent_partial_WizardContent_Metadata_646e862b31c196c8f5b2fc67b8702455dea68646 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="row">
	<div class="form-group col-sm-4">
		<label class="t3js-formengine-label" for="meta_label">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'tx_mask.content.title';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '*
		</label>
		<div class="t3js-formengine-field-item">
			<div class="form-control-wrap">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments3 = array();
$arguments3['class'] = 'form-control';
$arguments3['id'] = 'meta_label';
// Rendering Boolean node
$arguments3['required'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('required');
$arguments3['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'label', $renderingContext);
$arguments3['property'] = 'elements][label';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments4 = array();
$arguments4['key'] = 'tx_mask.content.title';
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['htmlEscape'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};
$arguments3['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments6 = array();
$arguments6['key'] = 'tx_mask.content.title';
$arguments6['id'] = NULL;
$arguments6['default'] = NULL;
$arguments6['htmlEscape'] = NULL;
$arguments6['arguments'] = NULL;
$arguments6['extensionName'] = NULL;
$renderChildrenClosure7 = function() {return NULL;};
$arguments3['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);
$arguments3['additionalAttributes'] = NULL;
$arguments3['data'] = NULL;
$arguments3['type'] = 'text';
$arguments3['name'] = NULL;
$arguments3['autofocus'] = NULL;
$arguments3['disabled'] = NULL;
$arguments3['maxlength'] = NULL;
$arguments3['readonly'] = NULL;
$arguments3['size'] = NULL;
$arguments3['pattern'] = NULL;
$arguments3['errorClass'] = 'f3-form-error';
$arguments3['dir'] = NULL;
$arguments3['lang'] = NULL;
$arguments3['style'] = NULL;
$arguments3['accesskey'] = NULL;
$arguments3['tabindex'] = NULL;
$arguments3['onclick'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper9->setArguments($arguments3);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper9->initializeArgumentsAndRender();

$output0 .= '
			</div>
		</div>
	</div>
	<div class="form-group col-sm-4">
		<label class="t3js-formengine-label" for="meta_key">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments10 = array();
$arguments10['key'] = 'tx_mask.all.fieldkey';
$arguments10['id'] = NULL;
$arguments10['default'] = NULL;
$arguments10['htmlEscape'] = NULL;
$arguments10['arguments'] = NULL;
$arguments10['extensionName'] = NULL;
$renderChildrenClosure11 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '*
		</label>
		<div class="t3js-formengine-field-item">
			<div class="form-control-wrap">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments12 = array();
$arguments12['class'] = 'form-control lowercase';
$arguments12['id'] = 'meta_key';
$arguments12['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
// Rendering Boolean node
$arguments12['required'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('required');
$arguments12['property'] = 'elements][key';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments13 = array();
$arguments13['key'] = 'tx_mask.all.fieldkey';
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$renderChildrenClosure14 = function() {return NULL;};
$arguments12['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments15 = array();
$arguments15['key'] = 'tx_mask.all.fieldkey';
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};
$arguments12['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments17 = array();
// Rendering Boolean node
$arguments17['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('editMode'));
$arguments17['then'] = 'readonly';
$arguments17['else'] = '';
$renderChildrenClosure18 = function() {return NULL;};
$arguments12['readonly'] = TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['type'] = 'text';
$arguments12['name'] = NULL;
$arguments12['autofocus'] = NULL;
$arguments12['disabled'] = NULL;
$arguments12['maxlength'] = NULL;
$arguments12['size'] = NULL;
$arguments12['pattern'] = NULL;
$arguments12['errorClass'] = 'f3-form-error';
$arguments12['dir'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$renderChildrenClosure19 = function() {return NULL;};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper20->setArguments($arguments12);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper20->initializeArgumentsAndRender();

$output0 .= '
			</div>
		</div>
	</div>
	<div class="form-group col-sm-4">
		<label class="t3js-formengine-label" for="meta_shortlabel">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments21 = array();
$arguments21['key'] = 'tx_mask.all.shorttitle';
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['htmlEscape'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$renderChildrenClosure22 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output0 .= '
		</label>
		<div class="t3js-formengine-field-item">
			<div class="form-control-wrap">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments23 = array();
$arguments23['class'] = 'form-control';
$arguments23['id'] = 'meta_shortlabel';
$arguments23['property'] = 'elements][shortLabel';
$arguments23['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'shortLabel', $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments24 = array();
$arguments24['key'] = 'tx_mask.all.shorttitle';
$arguments24['id'] = NULL;
$arguments24['default'] = NULL;
$arguments24['htmlEscape'] = NULL;
$arguments24['arguments'] = NULL;
$arguments24['extensionName'] = NULL;
$renderChildrenClosure25 = function() {return NULL;};
$arguments23['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments26 = array();
$arguments26['key'] = 'tx_mask.all.shorttitle';
$arguments26['id'] = NULL;
$arguments26['default'] = NULL;
$arguments26['htmlEscape'] = NULL;
$arguments26['arguments'] = NULL;
$arguments26['extensionName'] = NULL;
$renderChildrenClosure27 = function() {return NULL;};
$arguments23['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);
$arguments23['additionalAttributes'] = NULL;
$arguments23['data'] = NULL;
$arguments23['required'] = false;
$arguments23['type'] = 'text';
$arguments23['name'] = NULL;
$arguments23['autofocus'] = NULL;
$arguments23['disabled'] = NULL;
$arguments23['maxlength'] = NULL;
$arguments23['readonly'] = NULL;
$arguments23['size'] = NULL;
$arguments23['pattern'] = NULL;
$arguments23['errorClass'] = 'f3-form-error';
$arguments23['dir'] = NULL;
$arguments23['lang'] = NULL;
$arguments23['style'] = NULL;
$arguments23['accesskey'] = NULL;
$arguments23['tabindex'] = NULL;
$arguments23['onclick'] = NULL;
$renderChildrenClosure28 = function() {return NULL;};
$viewHelper29 = $self->getViewHelper('$viewHelper29', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper29->setArguments($arguments23);
$viewHelper29->setRenderingContext($renderingContext);
$viewHelper29->setRenderChildrenClosure($renderChildrenClosure28);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper29->initializeArgumentsAndRender();

$output0 .= '
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="form-group col-sm-6">
		<label class="t3js-formengine-label" for="meta_description">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments30 = array();
$arguments30['key'] = 'tx_mask.all.description';
$arguments30['id'] = NULL;
$arguments30['default'] = NULL;
$arguments30['htmlEscape'] = NULL;
$arguments30['arguments'] = NULL;
$arguments30['extensionName'] = NULL;
$renderChildrenClosure31 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output0 .= '
		</label>
		<div class="t3js-formengine-field-item">
			<div class="form-control-wrap">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments32 = array();
$arguments32['class'] = 'form-control';
$arguments32['id'] = 'meta_description';
$arguments32['property'] = 'elements][description';
$arguments32['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'description', $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments33 = array();
$arguments33['key'] = 'tx_mask.all.description';
$arguments33['id'] = NULL;
$arguments33['default'] = NULL;
$arguments33['htmlEscape'] = NULL;
$arguments33['arguments'] = NULL;
$arguments33['extensionName'] = NULL;
$renderChildrenClosure34 = function() {return NULL;};
$arguments32['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments35 = array();
$arguments35['key'] = 'tx_mask.all.description';
$arguments35['id'] = NULL;
$arguments35['default'] = NULL;
$arguments35['htmlEscape'] = NULL;
$arguments35['arguments'] = NULL;
$arguments35['extensionName'] = NULL;
$renderChildrenClosure36 = function() {return NULL;};
$arguments32['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['required'] = false;
$arguments32['type'] = 'text';
$arguments32['name'] = NULL;
$arguments32['autofocus'] = NULL;
$arguments32['disabled'] = NULL;
$arguments32['maxlength'] = NULL;
$arguments32['readonly'] = NULL;
$arguments32['size'] = NULL;
$arguments32['pattern'] = NULL;
$arguments32['errorClass'] = 'f3-form-error';
$arguments32['dir'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$renderChildrenClosure37 = function() {return NULL;};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper38->setArguments($arguments32);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper38->initializeArgumentsAndRender();

$output0 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments39 = array();
$arguments39['property'] = 'type';
$arguments39['value'] = 'tt_content';
$arguments39['additionalAttributes'] = NULL;
$arguments39['data'] = NULL;
$arguments39['name'] = NULL;
$arguments39['class'] = NULL;
$arguments39['dir'] = NULL;
$arguments39['id'] = NULL;
$arguments39['lang'] = NULL;
$arguments39['style'] = NULL;
$arguments39['title'] = NULL;
$arguments39['accesskey'] = NULL;
$arguments39['tabindex'] = NULL;
$arguments39['onclick'] = NULL;
$renderChildrenClosure40 = function() {return NULL;};
$viewHelper41 = $self->getViewHelper('$viewHelper41', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper41->setArguments($arguments39);
$viewHelper41->setRenderingContext($renderingContext);
$viewHelper41->setRenderChildrenClosure($renderChildrenClosure40);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output0 .= $viewHelper41->initializeArgumentsAndRender();

$output0 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments42 = array();
$arguments42['property'] = 'orgkey';
$arguments42['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments42['additionalAttributes'] = NULL;
$arguments42['data'] = NULL;
$arguments42['name'] = NULL;
$arguments42['class'] = NULL;
$arguments42['dir'] = NULL;
$arguments42['id'] = NULL;
$arguments42['lang'] = NULL;
$arguments42['style'] = NULL;
$arguments42['title'] = NULL;
$arguments42['accesskey'] = NULL;
$arguments42['tabindex'] = NULL;
$arguments42['onclick'] = NULL;
$renderChildrenClosure43 = function() {return NULL;};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper44->setArguments($arguments42);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output0 .= $viewHelper44->initializeArgumentsAndRender();

$output0 .= '
			</div>
		</div>
	</div>
	<div class="form-group col-sm-3">
		<label class="t3js-formengine-label" for="meta_icon">
			<a href="https://fortawesome.github.io/Font-Awesome/icons/" target="_blank">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments45 = array();
$arguments45['key'] = 'tx_mask.all.icon';
$arguments45['id'] = NULL;
$arguments45['default'] = NULL;
$arguments45['htmlEscape'] = NULL;
$arguments45['arguments'] = NULL;
$arguments45['extensionName'] = NULL;
$renderChildrenClosure46 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output0 .= '</a>
		</label>
		<div class="t3js-formengine-field-item">
			<div class="form-control-wrap">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments47 = array();
$arguments47['class'] = 'form-control';
$arguments47['id'] = 'meta_icon';
$arguments47['property'] = 'elements][icon';
$arguments47['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'icon', $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments48 = array();
$arguments48['key'] = 'tx_mask.all.icon';
$arguments48['id'] = NULL;
$arguments48['default'] = NULL;
$arguments48['htmlEscape'] = NULL;
$arguments48['arguments'] = NULL;
$arguments48['extensionName'] = NULL;
$renderChildrenClosure49 = function() {return NULL;};
$arguments47['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments50 = array();
$arguments50['key'] = 'tx_mask.all.icon';
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['htmlEscape'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$renderChildrenClosure51 = function() {return NULL;};
$arguments47['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);
$arguments47['additionalAttributes'] = NULL;
$arguments47['data'] = NULL;
$arguments47['required'] = false;
$arguments47['type'] = 'text';
$arguments47['name'] = NULL;
$arguments47['autofocus'] = NULL;
$arguments47['disabled'] = NULL;
$arguments47['maxlength'] = NULL;
$arguments47['readonly'] = NULL;
$arguments47['size'] = NULL;
$arguments47['pattern'] = NULL;
$arguments47['errorClass'] = 'f3-form-error';
$arguments47['dir'] = NULL;
$arguments47['lang'] = NULL;
$arguments47['style'] = NULL;
$arguments47['accesskey'] = NULL;
$arguments47['tabindex'] = NULL;
$arguments47['onclick'] = NULL;
$renderChildrenClosure52 = function() {return NULL;};
$viewHelper53 = $self->getViewHelper('$viewHelper53', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper53->setArguments($arguments47);
$viewHelper53->setRenderingContext($renderingContext);
$viewHelper53->setRenderChildrenClosure($renderChildrenClosure52);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper53->initializeArgumentsAndRender();

$output0 .= '
			</div>
		</div>
	</div>
	<div class="form-group col-sm-3">
		<label class="t3js-formengine-label" for="meta_color">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments54 = array();
$arguments54['key'] = 'tx_mask.all.color';
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['htmlEscape'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$renderChildrenClosure55 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output0 .= '
		</label>
		<div class="t3js-formengine-field-item">
			<div class="form-control-wrap" style="max-width: 50px">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments56 = array();
$arguments56['class'] = 'form-control';
$arguments56['id'] = 'meta_color';
$arguments56['property'] = 'elements][color';
$arguments56['type'] = 'color';
$arguments56['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'color', $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments57 = array();
$arguments57['key'] = 'tx_mask.all.color';
$arguments57['id'] = NULL;
$arguments57['default'] = NULL;
$arguments57['htmlEscape'] = NULL;
$arguments57['arguments'] = NULL;
$arguments57['extensionName'] = NULL;
$renderChildrenClosure58 = function() {return NULL;};
$arguments56['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments59 = array();
$arguments59['key'] = 'tx_mask.all.color';
$arguments59['id'] = NULL;
$arguments59['default'] = NULL;
$arguments59['htmlEscape'] = NULL;
$arguments59['arguments'] = NULL;
$arguments59['extensionName'] = NULL;
$renderChildrenClosure60 = function() {return NULL;};
$arguments56['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);
$arguments56['additionalAttributes'] = NULL;
$arguments56['data'] = NULL;
$arguments56['required'] = false;
$arguments56['name'] = NULL;
$arguments56['autofocus'] = NULL;
$arguments56['disabled'] = NULL;
$arguments56['maxlength'] = NULL;
$arguments56['readonly'] = NULL;
$arguments56['size'] = NULL;
$arguments56['pattern'] = NULL;
$arguments56['errorClass'] = 'f3-form-error';
$arguments56['dir'] = NULL;
$arguments56['lang'] = NULL;
$arguments56['style'] = NULL;
$arguments56['accesskey'] = NULL;
$arguments56['tabindex'] = NULL;
$arguments56['onclick'] = NULL;
$renderChildrenClosure61 = function() {return NULL;};
$viewHelper62 = $self->getViewHelper('$viewHelper62', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper62->setArguments($arguments56);
$viewHelper62->setRenderingContext($renderingContext);
$viewHelper62->setRenderChildrenClosure($renderChildrenClosure61);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper62->initializeArgumentsAndRender();

$output0 .= '
			</div>
		</div>
	</div>
</div>
';


return $output0;
}


}
#1462875032    23389     