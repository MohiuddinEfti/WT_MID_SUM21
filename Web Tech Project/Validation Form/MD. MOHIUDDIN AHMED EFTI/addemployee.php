<?php

$name="";
$err_name="";
$number="";
$err_number="";
$email="";
$err_email="";
$pnumber="";
$err_pnumber="";
$day="";
$err_day="";
$month="";
$err_month="";
$year="";
$err_year="";
$gender="";
$err_gender="";
$BG="";
$err_BG="";
$Sal="";
$err_Sal="";
$pass="";
$err_pass="";
$cpass="";
	$err_cpass="";


$err=false;
	
if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if($_POST["name"]=="")
		{
			$err_name="Name Required.";
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
		if(empty($_POST["number"]))
		{
			$err_number="Employee ID is Required.";
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
		if($_POST["pnumber"]=="")
		{
			$err_pnumber="Phone Number is Required.";
			$err = true;
		}
		else if(!is_numeric($_POST["pnumber"]))
		{
			$err_pnumber="Non Numeric value is not allowed.";
			$err = true;
		}
		else
		{
			$pnumber = $_POST["number"];
		}
		if (!isset($_POST["day"]))
		{
				$err_day="Please select a DAY,";
							$err = true;

		}
		else{
			$day=$_POST["day"];
		}
		if (!isset($_POST["month"]))
		{
			$err_month="MONTH required";
						$err = true;

			
		}
		else
		{
			$month=$_POST["month"];
		}
		if (!isset($_POST["year"]))
		{
			$err_year="YEAR required";
						$err = true;

		}
		else
		{
			$year=$_POST["year"];
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
		if (!isset($_POST["bloodgroup"])){
			$err_BG="Please select your BloodGroup";
						$err = true;

		}
		else
		{
			$BG=$_POST["bloodgroup"];
		}
		
		if($_POST["Sal"]=="")
		{
			$err_Sal="Salary Required.";
			$err=true;
		}
		else if(!is_numeric($_POST["Sal"]))
		{
			$err_Sal="Non Numeric value is not allowed";
			$err=true;
		}
		else{
			$Sal=$_POST["Sal"];
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
		else
		{
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
			echo "Employee ID: ".htmlspecialchars($_POST["number"])."<br>";
			echo "Email: ".htmlspecialchars($_POST["email"])."<br>";
			echo "Phone Number: ".htmlspecialchars($_POST["pnumber"])."<br>";
			echo "Day: ".htmlspecialchars($_POST["day"])."<br>";
			echo "Month: ".htmlspecialchars($_POST["month"])."<br>";
			echo "Year: ".htmlspecialchars($_POST["year"])."<br>";
			echo "Gender: ".htmlspecialchars($_POST["gender"])."<br>";
			echo "BloodGroup: ".htmlspecialchars($_POST["bloodgroup"])."<br>";
			echo "Salary: ".htmlspecialchars($_POST["Sal"])."<br>";
			echo "Password: ".htmlspecialchars($_POST["password"])."<br>";
			echo "Confirm password: ".htmlspecialchars($_POST["cpassword"])."<br>";
		}
		
		
		
		
}








?>

<html>
	<body>
	<fieldset><legend align="center"><h1>ADD EMPLOYEE</h1></legend>
	<a href="..\HomePage.php">Go Back To Home</a>	
	<form action="" method="post">
		<table align="center" >
			<tr>
				<td>
					Photo:
				</td>
				<td>
					<img src="Photo.PNG">
				</td>
				<td>
					<a href="">Upload Photo</a>
				</td>
			</tr>
			<tr>
				<td>
					Name:
				</td>
				<td><input type="text" placeholder="Name" name="name" value="<?php echo $name;?>"></td><td><span><?php echo $err_name;?></span></td>
			</tr>
			<tr>
				<td>
					Employee ID:
				</td>
				<td> <input type="numeric" Placeholder="EmployeeID" name="number" value="<?php echo $number;?>">
		</td> <td><?php echo $err_number;?></span></td>
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
				<td> <input type="numeric" Placeholder="PhoneNumber" name="pnumber" value="<?php echo $pnumber;?>">
		</td> <td><?php echo $err_pnumber;?></span></td>
			</tr>
			<tr>
				<td>
					Date Of Birth:
				</td>
				<td>
				
						<select name="day">
							<option selected disabled>Day</option>
									<?php
										for($i=1;$i<=31;$i++)
										{
											echo "<option>$i</option>";
										}
									?>
						</select>
						<select name="month">
							<option selected disabled>Month</option>
									<?php
										$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
										for($j=0;$j<count($mon);$j++)
										{
											echo "<option>$mon[$j]</option>";
										}
									?>
						</select>
						<select name="year">
							<option selected disabled>Year</option>
									<?php
										for($k=1948;$k<=2020;$k++)
										{
											echo "<option>$k</option>";
										}
									?>
						</select>
					</td><td><?php echo "$err_day"."  "."$err_month"."  "."$err_year"?></td>
			</tr>
			<tr>
				<td>
					Gender:
				</td>
				<td><input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input <?php if($gender == "Female") echo "checked";?> name="gender"  value="Female" type="radio"> Female</td>
						<td><span><?php echo $err_gender;?></span></td>
			</tr>	
			<tr>
				<td>
					Blood Group:
				</td>
				<td><select name="bloodgroup">
							<option selected disabled>Blood Group</option>
									<?php
										$BG1= array("A+","A-","B+","B-","AB+","AB-","O+","O-");
										for($j=0;$j<count($BG1);$j++)
										{
											echo "<option>$BG1[$j]</option>";
										}
									?>
						</select></td><td><span><?php echo $err_BG;?></span></td>
			</tr>
			<tr>
				<td>
					Salary:
				</td>
				<td><input type="text" placeholder="Salary" name="Sal" value="<?php echo $Sal;?>"></td><td><span><?php echo $err_Sal;?></span></td>
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
					<td>
						<input type="password" name="cpassword" placeholder="Confirm Password" value="<?php echo $cpass;?>">
					</td>
					<td>
					 <span><?php echo $err_cpass;?></span>
					</td>
			</tr>
			<tr>
				<td colspan ="3">
					<input type="submit" value="Add Employee">
					<input type="submit" value="Update Employee">
					<input type="submit" value="Delete Employee">
				</td>
				
			</tr>
		</table>
	</form>
	
	</fieldset>
	</body>
</html>