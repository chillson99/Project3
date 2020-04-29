<?php
//add back button
//add formatting (ie. you entered...)
//handle no location errors

$linkLocation = "https://us1.locationiq.com/v1/search.php?key=dec61f8a36c608&q=".$_POST["location"]."&format=json";
echo $linkLocation;
?>

<html>
    <div id="lat"></div>
    <div id="lon"></div>
    <script src="javascript/easternTime.js"></script>
    <script>
        var getGeocode = function(){
            var request = new XMLHttpRequest();
            request.open("GET", "<?php echo $linkLocation?>", true);
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
            request.open("GET","https://api.sunrise-sunset.org/json?lat=" + document.getElementById("lat").innerHTML + "&lng=" + document.getElementById("lon").innerHTML + "&date=" + "<?php echo $_POST["year"]?>" + "-" + "<?php echo $_POST["month"]?>" + "-" + "<?php echo $_POST["day"]?>",true);    
            //"https://api.sunrise-sunset.org/json?lat=36.7201600&lng=-4.4203400&date=2020-04-28"
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
    </head>

    <body>
    <script>getGeocode();</script>
    <h1>Results</h1>
    <h2>Sunrise: </h2>
    <h4> Universal Time:</h4>
    <h3 id="sunrise"></h3>
    <h4> Eastern Daylight Time:</h4>
    <h3 id="sunriseEastern"></h3>
    <h2>Sunset: </h2>
    <h4> Universal Time:</h4>
    <h3 id="sunset"></h3>
    <h4> Eastern Daylight Time:</h4>
    <h3 id="sunsetEastern"></h3>
    <h2>Day Length: </h2>
    <h3 id="day_length"></h3>
    <h2>Solar Noon: </h2>
    <h4> Universal Time:</h4>
    <h3 id="solar_noon"></h3>
    <h4> Eastern Daylight Time:</h4>
    <h3 id="solar_noonEastern"></h3>
    <h2>Civil Twilight Begin: </h2>
    <h4> Universal Time:</h4>
    <h3 id="civil_twilight_begin"></h3>
    <h4> Eastern Daylight Time:</h4>
    <h3 id="civil_twilight_beginEastern"></h3>
    <h2>Civil Twilight End: </h2>
    <h4> Universal Time:</h4>
    <h3 id="civil_twilight_end"></h3>
    <h4> Eastern Daylight Time:</h4>
    <h3 id="civil_twilight_endEastern"></h3>
    <h2>Nautical Twilight Begin: </h2>
    <h4> Universal Time:</h4>
    <h3 id="nautical_twilight_begin"></h3>
    <h4> Eastern Daylight Time:</h4>
    <h3 id="nautical_twilight_beginEastern"></h3>
    <h2>Nautical Twilight End: </h2>
    <h4> Universal Time:</h4>
    <h3 id="nautical_twilight_end"></h3>
    <h4> Eastern Daylight Time:</h4>
    <h3 id="nautical_twilight_endEastern"></h3>
    <h2>Astronomical Twilight Begin: </h2>
    <h4> Universal Time:</h4>
    <h3 id="astronomical_twilight_begin"></h3>
    <h4> Eastern Daylight Time:</h4>
    <h3 id="astronomical_twilight_beginEastern"></h3>
    <h2>Astronomical Twilight End: </h2>
    <h4> Universal Time:</h4>
    <h3 id="astronomical_twilight_end"></h3>
    <h4> Eastern Daylight Time:</h4>
    <h3 id="astronomical_twilight_endEastern"></h3>
    </body>
<html>
