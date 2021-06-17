<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
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
	
	$day = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14);
	$month = array("JAN","FEB","MAR","APR","MAY","JUNE");
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
		if(empty($_POST["uname"])){
			$err_uname="username Required";
			$hasError = true;
		}
		else{
			$uname=$_POST["username"];
			
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
			echo $_POST["gender"]."<br>";
			echo $_POST["profession"]."<br>";
			echo $_POST["bio"]."<br>";
			
			$arr = $_POST["hear"];
			
			foreach($arr as $e){
				echo "$e <br>";
			}
		}
		else
		{
			echo $_POST["name"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["phone"]."<br>";
			echo $_POST["state"]."<br>";
			echo $_POST["city"]."<br>";
			echo $_POST["street"]."<br>";
			echo $_POST["zip"]."<br>";
			echo $_POST["day"]."<br>";
			echo $_POST["month1"]."<br>";
			echo $_POST["year1"]."<br>";
			echo $_POST["gender"]."<br>";
			$arr = $_POST["hear"];
			
			foreach($arr as $e)
			{
				echo "$e <br>";
			}
			echo $_POST["bio"]."<br>";
		}
		
		
	}
?>
<html>
	<body>
	<fieldset ><h1>Club Member Registration</h1>
	<form action="" method="post">
	
	<table>
	
		<tr>
			<td align="Right">Name:</td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>
		</tr>
		<tr>
			<td align="Right">Username:</td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
		</tr>
		<tr>
		<td align="Right">Password</td>
						<td><input type="Password" name="password" placeholder="Password"></td>
		</tr>
		<td align="Right">Confirm Password</td>
						<td><input type="Password" name="confirmPassword" placeholder="Confirm Password"></td>
		</tr>
		<tr>
			<td align="Right">Email:</td>
						<td><input type="text" name="email" value="<?php echo $email;?>" placeholder="Email"></td>
		</tr>
		<tr>
			<td align="Right">Phone</td>
						<td>
						<input type="text" "code" size="6" name="phone" value="<?php echo $phone;?>" placeholder="code"> - 
						<input type="text" "Number" size="6" name="phone" value="<?php echo $phone;?>" placeholder="Number">
						</td>
		</tr>
		<tr>
			<td align="Right">Address:</td>
						<td>
						<input type="text" name="street" value="<?php echo $street;?>" placeholder="Street Address"><br>
						<input type="text" size="6" name="city" value="<?php echo $city;?>" placeholder="City"> - <input type="text" size="6" name="state" value="<?php echo $state;?>" placeholder="State"><br>
						<input type="text" name="zip" value="<?php echo $zip;?>" placeholder="Pstal/Zip Code">						
						</td>
		</tr>
		<tr>
			<td align="Right">
				Birth Date:
			</td>
				<td>
					<select name="Day">
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
					<select name="Month">
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
					<select name="Year">
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