<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>contact us</title>
</head>
<body>

 <!-- navbar start -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand  text-info" href="#">JCP Technologies</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about.php" >About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contact.php">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex">
        <a class="btn btn-outline-info" href="registration.php">Resistration</a>
        <a class="btn btn-outline-info" href="login.php">Login</a>
      </form>
    </div>
  </div>
</nav>

      <!-- navbar end   -->
<br><br><br><br><br><br>


<nav id="automation-one" class=" navbar-light bg-light">
  <div class="text-center">
    <h1>
      Contact Now
    </h1>
  </div>
</nav>

<br><br><br><br>

<div class="col-lg-6 m-auto ">

<form method="POST" action="formsubmit.php">
  
<div class="container">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Full Name</label>
  <input type="text" name="fullname"  class="form-control" id="exampleFormControlInput1" placeholder="your full name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="email address">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Educational Details</label>
  <textarea class="form-control" name="education" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Address</label>
  <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<button class="btn btn-primary" name="submit" type="submit">Submit</button>
</div>
</form>
</div>

<br><br><br>

<div class="card text-center" >
  <div class="card-body-hidden">
    <h5 class="card-title">Company Address</h5>
    <h6 class="card-subtitle mb-2 text-muted">Madhuban apartment, six floor, </h6>
    <p class="card-text">New Bidipeth , nagpur-440023 - maharashtra</p>
    <a href="#" class="card-link">+91-7709840106</a>
    <a href="#" class="card-link">jitendrapardhi7694@gmail.com</a>
  </div>
</div>


<!-- footer start -->
<br><br><br>
<footer>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container-fluid ">
      <p class="text-center">
        @2022 JCB technologies stablished in 1992
      </p>
    </div>
  </nav>
</footer>

   <!-- footer end -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>