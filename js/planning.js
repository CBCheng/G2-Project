function doFirst(){  
		//天數區
		var getUl = document.getElementById('day');
		var getTxt = document.querySelectorAll('.getDay');
		var getDay = getUl.querySelectorAll('li');
		var copyDay = document.getElementById('copyDay');
		var copyDate = document.getElementById('copyDate');
		var addNewDay = document.getElementById('addNewDayBtn');
		var upDate = document.querySelectorAll('.date');
		copyDay.innerHTML = getDay[0].childNodes[1].childNodes[1].innerHTML;
		// console.log(getDay[0].childNodes[1].childNodes[1].innerHTML);
		copyDate.innerHTML = getDay[0].childNodes[3].innerHTML;
		
		var getSchduleUls = document.querySelectorAll('.list');
		var getDayLis = document.querySelectorAll('.dayList');	
		getSchduleUls[0].style.display='block';	
		addNewDay.addEventListener('click', addDay); 

		for(var i=0;i<getDay.length;i++){ 
			getDay[i].addEventListener('dragend', resetDays);
			getDay[i].addEventListener('click', copyToSchdule);
		}
		//移除天數
		var dayDel = document.querySelectorAll('.dayDel');
			for(var i=0;i<dayDel.length;i++){
				dayDel[i].addEventListener('click',delDay);
			}

		//帶入日期
		var arrows = document.querySelectorAll('.pignose-calendar-top-icon');

		arrows[0].addEventListener('click',delay);
		arrows[1].addEventListener('click',delay);
		var dateBtn = document.querySelector('.selectDays');
		dateBtn.addEventListener('click',dateLightBoxTri);
		dateLightBoxTri();//先做一次載入

		// var getDate = document.querySelectorAll('[data-date]');

		var getDate = document.querySelectorAll('[data-date]');
			for(var i=0;i<getDate.length;i++){
				getDate[i].addEventListener('click',confirm);
			}
			

		

		//行程區
		var schduleTrig = document.getElementById('schduleTrig');
		var deleteIcon = document.querySelectorAll('.deleteIcon');
		// var getSchUl = document.getElementById('schduleUl');
		// var getSchduleUl = document.getElementById('schduleItems');

		// var getSchduleUl1 = document.getElementById('schduleDay1');
	

		// var getSchduleLi1 = getSchduleUl1.querySelectorAll('li');


		schduleTrigger(); //先載入一次

		schduleTrig.addEventListener('click', schduleTrigger);

		//確認行程名稱
		var schduleName = document.querySelector('.searchSchdule');
		var schduleInput = document.querySelector('.searchSchdule input');
		var schduleP = document.querySelector('.searchSchdule p');
		var confirmSchBtn = document.querySelector('.searchSchdule img');
			schduleInput.addEventListener('keyup',keyLogin);
			confirmSchBtn.addEventListener('click',schName);
			schduleP.addEventListener('click',schName);

		//空行程提示文字
		var schduleEmptyTxt =document.querySelector('.schduleEmptyTxt');
			// if(getSchduleUls[0].childNodes.length==0){
			// 	schduleEmptyTxt.style.display='block';
				
			// }

			// for(i=0;i<getSchduleUls.length;i++){
			// console.log(getSchduleUls[i].childNodes.length);}
		//景點區
		intr();

		// var getViewLi = document.querySelectorAll('.viewLi');
		var getViewData = document.querySelectorAll('[data-view]');
		// console.log(getViewData);
		// var getViewTxt = document.querySelectorAll('.viewTitle');
		var createLi = document.createElement('li');
		// var createTex = document.createTextNode();
		var addSchdule = document.querySelectorAll('.addSchdule');
		var viewImg = document.querySelectorAll('.viewInfo');

		for(var i=0;i<getViewData.length;i++){
			viewImg[i].addEventListener('click', intr);
		}
		for(var i=0; i<addSchdule.length;i++){
			addSchdule[i].addEventListener('click', addSchduleList);
			// addSchdule[i].addEventListener('click', delView);
		}
		var viewName = document.querySelector('.viewName');
		viewName.addEventListener('click', closeViewInt);


			//選擇星球 planetFilter editPlanets
			// sessionStorage.setItem("planet", '瓦特星');
			var planetTimes = sessionStorage.setItem("planetTimes", 0);
			var planetTemp =sessionStorage.getItem("planet");
			var planetName = document.querySelector('.planetName');
				planetName.innerHTML = planetTemp;
				planetName.style.fontFamily='微軟正黑體';
				planetName.style.lineHeight='35px';
			if(planetTemp == null){
				planetName.innerHTML = '瓦特星';
			}else{
			
			// var planetName = document.querySelector('.planetName');
				planetName.innerHTML = planetTemp;
				planetName.style.fontFamily='微軟正黑體';
				planetName.style.lineHeight='35px';
			}
		
				
			var planetBtn = document.querySelector('.planetName');
			var planetEdit = document.querySelector('.editPlanets');
			planetBtn.addEventListener('click',selectPlanet);
			planetEdit.addEventListener('click',selectPlanet);
			var planetFilter = document.querySelector('.planetFilter');
			var selectP = document.querySelector('.planetLightBox');
			var txt = selectP.querySelectorAll('li');
			for(var i=0;i<txt.length;i++){
				txt[i].addEventListener('click',getPlanetName);
			}
			var closePlanetIcon = document.querySelector('.logoBar div span');
				closePlanetIcon.addEventListener('click', function(){
						planetFilter.style.display='none';
				});
			// console.log(closePlanetIcon);
			//景點標籤focus
			var tagListUl= document.getElementById('taglist');
			var tagListLi= tagListUl.querySelectorAll('li');
			for(var i=0;i<tagListLi.length;i++){
				tagListLi[i].addEventListener('click',changeColorAndFilter);
			}

			//景點分類
			var allTag = document.querySelectorAll('.tag');
			var int = document.querySelectorAll('.int');
			var adv = document.querySelectorAll('.adv');
			var tec = document.querySelectorAll('.tec');
			var hum = document.querySelectorAll('.hum');
			var fod = document.querySelectorAll('.fod');

			//專家燈箱關閉
			var expertCancleBtn = document.querySelector('.cancelBtn');
				expertCancleBtn.addEventListener('click',function(){
					document.querySelector('.expertFilter').style.display ='none';
				})


				//手機版
				if (window.innerWidth<1000){
					let viewContent = document.querySelectorAll('.viewContent');
						for(let i=0;i<viewContent.length;i++){
							viewContent[i].addEventListener('click',intr);
						}
						
					 let mobileBox = document.getElementById('mobileBox');
					 let searchSchdule = document.querySelector('.searchSchdule');
					 let schMoveInBox =	document.querySelector('.schMoveInBox');
					 let setPlanet = document.querySelector('.setPlanet');
					 let selectDays = document.querySelector('.selectDays');
					 mobileBox.appendChild(schMoveInBox);
					 mobileBox.appendChild(setPlanet);
					 mobileBox.appendChild(searchSchdule);
					 mobileBox.appendChild(selectDays);
					 
				}
				
				var dayBtn = document.querySelector('.dayBtn');
				var schBtn = document.querySelector('.schBtn');
				var viewBtn = document.querySelector('.viewBtn');
				dayBtn.addEventListener('click',changeStep);
				schBtn.addEventListener('click',changeStep);
				viewBtn.addEventListener('click',changeStep);


				function changeStep(){
					let selectDaysGroup = document.querySelector('.selectDaysGroup');
					let schduleList = document.querySelector('.schduleList');
					let selectViews = document.querySelector('.selectViews');
					if(this==dayBtn){
						// alert('1');
						selectDaysGroup.style.left='0px';
						schduleList.style.left='110%';
						selectViews.style.left='110%';
					}
					else if(this==schBtn){
						// alert('2');
						selectDaysGroup.style.left='110%';
						schduleList.style.left='0px';
						selectViews.style.left='110%';
					}
					else if(this==viewBtn){
						// alert('3');
						selectDaysGroup.style.left='110%';
						schduleList.style.left='110%';
						selectViews.style.left='0px';
					}
					// console.log();
				}

			window.onresize = function(){
					
				if (window.innerWidth<1000){
					let viewContent = document.querySelectorAll('.viewContent');
						for(let i=0;i<viewContent.length;i++){
							viewContent[i].addEventListener('click',intr);
						}
					 let mobileBox = document.getElementById('mobileBox');
					 let searchSchdule = document.querySelector('.searchSchdule');
					 let schMoveInBox =	document.querySelector('.schMoveInBox');
					 let setPlanet = document.querySelector('.setPlanet');
					 let selectDays = document.querySelector('.selectDays');
					 mobileBox.appendChild(schMoveInBox);
					 mobileBox.appendChild(setPlanet);
					 mobileBox.appendChild(searchSchdule);
					 mobileBox.appendChild(selectDays);

					 

				}
				// console.log(window.innerWidth);
			}

			//更換星球初始化
			//天數部分
			// var dayParent = document.getElementById('dayParent');
			// var DaysUl = document.getElementById('day');
			// var cloneDayUl = DaysUl.cloneNode(true);
			// //行程部分
			// var schduleBox = document.getElementById('schduleBox');
			// // var getSchUl = document.getElementById('schduleUl');
			// var cloneSchUl = getSchUl.cloneNode(true);
			//  console.log(cloneSchUl);

			// sessionStorage.setItem("replaceDays",replaceDaysUl);

			// console.log(cloneDayUl);
			// console.log(DaysUl);
			// console.log(cloneDayUl);
				// replaceDays.replaceChild(getUl,replaceDaysUl)
// function comit(){
// 	confirm('行程已儲存');
// 		// var x = confirm('行程已儲存，並可在會員專區查看<br>若要繼續選專家請按"是"，否則請按"否"跳至會員專區');
// 	// 		if(x==true){
// 	// 	document.querySelector('.expertFilter').style.display ='block';			
// 	// }else{
// 	// 	alert('gg');
// 	// }
// 		// alert('行程已儲存，並可在會員專區查看');
// 		// document.querySelector('.expertFilter').style.display ='block';
// }
//移除天數跟對應的行程
function delDay(){
	reflashInfo();
	if(getDay.length==3){
			alert('最少3天');
		}else{
			for(var i=0;i< getSchduleUls.length;i++){
				// console.log(this.parentNode.parentNode.dataset.daybox);
				if(this.parentNode.parentNode.dataset.daybox == getSchduleUls[i].dataset.schdulebox){
					// console.log(this.parentNode.parentNode.dataset.daybox,getSchduleUls[i].dataset.schdulebox);
							// console.log(getSchduleUls[1].parentNode.childNodes.length);
							// console.log(getSchduleUls.length);
						for(var j=0;j<getSchduleUls[0].parentNode.childNodes.length;j++){
						// 	console.log(getSchduleUls[i].parentNode.childNodes[j].dataset.schdulebox);
							// console.log(this.parentNode.parentNode.dataset.daybox);
							if(this.parentNode.parentNode.dataset.daybox == getSchduleUls[i].parentNode.childNodes[j].dataset.schdulebox){
						
							getSchduleUls[i].parentNode.removeChild(getSchduleUls[i].parentNode.childNodes[j]);
							this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);
							resetDays();
							return;
							// console.log(getSchduleUls[i].dataset.schdulebox);
							}
						}
								// console.log(getSchduleUls[i].parentNode.dataset.daybox, getSchduleUls[i].parentNode.childNodes[j].dataset.schdulebox);
					
					// this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);
			
				}
				}
			
			}
			// alert('1');
	resetDays();		
}			// setTimeout(newDates,2000);

