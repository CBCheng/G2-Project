function doFirst(){   



// console.log(aa);
// getDates(aa);

		// sessionStorage.setItem("planet", '瓦特星');
		//天數區 
		var getUl = document.getElementById('day');
		var getTxt = document.querySelectorAll('.getDay');
		var getDay = getUl.querySelectorAll('li');
		// console.log(getDay);
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
			
 
			if(window.innerWidth<1000){
				getDay[i].addEventListener('dragend', resetDays);
				getDay[i].addEventListener('touchend', resetDays);
				getDay[i].addEventListener('click', copyToSchdule);
			}else{
			getDay[i].addEventListener('dragend', resetDays);
			getDay[i].addEventListener('click', copyToSchdule);
			}

		}
		//移除天數
		let confirmBox = document.querySelector('.deleteBox');
		var dayDel = document.querySelectorAll('.dayDel');
		var yesBtn = document.querySelector('.dayyesBtn');
		var noBtn = document.querySelector('.daynoBtn');
		for(let i=0;i<dayDel.length;i++){
			dayDel[i].addEventListener('click',confirmDay);
		}
		


		//帶入日期
		setTimeout(function(){
			var arrows = document.querySelectorAll('.pignose-calendar-top-icon');

		arrows[0].addEventListener('click',delay);
		arrows[1].addEventListener('click',delay);
		var dateBtn = document.querySelector('.selectDays');
		dateBtn.addEventListener('click',dateLightBoxTri);
		dateLightBoxTri();//先做一次載入
		var getDate = document.querySelectorAll('[data-date]');
					for(var i=0;i<getDate.length;i++){
						getDate[i].addEventListener('click',confirm);
					}

		var no  = document.querySelector('.pignose-calendar-button-cancel');
		no.addEventListener('click',cancel);

		},50)
		
		// var getDate = document.querySelectorAll('[data-date]');

		
			

		

		//行程區
		var schduleTrig = document.getElementById('schduleTrig');
		var deleteIcon = document.querySelectorAll('.deleteIcon');
		var schduleINDel = document.querySelector('.schduleINDel');
		// var getSchUl = document.getElementById('schduleUl');
		// var getSchduleUl = document.getElementById('schduleItems');

		// var getSchduleUl1 = document.getElementById('schduleDay1');
	

		// var getSchduleLi1 = getSchduleUl1.querySelectorAll('li');


		schduleTrigger(); //先載入一次

		schduleTrig.addEventListener('click', schduleTrigger);
		schduleINDel.addEventListener('click', schduleTrigger);
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
		// intr();

		// var getViewLi = document.querySelectorAll('.viewLi');
		var getViewData = document.querySelectorAll('[data-view]');
		// console.log(getViewData);
		// var getViewTxt = document.querySelectorAll('.viewTitle');
		var createLi = document.createElement('li');
		// var createTex = document.createTextNode();
		var addSchdule = document.querySelectorAll('.addSchdule');
		var viewImg = document.querySelectorAll('.viewInfo');

		for(var i=0;i<getViewData.length;i++){
			// viewImg[i].addEventListener('click', intr);
		}
		for(var i=0; i<addSchdule.length;i++){
			addSchdule[i].addEventListener('click', addSchduleList);
			// addSchdule[i].addEventListener('click', delView);
		}
		// var viewName = document.querySelector('.viewName span');
		// viewName.addEventListener('click', closeViewInt);


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
			// planetBtn.addEventListener('click',selectPlanet);
			// planetEdit.addEventListener('click',selectPlanet);
			var planetFilter = document.querySelector('.planetFilter');
			var selectP = document.querySelector('.planetLightBox');
			var txt = selectP.querySelectorAll('li');
			// for(var i=0;i<txt.length;i++){
			// 	txt[i].addEventListener('click',getPlanetName);
			// }
			var editPlanets = document.querySelector('.editPlanets');
			editPlanets.addEventListener('click',function(){
				confirmPlanetBox.style.display='block';
			});
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
			// console.log(allTag.length);
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
							// viewContent[i].addEventListener('click',intr);
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
						// for(let i=0;i<viewContent.length;i++){
						// 	// viewContent[i].addEventListener('click',intr);
						// }
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


	// function yesway(){
	// 	// delDay(data);
	// 	confirmBox.style.display='none';
	// }
// 	var schMoveIn =	document.querySelector('.schMoveInBox');
// 		schMoveIn.addEventListener('click',moveIn);
// function moveIn(){

