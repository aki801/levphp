$('.show-card').click(function(e) {
  $('.card').addClass('show').css('display', 'block');
  $('.show-card').addClass('hide');
});

$('.card .close').click(function(e) {
  $('.card').css('display', 'none');
});