function delay(){
	// reflashInfo();
		setTimeout(reflashInfo,10);
		setTimeout(newDates,10);
		// newDates();
}			
function newDates(){

	// var a = document.querySelector('.pignose-calendar-body');
	// var b = document.querySelectorAll('.pignose-calendar-body div');
	// var getDat = a.querySelectorAll('[data-date]');
	// console.log(a);
	// console.log(b[0]);
// console.log(getDate[0]);
	
			for(var i=0;i<getDate.length;i++){
				getDate[i].addEventListener('click',confirm);
				console.log(getDate[i]);
			}
}
//ENTER確認修改行程名稱
function keyLogin(){
	if (event.keyCode==13){//enter的鍵值為13
	 schName();
	// confirmSchBtn[0].click();//觸動按鈕的點擊
	} 

}
//確認修改行程名稱
function schName(){

	if(this ==schduleP || this ==confirmSchBtn){
		schduleP.style.display='none';
		// confirmSchBtn[1].style.display='none';
		// confirmSchBtn[0].style.display='block';
		
		// addEventListener('focus',function(){
		// 	confirmSchBtn[0]
		// });
		schduleInput.style.display='block';
		schduleInput.focus();
		return;
	}

	if(schduleInput.value==''){
		alert('請輸入行程名稱');
	}else{
		let txt = schduleInput.value;
		schduleP.innerHTML = txt;
		schduleInput.style.display='none';
		schduleP.style.display='block';
		// this.style.display='none';
		// confirmSchBtn[1].style.display='block';

	}
	
}



		var no  = document.querySelector('.pignose-calendar-button-cancel');
		no.addEventListener('click',cancel);
