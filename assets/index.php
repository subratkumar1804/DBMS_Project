<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Covid 19 Testing And Record Management System</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="landing-header">
    <h1>Covid 19-TRMS</h1>
    <h4>
      <em>Covid 19 - Testing And Record Management System</em>
    </h4>
    </div>
    
    <ul class="slideshow">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>

    <style>
      body {
  background-color: #000;
}

h1 {
  font-weight: 700;
  font-size: 5em;
}
h4{
  color:#f5f5f5;
  font-weight: bold;
  font-size: 3.0rem;
}
#landing-header {
  z-index: 1;
  position: relative;
  text-align: center;
  padding-top: 40vh;
}

#landing-header h1 {
  color: #fff;
}
.slideshow { 
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 0;
  list-style: none;
  margin: 0;
  padding: 0;
}

.slideshow li { 
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background-size: cover;
  background-position: 50% 50%;
  background-repeat: no-repeat;
  opacity: 0;
  z-index: 0;
  animation: imageAnimation 50s linear infinite; 
}

.slideshow li:nth-child(1) { 
  background-image: url(https://ecrin.org/sites/default/files/COVID19-taskforce-840.jpg) 
}
.slideshow li:nth-child(2) { 
  background-image: url(https://news.yale.edu/sites/default/files/styles/featured_media/public/adobestock_331270676.jpeg?itok=yQ_Ll2rQ&c=07307e7d6a991172b9f808eb83b18804);
  animation-delay: 10s; 
}
.slideshow li:nth-child(3) { 
  background-image: url(https://img.etimg.com/thumb/msid-79853627,width-1200,height-900,imgsize-141492,overlay-economictimes/photo.jpg);
  animation-delay: 20s; 
}
.slideshow li:nth-child(4) { 
  background-image: url(https://media.istockphoto.com/photos/green-and-blue-coronavirus-cells-under-magnification-intertwined-with-picture-id1285261108?b=1&k=20&m=1285261108&s=170667a&w=0&h=LtnCxk0Xa4mP9SV3ABCVi4Qc3gs616Igwgp_1eaYjnM=);
  animation-delay: 30s; 
}
.slideshow li:nth-child(5) { 
  background-image: url(https://ichef.bbci.co.uk/news/976/cpsprodpb/1483D/production/_116792048_pfizervialreuters.jpg);
  animation-delay: 40s; 
}

@keyframes imageAnimation { 
  0% { 
    opacity: 0; 
    animation-timing-function: ease-in;
  }
  10% {
    opacity: 1;
    animation-timing-function: ease-out;
  }
  20% {
    opacity: 1
  }
  30% {
    opacity: 0
  }
}

/* Older browser support - .no-cssanimations class added by modernizr */
.no-cssanimations .slideshow li {
  opacity: 1;
}
    </style>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Covid 19-TRMS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About Coronavirus </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Covid 19 Symptoms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Prevention</a>
          </li>
  <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="new-user-testing.php">Testing</a>
          </li>
           <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="live-test-updates.php">Live Updates</a>
          </li>

           <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="login.php">Admin</a>
          </li>


        </ul>
      </div>
    </div>
  </nav>



  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 style = "color:white;"><strong>About this page</strong></h2>
          <p class="lead" style = "color:white;">Coronavirus disease (Covid 19) is an infectious disease caused by a newly discovered coronavirus. Most people infected with the COVID-19, virus will experience mild to moderate, respiratory illness & recover without requiring special treatment. Older people and those with underlying medical problem like cardiovascular disease.</p>
          <p class="lead" style = "color:white;">The Covid 19 virus spread primarily through droplet of saliva or discharge from the nose when an infected person coughs or sneezes so it’s important that you also practice respiratory etiquette.</p>
         
        </div>
      </div>
    </div>
  </section>

  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 style = "color:white;"><strong>Covid 19 Symptoms</strong></h2>
          <hr />
<p style = "color:white;"><strong>Hight Fever 2-14 days!</strong><br />
Reported illnesses have ranged from mild symptoms to severe illness and death</p>
             <hr />
<p style = "color:white;"><strong>Dry Cough 2-14 days!</strong><br />
Reported illnesses have ranged from mild symptoms to severe illness and death</p>
          <hr />
<p style = "color:white;"><strong>Shortness of breath!</strong><br />
Reported illnesses have ranged from mild symptoms to severe illness and death</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 style = "color:white;"><strong>Prevention</strong></h2>
  <ul>
            <li style = "color:white;">Wash your Hands often</li>
            <li style = "color:white;">Wear A Face mask</li>
            <li style = "color:white;">Avoid contact with sick people</li>
            <li style = "color:white;">Always cover your cough or sneeze</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>
