<?php
class FluidCache_Yag_Album_action_addItems_d149d3fa10e9ef982e87cf681f4524c2bf4b4cd5 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section main
 */
public function section_b28b7af69320201d1cf206ebf28373980add1451(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '

<script>
    jQuery(function() {
        jQuery( "#tabs" ).tabs();
    });
</script>

<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'tx_yag_controller_album_addItems.header';
// Rendering Array
$array2 = array();
$array2['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'name', $renderingContext);
$arguments1['arguments'] = $array2;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure3 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure3, $renderingContext);

$output0 .= '</h2>

<div id="tabs">
    <ul>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.upload.dragNDrop.available', $renderingContext));
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
            <li><a href="#tabs-DragDrop">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments7 = array();
$arguments7['key'] = 'tx_yag_controller_album_addItems.headerDragDrop';
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '</a></li>
        ';
return $output6;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments9 = array();
// Rendering Boolean node
$arguments9['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.upload.multiFile.available', $renderingContext));
$arguments9['then'] = NULL;
$arguments9['else'] = NULL;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
            <li><a href="#tabs-1">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments12 = array();
$arguments12['key'] = 'tx_yag_controller_album_addItems.headerMultifile';
$arguments12['id'] = NULL;
$arguments12['default'] = NULL;
$arguments12['htmlEscape'] = NULL;
$arguments12['arguments'] = NULL;
$arguments12['extensionName'] = NULL;
$renderChildrenClosure13 = function() {return NULL;};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '</a></li>
        ';
return $output11;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments14 = array();
// Rendering Boolean node
$arguments14['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.upload.zipUpload.available', $renderingContext));
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output16 = '';

$output16 .= '
            <li><a href="#tabs-2">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments17 = array();
$arguments17['key'] = 'tx_yag_controller_album_addItems.headerZipUpload';
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['htmlEscape'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$renderChildrenClosure18 = function() {return NULL;};

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '</a></li>
        ';
return $output16;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output0 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments19 = array();
// Rendering Boolean node
$arguments19['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.upload.directory.available', $renderingContext));
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output21 = '';

$output21 .= '
            <li><a href="#tabs-3">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments22 = array();
$arguments22['key'] = 'tx_yag_controller_album_addItems.headerDirectoryOnServer';
$arguments22['id'] = NULL;
$arguments22['default'] = NULL;
$arguments22['htmlEscape'] = NULL;
$arguments22['arguments'] = NULL;
$arguments22['extensionName'] = NULL;
$renderChildrenClosure23 = function() {return NULL;};

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '</a></li>
        ';
return $output21;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output0 .= '
    </ul>


    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments24 = array();
// Rendering Boolean node
$arguments24['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.upload.dragNDrop.available', $renderingContext));
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output26 = '';

$output26 .= '
        <div id="tabs-DragDrop">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments27 = array();
$arguments27['partial'] = 'Import/DragNDrop';
// Rendering Array
$array28 = array();
$array28['album'] = $currentVariableContainer->getOrNull('album');
$array28['config'] = $currentVariableContainer->getOrNull('config');
$arguments27['arguments'] = $array28;
$arguments27['section'] = NULL;
$arguments27['optional'] = false;
$renderChildrenClosure29 = function() {return NULL;};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments27, $renderChildrenClosure29, $renderingContext);

$output26 .= '
        </div>
    ';
return $output26;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments30 = array();
// Rendering Boolean node
$arguments30['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.upload.multiFile.available', $renderingContext));
$arguments30['then'] = NULL;
$arguments30['else'] = NULL;
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output32 = '';

$output32 .= '
        <div id="tabs-1">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments33 = array();
$arguments33['partial'] = 'Import/ImportByMultifileForm';
// Rendering Array
$array34 = array();
$array34['album'] = $currentVariableContainer->getOrNull('album');
$arguments33['arguments'] = $array34;
$arguments33['section'] = NULL;
$arguments33['optional'] = false;
$renderChildrenClosure35 = function() {return NULL;};

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments33, $renderChildrenClosure35, $renderingContext);

$output32 .= '
        </div>
    ';
