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




//愛心換圖
$("#heart").click(function () {
	$(this).attr("src", "../img/expertImg/heartRed.png");
	$(".collect .txt").text('取消收藏');
})
// if ($(".collect .txt").text('取消收藏')) {
// 	$("#heart").click(function () {
// 		$(this).attr("src", "../img/expertImg/heartWhite.png");
// 		$(".collect .txt").text('收藏專家');
// 	})
// }






// =======抓資料庫=======
// $(function () {
// 	var grid = document.querySelector('.grid');
// 	var xhr = new XMLHttpRequest();
// 	xhr.onload = function () {
// 		if (xhr.status == 200) {
// 			var memRow = JSON.parse(xhr.responseText);
// 			memRow.forEach(e => {
// 				grid.innerHTML += `<div class="element-item">
//                 <h2 data-pop="${e.expertPopular}">${e.planet}</h2>
//                 <h3>${e.expertName}</h3>
//                 <div class="main">
//                     <div class="pic">
//                         <div class="attr">人氣</div>
//                         <a href="#lightBox1" data-lity>
//                             <img id="box1" src="img/expertImg/${e.expertPic}.jpg" alt="emma">
//                         </a>
//                     </div>
//                 </div>
//                 <div class="aside">
//                     <h3>${e.expertName}</h3>
//                     <div class="score">
//                         <span>5</span>
//                         <img src="img/expertImg/star.png" alt="star">
//                         <img src="img/expertImg/star.png" alt="star">
//                         <img src="img/expertImg/star.png" alt="star">
//                         <img src="img/expertImg/star.png" alt="star">
//                         <img src="img/expertImg/star.png" alt="star">
//                     </div>
//                     <div class="mark">
//                         <img src="img/expertImg/comment.png" alt="comment">5
//                         <img src="img/expertImg/love.png" alt="love">20
//                     </div>
//                 </div>
// 			</div>`;



// 			});
// 			$('.element-item h2').each(function () {
// 				if ($(this).html() == '瓦特星') {
// 					$(this).parent().addClass('blue');
// 				}
// 				else if ($(this).html() == '達沙星') {
// 					$(this).parent().addClass('orange');
// 				}
// 				else {
// 					$(this).parent().addClass('green');
// 				}

// 				// if ($(this).data("pop") > 20) {
// 				// 	$(this).parent().addClass('popular');
// 				// }


// 			})


// 		} else {
// 			alert(xhr.status);
// 		}
// 	}

// 	var url = "php/expert.php";
// 	xhr.open("Get", url, true);
// 	xhr.send(null);
// })
// =======抓資料庫=======












