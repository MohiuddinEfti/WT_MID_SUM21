


<html>
	<body><title>Launch Search</title>
	<fieldset><legend align="center"><h1>Launch Search</h1></legend>
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
			<p align="center">Return</p>
			<input type="submit" value="< Prev. Day">
			<input type="submit" value="Next Day>">
		</td>
	</tr>
	<tr>
		<td>
		Launch Type
		</td>
		<td>
		<select>
		<option disabled selected>Launch Type</option>
			<option>Delux Class</option>
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
		Your Desire Launch
		</td>
		<td>
		
					<input type="checkbox" value="BNS Padma (P312)">BNS Padma (P312)<br>
					<input type="checkbox" value="BNS Surma (P313)">BNS Surma (P313)<br>
							
		</td>
		<td>
					<input type="checkbox" value="BNS Aparajeya (P261)">BNS Aparajeya (P261)<br>
					<input type="checkbox" value="BNS Adamya (P262)">BNS Adamya (P262)<br>
					
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center">
			<input type="submit" value="Search">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center">
		<a href="..\Payment\Launch payment.php">Search</a>
		</td>
	</tr>
	</table>
	</fieldset>
	</form>
	</fieldset>
	</body>
</html> 