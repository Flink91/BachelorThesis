<?php
class FluidCache_Metaseo_BackendPageSeo_layout_BackendPageSeo_e7e93c88b75aab9836a1a9be24f32a389d7641a7 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper
$arguments1 = array();
// Rendering Array
$array2 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments3 = array();
$arguments3['path'] = 'Backend/Css/Default.css';
$arguments3['extensionName'] = NULL;
$arguments3['absolute'] = false;
$renderChildrenClosure4 = function() {return NULL;};
$array2['0'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);
$arguments1['includeCssFiles'] = $array2;
// Rendering Array
$array5 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments6 = array();
$arguments6['path'] = 'Backend/JavaScript/MetaSeo.js';
$arguments6['extensionName'] = NULL;
$arguments6['absolute'] = false;
$renderChildrenClosure7 = function() {return NULL;};
$array5['0'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments8 = array();
$arguments8['path'] = 'Backend/JavaScript/Ext.ux.plugin.FitToParent.js';
$arguments8['extensionName'] = NULL;
$arguments8['absolute'] = false;
$renderChildrenClosure9 = function() {return NULL;};
$array5['1'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments10 = array();
$arguments10['path'] = 'Backend/JavaScript/MetaSeo.overview.js';
$arguments10['extensionName'] = NULL;
$arguments10['absolute'] = false;
$renderChildrenClosure11 = function() {return NULL;};
$array5['2'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);
$arguments1['includeJsFiles'] = $array5;
// Rendering Boolean node
$arguments1['loadExtJs'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments1['pageTitle'] = '';
$arguments1['enableClickMenu'] = true;
$arguments1['loadExtJsTheme'] = true;
$arguments1['enableExtJsDebug'] = false;
$arguments1['loadJQuery'] = false;
$arguments1['addJsInlineLabels'] = NULL;
$arguments1['includeRequireJsModules'] = NULL;
$arguments1['jQueryNamespace'] = NULL;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output13 = '';

$output13 .= '

    <div class="typo3-fullDoc">

        <div id="typo3-docheader">
            <div class="typo3-docheader-functions">
                <div class="left">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\CshViewHelper
$arguments14 = array();
$arguments14['table'] = NULL;
$arguments14['field'] = '';
$arguments14['iconOnly'] = false;
$arguments14['styleAttributes'] = '';
$arguments14['wrap'] = '';
$renderChildrenClosure15 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\CshViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments16 = array();
$arguments16['section'] = 'button-toolbar';
// Rendering Boolean node
$arguments16['optional'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments16['partial'] = NULL;
$arguments16['arguments'] = array (
);
$renderChildrenClosure17 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output13 .= '
                </div>
                <div class="right"></div>
            </div>
            <div class="typo3-docheader-buttons">
                <div class="left"></div>
                <div class="right">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper
$arguments18 = array();
$arguments18['getVars'] = array (
);
$arguments18['setVars'] = array (
);
$renderChildrenClosure19 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output13 .= '
                </div>
            </div>
        </div>

        <div id="typo3-docbody">
            <div id="typo3-inner-docbody">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments20 = array();
$arguments20['section'] = 'title';
// Rendering Boolean node
$arguments20['optional'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments20['partial'] = NULL;
$arguments20['arguments'] = array (
);
$renderChildrenClosure21 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output13 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments22 = array();
$arguments22['renderMode'] = 'div';
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['as'] = NULL;
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$arguments22['queueIdentifier'] = NULL;
$renderChildrenClosure23 = function() {return NULL;};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper24->setArguments($arguments22);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output13 .= $viewHelper24->initializeArgumentsAndRender();

$output13 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments25 = array();
$arguments25['section'] = 'content';
$arguments25['partial'] = NULL;
$arguments25['arguments'] = array (
);
$arguments25['optional'] = false;
$renderChildrenClosure26 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output13 .= '
            </div>
        </div>

    </div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments27 = array();
$output28 = '';

$output28 .= '<script>';

$output28 .= $currentVariableContainer->getOrNull('JavaScript');

$output28 .= '</script>';
$arguments27['value'] = $output28;
$renderChildrenClosure29 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments27, $renderChildrenClosure29, $renderingContext);

$output13 .= '
';
return $output13;
};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper');
$viewHelper30->setArguments($arguments1);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper

$output0 .= $viewHelper30->initializeArgumentsAndRender();

$output0 .= '
';


return $output0;
}


}
#1467122776    8435      