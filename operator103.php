<?php
    echo "Equal Comparison Operators<br>";
    $x = 10;
    $y = "10";
    var_dump($x == $y);
?>

<?php
    echo "<br>Identical Comparison Operators<br>";
    $x = 10;
    $y = "10";
    var_dump($x === $y);
?>

<?php
    echo "<br>Spaceship Comparison Operators<br>";
    $x = 10;
    $y = 20;
    var_dump($x <=> $y);
?>

<?php
    echo "<br>Spaceship Comparison Operators<br>";
    $x = 10;
    $y = 10;
    var_dump($x <=> $y);
?>

<?php
    echo "<br>Spaceship Comparison Operators<br>";
    $x = 15;
    $y = 10;
    var_dump($x <=> $y);
?>
