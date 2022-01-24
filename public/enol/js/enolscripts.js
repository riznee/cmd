
document.addEventListener('DOMContentLoaded', () => {
    (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
      const $notification = $delete.parentNode;
  
      $delete.addEventListener('click', () => {
        $notification.parentNode.removeChild($notification);
      });
    });
  });


  function refreshCaptcha(){
    $.ajax({
    url: "/refereshcapcha",
    type: 'get',
      dataType: 'html',        
      success: function(data) {
          $('.captcha-image').html(data);
          console.log(data);
      },
      error: function(data) {
        alert('Try Again.');
      }
    });
    }
