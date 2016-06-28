<?php
class FluidCache_Belog_Tools_partial_Content_LogEntries_790b5de52d30a2c64ce1d11da1a7f304e4e6fde3 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'groupByPage', $renderingContext));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
	<div>
		<h2>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments4 = array();
$arguments4['key'] = 'overview';
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['htmlEscape'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
		</h2>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments6 = array();
$arguments6['key'] = 'timeInfo';
// Rendering Array
$array7 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments8 = array();
$output9 = '';

$output9 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output9 .= ' ';

$output9 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments8['format'] = $output9;
$output10 = '';

$output10 .= '@';

$output10 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'startTimestamp', $renderingContext);
$arguments8['date'] = $output10;
$arguments8['base'] = NULL;
$renderChildrenClosure11 = function() {return NULL;};
$array7['0'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments8, $renderChildrenClosure11, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments12 = array();
$output13 = '';

$output13 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output13 .= ' ';

$output13 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments12['format'] = $output13;
$output14 = '';

$output14 .= '@';

$output14 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'endTimestamp', $renderingContext);
$arguments12['date'] = $output14;
$arguments12['base'] = NULL;
$renderChildrenClosure15 = function() {return NULL;};
$array7['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments12, $renderChildrenClosure15, $renderingContext);
$arguments6['arguments'] = $array7;
$arguments6['id'] = NULL;
$arguments6['default'] = NULL;
$arguments6['htmlEscape'] = NULL;
$arguments6['extensionName'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure16, $renderingContext);

$output3 .= '
		<p>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments17 = array();
$arguments17['each'] = $currentVariableContainer->getOrNull('groupedLogEntries');
$arguments17['as'] = 'pidEntry';
$arguments17['key'] = 'pid';
$arguments17['reverse'] = false;
$arguments17['iteration'] = NULL;
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output19 = '';

$output19 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments20 = array();
// Rendering Boolean node
$arguments20['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', $currentVariableContainer->getOrNull('pid'), 0);
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= '
					<br />
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments23 = array();
$arguments23['key'] = 'pagenameWithUID';
// Rendering Array
$array24 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper
$arguments25 = array();
$arguments25['pid'] = $currentVariableContainer->getOrNull('pid');
$arguments25['titleLimit'] = 20;
$renderChildrenClosure26 = function() {return NULL;};
$array24['0'] = TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);
$array24['1'] = $currentVariableContainer->getOrNull('pid');
$arguments23['arguments'] = $array24;
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['htmlEscape'] = NULL;
$arguments23['extensionName'] = NULL;
$renderChildrenClosure27 = function() {return NULL;};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure27, $renderingContext);

$output22 .= '
				';
return $output22;
};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
			';
return $output19;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output3 .= '
		</p>
	</div>
';
return $output3;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments28 = array();
$arguments28['each'] = $currentVariableContainer->getOrNull('groupedLogEntries');
$arguments28['as'] = 'pidEntry';
$arguments28['key'] = 'pid';
$arguments28['reverse'] = false;
$arguments28['iteration'] = NULL;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output30 = '';

$output30 .= '
	<div>
		<h2>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments31 = array();
