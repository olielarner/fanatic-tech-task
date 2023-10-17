import $ from 'jquery';
import Swiper from 'swiper';

import { Mousewheel, Navigation, Pagination } from 'swiper/modules';

export default class ContentCards {
	$el = $('section.content-cards');

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

		new Swiper(this.$el.find('.card-swiper').get(0), {
			slidesPerView: 1,
			spaceBetween: 22,
			loop: true,
			pagination: {
				el: this.$el.find('.swiper-pagination').get(0),
				clickable: true,
			},
			breakpoints: {
				768: {
					slidesPerView: 2,
				},
				1024: {
					slidesPerView: 3,
				},
			},
		});
	}
}
