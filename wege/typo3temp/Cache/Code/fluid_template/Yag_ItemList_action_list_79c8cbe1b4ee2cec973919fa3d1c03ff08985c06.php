<?php
class FluidCache_Yag_ItemList_action_list_79c8cbe1b4ee2cec973919fa3d1c03ff08985c06 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.feed.active', $renderingContext));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
        ';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Head_LinkViewHelper
$arguments4 = array();
$arguments4['rel'] = 'alternate';
$arguments4['type'] = 'application/rss+xml';
$arguments4['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.feed.title', $renderingContext);
// Rendering ViewHelper Tx_Yag_ViewHelpers_Uri_CurrentViewHelper
$arguments5 = array();
$arguments5['format'] = 'rss';
$arguments5['action'] = NULL;
$arguments5['arguments'] = array (
);
$arguments5['controller'] = NULL;
$arguments5['extensionName'] = NULL;
$arguments5['pluginName'] = NULL;
$arguments5['pageUid'] = NULL;
$arguments5['pageType'] = 0;
$arguments5['noCache'] = false;
$arguments5['noCacheHash'] = false;
$arguments5['section'] = '';
$arguments5['linkAccessRestrictedPages'] = false;
$arguments5['additionalParams'] = array (
);
$arguments5['absolute'] = false;
$arguments5['addQueryString'] = false;
$arguments5['argumentsToBeExcludedFromQueryString'] = array (
);
$renderChildrenClosure6 = function() {return NULL;};
$viewHelper7 = $self->getViewHelper('$viewHelper7', $renderingContext, 'Tx_Yag_ViewHelpers_Uri_CurrentViewHelper');
$viewHelper7->setArguments($arguments5);
$viewHelper7->setRenderingContext($renderingContext);
$viewHelper7->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper Tx_Yag_ViewHelpers_Uri_CurrentViewHelper
$arguments4['href'] = $viewHelper7->initializeArgumentsAndRender();
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['unEscapedTags'] = array (
);
$renderChildrenClosure8 = function() {return NULL;};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'Tx_PtExtbase_ViewHelpers_Head_LinkViewHelper');
$viewHelper9->setArguments($arguments4);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper Tx_PtExtbase_ViewHelpers_Head_LinkViewHelper

$output3 .= $viewHelper9->initializeArgumentsAndRender();

$output3 .= '
    ';
return $output3;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';


return $output0;
}
/**
 * section main
 */
