
function onScroll(){
  $('window').on('touchmove', function(event) {
    event.preventDefault();
    window.scroll({top: 0,left: 0,behavior: 'smooth'})
});

  window.scroll({top: 0,left: 0,behavior: 'smooth'})

}
$(document).ready(function() {
    $('.popup-btn').click(function() {
var id=this.id;

$(document.body).on('touchmove',onScroll()); // for mobile
$(window).on('scroll',onScroll());


      $('.popup-wrap').fadeIn(500);
      $('.popup-box').removeClass('transform-out').addClass('transform-in');
      //  alert(this.id);

    });

    $('.popup-close').click(function(e) {
      $('#cont').css('width', 'max-content');
$('#cont').css('overflow-y', 'scroll');
      $('.popup-wrap').fadeOut(500);
      $('.popup-box').removeClass('transform-in').addClass('transform-out');


    });
  });
