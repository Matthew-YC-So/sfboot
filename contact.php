<?php require_once("head.php"); ?>
<div class="container">
    <div class="page-header">
        <h2><?php echo $msg["Contact"]; ?></h2>
    </div>
    <div class="col-lg-7">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h5 class="panel-title"><?php echo $msg["contact_us_p1"]; ?></h5>
            </div>
            <div class="panel-body">
                <div class="col-lg-3"><?php echo $msg["Telephone"]; ?>:</div><div class="col-lg-9">+852 3583 2530 / +852 3583 2857</div>
                <div class="col-lg-3"><?php echo $msg["Fax"]; ?>:</div><div class="col-lg-9">+852 3747 6300</div>
                <div class="col-lg-3"><?php echo $msg["Email"]; ?>:</div><div class="col-lg-9"><a href="mailto:info@software-force.com?subject=Enquiry to Software Force">info@software-force.com</a></div>
                <div class="col-lg-3"><?php echo $msg["Address"]; ?>:</div><div class="col-lg-9"><?php echo $msg["Address_value"]; ?></div>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <img class="img-responsive" src="images/contact_us.jpg"  data-src="holder.js/500x500/auto" alt='<?php echo $msg["Contact"]; ?>'>
    </div>
    <!-- FOOTER -->
    <div class="row">
        <div class="col-lg-12">
          <?php require_once("footer.php"); ?>
        </div>
    </div>
</div>

<?php require_once("foot.php"); ?>
