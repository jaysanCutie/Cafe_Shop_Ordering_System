<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coffee Shop</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/style-landing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>
<body>
  <div class="all-content">
   
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand text-light" style="font-size: 25px;" href="#" id="logo">Deja Brew</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fa-solid fa-bars" style="color: white; font-size: 23px;"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#gallary">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>

          
         
         
         
        </ul>
        <li class="d-flex nav-item">
            <a class="nav-link" href="login.php">Log In</a>
          </li>
      </div>
    </div>
  </nav>
  <!-- navbar -->

<!-- home section -->
   <section id="home" style="background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url(./images/bc3.png);">
    <div class="content">
      <h3>Start Your Day With a <br> Fresh Coffee</h3>
      <p> Step into our shop and feel your stress melt away in a haven of comfort.
         <br>Discover a place where coffee and culture meet.
      </p>
      <a href="login.php">
      <button id="btn">Shop Now</button>
      </a>
      
    </div>
   </section>

<!-- home section -->



<!-- about section -->
<div class="about" id="about">
  <div class="container">
  <div class="heading">About <span>Us</span></div>
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <img src="./images/about.png" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <h3>What Makes Our Coffee Special?</h3>
        <p>In today’s competitive coffee market, standing out requires more than just serving a cup of coffee. It’s about creating an experience, sharing a story, and offering something unique that keeps customers coming back for more.
          <br><br>The cornerstone of our coffee shop is our dedication to quality. Every cup of coffee we serve is made from carefully sourced, premium beans. We work with ethical suppliers to ensure that our beans are not only fresh but also sustainably grown. 
          <br><br>What truly sets our coffee shop apart is our creativity and willingness to innovate. We don’t just serve coffee; we craft unique beverages; we also offer various snacks to partner our coffe that are exclusive to our menu.
         </p>
         <button id="about-btn">Learn More.</button>
      </div>
    </div>
  </div>
</div>
<!-- about section -->


   



<!-- top cards -->
<section class="top-cards">
  <div class="heading2">Top <span>Categories</span></div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./images/c1.png" alt="">
          
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./images/c2.png" alt="">
          
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./images/c3.png" alt="">
          
        </div>
      </div>
    </div>
  </div>
</section>
<!-- top cards -->









<!-- our gallary -->
<div class="container" id="gallary">
  <h1>Our <span>Gallery</span></h1>
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/image1.png" alt="">
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/image2.png" alt="">
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/image3.png" alt="">
      </div>
    </div>
  </div>
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/image4.png" alt="">
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/image5.png" alt="">
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/image6.png" alt="">
      </div>
    </div>
  </div>
</div>
<!-- our gallary -->




<!-- contact -->
<section class="contact" id="contact">



  <div class="container">
    <div class="row">
      <div class="col-md-7">
       <div class="heading6">Contact <span>Us</span></div>

       <p>Kindly fill up below; and sip your stress away.
        <br>Left us with suggestions or a heartfelt messages.
       </p>

       <input class="form-control" type="text" placeholder="Name" aria-label="default input example"><br>
       <input class="form-control" type="email" placeholder="Email" aria-label="default input example"><br>
       <input class="form-control" type="number" placeholder="Number" aria-label="default input example"><br>
       <button id="contact-btn">Send Message</button>
      </div>
      <div class="col-md-5" id="col">
        <h1>Info</h1>
        <p><i class="fa-regular fa-envelope"></i> dejabrew@gmail.com</p>
        <p><i class="fa-solid fa-phone"></i> +92000000000000000</p>
       <p><i class="fa-solid fa-building-columns"></i> Deja Brew hoho</p>
       <p>Purok 2 - Cogtong, Candijay, Bohol</p>
      </div>
    </div>
  </div>

</section>
<!-- contact -->








   <!-- footer -->
   <footer id="footer">
    <div class="footer-logo text-center">Deja Brew</div>
    <div class="socail-links text-center">
      <i class="fa-brands fa-twitter"></i>
      <i class="fa-brands fa-facebook-f"></i>
      <i class="fa-brands fa-instagram"></i>
      <i class="fa-brands fa-youtube"></i>
      <i class="fa-brands fa-pinterest-p"></i>
    </div>
    <!-- <div class="credite text-center">
        Designed By <a href="#"> SA Coding</a>
    </div> -->
    <div class="copyright text-center">
      &copy; Copyright <strong><span>Deja Brew</span></strong>. All Rights Reserved
  </div>
</footer>
   <!-- footer -->

   <a href="#" class="arrow"><i><img src="./images/up-arrow.png" alt="" width="50px"></i></a>


  </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>