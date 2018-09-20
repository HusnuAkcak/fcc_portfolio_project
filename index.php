<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="Personal Portfolio">
  <meta name="keywords" content="Husnu, Husnu Akcak, Akcak, GTU, Computer Engineer, student, Freelancer">
  <meta name="author" content="Husnu AKCAK">

  <!-- google webmaster verification -->
  <meta name="google-site-verification" content="T_mymrGKAU9tImiAnnLGMouUgcMI2X7GRmIg3v3bS0A" />

  <title>My portfolio</title>

  <!-- font awesome icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

  <div class="top_menu" >
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div class="container">
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="main_menu nav navbar-nav">
              <li><a href="#" id="getHome">Home <span class="sr-only">(current)</span></a></li>
              <li><a href="#" id="getAbout">About</a></li>
              <li><a href="#" id="getProjects">Projects</a></li>
              <li><a href="#" id="getContact">Contact</a></li>
            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
  </div>

  <section id="welcome_section" class="jumbotron">
      <div class="container blue_shadow_white_text">
        <h1>Hi, I am Husnu AKCAK.</h1>
        <h2>Undergraduate computer engineering student.</h2>
      </div>
  </section>

  <section id="about" class="jumbotron">
    <div class="container">
      <p>
        I took the associate's degree from Pamukkale University in 2014. <br><br>

        I worked in April Yazilim approximately 15 months, when I was there
        I used to prepare reports and some extra modules to existed programs
        by using T-SQL. <br><br>

        After that, I decided to enhance my degree and I prepared myself for
        the university exam and I could get into university in 2016. Now,
        I am in my 2nd year at Gebze Technical University.
        Also, I am curious about web technologies.
      </p>
    </div>
  </section>

  <section id="projects" class="jumbotron">
      <div class="container">
        <div id="my_portfolio" class="project-tile blur">
          <text class="yellow_shadow_white_text">My portfolio project ( this website ).</text>
          <a href="https://github.com/HusnuAkcak/my_portfolio" class="green_shadow_white_text fa fa-chain" target="blank"></a>
        </div>
      </div>
  </section>

  <section id="contact" class="jumbotron">
    <div class="blur">
      <div class="container">
        <div class="col-xs-8">
          <form id ="contact-form" action="/mailer/mail_gonder.php" method="post" class="form-horizontal">
            <div class="form-group">
              <div class="col-sm-12">
                <input name="name" type="text" class="form-control" id="inputName3" placeholder="Name">
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-12">
                <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-12">
                <input name="subject" type="text" class="form-control" id="inputSubject3" placeholder="Subject">
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-12">
                <textarea name="message" class="form-control" id="inputMessage3" rows=7 placeholder="Message..."></textarea>
              </div>
            </div>

            <div class="form-group">
                <button id="submit_button" type="submit" class="btn btn-lg btn-primary">
                  <i class="glyphicon glyphicon-send"></i>
                </button>
            </div>
          </form>
        </div>

        <div class="col-xs-4">
          <div id="social">
            <a href="https://github.com/HusnuAkcak" id="github" class="fa fa-github" target="blank"></a>
            <a href="https://www.linkedin.com/in/hüsnü-akçak-a77013135/" id="linkedin" class="fa fa-linkedin" target="blank"></a>
            <a href="https://twitter.com/Husnu_Akcak" id="twitter" class="fa fa-twitter" target="blank"></a>
          </div>
          <div id="contact_info" class="blue_shadow_white_text">
            <i id="mobile_icon" class="fa fa-mobile"></i>
            <text>+90 539 281 65 28</text>
            </br>
            <i id="mail_icon" class="fa fa-envelope"></i>
            <text>husnuakcak.info@gmail.com</text>
            </br>
            <i id="marker_icon" class="fa fa-map-marker"></i>
            <text>Gebze/Kocaeli/Turkey</text>
          </div>
        </div>
      </div>
    </div>
  </section>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
