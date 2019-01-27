<?php
$page_title = "search";
    include("header.php");
// ----------------------------------------------------------


$host = "localhost";
$username = "root";
$user_pass = "password";
$database = "dictionary";

$mysqli = new mysqli($host, $username, "", $database);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$myArray = array();

$res = $mysqli->query("SELECT term, def FROM slang");

while ($row = $res->fetch_assoc()) {
	array_push($myArray, $row);
}

echo $myArray[0]['term'];

echo $myArray[0]['def']; 

// for ($i = 0; $i<2; $i++ ) {
// 	echo $myArray[$i]['term'];
//}
?>



<!---------------------------------------------------------->


<?php
    include("footer.php");
?>