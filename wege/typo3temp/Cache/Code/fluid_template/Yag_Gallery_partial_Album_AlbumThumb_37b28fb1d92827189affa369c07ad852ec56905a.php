<?php
class FluidCache_Yag_Gallery_partial_Album_AlbumThumb_37b28fb1d92827189affa369c07ad852ec56905a extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
Template for rendering an album thumb

Here is a list of objects / variables that can be accessed in this template:

Tx_Yag_Domain_Model_Album album               The album object

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


<div class="tx-yag-thumb-innerframe tx-yag-album-thumb-innerframe">
	';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_AlbumViewHelper
$arguments4 = array();
$arguments4['album'] = $currentVariableContainer->getOrNull('album');
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['albumUid'] = 0;
$arguments4['gallery'] = NULL;
$arguments4['pageUid'] = NULL;
$arguments4['pageType'] = 0;
$arguments4['noCache'] = false;
$arguments4['noCacheHash'] = false;
$arguments4['section'] = '';
$arguments4['format'] = '';
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['name'] = NULL;
$arguments4['rel'] = NULL;
$arguments4['rev'] = NULL;
$arguments4['target'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments7 = array();
// Rendering Boolean node
$arguments7['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'itemCount', $renderingContext), 0);
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
		    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments10 = array();
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output12 = '';

$output12 .= '
		        ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments13 = array();
$arguments13['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'thumb', $renderingContext);
$arguments13['resolutionName'] = 'albumThumb';
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['alt'] = NULL;
$arguments13['centerVertical'] = NULL;
$arguments13['width'] = NULL;
$arguments13['height'] = NULL;
$arguments13['quality'] = 80;
$renderChildrenClosure14 = function() {return NULL;};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper15->setArguments($arguments13);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output12 .= $viewHelper15->initializeArgumentsAndRender();

$output12 .= '
		    ';
return $output12;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
		    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments16 = array();
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output18 = '';

$output18 .= '
		        <div>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments19 = array();
$arguments19['key'] = 'tx_yag_controller_album.noItems';
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['htmlEscape'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$renderChildrenClosure20 = function() {return NULL;};

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '</div>
		    ';
return $output18;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output9 .= '
	    ';
return $output9;
};
$arguments7['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output21 = '';

$output21 .= '
		        ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper
$arguments22 = array();
$arguments22['item'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'thumb', $renderingContext);
$arguments22['resolutionName'] = 'albumThumb';
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$arguments22['alt'] = NULL;
$arguments22['centerVertical'] = NULL;
$arguments22['width'] = NULL;
$arguments22['height'] = NULL;
$arguments22['quality'] = 80;
$renderChildrenClosure23 = function() {return NULL;};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'Tx_Yag_ViewHelpers_ImageViewHelper');
$viewHelper24->setArguments($arguments22);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper Tx_Yag_ViewHelpers_ImageViewHelper

$output21 .= $viewHelper24->initializeArgumentsAndRender();

$output21 .= '
		    ';
return $output21;
};
$arguments7['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output25 = '';

$output25 .= '
		        <div>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments26 = array();
$arguments26['key'] = 'tx_yag_controller_album.noItems';
$arguments26['id'] = NULL;
$arguments26['default'] = NULL;
$arguments26['htmlEscape'] = NULL;
$arguments26['arguments'] = NULL;
$arguments26['extensionName'] = NULL;
$renderChildrenClosure27 = function() {return NULL;};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '</div>
		    ';
return $output25;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
	';
return $output6;
};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'Tx_Yag_ViewHelpers_Link_AlbumViewHelper');
$viewHelper28->setArguments($arguments4);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_AlbumViewHelper

$output0 .= $viewHelper28->initializeArgumentsAndRender();

$output0 .= '
</div>

<div class="tx-yag-album-albuminfo" id="albumUid-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments29 = array();
$arguments29['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'uid', $renderingContext);
$arguments29['keepQuotes'] = false;
$arguments29['encoding'] = NULL;
$arguments29['doubleEncode'] = true;
$renderChildrenClosure30 = function() {return NULL;};
$value31 = ($arguments29['value'] !== NULL ? $arguments29['value'] : $renderChildrenClosure30());

$output0 .= (!is_string($value31) ? $value31 : htmlspecialchars($value31, ($arguments29['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments29['encoding'] !== NULL ? $arguments29['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments29['doubleEncode']));

$output0 .= '" style="position: relative">
    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_AlbumViewHelper
$arguments32 = array();
$arguments32['album'] = $currentVariableContainer->getOrNull('album');
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['albumUid'] = 0;
$arguments32['gallery'] = NULL;
$arguments32['pageUid'] = NULL;
$arguments32['pageType'] = 0;
$arguments32['noCache'] = false;
$arguments32['noCacheHash'] = false;
$arguments32['section'] = '';
$arguments32['format'] = '';
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$arguments32['name'] = NULL;
$arguments32['rel'] = NULL;
$arguments32['rev'] = NULL;
$arguments32['target'] = NULL;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output34 = '';

$output34 .= '
        <div class="tx-yag-album-albumcaption">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments35 = array();
$arguments35['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'name', $renderingContext);
$arguments35['keepQuotes'] = false;
$arguments35['encoding'] = NULL;
$arguments35['doubleEncode'] = true;
$renderChildrenClosure36 = function() {return NULL;};
$value37 = ($arguments35['value'] !== NULL ? $arguments35['value'] : $renderChildrenClosure36());

$output34 .= (!is_string($value37) ? $value37 : htmlspecialchars($value37, ($arguments35['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments35['encoding'] !== NULL ? $arguments35['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments35['doubleEncode']));

$output34 .= '
        </div>
    ';
return $output34;
};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'Tx_Yag_ViewHelpers_Link_AlbumViewHelper');
$viewHelper38->setArguments($arguments32);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_AlbumViewHelper

$output0 .= $viewHelper38->initializeArgumentsAndRender();

$output0 .= '
	<div class="tx-yag-album-itemcount">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments39 = array();
$arguments39['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'itemCount', $renderingContext);
$arguments39['keepQuotes'] = false;
$arguments39['encoding'] = NULL;
$arguments39['doubleEncode'] = true;
$renderChildrenClosure40 = function() {return NULL;};
$value41 = ($arguments39['value'] !== NULL ? $arguments39['value'] : $renderChildrenClosure40());

$output0 .= (!is_string($value41) ? $value41 : htmlspecialchars($value41, ($arguments39['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments39['encoding'] !== NULL ? $arguments39['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments39['doubleEncode']));

$output0 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments42 = array();
// Rendering Boolean node
// Rendering Array
$array43 = array();
$array43['1'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'itemCount', $renderingContext);
// Rendering Array
$array44 = array();
$array44['1'] = 1;
$arguments42['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array43, $array44);
$arguments42['then'] = NULL;
$arguments42['else'] = NULL;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output46 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments47 = array();
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments49 = array();
$arguments49['key'] = 'tx_yag_general.image';
$arguments49['id'] = NULL;
$arguments49['default'] = NULL;
$arguments49['htmlEscape'] = NULL;
$arguments49['arguments'] = NULL;
$arguments49['extensionName'] = NULL;
$renderChildrenClosure50 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);
};

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments51 = array();
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments53 = array();
$arguments53['key'] = 'tx_yag_general.images';
$arguments53['id'] = NULL;
$arguments53['default'] = NULL;
$arguments53['htmlEscape'] = NULL;
$arguments53['arguments'] = NULL;
$arguments53['extensionName'] = NULL;
$renderChildrenClosure54 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);
};

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);
return $output46;
};
$arguments42['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments55 = array();
$arguments55['key'] = 'tx_yag_general.image';
$arguments55['id'] = NULL;
$arguments55['default'] = NULL;
$arguments55['htmlEscape'] = NULL;
$arguments55['arguments'] = NULL;
$arguments55['extensionName'] = NULL;
$renderChildrenClosure56 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);
};
$arguments42['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments57 = array();
$arguments57['key'] = 'tx_yag_general.images';
$arguments57['id'] = NULL;
$arguments57['default'] = NULL;
$arguments57['htmlEscape'] = NULL;
$arguments57['arguments'] = NULL;
$arguments57['extensionName'] = NULL;
$renderChildrenClosure58 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, $renderChildrenClosure45, $renderingContext);

$output0 .= '
	</div>
		<div class="tx-yag-gallery-albumdescription">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$arguments59 = array();
$arguments59['value'] = NULL;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments61 = array();
$arguments61['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('album'), 'description', $renderingContext);
$arguments61['keepQuotes'] = false;
$arguments61['encoding'] = NULL;
$arguments61['doubleEncode'] = true;
$renderChildrenClosure62 = function() {return NULL;};
$value63 = ($arguments61['value'] !== NULL ? $arguments61['value'] : $renderChildrenClosure62());
return (!is_string($value63) ? $value63 : htmlspecialchars($value63, ($arguments61['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments61['encoding'] !== NULL ? $arguments61['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments61['doubleEncode']));
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output0 .= '
	</div>
</div>';


return $output0;
}


}
#1465042935    18861     