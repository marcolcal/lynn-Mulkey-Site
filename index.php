<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lynn Mulkey</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 70%;
    margin: auto;
  }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="\lynns-mulkey-site\index.php">Lynn Mulkey</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="\lynns-mulkey-site\index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">More<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="\lynns-mulkey-site\other-pages\about-me.php">About me</a></li>
          <li><a href="\lynns-mulkey-site\other-pages\my-music.php">My Music</a></li>
          <li><a href="\lynns-mulkey-site\other-pages\my-ministry.php">The ministry</a></li>
		      <li><a href="\lynns-mulkey-site\other-pages\the-book.php">There is a book</a></li>
        </ul>
      </li>
      <li><a href="#">Contact Me</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="/lynns-mulkey-site/images/lynn-kid-pic2.png" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Just a boy</h3>
          <p>Loved my dog Spot</p>
        </div>
      </div>

      <div class="item">
        <img src="/lynns-mulkey-site/images/lynn-pics/lynn-guitar-large.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Singing</h3>
          <p>Worship</p>
        </div>
      </div>
    
      <div class="item">
        <img src="/lynns-mulkey-site/images/lynn-pics/palidan-Lynn-1960.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Cowboys and guns</h3>
          <p>Me with my cowboy outfit</p>
        </div>
      </div>

      <div class="item">
        <img src="/lynns-mulkey-site/images/lynn-pics/playing-lynn.JPG" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Jamming</h3>
          <p>love to worship God with my music</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="container">
  <h1>It's Just Me</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>      
  <p>Resize the browser window to see the effect.</p>      
  <div class="row">
    <div class="col-sm-6" style="background-color:gray;">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
    <div class="col-sm-6" style="background-color:gray;">
      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.    
    </div>
  </div>
</div>
<div class="jumbotron">
  <div class="container text-center">
    <h1>My Portfolio</h1>      
    <p>Some text that represents "Me"...</p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h3>Some of my Work</h3><br>
  <div class="row">
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="/lynns-mulkey-site/images/lynn-pics/playing-lynn.JPG" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="/lynns-mulkey-site/images/lynn-pics/playing-lynn.JPG" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="/lynns-mulkey-site/images/lynn-pics/playing-lynn.JPG" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="/lynns-mulkey-site/images/lynn-pics/playing-lynn.JPG" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="/lynns-mulkey-site/images/lynn-pics/lynn-guitar-large.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="/lynns-mulkey-site/images/lynn-pics/lynn-guitar-large.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="/lynns-mulkey-site/images/lynn-pics/lynn-guitar-large.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="/lynns-mulkey-site/images/lynn-pics/lynn-guitar-large.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br>
<footer class="container-fluid text-center">
  <p>Copyrights Lynn Mulkey @lynnmulkey.com</p>
</footer>
</body>
</html>