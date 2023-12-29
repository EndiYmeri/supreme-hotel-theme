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

// import Swiper from 'swiper';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

let header = document.getElementById('masthead');
let oldColor = header.style.backgroundColor;

window.addEventListener('scroll', () => {
	let yPosition = window.scrollY;
	if (yPosition > 100) {
		header.style.backgroundColor = '#480634';
		header.classList.add('py-4');
	} else {
		header.classList.remove('py-4');
		header.style.backgroundColor = oldColor;
	}
});





// window.onload = () => {
// 	// eslint-disable-next-line no-unused-vars
// 	var roomsSwiper = new Swiper('#rooms-slider', {});
// };
