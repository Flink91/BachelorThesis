<?php
class FluidCache_Dce_DceModule_action_index_9d8d02ad2d78412936f154bd7cafc0f0b0aef828 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'Backend';
}
public function hasLayout() {
return TRUE;
}

/**
 * section functions
 */
public function section_2f887def33825e52ffbcca83446cfd6a6f676ff7(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\IncludeCssFileViewHelper
$arguments1 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments2 = array();
$arguments2['path'] = 'Css/dceModule.css';
$arguments2['extensionName'] = 'dce';
$arguments2['absolute'] = false;
$renderChildrenClosure3 = function() {return NULL;};
$arguments1['path'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);
$renderChildrenClosure4 = function() {return NULL;};
$viewHelper5 = $self->getViewHelper('$viewHelper5', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\IncludeCssFileViewHelper');
$viewHelper5->setArguments($arguments1);
$viewHelper5->setRenderingContext($renderingContext);
$viewHelper5->setRenderChildrenClosure($renderChildrenClosure4);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\IncludeCssFileViewHelper

$output0 .= $viewHelper5->initializeArgumentsAndRender();

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments6 = array();
// Rendering Boolean node
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper
$arguments7 = array();
// Rendering Boolean node
$arguments7['returnInt'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$renderChildrenClosure8 = function() {return NULL;};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper
$arguments6['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', $viewHelper9->initializeArgumentsAndRender(), 7000000);
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
		';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\IncludeCssFileViewHelper
$arguments12 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments13 = array();
$arguments13['path'] = 'Css/Contrib/bootstrap.min.css';
$arguments13['extensionName'] = 'dce';
$arguments13['absolute'] = false;
$renderChildrenClosure14 = function() {return NULL;};
$arguments12['path'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);
$renderChildrenClosure15 = function() {return NULL;};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\IncludeCssFileViewHelper');
$viewHelper16->setArguments($arguments12);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\IncludeCssFileViewHelper

$output11 .= $viewHelper16->initializeArgumentsAndRender();

$output11 .= '
		';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\IncludeJsFileViewHelper
$arguments17 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments18 = array();
$arguments18['path'] = 'JavaScript/Contrib/bootstrap.js';
$arguments18['extensionName'] = 'dce';
$arguments18['absolute'] = false;
$renderChildrenClosure19 = function() {return NULL;};
$arguments17['path'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);
$renderChildrenClosure20 = function() {return NULL;};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\IncludeJsFileViewHelper');
$viewHelper21->setArguments($arguments17);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\IncludeJsFileViewHelper

$output11 .= $viewHelper21->initializeArgumentsAndRender();

$output11 .= '
		';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\IncludeCssFileViewHelper
$arguments22 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments23 = array();
$arguments23['path'] = 'Css/dceModule62.css';
$arguments23['extensionName'] = 'dce';
$arguments23['absolute'] = false;
$renderChildrenClosure24 = function() {return NULL;};
$arguments22['path'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);
$renderChildrenClosure25 = function() {return NULL;};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\IncludeCssFileViewHelper');
$viewHelper26->setArguments($arguments22);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\IncludeCssFileViewHelper

$output11 .= $viewHelper26->initializeArgumentsAndRender();

$output11 .= '
	';
return $output11;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure10, $renderingContext);

$output0 .= '
';


return $output0;
}
/**
 * section buttons
 */
public function section_23396acb661dc28e4b66873f58265af6e5121de3(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output27 = '';

$output27 .= '
	<h4 class="dceHeader">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments28 = array();
$arguments28['class'] = 'bg-pink bg-logo';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments29 = array();
$arguments29['path'] = 'Icons/ext_icon_white.png';
$arguments29['extensionName'] = NULL;
$arguments29['absolute'] = false;
$renderChildrenClosure30 = function() {return NULL;};
$arguments28['src'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments31 = array();
$arguments31['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang_mod.xml:mlang_labels_tablabel';
$arguments31['id'] = NULL;
$arguments31['default'] = NULL;
$arguments31['htmlEscape'] = NULL;
$arguments31['arguments'] = NULL;
$arguments31['extensionName'] = NULL;
$renderChildrenClosure32 = function() {return NULL;};
$arguments28['alt'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['width'] = NULL;
$arguments28['height'] = NULL;
$arguments28['minWidth'] = NULL;
$arguments28['minHeight'] = NULL;
$arguments28['maxWidth'] = NULL;
$arguments28['maxHeight'] = NULL;
$arguments28['treatIdAsReference'] = false;
$arguments28['image'] = NULL;
$arguments28['crop'] = NULL;
$arguments28['absolute'] = false;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['ismap'] = NULL;
$arguments28['longdesc'] = NULL;
$arguments28['usemap'] = NULL;
$renderChildrenClosure33 = function() {return NULL;};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper34->setArguments($arguments28);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output27 .= $viewHelper34->initializeArgumentsAndRender();

$output27 .= '
		<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments35 = array();
$arguments35['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang_mod.xml:mlang_labels_tablabel';
$arguments35['id'] = NULL;
$arguments35['default'] = NULL;
$arguments35['htmlEscape'] = NULL;
$arguments35['arguments'] = NULL;
$arguments35['extensionName'] = NULL;
$renderChildrenClosure36 = function() {return NULL;};

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output27 .= '</span>
		<span class="dceVersion">';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\DceViewHelper
$arguments37 = array();
$arguments37['returnInt'] = false;
$renderChildrenClosure38 = function() {return NULL;};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\Version\DceViewHelper');
$viewHelper39->setArguments($arguments37);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure38);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\DceViewHelper

$output27 .= $viewHelper39->initializeArgumentsAndRender();

$output27 .= '</span>
	</h4>
';


return $output27;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output40 = '';

$output40 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments41 = array();
// Rendering Array
$array42 = array();
$array42['lll'] = 'LLL:EXT:dce/Resources/Private/Language/locallang_mod.xml:';
$arguments41['map'] = $array42;
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output44 = '';

$output44 .= '
		<div class="row space-bottom">
			<div class="col-lg-12">
				<div class="nav-group">
					<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments45 = array();
$arguments45['partial'] = 'Module/NewDceLink';
$arguments45['section'] = NULL;
$arguments45['arguments'] = array (
);
$arguments45['optional'] = false;
$renderChildrenClosure46 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '" class="btn btn-primary">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments47 = array();
$output48 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments49 = array();
$arguments49['value'] = $currentVariableContainer->getOrNull('lll');
$arguments49['keepQuotes'] = false;
$arguments49['encoding'] = NULL;
$arguments49['doubleEncode'] = true;
$renderChildrenClosure50 = function() {return NULL;};
$value51 = ($arguments49['value'] !== NULL ? $arguments49['value'] : $renderChildrenClosure50());

$output48 .= (!is_string($value51) ? $value51 : htmlspecialchars($value51, ($arguments49['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments49['encoding'] !== NULL ? $arguments49['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments49['doubleEncode']));

$output48 .= 'createNewDce';
$arguments47['key'] = $output48;
$arguments47['id'] = NULL;
$arguments47['default'] = NULL;
$arguments47['htmlEscape'] = NULL;
$arguments47['arguments'] = NULL;
$arguments47['extensionName'] = NULL;
$renderChildrenClosure52 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments47, $renderChildrenClosure52, $renderingContext);

$output44 .= '</a>
					<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper
$arguments53 = array();
// Rendering Array
$array54 = array();
$array54['M'] = 'web_list';
$array54['id'] = '0';
$array54['table'] = 'tx_dce_domain_model_dce';
$array54['imagemode'] = '1';
$arguments53['additionalParams'] = $array54;
$arguments53['pageUid'] = NULL;
$arguments53['pageType'] = 0;
$arguments53['noCache'] = false;
$arguments53['noCacheHash'] = false;
$arguments53['section'] = '';
$arguments53['linkAccessRestrictedPages'] = false;
$arguments53['absolute'] = false;
$arguments53['addQueryString'] = false;
$arguments53['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments53['addQueryStringMethod'] = NULL;
$renderChildrenClosure55 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper::renderStatic($arguments53, $renderChildrenClosure55, $renderingContext);

$output44 .= '" class="btn btn-default">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments56 = array();
$output57 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments58 = array();
$arguments58['value'] = $currentVariableContainer->getOrNull('lll');
$arguments58['keepQuotes'] = false;
$arguments58['encoding'] = NULL;
$arguments58['doubleEncode'] = true;
$renderChildrenClosure59 = function() {return NULL;};
$value60 = ($arguments58['value'] !== NULL ? $arguments58['value'] : $renderChildrenClosure59());

$output57 .= (!is_string($value60) ? $value60 : htmlspecialchars($value60, ($arguments58['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments58['encoding'] !== NULL ? $arguments58['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments58['doubleEncode']));

$output57 .= 'goToListView';
$arguments56['key'] = $output57;
$arguments56['id'] = NULL;
$arguments56['default'] = NULL;
$arguments56['htmlEscape'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['extensionName'] = NULL;
$renderChildrenClosure61 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure61, $renderingContext);

$output44 .= '</a>
				</div>

				<div class="nav-group">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments62 = array();
$arguments62['action'] = 'hallOfFame';
$arguments62['class'] = 'btn btn-default';
$arguments62['additionalAttributes'] = NULL;
$arguments62['data'] = NULL;
$arguments62['arguments'] = array (
);
$arguments62['controller'] = NULL;
$arguments62['extensionName'] = NULL;
$arguments62['pluginName'] = NULL;
$arguments62['pageUid'] = NULL;
$arguments62['pageType'] = 0;
$arguments62['noCache'] = false;
$arguments62['noCacheHash'] = false;
$arguments62['section'] = '';
$arguments62['format'] = '';
$arguments62['linkAccessRestrictedPages'] = false;
$arguments62['additionalParams'] = array (
);
$arguments62['absolute'] = false;
$arguments62['addQueryString'] = false;
$arguments62['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments62['addQueryStringMethod'] = NULL;
$arguments62['dir'] = NULL;
$arguments62['id'] = NULL;
$arguments62['lang'] = NULL;
$arguments62['style'] = NULL;
$arguments62['title'] = NULL;
$arguments62['accesskey'] = NULL;
$arguments62['tabindex'] = NULL;
$arguments62['onclick'] = NULL;
$arguments62['name'] = NULL;
$arguments62['rel'] = NULL;
$arguments62['rev'] = NULL;
$arguments62['target'] = NULL;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments64 = array();
$output65 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments66 = array();
$arguments66['value'] = $currentVariableContainer->getOrNull('lll');
$arguments66['keepQuotes'] = false;
$arguments66['encoding'] = NULL;
$arguments66['doubleEncode'] = true;
$renderChildrenClosure67 = function() {return NULL;};
$value68 = ($arguments66['value'] !== NULL ? $arguments66['value'] : $renderChildrenClosure67());

$output65 .= (!is_string($value68) ? $value68 : htmlspecialchars($value68, ($arguments66['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments66['encoding'] !== NULL ? $arguments66['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments66['doubleEncode']));

$output65 .= 'hallOfFame';
$arguments64['key'] = $output65;
$arguments64['id'] = NULL;
$arguments64['default'] = NULL;
$arguments64['htmlEscape'] = NULL;
$arguments64['arguments'] = NULL;
$arguments64['extensionName'] = NULL;
$renderChildrenClosure69 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure69, $renderingContext);
};
$viewHelper70 = $self->getViewHelper('$viewHelper70', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper70->setArguments($arguments62);
$viewHelper70->setRenderingContext($renderingContext);
$viewHelper70->setRenderChildrenClosure($renderChildrenClosure63);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output44 .= $viewHelper70->initializeArgumentsAndRender();

$output44 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments71 = array();
$arguments71['partial'] = 'Module/Donate';
$arguments71['section'] = NULL;
$arguments71['arguments'] = array (
);
$arguments71['optional'] = false;
$renderChildrenClosure72 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output44 .= '
				</div>

				<div class="nav-group">
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments73 = array();
$output74 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments75 = array();
$arguments75['value'] = $currentVariableContainer->getOrNull('lll');
$arguments75['keepQuotes'] = false;
$arguments75['encoding'] = NULL;
$arguments75['doubleEncode'] = true;
$renderChildrenClosure76 = function() {return NULL;};
$value77 = ($arguments75['value'] !== NULL ? $arguments75['value'] : $renderChildrenClosure76());

$output74 .= (!is_string($value77) ? $value77 : htmlspecialchars($value77, ($arguments75['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments75['encoding'] !== NULL ? $arguments75['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments75['doubleEncode']));

$output74 .= 'help';
$arguments73['key'] = $output74;
$arguments73['id'] = NULL;
$arguments73['default'] = NULL;
$arguments73['htmlEscape'] = NULL;
$arguments73['arguments'] = NULL;
$arguments73['extensionName'] = NULL;
$renderChildrenClosure78 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments73, $renderChildrenClosure78, $renderingContext);

$output44 .= ' <span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a target="_blank" href="https://docs.typo3.org/typo3cms/extensions/dce/">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments79 = array();
$output80 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments81 = array();
$arguments81['value'] = $currentVariableContainer->getOrNull('lll');
$arguments81['keepQuotes'] = false;
$arguments81['encoding'] = NULL;
$arguments81['doubleEncode'] = true;
$renderChildrenClosure82 = function() {return NULL;};
$value83 = ($arguments81['value'] !== NULL ? $arguments81['value'] : $renderChildrenClosure82());

$output80 .= (!is_string($value83) ? $value83 : htmlspecialchars($value83, ($arguments81['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments81['encoding'] !== NULL ? $arguments81['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments81['doubleEncode']));

$output80 .= 'help.manual';
$arguments79['key'] = $output80;
$arguments79['id'] = NULL;
$arguments79['default'] = NULL;
$arguments79['htmlEscape'] = NULL;
$arguments79['arguments'] = NULL;
$arguments79['extensionName'] = NULL;
$renderChildrenClosure84 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments79, $renderChildrenClosure84, $renderingContext);

$output44 .= '</a></li>
							<li><a target="_blank" href="https://forge.typo3.org/projects/extension-dce/wiki/">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments85 = array();
$output86 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments87 = array();
$arguments87['value'] = $currentVariableContainer->getOrNull('lll');
$arguments87['keepQuotes'] = false;
$arguments87['encoding'] = NULL;
$arguments87['doubleEncode'] = true;
$renderChildrenClosure88 = function() {return NULL;};
$value89 = ($arguments87['value'] !== NULL ? $arguments87['value'] : $renderChildrenClosure88());

$output86 .= (!is_string($value89) ? $value89 : htmlspecialchars($value89, ($arguments87['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments87['encoding'] !== NULL ? $arguments87['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments87['doubleEncode']));

$output86 .= 'help.wiki';
$arguments85['key'] = $output86;
$arguments85['id'] = NULL;
$arguments85['default'] = NULL;
$arguments85['htmlEscape'] = NULL;
$arguments85['arguments'] = NULL;
$arguments85['extensionName'] = NULL;
$renderChildrenClosure90 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments85, $renderChildrenClosure90, $renderingContext);

$output44 .= '</a></li>
							<li class="divider"></li>
							<li><a target="_blank" href="https://www.facebook.com/TYPO3.DCE.Extension">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments91 = array();
$output92 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments93 = array();
$arguments93['value'] = $currentVariableContainer->getOrNull('lll');
$arguments93['keepQuotes'] = false;
$arguments93['encoding'] = NULL;
$arguments93['doubleEncode'] = true;
$renderChildrenClosure94 = function() {return NULL;};
$value95 = ($arguments93['value'] !== NULL ? $arguments93['value'] : $renderChildrenClosure94());

$output92 .= (!is_string($value95) ? $value95 : htmlspecialchars($value95, ($arguments93['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments93['encoding'] !== NULL ? $arguments93['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments93['doubleEncode']));

$output92 .= 'help.facebook';
$arguments91['key'] = $output92;
$arguments91['id'] = NULL;
$arguments91['default'] = NULL;
$arguments91['htmlEscape'] = NULL;
$arguments91['arguments'] = NULL;
$arguments91['extensionName'] = NULL;
$renderChildrenClosure96 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments91, $renderChildrenClosure96, $renderingContext);

$output44 .= '</a></li>
							<li><a target="_blank" href="https://bitbucket.org/ArminVieweg/dce/">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments97 = array();
$output98 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments99 = array();
$arguments99['value'] = $currentVariableContainer->getOrNull('lll');
$arguments99['keepQuotes'] = false;
$arguments99['encoding'] = NULL;
$arguments99['doubleEncode'] = true;
$renderChildrenClosure100 = function() {return NULL;};
$value101 = ($arguments99['value'] !== NULL ? $arguments99['value'] : $renderChildrenClosure100());

$output98 .= (!is_string($value101) ? $value101 : htmlspecialchars($value101, ($arguments99['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments99['encoding'] !== NULL ? $arguments99['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments99['doubleEncode']));

$output98 .= 'help.bitbucket';
$arguments97['key'] = $output98;
$arguments97['id'] = NULL;
$arguments97['default'] = NULL;
$arguments97['htmlEscape'] = NULL;
$arguments97['arguments'] = NULL;
$arguments97['extensionName'] = NULL;
$renderChildrenClosure102 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments97, $renderChildrenClosure102, $renderingContext);

$output44 .= '</a></li>

						</ul>
					</div>
				</div>

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments103 = array();
// Rendering Boolean node
$arguments103['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('enableUpdateCheck'));
$arguments103['then'] = NULL;
$arguments103['else'] = NULL;
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output105 = '';

$output105 .= '
					<div class="nav-group updateCheck">
						<a href="http://dce.v.ieweg.de/versioncheck/update" target="_blank"><img src="http://dce.v.ieweg.de/versioncheck?t3=';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper
$arguments106 = array();
$arguments106['returnInt'] = false;
$renderChildrenClosure107 = function() {return NULL;};
$viewHelper108 = $self->getViewHelper('$viewHelper108', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper');
$viewHelper108->setArguments($arguments106);
$viewHelper108->setRenderingContext($renderingContext);
$viewHelper108->setRenderChildrenClosure($renderChildrenClosure107);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper

$output105 .= $viewHelper108->initializeArgumentsAndRender();

$output105 .= '&amp;dce=';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\DceViewHelper
$arguments109 = array();
$arguments109['returnInt'] = false;
$renderChildrenClosure110 = function() {return NULL;};
$viewHelper111 = $self->getViewHelper('$viewHelper111', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\Version\DceViewHelper');
$viewHelper111->setArguments($arguments109);
$viewHelper111->setRenderingContext($renderingContext);
$viewHelper111->setRenderChildrenClosure($renderChildrenClosure110);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\DceViewHelper

$output105 .= $viewHelper111->initializeArgumentsAndRender();

$output105 .= '&amp;l=';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\CurrentLanguageViewHelper
$arguments112 = array();
$renderChildrenClosure113 = function() {return NULL;};
$viewHelper114 = $self->getViewHelper('$viewHelper114', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\CurrentLanguageViewHelper');
$viewHelper114->setArguments($arguments112);
$viewHelper114->setRenderingContext($renderingContext);
$viewHelper114->setRenderChildrenClosure($renderChildrenClosure113);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\CurrentLanguageViewHelper

$output105 .= $viewHelper114->initializeArgumentsAndRender();

$output105 .= '" alt="" /></a>
					</div>
				';
return $output105;
};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output44 .= '
			</div>
		</div>
		<div class="row space-bottom">
			<div class="col-lg-10">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>DCEs</th>
							<th>Status</th>
							<th>UID</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments115 = array();
$output116 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments117 = array();
$arguments117['value'] = $currentVariableContainer->getOrNull('lll');
$arguments117['keepQuotes'] = false;
$arguments117['encoding'] = NULL;
$arguments117['doubleEncode'] = true;
$renderChildrenClosure118 = function() {return NULL;};
$value119 = ($arguments117['value'] !== NULL ? $arguments117['value'] : $renderChildrenClosure118());

$output116 .= (!is_string($value119) ? $value119 : htmlspecialchars($value119, ($arguments117['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments117['encoding'] !== NULL ? $arguments117['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments117['doubleEncode']));

$output116 .= 'usage';
$arguments115['key'] = $output116;
$arguments115['id'] = NULL;
$arguments115['default'] = NULL;
$arguments115['htmlEscape'] = NULL;
$arguments115['arguments'] = NULL;
$arguments115['extensionName'] = NULL;
$renderChildrenClosure120 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments115, $renderChildrenClosure120, $renderingContext);

$output44 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments121 = array();
$output122 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments123 = array();
$arguments123['value'] = $currentVariableContainer->getOrNull('lll');
$arguments123['keepQuotes'] = false;
$arguments123['encoding'] = NULL;
$arguments123['doubleEncode'] = true;
$renderChildrenClosure124 = function() {return NULL;};
$value125 = ($arguments123['value'] !== NULL ? $arguments123['value'] : $renderChildrenClosure124());

$output122 .= (!is_string($value125) ? $value125 : htmlspecialchars($value125, ($arguments123['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments123['encoding'] !== NULL ? $arguments123['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments123['doubleEncode']));

$output122 .= 'dceStats';
$arguments121['key'] = $output122;
$arguments121['id'] = NULL;
$arguments121['default'] = NULL;
$arguments121['htmlEscape'] = NULL;
$arguments121['arguments'] = NULL;
$arguments121['extensionName'] = NULL;
$renderChildrenClosure126 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments121, $renderChildrenClosure126, $renderingContext);

$output44 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments127 = array();
$output128 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments129 = array();
$arguments129['value'] = $currentVariableContainer->getOrNull('lll');
$arguments129['keepQuotes'] = false;
$arguments129['encoding'] = NULL;
$arguments129['doubleEncode'] = true;
$renderChildrenClosure130 = function() {return NULL;};
$value131 = ($arguments129['value'] !== NULL ? $arguments129['value'] : $renderChildrenClosure130());

$output128 .= (!is_string($value131) ? $value131 : htmlspecialchars($value131, ($arguments129['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments129['encoding'] !== NULL ? $arguments129['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments129['doubleEncode']));

$output128 .= 'fieldStats';
$arguments127['key'] = $output128;
$arguments127['id'] = NULL;
$arguments127['default'] = NULL;
$arguments127['htmlEscape'] = NULL;
$arguments127['arguments'] = NULL;
$arguments127['extensionName'] = NULL;
$renderChildrenClosure132 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments127, $renderChildrenClosure132, $renderingContext);

$output44 .= '</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments133 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments134 = array();
$arguments134['subject'] = NULL;
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('dces');
};
$arguments133['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext), 0);
$arguments133['then'] = NULL;
$arguments133['else'] = NULL;
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output137 = '';

$output137 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments138 = array();
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output140 = '';

$output140 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments141 = array();
$arguments141['each'] = $currentVariableContainer->getOrNull('dces');
$arguments141['as'] = 'dce';
$arguments141['key'] = '';
$arguments141['reverse'] = false;
$arguments141['iteration'] = NULL;
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output143 = '';

$output143 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments144 = array();
$arguments144['partial'] = 'Module/DceListItem';
// Rendering Array
$array145 = array();
$array145['dce'] = $currentVariableContainer->getOrNull('dce');
$arguments144['arguments'] = $array145;
$arguments144['section'] = NULL;
$arguments144['optional'] = false;
$renderChildrenClosure146 = function() {return NULL;};

$output143 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments144, $renderChildrenClosure146, $renderingContext);

$output143 .= '
								';
return $output143;
};

$output140 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output140 .= '
							';
return $output140;
};

$output137 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments147 = array();
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output149 = '';

$output149 .= '
								<tr><td colspan="7"><em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments150 = array();
$output151 = '';

$output151 .= $currentVariableContainer->getOrNull('lll');

$output151 .= 'noDcesFound';
$arguments150['key'] = $output151;
$arguments150['id'] = NULL;
$arguments150['default'] = NULL;
$arguments150['htmlEscape'] = NULL;
$arguments150['arguments'] = NULL;
$arguments150['extensionName'] = NULL;
$renderChildrenClosure152 = function() {return NULL;};

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments150, $renderChildrenClosure152, $renderingContext);

$output149 .= '</em></td></tr>
							';
return $output149;
};

$output137 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output137 .= '
						';
return $output137;
};
$arguments133['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output153 = '';

$output153 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments154 = array();
$arguments154['each'] = $currentVariableContainer->getOrNull('dces');
$arguments154['as'] = 'dce';
$arguments154['key'] = '';
$arguments154['reverse'] = false;
$arguments154['iteration'] = NULL;
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output156 = '';

$output156 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments157 = array();
$arguments157['partial'] = 'Module/DceListItem';
// Rendering Array
$array158 = array();
$array158['dce'] = $currentVariableContainer->getOrNull('dce');
$arguments157['arguments'] = $array158;
$arguments157['section'] = NULL;
$arguments157['optional'] = false;
$renderChildrenClosure159 = function() {return NULL;};

$output156 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments157, $renderChildrenClosure159, $renderingContext);

$output156 .= '
								';
return $output156;
};

$output153 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output153 .= '
							';
return $output153;
};
$arguments133['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output160 = '';

$output160 .= '
								<tr><td colspan="7"><em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments161 = array();
$output162 = '';

$output162 .= $currentVariableContainer->getOrNull('lll');

$output162 .= 'noDcesFound';
$arguments161['key'] = $output162;
$arguments161['id'] = NULL;
$arguments161['default'] = NULL;
$arguments161['htmlEscape'] = NULL;
$arguments161['arguments'] = NULL;
$arguments161['extensionName'] = NULL;
$renderChildrenClosure163 = function() {return NULL;};

$output160 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments161, $renderChildrenClosure163, $renderingContext);

$output160 .= '</em></td></tr>
							';
return $output160;
};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments133, $renderChildrenClosure136, $renderingContext);

$output44 .= '

					</tbody>
				</table>
			</div>
		</div>
	';
return $output44;
};

$output40 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments41, $renderChildrenClosure43, $renderingContext);

$output40 .= '
';


return $output40;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output164 = '';

$output164 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments165 = array();
$arguments165['name'] = 'Backend';
$renderChildrenClosure166 = function() {return NULL;};
$viewHelper167 = $self->getViewHelper('$viewHelper167', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper167->setArguments($arguments165);
$viewHelper167->setRenderingContext($renderingContext);
$viewHelper167->setRenderChildrenClosure($renderChildrenClosure166);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output164 .= $viewHelper167->initializeArgumentsAndRender();

$output164 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments168 = array();
$arguments168['name'] = 'functions';
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output170 = '';

$output170 .= '
	';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\IncludeCssFileViewHelper
$arguments171 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments172 = array();
$arguments172['path'] = 'Css/dceModule.css';
$arguments172['extensionName'] = 'dce';
$arguments172['absolute'] = false;
$renderChildrenClosure173 = function() {return NULL;};
$arguments171['path'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);
$renderChildrenClosure174 = function() {return NULL;};
$viewHelper175 = $self->getViewHelper('$viewHelper175', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\IncludeCssFileViewHelper');
$viewHelper175->setArguments($arguments171);
$viewHelper175->setRenderingContext($renderingContext);
$viewHelper175->setRenderChildrenClosure($renderChildrenClosure174);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\IncludeCssFileViewHelper

$output170 .= $viewHelper175->initializeArgumentsAndRender();

$output170 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments176 = array();
// Rendering Boolean node
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper
$arguments177 = array();
// Rendering Boolean node
$arguments177['returnInt'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$renderChildrenClosure178 = function() {return NULL;};
$viewHelper179 = $self->getViewHelper('$viewHelper179', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper');
$viewHelper179->setArguments($arguments177);
$viewHelper179->setRenderingContext($renderingContext);
$viewHelper179->setRenderChildrenClosure($renderChildrenClosure178);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper
$arguments176['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', $viewHelper179->initializeArgumentsAndRender(), 7000000);
$arguments176['then'] = NULL;
$arguments176['else'] = NULL;
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output181 = '';

$output181 .= '
		';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\IncludeCssFileViewHelper
$arguments182 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments183 = array();
$arguments183['path'] = 'Css/Contrib/bootstrap.min.css';
$arguments183['extensionName'] = 'dce';
$arguments183['absolute'] = false;
$renderChildrenClosure184 = function() {return NULL;};
$arguments182['path'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);
$renderChildrenClosure185 = function() {return NULL;};
$viewHelper186 = $self->getViewHelper('$viewHelper186', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\IncludeCssFileViewHelper');
$viewHelper186->setArguments($arguments182);
$viewHelper186->setRenderingContext($renderingContext);
$viewHelper186->setRenderChildrenClosure($renderChildrenClosure185);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\IncludeCssFileViewHelper

$output181 .= $viewHelper186->initializeArgumentsAndRender();

$output181 .= '
		';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\IncludeJsFileViewHelper
$arguments187 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments188 = array();
$arguments188['path'] = 'JavaScript/Contrib/bootstrap.js';
$arguments188['extensionName'] = 'dce';
$arguments188['absolute'] = false;
$renderChildrenClosure189 = function() {return NULL;};
$arguments187['path'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);
$renderChildrenClosure190 = function() {return NULL;};
$viewHelper191 = $self->getViewHelper('$viewHelper191', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\IncludeJsFileViewHelper');
$viewHelper191->setArguments($arguments187);
$viewHelper191->setRenderingContext($renderingContext);
$viewHelper191->setRenderChildrenClosure($renderChildrenClosure190);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\IncludeJsFileViewHelper

$output181 .= $viewHelper191->initializeArgumentsAndRender();

$output181 .= '
		';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\IncludeCssFileViewHelper
$arguments192 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments193 = array();
$arguments193['path'] = 'Css/dceModule62.css';
$arguments193['extensionName'] = 'dce';
$arguments193['absolute'] = false;
$renderChildrenClosure194 = function() {return NULL;};
$arguments192['path'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);
$renderChildrenClosure195 = function() {return NULL;};
$viewHelper196 = $self->getViewHelper('$viewHelper196', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\IncludeCssFileViewHelper');
$viewHelper196->setArguments($arguments192);
$viewHelper196->setRenderingContext($renderingContext);
$viewHelper196->setRenderChildrenClosure($renderChildrenClosure195);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\IncludeCssFileViewHelper

$output181 .= $viewHelper196->initializeArgumentsAndRender();

$output181 .= '
	';
return $output181;
};

$output170 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments176, $renderChildrenClosure180, $renderingContext);

$output170 .= '
';
return $output170;
};

$output164 .= '';

$output164 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments197 = array();
$arguments197['name'] = 'buttons';
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output199 = '';

$output199 .= '
	<h4 class="dceHeader">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments200 = array();
$arguments200['class'] = 'bg-pink bg-logo';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments201 = array();
$arguments201['path'] = 'Icons/ext_icon_white.png';
$arguments201['extensionName'] = NULL;
$arguments201['absolute'] = false;
$renderChildrenClosure202 = function() {return NULL;};
$arguments200['src'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments203 = array();
$arguments203['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang_mod.xml:mlang_labels_tablabel';
$arguments203['id'] = NULL;
$arguments203['default'] = NULL;
$arguments203['htmlEscape'] = NULL;
$arguments203['arguments'] = NULL;
$arguments203['extensionName'] = NULL;
$renderChildrenClosure204 = function() {return NULL;};
$arguments200['alt'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);
$arguments200['additionalAttributes'] = NULL;
$arguments200['data'] = NULL;
$arguments200['width'] = NULL;
$arguments200['height'] = NULL;
$arguments200['minWidth'] = NULL;
$arguments200['minHeight'] = NULL;
$arguments200['maxWidth'] = NULL;
$arguments200['maxHeight'] = NULL;
$arguments200['treatIdAsReference'] = false;
$arguments200['image'] = NULL;
$arguments200['crop'] = NULL;
$arguments200['absolute'] = false;
$arguments200['dir'] = NULL;
$arguments200['id'] = NULL;
$arguments200['lang'] = NULL;
$arguments200['style'] = NULL;
$arguments200['title'] = NULL;
$arguments200['accesskey'] = NULL;
$arguments200['tabindex'] = NULL;
$arguments200['onclick'] = NULL;
$arguments200['ismap'] = NULL;
$arguments200['longdesc'] = NULL;
$arguments200['usemap'] = NULL;
$renderChildrenClosure205 = function() {return NULL;};
$viewHelper206 = $self->getViewHelper('$viewHelper206', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper206->setArguments($arguments200);
$viewHelper206->setRenderingContext($renderingContext);
$viewHelper206->setRenderChildrenClosure($renderChildrenClosure205);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output199 .= $viewHelper206->initializeArgumentsAndRender();

$output199 .= '
		<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments207 = array();
$arguments207['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang_mod.xml:mlang_labels_tablabel';
$arguments207['id'] = NULL;
$arguments207['default'] = NULL;
$arguments207['htmlEscape'] = NULL;
$arguments207['arguments'] = NULL;
$arguments207['extensionName'] = NULL;
$renderChildrenClosure208 = function() {return NULL;};

$output199 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output199 .= '</span>
		<span class="dceVersion">';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\DceViewHelper
$arguments209 = array();
$arguments209['returnInt'] = false;
$renderChildrenClosure210 = function() {return NULL;};
$viewHelper211 = $self->getViewHelper('$viewHelper211', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\Version\DceViewHelper');
$viewHelper211->setArguments($arguments209);
$viewHelper211->setRenderingContext($renderingContext);
$viewHelper211->setRenderChildrenClosure($renderChildrenClosure210);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\DceViewHelper

$output199 .= $viewHelper211->initializeArgumentsAndRender();

$output199 .= '</span>
	</h4>
';
return $output199;
};

$output164 .= '';

$output164 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments212 = array();
$arguments212['name'] = 'content';
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output214 = '';

$output214 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments215 = array();
// Rendering Array
$array216 = array();
$array216['lll'] = 'LLL:EXT:dce/Resources/Private/Language/locallang_mod.xml:';
$arguments215['map'] = $array216;
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output218 = '';

$output218 .= '
		<div class="row space-bottom">
			<div class="col-lg-12">
				<div class="nav-group">
					<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments219 = array();
$arguments219['partial'] = 'Module/NewDceLink';
$arguments219['section'] = NULL;
$arguments219['arguments'] = array (
);
$arguments219['optional'] = false;
$renderChildrenClosure220 = function() {return NULL;};

$output218 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output218 .= '" class="btn btn-primary">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments221 = array();
$output222 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments223 = array();
$arguments223['value'] = $currentVariableContainer->getOrNull('lll');
$arguments223['keepQuotes'] = false;
$arguments223['encoding'] = NULL;
$arguments223['doubleEncode'] = true;
$renderChildrenClosure224 = function() {return NULL;};
$value225 = ($arguments223['value'] !== NULL ? $arguments223['value'] : $renderChildrenClosure224());

$output222 .= (!is_string($value225) ? $value225 : htmlspecialchars($value225, ($arguments223['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments223['encoding'] !== NULL ? $arguments223['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments223['doubleEncode']));

$output222 .= 'createNewDce';
$arguments221['key'] = $output222;
$arguments221['id'] = NULL;
$arguments221['default'] = NULL;
$arguments221['htmlEscape'] = NULL;
$arguments221['arguments'] = NULL;
$arguments221['extensionName'] = NULL;
$renderChildrenClosure226 = function() {return NULL;};

$output218 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments221, $renderChildrenClosure226, $renderingContext);

$output218 .= '</a>
					<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper
$arguments227 = array();
// Rendering Array
$array228 = array();
$array228['M'] = 'web_list';
$array228['id'] = '0';
$array228['table'] = 'tx_dce_domain_model_dce';
$array228['imagemode'] = '1';
$arguments227['additionalParams'] = $array228;
$arguments227['pageUid'] = NULL;
$arguments227['pageType'] = 0;
$arguments227['noCache'] = false;
$arguments227['noCacheHash'] = false;
$arguments227['section'] = '';
$arguments227['linkAccessRestrictedPages'] = false;
$arguments227['absolute'] = false;
$arguments227['addQueryString'] = false;
$arguments227['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments227['addQueryStringMethod'] = NULL;
$renderChildrenClosure229 = function() {return NULL;};

$output218 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper::renderStatic($arguments227, $renderChildrenClosure229, $renderingContext);

$output218 .= '" class="btn btn-default">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments230 = array();
$output231 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments232 = array();
$arguments232['value'] = $currentVariableContainer->getOrNull('lll');
$arguments232['keepQuotes'] = false;
$arguments232['encoding'] = NULL;
$arguments232['doubleEncode'] = true;
$renderChildrenClosure233 = function() {return NULL;};
$value234 = ($arguments232['value'] !== NULL ? $arguments232['value'] : $renderChildrenClosure233());

$output231 .= (!is_string($value234) ? $value234 : htmlspecialchars($value234, ($arguments232['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments232['encoding'] !== NULL ? $arguments232['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments232['doubleEncode']));

$output231 .= 'goToListView';
$arguments230['key'] = $output231;
$arguments230['id'] = NULL;
$arguments230['default'] = NULL;
$arguments230['htmlEscape'] = NULL;
$arguments230['arguments'] = NULL;
$arguments230['extensionName'] = NULL;
$renderChildrenClosure235 = function() {return NULL;};

$output218 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments230, $renderChildrenClosure235, $renderingContext);

$output218 .= '</a>
				</div>

				<div class="nav-group">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments236 = array();
$arguments236['action'] = 'hallOfFame';
$arguments236['class'] = 'btn btn-default';
$arguments236['additionalAttributes'] = NULL;
$arguments236['data'] = NULL;
$arguments236['arguments'] = array (
);
$arguments236['controller'] = NULL;
$arguments236['extensionName'] = NULL;
$arguments236['pluginName'] = NULL;
$arguments236['pageUid'] = NULL;
$arguments236['pageType'] = 0;
$arguments236['noCache'] = false;
$arguments236['noCacheHash'] = false;
$arguments236['section'] = '';
$arguments236['format'] = '';
$arguments236['linkAccessRestrictedPages'] = false;
$arguments236['additionalParams'] = array (
);
$arguments236['absolute'] = false;
$arguments236['addQueryString'] = false;
$arguments236['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments236['addQueryStringMethod'] = NULL;
$arguments236['dir'] = NULL;
$arguments236['id'] = NULL;
$arguments236['lang'] = NULL;
$arguments236['style'] = NULL;
$arguments236['title'] = NULL;
$arguments236['accesskey'] = NULL;
$arguments236['tabindex'] = NULL;
$arguments236['onclick'] = NULL;
$arguments236['name'] = NULL;
$arguments236['rel'] = NULL;
$arguments236['rev'] = NULL;
$arguments236['target'] = NULL;
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments238 = array();
$output239 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments240 = array();
$arguments240['value'] = $currentVariableContainer->getOrNull('lll');
$arguments240['keepQuotes'] = false;
$arguments240['encoding'] = NULL;
$arguments240['doubleEncode'] = true;
$renderChildrenClosure241 = function() {return NULL;};
$value242 = ($arguments240['value'] !== NULL ? $arguments240['value'] : $renderChildrenClosure241());

$output239 .= (!is_string($value242) ? $value242 : htmlspecialchars($value242, ($arguments240['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments240['encoding'] !== NULL ? $arguments240['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments240['doubleEncode']));

$output239 .= 'hallOfFame';
$arguments238['key'] = $output239;
$arguments238['id'] = NULL;
$arguments238['default'] = NULL;
$arguments238['htmlEscape'] = NULL;
$arguments238['arguments'] = NULL;
$arguments238['extensionName'] = NULL;
$renderChildrenClosure243 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments238, $renderChildrenClosure243, $renderingContext);
};
$viewHelper244 = $self->getViewHelper('$viewHelper244', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper244->setArguments($arguments236);
$viewHelper244->setRenderingContext($renderingContext);
$viewHelper244->setRenderChildrenClosure($renderChildrenClosure237);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output218 .= $viewHelper244->initializeArgumentsAndRender();

$output218 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments245 = array();
$arguments245['partial'] = 'Module/Donate';
$arguments245['section'] = NULL;
$arguments245['arguments'] = array (
);
$arguments245['optional'] = false;
$renderChildrenClosure246 = function() {return NULL;};

$output218 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output218 .= '
				</div>

				<div class="nav-group">
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments247 = array();
$output248 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments249 = array();
$arguments249['value'] = $currentVariableContainer->getOrNull('lll');
$arguments249['keepQuotes'] = false;
$arguments249['encoding'] = NULL;
$arguments249['doubleEncode'] = true;
$renderChildrenClosure250 = function() {return NULL;};
$value251 = ($arguments249['value'] !== NULL ? $arguments249['value'] : $renderChildrenClosure250());

$output248 .= (!is_string($value251) ? $value251 : htmlspecialchars($value251, ($arguments249['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments249['encoding'] !== NULL ? $arguments249['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments249['doubleEncode']));

$output248 .= 'help';
$arguments247['key'] = $output248;
$arguments247['id'] = NULL;
$arguments247['default'] = NULL;
$arguments247['htmlEscape'] = NULL;
$arguments247['arguments'] = NULL;
$arguments247['extensionName'] = NULL;
$renderChildrenClosure252 = function() {return NULL;};

$output218 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments247, $renderChildrenClosure252, $renderingContext);

$output218 .= ' <span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a target="_blank" href="https://docs.typo3.org/typo3cms/extensions/dce/">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments253 = array();
$output254 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments255 = array();
$arguments255['value'] = $currentVariableContainer->getOrNull('lll');
$arguments255['keepQuotes'] = false;
$arguments255['encoding'] = NULL;
$arguments255['doubleEncode'] = true;
$renderChildrenClosure256 = function() {return NULL;};
$value257 = ($arguments255['value'] !== NULL ? $arguments255['value'] : $renderChildrenClosure256());

$output254 .= (!is_string($value257) ? $value257 : htmlspecialchars($value257, ($arguments255['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments255['encoding'] !== NULL ? $arguments255['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments255['doubleEncode']));

$output254 .= 'help.manual';
$arguments253['key'] = $output254;
$arguments253['id'] = NULL;
$arguments253['default'] = NULL;
$arguments253['htmlEscape'] = NULL;
$arguments253['arguments'] = NULL;
$arguments253['extensionName'] = NULL;
$renderChildrenClosure258 = function() {return NULL;};

$output218 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments253, $renderChildrenClosure258, $renderingContext);

$output218 .= '</a></li>
							<li><a target="_blank" href="https://forge.typo3.org/projects/extension-dce/wiki/">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments259 = array();
$output260 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments261 = array();
$arguments261['value'] = $currentVariableContainer->getOrNull('lll');
$arguments261['keepQuotes'] = false;
$arguments261['encoding'] = NULL;
$arguments261['doubleEncode'] = true;
$renderChildrenClosure262 = function() {return NULL;};
$value263 = ($arguments261['value'] !== NULL ? $arguments261['value'] : $renderChildrenClosure262());

$output260 .= (!is_string($value263) ? $value263 : htmlspecialchars($value263, ($arguments261['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments261['encoding'] !== NULL ? $arguments261['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments261['doubleEncode']));

$output260 .= 'help.wiki';
$arguments259['key'] = $output260;
$arguments259['id'] = NULL;
$arguments259['default'] = NULL;
$arguments259['htmlEscape'] = NULL;
$arguments259['arguments'] = NULL;
$arguments259['extensionName'] = NULL;
$renderChildrenClosure264 = function() {return NULL;};

$output218 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments259, $renderChildrenClosure264, $renderingContext);

$output218 .= '</a></li>
							<li class="divider"></li>
							<li><a target="_blank" href="https://www.facebook.com/TYPO3.DCE.Extension">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments265 = array();
$output266 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments267 = array();
$arguments267['value'] = $currentVariableContainer->getOrNull('lll');
$arguments267['keepQuotes'] = false;
$arguments267['encoding'] = NULL;
$arguments267['doubleEncode'] = true;
$renderChildrenClosure268 = function() {return NULL;};
$value269 = ($arguments267['value'] !== NULL ? $arguments267['value'] : $renderChildrenClosure268());

$output266 .= (!is_string($value269) ? $value269 : htmlspecialchars($value269, ($arguments267['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments267['encoding'] !== NULL ? $arguments267['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments267['doubleEncode']));

$output266 .= 'help.facebook';
$arguments265['key'] = $output266;
$arguments265['id'] = NULL;
$arguments265['default'] = NULL;
$arguments265['htmlEscape'] = NULL;
$arguments265['arguments'] = NULL;
$arguments265['extensionName'] = NULL;
$renderChildrenClosure270 = function() {return NULL;};

$output218 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments265, $renderChildrenClosure270, $renderingContext);

$output218 .= '</a></li>
							<li><a target="_blank" href="https://bitbucket.org/ArminVieweg/dce/">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments271 = array();
$output272 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments273 = array();
$arguments273['value'] = $currentVariableContainer->getOrNull('lll');
$arguments273['keepQuotes'] = false;
$arguments273['encoding'] = NULL;
$arguments273['doubleEncode'] = true;
$renderChildrenClosure274 = function() {return NULL;};
$value275 = ($arguments273['value'] !== NULL ? $arguments273['value'] : $renderChildrenClosure274());

$output272 .= (!is_string($value275) ? $value275 : htmlspecialchars($value275, ($arguments273['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments273['encoding'] !== NULL ? $arguments273['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments273['doubleEncode']));

$output272 .= 'help.bitbucket';
$arguments271['key'] = $output272;
$arguments271['id'] = NULL;
$arguments271['default'] = NULL;
$arguments271['htmlEscape'] = NULL;
$arguments271['arguments'] = NULL;
$arguments271['extensionName'] = NULL;
$renderChildrenClosure276 = function() {return NULL;};

$output218 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments271, $renderChildrenClosure276, $renderingContext);

$output218 .= '</a></li>

						</ul>
					</div>
				</div>

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments277 = array();
// Rendering Boolean node
$arguments277['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('enableUpdateCheck'));
$arguments277['then'] = NULL;
$arguments277['else'] = NULL;
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output279 = '';

$output279 .= '
					<div class="nav-group updateCheck">
						<a href="http://dce.v.ieweg.de/versioncheck/update" target="_blank"><img src="http://dce.v.ieweg.de/versioncheck?t3=';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper
$arguments280 = array();
$arguments280['returnInt'] = false;
$renderChildrenClosure281 = function() {return NULL;};
$viewHelper282 = $self->getViewHelper('$viewHelper282', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper');
$viewHelper282->setArguments($arguments280);
$viewHelper282->setRenderingContext($renderingContext);
$viewHelper282->setRenderChildrenClosure($renderChildrenClosure281);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper

$output279 .= $viewHelper282->initializeArgumentsAndRender();

$output279 .= '&amp;dce=';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\DceViewHelper
$arguments283 = array();
$arguments283['returnInt'] = false;
$renderChildrenClosure284 = function() {return NULL;};
$viewHelper285 = $self->getViewHelper('$viewHelper285', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\Version\DceViewHelper');
$viewHelper285->setArguments($arguments283);
$viewHelper285->setRenderingContext($renderingContext);
$viewHelper285->setRenderChildrenClosure($renderChildrenClosure284);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\DceViewHelper

$output279 .= $viewHelper285->initializeArgumentsAndRender();

$output279 .= '&amp;l=';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\CurrentLanguageViewHelper
$arguments286 = array();
$renderChildrenClosure287 = function() {return NULL;};
$viewHelper288 = $self->getViewHelper('$viewHelper288', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\CurrentLanguageViewHelper');
$viewHelper288->setArguments($arguments286);
$viewHelper288->setRenderingContext($renderingContext);
$viewHelper288->setRenderChildrenClosure($renderChildrenClosure287);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\CurrentLanguageViewHelper

$output279 .= $viewHelper288->initializeArgumentsAndRender();

$output279 .= '" alt="" /></a>
					</div>
				';
return $output279;
};

$output218 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext);

$output218 .= '
			</div>
		</div>
		<div class="row space-bottom">
			<div class="col-lg-10">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>DCEs</th>
							<th>Status</th>
							<th>UID</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments289 = array();
$output290 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments291 = array();
$arguments291['value'] = $currentVariableContainer->getOrNull('lll');
$arguments291['keepQuotes'] = false;
$arguments291['encoding'] = NULL;
$arguments291['doubleEncode'] = true;
$renderChildrenClosure292 = function() {return NULL;};
$value293 = ($arguments291['value'] !== NULL ? $arguments291['value'] : $renderChildrenClosure292());

$output290 .= (!is_string($value293) ? $value293 : htmlspecialchars($value293, ($arguments291['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments291['encoding'] !== NULL ? $arguments291['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments291['doubleEncode']));

$output290 .= 'usage';
$arguments289['key'] = $output290;
$arguments289['id'] = NULL;
$arguments289['default'] = NULL;
$arguments289['htmlEscape'] = NULL;
$arguments289['arguments'] = NULL;
$arguments289['extensionName'] = NULL;
$renderChildrenClosure294 = function() {return NULL;};

$output218 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments289, $renderChildrenClosure294, $renderingContext);

$output218 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments295 = array();
$output296 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments297 = array();
$arguments297['value'] = $currentVariableContainer->getOrNull('lll');
$arguments297['keepQuotes'] = false;
$arguments297['encoding'] = NULL;
$arguments297['doubleEncode'] = true;
$renderChildrenClosure298 = function() {return NULL;};
$value299 = ($arguments297['value'] !== NULL ? $arguments297['value'] : $renderChildrenClosure298());

$output296 .= (!is_string($value299) ? $value299 : htmlspecialchars($value299, ($arguments297['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments297['encoding'] !== NULL ? $arguments297['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments297['doubleEncode']));

$output296 .= 'dceStats';
$arguments295['key'] = $output296;
$arguments295['id'] = NULL;
$arguments295['default'] = NULL;
$arguments295['htmlEscape'] = NULL;
$arguments295['arguments'] = NULL;
$arguments295['extensionName'] = NULL;
$renderChildrenClosure300 = function() {return NULL;};

$output218 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments295, $renderChildrenClosure300, $renderingContext);

$output218 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments301 = array();
$output302 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments303 = array();
$arguments303['value'] = $currentVariableContainer->getOrNull('lll');
$arguments303['keepQuotes'] = false;
$arguments303['encoding'] = NULL;
$arguments303['doubleEncode'] = true;
$renderChildrenClosure304 = function() {return NULL;};
$value305 = ($arguments303['value'] !== NULL ? $arguments303['value'] : $renderChildrenClosure304());

$output302 .= (!is_string($value305) ? $value305 : htmlspecialchars($value305, ($arguments303['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments303['encoding'] !== NULL ? $arguments303['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments303['doubleEncode']));

$output302 .= 'fieldStats';
$arguments301['key'] = $output302;
$arguments301['id'] = NULL;
$arguments301['default'] = NULL;
$arguments301['htmlEscape'] = NULL;
$arguments301['arguments'] = NULL;
$arguments301['extensionName'] = NULL;
$renderChildrenClosure306 = function() {return NULL;};

$output218 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments301, $renderChildrenClosure306, $renderingContext);

$output218 .= '</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments307 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments308 = array();
$arguments308['subject'] = NULL;
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('dces');
};
$arguments307['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext), 0);
$arguments307['then'] = NULL;
$arguments307['else'] = NULL;
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output311 = '';

$output311 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments312 = array();
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output314 = '';

$output314 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments315 = array();
$arguments315['each'] = $currentVariableContainer->getOrNull('dces');
$arguments315['as'] = 'dce';
$arguments315['key'] = '';
$arguments315['reverse'] = false;
$arguments315['iteration'] = NULL;
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output317 = '';

$output317 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments318 = array();
$arguments318['partial'] = 'Module/DceListItem';
// Rendering Array
$array319 = array();
$array319['dce'] = $currentVariableContainer->getOrNull('dce');
$arguments318['arguments'] = $array319;
$arguments318['section'] = NULL;
$arguments318['optional'] = false;
$renderChildrenClosure320 = function() {return NULL;};

$output317 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments318, $renderChildrenClosure320, $renderingContext);

$output317 .= '
								';
return $output317;
};

$output314 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);

$output314 .= '
							';
return $output314;
};

$output311 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext);

$output311 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments321 = array();
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output323 = '';

$output323 .= '
								<tr><td colspan="7"><em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments324 = array();
$output325 = '';

$output325 .= $currentVariableContainer->getOrNull('lll');

$output325 .= 'noDcesFound';
$arguments324['key'] = $output325;
$arguments324['id'] = NULL;
$arguments324['default'] = NULL;
$arguments324['htmlEscape'] = NULL;
$arguments324['arguments'] = NULL;
$arguments324['extensionName'] = NULL;
$renderChildrenClosure326 = function() {return NULL;};

$output323 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments324, $renderChildrenClosure326, $renderingContext);

$output323 .= '</em></td></tr>
							';
return $output323;
};

$output311 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext);

$output311 .= '
						';
return $output311;
};
$arguments307['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output327 = '';

$output327 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments328 = array();
$arguments328['each'] = $currentVariableContainer->getOrNull('dces');
$arguments328['as'] = 'dce';
$arguments328['key'] = '';
$arguments328['reverse'] = false;
$arguments328['iteration'] = NULL;
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output330 = '';

$output330 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments331 = array();
$arguments331['partial'] = 'Module/DceListItem';
// Rendering Array
$array332 = array();
$array332['dce'] = $currentVariableContainer->getOrNull('dce');
$arguments331['arguments'] = $array332;
$arguments331['section'] = NULL;
$arguments331['optional'] = false;
$renderChildrenClosure333 = function() {return NULL;};

$output330 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments331, $renderChildrenClosure333, $renderingContext);

$output330 .= '
								';
return $output330;
};

$output327 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext);

$output327 .= '
							';
return $output327;
};
$arguments307['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output334 = '';

$output334 .= '
								<tr><td colspan="7"><em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments335 = array();
$output336 = '';

$output336 .= $currentVariableContainer->getOrNull('lll');

$output336 .= 'noDcesFound';
$arguments335['key'] = $output336;
$arguments335['id'] = NULL;
$arguments335['default'] = NULL;
$arguments335['htmlEscape'] = NULL;
$arguments335['arguments'] = NULL;
$arguments335['extensionName'] = NULL;
$renderChildrenClosure337 = function() {return NULL;};

$output334 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments335, $renderChildrenClosure337, $renderingContext);

$output334 .= '</em></td></tr>
							';
return $output334;
};

$output218 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments307, $renderChildrenClosure310, $renderingContext);

$output218 .= '

					</tbody>
				</table>
			</div>
		</div>
	';
return $output218;
};

$output214 .= TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments215, $renderChildrenClosure217, $renderingContext);

$output214 .= '
';
return $output214;
};

$output164 .= '';

$output164 .= '
';


return $output164;
}


}
#1466614709    80520     