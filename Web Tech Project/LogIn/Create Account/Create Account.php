<?php
	$name="";
	$err_name="";
	$Lname="";
	$err_Lname="";
	$uname="";
	$err_uname="";
	$gender="";
	$err_gender="";
	$email="";
	$err_email="";
	$number="";
	$err_number="";
	$address="";
	$err_address="";
	$pass="";
	$err_pass="";
	$cpass="";
	$err_cpass="";
    $err=false;

    if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		if($_POST["name"]=="")
		{
			$err_name="First Name Required";
			$err=true;
		}
		else if(is_numeric($_POST["name"]))
		{
			$err_name="Numeric value is not allowed.";
			$err=true;
		}
		else
		{
			$name=$_POST["name"];
		}
		if($_POST["lastname"]==""){
			$err_Lname="Last Name Required";
			$err = true;
		}
		else if(is_numeric($_POST["lastname"]))
		{
			$err_Lname="Numeric value is not allowed.";
			$err=true;
		}
		else
		{
			$lname=$_POST["lastname"];
		}
		if($_POST["username"]==""){
			$err_uname="Username Required";
			$err=true;
		}
		else if(is_numeric($_POST["username"]))
		{
			$err_uname="Numeric value is not allowed.";
			$err=true;
		}
		else
		{
			$uname=$_POST["username"];
		}
		if(!isset($_POST["gender"]))
		{
			$err_gender="Please select your GENDER";
			$err = true;
		}
		else
		{
			$gender = $_POST["gender"];
		}
		if($_POST["email"]=="")
		{
			$err_email="Email required";
			$err =true;
		}
		else if(is_numeric($_POST["email"]))
		{
			$err_email="Numeric value is not allowed.";
			$err =true;
		}
		else if(!strpos($_POST["email"],"@")OR !strpos($_POST["email"],"."))
		{
			
			$err_email="Email should contain '@' and '.'";
			$err = true;		
		}
		else
		{
			$email=$_POST["email"];
		}
		if($_POST["number"]=="")
		{
			$err_number="Phone Number is required";
			$err = true;
		}
		else if(!is_numeric($_POST["number"]))
		{
			$err_number="Non Numeric value is not allowed.";
			$err = true;
		}
		else
		{
			$number = $_POST["number"];
		}
		if($_POST["address"]=="")
		{
			$err_address="Address is required";
			$err = true;
		}
		else{
			$address = $_POST["address"];
		}
		if($_POST["password"]=="")
		{
			$err_pass="Password Required";
			$err = true;
		}
		else if(strlen($_POST["password"]) <=6)
		{
			$err_pass="Password Must be greater than 6 digit";
			$err = true;
		}
		else if((!strpos($_POST["password"],"#")))
		{
			$err_pass="Password Should have # special charecter";
			$err = true;
		}
		else{
			$pass = $_POST["password"];
		}
		
		if($_POST["cpassword"]=="")
		{
			$err_cpass="Retype your Password";
			$err = true;
		}
		else if($_POST["cpassword"]!=$_POST["password"]){
			$err_cpass="Password Do not Match.Please try again!!";
			$err = true;
		}
		else {
			$cpass = $_POST["cpassword"];
		}
		
		
		if(!$err){
			echo "Name: ".htmlspecialchars($_POST["name"])."<br>";
			echo "Lastname: ".htmlspecialchars($_POST["lastname"])."<br>";
			echo "Username: ".htmlspecialchars($_POST["username"])."<br>";
			echo "Gender: ".htmlspecialchars($_POST["gender"])."<br>";
			echo "Email: ".htmlspecialchars($_POST["email"])."<br>";
			echo "Number: ".htmlspecialchars($_POST["number"])."<br>";
			echo "Address: ".htmlspecialchars($_POST["address"])."<br>";
			echo "Password: ".htmlspecialchars($_POST["password"])."<br>";
			echo "Confirm password: ".htmlspecialchars($_POST["cpassword"])."<br>";
		}
	}
	?>








<html>
	<body>
	<fieldset><legend><h1>Create Account</h1></legend>
	<form border  action="" method="post">
	<table align = "Center">
	<tr>
		<td>
		First Name:
		</td>
		
			<td><input type="text" placeholder="First Name" name="name" value="<?php echo $name;?>"></td><td><span><?php echo $err_name;?></span></td>
		
	</tr>
	<tr>
		<td>
		Last Name:
		</td>
		
			<td><input type="text" placeholder="Last Name" name="lastname" value="<?php echo $Lname;?>"></td><td><span><?php echo $err_Lname;?></span></td>
		
	</tr>
	<tr>
		<td>
			Username:
		</td>
		<td><input type="text" placeholder="Userame" name="username" value="<?php echo $uname;?>"></td><td><span><?php echo $err_uname;?></span></td>
	</tr>
	<tr>
		<td>
			Gender:
		<td><input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input <?php if($gender == "Female") echo "checked";?> name="gender"  value="Female" type="radio"> Female</td>
						<td><span><?php echo $err_gender;?></span></td>
	</tr>
	<tr>
		<td>
		Email:
		</td>
		<td><input type="text" placeholder="Email" name="email" value="<?php echo $email;?>"></td>
					<td><span><?php echo $err_email;?></span></td>
	</tr>
	<tr>
		<td>
		Phone:
		</td>
		
		<td> <input type="numeric" Placeholder="PhoneNumber" name="number" value="<?php echo $number;?>">
		</td> <td><?php echo $err_number;?></span></td>
		
	</tr>
	<tr>
		<td>
		Address:
		</td>
		<td><input type="text" name="address" placeholder="Address" value="<?php echo $address;?>"></td>
					<td><span><?php echo $err_address;?></span></td>
	</tr>
	<tr>
		<td>
		Password:
		</td>
		<td><input type="password" name="password" placeholder="Password" value="<?php echo $pass;?>"></td>
					<td><span><?php echo $err_pass;?></span></td>
	</tr>
	<tr>
		<td>
		Confirm Password:
		</td>
			<td><input type="password" name="cpassword" placeholder="Confirm Password" value="<?php echo $cpass;?>"></td>
					<td><span><?php echo $err_cpass;?></span></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<a href="../../HomePage.php">
			<fieldset>Create Account</fieldset>
			</a>
		</td>
	</tr>
	<tr>
		<td align="center" colspan="2"><input type="submit" name="submit"value="Create Account"></td>
	</tr>
	
	</table>	
	<form>
	</fieldset>
	</body>

</html>