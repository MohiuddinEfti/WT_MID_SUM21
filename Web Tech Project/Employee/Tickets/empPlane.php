<?php
	
		
	$pmodel="";
	$err_pmodel="";
	
	$deptime="";
	$err_deptime="";
	
	$arrtime="";
	$err_arrtime="";
	
	
	$nameofplanes=[];
	$err_nameofplanes="";
	
	$num="";
	$err_num="";
	
	
	
	
	$hasError=false;
	
	$departuretimes = array("Before 06:00 AM","06:00 AM - 12:00 PM","12:00 PM - 06:00 PM","After 06:00 PM");
	
	$arrivaltimes = array("Before 06:00 AM","06:00 AM - 12:00 PM","12:00 PM - 06:00 PM","After 06:00 PM");


	function nameofplaneExist($nameofplane){
		global $nameofplanes;
		foreach($nameofplanes as $n){
			if($n == $nameofplane){
				return true;
			}
		}
		return false;
	}

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["pmodel"])){
			$err_pmodel="Plane Model Required * ";
			$hasError = true;
		}
		else if(strlen($_POST["pmodel"]) <=2){
			$err_pmodel="Name Must be greater than 2";
			$hasError = true;
		}
		else{
			$pmodel=$_POST["pmodel"];
		}
	
		if(!isset($_POST["departuretime"])){
			$err_deptime = "Departure Time Required * ";
			$hasError = true;
		}
		else{
			$deptime = $_POST["departuretime"];
		}
		
		if(!isset($_POST["arrivaltime"])){
			$err_arrtime= "Arrival Time Required * ";
			$hasError = true;
		}
		else{
			$arrtime = $_POST["arrivaltime"];
		}
		
		if(!isset($_POST["nameofplanes"])){
			$err_nameofplanes="Name Of planes Required *";
			$hasError = true;
		}
		else{
			$nameofplanes = $_POST["nameofplanes"];
		}
		
		
		if(!is_numeric($_POST["num"]))
		{
			$err_num="ID should be numeric * ";
		}
		else $num=$_POST["num"];
		

		
		if(!$hasError){
			
			
			echo $pmodel."<br>";

			echo $_POST["departuretime"]."<br>";
			
			echo $_POST["arrivaltime"]."<br>";

			$arr = $_POST["nameofplanes"];
			
			foreach($arr as $e){
				echo "$e <br>";
			}
			echo $_POST["num"]."<br>";


		}
		
		
		
	}
?>
<html>
	<body><title>Plane</title>
	<fieldset><legend align="center"><h1>Plane</h1></legend>
		<a href="..\Employee.php">Go Back</a>
	<form action="" method="post">
	<form border>
	<fieldset>
	<table align = "center">
				
					
					<tr>
						<td>Plane Model: </td>
						<td><input type="text" name="pmodel" value="<?php echo $pmodel;?>" placeholder="Plane Model"></td>
						<td><span><?php echo $err_pmodel;?></span></td>
						
					</tr>
					
					<tr>
						<td>Departure Time:  </td>
						<td>
							<select name="departuretime">
								<option selected disabled>--Select--</option>
								<?php
									foreach($departuretimes as $dt){
										if($deptime == $dt)
											echo "<option selected>$dt</option>";
										else
											echo "<option>$dt</option>";
									}
								?>
							</select> 
						</td>
						<td><span><?php echo $err_deptime;?></span></td>
					</tr>
					
					<tr>
						<td>Arrival Time:  </td>
						<td>
							<select name="arrivaltime">
								<option selected disabled>--Select--</option>
								<?php
									foreach($arrivaltimes as $at){
										if($arrtime == $at)
											echo "<option selected>$at</option>";
										else
											echo "<option>$at</option>";
									}
								?>
							</select> 
						</td>
						<td><span><?php echo $err_arrtime;?></span></td>
					</tr>
					
					<tr>
						<td>Name Of Bus:  </td>
						<td>
							<input type="checkbox" value="General Dynamics F-111" <?php if(nameofplaneExist("General Dynamics F-111")) echo "checked";?>  name="nameofplanes[]"> General Dynamics F-111<br>
							<input type="checkbox" value="Douglas AD Skyraider" <?php if(nameofplaneExist("Douglas AD Skyraider")) echo "checked";?> name="nameofplanes[]"> Douglas AD Skyraider<br>
							<input type="checkbox" value="Aerojet General X-8" <?php if(nameofplaneExist("Aerojet General X-8")) echo "checked";?> name="nameofplanes[]"> Aerojet General X-8<br>
							<input type="checkbox" value="Convair B-36 Peacemaker" <?php if(nameofplaneExist("Convair B-36 Peacemaker")) echo "checked";?> name="nameofplanes[]"> Convair B-36 Peacemaker<br>
							
						</td>
						<td><span><?php echo $err_nameofplanes;?></span></td>
					</tr>
					
					<tr>
					<td><span>Pilot's Id</span></td>
					<td><input type="text" name="num" value="<?php echo $num;?>" placeholder = "Id" size="10"> </td><td><span><?php echo $err_num;?></span></td>
					</tr>
					<tr>
					<td colspan="3" align="center">
						<input type="submit" name="Search" value="Search">
						<input type="reset" name="reset" value="Reset">
					</td>
					</tr>
					
					
				</table>
			</form>
		</fieldset>
	</body>
</html>