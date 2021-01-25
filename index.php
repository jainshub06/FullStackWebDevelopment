<html>
<head> <title>PHP</title> </head>
<body>
	<form method="post" action="index.php">
		Variable 1 <input type="text" name="var1"><br>
		Variable 2 <input type="text" name="var2"><br>
		<input type="submit" name="submit">
	</form>
	
</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
		$sum = $_POST['var1'] + $_POST['var2'];
		echo "sum is $sum";
	}
	else
		echo "No Input";
  ?>
