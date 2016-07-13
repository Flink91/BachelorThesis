<?php
class FluidCache_Typo3Forum_Forum_partial_Topic_List_88e3f7e2d5e2306f1a57122026e2229da53bcd40 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section topicListItem
 */
public function section_29cbc880a1fc82aed9592ad0e8939b797128a2be(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
    <tr>
        ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\IfInstanceOfViewHelper
$arguments1 = array();
$arguments1['object'] = $currentVariableContainer->getOrNull('topic');
$arguments1['className'] = '\\Mittwald\\Typo3Forum\\Domain\\Model\\Forum\\ShadowTopic';
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = NULL;
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments7 = array();
$arguments7['section'] = 'shadowTopic';
// Rendering Array
$array8 = array();
$array8['topic'] = $currentVariableContainer->getOrNull('topic');
$arguments7['arguments'] = $array8;
$arguments7['partial'] = NULL;
$arguments7['optional'] = false;
$renderChildrenClosure9 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments7, $renderChildrenClosure9, $renderingContext);

$output6 .= '
            ';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments10 = array();
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output12 = '';

$output12 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments13 = array();
$arguments13['section'] = 'regularTopic';
// Rendering Array
$array14 = array();
$array14['topic'] = $currentVariableContainer->getOrNull('topic');
$arguments13['arguments'] = $array14;
$arguments13['partial'] = NULL;
$arguments13['optional'] = false;
$renderChildrenClosure15 = function() {return NULL;};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments13, $renderChildrenClosure15, $renderingContext);

$output12 .= '
            ';
return $output12;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output3 .= '
        ';
return $output3;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output16 = '';

$output16 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments17 = array();
$arguments17['section'] = 'shadowTopic';
// Rendering Array
$array18 = array();
$array18['topic'] = $currentVariableContainer->getOrNull('topic');
$arguments17['arguments'] = $array18;
$arguments17['partial'] = NULL;
$arguments17['optional'] = false;
$renderChildrenClosure19 = function() {return NULL;};

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments17, $renderChildrenClosure19, $renderingContext);

$output16 .= '
            ';
return $output16;
};
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output20 = '';

$output20 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments21 = array();
$arguments21['section'] = 'regularTopic';
// Rendering Array
$array22 = array();
$array22['topic'] = $currentVariableContainer->getOrNull('topic');
$arguments21['arguments'] = $array22;
$arguments21['partial'] = NULL;
$arguments21['optional'] = false;
$renderChildrenClosure23 = function() {return NULL;};

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments21, $renderChildrenClosure23, $renderingContext);

$output20 .= '
            ';
return $output20;
};

$output0 .= Mittwald\Typo3Forum\ViewHelpers\IfInstanceOfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    </tr>
';


return $output0;
}
/**
 * section regularTopic
 */