return $output32;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments36 = array();
// Rendering Boolean node
$arguments36['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.upload.zipUpload.available', $renderingContext));
$arguments36['then'] = NULL;
$arguments36['else'] = NULL;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
        <div id="tabs-2">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments39 = array();
$arguments39['partial'] = 'Import/ImportByZipForm';
// Rendering Array
$array40 = array();
$array40['album'] = $currentVariableContainer->getOrNull('album');
$array40['zipImportAvailable'] = $currentVariableContainer->getOrNull('zipImportAvailable');
$arguments39['arguments'] = $array40;
$arguments39['section'] = NULL;
$arguments39['optional'] = false;
$renderChildrenClosure41 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments39, $renderChildrenClosure41, $renderingContext);

$output38 .= '
        </div>
    ';
return $output38;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments42 = array();
// Rendering Boolean node
$arguments42['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.upload.directory.available', $renderingContext));
$arguments42['then'] = NULL;
$arguments42['else'] = NULL;
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output44 = '';

$output44 .= '
        <div id="tabs-3">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments45 = array();
$arguments45['partial'] = 'Import/ImportByDirectoryForm';
// Rendering Array
$array46 = array();
$array46['album'] = $currentVariableContainer->getOrNull('album');
$arguments45['arguments'] = $array46;
$arguments45['section'] = NULL;
$arguments45['optional'] = false;
$renderChildrenClosure47 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments45, $renderChildrenClosure47, $renderingContext);

$output44 .= '
        </div>
    ';
return $output44;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output0 .= '
</div>

<div id="resolutionList">

</div>

<div class="yag-buttonLine">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments48 = array();
$arguments48['action'] = 'submitFilter';
$arguments48['class'] = 'btn btn-default';
$arguments48['controller'] = 'ItemList';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments49 = array();
$arguments49['object'] = $currentVariableContainer->getOrNull('yagContext');
$output50 = '';

$output50 .= 'albumUid:';

