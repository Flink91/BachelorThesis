<?php
class FluidCache_Dce_DceModule_partial_Module_DceListItem_7dfe2b07bc643445ce220ad32ffd9cccf831bf9f extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments1 = array();
// Rendering Array
$array2 = array();
$array2['lll'] = 'LLL:EXT:dce/Resources/Private/Language/locallang_mod.xml:';
$arguments1['map'] = $array2;
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output4 = '';

$output4 .= '
    <tr class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments5 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments6 = array();
$arguments6['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments6['keepQuotes'] = false;
$arguments6['encoding'] = NULL;
$arguments6['doubleEncode'] = true;
$renderChildrenClosure7 = function() {return NULL;};
$value8 = ($arguments6['value'] !== NULL ? $arguments6['value'] : $renderChildrenClosure7());
$arguments5['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value8) ? $value8 : htmlspecialchars($value8, ($arguments6['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments6['encoding'] !== NULL ? $arguments6['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments6['doubleEncode'])));
$arguments5['then'] = 'db';
$arguments5['else'] = 'file';
$renderChildrenClosure9 = function() {return NULL;};

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure9, $renderingContext);

$output4 .= '">
        <td class="listEntry">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments10 = array();
// Rendering Boolean node
$arguments10['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext));
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output12 = '';

$output12 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments13 = array();
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output15 = '';

$output15 .= '<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments16 = array();
$arguments16['partial'] = 'Module/OpenDce';
// Rendering Array
$array17 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments18 = array();
$arguments18['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments18['keepQuotes'] = false;
$arguments18['encoding'] = NULL;
$arguments18['doubleEncode'] = true;
$renderChildrenClosure19 = function() {return NULL;};
$value20 = ($arguments18['value'] !== NULL ? $arguments18['value'] : $renderChildrenClosure19());
$array17['uid'] = (!is_string($value20) ? $value20 : htmlspecialchars($value20, ($arguments18['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments18['encoding'] !== NULL ? $arguments18['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments18['doubleEncode']));
$arguments16['arguments'] = $array17;
$arguments16['section'] = NULL;
$arguments16['optional'] = false;
$renderChildrenClosure21 = function() {return NULL;};

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure21, $renderingContext);

$output15 .= '" class="overlayLink"></a>';
return $output15;
};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments22 = array();
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output24 = '';

$output24 .= '<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments25 = array();
$arguments25['partial'] = 'Module/OpenStaticDce';
// Rendering Array
$array26 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments27 = array();
$arguments27['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'identifier', $renderingContext);
$arguments27['keepQuotes'] = false;
$arguments27['encoding'] = NULL;
$arguments27['doubleEncode'] = true;
$renderChildrenClosure28 = function() {return NULL;};
$value29 = ($arguments27['value'] !== NULL ? $arguments27['value'] : $renderChildrenClosure28());
$array26['identifier'] = (!is_string($value29) ? $value29 : htmlspecialchars($value29, ($arguments27['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments27['encoding'] !== NULL ? $arguments27['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments27['doubleEncode']));
$arguments25['arguments'] = $array26;
$arguments25['section'] = NULL;
$arguments25['optional'] = false;
$renderChildrenClosure30 = function() {return NULL;};

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments25, $renderChildrenClosure30, $renderingContext);

$output24 .= '" class="overlayLink"></a>';
return $output24;
};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output12 .= '
            ';
return $output12;
};
$arguments10['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments32 = array();
$arguments32['partial'] = 'Module/OpenDce';
// Rendering Array
$array33 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments34 = array();
$arguments34['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments34['keepQuotes'] = false;
$arguments34['encoding'] = NULL;
$arguments34['doubleEncode'] = true;
$renderChildrenClosure35 = function() {return NULL;};
$value36 = ($arguments34['value'] !== NULL ? $arguments34['value'] : $renderChildrenClosure35());
$array33['uid'] = (!is_string($value36) ? $value36 : htmlspecialchars($value36, ($arguments34['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments34['encoding'] !== NULL ? $arguments34['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments34['doubleEncode']));
$arguments32['arguments'] = $array33;
$arguments32['section'] = NULL;
$arguments32['optional'] = false;
$renderChildrenClosure37 = function() {return NULL;};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments32, $renderChildrenClosure37, $renderingContext);

$output31 .= '" class="overlayLink"></a>';
return $output31;
};
$arguments10['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments39 = array();
$arguments39['partial'] = 'Module/OpenStaticDce';
// Rendering Array
$array40 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments41 = array();
$arguments41['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'identifier', $renderingContext);
$arguments41['keepQuotes'] = false;
$arguments41['encoding'] = NULL;
$arguments41['doubleEncode'] = true;
$renderChildrenClosure42 = function() {return NULL;};
$value43 = ($arguments41['value'] !== NULL ? $arguments41['value'] : $renderChildrenClosure42());
$array40['identifier'] = (!is_string($value43) ? $value43 : htmlspecialchars($value43, ($arguments41['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments41['encoding'] !== NULL ? $arguments41['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments41['doubleEncode']));
$arguments39['arguments'] = $array40;
$arguments39['section'] = NULL;
$arguments39['optional'] = false;
$renderChildrenClosure44 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments39, $renderChildrenClosure44, $renderingContext);

$output38 .= '" class="overlayLink"></a>';
return $output38;
};

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output4 .= '

            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments45 = array();
// Rendering Boolean node
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper
$arguments46 = array();
// Rendering Boolean node
$arguments46['returnInt'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$renderChildrenClosure47 = function() {return NULL;};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper');
$viewHelper48->setArguments($arguments46);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper
$arguments45['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', $viewHelper48->initializeArgumentsAndRender(), 7006000);
$arguments45['then'] = NULL;
$arguments45['else'] = NULL;
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output50 = '';

$output50 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments51 = array();
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments53 = array();
$arguments53['partial'] = 'Module/ListItem/TypeIcon62';
// Rendering Array
$array54 = array();
$array54['dce'] = $currentVariableContainer->getOrNull('dce');
$arguments53['arguments'] = $array54;
$arguments53['section'] = NULL;
$arguments53['optional'] = false;
$renderChildrenClosure55 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments53, $renderChildrenClosure55, $renderingContext);
};

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments56 = array();
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments58 = array();
$arguments58['partial'] = 'Module/ListItem/TypeIcon';
// Rendering Array
$array59 = array();
$array59['dce'] = $currentVariableContainer->getOrNull('dce');
$arguments58['arguments'] = $array59;
$arguments58['section'] = NULL;
$arguments58['optional'] = false;
$renderChildrenClosure60 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments58, $renderChildrenClosure60, $renderingContext);
};

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output50 .= '
            ';
return $output50;
};
$arguments45['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments61 = array();
$arguments61['partial'] = 'Module/ListItem/TypeIcon62';
// Rendering Array
$array62 = array();
$array62['dce'] = $currentVariableContainer->getOrNull('dce');
$arguments61['arguments'] = $array62;
$arguments61['section'] = NULL;
$arguments61['optional'] = false;
$renderChildrenClosure63 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments61, $renderChildrenClosure63, $renderingContext);
};
$arguments45['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments64 = array();
$arguments64['partial'] = 'Module/ListItem/TypeIcon';
// Rendering Array
$array65 = array();
$array65['dce'] = $currentVariableContainer->getOrNull('dce');
$arguments64['arguments'] = $array65;
$arguments64['section'] = NULL;
$arguments64['optional'] = false;
$renderChildrenClosure66 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments64, $renderChildrenClosure66, $renderingContext);
};

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments45, $renderChildrenClosure49, $renderingContext);

$output4 .= '

            <div class="dceLabel">
                <div>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments67 = array();
// Rendering Boolean node
$arguments67['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'title', $renderingContext));
$arguments67['then'] = NULL;
$arguments67['else'] = NULL;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output69 = '';

$output69 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments70 = array();
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output72 = '';

$output72 .= '
                            <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments73 = array();
$arguments73['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'title', $renderingContext);
$arguments73['default'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'title', $renderingContext);
$arguments73['id'] = NULL;
$arguments73['htmlEscape'] = NULL;
$arguments73['arguments'] = NULL;
$arguments73['extensionName'] = NULL;
$renderChildrenClosure74 = function() {return NULL;};

$output72 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output72 .= '</span>
                        ';
return $output72;
};

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output69 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments75 = array();
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output77 = '';

$output77 .= '
                            <span><em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments78 = array();
$arguments78['key'] = 'noTitle';
$arguments78['id'] = NULL;
$arguments78['default'] = NULL;
$arguments78['htmlEscape'] = NULL;
$arguments78['arguments'] = NULL;
$arguments78['extensionName'] = NULL;
$renderChildrenClosure79 = function() {return NULL;};

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '</em></span>
                        ';
return $output77;
};

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output69 .= '
                    ';
return $output69;
};
$arguments67['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output80 = '';

$output80 .= '
                            <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments81 = array();
$arguments81['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'title', $renderingContext);
$arguments81['default'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'title', $renderingContext);
$arguments81['id'] = NULL;
$arguments81['htmlEscape'] = NULL;
$arguments81['arguments'] = NULL;
$arguments81['extensionName'] = NULL;
$renderChildrenClosure82 = function() {return NULL;};

$output80 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output80 .= '</span>
                        ';
return $output80;
};
$arguments67['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output83 = '';

$output83 .= '
                            <span><em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments84 = array();
$arguments84['key'] = 'noTitle';
$arguments84['id'] = NULL;
$arguments84['default'] = NULL;
$arguments84['htmlEscape'] = NULL;
$arguments84['arguments'] = NULL;
$arguments84['extensionName'] = NULL;
$renderChildrenClosure85 = function() {return NULL;};

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output83 .= '</em></span>
                        ';
return $output83;
};

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output4 .= '
                </div>
                <div class="small text-muted">
                    <em>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments86 = array();
// Rendering Boolean node
$arguments86['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizardDescription', $renderingContext));
$arguments86['then'] = NULL;
$arguments86['else'] = NULL;
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output88 = '';