public function section_b28b7af69320201d1cf206ebf28373980add1451(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output10 = '';

$output10 .= '
    <div class="tx-yag-items">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments11 = array();
$arguments11['each'] = $currentVariableContainer->getOrNull('listData');
$arguments11['key'] = 'rowIndex';
$arguments11['as'] = 'listRow';
$arguments11['reverse'] = false;
$arguments11['iteration'] = NULL;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output13 = '';

$output13 .= '		
		    <div class="tx-yag-thumb-outerframe tx-yag-item-thumb-outerframe" style="width:';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments14 = array();
$arguments14['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.columnRelativeWidth', $renderingContext);
$arguments14['keepQuotes'] = false;
$arguments14['encoding'] = NULL;
$arguments14['doubleEncode'] = true;
$renderChildrenClosure15 = function() {return NULL;};
$value16 = ($arguments14['value'] !== NULL ? $arguments14['value'] : $renderChildrenClosure15());

$output13 .= (!is_string($value16) ? $value16 : htmlspecialchars($value16, ($arguments14['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments14['encoding'] !== NULL ? $arguments14['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments14['doubleEncode']));

$output13 .= '%">
		    	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments17 = array();
$arguments17['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.imageThumbPartial', $renderingContext);
// Rendering Array
$array18 = array();
$array18['config'] = $currentVariableContainer->getOrNull('config');
$array18['image'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'image.value', $renderingContext);
$array18['rowIndex'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'specialValues.absoluteRowIndex', $renderingContext);
$array18['pager'] = $currentVariableContainer->getOrNull('pager');
$array18['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
$arguments17['arguments'] = $array18;
$arguments17['section'] = NULL;
$arguments17['optional'] = false;
$renderChildrenClosure19 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments17, $renderChildrenClosure19, $renderingContext);

$output13 .= '
		    </div>
		';
return $output13;
};

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '	
	</div>
	
	<div style="clear:both;">&nbsp;</div>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments20 = array();
// Rendering Boolean node
$arguments20['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.itemList.zipDownload.active', $renderingContext));
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments23 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments24 = array();
$arguments24['subject'] = NULL;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('listData');
};
$arguments23['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext));
$arguments23['then'] = NULL;
$arguments23['else'] = NULL;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output27 = '';

$output27 .= '
            ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_ZipDownloadViewHelper
$arguments28 = array();
$arguments28['album'] = $currentVariableContainer->getOrNull('album');
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['gallery'] = NULL;
$arguments28['pageUid'] = NULL;
$arguments28['pageType'] = 0;
$arguments28['noCache'] = false;
$arguments28['noCacheHash'] = false;
$arguments28['section'] = '';
$arguments28['format'] = '';
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
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments30 = array();
$arguments30['key'] = 'tx_yag_controller_album.downloadAsZip';
$arguments30['id'] = NULL;
$arguments30['default'] = NULL;
$arguments30['htmlEscape'] = NULL;
$arguments30['arguments'] = NULL;
$arguments30['extensionName'] = NULL;
$renderChildrenClosure31 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);
};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'Tx_Yag_ViewHelpers_Link_ZipDownloadViewHelper');
$viewHelper32->setArguments($arguments28);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_ZipDownloadViewHelper

$output27 .= $viewHelper32->initializeArgumentsAndRender();

$output27 .= '
        ';
return $output27;
};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments23, $renderChildrenClosure26, $renderingContext);

$output22 .= '
    ';
return $output22;
};

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output10 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments33 = array();
// Rendering Boolean node
$arguments33['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.itemList.showPager', $renderingContext));
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output35 = '';

$output35 .= '
		<div class="tx-yag-pager">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments36 = array();
$arguments36['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.pagerPartial', $renderingContext);
// Rendering Array
$array37 = array();
$array37['action'] = $currentVariableContainer->getOrNull('listAction');
$array37['controller'] = 'ItemList';
$array37['pager'] = $currentVariableContainer->getOrNull('pager');
$array37['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments38 = array();
$arguments38['key'] = 'tx_yag_domain_model_album.items';
$arguments38['id'] = NULL;
$arguments38['default'] = NULL;
$arguments38['htmlEscape'] = NULL;
$arguments38['arguments'] = NULL;
$arguments38['extensionName'] = NULL;
$renderChildrenClosure39 = function() {return NULL;};
$array37['itemsText'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);
$arguments36['arguments'] = $array37;
$arguments36['section'] = NULL;
$arguments36['optional'] = false;
$renderChildrenClosure40 = function() {return NULL;};

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments36, $renderChildrenClosure40, $renderingContext);

$output35 .= '
		</div>
    ';
return $output35;
};

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output10 .= '
';


return $output10;
}
/**
 * section feEdit
 */