$output50 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments49['arguments'] = $output50;
$arguments49['nameSpace'] = '';
$renderChildrenClosure51 = function() {return NULL;};
$viewHelper52 = $self->getViewHelper('$viewHelper52', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper52->setArguments($arguments49);
$viewHelper52->setRenderingContext($renderingContext);
$viewHelper52->setRenderChildrenClosure($renderChildrenClosure51);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments48['arguments'] = $viewHelper52->initializeArgumentsAndRender();
$arguments48['additionalAttributes'] = NULL;
$arguments48['data'] = NULL;
$arguments48['extensionName'] = NULL;
$arguments48['pluginName'] = NULL;
$arguments48['pageUid'] = NULL;
$arguments48['pageType'] = 0;
$arguments48['noCache'] = false;
$arguments48['noCacheHash'] = false;
$arguments48['section'] = '';
$arguments48['format'] = '';
$arguments48['linkAccessRestrictedPages'] = false;
$arguments48['additionalParams'] = array (
);
$arguments48['absolute'] = false;
$arguments48['addQueryString'] = false;
$arguments48['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments48['addQueryStringMethod'] = NULL;
$arguments48['dir'] = NULL;
$arguments48['id'] = NULL;
$arguments48['lang'] = NULL;
$arguments48['style'] = NULL;
$arguments48['title'] = NULL;
$arguments48['accesskey'] = NULL;
$arguments48['tabindex'] = NULL;
$arguments48['onclick'] = NULL;
$arguments48['name'] = NULL;
$arguments48['rel'] = NULL;
$arguments48['rev'] = NULL;
$arguments48['target'] = NULL;
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output54 = '';

$output54 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments55 = array();
$arguments55['key'] = 'tx_yag_controller_album_addItems.backToItemList';
$arguments55['id'] = NULL;
$arguments55['default'] = NULL;
$arguments55['htmlEscape'] = NULL;
$arguments55['arguments'] = NULL;
$arguments55['extensionName'] = NULL;
$renderChildrenClosure56 = function() {return NULL;};

$output54 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '
	';
return $output54;
};
$viewHelper57 = $self->getViewHelper('$viewHelper57', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper57->setArguments($arguments48);
$viewHelper57->setRenderingContext($renderingContext);
$viewHelper57->setRenderChildrenClosure($renderChildrenClosure53);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper57->initializeArgumentsAndRender();

$output0 .= '
</div>

';


return $output0;
}
/**
 * section beButtonsLeft
 */
public function section_cf0fe0f1a8ee78bebfb9f3c54af26f541cb3674a(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output58 = '';

$output58 .= '
    <div class="buttongroup">
	    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments59 = array();
$arguments59['action'] = 'submitFilter';
$arguments59['controller'] = 'ItemList';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments60 = array();
$arguments60['object'] = $currentVariableContainer->getOrNull('yagContext');
$output61 = '';

$output61 .= 'albumUid:';

$output61 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments60['arguments'] = $output61;
$arguments60['nameSpace'] = '';
$renderChildrenClosure62 = function() {return NULL;};
$viewHelper63 = $self->getViewHelper('$viewHelper63', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper63->setArguments($arguments60);
$viewHelper63->setRenderingContext($renderingContext);
$viewHelper63->setRenderChildrenClosure($renderChildrenClosure62);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments59['arguments'] = $viewHelper63->initializeArgumentsAndRender();
$arguments59['additionalAttributes'] = NULL;
$arguments59['data'] = NULL;
$arguments59['extensionName'] = NULL;
$arguments59['pluginName'] = NULL;
$arguments59['pageUid'] = NULL;
$arguments59['pageType'] = 0;
$arguments59['noCache'] = false;
$arguments59['noCacheHash'] = false;
$arguments59['section'] = '';
$arguments59['format'] = '';
$arguments59['linkAccessRestrictedPages'] = false;
$arguments59['additionalParams'] = array (
);
$arguments59['absolute'] = false;
$arguments59['addQueryString'] = false;
$arguments59['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments59['addQueryStringMethod'] = NULL;
$arguments59['class'] = NULL;
$arguments59['dir'] = NULL;
$arguments59['id'] = NULL;
$arguments59['lang'] = NULL;
$arguments59['style'] = NULL;
$arguments59['title'] = NULL;
$arguments59['accesskey'] = NULL;
$arguments59['tabindex'] = NULL;
$arguments59['onclick'] = NULL;
$arguments59['name'] = NULL;
$arguments59['rel'] = NULL;
$arguments59['rev'] = NULL;
$arguments59['target'] = NULL;
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
		    <span class="t3-icon t3-icon-actions t3-icon-actions-document t3-icon-document-close">&nbsp;</span>
		';
};
$viewHelper65 = $self->getViewHelper('$viewHelper65', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper65->setArguments($arguments59);
$viewHelper65->setRenderingContext($renderingContext);
$viewHelper65->setRenderChildrenClosure($renderChildrenClosure64);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output58 .= $viewHelper65->initializeArgumentsAndRender();

$output58 .= '
	</div>
';


return $output58;
}
/**
 * section feEdit
 */
public function section_70142cdf206387b7141dfd354a9ffa8f190cd9d7(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();



return NULL;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output66 = '';

$output66 .= '


';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper
$arguments67 = array();
$arguments67['show'] = false;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
<!--
Template for adding items to an album

Here is a list of objects / variables that can be accessed in this template:

Tx_Yag_Domain_Model_Album album               Album to add items to

@package YAG
@author Michael Knoll <mimi@kaktusteam.de>
@author Daniel Lienert <typo3@lienert.cc>
-->
';
};
$viewHelper69 = $self->getViewHelper('$viewHelper69', $renderingContext, 'Tx_PtExtlist_ViewHelpers_CommentViewHelper');
$viewHelper69->setArguments($arguments67);
$viewHelper69->setRenderingContext($renderingContext);
$viewHelper69->setRenderChildrenClosure($renderChildrenClosure68);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper

$output66 .= $viewHelper69->initializeArgumentsAndRender();

$output66 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments70 = array();
$arguments70['name'] = 'Default';
$renderChildrenClosure71 = function() {return NULL;};
$viewHelper72 = $self->getViewHelper('$viewHelper72', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper72->setArguments($arguments70);
$viewHelper72->setRenderingContext($renderingContext);
$viewHelper72->setRenderChildrenClosure($renderChildrenClosure71);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output66 .= $viewHelper72->initializeArgumentsAndRender();

$output66 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments73 = array();
$arguments73['name'] = 'main';
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output75 = '';

$output75 .= '

<script>
    jQuery(function() {
        jQuery( "#tabs" ).tabs();
    });
</script>

<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments76 = array();
$arguments76['key'] = 'tx_yag_controller_album_addItems.header';
// Rendering Array
$array77 = array();
$array77['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'name', $renderingContext);
$arguments76['arguments'] = $array77;
$arguments76['id'] = NULL;
$arguments76['default'] = NULL;
$arguments76['htmlEscape'] = NULL;
$arguments76['extensionName'] = NULL;
$renderChildrenClosure78 = function() {return NULL;};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure78, $renderingContext);

$output75 .= '</h2>

<div id="tabs">
    <ul>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments79 = array();
// Rendering Boolean node
$arguments79['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.upload.dragNDrop.available', $renderingContext));
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output81 = '';

$output81 .= '
            <li><a href="#tabs-DragDrop">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments82 = array();
$arguments82['key'] = 'tx_yag_controller_album_addItems.headerDragDrop';
$arguments82['id'] = NULL;
$arguments82['default'] = NULL;
$arguments82['htmlEscape'] = NULL;
$arguments82['arguments'] = NULL;
$arguments82['extensionName'] = NULL;
$renderChildrenClosure83 = function() {return NULL;};

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '</a></li>
        ';
return $output81;
};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output75 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments84 = array();
// Rendering Boolean node
$arguments84['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.upload.multiFile.available', $renderingContext));
$arguments84['then'] = NULL;
$arguments84['else'] = NULL;
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output86 = '';

$output86 .= '
            <li><a href="#tabs-1">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments87 = array();
$arguments87['key'] = 'tx_yag_controller_album_addItems.headerMultifile';
$arguments87['id'] = NULL;
$arguments87['default'] = NULL;
$arguments87['htmlEscape'] = NULL;
$arguments87['arguments'] = NULL;
$arguments87['extensionName'] = NULL;
$renderChildrenClosure88 = function() {return NULL;};

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output86 .= '</a></li>
        ';
return $output86;
};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output75 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments89 = array();
// Rendering Boolean node
$arguments89['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.upload.zipUpload.available', $renderingContext));
$arguments89['then'] = NULL;
$arguments89['else'] = NULL;
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output91 = '';

