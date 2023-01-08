$(document).on('click', '.map-point-sm', function() {
	var show = $(this).data('show');
	$(show).removeClass("hide").siblings().addClass("hide");
  });

  $('.map-point-sm').on('click', function(){
    $('.map-point-sm').removeClass('selected');
    $(this).addClass('selected');
});