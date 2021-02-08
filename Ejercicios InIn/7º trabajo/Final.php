<h1><u> Primer Ejercicio </u></h1>
<h2> Halla el área de un rectángulo cuya diagonal mide 10 cm y uno de sus lados 6 cm</h2> 
<form>
	Diagonal <input id="j" name="j" value="10" placeholder="diagonal" onkeyup="calcular()" />
	Lado <input id="k" name="k" value="6" placeholder="lado" onkeyup="calcular()"/>
	<button onclick="calcular()"> Calcular </button>
</form>
<div id="l" style="
	padding:15px;
	background-color:green;
	">
	Resultado
</div>
<script>

	function calcular(){
		j=document.getElementById("j").value;
		k=document.getElementById("k").value;
		m=(j*j)-(k*k);
		l=k*m/8;
		document.getElementById('l').innerHTML= l +' cm^2';
		}calcular();
</script>
<?php
	if(isset($_GET)) print_r($_GET);
?>
<h1><u> Segundo Ejercicio </u><h1/>
<h2> El lado de un rombo mide 10 cm y su diagonal menor 12 cm. Halla su área </h2>
<form>
	Diagonal <input id="f" name="f" value="12" placeholder="diagonal" onkeyup="calcular()" />
	Lado <input id="g" name="g" value="10" placeholder="lado" onkeyup="calcular()"/>
	<button onclick="calcular()"> Calcular </button>
</form>
<div id="h" style="
	padding:15px;
	background-color:cyan;
	">
	Resultado
</div>
<script>

	function calcular(){
		f=document.getElementById("f").value;
		g=document.getElementById("g").value;
		i=16*12/2;
		h=i;
		document.getElementById('h').innerHTML= h +' cm^2';
		}calcular();
</script>
<?php
	if(isset($_GET)) print_r($_GET);
?>
<h1><u> Tercer Ejercicio </u><h1/>
<h2> En un corral hay conejos y gallinas. Si contamos las cabezas hay 30, si contamos las patas hay 84. ¿Cuántos conejos y cuántas gallinas hay? </h2>
<form>
	Cabezas <input id="a" name="a"  value="30" placeholder="cabezas" onkeyup="calcular()" />
	Patas <input id="b" name="b" value="84" placeholder="patas" onkeyup="calcular()"/>
	<button onclick="calcular()"> Calcular </button>
</form>
<div id="c" style="
	padding:15px;
	background-color:grey;
	">
	Resultado
</div>
<div id="d" style="
	padding:15px;
	background-color:grey;
	">
	Resultado
</div>
<script>

	function calcular(){
		a=document.getElementById("a").value;
		b=document.getElementById("b").value;
		d=(b-(2*a))/2;
		c=a-d;
		document.getElementById('d').innerHTML= d +' Conejos';
		document.getElementById('c').innerHTML= c +' Gallinas';
		}calcular();
</script>
<?php
	if(isset($_GET)) print_r($_GET);
?>