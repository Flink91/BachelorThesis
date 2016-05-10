<?php
class FluidCache_Yag_Album_partial_Import_ImportByZipForm_57fe8630be2c502ce0d931649938e5adb2135d73 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
Template for rendering import form for zip importer

Here is a list of objects / variables that can be accessed in this template:

Tx_Yag_Domain_Model_Album album               The album object

@package YAG
@author Michael Knoll <knoll@punkt.de>
@author Daniel Lienert <lienert@punkt.de>
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

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('zipImportAvailable'));
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments7 = array();
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments10 = array();
$arguments10['method'] = 'post';
$arguments10['controller'] = 'ZipImport';
$arguments10['action'] = 'importFromZip';
$arguments10['name'] = 'importFromZip';
$arguments10['enctype'] = 'multipart/form-data';
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['arguments'] = array (
);
$arguments10['extensionName'] = NULL;
$arguments10['pluginName'] = NULL;
$arguments10['pageUid'] = NULL;
$arguments10['object'] = NULL;
$arguments10['pageType'] = 0;
$arguments10['noCache'] = false;
$arguments10['noCacheHash'] = false;
$arguments10['section'] = '';
$arguments10['format'] = '';
$arguments10['additionalParams'] = array (
);
$arguments10['absolute'] = false;
$arguments10['addQueryString'] = false;
$arguments10['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments10['fieldNamePrefix'] = NULL;
$arguments10['actionUri'] = NULL;
$arguments10['objectName'] = NULL;
$arguments10['hiddenFieldClassName'] = NULL;
$arguments10['onreset'] = NULL;
$arguments10['onsubmit'] = NULL;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output12 = '';

$output12 .= '

            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments13 = array();
// Rendering Boolean node
$arguments13['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('createNewAlbum'));
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output15 = '';

$output15 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments16 = array();
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output18 = '';

$output18 .= '
                    <label for="gallery">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments19 = array();
$arguments19['key'] = 'tx_yag_general.selectGallery';
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['htmlEscape'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$renderChildrenClosure20 = function() {return NULL;};

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= ':</label><br />
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments21 = array();
$arguments21['name'] = 'galleryUid';
$arguments21['options'] = $currentVariableContainer->getOrNull('galleries');
$arguments21['optionValueField'] = 'uid';
$arguments21['optionLabelField'] = 'name';
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['value'] = NULL;
$arguments21['property'] = NULL;
$arguments21['class'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$arguments21['size'] = NULL;
$arguments21['disabled'] = NULL;
$arguments21['sortByOptionLabel'] = false;
$arguments21['selectAllByDefault'] = false;
$arguments21['errorClass'] = 'f3-form-error';
$arguments21['prependOptionLabel'] = NULL;
$arguments21['prependOptionValue'] = NULL;
$arguments21['multiple'] = false;
$renderChildrenClosure22 = function() {return NULL;};
$viewHelper23 = $self->getViewHelper('$viewHelper23', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper23->setArguments($arguments21);
$viewHelper23->setRenderingContext($renderingContext);
$viewHelper23->setRenderChildrenClosure($renderChildrenClosure22);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output18 .= $viewHelper23->initializeArgumentsAndRender();

$output18 .= '
                    <br/><br />
                    <label for="name">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments24 = array();
$arguments24['key'] = 'tx_yag_general.albumName';
$arguments24['id'] = NULL;
$arguments24['default'] = NULL;
$arguments24['htmlEscape'] = NULL;
$arguments24['arguments'] = NULL;
$arguments24['extensionName'] = NULL;
$renderChildrenClosure25 = function() {return NULL;};

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output18 .= ':</label><br />
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments26 = array();
$arguments26['property'] = 'name';
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['required'] = false;
$arguments26['type'] = 'text';
$arguments26['name'] = NULL;
$arguments26['value'] = NULL;
$arguments26['autofocus'] = NULL;
$arguments26['disabled'] = NULL;
$arguments26['maxlength'] = NULL;
$arguments26['readonly'] = NULL;
$arguments26['size'] = NULL;
$arguments26['placeholder'] = NULL;
$arguments26['pattern'] = NULL;
$arguments26['errorClass'] = 'f3-form-error';
$arguments26['class'] = NULL;
$arguments26['dir'] = NULL;
$arguments26['id'] = NULL;
$arguments26['lang'] = NULL;
$arguments26['style'] = NULL;
$arguments26['title'] = NULL;
$arguments26['accesskey'] = NULL;
$arguments26['tabindex'] = NULL;
$arguments26['onclick'] = NULL;
$renderChildrenClosure27 = function() {return NULL;};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper28->setArguments($arguments26);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output18 .= $viewHelper28->initializeArgumentsAndRender();

$output18 .= '
                    <br/><br />
                ';
return $output18;
};

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments29 = array();
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments32 = array();
// Rendering Boolean node
$arguments32['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('album'));
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output34 = '';

$output34 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments35 = array();
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output37 = '';

$output37 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments38 = array();
$arguments38['name'] = 'album';
$arguments38['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments38['additionalAttributes'] = NULL;
$arguments38['data'] = NULL;
$arguments38['property'] = NULL;
$arguments38['class'] = NULL;
$arguments38['dir'] = NULL;
$arguments38['id'] = NULL;
$arguments38['lang'] = NULL;
$arguments38['style'] = NULL;
$arguments38['title'] = NULL;
$arguments38['accesskey'] = NULL;
$arguments38['tabindex'] = NULL;
$arguments38['onclick'] = NULL;
$renderChildrenClosure39 = function() {return NULL;};
$viewHelper40 = $self->getViewHelper('$viewHelper40', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper40->setArguments($arguments38);
$viewHelper40->setRenderingContext($renderingContext);
$viewHelper40->setRenderChildrenClosure($renderChildrenClosure39);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output37 .= $viewHelper40->initializeArgumentsAndRender();

$output37 .= '
                        ';
return $output37;
};

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments41 = array();
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output43 = '';

$output43 .= '
                            <label for="album">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments44 = array();
$arguments44['key'] = 'tx_yag_general.selectAlbum';
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['htmlEscape'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$renderChildrenClosure45 = function() {return NULL;};

$output43 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output43 .= ':</label><br />
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments46 = array();
$arguments46['id'] = 'album_uid';
$arguments46['name'] = 'albumUid';
$arguments46['options'] = $currentVariableContainer->getOrNull('albums');
$arguments46['optionValueField'] = 'uid';
$arguments46['optionLabelField'] = 'name';
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['value'] = NULL;
$arguments46['property'] = NULL;
$arguments46['class'] = NULL;
$arguments46['dir'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['tabindex'] = NULL;
$arguments46['onclick'] = NULL;
$arguments46['size'] = NULL;
$arguments46['disabled'] = NULL;
$arguments46['sortByOptionLabel'] = false;
$arguments46['selectAllByDefault'] = false;
$arguments46['errorClass'] = 'f3-form-error';
$arguments46['prependOptionLabel'] = NULL;
$arguments46['prependOptionValue'] = NULL;
$arguments46['multiple'] = false;
$renderChildrenClosure47 = function() {return NULL;};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper48->setArguments($arguments46);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output43 .= $viewHelper48->initializeArgumentsAndRender();

$output43 .= '
                            <br/><br />
                        ';
return $output43;
};

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output34 .= '
                    ';
return $output34;
};
$arguments32['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output49 = '';

$output49 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments50 = array();
$arguments50['name'] = 'album';
$arguments50['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments50['additionalAttributes'] = NULL;
$arguments50['data'] = NULL;
$arguments50['property'] = NULL;
$arguments50['class'] = NULL;
$arguments50['dir'] = NULL;
$arguments50['id'] = NULL;
$arguments50['lang'] = NULL;
$arguments50['style'] = NULL;
$arguments50['title'] = NULL;
$arguments50['accesskey'] = NULL;
$arguments50['tabindex'] = NULL;
$arguments50['onclick'] = NULL;
$renderChildrenClosure51 = function() {return NULL;};
$viewHelper52 = $self->getViewHelper('$viewHelper52', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper52->setArguments($arguments50);
$viewHelper52->setRenderingContext($renderingContext);
$viewHelper52->setRenderChildrenClosure($renderChildrenClosure51);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output49 .= $viewHelper52->initializeArgumentsAndRender();

$output49 .= '
                        ';
return $output49;
};
$arguments32['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output53 = '';

$output53 .= '
                            <label for="album">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments54 = array();
$arguments54['key'] = 'tx_yag_general.selectAlbum';
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['htmlEscape'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$renderChildrenClosure55 = function() {return NULL;};

$output53 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= ':</label><br />
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments56 = array();
$arguments56['id'] = 'album_uid';
$arguments56['name'] = 'albumUid';
$arguments56['options'] = $currentVariableContainer->getOrNull('albums');
$arguments56['optionValueField'] = 'uid';
$arguments56['optionLabelField'] = 'name';
$arguments56['additionalAttributes'] = NULL;
$arguments56['data'] = NULL;
$arguments56['value'] = NULL;
$arguments56['property'] = NULL;
$arguments56['class'] = NULL;
$arguments56['dir'] = NULL;
$arguments56['lang'] = NULL;
$arguments56['style'] = NULL;
$arguments56['title'] = NULL;
$arguments56['accesskey'] = NULL;
$arguments56['tabindex'] = NULL;
$arguments56['onclick'] = NULL;
$arguments56['size'] = NULL;
$arguments56['disabled'] = NULL;
$arguments56['sortByOptionLabel'] = false;
$arguments56['selectAllByDefault'] = false;
$arguments56['errorClass'] = 'f3-form-error';
$arguments56['prependOptionLabel'] = NULL;
$arguments56['prependOptionValue'] = NULL;
$arguments56['multiple'] = false;
$renderChildrenClosure57 = function() {return NULL;};
$viewHelper58 = $self->getViewHelper('$viewHelper58', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper58->setArguments($arguments56);
$viewHelper58->setRenderingContext($renderingContext);
$viewHelper58->setRenderChildrenClosure($renderChildrenClosure57);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output53 .= $viewHelper58->initializeArgumentsAndRender();

$output53 .= '
                            <br/><br />
                        ';
return $output53;
};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
                ';
return $output31;
};

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output15 .= '
            ';
return $output15;
};
$arguments13['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output59 = '';

$output59 .= '
                    <label for="gallery">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments60 = array();
$arguments60['key'] = 'tx_yag_general.selectGallery';
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['htmlEscape'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$renderChildrenClosure61 = function() {return NULL;};

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= ':</label><br />
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments62 = array();
$arguments62['name'] = 'galleryUid';
$arguments62['options'] = $currentVariableContainer->getOrNull('galleries');
$arguments62['optionValueField'] = 'uid';
$arguments62['optionLabelField'] = 'name';
$arguments62['additionalAttributes'] = NULL;
$arguments62['data'] = NULL;
$arguments62['value'] = NULL;
$arguments62['property'] = NULL;
$arguments62['class'] = NULL;
$arguments62['dir'] = NULL;
$arguments62['id'] = NULL;
$arguments62['lang'] = NULL;
$arguments62['style'] = NULL;
$arguments62['title'] = NULL;
$arguments62['accesskey'] = NULL;
$arguments62['tabindex'] = NULL;
$arguments62['onclick'] = NULL;
$arguments62['size'] = NULL;
$arguments62['disabled'] = NULL;
$arguments62['sortByOptionLabel'] = false;
$arguments62['selectAllByDefault'] = false;
$arguments62['errorClass'] = 'f3-form-error';
$arguments62['prependOptionLabel'] = NULL;
$arguments62['prependOptionValue'] = NULL;
$arguments62['multiple'] = false;
$renderChildrenClosure63 = function() {return NULL;};
$viewHelper64 = $self->getViewHelper('$viewHelper64', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper64->setArguments($arguments62);
$viewHelper64->setRenderingContext($renderingContext);
$viewHelper64->setRenderChildrenClosure($renderChildrenClosure63);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output59 .= $viewHelper64->initializeArgumentsAndRender();

$output59 .= '
                    <br/><br />
                    <label for="name">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments65 = array();
$arguments65['key'] = 'tx_yag_general.albumName';
$arguments65['id'] = NULL;
$arguments65['default'] = NULL;
$arguments65['htmlEscape'] = NULL;
$arguments65['arguments'] = NULL;
$arguments65['extensionName'] = NULL;
$renderChildrenClosure66 = function() {return NULL;};

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output59 .= ':</label><br />
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments67 = array();
$arguments67['property'] = 'name';
$arguments67['additionalAttributes'] = NULL;
$arguments67['data'] = NULL;
$arguments67['required'] = false;
$arguments67['type'] = 'text';
$arguments67['name'] = NULL;
$arguments67['value'] = NULL;
$arguments67['autofocus'] = NULL;
$arguments67['disabled'] = NULL;
$arguments67['maxlength'] = NULL;
$arguments67['readonly'] = NULL;
$arguments67['size'] = NULL;
$arguments67['placeholder'] = NULL;
$arguments67['pattern'] = NULL;
$arguments67['errorClass'] = 'f3-form-error';
$arguments67['class'] = NULL;
$arguments67['dir'] = NULL;
$arguments67['id'] = NULL;
$arguments67['lang'] = NULL;
$arguments67['style'] = NULL;
$arguments67['title'] = NULL;
$arguments67['accesskey'] = NULL;
$arguments67['tabindex'] = NULL;
$arguments67['onclick'] = NULL;
$renderChildrenClosure68 = function() {return NULL;};
$viewHelper69 = $self->getViewHelper('$viewHelper69', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper69->setArguments($arguments67);
$viewHelper69->setRenderingContext($renderingContext);
$viewHelper69->setRenderChildrenClosure($renderChildrenClosure68);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output59 .= $viewHelper69->initializeArgumentsAndRender();

$output59 .= '
                    <br/><br />
                ';
return $output59;
};
$arguments13['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output70 = '';

$output70 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments71 = array();
// Rendering Boolean node
$arguments71['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('album'));
$arguments71['then'] = NULL;
$arguments71['else'] = NULL;
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output73 = '';

$output73 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments74 = array();
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output76 = '';

$output76 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments77 = array();
$arguments77['name'] = 'album';
$arguments77['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments77['additionalAttributes'] = NULL;
$arguments77['data'] = NULL;
$arguments77['property'] = NULL;
$arguments77['class'] = NULL;
$arguments77['dir'] = NULL;
$arguments77['id'] = NULL;
$arguments77['lang'] = NULL;
$arguments77['style'] = NULL;
$arguments77['title'] = NULL;
$arguments77['accesskey'] = NULL;
$arguments77['tabindex'] = NULL;
$arguments77['onclick'] = NULL;
$renderChildrenClosure78 = function() {return NULL;};
$viewHelper79 = $self->getViewHelper('$viewHelper79', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper79->setArguments($arguments77);
$viewHelper79->setRenderingContext($renderingContext);
$viewHelper79->setRenderChildrenClosure($renderChildrenClosure78);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output76 .= $viewHelper79->initializeArgumentsAndRender();

$output76 .= '
                        ';
return $output76;
};

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments80 = array();
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output82 = '';

$output82 .= '
                            <label for="album">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments83 = array();
$arguments83['key'] = 'tx_yag_general.selectAlbum';
$arguments83['id'] = NULL;
$arguments83['default'] = NULL;
$arguments83['htmlEscape'] = NULL;
$arguments83['arguments'] = NULL;
$arguments83['extensionName'] = NULL;
$renderChildrenClosure84 = function() {return NULL;};

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= ':</label><br />
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments85 = array();
$arguments85['id'] = 'album_uid';
$arguments85['name'] = 'albumUid';
$arguments85['options'] = $currentVariableContainer->getOrNull('albums');
$arguments85['optionValueField'] = 'uid';
$arguments85['optionLabelField'] = 'name';
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['value'] = NULL;
$arguments85['property'] = NULL;
$arguments85['class'] = NULL;
$arguments85['dir'] = NULL;
$arguments85['lang'] = NULL;
$arguments85['style'] = NULL;
$arguments85['title'] = NULL;
$arguments85['accesskey'] = NULL;
$arguments85['tabindex'] = NULL;
$arguments85['onclick'] = NULL;
$arguments85['size'] = NULL;
$arguments85['disabled'] = NULL;
$arguments85['sortByOptionLabel'] = false;
$arguments85['selectAllByDefault'] = false;
$arguments85['errorClass'] = 'f3-form-error';
$arguments85['prependOptionLabel'] = NULL;
$arguments85['prependOptionValue'] = NULL;
$arguments85['multiple'] = false;
$renderChildrenClosure86 = function() {return NULL;};
$viewHelper87 = $self->getViewHelper('$viewHelper87', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper87->setArguments($arguments85);
$viewHelper87->setRenderingContext($renderingContext);
$viewHelper87->setRenderChildrenClosure($renderChildrenClosure86);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output82 .= $viewHelper87->initializeArgumentsAndRender();

$output82 .= '
                            <br/><br />
                        ';
return $output82;
};

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output73 .= '
                    ';
return $output73;
};
$arguments71['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output88 = '';

$output88 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments89 = array();
$arguments89['name'] = 'album';
$arguments89['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments89['additionalAttributes'] = NULL;
$arguments89['data'] = NULL;
$arguments89['property'] = NULL;
$arguments89['class'] = NULL;
$arguments89['dir'] = NULL;
$arguments89['id'] = NULL;
$arguments89['lang'] = NULL;
$arguments89['style'] = NULL;
$arguments89['title'] = NULL;
$arguments89['accesskey'] = NULL;
$arguments89['tabindex'] = NULL;
$arguments89['onclick'] = NULL;
$renderChildrenClosure90 = function() {return NULL;};
$viewHelper91 = $self->getViewHelper('$viewHelper91', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper91->setArguments($arguments89);
$viewHelper91->setRenderingContext($renderingContext);
$viewHelper91->setRenderChildrenClosure($renderChildrenClosure90);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output88 .= $viewHelper91->initializeArgumentsAndRender();

$output88 .= '
                        ';
return $output88;
};
$arguments71['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output92 = '';

$output92 .= '
                            <label for="album">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments93 = array();
$arguments93['key'] = 'tx_yag_general.selectAlbum';
$arguments93['id'] = NULL;
$arguments93['default'] = NULL;
$arguments93['htmlEscape'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['extensionName'] = NULL;
$renderChildrenClosure94 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= ':</label><br />
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments95 = array();
$arguments95['id'] = 'album_uid';
$arguments95['name'] = 'albumUid';
$arguments95['options'] = $currentVariableContainer->getOrNull('albums');
$arguments95['optionValueField'] = 'uid';
$arguments95['optionLabelField'] = 'name';
$arguments95['additionalAttributes'] = NULL;
$arguments95['data'] = NULL;
$arguments95['value'] = NULL;
$arguments95['property'] = NULL;
$arguments95['class'] = NULL;
$arguments95['dir'] = NULL;
$arguments95['lang'] = NULL;
$arguments95['style'] = NULL;
$arguments95['title'] = NULL;
$arguments95['accesskey'] = NULL;
$arguments95['tabindex'] = NULL;
$arguments95['onclick'] = NULL;
$arguments95['size'] = NULL;
$arguments95['disabled'] = NULL;
$arguments95['sortByOptionLabel'] = false;
$arguments95['selectAllByDefault'] = false;
$arguments95['errorClass'] = 'f3-form-error';
$arguments95['prependOptionLabel'] = NULL;
$arguments95['prependOptionValue'] = NULL;
$arguments95['multiple'] = false;
$renderChildrenClosure96 = function() {return NULL;};
$viewHelper97 = $self->getViewHelper('$viewHelper97', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper97->setArguments($arguments95);
$viewHelper97->setRenderingContext($renderingContext);
$viewHelper97->setRenderChildrenClosure($renderChildrenClosure96);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output92 .= $viewHelper97->initializeArgumentsAndRender();

$output92 .= '
                            <br/><br />
                        ';
return $output92;
};

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
                ';
return $output70;
};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '

            <label for="file">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments98 = array();
$arguments98['key'] = 'tx_yag_controller_zipimportcontroller_importfromzipaction.selectZipFile';
$arguments98['id'] = NULL;
$arguments98['default'] = NULL;
$arguments98['htmlEscape'] = NULL;
$arguments98['arguments'] = NULL;
$arguments98['extensionName'] = NULL;
$renderChildrenClosure99 = function() {return NULL;};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output12 .= '</label><br />
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper
$arguments100 = array();
$arguments100['name'] = 'file';
$arguments100['additionalAttributes'] = NULL;
$arguments100['data'] = NULL;
$arguments100['value'] = NULL;
$arguments100['property'] = NULL;
$arguments100['disabled'] = NULL;
$arguments100['multiple'] = NULL;
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
$viewHelper102 = $self->getViewHelper('$viewHelper102', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper');
$viewHelper102->setArguments($arguments100);
$viewHelper102->setRenderingContext($renderingContext);
$viewHelper102->setRenderChildrenClosure($renderChildrenClosure101);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper

$output12 .= $viewHelper102->initializeArgumentsAndRender();

$output12 .= '<br/><br />
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments103 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments104 = array();
$arguments104['key'] = 'tx_yag_general.uploadFile';
$arguments104['id'] = NULL;
$arguments104['default'] = NULL;
$arguments104['htmlEscape'] = NULL;
$arguments104['arguments'] = NULL;
$arguments104['extensionName'] = NULL;
$renderChildrenClosure105 = function() {return NULL;};
$arguments103['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);
$arguments103['class'] = 'btn';
$arguments103['additionalAttributes'] = NULL;
$arguments103['data'] = NULL;
$arguments103['name'] = NULL;
$arguments103['property'] = NULL;
$arguments103['disabled'] = NULL;
$arguments103['dir'] = NULL;
$arguments103['id'] = NULL;
$arguments103['lang'] = NULL;
$arguments103['style'] = NULL;
$arguments103['title'] = NULL;
$arguments103['accesskey'] = NULL;
$arguments103['tabindex'] = NULL;
$arguments103['onclick'] = NULL;
$renderChildrenClosure106 = function() {return NULL;};
$viewHelper107 = $self->getViewHelper('$viewHelper107', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper107->setArguments($arguments103);
$viewHelper107->setRenderingContext($renderingContext);
$viewHelper107->setRenderChildrenClosure($renderChildrenClosure106);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output12 .= $viewHelper107->initializeArgumentsAndRender();

$output12 .= '

        ';
return $output12;
};
$viewHelper108 = $self->getViewHelper('$viewHelper108', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper108->setArguments($arguments10);
$viewHelper108->setRenderingContext($renderingContext);
$viewHelper108->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output9 .= $viewHelper108->initializeArgumentsAndRender();

$output9 .= '

    ';
return $output9;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments109 = array();
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output111 = '';

$output111 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments112 = array();
$arguments112['key'] = 'tx_yag_controller_album_addItems.zipImporterNotAvailable';
$arguments112['id'] = NULL;
$arguments112['default'] = NULL;
$arguments112['htmlEscape'] = NULL;
$arguments112['arguments'] = NULL;
$arguments112['extensionName'] = NULL;
$renderChildrenClosure113 = function() {return NULL;};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output111 .= '
    ';
return $output111;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output6 .= '
';
return $output6;
};
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output114 = '';

$output114 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments115 = array();
$arguments115['method'] = 'post';
$arguments115['controller'] = 'ZipImport';
$arguments115['action'] = 'importFromZip';
$arguments115['name'] = 'importFromZip';
$arguments115['enctype'] = 'multipart/form-data';
$arguments115['additionalAttributes'] = NULL;
$arguments115['data'] = NULL;
$arguments115['arguments'] = array (
);
$arguments115['extensionName'] = NULL;
$arguments115['pluginName'] = NULL;
$arguments115['pageUid'] = NULL;
$arguments115['object'] = NULL;
$arguments115['pageType'] = 0;
$arguments115['noCache'] = false;
$arguments115['noCacheHash'] = false;
$arguments115['section'] = '';
$arguments115['format'] = '';
$arguments115['additionalParams'] = array (
);
$arguments115['absolute'] = false;
$arguments115['addQueryString'] = false;
$arguments115['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments115['fieldNamePrefix'] = NULL;
$arguments115['actionUri'] = NULL;
$arguments115['objectName'] = NULL;
$arguments115['hiddenFieldClassName'] = NULL;
$arguments115['onreset'] = NULL;
$arguments115['onsubmit'] = NULL;
$arguments115['class'] = NULL;
$arguments115['dir'] = NULL;
$arguments115['id'] = NULL;
$arguments115['lang'] = NULL;
$arguments115['style'] = NULL;
$arguments115['title'] = NULL;
$arguments115['accesskey'] = NULL;
$arguments115['tabindex'] = NULL;
$arguments115['onclick'] = NULL;
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output117 = '';

$output117 .= '

            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments118 = array();
// Rendering Boolean node
$arguments118['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('createNewAlbum'));
$arguments118['then'] = NULL;
$arguments118['else'] = NULL;
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output120 = '';

$output120 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments121 = array();
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output123 = '';

$output123 .= '
                    <label for="gallery">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments124 = array();
$arguments124['key'] = 'tx_yag_general.selectGallery';
$arguments124['id'] = NULL;
$arguments124['default'] = NULL;
$arguments124['htmlEscape'] = NULL;
$arguments124['arguments'] = NULL;
$arguments124['extensionName'] = NULL;
$renderChildrenClosure125 = function() {return NULL;};

$output123 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output123 .= ':</label><br />
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments126 = array();
$arguments126['name'] = 'galleryUid';
$arguments126['options'] = $currentVariableContainer->getOrNull('galleries');
$arguments126['optionValueField'] = 'uid';
$arguments126['optionLabelField'] = 'name';
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
$arguments126['sortByOptionLabel'] = false;
$arguments126['selectAllByDefault'] = false;
$arguments126['errorClass'] = 'f3-form-error';
$arguments126['prependOptionLabel'] = NULL;
$arguments126['prependOptionValue'] = NULL;
$arguments126['multiple'] = false;
$renderChildrenClosure127 = function() {return NULL;};
$viewHelper128 = $self->getViewHelper('$viewHelper128', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper128->setArguments($arguments126);
$viewHelper128->setRenderingContext($renderingContext);
$viewHelper128->setRenderChildrenClosure($renderChildrenClosure127);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output123 .= $viewHelper128->initializeArgumentsAndRender();

$output123 .= '
                    <br/><br />
                    <label for="name">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments129 = array();
$arguments129['key'] = 'tx_yag_general.albumName';
$arguments129['id'] = NULL;
$arguments129['default'] = NULL;
$arguments129['htmlEscape'] = NULL;
$arguments129['arguments'] = NULL;
$arguments129['extensionName'] = NULL;
$renderChildrenClosure130 = function() {return NULL;};

$output123 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output123 .= ':</label><br />
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments131 = array();
$arguments131['property'] = 'name';
$arguments131['additionalAttributes'] = NULL;
$arguments131['data'] = NULL;
$arguments131['required'] = false;
$arguments131['type'] = 'text';
$arguments131['name'] = NULL;
$arguments131['value'] = NULL;
$arguments131['autofocus'] = NULL;
$arguments131['disabled'] = NULL;
$arguments131['maxlength'] = NULL;
$arguments131['readonly'] = NULL;
$arguments131['size'] = NULL;
$arguments131['placeholder'] = NULL;
$arguments131['pattern'] = NULL;
$arguments131['errorClass'] = 'f3-form-error';
$arguments131['class'] = NULL;
$arguments131['dir'] = NULL;
$arguments131['id'] = NULL;
$arguments131['lang'] = NULL;
$arguments131['style'] = NULL;
$arguments131['title'] = NULL;
$arguments131['accesskey'] = NULL;
$arguments131['tabindex'] = NULL;
$arguments131['onclick'] = NULL;
$renderChildrenClosure132 = function() {return NULL;};
$viewHelper133 = $self->getViewHelper('$viewHelper133', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper133->setArguments($arguments131);
$viewHelper133->setRenderingContext($renderingContext);
$viewHelper133->setRenderChildrenClosure($renderChildrenClosure132);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output123 .= $viewHelper133->initializeArgumentsAndRender();

$output123 .= '
                    <br/><br />
                ';
return $output123;
};

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output120 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments134 = array();
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output136 = '';

$output136 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments137 = array();
// Rendering Boolean node
$arguments137['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('album'));
$arguments137['then'] = NULL;
$arguments137['else'] = NULL;
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output139 = '';

$output139 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments140 = array();
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output142 = '';

$output142 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments143 = array();
$arguments143['name'] = 'album';
$arguments143['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments143['additionalAttributes'] = NULL;
$arguments143['data'] = NULL;
$arguments143['property'] = NULL;
$arguments143['class'] = NULL;
$arguments143['dir'] = NULL;
$arguments143['id'] = NULL;
$arguments143['lang'] = NULL;
$arguments143['style'] = NULL;
$arguments143['title'] = NULL;
$arguments143['accesskey'] = NULL;
$arguments143['tabindex'] = NULL;
$arguments143['onclick'] = NULL;
$renderChildrenClosure144 = function() {return NULL;};
$viewHelper145 = $self->getViewHelper('$viewHelper145', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper145->setArguments($arguments143);
$viewHelper145->setRenderingContext($renderingContext);
$viewHelper145->setRenderChildrenClosure($renderChildrenClosure144);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output142 .= $viewHelper145->initializeArgumentsAndRender();

$output142 .= '
                        ';
return $output142;
};

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output139 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments146 = array();
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output148 = '';

$output148 .= '
                            <label for="album">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments149 = array();
$arguments149['key'] = 'tx_yag_general.selectAlbum';
$arguments149['id'] = NULL;
$arguments149['default'] = NULL;
$arguments149['htmlEscape'] = NULL;
$arguments149['arguments'] = NULL;
$arguments149['extensionName'] = NULL;
$renderChildrenClosure150 = function() {return NULL;};

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output148 .= ':</label><br />
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments151 = array();
$arguments151['id'] = 'album_uid';
$arguments151['name'] = 'albumUid';
$arguments151['options'] = $currentVariableContainer->getOrNull('albums');
$arguments151['optionValueField'] = 'uid';
$arguments151['optionLabelField'] = 'name';
$arguments151['additionalAttributes'] = NULL;
$arguments151['data'] = NULL;
$arguments151['value'] = NULL;
$arguments151['property'] = NULL;
$arguments151['class'] = NULL;
$arguments151['dir'] = NULL;
$arguments151['lang'] = NULL;
$arguments151['style'] = NULL;
$arguments151['title'] = NULL;
$arguments151['accesskey'] = NULL;
$arguments151['tabindex'] = NULL;
$arguments151['onclick'] = NULL;
$arguments151['size'] = NULL;
$arguments151['disabled'] = NULL;
$arguments151['sortByOptionLabel'] = false;
$arguments151['selectAllByDefault'] = false;
$arguments151['errorClass'] = 'f3-form-error';
$arguments151['prependOptionLabel'] = NULL;
$arguments151['prependOptionValue'] = NULL;
$arguments151['multiple'] = false;
$renderChildrenClosure152 = function() {return NULL;};
$viewHelper153 = $self->getViewHelper('$viewHelper153', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper153->setArguments($arguments151);
$viewHelper153->setRenderingContext($renderingContext);
$viewHelper153->setRenderChildrenClosure($renderChildrenClosure152);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output148 .= $viewHelper153->initializeArgumentsAndRender();

$output148 .= '
                            <br/><br />
                        ';
return $output148;
};

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output139 .= '
                    ';
return $output139;
};
$arguments137['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output154 = '';

$output154 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments155 = array();
$arguments155['name'] = 'album';
$arguments155['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments155['additionalAttributes'] = NULL;
$arguments155['data'] = NULL;
$arguments155['property'] = NULL;
$arguments155['class'] = NULL;
$arguments155['dir'] = NULL;
$arguments155['id'] = NULL;
$arguments155['lang'] = NULL;
$arguments155['style'] = NULL;
$arguments155['title'] = NULL;
$arguments155['accesskey'] = NULL;
$arguments155['tabindex'] = NULL;
$arguments155['onclick'] = NULL;
$renderChildrenClosure156 = function() {return NULL;};
$viewHelper157 = $self->getViewHelper('$viewHelper157', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper157->setArguments($arguments155);
$viewHelper157->setRenderingContext($renderingContext);
$viewHelper157->setRenderChildrenClosure($renderChildrenClosure156);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output154 .= $viewHelper157->initializeArgumentsAndRender();

$output154 .= '
                        ';
return $output154;
};
$arguments137['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output158 = '';

$output158 .= '
                            <label for="album">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments159 = array();
$arguments159['key'] = 'tx_yag_general.selectAlbum';
$arguments159['id'] = NULL;
$arguments159['default'] = NULL;
$arguments159['htmlEscape'] = NULL;
$arguments159['arguments'] = NULL;
$arguments159['extensionName'] = NULL;
$renderChildrenClosure160 = function() {return NULL;};

$output158 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output158 .= ':</label><br />
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments161 = array();
$arguments161['id'] = 'album_uid';
$arguments161['name'] = 'albumUid';
$arguments161['options'] = $currentVariableContainer->getOrNull('albums');
$arguments161['optionValueField'] = 'uid';
$arguments161['optionLabelField'] = 'name';
$arguments161['additionalAttributes'] = NULL;
$arguments161['data'] = NULL;
$arguments161['value'] = NULL;
$arguments161['property'] = NULL;
$arguments161['class'] = NULL;
$arguments161['dir'] = NULL;
$arguments161['lang'] = NULL;
$arguments161['style'] = NULL;
$arguments161['title'] = NULL;
$arguments161['accesskey'] = NULL;
$arguments161['tabindex'] = NULL;
$arguments161['onclick'] = NULL;
$arguments161['size'] = NULL;
$arguments161['disabled'] = NULL;
$arguments161['sortByOptionLabel'] = false;
$arguments161['selectAllByDefault'] = false;
$arguments161['errorClass'] = 'f3-form-error';
$arguments161['prependOptionLabel'] = NULL;
$arguments161['prependOptionValue'] = NULL;
$arguments161['multiple'] = false;
$renderChildrenClosure162 = function() {return NULL;};
$viewHelper163 = $self->getViewHelper('$viewHelper163', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper163->setArguments($arguments161);
$viewHelper163->setRenderingContext($renderingContext);
$viewHelper163->setRenderChildrenClosure($renderChildrenClosure162);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output158 .= $viewHelper163->initializeArgumentsAndRender();

$output158 .= '
                            <br/><br />
                        ';
return $output158;
};

$output136 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output136 .= '
                ';
return $output136;
};

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output120 .= '
            ';
return $output120;
};
$arguments118['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output164 = '';

$output164 .= '
                    <label for="gallery">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments165 = array();
$arguments165['key'] = 'tx_yag_general.selectGallery';
$arguments165['id'] = NULL;
$arguments165['default'] = NULL;
$arguments165['htmlEscape'] = NULL;
$arguments165['arguments'] = NULL;
$arguments165['extensionName'] = NULL;
$renderChildrenClosure166 = function() {return NULL;};

$output164 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output164 .= ':</label><br />
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments167 = array();
$arguments167['name'] = 'galleryUid';
$arguments167['options'] = $currentVariableContainer->getOrNull('galleries');
$arguments167['optionValueField'] = 'uid';
$arguments167['optionLabelField'] = 'name';
$arguments167['additionalAttributes'] = NULL;
$arguments167['data'] = NULL;
$arguments167['value'] = NULL;
$arguments167['property'] = NULL;
$arguments167['class'] = NULL;
$arguments167['dir'] = NULL;
$arguments167['id'] = NULL;
$arguments167['lang'] = NULL;
$arguments167['style'] = NULL;
$arguments167['title'] = NULL;
$arguments167['accesskey'] = NULL;
$arguments167['tabindex'] = NULL;
$arguments167['onclick'] = NULL;
$arguments167['size'] = NULL;
$arguments167['disabled'] = NULL;
$arguments167['sortByOptionLabel'] = false;
$arguments167['selectAllByDefault'] = false;
$arguments167['errorClass'] = 'f3-form-error';
$arguments167['prependOptionLabel'] = NULL;
$arguments167['prependOptionValue'] = NULL;
$arguments167['multiple'] = false;
$renderChildrenClosure168 = function() {return NULL;};
$viewHelper169 = $self->getViewHelper('$viewHelper169', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper169->setArguments($arguments167);
$viewHelper169->setRenderingContext($renderingContext);
$viewHelper169->setRenderChildrenClosure($renderChildrenClosure168);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output164 .= $viewHelper169->initializeArgumentsAndRender();

$output164 .= '
                    <br/><br />
                    <label for="name">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments170 = array();
$arguments170['key'] = 'tx_yag_general.albumName';
$arguments170['id'] = NULL;
$arguments170['default'] = NULL;
$arguments170['htmlEscape'] = NULL;
$arguments170['arguments'] = NULL;
$arguments170['extensionName'] = NULL;
$renderChildrenClosure171 = function() {return NULL;};

$output164 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output164 .= ':</label><br />
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments172 = array();
$arguments172['property'] = 'name';
$arguments172['additionalAttributes'] = NULL;
$arguments172['data'] = NULL;
$arguments172['required'] = false;
$arguments172['type'] = 'text';
$arguments172['name'] = NULL;
$arguments172['value'] = NULL;
$arguments172['autofocus'] = NULL;
$arguments172['disabled'] = NULL;
$arguments172['maxlength'] = NULL;
$arguments172['readonly'] = NULL;
$arguments172['size'] = NULL;
$arguments172['placeholder'] = NULL;
$arguments172['pattern'] = NULL;
$arguments172['errorClass'] = 'f3-form-error';
$arguments172['class'] = NULL;
$arguments172['dir'] = NULL;
$arguments172['id'] = NULL;
$arguments172['lang'] = NULL;
$arguments172['style'] = NULL;
$arguments172['title'] = NULL;
$arguments172['accesskey'] = NULL;
$arguments172['tabindex'] = NULL;
$arguments172['onclick'] = NULL;
$renderChildrenClosure173 = function() {return NULL;};
$viewHelper174 = $self->getViewHelper('$viewHelper174', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper174->setArguments($arguments172);
$viewHelper174->setRenderingContext($renderingContext);
$viewHelper174->setRenderChildrenClosure($renderChildrenClosure173);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output164 .= $viewHelper174->initializeArgumentsAndRender();

$output164 .= '
                    <br/><br />
                ';
return $output164;
};
$arguments118['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output175 = '';

$output175 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments176 = array();
// Rendering Boolean node
$arguments176['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('album'));
$arguments176['then'] = NULL;
$arguments176['else'] = NULL;
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output178 = '';

$output178 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments179 = array();
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output181 = '';

$output181 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments182 = array();
$arguments182['name'] = 'album';
$arguments182['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments182['additionalAttributes'] = NULL;
$arguments182['data'] = NULL;
$arguments182['property'] = NULL;
$arguments182['class'] = NULL;
$arguments182['dir'] = NULL;
$arguments182['id'] = NULL;
$arguments182['lang'] = NULL;
$arguments182['style'] = NULL;
$arguments182['title'] = NULL;
$arguments182['accesskey'] = NULL;
$arguments182['tabindex'] = NULL;
$arguments182['onclick'] = NULL;
$renderChildrenClosure183 = function() {return NULL;};
$viewHelper184 = $self->getViewHelper('$viewHelper184', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper184->setArguments($arguments182);
$viewHelper184->setRenderingContext($renderingContext);
$viewHelper184->setRenderChildrenClosure($renderChildrenClosure183);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output181 .= $viewHelper184->initializeArgumentsAndRender();

$output181 .= '
                        ';
return $output181;
};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output178 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments185 = array();
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output187 = '';

$output187 .= '
                            <label for="album">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments188 = array();
$arguments188['key'] = 'tx_yag_general.selectAlbum';
$arguments188['id'] = NULL;
$arguments188['default'] = NULL;
$arguments188['htmlEscape'] = NULL;
$arguments188['arguments'] = NULL;
$arguments188['extensionName'] = NULL;
$renderChildrenClosure189 = function() {return NULL;};

$output187 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output187 .= ':</label><br />
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments190 = array();
$arguments190['id'] = 'album_uid';
$arguments190['name'] = 'albumUid';
$arguments190['options'] = $currentVariableContainer->getOrNull('albums');
$arguments190['optionValueField'] = 'uid';
$arguments190['optionLabelField'] = 'name';
$arguments190['additionalAttributes'] = NULL;
$arguments190['data'] = NULL;
$arguments190['value'] = NULL;
$arguments190['property'] = NULL;
$arguments190['class'] = NULL;
$arguments190['dir'] = NULL;
$arguments190['lang'] = NULL;
$arguments190['style'] = NULL;
$arguments190['title'] = NULL;
$arguments190['accesskey'] = NULL;
$arguments190['tabindex'] = NULL;
$arguments190['onclick'] = NULL;
$arguments190['size'] = NULL;
$arguments190['disabled'] = NULL;
$arguments190['sortByOptionLabel'] = false;
$arguments190['selectAllByDefault'] = false;
$arguments190['errorClass'] = 'f3-form-error';
$arguments190['prependOptionLabel'] = NULL;
$arguments190['prependOptionValue'] = NULL;
$arguments190['multiple'] = false;
$renderChildrenClosure191 = function() {return NULL;};
$viewHelper192 = $self->getViewHelper('$viewHelper192', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper192->setArguments($arguments190);
$viewHelper192->setRenderingContext($renderingContext);
$viewHelper192->setRenderChildrenClosure($renderChildrenClosure191);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output187 .= $viewHelper192->initializeArgumentsAndRender();

$output187 .= '
                            <br/><br />
                        ';
return $output187;
};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output178 .= '
                    ';
return $output178;
};
$arguments176['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output193 = '';

$output193 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments194 = array();
$arguments194['name'] = 'album';
$arguments194['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments194['additionalAttributes'] = NULL;
$arguments194['data'] = NULL;
$arguments194['property'] = NULL;
$arguments194['class'] = NULL;
$arguments194['dir'] = NULL;
$arguments194['id'] = NULL;
$arguments194['lang'] = NULL;
$arguments194['style'] = NULL;
$arguments194['title'] = NULL;
$arguments194['accesskey'] = NULL;
$arguments194['tabindex'] = NULL;
$arguments194['onclick'] = NULL;
$renderChildrenClosure195 = function() {return NULL;};
$viewHelper196 = $self->getViewHelper('$viewHelper196', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper196->setArguments($arguments194);
$viewHelper196->setRenderingContext($renderingContext);
$viewHelper196->setRenderChildrenClosure($renderChildrenClosure195);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output193 .= $viewHelper196->initializeArgumentsAndRender();

$output193 .= '
                        ';
return $output193;
};
$arguments176['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output197 = '';

$output197 .= '
                            <label for="album">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments198 = array();
$arguments198['key'] = 'tx_yag_general.selectAlbum';
$arguments198['id'] = NULL;
$arguments198['default'] = NULL;
$arguments198['htmlEscape'] = NULL;
$arguments198['arguments'] = NULL;
$arguments198['extensionName'] = NULL;
$renderChildrenClosure199 = function() {return NULL;};

$output197 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output197 .= ':</label><br />
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments200 = array();
$arguments200['id'] = 'album_uid';
$arguments200['name'] = 'albumUid';
$arguments200['options'] = $currentVariableContainer->getOrNull('albums');
$arguments200['optionValueField'] = 'uid';
$arguments200['optionLabelField'] = 'name';
$arguments200['additionalAttributes'] = NULL;
$arguments200['data'] = NULL;
$arguments200['value'] = NULL;
$arguments200['property'] = NULL;
$arguments200['class'] = NULL;
$arguments200['dir'] = NULL;
$arguments200['lang'] = NULL;
$arguments200['style'] = NULL;
$arguments200['title'] = NULL;
$arguments200['accesskey'] = NULL;
$arguments200['tabindex'] = NULL;
$arguments200['onclick'] = NULL;
$arguments200['size'] = NULL;
$arguments200['disabled'] = NULL;
$arguments200['sortByOptionLabel'] = false;
$arguments200['selectAllByDefault'] = false;
$arguments200['errorClass'] = 'f3-form-error';
$arguments200['prependOptionLabel'] = NULL;
$arguments200['prependOptionValue'] = NULL;
$arguments200['multiple'] = false;
$renderChildrenClosure201 = function() {return NULL;};
$viewHelper202 = $self->getViewHelper('$viewHelper202', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper202->setArguments($arguments200);
$viewHelper202->setRenderingContext($renderingContext);
$viewHelper202->setRenderChildrenClosure($renderChildrenClosure201);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output197 .= $viewHelper202->initializeArgumentsAndRender();

$output197 .= '
                            <br/><br />
                        ';
return $output197;
};

$output175 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output175 .= '
                ';
return $output175;
};

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '

            <label for="file">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments203 = array();
$arguments203['key'] = 'tx_yag_controller_zipimportcontroller_importfromzipaction.selectZipFile';
$arguments203['id'] = NULL;
$arguments203['default'] = NULL;
$arguments203['htmlEscape'] = NULL;
$arguments203['arguments'] = NULL;
$arguments203['extensionName'] = NULL;
$renderChildrenClosure204 = function() {return NULL;};

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output117 .= '</label><br />
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper
$arguments205 = array();
$arguments205['name'] = 'file';
$arguments205['additionalAttributes'] = NULL;
$arguments205['data'] = NULL;
$arguments205['value'] = NULL;
$arguments205['property'] = NULL;
$arguments205['disabled'] = NULL;
$arguments205['multiple'] = NULL;
$arguments205['errorClass'] = 'f3-form-error';
$arguments205['class'] = NULL;
$arguments205['dir'] = NULL;
$arguments205['id'] = NULL;
$arguments205['lang'] = NULL;
$arguments205['style'] = NULL;
$arguments205['title'] = NULL;
$arguments205['accesskey'] = NULL;
$arguments205['tabindex'] = NULL;
$arguments205['onclick'] = NULL;
$renderChildrenClosure206 = function() {return NULL;};
$viewHelper207 = $self->getViewHelper('$viewHelper207', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper');
$viewHelper207->setArguments($arguments205);
$viewHelper207->setRenderingContext($renderingContext);
$viewHelper207->setRenderChildrenClosure($renderChildrenClosure206);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper

$output117 .= $viewHelper207->initializeArgumentsAndRender();

$output117 .= '<br/><br />
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments208 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments209 = array();
$arguments209['key'] = 'tx_yag_general.uploadFile';
$arguments209['id'] = NULL;
$arguments209['default'] = NULL;
$arguments209['htmlEscape'] = NULL;
$arguments209['arguments'] = NULL;
$arguments209['extensionName'] = NULL;
$renderChildrenClosure210 = function() {return NULL;};
$arguments208['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);
$arguments208['class'] = 'btn';
$arguments208['additionalAttributes'] = NULL;
$arguments208['data'] = NULL;
$arguments208['name'] = NULL;
$arguments208['property'] = NULL;
$arguments208['disabled'] = NULL;
$arguments208['dir'] = NULL;
$arguments208['id'] = NULL;
$arguments208['lang'] = NULL;
$arguments208['style'] = NULL;
$arguments208['title'] = NULL;
$arguments208['accesskey'] = NULL;
$arguments208['tabindex'] = NULL;
$arguments208['onclick'] = NULL;
$renderChildrenClosure211 = function() {return NULL;};
$viewHelper212 = $self->getViewHelper('$viewHelper212', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper212->setArguments($arguments208);
$viewHelper212->setRenderingContext($renderingContext);
$viewHelper212->setRenderChildrenClosure($renderChildrenClosure211);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output117 .= $viewHelper212->initializeArgumentsAndRender();

$output117 .= '

        ';
return $output117;
};
$viewHelper213 = $self->getViewHelper('$viewHelper213', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper213->setArguments($arguments115);
$viewHelper213->setRenderingContext($renderingContext);
$viewHelper213->setRenderChildrenClosure($renderChildrenClosure116);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output114 .= $viewHelper213->initializeArgumentsAndRender();

$output114 .= '

    ';
return $output114;
};
$arguments4['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output214 = '';

$output214 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments215 = array();
$arguments215['key'] = 'tx_yag_controller_album_addItems.zipImporterNotAvailable';
$arguments215['id'] = NULL;
$arguments215['default'] = NULL;
$arguments215['htmlEscape'] = NULL;
$arguments215['arguments'] = NULL;
$arguments215['extensionName'] = NULL;
$renderChildrenClosure216 = function() {return NULL;};

$output214 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output214 .= '
    ';
return $output214;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);


return $output0;
}


}
#1461666513    73204     