<?php
class FluidCache_Standalone_template_file_ext_tables_941332dbb167f5643f81e80c574560d05a5dedf5 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<?php

$GLOBALS[\'TCA\'][\'tt_content\'][\'columns\'][\'CType\'][\'config\'][\'items\'][] = array(
	0 => \'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce_long\',
	1 => \'--div--\'
);

\\TYPO3\\CMS\\Core\\Utility\\ExtensionManagementUtility::addTCAcolumns(\'tt_content\', array(
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments1 = array();
$arguments1['each'] = $currentVariableContainer->getOrNull('dceFieldsWithNewTcaColumns');
$arguments1['as'] = 'dceField';
$arguments1['key'] = '';
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
	\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments4 = array();
$arguments4['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dceField'), 'new_tca_field_name', $renderingContext);
$arguments4['keepQuotes'] = false;
$arguments4['encoding'] = NULL;
$arguments4['doubleEncode'] = true;
$renderChildrenClosure5 = function() {return NULL;};
$value6 = ($arguments4['value'] !== NULL ? $arguments4['value'] : $renderChildrenClosure5());

$output3 .= (!is_string($value6) ? $value6 : htmlspecialchars($value6, ($arguments4['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments4['encoding'] !== NULL ? $arguments4['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments4['doubleEncode']));

$output3 .= '\' => array(\'label\' => \'\', \'config\' => array(\'type\' => \'passthrough\')),
';
return $output3;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
));
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments7 = array();
$arguments7['each'] = $currentVariableContainer->getOrNull('dceArray');
$arguments7['as'] = 'dce';
$arguments7['key'] = '';
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments10 = array();
// Rendering Boolean node
$arguments10['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'hidden', $renderingContext), 0);
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output12 = '';

$output12 .= '
	///////////////////////////////////////////////////// ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments13 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments14 = array();
$arguments14['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments14['keepQuotes'] = false;
$arguments14['encoding'] = NULL;
$arguments14['doubleEncode'] = true;
$renderChildrenClosure15 = function() {return NULL;};
$value16 = ($arguments14['value'] !== NULL ? $arguments14['value'] : $renderChildrenClosure15());
$arguments13['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value16) ? $value16 : htmlspecialchars($value16, ($arguments14['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments14['encoding'] !== NULL ? $arguments14['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments14['doubleEncode'])));
$output17 = '';

$output17 .= 'uid: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments18 = array();
$arguments18['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments18['keepQuotes'] = false;
$arguments18['encoding'] = NULL;
$arguments18['doubleEncode'] = true;
$renderChildrenClosure19 = function() {return NULL;};
$value20 = ($arguments18['value'] !== NULL ? $arguments18['value'] : $renderChildrenClosure19());

$output17 .= (!is_string($value20) ? $value20 : htmlspecialchars($value20, ($arguments18['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments18['encoding'] !== NULL ? $arguments18['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments18['doubleEncode']));
$arguments13['then'] = $output17;
$output21 = '';

$output21 .= 'identifier: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments22 = array();
$arguments22['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'identifier', $renderingContext);
$arguments22['keepQuotes'] = false;
$arguments22['encoding'] = NULL;
$arguments22['doubleEncode'] = true;
$renderChildrenClosure23 = function() {return NULL;};
$value24 = ($arguments22['value'] !== NULL ? $arguments22['value'] : $renderChildrenClosure23());

$output21 .= (!is_string($value24) ? $value24 : htmlspecialchars($value24, ($arguments22['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments22['encoding'] !== NULL ? $arguments22['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments22['doubleEncode']));
$arguments13['else'] = $output21;
$renderChildrenClosure25 = function() {return NULL;};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure25, $renderingContext);

$output12 .= ' ///
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments26 = array();
// Rendering Boolean node
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper
$arguments27 = array();
// Rendering Boolean node
$arguments27['returnInt'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$renderChildrenClosure28 = function() {return NULL;};
$viewHelper29 = $self->getViewHelper('$viewHelper29', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper');
$viewHelper29->setArguments($arguments27);
$viewHelper29->setRenderingContext($renderingContext);
$viewHelper29->setRenderChildrenClosure($renderChildrenClosure28);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper
$arguments26['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', $viewHelper29->initializeArgumentsAndRender(), 7006000);
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments32 = array();
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output34 = '';

$output34 .= '
\\TYPO3\\CMS\\Extbase\\Utility\\ExtensionUtility::registerPlugin(
	\'ArminVieweg.dce\',
	\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments35 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments36 = array();
$arguments36['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments36['keepQuotes'] = false;
$arguments36['encoding'] = NULL;
$arguments36['doubleEncode'] = true;
$renderChildrenClosure37 = function() {return NULL;};
$value38 = ($arguments36['value'] !== NULL ? $arguments36['value'] : $renderChildrenClosure37());
$arguments35['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value38) ? $value38 : htmlspecialchars($value38, ($arguments36['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments36['encoding'] !== NULL ? $arguments36['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments36['doubleEncode'])));
$output39 = '';

$output39 .= 'dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments40 = array();
$arguments40['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments40['keepQuotes'] = false;
$arguments40['encoding'] = NULL;
$arguments40['doubleEncode'] = true;
$renderChildrenClosure41 = function() {return NULL;};
$value42 = ($arguments40['value'] !== NULL ? $arguments40['value'] : $renderChildrenClosure41());

$output39 .= (!is_string($value42) ? $value42 : htmlspecialchars($value42, ($arguments40['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments40['encoding'] !== NULL ? $arguments40['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments40['doubleEncode']));
$arguments35['then'] = $output39;
$output43 = '';

$output43 .= 'dce_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments44 = array();
$arguments44['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'identifier', $renderingContext);
$arguments44['keepQuotes'] = false;
$arguments44['encoding'] = NULL;
$arguments44['doubleEncode'] = true;
$renderChildrenClosure45 = function() {return NULL;};
$value46 = ($arguments44['value'] !== NULL ? $arguments44['value'] : $renderChildrenClosure45());

$output43 .= (!is_string($value46) ? $value46 : htmlspecialchars($value46, ($arguments44['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments44['encoding'] !== NULL ? $arguments44['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments44['doubleEncode']));
$arguments35['else'] = $output43;
$renderChildrenClosure47 = function() {return NULL;};

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure47, $renderingContext);

$output34 .= '\',
	\'';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\AddcslashesViewHelper
$arguments48 = array();
$arguments48['subject'] = NULL;
$arguments48['charlist'] = '\'';
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments50 = array();
$arguments50['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'title', $renderingContext);
$arguments50['keepQuotes'] = false;
$arguments50['encoding'] = NULL;
$arguments50['doubleEncode'] = true;
$renderChildrenClosure51 = function() {return NULL;};
$value52 = ($arguments50['value'] !== NULL ? $arguments50['value'] : $renderChildrenClosure51());
return (!is_string($value52) ? $value52 : htmlspecialchars($value52, ($arguments50['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments50['encoding'] !== NULL ? $arguments50['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments50['doubleEncode']));
};
$viewHelper53 = $self->getViewHelper('$viewHelper53', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\AddcslashesViewHelper');
$viewHelper53->setArguments($arguments48);
$viewHelper53->setRenderingContext($renderingContext);
$viewHelper53->setRenderChildrenClosure($renderChildrenClosure49);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\AddcslashesViewHelper

$output34 .= $viewHelper53->initializeArgumentsAndRender();

$output34 .= '\',
	\'\'
);
		';
return $output34;
};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments54 = array();
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output56 = '';

$output56 .= '
\\TYPO3\\CMS\\Core\\Utility\\ExtensionManagementUtility::addTcaSelectItem(
	\'tt_content\',
	\'CType\',
	array(
		\'';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\AddcslashesViewHelper
$arguments57 = array();
$arguments57['subject'] = NULL;
$arguments57['charlist'] = '\'';
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments59 = array();
$arguments59['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'title', $renderingContext);
$arguments59['keepQuotes'] = false;
$arguments59['encoding'] = NULL;
$arguments59['doubleEncode'] = true;
$renderChildrenClosure60 = function() {return NULL;};
$value61 = ($arguments59['value'] !== NULL ? $arguments59['value'] : $renderChildrenClosure60());
return (!is_string($value61) ? $value61 : htmlspecialchars($value61, ($arguments59['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments59['encoding'] !== NULL ? $arguments59['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments59['doubleEncode']));
};
$viewHelper62 = $self->getViewHelper('$viewHelper62', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\AddcslashesViewHelper');
$viewHelper62->setArguments($arguments57);
$viewHelper62->setRenderingContext($renderingContext);
$viewHelper62->setRenderChildrenClosure($renderChildrenClosure58);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\AddcslashesViewHelper

$output56 .= $viewHelper62->initializeArgumentsAndRender();

$output56 .= '\',
		\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments63 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments64 = array();
$arguments64['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments64['keepQuotes'] = false;
$arguments64['encoding'] = NULL;
$arguments64['doubleEncode'] = true;
$renderChildrenClosure65 = function() {return NULL;};
$value66 = ($arguments64['value'] !== NULL ? $arguments64['value'] : $renderChildrenClosure65());
$arguments63['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value66) ? $value66 : htmlspecialchars($value66, ($arguments64['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments64['encoding'] !== NULL ? $arguments64['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments64['doubleEncode'])));
$output67 = '';

$output67 .= 'dce_dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments68 = array();
$arguments68['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments68['keepQuotes'] = false;
$arguments68['encoding'] = NULL;
$arguments68['doubleEncode'] = true;
$renderChildrenClosure69 = function() {return NULL;};
$value70 = ($arguments68['value'] !== NULL ? $arguments68['value'] : $renderChildrenClosure69());

$output67 .= (!is_string($value70) ? $value70 : htmlspecialchars($value70, ($arguments68['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments68['encoding'] !== NULL ? $arguments68['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments68['doubleEncode']));
$arguments63['then'] = $output67;
$output71 = '';

$output71 .= 'dce_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments72 = array();
$arguments72['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'identifier', $renderingContext);
$arguments72['keepQuotes'] = false;
$arguments72['encoding'] = NULL;
$arguments72['doubleEncode'] = true;
$renderChildrenClosure73 = function() {return NULL;};
$value74 = ($arguments72['value'] !== NULL ? $arguments72['value'] : $renderChildrenClosure73());

$output71 .= (!is_string($value74) ? $value74 : htmlspecialchars($value74, ($arguments72['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments72['encoding'] !== NULL ? $arguments72['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments72['doubleEncode']));
$arguments63['else'] = $output71;
$renderChildrenClosure75 = function() {return NULL;};

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments63, $renderChildrenClosure75, $renderingContext);

$output56 .= '\',
		\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments76 = array();
// Rendering Boolean node
$arguments76['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'hasCustomWizardIcon', $renderingContext));
$arguments76['then'] = NULL;
$arguments76['else'] = NULL;
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output78 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments79 = array();
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output81 = '';

$output81 .= 'ext-dce-dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments82 = array();
$arguments82['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments82['keepQuotes'] = false;
$arguments82['encoding'] = NULL;
$arguments82['doubleEncode'] = true;
$renderChildrenClosure83 = function() {return NULL;};
$value84 = ($arguments82['value'] !== NULL ? $arguments82['value'] : $renderChildrenClosure83());

$output81 .= (!is_string($value84) ? $value84 : htmlspecialchars($value84, ($arguments82['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments82['encoding'] !== NULL ? $arguments82['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments82['doubleEncode']));

$output81 .= '-customwizardicon';
return $output81;
};

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments85 = array();
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output87 = '';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper
$arguments88 = array();
$arguments88['name'] = '';
$renderChildrenClosure89 = function() {return NULL;};
$viewHelper90 = $self->getViewHelper('$viewHelper90', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper');
$viewHelper90->setArguments($arguments88);
$viewHelper90->setRenderingContext($renderingContext);
$viewHelper90->setRenderChildrenClosure($renderChildrenClosure89);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper

$output87 .= $viewHelper90->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments91 = array();
$arguments91['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_icon', $renderingContext);
$arguments91['keepQuotes'] = false;
$arguments91['encoding'] = NULL;
$arguments91['doubleEncode'] = true;
$renderChildrenClosure92 = function() {return NULL;};
$value93 = ($arguments91['value'] !== NULL ? $arguments91['value'] : $renderChildrenClosure92());

$output87 .= (!is_string($value93) ? $value93 : htmlspecialchars($value93, ($arguments91['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments91['encoding'] !== NULL ? $arguments91['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments91['doubleEncode']));
return $output87;
};

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);
return $output78;
};
$arguments76['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output94 = '';

$output94 .= 'ext-dce-dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments95 = array();
$arguments95['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments95['keepQuotes'] = false;
$arguments95['encoding'] = NULL;
$arguments95['doubleEncode'] = true;
$renderChildrenClosure96 = function() {return NULL;};
$value97 = ($arguments95['value'] !== NULL ? $arguments95['value'] : $renderChildrenClosure96());

$output94 .= (!is_string($value97) ? $value97 : htmlspecialchars($value97, ($arguments95['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments95['encoding'] !== NULL ? $arguments95['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments95['doubleEncode']));

$output94 .= '-customwizardicon';
return $output94;
};
$arguments76['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output98 = '';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper
$arguments99 = array();
$arguments99['name'] = '';
$renderChildrenClosure100 = function() {return NULL;};
$viewHelper101 = $self->getViewHelper('$viewHelper101', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper');
$viewHelper101->setArguments($arguments99);
$viewHelper101->setRenderingContext($renderingContext);
$viewHelper101->setRenderChildrenClosure($renderChildrenClosure100);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper

$output98 .= $viewHelper101->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments102 = array();
$arguments102['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_icon', $renderingContext);
$arguments102['keepQuotes'] = false;
$arguments102['encoding'] = NULL;
$arguments102['doubleEncode'] = true;
$renderChildrenClosure103 = function() {return NULL;};
$value104 = ($arguments102['value'] !== NULL ? $arguments102['value'] : $renderChildrenClosure103());

$output98 .= (!is_string($value104) ? $value104 : htmlspecialchars($value104, ($arguments102['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments102['encoding'] !== NULL ? $arguments102['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments102['doubleEncode']));
return $output98;
};

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output56 .= '\'
	)
);
		';
return $output56;
};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output31 .= '
	';
return $output31;
};
$arguments26['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output105 = '';

$output105 .= '
\\TYPO3\\CMS\\Extbase\\Utility\\ExtensionUtility::registerPlugin(
	\'ArminVieweg.dce\',
	\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments106 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments107 = array();
$arguments107['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments107['keepQuotes'] = false;
$arguments107['encoding'] = NULL;
$arguments107['doubleEncode'] = true;
$renderChildrenClosure108 = function() {return NULL;};
$value109 = ($arguments107['value'] !== NULL ? $arguments107['value'] : $renderChildrenClosure108());
$arguments106['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value109) ? $value109 : htmlspecialchars($value109, ($arguments107['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments107['encoding'] !== NULL ? $arguments107['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments107['doubleEncode'])));
$output110 = '';

$output110 .= 'dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments111 = array();
$arguments111['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments111['keepQuotes'] = false;
$arguments111['encoding'] = NULL;
$arguments111['doubleEncode'] = true;
$renderChildrenClosure112 = function() {return NULL;};
$value113 = ($arguments111['value'] !== NULL ? $arguments111['value'] : $renderChildrenClosure112());

$output110 .= (!is_string($value113) ? $value113 : htmlspecialchars($value113, ($arguments111['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments111['encoding'] !== NULL ? $arguments111['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments111['doubleEncode']));
$arguments106['then'] = $output110;
$output114 = '';

$output114 .= 'dce_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments115 = array();
$arguments115['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'identifier', $renderingContext);
$arguments115['keepQuotes'] = false;
$arguments115['encoding'] = NULL;
$arguments115['doubleEncode'] = true;
$renderChildrenClosure116 = function() {return NULL;};
$value117 = ($arguments115['value'] !== NULL ? $arguments115['value'] : $renderChildrenClosure116());

$output114 .= (!is_string($value117) ? $value117 : htmlspecialchars($value117, ($arguments115['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments115['encoding'] !== NULL ? $arguments115['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments115['doubleEncode']));
$arguments106['else'] = $output114;
$renderChildrenClosure118 = function() {return NULL;};

$output105 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments106, $renderChildrenClosure118, $renderingContext);

$output105 .= '\',
	\'';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\AddcslashesViewHelper
$arguments119 = array();
$arguments119['subject'] = NULL;
$arguments119['charlist'] = '\'';
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments121 = array();
$arguments121['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'title', $renderingContext);
$arguments121['keepQuotes'] = false;
$arguments121['encoding'] = NULL;
$arguments121['doubleEncode'] = true;
$renderChildrenClosure122 = function() {return NULL;};
$value123 = ($arguments121['value'] !== NULL ? $arguments121['value'] : $renderChildrenClosure122());
return (!is_string($value123) ? $value123 : htmlspecialchars($value123, ($arguments121['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments121['encoding'] !== NULL ? $arguments121['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments121['doubleEncode']));
};
$viewHelper124 = $self->getViewHelper('$viewHelper124', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\AddcslashesViewHelper');
$viewHelper124->setArguments($arguments119);
$viewHelper124->setRenderingContext($renderingContext);
$viewHelper124->setRenderChildrenClosure($renderChildrenClosure120);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\AddcslashesViewHelper

$output105 .= $viewHelper124->initializeArgumentsAndRender();

$output105 .= '\',
	\'\'
);
		';
return $output105;
};
$arguments26['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output125 = '';

$output125 .= '
\\TYPO3\\CMS\\Core\\Utility\\ExtensionManagementUtility::addTcaSelectItem(
	\'tt_content\',
	\'CType\',
	array(
		\'';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\AddcslashesViewHelper
$arguments126 = array();
$arguments126['subject'] = NULL;
$arguments126['charlist'] = '\'';
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments128 = array();
$arguments128['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'title', $renderingContext);
$arguments128['keepQuotes'] = false;
$arguments128['encoding'] = NULL;
$arguments128['doubleEncode'] = true;
$renderChildrenClosure129 = function() {return NULL;};
$value130 = ($arguments128['value'] !== NULL ? $arguments128['value'] : $renderChildrenClosure129());
return (!is_string($value130) ? $value130 : htmlspecialchars($value130, ($arguments128['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments128['encoding'] !== NULL ? $arguments128['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments128['doubleEncode']));
};
$viewHelper131 = $self->getViewHelper('$viewHelper131', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\AddcslashesViewHelper');
$viewHelper131->setArguments($arguments126);
$viewHelper131->setRenderingContext($renderingContext);
$viewHelper131->setRenderChildrenClosure($renderChildrenClosure127);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\AddcslashesViewHelper

$output125 .= $viewHelper131->initializeArgumentsAndRender();

$output125 .= '\',
		\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments132 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments133 = array();
$arguments133['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments133['keepQuotes'] = false;
$arguments133['encoding'] = NULL;
$arguments133['doubleEncode'] = true;
$renderChildrenClosure134 = function() {return NULL;};
$value135 = ($arguments133['value'] !== NULL ? $arguments133['value'] : $renderChildrenClosure134());
$arguments132['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value135) ? $value135 : htmlspecialchars($value135, ($arguments133['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments133['encoding'] !== NULL ? $arguments133['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments133['doubleEncode'])));
$output136 = '';

$output136 .= 'dce_dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments137 = array();
$arguments137['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments137['keepQuotes'] = false;
$arguments137['encoding'] = NULL;
$arguments137['doubleEncode'] = true;
$renderChildrenClosure138 = function() {return NULL;};
$value139 = ($arguments137['value'] !== NULL ? $arguments137['value'] : $renderChildrenClosure138());

$output136 .= (!is_string($value139) ? $value139 : htmlspecialchars($value139, ($arguments137['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments137['encoding'] !== NULL ? $arguments137['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments137['doubleEncode']));
$arguments132['then'] = $output136;
$output140 = '';

$output140 .= 'dce_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments141 = array();
$arguments141['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'identifier', $renderingContext);
$arguments141['keepQuotes'] = false;
$arguments141['encoding'] = NULL;
$arguments141['doubleEncode'] = true;
$renderChildrenClosure142 = function() {return NULL;};
$value143 = ($arguments141['value'] !== NULL ? $arguments141['value'] : $renderChildrenClosure142());

$output140 .= (!is_string($value143) ? $value143 : htmlspecialchars($value143, ($arguments141['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments141['encoding'] !== NULL ? $arguments141['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments141['doubleEncode']));
$arguments132['else'] = $output140;
$renderChildrenClosure144 = function() {return NULL;};

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments132, $renderChildrenClosure144, $renderingContext);

$output125 .= '\',
		\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments145 = array();
// Rendering Boolean node
$arguments145['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'hasCustomWizardIcon', $renderingContext));
$arguments145['then'] = NULL;
$arguments145['else'] = NULL;
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output147 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments148 = array();
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output150 = '';

$output150 .= 'ext-dce-dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments151 = array();
$arguments151['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments151['keepQuotes'] = false;
$arguments151['encoding'] = NULL;
$arguments151['doubleEncode'] = true;
$renderChildrenClosure152 = function() {return NULL;};
$value153 = ($arguments151['value'] !== NULL ? $arguments151['value'] : $renderChildrenClosure152());

$output150 .= (!is_string($value153) ? $value153 : htmlspecialchars($value153, ($arguments151['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments151['encoding'] !== NULL ? $arguments151['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments151['doubleEncode']));

$output150 .= '-customwizardicon';
return $output150;
};

$output147 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments154 = array();
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output156 = '';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper
$arguments157 = array();
$arguments157['name'] = '';
$renderChildrenClosure158 = function() {return NULL;};
$viewHelper159 = $self->getViewHelper('$viewHelper159', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper');
$viewHelper159->setArguments($arguments157);
$viewHelper159->setRenderingContext($renderingContext);
$viewHelper159->setRenderChildrenClosure($renderChildrenClosure158);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper

$output156 .= $viewHelper159->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments160 = array();
$arguments160['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_icon', $renderingContext);
$arguments160['keepQuotes'] = false;
$arguments160['encoding'] = NULL;
$arguments160['doubleEncode'] = true;
$renderChildrenClosure161 = function() {return NULL;};
$value162 = ($arguments160['value'] !== NULL ? $arguments160['value'] : $renderChildrenClosure161());

$output156 .= (!is_string($value162) ? $value162 : htmlspecialchars($value162, ($arguments160['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments160['encoding'] !== NULL ? $arguments160['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments160['doubleEncode']));
return $output156;
};

$output147 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);
return $output147;
};
$arguments145['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output163 = '';

$output163 .= 'ext-dce-dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments164 = array();
$arguments164['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments164['keepQuotes'] = false;
$arguments164['encoding'] = NULL;
$arguments164['doubleEncode'] = true;
$renderChildrenClosure165 = function() {return NULL;};
$value166 = ($arguments164['value'] !== NULL ? $arguments164['value'] : $renderChildrenClosure165());

$output163 .= (!is_string($value166) ? $value166 : htmlspecialchars($value166, ($arguments164['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments164['encoding'] !== NULL ? $arguments164['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments164['doubleEncode']));

$output163 .= '-customwizardicon';
return $output163;
};
$arguments145['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output167 = '';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper
$arguments168 = array();
$arguments168['name'] = '';
$renderChildrenClosure169 = function() {return NULL;};
$viewHelper170 = $self->getViewHelper('$viewHelper170', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper');
$viewHelper170->setArguments($arguments168);
$viewHelper170->setRenderingContext($renderingContext);
$viewHelper170->setRenderChildrenClosure($renderChildrenClosure169);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper

$output167 .= $viewHelper170->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments171 = array();
$arguments171['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_icon', $renderingContext);
$arguments171['keepQuotes'] = false;
$arguments171['encoding'] = NULL;
$arguments171['doubleEncode'] = true;
$renderChildrenClosure172 = function() {return NULL;};
$value173 = ($arguments171['value'] !== NULL ? $arguments171['value'] : $renderChildrenClosure172());

$output167 .= (!is_string($value173) ? $value173 : htmlspecialchars($value173, ($arguments171['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments171['encoding'] !== NULL ? $arguments171['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments171['doubleEncode']));
return $output167;
};

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output125 .= '\'
	)
);
		';
return $output125;
};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure30, $renderingContext);

$output12 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments174 = array();
// Rendering Boolean node
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper
$arguments175 = array();
// Rendering Boolean node
$arguments175['returnInt'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$renderChildrenClosure176 = function() {return NULL;};
$viewHelper177 = $self->getViewHelper('$viewHelper177', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper');
$viewHelper177->setArguments($arguments175);
$viewHelper177->setRenderingContext($renderingContext);
$viewHelper177->setRenderChildrenClosure($renderChildrenClosure176);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper
$arguments174['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>=', $viewHelper177->initializeArgumentsAndRender(), 7006000);
$arguments174['then'] = NULL;
$arguments174['else'] = NULL;
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output179 = '';

$output179 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments180 = array();
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output182 = '';

$output182 .= '
		$GLOBALS[\'TCA\'][\'tt_content\'][\'ctrl\'][\'typeicon_classes\'][\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments183 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments184 = array();
$arguments184['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments184['keepQuotes'] = false;
$arguments184['encoding'] = NULL;
$arguments184['doubleEncode'] = true;
$renderChildrenClosure185 = function() {return NULL;};
$value186 = ($arguments184['value'] !== NULL ? $arguments184['value'] : $renderChildrenClosure185());
$arguments183['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value186) ? $value186 : htmlspecialchars($value186, ($arguments184['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments184['encoding'] !== NULL ? $arguments184['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments184['doubleEncode'])));
$output187 = '';

$output187 .= 'dce_dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments188 = array();
$arguments188['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments188['keepQuotes'] = false;
$arguments188['encoding'] = NULL;
$arguments188['doubleEncode'] = true;
$renderChildrenClosure189 = function() {return NULL;};
$value190 = ($arguments188['value'] !== NULL ? $arguments188['value'] : $renderChildrenClosure189());

$output187 .= (!is_string($value190) ? $value190 : htmlspecialchars($value190, ($arguments188['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments188['encoding'] !== NULL ? $arguments188['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments188['doubleEncode']));
$arguments183['then'] = $output187;
$output191 = '';

$output191 .= 'dce_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments192 = array();
$arguments192['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'identifier', $renderingContext);
$arguments192['keepQuotes'] = false;
$arguments192['encoding'] = NULL;
$arguments192['doubleEncode'] = true;
$renderChildrenClosure193 = function() {return NULL;};
$value194 = ($arguments192['value'] !== NULL ? $arguments192['value'] : $renderChildrenClosure193());

$output191 .= (!is_string($value194) ? $value194 : htmlspecialchars($value194, ($arguments192['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments192['encoding'] !== NULL ? $arguments192['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments192['doubleEncode']));
$arguments183['else'] = $output191;
$renderChildrenClosure195 = function() {return NULL;};

$output182 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments183, $renderChildrenClosure195, $renderingContext);

$output182 .= '\'] =
		\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments196 = array();
// Rendering Boolean node
$arguments196['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'hasCustomWizardIcon', $renderingContext));
$arguments196['then'] = NULL;
$arguments196['else'] = NULL;
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output198 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments199 = array();
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output201 = '';

$output201 .= 'ext-dce-dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments202 = array();
$arguments202['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments202['keepQuotes'] = false;
$arguments202['encoding'] = NULL;
$arguments202['doubleEncode'] = true;
$renderChildrenClosure203 = function() {return NULL;};
$value204 = ($arguments202['value'] !== NULL ? $arguments202['value'] : $renderChildrenClosure203());

$output201 .= (!is_string($value204) ? $value204 : htmlspecialchars($value204, ($arguments202['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments202['encoding'] !== NULL ? $arguments202['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments202['doubleEncode']));

$output201 .= '-customwizardicon';
return $output201;
};

$output198 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments205 = array();
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output207 = '';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper
$arguments208 = array();
$arguments208['name'] = '';
$renderChildrenClosure209 = function() {return NULL;};
$viewHelper210 = $self->getViewHelper('$viewHelper210', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper');
$viewHelper210->setArguments($arguments208);
$viewHelper210->setRenderingContext($renderingContext);
$viewHelper210->setRenderChildrenClosure($renderChildrenClosure209);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper

$output207 .= $viewHelper210->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments211 = array();
$arguments211['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_icon', $renderingContext);
$arguments211['keepQuotes'] = false;
$arguments211['encoding'] = NULL;
$arguments211['doubleEncode'] = true;
$renderChildrenClosure212 = function() {return NULL;};
$value213 = ($arguments211['value'] !== NULL ? $arguments211['value'] : $renderChildrenClosure212());

$output207 .= (!is_string($value213) ? $value213 : htmlspecialchars($value213, ($arguments211['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments211['encoding'] !== NULL ? $arguments211['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments211['doubleEncode']));
return $output207;
};

$output198 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);
return $output198;
};
$arguments196['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output214 = '';

$output214 .= 'ext-dce-dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments215 = array();
$arguments215['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments215['keepQuotes'] = false;
$arguments215['encoding'] = NULL;
$arguments215['doubleEncode'] = true;
$renderChildrenClosure216 = function() {return NULL;};
$value217 = ($arguments215['value'] !== NULL ? $arguments215['value'] : $renderChildrenClosure216());

$output214 .= (!is_string($value217) ? $value217 : htmlspecialchars($value217, ($arguments215['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments215['encoding'] !== NULL ? $arguments215['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments215['doubleEncode']));

$output214 .= '-customwizardicon';
return $output214;
};
$arguments196['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output218 = '';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper
$arguments219 = array();
$arguments219['name'] = '';
$renderChildrenClosure220 = function() {return NULL;};
$viewHelper221 = $self->getViewHelper('$viewHelper221', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper');
$viewHelper221->setArguments($arguments219);
$viewHelper221->setRenderingContext($renderingContext);
$viewHelper221->setRenderChildrenClosure($renderChildrenClosure220);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper

$output218 .= $viewHelper221->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments222 = array();
$arguments222['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_icon', $renderingContext);
$arguments222['keepQuotes'] = false;
$arguments222['encoding'] = NULL;
$arguments222['doubleEncode'] = true;
$renderChildrenClosure223 = function() {return NULL;};
$value224 = ($arguments222['value'] !== NULL ? $arguments222['value'] : $renderChildrenClosure223());

$output218 .= (!is_string($value224) ? $value224 : htmlspecialchars($value224, ($arguments222['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments222['encoding'] !== NULL ? $arguments222['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments222['doubleEncode']));
return $output218;
};

$output182 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output182 .= '\';
	';
return $output182;
};

$output179 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output179 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments225 = array();
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
	';
};

$output179 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output179 .= '
';
return $output179;
};
$arguments174['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output227 = '';

$output227 .= '
		$GLOBALS[\'TCA\'][\'tt_content\'][\'ctrl\'][\'typeicon_classes\'][\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments228 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments229 = array();
$arguments229['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments229['keepQuotes'] = false;
$arguments229['encoding'] = NULL;
$arguments229['doubleEncode'] = true;
$renderChildrenClosure230 = function() {return NULL;};
$value231 = ($arguments229['value'] !== NULL ? $arguments229['value'] : $renderChildrenClosure230());
$arguments228['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value231) ? $value231 : htmlspecialchars($value231, ($arguments229['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments229['encoding'] !== NULL ? $arguments229['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments229['doubleEncode'])));
$output232 = '';

$output232 .= 'dce_dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments233 = array();
$arguments233['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments233['keepQuotes'] = false;
$arguments233['encoding'] = NULL;
$arguments233['doubleEncode'] = true;
$renderChildrenClosure234 = function() {return NULL;};
$value235 = ($arguments233['value'] !== NULL ? $arguments233['value'] : $renderChildrenClosure234());

$output232 .= (!is_string($value235) ? $value235 : htmlspecialchars($value235, ($arguments233['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments233['encoding'] !== NULL ? $arguments233['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments233['doubleEncode']));
$arguments228['then'] = $output232;
$output236 = '';

$output236 .= 'dce_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments237 = array();
$arguments237['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'identifier', $renderingContext);
$arguments237['keepQuotes'] = false;
$arguments237['encoding'] = NULL;
$arguments237['doubleEncode'] = true;
$renderChildrenClosure238 = function() {return NULL;};
$value239 = ($arguments237['value'] !== NULL ? $arguments237['value'] : $renderChildrenClosure238());

$output236 .= (!is_string($value239) ? $value239 : htmlspecialchars($value239, ($arguments237['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments237['encoding'] !== NULL ? $arguments237['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments237['doubleEncode']));
$arguments228['else'] = $output236;
$renderChildrenClosure240 = function() {return NULL;};

$output227 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments228, $renderChildrenClosure240, $renderingContext);

$output227 .= '\'] =
		\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments241 = array();
// Rendering Boolean node
$arguments241['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'hasCustomWizardIcon', $renderingContext));
$arguments241['then'] = NULL;
$arguments241['else'] = NULL;
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output243 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments244 = array();
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output246 = '';

$output246 .= 'ext-dce-dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments247 = array();
$arguments247['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments247['keepQuotes'] = false;
$arguments247['encoding'] = NULL;
$arguments247['doubleEncode'] = true;
$renderChildrenClosure248 = function() {return NULL;};
$value249 = ($arguments247['value'] !== NULL ? $arguments247['value'] : $renderChildrenClosure248());

$output246 .= (!is_string($value249) ? $value249 : htmlspecialchars($value249, ($arguments247['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments247['encoding'] !== NULL ? $arguments247['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments247['doubleEncode']));

$output246 .= '-customwizardicon';
return $output246;
};

$output243 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments250 = array();
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output252 = '';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper
$arguments253 = array();
$arguments253['name'] = '';
$renderChildrenClosure254 = function() {return NULL;};
$viewHelper255 = $self->getViewHelper('$viewHelper255', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper');
$viewHelper255->setArguments($arguments253);
$viewHelper255->setRenderingContext($renderingContext);
$viewHelper255->setRenderChildrenClosure($renderChildrenClosure254);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper

$output252 .= $viewHelper255->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments256 = array();
$arguments256['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_icon', $renderingContext);
$arguments256['keepQuotes'] = false;
$arguments256['encoding'] = NULL;
$arguments256['doubleEncode'] = true;
$renderChildrenClosure257 = function() {return NULL;};
$value258 = ($arguments256['value'] !== NULL ? $arguments256['value'] : $renderChildrenClosure257());

$output252 .= (!is_string($value258) ? $value258 : htmlspecialchars($value258, ($arguments256['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments256['encoding'] !== NULL ? $arguments256['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments256['doubleEncode']));
return $output252;
};

$output243 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);
return $output243;
};
$arguments241['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output259 = '';

$output259 .= 'ext-dce-dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments260 = array();
$arguments260['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments260['keepQuotes'] = false;
$arguments260['encoding'] = NULL;
$arguments260['doubleEncode'] = true;
$renderChildrenClosure261 = function() {return NULL;};
$value262 = ($arguments260['value'] !== NULL ? $arguments260['value'] : $renderChildrenClosure261());

$output259 .= (!is_string($value262) ? $value262 : htmlspecialchars($value262, ($arguments260['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments260['encoding'] !== NULL ? $arguments260['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments260['doubleEncode']));

$output259 .= '-customwizardicon';
return $output259;
};
$arguments241['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output263 = '';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper
$arguments264 = array();
$arguments264['name'] = '';
$renderChildrenClosure265 = function() {return NULL;};
$viewHelper266 = $self->getViewHelper('$viewHelper266', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper');
$viewHelper266->setArguments($arguments264);
$viewHelper266->setRenderingContext($renderingContext);
$viewHelper266->setRenderChildrenClosure($renderChildrenClosure265);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ContentElementWizardIconPathViewHelper

$output263 .= $viewHelper266->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments267 = array();
$arguments267['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'wizard_icon', $renderingContext);
$arguments267['keepQuotes'] = false;
$arguments267['encoding'] = NULL;
$arguments267['doubleEncode'] = true;
$renderChildrenClosure268 = function() {return NULL;};
$value269 = ($arguments267['value'] !== NULL ? $arguments267['value'] : $renderChildrenClosure268());

$output263 .= (!is_string($value269) ? $value269 : htmlspecialchars($value269, ($arguments267['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments267['encoding'] !== NULL ? $arguments267['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments267['doubleEncode']));
return $output263;
};

$output227 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output227 .= '\';
	';
return $output227;
};
$arguments174['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
	';
};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments174, $renderChildrenClosure178, $renderingContext);

$output12 .= '

$GLOBALS[\'TCA\'][\'tt_content\'][\'types\'][\'list\'][\'subtypes_addlist\'][\'dce_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments270 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments271 = array();
$arguments271['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments271['keepQuotes'] = false;
$arguments271['encoding'] = NULL;
$arguments271['doubleEncode'] = true;
$renderChildrenClosure272 = function() {return NULL;};
$value273 = ($arguments271['value'] !== NULL ? $arguments271['value'] : $renderChildrenClosure272());
$arguments270['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value273) ? $value273 : htmlspecialchars($value273, ($arguments271['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments271['encoding'] !== NULL ? $arguments271['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments271['doubleEncode'])));
$output274 = '';

$output274 .= 'dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments275 = array();
$arguments275['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments275['keepQuotes'] = false;
$arguments275['encoding'] = NULL;
$arguments275['doubleEncode'] = true;
$renderChildrenClosure276 = function() {return NULL;};
$value277 = ($arguments275['value'] !== NULL ? $arguments275['value'] : $renderChildrenClosure276());

$output274 .= (!is_string($value277) ? $value277 : htmlspecialchars($value277, ($arguments275['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments275['encoding'] !== NULL ? $arguments275['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments275['doubleEncode']));
$arguments270['then'] = $output274;
$output278 = '';

$output278 .= 'dce_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments279 = array();
$arguments279['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'identifier', $renderingContext);
$arguments279['keepQuotes'] = false;
$arguments279['encoding'] = NULL;
$arguments279['doubleEncode'] = true;
$renderChildrenClosure280 = function() {return NULL;};
$value281 = ($arguments279['value'] !== NULL ? $arguments279['value'] : $renderChildrenClosure280());

$output278 .= (!is_string($value281) ? $value281 : htmlspecialchars($value281, ($arguments279['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments279['encoding'] !== NULL ? $arguments279['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments279['doubleEncode']));
$arguments270['else'] = $output278;
$renderChildrenClosure282 = function() {return NULL;};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments270, $renderChildrenClosure282, $renderingContext);

$output12 .= '\'] = \'pi_flexform\';
$GLOBALS[\'TCA\'][\'tt_content\'][\'columns\'][\'pi_flexform\'][\'config\'][\'ds\'][\',dce_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments283 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments284 = array();
$arguments284['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments284['keepQuotes'] = false;
$arguments284['encoding'] = NULL;
$arguments284['doubleEncode'] = true;
$renderChildrenClosure285 = function() {return NULL;};
$value286 = ($arguments284['value'] !== NULL ? $arguments284['value'] : $renderChildrenClosure285());
$arguments283['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value286) ? $value286 : htmlspecialchars($value286, ($arguments284['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments284['encoding'] !== NULL ? $arguments284['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments284['doubleEncode'])));
$output287 = '';

$output287 .= 'dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments288 = array();
$arguments288['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments288['keepQuotes'] = false;
$arguments288['encoding'] = NULL;
$arguments288['doubleEncode'] = true;
$renderChildrenClosure289 = function() {return NULL;};
$value290 = ($arguments288['value'] !== NULL ? $arguments288['value'] : $renderChildrenClosure289());

$output287 .= (!is_string($value290) ? $value290 : htmlspecialchars($value290, ($arguments288['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments288['encoding'] !== NULL ? $arguments288['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments288['doubleEncode']));
$arguments283['then'] = $output287;
$output291 = '';

$output291 .= 'dce_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments292 = array();
$arguments292['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'identifier', $renderingContext);
$arguments292['keepQuotes'] = false;
$arguments292['encoding'] = NULL;
$arguments292['doubleEncode'] = true;
$renderChildrenClosure293 = function() {return NULL;};
$value294 = ($arguments292['value'] !== NULL ? $arguments292['value'] : $renderChildrenClosure293());

$output291 .= (!is_string($value294) ? $value294 : htmlspecialchars($value294, ($arguments292['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments292['encoding'] !== NULL ? $arguments292['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments292['doubleEncode']));
$arguments283['else'] = $output291;
$renderChildrenClosure295 = function() {return NULL;};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments283, $renderChildrenClosure295, $renderingContext);

$output12 .= '\'] = \'';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\TinyViewHelper
$arguments296 = array();
$arguments296['subject'] = NULL;
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments298 = array();
$arguments298['partial'] = 'FlexFormsXML';
// Rendering Array
$array299 = array();
$array299['dce'] = $currentVariableContainer->getOrNull('dce');
$arguments298['arguments'] = $array299;
$arguments298['section'] = NULL;
$arguments298['optional'] = false;
$renderChildrenClosure300 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments298, $renderChildrenClosure300, $renderingContext);
};
$viewHelper301 = $self->getViewHelper('$viewHelper301', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\TinyViewHelper');
$viewHelper301->setArguments($arguments296);
$viewHelper301->setRenderingContext($renderingContext);
$viewHelper301->setRenderChildrenClosure($renderChildrenClosure297);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\TinyViewHelper

$output12 .= $viewHelper301->initializeArgumentsAndRender();

$output12 .= '\';
$GLOBALS[\'TCA\'][\'tt_content\'][\'types\'][\'dce_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments302 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments303 = array();
$arguments303['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments303['keepQuotes'] = false;
$arguments303['encoding'] = NULL;
$arguments303['doubleEncode'] = true;
$renderChildrenClosure304 = function() {return NULL;};
$value305 = ($arguments303['value'] !== NULL ? $arguments303['value'] : $renderChildrenClosure304());
$arguments302['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value305) ? $value305 : htmlspecialchars($value305, ($arguments303['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments303['encoding'] !== NULL ? $arguments303['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments303['doubleEncode'])));
$output306 = '';

$output306 .= 'dceuid';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments307 = array();
$arguments307['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments307['keepQuotes'] = false;
$arguments307['encoding'] = NULL;
$arguments307['doubleEncode'] = true;
$renderChildrenClosure308 = function() {return NULL;};
$value309 = ($arguments307['value'] !== NULL ? $arguments307['value'] : $renderChildrenClosure308());

$output306 .= (!is_string($value309) ? $value309 : htmlspecialchars($value309, ($arguments307['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments307['encoding'] !== NULL ? $arguments307['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments307['doubleEncode']));
$arguments302['then'] = $output306;
$output310 = '';

$output310 .= 'dce_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments311 = array();
$arguments311['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'identifier', $renderingContext);
$arguments311['keepQuotes'] = false;
$arguments311['encoding'] = NULL;
$arguments311['doubleEncode'] = true;
$renderChildrenClosure312 = function() {return NULL;};
$value313 = ($arguments311['value'] !== NULL ? $arguments311['value'] : $renderChildrenClosure312());

$output310 .= (!is_string($value313) ? $value313 : htmlspecialchars($value313, ($arguments311['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments311['encoding'] !== NULL ? $arguments311['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments311['doubleEncode']));
$arguments302['else'] = $output310;
$renderChildrenClosure314 = function() {return NULL;};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments302, $renderChildrenClosure314, $renderingContext);

$output12 .= '\'][\'showitem\'] = \'';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\TinyViewHelper
$arguments315 = array();
$arguments315['subject'] = NULL;
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output317 = '';

$output317 .= '
	--palette--;;dce_palette_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments318 = array();
$arguments318['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments318['keepQuotes'] = false;
$arguments318['encoding'] = NULL;
$arguments318['doubleEncode'] = true;
$renderChildrenClosure319 = function() {return NULL;};
$value320 = ($arguments318['value'] !== NULL ? $arguments318['value'] : $renderChildrenClosure319());

$output317 .= (!is_string($value320) ? $value320 : htmlspecialchars($value320, ($arguments318['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments318['encoding'] !== NULL ? $arguments318['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments318['doubleEncode']));

$output317 .= '_head,
	--palette--;;dce_palette_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments321 = array();
$arguments321['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments321['keepQuotes'] = false;
$arguments321['encoding'] = NULL;
$arguments321['doubleEncode'] = true;
$renderChildrenClosure322 = function() {return NULL;};
$value323 = ($arguments321['value'] !== NULL ? $arguments321['value'] : $renderChildrenClosure322());

$output317 .= (!is_string($value323) ? $value323 : htmlspecialchars($value323, ($arguments321['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments321['encoding'] !== NULL ? $arguments321['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments321['doubleEncode']));

$output317 .= ',
	pi_flexform,
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments324 = array();
// Rendering Boolean node
$arguments324['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'show_access_tab', $renderingContext));
$arguments324['then'] = NULL;
$arguments324['else'] = NULL;
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output326 = '';

$output326 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments327 = array();
// Rendering Boolean node
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper
$arguments328 = array();
// Rendering Boolean node
$arguments328['returnInt'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$renderChildrenClosure329 = function() {return NULL;};
$viewHelper330 = $self->getViewHelper('$viewHelper330', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper');
$viewHelper330->setArguments($arguments328);
$viewHelper330->setRenderingContext($renderingContext);
$viewHelper330->setRenderChildrenClosure($renderChildrenClosure329);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\Version\Typo3ViewHelper
$arguments327['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>=', $viewHelper330->initializeArgumentsAndRender(), 7006000);
$arguments327['then'] = NULL;
$arguments327['else'] = NULL;
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output332 = '';

$output332 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments333 = array();
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
				--div--;LLL:EXT:lang/locallang_tca.xlf:be_users.tabs.access,
				--palette--;LLL:EXT:lang/locallang_tca.xlf:pages.palettes.visibility;visibility,
				--palette--;LLL:EXT:lang/locallang_tca.xlf:be_users.tabs.access;access,
			';
};

$output332 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext);

$output332 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments335 = array();
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
				--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
				--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
			';
};

$output332 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output332 .= '
		';
return $output332;
};
$arguments327['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
				--div--;LLL:EXT:lang/locallang_tca.xlf:be_users.tabs.access,
				--palette--;LLL:EXT:lang/locallang_tca.xlf:pages.palettes.visibility;visibility,
				--palette--;LLL:EXT:lang/locallang_tca.xlf:be_users.tabs.access;access,
			';
};
$arguments327['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
				--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
				--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
			';
};

$output326 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments327, $renderChildrenClosure331, $renderingContext);

$output326 .= '
	';
return $output326;
};

$output317 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);

$output317 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments337 = array();
// Rendering Boolean node
$arguments337['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'show_category_tab', $renderingContext));
$arguments337['then'] = NULL;
$arguments337['else'] = NULL;
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
		--div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,
		categories,
	';
};

$output317 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext);

$output317 .= '
	--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended
';
return $output317;
};
$viewHelper339 = $self->getViewHelper('$viewHelper339', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\TinyViewHelper');
$viewHelper339->setArguments($arguments315);
$viewHelper339->setRenderingContext($renderingContext);
$viewHelper339->setRenderChildrenClosure($renderChildrenClosure316);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\TinyViewHelper

$output12 .= $viewHelper339->initializeArgumentsAndRender();

$output12 .= '\';

	$GLOBALS[\'TCA\'][\'tt_content\'][\'palettes\'][\'dce_palette_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments340 = array();
$arguments340['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments340['keepQuotes'] = false;
$arguments340['encoding'] = NULL;
$arguments340['doubleEncode'] = true;
$renderChildrenClosure341 = function() {return NULL;};
$value342 = ($arguments340['value'] !== NULL ? $arguments340['value'] : $renderChildrenClosure341());

$output12 .= (!is_string($value342) ? $value342 : htmlspecialchars($value342, ($arguments340['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments340['encoding'] !== NULL ? $arguments340['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments340['doubleEncode']));

$output12 .= '_head\'][\'canNotCollapse\'] = true;
	$GLOBALS[\'TCA\'][\'tt_content\'][\'palettes\'][\'dce_palette_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments343 = array();
$arguments343['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments343['keepQuotes'] = false;
$arguments343['encoding'] = NULL;
$arguments343['doubleEncode'] = true;
$renderChildrenClosure344 = function() {return NULL;};
$value345 = ($arguments343['value'] !== NULL ? $arguments343['value'] : $renderChildrenClosure344());

$output12 .= (!is_string($value345) ? $value345 : htmlspecialchars($value345, ($arguments343['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments343['encoding'] !== NULL ? $arguments343['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments343['doubleEncode']));

$output12 .= '_head\'][\'showitem\'] = \'';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\TinyViewHelper
$arguments346 = array();
$arguments346['subject'] = NULL;
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output348 = '';

$output348 .= '
		CType
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments349 = array();
// Rendering Boolean node
$arguments349['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'enable_container', $renderingContext));
$arguments349['then'] = NULL;
$arguments349['else'] = NULL;
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			,tx_dce_new_container
		';
};

$output348 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext);

$output348 .= '
	';
return $output348;
};
$viewHelper351 = $self->getViewHelper('$viewHelper351', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\TinyViewHelper');
$viewHelper351->setArguments($arguments346);
$viewHelper351->setRenderingContext($renderingContext);
$viewHelper351->setRenderChildrenClosure($renderChildrenClosure347);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\TinyViewHelper

$output12 .= $viewHelper351->initializeArgumentsAndRender();

$output12 .= '\';
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments352 = array();
// Rendering Boolean node
$arguments352['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'palette_fields', $renderingContext));
$arguments352['then'] = NULL;
$arguments352['else'] = NULL;
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output354 = '';

$output354 .= '
	$GLOBALS[\'TCA\'][\'tt_content\'][\'palettes\'][\'dce_palette_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments355 = array();
$arguments355['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments355['keepQuotes'] = false;
$arguments355['encoding'] = NULL;
$arguments355['doubleEncode'] = true;
$renderChildrenClosure356 = function() {return NULL;};
$value357 = ($arguments355['value'] !== NULL ? $arguments355['value'] : $renderChildrenClosure356());

$output354 .= (!is_string($value357) ? $value357 : htmlspecialchars($value357, ($arguments355['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments355['encoding'] !== NULL ? $arguments355['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments355['doubleEncode']));

$output354 .= '\'][\'canNotCollapse\'] = true;
	$GLOBALS[\'TCA\'][\'tt_content\'][\'palettes\'][\'dce_palette_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments358 = array();
$arguments358['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'uid', $renderingContext);
$arguments358['keepQuotes'] = false;
$arguments358['encoding'] = NULL;
$arguments358['doubleEncode'] = true;
$renderChildrenClosure359 = function() {return NULL;};
$value360 = ($arguments358['value'] !== NULL ? $arguments358['value'] : $renderChildrenClosure359());

$output354 .= (!is_string($value360) ? $value360 : htmlspecialchars($value360, ($arguments358['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments358['encoding'] !== NULL ? $arguments358['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments358['doubleEncode']));

$output354 .= '\'][\'showitem\'] = \'';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\TinyViewHelper
$arguments361 = array();
$arguments361['subject'] = NULL;
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output363 = '';

$output363 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments364 = array();
$arguments364['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('dce'), 'palette_fields', $renderingContext);
$arguments364['keepQuotes'] = false;
$arguments364['encoding'] = NULL;
$arguments364['doubleEncode'] = true;
$renderChildrenClosure365 = function() {return NULL;};
$value366 = ($arguments364['value'] !== NULL ? $arguments364['value'] : $renderChildrenClosure365());

$output363 .= (!is_string($value366) ? $value366 : htmlspecialchars($value366, ($arguments364['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments364['encoding'] !== NULL ? $arguments364['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments364['doubleEncode']));

$output363 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments367 = array();
// Rendering Boolean node
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ExtensionIsInstalledViewHelper
$arguments368 = array();
$arguments368['key'] = 'gridelements';
$renderChildrenClosure369 = function() {return NULL;};
$viewHelper370 = $self->getViewHelper('$viewHelper370', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Be\ExtensionIsInstalledViewHelper');
$viewHelper370->setArguments($arguments368);
$viewHelper370->setRenderingContext($renderingContext);
$viewHelper370->setRenderChildrenClosure($renderChildrenClosure369);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Be\ExtensionIsInstalledViewHelper
$arguments367['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper370->initializeArgumentsAndRender());
$arguments367['then'] = NULL;
$arguments367['else'] = NULL;
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
		,tx_gridelements_container,tx_gridelements_columns
	';
};

$output363 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments367, $renderChildrenClosure371, $renderingContext);

$output363 .= '
	';
return $output363;
};
$viewHelper372 = $self->getViewHelper('$viewHelper372', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\Format\TinyViewHelper');
$viewHelper372->setArguments($arguments361);
$viewHelper372->setRenderingContext($renderingContext);
$viewHelper372->setRenderChildrenClosure($renderChildrenClosure362);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\Format\TinyViewHelper

$output354 .= $viewHelper372->initializeArgumentsAndRender();

$output354 .= '\';
';
return $output354;
};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments352, $renderChildrenClosure353, $renderingContext);

$output12 .= '

';
return $output12;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
';
return $output9;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '

// global definitions
$GLOBALS[\'TCA\'][\'tt_content\'][\'columns\'][\'CType\'][\'config\'][\'items\'][] = array(
	0 => \'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.miscellaneous\',
	1 => \'--div--\'
);

\\TYPO3\\CMS\\Core\\Utility\\ExtensionManagementUtility::addPageTSConfig(\'mod.wizards.newContentElement.wizardItems.dce.header = LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce_long\');
';


return $output0;
}


}
#1466630312    95377     