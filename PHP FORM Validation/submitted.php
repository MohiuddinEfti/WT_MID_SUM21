<html>
	<body>
		<h1>Form submitted</h1>
		<?php
			echo $_POST["name"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["phone"]."<br>";
			echo $_POST["address"]."<br>";
			echo $_POST["day"]." "echo $_POST["month"]." "echo $_POST["month"]."<br>";";
			echo $_POST["gender"]."<br>";
			
			
			
			$arr = $_POST["hear"];
			
			foreach($arr as $e){
				echo "$e <br>";
			}
			echo $_POST["bio"]."<br>";
		?>
	</body>
</html>