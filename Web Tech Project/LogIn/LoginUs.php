
<html>
	<body>
	<fieldset><legend><h1>Log In Page</h1></legend>
		<?php 
		
		$udata=$_POST["username"];
		$upass=$_POST["password"];
	
		if($udata=="user"OR$udata==""OR$udata=="User")
		{
			$udata="../HomePage.php";
		}
		else if($udata=="Admin"&&$upass=="Admin"OR$udata=="admin"&&$upass=="admin")
		{
			$udata="../Admin/Admin.php";
			
		}
		else if($udata=="Employee"&&$upass=="Employee"OR$udata=="employee"&&$upass=="employee")
		{
			$udata="../Employee/Employee.php";
			
		}
		else
		{
			$udata="../HomePage.php";
		}
		?>
		<fieldset><h1 align="center"><a href="<?php echo $udata;?>">Log In</a></fieldset></h1>
		</fieldset>
	</body>
</html>