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


bulmaCarousel.attach('#slider', {
  slidesToScroll: 1,
  slidesToShow: 3,
  infinite: true,
});