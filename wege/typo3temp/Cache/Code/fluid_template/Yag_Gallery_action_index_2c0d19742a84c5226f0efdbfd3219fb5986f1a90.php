<?php
class FluidCache_Yag_Gallery_action_index_2c0d19742a84c5226f0efdbfd3219fb5986f1a90 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'albumListConfig.columnCount', $renderingContext));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
		<style type="text/css">
			.tx-yag-album-thumb-outerframe { width: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments4 = array();
$arguments4['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'albumListConfig.columnRelativeWidth', $renderingContext);
$arguments4['keepQuotes'] = false;
$arguments4['encoding'] = NULL;
$arguments4['doubleEncode'] = true;
$renderChildrenClosure5 = function() {return NULL;};
$value6 = ($arguments4['value'] !== NULL ? $arguments4['value'] : $renderChildrenClosure5());

$output3 .= (!is_string($value6) ? $value6 : htmlspecialchars($value6, ($arguments4['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments4['encoding'] !== NULL ? $arguments4['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments4['doubleEncode']));

$output3 .= '%;}
		</style>
	';
return $output3;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

	<div class="messages"></div>

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
			<div class="tx-yag-thumb-outerframe tx-yag-album-thumb-outerframe">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments10 = array();
$arguments10['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'albumListConfig.albumThumbPartial', $renderingContext);
// Rendering Array
$array11 = array();
$array11['album'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value', $renderingContext);
$array11['yagContext'] = $currentVariableContainer->getOrNull('yagContext');
$arguments10['arguments'] = $array11;
$arguments10['section'] = NULL;
$arguments10['optional'] = false;
$renderChildrenClosure12 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments10, $renderChildrenClosure12, $renderingContext);

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
$arguments13 = array();
// Rendering Boolean node
$arguments13['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.albumList.showPager', $renderingContext));
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output15 = '';

$output15 .= '
		<div class="tx-yag-pager">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments16 = array();
$arguments16['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'albumListConfig.pagerPartial', $renderingContext);
// Rendering Array
$array17 = array();
$array17['pager'] = $currentVariableContainer->getOrNull('pager');
$array17['controller'] = 'Gallery';
$array17['action'] = 'index';
$array17['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments18 = array();
$arguments18['key'] = 'tx_yag_domain_model_albums';
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['htmlEscape'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$renderChildrenClosure19 = function() {return NULL;};
$array17['itemsText'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);
$arguments16['arguments'] = $array17;
$arguments16['section'] = NULL;
$arguments16['optional'] = false;
$renderChildrenClosure20 = function() {return NULL;};

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure20, $renderingContext);

$output15 .= '
		</div>
	';
return $output15;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

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

$output21 = '';

$output21 .= '
	';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper
$arguments22 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments23 = array();
$arguments23['action'] = 'list';
$arguments23['arguments'] = array (
);
$arguments23['controller'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['pluginName'] = NULL;
$arguments23['pageUid'] = NULL;
$arguments23['pageType'] = 0;
$arguments23['noCache'] = false;
$arguments23['noCacheHash'] = false;
$arguments23['section'] = '';
$arguments23['format'] = '';
$arguments23['linkAccessRestrictedPages'] = false;
$arguments23['additionalParams'] = array (
);
$arguments23['absolute'] = false;
$arguments23['addQueryString'] = false;
$arguments23['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments23['addQueryStringMethod'] = NULL;
$renderChildrenClosure24 = function() {return NULL;};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper25->setArguments($arguments23);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments22['uri'] = $viewHelper25->initializeArgumentsAndRender();
$arguments22['icon'] = 'actions-document-close';
$arguments22['title'] = '';
$arguments22['onclick'] = NULL;
$renderChildrenClosure26 = function() {return NULL;};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper');
$viewHelper27->setArguments($arguments22);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper

$output21 .= $viewHelper27->initializeArgumentsAndRender();

$output21 .= '
	';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper
$arguments28 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments29 = array();
$arguments29['action'] = 'new';
$arguments29['controller'] = 'Album';
// Rendering Array
$array30 = array();
$array30['gallery'] = $currentVariableContainer->getOrNull('gallery');
$arguments29['arguments'] = $array30;
$arguments29['extensionName'] = NULL;
$arguments29['pluginName'] = NULL;
$arguments29['pageUid'] = NULL;
$arguments29['pageType'] = 0;
$arguments29['noCache'] = false;
$arguments29['noCacheHash'] = false;
$arguments29['section'] = '';
$arguments29['format'] = '';
$arguments29['linkAccessRestrictedPages'] = false;
$arguments29['additionalParams'] = array (
);
$arguments29['absolute'] = false;
$arguments29['addQueryString'] = false;
$arguments29['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments29['addQueryStringMethod'] = NULL;
$renderChildrenClosure31 = function() {return NULL;};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper32->setArguments($arguments29);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure31);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments28['uri'] = $viewHelper32->initializeArgumentsAndRender();
$arguments28['icon'] = 'actions-document-new';
$arguments28['title'] = '';
$arguments28['onclick'] = NULL;
$renderChildrenClosure33 = function() {return NULL;};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper');
$viewHelper34->setArguments($arguments28);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper

$output21 .= $viewHelper34->initializeArgumentsAndRender();

$output21 .= '
';


return $output21;
}
/**
 * section feEdit
 */
public function section_70142cdf206387b7141dfd354a9ffa8f190cd9d7(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output35 = '';

$output35 .= '
	';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper
$arguments36 = array();
// Rendering Array
$array37 = array();
$array37['1'] = 'album.create';
$arguments36['hasAny'] = $array37;
$arguments36['then'] = NULL;
$arguments36['else'] = NULL;
$arguments36['object'] = NULL;
$arguments36['action'] = NULL;
$arguments36['hasAll'] = NULL;
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output39 = '';

$output39 .= '
		<div class="form-actions">
			<ul class="nav nav-pills">
			';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper
$arguments40 = array();
$arguments40['object'] = 'gallery';
$arguments40['action'] = 'edit';
$arguments40['then'] = NULL;
$arguments40['else'] = NULL;
$arguments40['hasAny'] = NULL;
$arguments40['hasAll'] = NULL;
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output42 = '';

$output42 .= '
				<li>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments43 = array();
$arguments43['action'] = 'edit';
$arguments43['controller'] = 'Gallery';
// Rendering Array
$array44 = array();
$array44['gallery'] = $currentVariableContainer->getOrNull('gallery');
$arguments43['arguments'] = $array44;
$arguments43['additionalAttributes'] = NULL;
$arguments43['data'] = NULL;
$arguments43['extensionName'] = NULL;
$arguments43['pluginName'] = NULL;
$arguments43['pageUid'] = NULL;
$arguments43['pageType'] = 0;
$arguments43['noCache'] = false;
$arguments43['noCacheHash'] = false;
$arguments43['section'] = '';
$arguments43['format'] = '';
$arguments43['linkAccessRestrictedPages'] = false;
$arguments43['additionalParams'] = array (
);
$arguments43['absolute'] = false;
$arguments43['addQueryString'] = false;
$arguments43['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments43['addQueryStringMethod'] = NULL;
$arguments43['class'] = NULL;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['title'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$arguments43['name'] = NULL;
$arguments43['rel'] = NULL;
$arguments43['rev'] = NULL;
$arguments43['target'] = NULL;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments46 = array();
$arguments46['key'] = 'tx_yag_controller_gallery.editGallery';
$arguments46['id'] = NULL;
$arguments46['default'] = NULL;
$arguments46['htmlEscape'] = NULL;
$arguments46['arguments'] = NULL;
$arguments46['extensionName'] = NULL;
$renderChildrenClosure47 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);
};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper48->setArguments($arguments43);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure45);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output42 .= $viewHelper48->initializeArgumentsAndRender();

$output42 .= '
				</li>
			';
return $output42;
};

$output39 .= Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
			';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper
$arguments49 = array();
$arguments49['object'] = 'album';
$arguments49['action'] = 'create';
$arguments49['then'] = NULL;
$arguments49['else'] = NULL;
$arguments49['hasAny'] = NULL;
$arguments49['hasAll'] = NULL;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output51 = '';

$output51 .= '
				<li>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments52 = array();
$arguments52['action'] = 'new';
$arguments52['controller'] = 'Album';
// Rendering Array
$array53 = array();
$array53['gallery'] = $currentVariableContainer->getOrNull('gallery');
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments55 = array();
$arguments55['key'] = 'tx_yag_controller_album.addAlbum';
$arguments55['id'] = NULL;
$arguments55['default'] = NULL;
$arguments55['htmlEscape'] = NULL;
$arguments55['arguments'] = NULL;
$arguments55['extensionName'] = NULL;
$renderChildrenClosure56 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);
};
$viewHelper57 = $self->getViewHelper('$viewHelper57', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper57->setArguments($arguments52);
$viewHelper57->setRenderingContext($renderingContext);
$viewHelper57->setRenderChildrenClosure($renderChildrenClosure54);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output51 .= $viewHelper57->initializeArgumentsAndRender();

$output51 .= '
				</li>
			';
return $output51;
};

$output39 .= Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output39 .= '
			</ul>
		</div>
	';
return $output39;
};

$output35 .= Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper::renderStatic($arguments36, $renderChildrenClosure38, $renderingContext);

$output35 .= '
';


return $output35;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output58 = '';

$output58 .= '



';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper
$arguments59 = array();
$arguments59['show'] = false;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
<!--  
Template for rendering list of albums of a gallery

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
$viewHelper61 = $self->getViewHelper('$viewHelper61', $renderingContext, 'Tx_PtExtlist_ViewHelpers_CommentViewHelper');
$viewHelper61->setArguments($arguments59);
$viewHelper61->setRenderingContext($renderingContext);
$viewHelper61->setRenderChildrenClosure($renderChildrenClosure60);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper

$output58 .= $viewHelper61->initializeArgumentsAndRender();

$output58 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments62 = array();
$arguments62['name'] = 'Default';
$renderChildrenClosure63 = function() {return NULL;};
$viewHelper64 = $self->getViewHelper('$viewHelper64', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper64->setArguments($arguments62);
$viewHelper64->setRenderingContext($renderingContext);
$viewHelper64->setRenderChildrenClosure($renderChildrenClosure63);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output58 .= $viewHelper64->initializeArgumentsAndRender();

$output58 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments65 = array();
$arguments65['name'] = 'head';
$renderChildrenClosure66 = function() {return NULL;};

$output58 .= '';

$output58 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments67 = array();
$arguments67['name'] = 'main';
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output69 = '';

$output69 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments70 = array();
// Rendering Boolean node
$arguments70['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'albumListConfig.columnCount', $renderingContext));
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output72 = '';

$output72 .= '
		<style type="text/css">
			.tx-yag-album-thumb-outerframe { width: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments73 = array();
$arguments73['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'albumListConfig.columnRelativeWidth', $renderingContext);
$arguments73['keepQuotes'] = false;
$arguments73['encoding'] = NULL;
$arguments73['doubleEncode'] = true;
$renderChildrenClosure74 = function() {return NULL;};
$value75 = ($arguments73['value'] !== NULL ? $arguments73['value'] : $renderChildrenClosure74());

$output72 .= (!is_string($value75) ? $value75 : htmlspecialchars($value75, ($arguments73['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments73['encoding'] !== NULL ? $arguments73['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments73['doubleEncode']));

$output72 .= '%;}
		</style>
	';
return $output72;
};

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output69 .= '

	<div class="messages"></div>

	<div class="tx-yag-items">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments76 = array();
$arguments76['each'] = $currentVariableContainer->getOrNull('listData');
$arguments76['key'] = 'rowIndex';
$arguments76['as'] = 'listRow';
$arguments76['reverse'] = false;
$arguments76['iteration'] = NULL;
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output78 = '';

$output78 .= '
			<div class="tx-yag-thumb-outerframe tx-yag-album-thumb-outerframe">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments79 = array();
$arguments79['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'albumListConfig.albumThumbPartial', $renderingContext);
// Rendering Array
$array80 = array();
$array80['album'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'album.value', $renderingContext);
$array80['yagContext'] = $currentVariableContainer->getOrNull('yagContext');
$arguments79['arguments'] = $array80;
$arguments79['section'] = NULL;
$arguments79['optional'] = false;
$renderChildrenClosure81 = function() {return NULL;};

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments79, $renderChildrenClosure81, $renderingContext);

$output78 .= '
			</div>
		';
return $output78;
};

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output69 .= '
		<div style="clear:both;">&nbsp;</div>
	</div>
	
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments82 = array();
// Rendering Boolean node
$arguments82['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.albumList.showPager', $renderingContext));
$arguments82['then'] = NULL;
$arguments82['else'] = NULL;
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output84 = '';

$output84 .= '
		<div class="tx-yag-pager">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments85 = array();
$arguments85['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'albumListConfig.pagerPartial', $renderingContext);
// Rendering Array
$array86 = array();
$array86['pager'] = $currentVariableContainer->getOrNull('pager');
$array86['controller'] = 'Gallery';
$array86['action'] = 'index';
$array86['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments87 = array();
$arguments87['key'] = 'tx_yag_domain_model_albums';
$arguments87['id'] = NULL;
$arguments87['default'] = NULL;
$arguments87['htmlEscape'] = NULL;
$arguments87['arguments'] = NULL;
$arguments87['extensionName'] = NULL;
$renderChildrenClosure88 = function() {return NULL;};
$array86['itemsText'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);
$arguments85['arguments'] = $array86;
$arguments85['section'] = NULL;
$arguments85['optional'] = false;
$renderChildrenClosure89 = function() {return NULL;};

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments85, $renderChildrenClosure89, $renderingContext);

$output84 .= '
		</div>
	';
return $output84;
};

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output69 .= '
';
return $output69;
};

$output58 .= '';

$output58 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments90 = array();
$arguments90['name'] = 'beButtonsLeft';
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output92 = '';

$output92 .= '
	';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper
$arguments93 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments94 = array();
$arguments94['action'] = 'list';
$arguments94['arguments'] = array (
);
$arguments94['controller'] = NULL;
$arguments94['extensionName'] = NULL;
$arguments94['pluginName'] = NULL;
$arguments94['pageUid'] = NULL;
$arguments94['pageType'] = 0;
$arguments94['noCache'] = false;
$arguments94['noCacheHash'] = false;
$arguments94['section'] = '';
$arguments94['format'] = '';
$arguments94['linkAccessRestrictedPages'] = false;
$arguments94['additionalParams'] = array (
);
$arguments94['absolute'] = false;
$arguments94['addQueryString'] = false;
$arguments94['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments94['addQueryStringMethod'] = NULL;
$renderChildrenClosure95 = function() {return NULL;};
$viewHelper96 = $self->getViewHelper('$viewHelper96', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper96->setArguments($arguments94);
$viewHelper96->setRenderingContext($renderingContext);
$viewHelper96->setRenderChildrenClosure($renderChildrenClosure95);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments93['uri'] = $viewHelper96->initializeArgumentsAndRender();
$arguments93['icon'] = 'actions-document-close';
$arguments93['title'] = '';
$arguments93['onclick'] = NULL;
$renderChildrenClosure97 = function() {return NULL;};
$viewHelper98 = $self->getViewHelper('$viewHelper98', $renderingContext, 'Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper');
$viewHelper98->setArguments($arguments93);
$viewHelper98->setRenderingContext($renderingContext);
$viewHelper98->setRenderChildrenClosure($renderChildrenClosure97);
// End of ViewHelper Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper

$output92 .= $viewHelper98->initializeArgumentsAndRender();

$output92 .= '
	';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper
$arguments99 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments100 = array();
$arguments100['action'] = 'new';
$arguments100['controller'] = 'Album';
// Rendering Array
$array101 = array();
$array101['gallery'] = $currentVariableContainer->getOrNull('gallery');
$arguments100['arguments'] = $array101;
$arguments100['extensionName'] = NULL;
$arguments100['pluginName'] = NULL;
$arguments100['pageUid'] = NULL;
$arguments100['pageType'] = 0;
$arguments100['noCache'] = false;
$arguments100['noCacheHash'] = false;
$arguments100['section'] = '';
$arguments100['format'] = '';
$arguments100['linkAccessRestrictedPages'] = false;
$arguments100['additionalParams'] = array (
);
$arguments100['absolute'] = false;
$arguments100['addQueryString'] = false;
$arguments100['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments100['addQueryStringMethod'] = NULL;
$renderChildrenClosure102 = function() {return NULL;};
$viewHelper103 = $self->getViewHelper('$viewHelper103', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper103->setArguments($arguments100);
$viewHelper103->setRenderingContext($renderingContext);
$viewHelper103->setRenderChildrenClosure($renderChildrenClosure102);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments99['uri'] = $viewHelper103->initializeArgumentsAndRender();
$arguments99['icon'] = 'actions-document-new';
$arguments99['title'] = '';
$arguments99['onclick'] = NULL;
$renderChildrenClosure104 = function() {return NULL;};
$viewHelper105 = $self->getViewHelper('$viewHelper105', $renderingContext, 'Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper');
$viewHelper105->setArguments($arguments99);
$viewHelper105->setRenderingContext($renderingContext);
$viewHelper105->setRenderChildrenClosure($renderChildrenClosure104);
// End of ViewHelper Tx_PtExtbase_ViewHelpers_Be_Buttons_IconViewHelper

$output92 .= $viewHelper105->initializeArgumentsAndRender();

$output92 .= '
';
return $output92;
};

$output58 .= '';

$output58 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments106 = array();
$arguments106['name'] = 'feEdit';
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output108 = '';

$output108 .= '
	';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper
$arguments109 = array();
// Rendering Array
$array110 = array();
$array110['1'] = 'album.create';
$arguments109['hasAny'] = $array110;
$arguments109['then'] = NULL;
$arguments109['else'] = NULL;
$arguments109['object'] = NULL;
$arguments109['action'] = NULL;
$arguments109['hasAll'] = NULL;
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output112 = '';

$output112 .= '
		<div class="form-actions">
			<ul class="nav nav-pills">
			';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper
$arguments113 = array();
$arguments113['object'] = 'gallery';
$arguments113['action'] = 'edit';
$arguments113['then'] = NULL;
$arguments113['else'] = NULL;
$arguments113['hasAny'] = NULL;
$arguments113['hasAll'] = NULL;
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output115 = '';

$output115 .= '
				<li>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments116 = array();
$arguments116['action'] = 'edit';
$arguments116['controller'] = 'Gallery';
// Rendering Array
$array117 = array();
$array117['gallery'] = $currentVariableContainer->getOrNull('gallery');
$arguments116['arguments'] = $array117;
$arguments116['additionalAttributes'] = NULL;
$arguments116['data'] = NULL;
$arguments116['extensionName'] = NULL;
$arguments116['pluginName'] = NULL;
$arguments116['pageUid'] = NULL;
$arguments116['pageType'] = 0;
$arguments116['noCache'] = false;
$arguments116['noCacheHash'] = false;
$arguments116['section'] = '';
$arguments116['format'] = '';
$arguments116['linkAccessRestrictedPages'] = false;
$arguments116['additionalParams'] = array (
);
$arguments116['absolute'] = false;
$arguments116['addQueryString'] = false;
$arguments116['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments116['addQueryStringMethod'] = NULL;
$arguments116['class'] = NULL;
$arguments116['dir'] = NULL;
$arguments116['id'] = NULL;
$arguments116['lang'] = NULL;
$arguments116['style'] = NULL;
$arguments116['title'] = NULL;
$arguments116['accesskey'] = NULL;
$arguments116['tabindex'] = NULL;
$arguments116['onclick'] = NULL;
$arguments116['name'] = NULL;
$arguments116['rel'] = NULL;
$arguments116['rev'] = NULL;
$arguments116['target'] = NULL;
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments119 = array();
$arguments119['key'] = 'tx_yag_controller_gallery.editGallery';
$arguments119['id'] = NULL;
$arguments119['default'] = NULL;
$arguments119['htmlEscape'] = NULL;
$arguments119['arguments'] = NULL;
$arguments119['extensionName'] = NULL;
$renderChildrenClosure120 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);
};
$viewHelper121 = $self->getViewHelper('$viewHelper121', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper121->setArguments($arguments116);
$viewHelper121->setRenderingContext($renderingContext);
$viewHelper121->setRenderChildrenClosure($renderChildrenClosure118);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output115 .= $viewHelper121->initializeArgumentsAndRender();

$output115 .= '
				</li>
			';
return $output115;
};

$output112 .= Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output112 .= '
			';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper
$arguments122 = array();
$arguments122['object'] = 'album';
$arguments122['action'] = 'create';
$arguments122['then'] = NULL;
$arguments122['else'] = NULL;
$arguments122['hasAny'] = NULL;
$arguments122['hasAll'] = NULL;
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output124 = '';

$output124 .= '
				<li>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments125 = array();
$arguments125['action'] = 'new';
$arguments125['controller'] = 'Album';
// Rendering Array
$array126 = array();
$array126['gallery'] = $currentVariableContainer->getOrNull('gallery');
$arguments125['arguments'] = $array126;
$arguments125['additionalAttributes'] = NULL;
$arguments125['data'] = NULL;
$arguments125['extensionName'] = NULL;
$arguments125['pluginName'] = NULL;
$arguments125['pageUid'] = NULL;
$arguments125['pageType'] = 0;
$arguments125['noCache'] = false;
$arguments125['noCacheHash'] = false;
$arguments125['section'] = '';
$arguments125['format'] = '';
$arguments125['linkAccessRestrictedPages'] = false;
$arguments125['additionalParams'] = array (
);
$arguments125['absolute'] = false;
$arguments125['addQueryString'] = false;
$arguments125['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments125['addQueryStringMethod'] = NULL;
$arguments125['class'] = NULL;
$arguments125['dir'] = NULL;
$arguments125['id'] = NULL;
$arguments125['lang'] = NULL;
$arguments125['style'] = NULL;
$arguments125['title'] = NULL;
$arguments125['accesskey'] = NULL;
$arguments125['tabindex'] = NULL;
$arguments125['onclick'] = NULL;
$arguments125['name'] = NULL;
$arguments125['rel'] = NULL;
$arguments125['rev'] = NULL;
$arguments125['target'] = NULL;
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments128 = array();
$arguments128['key'] = 'tx_yag_controller_album.addAlbum';
$arguments128['id'] = NULL;
$arguments128['default'] = NULL;
$arguments128['htmlEscape'] = NULL;
$arguments128['arguments'] = NULL;
$arguments128['extensionName'] = NULL;
$renderChildrenClosure129 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);
};
$viewHelper130 = $self->getViewHelper('$viewHelper130', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper130->setArguments($arguments125);
$viewHelper130->setRenderingContext($renderingContext);
$viewHelper130->setRenderChildrenClosure($renderChildrenClosure127);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output124 .= $viewHelper130->initializeArgumentsAndRender();

$output124 .= '
				</li>
			';
return $output124;
};

$output112 .= Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output112 .= '
			</ul>
		</div>
	';
return $output112;
};

$output108 .= Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper::renderStatic($arguments109, $renderChildrenClosure111, $renderingContext);

$output108 .= '
';
return $output108;
};

$output58 .= '';


return $output58;
}


}
#1468427641    39107     