function cancel(){
	 document.getElementById('calendar').style.display='none';
}
//確認日期
function confirm(e){


	// var startDate = this.dataset.date;
	// console.log(date);
	var yes = document.querySelector('.pignose-calendar-button-apply');
	var no  = document.querySelector('.pignose-calendar-button-cancel');
	var x = document.getElementById('calendar');
	yes.addEventListener('click',function(){
			// console.log(x);
			x.style.display='none';
			// console.log(e.target.parentNode.dataset.date);
			// console.log(e.target.parentNode);
			if(e.target.parentNode.classList.contains('pignose-calendar-unit-first-active')==true){
			getDates(e.target.parentNode);
			}else{
				return;
			}
			sessionStorage.setItem("date", e.target.parentNode.dataset.date);
			// console.log(window.inner=sessionStorage.getItem("date"));
			// console.log(sessionStorage.getItem("date"));
	});
	no.addEventListener('click',function(){
			x.style.display='none';
	});

}
//確定日期後帶入日期
function getDates(data){
			reflashInfo();					
			var x=data.dataset.date;
			// console.log(x);
			var currentDate =new Date();
			var curYears = currentDate.getFullYear();
			var curMons = currentDate.getMonth()+1;
			var curDays = currentDate.getDate();
			var years=parseInt(x.substr(0,4));
			var mons=parseInt(x.substr(5,2));
			var days=parseInt(x.substr(8,2));
			var counts=0;
			var a =1;
			var b =0;

			// if(years>=curYears){
				// if(mons>=curMons){
					// if(days>curDays){
						for(var i=0;i<getDay.length;i++){
							var nextDay = days+counts;
							var num =getDate.length-nextDay;
									if(num>=0){
									upDate[i].innerHTML = '2018年'+mons+'月'+nextDay+'日';
									counts+=1;
									}
									else if(num<0){
									
										var c =a+b;
										upDate[i].innerHTML = '2018年'+(mons+1)+'月'+c+'日';
										b+=1;
										}


						}

			// 		}	
			// 		else{
			// 		// console.log('請選擇今天之後的日期');
			// 		return;
			// 		}
			// 	}
			// 	else{
			// 	// console.log('請選擇今天之後的日期');
			// 	return;
			// 	}
			// }
			// else{
			// // console.log('請選擇今天之後的日期');。
			// return;
			// }

	upDateCopy();//選日期後帶入行程對應日期
}		

