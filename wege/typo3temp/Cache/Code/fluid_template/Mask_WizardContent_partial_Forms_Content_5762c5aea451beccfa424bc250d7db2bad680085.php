<?php
class FluidCache_Mask_WizardContent_partial_Forms_Content_5762c5aea451beccfa424bc250d7db2bad680085 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][type]" value="inline" />
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

<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][foreign_table]" value="tt_content" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][foreign_field]" value="tx_mask_content_parent" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][foreign_sortby]" value="sorting" />

<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][appearance][collapseAll]" value="1" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][appearance][levelLinksPosition]" value="top" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][appearance][showSynchronizationLink]" value="1" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][appearance][showPossibleLocalizationRecords]" value="1" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][appearance][showAllLocalizationLink]" value="1" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][appearance][useSortable]" value="1" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][appearance][enabledControls][dragdrop]" value="1" />
<div class="row">
	<div class="form-group col-sm-12">
		<label class="t3js-formengine-label" for="minitems">
			minitems
		</label>
		<div class="t3js-formengine-field-item">
			<div class="form-control-wrap" style="">
				<input name="tx_mask_tools_maskmask[storage][tca][--index--][config][minitems]" type="number" class="form-control" id="minitems" title="minitems" placeholder="cols" min="0" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments4 = array();
$arguments4['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'config.minitems', $renderingContext);
$arguments4['keepQuotes'] = false;
$arguments4['encoding'] = NULL;
$arguments4['doubleEncode'] = true;
$renderChildrenClosure5 = function() {return NULL;};
$value6 = ($arguments4['value'] !== NULL ? $arguments4['value'] : $renderChildrenClosure5());

$output0 .= (!is_string($value6) ? $value6 : htmlspecialchars($value6, ($arguments4['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments4['encoding'] !== NULL ? $arguments4['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments4['doubleEncode']));

$output0 .= '" />
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="form-group col-sm-12">
		<label class="t3js-formengine-label" for="maxitems">
			maxitems
		</label>
		<div class="t3js-formengine-field-item">
			<div class="form-control-wrap" style="">
				<input name="tx_mask_tools_maskmask[storage][tca][--index--][config][maxitems]" type="number" class="form-control" id="maxitems" title="maxitems" placeholder="cols" min="1" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'config.maxitems', $renderingContext);
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = NULL;
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() {return NULL;};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output0 .= (!is_string($value9) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments7['encoding'] !== NULL ? $arguments7['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments7['doubleEncode']));

$output0 .= '" />
			</div>
		</div>
	</div>
</div>
';


return $output0;
}


}
#1462875032    5837      