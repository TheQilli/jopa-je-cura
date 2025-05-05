<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index18.php" method="post">
       <input type="checkbox" name="foods[]" value="Pizza">Pizza<br>
         <input type="checkbox" name="foods[]" value="Burger">Burger<br>
            <input type="checkbox" name="foods[]" value="Pasta">Pasta<br>
            <input type="checkbox" name="foods[]" value="Salad">Salad<br>
            <input type="submit" name="submit" value="submit"><br>
    </form>

    <?php
      if(isset($_POST["submit"])) {

        $foods = $_POST["foods"];

        foreach($foods as $food) {
            echo $food . "<br>";
        }

      }
    ?>
</body>
</html>