$output88 .= '
                            <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments89 = array();
$arguments89['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizardDescription', $renderingContext);
$arguments89['keepQuotes'] = false;
$arguments89['encoding'] = NULL;
$arguments89['doubleEncode'] = true;
$renderChildrenClosure90 = function() {return NULL;};
$value91 = ($arguments89['value'] !== NULL ? $arguments89['value'] : $renderChildrenClosure90());

$output88 .= (!is_string($value91) ? $value91 : htmlspecialchars($value91, ($arguments89['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments89['encoding'] !== NULL ? $arguments89['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments89['doubleEncode']));

$output88 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments92 = array();
$arguments92['maxCharacters'] = '80';
$arguments92['append'] = '...';
$arguments92['respectWordBoundaries'] = true;
$arguments92['respectHtml'] = true;
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output94 = '';

$output94 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments95 = array();
$arguments95['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizardDescription', $renderingContext);
$arguments95['default'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizardDescription', $renderingContext);
$arguments95['id'] = NULL;
$arguments95['htmlEscape'] = NULL;
$arguments95['arguments'] = NULL;
$arguments95['extensionName'] = NULL;
$renderChildrenClosure96 = function() {return NULL;};

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
                                ';
return $output94;
};

$output88 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output88 .= '
                            </span>
                        ';
return $output88;
};

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output4 .= '
                    </em>
                </div>
            </div>
        </td>

        <td class="status">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments97 = array();
// Rendering Boolean node
$arguments97['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'hidden', $renderingContext), 1);
$arguments97['then'] = NULL;
$arguments97['else'] = NULL;
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output99 = '';

$output99 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments100 = array();
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output102 = '';

$output102 .= '
                    <span class="label label-danger text-uppercase">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments103 = array();
$output104 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments105 = array();
$arguments105['value'] = $currentVariableContainer->getOrNull('lll');
$arguments105['keepQuotes'] = false;
$arguments105['encoding'] = NULL;
$arguments105['doubleEncode'] = true;
$renderChildrenClosure106 = function() {return NULL;};
$value107 = ($arguments105['value'] !== NULL ? $arguments105['value'] : $renderChildrenClosure106());

$output104 .= (!is_string($value107) ? $value107 : htmlspecialchars($value107, ($arguments105['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments105['encoding'] !== NULL ? $arguments105['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments105['doubleEncode']));

$output104 .= 'disabled';
$arguments103['key'] = $output104;
$arguments103['id'] = NULL;
$arguments103['default'] = NULL;
$arguments103['htmlEscape'] = NULL;
$arguments103['arguments'] = NULL;
$arguments103['extensionName'] = NULL;
$renderChildrenClosure108 = function() {return NULL;};

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments103, $renderChildrenClosure108, $renderingContext);

$output102 .= '</span>
                ';
return $output102;
};

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments109 = array();
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output111 = '';

$output111 .= '
                    <span class="label label-success text-uppercase">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments112 = array();
$output113 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments114 = array();
$arguments114['value'] = $currentVariableContainer->getOrNull('lll');
$arguments114['keepQuotes'] = false;
$arguments114['encoding'] = NULL;
$arguments114['doubleEncode'] = true;
$renderChildrenClosure115 = function() {return NULL;};
$value116 = ($arguments114['value'] !== NULL ? $arguments114['value'] : $renderChildrenClosure115());

$output113 .= (!is_string($value116) ? $value116 : htmlspecialchars($value116, ($arguments114['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments114['encoding'] !== NULL ? $arguments114['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments114['doubleEncode']));

$output113 .= 'enabled';
$arguments112['key'] = $output113;
$arguments112['id'] = NULL;
$arguments112['default'] = NULL;
$arguments112['htmlEscape'] = NULL;
$arguments112['arguments'] = NULL;
$arguments112['extensionName'] = NULL;
$renderChildrenClosure117 = function() {return NULL;};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments112, $renderChildrenClosure117, $renderingContext);

$output111 .= '</span>
                ';
return $output111;
};

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output99 .= '
            ';
return $output99;
};
$arguments97['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output118 = '';

$output118 .= '
                    <span class="label label-danger text-uppercase">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments119 = array();
$output120 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments121 = array();
$arguments121['value'] = $currentVariableContainer->getOrNull('lll');
$arguments121['keepQuotes'] = false;
$arguments121['encoding'] = NULL;
$arguments121['doubleEncode'] = true;
$renderChildrenClosure122 = function() {return NULL;};
$value123 = ($arguments121['value'] !== NULL ? $arguments121['value'] : $renderChildrenClosure122());

$output120 .= (!is_string($value123) ? $value123 : htmlspecialchars($value123, ($arguments121['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments121['encoding'] !== NULL ? $arguments121['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments121['doubleEncode']));

$output120 .= 'disabled';
$arguments119['key'] = $output120;
$arguments119['id'] = NULL;
$arguments119['default'] = NULL;
$arguments119['htmlEscape'] = NULL;
$arguments119['arguments'] = NULL;
$arguments119['extensionName'] = NULL;
$renderChildrenClosure124 = function() {return NULL;};

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments119, $renderChildrenClosure124, $renderingContext);

$output118 .= '</span>
                ';
return $output118;
};
$arguments97['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output125 = '';

$output125 .= '
                    <span class="label label-success text-uppercase">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments126 = array();
$output127 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments128 = array();
$arguments128['value'] = $currentVariableContainer->getOrNull('lll');
$arguments128['keepQuotes'] = false;
$arguments128['encoding'] = NULL;
$arguments128['doubleEncode'] = true;
$renderChildrenClosure129 = function() {return NULL;};
$value130 = ($arguments128['value'] !== NULL ? $arguments128['value'] : $renderChildrenClosure129());

$output127 .= (!is_string($value130) ? $value130 : htmlspecialchars($value130, ($arguments128['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments128['encoding'] !== NULL ? $arguments128['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments128['doubleEncode']));

$output127 .= 'enabled';
$arguments126['key'] = $output127;
$arguments126['id'] = NULL;
$arguments126['default'] = NULL;
$arguments126['htmlEscape'] = NULL;
$arguments126['arguments'] = NULL;
$arguments126['extensionName'] = NULL;
$renderChildrenClosure131 = function() {return NULL;};

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments126, $renderChildrenClosure131, $renderingContext);

$output125 .= '</span>
                ';
return $output125;
};

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output4 .= '
        </td>
        <td class="uid">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments132 = array();
$arguments132['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments132['keepQuotes'] = false;
$arguments132['encoding'] = NULL;
$arguments132['doubleEncode'] = true;
$renderChildrenClosure133 = function() {return NULL;};
$value134 = ($arguments132['value'] !== NULL ? $arguments132['value'] : $renderChildrenClosure133());

$output4 .= (!is_string($value134) ? $value134 : htmlspecialchars($value134, ($arguments132['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments132['encoding'] !== NULL ? $arguments132['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments132['doubleEncode']));

$output4 .= '
        </td>
        <td class="usage">
            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments135 = array();
$arguments135['partial'] = 'Module/DceInfoLink';
// Rendering Array
$array136 = array();
$array136['dce'] = $currentVariableContainer->getOrNull('dce');
$arguments135['arguments'] = $array136;
$arguments135['section'] = NULL;
$arguments135['optional'] = false;
$renderChildrenClosure137 = function() {return NULL;};

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments135, $renderChildrenClosure137, $renderingContext);

$output4 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments138 = array();
$output139 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments140 = array();
$arguments140['value'] = $currentVariableContainer->getOrNull('lll');
$arguments140['keepQuotes'] = false;
$arguments140['encoding'] = NULL;
$arguments140['doubleEncode'] = true;
$renderChildrenClosure141 = function() {return NULL;};
$value142 = ($arguments140['value'] !== NULL ? $arguments140['value'] : $renderChildrenClosure141());

$output139 .= (!is_string($value142) ? $value142 : htmlspecialchars($value142, ($arguments140['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments140['encoding'] !== NULL ? $arguments140['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments140['doubleEncode']));

$output139 .= 'relatedContentElements';
$arguments138['key'] = $output139;
// Rendering Array
$array143 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments144 = array();
$arguments144['subject'] = NULL;
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'relatedContentElementRows', $renderingContext);
};
$array143['0'] = TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);
$arguments138['arguments'] = $array143;
$arguments138['id'] = NULL;
$arguments138['default'] = NULL;
$arguments138['htmlEscape'] = NULL;
$arguments138['extensionName'] = NULL;
$renderChildrenClosure146 = function() {return NULL;};

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments138, $renderChildrenClosure146, $renderingContext);

$output4 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments147 = array();
$arguments147['icon'] = 'mimetypes-x-content-text-picture';
$arguments147['uri'] = '';
$arguments147['title'] = '';
$arguments147['additionalAttributes'] = array (
);
$renderChildrenClosure148 = function() {return NULL;};

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output4 .= '
                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments149 = array();
$arguments149['subject'] = NULL;
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'relatedContentElementRows', $renderingContext);
};

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output4 .= '</span>
            </a>
        </td>
        <td class="dceStats">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments151 = array();
// Rendering Boolean node
$arguments151['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'enableContainer', $renderingContext));
$arguments151['then'] = NULL;
$arguments151['else'] = NULL;
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output153 = '';

$output153 .= '
                <span class="label label-default label-darker">
                    <span class="text-uppercase">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments154 = array();
$output155 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments156 = array();
$arguments156['value'] = $currentVariableContainer->getOrNull('lll');
$arguments156['keepQuotes'] = false;
$arguments156['encoding'] = NULL;
$arguments156['doubleEncode'] = true;
$renderChildrenClosure157 = function() {return NULL;};
$value158 = ($arguments156['value'] !== NULL ? $arguments156['value'] : $renderChildrenClosure157());

$output155 .= (!is_string($value158) ? $value158 : htmlspecialchars($value158, ($arguments156['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments156['encoding'] !== NULL ? $arguments156['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments156['doubleEncode']));

$output155 .= 'dceContainerEnabled';
$arguments154['key'] = $output155;
$arguments154['id'] = NULL;
$arguments154['default'] = NULL;
$arguments154['htmlEscape'] = NULL;
$arguments154['arguments'] = NULL;
$arguments154['extensionName'] = NULL;
$renderChildrenClosure159 = function() {return NULL;};

$output153 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments154, $renderChildrenClosure159, $renderingContext);

$output153 .= '</span>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments160 = array();
// Rendering Boolean node
$arguments160['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'containerItemLimit', $renderingContext));
$arguments160['then'] = NULL;
$arguments160['else'] = NULL;
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output162 = '';

$output162 .= '(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments163 = array();
$output164 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments165 = array();
$arguments165['value'] = $currentVariableContainer->getOrNull('lll');
$arguments165['keepQuotes'] = false;
$arguments165['encoding'] = NULL;
$arguments165['doubleEncode'] = true;
$renderChildrenClosure166 = function() {return NULL;};
$value167 = ($arguments165['value'] !== NULL ? $arguments165['value'] : $renderChildrenClosure166());

$output164 .= (!is_string($value167) ? $value167 : htmlspecialchars($value167, ($arguments165['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments165['encoding'] !== NULL ? $arguments165['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments165['doubleEncode']));

$output164 .= 'limitedToItems';
$arguments163['key'] = $output164;
// Rendering Array
$array168 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments169 = array();
$arguments169['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'containerItemLimit', $renderingContext);
$arguments169['keepQuotes'] = false;
$arguments169['encoding'] = NULL;
$arguments169['doubleEncode'] = true;
$renderChildrenClosure170 = function() {return NULL;};
$value171 = ($arguments169['value'] !== NULL ? $arguments169['value'] : $renderChildrenClosure170());
$array168['0'] = (!is_string($value171) ? $value171 : htmlspecialchars($value171, ($arguments169['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments169['encoding'] !== NULL ? $arguments169['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments169['doubleEncode']));
$arguments163['arguments'] = $array168;
$arguments163['id'] = NULL;
$arguments163['default'] = NULL;
$arguments163['htmlEscape'] = NULL;
$arguments163['extensionName'] = NULL;
$renderChildrenClosure172 = function() {return NULL;};

$output162 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments163, $renderChildrenClosure172, $renderingContext);

$output162 .= ')';
return $output162;
};

$output153 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output153 .= '
                </span>
            ';
return $output153;
};

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output4 .= '
        </td>
        <td class="fieldStats">
            <span class="label label-default label-darker">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments173 = array();
$arguments173['subject'] = NULL;
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'fields', $renderingContext);
};

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output4 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments175 = array();
$output176 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments177 = array();
$arguments177['value'] = $currentVariableContainer->getOrNull('lll');
$arguments177['keepQuotes'] = false;
$arguments177['encoding'] = NULL;
$arguments177['doubleEncode'] = true;
$renderChildrenClosure178 = function() {return NULL;};
$value179 = ($arguments177['value'] !== NULL ? $arguments177['value'] : $renderChildrenClosure178());

$output176 .= (!is_string($value179) ? $value179 : htmlspecialchars($value179, ($arguments177['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments177['encoding'] !== NULL ? $arguments177['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments177['doubleEncode']));

$output176 .= 'fields';
$arguments175['key'] = $output176;
$arguments175['id'] = NULL;
$arguments175['default'] = NULL;
$arguments175['htmlEscape'] = NULL;
$arguments175['arguments'] = NULL;
$arguments175['extensionName'] = NULL;
$renderChildrenClosure180 = function() {return NULL;};

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments175, $renderChildrenClosure180, $renderingContext);

$output4 .= '</span>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments181 = array();
// Rendering Boolean node
$arguments181['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'hasTcaMappings', $renderingContext));
$arguments181['then'] = NULL;
$arguments181['else'] = NULL;
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output183 = '';

$output183 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments184 = array();
// Rendering Boolean node
$arguments184['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'addsNewFieldsToTca', $renderingContext));
$arguments184['then'] = NULL;
$arguments184['else'] = NULL;
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output186 = '';

$output186 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments187 = array();
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output189 = '';

$output189 .= '<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments190 = array();
$output191 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments192 = array();
$arguments192['value'] = $currentVariableContainer->getOrNull('lll');
$arguments192['keepQuotes'] = false;
$arguments192['encoding'] = NULL;
$arguments192['doubleEncode'] = true;
$renderChildrenClosure193 = function() {return NULL;};
$value194 = ($arguments192['value'] !== NULL ? $arguments192['value'] : $renderChildrenClosure193());

$output191 .= (!is_string($value194) ? $value194 : htmlspecialchars($value194, ($arguments192['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments192['encoding'] !== NULL ? $arguments192['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments192['doubleEncode']));

$output191 .= 'tcaplus';
$arguments190['key'] = $output191;
$arguments190['id'] = NULL;
$arguments190['default'] = NULL;
$arguments190['htmlEscape'] = NULL;
$arguments190['arguments'] = NULL;
$arguments190['extensionName'] = NULL;
$renderChildrenClosure195 = function() {return NULL;};

$output189 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments190, $renderChildrenClosure195, $renderingContext);

$output189 .= '" class="label label-danger">TCA+</span>';
return $output189;
};

$output186 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output186 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments196 = array();
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output198 = '';

$output198 .= '<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments199 = array();
$output200 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments201 = array();
$arguments201['value'] = $currentVariableContainer->getOrNull('lll');
$arguments201['keepQuotes'] = false;
$arguments201['encoding'] = NULL;
$arguments201['doubleEncode'] = true;
$renderChildrenClosure202 = function() {return NULL;};
$value203 = ($arguments201['value'] !== NULL ? $arguments201['value'] : $renderChildrenClosure202());

$output200 .= (!is_string($value203) ? $value203 : htmlspecialchars($value203, ($arguments201['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments201['encoding'] !== NULL ? $arguments201['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments201['doubleEncode']));

$output200 .= 'tca';
$arguments199['key'] = $output200;
$arguments199['id'] = NULL;
$arguments199['default'] = NULL;
$arguments199['htmlEscape'] = NULL;
$arguments199['arguments'] = NULL;
$arguments199['extensionName'] = NULL;
$renderChildrenClosure204 = function() {return NULL;};

$output198 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments199, $renderChildrenClosure204, $renderingContext);

$output198 .= '" class="label label-danger">TCA</span>';
return $output198;
};

$output186 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output186 .= '
                ';
return $output186;
};
$arguments184['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output205 = '';

$output205 .= '<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments206 = array();
$output207 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments208 = array();
$arguments208['value'] = $currentVariableContainer->getOrNull('lll');
$arguments208['keepQuotes'] = false;
$arguments208['encoding'] = NULL;
$arguments208['doubleEncode'] = true;
$renderChildrenClosure209 = function() {return NULL;};
$value210 = ($arguments208['value'] !== NULL ? $arguments208['value'] : $renderChildrenClosure209());

$output207 .= (!is_string($value210) ? $value210 : htmlspecialchars($value210, ($arguments208['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments208['encoding'] !== NULL ? $arguments208['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments208['doubleEncode']));

$output207 .= 'tcaplus';
$arguments206['key'] = $output207;
$arguments206['id'] = NULL;
$arguments206['default'] = NULL;
$arguments206['htmlEscape'] = NULL;
$arguments206['arguments'] = NULL;
$arguments206['extensionName'] = NULL;
$renderChildrenClosure211 = function() {return NULL;};

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments206, $renderChildrenClosure211, $renderingContext);

$output205 .= '" class="label label-danger">TCA+</span>';
return $output205;
};
$arguments184['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output212 = '';

$output212 .= '<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments213 = array();
$output214 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments215 = array();
$arguments215['value'] = $currentVariableContainer->getOrNull('lll');
$arguments215['keepQuotes'] = false;
$arguments215['encoding'] = NULL;
$arguments215['doubleEncode'] = true;
$renderChildrenClosure216 = function() {return NULL;};
$value217 = ($arguments215['value'] !== NULL ? $arguments215['value'] : $renderChildrenClosure216());

$output214 .= (!is_string($value217) ? $value217 : htmlspecialchars($value217, ($arguments215['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments215['encoding'] !== NULL ? $arguments215['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments215['doubleEncode']));

$output214 .= 'tca';
$arguments213['key'] = $output214;
$arguments213['id'] = NULL;
$arguments213['default'] = NULL;
$arguments213['htmlEscape'] = NULL;
$arguments213['arguments'] = NULL;
$arguments213['extensionName'] = NULL;
$renderChildrenClosure218 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments213, $renderChildrenClosure218, $renderingContext);

$output212 .= '" class="label label-danger">TCA</span>';
return $output212;
};

$output183 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output183 .= '
            ';
return $output183;
};

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output4 .= '
        </td>
        <td>
            <div class="pull-right">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments219 = array();
// Rendering Boolean node
$arguments219['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'hasActions', $renderingContext));
$arguments219['then'] = NULL;
$arguments219['else'] = NULL;
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output221 = '';

$output221 .= '
                    <div class="btn-group align-right">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments222 = array();
$output223 = '';

$output223 .= $currentVariableContainer->getOrNull('lll');

$output223 .= 'actions';
$arguments222['key'] = $output223;
$arguments222['id'] = NULL;
$arguments222['default'] = NULL;
$arguments222['htmlEscape'] = NULL;
$arguments222['arguments'] = NULL;
$arguments222['extensionName'] = NULL;
$renderChildrenClosure224 = function() {return NULL;};

$output221 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments222, $renderChildrenClosure224, $renderingContext);

$output221 .= ' <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments225 = array();
// Rendering Boolean node
$arguments225['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'useSimpleBackendView', $renderingContext));
$arguments225['then'] = NULL;
$arguments225['else'] = NULL;
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output227 = '';

$output227 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments228 = array();
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output230 = '';

$output230 .= '<a class="disabled" href="#">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments231 = array();
$output232 = '';

$output232 .= $currentVariableContainer->getOrNull('lll');

$output232 .= 'updatePreviewTemplates';
$arguments231['key'] = $output232;
$arguments231['id'] = NULL;
$arguments231['default'] = NULL;
$arguments231['htmlEscape'] = NULL;
$arguments231['arguments'] = NULL;
$arguments231['extensionName'] = NULL;
$renderChildrenClosure233 = function() {return NULL;};

$output230 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments231, $renderChildrenClosure233, $renderingContext);

$output230 .= '</a>';
return $output230;
};

$output227 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output227 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments234 = array();
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments236 = array();
$arguments236['action'] = 'updatePreviewTemplates';
// Rendering Array
$array237 = array();
$array237['dce'] = $currentVariableContainer->getOrNull('dce');
$arguments236['arguments'] = $array237;
$arguments236['additionalAttributes'] = NULL;
$arguments236['data'] = NULL;
$arguments236['controller'] = NULL;
$arguments236['extensionName'] = NULL;
$arguments236['pluginName'] = NULL;
$arguments236['pageUid'] = NULL;
$arguments236['pageType'] = 0;
$arguments236['noCache'] = false;
$arguments236['noCacheHash'] = false;
$arguments236['section'] = '';
$arguments236['format'] = '';
$arguments236['linkAccessRestrictedPages'] = false;
$arguments236['additionalParams'] = array (
);
$arguments236['absolute'] = false;
$arguments236['addQueryString'] = false;
$arguments236['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments236['addQueryStringMethod'] = NULL;
$arguments236['class'] = NULL;
$arguments236['dir'] = NULL;
$arguments236['id'] = NULL;
$arguments236['lang'] = NULL;
$arguments236['style'] = NULL;
$arguments236['title'] = NULL;
$arguments236['accesskey'] = NULL;
$arguments236['tabindex'] = NULL;
$arguments236['onclick'] = NULL;
$arguments236['name'] = NULL;
$arguments236['rel'] = NULL;
$arguments236['rev'] = NULL;
$arguments236['target'] = NULL;
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments239 = array();
$output240 = '';

$output240 .= $currentVariableContainer->getOrNull('lll');

$output240 .= 'updatePreviewTemplates';
$arguments239['key'] = $output240;
$arguments239['id'] = NULL;
$arguments239['default'] = NULL;
$arguments239['htmlEscape'] = NULL;
$arguments239['arguments'] = NULL;
$arguments239['extensionName'] = NULL;
$renderChildrenClosure241 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments239, $renderChildrenClosure241, $renderingContext);
};
$viewHelper242 = $self->getViewHelper('$viewHelper242', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper242->setArguments($arguments236);
$viewHelper242->setRenderingContext($renderingContext);
$viewHelper242->setRenderChildrenClosure($renderChildrenClosure238);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
return $viewHelper242->initializeArgumentsAndRender();
};

$output227 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$output227 .= '
                                ';
return $output227;
};
$arguments225['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output243 = '';

$output243 .= '<a class="disabled" href="#">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments244 = array();
$output245 = '';

$output245 .= $currentVariableContainer->getOrNull('lll');

$output245 .= 'updatePreviewTemplates';
$arguments244['key'] = $output245;
$arguments244['id'] = NULL;
$arguments244['default'] = NULL;
$arguments244['htmlEscape'] = NULL;
$arguments244['arguments'] = NULL;
$arguments244['extensionName'] = NULL;
$renderChildrenClosure246 = function() {return NULL;};

$output243 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments244, $renderChildrenClosure246, $renderingContext);

$output243 .= '</a>';
return $output243;
};
$arguments225['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments247 = array();
$arguments247['action'] = 'updatePreviewTemplates';
// Rendering Array
$array248 = array();
$array248['dce'] = $currentVariableContainer->getOrNull('dce');
$arguments247['arguments'] = $array248;
$arguments247['additionalAttributes'] = NULL;
$arguments247['data'] = NULL;
$arguments247['controller'] = NULL;
$arguments247['extensionName'] = NULL;
$arguments247['pluginName'] = NULL;
$arguments247['pageUid'] = NULL;
$arguments247['pageType'] = 0;
$arguments247['noCache'] = false;
$arguments247['noCacheHash'] = false;
$arguments247['section'] = '';
$arguments247['format'] = '';
$arguments247['linkAccessRestrictedPages'] = false;
$arguments247['additionalParams'] = array (
);
$arguments247['absolute'] = false;
$arguments247['addQueryString'] = false;
$arguments247['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments247['addQueryStringMethod'] = NULL;
$arguments247['class'] = NULL;
$arguments247['dir'] = NULL;
$arguments247['id'] = NULL;
$arguments247['lang'] = NULL;
$arguments247['style'] = NULL;
$arguments247['title'] = NULL;
$arguments247['accesskey'] = NULL;
$arguments247['tabindex'] = NULL;
$arguments247['onclick'] = NULL;
$arguments247['name'] = NULL;
$arguments247['rel'] = NULL;
$arguments247['rev'] = NULL;
$arguments247['target'] = NULL;
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments250 = array();
$output251 = '';

$output251 .= $currentVariableContainer->getOrNull('lll');

$output251 .= 'updatePreviewTemplates';
$arguments250['key'] = $output251;
$arguments250['id'] = NULL;
$arguments250['default'] = NULL;
$arguments250['htmlEscape'] = NULL;
$arguments250['arguments'] = NULL;
$arguments250['extensionName'] = NULL;
$renderChildrenClosure252 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments250, $renderChildrenClosure252, $renderingContext);
};
$viewHelper253 = $self->getViewHelper('$viewHelper253', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper253->setArguments($arguments247);
$viewHelper253->setRenderingContext($renderingContext);
$viewHelper253->setRenderChildrenClosure($renderChildrenClosure249);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
return $viewHelper253->initializeArgumentsAndRender();
};

$output221 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output221 .= '
                            </li>
                            <li>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments254 = array();
// Rendering Boolean node
$arguments254['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'hasTcaMappings', $renderingContext));
$arguments254['then'] = NULL;
$arguments254['else'] = NULL;
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output256 = '';

$output256 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments257 = array();
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments259 = array();
$arguments259['action'] = 'updateTcaMappings';
// Rendering Array
$array260 = array();
$array260['dce'] = $currentVariableContainer->getOrNull('dce');
$arguments259['arguments'] = $array260;
$arguments259['additionalAttributes'] = NULL;
$arguments259['data'] = NULL;
$arguments259['controller'] = NULL;
$arguments259['extensionName'] = NULL;
$arguments259['pluginName'] = NULL;
$arguments259['pageUid'] = NULL;
$arguments259['pageType'] = 0;
$arguments259['noCache'] = false;
$arguments259['noCacheHash'] = false;
$arguments259['section'] = '';
$arguments259['format'] = '';
$arguments259['linkAccessRestrictedPages'] = false;
$arguments259['additionalParams'] = array (
);
$arguments259['absolute'] = false;
$arguments259['addQueryString'] = false;
$arguments259['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments259['addQueryStringMethod'] = NULL;
$arguments259['class'] = NULL;
$arguments259['dir'] = NULL;
$arguments259['id'] = NULL;
$arguments259['lang'] = NULL;
$arguments259['style'] = NULL;
$arguments259['title'] = NULL;
$arguments259['accesskey'] = NULL;
$arguments259['tabindex'] = NULL;
$arguments259['onclick'] = NULL;
$arguments259['name'] = NULL;
$arguments259['rel'] = NULL;
$arguments259['rev'] = NULL;
$arguments259['target'] = NULL;
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments262 = array();
$output263 = '';

$output263 .= $currentVariableContainer->getOrNull('lll');

$output263 .= 'updateTcaMappings';
$arguments262['key'] = $output263;
$arguments262['id'] = NULL;
$arguments262['default'] = NULL;
$arguments262['htmlEscape'] = NULL;
$arguments262['arguments'] = NULL;
$arguments262['extensionName'] = NULL;
$renderChildrenClosure264 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments262, $renderChildrenClosure264, $renderingContext);
};
$viewHelper265 = $self->getViewHelper('$viewHelper265', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper265->setArguments($arguments259);
$viewHelper265->setRenderingContext($renderingContext);
$viewHelper265->setRenderChildrenClosure($renderChildrenClosure261);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
return $viewHelper265->initializeArgumentsAndRender();
};

$output256 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output256 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments266 = array();
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output268 = '';

$output268 .= '<a class="disabled" href="#">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments269 = array();
$output270 = '';

$output270 .= $currentVariableContainer->getOrNull('lll');

$output270 .= 'updateTcaMappings';
$arguments269['key'] = $output270;
$arguments269['id'] = NULL;
$arguments269['default'] = NULL;
$arguments269['htmlEscape'] = NULL;
$arguments269['arguments'] = NULL;
$arguments269['extensionName'] = NULL;
$renderChildrenClosure271 = function() {return NULL;};

$output268 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments269, $renderChildrenClosure271, $renderingContext);

$output268 .= '</a>';
return $output268;
};

$output256 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);

