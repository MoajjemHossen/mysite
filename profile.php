<?php
if(!isset($_COOKIE["crntusrnm"])){
	header("location: index.php"); 
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Sign in Form</title>

<link href="css.css" rel="stylesheet" type="text/css" />
<style>
*{
margin:0;
padding:0
}
</style>


</head>
<body>

<?php
include("header.php");
?>

<div style="background:green; padding:19px">
<p>
<?php
if(isset($_COOKIE["crntusrnm"])){
	echo $_COOKIE["crntusrnm"];
}

?>
</p>

<p>There are 24 hours in a day. The day is an SI accepted unit for time for use with the metric system. Days can be abbreviated as day, for example 1 day can be ...

</p>

</div>

<?php
include("footer.php");
?>

</body>
</html>