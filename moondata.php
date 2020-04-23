<!--

this is the data entry page to get moon results
-user enters location by latitude and longitude (decimal)
    -can enter the data or select one of the pre-determined places
        -predetermined locations- autofill fields, and reload page
    -if none entered, will raise an error
-user can also enter a date and time
    -select day, select month, enter year in YYYY format (handle exception), select time
    -if none entered, will default to current date
    -button for current date + time
        -if this button is pressed, will just submit the location- API defaults to today + now

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
<form method="post" action="moonresults.php">
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
        *Create button for current date + time- will work the same way as the API default
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

       <h1>Time (Optional)</h1>

       <p>Hour<br/>
       <select name="hour">
                <option value="00">Hour</option>
                <option value="01">12 AM</option>
                <option value="02">1 AM</option>
                <option value="03">2 AM</option>
                <option value="04">3 AM</option>
                <option value="05">4 AM</option>
                <option value="06">5 AM</option>
                <option value="07">6 AM</option>
                <option value="08">7 AM</option>
                <option value="09">8 AM</option>
                <option value="10">9 AM</option>
                <option value="11">10 AM</option>
                <option value="12">11 AM</option>
                <option value="13">12 PM</option>
                <option value="14">1 PM</option>
                <option value="15">2 PM</option>
                <option value="16">3 PM</option>
                <option value="17">4 PM</option>
                <option value="18">5 PM</option>
                <option value="19">6 PM</option>
                <option value="20">7 PM</option>
                <option value="21">8 PM</option>
                <option value="22">9 PM</option>
                <option value="23">10 PM</option>
                <option value="24">11 PM</option>
         </select>
       </p> 

       <p>Minute<br/>
       <select name="minute">
                <option value="00">Minute</option> <option value="30">30</option>
                <option value="60">00</option> <option value="31">31</option>
                <option value="01">01</option> <option value="32">32</option>
                <option value="02">02</option> <option value="33">33</option>
                <option value="03">03</option> <option value="34">34</option>
                <option value="04">04</option> <option value="35">35</option>
                <option value="05">05</option> <option value="36">36</option>
                <option value="06">06</option> <option value="37">37</option>
                <option value="07">07</option> <option value="38">38</option>
                <option value="08">08</option> <option value="39">39</option>
                <option value="09">09</option> <option value="40">40</option>
                <option value="10">10</option> <option value="41">41</option>
                <option value="11">11</option> <option value="42">42</option>
                <option value="12">12</option> <option value="43">43</option>
                <option value="13">13</option> <option value="44">44</option>
                <option value="14">14</option> <option value="45">45</option>
                <option value="15">15</option> <option value="46">46</option>
                <option value="16">16</option> <option value="47">47</option>
                <option value="17">17</option> <option value="48">48</option>
                <option value="18">18</option> <option value="49">49</option>
                <option value="19">19</option> <option value="50">50</option>
                <option value="20">20</option> <option value="51">51</option>
                <option value="21">21</option> <option value="52">52</option>
                <option value="22">22</option> <option value="53">53</option>
                <option value="23">23</option> <option value="54">54</option>
                <option value="24">24</option> <option value="55">55</option>
                <option value="25">25</option> <option value="56">56</option>
                <option value="26">26</option> <option value="57">57</option>
                <option value="27">27</option> <option value="58">58</option>
                <option value="28">28</option> <option value="59">59</option>
                <option value="29">29</option>
              
         </select>
       </p> 

        <input type="submit"> 
        <input type="reset" value="Clear Form">      
</form>
</body>
</html> 