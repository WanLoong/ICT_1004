
//var js_file = document.createElement('script');
//js_file.type = 'text/javascript';
//js_file.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyBWYRpKSmZtBiBy8I1qVqsewYuDmG1AXGc&callback=myMap";
//document.getElementsByTagName('head')[0].appendChild(js_file);
var mapProp;
var map;

//function myMap() {
//    var mapProp= {
//        center:new google.maps.LatLng(". $row['latitude'] . "," . $row['longitude'] ."),
//        zoom:15,
//        mapTypeId: google.maps.MapTypeId.HYBRID
//    };
//    var map = new google.maps.Map(document.getElementById('googleMaps'),mapProp);
//    var marker2_co = new google.maps.LatLng(". $row['latitude'] . "," . $row['longitude'] .");
//    var marker2 = new google.maps.Marker({position: marker2_co});
//
//    marker2.setMap(map);
//    
//    google.maps.event.addDomListener(window, 'load', myMap);
//}

function display_page(lat, lng)
{
    var latLng = new js_file.maps.LatLng(lat, lng);
    map.panTo(latLng);
}

function add_marker(lat = 1.3013, lng = 103.905)
{
    var position = new google.maps.LatLng(lat, lng);
    var marker = new google.maps.Marker({position: position, map: map});
    marker.setMap(map);
}
    

