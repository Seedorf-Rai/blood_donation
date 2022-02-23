<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blood Donation</title>
    <!-- BootsTrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- External Css -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quintessential&family=Shizuru&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
<body>
    <!-- NavBar -->
    <div class="address ">
       <div class="icons">
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram-square"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-youtube"></i>
       </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        
          <a class="navbar-brand" href="#"><img class="logo" src="/image/blood-logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
              <div class="nav-bar">
                <li class="nav-item">
                  <a class="nav-link active nav-home wiggle" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active nav-features wiggle" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active nav-pricing wiggle" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active wiggle">Disabled</a>
                </li>
              </div>
            </ul>
          </div>
        </div>
       <div class="nav-last">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
          @if (Route::has('login'))
              <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                  @auth
                   <div class="button-div">
                    <button class="button-62" role="button">  <a href="{{ url('/home') }}" class="home-login">Home</a></button>
                   </div>
                  @else
                  <div class="little-space"></div>
                  <button class="button-62" role="button"><a href="{{ route('login') }}" class="login">Log in</a></button>
                      
    
                      @if (Route::has('register'))
                       <button class="button-62" role="button">   <a href="{{ route('register') }}" class="register">Register</a></button>
                      @endif
                  @endauth
              </div>
          @endif
       </div>
      </nav>
      <!-- NavEnds -->
      <div class="hero">
        <div class="hero-child">
           <div class="row">
             <div class="col-md-4 blood-img">
                <img src="/image/blood.png" alt="">
             </div>
             <div class="col-md-8 para my-4">
               <p>A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole blood components). Donation may be of whole blood, or of specific components directly (apheresis). Blood banks often participate in the collection process as well as the procedures that follow it.</p>
             </div>
           </div>
        </div>
        <div class="hero-circle">

        </div>
       
      </div>
      <div class="space">
          
      </div>
      <div class="container mero-card">
        <div class="row">
          <div class="col-md-4">
            <div data-aos="fade-right"
            data-aos-offset="300"
            data-aos-easing="ease-in-sine">
              <div class="card" style="width: 18rem;">
                <img class="img-fluid" src="https://images.pexels.com/photos/6627693/pexels-photo-6627693.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Donate us</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;"   data-aos="fade-up"
            data-aos-anchor-placement="top-bottom">
              <img src="https://images.pexels.com/photos/6629393/pexels-photo-6629393.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Why Donate?</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;" data-aos="fade-left">
              <img src="https://images.pexels.com/photos/4173251/pexels-photo-4173251.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Health Professionals</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
         
        </div>
        
      </div>
      <div class="donate-now" data-aos="flip-left">
        <a href=""><button type="button" class="btn btn-lg btn-donate button-glow" >Donate Now</button></a>
      </div>
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>