// Rendering Boolean node
$arguments31['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'groupByPage', $renderingContext));
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output33 = '';

$output33 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments34 = array();
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output36 = '';

$output36 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments37 = array();
// Rendering Boolean node
$arguments37['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', $currentVariableContainer->getOrNull('pid'), 1);
$arguments37['then'] = NULL;
$arguments37['else'] = NULL;
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output39 = '';

$output39 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments40 = array();
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output42 = '';

$output42 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments43 = array();
// Rendering Boolean node
$arguments43['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('pid'), -1);
$arguments43['then'] = NULL;
$arguments43['else'] = NULL;
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output45 = '';

$output45 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments46 = array();
$arguments46['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array47 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments48 = array();
$arguments48['key'] = 'forNonPageRelatedActions';
$arguments48['id'] = NULL;
$arguments48['default'] = NULL;
$arguments48['htmlEscape'] = NULL;
$arguments48['arguments'] = NULL;
$arguments48['extensionName'] = NULL;
$renderChildrenClosure49 = function() {return NULL;};
$array47['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments50 = array();
$output51 = '';

$output51 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output51 .= ' ';

$output51 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments50['format'] = $output51;
$output52 = '';

$output52 .= '@';

$output52 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'startTimestamp', $renderingContext);
$arguments50['date'] = $output52;
$arguments50['base'] = NULL;
$renderChildrenClosure53 = function() {return NULL;};
$array47['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments50, $renderChildrenClosure53, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments54 = array();
$output55 = '';

$output55 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output55 .= ' ';

$output55 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments54['format'] = $output55;
$output56 = '';

$output56 .= '@';

$output56 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'endTimestamp', $renderingContext);
$arguments54['date'] = $output56;
$arguments54['base'] = NULL;
$renderChildrenClosure57 = function() {return NULL;};
$array47['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments54, $renderChildrenClosure57, $renderingContext);
$arguments46['arguments'] = $array47;
$arguments46['id'] = NULL;
$arguments46['default'] = NULL;
$arguments46['htmlEscape'] = NULL;
$arguments46['extensionName'] = NULL;
$renderChildrenClosure58 = function() {return NULL;};

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments46, $renderChildrenClosure58, $renderingContext);

$output45 .= '
							';
return $output45;
};

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments59 = array();
// Rendering Boolean node
$arguments59['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('pid'), 0);
$arguments59['then'] = NULL;
$arguments59['else'] = NULL;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output61 = '';

$output61 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments62 = array();
$arguments62['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array63 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments64 = array();
$arguments64['key'] = 'forRootLevel';
$arguments64['id'] = NULL;
$arguments64['default'] = NULL;
$arguments64['htmlEscape'] = NULL;
$arguments64['arguments'] = NULL;
$arguments64['extensionName'] = NULL;
$renderChildrenClosure65 = function() {return NULL;};
$array63['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments66 = array();
$output67 = '';

$output67 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output67 .= ' ';

$output67 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments66['format'] = $output67;
$output68 = '';

$output68 .= '@';

$output68 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'startTimestamp', $renderingContext);
$arguments66['date'] = $output68;
$arguments66['base'] = NULL;
$renderChildrenClosure69 = function() {return NULL;};
$array63['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments66, $renderChildrenClosure69, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments70 = array();
$output71 = '';

$output71 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output71 .= ' ';

$output71 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments70['format'] = $output71;
$output72 = '';

$output72 .= '@';

$output72 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'endTimestamp', $renderingContext);
$arguments70['date'] = $output72;
$arguments70['base'] = NULL;
$renderChildrenClosure73 = function() {return NULL;};
$array63['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments70, $renderChildrenClosure73, $renderingContext);
$arguments62['arguments'] = $array63;
$arguments62['id'] = NULL;
$arguments62['default'] = NULL;
$arguments62['htmlEscape'] = NULL;
$arguments62['extensionName'] = NULL;
$renderChildrenClosure74 = function() {return NULL;};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure74, $renderingContext);

$output61 .= '
							';
return $output61;
};

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output42 .= '
						';
return $output42;
};

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments75 = array();
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output77 = '';

$output77 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments78 = array();
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
								Nest view helpers three times:
								1. Feed pid as argument to be.pagePath
								2. Use this as argument for \'forPage\' translate
								3. Use this as argument for \'logForNonPageRelatedActionsOrRootLevelOrPage\' translate
							';
};

$output77 .= '';

$output77 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments80 = array();
$arguments80['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array81 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments82 = array();
$arguments82['key'] = 'forPage';
// Rendering Boolean node
$arguments82['htmlEscape'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Array
$array83 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper
$arguments84 = array();
$arguments84['pid'] = $currentVariableContainer->getOrNull('pid');
$arguments84['titleLimit'] = 20;
$renderChildrenClosure85 = function() {return NULL;};
$array83['0'] = TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);
$array83['1'] = $currentVariableContainer->getOrNull('pid');
$arguments82['arguments'] = $array83;
$arguments82['id'] = NULL;
$arguments82['default'] = NULL;
$arguments82['extensionName'] = NULL;
$renderChildrenClosure86 = function() {return NULL;};
$array81['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments82, $renderChildrenClosure86, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments87 = array();
$output88 = '';

$output88 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output88 .= ' ';

$output88 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments87['format'] = $output88;
$output89 = '';

$output89 .= '@';

$output89 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'startTimestamp', $renderingContext);
$arguments87['date'] = $output89;
$arguments87['base'] = NULL;
$renderChildrenClosure90 = function() {return NULL;};
$array81['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments87, $renderChildrenClosure90, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments91 = array();
$output92 = '';

$output92 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output92 .= ' ';

$output92 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments91['format'] = $output92;
$output93 = '';

$output93 .= '@';

$output93 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'endTimestamp', $renderingContext);
$arguments91['date'] = $output93;
$arguments91['base'] = NULL;
$renderChildrenClosure94 = function() {return NULL;};
$array81['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments91, $renderChildrenClosure94, $renderingContext);
$arguments80['arguments'] = $array81;
$arguments80['id'] = NULL;
$arguments80['default'] = NULL;
$arguments80['htmlEscape'] = NULL;
$arguments80['extensionName'] = NULL;
$renderChildrenClosure95 = function() {return NULL;};

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments80, $renderChildrenClosure95, $renderingContext);

$output77 .= '
						';
return $output77;
};

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output39 .= '
					';
return $output39;
};
$arguments37['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output96 = '';

$output96 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments97 = array();
// Rendering Boolean node
$arguments97['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('pid'), -1);
$arguments97['then'] = NULL;
$arguments97['else'] = NULL;
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output99 = '';

$output99 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments100 = array();
$arguments100['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array101 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments102 = array();
$arguments102['key'] = 'forNonPageRelatedActions';
$arguments102['id'] = NULL;
$arguments102['default'] = NULL;
$arguments102['htmlEscape'] = NULL;
$arguments102['arguments'] = NULL;
$arguments102['extensionName'] = NULL;
$renderChildrenClosure103 = function() {return NULL;};
$array101['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments104 = array();
$output105 = '';

$output105 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output105 .= ' ';

$output105 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments104['format'] = $output105;
$output106 = '';

$output106 .= '@';

$output106 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'startTimestamp', $renderingContext);
$arguments104['date'] = $output106;
$arguments104['base'] = NULL;
$renderChildrenClosure107 = function() {return NULL;};
$array101['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments104, $renderChildrenClosure107, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments108 = array();
$output109 = '';

$output109 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output109 .= ' ';

$output109 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments108['format'] = $output109;
$output110 = '';

$output110 .= '@';

$output110 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'endTimestamp', $renderingContext);
$arguments108['date'] = $output110;
$arguments108['base'] = NULL;
$renderChildrenClosure111 = function() {return NULL;};
$array101['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments108, $renderChildrenClosure111, $renderingContext);
$arguments100['arguments'] = $array101;
$arguments100['id'] = NULL;
$arguments100['default'] = NULL;
$arguments100['htmlEscape'] = NULL;
$arguments100['extensionName'] = NULL;
$renderChildrenClosure112 = function() {return NULL;};

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments100, $renderChildrenClosure112, $renderingContext);

$output99 .= '
							';
return $output99;
};

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments113 = array();
// Rendering Boolean node
$arguments113['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('pid'), 0);
$arguments113['then'] = NULL;
$arguments113['else'] = NULL;
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output115 = '';

$output115 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments116 = array();
$arguments116['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array117 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments118 = array();
$arguments118['key'] = 'forRootLevel';
$arguments118['id'] = NULL;
$arguments118['default'] = NULL;
$arguments118['htmlEscape'] = NULL;
$arguments118['arguments'] = NULL;
$arguments118['extensionName'] = NULL;
$renderChildrenClosure119 = function() {return NULL;};
$array117['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments120 = array();
$output121 = '';

$output121 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output121 .= ' ';

$output121 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments120['format'] = $output121;
$output122 = '';

$output122 .= '@';

$output122 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'startTimestamp', $renderingContext);
$arguments120['date'] = $output122;
$arguments120['base'] = NULL;
$renderChildrenClosure123 = function() {return NULL;};
$array117['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments120, $renderChildrenClosure123, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments124 = array();
$output125 = '';

$output125 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output125 .= ' ';

$output125 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments124['format'] = $output125;
$output126 = '';

$output126 .= '@';

$output126 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'endTimestamp', $renderingContext);
$arguments124['date'] = $output126;
$arguments124['base'] = NULL;
$renderChildrenClosure127 = function() {return NULL;};
$array117['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments124, $renderChildrenClosure127, $renderingContext);
$arguments116['arguments'] = $array117;
$arguments116['id'] = NULL;
$arguments116['default'] = NULL;
$arguments116['htmlEscape'] = NULL;
$arguments116['extensionName'] = NULL;
$renderChildrenClosure128 = function() {return NULL;};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments116, $renderChildrenClosure128, $renderingContext);

$output115 .= '
							';
return $output115;
};

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output96 .= '
						';
return $output96;
};
$arguments37['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output129 = '';

$output129 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments130 = array();
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
								Nest view helpers three times:
								1. Feed pid as argument to be.pagePath
								2. Use this as argument for \'forPage\' translate
								3. Use this as argument for \'logForNonPageRelatedActionsOrRootLevelOrPage\' translate
							';
};

$output129 .= '';

$output129 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments132 = array();
$arguments132['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array133 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments134 = array();
$arguments134['key'] = 'forPage';
// Rendering Boolean node
$arguments134['htmlEscape'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Array
$array135 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper
$arguments136 = array();
$arguments136['pid'] = $currentVariableContainer->getOrNull('pid');
$arguments136['titleLimit'] = 20;
$renderChildrenClosure137 = function() {return NULL;};
$array135['0'] = TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);
$array135['1'] = $currentVariableContainer->getOrNull('pid');
$arguments134['arguments'] = $array135;
$arguments134['id'] = NULL;
$arguments134['default'] = NULL;
$arguments134['extensionName'] = NULL;
$renderChildrenClosure138 = function() {return NULL;};
$array133['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments134, $renderChildrenClosure138, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments139 = array();
$output140 = '';

$output140 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output140 .= ' ';

$output140 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments139['format'] = $output140;
$output141 = '';

$output141 .= '@';

$output141 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'startTimestamp', $renderingContext);
$arguments139['date'] = $output141;
$arguments139['base'] = NULL;
$renderChildrenClosure142 = function() {return NULL;};
$array133['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments139, $renderChildrenClosure142, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments143 = array();
$output144 = '';

$output144 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output144 .= ' ';

$output144 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments143['format'] = $output144;
$output145 = '';

$output145 .= '@';

$output145 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'endTimestamp', $renderingContext);
$arguments143['date'] = $output145;
$arguments143['base'] = NULL;
$renderChildrenClosure146 = function() {return NULL;};
$array133['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments143, $renderChildrenClosure146, $renderingContext);
$arguments132['arguments'] = $array133;
$arguments132['id'] = NULL;
$arguments132['default'] = NULL;
$arguments132['htmlEscape'] = NULL;
$arguments132['extensionName'] = NULL;
$renderChildrenClosure147 = function() {return NULL;};

$output129 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments132, $renderChildrenClosure147, $renderingContext);

$output129 .= '
						';
return $output129;
};

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
				';
return $output36;
};

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments148 = array();
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output150 = '';

$output150 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments151 = array();
$arguments151['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array152 = array();
$array152['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments153 = array();
$output154 = '';

$output154 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output154 .= ' ';

$output154 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments153['format'] = $output154;
$output155 = '';

$output155 .= '@';

$output155 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'startTimestamp', $renderingContext);
$arguments153['date'] = $output155;
$arguments153['base'] = NULL;
$renderChildrenClosure156 = function() {return NULL;};
$array152['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments153, $renderChildrenClosure156, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments157 = array();
$output158 = '';

$output158 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output158 .= ' ';

$output158 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments157['format'] = $output158;
$output159 = '';

$output159 .= '@';

$output159 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'endTimestamp', $renderingContext);
$arguments157['date'] = $output159;
$arguments157['base'] = NULL;
$renderChildrenClosure160 = function() {return NULL;};
$array152['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments157, $renderChildrenClosure160, $renderingContext);
$arguments151['arguments'] = $array152;
$arguments151['id'] = NULL;
$arguments151['default'] = NULL;
$arguments151['htmlEscape'] = NULL;
$arguments151['extensionName'] = NULL;
$renderChildrenClosure161 = function() {return NULL;};

$output150 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments151, $renderChildrenClosure161, $renderingContext);

$output150 .= '
				';
return $output150;
};

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output33 .= '
			';
return $output33;
};
$arguments31['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output162 = '';

$output162 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments163 = array();
// Rendering Boolean node
$arguments163['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', $currentVariableContainer->getOrNull('pid'), 1);
$arguments163['then'] = NULL;
$arguments163['else'] = NULL;
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output165 = '';

$output165 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments166 = array();
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output168 = '';

$output168 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments169 = array();
// Rendering Boolean node
$arguments169['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('pid'), -1);
$arguments169['then'] = NULL;
$arguments169['else'] = NULL;
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output171 = '';

$output171 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments172 = array();
$arguments172['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array173 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments174 = array();
$arguments174['key'] = 'forNonPageRelatedActions';
$arguments174['id'] = NULL;
$arguments174['default'] = NULL;
$arguments174['htmlEscape'] = NULL;
$arguments174['arguments'] = NULL;
$arguments174['extensionName'] = NULL;
$renderChildrenClosure175 = function() {return NULL;};
$array173['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments176 = array();
$output177 = '';

$output177 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output177 .= ' ';

$output177 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments176['format'] = $output177;
$output178 = '';

$output178 .= '@';

$output178 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'startTimestamp', $renderingContext);
$arguments176['date'] = $output178;
$arguments176['base'] = NULL;
$renderChildrenClosure179 = function() {return NULL;};
$array173['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments176, $renderChildrenClosure179, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments180 = array();
$output181 = '';

$output181 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output181 .= ' ';

$output181 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments180['format'] = $output181;
$output182 = '';

$output182 .= '@';

$output182 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'endTimestamp', $renderingContext);
$arguments180['date'] = $output182;
$arguments180['base'] = NULL;
$renderChildrenClosure183 = function() {return NULL;};
$array173['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments180, $renderChildrenClosure183, $renderingContext);
$arguments172['arguments'] = $array173;
$arguments172['id'] = NULL;
$arguments172['default'] = NULL;
$arguments172['htmlEscape'] = NULL;
$arguments172['extensionName'] = NULL;
$renderChildrenClosure184 = function() {return NULL;};

$output171 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments172, $renderChildrenClosure184, $renderingContext);

$output171 .= '
							';
return $output171;
};

$output168 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output168 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments185 = array();
// Rendering Boolean node
$arguments185['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('pid'), 0);
$arguments185['then'] = NULL;
$arguments185['else'] = NULL;
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output187 = '';

$output187 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments188 = array();
$arguments188['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array189 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments190 = array();
$arguments190['key'] = 'forRootLevel';
$arguments190['id'] = NULL;
$arguments190['default'] = NULL;
$arguments190['htmlEscape'] = NULL;
$arguments190['arguments'] = NULL;
$arguments190['extensionName'] = NULL;
$renderChildrenClosure191 = function() {return NULL;};
$array189['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments192 = array();
$output193 = '';

$output193 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output193 .= ' ';

$output193 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments192['format'] = $output193;
$output194 = '';

$output194 .= '@';

$output194 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'startTimestamp', $renderingContext);
$arguments192['date'] = $output194;
$arguments192['base'] = NULL;
$renderChildrenClosure195 = function() {return NULL;};
$array189['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments192, $renderChildrenClosure195, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments196 = array();
$output197 = '';

$output197 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output197 .= ' ';

$output197 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments196['format'] = $output197;
$output198 = '';

$output198 .= '@';

$output198 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'endTimestamp', $renderingContext);
$arguments196['date'] = $output198;
$arguments196['base'] = NULL;
$renderChildrenClosure199 = function() {return NULL;};
$array189['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments196, $renderChildrenClosure199, $renderingContext);
$arguments188['arguments'] = $array189;
$arguments188['id'] = NULL;
$arguments188['default'] = NULL;
$arguments188['htmlEscape'] = NULL;
$arguments188['extensionName'] = NULL;
$renderChildrenClosure200 = function() {return NULL;};

$output187 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments188, $renderChildrenClosure200, $renderingContext);

$output187 .= '
							';
return $output187;
};

$output168 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output168 .= '
						';
return $output168;
};

$output165 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output165 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments201 = array();
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output203 = '';

$output203 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments204 = array();
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
								Nest view helpers three times:
								1. Feed pid as argument to be.pagePath
								2. Use this as argument for \'forPage\' translate
								3. Use this as argument for \'logForNonPageRelatedActionsOrRootLevelOrPage\' translate
							';
};

$output203 .= '';

$output203 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments206 = array();
$arguments206['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array207 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments208 = array();
$arguments208['key'] = 'forPage';
// Rendering Boolean node
$arguments208['htmlEscape'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Array
$array209 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper
$arguments210 = array();
$arguments210['pid'] = $currentVariableContainer->getOrNull('pid');
$arguments210['titleLimit'] = 20;
$renderChildrenClosure211 = function() {return NULL;};
$array209['0'] = TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);
$array209['1'] = $currentVariableContainer->getOrNull('pid');
$arguments208['arguments'] = $array209;
$arguments208['id'] = NULL;
$arguments208['default'] = NULL;
$arguments208['extensionName'] = NULL;
$renderChildrenClosure212 = function() {return NULL;};
$array207['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments208, $renderChildrenClosure212, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments213 = array();
$output214 = '';

$output214 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output214 .= ' ';

$output214 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments213['format'] = $output214;
$output215 = '';

$output215 .= '@';

$output215 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'startTimestamp', $renderingContext);
$arguments213['date'] = $output215;
$arguments213['base'] = NULL;
$renderChildrenClosure216 = function() {return NULL;};
$array207['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments213, $renderChildrenClosure216, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments217 = array();
$output218 = '';

$output218 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output218 .= ' ';

$output218 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments217['format'] = $output218;
$output219 = '';

$output219 .= '@';

$output219 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'endTimestamp', $renderingContext);
$arguments217['date'] = $output219;
$arguments217['base'] = NULL;
$renderChildrenClosure220 = function() {return NULL;};
$array207['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments217, $renderChildrenClosure220, $renderingContext);
$arguments206['arguments'] = $array207;
$arguments206['id'] = NULL;
$arguments206['default'] = NULL;
$arguments206['htmlEscape'] = NULL;
$arguments206['extensionName'] = NULL;
$renderChildrenClosure221 = function() {return NULL;};

$output203 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments206, $renderChildrenClosure221, $renderingContext);

$output203 .= '
						';
return $output203;
};

$output165 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output165 .= '
					';
return $output165;
};
$arguments163['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output222 = '';

$output222 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments223 = array();
// Rendering Boolean node
$arguments223['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('pid'), -1);
$arguments223['then'] = NULL;
$arguments223['else'] = NULL;
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output225 = '';

$output225 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments226 = array();
$arguments226['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array227 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments228 = array();
$arguments228['key'] = 'forNonPageRelatedActions';
$arguments228['id'] = NULL;
$arguments228['default'] = NULL;
$arguments228['htmlEscape'] = NULL;
$arguments228['arguments'] = NULL;
$arguments228['extensionName'] = NULL;
$renderChildrenClosure229 = function() {return NULL;};
$array227['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments230 = array();
$output231 = '';

$output231 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output231 .= ' ';

$output231 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments230['format'] = $output231;
$output232 = '';

$output232 .= '@';

$output232 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'startTimestamp', $renderingContext);
$arguments230['date'] = $output232;
$arguments230['base'] = NULL;
$renderChildrenClosure233 = function() {return NULL;};
$array227['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments230, $renderChildrenClosure233, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments234 = array();
$output235 = '';

$output235 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output235 .= ' ';

$output235 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments234['format'] = $output235;
$output236 = '';

$output236 .= '@';

$output236 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'endTimestamp', $renderingContext);
$arguments234['date'] = $output236;
$arguments234['base'] = NULL;
$renderChildrenClosure237 = function() {return NULL;};
$array227['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments234, $renderChildrenClosure237, $renderingContext);
$arguments226['arguments'] = $array227;
$arguments226['id'] = NULL;
$arguments226['default'] = NULL;
$arguments226['htmlEscape'] = NULL;
$arguments226['extensionName'] = NULL;
$renderChildrenClosure238 = function() {return NULL;};

$output225 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments226, $renderChildrenClosure238, $renderingContext);

$output225 .= '
							';
return $output225;
};

$output222 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output222 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments239 = array();
// Rendering Boolean node
$arguments239['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('pid'), 0);
$arguments239['then'] = NULL;
$arguments239['else'] = NULL;
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output241 = '';

$output241 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments242 = array();
$arguments242['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array243 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments244 = array();
$arguments244['key'] = 'forRootLevel';
$arguments244['id'] = NULL;
$arguments244['default'] = NULL;
$arguments244['htmlEscape'] = NULL;
$arguments244['arguments'] = NULL;
$arguments244['extensionName'] = NULL;
$renderChildrenClosure245 = function() {return NULL;};
$array243['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments246 = array();
$output247 = '';

$output247 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output247 .= ' ';

$output247 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments246['format'] = $output247;
$output248 = '';

$output248 .= '@';

$output248 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'startTimestamp', $renderingContext);
$arguments246['date'] = $output248;
$arguments246['base'] = NULL;
$renderChildrenClosure249 = function() {return NULL;};
$array243['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments246, $renderChildrenClosure249, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments250 = array();
$output251 = '';

$output251 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output251 .= ' ';

$output251 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments250['format'] = $output251;
$output252 = '';

$output252 .= '@';

$output252 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'endTimestamp', $renderingContext);
$arguments250['date'] = $output252;
$arguments250['base'] = NULL;
$renderChildrenClosure253 = function() {return NULL;};
$array243['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments250, $renderChildrenClosure253, $renderingContext);
$arguments242['arguments'] = $array243;
$arguments242['id'] = NULL;
$arguments242['default'] = NULL;
$arguments242['htmlEscape'] = NULL;
$arguments242['extensionName'] = NULL;
$renderChildrenClosure254 = function() {return NULL;};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments242, $renderChildrenClosure254, $renderingContext);

$output241 .= '
							';
return $output241;
};

$output222 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output222 .= '
						';
return $output222;
};
$arguments163['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output255 = '';

$output255 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments256 = array();
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
								Nest view helpers three times:
								1. Feed pid as argument to be.pagePath
								2. Use this as argument for \'forPage\' translate
								3. Use this as argument for \'logForNonPageRelatedActionsOrRootLevelOrPage\' translate
							';
};

$output255 .= '';

$output255 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments258 = array();
$arguments258['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array259 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments260 = array();
$arguments260['key'] = 'forPage';
// Rendering Boolean node
$arguments260['htmlEscape'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Array
$array261 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper
$arguments262 = array();
$arguments262['pid'] = $currentVariableContainer->getOrNull('pid');
$arguments262['titleLimit'] = 20;
$renderChildrenClosure263 = function() {return NULL;};
$array261['0'] = TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext);
$array261['1'] = $currentVariableContainer->getOrNull('pid');
$arguments260['arguments'] = $array261;
$arguments260['id'] = NULL;
$arguments260['default'] = NULL;
$arguments260['extensionName'] = NULL;
$renderChildrenClosure264 = function() {return NULL;};
$array259['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments260, $renderChildrenClosure264, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments265 = array();
$output266 = '';

$output266 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output266 .= ' ';

$output266 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments265['format'] = $output266;
$output267 = '';

$output267 .= '@';

$output267 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'startTimestamp', $renderingContext);
$arguments265['date'] = $output267;
$arguments265['base'] = NULL;
$renderChildrenClosure268 = function() {return NULL;};
$array259['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments265, $renderChildrenClosure268, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments269 = array();
$output270 = '';

$output270 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output270 .= ' ';

$output270 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments269['format'] = $output270;
$output271 = '';

$output271 .= '@';

$output271 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'endTimestamp', $renderingContext);
$arguments269['date'] = $output271;
$arguments269['base'] = NULL;
$renderChildrenClosure272 = function() {return NULL;};
$array259['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments269, $renderChildrenClosure272, $renderingContext);
$arguments258['arguments'] = $array259;
$arguments258['id'] = NULL;
$arguments258['default'] = NULL;
$arguments258['htmlEscape'] = NULL;
$arguments258['extensionName'] = NULL;
$renderChildrenClosure273 = function() {return NULL;};

$output255 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments258, $renderChildrenClosure273, $renderingContext);

$output255 .= '
						';
return $output255;
};

$output162 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output162 .= '
				';
return $output162;
};
$arguments31['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output274 = '';

$output274 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments275 = array();
$arguments275['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array276 = array();
$array276['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments277 = array();
$output278 = '';

$output278 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output278 .= ' ';

$output278 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments277['format'] = $output278;
$output279 = '';

$output279 .= '@';

$output279 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'startTimestamp', $renderingContext);
$arguments277['date'] = $output279;
$arguments277['base'] = NULL;
$renderChildrenClosure280 = function() {return NULL;};
$array276['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments277, $renderChildrenClosure280, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments281 = array();
$output282 = '';

$output282 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);

$output282 .= ' ';

$output282 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'timeFormat', $renderingContext);
$arguments281['format'] = $output282;
$output283 = '';

$output283 .= '@';

$output283 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'endTimestamp', $renderingContext);
$arguments281['date'] = $output283;
$arguments281['base'] = NULL;
$renderChildrenClosure284 = function() {return NULL;};
$array276['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments281, $renderChildrenClosure284, $renderingContext);
$arguments275['arguments'] = $array276;
$arguments275['id'] = NULL;
$arguments275['default'] = NULL;
$arguments275['htmlEscape'] = NULL;
$arguments275['extensionName'] = NULL;
$renderChildrenClosure285 = function() {return NULL;};

$output274 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments275, $renderChildrenClosure285, $renderingContext);

$output274 .= '
				';
return $output274;
};

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
		</h2>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments286 = array();
