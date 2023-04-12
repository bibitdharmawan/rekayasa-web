<?php 
	$menu="Home";
	if (isset($_GET['menu'])) {
		$menu =$_GET['menu'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Blog - <?php echo $menu; ?></title>
</head>
<body>