public function section_70142cdf206387b7141dfd354a9ffa8f190cd9d7(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output41 = '';

$output41 .= '
	';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper
$arguments42 = array();
// Rendering Array
$array43 = array();
$array43['1'] = 'album.edit';
$array43['2'] = 'album:delete';
$arguments42['hasAny'] = $array43;
$arguments42['then'] = NULL;
$arguments42['else'] = NULL;
$arguments42['object'] = NULL;
$arguments42['action'] = NULL;
$arguments42['hasAll'] = NULL;
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output45 = '';

$output45 .= '
		<div class="form-actions">
			<ul class="nav nav-pills">

				';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper
$arguments46 = array();
$arguments46['object'] = 'album';
$arguments46['action'] = 'edit';
$arguments46['then'] = NULL;
$arguments46['else'] = NULL;
$arguments46['hasAny'] = NULL;
$arguments46['hasAll'] = NULL;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output48 = '';

$output48 .= '
						<li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments49 = array();
$arguments49['action'] = 'addItems';
$arguments49['controller'] = 'Album';
// Rendering Array
$array50 = array();
$array50['album'] = $currentVariableContainer->getOrNull('album');
$arguments49['arguments'] = $array50;
$arguments49['additionalAttributes'] = NULL;
$arguments49['data'] = NULL;
$arguments49['extensionName'] = NULL;
$arguments49['pluginName'] = NULL;
$arguments49['pageUid'] = NULL;
$arguments49['pageType'] = 0;
$arguments49['noCache'] = false;
$arguments49['noCacheHash'] = false;
$arguments49['section'] = '';
$arguments49['format'] = '';
$arguments49['linkAccessRestrictedPages'] = false;
$arguments49['additionalParams'] = array (
);
$arguments49['absolute'] = false;
$arguments49['addQueryString'] = false;
$arguments49['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments49['addQueryStringMethod'] = NULL;
$arguments49['class'] = NULL;
$arguments49['dir'] = NULL;
$arguments49['id'] = NULL;
$arguments49['lang'] = NULL;
$arguments49['style'] = NULL;
$arguments49['title'] = NULL;
$arguments49['accesskey'] = NULL;
$arguments49['tabindex'] = NULL;
$arguments49['onclick'] = NULL;
$arguments49['name'] = NULL;
$arguments49['rel'] = NULL;
$arguments49['rev'] = NULL;
$arguments49['target'] = NULL;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments52 = array();
$arguments52['key'] = 'tx_yag_controller_album_addItems';
$arguments52['id'] = NULL;
$arguments52['default'] = NULL;
$arguments52['htmlEscape'] = NULL;
$arguments52['arguments'] = NULL;
$arguments52['extensionName'] = NULL;
$renderChildrenClosure53 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);
};
$viewHelper54 = $self->getViewHelper('$viewHelper54', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper54->setArguments($arguments49);
$viewHelper54->setRenderingContext($renderingContext);
$viewHelper54->setRenderChildrenClosure($renderChildrenClosure51);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output48 .= $viewHelper54->initializeArgumentsAndRender();

$output48 .= '</li>
						<li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments55 = array();
$arguments55['action'] = 'edit';
$arguments55['controller'] = 'Album';
// Rendering Array
$array56 = array();
$array56['album'] = $currentVariableContainer->getOrNull('album');
$arguments55['arguments'] = $array56;
$arguments55['additionalAttributes'] = NULL;
$arguments55['data'] = NULL;
$arguments55['extensionName'] = NULL;
$arguments55['pluginName'] = NULL;
$arguments55['pageUid'] = NULL;
$arguments55['pageType'] = 0;
$arguments55['noCache'] = false;
$arguments55['noCacheHash'] = false;
$arguments55['section'] = '';
$arguments55['format'] = '';
$arguments55['linkAccessRestrictedPages'] = false;
$arguments55['additionalParams'] = array (
);
$arguments55['absolute'] = false;
$arguments55['addQueryString'] = false;
$arguments55['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments55['addQueryStringMethod'] = NULL;
$arguments55['class'] = NULL;
$arguments55['dir'] = NULL;
$arguments55['id'] = NULL;
$arguments55['lang'] = NULL;
$arguments55['style'] = NULL;
$arguments55['title'] = NULL;
$arguments55['accesskey'] = NULL;
$arguments55['tabindex'] = NULL;
$arguments55['onclick'] = NULL;
$arguments55['name'] = NULL;
$arguments55['rel'] = NULL;
$arguments55['rev'] = NULL;
$arguments55['target'] = NULL;
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'showDownloadAsZipLink';
};
$viewHelper58 = $self->getViewHelper('$viewHelper58', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper58->setArguments($arguments55);
$viewHelper58->setRenderingContext($renderingContext);
$viewHelper58->setRenderChildrenClosure($renderChildrenClosure57);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output48 .= $viewHelper58->initializeArgumentsAndRender();

$output48 .= '</li>
				';
return $output48;
};

$output45 .= Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '

				';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper
$arguments59 = array();
$arguments59['object'] = 'album';
$arguments59['action'] = 'delete';
$arguments59['then'] = NULL;
$arguments59['else'] = NULL;
$arguments59['hasAny'] = NULL;
$arguments59['hasAll'] = NULL;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output61 = '';

$output61 .= '
					<li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments62 = array();
$arguments62['action'] = 'delete';
$arguments62['controller'] = 'Album';
// Rendering Array
$array63 = array();
$array63['album'] = $currentVariableContainer->getOrNull('album');
$arguments62['arguments'] = $array63;
$arguments62['additionalAttributes'] = NULL;
$arguments62['data'] = NULL;
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
$arguments62['class'] = NULL;
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
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments65 = array();
$arguments65['key'] = 'tx_yag_controller_album.deleteAlbum';
$arguments65['id'] = NULL;
$arguments65['default'] = NULL;
$arguments65['htmlEscape'] = NULL;
$arguments65['arguments'] = NULL;
$arguments65['extensionName'] = NULL;
$renderChildrenClosure66 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);
};
$viewHelper67 = $self->getViewHelper('$viewHelper67', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper67->setArguments($arguments62);
$viewHelper67->setRenderingContext($renderingContext);
$viewHelper67->setRenderChildrenClosure($renderChildrenClosure64);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output61 .= $viewHelper67->initializeArgumentsAndRender();

$output61 .= '</li>
				';
return $output61;
};

