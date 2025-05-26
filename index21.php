<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $counter = $_POST['counter'];
        $zbroj = null;
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 2 == 0) {
                echo $i . "<br>";
                $zbroj += $i;
            } 


        }

        echo "ukupuan zbroj je $zbroj <br>";
    ?>
</body>
</html>