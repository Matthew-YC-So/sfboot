<?php require_once("head.php"); ?>
<div class="container">
    <div class="page-header">
        <h2><?php echo $msg["Contact"]; ?></h2>
    </div>
    <div class="row">
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
    </div>        
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-lg-12 embed-responsive embed-responsive-4by3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3688.812802487835!2d114.19108777599557!3d22.39841343933067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34040634ed93c42b%3A0xb1376af349d1e724!2sHarry%20Industrial%20Building%2C%2049-51%20Au%20Pui%20Wan%20St%2C%20Fo%20Tan%2C%20Hong%20Kong!5e0!3m2!1sen!2suk!4v1738243586796!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <div class="row">
        <div class="col-lg-12">
          <?php require_once("footer.php"); ?>
        </div>
    </div>
</div>

<?php require_once("foot.php"); ?>

