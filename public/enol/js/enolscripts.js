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

document.addEventListener('DOMContentLoaded', () => {
  // Functions to open and close a modal
  function openModal($el) {
    $el.classList.add('is-active');
  }

  function closeModal($el) {
    $el.classList.remove('is-active');
  }

  function closeAllModals() {
    (document.querySelectorAll('.modal') || []).forEach(($modal) => {
      closeModal($modal);
    });
  }

  // Add a click event on buttons to open a specific modal
  (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
    const modal = $trigger.dataset.target;
    const $target = document.getElementById(modal);
    console.log($target);

    $trigger.addEventListener('click', () => {
      openModal($target);
    });
  });

  // Add a click event on various child elements to close the parent modal
  (document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
    const $target = $close.closest('.modal');

    $close.addEventListener('click', () => {
      closeModal($target);
    });
  });

  // Add a keyboard event to close all modals
  document.addEventListener('keydown', (event) => {
    const e = event || window.event;

    if (e.keyCode === 27) { // Escape key
      closeAllModals();
    }
  });
});