$arguments286['each'] = $currentVariableContainer->getOrNull('pidEntry');
$arguments286['as'] = 'day';
$arguments286['key'] = 'dayTimestamp';
$arguments286['reverse'] = false;
$arguments286['iteration'] = NULL;
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output288 = '';

$output288 .= '
			<h3>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments289 = array();
$arguments289['format'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'dateFormat', $renderingContext);
$arguments289['date'] = NULL;
$arguments289['base'] = NULL;
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output291 = '';

$output291 .= '@';

$output291 .= $currentVariableContainer->getOrNull('dayTimestamp');
return $output291;
};

$output288 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext);

$output288 .= '
			</h3>

			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th valign="top">
							<strong>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments292 = array();
$arguments292['key'] = 'chLog_l_error';
$arguments292['id'] = NULL;
$arguments292['default'] = NULL;
$arguments292['htmlEscape'] = NULL;
$arguments292['arguments'] = NULL;
$arguments292['extensionName'] = NULL;
$renderChildrenClosure293 = function() {return NULL;};

$output288 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);

$output288 .= '
							</strong>
						</th>
						<th><span style="width: 10px; height: 1px; display: inline-block"></span></th>
						<th valign="top">
							<strong>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments294 = array();
$arguments294['key'] = 'chLog_l_time';
$arguments294['id'] = NULL;
$arguments294['default'] = NULL;
$arguments294['htmlEscape'] = NULL;
$arguments294['arguments'] = NULL;
$arguments294['extensionName'] = NULL;
$renderChildrenClosure295 = function() {return NULL;};

