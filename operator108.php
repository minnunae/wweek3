<?php
    echo "1.Condition Assignment Operators<br>";
    $status = (empty($user)) ? "anoymous" : "logged in";
    echo $status;

    $user = "Mark";
    $status = (empty($user)) ? "anonymous" : "logged in";
    echo $status. "<br>";
?>

<?php
    echo "2.Null coalescing Assignment Operators<br>";
    $user =$_GET ["user"] ?? | "anonymous";
    echo $user."<br>";

    $color = $color ?? "red";
    echo $color;
?>