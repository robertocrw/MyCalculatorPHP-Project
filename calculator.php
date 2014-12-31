<DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" action="unica-entrada.html" name="formu">
		<input type="text" name="entrada" readonly="readonly" />
		<input type="submit" value="Testa"  />
	</form> 
	<?php 
    for ($i=0; $i<=9; $i++) {
    	echo "<input type='button' value='$i'>";
    }
	?>
</body>
</html>