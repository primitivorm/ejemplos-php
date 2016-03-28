<?php

$b = true;
$c = 'c';
$i = 1;
$d = 10.05;
$s = "hola";

echo "------------------------------\n";
echo "suma\n";
echo "------------------------------\n";
echo 'true + true = ' . ($b + $b); #2
echo "\n";
echo 'true + c = ' . ($b + $c); #1
echo "\n";
echo 'true + 1 = ' . ($b + $i); #2
echo "\n";
echo 'true + 10.05 = ' . ($b + $d); #11.05
echo "\n";
echo 'true + hola = ' . ($b + $s); #1
echo "\n";
echo 'c + true = ' . ($c + $b); #1
echo "\n";
echo 'c + c = ' . ($c + $c); #0
echo "\n";
echo 'c + 1 = ' . ($c + $i); #1
echo "\n";
echo 'c + 10.05 = ' . ($c + $d); #10.05
echo "\n";
echo 'c + hola = ' . ($c + $s); #0
echo "\n";
echo '10.05 + true = ' . ($d + $b); #11.05
echo "\n";
echo '10.05 + c = ' . ($d + $c); #10.05
echo "\n";
echo '10.05 + 1 = ' . ($d + $i); #11.05
echo "\n";
echo '10.05 + 10.05 = ' . ($d + $d); #20.1
echo "\n";
echo '10.05 + hola = ' . ($d + $s); #10.05
echo "\n";
echo 'hola + true = ' . ($d + $b); #11.05
echo "\n";
echo 'hola + c = ' . ($s + $c); #0
echo "\n";
echo 'hola + 1 = ' . ($s + $i); #1
echo "\n";
echo 'hola + 10.05 = ' . ($s + $d); #10.05
echo "\n";
echo 'hola + hola = ' . ($s + $s); #0
echo "\n";

echo "------------------------------\n";
echo "resta\n";
echo "------------------------------\n";
echo 'true - true = ' . ($b - $b); #0
echo "\n";
echo 'true - c = ' . ($b - $c); #1
echo "\n";
echo 'true - 1 = ' . ($b - $i); #0
echo "\n";
echo 'true - 10.05 = ' . ($b - $d); #-9.05
echo "\n";
echo 'true - hola = ' . ($b - $s); #1
echo "\n";
echo 'c - true = ' . ($c - $b); #1
echo "\n";
echo 'c - c = ' . ($c - $c); #0
echo "\n";
echo 'c - 1 = ' . ($c - $i); #1
echo "\n";
echo 'c - 10.05 = ' . ($c - $d); #10.05
echo "\n";
echo 'c - hola = ' . ($c - $s); #0
echo "\n";
echo '10.05 - true = ' . ($d - $b); #9.05
echo "\n";
echo '10.05 - c = ' . ($d - $c); #10.05
echo "\n";
echo '10.05 - 1 = ' . ($d - $i); #9.05
echo "\n";
echo '10.05 - 10.05 = ' . ($d - $d); #0
echo "\n";
echo '10.05 - hola = ' . ($d - $s); #10.05
echo "\n";
echo 'hola - true = ' . ($d - $b); #9.05
echo "\n";
echo 'hola - c = ' . ($s - $c); #0
echo "\n";
echo 'hola - 1 = ' . ($s - $i); #1
echo "\n";
echo 'hola - 10.05 = ' . ($s - $d); #10.05
echo "\n";
echo 'hola - hola = ' . ($s - $s); #0
echo "\n";

echo "------------------------------\n";
echo "multiplicacion\n";
echo "------------------------------\n";
echo 'true * true = ' . ($b * $b); #1
echo "\n";
echo 'true * c = ' . ($b * $c); #0
echo "\n";
echo 'true * 1 = ' . ($b * $i); #1
echo "\n";
echo 'true * 10.05 = ' . ($b * $d); #10.05
echo "\n";
echo 'true * hola = ' . ($b * $s); #0
echo "\n";
echo 'c * true = ' . ($c * $b); #0
echo "\n";
echo 'c * c = ' . ($c * $c); #0
echo "\n";
echo 'c * 1 = ' . ($c * $i); #0
echo "\n";
echo 'c * 10.05 = ' . ($c * $d); #0
echo "\n";
echo 'c * hola = ' . ($c * $s); #0
echo "\n";
echo '10.05 * true = ' . ($d * $b); #10.05
echo "\n";
echo '10.05 * c = ' . ($d * $c); #0
echo "\n";
echo '10.05 * 1 = ' . ($d * $i); #10.05
echo "\n";
echo '10.05 * 10.05 = ' . ($d * $d); #101.0025
echo "\n";
echo '10.05 * hola = ' . ($d * $s); #0
echo "\n";
echo 'hola * true = ' . ($d * $b); #10.05
echo "\n";
echo 'hola * c = ' . ($s * $c); #0
echo "\n";
echo 'hola * 1 = ' . ($s * $i); #0
echo "\n";
echo 'hola * 10.05 = ' . ($s * $d); #0
echo "\n";
echo 'hola * hola = ' . ($s * $s); #0
echo "\n";

echo "------------------------------\n";
echo "division\n";
echo "------------------------------\n";
echo 'true / true = ' . ($b / $b); #1
echo "\n";
echo 'true / c = ' . ($b / $c); #PHP Warning:  Division by zero
echo "\n";
echo 'true / 1 = ' . ($b / $i); #1
echo "\n";
echo 'true / 10.05 = ' . ($b / $d); #0.099502487562189
echo "\n";
echo 'true / hola = ' . ($b / $s); #PHP Warning:  Division by zero
echo "\n";
echo 'c / true = ' . ($c / $b); #0
echo "\n";
echo 'c / c = ' . ($c / $c); #PHP Warning:  Division by zero
echo "\n";
echo 'c / 1 = ' . ($c / $i); #0
echo "\n";
echo 'c / 10.05 = ' . ($c / $d); #0
echo "\n";
echo 'c / hola = ' . ($c / $s); #PHP Warning:  Division by zero
echo "\n";
echo '10.05 / true = ' . ($d / $b); #10.05
echo "\n";
echo '10.05 / c = ' . ($d / $c); #PHP Warning:  Division by zero
echo "\n";
echo '10.05 / 1 = ' . ($d / $i); #10.05
echo "\n";
echo '10.05 / 10.05 = ' . ($d / $d); #1
echo "\n";
echo '10.05 / hola = ' . ($d / $s); #PHP Warning:  Division by zero
echo "\n";
echo 'hola / true = ' . ($d / $b); #10.05
echo "\n";
echo 'hola / c = ' . ($s / $c); #PHP Warning:  Division by zero
echo "\n";
echo 'hola / 1 = ' . ($s / $i); #0
echo "\n";
echo 'hola / 10.05 = ' . ($s / $d); #0
echo "\n";
echo 'hola / hola = ' . ($s / $s); #PHP Warning:  Division by zero
echo "\n";

?>
