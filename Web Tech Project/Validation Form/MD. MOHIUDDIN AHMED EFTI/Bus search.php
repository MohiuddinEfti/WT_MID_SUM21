<?php
$bustype="";
$err_bustype="";

$dep="";
$err_dep="";

$arr="";
$err_arr="";

$noseat="";
$err_noseat="";

$bus=[];
$err_bus="";

$err=false;

$time = array("Before 06:00 AM","06:00 AM - 12:00 PM","12:00 PM - 06:00 PM","After 06:00 PM");

function bus($bus){
		global $bus;
		foreach($bus as $h){
			if($h == $bus){
				return true;
			}
		}
		return false;
	}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
		if (!isset($_POST["bustype"]))
		{
			
				$err_bustype="Select type";
					$err = true;
		}
		else
		{
			$bustype=$_POST["bustype"];
		}
		if(!isset($_POST["bus"]))
		{
			$err_bus="Please Select atleast one Bus";
			$err = true;
		}
		else
		{
			$bus = $_POST["bus"];
		}
		if (!isset($_POST["dep"]))
		{
			
				$err_dep="Select dep Time";
					$err = true;
		}
		else
		{
			$dep=$_POST["dep"];
		}
		
		if (!isset($_POST["arr"]))
		{
			
				$err_arr="Select Arrival Time";
					$err = true;
		}
		else
		{
			$arr=$_POST["arr"];
		}
		if (!isset($_POST["noseat"]))
		{
			
				$err_noseat="Select Number of seat";
					$err = true;
		}
		else
		{
			$arr=$_POST["arr"];
		}
		
		if (!isset($_POST["bus"]))
		{
			
				$err_bustypet="Select Desire Type";
					$err = true;
		}
		else
		{
			$bus=$_POST["bus"];
		}
		
		
		
		if(!$err)
		{
			echo $_POST["bustype"]."<br>";
			echo $_POST["dep"]."<br>";
			echo $_POST["arr"]."<br>";
			echo $_POST["noseat"]."<br>";
			
			$arr = $_POST["bus"];
			
			foreach($arr as $a){
				echo "$a <br>";
			}
		}
}


	
?>

<html>
	<body><title>Bus Search</title>
	<fieldset><legend align="center"><h1>Bus Search</h1></legend>
	<a href="..\HomePage.php">Go Back To Home</a>
	<form action="" method="post">
	<form border>
	<fieldset>
	<table align = "center">
	<tr>
		<td>
			<p align="center">Departure</p>
			<input type="submit" value="< Prev. Day">
			<input type="submit" value="Next Day>">
		</td>
		<td>
		</td>
		<td>
			<p align="center">Return (Optional)</p>
			<input type="submit" value="< Prev. Day">
			<input type="submit" value="Next Day>">
		</td>
	</tr>
	<tr>
		<td>
		Bus Type
		</td>
		<td>
		<select name="bustype">
		<option disabled selected>Bus Type</option>
			<option>AC</option>
			<option>Non AC</option>
		</select>
		</td>
		<td><span><?php echo $err_bustype;?></span></td>
	</tr>
	<tr>
		<td>
		Departure Time
		</td>
		<td>
		<select name="dep">
		    <option disabled selected>Departure Time</option>
			<?php
				foreach($time as $t)
				{
					if($time == $t)
					{
						echo "<option selected>$t</option>";
					}
					else
					{
						echo "<option>$t</option>";
					}
				}
			?>
		</select>
		</td>
		<td><span><?php echo $err_dep;?></span></td>
	</tr>
	<tr>
		<td>
		Arrival Time
		</td>
		<td>
		<select name="arr">
			<option disabled selected>Arrival Time</option>
			<?php
				foreach($time as $t)
				{
					if($time == $t)
					{
						echo "<option selected>$t</option>";
					}
					else
					{
						echo "<option>$t</option>";
					}
				}
			?>
		</select>
		</td>
		<td><span><?php echo $err_arr;?></span></td>
	</tr>
	<tr>
		<td>
		No. Of Seat
		</td>
		<td>
		<select name="noseat">
			<option disabled selected>No. Of Seat</option>
			<?php
				for($i=1;$i<=10;$i++)
				{
					echo "<option>$i</option>";
				}
			?>
		</select>
		
		</td>
		<td><span><?php echo $err_noseat;?></span></td>
	</tr>
	<tr>
		<td>
		Your Desire Buses
		</td>
		<td>
			<input type="checkbox" value="Bikash Paribahan" <?php if(bus("Bikash Paribahan")) echo "checked";?>  name="bus[]">Bikash Paribahan<br>
			<input type="checkbox" value="Kohinur Paribahan" <?php if(bus("Kohinur Paribahan")) echo "checked";?>  name="bus[]">Kohinur Paribahan<br>
			<input type="checkbox" value="S.I. Enterprise" <?php if(bus("S.I. Enterprise")) echo "checked";?>  name="bus[]">S.I. Enterprise<br>
			<input type="checkbox" value="Bikash Paribahan" <?php if(bus("Bikash Paribahan")) echo "checked";?>  name="bus[]">Bikash Paribahan<br>
			<input type="checkbox" value="Al Baraka Paribahan bd" <?php if(bus("Al Baraka Paribahan bd")) echo "checked";?>  name="bus[]">Al Baraka Paribahan bd<br>
			<input type="checkbox" value="Al Mobarak Ltd" <?php if(bus("Al Mobarak Ltd")) echo "checked";?>  name="bus[]">Al Mobarak Ltd<br>
			<input type="checkbox" value="Jaker Enterprise" <?php if(bus("Jaker Enterprise")) echo "checked";?>  name="bus[]">Jaker Enterprise<br>
			<input type="checkbox" value="Dhaka Express" <?php if(bus("Dhaka Express")) echo "checked";?>  name="bus[]">Dhaka Express<br>
			<input type="checkbox" value="Darsana Deluxe" <?php if(bus("Darsana Deluxe")) echo "checked";?>  name="bus[]">Darsana Deluxe<br>
			<input type="checkbox" value="Dream Line" <?php if(bus("Dream Line")) echo "checked";?>  name="bus[]">Dream Line<br>
		</td>
		<td>
			<span><?php echo $err_bus;?></span>
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center">
			<input type="submit" value="Search">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center">
		<a href="..\Payment\Bus payment.php">Search</a>
		</td>
	</tr>
	</table>
	</fieldset>
	</form>
	</fieldset>
	</body>
</html>