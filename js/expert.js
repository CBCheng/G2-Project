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


//=====兩片雲動畫=====
TweenMax.fromTo('.cloud1', 0, { x: 250, y: 0 }, { x: 250, y: 0 });
TweenMax.fromTo('.cloud2', 0, { x: -250, y: 0 }, { x: -250, y: 0 });

// parallax視差 加滾動觸發
$(function () {
    var tls = new TimelineMax();
    var controller = new ScrollMagic.Controller();


    var tween_s = tls.to('.cloud_group .cloud1', 1, {
        y: 50,
        x: -100,
        // alpha: 1
    }).to('.cloud_group .cloud2', 1, {
        y: 50,
        x: 100,
        // alpha: 1
    });

    // var planetsan = tls.to('.planetsan', 100, {
    //     y: 800,
    //     x: 1800,
    //     // alpha: 1
    // })

    // var planettree = tls.to('.planettree', 100, {
    //     y: 800,
    //     x: -1800,
    //     // alpha: 1
    // })



    //第一個場景
    var scence_01 = new ScrollMagic.Scene({
        triggerElement: "#trigger_01",
        offset: 280,
        duration: '50%',
        reverse: true  //動畫會返回(預設)
    }).setTween(tween_s)
        .addIndicators({name: '1'})
        .addTo(controller)

    // var scence_02 = new ScrollMagic.Scene({
    //     triggerElement: "#trigger_02",
    //     offset: 20,
    //     duration: '120%',
    // }).setTween(planetsan)
    //     .addIndicators({name: '2'})
    //     .addTo(controller)

    // var scence_03 = new ScrollMagic.Scene({
    //     triggerElement: "#trigger_03",
    //     offset: 40,
    //     duration: '100%',
    // }).setTween(planettree)
    //     .addIndicators({name: '3'})
    //     .addTo(controller)

    console.log("scrollmagic")
})









// =====跳窗開關=====
	// $(function () {
	// 	$(".element-item").click(function () {
	// 		$("#exp_lightBox_father").show(500);
	// 	})
	// })
	// // e.target觸發的物件 //e.currentTarget監聽的事件
	// $("#exp_lightBox_father").click(function (e) {
	// 	if (e.target == e.currentTarget)
	// 		$("#exp_lightBox_father").hide(500);
	// })

	// $(function () {
	// 	$(".fas").click(function () {
	// 		$("#exp_lightBox_father").hide(500);
	// 	})
	// })


//=====愛心換圖 jQuery=====
// $("#heart").click(function () {
// 	if (heart.title === "加入收藏") {
// 		$(this).attr("src", "img/expertImg/heartRed.png");
// 		$(this).attr("title", "取消收藏");
// 	} else {
// 		$(this).attr("src", "img/expertImg/heartWhite.png");
// 		$(this).attr("title", "加入收藏");
// 	}
// })


// =======抓資料庫=======

//抓列表
$.ajax({
	url: 'php/expert.php',
	dataType: 'text',
	success: function (data) {
		$('.grid').html(data);
		// alert('ok');

	},
	error: function () {
		alert('error');
	}
});



//點擊後執行跳窗
$(document).on('click', '.element-item', function(){
	var expertName = $(this).find('input').val();
	var expertNo = $(this).data('no');
	// console.log(expertNo);
	$.ajax({
		url: 'php/expert_lightBox.php',
		type: 'POST',	
		dataType: 'text',
		data: {
			expertName:expertName,
			expertNo:expertNo
		},			
		success: function(data){
			$('#exp_lightBox_father').html(data);

			//依星球判斷exp_lightBox外框色
			if($('#exp_lightBox h1').hasClass('plBlue')){
				$('#exp_lightBox').addClass('boxBlue');
			}
			if($('#exp_lightBox h1').hasClass('plOrange')){
				$('#exp_lightBox').addClass('boxOrange');
			}
			if($('#exp_lightBox h1').hasClass('plGreen')){
				$('#exp_lightBox').addClass('boxGreen');
			}

			
			//點擊愛心收藏專家→insert into一筆資料
			$('.heart').click(function(){
                $.ajax({
                    url: 'php/expert_collect.php',
                    type: 'POST',
                    dataType: 'text',
                    data: {
                        expertNo: $(this).data('expert'),
                    },  
                    success: function (data) {
                        alert(data);
                    },
                    error: function () {
                        alert('請先登入才可收藏');
                    }
                })
             })


			$.ajax({
				url: 'php/expert_chart.php',
				type: 'POST',
				dataType: 'text',
				data: {expertName:expertName},
				success: function (data) {
					if(window.innerWidth>449){
						$('.chart').html(data);
					}else{
						$('.chart_phone').html(data);
					}
					
					
					// alert('okkkkk');
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

					// console.log('美食:'+$('.ch_food').val());
					// console.log('人文:'+$('.ch_human').val());
					// console.log('知性:'+$('.ch_smart').val());
					// console.log('冒險:'+$('.ch_advan').val());
					// console.log('科技:'+$('.ch_tech').val());
				},
			});
		},
		error: function () {
			alert('errorerror');
		}
	});
})








