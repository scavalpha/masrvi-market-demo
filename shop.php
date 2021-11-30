
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
					<h1 class="page-name">Boutique</h1>
					<ol class="breadcrumb">
						<li><a href="index.php">Accueil</a></li>
						<li class="active">boutique</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="products section">
	<div class="container">

        <div class="row">
            <?php foreach($_SESSION['allProducts'] as $id=>$product) { ?>
                <div class="col-md-4">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="images/shop/products/<?php echo $product->getImg() ?>" alt="product-img" />
                            <div class="preview-meta">
                                <ul>

                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart" onclick="addToCart(<?php echo $product->getId() ?>)"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-single.html">2
                                    <?php  echo $product->getTitle();  ?>


                                </a></h4>
                            <p class="price"><?php echo $product->getPrice()." MRU"; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>


	</div>
</section>



<?php include("footer.php") ?>
<?php include("essential-scripts.php") ?>
    


  </body>
  </html>
