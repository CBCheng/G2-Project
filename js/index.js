$(function(){
    var colorOr = 'rgba(255, 255, 255, 0.5)';
    $('.choPlanet').on('click',function(){
        $(this).css('left','5%');
        $('.choPlanet').not(this).css('left','-5%');
        $('.choPlanet span').css('color',colorOr);
        $(this).children('span').css('color','#fff');
        var num = $(this).index();
        $('.bigPlt').css({'transform':'scale(0)',
                        'z-index':'0'});
        $('.bigPlt').eq(num).css({'transform':'scale(1)',
                        'z-index':'2'});
    });
});

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
