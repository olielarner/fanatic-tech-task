import $ from 'jquery';
import Swiper from 'swiper';

import { Mousewheel, Navigation, Pagination } from 'swiper/modules';

export default class HomeHero {
	$el = $('section.home-hero');

	constructor() {
		if (this.$el.length) {
			this.init();
		}
	}

	init() {
		this.setupCarousel();
	}

	setupCarousel() {
		Swiper.use([Mousewheel, Pagination, Navigation]);

		new Swiper(this.$el.find('.swiper').get(0), {
			slidesPerView: 1,
			spaceBetween: 0,
			loop: true,
			pagination: {
				el: this.$el.find('.swiper-pagination').get(0),
				clickable: true,
			},
		});
	}
}
