<!DOCTYPE html>
<html lang= "en"> 
<head>
	<title> <?php echo $page_title; ?></title>
    <meta charset="UTF-8"/>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<table>
        <tr>
            <td><a href="mainPage.php">
                    <img alt="quebec-flag" title="Fleurdelisé (the Lily-Flowered)"
                    src="images/quebec-flag.png" width="100" height="60" /></a>
            </td>
            <td><h1>Quebec Slang Translator</h1></td>
        </tr>
        <p id="clock"></p>
        <script>
        showCurrentTime(); // call the function
        // displays the current time
        function showCurrentTime() 
        {
            var clock = new Date(); 
            // hours
            var clockHour = clock.getHours();
            if (clockHour < 10) {
                clockHour += "0";
            }
            // minutes 
            var clockMin = clock.getMinutes();
            if (clockMin < 10) {
                clockMin += "0";
            }
            // seconds
            var clockSeconds = clock.getSeconds();
            if (clockSeconds < 10) 
            {
                clockSeconds += "0";
            }
            // time
            var clockTime = clock.getDate() + "/" + (clock.getMonth()+1) + "/" + (clock.getYear()+1900) + " - " + (clockHour/10) + ":" + clockMin + ":" + clockSeconds; 
            
            document.getElementById("clock").innerHTML = clockTime;
            refreshTime(); 
        }
        //  refresh time every second 
        function refreshTime() 
        {
            var timeout = 1000;
            var time = setTimeout("showCurrentTime()", timeout);
        }
        </script>
</table>
<hr/>
<?php
    session_start();
