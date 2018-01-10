<?php
$con=0;
if($_POST['adhid']>'000000000000' && $_POST["adhid"]>'999999999999'){
	if($_POST["contact"]>"0000000000"&& $_POST["contact"]<'9999999999'){
	$con=4;
	}
	else{
			$error="Wrong Contact";
			}
	}
else{
	$error="Wrong Adhar";
	}
?>
