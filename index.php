<!DOCTYPE html>
<html>
  <head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">

      <!--links css to html-->
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <script src=javascript.js></script>

  </head>
  <body>
    <h1>Noah Luddy</h1>
    <div id="map"></div>
    <form>
  <input type="button" value="Submit" onclick="clickEvent();" />
</form>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAf0Nha2Aj10tTGo39umyxCaCgw5BOkIyI&callback=initMap">
    </script>
  </body>
</html>