$output45 .= Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output45 .= '
			</ul>
		</div>
	';
return $output45;
};

$output41 .= Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper::renderStatic($arguments42, $renderChildrenClosure44, $renderingContext);

$output41 .= '
';


return $output41;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output68 = '';

$output68 .= '



';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper
$arguments69 = array();
$arguments69['show'] = false;
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
<!--  
Template for rendering an album.

Here is a list of objects / variables that can be accessed in this template:

Tx_PtExtlist_Domain_Model_List_ListData listData               List of items in album

@package YAG
@author Daniel Lienert <typo3@lienert.cc>
@author Michael Knoll <mimi@kaktusteam.de>
-->
';
};
$viewHelper71 = $self->getViewHelper('$viewHelper71', $renderingContext, 'Tx_PtExtlist_ViewHelpers_CommentViewHelper');
$viewHelper71->setArguments($arguments69);
$viewHelper71->setRenderingContext($renderingContext);
$viewHelper71->setRenderChildrenClosure($renderChildrenClosure70);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper

$output68 .= $viewHelper71->initializeArgumentsAndRender();

$output68 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments72 = array();
$arguments72['name'] = 'Default';
$renderChildrenClosure73 = function() {return NULL;};
$viewHelper74 = $self->getViewHelper('$viewHelper74', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper74->setArguments($arguments72);
$viewHelper74->setRenderingContext($renderingContext);
$viewHelper74->setRenderChildrenClosure($renderChildrenClosure73);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output68 .= $viewHelper74->initializeArgumentsAndRender();

$output68 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments75 = array();
$arguments75['name'] = 'head';
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output77 = '';

$output77 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments78 = array();
// Rendering Boolean node
$arguments78['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.feed.active', $renderingContext));
$arguments78['then'] = NULL;
$arguments78['else'] = NULL;
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output80 = '';

$output80 .= '
        ';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Head_LinkViewHelper
