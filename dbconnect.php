<?php
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("Erro".mysql_error());
}
mysql_select_db("nir_data",$con);
?>