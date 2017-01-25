<!DOCTYPE html>
<html>
  <head>
    <img src="logo.png"/>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">

      <!--links css to html-->
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <script src=javascript.js></script>
      <link rel="stylesheet" type="text/css" href="ryw_style.css" media="screen" />

  </head>
  <body>
    <div id="map"></div>
    <h2 id="distance"></h2>
    <h2 id="lat_long"></h2>
    <p id="timer">Click on the button below to start the timer!</p>
    <button onClick="myTimer = setInterval(myCounter, 1000)">Start timer!</button>
    <button onClick="clearInterval(myTimer); write_file();">Stop timer!</button>
    <h3 id="stuff"></h3>
    <!-- <form>
  <input type="button" value="Submit" onclick="clickEvent();" />
</form> -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAf0Nha2Aj10tTGo39umyxCaCgw5BOkIyI&callback=initMap">
    </script>
    <img src="bus.png"/>
  </body>
</html>
