<!--

this is the data entry page to get sunset/sunrise results
-user enters location by latitude and longitude (decimal)
    -can enter the data or select one of the pre-determined places
        -predetermined locations- autofill fields, and reload page
    -if none entered, will raise an error
-user can also enter a date
    -select day, select month, enter year in YYYY format (handle exception)
    -if none entered, will default to current date
    -button for current date as well
        -if this button is pressed, will just submit the location- API defaults to today

*needs header and nav menu
*add bootstrap formatting later
*for reference, look at addPet.php

-->

<!DOCTYPE html>
<html>
    <head>
        <!-- add header -->
    </head>

<body>
<form method="post" action="sunresults.php">
      <h1> Enter a location by latitude and longitude (decimal form), or select one of the options</h1>

        <p>Latitude<br/>
           <input type="number" name="latitude"/>
       </p>

       <p>Longitude<br/>
           <input type="number" name="longitude"/>
       </p>

        <!--
        *These options should autofill the fields for latitude/longitude, reload page with data entered
        <p>Some Locations Around the World<br/>
          <select name="predetermined">
                <option value="0">Choose a city</option>
                <option>City1</option>
                <option>City2</option>
                ......(more cities)
          </select>
        </p>
        -->

        <!--
        *Will default to current day if none entered
        *Create button for current date- will work the same way as the API default
            -will just submit without entering any date
        *Handle exception for invalid date (such as wrongly entered year)
        -->
       <h1>Date (Optional)</h1>

       <p>Month<br/>
       <select name="month">
                <option value="00">Choose a month</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
         </select>
       </p> 

       <p>Day<br/>
       <select name="day">
                <option value="00">Choose a day</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
        </p> 

       <p>Year<br/>
           <input type="number" name="year">
       </p>

        <input type="submit"> 
        <input type="reset" value="Clear Form">      
</form>
</body>
</html> 