<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method ="get">
        <label>quantity</label>
        <inputt type="text" name="quantity">
        <input type="submit" value="total">
    </form>
    
</body>
</html>
<?php
    $item= "pizza";
    $price = 5.99;
    $quantity = $_GET["quantity"];
    $total = null;

    echo "you have ordered{$quantity} * {$item}";
    echo "your total is \${$total}";
?>