$output288 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);

$output288 .= '
							</strong>
						</th>
						<th><span style="width: 10px; height: 1px; display: inline-block"></span></th>
						<th valign="top" colspan="2">
							<strong>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments296 = array();
$arguments296['key'] = 'chLog_l_user';
$arguments296['id'] = NULL;
$arguments296['default'] = NULL;
$arguments296['htmlEscape'] = NULL;
$arguments296['arguments'] = NULL;
$arguments296['extensionName'] = NULL;
$renderChildrenClosure297 = function() {return NULL;};

$output288 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output288 .= '
							</strong>
						</th>
						<th><span style="width: 10px; height: 1px; display: inline-block"></span></th>
						<th valign="top">
							<strong>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments298 = array();
// Rendering Boolean node
$arguments298['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'isInPageContext', $renderingContext));
$arguments298['then'] = NULL;
$arguments298['else'] = NULL;
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output300 = '';

$output300 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments301 = array();
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output303 = '';

$output303 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments304 = array();
$arguments304['key'] = 'chLog_l_table';
$arguments304['id'] = NULL;
$arguments304['default'] = NULL;
$arguments304['htmlEscape'] = NULL;
$arguments304['arguments'] = NULL;
$arguments304['extensionName'] = NULL;
$renderChildrenClosure305 = function() {return NULL;};

$output303 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext);

