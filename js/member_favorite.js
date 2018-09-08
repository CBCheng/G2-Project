$(document).on('click', '.member_delete', function(){
	console.log(this);
	console.log($(this).data('no'));

	$.ajax({
		url: 'php/member_fav_delete.php',
		dataType: 'text',
		async: false,
		data:{
			expertNo: $(this).data('no'),
		},
		success: function (data) {
			alert(data);

			 // location.reload();

		},
		error: function () {
			alert('error_del');
		}
	});
	$(this).parent().parent().remove();
})
