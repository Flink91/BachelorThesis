/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * This file provides a jQuery plugin for generating 'clearable' input fields.
 * These fields show a "clear"-button when someone hovers over them and
 * they are not empty.
 * Options:
 *   * 'onClear':	Function that is called after clearing. Takes no arguments,
 *					'this' is set to the clearable input element. Defaults to an
 *					empty function.
 */
(function(factory) {
	if (typeof define === "function" && define.amd) {
		// AMD. Register as an anonymous module.
		define([ "jquery" ], factory);
	} else {
		// Browser globals, TYPO3.jQuery kept for backwards-compatibility, will be removed with CMS 8
		factory(jQuery || TYPO3.jQuery);
	}
}(function($) {
	$.fn.clearable = function(options) {

		var defaults = {
			'onClear': function() {}
		};

		// Merge defaults and given options. Given options have higher priority
		// because they are the last argument.
		var settings = $.extend({}, defaults, options);

		// Iterate over the list of inputs and make each clearable. Return
		// the list to allow chaining.
		return this.each(function() {

			// The input element to make clearable.
			var $input = $(this);

			// make sure the input field is not used twice for a clearable
			if (!$input.data('clearable')) {
				$input.data('clearable', 'loaded');

				// Wrap it with a div and add a span that is the trigger for
				// clearing.
				$input.wrap('<div class="form-control-clearable" />');
				$input.after('<button type="button" class="close" tabindex="-1" aria-hidden="true"><span class="fa fa-times" /></button>');
				$input.addClass('t3js-clearable');

				var $clearer = $input.next();

				// Register a listener the various events triggering the clearer to
				// be shown or hidden.
				var handler = function() {
					var $element = $(this);
					if ($element.next('input[type=hidden]').length) {
						$element = $element.next('input[type=hidden]');
					}
					var value = $element.val();
					var hasEmptyValue = (value.length === 0);
					if (value === "0" && $element.closest('.t3js-datetimepicker').length) {
						hasEmptyValue = true;
					}

					// only show the clearing button if the value is set, or if the value is not "0" on a datetime field
					if (!hasEmptyValue) {
						$clearer.show();
					} else {
						$clearer.hide();
					}
				};
				$input.on('keyup', handler);
				$input.on('mouseenter', handler);
				$input.on('change', handler);
				$input.on('initialize', handler);

				// The actual clearing action. Focus the input element afterwards,
				// the user probably wants to type into it after clearing.
				$clearer.click(function(e) {
					e.preventDefault();
					$input.val('').change();
					if (!$input.hasClass("t3js-datetimepicker")) {
						$input.focus();
					}
					$input.trigger('keyup');

					if ('function' === typeof(settings.onClear)) {
						settings.onClear.call($input.get());
					}
				});

				$input.trigger('initialize');
			}
		});
	};
}));
