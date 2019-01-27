
<?php
// Header
$page_title = "Main page";
include('header.php');
?>
<!---------------------------------------------------------->
<h2>The Québécois way</h2>

<a href="quebecSlangDictionary.php">A</a>
<form action="quebecSlangDictionary.php" method="POST">
<label>

    Enter a slang: <br/>
    <br/>
    <input type="text" name="word" size="30" placeholder="Search for a slang"/>
    <br/><br/>
    <input type="submit" value="Search"/><br/>   
</label>
</form>

<!---------------------------------------------------------->
<?php
// Footer
include('footer.php');
?>
