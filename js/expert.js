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



// =====跳窗開關=====
	$(function () {
		$(".element-item").click(function () {
			$("#lightBox_father").show(500);
		})
	})
	//e.target觸發的物件 //e.currentTarget監聽的事件
	$("#lightBox_father").click(function (e) {
		if (e.target == e.currentTarget)
			$("#lightBox_father").hide(500);
	})

	$(function () {
		$(".fas").click(function () {
			$("#lightBox_father").hide(500);
		})
	})







//=====愛心換圖=====
$("#heart").click(function () {
	if (heart.title === "加入收藏") {
		$(this).attr("src", "img/expertImg/heartRed.png");
		$(this).attr("title", "取消收藏");
	} else {
		$(this).attr("src", "img/expertImg/heartWhite.png");
		$(this).attr("title", "加入收藏");
	}
})






// =======抓資料庫=======

// $.ajax({
// 	url: 'php/expert.php',
// 	dataType: 'text',
// 	success: function (data) {
// 		$('.grid').html(data);
// 		alert('ok');

// 	},
// 	error: function () {
// 		alert('error');
// 	}
// });