$arguments81 = array();
$arguments81['rel'] = 'alternate';
$arguments81['type'] = 'application/rss+xml';
$arguments81['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.feed.title', $renderingContext);
// Rendering ViewHelper Tx_Yag_ViewHelpers_Uri_CurrentViewHelper
$arguments82 = array();
$arguments82['format'] = 'rss';
$arguments82['action'] = NULL;
$arguments82['arguments'] = array (
);
$arguments82['controller'] = NULL;
$arguments82['extensionName'] = NULL;
$arguments82['pluginName'] = NULL;
$arguments82['pageUid'] = NULL;
$arguments82['pageType'] = 0;
$arguments82['noCache'] = false;
$arguments82['noCacheHash'] = false;
$arguments82['section'] = '';
$arguments82['linkAccessRestrictedPages'] = false;
$arguments82['additionalParams'] = array (
);
$arguments82['absolute'] = false;
$arguments82['addQueryString'] = false;
$arguments82['argumentsToBeExcludedFromQueryString'] = array (
);
$renderChildrenClosure83 = function() {return NULL;};
$viewHelper84 = $self->getViewHelper('$viewHelper84', $renderingContext, 'Tx_Yag_ViewHelpers_Uri_CurrentViewHelper');
$viewHelper84->setArguments($arguments82);
$viewHelper84->setRenderingContext($renderingContext);
$viewHelper84->setRenderChildrenClosure($renderChildrenClosure83);
// End of ViewHelper Tx_Yag_ViewHelpers_Uri_CurrentViewHelper
$arguments81['href'] = $viewHelper84->initializeArgumentsAndRender();
$arguments81['additionalAttributes'] = NULL;
$arguments81['data'] = NULL;
$arguments81['unEscapedTags'] = array (
);
$renderChildrenClosure85 = function() {return NULL;};
$viewHelper86 = $self->getViewHelper('$viewHelper86', $renderingContext, 'Tx_PtExtbase_ViewHelpers_Head_LinkViewHelper');
$viewHelper86->setArguments($arguments81);
$viewHelper86->setRenderingContext($renderingContext);
$viewHelper86->setRenderChildrenClosure($renderChildrenClosure85);
// End of ViewHelper Tx_PtExtbase_ViewHelpers_Head_LinkViewHelper

$output80 .= $viewHelper86->initializeArgumentsAndRender();

$output80 .= '
    ';
return $output80;
};

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
';
return $output77;
};

$output68 .= '';

$output68 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments87 = array();
$arguments87['name'] = 'main';
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output89 = '';

$output89 .= '
    <div class="tx-yag-items">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments90 = array();
$arguments90['each'] = $currentVariableContainer->getOrNull('listData');
$arguments90['key'] = 'rowIndex';
$arguments90['as'] = 'listRow';
$arguments90['reverse'] = false;
$arguments90['iteration'] = NULL;
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output92 = '';

$output92 .= '		
		    <div class="tx-yag-thumb-outerframe tx-yag-item-thumb-outerframe" style="width:';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments93 = array();
$arguments93['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.columnRelativeWidth', $renderingContext);
$arguments93['keepQuotes'] = false;
$arguments93['encoding'] = NULL;
$arguments93['doubleEncode'] = true;
$renderChildrenClosure94 = function() {return NULL;};
$value95 = ($arguments93['value'] !== NULL ? $arguments93['value'] : $renderChildrenClosure94());

$output92 .= (!is_string($value95) ? $value95 : htmlspecialchars($value95, ($arguments93['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments93['encoding'] !== NULL ? $arguments93['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments93['doubleEncode']));

$output92 .= '%">
		    	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments96 = array();
$arguments96['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.imageThumbPartial', $renderingContext);
// Rendering Array
$array97 = array();
$array97['config'] = $currentVariableContainer->getOrNull('config');
$array97['image'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'image.value', $renderingContext);
$array97['rowIndex'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('listRow'), 'specialValues.absoluteRowIndex', $renderingContext);
$array97['pager'] = $currentVariableContainer->getOrNull('pager');
$array97['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
$arguments96['arguments'] = $array97;
$arguments96['section'] = NULL;
$arguments96['optional'] = false;
$renderChildrenClosure98 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments96, $renderChildrenClosure98, $renderingContext);

$output92 .= '
		    </div>
		';
return $output92;
};

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '	
	</div>
	
	<div style="clear:both;">&nbsp;</div>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments99 = array();
// Rendering Boolean node
$arguments99['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.itemList.zipDownload.active', $renderingContext));
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output101 = '';

