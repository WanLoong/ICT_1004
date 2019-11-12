var js_file = document.createElement('script');
js_file.type = 'text/javascript';
js_file.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyBWYRpKSmZtBiBy8I1qVqsewYuDmG1AXGc&callback=myMap";
document.getElementsByTagName('head')[0].appendChild(js_file);
var mapProp;
var map;

function myMap() {
    mapProp= {
        center:new google.maps.LatLng(1.3521,103.8198),
        zoom:15,
        mapTypeId: google.maps.MapTypeId.HYBRID
    };
    map = new google.maps.Map(document.getElementById("googleMaps"),mapProp);

    google.maps.event.addDomListener(window, 'load', myMap);
}

function display_page(lat, lng)
{
    var latLng = new js_file.maps.LatLng(lat, lng);
    map.panTo(latLng);
}

function add_marker(lat, lng)
{
    var position = new js_file.google.maps.LatLng(lat, lng);
    var marker = new js_file.google.maps.Marker({position: position, map: map});
    marker.setMap(map);
    
}

