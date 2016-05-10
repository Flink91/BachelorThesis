<?php
class FluidCache_Yag_Gallery_partial_Album_AlbumAdminEdit_706407de08f25be7e2f2ead4eededebb50b0cf1a extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper
$arguments1 = array();
$arguments1['show'] = false;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
<!--  
Template for rendering an album for bulk editing in backend

Here is a list of objects / variables that can be accessed in this template:

Tx_Yag_Domain_Model_Album album               The album object
Tx_Yag_Domain_Model_Gallery gallery           The gallery object to which album belongs
array galleries                               All galleries currently available

@package YAG
@author Michael Knoll <mimi@kaktusteam.de>
@author Daniel Lienert <typo3@lienert.cc>
-->
';
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'Tx_PtExtlist_ViewHelpers_CommentViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '

<div id="edit-album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments4 = array();
$arguments4['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments4['keepQuotes'] = false;
$arguments4['encoding'] = NULL;
$arguments4['doubleEncode'] = true;
$renderChildrenClosure5 = function() {return NULL;};
$value6 = ($arguments4['value'] !== NULL ? $arguments4['value'] : $renderChildrenClosure5());

$output0 .= (!is_string($value6) ? $value6 : htmlspecialchars($value6, ($arguments4['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments4['encoding'] !== NULL ? $arguments4['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments4['doubleEncode']));

$output0 .= '" class="yag-box-white">
    <div class="yag-editfields" style="float:left">
        <table class="album-info-table">
            <tr>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments7 = array();
$arguments7['key'] = 'tx_yag_domain_model_album.name';
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= ':</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments9 = array();
$output10 = '';

$output10 .= 'album-title-textbox-';

$output10 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments9['id'] = $output10;
$output11 = '';

$output11 .= 'album.';

$output11 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);

$output11 .= '.name';
$arguments9['property'] = $output11;
$arguments9['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'name', $renderingContext);
$arguments9['size'] = '40';
$arguments9['additionalAttributes'] = NULL;
$arguments9['data'] = NULL;
$arguments9['required'] = false;
$arguments9['type'] = 'text';
$arguments9['name'] = NULL;
$arguments9['autofocus'] = NULL;
$arguments9['disabled'] = NULL;
$arguments9['maxlength'] = NULL;
$arguments9['readonly'] = NULL;
$arguments9['placeholder'] = NULL;
$arguments9['pattern'] = NULL;
$arguments9['errorClass'] = 'f3-form-error';
$arguments9['class'] = NULL;
$arguments9['dir'] = NULL;
$arguments9['lang'] = NULL;
$arguments9['style'] = NULL;
$arguments9['title'] = NULL;
$arguments9['accesskey'] = NULL;
$arguments9['tabindex'] = NULL;
$arguments9['onclick'] = NULL;
$renderChildrenClosure12 = function() {return NULL;};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper13->setArguments($arguments9);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper13->initializeArgumentsAndRender();

$output0 .= '</td>
            </tr>
            <tr>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments14 = array();
$arguments14['key'] = 'tx_yag_domain_model_album.description';
$arguments14['id'] = NULL;
$arguments14['default'] = NULL;
$arguments14['htmlEscape'] = NULL;
$arguments14['arguments'] = NULL;
$arguments14['extensionName'] = NULL;
$renderChildrenClosure15 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output0 .= ':</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper
$arguments16 = array();
$output17 = '';

$output17 .= 'album-description-textarea-';

$output17 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments16['id'] = $output17;
$output18 = '';

$output18 .= 'album.';

$output18 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);

$output18 .= '.description';
$arguments16['property'] = $output18;
$arguments16['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'description', $renderingContext);
$arguments16['rows'] = '5';
$arguments16['cols'] = '40';
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['name'] = NULL;
$arguments16['autofocus'] = NULL;
$arguments16['disabled'] = NULL;
$arguments16['placeholder'] = NULL;
$arguments16['errorClass'] = 'f3-form-error';
$arguments16['class'] = NULL;
$arguments16['dir'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$renderChildrenClosure19 = function() {return NULL;};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper');
$viewHelper20->setArguments($arguments16);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper

$output0 .= $viewHelper20->initializeArgumentsAndRender();

$output0 .= '
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    <div class="image-thumb" style="float: right; width: 250px">
        ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments21 = array();
$arguments21['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'thumb', $renderingContext);
$arguments21['resolutionName'] = 'thumb';
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['class'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$arguments21['alt'] = NULL;
$arguments21['centerVertical'] = NULL;
$arguments21['width'] = NULL;
$arguments21['height'] = NULL;
$arguments21['quality'] = 80;
$renderChildrenClosure22 = function() {return NULL;};
$viewHelper23 = $self->getViewHelper('$viewHelper23', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper23->setArguments($arguments21);
$viewHelper23->setRenderingContext($renderingContext);
$viewHelper23->setRenderChildrenClosure($renderChildrenClosure22);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output0 .= $viewHelper23->initializeArgumentsAndRender();

$output0 .= '
        <div class="yag-box-lightgray">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper
$arguments24 = array();
$output25 = '';

$output25 .= 'tx-yag-is-thumb-radio-';

$output25 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments24['class'] = $output25;
$arguments24['property'] = 'thumb';
$output26 = '';

$output26 .= 'is_thumb_radio-';

$output26 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments24['id'] = $output26;
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments27 = array();
// Rendering Boolean node
$arguments27['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'thumbAlbum.uid', $renderingContext), \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext));
$arguments27['then'] = 'checked';
$arguments27['else'] = NULL;
$renderChildrenClosure28 = function() {return NULL;};
$arguments24['checked'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext));
$arguments24['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['name'] = NULL;
$arguments24['disabled'] = NULL;
$arguments24['errorClass'] = 'f3-form-error';
$arguments24['dir'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$renderChildrenClosure29 = function() {return NULL;};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper');
$viewHelper30->setArguments($arguments24);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper

$output0 .= $viewHelper30->initializeArgumentsAndRender();

$output0 .= '
                <label for="is_thumb_radio-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments31 = array();
$arguments31['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments31['keepQuotes'] = false;
$arguments31['encoding'] = NULL;
$arguments31['doubleEncode'] = true;
$renderChildrenClosure32 = function() {return NULL;};
$value33 = ($arguments31['value'] !== NULL ? $arguments31['value'] : $renderChildrenClosure32());

$output0 .= (!is_string($value33) ? $value33 : htmlspecialchars($value33, ($arguments31['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments31['encoding'] !== NULL ? $arguments31['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments31['doubleEncode']));

$output0 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments34 = array();
$arguments34['key'] = 'tx_yag_controller_album.albumIsGalleryThumb';
$arguments34['id'] = NULL;
$arguments34['default'] = NULL;
$arguments34['htmlEscape'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['extensionName'] = NULL;
$renderChildrenClosure35 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output0 .= '</label> <br />
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$arguments36 = array();
$output37 = '';

$output37 .= 'albumsToBeDeleted[';

$output37 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);

$output37 .= ']';
$arguments36['name'] = $output37;
$arguments36['value'] = '1';
$output38 = '';

$output38 .= 'delete-album-';

$output38 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments36['id'] = $output38;
$arguments36['additionalAttributes'] = NULL;
$arguments36['data'] = NULL;
$arguments36['checked'] = NULL;
$arguments36['multiple'] = false;
$arguments36['property'] = NULL;
$arguments36['disabled'] = NULL;
$arguments36['errorClass'] = 'f3-form-error';
$arguments36['class'] = NULL;
$arguments36['dir'] = NULL;
$arguments36['lang'] = NULL;
$arguments36['style'] = NULL;
$arguments36['title'] = NULL;
$arguments36['accesskey'] = NULL;
$arguments36['tabindex'] = NULL;
$arguments36['onclick'] = NULL;
$renderChildrenClosure39 = function() {return NULL;};
$viewHelper40 = $self->getViewHelper('$viewHelper40', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper');
$viewHelper40->setArguments($arguments36);
$viewHelper40->setRenderingContext($renderingContext);
$viewHelper40->setRenderChildrenClosure($renderChildrenClosure39);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper

$output0 .= $viewHelper40->initializeArgumentsAndRender();

$output0 .= '
                <label for="delete-album-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments41 = array();
$arguments41['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments41['keepQuotes'] = false;
$arguments41['encoding'] = NULL;
$arguments41['doubleEncode'] = true;
$renderChildrenClosure42 = function() {return NULL;};
$value43 = ($arguments41['value'] !== NULL ? $arguments41['value'] : $renderChildrenClosure42());

$output0 .= (!is_string($value43) ? $value43 : htmlspecialchars($value43, ($arguments41['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments41['encoding'] !== NULL ? $arguments41['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments41['doubleEncode']));

$output0 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments44 = array();
$arguments44['key'] = 'tx_yag_domain_model_album.deleteAlbum';
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['htmlEscape'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$renderChildrenClosure45 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output0 .= '</label> <br />
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments46 = array();
$arguments46['key'] = 'tx_yag_controller_album.moveToGallery';
$arguments46['id'] = NULL;
$arguments46['default'] = NULL;
$arguments46['htmlEscape'] = NULL;
$arguments46['arguments'] = NULL;
$arguments46['extensionName'] = NULL;
$renderChildrenClosure47 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output0 .= ': <br />
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments48 = array();
$output49 = '';

$output49 .= 'album.';

$output49 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);

$output49 .= '.gallery';
$arguments48['property'] = $output49;
$arguments48['optionValueField'] = 'uid';
$arguments48['optionLabelField'] = 'name';
$arguments48['options'] = $currentVariableContainer->getOrNull('galleries');
$arguments48['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'gallery', $renderingContext);
$arguments48['additionalAttributes'] = NULL;
$arguments48['data'] = NULL;
$arguments48['name'] = NULL;
$arguments48['class'] = NULL;
$arguments48['dir'] = NULL;
$arguments48['id'] = NULL;
$arguments48['lang'] = NULL;
$arguments48['style'] = NULL;
$arguments48['title'] = NULL;
$arguments48['accesskey'] = NULL;
$arguments48['tabindex'] = NULL;
$arguments48['onclick'] = NULL;
$arguments48['size'] = NULL;
$arguments48['disabled'] = NULL;
$arguments48['sortByOptionLabel'] = false;
$arguments48['selectAllByDefault'] = false;
$arguments48['errorClass'] = 'f3-form-error';
$arguments48['prependOptionLabel'] = NULL;
$arguments48['prependOptionValue'] = NULL;
$arguments48['multiple'] = false;
$renderChildrenClosure50 = function() {return NULL;};
$viewHelper51 = $self->getViewHelper('$viewHelper51', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper51->setArguments($arguments48);
$viewHelper51->setRenderingContext($renderingContext);
$viewHelper51->setRenderChildrenClosure($renderChildrenClosure50);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output0 .= $viewHelper51->initializeArgumentsAndRender();

$output0 .= '
        </div>
		<div class="yag-albumedit-commands">
            <a href="';
// Rendering ViewHelper DL\Yag\ViewHelpers\Backend\EditRecordUrlViewHelper
$arguments52 = array();
$arguments52['entity'] = $currentVariableContainer->getOrNull('album');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments53 = array();
$arguments53['action'] = 'index';
// Rendering Array
$array54 = array();
$array54['id'] = $currentVariableContainer->getOrNull('currentPid');
$arguments53['additionalParams'] = $array54;
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments55 = array();
$arguments55['object'] = $currentVariableContainer->getOrNull('yagContext');
$output56 = '';

$output56 .= 'albumUid:';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments57 = array();
$arguments57['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments57['keepQuotes'] = false;
$arguments57['encoding'] = NULL;
$arguments57['doubleEncode'] = true;
$renderChildrenClosure58 = function() {return NULL;};
$value59 = ($arguments57['value'] !== NULL ? $arguments57['value'] : $renderChildrenClosure58());

$output56 .= (!is_string($value59) ? $value59 : htmlspecialchars($value59, ($arguments57['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments57['encoding'] !== NULL ? $arguments57['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments57['doubleEncode']));
$arguments55['arguments'] = $output56;
$arguments55['nameSpace'] = '';
$renderChildrenClosure60 = function() {return NULL;};
$viewHelper61 = $self->getViewHelper('$viewHelper61', $renderingContext, 'Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper');
$viewHelper61->setArguments($arguments55);
$viewHelper61->setRenderingContext($renderingContext);
$viewHelper61->setRenderChildrenClosure($renderChildrenClosure60);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_Namespace_GPArrayViewHelper
$arguments53['arguments'] = $viewHelper61->initializeArgumentsAndRender();
$arguments53['controller'] = NULL;
$arguments53['extensionName'] = NULL;
$arguments53['pluginName'] = NULL;
$arguments53['pageUid'] = NULL;
$arguments53['pageType'] = 0;
$arguments53['noCache'] = false;
$arguments53['noCacheHash'] = false;
$arguments53['section'] = '';
$arguments53['format'] = '';
$arguments53['linkAccessRestrictedPages'] = false;
$arguments53['absolute'] = false;
$arguments53['addQueryString'] = false;
$arguments53['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments53['addQueryStringMethod'] = NULL;
$renderChildrenClosure62 = function() {return NULL;};
$viewHelper63 = $self->getViewHelper('$viewHelper63', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper63->setArguments($arguments53);
$viewHelper63->setRenderingContext($renderingContext);
$viewHelper63->setRenderChildrenClosure($renderChildrenClosure62);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments52['returnUrl'] = $viewHelper63->initializeArgumentsAndRender();
$renderChildrenClosure64 = function() {return NULL;};
$viewHelper65 = $self->getViewHelper('$viewHelper65', $renderingContext, 'DL\Yag\ViewHelpers\Backend\EditRecordUrlViewHelper');
$viewHelper65->setArguments($arguments52);
$viewHelper65->setRenderingContext($renderingContext);
$viewHelper65->setRenderChildrenClosure($renderChildrenClosure64);
// End of ViewHelper DL\Yag\ViewHelpers\Backend\EditRecordUrlViewHelper

$output0 .= $viewHelper65->initializeArgumentsAndRender();

$output0 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments66 = array();
$arguments66['identifier'] = 'actions-document-open';
$arguments66['size'] = 'small';
$arguments66['overlay'] = NULL;
$arguments66['state'] = 'default';
$arguments66['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure67 = function() {return NULL;};

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output0 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments68 = array();
$arguments68['key'] = 'tx_yag_controller_item.editAlbumInListModule';
$arguments68['id'] = NULL;
$arguments68['default'] = NULL;
$arguments68['htmlEscape'] = NULL;
$arguments68['arguments'] = NULL;
$arguments68['extensionName'] = NULL;
$renderChildrenClosure69 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output0 .= '
            </a>
		</div>
    </div>
    <div style="clear:both"></div>
</div>
';


return $output0;
}


}
#1461666467    24036     