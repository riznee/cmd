
document.addEventListener('DOMContentLoaded', () => {
  (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
    const $notification = $delete.parentNode;

    $delete.addEventListener('click', () => {
      $notification.parentNode.removeChild($notification);
    });
  });
});

var select = document.getElementById("selectIcon");
var options = [
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
for (var i = 0; i < options.length; i++) {
  var opt = options[i];
  select.innerHTML += "<option value=\"" + opt + "\"> " + opt + "</option>";
}

function initMap() {
  // The location of Uluru
  const uluru = { lat: -25.344, lng: 131.036 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}
