<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <title>Super Care</title>
</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-4">
    <a href="index.php" class="navbar-brand">Super Care</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-1 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#registeration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </nav> <!-- End Navigation -->

  <!-- Start Header Jumbotron-->
  <header class="jumbotron back-image" style="background-image: url(images/cover.png);">
    <div class="myclass mainHeading">
      <h1 class="text-uppercase font-weight-bold text-center">Welcome to Super Care</h1>
      <p class="font-italic text-center">The all in one service provider across India.</p>
    </div>
  </header> <!-- End Header Jumbotron -->
  <div class="container">
    <!--Introduction Section-->
    <div class="jumbotron">
      <h3 class="text-center font-weight-bold">Who are we?</h3>
      <p>
        Super Care is India’s leading chain of multi-brand Electronics and Electrical service
        workshops offering
        wide array of services. We focus on enhancing your uses experience by offering world-class
        Electronic
        Appliances maintenance services. Our sole mission is “To provide Electronic Appliances care
        services to
        keep the devices fit and healthy and customers happy and smiling”.

        With well-equipped Electronic Appliances service centres and fully trained mechanics, we
        provide quality
        services with excellent packages that are designed to offer you great savings.

        Our state-of-art workshops are conveniently located in many cities across the country. Now you
        can book
        your service online by doing Registration.
      </p>

    </div>
  </div>
  <!--Introduction Section End-->

  <!-- Start Services -->
  <div class="container text-center border-bottom" id="Services">
    <br>
    <h2 class="font-weight-bold">Our Services</h2>
    <div class="card-deck mt-4">
      <div class="card">
        <img src="images/Home.jpg" class="card-img-top" alt="Home">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">Smart Home Solutions</h5>
          <p class="card-text">We are dedicated to repair all kind of electronic appliances including smart
            appliances. Our membership makes sure we take care of all the maintainance your daily use
            appliances require.</p>
        </div>
      </div>
      <div class="card">
        <img src="images/Business.jpg" class="card-img-top" alt="Business">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">Smart Business Solutions</h5>
          <p class="card-text">We provide world class support system for small to large business enterprises.
            This covers maintaince of all the electronic appliances installed along with schedule data
            backup for Data Centers along with annual membership. </p>
        </div>
      </div>
      <div class="card">
        <img src="images/Custom.jpg" class="card-img-top" alt="Custom Repair">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">Custom Fault Repairs</h5>
          <p class="card-text">Want to try our services? We provide one time free analysis through our quality
            technicians at your door step for fixing your electronic appliances.</p>
        </div>
      </div>
    </div>
  </div> <!-- End Services -->
  <!-- Start Registration  -->
  <?php include('UserRegistration.php') ?>
  <!-- End Registration  -->
  <!-- Start Happy Customer  -->
  <div class="jumbotron style=" background-color:#DDDFF1" id="Customer">
    <!-- Start Our Customer Jumbotron -->
    <div class="container">
      <!-- Start Customer Container -->
      <h2 class="text-center font-weight-bold">Our Customers</h2>
      <div class="row mt-5">
        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 1st Column-->
          <div class="card shadow-lg mb-2 card h-100">
            <div class="card-body text-center">
              <img src="images/pic1.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title mt-2">Rupesh Sinha</h4>
              <p class="card-text">The work done here is excellent. I have no complains with he technician. They have good knowledge.</p>
            </div>
          </div>
        </div> <!-- End Customer 1st Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 2nd Column-->
          <div class="card shadow-lg mb-2 card h-100">
            <div class="card-body text-center">
              <img src="images/pic2.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title mt-2">Shivani Goyal</h4>
              <p class="card-text">I came here searching for home lights automation and I must say they have a wide range of lights and other accessories.</p>
            </div>
          </div>
        </div> <!-- End Customer 2nd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 3rd Column-->
          <div class="card shadow-lg mb-2 card h-100">
            <div class="card-body text-center">
              <img src="images/pic3.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title mt-2">Ved Prakash</h4>
              <p class="card-text">The website seems very beautiful. My Television was repaired within 2 hours and I am planning to get an annual membership.</p>
            </div>
          </div>
        </div> <!-- End Customer 3rd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 4th Column-->
          <div class="card shadow-lg mb-2 card h-100">
            <div class="card-body text-center">
              <img src="images/pic4.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title mt-2">Nidhi Jha</h4>
              <p class="card-text">You get best in class work at a reasonable price. Believe me with super care, now I don't have to look for repair shops.</p>
            </div>
          </div>
        </div> <!-- End Customer 4th Column-->
      </div> <!-- End Customer Row-->
    </div> <!-- End Customer Container -->
  </div> <!-- End Customer Jumbotron -->

  <!--Start Contact Us-->
  <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4 font-weight-bold">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">
      <!-- Start 1st Column -->
      <?php include('contactform.php') ?>
      <!-- End 1st Column -->
      <div class="col-md-4 text-center">
        <!-- Start 2nd Column -->
        <strong>Headquarter:</strong><br>
        Super Care pvt Ltd,<br>
        Plot-6, Ashok Nagar<br>
        Delhi - 100129<br>
        Phone: +0000000000<br>
        <a class="text-dark" href="#" target="_blank">www.supercare.com</a><br>
        <br> <br>
        <strong>Branch:</strong><br>
        Super Care pvt Ltd,<br>
        Andheri East, Mumbai<br>
        Maharashtra - 742881<br>
        Phone: +0000000000<br>
        <a class="text-dark" href="#" target="_blank">www.supercare.com</a><br>
      </div> <!-- End 2nd Column -->
    </div>
  </div> <!-- End Contact US -->

  <!-- Start Footer -->
  <footer class="container-fluid bg-dark mt-5 text-white">
    <div class="container">
      <div class="row py-3">
        <div class="col-md-6">
          <!-- Start 1st Column -->
          <p class="pr-2">This project is for educational purposes only. </p>

        </div> <!-- End 1st Column -->
        <div class="col-md-6 text-right">
          <!-- Start 2nd Column -->
          <p>Designed by Rahul Kumar &copy; 2019</p>
          <p class="ml-2"><a href="Admin/login.php">Admin Login</a></p>
        </div> <!-- End 2nd Column -->
      </div>
    </div>
  </footer>

  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>