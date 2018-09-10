<?php 
ob_start();
session_start();
if(isset($_SESSION["indexViewNo"])==false){
	$_SESSION["indexViewNo"]='';
	
}
if(isset($_SESSION["planet"])==false){
$_SESSION["planet"]='';	
}

if(isset($_SESSION["scheduleNo"])==false){
	$_SESSION["scheduleNo"]='';
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- <link rel="stylesheet" type="text/css" href="css/app.css"> -->
<link rel="stylesheet" type="text/css" href="css/pignose.calendar.css">
<script type="text/javascript" src="js/Sortable.min.js"></script>
<script type="text/javascript"src="js/jquery-3.3.1.min.js"></script>
<!-- <script src="libs/gsap/src/minified/TweenMax.min.js"></script> -->
<script src="js/tween.js"></script>
<!-- <script type="text/javascript" src="js/parallax.js"></script> -->
<script type="text/javascript" src="js/pignose.calendar.full.js"></script>
<!-- <script type="text/javascript" src="js/planning2.js"></script> -->
<script type="text/javascript" src="js/planning.js"></script>
<link rel="stylesheet" type="text/css" href="css/planningnavcss/login.css">
<link rel="stylesheet" type="text/css" href="css/planningnavcss/member.css">
<link rel="stylesheet" type="text/css" href="css/planning.css">
<link rel="stylesheet" type="text/css" href="css/planningnavcss/style.css">
<link rel="stylesheet" type="text/css" href="css/planningnavcss/index.css">

<title>Examples</title>


</head>  
<body >    
	<header>
<!-- nav -->
    <!-- <div class="navColor">
        <img class="navPic" src="img/bg.png" alt="">
    </div> -->
    <nav>
        <!-- desk -->
        <ul class="menu mRight">
            <li>
                <a href="planning.php">開始冒險</a>
            </li>
            <li>
                <a href="refer.php">別人怎麼玩</a>
            </li>
        </ul>
        <a href="index.php" class="logo">
            <img src="img/logo-1.png">
        </a>
        <ul class="menu mLeft">
            <li>
                <a href="expert.php">專家帶你玩</a>
            </li>
            <li>
                <a href="shop.php">星際商城</a>
            </li>
        </ul>
        <ul class="member">
            <li class="shoppingCar">
                <a href="#">
                    <img class="shoppingCarPic" src="img/shopping car.png" alt="">
                    <!-- <img class="shoppingCarHover" src="img/shoppingCarHover.png" alt=""> -->
                </a>
            </li>
            <li class="memberSign">
                
      <?php
            //檢查是否已登入
        if( isset($_SESSION["MEM_NAME"]) === true ){ //已登入
        echo '<a id="mem_a" href="member_profile.php"><span id="memName">', $_SESSION["MEM_NAME"], '</span></a>';
        echo '<span id="spanLogin">登出</span>';
      }else{
        echo '<span id="memName">&nbsp;</span>';
        echo '<span id="spanLogin" class="chinese">登入</span>';
      }
      ?> 
                
            </li>
        </ul>
        <!-- <ul class="memberSelect">
            <li>Hi ~ 冒險者</li>
            <li><a href="member_mytrip.html">我的行程</a></li>
            <li><a href="member_favorite.html">我的收藏</a></li>
            <li><a href="member_order.html">我的訂單</a></li>
            <li><a href="member_comment.html">專家評論</a></li>
            <li><a href="member_profile.html">會員資料修改</a></li>
            <li><a href="sign.html">登出</a></li>
        </ul> -->
        <!-- mobile -->
        <div class="hambger">
            <div class="line"></div>
        </div>
        <ul class="menuMobile">
            <img class="navPic" src="img/bgM.png" alt="">
            <li>
                <a href="planning.html">開始冒險</a>
            </li>
            <li>
                <a href="expert.html">專家帶你玩</a>
            </li>
            <li>
                <a href="refer.html">別人怎麼玩</a>
            </li>
            <li>
                <a href="shop.html">星際商城</a>
            </li>
            <li>
                <a href="member.html">會員專區</a>
            </li>
            <li>
                <a href="shop.html">購物車</a>
            </li>

        </ul>
    </nav>
    <div class="login_modal" id="lightBox" style="" ;>
        <div class="regist_box" style="display: none;">
            <div class="regist_content">
                <span class="close">×</span>
                <h3>註冊會員</h3>

                <form method="post" action="php/enroll.php">

                    <div>
                        <div class="login_input">
                            <input required="required" type="text" id="regist_name" name="regist_name">
                            <label class="login_lable" style="top: 18px; color: grey;">*姓名 </label>
                        </div>
                        <div class="login_input">
                            <input required="required" type="password" maxlength="12" id="memPsw_input" name="memPsw_input">
                            <label class="login_lable" style="top: 18px; color: grey;">*密碼(6~12位數) </label>
                            <span class="inputErr_notice">字數不符</span>
                        </div>
                        <div class="login_input">
                            <input required="required" type="password" maxlength="12" id="memPsw_2nd_input" name="memPsw_2nd_input">
                            <label class="login_lable" style="top: 18px; color: grey;">*確認密碼 </label>
                            <span class="inputErr_notice">密碼不符</span>
                        </div>
                        <div class="login_input">
                            <input required="required" type="text" id="regist_email" name="regist_email">
                            <label class="login_lable" style="top: 18px; color: grey;">*電子信箱 </label>
                            <span class="inputErr_notice">非電子信箱</span>
                        </div>
                        <input type="submit" id="regist_btn" class="btn btn-o-nb" value="送出">

                    </div>
                </form>


                <img src="img/login/login.png">
            </div>

        </div>
        <div class="login_box" style="">
            <div class="login_content">
                <span class="close">×</span>
                <h3>會員登入</h3>
                <div>
                    <div class="login_input">
                        <input type="text" id="memEmail" name="MEM_EMAIL">
                        <label class="login_lable" style="top: 18px; color: grey;">電子信箱 </label>
                    </div>
                    <div class="login_input">
                        <input type="password" id="memPsw" name="MEM_PSW">
                        <label class="login_lable" style="top: 18px; color: grey;">密碼 </label>
                    </div>
                    <button class="btn btn-o-nb" id="login_send">送出</button>
                </div>
                <span>還不是會員，立馬<span class="registBtn"> 註冊 </span></span>
                <img src="img/login/login.png">
            </div>
        </div>
    </div>
   </header>
<!-- <div class="space"></div>  -->
<div class="planetFilter"> 

 
<!-- 進入選星球 -->
	<div class="planetLightBox chinese borderStyle viewBorderStyle">
		<div class="logoBar">
			<div >
				<img src="img/planning/logovb.png">
				<span>
					<img src="img/planning/clear-button-blue.png">
				</span>
			</div>
		</div> 
		<div >
			<p class="selectPlanetTitle">
				請選擇想去的星球
			</p>
			<ul>
				<li class="selectPlanet">
					<div>
						<img src="img/planning/planetwater.png">
					</div>
					<p >
						瓦特星
					</p>
				</li>
				<li class="selectPlanet">
					<div>
						<img src="img/planning/planetsan.png">
					</div>
					<p >
						達沙星
					</p>
				</li>
				<li class="selectPlanet">
					<div>
						<img src="img/planning/planettree.png">
					</div>
					<p >
						奧倫星
					</p>
				</li>
			</ul>
		</div>
	</div>
</div>	
<!-- 進入選星球 -->

<div class="Filter deleteBox">
	<div class="delBox borderStyle chinese viewBorderStyle">
		<p>確定要刪除這天嗎?</p>
		<div class="btnBox">
			<div class="dayyesBtn yesBtn">確定</div>
			<div class="daynoBtn noBtn">取消</div>
		</div>
	</div>
</div>
<!-- <div class="Filter saveDataBox">
	<div class="sizeSetting borderStyle chinese viewBorderStyle saveData">
		<p>儲存成功</p>
		<p>"確認"後將根據行此程安排適合的專家</p>
		<p>進入會員專區請按"取消"</p>
		<div class="btnBox">
			<div class="saveDatayesBtn yesBtn">確定</div>
			<div class="saveDatanoBtn noBtn">取消</div>
		</div>
	</div>
</div> -->
<div class="Filter confirmPlanetBox">
	<div class="sizeSetting borderStyle chinese viewBorderStyle planetSelect">
		<p>更換星球將會重置所有天數、景點與行程</p>
		<div class="btnBox">
			<div class="planetyesBtn yesBtn">確定</div>
			<div class="planetnoBtn noBtn">取消</div>
		</div>
	</div>
</div>
 <!-- <nav class="navbar"></nav> -->


 
<content>
	<div class="input"></div>
	<div class="stepBoxStyle chinese">
		<div class="stepBox">
			<div class="stepImg">
			<h3>開始規劃你的行程吧</h3>
			<img src="img/planning/step.png">
			</div>
			<!-- <div class="stepImg">
			<img src="img/planning/aa.png">
			</div> -->
			<!-- <div class="step">
				<div>
					<p class="stepNum">
						step 1
					</p>
					<p class="stepTxt">
						選擇星球
					</p>
					&
					<p class="stepTxt">
						選擇日期天數
					</p>
				</div>
				<div>
					<p class="stepNum">
						step 2
					</p>
					<p class="stepTxt">
						建立行程名稱
					</p>
				&
					<p class="stepTxt">
						挑選景點
					</p>
				</div>
				<div>
					<p class="stepNum">
						step 3
					</p>
							
					<p class="stepTxt">
					挑選專家
					</p>
					&
					<p class="stepTxt">
					儲存行程
					</p>
					

				</div>
			</div> -->
		</div>
	</div>
	<!-- <div class="planningTitle chinese">
		<h1>
			<p>
				不知道該怎麼玩嗎?
			</p>
			<a href="quiz.html">
				前往測驗
			</a>

		</h1>

	</div>	 -->


<ul>
	<li  id="cloneDayLi" >
						<div>
							<span >
								
							</span>
						</div>
						<span class="chinese">尚未選擇日期</span>
						<div>
							<span >
								
							</span>
							<div class="dayDel">
								<img src="img/planning/trash.png">
							</div>
							<div class="moveIcon"id="moveIcon">
								<img src="img/planning/helf-arrow-blue.png">
							</div>
						</div>
	</li>
</ul>	

<!-- 	<div class="searchSchdule chinese ">
		<input  class="chinese" onfocus="this.select()" type="text" name="" maxlength="6" placeholder="建立行程名稱">
		<p></p>
		<div class="editImg">
			<img src="img/planning/edit2.png">


		</div>
	</div> -->	

	<div class="planningContent">
		<div id="mobileBox">
		<div id="calendar" class="calendar chinese"></div>	
		</div>
		
	 <div class="mobilePlanningBox">
		<div class="PlanningBtn chinese">
			<div class="dayBtn borderStyle">天數<span class="daysCount">(3)</span></div>
			<div class="schBtn borderStyle"><span class="dayNum">D1</span>行程<span class="viewsCount">(0)</span></div>
			<div class="viewBtn borderStyle">景點</div>
		</div>
		
		<div class="selectDaysGroup">
					<!-- 月曆 -->
				
				<!-- 月曆 -->
			<div class="selectDays chinese " href="#">
				<span>
					選擇出發日期
				</span>

			
			</div>

			<div id="dayParent" class="borderStyle ">
				<ul id="day" class="day">
					<li data-daybox="0"  class="dayList">
						<div>
							<span class="resetDay">
								D1
							</span>
						</div>
						<span class=" date chinese">尚未選擇日期</span>
						<div>
							<span >
								
							</span>
							<div class="dayDel">
								<img src="img/planning/trash.png">
							</div>
							<div class="moveIcon" id="moveIcon">
								<img src="img/planning/helf-arrow-blue.png">
							</div>
						</div>
					</li>
					<li data-daybox="1" class="dayList">
						<div>
							<span class="resetDay">
								D2
							</span>
						</div>
						<span class="date chinese">尚未選擇日期</span>
						<div>
							<span>
								
							</span>
							<div class="dayDel">
								<img src="img/planning/trash.png">
							</div>
							<div class="moveIcon "id="moveIcon">
								<img src="img/planning/helf-arrow-blue.png">
							</div>
						</div>
					</li>
					<li data-daybox="2" class="dayList">
						<div>
							<span class="resetDay">
								D3
							</span>

						</div>
						<span class="date chinese">尚未選擇日期</span>
						<div>
							<span>
								
							</span>
							<div class="dayDel">
								<img src="img/planning/trash.png">
							</div>
							<div class="moveIcon"id="moveIcon">
								<img src="img/planning/helf-arrow-blue.png">
							</div>
						</div>
					</li>

				
				</ul>
			
				<div id="addNewDayBtn" class="Btn addDayStyle">+增加一天</div>
			</div>
		</div>

		<div class="schduleList">
			
			<div class="searchSchdule chinese ">
				<input  class="chinese" onfocus="this.select()" type="text" name="" maxlength="6" placeholder="行程名稱(enter)">
				<p></p>
				<div class="editImg">
					<img src="img/planning/edit2.png">
				</div>
			</div>
			<div class="getSchdule  chinese" href="#">
				<div class="schMoveInBox chinese">
					<span id="schduleTrig" class="Btn schMoveIn">
						匯入行程
					</span>
					<div class="schduleIN borderStyle">
						<div class="schduleINTitle">
							<div class="schduleINDel">
								<img src="img/planning/clear-button-black.png">
							</div>
							<p>
								我的收藏行程
							</p>
						</div>
						<div class="schduleINContent">
							<ul class="mySchduleList">
								
							</ul>
						
								<!-- <p>無收藏行程</p> -->
								<!-- <div class="loginBox">
									<a href="#">
										登入會員
									</a>
									<a href="refer.html">
										看看別人怎麼玩
									</a>
								</div> -->
						</div>
					</div>
				</div>

			</div>
			<div class="clearfix"></div>

			<!-- clone樣板 -->
			<li  data-schdule=""  id="copyLiStyle">
						<div class="Itemcontent">
							<p class=" ItemName">
								水上清真寺
							</p>
							<span></span>
							<span class="deleteIcon">
								<img src="img/planning/trash.png">
							</span>
							
						</div>
			</li>
			<!-- clone樣板 -->

			<!-- clone樣板 -->
			<ul  id="cloneSchUl"></ul>
			<!-- clone樣板 -->

			<div id="schduleBox" class="borderStyle chinese">
				<ul class="day schduleDay">
					<li>
						<div>
							<span id="copyDay">D1</span>
						</div>
						<span id="copyDate" class="chinese">尚未選擇日期</span>
					</li>
					<!-- id="schduleItems" -->
				</ul>
				<div class=" schduleEmptyTxt">
					<p>今日尚未安排景點</p>
				</div>
				<div id="schduleUl"><ul data-schdulebox="0" id="schduleDay1" class="schduleItems list"></ul><ul data-schdulebox="1" id="schduleDay2" class="schduleItems list"></ul><ul data-schdulebox="2" id="schduleDay3" class="schduleItems list"></ul></div>
				
				
		
			</div>
		

		</div>

		<div class="selectViews ">
			<div class="center setPlanet">
				<div class="planetName "><!-- 選擇星球 -->
					<span class="chinese" id="planet">
						　　　
					</span>
				</div>

				<div class="editImg canselFloat editPlanets">
					<img src="img/planning/edit2.png">
				</div>
			</div>
<!-- 			<div class="selectPlanets chinese " href="#">
				<span>
					選擇星球
				</span>
			</div> -->

			<div class="clearfix"></div>
			<div class="borderStyle chinese tagsBox">
				<div class="tagList">
					<ul id="taglist">
						<li class="focusStyle">全部</li>
						<li>知性</li>
						<li>冒險</li>
						<li>科技</li>
						<li>人文</li>
						<li>美食</li>
					</ul>
				</div>
			</div>

			<div class="borderStyle transparentTop viewsBox">
				<div class="views chinese">
					<ul id="viewsUl" class="aa">
						<!-- <li data-view="1" class="viewLi ">
							<div class="imgBorderStyle viewsBoxSetting">
								<div class="viewContent">
									<div class="viewImgBox">
									<img src="img/planning/p1_v1_03.jpg">
									</div>
									<div class="tagBox">
										<span class="tag int">知性</span>
										<span class="tag fod">美食</span>
									</div>
									<p class="viewTitle" >太空清真寺</p>
									<p>與太空最接近的寺</p>
								</div>
								<span class="chinese addSchdule">
									+<input type="radio" name="views" id="view1">
									
									<span class="mobiTxt">
									加入景點
									</span>
								</span>
								<span class="chinese viewInfo">
									<img src="img/planning/info.png">
								</span>
							</div>
						</li> -->
						
					</ul>
					<!-- <div class="borderStyle viewIntroduce ">
						<div class="viewName chinese">
							<span>X</span>
							<p >水上清真寺</p>
							<span>+</span>
						</div>
						<div>
							<div class="borderStyle viewImg">
								<img src="img/planning/p1_v1_03.jpg">
							</div>
							<div class="borderStyle viewDescrip chinese">
								<p>簡介</p>
								<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis explicabo natus hic, sequi, nobis fugiat autem harum, blanditiis praesentium nemo facilis aliquid quasi voluptas error. Distinctio, deleniti repellat facilis eligendi!</span>
								<span>Odit optio quisquam nihil fugiat voluptatum adipisci obcaecati ullam in hic quaerat expedita, facilis sed itaque! Accusantium, modi unde iste neque blanditiis voluptatem delectus veniam eos eligendi rerum expedita laboriosam!</span>
								<span>Consectetur sunt maxime, ab asperiores quis veniam, voluptas inventore non tempore rem officia voluptatibus reiciendis voluptatem fugiat, nihil unde enim porro doloribus nulla qui mollitia natus ea perspiciatis! Impedit, deleniti?</span></p>
							</div>
						</div>
					</div> -->

				</div>
				<div class="viewFilter">
					
				</div>
			</div>

		</div>
		<div class="clearfix"></div>
	 </div>
	</div>


 </content>
<div class="expertFilter">	
		<div class="expert">
				
				<div class="borderStyle expertBorder viewBorderStyle">
					<div class="chinese expertTitle">
					<span>
						專家推薦
					</span>
					</div>
					<div class="expertList">
						<div class="expertBoxDel">
							<img src="img/planning/clear-button-blue.png">
						</div>
						<ul>
						<!-- 	<li>
								<div class="positionRE">
									<div class="expertImg">
										<img src="img/expPic/103.jpg">
									</div>
									<div class="expertNameBG ">
										
									</div>
									<span class="expertName chinese">
											火仙子
									</span>

									<div class="expertBtn">
										<span class="chinese" data-expert="101">
											選擇
										</span>
									</div>
								</div>
							</li> -->
							
							<!-- <li>
								<div class="positionRE">
									<div class="expertImg">
										<img src="img/expPic/102.jpg">
									</div>
									<div class="expertNameBG ">
										
									</div>
									<span class="expertName chinese">
											水仙子
									</span>

									<div class="expertBtn">
										<span class="chinese" data-expert="102">
											選擇
										</span>
									</div>
								</div>
							</li>
							<li>
								<div class="positionRE">
									<div class="expertImg">
										<img src="img/expPic/101.jpg">
									</div>
									<div class="expertNameBG ">
										
									</div>
									<span class="expertName chinese">
											水仙子
									</span>

									<div class="expertBtn">
										<span class="chinese" data-expert="103">
											選擇
										</span>
									</div>
								</div>
							</li> -->
						</ul>
					</div>
				</div>
				<span class="cancelBtn chinese">x</span>
			</div>
</div>

 <div class="clearfix"></div>
<div class="chinese commit">
	<span class="Btn  saveBtn">挑選專家</span>
</div>

<footer>
        
        <!-- <img src="img/footerbg-1.png"> -->
        <div class="copyright">
            <p>copyright@OhPlanets  2145</p>
        </div>
        
</footer>

<!-- 拖拉js -->
 <script type="text/javascript">

	

	

				
		

	 
	// Sortable.create(document.getElementById('schduleDay1'), {
 //                                animation: 150,
 //                            });
	// Sortable.create(document.getElementById('schduleDay2'), {
 //                                animation: 150,
 //                            });
	// Sortable.create(document.getElementById('schduleDay3'), {
 //                                animation: 150,
 //                            });

</script>
<!-- 月曆jquery -->
<script type="text/javascript">


 	$(function() {

    $('.calendar').pignoseCalendar({
		theme: 'dark', // light, dark, blue
		lang:'ch',
		buttons:true,//style在calender.css 361行

	});
});
</script>
<script type="text/javascript">
		// window.addEventListener('load',doFirst2);
          window.addEventListener('load',doFirst);
          
</script>
<script>
    //    登入下拉選單
      $(function () {
           $('.memberSign').click(function(){
              $('.memberSelect').toggle();
              $('.memberSign a').toggleClass("active")
          });
      });
   </script>
            

    <!-- script -->
    <script src="js/tween.js"></script>

<script>
var planetFilter = document.querySelector('.planetFilter');
var selectP = document.querySelector('.planetLightBox');
var txt = selectP.querySelectorAll('li');

$('.setPlanet').click(function(){
	var planetName = document.querySelector('.planetName');
	
		$('.confirmPlanetBox').css('display','block');
	var x =sessionStorage.getItem("planet");

	// var a = confirm('更換星球將會重置所有天數、景點與行程');

		$('.planetyesBtn').click(function(){
			$('.confirmPlanetBox').css('display','none');
			$('.planetFilter').css('display','block');
			

			$('.selectPlanet').click(function(){

				
			// var $txt = $(this).find('p').text();
			// sessionStorage.setItem("planet", $txt);
			var txt = this.querySelector('p');
			sessionStorage.setItem("planet", txt.innerHTML);

			planetName.innerHTML = x;
			// planetFilter.style.display='none';
			window.location.reload();

				});



		
			
		});
		$('.planetnoBtn').click(function(){
			$('.confirmPlanetBox').css('display','none');
			});

});





//確認會員編號
	// var memNo =1;
// $('#schduleTrig').click(function(){
// 	$('.mySchduleList li').remove();
// 	var $memNo =1;
// 	// alert($memNo);

// 		if($memNo !=null){

// $.ajax({
// 			url: 'php/takeMemberSch.php',
// 			dataType:'text',
// 			type:'POST',
// 			// async: false,
// 			data:{
// 					memNo:$memNo,
// 					},
// 			success:function(data){

// 				$('.mySchduleList').append(data);


// 				//點選匯入天數OR日期
// 				$('.mySchduleList').find('li').click(function(){
// 					$scheduleNo=$('.mySchduleList').find(this).data('num');
// 					// console.log($a);
// 						$.ajax({
// 					url: 'php/takeDays.php',
// 					dataType:'text',
// 					type:'POST',
// 					// async: false,
// 					data:{
// 							scheduleNo:$scheduleNo,
							
// 							},
// 					success:function(data){
// 						console.log($scheduleNo);
// 						$('#day li').remove();
// 						$('#day').append(data);
						

						
// 						sessionStorage.setItem('date',$('#depTime').val());
// 						sessionStorage.setItem('planetName',$('#planetNA').val());
// 						sessionStorage.setItem('schduleNo',$scheduleNo);
// 						console.log($('#depTime').val());
// 						console.log($('#planetNA').val());
// 						$('#depTime').remove();
// 						$('.schduleIN').css('display','none');

// 						},

// 					error:function(xhr, ajaxOptions, thrownError)
// 					{ 
// 					alert("error");
// 					alert(xhr.status); 
// 					alert(thrownError);  
// 					}


// 				});

						


// 				});
				

//取php session
	










// 				},

// 			error:function(xhr, ajaxOptions, thrownError)
// 			{ 
// 			alert("error");
// 			alert(xhr.status); 
// 			alert(thrownError);  
// 			}


// 		});


// 	}
	// window.onbeforeunload
// window.onunload = function(){
	// let confirm=window.confirm('重新整理將遺失所有紀錄');
// 	if(confirm==true){
// 		sessionStorage.setItem("planet", '瓦特星');	
// 	sessionStorage.removeItem("scheduleNo");
// };

	// var confirm = window.confirm('重新整理將遺失所有紀錄');
// };
window.onbeforeunload = function(){
	// let confirm = window.confirm('重新整理將遺失所有紀錄');
	// if(confirm==true){
		
		
		var aa=document.querySelector('.planetFilter');
		var bb = document.querySelector('.expertFilter');
		// $('.confirmPlanetBox').css('display','block');
		if(aa.style.display!='block' && bb.style.display!='block'){
			sessionStorage.setItem("planet", '瓦特星');
			
			sessionStorage.removeItem("viewNo");	
			sessionStorage.removeItem("scheduleNo");
			sessionStorage.removeItem("indexViewNo");
			sessionStorage.removeItem('date');
			return '';
		}else{
			sessionStorage.removeItem("viewNo");
			sessionStorage.removeItem("scheduleNo");
			sessionStorage.removeItem("indexViewNo");
			sessionStorage.removeItem('date');

		}
		
}

$.ajax({
					url: 'php/getSession.php',
					dataType:'text',
					type:'POST',
					async: false,
					
					success:function(data){
						// console.log(data);
						$('.input').append(data);
						// console.log($('.input input')[0]);
						// console.log($('.input input')[1]);
						// console.log($('.input input')[2]);
						

						
						if($('.input .indexViewNo').val()!=''){
							sessionStorage.setItem("indexViewNo", $('.input .indexViewNo').val());
							
							}
						if($('.input .scheduleNo').val()!=''){
							sessionStorage.setItem("scheduleNo", $('.input .scheduleNo').val());
							
							
							}
						if($('.input .planet').val()!=''){
							sessionStorage.setItem("planet", $('.input .planet').val());
							console.log($('.input .planet').val());
							
							}
						
						},

					error:function(xhr, ajaxOptions, thrownError)
					{ 
					alert("error");
					alert(xhr.status); 
					alert(thrownError);  
					}


				});

// };
	// console.log($('.schdule1').data("num"));
	// console.log($(this).data("num"));
	// var dataNum = document.querySelectorAll('[data-num="''"]')
	// $('[data-set]')
	//首頁插入1個景點
// if (sessionStorage.getItem('viewNo')!=null) {
// 	var $scheduleNo = sessionStorage.getItem('scheduleNo');


	
// 	$.ajax({
// 					url: 'php/view.php',
// 					dataType:'text',
// 					type:'POST',
// 					// async: false,
// 					data:{
// 							viewNo:$viewNo,
							
// 							},
// 					success:function(data){
// 						// sessionStorage.setItem("view", data);

// 						},

// 					error:function(xhr, ajaxOptions, thrownError)
// 					{ 
// 					alert("error");
// 					alert(xhr.status); 
// 					alert(thrownError);  
// 					}


// 				});
// }
//獲得星球匯入景點
if (sessionStorage.getItem('scheduleNo')!=null &&sessionStorage.getItem('scheduleNo')!='') {
	var $scheduleNo = sessionStorage.getItem('scheduleNo');


	
	$.ajax({
					url: 'php/getPlanet.php',
					dataType:'text',
					type:'POST',
					async: false,
					data:{
							scheduleNo:$scheduleNo,
							
							},
					success:function(data){
						sessionStorage.setItem("planet", data);

						},

					error:function(xhr, ajaxOptions, thrownError)
					{ 
					alert("error");
					alert(xhr.status); 
					alert(thrownError);  
					}


				});
}

if(sessionStorage.getItem("planet")==null ||sessionStorage.getItem("planet")==''){
		sessionStorage.setItem("planet", '瓦特星');
	}
	
	var $planet =sessionStorage.getItem("planet");
	console.log($planet);
	// var $scheduleNo =sessionStorage.getItem("scheduleNo");
		$.ajax({



			url: 'php/getViews.php',
			dataType:'text',
			type:'POST',
			async: false,
			data:{
					planet:$planet,
					
					},
			success:function(data){

				$('#viewsUl').append(data);






				//取景點資訊
			$('.viewInfo').click(function(){

				$('.viewFilter').css('display','block');
			

			$viewName = $(this).parent().find('.viewTitle').text();

			console.log($viewName);

		$.ajax({
			url: 'php/getViewsInfo.php',
			dataType:'text',
			type:'POST',
			async: false,
			data:{
					viewName:$viewName,
					
					},
			success:function(data){

				$('.viewFilter').append(data);
				$('.addViewImg').click(function(){
					$('.viewFilter').css('display','none');
					// $('.viewIntroduce').remove();
				});

				$('.viewName span').click(function(){	
					$('.viewFilter').css('display','none');
					$('.viewIntroduce').remove();
					});

				},

			error:function(xhr, ajaxOptions, thrownError)
			{ 
			alert("error");
			alert(xhr.status); 
			alert(thrownError);  
			}


		});
	});

//取景點資訊
			//mobile查看景點

			if (window.innerWidth<1000){
			$('.viewContent').click(function(){

				$('.viewFilter').css('display','block');
			

			$viewName = $(this).parent().find('.viewTitle').text();

			console.log($viewName);

		$.ajax({
			url: 'php/getViewsInfo.php',
			dataType:'text',
			type:'POST',
			data:{
					viewName:$viewName,
					
					},
			success:function(data){

				$('.viewFilter').append(data);
				$('.addViewImg').click(function(){
					$('.viewFilter').css('display','none');
				});

				$('.viewName span').click(function(){	
					$('.viewFilter').css('display','none');
					});

				},

			error:function(xhr, ajaxOptions, thrownError)
			{ 
			alert("error");
			alert(xhr.status); 
			alert(thrownError);  
			}


		});
	});

}

		


			},

			error:function(xhr, ajaxOptions, thrownError)
			{ 
			alert("error");
			alert(xhr.status); 
			alert(thrownError);  
			}


	});



	// var schMoveIn =	document.querySelector('.schMoveInBox');
	// var $memNo =sessionStorage.getItem("memNo");

	//行程匯入
	// $('.schMoveInBox').click(function(){
		// $takeData = 3;
		// $.ajax({
		// 	url: 'php/takeData.php',
		// 	dataType:'text',
		// 	type:'POST',
		// 	data:{
		// 			takeData:$takeData,
					
		// 			},
		// 	success:function(data){
		// 		$('#schduleUl ul').remove();
		// 		$('#schduleUl').append(data);
		// 		var $schUl = $('#schduleUl ul');
		// 			// var $transJson=JSON.parse(data);
		// 			console.log($('#schduleUl ul').length);
		// 		$('.schduleEmptyTxt').css('display','none');	
		// 			// console.log($('#schduleUl ul'));
		// 	// Sortable.create(document.getElementById('day'), {
  //  //                              animation: 150,
  //  //                          });	
		// 	for(var i=1;i<$('#schduleUl ul').length;i++){
		// 		Sortable.create(document.getElementById('schduleDay'+i), {
  //                               animation: 150,
  //                    });

		// 	}
		// 		$('.deleteIcon').on('click',restoreView);

		// 		},

		// 	error:function(xhr, ajaxOptions, thrownError)
		// 	{ 
		// 	alert("error");
		// 	alert(xhr.status); 
		// 	alert(thrownError);  
		// 	}


		// });


	// });
	
	//引入專家.saveBtn

	// if( isset($_SESSION["MEM_NAME"]) === true ){ //已登入
 //        echo '<span id="memName">', $_SESSION["MEM_NAME"], '</span>';
 //        echo '<span id="spanLogin">登出</span>';
 //      }
$('#spanLogin').click(function(){
	// sessionStorage.removeItem("memNo");
});


	$('.saveBtn').click(function(){

$.ajax({
					url: 'php/getmemNo.php',
					dataType:'text',
					type:'POST',
					async: false,
					success:function(data){
							sessionStorage.setItem('memNo',data);
						
						},

					error:function(xhr, ajaxOptions, thrownError)
					{ 
					alert("error");
					alert(xhr.status); 
					alert(thrownError);  
					}


				});

var memNo=sessionStorage.getItem('memNo');
	
	console.log(memNo);








		if(memNo==null ||memNo==''||memNo==undefined){
			alert('請先登入會員'); 
		}else{


						var sch={};
										var dateSpan = document.querySelectorAll('.date');
														
												var firstDay = dateSpan[0].innerHTML;
													firstDay = firstDay.replace("年","-");
													firstDay = firstDay.replace("月","-");
													firstDay = firstDay.replace("日","");
												var num = dateSpan.length-1;
												var lastDay = dateSpan[num].innerHTML;
													lastDay = lastDay.replace("年","-");
													lastDay = lastDay.replace("月","-");
													lastDay = lastDay.replace("日","");
													// console.log(firstDay);
													// console.log(lastDay);
										var schName=document.querySelector('.searchSchdule p').innerHTML;
										var planetName = document.querySelector('.planetName').innerHTML;
										var schViewUls = document.querySelectorAll('.list');
										var dayLiOrder = document.querySelectorAll('#day li');
										sch.name = schName;
										sch.depTime = firstDay;
										sch.arrTime = lastDay;
										sch.planetName = planetName.trim();
										sch.share=0;
										sch.memNo = memNo;
										sch.messageNum =0;
										sch.itineraryPic='p1_v1_03.jpg';
										sch.daysData=[];

										for(var i =0;i<schViewUls.length;i++){
											
											var dayLiSet = dayLiOrder[i].dataset.daybox;
											// console.log(dayLiSet);
											var schViews = document.querySelectorAll('[data-schdulebox="'+dayLiSet+'"] li p');
											// console.log(schViews);
												sch.daysData[i]=[];
												for(var j=0;j<schViews.length;j++){
													
												sch.daysData[i][j]=schViews[j].innerHTML.trim();
												
												}
												
											
										}
										console.log(sch);


										if (sch.arrTime=='尚未選擇期' || sch.name=='' ){
												alert('請確認日期、行程名稱已填寫');
											}else{

												alert('選完專家後將會跳至會員專區');
											






				$('.expertFilter').css('display','block');

				$('.expertBoxDel').click(function(){
					$('.expertFilter').css('display','none');
				});
				
				$('.expertBtn span').click(function(){
					
					// alert($(this).data('expert'));
					var $expertNo = $(this).data('expert');
					// console.log($expertNo);
				});
					//選專家
					var $expertPlanet =$('.planetName').text();
					console.log($expertPlanet);
					$.ajax({
								url: 'php/schExpert.php',
								dataType:'text',
								type:'POST',
								data:{
										expertPlanet:$expertPlanet,
										
										},
								success:function(data){
									
									$('.expertList ul').html(data);

									$('.expertBtn span').click(function(){
										sch.expertNo= $(this).data('expert');
										console.log(sch);
											
										
											
										var jsonStr = JSON.stringify(sch);
									 	  // document.write(jsonStr);
									    var xhr=new XMLHttpRequest();
									    xhr.onload=function (){
									       if( xhr.status == 200 ){
									       	alert('儲存成功');
									       	location.href='member_mytrip.php';
										       	}else{
										          alert( xhr.status );
										       	}
									  		}	

										    xhr.open("POST", "php/scheduleAdd.php",true);
										    xhr.setRequestHeader("content-type","application/x-www-form-urlencoded"); 
										    xhr.send("schedules="+jsonStr);

									 		
										

									});









									},

								error:function(xhr, ajaxOptions, thrownError)
								{ 
								alert("error");
								alert(xhr.status); 
								alert(thrownError);  
								}


							});
						}
			// 	$('.saveDataBox').css('display','none');			
			// });

			$('.saveDatanoBtn').click(function(){


				$('.saveDataBox').css('display','none');
			});

		
		}
	});
		
// $takeData = 3;
// $.ajax({
// 					url: 'php/takeDays.php',
// 					dataType:'text',
// 					type:'POST',
// 					data:{
// 							takeData:$takeData,
							
// 							},
// 					success:function(data){
// 						$('#day li').remove();
// 						$('#day').append(data);
// 						console.log($('#depTime').val());

						
// 						sessionStorage.setItem('date',$('#depTime').val());
						
// 						},

// 					error:function(xhr, ajaxOptions, thrownError)
// 					{ 
// 					alert("error");
// 					alert(xhr.status); 
// 					alert(thrownError);  
// 					}


// 				});

// sessionStorage.setItem("scheduleNo", 3);
// if(sessionStorage.getItem('scheduleNo')!=null){
// 	var $scheduleNo = sessionStorage.getItem('scheduleNo');

// }

//引入天數
if(sessionStorage.getItem('scheduleNo')!=null&&sessionStorage.getItem('scheduleNo')!=''){

	var $scheduleNo = sessionStorage.getItem('scheduleNo');
console.log($scheduleNo);
$.ajax({
					url: 'php/takeDays.php',
					dataType:'text',
					type:'POST',
					// async: false,
					data:{
							scheduleNo:$scheduleNo,
							
							},
					success:function(data){
						console.log($scheduleNo);
						$('#day li').remove();
						$('#day').append(data);
						

						
						// sessionStorage.setItem('date',$('#depTime').val());
						// sessionStorage.setItem('planetName',$('#planetNA').val());
						sessionStorage.setItem('schduleNo',$scheduleNo);
						// console.log($('#depTime').val());
						// console.log($('#planetNA').val());
						// $('#depTime').remove();
						// $('.schduleIN').css('display','none');
							
						},

					error:function(xhr, ajaxOptions, thrownError)
					{ 
					alert("error");
					alert(xhr.status); 
					alert(thrownError);  
					}


				});

}















</script>
<script type="text/javascript">
	var daycount = document.querySelectorAll('#day li').length;
	console.log(daycount);
	if(window.innerWidth<1000){
	Sortable.create(document.getElementById('day'), {
                                animation: 150,
                                delay: 300,
                            });	
	for(var i=1;i<daycount;i++){
		Sortable.create(document.getElementById('schduleDay'+i), {
                                animation: 150,
                                delay: 300,
                            });
		
                           
		}



	}else{
			Sortable.create(document.getElementById('day'), {
                                animation: 150,
                            });	
			for(var i=1;i<=daycount;i++){
		Sortable.create(document.getElementById('schduleDay'+i), {
                                animation: 150,
                                
                            });
		console.log(i);
		}
}
</script>
   <script src="js/style.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
</body>
</html>