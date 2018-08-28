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

  <script type="text/javascript">
    window.admNumber = "<?= $admNumber; ?>"
  </script>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-darkblue">
    <a class="navbar-brand" href="#">
      <img src="/assets/images/iste.png" width="30" height="30" class="d-inline-block align-top" alt=""> ISTE GCE Kannur
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <section class="top">
    <div class="container">
      <div class="page-header">
        <h3>Downlaod Application Form</h3>
      </div>
      <div class="alert alert-info" role="alert" style="font-family: 'Quicksand'; margin: 20px;">
        <h4 class="alert-heading">Welcome to ISTE GCEK family</h4>
        <p>Please download and print this PDF file</p>
        <hr>
        <p class="mb-0">
          If you have any queries or found corrupted PDF document, 
          <a href="tel:+919645100464" class="btn btn-sm bg-darkblue" style="color: #fff;">Call Us</a> 
        </p>
      </div>
      <form method="post" action='<?= $_SERVER["PHP_SELF"] ?>'>
        <input type="text" name="admno" value="<?= $admNumber; ?>" style="display: none;">
        <input type="text" name="download" value="file" style="display: none;">
        <button type="submit" id="download-btn" class="btn bg-darkblue" style="color: #fff; margin-left: 20px;">Download</button>
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
    $(document).ready(function() {
      $('#download-btn').on('click', function(e) {
        

        $.LoadingOverlay("show", {
          image: "",
          fontawesome: "fa fa-refresh fa-spin",
          size: 15
        });

        window.setTimeout(function() {
          $.LoadingOverlay("hide");
        }, 5000);

      });
    });
  </script>
</body>

</html>