function dateLightBoxTri(){
		var dateLightBox = document.getElementById('calendar');

	if(dateLightBox.style.display=='none'){
	dateLightBox.style.display='block';
	}else{
		dateLightBox.style.display='none';
	}
}

function selectPlanet(){
	const planetLightBoxInfo = document.querySelector('.selectPlanetTitle');
	planetLightBoxInfo.innerHTML = '請選擇想去的星球';
	// planetLightBoxInfo.innerHTML = '請選擇想去的星球<br><span>(更換星球將清除未儲存紀錄)</span>';
	planetFilter.style.display='block';

}



//focus標籤
function changeColorAndFilter(){

	//focus標籤
	this.classList.add('focusStyle');
	// console.log(tagListLi[0]);
	// this.index
	// console.log(this.index);
	for(var i =0;i<tagListLi.length;i++){
		
		tagListLi[i].index=i;
		 // console.log(this.innerHTML);
		if(this == tagListLi[i]){
			tagListLi[i].className='focusStyle';
		}else{
			tagListLi[i].className='blurStyle';
		}
	}

	//篩選
	for(var i=0;i<allTag.length;i++){
		allTag[i].parentNode.parentNode.parentNode.style.display='inline-block';

		if(this.innerHTML=='全部'){
			allTag[i].parentNode.parentNode.parentNode.style.display='inline-block';
		}
		else if(this.innerHTML!=allTag[i].innerHTML){


		allTag[i].parentNode.parentNode.parentNode.style.display='none';
		}

	}




}