$output303 .= '
									';
return $output303;
};

$output300 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext);

$output300 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments306 = array();
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output308 = '';

$output308 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments309 = array();
$arguments309['key'] = 'chLog_l_types';
$arguments309['id'] = NULL;
$arguments309['default'] = NULL;
$arguments309['htmlEscape'] = NULL;
$arguments309['arguments'] = NULL;
$arguments309['extensionName'] = NULL;
$renderChildrenClosure310 = function() {return NULL;};

$output308 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output308 .= '
									';
return $output308;
};

$output300 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output300 .= '
								';
return $output300;
};
$arguments298['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output311 = '';

$output311 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments312 = array();
$arguments312['key'] = 'chLog_l_table';
$arguments312['id'] = NULL;
$arguments312['default'] = NULL;
$arguments312['htmlEscape'] = NULL;
$arguments312['arguments'] = NULL;
$arguments312['extensionName'] = NULL;
$renderChildrenClosure313 = function() {return NULL;};

$output311 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext);

$output311 .= '
									';
return $output311;
};
$arguments298['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output314 = '';

$output314 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments315 = array();
$arguments315['key'] = 'chLog_l_types';
$arguments315['id'] = NULL;
$arguments315['default'] = NULL;
$arguments315['htmlEscape'] = NULL;
$arguments315['arguments'] = NULL;
$arguments315['extensionName'] = NULL;
$renderChildrenClosure316 = function() {return NULL;};

$output314 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);

$output314 .= '
									';
return $output314;
};

$output288 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext);

$output288 .= '
							</strong>
						</th>
						<th><span style="width: 10px; height: 1px; display: inline-block"></span></th>
						<th valign="top">
							<strong>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments317 = array();
$arguments317['key'] = 'chLog_l_action';
$arguments317['id'] = NULL;
$arguments317['default'] = NULL;
$arguments317['htmlEscape'] = NULL;
$arguments317['arguments'] = NULL;
$arguments317['extensionName'] = NULL;
$renderChildrenClosure318 = function() {return NULL;};

$output288 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output288 .= '
							</strong>
						</th>
						<th><span style="width: 10px; height: 1px; display: inline-block"></span></th>
						<th valign="top">
							<strong>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments319 = array();
$arguments319['key'] = 'chLog_l_details';
$arguments319['id'] = NULL;
$arguments319['default'] = NULL;
$arguments319['htmlEscape'] = NULL;
$arguments319['arguments'] = NULL;
$arguments319['extensionName'] = NULL;
$renderChildrenClosure320 = function() {return NULL;};

$output288 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext);

$output288 .= '
							</strong>
						</th>
						<th><span style="width: 10px; height: 1px; display: inline-block"></span></th>
					</tr>
				</thead>
				<tbody>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments321 = array();
$arguments321['each'] = $currentVariableContainer->getOrNull('day');
$arguments321['as'] = 'logItem';
$arguments321['key'] = '';
$arguments321['reverse'] = false;
$arguments321['iteration'] = NULL;
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output323 = '';

$output323 .= '
						<tr>
							<td valign="top">
								';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\ErrorIconViewHelper
