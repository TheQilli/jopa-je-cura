<?php
 $price = 20 + 20;

 echo $price;

 $a = 10;
 $b = 20;
 $area = $a * $b;
 echo "<br>";
 echo $area;

 $celsius = 20;


 $fahrenheit = ($celsius * 9/5) + 32;


 echo "<br>";
 echo "{$celsius}°C = {$fahrenheit}°F";

 $A = 10;
 $B = 20;
 $C = 30;

 $average = ($A + $B + $C) / 3;
 echo "<br>";
    echo "Average of {$A}, {$B}, and {$C} is {$average}";

    $x = 11;
    $y = 27;
    $ostatak = $x % $y;
    echo "<br>";
    echo "Remainder of {$x} divided by {$y} is {$ostatak}";

    $g = 10;
    $sati = $g * 60;
    $minuti = $g * 3600;

    echo "<br>";
    echo "{$g} hours is equal to {$sati} minjutes and {$minuti} seconds.";

    $k = 10;
    $obujam = $k * $k * $k;
    echo "<br>";
    echo"obujam je {$obujam}";

    $A2 = ($A+$B);
    $B2 = ($A-$B);
    $C2 = $A2 * $B2;
    echo "<br>";
    echo"razlika je {$C2}";

    $dani = 10;
    $sati = $dani * 24;
    $minuti = $sati * 60;
    $sekunde = $minuti * 60;
    echo "<br>";
    echo "{$dani} days is equal to {$sati} hours, {$minuti} minutes, and {$sekunde} seconds.";

    $L=20000;
    $ya=3;
    $e=8/10000;
    $p=($L*$ya*$e);
    echo"<br>";
    echo"kamata je {$p}";
?>