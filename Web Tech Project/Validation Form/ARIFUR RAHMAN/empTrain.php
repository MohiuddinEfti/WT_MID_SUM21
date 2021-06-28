<?php
	
		
	$trainno="";
	$err_trainno="";
	
	$deptime="";
	$err_deptime="";
	
	$arrtime="";
	$err_arrtime="";
	
	
	$nameoftrains=[];
	$err_nameoftrains="";
	
	
	
	
	
	$hasError=false;
	
	$departuretimes = array("Before 06:00 AM","06:00 AM - 12:00 PM","12:00 PM - 06:00 PM","After 06:00 PM");
	
	$arrivaltimes = array("Before 06:00 AM","06:00 AM - 12:00 PM","12:00 PM - 06:00 PM","After 06:00 PM");


	function nameoftrainExist($nameoftrain){
		global $nameoftrains;
		foreach($nameoftrains as $n){
			if($n == $nameoftrain){
				return true;
			}
		}
		return false;
	}

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["trainno"])){
			$err_trainno="Train Number Required * ";
			$hasError = true;
		}
		else if(strlen($_POST["trainno"]) <=2){
			$err_trainno="Name Must be greater than 2";
			$hasError = true;
		}
		else{
			$trainno=$_POST["trainno"];
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
		
		if(!isset($_POST["nameoftrains"])){
			$err_nameoftrains="Name Of Train Required *";
			$hasError = true;
		}
		else{
			$nameoftrains = $_POST["nameoftrains"];
		}
		

		
		if(!$hasError){
			
			
			echo $trainno."<br>";

			echo $_POST["departuretime"]."<br>";
			
			echo $_POST["arrivaltime"]."<br>";

			$arr = $_POST["nameoftrains"];
			
			foreach($arr as $e){
				echo "$e <br>";
			}

		}
		
		
		
	}
?>
<html>
	<body><title>Train</title>
	<fieldset><legend align="center"><h1>Train</h1></legend>
		<a href="..\Employee.php">Go Back</a>
	<form action="" method="post">
	<form border>
	<fieldset>
	<table align = "center">
				
					
					<tr>
						<td>Train Number: </td>
						<td><input type="text" name="trainno" value="<?php echo $trainno;?>" placeholder="Train Number"></td>
						<td><span><?php echo $err_trainno;?></span></td>
						
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
							<input type="checkbox" value="Ekota Express" <?php if(nameoftrainExist("Ekota Express")) echo "checked";?>  name="nameoftrains[]"> Ekota Express<br>
							<input type="checkbox" value="Tista Express" <?php if(nameoftrainExist("Tista Express")) echo "checked";?> name="nameoftrains[]"> Tista Express<br>
							<input type="checkbox" value="Parabat Express" <?php if(nameoftrainExist("Parabat Express")) echo "checked";?> name="nameoftrains[]"> Parabat Express<br>
							<input type="checkbox" value="Upakul Express" <?php if(nameoftrainExist("Upakul Express")) echo "checked";?> name="nameoftrains[]"> Upakul Express<br>
							
						</td>
						<td><span><?php echo $err_nameoftrains;?></span></td>
					</tr>
					
					<tr>
					<td>
					Train 's HelpLine number
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