$arguments324 = array();
$arguments324['errorNumber'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'error', $renderingContext);
$renderChildrenClosure325 = function() {return NULL;};

$output323 .= TYPO3\CMS\Belog\ViewHelpers\ErrorIconViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);

$output323 .= '
							</td>
							<td><span style="width: 10px; height: 1px; display: inline-block"></span></td>

							<td valign="top">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments326 = array();
$arguments326['format'] = 'H:i:s';
$arguments326['date'] = NULL;
$arguments326['base'] = NULL;
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output328 = '';

$output328 .= '@';

$output328 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'tstamp', $renderingContext);
return $output328;
};

$output323 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext);

$output323 .= '
							</td>
							<td><span style="width: 10px; height: 1px; display: inline-block"></span></td>

							<td class="col-icon" valign="top">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments329 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$arguments330 = array();
$arguments330['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'backendUserUid', $renderingContext);
$renderChildrenClosure331 = function() {return NULL;};
$arguments329['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments330, $renderChildrenClosure331, $renderingContext));
$arguments329['then'] = NULL;
$arguments329['else'] = NULL;
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output333 = '';

$output333 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$arguments334 = array();
$arguments334['backendUser'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'backendUserUid', $renderingContext);
// Rendering Boolean node
$arguments334['showIcon'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments334['size'] = 32;
$renderChildrenClosure335 = function() {return NULL;};

$output333 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext);

$output333 .= '
								';
return $output333;
};

$output323 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments329, $renderChildrenClosure332, $renderingContext);

$output323 .= '
							</td>
							<td valign="top">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments336 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$arguments337 = array();
$arguments337['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'backendUserUid', $renderingContext);
$renderChildrenClosure338 = function() {return NULL;};
$arguments336['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext));
$arguments336['then'] = NULL;
$arguments336['else'] = NULL;
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output340 = '';

$output340 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments341 = array();
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$arguments343 = array();
$arguments343['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'backendUserUid', $renderingContext);
$renderChildrenClosure344 = function() {return NULL;};
return TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments343, $renderChildrenClosure344, $renderingContext);
};

$output340 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);

$output340 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments345 = array();
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output347 = '';

