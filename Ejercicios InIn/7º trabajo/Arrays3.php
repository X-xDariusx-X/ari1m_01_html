<h1><center><u>Trabajo 3</u></center></h1>
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
	'Mathew',
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

<div id="nombres"></div>
<div id="Turismo"></div>
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