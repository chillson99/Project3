<!--
need to add something to handle errors- if value ... on next page
-->

<?php include 'navbar.php'; ?>

<div class="container-fluid bg-1 text-center"></div>
<div class="container-fluid bg-2 text-center">
    <form method="post" action="sunresults.php">
        <h1> Enter a location (address, city, state, etc.)</h1>
        <p>Location<br/>
            <input type="text" name="location"/>
        </p>
        <h1>Date (optional)</h1>
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
        <input type="reset" value="Reset">
    </form>
</div>
<div class="container-fluid bg-1 text-center"></div>
<footer class="container-fluid bg-4 text-center">
  <h4 class="misc">Copyright 2020 @ Bootstrap Theme By <a href="https://www.w3schools.com">www.w3schools.com</a></h4> 
</footer>
</body>
</html>
