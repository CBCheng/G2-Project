//====== planet move&hover ======
$(function(){
    var colorOr = 'rgba(255, 255, 255, 0.5)';
    $('.choPlanet').on('click',function(event){
        event.stopPropagation();
        $(this).css('left','5%');
        $('.choPlanet').not(this).css('left','-5%');
        $('.choPlanet span').css('color',colorOr);
        $(this).children('span').css('color','rgb(255, 255, 255)');
        var num = $(this).index();
        $('.bigPlt').css({'transform':'scale(0)',
                        'z-index':'0'});
        $('.bigPlt').eq(num).css({'transform':'scale(1)',
                        'z-index':'2'});
        $('.mobViewItem').css('display','none');
        $('.mobViewItem').eq(num).css('display','block');
        $(this).unbind('mouseout');
    });

    var ans = $('.choPlanet').parent().width()*5/100;
    $('.choPlanet').mouseover(function(e){
        //console.log(ans);
        //console.log($(this).css('left'));
        if($(this).css('left')== ans+'px'){
            return;
        } else{
            $(this).children('span').css('color','#fff');
            $('.choPlanet').mouseout(function(){
                if($(this).css('left')> '-'+ans+'px'){
                    $(this).children('span').css('color','#fff');
                }else{
                    $(this).children('span').css('color',colorOr);
                }
            });
        }
    });
});

//====== planet dot hover ======
$(function(){
    var borCh = '4px solid #6cd5ff';
    var borOr = '4px solid rgba(255, 255, 255, .5)';
    var aniCh = 'dotHover 0.8s infinite';
    var aniOr0s = 'dotHover2 4.8s infinite';
    var aniOr6s = 'dotHover2 4.8s 6s infinite';
    var aniOr3s = 'dotHover2 4.8s 3s infinite';
    //--------------
    var speed1Divs = document.querySelectorAll(".viewDot div.speed1");
    for(var i=0; i<speed1Divs.length; i++){

        speed1Divs[i].onmouseover = function(e){

            e.target.style.backgroundColor = "#6cd5ff";
            var pulseEle = e.target.parentNode.getElementsByTagName("div")[1];
            pulseEle.style.border = borCh;
            pulseEle.style.animation = aniCh;
        }

        speed1Divs[i].onmouseout = function(e){

            e.target.style.backgroundColor = "rgba(255, 255, 255, .5)";
            var pulseEle = e.target.parentNode.getElementsByTagName("div")[1];
            pulseEle.style.border = borOr;
            pulseEle.style.animation = aniOr0s;
        }
    }
    //--------------
    var speed2Divs = document.querySelectorAll(".viewDot div.speed2");
    for(var i=0; i<speed2Divs.length; i++){

        speed2Divs[i].onmouseover = function(e){

            e.target.style.backgroundColor = "#6cd5ff";
            var pulseEle = e.target.parentNode.getElementsByTagName("div")[1];
            pulseEle.style.border = borCh;
            pulseEle.style.animation = aniCh;
        }

        speed2Divs[i].onmouseout = function(e){

            e.target.style.backgroundColor = "rgba(255, 255, 255, .5)";
            var pulseEle = e.target.parentNode.getElementsByTagName("div")[1];
            pulseEle.style.border = borOr;
            pulseEle.style.animation = aniOr3s;
        }
    }
    //--------------
    var speed3Divs = document.querySelectorAll(".viewDot div.speed3");
    for(var i=0; i<speed3Divs.length; i++){

        speed3Divs[i].onmouseover = function(e){

            e.target.style.backgroundColor = "#6cd5ff";
            var pulseEle = e.target.parentNode.getElementsByTagName("div")[1];
            pulseEle.style.border = borCh;
            pulseEle.style.animation = aniCh;
        }

        speed3Divs[i].onmouseout = function(e){

            e.target.style.backgroundColor = "rgba(255, 255, 255, .5)";
            var pulseEle = e.target.parentNode.getElementsByTagName("div")[1];
            pulseEle.style.border = borOr;
            pulseEle.style.animation = aniOr6s;
        }
    }
});

