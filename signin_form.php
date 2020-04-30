<?php
if(isset($_COOKIE["crntusrnm"])){
	header("location: profile.php"); 
}

?>


<!DOCTYPE html>
<html>
<head>
<title>Sign in Form</title>


<link href="css.css" rel="stylesheet" type="text/css" />
<link href="sign_css.css" rel="stylesheet" type="text/css" />



</head>
<body>

<div class="container">






<?php
include("header.php");
?>



<div id="signIn_box">
<div id="signin_title_header">
<h3 id="signin_title">Please enter your absolute information</h3>
</div>
<div id="signIn">
<p id="incorrect_info">
<?php

if(isset($_REQUEST['incorrect_info'])){
	echo "Do not macth your username and password!!";
	
}


?>
</p>

<form id="signIn_form" method="post" action="signin_source.php" >
<label>User Name </label>
<input type="text" name="fnm"  />
<br/>
<br/>
<label>User Name </label>
<input type="password" name="pwd"  />
<br/>
<br/>
<button id="submitbtn" type="submit" name="submitbtn" value="Sign In" >Sign In</button>
</form>

</div>
</div>


<?php
include("footer.php");
?>
</div>

</body>
</html>