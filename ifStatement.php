<?php
    // $age = 20;
    // if($age >=18) {
    //     echo "you may enter this site";
    // } elseif ($age <18) {
    //     echo "you must be 18++ to enter this site";
    // } else {
    //     echo "you are not eligible to enter this site";
    // }


    // $adult = false;
    // if($adult) {
    //     echo "you may enter this site";
    // } else {
    //     echo "you must be 18++ to enter this site";
    // }

    $hours = 40;
    $rate = 15;
    $weekly_pay = null; 

    if($hours <=0) {
        $weekly_pay = 0;
    } else if ($hours <=40) {
        $weekly_pay = $hours * $rate;
    } else {
        $weekly_pay = 40 * $rate + ($hours - 40) * $rate;
    }

    echo "You made {$weekly_pay} this week"
?>