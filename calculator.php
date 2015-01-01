<DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" action="unica-entrada.html" name="formu">
		<!--Entrada e Submite-->
		<input type="text" name="entrada" readonly="readonly" />
		
		<table>
             <tr>
             	<td><input id="botao" type="button" value="C"></td>
             	<td><input id="botao" type="button" value="√"></td>
             	<td><input id="botao" type="button" value="%"></td>
             	<td><input id="botao" type="button" value="/"></td>
             </tr>
		</table>
	</form> 
	<?php 
    for ($i=1; $i<=9; $i++) 
    {
    	echo "<input type='button' value='$i'>";
    	if ($i%3 ==0) {
    		echo "<br/>";
    	}
    }
	?>
	    <table>
             <tr>
             	<td><input id="botao" type="button" value="0"></td>
             	<td><input id="botao" type="button" value="."></td>
             	<td><input id="botao" type="button" value="="></td>
             	<td><input id="botao" type="button" value="+"></td>
             </tr>
		</table>
</body>
</html>