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
              <h1>Web Application</h1>
              <p>Make your business with presence in any device</p>
              <p><a class="btn btn-lg btn-primary" href="#Web-Application" role="button">Explore details</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <!-- img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide" -->
          <img class="second-slide center-block" src="images/native_advertising.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Industry Edge Products</h1>
              <p>We develop products for now and tomorrow</p>
              <p><a class="btn btn-lg btn-primary" href="http://getbootstrap.com/examples/carousel/#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <!-- img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide" -->
          <img class="third-slide center-block" src="images/software_engineering.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Software Development</h1>
              <p>We are experts in software development</p>
              <p><a class="btn btn-lg btn-primary" href="#software-development" role="button">Review the facts</a></p>
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
          <p>Despite technical demanding, Web application with HTML5 supported definitively is replacing traditional thick client server application model as former has superior advantage 
              to run on different devices with low cost for deployment and great extensiblity.  We have years of web development experience and excel in this area.</p>
          <p><a class="btn btn-default" href="#web-development" role="button"><?php echo $msg["View details"]; ?> »</a></p>
        </div><!-- /.col-lg-4 -->          
        <div class="col-lg-4"  id="software-development">
            <img class="img-circle" src="images/software.jpg" alt="Software Development" width="140" height="140">
          <h2><?php echo $msg["Software Development Outsourcing"]; ?></h2>
          <p>Software development is never an easy task and requires a lot of expertise and subjected to high costs.  We have rich experience and broad technical knowledge that help companies in developing advanced software.</p>
          <p><a class="btn btn-default" href="#multiple-development" role="button"><?php echo $msg["View details"]; ?> »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="images/erp.jpg" alt="ERP System" width="140" height="140">
          <h2><?php echo $msg["ERP System"]; ?></h2>
          <p>Our EPR system is a web application that runs on any device over Internet.  No VPN is required and geographically diverse location is not an issue.</p>
          <p><a class="btn btn-default" href="#erp-details" role="button"><?php echo $msg["View details"]; ?> »</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">
      
      <div class="row featurette" id="web-development">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Finding web development experts? <span class="text-muted">We are here to help.</span></h2>
          <p class="lead">We offer web development to serve users from desktop PCs, notebook, pads and mobiles with CSS3 responisive web design (RWD).  Also, with HTML5, we can help you to develop
               applications running rich in features which are comparable to Windows rich clients.  Also, we have rich experience in building web sites backed up by different databases and xml files based on 
               different requirements.  Moreover, we will choose the most suitable technology including Ajax, Web API and OData and MVC to help you to develop high performance applications.<br /><br />
               We know security is always a big concern for Internet facing web applications and so our design put security consideration at first place and adopt highest level of protection for every new project.         
          </p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive center-block" src="images/multi-form-factor.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>


      <hr class="featurette-divider">
      
      <div class="row featurette" id="multiple-development">
        <div class="col-md-7">
          <h2 class="featurette-heading">High quality software makes the difference. <span class="text-muted">It helps promote business and multiply productivity.</span></h2>
          <p class="lead">High quality software is not just a working program but it evolves over time. Since, we know business is ever changing and today's software may not 
              be enough to support future business requirements, so we have putted a lot of effort that includes utilizing proven modern software engineering, adopting most frequent used programming languages, 
              ensuring good response time and with balancing with easy of maintenance.</p>
          <p class="lead">The following shortlisted tools, languages, frameworks and techniques are used in our team:</p>
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
          <h2 class="featurette-heading">Web based ERP System. <span class="text-muted">High performance ERP system you are looking for.</span></h2>
          <p class="lead">Our ERP system is based on web application.  This makes zero deployment effort to each client as only browser is required.
            As web server can be putted in any location, city and country, you can choose where to centralize company's database.  
            A typical example is installed the web server in Hong Kong and serves clients in China.</p>
          <p class="lead">Our ERP system has the following characteristics:</p>          
          <ul>
              <li>HTML 5 is enabled whenever browser is supported so that user can have richer usage experience</li>
              <li>Responsive Web Design (RWD) for web pages that can be viewed using many different devices: desktops, tablets, and phones and still looked good, and be easy to use.</li>
              <li>High performance with advanced techniques utilized JavaScript Ajax and Web API</li>
              <li>Easy to scale up and scale out with number of users using greater bandwidth, more powerful server and adding servers in load balancing setup</li>
          </ul>
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
