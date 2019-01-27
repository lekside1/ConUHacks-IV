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
    if(isset($_GET['go']))
    {
    // no word entered
    if(empty($word)) 
    {
        header('Location: mainPage.php');
        exit();
    }
    elseif(preg_match("/[A-Z  | a-z]+/", $word))
    {
        // connection to database
        $db = mysqli_connect ($host, "root", "", $database) or die ('Failed to connect to the database because: ' . mysqli_error());
        $sql = "SELECT term, def FROM slang WHERE term LIKE '%". $word . "%' OR def LIKE '%" . $word . "%'"; 

        $result = mysqli_query($db, $sql);
        if(mysqli_num_rows($result) > 0) 
        {
            while ($row = mysqli_fetch_array($result)) 
            {
                echo $row['term']. ": ". $row['def'];
                echo "<br/>";
            }
        }
        else {         // word doesn't exist
            echo "Sorry, that word is not in the dictionary";
        }
    }
    
    }
}
?>

<!---------------------------------------------------------->
<?php
    include("footer.php");
?>