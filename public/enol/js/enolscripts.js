// $(document).ready(function() {
//     $(".dropdown-toggle").dropdown();
// });

// $(document).ready(function(){
//     $('[data-toggle="tooltip"]').tooltip();   
//   });



// bulmaCarousel.attach('#post_images', {
//     slidesToScroll: 1,
//     slidesToShow: 1,
//     loop: true,
// });

document.addEventListener('DOMContentLoaded', () => {
    (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
    const $notification = $delete.parentNode;
  
    $delete.addEventListener('click', () => {
      $notification.parentNode.removeChild($notification);
    });
  });
});

var select = document.getElementById("selectIcon");
  
  var options= [
    'null',
    'fa fa-bank',
    'fa fa-bell',
    'fa fa-book',
    'fa fa-bus',
    'fa fa-calculator',
    'fa fa-calendar',
    'fa fa-camera',
    'fa fa-car',
    'fa fa-check',
    'fa fa-cloud',
    'fa fa-comment',
    'fa fa-compass',
    'fa fa-cube',
    'fa fa-wrench'
  ]

select.innerHTML = "";
for(var i = 0; i < options.length; i++) {
  var opt = options[i];
  select.innerHTML += "<option value=\"" + opt + "\"> "+ opt +"</option>";
}


var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}