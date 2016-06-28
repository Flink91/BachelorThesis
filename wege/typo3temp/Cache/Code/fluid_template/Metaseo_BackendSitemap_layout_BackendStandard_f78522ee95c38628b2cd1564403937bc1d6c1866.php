<?php
class FluidCache_Metaseo_BackendSitemap_layout_BackendStandard_f78522ee95c38628b2cd1564403937bc1d6c1866 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['pageTitle'] = '';
$arguments1['enableClickMenu'] = true;
$arguments1['loadExtJs'] = false;
$arguments1['loadExtJsTheme'] = true;
$arguments1['enableExtJsDebug'] = false;
$arguments1['loadJQuery'] = false;
$arguments1['includeJsFiles'] = NULL;
$arguments1['addJsInlineLabels'] = NULL;
$arguments1['includeRequireJsModules'] = NULL;
$arguments1['jQueryNamespace'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '

    <div class="typo3-fullDoc">

        <div id="typo3-docheader">
            <div class="typo3-docheader-functions">
                <div class="left">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\CshViewHelper
$arguments7 = array();
$arguments7['table'] = NULL;
$arguments7['field'] = '';
$arguments7['iconOnly'] = false;
$arguments7['styleAttributes'] = '';
$arguments7['wrap'] = '';
$renderChildrenClosure8 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\CshViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments9 = array();
$arguments9['section'] = 'button-toolbar';
// Rendering Boolean node
$arguments9['optional'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments9['partial'] = NULL;
$arguments9['arguments'] = array (
);
$renderChildrenClosure10 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output6 .= '
                </div>
                <div class="right"></div>
            </div>
            <div class="typo3-docheader-buttons">
                <div class="left"></div>
                <div class="right">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper
$arguments11 = array();
$arguments11['getVars'] = array (
);
$arguments11['setVars'] = array (
);
$renderChildrenClosure12 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output6 .= '
                </div>
            </div>
        </div>

        <div id="typo3-docbody">
            <div id="typo3-inner-docbody">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments13 = array();
$arguments13['section'] = 'title';
// Rendering Boolean node
$arguments13['optional'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments13['partial'] = NULL;
$arguments13['arguments'] = array (
);
$renderChildrenClosure14 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output6 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments15 = array();
$arguments15['renderMode'] = 'div';
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['as'] = NULL;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['queueIdentifier'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};
$viewHelper17 = $self->getViewHelper('$viewHelper17', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper17->setArguments($arguments15);
$viewHelper17->setRenderingContext($renderingContext);
$viewHelper17->setRenderChildrenClosure($renderChildrenClosure16);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output6 .= $viewHelper17->initializeArgumentsAndRender();

$output6 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments18 = array();
$arguments18['section'] = 'content';
$arguments18['partial'] = NULL;
$arguments18['arguments'] = array (
);
$arguments18['optional'] = false;
$renderChildrenClosure19 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output6 .= '
            </div>
        </div>

    </div>

';
return $output6;
};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper');
$viewHelper20->setArguments($arguments1);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper

$output0 .= $viewHelper20->initializeArgumentsAndRender();

$output0 .= '
';


return $output0;
}


}
#1467122765    6510      