function intr(){
	var intr=document.querySelector('.viewIntroduce');
	if(intr.style.display=='none'){
		intr.style.display='block';
	}else{
		intr.style.display='none';
	}

	// viewName.addEventListener('click', closeViewInt);

}
function closeViewInt(){
		var intr=document.querySelector('.viewIntroduce');
	if(intr.style.display=='block'){
		intr.style.display='none';
	}else{
		intr.style.display='block';
	}
}
function reflashInfo(){
				//天數區
				 getUl = document.getElementById('day');
				 getTxt = document.querySelectorAll('.resetDay');
				 getDay = getUl.querySelectorAll('li');	
				 getDayLis = document.querySelectorAll('.dayList');
				 getDate = document.querySelectorAll('[data-date]');
				 //行程區
				deleteIcon = document.querySelectorAll('.deleteIcon');

				getSchduleUl1 = document.getElementById('schduleDay1');
				getSchduleUls = document.querySelectorAll('.list');
			// var getSchduleUl = document.querySelector('[data-list="1"]');
			// var getSchduleUl2 = document.querySelector('[data-list="2"]');
			// var getSchduleUl3 = document.querySelector('[data-list="3"]');
				// getSchduleLi = getSchduleUl1.querySelectorAll('li');
			// var getSchduleLi1 = getSchduleUl1.querySelectorAll('li');
			// var getSchduleLi2 = getSchduleUl2.querySelectorAll('li');
			// var getSchduleLi3 = getSchduleUl3.querySelectorAll('li');
				upDate = document.querySelectorAll('.date');
}
		
function resetDays(){
			// 當觸發dragend事件後，resetDays 得到的li順序的資訊依然是先前舊的li順序，
			// 所以需要在拖曳li改變順序之後再次呼叫reflashInfo取得一次新的li順序，之後再進行天數的排序
			reflashInfo();

			// console.log(getDay);
			for(var i=0;i<getDay.length;i++){
				// console.log(parseInt(i+1)); 
				getTxt[i].innerHTML = 'D'+parseInt(i+1);
				// console.log(getTxt[i].innerHTML);
							// console.log(getTxt[i].innerHTML);


			}
			if(this!=window){
			copyDay.innerHTML = this.childNodes[1].childNodes[1].innerHTML;
			}
						// copyDate.innerHTML = this.childNodes[3].innerHTML;
				var x =sessionStorage.getItem("date");
					// console.log(x);
				if(x != null){
					// sessionStorage.getItem("date");

					
					
					var mons=parseInt(x.substr(5,2));
					var days=parseInt(x.substr(8,2));
					var counts=0;
					var a =1;
					var b =0;
					if(upDate[0].innerHTML.length==6){
						return;
					}else{
							for(var i=0;i<getDay.length;i++){
								var nextDay = days+counts;
								var num =getDate.length-nextDay;
								if(num>=0){
								upDate[i].innerHTML = '2018年'+mons+'月'+nextDay+'日';
								counts+=1;
								}
								else if(num<0){
								
									var c =a+b;
									upDate[i].innerHTML = '2018年'+(mons+1)+'月'+c+'日';
									b+=1;
									}


							}

					}
					
				// console.log(this);
					// reflashInfo();
					//只有當前正在安排的行程頁面才會隨著拖曳變更天數跟日期
					if(this ==window){
						
						return;
					}else{

					var y= this.dataset.daybox;
						// console.log(y);
						// console.log(getSchduleUls.length);
						// console.log(getSchduleUls[y]);
						var x = document.querySelector('[data-schdulebox="'+y+'"]');
						// console.log(y,x);
					if(x.style.display=='block'){
						copyDay.innerHTML = this.childNodes[1].childNodes[1].innerHTML;
						copyDate.innerHTML = this.childNodes[3].innerHTML;
						}else{
							return;
						}
					}
				}
				

			
// 
		// console.log(copyDay.innerHTML);
		// getSchduleUls[i].dataset
		// console.log(getSchduleUls[1].dataset.schdulebox);
		// console.log(this.childNodes[1].innerHTML);
		// console.log(this.childNodes[3].innerHTML);
			// upDateCopy();
}

