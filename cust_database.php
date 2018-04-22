  
<?php 
extract($_REQUEST);

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("adminlogin") or die(mysql_error());

{
$sql="select price from admindatabase where product='$product' and services='$services' "; 

$result=mysql_query($sql) or die(mysql_error());
$count=mysql_num_rows($result);
	
}
 
if($count==0)
 
{
	echo"No record";
}
else
  {
	$index=0;
	while($index<$count) 
{
	$row=mysql_fetch_assoc($result);
	//echo (intval("price"));
	echo $row['price'];
	
	
	$index++;
}
  }

?>

