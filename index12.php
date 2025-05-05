<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index12.php" method="post">
        <label for="radius">enter a number to count down from:</label><br>
        <input type="text" name="counter"><br>
        <input type="submit" value="start">
    </form>

    <?php
        $counter = $_POST['counter'];
        
        for ($i = $counter; $i > 0; $i--) {
            echo $i. "<br>";
        }
    ?>
</body>
</html>