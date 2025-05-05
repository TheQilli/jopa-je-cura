<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="index7.php" method="get">
        <label for="num1">broj:</label><br>
        <input type="number" name="num1" id="num1" ><br>
        <label for="num2">broj 2:</label><br>
        <input type="number" name="num2" id="num2"><br>
        <label for="num2">broj 3:</label><br>
        <input type="number" name="num2" id="num2"><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
       $num1 = $_GET['num1'];
       $num2 = $_GET['num2'];
       $num3 = $_GET['num3'];
       $total = ($num1 + $num2 + $num3) / 3;
       echo "Sum: $total";
    ?>
</body>
</html>