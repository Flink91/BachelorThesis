<?php
class FluidCache_Typo3Forum_Ajax_action_topicListMenu_f7c4d9fca9da19d281e96a8e8bbf336fcf573bfe extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments1 = array();
$arguments1['controller'] = 'Forum';
$arguments1['action'] = 'show';
// Rendering Array
$array2 = array();
$array2['forum'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('topic'), 'forum', $renderingContext);
$arguments1['arguments'] = $array2;
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['pluginName'] = NULL;
$arguments1['pageUid'] = NULL;
$arguments1['pageType'] = 0;
$arguments1['noCache'] = false;
$arguments1['noCacheHash'] = false;
$arguments1['section'] = '';
$arguments1['format'] = '';
$arguments1['linkAccessRestrictedPages'] = false;
$arguments1['additionalParams'] = array (
);
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['addQueryStringMethod'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['name'] = NULL;
$arguments1['rel'] = NULL;
$arguments1['rev'] = NULL;
$arguments1['target'] = NULL;
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output4 = '';

$output4 .= '
            <i class="tx-typo3forum-icon-16-back"></i>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments5 = array();
$arguments5['key'] = 'Button_Back';
$arguments5['id'] = NULL;
$arguments5['default'] = NULL;
$arguments5['htmlEscape'] = NULL;
$arguments5['arguments'] = NULL;
$arguments5['extensionName'] = NULL;
$renderChildrenClosure6 = function() {return NULL;};

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
        ';
return $output4;
};
$viewHelper7 = $self->getViewHelper('$viewHelper7', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper7->setArguments($arguments1);
$viewHelper7->setRenderingContext($renderingContext);
$viewHelper7->setRenderChildrenClosure($renderChildrenClosure3);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper7->initializeArgumentsAndRender();

$output0 .= '
    </li>

    ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Authentication\IfAccessViewHelper
$arguments8 = array();
$arguments8['object'] = $currentVariableContainer->getOrNull('topic');
$arguments8['accessType'] = 'newPost';
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output10 = '';

$output10 .= '
        <li>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments11 = array();
$arguments11['controller'] = 'Post';
$arguments11['action'] = 'new';
// Rendering Array
$array12 = array();
$array12['topic'] = $currentVariableContainer->getOrNull('topic');
$arguments11['arguments'] = $array12;
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['pluginName'] = NULL;
$arguments11['pageUid'] = NULL;
$arguments11['pageType'] = 0;
$arguments11['noCache'] = false;
$arguments11['noCacheHash'] = false;
$arguments11['section'] = '';
$arguments11['format'] = '';
$arguments11['linkAccessRestrictedPages'] = false;
$arguments11['additionalParams'] = array (
);
$arguments11['absolute'] = false;
$arguments11['addQueryString'] = false;
$arguments11['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments11['addQueryStringMethod'] = NULL;
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['name'] = NULL;
$arguments11['rel'] = NULL;
$arguments11['rev'] = NULL;
$arguments11['target'] = NULL;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output14 = '';

$output14 .= '
                <i class="tx-typo3forum-icon-16-post-new"></i>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments15 = array();
$arguments15['key'] = 'Button_Reply';
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
            ';
return $output14;
};
$viewHelper17 = $self->getViewHelper('$viewHelper17', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper17->setArguments($arguments11);
$viewHelper17->setRenderingContext($renderingContext);
$viewHelper17->setRenderChildrenClosure($renderChildrenClosure13);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output10 .= $viewHelper17->initializeArgumentsAndRender();

$output10 .= '
        </li>
    ';
return $output10;
};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Authentication\IfAccessViewHelper');
$viewHelper18->setArguments($arguments8);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Authentication\IfAccessViewHelper

$output0 .= $viewHelper18->initializeArgumentsAndRender();

$output0 .= '

    ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Authentication\IfLoggedInViewHelper
$arguments19 = array();
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output21 = '';

$output21 .= '
        <li>
            ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\User\IfSubscribedViewHelper
$arguments22 = array();
$arguments22['object'] = $currentVariableContainer->getOrNull('topic');
$arguments22['then'] = NULL;
$arguments22['else'] = NULL;
$arguments22['user'] = NULL;
$arguments22['condition'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output24 = '';

$output24 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments25 = array();
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output27 = '';

$output27 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments28 = array();
$arguments28['controller'] = 'User';
$arguments28['action'] = 'subscribe';
// Rendering Array
$array29 = array();
$array29['topic'] = $currentVariableContainer->getOrNull('topic');
$array29['unsubscribe'] = 1;
$arguments28['arguments'] = $array29;
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['extensionName'] = NULL;
$arguments28['pluginName'] = NULL;
$arguments28['pageUid'] = NULL;
$arguments28['pageType'] = 0;
$arguments28['noCache'] = false;
$arguments28['noCacheHash'] = false;
$arguments28['section'] = '';
$arguments28['format'] = '';
$arguments28['linkAccessRestrictedPages'] = false;
$arguments28['additionalParams'] = array (
);
$arguments28['absolute'] = false;
$arguments28['addQueryString'] = false;
$arguments28['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments28['addQueryStringMethod'] = NULL;
$arguments28['class'] = NULL;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['name'] = NULL;
$arguments28['rel'] = NULL;
$arguments28['rev'] = NULL;
$arguments28['target'] = NULL;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
                        <i class="tx-typo3forum-icon-16-unsubscribe"></i>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments32 = array();
$arguments32['key'] = 'Button_Unsubscribe';
$arguments32['id'] = NULL;
$arguments32['default'] = NULL;
$arguments32['htmlEscape'] = NULL;
$arguments32['arguments'] = NULL;
$arguments32['extensionName'] = NULL;
$renderChildrenClosure33 = function() {return NULL;};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
                    ';
return $output31;
};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper34->setArguments($arguments28);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output27 .= $viewHelper34->initializeArgumentsAndRender();

$output27 .= '
                ';
return $output27;
};

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments35 = array();
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output37 = '';

$output37 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments38 = array();
$arguments38['controller'] = 'User';
$arguments38['action'] = 'subscribe';
// Rendering Array
$array39 = array();
$array39['topic'] = $currentVariableContainer->getOrNull('topic');
$arguments38['arguments'] = $array39;
$arguments38['additionalAttributes'] = NULL;
$arguments38['data'] = NULL;
$arguments38['extensionName'] = NULL;
$arguments38['pluginName'] = NULL;
$arguments38['pageUid'] = NULL;
$arguments38['pageType'] = 0;
$arguments38['noCache'] = false;
$arguments38['noCacheHash'] = false;
$arguments38['section'] = '';
$arguments38['format'] = '';
$arguments38['linkAccessRestrictedPages'] = false;
$arguments38['additionalParams'] = array (
);
$arguments38['absolute'] = false;
$arguments38['addQueryString'] = false;
$arguments38['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments38['addQueryStringMethod'] = NULL;
$arguments38['class'] = NULL;
$arguments38['dir'] = NULL;
$arguments38['id'] = NULL;
$arguments38['lang'] = NULL;
$arguments38['style'] = NULL;
$arguments38['title'] = NULL;
$arguments38['accesskey'] = NULL;
$arguments38['tabindex'] = NULL;
$arguments38['onclick'] = NULL;
$arguments38['name'] = NULL;
$arguments38['rel'] = NULL;
$arguments38['rev'] = NULL;
$arguments38['target'] = NULL;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output41 = '';

$output41 .= '
                        <i class="tx-typo3forum-icon-16-subscribe"></i>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments42 = array();
$arguments42['key'] = 'Button_Subscribe';
$arguments42['id'] = NULL;
$arguments42['default'] = NULL;
$arguments42['htmlEscape'] = NULL;
$arguments42['arguments'] = NULL;
$arguments42['extensionName'] = NULL;
$renderChildrenClosure43 = function() {return NULL;};

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
                    ';
return $output41;
};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper44->setArguments($arguments38);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure40);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output37 .= $viewHelper44->initializeArgumentsAndRender();

