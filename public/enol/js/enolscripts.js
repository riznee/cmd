$(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
  });



  bulmaCarousel.attach('#post_images', {
    slidesToScroll: 1,
    slidesToShow: 1,
    loop: true,
  });

  document.addEventListener('DOMContentLoaded', () => {
    (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
      const $notification = $delete.parentNode;
  
      $delete.addEventListener('click', () => {
        $notification.parentNode.removeChild($notification);
      });
    });
  });