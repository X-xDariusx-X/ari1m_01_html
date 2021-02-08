<h1><center><u>Trabajo 1</u></center></h1>
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