//====== planet dot click ======
// $(function(){
//     $('.plVi,.viewName').on('click',function(){
//         console.log(this.id);
//         $('.viewBg').css('transform','rotateX(0deg)');
//     });
//     $('.exit').on('click',function(){
//         $('.viewBg').css('transform','rotateX(90deg)');
//     });
// });

$(function(){
    $('.plVi').on('click',function(){
        // var ids = $(this).id;
        // console.log($(this).attr("id"));
        var thisId = $(this).attr("id");
        $.ajax({
            url: 'php/indexViewAjax.php',
            type: 'POST',	
            dataType: 'text',
            data: '&thisId=' + thisId,				
            success: function(data){
                // alert(data);
                $('.viewBg').html(data);
                $('.viewBg').css('transform','rotateX(0deg)');
            },
            error: function(){
                alert('error');
            }
        });
        // $('.viewBg').css('transform','rotateX(0deg)');
    });
});


// ====== part1 h1 anime ======
// Wrap every letter in a span
$('.ml14 .letters').each(function(){
    $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});
  
anime.timeline({loop: false})
    .add({
      targets: '.ml14 .under',
      scaleX: [0,1],
      opacity: [0.5,1],
      easing: "easeInOutExpo",
      duration: 900
    }).add({
      targets: '.ml14 .letter',
      opacity: [0,1],
      translateX: [40,0],
      translateZ: 0,
      scaleX: [0.3, 1],
      easing: "easeOutExpo",
      duration: 800,
      offset: '-=600',
      delay: function(el, i) {
        return 150 + 25 * i;
      }
    });
    // .add({
    //   targets: '.ml14',
    //   opacity: 0,
    //   duration: 1000,
    //   easing: "easeOutExpo",
    //   delay: 1000
    // });
//====== halo hover ======
// var scene = document.getElementById('haloItem');
// //把滾動視差加入場景
// var parallax = new Parallax(scene);

// var tl_para = new TimelineMax({
//     onComplete: parallax
// });

// tl_para.to('.part1 .halo5Co1', 1, {
// }).to('.part1 .halo1', 1, {
// }).to('.part1 .halo3', 1, {
// }).to('.part1 .halo4', 1, {
// }).to('.part1 .halo5', 1, {
// }).to('.part1 .halo4Co1', 1, {
// }).to('.part1 .halo4Co2', 1, {
// }).to('.part1 .halo3Co1', 1, {
// }).to('.part1 .halo3Co2', 1, {
// });




console.log($(document).width());
//====== yes&no hover ======
$(function(){
    if($(document).width() > 767 ){
        var boxSdoCh = "0px 0px 30px 5px #000 inset";
        var boxSdoOr = "0px 0px 0px 0px #000 inset";
        $('.no').on('mouseover',function(){
            $(this).css({'border':'2px solid #000',
                        'box-shadow':boxSdoCh,
                        'z-index':'5'});
            $('.noImg').css({'clip-path':'circle(110% at 76.7% 71%)',
            'z-index':'5'});
            $('.yes').css('opacity','0');
            $('.no span').css('opacity','0');
            //$('.no img').css('opacity','0');
            $('.no').children().not('span').css('opacity','1');
        });
        $('.no').on('mouseout',function(){
            $(this).css({'border':'2px solid #6cd5ff',
                        'box-shadow':boxSdoOr,
                        'z-index':'0'});
            $('.noImg').css({'clip-path':'circle(0% at 76.7% 71%)',
            'z-index':'0'});
            $('.yes').css('opacity','1');
            $('.no span').css('opacity','1');
            $('.no').children().not('span').css('opacity','0');
        });
        //--------------
        $('.yes').on('mouseover',function(){
            $(this).css({'border':'2px solid #000',
                        'box-shadow':boxSdoCh,
                        'z-index':'5'});
            $('.yesImg').css({'clip-path':'circle(110% at 20.7% 70.4%)',
                            'z-index':'5'});
            $('.no').css('opacity','0');
            $('.yes span').css('opacity','0');
            $('.yes').children().not('span').css('opacity','1');
        });
        $('.yes').on('mouseout',function(){
            $(this).css({'border':'2px solid #6cd5ff',
                        'box-shadow':boxSdoOr,
                        'z-index':'0'});
            $('.yesImg').css({'clip-path':'circle(0% at 20.7% 70.4%)',
                            'z-index':'0'});
            $('.no').css('opacity','1');
            $('.yes span').css('opacity','1');
            $('.yes').children().not('span').css('opacity','0');
        });
    }
});

