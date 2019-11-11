function myMap() {
    var mapProp= {
        center:new google.maps.LatLng(1.3521,103.8198),
        zoom:10,
        mapTypeId: google.maps.MapTypeId.HYBRID
    };
    var map = new google.maps.Map(document.getElementById("googleMaps"),mapProp);
    var marker = new google.maps.Marker({position: mapProp.center});

    marker.setMap(map);
    google.maps.event.addDomListener(window, 'load', myMap);
}

function display_page()
{
    var mapProp= {
        center:new google.maps.LatLng(33.8688,151.2093),
        zoom:10,
        mapTypeId: google.maps.MapTypeId.HYBRID
    };
    var map = new google.maps.Map(document.getElementById("googleMaps"),mapProp);
}

