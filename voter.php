<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<center><h1> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h1></center>

<center> <img src="tn.gif"  style="width:1800px;height:1000px;"></center> 



