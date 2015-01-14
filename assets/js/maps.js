/**
 * Created by Arman on 7-1-2015.
 */
function initialize() {
    var location = new google.maps.LatLng(51.81469, 4.726223);

    var mapOptions = {
        center: location,
        zoom: 14,
        draggable: false,
        disableDefaultUI: true,
        scrollwheel: false
    };

    var marker = new google.maps.Marker({
        position: location,
        map: map,
        title: "Bowlingbaan de Merwehal"
    });

    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

    marker.setMap(map);

    var infoContent = '<div id="head">' + '<h3>Bowling & Partycentrum de Merwehal</h3>' + '</div>' +
                  '<div id="content">' + '<p>Baanhoekweg 1</p>' + '<p>3313LA Dordrecht</p>' + '</div>';

    var infoWindow = new google.maps.InfoWindow({
        content: infoContent
    });

    google.maps.event.addListener(marker, 'click', function(){
        infoWindow.open(map,marker);
    });

}

google.maps.event.addDomListener(window, 'load', initialize);