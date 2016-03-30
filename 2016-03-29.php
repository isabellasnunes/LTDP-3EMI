<html>
	<head>
		<title> numeros pares </title>
	</head>
	<body>

<?php
for($i=0;$i<=400000000000;$i++)

{
	$resto = $i % 2;
	if($resto=="0")
	{
		echo "pares:".$i."<br>";
	}
}
?>
	</body>
</html>	