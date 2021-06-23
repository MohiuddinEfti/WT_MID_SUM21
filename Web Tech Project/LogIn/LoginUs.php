
<html>
	<body>
	<fieldset><legend><h1>Log In Page</h1></legend>
		<?php 
		
		$udata=$_GET["username"];
	
		if($udata=="user"OR$udata=="")
		{
			$udata="../HomePage.php";
		}
		else if($udata=="Admin")
		{
			$udata="../Admin.php";
			
		}
		?>
		<fieldset><h1 align="center"><a href="<?php echo $udata;?>">Log In</a></fieldset></h1>
		</fieldset>
	</body>
</html>