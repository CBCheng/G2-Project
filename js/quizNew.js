//開場打字動畫JS
// Wrap every letter in a span
$('.ml11 .letters').each(function(){
	$(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
  });
  
  anime.timeline({loop: false})
	.add({
	  targets: '.ml11 .mlline',
	  scaleY: [0,1],
	  opacity: [0.5,1],
	  easing: "easeOutExpo",
	  duration: 700
	})
	.add({
	  targets: '.ml11 .mlline',
	  translateX: [0,$(".ml11 .letters").width()],
	  easing: "easeOutExpo",
	  duration: 700,
	  delay: 100
	}).add({
	  targets: '.ml11 .letter',
	  opacity: [0,1],
	  easing: "easeOutExpo",
	  duration: 600,
	  offset: '-=775',
	  delay: function(el, i) {
		return 34 * (i+1)
	  }
	}).add({
	  targets: '.ml11',
	  opacity: 0,
	  duration: 1000,
	  easing: "easeOutExpo",
	  delay: 1000
	});


//星星套件JS==================================================================
particlesJS("particles-js", 
	{"particles":{"number":{"value":50,"density":{"enable":true,"value_area":800}},
	 "color":{"value":"#FFF"},
	 "shape":{"type":"circle",
	 "stroke":{"width":0,"color":"#000000"},
	 "polygon":{"nb_sides":5},
	 "image":{"src":"260x1000a0a0.png","width":200,"height":200}},
	 "opacity":{"value":1,"random":true,
	 "anim":{"enable":true,"speed":1,"opacity_min":0,"sync":false}},
	 "size":{"value":2,"random":true,
	 "anim":{"enable":false,"speed":4,"size_min":0.3,"sync":false}},
	 "line_linked":{"enable":false,"distance":150,"color":"#ffffff",
	 "opacity":0.4,"width":1},
	 "move":{"enable":true,"speed":5,"direction":"none","random":true,"straight":false,"out_mode":"out","bounce":true,"attract":{"enable":false,"rotateX":600,"rotateY":600}}},
	 "interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"bubble"},
	 "onclick":{"enable":false,"mode":"repulse"},"resize":true},
	 "modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},
	 "bubble":{"distance":250,"size":0,"duration":2,"opacity":0,"speed":3},
	 "repulse":{"distance":400,"duration":0.4},
	 "push":{"particles_nb":4},
	 "remove":{"particles_nb":2}}},"retina_detect":true});
//===============================================================================================================================
//選取物件
var section5 = document.querySelectorAll('.sectionQuiz5')[0];
var section4 = document.querySelectorAll('.sectionQuiz4')[0];
var section3 = document.querySelectorAll('.sectionQuiz3')[0];
var section2 = document.querySelectorAll('.sectionQuiz2')[0];
var section1 = document.querySelectorAll('.sectionQuiz1')[0];
var ml11 = document.querySelectorAll('.ml11')[0];
// var section = document.querySelectorAll('.sectionQuiz')[0];
var particlesBg = document.querySelector('#particles-js');
var genderBtn =document.querySelectorAll('.genderBtn h5');
var alienBtn = document.querySelectorAll('.alienBtn h5');
var landscapeBtn = document.querySelectorAll('.landscape h5');
// var daysBtn = document.querySelectorAll('.daysGroup');
var timeId5,timeId4,timeId2;
var scaleValue5 = 1;
var scaleValue4 = 0;
var opacityValue = 1;
////延遲畫面開始================================================

function doFirst(){
	// section.style.display = 'none';
	setTimeout(function(){

		// section5.style.display = 'block';
		$('.sectionQuiz5').fadeIn(1000);
		ml11.style.display = 'none';
	},3500)
    //quiz1->quiz2動畫
    for(var i=0;i<genderBtn.length;i++){
        genderBtn[i].onclick = changeSpeed;
    }
    //quiz2->quiz3動畫
    for(var i=0;i<alienBtn.length;i++){
        alienBtn[i].onclick = movePositionL;
    }
    //quiz3->quiz4動畫
    var theLands = document.querySelectorAll(".theLands");
    for(var i=0;i<theLands.length;i++){
        theLands[i].onclick = movePositionR;
	}
	//quiz4->quiz5動畫
	var thedays = document.querySelectorAll(".thedays");
	for(var i=0;i<thedays.length;i++){
		thedays[i].onclick = changeOpacitySpeed;
	}

    
}
//quiz1->quiz2過場動畫================================================================
function changefadeOut(){
    scaleValue5 -=  0.05;
     if(scaleValue5 < 0.1){
         clearInterval(timeId5);
         section5.style.display = 'none';
         timeId4 = setInterval(changefadeIn,10);
     }else{
         section5.style.transform = 'scale('+scaleValue5+')';
     }
}

function changefadeIn(){
        scaleValue4 += 0.05;
        if(scaleValue4 > 1.05 ){
            console.log(scaleValue4);
            clearInterval(timeId4);               
        }else{
			section4.style.display = 'block';
            section4.style.opacity = 1;
			section4.style.transform = 'scale('+scaleValue4+')';
			section3.style.display = 'block';
        }
}
function changeSpeed(){
    timeId5 = setInterval(changefadeOut,10);
}

