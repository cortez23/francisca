   <script>
var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: new google.maps.LatLng(-33.438143, -70.639628),
    mapTypeId: 'roadmap'
  });

  var iconBase = 'http://la-zapateria.cl/img/icons/';
  var icons = {
    taller: {
      icon: iconBase + 'icons-taller.png'
    },
    metro: {
      icon: iconBase + 'icons-metro.png'
    }
  };

  var features = [
    {
      position: new google.maps.LatLng(-33.438155, -70.639640),
      type: 'taller'
    }, {
      position: new google.maps.LatLng(-33.440574, -70.640630),
      type: 'metro'
    }, {
      position: new google.maps.LatLng(-33.436505, -70.644261),
      type: 'metro'
    }
  ];

  // Create markers.
  features.forEach(function(feature) {
    var marker = new google.maps.Marker({
      position: feature.position,
      icon: icons[feature.type].icon,
      map: map
    });
  });
}
    </script>