$(document).on('click', '.look_detail', function(){
	var $expertName =$(this).data('name');
	$.ajax({
		url: 'php/member_exp_lightBox.php',
		type: 'POST',
		dataType: 'text',
		data:{
			expertName: $expertName,
			expertNo: $(this).parent().next().find('div').data('no'),
		},
		success: function (data) {
			$('#exp_lightBox_father').html(data);
			// alert('data');

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


			$.ajax({
				url: 'php/member_exp_chart.php',
				type: 'POST',
				dataType: 'text',
				data: {expertName: $expertName,},
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

					$(".num").css({
						opacity: 1
					})

				},
			});
		},
		error: function () {
			alert('error_look');
		}
	});
})





$(document).on('click', '.member_delete', function(){
	var $aa = confirm('確定要刪除嗎?');
	if($aa==true){
		$.ajax({
			url: 'php/member_fav_delete.php',
			dataType: 'text',
			//使請求同步→可使alert確定後才執行刪除動作
			async: false,
			data:{
				expertNo: $(this).data('no'),
			},
			success: function (data) {
				// alert(data);
			},
			error: function () {
				// alert('error_del');
			}
		});
		//點擊後可使整條tr刪除掉
		$(this).parent().parent().remove();
	}
	
})
