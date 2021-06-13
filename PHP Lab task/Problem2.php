<html>
	<body>
		Problem 2

		<?php
			$marks=80;
			if($marks>='90')
			{
				echo"A+";
			}
			elseif($marks>='80'&&$marks<'90')
			{
				echo"A";
			}
			elseif($marks>='70'&&$marks<'80')
			{
				echo"B";
			}
			elseif($marks>='60'&&$marks<='70')
			{
				echo"C";
			}
			else
			{
				echo"The grade is F";
			}
		?>
	</body>	
</html>
