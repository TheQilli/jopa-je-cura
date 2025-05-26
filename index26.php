<!DOCTYPE html>
<html>
<head>
    <title>Zbroj znamenki</title>
</head>
<body>
    <form action="index26.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="number" name="age"><br>
        email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>

    <?php
       if(isset($_POST['login'])) {
        $username  = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        if(empty($email)) {
            echo "that email is not valid";
        }
        else {
            echo "your email is {$email}";
        }
       }
           
    ?>
</body>
</html>