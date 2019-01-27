<?php
$page_title = "search";
    include("header.php");
// ----------------------------------------------------------


$host = "localhost";
$username = "root";
$user_pass = "password";
$database = "dictionary";

$mysqli = new mysqli($host, "", "", $database);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$myArray = array();

$res = $mysqli->query("SELECT term FROM slang");

while ($row = $res->fetch_assoc()) {
	array_push($myArray, $row);
}

for ($i = 0; $i<2; $i++ ) {
	echo $myArray[$i]['word'];
}
?>



<!---------------------------------------------------------->

?>
<?php
    include("footer.php");
?>