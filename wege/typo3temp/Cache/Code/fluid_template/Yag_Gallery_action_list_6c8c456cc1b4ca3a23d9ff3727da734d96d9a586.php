<?php
class FluidCache_Yag_Gallery_action_list_6c8c456cc1b4ca3a23d9ff3727da734d96d9a586 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section head
 */
public function section_1a954628a960aaef81d7b2d4521929579f3541e6(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();



return NULL;
}
/**
 * section main
 */
public function section_b28b7af69320201d1cf206ebf28373980add1451(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'galleryListConfig.columnCount', $renderingContext));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
		<style type="text/css">
			.tx-yag-gallery-thumb-outerframe {
				width: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments4 = array();
$arguments4['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'galleryListConfig.columnRelativeWidth', $renderingContext);
$arguments4['keepQuotes'] = false;
$arguments4['encoding'] = NULL;
$arguments4['doubleEncode'] = true;
$renderChildrenClosure5 = function() {return NULL;};
$value6 = ($arguments4['value'] !== NULL ? $arguments4['value'] : $renderChildrenClosure5());

$output3 .= (!is_string($value6) ? $value6 : htmlspecialchars($value6, ($arguments4['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments4['encoding'] !== NULL ? $arguments4['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments4['doubleEncode']));

$output3 .= '%;
			}
		</style>
	';
return $output3;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

	<div class="tx-yag-items">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments7 = array();
$arguments7['each'] = $currentVariableContainer->getOrNull('listData');
$arguments7['key'] = 'rowIndex';
$arguments7['as'] = 'listRow';
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
			<div class="tx-yag-thumb-outerframe tx-yag-gallery-thumb-outerframe" id="yag-gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = NULL;
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() {return NULL;};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output9 .= (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments10['encoding'] !== NULL ? $arguments10['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments10['doubleEncode']));

$output9 .= '">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments13 = array();
$arguments13['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'galleryListConfig.galleryThumbPartial', $renderingContext);
// Rendering Array
$array14 = array();
$array14['gallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value', $renderingContext);
$array14['yagContext'] = $currentVariableContainer->getOrNull('yagContext');
$arguments13['arguments'] = $array14;
$arguments13['section'] = NULL;
$arguments13['optional'] = false;
$renderChildrenClosure15 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments13, $renderChildrenClosure15, $renderingContext);

$output9 .= '
			</div>
		';
return $output9;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
		<div style="clear:both;">&nbsp;</div>
	</div>

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments16 = array();
// Rendering Boolean node
$arguments16['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.galleryList.showPager', $renderingContext));
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output18 = '';

$output18 .= '
		<div class="tx-yag-pager">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments19 = array();
$arguments19['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'galleryListConfig.pagerPartial', $renderingContext);
// Rendering Array
$array20 = array();
$array20['pager'] = $currentVariableContainer->getOrNull('pager');
$array20['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
$array20['controller'] = 'Gallery';
$array20['action'] = 'list';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments21 = array();
$arguments21['key'] = 'tx_yag_general.galleries';
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['htmlEscape'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$renderChildrenClosure22 = function() {return NULL;};
$array20['itemsText'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);
$arguments19['arguments'] = $array20;
$arguments19['section'] = NULL;
$arguments19['optional'] = false;
$renderChildrenClosure23 = function() {return NULL;};

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure23, $renderingContext);

$output18 .= '
		</div>
	';
return $output18;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '
';


return $output0;
}
/**
 * section beButtonsLeft
 */
public function section_cf0fe0f1a8ee78bebfb9f3c54af26f541cb3674a(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output24 = '';

$output24 .= '
	';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper
$arguments25 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments26 = array();
$arguments26['action'] = 'new';
$arguments26['arguments'] = array (
);
$arguments26['controller'] = NULL;
$arguments26['extensionName'] = NULL;
$arguments26['pluginName'] = NULL;
$arguments26['pageUid'] = NULL;
$arguments26['pageType'] = 0;
$arguments26['noCache'] = false;
$arguments26['noCacheHash'] = false;
$arguments26['section'] = '';
$arguments26['format'] = '';
$arguments26['linkAccessRestrictedPages'] = false;
$arguments26['additionalParams'] = array (
);
$arguments26['absolute'] = false;
$arguments26['addQueryString'] = false;
$arguments26['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments26['addQueryStringMethod'] = NULL;
$renderChildrenClosure27 = function() {return NULL;};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper28->setArguments($arguments26);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments25['uri'] = $viewHelper28->initializeArgumentsAndRender();
$arguments25['icon'] = 'actions-document-new';
$arguments25['title'] = '';
$arguments25['onclick'] = NULL;
$renderChildrenClosure29 = function() {return NULL;};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper');
$viewHelper30->setArguments($arguments25);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper

$output24 .= $viewHelper30->initializeArgumentsAndRender();

$output24 .= '
';


return $output24;
}
/**
 * section feEdit
 */
public function section_70142cdf206387b7141dfd354a9ffa8f190cd9d7(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output31 = '';

$output31 .= '
	';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper
$arguments32 = array();
// Rendering Array
$array33 = array();
$array33['1'] = 'gallery.create';
$arguments32['hasAny'] = $array33;
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['object'] = NULL;
$arguments32['action'] = NULL;
$arguments32['hasAll'] = NULL;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output35 = '';

$output35 .= '
		<div class="form-actions">
			<ul class="nav nav-pills">
				';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper
$arguments36 = array();
$arguments36['object'] = 'gallery';
$arguments36['action'] = 'create';
$arguments36['then'] = NULL;
$arguments36['else'] = NULL;
$arguments36['hasAny'] = NULL;
$arguments36['hasAll'] = NULL;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
					<li>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments39 = array();
$arguments39['action'] = 'new';
$arguments39['controller'] = 'Gallery';
$arguments39['additionalAttributes'] = NULL;
$arguments39['data'] = NULL;
$arguments39['arguments'] = array (
);
$arguments39['extensionName'] = NULL;
$arguments39['pluginName'] = NULL;
$arguments39['pageUid'] = NULL;
$arguments39['pageType'] = 0;
$arguments39['noCache'] = false;
$arguments39['noCacheHash'] = false;
$arguments39['section'] = '';
$arguments39['format'] = '';
$arguments39['linkAccessRestrictedPages'] = false;
$arguments39['additionalParams'] = array (
);
$arguments39['absolute'] = false;
$arguments39['addQueryString'] = false;
$arguments39['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments39['addQueryStringMethod'] = NULL;
$arguments39['class'] = NULL;
$arguments39['dir'] = NULL;
$arguments39['id'] = NULL;
$arguments39['lang'] = NULL;
$arguments39['style'] = NULL;
$arguments39['title'] = NULL;
$arguments39['accesskey'] = NULL;
$arguments39['tabindex'] = NULL;
$arguments39['onclick'] = NULL;
$arguments39['name'] = NULL;
$arguments39['rel'] = NULL;
$arguments39['rev'] = NULL;
$arguments39['target'] = NULL;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments41 = array();
$arguments41['key'] = 'tx_yag_controller_gallery.addGallery';
$arguments41['id'] = NULL;
$arguments41['default'] = NULL;
$arguments41['htmlEscape'] = NULL;
$arguments41['arguments'] = NULL;
$arguments41['extensionName'] = NULL;
$renderChildrenClosure42 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);
};
$viewHelper43 = $self->getViewHelper('$viewHelper43', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper43->setArguments($arguments39);
$viewHelper43->setRenderingContext($renderingContext);
$viewHelper43->setRenderChildrenClosure($renderChildrenClosure40);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output38 .= $viewHelper43->initializeArgumentsAndRender();

$output38 .= '
					</li>
				';
return $output38;
};

$output35 .= Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
			</ul>
		</div>
	';
return $output35;
};

$output31 .= Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper::renderStatic($arguments32, $renderChildrenClosure34, $renderingContext);

$output31 .= '
';


return $output31;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output44 = '';

$output44 .= '



';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper
$arguments45 = array();
$arguments45['show'] = false;
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
<!--  
Template for rendering gallery list

Here is a list of objects / variables that can be accessed in this template:

Tx_PtExtlist_Domain_Model_List_ListData  listData               Items to be rendered
Tx_PtExtlist_Domain_Model_Pager_PagerInterface pager            Pager
Tx_PtExtlist_Domain_Model_Pager_PagerCollection pagerCollection Collection of pagers

@package YAG
@author Michael Knoll <mimi@kaktusteam.de>
@author Daniel Lienert <typo3@lienert.cc>
-->
';
};
$viewHelper47 = $self->getViewHelper('$viewHelper47', $renderingContext, 'Tx_PtExtlist_ViewHelpers_CommentViewHelper');
$viewHelper47->setArguments($arguments45);
$viewHelper47->setRenderingContext($renderingContext);
$viewHelper47->setRenderChildrenClosure($renderChildrenClosure46);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper

$output44 .= $viewHelper47->initializeArgumentsAndRender();

$output44 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments48 = array();
$arguments48['name'] = 'Default';
$renderChildrenClosure49 = function() {return NULL;};
$viewHelper50 = $self->getViewHelper('$viewHelper50', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper50->setArguments($arguments48);
$viewHelper50->setRenderingContext($renderingContext);
$viewHelper50->setRenderChildrenClosure($renderChildrenClosure49);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output44 .= $viewHelper50->initializeArgumentsAndRender();

$output44 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments51 = array();
$arguments51['name'] = 'head';
$renderChildrenClosure52 = function() {return NULL;};

$output44 .= '';

$output44 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments53 = array();
$arguments53['name'] = 'main';
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output55 = '';

$output55 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments56 = array();
// Rendering Boolean node
$arguments56['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'galleryListConfig.columnCount', $renderingContext));
$arguments56['then'] = NULL;
$arguments56['else'] = NULL;
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output58 = '';

$output58 .= '
		<style type="text/css">
			.tx-yag-gallery-thumb-outerframe {
				width: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments59 = array();
$arguments59['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'galleryListConfig.columnRelativeWidth', $renderingContext);
$arguments59['keepQuotes'] = false;
$arguments59['encoding'] = NULL;
$arguments59['doubleEncode'] = true;
$renderChildrenClosure60 = function() {return NULL;};
$value61 = ($arguments59['value'] !== NULL ? $arguments59['value'] : $renderChildrenClosure60());

$output58 .= (!is_string($value61) ? $value61 : htmlspecialchars($value61, ($arguments59['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments59['encoding'] !== NULL ? $arguments59['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments59['doubleEncode']));

$output58 .= '%;
			}
		</style>
	';
return $output58;
};

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '

	<div class="tx-yag-items">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments62 = array();
$arguments62['each'] = $currentVariableContainer->getOrNull('listData');
$arguments62['key'] = 'rowIndex';
$arguments62['as'] = 'listRow';
$arguments62['reverse'] = false;
$arguments62['iteration'] = NULL;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output64 = '';

$output64 .= '
			<div class="tx-yag-thumb-outerframe tx-yag-gallery-thumb-outerframe" id="yag-gallery-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments65 = array();
$arguments65['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value.uid', $renderingContext);
$arguments65['keepQuotes'] = false;
$arguments65['encoding'] = NULL;
$arguments65['doubleEncode'] = true;
$renderChildrenClosure66 = function() {return NULL;};
$value67 = ($arguments65['value'] !== NULL ? $arguments65['value'] : $renderChildrenClosure66());

$output64 .= (!is_string($value67) ? $value67 : htmlspecialchars($value67, ($arguments65['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments65['encoding'] !== NULL ? $arguments65['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments65['doubleEncode']));

$output64 .= '">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments68 = array();
$arguments68['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'galleryListConfig.galleryThumbPartial', $renderingContext);
// Rendering Array
$array69 = array();
$array69['gallery'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'gallery.value', $renderingContext);
$array69['yagContext'] = $currentVariableContainer->getOrNull('yagContext');
$arguments68['arguments'] = $array69;
$arguments68['section'] = NULL;
$arguments68['optional'] = false;
$renderChildrenClosure70 = function() {return NULL;};

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments68, $renderChildrenClosure70, $renderingContext);

$output64 .= '
			</div>
		';
return $output64;
};

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output55 .= '
		<div style="clear:both;">&nbsp;</div>
	</div>

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments71 = array();
// Rendering Boolean node
$arguments71['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.galleryList.showPager', $renderingContext));
$arguments71['then'] = NULL;
$arguments71['else'] = NULL;
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output73 = '';

$output73 .= '
		<div class="tx-yag-pager">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments74 = array();
$arguments74['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'galleryListConfig.pagerPartial', $renderingContext);
// Rendering Array
$array75 = array();
$array75['pager'] = $currentVariableContainer->getOrNull('pager');
$array75['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
$array75['controller'] = 'Gallery';
$array75['action'] = 'list';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments76 = array();
$arguments76['key'] = 'tx_yag_general.galleries';
$arguments76['id'] = NULL;
$arguments76['default'] = NULL;
$arguments76['htmlEscape'] = NULL;
$arguments76['arguments'] = NULL;
$arguments76['extensionName'] = NULL;
$renderChildrenClosure77 = function() {return NULL;};
$array75['itemsText'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);
$arguments74['arguments'] = $array75;
$arguments74['section'] = NULL;
$arguments74['optional'] = false;
$renderChildrenClosure78 = function() {return NULL;};

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments74, $renderChildrenClosure78, $renderingContext);

$output73 .= '
		</div>
	';
return $output73;
};

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output55 .= '
';
return $output55;
};

$output44 .= '';

$output44 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments79 = array();
$arguments79['name'] = 'beButtonsLeft';
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output81 = '';

$output81 .= '
	';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper
$arguments82 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments83 = array();
$arguments83['action'] = 'new';
$arguments83['arguments'] = array (
);
$arguments83['controller'] = NULL;
$arguments83['extensionName'] = NULL;
$arguments83['pluginName'] = NULL;
$arguments83['pageUid'] = NULL;
$arguments83['pageType'] = 0;
$arguments83['noCache'] = false;
$arguments83['noCacheHash'] = false;
$arguments83['section'] = '';
$arguments83['format'] = '';
$arguments83['linkAccessRestrictedPages'] = false;
$arguments83['additionalParams'] = array (
);
$arguments83['absolute'] = false;
$arguments83['addQueryString'] = false;
$arguments83['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments83['addQueryStringMethod'] = NULL;
$renderChildrenClosure84 = function() {return NULL;};
$viewHelper85 = $self->getViewHelper('$viewHelper85', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper85->setArguments($arguments83);
$viewHelper85->setRenderingContext($renderingContext);
$viewHelper85->setRenderChildrenClosure($renderChildrenClosure84);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments82['uri'] = $viewHelper85->initializeArgumentsAndRender();
$arguments82['icon'] = 'actions-document-new';
$arguments82['title'] = '';
$arguments82['onclick'] = NULL;
$renderChildrenClosure86 = function() {return NULL;};
$viewHelper87 = $self->getViewHelper('$viewHelper87', $renderingContext, 'Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper');
$viewHelper87->setArguments($arguments82);
$viewHelper87->setRenderingContext($renderingContext);
$viewHelper87->setRenderChildrenClosure($renderChildrenClosure86);
// End of ViewHelper Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper

$output81 .= $viewHelper87->initializeArgumentsAndRender();

$output81 .= '
';
return $output81;
};

$output44 .= '';

$output44 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments88 = array();
$arguments88['name'] = 'feEdit';
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output90 = '';

$output90 .= '
	';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper
$arguments91 = array();
// Rendering Array
$array92 = array();
$array92['1'] = 'gallery.create';
$arguments91['hasAny'] = $array92;
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$arguments91['object'] = NULL;
$arguments91['action'] = NULL;
$arguments91['hasAll'] = NULL;
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output94 = '';

$output94 .= '
		<div class="form-actions">
			<ul class="nav nav-pills">
				';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper
$arguments95 = array();
$arguments95['object'] = 'gallery';
$arguments95['action'] = 'create';
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$arguments95['hasAny'] = NULL;
$arguments95['hasAll'] = NULL;
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output97 = '';

$output97 .= '
					<li>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments98 = array();
$arguments98['action'] = 'new';
$arguments98['controller'] = 'Gallery';
$arguments98['additionalAttributes'] = NULL;
$arguments98['data'] = NULL;
$arguments98['arguments'] = array (
);
$arguments98['extensionName'] = NULL;
$arguments98['pluginName'] = NULL;
$arguments98['pageUid'] = NULL;
$arguments98['pageType'] = 0;
$arguments98['noCache'] = false;
$arguments98['noCacheHash'] = false;
$arguments98['section'] = '';
$arguments98['format'] = '';
$arguments98['linkAccessRestrictedPages'] = false;
$arguments98['additionalParams'] = array (
);
$arguments98['absolute'] = false;
$arguments98['addQueryString'] = false;
$arguments98['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments98['addQueryStringMethod'] = NULL;
$arguments98['class'] = NULL;
$arguments98['dir'] = NULL;
$arguments98['id'] = NULL;
$arguments98['lang'] = NULL;
$arguments98['style'] = NULL;
$arguments98['title'] = NULL;
$arguments98['accesskey'] = NULL;
$arguments98['tabindex'] = NULL;
$arguments98['onclick'] = NULL;
$arguments98['name'] = NULL;
$arguments98['rel'] = NULL;
$arguments98['rev'] = NULL;
$arguments98['target'] = NULL;
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments100 = array();
$arguments100['key'] = 'tx_yag_controller_gallery.addGallery';
$arguments100['id'] = NULL;
$arguments100['default'] = NULL;
$arguments100['htmlEscape'] = NULL;
$arguments100['arguments'] = NULL;
$arguments100['extensionName'] = NULL;
$renderChildrenClosure101 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);
};
$viewHelper102 = $self->getViewHelper('$viewHelper102', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper102->setArguments($arguments98);
$viewHelper102->setRenderingContext($renderingContext);
$viewHelper102->setRenderChildrenClosure($renderChildrenClosure99);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output97 .= $viewHelper102->initializeArgumentsAndRender();

$output97 .= '
					</li>
				';
return $output97;
};

$output94 .= Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
			</ul>
		</div>
	';
return $output94;
};

$output90 .= Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper::renderStatic($arguments91, $renderChildrenClosure93, $renderingContext);

$output90 .= '
';
return $output90;
};

$output44 .= '';


return $output44;
}


}
#1461667144    29992     