<?php
class FluidCache_News_Administration_layout_Backend_Default_7e57015dcb7af756fbeab9bf043192db273dc912 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

<div class="news-administration">
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\IncludeFileViewHelper
$arguments1 = array();
$arguments1['path'] = '../typo3conf/ext/news/Resources/Public/Css/administration.css';
$arguments1['compress'] = false;
$renderChildrenClosure2 = function() {return NULL;};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'GeorgRinger\News\ViewHelpers\IncludeFileViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper GeorgRinger\News\ViewHelpers\IncludeFileViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments4 = array();
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['renderMode'] = NULL;
$arguments4['as'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['queueIdentifier'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output0 .= $viewHelper6->initializeArgumentsAndRender();

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments7 = array();
$arguments7['section'] = 'content';
$arguments7['partial'] = NULL;
$arguments7['arguments'] = array (
);
$arguments7['optional'] = false;
$renderChildrenClosure8 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
</div>
';


return $output0;
}


}
#1460988684    3046      