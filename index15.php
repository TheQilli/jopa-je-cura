<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index15.php" method="post">
        <label>enter a country</label><br>
        <input type="text" name="country"><br>
        <input type="submit">
    </form>

    <?php
       $capitals = array(
           "USA" => "Washington, D.C.",
           "Canada" => "Ottawa",
           "Mexico" => "Mexico City",
           "UK" => "London",
           "France" => "Paris",
           "Germany" => "Berlin",
           "Italy" => "Rome",
           "Spain" => "Madrid",
           "Japan" => "Tokyo",
           "China" => "Beijing"
       );

         $capital = $_POST['country'];
         $capital = $capitals["$_POST[country]"];

         echo $capital;
    ?>
</body>
</html>