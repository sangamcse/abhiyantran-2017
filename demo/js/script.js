// JavaScript Document
$('.box').css('overflow','hidden');

var h=$(window).height();
var w=$(window).width();

$('#loader-container').css('width',w);
$('#loader-container').css('height',h+40);
$("#slideshow > div:gt(0)").hide();


jQuery(document).ready(function(e){
	e(window).load(function(){e("#loader-container").fadeOut("slow"),e("#wrapper").fadeIn("slow")});
	(function loop() {
  $('.updates').each(function() {
    var $self = $(this);
    $self.parent().queue(function (n) {
      $self.fadeIn(2000).delay(2000).fadeOut(3000, n);
    });
  }).parent().promise().done(loop);
}());
});

setInterval(function() { 
  $('#slideshow > div:first')
    .slideDown(1000)
    .next()
    .slideUp(1000)
    .end()
    .appendTo('#slideshow');
},  2000);

$("#slideshow1 > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow1 > div:first')
    .slideDown(1000)
    .next()
    .slideUp(1000)
    .end()
    .appendTo('#slideshow1');
},  4000);

$("#slideshow2 > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow2 > div:first')
    .slideDown(1000)
    .next()
    .slideUp(1000)
    .end()
    .appendTo('#slideshow2');
},  6000);

$("#slideshow3 > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow3 > div:first')
    .slideDown(1000)
    .next()
    .slideUp(1000)
    .end()
    .appendTo('#slideshow3');
},  8000);

$("#slideshow4 > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow4 > div:first')
    .slideDown(1000)
    .next()
    .slideUp(1000)
    .end()
    .appendTo('#slideshow4');
},  10000);

$('.schedule').mouseenter(function(e) {
    $('.schedule-box').show(300);
}).mouseleave(function(e){
    $('.schedule-box').mouseleave(function(){
        $('.schedule-box').hide(300);
    });
});
