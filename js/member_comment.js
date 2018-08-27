
$('.favorite_tab').on('click', function () {

    $('.favorite_tab').not(this).removeClass('active');
    $(this).addClass('active');

    var tabPageToShow = $(this).attr('rel');
    $('.favorite_page.active').hide(0, showNextTabPage);

    function showNextTabPage() {
        $('#' + tabPageToShow).show(0, function () {
            $(this).addClass('active');
        })
    }
});




$(".commentBtn").click(function () {
    $("#lightBox_com_father").show(500);
})

$('input[type="button"]').click(function () {
    $("#lightBox_com_father").hide(500);
})

$('.fas').click(function () {
    $("#lightBox_com_father").hide(500);
})


