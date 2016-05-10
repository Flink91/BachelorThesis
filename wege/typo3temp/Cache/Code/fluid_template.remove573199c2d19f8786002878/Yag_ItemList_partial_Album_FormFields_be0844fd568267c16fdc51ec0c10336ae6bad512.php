<?php
class FluidCache_Yag_ItemList_partial_Album_FormFields_be0844fd568267c16fdc51ec0c10336ae6bad512 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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




<div class="outer-wrapper">
    <label for="tx-yag-album-name">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'tx_yag_domain_model_album.name';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
        <span class="required">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments3 = array();
$arguments3['key'] = 'tx_yag_general.required';
$arguments3['default'] = '(required)';
$arguments3['id'] = NULL;
$arguments3['htmlEscape'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$renderChildrenClosure4 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '</span>
    </label>
    <div class="outer-field-wrapper">
        <div class="field-wrapper type-text">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments5 = array();
$arguments5['property'] = 'name';
$arguments5['id'] = 'tx-yag-album-name';
$arguments5['additionalAttributes'] = NULL;
$arguments5['data'] = NULL;
$arguments5['required'] = false;
$arguments5['type'] = 'text';
$arguments5['name'] = NULL;
$arguments5['value'] = NULL;
$arguments5['autofocus'] = NULL;
$arguments5['disabled'] = NULL;
$arguments5['maxlength'] = NULL;
$arguments5['readonly'] = NULL;
$arguments5['size'] = NULL;
$arguments5['placeholder'] = NULL;
$arguments5['pattern'] = NULL;
$arguments5['errorClass'] = 'f3-form-error';
$arguments5['class'] = NULL;
$arguments5['dir'] = NULL;
$arguments5['lang'] = NULL;
$arguments5['style'] = NULL;
$arguments5['title'] = NULL;
$arguments5['accesskey'] = NULL;
$arguments5['tabindex'] = NULL;
$arguments5['onclick'] = NULL;
$renderChildrenClosure6 = function() {return NULL;};
$viewHelper7 = $self->getViewHelper('$viewHelper7', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper7->setArguments($arguments5);
$viewHelper7->setRenderingContext($renderingContext);
$viewHelper7->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper7->initializeArgumentsAndRender();

$output0 .= '
        </div>
    </div>
</div>


<div class="outer-wrapper">
    <label for="tx-yag-album-galleries">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments8 = array();
$arguments8['key'] = 'tx_yag_domain_model_gallery';
$arguments8['id'] = NULL;
$arguments8['default'] = NULL;
$arguments8['htmlEscape'] = NULL;
$arguments8['arguments'] = NULL;
$arguments8['extensionName'] = NULL;
$renderChildrenClosure9 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
    </label>
    <div class="outer-field-wrapper">
        <div class="field-wrapper type-text">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments10 = array();
$arguments10['id'] = 'tx-yag-album-galleries';
$arguments10['property'] = 'gallery';
$arguments10['options'] = $currentVariableContainer->getOrNull('selectableGalleries');
$arguments10['optionValueField'] = 'uid';
$arguments10['optionLabelField'] = 'name';
$arguments10['value'] = $currentVariableContainer->getOrNull('selectedGallery');
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['name'] = NULL;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['size'] = NULL;
$arguments10['disabled'] = NULL;
$arguments10['sortByOptionLabel'] = false;
$arguments10['selectAllByDefault'] = false;
$arguments10['errorClass'] = 'f3-form-error';
$arguments10['prependOptionLabel'] = NULL;
$arguments10['prependOptionValue'] = NULL;
$arguments10['multiple'] = false;
$renderChildrenClosure11 = function() {return NULL;};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output0 .= $viewHelper12->initializeArgumentsAndRender();

$output0 .= '
        </div>
    </div>
</div>


<div class="outer-wrapper">
    <label for="tx-yag-album-description">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments13 = array();
$arguments13['key'] = 'tx_yag_domain_model_album.description';
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$renderChildrenClosure14 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
    </label>
    <div class="outer-field-wrapper">
        <div class="field-wrapper type-text">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper
$arguments15 = array();
$arguments15['id'] = 'tx-yag-album-description';
$arguments15['property'] = 'description';
$arguments15['cols'] = '40';
$arguments15['rows'] = '15';
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['name'] = NULL;
$arguments15['value'] = NULL;
$arguments15['autofocus'] = NULL;
$arguments15['disabled'] = NULL;
$arguments15['placeholder'] = NULL;
$arguments15['errorClass'] = 'f3-form-error';
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};
$viewHelper17 = $self->getViewHelper('$viewHelper17', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper');
$viewHelper17->setArguments($arguments15);
$viewHelper17->setRenderingContext($renderingContext);
$viewHelper17->setRenderChildrenClosure($renderChildrenClosure16);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper

$output0 .= $viewHelper17->initializeArgumentsAndRender();

$output0 .= '
            <br/>
        </div>
    </div>
</div>

<div class="outer-wrapper">
    <label for="tx-yag-album-date">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments18 = array();
$arguments18['key'] = 'tx_yag_domain_model_album.date';
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['htmlEscape'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$renderChildrenClosure19 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output0 .= '
    </label>
    <div class="outer-field-wrapper">
        <div class="field-wrapper type-text">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments20 = array();
$arguments20['name'] = 'album[date][date]';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments21 = array();
$arguments21['date'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'date', $renderingContext);
$arguments21['format'] = '';
$arguments21['base'] = NULL;
$renderChildrenClosure22 = function() {return NULL;};
$arguments20['value'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);
$arguments20['id'] = 'tx-yag-album-date';
$arguments20['additionalAttributes'] = NULL;
$arguments20['data'] = NULL;
$arguments20['required'] = false;
$arguments20['type'] = 'text';
$arguments20['property'] = NULL;
$arguments20['autofocus'] = NULL;
$arguments20['disabled'] = NULL;
$arguments20['maxlength'] = NULL;
$arguments20['readonly'] = NULL;
$arguments20['size'] = NULL;
$arguments20['placeholder'] = NULL;
$arguments20['pattern'] = NULL;
$arguments20['errorClass'] = 'f3-form-error';
$arguments20['class'] = NULL;
$arguments20['dir'] = NULL;
$arguments20['lang'] = NULL;
$arguments20['style'] = NULL;
$arguments20['title'] = NULL;
$arguments20['accesskey'] = NULL;
$arguments20['tabindex'] = NULL;
$arguments20['onclick'] = NULL;
$renderChildrenClosure23 = function() {return NULL;};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper24->setArguments($arguments20);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper24->initializeArgumentsAndRender();

$output0 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments25 = array();
$arguments25['name'] = 'album[date][dateFormat]';
$arguments25['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'extensionConfig.sysDateFormat', $renderingContext);
$arguments25['additionalAttributes'] = NULL;
$arguments25['data'] = NULL;
$arguments25['property'] = NULL;
$arguments25['class'] = NULL;
$arguments25['dir'] = NULL;
$arguments25['id'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['title'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['tabindex'] = NULL;
$arguments25['onclick'] = NULL;
$renderChildrenClosure26 = function() {return NULL;};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper27->setArguments($arguments25);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output0 .= $viewHelper27->initializeArgumentsAndRender();

$output0 .= '
        </div>
    </div>
</div>

<div class="outer-wrapper">
    <label for="tx-yag-album-hide">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments28 = array();
$arguments28['key'] = 'tx_yag_domain_model_album.hide';
$arguments28['id'] = NULL;
$arguments28['default'] = NULL;
$arguments28['htmlEscape'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$renderChildrenClosure29 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output0 .= '
    </label>
    <div class="outer-field-wrapper">
        <div class="field-wrapper type-text">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$arguments30 = array();
$arguments30['id'] = 'tx-yag-album-hide';
$arguments30['property'] = 'hidden';
$arguments30['value'] = '1';
// Rendering Boolean node
$arguments30['checked'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'hidden', $renderingContext));
$arguments30['additionalAttributes'] = NULL;
$arguments30['data'] = NULL;
$arguments30['multiple'] = false;
$arguments30['name'] = NULL;
$arguments30['disabled'] = NULL;
$arguments30['errorClass'] = 'f3-form-error';
$arguments30['class'] = NULL;
$arguments30['dir'] = NULL;
$arguments30['lang'] = NULL;
$arguments30['style'] = NULL;
$arguments30['title'] = NULL;
$arguments30['accesskey'] = NULL;
$arguments30['tabindex'] = NULL;
$arguments30['onclick'] = NULL;
$renderChildrenClosure31 = function() {return NULL;};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper');
$viewHelper32->setArguments($arguments30);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure31);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper

$output0 .= $viewHelper32->initializeArgumentsAndRender();

$output0 .= '
        </div>
    </div>
</div>

<div class="yag-albumedit-commands">
    <a href="';
// Rendering ViewHelper DL\Yag\ViewHelpers\Backend\EditRecordUrlViewHelper
$arguments33 = array();
$arguments33['entity'] = $currentVariableContainer->getOrNull('album');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments34 = array();
$arguments34['action'] = 'submitFilter';
// Rendering Array
$array35 = array();
$array35['id'] = $currentVariableContainer->getOrNull('currentPid');
$arguments34['additionalParams'] = $array35;
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments36 = array();
$arguments36['object'] = $currentVariableContainer->getOrNull('yagContext');
$output37 = '';

$output37 .= 'albumUid:';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments38 = array();
$arguments38['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments38['keepQuotes'] = false;
$arguments38['encoding'] = NULL;
$arguments38['doubleEncode'] = true;
$renderChildrenClosure39 = function() {return NULL;};
$value40 = ($arguments38['value'] !== NULL ? $arguments38['value'] : $renderChildrenClosure39());

$output37 .= (!is_string($value40) ? $value40 : htmlspecialchars($value40, ($arguments38['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments38['encoding'] !== NULL ? $arguments38['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments38['doubleEncode']));
$arguments36['arguments'] = $output37;
$arguments36['nameSpace'] = '';
$renderChildrenClosure41 = function() {return NULL;};
$viewHelper42 = $self->getViewHelper('$viewHelper42', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper42->setArguments($arguments36);
$viewHelper42->setRenderingContext($renderingContext);
$viewHelper42->setRenderChildrenClosure($renderChildrenClosure41);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments34['arguments'] = $viewHelper42->initializeArgumentsAndRender();
$arguments34['controller'] = NULL;
$arguments34['extensionName'] = NULL;
$arguments34['pluginName'] = NULL;
$arguments34['pageUid'] = NULL;
$arguments34['pageType'] = 0;
$arguments34['noCache'] = false;
$arguments34['noCacheHash'] = false;
$arguments34['section'] = '';
$arguments34['format'] = '';
$arguments34['linkAccessRestrictedPages'] = false;
$arguments34['absolute'] = false;
$arguments34['addQueryString'] = false;
$arguments34['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments34['addQueryStringMethod'] = NULL;
$renderChildrenClosure43 = function() {return NULL;};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper44->setArguments($arguments34);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments33['returnUrl'] = $viewHelper44->initializeArgumentsAndRender();
$renderChildrenClosure45 = function() {return NULL;};
$viewHelper46 = $self->getViewHelper('$viewHelper46', $renderingContext, 'DL\Yag\ViewHelpers\Backend\EditRecordUrlViewHelper');
$viewHelper46->setArguments($arguments33);
$viewHelper46->setRenderingContext($renderingContext);
$viewHelper46->setRenderChildrenClosure($renderChildrenClosure45);
// End of ViewHelper DL\Yag\ViewHelpers\Backend\EditRecordUrlViewHelper

$output0 .= $viewHelper46->initializeArgumentsAndRender();

$output0 .= '">
        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments47 = array();
$arguments47['identifier'] = 'actions-document-open';
$arguments47['size'] = 'small';
$arguments47['overlay'] = NULL;
$arguments47['state'] = 'default';
$arguments47['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure48 = function() {return NULL;};

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments49 = array();
$arguments49['key'] = 'tx_yag_controller_item.editAlbumInListModule';
$arguments49['id'] = NULL;
$arguments49['default'] = NULL;
$arguments49['htmlEscape'] = NULL;
$arguments49['arguments'] = NULL;
$arguments49['extensionName'] = NULL;
$renderChildrenClosure50 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output0 .= '
    </a>
</div>

';


return $output0;
}


}
#1461666541    18691     