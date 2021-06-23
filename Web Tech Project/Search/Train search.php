


<html>
	<body><title>Train Search</title>
	<fieldset><legend align="center"><h1>Train Search</h1></legend>
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
		Train Type
		</td>
		<td>
		<select>
		<option disabled selected>Train Type</option>
			
			<option>1st Class</option>
			<option>2nd Class</option>
			<option>3rd Class</option>
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
		Your Desire Train
		</td>
		<td>
		
					<input type="checkbox" value="Ekota Express">Ekota Express<br>
					<input type="checkbox" value="Tista Express">Tista Express<br>
							
		</td>
		<td>
					<input type="checkbox" value="Parabat Express">Parabat Express<br>
					<input type="checkbox" value="Upakul Express">Upakul Express<br>
					
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center">
			<input type="submit" value="Search">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center">
		<a href="..\Payment\Train payment.php">Search</a>
		</td>
	</tr>
	</table>
	</fieldset>
	</form>
	</fieldset>
	</body>
</html> 