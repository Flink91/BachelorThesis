<?php
class FluidCache_Typo3Forum_Forum_partial_Forum_List_37b08a56dc2a1adfa08ed1e7ed1af92dcbf343e7 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

<h2>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = $currentVariableContainer->getOrNull('header');
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() {return NULL;};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1['encoding'] !== NULL ? $arguments1['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1['doubleEncode']));

$output0 .= '
</h2>

<table>
    <colgroup>
        <col width="32"/>
        <col/>
        <col width="5%"/>
        <col width="5%"/>
        <col width="20%"/>
    </colgroup>
    <thead>
    <tr>
        <th></th>
        <th>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments4 = array();
$arguments4['key'] = 'Forum_Index_Name';
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['htmlEscape'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
        </th>
        <th>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments6 = array();
$arguments6['key'] = 'Forum_Index_Topics';
$arguments6['id'] = NULL;
$arguments6['default'] = NULL;
$arguments6['htmlEscape'] = NULL;
$arguments6['arguments'] = NULL;
$arguments6['extensionName'] = NULL;
$renderChildrenClosure7 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
        </th>
        <th>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments8 = array();
$arguments8['key'] = 'Forum_Index_Posts';
$arguments8['id'] = NULL;
$arguments8['default'] = NULL;
$arguments8['htmlEscape'] = NULL;
$arguments8['arguments'] = NULL;
$arguments8['extensionName'] = NULL;
$renderChildrenClosure9 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
        </th>
        <th>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments10 = array();
$arguments10['key'] = 'Forum_Index_LastPost';
$arguments10['id'] = NULL;
$arguments10['default'] = NULL;
$arguments10['htmlEscape'] = NULL;
$arguments10['arguments'] = NULL;
$arguments10['extensionName'] = NULL;
$renderChildrenClosure11 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
        </th>
    </tr>
    </thead>
    <tbody>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments12 = array();
// Rendering Boolean node
$arguments12['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'children', $renderingContext));
$arguments12['then'] = NULL;
$arguments12['else'] = NULL;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output14 = '';

$output14 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments15 = array();
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output17 = '';

$output17 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments18 = array();
$arguments18['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'children', $renderingContext);
$arguments18['as'] = 'forum';
$arguments18['key'] = '';
$arguments18['reverse'] = false;
$arguments18['iteration'] = NULL;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output20 = '';

$output20 .= '
                <tr>
                    <td>
                        ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Forum\ForumIconViewHelper
$arguments21 = array();
$arguments21['forum'] = $currentVariableContainer->getOrNull('forum');
$arguments21['width'] = '32';
$arguments21['alt'] = '';
$renderChildrenClosure22 = function() {return NULL;};
$viewHelper23 = $self->getViewHelper('$viewHelper23', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Forum\ForumIconViewHelper');
$viewHelper23->setArguments($arguments21);
$viewHelper23->setRenderingContext($renderingContext);
$viewHelper23->setRenderChildrenClosure($renderChildrenClosure22);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Forum\ForumIconViewHelper

$output20 .= $viewHelper23->initializeArgumentsAndRender();

$output20 .= '
                    </td>
                    <td>
                        <div>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments24 = array();
$arguments24['action'] = 'show';
// Rendering Array
$array25 = array();
$array25['forum'] = $currentVariableContainer->getOrNull('forum');
$arguments24['arguments'] = $array25;
$arguments24['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'pids.Forum', $renderingContext);
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['controller'] = NULL;
$arguments24['extensionName'] = NULL;
$arguments24['pluginName'] = NULL;
$arguments24['pageType'] = 0;
$arguments24['noCache'] = false;
$arguments24['noCacheHash'] = false;
$arguments24['section'] = '';
$arguments24['format'] = '';
$arguments24['linkAccessRestrictedPages'] = false;
$arguments24['additionalParams'] = array (
);
$arguments24['absolute'] = false;
$arguments24['addQueryString'] = false;
$arguments24['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments24['addQueryStringMethod'] = NULL;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$arguments24['name'] = NULL;
$arguments24['rel'] = NULL;
$arguments24['rev'] = NULL;
$arguments24['target'] = NULL;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output27 = '';

$output27 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments28 = array();
$arguments28['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('forum'), 'title', $renderingContext);
$arguments28['keepQuotes'] = false;
$arguments28['encoding'] = NULL;
$arguments28['doubleEncode'] = true;
$renderChildrenClosure29 = function() {return NULL;};
$value30 = ($arguments28['value'] !== NULL ? $arguments28['value'] : $renderChildrenClosure29());

$output27 .= (!is_string($value30) ? $value30 : htmlspecialchars($value30, ($arguments28['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments28['encoding'] !== NULL ? $arguments28['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments28['doubleEncode']));

$output27 .= '
                            ';
return $output27;
};
$viewHelper31 = $self->getViewHelper('$viewHelper31', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper31->setArguments($arguments24);
$viewHelper31->setRenderingContext($renderingContext);
$viewHelper31->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output20 .= $viewHelper31->initializeArgumentsAndRender();

$output20 .= '
                        </div>
                        <div>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments32 = array();
$arguments32['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('forum'), 'description', $renderingContext);
$arguments32['keepQuotes'] = false;
$arguments32['encoding'] = NULL;
$arguments32['doubleEncode'] = true;
$renderChildrenClosure33 = function() {return NULL;};
$value34 = ($arguments32['value'] !== NULL ? $arguments32['value'] : $renderChildrenClosure33());

$output20 .= (!is_string($value34) ? $value34 : htmlspecialchars($value34, ($arguments32['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments32['encoding'] !== NULL ? $arguments32['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments32['doubleEncode']));

$output20 .= '</div>
                    </td>
                    <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments35 = array();
$arguments35['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('forum'), 'topicCount', $renderingContext);
$arguments35['keepQuotes'] = false;
$arguments35['encoding'] = NULL;
$arguments35['doubleEncode'] = true;
$renderChildrenClosure36 = function() {return NULL;};
$value37 = ($arguments35['value'] !== NULL ? $arguments35['value'] : $renderChildrenClosure36());

$output20 .= (!is_string($value37) ? $value37 : htmlspecialchars($value37, ($arguments35['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments35['encoding'] !== NULL ? $arguments35['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments35['doubleEncode']));

$output20 .= '</td>
                    <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments38 = array();
$arguments38['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('forum'), 'postCount', $renderingContext);
$arguments38['keepQuotes'] = false;
$arguments38['encoding'] = NULL;
$arguments38['doubleEncode'] = true;
$renderChildrenClosure39 = function() {return NULL;};
$value40 = ($arguments38['value'] !== NULL ? $arguments38['value'] : $renderChildrenClosure39());

$output20 .= (!is_string($value40) ? $value40 : htmlspecialchars($value40, ($arguments38['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments38['encoding'] !== NULL ? $arguments38['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments38['doubleEncode']));

$output20 .= '</td>
                    <td>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments41 = array();
$arguments41['partial'] = 'Post/Summary';
// Rendering Array
$array42 = array();
$array42['post'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('forum'), 'lastPost', $renderingContext);
$arguments41['arguments'] = $array42;
$arguments41['section'] = NULL;
$arguments41['optional'] = false;
$renderChildrenClosure43 = function() {return NULL;};

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments41, $renderChildrenClosure43, $renderingContext);

$output20 .= '
                    </td>
                </tr>
            ';
return $output20;
};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
        ';
return $output17;
};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments44 = array();
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output46 = '';

$output46 .= '
            <tr>
                <td colspan="4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments47 = array();
$arguments47['key'] = 'Forum_Index_Empty';
$arguments47['id'] = NULL;
$arguments47['default'] = NULL;
$arguments47['htmlEscape'] = NULL;
$arguments47['arguments'] = NULL;
$arguments47['extensionName'] = NULL;
$renderChildrenClosure48 = function() {return NULL;};

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
                </td>
            </tr>
        ';
return $output46;
};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output14 .= '
    ';
return $output14;
};
$arguments12['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output49 = '';

$output49 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments50 = array();
$arguments50['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'children', $renderingContext);
$arguments50['as'] = 'forum';
$arguments50['key'] = '';
$arguments50['reverse'] = false;
$arguments50['iteration'] = NULL;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output52 = '';

$output52 .= '
                <tr>
                    <td>
                        ';
// Rendering ViewHelper Mittwald\Typo3Forum\ViewHelpers\Forum\ForumIconViewHelper
$arguments53 = array();
$arguments53['forum'] = $currentVariableContainer->getOrNull('forum');
$arguments53['width'] = '32';
$arguments53['alt'] = '';
$renderChildrenClosure54 = function() {return NULL;};
$viewHelper55 = $self->getViewHelper('$viewHelper55', $renderingContext, 'Mittwald\Typo3Forum\ViewHelpers\Forum\ForumIconViewHelper');
$viewHelper55->setArguments($arguments53);
$viewHelper55->setRenderingContext($renderingContext);
$viewHelper55->setRenderChildrenClosure($renderChildrenClosure54);
// End of ViewHelper Mittwald\Typo3Forum\ViewHelpers\Forum\ForumIconViewHelper

$output52 .= $viewHelper55->initializeArgumentsAndRender();

$output52 .= '
                    </td>
                    <td>
                        <div>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments56 = array();
$arguments56['action'] = 'show';
// Rendering Array
$array57 = array();
$array57['forum'] = $currentVariableContainer->getOrNull('forum');
$arguments56['arguments'] = $array57;
$arguments56['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'pids.Forum', $renderingContext);
$arguments56['additionalAttributes'] = NULL;
$arguments56['data'] = NULL;
$arguments56['controller'] = NULL;
$arguments56['extensionName'] = NULL;
$arguments56['pluginName'] = NULL;
$arguments56['pageType'] = 0;
$arguments56['noCache'] = false;
$arguments56['noCacheHash'] = false;
$arguments56['section'] = '';
$arguments56['format'] = '';
$arguments56['linkAccessRestrictedPages'] = false;
$arguments56['additionalParams'] = array (
);
$arguments56['absolute'] = false;
$arguments56['addQueryString'] = false;
$arguments56['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments56['addQueryStringMethod'] = NULL;
$arguments56['class'] = NULL;
$arguments56['dir'] = NULL;
$arguments56['id'] = NULL;
$arguments56['lang'] = NULL;
$arguments56['style'] = NULL;
$arguments56['title'] = NULL;
$arguments56['accesskey'] = NULL;
$arguments56['tabindex'] = NULL;
$arguments56['onclick'] = NULL;
$arguments56['name'] = NULL;
$arguments56['rel'] = NULL;
$arguments56['rev'] = NULL;
$arguments56['target'] = NULL;
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output59 = '';

$output59 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments60 = array();
$arguments60['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('forum'), 'title', $renderingContext);
$arguments60['keepQuotes'] = false;
$arguments60['encoding'] = NULL;
$arguments60['doubleEncode'] = true;
$renderChildrenClosure61 = function() {return NULL;};
$value62 = ($arguments60['value'] !== NULL ? $arguments60['value'] : $renderChildrenClosure61());

$output59 .= (!is_string($value62) ? $value62 : htmlspecialchars($value62, ($arguments60['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments60['encoding'] !== NULL ? $arguments60['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments60['doubleEncode']));

$output59 .= '
                            ';
return $output59;
};
$viewHelper63 = $self->getViewHelper('$viewHelper63', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper63->setArguments($arguments56);
$viewHelper63->setRenderingContext($renderingContext);
$viewHelper63->setRenderChildrenClosure($renderChildrenClosure58);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output52 .= $viewHelper63->initializeArgumentsAndRender();

$output52 .= '
                        </div>
                        <div>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments64 = array();
$arguments64['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('forum'), 'description', $renderingContext);
$arguments64['keepQuotes'] = false;
$arguments64['encoding'] = NULL;
$arguments64['doubleEncode'] = true;
$renderChildrenClosure65 = function() {return NULL;};
$value66 = ($arguments64['value'] !== NULL ? $arguments64['value'] : $renderChildrenClosure65());

$output52 .= (!is_string($value66) ? $value66 : htmlspecialchars($value66, ($arguments64['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments64['encoding'] !== NULL ? $arguments64['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments64['doubleEncode']));

$output52 .= '</div>
                    </td>
                    <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments67 = array();
$arguments67['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('forum'), 'topicCount', $renderingContext);
$arguments67['keepQuotes'] = false;
$arguments67['encoding'] = NULL;
$arguments67['doubleEncode'] = true;
$renderChildrenClosure68 = function() {return NULL;};
$value69 = ($arguments67['value'] !== NULL ? $arguments67['value'] : $renderChildrenClosure68());

$output52 .= (!is_string($value69) ? $value69 : htmlspecialchars($value69, ($arguments67['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments67['encoding'] !== NULL ? $arguments67['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments67['doubleEncode']));

$output52 .= '</td>
                    <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments70 = array();
$arguments70['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('forum'), 'postCount', $renderingContext);
$arguments70['keepQuotes'] = false;
$arguments70['encoding'] = NULL;
$arguments70['doubleEncode'] = true;
$renderChildrenClosure71 = function() {return NULL;};
$value72 = ($arguments70['value'] !== NULL ? $arguments70['value'] : $renderChildrenClosure71());

$output52 .= (!is_string($value72) ? $value72 : htmlspecialchars($value72, ($arguments70['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments70['encoding'] !== NULL ? $arguments70['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments70['doubleEncode']));

$output52 .= '</td>
                    <td>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments73 = array();
$arguments73['partial'] = 'Post/Summary';
// Rendering Array
$array74 = array();
$array74['post'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('forum'), 'lastPost', $renderingContext);
$arguments73['arguments'] = $array74;
$arguments73['section'] = NULL;
$arguments73['optional'] = false;
$renderChildrenClosure75 = function() {return NULL;};

$output52 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments73, $renderChildrenClosure75, $renderingContext);

$output52 .= '
                    </td>
                </tr>
            ';
return $output52;
};

$output49 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
        ';
return $output49;
};
$arguments12['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output76 = '';

$output76 .= '
            <tr>
                <td colspan="4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments77 = array();
$arguments77['key'] = 'Forum_Index_Empty';
$arguments77['id'] = NULL;
$arguments77['default'] = NULL;
$arguments77['htmlEscape'] = NULL;
$arguments77['arguments'] = NULL;
$arguments77['extensionName'] = NULL;
$renderChildrenClosure78 = function() {return NULL;};

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '
                </td>
            </tr>
        ';
return $output76;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output0 .= '
    </tbody>
</table>
';


return $output0;
}


}
#1465043884    24053     