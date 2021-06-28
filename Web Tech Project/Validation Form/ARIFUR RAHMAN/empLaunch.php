<?php
	
		
	$launchno="";
	$err_launchno="";
	
	$deptime="";
	$err_deptime="";
	
	$arrtime="";
	$err_arrtime="";
	
	
	$nameoflaunchs=[];
	$err_nameoflaunchs="";
	
	
	
	
	
	$hasError=false;
	
	$departuretimes = array("Before 06:00 AM","06:00 AM - 12:00 PM","12:00 PM - 06:00 PM","After 06:00 PM");
	
	$arrivaltimes = array("Before 06:00 AM","06:00 AM - 12:00 PM","12:00 PM - 06:00 PM","After 06:00 PM");


	function nameoflaunchExist($nameoflaunch){
		global $nameoflaunchs;
		foreach($nameoflaunchs as $n){
			if($n == $nameoflaunch){
				return true;
			}
		}
		return false;
	}

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["launchno"])){
			$err_launchno="Launch Number Required * ";
			$hasError = true;
		}
		else if(strlen($_POST["launchno"]) <=2){
			$err_launchno="Name Must be greater than 2";
			$hasError = true;
		}
		else{
			$launchno=$_POST["launchno"];
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
		
		if(!isset($_POST["nameoflaunchs"])){
			$err_nameoflaunchs="Name Of Launch Required *";
			$hasError = true;
		}
		else{
			$nameoflaunchs = $_POST["nameoflaunchs"];
		}
		

		
		if(!$hasError){
			
			
			echo $launchno."<br>";

			echo $_POST["departuretime"]."<br>";
			
			echo $_POST["arrivaltime"]."<br>";

			$arr = $_POST["nameoflaunchs"];
			
			foreach($arr as $e){
				echo "$e <br>";
			}

		}
		
		
		
	}
?>
<html>
	<body><title>Launch</title>
	<fieldset><legend align="center"><h1>Launch</h1></legend>
		<a href="..\Employee.php">Go Back</a>
	<form action="" method="post">
	<form border>
	<fieldset>
	<table align = "center">
				
					
					<tr>
						<td>Launch Number: </td>
						<td><input type="text" name="launchno" value="<?php echo $launchno;?>" placeholder="Launch Number"></td>
						<td><span><?php echo $err_launchno;?></span></td>
						
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
							<input type="checkbox" value="BNS Padma (P312)" <?php if(nameoflaunchExist("BNS Padma (P312)")) echo "checked";?>  name="nameoflaunchs[]"> BNS Padma (P312)<br>
							<input type="checkbox" value="BNS Aparajeya (P261)" <?php if(nameoflaunchExist("BNS Aparajeya (P261)")) echo "checked";?> name="nameoflaunchs[]"> BNS Aparajeya (P261)<br>
							<input type="checkbox" value="BNS Surma (P313)" <?php if(nameoflaunchExist("BNS Surma (P313)")) echo "checked";?> name="nameoflaunchs[]"> BNS Surma (P313)<br>
							<input type="checkbox" value="BNS Adamya (P262)" <?php if(nameoflaunchExist("BNS Adamya (P262)")) echo "checked";?> name="nameoflaunchs[]"> BNS Adamya (P262)<br>
							
						</td>
						<td><span><?php echo $err_nameoflaunchs;?></span></td>
					</tr>
					
					<tr>
					<td>
					HelpLine number
					</td>
					<td>
					<input type="text" placeholder="HelpLine Number(optional)">

					</td>
					</tr>
					<tr>
						<td align="right" colspan="2"><input type="submit" value="Search"></td>
					</tr>
					
					
				</table>
			</form>
		</fieldset>
	</body>
</html>