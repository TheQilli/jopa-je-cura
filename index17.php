<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index17.php" method="post">
       <input type="radio" name="credit_card" value="visa">Visa<br>
       <input type="radio" name="credit_card" value="mastercard">Mastercard<br>
         <input type="radio" name="credit_card" value="american express">American Express<br>
         <input type="submit" name="confirm" value="confirm">Confirm<br>
    </form>

    <?php
       if (isset($_POST['confirm'])) {

        if (isset($_POST['credit_card'])) {
           $credit_card = $_POST['credit_card'];

           if ($credit_card == "visa") {
               echo "You have selected Visa <br>";
           } elseif ($credit_card == "mastercard") {
               echo "You have selected Mastercard <br>";
           } elseif($credit_card == "american express") {
               echo "You have selected American Express <br>";
           }
           else {
               echo "Please select a credit card <br>";
           }
       }
    }
    ?>
</body>
</html>