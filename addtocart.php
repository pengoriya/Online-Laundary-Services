<?php 
session_start();
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book Now</title>
</head>
<link rel="stylesheet" type="text/css" href="stylesheet/booknow.css" />  

<script type="text/javascript" src="./javascript/booknowscript.js"></script>
<script type="text/javascript" src="Jquery/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="javascript/script3.js"></script>
<body>
<div align="right">
<?php  
echo "email " . $_SESSION['email'];
echo '<br><a href="createnew.php?action=logout">Logout</a>';
?>
</div>
<nav><div class=" main_heading" id="placed">
                        <a href="#men" onclick="men();" class="category" id="man">Men</a>
                        <a href="#women" onclick="women();" class="category" id="woman">Women</a>
                        <a href="#child" onclick="child();" class="category" id="baby">Child</a>
                        <a href="#household" onclick="household();" class="category" id="house">Household</a>
                        <a href="#pair" onclick="pair();" class="category" id="combo">Combo Offer</a>


</div></nav>

<div class="main_wrapper">                                          
<div id="men" class="main-menu">

<!--<form action="pricedatabase.php" method="post">-->
<select name="product" id="product1" class="list">
<option value="tshirt">T-shirt</option>

<option value="shirt">Shirt</option>

<option value="jeans">Jeans/trouser/pants</option>
<option value="shorts">shorts</option>
<option value="lober">Lober</option>
<option value="sweater">Sweater</option>
<option value="kurtapajama">Kurta Pajama</option>
<option value="wooleantshirt">Woolean Tshirt</option>
<option value="jacket">Jacket</option>
<option value="Bleazer">Bleazer</option>
<option value="wooleancaps">Woolean Caps</option>
<option value="muflar">muflar</option>
<option value="Shocks">Shocks</option>
</select>
<div class="chkbox">
<input type="radio" name="services" id="check1" value="washing"  class="chkbox_service" onclick="addcart_men()"/>
<label for="check1">Washing</label>
<input type="radio" name="services" id="check2" value="drycleaning"  class="chkbox_service" onclick="addcart_men()"/>
<label for="check2"> Dry Cleaning </label>
<input type="radio" name="services" id="check3" value="iron"  class="chkbox_service" onclick="addcart_men();"/>
<label for="check3">Stream Iron</label></div><br />
<button  type="button" onclick="submit()","itemlistview()">Add</button>
</div>


<!---FOr Women----
<form action="pricedatabase.php" method="post">-->
<div id="women" class="main-menu">


<select name="product" id="product2" >
<option value="tshirt">T-shirt</option>
<option value="shirt">Shirt</option>
<option value="jeans">Jeans</option>
<option value="top">Tops</option>
<option value="kurtis">Kurtas & Kurtis </option>
<option value="leggings">leggings</option>
<option value="suits">Suits</option>
<option value="frocks">Frocks</option>
<option value="saree">Saree</option>
<option value="shorts">Shorts</option>
<option value="gowns">Gowns</option>
<option value="sweaters">Sweaters</option>
<option value="jacket">jackets</option>
<option value="Bleazer">Bleazer</option>
<option value="shocks">Shocks</option>
<option value="jeans"></option></select>
<div class="chkbox">
<input type="radio" name="services" value="washing" id="chkd1" class="chkbox_service" onclick="addcart_women();"/>
<label for="chkd1" >Washing</label>
<input type="radio" name="services" value="drycleaning" id="chkd2" class="chkbox_service" onclick="addcart_women();"/>
<label for="chkd2"> Dry Cleaning </label>
<input type="radio" name="services" value="iron" id="chkd3" class="chkbox_service" onclick="addcart_women();"/>
<label for="chkd3">Stream Iron</label><br /></div>

<button type="button">Add</button>
</div>



<div id="child" class="main-menu">
<select  name="product" id="product3" ><option value="child">All Clothes</option></select>
<div class="chkbox">
<input type="radio" name="services" value="washing" id="chked1" class="chkbox_service" onclick="addcart_child();"/>
<label for="chked1" >Washing</label>
<input type="radio" name="services" value="drycleaning" id="chked2" class="chkbox_service" onclick="addcart_child();"/>
<label for="chked2"> Dry Cleaning </label>
<input type="radio" name="services" value="iron" id="chked3" class="chkbox_service" onclick="addcart_child();"/>
<label for="chked3">Stream Iron</label><br /></div>
<button type="button">Add</button>
</div>



<div id="household" class="main-menu">

<select  name="product" id="product4" ><option value="bedsheet">Bed Sheet(Single)</option>
<option value="towelsmall">Towel(Small)</option>
<option value="towelmedium">Towel(medium)</option>
<option value="towellarge">Towel(large)</option>
<option value="bedsheetdouble">Bed Sheet(Double)</option>
<option value="pillow">Pillow Cover</option>
<option value="windowcover">Window/Door Cover</option>
<option value="sofasheet">Sofa Sheet</option>
<option value="blacketsingle">Blanket/Quilt(Single)</option>
<option value="blacketdouble">Blanket/Quilt(Double)</option>
<option value=""></option></select>
<div class="chkbox">
<input type="radio" name="services" value="washing" id="checked1" class="chkbox_service" onclick="addcart_house();"/>
<label for="checked1" >Washing</label>
<input type="radio" name="services" value="drycleaning" id="checked2" class="chkbox_service" onclick="addcart_house();"/>
<label for="checked2"> Dry Cleaning </label>
<input type="radio" name="services" value="iron" id="checked3" class="chkbox_service" onclick="addcart_house();"/>
<label for="checked3">Stream Iron</label><br /></div>
<button type="button">Add</button>
</div>


<div id="pair" class="main-menu">
<select name="product" id="product5" >
	<option>bgngfdb</option></select>
<input type="radio" name="services" value="washing" id="checked1" class="chkbox_service" onclick="addcart_combo();"/>
<label for="checked1" >Washing</label>	

</div>
</div>
</form>
<table id="orderlist" class="orderlist"><th><div id="productlist"></div></th><th>Price</th><th>Quantity</th><th>Subtotal</th>
<tr><td></td><td><div id="price">price</div></td>
<td><div><input type="number" name="qty" min="1" id="qty" onchange="result();" /></div></td>
<td><div id="subtotal"></div></td></tr></table>
</body>
</html>