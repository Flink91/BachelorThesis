<?php
class FluidCache_Metaseo_BackendControlCenter_action_main_87a44e802f30a7b36626cf2ea8f9a19c69aed0f4 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'BackendStandard';
}
public function hasLayout() {
return TRUE;
}

/**
 * section title
 */
public function section_3c6de1b7dd91465d437ef415f94f36afc1fbc8a8(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
    <h1>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'title.rootsettings.main';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Sitemap';
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    </h1>
';


return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output3 = '';

$output3 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('RootPageList'));
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
        <table border="0" cellpadding="0" cellspacing="1" width="100%" class="typo3-dblist">
            <colgroup>
                <col width="20"/>
                <col width="*"/>
                <col width="200"/>
                <col width="80"/>
                <col width="80"/>
            </colgroup>
            <thead>
            <tr>
                <td class="t3-row-header">&nbsp;</td>
                <td class="t3-row-header"><strong>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments7 = array();
$arguments7['key'] = 'table.header.rootpage';
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Root page';
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
                </strong></td>
                <td class="t3-row-header"><strong>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments9 = array();
$arguments9['key'] = 'table.header.domain';
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['htmlEscape'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Domain';
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output6 .= '
                </strong></td>
                <td class="t3-row-header"><strong>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments11 = array();
$arguments11['key'] = 'table.header.sitemap';
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Sitemap';
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output6 .= '
                </strong></td>
                <td class="t3-row-header"><strong>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments13 = array();
$arguments13['key'] = 'table.header.robotstxt';
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Robots.txt';
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output6 .= '
                </strong></td>
            </tr>
            </thead>
            <tbody>

            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments15 = array();
$arguments15['each'] = $currentVariableContainer->getOrNull('RootPageList');
$arguments15['as'] = 'RootPage';
$arguments15['iteration'] = 'RootPageIterator';
$arguments15['key'] = '';
$arguments15['reverse'] = false;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output17 = '';

$output17 .= '
                <tr>
                    <!-- Edit settings button -->
                    <td>
                        <span title="" class="t3-icon t3-icon-actions t3-icon-actions-document t3-icon-document-open"
                              onclick="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments18 = array();
$arguments18['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'settingsLink', $renderingContext);
$arguments18['keepQuotes'] = false;
$arguments18['encoding'] = NULL;
$arguments18['doubleEncode'] = true;
$renderChildrenClosure19 = function() {return NULL;};
$value20 = ($arguments18['value'] !== NULL ? $arguments18['value'] : $renderChildrenClosure19());

$output17 .= (!is_string($value20) ? $value20 : htmlspecialchars($value20, ($arguments18['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments18['encoding'] !== NULL ? $arguments18['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments18['doubleEncode']));

$output17 .= '">&nbsp;</span>
                    </td>

                    <!-- Title -->
                    <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments21 = array();
$arguments21['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'title', $renderingContext);
$arguments21['keepQuotes'] = false;
$arguments21['encoding'] = NULL;
$arguments21['doubleEncode'] = true;
$renderChildrenClosure22 = function() {return NULL;};
$value23 = ($arguments21['value'] !== NULL ? $arguments21['value'] : $renderChildrenClosure22());

$output17 .= (!is_string($value23) ? $value23 : htmlspecialchars($value23, ($arguments21['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments21['encoding'] !== NULL ? $arguments21['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments21['doubleEncode']));

$output17 .= '</td>

                    <!-- Domain list -->
                    <td>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments24 = array();
// Rendering Boolean node
$arguments24['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'domainList', $renderingContext));
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output26 = '';

$output26 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments27 = array();
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output29 = '';

$output29 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments30 = array();
$arguments30['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'domainList', $renderingContext);
$arguments30['as'] = 'Domain';
$arguments30['key'] = '';
$arguments30['reverse'] = false;
$arguments30['iteration'] = NULL;
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output32 = '';

$output32 .= '
                                    <div style="white-space: nowrap">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments33 = array();
// Rendering Boolean node
$arguments33['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('Domain'), 'forced', $renderingContext));
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output35 = '';

$output35 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments36 = array();
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
                                                <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments39 = array();
$arguments39['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('Domain'), 'domainName', $renderingContext);
$arguments39['keepQuotes'] = false;
$arguments39['encoding'] = NULL;
$arguments39['doubleEncode'] = true;
$renderChildrenClosure40 = function() {return NULL;};
$value41 = ($arguments39['value'] !== NULL ? $arguments39['value'] : $renderChildrenClosure40());

$output38 .= (!is_string($value41) ? $value41 : htmlspecialchars($value41, ($arguments39['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments39['encoding'] !== NULL ? $arguments39['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments39['doubleEncode']));

$output38 .= '</strong>
                                            ';
return $output38;
};

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments42 = array();
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output44 = '';

$output44 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments45 = array();
$arguments45['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('Domain'), 'domainName', $renderingContext);
$arguments45['keepQuotes'] = false;
$arguments45['encoding'] = NULL;
$arguments45['doubleEncode'] = true;
$renderChildrenClosure46 = function() {return NULL;};
$value47 = ($arguments45['value'] !== NULL ? $arguments45['value'] : $renderChildrenClosure46());

$output44 .= (!is_string($value47) ? $value47 : htmlspecialchars($value47, ($arguments45['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments45['encoding'] !== NULL ? $arguments45['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments45['doubleEncode']));

$output44 .= '
                                            ';
return $output44;
};

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output35 .= '
                                        ';
return $output35;
};
$arguments33['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output48 = '';

$output48 .= '
                                                <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments49 = array();
$arguments49['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('Domain'), 'domainName', $renderingContext);
$arguments49['keepQuotes'] = false;
$arguments49['encoding'] = NULL;
$arguments49['doubleEncode'] = true;
$renderChildrenClosure50 = function() {return NULL;};
$value51 = ($arguments49['value'] !== NULL ? $arguments49['value'] : $renderChildrenClosure50());

$output48 .= (!is_string($value51) ? $value51 : htmlspecialchars($value51, ($arguments49['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments49['encoding'] !== NULL ? $arguments49['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments49['doubleEncode']));

$output48 .= '</strong>
                                            ';
return $output48;
};
$arguments33['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output52 = '';

$output52 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments53 = array();
$arguments53['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('Domain'), 'domainName', $renderingContext);
$arguments53['keepQuotes'] = false;
$arguments53['encoding'] = NULL;
$arguments53['doubleEncode'] = true;
$renderChildrenClosure54 = function() {return NULL;};
$value55 = ($arguments53['value'] !== NULL ? $arguments53['value'] : $renderChildrenClosure54());

$output52 .= (!is_string($value55) ? $value55 : htmlspecialchars($value55, ($arguments53['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments53['encoding'] !== NULL ? $arguments53['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments53['doubleEncode']));

$output52 .= '
                                            ';
return $output52;
};

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
                                    </div>
                                ';
return $output32;
};

$output29 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
                            ';
return $output29;
};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments56 = array();
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output58 = '';

$output58 .= '
                                <span class="metaseo-warning">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments59 = array();
$arguments59['key'] = 'message.warning.no_domain_entries_found';
$arguments59['id'] = NULL;
$arguments59['default'] = NULL;
$arguments59['htmlEscape'] = NULL;
$arguments59['arguments'] = NULL;
$arguments59['extensionName'] = NULL;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'No domains found
                                ';
};

$output58 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '</span>
                            ';
return $output58;
};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output26 .= '
                        ';
return $output26;
};
$arguments24['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output61 = '';

$output61 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments62 = array();
$arguments62['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'domainList', $renderingContext);
$arguments62['as'] = 'Domain';
$arguments62['key'] = '';
$arguments62['reverse'] = false;
$arguments62['iteration'] = NULL;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output64 = '';

$output64 .= '
                                    <div style="white-space: nowrap">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments65 = array();
// Rendering Boolean node
$arguments65['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('Domain'), 'forced', $renderingContext));
$arguments65['then'] = NULL;
$arguments65['else'] = NULL;
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output67 = '';

$output67 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments68 = array();
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output70 = '';

$output70 .= '
                                                <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments71 = array();
$arguments71['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('Domain'), 'domainName', $renderingContext);
$arguments71['keepQuotes'] = false;
$arguments71['encoding'] = NULL;
$arguments71['doubleEncode'] = true;
$renderChildrenClosure72 = function() {return NULL;};
$value73 = ($arguments71['value'] !== NULL ? $arguments71['value'] : $renderChildrenClosure72());

$output70 .= (!is_string($value73) ? $value73 : htmlspecialchars($value73, ($arguments71['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments71['encoding'] !== NULL ? $arguments71['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments71['doubleEncode']));

$output70 .= '</strong>
                                            ';
return $output70;
};

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments74 = array();
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output76 = '';

$output76 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments77 = array();
$arguments77['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('Domain'), 'domainName', $renderingContext);
$arguments77['keepQuotes'] = false;
$arguments77['encoding'] = NULL;
$arguments77['doubleEncode'] = true;
$renderChildrenClosure78 = function() {return NULL;};
$value79 = ($arguments77['value'] !== NULL ? $arguments77['value'] : $renderChildrenClosure78());

$output76 .= (!is_string($value79) ? $value79 : htmlspecialchars($value79, ($arguments77['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments77['encoding'] !== NULL ? $arguments77['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments77['doubleEncode']));

$output76 .= '
                                            ';
return $output76;
};

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output67 .= '
                                        ';
return $output67;
};
$arguments65['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output80 = '';

$output80 .= '
                                                <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments81 = array();
$arguments81['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('Domain'), 'domainName', $renderingContext);
$arguments81['keepQuotes'] = false;
$arguments81['encoding'] = NULL;
$arguments81['doubleEncode'] = true;
$renderChildrenClosure82 = function() {return NULL;};
$value83 = ($arguments81['value'] !== NULL ? $arguments81['value'] : $renderChildrenClosure82());

$output80 .= (!is_string($value83) ? $value83 : htmlspecialchars($value83, ($arguments81['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments81['encoding'] !== NULL ? $arguments81['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments81['doubleEncode']));

$output80 .= '</strong>
                                            ';
return $output80;
};
$arguments65['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output84 = '';

$output84 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments85 = array();
$arguments85['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('Domain'), 'domainName', $renderingContext);
$arguments85['keepQuotes'] = false;
$arguments85['encoding'] = NULL;
$arguments85['doubleEncode'] = true;
$renderChildrenClosure86 = function() {return NULL;};
$value87 = ($arguments85['value'] !== NULL ? $arguments85['value'] : $renderChildrenClosure86());

$output84 .= (!is_string($value87) ? $value87 : htmlspecialchars($value87, ($arguments85['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments85['encoding'] !== NULL ? $arguments85['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments85['doubleEncode']));

$output84 .= '
                                            ';
return $output84;
};

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output64 .= '
                                    </div>
                                ';
return $output64;
};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
                            ';
return $output61;
};
$arguments24['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output88 = '';

$output88 .= '
                                <span class="metaseo-warning">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments89 = array();
$arguments89['key'] = 'message.warning.no_domain_entries_found';
$arguments89['id'] = NULL;
$arguments89['default'] = NULL;
$arguments89['htmlEscape'] = NULL;
$arguments89['arguments'] = NULL;
$arguments89['extensionName'] = NULL;
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'No domains found
                                ';
};

$output88 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output88 .= '</span>
                            ';
return $output88;
};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output17 .= '
                    </td>

                    <!-- Sitemap status -->
                    <td class="center">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments91 = array();
// Rendering Boolean node
$arguments91['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'rootSettings.is_sitemap', $renderingContext));
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output93 = '';

$output93 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments94 = array();
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output96 = '';

$output96 .= '
                                <span
                                    class="t3-icon t3-icon-status t3-icon-status-status t3-icon-status-permission-granted"></span>

                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments97 = array();
// Rendering Boolean node
$arguments97['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'sitemapLink', $renderingContext));
$arguments97['then'] = NULL;
$arguments97['else'] = NULL;
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output99 = '';

$output99 .= '
                                    <div class="metaseo-sitemap-link"><a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments100 = array();
$arguments100['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'sitemapLink', $renderingContext);
$arguments100['keepQuotes'] = false;
$arguments100['encoding'] = NULL;
$arguments100['doubleEncode'] = true;
$renderChildrenClosure101 = function() {return NULL;};
$value102 = ($arguments100['value'] !== NULL ? $arguments100['value'] : $renderChildrenClosure101());

$output99 .= (!is_string($value102) ? $value102 : htmlspecialchars($value102, ($arguments100['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments100['encoding'] !== NULL ? $arguments100['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments100['doubleEncode']));

$output99 .= '" target="_blank">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments103 = array();
$arguments103['key'] = 'link.open';
$arguments103['id'] = NULL;
$arguments103['default'] = NULL;
$arguments103['htmlEscape'] = NULL;
$arguments103['arguments'] = NULL;
$arguments103['extensionName'] = NULL;
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'open';
};

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output99 .= '
                                    </a></div>
                                ';
return $output99;
};

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
                            ';
return $output96;
};

$output93 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output93 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments105 = array();
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <span
                                    class="t3-icon t3-icon-status t3-icon-status-status t3-icon-status-permission-denied"></span>
                            ';
};

$output93 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output93 .= '
                        ';
return $output93;
};
$arguments91['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output107 = '';

$output107 .= '
                                <span
                                    class="t3-icon t3-icon-status t3-icon-status-status t3-icon-status-permission-granted"></span>

                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments108 = array();
// Rendering Boolean node
$arguments108['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'sitemapLink', $renderingContext));
$arguments108['then'] = NULL;
$arguments108['else'] = NULL;
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output110 = '';

$output110 .= '
                                    <div class="metaseo-sitemap-link"><a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments111 = array();
$arguments111['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'sitemapLink', $renderingContext);
$arguments111['keepQuotes'] = false;
$arguments111['encoding'] = NULL;
$arguments111['doubleEncode'] = true;
$renderChildrenClosure112 = function() {return NULL;};
$value113 = ($arguments111['value'] !== NULL ? $arguments111['value'] : $renderChildrenClosure112());

$output110 .= (!is_string($value113) ? $value113 : htmlspecialchars($value113, ($arguments111['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments111['encoding'] !== NULL ? $arguments111['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments111['doubleEncode']));

$output110 .= '" target="_blank">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments114 = array();
$arguments114['key'] = 'link.open';
$arguments114['id'] = NULL;
$arguments114['default'] = NULL;
$arguments114['htmlEscape'] = NULL;
$arguments114['arguments'] = NULL;
$arguments114['extensionName'] = NULL;
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'open';
};

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output110 .= '
                                    </a></div>
                                ';
return $output110;
};

$output107 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output107 .= '
                            ';
return $output107;
};
$arguments91['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <span
                                    class="t3-icon t3-icon-status t3-icon-status-status t3-icon-status-permission-denied"></span>
                            ';
};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output17 .= '
                    </td>

                    <!-- robots.txt status -->
                    <td class="center">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments116 = array();
// Rendering Boolean node
$arguments116['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'rootSettings.is_robotstxt', $renderingContext));
$arguments116['then'] = NULL;
$arguments116['else'] = NULL;
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output118 = '';

$output118 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments119 = array();
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output121 = '';

$output121 .= '
                                <span
                                    class="t3-icon t3-icon-status t3-icon-status-status t3-icon-status-permission-granted"></span>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments122 = array();
// Rendering Boolean node
$arguments122['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'robotsTxtLink', $renderingContext));
$arguments122['then'] = NULL;
$arguments122['else'] = NULL;
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output124 = '';

$output124 .= '
                                    <div class="metaseo-robotstxt-link"><a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments125 = array();
$arguments125['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'robotsTxtLink', $renderingContext);
$arguments125['keepQuotes'] = false;
$arguments125['encoding'] = NULL;
$arguments125['doubleEncode'] = true;
$renderChildrenClosure126 = function() {return NULL;};
$value127 = ($arguments125['value'] !== NULL ? $arguments125['value'] : $renderChildrenClosure126());

$output124 .= (!is_string($value127) ? $value127 : htmlspecialchars($value127, ($arguments125['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments125['encoding'] !== NULL ? $arguments125['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments125['doubleEncode']));

$output124 .= '"
                                                                           target="_blank">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments128 = array();
$arguments128['key'] = 'link.open';
$arguments128['id'] = NULL;
$arguments128['default'] = NULL;
$arguments128['htmlEscape'] = NULL;
$arguments128['arguments'] = NULL;
$arguments128['extensionName'] = NULL;
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'open';
};

$output124 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output124 .= '
                                    </a></div>
                                ';
return $output124;
};

$output121 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output121 .= '
                            ';
return $output121;
};

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments130 = array();
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <span
                                    class="t3-icon t3-icon-status t3-icon-status-status t3-icon-status-permission-denied"></span>
                            ';
};

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output118 .= '
                        ';
return $output118;
};
$arguments116['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output132 = '';

$output132 .= '
                                <span
                                    class="t3-icon t3-icon-status t3-icon-status-status t3-icon-status-permission-granted"></span>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments133 = array();
// Rendering Boolean node
$arguments133['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'robotsTxtLink', $renderingContext));
$arguments133['then'] = NULL;
$arguments133['else'] = NULL;
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output135 = '';

$output135 .= '
                                    <div class="metaseo-robotstxt-link"><a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments136 = array();
$arguments136['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'robotsTxtLink', $renderingContext);
$arguments136['keepQuotes'] = false;
$arguments136['encoding'] = NULL;
$arguments136['doubleEncode'] = true;
$renderChildrenClosure137 = function() {return NULL;};
$value138 = ($arguments136['value'] !== NULL ? $arguments136['value'] : $renderChildrenClosure137());

$output135 .= (!is_string($value138) ? $value138 : htmlspecialchars($value138, ($arguments136['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments136['encoding'] !== NULL ? $arguments136['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments136['doubleEncode']));

$output135 .= '"
                                                                           target="_blank">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments139 = array();
$arguments139['key'] = 'link.open';
$arguments139['id'] = NULL;
$arguments139['default'] = NULL;
$arguments139['htmlEscape'] = NULL;
$arguments139['arguments'] = NULL;
$arguments139['extensionName'] = NULL;
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'open';
};

$output135 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output135 .= '
                                    </a></div>
                                ';
return $output135;
};

$output132 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output132 .= '
                            ';
return $output132;
};
$arguments116['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <span
                                    class="t3-icon t3-icon-status t3-icon-status-status t3-icon-status-permission-denied"></span>
                            ';
};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output17 .= '
                    </td>
                </tr>
            ';
return $output17;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output6 .= '
            </tbody>
        </table>
    ';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '

';


return $output3;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output141 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments142 = array();
$arguments142['name'] = 'BackendStandard';
$renderChildrenClosure143 = function() {return NULL;};
$viewHelper144 = $self->getViewHelper('$viewHelper144', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper144->setArguments($arguments142);
$viewHelper144->setRenderingContext($renderingContext);
$viewHelper144->setRenderChildrenClosure($renderChildrenClosure143);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output141 .= $viewHelper144->initializeArgumentsAndRender();

$output141 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments145 = array();
$arguments145['name'] = 'title';
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output147 = '';

$output147 .= '
    <h1>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments148 = array();
$arguments148['key'] = 'title.rootsettings.main';
$arguments148['id'] = NULL;
$arguments148['default'] = NULL;
$arguments148['htmlEscape'] = NULL;
$arguments148['arguments'] = NULL;
$arguments148['extensionName'] = NULL;
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Sitemap';
};

$output147 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output147 .= '
    </h1>
';
return $output147;
};

$output141 .= '';

$output141 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments150 = array();
$arguments150['name'] = 'content';
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output152 = '';

$output152 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments153 = array();
// Rendering Boolean node
$arguments153['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('RootPageList'));
$arguments153['then'] = NULL;
$arguments153['else'] = NULL;
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output155 = '';

$output155 .= '
        <table border="0" cellpadding="0" cellspacing="1" width="100%" class="typo3-dblist">
            <colgroup>
                <col width="20"/>
                <col width="*"/>
                <col width="200"/>
                <col width="80"/>
                <col width="80"/>
            </colgroup>
            <thead>
            <tr>
                <td class="t3-row-header">&nbsp;</td>
                <td class="t3-row-header"><strong>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments156 = array();
$arguments156['key'] = 'table.header.rootpage';
$arguments156['id'] = NULL;
$arguments156['default'] = NULL;
$arguments156['htmlEscape'] = NULL;
$arguments156['arguments'] = NULL;
$arguments156['extensionName'] = NULL;
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Root page';
};

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output155 .= '
                </strong></td>
                <td class="t3-row-header"><strong>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments158 = array();
$arguments158['key'] = 'table.header.domain';
$arguments158['id'] = NULL;
$arguments158['default'] = NULL;
$arguments158['htmlEscape'] = NULL;
$arguments158['arguments'] = NULL;
$arguments158['extensionName'] = NULL;
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Domain';
};

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output155 .= '
                </strong></td>
                <td class="t3-row-header"><strong>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments160 = array();
$arguments160['key'] = 'table.header.sitemap';
$arguments160['id'] = NULL;
$arguments160['default'] = NULL;
$arguments160['htmlEscape'] = NULL;
$arguments160['arguments'] = NULL;
$arguments160['extensionName'] = NULL;
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Sitemap';
};

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output155 .= '
                </strong></td>
                <td class="t3-row-header"><strong>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments162 = array();
$arguments162['key'] = 'table.header.robotstxt';
$arguments162['id'] = NULL;
$arguments162['default'] = NULL;
$arguments162['htmlEscape'] = NULL;
$arguments162['arguments'] = NULL;
$arguments162['extensionName'] = NULL;
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Robots.txt';
};

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output155 .= '
                </strong></td>
            </tr>
            </thead>
            <tbody>

            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments164 = array();
$arguments164['each'] = $currentVariableContainer->getOrNull('RootPageList');
$arguments164['as'] = 'RootPage';
$arguments164['iteration'] = 'RootPageIterator';
$arguments164['key'] = '';
$arguments164['reverse'] = false;
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output166 = '';

$output166 .= '
                <tr>
                    <!-- Edit settings button -->
                    <td>
                        <span title="" class="t3-icon t3-icon-actions t3-icon-actions-document t3-icon-document-open"
                              onclick="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments167 = array();
$arguments167['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'settingsLink', $renderingContext);
$arguments167['keepQuotes'] = false;
$arguments167['encoding'] = NULL;
$arguments167['doubleEncode'] = true;
$renderChildrenClosure168 = function() {return NULL;};
$value169 = ($arguments167['value'] !== NULL ? $arguments167['value'] : $renderChildrenClosure168());

$output166 .= (!is_string($value169) ? $value169 : htmlspecialchars($value169, ($arguments167['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments167['encoding'] !== NULL ? $arguments167['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments167['doubleEncode']));

$output166 .= '">&nbsp;</span>
                    </td>

                    <!-- Title -->
                    <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments170 = array();
$arguments170['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'title', $renderingContext);
$arguments170['keepQuotes'] = false;
$arguments170['encoding'] = NULL;
$arguments170['doubleEncode'] = true;
$renderChildrenClosure171 = function() {return NULL;};
$value172 = ($arguments170['value'] !== NULL ? $arguments170['value'] : $renderChildrenClosure171());

$output166 .= (!is_string($value172) ? $value172 : htmlspecialchars($value172, ($arguments170['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments170['encoding'] !== NULL ? $arguments170['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments170['doubleEncode']));

$output166 .= '</td>

                    <!-- Domain list -->
                    <td>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments173 = array();
// Rendering Boolean node
$arguments173['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'domainList', $renderingContext));
$arguments173['then'] = NULL;
$arguments173['else'] = NULL;
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output175 = '';

$output175 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments176 = array();
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output178 = '';

$output178 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments179 = array();
$arguments179['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'domainList', $renderingContext);
$arguments179['as'] = 'Domain';
$arguments179['key'] = '';
$arguments179['reverse'] = false;
$arguments179['iteration'] = NULL;
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output181 = '';

$output181 .= '
                                    <div style="white-space: nowrap">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments182 = array();
// Rendering Boolean node
$arguments182['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('Domain'), 'forced', $renderingContext));
$arguments182['then'] = NULL;
$arguments182['else'] = NULL;
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output184 = '';

$output184 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments185 = array();
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output187 = '';

$output187 .= '
                                                <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments188 = array();
$arguments188['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('Domain'), 'domainName', $renderingContext);
$arguments188['keepQuotes'] = false;
$arguments188['encoding'] = NULL;
$arguments188['doubleEncode'] = true;
$renderChildrenClosure189 = function() {return NULL;};
$value190 = ($arguments188['value'] !== NULL ? $arguments188['value'] : $renderChildrenClosure189());

$output187 .= (!is_string($value190) ? $value190 : htmlspecialchars($value190, ($arguments188['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments188['encoding'] !== NULL ? $arguments188['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments188['doubleEncode']));

$output187 .= '</strong>
                                            ';
return $output187;
};

$output184 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output184 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments191 = array();
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output193 = '';

$output193 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments194 = array();
$arguments194['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('Domain'), 'domainName', $renderingContext);
$arguments194['keepQuotes'] = false;
$arguments194['encoding'] = NULL;
$arguments194['doubleEncode'] = true;
$renderChildrenClosure195 = function() {return NULL;};
$value196 = ($arguments194['value'] !== NULL ? $arguments194['value'] : $renderChildrenClosure195());

$output193 .= (!is_string($value196) ? $value196 : htmlspecialchars($value196, ($arguments194['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments194['encoding'] !== NULL ? $arguments194['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments194['doubleEncode']));

$output193 .= '
                                            ';
return $output193;
};

$output184 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output184 .= '
                                        ';
return $output184;
};
$arguments182['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output197 = '';

$output197 .= '
                                                <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments198 = array();
$arguments198['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('Domain'), 'domainName', $renderingContext);
$arguments198['keepQuotes'] = false;
$arguments198['encoding'] = NULL;
$arguments198['doubleEncode'] = true;
$renderChildrenClosure199 = function() {return NULL;};
$value200 = ($arguments198['value'] !== NULL ? $arguments198['value'] : $renderChildrenClosure199());

$output197 .= (!is_string($value200) ? $value200 : htmlspecialchars($value200, ($arguments198['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments198['encoding'] !== NULL ? $arguments198['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments198['doubleEncode']));

$output197 .= '</strong>
                                            ';
return $output197;
};
$arguments182['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output201 = '';

$output201 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments202 = array();
$arguments202['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('Domain'), 'domainName', $renderingContext);
$arguments202['keepQuotes'] = false;
$arguments202['encoding'] = NULL;
$arguments202['doubleEncode'] = true;
$renderChildrenClosure203 = function() {return NULL;};
$value204 = ($arguments202['value'] !== NULL ? $arguments202['value'] : $renderChildrenClosure203());

$output201 .= (!is_string($value204) ? $value204 : htmlspecialchars($value204, ($arguments202['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments202['encoding'] !== NULL ? $arguments202['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments202['doubleEncode']));

$output201 .= '
                                            ';
return $output201;
};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output181 .= '
                                    </div>
                                ';
return $output181;
};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output178 .= '
                            ';
return $output178;
};

$output175 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output175 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments205 = array();
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output207 = '';

$output207 .= '
                                <span class="metaseo-warning">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments208 = array();
$arguments208['key'] = 'message.warning.no_domain_entries_found';
$arguments208['id'] = NULL;
$arguments208['default'] = NULL;
$arguments208['htmlEscape'] = NULL;
$arguments208['arguments'] = NULL;
$arguments208['extensionName'] = NULL;
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'No domains found
                                ';
};

$output207 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output207 .= '</span>
                            ';
return $output207;
};

$output175 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output175 .= '
                        ';
return $output175;
};
$arguments173['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output210 = '';

$output210 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments211 = array();
$arguments211['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'domainList', $renderingContext);
$arguments211['as'] = 'Domain';
$arguments211['key'] = '';
$arguments211['reverse'] = false;
$arguments211['iteration'] = NULL;
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output213 = '';

$output213 .= '
                                    <div style="white-space: nowrap">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments214 = array();
// Rendering Boolean node
$arguments214['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('Domain'), 'forced', $renderingContext));
$arguments214['then'] = NULL;
$arguments214['else'] = NULL;
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output216 = '';

$output216 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments217 = array();
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output219 = '';

$output219 .= '
                                                <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments220 = array();
$arguments220['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('Domain'), 'domainName', $renderingContext);
$arguments220['keepQuotes'] = false;
$arguments220['encoding'] = NULL;
$arguments220['doubleEncode'] = true;
$renderChildrenClosure221 = function() {return NULL;};
$value222 = ($arguments220['value'] !== NULL ? $arguments220['value'] : $renderChildrenClosure221());

$output219 .= (!is_string($value222) ? $value222 : htmlspecialchars($value222, ($arguments220['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments220['encoding'] !== NULL ? $arguments220['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments220['doubleEncode']));

$output219 .= '</strong>
                                            ';
return $output219;
};

$output216 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output216 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments223 = array();
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output225 = '';

$output225 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments226 = array();
$arguments226['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('Domain'), 'domainName', $renderingContext);
$arguments226['keepQuotes'] = false;
$arguments226['encoding'] = NULL;
$arguments226['doubleEncode'] = true;
$renderChildrenClosure227 = function() {return NULL;};
$value228 = ($arguments226['value'] !== NULL ? $arguments226['value'] : $renderChildrenClosure227());

$output225 .= (!is_string($value228) ? $value228 : htmlspecialchars($value228, ($arguments226['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments226['encoding'] !== NULL ? $arguments226['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments226['doubleEncode']));

$output225 .= '
                                            ';
return $output225;
};

$output216 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output216 .= '
                                        ';
return $output216;
};
$arguments214['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output229 = '';

$output229 .= '
                                                <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments230 = array();
$arguments230['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('Domain'), 'domainName', $renderingContext);
$arguments230['keepQuotes'] = false;
$arguments230['encoding'] = NULL;
$arguments230['doubleEncode'] = true;
$renderChildrenClosure231 = function() {return NULL;};
$value232 = ($arguments230['value'] !== NULL ? $arguments230['value'] : $renderChildrenClosure231());

$output229 .= (!is_string($value232) ? $value232 : htmlspecialchars($value232, ($arguments230['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments230['encoding'] !== NULL ? $arguments230['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments230['doubleEncode']));

$output229 .= '</strong>
                                            ';
return $output229;
};
$arguments214['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output233 = '';

$output233 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments234 = array();
$arguments234['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('Domain'), 'domainName', $renderingContext);
$arguments234['keepQuotes'] = false;
$arguments234['encoding'] = NULL;
$arguments234['doubleEncode'] = true;
$renderChildrenClosure235 = function() {return NULL;};
$value236 = ($arguments234['value'] !== NULL ? $arguments234['value'] : $renderChildrenClosure235());

$output233 .= (!is_string($value236) ? $value236 : htmlspecialchars($value236, ($arguments234['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments234['encoding'] !== NULL ? $arguments234['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments234['doubleEncode']));

$output233 .= '
                                            ';
return $output233;
};

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output213 .= '
                                    </div>
                                ';
return $output213;
};

$output210 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output210 .= '
                            ';
return $output210;
};
$arguments173['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output237 = '';

$output237 .= '
                                <span class="metaseo-warning">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments238 = array();
$arguments238['key'] = 'message.warning.no_domain_entries_found';
$arguments238['id'] = NULL;
$arguments238['default'] = NULL;
$arguments238['htmlEscape'] = NULL;
$arguments238['arguments'] = NULL;
$arguments238['extensionName'] = NULL;
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'No domains found
                                ';
};

$output237 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext);

$output237 .= '</span>
                            ';
return $output237;
};

$output166 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output166 .= '
                    </td>

                    <!-- Sitemap status -->
                    <td class="center">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments240 = array();
// Rendering Boolean node
$arguments240['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'rootSettings.is_sitemap', $renderingContext));
$arguments240['then'] = NULL;
$arguments240['else'] = NULL;
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output242 = '';

$output242 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments243 = array();
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output245 = '';

$output245 .= '
                                <span
                                    class="t3-icon t3-icon-status t3-icon-status-status t3-icon-status-permission-granted"></span>

                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments246 = array();
// Rendering Boolean node
$arguments246['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'sitemapLink', $renderingContext));
$arguments246['then'] = NULL;
$arguments246['else'] = NULL;
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output248 = '';

$output248 .= '
                                    <div class="metaseo-sitemap-link"><a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments249 = array();
$arguments249['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'sitemapLink', $renderingContext);
$arguments249['keepQuotes'] = false;
$arguments249['encoding'] = NULL;
$arguments249['doubleEncode'] = true;
$renderChildrenClosure250 = function() {return NULL;};
$value251 = ($arguments249['value'] !== NULL ? $arguments249['value'] : $renderChildrenClosure250());

$output248 .= (!is_string($value251) ? $value251 : htmlspecialchars($value251, ($arguments249['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments249['encoding'] !== NULL ? $arguments249['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments249['doubleEncode']));

$output248 .= '" target="_blank">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments252 = array();
$arguments252['key'] = 'link.open';
$arguments252['id'] = NULL;
$arguments252['default'] = NULL;
$arguments252['htmlEscape'] = NULL;
$arguments252['arguments'] = NULL;
$arguments252['extensionName'] = NULL;
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'open';
};

$output248 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output248 .= '
                                    </a></div>
                                ';
return $output248;
};

$output245 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output245 .= '
                            ';
return $output245;
};

$output242 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output242 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments254 = array();
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <span
                                    class="t3-icon t3-icon-status t3-icon-status-status t3-icon-status-permission-denied"></span>
                            ';
};

$output242 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output242 .= '
                        ';
return $output242;
};
$arguments240['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output256 = '';

$output256 .= '
                                <span
                                    class="t3-icon t3-icon-status t3-icon-status-status t3-icon-status-permission-granted"></span>

                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments257 = array();
// Rendering Boolean node
$arguments257['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'sitemapLink', $renderingContext));
$arguments257['then'] = NULL;
$arguments257['else'] = NULL;
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output259 = '';

$output259 .= '
                                    <div class="metaseo-sitemap-link"><a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments260 = array();
$arguments260['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'sitemapLink', $renderingContext);
$arguments260['keepQuotes'] = false;
$arguments260['encoding'] = NULL;
$arguments260['doubleEncode'] = true;
$renderChildrenClosure261 = function() {return NULL;};
$value262 = ($arguments260['value'] !== NULL ? $arguments260['value'] : $renderChildrenClosure261());

$output259 .= (!is_string($value262) ? $value262 : htmlspecialchars($value262, ($arguments260['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments260['encoding'] !== NULL ? $arguments260['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments260['doubleEncode']));

$output259 .= '" target="_blank">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments263 = array();
$arguments263['key'] = 'link.open';
$arguments263['id'] = NULL;
$arguments263['default'] = NULL;
$arguments263['htmlEscape'] = NULL;
$arguments263['arguments'] = NULL;
$arguments263['extensionName'] = NULL;
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'open';
};

$output259 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output259 .= '
                                    </a></div>
                                ';
return $output259;
};

$output256 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output256 .= '
                            ';
return $output256;
};
$arguments240['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <span
                                    class="t3-icon t3-icon-status t3-icon-status-status t3-icon-status-permission-denied"></span>
                            ';
};

$output166 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);

$output166 .= '
                    </td>

                    <!-- robots.txt status -->
                    <td class="center">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments265 = array();
// Rendering Boolean node
$arguments265['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'rootSettings.is_robotstxt', $renderingContext));
$arguments265['then'] = NULL;
$arguments265['else'] = NULL;
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output267 = '';

$output267 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments268 = array();
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output270 = '';

$output270 .= '
                                <span
                                    class="t3-icon t3-icon-status t3-icon-status-status t3-icon-status-permission-granted"></span>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments271 = array();
// Rendering Boolean node
$arguments271['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'robotsTxtLink', $renderingContext));
$arguments271['then'] = NULL;
$arguments271['else'] = NULL;
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output273 = '';

$output273 .= '
                                    <div class="metaseo-robotstxt-link"><a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments274 = array();
$arguments274['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'robotsTxtLink', $renderingContext);
$arguments274['keepQuotes'] = false;
$arguments274['encoding'] = NULL;
$arguments274['doubleEncode'] = true;
$renderChildrenClosure275 = function() {return NULL;};
$value276 = ($arguments274['value'] !== NULL ? $arguments274['value'] : $renderChildrenClosure275());

$output273 .= (!is_string($value276) ? $value276 : htmlspecialchars($value276, ($arguments274['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments274['encoding'] !== NULL ? $arguments274['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments274['doubleEncode']));

$output273 .= '"
                                                                           target="_blank">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments277 = array();
$arguments277['key'] = 'link.open';
$arguments277['id'] = NULL;
$arguments277['default'] = NULL;
$arguments277['htmlEscape'] = NULL;
$arguments277['arguments'] = NULL;
$arguments277['extensionName'] = NULL;
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'open';
};

$output273 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext);

$output273 .= '
                                    </a></div>
                                ';
return $output273;
};

$output270 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext);

$output270 .= '
                            ';
return $output270;
};

$output267 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output267 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments279 = array();
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <span
                                    class="t3-icon t3-icon-status t3-icon-status-status t3-icon-status-permission-denied"></span>
                            ';
};

$output267 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext);

$output267 .= '
                        ';
return $output267;
};
$arguments265['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output281 = '';

$output281 .= '
                                <span
                                    class="t3-icon t3-icon-status t3-icon-status-status t3-icon-status-permission-granted"></span>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments282 = array();
// Rendering Boolean node
$arguments282['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'robotsTxtLink', $renderingContext));
$arguments282['then'] = NULL;
$arguments282['else'] = NULL;
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output284 = '';

$output284 .= '
                                    <div class="metaseo-robotstxt-link"><a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments285 = array();
$arguments285['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('RootPage'), 'robotsTxtLink', $renderingContext);
$arguments285['keepQuotes'] = false;
$arguments285['encoding'] = NULL;
$arguments285['doubleEncode'] = true;
$renderChildrenClosure286 = function() {return NULL;};
$value287 = ($arguments285['value'] !== NULL ? $arguments285['value'] : $renderChildrenClosure286());

$output284 .= (!is_string($value287) ? $value287 : htmlspecialchars($value287, ($arguments285['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments285['encoding'] !== NULL ? $arguments285['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments285['doubleEncode']));

$output284 .= '"
                                                                           target="_blank">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments288 = array();
$arguments288['key'] = 'link.open';
$arguments288['id'] = NULL;
$arguments288['default'] = NULL;
$arguments288['htmlEscape'] = NULL;
$arguments288['arguments'] = NULL;
$arguments288['extensionName'] = NULL;
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'open';
};

$output284 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output284 .= '
                                    </a></div>
                                ';
return $output284;
};

$output281 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext);

$output281 .= '
                            ';
return $output281;
};
$arguments265['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                <span
                                    class="t3-icon t3-icon-status t3-icon-status-status t3-icon-status-permission-denied"></span>
                            ';
};

$output166 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output166 .= '
                    </td>
                </tr>
            ';
return $output166;
};

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output155 .= '
            </tbody>
        </table>
    ';
return $output155;
};

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '

';
return $output152;
};

$output141 .= '';

$output141 .= '
';


return $output141;
}


}
#1467122735    88128     