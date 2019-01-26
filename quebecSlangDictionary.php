<?php
    // Header
    $page_title = "Slang"; // Must fetch the slang
    include('header.php');
?>

<hr/>
<h1>Slang</h1>
<dl class="body-tab">
    <dt>Translation</dt>
    <dd>Insert a translation of the slang.</dd>
    <dt>Origin</dt>
    <dd>Insert a description of the origin of the slang.</dd>
    <dt>Examples</dt>
    <dd>
        <ul>
            <li>An example in French<br />Translation of the example in English</li>
            <li>An example in French<br />Translation of the example in English</li>
        </ul>
    </dd>
    <dt>Explicit: <input type="checkbox" name="explicit" disabled/></dt>
</dl>
<form class="body-tab">
    <input type="submit" value="Go back"/>
</form>
<hr/>

<?php
    // Footer
    include('footer.php');
?>


