<?php
class FluidCache_Extensionmanager_Distribution_action_show_104de9b5998dd28fe6d9549c8b72c0242ed0daf8 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'main';
}
public function hasLayout() {
return TRUE;
}

/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();



return '
';
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	<div class="distribution-detail">
		<div class="distribution-detail-previewpane">
			';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper
$arguments1 = array();
$output2 = '';

$output2 .= 'EXT:';

$output2 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'extensionKey', $renderingContext);

$output2 .= '/Resources/Public/Images/DistributionWelcome.png';
$arguments1['src'] = $output2;
$arguments1['fallbackImage'] = 'EXT:extensionmanager/Resources/Public/Images/Distribution.png';
$arguments1['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('distribution'), 'title', $renderingContext);
$arguments1['class'] = 'distribution-detail-preview';
$arguments1['width'] = '300';
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['height'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$renderChildrenClosure3 = function() {return NULL;};
$viewHelper4 = $self->getViewHelper('$viewHelper4', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper');
$viewHelper4->setArguments($arguments1);
$viewHelper4->setRenderingContext($renderingContext);
$viewHelper4->setRenderChildrenClosure($renderChildrenClosure3);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper

$output0 .= $viewHelper4->initializeArgumentsAndRender();

$output0 .= '
		</div>
		<div class="distribution-detail-body">
			<div class="distribution-detail-header">
				<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments5 = array();
$arguments5['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'title', $renderingContext);
$arguments5['keepQuotes'] = false;
$arguments5['encoding'] = NULL;
$arguments5['doubleEncode'] = true;
$renderChildrenClosure6 = function() {return NULL;};
$value7 = ($arguments5['value'] !== NULL ? $arguments5['value'] : $renderChildrenClosure6());

$output0 .= (!is_string($value7) ? $value7 : htmlspecialchars($value7, ($arguments5['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments5['encoding'] !== NULL ? $arguments5['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments5['doubleEncode']));

$output0 .= '</h1>
				<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments8 = array();
$arguments8['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'description', $renderingContext);
$arguments8['keepQuotes'] = false;
$arguments8['encoding'] = NULL;
$arguments8['doubleEncode'] = true;
$renderChildrenClosure9 = function() {return NULL;};
$value10 = ($arguments8['value'] !== NULL ? $arguments8['value'] : $renderChildrenClosure9());

$output0 .= (!is_string($value10) ? $value10 : htmlspecialchars($value10, ($arguments8['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments8['encoding'] !== NULL ? $arguments8['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments8['doubleEncode']));

$output0 .= '</p>
			</div>
			<ul class="list-unstyled">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments11 = array();
// Rendering Boolean node
$arguments11['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('distributionActive'));
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output13 = '';

$output13 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments14 = array();
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output16 = '';

$output16 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments17 = array();
$arguments17['action'] = 'installDistribution';
$arguments17['controller'] = 'Download';
// Rendering Array
$array18 = array();
$array18['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments17['arguments'] = $array18;
$arguments17['class'] = 'btn btn-default t3-button-action-installdistribution';
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['pluginName'] = NULL;
$arguments17['pageUid'] = NULL;
$arguments17['pageType'] = 0;
$arguments17['noCache'] = false;
$arguments17['noCacheHash'] = false;
$arguments17['section'] = '';
$arguments17['format'] = '';
$arguments17['linkAccessRestrictedPages'] = false;
$arguments17['additionalParams'] = array (
);
$arguments17['absolute'] = false;
$arguments17['addQueryString'] = false;
$arguments17['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments17['addQueryStringMethod'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$arguments17['name'] = NULL;
$arguments17['rel'] = NULL;
$arguments17['rev'] = NULL;
$arguments17['target'] = NULL;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output20 = '';

$output20 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments21 = array();
$arguments21['identifier'] = 'actions-system-extension-import';
$arguments21['size'] = 'small';
$arguments21['overlay'] = NULL;
$arguments21['state'] = 'default';
$arguments21['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure22 = function() {return NULL;};

$output20 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments23 = array();
$arguments23['key'] = 'extensionList.installDistribution';
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['htmlEscape'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Install';
};

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output20 .= '
							';
return $output20;
};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper25->setArguments($arguments17);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output16 .= $viewHelper25->initializeArgumentsAndRender();

$output16 .= '
						</li>
					';
return $output16;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments26 = array();
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output28 = '';

$output28 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments29 = array();
// Rendering Boolean node
$arguments29['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('configurationLink'));
$arguments29['then'] = NULL;
$arguments29['else'] = NULL;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
							<li>
								<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments32 = array();
$arguments32['value'] = $currentVariableContainer->getOrNull('configurationLink');
$arguments32['keepQuotes'] = false;
$arguments32['encoding'] = NULL;
$arguments32['doubleEncode'] = true;
$renderChildrenClosure33 = function() {return NULL;};
$value34 = ($arguments32['value'] !== NULL ? $arguments32['value'] : $renderChildrenClosure33());

$output31 .= (!is_string($value34) ? $value34 : htmlspecialchars($value34, ($arguments32['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments32['encoding'] !== NULL ? $arguments32['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments32['doubleEncode']));

$output31 .= '" class="btn btn-default distribution-openViewModule " onclick="top.goToModule(\'web_ViewpageView\');">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments35 = array();
$arguments35['identifier'] = 'actions-system-extension-configure';
$arguments35['size'] = 'small';
$arguments35['overlay'] = NULL;
$arguments35['state'] = 'default';
$arguments35['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure36 = function() {return NULL;};

$output31 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments37 = array();
$arguments37['key'] = 'extensionList.configure';
$arguments37['id'] = NULL;
$arguments37['default'] = NULL;
$arguments37['htmlEscape'] = NULL;
$arguments37['arguments'] = NULL;
$arguments37['extensionName'] = NULL;
$renderChildrenClosure38 = function() {return NULL;};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output31 .= '
								</a>
							</li>
						';
return $output31;
};

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
						<li>
							<button class="btn btn-default distribution-openViewModule" onclick="top.goToModule(\'web_ViewpageView\');">
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments39 = array();
$arguments39['identifier'] = 'actions-document-view';
$arguments39['size'] = 'small';
$arguments39['overlay'] = NULL;
$arguments39['state'] = 'default';
$arguments39['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure40 = function() {return NULL;};

$output28 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments41 = array();
$arguments41['key'] = 'distribution.welcome.openViewModule';
$arguments41['id'] = NULL;
$arguments41['default'] = NULL;
$arguments41['htmlEscape'] = NULL;
$arguments41['arguments'] = NULL;
$arguments41['extensionName'] = NULL;
$renderChildrenClosure42 = function() {return NULL;};

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output28 .= '
							</button>
						</li>
						<li>
							<button class="btn btn-default distribution-openPageModule" onclick="top.goToModule(\'web_page\');">
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments43 = array();
$arguments43['identifier'] = 'actions-document-open';
$arguments43['size'] = 'small';
$arguments43['overlay'] = NULL;
$arguments43['state'] = 'default';
$arguments43['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure44 = function() {return NULL;};

$output28 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments45 = array();
$arguments45['key'] = 'distribution.welcome.openPageModule';
$arguments45['id'] = NULL;
$arguments45['default'] = NULL;
$arguments45['htmlEscape'] = NULL;
$arguments45['arguments'] = NULL;
$arguments45['extensionName'] = NULL;
$renderChildrenClosure46 = function() {return NULL;};

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output28 .= '
							</button>
						</li>
					';
return $output28;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output13 .= '
				';
return $output13;
};
$arguments11['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output47 = '';

$output47 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments48 = array();
$arguments48['action'] = 'installDistribution';
$arguments48['controller'] = 'Download';
// Rendering Array
$array49 = array();
$array49['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments48['arguments'] = $array49;
$arguments48['class'] = 'btn btn-default t3-button-action-installdistribution';
$arguments48['additionalAttributes'] = NULL;
$arguments48['data'] = NULL;
$arguments48['extensionName'] = NULL;
$arguments48['pluginName'] = NULL;
$arguments48['pageUid'] = NULL;
$arguments48['pageType'] = 0;
$arguments48['noCache'] = false;
$arguments48['noCacheHash'] = false;
$arguments48['section'] = '';
$arguments48['format'] = '';
$arguments48['linkAccessRestrictedPages'] = false;
$arguments48['additionalParams'] = array (
);
$arguments48['absolute'] = false;
$arguments48['addQueryString'] = false;
$arguments48['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments48['addQueryStringMethod'] = NULL;
$arguments48['dir'] = NULL;
$arguments48['id'] = NULL;
$arguments48['lang'] = NULL;
$arguments48['style'] = NULL;
$arguments48['title'] = NULL;
$arguments48['accesskey'] = NULL;
$arguments48['tabindex'] = NULL;
$arguments48['onclick'] = NULL;
$arguments48['name'] = NULL;
$arguments48['rel'] = NULL;
$arguments48['rev'] = NULL;
$arguments48['target'] = NULL;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output51 = '';

$output51 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments52 = array();
$arguments52['identifier'] = 'actions-system-extension-import';
$arguments52['size'] = 'small';
$arguments52['overlay'] = NULL;
$arguments52['state'] = 'default';
$arguments52['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure53 = function() {return NULL;};

$output51 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments54 = array();
$arguments54['key'] = 'extensionList.installDistribution';
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['htmlEscape'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Install';
};

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output51 .= '
							';
return $output51;
};
$viewHelper56 = $self->getViewHelper('$viewHelper56', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper56->setArguments($arguments48);
$viewHelper56->setRenderingContext($renderingContext);
$viewHelper56->setRenderChildrenClosure($renderChildrenClosure50);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output47 .= $viewHelper56->initializeArgumentsAndRender();

$output47 .= '
						</li>
					';
return $output47;
};
$arguments11['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output57 = '';

$output57 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments58 = array();
// Rendering Boolean node
$arguments58['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('configurationLink'));
$arguments58['then'] = NULL;
$arguments58['else'] = NULL;
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output60 = '';

$output60 .= '
							<li>
								<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments61 = array();
$arguments61['value'] = $currentVariableContainer->getOrNull('configurationLink');
$arguments61['keepQuotes'] = false;
$arguments61['encoding'] = NULL;
$arguments61['doubleEncode'] = true;
$renderChildrenClosure62 = function() {return NULL;};
$value63 = ($arguments61['value'] !== NULL ? $arguments61['value'] : $renderChildrenClosure62());

$output60 .= (!is_string($value63) ? $value63 : htmlspecialchars($value63, ($arguments61['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments61['encoding'] !== NULL ? $arguments61['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments61['doubleEncode']));

$output60 .= '" class="btn btn-default distribution-openViewModule " onclick="top.goToModule(\'web_ViewpageView\');">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments64 = array();
$arguments64['identifier'] = 'actions-system-extension-configure';
$arguments64['size'] = 'small';
$arguments64['overlay'] = NULL;
$arguments64['state'] = 'default';
$arguments64['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure65 = function() {return NULL;};

$output60 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments66 = array();
$arguments66['key'] = 'extensionList.configure';
$arguments66['id'] = NULL;
$arguments66['default'] = NULL;
$arguments66['htmlEscape'] = NULL;
$arguments66['arguments'] = NULL;
$arguments66['extensionName'] = NULL;
$renderChildrenClosure67 = function() {return NULL;};

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output60 .= '
								</a>
							</li>
						';
return $output60;
};

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '
						<li>
							<button class="btn btn-default distribution-openViewModule" onclick="top.goToModule(\'web_ViewpageView\');">
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments68 = array();
$arguments68['identifier'] = 'actions-document-view';
$arguments68['size'] = 'small';
$arguments68['overlay'] = NULL;
$arguments68['state'] = 'default';
$arguments68['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure69 = function() {return NULL;};

$output57 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments70 = array();
$arguments70['key'] = 'distribution.welcome.openViewModule';
$arguments70['id'] = NULL;
$arguments70['default'] = NULL;
$arguments70['htmlEscape'] = NULL;
$arguments70['arguments'] = NULL;
$arguments70['extensionName'] = NULL;
$renderChildrenClosure71 = function() {return NULL;};

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output57 .= '
							</button>
						</li>
						<li>
							<button class="btn btn-default distribution-openPageModule" onclick="top.goToModule(\'web_page\');">
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments72 = array();
$arguments72['identifier'] = 'actions-document-open';
$arguments72['size'] = 'small';
$arguments72['overlay'] = NULL;
$arguments72['state'] = 'default';
$arguments72['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure73 = function() {return NULL;};

$output57 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments74 = array();
$arguments74['key'] = 'distribution.welcome.openPageModule';
$arguments74['id'] = NULL;
$arguments74['default'] = NULL;
$arguments74['htmlEscape'] = NULL;
$arguments74['arguments'] = NULL;
$arguments74['extensionName'] = NULL;
$renderChildrenClosure75 = function() {return NULL;};

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output57 .= '
							</button>
						</li>
					';
return $output57;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '
			</ul>
			<dl class="dl-horizontal dl-horizontal-wide distribution-detail-summary">
				<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments76 = array();
$arguments76['key'] = 'extensionList.distribution.title';
$arguments76['id'] = NULL;
$arguments76['default'] = NULL;
$arguments76['htmlEscape'] = NULL;
$arguments76['arguments'] = NULL;
$arguments76['extensionName'] = NULL;
$renderChildrenClosure77 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output0 .= '</dt>
				<dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments78 = array();
$arguments78['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'title', $renderingContext);
$arguments78['keepQuotes'] = false;
$arguments78['encoding'] = NULL;
$arguments78['doubleEncode'] = true;
$renderChildrenClosure79 = function() {return NULL;};
$value80 = ($arguments78['value'] !== NULL ? $arguments78['value'] : $renderChildrenClosure79());

$output0 .= (!is_string($value80) ? $value80 : htmlspecialchars($value80, ($arguments78['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments78['encoding'] !== NULL ? $arguments78['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments78['doubleEncode']));

$output0 .= '</dd>
				<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments81 = array();
$arguments81['key'] = 'extensionList.distribution.key';
$arguments81['id'] = NULL;
$arguments81['default'] = NULL;
$arguments81['htmlEscape'] = NULL;
$arguments81['arguments'] = NULL;
$arguments81['extensionName'] = NULL;
$renderChildrenClosure82 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output0 .= '</dt>
				<dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments83 = array();
$arguments83['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'extensionKey', $renderingContext);
$arguments83['keepQuotes'] = false;
$arguments83['encoding'] = NULL;
$arguments83['doubleEncode'] = true;
$renderChildrenClosure84 = function() {return NULL;};
$value85 = ($arguments83['value'] !== NULL ? $arguments83['value'] : $renderChildrenClosure84());

$output0 .= (!is_string($value85) ? $value85 : htmlspecialchars($value85, ($arguments83['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments83['encoding'] !== NULL ? $arguments83['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments83['doubleEncode']));

$output0 .= '</dd>
				<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments86 = array();
$arguments86['key'] = 'extensionList.distribution.version';
$arguments86['id'] = NULL;
$arguments86['default'] = NULL;
$arguments86['htmlEscape'] = NULL;
$arguments86['arguments'] = NULL;
$arguments86['extensionName'] = NULL;
$renderChildrenClosure87 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output0 .= '</dt>
				<dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments88 = array();
$arguments88['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'version', $renderingContext);
$arguments88['keepQuotes'] = false;
$arguments88['encoding'] = NULL;
$arguments88['doubleEncode'] = true;
$renderChildrenClosure89 = function() {return NULL;};
$value90 = ($arguments88['value'] !== NULL ? $arguments88['value'] : $renderChildrenClosure89());

$output0 .= (!is_string($value90) ? $value90 : htmlspecialchars($value90, ($arguments88['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments88['encoding'] !== NULL ? $arguments88['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments88['doubleEncode']));

$output0 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments91 = array();
$arguments91['format'] = 'd.m.Y';
$arguments91['date'] = NULL;
$arguments91['base'] = NULL;
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'lastUpdated', $renderingContext);
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output0 .= ')<br><span class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments93 = array();
$arguments93['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'stateString', $renderingContext);
$arguments93['keepQuotes'] = false;
$arguments93['encoding'] = NULL;
$arguments93['doubleEncode'] = true;
$renderChildrenClosure94 = function() {return NULL;};
$value95 = ($arguments93['value'] !== NULL ? $arguments93['value'] : $renderChildrenClosure94());

$output0 .= (!is_string($value95) ? $value95 : htmlspecialchars($value95, ($arguments93['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments93['encoding'] !== NULL ? $arguments93['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments93['doubleEncode']));

$output0 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments96 = array();
$arguments96['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'stateString', $renderingContext);
$arguments96['keepQuotes'] = false;
$arguments96['encoding'] = NULL;
$arguments96['doubleEncode'] = true;
$renderChildrenClosure97 = function() {return NULL;};
$value98 = ($arguments96['value'] !== NULL ? $arguments96['value'] : $renderChildrenClosure97());

$output0 .= (!is_string($value98) ? $value98 : htmlspecialchars($value98, ($arguments96['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments96['encoding'] !== NULL ? $arguments96['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments96['doubleEncode']));

$output0 .= '</span></dd>
				<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments99 = array();
$arguments99['key'] = 'extensionList.distribution.author';
$arguments99['id'] = NULL;
$arguments99['default'] = NULL;
$arguments99['htmlEscape'] = NULL;
$arguments99['arguments'] = NULL;
$arguments99['extensionName'] = NULL;
$renderChildrenClosure100 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output0 .= '</dt>
				<dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments101 = array();
$arguments101['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'authorName', $renderingContext);
$arguments101['keepQuotes'] = false;
$arguments101['encoding'] = NULL;
$arguments101['doubleEncode'] = true;
$renderChildrenClosure102 = function() {return NULL;};
$value103 = ($arguments101['value'] !== NULL ? $arguments101['value'] : $renderChildrenClosure102());

$output0 .= (!is_string($value103) ? $value103 : htmlspecialchars($value103, ($arguments101['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments101['encoding'] !== NULL ? $arguments101['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments101['doubleEncode']));

$output0 .= '</dd>
				<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments104 = array();
$arguments104['key'] = 'extensionList.distribution.downloads';
$arguments104['id'] = NULL;
$arguments104['default'] = NULL;
$arguments104['htmlEscape'] = NULL;
$arguments104['arguments'] = NULL;
$arguments104['extensionName'] = NULL;
$renderChildrenClosure105 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output0 .= '</dt>
				<dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments106 = array();
$arguments106['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'alldownloadcounter', $renderingContext);
$arguments106['keepQuotes'] = false;
$arguments106['encoding'] = NULL;
$arguments106['doubleEncode'] = true;
$renderChildrenClosure107 = function() {return NULL;};
$value108 = ($arguments106['value'] !== NULL ? $arguments106['value'] : $renderChildrenClosure107());

$output0 .= (!is_string($value108) ? $value108 : htmlspecialchars($value108, ($arguments106['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments106['encoding'] !== NULL ? $arguments106['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments106['doubleEncode']));

$output0 .= '</dd>
			</dl>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments109 = array();
// Rendering Boolean node
$arguments109['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'dependencies', $renderingContext));
$arguments109['then'] = NULL;
$arguments109['else'] = NULL;
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output111 = '';

$output111 .= '
				<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments112 = array();
$arguments112['key'] = 'distribution.dependency.headline';
$arguments112['id'] = NULL;
$arguments112['default'] = NULL;
$arguments112['htmlEscape'] = NULL;
$arguments112['arguments'] = NULL;
$arguments112['extensionName'] = NULL;
$renderChildrenClosure113 = function() {return NULL;};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output111 .= '</h2>
				<table class="table table-striped table-hover">
					<thead>
						<tr class="t3-row-header">
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments114 = array();
$arguments114['key'] = 'distribution.dependency.identifier';
$arguments114['id'] = NULL;
$arguments114['default'] = NULL;
$arguments114['htmlEscape'] = NULL;
$arguments114['arguments'] = NULL;
$arguments114['extensionName'] = NULL;
$renderChildrenClosure115 = function() {return NULL;};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output111 .= '</td>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments116 = array();
$arguments116['key'] = 'distribution.dependency.type';
$arguments116['id'] = NULL;
$arguments116['default'] = NULL;
$arguments116['htmlEscape'] = NULL;
$arguments116['arguments'] = NULL;
$arguments116['extensionName'] = NULL;
$renderChildrenClosure117 = function() {return NULL;};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output111 .= '</td>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments118 = array();
$arguments118['key'] = 'distribution.dependency.version';
$arguments118['id'] = NULL;
$arguments118['default'] = NULL;
$arguments118['htmlEscape'] = NULL;
$arguments118['arguments'] = NULL;
$arguments118['extensionName'] = NULL;
$renderChildrenClosure119 = function() {return NULL;};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output111 .= '</td>
						</tr>
					</thead>
					<tbody>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments120 = array();
$arguments120['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'dependencies', $renderingContext);
$arguments120['as'] = 'dependency';
$arguments120['key'] = '';
$arguments120['reverse'] = false;
$arguments120['iteration'] = NULL;
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output122 = '';

$output122 .= '
							<tr>
								<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments123 = array();
$arguments123['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dependency'), 'identifier', $renderingContext);
$arguments123['keepQuotes'] = false;
$arguments123['encoding'] = NULL;
$arguments123['doubleEncode'] = true;
$renderChildrenClosure124 = function() {return NULL;};
$value125 = ($arguments123['value'] !== NULL ? $arguments123['value'] : $renderChildrenClosure124());

$output122 .= (!is_string($value125) ? $value125 : htmlspecialchars($value125, ($arguments123['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments123['encoding'] !== NULL ? $arguments123['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments123['doubleEncode']));

$output122 .= '</td>
								<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments126 = array();
$arguments126['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dependency'), 'type', $renderingContext);
$arguments126['keepQuotes'] = false;
$arguments126['encoding'] = NULL;
$arguments126['doubleEncode'] = true;
$renderChildrenClosure127 = function() {return NULL;};
$value128 = ($arguments126['value'] !== NULL ? $arguments126['value'] : $renderChildrenClosure127());

$output122 .= (!is_string($value128) ? $value128 : htmlspecialchars($value128, ($arguments126['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments126['encoding'] !== NULL ? $arguments126['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments126['doubleEncode']));

$output122 .= '</td>
								<td>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments129 = array();
$arguments129['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dependency'), 'lowestVersion', $renderingContext);
$arguments129['keepQuotes'] = false;
$arguments129['encoding'] = NULL;
$arguments129['doubleEncode'] = true;
$renderChildrenClosure130 = function() {return NULL;};
$value131 = ($arguments129['value'] !== NULL ? $arguments129['value'] : $renderChildrenClosure130());

$output122 .= (!is_string($value131) ? $value131 : htmlspecialchars($value131, ($arguments129['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments129['encoding'] !== NULL ? $arguments129['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments129['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments132 = array();
// Rendering Boolean node
$arguments132['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dependency'), 'highestVersion', $renderingContext));
$arguments132['then'] = NULL;
$arguments132['else'] = NULL;
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output134 = '';

$output134 .= '-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments135 = array();
$arguments135['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dependency'), 'highestVersion', $renderingContext);
$arguments135['keepQuotes'] = false;
$arguments135['encoding'] = NULL;
$arguments135['doubleEncode'] = true;
$renderChildrenClosure136 = function() {return NULL;};
$value137 = ($arguments135['value'] !== NULL ? $arguments135['value'] : $renderChildrenClosure136());

$output134 .= (!is_string($value137) ? $value137 : htmlspecialchars($value137, ($arguments135['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments135['encoding'] !== NULL ? $arguments135['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments135['doubleEncode']));
return $output134;
};

$output122 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output122 .= '
								</td>
							</tr>
						';
return $output122;
};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output111 .= '
					</tbody>
				</table>
			';
return $output111;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output0 .= '
		</div>
	</div>
';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output138 = '';

$output138 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments139 = array();
$arguments139['name'] = 'main';
$renderChildrenClosure140 = function() {return NULL;};
$viewHelper141 = $self->getViewHelper('$viewHelper141', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper141->setArguments($arguments139);
$viewHelper141->setRenderingContext($renderingContext);
$viewHelper141->setRenderChildrenClosure($renderChildrenClosure140);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output138 .= $viewHelper141->initializeArgumentsAndRender();

$output138 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments142 = array();
$arguments142['name'] = 'headline';
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
';
};

$output138 .= '';

$output138 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments144 = array();
$arguments144['name'] = 'content';
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output146 = '';

$output146 .= '
	<div class="distribution-detail">
		<div class="distribution-detail-previewpane">
			';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper
$arguments147 = array();
$output148 = '';

$output148 .= 'EXT:';

$output148 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'extensionKey', $renderingContext);

$output148 .= '/Resources/Public/Images/DistributionWelcome.png';
$arguments147['src'] = $output148;
$arguments147['fallbackImage'] = 'EXT:extensionmanager/Resources/Public/Images/Distribution.png';
$arguments147['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('distribution'), 'title', $renderingContext);
$arguments147['class'] = 'distribution-detail-preview';
$arguments147['width'] = '300';
$arguments147['additionalAttributes'] = NULL;
$arguments147['data'] = NULL;
$arguments147['height'] = NULL;
$arguments147['dir'] = NULL;
$arguments147['id'] = NULL;
$arguments147['lang'] = NULL;
$arguments147['style'] = NULL;
$arguments147['title'] = NULL;
$arguments147['accesskey'] = NULL;
$arguments147['tabindex'] = NULL;
$arguments147['onclick'] = NULL;
$renderChildrenClosure149 = function() {return NULL;};
$viewHelper150 = $self->getViewHelper('$viewHelper150', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper');
$viewHelper150->setArguments($arguments147);
$viewHelper150->setRenderingContext($renderingContext);
$viewHelper150->setRenderChildrenClosure($renderChildrenClosure149);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper

$output146 .= $viewHelper150->initializeArgumentsAndRender();

$output146 .= '
		</div>
		<div class="distribution-detail-body">
			<div class="distribution-detail-header">
				<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments151 = array();
$arguments151['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'title', $renderingContext);
$arguments151['keepQuotes'] = false;
$arguments151['encoding'] = NULL;
$arguments151['doubleEncode'] = true;
$renderChildrenClosure152 = function() {return NULL;};
$value153 = ($arguments151['value'] !== NULL ? $arguments151['value'] : $renderChildrenClosure152());

$output146 .= (!is_string($value153) ? $value153 : htmlspecialchars($value153, ($arguments151['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments151['encoding'] !== NULL ? $arguments151['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments151['doubleEncode']));

$output146 .= '</h1>
				<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments154 = array();
$arguments154['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'description', $renderingContext);
$arguments154['keepQuotes'] = false;
$arguments154['encoding'] = NULL;
$arguments154['doubleEncode'] = true;
$renderChildrenClosure155 = function() {return NULL;};
$value156 = ($arguments154['value'] !== NULL ? $arguments154['value'] : $renderChildrenClosure155());

$output146 .= (!is_string($value156) ? $value156 : htmlspecialchars($value156, ($arguments154['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments154['encoding'] !== NULL ? $arguments154['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments154['doubleEncode']));

$output146 .= '</p>
			</div>
			<ul class="list-unstyled">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments157 = array();
// Rendering Boolean node
$arguments157['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('distributionActive'));
$arguments157['then'] = NULL;
$arguments157['else'] = NULL;
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output159 = '';

$output159 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments160 = array();
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output162 = '';

$output162 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments163 = array();
$arguments163['action'] = 'installDistribution';
$arguments163['controller'] = 'Download';
// Rendering Array
$array164 = array();
$array164['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments163['arguments'] = $array164;
$arguments163['class'] = 'btn btn-default t3-button-action-installdistribution';
$arguments163['additionalAttributes'] = NULL;
$arguments163['data'] = NULL;
$arguments163['extensionName'] = NULL;
$arguments163['pluginName'] = NULL;
$arguments163['pageUid'] = NULL;
$arguments163['pageType'] = 0;
$arguments163['noCache'] = false;
$arguments163['noCacheHash'] = false;
$arguments163['section'] = '';
$arguments163['format'] = '';
$arguments163['linkAccessRestrictedPages'] = false;
$arguments163['additionalParams'] = array (
);
$arguments163['absolute'] = false;
$arguments163['addQueryString'] = false;
$arguments163['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments163['addQueryStringMethod'] = NULL;
$arguments163['dir'] = NULL;
$arguments163['id'] = NULL;
$arguments163['lang'] = NULL;
$arguments163['style'] = NULL;
$arguments163['title'] = NULL;
$arguments163['accesskey'] = NULL;
$arguments163['tabindex'] = NULL;
$arguments163['onclick'] = NULL;
$arguments163['name'] = NULL;
$arguments163['rel'] = NULL;
$arguments163['rev'] = NULL;
$arguments163['target'] = NULL;
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output166 = '';

$output166 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments167 = array();
$arguments167['identifier'] = 'actions-system-extension-import';
$arguments167['size'] = 'small';
$arguments167['overlay'] = NULL;
$arguments167['state'] = 'default';
$arguments167['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure168 = function() {return NULL;};

$output166 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments169 = array();
$arguments169['key'] = 'extensionList.installDistribution';
$arguments169['id'] = NULL;
$arguments169['default'] = NULL;
$arguments169['htmlEscape'] = NULL;
$arguments169['arguments'] = NULL;
$arguments169['extensionName'] = NULL;
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Install';
};

$output166 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output166 .= '
							';
return $output166;
};
$viewHelper171 = $self->getViewHelper('$viewHelper171', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper171->setArguments($arguments163);
$viewHelper171->setRenderingContext($renderingContext);
$viewHelper171->setRenderChildrenClosure($renderChildrenClosure165);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output162 .= $viewHelper171->initializeArgumentsAndRender();

$output162 .= '
						</li>
					';
return $output162;
};

$output159 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output159 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments172 = array();
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output174 = '';

$output174 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments175 = array();
// Rendering Boolean node
$arguments175['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('configurationLink'));
$arguments175['then'] = NULL;
$arguments175['else'] = NULL;
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output177 = '';

$output177 .= '
							<li>
								<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments178 = array();
$arguments178['value'] = $currentVariableContainer->getOrNull('configurationLink');
$arguments178['keepQuotes'] = false;
$arguments178['encoding'] = NULL;
$arguments178['doubleEncode'] = true;
$renderChildrenClosure179 = function() {return NULL;};
$value180 = ($arguments178['value'] !== NULL ? $arguments178['value'] : $renderChildrenClosure179());

$output177 .= (!is_string($value180) ? $value180 : htmlspecialchars($value180, ($arguments178['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments178['encoding'] !== NULL ? $arguments178['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments178['doubleEncode']));

$output177 .= '" class="btn btn-default distribution-openViewModule " onclick="top.goToModule(\'web_ViewpageView\');">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments181 = array();
$arguments181['identifier'] = 'actions-system-extension-configure';
$arguments181['size'] = 'small';
$arguments181['overlay'] = NULL;
$arguments181['state'] = 'default';
$arguments181['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure182 = function() {return NULL;};

$output177 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments183 = array();
$arguments183['key'] = 'extensionList.configure';
$arguments183['id'] = NULL;
$arguments183['default'] = NULL;
$arguments183['htmlEscape'] = NULL;
$arguments183['arguments'] = NULL;
$arguments183['extensionName'] = NULL;
$renderChildrenClosure184 = function() {return NULL;};

$output177 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output177 .= '
								</a>
							</li>
						';
return $output177;
};

$output174 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output174 .= '
						<li>
							<button class="btn btn-default distribution-openViewModule" onclick="top.goToModule(\'web_ViewpageView\');">
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments185 = array();
$arguments185['identifier'] = 'actions-document-view';
$arguments185['size'] = 'small';
$arguments185['overlay'] = NULL;
$arguments185['state'] = 'default';
$arguments185['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure186 = function() {return NULL;};

$output174 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments187 = array();
$arguments187['key'] = 'distribution.welcome.openViewModule';
$arguments187['id'] = NULL;
$arguments187['default'] = NULL;
$arguments187['htmlEscape'] = NULL;
$arguments187['arguments'] = NULL;
$arguments187['extensionName'] = NULL;
$renderChildrenClosure188 = function() {return NULL;};

$output174 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output174 .= '
							</button>
						</li>
						<li>
							<button class="btn btn-default distribution-openPageModule" onclick="top.goToModule(\'web_page\');">
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments189 = array();
$arguments189['identifier'] = 'actions-document-open';
$arguments189['size'] = 'small';
$arguments189['overlay'] = NULL;
$arguments189['state'] = 'default';
$arguments189['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure190 = function() {return NULL;};

$output174 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments191 = array();
$arguments191['key'] = 'distribution.welcome.openPageModule';
$arguments191['id'] = NULL;
$arguments191['default'] = NULL;
$arguments191['htmlEscape'] = NULL;
$arguments191['arguments'] = NULL;
$arguments191['extensionName'] = NULL;
$renderChildrenClosure192 = function() {return NULL;};

$output174 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output174 .= '
							</button>
						</li>
					';
return $output174;
};

$output159 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output159 .= '
				';
return $output159;
};
$arguments157['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output193 = '';

$output193 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments194 = array();
$arguments194['action'] = 'installDistribution';
$arguments194['controller'] = 'Download';
// Rendering Array
$array195 = array();
$array195['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments194['arguments'] = $array195;
$arguments194['class'] = 'btn btn-default t3-button-action-installdistribution';
$arguments194['additionalAttributes'] = NULL;
$arguments194['data'] = NULL;
$arguments194['extensionName'] = NULL;
$arguments194['pluginName'] = NULL;
$arguments194['pageUid'] = NULL;
$arguments194['pageType'] = 0;
$arguments194['noCache'] = false;
$arguments194['noCacheHash'] = false;
$arguments194['section'] = '';
$arguments194['format'] = '';
$arguments194['linkAccessRestrictedPages'] = false;
$arguments194['additionalParams'] = array (
);
$arguments194['absolute'] = false;
$arguments194['addQueryString'] = false;
$arguments194['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments194['addQueryStringMethod'] = NULL;
$arguments194['dir'] = NULL;
$arguments194['id'] = NULL;
$arguments194['lang'] = NULL;
$arguments194['style'] = NULL;
$arguments194['title'] = NULL;
$arguments194['accesskey'] = NULL;
$arguments194['tabindex'] = NULL;
$arguments194['onclick'] = NULL;
$arguments194['name'] = NULL;
$arguments194['rel'] = NULL;
$arguments194['rev'] = NULL;
$arguments194['target'] = NULL;
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output197 = '';

$output197 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments198 = array();
$arguments198['identifier'] = 'actions-system-extension-import';
$arguments198['size'] = 'small';
$arguments198['overlay'] = NULL;
$arguments198['state'] = 'default';
$arguments198['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure199 = function() {return NULL;};

$output197 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments200 = array();
$arguments200['key'] = 'extensionList.installDistribution';
$arguments200['id'] = NULL;
$arguments200['default'] = NULL;
$arguments200['htmlEscape'] = NULL;
$arguments200['arguments'] = NULL;
$arguments200['extensionName'] = NULL;
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Install';
};

$output197 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output197 .= '
							';
return $output197;
};
$viewHelper202 = $self->getViewHelper('$viewHelper202', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper202->setArguments($arguments194);
$viewHelper202->setRenderingContext($renderingContext);
$viewHelper202->setRenderChildrenClosure($renderChildrenClosure196);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output193 .= $viewHelper202->initializeArgumentsAndRender();

$output193 .= '
						</li>
					';
return $output193;
};
$arguments157['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output203 = '';

$output203 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments204 = array();
// Rendering Boolean node
$arguments204['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('configurationLink'));
$arguments204['then'] = NULL;
$arguments204['else'] = NULL;
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output206 = '';

$output206 .= '
							<li>
								<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments207 = array();
$arguments207['value'] = $currentVariableContainer->getOrNull('configurationLink');
$arguments207['keepQuotes'] = false;
$arguments207['encoding'] = NULL;
$arguments207['doubleEncode'] = true;
$renderChildrenClosure208 = function() {return NULL;};
$value209 = ($arguments207['value'] !== NULL ? $arguments207['value'] : $renderChildrenClosure208());

$output206 .= (!is_string($value209) ? $value209 : htmlspecialchars($value209, ($arguments207['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments207['encoding'] !== NULL ? $arguments207['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments207['doubleEncode']));

$output206 .= '" class="btn btn-default distribution-openViewModule " onclick="top.goToModule(\'web_ViewpageView\');">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments210 = array();
$arguments210['identifier'] = 'actions-system-extension-configure';
$arguments210['size'] = 'small';
$arguments210['overlay'] = NULL;
$arguments210['state'] = 'default';
$arguments210['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure211 = function() {return NULL;};

$output206 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments212 = array();
$arguments212['key'] = 'extensionList.configure';
$arguments212['id'] = NULL;
$arguments212['default'] = NULL;
$arguments212['htmlEscape'] = NULL;
$arguments212['arguments'] = NULL;
$arguments212['extensionName'] = NULL;
$renderChildrenClosure213 = function() {return NULL;};

$output206 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output206 .= '
								</a>
							</li>
						';
return $output206;
};

$output203 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output203 .= '
						<li>
							<button class="btn btn-default distribution-openViewModule" onclick="top.goToModule(\'web_ViewpageView\');">
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments214 = array();
$arguments214['identifier'] = 'actions-document-view';
$arguments214['size'] = 'small';
$arguments214['overlay'] = NULL;
$arguments214['state'] = 'default';
$arguments214['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure215 = function() {return NULL;};

$output203 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments216 = array();
$arguments216['key'] = 'distribution.welcome.openViewModule';
$arguments216['id'] = NULL;
$arguments216['default'] = NULL;
$arguments216['htmlEscape'] = NULL;
$arguments216['arguments'] = NULL;
$arguments216['extensionName'] = NULL;
$renderChildrenClosure217 = function() {return NULL;};

$output203 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext);

$output203 .= '
							</button>
						</li>
						<li>
							<button class="btn btn-default distribution-openPageModule" onclick="top.goToModule(\'web_page\');">
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments218 = array();
$arguments218['identifier'] = 'actions-document-open';
$arguments218['size'] = 'small';
$arguments218['overlay'] = NULL;
$arguments218['state'] = 'default';
$arguments218['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure219 = function() {return NULL;};

$output203 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments220 = array();
$arguments220['key'] = 'distribution.welcome.openPageModule';
$arguments220['id'] = NULL;
$arguments220['default'] = NULL;
$arguments220['htmlEscape'] = NULL;
$arguments220['arguments'] = NULL;
$arguments220['extensionName'] = NULL;
$renderChildrenClosure221 = function() {return NULL;};

$output203 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output203 .= '
							</button>
						</li>
					';
return $output203;
};

$output146 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output146 .= '
			</ul>
			<dl class="dl-horizontal dl-horizontal-wide distribution-detail-summary">
				<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments222 = array();
$arguments222['key'] = 'extensionList.distribution.title';
$arguments222['id'] = NULL;
$arguments222['default'] = NULL;
$arguments222['htmlEscape'] = NULL;
$arguments222['arguments'] = NULL;
$arguments222['extensionName'] = NULL;
$renderChildrenClosure223 = function() {return NULL;};

$output146 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output146 .= '</dt>
				<dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments224 = array();
$arguments224['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'title', $renderingContext);
$arguments224['keepQuotes'] = false;
$arguments224['encoding'] = NULL;
$arguments224['doubleEncode'] = true;
$renderChildrenClosure225 = function() {return NULL;};
$value226 = ($arguments224['value'] !== NULL ? $arguments224['value'] : $renderChildrenClosure225());

$output146 .= (!is_string($value226) ? $value226 : htmlspecialchars($value226, ($arguments224['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments224['encoding'] !== NULL ? $arguments224['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments224['doubleEncode']));

$output146 .= '</dd>
				<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments227 = array();
$arguments227['key'] = 'extensionList.distribution.key';
$arguments227['id'] = NULL;
$arguments227['default'] = NULL;
$arguments227['htmlEscape'] = NULL;
$arguments227['arguments'] = NULL;
$arguments227['extensionName'] = NULL;
$renderChildrenClosure228 = function() {return NULL;};

$output146 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output146 .= '</dt>
				<dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments229 = array();
$arguments229['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'extensionKey', $renderingContext);
$arguments229['keepQuotes'] = false;
$arguments229['encoding'] = NULL;
$arguments229['doubleEncode'] = true;
$renderChildrenClosure230 = function() {return NULL;};
$value231 = ($arguments229['value'] !== NULL ? $arguments229['value'] : $renderChildrenClosure230());

$output146 .= (!is_string($value231) ? $value231 : htmlspecialchars($value231, ($arguments229['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments229['encoding'] !== NULL ? $arguments229['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments229['doubleEncode']));

$output146 .= '</dd>
				<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments232 = array();
$arguments232['key'] = 'extensionList.distribution.version';
$arguments232['id'] = NULL;
$arguments232['default'] = NULL;
$arguments232['htmlEscape'] = NULL;
$arguments232['arguments'] = NULL;
$arguments232['extensionName'] = NULL;
$renderChildrenClosure233 = function() {return NULL;};

$output146 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);

$output146 .= '</dt>
				<dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments234 = array();
$arguments234['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'version', $renderingContext);
$arguments234['keepQuotes'] = false;
$arguments234['encoding'] = NULL;
$arguments234['doubleEncode'] = true;
$renderChildrenClosure235 = function() {return NULL;};
$value236 = ($arguments234['value'] !== NULL ? $arguments234['value'] : $renderChildrenClosure235());

$output146 .= (!is_string($value236) ? $value236 : htmlspecialchars($value236, ($arguments234['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments234['encoding'] !== NULL ? $arguments234['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments234['doubleEncode']));

$output146 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments237 = array();
$arguments237['format'] = 'd.m.Y';
$arguments237['date'] = NULL;
$arguments237['base'] = NULL;
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'lastUpdated', $renderingContext);
};

$output146 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output146 .= ')<br><span class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments239 = array();
$arguments239['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'stateString', $renderingContext);
$arguments239['keepQuotes'] = false;
$arguments239['encoding'] = NULL;
$arguments239['doubleEncode'] = true;
$renderChildrenClosure240 = function() {return NULL;};
$value241 = ($arguments239['value'] !== NULL ? $arguments239['value'] : $renderChildrenClosure240());

$output146 .= (!is_string($value241) ? $value241 : htmlspecialchars($value241, ($arguments239['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments239['encoding'] !== NULL ? $arguments239['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments239['doubleEncode']));

$output146 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments242 = array();
$arguments242['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'stateString', $renderingContext);
$arguments242['keepQuotes'] = false;
$arguments242['encoding'] = NULL;
$arguments242['doubleEncode'] = true;
$renderChildrenClosure243 = function() {return NULL;};
$value244 = ($arguments242['value'] !== NULL ? $arguments242['value'] : $renderChildrenClosure243());

$output146 .= (!is_string($value244) ? $value244 : htmlspecialchars($value244, ($arguments242['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments242['encoding'] !== NULL ? $arguments242['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments242['doubleEncode']));

$output146 .= '</span></dd>
				<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments245 = array();
$arguments245['key'] = 'extensionList.distribution.author';
$arguments245['id'] = NULL;
$arguments245['default'] = NULL;
$arguments245['htmlEscape'] = NULL;
$arguments245['arguments'] = NULL;
$arguments245['extensionName'] = NULL;
$renderChildrenClosure246 = function() {return NULL;};

$output146 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output146 .= '</dt>
				<dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments247 = array();
$arguments247['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'authorName', $renderingContext);
$arguments247['keepQuotes'] = false;
$arguments247['encoding'] = NULL;
$arguments247['doubleEncode'] = true;
$renderChildrenClosure248 = function() {return NULL;};
$value249 = ($arguments247['value'] !== NULL ? $arguments247['value'] : $renderChildrenClosure248());

$output146 .= (!is_string($value249) ? $value249 : htmlspecialchars($value249, ($arguments247['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments247['encoding'] !== NULL ? $arguments247['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments247['doubleEncode']));

$output146 .= '</dd>
				<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments250 = array();
$arguments250['key'] = 'extensionList.distribution.downloads';
$arguments250['id'] = NULL;
$arguments250['default'] = NULL;
$arguments250['htmlEscape'] = NULL;
$arguments250['arguments'] = NULL;
$arguments250['extensionName'] = NULL;
$renderChildrenClosure251 = function() {return NULL;};

$output146 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output146 .= '</dt>
				<dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments252 = array();
$arguments252['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'alldownloadcounter', $renderingContext);
$arguments252['keepQuotes'] = false;
$arguments252['encoding'] = NULL;
$arguments252['doubleEncode'] = true;
$renderChildrenClosure253 = function() {return NULL;};
$value254 = ($arguments252['value'] !== NULL ? $arguments252['value'] : $renderChildrenClosure253());

$output146 .= (!is_string($value254) ? $value254 : htmlspecialchars($value254, ($arguments252['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments252['encoding'] !== NULL ? $arguments252['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments252['doubleEncode']));

$output146 .= '</dd>
			</dl>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments255 = array();
// Rendering Boolean node
$arguments255['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'dependencies', $renderingContext));
$arguments255['then'] = NULL;
$arguments255['else'] = NULL;
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output257 = '';

$output257 .= '
				<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments258 = array();
$arguments258['key'] = 'distribution.dependency.headline';
$arguments258['id'] = NULL;
$arguments258['default'] = NULL;
$arguments258['htmlEscape'] = NULL;
$arguments258['arguments'] = NULL;
$arguments258['extensionName'] = NULL;
$renderChildrenClosure259 = function() {return NULL;};

$output257 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext);

$output257 .= '</h2>
				<table class="table table-striped table-hover">
					<thead>
						<tr class="t3-row-header">
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments260 = array();
$arguments260['key'] = 'distribution.dependency.identifier';
$arguments260['id'] = NULL;
$arguments260['default'] = NULL;
$arguments260['htmlEscape'] = NULL;
$arguments260['arguments'] = NULL;
$arguments260['extensionName'] = NULL;
$renderChildrenClosure261 = function() {return NULL;};

$output257 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output257 .= '</td>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments262 = array();
$arguments262['key'] = 'distribution.dependency.type';
$arguments262['id'] = NULL;
$arguments262['default'] = NULL;
$arguments262['htmlEscape'] = NULL;
$arguments262['arguments'] = NULL;
$arguments262['extensionName'] = NULL;
$renderChildrenClosure263 = function() {return NULL;};

$output257 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext);

$output257 .= '</td>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments264 = array();
$arguments264['key'] = 'distribution.dependency.version';
$arguments264['id'] = NULL;
$arguments264['default'] = NULL;
$arguments264['htmlEscape'] = NULL;
$arguments264['arguments'] = NULL;
$arguments264['extensionName'] = NULL;
$renderChildrenClosure265 = function() {return NULL;};

$output257 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext);

$output257 .= '</td>
						</tr>
					</thead>
					<tbody>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments266 = array();
$arguments266['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'dependencies', $renderingContext);
$arguments266['as'] = 'dependency';
$arguments266['key'] = '';
$arguments266['reverse'] = false;
$arguments266['iteration'] = NULL;
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output268 = '';

$output268 .= '
							<tr>
								<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments269 = array();
$arguments269['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dependency'), 'identifier', $renderingContext);
$arguments269['keepQuotes'] = false;
$arguments269['encoding'] = NULL;
$arguments269['doubleEncode'] = true;
$renderChildrenClosure270 = function() {return NULL;};
$value271 = ($arguments269['value'] !== NULL ? $arguments269['value'] : $renderChildrenClosure270());

$output268 .= (!is_string($value271) ? $value271 : htmlspecialchars($value271, ($arguments269['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments269['encoding'] !== NULL ? $arguments269['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments269['doubleEncode']));

$output268 .= '</td>
								<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments272 = array();
$arguments272['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dependency'), 'type', $renderingContext);
$arguments272['keepQuotes'] = false;
$arguments272['encoding'] = NULL;
$arguments272['doubleEncode'] = true;
$renderChildrenClosure273 = function() {return NULL;};
$value274 = ($arguments272['value'] !== NULL ? $arguments272['value'] : $renderChildrenClosure273());

$output268 .= (!is_string($value274) ? $value274 : htmlspecialchars($value274, ($arguments272['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments272['encoding'] !== NULL ? $arguments272['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments272['doubleEncode']));

$output268 .= '</td>
								<td>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments275 = array();
$arguments275['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dependency'), 'lowestVersion', $renderingContext);
$arguments275['keepQuotes'] = false;
$arguments275['encoding'] = NULL;
$arguments275['doubleEncode'] = true;
$renderChildrenClosure276 = function() {return NULL;};
$value277 = ($arguments275['value'] !== NULL ? $arguments275['value'] : $renderChildrenClosure276());

$output268 .= (!is_string($value277) ? $value277 : htmlspecialchars($value277, ($arguments275['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments275['encoding'] !== NULL ? $arguments275['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments275['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments278 = array();
// Rendering Boolean node
$arguments278['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dependency'), 'highestVersion', $renderingContext));
$arguments278['then'] = NULL;
$arguments278['else'] = NULL;
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output280 = '';

$output280 .= '-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments281 = array();
$arguments281['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dependency'), 'highestVersion', $renderingContext);
$arguments281['keepQuotes'] = false;
$arguments281['encoding'] = NULL;
$arguments281['doubleEncode'] = true;
$renderChildrenClosure282 = function() {return NULL;};
$value283 = ($arguments281['value'] !== NULL ? $arguments281['value'] : $renderChildrenClosure282());

$output280 .= (!is_string($value283) ? $value283 : htmlspecialchars($value283, ($arguments281['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments281['encoding'] !== NULL ? $arguments281['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments281['doubleEncode']));
return $output280;
};

$output268 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);

$output268 .= '
								</td>
							</tr>
						';
return $output268;
};

$output257 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);

$output257 .= '
					</tbody>
				</table>
			';
return $output257;
};

$output146 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output146 .= '
		</div>
	</div>
';
return $output146;
};

$output138 .= '';

$output138 .= '
';


return $output138;
}


}
#1458755575    84184     