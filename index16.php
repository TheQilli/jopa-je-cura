<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index16.php" method="post">
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="log in"><br>
    </form>

    <?php
    foreach ($_POST as $key => $value) {
       echo"{$key} = {$value} <br>";
    }

     if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username)) {
            echo "Please enter a username <br>";
        } elseif (empty($password)) {
            echo "Please enter a password <br>";
        } else {
            echo "Welcome {$username} <br>";
        }
    }
    ?>
</body>
</html>