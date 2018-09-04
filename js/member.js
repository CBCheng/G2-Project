var xhr = new XMLHttpRequest();

$(document).ready(function(){
    
	//桌機 頁籤導覽列
    $('.tab-grop li').click(function () {
    	
    	//頁籤按鈕所在位置
        $('.tab-grop li').not(this).removeClass('default');
        $(this).addClass('default');

        //更改頁籤內容
		var tabPageToShow = $(this).find('a').attr('rel');
        $('.tabPage.active').hide(0,showNextTabPage);
		function showNextTabPage(){
			$('#'+tabPageToShow).show(0,function(){
				$(this).addClass('active');
			})
		}	
    });

    //手機板頁籤導覽列
    var wdth = $(window).width();
    
   	if (wdth < 767) {
        
        $('.tab-grop li').click(function () {
            $(this).addClass('default');
            $('.tab-grop li').not(this).removeClass('default').slideToggle('100,100');

        });
    }   

//--------我的收藏頁籤 start-----//

	$('.favorite_tab').on('click',function(){
    
        $('.favorite_tab').not(this).removeClass('active');
        $(this).addClass('active');		

		var tabPageToShow = $(this).attr('rel');		
		$('.favorite_page.active').hide(0,showNextTabPage);

		function showNextTabPage(){
			$('#'+tabPageToShow).show(0,function(){
				$(this).addClass('active');
			})
		}		
	});

  // 收藏分享行程ajax
    $.ajax({
        url:'php/favorite_travel_btn.php',               
        dataType: 'text',           
        success: function(data){
            $('#m_rightBox').html(data);
        }
    });
  //刪除收藏分享行程
    

//--------我的收藏頁籤 end-----//

//-------會員修改 start------//
	
	//修改頁籤
	$('#member_mod_btn').on('click',function(){
		$('.member_info').css('display','none');
		$('.member_mod').css('display','block');
		$('.member_img #member_img_upload').attr('type','file');
    $('#img_update_btn').css('display','block');
	
	});
	// 取消修改
	// $('#cxl_btn').on('click',function(){
	// 	$('.member_mod input').val(null);
	// 	$('.member_info').css('display','block');
	// 	$('.member_mod').css('display','none');
	// 	$('.member_img input').attr('type','hidden');
	// }) 


    //上傳會員照片即時顯示

    document.getElementById('member_img_upload').addEventListener('change', fileChange);

    function fileChange(e) {
        var file = e.target.files[0];
        var obj = e.target;
        // console.log( obj );

        var readFile = new FileReader();
        readFile.readAsDataURL(file);
        readFile.addEventListener('load', function() {

            var img = document.getElementById("mem_img");
            img.setAttribute("src", readFile.result );
            img.setAttribute("width", 200);
            img.setAttribute("height", 200);

        });

    }


    //上傳會員大頭貼 ajax 

      $('#img_update_btn').click(function(event){

        xhr.onload = function (){
          if( xhr.status == 200){

            alert( xhr.responseText );

            var file = document.getElementById("member_img_upload").files[0];
            console.log( 1 );

            var readFile = new FileReader();
            readFile.readAsDataURL(file);
            readFile.addEventListener('load', function() {
                console.log( 22 );

                var img = document.getElementById('menu_memPic')
                img.setAttribute("src", readFile.result );
            });
            //.............

          }else{
            alert( xhr.status);
          }
        }

        var myForm = document.getElementById('img_form');
        var formData = new FormData(myForm);

        xhr.open("post","member_img_upload.php", true);

        xhr.send( formData );
                 
      });

      //撈取會員資料 
      $('.memUpdate_OriPsw').change(function(){


        xhr.onload = function (){
          if( xhr.status == 200){
              var memString = xhr.responseText;
              var memArr = JSON.parse(memString);
              // storage.setItem('mempic', memArr["mempic"] );
              var psw = $('.memUpdate_OriPsw').val();

              if( memArr["memPsw"] !== psw){
                alert("原密碼輸入錯誤");
                $('#mem_update_btn').attr('name','error');
              }else{
                $('#mem_update_btn').attr('name','correct');

              };

          }else{
            alert( xhr.status);
          }
        }


        var login_info = {};
        login_info.memEmail = storage.getItem('memEmail');
        var url = "member_ck.php?login_info=" + JSON.stringify( login_info );
        xhr.open("get", url, true);
        xhr.send( null );
        
      });


  	   $('#memUpdate_psw').change(function(){
            
            if( $(this).val().length <6 && $(this).val() !== ''){
            alert('需大於6位數');

           }                

        });


      $('#memUpdate_psw_conf').focusout(function(){
          if( $('#memUpdate_psw').val() !== $(this).val() && $('#memUpdate_psw_conf').val() !== '' ){
            alert("輸入二次密碼不符");
            // $('#mem_update_btn').attr('disabled',true);
          }
          
      });

      //會員修改送出
       $('#mem_update_btn').click(function(){

        var check =  ( $('#memUpdate_psw').val() !== $('#memUpdate_psw_conf').val() ) ;

            if($(this).attr('name') == 'error' ){

                alert("請確認原密碼");

            }else if( check === true || $('#memUpdate_psw').val().length<6 && $('#memUpdate_psw').val() !== ''){
                alert('請確認修改密碼輸入正確');
            }else{

                var xhr = new XMLHttpRequest();

                 xhr.onload = function (){

                  if( xhr.status == 200){
                    window.location.reload();    
                    alert("修改成功");
                    
                  }else{
                    alert( xhr.status);
                  }


                  };

                var update_info = {};
                // update_info.memOriPsw = $('#memUpdate_psw_ori').val();
                update_info.memEmail = $('#testtest').text();
                update_info.memPsw = $("#memUpdate_psw").val();
                update_info.memAdd = $('#memAdd').val();
                update_info.memPhone = $('#memPhone').val();
                update_info.memBir = $('#memBir').val();
                update_info.admin = "no";

              
                var url = "mem_update.php?update_info=" + JSON.stringify( update_info );
               // console.log(url);
                xhr.open("get", url, true);
                xhr.send( null );

                                   
            }


       })      



//-------會員修改 end------//

});

// window.addEventListener('load',defaultEffect);