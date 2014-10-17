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
    			<td>GALLARY NAME</td>
    			<td>
                	<select name="gallary_id" >
                    <?php
						require_once("dbconnect.php");
						$result=mysql_query("select * from gallary_info");
						$row=mysql_num_rows($result);
						for($i=0;$i<$row;$i++)
						{
							$gallary_name=mysql_result($result,$i,"gallary_name");
							$gallary_id=mysql_result($result,$i,"id");
							
					?>
                    	<option value="<?php echo $gallary_id; ?>"><?php echo $gallary_name; ?></option>
                    <?php
						}
					?>
                    </select>
                </td>
    		</tr>
            <tr>
            	<td>CHOOSE PICTURS</td>
                <td><input type="file" name="pic[]" multiple /></td>
            </tr>
    		<tr>
    			<td></td>
    			<td><input type="submit" name="sub" value="Insert" /></td>
    		</tr>
    	</table>
    	</form>
    </div>
</div>

</body>
<?php
if(isset($_POST['sub'])){
    $errors= array();
	foreach($_FILES['pic']['tmp_name'] as $key => $tmp_name ){
		$file_name = $key.$_FILES['pic']['name'][$key];
		$file_size =$_FILES['pic']['size'][$key];
		$file_tmp =$_FILES['pic']['tmp_name'][$key];
		$file_type=$_FILES['pic']['type'][$key];	
         $desired_dir="../images";                
		 move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
		 $picname="images/".$file_name;
		 $gallary_id=$_POST['gallary_id'];
			echo $gallary_id;
		mysql_query("insert into gallary_pic(img_path,gallary_id) values('$picname','$gallary_id')");
		//echo "Success";
		echo "<script>alert('Picture Uploaded Successfully');</script>";
	}
}
?>
</html>
