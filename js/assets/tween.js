function dofirst(){

TweenMax.fromTo('.box_01' , 5,{x:0,y:0,},{x:100,y:100 ,repeat:-1,yoyo:true, 
rotationZ: 180,  //旋轉
    transformOrigin : 'center top'});

TweenMax.fromTo('.box_05', 2, {
    x: 0
}, {
    bezier: {
        // curviness: 1.25,
        values: [{
            x: 700,
            y: 400,

        }, {
            x: 550,
            y: 400
        },{
            x: 600,
            y: 400
        },{
            x: 0,
            y: 0
        }],
        autoRotate: true,

    },
      repeat:-1,
        yoyo:true
});

TweenMax.to('.box_06',1,{x:300,repeat:2});
TweenMax.from('.box_07',1,{x:500,repeat:2});

//set
TweenMax.set('.box_set', {
    x:200
});
//換class
TweenMax.set('.box_class01', {
    className: "box10"
});

//增加class
TweenMax.set('.box_class02', {
    className: "+=box10"
});


TweenMax.staggerFromTo('.section02 .box', 1, {
    scale: 1.4,
    alpha: 0
}, {
    scale: 1,
    alpha: 1,
    ease: Elastic.easeOut
}, 0.2);


var _btn = $(".section02 .btn");

_btn.on('click',function(){
    TweenMax.staggerFromTo('.section02 .box', 1, {
        scale: 1.4,
        alpha: 0
    }, {
        scale: 1,
        alpha: 1,
        ease: Elastic.easeOut
    }, 0.2);
});


//
var tl = new TimelineMax({
  repeat : 2,
  repeatDelay: 5
});

//
var tl = new TimelineMax();

tl.to('.box_13', 1, {
    x: 100
}).to('.box_14', 1, {
    y: 40
}).to('.box_15', 1, {
    x: 20,
    y: 150
});
var tl_01 = new TimelineMax({
    repeat : 2,
    yoyo: true
  });

tl_01.add(TweenMax.to('.box_16' ,1,{x:100}));
tl_01.add(TweenMax.to('.box_17',1,{x: 200}));




var tl = new TimelineMax({
    repeat: 2,
    repeatDelay: 1,
    yoyo: true,
    //呼叫function
    onComplete: action 
});



var scene = document.getElementById('parallax_box');
//把滾動視差加入場景
var parallax = new Parallax(scene);





$(function () {

    var tls = new TimelineMax();
    var controller = new ScrollMagic.Controller();


    var tween_s = tls.to('.section05 .title', 1, {
        y: 30,
        alpha: 1
    }).to('.section05 .slogan', 1, {
        y: 40,
        alpha: 1
    });

    var scence_01 = new ScrollMagic.Scene({
            triggerElement: "#trigger",
            offset: 180
        }).setTween(tween_s)
        .addIndicators()
        .addTo(controller)



    console.log("scrollmagic")


})




}

