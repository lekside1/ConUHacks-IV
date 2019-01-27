
<?php
// Header
$page_title = "Main page";
include('header.php');
?>
<!---------------------------------------------------------->

<form action="quebecSlangDictionary.php" method="POST">
<label>
    Enter a slang: <br/>
<input type="text" name="word" size="35"/><br/>

    <input type="submit" value="search"/><br/>   
</label>
</form>

<!---------------------------------------------------------->
<?php
// Footer
include('footer.php');
?>
