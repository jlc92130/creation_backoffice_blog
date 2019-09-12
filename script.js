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
