  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dhobhiwale|Book Now</title>
<link rel="stylesheet" type="text/css" href="stylesheet/booknow.css" />  

<script type="text/javascript" src="./javascript/booknowscript.js"></script>
</head>

<body style="background-color:#3FF";>
<form action="" method="post">
<div class="">
<a href="home.php" ><img src="image/images (3).jpg" width="275" height="183" /></a>

</div>
<div class="main_class" >
<div id="fill" class="menu" >
<h2>Fill Your More Information</h2>
<input type="email" name="email"  placeholder="Email" /><br/>
<input type="text" name="mobile"   placeholder="Mobile No."  /><br />
<select name="city" required="required">
<option value="">--City--</option>
<option value="bhopal">Bhopal</option> 
</select>
<select name="area" required="required">
<option value="">--Area--</option>
<option value="airportroad">Airport Road</option>
<option value="anandnagar">Anand Nagar</option>
<option value="apasra">Apasra</option>
<option value="arerahill">Arera Hills</option>
<option value="areracolony">Arere Colony</option>
<option value="ashokagarden">Ashoka Garden</option>
<option value="awadhpuri">Awadhpuri</option>
<option value="ayodhayanagar">Ayodhaya nagar</option>
<option value="bankcolony">Bank Colony</option>
<option value="bhartiniketan">Bharti Niketan</option>
<option value="bharkheda">Bharkheda</option>
<option value="bhawanidham">Bhawani Dham</option>
<option value="bhopalrailway">Bhopal Railway Station</option>
<option value="bhopaltakies">Bhopal Takies</option>
<option value="airport">Bittan Market</option>
<option value="capitalpump">Capital Petrol Pump</option>
<option value="charimli">Char Imli</option>
<option value="chetanbridge">Chetak Bridge</option>
<option value="cholaroad">Chola Road</option>
<option value="chunnabhatti">Chunna Bhatti</option>
<option value="danishnagar">Danish Nagar</option>
<option value="dwarka">Dwarka Dham</option>
<option value="dig">DIG</option>
<option value="gandhinagar">Gandhi Nagar</option>
<option value="gautamnagar">Gautam Nagar</option>
<option value="govindpura">Govindpura</option>
<option value="gulmohar">Gulmohar</option>
<option value="habibganj">Habibganj</option>
<option value="hosangabadroad">Hoshangabad Road</option>
<option value="ibrahimpura">Ibrahim Pura</option>
<option value="idgahhills">Idgah Hills</option>
<option value="indrapuri">Indrapuri</option>
<option value="isbtcolony">ISBT Area</option>
<option value="jahangirabad">Jahangirabad</option>
<option value="jpnagar">JP Nagar</option>
<option value="kalpananagar">Kalpana Nagar</option>
<option value="kamlapark">Kamla Park</option>
<option value="karond">Karond</option>
<option value="kohifiza">Kohifiza</option>
<option value="kolarroad">Kolar Road</option>
<option value="lalghati">Lalghati</option>
<option value="laxminagar">Laxminagar</option>
<option value="malviyanagar">Malviya Nagar</option>
<option value="matamandir">Mata Mandir</option>
<option value="misrod">Misrod</option>
<option value="mpnagarI">MP Nagar Zone-I</option>
<option value="mpnagarII">MP Nagar Zone-II</option>
<option value="nariyalkheda">Nariyal Kheda</option>
<option value="nehrunagar">Nehru Nagar</option>
<option value="newmarket">New Market</option>
<option value="newsubhashnagar">New Subhash Nagar</option>
<option value="nishatpura">Nishatpura</option>
<option value="oldsubhashnagar">Old Subhash Nagar</option>
<option value="patelnagar">Patel Nagar</option>
<option value="peergatearea">Peer Gate Area</option>
<option value="piplani">Piplani</option>
<option value="pribatpump">Pribat Petrol Pump</option>
<option value="pushpanagar">Pushpa nagar</option>
<option value="rachnanagar">Rachna Nagar</option>
<option value="saketnagar">Saket Nagar</option>
<option value="saktinagar">Sakti Nagar</option>
<option value="santiniketan">Santi Niketan</option>
<option value="shahjahanabad">Shahjahanabad</option>
<option value="Shastri Nagar">Shastri Nagar</option>
<option value="shymlahills">Shymla Hills </option>
<option value="Suraj Nagar">Suraj Nagar</option>
<option value="ttnagar">TT Nagar</option>
<option value="vpiroad">VPI Road</option>
</select><br />
<input type="text" name="address" placeholder="House No,Street,Landmark" /> <br />

<a onclick="order();","" id="#order" class="button" href="orderdate.php">Next</a>
</div>
<!--<div id="order" class="sub-menu">
<h2>Place Your Order</h2>
<label class="orderdate">Pickup Date & Time</label> <br><input type="date" name="pickupdate" class="schedule" min="today" maxlength="5"/>
                                 <select name="picuptime" required="required">
                                         <option value="9to12">8 AM - 12 PM</option>
                                            <option value="4to7">4 AM - 8 PM</option></select><br/>
