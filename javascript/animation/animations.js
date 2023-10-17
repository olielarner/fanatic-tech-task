/**
 * Elements with the .anim class will have the .anim-trigger class applied if
 * they are in the viewport. This is useful to trigger CSS based animations.
 *
 * @param int data-delay Apply to element to delay the animation in milliseconds.
 * @param int data-offset Optional - viewport offset in pixels.
 *
 * @package covarius
 */
import jQuery from 'jquery';
import hasScrolledPast from '../helpers/has-scrolled-past';

jQuery(function ($) {
	console.log('ANIMATIONS');
	const $elements = $('.anim');

	animate($('.anim.force')); // Load and trigger asap.

	// Wait for everything to finish loading before starting any animations.
	$(window).on('load', function () {
		// Run the animated function on load to see if
		// an element is loaded within the viewport.
		animate($elements);
	});

	// Add a scroll event listener to check if an element
	// is scrolled into view within the viewport.
	window.addEventListener('scroll', function () {
		animate($elements);
	});

	/**
	 * Check if an element is in the viewport and fire a respective animation.
	 */
	function animate($elem) {
		$elem.each(function () {
			let delay = $(this).attr('data-delay');
			let offsetAttr = $(this).attr('data-offset');
			let scrollOffset = parseInt(offsetAttr) || 0;

			// Mobile's need a natural offset.
			if (!offsetAttr && $(window).width() < 767) {
				scrollOffset = 350;
			}

			// If the viewport has scrolled past a target element,
			// then trigger the animation.
			if (hasScrolledPast($(this), scrollOffset)) {
				window.setTimeout(() => trigger($(this)), delay);
			}
		});
	}

	/**
	 * Trigger any css animations by adding the trigger class.
	 * @param $elem
	 * @returns {boolean}
	 */
	function trigger($elem) {
		if (!$elem.hasClass('anim-trigger')) {
			$elem.addClass('anim-trigger');
		}

		return true;
	}

	/**
	 * Reset any css animations by removing the trigger class.
	 * @param $elem
	 * @returns {boolean}
	 */
	// function resetTrigger($elem) {
	// 	$elem.removeClass('anim-trigger');
	// 	return true;
	// }
});
