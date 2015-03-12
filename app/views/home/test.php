<?php
$products = array(
    array(
        'id' => 1,
        'price' => 2.5
    ),
    array(
        'id' => 2,
        'price' => 5
    )
);

$_SESSION["price"] = $_POST ? $_POST["full_price"] : 0;
setcookie("price", $_POST ? $_POST["full_price"] : 0);
var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>

<label>
    <input type="checkbox" id="product_1" name="price">
    2.5
</label>

<label>
    <input type="checkbox" id="product_2" name="price">
    5
</label>

<script>
    function calc(products) {
        var fullPrice = 0;

        products.forEach(function(product, index) {
            if(document.getElementById("product_" + product.id).checked) {
                fullPrice += product.price;
            }
        });

        $.post("/", {
            full_price: fullPrice
        });
    }
</script>

<a href='javascript:calc(<?= json_encode($products); ?>);'>POST Request</a>
</body>
</html>