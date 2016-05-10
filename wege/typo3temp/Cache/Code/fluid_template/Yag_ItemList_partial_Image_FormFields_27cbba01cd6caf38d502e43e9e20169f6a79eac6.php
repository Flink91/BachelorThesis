<?php
class FluidCache_Yag_ItemList_partial_Image_FormFields_27cbba01cd6caf38d502e43e9e20169f6a79eac6 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments1 = array();
$arguments1['method'] = 'post';
$arguments1['action'] = 'update';
$arguments1['controller'] = 'Item';
$arguments1['name'] = 'item';
$arguments1['object'] = $currentVariableContainer->getOrNull('item');
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['extensionName'] = NULL;
$arguments1['pluginName'] = NULL;
$arguments1['pageUid'] = NULL;
$arguments1['pageType'] = 0;
$arguments1['noCache'] = false;
$arguments1['noCacheHash'] = false;
$arguments1['section'] = '';
$arguments1['format'] = '';
$arguments1['additionalParams'] = array (
);
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['fieldNamePrefix'] = NULL;
$arguments1['actionUri'] = NULL;
$arguments1['objectName'] = NULL;
$arguments1['hiddenFieldClassName'] = NULL;
$arguments1['enctype'] = NULL;
$arguments1['onreset'] = NULL;
$arguments1['onsubmit'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
    <div class="yag-itemedit-form-inner yag-editfields">
        <div class="yag-itemedit-leftcontainer">
            <div>
                <table class="yag-itemedit-table">
                    <tr>
                      <td>
                          <div class="yag-itemedit-thumb">
                              ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments4 = array();
$arguments4['item'] = $currentVariableContainer->getOrNull('item');
$arguments4['resolutionName'] = 'thumb';
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['alt'] = NULL;
$arguments4['centerVertical'] = NULL;
$arguments4['width'] = NULL;
$arguments4['height'] = NULL;
$arguments4['quality'] = 80;
$renderChildrenClosure5 = function() {return NULL;};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output3 .= $viewHelper6->initializeArgumentsAndRender();

$output3 .= '
                          </div>
                      </td>
                      <td>
						  <div class="yag-itemedit-properties">
							  <table>
								  <tr>
									  <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments7 = array();
$arguments7['key'] = 'tx_yag_domain_model_item.size';
$arguments7['default'] = 'Image size';
$arguments7['id'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output3 .= ':</td>
									  <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments9 = array();
$arguments9['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'width', $renderingContext);
$arguments9['keepQuotes'] = false;
$arguments9['encoding'] = NULL;
$arguments9['doubleEncode'] = true;
$renderChildrenClosure10 = function() {return NULL;};
$value11 = ($arguments9['value'] !== NULL ? $arguments9['value'] : $renderChildrenClosure10());

$output3 .= (!is_string($value11) ? $value11 : htmlspecialchars($value11, ($arguments9['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments9['encoding'] !== NULL ? $arguments9['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments9['doubleEncode']));

$output3 .= ' x ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments12 = array();
$arguments12['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'height', $renderingContext);
$arguments12['keepQuotes'] = false;
$arguments12['encoding'] = NULL;
$arguments12['doubleEncode'] = true;
$renderChildrenClosure13 = function() {return NULL;};
$value14 = ($arguments12['value'] !== NULL ? $arguments12['value'] : $renderChildrenClosure13());

$output3 .= (!is_string($value14) ? $value14 : htmlspecialchars($value14, ($arguments12['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments12['encoding'] !== NULL ? $arguments12['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments12['doubleEncode']));

$output3 .= '</td>
								  </tr>
								  <tr>
									  <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments15 = array();
$arguments15['key'] = 'tx_yag_domain_model_item.filesize';
$arguments15['default'] = 'File size';
$arguments15['id'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output3 .= ':</td>
									  <td>';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Format_FileSizeViewHelper
$arguments17 = array();
$arguments17['labels'] = '';
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments19 = array();
$arguments19['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'fileSize', $renderingContext);
$arguments19['keepQuotes'] = false;
$arguments19['encoding'] = NULL;
$arguments19['doubleEncode'] = true;
$renderChildrenClosure20 = function() {return NULL;};
$value21 = ($arguments19['value'] !== NULL ? $arguments19['value'] : $renderChildrenClosure20());
return (!is_string($value21) ? $value21 : htmlspecialchars($value21, ($arguments19['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments19['encoding'] !== NULL ? $arguments19['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments19['doubleEncode']));
};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'Tx_PtExtbase_ViewHelpers_Format_FileSizeViewHelper');
$viewHelper22->setArguments($arguments17);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure18);
// End of ViewHelper Tx_PtExtbase_ViewHelpers_Format_FileSizeViewHelper

$output3 .= $viewHelper22->initializeArgumentsAndRender();

$output3 .= '</td>
								  </tr>
								  <tr>
									  <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments23 = array();
$arguments23['key'] = 'tx_yag_domain_model_item.path';
$arguments23['default'] = 'Path';
$arguments23['id'] = NULL;
$arguments23['htmlEscape'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$renderChildrenClosure24 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output3 .= ':</td>
									  <td><div style="overflow:hidden; width:200px">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments25 = array();
$arguments25['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'sourceUri', $renderingContext);
$arguments25['keepQuotes'] = false;
$arguments25['encoding'] = NULL;
$arguments25['doubleEncode'] = true;
$renderChildrenClosure26 = function() {return NULL;};
$value27 = ($arguments25['value'] !== NULL ? $arguments25['value'] : $renderChildrenClosure26());

$output3 .= (!is_string($value27) ? $value27 : htmlspecialchars($value27, ($arguments25['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments25['encoding'] !== NULL ? $arguments25['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments25['doubleEncode']));

$output3 .= '</div></td>
								  </tr>
							  </table>
                          </div>
						  <div class="yag-itemedit-commands">

                              <a href="';
// Rendering ViewHelper DL\Yag\ViewHelpers\Backend\EditRecordUrlViewHelper
$arguments28 = array();
$arguments28['entity'] = $currentVariableContainer->getOrNull('item');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments29 = array();
$arguments29['action'] = 'submitFilter';
// Rendering Array
$array30 = array();
$array30['id'] = $currentVariableContainer->getOrNull('currentPid');
$arguments29['additionalParams'] = $array30;
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments31 = array();
$arguments31['object'] = $currentVariableContainer->getOrNull('yagContext');
$output32 = '';

$output32 .= 'albumUid:';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments33 = array();
$arguments33['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'album.uid', $renderingContext);
$arguments33['keepQuotes'] = false;
$arguments33['encoding'] = NULL;
$arguments33['doubleEncode'] = true;
$renderChildrenClosure34 = function() {return NULL;};
$value35 = ($arguments33['value'] !== NULL ? $arguments33['value'] : $renderChildrenClosure34());

$output32 .= (!is_string($value35) ? $value35 : htmlspecialchars($value35, ($arguments33['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments33['encoding'] !== NULL ? $arguments33['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments33['doubleEncode']));
$arguments31['arguments'] = $output32;
$arguments31['nameSpace'] = '';
$renderChildrenClosure36 = function() {return NULL;};
$viewHelper37 = $self->getViewHelper('$viewHelper37', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper37->setArguments($arguments31);
$viewHelper37->setRenderingContext($renderingContext);
$viewHelper37->setRenderChildrenClosure($renderChildrenClosure36);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments29['arguments'] = $viewHelper37->initializeArgumentsAndRender();
$arguments29['controller'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['pluginName'] = NULL;
$arguments29['pageUid'] = NULL;
$arguments29['pageType'] = 0;
$arguments29['noCache'] = false;
$arguments29['noCacheHash'] = false;
$arguments29['section'] = '';
$arguments29['format'] = '';
$arguments29['linkAccessRestrictedPages'] = false;
$arguments29['absolute'] = false;
$arguments29['addQueryString'] = false;
$arguments29['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments29['addQueryStringMethod'] = NULL;
$renderChildrenClosure38 = function() {return NULL;};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper39->setArguments($arguments29);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure38);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments28['returnUrl'] = $viewHelper39->initializeArgumentsAndRender();
$renderChildrenClosure40 = function() {return NULL;};
$viewHelper41 = $self->getViewHelper('$viewHelper41', $renderingContext, 'DL\Yag\ViewHelpers\Backend\EditRecordUrlViewHelper');
$viewHelper41->setArguments($arguments28);
$viewHelper41->setRenderingContext($renderingContext);
$viewHelper41->setRenderChildrenClosure($renderChildrenClosure40);
// End of ViewHelper DL\Yag\ViewHelpers\Backend\EditRecordUrlViewHelper

$output3 .= $viewHelper41->initializeArgumentsAndRender();

$output3 .= '">
                                  ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments42 = array();
$arguments42['identifier'] = 'actions-document-open';
$arguments42['size'] = 'small';
$arguments42['overlay'] = NULL;
$arguments42['state'] = 'default';
$arguments42['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure43 = function() {return NULL;};

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output3 .= '
                                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments44 = array();
$arguments44['key'] = 'tx_yag_controller_item.editItemInListModule';
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['htmlEscape'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$renderChildrenClosure45 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output3 .= '
                              </a>

						  </div>
                      </td>
                    </tr>

                    <tr>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments46 = array();
$arguments46['key'] = 'tx_yag_domain_model_item.title';
$arguments46['default'] = 'Title';
$arguments46['id'] = NULL;
$arguments46['htmlEscape'] = NULL;
$arguments46['arguments'] = NULL;
$arguments46['extensionName'] = NULL;
$renderChildrenClosure47 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output3 .= ':</td>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments48 = array();
$arguments48['property'] = 'title';
$arguments48['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'title', $renderingContext);
$arguments48['additionalAttributes'] = NULL;
$arguments48['data'] = NULL;
$arguments48['required'] = false;
$arguments48['type'] = 'text';
$arguments48['name'] = NULL;
$arguments48['autofocus'] = NULL;
$arguments48['disabled'] = NULL;
$arguments48['maxlength'] = NULL;
$arguments48['readonly'] = NULL;
$arguments48['size'] = NULL;
$arguments48['placeholder'] = NULL;
$arguments48['pattern'] = NULL;
$arguments48['errorClass'] = 'f3-form-error';
$arguments48['class'] = NULL;
$arguments48['dir'] = NULL;
$arguments48['id'] = NULL;
$arguments48['lang'] = NULL;
$arguments48['style'] = NULL;
$arguments48['title'] = NULL;
$arguments48['accesskey'] = NULL;
$arguments48['tabindex'] = NULL;
$arguments48['onclick'] = NULL;
$renderChildrenClosure49 = function() {return NULL;};
$viewHelper50 = $self->getViewHelper('$viewHelper50', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper50->setArguments($arguments48);
$viewHelper50->setRenderingContext($renderingContext);
$viewHelper50->setRenderChildrenClosure($renderChildrenClosure49);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper50->initializeArgumentsAndRender();

$output3 .= '</td>
                    </tr>
                    <tr>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments51 = array();
$arguments51['key'] = 'tx_yag_domain_model_item.description';
$arguments51['default'] = 'Title';
$arguments51['id'] = NULL;
$arguments51['htmlEscape'] = NULL;
$arguments51['arguments'] = NULL;
$arguments51['extensionName'] = NULL;
$renderChildrenClosure52 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output3 .= ':</td>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper
$arguments53 = array();
$arguments53['property'] = 'description';
$arguments53['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'description', $renderingContext);
$arguments53['rows'] = '5';
$arguments53['cols'] = '20';
$arguments53['additionalAttributes'] = NULL;
$arguments53['data'] = NULL;
$arguments53['name'] = NULL;
$arguments53['autofocus'] = NULL;
$arguments53['disabled'] = NULL;
$arguments53['placeholder'] = NULL;
$arguments53['errorClass'] = 'f3-form-error';
$arguments53['class'] = NULL;
$arguments53['dir'] = NULL;
$arguments53['id'] = NULL;
$arguments53['lang'] = NULL;
$arguments53['style'] = NULL;
$arguments53['title'] = NULL;
$arguments53['accesskey'] = NULL;
$arguments53['tabindex'] = NULL;
$arguments53['onclick'] = NULL;
$renderChildrenClosure54 = function() {return NULL;};
$viewHelper55 = $self->getViewHelper('$viewHelper55', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper');
$viewHelper55->setArguments($arguments53);
$viewHelper55->setRenderingContext($renderingContext);
$viewHelper55->setRenderChildrenClosure($renderChildrenClosure54);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper

$output3 .= $viewHelper55->initializeArgumentsAndRender();

$output3 .= '
                    </tr>
                    <tr>
                        <td>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments56 = array();
$arguments56['key'] = 'tx_yag_controller_item.moveToAlbum';
$arguments56['default'] = 'Move to album';
$arguments56['id'] = NULL;
$arguments56['htmlEscape'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['extensionName'] = NULL;
$renderChildrenClosure57 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output3 .= ': <br />
                        </td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments58 = array();
$arguments58['property'] = 'album';
$arguments58['optionValueField'] = 'uid';
$arguments58['optionLabelField'] = 'name';
$arguments58['options'] = $currentVariableContainer->getOrNull('albums');
$arguments58['value'] = $currentVariableContainer->getOrNull('album');
$arguments58['additionalAttributes'] = NULL;
$arguments58['data'] = NULL;
$arguments58['name'] = NULL;
$arguments58['class'] = NULL;
$arguments58['dir'] = NULL;
$arguments58['id'] = NULL;
$arguments58['lang'] = NULL;
$arguments58['style'] = NULL;
$arguments58['title'] = NULL;
$arguments58['accesskey'] = NULL;
$arguments58['tabindex'] = NULL;
$arguments58['onclick'] = NULL;
$arguments58['size'] = NULL;
$arguments58['disabled'] = NULL;
$arguments58['sortByOptionLabel'] = false;
$arguments58['selectAllByDefault'] = false;
$arguments58['errorClass'] = 'f3-form-error';
$arguments58['prependOptionLabel'] = NULL;
$arguments58['prependOptionValue'] = NULL;
$arguments58['multiple'] = false;
$renderChildrenClosure59 = function() {return NULL;};
$viewHelper60 = $self->getViewHelper('$viewHelper60', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper60->setArguments($arguments58);
$viewHelper60->setRenderingContext($renderingContext);
$viewHelper60->setRenderChildrenClosure($renderChildrenClosure59);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output3 .= $viewHelper60->initializeArgumentsAndRender();

$output3 .= '
                        </td>
                    </tr>
                    <tr>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments61 = array();
$arguments61['key'] = 'tx_yag_domain_model_item.tags';
$arguments61['id'] = NULL;
$arguments61['default'] = NULL;
$arguments61['htmlEscape'] = NULL;
$arguments61['arguments'] = NULL;
$arguments61['extensionName'] = NULL;
$renderChildrenClosure62 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output3 .= ':</td>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments63 = array();
$arguments63['property'] = 'tagsFromCSV';
$arguments63['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'TagsSeparated', $renderingContext);
$arguments63['additionalAttributes'] = NULL;
$arguments63['data'] = NULL;
$arguments63['required'] = false;
$arguments63['type'] = 'text';
$arguments63['name'] = NULL;
$arguments63['autofocus'] = NULL;
$arguments63['disabled'] = NULL;
$arguments63['maxlength'] = NULL;
$arguments63['readonly'] = NULL;
$arguments63['size'] = NULL;
$arguments63['placeholder'] = NULL;
$arguments63['pattern'] = NULL;
$arguments63['errorClass'] = 'f3-form-error';
$arguments63['class'] = NULL;
$arguments63['dir'] = NULL;
$arguments63['id'] = NULL;
$arguments63['lang'] = NULL;
$arguments63['style'] = NULL;
$arguments63['title'] = NULL;
$arguments63['accesskey'] = NULL;
$arguments63['tabindex'] = NULL;
$arguments63['onclick'] = NULL;
$renderChildrenClosure64 = function() {return NULL;};
$viewHelper65 = $self->getViewHelper('$viewHelper65', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper65->setArguments($arguments63);
$viewHelper65->setRenderingContext($renderingContext);
$viewHelper65->setRenderChildrenClosure($renderChildrenClosure64);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper65->initializeArgumentsAndRender();

$output3 .= '</td>
                    </tr>
                    <tr>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments66 = array();
$arguments66['key'] = 'tx_yag_domain_model_item.date';
$arguments66['id'] = NULL;
$arguments66['default'] = NULL;
$arguments66['htmlEscape'] = NULL;
$arguments66['arguments'] = NULL;
$arguments66['extensionName'] = NULL;
$renderChildrenClosure67 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output3 .= '</td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments68 = array();
$arguments68['name'] = 'item[date][date]';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments69 = array();
$arguments69['date'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'date', $renderingContext);
$arguments69['format'] = '';
$arguments69['base'] = NULL;
$renderChildrenClosure70 = function() {return NULL;};
$arguments68['value'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);
$arguments68['additionalAttributes'] = NULL;
$arguments68['data'] = NULL;
$arguments68['required'] = false;
$arguments68['type'] = 'text';
$arguments68['property'] = NULL;
$arguments68['autofocus'] = NULL;
$arguments68['disabled'] = NULL;
$arguments68['maxlength'] = NULL;
$arguments68['readonly'] = NULL;
$arguments68['size'] = NULL;
$arguments68['placeholder'] = NULL;
$arguments68['pattern'] = NULL;
$arguments68['errorClass'] = 'f3-form-error';
$arguments68['class'] = NULL;
$arguments68['dir'] = NULL;
$arguments68['id'] = NULL;
$arguments68['lang'] = NULL;
$arguments68['style'] = NULL;
$arguments68['title'] = NULL;
$arguments68['accesskey'] = NULL;
$arguments68['tabindex'] = NULL;
$arguments68['onclick'] = NULL;
$renderChildrenClosure71 = function() {return NULL;};
$viewHelper72 = $self->getViewHelper('$viewHelper72', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper72->setArguments($arguments68);
$viewHelper72->setRenderingContext($renderingContext);
$viewHelper72->setRenderChildrenClosure($renderChildrenClosure71);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper72->initializeArgumentsAndRender();

$output3 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments73 = array();
$arguments73['name'] = 'item[date][dateFormat]';
$arguments73['value'] = 'Y-m-d';
$arguments73['additionalAttributes'] = NULL;
$arguments73['data'] = NULL;
$arguments73['property'] = NULL;
$arguments73['class'] = NULL;
$arguments73['dir'] = NULL;
$arguments73['id'] = NULL;
$arguments73['lang'] = NULL;
$arguments73['style'] = NULL;
$arguments73['title'] = NULL;
$arguments73['accesskey'] = NULL;
$arguments73['tabindex'] = NULL;
$arguments73['onclick'] = NULL;
$renderChildrenClosure74 = function() {return NULL;};
$viewHelper75 = $self->getViewHelper('$viewHelper75', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper75->setArguments($arguments73);
$viewHelper75->setRenderingContext($renderingContext);
$viewHelper75->setRenderChildrenClosure($renderChildrenClosure74);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output3 .= $viewHelper75->initializeArgumentsAndRender();

$output3 .= '
                        </td>
                    </tr>
					<tr>
						<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments76 = array();
$arguments76['key'] = 'tx_yag_domain_model_item.categories';
$arguments76['id'] = NULL;
$arguments76['default'] = NULL;
$arguments76['htmlEscape'] = NULL;
$arguments76['arguments'] = NULL;
$arguments76['extensionName'] = NULL;
$renderChildrenClosure77 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output3 .= '</td>
						<td>
							';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Form_CategoryViewHelper
$arguments78 = array();
$arguments78['class'] = 'yag-multiselect';
$arguments78['property'] = 'categories';
// Rendering Boolean node
$arguments78['multiple'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments78['categoryPid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'pid', $renderingContext);
$arguments78['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'categories', $renderingContext);
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['name'] = NULL;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$arguments78['size'] = NULL;
$arguments78['disabled'] = NULL;
$arguments78['options'] = NULL;
$arguments78['optionValueField'] = NULL;
$arguments78['optionLabelField'] = NULL;
$arguments78['sortByOptionLabel'] = false;
$arguments78['selectAllByDefault'] = false;
$arguments78['errorClass'] = 'f3-form-error';
$arguments78['prependOptionLabel'] = NULL;
$arguments78['prependOptionValue'] = NULL;
$renderChildrenClosure79 = function() {return NULL;};
$viewHelper80 = $self->getViewHelper('$viewHelper80', $renderingContext, 'Tx_Yag_ViewHelpers_Form_CategoryViewHelper');
$viewHelper80->setArguments($arguments78);
$viewHelper80->setRenderingContext($renderingContext);
$viewHelper80->setRenderChildrenClosure($renderChildrenClosure79);
// End of ViewHelper Tx_Yag_ViewHelpers_Form_CategoryViewHelper

$output3 .= $viewHelper80->initializeArgumentsAndRender();

$output3 .= '
						</td>
					</tr>
                </table>
            </div>

        </div>


        <div class="yag-itemedit-rightcontainer">

            <div class="yag-itemedit-innercontainer">
                <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments81 = array();
$arguments81['key'] = 'tx_yag_controller_item.metaData';
$arguments81['id'] = NULL;
$arguments81['default'] = NULL;
$arguments81['htmlEscape'] = NULL;
$arguments81['arguments'] = NULL;
$arguments81['extensionName'] = NULL;
$renderChildrenClosure82 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output3 .= '</h1>

                <table class="yag-itemedit-table">

                    <tr>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments83 = array();
$arguments83['key'] = 'tx_yag_domain_model_itemmeta.copyright';
$arguments83['id'] = NULL;
$arguments83['default'] = NULL;
$arguments83['htmlEscape'] = NULL;
$arguments83['arguments'] = NULL;
$arguments83['extensionName'] = NULL;
$renderChildrenClosure84 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output3 .= '</td>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments85 = array();
$arguments85['property'] = 'itemMeta.copyright';
$arguments85['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'itemMeta.copyright', $renderingContext);
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['required'] = false;
$arguments85['type'] = 'text';
$arguments85['name'] = NULL;
$arguments85['autofocus'] = NULL;
$arguments85['disabled'] = NULL;
$arguments85['maxlength'] = NULL;
$arguments85['readonly'] = NULL;
$arguments85['size'] = NULL;
$arguments85['placeholder'] = NULL;
$arguments85['pattern'] = NULL;
$arguments85['errorClass'] = 'f3-form-error';
$arguments85['class'] = NULL;
$arguments85['dir'] = NULL;
$arguments85['id'] = NULL;
$arguments85['lang'] = NULL;
$arguments85['style'] = NULL;
$arguments85['title'] = NULL;
$arguments85['accesskey'] = NULL;
$arguments85['tabindex'] = NULL;
$arguments85['onclick'] = NULL;
$renderChildrenClosure86 = function() {return NULL;};
$viewHelper87 = $self->getViewHelper('$viewHelper87', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper87->setArguments($arguments85);
$viewHelper87->setRenderingContext($renderingContext);
$viewHelper87->setRenderChildrenClosure($renderChildrenClosure86);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper87->initializeArgumentsAndRender();

$output3 .= '</td>
                    </tr>

                    <tr>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments88 = array();
$arguments88['key'] = 'tx_yag_domain_model_itemmeta.artist';
$arguments88['id'] = NULL;
$arguments88['default'] = NULL;
$arguments88['htmlEscape'] = NULL;
$arguments88['arguments'] = NULL;
$arguments88['extensionName'] = NULL;
$renderChildrenClosure89 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output3 .= '</td>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments90 = array();
$arguments90['property'] = 'itemMeta.artist';
$arguments90['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'itemMeta.artist', $renderingContext);
$arguments90['additionalAttributes'] = NULL;
$arguments90['data'] = NULL;
$arguments90['required'] = false;
$arguments90['type'] = 'text';
$arguments90['name'] = NULL;
$arguments90['autofocus'] = NULL;
$arguments90['disabled'] = NULL;
$arguments90['maxlength'] = NULL;
$arguments90['readonly'] = NULL;
$arguments90['size'] = NULL;
$arguments90['placeholder'] = NULL;
$arguments90['pattern'] = NULL;
$arguments90['errorClass'] = 'f3-form-error';
$arguments90['class'] = NULL;
$arguments90['dir'] = NULL;
$arguments90['id'] = NULL;
$arguments90['lang'] = NULL;
$arguments90['style'] = NULL;
$arguments90['title'] = NULL;
$arguments90['accesskey'] = NULL;
$arguments90['tabindex'] = NULL;
$arguments90['onclick'] = NULL;
$renderChildrenClosure91 = function() {return NULL;};
$viewHelper92 = $self->getViewHelper('$viewHelper92', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper92->setArguments($arguments90);
$viewHelper92->setRenderingContext($renderingContext);
$viewHelper92->setRenderChildrenClosure($renderChildrenClosure91);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper92->initializeArgumentsAndRender();

$output3 .= '</td>
                    </tr>

                    <tr>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments93 = array();
$arguments93['key'] = 'tx_yag_domain_model_itemmeta.artist_mail';
$arguments93['id'] = NULL;
$arguments93['default'] = NULL;
$arguments93['htmlEscape'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['extensionName'] = NULL;
$renderChildrenClosure94 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output3 .= '</td>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments95 = array();
$arguments95['property'] = 'itemMeta.artistMail';
$arguments95['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'itemMeta.artistMail', $renderingContext);
$arguments95['additionalAttributes'] = NULL;
$arguments95['data'] = NULL;
$arguments95['required'] = false;
$arguments95['type'] = 'text';
$arguments95['name'] = NULL;
$arguments95['autofocus'] = NULL;
$arguments95['disabled'] = NULL;
$arguments95['maxlength'] = NULL;
$arguments95['readonly'] = NULL;
$arguments95['size'] = NULL;
$arguments95['placeholder'] = NULL;
$arguments95['pattern'] = NULL;
$arguments95['errorClass'] = 'f3-form-error';
$arguments95['class'] = NULL;
$arguments95['dir'] = NULL;
$arguments95['id'] = NULL;
$arguments95['lang'] = NULL;
$arguments95['style'] = NULL;
$arguments95['title'] = NULL;
$arguments95['accesskey'] = NULL;
$arguments95['tabindex'] = NULL;
$arguments95['onclick'] = NULL;
$renderChildrenClosure96 = function() {return NULL;};
$viewHelper97 = $self->getViewHelper('$viewHelper97', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper97->setArguments($arguments95);
$viewHelper97->setRenderingContext($renderingContext);
$viewHelper97->setRenderChildrenClosure($renderChildrenClosure96);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper97->initializeArgumentsAndRender();

$output3 .= '</td>
                    </tr>

                    <tr>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments98 = array();
$arguments98['key'] = 'tx_yag_domain_model_itemmeta.artist_website';
$arguments98['id'] = NULL;
$arguments98['default'] = NULL;
$arguments98['htmlEscape'] = NULL;
$arguments98['arguments'] = NULL;
$arguments98['extensionName'] = NULL;
$renderChildrenClosure99 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output3 .= '</td>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments100 = array();
$arguments100['property'] = 'itemMeta.artistWebsite';
$arguments100['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'itemMeta.artistWebsite', $renderingContext);
$arguments100['additionalAttributes'] = NULL;
$arguments100['data'] = NULL;
$arguments100['required'] = false;
$arguments100['type'] = 'text';
$arguments100['name'] = NULL;
$arguments100['autofocus'] = NULL;
$arguments100['disabled'] = NULL;
$arguments100['maxlength'] = NULL;
$arguments100['readonly'] = NULL;
$arguments100['size'] = NULL;
$arguments100['placeholder'] = NULL;
$arguments100['pattern'] = NULL;
$arguments100['errorClass'] = 'f3-form-error';
$arguments100['class'] = NULL;
$arguments100['dir'] = NULL;
$arguments100['id'] = NULL;
$arguments100['lang'] = NULL;
$arguments100['style'] = NULL;
$arguments100['title'] = NULL;
$arguments100['accesskey'] = NULL;
$arguments100['tabindex'] = NULL;
$arguments100['onclick'] = NULL;
$renderChildrenClosure101 = function() {return NULL;};
$viewHelper102 = $self->getViewHelper('$viewHelper102', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper102->setArguments($arguments100);
$viewHelper102->setRenderingContext($renderingContext);
$viewHelper102->setRenderChildrenClosure($renderChildrenClosure101);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper102->initializeArgumentsAndRender();

$output3 .= '</td>
                    </tr>

                    <tr><td>&nbsp;</td><td></td></tr>

                    <tr>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments103 = array();
$arguments103['key'] = 'tx_yag_domain_model_itemmeta.camera_model';
$arguments103['id'] = NULL;
$arguments103['default'] = NULL;
$arguments103['htmlEscape'] = NULL;
$arguments103['arguments'] = NULL;
$arguments103['extensionName'] = NULL;
$renderChildrenClosure104 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output3 .= '</td>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments105 = array();
$arguments105['property'] = 'itemMeta.cameraModel';
$arguments105['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'itemMeta.cameraModel', $renderingContext);
$arguments105['additionalAttributes'] = NULL;
$arguments105['data'] = NULL;
$arguments105['required'] = false;
$arguments105['type'] = 'text';
$arguments105['name'] = NULL;
$arguments105['autofocus'] = NULL;
$arguments105['disabled'] = NULL;
$arguments105['maxlength'] = NULL;
$arguments105['readonly'] = NULL;
$arguments105['size'] = NULL;
$arguments105['placeholder'] = NULL;
$arguments105['pattern'] = NULL;
$arguments105['errorClass'] = 'f3-form-error';
$arguments105['class'] = NULL;
$arguments105['dir'] = NULL;
$arguments105['id'] = NULL;
$arguments105['lang'] = NULL;
$arguments105['style'] = NULL;
$arguments105['title'] = NULL;
$arguments105['accesskey'] = NULL;
$arguments105['tabindex'] = NULL;
$arguments105['onclick'] = NULL;
$renderChildrenClosure106 = function() {return NULL;};
$viewHelper107 = $self->getViewHelper('$viewHelper107', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper107->setArguments($arguments105);
$viewHelper107->setRenderingContext($renderingContext);
$viewHelper107->setRenderChildrenClosure($renderChildrenClosure106);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper107->initializeArgumentsAndRender();

$output3 .= '</td>
                    </tr>

                    <tr>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments108 = array();
$arguments108['key'] = 'tx_yag_domain_model_itemmeta.lens';
$arguments108['id'] = NULL;
$arguments108['default'] = NULL;
$arguments108['htmlEscape'] = NULL;
$arguments108['arguments'] = NULL;
$arguments108['extensionName'] = NULL;
$renderChildrenClosure109 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output3 .= '</td>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments110 = array();
$arguments110['property'] = 'itemMeta.lens';
$arguments110['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'itemMeta.lens', $renderingContext);
$arguments110['additionalAttributes'] = NULL;
$arguments110['data'] = NULL;
$arguments110['required'] = false;
$arguments110['type'] = 'text';
$arguments110['name'] = NULL;
$arguments110['autofocus'] = NULL;
$arguments110['disabled'] = NULL;
$arguments110['maxlength'] = NULL;
$arguments110['readonly'] = NULL;
$arguments110['size'] = NULL;
$arguments110['placeholder'] = NULL;
$arguments110['pattern'] = NULL;
$arguments110['errorClass'] = 'f3-form-error';
$arguments110['class'] = NULL;
$arguments110['dir'] = NULL;
$arguments110['id'] = NULL;
$arguments110['lang'] = NULL;
$arguments110['style'] = NULL;
$arguments110['title'] = NULL;
$arguments110['accesskey'] = NULL;
$arguments110['tabindex'] = NULL;
$arguments110['onclick'] = NULL;
$renderChildrenClosure111 = function() {return NULL;};
$viewHelper112 = $self->getViewHelper('$viewHelper112', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper112->setArguments($arguments110);
$viewHelper112->setRenderingContext($renderingContext);
$viewHelper112->setRenderChildrenClosure($renderChildrenClosure111);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper112->initializeArgumentsAndRender();

$output3 .= '</td>
                    </tr>

                    <tr>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments113 = array();
$arguments113['key'] = 'tx_yag_domain_model_itemmeta.iso';
$arguments113['id'] = NULL;
$arguments113['default'] = NULL;
$arguments113['htmlEscape'] = NULL;
$arguments113['arguments'] = NULL;
$arguments113['extensionName'] = NULL;
$renderChildrenClosure114 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output3 .= '</td>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments115 = array();
$arguments115['property'] = 'itemMeta.iso';
$arguments115['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'itemMeta.iso', $renderingContext);
$arguments115['additionalAttributes'] = NULL;
$arguments115['data'] = NULL;
$arguments115['required'] = false;
$arguments115['type'] = 'text';
$arguments115['name'] = NULL;
$arguments115['autofocus'] = NULL;
$arguments115['disabled'] = NULL;
$arguments115['maxlength'] = NULL;
$arguments115['readonly'] = NULL;
$arguments115['size'] = NULL;
$arguments115['placeholder'] = NULL;
$arguments115['pattern'] = NULL;
$arguments115['errorClass'] = 'f3-form-error';
$arguments115['class'] = NULL;
$arguments115['dir'] = NULL;
$arguments115['id'] = NULL;
$arguments115['lang'] = NULL;
$arguments115['style'] = NULL;
$arguments115['title'] = NULL;
$arguments115['accesskey'] = NULL;
$arguments115['tabindex'] = NULL;
$arguments115['onclick'] = NULL;
$renderChildrenClosure116 = function() {return NULL;};
$viewHelper117 = $self->getViewHelper('$viewHelper117', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper117->setArguments($arguments115);
$viewHelper117->setRenderingContext($renderingContext);
$viewHelper117->setRenderChildrenClosure($renderChildrenClosure116);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper117->initializeArgumentsAndRender();

$output3 .= '</td>
                    </tr>

                    <tr><td>&nbsp;</td><td></td></tr>
                    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_EachCustomMetaDataViewHelper
$arguments118 = array();
$arguments118['item'] = $currentVariableContainer->getOrNull('item');
// Rendering Boolean node
$arguments118['showEmptyFields'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments118['additionalAttributes'] = NULL;
$arguments118['data'] = NULL;
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output120 = '';

$output120 .= '
                        <tr>
                            <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments121 = array();
$arguments121['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('customMetaData'), 'config.title', $renderingContext);
$arguments121['keepQuotes'] = false;
$arguments121['encoding'] = NULL;
$arguments121['doubleEncode'] = true;
$renderChildrenClosure122 = function() {return NULL;};
$value123 = ($arguments121['value'] !== NULL ? $arguments121['value'] : $renderChildrenClosure122());

$output120 .= (!is_string($value123) ? $value123 : htmlspecialchars($value123, ($arguments121['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments121['encoding'] !== NULL ? $arguments121['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments121['doubleEncode']));

$output120 .= '</td>
                            <td>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments124 = array();
$output125 = '';

$output125 .= 'item[itemMeta][customMetaDataArray][';

$output125 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('customMetaData'), 'config.key', $renderingContext);

$output125 .= ']';
$arguments124['name'] = $output125;
$arguments124['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('customMetaData'), 'data', $renderingContext);
$arguments124['additionalAttributes'] = NULL;
$arguments124['data'] = NULL;
$arguments124['required'] = false;
$arguments124['type'] = 'text';
$arguments124['property'] = NULL;
$arguments124['autofocus'] = NULL;
$arguments124['disabled'] = NULL;
$arguments124['maxlength'] = NULL;
$arguments124['readonly'] = NULL;
$arguments124['size'] = NULL;
$arguments124['placeholder'] = NULL;
$arguments124['pattern'] = NULL;
$arguments124['errorClass'] = 'f3-form-error';
$arguments124['class'] = NULL;
$arguments124['dir'] = NULL;
$arguments124['id'] = NULL;
$arguments124['lang'] = NULL;
$arguments124['style'] = NULL;
$arguments124['title'] = NULL;
$arguments124['accesskey'] = NULL;
$arguments124['tabindex'] = NULL;
$arguments124['onclick'] = NULL;
$renderChildrenClosure126 = function() {return NULL;};
$viewHelper127 = $self->getViewHelper('$viewHelper127', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper127->setArguments($arguments124);
$viewHelper127->setRenderingContext($renderingContext);
$viewHelper127->setRenderChildrenClosure($renderChildrenClosure126);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output120 .= $viewHelper127->initializeArgumentsAndRender();

$output120 .= '
                            </td>
                        </tr>
                    ';
return $output120;
};
$viewHelper128 = $self->getViewHelper('$viewHelper128', $renderingContext, 'Tx_Yag_ViewHelpers_EachCustomMetaDataViewHelper');
$viewHelper128->setArguments($arguments118);
$viewHelper128->setRenderingContext($renderingContext);
$viewHelper128->setRenderChildrenClosure($renderChildrenClosure119);
// End of ViewHelper Tx_Yag_ViewHelpers_EachCustomMetaDataViewHelper

$output3 .= $viewHelper128->initializeArgumentsAndRender();

$output3 .= '
                </table>
            </div>
            <div>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments129 = array();
$arguments129['name'] = 'item[itemMeta][__identity]';
$arguments129['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'itemMeta.uid', $renderingContext);
$arguments129['additionalAttributes'] = NULL;
$arguments129['data'] = NULL;
$arguments129['property'] = NULL;
$arguments129['class'] = NULL;
$arguments129['dir'] = NULL;
$arguments129['id'] = NULL;
$arguments129['lang'] = NULL;
$arguments129['style'] = NULL;
$arguments129['title'] = NULL;
$arguments129['accesskey'] = NULL;
$arguments129['tabindex'] = NULL;
$arguments129['onclick'] = NULL;
$renderChildrenClosure130 = function() {return NULL;};
$viewHelper131 = $self->getViewHelper('$viewHelper131', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper131->setArguments($arguments129);
$viewHelper131->setRenderingContext($renderingContext);
$viewHelper131->setRenderChildrenClosure($renderChildrenClosure130);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output3 .= $viewHelper131->initializeArgumentsAndRender();

$output3 .= '
            </div>
        </div>
    </div>

    <div class="yag-buttonLine">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments132 = array();
$arguments132['class'] = 'submit btn btn-primary';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments133 = array();
$arguments133['key'] = 'tx_yag_general.save';
$arguments133['default'] = 'Save';
$arguments133['id'] = NULL;
$arguments133['htmlEscape'] = NULL;
$arguments133['arguments'] = NULL;
$arguments133['extensionName'] = NULL;
$renderChildrenClosure134 = function() {return NULL;};
$arguments132['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);
$arguments132['additionalAttributes'] = NULL;
$arguments132['data'] = NULL;
$arguments132['name'] = NULL;
$arguments132['property'] = NULL;
$arguments132['disabled'] = NULL;
$arguments132['dir'] = NULL;
$arguments132['id'] = NULL;
$arguments132['lang'] = NULL;
$arguments132['style'] = NULL;
$arguments132['title'] = NULL;
$arguments132['accesskey'] = NULL;
$arguments132['tabindex'] = NULL;
$arguments132['onclick'] = NULL;
$renderChildrenClosure135 = function() {return NULL;};
$viewHelper136 = $self->getViewHelper('$viewHelper136', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper136->setArguments($arguments132);
$viewHelper136->setRenderingContext($renderingContext);
$viewHelper136->setRenderChildrenClosure($renderChildrenClosure135);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output3 .= $viewHelper136->initializeArgumentsAndRender();

$output3 .= '
    </div>

';
return $output3;
};
$viewHelper137 = $self->getViewHelper('$viewHelper137', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper137->setArguments($arguments1);
$viewHelper137->setRenderingContext($renderingContext);
$viewHelper137->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper137->initializeArgumentsAndRender();

$output0 .= '

';


return $output0;
}


}
#1461666541    53867     