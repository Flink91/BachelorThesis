<?php
class FluidCache_Yag_Backend_action_index_8bed6baabeea86702a254ae87a7550626fd7825f extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

';
// Rendering ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper
$arguments1 = array();
$arguments1['templatePath'] = 'EXT:yag/Resources/Private/JSTemplates/FlexForm/SelectSource.js';
// Rendering Array
$array2 = array();
$array2['elementId'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('PA'), 'elementID', $renderingContext);
$array2['PID'] = $currentVariableContainer->getOrNull('pid');
$arguments1['arguments'] = $array2;
$arguments1['position'] = 'current';
$arguments1['type'] = 'text/javascript';
$renderChildrenClosure3 = function() {return NULL;};
$viewHelper4 = $self->getViewHelper('$viewHelper4', $renderingContext, 'Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper');
$viewHelper4->setArguments($arguments1);
$viewHelper4->setRenderingContext($renderingContext);
$viewHelper4->setRenderChildrenClosure($renderChildrenClosure3);
// End of ViewHelper Tx_Yag_ViewHelpers_Javascript_TemplateViewHelper

$output0 .= $viewHelper4->initializeArgumentsAndRender();

$output0 .= '

<style type="text/css">
.t3-form-field-label-flex {
    border-top: 0;
}
</style>
<table>
	<tr>
		<td>
			<h2>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments5 = array();
$arguments5['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_general.pid';
$arguments5['id'] = NULL;
$arguments5['default'] = NULL;
$arguments5['htmlEscape'] = NULL;
$arguments5['arguments'] = NULL;
$arguments5['extensionName'] = NULL;
$renderChildrenClosure6 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
			</h2>
			<div id="pageSelectorBox" class="itemSelectorBox">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments7 = array();
$arguments7['partial'] = 'Backend/Flexform/FlexFormPidList.html';
// Rendering Array
$array8 = array();
$array8['selectedPage'] = $currentVariableContainer->getOrNull('selectedPage');
$array8['listId'] = 'pidSelector';
$array8['pages'] = $currentVariableContainer->getOrNull('pages');
$arguments7['arguments'] = $array8;
$arguments7['section'] = NULL;
$arguments7['optional'] = false;
$renderChildrenClosure9 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments7, $renderChildrenClosure9, $renderingContext);

$output0 .= '
			</div>
		</td>

		<td>
			<div class="selectorBoxSeparator"><img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments10 = array();
$arguments10['path'] = 'Icons/triangle.png';
$arguments10['extensionName'] = 'yag';
$arguments10['absolute'] = false;
$renderChildrenClosure11 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '"/>
			</div>
		</td>
		<td>
			<h2>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments12 = array();
$arguments12['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_general.gallery';
$arguments12['id'] = NULL;
$arguments12['default'] = NULL;
$arguments12['htmlEscape'] = NULL;
$arguments12['arguments'] = NULL;
$arguments12['extensionName'] = NULL;
$renderChildrenClosure13 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output0 .= '
			</h2>
			<div id="imageGallerySelectorBox" class="inactiveSelectorBox">
				<div class="inactiveInfo">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments14 = array();
$arguments14['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_flexform_gallery.noPageUidSelected';
$arguments14['id'] = NULL;
$arguments14['default'] = NULL;
$arguments14['htmlEscape'] = NULL;
$arguments14['arguments'] = NULL;
$arguments14['extensionName'] = NULL;
$renderChildrenClosure15 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output0 .= '
				</div>
			</div>
		</td>

		<td>
			<div class="selectorBoxSeparator"><img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments16 = array();
$arguments16['path'] = 'Icons/triangle.png';
$arguments16['extensionName'] = 'yag';
$arguments16['absolute'] = false;
$renderChildrenClosure17 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '"/>
			</div>
		</td>

		<td>
			<h2>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments18 = array();
$arguments18['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_general.album';
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['htmlEscape'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$renderChildrenClosure19 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output0 .= '
			</h2>
			<div id="imageAlbumSelectorBox" class="inactiveSelectorBox">
				<div class="inactiveInfo">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments20 = array();
$arguments20['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_flexform_gallery.noGallerySelected';
$arguments20['id'] = NULL;
$arguments20['default'] = NULL;
$arguments20['htmlEscape'] = NULL;
$arguments20['arguments'] = NULL;
$arguments20['extensionName'] = NULL;
$renderChildrenClosure21 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '
				</div>
			</div>
		</td>

		<td>
			<div class="selectorBoxSeparator"><img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments22 = array();
$arguments22['path'] = 'Icons/triangle.png';
$arguments22['extensionName'] = 'yag';
$arguments22['absolute'] = false;
$renderChildrenClosure23 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output0 .= '"/></div>
		</td>

		<td>
			<H2>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments24 = array();
$arguments24['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_general.image';
$arguments24['id'] = NULL;
$arguments24['default'] = NULL;
$arguments24['htmlEscape'] = NULL;
$arguments24['arguments'] = NULL;
$arguments24['extensionName'] = NULL;
$renderChildrenClosure25 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output0 .= '
			</H2>
			<div id="imageImageSelectorBox" class="inactiveSelectorBox">
				<div class="inactiveInfo">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments26 = array();
$arguments26['key'] = 'LLL:EXT:yag/Resources/Private/Language/locallang.xlf:tx_yag_flexform_gallery.noAlbumSelected';
$arguments26['id'] = NULL;
$arguments26['default'] = NULL;
$arguments26['htmlEscape'] = NULL;
$arguments26['arguments'] = NULL;
$arguments26['extensionName'] = NULL;
$renderChildrenClosure27 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output0 .= '
				</div>
			</div>
		</td>

	</tr>
</table>';


return $output0;
}


}
#1461665832    8858      