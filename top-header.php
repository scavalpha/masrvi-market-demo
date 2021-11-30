<!-- Start Top Header Bar -->
<section class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12 col-sm-4">
                <div class="contact-number">
                    <i class="tf-ion-ios-telephone"></i>
                    <span>+222 47 29 80 00</span>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-4">
                <!-- Site Logo -->
                <div class="logo text-center">
                    <a href="index.php">
                        <!-- replace logo here -->
                        <svg width="500px" height="40px" viewBox="0 0 155 34" version="1.1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="25"
                               font-family="AustinBold, Austin" font-weight="bold">
                                <g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
                                    <text id="BMCI Boutique">
                                        <tspan x="70.94" y="325">Masrvi Boutique</tspan>
                                    </text>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-4">
                <!-- Cart -->
                <ul class="top-menu text-right list-inline">
                    <li class="dropdown cart-nav dropdown-slide">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
                                class="tf-ion-android-cart"></i>Panier</a>
                        <div id="panier-div" class="dropdown-menu cart-dropdown">
                            <!-- Cart Item -->
                            <?php foreach($_SESSION['cart']->getItems() as $carItem) { ?>
                                <div class="media">
                                    <a class="pull-left" href="#!">
                                        <img class="media-object" src="images/shop/products/<?php echo $carItem->getProduct() -> getImg() ?>" alt="image" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#!"><?php echo $carItem->getProduct() -> getTitle() ?></a></h4>
                                        <div class="cart-price">
                                            <span><?php echo $carItem-> getQuantity() ?> x </span>
                                            <span><?php echo $carItem->getProduct() -> getPrice() ?> MRU</span>
                                        </div>
                                        <h5><strong><?php echo $carItem->getProduct() -> getPrice() * $carItem-> getQuantity() ?> MRU </strong></h5>
                                    </div>
                                    <a href="#!" class="remove"><i class="tf-ion-close" onclick="removeFromCart(<?php echo $carItem->getProduct()->getId() ?>)"></i></a>
                                </div><!-- / Cart Item -->
                            <?php } ?>


                            <div class="cart-summary">
                                <span>Total</span>
                                <span class="total-price"><?php echo $_SESSION['cart'] -> getTotalSum() ?> MRU</span>
                            </div>
                            <ul class="text-center cart-buttons">
<!--                                <li><a href="cart.html" class="btn btn-small">Panier</a></li>-->
                                <li><a href="checkout.php" class="btn btn-small btn-solid-border">Caisse</a></li>
                            </ul>
                        </div>

                    </li><!-- / Cart -->




                </ul><!-- / .nav .navbar-nav .navbar-right -->
            </div>
        </div>
    </div>
</section><!-- End Top Header Bar -->
<script>
    function addToCart(id){

        $.ajax({
            type: "GET",
            url: "controller/CartController.php",
            data: {
                id: id,
                action: "add"
            },
            success: function () {
                $( "#panier-div" ).load(window.location.href + " #panier-div  > *" );
                if($( "#payment-div" )){
                    $( "#payment-div" ).load(window.location.href + " #payment-div  > *" );
                }


            }
        });
    }

    function removeFromCart(id){

        $.ajax({
            type: "GET",
            url: "controller/CartController.php",
            data: {
                id: id,
                action: "remove"
            },
            success: function () {
                $( "#panier-div" ).load(window.location.href + " #panier-div  > *" );
                if($( "#payment-div" )){
                    $( "#payment-div" ).load(window.location.href + " #payment-div  > *" );
                }

            }
        });
    }
</script>
