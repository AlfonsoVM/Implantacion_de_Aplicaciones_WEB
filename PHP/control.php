<?php
echo "<br>----------if------------<br>";
$a = 4;
$b = 6;
if($a >$b)
{
    echo "Mayor";
}
else if ( $a < $b)
{
    echo "Menor";
}
else
{
    echo "Iguales";
}
echo "<br>----------while------------<br>";
$a = 10;
$i = 0;
while($i < $a)
{
    echo "<br> $i";
    $i++;
}
echo "<br>----------do while------------<br>";
do
{
    echo "<br>". $i;
    $i++;
} while($i < $a);
echo "<br>----------for------------<br>";
$x=2;
for($i=0;$i<5;$i++)
{
    $x *= $x;
    echo "<br>".$x;
}
echo "<br>----------foreach------------<br>";
// Para recorrer array y objetos.
$vector = array("a", "b", 4, 5);
foreach($vector as $valor)
{
    echo $valor . "<br>";
}
echo "clave-->valor<br>";
$c = array(
    '4' => "hola",
    '8' => "33",
    '9' => "abc",
    '14' => 45
);
foreach($c as $posicion => $valor)
{
    echo $posicion . "-->" . $valor. "<br>";
}
echo "<br>----------switch------------<br>";
$opcion = 2;
switch($opcion)
{
    case '1':
        echo "Opción 1 seleccionada.<br>";
    break;
    case '2':
        echo "Opción 2 seleccionada.<br>";
    break;
    default:
        echo "Opción por defecto.<br>";
    break;
}
?>