$output347 .= '[';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments348 = array();
$arguments348['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'backendUserUid', $renderingContext);
$arguments348['keepQuotes'] = false;
$arguments348['encoding'] = NULL;
$arguments348['doubleEncode'] = true;
$renderChildrenClosure349 = function() {return NULL;};
$value350 = ($arguments348['value'] !== NULL ? $arguments348['value'] : $renderChildrenClosure349());

$output347 .= (!is_string($value350) ? $value350 : htmlspecialchars($value350, ($arguments348['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments348['encoding'] !== NULL ? $arguments348['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments348['doubleEncode']));

$output347 .= ']';
return $output347;
};

$output340 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext);

$output340 .= '
								';
return $output340;
};
$arguments336['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$arguments351 = array();
$arguments351['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'backendUserUid', $renderingContext);
$renderChildrenClosure352 = function() {return NULL;};
return TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);
};
$arguments336['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output353 = '';

$output353 .= '[';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments354 = array();
$arguments354['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'backendUserUid', $renderingContext);
$arguments354['keepQuotes'] = false;
$arguments354['encoding'] = NULL;
$arguments354['doubleEncode'] = true;
$renderChildrenClosure355 = function() {return NULL;};
$value356 = ($arguments354['value'] !== NULL ? $arguments354['value'] : $renderChildrenClosure355());

$output353 .= (!is_string($value356) ? $value356 : htmlspecialchars($value356, ($arguments354['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments354['encoding'] !== NULL ? $arguments354['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments354['doubleEncode']));

$output353 .= ']';
return $output353;
};

$output323 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments336, $renderChildrenClosure339, $renderingContext);

$output323 .= '<br>
								<span class="text-muted">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments357 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper
$arguments358 = array();
$arguments358['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'workspaceUid', $renderingContext);
$renderChildrenClosure359 = function() {return NULL;};
$arguments357['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext));
$arguments357['then'] = NULL;
$arguments357['else'] = NULL;
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output361 = '';

$output361 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments362 = array();
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper
$arguments364 = array();
$arguments364['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'workspaceUid', $renderingContext);
$renderChildrenClosure365 = function() {return NULL;};
return TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext);
};

$output361 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext);

$output361 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments366 = array();
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output368 = '';

$output368 .= '[';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments369 = array();
$arguments369['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'workspaceUid', $renderingContext);
$arguments369['keepQuotes'] = false;
$arguments369['encoding'] = NULL;
$arguments369['doubleEncode'] = true;
$renderChildrenClosure370 = function() {return NULL;};
$value371 = ($arguments369['value'] !== NULL ? $arguments369['value'] : $renderChildrenClosure370());

$output368 .= (!is_string($value371) ? $value371 : htmlspecialchars($value371, ($arguments369['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments369['encoding'] !== NULL ? $arguments369['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments369['doubleEncode']));

$output368 .= ']';
return $output368;
};

$output361 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output361 .= '
									';
return $output361;
};
$arguments357['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper
$arguments372 = array();
$arguments372['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'workspaceUid', $renderingContext);
$renderChildrenClosure373 = function() {return NULL;};
return TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper::renderStatic($arguments372, $renderChildrenClosure373, $renderingContext);
};
$arguments357['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output374 = '';

$output374 .= '[';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments375 = array();
$arguments375['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'workspaceUid', $renderingContext);
$arguments375['keepQuotes'] = false;
$arguments375['encoding'] = NULL;
$arguments375['doubleEncode'] = true;
$renderChildrenClosure376 = function() {return NULL;};
$value377 = ($arguments375['value'] !== NULL ? $arguments375['value'] : $renderChildrenClosure376());

$output374 .= (!is_string($value377) ? $value377 : htmlspecialchars($value377, ($arguments375['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments375['encoding'] !== NULL ? $arguments375['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments375['doubleEncode']));

$output374 .= ']';
return $output374;
};

$output323 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments357, $renderChildrenClosure360, $renderingContext);

$output323 .= '
								</span>
							</td>
							<td><span style="width: 10px; height: 1px; display: inline-block"></span></td>

							<td valign="top">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments378 = array();
// Rendering Boolean node
$arguments378['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('constraint'), 'isInPageContext', $renderingContext));
$arguments378['then'] = NULL;
$arguments378['else'] = NULL;
$renderChildrenClosure379 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output380 = '';

$output380 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments381 = array();
$renderChildrenClosure382 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output383 = '';

$output383 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments384 = array();
$arguments384['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'tableName', $renderingContext);
$arguments384['keepQuotes'] = false;
$arguments384['encoding'] = NULL;
$arguments384['doubleEncode'] = true;
$renderChildrenClosure385 = function() {return NULL;};
$value386 = ($arguments384['value'] !== NULL ? $arguments384['value'] : $renderChildrenClosure385());

$output383 .= (!is_string($value386) ? $value386 : htmlspecialchars($value386, ($arguments384['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments384['encoding'] !== NULL ? $arguments384['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments384['doubleEncode']));

$output383 .= '
									';
return $output383;
};

$output380 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments381, $renderChildrenClosure382, $renderingContext);

$output380 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments387 = array();
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output389 = '';

$output389 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments390 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments391 = array();
$output392 = '';

$output392 .= 'type_';

$output392 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'type', $renderingContext);
$arguments391['key'] = $output392;
$arguments391['id'] = NULL;
$arguments391['default'] = NULL;
$arguments391['htmlEscape'] = NULL;
$arguments391['arguments'] = NULL;
$arguments391['extensionName'] = NULL;
$renderChildrenClosure393 = function() {return NULL;};
$arguments390['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments391, $renderChildrenClosure393, $renderingContext));
$arguments390['then'] = NULL;
$arguments390['else'] = NULL;
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output395 = '';

$output395 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments396 = array();
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output398 = '';

$output398 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments399 = array();
$output400 = '';

$output400 .= 'type_';

$output400 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'type', $renderingContext);
$arguments399['key'] = $output400;
$arguments399['id'] = NULL;
$arguments399['default'] = NULL;
$arguments399['htmlEscape'] = NULL;
$arguments399['arguments'] = NULL;
$arguments399['extensionName'] = NULL;
$renderChildrenClosure401 = function() {return NULL;};

$output398 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments399, $renderChildrenClosure401, $renderingContext);

$output398 .= '
											';
return $output398;
};

$output395 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output395 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments402 = array();
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output404 = '';

$output404 .= '
												[';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments405 = array();
$arguments405['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'type', $renderingContext);
$arguments405['keepQuotes'] = false;
$arguments405['encoding'] = NULL;
$arguments405['doubleEncode'] = true;
$renderChildrenClosure406 = function() {return NULL;};
$value407 = ($arguments405['value'] !== NULL ? $arguments405['value'] : $renderChildrenClosure406());

$output404 .= (!is_string($value407) ? $value407 : htmlspecialchars($value407, ($arguments405['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments405['encoding'] !== NULL ? $arguments405['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments405['doubleEncode']));

$output404 .= ']
											';
return $output404;
};

$output395 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext);

$output395 .= '
										';
return $output395;
};
$arguments390['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output408 = '';

$output408 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments409 = array();
$output410 = '';

$output410 .= 'type_';

$output410 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'type', $renderingContext);
$arguments409['key'] = $output410;
$arguments409['id'] = NULL;
$arguments409['default'] = NULL;
$arguments409['htmlEscape'] = NULL;
$arguments409['arguments'] = NULL;
$arguments409['extensionName'] = NULL;
$renderChildrenClosure411 = function() {return NULL;};

$output408 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments409, $renderChildrenClosure411, $renderingContext);

$output408 .= '
											';
return $output408;
};
$arguments390['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output412 = '';

$output412 .= '
												[';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments413 = array();
$arguments413['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'type', $renderingContext);
$arguments413['keepQuotes'] = false;
$arguments413['encoding'] = NULL;
$arguments413['doubleEncode'] = true;
$renderChildrenClosure414 = function() {return NULL;};
$value415 = ($arguments413['value'] !== NULL ? $arguments413['value'] : $renderChildrenClosure414());

$output412 .= (!is_string($value415) ? $value415 : htmlspecialchars($value415, ($arguments413['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments413['encoding'] !== NULL ? $arguments413['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments413['doubleEncode']));

$output412 .= ']
											';
return $output412;
};

$output389 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments390, $renderChildrenClosure394, $renderingContext);

$output389 .= '
									';
return $output389;
};

$output380 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments387, $renderChildrenClosure388, $renderingContext);

$output380 .= '
								';
return $output380;
};
$arguments378['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output416 = '';

$output416 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments417 = array();
$arguments417['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'tableName', $renderingContext);
$arguments417['keepQuotes'] = false;
$arguments417['encoding'] = NULL;
$arguments417['doubleEncode'] = true;
$renderChildrenClosure418 = function() {return NULL;};
$value419 = ($arguments417['value'] !== NULL ? $arguments417['value'] : $renderChildrenClosure418());

$output416 .= (!is_string($value419) ? $value419 : htmlspecialchars($value419, ($arguments417['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments417['encoding'] !== NULL ? $arguments417['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments417['doubleEncode']));

$output416 .= '
									';
return $output416;
};
$arguments378['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output420 = '';

$output420 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments421 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments422 = array();
$output423 = '';

$output423 .= 'type_';

$output423 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'type', $renderingContext);
$arguments422['key'] = $output423;
$arguments422['id'] = NULL;
$arguments422['default'] = NULL;
$arguments422['htmlEscape'] = NULL;
$arguments422['arguments'] = NULL;
$arguments422['extensionName'] = NULL;
$renderChildrenClosure424 = function() {return NULL;};
$arguments421['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments422, $renderChildrenClosure424, $renderingContext));
$arguments421['then'] = NULL;
$arguments421['else'] = NULL;
$renderChildrenClosure425 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output426 = '';

$output426 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments427 = array();
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output429 = '';

$output429 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments430 = array();
$output431 = '';

$output431 .= 'type_';

$output431 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'type', $renderingContext);
$arguments430['key'] = $output431;
$arguments430['id'] = NULL;
$arguments430['default'] = NULL;
$arguments430['htmlEscape'] = NULL;
$arguments430['arguments'] = NULL;
$arguments430['extensionName'] = NULL;
$renderChildrenClosure432 = function() {return NULL;};

$output429 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments430, $renderChildrenClosure432, $renderingContext);

$output429 .= '
											';
return $output429;
};

$output426 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments427, $renderChildrenClosure428, $renderingContext);

$output426 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments433 = array();
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output435 = '';

$output435 .= '
												[';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments436 = array();
$arguments436['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'type', $renderingContext);
$arguments436['keepQuotes'] = false;
$arguments436['encoding'] = NULL;
$arguments436['doubleEncode'] = true;
$renderChildrenClosure437 = function() {return NULL;};
$value438 = ($arguments436['value'] !== NULL ? $arguments436['value'] : $renderChildrenClosure437());

$output435 .= (!is_string($value438) ? $value438 : htmlspecialchars($value438, ($arguments436['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments436['encoding'] !== NULL ? $arguments436['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments436['doubleEncode']));

$output435 .= ']
											';
return $output435;
};

$output426 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments433, $renderChildrenClosure434, $renderingContext);

$output426 .= '
										';
return $output426;
};
$arguments421['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output439 = '';

$output439 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments440 = array();
$output441 = '';

$output441 .= 'type_';

$output441 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'type', $renderingContext);
$arguments440['key'] = $output441;
$arguments440['id'] = NULL;
$arguments440['default'] = NULL;
$arguments440['htmlEscape'] = NULL;
$arguments440['arguments'] = NULL;
$arguments440['extensionName'] = NULL;
$renderChildrenClosure442 = function() {return NULL;};

$output439 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments440, $renderChildrenClosure442, $renderingContext);

$output439 .= '
											';
return $output439;
};
$arguments421['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output443 = '';

$output443 .= '
												[';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments444 = array();
$arguments444['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'type', $renderingContext);
$arguments444['keepQuotes'] = false;
$arguments444['encoding'] = NULL;
$arguments444['doubleEncode'] = true;
$renderChildrenClosure445 = function() {return NULL;};
$value446 = ($arguments444['value'] !== NULL ? $arguments444['value'] : $renderChildrenClosure445());

$output443 .= (!is_string($value446) ? $value446 : htmlspecialchars($value446, ($arguments444['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments444['encoding'] !== NULL ? $arguments444['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments444['doubleEncode']));

$output443 .= ']
											';
return $output443;
};

$output420 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments421, $renderChildrenClosure425, $renderingContext);

$output420 .= '
									';
return $output420;
};

$output323 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments378, $renderChildrenClosure379, $renderingContext);

$output323 .= '
							</td>
							<td><span style="width: 10px; height: 1px; display: inline-block"></span></td>

							<td valign="top">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments447 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments448 = array();
$output449 = '';

$output449 .= 'action_';

$output449 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'type', $renderingContext);

$output449 .= '_';

$output449 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'action', $renderingContext);
$arguments448['key'] = $output449;
$arguments448['id'] = NULL;
$arguments448['default'] = NULL;
$arguments448['htmlEscape'] = NULL;
$arguments448['arguments'] = NULL;
$arguments448['extensionName'] = NULL;
$renderChildrenClosure450 = function() {return NULL;};
$arguments447['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments448, $renderChildrenClosure450, $renderingContext));
$arguments447['then'] = NULL;
$arguments447['else'] = NULL;
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output452 = '';

$output452 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments453 = array();
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output455 = '';

$output455 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments456 = array();
$output457 = '';

$output457 .= 'action_';

$output457 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'type', $renderingContext);

$output457 .= '_';

$output457 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'action', $renderingContext);
$arguments456['key'] = $output457;
// Rendering Boolean node
$arguments456['htmlEscape'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
$arguments456['id'] = NULL;
$arguments456['default'] = NULL;
$arguments456['arguments'] = NULL;
$arguments456['extensionName'] = NULL;
$renderChildrenClosure458 = function() {return NULL;};

$output455 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments456, $renderChildrenClosure458, $renderingContext);

$output455 .= '
									';
return $output455;
};