//quiz2->quiz3過場動畫======================================================================='
function movePositionL(){
    
    section3.style.left = 0;
    section3.style.top = 0;
    section3.style.transitionDuration = 0.5+'s';
    section4.style.left = '-'+100+'%';
    section4.style.top = 100+'%';
	section4.style.transitionDuration = 0.5+'s';
	section2.style.display = 'block';
}
//quiz3->quiz4過場動畫=======================================================================
function movePositionR(e){
	//取得quiz3的值
 	var land = e.target.dataset.set;
 	document.getElementById("landValue").value = land;
	console.log(document.getElementById("landValue").value);
	
	// quiz3->quiz4過場動畫
    section2.style.left = 0;
    section2.style.top = 0;
    section2.style.transitionDuration = 0.5+'s';
    section3.style.left = 100+'%';
    section3.style.top = 100+'%';
	section3.style.transitionDuration = 0.5+'s';
	section1.style.display = 'block';
}
//=========================================================================
//quiz4 hover效果
	//3天按鈕
	
	var thedays3 = document.querySelectorAll(".thedays")[0];
	thedays3.addEventListener('mouseenter',function(){
		var cirCenter = document.querySelectorAll('.cirCenter')[0];
		var cirMiddle = document.querySelectorAll('.cirMiddle')[0];
		var cirBorder = document.querySelectorAll('.cirBorder')[0];
		cirCenter.classList.add('hoverCirCenter');
		cirMiddle.classList.add('hoverCirMiddle');
		cirBorder.classList.add('hoverCirBorder');
		
	})
	thedays3.addEventListener('mouseleave',function(){
		var cirCenter = document.querySelectorAll('.cirCenter')[0];
		var cirMiddle = document.querySelectorAll('.cirMiddle')[0];
		var cirBorder = document.querySelectorAll('.cirBorder')[0];
		cirCenter.classList.remove('hoverCirCenter');
		cirMiddle.classList.remove('hoverCirMiddle');
		cirBorder.classList.remove('hoverCirBorder');
	})
	//5天按鈕
	var thedays5 = document.querySelectorAll(".thedays")[1];
	thedays5.addEventListener('mouseenter',function(){
		var cirCenter = document.querySelectorAll('.cirCenter')[1];
		var cirMiddle = document.querySelectorAll('.cirMiddle')[1];
		var cirBorder = document.querySelectorAll('.cirBorder')[1];
		cirCenter.classList.add('hoverCirCenter');
		cirMiddle.classList.add('hoverCirMiddle');
		cirBorder.classList.add('hoverCirBorder');
		
	})
	thedays5.addEventListener('mouseleave',function(){
		var cirCenter = document.querySelectorAll('.cirCenter')[1];
		var cirMiddle = document.querySelectorAll('.cirMiddle')[1];
		var cirBorder = document.querySelectorAll('.cirBorder')[1];
		cirCenter.classList.remove('hoverCirCenter');
		cirMiddle.classList.remove('hoverCirMiddle');
		cirBorder.classList.remove('hoverCirBorder');
	})
//========================================================================
function showQuiz(jsonStr){
		var scheduleRow = JSON.parse(jsonStr);
		console.log(scheduleRow.schPlanet);
		//星球結果
		var resultPlanet= document.getElementById("resultPlanet");
		resultPlanet.innerHTML=scheduleRow.planetName;
		//行程名稱結果
		var resultName= document.getElementById("resultName");
		resultName.innerHTML=scheduleRow.scheduleName;
		//行程星球圖片
		// var resultPlanetPic= document.getElementById("resultPlanetPic").src;
		
		// document.getElementById("resultPlanetPic").src.replace("resultSan","");
		// document.getElementById("resultPlanetPic").src="http://127.0.0.1/phpLab/G2-Project/img/poa/resultWater.png";
		document.getElementById("resultPlanetPic").setAttribute("src","img/poa/"+scheduleRow.quizPlanetPic+".png");
		console.log(document.getElementById("resultPlanetPic").src);
		// resultPlanetPic.replace(/resultSan/,'resultWater');

		//行程背景圖片
		document.getElementById("resultPic").setAttribute("src","img/poa/"+scheduleRow.quizPic+".jpg");
		console.log(document.getElementById("resultPic").src);
		
}
//========================================================================
// quiz4->quiz5過場動畫
function changeOpacitySpeed(e){
    if( e.target.nodeName == "SPAN"){
    	var day = e.target.parentNode.dataset.set;
    }else{
    	var day = e.target.dataset.set;
    }
	
	console.log("=========", day)
	timeId2 = setInterval(changeOpacity,50);

	//quiz4的ajax
	var xhr = new XMLHttpRequest();
	xhr.onload = function(){
		if(xhr.status == 200){
			// alert(xhr.responseText);
			//問題1==================================================================
			// document.getElementById("wrapQuiz").appendChild(xhr.responseText);
			//問題1==================================================================
			console.log(xhr.responseText);
			showQuiz(xhr.responseText);



		}else{
			alert(xhr.status);
		}
	}
	var land = document.getElementById("landValue").value;
	xhr.open("post","php/quizNew.php",true);
	xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	var data_info = "schFullDay=" + day +"&schPlanet=" + land;
	xhr.send(data_info);
}
function changeOpacity(){
	opacityValue -= 0.03
	
	if(opacityValue < 0 ){
		clearInterval(timeId2);
		section2.style.display = 'none';
		section1.classList.add('activeDown');
		// particlesBg.style.backgroundImage ='url("img/poa/quizResultBg.png")';
		
		section1.addEventListener('webkitAnimationEnd',function(){
			section1.style.top = 0;
		})
	}else{
		section2.style.opacity = opacityValue;
	}
}




window.addEventListener('load',doFirst,false);