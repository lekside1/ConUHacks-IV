<!DOCTYPE html>
<html lang= "en"> 
<head>
	<title> <?php echo $page_title; ?></title>
    <meta charset="UTF-8"/>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<table>
        <tr>
            <td><a href="mainPage.php">
                    <img alt="quebec-flag" title="Fleurdelisé (the Lily-Flowered)"
                    src="images/quebec-flag.png" width="100" height="60" /></a>
            </td>
            <td><h1>Quebec Slang Translator</h1></td>
        </tr>
</table>
<hr/>
<?php
    session_start();
