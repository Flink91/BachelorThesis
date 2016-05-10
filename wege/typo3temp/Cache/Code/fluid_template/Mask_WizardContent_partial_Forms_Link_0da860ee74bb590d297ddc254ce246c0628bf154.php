<?php
class FluidCache_Mask_WizardContent_partial_Forms_Link_0da860ee74bb590d297ddc254ce246c0628bf154 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][type]" value="input" />
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
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][wizards][_PADDING]" value="2" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][wizards][link][type]" value="popup" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][wizards][link][title]" value="Link" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][wizards][link][icon]" value="link_popup.gif" />
<!--<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][wizards][link][script]" value="browse_links.php?mode=wizard" />-->
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][wizards][link][module][name]" value="wizard_link" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][wizards][link][module][urlParameters][mode]" value="wizard" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][wizards][link][JSopenParams]" value="height=300,width=500,status=0,menubar=0,scrollbars=1" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][eval]" value="" class="tx_mask_fieldcontent_evalresult" />
<input type="hidden" name="tx_mask_tools_maskmask[storage][tca][--index--][config][wizards][link][params][blindLinkOptions]" value="folder" class="tx_mask_fieldcontent_linkresult" />

<div class="row">
	<div class="form-group col-sm-6">
		<label class="t3js-formengine-label" for="link_default">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments4 = array();
$arguments4['key'] = 'tx_mask.field.link.default';
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
				<input id="link_default" name="tx_mask_tools_maskmask[storage][tca][--index--][config][default]" type="text" class="form-control" title="default" placeholder="default" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments6 = array();
