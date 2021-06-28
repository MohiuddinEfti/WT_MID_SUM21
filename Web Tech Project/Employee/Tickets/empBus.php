<?php
	
		
	$bno="";
	$err_bno="";
	
	$deptime="";
	$err_deptime="";
	
	$arrtime="";
	$err_arrtime="";
	
	
	$nameofbuses=[];
	$err_nameofbuses="";
	
	$bustype="";
	$err_bustype="";
	
	
	$num="";
	$err_num="";
	
	
	
	
	$hasError=false;
	
	$busnumbers = array("Dh metro 123","Dh metro 345","Dh metro 678","Dh metro 910","Dh metro 111","Dh metro 213");
	$departuretimes = array("Before 06:00 AM","06:00 AM - 12:00 PM","12:00 PM - 06:00 PM","After 06:00 PM");
	
	$arrivaltimes = array("Before 06:00 AM","06:00 AM - 12:00 PM","12:00 PM - 06:00 PM","After 06:00 PM");


	function nameofbusExist($nameofbus){
		global $nameofbuses;
		foreach($nameofbuses as $n){
			if($n == $nameofbus){
				return true;
			}
		}
		return false;
	}

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(!isset($_POST["busnumber"])){
			$err_bno = "Bus Name Required * ";
			$hasError = true;
		}
		else{
			$bno = $_POST["busnumber"];
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
		
		if(!isset($_POST["nameofbuses"])){
			$err_nameofbuses="Name Of Buses Required *";
			$hasError = true;
		}
		else{
			$nameofbuses = $_POST["nameofbuses"];
		}
		if(!isset($_POST["bustype"])){
			$err_bustype="Bus Type Required * ";
			$hasError = true;
		}
		else{
			$bustype = $_POST["bustype"];
		}
			
			if(!is_numeric($_POST["num"]))
			{
				$err_num="ID should be numeric *";
			}
			else $num=$_POST["num"];

		
		if(!$hasError){
		
			echo $_POST["busnumber"]."<br>";
			echo $_POST["departuretime"]."<br>";
			
			echo $_POST["arrivaltime"]."<br>";

			$arr = $_POST["nameofbuses"];
			
			foreach($arr as $e){
				echo "$e <br>";
			}
			echo $_POST["bustype"]."<br>";
			
			echo $_POST["num"]."<br>";
		
		
		}
		
		
		
	}
?>
<html>
	<body><title>Bus</title>
	<fieldset><legend align="center"><h1>Bus</h1></legend>
		<a href="..\Employee.php">Go Back</a>
	<form action="" method="post">
	<form border>
	<fieldset>
	<table align = "center">
				
					
					<tr>
						<td>Bus Number:  </td>
						<td>
							<select name="busnumber">
								<option selected disabled>--Select--</option>
								<?php
									foreach($busnumbers as $bn){
										if($bno == $bn)
											echo "<option selected>$bn</option>";
										else
											echo "<option>$bn</option>";
									}
								?>
							</select> 
						</td>
						<td><span><?php echo $err_bno;?></span></td>
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
							<input type="checkbox" value="Bikash Paribahan" <?php if(nameofbusExist("Bikash Paribahan")) echo "checked";?>  name="nameofbuses[]"> Bikash Paribahan<br>
							<input type="checkbox" value="Kohinur Paribahan" <?php if(nameofbusExist("Kohinur Paribahan")) echo "checked";?> name="nameofbuses[]"> Kohinur Paribahan<br>
							<input type="checkbox" value="S.I. Enterprise" <?php if(nameofbusExist("S.I. Enterprise")) echo "checked";?> name="nameofbuses[]"> S.I. Enterprise<br>
							<input type="checkbox" value="Al Mobarak Ltd" <?php if(nameofbusExist("Al Mobarak Ltd")) echo "checked";?> name="nameofbuses[]"> Al Mobarak Ltd<br>
							<input type="checkbox" value="Jaker Enterprise" <?php if(nameofbusExist("Jaker Enterprise")) echo "checked";?> name="nameofbuses[]"> Jaker Enterprise<br>
							<input type="checkbox" value="Dhaka Express" <?php if(nameofbusExist("Dhaka Express")) echo "checked";?> name="nameofbuses[]"> Dhaka Express<br>
							<input type="checkbox" value="Dream Line" <?php if(nameofbusExist("Dream Line")) echo "checked";?> name="nameofbuses[]"> Dream Line<br>

						</td>
						<td><span><?php echo $err_nameofbuses;?></span></td>
					</tr>
					<tr>
						<td>Bus Type: </td>
						<td><input type="radio" value="AC" <?php if($bustype == "AC") echo "checked";?> name="bustype"> AC <input <?php if($bustype == "Non_AC") echo "checked";?> name="bustype"  value="Non_AC" type="radio">Non-AC</td>
						<td><span><?php echo $err_bustype;?></span></td>
					</tr>
					<tr>
					<td><span>Driver's Id </span></td>
					<td><input type="text" name="num" value="<?php echo $num;?>" placeholder = "ID" size="10"> </td><td><span><?php echo $err_num;?></span></td>
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