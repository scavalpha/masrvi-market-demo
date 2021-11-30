<?php
require_once "model/FakeDb.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <?php include ("meta.php") ?>

    <?php include ("essential-css.php") ?>

</head>

<body id="body">

<?php include ("header.php");
include ("top-slider.php");
?>

<section class="products section bg-gray">
	<div class="container">
		<div class="row">
			<div class="title text-center">
				<h2>Meilleur ventes</h2>
			</div>
		</div>
		<div class="row">
			<?php foreach($_SESSION['highlights'] as $id=>$product) { ?>
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
						<h4><a href="product-single.html">
<!--                                Reef Boardsport-->
                                <?php  echo $product->getTitle();  ?>


                            </a></h4>
						<p class="price"><?php echo $product->getPrice()." MRU"; ?></p>
					</div>
				</div>
			</div>
            <?php } ?>


		


		</div>
	</div>
</section>





<?php include ("footer.php") ?>
<?php include ("essential-scripts.php") ?>





  </body>
  </html>
