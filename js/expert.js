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
		$(".expertBox").click(function () {
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
// $(function () {
// 	var grid = document.querySelector('.grid');
// 	var xhr = new XMLHttpRequest();
// 	var url = "php/expert.php";
// 	xhr.open("Get", url, true);
// 	xhr.send(null);
// 	xhr.onload = function () {
// 		if (xhr.status == 200) {
// 			console.log(xhr.responseText);
// 			var memRow = JSON.parse(xhr.responseText);
// memRow.forEach(e => {
// 	grid.innerHTML += `<div class="element-item">
// 	<img class="king" src="img/expertImg/crown.png" alt="crown">
//     <h2 class="h2Desk">${e.planet}</h2>
//     <h3 class="h3Desk">${e.expertName}</h3>
//     <div class="attr">美食</div>
//     <div class="pic">
//         <a>
//             <img id="box" src="../img/expertImg/expPic/101.jpg">
//         </a>
//         <div class="aside">
//             <h2 class="h2Ph">瓦特星</h2>
//             <h3 class="h3Ph">Christina</h3>
//             <div class="score">
//                 <span>5</span>
//                 <img src="img/expertImg/star.png" alt="star">
//                 <img src="img/expertImg/star.png" alt="star">
//                 <img src="img/expertImg/star.png" alt="star">
//                 <img src="img/expertImg/star.png" alt="star">
//                 <img src="img/expertImg/star.png" alt="star">
//             </div>
//             <div class="mark">
//                 <img src="img/expertImg/comment.png" alt="comment">
//                 <span>5</span>
//                 <img src="img/expertImg/love.png" alt="love">
//                 <span>20</span>
//             </div>
//         </div>
//     </div>
// </div>`;
// });
// $('.element-item h2').each(function () {
// 	if ($(this).html() == '瓦特星') {
// 		$(this).parent().addClass('blue');
// 	}
// 	else if ($(this).html() == '達沙星') {
// 		$(this).parent().addClass('orange');
// 	}
// 	else {
// 		$(this).parent().addClass('green');
// 	}

// if ($(this).data("pop") > 20) {
// 	$(this).parent().addClass('popular');
// }

// 		} else {
// 			alert(xhr.status);
// 		}
// 	}
// })
// =======抓資料庫=======

// $.ajax({
// 	url: 'php/expert.php',
// 	dataType: 'text',
// 	success: function (data) {
// 		$('.grid').html(data);
// 		alert('success');
		

// 	},
// 	error: function () {
// 		alert('error');
// 	}
// });