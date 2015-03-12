<?php

session_start();
$_SESSION["price"] = $_POST ? $_POST["full_price"] : 0;
setcookie("price", $_POST ? $_POST["full_price"] : 0);

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allmenus.Ge</title>
    <link rel="shortcut icon" href="../../../favicon.ico">
    <link rel="stylesheet" type="text/css" href="../../../css/jquery.jscrollpane.custom.css" />
    <link rel="stylesheet" type="text/css" href="../../../css/bookblock.css" />
    <link rel="stylesheet" type="text/css" href="../../../css/custom.css" />
    <script src="../../../js/modernizr.custom.79639.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
<div id="container" class="container">

    <div class="menu-panel">
        <h3>მენიუს კატეგორიები</h3>
        <ul id="menu-toc" class="menu-toc">
            @foreach($category as $cat)
                <li><a href="#item1">{{$cat->name}}</a></li>

            @endforeach
        </ul>
    </div>
    <p class="jami">არჩეული მენიუს ფასია: რაღაცა <strong>ლარი</strong></p>
    <div class="bb-custom-wrapper">
        <div id="bb-bookblock" class="bb-bookblock">

            <div class="bb-item" id="item1">
                <div class="content">
                    <div class="scroller">
                        @foreach($db as $head_cat)
                            <h2>{{$head_cat->name}}</h2>
                        @endforeach
                        <label id="final_price"><?php echo $_SESSION['price']; ?></label>
                        @yield('content')
                        <!--menu-list-->
                        <ul class="restaurant_menu__list">
                            <!--itim-->

                            @foreach($prod as $prods)
                            <li class="restaurant_menu__row">
                                <div class="restaurant_menu__meal">
											<span>
												<!--PRODUCT-->
												<input class="inputfor" type="checkbox" data-price="{{$prods->price}}" data-id="{{$prods->id}}" id="product_{{$prods->id}}" class="checkBox" />
												<label for="product_{{$prods->id}}">
                                                    <div><i class="fa fa-check"></i></div> {{$prods->name}}
                                                </label>
												<!--PRODUCT(END)-->
											</span>
                                </div>
										<span class="restaurant_menu__price">
											<strong>რაოდენობა:</strong> <input type="number" name="raodenoba" id="quantity_{{$prods->id}}" data-id="{{$prods->id}}" class="inputQuantity" min="1" value="1" style="width: 40px;" />
										</span>
                                <span class="restaurant_menu__price"><strong>ფასი:</strong> <label id="product_price_{{$prods->id}}">{{$prods->price}}</label> <a class="lari">L</a> </span>
                            </li>
                            <!--itim(END)-->
                            @endforeach
                        </ul>
                        <!--menu-list(END)-->

                    </div>
                </div>
            </div>




        <nav>
            @foreach($db as $catt_id)
            <span ><a href="{{URL::previous()}}" style="color: #ffffff">&larr;</a></span>
                    @foreach($get_final as $final)
                        @if($catt_id->id+1 <= $final->id)
            <span ><a href="{{$catt_id->id+1}}" style="color: #ffffff">&rarr;</a></span>
                        @endif
                    @endforeach
                @endforeach
        </nav>

        <span id="tblcontents" class="menu-button">Table of Contents</span>

    </div>
</div>
</div><!-- /container -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="../../../js/jquery.mousewheel.js"></script>
<script src="../../../js/jquery.jscrollpane.min.js"></script>
<script src="../../../js/jquerypp.custom.js"></script>
<script src="../../../js/jquery.bookblock.js"></script>
<script src="../../../js/page.js"></script>
<script>
    $(function() {

        Page.init();

    });
</script>

    <script>
        function CalculateTotal(){
                var sum = 0;
                $(".inputfor:checked").each(function(i){
                    var id = $(this).attr("data-id");
                    var selectedQuantity = $("#quantity_" + id).val();
                    var price = $(this).attr("data-price");
                    sum = sum + selectedQuantity * price;
                });
                $("#final_price").text(sum);
        }
        $(function(){
            $(".inputfor").change(function(){
                CalculateTotal();
            });
            $(".inputQuantity").change(function(){
                CalculateTotal();
            });
        });
        
    </script>
<a href='javascript:calc(<?= json_encode($prod); ?>);'>POST Request</a>
</body>
</html>
