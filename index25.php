 <?php
        $username = "gavran";
        $phone = "0987654321";
        $name = array("Jure", "ASVALT");

        // $username = strtolower($username);
        // $username = strtoupper($username);
        // $username = trim($username);
        // $username = str_pad($username, 20, "0");
        // $phone = str_pad("-", "", $phone);
        // $username = strrev($username);
        // $username = str_shuffle($username);
        // $equals = strcmp($username, $phone);
        // $count = strlen($username);
        // $index = strpos($phone, "-");
        // $firstname = substr($username, 0, 5);
        // $lastname = substr($username, 5, 10);
        // $fullname = implode(" ", $name);
        $username = implode("-", $name);

        echo "Username: $username<br>";
    ?>