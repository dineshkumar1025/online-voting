<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<img src="government.png"  style="width:150px;height:150px;">
<body style="background-color:white;">

<h3>Make a Vote </h3>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='6'> <BR>
<img src="download pmk.jpg"  style="width:150px;height:150px;">
<input type="radio" name="lan" value="PMK">  PMK<BR>
<img src="download admk.jpg"  style="width:150px;height:150px;">
<input type="radio" name="lan" value="ADMK">ADMK<BR>
<img src="download dmk.png"  style="width:150px;height:150px;">
<input type="radio" name="lan" value="DMK"> DMK<BR>
<img src="download bjp.jpg"  style="width:150px;height:150px;">
<input type="radio" name="lan" value="BJP">BJP  <BR>
<img src="download ntk.jpg"  style="width:150px;height:150px;">
<input type="radio" name="lan" value="NTK"> NTK<BR>
<img src="congross.png"  style="width:150px;height:150px;">
<input type="radio" name="lan" value="CONGRESS"> CONGRESS<BR>
</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>
