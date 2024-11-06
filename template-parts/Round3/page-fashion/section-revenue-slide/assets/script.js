const swiper_brand = new Swiper(".fashion-brands-swiper", {
	slidesPerView: 1.5,
	centeredSlides: true,
	spaceBetween: 58,
	loop: true,
	loopFillGroupWithBlank: true,
	pagination: {
		el: ".fashion-brands-pagination",
		clickable: true,
	},
});