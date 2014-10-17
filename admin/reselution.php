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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"> 
    	<table>
    		<tr>
    			<td>RESOLUTION</td>
    			<td><textarea cols="50" rows="10" name="resolution"></textarea></td>
    		</tr>
            <tr>
    			<td>RESOLUTION DATE</td>
    			<td><input type="text" name="date" /></td>
    		</tr>
            <tr>
    			<td>RESOLUTION IMAGE</td>
    			<td><input type="file" name="pic" /></td>
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
require_once("dbconnect.php");
if(isset($_POST['sub'])){
		
		
		$resolution=$_POST['resolution'];
		$date=$_POST['date'];
		mysql_query("insert into reselution_data(name,name) values('$resolution','$date')");
		//echo "Success";
		$result=mysql_query("select * from reselution_data order by id DESC");
		$id=mysql_result($result,0,"id");
		$file_name =$_FILES['pic']['name'];
		$uploaddir = '../images/'.$file_name;
		$picname="images/".$file_name;		
		//$uploadfile = $uploaddir . basename($_FILES['pic']['name']);
		if (move_uploaded_file($_FILES['pic']['tmp_name'], $uploaddir)) {
			mysql_query("insert into reselution_pic(img_path,res_id) values('$picname','$id')");
			echo "<script>alert('RESOLUTION Created Successfully');</script>";
		} 
		else 
		{
    		echo "<script>alert('Member Created UNSuccessfully');</script>";
		}
		
	
}
?>
</body>
</html>
