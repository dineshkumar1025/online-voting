G<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<img src="government.png"  style="width:150px;height:150px;">
<body style="background-color:white;">

<h3>Make a Vote </h3>
<form action="submit_vote2.php" name="vote" method="post" id="myform" >
<center><font size='6'> <BR>
<img src="bjp2.jpg"  style="width:150px;height:150px;">
<input type="radio" name="lan" value="BJP">                 BJP<BR>
<img src="con2.png"  style="width:150px;height:150px;">
<input type="radio" name="lan" value="CONGRESS">    CONGRESS<BR>
<img src="bsp.jpg"  style="width:180px;height:180px;">
<input type="radio" name="lan" value=" BSP">               BSP<BR>
<img src="tri_con.jpg"  style="width:150px;height:150px;">
<input type="radio" name="lan" value="TRINAMOOL CONGRESS">TRINAMOOL CONGRESS <BR>
<img src="com.png"  style="width:150px;height:150px;">
<input type="radio" name="lan" value="COMMUNIST PARTY"> COMMUNIST PARTY<BR>
</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>
