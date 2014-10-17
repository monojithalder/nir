<?php
session_start();
if(!isset($_SESSION['name']))
{
	echo "<script>window.location='index.php'</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<div class="example">
    <div class="menuholder">
        <?php require_once("menu.php"); ?>
        <div class="back">
        	
        </div>
        <div class="shadow">
        	
        </div>
    </div>
    <div style="clear:both"></div>
    <div style="margin-left:auto;margin-right:auto;margin-top:20px; width:400px;">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
    	<table>
    		<tr>
    			<td>GALLARY NAME</td>
    			<td><input type="text" name="txtname" /></td>
    		</tr>
    		<tr>
    			<td></td>
    			<td><input type="submit" name="sub" value="Create" /></td>
    		</tr>
    	</table>
    	</form>
    </div>
</div>

</body>
<?php
	if(isset($_POST['sub']))
	{
		$name=$_POST['txtname'];
		require_once("dbconnect.php");
		mysql_Query("insert into gallary_info(gallary_name) values('$name')");
		echo "<script>alert('Gallary Created');</script>";
	}
?>
</html>
