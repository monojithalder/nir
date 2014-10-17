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
 <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>

<body>

<ul class="menu slide">
            <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="red">Home</a></li>
            <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="orange">GALLARY</a>
                <div class="subs">
                    <dl>
                        <dd><a href="creategallary.php">CREATE GALLARY</a></dd>
                       
                    </dl>
                    <dl>
                        
                        <dd><a href="upload_gallary_pic.php">UPLOAD PICTURES</a></dd>
                       
                    </dl>
                 
                </div>
            </li>
            <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="yellow">MEMBER</a>
                <div class="subs">
                    <dl>
                        
                        <dd><a href="create_member.php">CREATE MEMBER</a></dd>
                    </dl>
                    <dl>
                        
                        <dd><a href="delete_member.php">DELETE MEMBER</a></dd>
                    </dl>
                    
                </div>
            </li>
            <li><a href="reselution.php" class="green">RESOLUTION</a></li>
            <li><a href="logout.php" class="red">LOGOUT</a></li>
        </ul>

</body>
</html>