//選日期後帶入行程對應日期
function upDateCopy(){
	reflashInfo();
	var getSchduleUls = document.querySelectorAll('.list');
	for(var i=0;i<getDayLis.length;i++){
			getDayLis[i].index=i;
			getSchduleUls[i].index=i;
		if(getSchduleUls[i].style.display=='block'){
			for(var j=0;j<getDayLis.length;j++){
				if(getSchduleUls[i].index == getDayLis[j].index){
					copyDate.innerHTML =getDayLis[j].childNodes[3].innerHTML;
					// console.log(getDayLis[j].childNodes[3].innerHTML);
				}
			
			}
			
		}

	}
		// copyDay.innerHTML = this.childNodes[1].innerHTML;
		// copyDate.innerHTML = this.childNodes[3].innerHTML;
}
// 點選天數複製天數跟日期到行程安排,切換每天的行程安排
function copyToSchdule(){
		reflashInfo();
		copyDay.innerHTML = this.childNodes[1].innerHTML;
		copyDate.innerHTML = this.childNodes[3].innerHTML;
		var getSchduleDatas = document.querySelectorAll('[data-schdulebox]');
		var getDayDatas = document.querySelectorAll('[data-daybox]');
		var getSchduleUls = document.querySelectorAll('.list');
		var getDayLis = document.querySelectorAll('.dayList');
		// console.log(this.dataset.daybox);
		var viewsCount = document.querySelector('.viewsCount');
		var dayNum =document.querySelector('.dayNum');
		for(var i=0;i<getDayDatas.length;i++){
			getSchduleDatas[i].style.display='none';

			// if(getSchduleUls[i].childNodes.length==0){
			// 	schduleEmptyTxt.style.display='block';
			// }
			if(getSchduleDatas[i].dataset.schdulebox == this.dataset.daybox){
				getSchduleDatas[i].style.display='block';
							if(window.innerWidth<1000){
						lis = getSchduleUls[i].querySelectorAll('li');
						viewsCount.innerHTML='('+lis.length+')';
						let num =parseInt(this.dataset.daybox)+1;
						dayNum.innerHTML='D'+num;
							}
				// console.log(getSchduleUls[i].childNodes.length);
					if(getSchduleUls[i].childNodes.length!=0){
						schduleEmptyTxt.style.display='none';
						
					}else{
						schduleEmptyTxt.style.display='block';


					}

				// console.log(getSchduleDatas[i]);
				// console.log(getDayDatas[i]);
			}
		}
		// for(var i=0;i<getDayLis.length;i++){
		// 	getDayLis[i].index=i;
		// 	getSchduleUls[i].index=i;
		// 	getSchduleUls[i].style.display='none';
		// 	// console.log(this.index);
		// 	// console.log(getSchduleUls[i].index);
		// 	if(getSchduleUls[i].index == this.index){
		// 		getSchduleUls[i].style.display='block';
		// 	}
		// }
		


}


//增加行程天數
var num = 3;
var ulnum= 4;
var uldataset=3;
function addDay(){
	var getDayDatas = document.querySelectorAll('[data-daybox]');
	var cloneDayLi = document.getElementById('cloneDayLi');
	var addLi = cloneDayLi.cloneNode(true);
		addLi.id='';
		addLi.classList.add('dayList');
		addLi.childNodes[1].childNodes[1].classList.add('resetDay');
		addLi.childNodes[3].classList.add('date');
		addLi.dataset.daybox=num;

		addLi.addEventListener('dragend', resetDays);
		addLi.addEventListener('click', copyToSchdule);		
		addLi.childNodes[5].childNodes[3].addEventListener('click',delDay);
		// console.log(addLi);
	var	getSchUl = document.getElementById('schduleUl');
	var cloneSchUl = document.getElementById('cloneSchUl');
		addUl = cloneSchUl.cloneNode(true);
		addUl.id='schduleDay'+ulnum;
		addUl.dataset.schdulebox=uldataset;
		addUl.classList.add('schduleItems','list');


		reflashInfo();
	var daysCount = document.querySelector('.daysCount');

		if(getDay.length==5){
			alert('最多5天');
		}
		else{
		getUl.appendChild(addLi);
		getSchUl.appendChild(addUl);
		// console.log(addUl);
		}
		if(window.innerWidth<1000){
		getDay = getUl.querySelectorAll('li');
		daysCount.innerHTML='('+getDay.length+')';
		}

		Sortable.create(document.getElementById('schduleDay'+ulnum), {
                                animation: 150,
                            });

		resetDays();//重新排列新增的天數日期
		num+=1;
		ulnum+=1;
		uldataset+=1;
}
//引入行程燈箱開關
function schduleTrigger(){
	var schduleBox = document.querySelector('.schduleIN');

	if(schduleBox.style.display=='none'){
	schduleBox.style.display='block';
	}else{
		schduleBox.style.display='none';
	}
}

