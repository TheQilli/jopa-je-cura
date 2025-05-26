<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>    UNESITE TRI BROJA  </h1>
    <form action="index22.php" method="post">

        <label for="broj1"> unesi 1 broj</label><br>
        <input type="number" id="broj1" name="broj1"><br>
        <label for="broj2"> unesi 2 broj</label><br>
        <input type="number" id="broj2" name="broj2"><br>
        <label for="broj2"> unesi 3 broj</label><br>
        <input type="number" id="broj3" name="broj3"><br>
    </form>
    
    <?php
        $broj1 = $_POST['broj1'];
        $broj2 = $_POST['broj2'];
        $broj3 = $_POST['broj3'];

        if ($broj1 > $broj2 && $broj1 > $broj3) {
            echo "$broj1 je najveci broj <br>";
        } elseif ($broj2 > $broj1 && $broj2 > $broj3) {
            echo "$broj2 je najveci broj <br>";
        } else {
            echo "$broj3 je najveci broj <br>";
        }
    ?>
</body>
</html>