<?php
session_start();
if(!isset($_SESSION['name']))
{
	echo "<script>window.location='index.php'</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <title>CSS3 drop down menu #3</title>
</head>
<body>
<div class="example">
    <div class="menuholder">
        <?php require_once("menu.php"); ?>
        <div class="back"></div>
        <div class="shadow"></div>
    </div>
    <div style="clear:both"></div>
</div>
</body>
</html>