//移除行程內景點，並恢復成原景點
function restoreView(){
 var tmp = this.parentNode.parentNode.parentNode;

	this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);//移除行程內景點li

	var schduleDataNum= this.parentNode.parentNode.dataset.schdule;//找到點擊移除icon所在的父層li的dataset值

	var getData = document.querySelector('[data-view="'+schduleDataNum+'"]');//將值帶回原景點，兩邊的dataset值是一樣的，所以可以找回相同dataset的原景點li
	var viewsCount = document.querySelector('.viewsCount');	
	// getData.style.display='inline-block';//顯現隱藏的原景點li
	// console.log(tmp.childNodes.length);
		if(tmp.childNodes.length==0){

			
		schduleEmptyTxt.style.display='block';
		}
		for(var i=0;i<getSchduleUls.length;i++){
			lis = getSchduleUls[i].querySelectorAll('li');
			if(window.innerWidth<1000 && getSchduleUls[i].style.display=='block'){
				
				
				viewsCount.innerHTML='('+lis.length+')';
				}
		}	

}	
// var counts = 0;
//將景點加入行程
function addSchduleList(){
			reflashInfo(); //加入前檢查目前li數量
	// getSchduleLi = getSchduleUl.querySelectorAll('li');
	var copyLiStyle = document.getElementById('copyLiStyle');//抓到樣板
	var ItemName = copyLiStyle.querySelector('ItemName');//抓取移除icon的位置
	var	getViewDataset = this.parentNode.parentNode.dataset.view;//找到對應事件的父層li的dataset值
	// var getLi = document.querySelector('[data-view="'+getViewDataset+'"]');

	var addLi = copyLiStyle.cloneNode(true);//複製樣板
		addLi.id='';//樣板預設id移除
		// addLi.dataset.schdule= getViewDataset;//將原景點的dataset丟入要複製的行程景點的dataset，同步兩邊的dataset值建立關聯，到時才能執行restoreView復原

	var getViewName = this.previousSibling.previousSibling.childNodes[5].innerHTML;//找到點選的景點名字
		addLi.querySelector('.ItemName').innerHTML =getViewName;//找到行程li的名稱位置，並將景點的名稱取代行程li裡的名稱
		addLi.querySelector('.deleteIcon').addEventListener('click', restoreView);//對此li中的icon建立復原事件
		// console.log(getSchduleUls[0].childNodes.length);
		// console.log(getSchduleUls.length);
	var viewsCount = document.querySelector('.viewsCount');



		for(var i=0;i<getSchduleUls.length;i++){
			
			if(getSchduleUls[i].style.display=='block'){
				var lis = getSchduleUls[i].querySelectorAll('li');
				
				
				if(lis.length==4){
					alert('一天最多4個景點');
					}
					else{
					getSchduleUls[i].appendChild(addLi);
					schduleEmptyTxt.style.display='none';
					// counts+=1;
					// viewsCount.innerHTML=counts;
					if(window.innerWidth<1000){
						lis = getSchduleUls[i].querySelectorAll('li');
						viewsCount.innerHTML='('+lis.length+')';
		}
					// this.parentNode.parentNode.style.display='none';
					}	
			}
		}


}
			// if(getSchduleUls[0].childNodes.length==0){
			// 	schduleEmptyTxt.style.display='block';
				
			// }
			// if(getSchduleUls[0].childNodes.length!=0){
			// 	schduleEmptyTxt.style.display='none';
			// }
//移除已加入行程的景點
// function delView(){
// 	//景點達上限就不做移除
// 	if(getSchduleLi.length==4){
// 			return 0;
// 		}
// 		else{
// 			//隱藏點擊到的景點的父層li節點
// 			// this.parentNode.parentNode.style.display='none';
// 		}	


// 	}


}
