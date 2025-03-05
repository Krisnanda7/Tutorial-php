<?php
    $grade = "A";

    switch($grade) {
        case "A":
            echo "you did great";
            break;
        case "B":
            echo "you did good";
            break;
        case "C":
            echo "you did okay";
            break;
        case "D":
            echo "you did bad";
            break;
        case "F":
            echo "you did terrible";
            break;
        default:
        echo "{$grade}is not valid";
    }
?>