<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Register</title>
  <?php require('partials/styles.view.php'); ?>
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Install ISTE Registration Web App</div>
      <div class="card-body">
        <form class="needs-validation" method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate>
          <div class="form-group row">
            <label for="loginUserId" class="col-sm-2 col-form-label">User ID</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="loginUserId" id="loginUserId" placeholder="User ID" required>
              <div class="invalid-feedback">
                Please enter User ID
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" min="6" minlength="6" required>
              <div class="invalid-feedback">
                Please enter password, must contain minimum 6 characters
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="confirmPassword" class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" minlength="6" required>
              <div class="invalid-feedback">
                Password do not match
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Install</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php require('partials/script.view.php'); ?>
  <script type="text/javascript">
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {

          var password = document.getElememtById('password').value;
          var confirmPassword = document.getElememtById('confirmPassword').value;

          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          } else if(password !== confirmPassword) {
            event.preventDefault();
            alert("Password is not match");
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>
</body>

</html>