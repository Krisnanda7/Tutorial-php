<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="post">
    <label for="username">username :</label><br>
    <input type="text" name="username"><br>
    <label for="password">password :</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Log in">
    </form> -->


    <form action="index.php" method="post">
        <label for="quantity">quantity</label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
    // echo "{$_POST["username"]} <br>";
    // echo "{$_POST["password"]} <br>";

    $_item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;
    $total = $quantity * $price;

    echo "You have ordered {$quantity} * {$item} <br>";
    echo "Your total $\{$total}" ;


?>

<!-- $_GET = data is appended to the url not secure char limit
            get request can be cached better for a seacrh page
$_POST = data is sent in the body of the request, more secure, no char
            limit, not cached better for submitting credentials -->