$arguments6['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'config.default', $renderingContext);
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
	<div class="form-group col-sm-3">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments9 = array();
$arguments9['partial'] = 'TCA/Required';
// Rendering Array
$array10 = array();
$array10['key'] = $currentVariableContainer->getOrNull('key');
$array10['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$array10['field'] = $currentVariableContainer->getOrNull('field');
$arguments9['arguments'] = $array10;
$arguments9['section'] = NULL;
$arguments9['optional'] = false;
$renderChildrenClosure11 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments9, $renderChildrenClosure11, $renderingContext);

$output0 .= '
	</div>
	<div class="form-group col-sm-3">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments12 = array();
$arguments12['partial'] = 'TCA/Trim';
// Rendering Array
$array13 = array();
$array13['key'] = $currentVariableContainer->getOrNull('key');
$array13['elementKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('storage'), 'key', $renderingContext);
$array13['field'] = $currentVariableContainer->getOrNull('field');
$arguments12['arguments'] = $array13;
$arguments12['section'] = NULL;
$arguments12['optional'] = false;
$renderChildrenClosure14 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments12, $renderChildrenClosure14, $renderingContext);

$output0 .= '
	</div>
</div>
<div class="row">
	<div class="form-group col-sm-12">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments15 = array();
$arguments15['key'] = 'tx_mask.field.link.file';
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '<input name="tx_mask_tools_maskmask[dummy][--index--][file]" type="checkbox" value="file" ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments17 = array();
// Rendering Boolean node
// Rendering ViewHelper MASK\Mask\ViewHelpers\LinkoptionViewHelper
$arguments18 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments19 = array();
$arguments19['value'] = $currentVariableContainer->getOrNull('key');
$arguments19['keepQuotes'] = false;
$arguments19['encoding'] = NULL;
$arguments19['doubleEncode'] = true;
$renderChildrenClosure20 = function() {return NULL;};
$value21 = ($arguments19['value'] !== NULL ? $arguments19['value'] : $renderChildrenClosure20());
$arguments18['fieldKey'] = (!is_string($value21) ? $value21 : htmlspecialchars($value21, ($arguments19['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments19['encoding'] !== NULL ? $arguments19['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments19['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments22 = array();
$arguments22['value'] = $currentVariableContainer->getOrNull('elementKey');
$arguments22['keepQuotes'] = false;
$arguments22['encoding'] = NULL;
$arguments22['doubleEncode'] = true;
$renderChildrenClosure23 = function() {return NULL;};
$value24 = ($arguments22['value'] !== NULL ? $arguments22['value'] : $renderChildrenClosure23());
$arguments18['elementKey'] = (!is_string($value24) ? $value24 : htmlspecialchars($value24, ($arguments22['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments22['encoding'] !== NULL ? $arguments22['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments22['doubleEncode']));
$arguments18['evalValue'] = 'file';
$renderChildrenClosure25 = function() {return NULL;};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'MASK\Mask\ViewHelpers\LinkoptionViewHelper');
$viewHelper26->setArguments($arguments18);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper MASK\Mask\ViewHelpers\LinkoptionViewHelper
$arguments17['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper26->initializeArgumentsAndRender());
$arguments17['then'] = 'checked="checked"';
$arguments17['else'] = '';
$renderChildrenClosure27 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure27, $renderingContext);

$output0 .= ' class="tx_mask_fieldcontent_link" />
																			 ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments28 = array();
$arguments28['key'] = 'tx_mask.field.link.mail';
$arguments28['id'] = NULL;
$arguments28['default'] = NULL;
$arguments28['htmlEscape'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$renderChildrenClosure29 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output0 .= '<input name="tx_mask_tools_maskmask[dummy][--index--][mail]" type="checkbox" value="mail" ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments30 = array();
// Rendering Boolean node
// Rendering ViewHelper MASK\Mask\ViewHelpers\LinkoptionViewHelper
$arguments31 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments32 = array();
$arguments32['value'] = $currentVariableContainer->getOrNull('key');
$arguments32['keepQuotes'] = false;
$arguments32['encoding'] = NULL;
$arguments32['doubleEncode'] = true;
$renderChildrenClosure33 = function() {return NULL;};
$value34 = ($arguments32['value'] !== NULL ? $arguments32['value'] : $renderChildrenClosure33());
$arguments31['fieldKey'] = (!is_string($value34) ? $value34 : htmlspecialchars($value34, ($arguments32['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments32['encoding'] !== NULL ? $arguments32['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments32['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments35 = array();
$arguments35['value'] = $currentVariableContainer->getOrNull('elementKey');
$arguments35['keepQuotes'] = false;
$arguments35['encoding'] = NULL;
$arguments35['doubleEncode'] = true;
$renderChildrenClosure36 = function() {return NULL;};
$value37 = ($arguments35['value'] !== NULL ? $arguments35['value'] : $renderChildrenClosure36());
$arguments31['elementKey'] = (!is_string($value37) ? $value37 : htmlspecialchars($value37, ($arguments35['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments35['encoding'] !== NULL ? $arguments35['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments35['doubleEncode']));
$arguments31['evalValue'] = 'mail';
$renderChildrenClosure38 = function() {return NULL;};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'MASK\Mask\ViewHelpers\LinkoptionViewHelper');
$viewHelper39->setArguments($arguments31);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure38);
// End of ViewHelper MASK\Mask\ViewHelpers\LinkoptionViewHelper
$arguments30['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper39->initializeArgumentsAndRender());
$arguments30['then'] = 'checked="checked"';
$arguments30['else'] = '';
$renderChildrenClosure40 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, $renderChildrenClosure40, $renderingContext);

$output0 .= ' class="tx_mask_fieldcontent_link" />
																			 ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments41 = array();
$arguments41['key'] = 'tx_mask.field.link.page';
$arguments41['id'] = NULL;
$arguments41['default'] = NULL;
$arguments41['htmlEscape'] = NULL;
$arguments41['arguments'] = NULL;
$arguments41['extensionName'] = NULL;
$renderChildrenClosure42 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output0 .= '<input name="tx_mask_tools_maskmask[dummy][--index--][page]" type="checkbox" value="page" ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments43 = array();
// Rendering Boolean node
// Rendering ViewHelper MASK\Mask\ViewHelpers\LinkoptionViewHelper
$arguments44 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments45 = array();
$arguments45['value'] = $currentVariableContainer->getOrNull('key');
$arguments45['keepQuotes'] = false;
$arguments45['encoding'] = NULL;
$arguments45['doubleEncode'] = true;
$renderChildrenClosure46 = function() {return NULL;};
$value47 = ($arguments45['value'] !== NULL ? $arguments45['value'] : $renderChildrenClosure46());
$arguments44['fieldKey'] = (!is_string($value47) ? $value47 : htmlspecialchars($value47, ($arguments45['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments45['encoding'] !== NULL ? $arguments45['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments45['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments48 = array();
$arguments48['value'] = $currentVariableContainer->getOrNull('elementKey');
$arguments48['keepQuotes'] = false;
$arguments48['encoding'] = NULL;
$arguments48['doubleEncode'] = true;
$renderChildrenClosure49 = function() {return NULL;};
$value50 = ($arguments48['value'] !== NULL ? $arguments48['value'] : $renderChildrenClosure49());
$arguments44['elementKey'] = (!is_string($value50) ? $value50 : htmlspecialchars($value50, ($arguments48['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments48['encoding'] !== NULL ? $arguments48['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments48['doubleEncode']));
$arguments44['evalValue'] = 'page';
$renderChildrenClosure51 = function() {return NULL;};
$viewHelper52 = $self->getViewHelper('$viewHelper52', $renderingContext, 'MASK\Mask\ViewHelpers\LinkoptionViewHelper');
$viewHelper52->setArguments($arguments44);
$viewHelper52->setRenderingContext($renderingContext);
$viewHelper52->setRenderChildrenClosure($renderChildrenClosure51);
// End of ViewHelper MASK\Mask\ViewHelpers\LinkoptionViewHelper
$arguments43['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper52->initializeArgumentsAndRender());
$arguments43['then'] = 'checked="checked"';
$arguments43['else'] = '';
$renderChildrenClosure53 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure53, $renderingContext);

$output0 .= ' class="tx_mask_fieldcontent_link" />
																			 ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments54 = array();
$arguments54['key'] = 'tx_mask.field.link.folder';
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['htmlEscape'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$renderChildrenClosure55 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output0 .= '<input name="tx_mask_tools_maskmask[dummy][--index--][folder]" type="checkbox" value="folder" ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments56 = array();
// Rendering Boolean node
// Rendering ViewHelper MASK\Mask\ViewHelpers\LinkoptionViewHelper
$arguments57 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments58 = array();
$arguments58['value'] = $currentVariableContainer->getOrNull('key');
$arguments58['keepQuotes'] = false;
$arguments58['encoding'] = NULL;
$arguments58['doubleEncode'] = true;
$renderChildrenClosure59 = function() {return NULL;};
$value60 = ($arguments58['value'] !== NULL ? $arguments58['value'] : $renderChildrenClosure59());
$arguments57['fieldKey'] = (!is_string($value60) ? $value60 : htmlspecialchars($value60, ($arguments58['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments58['encoding'] !== NULL ? $arguments58['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments58['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments61 = array();
$arguments61['value'] = $currentVariableContainer->getOrNull('elementKey');
$arguments61['keepQuotes'] = false;
$arguments61['encoding'] = NULL;
$arguments61['doubleEncode'] = true;
$renderChildrenClosure62 = function() {return NULL;};
$value63 = ($arguments61['value'] !== NULL ? $arguments61['value'] : $renderChildrenClosure62());
$arguments57['elementKey'] = (!is_string($value63) ? $value63 : htmlspecialchars($value63, ($arguments61['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments61['encoding'] !== NULL ? $arguments61['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments61['doubleEncode']));
$arguments57['evalValue'] = 'folder';
$renderChildrenClosure64 = function() {return NULL;};
$viewHelper65 = $self->getViewHelper('$viewHelper65', $renderingContext, 'MASK\Mask\ViewHelpers\LinkoptionViewHelper');
$viewHelper65->setArguments($arguments57);
$viewHelper65->setRenderingContext($renderingContext);
$viewHelper65->setRenderChildrenClosure($renderChildrenClosure64);
// End of ViewHelper MASK\Mask\ViewHelpers\LinkoptionViewHelper
$arguments56['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper65->initializeArgumentsAndRender());
$arguments56['then'] = 'checked="checked"';
$arguments56['else'] = '';
$renderChildrenClosure66 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, $renderChildrenClosure66, $renderingContext);

$output0 .= ' class="tx_mask_fieldcontent_link" />
																			 ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments67 = array();
$arguments67['key'] = 'tx_mask.field.link.url';
$arguments67['id'] = NULL;
$arguments67['default'] = NULL;
$arguments67['htmlEscape'] = NULL;
$arguments67['arguments'] = NULL;
$arguments67['extensionName'] = NULL;
$renderChildrenClosure68 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output0 .= '<input name="tx_mask_tools_maskmask[dummy][--index--][url]" type="checkbox" value="url" ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments69 = array();
// Rendering Boolean node
// Rendering ViewHelper MASK\Mask\ViewHelpers\LinkoptionViewHelper
$arguments70 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments71 = array();
$arguments71['value'] = $currentVariableContainer->getOrNull('key');
$arguments71['keepQuotes'] = false;
$arguments71['encoding'] = NULL;
$arguments71['doubleEncode'] = true;
$renderChildrenClosure72 = function() {return NULL;};
$value73 = ($arguments71['value'] !== NULL ? $arguments71['value'] : $renderChildrenClosure72());
$arguments70['fieldKey'] = (!is_string($value73) ? $value73 : htmlspecialchars($value73, ($arguments71['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments71['encoding'] !== NULL ? $arguments71['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments71['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments74 = array();
$arguments74['value'] = $currentVariableContainer->getOrNull('elementKey');
$arguments74['keepQuotes'] = false;
$arguments74['encoding'] = NULL;
$arguments74['doubleEncode'] = true;
$renderChildrenClosure75 = function() {return NULL;};
$value76 = ($arguments74['value'] !== NULL ? $arguments74['value'] : $renderChildrenClosure75());
$arguments70['elementKey'] = (!is_string($value76) ? $value76 : htmlspecialchars($value76, ($arguments74['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments74['encoding'] !== NULL ? $arguments74['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments74['doubleEncode']));
$arguments70['evalValue'] = 'url';
$renderChildrenClosure77 = function() {return NULL;};
$viewHelper78 = $self->getViewHelper('$viewHelper78', $renderingContext, 'MASK\Mask\ViewHelpers\LinkoptionViewHelper');
$viewHelper78->setArguments($arguments70);
$viewHelper78->setRenderingContext($renderingContext);
$viewHelper78->setRenderChildrenClosure($renderChildrenClosure77);
// End of ViewHelper MASK\Mask\ViewHelpers\LinkoptionViewHelper
$arguments69['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper78->initializeArgumentsAndRender());
$arguments69['then'] = 'checked="checked"';
$arguments69['else'] = '';
$renderChildrenClosure79 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, $renderChildrenClosure79, $renderingContext);

$output0 .= ' class="tx_mask_fieldcontent_link" />
	</div>
</div>
';


return $output0;
}


}
#1462875032    23149     