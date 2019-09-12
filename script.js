/* >>>>>>>>>> SMOOTH SCROLL <<<<<<<<<< */
$(document).ready(function(){
    $("a").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            if ((hash.includes("carousel") || hash.includes("Carousel")) == false) {
              $('html, body').animate({
                  scrollTop: $(hash).offset().top
              }, 800, function(){
                  window.location.hash = hash;
              });
            }
        }
    });
});


/* Display commentaries */
function showCommentaries(type){
  var commentaries = document.getElementsByClassName('commentary');
  var commentarySelected = 0;
  var commentaryToShow = 0;
  var nbCommentaries = commentaries.length;

  for(var i=0 ; i<nbCommentaries ; i++){
    if(commentaries[i].classList.contains("d-block")){
      commentarySelected = i;
      break;
    }
  }

  if(type == 1){
    if(commentarySelected != 0)
      commentaryToShow = commentarySelected - 1;
    else
      commentaryToShow = nbCommentaries -1;
  }
  else{
    if(commentarySelected != (nbCommentaries -1))
      commentaryToShow = commentarySelected + 1;
    else
      commentaryToShow = 0;
  }

  for(var i=0 ; i<commentaries.length ; i++){
    if(i == commentaryToShow){
      commentaries[i].classList.remove('d-none');
      commentaries[i].classList.add('d-block');
    }
    else{
      commentaries[i].classList.remove('d-block');
      commentaries[i].classList.add('d-none');
    }
  }
}

/* CAROUSEL */
$('#myCarousel').carousel({
  interval: 10000
})

$('.carousel .carousel-item').each(function(){
    var minPerSlide = 3;
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i=0;i<minPerSlide;i++) {
        next=next.next();
        if (!next.length) {
        	next = $(this).siblings(':first');
      	}

        next.children(':first-child').clone().appendTo($(this));
      }
});

/* Progress bar */
$(function() {

  $(".progress").each(function() {

    var value = $(this).attr('data-value');
    var left = $(this).find('.progress-left .progress-bar');
    var right = $(this).find('.progress-right .progress-bar');

    if (value > 0) {
      if (value <= 50) {
        right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
      } else {
        right.css('transform', 'rotate(180deg)')
        left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
      }
    }

  })

  function percentageToDegrees(percentage) {

    return percentage / 100 * 360

  }

});


/* Features */
function overFeature(el, nb){
  var container = el.getElementsByClassName('img-element');
  var images = container[0].getElementsByTagName('img');
  images[0].src = "img/bg_feature_1.png";
  images[1].src = "img/bg_feature_2.png";
}

function leaveFeature(el){
  var container = el.getElementsByClassName('img-element');
  var images = container[0].getElementsByTagName('img');
  images[0].src = "img/bg_feature_2.png";
  images[1].src = "img/bg_feature_1.png";
}


/* Fix features bug */
var elements = document.getElementsByClassName('img-element');

window.onresize = function(event) {
  if(document.body.clientWidth <= 588 && document.body.clientWidth >= 420)
    for(var i=0 ; i<elements.length ; i++){
      elements[i].classList.remove("px-0");
    }
  else {
      for(var i=0 ; i<elements.length ; i++){
        if(!elements[i].classList.contains("px-0"))
          elements[i].classList.add("px-0");
      }
  }
};
