<?php include 'navbar.php'; ?>

<div class="container-fluid bg-1 text-center"></div>
<div class="container-fluid bg-2 text-center">
<?php
    if(empty($_POST['date']))
      $new_date = "";
    else
      $new_date = date('Y-m-d', strtotime($_POST['date']));

    if(empty($_POST["location"]))
      echo '<div id="errormsg" style="text-align: left"> Error: Invalid Location </div>';
    else {
      $linkLocation = "https://us1.locationiq.com/v1/search.php?key=dec61f8a36c608&q=" . $_POST["location"] . "&format=json";
      echo '<div id="credits" style="text-align: left"> You entered: ' . $_POST["location"] . '</div>';
      echo '<div id="credits" style="text-align: left">' . $new_date . '</div>';
    }
?>
    <script src="javascript/easternTime.js"></script>
    <script>
        var getGeocode = function(){
            var request = new XMLHttpRequest();
            request.open("GET", "<?php echo $linkLocation ?>", true);
            request.onload = function(){
                var dataArray = JSON.parse(this.response); 
                for(var i = 0; i < dataArray.length; i++){
                    var data = dataArray[i];
                    var latitude = data.lat;
                    var longitude = data.lon;
                    document.getElementById("lat").innerHTML = latitude;
                    document.getElementById("lon").innerHTML = longitude;
                }
                getResults();
            };
            request.send();
        };
        var getResults = function(){
            var request = new XMLHttpRequest();
            request.open("GET","https://api.sunrise-sunset.org/json?lat=" + document.getElementById("lat").innerHTML + "&lng=" + document.getElementById("lon").innerHTML + "&date=" + "<?php echo $new_date ?>",true);
            console.log("https://api.sunrise-sunset.org/json?lat=" + document.getElementById("lat").innerHTML + "&lng=" + document.getElementById("lon").innerHTML + "&date=" + "<?php echo $new_date ?>");
            request.onload=function(){
                var results= JSON.parse(this.response);
                var data=results.results
                console.log(data);
                var sunrise=data.sunrise;
                document.getElementById("sunrise").innerHTML=sunrise;
                document.getElementById("sunriseEastern").innerHTML= utcToEastern(sunrise);
                var sunset=data.sunset;
                document.getElementById("sunset").innerHTML=sunset;
                document.getElementById("sunsetEastern").innerHTML= utcToEastern(sunset);
                var solar_noon=data.solar_noon;
                document.getElementById("solar_noon").innerHTML=solar_noon;
                document.getElementById("solar_noonEastern").innerHTML= utcToEastern(solar_noon);
                var day_length=data.day_length;
                document.getElementById("day_length").innerHTML=day_length;
                var civil_twilight_begin=data.civil_twilight_begin;
                document.getElementById("civil_twilight_begin").innerHTML=civil_twilight_begin;
                document.getElementById("civil_twilight_beginEastern").innerHTML= utcToEastern(civil_twilight_begin);
                var civil_twilight_end=data.civil_twilight_end;
                document.getElementById("civil_twilight_end").innerHTML=civil_twilight_end;
                document.getElementById("civil_twilight_endEastern").innerHTML= utcToEastern(civil_twilight_end);
                var nautical_twilight_begin=data.nautical_twilight_begin;
                document.getElementById("nautical_twilight_begin").innerHTML=nautical_twilight_begin;
                document.getElementById("nautical_twilight_beginEastern").innerHTML= utcToEastern(nautical_twilight_begin);
                var nautical_twilight_end=data.nautical_twilight_end;
                document.getElementById("nautical_twilight_end").innerHTML=nautical_twilight_end;
                document.getElementById("nautical_twilight_endEastern").innerHTML= utcToEastern(nautical_twilight_end);
                var astronomical_twilight_begin=data.astronomical_twilight_begin;
                document.getElementById("astronomical_twilight_begin").innerHTML=astronomical_twilight_begin;
                document.getElementById("astronomical_twilight_beginEastern").innerHTML= utcToEastern(astronomical_twilight_begin);
                var astronomical_twilight_end=data.astronomical_twilight_end;
                document.getElementById("astronomical_twilight_end").innerHTML=astronomical_twilight_end;
                document.getElementById("astronomical_twilight_endEastern").innerHTML= utcToEastern(astronomical_twilight_end);
            };
            request.send();
        };
    </script>
    <script>getGeocode();</script>
    <h1>Results</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Universal Time</th>
            <th scope="col">Eastern Daylight Time</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Sunrise</th>
            <td id="sunrise"></td>
            <td id="sunriseEastern"></td>
          </tr>
          <tr>
            <th scope="row">Sunset</th>
            <td id="sunset"></td>
            <td id="sunsetEastern"></td>
          </tr>
          <tr>
            <th scope="row">Solar Noon</th>
            <td id="solar_noon"></td>
            <td id="solar_noonEastern"></td>
          </tr>
          <tr>
            <th scope="row">Civil Twilight Begin</th>
            <td id="civil_twilight_begin"></td>
            <td id="civil_twilight_beginEastern"></td>
          </tr>
          <tr>
            <th scope="row">Civil Twilight End</th>
            <td id="civil_twilight_end"></td>
            <td id="civil_twilight_endEastern"></td>
          </tr>
          <tr>
            <th scope="row">Nautical Twilight Begin</th>
            <td id="nautical_twilight_begin"></td>
            <td id="nautical_twilight_beginEastern"></td>
          </tr>
          <tr>
            <th scope="row">Nautical Twilight End</th>
            <td id="nautical_twilight_end"></td>
            <td id="nautical_twilight_endEastern"></td>
          </tr>
          <tr>
            <th scope="row">Astronomical Twilight Begin</th>
            <td id="astronomical_twilight_begin"></td>
            <td id="astronomical_twilight_beginEastern"></td>
          </tr>
          <tr>
            <th scope="row">Astronomical Twilight End</th>
            <td id="astronomical_twilight_end"></td>
            <td id="astronomical_twilight_endEastern"></td>
          </tr>
        </tbody>
    </table>
      </br>
    <table class="table" style="width:100%">
      <tbody>
        <tr>
          <th></th>
          <td></td>
        </tr>
        <tr>
          <th scope="row" style="font-size: 20px">Day Length </th>
          <td id="day_length" style="font-size: 20px"></td>
        </tr>
        <tr>
          <th scope="row" style="font-size: 20px">Latitude </th>
          <td id="lat" style="font-size: 20px"></td>
        </tr>
        <tr>
          <th scope="row" style="font-size: 20px">Longitude </th>
          <td id="lon" style="font-size: 20px"></td>
        </tr>
      </tbody>
    </table>
    <form>
      <input type="button" value="Back" onclick="location.href='sundata.php'">
    </form>
</div>
<div class="container-fluid bg-1 text-center"></div>
<footer class="container-fluid bg-4 text-center">
  <h4 class="misc">Copyright 2020 @ Bootstrap Theme By <a href="https://www.w3schools.com">www.w3schools.com</a></h4> 
</footer>
</body>
<html>
