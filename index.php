<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
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
    <div class="container">
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
    <div class="blur">
      <div class="container ">
        <div id="explanation" class="border">
          <p>I will add some of my projects here, later on.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="jumbotron">
    <div class="container">
      <div class="col-xs-8">
        <form id ="contact-form" class="form-horizontal">
          <div class="form-group">
            <!-- <label for="inputName3" class="col-sm-3 control-label">Name</label> -->
            <div class="col-sm-12">
              <input type="text" class="form-control" id="inputName3" placeholder="Name">
            </div>
          </div>

          <div class="form-group">
            <!-- <label for="inputEmail3" class="col-sm-3 control-label">Email</label> -->
            <div class="col-sm-12">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>

          <div class="form-group">
            <!-- <label for="inputSubject3" class="col-sm-3 control-label">Subject</label> -->
            <div class="col-sm-12">
              <input type="text" class="form-control" id="inputSubject3" placeholder="Subject">
            </div>
          </div>

          <div class="form-group">
            <!-- <label for="inputMessage3" class="col-sm-3 control-label">Message</label> -->
            <div class="col-sm-12">
              <textarea class="form-control" id="inputMessage3" rows=7 placeholder="Message..."></textarea>
            </div>
          </div>

          <div class="form-group">
            <!-- <div div="col-sm-4 col-sm-push-8"> -->
              <button id="submit_button" class="btn btn-lg btn-primary">
                <i class="glyphicon glyphicon-send"></i>
              </button>
            <!-- </div> -->
          </div>
        </form>
      </div>

      <div class="col-xs-4">
        <div id="social">
          <a href="https://github.com/HusnuAkcak" id="github" class="fa fa-github"></a>
          <a href="https://www.linkedin.com/in/hüsnü-akçak-a77013135/" id="linkedin" class="fa fa-linkedin"></a>
          <a href="https://twitter.com/Husnu_Akcak" id="twitter" class="fa fa-twitter"></a>
        </div>
      </div>

    </div>
  </section>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/script.js"></script>
</body>

</html>