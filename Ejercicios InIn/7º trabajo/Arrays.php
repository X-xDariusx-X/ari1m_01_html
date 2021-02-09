<h1><center><u>Trabajo 2</u></center></h1>
<h3><center>Ordena alfabéticamente a tus compañeros por su nombre de pila y muestra al que ocupe el quinto lugar en la lista: </center></h3>
<center>
<?php
$nombres = array("Andrei",
					"Fabi",
					"Héctor",
					"Gabi",
					"Nury",
					"Agus",
					"Mathew",
					"Dani",
					"Isma",
					"Pepe",
					"Sañudo",
					"Rodras",
					"Tresgo",
					"Fonso",
					"Darius",
					"Ivi",
					"Teje");
//Ordenados alfabeticamente
sort($nombres);
echo $nombres[5-1];
?>
</center>

<div style="text-align:center" id="r"></div>
<script>
	nombres =["Andrei",
				"Fabi",
				"Héctor",
				"Gabi",
				"Nury",
				"Agus",
				"Mathew",
				"Dani",
				"Isma",
				"Pepe",
				"Sañudo",
				"Rodras",
				"Tresgo",
				"Fonso",
				"Darius",
				"Ivi",
				"Teje",];
			nombres.sort();
			document.getElementById('r').innerHTML =nombres[5-1];
</script>