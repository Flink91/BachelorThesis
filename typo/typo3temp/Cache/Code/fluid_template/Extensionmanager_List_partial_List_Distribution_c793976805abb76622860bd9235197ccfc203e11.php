<?php
class FluidCache_Extensionmanager_List_partial_List_Distribution_c793976805abb76622860bd9235197ccfc203e11 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<div class="distribution">
	<div class="distribution-image">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('distribution'), 'dependencies', $renderingContext));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
			<div class="typo3-dependency-version">
				';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\Typo3DependencyViewHelper
$arguments4 = array();
$arguments4['extension'] = $currentVariableContainer->getOrNull('distribution');
$renderChildrenClosure5 = function() {return NULL;};

$output3 .= TYPO3\CMS\Extensionmanager\ViewHelpers\Typo3DependencyViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
			</div>
		';
return $output3;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments6 = array();
// Rendering Boolean node
$arguments6['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('official'));
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output8 = '';

$output8 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments9 = array();
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper
$arguments12 = array();
$output13 = '';

$output13 .= 'EXT:';

$output13 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('distribution'), 'extensionKey', $renderingContext);

$output13 .= '/Resources/Public/Images/Distribution.png';
$arguments12['src'] = $output13;
$arguments12['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('distribution'), 'title', $renderingContext);
$arguments12['fallbackImage'] = 'EXT:extensionmanager/Resources/Public/Images/OfficialDistribution.png';
$arguments12['height'] = '225';
$arguments12['width'] = '300';
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['class'] = NULL;
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['title'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$renderChildrenClosure14 = function() {return NULL;};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper');
$viewHelper15->setArguments($arguments12);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper

$output11 .= $viewHelper15->initializeArgumentsAndRender();

$output11 .= '
			';
return $output11;
};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments16 = array();
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output18 = '';

$output18 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper
$arguments19 = array();
$output20 = '';

$output20 .= 'EXT:';

$output20 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('distribution'), 'extensionKey', $renderingContext);

$output20 .= '/Resources/Public/Images/Distribution.png';
$arguments19['src'] = $output20;
$arguments19['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('distribution'), 'title', $renderingContext);
$arguments19['fallbackImage'] = 'EXT:extensionmanager/Resources/Public/Images/Distribution.png';
$arguments19['height'] = '225';
$arguments19['width'] = '300';
$arguments19['additionalAttributes'] = NULL;
$arguments19['data'] = NULL;
$arguments19['class'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$renderChildrenClosure21 = function() {return NULL;};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper');
$viewHelper22->setArguments($arguments19);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper

$output18 .= $viewHelper22->initializeArgumentsAndRender();

$output18 .= '
			';
return $output18;
};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output8 .= '
		';
return $output8;
};
$arguments6['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output23 = '';

$output23 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper
$arguments24 = array();
$output25 = '';

$output25 .= 'EXT:';

$output25 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('distribution'), 'extensionKey', $renderingContext);

$output25 .= '/Resources/Public/Images/Distribution.png';
$arguments24['src'] = $output25;
$arguments24['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('distribution'), 'title', $renderingContext);
$arguments24['fallbackImage'] = 'EXT:extensionmanager/Resources/Public/Images/OfficialDistribution.png';
$arguments24['height'] = '225';
$arguments24['width'] = '300';
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$renderChildrenClosure26 = function() {return NULL;};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper');
$viewHelper27->setArguments($arguments24);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper

$output23 .= $viewHelper27->initializeArgumentsAndRender();

$output23 .= '
			';
return $output23;
};
$arguments6['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output28 = '';

$output28 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper
$arguments29 = array();
$output30 = '';

$output30 .= 'EXT:';

$output30 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('distribution'), 'extensionKey', $renderingContext);

