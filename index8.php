<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="index8.php" method="post">
        <label for="x">x:</label><br>
        <input type="text" name="x"><br>
        <label for="y">y:</label><br>
        <input type="text" name="y"><br>
        <label for="z">z:</label><br>
        <input type="text" name="z"><br>
        <input type="submit" value="total">
    </form>

    <?php
       $x = $_POST['x'];
       $y = $_POST['y'];
       $y = $_POST['z'];
    //    $total = abs($x);
    // $total = round($x);
    // $total = floor($x);
    // $total = ceil($x);
    // $total = pow($x, $y);
    // $total = max($x, $y, $z);
    // $total = min($x, $y, $z);
    // $total = pi();
    // $total = rand();

       echo "Sum: $total";
      
    ?>
</body>
</html>