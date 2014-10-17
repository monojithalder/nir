<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
session_start();
if(!isset($_SESSION['name']))
{
	echo "<script>window.location='index.php'</script>";
}
?>
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
    			<td>MEMBER NAME</td>
    			<td><input type="text" name="txtname" /></td>
    		</tr>
            <tr>
    			<td>MEMBER PHONE</td>
    			<td><input type="text" name="txtphone" /></td>
    		</tr>
            <tr>
    			<td>MEMBER ADDRESS</td>
    			<td><input type="text" name="txtaddress" /></td>
    		</tr>
            <tr>
    			<td>MEMBER PIC</td>
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
    $errors= array();
	//foreach($_FILES['pic']['tmp_name'] as $key => $tmp_name )
		$file_name =$_FILES['pic']['name'];
		$uploaddir = '../images/'.$file_name;		
		//$uploadfile = $uploaddir . basename($_FILES['pic']['name']);
		if (move_uploaded_file($_FILES['pic']['tmp_name'], $uploaddir)) {
			$picname="images/".$file_name;
		 $name=$_POST['txtname'];
		 $phone=$_POST['txtphone'];
		 $address=$_POST['txtaddress'];
			//echo $gallary_id;
		mysql_query("insert into member(name,address,ph,img_path) values('$name','$address','$phone','$picname')");
		//echo "Success";
		echo "<script>alert('Member Created Successfully');</script>";
		$result=mysql_query("select * from member order by id DESC");
		$id=mysql_result($result,0,"id");
		echo "<script>alert('Member ID IS $id');</script>";
		} 
		else 
		{
    		echo "<script>alert('Member Created UNSuccessfully');</script>";
		}
		
	
}
?>
</body>
</html>
