
$(function(){
  bsCustomFileInput.init();

  $('.flag-yellow').children('div').hide();
  $('.flag-red').children('div').hide();

  $('.custom-acc').click(function(){
  	var row = $(this).attr('data-attr-row');

  	if ($('.rs-yellow-' + row ).is(":visible")) {
      $('.rs-yellow-' + row ).hide();
      $('.rs-red-' + row ).hide();
      $(this).html('Show details');

  	} else {
  		$('.rs-yellow-' + row ).show();
      $('.rs-red-' + row ).show();
      $(this).html('Hide details');
  	}

  });
});