<?php
    $foods = array("apple", "orange", "banana", "coconut");

    // $foods[0] = "pineapple";
    // array_push($foods, "pineapple", "kiwi");//untuk menambahkan value array setelah array terakhir
    // array_pop($foods);//untuk menghapus array paling terakhir
    // array_shift($foods);//untuk menghaous array paling pertama
    // $foods = array_reverse($foods);//merubah posisi dari array terakhir menjadi pertama
    // echo count($foods);//menghitung jumlah array

    foreach($foods as $food) {
        echo $food . "<br>";
    }
?>