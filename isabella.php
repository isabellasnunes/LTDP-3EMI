<html>
	<head>
		<title> numeros pares </title>
	</head>
	<body>

<?php
for($i=0;$i<=40;$i++)

{
	$resto = $i % 2;
	if($resto=="0"){
	
	echo " numeros pares:".$i."<br>";
	
	}else if($resto=="1"){
		echo " numeros impar:".$i."<br>";
		}
}
?>
	</body>
</html>	