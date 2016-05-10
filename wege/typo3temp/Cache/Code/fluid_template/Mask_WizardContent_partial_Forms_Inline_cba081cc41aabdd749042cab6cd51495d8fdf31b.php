<?php
class FluidCache_Mask_WizardContent_partial_Forms_Inline_cba081cc41aabdd749042cab6cd51495d8fdf31b extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][type]" value="inline" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][exclude]" value="1" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][sql][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = $currentVariableContainer->getOrNull('type');
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() {return NULL;};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1['encoding'] !== NULL ? $arguments1['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1['doubleEncode']));

$output0 .= '][--index--]" value="int(11) unsigned DEFAULT \'0\' NOT NULL" />

<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][foreign_table]" value="--inlinetable--" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][foreign_field]" value="parentid" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][foreign_table_field]" value="parenttable" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][foreign_sortby]" value="sorting" />

<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][appearance][collapseAll]" value="1" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][appearance][levelLinksPosition]" value="top" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][appearance][showSynchronizationLink]" value="1" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][appearance][showPossibleLocalizationRecords]" value="1" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][appearance][showAllLocalizationLink]" value="1" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][appearance][useSortable]" value="1" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][appearance][enabledControls][dragdrop]" value="1" />


<div class="row">
	<div class="form-group col-sm-6">
		<label class="t3js-formengine-label" for="inline_minitems">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments4 = array();
$arguments4['key'] = 'tx_mask.field.inline.minitems';
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['htmlEscape'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
		</label>
		<div class="t3js-formengine-field-item">
			<div class="form-control-wrap" style="">
				<input id="inline_minitems" name="tx_mask_tools_maskmask[storage][tca][--index--][config][minitems]" type="number" class="form-control" min="0" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments6 = array();
$arguments6['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'config.minitems', $renderingContext);
$arguments6['keepQuotes'] = false;
$arguments6['encoding'] = NULL;
$arguments6['doubleEncode'] = true;
$renderChildrenClosure7 = function() {return NULL;};
$value8 = ($arguments6['value'] !== NULL ? $arguments6['value'] : $renderChildrenClosure7());

$output0 .= (!is_string($value8) ? $value8 : htmlspecialchars($value8, ($arguments6['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments6['encoding'] !== NULL ? $arguments6['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments6['doubleEncode']));

$output0 .= '" />
			</div>
		</div>
	</div>
	<div class="form-group col-sm-6">
		<label class="t3js-formengine-label" for="inline_maxitems">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments9 = array();
$arguments9['key'] = 'tx_mask.field.inline.maxitems';
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['htmlEscape'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$renderChildrenClosure10 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
		</label>
		<div class="t3js-formengine-field-item">
			<div class="form-control-wrap" style="">
				<input id="inline_maxitems" name="tx_mask_tools_maskmask[storage][tca][--index--][config][maxitems]" type="number" class="form-control" min="1" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments11 = array();
$arguments11['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'config.maxitems', $renderingContext);
$arguments11['keepQuotes'] = false;
$arguments11['encoding'] = NULL;
$arguments11['doubleEncode'] = true;
$renderChildrenClosure12 = function() {return NULL;};
$value13 = ($arguments11['value'] !== NULL ? $arguments11['value'] : $renderChildrenClosure12());

$output0 .= (!is_string($value13) ? $value13 : htmlspecialchars($value13, ($arguments11['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments11['encoding'] !== NULL ? $arguments11['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments11['doubleEncode']));

$output0 .= '" />
			</div>
		</div>
	</div>
</div>
';


return $output0;
}


}
#1462875032    6916      