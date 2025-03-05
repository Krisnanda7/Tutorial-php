<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="x">x</label>
        <input type="x" name="x"><br>
        <label for="y">y</label>
        <input type="y" name="y">
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
   $x = $_POST["x"];
   $y = $_POST["y"];
   $total = null;

//    $total = abs($x);
//    $total = round($x);//bilangan bulat
//    $total = floor($x);//dibulatkan kebawah
//    $total = ceil($x);//dibulatkaan keatas
//    $total = sqrt($X);//akar

    // $total = pow($x, $y);//kuadrat
    // $total = min($x, $y);
    // $total = max($x, $y);
    // $total = pi();
    // $total = rand();//random number

   echo $total;

?>