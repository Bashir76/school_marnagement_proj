<!DOCTYPE html>
<!-- saved from url=(0052)https://getbootstrap.com/docs/4.1/examples/carousel/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="this is my Portfolio project As part of Alx SE program project. ">
  <meta name="author" content="Bashir_Saleh_Umar-AmirKano">
  <link rel="icon" href="images/AmirKano-icon.png">

  <title>Home | NG School</title>
  
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/carousel/">

  <!-- Bootstrap core CSS -->
  <link href="./Carousel Template for Bootstrap_files/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="./Carousel Template for Bootstrap_files/carousel.css" rel="stylesheet">
  
  <!-- fontawesome CDN -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

  <style type="text/css">
    .carousel-control-prev:hover, .carousel-control-next:hover{
      background-color: rgba(0,0,0,0.3);
    }
  </style>
  
</head>
<body>

  <header>
    <?php
      include'navbar.php';
    ?>
  </header>

  <main role="main" class="container-fluid">

    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 64px;">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="images/calct.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="images/comp.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="images/work.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


      <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

          <!-- Three columns of text below the carousel -->
          <div class="row">
            <div class="col-md-4">
              <img class="rounded-circle" src="images\promo\alx.jpg" alt="Generic placeholder image" width="140" height="140">
              <h2>Africa Leadership Group</h2>
              <p> Available Course:
                <ul class="course"> 
                  <li class="course_item"> Opportunity For all Africans From 18years Free <br/>
                    <a class="course_link" href="https://www.alxafrica.com/programme_post/full-stack-software-engineer/">Full Stack Software Engineer</a>
                  </li>
                  <li class="course_item"> Opportunity For all Africans From 18years Free <br/>
                    <a class="course_link" href="https://www.alxafrica.com/programme_post/financial-analyst/">Financial Analyst</a>
                  </li>
                  <li class="course_item"> Opportunity For all Africans From 18years Free <br/>
                    <a class="course_link" href="https://www.alxafrica.com/programme_post/virtual-assistant/">Virtual Assistant</a>
                  </li>
                  <li class="course_item"> Opportunity For all Africans From 18years Free <br/>
                    <a class="course_link" href="https://www.alxafrica.com/programme_post/data-analyst/">Data Analyst</a>
                  </li>
                  <li class="course_item"> Opportunity For all Africans From 18years Free <br/>
                    <a class="course_link" href="https://www.alxafrica.com/software-engineering-2022/">Software Engineering</a>
                  </li>
                </ul>
              </p> 
              <p><a class="btn btn-primary" href="https://www.alxafrica.com/" role="button">View details »</a></p>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4">
              <img class="rounded-circle" src="images\promo\alx.jpg" alt="Generic placeholder image" width="140" height="140">
              <h2>Radix Coaching Class</h2>
              <p> Courses Available For Africans <br/><br/>
                All are FREE for Young Africans Under 18year to Above:<br/>
                <ul class="course"> 
                  <li class="course_item"> Full Stack Software Engineer</li>
                  <li class="course_item"> Data Analyst</li>
                  <li class="course_item"> Visual Analyst</li>
                  <li class="course_item"> Financial Analyst</li>
                  <li class="course_item"> Software Engineer</li>
                </ul>
              </p>
              <p><a class="btn btn-primary" href="http://www.radixclasses.com/Default.aspx" role="button">View details »</a></p>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4" style="">
              <img class="rounded-circle" src="images\promo\fcc.png" width="150" height="150">
              <h2>FreeCodeCamp.Org</h2>
              <p>Available Courses<br/>
                <ul class="course"> 
                  <li class="course_item"> Responsive-web-design</li>
                  <li class="course_item"> JavaScript And Algorithms</li>
                  <li class="course_item"> FrontEnd Development</li>
                </ul></p>
                <p><a class="btn btn-primary" href="http://www.freecodecamp.org/" role="button">View details »</a></p>
              </div><!-- /.col-md-4 -->
            </div><!-- /.row -->


          <!-- START THE FEATURETTES -->

          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">Admin Panel</h2>
              <p class="lead"> After Registration and Login webite will create a profile for the respective tuition Classes . Admin can also add their Branch . In this site Admin or Owner of the Classes or Tuition can manage their staff and student information. Admin can Generate teacher id and Student id so that they can login to their own profile page to watch their information . Admin can send notification to the staff and student . Can Generate Reports.</p>
            </div>
            <div class="col-md-5" style="overflow-x: hidden;">
              <img class="featurette-image mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 700px; height: 500px;" src="images\admin.jpg" data-holder-rendered="true">
            </div>
          </div>

          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7 order-md-2">
              <h2 class="featurette-heading">Teacher Panel</h2>
              <p class="lead">After getting Login Id from respective tution classes they can login to their profile which is created by the owner. Teacher can view the salary statement. Teacher can send notification to the student and view notification send by the owner. </p>
            </div>
            <div class="col-md-5 order-md-1" style="overflow-x: hidden;">
              <img class="featurette-image mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="images\teacher.jpg" data-holder-rendered="true" style="width: 700px; height: 500px;">
            </div>
          </div>

          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">Student Panel</h2>
              <p class="lead">After getting Login Id from respective tution classes they can login to their profile which is created by the owner. Student can view the fees statement. Student will received the notication from the respective classes or teacher</p>
            </div>
            <div class="col-md-5" style="overflow-x: hidden;">
              <img class="featurette-image mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="images\student_clg.jpg" data-holder-rendered="true" style="width: 700px; height: 500px;">
            </div>
          </div>

          <hr class="featurette-divider">

          <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


      </main>
        <!-- FOOTER -->
        <?php
          include'footer.php';
        ?>
        

<!--<svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text></svg></body></html>-->
