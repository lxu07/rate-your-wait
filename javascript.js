// Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 18
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            // document.getElementById("distance1").innerHTML = pos.lat;
            // document.getElementById("distance2").innerHTML = pos.lng;

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            map.setCenter(pos);
  var R = 6371; // Radius of the earth in km
  var dLat = deg2rad(38.6360-pos.lat);  // deg2rad below
  var dLon = deg2rad(-90.2624-pos.lng);
  var a =
    Math.sin(dLat/2) * Math.sin(dLat/2) +
    Math.cos(deg2rad(pos.lat)) * Math.cos(deg2rad(38.6360)) *
    Math.sin(dLon/2) * Math.sin(dLon/2)
    ;
  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
  var d = R * c; // Distance in km
  document.getElementById("distance").innerHTML = "You are " + d + " km away from Central West End Station.";
  document.getElementById("lat_long").innerHTML = "The exact coordinates of Central West End Station are: 38.6360&deg;N and -90.2624&deg;W.";

function deg2rad(deg) {
  return deg * (Math.PI/180)
}
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }

      var sec = 0;
      function myCounter() {
          document.getElementById("timer").innerHTML = "You've waited " + ++sec + " seconds.";
      }

      function write_file() {
        var data {
          seconds: sec,
          distance: d,
          latitude: 38.6360,
          longitude: -90.2624
        }
        
      }
// function clickEvent (){
//     alert("Hey!");
// }
