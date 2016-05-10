<?php
class FluidCache_Mask_WizardContent_partial_Forms_Form_97ed25a585bc99b589e311f5f72b7390c45d6c5d extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

<div data-type="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = $currentVariableContainer->getOrNull('form');
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() {return NULL;};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1['encoding'] !== NULL ? $arguments1['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1['doubleEncode']));

$output0 .= '" class="tx_mask_field ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments5 = array();
$arguments5['value'] = $currentVariableContainer->getOrNull('editMode');
$arguments5['keepQuotes'] = false;
$arguments5['encoding'] = NULL;
$arguments5['doubleEncode'] = true;
$renderChildrenClosure6 = function() {return NULL;};
$value7 = ($arguments5['value'] !== NULL ? $arguments5['value'] : $renderChildrenClosure6());
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value7) ? $value7 : htmlspecialchars($value7, ($arguments5['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments5['encoding'] !== NULL ? $arguments5['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments5['doubleEncode'])));
$arguments4['then'] = 'edit_field';
$arguments4['else'] = 'new_field';
$renderChildrenClosure8 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure8, $renderingContext);

$output0 .= '">

	<!-- field header 3rd column: own/mask fields (eg. tx_mask_text) -->
	<div class="tx_mask_fieldheader">
		<div class="tx_mask_fieldheader_icon id_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments9 = array();
$arguments9['value'] = $currentVariableContainer->getOrNull('form');
$arguments9['keepQuotes'] = false;
$arguments9['encoding'] = NULL;
$arguments9['doubleEncode'] = true;
$renderChildrenClosure10 = function() {return NULL;};
$value11 = ($arguments9['value'] !== NULL ? $arguments9['value'] : $renderChildrenClosure10());