<label class="orderdate">Delivery Date & Time</label><br><input type="date" name="deliverydate" class="schedule" />

                                      <select name="deliverytime">
                                         <option value="9to12">8 AM - 12 PM</option>
                                            <option value="4to7">4 AM - 8 PM</option></select><br/>
<label class="orderdate">Write Some Word</label><br /><textarea rows="5" cols="70" class="schedule_text" ></textarea><br/><br />
<button type="button" id="#placed"  onclick="list();" class="button">Next</button>
 </div></div>
<nav><div class="main-menu main_heading" id="placed">
                        <a href="#men" onclick="men();" class="category" id="man">Men</a>
                        <a href="#women" onclick="women();" class="category" id="woman">Women</a>
                        <a href="#child" onclick="child();" class="category" id="baby">Child</a>
                        <a href="#household" onclick="household();" class="category" id="house">Household</a>
                        <a href="#pair" onclick="pair();" class="category" id="combo">Combo Offer</a>


</div></nav>




        
        
<div class="main_wrapper">                                          
<div id="men" class="main-menu">

<form action="pricedatabase.php" method="post">
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
<input type="radio" name="services" id="check1" value="washing"  class="chkbox_service" onclick="addcart()"/>
<label for="check1">Washing</label>
<input type="radio" name="services" id="check2" value="drycleaning"  class="chkbox_service" onclick="addcart()"/>
<label for="check2"> Dry Cleaning </label>
<input type="radio" name="services" id="check3" value="iron"  class="chkbox_service" onclick="addcart();"/>
<label for="check3">Stream Iron</label></div><br />
<button  type="button" onclick="return submit()","return itemlistview()">Add</button>
</div>


<!---FOr Women----
<form action="pricedatabase.php" method="post">
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
<input type="radio" name="services" value="washing" id="chkd1" class="chkbox_service" onclick="addcart();"/>
<label for="chkd1" >Washing</label>
<input type="radio" name="services" value="drycleaning" id="chkd2" class="chkbox_service" onclick="addcart();"/>
<label for="chkd2"> Dry Cleaning </label>
<input type="radio" name="services" value="iron" id="chkd3" class="chkbox_service" onclick="addcart();"/>
<label for="chkd3">Stream Iron</label><br /></div>

<button type="button">Add</button>
</div>



<div id="child" class="main-menu">
<select  name="product" id="product3" ><option value="child">All Clothes</option></select>
<div class="chkbox">
<input type="radio" name="services" value="washing" id="chked1" class="chkbox_service" onclick="addcart();"/>
<label for="chked1" >Washing</label>
<input type="radio" name="services" value="drycleaning" id="chked2" class="chkbox_service" onclick="addcart();"/>
<label for="chked2"> Dry Cleaning </label>
<input type="radio" name="services" value="iron" id="chked3" class="chkbox_service" onclick="addcart();"/>
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
<input type="radio" name="services" value="washing" id="checked1" class="chkbox_service" onclick="addcart();"/>
<label for="checked1" >Washing</label>
<input type="radio" name="services" value="drycleaning" id="checked2" class="chkbox_service" onclick="addcart();"/>
<label for="checked2"> Dry Cleaning </label>
<input type="radio" name="services" value="iron" id="checked3" class="chkbox_service" onclick="addcart();"/>
<label for="checked3">Stream Iron</label><br /></div>
<button type="button">Add</button>
</div>


<div id="pair" class="main-menu">
<select name="product" id="product" >
	<option> --Select option-- </option></select>
	

</div>
</div>
</form>
<table id="orderlist" class="orderlist"><th><div id="productlist"></div></th><th>Price</th><th>Quantity</th><th>Subtotal</th>
<tr><td></td><td><div id="price">price</div></td>
<td><div><input type="number" name="qty" min="1" id="qty" onchange="result();" /></div></td>
<td><div id="subtotal"></div></td></tr></table>
<?php 
if(isset($_POST['product1']))
{
   $product==product1;
}
else if(isset($_POST['product2']))
{ 
  $product==product2;
}
?>
</body>
</html>
<!--
<script type="text/javascript" src="Jquery/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
    function addcart()
	
  {
	  
	  
	  //alert("lol");
	  var product=$("#product").val();
	  
	 
	  var services=$('input[name=services]:checked').val();
	 alert("product" +product);
	 // alert("services"+services);
	  $.ajax({
		     type:"POST",
			 url:'cust_database.php',
			 data:{product:product,services:services},
			 success: function(data)
			 {
			   $("#price").text(data);	 
			 }
		  
		  
		  });
	 return;
  }
 function submit()
{
	
   alert("lol");    
	bgurl="./item_database.php?product=" +product.value ;
	var ajax=new XMLHttpRequest();
	ajax.open('GET',bgurl,true);
	ajax.send();
	ajax.onreadystatechange=function(){
		if(ajax.readyState==4)
		{
			
			document.getElementById("productlist").innerHTML=ajax.responseText;
		}
};
return; 
}

function itemlistview()  
	{
		bgurl = "./item_database.php?product=" +  product.value + "$services=" + services.value;
		$.ajax({
						type:'POST',
						url : bgurl,
						success: function(rdata)
							{
								$("#productlist").html(rdata);
							}
					});
	}
</script>