$output91 .= '
            <li><a href="#tabs-2">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments92 = array();
$arguments92['key'] = 'tx_yag_controller_album_addItems.headerZipUpload';
$arguments92['id'] = NULL;
$arguments92['default'] = NULL;
$arguments92['htmlEscape'] = NULL;
$arguments92['arguments'] = NULL;
$arguments92['extensionName'] = NULL;
$renderChildrenClosure93 = function() {return NULL;};

$output91 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output91 .= '</a></li>
        ';
return $output91;
};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output75 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments94 = array();
// Rendering Boolean node
$arguments94['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.upload.directory.available', $renderingContext));
$arguments94['then'] = NULL;
$arguments94['else'] = NULL;
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output96 = '';

$output96 .= '
            <li><a href="#tabs-3">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments97 = array();
$arguments97['key'] = 'tx_yag_controller_album_addItems.headerDirectoryOnServer';
$arguments97['id'] = NULL;
$arguments97['default'] = NULL;
$arguments97['htmlEscape'] = NULL;
$arguments97['arguments'] = NULL;
$arguments97['extensionName'] = NULL;
$renderChildrenClosure98 = function() {return NULL;};

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '</a></li>
        ';
return $output96;
};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output75 .= '
    </ul>


    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments99 = array();
// Rendering Boolean node
$arguments99['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.upload.dragNDrop.available', $renderingContext));
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output101 = '';

$output101 .= '
        <div id="tabs-DragDrop">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments102 = array();
$arguments102['partial'] = 'Import/DragNDrop';
// Rendering Array
$array103 = array();
$array103['album'] = $currentVariableContainer->getOrNull('album');
$array103['config'] = $currentVariableContainer->getOrNull('config');
$arguments102['arguments'] = $array103;
$arguments102['section'] = NULL;
$arguments102['optional'] = false;
$renderChildrenClosure104 = function() {return NULL;};

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments102, $renderChildrenClosure104, $renderingContext);

