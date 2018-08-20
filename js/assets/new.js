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
// var count_particles, stats, update; 
// stats = new Stats; 
// stats.setMode(0); 
// stats.domElement.style.position = 'absolute'; 
// stats.domElement.style.left = '0px'; 
// stats.domElement.style.top = '0px'; 
// document.body.appendChild(stats.domElement); 
// count_particles = document.querySelector('.js-count-particles'); 
// update = function() { 
// 	stats.begin(); stats.end(); 
// 	if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { 
// 		count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; 
// 	} 
// 	requestAnimationFrame(update); 
// }; 
// 	requestAnimationFrame(update);;

function doFirst(){
	//選取區域
	var genderBtn = document.querySelectorAll('.gender div');
	var alienBtn = document.querySelectorAll('.alien div');
	var landscapeBtn = document.querySelectorAll('.landscape div');
	var daysGroupBtn = document.querySelectorAll('.daysGroup');
	var wrapQuiz = document.querySelectorAll('.wrapQuiz')[0];
	
	//quiz1點擊事件
	for(var i=0;i<genderBtn.length;i++){
			genderBtn[i].addEventListener('click',function(){
				wrapQuiz.style.marginTop = -2550+'px';
		})
	}
	//quiz2點擊事件
	for(var i=0;i<alienBtn.length;i++){
			alienBtn[i].addEventListener('click',function(){
				wrapQuiz.style.marginTop = -1700+'px';
		})
	}
	//quiz3點擊事件
	for(var i=0;i<landscapeBtn.length;i++){
		landscapeBtn[i].addEventListener('click',function(){
				wrapQuiz.style.marginTop = -850+'px';
		})
	}
	//quiz4點擊事件
	for(var i=0;i<daysGroupBtn.length;i++){
		daysGroupBtn[i].addEventListener('click',function(){
				wrapQuiz.style.marginTop = 0+'px';
		})
	}
}
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
	

window.onload = doFirst;