$output101 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments102 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments103 = array();
$arguments103['subject'] = NULL;
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('listData');
};
$arguments102['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext));
$arguments102['then'] = NULL;
$arguments102['else'] = NULL;
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output106 = '';

$output106 .= '
            ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Link_ZipDownloadViewHelper
$arguments107 = array();
$arguments107['album'] = $currentVariableContainer->getOrNull('album');
$arguments107['additionalAttributes'] = NULL;
$arguments107['data'] = NULL;
$arguments107['gallery'] = NULL;
$arguments107['pageUid'] = NULL;
$arguments107['pageType'] = 0;
$arguments107['noCache'] = false;
$arguments107['noCacheHash'] = false;
$arguments107['section'] = '';
$arguments107['format'] = '';
$arguments107['class'] = NULL;
$arguments107['dir'] = NULL;
$arguments107['id'] = NULL;
$arguments107['lang'] = NULL;
$arguments107['style'] = NULL;
$arguments107['title'] = NULL;
$arguments107['accesskey'] = NULL;
$arguments107['tabindex'] = NULL;
$arguments107['onclick'] = NULL;
$arguments107['name'] = NULL;
$arguments107['rel'] = NULL;
$arguments107['rev'] = NULL;
$arguments107['target'] = NULL;
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments109 = array();
$arguments109['key'] = 'tx_yag_controller_album.downloadAsZip';
$arguments109['id'] = NULL;
$arguments109['default'] = NULL;
$arguments109['htmlEscape'] = NULL;
$arguments109['arguments'] = NULL;
$arguments109['extensionName'] = NULL;
$renderChildrenClosure110 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);
};
$viewHelper111 = $self->getViewHelper('$viewHelper111', $renderingContext, 'Tx_Yag_ViewHelpers_Link_ZipDownloadViewHelper');
$viewHelper111->setArguments($arguments107);
$viewHelper111->setRenderingContext($renderingContext);
$viewHelper111->setRenderChildrenClosure($renderChildrenClosure108);
// End of ViewHelper Tx_Yag_ViewHelpers_Link_ZipDownloadViewHelper

$output106 .= $viewHelper111->initializeArgumentsAndRender();

$output106 .= '
        ';
return $output106;
};

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments102, $renderChildrenClosure105, $renderingContext);

$output101 .= '
    ';
return $output101;
};

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output89 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments112 = array();
// Rendering Boolean node
$arguments112['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'settings.itemList.showPager', $renderingContext));
$arguments112['then'] = NULL;
$arguments112['else'] = NULL;
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output114 = '';

$output114 .= '
		<div class="tx-yag-pager">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments115 = array();
$arguments115['partial'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('config'), 'itemListConfig.pagerPartial', $renderingContext);
// Rendering Array
$array116 = array();
$array116['action'] = $currentVariableContainer->getOrNull('listAction');
$array116['controller'] = 'ItemList';
$array116['pager'] = $currentVariableContainer->getOrNull('pager');
$array116['pagerCollection'] = $currentVariableContainer->getOrNull('pagerCollection');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments117 = array();
$arguments117['key'] = 'tx_yag_domain_model_album.items';
$arguments117['id'] = NULL;
$arguments117['default'] = NULL;
$arguments117['htmlEscape'] = NULL;
$arguments117['arguments'] = NULL;
$arguments117['extensionName'] = NULL;
$renderChildrenClosure118 = function() {return NULL;};
$array116['itemsText'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);
$arguments115['arguments'] = $array116;
$arguments115['section'] = NULL;
$arguments115['optional'] = false;
$renderChildrenClosure119 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments115, $renderChildrenClosure119, $renderingContext);

$output114 .= '
		</div>
    ';
return $output114;
};

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output89 .= '
';
return $output89;
};