$output101 .= '
        </div>
    ';
return $output101;
};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output75 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments105 = array();
// Rendering Boolean node
$arguments105['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.upload.multiFile.available', $renderingContext));
$arguments105['then'] = NULL;
$arguments105['else'] = NULL;
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output107 = '';

$output107 .= '
        <div id="tabs-1">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments108 = array();
$arguments108['partial'] = 'Import/ImportByMultifileForm';
// Rendering Array
$array109 = array();
$array109['album'] = $currentVariableContainer->getOrNull('album');
$arguments108['arguments'] = $array109;
$arguments108['section'] = NULL;
$arguments108['optional'] = false;
$renderChildrenClosure110 = function() {return NULL;};

$output107 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments108, $renderChildrenClosure110, $renderingContext);

$output107 .= '
        </div>
    ';
return $output107;
};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output75 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments111 = array();
// Rendering Boolean node
$arguments111['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.upload.zipUpload.available', $renderingContext));
$arguments111['then'] = NULL;
$arguments111['else'] = NULL;
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output113 = '';

$output113 .= '
        <div id="tabs-2">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments114 = array();
$arguments114['partial'] = 'Import/ImportByZipForm';
// Rendering Array
$array115 = array();
$array115['album'] = $currentVariableContainer->getOrNull('album');
$array115['zipImportAvailable'] = $currentVariableContainer->getOrNull('zipImportAvailable');
$arguments114['arguments'] = $array115;
$arguments114['section'] = NULL;
$arguments114['optional'] = false;
$renderChildrenClosure116 = function() {return NULL;};

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments114, $renderChildrenClosure116, $renderingContext);

$output113 .= '
        </div>
    ';
return $output113;
};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output75 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments117 = array();
// Rendering Boolean node
$arguments117['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.upload.directory.available', $renderingContext));
$arguments117['then'] = NULL;
$arguments117['else'] = NULL;
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output119 = '';

$output119 .= '
        <div id="tabs-3">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments120 = array();
$arguments120['partial'] = 'Import/ImportByDirectoryForm';
// Rendering Array
$array121 = array();
$array121['album'] = $currentVariableContainer->getOrNull('album');
$arguments120['arguments'] = $array121;
$arguments120['section'] = NULL;
$arguments120['optional'] = false;
$renderChildrenClosure122 = function() {return NULL;};

$output119 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments120, $renderChildrenClosure122, $renderingContext);

$output119 .= '
        </div>
    ';
return $output119;
};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output75 .= '
</div>

<div id="resolutionList">

</div>

<div class="yag-buttonLine">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments123 = array();
$arguments123['action'] = 'submitFilter';
$arguments123['class'] = 'btn btn-default';
$arguments123['controller'] = 'ItemList';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments124 = array();
$arguments124['object'] = $currentVariableContainer->getOrNull('yagContext');
$output125 = '';

$output125 .= 'albumUid:';

