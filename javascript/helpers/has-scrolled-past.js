import jQuery from 'jquery';

const $ = jQuery;

/**
 * Check if the viewport has scrolled passed an element.
 * @param $elem
 * @param scrollOffset
 * @returns {boolean}
 */
export default function hasScrolledPast($elem, scrollOffset = 0) {
	const elemPos = $elem.offset().top;

	return $(window).scrollTop() > elemPos - $(window).height() - scrollOffset;
}

/**
 * Check if the viewport has scrolled above an element.
 * @param $elem
 * @returns {boolean}
 */
export function hasScrolledUp($elem) {
	const elemPos = $elem.offset().top;

	return $(window).scrollTop() + $(window).height() < elemPos;
}
