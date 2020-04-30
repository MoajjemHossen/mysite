<?php

setcookie("crntusrnm","",time()-(86400*5));
header("location: signin_form.php");

?>