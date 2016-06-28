<?php
class FluidCache_Standalone_template_file_InfoScreen_d5486533dcc95270273f3f4daf667337b719a7a6 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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


<p class="lead">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'msg.infoScreenIntro';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
</p>
<div class="table-responsive">
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments3 = array();
$arguments3['key'] = 'label.name';
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['htmlEscape'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$renderChildrenClosure4 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
				</th>
				<th>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments5 = array();
$arguments5['key'] = 'label.extension';
$arguments5['id'] = NULL;
$arguments5['default'] = NULL;
$arguments5['htmlEscape'] = NULL;
$arguments5['arguments'] = NULL;
$arguments5['extensionName'] = NULL;
$renderChildrenClosure6 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
				</th>
				<th colspan="2">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments7 = array();
$arguments7['key'] = 'label.description';
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
				</th>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments9 = array();
$arguments9['each'] = $currentVariableContainer->getOrNull('registeredClasses');
$arguments9['key'] = 'class';
$arguments9['as'] = 'classInfo';
$arguments9['reverse'] = false;
$arguments9['iteration'] = NULL;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
				<tr>
					<td>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Scheduler\ViewHelpers\ModuleLinkViewHelper
$arguments12 = array();
$arguments12['controller'] = 'scheduler';
$arguments12['action'] = 'add';
// Rendering Array
$array13 = array();
$array13['class'] = $currentVariableContainer->getOrNull('class');
$arguments12['arguments'] = $array13;
$renderChildrenClosure14 = function() {return NULL;};

$output11 .= TYPO3\CMS\Scheduler\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments12, $renderChildrenClosure14, $renderingContext);

$output11 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments15 = array();
$arguments15['key'] = 'LLL:EXT:lang/locallang_common.xlf:new';
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output11 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments17 = array();
$arguments17['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('classInfo'), 'title', $renderingContext);
$arguments17['keepQuotes'] = false;
$arguments17['encoding'] = NULL;
$arguments17['doubleEncode'] = true;
$renderChildrenClosure18 = function() {return NULL;};
$value19 = ($arguments17['value'] !== NULL ? $arguments17['value'] : $renderChildrenClosure18());

$output11 .= (!is_string($value19) ? $value19 : htmlspecialchars($value19, ($arguments17['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments17['encoding'] !== NULL ? $arguments17['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments17['doubleEncode']));

$output11 .= '
						</a>
					</td>
					<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments20 = array();
$arguments20['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('classInfo'), 'extension', $renderingContext);
$arguments20['keepQuotes'] = false;
$arguments20['encoding'] = NULL;
$arguments20['doubleEncode'] = true;
$renderChildrenClosure21 = function() {return NULL;};
$value22 = ($arguments20['value'] !== NULL ? $arguments20['value'] : $renderChildrenClosure21());

$output11 .= (!is_string($value22) ? $value22 : htmlspecialchars($value22, ($arguments20['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments20['encoding'] !== NULL ? $arguments20['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments20['doubleEncode']));

$output11 .= '</td>
					<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments23 = array();
$arguments23['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('classInfo'), 'description', $renderingContext);
$arguments23['keepQuotes'] = false;
$arguments23['encoding'] = NULL;
$arguments23['doubleEncode'] = true;
$renderChildrenClosure24 = function() {return NULL;};
$value25 = ($arguments23['value'] !== NULL ? $arguments23['value'] : $renderChildrenClosure24());

$output11 .= (!is_string($value25) ? $value25 : htmlspecialchars($value25, ($arguments23['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments23['encoding'] !== NULL ? $arguments23['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments23['doubleEncode']));

$output11 .= '</td>
					<td>
						<div class="btn-group" role="group">
							<span class="btn btn-default">
								<a href="';
// Rendering ViewHelper TYPO3\CMS\Scheduler\ViewHelpers\ModuleLinkViewHelper
$arguments26 = array();
$arguments26['controller'] = 'scheduler';
$arguments26['action'] = 'add';
// Rendering Array
$array27 = array();
$array27['class'] = $currentVariableContainer->getOrNull('class');
$arguments26['arguments'] = $array27;
$renderChildrenClosure28 = function() {return NULL;};

$output11 .= TYPO3\CMS\Scheduler\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments26, $renderChildrenClosure28, $renderingContext);

$output11 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments29 = array();
$arguments29['key'] = 'LLL:EXT:lang/locallang_common.xlf:new';
$arguments29['id'] = NULL;
$arguments29['default'] = NULL;
$arguments29['htmlEscape'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['extensionName'] = NULL;
$renderChildrenClosure30 = function() {return NULL;};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output11 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments31 = array();
$arguments31['identifier'] = 'actions-document-new';
$arguments31['size'] = 'small';
$arguments31['overlay'] = NULL;
$arguments31['state'] = 'default';
$arguments31['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure32 = function() {return NULL;};

$output11 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output11 .= '
								</a>
							</span>
						</div>
					</td>
				</tr>
			';
return $output11;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
		</tbody>
	</table>
</div>';


return $output0;
}


}
#1467130111    9328      