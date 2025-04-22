//variables y tipos de datos
<?php
echo"<br>";
$entero = 5;
$flotante = 10.14;
$cadena = "Kevin Chipana";
$booleano = true;
var_dump($entero ,$flotante ,$cadena ,$booleano);
echo "<br>";
echo $entero * 2;

echo"<br>";

//Operadores
echo "Operadores-----------------------";
echo"<br>";
$suma= 4+4;
$resta= 6-2;
$multi= 8*3;
$division= 16/2;
echo "Suma: 4+4= ". $suma;
echo"<br>";
echo "Resta: 6-2= ". $resta;
echo"<br>";
echo "Multiplicación: 8x3= ". $multi;
echo"<br>";
echo "División: 16:2= ". $division;
echo "<br>";


$num1 = 4;
$num2 = 1;
if($num1 < $num2){
echo $num1 . " es menor a " . $num2;
}
elseif ($num1 > $num2){
echo $num1 . " es mayor a " . $num2;
}
else {
echo "Los números son iguales";
}
echo "<br>";


$nombre = "Kevin";
$apellido = "Chipana";
echo $nombre . " " . $apellido;
echo "<br>";


echo "Estructuras de control------------------------- <br>";
$edad= 18;
if($edad >= 18){
echo "Es mayor de edad";
}
else{
echo"Es menor de edad";
}

echo "<br>";
for ($x = 0; $x <=20; $x++){
echo $x ;
}
echo "<br>";

$y = 0;
$z = 1;
while ($z < 50){
$y += $z;
$z++;
}
echo $y;
echo "<br>";

$nombres = array("Lautaro","Yasmin", "Kevin", "Gonzalo", "Ignacio", "Camila", "Jonatan", "Matias");
echo "<ul>";
foreach ($nombres as $n){
echo "<li>$n</li>";
echo "</ul>";
}

$dias = "2";
switch ($dias){
case "1";
	echo "Lunes";
break;
case "2";
	echo "Martes";
break;
case "3";
	echo "Miercoles";
break;
case "4";
	echo "Jueves";
break;
case "5";
	echo "Viernes";
case "6";
	echo "Sabado";
break;
case "7";
	echo "Domingo";
break;
default:
	echo "No se ingreso ningun día de la semana";
}
?>