// }
					//儲存行程燈箱
		var saveDataBox= document.querySelector('.saveDataBox');



function confirmDay(){
		if(getDay.length==3){
			alert('最少3天')
		}else{
	confirmBox.style.display='block';
	let temp = this;
	let count=1;

	yesBtn.addEventListener('click',function(e){
		count++;
		delDay(temp);
		confirmBox.style.display='none';
		if(count>=2){
			yesBtn.removeEventListener(e.type,arguments.callee,false);
		}
	});
	noBtn.addEventListener('click',function(e){

		confirmBox.style.display='none';

	});
  }
}

//移除天數跟對應的行程
function delDay(data){
	reflashInfo();
	// console.log(data);
	if(getDay.length==3){
			// alert('最少3天');
		}else{
			for(var i=0;i< getSchduleUls.length;i++){
				// console.log(data.parentNode.parentNode.dataset.daybox);
				if(data.parentNode.parentNode.dataset.daybox == getSchduleUls[i].dataset.schdulebox){
					// console.log(data.parentNode.parentNode.dataset.daybox,getSchduleUls[i].dataset.schdulebox);
							// console.log(getSchduleUls[1].parentNode.childNodes.length);
							// console.log(getSchduleUls.length);

							console.log(data.parentNode.parentNode.dataset.daybox);
						for(var j=0;j<getSchduleUls[0].parentNode.childNodes.length;j++){
							console.log(getSchduleUls[i].parentNode);
							var setSchdulebox =getSchduleUls[i].parentNode.querySelectorAll('ul');

							// console.log(setSchdulebox[1].dataset.daybox);
							if(data.parentNode.parentNode.dataset.daybox == setSchdulebox[j].dataset.schdulebox){
						
							getSchduleUls[i].parentNode.removeChild(setSchdulebox[j]);
							data.parentNode.parentNode.parentNode.removeChild(data.parentNode.parentNode);
								
								if(window.innerWidth<1000){
								var daysCount = document.querySelector('.daysCount');
									getDay = getUl.querySelectorAll('li');
									daysCount.innerHTML='('+getDay.length+')';
								}
								
							resetDays();


							return;
							// console.log(getSchduleUls[i].dataset.schdulebox);
							}
						}
								// console.log(getSchduleUls[i].parentNode.dataset.daybox, getSchduleUls[i].parentNode.childNodes[j].dataset.schdulebox);
					
					// data.parentNode.parentNode.parentNode.removeChild(data.parentNode.parentNode);
			
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



		// var no  = document.querySelector('.pignose-calendar-button-cancel');
		// no.addEventListener('click',cancel);
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

			console.log(e.target);
			x.style.display='none';
			// console.log(e.target.parentNode.dataset.date);
			// console.log(e.target.parentNode);
			// if(e.target==false){
				// alert('請選擇今天之後的日期');
			// }else{
				if(e.target.parentNode.classList.contains('pignose-calendar-unit-first-active')==true){
				getDates(e.target.parentNode.dataset.date);
				}else{
					return;
				}
			// }
			
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

			// console.log(data);	
			// if(data){
			// 	alert('1');
			// 	
			// }else{
			// 	alert('2');
			// }			
			var x=data;
			sessionStorage.setItem("date",x);
			
			console.log(sessionStorage.getItem('date'));
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
										// console.log(upDate[i]);
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

// function selectPlanet(){
// 	const planetLightBoxInfo = document.querySelector('.selectPlanetTitle');
// 	planetLightBoxInfo.innerHTML = '請選擇想去的星球';
// 	// planetLightBoxInfo.innerHTML = '請選擇想去的星球<br><span>(更換星球將清除未儲存紀錄)</span>';
// 	planetFilter.style.display='block';

// }



//focus標籤
function changeColorAndFilter(){
	reflashInfo();
	// for(var x=0;x<getSchduleUls.length;x++){
	// if(getSchduleUls[x].style.display=='block'){
	// 	console.log(getSchduleUls[x]);
	// }
// }
// for(var p=0;p<getViewData.length;p++){
// 	if(getViewData[p].style.display=='inline-block'){
// 		getViewData[p].style.top='0px';
// 	}
	
// }

	//focus標籤
	this.classList.add('focusStyle');

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

	if(this.innerHTML=='全部'){
		for(let o=0;o<getViewData.length;o++){

				
					getViewData[o].style.display='inline-block';
				
				
				// console.log(getViewData);
			}
			// getSchduleUls = document.querySelectorAll('.list');
			for(let a=0;a<getSchduleUls.length;a++){
				// var lis = getSchduleUls[a].querySelectorAll('li');
						if(getSchduleUls[a].style.display=='block'){
							console.log(getSchduleUls[a]);

							var lis = getSchduleUls[a].querySelectorAll('li');
							console.log(lis.length);
						

							if(lis.length!=0){



								for(let k=0;k<getViewData.length;k++){
								getViewData[k].style.display='inline-block';
								}

								// console.log(getSchduleUls[a].childNodes.length);
								for(let j=0;j<lis.length;j++){
									let num =lis[j].dataset.schdule;
									let tempLi=document.querySelector('[data-view="'+num+'"]');
									console.log(tempLi);
									tempLi.style.display='none';

									}
								
							}

						}

				}

		}
		else{
			for(var i=0;i<getViewData.length;i++){
					
					getViewData[i].style.display='none';
					var getTagBox = document.querySelectorAll('.viewLi .tagBox');
					var getSpan = getTagBox[i].querySelectorAll('span');

					// console.log(getViewData[i],getTagBox[i].parentNode.parentNode.parentNode);
					if(getSpan.length==2){
							// getTagBox[i].parentNode.parentNode.parentNode.style.display='none';
						if(this.innerHTML==getSpan[0].innerHTML || this.innerHTML== getSpan[1].innerHTML){
							getViewData[i].style.display='inline-block';
							// getViewData[i].style.top='0px';
							// console.log(i,getViewData[i].dataset.view,this.innerHTML,getSpan[0].innerHTML,getSpan[1].innerHTML);
							// console.log(getTagBox[i].parentNode.parentNode.parentNode);
						}
					}
					else if(getSpan.length==1){
							// console.log(getSpan[0].innerHTML);
						if(this.innerHTML==getSpan[0].innerHTML){
							getViewData[i].style.display='inline-block';
								}

					// 		console.log(allTag[i].innerHTML,this.innerHTML);
					// 		console.log(this.innerHTML);
					// 		console.log(allTag[i].parentNode.parentNode.parentNode.parentNode);
					// allTag[i].parentNode.parentNode.parentNode.parentNode.style.display='none';
						
						//偵測景點是否被加入 是的話就隱藏
						for(let a=0;a<getSchduleUls.length;a++){
							if(getSchduleUls[a].style.display=='block'){
								var lis = getSchduleUls[a].querySelectorAll('li');
							for(let j=0;j<lis.length;j++){
								let num =lis[j].dataset.schdule;
								let tempLi=document.querySelector('[data-view="'+num+'"]');
								// console.log(tempLi);
								tempLi.style.display='none';

										}
									}

								}
							
						}


				

						

		}	
	}

	// for(var i=0;i<allTag.length;i++){



	// 	// allTag[i].parentNode.parentNode.parentNode.style.display='inline-block';






	// 	if(this.innerHTML=='全部'){
	// 		allTag[i].parentNode.parentNode.parentNode.style.display='inline-block';
	// 	}
	// 	else if(this.innerHTML!=allTag[i].innerHTML){


	// 	allTag[i].parentNode.parentNode.parentNode.style.display='none';
	// 	}

	// }




}

// var addViewImg = document.querySelector('.addViewImg');
// addViewImg.addEventListener('click',intr);
// function intr(){
// 	var intr=document.querySelector('.viewFilter');
// 	if(intr.style.display=='none'){
// 		intr.style.display='block';
// 	}else{
// 		intr.style.display='none';
// 	}

// 	// viewName.addEventListener('click', closeViewInt);

// }
// function closeViewInt(){
// 		var intr=document.querySelector('.viewFilter');
// 	if(intr.style.display=='block'){
// 		intr.style.display='none';
// 	}else{
// 		intr.style.display='block';
// 	}
// }
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
		// alert('321');
			// 當觸發dragend事件後，resetDays 得到的li順序的資訊依然是先前舊的li順序，
			// 所以需要在拖曳li改變順序之後再次呼叫reflashInfo取得一次新的li順序，之後再進行天數的排序
			reflashInfo();

		
			for(var i=0;i<getDay.length;i++){
				console.log(getTxt[i].innerHTML);
				getTxt[i].innerHTML = 'D'+parseInt(i+1);
			


			}
			var dayNum =document.querySelector('.dayNum');
			//只有當前正在安排的行程頁面才會隨著拖曳變更天數跟日期
			if(this!=window){
				var y= this.dataset.daybox;
				var x = document.querySelector('[data-schdulebox="'+y+'"]')
				console.log(x);
				if(x.style.display=='block'){
				
						

					copyDay.innerHTML = this.childNodes[1].childNodes[1].innerHTML;
					dayNum.innerHTML=this.childNodes[1].childNodes[1].innerHTML.replace(/^\s+|\s+$/g, '');
					

					

				}else{
					var dayTemp =sessionStorage.getItem("daytemp");
					// console.log(dayTemp);
					let b = document.querySelector('[data-daybox="'+dayTemp+'"]');
						console.log(b);
					copyDay.innerHTML = b.childNodes[1].childNodes[1].innerHTML;
					dayNum.innerHTML=b.childNodes[1].childNodes[1].innerHTML.replace(/^\s+|\s+$/g, '');
					copyDate.innerHTML = b.childNodes[3].innerHTML;
					console.log(b.childNodes[3].innerHTML);
				}
			}
					
				var x =sessionStorage.getItem("date");
					
				if(x != null){
					
					
					
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
					
			
					//只有當前正在安排的行程頁面才會隨著拖曳變更天數跟日期
					if(this ==window){
						
						return;
					}else{

					var y= this.dataset.daybox;
					
						var x = document.querySelector('[data-schdulebox="'+y+'"]');
						
				
					if(x.style.display=='block'){
						copyDay.innerHTML = this.childNodes[1].childNodes[1].innerHTML;
						copyDate.innerHTML = this.childNodes[3].innerHTML;
						
						
						}else{
					var dayTemp =sessionStorage.getItem("daytemp");
					// console.log(dayTemp);
					let b = document.querySelector('[data-daybox="'+dayTemp+'"]');
						console.log(b);
					copyDay.innerHTML = b.childNodes[1].childNodes[1].innerHTML;
					dayNum.innerHTML=b.childNodes[1].childNodes[1].innerHTML.replace(/^\s+|\s+$/g, '');
					copyDate.innerHTML = b.childNodes[3].innerHTML;
					console.log(b.childNodes[3].innerHTML);
				}
					}
				}
				


}

//選日期後帶入行程對應日期
function upDateCopy(){
	reflashInfo();
	var getSchduleUls = document.querySelectorAll('.list');
	for(var i=0;i<getDayLis.length;i++){
		// console.log(i);
		// console.log(getDayLis.length);
			getDayLis[i].index=i;
			// console.log(getDayLis.length);
			// console.log(getSchduleUls.length);
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
		for(let a=0;a<tagListLi.length;a++){
			tagListLi[a].className='blurStyle';
		}
			tagListLi[0].className='focusStyle';

		sessionStorage.setItem("daytemp", this.dataset.daybox);
		var dayTemp =sessionStorage.getItem("daytemp");
		console.log(dayTemp);
		copyDay.innerHTML = this.childNodes[1].innerHTML;
		copyDate.innerHTML = this.childNodes[3].innerHTML;
		var dayNum =document.querySelector('.dayNum');
		// console.log(this.childNodes[1].childNodes[1].innerHTML);
		var getSchduleDatas = document.querySelectorAll('[data-schdulebox]');
		var getDayDatas = document.querySelectorAll('[data-daybox]');
		var getSchduleUls = document.querySelectorAll('.list');
		var getDayLis = document.querySelectorAll('.dayList');
		// console.log(this.dataset.daybox);
		var viewsCount = document.querySelector('.viewsCount');
		
		// dayNum.innerHTML= this.childNodes[1].innerHTML;
		for(var i=0;i<getDayDatas.length;i++){
			getSchduleDatas[i].style.display='none';

			// if(getSchduleUls[i].childNodes.length==0){
			// 	schduleEmptyTxt.style.display='block';
			// }
			if(getSchduleDatas[i].dataset.schdulebox == this.dataset.daybox){
				getSchduleDatas[i].style.display='block';

						


							// if(window.innerWidth<1000){
						lis = getSchduleUls[i].querySelectorAll('li');
						console.log(lis.length);
						viewsCount.innerHTML='('+(lis.length)+')';
						getDayLis = document.querySelectorAll('.dayList');
						// if(getDayLis[i]==this){
						// 	dayNum.innerHTML='D'+(i+1);
							dayNum.innerHTML=this.childNodes[1].childNodes[1].innerHTML.replace(/^\s+|\s+$/g, '');
						// }

						// console.log(this);

						// let num =parseInt(this.dataset.daybox)+1;
						
							// }
				// console.log(getSchduleUls[i].childNodes.length);
		// 		if((tmp.length-1)==0){
		// 	console.log((tmp.length-1));
		// schduleEmptyTxt.style.display='block';

		// }		
		console.log(getSchduleUls[i]);
		var li = getSchduleUls[i].querySelectorAll('li');
					if(li.length!=0){
						schduleEmptyTxt.style.display='none';
						
							//偵測各天的景點
							for(let k=0;k<getViewData.length;k++){
								getViewData[k].style.display='inline-block';
							}

							for(let j=0;j<lis.length;j++){
									let num =lis[j].dataset.schdule;
									let tempLi=document.querySelector('[data-view="'+num+'"]');
									console.log(tempLi);
									tempLi.style.display='none';
								
							}
							
							 
						

						
					}else{
						schduleEmptyTxt.style.display='block';
						for(let k=0;k<getViewData.length;k++){
							getViewData[k].style.display='inline-block';
							}


					}

			}
		}

		


}


//增加行程天數
// function getval(num,ulnum,uldataset){


var num = 6;
var ulnum= 7;
var uldataset=6;
function addDay(){
	// var num = 3;
	// var uldataset=3;
	var getDayDatas = document.querySelectorAll('[data-daybox]');
	var cloneDayLi = document.getElementById('cloneDayLi');
	var addLi = cloneDayLi.cloneNode(true);
		addLi.id='';
		addLi.classList.add('dayList');
		addLi.childNodes[1].childNodes[1].classList.add('resetDay');
		addLi.childNodes[3].classList.add('date');
		addLi.dataset.daybox=num;
		
		
		if(window.innerWidth<1000){
		addLi.addEventListener('dragend', resetDays);
		addLi.addEventListener('touchend', resetDays);
		addLi.addEventListener('click', copyToSchdule);
		}else{
		addLi.addEventListener('dragend', resetDays);
		}
		addLi.addEventListener('click', copyToSchdule);		
		addLi.childNodes[5].childNodes[3].addEventListener('click',confirmDay);
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
		if(window.innerWidth<1000){
		Sortable.create(document.getElementById('schduleDay'+ulnum), {
                                animation: 150,
                                delay:300
                            });
		}else{
			Sortable.create(document.getElementById('schduleDay'+ulnum), {
                                animation: 150,
                            });
		}
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
var tmp = this.parentNode.parentNode.parentNode.querySelectorAll('li');

	// this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);//移除行程內景點li
 	
  // console.log(tmp.length);
	var schduleDataNum= this.parentNode.parentNode.dataset.schdule;//找到點擊移除icon所在的父層li的dataset值

	var getData = document.querySelector('[data-view="'+schduleDataNum+'"]');//將值帶回原景點，兩邊的dataset值是一樣的，所以可以找回相同dataset的原景點li
	var viewsCount = document.querySelector('.viewsCount');	
	var tagBox = this.parentNode.querySelectorAll('.tagBox span');
	// console.log(tagBox[0]);
	// if(tagBox.length==1){
		// var blockTag1 = this.parentNode.querySelector('span:nth-of-type(1)');
	// }else{
		// var blockTag1 = this.parentNode.querySelector('span:nth-of-type(1)');
		// var blockTag2 = this.parentNode.querySelector('span:nth-of-type(2)');
	// }

	// console.log(tagBox.length);
	// console.log(tagBox);
	// console.log(tagBox[0]);
	// console.log(tagBox[1]);

	// console.log(blockTag);

	//顯現隱藏的原景點li
	for(let b =0;b<tagBox.length;b++){
		console.log(tagBox.length);
	// if(tagBox.length==1){
		for(let i=0;i<tagListLi.length;i++){ //跑標簽數
		//如果是選到的標籤，就比對已加入行程內的景點的標籤，標籤一樣的話加回去時就會顯現，標籤不一樣就不會
		if(tagListLi[i].classList.contains('focusStyle') 
			&& (tagListLi[i].innerHTML == tagBox[b].innerHTML)
			|| tagListLi[i].classList.contains('focusStyle') 

			&& tagListLi[i].innerHTML =='全部'){

			getData.style.display='inline-block';
		
		}
	  }
}

	// }else if(tagBox.length==2){
	// 	for(var i=0;i<tagListLi.length;i++){ //跑標簽數
	// 	//如果是選到的標籤，就比對已加入行程內的景點的標籤，標籤一樣的話加回去時就會顯現，標籤不一樣就不會
	// 	if(tagListLi[i].classList.contains('focusStyle') 
	// 		&& (tagListLi[i].innerHTML == tagBox[0].innerHTML 
	// 			|| 
	// 			tagListLi[i].innerHTML == tagBox[1].innerHTML)
	// 		|| tagListLi[i].classList.contains('focusStyle') 

	// 		&& tagListLi[i].innerHTML =='全部'){
	// 		// console.log(tagListLi[i].innerHTML);
	// 		// console.log(blockTag1.innerHTML,blockTag2.innerHTML);

	// 		getData.style.display='inline-block';
		
	// 	}
	//   }
	// }
	
	

		this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);
		if((tmp.length-1)==0){
			console.log((tmp.length-1));
		schduleEmptyTxt.style.display='block';
		}
		for(var i=0;i<getSchduleUls.length;i++){
			lis = getSchduleUls[i].querySelectorAll('li');
			console.log(lis.length);
			if(window.innerWidth<1000 && getSchduleUls[i].style.display=='block'){
				
				
				viewsCount.innerHTML='('+lis.length+')';
				}
		}	
		

		
// var tmp = this.parentNode.parentNode.parentNode.querySelectorAll('li');
}

// var counts = 0;
//將景點加入行程
function addSchduleList(){
			reflashInfo(); //加入前檢查目前li數量
	var copyLiStyle = document.getElementById('copyLiStyle');//抓到樣板
	var ItemName = copyLiStyle.querySelector('.ItemName');//抓取移除icon的位置
	
	var tag = this.parentNode.querySelector('.viewContent');
	// console.log(tag);
	var copyTag	= tag.childNodes[3].cloneNode(true);
	// console.log(copyTag);

	var	getViewDataset = this.parentNode.parentNode.dataset.view;//找到對應事件的父層li的dataset值
	var getLi = document.querySelector('[data-view="'+getViewDataset+'"]');

	var addLi = copyLiStyle.cloneNode(true);//複製樣板
		addLi.id='';//樣板預設id移除
		addLi.dataset.schdule= getViewDataset;//將原景點的dataset丟入要複製的行程景點的dataset，同步兩邊的dataset值建立關聯，到時才能執行restoreView復原
		// console.log(addLi.childNodes[1].childNodes[3]);
		var oddTag = addLi.childNodes[1].childNodes[3];
		// console.log(oddTag,tag);
		addLi.childNodes[1].replaceChild(copyTag,oddTag);
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
					$('.viewIntroduce').remove(); //jquery
					schduleEmptyTxt.style.display='none';
					// counts+=1;
					// viewsCount.innerHTML=counts;
					if(window.innerWidth<1000){
						lis = getSchduleUls[i].querySelectorAll('li');
						viewsCount.innerHTML='('+lis.length+')';
						}

						
					this.parentNode.parentNode.style.display='none';
						
					
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

				

			// var commitBtn = document.querySelector('.saveBtn');
			// 	commitBtn.addEventListener('click',function(){

			// 		var cc = window.confirm('行程已儲存\n"確定"後將根據您所選的行程安排適合的專家\n"取消"將移至會員行程頁面');
			// 		console.log(cc);
			// 		if(cc==true){
			// 		document.querySelector('.expertFilter').style.display ='block';			
			// 		}else{
			// 		alert('跳');
			// 		}
			// });
// var planetFilter = document.querySelector('.planetFilter');
// function getPlanetName(){
// 		var planetName = document.querySelector('.planetName');
// 		var txt = this.querySelector('p');
// 		// console.log(txt.innerHTML);
// 		sessionStorage.setItem("planet", txt.innerHTML);
// 		var x =sessionStorage.getItem("planet");
// 		// console.log(x);
		
// 		// planetName.style.fontFamily='微軟正黑體';
// 		// planetName.style.lineHeight='35px';
		
// 		let a = window.confirm('更換星球將會重置所有安排')
// 		if (a==true) {
// 			planetName.innerHTML = x;
// 			planetFilter.style.display='none';
// 			window.location.reload();
// 		}else{
// 			planetFilter.style.display='none';
			
// 		}
		
		// console.log(cloneDayUl);
		// console.log(getUl);
		// var rep= sessionStorage.getItem("replace");

		// dayParent.replaceChild(cloneDayUl,getUl);
		// schduleBox.replaceChild(cloneSchUl,getSchUl);
		
		// reflashInfo();
		// console.log(cloneDayUl);
		// console.log(getUl);
		 // cloneDayUl = getUl.cloneNode(true);
		 // cloneSchUl = getSchUl.cloneNode(true);
		// console.log(cloneDayUl);
		// console.log(getUl);
		// reflashInfo();

// }
// var a=document.querySelector('.mySchduleList');
// console.log(a);

  // $('#schduleTrig').click(function(){

// setTimeout()
// setTimeout(function(){
// var a=document.querySelector('.mySchduleList');
// console.log(a);

	// $('.mySchduleList').find('li').click(function(){

		// alert('1');indexViewNo
		// sessionStorage.getItem('viewNo')

		//匯入首頁單個景點
		// console.log(sessionStorage.getItem('indexViewNo'));
if (sessionStorage.getItem('indexViewNo')!=null &&sessionStorage.getItem('indexViewNo')!='') {
	var $indexViewNo = sessionStorage.getItem('indexViewNo');


	
	$.ajax({
					url: 'php/addSingleView.php',
					dataType:'text',
					type:'POST',
					// async: false,
					data:{
							viewNo:$indexViewNo,
							
							},
					success:function(data){
						$('#schduleDay1').append(data);

						reflashInfo();
   				// for(var i=0;i<getSchduleUls.length;i++){
   					// console.log(getSchduleUls.length);
   				lis = getSchduleUls[0].querySelectorAll('li');
   				// console.log(lis);
   				if(getSchduleUls[0].childNodes.length!=0){
						schduleEmptyTxt.style.display='none';
						
							//偵測各天的景點
							for(let k=0;k<getViewData.length;k++){
								getViewData[k].style.display='inline-block';
								// console.log(getViewData.length);
							}
							for(let j=0;j<lis.length;j++){
									let num =lis[j].dataset.schdule;

									// console.log(i,num);
									let tempLi=document.querySelector('[data-view="'+num+'"]');
									// console.log(tempLi);
									tempLi.style.display='none';
									// console.log(tempLi);
							}
					}else{
						schduleEmptyTxt.style.display='block';
						for(let k=0;k<getViewData.length;k++){
							getViewData[k].style.display='inline-block';
							}
					}
				// }



			for(var i=1;i<$('#schduleUl ul').length;i++){
				Sortable.create(document.getElementById('schduleDay'+i), {
                                animation: 150,
                     });

			}
				$('.deleteIcon').on('click',restoreView);

				// getval();

				// var ulnum= document.querySelectorAll('.list').length;
				// console.log(ulnum);

				var moveInTime =sessionStorage.getItem("date");
				if(moveInTime!=null){
				getDates(moveInTime);
				console.log(moveInTime);

				}




						},

					error:function(xhr, ajaxOptions, thrownError)
					{ 
					alert("error");
					alert(xhr.status); 
					alert(thrownError);  
					}


				});
}

//匯入分享的景點
if(sessionStorage.getItem('scheduleNo')!=null&&sessionStorage.getItem('indexViewNo')!=''){
	$takeData=sessionStorage.getItem("schduleNo");
	console.log($takeData);
		$.ajax({
			url: 'php/takeData.php',
			dataType:'text',
			type:'POST',
			// async : false,
			data:{
					takeData:$takeData,
					
					},
			success:function(data){
				// $('#day li').remove();
				// $('#day').append
				$('#schduleUl ul').remove();
				$('#schduleUl').append(data);

				// var $schUl = $('#schduleUl ul');
				// console.log($schUl.length);



					// var $transJson=JSON.parse(data);
					// console.log($('#schduleUl ul').length);
				// $('.schduleEmptyTxt').css('display','none');	
				$('#schduleUl ul:nth-of-type(1)').css('display','block');
					// console.log($('#schduleUl ul'));
			// Sortable.create(document.getElementById('day'), {
   //                              animation: 150,
   //                          });	
   				reflashInfo();
   				// for(var i=0;i<getSchduleUls.length;i++){
   					// console.log(getSchduleUls.length);
   				lis = getSchduleUls[0].querySelectorAll('li');
   				// console.log(lis);
   				if(getSchduleUls[0].childNodes.length!=0){
						schduleEmptyTxt.style.display='none';
						
							//偵測各天的景點
							for(let k=0;k<getViewData.length;k++){
								getViewData[k].style.display='inline-block';
								// console.log(getViewData.length);
							}
							for(let j=0;j<lis.length;j++){
									let num =lis[j].dataset.schdule;

									// console.log(i,num);
									let tempLi=document.querySelector('[data-view="'+num+'"]');
									// console.log(tempLi);
									tempLi.style.display='none';
									// console.log(tempLi);
							}
					}else{
						schduleEmptyTxt.style.display='block';
						for(let k=0;k<getViewData.length;k++){
							getViewData[k].style.display='inline-block';
							}
					}
				// }



			for(var i=1;i<=$('#schduleUl ul').length;i++){
				// console.log(i);
				Sortable.create(document.getElementById('schduleDay'+i), {
                                animation: 150,
                     });

			}
				$('.deleteIcon').on('click',restoreView);

				// getval();

				// var ulnum= document.querySelectorAll('.list').length;
				// console.log(ulnum);

				var moveInTime =sessionStorage.getItem("date");
				if(moveInTime!=null){
				getDates(moveInTime);
				console.log(moveInTime);

				}
				var lis = document.querySelectorAll('#schduleDay1 li');
				var viewsCount = document.querySelector('.viewsCount');
				viewsCount.innerHTML='('+(lis.length)+')';

				var daylis = document.querySelectorAll('#day li');
				var daysCount = document.querySelector('.daysCount');
				daysCount.innerHTML='('+daylis.length+')';
				

				},

			error:function(xhr, ajaxOptions, thrownError)
			{ 
			alert("error");
			alert(xhr.status); 
			alert(thrownError);  
			}




		});

	}
	
//儲存取值

// var ss = document.querySelector('.ss');
// ss.addEventListener('click',submit);
// function submit(){
// 	var sch={};
// 	var dateSpan = document.querySelectorAll('.date');
					
// 			var firstDay = dateSpan[0].innerHTML;
// 				firstDay = firstDay.replace("年","-");
// 				firstDay = firstDay.replace("月","-");
// 				firstDay = firstDay.replace("日","");
// 			var num = dateSpan.length-1;
// 			var lastDay = dateSpan[num].innerHTML;
// 				lastDay = lastDay.replace("年","-");
// 				lastDay = lastDay.replace("月","-");
// 				lastDay = lastDay.replace("日","");
// 				// console.log(firstDay);
// 				// console.log(lastDay);
// 	var schName=document.querySelector('.searchSchdule p').innerHTML;
// 	var planetName = document.querySelector('.planetName').innerHTML;
// 	var schViewUls = document.querySelectorAll('.list');
// 	var dayLiOrder = document.querySelectorAll('#day li');
// 	sch.name = schName;
// 	sch.depTime = firstDay;
// 	sch.arrTime = lastDay;
// 	sch.planetName = planetName.trim();
// 	sch.share=0;
// 	sch.memNo = 2;
// 	sch.expertNo= 102;
// 	sch.itineraryPic='p1_v1_03.jpg';
// 	sch.daysData=[];

// 	for(var i =0;i<schViewUls.length;i++){
		
// 		var dayLiSet = dayLiOrder[i].dataset.daybox;
// 		// console.log(dayLiSet);
// 		var schViews = document.querySelectorAll('[data-schdulebox="'+dayLiSet+'"] li p');
// 		// console.log(schViews);
// 			sch.daysData[i]=[];
// 			for(var j=0;j<schViews.length;j++){
				
// 			sch.daysData[i][j]=schViews[j].innerHTML;
			
// 			}
			
		
// 	}
// 	console.log(sch);
// 	send();
// 	function send(){
// 		if (sch.arrTime=='尚未選擇期' || sch.name=='' ){
// 			alert('請確認日期、行程名稱已填寫');
// 		}else{
// 			var jsonStr = JSON.stringify(sch);
//  	  // document.write(jsonStr);
//     var xhr=new XMLHttpRequest();
//     xhr.onload=function (){
//        if( xhr.status == 200 ){
//        	alert('儲存成功');
// 	       	}else{
// 	          alert( xhr.status );
// 	       	}
//   		}	

// 	    xhr.open("POST", "php/scheduleAdd.php",true);
// 	    xhr.setRequestHeader("content-type","application/x-www-form-urlencoded"); 
// 	    xhr.send("schedules="+jsonStr);

//  		}
// 	}
// }
 	



}
