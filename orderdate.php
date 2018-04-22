<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<link rel="stylesheet" type="text/css" href="stylesheet/booknow.css" />  
<!--
<script type="text/javascript" src="./javascript/booknowscript.js"></script>-->
<body>
<div id="order" class="sub-menu">
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
<a id="#placed"  onclick="list();" class="button" href="addtocart.php">Next</a>
 </div></div>
</body>
</html>