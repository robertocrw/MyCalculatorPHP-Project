<DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <style>
      
         #entrada { width: 197px; height: 45px; margin: 2px; margin-left: 3px;}
         #numeros {margin: 2px; margin-left: 3px; height: 45px; width: 45px; background: green; color: white; }
         #botao {margin: 1px; margin-left: 0px; height: 45px; width: 45px; background: green; color: white; }
      
    </style>
</head>

<body>
<div>    
	<form method="post" action="unica-entrada.html" name="formu">
		<!--Entrada e Submite-->
		<input id="entrada" type="text" name="entrada" readonly="readonly" />
		
		<table>
             <tr>
             	 <td><input id="botao" type="button" value="C" onClick="entrada.value=''"></td>
             	 <td><input id="botao" type="button" value="√" onClick="entrada.value+='√'"></td>
             	 <td><input id="botao" type="button" value="%" onClick="entrada.value+='%'"></td>
             	 <td><input id="botao" type="button" value="/" onClick="entrada.value+='/'"></td>
             </tr>
		</table>
	 
	<?php 
     for ($i=9; $i>=1; $i--) 
     {    
        echo "<input id='numeros' type='button' value='$i' onClick=entrada.value+='$i'>";
    	if ($i% 3 == 1) 
         {
    		echo "<br/>";
    	 }
     }
    ?>
	    <table>
             <tr>
             	 <td><input id="botao" type="button" value="0" onClick="entrada.value+='0'"></td>
             	 <td><input id="botao" type="button" value="." onClick="entrada.value+='.'"></td>
             	 <td><input id="botao" type="button" value="=" onClick="entrada.value=eval(entrada.value)"></td>
             	 <td><input id="botao" type="button" value="+" onClick="entrada.value+='+'"></td>
             </tr>
		</table>
    </form>
</div>    
</body>
</html>