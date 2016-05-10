<?php
class FluidCache_Yag_Gallery_action_index_9a565ceb3ba27b460b3d51881059562e76b86a88 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section main
 */
public function section_b28b7af69320201d1cf206ebf28373980add1451(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper
$arguments1 = array();
$arguments1['templatePath'] = 'EXT:yag/Resources/Private/JSTemplates/GalleryBackendIndex.js';
// Rendering Array
$array2 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments3 = array();
$arguments3['controller'] = 'Ajax';
$arguments3['action'] = NULL;
$arguments3['arguments'] = array (
);
$arguments3['extensionName'] = NULL;
$arguments3['pluginName'] = NULL;
$arguments3['pageUid'] = NULL;
$arguments3['pageType'] = 0;
$arguments3['noCache'] = false;
$arguments3['noCacheHash'] = false;
$arguments3['section'] = '';
$arguments3['format'] = '';
$arguments3['linkAccessRestrictedPages'] = false;
$arguments3['additionalParams'] = array (
);
$arguments3['absolute'] = false;
$arguments3['addQueryString'] = false;
$arguments3['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments3['addQueryStringMethod'] = NULL;
$renderChildrenClosure4 = function() {return NULL;};
$viewHelper5 = $self->getViewHelper('$viewHelper5', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper5->setArguments($arguments3);
$viewHelper5->setRenderingContext($renderingContext);
$viewHelper5->setRenderChildrenClosure($renderChildrenClosure4);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$array2['ajaxBaseURL'] = $viewHelper5->initializeArgumentsAndRender();
$array2['galleryUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'uid', $renderingContext);
$arguments1['arguments'] = $array2;
$arguments1['position'] = 'current';
$arguments1['type'] = 'text/javascript';
$renderChildrenClosure6 = function() {return NULL;};
$viewHelper7 = $self->getViewHelper('$viewHelper7', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper');
$viewHelper7->setArguments($arguments1);
$viewHelper7->setRenderingContext($renderingContext);
$viewHelper7->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper

$output0 .= $viewHelper7->initializeArgumentsAndRender();

$output0 .= '

    <script>
        jQuery(function () {
            jQuery("#tabs").tabs();
        });
    </script>
    <h2>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments8 = array();
$arguments8['key'] = 'tx_yag_domain_model_gallery';
$arguments8['id'] = NULL;
$arguments8['default'] = NULL;
$arguments8['htmlEscape'] = NULL;
$arguments8['arguments'] = NULL;
$arguments8['extensionName'] = NULL;
$renderChildrenClosure9 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
        : ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'name', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = NULL;
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() {return NULL;};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output0 .= (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments10['encoding'] !== NULL ? $arguments10['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments10['doubleEncode']));

$output0 .= '
    </h2>
    <div class="#messages"></div>

    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments13 = array();
$arguments13['key'] = 'gallery.edit.albums';
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$renderChildrenClosure14 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
            </a></li>
            <li><a href="#tabs-2">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments15 = array();
$arguments15['key'] = 'gallery.edit.albumBulkEdit';
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
            </a></li>
            <li><a href="#tabs-3">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments17 = array();
$arguments17['key'] = 'gallery.edit.settings';
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['htmlEscape'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$renderChildrenClosure18 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '
            </a></li>
        </ul>

        <div id="tabs-1">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments19 = array();
$arguments19['partial'] = 'EXT:yag/Resources/Private/Templates/Themes/Backend/Gallery/Partials/IndexTabAlbums.html';
$arguments19['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments19['section'] = NULL;
$arguments19['optional'] = false;
$renderChildrenClosure20 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output0 .= '
        </div>

        <div id="tabs-2">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments21 = array();
$arguments21['partial'] = 'EXT:yag/Resources/Private/Templates/Themes/Backend/Gallery/Partials/IndexTabEditAlbums.html';
$arguments21['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments21['section'] = NULL;
$arguments21['optional'] = false;
$renderChildrenClosure22 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output0 .= '
        </div>

        <div id="tabs-3">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments23 = array();
$arguments23['partial'] = 'EXT:yag/Resources/Private/Templates/Themes/Backend/Gallery/Partials/IndexTabGallerySettings.html';
$arguments23['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments23['section'] = NULL;
$arguments23['optional'] = false;
$renderChildrenClosure24 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output0 .= '
        </div>
    </div>
';


return $output0;
}
/**
 * section beButtonsLeft
 */
public function section_cf0fe0f1a8ee78bebfb9f3c54af26f541cb3674a(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output25 = '';

$output25 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments26 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments27 = array();
$arguments27['action'] = 'list';
$arguments27['arguments'] = array (
);
$arguments27['controller'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['pluginName'] = NULL;
$arguments27['pageUid'] = NULL;
$arguments27['pageType'] = 0;
$arguments27['noCache'] = false;
$arguments27['noCacheHash'] = false;
$arguments27['section'] = '';
$arguments27['format'] = '';
$arguments27['linkAccessRestrictedPages'] = false;
$arguments27['additionalParams'] = array (
);
$arguments27['absolute'] = false;
$arguments27['addQueryString'] = false;
$arguments27['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments27['addQueryStringMethod'] = NULL;
$renderChildrenClosure28 = function() {return NULL;};
$viewHelper29 = $self->getViewHelper('$viewHelper29', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper29->setArguments($arguments27);
$viewHelper29->setRenderingContext($renderingContext);
$viewHelper29->setRenderChildrenClosure($renderChildrenClosure28);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments26['uri'] = $viewHelper29->initializeArgumentsAndRender();
$arguments26['icon'] = 'actions-document-close';
$arguments26['title'] = '';
$arguments26['additionalAttributes'] = array (
);
$renderChildrenClosure30 = function() {return NULL;};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments26, $renderChildrenClosure30, $renderingContext);

$output25 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments31 = array();
$arguments31['action'] = 'delete';
// Rendering Array
$array32 = array();
$array32['gallery'] = $currentVariableContainer->getOrNull('gallery');
$arguments31['arguments'] = $array32;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments33 = array();
$arguments33['key'] = 'tx_yag_controller_album.deleteAlbum';
$arguments33['id'] = NULL;
$arguments33['default'] = NULL;
$arguments33['htmlEscape'] = NULL;
$arguments33['arguments'] = NULL;
$arguments33['extensionName'] = NULL;
$renderChildrenClosure34 = function() {return NULL;};
$arguments31['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['controller'] = NULL;
$arguments31['extensionName'] = NULL;
$arguments31['pluginName'] = NULL;
$arguments31['pageUid'] = NULL;
$arguments31['pageType'] = 0;
$arguments31['noCache'] = false;
$arguments31['noCacheHash'] = false;
$arguments31['section'] = '';
$arguments31['format'] = '';
$arguments31['linkAccessRestrictedPages'] = false;
$arguments31['additionalParams'] = array (
);
$arguments31['absolute'] = false;
$arguments31['addQueryString'] = false;
$arguments31['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments31['addQueryStringMethod'] = NULL;
$arguments31['class'] = NULL;
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['tabindex'] = NULL;
$arguments31['onclick'] = NULL;
$arguments31['name'] = NULL;
$arguments31['rel'] = NULL;
$arguments31['rev'] = NULL;
$arguments31['target'] = NULL;
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output36 = '';

$output36 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments37 = array();
$arguments37['identifier'] = 'actions-edit-delete';
$arguments37['size'] = 'small';
$arguments37['overlay'] = NULL;
$arguments37['state'] = 'default';
$arguments37['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure38 = function() {return NULL;};

$output36 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
    ';
return $output36;
};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper39->setArguments($arguments31);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output25 .= $viewHelper39->initializeArgumentsAndRender();

$output25 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments40 = array();
$arguments40['action'] = 'new';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments41 = array();
$arguments41['key'] = 'tx_yag_controller_album.addAlbum';
$arguments41['id'] = NULL;
$arguments41['default'] = NULL;
$arguments41['htmlEscape'] = NULL;
$arguments41['arguments'] = NULL;
$arguments41['extensionName'] = NULL;
$renderChildrenClosure42 = function() {return NULL;};
$arguments40['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);
$arguments40['additionalAttributes'] = NULL;
$arguments40['data'] = NULL;
$arguments40['arguments'] = array (
);
$arguments40['controller'] = NULL;
$arguments40['extensionName'] = NULL;
$arguments40['pluginName'] = NULL;
$arguments40['pageUid'] = NULL;
$arguments40['pageType'] = 0;
$arguments40['noCache'] = false;
$arguments40['noCacheHash'] = false;
$arguments40['section'] = '';
$arguments40['format'] = '';
$arguments40['linkAccessRestrictedPages'] = false;
$arguments40['additionalParams'] = array (
);
$arguments40['absolute'] = false;
$arguments40['addQueryString'] = false;
$arguments40['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments40['addQueryStringMethod'] = NULL;
$arguments40['class'] = NULL;
$arguments40['dir'] = NULL;
$arguments40['id'] = NULL;
$arguments40['lang'] = NULL;
$arguments40['style'] = NULL;
$arguments40['accesskey'] = NULL;
$arguments40['tabindex'] = NULL;
$arguments40['onclick'] = NULL;
$arguments40['name'] = NULL;
$arguments40['rel'] = NULL;
$arguments40['rev'] = NULL;
$arguments40['target'] = NULL;
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output44 = '';

$output44 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments45 = array();
$arguments45['identifier'] = 'actions-document-new';
$arguments45['size'] = 'small';
$arguments45['overlay'] = NULL;
$arguments45['state'] = 'default';
$arguments45['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure46 = function() {return NULL;};

$output44 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
    ';
return $output44;
};
$viewHelper47 = $self->getViewHelper('$viewHelper47', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper47->setArguments($arguments40);
$viewHelper47->setRenderingContext($renderingContext);
$viewHelper47->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output25 .= $viewHelper47->initializeArgumentsAndRender();

$output25 .= '
';


return $output25;
}
/**
 * section feEdit
 */
public function section_70142cdf206387b7141dfd354a9ffa8f190cd9d7(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();



return NULL;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output48 = '';

$output48 .= '





';
// Rendering ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper
$arguments49 = array();
$arguments49['show'] = false;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
    <!--
    Template for rendering gallery index in backend context

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
$viewHelper51 = $self->getViewHelper('$viewHelper51', $renderingContext, 'Tx_PtExtlist_ViewHelpers_CommentViewHelper');
$viewHelper51->setArguments($arguments49);
$viewHelper51->setRenderingContext($renderingContext);
$viewHelper51->setRenderChildrenClosure($renderChildrenClosure50);
// End of ViewHelper Tx_PtExtlist_ViewHelpers_CommentViewHelper

$output48 .= $viewHelper51->initializeArgumentsAndRender();

$output48 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments52 = array();
$arguments52['name'] = 'Default';
$renderChildrenClosure53 = function() {return NULL;};
$viewHelper54 = $self->getViewHelper('$viewHelper54', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper54->setArguments($arguments52);
$viewHelper54->setRenderingContext($renderingContext);
$viewHelper54->setRenderChildrenClosure($renderChildrenClosure53);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output48 .= $viewHelper54->initializeArgumentsAndRender();

$output48 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments55 = array();
$arguments55['name'] = 'main';
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output57 = '';

$output57 .= '

    ';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper
$arguments58 = array();
$arguments58['templatePath'] = 'EXT:yag/Resources/Private/JSTemplates/GalleryBackendIndex.js';
// Rendering Array
$array59 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments60 = array();
$arguments60['controller'] = 'Ajax';
$arguments60['action'] = NULL;
$arguments60['arguments'] = array (
);
$arguments60['extensionName'] = NULL;
$arguments60['pluginName'] = NULL;
$arguments60['pageUid'] = NULL;
$arguments60['pageType'] = 0;
$arguments60['noCache'] = false;
$arguments60['noCacheHash'] = false;
$arguments60['section'] = '';
$arguments60['format'] = '';
$arguments60['linkAccessRestrictedPages'] = false;
$arguments60['additionalParams'] = array (
);
$arguments60['absolute'] = false;
$arguments60['addQueryString'] = false;
$arguments60['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments60['addQueryStringMethod'] = NULL;
$renderChildrenClosure61 = function() {return NULL;};
$viewHelper62 = $self->getViewHelper('$viewHelper62', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper62->setArguments($arguments60);
$viewHelper62->setRenderingContext($renderingContext);
$viewHelper62->setRenderChildrenClosure($renderChildrenClosure61);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$array59['ajaxBaseURL'] = $viewHelper62->initializeArgumentsAndRender();
$array59['galleryUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'uid', $renderingContext);
$arguments58['arguments'] = $array59;
$arguments58['position'] = 'current';
$arguments58['type'] = 'text/javascript';
$renderChildrenClosure63 = function() {return NULL;};
$viewHelper64 = $self->getViewHelper('$viewHelper64', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper');
$viewHelper64->setArguments($arguments58);
$viewHelper64->setRenderingContext($renderingContext);
$viewHelper64->setRenderChildrenClosure($renderChildrenClosure63);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper

$output57 .= $viewHelper64->initializeArgumentsAndRender();

$output57 .= '

    <script>
        jQuery(function () {
            jQuery("#tabs").tabs();
        });
    </script>
    <h2>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments65 = array();
$arguments65['key'] = 'tx_yag_domain_model_gallery';
$arguments65['id'] = NULL;
$arguments65['default'] = NULL;
$arguments65['htmlEscape'] = NULL;
$arguments65['arguments'] = NULL;
$arguments65['extensionName'] = NULL;
$renderChildrenClosure66 = function() {return NULL;};

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output57 .= '
        : ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments67 = array();
$arguments67['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'name', $renderingContext);
$arguments67['keepQuotes'] = false;
$arguments67['encoding'] = NULL;
$arguments67['doubleEncode'] = true;
$renderChildrenClosure68 = function() {return NULL;};
$value69 = ($arguments67['value'] !== NULL ? $arguments67['value'] : $renderChildrenClosure68());

$output57 .= (!is_string($value69) ? $value69 : htmlspecialchars($value69, ($arguments67['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments67['encoding'] !== NULL ? $arguments67['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments67['doubleEncode']));

$output57 .= '
    </h2>
    <div class="#messages"></div>

    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments70 = array();
$arguments70['key'] = 'gallery.edit.albums';
$arguments70['id'] = NULL;
$arguments70['default'] = NULL;
$arguments70['htmlEscape'] = NULL;
$arguments70['arguments'] = NULL;
$arguments70['extensionName'] = NULL;
$renderChildrenClosure71 = function() {return NULL;};

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output57 .= '
            </a></li>
            <li><a href="#tabs-2">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments72 = array();
$arguments72['key'] = 'gallery.edit.albumBulkEdit';
$arguments72['id'] = NULL;
$arguments72['default'] = NULL;
$arguments72['htmlEscape'] = NULL;
$arguments72['arguments'] = NULL;
$arguments72['extensionName'] = NULL;
$renderChildrenClosure73 = function() {return NULL;};

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output57 .= '
            </a></li>
            <li><a href="#tabs-3">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments74 = array();
$arguments74['key'] = 'gallery.edit.settings';
$arguments74['id'] = NULL;
$arguments74['default'] = NULL;
$arguments74['htmlEscape'] = NULL;
$arguments74['arguments'] = NULL;
$arguments74['extensionName'] = NULL;
$renderChildrenClosure75 = function() {return NULL;};

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output57 .= '
            </a></li>
        </ul>

        <div id="tabs-1">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments76 = array();
$arguments76['partial'] = 'EXT:yag/Resources/Private/Templates/Themes/Backend/Gallery/Partials/IndexTabAlbums.html';
$arguments76['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments76['section'] = NULL;
$arguments76['optional'] = false;
$renderChildrenClosure77 = function() {return NULL;};

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output57 .= '
        </div>

        <div id="tabs-2">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments78 = array();
$arguments78['partial'] = 'EXT:yag/Resources/Private/Templates/Themes/Backend/Gallery/Partials/IndexTabEditAlbums.html';
$arguments78['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments78['section'] = NULL;
$arguments78['optional'] = false;
$renderChildrenClosure79 = function() {return NULL;};

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output57 .= '
        </div>

        <div id="tabs-3">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments80 = array();
$arguments80['partial'] = 'EXT:yag/Resources/Private/Templates/Themes/Backend/Gallery/Partials/IndexTabGallerySettings.html';
$arguments80['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments80['section'] = NULL;
$arguments80['optional'] = false;
$renderChildrenClosure81 = function() {return NULL;};

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output57 .= '
        </div>
    </div>
';
return $output57;
};

$output48 .= '';

$output48 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments82 = array();
$arguments82['name'] = 'beButtonsLeft';
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output84 = '';

$output84 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments85 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments86 = array();
$arguments86['action'] = 'list';
$arguments86['arguments'] = array (
);
$arguments86['controller'] = NULL;
$arguments86['extensionName'] = NULL;
$arguments86['pluginName'] = NULL;
$arguments86['pageUid'] = NULL;
$arguments86['pageType'] = 0;
$arguments86['noCache'] = false;
$arguments86['noCacheHash'] = false;
$arguments86['section'] = '';
$arguments86['format'] = '';
$arguments86['linkAccessRestrictedPages'] = false;
$arguments86['additionalParams'] = array (
);
$arguments86['absolute'] = false;
$arguments86['addQueryString'] = false;
$arguments86['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments86['addQueryStringMethod'] = NULL;
$renderChildrenClosure87 = function() {return NULL;};
$viewHelper88 = $self->getViewHelper('$viewHelper88', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper88->setArguments($arguments86);
$viewHelper88->setRenderingContext($renderingContext);
$viewHelper88->setRenderChildrenClosure($renderChildrenClosure87);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments85['uri'] = $viewHelper88->initializeArgumentsAndRender();
$arguments85['icon'] = 'actions-document-close';
$arguments85['title'] = '';
$arguments85['additionalAttributes'] = array (
);
$renderChildrenClosure89 = function() {return NULL;};

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper::renderStatic($arguments85, $renderChildrenClosure89, $renderingContext);

$output84 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments90 = array();
$arguments90['action'] = 'delete';
// Rendering Array
$array91 = array();
$array91['gallery'] = $currentVariableContainer->getOrNull('gallery');
$arguments90['arguments'] = $array91;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments92 = array();
$arguments92['key'] = 'tx_yag_controller_album.deleteAlbum';
$arguments92['id'] = NULL;
$arguments92['default'] = NULL;
$arguments92['htmlEscape'] = NULL;
$arguments92['arguments'] = NULL;
$arguments92['extensionName'] = NULL;
$renderChildrenClosure93 = function() {return NULL;};
$arguments90['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);
$arguments90['additionalAttributes'] = NULL;
$arguments90['data'] = NULL;
$arguments90['controller'] = NULL;
$arguments90['extensionName'] = NULL;
$arguments90['pluginName'] = NULL;
$arguments90['pageUid'] = NULL;
$arguments90['pageType'] = 0;
$arguments90['noCache'] = false;
$arguments90['noCacheHash'] = false;
$arguments90['section'] = '';
$arguments90['format'] = '';
$arguments90['linkAccessRestrictedPages'] = false;
$arguments90['additionalParams'] = array (
);
$arguments90['absolute'] = false;
$arguments90['addQueryString'] = false;
$arguments90['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments90['addQueryStringMethod'] = NULL;
$arguments90['class'] = NULL;
$arguments90['dir'] = NULL;
$arguments90['id'] = NULL;
$arguments90['lang'] = NULL;
$arguments90['style'] = NULL;
$arguments90['accesskey'] = NULL;
$arguments90['tabindex'] = NULL;
$arguments90['onclick'] = NULL;
$arguments90['name'] = NULL;
$arguments90['rel'] = NULL;
$arguments90['rev'] = NULL;
$arguments90['target'] = NULL;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output95 = '';

$output95 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments96 = array();
$arguments96['identifier'] = 'actions-edit-delete';
$arguments96['size'] = 'small';
$arguments96['overlay'] = NULL;
$arguments96['state'] = 'default';
$arguments96['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure97 = function() {return NULL;};

$output95 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '
    ';
return $output95;
};
$viewHelper98 = $self->getViewHelper('$viewHelper98', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper98->setArguments($arguments90);
$viewHelper98->setRenderingContext($renderingContext);
$viewHelper98->setRenderChildrenClosure($renderChildrenClosure94);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output84 .= $viewHelper98->initializeArgumentsAndRender();

$output84 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments99 = array();
$arguments99['action'] = 'new';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments100 = array();
$arguments100['key'] = 'tx_yag_controller_album.addAlbum';
$arguments100['id'] = NULL;
$arguments100['default'] = NULL;
$arguments100['htmlEscape'] = NULL;
$arguments100['arguments'] = NULL;
$arguments100['extensionName'] = NULL;
$renderChildrenClosure101 = function() {return NULL;};
$arguments99['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);
$arguments99['additionalAttributes'] = NULL;
$arguments99['data'] = NULL;
$arguments99['arguments'] = array (
);
$arguments99['controller'] = NULL;
$arguments99['extensionName'] = NULL;
$arguments99['pluginName'] = NULL;
$arguments99['pageUid'] = NULL;
$arguments99['pageType'] = 0;
$arguments99['noCache'] = false;
$arguments99['noCacheHash'] = false;
$arguments99['section'] = '';
$arguments99['format'] = '';
$arguments99['linkAccessRestrictedPages'] = false;
$arguments99['additionalParams'] = array (
);
$arguments99['absolute'] = false;
$arguments99['addQueryString'] = false;
$arguments99['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments99['addQueryStringMethod'] = NULL;
$arguments99['class'] = NULL;
$arguments99['dir'] = NULL;
$arguments99['id'] = NULL;
$arguments99['lang'] = NULL;
$arguments99['style'] = NULL;
$arguments99['accesskey'] = NULL;
$arguments99['tabindex'] = NULL;
$arguments99['onclick'] = NULL;
$arguments99['name'] = NULL;
$arguments99['rel'] = NULL;
$arguments99['rev'] = NULL;
$arguments99['target'] = NULL;
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output103 = '';

$output103 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments104 = array();
$arguments104['identifier'] = 'actions-document-new';
$arguments104['size'] = 'small';
$arguments104['overlay'] = NULL;
$arguments104['state'] = 'default';
$arguments104['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure105 = function() {return NULL;};

$output103 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output103 .= '
    ';
return $output103;
};
$viewHelper106 = $self->getViewHelper('$viewHelper106', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper106->setArguments($arguments99);
$viewHelper106->setRenderingContext($renderingContext);
$viewHelper106->setRenderChildrenClosure($renderChildrenClosure102);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output84 .= $viewHelper106->initializeArgumentsAndRender();

$output84 .= '
';
return $output84;
};

$output48 .= '';

$output48 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments107 = array();
$arguments107['name'] = 'feEdit';
$renderChildrenClosure108 = function() {return NULL;};

$output48 .= '';


return $output48;
}


}
#1461666467    34615     