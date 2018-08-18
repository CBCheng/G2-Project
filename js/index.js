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
    var borCh = '6px solid #6cd5ff';
    var borOr = '6px solid #fff';
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

            e.target.style.backgroundColor = "#fff";
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

            e.target.style.backgroundColor = "#fff";
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

            e.target.style.backgroundColor = "#fff";
            var pulseEle = e.target.parentNode.getElementsByTagName("div")[1];
            pulseEle.style.border = borOr;
            pulseEle.style.animation = aniOr6s;
        }
    }
});

//====== yes&no hover ======
$(function(){
    var boxSdoCh = "0px 0px 30px 5px #000 inset";
    var boxSdoOr = "0px 0px 0px 0px #000 inset";
    $('.no').on('mouseover',function(){
        $(this).css({'border':'2px solid #000',
                    'box-shadow':boxSdoCh,
                    'z-index':'5'});
        $('.noImg').css({'clip-path':'circle(110% at 76.5% 70%)',
                    'z-index':'5'});
        $('.yes').css('opacity','0');
    });
    $('.no').on('mouseout',function(){
        $(this).css({'border':'2px solid #6cd5ff',
                    'box-shadow':boxSdoOr,
                    'z-index':'0'});
        $('.noImg').css({'clip-path':'circle(0% at 76.5% 70%)',
                    'z-index':'0'});
        $('.yes').css('opacity','1');
    });
    //--------------
    $('.yes').on('mouseover',function(){
        $(this).css({'border':'2px solid #000',
                    'box-shadow':boxSdoCh,
                    'z-index':'5'});
        $('.yesImg').css({'clip-path':'circle(110% at 20.5% 68.5%)',
                        'z-index':'5'});
        $('.no').css('opacity','0');
    });
    $('.yes').on('mouseout',function(){
        $(this).css({'border':'2px solid #6cd5ff',
                    'box-shadow':boxSdoOr,
                    'z-index':'0'});
        $('.yesImg').css({'clip-path':'circle(0% at 20.5% 68.5%)',
                        'z-index':'0'});
        $('.no').css('opacity','1');
    });
});