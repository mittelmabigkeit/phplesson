<meta charset="Utf-8">
<?php
$example=33;
    echo $example;
    echo "</br>";
 if (is_integer($example))
    echo "yes";
    echo "</br>";
 if (isset($example))
    echo "yes";
    echo "</br>";
 if (is_double($example))
    echo "yes";
    echo "</br>";
$taptap="тест";
    echo $taptap;
    echo "</br>";
 if (isset($taptap)) {
    echo "yes";
    }
    else  {
       echo "</br>";
       echo "no";
       }
       echo "</br>";
$MyArray=array(
         1 => "a",
         2 => "b",
         3 => "c",
         4 => "d",
	);
echo "<pre>";
print_r($MyArray);
       echo "</br>";
var_dump($MyArray);
       echo "</br>";
var_export($MyArray);
       echo "</br>";
       echo "</pre>";

define("PI","3,14",true);
       echo PI;
       echo "</br>";

       echo "</br>";
       echo __FILE__;
       echo "</br>";
       echo __LINE__;
       echo "</br>";
       echo PHP_VERSION;
       echo "</br>";

       echo "</br>";
$WhatIs="Пример";
unset($WhatIs);
       echo $WhatIs;
       echo "</br>";       

       echo "</br>";
$WhatIsThat="Test";
$Random=43;
$Result=$WhatIsThat.$Random;

if (is_integer($Result)) {
echo "yes";
}
else {
echo "no";
}
echo "</br>"; 
if (is_string($Result)) {
echo "yes";
}
else {
echo "no";
}
echo "</br>";    
if (is_double($Result)) {
echo "yes";
}
else {
echo "no";
}
echo "</br>";    
if (is_bool($Result)) {
echo "yes";
}
else {
echo "no";
}
echo "</br>";    
if (is_array($Result)) {
echo "yes";
}
else {
echo "no";
}
echo "</br>";
if (is_scalar($Result)) {
echo "yes";
}
else {
echo "no";
}
echo "</br>";
if (is_object($Result)) {
echo "yes";
}
else {
echo "no";
}
echo "</br>";
if (is_numeric($Result)) {
echo "yes";
}
else {
echo "no";
echo "</br>";

echo "</br>";
$varone="73";
$vartwo="27";
$results=$varone+$vartwo;
echo $results;
}                      
?> 