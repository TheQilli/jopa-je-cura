<!DOCTYPE html>
<html>
<head>
    <title>Zbroj znamenki</title>
</head>
<body>
    <form method="get">
        <input type="number" name="broj" placeholder="Unesite broj">
        <button type="submit">Zbroji znamenke</button>
    </form>

    <?php
        $broj = $_GET['broj'] ?? 0;
        $zbroj = 0;
        
        if($broj > 0) {
            $broj_str = (string)$broj;
            for($i = 0; $i < strlen($broj_str); $i++) {
                $zbroj += (int)$broj_str[$i];
            }
            echo "Zbroj znamenki broja $broj je $zbroj";
        }
    ?>
</body>
</html>