$output37 .= '
                ';
return $output37;
};

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output24 .= '
            ';
return $output24;
};
$arguments22['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output45 = '';

$output45 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments46 = array();
$arguments46['controller'] = 'User';
$arguments46['action'] = 'subscribe';
// Rendering Array
$array47 = array();
$array47['topic'] = $currentVariableContainer->getOrNull('topic');
$array47['unsubscribe'] = 1;
$arguments46['arguments'] = $array47;
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['extensionName'] = NULL;
$arguments46['pluginName'] = NULL;
$arguments46['pageUid'] = NULL;
$arguments46['pageType'] = 0;
$arguments46['noCache'] = false;
$arguments46['noCacheHash'] = false;
$arguments46['section'] = '';
$arguments46['format'] = '';
$arguments46['linkAccessRestrictedPages'] = false;
$arguments46['additionalParams'] = array (
);
$arguments46['absolute'] = false;
$arguments46['addQueryString'] = false;
$arguments46['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments46['addQueryStringMethod'] = NULL;
$arguments46['class'] = NULL;
$arguments46['dir'] = NULL;
$arguments46['id'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['tabindex'] = NULL;
$arguments46['onclick'] = NULL;
$arguments46['name'] = NULL;
$arguments46['rel'] = NULL;
$arguments46['rev'] = NULL;
$arguments46['target'] = NULL;
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output49 = '';

$output49 .= '
                        <i class="tx-typo3forum-icon-16-unsubscribe"></i>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments50 = array();
$arguments50['key'] = 'Button_Unsubscribe';
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['htmlEscape'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$renderChildrenClosure51 = function() {return NULL;};

$output49 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
                    ';
return $output49;
};
$viewHelper52 = $self->getViewHelper('$viewHelper52', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper52->setArguments($arguments46);
$viewHelper52->setRenderingContext($renderingContext);
$viewHelper52->setRenderChildrenClosure($renderChildrenClosure48);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output45 .= $viewHelper52->initializeArgumentsAndRender();

$output45 .= '
                ';
return $output45;
};
$arguments22['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output53 = '';

$output53 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments54 = array();
$arguments54['controller'] = 'User';
$arguments54['action'] = 'subscribe';
// Rendering Array
$array55 = array();
$array55['topic'] = $currentVariableContainer->getOrNull('topic');
$arguments54['arguments'] = $array55;
$arguments54['additionalAttributes'] = NULL;
$arguments54['data'] = NULL;
$arguments54['extensionName'] = NULL;
$arguments54['pluginName'] = NULL;
$arguments54['pageUid'] = NULL;
$arguments54['pageType'] = 0;
$arguments54['noCache'] = false;
$arguments54['noCacheHash'] = false;
$arguments54['section'] = '';
$arguments54['format'] = '';
$arguments54['linkAccessRestrictedPages'] = false;
$arguments54['additionalParams'] = array (
);
$arguments54['absolute'] = false;
$arguments54['addQueryString'] = false;
$arguments54['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments54['addQueryStringMethod'] = NULL;
$arguments54['class'] = NULL;
$arguments54['dir'] = NULL;
$arguments54['id'] = NULL;
$arguments54['lang'] = NULL;
$arguments54['style'] = NULL;
$arguments54['title'] = NULL;
$arguments54['accesskey'] = NULL;
$arguments54['tabindex'] = NULL;
$arguments54['onclick'] = NULL;
$arguments54['name'] = NULL;
$arguments54['rel'] = NULL;
$arguments54['rev'] = NULL;
$arguments54['target'] = NULL;
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output57 = '';

$output57 .= '
                        <i class="tx-typo3forum-icon-16-subscribe"></i>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments58 = array();
$arguments58['key'] = 'Button_Subscribe';
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['htmlEscape'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$renderChildrenClosure59 = function() {return NULL;};

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '
                    ';
return $output57;
};
$viewHelper60 = $self->getViewHelper('$viewHelper60', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper60->setArguments($arguments54);
$viewHelper60->setRenderingContext($renderingContext);
$viewHelper60->setRenderChildrenClosure($renderChildrenClosure56);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output53 .= $viewHelper60->initializeArgumentsAndRender();

$output53 .= '
                ';
return $output53;
};

$output21 .= Mittwald\Typo3Forum\ViewHelpers\User\IfSubscribedViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
        </li>
    ';
return $output21;
};
$viewHelper61 = $self->getViewHelper('$viewHelper61', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Authentication\IfLoggedInViewHelper');
$viewHelper61->setArguments($arguments19);
$viewHelper61->setRenderingContext($renderingContext);
$viewHelper61->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Authentication\IfLoggedInViewHelper

$output0 .= $viewHelper61->initializeArgumentsAndRender();

$output0 .= '

    ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Authentication\IfAccessViewHelper
$arguments62 = array();
$arguments62['object'] = $currentVariableContainer->getOrNull('topic');
$arguments62['accessType'] = 'moderate';
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output64 = '';

$output64 .= '
        <li class="dropdown dropup">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="tx-typo3forum-icon-16-moderate"></i>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments65 = array();
$arguments65['key'] = 'Button_Moderate';
$arguments65['id'] = NULL;
$arguments65['default'] = NULL;
$arguments65['htmlEscape'] = NULL;
$arguments65['arguments'] = NULL;
$arguments65['extensionName'] = NULL;
$renderChildrenClosure66 = function() {return NULL;};

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output64 .= '
                <b></b>
            </a>
            <ul class="dropdown-menu">
                <li>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments67 = array();
$arguments67['controller'] = 'Moderation';
$arguments67['action'] = 'editTopic';
// Rendering Array
$array68 = array();
$array68['topic'] = $currentVariableContainer->getOrNull('topic');
$arguments67['arguments'] = $array68;
$arguments67['additionalAttributes'] = NULL;
$arguments67['data'] = NULL;
$arguments67['extensionName'] = NULL;
$arguments67['pluginName'] = NULL;
$arguments67['pageUid'] = NULL;
$arguments67['pageType'] = 0;
$arguments67['noCache'] = false;
$arguments67['noCacheHash'] = false;
$arguments67['section'] = '';
$arguments67['format'] = '';
$arguments67['linkAccessRestrictedPages'] = false;
$arguments67['additionalParams'] = array (
);
$arguments67['absolute'] = false;
$arguments67['addQueryString'] = false;
$arguments67['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments67['addQueryStringMethod'] = NULL;
$arguments67['class'] = NULL;
$arguments67['dir'] = NULL;
$arguments67['id'] = NULL;
$arguments67['lang'] = NULL;
$arguments67['style'] = NULL;
$arguments67['title'] = NULL;
$arguments67['accesskey'] = NULL;
$arguments67['tabindex'] = NULL;
$arguments67['onclick'] = NULL;
$arguments67['name'] = NULL;
$arguments67['rel'] = NULL;
$arguments67['rev'] = NULL;
$arguments67['target'] = NULL;
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output70 = '';

$output70 .= '
                        <i class="tx-typo3forum-icon-16-moderate"></i>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments71 = array();
$arguments71['key'] = 'Button_Moderate';
$arguments71['id'] = NULL;
$arguments71['default'] = NULL;
$arguments71['htmlEscape'] = NULL;
$arguments71['arguments'] = NULL;
$arguments71['extensionName'] = NULL;
$renderChildrenClosure72 = function() {return NULL;};

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
                    ';
return $output70;
};
$viewHelper73 = $self->getViewHelper('$viewHelper73', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper73->setArguments($arguments67);
$viewHelper73->setRenderingContext($renderingContext);
$viewHelper73->setRenderChildrenClosure($renderChildrenClosure69);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output64 .= $viewHelper73->initializeArgumentsAndRender();

$output64 .= '
                </li>
                <li></li>
                <li>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments74 = array();
$arguments74['controller'] = 'Moderation';
$arguments74['action'] = 'topicConformDelete';
// Rendering Array
$array75 = array();
$array75['topic'] = $currentVariableContainer->getOrNull('topic');
$arguments74['arguments'] = $array75;
$arguments74['additionalAttributes'] = NULL;
$arguments74['data'] = NULL;
$arguments74['extensionName'] = NULL;
$arguments74['pluginName'] = NULL;
$arguments74['pageUid'] = NULL;
$arguments74['pageType'] = 0;
$arguments74['noCache'] = false;
$arguments74['noCacheHash'] = false;
$arguments74['section'] = '';
$arguments74['format'] = '';
$arguments74['linkAccessRestrictedPages'] = false;
$arguments74['additionalParams'] = array (
);
$arguments74['absolute'] = false;
$arguments74['addQueryString'] = false;
$arguments74['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments74['addQueryStringMethod'] = NULL;
$arguments74['class'] = NULL;
$arguments74['dir'] = NULL;
$arguments74['id'] = NULL;
$arguments74['lang'] = NULL;
$arguments74['style'] = NULL;
$arguments74['title'] = NULL;
$arguments74['accesskey'] = NULL;
$arguments74['tabindex'] = NULL;
$arguments74['onclick'] = NULL;
$arguments74['name'] = NULL;
$arguments74['rel'] = NULL;
$arguments74['rev'] = NULL;
$arguments74['target'] = NULL;
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                        <i class="tx-typo3forum-icon-16-post-delete"></i>
                        Delete Topic
                    ';
};
$viewHelper77 = $self->getViewHelper('$viewHelper77', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper77->setArguments($arguments74);
$viewHelper77->setRenderingContext($renderingContext);
$viewHelper77->setRenderChildrenClosure($renderChildrenClosure76);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output64 .= $viewHelper77->initializeArgumentsAndRender();

$output64 .= '
                </li>
            </ul>
        </li>
    ';
return $output64;
};
$viewHelper78 = $self->getViewHelper('$viewHelper78', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Authentication\IfAccessViewHelper');
$viewHelper78->setArguments($arguments62);
$viewHelper78->setRenderingContext($renderingContext);
$viewHelper78->setRenderChildrenClosure($renderChildrenClosure63);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Authentication\IfAccessViewHelper

$output0 .= $viewHelper78->initializeArgumentsAndRender();

$output0 .= '
</ul>';


return $output0;
}


}
#1468427431    27159     