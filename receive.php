
<html>
<!-- This is  html form with no style to help try your post is working -->
<form method="post">
<label>query</label><input type='text' value="SELECT * FROM user "  name="query"?>
<label>params </label><input type='text' value="0"  name="params"?> 
<!-- test condion -->
<p>  adding  condition : change query to <b> SELECT * FROM user WHERE phone=?</b>  and change param to <b>1 </b>  to enable selection on phone codition</p>
<label> data for condion </label>
<input type='text' value="0802931659" name="data0"> <!--  data ata at  datat0  -->
<input type='submit' value="post"  ?>
<?form>
<p>  Read about pdo selection  remember that number of params represent number question mark to be bind and first question make is data0 in the post and increasely to the last data apart from query and params which are compusory </p>
<h2>Output </h2>
</html>

<?php 
include("PDO_RECEIVE.php");
?>