$output0 .= (!is_string($value11) ? $value11 : htmlspecialchars($value11, ($arguments9['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments9['encoding'] !== NULL ? $arguments9['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments9['doubleEncode']));

$output0 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments12 = array();
$output13 = '';

$output13 .= 'mask-fieldtype-';

$output13 .= $currentVariableContainer->getOrNull('form');
$arguments12['identifier'] = $output13;
$arguments12['size'] = 'default';
$arguments12['overlay'] = NULL;
$arguments12['state'] = 'default';
$arguments12['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure14 = function() {return NULL;};

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments12, $renderChildrenClosure14, $renderingContext);

$output0 .= '</div>
		<div class="tx_mask_fieldheader_text">
			<h1>';
// Rendering ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper
$arguments15 = array();
$arguments15['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments15['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments15['field'] = $currentVariableContainer->getOrNull('field');
$arguments15['table'] = $currentVariableContainer->getOrNull('type');
$renderChildrenClosure16 = function() {return NULL;};
$viewHelper17 = $self->getViewHelper('$viewHelper17', $renderingContext, 'MASK\Mask\ViewHelpers\LabelViewHelper');
$viewHelper17->setArguments($arguments15);
$viewHelper17->setRenderingContext($renderingContext);
$viewHelper17->setRenderChildrenClosure($renderChildrenClosure16);
// End of ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper

$output0 .= $viewHelper17->initializeArgumentsAndRender();

$output0 .= '</h1>
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments18 = array();
$arguments18['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'key', $renderingContext);
$arguments18['keepQuotes'] = false;
$arguments18['encoding'] = NULL;
$arguments18['doubleEncode'] = true;
$renderChildrenClosure19 = function() {return NULL;};
$value20 = ($arguments18['value'] !== NULL ? $arguments18['value'] : $renderChildrenClosure19());

$output0 .= (!is_string($value20) ? $value20 : htmlspecialchars($value20, ($arguments18['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments18['encoding'] !== NULL ? $arguments18['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments18['doubleEncode']));

$output0 .= '</p>
		</div>
	</div>
	<div class="tx_mask_fieldcontent">
		<!-- only when create field (not edit), used in content and pages -->
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments21 = array();
// Rendering Boolean node
$arguments21['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('editMode'));
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output23 = '';

$output23 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments24 = array();
$renderChildrenClosure25 = function() {return NULL;};

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments26 = array();
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output28 = '';

$output28 .= '
				<!-- mask or TYPO3 field chooser -->
				<div class="row">
					<div class="form-group col-sm-6">
						<label class="t3js-formengine-label" for="form_choosefield">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments29 = array();
$arguments29['key'] = 'tx_mask.field.choosefield';
$arguments29['id'] = NULL;
$arguments29['default'] = NULL;
$arguments29['htmlEscape'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['extensionName'] = NULL;
$renderChildrenClosure30 = function() {return NULL;};

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
						</label>
						<div class="t3js-formengine-field-item">
							<div class="form-control-wrap">
								<select id="form_choosefield" name="tx_mask_tools_maskmask[storage][elements][columns][--index--]" class="form-control tx_mask_fieldcontent_type">
									<optgroup class="c-divider" label="New">
										<option value="-1">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments31 = array();
$arguments31['key'] = 'tx_mask.field.newfield';
$arguments31['id'] = NULL;
$arguments31['default'] = NULL;
$arguments31['htmlEscape'] = NULL;
$arguments31['arguments'] = NULL;
$arguments31['extensionName'] = NULL;
$renderChildrenClosure32 = function() {return NULL;};

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output28 .= '</option>
									</optgroup>
									<optgroup class="c-divider" label="Existing">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments33 = array();
// Rendering ViewHelper MASK\Mask\ViewHelpers\TcaViewHelper
$arguments34 = array();
$arguments34['type'] = $currentVariableContainer->getOrNull('form');
$arguments34['table'] = $currentVariableContainer->getOrNull('type');
$renderChildrenClosure35 = function() {return NULL;};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'MASK\Mask\ViewHelpers\TcaViewHelper');
$viewHelper36->setArguments($arguments34);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper MASK\Mask\ViewHelpers\TcaViewHelper
$arguments33['each'] = $viewHelper36->initializeArgumentsAndRender();
$arguments33['as'] = 'item';
$arguments33['key'] = '';
$arguments33['reverse'] = false;
$arguments33['iteration'] = NULL;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments39 = array();
// Rendering Boolean node
$arguments39['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'label', $renderingContext));
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output41 = '';

$output41 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments42 = array();
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output44 = '';

$output44 .= '
												<option value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments45 = array();
$arguments45['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'field', $renderingContext);
$arguments45['keepQuotes'] = false;
$arguments45['encoding'] = NULL;
$arguments45['doubleEncode'] = true;
$renderChildrenClosure46 = function() {return NULL;};
$value47 = ($arguments45['value'] !== NULL ? $arguments45['value'] : $renderChildrenClosure46());

$output44 .= (!is_string($value47) ? $value47 : htmlspecialchars($value47, ($arguments45['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments45['encoding'] !== NULL ? $arguments45['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments45['doubleEncode']));

$output44 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments48 = array();
$arguments48['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'label', $renderingContext);
$arguments48['id'] = NULL;
$arguments48['default'] = NULL;
$arguments48['htmlEscape'] = NULL;
$arguments48['arguments'] = NULL;
$arguments48['extensionName'] = NULL;
$renderChildrenClosure49 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output44 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments50 = array();
$arguments50['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'field', $renderingContext);
$arguments50['keepQuotes'] = false;
$arguments50['encoding'] = NULL;
$arguments50['doubleEncode'] = true;
$renderChildrenClosure51 = function() {return NULL;};
$value52 = ($arguments50['value'] !== NULL ? $arguments50['value'] : $renderChildrenClosure51());

$output44 .= (!is_string($value52) ? $value52 : htmlspecialchars($value52, ($arguments50['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments50['encoding'] !== NULL ? $arguments50['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments50['doubleEncode']));

$output44 .= ')</option>
											';
return $output44;
};

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments53 = array();
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output55 = '';

$output55 .= '
												<option value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments56 = array();
$arguments56['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'field', $renderingContext);
$arguments56['keepQuotes'] = false;
$arguments56['encoding'] = NULL;
$arguments56['doubleEncode'] = true;
$renderChildrenClosure57 = function() {return NULL;};
$value58 = ($arguments56['value'] !== NULL ? $arguments56['value'] : $renderChildrenClosure57());

$output55 .= (!is_string($value58) ? $value58 : htmlspecialchars($value58, ($arguments56['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments56['encoding'] !== NULL ? $arguments56['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments56['doubleEncode']));

$output55 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments59 = array();
$arguments59['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'field', $renderingContext);
$arguments59['keepQuotes'] = false;
$arguments59['encoding'] = NULL;
$arguments59['doubleEncode'] = true;
$renderChildrenClosure60 = function() {return NULL;};
$value61 = ($arguments59['value'] !== NULL ? $arguments59['value'] : $renderChildrenClosure60());

$output55 .= (!is_string($value61) ? $value61 : htmlspecialchars($value61, ($arguments59['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments59['encoding'] !== NULL ? $arguments59['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments59['doubleEncode']));

$output55 .= '</option>
											';
return $output55;
};

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output41 .= '
										';
return $output41;
};
$arguments39['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output62 = '';

$output62 .= '
												<option value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments63 = array();
$arguments63['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'field', $renderingContext);
$arguments63['keepQuotes'] = false;
$arguments63['encoding'] = NULL;
$arguments63['doubleEncode'] = true;
$renderChildrenClosure64 = function() {return NULL;};
$value65 = ($arguments63['value'] !== NULL ? $arguments63['value'] : $renderChildrenClosure64());

$output62 .= (!is_string($value65) ? $value65 : htmlspecialchars($value65, ($arguments63['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments63['encoding'] !== NULL ? $arguments63['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments63['doubleEncode']));

$output62 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments66 = array();
$arguments66['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'label', $renderingContext);
$arguments66['id'] = NULL;
$arguments66['default'] = NULL;
$arguments66['htmlEscape'] = NULL;
$arguments66['arguments'] = NULL;
$arguments66['extensionName'] = NULL;
$renderChildrenClosure67 = function() {return NULL;};

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output62 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments68 = array();
$arguments68['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'field', $renderingContext);
$arguments68['keepQuotes'] = false;
$arguments68['encoding'] = NULL;
$arguments68['doubleEncode'] = true;
$renderChildrenClosure69 = function() {return NULL;};
$value70 = ($arguments68['value'] !== NULL ? $arguments68['value'] : $renderChildrenClosure69());

$output62 .= (!is_string($value70) ? $value70 : htmlspecialchars($value70, ($arguments68['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments68['encoding'] !== NULL ? $arguments68['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments68['doubleEncode']));

$output62 .= ')</option>
											';
return $output62;
};
$arguments39['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output71 = '';

$output71 .= '
												<option value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments72 = array();
$arguments72['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'field', $renderingContext);
$arguments72['keepQuotes'] = false;
$arguments72['encoding'] = NULL;
$arguments72['doubleEncode'] = true;
$renderChildrenClosure73 = function() {return NULL;};
$value74 = ($arguments72['value'] !== NULL ? $arguments72['value'] : $renderChildrenClosure73());

$output71 .= (!is_string($value74) ? $value74 : htmlspecialchars($value74, ($arguments72['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments72['encoding'] !== NULL ? $arguments72['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments72['doubleEncode']));

$output71 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments75 = array();
$arguments75['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'field', $renderingContext);
$arguments75['keepQuotes'] = false;
$arguments75['encoding'] = NULL;
$arguments75['doubleEncode'] = true;
$renderChildrenClosure76 = function() {return NULL;};
$value77 = ($arguments75['value'] !== NULL ? $arguments75['value'] : $renderChildrenClosure76());

$output71 .= (!is_string($value77) ? $value77 : htmlspecialchars($value77, ($arguments75['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments75['encoding'] !== NULL ? $arguments75['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments75['doubleEncode']));

$output71 .= '</option>
											';
return $output71;
};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
									';
return $output38;
};

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments33, $renderChildrenClosure37, $renderingContext);

$output28 .= '
									</optgroup>
								</select>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments78 = array();
// Rendering Boolean node
$arguments78['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('form'), 'Richtext');
$arguments78['then'] = NULL;
$arguments78['else'] = NULL;
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
									<input type="hidden" name="tx_mask_tools_maskmask[storage][elements][options][--index--]" value="rte" />
								';
};

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output28 .= '
							</div>
						</div>
					</div>
				</div>

				<!-- TYPO3 field overwrite label -->
				<div class="row tx_mask_fieldcontent_existing">
					<div class="form-group col-sm-12">
						<label class="t3js-formengine-label" for="form_overwritelabel">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments80 = array();
$arguments80['key'] = 'tx_mask.field.overwritelabel';
$arguments80['id'] = NULL;
$arguments80['default'] = NULL;
$arguments80['htmlEscape'] = NULL;
$arguments80['arguments'] = NULL;
$arguments80['extensionName'] = NULL;
$renderChildrenClosure81 = function() {return NULL;};

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output28 .= '
						</label>
						<div class="t3js-formengine-field-item">
							<div class="form-control-wrap">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments82 = array();
$arguments82['class'] = 'form-control';
$arguments82['id'] = 'form_overwritelabel';
$arguments82['name'] = 'tx_mask_tools_maskmask[storage][elements][labels][--index--]';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments83 = array();
$arguments83['key'] = 'tx_mask.all.label';
$arguments83['id'] = NULL;
$arguments83['default'] = NULL;
$arguments83['htmlEscape'] = NULL;
$arguments83['arguments'] = NULL;
$arguments83['extensionName'] = NULL;
$renderChildrenClosure84 = function() {return NULL;};
$arguments82['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments85 = array();
$arguments85['key'] = 'tx_mask.all.label';
$arguments85['id'] = NULL;
$arguments85['default'] = NULL;
$arguments85['htmlEscape'] = NULL;
$arguments85['arguments'] = NULL;
$arguments85['extensionName'] = NULL;
$renderChildrenClosure86 = function() {return NULL;};
$arguments82['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);
$arguments82['additionalAttributes'] = NULL;
$arguments82['data'] = NULL;
$arguments82['required'] = false;
$arguments82['type'] = 'text';
$arguments82['value'] = NULL;
$arguments82['property'] = NULL;
$arguments82['autofocus'] = NULL;
$arguments82['disabled'] = NULL;
$arguments82['maxlength'] = NULL;
$arguments82['readonly'] = NULL;
$arguments82['size'] = NULL;
$arguments82['pattern'] = NULL;
$arguments82['errorClass'] = 'f3-form-error';
$arguments82['dir'] = NULL;
$arguments82['lang'] = NULL;
$arguments82['style'] = NULL;
$arguments82['accesskey'] = NULL;
$arguments82['tabindex'] = NULL;
$arguments82['onclick'] = NULL;
$renderChildrenClosure87 = function() {return NULL;};
$viewHelper88 = $self->getViewHelper('$viewHelper88', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper88->setArguments($arguments82);
$viewHelper88->setRenderingContext($renderingContext);
$viewHelper88->setRenderChildrenClosure($renderChildrenClosure87);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output28 .= $viewHelper88->initializeArgumentsAndRender();

$output28 .= '
							</div>
						</div>
					</div>
				</div>

			';
return $output28;
};

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output23 .= '
		';
return $output23;
};
$arguments21['__thenClosure'] = function() {return NULL;};
$arguments21['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output89 = '';

$output89 .= '
				<!-- mask or TYPO3 field chooser -->
				<div class="row">
					<div class="form-group col-sm-6">
						<label class="t3js-formengine-label" for="form_choosefield">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments90 = array();
$arguments90['key'] = 'tx_mask.field.choosefield';
$arguments90['id'] = NULL;
$arguments90['default'] = NULL;
$arguments90['htmlEscape'] = NULL;
$arguments90['arguments'] = NULL;
$arguments90['extensionName'] = NULL;
$renderChildrenClosure91 = function() {return NULL;};

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
						</label>
						<div class="t3js-formengine-field-item">
							<div class="form-control-wrap">
								<select id="form_choosefield" name="tx_mask_tools_maskmask[storage][elements][columns][--index--]" class="form-control tx_mask_fieldcontent_type">
									<optgroup class="c-divider" label="New">
										<option value="-1">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments92 = array();
$arguments92['key'] = 'tx_mask.field.newfield';
$arguments92['id'] = NULL;
$arguments92['default'] = NULL;
$arguments92['htmlEscape'] = NULL;
$arguments92['arguments'] = NULL;
$arguments92['extensionName'] = NULL;
$renderChildrenClosure93 = function() {return NULL;};

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output89 .= '</option>
									</optgroup>
									<optgroup class="c-divider" label="Existing">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments94 = array();
// Rendering ViewHelper MASK\Mask\ViewHelpers\TcaViewHelper
$arguments95 = array();
$arguments95['type'] = $currentVariableContainer->getOrNull('form');
$arguments95['table'] = $currentVariableContainer->getOrNull('type');
$renderChildrenClosure96 = function() {return NULL;};
$viewHelper97 = $self->getViewHelper('$viewHelper97', $renderingContext, 'MASK\Mask\ViewHelpers\TcaViewHelper');
$viewHelper97->setArguments($arguments95);
$viewHelper97->setRenderingContext($renderingContext);
$viewHelper97->setRenderChildrenClosure($renderChildrenClosure96);
// End of ViewHelper MASK\Mask\ViewHelpers\TcaViewHelper
$arguments94['each'] = $viewHelper97->initializeArgumentsAndRender();
$arguments94['as'] = 'item';
$arguments94['key'] = '';
$arguments94['reverse'] = false;
$arguments94['iteration'] = NULL;
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output99 = '';

$output99 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments100 = array();
// Rendering Boolean node
$arguments100['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'label', $renderingContext));
$arguments100['then'] = NULL;
$arguments100['else'] = NULL;
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output102 = '';

$output102 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments103 = array();
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output105 = '';

$output105 .= '
												<option value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments106 = array();
$arguments106['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'field', $renderingContext);
$arguments106['keepQuotes'] = false;
$arguments106['encoding'] = NULL;
$arguments106['doubleEncode'] = true;
$renderChildrenClosure107 = function() {return NULL;};
$value108 = ($arguments106['value'] !== NULL ? $arguments106['value'] : $renderChildrenClosure107());

$output105 .= (!is_string($value108) ? $value108 : htmlspecialchars($value108, ($arguments106['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments106['encoding'] !== NULL ? $arguments106['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments106['doubleEncode']));

$output105 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments109 = array();
$arguments109['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'label', $renderingContext);
$arguments109['id'] = NULL;
$arguments109['default'] = NULL;
$arguments109['htmlEscape'] = NULL;
$arguments109['arguments'] = NULL;
$arguments109['extensionName'] = NULL;
$renderChildrenClosure110 = function() {return NULL;};

$output105 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output105 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments111 = array();
$arguments111['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'field', $renderingContext);
$arguments111['keepQuotes'] = false;
$arguments111['encoding'] = NULL;
$arguments111['doubleEncode'] = true;
$renderChildrenClosure112 = function() {return NULL;};
$value113 = ($arguments111['value'] !== NULL ? $arguments111['value'] : $renderChildrenClosure112());

$output105 .= (!is_string($value113) ? $value113 : htmlspecialchars($value113, ($arguments111['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments111['encoding'] !== NULL ? $arguments111['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments111['doubleEncode']));

$output105 .= ')</option>
											';
return $output105;
};

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output102 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments114 = array();
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output116 = '';

$output116 .= '
												<option value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments117 = array();
$arguments117['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'field', $renderingContext);
$arguments117['keepQuotes'] = false;
$arguments117['encoding'] = NULL;
$arguments117['doubleEncode'] = true;
$renderChildrenClosure118 = function() {return NULL;};
$value119 = ($arguments117['value'] !== NULL ? $arguments117['value'] : $renderChildrenClosure118());

$output116 .= (!is_string($value119) ? $value119 : htmlspecialchars($value119, ($arguments117['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments117['encoding'] !== NULL ? $arguments117['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments117['doubleEncode']));

$output116 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments120 = array();
$arguments120['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'field', $renderingContext);
$arguments120['keepQuotes'] = false;
$arguments120['encoding'] = NULL;
$arguments120['doubleEncode'] = true;
$renderChildrenClosure121 = function() {return NULL;};
$value122 = ($arguments120['value'] !== NULL ? $arguments120['value'] : $renderChildrenClosure121());

$output116 .= (!is_string($value122) ? $value122 : htmlspecialchars($value122, ($arguments120['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments120['encoding'] !== NULL ? $arguments120['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments120['doubleEncode']));

$output116 .= '</option>
											';
return $output116;
};

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output102 .= '
										';
return $output102;
};
$arguments100['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output123 = '';

$output123 .= '
												<option value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments124 = array();
$arguments124['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'field', $renderingContext);
$arguments124['keepQuotes'] = false;
$arguments124['encoding'] = NULL;
$arguments124['doubleEncode'] = true;
$renderChildrenClosure125 = function() {return NULL;};
$value126 = ($arguments124['value'] !== NULL ? $arguments124['value'] : $renderChildrenClosure125());

$output123 .= (!is_string($value126) ? $value126 : htmlspecialchars($value126, ($arguments124['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments124['encoding'] !== NULL ? $arguments124['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments124['doubleEncode']));

$output123 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments127 = array();
$arguments127['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'label', $renderingContext);
$arguments127['id'] = NULL;
$arguments127['default'] = NULL;
$arguments127['htmlEscape'] = NULL;
$arguments127['arguments'] = NULL;
$arguments127['extensionName'] = NULL;
$renderChildrenClosure128 = function() {return NULL;};

$output123 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output123 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments129 = array();
$arguments129['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'field', $renderingContext);
$arguments129['keepQuotes'] = false;
$arguments129['encoding'] = NULL;
$arguments129['doubleEncode'] = true;
$renderChildrenClosure130 = function() {return NULL;};
$value131 = ($arguments129['value'] !== NULL ? $arguments129['value'] : $renderChildrenClosure130());

$output123 .= (!is_string($value131) ? $value131 : htmlspecialchars($value131, ($arguments129['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments129['encoding'] !== NULL ? $arguments129['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments129['doubleEncode']));

$output123 .= ')</option>
											';
return $output123;
};
$arguments100['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output132 = '';

$output132 .= '
												<option value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments133 = array();
$arguments133['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'field', $renderingContext);
$arguments133['keepQuotes'] = false;
$arguments133['encoding'] = NULL;
$arguments133['doubleEncode'] = true;
$renderChildrenClosure134 = function() {return NULL;};
$value135 = ($arguments133['value'] !== NULL ? $arguments133['value'] : $renderChildrenClosure134());

$output132 .= (!is_string($value135) ? $value135 : htmlspecialchars($value135, ($arguments133['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments133['encoding'] !== NULL ? $arguments133['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments133['doubleEncode']));

$output132 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments136 = array();
$arguments136['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'field', $renderingContext);
$arguments136['keepQuotes'] = false;
$arguments136['encoding'] = NULL;
$arguments136['doubleEncode'] = true;
$renderChildrenClosure137 = function() {return NULL;};
$value138 = ($arguments136['value'] !== NULL ? $arguments136['value'] : $renderChildrenClosure137());

$output132 .= (!is_string($value138) ? $value138 : htmlspecialchars($value138, ($arguments136['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments136['encoding'] !== NULL ? $arguments136['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments136['doubleEncode']));

$output132 .= '</option>
											';
return $output132;
};

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '
									';
return $output99;
};

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments94, $renderChildrenClosure98, $renderingContext);

$output89 .= '
									</optgroup>
								</select>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments139 = array();
// Rendering Boolean node
$arguments139['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('form'), 'Richtext');
$arguments139['then'] = NULL;
$arguments139['else'] = NULL;
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
									<input type="hidden" name="tx_mask_tools_maskmask[storage][elements][options][--index--]" value="rte" />
								';
};

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output89 .= '
							</div>
						</div>
					</div>
				</div>

				<!-- TYPO3 field overwrite label -->
				<div class="row tx_mask_fieldcontent_existing">
					<div class="form-group col-sm-12">
						<label class="t3js-formengine-label" for="form_overwritelabel">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments141 = array();
$arguments141['key'] = 'tx_mask.field.overwritelabel';
$arguments141['id'] = NULL;
$arguments141['default'] = NULL;
$arguments141['htmlEscape'] = NULL;
$arguments141['arguments'] = NULL;
$arguments141['extensionName'] = NULL;
$renderChildrenClosure142 = function() {return NULL;};

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output89 .= '
						</label>
						<div class="t3js-formengine-field-item">
							<div class="form-control-wrap">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments143 = array();
$arguments143['class'] = 'form-control';
$arguments143['id'] = 'form_overwritelabel';
$arguments143['name'] = 'tx_mask_tools_maskmask[storage][elements][labels][--index--]';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments144 = array();
$arguments144['key'] = 'tx_mask.all.label';
$arguments144['id'] = NULL;
$arguments144['default'] = NULL;
$arguments144['htmlEscape'] = NULL;
$arguments144['arguments'] = NULL;
$arguments144['extensionName'] = NULL;
$renderChildrenClosure145 = function() {return NULL;};
$arguments143['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments146 = array();
$arguments146['key'] = 'tx_mask.all.label';
$arguments146['id'] = NULL;
$arguments146['default'] = NULL;
$arguments146['htmlEscape'] = NULL;
$arguments146['arguments'] = NULL;
$arguments146['extensionName'] = NULL;
$renderChildrenClosure147 = function() {return NULL;};
$arguments143['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);
$arguments143['additionalAttributes'] = NULL;
$arguments143['data'] = NULL;
$arguments143['required'] = false;
$arguments143['type'] = 'text';
$arguments143['value'] = NULL;
$arguments143['property'] = NULL;
$arguments143['autofocus'] = NULL;
$arguments143['disabled'] = NULL;
$arguments143['maxlength'] = NULL;
$arguments143['readonly'] = NULL;
$arguments143['size'] = NULL;
$arguments143['pattern'] = NULL;
$arguments143['errorClass'] = 'f3-form-error';
$arguments143['dir'] = NULL;
$arguments143['lang'] = NULL;
$arguments143['style'] = NULL;
$arguments143['accesskey'] = NULL;
$arguments143['tabindex'] = NULL;
$arguments143['onclick'] = NULL;
$renderChildrenClosure148 = function() {return NULL;};
$viewHelper149 = $self->getViewHelper('$viewHelper149', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper149->setArguments($arguments143);
$viewHelper149->setRenderingContext($renderingContext);
$viewHelper149->setRenderChildrenClosure($renderChildrenClosure148);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output89 .= $viewHelper149->initializeArgumentsAndRender();

$output89 .= '
							</div>
						</div>
					</div>
				</div>

			';
return $output89;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output0 .= '

		<!-- mask field key and label -->
		<div class="tx_mask_fieldcontent_new">
			<div class="row">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments150 = array();
// Rendering Boolean node
$arguments150['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('editMode'));
$arguments150['then'] = NULL;
$arguments150['else'] = NULL;
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output152 = '';

$output152 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments153 = array();
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output155 = '';

$output155 .= '
						<input name="tx_mask_tools_maskmask[storage][elements][columns][]" type="hidden" class="tx_mask_newfieldname lowercase tceforms-textfield" required="required" data-error="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments156 = array();
$arguments156['key'] = 'tx_mask.all.error.key';
$arguments156['id'] = NULL;
$arguments156['default'] = NULL;
$arguments156['htmlEscape'] = NULL;
$arguments156['arguments'] = NULL;
$arguments156['extensionName'] = NULL;
$renderChildrenClosure157 = function() {return NULL;};

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output155 .= '" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments158 = array();
$arguments158['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'key', $renderingContext);
$arguments158['keepQuotes'] = false;
$arguments158['encoding'] = NULL;
$arguments158['doubleEncode'] = true;
$renderChildrenClosure159 = function() {return NULL;};
$value160 = ($arguments158['value'] !== NULL ? $arguments158['value'] : $renderChildrenClosure159());

$output155 .= (!is_string($value160) ? $value160 : htmlspecialchars($value160, ($arguments158['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments158['encoding'] !== NULL ? $arguments158['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments158['doubleEncode']));

$output155 .= '" />
					';
return $output155;
};

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments161 = array();
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output163 = '';

$output163 .= '
						<div class="form-group col-sm-6">
							<label class="t3js-formengine-label" for="form_key">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments164 = array();
$arguments164['key'] = 'tx_mask.field.fieldkey';
$arguments164['id'] = NULL;
$arguments164['default'] = NULL;
$arguments164['htmlEscape'] = NULL;
$arguments164['arguments'] = NULL;
$arguments164['extensionName'] = NULL;
$renderChildrenClosure165 = function() {return NULL;};

$output163 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output163 .= '
							</label>
							<div class="t3js-formengine-field-item">
								<div class="form-control-wrap">
									<input name="tx_mask_tools_maskmask[storage][elements][columns][]" id="form_key" type="text" class="form-control tx_mask_newfieldname lowercase tceforms-textfield" required="required" data-error="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments166 = array();
$arguments166['key'] = 'tx_mask.all.error.key';
$arguments166['id'] = NULL;
$arguments166['default'] = NULL;
$arguments166['htmlEscape'] = NULL;
$arguments166['arguments'] = NULL;
$arguments166['extensionName'] = NULL;
$renderChildrenClosure167 = function() {return NULL;};

$output163 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output163 .= '" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments168 = array();
$arguments168['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'key', $renderingContext);
$arguments168['keepQuotes'] = false;
$arguments168['encoding'] = NULL;
$arguments168['doubleEncode'] = true;
$renderChildrenClosure169 = function() {return NULL;};
$value170 = ($arguments168['value'] !== NULL ? $arguments168['value'] : $renderChildrenClosure169());

$output163 .= (!is_string($value170) ? $value170 : htmlspecialchars($value170, ($arguments168['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments168['encoding'] !== NULL ? $arguments168['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments168['doubleEncode']));

$output163 .= '" />
								</div>
							</div>
						</div>
					';
return $output163;
};

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output152 .= '
				';
return $output152;
};
$arguments150['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output171 = '';

$output171 .= '
						<input name="tx_mask_tools_maskmask[storage][elements][columns][]" type="hidden" class="tx_mask_newfieldname lowercase tceforms-textfield" required="required" data-error="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments172 = array();
$arguments172['key'] = 'tx_mask.all.error.key';
$arguments172['id'] = NULL;
$arguments172['default'] = NULL;
$arguments172['htmlEscape'] = NULL;
$arguments172['arguments'] = NULL;
$arguments172['extensionName'] = NULL;
$renderChildrenClosure173 = function() {return NULL;};

$output171 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output171 .= '" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments174 = array();
$arguments174['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'key', $renderingContext);
$arguments174['keepQuotes'] = false;
$arguments174['encoding'] = NULL;
$arguments174['doubleEncode'] = true;
$renderChildrenClosure175 = function() {return NULL;};
$value176 = ($arguments174['value'] !== NULL ? $arguments174['value'] : $renderChildrenClosure175());

$output171 .= (!is_string($value176) ? $value176 : htmlspecialchars($value176, ($arguments174['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments174['encoding'] !== NULL ? $arguments174['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments174['doubleEncode']));

$output171 .= '" />
					';
return $output171;
};
$arguments150['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output177 = '';

$output177 .= '
						<div class="form-group col-sm-6">
							<label class="t3js-formengine-label" for="form_key">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments178 = array();
$arguments178['key'] = 'tx_mask.field.fieldkey';
$arguments178['id'] = NULL;
$arguments178['default'] = NULL;
$arguments178['htmlEscape'] = NULL;
$arguments178['arguments'] = NULL;
$arguments178['extensionName'] = NULL;
$renderChildrenClosure179 = function() {return NULL;};

$output177 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);

$output177 .= '
							</label>
							<div class="t3js-formengine-field-item">
								<div class="form-control-wrap">
									<input name="tx_mask_tools_maskmask[storage][elements][columns][]" id="form_key" type="text" class="form-control tx_mask_newfieldname lowercase tceforms-textfield" required="required" data-error="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments180 = array();
$arguments180['key'] = 'tx_mask.all.error.key';
$arguments180['id'] = NULL;
$arguments180['default'] = NULL;
$arguments180['htmlEscape'] = NULL;
$arguments180['arguments'] = NULL;
$arguments180['extensionName'] = NULL;
$renderChildrenClosure181 = function() {return NULL;};

$output177 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output177 .= '" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments182 = array();
$arguments182['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'key', $renderingContext);
$arguments182['keepQuotes'] = false;
$arguments182['encoding'] = NULL;
$arguments182['doubleEncode'] = true;
$renderChildrenClosure183 = function() {return NULL;};
$value184 = ($arguments182['value'] !== NULL ? $arguments182['value'] : $renderChildrenClosure183());

$output177 .= (!is_string($value184) ? $value184 : htmlspecialchars($value184, ($arguments182['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments182['encoding'] !== NULL ? $arguments182['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments182['doubleEncode']));

$output177 .= '" />
								</div>
							</div>
						</div>
					';
return $output177;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output0 .= '
				<div class="form-group col-sm-6">
					<label class="t3js-formengine-label" for="form_label">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments185 = array();
$arguments185['key'] = 'tx_mask.field.label';
$arguments185['id'] = NULL;
$arguments185['default'] = NULL;
$arguments185['htmlEscape'] = NULL;
$arguments185['arguments'] = NULL;
$arguments185['extensionName'] = NULL;
$renderChildrenClosure186 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output0 .= '
					</label>
					<div class="t3js-formengine-field-item">
						<div class="form-control-wrap">
							<input name="tx_mask_tools_maskmask[storage][elements][labels][--index--]" id="form_label" type="text" class="form-control" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments187 = array();
$arguments187['key'] = 'tx_mask.content.label';
$arguments187['id'] = NULL;
$arguments187['default'] = NULL;
$arguments187['htmlEscape'] = NULL;
$arguments187['arguments'] = NULL;
$arguments187['extensionName'] = NULL;
$renderChildrenClosure188 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output0 .= '" placeholder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments189 = array();
$arguments189['key'] = 'tx_mask.content.label';
$arguments189['id'] = NULL;
$arguments189['default'] = NULL;
$arguments189['htmlEscape'] = NULL;
$arguments189['arguments'] = NULL;
$arguments189['extensionName'] = NULL;
$renderChildrenClosure190 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output0 .= '" value="';
// Rendering ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper
$arguments191 = array();
$arguments191['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$arguments191['fieldKey'] = $currentVariableContainer->getOrNull('key');
$arguments191['field'] = $currentVariableContainer->getOrNull('field');
$arguments191['table'] = $currentVariableContainer->getOrNull('type');
$renderChildrenClosure192 = function() {return NULL;};
$viewHelper193 = $self->getViewHelper('$viewHelper193', $renderingContext, 'MASK\Mask\ViewHelpers\LabelViewHelper');
$viewHelper193->setArguments($arguments191);
$viewHelper193->setRenderingContext($renderingContext);
$viewHelper193->setRenderChildrenClosure($renderChildrenClosure192);
// End of ViewHelper MASK\Mask\ViewHelpers\LabelViewHelper

$output0 .= $viewHelper193->initializeArgumentsAndRender();

$output0 .= '" />
						</div>
					</div>
				</div>
			</div>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments194 = array();
$output195 = '';

$output195 .= 'Forms/';

$output195 .= $currentVariableContainer->getOrNull('form');
$arguments194['partial'] = $output195;
// Rendering Array
$array196 = array();
$array196['storage'] = $currentVariableContainer->getOrNull('storage');
$array196['editMode'] = $currentVariableContainer->getOrNull('editMode');
$array196['field'] = $currentVariableContainer->getOrNull('field');
$array196['key'] = $currentVariableContainer->getOrNull('key');
$array196['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$array196['type'] = $currentVariableContainer->getOrNull('type');
$arguments194['arguments'] = $array196;
$arguments194['section'] = NULL;
$arguments194['optional'] = false;
$renderChildrenClosure197 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments194, $renderChildrenClosure197, $renderingContext);

$output0 .= '
		</div>
	</div>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments198 = array();
// Rendering Boolean node
$arguments198['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('isInlineField'));
$arguments198['then'] = NULL;
$arguments198['else'] = NULL;
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output200 = '';

$output200 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments201 = array();
$renderChildrenClosure202 = function() {return NULL;};

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output200 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments203 = array();
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output205 = '';

$output205 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments206 = array();
$arguments206['partial'] = 'WizardContent/Warnings';
// Rendering Array
$array207 = array();
$array207['storage'] = $currentVariableContainer->getOrNull('storage');
$array207['editMode'] = $currentVariableContainer->getOrNull('editMode');
$array207['key'] = $currentVariableContainer->getOrNull('key');
$arguments206['arguments'] = $array207;
$arguments206['section'] = NULL;
$arguments206['optional'] = false;
$renderChildrenClosure208 = function() {return NULL;};

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments206, $renderChildrenClosure208, $renderingContext);

$output205 .= '
		';
return $output205;
};

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output200 .= '
	';
return $output200;
};
$arguments198['__thenClosure'] = function() {return NULL;};
$arguments198['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output209 = '';

$output209 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments210 = array();
$arguments210['partial'] = 'WizardContent/Warnings';
// Rendering Array
$array211 = array();
$array211['storage'] = $currentVariableContainer->getOrNull('storage');
$array211['editMode'] = $currentVariableContainer->getOrNull('editMode');
$array211['key'] = $currentVariableContainer->getOrNull('key');
$arguments210['arguments'] = $array211;
$arguments210['section'] = NULL;
$arguments210['optional'] = false;
$renderChildrenClosure212 = function() {return NULL;};

$output209 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments210, $renderChildrenClosure212, $renderingContext);

$output209 .= '
		';
return $output209;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output0 .= '
</div>';


return $output0;
}


}
#1462875032    61264     