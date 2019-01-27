<?php
$page_title = "search";
    include("header.php");
?>
<!---------------------------------------------------------->

<?php
$host = "localhost";
$database = "dictionary";
$word = $_POST['word']; 
$search_value=$_POST["search"];

if(isset($_POST['search']))
{
    // no word entered
    if(empty($word)) 
    {
        header('Location: mainPage.php');
        exit();
    }
    else {
        $mysqli = new mysqli($host, "root", "", $database);

        // check connection
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        } 
        else {
            $sql="select * from information where term like '%$search_value%'";
            $res=$mysqli->query($sql); 
        }
        $result = $mysqli->query("SELECT term, def, example FROM slang") or die(mysqli_error());

        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                echo $row['term']. ": ". $row['def'];
                echo "<br/>";
                echo $row['example'];
                echo "<br/><br/>";
            }
        }
        // word doesn't exist
        else {
            echo "Sorry, that word is not in the dictionary";
        }
    }
    mysqli_close($mysqli);
}
?>

<!---------------------------------------------------------->
<?php
    include("footer.php");
?>