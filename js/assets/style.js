    //    桌機登入下拉選單
    $(function () {
        $('.memberSign').click(function(){
            $('.memberSelect').toggle();
            $('.memberSign a').toggleClass("active")
        });
    });
    //   手機漢堡選單
    $(function () {
        $(".hambger").on('click',function(){
            $(this).find(".line").toggleClass("open");
            $('.menuMobile').toggleClass("activeM")        
        });
        $('.menuMobile li').click(function(){
            $('.menuMobile a').toggleClass("activeB");
        });
    });