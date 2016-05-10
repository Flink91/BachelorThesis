<?php
class FluidCache_Yag_Gallery_partial_EXT_yag_Resources_Private_Templates_Themes_Backend_Gallery_Partials_IndexTabGallerySettings_html_19010fde705070d032c70f3150aa1e8a0762231b extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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




<h3>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'gallery.edit.header';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments3 = array();
$arguments3['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'name', $renderingContext);
$arguments3['keepQuotes'] = false;
$arguments3['encoding'] = NULL;
$arguments3['doubleEncode'] = true;
$renderChildrenClosure4 = function() {return NULL;};
$value5 = ($arguments3['value'] !== NULL ? $arguments3['value'] : $renderChildrenClosure4());

$output0 .= (!is_string($value5) ? $value5 : htmlspecialchars($value5, ($arguments3['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments3['encoding'] !== NULL ? $arguments3['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments3['doubleEncode']));

$output0 .= '
</h3>

<p class="bodytext">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments6 = array();
$arguments6['key'] = 'gallery.edit.infotext';
$arguments6['id'] = NULL;
$arguments6['default'] = NULL;
$arguments6['htmlEscape'] = NULL;
$arguments6['arguments'] = NULL;
$arguments6['extensionName'] = NULL;
$renderChildrenClosure7 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
</p><br/>
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments8 = array();
$arguments8['partial'] = 'FormErrors';
// Rendering Array
$array9 = array();
$array9['for'] = 'gallery';
$arguments8['arguments'] = $array9;
$arguments8['section'] = NULL;
$arguments8['optional'] = false;
$renderChildrenClosure10 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments8, $renderChildrenClosure10, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments11 = array();
$arguments11['method'] = 'post';
$arguments11['controller'] = 'Gallery';
$arguments11['action'] = 'update';
$arguments11['name'] = 'gallery';
$arguments11['object'] = $currentVariableContainer->getOrNull('gallery');
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['arguments'] = array (
);
$arguments11['extensionName'] = NULL;
$arguments11['pluginName'] = NULL;
$arguments11['pageUid'] = NULL;
$arguments11['pageType'] = 0;
$arguments11['noCache'] = false;
$arguments11['noCacheHash'] = false;
$arguments11['section'] = '';
$arguments11['format'] = '';
$arguments11['additionalParams'] = array (
);
$arguments11['absolute'] = false;
$arguments11['addQueryString'] = false;
$arguments11['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments11['fieldNamePrefix'] = NULL;
$arguments11['actionUri'] = NULL;
$arguments11['objectName'] = NULL;
$arguments11['hiddenFieldClassName'] = NULL;
$arguments11['enctype'] = NULL;
$arguments11['onreset'] = NULL;
$arguments11['onsubmit'] = NULL;
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output13 = '';

$output13 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments14 = array();
$arguments14['partial'] = 'Gallery/FormFields';
// Rendering Array
$array15 = array();
$array15['gallery'] = $currentVariableContainer->getOrNull('gallery');
$array15['config'] = $currentVariableContainer->getOrNull('config');
$arguments14['arguments'] = $array15;
$arguments14['section'] = NULL;
$arguments14['optional'] = false;
$renderChildrenClosure16 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments14, $renderChildrenClosure16, $renderingContext);

$output13 .= '

    <div class="yag-buttonLine">
		<span class="yag-button">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments17 = array();
$arguments17['class'] = 'btn btn-default';
$output18 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments19 = array();
$arguments19['key'] = 'tx_yag_general.save';
$arguments19['default'] = 'Save';
$arguments19['id'] = NULL;
$arguments19['htmlEscape'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$renderChildrenClosure20 = function() {return NULL;};

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments21 = array();
$arguments21['key'] = 'tx_yag_general.gallery';
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['htmlEscape'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$renderChildrenClosure22 = function() {return NULL;};

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);
$arguments17['value'] = $output18;
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['name'] = NULL;
$arguments17['property'] = NULL;
$arguments17['disabled'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$renderChildrenClosure23 = function() {return NULL;};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper24->setArguments($arguments17);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output13 .= $viewHelper24->initializeArgumentsAndRender();

$output13 .= '
		</span>
    </div>
';
return $output13;
};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper25->setArguments($arguments11);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper25->initializeArgumentsAndRender();

$output0 .= '

<div class="yag-galleryedit-commands">
    <a href="';
// Rendering ViewHelper DL\Yag\ViewHelpers\Backend\EditRecordUrlViewHelper
$arguments26 = array();
$arguments26['entity'] = $currentVariableContainer->getOrNull('gallery');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments27 = array();
$arguments27['action'] = 'index';
// Rendering Array
$array28 = array();
$array28['id'] = $currentVariableContainer->getOrNull('currentPid');
$arguments27['additionalParams'] = $array28;
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments29 = array();
$arguments29['object'] = $currentVariableContainer->getOrNull('yagContext');
$output30 = '';

$output30 .= 'galleryUid:';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments31 = array();
$arguments31['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'uid', $renderingContext);
$arguments31['keepQuotes'] = false;
$arguments31['encoding'] = NULL;
$arguments31['doubleEncode'] = true;
$renderChildrenClosure32 = function() {return NULL;};
$value33 = ($arguments31['value'] !== NULL ? $arguments31['value'] : $renderChildrenClosure32());

$output30 .= (!is_string($value33) ? $value33 : htmlspecialchars($value33, ($arguments31['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments31['encoding'] !== NULL ? $arguments31['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments31['doubleEncode']));
$arguments29['arguments'] = $output30;
$arguments29['nameSpace'] = '';
$renderChildrenClosure34 = function() {return NULL;};
$viewHelper35 = $self->getViewHelper('$viewHelper35', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper35->setArguments($arguments29);
$viewHelper35->setRenderingContext($renderingContext);
$viewHelper35->setRenderChildrenClosure($renderChildrenClosure34);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments27['arguments'] = $viewHelper35->initializeArgumentsAndRender();
$arguments27['controller'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['pluginName'] = NULL;
$arguments27['pageUid'] = NULL;
$arguments27['pageType'] = 0;
$arguments27['noCache'] = false;
$arguments27['noCacheHash'] = false;
$arguments27['section'] = '';
$arguments27['format'] = '';
$arguments27['linkAccessRestrictedPages'] = false;
$arguments27['absolute'] = false;
$arguments27['addQueryString'] = false;
$arguments27['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments27['addQueryStringMethod'] = NULL;
$renderChildrenClosure36 = function() {return NULL;};
$viewHelper37 = $self->getViewHelper('$viewHelper37', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper37->setArguments($arguments27);
$viewHelper37->setRenderingContext($renderingContext);
$viewHelper37->setRenderChildrenClosure($renderChildrenClosure36);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments26['returnUrl'] = $viewHelper37->initializeArgumentsAndRender();
$renderChildrenClosure38 = function() {return NULL;};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'DL\Yag\ViewHelpers\Backend\EditRecordUrlViewHelper');
$viewHelper39->setArguments($arguments26);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure38);
// End of ViewHelper DL\Yag\ViewHelpers\Backend\EditRecordUrlViewHelper

$output0 .= $viewHelper39->initializeArgumentsAndRender();

$output0 .= '">
        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments40 = array();
$arguments40['identifier'] = 'actions-document-open';
$arguments40['size'] = 'small';
$arguments40['overlay'] = NULL;
$arguments40['state'] = 'default';
$arguments40['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure41 = function() {return NULL;};

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments42 = array();
$arguments42['key'] = 'tx_yag_controller_item.editAlbumInListModule';
$arguments42['id'] = NULL;
$arguments42['default'] = NULL;
$arguments42['htmlEscape'] = NULL;
$arguments42['arguments'] = NULL;
$arguments42['extensionName'] = NULL;
$renderChildrenClosure43 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output0 .= '
    </a>
</div>';


return $output0;
}


}
#1461666467    12959     