$output256 .= '
                                ';
return $output256;
};
$arguments254['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments272 = array();
$arguments272['action'] = 'updateTcaMappings';
// Rendering Array
$array273 = array();
$array273['dce'] = $currentVariableContainer->getOrNull('dce');
$arguments272['arguments'] = $array273;
$arguments272['additionalAttributes'] = NULL;
$arguments272['data'] = NULL;
$arguments272['controller'] = NULL;
$arguments272['extensionName'] = NULL;
$arguments272['pluginName'] = NULL;
$arguments272['pageUid'] = NULL;
$arguments272['pageType'] = 0;
$arguments272['noCache'] = false;
$arguments272['noCacheHash'] = false;
$arguments272['section'] = '';
$arguments272['format'] = '';
$arguments272['linkAccessRestrictedPages'] = false;
$arguments272['additionalParams'] = array (
);
$arguments272['absolute'] = false;
$arguments272['addQueryString'] = false;
$arguments272['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments272['addQueryStringMethod'] = NULL;
$arguments272['class'] = NULL;
$arguments272['dir'] = NULL;
$arguments272['id'] = NULL;
$arguments272['lang'] = NULL;
$arguments272['style'] = NULL;
$arguments272['title'] = NULL;
$arguments272['accesskey'] = NULL;
$arguments272['tabindex'] = NULL;
$arguments272['onclick'] = NULL;
$arguments272['name'] = NULL;
$arguments272['rel'] = NULL;
$arguments272['rev'] = NULL;
$arguments272['target'] = NULL;
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments275 = array();
$output276 = '';

$output276 .= $currentVariableContainer->getOrNull('lll');

$output276 .= 'updateTcaMappings';
$arguments275['key'] = $output276;
$arguments275['id'] = NULL;
$arguments275['default'] = NULL;
$arguments275['htmlEscape'] = NULL;
$arguments275['arguments'] = NULL;
$arguments275['extensionName'] = NULL;
$renderChildrenClosure277 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments275, $renderChildrenClosure277, $renderingContext);
};
$viewHelper278 = $self->getViewHelper('$viewHelper278', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper278->setArguments($arguments272);
$viewHelper278->setRenderingContext($renderingContext);
$viewHelper278->setRenderChildrenClosure($renderChildrenClosure274);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
return $viewHelper278->initializeArgumentsAndRender();
};
$arguments254['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output279 = '';

$output279 .= '<a class="disabled" href="#">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments280 = array();
$output281 = '';

$output281 .= $currentVariableContainer->getOrNull('lll');

$output281 .= 'updateTcaMappings';
$arguments280['key'] = $output281;
$arguments280['id'] = NULL;
$arguments280['default'] = NULL;
$arguments280['htmlEscape'] = NULL;
$arguments280['arguments'] = NULL;
$arguments280['extensionName'] = NULL;
$renderChildrenClosure282 = function() {return NULL;};

$output279 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments280, $renderChildrenClosure282, $renderingContext);

