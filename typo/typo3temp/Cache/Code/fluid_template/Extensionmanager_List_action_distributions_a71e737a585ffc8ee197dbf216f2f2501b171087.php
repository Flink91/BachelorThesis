<?php
class FluidCache_Extensionmanager_List_action_distributions_a71e737a585ffc8ee197dbf216f2f2501b171087 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 = '';

$output0 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'distributions';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Get Distributions';
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '</h1>
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
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('enableDistributionsView'));
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments7 = array();
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments10 = array();
// Rendering Boolean node
$arguments10['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('showUnsuitableDistributions'), 0);
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output12 = '';

$output12 .= '
				<div class="row">
					<div class="col-sm-6">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments13 = array();
$arguments13['class'] = 'typo3-extensionmanager-unsuitable-dist';
$arguments13['action'] = 'distributions';
// Rendering Array
$array14 = array();
$array14['showUnsuitableDistributions'] = 1;
$arguments13['arguments'] = $array14;
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['controller'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['pluginName'] = NULL;
$arguments13['pageUid'] = NULL;
$arguments13['object'] = NULL;
$arguments13['pageType'] = 0;
$arguments13['noCache'] = false;
$arguments13['noCacheHash'] = false;
$arguments13['section'] = '';
$arguments13['format'] = '';
$arguments13['additionalParams'] = array (
);
$arguments13['absolute'] = false;
$arguments13['addQueryString'] = false;
$arguments13['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments13['fieldNamePrefix'] = NULL;
$arguments13['actionUri'] = NULL;
$arguments13['objectName'] = NULL;
$arguments13['hiddenFieldClassName'] = NULL;
$arguments13['enctype'] = NULL;
$arguments13['method'] = NULL;
$arguments13['name'] = NULL;
$arguments13['onreset'] = NULL;
$arguments13['onsubmit'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output16 = '';

$output16 .= '
							<div class="input-group">
								<span class="input-group-btn">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments17 = array();
$arguments17['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments18 = array();
$arguments18['key'] = 'extensionList.showUnsuitableDistributions';
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['htmlEscape'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$renderChildrenClosure19 = function() {return NULL;};
$arguments17['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['name'] = NULL;
$arguments17['property'] = NULL;
$arguments17['disabled'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$renderChildrenClosure20 = function() {return NULL;};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper21->setArguments($arguments17);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output16 .= $viewHelper21->initializeArgumentsAndRender();

$output16 .= '
								</span>
							</div>
						';
return $output16;
};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper22->setArguments($arguments13);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output12 .= $viewHelper22->initializeArgumentsAndRender();

$output12 .= '
					</div>
				</div>
			';
return $output12;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
			<div class="distribution-holder">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments23 = array();
$arguments23['each'] = $currentVariableContainer->getOrNull('officialDistributions');
$arguments23['as'] = 'distribution';
$arguments23['key'] = '';
$arguments23['reverse'] = false;
$arguments23['iteration'] = NULL;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output25 = '';

$output25 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments26 = array();
$arguments26['partial'] = 'List/Distribution';
// Rendering Array
$array27 = array();
$array27['distribution'] = $currentVariableContainer->getOrNull('distribution');
$array27['official'] = 1;
$arguments26['arguments'] = $array27;
$arguments26['section'] = NULL;
$arguments26['optional'] = false;
$renderChildrenClosure28 = function() {return NULL;};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments26, $renderChildrenClosure28, $renderingContext);

$output25 .= '
				';
return $output25;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output9 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments29 = array();
$arguments29['each'] = $currentVariableContainer->getOrNull('communityDistributions');
$arguments29['as'] = 'distribution';
$arguments29['key'] = '';
$arguments29['reverse'] = false;
$arguments29['iteration'] = NULL;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments32 = array();
$arguments32['partial'] = 'List/Distribution';
// Rendering Array
$array33 = array();
$array33['distribution'] = $currentVariableContainer->getOrNull('distribution');
$array33['official'] = 0;
$arguments32['arguments'] = $array33;
$arguments32['section'] = NULL;
$arguments32['optional'] = false;
$renderChildrenClosure34 = function() {return NULL;};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments32, $renderChildrenClosure34, $renderingContext);

$output31 .= '
				';
return $output31;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output9 .= '
			</div>
		';
return $output9;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments35 = array();
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output37 = '';

$output37 .= '
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments38 = array();
$arguments38['key'] = 'extensionList.installImpexp';
$arguments38['id'] = NULL;
$arguments38['default'] = NULL;
$arguments38['htmlEscape'] = NULL;
$arguments38['arguments'] = NULL;
$arguments38['extensionName'] = NULL;
$renderChildrenClosure39 = function() {return NULL;};

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '</p>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments40 = array();
$arguments40['action'] = 'toggleExtensionInstallationState';
$arguments40['controller'] = 'Action';
// Rendering Array
$array41 = array();
$array41['extensionKey'] = 'impexp';
$arguments40['arguments'] = $array41;
$arguments40['class'] = 'btn btn-default t3-button-action-installdistribution';
$arguments40['additionalAttributes'] = NULL;
$arguments40['data'] = NULL;
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
$arguments40['dir'] = NULL;
$arguments40['id'] = NULL;
$arguments40['lang'] = NULL;
$arguments40['style'] = NULL;
$arguments40['title'] = NULL;
$arguments40['accesskey'] = NULL;
$arguments40['tabindex'] = NULL;
$arguments40['onclick'] = NULL;
$arguments40['name'] = NULL;
$arguments40['rel'] = NULL;
$arguments40['rev'] = NULL;
$arguments40['target'] = NULL;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output43 = '';

$output43 .= '
				<span class="fa fa-cloud-download">&nbsp;</span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments44 = array();
$arguments44['key'] = 'distribution.installImpexp';
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['htmlEscape'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Install impexp';
};

$output43 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output43 .= '
			';
return $output43;
};
$viewHelper46 = $self->getViewHelper('$viewHelper46', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper46->setArguments($arguments40);
$viewHelper46->setRenderingContext($renderingContext);
$viewHelper46->setRenderChildrenClosure($renderChildrenClosure42);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output37 .= $viewHelper46->initializeArgumentsAndRender();

$output37 .= '
		';
return $output37;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output6 .= '
	';
return $output6;
};
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output47 = '';

$output47 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments48 = array();
// Rendering Boolean node
$arguments48['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('showUnsuitableDistributions'), 0);
$arguments48['then'] = NULL;
$arguments48['else'] = NULL;
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output50 = '';

$output50 .= '
				<div class="row">
					<div class="col-sm-6">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments51 = array();
$arguments51['class'] = 'typo3-extensionmanager-unsuitable-dist';
$arguments51['action'] = 'distributions';
// Rendering Array
$array52 = array();
$array52['showUnsuitableDistributions'] = 1;
$arguments51['arguments'] = $array52;
$arguments51['additionalAttributes'] = NULL;
$arguments51['data'] = NULL;
$arguments51['controller'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['pluginName'] = NULL;
$arguments51['pageUid'] = NULL;
$arguments51['object'] = NULL;
$arguments51['pageType'] = 0;
$arguments51['noCache'] = false;
$arguments51['noCacheHash'] = false;
$arguments51['section'] = '';
$arguments51['format'] = '';
$arguments51['additionalParams'] = array (
);
$arguments51['absolute'] = false;
$arguments51['addQueryString'] = false;
$arguments51['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments51['fieldNamePrefix'] = NULL;
$arguments51['actionUri'] = NULL;
$arguments51['objectName'] = NULL;
$arguments51['hiddenFieldClassName'] = NULL;
$arguments51['enctype'] = NULL;
$arguments51['method'] = NULL;
$arguments51['name'] = NULL;
$arguments51['onreset'] = NULL;
$arguments51['onsubmit'] = NULL;
$arguments51['dir'] = NULL;
$arguments51['id'] = NULL;
$arguments51['lang'] = NULL;
$arguments51['style'] = NULL;
$arguments51['title'] = NULL;
$arguments51['accesskey'] = NULL;
$arguments51['tabindex'] = NULL;
$arguments51['onclick'] = NULL;
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output54 = '';

$output54 .= '
							<div class="input-group">
								<span class="input-group-btn">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments55 = array();
$arguments55['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments56 = array();
$arguments56['key'] = 'extensionList.showUnsuitableDistributions';
$arguments56['id'] = NULL;
$arguments56['default'] = NULL;
$arguments56['htmlEscape'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['extensionName'] = NULL;
$renderChildrenClosure57 = function() {return NULL;};
$arguments55['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);
$arguments55['additionalAttributes'] = NULL;
$arguments55['data'] = NULL;
$arguments55['name'] = NULL;
$arguments55['property'] = NULL;
$arguments55['disabled'] = NULL;
$arguments55['dir'] = NULL;
$arguments55['id'] = NULL;
$arguments55['lang'] = NULL;
$arguments55['style'] = NULL;
$arguments55['title'] = NULL;
$arguments55['accesskey'] = NULL;
$arguments55['tabindex'] = NULL;
$arguments55['onclick'] = NULL;
$renderChildrenClosure58 = function() {return NULL;};
$viewHelper59 = $self->getViewHelper('$viewHelper59', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper59->setArguments($arguments55);
$viewHelper59->setRenderingContext($renderingContext);
$viewHelper59->setRenderChildrenClosure($renderChildrenClosure58);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output54 .= $viewHelper59->initializeArgumentsAndRender();

$output54 .= '
								</span>
							</div>
						';
return $output54;
};
$viewHelper60 = $self->getViewHelper('$viewHelper60', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper60->setArguments($arguments51);
$viewHelper60->setRenderingContext($renderingContext);
$viewHelper60->setRenderChildrenClosure($renderChildrenClosure53);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output50 .= $viewHelper60->initializeArgumentsAndRender();

$output50 .= '
					</div>
				</div>
			';
return $output50;
};

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
			<div class="distribution-holder">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments61 = array();
$arguments61['each'] = $currentVariableContainer->getOrNull('officialDistributions');
$arguments61['as'] = 'distribution';
$arguments61['key'] = '';
$arguments61['reverse'] = false;
$arguments61['iteration'] = NULL;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output63 = '';

$output63 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments64 = array();
$arguments64['partial'] = 'List/Distribution';
// Rendering Array
$array65 = array();
$array65['distribution'] = $currentVariableContainer->getOrNull('distribution');
$array65['official'] = 1;
$arguments64['arguments'] = $array65;
$arguments64['section'] = NULL;
$arguments64['optional'] = false;
$renderChildrenClosure66 = function() {return NULL;};

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments64, $renderChildrenClosure66, $renderingContext);

$output63 .= '
				';
return $output63;
};

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output47 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments67 = array();
$arguments67['each'] = $currentVariableContainer->getOrNull('communityDistributions');
$arguments67['as'] = 'distribution';
$arguments67['key'] = '';
$arguments67['reverse'] = false;
$arguments67['iteration'] = NULL;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output69 = '';

$output69 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments70 = array();
$arguments70['partial'] = 'List/Distribution';
// Rendering Array
$array71 = array();
$array71['distribution'] = $currentVariableContainer->getOrNull('distribution');
$array71['official'] = 0;
$arguments70['arguments'] = $array71;
$arguments70['section'] = NULL;
$arguments70['optional'] = false;
$renderChildrenClosure72 = function() {return NULL;};

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments70, $renderChildrenClosure72, $renderingContext);

$output69 .= '
				';
return $output69;
};

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output47 .= '
			</div>
		';
return $output47;
};
$arguments4['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output73 = '';

$output73 .= '
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments74 = array();
$arguments74['key'] = 'extensionList.installImpexp';
$arguments74['id'] = NULL;
$arguments74['default'] = NULL;
$arguments74['htmlEscape'] = NULL;
$arguments74['arguments'] = NULL;
$arguments74['extensionName'] = NULL;
$renderChildrenClosure75 = function() {return NULL;};

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '</p>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments76 = array();
$arguments76['action'] = 'toggleExtensionInstallationState';
$arguments76['controller'] = 'Action';
// Rendering Array
$array77 = array();
$array77['extensionKey'] = 'impexp';
$arguments76['arguments'] = $array77;
$arguments76['class'] = 'btn btn-default t3-button-action-installdistribution';
$arguments76['additionalAttributes'] = NULL;
$arguments76['data'] = NULL;
$arguments76['extensionName'] = NULL;
$arguments76['pluginName'] = NULL;
$arguments76['pageUid'] = NULL;
$arguments76['pageType'] = 0;
$arguments76['noCache'] = false;
$arguments76['noCacheHash'] = false;
$arguments76['section'] = '';
$arguments76['format'] = '';
$arguments76['linkAccessRestrictedPages'] = false;
$arguments76['additionalParams'] = array (
);
$arguments76['absolute'] = false;
$arguments76['addQueryString'] = false;
$arguments76['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments76['addQueryStringMethod'] = NULL;
$arguments76['dir'] = NULL;
$arguments76['id'] = NULL;
$arguments76['lang'] = NULL;
$arguments76['style'] = NULL;
$arguments76['title'] = NULL;
$arguments76['accesskey'] = NULL;
$arguments76['tabindex'] = NULL;
$arguments76['onclick'] = NULL;
$arguments76['name'] = NULL;
$arguments76['rel'] = NULL;
$arguments76['rev'] = NULL;
$arguments76['target'] = NULL;
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output79 = '';

$output79 .= '
				<span class="fa fa-cloud-download">&nbsp;</span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments80 = array();
$arguments80['key'] = 'distribution.installImpexp';
$arguments80['id'] = NULL;
$arguments80['default'] = NULL;
$arguments80['htmlEscape'] = NULL;
$arguments80['arguments'] = NULL;
$arguments80['extensionName'] = NULL;
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Install impexp';
};

$output79 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
			';
return $output79;
};
$viewHelper82 = $self->getViewHelper('$viewHelper82', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper82->setArguments($arguments76);
$viewHelper82->setRenderingContext($renderingContext);
$viewHelper82->setRenderChildrenClosure($renderChildrenClosure78);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output73 .= $viewHelper82->initializeArgumentsAndRender();

$output73 .= '
		';
return $output73;
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

$output83 = '';

$output83 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments84 = array();
$arguments84['name'] = 'main';
$renderChildrenClosure85 = function() {return NULL;};
$viewHelper86 = $self->getViewHelper('$viewHelper86', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper86->setArguments($arguments84);
$viewHelper86->setRenderingContext($renderingContext);
$viewHelper86->setRenderChildrenClosure($renderChildrenClosure85);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output83 .= $viewHelper86->initializeArgumentsAndRender();

$output83 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments87 = array();
$arguments87['name'] = 'headline';
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output89 = '';

$output89 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments90 = array();
$arguments90['key'] = 'distributions';
$arguments90['id'] = NULL;
$arguments90['default'] = NULL;
$arguments90['htmlEscape'] = NULL;
$arguments90['arguments'] = NULL;
$arguments90['extensionName'] = NULL;
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Get Distributions';
};

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '</h1>
';
return $output89;
};

$output83 .= '';

$output83 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments92 = array();
$arguments92['name'] = 'content';
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output94 = '';

$output94 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments95 = array();
// Rendering Boolean node
$arguments95['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('enableDistributionsView'));
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output97 = '';

$output97 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments98 = array();
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output100 = '';

$output100 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments101 = array();
// Rendering Boolean node
$arguments101['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('showUnsuitableDistributions'), 0);
$arguments101['then'] = NULL;
$arguments101['else'] = NULL;
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output103 = '';

$output103 .= '
				<div class="row">
					<div class="col-sm-6">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments104 = array();
$arguments104['class'] = 'typo3-extensionmanager-unsuitable-dist';
$arguments104['action'] = 'distributions';
// Rendering Array
$array105 = array();
$array105['showUnsuitableDistributions'] = 1;
$arguments104['arguments'] = $array105;
$arguments104['additionalAttributes'] = NULL;
$arguments104['data'] = NULL;
$arguments104['controller'] = NULL;
$arguments104['extensionName'] = NULL;
$arguments104['pluginName'] = NULL;
$arguments104['pageUid'] = NULL;
$arguments104['object'] = NULL;
$arguments104['pageType'] = 0;
$arguments104['noCache'] = false;
$arguments104['noCacheHash'] = false;
$arguments104['section'] = '';
$arguments104['format'] = '';
$arguments104['additionalParams'] = array (
);
$arguments104['absolute'] = false;
$arguments104['addQueryString'] = false;
$arguments104['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments104['fieldNamePrefix'] = NULL;
$arguments104['actionUri'] = NULL;
$arguments104['objectName'] = NULL;
$arguments104['hiddenFieldClassName'] = NULL;
$arguments104['enctype'] = NULL;
$arguments104['method'] = NULL;
$arguments104['name'] = NULL;
$arguments104['onreset'] = NULL;
$arguments104['onsubmit'] = NULL;
$arguments104['dir'] = NULL;
$arguments104['id'] = NULL;
$arguments104['lang'] = NULL;
$arguments104['style'] = NULL;
$arguments104['title'] = NULL;
$arguments104['accesskey'] = NULL;
$arguments104['tabindex'] = NULL;
$arguments104['onclick'] = NULL;
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output107 = '';

$output107 .= '
							<div class="input-group">
								<span class="input-group-btn">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments108 = array();
$arguments108['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments109 = array();
$arguments109['key'] = 'extensionList.showUnsuitableDistributions';
$arguments109['id'] = NULL;
$arguments109['default'] = NULL;
$arguments109['htmlEscape'] = NULL;
$arguments109['arguments'] = NULL;
$arguments109['extensionName'] = NULL;
$renderChildrenClosure110 = function() {return NULL;};
$arguments108['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);
$arguments108['additionalAttributes'] = NULL;
$arguments108['data'] = NULL;
$arguments108['name'] = NULL;
$arguments108['property'] = NULL;
$arguments108['disabled'] = NULL;
$arguments108['dir'] = NULL;
$arguments108['id'] = NULL;
$arguments108['lang'] = NULL;
$arguments108['style'] = NULL;
$arguments108['title'] = NULL;
$arguments108['accesskey'] = NULL;
$arguments108['tabindex'] = NULL;
$arguments108['onclick'] = NULL;
$renderChildrenClosure111 = function() {return NULL;};
$viewHelper112 = $self->getViewHelper('$viewHelper112', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper112->setArguments($arguments108);
$viewHelper112->setRenderingContext($renderingContext);
$viewHelper112->setRenderChildrenClosure($renderChildrenClosure111);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output107 .= $viewHelper112->initializeArgumentsAndRender();

$output107 .= '
								</span>
							</div>
						';
return $output107;
};
$viewHelper113 = $self->getViewHelper('$viewHelper113', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper113->setArguments($arguments104);
$viewHelper113->setRenderingContext($renderingContext);
$viewHelper113->setRenderChildrenClosure($renderChildrenClosure106);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output103 .= $viewHelper113->initializeArgumentsAndRender();

$output103 .= '
					</div>
				</div>
			';
return $output103;
};

$output100 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output100 .= '
			<div class="distribution-holder">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments114 = array();
$arguments114['each'] = $currentVariableContainer->getOrNull('officialDistributions');
$arguments114['as'] = 'distribution';
$arguments114['key'] = '';
$arguments114['reverse'] = false;
$arguments114['iteration'] = NULL;
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output116 = '';

$output116 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments117 = array();
$arguments117['partial'] = 'List/Distribution';
// Rendering Array
$array118 = array();
$array118['distribution'] = $currentVariableContainer->getOrNull('distribution');
$array118['official'] = 1;
$arguments117['arguments'] = $array118;
$arguments117['section'] = NULL;
$arguments117['optional'] = false;
$renderChildrenClosure119 = function() {return NULL;};

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments117, $renderChildrenClosure119, $renderingContext);

$output116 .= '
				';
return $output116;
};

$output100 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output100 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments120 = array();
$arguments120['each'] = $currentVariableContainer->getOrNull('communityDistributions');
$arguments120['as'] = 'distribution';
$arguments120['key'] = '';
$arguments120['reverse'] = false;
$arguments120['iteration'] = NULL;
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output122 = '';

$output122 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments123 = array();
$arguments123['partial'] = 'List/Distribution';
// Rendering Array
$array124 = array();
$array124['distribution'] = $currentVariableContainer->getOrNull('distribution');
$array124['official'] = 0;
$arguments123['arguments'] = $array124;
$arguments123['section'] = NULL;
$arguments123['optional'] = false;
$renderChildrenClosure125 = function() {return NULL;};

$output122 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments123, $renderChildrenClosure125, $renderingContext);

$output122 .= '
				';
return $output122;
};

$output100 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output100 .= '
			</div>
		';
return $output100;
};

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output97 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments126 = array();
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output128 = '';

$output128 .= '
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments129 = array();
$arguments129['key'] = 'extensionList.installImpexp';
$arguments129['id'] = NULL;
$arguments129['default'] = NULL;
$arguments129['htmlEscape'] = NULL;
$arguments129['arguments'] = NULL;
$arguments129['extensionName'] = NULL;
$renderChildrenClosure130 = function() {return NULL;};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output128 .= '</p>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments131 = array();
$arguments131['action'] = 'toggleExtensionInstallationState';
$arguments131['controller'] = 'Action';
// Rendering Array
$array132 = array();
$array132['extensionKey'] = 'impexp';
$arguments131['arguments'] = $array132;
$arguments131['class'] = 'btn btn-default t3-button-action-installdistribution';
$arguments131['additionalAttributes'] = NULL;
$arguments131['data'] = NULL;
$arguments131['extensionName'] = NULL;
$arguments131['pluginName'] = NULL;
$arguments131['pageUid'] = NULL;
$arguments131['pageType'] = 0;
$arguments131['noCache'] = false;
$arguments131['noCacheHash'] = false;
$arguments131['section'] = '';
$arguments131['format'] = '';
$arguments131['linkAccessRestrictedPages'] = false;
$arguments131['additionalParams'] = array (
);
$arguments131['absolute'] = false;
$arguments131['addQueryString'] = false;
$arguments131['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments131['addQueryStringMethod'] = NULL;
$arguments131['dir'] = NULL;
$arguments131['id'] = NULL;
$arguments131['lang'] = NULL;
$arguments131['style'] = NULL;
$arguments131['title'] = NULL;
$arguments131['accesskey'] = NULL;
$arguments131['tabindex'] = NULL;
$arguments131['onclick'] = NULL;
$arguments131['name'] = NULL;
$arguments131['rel'] = NULL;
$arguments131['rev'] = NULL;
$arguments131['target'] = NULL;
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output134 = '';

$output134 .= '
				<span class="fa fa-cloud-download">&nbsp;</span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments135 = array();
$arguments135['key'] = 'distribution.installImpexp';
$arguments135['id'] = NULL;
$arguments135['default'] = NULL;
$arguments135['htmlEscape'] = NULL;
$arguments135['arguments'] = NULL;
$arguments135['extensionName'] = NULL;
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Install impexp';
};

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output134 .= '
			';
return $output134;
};
$viewHelper137 = $self->getViewHelper('$viewHelper137', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper137->setArguments($arguments131);
$viewHelper137->setRenderingContext($renderingContext);
$viewHelper137->setRenderChildrenClosure($renderChildrenClosure133);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output128 .= $viewHelper137->initializeArgumentsAndRender();

$output128 .= '
		';
return $output128;
};

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output97 .= '
	';
return $output97;
};
$arguments95['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output138 = '';

$output138 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments139 = array();
// Rendering Boolean node
$arguments139['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('showUnsuitableDistributions'), 0);
$arguments139['then'] = NULL;
$arguments139['else'] = NULL;
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output141 = '';

$output141 .= '
				<div class="row">
					<div class="col-sm-6">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments142 = array();
$arguments142['class'] = 'typo3-extensionmanager-unsuitable-dist';
$arguments142['action'] = 'distributions';
// Rendering Array
$array143 = array();
$array143['showUnsuitableDistributions'] = 1;
$arguments142['arguments'] = $array143;
$arguments142['additionalAttributes'] = NULL;
$arguments142['data'] = NULL;
$arguments142['controller'] = NULL;
$arguments142['extensionName'] = NULL;
$arguments142['pluginName'] = NULL;
$arguments142['pageUid'] = NULL;
$arguments142['object'] = NULL;
$arguments142['pageType'] = 0;
$arguments142['noCache'] = false;
$arguments142['noCacheHash'] = false;
$arguments142['section'] = '';
$arguments142['format'] = '';
$arguments142['additionalParams'] = array (
);
$arguments142['absolute'] = false;
$arguments142['addQueryString'] = false;
$arguments142['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments142['fieldNamePrefix'] = NULL;
$arguments142['actionUri'] = NULL;
$arguments142['objectName'] = NULL;
$arguments142['hiddenFieldClassName'] = NULL;
$arguments142['enctype'] = NULL;
$arguments142['method'] = NULL;
$arguments142['name'] = NULL;
$arguments142['onreset'] = NULL;
$arguments142['onsubmit'] = NULL;
$arguments142['dir'] = NULL;
$arguments142['id'] = NULL;
$arguments142['lang'] = NULL;
$arguments142['style'] = NULL;
$arguments142['title'] = NULL;
$arguments142['accesskey'] = NULL;
$arguments142['tabindex'] = NULL;
$arguments142['onclick'] = NULL;
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output145 = '';

$output145 .= '
							<div class="input-group">
								<span class="input-group-btn">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments146 = array();
$arguments146['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments147 = array();
$arguments147['key'] = 'extensionList.showUnsuitableDistributions';
$arguments147['id'] = NULL;
$arguments147['default'] = NULL;
$arguments147['htmlEscape'] = NULL;
$arguments147['arguments'] = NULL;
$arguments147['extensionName'] = NULL;
$renderChildrenClosure148 = function() {return NULL;};
$arguments146['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);
$arguments146['additionalAttributes'] = NULL;
$arguments146['data'] = NULL;
$arguments146['name'] = NULL;
$arguments146['property'] = NULL;
$arguments146['disabled'] = NULL;
$arguments146['dir'] = NULL;
$arguments146['id'] = NULL;
$arguments146['lang'] = NULL;
$arguments146['style'] = NULL;
$arguments146['title'] = NULL;
$arguments146['accesskey'] = NULL;
$arguments146['tabindex'] = NULL;
$arguments146['onclick'] = NULL;
$renderChildrenClosure149 = function() {return NULL;};
$viewHelper150 = $self->getViewHelper('$viewHelper150', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper150->setArguments($arguments146);
$viewHelper150->setRenderingContext($renderingContext);
$viewHelper150->setRenderChildrenClosure($renderChildrenClosure149);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output145 .= $viewHelper150->initializeArgumentsAndRender();

$output145 .= '
								</span>
							</div>
						';
return $output145;
};
$viewHelper151 = $self->getViewHelper('$viewHelper151', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper151->setArguments($arguments142);
$viewHelper151->setRenderingContext($renderingContext);
$viewHelper151->setRenderChildrenClosure($renderChildrenClosure144);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output141 .= $viewHelper151->initializeArgumentsAndRender();

$output141 .= '
					</div>
				</div>
			';
return $output141;
};

$output138 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= '
			<div class="distribution-holder">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments152 = array();
$arguments152['each'] = $currentVariableContainer->getOrNull('officialDistributions');
$arguments152['as'] = 'distribution';
$arguments152['key'] = '';
$arguments152['reverse'] = false;
$arguments152['iteration'] = NULL;
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output154 = '';

$output154 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments155 = array();
$arguments155['partial'] = 'List/Distribution';
// Rendering Array
$array156 = array();
$array156['distribution'] = $currentVariableContainer->getOrNull('distribution');
$array156['official'] = 1;
$arguments155['arguments'] = $array156;
$arguments155['section'] = NULL;
$arguments155['optional'] = false;
$renderChildrenClosure157 = function() {return NULL;};

$output154 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments155, $renderChildrenClosure157, $renderingContext);

$output154 .= '
				';
return $output154;
};

$output138 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output138 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments158 = array();
$arguments158['each'] = $currentVariableContainer->getOrNull('communityDistributions');
$arguments158['as'] = 'distribution';
$arguments158['key'] = '';
$arguments158['reverse'] = false;
$arguments158['iteration'] = NULL;
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output160 = '';

$output160 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments161 = array();
$arguments161['partial'] = 'List/Distribution';
// Rendering Array
$array162 = array();
$array162['distribution'] = $currentVariableContainer->getOrNull('distribution');
$array162['official'] = 0;
$arguments161['arguments'] = $array162;
$arguments161['section'] = NULL;
$arguments161['optional'] = false;
$renderChildrenClosure163 = function() {return NULL;};

$output160 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments161, $renderChildrenClosure163, $renderingContext);

$output160 .= '
				';
return $output160;
};

$output138 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output138 .= '
			</div>
		';
return $output138;
};
$arguments95['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output164 = '';

$output164 .= '
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments165 = array();
$arguments165['key'] = 'extensionList.installImpexp';
$arguments165['id'] = NULL;
$arguments165['default'] = NULL;
$arguments165['htmlEscape'] = NULL;
$arguments165['arguments'] = NULL;
$arguments165['extensionName'] = NULL;
$renderChildrenClosure166 = function() {return NULL;};

$output164 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output164 .= '</p>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments167 = array();
$arguments167['action'] = 'toggleExtensionInstallationState';
$arguments167['controller'] = 'Action';
// Rendering Array
$array168 = array();
$array168['extensionKey'] = 'impexp';
$arguments167['arguments'] = $array168;
$arguments167['class'] = 'btn btn-default t3-button-action-installdistribution';
$arguments167['additionalAttributes'] = NULL;
$arguments167['data'] = NULL;
$arguments167['extensionName'] = NULL;
$arguments167['pluginName'] = NULL;
$arguments167['pageUid'] = NULL;
$arguments167['pageType'] = 0;
$arguments167['noCache'] = false;
$arguments167['noCacheHash'] = false;
$arguments167['section'] = '';
$arguments167['format'] = '';
$arguments167['linkAccessRestrictedPages'] = false;
$arguments167['additionalParams'] = array (
);
$arguments167['absolute'] = false;
$arguments167['addQueryString'] = false;
$arguments167['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments167['addQueryStringMethod'] = NULL;
$arguments167['dir'] = NULL;
$arguments167['id'] = NULL;
$arguments167['lang'] = NULL;
$arguments167['style'] = NULL;
$arguments167['title'] = NULL;
$arguments167['accesskey'] = NULL;
$arguments167['tabindex'] = NULL;
$arguments167['onclick'] = NULL;
$arguments167['name'] = NULL;
$arguments167['rel'] = NULL;
$arguments167['rev'] = NULL;
$arguments167['target'] = NULL;
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output170 = '';

$output170 .= '
				<span class="fa fa-cloud-download">&nbsp;</span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments171 = array();
$arguments171['key'] = 'distribution.installImpexp';
$arguments171['id'] = NULL;
$arguments171['default'] = NULL;
$arguments171['htmlEscape'] = NULL;
$arguments171['arguments'] = NULL;
$arguments171['extensionName'] = NULL;
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Install impexp';
};

$output170 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output170 .= '
			';
return $output170;
};
$viewHelper173 = $self->getViewHelper('$viewHelper173', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper173->setArguments($arguments167);
$viewHelper173->setRenderingContext($renderingContext);
$viewHelper173->setRenderChildrenClosure($renderChildrenClosure169);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output164 .= $viewHelper173->initializeArgumentsAndRender();

$output164 .= '
		';
return $output164;
};

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
';
return $output94;
};

$output83 .= '';


return $output83;
}


}
#1458755664    50328     