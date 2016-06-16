<?php
class FluidCache_Standalone_template_file_PluginInfo_b2af756278d4cda7a73e8a0a8138334ed9a975b1 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<br />

<table>
    <tr>
        <td width="80">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_flexform_controllerAction';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '</td>
        <td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments3 = array();
$arguments3['key'] = $currentVariableContainer->getOrNull('caLabel');
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['htmlEscape'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$renderChildrenClosure4 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '</strong></td>
    </tr>


    <tr>
        <td width="80">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments5 = array();
$arguments5['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_general.folder';
$arguments5['id'] = NULL;
$arguments5['default'] = NULL;
$arguments5['htmlEscape'] = NULL;
$arguments5['arguments'] = NULL;
$arguments5['extensionName'] = NULL;
$renderChildrenClosure6 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '</td>
        <td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = $currentVariableContainer->getOrNull('storageFolder');
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = NULL;
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() {return NULL;};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output0 .= (!is_string($value9) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments7['encoding'] !== NULL ? $arguments7['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments7['doubleEncode']));

$output0 .= '</strong></td>
    </tr>

	<tr><td>&nbsp;</td><td></td></tr>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments10 = array();
// Rendering Boolean node
$arguments10['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('Album_showSingle'));
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output12 = '';

$output12 .= '
        <tr>
            <td>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments13 = array();
$arguments13['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_domain_model_album';
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$renderChildrenClosure14 = function() {return NULL;};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
            </td>
            <td>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments15 = array();
// Rendering Boolean node
$arguments15['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('album'));
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output17 = '';

$output17 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments18 = array();
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output20 = '';

$output20 .= '<span><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments21 = array();
$arguments21['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'name', $renderingContext);
$arguments21['keepQuotes'] = false;
$arguments21['encoding'] = NULL;
$arguments21['doubleEncode'] = true;
$renderChildrenClosure22 = function() {return NULL;};
$value23 = ($arguments21['value'] !== NULL ? $arguments21['value'] : $renderChildrenClosure22());

$output20 .= (!is_string($value23) ? $value23 : htmlspecialchars($value23, ($arguments21['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments21['encoding'] !== NULL ? $arguments21['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments21['doubleEncode']));

$output20 .= '</strong></span>';
return $output20;
};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments24 = array();
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output26 = '';

$output26 .= '<span class="typo3-red">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments27 = array();
$arguments27['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_flexform_notSelected';
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['htmlEscape'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$renderChildrenClosure28 = function() {return NULL;};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '</span>';
return $output26;
};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output17 .= '
                ';
return $output17;
};
$arguments15['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output29 = '';

$output29 .= '<span><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments30 = array();
$arguments30['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'name', $renderingContext);
$arguments30['keepQuotes'] = false;
$arguments30['encoding'] = NULL;
$arguments30['doubleEncode'] = true;
$renderChildrenClosure31 = function() {return NULL;};
$value32 = ($arguments30['value'] !== NULL ? $arguments30['value'] : $renderChildrenClosure31());

$output29 .= (!is_string($value32) ? $value32 : htmlspecialchars($value32, ($arguments30['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments30['encoding'] !== NULL ? $arguments30['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments30['doubleEncode']));

$output29 .= '</strong></span>';
return $output29;
};
$arguments15['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output33 = '';

$output33 .= '<span class="typo3-red">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments34 = array();
$arguments34['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_flexform_notSelected';
$arguments34['id'] = NULL;
$arguments34['default'] = NULL;
$arguments34['htmlEscape'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['extensionName'] = NULL;
$renderChildrenClosure35 = function() {return NULL;};

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '</span>';
return $output33;
};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output12 .= '
            </td>
        </tr>
    ';
return $output12;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments36 = array();
// Rendering Boolean node
$arguments36['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('ItemList_list'));
$arguments36['then'] = NULL;
$arguments36['else'] = NULL;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
		<tr>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments39 = array();
$arguments39['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_domain_model_gallery';
$arguments39['id'] = NULL;
$arguments39['default'] = NULL;
$arguments39['htmlEscape'] = NULL;
$arguments39['arguments'] = NULL;
$arguments39['extensionName'] = NULL;
$renderChildrenClosure40 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments41 = array();
// Rendering Boolean node
$arguments41['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('gallery'));
$arguments41['then'] = NULL;
$arguments41['else'] = NULL;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output43 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments44 = array();
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output46 = '';

$output46 .= '<span><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments47 = array();
$arguments47['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'name', $renderingContext);
$arguments47['keepQuotes'] = false;
$arguments47['encoding'] = NULL;
$arguments47['doubleEncode'] = true;
$renderChildrenClosure48 = function() {return NULL;};
$value49 = ($arguments47['value'] !== NULL ? $arguments47['value'] : $renderChildrenClosure48());

$output46 .= (!is_string($value49) ? $value49 : htmlspecialchars($value49, ($arguments47['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments47['encoding'] !== NULL ? $arguments47['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments47['doubleEncode']));

$output46 .= '</strong></span>';
return $output46;
};

$output43 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments50 = array();
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '-';
};

$output43 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);
return $output43;
};
$arguments41['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output52 = '';

$output52 .= '<span><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments53 = array();
$arguments53['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'name', $renderingContext);
$arguments53['keepQuotes'] = false;
$arguments53['encoding'] = NULL;
$arguments53['doubleEncode'] = true;
$renderChildrenClosure54 = function() {return NULL;};
$value55 = ($arguments53['value'] !== NULL ? $arguments53['value'] : $renderChildrenClosure54());

$output52 .= (!is_string($value55) ? $value55 : htmlspecialchars($value55, ($arguments53['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments53['encoding'] !== NULL ? $arguments53['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments53['doubleEncode']));

$output52 .= '</strong></span>';
return $output52;
};
$arguments41['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '-';
};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output38 .= '</td>
		</tr>
		<tr>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments56 = array();
$arguments56['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_domain_model_album';
$arguments56['id'] = NULL;
$arguments56['default'] = NULL;
$arguments56['htmlEscape'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['extensionName'] = NULL;
$renderChildrenClosure57 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output38 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments58 = array();
// Rendering Boolean node
$arguments58['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('album'));
$arguments58['then'] = NULL;
$arguments58['else'] = NULL;
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output60 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments61 = array();
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output63 = '';

$output63 .= '<span><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments64 = array();
$arguments64['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'name', $renderingContext);
$arguments64['keepQuotes'] = false;
$arguments64['encoding'] = NULL;
$arguments64['doubleEncode'] = true;
$renderChildrenClosure65 = function() {return NULL;};
$value66 = ($arguments64['value'] !== NULL ? $arguments64['value'] : $renderChildrenClosure65());

$output63 .= (!is_string($value66) ? $value66 : htmlspecialchars($value66, ($arguments64['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments64['encoding'] !== NULL ? $arguments64['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments64['doubleEncode']));

$output63 .= '</strong></span>';
return $output63;
};

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments67 = array();
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '-';
};

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);
return $output60;
};
$arguments58['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output69 = '';

$output69 .= '<span><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments70 = array();
$arguments70['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'name', $renderingContext);
$arguments70['keepQuotes'] = false;
$arguments70['encoding'] = NULL;
$arguments70['doubleEncode'] = true;
$renderChildrenClosure71 = function() {return NULL;};
$value72 = ($arguments70['value'] !== NULL ? $arguments70['value'] : $renderChildrenClosure71());

$output69 .= (!is_string($value72) ? $value72 : htmlspecialchars($value72, ($arguments70['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments70['encoding'] !== NULL ? $arguments70['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments70['doubleEncode']));

$output69 .= '</strong></span>';
return $output69;
};
$arguments58['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '-';
};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output38 .= '</td>
		</tr>
		<tr>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments73 = array();
$arguments73['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_domain_model_item';
$arguments73['id'] = NULL;
$arguments73['default'] = NULL;
$arguments73['htmlEscape'] = NULL;
$arguments73['arguments'] = NULL;
$arguments73['extensionName'] = NULL;
$renderChildrenClosure74 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output38 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments75 = array();
// Rendering Boolean node
$arguments75['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('item'));
$arguments75['then'] = NULL;
$arguments75['else'] = NULL;
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output77 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments78 = array();
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output80 = '';

$output80 .= '<span><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments81 = array();
$arguments81['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'title', $renderingContext);
$arguments81['keepQuotes'] = false;
$arguments81['encoding'] = NULL;
$arguments81['doubleEncode'] = true;
$renderChildrenClosure82 = function() {return NULL;};
$value83 = ($arguments81['value'] !== NULL ? $arguments81['value'] : $renderChildrenClosure82());

$output80 .= (!is_string($value83) ? $value83 : htmlspecialchars($value83, ($arguments81['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments81['encoding'] !== NULL ? $arguments81['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments81['doubleEncode']));

$output80 .= '</strong></span>';
return $output80;
};

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments84 = array();
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '-';
};

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);
return $output77;
};
$arguments75['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output86 = '';

$output86 .= '<span><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments87 = array();
$arguments87['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'title', $renderingContext);
$arguments87['keepQuotes'] = false;
$arguments87['encoding'] = NULL;
$arguments87['doubleEncode'] = true;
$renderChildrenClosure88 = function() {return NULL;};
$value89 = ($arguments87['value'] !== NULL ? $arguments87['value'] : $renderChildrenClosure88());

$output86 .= (!is_string($value89) ? $value89 : htmlspecialchars($value89, ($arguments87['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments87['encoding'] !== NULL ? $arguments87['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments87['doubleEncode']));

$output86 .= '</strong></span>';
return $output86;
};
$arguments75['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '-';
};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output38 .= '</td>
		</tr>
	';
return $output38;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output0 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments90 = array();
// Rendering Boolean node
$arguments90['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('ItemList_unCachedList'));
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output92 = '';

$output92 .= '
		<tr>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments93 = array();
$arguments93['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_domain_model_gallery';
$arguments93['id'] = NULL;
$arguments93['default'] = NULL;
$arguments93['htmlEscape'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['extensionName'] = NULL;
$renderChildrenClosure94 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments95 = array();
// Rendering Boolean node
$arguments95['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('gallery'));
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output97 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments98 = array();
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output100 = '';

$output100 .= '<span><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments101 = array();
$arguments101['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'name', $renderingContext);
$arguments101['keepQuotes'] = false;
$arguments101['encoding'] = NULL;
$arguments101['doubleEncode'] = true;
$renderChildrenClosure102 = function() {return NULL;};
$value103 = ($arguments101['value'] !== NULL ? $arguments101['value'] : $renderChildrenClosure102());

$output100 .= (!is_string($value103) ? $value103 : htmlspecialchars($value103, ($arguments101['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments101['encoding'] !== NULL ? $arguments101['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments101['doubleEncode']));

$output100 .= '</strong></span>';
return $output100;
};

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments104 = array();
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '-';
};

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);
return $output97;
};
$arguments95['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output106 = '';

$output106 .= '<span><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments107 = array();
$arguments107['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'name', $renderingContext);
$arguments107['keepQuotes'] = false;
$arguments107['encoding'] = NULL;
$arguments107['doubleEncode'] = true;
$renderChildrenClosure108 = function() {return NULL;};
$value109 = ($arguments107['value'] !== NULL ? $arguments107['value'] : $renderChildrenClosure108());

$output106 .= (!is_string($value109) ? $value109 : htmlspecialchars($value109, ($arguments107['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments107['encoding'] !== NULL ? $arguments107['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments107['doubleEncode']));

$output106 .= '</strong></span>';
return $output106;
};
$arguments95['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '-';
};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output92 .= '</td>
		</tr>
		<tr>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments110 = array();
$arguments110['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_domain_model_album';
$arguments110['id'] = NULL;
$arguments110['default'] = NULL;
$arguments110['htmlEscape'] = NULL;
$arguments110['arguments'] = NULL;
$arguments110['extensionName'] = NULL;
$renderChildrenClosure111 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output92 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments112 = array();
// Rendering Boolean node
$arguments112['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('album'));
$arguments112['then'] = NULL;
$arguments112['else'] = NULL;
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output114 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments115 = array();
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output117 = '';

$output117 .= '<span><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments118 = array();
$arguments118['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'name', $renderingContext);
$arguments118['keepQuotes'] = false;
$arguments118['encoding'] = NULL;
$arguments118['doubleEncode'] = true;
$renderChildrenClosure119 = function() {return NULL;};
$value120 = ($arguments118['value'] !== NULL ? $arguments118['value'] : $renderChildrenClosure119());

$output117 .= (!is_string($value120) ? $value120 : htmlspecialchars($value120, ($arguments118['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments118['encoding'] !== NULL ? $arguments118['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments118['doubleEncode']));

$output117 .= '</strong></span>';
return $output117;
};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments121 = array();
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '-';
};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);
return $output114;
};
$arguments112['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output123 = '';

$output123 .= '<span><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments124 = array();
$arguments124['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'name', $renderingContext);
$arguments124['keepQuotes'] = false;
$arguments124['encoding'] = NULL;
$arguments124['doubleEncode'] = true;
$renderChildrenClosure125 = function() {return NULL;};
$value126 = ($arguments124['value'] !== NULL ? $arguments124['value'] : $renderChildrenClosure125());

$output123 .= (!is_string($value126) ? $value126 : htmlspecialchars($value126, ($arguments124['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments124['encoding'] !== NULL ? $arguments124['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments124['doubleEncode']));

$output123 .= '</strong></span>';
return $output123;
};
$arguments112['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '-';
};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output92 .= '</td>
		</tr>
		<tr>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments127 = array();
$arguments127['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_domain_model_item';
$arguments127['id'] = NULL;
$arguments127['default'] = NULL;
$arguments127['htmlEscape'] = NULL;
$arguments127['arguments'] = NULL;
$arguments127['extensionName'] = NULL;
$renderChildrenClosure128 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output92 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments129 = array();
// Rendering Boolean node
$arguments129['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('item'));
$arguments129['then'] = NULL;
$arguments129['else'] = NULL;
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output131 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments132 = array();
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output134 = '';

$output134 .= '<span><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments135 = array();
$arguments135['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'title', $renderingContext);
$arguments135['keepQuotes'] = false;
$arguments135['encoding'] = NULL;
$arguments135['doubleEncode'] = true;
$renderChildrenClosure136 = function() {return NULL;};
$value137 = ($arguments135['value'] !== NULL ? $arguments135['value'] : $renderChildrenClosure136());

$output134 .= (!is_string($value137) ? $value137 : htmlspecialchars($value137, ($arguments135['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments135['encoding'] !== NULL ? $arguments135['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments135['doubleEncode']));

$output134 .= '</strong></span>';
return $output134;
};

$output131 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments138 = array();
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '-';
};

$output131 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);
return $output131;
};
$arguments129['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output140 = '';

$output140 .= '<span><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments141 = array();
$arguments141['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'title', $renderingContext);
$arguments141['keepQuotes'] = false;
$arguments141['encoding'] = NULL;
$arguments141['doubleEncode'] = true;
$renderChildrenClosure142 = function() {return NULL;};
$value143 = ($arguments141['value'] !== NULL ? $arguments141['value'] : $renderChildrenClosure142());

$output140 .= (!is_string($value143) ? $value143 : htmlspecialchars($value143, ($arguments141['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments141['encoding'] !== NULL ? $arguments141['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments141['doubleEncode']));

$output140 .= '</strong></span>';
return $output140;
};
$arguments129['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '-';
};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output92 .= '</td>
		</tr>
	';
return $output92;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output0 .= '


	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments144 = array();
// Rendering Boolean node
$arguments144['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('Gallery_showSingle'));
$arguments144['then'] = NULL;
$arguments144['else'] = NULL;
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output146 = '';

$output146 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments147 = array();
// Rendering Boolean node
$arguments147['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('gallery'));
$arguments147['then'] = NULL;
$arguments147['else'] = NULL;
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output149 = '';

$output149 .= '
        <tr>
            <td>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments150 = array();
$arguments150['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_domain_model_gallery';
$arguments150['id'] = NULL;
$arguments150['default'] = NULL;
$arguments150['htmlEscape'] = NULL;
$arguments150['arguments'] = NULL;
$arguments150['extensionName'] = NULL;
$renderChildrenClosure151 = function() {return NULL;};

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
            </td>
            <td>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments152 = array();
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output154 = '';

$output154 .= '<span><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments155 = array();
$arguments155['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'name', $renderingContext);
$arguments155['keepQuotes'] = false;
$arguments155['encoding'] = NULL;
$arguments155['doubleEncode'] = true;
$renderChildrenClosure156 = function() {return NULL;};
$value157 = ($arguments155['value'] !== NULL ? $arguments155['value'] : $renderChildrenClosure156());

$output154 .= (!is_string($value157) ? $value157 : htmlspecialchars($value157, ($arguments155['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments155['encoding'] !== NULL ? $arguments155['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments155['doubleEncode']));

$output154 .= '</strong></span>';
return $output154;
};

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output149 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments158 = array();
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output160 = '';

$output160 .= '<span class="typo3-red">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments161 = array();
$arguments161['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_flexform_notSelected';
$arguments161['id'] = NULL;
$arguments161['default'] = NULL;
$arguments161['htmlEscape'] = NULL;
$arguments161['arguments'] = NULL;
$arguments161['extensionName'] = NULL;
$renderChildrenClosure162 = function() {return NULL;};

$output160 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output160 .= '</span>';
return $output160;
};

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output149 .= '
            </td>
        </tr>
		';
return $output149;
};
$arguments147['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output163 = '';

$output163 .= '<span><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments164 = array();
$arguments164['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'name', $renderingContext);
$arguments164['keepQuotes'] = false;
$arguments164['encoding'] = NULL;
$arguments164['doubleEncode'] = true;
$renderChildrenClosure165 = function() {return NULL;};
$value166 = ($arguments164['value'] !== NULL ? $arguments164['value'] : $renderChildrenClosure165());

$output163 .= (!is_string($value166) ? $value166 : htmlspecialchars($value166, ($arguments164['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments164['encoding'] !== NULL ? $arguments164['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments164['doubleEncode']));

$output163 .= '</strong></span>';
return $output163;
};
$arguments147['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output167 = '';

$output167 .= '<span class="typo3-red">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments168 = array();
$arguments168['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_flexform_notSelected';
$arguments168['id'] = NULL;
$arguments168['default'] = NULL;
$arguments168['htmlEscape'] = NULL;
$arguments168['arguments'] = NULL;
$arguments168['extensionName'] = NULL;
$renderChildrenClosure169 = function() {return NULL;};

$output167 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output167 .= '</span>';
return $output167;
};

$output146 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output146 .= '
    ';
return $output146;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output0 .= '


    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments170 = array();
// Rendering Boolean node
$arguments170['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('Item_showSingle'));
$arguments170['then'] = NULL;
$arguments170['else'] = NULL;
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output172 = '';

$output172 .= '
        <tr>
            <td>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments173 = array();
$arguments173['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_domain_model_item';
$arguments173['id'] = NULL;
$arguments173['default'] = NULL;
$arguments173['htmlEscape'] = NULL;
$arguments173['arguments'] = NULL;
$arguments173['extensionName'] = NULL;
$renderChildrenClosure174 = function() {return NULL;};

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output172 .= '
            </td>
            <td>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments175 = array();
// Rendering Boolean node
$arguments175['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('item'));
$arguments175['then'] = NULL;
$arguments175['else'] = NULL;
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output177 = '';

$output177 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments178 = array();
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output180 = '';

$output180 .= '<span><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments181 = array();
$arguments181['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'title', $renderingContext);
$arguments181['keepQuotes'] = false;
$arguments181['encoding'] = NULL;
$arguments181['doubleEncode'] = true;
$renderChildrenClosure182 = function() {return NULL;};
$value183 = ($arguments181['value'] !== NULL ? $arguments181['value'] : $renderChildrenClosure182());

$output180 .= (!is_string($value183) ? $value183 : htmlspecialchars($value183, ($arguments181['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments181['encoding'] !== NULL ? $arguments181['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments181['doubleEncode']));

$output180 .= '</strong></span>';
return $output180;
};

$output177 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);

$output177 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments184 = array();
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output186 = '';

$output186 .= '<span class="typo3-red">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments187 = array();
$arguments187['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_flexform_notSelected';
$arguments187['id'] = NULL;
$arguments187['default'] = NULL;
$arguments187['htmlEscape'] = NULL;
$arguments187['arguments'] = NULL;
$arguments187['extensionName'] = NULL;
$renderChildrenClosure188 = function() {return NULL;};

$output186 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output186 .= '</span>';
return $output186;
};

$output177 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output177 .= '
                ';
return $output177;
};
$arguments175['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output189 = '';

$output189 .= '<span><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments190 = array();
$arguments190['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'title', $renderingContext);
$arguments190['keepQuotes'] = false;
$arguments190['encoding'] = NULL;
$arguments190['doubleEncode'] = true;
$renderChildrenClosure191 = function() {return NULL;};
$value192 = ($arguments190['value'] !== NULL ? $arguments190['value'] : $renderChildrenClosure191());

$output189 .= (!is_string($value192) ? $value192 : htmlspecialchars($value192, ($arguments190['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments190['encoding'] !== NULL ? $arguments190['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments190['doubleEncode']));

$output189 .= '</strong></span>';
return $output189;
};
$arguments175['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output193 = '';

$output193 .= '<span class="typo3-red">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments194 = array();
$arguments194['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_flexform_notSelected';
$arguments194['id'] = NULL;
$arguments194['default'] = NULL;
$arguments194['htmlEscape'] = NULL;
$arguments194['arguments'] = NULL;
$arguments194['extensionName'] = NULL;
$renderChildrenClosure195 = function() {return NULL;};

$output193 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output193 .= '</span>';
return $output193;
};

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output172 .= '
            </td>
        </tr>
    ';
return $output172;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output0 .= '

	<tr><td>&nbsp;</td><td></td></tr>

    <tr>
        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments196 = array();
$arguments196['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_flexform_theme';
$arguments196['id'] = NULL;
$arguments196['default'] = NULL;
$arguments196['htmlEscape'] = NULL;
$arguments196['arguments'] = NULL;
$arguments196['extensionName'] = NULL;
$renderChildrenClosure197 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output0 .= '</td>
        <td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments198 = array();
$arguments198['value'] = $currentVariableContainer->getOrNull('theme');
$arguments198['keepQuotes'] = false;
$arguments198['encoding'] = NULL;
$arguments198['doubleEncode'] = true;
$renderChildrenClosure199 = function() {return NULL;};
$value200 = ($arguments198['value'] !== NULL ? $arguments198['value'] : $renderChildrenClosure199());

$output0 .= (!is_string($value200) ? $value200 : htmlspecialchars($value200, ($arguments198['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments198['encoding'] !== NULL ? $arguments198['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments198['doubleEncode']));

$output0 .= '</strong></td>
    </tr>


    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments201 = array();
// Rendering Boolean node
$arguments201['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('context'));
$arguments201['then'] = NULL;
$arguments201['else'] = NULL;
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output203 = '';

$output203 .= '
        <tr>
            <td>Context</td>
            <td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments204 = array();
$arguments204['value'] = $currentVariableContainer->getOrNull('context');
$arguments204['keepQuotes'] = false;
$arguments204['encoding'] = NULL;
$arguments204['doubleEncode'] = true;
$renderChildrenClosure205 = function() {return NULL;};
$value206 = ($arguments204['value'] !== NULL ? $arguments204['value'] : $renderChildrenClosure205());

$output203 .= (!is_string($value206) ? $value206 : htmlspecialchars($value206, ($arguments204['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments204['encoding'] !== NULL ? $arguments204['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments204['doubleEncode']));

$output203 .= '</strong></td>
        </tr>
    ';
return $output203;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output0 .= '
</table>';


return $output0;
}


}
#1466114354    53402     