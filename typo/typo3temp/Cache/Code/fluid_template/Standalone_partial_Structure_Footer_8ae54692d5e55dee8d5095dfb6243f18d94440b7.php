<?php
class FluidCache_Standalone_partial_Structure_Footer_8ae54692d5e55dee8d5095dfb6243f18d94440b7 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<footer>
<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments1 = array();
$arguments1['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array2 = array();
$array2['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array2['colPos'] = '10';
$arguments1['data'] = $array2;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$renderChildrenClosure3 = function() {return NULL;};
$viewHelper4 = $self->getViewHelper('$viewHelper4', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper4->setArguments($arguments1);
$viewHelper4->setRenderingContext($renderingContext);
$viewHelper4->setRenderChildrenClosure($renderChildrenClosure3);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper4->initializeArgumentsAndRender();

$output0 .= '
            </div>
            <div class="col-sm-4">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments5 = array();
$arguments5['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array6 = array();
$array6['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array6['colPos'] = '11';
$arguments5['data'] = $array6;
$arguments5['currentValueKey'] = NULL;
$arguments5['table'] = '';
$renderChildrenClosure7 = function() {return NULL;};
$viewHelper8 = $self->getViewHelper('$viewHelper8', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper8->setArguments($arguments5);
$viewHelper8->setRenderingContext($renderingContext);
$viewHelper8->setRenderChildrenClosure($renderChildrenClosure7);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper8->initializeArgumentsAndRender();

$output0 .= '
            </div>
            <div class="col-sm-4">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments9 = array();
$arguments9['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array10 = array();
$array10['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array10['colPos'] = '12';
$arguments9['data'] = $array10;
$arguments9['currentValueKey'] = NULL;
$arguments9['table'] = '';
$renderChildrenClosure11 = function() {return NULL;};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper12->setArguments($arguments9);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper12->initializeArgumentsAndRender();

$output0 .= '
            </div>
        </div>
    </div>
</section>

<section class="meta-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 language">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments13 = array();
$arguments13['typoscriptObjectPath'] = 'lib.language';
$arguments13['data'] = NULL;
$arguments13['currentValueKey'] = NULL;
$arguments13['table'] = '';
$renderChildrenClosure14 = function() {return NULL;};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper15->setArguments($arguments13);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper15->initializeArgumentsAndRender();

$output0 .= '
            </div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments16 = array();
// Rendering Boolean node
$arguments16['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('themeCopyright'));
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output18 = '';

$output18 .= '
                <div class="col-md-8 copyright" role="contentinfo">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments19 = array();
$arguments19['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('themeCopyrightText');
};

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
                </div>
            ';
return $output18;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '
        </div>
    </div>
</section>
</footer>';


return $output0;
}


}
#1457988986    6376      