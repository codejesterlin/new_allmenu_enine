

<html>
<head>
    <meta charset="utf-8">

</head>


<body>

        <form action="#" method="post">
            <input type="text" name="name" value="test">
            <input type="text" name="surname" value="surname">
            <input type="submit" name="submit">
        </form>

</body>
</html>


<?php
session_start();
if(isset($_POST['submit']))
    {
        $_SESSION['cart'] = array();
        $_SESSION['cart'][1] = array('type' => 'foo', 'quantity' => 42);

        //$_SESSION['cart'][1]['quantity']++; // another of this item to the cart
        //unset($_SESSION['cart'][$id]); //remove the item from the cart
        print_r($_SESSION['cart'][1]);
          }

?>

