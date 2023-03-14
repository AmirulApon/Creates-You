<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <!--CSS-->
  <?php include './elements/header.php'; ?>
  <!--//CSS-->
</head>

<body>
  <header>
    <!--Header-->
    <?php include './elements/headerDesign.php'; ?>
    <!--//Header-->
  </header>
  <section class="main-container">
    <div class="container login-form my-5">

      <h1>Login</h1>

      <div class="container login-inner">
        <form class="col-md-5 login ">
          <div class="form-group was-validated">
            <label class="form-label" for="email">Email address</label>
            <input class="form-control" type="email" id="email" required>
            <div class="invalid-feedback">
              Please enter your email address
            </div>
          </div>
          <div class="form-group was-validated">
            <label class="form-label" for="password">Password</label>
            <input class="form-control" type="password" id="password" required>
            <div class="invalid-feedback">
              Please enter your password
            </div>
          </div>
          <div class="form-group form-check login">
            <input class="form-check-input" type="checkbox" id="check">
            <label class="form-check-label" for="check">Keep me signed in</label>
          </div>
          <div class="btn-group">
            <button class="btn btn-primary blue-btn" type="submit">Login</button>
            <a class="btn  gray-btn" href="register.php" role="button">Register</a>
          </div>
        



        </form>

      </div>

    </div>

    </div>

  </section>
  <footer>
    <!--Footer-->
    <?php include './elements/footerDesign.php'; ?>
    <?php include './elements/footer.php'; ?>
    <!--//Footer-->
  </footer>
</body>

</html>