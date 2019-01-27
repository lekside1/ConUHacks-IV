<?php
$page_title = "search";
include("header.php");
?>
<!---------------------------------------------------------->

<?php
$host = "localhost";
$database = "dictionary";
$word = $_POST['word'];
$search_value = $_POST["search"];

if (isset($_POST['search'])) {
    if (isset($_GET['go'])) {
        // no word entered
        if (empty($word)) {
            header('Location: mainPage.php');
            exit();
        } elseif (preg_match("/[A-Z  | a-z]+/", $word)) {
            // connection to database
            $db = mysqli_connect($host, "root", "root", $database) or die('Failed to connect to the database because: ' . mysqli_error());
            $sql = "SELECT term, def, translation, explic, example_fr_1, example_en_1, example_fr_2, example_en_2 FROM slang WHERE term LIKE '%" . $word . "%' OR def LIKE '%" . $word . "%'";

            
            $result = mysqli_query($db, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<h2>" . $row['term'] . "</h2>";
                    echo "<dl>";
                    echo "<dt id=\"bold\">Origin</dt>";
                    echo "<dd>" . $row['def'] . "</dd>";
                    echo "<dt>Translation</dt>";
                    echo "<dd>" . $row['translation'] . "</dd>";
                    if ($row['explic'] == 0) {
                        echo "<dt>Explicit <input type=\"checkbox\" disabled/></dt>";
                    } else {
                        echo "<dt>Explicit <input type=\"checkbox\" disabled checked/></dt>";
                    }
                    echo "<dt>Examples</dt>";
                    echo "<ul><li>" . $row['example_fr_1'] . "<br/>" . $row['example_en_1'] . "</li>";
                    echo "<li>" . $row['example_fr_2'] . "<br/>" . $row['example_en_2'] . "</li></ul>";
                    echo "</dl>";
                }
            } else {         // word doesn't exist
                echo "Sorry, that word is not in the dictionary";
            }
            mysqli_close($db);
        }
    }
}
?>

<!---------------------------------------------------------->
<?php
include("footer.php");
?>