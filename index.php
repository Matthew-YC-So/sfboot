 <?php require_once("head.php"); ?>


    <!-- Carousel
    ================================================== -->
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel"  >
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <!-- img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide" -->
          <img class="first-slide center-block" src="images/mobile_deve.jpg" alt="Software Development" />
          <div class="container">
            <div class="carousel-caption">
              <h1><?php echo $msg["Web Application"]; ?></h1>
              <p><?php echo $msg["Make your business with presence in any device"]; ?></p>
              <p><a class="btn btn-lg btn-primary" href="#Web-Application" role="button"><?php echo $msg["Explore details"]; ?></a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <!-- img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide" -->
          <img class="second-slide center-block" src="images/native_advertising.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><?php echo $msg["Innovative Applications"]; ?></h1>
              <p><?php echo $msg["We develop products for now and tomorrow"]; ?></p>
              <p><a class="btn btn-lg btn-primary" href="http://getbootstrap.com/examples/carousel/#" role="button"><?php echo $msg["Learn more"]; ?></a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <!-- img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide" -->
          <img class="third-slide center-block" src="images/software_engineering.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><?php echo $msg["Software Development"]; ?></h1>
              <p><?php echo $msg["We are experts in software development"]; ?></p>
              <p><a class="btn btn-lg btn-primary" href="#software-development" role="button"><?php echo $msg["Review the facts"]; ?></a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="http://getbootstrap.com/examples/carousel/#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="http://getbootstrap.com/examples/carousel/#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
    

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4" id="Web-Application">
            <img class="img-circle" src="images/web_crystal.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2><?php echo $msg["Web Application"]; ?></h2>
          <p><?php echo $msg["index_web_application_summary"]; ?></p>
          <p><a class="btn btn-default" href="#web-development" role="button"><?php echo $msg["View details"]; ?> »</a></p>
        </div><!-- /.col-lg-4 -->          
        <div class="col-lg-4"  id="software-development">
            <img class="img-circle" src="images/software.jpg" alt="Software Development" width="140" height="140">
          <h2><?php echo $msg["Software Development Outsourcing"]; ?></h2>
          <p><?php echo $msg["index_outsource_summary"]; ?></p>
          <p><a class="btn btn-default" href="#multiple-development" role="button"><?php echo $msg["View details"]; ?> »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="images/erp.jpg" alt="ERP System" width="140" height="140">
          <h2><?php echo $msg["ERP System"]; ?></h2>
          <p><?php echo $msg["index_erp_summary"]; ?></p>
          <p><a class="btn btn-default" href="#erp-details" role="button"><?php echo $msg["View details"]; ?> »</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">
      
      <div class="row featurette" id="web-development">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading"><?php echo $msg["index_web_application_section_header"]; ?> <span class="text-muted"><?php echo $msg["We are here to help"]; ?></span></h2>
          <p class="lead"><?php echo $msg["index_web_application_section_content"]; ?></p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive center-block" src="images/multi-form-factor.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>


      <hr class="featurette-divider">
      
      <div class="row featurette" id="multiple-development">
        <div class="col-md-7">
          <h2 class="featurette-heading"><?php echo $msg["index_outsource_section_header"]; ?> <span class="text-muted"><?php echo $msg["index_outsource_section_subheader"]; ?></span></h2>
          <p class="lead">
            <?php echo $msg["index_outsource_section_content"]; ?>              
          </p>
          <ul>
              <li>Visual Studio 2015</li>
              <li>C# language</li>
              <li>HTML5</li>
              <li>LESS and SCSS - CSS Authoring Framework</li>
              <li>Bootstrap CSS Framework</li>
              <li>jQuery</li>
              <li>AngularJS</li>
              <li>CoffeeScript</li>
              <li>ASP.NET Webform and MVC</li>
              <li>Web API and OData</li>
              <li>Microsoft Team Foundation Server</li>
              <li>Microsoft SQL Server, Integration Service and Reporting Service</li>
              <li>Microsoft SQL Server</li>
              <li>.NET Framework 4.5</li>
              <li>Microsoft Office OpenXML API</li>
              <li>Microsoft Unity Dependance Injection</li>
              <li>Entity Framework and NHibernate Object to Relational Mapping framework</li>
          </ul>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="images/mutiple_development.jpg" data-src="holder.js/500x500/auto" alt="Multiple development">
        </div>
      </div>


      <hr class="featurette-divider">

      <div class="row featurette" id="erp-details">
        <div class="col-md-7">
          <h2 class="featurette-heading"><?php echo $msg["index_erp_section_header"]; ?> <span class="text-muted"><?php echo $msg["index_erp_section_subheader"]; ?></span></h2>
          <p class="lead"><?php echo $msg["index_erp_section_content"]; ?></p>          
          <ul><?php echo $msg["index_erp_section_content_features"]; ?></ul>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="images/ERP_2.jpg"  data-src="holder.js/500x500/auto" alt="ERP System">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <?php require_once("footer.php"); ?>

    </div><!-- /.container -->
   <!-- FOOTER -->
<?php require_once("foot.php"); ?>
