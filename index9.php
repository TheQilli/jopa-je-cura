<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="index9.php" method="post">
        <label for="radius">radius:</label><br>
        <input type="text" name="radius"><br>
        <input type="submit" value="calculate">
    </form>

    <?php
       $radius = $_POST['radius'];
      
         $circumference = 2 * pi() * $radius;
         $circumference =   round($circumference, 2);
         $area = pi() * pow($radius, 2);
            $area = round($area, 2);
        $volume = (4/3) * pi() * pow($radius, 3);
         $volume = round($volume, 2);
         echo "Sum: $volume <br>";
       

       echo "Sum: $circumference <br>";
         echo "Sum: $area <br>";
      
    ?>
</body>
</html>