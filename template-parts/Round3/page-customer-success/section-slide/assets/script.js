let currentSlide = 0;
let progress = 0;

const progressElement = document.querySelector('.progress');
const images = document.querySelectorAll('.images img');
// Hàm cập nhật progress dựa trên thời gian còn lại và slide hiện tại
const onAutoplayTimeLeft = (swiper, timeLeft, progressValue) => {
	const currentOnTotalTime = currentSlide * 5000 + (5000 - timeLeft);
	progress = (currentOnTotalTime / 15000) * 100;
	progressElement.style.width = progress + "%";  // Cập nhật độ rộng của progress bar
};

// Hàm xử lý khi slide thay đổi
const handleSlideChange = (swiper) => {
	currentSlide = swiper.activeIndex;
	images.forEach((image, index) => {
		image.classList.remove('active');
		if (index === currentSlide) {
			image.classList.add('active');
		}
	})
};

// Khởi tạo Swiper
const swiper = new Swiper('.swiper_holbrook', {
	centeredSlides: true,
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
// 	speed: 400,
	effect: 'fade',
	pagination: {
		clickable: true,
		el: '.swiper-pagination',
	},
	on: {
		autoplayTimeLeft: function (swiper, time, progress) {
			onAutoplayTimeLeft(swiper, time, progress);
		},
		slideChange: function (swiper) {
			handleSlideChange(swiper);
		}
	}
});