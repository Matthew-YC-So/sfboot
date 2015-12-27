<?php require_once("head.php"); ?>
<div class="container">
    <div class="page-header">
        <h2><?php echo $msg["About"]; ?></h2>
    </div>
    <div class="col-lg-7 lead">
        <p><?php echo $msg["about_us_p1"]; ?></p>
        <p><?php echo $msg["about_us_p2"]; ?></p>
    </div>
    <div class="col-lg-5">
        <img class="img-responsive" src="images/about_us.jpg"  data-src="holder.js/500x500/auto" alt='<?php echo $msg["About"]; ?>'>
    </div>

    <!-- FOOTER -->
    <div class="row">
        <div class="col-lg-12">
          <?php require_once("footer.php"); ?>
        </div>
    </div>
</div>

<?php require_once("foot.php"); ?>

