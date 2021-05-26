<!DOCTYPE html>
<html lang="en">

<!-- Load React API -->
<script src= "https://unpkg.com/react@16/umd/react.production.min.js"></script>
<!-- Load React DOM-->
<script src= "https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
<!-- Load Babel Compiler -->
<script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>

<!--Styling-->
<style> 
body{ 
    background-color: linen;
}

h1{
    color: maroon;
    text-align: center;
}

h2{
    text-align: center;
}
</style>
<!--End Styling-->

<title> SigningDaySports Technical Interview </title>

<!--Header-->
<head> 
    <H1> SigningDaySports Technical Interview </H1>
    <h2> By: Andrew Przybocki v2</h2>
</head>

<!--Body-->
<body>

<!-- Location Button Selection-->
<p align="center"> 
    <p> Display Weather for: </p>

    <button type="button" onclick= "document.getElementById('weatherData').innerHTML = getData(1)">
        Frederick, MD
    </button>
    
    <button type="button" onclick= "document.getElementById('weatherData').innerHTML = getData(2)">
        Scottsdale, AZ
    </button>

    <button type="button" onclick= "document.getElementById('weatherData').innerHTML = getData(3)">
        New York, NY
    </button>
</p>

<!-- Function to send a GET request to Flask API which serves weather data for each location -->
<script> 
    function getData(input) {
        if (input == 1) {
            <?php
                $rawData = file_get_contents("http://127.0.0.1:8000/get-Frederick");
                return $rawData;
            ?>
        } 
        else if (input == 2) {
            <?php 
                $rawData = file_get_contents("http://127.0.0.1:8000/get-Scottsdale");
                return $rawData
            ?>
        }
        else if (input == 3) {
            <?php
                $rawData = file_get_contents("http://127.0.0.1:8000/get-NewYork");
                return $rawData
            ?>
        }
    }
</script>

<!-- This is the attribute where weather data should be displayed -->
<p id="weatherData" align="center"></p>

</body>
</html> 