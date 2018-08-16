function doFirst() {
	var canvas = document.getElementById('canvas1');
	var context = canvas.getContext('2d');

	context.strokeStyle = '#fff';
	context.lineWidth = '3';

	context.moveTo(63, 0);
	context.lineTo(183, 0);
	context.lineTo(244, 104);
	context.lineTo(183, 208);
	context.lineTo(63, 208);
	context.lineTo(3, 104);
	context.closePath();

	context.stroke();
}
function doSecond() {
	var canvas = document.getElementById('canvas2');
	var context = canvas.getContext('2d');

	context.strokeStyle = '#6cd5ff';
	context.lineWidth = '3';

	context.moveTo(63, 0);
	context.lineTo(183, 0);
	context.lineTo(244, 104);
	context.lineTo(183, 208);
	context.lineTo(63, 208);
	context.lineTo(3, 104);
	context.closePath();

	context.stroke();

}
window.addEventListener('load', doFirst);
window.addEventListener('load', doSecond);