public function section_6c6939b2f8bbab696401cb6fdc32732bd117fcc1(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output24 = '';

$output24 .= '
    <td style="width:1px;">
        ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Forum\TopicIconViewHelper
$arguments25 = array();
$arguments25['topic'] = $currentVariableContainer->getOrNull('topic');
$arguments25['width'] = '32';
$arguments25['important'] = 15;
$renderChildrenClosure26 = function() {return NULL;};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Forum\TopicIconViewHelper');
$viewHelper27->setArguments($arguments25);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Forum\TopicIconViewHelper

$output24 .= $viewHelper27->initializeArgumentsAndRender();

$output24 .= '
    </td>
    <td>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments28 = array();
$arguments28['controller'] = 'Topic';
$arguments28['action'] = 'show';
// Rendering Array
$array29 = array();
$array29['topic'] = $currentVariableContainer->getOrNull('topic');
$arguments28['arguments'] = $array29;
$arguments28['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'pids.Forum', $renderingContext);
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['extensionName'] = NULL;
$arguments28['pluginName'] = NULL;
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
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments32 = array();
$arguments32['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('topic'), 'subject', $renderingContext);
$arguments32['keepQuotes'] = false;
$arguments32['encoding'] = NULL;
$arguments32['doubleEncode'] = true;
$renderChildrenClosure33 = function() {return NULL;};
$value34 = ($arguments32['value'] !== NULL ? $arguments32['value'] : $renderChildrenClosure33());

$output31 .= (!is_string($value34) ? $value34 : htmlspecialchars($value34, ($arguments32['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments32['encoding'] !== NULL ? $arguments32['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments32['doubleEncode']));

$output31 .= '
        ';
return $output31;
};
$viewHelper35 = $self->getViewHelper('$viewHelper35', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper35->setArguments($arguments28);
$viewHelper35->setRenderingContext($renderingContext);
$viewHelper35->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output24 .= $viewHelper35->initializeArgumentsAndRender();

$output24 .= '
    </td>
    <td>
        ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\User\LinkViewHelper
$arguments36 = array();
$arguments36['user'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('topic'), 'author', $renderingContext);
$arguments36['showOnlineStatus'] = true;
$arguments36['showOnline'] = false;
$arguments36['class'] = NULL;
$arguments36['style'] = NULL;
$renderChildrenClosure37 = function() {return NULL;};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\User\LinkViewHelper');
$viewHelper38->setArguments($arguments36);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\User\LinkViewHelper

$output24 .= $viewHelper38->initializeArgumentsAndRender();

$output24 .= '
    </td>
    <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments39 = array();
$arguments39['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('topic'), 'replyCount', $renderingContext);
$arguments39['keepQuotes'] = false;
$arguments39['encoding'] = NULL;
$arguments39['doubleEncode'] = true;
$renderChildrenClosure40 = function() {return NULL;};
$value41 = ($arguments39['value'] !== NULL ? $arguments39['value'] : $renderChildrenClosure40());

$output24 .= (!is_string($value41) ? $value41 : htmlspecialchars($value41, ($arguments39['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments39['encoding'] !== NULL ? $arguments39['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments39['doubleEncode']));

$output24 .= '</td>
    <td>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments42 = array();
$arguments42['partial'] = 'Post/Summary';
// Rendering Array
$array43 = array();
$array43['post'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('topic'), 'lastPost', $renderingContext);
$arguments42['arguments'] = $array43;
$arguments42['section'] = NULL;
$arguments42['optional'] = false;
$renderChildrenClosure44 = function() {return NULL;};

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments42, $renderChildrenClosure44, $renderingContext);

$output24 .= '
    </td>
';


return $output24;
}
/**
 * section shadowTopic
 */
public function section_a55e7fc5d48ac586a880d5c5625dd3247aefb639(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output45 = '';

$output45 .= '
    <td style="width:1px;">
        ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Forum\TopicIconViewHelper
$arguments46 = array();
$arguments46['topic'] = $currentVariableContainer->getOrNull('topic');
$arguments46['width'] = '32';
$arguments46['important'] = 15;
$renderChildrenClosure47 = function() {return NULL;};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Forum\TopicIconViewHelper');
$viewHelper48->setArguments($arguments46);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Forum\TopicIconViewHelper

$output45 .= $viewHelper48->initializeArgumentsAndRender();

$output45 .= '
    </td>
    <td>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments49 = array();
$arguments49['key'] = 'Forum_Show_Topic_Moved';
$arguments49['id'] = NULL;
$arguments49['default'] = NULL;
$arguments49['htmlEscape'] = NULL;
$arguments49['arguments'] = NULL;
$arguments49['extensionName'] = NULL;
$renderChildrenClosure50 = function() {return NULL;};

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output45 .= '
        :
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments51 = array();
$arguments51['controller'] = 'Topic';
$arguments51['action'] = 'show';
// Rendering Array
$array52 = array();
$array52['topic'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('topic'), 'target', $renderingContext);
$arguments51['arguments'] = $array52;
$arguments51['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'pids.Forum', $renderingContext);
$arguments51['additionalAttributes'] = NULL;
$arguments51['data'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['pluginName'] = NULL;
$arguments51['pageType'] = 0;
$arguments51['noCache'] = false;
$arguments51['noCacheHash'] = false;
$arguments51['section'] = '';
$arguments51['format'] = '';
$arguments51['linkAccessRestrictedPages'] = false;
$arguments51['additionalParams'] = array (
);
$arguments51['absolute'] = false;
$arguments51['addQueryString'] = false;
$arguments51['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments51['addQueryStringMethod'] = NULL;
$arguments51['class'] = NULL;
$arguments51['dir'] = NULL;
$arguments51['id'] = NULL;
$arguments51['lang'] = NULL;
$arguments51['style'] = NULL;
$arguments51['title'] = NULL;
$arguments51['accesskey'] = NULL;
$arguments51['tabindex'] = NULL;
$arguments51['onclick'] = NULL;
$arguments51['name'] = NULL;
$arguments51['rel'] = NULL;
$arguments51['rev'] = NULL;
$arguments51['target'] = NULL;
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output54 = '';

$output54 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments55 = array();
$arguments55['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('topic'), 'target.subject', $renderingContext);
$arguments55['keepQuotes'] = false;
$arguments55['encoding'] = NULL;
$arguments55['doubleEncode'] = true;
$renderChildrenClosure56 = function() {return NULL;};
$value57 = ($arguments55['value'] !== NULL ? $arguments55['value'] : $renderChildrenClosure56());

$output54 .= (!is_string($value57) ? $value57 : htmlspecialchars($value57, ($arguments55['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments55['encoding'] !== NULL ? $arguments55['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments55['doubleEncode']));

$output54 .= '
        ';
return $output54;
};
$viewHelper58 = $self->getViewHelper('$viewHelper58', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper58->setArguments($arguments51);
$viewHelper58->setRenderingContext($renderingContext);
$viewHelper58->setRenderChildrenClosure($renderChildrenClosure53);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output45 .= $viewHelper58->initializeArgumentsAndRender();

$output45 .= '
    </td>
    <td colspan="3" align="center">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments59 = array();
$arguments59['key'] = 'Forum_Show_Topic_Moved';
$arguments59['id'] = NULL;
$arguments59['default'] = NULL;
$arguments59['htmlEscape'] = NULL;
$arguments59['arguments'] = NULL;
$arguments59['extensionName'] = NULL;
$renderChildrenClosure60 = function() {return NULL;};

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output45 .= '
    </td>
';


return $output45;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output61 = '';

$output61 .= '

<table>
    <colgroup>
        <col width="32"/>
        <col/>
        <col/>
        <col width="5%"/>
        <col width="35%"/>
    </colgroup>
    <thead>
    <tr>
        <th></th>
        <th>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments62 = array();
$arguments62['key'] = 'Forum_Show_Topic_Subject';
$arguments62['id'] = NULL;
$arguments62['default'] = NULL;
$arguments62['htmlEscape'] = NULL;
$arguments62['arguments'] = NULL;
$arguments62['extensionName'] = NULL;
$renderChildrenClosure63 = function() {return NULL;};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
        </th>
        <th>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments64 = array();
$arguments64['key'] = 'Forum_Show_Topic_Author';
$arguments64['id'] = NULL;
$arguments64['default'] = NULL;
$arguments64['htmlEscape'] = NULL;
$arguments64['arguments'] = NULL;
$arguments64['extensionName'] = NULL;
$renderChildrenClosure65 = function() {return NULL;};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output61 .= '
        </th>
        <th>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments66 = array();
$arguments66['key'] = 'Forum_Show_Topic_Posts';
$arguments66['id'] = NULL;
$arguments66['default'] = NULL;
$arguments66['htmlEscape'] = NULL;
$arguments66['arguments'] = NULL;
$arguments66['extensionName'] = NULL;
$renderChildrenClosure67 = function() {return NULL;};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output61 .= '
        </th>
        <th>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments68 = array();
$arguments68['key'] = 'Forum_Show_Topic_LastPost';
$arguments68['id'] = NULL;
$arguments68['default'] = NULL;
$arguments68['htmlEscape'] = NULL;
$arguments68['arguments'] = NULL;
$arguments68['extensionName'] = NULL;
$renderChildrenClosure69 = function() {return NULL;};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output61 .= '
        </th>
    </tr>
    </thead>
    <tbody>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments70 = array();
// Rendering Boolean node
$arguments70['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('topics'));
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output72 = '';

$output72 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments73 = array();
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output75 = '';

$output75 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments76 = array();
$arguments76['each'] = $currentVariableContainer->getOrNull('topics');
$arguments76['as'] = 'topic';
$arguments76['key'] = '';
$arguments76['reverse'] = false;
$arguments76['iteration'] = NULL;
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output78 = '';

$output78 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments79 = array();
$arguments79['section'] = 'topicListItem';
// Rendering Array
$array80 = array();
$array80['topic'] = $currentVariableContainer->getOrNull('topic');
$arguments79['arguments'] = $array80;
$arguments79['partial'] = NULL;
$arguments79['optional'] = false;
$renderChildrenClosure81 = function() {return NULL;};

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments79, $renderChildrenClosure81, $renderingContext);

$output78 .= '
            ';
return $output78;
};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
        ';
return $output75;
};

$output72 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output72 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments82 = array();
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output84 = '';

$output84 .= '
            <tr>
                <td colspan="5">
                    <div>
                        <strong>TRANS Nothing here!</strong>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments85 = array();
$arguments85['key'] = 'Forum_Show_Empty';
$arguments85['id'] = NULL;
$arguments85['default'] = NULL;
$arguments85['htmlEscape'] = NULL;
$arguments85['arguments'] = NULL;
$arguments85['extensionName'] = NULL;
$renderChildrenClosure86 = function() {return NULL;};

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
                    </div>
                </td>
            </tr>
        ';
return $output84;
};

$output72 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output72 .= '
    ';
return $output72;
};
$arguments70['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output87 = '';

$output87 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments88 = array();
$arguments88['each'] = $currentVariableContainer->getOrNull('topics');
$arguments88['as'] = 'topic';
$arguments88['key'] = '';
$arguments88['reverse'] = false;
$arguments88['iteration'] = NULL;
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output90 = '';

$output90 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments91 = array();
$arguments91['section'] = 'topicListItem';
// Rendering Array
$array92 = array();
$array92['topic'] = $currentVariableContainer->getOrNull('topic');
$arguments91['arguments'] = $array92;
$arguments91['partial'] = NULL;
$arguments91['optional'] = false;
$renderChildrenClosure93 = function() {return NULL;};

$output90 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments91, $renderChildrenClosure93, $renderingContext);

$output90 .= '
            ';
return $output90;
};

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
        ';
return $output87;
};
$arguments70['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output94 = '';

$output94 .= '
            <tr>
                <td colspan="5">
                    <div>
                        <strong>TRANS Nothing here!</strong>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments95 = array();
$arguments95['key'] = 'Forum_Show_Empty';
$arguments95['id'] = NULL;
$arguments95['default'] = NULL;
$arguments95['htmlEscape'] = NULL;
$arguments95['arguments'] = NULL;
$arguments95['extensionName'] = NULL;
$renderChildrenClosure96 = function() {return NULL;};

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
                    </div>
                </td>
            </tr>
        ';
return $output94;
};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output61 .= '
    </tbody>
</table>

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments97 = array();
$arguments97['name'] = 'topicListItem';
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output99 = '';

$output99 .= '
    <tr>
        ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\IfInstanceOfViewHelper
$arguments100 = array();
$arguments100['object'] = $currentVariableContainer->getOrNull('topic');
$arguments100['className'] = '\\Mittwald\\Typo3Forum\\Domain\\Model\\Forum\\ShadowTopic';
$arguments100['then'] = NULL;
$arguments100['else'] = NULL;
$arguments100['condition'] = NULL;
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output102 = '';

$output102 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments103 = array();
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output105 = '';

$output105 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments106 = array();
$arguments106['section'] = 'shadowTopic';
// Rendering Array
$array107 = array();
$array107['topic'] = $currentVariableContainer->getOrNull('topic');
$arguments106['arguments'] = $array107;
$arguments106['partial'] = NULL;
$arguments106['optional'] = false;
$renderChildrenClosure108 = function() {return NULL;};

$output105 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments106, $renderChildrenClosure108, $renderingContext);

$output105 .= '
            ';
return $output105;
};

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output102 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments109 = array();
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output111 = '';

$output111 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments112 = array();
$arguments112['section'] = 'regularTopic';
// Rendering Array
$array113 = array();
$array113['topic'] = $currentVariableContainer->getOrNull('topic');
$arguments112['arguments'] = $array113;
$arguments112['partial'] = NULL;
$arguments112['optional'] = false;
$renderChildrenClosure114 = function() {return NULL;};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments112, $renderChildrenClosure114, $renderingContext);

$output111 .= '
            ';
return $output111;
};

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output102 .= '
        ';
return $output102;
};
$arguments100['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output115 = '';

$output115 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments116 = array();
$arguments116['section'] = 'shadowTopic';
// Rendering Array
$array117 = array();
$array117['topic'] = $currentVariableContainer->getOrNull('topic');
$arguments116['arguments'] = $array117;
$arguments116['partial'] = NULL;
$arguments116['optional'] = false;
$renderChildrenClosure118 = function() {return NULL;};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments116, $renderChildrenClosure118, $renderingContext);

$output115 .= '
            ';
return $output115;
};
$arguments100['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output119 = '';

$output119 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments120 = array();
$arguments120['section'] = 'regularTopic';
// Rendering Array
$array121 = array();
$array121['topic'] = $currentVariableContainer->getOrNull('topic');
$arguments120['arguments'] = $array121;
$arguments120['partial'] = NULL;
$arguments120['optional'] = false;
$renderChildrenClosure122 = function() {return NULL;};

$output119 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments120, $renderChildrenClosure122, $renderingContext);

$output119 .= '
            ';
return $output119;
};

