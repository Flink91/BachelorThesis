<?php
class FluidCache_Dce_DceModule_partial_Module_NewDceLink_e4bd1ddbf30c9344a621a8777b32638ecf993786 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper
$arguments2 = array();
// Rendering Boolean node
$arguments2['returnInt'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$renderChildrenClosure3 = function() {return NULL;};
$viewHelper4 = $self->getViewHelper('$viewHelper4', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper');
$viewHelper4->setArguments($arguments2);
$viewHelper4->setRenderingContext($renderingContext);
$viewHelper4->setRenderChildrenClosure($renderChildrenClosure3);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', $viewHelper4->initializeArgumentsAndRender(), 7005000);
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments7 = array();
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= 'alt_doc.php?edit[tx_dce_domain_model_dce][0]=new&returnUrl=';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\ThisUrlViewHelper
$arguments10 = array();
// Rendering Boolean node
$arguments10['showHost'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Boolean node
$arguments10['urlencode'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments10['showRequestedUri'] = true;
$renderChildrenClosure11 = function() {return NULL;};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\ThisUrlViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\ThisUrlViewHelper

$output9 .= $viewHelper12->initializeArgumentsAndRender();
return $output9;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments13 = array();
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ModuleLinkViewHelper
$arguments15 = array();
$arguments15['module'] = 'record_edit';
$output16 = '';

$output16 .= 'edit[tx_dce_domain_model_dce][0]=new&returnUrl=';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\ThisUrlViewHelper
$arguments17 = array();
// Rendering Boolean node
$arguments17['showHost'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Boolean node
$arguments17['urlencode'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments17['showRequestedUri'] = true;
$renderChildrenClosure18 = function() {return NULL;};
$viewHelper19 = $self->getViewHelper('$viewHelper19', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\ThisUrlViewHelper');
$viewHelper19->setArguments($arguments17);
$viewHelper19->setRenderingContext($renderingContext);
$viewHelper19->setRenderChildrenClosure($renderChildrenClosure18);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\ThisUrlViewHelper

$output16 .= $viewHelper19->initializeArgumentsAndRender();
$arguments15['parameter'] = $output16;
$renderChildrenClosure20 = function() {return NULL;};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\ModuleLinkViewHelper');
$viewHelper21->setArguments($arguments15);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ModuleLinkViewHelper
return $viewHelper21->initializeArgumentsAndRender();
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);
return $output6;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= 'alt_doc.php?edit[tx_dce_domain_model_dce][0]=new&returnUrl=';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\ThisUrlViewHelper
$arguments23 = array();
// Rendering Boolean node
$arguments23['showHost'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Boolean node
$arguments23['urlencode'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments23['showRequestedUri'] = true;
$renderChildrenClosure24 = function() {return NULL;};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\ThisUrlViewHelper');
$viewHelper25->setArguments($arguments23);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\ThisUrlViewHelper

$output22 .= $viewHelper25->initializeArgumentsAndRender();
return $output22;
};
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ModuleLinkViewHelper
$arguments26 = array();
$arguments26['module'] = 'record_edit';
$output27 = '';

$output27 .= 'edit[tx_dce_domain_model_dce][0]=new&returnUrl=';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\ThisUrlViewHelper
$arguments28 = array();
// Rendering Boolean node
$arguments28['showHost'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Boolean node
$arguments28['urlencode'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments28['showRequestedUri'] = true;
$renderChildrenClosure29 = function() {return NULL;};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\ThisUrlViewHelper');
$viewHelper30->setArguments($arguments28);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\ThisUrlViewHelper

$output27 .= $viewHelper30->initializeArgumentsAndRender();
$arguments26['parameter'] = $output27;
$renderChildrenClosure31 = function() {return NULL;};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\ModuleLinkViewHelper');
$viewHelper32->setArguments($arguments26);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure31);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ModuleLinkViewHelper
return $viewHelper32->initializeArgumentsAndRender();
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure5, $renderingContext);

$output0 .= '
';


return $output0;
}


}
#1466614709    8319      