//====== expert hover ======
$(function(){
    if($(document).width() > 767 ){
        $('.zzz').on('mouseover',function(){
            $('.expertAll').css('z-index','0');
            $(this).parent().css('z-index','5');
            
            $(this).children('img').css({'transform':'scale(1.1)',
                                        'box-shadow':'0px 0px 20px 2px #000'});
            $(this).prev().prev().css('transform','scale(6.5,1)');
            $(this).prev().css('transform','scale(4.5,1)');
        $(this).children('.exAllText').css('opacity','1');
        });
        $('.zzz').on('mouseout',function(){
            $('.expertAll').css('z-index','0');
            $(this).parent().css('z-index','5');
            
            $(this).children('img').css({'transform':'scale(1)',
                                        'box-shadow':'0px 0px 0px 0px #000'});
            $(this).prev().prev().css('transform','scale(1)');
            $(this).prev().css('transform','scale(1)');
            $(this).children('.exAllText').css('opacity','0');
        });
    }
});


//-----------

function doFirst(){
	var leftPage = document.getElementById('leftPage');
	var rightPage = document.getElementById('rightPage');
	var travelGroup = document.querySelectorAll('.travelGroup');
	var gFirst = window.getComputedStyle(travelGroup[0],null).getPropertyValue("display");
	var gSecond = window.getComputedStyle(travelGroup[1],null).getPropertyValue("display");
	var gThird = window.getComputedStyle(travelGroup[2],null).getPropertyValue("display");
	leftPage.onclick = changeLeft;
	rightPage.onclick = changeRight;

}

function changeLeft(){
	var leftPage = document.getElementById('leftPage');
	var rightPage = document.getElementById('rightPage');
	var travelGroup = document.querySelectorAll('.travelGroup');
	var gFirst = window.getComputedStyle(travelGroup[0],null).getPropertyValue("display");
	var gSecond = window.getComputedStyle(travelGroup[1],null).getPropertyValue("display");
	var gThird = window.getComputedStyle(travelGroup[2],null).getPropertyValue("display");
	if(gFirst == 'none' &&  gThird == 'none'){
		travelGroup[0].style.display = 'block';
		travelGroup[0].style.animation = 'groupFirst'+''+'.3s';
		travelGroup[1].style.display = 'none';
		
	}else if(gFirst == 'none' &&  gSecond == 'none'){
		travelGroup[1].style.display = 'block';
		travelGroup[1].style.animation = 'groupSecond'+''+'.3s';
		travelGroup[2].style.display = 'none';
		
	}else{
		travelGroup[0].style.animation = 'groupFirstStop'+''+'.3s';
	}
	
};
function changeRight(){
	var leftPage = document.getElementById('leftPage');
	var rightPage = document.getElementById('rightPage');
	var travelGroup = document.querySelectorAll('.travelGroup');
	var gFirst = window.getComputedStyle(travelGroup[0],null).getPropertyValue("display");
	var gSecond = window.getComputedStyle(travelGroup[1],null).getPropertyValue("display");
	var gThird = window.getComputedStyle(travelGroup[2],null).getPropertyValue("display");
	if(gSecond == 'none' &&  gThird == 'none'){
		travelGroup[0].style.display = 'none';
		travelGroup[1].style.display = 'block';
		travelGroup[1].style.animation = 'groupSecond'+''+'.3s';

	}else if(gFirst == 'none' &&  gThird == 'none'){
		travelGroup[1].style.display = 'none';
		travelGroup[2].style.display = 'block';
		travelGroup[2].style.animation = 'groupThird'+''+'.3s';
		
	}else{
		
			travelGroup[2].style.animation = 'groupThirdStop'+''+'.3s';
			// travelGroup[2].addEventListener('webkitAnimationEnd',function(){
			// 	travelGroup[2].style.animation = '';
			// })
	}
};
window.onload = doFirst;

// console.log($(document).width());

// var bb;
// $('.aaa').click(function(){
//     // bb = $(this).index();
//     // $(this).attr('herf','expert.html');
//     $('goAllRefer').click();
// });