$output99 .= Mittwald\Typo3Forum\ViewHelpers\IfInstanceOfViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '
    </tr>
';
return $output99;
};

$output61 .= '';

$output61 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments123 = array();
$arguments123['name'] = 'regularTopic';
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output125 = '';

$output125 .= '
    <td style="width:1px;">
        ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Forum\TopicIconViewHelper
$arguments126 = array();
$arguments126['topic'] = $currentVariableContainer->getOrNull('topic');
$arguments126['width'] = '32';
$arguments126['important'] = 15;
$renderChildrenClosure127 = function() {return NULL;};
$viewHelper128 = $self->getViewHelper('$viewHelper128', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Forum\TopicIconViewHelper');
$viewHelper128->setArguments($arguments126);
$viewHelper128->setRenderingContext($renderingContext);
$viewHelper128->setRenderChildrenClosure($renderChildrenClosure127);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Forum\TopicIconViewHelper

$output125 .= $viewHelper128->initializeArgumentsAndRender();

$output125 .= '
    </td>
    <td>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments129 = array();
$arguments129['controller'] = 'Topic';
$arguments129['action'] = 'show';
// Rendering Array
$array130 = array();
$array130['topic'] = $currentVariableContainer->getOrNull('topic');
$arguments129['arguments'] = $array130;
$arguments129['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'pids.Forum', $renderingContext);
$arguments129['additionalAttributes'] = NULL;
$arguments129['data'] = NULL;
$arguments129['extensionName'] = NULL;
$arguments129['pluginName'] = NULL;
$arguments129['pageType'] = 0;
$arguments129['noCache'] = false;
$arguments129['noCacheHash'] = false;
$arguments129['section'] = '';
$arguments129['format'] = '';
$arguments129['linkAccessRestrictedPages'] = false;
$arguments129['additionalParams'] = array (
);
$arguments129['absolute'] = false;
$arguments129['addQueryString'] = false;
$arguments129['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments129['addQueryStringMethod'] = NULL;
$arguments129['class'] = NULL;
$arguments129['dir'] = NULL;
$arguments129['id'] = NULL;
$arguments129['lang'] = NULL;
$arguments129['style'] = NULL;
$arguments129['title'] = NULL;
$arguments129['accesskey'] = NULL;
$arguments129['tabindex'] = NULL;
$arguments129['onclick'] = NULL;
$arguments129['name'] = NULL;
$arguments129['rel'] = NULL;
$arguments129['rev'] = NULL;
$arguments129['target'] = NULL;
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output132 = '';

$output132 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments133 = array();
$arguments133['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('topic'), 'subject', $renderingContext);
$arguments133['keepQuotes'] = false;
$arguments133['encoding'] = NULL;
$arguments133['doubleEncode'] = true;
$renderChildrenClosure134 = function() {return NULL;};
$value135 = ($arguments133['value'] !== NULL ? $arguments133['value'] : $renderChildrenClosure134());

$output132 .= (!is_string($value135) ? $value135 : htmlspecialchars($value135, ($arguments133['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments133['encoding'] !== NULL ? $arguments133['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments133['doubleEncode']));

$output132 .= '
        ';
return $output132;
};
$viewHelper136 = $self->getViewHelper('$viewHelper136', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper136->setArguments($arguments129);
$viewHelper136->setRenderingContext($renderingContext);
$viewHelper136->setRenderChildrenClosure($renderChildrenClosure131);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output125 .= $viewHelper136->initializeArgumentsAndRender();

$output125 .= '
    </td>
    <td>
        ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\User\LinkViewHelper
$arguments137 = array();
$arguments137['user'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('topic'), 'author', $renderingContext);
$arguments137['showOnlineStatus'] = true;
$arguments137['showOnline'] = false;
$arguments137['class'] = NULL;
$arguments137['style'] = NULL;
$renderChildrenClosure138 = function() {return NULL;};
$viewHelper139 = $self->getViewHelper('$viewHelper139', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\User\LinkViewHelper');
$viewHelper139->setArguments($arguments137);
$viewHelper139->setRenderingContext($renderingContext);
$viewHelper139->setRenderChildrenClosure($renderChildrenClosure138);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\User\LinkViewHelper

$output125 .= $viewHelper139->initializeArgumentsAndRender();

$output125 .= '
    </td>
    <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments140 = array();
$arguments140['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('topic'), 'replyCount', $renderingContext);
$arguments140['keepQuotes'] = false;
$arguments140['encoding'] = NULL;
$arguments140['doubleEncode'] = true;
$renderChildrenClosure141 = function() {return NULL;};
$value142 = ($arguments140['value'] !== NULL ? $arguments140['value'] : $renderChildrenClosure141());

$output125 .= (!is_string($value142) ? $value142 : htmlspecialchars($value142, ($arguments140['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments140['encoding'] !== NULL ? $arguments140['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments140['doubleEncode']));

$output125 .= '</td>
    <td>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments143 = array();
$arguments143['partial'] = 'Post/Summary';
// Rendering Array
$array144 = array();
$array144['post'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('topic'), 'lastPost', $renderingContext);
$arguments143['arguments'] = $array144;
$arguments143['section'] = NULL;
$arguments143['optional'] = false;
$renderChildrenClosure145 = function() {return NULL;};

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments143, $renderChildrenClosure145, $renderingContext);

$output125 .= '
    </td>
';
return $output125;
};

$output61 .= '';

$output61 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments146 = array();
$arguments146['name'] = 'shadowTopic';
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output148 = '';

$output148 .= '
    <td style="width:1px;">
        ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Forum\TopicIconViewHelper
$arguments149 = array();
$arguments149['topic'] = $currentVariableContainer->getOrNull('topic');
$arguments149['width'] = '32';
$arguments149['important'] = 15;
$renderChildrenClosure150 = function() {return NULL;};
$viewHelper151 = $self->getViewHelper('$viewHelper151', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Forum\TopicIconViewHelper');
$viewHelper151->setArguments($arguments149);
$viewHelper151->setRenderingContext($renderingContext);
$viewHelper151->setRenderChildrenClosure($renderChildrenClosure150);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Forum\TopicIconViewHelper

$output148 .= $viewHelper151->initializeArgumentsAndRender();

$output148 .= '
    </td>
    <td>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments152 = array();
$arguments152['key'] = 'Forum_Show_Topic_Moved';
$arguments152['id'] = NULL;
$arguments152['default'] = NULL;
$arguments152['htmlEscape'] = NULL;
$arguments152['arguments'] = NULL;
$arguments152['extensionName'] = NULL;
$renderChildrenClosure153 = function() {return NULL;};

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output148 .= '
        :
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments154 = array();
$arguments154['controller'] = 'Topic';
$arguments154['action'] = 'show';
// Rendering Array
$array155 = array();
$array155['topic'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('topic'), 'target', $renderingContext);
$arguments154['arguments'] = $array155;
$arguments154['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'pids.Forum', $renderingContext);
$arguments154['additionalAttributes'] = NULL;
$arguments154['data'] = NULL;
$arguments154['extensionName'] = NULL;
$arguments154['pluginName'] = NULL;
$arguments154['pageType'] = 0;
$arguments154['noCache'] = false;
$arguments154['noCacheHash'] = false;
$arguments154['section'] = '';
$arguments154['format'] = '';
$arguments154['linkAccessRestrictedPages'] = false;
$arguments154['additionalParams'] = array (
);
$arguments154['absolute'] = false;
$arguments154['addQueryString'] = false;
$arguments154['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments154['addQueryStringMethod'] = NULL;
$arguments154['class'] = NULL;
$arguments154['dir'] = NULL;
$arguments154['id'] = NULL;
$arguments154['lang'] = NULL;
$arguments154['style'] = NULL;
$arguments154['title'] = NULL;
$arguments154['accesskey'] = NULL;
$arguments154['tabindex'] = NULL;
$arguments154['onclick'] = NULL;
$arguments154['name'] = NULL;
$arguments154['rel'] = NULL;
$arguments154['rev'] = NULL;
$arguments154['target'] = NULL;
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output157 = '';

$output157 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments158 = array();
$arguments158['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('topic'), 'target.subject', $renderingContext);
$arguments158['keepQuotes'] = false;
$arguments158['encoding'] = NULL;
$arguments158['doubleEncode'] = true;
$renderChildrenClosure159 = function() {return NULL;};
$value160 = ($arguments158['value'] !== NULL ? $arguments158['value'] : $renderChildrenClosure159());

$output157 .= (!is_string($value160) ? $value160 : htmlspecialchars($value160, ($arguments158['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments158['encoding'] !== NULL ? $arguments158['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments158['doubleEncode']));

$output157 .= '
        ';
return $output157;
};
$viewHelper161 = $self->getViewHelper('$viewHelper161', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper161->setArguments($arguments154);
$viewHelper161->setRenderingContext($renderingContext);
$viewHelper161->setRenderChildrenClosure($renderChildrenClosure156);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output148 .= $viewHelper161->initializeArgumentsAndRender();

$output148 .= '
    </td>
    <td colspan="3" align="center">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments162 = array();
$arguments162['key'] = 'Forum_Show_Topic_Moved';
$arguments162['id'] = NULL;
$arguments162['default'] = NULL;
$arguments162['htmlEscape'] = NULL;
$arguments162['arguments'] = NULL;
$arguments162['extensionName'] = NULL;
$renderChildrenClosure163 = function() {return NULL;};

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output148 .= '
    </td>
';
return $output148;
};

$output61 .= '';

$output61 .= '
';


return $output61;
}


}
#1468426866    43650     