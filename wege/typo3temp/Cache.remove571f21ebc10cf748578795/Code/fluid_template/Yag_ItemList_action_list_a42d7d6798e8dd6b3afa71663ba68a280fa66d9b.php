<?php
class FluidCache_Yag_ItemList_action_list_a42d7d6798e8dd6b3afa71663ba68a280fa66d9b extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

	';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_IncludeViewHelper
$arguments1 = array();
$arguments1['library'] = 'lightBox';
$arguments1['file'] = '';
$arguments1['position'] = 'footer';
$renderChildrenClosure2 = function() {return NULL;};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_IncludeViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_IncludeViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '
	';
// Rendering ViewHelper Tx_Yag_ViewHelpers_CSS_IncludeViewHelper
$arguments4 = array();
$arguments4['library'] = 'lightBox';
$arguments4['file'] = '';
$renderChildrenClosure5 = function() {return NULL;};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'Tx_Yag_ViewHelpers_CSS_IncludeViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper Tx_Yag_ViewHelpers_CSS_IncludeViewHelper

$output0 .= $viewHelper6->initializeArgumentsAndRender();

$output0 .= '

	';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper
$arguments7 = array();
$arguments7['templatePath'] = 'EXT:yag/Resources/Private/JSTemplates/ItemAdminList.js';
// Rendering Array
$array8 = array();
$array8['pagerOffset'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'firstItemIndex', $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments9 = array();
$arguments9['controller'] = 'Ajax';
$arguments9['action'] = NULL;
$arguments9['arguments'] = array (
);
$arguments9['extensionName'] = NULL;
$arguments9['pluginName'] = NULL;
$arguments9['pageUid'] = NULL;
$arguments9['pageType'] = 0;
$arguments9['noCache'] = false;
$arguments9['noCacheHash'] = false;
$arguments9['section'] = '';
$arguments9['format'] = '';
$arguments9['linkAccessRestrictedPages'] = false;
$arguments9['additionalParams'] = array (
);
$arguments9['absolute'] = false;
$arguments9['addQueryString'] = false;
$arguments9['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments9['addQueryStringMethod'] = NULL;
$renderChildrenClosure10 = function() {return NULL;};
$viewHelper11 = $self->getViewHelper('$viewHelper11', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper11->setArguments($arguments9);
$viewHelper11->setRenderingContext($renderingContext);
$viewHelper11->setRenderChildrenClosure($renderChildrenClosure10);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$array8['ajaxBaseURL'] = $viewHelper11->initializeArgumentsAndRender();
$arguments7['arguments'] = $array8;
$arguments7['position'] = 'current';
$arguments7['type'] = 'text/javascript';
$renderChildrenClosure12 = function() {return NULL;};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper');
$viewHelper13->setArguments($arguments7);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper

$output0 .= $viewHelper13->initializeArgumentsAndRender();

$output0 .= '
	';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper
$arguments14 = array();
$arguments14['templatePath'] = 'EXT:yag/Resources/Public/Js/JQuery/jquery.multiple.select.js';
$arguments14['arguments'] = array (
);
$arguments14['position'] = 'current';
$arguments14['type'] = 'text/javascript';
$renderChildrenClosure15 = function() {return NULL;};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper');
$viewHelper16->setArguments($arguments14);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper

$output0 .= $viewHelper16->initializeArgumentsAndRender();

$output0 .= '
	';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper
$arguments17 = array();
$arguments17['templatePath'] = 'EXT:yag/Resources/Public/Js/LightBox.js';
$arguments17['arguments'] = array (
);
$arguments17['position'] = 'current';
$arguments17['type'] = 'text/javascript';
$renderChildrenClosure18 = function() {return NULL;};
$viewHelper19 = $self->getViewHelper('$viewHelper19', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper');
$viewHelper19->setArguments($arguments17);
$viewHelper19->setRenderingContext($renderingContext);
$viewHelper19->setRenderChildrenClosure($renderChildrenClosure18);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper

$output0 .= $viewHelper19->initializeArgumentsAndRender();

$output0 .= '
    ';

$output0 .= '
	<script>
		$(document).ready(function() {
	        jQuery( "#tabs" ).tabs({
                cookie: {}
            });
			$(\'.yag-multiselect\').multipleSelect({
					placeholder: "[No Category selected]"
			});
	    });
	</script>
    ';

$output0 .= '

	<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments20 = array();
$arguments20['key'] = 'tx_yag_controller_album.edit.header';
$arguments20['id'] = NULL;
$arguments20['default'] = NULL;
$arguments20['htmlEscape'] = NULL;
$arguments20['arguments'] = NULL;
$arguments20['extensionName'] = NULL;
$renderChildrenClosure21 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments22 = array();
$arguments22['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'name', $renderingContext);
$arguments22['keepQuotes'] = false;
$arguments22['encoding'] = NULL;
$arguments22['doubleEncode'] = true;
$renderChildrenClosure23 = function() {return NULL;};
$value24 = ($arguments22['value'] !== NULL ? $arguments22['value'] : $renderChildrenClosure23());

$output0 .= (!is_string($value24) ? $value24 : htmlspecialchars($value24, ($arguments22['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments22['encoding'] !== NULL ? $arguments22['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments22['doubleEncode']));

$output0 .= '</h2>
	
	<div id="tabs">
	    <ul>
	         <li><a href="#tabs-1">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments25 = array();
$arguments25['key'] = 'tx_yag_controller_item.imagesOverview';
$arguments25['default'] = 'Images overview';
$arguments25['id'] = NULL;
$arguments25['htmlEscape'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['extensionName'] = NULL;
$renderChildrenClosure26 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output0 .= '</a></li>
	         <li><a href="#tabs-2">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments27 = array();
$arguments27['key'] = 'tx_yag_controller_item.imagesEdit';
$arguments27['default'] = 'Images edit';
$arguments27['id'] = NULL;
$arguments27['htmlEscape'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$renderChildrenClosure28 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output0 .= '</a></li>
	         <li><a href="#tabs-3">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments29 = array();
$arguments29['key'] = 'tx_yag_controller_item.albumSettings';
$arguments29['default'] = 'Album settings';
$arguments29['id'] = NULL;
$arguments29['htmlEscape'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['extensionName'] = NULL;
$renderChildrenClosure30 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output0 .= '</a></li>
	    </ul>
	    <div id="tabs-1">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments31 = array();
// Rendering Boolean node
$arguments31['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listData'), 'count', $renderingContext));
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output33 = '';

$output33 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments34 = array();
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output36 = '';

$output36 .= '
                    <div class="tx-yag-image-admin-sortingbox">
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments37 = array();
$arguments37['key'] = 'tx_yag_controller_album.dragNdrop';
$arguments37['id'] = NULL;
$arguments37['default'] = NULL;
$arguments37['htmlEscape'] = NULL;
$arguments37['arguments'] = NULL;
$arguments37['extensionName'] = NULL;
$renderChildrenClosure38 = function() {return NULL;};

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '!</p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments39 = array();
$arguments39['action'] = 'updateSorting';
$arguments39['controller'] = 'Album';
$arguments39['additionalAttributes'] = NULL;
$arguments39['data'] = NULL;
$arguments39['arguments'] = array (
);
$arguments39['extensionName'] = NULL;
$arguments39['pluginName'] = NULL;
$arguments39['pageUid'] = NULL;
$arguments39['object'] = NULL;
$arguments39['pageType'] = 0;
$arguments39['noCache'] = false;
$arguments39['noCacheHash'] = false;
$arguments39['section'] = '';
$arguments39['format'] = '';
$arguments39['additionalParams'] = array (
);
$arguments39['absolute'] = false;
$arguments39['addQueryString'] = false;
$arguments39['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments39['fieldNamePrefix'] = NULL;
$arguments39['actionUri'] = NULL;
$arguments39['objectName'] = NULL;
$arguments39['hiddenFieldClassName'] = NULL;
$arguments39['enctype'] = NULL;
$arguments39['method'] = NULL;
$arguments39['name'] = NULL;
$arguments39['onreset'] = NULL;
$arguments39['onsubmit'] = NULL;
$arguments39['class'] = NULL;
$arguments39['dir'] = NULL;
$arguments39['id'] = NULL;
$arguments39['lang'] = NULL;
$arguments39['style'] = NULL;
$arguments39['title'] = NULL;
$arguments39['accesskey'] = NULL;
$arguments39['tabindex'] = NULL;
$arguments39['onclick'] = NULL;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output41 = '';

$output41 .= '
                            <p>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments42 = array();
$arguments42['name'] = 'album';
$arguments42['value'] = $currentVariableContainer->getOrNull('album');
$arguments42['additionalAttributes'] = NULL;
$arguments42['data'] = NULL;
$arguments42['property'] = NULL;
$arguments42['class'] = NULL;
$arguments42['dir'] = NULL;
$arguments42['id'] = NULL;
$arguments42['lang'] = NULL;
$arguments42['style'] = NULL;
$arguments42['title'] = NULL;
$arguments42['accesskey'] = NULL;
$arguments42['tabindex'] = NULL;
$arguments42['onclick'] = NULL;
$renderChildrenClosure43 = function() {return NULL;};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper44->setArguments($arguments42);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output41 .= $viewHelper44->initializeArgumentsAndRender();

$output41 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments45 = array();
$arguments45['key'] = 'tx_yag_controller_item.sortingByField';
$arguments45['id'] = NULL;
$arguments45['default'] = NULL;
$arguments45['htmlEscape'] = NULL;
$arguments45['arguments'] = NULL;
$arguments45['extensionName'] = NULL;
$renderChildrenClosure46 = function() {return NULL;};

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output41 .= ':
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments47 = array();
$arguments47['name'] = 'sortingField';
// Rendering Array
$array48 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments49 = array();
$arguments49['key'] = 'tx_yag_domain_model_item.title';
$arguments49['id'] = NULL;
$arguments49['default'] = NULL;
$arguments49['htmlEscape'] = NULL;
$arguments49['arguments'] = NULL;
$arguments49['extensionName'] = NULL;
$renderChildrenClosure50 = function() {return NULL;};
$array48['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments51 = array();
$arguments51['key'] = 'tx_yag_domain_model_item.date';
$arguments51['id'] = NULL;
$arguments51['default'] = NULL;
$arguments51['htmlEscape'] = NULL;
$arguments51['arguments'] = NULL;
$arguments51['extensionName'] = NULL;
$renderChildrenClosure52 = function() {return NULL;};
$array48['date'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments53 = array();
$arguments53['key'] = 'tx_yag_domain_model_item.filename';
$arguments53['id'] = NULL;
$arguments53['default'] = NULL;
$arguments53['htmlEscape'] = NULL;
$arguments53['arguments'] = NULL;
$arguments53['extensionName'] = NULL;
$renderChildrenClosure54 = function() {return NULL;};
$array48['filename'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);
$arguments47['options'] = $array48;
$arguments47['additionalAttributes'] = NULL;
$arguments47['data'] = NULL;
$arguments47['value'] = NULL;
$arguments47['property'] = NULL;
$arguments47['class'] = NULL;
$arguments47['dir'] = NULL;
$arguments47['id'] = NULL;
$arguments47['lang'] = NULL;
$arguments47['style'] = NULL;
$arguments47['title'] = NULL;
$arguments47['accesskey'] = NULL;
$arguments47['tabindex'] = NULL;
$arguments47['onclick'] = NULL;
$arguments47['size'] = NULL;
$arguments47['disabled'] = NULL;
$arguments47['optionValueField'] = NULL;
$arguments47['optionLabelField'] = NULL;
$arguments47['sortByOptionLabel'] = false;
$arguments47['selectAllByDefault'] = false;
$arguments47['errorClass'] = 'f3-form-error';
$arguments47['prependOptionLabel'] = NULL;
$arguments47['prependOptionValue'] = NULL;
$arguments47['multiple'] = false;
$renderChildrenClosure55 = function() {return NULL;};
$viewHelper56 = $self->getViewHelper('$viewHelper56', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper56->setArguments($arguments47);
$viewHelper56->setRenderingContext($renderingContext);
$viewHelper56->setRenderChildrenClosure($renderChildrenClosure55);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output41 .= $viewHelper56->initializeArgumentsAndRender();

$output41 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments57 = array();
$arguments57['key'] = 'tx_yag_controller_item.sortingWithDirection';
$arguments57['id'] = NULL;
$arguments57['default'] = NULL;
$arguments57['htmlEscape'] = NULL;
$arguments57['arguments'] = NULL;
$arguments57['extensionName'] = NULL;
$renderChildrenClosure58 = function() {return NULL;};

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output41 .= ':
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments59 = array();
$arguments59['name'] = 'sortingDirection';
// Rendering Array
$array60 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments61 = array();
$arguments61['key'] = 'tx_yag_controller_item.sortingAscending';
$arguments61['id'] = NULL;
$arguments61['default'] = NULL;
$arguments61['htmlEscape'] = NULL;
$arguments61['arguments'] = NULL;
$arguments61['extensionName'] = NULL;
$renderChildrenClosure62 = function() {return NULL;};
$array60['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments63 = array();
$arguments63['key'] = 'tx_yag_controller_item.sortingDescending';
$arguments63['id'] = NULL;
$arguments63['default'] = NULL;
$arguments63['htmlEscape'] = NULL;
$arguments63['arguments'] = NULL;
$arguments63['extensionName'] = NULL;
$renderChildrenClosure64 = function() {return NULL;};
$array60['-1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);
$arguments59['options'] = $array60;
$arguments59['additionalAttributes'] = NULL;
$arguments59['data'] = NULL;
$arguments59['value'] = NULL;
$arguments59['property'] = NULL;
$arguments59['class'] = NULL;
$arguments59['dir'] = NULL;
$arguments59['id'] = NULL;
$arguments59['lang'] = NULL;
$arguments59['style'] = NULL;
$arguments59['title'] = NULL;
$arguments59['accesskey'] = NULL;
$arguments59['tabindex'] = NULL;
$arguments59['onclick'] = NULL;
$arguments59['size'] = NULL;
$arguments59['disabled'] = NULL;
$arguments59['optionValueField'] = NULL;
$arguments59['optionLabelField'] = NULL;
$arguments59['sortByOptionLabel'] = false;
$arguments59['selectAllByDefault'] = false;
$arguments59['errorClass'] = 'f3-form-error';
$arguments59['prependOptionLabel'] = NULL;
$arguments59['prependOptionValue'] = NULL;
$arguments59['multiple'] = false;
$renderChildrenClosure65 = function() {return NULL;};
$viewHelper66 = $self->getViewHelper('$viewHelper66', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper66->setArguments($arguments59);
$viewHelper66->setRenderingContext($renderingContext);
$viewHelper66->setRenderChildrenClosure($renderChildrenClosure65);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output41 .= $viewHelper66->initializeArgumentsAndRender();

$output41 .= '
                                &nbsp;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments67 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments68 = array();
$arguments68['key'] = 'tx_yag_controller_item.changeSorting';
$arguments68['id'] = NULL;
$arguments68['default'] = NULL;
$arguments68['htmlEscape'] = NULL;
$arguments68['arguments'] = NULL;
$arguments68['extensionName'] = NULL;
$renderChildrenClosure69 = function() {return NULL;};
$arguments67['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);
$arguments67['class'] = 'btn btn-default';
$arguments67['additionalAttributes'] = NULL;
$arguments67['data'] = NULL;
$arguments67['name'] = NULL;
$arguments67['property'] = NULL;
$arguments67['disabled'] = NULL;
$arguments67['dir'] = NULL;
$arguments67['id'] = NULL;
$arguments67['lang'] = NULL;
$arguments67['style'] = NULL;
$arguments67['title'] = NULL;
$arguments67['accesskey'] = NULL;
$arguments67['tabindex'] = NULL;
$arguments67['onclick'] = NULL;
$renderChildrenClosure70 = function() {return NULL;};
$viewHelper71 = $self->getViewHelper('$viewHelper71', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper71->setArguments($arguments67);
$viewHelper71->setRenderingContext($renderingContext);
$viewHelper71->setRenderChildrenClosure($renderChildrenClosure70);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output41 .= $viewHelper71->initializeArgumentsAndRender();

$output41 .= ' <span style="color: red">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments72 = array();
$arguments72['key'] = 'tx_yag_controller_item.sortingWillBeOverwritten';
$arguments72['id'] = NULL;
$arguments72['default'] = NULL;
$arguments72['htmlEscape'] = NULL;
$arguments72['arguments'] = NULL;
$arguments72['extensionName'] = NULL;
$renderChildrenClosure73 = function() {return NULL;};

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output41 .= '</span>
                            </p>
                        ';
return $output41;
};
$viewHelper74 = $self->getViewHelper('$viewHelper74', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper74->setArguments($arguments39);
$viewHelper74->setRenderingContext($renderingContext);
$viewHelper74->setRenderChildrenClosure($renderChildrenClosure40);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output36 .= $viewHelper74->initializeArgumentsAndRender();

$output36 .= '
                    </div>
                    <div class="config-fotos yag-gallery" data-yag-gallery-settings=\'';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_JsonSettingsViewHelper
$arguments75 = array();
$arguments75['tsPath'] = 'javaScriptSettings';
$arguments75['settings'] = NULL;
$arguments75['onlyKeyValuePairs'] = false;
$renderChildrenClosure76 = function() {return NULL;};
$viewHelper77 = $self->getViewHelper('$viewHelper77', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_JsonSettingsViewHelper');
$viewHelper77->setArguments($arguments75);
$viewHelper77->setRenderingContext($renderingContext);
$viewHelper77->setRenderChildrenClosure($renderChildrenClosure76);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_JsonSettingsViewHelper

$output36 .= $viewHelper77->initializeArgumentsAndRender();

$output36 .= '\'>
                        <div id="sortable" class="ui-sortable">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments78 = array();
$arguments78['each'] = $currentVariableContainer->getOrNull('listData');
$arguments78['key'] = 'rowIndex';
$arguments78['as'] = 'listRow';
$arguments78['reverse'] = false;
$arguments78['iteration'] = NULL;
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output80 = '';

$output80 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments81 = array();
$arguments81['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.imageAdminThumbPartial', $renderingContext);
// Rendering Array
$array82 = array();
$array82['config'] = $currentVariableContainer->getOrNull('config');
$array82['album'] = $currentVariableContainer->getOrNull('album');
$array82['albums'] = $currentVariableContainer->getOrNull('albums');
$array82['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'image.value', $renderingContext);
$array82['rowIndex'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'specialValues.absoluteRowIndex', $renderingContext);
$array82['pager'] = $currentVariableContainer->getOrNull('pager');
$array82['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
$array82['currentPid'] = $currentVariableContainer->getOrNull('currentPid');
$array82['yagContext'] = $currentVariableContainer->getOrNull('yagContext');
$arguments81['arguments'] = $array82;
$arguments81['section'] = NULL;
$arguments81['optional'] = false;
$renderChildrenClosure83 = function() {return NULL;};

$output80 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments81, $renderChildrenClosure83, $renderingContext);

$output80 .= '
                            ';
return $output80;
};

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output36 .= '
                        </div>
                    </div>


                    <div style="clear:both;">&nbsp;</div>
                    <div class="tx-yag-pager">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments84 = array();
$arguments84['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.pagerPartial', $renderingContext);
// Rendering Array
$array85 = array();
$array85['controller'] = 'ItemList';
$array85['action'] = 'list';
$array85['pager'] = $currentVariableContainer->getOrNull('pager');
$array85['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments86 = array();
$arguments86['key'] = 'tx_yag_domain_model_items';
$arguments86['id'] = NULL;
$arguments86['default'] = NULL;
$arguments86['htmlEscape'] = NULL;
$arguments86['arguments'] = NULL;
$arguments86['extensionName'] = NULL;
$renderChildrenClosure87 = function() {return NULL;};
$array85['itemsText'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);
$arguments84['arguments'] = $array85;
$arguments84['section'] = NULL;
$arguments84['optional'] = false;
$renderChildrenClosure88 = function() {return NULL;};

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments84, $renderChildrenClosure88, $renderingContext);

$output36 .= '
                    </div>
                ';
return $output36;
};

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments89 = array();
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output91 = '';

$output91 .= '
                    <div>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments92 = array();
$arguments92['key'] = 'tx_yag_domain_model_album.noItemClick';
$arguments92['id'] = NULL;
$arguments92['default'] = NULL;
$arguments92['htmlEscape'] = NULL;
$arguments92['arguments'] = NULL;
$arguments92['extensionName'] = NULL;
$renderChildrenClosure93 = function() {return NULL;};

$output91 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output91 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments94 = array();
$arguments94['controller'] = 'Album';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments95 = array();
$arguments95['key'] = 'tx_yag_controller_album_addItems';
$arguments95['id'] = NULL;
$arguments95['default'] = NULL;
$arguments95['htmlEscape'] = NULL;
$arguments95['arguments'] = NULL;
$arguments95['extensionName'] = NULL;
$renderChildrenClosure96 = function() {return NULL;};
$arguments94['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);
$arguments94['action'] = 'addItems';
// Rendering Array
$array97 = array();
$array97['album'] = $currentVariableContainer->getOrNull('album');
$arguments94['arguments'] = $array97;
$arguments94['additionalAttributes'] = NULL;
$arguments94['data'] = NULL;
$arguments94['extensionName'] = NULL;
$arguments94['pluginName'] = NULL;
$arguments94['pageUid'] = NULL;
$arguments94['pageType'] = 0;
$arguments94['noCache'] = false;
$arguments94['noCacheHash'] = false;
$arguments94['section'] = '';
$arguments94['format'] = '';
$arguments94['linkAccessRestrictedPages'] = false;
$arguments94['additionalParams'] = array (
);
$arguments94['absolute'] = false;
$arguments94['addQueryString'] = false;
$arguments94['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments94['addQueryStringMethod'] = NULL;
$arguments94['class'] = NULL;
$arguments94['dir'] = NULL;
$arguments94['id'] = NULL;
$arguments94['lang'] = NULL;
$arguments94['style'] = NULL;
$arguments94['accesskey'] = NULL;
$arguments94['tabindex'] = NULL;
$arguments94['onclick'] = NULL;
$arguments94['name'] = NULL;
$arguments94['rel'] = NULL;
$arguments94['rev'] = NULL;
$arguments94['target'] = NULL;
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output99 = '';

$output99 .= '
                            <span class="t3-icon t3-icon-actions t3-icon-actions-edit t3-icon-edit-upload">&nbsp;</span>
                            <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments100 = array();
$arguments100['key'] = 'tx_yag_controller_album_addItems';
$arguments100['id'] = NULL;
$arguments100['default'] = NULL;
$arguments100['htmlEscape'] = NULL;
$arguments100['arguments'] = NULL;
$arguments100['extensionName'] = NULL;
$renderChildrenClosure101 = function() {return NULL;};

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '</span>
                        ';
return $output99;
};
$viewHelper102 = $self->getViewHelper('$viewHelper102', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper102->setArguments($arguments94);
$viewHelper102->setRenderingContext($renderingContext);
$viewHelper102->setRenderChildrenClosure($renderChildrenClosure98);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output91 .= $viewHelper102->initializeArgumentsAndRender();

$output91 .= '
                    </div>
                ';
return $output91;
};

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output33 .= '
            ';
return $output33;
};
$arguments31['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output103 = '';

$output103 .= '
                    <div class="tx-yag-image-admin-sortingbox">
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments104 = array();
$arguments104['key'] = 'tx_yag_controller_album.dragNdrop';
$arguments104['id'] = NULL;
$arguments104['default'] = NULL;
$arguments104['htmlEscape'] = NULL;
$arguments104['arguments'] = NULL;
$arguments104['extensionName'] = NULL;
$renderChildrenClosure105 = function() {return NULL;};

$output103 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output103 .= '!</p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments106 = array();
$arguments106['action'] = 'updateSorting';
$arguments106['controller'] = 'Album';
$arguments106['additionalAttributes'] = NULL;
$arguments106['data'] = NULL;
$arguments106['arguments'] = array (
);
$arguments106['extensionName'] = NULL;
$arguments106['pluginName'] = NULL;
$arguments106['pageUid'] = NULL;
$arguments106['object'] = NULL;
$arguments106['pageType'] = 0;
$arguments106['noCache'] = false;
$arguments106['noCacheHash'] = false;
$arguments106['section'] = '';
$arguments106['format'] = '';
$arguments106['additionalParams'] = array (
);
$arguments106['absolute'] = false;
$arguments106['addQueryString'] = false;
$arguments106['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments106['fieldNamePrefix'] = NULL;
$arguments106['actionUri'] = NULL;
$arguments106['objectName'] = NULL;
$arguments106['hiddenFieldClassName'] = NULL;
$arguments106['enctype'] = NULL;
$arguments106['method'] = NULL;
$arguments106['name'] = NULL;
$arguments106['onreset'] = NULL;
$arguments106['onsubmit'] = NULL;
$arguments106['class'] = NULL;
$arguments106['dir'] = NULL;
$arguments106['id'] = NULL;
$arguments106['lang'] = NULL;
$arguments106['style'] = NULL;
$arguments106['title'] = NULL;
$arguments106['accesskey'] = NULL;
$arguments106['tabindex'] = NULL;
$arguments106['onclick'] = NULL;
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output108 = '';

$output108 .= '
                            <p>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments109 = array();
$arguments109['name'] = 'album';
$arguments109['value'] = $currentVariableContainer->getOrNull('album');
$arguments109['additionalAttributes'] = NULL;
$arguments109['data'] = NULL;
$arguments109['property'] = NULL;
$arguments109['class'] = NULL;
$arguments109['dir'] = NULL;
$arguments109['id'] = NULL;
$arguments109['lang'] = NULL;
$arguments109['style'] = NULL;
$arguments109['title'] = NULL;
$arguments109['accesskey'] = NULL;
$arguments109['tabindex'] = NULL;
$arguments109['onclick'] = NULL;
$renderChildrenClosure110 = function() {return NULL;};
$viewHelper111 = $self->getViewHelper('$viewHelper111', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper111->setArguments($arguments109);
$viewHelper111->setRenderingContext($renderingContext);
$viewHelper111->setRenderChildrenClosure($renderChildrenClosure110);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output108 .= $viewHelper111->initializeArgumentsAndRender();

$output108 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments112 = array();
$arguments112['key'] = 'tx_yag_controller_item.sortingByField';
$arguments112['id'] = NULL;
$arguments112['default'] = NULL;
$arguments112['htmlEscape'] = NULL;
$arguments112['arguments'] = NULL;
$arguments112['extensionName'] = NULL;
$renderChildrenClosure113 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output108 .= ':
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments114 = array();
$arguments114['name'] = 'sortingField';
// Rendering Array
$array115 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments116 = array();
$arguments116['key'] = 'tx_yag_domain_model_item.title';
$arguments116['id'] = NULL;
$arguments116['default'] = NULL;
$arguments116['htmlEscape'] = NULL;
$arguments116['arguments'] = NULL;
$arguments116['extensionName'] = NULL;
$renderChildrenClosure117 = function() {return NULL;};
$array115['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments118 = array();
$arguments118['key'] = 'tx_yag_domain_model_item.date';
$arguments118['id'] = NULL;
$arguments118['default'] = NULL;
$arguments118['htmlEscape'] = NULL;
$arguments118['arguments'] = NULL;
$arguments118['extensionName'] = NULL;
$renderChildrenClosure119 = function() {return NULL;};
$array115['date'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments120 = array();
$arguments120['key'] = 'tx_yag_domain_model_item.filename';
$arguments120['id'] = NULL;
$arguments120['default'] = NULL;
$arguments120['htmlEscape'] = NULL;
$arguments120['arguments'] = NULL;
$arguments120['extensionName'] = NULL;
$renderChildrenClosure121 = function() {return NULL;};
$array115['filename'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);
$arguments114['options'] = $array115;
$arguments114['additionalAttributes'] = NULL;
$arguments114['data'] = NULL;
$arguments114['value'] = NULL;
$arguments114['property'] = NULL;
$arguments114['class'] = NULL;
$arguments114['dir'] = NULL;
$arguments114['id'] = NULL;
$arguments114['lang'] = NULL;
$arguments114['style'] = NULL;
$arguments114['title'] = NULL;
$arguments114['accesskey'] = NULL;
$arguments114['tabindex'] = NULL;
$arguments114['onclick'] = NULL;
$arguments114['size'] = NULL;
$arguments114['disabled'] = NULL;
$arguments114['optionValueField'] = NULL;
$arguments114['optionLabelField'] = NULL;
$arguments114['sortByOptionLabel'] = false;
$arguments114['selectAllByDefault'] = false;
$arguments114['errorClass'] = 'f3-form-error';
$arguments114['prependOptionLabel'] = NULL;
$arguments114['prependOptionValue'] = NULL;
$arguments114['multiple'] = false;
$renderChildrenClosure122 = function() {return NULL;};
$viewHelper123 = $self->getViewHelper('$viewHelper123', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper123->setArguments($arguments114);
$viewHelper123->setRenderingContext($renderingContext);
$viewHelper123->setRenderChildrenClosure($renderChildrenClosure122);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output108 .= $viewHelper123->initializeArgumentsAndRender();

$output108 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments124 = array();
$arguments124['key'] = 'tx_yag_controller_item.sortingWithDirection';
$arguments124['id'] = NULL;
$arguments124['default'] = NULL;
$arguments124['htmlEscape'] = NULL;
$arguments124['arguments'] = NULL;
$arguments124['extensionName'] = NULL;
$renderChildrenClosure125 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output108 .= ':
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments126 = array();
$arguments126['name'] = 'sortingDirection';
// Rendering Array
$array127 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments128 = array();
$arguments128['key'] = 'tx_yag_controller_item.sortingAscending';
$arguments128['id'] = NULL;
$arguments128['default'] = NULL;
$arguments128['htmlEscape'] = NULL;
$arguments128['arguments'] = NULL;
$arguments128['extensionName'] = NULL;
$renderChildrenClosure129 = function() {return NULL;};
$array127['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments130 = array();
$arguments130['key'] = 'tx_yag_controller_item.sortingDescending';
$arguments130['id'] = NULL;
$arguments130['default'] = NULL;
$arguments130['htmlEscape'] = NULL;
$arguments130['arguments'] = NULL;
$arguments130['extensionName'] = NULL;
$renderChildrenClosure131 = function() {return NULL;};
$array127['-1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);
$arguments126['options'] = $array127;
$arguments126['additionalAttributes'] = NULL;
$arguments126['data'] = NULL;
$arguments126['value'] = NULL;
$arguments126['property'] = NULL;
$arguments126['class'] = NULL;
$arguments126['dir'] = NULL;
$arguments126['id'] = NULL;
$arguments126['lang'] = NULL;
$arguments126['style'] = NULL;
$arguments126['title'] = NULL;
$arguments126['accesskey'] = NULL;
$arguments126['tabindex'] = NULL;
$arguments126['onclick'] = NULL;
$arguments126['size'] = NULL;
$arguments126['disabled'] = NULL;
$arguments126['optionValueField'] = NULL;
$arguments126['optionLabelField'] = NULL;
$arguments126['sortByOptionLabel'] = false;
$arguments126['selectAllByDefault'] = false;
$arguments126['errorClass'] = 'f3-form-error';
$arguments126['prependOptionLabel'] = NULL;
$arguments126['prependOptionValue'] = NULL;
$arguments126['multiple'] = false;
$renderChildrenClosure132 = function() {return NULL;};
$viewHelper133 = $self->getViewHelper('$viewHelper133', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper133->setArguments($arguments126);
$viewHelper133->setRenderingContext($renderingContext);
$viewHelper133->setRenderChildrenClosure($renderChildrenClosure132);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output108 .= $viewHelper133->initializeArgumentsAndRender();

$output108 .= '
                                &nbsp;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments134 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments135 = array();
$arguments135['key'] = 'tx_yag_controller_item.changeSorting';
$arguments135['id'] = NULL;
$arguments135['default'] = NULL;
$arguments135['htmlEscape'] = NULL;
$arguments135['arguments'] = NULL;
$arguments135['extensionName'] = NULL;
$renderChildrenClosure136 = function() {return NULL;};
$arguments134['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);
$arguments134['class'] = 'btn btn-default';
$arguments134['additionalAttributes'] = NULL;
$arguments134['data'] = NULL;
$arguments134['name'] = NULL;
$arguments134['property'] = NULL;
$arguments134['disabled'] = NULL;
$arguments134['dir'] = NULL;
$arguments134['id'] = NULL;
$arguments134['lang'] = NULL;
$arguments134['style'] = NULL;
$arguments134['title'] = NULL;
$arguments134['accesskey'] = NULL;
$arguments134['tabindex'] = NULL;
$arguments134['onclick'] = NULL;
$renderChildrenClosure137 = function() {return NULL;};
$viewHelper138 = $self->getViewHelper('$viewHelper138', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper138->setArguments($arguments134);
$viewHelper138->setRenderingContext($renderingContext);
$viewHelper138->setRenderChildrenClosure($renderChildrenClosure137);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output108 .= $viewHelper138->initializeArgumentsAndRender();

$output108 .= ' <span style="color: red">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments139 = array();
$arguments139['key'] = 'tx_yag_controller_item.sortingWillBeOverwritten';
$arguments139['id'] = NULL;
$arguments139['default'] = NULL;
$arguments139['htmlEscape'] = NULL;
$arguments139['arguments'] = NULL;
$arguments139['extensionName'] = NULL;
$renderChildrenClosure140 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output108 .= '</span>
                            </p>
                        ';
return $output108;
};
$viewHelper141 = $self->getViewHelper('$viewHelper141', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper141->setArguments($arguments106);
$viewHelper141->setRenderingContext($renderingContext);
$viewHelper141->setRenderChildrenClosure($renderChildrenClosure107);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output103 .= $viewHelper141->initializeArgumentsAndRender();

$output103 .= '
                    </div>
                    <div class="config-fotos yag-gallery" data-yag-gallery-settings=\'';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_JsonSettingsViewHelper
$arguments142 = array();
$arguments142['tsPath'] = 'javaScriptSettings';
$arguments142['settings'] = NULL;
$arguments142['onlyKeyValuePairs'] = false;
$renderChildrenClosure143 = function() {return NULL;};
$viewHelper144 = $self->getViewHelper('$viewHelper144', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_JsonSettingsViewHelper');
$viewHelper144->setArguments($arguments142);
$viewHelper144->setRenderingContext($renderingContext);
$viewHelper144->setRenderChildrenClosure($renderChildrenClosure143);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_JsonSettingsViewHelper

$output103 .= $viewHelper144->initializeArgumentsAndRender();

$output103 .= '\'>
                        <div id="sortable" class="ui-sortable">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments145 = array();
$arguments145['each'] = $currentVariableContainer->getOrNull('listData');
$arguments145['key'] = 'rowIndex';
$arguments145['as'] = 'listRow';
$arguments145['reverse'] = false;
$arguments145['iteration'] = NULL;
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output147 = '';

$output147 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments148 = array();
$arguments148['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.imageAdminThumbPartial', $renderingContext);
// Rendering Array
$array149 = array();
$array149['config'] = $currentVariableContainer->getOrNull('config');
$array149['album'] = $currentVariableContainer->getOrNull('album');
$array149['albums'] = $currentVariableContainer->getOrNull('albums');
$array149['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'image.value', $renderingContext);
$array149['rowIndex'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'specialValues.absoluteRowIndex', $renderingContext);
$array149['pager'] = $currentVariableContainer->getOrNull('pager');
$array149['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
$array149['currentPid'] = $currentVariableContainer->getOrNull('currentPid');
$array149['yagContext'] = $currentVariableContainer->getOrNull('yagContext');
$arguments148['arguments'] = $array149;
$arguments148['section'] = NULL;
$arguments148['optional'] = false;
$renderChildrenClosure150 = function() {return NULL;};

$output147 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments148, $renderChildrenClosure150, $renderingContext);

$output147 .= '
                            ';
return $output147;
};

$output103 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output103 .= '
                        </div>
                    </div>


                    <div style="clear:both;">&nbsp;</div>
                    <div class="tx-yag-pager">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments151 = array();
$arguments151['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.pagerPartial', $renderingContext);
// Rendering Array
$array152 = array();
$array152['controller'] = 'ItemList';
$array152['action'] = 'list';
$array152['pager'] = $currentVariableContainer->getOrNull('pager');
$array152['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments153 = array();
$arguments153['key'] = 'tx_yag_domain_model_items';
$arguments153['id'] = NULL;
$arguments153['default'] = NULL;
$arguments153['htmlEscape'] = NULL;
$arguments153['arguments'] = NULL;
$arguments153['extensionName'] = NULL;
$renderChildrenClosure154 = function() {return NULL;};
$array152['itemsText'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);
$arguments151['arguments'] = $array152;
$arguments151['section'] = NULL;
$arguments151['optional'] = false;
$renderChildrenClosure155 = function() {return NULL;};

$output103 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments151, $renderChildrenClosure155, $renderingContext);

$output103 .= '
                    </div>
                ';
return $output103;
};
$arguments31['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output156 = '';

$output156 .= '
                    <div>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments157 = array();
$arguments157['key'] = 'tx_yag_domain_model_album.noItemClick';
$arguments157['id'] = NULL;
$arguments157['default'] = NULL;
$arguments157['htmlEscape'] = NULL;
$arguments157['arguments'] = NULL;
$arguments157['extensionName'] = NULL;
$renderChildrenClosure158 = function() {return NULL;};

$output156 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output156 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments159 = array();
$arguments159['controller'] = 'Album';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments160 = array();
$arguments160['key'] = 'tx_yag_controller_album_addItems';
$arguments160['id'] = NULL;
$arguments160['default'] = NULL;
$arguments160['htmlEscape'] = NULL;
$arguments160['arguments'] = NULL;
$arguments160['extensionName'] = NULL;
$renderChildrenClosure161 = function() {return NULL;};
$arguments159['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);
$arguments159['action'] = 'addItems';
// Rendering Array
$array162 = array();
$array162['album'] = $currentVariableContainer->getOrNull('album');
$arguments159['arguments'] = $array162;
$arguments159['additionalAttributes'] = NULL;
$arguments159['data'] = NULL;
$arguments159['extensionName'] = NULL;
$arguments159['pluginName'] = NULL;
$arguments159['pageUid'] = NULL;
$arguments159['pageType'] = 0;
$arguments159['noCache'] = false;
$arguments159['noCacheHash'] = false;
$arguments159['section'] = '';
$arguments159['format'] = '';
$arguments159['linkAccessRestrictedPages'] = false;
$arguments159['additionalParams'] = array (
);
$arguments159['absolute'] = false;
$arguments159['addQueryString'] = false;
$arguments159['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments159['addQueryStringMethod'] = NULL;
$arguments159['class'] = NULL;
$arguments159['dir'] = NULL;
$arguments159['id'] = NULL;
$arguments159['lang'] = NULL;
$arguments159['style'] = NULL;
$arguments159['accesskey'] = NULL;
$arguments159['tabindex'] = NULL;
$arguments159['onclick'] = NULL;
$arguments159['name'] = NULL;
$arguments159['rel'] = NULL;
$arguments159['rev'] = NULL;
$arguments159['target'] = NULL;
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output164 = '';

$output164 .= '
                            <span class="t3-icon t3-icon-actions t3-icon-actions-edit t3-icon-edit-upload">&nbsp;</span>
                            <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments165 = array();
$arguments165['key'] = 'tx_yag_controller_album_addItems';
$arguments165['id'] = NULL;
$arguments165['default'] = NULL;
$arguments165['htmlEscape'] = NULL;
$arguments165['arguments'] = NULL;
$arguments165['extensionName'] = NULL;
$renderChildrenClosure166 = function() {return NULL;};

$output164 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output164 .= '</span>
                        ';
return $output164;
};
$viewHelper167 = $self->getViewHelper('$viewHelper167', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper167->setArguments($arguments159);
$viewHelper167->setRenderingContext($renderingContext);
$viewHelper167->setRenderChildrenClosure($renderChildrenClosure163);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output156 .= $viewHelper167->initializeArgumentsAndRender();

$output156 .= '
                    </div>
                ';
return $output156;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output0 .= '
		</div>




		<div id="tabs-2">
		    <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments168 = array();
$arguments168['key'] = 'tx_yag_controller_item.imagesEdit.description';
// Rendering Array
$array169 = array();
$array169['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'name', $renderingContext);
$arguments168['arguments'] = $array169;
$arguments168['id'] = NULL;
$arguments168['default'] = NULL;
$arguments168['htmlEscape'] = NULL;
$arguments168['extensionName'] = NULL;
$renderChildrenClosure170 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments168, $renderChildrenClosure170, $renderingContext);

$output0 .= '</h3>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments171 = array();
// Rendering Boolean node
$arguments171['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listData'), 'count', $renderingContext));
$arguments171['then'] = NULL;
$arguments171['else'] = NULL;
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output173 = '';

$output173 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments174 = array();
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output176 = '';

$output176 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments177 = array();
$arguments177['method'] = 'post';
$arguments177['action'] = 'bulkUpdate';
$arguments177['controller'] = 'Item';
$arguments177['name'] = 'album';
$arguments177['object'] = $currentVariableContainer->getOrNull('album');
$arguments177['section'] = 'tabs-2';
$arguments177['additionalAttributes'] = NULL;
$arguments177['data'] = NULL;
$arguments177['arguments'] = array (
);
$arguments177['extensionName'] = NULL;
$arguments177['pluginName'] = NULL;
$arguments177['pageUid'] = NULL;
$arguments177['pageType'] = 0;
$arguments177['noCache'] = false;
$arguments177['noCacheHash'] = false;
$arguments177['format'] = '';
$arguments177['additionalParams'] = array (
);
$arguments177['absolute'] = false;
$arguments177['addQueryString'] = false;
$arguments177['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments177['fieldNamePrefix'] = NULL;
$arguments177['actionUri'] = NULL;
$arguments177['objectName'] = NULL;
$arguments177['hiddenFieldClassName'] = NULL;
$arguments177['enctype'] = NULL;
$arguments177['onreset'] = NULL;
$arguments177['onsubmit'] = NULL;
$arguments177['class'] = NULL;
$arguments177['dir'] = NULL;
$arguments177['id'] = NULL;
$arguments177['lang'] = NULL;
$arguments177['style'] = NULL;
$arguments177['title'] = NULL;
$arguments177['accesskey'] = NULL;
$arguments177['tabindex'] = NULL;
$arguments177['onclick'] = NULL;
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output179 = '';

$output179 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments180 = array();
$arguments180['property'] = 'uid';
$arguments180['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments180['additionalAttributes'] = NULL;
$arguments180['data'] = NULL;
$arguments180['name'] = NULL;
$arguments180['class'] = NULL;
$arguments180['dir'] = NULL;
$arguments180['id'] = NULL;
$arguments180['lang'] = NULL;
$arguments180['style'] = NULL;
$arguments180['title'] = NULL;
$arguments180['accesskey'] = NULL;
$arguments180['tabindex'] = NULL;
$arguments180['onclick'] = NULL;
$renderChildrenClosure181 = function() {return NULL;};
$viewHelper182 = $self->getViewHelper('$viewHelper182', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper182->setArguments($arguments180);
$viewHelper182->setRenderingContext($renderingContext);
$viewHelper182->setRenderChildrenClosure($renderChildrenClosure181);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output179 .= $viewHelper182->initializeArgumentsAndRender();

$output179 .= '
                        <div class="yag-buttonLine">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments183 = array();
$arguments183['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments184 = array();
$arguments184['key'] = 'tx_yag_general.save';
$arguments184['default'] = 'Save';
$arguments184['id'] = NULL;
$arguments184['htmlEscape'] = NULL;
$arguments184['arguments'] = NULL;
$arguments184['extensionName'] = NULL;
$renderChildrenClosure185 = function() {return NULL;};
$arguments183['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);
$arguments183['additionalAttributes'] = NULL;
$arguments183['data'] = NULL;
$arguments183['name'] = NULL;
$arguments183['property'] = NULL;
$arguments183['disabled'] = NULL;
$arguments183['dir'] = NULL;
$arguments183['id'] = NULL;
$arguments183['lang'] = NULL;
$arguments183['style'] = NULL;
$arguments183['title'] = NULL;
$arguments183['accesskey'] = NULL;
$arguments183['tabindex'] = NULL;
$arguments183['onclick'] = NULL;
$renderChildrenClosure186 = function() {return NULL;};
$viewHelper187 = $self->getViewHelper('$viewHelper187', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper187->setArguments($arguments183);
$viewHelper187->setRenderingContext($renderingContext);
$viewHelper187->setRenderChildrenClosure($renderChildrenClosure186);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output179 .= $viewHelper187->initializeArgumentsAndRender();

$output179 .= '
                        </div>
                        <div class="edit-fotos">
                            <div class="ui-sortable">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments188 = array();
$arguments188['each'] = $currentVariableContainer->getOrNull('listData');
$arguments188['key'] = 'rowIndex';
$arguments188['as'] = 'listRow';
$arguments188['reverse'] = false;
$arguments188['iteration'] = NULL;
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output190 = '';

$output190 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments191 = array();
$arguments191['partial'] = 'Image/ImageAdminEdit';
// Rendering Array
$array192 = array();
$array192['yagContext'] = $currentVariableContainer->getOrNull('yagContext');
$array192['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'image.value', $renderingContext);
$array192['albums'] = $currentVariableContainer->getOrNull('albums');
$array192['album'] = $currentVariableContainer->getOrNull('album');
$array192['currentPid'] = $currentVariableContainer->getOrNull('currentPid');
$arguments191['arguments'] = $array192;
$arguments191['section'] = NULL;
$arguments191['optional'] = false;
$renderChildrenClosure193 = function() {return NULL;};

$output190 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments191, $renderChildrenClosure193, $renderingContext);

$output190 .= '
                                ';
return $output190;
};

$output179 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output179 .= '
                            </div>
                        </div>
                        <div class="yag-buttonLine">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments194 = array();
$arguments194['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments195 = array();
$arguments195['key'] = 'tx_yag_general.save';
$arguments195['default'] = 'Save';
$arguments195['id'] = NULL;
$arguments195['htmlEscape'] = NULL;
$arguments195['arguments'] = NULL;
$arguments195['extensionName'] = NULL;
$renderChildrenClosure196 = function() {return NULL;};
$arguments194['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);
$arguments194['additionalAttributes'] = NULL;
$arguments194['data'] = NULL;
$arguments194['name'] = NULL;
$arguments194['property'] = NULL;
$arguments194['disabled'] = NULL;
$arguments194['dir'] = NULL;
$arguments194['id'] = NULL;
$arguments194['lang'] = NULL;
$arguments194['style'] = NULL;
$arguments194['title'] = NULL;
$arguments194['accesskey'] = NULL;
$arguments194['tabindex'] = NULL;
$arguments194['onclick'] = NULL;
$renderChildrenClosure197 = function() {return NULL;};
$viewHelper198 = $self->getViewHelper('$viewHelper198', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper198->setArguments($arguments194);
$viewHelper198->setRenderingContext($renderingContext);
$viewHelper198->setRenderChildrenClosure($renderChildrenClosure197);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output179 .= $viewHelper198->initializeArgumentsAndRender();

$output179 .= '
                        </div>
                       ';
return $output179;
};
$viewHelper199 = $self->getViewHelper('$viewHelper199', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper199->setArguments($arguments177);
$viewHelper199->setRenderingContext($renderingContext);
$viewHelper199->setRenderChildrenClosure($renderChildrenClosure178);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output176 .= $viewHelper199->initializeArgumentsAndRender();

$output176 .= '
                    ';
return $output176;
};

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output173 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments200 = array();
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output202 = '';

$output202 .= '
                        <div>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments203 = array();
$arguments203['key'] = 'tx_yag_domain_model_album.noItemClick';
$arguments203['id'] = NULL;
$arguments203['default'] = NULL;
$arguments203['htmlEscape'] = NULL;
$arguments203['arguments'] = NULL;
$arguments203['extensionName'] = NULL;
$renderChildrenClosure204 = function() {return NULL;};

$output202 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output202 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments205 = array();
$arguments205['controller'] = 'Album';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments206 = array();
$arguments206['key'] = 'tx_yag_controller_album_addItems';
$arguments206['id'] = NULL;
$arguments206['default'] = NULL;
$arguments206['htmlEscape'] = NULL;
$arguments206['arguments'] = NULL;
$arguments206['extensionName'] = NULL;
$renderChildrenClosure207 = function() {return NULL;};
$arguments205['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);
$arguments205['action'] = 'addItems';
// Rendering Array
$array208 = array();
$array208['album'] = $currentVariableContainer->getOrNull('album');
$arguments205['arguments'] = $array208;
$arguments205['additionalAttributes'] = NULL;
$arguments205['data'] = NULL;
$arguments205['extensionName'] = NULL;
$arguments205['pluginName'] = NULL;
$arguments205['pageUid'] = NULL;
$arguments205['pageType'] = 0;
$arguments205['noCache'] = false;
$arguments205['noCacheHash'] = false;
$arguments205['section'] = '';
$arguments205['format'] = '';
$arguments205['linkAccessRestrictedPages'] = false;
$arguments205['additionalParams'] = array (
);
$arguments205['absolute'] = false;
$arguments205['addQueryString'] = false;
$arguments205['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments205['addQueryStringMethod'] = NULL;
$arguments205['class'] = NULL;
$arguments205['dir'] = NULL;
$arguments205['id'] = NULL;
$arguments205['lang'] = NULL;
$arguments205['style'] = NULL;
$arguments205['accesskey'] = NULL;
$arguments205['tabindex'] = NULL;
$arguments205['onclick'] = NULL;
$arguments205['name'] = NULL;
$arguments205['rel'] = NULL;
$arguments205['rev'] = NULL;
$arguments205['target'] = NULL;
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output210 = '';

$output210 .= '
                                <span class="t3-icon t3-icon-actions t3-icon-actions-edit t3-icon-edit-upload">&nbsp;</span>
                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments211 = array();
$arguments211['key'] = 'tx_yag_controller_album_addItems';
$arguments211['id'] = NULL;
$arguments211['default'] = NULL;
$arguments211['htmlEscape'] = NULL;
$arguments211['arguments'] = NULL;
$arguments211['extensionName'] = NULL;
$renderChildrenClosure212 = function() {return NULL;};

$output210 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output210 .= '</span>
                            ';
return $output210;
};
$viewHelper213 = $self->getViewHelper('$viewHelper213', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper213->setArguments($arguments205);
$viewHelper213->setRenderingContext($renderingContext);
$viewHelper213->setRenderChildrenClosure($renderChildrenClosure209);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output202 .= $viewHelper213->initializeArgumentsAndRender();

$output202 .= '
                        </div>
                    ';
return $output202;
};

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output173 .= '
                ';
return $output173;
};
$arguments171['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output214 = '';

$output214 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments215 = array();
$arguments215['method'] = 'post';
$arguments215['action'] = 'bulkUpdate';
$arguments215['controller'] = 'Item';
$arguments215['name'] = 'album';
$arguments215['object'] = $currentVariableContainer->getOrNull('album');
$arguments215['section'] = 'tabs-2';
$arguments215['additionalAttributes'] = NULL;
$arguments215['data'] = NULL;
$arguments215['arguments'] = array (
);
$arguments215['extensionName'] = NULL;
$arguments215['pluginName'] = NULL;
$arguments215['pageUid'] = NULL;
$arguments215['pageType'] = 0;
$arguments215['noCache'] = false;
$arguments215['noCacheHash'] = false;
$arguments215['format'] = '';
$arguments215['additionalParams'] = array (
);
$arguments215['absolute'] = false;
$arguments215['addQueryString'] = false;
$arguments215['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments215['fieldNamePrefix'] = NULL;
$arguments215['actionUri'] = NULL;
$arguments215['objectName'] = NULL;
$arguments215['hiddenFieldClassName'] = NULL;
$arguments215['enctype'] = NULL;
$arguments215['onreset'] = NULL;
$arguments215['onsubmit'] = NULL;
$arguments215['class'] = NULL;
$arguments215['dir'] = NULL;
$arguments215['id'] = NULL;
$arguments215['lang'] = NULL;
$arguments215['style'] = NULL;
$arguments215['title'] = NULL;
$arguments215['accesskey'] = NULL;
$arguments215['tabindex'] = NULL;
$arguments215['onclick'] = NULL;
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output217 = '';

$output217 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments218 = array();
$arguments218['property'] = 'uid';
$arguments218['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments218['additionalAttributes'] = NULL;
$arguments218['data'] = NULL;
$arguments218['name'] = NULL;
$arguments218['class'] = NULL;
$arguments218['dir'] = NULL;
$arguments218['id'] = NULL;
$arguments218['lang'] = NULL;
$arguments218['style'] = NULL;
$arguments218['title'] = NULL;
$arguments218['accesskey'] = NULL;
$arguments218['tabindex'] = NULL;
$arguments218['onclick'] = NULL;
$renderChildrenClosure219 = function() {return NULL;};
$viewHelper220 = $self->getViewHelper('$viewHelper220', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper220->setArguments($arguments218);
$viewHelper220->setRenderingContext($renderingContext);
$viewHelper220->setRenderChildrenClosure($renderChildrenClosure219);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output217 .= $viewHelper220->initializeArgumentsAndRender();

$output217 .= '
                        <div class="yag-buttonLine">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments221 = array();
$arguments221['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments222 = array();
$arguments222['key'] = 'tx_yag_general.save';
$arguments222['default'] = 'Save';
$arguments222['id'] = NULL;
$arguments222['htmlEscape'] = NULL;
$arguments222['arguments'] = NULL;
$arguments222['extensionName'] = NULL;
$renderChildrenClosure223 = function() {return NULL;};
$arguments221['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);
$arguments221['additionalAttributes'] = NULL;
$arguments221['data'] = NULL;
$arguments221['name'] = NULL;
$arguments221['property'] = NULL;
$arguments221['disabled'] = NULL;
$arguments221['dir'] = NULL;
$arguments221['id'] = NULL;
$arguments221['lang'] = NULL;
$arguments221['style'] = NULL;
$arguments221['title'] = NULL;
$arguments221['accesskey'] = NULL;
$arguments221['tabindex'] = NULL;
$arguments221['onclick'] = NULL;
$renderChildrenClosure224 = function() {return NULL;};
$viewHelper225 = $self->getViewHelper('$viewHelper225', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper225->setArguments($arguments221);
$viewHelper225->setRenderingContext($renderingContext);
$viewHelper225->setRenderChildrenClosure($renderChildrenClosure224);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output217 .= $viewHelper225->initializeArgumentsAndRender();

$output217 .= '
                        </div>
                        <div class="edit-fotos">
                            <div class="ui-sortable">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments226 = array();
$arguments226['each'] = $currentVariableContainer->getOrNull('listData');
$arguments226['key'] = 'rowIndex';
$arguments226['as'] = 'listRow';
$arguments226['reverse'] = false;
$arguments226['iteration'] = NULL;
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output228 = '';

$output228 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments229 = array();
$arguments229['partial'] = 'Image/ImageAdminEdit';
// Rendering Array
$array230 = array();
$array230['yagContext'] = $currentVariableContainer->getOrNull('yagContext');
$array230['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'image.value', $renderingContext);
$array230['albums'] = $currentVariableContainer->getOrNull('albums');
$array230['album'] = $currentVariableContainer->getOrNull('album');
$array230['currentPid'] = $currentVariableContainer->getOrNull('currentPid');
$arguments229['arguments'] = $array230;
$arguments229['section'] = NULL;
$arguments229['optional'] = false;
$renderChildrenClosure231 = function() {return NULL;};

$output228 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments229, $renderChildrenClosure231, $renderingContext);

$output228 .= '
                                ';
return $output228;
};

$output217 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output217 .= '
                            </div>
                        </div>
                        <div class="yag-buttonLine">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments232 = array();
$arguments232['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments233 = array();
$arguments233['key'] = 'tx_yag_general.save';
$arguments233['default'] = 'Save';
$arguments233['id'] = NULL;
$arguments233['htmlEscape'] = NULL;
$arguments233['arguments'] = NULL;
$arguments233['extensionName'] = NULL;
$renderChildrenClosure234 = function() {return NULL;};
$arguments232['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);
$arguments232['additionalAttributes'] = NULL;
$arguments232['data'] = NULL;
$arguments232['name'] = NULL;
$arguments232['property'] = NULL;
$arguments232['disabled'] = NULL;
$arguments232['dir'] = NULL;
$arguments232['id'] = NULL;
$arguments232['lang'] = NULL;
$arguments232['style'] = NULL;
$arguments232['title'] = NULL;
$arguments232['accesskey'] = NULL;
$arguments232['tabindex'] = NULL;
$arguments232['onclick'] = NULL;
$renderChildrenClosure235 = function() {return NULL;};
$viewHelper236 = $self->getViewHelper('$viewHelper236', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper236->setArguments($arguments232);
$viewHelper236->setRenderingContext($renderingContext);
$viewHelper236->setRenderChildrenClosure($renderChildrenClosure235);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output217 .= $viewHelper236->initializeArgumentsAndRender();

$output217 .= '
                        </div>
                       ';
return $output217;
};
$viewHelper237 = $self->getViewHelper('$viewHelper237', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper237->setArguments($arguments215);
$viewHelper237->setRenderingContext($renderingContext);
$viewHelper237->setRenderChildrenClosure($renderChildrenClosure216);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output214 .= $viewHelper237->initializeArgumentsAndRender();

$output214 .= '
                    ';
return $output214;
};
$arguments171['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output238 = '';

$output238 .= '
                        <div>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments239 = array();
$arguments239['key'] = 'tx_yag_domain_model_album.noItemClick';
$arguments239['id'] = NULL;
$arguments239['default'] = NULL;
$arguments239['htmlEscape'] = NULL;
$arguments239['arguments'] = NULL;
$arguments239['extensionName'] = NULL;
$renderChildrenClosure240 = function() {return NULL;};

$output238 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output238 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments241 = array();
$arguments241['controller'] = 'Album';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments242 = array();
$arguments242['key'] = 'tx_yag_controller_album_addItems';
$arguments242['id'] = NULL;
$arguments242['default'] = NULL;
$arguments242['htmlEscape'] = NULL;
$arguments242['arguments'] = NULL;
$arguments242['extensionName'] = NULL;
$renderChildrenClosure243 = function() {return NULL;};
$arguments241['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);
$arguments241['action'] = 'addItems';
// Rendering Array
$array244 = array();
$array244['album'] = $currentVariableContainer->getOrNull('album');
$arguments241['arguments'] = $array244;
$arguments241['additionalAttributes'] = NULL;
$arguments241['data'] = NULL;
$arguments241['extensionName'] = NULL;
$arguments241['pluginName'] = NULL;
$arguments241['pageUid'] = NULL;
$arguments241['pageType'] = 0;
$arguments241['noCache'] = false;
$arguments241['noCacheHash'] = false;
$arguments241['section'] = '';
$arguments241['format'] = '';
$arguments241['linkAccessRestrictedPages'] = false;
$arguments241['additionalParams'] = array (
);
$arguments241['absolute'] = false;
$arguments241['addQueryString'] = false;
$arguments241['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments241['addQueryStringMethod'] = NULL;
$arguments241['class'] = NULL;
$arguments241['dir'] = NULL;
$arguments241['id'] = NULL;
$arguments241['lang'] = NULL;
$arguments241['style'] = NULL;
$arguments241['accesskey'] = NULL;
$arguments241['tabindex'] = NULL;
$arguments241['onclick'] = NULL;
$arguments241['name'] = NULL;
$arguments241['rel'] = NULL;
$arguments241['rev'] = NULL;
$arguments241['target'] = NULL;
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output246 = '';

$output246 .= '
                                <span class="t3-icon t3-icon-actions t3-icon-actions-edit t3-icon-edit-upload">&nbsp;</span>
                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments247 = array();
$arguments247['key'] = 'tx_yag_controller_album_addItems';
$arguments247['id'] = NULL;
$arguments247['default'] = NULL;
$arguments247['htmlEscape'] = NULL;
$arguments247['arguments'] = NULL;
$arguments247['extensionName'] = NULL;
$renderChildrenClosure248 = function() {return NULL;};

$output246 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output246 .= '</span>
                            ';
return $output246;
};
$viewHelper249 = $self->getViewHelper('$viewHelper249', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper249->setArguments($arguments241);
$viewHelper249->setRenderingContext($renderingContext);
$viewHelper249->setRenderChildrenClosure($renderChildrenClosure245);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output238 .= $viewHelper249->initializeArgumentsAndRender();

$output238 .= '
                        </div>
                    ';
return $output238;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output0 .= '
	        <div style="clear:both;">&nbsp;</div>
            <div class="tx-yag-pager">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments250 = array();
$arguments250['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.pagerPartial', $renderingContext);
// Rendering Array
$array251 = array();
$array251['controller'] = 'ItemList';
$array251['action'] = 'list';
$array251['pager'] = $currentVariableContainer->getOrNull('pager');
$array251['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
$array251['itemsText'] = 'images';
$arguments250['arguments'] = $array251;
$arguments250['section'] = NULL;
$arguments250['optional'] = false;
$renderChildrenClosure252 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments250, $renderChildrenClosure252, $renderingContext);

$output0 .= '
			</div>
		</div>

		<div id="tabs-3">
		    <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments253 = array();
$arguments253['key'] = 'tx_yag_controller_album.editHeader';
$arguments253['default'] = 'Edit album';
$arguments253['id'] = NULL;
$arguments253['htmlEscape'] = NULL;
$arguments253['arguments'] = NULL;
$arguments253['extensionName'] = NULL;
$renderChildrenClosure254 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output0 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments255 = array();
$arguments255['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'name', $renderingContext);
$arguments255['keepQuotes'] = false;
$arguments255['encoding'] = NULL;
$arguments255['doubleEncode'] = true;
$renderChildrenClosure256 = function() {return NULL;};
$value257 = ($arguments255['value'] !== NULL ? $arguments255['value'] : $renderChildrenClosure256());

$output0 .= (!is_string($value257) ? $value257 : htmlspecialchars($value257, ($arguments255['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments255['encoding'] !== NULL ? $arguments255['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments255['doubleEncode']));

$output0 .= '</h3>

            <div class="yag-box-white">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments258 = array();
$arguments258['partial'] = 'FormErrors';
// Rendering Array
$array259 = array();
$array259['for'] = 'album';
$arguments258['arguments'] = $array259;
$arguments258['section'] = NULL;
$arguments258['optional'] = false;
$renderChildrenClosure260 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments258, $renderChildrenClosure260, $renderingContext);

$output0 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments261 = array();
$arguments261['method'] = 'post';
$arguments261['action'] = 'update';
$arguments261['controller'] = 'Album';
$arguments261['name'] = 'album';
$arguments261['object'] = $currentVariableContainer->getOrNull('album');
$arguments261['additionalAttributes'] = NULL;
$arguments261['data'] = NULL;
$arguments261['arguments'] = array (
);
$arguments261['extensionName'] = NULL;
$arguments261['pluginName'] = NULL;
$arguments261['pageUid'] = NULL;
$arguments261['pageType'] = 0;
$arguments261['noCache'] = false;
$arguments261['noCacheHash'] = false;
$arguments261['section'] = '';
$arguments261['format'] = '';
$arguments261['additionalParams'] = array (
);
$arguments261['absolute'] = false;
$arguments261['addQueryString'] = false;
$arguments261['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments261['fieldNamePrefix'] = NULL;
$arguments261['actionUri'] = NULL;
$arguments261['objectName'] = NULL;
$arguments261['hiddenFieldClassName'] = NULL;
$arguments261['enctype'] = NULL;
$arguments261['onreset'] = NULL;
$arguments261['onsubmit'] = NULL;
$arguments261['class'] = NULL;
$arguments261['dir'] = NULL;
$arguments261['id'] = NULL;
$arguments261['lang'] = NULL;
$arguments261['style'] = NULL;
$arguments261['title'] = NULL;
$arguments261['accesskey'] = NULL;
$arguments261['tabindex'] = NULL;
$arguments261['onclick'] = NULL;
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output263 = '';

$output263 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments264 = array();
$arguments264['partial'] = 'Album/FormFields';
// Rendering Array
$array265 = array();
$array265['album'] = $currentVariableContainer->getOrNull('album');
$array265['selectableGalleries'] = $currentVariableContainer->getOrNull('selectableGalleries');
$array265['selectedGallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'gallery', $renderingContext);
$array265['currentPid'] = $currentVariableContainer->getOrNull('currentPid');
$array265['yagContext'] = $currentVariableContainer->getOrNull('yagContext');
$array265['config'] = $currentVariableContainer->getOrNull('config');
$arguments264['arguments'] = $array265;
$arguments264['section'] = NULL;
$arguments264['optional'] = false;
$renderChildrenClosure266 = function() {return NULL;};

$output263 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments264, $renderChildrenClosure266, $renderingContext);

$output263 .= '

                    <div class="yag-buttonLine">
                        <span class="yag-button">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments267 = array();
$arguments267['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments268 = array();
$arguments268['key'] = 'tx_yag_general.save';
$arguments268['default'] = 'Save';
$arguments268['id'] = NULL;
$arguments268['htmlEscape'] = NULL;
$arguments268['arguments'] = NULL;
$arguments268['extensionName'] = NULL;
$renderChildrenClosure269 = function() {return NULL;};
$arguments267['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);
$arguments267['additionalAttributes'] = NULL;
$arguments267['data'] = NULL;
$arguments267['name'] = NULL;
$arguments267['property'] = NULL;
$arguments267['disabled'] = NULL;
$arguments267['dir'] = NULL;
$arguments267['id'] = NULL;
$arguments267['lang'] = NULL;
$arguments267['style'] = NULL;
$arguments267['title'] = NULL;
$arguments267['accesskey'] = NULL;
$arguments267['tabindex'] = NULL;
$arguments267['onclick'] = NULL;
$renderChildrenClosure270 = function() {return NULL;};
$viewHelper271 = $self->getViewHelper('$viewHelper271', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper271->setArguments($arguments267);
$viewHelper271->setRenderingContext($renderingContext);
$viewHelper271->setRenderChildrenClosure($renderChildrenClosure270);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output263 .= $viewHelper271->initializeArgumentsAndRender();

$output263 .= '
                        </span>
                    </div>
                ';
return $output263;
};
$viewHelper272 = $self->getViewHelper('$viewHelper272', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper272->setArguments($arguments261);
$viewHelper272->setRenderingContext($renderingContext);
$viewHelper272->setRenderChildrenClosure($renderChildrenClosure262);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper272->initializeArgumentsAndRender();

$output0 .= '
            </div>
		</div>
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

$output273 = '';

$output273 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments274 = array();
$arguments274['action'] = 'index';
$arguments274['controller'] = 'Gallery';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments275 = array();
$arguments275['key'] = 'tx_yag_controller_album_addItems.backToAlbumList';
$arguments275['id'] = NULL;
$arguments275['default'] = NULL;
$arguments275['htmlEscape'] = NULL;
$arguments275['arguments'] = NULL;
$arguments275['extensionName'] = NULL;
$renderChildrenClosure276 = function() {return NULL;};
$arguments274['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);
$arguments274['additionalAttributes'] = NULL;
$arguments274['data'] = NULL;
$arguments274['arguments'] = array (
);
$arguments274['extensionName'] = NULL;
$arguments274['pluginName'] = NULL;
$arguments274['pageUid'] = NULL;
$arguments274['pageType'] = 0;
$arguments274['noCache'] = false;
$arguments274['noCacheHash'] = false;
$arguments274['section'] = '';
$arguments274['format'] = '';
$arguments274['linkAccessRestrictedPages'] = false;
$arguments274['additionalParams'] = array (
);
$arguments274['absolute'] = false;
$arguments274['addQueryString'] = false;
$arguments274['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments274['addQueryStringMethod'] = NULL;
$arguments274['class'] = NULL;
$arguments274['dir'] = NULL;
$arguments274['id'] = NULL;
$arguments274['lang'] = NULL;
$arguments274['style'] = NULL;
$arguments274['accesskey'] = NULL;
$arguments274['tabindex'] = NULL;
$arguments274['onclick'] = NULL;
$arguments274['name'] = NULL;
$arguments274['rel'] = NULL;
$arguments274['rev'] = NULL;
$arguments274['target'] = NULL;
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments278 = array();
$arguments278['identifier'] = 'actions-document-close';
$arguments278['size'] = 'small';
$arguments278['overlay'] = NULL;
$arguments278['state'] = 'default';
$arguments278['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure279 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);
};
$viewHelper280 = $self->getViewHelper('$viewHelper280', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper280->setArguments($arguments274);
$viewHelper280->setRenderingContext($renderingContext);
$viewHelper280->setRenderChildrenClosure($renderChildrenClosure277);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output273 .= $viewHelper280->initializeArgumentsAndRender();

$output273 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments281 = array();
$arguments281['action'] = 'delete';
$arguments281['controller'] = 'Album';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments282 = array();
$arguments282['key'] = 'tx_yag_domain_model_album.deleteAlbum';
$arguments282['id'] = NULL;
$arguments282['default'] = NULL;
$arguments282['htmlEscape'] = NULL;
$arguments282['arguments'] = NULL;
$arguments282['extensionName'] = NULL;
$renderChildrenClosure283 = function() {return NULL;};
$arguments281['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext);
$arguments281['additionalAttributes'] = NULL;
$arguments281['data'] = NULL;
$arguments281['arguments'] = array (
);
$arguments281['extensionName'] = NULL;
$arguments281['pluginName'] = NULL;
$arguments281['pageUid'] = NULL;
$arguments281['pageType'] = 0;
$arguments281['noCache'] = false;
$arguments281['noCacheHash'] = false;
$arguments281['section'] = '';
$arguments281['format'] = '';
$arguments281['linkAccessRestrictedPages'] = false;
$arguments281['additionalParams'] = array (
);
$arguments281['absolute'] = false;
$arguments281['addQueryString'] = false;
$arguments281['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments281['addQueryStringMethod'] = NULL;
$arguments281['class'] = NULL;
$arguments281['dir'] = NULL;
$arguments281['id'] = NULL;
$arguments281['lang'] = NULL;
$arguments281['style'] = NULL;
$arguments281['accesskey'] = NULL;
$arguments281['tabindex'] = NULL;
$arguments281['onclick'] = NULL;
$arguments281['name'] = NULL;
$arguments281['rel'] = NULL;
$arguments281['rev'] = NULL;
$arguments281['target'] = NULL;
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments285 = array();
$arguments285['identifier'] = 'actions-edit-delete';
$arguments285['size'] = 'small';
$arguments285['overlay'] = NULL;
$arguments285['state'] = 'default';
$arguments285['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure286 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);
};
$viewHelper287 = $self->getViewHelper('$viewHelper287', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper287->setArguments($arguments281);
$viewHelper287->setRenderingContext($renderingContext);
$viewHelper287->setRenderChildrenClosure($renderChildrenClosure284);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output273 .= $viewHelper287->initializeArgumentsAndRender();

$output273 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments288 = array();
$arguments288['action'] = 'addItems';
$arguments288['controller'] = 'Album';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments289 = array();
$arguments289['key'] = 'tx_yag_controller_album_addItems';
$arguments289['id'] = NULL;
$arguments289['default'] = NULL;
$arguments289['htmlEscape'] = NULL;
$arguments289['arguments'] = NULL;
$arguments289['extensionName'] = NULL;
$renderChildrenClosure290 = function() {return NULL;};
$arguments288['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext);
// Rendering Array
$array291 = array();
$array291['album'] = $currentVariableContainer->getOrNull('album');
$arguments288['arguments'] = $array291;
$arguments288['additionalAttributes'] = NULL;
$arguments288['data'] = NULL;
$arguments288['extensionName'] = NULL;
$arguments288['pluginName'] = NULL;
$arguments288['pageUid'] = NULL;
$arguments288['pageType'] = 0;
$arguments288['noCache'] = false;
$arguments288['noCacheHash'] = false;
$arguments288['section'] = '';
$arguments288['format'] = '';
$arguments288['linkAccessRestrictedPages'] = false;
$arguments288['additionalParams'] = array (
);
$arguments288['absolute'] = false;
$arguments288['addQueryString'] = false;
$arguments288['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments288['addQueryStringMethod'] = NULL;
$arguments288['class'] = NULL;
$arguments288['dir'] = NULL;
$arguments288['id'] = NULL;
$arguments288['lang'] = NULL;
$arguments288['style'] = NULL;
$arguments288['accesskey'] = NULL;
$arguments288['tabindex'] = NULL;
$arguments288['onclick'] = NULL;
$arguments288['name'] = NULL;
$arguments288['rel'] = NULL;
$arguments288['rev'] = NULL;
$arguments288['target'] = NULL;
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments293 = array();
$arguments293['identifier'] = 'actions-edit-upload';
$arguments293['size'] = 'small';
$arguments293['overlay'] = NULL;
$arguments293['state'] = 'default';
$arguments293['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure294 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);
};
$viewHelper295 = $self->getViewHelper('$viewHelper295', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper295->setArguments($arguments288);
$viewHelper295->setRenderingContext($renderingContext);
$viewHelper295->setRenderChildrenClosure($renderChildrenClosure292);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output273 .= $viewHelper295->initializeArgumentsAndRender();

$output273 .= '
';


return $output273;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output296 = '';

$output296 .= '



';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper
$arguments297 = array();
$arguments297['show'] = false;
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
<!--  
Template for rendering an album.

Here is a list of objects / variables that can be accessed in this template:

Tx_PtExtlist_Domain_Model_List_ListData listData               List of items in album

@package YAG
@author Daniel Lienert <typo3@lienert.cc>
@author Michael Knoll <mimi@kaktusteam.de>
-->
';
};
$viewHelper299 = $self->getViewHelper('$viewHelper299', $renderingContext, 'Tx_PtExtlist_ViewHelpers_CommentViewHelper');
$viewHelper299->setArguments($arguments297);
$viewHelper299->setRenderingContext($renderingContext);
$viewHelper299->setRenderChildrenClosure($renderChildrenClosure298);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper

$output296 .= $viewHelper299->initializeArgumentsAndRender();

$output296 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments300 = array();
$arguments300['name'] = 'Default';
$renderChildrenClosure301 = function() {return NULL;};
$viewHelper302 = $self->getViewHelper('$viewHelper302', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper302->setArguments($arguments300);
$viewHelper302->setRenderingContext($renderingContext);
$viewHelper302->setRenderChildrenClosure($renderChildrenClosure301);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output296 .= $viewHelper302->initializeArgumentsAndRender();

$output296 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments303 = array();
$arguments303['name'] = 'main';
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output305 = '';

$output305 .= '	

	';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_IncludeViewHelper
$arguments306 = array();
$arguments306['library'] = 'lightBox';
$arguments306['file'] = '';
$arguments306['position'] = 'footer';
$renderChildrenClosure307 = function() {return NULL;};
$viewHelper308 = $self->getViewHelper('$viewHelper308', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_IncludeViewHelper');
$viewHelper308->setArguments($arguments306);
$viewHelper308->setRenderingContext($renderingContext);
$viewHelper308->setRenderChildrenClosure($renderChildrenClosure307);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_IncludeViewHelper

$output305 .= $viewHelper308->initializeArgumentsAndRender();

$output305 .= '
	';
// Rendering ViewHelper Tx_Yag_ViewHelpers_CSS_IncludeViewHelper
$arguments309 = array();
$arguments309['library'] = 'lightBox';
$arguments309['file'] = '';
$renderChildrenClosure310 = function() {return NULL;};
$viewHelper311 = $self->getViewHelper('$viewHelper311', $renderingContext, 'Tx_Yag_ViewHelpers_CSS_IncludeViewHelper');
$viewHelper311->setArguments($arguments309);
$viewHelper311->setRenderingContext($renderingContext);
$viewHelper311->setRenderChildrenClosure($renderChildrenClosure310);
// End of ViewHelper Tx_Yag_ViewHelpers_CSS_IncludeViewHelper

$output305 .= $viewHelper311->initializeArgumentsAndRender();

$output305 .= '

	';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper
$arguments312 = array();
$arguments312['templatePath'] = 'EXT:yag/Resources/Private/JSTemplates/ItemAdminList.js';
// Rendering Array
$array313 = array();
$array313['pagerOffset'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pager'), 'firstItemIndex', $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments314 = array();
$arguments314['controller'] = 'Ajax';
$arguments314['action'] = NULL;
$arguments314['arguments'] = array (
);
$arguments314['extensionName'] = NULL;
$arguments314['pluginName'] = NULL;
$arguments314['pageUid'] = NULL;
$arguments314['pageType'] = 0;
$arguments314['noCache'] = false;
$arguments314['noCacheHash'] = false;
$arguments314['section'] = '';
$arguments314['format'] = '';
$arguments314['linkAccessRestrictedPages'] = false;
$arguments314['additionalParams'] = array (
);
$arguments314['absolute'] = false;
$arguments314['addQueryString'] = false;
$arguments314['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments314['addQueryStringMethod'] = NULL;
$renderChildrenClosure315 = function() {return NULL;};
$viewHelper316 = $self->getViewHelper('$viewHelper316', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper316->setArguments($arguments314);
$viewHelper316->setRenderingContext($renderingContext);
$viewHelper316->setRenderChildrenClosure($renderChildrenClosure315);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$array313['ajaxBaseURL'] = $viewHelper316->initializeArgumentsAndRender();
$arguments312['arguments'] = $array313;
$arguments312['position'] = 'current';
$arguments312['type'] = 'text/javascript';
$renderChildrenClosure317 = function() {return NULL;};
$viewHelper318 = $self->getViewHelper('$viewHelper318', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper');
$viewHelper318->setArguments($arguments312);
$viewHelper318->setRenderingContext($renderingContext);
$viewHelper318->setRenderChildrenClosure($renderChildrenClosure317);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper

$output305 .= $viewHelper318->initializeArgumentsAndRender();

$output305 .= '
	';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper
$arguments319 = array();
$arguments319['templatePath'] = 'EXT:yag/Resources/Public/Js/JQuery/jquery.multiple.select.js';
$arguments319['arguments'] = array (
);
$arguments319['position'] = 'current';
$arguments319['type'] = 'text/javascript';
$renderChildrenClosure320 = function() {return NULL;};
$viewHelper321 = $self->getViewHelper('$viewHelper321', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper');
$viewHelper321->setArguments($arguments319);
$viewHelper321->setRenderingContext($renderingContext);
$viewHelper321->setRenderChildrenClosure($renderChildrenClosure320);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper

$output305 .= $viewHelper321->initializeArgumentsAndRender();

$output305 .= '
	';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper
$arguments322 = array();
$arguments322['templatePath'] = 'EXT:yag/Resources/Public/Js/LightBox.js';
$arguments322['arguments'] = array (
);
$arguments322['position'] = 'current';
$arguments322['type'] = 'text/javascript';
$renderChildrenClosure323 = function() {return NULL;};
$viewHelper324 = $self->getViewHelper('$viewHelper324', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper');
$viewHelper324->setArguments($arguments322);
$viewHelper324->setRenderingContext($renderingContext);
$viewHelper324->setRenderChildrenClosure($renderChildrenClosure323);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper

$output305 .= $viewHelper324->initializeArgumentsAndRender();

$output305 .= '
    ';

$output305 .= '
	<script>
		$(document).ready(function() {
	        jQuery( "#tabs" ).tabs({
                cookie: {}
            });
			$(\'.yag-multiselect\').multipleSelect({
					placeholder: "[No Category selected]"
			});
	    });
	</script>
    ';

$output305 .= '

	<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments325 = array();
$arguments325['key'] = 'tx_yag_controller_album.edit.header';
$arguments325['id'] = NULL;
$arguments325['default'] = NULL;
$arguments325['htmlEscape'] = NULL;
$arguments325['arguments'] = NULL;
$arguments325['extensionName'] = NULL;
$renderChildrenClosure326 = function() {return NULL;};

$output305 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output305 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments327 = array();
$arguments327['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'name', $renderingContext);
$arguments327['keepQuotes'] = false;
$arguments327['encoding'] = NULL;
$arguments327['doubleEncode'] = true;
$renderChildrenClosure328 = function() {return NULL;};
$value329 = ($arguments327['value'] !== NULL ? $arguments327['value'] : $renderChildrenClosure328());

$output305 .= (!is_string($value329) ? $value329 : htmlspecialchars($value329, ($arguments327['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments327['encoding'] !== NULL ? $arguments327['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments327['doubleEncode']));

$output305 .= '</h2>
	
	<div id="tabs">
	    <ul>
	         <li><a href="#tabs-1">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments330 = array();
$arguments330['key'] = 'tx_yag_controller_item.imagesOverview';
$arguments330['default'] = 'Images overview';
$arguments330['id'] = NULL;
$arguments330['htmlEscape'] = NULL;
$arguments330['arguments'] = NULL;
$arguments330['extensionName'] = NULL;
$renderChildrenClosure331 = function() {return NULL;};

$output305 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments330, $renderChildrenClosure331, $renderingContext);

$output305 .= '</a></li>
	         <li><a href="#tabs-2">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments332 = array();
$arguments332['key'] = 'tx_yag_controller_item.imagesEdit';
$arguments332['default'] = 'Images edit';
$arguments332['id'] = NULL;
$arguments332['htmlEscape'] = NULL;
$arguments332['arguments'] = NULL;
$arguments332['extensionName'] = NULL;
$renderChildrenClosure333 = function() {return NULL;};

$output305 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);

$output305 .= '</a></li>
	         <li><a href="#tabs-3">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments334 = array();
$arguments334['key'] = 'tx_yag_controller_item.albumSettings';
$arguments334['default'] = 'Album settings';
$arguments334['id'] = NULL;
$arguments334['htmlEscape'] = NULL;
$arguments334['arguments'] = NULL;
$arguments334['extensionName'] = NULL;
$renderChildrenClosure335 = function() {return NULL;};

$output305 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext);

$output305 .= '</a></li>
	    </ul>
	    <div id="tabs-1">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments336 = array();
// Rendering Boolean node
$arguments336['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listData'), 'count', $renderingContext));
$arguments336['then'] = NULL;
$arguments336['else'] = NULL;
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output338 = '';

$output338 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments339 = array();
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output341 = '';

$output341 .= '
                    <div class="tx-yag-image-admin-sortingbox">
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments342 = array();
$arguments342['key'] = 'tx_yag_controller_album.dragNdrop';
$arguments342['id'] = NULL;
$arguments342['default'] = NULL;
$arguments342['htmlEscape'] = NULL;
$arguments342['arguments'] = NULL;
$arguments342['extensionName'] = NULL;
$renderChildrenClosure343 = function() {return NULL;};

$output341 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments342, $renderChildrenClosure343, $renderingContext);

$output341 .= '!</p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments344 = array();
$arguments344['action'] = 'updateSorting';
$arguments344['controller'] = 'Album';
$arguments344['additionalAttributes'] = NULL;
$arguments344['data'] = NULL;
$arguments344['arguments'] = array (
);
$arguments344['extensionName'] = NULL;
$arguments344['pluginName'] = NULL;
$arguments344['pageUid'] = NULL;
$arguments344['object'] = NULL;
$arguments344['pageType'] = 0;
$arguments344['noCache'] = false;
$arguments344['noCacheHash'] = false;
$arguments344['section'] = '';
$arguments344['format'] = '';
$arguments344['additionalParams'] = array (
);
$arguments344['absolute'] = false;
$arguments344['addQueryString'] = false;
$arguments344['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments344['fieldNamePrefix'] = NULL;
$arguments344['actionUri'] = NULL;
$arguments344['objectName'] = NULL;
$arguments344['hiddenFieldClassName'] = NULL;
$arguments344['enctype'] = NULL;
$arguments344['method'] = NULL;
$arguments344['name'] = NULL;
$arguments344['onreset'] = NULL;
$arguments344['onsubmit'] = NULL;
$arguments344['class'] = NULL;
$arguments344['dir'] = NULL;
$arguments344['id'] = NULL;
$arguments344['lang'] = NULL;
$arguments344['style'] = NULL;
$arguments344['title'] = NULL;
$arguments344['accesskey'] = NULL;
$arguments344['tabindex'] = NULL;
$arguments344['onclick'] = NULL;
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output346 = '';

$output346 .= '
                            <p>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments347 = array();
$arguments347['name'] = 'album';
$arguments347['value'] = $currentVariableContainer->getOrNull('album');
$arguments347['additionalAttributes'] = NULL;
$arguments347['data'] = NULL;
$arguments347['property'] = NULL;
$arguments347['class'] = NULL;
$arguments347['dir'] = NULL;
$arguments347['id'] = NULL;
$arguments347['lang'] = NULL;
$arguments347['style'] = NULL;
$arguments347['title'] = NULL;
$arguments347['accesskey'] = NULL;
$arguments347['tabindex'] = NULL;
$arguments347['onclick'] = NULL;
$renderChildrenClosure348 = function() {return NULL;};
$viewHelper349 = $self->getViewHelper('$viewHelper349', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper349->setArguments($arguments347);
$viewHelper349->setRenderingContext($renderingContext);
$viewHelper349->setRenderChildrenClosure($renderChildrenClosure348);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output346 .= $viewHelper349->initializeArgumentsAndRender();

$output346 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments350 = array();
$arguments350['key'] = 'tx_yag_controller_item.sortingByField';
$arguments350['id'] = NULL;
$arguments350['default'] = NULL;
$arguments350['htmlEscape'] = NULL;
$arguments350['arguments'] = NULL;
$arguments350['extensionName'] = NULL;
$renderChildrenClosure351 = function() {return NULL;};

$output346 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext);

$output346 .= ':
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments352 = array();
$arguments352['name'] = 'sortingField';
// Rendering Array
$array353 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments354 = array();
$arguments354['key'] = 'tx_yag_domain_model_item.title';
$arguments354['id'] = NULL;
$arguments354['default'] = NULL;
$arguments354['htmlEscape'] = NULL;
$arguments354['arguments'] = NULL;
$arguments354['extensionName'] = NULL;
$renderChildrenClosure355 = function() {return NULL;};
$array353['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments354, $renderChildrenClosure355, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments356 = array();
$arguments356['key'] = 'tx_yag_domain_model_item.date';
$arguments356['id'] = NULL;
$arguments356['default'] = NULL;
$arguments356['htmlEscape'] = NULL;
$arguments356['arguments'] = NULL;
$arguments356['extensionName'] = NULL;
$renderChildrenClosure357 = function() {return NULL;};
$array353['date'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments358 = array();
$arguments358['key'] = 'tx_yag_domain_model_item.filename';
$arguments358['id'] = NULL;
$arguments358['default'] = NULL;
$arguments358['htmlEscape'] = NULL;
$arguments358['arguments'] = NULL;
$arguments358['extensionName'] = NULL;
$renderChildrenClosure359 = function() {return NULL;};
$array353['filename'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext);
$arguments352['options'] = $array353;
$arguments352['additionalAttributes'] = NULL;
$arguments352['data'] = NULL;
$arguments352['value'] = NULL;
$arguments352['property'] = NULL;
$arguments352['class'] = NULL;
$arguments352['dir'] = NULL;
$arguments352['id'] = NULL;
$arguments352['lang'] = NULL;
$arguments352['style'] = NULL;
$arguments352['title'] = NULL;
$arguments352['accesskey'] = NULL;
$arguments352['tabindex'] = NULL;
$arguments352['onclick'] = NULL;
$arguments352['size'] = NULL;
$arguments352['disabled'] = NULL;
$arguments352['optionValueField'] = NULL;
$arguments352['optionLabelField'] = NULL;
$arguments352['sortByOptionLabel'] = false;
$arguments352['selectAllByDefault'] = false;
$arguments352['errorClass'] = 'f3-form-error';
$arguments352['prependOptionLabel'] = NULL;
$arguments352['prependOptionValue'] = NULL;
$arguments352['multiple'] = false;
$renderChildrenClosure360 = function() {return NULL;};
$viewHelper361 = $self->getViewHelper('$viewHelper361', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper361->setArguments($arguments352);
$viewHelper361->setRenderingContext($renderingContext);
$viewHelper361->setRenderChildrenClosure($renderChildrenClosure360);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output346 .= $viewHelper361->initializeArgumentsAndRender();

$output346 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments362 = array();
$arguments362['key'] = 'tx_yag_controller_item.sortingWithDirection';
$arguments362['id'] = NULL;
$arguments362['default'] = NULL;
$arguments362['htmlEscape'] = NULL;
$arguments362['arguments'] = NULL;
$arguments362['extensionName'] = NULL;
$renderChildrenClosure363 = function() {return NULL;};

$output346 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext);

$output346 .= ':
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments364 = array();
$arguments364['name'] = 'sortingDirection';
// Rendering Array
$array365 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments366 = array();
$arguments366['key'] = 'tx_yag_controller_item.sortingAscending';
$arguments366['id'] = NULL;
$arguments366['default'] = NULL;
$arguments366['htmlEscape'] = NULL;
$arguments366['arguments'] = NULL;
$arguments366['extensionName'] = NULL;
$renderChildrenClosure367 = function() {return NULL;};
$array365['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments368 = array();
$arguments368['key'] = 'tx_yag_controller_item.sortingDescending';
$arguments368['id'] = NULL;
$arguments368['default'] = NULL;
$arguments368['htmlEscape'] = NULL;
$arguments368['arguments'] = NULL;
$arguments368['extensionName'] = NULL;
$renderChildrenClosure369 = function() {return NULL;};
$array365['-1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments368, $renderChildrenClosure369, $renderingContext);
$arguments364['options'] = $array365;
$arguments364['additionalAttributes'] = NULL;
$arguments364['data'] = NULL;
$arguments364['value'] = NULL;
$arguments364['property'] = NULL;
$arguments364['class'] = NULL;
$arguments364['dir'] = NULL;
$arguments364['id'] = NULL;
$arguments364['lang'] = NULL;
$arguments364['style'] = NULL;
$arguments364['title'] = NULL;
$arguments364['accesskey'] = NULL;
$arguments364['tabindex'] = NULL;
$arguments364['onclick'] = NULL;
$arguments364['size'] = NULL;
$arguments364['disabled'] = NULL;
$arguments364['optionValueField'] = NULL;
$arguments364['optionLabelField'] = NULL;
$arguments364['sortByOptionLabel'] = false;
$arguments364['selectAllByDefault'] = false;
$arguments364['errorClass'] = 'f3-form-error';
$arguments364['prependOptionLabel'] = NULL;
$arguments364['prependOptionValue'] = NULL;
$arguments364['multiple'] = false;
$renderChildrenClosure370 = function() {return NULL;};
$viewHelper371 = $self->getViewHelper('$viewHelper371', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper371->setArguments($arguments364);
$viewHelper371->setRenderingContext($renderingContext);
$viewHelper371->setRenderChildrenClosure($renderChildrenClosure370);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output346 .= $viewHelper371->initializeArgumentsAndRender();

$output346 .= '
                                &nbsp;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments372 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments373 = array();
$arguments373['key'] = 'tx_yag_controller_item.changeSorting';
$arguments373['id'] = NULL;
$arguments373['default'] = NULL;
$arguments373['htmlEscape'] = NULL;
$arguments373['arguments'] = NULL;
$arguments373['extensionName'] = NULL;
$renderChildrenClosure374 = function() {return NULL;};
$arguments372['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext);
$arguments372['class'] = 'btn btn-default';
$arguments372['additionalAttributes'] = NULL;
$arguments372['data'] = NULL;
$arguments372['name'] = NULL;
$arguments372['property'] = NULL;
$arguments372['disabled'] = NULL;
$arguments372['dir'] = NULL;
$arguments372['id'] = NULL;
$arguments372['lang'] = NULL;
$arguments372['style'] = NULL;
$arguments372['title'] = NULL;
$arguments372['accesskey'] = NULL;
$arguments372['tabindex'] = NULL;
$arguments372['onclick'] = NULL;
$renderChildrenClosure375 = function() {return NULL;};
$viewHelper376 = $self->getViewHelper('$viewHelper376', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper376->setArguments($arguments372);
$viewHelper376->setRenderingContext($renderingContext);
$viewHelper376->setRenderChildrenClosure($renderChildrenClosure375);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output346 .= $viewHelper376->initializeArgumentsAndRender();

$output346 .= ' <span style="color: red">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments377 = array();
$arguments377['key'] = 'tx_yag_controller_item.sortingWillBeOverwritten';
$arguments377['id'] = NULL;
$arguments377['default'] = NULL;
$arguments377['htmlEscape'] = NULL;
$arguments377['arguments'] = NULL;
$arguments377['extensionName'] = NULL;
$renderChildrenClosure378 = function() {return NULL;};

$output346 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments377, $renderChildrenClosure378, $renderingContext);

$output346 .= '</span>
                            </p>
                        ';
return $output346;
};
$viewHelper379 = $self->getViewHelper('$viewHelper379', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper379->setArguments($arguments344);
$viewHelper379->setRenderingContext($renderingContext);
$viewHelper379->setRenderChildrenClosure($renderChildrenClosure345);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output341 .= $viewHelper379->initializeArgumentsAndRender();

$output341 .= '
                    </div>
                    <div class="config-fotos yag-gallery" data-yag-gallery-settings=\'';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_JsonSettingsViewHelper
$arguments380 = array();
$arguments380['tsPath'] = 'javaScriptSettings';
$arguments380['settings'] = NULL;
$arguments380['onlyKeyValuePairs'] = false;
$renderChildrenClosure381 = function() {return NULL;};
$viewHelper382 = $self->getViewHelper('$viewHelper382', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_JsonSettingsViewHelper');
$viewHelper382->setArguments($arguments380);
$viewHelper382->setRenderingContext($renderingContext);
$viewHelper382->setRenderChildrenClosure($renderChildrenClosure381);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_JsonSettingsViewHelper

$output341 .= $viewHelper382->initializeArgumentsAndRender();

$output341 .= '\'>
                        <div id="sortable" class="ui-sortable">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments383 = array();
$arguments383['each'] = $currentVariableContainer->getOrNull('listData');
$arguments383['key'] = 'rowIndex';
$arguments383['as'] = 'listRow';
$arguments383['reverse'] = false;
$arguments383['iteration'] = NULL;
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output385 = '';

$output385 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments386 = array();
$arguments386['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.imageAdminThumbPartial', $renderingContext);
// Rendering Array
$array387 = array();
$array387['config'] = $currentVariableContainer->getOrNull('config');
$array387['album'] = $currentVariableContainer->getOrNull('album');
$array387['albums'] = $currentVariableContainer->getOrNull('albums');
$array387['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'image.value', $renderingContext);
$array387['rowIndex'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'specialValues.absoluteRowIndex', $renderingContext);
$array387['pager'] = $currentVariableContainer->getOrNull('pager');
$array387['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
$array387['currentPid'] = $currentVariableContainer->getOrNull('currentPid');
$array387['yagContext'] = $currentVariableContainer->getOrNull('yagContext');
$arguments386['arguments'] = $array387;
$arguments386['section'] = NULL;
$arguments386['optional'] = false;
$renderChildrenClosure388 = function() {return NULL;};

$output385 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments386, $renderChildrenClosure388, $renderingContext);

$output385 .= '
                            ';
return $output385;
};

$output341 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments383, $renderChildrenClosure384, $renderingContext);

$output341 .= '
                        </div>
                    </div>


                    <div style="clear:both;">&nbsp;</div>
                    <div class="tx-yag-pager">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments389 = array();
$arguments389['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.pagerPartial', $renderingContext);
// Rendering Array
$array390 = array();
$array390['controller'] = 'ItemList';
$array390['action'] = 'list';
$array390['pager'] = $currentVariableContainer->getOrNull('pager');
$array390['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments391 = array();
$arguments391['key'] = 'tx_yag_domain_model_items';
$arguments391['id'] = NULL;
$arguments391['default'] = NULL;
$arguments391['htmlEscape'] = NULL;
$arguments391['arguments'] = NULL;
$arguments391['extensionName'] = NULL;
$renderChildrenClosure392 = function() {return NULL;};
$array390['itemsText'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments391, $renderChildrenClosure392, $renderingContext);
$arguments389['arguments'] = $array390;
$arguments389['section'] = NULL;
$arguments389['optional'] = false;
$renderChildrenClosure393 = function() {return NULL;};

$output341 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments389, $renderChildrenClosure393, $renderingContext);

$output341 .= '
                    </div>
                ';
return $output341;
};

$output338 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext);

$output338 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments394 = array();
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output396 = '';

$output396 .= '
                    <div>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments397 = array();
$arguments397['key'] = 'tx_yag_domain_model_album.noItemClick';
$arguments397['id'] = NULL;
$arguments397['default'] = NULL;
$arguments397['htmlEscape'] = NULL;
$arguments397['arguments'] = NULL;
$arguments397['extensionName'] = NULL;
$renderChildrenClosure398 = function() {return NULL;};

$output396 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext);

$output396 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments399 = array();
$arguments399['controller'] = 'Album';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments400 = array();
$arguments400['key'] = 'tx_yag_controller_album_addItems';
$arguments400['id'] = NULL;
$arguments400['default'] = NULL;
$arguments400['htmlEscape'] = NULL;
$arguments400['arguments'] = NULL;
$arguments400['extensionName'] = NULL;
$renderChildrenClosure401 = function() {return NULL;};
$arguments399['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments400, $renderChildrenClosure401, $renderingContext);
$arguments399['action'] = 'addItems';
// Rendering Array
$array402 = array();
$array402['album'] = $currentVariableContainer->getOrNull('album');
$arguments399['arguments'] = $array402;
$arguments399['additionalAttributes'] = NULL;
$arguments399['data'] = NULL;
$arguments399['extensionName'] = NULL;
$arguments399['pluginName'] = NULL;
$arguments399['pageUid'] = NULL;
$arguments399['pageType'] = 0;
$arguments399['noCache'] = false;
$arguments399['noCacheHash'] = false;
$arguments399['section'] = '';
$arguments399['format'] = '';
$arguments399['linkAccessRestrictedPages'] = false;
$arguments399['additionalParams'] = array (
);
$arguments399['absolute'] = false;
$arguments399['addQueryString'] = false;
$arguments399['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments399['addQueryStringMethod'] = NULL;
$arguments399['class'] = NULL;
$arguments399['dir'] = NULL;
$arguments399['id'] = NULL;
$arguments399['lang'] = NULL;
$arguments399['style'] = NULL;
$arguments399['accesskey'] = NULL;
$arguments399['tabindex'] = NULL;
$arguments399['onclick'] = NULL;
$arguments399['name'] = NULL;
$arguments399['rel'] = NULL;
$arguments399['rev'] = NULL;
$arguments399['target'] = NULL;
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output404 = '';

$output404 .= '
                            <span class="t3-icon t3-icon-actions t3-icon-actions-edit t3-icon-edit-upload">&nbsp;</span>
                            <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments405 = array();
$arguments405['key'] = 'tx_yag_controller_album_addItems';
$arguments405['id'] = NULL;
$arguments405['default'] = NULL;
$arguments405['htmlEscape'] = NULL;
$arguments405['arguments'] = NULL;
$arguments405['extensionName'] = NULL;
$renderChildrenClosure406 = function() {return NULL;};

$output404 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments405, $renderChildrenClosure406, $renderingContext);

$output404 .= '</span>
                        ';
return $output404;
};
$viewHelper407 = $self->getViewHelper('$viewHelper407', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper407->setArguments($arguments399);
$viewHelper407->setRenderingContext($renderingContext);
$viewHelper407->setRenderChildrenClosure($renderChildrenClosure403);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output396 .= $viewHelper407->initializeArgumentsAndRender();

$output396 .= '
                    </div>
                ';
return $output396;
};

$output338 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext);

$output338 .= '
            ';
return $output338;
};
$arguments336['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output408 = '';

$output408 .= '
                    <div class="tx-yag-image-admin-sortingbox">
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments409 = array();
$arguments409['key'] = 'tx_yag_controller_album.dragNdrop';
$arguments409['id'] = NULL;
$arguments409['default'] = NULL;
$arguments409['htmlEscape'] = NULL;
$arguments409['arguments'] = NULL;
$arguments409['extensionName'] = NULL;
$renderChildrenClosure410 = function() {return NULL;};

$output408 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments409, $renderChildrenClosure410, $renderingContext);

$output408 .= '!</p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments411 = array();
$arguments411['action'] = 'updateSorting';
$arguments411['controller'] = 'Album';
$arguments411['additionalAttributes'] = NULL;
$arguments411['data'] = NULL;
$arguments411['arguments'] = array (
);
$arguments411['extensionName'] = NULL;
$arguments411['pluginName'] = NULL;
$arguments411['pageUid'] = NULL;
$arguments411['object'] = NULL;
$arguments411['pageType'] = 0;
$arguments411['noCache'] = false;
$arguments411['noCacheHash'] = false;
$arguments411['section'] = '';
$arguments411['format'] = '';
$arguments411['additionalParams'] = array (
);
$arguments411['absolute'] = false;
$arguments411['addQueryString'] = false;
$arguments411['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments411['fieldNamePrefix'] = NULL;
$arguments411['actionUri'] = NULL;
$arguments411['objectName'] = NULL;
$arguments411['hiddenFieldClassName'] = NULL;
$arguments411['enctype'] = NULL;
$arguments411['method'] = NULL;
$arguments411['name'] = NULL;
$arguments411['onreset'] = NULL;
$arguments411['onsubmit'] = NULL;
$arguments411['class'] = NULL;
$arguments411['dir'] = NULL;
$arguments411['id'] = NULL;
$arguments411['lang'] = NULL;
$arguments411['style'] = NULL;
$arguments411['title'] = NULL;
$arguments411['accesskey'] = NULL;
$arguments411['tabindex'] = NULL;
$arguments411['onclick'] = NULL;
$renderChildrenClosure412 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output413 = '';

$output413 .= '
                            <p>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments414 = array();
$arguments414['name'] = 'album';
$arguments414['value'] = $currentVariableContainer->getOrNull('album');
$arguments414['additionalAttributes'] = NULL;
$arguments414['data'] = NULL;
$arguments414['property'] = NULL;
$arguments414['class'] = NULL;
$arguments414['dir'] = NULL;
$arguments414['id'] = NULL;
$arguments414['lang'] = NULL;
$arguments414['style'] = NULL;
$arguments414['title'] = NULL;
$arguments414['accesskey'] = NULL;
$arguments414['tabindex'] = NULL;
$arguments414['onclick'] = NULL;
$renderChildrenClosure415 = function() {return NULL;};
$viewHelper416 = $self->getViewHelper('$viewHelper416', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper416->setArguments($arguments414);
$viewHelper416->setRenderingContext($renderingContext);
$viewHelper416->setRenderChildrenClosure($renderChildrenClosure415);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output413 .= $viewHelper416->initializeArgumentsAndRender();

$output413 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments417 = array();
$arguments417['key'] = 'tx_yag_controller_item.sortingByField';
$arguments417['id'] = NULL;
$arguments417['default'] = NULL;
$arguments417['htmlEscape'] = NULL;
$arguments417['arguments'] = NULL;
$arguments417['extensionName'] = NULL;
$renderChildrenClosure418 = function() {return NULL;};

$output413 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments417, $renderChildrenClosure418, $renderingContext);

$output413 .= ':
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments419 = array();
$arguments419['name'] = 'sortingField';
// Rendering Array
$array420 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments421 = array();
$arguments421['key'] = 'tx_yag_domain_model_item.title';
$arguments421['id'] = NULL;
$arguments421['default'] = NULL;
$arguments421['htmlEscape'] = NULL;
$arguments421['arguments'] = NULL;
$arguments421['extensionName'] = NULL;
$renderChildrenClosure422 = function() {return NULL;};
$array420['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments421, $renderChildrenClosure422, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments423 = array();
$arguments423['key'] = 'tx_yag_domain_model_item.date';
$arguments423['id'] = NULL;
$arguments423['default'] = NULL;
$arguments423['htmlEscape'] = NULL;
$arguments423['arguments'] = NULL;
$arguments423['extensionName'] = NULL;
$renderChildrenClosure424 = function() {return NULL;};
$array420['date'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments423, $renderChildrenClosure424, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments425 = array();
$arguments425['key'] = 'tx_yag_domain_model_item.filename';
$arguments425['id'] = NULL;
$arguments425['default'] = NULL;
$arguments425['htmlEscape'] = NULL;
$arguments425['arguments'] = NULL;
$arguments425['extensionName'] = NULL;
$renderChildrenClosure426 = function() {return NULL;};
$array420['filename'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext);
$arguments419['options'] = $array420;
$arguments419['additionalAttributes'] = NULL;
$arguments419['data'] = NULL;
$arguments419['value'] = NULL;
$arguments419['property'] = NULL;
$arguments419['class'] = NULL;
$arguments419['dir'] = NULL;
$arguments419['id'] = NULL;
$arguments419['lang'] = NULL;
$arguments419['style'] = NULL;
$arguments419['title'] = NULL;
$arguments419['accesskey'] = NULL;
$arguments419['tabindex'] = NULL;
$arguments419['onclick'] = NULL;
$arguments419['size'] = NULL;
$arguments419['disabled'] = NULL;
$arguments419['optionValueField'] = NULL;
$arguments419['optionLabelField'] = NULL;
$arguments419['sortByOptionLabel'] = false;
$arguments419['selectAllByDefault'] = false;
$arguments419['errorClass'] = 'f3-form-error';
$arguments419['prependOptionLabel'] = NULL;
$arguments419['prependOptionValue'] = NULL;
$arguments419['multiple'] = false;
$renderChildrenClosure427 = function() {return NULL;};
$viewHelper428 = $self->getViewHelper('$viewHelper428', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper428->setArguments($arguments419);
$viewHelper428->setRenderingContext($renderingContext);
$viewHelper428->setRenderChildrenClosure($renderChildrenClosure427);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output413 .= $viewHelper428->initializeArgumentsAndRender();

$output413 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments429 = array();
$arguments429['key'] = 'tx_yag_controller_item.sortingWithDirection';
$arguments429['id'] = NULL;
$arguments429['default'] = NULL;
$arguments429['htmlEscape'] = NULL;
$arguments429['arguments'] = NULL;
$arguments429['extensionName'] = NULL;
$renderChildrenClosure430 = function() {return NULL;};

$output413 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments429, $renderChildrenClosure430, $renderingContext);

$output413 .= ':
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments431 = array();
$arguments431['name'] = 'sortingDirection';
// Rendering Array
$array432 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments433 = array();
$arguments433['key'] = 'tx_yag_controller_item.sortingAscending';
$arguments433['id'] = NULL;
$arguments433['default'] = NULL;
$arguments433['htmlEscape'] = NULL;
$arguments433['arguments'] = NULL;
$arguments433['extensionName'] = NULL;
$renderChildrenClosure434 = function() {return NULL;};
$array432['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments433, $renderChildrenClosure434, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments435 = array();
$arguments435['key'] = 'tx_yag_controller_item.sortingDescending';
$arguments435['id'] = NULL;
$arguments435['default'] = NULL;
$arguments435['htmlEscape'] = NULL;
$arguments435['arguments'] = NULL;
$arguments435['extensionName'] = NULL;
$renderChildrenClosure436 = function() {return NULL;};
$array432['-1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments435, $renderChildrenClosure436, $renderingContext);
$arguments431['options'] = $array432;
$arguments431['additionalAttributes'] = NULL;
$arguments431['data'] = NULL;
$arguments431['value'] = NULL;
$arguments431['property'] = NULL;
$arguments431['class'] = NULL;
$arguments431['dir'] = NULL;
$arguments431['id'] = NULL;
$arguments431['lang'] = NULL;
$arguments431['style'] = NULL;
$arguments431['title'] = NULL;
$arguments431['accesskey'] = NULL;
$arguments431['tabindex'] = NULL;
$arguments431['onclick'] = NULL;
$arguments431['size'] = NULL;
$arguments431['disabled'] = NULL;
$arguments431['optionValueField'] = NULL;
$arguments431['optionLabelField'] = NULL;
$arguments431['sortByOptionLabel'] = false;
$arguments431['selectAllByDefault'] = false;
$arguments431['errorClass'] = 'f3-form-error';
$arguments431['prependOptionLabel'] = NULL;
$arguments431['prependOptionValue'] = NULL;
$arguments431['multiple'] = false;
$renderChildrenClosure437 = function() {return NULL;};
$viewHelper438 = $self->getViewHelper('$viewHelper438', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper438->setArguments($arguments431);
$viewHelper438->setRenderingContext($renderingContext);
$viewHelper438->setRenderChildrenClosure($renderChildrenClosure437);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output413 .= $viewHelper438->initializeArgumentsAndRender();

$output413 .= '
                                &nbsp;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments439 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments440 = array();
$arguments440['key'] = 'tx_yag_controller_item.changeSorting';
$arguments440['id'] = NULL;
$arguments440['default'] = NULL;
$arguments440['htmlEscape'] = NULL;
$arguments440['arguments'] = NULL;
$arguments440['extensionName'] = NULL;
$renderChildrenClosure441 = function() {return NULL;};
$arguments439['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments440, $renderChildrenClosure441, $renderingContext);
$arguments439['class'] = 'btn btn-default';
$arguments439['additionalAttributes'] = NULL;
$arguments439['data'] = NULL;
$arguments439['name'] = NULL;
$arguments439['property'] = NULL;
$arguments439['disabled'] = NULL;
$arguments439['dir'] = NULL;
$arguments439['id'] = NULL;
$arguments439['lang'] = NULL;
$arguments439['style'] = NULL;
$arguments439['title'] = NULL;
$arguments439['accesskey'] = NULL;
$arguments439['tabindex'] = NULL;
$arguments439['onclick'] = NULL;
$renderChildrenClosure442 = function() {return NULL;};
$viewHelper443 = $self->getViewHelper('$viewHelper443', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper443->setArguments($arguments439);
$viewHelper443->setRenderingContext($renderingContext);
$viewHelper443->setRenderChildrenClosure($renderChildrenClosure442);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output413 .= $viewHelper443->initializeArgumentsAndRender();

$output413 .= ' <span style="color: red">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments444 = array();
$arguments444['key'] = 'tx_yag_controller_item.sortingWillBeOverwritten';
$arguments444['id'] = NULL;
$arguments444['default'] = NULL;
$arguments444['htmlEscape'] = NULL;
$arguments444['arguments'] = NULL;
$arguments444['extensionName'] = NULL;
$renderChildrenClosure445 = function() {return NULL;};

$output413 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments444, $renderChildrenClosure445, $renderingContext);

$output413 .= '</span>
                            </p>
                        ';
return $output413;
};
$viewHelper446 = $self->getViewHelper('$viewHelper446', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper446->setArguments($arguments411);
$viewHelper446->setRenderingContext($renderingContext);
$viewHelper446->setRenderChildrenClosure($renderChildrenClosure412);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output408 .= $viewHelper446->initializeArgumentsAndRender();

$output408 .= '
                    </div>
                    <div class="config-fotos yag-gallery" data-yag-gallery-settings=\'';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_JsonSettingsViewHelper
$arguments447 = array();
$arguments447['tsPath'] = 'javaScriptSettings';
$arguments447['settings'] = NULL;
$arguments447['onlyKeyValuePairs'] = false;
$renderChildrenClosure448 = function() {return NULL;};
$viewHelper449 = $self->getViewHelper('$viewHelper449', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_JsonSettingsViewHelper');
$viewHelper449->setArguments($arguments447);
$viewHelper449->setRenderingContext($renderingContext);
$viewHelper449->setRenderChildrenClosure($renderChildrenClosure448);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_JsonSettingsViewHelper

$output408 .= $viewHelper449->initializeArgumentsAndRender();

$output408 .= '\'>
                        <div id="sortable" class="ui-sortable">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments450 = array();
$arguments450['each'] = $currentVariableContainer->getOrNull('listData');
$arguments450['key'] = 'rowIndex';
$arguments450['as'] = 'listRow';
$arguments450['reverse'] = false;
$arguments450['iteration'] = NULL;
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output452 = '';

$output452 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments453 = array();
$arguments453['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.imageAdminThumbPartial', $renderingContext);
// Rendering Array
$array454 = array();
$array454['config'] = $currentVariableContainer->getOrNull('config');
$array454['album'] = $currentVariableContainer->getOrNull('album');
$array454['albums'] = $currentVariableContainer->getOrNull('albums');
$array454['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'image.value', $renderingContext);
$array454['rowIndex'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'specialValues.absoluteRowIndex', $renderingContext);
$array454['pager'] = $currentVariableContainer->getOrNull('pager');
$array454['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
$array454['currentPid'] = $currentVariableContainer->getOrNull('currentPid');
$array454['yagContext'] = $currentVariableContainer->getOrNull('yagContext');
$arguments453['arguments'] = $array454;
$arguments453['section'] = NULL;
$arguments453['optional'] = false;
$renderChildrenClosure455 = function() {return NULL;};

$output452 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments453, $renderChildrenClosure455, $renderingContext);

$output452 .= '
                            ';
return $output452;
};

$output408 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output408 .= '
                        </div>
                    </div>


                    <div style="clear:both;">&nbsp;</div>
                    <div class="tx-yag-pager">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments456 = array();
$arguments456['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.pagerPartial', $renderingContext);
// Rendering Array
$array457 = array();
$array457['controller'] = 'ItemList';
$array457['action'] = 'list';
$array457['pager'] = $currentVariableContainer->getOrNull('pager');
$array457['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments458 = array();
$arguments458['key'] = 'tx_yag_domain_model_items';
$arguments458['id'] = NULL;
$arguments458['default'] = NULL;
$arguments458['htmlEscape'] = NULL;
$arguments458['arguments'] = NULL;
$arguments458['extensionName'] = NULL;
$renderChildrenClosure459 = function() {return NULL;};
$array457['itemsText'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments458, $renderChildrenClosure459, $renderingContext);
$arguments456['arguments'] = $array457;
$arguments456['section'] = NULL;
$arguments456['optional'] = false;
$renderChildrenClosure460 = function() {return NULL;};

$output408 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments456, $renderChildrenClosure460, $renderingContext);

$output408 .= '
                    </div>
                ';
return $output408;
};
$arguments336['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output461 = '';

$output461 .= '
                    <div>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments462 = array();
$arguments462['key'] = 'tx_yag_domain_model_album.noItemClick';
$arguments462['id'] = NULL;
$arguments462['default'] = NULL;
$arguments462['htmlEscape'] = NULL;
$arguments462['arguments'] = NULL;
$arguments462['extensionName'] = NULL;
$renderChildrenClosure463 = function() {return NULL;};

$output461 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext);

$output461 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments464 = array();
$arguments464['controller'] = 'Album';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments465 = array();
$arguments465['key'] = 'tx_yag_controller_album_addItems';
$arguments465['id'] = NULL;
$arguments465['default'] = NULL;
$arguments465['htmlEscape'] = NULL;
$arguments465['arguments'] = NULL;
$arguments465['extensionName'] = NULL;
$renderChildrenClosure466 = function() {return NULL;};
$arguments464['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments465, $renderChildrenClosure466, $renderingContext);
$arguments464['action'] = 'addItems';
// Rendering Array
$array467 = array();
$array467['album'] = $currentVariableContainer->getOrNull('album');
$arguments464['arguments'] = $array467;
$arguments464['additionalAttributes'] = NULL;
$arguments464['data'] = NULL;
$arguments464['extensionName'] = NULL;
$arguments464['pluginName'] = NULL;
$arguments464['pageUid'] = NULL;
$arguments464['pageType'] = 0;
$arguments464['noCache'] = false;
$arguments464['noCacheHash'] = false;
$arguments464['section'] = '';
$arguments464['format'] = '';
$arguments464['linkAccessRestrictedPages'] = false;
$arguments464['additionalParams'] = array (
);
$arguments464['absolute'] = false;
$arguments464['addQueryString'] = false;
$arguments464['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments464['addQueryStringMethod'] = NULL;
$arguments464['class'] = NULL;
$arguments464['dir'] = NULL;
$arguments464['id'] = NULL;
$arguments464['lang'] = NULL;
$arguments464['style'] = NULL;
$arguments464['accesskey'] = NULL;
$arguments464['tabindex'] = NULL;
$arguments464['onclick'] = NULL;
$arguments464['name'] = NULL;
$arguments464['rel'] = NULL;
$arguments464['rev'] = NULL;
$arguments464['target'] = NULL;
$renderChildrenClosure468 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output469 = '';

$output469 .= '
                            <span class="t3-icon t3-icon-actions t3-icon-actions-edit t3-icon-edit-upload">&nbsp;</span>
                            <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments470 = array();
$arguments470['key'] = 'tx_yag_controller_album_addItems';
$arguments470['id'] = NULL;
$arguments470['default'] = NULL;
$arguments470['htmlEscape'] = NULL;
$arguments470['arguments'] = NULL;
$arguments470['extensionName'] = NULL;
$renderChildrenClosure471 = function() {return NULL;};

$output469 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output469 .= '</span>
                        ';
return $output469;
};
$viewHelper472 = $self->getViewHelper('$viewHelper472', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper472->setArguments($arguments464);
$viewHelper472->setRenderingContext($renderingContext);
$viewHelper472->setRenderChildrenClosure($renderChildrenClosure468);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output461 .= $viewHelper472->initializeArgumentsAndRender();

$output461 .= '
                    </div>
                ';
return $output461;
};

$output305 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments336, $renderChildrenClosure337, $renderingContext);

$output305 .= '
		</div>




		<div id="tabs-2">
		    <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments473 = array();
$arguments473['key'] = 'tx_yag_controller_item.imagesEdit.description';
// Rendering Array
$array474 = array();
$array474['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'name', $renderingContext);
$arguments473['arguments'] = $array474;
$arguments473['id'] = NULL;
$arguments473['default'] = NULL;
$arguments473['htmlEscape'] = NULL;
$arguments473['extensionName'] = NULL;
$renderChildrenClosure475 = function() {return NULL;};

$output305 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments473, $renderChildrenClosure475, $renderingContext);

$output305 .= '</h3>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments476 = array();
// Rendering Boolean node
$arguments476['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listData'), 'count', $renderingContext));
$arguments476['then'] = NULL;
$arguments476['else'] = NULL;
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output478 = '';

$output478 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments479 = array();
$renderChildrenClosure480 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output481 = '';

$output481 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments482 = array();
$arguments482['method'] = 'post';
$arguments482['action'] = 'bulkUpdate';
$arguments482['controller'] = 'Item';
$arguments482['name'] = 'album';
$arguments482['object'] = $currentVariableContainer->getOrNull('album');
$arguments482['section'] = 'tabs-2';
$arguments482['additionalAttributes'] = NULL;
$arguments482['data'] = NULL;
$arguments482['arguments'] = array (
);
$arguments482['extensionName'] = NULL;
$arguments482['pluginName'] = NULL;
$arguments482['pageUid'] = NULL;
$arguments482['pageType'] = 0;
$arguments482['noCache'] = false;
$arguments482['noCacheHash'] = false;
$arguments482['format'] = '';
$arguments482['additionalParams'] = array (
);
$arguments482['absolute'] = false;
$arguments482['addQueryString'] = false;
$arguments482['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments482['fieldNamePrefix'] = NULL;
$arguments482['actionUri'] = NULL;
$arguments482['objectName'] = NULL;
$arguments482['hiddenFieldClassName'] = NULL;
$arguments482['enctype'] = NULL;
$arguments482['onreset'] = NULL;
$arguments482['onsubmit'] = NULL;
$arguments482['class'] = NULL;
$arguments482['dir'] = NULL;
$arguments482['id'] = NULL;
$arguments482['lang'] = NULL;
$arguments482['style'] = NULL;
$arguments482['title'] = NULL;
$arguments482['accesskey'] = NULL;
$arguments482['tabindex'] = NULL;
$arguments482['onclick'] = NULL;
$renderChildrenClosure483 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output484 = '';

$output484 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments485 = array();
$arguments485['property'] = 'uid';
$arguments485['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments485['additionalAttributes'] = NULL;
$arguments485['data'] = NULL;
$arguments485['name'] = NULL;
$arguments485['class'] = NULL;
$arguments485['dir'] = NULL;
$arguments485['id'] = NULL;
$arguments485['lang'] = NULL;
$arguments485['style'] = NULL;
$arguments485['title'] = NULL;
$arguments485['accesskey'] = NULL;
$arguments485['tabindex'] = NULL;
$arguments485['onclick'] = NULL;
$renderChildrenClosure486 = function() {return NULL;};
$viewHelper487 = $self->getViewHelper('$viewHelper487', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper487->setArguments($arguments485);
$viewHelper487->setRenderingContext($renderingContext);
$viewHelper487->setRenderChildrenClosure($renderChildrenClosure486);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output484 .= $viewHelper487->initializeArgumentsAndRender();

$output484 .= '
                        <div class="yag-buttonLine">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments488 = array();
$arguments488['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments489 = array();
$arguments489['key'] = 'tx_yag_general.save';
$arguments489['default'] = 'Save';
$arguments489['id'] = NULL;
$arguments489['htmlEscape'] = NULL;
$arguments489['arguments'] = NULL;
$arguments489['extensionName'] = NULL;
$renderChildrenClosure490 = function() {return NULL;};
$arguments488['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments489, $renderChildrenClosure490, $renderingContext);
$arguments488['additionalAttributes'] = NULL;
$arguments488['data'] = NULL;
$arguments488['name'] = NULL;
$arguments488['property'] = NULL;
$arguments488['disabled'] = NULL;
$arguments488['dir'] = NULL;
$arguments488['id'] = NULL;
$arguments488['lang'] = NULL;
$arguments488['style'] = NULL;
$arguments488['title'] = NULL;
$arguments488['accesskey'] = NULL;
$arguments488['tabindex'] = NULL;
$arguments488['onclick'] = NULL;
$renderChildrenClosure491 = function() {return NULL;};
$viewHelper492 = $self->getViewHelper('$viewHelper492', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper492->setArguments($arguments488);
$viewHelper492->setRenderingContext($renderingContext);
$viewHelper492->setRenderChildrenClosure($renderChildrenClosure491);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output484 .= $viewHelper492->initializeArgumentsAndRender();

$output484 .= '
                        </div>
                        <div class="edit-fotos">
                            <div class="ui-sortable">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments493 = array();
$arguments493['each'] = $currentVariableContainer->getOrNull('listData');
$arguments493['key'] = 'rowIndex';
$arguments493['as'] = 'listRow';
$arguments493['reverse'] = false;
$arguments493['iteration'] = NULL;
$renderChildrenClosure494 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output495 = '';

$output495 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments496 = array();
$arguments496['partial'] = 'Image/ImageAdminEdit';
// Rendering Array
$array497 = array();
$array497['yagContext'] = $currentVariableContainer->getOrNull('yagContext');
$array497['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'image.value', $renderingContext);
$array497['albums'] = $currentVariableContainer->getOrNull('albums');
$array497['album'] = $currentVariableContainer->getOrNull('album');
$array497['currentPid'] = $currentVariableContainer->getOrNull('currentPid');
$arguments496['arguments'] = $array497;
$arguments496['section'] = NULL;
$arguments496['optional'] = false;
$renderChildrenClosure498 = function() {return NULL;};

$output495 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments496, $renderChildrenClosure498, $renderingContext);

$output495 .= '
                                ';
return $output495;
};

$output484 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments493, $renderChildrenClosure494, $renderingContext);

$output484 .= '
                            </div>
                        </div>
                        <div class="yag-buttonLine">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments499 = array();
$arguments499['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments500 = array();
$arguments500['key'] = 'tx_yag_general.save';
$arguments500['default'] = 'Save';
$arguments500['id'] = NULL;
$arguments500['htmlEscape'] = NULL;
$arguments500['arguments'] = NULL;
$arguments500['extensionName'] = NULL;
$renderChildrenClosure501 = function() {return NULL;};
$arguments499['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments500, $renderChildrenClosure501, $renderingContext);
$arguments499['additionalAttributes'] = NULL;
$arguments499['data'] = NULL;
$arguments499['name'] = NULL;
$arguments499['property'] = NULL;
$arguments499['disabled'] = NULL;
$arguments499['dir'] = NULL;
$arguments499['id'] = NULL;
$arguments499['lang'] = NULL;
$arguments499['style'] = NULL;
$arguments499['title'] = NULL;
$arguments499['accesskey'] = NULL;
$arguments499['tabindex'] = NULL;
$arguments499['onclick'] = NULL;
$renderChildrenClosure502 = function() {return NULL;};
$viewHelper503 = $self->getViewHelper('$viewHelper503', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper503->setArguments($arguments499);
$viewHelper503->setRenderingContext($renderingContext);
$viewHelper503->setRenderChildrenClosure($renderChildrenClosure502);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output484 .= $viewHelper503->initializeArgumentsAndRender();

$output484 .= '
                        </div>
                       ';
return $output484;
};
$viewHelper504 = $self->getViewHelper('$viewHelper504', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper504->setArguments($arguments482);
$viewHelper504->setRenderingContext($renderingContext);
$viewHelper504->setRenderChildrenClosure($renderChildrenClosure483);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output481 .= $viewHelper504->initializeArgumentsAndRender();

$output481 .= '
                    ';
return $output481;
};

$output478 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments479, $renderChildrenClosure480, $renderingContext);

$output478 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments505 = array();
$renderChildrenClosure506 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output507 = '';

$output507 .= '
                        <div>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments508 = array();
$arguments508['key'] = 'tx_yag_domain_model_album.noItemClick';
$arguments508['id'] = NULL;
$arguments508['default'] = NULL;
$arguments508['htmlEscape'] = NULL;
$arguments508['arguments'] = NULL;
$arguments508['extensionName'] = NULL;
$renderChildrenClosure509 = function() {return NULL;};

$output507 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments508, $renderChildrenClosure509, $renderingContext);

$output507 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments510 = array();
$arguments510['controller'] = 'Album';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments511 = array();
$arguments511['key'] = 'tx_yag_controller_album_addItems';
$arguments511['id'] = NULL;
$arguments511['default'] = NULL;
$arguments511['htmlEscape'] = NULL;
$arguments511['arguments'] = NULL;
$arguments511['extensionName'] = NULL;
$renderChildrenClosure512 = function() {return NULL;};
$arguments510['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments511, $renderChildrenClosure512, $renderingContext);
$arguments510['action'] = 'addItems';
// Rendering Array
$array513 = array();
$array513['album'] = $currentVariableContainer->getOrNull('album');
$arguments510['arguments'] = $array513;
$arguments510['additionalAttributes'] = NULL;
$arguments510['data'] = NULL;
$arguments510['extensionName'] = NULL;
$arguments510['pluginName'] = NULL;
$arguments510['pageUid'] = NULL;
$arguments510['pageType'] = 0;
$arguments510['noCache'] = false;
$arguments510['noCacheHash'] = false;
$arguments510['section'] = '';
$arguments510['format'] = '';
$arguments510['linkAccessRestrictedPages'] = false;
$arguments510['additionalParams'] = array (
);
$arguments510['absolute'] = false;
$arguments510['addQueryString'] = false;
$arguments510['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments510['addQueryStringMethod'] = NULL;
$arguments510['class'] = NULL;
$arguments510['dir'] = NULL;
$arguments510['id'] = NULL;
$arguments510['lang'] = NULL;
$arguments510['style'] = NULL;
$arguments510['accesskey'] = NULL;
$arguments510['tabindex'] = NULL;
$arguments510['onclick'] = NULL;
$arguments510['name'] = NULL;
$arguments510['rel'] = NULL;
$arguments510['rev'] = NULL;
$arguments510['target'] = NULL;
$renderChildrenClosure514 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output515 = '';

$output515 .= '
                                <span class="t3-icon t3-icon-actions t3-icon-actions-edit t3-icon-edit-upload">&nbsp;</span>
                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments516 = array();
$arguments516['key'] = 'tx_yag_controller_album_addItems';
$arguments516['id'] = NULL;
$arguments516['default'] = NULL;
$arguments516['htmlEscape'] = NULL;
$arguments516['arguments'] = NULL;
$arguments516['extensionName'] = NULL;
$renderChildrenClosure517 = function() {return NULL;};

$output515 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments516, $renderChildrenClosure517, $renderingContext);

$output515 .= '</span>
                            ';
return $output515;
};
$viewHelper518 = $self->getViewHelper('$viewHelper518', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper518->setArguments($arguments510);
$viewHelper518->setRenderingContext($renderingContext);
$viewHelper518->setRenderChildrenClosure($renderChildrenClosure514);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output507 .= $viewHelper518->initializeArgumentsAndRender();

$output507 .= '
                        </div>
                    ';
return $output507;
};

$output478 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments505, $renderChildrenClosure506, $renderingContext);

$output478 .= '
                ';
return $output478;
};
$arguments476['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output519 = '';

$output519 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments520 = array();
$arguments520['method'] = 'post';
$arguments520['action'] = 'bulkUpdate';
$arguments520['controller'] = 'Item';
$arguments520['name'] = 'album';
$arguments520['object'] = $currentVariableContainer->getOrNull('album');
$arguments520['section'] = 'tabs-2';
$arguments520['additionalAttributes'] = NULL;
$arguments520['data'] = NULL;
$arguments520['arguments'] = array (
);
$arguments520['extensionName'] = NULL;
$arguments520['pluginName'] = NULL;
$arguments520['pageUid'] = NULL;
$arguments520['pageType'] = 0;
$arguments520['noCache'] = false;
$arguments520['noCacheHash'] = false;
$arguments520['format'] = '';
$arguments520['additionalParams'] = array (
);
$arguments520['absolute'] = false;
$arguments520['addQueryString'] = false;
$arguments520['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments520['fieldNamePrefix'] = NULL;
$arguments520['actionUri'] = NULL;
$arguments520['objectName'] = NULL;
$arguments520['hiddenFieldClassName'] = NULL;
$arguments520['enctype'] = NULL;
$arguments520['onreset'] = NULL;
$arguments520['onsubmit'] = NULL;
$arguments520['class'] = NULL;
$arguments520['dir'] = NULL;
$arguments520['id'] = NULL;
$arguments520['lang'] = NULL;
$arguments520['style'] = NULL;
$arguments520['title'] = NULL;
$arguments520['accesskey'] = NULL;
$arguments520['tabindex'] = NULL;
$arguments520['onclick'] = NULL;
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output522 = '';

$output522 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments523 = array();
$arguments523['property'] = 'uid';
$arguments523['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments523['additionalAttributes'] = NULL;
$arguments523['data'] = NULL;
$arguments523['name'] = NULL;
$arguments523['class'] = NULL;
$arguments523['dir'] = NULL;
$arguments523['id'] = NULL;
$arguments523['lang'] = NULL;
$arguments523['style'] = NULL;
$arguments523['title'] = NULL;
$arguments523['accesskey'] = NULL;
$arguments523['tabindex'] = NULL;
$arguments523['onclick'] = NULL;
$renderChildrenClosure524 = function() {return NULL;};
$viewHelper525 = $self->getViewHelper('$viewHelper525', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper525->setArguments($arguments523);
$viewHelper525->setRenderingContext($renderingContext);
$viewHelper525->setRenderChildrenClosure($renderChildrenClosure524);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output522 .= $viewHelper525->initializeArgumentsAndRender();

$output522 .= '
                        <div class="yag-buttonLine">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments526 = array();
$arguments526['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments527 = array();
$arguments527['key'] = 'tx_yag_general.save';
$arguments527['default'] = 'Save';
$arguments527['id'] = NULL;
$arguments527['htmlEscape'] = NULL;
$arguments527['arguments'] = NULL;
$arguments527['extensionName'] = NULL;
$renderChildrenClosure528 = function() {return NULL;};
$arguments526['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments527, $renderChildrenClosure528, $renderingContext);
$arguments526['additionalAttributes'] = NULL;
$arguments526['data'] = NULL;
$arguments526['name'] = NULL;
$arguments526['property'] = NULL;
$arguments526['disabled'] = NULL;
$arguments526['dir'] = NULL;
$arguments526['id'] = NULL;
$arguments526['lang'] = NULL;
$arguments526['style'] = NULL;
$arguments526['title'] = NULL;
$arguments526['accesskey'] = NULL;
$arguments526['tabindex'] = NULL;
$arguments526['onclick'] = NULL;
$renderChildrenClosure529 = function() {return NULL;};
$viewHelper530 = $self->getViewHelper('$viewHelper530', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper530->setArguments($arguments526);
$viewHelper530->setRenderingContext($renderingContext);
$viewHelper530->setRenderChildrenClosure($renderChildrenClosure529);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output522 .= $viewHelper530->initializeArgumentsAndRender();

$output522 .= '
                        </div>
                        <div class="edit-fotos">
                            <div class="ui-sortable">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments531 = array();
$arguments531['each'] = $currentVariableContainer->getOrNull('listData');
$arguments531['key'] = 'rowIndex';
$arguments531['as'] = 'listRow';
$arguments531['reverse'] = false;
$arguments531['iteration'] = NULL;
$renderChildrenClosure532 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output533 = '';

$output533 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments534 = array();
$arguments534['partial'] = 'Image/ImageAdminEdit';
// Rendering Array
$array535 = array();
$array535['yagContext'] = $currentVariableContainer->getOrNull('yagContext');
$array535['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'image.value', $renderingContext);
$array535['albums'] = $currentVariableContainer->getOrNull('albums');
$array535['album'] = $currentVariableContainer->getOrNull('album');
$array535['currentPid'] = $currentVariableContainer->getOrNull('currentPid');
$arguments534['arguments'] = $array535;
$arguments534['section'] = NULL;
$arguments534['optional'] = false;
$renderChildrenClosure536 = function() {return NULL;};

$output533 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments534, $renderChildrenClosure536, $renderingContext);

$output533 .= '
                                ';
return $output533;
};

$output522 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments531, $renderChildrenClosure532, $renderingContext);

$output522 .= '
                            </div>
                        </div>
                        <div class="yag-buttonLine">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments537 = array();
$arguments537['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments538 = array();
$arguments538['key'] = 'tx_yag_general.save';
$arguments538['default'] = 'Save';
$arguments538['id'] = NULL;
$arguments538['htmlEscape'] = NULL;
$arguments538['arguments'] = NULL;
$arguments538['extensionName'] = NULL;
$renderChildrenClosure539 = function() {return NULL;};
$arguments537['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments538, $renderChildrenClosure539, $renderingContext);
$arguments537['additionalAttributes'] = NULL;
$arguments537['data'] = NULL;
$arguments537['name'] = NULL;
$arguments537['property'] = NULL;
$arguments537['disabled'] = NULL;
$arguments537['dir'] = NULL;
$arguments537['id'] = NULL;
$arguments537['lang'] = NULL;
$arguments537['style'] = NULL;
$arguments537['title'] = NULL;
$arguments537['accesskey'] = NULL;
$arguments537['tabindex'] = NULL;
$arguments537['onclick'] = NULL;
$renderChildrenClosure540 = function() {return NULL;};
$viewHelper541 = $self->getViewHelper('$viewHelper541', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper541->setArguments($arguments537);
$viewHelper541->setRenderingContext($renderingContext);
$viewHelper541->setRenderChildrenClosure($renderChildrenClosure540);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output522 .= $viewHelper541->initializeArgumentsAndRender();

$output522 .= '
                        </div>
                       ';
return $output522;
};
$viewHelper542 = $self->getViewHelper('$viewHelper542', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper542->setArguments($arguments520);
$viewHelper542->setRenderingContext($renderingContext);
$viewHelper542->setRenderChildrenClosure($renderChildrenClosure521);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output519 .= $viewHelper542->initializeArgumentsAndRender();

$output519 .= '
                    ';
return $output519;
};
$arguments476['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output543 = '';

$output543 .= '
                        <div>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments544 = array();
$arguments544['key'] = 'tx_yag_domain_model_album.noItemClick';
$arguments544['id'] = NULL;
$arguments544['default'] = NULL;
$arguments544['htmlEscape'] = NULL;
$arguments544['arguments'] = NULL;
$arguments544['extensionName'] = NULL;
$renderChildrenClosure545 = function() {return NULL;};

$output543 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext);

$output543 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments546 = array();
$arguments546['controller'] = 'Album';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments547 = array();
$arguments547['key'] = 'tx_yag_controller_album_addItems';
$arguments547['id'] = NULL;
$arguments547['default'] = NULL;
$arguments547['htmlEscape'] = NULL;
$arguments547['arguments'] = NULL;
$arguments547['extensionName'] = NULL;
$renderChildrenClosure548 = function() {return NULL;};
$arguments546['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments547, $renderChildrenClosure548, $renderingContext);
$arguments546['action'] = 'addItems';
// Rendering Array
$array549 = array();
$array549['album'] = $currentVariableContainer->getOrNull('album');
$arguments546['arguments'] = $array549;
$arguments546['additionalAttributes'] = NULL;
$arguments546['data'] = NULL;
$arguments546['extensionName'] = NULL;
$arguments546['pluginName'] = NULL;
$arguments546['pageUid'] = NULL;
$arguments546['pageType'] = 0;
$arguments546['noCache'] = false;
$arguments546['noCacheHash'] = false;
$arguments546['section'] = '';
$arguments546['format'] = '';
$arguments546['linkAccessRestrictedPages'] = false;
$arguments546['additionalParams'] = array (
);
$arguments546['absolute'] = false;
$arguments546['addQueryString'] = false;
$arguments546['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments546['addQueryStringMethod'] = NULL;
$arguments546['class'] = NULL;
$arguments546['dir'] = NULL;
$arguments546['id'] = NULL;
$arguments546['lang'] = NULL;
$arguments546['style'] = NULL;
$arguments546['accesskey'] = NULL;
$arguments546['tabindex'] = NULL;
$arguments546['onclick'] = NULL;
$arguments546['name'] = NULL;
$arguments546['rel'] = NULL;
$arguments546['rev'] = NULL;
$arguments546['target'] = NULL;
$renderChildrenClosure550 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output551 = '';

$output551 .= '
                                <span class="t3-icon t3-icon-actions t3-icon-actions-edit t3-icon-edit-upload">&nbsp;</span>
                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments552 = array();
$arguments552['key'] = 'tx_yag_controller_album_addItems';
$arguments552['id'] = NULL;
$arguments552['default'] = NULL;
$arguments552['htmlEscape'] = NULL;
$arguments552['arguments'] = NULL;
$arguments552['extensionName'] = NULL;
$renderChildrenClosure553 = function() {return NULL;};

$output551 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments552, $renderChildrenClosure553, $renderingContext);

$output551 .= '</span>
                            ';
return $output551;
};
$viewHelper554 = $self->getViewHelper('$viewHelper554', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper554->setArguments($arguments546);
$viewHelper554->setRenderingContext($renderingContext);
$viewHelper554->setRenderChildrenClosure($renderChildrenClosure550);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output543 .= $viewHelper554->initializeArgumentsAndRender();

$output543 .= '
                        </div>
                    ';
return $output543;
};

$output305 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments476, $renderChildrenClosure477, $renderingContext);

$output305 .= '
	        <div style="clear:both;">&nbsp;</div>
            <div class="tx-yag-pager">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments555 = array();
$arguments555['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.pagerPartial', $renderingContext);
// Rendering Array
$array556 = array();
$array556['controller'] = 'ItemList';
$array556['action'] = 'list';
$array556['pager'] = $currentVariableContainer->getOrNull('pager');
$array556['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
$array556['itemsText'] = 'images';
$arguments555['arguments'] = $array556;
$arguments555['section'] = NULL;
$arguments555['optional'] = false;
$renderChildrenClosure557 = function() {return NULL;};

$output305 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments555, $renderChildrenClosure557, $renderingContext);

$output305 .= '
			</div>
		</div>

		<div id="tabs-3">
		    <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments558 = array();
$arguments558['key'] = 'tx_yag_controller_album.editHeader';
$arguments558['default'] = 'Edit album';
$arguments558['id'] = NULL;
$arguments558['htmlEscape'] = NULL;
$arguments558['arguments'] = NULL;
$arguments558['extensionName'] = NULL;
$renderChildrenClosure559 = function() {return NULL;};

$output305 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments558, $renderChildrenClosure559, $renderingContext);

$output305 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments560 = array();
$arguments560['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'name', $renderingContext);
$arguments560['keepQuotes'] = false;
$arguments560['encoding'] = NULL;
$arguments560['doubleEncode'] = true;
$renderChildrenClosure561 = function() {return NULL;};
$value562 = ($arguments560['value'] !== NULL ? $arguments560['value'] : $renderChildrenClosure561());

$output305 .= (!is_string($value562) ? $value562 : htmlspecialchars($value562, ($arguments560['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments560['encoding'] !== NULL ? $arguments560['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments560['doubleEncode']));

$output305 .= '</h3>

            <div class="yag-box-white">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments563 = array();
$arguments563['partial'] = 'FormErrors';
// Rendering Array
$array564 = array();
$array564['for'] = 'album';
$arguments563['arguments'] = $array564;
$arguments563['section'] = NULL;
$arguments563['optional'] = false;
$renderChildrenClosure565 = function() {return NULL;};

$output305 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments563, $renderChildrenClosure565, $renderingContext);

$output305 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments566 = array();
$arguments566['method'] = 'post';
$arguments566['action'] = 'update';
$arguments566['controller'] = 'Album';
$arguments566['name'] = 'album';
$arguments566['object'] = $currentVariableContainer->getOrNull('album');
$arguments566['additionalAttributes'] = NULL;
$arguments566['data'] = NULL;
$arguments566['arguments'] = array (
);
$arguments566['extensionName'] = NULL;
$arguments566['pluginName'] = NULL;
$arguments566['pageUid'] = NULL;
$arguments566['pageType'] = 0;
$arguments566['noCache'] = false;
$arguments566['noCacheHash'] = false;
$arguments566['section'] = '';
$arguments566['format'] = '';
$arguments566['additionalParams'] = array (
);
$arguments566['absolute'] = false;
$arguments566['addQueryString'] = false;
$arguments566['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments566['fieldNamePrefix'] = NULL;
$arguments566['actionUri'] = NULL;
$arguments566['objectName'] = NULL;
$arguments566['hiddenFieldClassName'] = NULL;
$arguments566['enctype'] = NULL;
$arguments566['onreset'] = NULL;
$arguments566['onsubmit'] = NULL;
$arguments566['class'] = NULL;
$arguments566['dir'] = NULL;
$arguments566['id'] = NULL;
$arguments566['lang'] = NULL;
$arguments566['style'] = NULL;
$arguments566['title'] = NULL;
$arguments566['accesskey'] = NULL;
$arguments566['tabindex'] = NULL;
$arguments566['onclick'] = NULL;
$renderChildrenClosure567 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output568 = '';

$output568 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments569 = array();
$arguments569['partial'] = 'Album/FormFields';
// Rendering Array
$array570 = array();
$array570['album'] = $currentVariableContainer->getOrNull('album');
$array570['selectableGalleries'] = $currentVariableContainer->getOrNull('selectableGalleries');
$array570['selectedGallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'gallery', $renderingContext);
$array570['currentPid'] = $currentVariableContainer->getOrNull('currentPid');
$array570['yagContext'] = $currentVariableContainer->getOrNull('yagContext');
$array570['config'] = $currentVariableContainer->getOrNull('config');
$arguments569['arguments'] = $array570;
$arguments569['section'] = NULL;
$arguments569['optional'] = false;
$renderChildrenClosure571 = function() {return NULL;};

$output568 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments569, $renderChildrenClosure571, $renderingContext);

$output568 .= '

                    <div class="yag-buttonLine">
                        <span class="yag-button">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments572 = array();
$arguments572['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments573 = array();
$arguments573['key'] = 'tx_yag_general.save';
$arguments573['default'] = 'Save';
$arguments573['id'] = NULL;
$arguments573['htmlEscape'] = NULL;
$arguments573['arguments'] = NULL;
$arguments573['extensionName'] = NULL;
$renderChildrenClosure574 = function() {return NULL;};
$arguments572['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments573, $renderChildrenClosure574, $renderingContext);
$arguments572['additionalAttributes'] = NULL;
$arguments572['data'] = NULL;
$arguments572['name'] = NULL;
$arguments572['property'] = NULL;
$arguments572['disabled'] = NULL;
$arguments572['dir'] = NULL;
$arguments572['id'] = NULL;
$arguments572['lang'] = NULL;
$arguments572['style'] = NULL;
$arguments572['title'] = NULL;
$arguments572['accesskey'] = NULL;
$arguments572['tabindex'] = NULL;
$arguments572['onclick'] = NULL;
$renderChildrenClosure575 = function() {return NULL;};
$viewHelper576 = $self->getViewHelper('$viewHelper576', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper576->setArguments($arguments572);
$viewHelper576->setRenderingContext($renderingContext);
$viewHelper576->setRenderChildrenClosure($renderChildrenClosure575);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output568 .= $viewHelper576->initializeArgumentsAndRender();

$output568 .= '
                        </span>
                    </div>
                ';
return $output568;
};
$viewHelper577 = $self->getViewHelper('$viewHelper577', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper577->setArguments($arguments566);
$viewHelper577->setRenderingContext($renderingContext);
$viewHelper577->setRenderChildrenClosure($renderChildrenClosure567);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output305 .= $viewHelper577->initializeArgumentsAndRender();

$output305 .= '
            </div>
		</div>
    </div>

';
return $output305;
};

$output296 .= '';

$output296 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments578 = array();
$arguments578['name'] = 'beButtonsLeft';
$renderChildrenClosure579 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output580 = '';

$output580 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments581 = array();
$arguments581['action'] = 'index';
$arguments581['controller'] = 'Gallery';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments582 = array();
$arguments582['key'] = 'tx_yag_controller_album_addItems.backToAlbumList';
$arguments582['id'] = NULL;
$arguments582['default'] = NULL;
$arguments582['htmlEscape'] = NULL;
$arguments582['arguments'] = NULL;
$arguments582['extensionName'] = NULL;
$renderChildrenClosure583 = function() {return NULL;};
$arguments581['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments582, $renderChildrenClosure583, $renderingContext);
$arguments581['additionalAttributes'] = NULL;
$arguments581['data'] = NULL;
$arguments581['arguments'] = array (
);
$arguments581['extensionName'] = NULL;
$arguments581['pluginName'] = NULL;
$arguments581['pageUid'] = NULL;
$arguments581['pageType'] = 0;
$arguments581['noCache'] = false;
$arguments581['noCacheHash'] = false;
$arguments581['section'] = '';
$arguments581['format'] = '';
$arguments581['linkAccessRestrictedPages'] = false;
$arguments581['additionalParams'] = array (
);
$arguments581['absolute'] = false;
$arguments581['addQueryString'] = false;
$arguments581['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments581['addQueryStringMethod'] = NULL;
$arguments581['class'] = NULL;
$arguments581['dir'] = NULL;
$arguments581['id'] = NULL;
$arguments581['lang'] = NULL;
$arguments581['style'] = NULL;
$arguments581['accesskey'] = NULL;
$arguments581['tabindex'] = NULL;
$arguments581['onclick'] = NULL;
$arguments581['name'] = NULL;
$arguments581['rel'] = NULL;
$arguments581['rev'] = NULL;
$arguments581['target'] = NULL;
$renderChildrenClosure584 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments585 = array();
$arguments585['identifier'] = 'actions-document-close';
$arguments585['size'] = 'small';
$arguments585['overlay'] = NULL;
$arguments585['state'] = 'default';
$arguments585['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure586 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments585, $renderChildrenClosure586, $renderingContext);
};
$viewHelper587 = $self->getViewHelper('$viewHelper587', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper587->setArguments($arguments581);
$viewHelper587->setRenderingContext($renderingContext);
$viewHelper587->setRenderChildrenClosure($renderChildrenClosure584);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output580 .= $viewHelper587->initializeArgumentsAndRender();

$output580 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments588 = array();
$arguments588['action'] = 'delete';
$arguments588['controller'] = 'Album';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments589 = array();
$arguments589['key'] = 'tx_yag_domain_model_album.deleteAlbum';
$arguments589['id'] = NULL;
$arguments589['default'] = NULL;
$arguments589['htmlEscape'] = NULL;
$arguments589['arguments'] = NULL;
$arguments589['extensionName'] = NULL;
$renderChildrenClosure590 = function() {return NULL;};
$arguments588['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments589, $renderChildrenClosure590, $renderingContext);
$arguments588['additionalAttributes'] = NULL;
$arguments588['data'] = NULL;
$arguments588['arguments'] = array (
);
$arguments588['extensionName'] = NULL;
$arguments588['pluginName'] = NULL;
$arguments588['pageUid'] = NULL;
$arguments588['pageType'] = 0;
$arguments588['noCache'] = false;
$arguments588['noCacheHash'] = false;
$arguments588['section'] = '';
$arguments588['format'] = '';
$arguments588['linkAccessRestrictedPages'] = false;
$arguments588['additionalParams'] = array (
);
$arguments588['absolute'] = false;
$arguments588['addQueryString'] = false;
$arguments588['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments588['addQueryStringMethod'] = NULL;
$arguments588['class'] = NULL;
$arguments588['dir'] = NULL;
$arguments588['id'] = NULL;
$arguments588['lang'] = NULL;
$arguments588['style'] = NULL;
$arguments588['accesskey'] = NULL;
$arguments588['tabindex'] = NULL;
$arguments588['onclick'] = NULL;
$arguments588['name'] = NULL;
$arguments588['rel'] = NULL;
$arguments588['rev'] = NULL;
$arguments588['target'] = NULL;
$renderChildrenClosure591 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments592 = array();
$arguments592['identifier'] = 'actions-edit-delete';
$arguments592['size'] = 'small';
$arguments592['overlay'] = NULL;
$arguments592['state'] = 'default';
$arguments592['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure593 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext);
};
$viewHelper594 = $self->getViewHelper('$viewHelper594', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper594->setArguments($arguments588);
$viewHelper594->setRenderingContext($renderingContext);
$viewHelper594->setRenderChildrenClosure($renderChildrenClosure591);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output580 .= $viewHelper594->initializeArgumentsAndRender();

$output580 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments595 = array();
$arguments595['action'] = 'addItems';
$arguments595['controller'] = 'Album';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments596 = array();
$arguments596['key'] = 'tx_yag_controller_album_addItems';
$arguments596['id'] = NULL;
$arguments596['default'] = NULL;
$arguments596['htmlEscape'] = NULL;
$arguments596['arguments'] = NULL;
$arguments596['extensionName'] = NULL;
$renderChildrenClosure597 = function() {return NULL;};
$arguments595['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments596, $renderChildrenClosure597, $renderingContext);
// Rendering Array
$array598 = array();
$array598['album'] = $currentVariableContainer->getOrNull('album');
$arguments595['arguments'] = $array598;
$arguments595['additionalAttributes'] = NULL;
$arguments595['data'] = NULL;
$arguments595['extensionName'] = NULL;
$arguments595['pluginName'] = NULL;
$arguments595['pageUid'] = NULL;
$arguments595['pageType'] = 0;
$arguments595['noCache'] = false;
$arguments595['noCacheHash'] = false;
$arguments595['section'] = '';
$arguments595['format'] = '';
$arguments595['linkAccessRestrictedPages'] = false;
$arguments595['additionalParams'] = array (
);
$arguments595['absolute'] = false;
$arguments595['addQueryString'] = false;
$arguments595['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments595['addQueryStringMethod'] = NULL;
$arguments595['class'] = NULL;
$arguments595['dir'] = NULL;
$arguments595['id'] = NULL;
$arguments595['lang'] = NULL;
$arguments595['style'] = NULL;
$arguments595['accesskey'] = NULL;
$arguments595['tabindex'] = NULL;
$arguments595['onclick'] = NULL;
$arguments595['name'] = NULL;
$arguments595['rel'] = NULL;
$arguments595['rev'] = NULL;
$arguments595['target'] = NULL;
$renderChildrenClosure599 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments600 = array();
$arguments600['identifier'] = 'actions-edit-upload';
$arguments600['size'] = 'small';
$arguments600['overlay'] = NULL;
$arguments600['state'] = 'default';
$arguments600['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure601 = function() {return NULL;};
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments600, $renderChildrenClosure601, $renderingContext);
};
$viewHelper602 = $self->getViewHelper('$viewHelper602', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper602->setArguments($arguments595);
$viewHelper602->setRenderingContext($renderingContext);
$viewHelper602->setRenderChildrenClosure($renderChildrenClosure599);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output580 .= $viewHelper602->initializeArgumentsAndRender();

$output580 .= '
';
return $output580;
};

$output296 .= '';

$output296 .= '
';


return $output296;
}


}
#1461068777    203199    