$output452 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext);

$output452 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments459 = array();
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output461 = '';

$output461 .= '
										[';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments462 = array();
$arguments462['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'action', $renderingContext);
$arguments462['keepQuotes'] = false;
$arguments462['encoding'] = NULL;
$arguments462['doubleEncode'] = true;
$renderChildrenClosure463 = function() {return NULL;};
$value464 = ($arguments462['value'] !== NULL ? $arguments462['value'] : $renderChildrenClosure463());

$output461 .= (!is_string($value464) ? $value464 : htmlspecialchars($value464, ($arguments462['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments462['encoding'] !== NULL ? $arguments462['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments462['doubleEncode']));

$output461 .= ']
									';
return $output461;
};

$output452 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments459, $renderChildrenClosure460, $renderingContext);

$output452 .= '
								';
return $output452;
};
$arguments447['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output465 = '';

$output465 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments466 = array();
$output467 = '';

$output467 .= 'action_';

$output467 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'type', $renderingContext);

$output467 .= '_';

$output467 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'action', $renderingContext);
$arguments466['key'] = $output467;
// Rendering Boolean node
$arguments466['htmlEscape'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
$arguments466['id'] = NULL;
$arguments466['default'] = NULL;
$arguments466['arguments'] = NULL;
$arguments466['extensionName'] = NULL;
$renderChildrenClosure468 = function() {return NULL;};

$output465 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments466, $renderChildrenClosure468, $renderingContext);

$output465 .= '
									';
return $output465;
};
$arguments447['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output469 = '';

$output469 .= '
										[';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments470 = array();
$arguments470['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'action', $renderingContext);
$arguments470['keepQuotes'] = false;
$arguments470['encoding'] = NULL;
$arguments470['doubleEncode'] = true;
$renderChildrenClosure471 = function() {return NULL;};
$value472 = ($arguments470['value'] !== NULL ? $arguments470['value'] : $renderChildrenClosure471());

$output469 .= (!is_string($value472) ? $value472 : htmlspecialchars($value472, ($arguments470['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments470['encoding'] !== NULL ? $arguments470['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments470['doubleEncode']));

$output469 .= ']
									';
return $output469;
};

$output323 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments447, $renderChildrenClosure451, $renderingContext);

$output323 .= '
							</td>
							<td><span style="width: 10px; height: 1px; display: inline-block"></span></td>

							<td valign="top">
								';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\FormatDetailsViewHelper
$arguments473 = array();
$arguments473['logEntry'] = $currentVariableContainer->getOrNull('logItem');
$renderChildrenClosure474 = function() {return NULL;};

$output323 .= TYPO3\CMS\Belog\ViewHelpers\FormatDetailsViewHelper::renderStatic($arguments473, $renderChildrenClosure474, $renderingContext);

$output323 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\HistoryEntryViewHelper
$arguments475 = array();
$arguments475['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'uid', $renderingContext);
$renderChildrenClosure476 = function() {return NULL;};

$output323 .= TYPO3\CMS\Belog\ViewHelpers\HistoryEntryViewHelper::renderStatic($arguments475, $renderChildrenClosure476, $renderingContext);

$output323 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments477 = array();
// Rendering Boolean node
$arguments477['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'detailsNumber', $renderingContext), 0);
$arguments477['then'] = NULL;
$arguments477['else'] = NULL;
$renderChildrenClosure478 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output479 = '';

$output479 .= '
									(msg#';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments480 = array();
$arguments480['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'type', $renderingContext);
$arguments480['keepQuotes'] = false;
$arguments480['encoding'] = NULL;
$arguments480['doubleEncode'] = true;
$renderChildrenClosure481 = function() {return NULL;};
$value482 = ($arguments480['value'] !== NULL ? $arguments480['value'] : $renderChildrenClosure481());

$output479 .= (!is_string($value482) ? $value482 : htmlspecialchars($value482, ($arguments480['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments480['encoding'] !== NULL ? $arguments480['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments480['doubleEncode']));

$output479 .= '.';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments483 = array();
$arguments483['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'action', $renderingContext);
$arguments483['keepQuotes'] = false;
$arguments483['encoding'] = NULL;
$arguments483['doubleEncode'] = true;
$renderChildrenClosure484 = function() {return NULL;};
$value485 = ($arguments483['value'] !== NULL ? $arguments483['value'] : $renderChildrenClosure484());

$output479 .= (!is_string($value485) ? $value485 : htmlspecialchars($value485, ($arguments483['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments483['encoding'] !== NULL ? $arguments483['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments483['doubleEncode']));

$output479 .= '.';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments486 = array();
$arguments486['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('logItem'), 'detailsNumber', $renderingContext);
$arguments486['keepQuotes'] = false;
$arguments486['encoding'] = NULL;
$arguments486['doubleEncode'] = true;
$renderChildrenClosure487 = function() {return NULL;};
$value488 = ($arguments486['value'] !== NULL ? $arguments486['value'] : $renderChildrenClosure487());

$output479 .= (!is_string($value488) ? $value488 : htmlspecialchars($value488, ($arguments486['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments486['encoding'] !== NULL ? $arguments486['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments486['doubleEncode']));

$output479 .= ')
								';
return $output479;
};

$output323 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments477, $renderChildrenClosure478, $renderingContext);

$output323 .= '
							</td>
							<td><span style="width: 10px; height: 1px; display: inline-block"></span></td>
						</tr>
					';
return $output323;
};

$output288 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext);

$output288 .= '
				</tbody>
			</table>
		';
return $output288;
};

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output30 .= '
	</div>
';
return $output30;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output0 .= '
';


return $output0;
}


}
#1467129043    118506    