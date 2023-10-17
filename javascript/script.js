/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

import $ from 'jquery';
import HomeHero from '../theme/components/home-hero/home-hero';
import ContentCards from '../theme/components/content-cards/content-cards';
import './animation/animations';
import './components/header';

$(function () {
	$('section.home-hero').each(function () {
		new HomeHero($(this));
	});
	$('section.content-cards').each(function () {
		new ContentCards($(this));
	});
});
