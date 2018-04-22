<?php
extract($_REQUEST);
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("myproject") or die(mysql_error());
/*if(strlen($fname)==0 || strlen($price)==0)
{
 echo"Please enter Detail";	
 exit;
}*/
$sql="insert into productlist(product,services) values('$product','$services')";
// echo$sql;
mysql_query($sql) or die(mysql_error());

?>

<?php 
extract($_REQUEST);
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("myproject") or die(mysql_error());

$sql="select * from productlist ";
$result=mysql_query($sql);
if(mysql_num_rows($result)==0)
{
	echo"No result Found";
	exit;
	}
?>
<table  cellspacing="5px">
<tr>
<th align="left" >Product Name</th>
<th align="left" >Services</th>
</tr>

<?php
while($row=mysql_fetch_assoc($result))
{
	extract($row);
		
	echo"<tr><td>$product</td><td>$services</td></tr>";
	
	
}
	exit;
	
	
		
?>
</table>