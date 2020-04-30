<?php include 'navbar.php'; ?>

<div class="container-fluid bg-1 text-center"></div>
<div class="container-fluid bg-2 text-center">
    <form method="post" action="sunresults.php">
        <h1> Enter a location (address, city, state, etc.)</h1>
        <p>Location<br/>
            <input type="text" name="location"/>
        </p>

        <h1>Date (optional)</h1>
        <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>"/>
    
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
