<?php
session_start();

require_once("connect.php");

?>

<div class="container">

<header id="head">
<div id="site_logo">
<h1><a href="http://localhost/signin/">My Site</a> </h1>
</div>
<div id="menu">
<menu id="main_menu">

<ul>

<li><a href="http://localhost/signin/">HOME</a></li>

<li><a href="">Sign Up</a></li>



<li>
<?php
if(isset($_COOKIE["crntusrnm"])){
	echo "<a href='profile.php'><img width='50px' src='imgs/pp/profile_picture.png' /></a>"; 
}
?>

</li>

<li>

<?php
if(!isset($_COOKIE["crntusrnm"])){
	echo "<a href='signin_form.php'>Sign In</a>"; 
}else{
	echo "<a href='signout_source.php'>Sign Out</a>";
}

?>

</li>

</ul>

</menu>
</div>
</header>
</div>