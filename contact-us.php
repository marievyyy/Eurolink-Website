<?php 

    if(isset($_POST['submit'])){
        
        
        include('connection.php');  
        
    
        include('phpmailing.php'); 
        
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us</title>

    <!-- styles -->
    <link href ="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" >

   <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed|Archivo+Narrow|Montserrat' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>

  </head>

<body>

<!-- NAVIGATION -->

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                  <img class="img-responsive" src="img/original.png">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">HOME</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="about-us.html">ABOUT US
                          <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="about-us.html#about-us-header">Overview</a></li>
                            <li><a href="about-us.html#about-us-mission-and-vision">Mission/Vision/<br>Core Values</a></li>
                            <li><a href="about-us.html#guiding-principle">Guiding Principle</a></li>
                            <li><a href="about-us.html#commitments">Commitment</a></li>
                            <li><a href="about-us.html#community">Commnunity</a></li>
                            <li><a href="about-us.html#affiliates">Affiliates</a></li>   
                        </ul>
                    </li>
                  
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="services.html">SERVICES
                          <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a href="services.html#services-header">Overview</a></li>
                          <li><a href="services.html#solutions-header">Solutions</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="projects.html">PROJECTS
                          <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a href="projects.html#projects-header">Overview</a></li>
                          <li><a href="projects.html#partnersclients">Partners & Clients</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="contact-us.php">CONTACT US
                          <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="contact-us.php#form">Inquiry Form</a></li>
                        </ul>
                    </li>

                </ul>

            </div>

        </div>
    </nav>

<!-- END OF NAVIGATION -->


<!-- CONTACT US -->

  <section id="contact">
      <div class="container">

          <h2>Contact Us</h2>
      
          <div class="tab">
              <ul class="nav nav-pills">
                  <li class="active"><a data-toggle="pill" href="#contact-details">Contact Details </a></li>
                  <li><a data-toggle="pill" href="#form"> Inquiry Form </a></li>
              </ul>
          </div>
        
          <div class="tab-content">

          
              <div id="form" class="tab-pane fade">

                

                  <div class="row">
                      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">

                          <form id="contactForm" class="form" method="post" role="form" action="./contact-us.php" novalidate="novalidate">

                              <fieldset>
                                  <div class="form-group">
                                      <label class="form-label" for="name">Your Name</label>
                                      <input type="text" class="form-control" id="name" name="name" placeholder="Your name" tabindex="1">
                                  </div>       

                                  <div class="form-group">
                                      <label class="form-label" for="email">Your Email</label>
                                      <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2" >
                                  </div>          

                                  <div class="form-group">
                                      <label class="form-label" for="subject">Subject</label>
                                      <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3">
                                  </div>      

                                  <div class="form-group">
                                      <label class="form-label" for="message">Message</label>
                                      <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="Message..." tabindex="4"></textarea>
                                  </div>

                                  <br>

                                  <!-- captcha -->
                                  <center>
                                      <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
                                      <div class="g-recaptcha" id="captcha" data-sitekey="6LfNyx8TAAAAADdTr8Kj50hDyMrst2BDbRQcvDVC"></div>
                                  </center>

                                  <!-- button -->
                                  <div class="text-center">
                                    <button><input type="submit" class="btn btn-start-order submit" name="submit" id="submit"></button>
                                  </div>
                              </fieldset>

                          </form>

                    </div>

            </div>

      </div>

  </section>
                          <!-- success modal -->
                          <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                        <h3 id="myModalLabel3"><center>Success!</center></h3>

                                      </div>
                                      <div class="modal-body">
                                        <p><center id="confirmationMessage"></center></p>
                                      </div>
                                      <div class="modal-footer">
                                        <button class="btn-primary btn" name="SubForm" id="SubForm" type="button" data-dismiss="modal">Close</button> </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <!-- end of success modal -->

                          <!-- error modal -->
                          <div id="myModalerror" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                        <h3 id="myModalLabel3"><center>Error!</center></h3>

                                      </div>
                                      <div class="modal-body">
                                        <p><center id="error"></center></p>
                                      </div>
                                      <div class="modal-footer">
                                        <button class="btn-primary btn" name="SubForm" id="SubForm" type="button" data-dismiss="modal">Close</button> </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <!-- end of success modal -->


<!-- CONTACT US -->


<!-- FOOTER -->

  <section id="footer">
      <div class="container">
        
          <div class="row">
              <div class="col-md-4">
                  <p>
                    Suite 1605 Tektite West Tower Philippine Stock Exchange Building
                    Exchange Road III Ortigas Center, Pasig City 1605
                  </p>
                  <p>Trunkline: (632) 6614797 | Fax: (632) 687-0182</p>
                  <a href="eurolinkonline.com">www.eurolinkonline.com</a>
                  <p>Copyright &copy 2016. All rights reserved.</p>
              </div>

              <div class="col-md-4 col-md-offset-4" align="right">
                  <img class="img-responsive" src="img/original.png">
                  <h4> OPTIMIZING BUSINESS EFFICIENCY <br> THROUGH INFORMATION TECHONOLOGY </h4> 
              </div>       
          </div>

      </div>
  </section>

<!-- FOOTER -->


<!-- SCRIPTS --> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/pattern.js"></script>
<script src="js/contact.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.parallax.js"></script>
<script src="js/bootstrap.min.js"></script>
 
 <!-- SCRIPTS -->    

</body>
</html>