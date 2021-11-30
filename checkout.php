<?php
require_once "model/FakeDb.php";
require_once "model/MasrviSession.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>


    <?php include("meta.php") ?>

    <?php include("essential-css.php") ?>

</head>

<body id="body">


<?php
include("header.php");

?>
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h1 class="page-name">Caisse</h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Acceuil</a></li>
                        <li class="active">Caisse</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="page-wrapper">
    <div class="checkout shopping">
        <div class="container">
            <div class="row" id="payment-div">
                <div class="col-md-8">

                    <div  class="block">

                        <?php if(count($_SESSION['cart']->getItems())>0) {
                        ?>
                        <h4 class="widget-title">
                                <img src="images/shop/masrvi-logo.png"  style="width:30px;height:30px;">
                            Payer avec Masrvi
                            </h4>

                        <div  class="checkout-product-details">
                            <div  class="payment">
                                <div class="card-details">
                                    <form id="masrvi-form" class="checkout-form" method="post"
                                          action="<?php echo MasrviSession::$masrviUrl?>">

                                        <input type="hidden" name="amount"
                                               value="<?php echo $_SESSION['cart']->getTotalSum() * 100 ?>">
                                        <input type="hidden" name="accepturl" value="http://testbmci.epizy.com/confirmation.php">
                                        <input type="hidden" name="cancelurl" value="http://testbmci.epizy.com/cancel.php">
                                        <input type="hidden" name="declineurl" value="http://testbmci.epizy.com/decline.php">
                                        <input type="hidden" name="currency" value="929">
                                        <input type="hidden" name="brand" value="bmci">
                                        <input type="submit" class="btn btn-main mt-20" value="Paiement">
                                        <!--                              <a href="confirmation.html" class="btn btn-main mt-20">Place Order</a >-->
                                    </form>
                                </div>
                            </div>
                        </div>

                            <?php

                        }

                        else { echo "<h1>panier vide</h1>";}
                        ?>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-checkout-details">
                        <div class="block">
                            <h4 class="widget-title">Detail de la commande</h4>
                            <?php foreach ($_SESSION['cart']->getItems() as $carItem) { ?>
                                <div class="media product-card">
                                    <a class="pull-left" href="#">
                                        <img class="media-object"
                                             src="images/shop/products/<?php echo $carItem->getProduct()->getImg() ?>"
                                             alt="Image"/>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a
                                                    href="#"><?php echo $carItem->getProduct()->getTitle() ?></a></h4>
                                        <p class="price"><?php echo $carItem->getQuantity() ?>
                                            x <?php echo $carItem->getProduct()->getPrice() ?> MRU</p>

                                    </div>
                                </div>
                            <?php } ?>
                            <hr>
                            <ul class="summary-prices">
                                <li>
                                    <span>Sous Total:</span>
                                    <span class="price"><?php echo $_SESSION['cart']->getTotalSum() ?> MRU</span>
                                </li>
                                <li>
                                    <span>Frais:</span>
                                    <span>0</span>
                                </li>
                            </ul>
                            <div class="summary-total">
                                <span>Total</span>
                                <span><?php echo $_SESSION['cart']->getTotalSum() ?> MRU</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("footer.php") ?>
<?php include("essential-scripts.php") ?>

<script>
    $("#masrvi-form").submit(function () {

        $("<input />").attr("type", "hidden")
            .attr("name", "sessionid")
            .attr("value", "<?php echo MasrviSession::getSessionId() ?>")
            .appendTo( $("#masrvi-form"));

        $("<input />").attr("type", "hidden")
            .attr("name", "merchantid")
            .attr("value", "<?php echo MasrviSession::$merchantId ?>")
            .appendTo( $("#masrvi-form"));
        return true;
    });
</script>


</body>
</html>
