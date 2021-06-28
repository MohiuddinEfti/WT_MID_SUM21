<?php
$planetype="";
$errorplane="";
$departure="";
$errordep="";
$arrival="";
$errorarr="";
$noseat="";
$errorno="";
$plane=[];
$errorplanee="";
$err=false;
$depttime = array("Before 06:00 AM","06:00 AM - 12:00 PM","12:00 PM - 06:00 PM","After 06:00 PM");
$planetype1 = array("Business Class","Premium Class");
$seat = array("1","2","3","4","5","6");
$exwe="";
$errorexwe="";

function planeExist($planee){
		global $plane;
		foreach($plane as $p){
			if($p == $planee){
				return true;
			}
		}
		return false;
	}

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if (!isset($_POST["planetype"])){
			
				$errorplane="Select type";
					$err = true;
		}
		else{
			$planetype=$_POST["planetype"];
		}
		if (!isset($_POST["departure"])){
			
				$errordep="Select Departure Time";
					$err = true;
		}
		else{
			$departure=$_POST["departure"];
		}
		
		if (!isset($_POST["arrival"])){
			
				$errorarr="Select Arrival Time";
					$err = true;
		}
		else{
			$arrival=$_POST["arrival"];
		}
		if (!isset($_POST["noseat"])){
			
				$errorno="Select Number of seat";
					$err = true;
		}
		else{
			$arrival=$_POST["noseat"];
		}
		
		if (!isset($_POST["exwe"])){
			
				$errorexwe="Select Field";
					$err = true;
		}
		else{
			$exwe=$_POST["exwe"];
		}
		
		if (!isset($_POST["plane"])){
			
				$errorplanee="Select Desire Type";
					$err = true;
		}
		else{
			$plane=$_POST["plane"];
		}
		
		
		
		if(!$err){
			echo $_POST["planetype"]."<br>";
			echo $_POST["departure"]."<br>";
			echo $_POST["arrival"]."<br>";
			echo $_POST["noseat"]."<br>";
			$arr = $_POST["plane"];
			
			foreach($arr as $e){
				echo "$e <br>";
			}
		}
}


	
?>



<html>
	<body><title>Plane Search</title>
	<fieldset><legend align="center"><h1>Plane Search</h1></legend>
	<a href="..\HomePage.php">Go Back To Home</a>
	<form action="" method="post">
	<form border>
	<fieldset>
	<table align = "center">
	
		<td>
		Plane Type
		</td>
		<td>
		<select name="planetype">
		<option disabled selected>Plane Type</option>
			<?php
									foreach($planetype1 as $pf){
										if($planetype1 == $pf)
											echo "<option selected>$pf</option>";
										else
											echo "<option>$pf</option>";
									}
								?>
		</select>

		</td>
		<td><span><?php echo $errorplane;?></span></td>
	</tr>
	<tr>
		<td>
		Departure Time
		</td>
		<td>
		<select name="departure">
		    <option disabled selected>Departure Time</option>
			<?php
									foreach($depttime as $qf){
										if($depttime == $qf)
											echo "<option selected>$qf</option>";
										else
											echo "<option>$qf</option>";
									}
								?>
		</select>
		
		</td>
		<td><span><?php echo $errordep;?></span></td>
	</tr>
	<tr>
		<td>
		Arrival Time
		</td>
		<td>
		<select name="arrival">
		<option disabled selected>Arrival Time</option>
			<?php
									foreach($depttime as $qf){
										if($depttime == $qf)
											echo "<option selected>$qf</option>";
										else
											echo "<option>$qf</option>";
									}
								?>
		</select>
		
		</td>
		<td><span><?php echo $errorarr;?></span></td>
	</tr>
	<tr>
		<td>
		No. Of Seat
		</td>
		<td>
		<select name="noseat">
			<option disabled selected>No. Of Seat</option>
			<?php
									foreach($seat as $rf){
										if($seat == $rf)
											echo "<option selected>$rf</option>";
										else
											echo "<option>$rf</option>";
									}
								?>
		</select>
		
		</td>
		<td><span><?php echo $errorno;?></span></td>
	</tr>
	
	<tr>
						<td>Extra Weight Luggage: </td>
						<td><input type="radio" value="Yes" <?php if($exwe == "Yes") echo "checked";?> name="exwe"> Yes <input <?php if($exwe == "No") echo "checked";?> name="exwe"  value="No" type="radio"> No</td>
						<td><span><?php echo $errorexwe;?></span></td>
					</tr>
	<tr>
		<td>
		Your Desire Plane
		</td>
		<td>
							<input type="checkbox" value="Novo" <?php if(planeExist("Movies")) echo "checked";?>  name="plane[]"> Novo
							<input type="checkbox" value="Bangladesh Biman" <?php if(planeExist("Music")) echo "checked";?> name="plane[]"> Bangladesh Biman<br>
							<input type="checkbox" value="US Bangla" <?php if(planeExist("Sports")) echo "checked";?> name="plane[]"> US Bangla
							<input type="checkbox" value="Singapore Airlines" <?php if(planeExist("Games")) echo "checked";?> name="plane[]"> Singapore Airlines
						</td>
		<td><span><?php echo $errorplanee;?></span></td>
	</tr>
	<tr>
		<td colspan="3" align="center">
			<input type="submit" value="Search">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center">
		<a href="..\Payment\Plane payment.php">Search</a>
		</td>
	</tr>
	</table>
	</fieldset>
	</form>
	</fieldset>
	</body>
</html> 