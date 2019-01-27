<br/><br/><br/>
<hr/>
    <div>   
        <table>
        <tr>
            <td><a href="about.php"> About </a> </td>
            <td><a href="credits.php">Credits </a> </td>
            <td><p id="clock"></p></td> 
        </tr>
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
            var clockTime = clock.getDate() + "/" + (clock.getMonth()+1) + "/" + (clock.getYear()+1900) + " - " + (clockHour-12) + ":" + clockMin + ":" + clockSeconds; 
            
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
    </div>
</body>
</html>