$output30 .= '/Resources/Public/Images/Distribution.png';
$arguments29['src'] = $output30;
$arguments29['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('distribution'), 'title', $renderingContext);
$arguments29['fallbackImage'] = 'EXT:extensionmanager/Resources/Public/Images/Distribution.png';
$arguments29['height'] = '225';
$arguments29['width'] = '300';
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['class'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['title'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$renderChildrenClosure31 = function() {return NULL;};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper');
$viewHelper32->setArguments($arguments29);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure31);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper

$output28 .= $viewHelper32->initializeArgumentsAndRender();

$output28 .= '
			';
return $output28;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
		<div class="distribution-hover">
			<div class="distribution-hover-inner">
				<dl class="dl-horizontal">
					<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments33 = array();
$arguments33['key'] = 'extensionList.distribution.title';
$arguments33['id'] = NULL;
$arguments33['default'] = NULL;
$arguments33['htmlEscape'] = NULL;
$arguments33['arguments'] = NULL;
$arguments33['extensionName'] = NULL;
$renderChildrenClosure34 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output0 .= '</dt>
					<dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments35 = array();
$arguments35['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('distribution'), 'title', $renderingContext);
$arguments35['keepQuotes'] = false;
$arguments35['encoding'] = NULL;
$arguments35['doubleEncode'] = true;
$renderChildrenClosure36 = function() {return NULL;};
$value37 = ($arguments35['value'] !== NULL ? $arguments35['value'] : $renderChildrenClosure36());

$output0 .= (!is_string($value37) ? $value37 : htmlspecialchars($value37, ($arguments35['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments35['encoding'] !== NULL ? $arguments35['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments35['doubleEncode']));

$output0 .= '</dd>
					<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments38 = array();
$arguments38['key'] = 'extensionList.distribution.key';
$arguments38['id'] = NULL;
$arguments38['default'] = NULL;
$arguments38['htmlEscape'] = NULL;
$arguments38['arguments'] = NULL;
$arguments38['extensionName'] = NULL;
$renderChildrenClosure39 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output0 .= '</dt>
					<dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments40 = array();
$arguments40['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('distribution'), 'extensionKey', $renderingContext);
$arguments40['keepQuotes'] = false;
$arguments40['encoding'] = NULL;
$arguments40['doubleEncode'] = true;
$renderChildrenClosure41 = function() {return NULL;};
$value42 = ($arguments40['value'] !== NULL ? $arguments40['value'] : $renderChildrenClosure41());

$output0 .= (!is_string($value42) ? $value42 : htmlspecialchars($value42, ($arguments40['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments40['encoding'] !== NULL ? $arguments40['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments40['doubleEncode']));

$output0 .= '</dd>
					<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments43 = array();
$arguments43['key'] = 'extensionList.distribution.version';
$arguments43['id'] = NULL;
$arguments43['default'] = NULL;
$arguments43['htmlEscape'] = NULL;
$arguments43['arguments'] = NULL;
$arguments43['extensionName'] = NULL;
$renderChildrenClosure44 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output0 .= '</dt>
					<dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments45 = array();
$arguments45['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('distribution'), 'version', $renderingContext);
$arguments45['keepQuotes'] = false;
$arguments45['encoding'] = NULL;
$arguments45['doubleEncode'] = true;
$renderChildrenClosure46 = function() {return NULL;};
$value47 = ($arguments45['value'] !== NULL ? $arguments45['value'] : $renderChildrenClosure46());

$output0 .= (!is_string($value47) ? $value47 : htmlspecialchars($value47, ($arguments45['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments45['encoding'] !== NULL ? $arguments45['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments45['doubleEncode']));

$output0 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments48 = array();
$arguments48['format'] = 'd.m.Y';
$arguments48['date'] = NULL;
$arguments48['base'] = NULL;
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('distribution'), 'lastUpdated', $renderingContext);
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output0 .= ')</dd>
					<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments50 = array();
$arguments50['key'] = 'extensionList.distribution.author';
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['htmlEscape'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$renderChildrenClosure51 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output0 .= '</dt>
					<dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments52 = array();
$arguments52['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('distribution'), 'authorName', $renderingContext);
$arguments52['keepQuotes'] = false;
$arguments52['encoding'] = NULL;
$arguments52['doubleEncode'] = true;
$renderChildrenClosure53 = function() {return NULL;};
$value54 = ($arguments52['value'] !== NULL ? $arguments52['value'] : $renderChildrenClosure53());

$output0 .= (!is_string($value54) ? $value54 : htmlspecialchars($value54, ($arguments52['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments52['encoding'] !== NULL ? $arguments52['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments52['doubleEncode']));

$output0 .= '</dd>
				</dl>
				<div class="distributionDescription">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments55 = array();
$arguments55['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('distribution'), 'description', $renderingContext);
$arguments55['keepQuotes'] = false;
$arguments55['encoding'] = NULL;
$arguments55['doubleEncode'] = true;
$renderChildrenClosure56 = function() {return NULL;};
$value57 = ($arguments55['value'] !== NULL ? $arguments55['value'] : $renderChildrenClosure56());

$output0 .= (!is_string($value57) ? $value57 : htmlspecialchars($value57, ($arguments55['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments55['encoding'] !== NULL ? $arguments55['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments55['doubleEncode']));

$output0 .= '</div>
			</div>
		</div>
	</div>
	<div class="distribution-meta">
		<h2 class="distribution-title">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments58 = array();
$arguments58['action'] = 'show';
$arguments58['controller'] = 'Distribution';
// Rendering Array
$array59 = array();
$array59['extension'] = $currentVariableContainer->getOrNull('distribution');
$arguments58['arguments'] = $array59;
$arguments58['class'] = 'distribution-more';
$arguments58['additionalAttributes'] = NULL;
$arguments58['data'] = NULL;
$arguments58['extensionName'] = NULL;
$arguments58['pluginName'] = NULL;
$arguments58['pageUid'] = NULL;
$arguments58['pageType'] = 0;
$arguments58['noCache'] = false;
$arguments58['noCacheHash'] = false;
$arguments58['section'] = '';
$arguments58['format'] = '';
$arguments58['linkAccessRestrictedPages'] = false;
$arguments58['additionalParams'] = array (
);
$arguments58['absolute'] = false;
$arguments58['addQueryString'] = false;
$arguments58['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments58['addQueryStringMethod'] = NULL;
$arguments58['dir'] = NULL;
$arguments58['id'] = NULL;
$arguments58['lang'] = NULL;
$arguments58['style'] = NULL;
$arguments58['title'] = NULL;
$arguments58['accesskey'] = NULL;
$arguments58['tabindex'] = NULL;
$arguments58['onclick'] = NULL;
$arguments58['name'] = NULL;
$arguments58['rel'] = NULL;
$arguments58['rev'] = NULL;
$arguments58['target'] = NULL;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output61 = '';

$output61 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments62 = array();
$arguments62['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('distribution'), 'title', $renderingContext);
$arguments62['keepQuotes'] = false;
$arguments62['encoding'] = NULL;
$arguments62['doubleEncode'] = true;
$renderChildrenClosure63 = function() {return NULL;};
$value64 = ($arguments62['value'] !== NULL ? $arguments62['value'] : $renderChildrenClosure63());

$output61 .= (!is_string($value64) ? $value64 : htmlspecialchars($value64, ($arguments62['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments62['encoding'] !== NULL ? $arguments62['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments62['doubleEncode']));

$output61 .= '
			';
return $output61;
};
$viewHelper65 = $self->getViewHelper('$viewHelper65', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper65->setArguments($arguments58);
$viewHelper65->setRenderingContext($renderingContext);
$viewHelper65->setRenderChildrenClosure($renderChildrenClosure60);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper65->initializeArgumentsAndRender();

$output0 .= '
		</h2>
		<div class="distribution-install">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments66 = array();
$arguments66['action'] = 'installDistribution';
$arguments66['controller'] = 'Download';
// Rendering Array
$array67 = array();
$array67['extension'] = $currentVariableContainer->getOrNull('distribution');
$arguments66['arguments'] = $array67;
$arguments66['class'] = 'btn btn-default t3-button-action-installdistribution';
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['extensionName'] = NULL;
$arguments66['pluginName'] = NULL;
$arguments66['pageUid'] = NULL;
$arguments66['pageType'] = 0;
$arguments66['noCache'] = false;
$arguments66['noCacheHash'] = false;
$arguments66['section'] = '';
$arguments66['format'] = '';
$arguments66['linkAccessRestrictedPages'] = false;
$arguments66['additionalParams'] = array (
);
$arguments66['absolute'] = false;
$arguments66['addQueryString'] = false;
$arguments66['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments66['addQueryStringMethod'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$arguments66['name'] = NULL;
$arguments66['rel'] = NULL;
$arguments66['rev'] = NULL;
$arguments66['target'] = NULL;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output69 = '';

$output69 .= '
				<span class="fa fa-cloud-download">&nbsp;</span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments70 = array();
$arguments70['key'] = 'extensionList.installDistribution';
$arguments70['id'] = NULL;
$arguments70['default'] = NULL;
$arguments70['htmlEscape'] = NULL;
$arguments70['arguments'] = NULL;
$arguments70['extensionName'] = NULL;
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Install';
};

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output69 .= '
			';
return $output69;
};
$viewHelper72 = $self->getViewHelper('$viewHelper72', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper72->setArguments($arguments66);
$viewHelper72->setRenderingContext($renderingContext);
$viewHelper72->setRenderChildrenClosure($renderChildrenClosure68);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper72->initializeArgumentsAndRender();

$output0 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments73 = array();
// Rendering Boolean node
$arguments73['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('official'));
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output75 = '';

$output75 .= '
				<span class="label label-success">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments76 = array();
$arguments76['key'] = 'extensionList.officialDistribution';
$arguments76['id'] = NULL;
$arguments76['default'] = NULL;
$arguments76['htmlEscape'] = NULL;
$arguments76['arguments'] = NULL;
$arguments76['extensionName'] = NULL;
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Official Distribution';
};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
				</span>
			';
return $output75;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output0 .= '
		</div>
	</div>
</div>';


return $output0;
}


}
#1458752529    25312     