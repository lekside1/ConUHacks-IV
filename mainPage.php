
<?php
// Header
$page_title = "Main page";
include('header.php');
?>
<!---------------------------------------------------------->
<h2>The Québécois way</h2>

<form action="search.php" method="POST">
<label>

    Please enter a slang word <br/>
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
