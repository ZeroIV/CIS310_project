<?php

require_once("Template.php");
$page = new Template("Book Form");
$page -> addHeadElement('<link rel="stylesheet" href="css/style.css">');
$page -> addHeadElement('<meta charset="UTF-8">');
$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection();

print "

	<h2> Search box </h2>
	<form method='POST' action='album_result.php'>
	<input type='text' name='searchInput' value='' required>
    <input type='submit' name='submit' value='Search'>
    </form>

";
print $page->getBottomSection();
?>
