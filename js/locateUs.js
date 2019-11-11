var mapProp;
var map;

function myMap() {
    mapProp= {
        center:new google.maps.LatLng(1.3521,103.8198),
        zoom:10,
        mapTypeId: google.maps.MapTypeId.HYBRID
    };
    map = new google.maps.Map(document.getElementById("googleMaps"),mapProp);

    google.maps.event.addDomListener(window, 'load', myMap);
}

function display_page(lat, lng)
{
    var latLng = new google.maps.LatLng(lat, lng);
    map.panTo(latLng);
}

function add_marker(lat, lng)
{
    var marker = new google.maps.Marker(lat, lng);
    marker.setMap(map);
    
}

