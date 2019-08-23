<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#0e1b4d">
  
  <title>ISTE GCEK HOME</title>
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/assets/css/main.css">

  <link rel="icon" href="/assets/images/iste.png" type="image/png" sizes="16x16">

  <style type="text/css">
    html {
      position: relative;
      min-height: 100%;
    }

    body {
      margin-bottom: 60px; /* Margin bottom by footer height */
    }

    .footer.sticky {
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 60px; /* Set the fixed height of the footer here */
      line-height: 60px; /* Vertically center the text there */
      background-color: #f5f5f5;
    }
  </style>

</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-darkblue">
    <a class="navbar-brand" href="#">
      <img src="/assets/images/iste.png" width="30" height="30" class="d-inline-block align-top" alt=""> ISTE GCE Kannur
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/register.php">Register
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/download_pdf.php">Search Application Form
            <span class="sr-only">(current)</span>
          </a>
        </li>
      </ul>
    </div> -->
  </nav>
  <section class="top">
    <div class="container">
     
     
      <div class="card text-center">
        <div class="card-header">
         Student Membership Registration -  <?= $regYear; ?>
        </div>
        <div class="card-body">
          <h5 class="card-title"><kbd><?= $count; ?></kbd> total registrations</h5>
            <?php if(!$isRegClosed): ?>
               <p class="card-text">Join ISTE by taking a student membership</p>
               <a href="/register.php" class="btn bg-darkblue" style="color: #fff;">Register</a>
            <?php endif; ?>
        </div>
        <div class="card-footer text-danger">
        <?php if(!$isRegClosed): ?>
            Registration closses on <?= $regClosingDate; ?>
        <?php else: ?>
            Registration Closed
        <?php endif; ?>
        </div>
      </div>

      <!-- <div class="card text-center">
        <div class="card-header">
          Download Application Form
        </div>
        <div class="card-body">
          <h5 class="card-title">Already registered ? </h5>
          <p class="card-text">Download application form by clicking below</p>
          <a href="/download_pdf.php" class="btn bg-darkblue" style="color: #fff;">Download</a>
        </div>
        <div class="card-footer text-muted">
          Any queries regarding registration <a href="tel:+919645100464">Call us</a>
        </div>
      </div> -->

      <div class="card text-center">
        <div class="card-header">
          Check Application Status
        </div>
        <div class="card-body">
          <h5 class="card-title">Already registered ? </h5>
          <p class="card-text">Checkout your application status</p>
          <a href="/download_pdf.php" class="btn bg-darkblue" style="color: #fff;">Application Status</a>
        </div>
      </div>

    </div>
  </section>
<!--   <footer style="margin-top: 20px; background-color: #eee; height: 80px;">
    <p style="text-align: center; padding: 10px;">
      <strong>Developed by 
        <a href="https://www.facebook.com/muhammed.shasin.9">Muhammed Shasin</a>, <mark>Head WebOps</mark>, 
        <a href="https://www.facebook.com/GCEK.ISTE/">ISTE GCE Kannur</a>
      </strong>
    </p>
  </footer> -->

  <footer class="footer sticky">
      <div class="container">
      <span class="text-muted">
      Developed by <a href="https://muhammedshasin.me">Muhammed Shasin</a>
    </span>
      </div>
  </footer>

  <script src="/assets/js/jquery-3.3.1.min.js"></script>
  <script src="/assets/js/bootstrap.bundle.min.js"></script>
  
</body>

</html>