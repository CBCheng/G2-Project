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

TweenMax.fromTo('.cloud1', 3, { x: 200, y: 0 }, { x: -30, y: 0 });
TweenMax.fromTo('.cloud2', 3, { x: -200, y: 0 }, { x: 30, y: 0 });

// =====跳窗開關=====
	// $(function () {
	// 	$(".element-item").click(function () {
	// 		$("#lightBox_father").show(500);
	// 	})
	// })
	// //e.target觸發的物件 //e.currentTarget監聽的事件
	// $("#lightBox_father").click(function (e) {
	// 	if (e.target == e.currentTarget)
	// 		$("#lightBox_father").hide(500);
	// })

	// $(function () {
	// 	$(".fas").click(function () {
	// 		$("#lightBox_father").hide(500);
	// 	})
	// })







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

$.ajax({
	url: 'php/expert.php',
	dataType: 'text',
	success: function (data) {
		$('.grid').html(data);
		alert('ok');

	},
	error: function () {
		alert('error');
	}
});




$(document).on('click', '.element-item', function(){
	var expertName = $(this).find('input').val();
	console.log(expertName);
	$.ajax({
		url: 'php/expert_lightBox.php',
		type: 'POST',	
		dataType: 'text',
		data: {expertName:expertName},			
		success: function(data){
			$('#lightBox_father').html(data);

			//依星球判斷lightBox外框色
			if($('#lightBox h1').hasClass('plBlue')){
				$('#lightBox').addClass('boxBlue');
			}
			if($('#lightBox h1').hasClass('plOrange')){
				$('#lightBox').addClass('boxOrange');
			}
			if($('#lightBox h1').hasClass('plGreen')){
				$('#lightBox').addClass('boxGreen');
			}




			$.ajax({
				url: 'php/expert_chart.php',
				type: 'POST',
				dataType: 'text',
				data: {expertName:expertName},
				success: function (data) {
					$('.chart').html(data);
					alert('okkkkk');
					$food = $('.ch_food').val();
					$human = $('.ch_human').val();
					$smart = $('.ch_smart').val();
					$adven = $('.ch_advan').val();
					$tech = $('.ch_tech').val();

					if($food ==10){
					$('.value:nth-of-type(1)').addClass('focus');
					}
					if($human ==10){
					$('.value:nth-of-type(2)').addClass('focus');
					}
					if($smart ==10){
					$('.value:nth-of-type(3)').addClass('focus');
					}
					if($adven ==10){
					$('.value:nth-of-type(4)').addClass('focus');
					}
					if($tech ==10){
					$('.value:nth-of-type(5)').addClass('focus');
					}


					$('.value:nth-of-type(1)').css('width',$food*10+'px');
					$('.value:nth-of-type(2)').css('width',$human*10+'px');
					$('.value:nth-of-type(3)').css('width',$smart*10+'px');
					$('.value:nth-of-type(4)').css('width',$adven*10+'px');
					$('.value:nth-of-type(5)').css('width',$tech*10+'px');

					console.log('美食:'+$('.ch_food').val());
					console.log('人文:'+$('.ch_human').val());
					console.log('知性:'+$('.ch_smart').val());
					console.log('冒險:'+$('.ch_advan').val());
					console.log('科技:'+$('.ch_tech').val());
					
				},
				
			});

			
		},
		error: function () {
			alert('errorerror');
		}
	});


	// $.ajax({
	// 			url: 'php/expert_chart.php',
	// 			type: 'POST',
	// 			dataType: 'text',
	// 			data: {expertName:expertName},
	// 			success: function (data) {
	// 				$('.chart').html(data);
	// 				alert('okkkkk');
	// 				$food = $('.ch_food').val();
	// 				$human = $('.ch_human').val();
	// 				$smart = $('.ch_smart').val();
	// 				$adven = $('.ch_advan').val();
	// 				$tech = $('.ch_tech').val();

	// 				$('.value:nth-of-type(1)').css('width',$food*10+'px');
	// 				$('.value:nth-of-type(2)').css('width',$smart*10+'px');
	// 				$('.value:nth-of-type(3)').css('width',$human*10+'px');
	// 				$('.value:nth-of-type(4)').css('width',$adven*10+'px');
	// 				$('.value:nth-of-type(5)').css('width',$tech*10+'px');

	// 				console.log('美食:'+$('.ch_food').val());
	// 				console.log('人文:'+$('.ch_human').val());
	// 				console.log('知性:'+$('.ch_smart').val());
	// 				console.log('冒險:'+$('.ch_advan').val());
	// 				console.log('科技:'+$('.ch_tech').val());
					
	// 			},
				
	// 		});

})







