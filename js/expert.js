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
// window.onload = doFirst;
// window.onload = doSecond;








// $(function () {
//     $("#box1").click(function () {
//         $("#lightBox1").css('display', 'block');
//     })
// })

// $(function () {
//     $("#closeBtn").click(function () {
//         $("#lightBox").hide();
//     })
// })


// var lightBox1 = document.getElementById("lightBox1");
// var closeBtn = document.getElementById("closeBtn");
// function openBox() {
// 	lightBox1.style.display = "block";
// }
// function closeBox() {
// 	lightBox1.style.display = "none";
// }
// function init() {
// 	document.getElementById("box1").onclick = openBox;
// 	document.getElementById("closeBtn").onclick = closeBox;
// };

// window.addEventListener('load', init);
window.onload = init;







   	

	


