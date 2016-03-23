<?php
class FluidCache_Standalone_template_file_SpecialFeature_de7633d766ae77ead9c67131d68a23073ded3090 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments1 = array();
$arguments1['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array2 = array();
$array2['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array2['colPos'] = '3';
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
    <div class="container">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments5 = array();
$arguments5['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array6 = array();
$array6['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array6['colPos'] = '0';
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

    <div class="well">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments9 = array();
$arguments9['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array10 = array();
$array10['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array10['colPos'] = '30';
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
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments13 = array();
$arguments13['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array14 = array();
$array14['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array14['colPos'] = '31';
$arguments13['data'] = $array14;
$arguments13['currentValueKey'] = NULL;
$arguments13['table'] = '';
$renderChildrenClosure15 = function() {return NULL;};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper16->setArguments($arguments13);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper16->initializeArgumentsAndRender();

$output0 .= '
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments17 = array();
$arguments17['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array18 = array();
$array18['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array18['colPos'] = '32';
$arguments17['data'] = $array18;
$arguments17['currentValueKey'] = NULL;
$arguments17['table'] = '';
$renderChildrenClosure19 = function() {return NULL;};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper20->setArguments($arguments17);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper20->initializeArgumentsAndRender();

$output0 .= '
                </div>
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments21 = array();
$arguments21['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array22 = array();
$array22['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array22['colPos'] = '33';
$arguments21['data'] = $array22;
$arguments21['currentValueKey'] = NULL;
$arguments21['table'] = '';
$renderChildrenClosure23 = function() {return NULL;};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper24->setArguments($arguments21);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper24->initializeArgumentsAndRender();

$output0 .= '
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments25 = array();
$arguments25['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array26 = array();
$array26['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array26['colPos'] = '4';
$arguments25['data'] = $array26;
$arguments25['currentValueKey'] = NULL;
$arguments25['table'] = '';
$renderChildrenClosure27 = function() {return NULL;};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper28->setArguments($arguments25);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper28->initializeArgumentsAndRender();

$output0 .= '
        <div class="row">
            <div class="col-sm-6">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments29 = array();
$arguments29['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array30 = array();
$array30['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array30['colPos'] = '34';
$arguments29['data'] = $array30;
$arguments29['currentValueKey'] = NULL;
$arguments29['table'] = '';
$renderChildrenClosure31 = function() {return NULL;};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper32->setArguments($arguments29);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure31);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper32->initializeArgumentsAndRender();

$output0 .= '
            </div>
            <div class="col-sm-6">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments33 = array();
$arguments33['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array34 = array();
$array34['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array34['colPos'] = '35';
$arguments33['data'] = $array34;
$arguments33['currentValueKey'] = NULL;
$arguments33['table'] = '';
$renderChildrenClosure35 = function() {return NULL;};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper36->setArguments($arguments33);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper36->initializeArgumentsAndRender();

$output0 .= '
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments37 = array();
$arguments37['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array38 = array();
$array38['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array38['colPos'] = '36';
$arguments37['data'] = $array38;
$arguments37['currentValueKey'] = NULL;
$arguments37['table'] = '';
$renderChildrenClosure39 = function() {return NULL;};
$viewHelper40 = $self->getViewHelper('$viewHelper40', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper40->setArguments($arguments37);
$viewHelper40->setRenderingContext($renderingContext);
$viewHelper40->setRenderChildrenClosure($renderChildrenClosure39);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper40->initializeArgumentsAndRender();

$output0 .= '
            </div>
            <div class="col-sm-6">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments41 = array();
$arguments41['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array42 = array();
$array42['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array42['colPos'] = '37';
$arguments41['data'] = $array42;
$arguments41['currentValueKey'] = NULL;
$arguments41['table'] = '';
$renderChildrenClosure43 = function() {return NULL;};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper44->setArguments($arguments41);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper44->initializeArgumentsAndRender();

$output0 .= '
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

$output45 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments46 = array();
$arguments46['name'] = 'Default';
$renderChildrenClosure47 = function() {return NULL;};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper48->setArguments($arguments46);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output45 .= $viewHelper48->initializeArgumentsAndRender();

$output45 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments49 = array();
$arguments49['name'] = 'Main';
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output51 = '';

$output51 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments52 = array();
$arguments52['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array53 = array();
$array53['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array53['colPos'] = '3';
$arguments52['data'] = $array53;
$arguments52['currentValueKey'] = NULL;
$arguments52['table'] = '';
$renderChildrenClosure54 = function() {return NULL;};
$viewHelper55 = $self->getViewHelper('$viewHelper55', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper55->setArguments($arguments52);
$viewHelper55->setRenderingContext($renderingContext);
$viewHelper55->setRenderChildrenClosure($renderChildrenClosure54);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output51 .= $viewHelper55->initializeArgumentsAndRender();

$output51 .= '
    <div class="container">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments56 = array();
$arguments56['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array57 = array();
$array57['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array57['colPos'] = '0';
$arguments56['data'] = $array57;
$arguments56['currentValueKey'] = NULL;
$arguments56['table'] = '';
$renderChildrenClosure58 = function() {return NULL;};
$viewHelper59 = $self->getViewHelper('$viewHelper59', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper59->setArguments($arguments56);
$viewHelper59->setRenderingContext($renderingContext);
$viewHelper59->setRenderChildrenClosure($renderChildrenClosure58);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output51 .= $viewHelper59->initializeArgumentsAndRender();

$output51 .= '
    </div>

    <div class="well">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments60 = array();
$arguments60['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array61 = array();
$array61['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array61['colPos'] = '30';
$arguments60['data'] = $array61;
$arguments60['currentValueKey'] = NULL;
$arguments60['table'] = '';
$renderChildrenClosure62 = function() {return NULL;};
$viewHelper63 = $self->getViewHelper('$viewHelper63', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper63->setArguments($arguments60);
$viewHelper63->setRenderingContext($renderingContext);
$viewHelper63->setRenderChildrenClosure($renderChildrenClosure62);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output51 .= $viewHelper63->initializeArgumentsAndRender();

$output51 .= '
                </div>
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments64 = array();
$arguments64['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array65 = array();
$array65['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array65['colPos'] = '31';
$arguments64['data'] = $array65;
$arguments64['currentValueKey'] = NULL;
$arguments64['table'] = '';
$renderChildrenClosure66 = function() {return NULL;};
$viewHelper67 = $self->getViewHelper('$viewHelper67', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper67->setArguments($arguments64);
$viewHelper67->setRenderingContext($renderingContext);
$viewHelper67->setRenderChildrenClosure($renderChildrenClosure66);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output51 .= $viewHelper67->initializeArgumentsAndRender();

$output51 .= '
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments68 = array();
$arguments68['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array69 = array();
$array69['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array69['colPos'] = '32';
$arguments68['data'] = $array69;
$arguments68['currentValueKey'] = NULL;
$arguments68['table'] = '';
$renderChildrenClosure70 = function() {return NULL;};
$viewHelper71 = $self->getViewHelper('$viewHelper71', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper71->setArguments($arguments68);
$viewHelper71->setRenderingContext($renderingContext);
$viewHelper71->setRenderChildrenClosure($renderChildrenClosure70);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output51 .= $viewHelper71->initializeArgumentsAndRender();

$output51 .= '
                </div>
                <div class="col-sm-6">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments72 = array();
$arguments72['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array73 = array();
$array73['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array73['colPos'] = '33';
$arguments72['data'] = $array73;
$arguments72['currentValueKey'] = NULL;
$arguments72['table'] = '';
$renderChildrenClosure74 = function() {return NULL;};
$viewHelper75 = $self->getViewHelper('$viewHelper75', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper75->setArguments($arguments72);
$viewHelper75->setRenderingContext($renderingContext);
$viewHelper75->setRenderChildrenClosure($renderChildrenClosure74);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output51 .= $viewHelper75->initializeArgumentsAndRender();

$output51 .= '
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments76 = array();
$arguments76['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array77 = array();
$array77['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array77['colPos'] = '4';
$arguments76['data'] = $array77;
$arguments76['currentValueKey'] = NULL;
$arguments76['table'] = '';
$renderChildrenClosure78 = function() {return NULL;};
$viewHelper79 = $self->getViewHelper('$viewHelper79', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper79->setArguments($arguments76);
$viewHelper79->setRenderingContext($renderingContext);
$viewHelper79->setRenderChildrenClosure($renderChildrenClosure78);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output51 .= $viewHelper79->initializeArgumentsAndRender();

$output51 .= '
        <div class="row">
            <div class="col-sm-6">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments80 = array();
$arguments80['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array81 = array();
$array81['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array81['colPos'] = '34';
$arguments80['data'] = $array81;
$arguments80['currentValueKey'] = NULL;
$arguments80['table'] = '';
$renderChildrenClosure82 = function() {return NULL;};
$viewHelper83 = $self->getViewHelper('$viewHelper83', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper83->setArguments($arguments80);
$viewHelper83->setRenderingContext($renderingContext);
$viewHelper83->setRenderChildrenClosure($renderChildrenClosure82);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output51 .= $viewHelper83->initializeArgumentsAndRender();

$output51 .= '
            </div>
            <div class="col-sm-6">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments84 = array();
$arguments84['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array85 = array();
$array85['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array85['colPos'] = '35';
$arguments84['data'] = $array85;
$arguments84['currentValueKey'] = NULL;
$arguments84['table'] = '';
$renderChildrenClosure86 = function() {return NULL;};
$viewHelper87 = $self->getViewHelper('$viewHelper87', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper87->setArguments($arguments84);
$viewHelper87->setRenderingContext($renderingContext);
$viewHelper87->setRenderChildrenClosure($renderChildrenClosure86);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output51 .= $viewHelper87->initializeArgumentsAndRender();

$output51 .= '
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments88 = array();
$arguments88['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array89 = array();
$array89['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array89['colPos'] = '36';
$arguments88['data'] = $array89;
$arguments88['currentValueKey'] = NULL;
$arguments88['table'] = '';
$renderChildrenClosure90 = function() {return NULL;};
$viewHelper91 = $self->getViewHelper('$viewHelper91', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper91->setArguments($arguments88);
$viewHelper91->setRenderingContext($renderingContext);
$viewHelper91->setRenderChildrenClosure($renderChildrenClosure90);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output51 .= $viewHelper91->initializeArgumentsAndRender();

$output51 .= '
            </div>
            <div class="col-sm-6">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments92 = array();
$arguments92['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array93 = array();
$array93['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array93['colPos'] = '37';
$arguments92['data'] = $array93;
$arguments92['currentValueKey'] = NULL;
$arguments92['table'] = '';
$renderChildrenClosure94 = function() {return NULL;};
$viewHelper95 = $self->getViewHelper('$viewHelper95', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper95->setArguments($arguments92);
$viewHelper95->setRenderingContext($renderingContext);
$viewHelper95->setRenderChildrenClosure($renderChildrenClosure94);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output51 .= $viewHelper95->initializeArgumentsAndRender();

$output51 .= '
            </div>
        </div>
    </div>

';
return $output51;
};

$output45 .= '';

$output45 .= '
';


return $output45;
}


}
#1457810994    25600     