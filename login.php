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
    <div class="container login-form ">

      <h1>Login</h1>

      <div class="container login-inner">
        <form class="col-md-5 login ">
          <div class="form-group ">
            <label class="form-label" for="email">Email address</label>
            <input class="form-control" type="email" id="email" placeholder=" Enter your email address" required>
           
          </div>
          <div class="form-group ">
            <label class="form-label" for="password">Password</label>
            <input class="form-control" type="password" id="password" placeholder="Enter your password" required>
            
          </div>
          <div class="form-group form-check login">
            <input class="form-check-input" type="checkbox" id="check">
            <label class="form-check-label" for="check">Keep me signed in</label>
          </div>
          <div class="btn-group">
          
            <a class="btn  blue-btn" href="#" role="button" type="submit">Login</a>
            <a class="btn  gray-btn" href="register.php" role="button">Register</a>
          </div>
        
          <div class="forgot-pass text-center ">
              <a href="#">
Forgot your password? </a>
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