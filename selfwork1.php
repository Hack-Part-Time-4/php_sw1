<?php
//ejercicio 1
$a=2;
$b=5;
$suma=$a+$b;
$resta=$a-$b;
$multiplicacion=$a*$b;
$division=$b/$a;

print_r($suma);
echo "\n";
print_r($resta);
echo "\n";
print_r($multiplicacion);
echo "\n";
print_r($division);
echo "\n";
echo "\n";

//ejercicio 2
$array=[1, 3, 5, 7];
echo "Valor de array: ".$array[1]."\n";
echo "\n";


//ejercicio 3
$miArray=[];
$miArray[0]=["a","b","c"];
$miArray[1]=[1,3,5];
$miArray[2]=[2,4,6];
print_r($miArray);
echo "\nElemento del array de arrays: ".$miArray[0][2];