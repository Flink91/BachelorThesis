<?php
class FluidCache_Typo3Forum_Ajax_action_ForumMenu_d5227b024246725fdaeaf7c8443ae5e54ae94fa5 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

<ul>
    <li>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('forum'), 'parent', $renderingContext));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments4 = array();
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments7 = array();
$arguments7['controller'] = 'Forum';
$arguments7['action'] = 'show';
// Rendering Array
$array8 = array();
$array8['forum'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('forum'), 'parent', $renderingContext);
$arguments7['arguments'] = $array8;
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['pluginName'] = NULL;
$arguments7['pageUid'] = NULL;
$arguments7['pageType'] = 0;
$arguments7['noCache'] = false;
$arguments7['noCacheHash'] = false;
$arguments7['section'] = '';
$arguments7['format'] = '';
$arguments7['linkAccessRestrictedPages'] = false;
$arguments7['additionalParams'] = array (
);
$arguments7['absolute'] = false;
$arguments7['addQueryString'] = false;
$arguments7['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments7['addQueryStringMethod'] = NULL;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['name'] = NULL;
$arguments7['rel'] = NULL;
$arguments7['rev'] = NULL;
$arguments7['target'] = NULL;
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output10 = '';

$output10 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments11 = array();
$arguments11['key'] = 'Button_Back';
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$renderChildrenClosure12 = function() {return NULL;};

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
                ';
return $output10;
};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper13->setArguments($arguments7);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output6 .= $viewHelper13->initializeArgumentsAndRender();

$output6 .= '
            ';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
        ';
return $output3;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output14 = '';

