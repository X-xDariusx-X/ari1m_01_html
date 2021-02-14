<body style="background-color:#F1F19C;">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maxium-scale=2">
</head>
<h1><center><u>ARRAYS Y CONTROL</u></center></h1>
<h2><center><u>Trabajo 1</u></center></h2>
<h3><center>Crea un desplegable con los nombres de tus compañeros y, como resultado de la selección, obtendrás en qué puesto se sienta:</center></h3>
<center>
	<?php
		if(!isset($_GET["nombres"]))
			$_GET["nombres"]=1;
		$nombres =["Andrei",
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
					"Teje"];
		$puesto =["1",
					"2",
					"3",
					"4",
					"5",
					"6",
					"7",
					"8",
					"9",
					"10",
					"11",
					"12",
					"13",
					"14",
					"15",
					"16",
					"17"];
	?>
	<form>
		<button>Enviar</button>
		<select name="nombres">
		<?php
			foreach ($nombres as $i=>$n)
			echo '<option value="'.$puesto[$i].'" '
			.($_GET['nombres']==$puesto[$i]?'selected':'')
			.'>'
			.$n
			.'</option>';
		?>
		</select>
	</form>
		<?php
			echo $_GET['nombres'];
		?>
</center>
</br>

<div style="text-align:center" id="puesto"></div>
<div style="text-align:center" id="dato"></div>
<script type="text/javascript">
function lee_dato(){
dato = document.getElementById("nombres").value;
console.log(dato);
document.getElementById("dato").innerHTML =dato;
}
</script>


<h2><center><u>Trabajo 2</u></center></h2>
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
</br>

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
</br>

<h2><center><u>Trabajo 3</u></center></h2>
<h3><center>Crea un array de compañeros, otro de destinos turísticos y asígnalos aleatoriamente mostrando el resultado: </center></h3>
<center>
	<?php
	$nombres = [
		'Andrei',
		'Fabián',
		'Héctor',
		'Gabi',
		'Nury',
		'Agustina',
		'Matheu',
		'Dani',
		'Ismael',
		'Pepe',
		'Javier',
		'Rodras',
		'Tregallo',
		'Alfonso',
		'Darius',
		'Ivan',
		'Tejería',
	];
	$Turismo = [
		'Cantabria',
		'Madrid',
		'Barcelona',
		'Malaga',
		'Sevilla',
		'Valencia',
		'Burgos',
		'Alicante',
		'Toledo',
		'Pontevedra',
		'Valladolid',
		'Murcia',
		'Salamanca',
		'La Rioja',
		'Badajoz',
		'Asturias',
		'Islas Baleares',
	];
	//Nombres
	echo "Nombres aleatorios: <br>";
	echo $nombres[rand(0,15)];
	echo "<br>";
	echo "<br>";

	//Sitio turistico random
	echo "Sitio turistico random: <br>";
	echo $Turismo[rand(0,16)];
	?>
</center>
</br>
</br>

<div style="text-align:center" id="nombres"></div>
<div style="text-align:center" id="Turismo"></div>
<script>
	nombres = [
		'Andrei',
		'Fabián',
		'Héctor',
		'Gabi',
		'Nury',
		'Agustina',
		'Matheu',
		'Dani',
		'Ismael',
		'Pepe',
		'Javier',
		'Rodras',
		'Tregallo',
		'Alfonso',
		'Darius',
		'Ivan',
		'Tejería',
	];
	Turismo = [
		'Cantabria',
		'Madrid',
		'Barcelona',
		'Malaga',
		'Sevilla',
		'Valencia',
		'Burgos',
		'Alicante',
		'Toledo',
		'Pontevedra',
		'Valladolid',
		'Murcia',
		'Salamanca',
		'La Rioja',
		'Badajoz',
		'Asturias',
		'Islas Baleares',
	];
	n=Math.random()*(nombres.length -1);
	n=Math.round(n);
	console.log(n);
	document.getElementById('nombres').innerHTML =nombres[n];
	t=Math.random()*(Turismo.length -1);
	t=Math.round(t);
	console.log(t);
	document.getElementById('Turismo').innerHTML =Turismo[t];
</script>