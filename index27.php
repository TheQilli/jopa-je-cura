<?php
      setcookie("user", "John Doe", time() + (86400 * 30), "/"); // 86400 = 1 day
      setcookie("user", "Jane Doe", time() + (86400 * 30), "/"); // 86400 = 1 day
      setcookie("favorite_color", "blue", time() + (86400 * 30), "/"); // 86400 = 1 day


      if (isset($_COOKIE["user"])) {
          echo "User is: " . $_COOKIE["user"] . "<br>";
      } else {
          echo "User cookie is not set!<br>";
      }
    ?>