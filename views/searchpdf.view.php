<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#0e1b4d">
  
  <title>Document</title>
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
    <a class="navbar-brand" href="/">
      <img src="/assets/images/iste.png" width="30" height="30" class="d-inline-block align-top" alt=""> ISTE GCE Kannur
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
         <li class="nav-item active">
          <a class="nav-link" href="/register.php">Register
            <span class="sr-only">(current)</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <section class="top">
    <div class="container">
      <div class="page-header">
        <h3>Search Application Form</h3>
      </div>
      
      <?php if(isset($isRegistered) && !$isRegistered) : ?>
        <div id="error_msg" class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Please register first</strong> 
          Click <a href="/register.php"><strong>here</strong></a>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>

     <form method="get" action='<?= $_SERVER["PHP_SELF"] ?>' style="margin-left: 20px;" class="needs-validation" novalidate>
       <div class="form-group row">
          <label for="admno" class="col-sm-2 col-form-label">Admission Number:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="admno" id="admno" 
            value="<?= isset($admNumber) ? $admNumber : ''; ?>" placeholder="Enter your admission number" required>
            <div class="invalid-feedback">
              Please enter your admission number
            </div>
          </div>
        </div>
        <button type="submit" id="search-btn" class="btn bg-darkblue" style="color: #fff;">Search</button>
      </form>
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
      Developed by <a href="https://www.facebook.com/muhammed.shasin.9">Head WebOps</a>,
      <a href="https://www.facebook.com/GCEK.ISTE/">ISTE GCEK</a> 
    </span>
    </div>
  </footer>

  <script src="/assets/js/jquery-3.3.1.min.js"></script>
  <script src="/assets/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/loadingoverlay.min.js"></script>
  <script type="text/javascript">
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
</body>

</html>