$output68 .= '';

$output68 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments120 = array();
$arguments120['name'] = 'feEdit';
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output122 = '';

$output122 .= '
	';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper
$arguments123 = array();
// Rendering Array
$array124 = array();
$array124['1'] = 'album.edit';
$array124['2'] = 'album:delete';
$arguments123['hasAny'] = $array124;
$arguments123['then'] = NULL;
$arguments123['else'] = NULL;
$arguments123['object'] = NULL;
$arguments123['action'] = NULL;
$arguments123['hasAll'] = NULL;
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output126 = '';

$output126 .= '
		<div class="form-actions">
			<ul class="nav nav-pills">

				';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper
$arguments127 = array();
$arguments127['object'] = 'album';
$arguments127['action'] = 'edit';
$arguments127['then'] = NULL;
$arguments127['else'] = NULL;
$arguments127['hasAny'] = NULL;
$arguments127['hasAll'] = NULL;
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output129 = '';

$output129 .= '
						<li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments130 = array();
$arguments130['action'] = 'addItems';
$arguments130['controller'] = 'Album';
// Rendering Array
$array131 = array();
$array131['album'] = $currentVariableContainer->getOrNull('album');
$arguments130['arguments'] = $array131;
$arguments130['additionalAttributes'] = NULL;
$arguments130['data'] = NULL;
$arguments130['extensionName'] = NULL;
$arguments130['pluginName'] = NULL;
$arguments130['pageUid'] = NULL;
$arguments130['pageType'] = 0;
$arguments130['noCache'] = false;
$arguments130['noCacheHash'] = false;
$arguments130['section'] = '';
$arguments130['format'] = '';
$arguments130['linkAccessRestrictedPages'] = false;
$arguments130['additionalParams'] = array (
);
$arguments130['absolute'] = false;
$arguments130['addQueryString'] = false;
$arguments130['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments130['addQueryStringMethod'] = NULL;
$arguments130['class'] = NULL;
$arguments130['dir'] = NULL;
$arguments130['id'] = NULL;
$arguments130['lang'] = NULL;
$arguments130['style'] = NULL;
$arguments130['title'] = NULL;
$arguments130['accesskey'] = NULL;
$arguments130['tabindex'] = NULL;
$arguments130['onclick'] = NULL;
$arguments130['name'] = NULL;
$arguments130['rel'] = NULL;
$arguments130['rev'] = NULL;
$arguments130['target'] = NULL;
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments133 = array();
$arguments133['key'] = 'tx_yag_controller_album_addItems';
$arguments133['id'] = NULL;
$arguments133['default'] = NULL;
$arguments133['htmlEscape'] = NULL;
$arguments133['arguments'] = NULL;
$arguments133['extensionName'] = NULL;
$renderChildrenClosure134 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);
};
$viewHelper135 = $self->getViewHelper('$viewHelper135', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper135->setArguments($arguments130);
$viewHelper135->setRenderingContext($renderingContext);
$viewHelper135->setRenderChildrenClosure($renderChildrenClosure132);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output129 .= $viewHelper135->initializeArgumentsAndRender();

$output129 .= '</li>
						<li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments136 = array();
$arguments136['action'] = 'edit';
$arguments136['controller'] = 'Album';
// Rendering Array
$array137 = array();
$array137['album'] = $currentVariableContainer->getOrNull('album');
$arguments136['arguments'] = $array137;
$arguments136['additionalAttributes'] = NULL;
$arguments136['data'] = NULL;
$arguments136['extensionName'] = NULL;
$arguments136['pluginName'] = NULL;
$arguments136['pageUid'] = NULL;
$arguments136['pageType'] = 0;
$arguments136['noCache'] = false;
$arguments136['noCacheHash'] = false;
$arguments136['section'] = '';
$arguments136['format'] = '';
$arguments136['linkAccessRestrictedPages'] = false;
$arguments136['additionalParams'] = array (
);
$arguments136['absolute'] = false;
$arguments136['addQueryString'] = false;
$arguments136['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments136['addQueryStringMethod'] = NULL;
$arguments136['class'] = NULL;
$arguments136['dir'] = NULL;
$arguments136['id'] = NULL;
$arguments136['lang'] = NULL;
$arguments136['style'] = NULL;
$arguments136['title'] = NULL;
$arguments136['accesskey'] = NULL;
$arguments136['tabindex'] = NULL;
$arguments136['onclick'] = NULL;
$arguments136['name'] = NULL;
$arguments136['rel'] = NULL;
$arguments136['rev'] = NULL;
$arguments136['target'] = NULL;
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'showDownloadAsZipLink';
};
$viewHelper139 = $self->getViewHelper('$viewHelper139', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper139->setArguments($arguments136);
$viewHelper139->setRenderingContext($renderingContext);
$viewHelper139->setRenderChildrenClosure($renderChildrenClosure138);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output129 .= $viewHelper139->initializeArgumentsAndRender();

$output129 .= '</li>
				';
return $output129;
};

$output126 .= Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '

				';
// Rendering ViewHelper Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper
$arguments140 = array();
$arguments140['object'] = 'album';
$arguments140['action'] = 'delete';
$arguments140['then'] = NULL;
$arguments140['else'] = NULL;
$arguments140['hasAny'] = NULL;
$arguments140['hasAll'] = NULL;
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output142 = '';

$output142 .= '
					<li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments143 = array();
$arguments143['action'] = 'delete';
$arguments143['controller'] = 'Album';
// Rendering Array
$array144 = array();
$array144['album'] = $currentVariableContainer->getOrNull('album');
$arguments143['arguments'] = $array144;
$arguments143['additionalAttributes'] = NULL;
$arguments143['data'] = NULL;
$arguments143['extensionName'] = NULL;
$arguments143['pluginName'] = NULL;
$arguments143['pageUid'] = NULL;
$arguments143['pageType'] = 0;
$arguments143['noCache'] = false;
$arguments143['noCacheHash'] = false;
$arguments143['section'] = '';
$arguments143['format'] = '';
$arguments143['linkAccessRestrictedPages'] = false;
$arguments143['additionalParams'] = array (
);
$arguments143['absolute'] = false;
$arguments143['addQueryString'] = false;
$arguments143['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments143['addQueryStringMethod'] = NULL;
$arguments143['class'] = NULL;
$arguments143['dir'] = NULL;
$arguments143['id'] = NULL;
$arguments143['lang'] = NULL;
$arguments143['style'] = NULL;
$arguments143['title'] = NULL;
$arguments143['accesskey'] = NULL;
$arguments143['tabindex'] = NULL;
$arguments143['onclick'] = NULL;
$arguments143['name'] = NULL;
$arguments143['rel'] = NULL;
$arguments143['rev'] = NULL;
$arguments143['target'] = NULL;
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments146 = array();
$arguments146['key'] = 'tx_yag_controller_album.deleteAlbum';
$arguments146['id'] = NULL;
$arguments146['default'] = NULL;
$arguments146['htmlEscape'] = NULL;
$arguments146['arguments'] = NULL;
$arguments146['extensionName'] = NULL;
$renderChildrenClosure147 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);
};
$viewHelper148 = $self->getViewHelper('$viewHelper148', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper148->setArguments($arguments143);
$viewHelper148->setRenderingContext($renderingContext);
$viewHelper148->setRenderChildrenClosure($renderChildrenClosure145);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output142 .= $viewHelper148->initializeArgumentsAndRender();

$output142 .= '</li>
				';
return $output142;
};

$output126 .= Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output126 .= '
			</ul>
		</div>
	';
return $output126;
};

$output122 .= Tx_PtExtbase_ViewHelpers_Rbac_HasAccessViewHelper::renderStatic($arguments123, $renderChildrenClosure125, $renderingContext);

$output122 .= '
';
return $output122;
};

$output68 .= '';


return $output68;
}


}
#1461762518    46947     