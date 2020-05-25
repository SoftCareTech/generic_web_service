
<html>
<!-- This is  html form with no style to help try your post is working 
e.g of query//  $query= "INSERT into user(phone, name, last, cdate, msg, ip)VALUES(?,?,?,?,?,?)";
e.g of number parameter /// $params=6;     
// query and params should also be in the url
-->
<form method="post">
<label>query</label><input type='text' value="INSERT into user(phone, name, last, cdate, msg, ip)VALUES(?,?,?,?,?,?) "  name="query"?>
<label>params</label><input type='text' value="6"  name="params"?> 

<h4> data  frome data0 to data5  making up to six differnt data value that corrspond to the number of question mark</h4>
<label>phone</label><input type='text' value="0802931659"  name="data0"?>
<br><label>name</label><input type='text' value="08085460377"  name="data1"?> 

<br><label>last</label><input type='text' value="08029316598"  name="data2"?>
<br><label>cdate</label><input type='text' value="08085460377"  name="data3"?> 

<br><label>msg</label><input type='text' value="08029316598"  name="data4"?>
<br><label>ip</label><input type='text' value="08085460377"  name="data5"?> 
<input type='submit' value="post"  ?>
<form>
	<p><h2> Result </h2> (if inserted then ok else error)</p><p></p><p></p>
</html>
<?php 
// include send to test it 
include("PDO_SEND.php");


?>