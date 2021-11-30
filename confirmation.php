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

<!-- Page Wrapper -->
<section class="page-wrapper success-msg">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
        	<i class="tf-ion-android-checkmark-circle"></i>

          <h2 class="text-center">Merci! Pour votre achat</h2>
          <p>Vous allez recevoir un email contenant les details de votre achat</p>
          <a href="shop.php" class="btn btn-main mt-20">Continuer vos achats</a>
        </div>
      </div>
    </div>
  </div>
</section><!-- /.page-warpper -->

<?php include("footer.php") ?>
<?php include("essential-scripts.php") ?>
    


  </body>
  </html>
