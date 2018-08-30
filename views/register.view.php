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

</head>

<body>
  <nav class="navbar  fixed-top navbar-expand-lg navbar-dark bg-darkblue">
    <a class="navbar-brand" href="/">
      <img src="/assets/images/iste.png" width="30" height="30" class="d-inline-block align-top" alt=""> ISTE GCE Kannur
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/download_pdf.php">Search Application Form
            <span class="sr-only">(current)</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <section class="top">
    <div class="container">
      <div class="page-header">
        <h3>Student Membership Registration - 2018</h3>
      </div>
      <div id="error_msg" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Admission number already taken</strong> 
        Click <a id="error_redirect_url" href=""><strong>here</strong></a> to download your application form
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="validation_error_msg" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Do you fill the form Correctly</strong> 
         We found some fields missing or invalid, check and submit again
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="reg-form" name="regform" method="post" action="<?= $_SERVER['PHP_SELF']?>" class="needs-validation" novalidate>
        <div class="card">
          <h5 class="card-header">Basic Details</h5>
          <div class="card-body">
            <div class="form-group row">
              <label for="name-of-applicant" class="col-sm-2 col-form-label">Name Of Applicant</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="name-of-applicant" id="name-of-applicant" placeholder="Enter your name" required>
                <div class="invalid-feedback">
                  Please enter your name.
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="admission-no" class="col-sm-2 col-form-label">Admission No.</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="admission-no" id="admission-no" placeholder="Enter admission number" required>
                <div class="invalid-feedback">
                  Please enter your admission number.
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="dob" class="col-sm-2 col-form-label">Date of birth</label>
              <div class="col-sm-5">
                <input type="date" class="form-control" name="dob" id="dob" placeholder="Date of Birth" required>
                <div class="invalid-feedback">
                  Please enter your DOB.
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="branch" class="col-sm-2 col-form-label">Branch</label>
              <div class="col-sm-5">
                <select class="form-control" name="branch" id="branch" required>
                  <?php foreach($branches as $branch) : ?>
                  <option value="<?= $branch->id; ?>">
                    <?= $branch->branch_name; ?>
                  </option>
                  <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                  Please choose a username.
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="sem" class="col-sm-2 col-form-label">Semester</label>
              <div class="col-sm-5">
                <select class="form-control" name="sem" id="sem" required>
                  <option value="S1">S1</option>
                  <option value="S2">S2</option>
                  <option value="S3">S3</option>
                  <option value="S4">S4</option>
                  <option value="S5">S5</option>
                  <option value="S6">S6</option>
                  <option value="S7">S7</option>
                  <option value="S8">S8</option>
                </select>
                <div class="invalid-feedback">
                  Please choose a username.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <h5 class="card-header">Contact Details</h5>
          <div class="card-body">
            <div class="form-group row">
              <label for="house-name" class="col-sm-2 col-form-label">House name</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="house-name" id="house-name" placeholder="Enter your house name" required>
                <div class="invalid-feedback">
                  Please enter house name
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="street-name" class="col-sm-2 col-form-label">Street name</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="street-name" id="street-name" placeholder="Enter street name" required>
                <div class="invalid-feedback">
                  Please enter street name
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="post" class="col-sm-2 col-form-label">Postoffice</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="post" id="post" placeholder="Enter your post" required>
                <div class="invalid-feedback">
                  Please enter Postoffice
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="district" class="col-sm-2 col-form-label">District</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="district" id="district" placeholder="Enter your district" required>
                <div class="invalid-feedback">
                  Please enter district
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="state" class="col-sm-2 col-form-label">State</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="state" id="state" placeholder="Enter your state" required>
                <div class="invalid-feedback">
                  Please enter state
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="pincode" class="col-sm-2 col-form-label">Pincode</label>
              <div class="col-sm-5">
                <input type="number" class="form-control" name="pincode" id="pincode" placeholder="Enter your pincode" required>
                <div class="invalid-feedback">
                  Please enter pincode
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <h5 class="card-header">Personal Details</h5>
          <div class="card-body">
            <fieldset class="form-group">
              <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Special Interests: (Tick 1 or 2)</legend>
                <div class="col-sm-10" id="special">
                  <?php foreach($specialInterests as $si) : ?>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="special[<?= $si->id; ?>]" id="special[<?= $si->id; ?>]" value="<?= $si->value; ?>" onclick="return keepCount('special', 2)">
                    <label class="form-check-label" for="special[<?= $si->id; ?>]">
                      <?= $si->value; ?>
                    </label>
                  </div>
                  <?php endforeach; ?>
                  <div class="form-group col-sm-5">
                    <input class="form-control" type="text" placeholder="Others specify" name="other-si">
                  </div>
                </div>
              </div>
            </fieldset>
            <fieldset class="form-group">
              <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Career Preferences: (Tick 1 or 2)</legend>
                <div class="col-sm-10" id="career_pref">
                  <?php foreach($careerPreferences as $cp) : ?>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="career_pref[<?= $cp->id; ?>]" id="career_pref[<?= $cp->id; ?>]" value="<?= $cp->value; ?>" onclick="return keepCount('career_pref', 2)">
                    <label class="form-check-label" for="career_pref[<?= $cp->id; ?>]">
                      <?= $cp->value; ?>
                    </label>
                  </div>
                  <?php endforeach; ?>
                  <div class="form-group col-sm-5">
                    <input class="form-control" type="text" placeholder="Others specify" name="other-cp">
                  </div>
                </div>
              </div>
            </fieldset>
            <fieldset class="form-group">
              <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Services: (Tick 2 or 3)</legend>
                <div class="col-sm-10" id="services">
                  <?php foreach($services as $service) : ?>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="service[<?= $service->id; ?>]" id="service[<?= $service->id; ?>]" value="<?= $service->value; ?>" onclick="return keepCount('services', 3)">
                    <label class="form-check-label" for="service[<?= $service->id; ?>]">
                      <?= $service->value; ?>
                    </label>
                  </div>
                  <?php endforeach; ?>
                  <div class="form-group col-sm-5">
                    <input class="form-control" type="text" placeholder="Others specify" name="other-service">
                  </div>
                </div>
              </div>
            </fieldset>
          </div>
        </div>
        <button type="submit" class="btn bg-darkblue submit-btn">Register</button>
      </form>
    </div>
  </section>

  <footer style="margin-top: 20px; background-color: #eee; height: 50px;">
    <p style="text-align: center; padding: 10px;">
      <span class="text-muted">Developed by 
        <a href="https://www.facebook.com/muhammed.shasin.9">Head WebOps</a>,
        <a href="https://www.facebook.com/GCEK.ISTE/">ISTE GCEK</a>
      </span>
    </p>
  </footer>

  <!-- <footer class="footer">
    <div class="container">
      <span class="text-muted">
        Developed by <a href="https://www.facebook.com/muhammed.shasin.9">Muhammed Shasin</a>, <mark>Head WebOps</mark>, 
        <a href="https://www.facebook.com/GCEK.ISTE/">ISTE GCE Kannur</a> 
      </span>
    </div>
  </footer> -->

  <script src="/assets/js/jquery-3.3.1.min.js"></script>
  <script src="/assets/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/loadingoverlay.min.js"></script>
  <script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
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
            form.classList.add('was-validated');
            $('#validation_error_msg').css('display', 'block');
            window.scrollTo(0, 0);
          } else if (getCountOfCheckedBoxes('special') === 0) {
            event.preventDefault();
            alert("Please choose at least one special interests");
          } else if (getCountOfCheckedBoxes('career_pref') === 0) {
            event.preventDefault();
            alert("Please choose at least one career preferences");
          } else if (getCountOfCheckedBoxes('services') === 0) {
            event.preventDefault();
            alert("Please choose at least one services");
          } else {
            event.preventDefault();
            var postString = $('#reg-form').serialize();

            $('#validation_error_msg').css('display', 'none');

            $("#reg-form :input").prop("disabled", true);


            $.LoadingOverlay("show", {
              image: "",
              fontawesome: "fa fa-refresh fa-spin",
              size: 15
            });

            $.ajax({
              type: "POST",
              url: "register.php",
              data: postString,
              success: function(data) {
                $.LoadingOverlay("hide");
                var jsonData = JSON.parse(data);
                if(jsonData.error_code === 409) {
                  $('#error_redirect_url').attr('href', jsonData.redirect_url);
                  $('#error_msg').css('display', 'block');
                  window.scrollTo(0, 0);
                } else {
                  window.location = jsonData.redirect_url;  
                }
                
              }
            })
          }

        }, false);
      });
    }, false);
  })();


  function getCountOfCheckedBoxes(id) {
    var allCheckBoxes = document.querySelectorAll(`#${id} input[type="checkbox"]`);

    var checkedBoxCount = 0;
    for (var i = 0; i < allCheckBoxes.length; i++) {
      if (allCheckBoxes[i].checked) checkedBoxCount += 1;
    }

    return checkedBoxCount;
  }

  function keepCount(id, count) {

    var checkedBoxCount = getCountOfCheckedBoxes(id);

    if (checkedBoxCount > count) {
      alert(`You cannot select more than ${count} choices`);
      return false;
    }
  }
  </script>
</body>

</html>