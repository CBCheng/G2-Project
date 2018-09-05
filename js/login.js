var storage = sessionStorage;

  //抓location路徑
  var locationSelf = window.location;
  var locationStr = String(locationSelf)
  var locationReload = locationStr.split("/");
  var lenLocation = locationReload.length;






   $(document).ready(function(){


     // storage.setItem('memCoupon','150' );

    // 確認登入狀態並更改會員顯示

      if (storage.getItem('memEmail')){

              var xhr = new XMLHttpRequest();
              xhr.onload = function (){
                if( xhr.status == 200){
                    var memString = xhr.responseText;
                    var memArr = JSON.parse(memString);
                    storage.setItem('mempic', memArr["mempic"] );
                    storage.setItem('memNo', memArr["memNo"] );

                    var wdt = $( document ).width();
                    if(wdt>768){ 

                        $('.memberLogin').css('top','-9px');

                    };
                    
                    // $('.memberLogin').css('display','none');
                    $('#logOut_btn').text('登出');
                    $('#greeting_btn').text('你好!')
                    $('#logOut_xs').html('<a href="#">登出</a>');
                    //換大頭貼
                    $('.menu-icon-user img').attr('src','images/member/'+memArr["mempic"]);
                     
                    $('.memberLogin a').attr('href','member.php');
                 
                }else{
                  alert( xhr.status);
                }
              }

             
            var login_info = {};
              login_info.memEmail = storage.getItem('memEmail');
              var url = "member_ck.php?login_info=" + JSON.stringify( login_info );
              xhr.open("get", url, true);
              xhr.send( null );            
              
          };


        $('#menu-xs').click(function(){
            $('.menu-xs-icon').toggleClass('active');
            $('.menu-list-content-xs').toggleClass('active');
            $('.menu-xs-icon img').attr('src','images/menu/icon-6.png');
            $('.menu-xs-icon.active img').attr('src','images/menu/icon-03.png');
        });
        //----------------註冊 start---------------------// 
      $('.memberLogin').click(function(){ 
        // if( $('#logOut_btn').text() =="" || $('#logOut_xs').text()=="" ){
        //   $('.login_modal').fadeIn(500,'swing');  
        // }

        if ( storage.getItem('memEmail') == null ){
            $('.login_modal').fadeIn(500,'swing');  
        }

      }); 

      $('.registBtn').on('click',function(){ 
        $('.login_box').hide(0,showRegist); 

        function showRegist(){ 
        $('.regist_box').show(0); 
        }  

      }) ;
      
      $('.close').on('click',function(){
        $('.login_modal').slideUp(300,'swing');
        $('.regist_box').hide(1000);
        $('.login_box').show(1000);
        $('.login_input input').val('');
        $('.login_lable').css({'top':'18px','color':'grey'});        
      });

      //input 點按效果
      $('.login_input input').focus(function(){
        $(this).next().css({'top':'-10px','color':'#6b4c4c'});

      })
      $('.login_input input').blur(function(){

          if( $(this).val() == '' ){
          $(this).next().css({'top':'18px','color':'grey'});
         
        }
      });

      //---------------註冊驗證---------------//
      $('#memPsw_input').blur(function(){
          if( $(this).val().length <6 && $(this).val() !== ''){
              $(this).next().next().css('display','block');

            }else{
              $(this).next().next().css('display','none');
              if( $(this).val() !==  $('#memPsw_2nd_input').val() ){
                  $('#memPsw_2nd_input').next().next().css('display','block');
              }
        }                
      });
      $('#memPsw_2nd_input').change(function(){
          if( $('#memPsw_input').val() !== $(this).val() && $(this).val() !=='' ){
              $(this).next().next().css('display','block');
            }else{
              $(this).next().next().css('display','none');
             
          }
      })

      $('#regist_email').change(function(){

          var email = $('#regist_email').val()
          validateEmail(email);

          if( !validateEmail(email) ){
            $(this).next().next().css('display','block');
          }else{
            $(this).next().next().css('display','none');

          }
      });

      function validateEmail($email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        return emailReg.test( $email );
      }


      $('#regist_btn').click(function(){

          let error = false;
          $('.regist_content input').each(function(){

            if($(this).val() == ""){
              error = true;
              alert("請填寫所有欄位");
              return false;

            }
           });//判斷欄位有寫function結束 

          if( error == false) {

               function test(){

                    $('.inputErr_notice').each(function(){

                        if( $(this).css('display') == 'block' ){
                          error = true;
                          alert('請確認欄位格式正確')
                          return false;

                        }
                    });// 確認格式都正確的each結束

                    // if( error == false){

                    //       let xhr = new XMLHttpRequest();
                    //       xhr.onload = function (){

                    //           if( xhr.status == 200){
                    //             if( xhr.responseText.indexOf("OK") != -1){
                    //             // var memString = xhr.responseText;
                    //             //  // alert(memString);
                    //             // var memArr = JSON.parse(memString);
                    //             console.log(xhr.responseText );
                    //             var memNo = xhr.responseText.substr(2);
                    //             storage.setItem('memEmail', regist_info.memEmail);
                    //             storage.setItem('mempic', regist_info.mempic );
                    //             storage.setItem('memNo', memNo);

                    //             alert("註冊成功，現已登入");
                    //             window.location.reload();
                    //             }
                    //           }else{
                    //             alert( xhr.status)
                    //           }
                    //       }//onload

                    //       var regist_info = {};
                    //       regist_info.memeName = $("#regist_name").val();
                    //       regist_info.memPsw = $("#memPsw_2nd_input").val();
                    //       regist_info.memEmail = $("#regist_email").val();
                          

                    //       var url = "../php/enroll.php?regist_info=" + JSON.stringify( regist_info );
                    //       xhr.open("get", url, true);
                    //       xhr.send( null );               
                    // }
                      
              }//test()
                    
               test();
               
          }
    
      });
 

        
      //----------------註冊 end---------------------//

     


      //---------------登出 start---------------------//

      
            




       //---------------登出 end---------------------//  
    });

    // function $id(id){
    //   return document.getElementById(id);
    // }
    // window.onscroll = function(){
          
    //         if(document.documentElement.scrollTop > 100){ 
    //           $("#menu").addClass("menu-flex"); 
    //           $("#menu-bg").addClass("menu-bg-flex"); 
    //           $("#menu-logo").addClass("menu-logo-flex"); 
    //           $("#menu-logo").removeClass("menu-logo"); 
    //           $("#box-line").addClass("box-line-none"); 
    //         }else{ 
    //           $id("menu").className = "menu"; 
    //           $("#menu-bg").removeClass("menu-bg-flex"); 
    //           $("#menu-logo").removeClass("menu-logo-flex"); 
    //           $("#menu-logo").addClass("menu-logo"); 
    //           $("#box-line").removeClass("box-line-none"); 
    //         } 
           
    //   }



