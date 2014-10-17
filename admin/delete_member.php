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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
    			<td>MEMBER NAME</td>
    			<td>
                	<select name="delete">
                    	<?php 
							require_once("dbconnect.php");
							$result=mysql_query("select * from member");
							$row=mysql_num_rows($result);
							for($i=0;$i<$row;$i++)
							{
								$id=mysql_result($result,$i,"id");
								$name=mysql_result($result,$i,"name");
						?>
                        <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
                        <?php
							}
						?>
                    </select>
                </td>
    		</tr>
    		<tr>
    			<td></td>
    			<td><input type="submit" name="sub" value="Create" /></td>
    		</tr>
    	</table>
    	</form>
    </div>
</div>
<?php

	if(isset($_POST['sub']))
	{
		$id=$_POST['delete'];
		require_once("dbconnect.php");
		mysql_query("delete from member where id='$id'");
		echo "<script>alert('Member Deleted');</script>";
	}
?>
?>
</body>
</html>
