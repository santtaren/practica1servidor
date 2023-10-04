<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
	echo "<b>Ejercicio 1: Crear un archivo php para ejecutar en nuestro servidor XAMPP que muestre por pantalla lo siguiente:</b><br>";
	$var1 = "Hola";
	$var2 = "Mundo";
 	$concatenacion = $var1 . " " . $var2;
 	echo "<b>a)</b> " . $concatenacion;
 	echo "<br>";
 	$flag = true;
 	echo "<b>b)</b> " . $flag;

 	echo "<br>";
 	$real = 3.14;
 	echo "<b>c)</b> ";
 	echo $real;
 	echo "<br>";

 	$vector = array(
    'valor1' => 1,
    'valor2' => 2,
    'valor3' => 3);
    echo "<b>d)</b> ";
    print_r($vector);


 	echo "<br><br><br>";
 	echo "<b>Ejercicio 2: Cambia la variable de tipo boolean a valor “false”. Muestra el resultado
     obtenido al ejecutarlo con el servidor. </b><br>";
 	$flag = false;
 	echo $flag; //no va a mostrar nada porque el valor false corresponde al valor null en php. Un echo a este valor no aparece en pantalla. 
 	echo "<br> El valor false de un boolean corresponde al valor null en php. Un echo a este valor no aparece en pantalla.";

 	echo "<br><br><br>";
 	echo "<b>Ejercicio 3: Elimina los espacios de la variable concatenada utilizando la función
     correspondiente.</b><br>";
 	$nuevo = str_replace(' ', '', $concatenacion);
 	echo $nuevo;

 	echo "<br><br><br>";
 	echo "<b>Ejercicio 4: Muestra por pantalla el siguiente mensaje:</b><br>";
 	$cadena = "El operador \"+\" sirve para sumar el valor de variables. Con la \"/\"podemos 
	dividir valores entre variables. El símbolo del dólar \"\$\" indica que estamos 
	utilizando variables pero no lo usaremos en las constantes o globales.";
	echo $cadena;

	echo "<br><br><br>";
	echo "<b>Ejercicio 5: Almacena la cadena anterior en una variable y usa la función
    correspondiente para indicar la longitud de la cadena.</b><br>";
	echo "La longitud de la cade anterior es " . strlen($cadena);

	echo "<br><br><br>";
	echo "<b>Ejercicio 6: Utiliza la función correspondiente para eliminar las vocales en la frase
    “Hello World”.</b><br>";
	$vocales = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
	$soloconsonantes = str_replace($vocales, "", $concatenacion);
	echo $soloconsonantes;

	echo "<br><br><br>";
	echo "<b>Ejercicio 7: Crea una variable sin contenido y usa la función correspondiente para
    comprobar si está vacía. </b><br>";
	$vacia = null;
	echo is_null($vacia) . "<br> Esta sentencia devuelve \"1\" ya que es de tipo boolean y este valor significa true."; // Esta sentencia devuelve "1" ya que es de tipo boolean y el valor "1" significa true.

	echo "<br><br><br>";
	echo "<b>Ejercicio 8: Convierte la variable que contiene la frase “Hello World” y conviértela en
    entero.</b><br>";
	echo intval($concatenacion) . "<br> Función que devuelve el valor entero de var en caso de éxito, o 0 en caso de error. Por eso ahora da 0."; //El valor entero de var en caso de éxito, o 0 en caso de error. En este caso es error por eso obtenemos un 0.

	echo "<br><br><br>";
	echo "<b>Ejercicio 9: Crea programas que calcule lo siguiente: </b><br>";
	echo "<b>a)</b> " . sqrt(144);

	echo "<br>";

	echo "<b>b)</b> " . pow(2, 8);

	echo "<br>";

	echo "<b>c)</b> " . 100%6;

	echo "<br>";

	function MCD($num1, $num2){
		if ($num1 == 0) {
			return $num2;
		}
		return MCD($num2%$num1, $num1);

	} //Función recursiva. Euclides.

	echo "<b>d)</b> " . "Maximo común divisor: " . MCD(3,6);
    
    echo "<br>";
    ?>
</body>
</html>