function $id(id){
 return document.getElementById(id);
} 
function $id(id){
      return document.getElementById(id);
    }
    function showLoginForm(){
      //檢查登入bar面版上 spanLogin 的字是登入或登出
      //如果是登入，就顯示登入用的燈箱(lightBox)
      //如果是登出
      //將登入bar面版上，登入者資料清空 
      //spanLogin的字改成登入
      //將頁面上的使用者資料清掉
      if($id('spanLogin').innerHTML == "登入"){
        $id('lightBox').style.display = 'block';
      }else{  //登出
        var xhr = new XMLHttpRequest();
        xhr.onload = function(){
          if( xhr.status == 200){
            $id('memName').innerHTML = '&nbsp';
            $id('spanLogin').innerHTML = '登入';             
          }else{
            alert( xhr.status);
          }
         
        }
        xhr.open("get","logout.php",true);
        xhr.send(null);

      }

    }//showLoginForm

    function sendForm(){
      //=====使用Ajax 回server端,取回登入者姓名, 放到頁面上    
      var xhr = new XMLHttpRequest();

      xhr.onload = function(){
        if( xhr.status == 200){  
          if( xhr.responseText == "NG"){
            alert("帳密錯誤");
          }else{
            document.getElementById("memName").innerHTML = xhr.responseText;
            document.getElementById("spanLogin").innerHTML = "登出";  
          }

        }else{
          alert(xhr.status);
        }
      }

      xhr.open("Post", "ajax_login.php", true);
      xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
      var data_info = "memEmail=" + document.getElementById("memEmail").value 
                    + "&memPsw="+ document.getElementById("memPsw").value;
      xhr.send(data_info);

      //將登入表單上的資料清空，並隱藏起來
      $id('lightBox').style.display = 'none';
      $id('memEmail').value = '';
      $id('memPsw').value = '';
      
    }

    function cancelLogin(){
      //將登入表單上的資料清空，並將燈箱隱藏起來
      $id('lightBox').style.display = 'none';
      $id('memEmail').value = '';
      $id('memPsw').value = '';
    }

    function init(){
      //===設定spanLogin.onclick 事件處理程序是 showLoginForm

      $id('spanLogin').onclick = showLoginForm;

      //===設定btnLogin.onclick 事件處理程序是 sendForm
      $id('login_send').onclick = sendForm;

      //===設定btnLoginCancel.onclick 事件處理程序是 cancelLogin
      // $id('btnLoginCancel').onclick = cancelLogin;

      //檢查是否已登入
      var xhr = new XMLHttpRequest();
      xhr.onload = function(){
        if(xhr.status == 200){
          if( xhr.responseText !=""){ //己登入
            document.getElementById("memName").innerHTML = xhr.responseText;
            document.getElementById("spanLogin").innerHTML = "登出";  
          }
          
        }else{
          alert( xhr.status);
        }
      }
      xhr.open("get", "getLoginInfo.php", true);
      xhr.send(null);
    }; //window.onload
    
    window.onload=init;
