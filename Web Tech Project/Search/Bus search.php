


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
		<select>
		<option disabled selected>Bus Type</option>
			<option>AC</option>
			<option>NON AC</option>
		</select>

		</td>
	</tr>
	<tr>
		<td>
		Departure Time
		</td>
		<td>
		<select>
		    <option disabled selected>Departure Time</option>
			<option>Before 06:00 AM</option>
			<option>06:00 AM - 12:00 PM</option>
			<option>12:00 PM - 06:00 PM</option>
			<option>After 06:00 PM</option>
		</select>
		
		</td>
	</tr>
	<tr>
		<td>
		Arrival Time
		</td>
		<td>
		<select>
			<option disabled selected>Arrival Time</option>
			<option>Before 06:00 AM</option>
			<option>06:00 AM - 12:00 PM</option>
			<option>12:00 PM - 06:00 PM</option>
			<option>After 06:00 PM</option>
		</select>
		
		</td>
	</tr>
	<tr>
		<td>
		No. Of Seat
		</td>
		<td>
		<select>
			<option disabled selected>No. Of Seat</option>
			<?php
										for($i1=1;$i1<=10;$i1++)
										{
											echo "<option>$i1</option>";
										}
			?>
		</select>
		
		</td>
	</tr>
	<tr>
		<td>
		Your Desire Buses
		</td>
		<td>
					<input type="checkbox" value="Bikash Paribahan">Bikash Paribahan <br>
					<input type="checkbox" value="Kohinur Paribahan">Kohinur Paribahan	 <br>
					<input type="checkbox" value="S.I. Enterprise">S.I. Enterprise <br>
					<input type="checkbox" value="Bikash Paribahan">Bikash Paribahan <br>
					<input type="checkbox" value="Al Baraka Paribahan bd	">Al Baraka Paribahan bd<br>			
		</td>
		<td>
					<input type="checkbox" value="Al Mobarak Ltd	">Al Mobarak Ltd <br>
					<input type="checkbox" value="Jaker Enterprise">Jaker Enterprise <br>
					<input type="checkbox" value="Dhaka Express">Dhaka Express<br>
					<input type="checkbox" value="Dream Line	">Dream Line	<br>
					<input type="checkbox" value="Darsana Deluxe">Darsana Deluxe<br>
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