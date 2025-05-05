<?php
       $date = date('1');

       $date = "tuesday";

       switch ($date) {
           case "monday":
               echo "Today is Monday!";
               break;
           case "tuesday":
               echo "Today is Tuesday!";
               break;
           case "wednesday":
               echo "Today is Wednesday!";
               break;
           case "thursday":
               echo "Today is Thursday!";
               break;
           case "friday":
               echo "Today is Friday!";
               break;
           default:
               echo "It's the weekend!";
       }
    ?>