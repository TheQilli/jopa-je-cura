<?php
       $hours = -10;
       $rate = 15;



       if ($hours <= 0) {
           $weekly_pay = 0;
       } elseif ($hours <= 40) {
           $weekly_pay = $hours * $rate;
          
       } else {
           $weekly_pay = (40 * $rate) + (($hours - 40) * $rate * 1.5);
       }

       if ($cloudy == true) {
          echo "Cloudy day!";
         } else {
          echo "Sunny day!";
         }
           	

         echo "Weekly pay: $weekly_pay";
    ?>