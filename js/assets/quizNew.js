//套件JS
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

//選取物件
var section5 = document.querySelectorAll('.sectionQuiz5')[0];
var section4 = document.querySelectorAll('.sectionQuiz4')[0];
var section3 = document.querySelectorAll('.sectionQuiz3')[0];
var section2 = document.querySelectorAll('.sectionQuiz2')[0];
var section1 = document.querySelectorAll('.sectionQuiz1')[0];
var particlesBg = document.querySelector('#particles-js');
var genderBtn =document.querySelectorAll('.gender div');
var alienBtn = document.querySelectorAll('.alien div');
var landscapeBtn = document.querySelectorAll('.landscape div');
var daysBtn = document.querySelectorAll('.daysGroup');
var timeId5,timeId4,timeId2;
var scaleValue5 = 1;
var scaleValue4 = 0;
var opacityValue = 1;

function doFirst(){
    //quiz1->quiz2動畫
    for(var i=0;i<genderBtn.length;i++){
        genderBtn[i].onclick = changeSpeed;
    }
    //quiz2->quiz3動畫
    for(var i=0;i<alienBtn.length;i++){
        alienBtn[i].onclick = movePositionL;
    }
    //quiz3->quiz4動畫
    for(var i=0;i<landscapeBtn.length;i++){
        landscapeBtn[i].onclick = movePositionR;
	}
	//quiz4->quiz5動畫
	for(var i=0;i<daysBtn.length;i++){
		daysBtn[i].onclick = changeOpacitySpeed;
	}
    
}
//================================================================
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
        if(scaleValue4 >= 1 ){
            console.log(scaleValue4);
            clearInterval(timeId4);               
        }else{
            section4.style.opacity = 1;
            section4.style.transform = 'scale('+scaleValue4+')';
        }
}
function changeSpeed(){
    timeId5 = setInterval(changefadeOut,10);
}

//======================================================================='
function movePositionL(){
    // section3.style.display = 'block';
    section3.style.left = 0;
    section3.style.top = 0;
    section3.style.transitionDuration = 0.5+'s';
    section4.style.left = '-'+100+'%';
    section4.style.top = 100+'%';
    section4.style.transitionDuration = 0.5+'s';
}
//=======================================================================
function movePositionR(){
    section2.style.left = 0;
    section2.style.top = 0;
    section2.style.transitionDuration = 0.5+'s';
    section3.style.left = 100+'%';
    section3.style.top = 100+'%';
    section3.style.transitionDuration = 0.5+'s';
}
//=========================================================================
//quiz4 hover效果
	//3天按鈕
	var daysGroupBtn = document.querySelectorAll('.daysGroup')[0];
	daysGroupBtn.addEventListener('mouseenter',function(){
		var cirCenter = document.querySelectorAll('.cirCenter')[0];
		var cirMiddle = document.querySelectorAll('.cirMiddle')[0];
		cirCenter.classList.add('hover1');
		cirMiddle.classList.add('hover2');
		
	})
	daysGroupBtn.addEventListener('mouseleave',function(){
		var cirCenter = document.querySelectorAll('.cirCenter')[0];
		var cirMiddle = document.querySelectorAll('.cirMiddle')[0];
		cirCenter.classList.remove('hover1');
		cirMiddle.classList.remove('hover2');
	})
	//5天按鈕
	var daysGroupBtn = document.querySelectorAll('.daysGroup')[1];
	daysGroupBtn.addEventListener('mouseenter',function(){
		var cirCenter = document.querySelectorAll('.cirCenter')[1];
		var cirMiddle = document.querySelectorAll('.cirMiddle')[1];
		cirCenter.classList.add('hover1');
		cirMiddle.classList.add('hover2');
		
	})
	daysGroupBtn.addEventListener('mouseleave',function(){
		var cirCenter = document.querySelectorAll('.cirCenter')[1];
		var cirMiddle = document.querySelectorAll('.cirMiddle')[1];
		cirCenter.classList.remove('hover1');
		cirMiddle.classList.remove('hover2');
	})
//========================================================================
// quiz4->quiz5
function changeOpacitySpeed(){
	timeId2 = setInterval(changeOpacity,50);
	console.log('ok');
}
function changeOpacity(){
	opacityValue -= 0.03
	
	if(opacityValue < 0 ){
		clearInterval(timeId2);
		section2.style.display = 'none';
		section1.classList.add('activeDown');
		particlesBg.style.backgroundImage ='url("img/quizResultBg.png")';
		
		section1.addEventListener('webkitAnimationEnd',function(){
			section1.style.top = 0;
		})
	}else{
		section2.style.opacity = opacityValue;
	}
}

window.onload = doFirst;