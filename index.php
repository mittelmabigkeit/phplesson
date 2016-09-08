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

?> 