$output279 .= '</a>';
return $output279;
};

$output221 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output221 .= '
                            </li>
                        </ul>
                    </div>
                ';
return $output221;
};

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output4 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments283 = array();
// Rendering Boolean node
$arguments283['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext));
$arguments283['then'] = NULL;
$arguments283['else'] = NULL;
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output285 = '';

$output285 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments286 = array();
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output288 = '';

$output288 .= '<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments289 = array();
$arguments289['partial'] = 'Module/OpenDce';
// Rendering Array
$array290 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments291 = array();
$arguments291['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments291['keepQuotes'] = false;
$arguments291['encoding'] = NULL;
$arguments291['doubleEncode'] = true;
$renderChildrenClosure292 = function() {return NULL;};
$value293 = ($arguments291['value'] !== NULL ? $arguments291['value'] : $renderChildrenClosure292());
$array290['uid'] = (!is_string($value293) ? $value293 : htmlspecialchars($value293, ($arguments291['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments291['encoding'] !== NULL ? $arguments291['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments291['doubleEncode']));
$arguments289['arguments'] = $array290;
$arguments289['section'] = NULL;
$arguments289['optional'] = false;
$renderChildrenClosure294 = function() {return NULL;};

$output288 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments289, $renderChildrenClosure294, $renderingContext);

$output288 .= '" class="btn btn-default"><span class="fa fa-edit"></span> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments295 = array();
$output296 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments297 = array();
$arguments297['value'] = $currentVariableContainer->getOrNull('lll');
$arguments297['keepQuotes'] = false;
$arguments297['encoding'] = NULL;
$arguments297['doubleEncode'] = true;
$renderChildrenClosure298 = function() {return NULL;};
$value299 = ($arguments297['value'] !== NULL ? $arguments297['value'] : $renderChildrenClosure298());

$output296 .= (!is_string($value299) ? $value299 : htmlspecialchars($value299, ($arguments297['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments297['encoding'] !== NULL ? $arguments297['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments297['doubleEncode']));

$output296 .= 'edit';
$arguments295['key'] = $output296;
$arguments295['id'] = NULL;
$arguments295['default'] = NULL;
$arguments295['htmlEscape'] = NULL;
$arguments295['arguments'] = NULL;
$arguments295['extensionName'] = NULL;
$renderChildrenClosure300 = function() {return NULL;};

$output288 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments295, $renderChildrenClosure300, $renderingContext);

$output288 .= '</a>';
return $output288;
};

$output285 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output285 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments301 = array();
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output303 = '';

$output303 .= '<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments304 = array();
$arguments304['partial'] = 'Module/OpenStaticDce';
// Rendering Array
$array305 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments306 = array();
$arguments306['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'identifier', $renderingContext);
$arguments306['keepQuotes'] = false;
$arguments306['encoding'] = NULL;
$arguments306['doubleEncode'] = true;
$renderChildrenClosure307 = function() {return NULL;};
$value308 = ($arguments306['value'] !== NULL ? $arguments306['value'] : $renderChildrenClosure307());
$array305['identifier'] = (!is_string($value308) ? $value308 : htmlspecialchars($value308, ($arguments306['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments306['encoding'] !== NULL ? $arguments306['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments306['doubleEncode']));
$arguments304['arguments'] = $array305;
$arguments304['section'] = NULL;
$arguments304['optional'] = false;
$renderChildrenClosure309 = function() {return NULL;};

$output303 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments304, $renderChildrenClosure309, $renderingContext);

$output303 .= '" class="btn btn-default"><span class="fa fa-edit"></span> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments310 = array();
$output311 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments312 = array();
$arguments312['value'] = $currentVariableContainer->getOrNull('lll');
$arguments312['keepQuotes'] = false;
$arguments312['encoding'] = NULL;
$arguments312['doubleEncode'] = true;
$renderChildrenClosure313 = function() {return NULL;};
$value314 = ($arguments312['value'] !== NULL ? $arguments312['value'] : $renderChildrenClosure313());

$output311 .= (!is_string($value314) ? $value314 : htmlspecialchars($value314, ($arguments312['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments312['encoding'] !== NULL ? $arguments312['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments312['doubleEncode']));

$output311 .= 'edit';
$arguments310['key'] = $output311;
$arguments310['id'] = NULL;
$arguments310['default'] = NULL;
$arguments310['htmlEscape'] = NULL;
$arguments310['arguments'] = NULL;
$arguments310['extensionName'] = NULL;
$renderChildrenClosure315 = function() {return NULL;};

$output303 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments310, $renderChildrenClosure315, $renderingContext);

$output303 .= '</a>';
return $output303;
};

$output285 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext);

$output285 .= '
                ';
return $output285;
};
$arguments283['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output316 = '';

$output316 .= '<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments317 = array();
$arguments317['partial'] = 'Module/OpenDce';
// Rendering Array
$array318 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments319 = array();
$arguments319['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments319['keepQuotes'] = false;
$arguments319['encoding'] = NULL;
$arguments319['doubleEncode'] = true;
$renderChildrenClosure320 = function() {return NULL;};
$value321 = ($arguments319['value'] !== NULL ? $arguments319['value'] : $renderChildrenClosure320());
$array318['uid'] = (!is_string($value321) ? $value321 : htmlspecialchars($value321, ($arguments319['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments319['encoding'] !== NULL ? $arguments319['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments319['doubleEncode']));
$arguments317['arguments'] = $array318;
$arguments317['section'] = NULL;
$arguments317['optional'] = false;
$renderChildrenClosure322 = function() {return NULL;};

$output316 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments317, $renderChildrenClosure322, $renderingContext);

$output316 .= '" class="btn btn-default"><span class="fa fa-edit"></span> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments323 = array();
$output324 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments325 = array();
$arguments325['value'] = $currentVariableContainer->getOrNull('lll');
$arguments325['keepQuotes'] = false;
$arguments325['encoding'] = NULL;
$arguments325['doubleEncode'] = true;
$renderChildrenClosure326 = function() {return NULL;};
$value327 = ($arguments325['value'] !== NULL ? $arguments325['value'] : $renderChildrenClosure326());

$output324 .= (!is_string($value327) ? $value327 : htmlspecialchars($value327, ($arguments325['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments325['encoding'] !== NULL ? $arguments325['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments325['doubleEncode']));

$output324 .= 'edit';
$arguments323['key'] = $output324;
$arguments323['id'] = NULL;
$arguments323['default'] = NULL;
$arguments323['htmlEscape'] = NULL;
$arguments323['arguments'] = NULL;
$arguments323['extensionName'] = NULL;
$renderChildrenClosure328 = function() {return NULL;};

$output316 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments323, $renderChildrenClosure328, $renderingContext);

$output316 .= '</a>';
return $output316;
};
$arguments283['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output329 = '';

$output329 .= '<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments330 = array();
$arguments330['partial'] = 'Module/OpenStaticDce';
// Rendering Array
$array331 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments332 = array();
$arguments332['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'identifier', $renderingContext);
$arguments332['keepQuotes'] = false;
$arguments332['encoding'] = NULL;
$arguments332['doubleEncode'] = true;
$renderChildrenClosure333 = function() {return NULL;};
$value334 = ($arguments332['value'] !== NULL ? $arguments332['value'] : $renderChildrenClosure333());
$array331['identifier'] = (!is_string($value334) ? $value334 : htmlspecialchars($value334, ($arguments332['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments332['encoding'] !== NULL ? $arguments332['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments332['doubleEncode']));
$arguments330['arguments'] = $array331;
$arguments330['section'] = NULL;
$arguments330['optional'] = false;
$renderChildrenClosure335 = function() {return NULL;};

$output329 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments330, $renderChildrenClosure335, $renderingContext);

$output329 .= '" class="btn btn-default"><span class="fa fa-edit"></span> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments336 = array();
$output337 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments338 = array();
$arguments338['value'] = $currentVariableContainer->getOrNull('lll');
$arguments338['keepQuotes'] = false;
$arguments338['encoding'] = NULL;
$arguments338['doubleEncode'] = true;
$renderChildrenClosure339 = function() {return NULL;};
$value340 = ($arguments338['value'] !== NULL ? $arguments338['value'] : $renderChildrenClosure339());

$output337 .= (!is_string($value340) ? $value340 : htmlspecialchars($value340, ($arguments338['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments338['encoding'] !== NULL ? $arguments338['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments338['doubleEncode']));

$output337 .= 'edit';
$arguments336['key'] = $output337;
$arguments336['id'] = NULL;
$arguments336['default'] = NULL;
$arguments336['htmlEscape'] = NULL;
$arguments336['arguments'] = NULL;
$arguments336['extensionName'] = NULL;
$renderChildrenClosure341 = function() {return NULL;};

$output329 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments336, $renderChildrenClosure341, $renderingContext);

$output329 .= '</a>';
return $output329;
};

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);

$output4 .= '
            </div>
        </td>
    </tr>
';
return $output4;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments1, $renderChildrenClosure3, $renderingContext);

$output0 .= '
';


return $output0;
}


}
#1466614709    84871     