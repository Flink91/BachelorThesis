<?php
class FluidCache_Mask_WizardContent_partial_Forms_Select_b7e4c07dcaf6246e5ffe7389408797f1819eef85 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][type]" value="select" />
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

$output0 .= '][--index--]" value="tinytext" />

<div class="row">
    <div class="form-group col-sm-6">
        <label class="t3js-formengine-label" for="select_size">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments4 = array();
$arguments4['key'] = 'tx_mask.field.select.size';
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
                <input id="select_size" name="tx_mask_tools_maskmask[storage][tca][--index--][config][size]" type="number" class="form-control" title="size" placeholder="cols" min="1" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments6 = array();
$arguments6['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'config.size', $renderingContext);
$arguments6['keepQuotes'] = false;
$arguments6['encoding'] = NULL;
$arguments6['doubleEncode'] = true;
$renderChildrenClosure7 = function() {return NULL;};
$value8 = ($arguments6['value'] !== NULL ? $arguments6['value'] : $renderChildrenClosure7());

$output0 .= (!is_string($value8) ? $value8 : htmlspecialchars($value8, ($arguments6['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments6['encoding'] !== NULL ? $arguments6['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments6['doubleEncode']));

$output0 .= '"/>
            </div>
        </div>
    </div>
    <div class="form-group col-sm-6">
        <label class="t3js-formengine-label" for="select_autosizemax">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments9 = array();
$arguments9['key'] = 'tx_mask.field.select.autosizemax';
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
                <input id="select_autosizemax" name="tx_mask_tools_maskmask[storage][tca][--index--][config][autoSizeMax]" type="number" class="form-control" title="autoSizeMax" placeholder="cols" min="1" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments11 = array();
$arguments11['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'config.autoSizeMax', $renderingContext);
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

<div class="row">
    <div class="form-group col-sm-6">
        <label class="t3js-formengine-label" for="select_foreigntable">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments14 = array();
$arguments14['key'] = 'tx_mask.field.select.foreign_table';
$arguments14['id'] = NULL;
$arguments14['default'] = NULL;
$arguments14['htmlEscape'] = NULL;
$arguments14['arguments'] = NULL;
$arguments14['extensionName'] = NULL;
$renderChildrenClosure15 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output0 .= '
        </label>
        <div class="t3js-formengine-field-item">
            <div class="form-control-wrap" style="">
                <input id="select_foreigntable" name="tx_mask_tools_maskmask[storage][tca][--index--][config][foreign_table]" type="text" class="form-control" title="foreign_table" placeholder="pages" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'config.foreign_table', $renderingContext);
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = NULL;
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() {return NULL;};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());

$output0 .= (!is_string($value18) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments16['encoding'] !== NULL ? $arguments16['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments16['doubleEncode']));

$output0 .= '"/>
            </div>
        </div>
    </div>
    <div class="form-group col-sm-6">
        <label class="t3js-formengine-label" for="select_foreigntablewhere">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments19 = array();
$arguments19['key'] = 'tx_mask.field.select.foreign_table_where';
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['htmlEscape'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$renderChildrenClosure20 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output0 .= '
        </label>
        <div class="t3js-formengine-field-item">
            <div class="form-control-wrap" style="">
                <input id="select_foreigntablewhere" name="tx_mask_tools_maskmask[storage][tca][--index--][config][foreign_table_where]" type="text" class="form-control" title="foreign_table_where" placeholder="doctype=1" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments21 = array();
$arguments21['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'config.foreign_table_where', $renderingContext);
$arguments21['keepQuotes'] = false;
$arguments21['encoding'] = NULL;
$arguments21['doubleEncode'] = true;
$renderChildrenClosure22 = function() {return NULL;};
$value23 = ($arguments21['value'] !== NULL ? $arguments21['value'] : $renderChildrenClosure22());

$output0 .= (!is_string($value23) ? $value23 : htmlspecialchars($value23, ($arguments21['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments21['encoding'] !== NULL ? $arguments21['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments21['doubleEncode']));

$output0 .= '"/>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-6">
        <label class="t3js-formengine-label" for="select_renderType">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments24 = array();
$arguments24['key'] = 'tx_mask.field.select.renderType';
$arguments24['id'] = NULL;
$arguments24['default'] = NULL;
$arguments24['htmlEscape'] = NULL;
$arguments24['arguments'] = NULL;
$arguments24['extensionName'] = NULL;
$renderChildrenClosure25 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output0 .= '
        </label>
        <div class="t3js-formengine-field-item">
            <div class="form-control-wrap" style="">
                <select id="select_renderType" name="tx_mask_tools_maskmask[storage][tca][--index--][config][renderType]" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments26 = array();
$arguments26['key'] = 'tx_mask.field.select.renderType';
$arguments26['id'] = NULL;
$arguments26['default'] = NULL;
$arguments26['htmlEscape'] = NULL;
$arguments26['arguments'] = NULL;
$arguments26['extensionName'] = NULL;
$renderChildrenClosure27 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output0 .= '" class="form-control tx_mask_fieldcontent_eval">
                    <option value="selectSingle"';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments28 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments29 = array();
$arguments29['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'config.renderType', $renderingContext);
$arguments29['keepQuotes'] = false;
$arguments29['encoding'] = NULL;
$arguments29['doubleEncode'] = true;
$renderChildrenClosure30 = function() {return NULL;};
$value31 = ($arguments29['value'] !== NULL ? $arguments29['value'] : $renderChildrenClosure30());
$arguments28['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value31) ? $value31 : htmlspecialchars($value31, ($arguments29['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments29['encoding'] !== NULL ? $arguments29['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments29['doubleEncode'])), 'selectSingle');
$arguments28['then'] = ' selected="selected"';
$arguments28['else'] = NULL;
$renderChildrenClosure32 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, $renderChildrenClosure32, $renderingContext);

$output0 .= '>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments33 = array();
$arguments33['key'] = 'tx_mask.field.select.renderType.selectSingle';
$arguments33['id'] = NULL;
$arguments33['default'] = NULL;
$arguments33['htmlEscape'] = NULL;
$arguments33['arguments'] = NULL;
$arguments33['extensionName'] = NULL;
$renderChildrenClosure34 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output0 .= '</option>
                    <option value="selectSingleBox"';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments35 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments36 = array();
$arguments36['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'config.renderType', $renderingContext);
$arguments36['keepQuotes'] = false;
$arguments36['encoding'] = NULL;
$arguments36['doubleEncode'] = true;
$renderChildrenClosure37 = function() {return NULL;};
$value38 = ($arguments36['value'] !== NULL ? $arguments36['value'] : $renderChildrenClosure37());
$arguments35['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value38) ? $value38 : htmlspecialchars($value38, ($arguments36['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments36['encoding'] !== NULL ? $arguments36['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments36['doubleEncode'])), 'selectSingleBox');
$arguments35['then'] = ' selected="selected"';
$arguments35['else'] = NULL;
$renderChildrenClosure39 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure39, $renderingContext);

$output0 .= '>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments40 = array();
$arguments40['key'] = 'tx_mask.field.select.renderType.selectSingleBox';
$arguments40['id'] = NULL;
$arguments40['default'] = NULL;
$arguments40['htmlEscape'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['extensionName'] = NULL;
$renderChildrenClosure41 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output0 .= '</option>
                    <option value="selectCheckBox"';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments42 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments43 = array();
$arguments43['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'config.renderType', $renderingContext);
$arguments43['keepQuotes'] = false;
$arguments43['encoding'] = NULL;
$arguments43['doubleEncode'] = true;
$renderChildrenClosure44 = function() {return NULL;};
$value45 = ($arguments43['value'] !== NULL ? $arguments43['value'] : $renderChildrenClosure44());
$arguments42['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value45) ? $value45 : htmlspecialchars($value45, ($arguments43['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments43['encoding'] !== NULL ? $arguments43['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments43['doubleEncode'])), 'selectCheckBox');
$arguments42['then'] = ' selected="selected"';
$arguments42['else'] = NULL;
$renderChildrenClosure46 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, $renderChildrenClosure46, $renderingContext);

$output0 .= '>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments47 = array();
$arguments47['key'] = 'tx_mask.field.select.renderType.selectCheckBox';
$arguments47['id'] = NULL;
$arguments47['default'] = NULL;
$arguments47['htmlEscape'] = NULL;
$arguments47['arguments'] = NULL;
$arguments47['extensionName'] = NULL;
$renderChildrenClosure48 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output0 .= '</option>
                    <option value="selectMultipleSideBySide"';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments49 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments50 = array();
$arguments50['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'config.renderType', $renderingContext);
$arguments50['keepQuotes'] = false;
$arguments50['encoding'] = NULL;
$arguments50['doubleEncode'] = true;
$renderChildrenClosure51 = function() {return NULL;};
$value52 = ($arguments50['value'] !== NULL ? $arguments50['value'] : $renderChildrenClosure51());
$arguments49['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value52) ? $value52 : htmlspecialchars($value52, ($arguments50['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments50['encoding'] !== NULL ? $arguments50['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments50['doubleEncode'])), 'selectMultipleSideBySide');
$arguments49['then'] = ' selected="selected"';
$arguments49['else'] = NULL;
$renderChildrenClosure53 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure53, $renderingContext);

$output0 .= '>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments54 = array();
$arguments54['key'] = 'tx_mask.field.select.renderType.selectMultipleSideBySide';
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['htmlEscape'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$renderChildrenClosure55 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output0 .= '</option>
                    <!--option value="selectTree"';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments56 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments57 = array();
$arguments57['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'config.renderType', $renderingContext);
$arguments57['keepQuotes'] = false;
$arguments57['encoding'] = NULL;
$arguments57['doubleEncode'] = true;
$renderChildrenClosure58 = function() {return NULL;};
$value59 = ($arguments57['value'] !== NULL ? $arguments57['value'] : $renderChildrenClosure58());
$arguments56['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value59) ? $value59 : htmlspecialchars($value59, ($arguments57['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments57['encoding'] !== NULL ? $arguments57['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments57['doubleEncode'])), 'selectTree');
$arguments56['then'] = ' selected="selected"';
$arguments56['else'] = NULL;
$renderChildrenClosure60 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, $renderChildrenClosure60, $renderingContext);

$output0 .= '>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments61 = array();
$arguments61['key'] = 'tx_mask.field.select.renderType.selectTree';
$arguments61['id'] = NULL;
$arguments61['default'] = NULL;
$arguments61['htmlEscape'] = NULL;
$arguments61['arguments'] = NULL;
$arguments61['extensionName'] = NULL;
$renderChildrenClosure62 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output0 .= '</option-->
                </select>
            </div>
        </div>
        <label class="t3js-formengine-label" for="select_maxitems">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments63 = array();
$arguments63['key'] = 'tx_mask.field.select.maxitems';
$arguments63['id'] = NULL;
$arguments63['default'] = NULL;
$arguments63['htmlEscape'] = NULL;
$arguments63['arguments'] = NULL;
$arguments63['extensionName'] = NULL;
$renderChildrenClosure64 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output0 .= '
        </label>
        <div class="t3js-formengine-field-item">
            <div class="form-control-wrap" style="">
                <input id="select_maxitems" name="tx_mask_tools_maskmask[storage][tca][--index--][config][maxitems]" type="number" class="form-control" title="maxitems" placeholder="cols" min="1" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments65 = array();
$arguments65['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'config.maxitems', $renderingContext);
$arguments65['keepQuotes'] = false;
$arguments65['encoding'] = NULL;
$arguments65['doubleEncode'] = true;
$renderChildrenClosure66 = function() {return NULL;};
$value67 = ($arguments65['value'] !== NULL ? $arguments65['value'] : $renderChildrenClosure66());

$output0 .= (!is_string($value67) ? $value67 : htmlspecialchars($value67, ($arguments65['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments65['encoding'] !== NULL ? $arguments65['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments65['doubleEncode']));

$output0 .= '" />
            </div>
        </div>
    </div>
    <div class="form-group col-sm-6">
        <label class="t3js-formengine-label" for="select_int">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments68 = array();
$arguments68['key'] = 'tx_mask.field.select.items';
$arguments68['id'] = NULL;
$arguments68['default'] = NULL;
$arguments68['htmlEscape'] = NULL;
$arguments68['arguments'] = NULL;
$arguments68['extensionName'] = NULL;
$renderChildrenClosure69 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output0 .= '
        </label>
        <div class="t3js-formengine-field-item">
            <div class="form-control-wrap" style="">
                <textarea id="select_int" name="tx_mask_tools_maskmask[dummy][--index--][int]" class="form-control tx_mask_fieldcontent_items" rows="10" title="cols">';
// Rendering ViewHelper MASK\Mask\ViewHelpers\ItemsViewHelper
$arguments70 = array();
$arguments70['items'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'config.items', $renderingContext);
$renderChildrenClosure71 = function() {return NULL;};
$viewHelper72 = $self->getViewHelper('$viewHelper72', $renderingContext, 'MASK\Mask\ViewHelpers\ItemsViewHelper');
$viewHelper72->setArguments($arguments70);
$viewHelper72->setRenderingContext($renderingContext);
$viewHelper72->setRenderChildrenClosure($renderChildrenClosure71);
// End of ViewHelper MASK\Mask\ViewHelpers\ItemsViewHelper

$output0 .= $viewHelper72->initializeArgumentsAndRender();

$output0 .= '</textarea>
                <div class="tx_mask_fieldcontent_itemsresult"></div>
            </div>
        </div>
    </div>
</div>
';


return $output0;
}


}
#1462875032    24642     