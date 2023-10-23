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
let header = document.getElementById('masthead');
console.log({ header });
let oldColor = header.style.backgroundColor;
console.log({ oldColor });

window.addEventListener('scroll', () => {
	let yPosition = window.scrollY;
	if (yPosition > 100) {
		header.style.backgroundColor = '#480634';
		header.classList.add('py-2');
	} else {
		header.classList.remove('py-2');
		header.style.backgroundColor = oldColor;
	}
});
