<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$conpass="";
	$err_conpass="";
	$email="";
	$err_email="";
	$phonecode="";
	$err_phonecode="";
	$phonenumber="";
	$err_phonenumber="";
	$street="";
	$err_street="";
	$city="";
	$err_city="";
	$state="";
	$err_state="";
	$zip="";
	$err_zip="";
	$day1 ="";
	$err_day1="";
	$month1 = "";
	$err_month1="";
	$year1 = "";
	$err_year1="";
	$gender="";
	$err_gender="";
	$hear=[];
	$err_hear="";
	$bio="";
	$err_bio="";
	
	
	
	
	$hasError=false;
	
	$day = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
	$month = array("JAN","FEB","MAR","APR","MAY","JUNE","JULY","AUG","SEP","OCT","NOV","DEC");
	$year = array(1998,1999,2000,2001,2002,2003,2004,2005);
	
	function hear($hear){
		global $hear;
		foreach($hear as $h){
			if($h == $hear){
				return true;
			}
		}
		return false;
	}

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$err_name="Name Required";
		}
		else if(strlen($_POST["name"]) <=2){
			$err_name="Name Must be greater than 2";
			$hasError = true;
		}
		else
		{
			$name=$_POST["name"];
		}
		if(empty($_POST["username"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		else if(strpos($_POST["username"]," ")){
				$err_uname=" Space is not allowed in Username";
			$hasError = true;

		}
		else if(strlen($_POST["username"]) <5){
			$err_uname="User name Must be 6 greater than 6";
			$hasError = true;
		}
		else{
			$uname=$_POST["username"];
		}
		if($_POST["password"]=="")
		{
			$err_pass="Password required";
			$hasError = true;
		}
		else if(strlen($_POST["password"]) <5){
			$err_pass="Password Must be 6 greater than 6";
			$hasError = true;
		}
		else if($_POST["password"]!=($_POST["confirmPassword"]))
		{
			$err_pass="Password and Confirm Password are not same";
			$hasError = true;
		}
		else
		{
			
			$pass=$_POST["password"];
		}
		if ((!strpos($_POST["password"],"#"))OR(!strpos($_POST["password"],"?"))OR(!strpos($_POST["password"],"#"))OR(!strpos($_POST["password"],"<"))OR(!strpos($_POST["password"],">")))	
		{					

		}
	
		
		if($_POST["confirmPassword"]=="")
		{
			$err_conpass="Confirm Password required";
			$hasError = true;
		}
		else if(strlen($_POST["confirmPassword"]) <5){
			
			$hasError = true;
		}
		else if($_POST["password"]!=($_POST["confirmPassword"]))
		{
			$err_conpass="Password and Confirm Password are not same";
			$hasError = true;
		}
		else
		{
			$conpass=$_POST["confirmPassword"];
		}
		if($_POST["email"]=="")
		{
			$err_email="Email required";
			$hasError =true;
		}
		else if(!strpos($_POST["email"],"@")OR !strpos($_POST["email"],"."))
		{
			
			$err_email="Email should contain '@' and '.'";
			$hasError = true;
			
					

		}
		else
		{
			$email=$_POST["email"];
		}
		if($_POST["phonecode"]=="")
		{
			$err_phonecode="Code is invalid";
			$hasError =true;
		}
		else if(is_numeric($_POST["phonecode"])!=$_POST["phonecode"])
		{
			$err_phonecode="Code need to be numeric value";
			$hasError =true;

		}
		else
		{
			$phonecode=$_POST["phonecode"];
			
		}
		if($_POST["phonenumber"]=="")
		{
			$err_phonenumber="Please Enter a Valid Phone number";
			$hasError =true;
		}
		else if(is_numeric($_POST["phonenumber"])!=$_POST["phonenumber"])
		{
			$err_phonenumber="Phone number need to be numeric value";
			$hasError =true;

		}
		else
		{
			$phonenumber=$_POST["phonenumber"];
			
		}
		if($_POST["street"]==""OR$_POST["city"]==""OR$_POST["state"]==""OR$_POST["zip"]=="")
		{
			$err_street="Please enter your address";
		}
		else
		{
			$street=$_POST["street"];
			$city=$_POST["city"];
			$state=$_POST["state"];
			$zip=$_POST["zip"];
		}
		if(!isset($_POST["hear"])){
			$err_hear="Please check mark your option";
			$hasError = true;
		}
		else{
			$hear = $_POST["hear"];
		}
		if(!isset($_POST["day"]))
		{
			$err_day1="Please enter your DOB";
			$hasError=true;
		}
		else
		{
			$day1=$_POST["day"];
			$month1=$_POST["month"];
			$year1=$_POST["year"];
		}
		
		if(empty($_POST["bio"])){
			$err_bio="Bio Required";
			$hasError = true;
		}
		else{
			$bio = $_POST["bio"];
			
		}
		
		if(!$hasError){
			echo $name."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["phonecode"]." ";
			echo $_POST["phonenumber"]."<br>";
			echo $_POST["street"]." ";
			echo $_POST["city"]." ";
			echo $_POST["state"]." ";
			echo $_POST["zip"]."<br>";
			echo $_POST["day"]." ";
			echo $_POST["month"]." ";
			echo $_POST["year"]."<br>";
			echo $_POST["gender"]."<br>";
			$arr = $_POST["hear"];
			
			foreach($arr as $e){
				echo "$e ";
				
			}
			echo "<br>";
			echo $_POST["bio"]."<br>";
			
			
		}
		
		
		
	}
?>
<html>
	<body>
	<fieldset ><legend><h1>Club Member Registration</h1></legend>
	<form action="" method="post">
	
	<table>
	
		<tr>
			<td align="Right">Name:</td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>
		</tr>
		<tr>
						<td align="Right">Username: </td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>
		<tr>
		<td align="Right">Password</td>
						<td>
						<input type="Password" name="password"  value="<?php echo $pass;?>" placeholder="Password">
						</td>
						<td><span><?php echo $err_pass;?></span></td>
		</tr>
		<td align="Right">Confirm Password</td>
						<td><input type="Password" name="confirmPassword" value="<?php echo $conpass;?>" placeholder="Confirm Password"></td>
						<td><span><?php echo $err_conpass;?></span></td>
		</tr>
		<tr>
			<td align="Right">Email:</td>
						<td><input type="text" name="email" value="<?php echo $email;?>" placeholder="Email"></td>
						<td><span><?php echo $err_email;?></span></td>
		</tr>
		<tr>
			<td align="Right">Phone</td>
						<td>
						<input type="text"  size="6" name="phonecode" value="<?php echo $phonecode;?>" placeholder="code"> - 
						<input type="text"  size="6" name="phonenumber" value="<?php echo $phonenumber;?>" placeholder="Number">
						<td><span><?php echo $err_phonecode;?></span> <span><?php echo $err_phonenumber;?></span></td>
						</td>
		</tr>
		<tr>
			<td align="Right">Address:</td>
						<td>
						<input type="text" name="street" value="<?php echo $street;?>" placeholder="Street Address"><br>
						<input type="text" size="6" name="city" value="<?php echo $city;?>" placeholder="City"> - <input type="text" size="6" name="state" value="<?php echo $state;?>" placeholder="State"><br>
						<input type="text" name="zip" value="<?php echo $zip;?>" placeholder="Pstal/Zip Code">						
						</td>
						<td><span><?php echo $err_street;?></td>
		</tr>
		<tr>
			<td align="Right">
				Birth Date:
			</td>
				<td>
					<select name="day">
					<option selected disabled>Day</option>
					<?php
									foreach($day as $pf){
										if($day1 == $pf)
											echo "<option selected>$pf</option>";
										else
											echo "<option>$pf</option>";
									}
								?>
					</select>
					<select name="month">
					<option selected disabled>Month</option>
					<?php
									foreach($month as $tf){
										if($month1 == $tf)
											echo "<option selected>$tf</option>";
										else
											echo "<option>$tf</option>";
									}
								?>
					</select>
					<select name="year">
					<option selected disabled>Year</option>
					<?php
									foreach($year as $yf){
										if($year1 == $yf)
											echo "<option selected>$yf</option>";
										else
											echo "<option>$yf</option>";
									}
								?>
					</select>
			</td>
	
		</tr>
		<tr>
			<td align="Right">Gender</td>
				
				<td><input type="radio" value="Male" <?php if($gender = "Male") echo "checked";?> name="gender"> Male <input <?php if($gender = "Female") echo "checked";?> name="gender"  value="Female" type="radio"> Female</td>
				<td><span><?php echo $err_gender;?></span></td>
				
		</tr>
		<tr>
			<td align="Right">Where did you hear<br>about us?</td>
				<td>
				
					<input type="checkbox" value="A Friend or Colleague" <?php if(hear("A Friend or Colleague")) echo "checked";?>  name="hear[]">A Friend or Colleague<br>
					<input type="checkbox" value="Google" <?php if(hear("Google")) echo "checked";?>  name="hear[]">Google<br>
					<input type="checkbox" value="Blog Post" <?php if(hear("Blog Post")) echo "checked";?>  name="hear[]">Blog Post<br>
					<input type="checkbox" value="News Article" <?php if(hear("News Article")) echo "checked";?>  name="hear[]">News Article<br>	
				</td>
				<td><span><?php echo $err_hear;?></span></td>

		</tr>
		<tr>
			<td align="Right">Bio:</td>
						<td>
							<textarea name="bio"><?php echo $bio;?></textarea>
						</td>
						<td><span><?php echo $err_bio;?></span></td>
		</tr>
		<tr>
		<td align="center" colspan="2">
			<input type="submit" value="Register">
		</td>
		</tr>

	</table>
	</form>
	</fieldset>
	</body>
</html>