<!DOCTYPE html>
<html>
<head>
    <title>Tablica Množenja</title>
</head>
<body>
    <form method="get">
        <input type="number" name="broj" placeholder="Unesite broj">
        <button type="submit">Pokaži tablicu</button>
    </form>

    <?php
        $broj = $_GET['broj'] ?? 0;
        
        if($broj > 0) {
            echo "<h3>Tablica množenja za broj $broj:</h3>";
            for($i = 1; $i <= 10; $i++) {
                $rezultat = $broj * $i;
                echo "$broj * $i = $rezultat<br>";
            }
        }
    ?>
</body>
</html>