$output14 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments15 = array();
$arguments15['controller'] = 'Forum';
$arguments15['action'] = 'show';
// Rendering Array
$array16 = array();
$array16['forum'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('forum'), 'parent', $renderingContext);
$arguments15['arguments'] = $array16;
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['pluginName'] = NULL;
$arguments15['pageUid'] = NULL;
$arguments15['pageType'] = 0;
$arguments15['noCache'] = false;
$arguments15['noCacheHash'] = false;
$arguments15['section'] = '';
$arguments15['format'] = '';
$arguments15['linkAccessRestrictedPages'] = false;
$arguments15['additionalParams'] = array (
);
$arguments15['absolute'] = false;
$arguments15['addQueryString'] = false;
$arguments15['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments15['addQueryStringMethod'] = NULL;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['name'] = NULL;
$arguments15['rel'] = NULL;
$arguments15['rev'] = NULL;
$arguments15['target'] = NULL;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output18 = '';

$output18 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments19 = array();
$arguments19['key'] = 'Button_Back';
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['htmlEscape'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$renderChildrenClosure20 = function() {return NULL;};

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
                ';
return $output18;
};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper21->setArguments($arguments15);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output14 .= $viewHelper21->initializeArgumentsAndRender();

$output14 .= '
            ';
return $output14;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    </li>

    ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Authentication\IfAccessViewHelper
$arguments22 = array();
$arguments22['object'] = $currentVariableContainer->getOrNull('forum');
$arguments22['accessType'] = 'newTopic';
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output24 = '';

$output24 .= '
        <li>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments25 = array();
$arguments25['controller'] = 'Topic';
$arguments25['action'] = 'new';
// Rendering Array
$array26 = array();
$array26['forum'] = $currentVariableContainer->getOrNull('forum');
$arguments25['arguments'] = $array26;
$arguments25['additionalAttributes'] = NULL;
$arguments25['data'] = NULL;
$arguments25['extensionName'] = NULL;
$arguments25['pluginName'] = NULL;
$arguments25['pageUid'] = NULL;
$arguments25['pageType'] = 0;
$arguments25['noCache'] = false;
$arguments25['noCacheHash'] = false;
$arguments25['section'] = '';
$arguments25['format'] = '';
$arguments25['linkAccessRestrictedPages'] = false;
$arguments25['additionalParams'] = array (
);
$arguments25['absolute'] = false;
$arguments25['addQueryString'] = false;
$arguments25['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments25['addQueryStringMethod'] = NULL;
$arguments25['class'] = NULL;
$arguments25['dir'] = NULL;
$arguments25['id'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['title'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['tabindex'] = NULL;
$arguments25['onclick'] = NULL;
$arguments25['name'] = NULL;
$arguments25['rel'] = NULL;
$arguments25['rev'] = NULL;
$arguments25['target'] = NULL;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output28 = '';

$output28 .= '
                <i class="tx-typo3forum-icon-16-topic-new"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments29 = array();
$arguments29['key'] = 'Button_Topic_New';
$arguments29['id'] = NULL;
$arguments29['default'] = NULL;
$arguments29['htmlEscape'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['extensionName'] = NULL;
$renderChildrenClosure30 = function() {return NULL;};

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
            ';
return $output28;
};
$viewHelper31 = $self->getViewHelper('$viewHelper31', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper31->setArguments($arguments25);
$viewHelper31->setRenderingContext($renderingContext);
$viewHelper31->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output24 .= $viewHelper31->initializeArgumentsAndRender();

$output24 .= '
        </li>
    ';
return $output24;
};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Authentication\IfAccessViewHelper');
$viewHelper32->setArguments($arguments22);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Authentication\IfAccessViewHelper

$output0 .= $viewHelper32->initializeArgumentsAndRender();

$output0 .= '

    ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Authentication\IfLoggedInViewHelper
$arguments33 = array();
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output35 = '';

$output35 .= '
        <li>
            ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\User\IfSubscribedViewHelper
$arguments36 = array();
$arguments36['object'] = $currentVariableContainer->getOrNull('forum');
$arguments36['then'] = NULL;
$arguments36['else'] = NULL;
$arguments36['user'] = NULL;
$arguments36['condition'] = NULL;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments39 = array();
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output41 = '';

$output41 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments42 = array();
$arguments42['controller'] = 'User';
$arguments42['action'] = 'subscribe';
// Rendering Array
$array43 = array();
$array43['forum'] = $currentVariableContainer->getOrNull('forum');
$array43['unsubscribe'] = 1;
$arguments42['arguments'] = $array43;
$arguments42['additionalAttributes'] = NULL;
$arguments42['data'] = NULL;
$arguments42['extensionName'] = NULL;
$arguments42['pluginName'] = NULL;
$arguments42['pageUid'] = NULL;
$arguments42['pageType'] = 0;
$arguments42['noCache'] = false;
$arguments42['noCacheHash'] = false;
$arguments42['section'] = '';
$arguments42['format'] = '';
$arguments42['linkAccessRestrictedPages'] = false;
$arguments42['additionalParams'] = array (
);
$arguments42['absolute'] = false;
$arguments42['addQueryString'] = false;
$arguments42['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments42['addQueryStringMethod'] = NULL;
$arguments42['class'] = NULL;
$arguments42['dir'] = NULL;
$arguments42['id'] = NULL;
$arguments42['lang'] = NULL;
$arguments42['style'] = NULL;
$arguments42['title'] = NULL;
$arguments42['accesskey'] = NULL;
$arguments42['tabindex'] = NULL;
$arguments42['onclick'] = NULL;
$arguments42['name'] = NULL;
$arguments42['rel'] = NULL;
$arguments42['rev'] = NULL;
$arguments42['target'] = NULL;
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output45 = '';

$output45 .= '
                        <i class="tx-typo3forum-icon-16-unsubscribe"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments46 = array();
$arguments46['key'] = 'Button_Unsubscribe';
$arguments46['id'] = NULL;
$arguments46['default'] = NULL;
$arguments46['htmlEscape'] = NULL;
$arguments46['arguments'] = NULL;
$arguments46['extensionName'] = NULL;
$renderChildrenClosure47 = function() {return NULL;};

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
                    ';
return $output45;
};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper48->setArguments($arguments42);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure44);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output41 .= $viewHelper48->initializeArgumentsAndRender();

$output41 .= '
                ';
return $output41;
};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments49 = array();
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output51 = '';

$output51 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments52 = array();
$arguments52['controller'] = 'User';
$arguments52['action'] = 'subscribe';
// Rendering Array
$array53 = array();
$array53['forum'] = $currentVariableContainer->getOrNull('forum');
$arguments52['arguments'] = $array53;
$arguments52['additionalAttributes'] = NULL;
$arguments52['data'] = NULL;
$arguments52['extensionName'] = NULL;
$arguments52['pluginName'] = NULL;
$arguments52['pageUid'] = NULL;
$arguments52['pageType'] = 0;
$arguments52['noCache'] = false;
$arguments52['noCacheHash'] = false;
$arguments52['section'] = '';
$arguments52['format'] = '';
$arguments52['linkAccessRestrictedPages'] = false;
$arguments52['additionalParams'] = array (
);
$arguments52['absolute'] = false;
$arguments52['addQueryString'] = false;
$arguments52['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments52['addQueryStringMethod'] = NULL;
$arguments52['class'] = NULL;
$arguments52['dir'] = NULL;
$arguments52['id'] = NULL;
$arguments52['lang'] = NULL;
$arguments52['style'] = NULL;
$arguments52['title'] = NULL;
$arguments52['accesskey'] = NULL;
$arguments52['tabindex'] = NULL;
$arguments52['onclick'] = NULL;
$arguments52['name'] = NULL;
$arguments52['rel'] = NULL;
$arguments52['rev'] = NULL;
$arguments52['target'] = NULL;
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output55 = '';

$output55 .= '
                        <i class="tx-typo3forum-icon-16-subscribe"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments56 = array();
$arguments56['key'] = 'Button_Subscribe';
$arguments56['id'] = NULL;
$arguments56['default'] = NULL;
$arguments56['htmlEscape'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['extensionName'] = NULL;
$renderChildrenClosure57 = function() {return NULL;};

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
                    ';
return $output55;
};
$viewHelper58 = $self->getViewHelper('$viewHelper58', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper58->setArguments($arguments52);
$viewHelper58->setRenderingContext($renderingContext);
$viewHelper58->setRenderChildrenClosure($renderChildrenClosure54);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output51 .= $viewHelper58->initializeArgumentsAndRender();

$output51 .= '
                ';
return $output51;
};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output38 .= '
            ';
return $output38;
};
$arguments36['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output59 = '';

$output59 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments60 = array();
$arguments60['controller'] = 'User';
$arguments60['action'] = 'subscribe';
// Rendering Array
$array61 = array();
$array61['forum'] = $currentVariableContainer->getOrNull('forum');
$array61['unsubscribe'] = 1;
$arguments60['arguments'] = $array61;
$arguments60['additionalAttributes'] = NULL;
$arguments60['data'] = NULL;
$arguments60['extensionName'] = NULL;
$arguments60['pluginName'] = NULL;
$arguments60['pageUid'] = NULL;
$arguments60['pageType'] = 0;
$arguments60['noCache'] = false;
$arguments60['noCacheHash'] = false;
$arguments60['section'] = '';
$arguments60['format'] = '';
$arguments60['linkAccessRestrictedPages'] = false;
$arguments60['additionalParams'] = array (
);
$arguments60['absolute'] = false;
$arguments60['addQueryString'] = false;
$arguments60['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments60['addQueryStringMethod'] = NULL;
$arguments60['class'] = NULL;
$arguments60['dir'] = NULL;
$arguments60['id'] = NULL;
$arguments60['lang'] = NULL;
$arguments60['style'] = NULL;
$arguments60['title'] = NULL;
$arguments60['accesskey'] = NULL;
$arguments60['tabindex'] = NULL;
$arguments60['onclick'] = NULL;
$arguments60['name'] = NULL;
$arguments60['rel'] = NULL;
$arguments60['rev'] = NULL;
$arguments60['target'] = NULL;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output63 = '';

$output63 .= '
                        <i class="tx-typo3forum-icon-16-unsubscribe"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments64 = array();
$arguments64['key'] = 'Button_Unsubscribe';
$arguments64['id'] = NULL;
$arguments64['default'] = NULL;
$arguments64['htmlEscape'] = NULL;
$arguments64['arguments'] = NULL;
$arguments64['extensionName'] = NULL;
$renderChildrenClosure65 = function() {return NULL;};

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
                    ';
return $output63;
};
$viewHelper66 = $self->getViewHelper('$viewHelper66', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper66->setArguments($arguments60);
$viewHelper66->setRenderingContext($renderingContext);
$viewHelper66->setRenderChildrenClosure($renderChildrenClosure62);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output59 .= $viewHelper66->initializeArgumentsAndRender();

$output59 .= '
                ';
return $output59;
};
$arguments36['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output67 = '';

$output67 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments68 = array();
$arguments68['controller'] = 'User';
$arguments68['action'] = 'subscribe';
// Rendering Array
$array69 = array();
$array69['forum'] = $currentVariableContainer->getOrNull('forum');
$arguments68['arguments'] = $array69;
$arguments68['additionalAttributes'] = NULL;
$arguments68['data'] = NULL;
$arguments68['extensionName'] = NULL;
$arguments68['pluginName'] = NULL;
$arguments68['pageUid'] = NULL;
$arguments68['pageType'] = 0;
$arguments68['noCache'] = false;
$arguments68['noCacheHash'] = false;
$arguments68['section'] = '';
$arguments68['format'] = '';
$arguments68['linkAccessRestrictedPages'] = false;
$arguments68['additionalParams'] = array (
);
$arguments68['absolute'] = false;
$arguments68['addQueryString'] = false;
$arguments68['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments68['addQueryStringMethod'] = NULL;
$arguments68['class'] = NULL;
$arguments68['dir'] = NULL;
$arguments68['id'] = NULL;
$arguments68['lang'] = NULL;
$arguments68['style'] = NULL;
$arguments68['title'] = NULL;
$arguments68['accesskey'] = NULL;
$arguments68['tabindex'] = NULL;
$arguments68['onclick'] = NULL;
$arguments68['name'] = NULL;
$arguments68['rel'] = NULL;
$arguments68['rev'] = NULL;
$arguments68['target'] = NULL;
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output71 = '';

$output71 .= '
                        <i class="tx-typo3forum-icon-16-subscribe"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments72 = array();
$arguments72['key'] = 'Button_Subscribe';
$arguments72['id'] = NULL;
$arguments72['default'] = NULL;
$arguments72['htmlEscape'] = NULL;
$arguments72['arguments'] = NULL;
$arguments72['extensionName'] = NULL;
$renderChildrenClosure73 = function() {return NULL;};

$output71 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '
                    ';
return $output71;
};
$viewHelper74 = $self->getViewHelper('$viewHelper74', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper74->setArguments($arguments68);
$viewHelper74->setRenderingContext($renderingContext);
$viewHelper74->setRenderChildrenClosure($renderChildrenClosure70);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output67 .= $viewHelper74->initializeArgumentsAndRender();

$output67 .= '
                ';
return $output67;
};

$output35 .= Mittwald\Typo3Forum\ViewHelpers\User\IfSubscribedViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
        </li>
    ';
return $output35;
};
$viewHelper75 = $self->getViewHelper('$viewHelper75', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Authentication\IfLoggedInViewHelper');
$viewHelper75->setArguments($arguments33);
$viewHelper75->setRenderingContext($renderingContext);
$viewHelper75->setRenderChildrenClosure($renderChildrenClosure34);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Authentication\IfLoggedInViewHelper

$output0 .= $viewHelper75->initializeArgumentsAndRender();

$output0 .= '
</ul>';


return $output0;
}


}
#1465043894    24483     