
<?php
// Header
$page_title = "Main page";
include('header.php');
?>
<!---------------------------------------------------------->


<form action="search.php?go" method="POST">
<h2>The Québécois way</h2>
<label>
    Please enter a slang word you wish to know its meaning <br/>
    <br/>
    <input id="sbar" type="text" name="word" size="30" placeholder="Search for a slang"/>
    <br/><br/>
    <input class="sbox" type="submit" value="Search" name="search"/>  
    <input class="sbox" type="reset" value="Reset"/><br/>
</label>
</form>

<!---------------------------------------------------------->
<?php
// Footer
include('footer.php');
?>