$output125 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments124['arguments'] = $output125;
$arguments124['nameSpace'] = '';
$renderChildrenClosure126 = function() {return NULL;};
$viewHelper127 = $self->getViewHelper('$viewHelper127', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper127->setArguments($arguments124);
$viewHelper127->setRenderingContext($renderingContext);
$viewHelper127->setRenderChildrenClosure($renderChildrenClosure126);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments123['arguments'] = $viewHelper127->initializeArgumentsAndRender();
$arguments123['additionalAttributes'] = NULL;
$arguments123['data'] = NULL;
$arguments123['extensionName'] = NULL;
$arguments123['pluginName'] = NULL;
$arguments123['pageUid'] = NULL;
$arguments123['pageType'] = 0;
$arguments123['noCache'] = false;
$arguments123['noCacheHash'] = false;
$arguments123['section'] = '';
$arguments123['format'] = '';
$arguments123['linkAccessRestrictedPages'] = false;
$arguments123['additionalParams'] = array (
);
$arguments123['absolute'] = false;
$arguments123['addQueryString'] = false;
$arguments123['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments123['addQueryStringMethod'] = NULL;
$arguments123['dir'] = NULL;
$arguments123['id'] = NULL;
$arguments123['lang'] = NULL;
$arguments123['style'] = NULL;
$arguments123['title'] = NULL;
$arguments123['accesskey'] = NULL;
$arguments123['tabindex'] = NULL;
$arguments123['onclick'] = NULL;
$arguments123['name'] = NULL;
$arguments123['rel'] = NULL;
$arguments123['rev'] = NULL;
$arguments123['target'] = NULL;
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output129 = '';

$output129 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments130 = array();
$arguments130['key'] = 'tx_yag_controller_album_addItems.backToItemList';
$arguments130['id'] = NULL;
$arguments130['default'] = NULL;
$arguments130['htmlEscape'] = NULL;
$arguments130['arguments'] = NULL;
$arguments130['extensionName'] = NULL;
$renderChildrenClosure131 = function() {return NULL;};

$output129 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '
	';
return $output129;
};
$viewHelper132 = $self->getViewHelper('$viewHelper132', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper132->setArguments($arguments123);
$viewHelper132->setRenderingContext($renderingContext);
$viewHelper132->setRenderChildrenClosure($renderChildrenClosure128);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output75 .= $viewHelper132->initializeArgumentsAndRender();

$output75 .= '
</div>

';
return $output75;
};

$output66 .= '';

$output66 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments133 = array();
$arguments133['name'] = 'beButtonsLeft';
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output135 = '';

$output135 .= '
    <div class="buttongroup">
	    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments136 = array();
$arguments136['action'] = 'submitFilter';
$arguments136['controller'] = 'ItemList';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments137 = array();
$arguments137['object'] = $currentVariableContainer->getOrNull('yagContext');
$output138 = '';

$output138 .= 'albumUid:';

$output138 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments137['arguments'] = $output138;
$arguments137['nameSpace'] = '';
$renderChildrenClosure139 = function() {return NULL;};
$viewHelper140 = $self->getViewHelper('$viewHelper140', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper140->setArguments($arguments137);
$viewHelper140->setRenderingContext($renderingContext);
$viewHelper140->setRenderChildrenClosure($renderChildrenClosure139);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments136['arguments'] = $viewHelper140->initializeArgumentsAndRender();
$arguments136['additionalAttributes'] = NULL;
$arguments136['data'] = NULL;
$arguments136['extensionName'] = NULL;
$arguments136['pluginName'] = NULL;
$arguments136['pageUid'] = NULL;
$arguments136['pageType'] = 0;
$arguments136['noCache'] = false;
$arguments136['noCacheHash'] = false;
$arguments136['section'] = '';
$arguments136['format'] = '';
$arguments136['linkAccessRestrictedPages'] = false;
$arguments136['additionalParams'] = array (
);
$arguments136['absolute'] = false;
$arguments136['addQueryString'] = false;
$arguments136['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments136['addQueryStringMethod'] = NULL;
$arguments136['class'] = NULL;
$arguments136['dir'] = NULL;
$arguments136['id'] = NULL;
$arguments136['lang'] = NULL;
$arguments136['style'] = NULL;
$arguments136['title'] = NULL;
$arguments136['accesskey'] = NULL;
$arguments136['tabindex'] = NULL;
$arguments136['onclick'] = NULL;
$arguments136['name'] = NULL;
$arguments136['rel'] = NULL;
$arguments136['rev'] = NULL;
$arguments136['target'] = NULL;
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
		    <span class="t3-icon t3-icon-actions t3-icon-actions-document t3-icon-document-close">&nbsp;</span>
		';
};
$viewHelper142 = $self->getViewHelper('$viewHelper142', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper142->setArguments($arguments136);
$viewHelper142->setRenderingContext($renderingContext);
$viewHelper142->setRenderChildrenClosure($renderChildrenClosure141);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output135 .= $viewHelper142->initializeArgumentsAndRender();

$output135 .= '
	</div>
';
return $output135;
};

$output66 .= '';

$output66 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments143 = array();
$arguments143['name'] = 'feEdit';
$renderChildrenClosure144 = function() {return NULL;};

$output66 .= '';


return $output66;
}


}
#1461666513    42058     