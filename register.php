<script src='https://www.google.com/recaptcha/api.js'></script>
<?php include "header.php";
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<br>
<br>
<center>
<legend> <h3> Register </h3></legend> </center>
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
<center><font size="4" >
<form action= "reg_action.php" method= "post" id="myform" >
Fullname:
<input type="text" name="fullname" value="" />
<br>
<br>
Firstname:
<input type="text" name="firstname" value="" />
<br>
<br>
Lastname: 
<input type="text" name="lastname" value="" />
<br>
<br>
Username: 
<input type="text" name="username" value="" />
<br>
<br>
Password: 
<input type="password" name="password" value="" />
<br>
<br>
Aadhar_no: 
<input type="Aadhar_no" name="Aadhar_no" value="" />
<br>
<br>
Voter_id: 
<input type="Voter_id" name="Voter_id" value="" />
<br>
<br>
District: 
<input type="District" name="District" value="" />
<br>
<br>Taluk: 
<input type="Taluk" name="Taluk" value="" />
<br>
<br>
<div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div> 
<br>
<br>
<input type="submit" name="submit" value="Next" />
</form>
</font>
</center>
<script type= "text/javascript" >
 var frmvalidator = new Validator("myform"); 

 frmvalidator.addValidation("fullname","req","Please enter fullname"); 
 frmvalidator.addValidation("fullname","maxlen=50");
 frmvalidator.addValidation("firstname","req","Please enter firstname"); 
 frmvalidator.addValidation("firstname","maxlen=50");
 frmvalidator.addValidation("lastname","req","Please enter lastname"); 
 frmvalidator.addValidation("lastname","maxlen=50");
 frmvalidator.addValidation("username","req","Please enter  username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter password"); 
 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");
 frmvalidator.addValidation("Aadhar_no","req","Please enter Aadhar_no"); 
 frmvalidator.addValidation("Aadhar_no","maxlen=50");
 frmvalidator.addValidation("Voter_id","req","Please enter Voter_id"); 
 frmvalidator.addValidation("Voter_id","maxlen=50");
 frmvalidator.addValidation("District","req","Please enter District"); 
 frmvalidator.addValidation("District","maxlen=50");
 frmvalidator.addValidation("Taluk","req","Please enter Taluk"); 
 frmvalidator.addValidation("Taluk","maxlen=50");

</script>
<?php include "footer.php" ;?>
