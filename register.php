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
    <main>
        <section class="main-container">
            <div class="container login-form ">

                <h1>Register</h1>

                <div class="container login-inner">
                    <form class="col-md-5 login ">
                        <div class="form-group ">
                            <label class="form-label" for="uname">Username</label>
                            <input class="form-control" type="uname" id="uname" required>
                            <div class="invalid-feedback">
                                Username is required
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="form-label" for="fname">First Name</label>
                            <input class="form-control" type="fname" id="fname">

                        </div>
                        <div class="form-group ">
                            <label class="form-label" for="lname">Last Name</label>
                            <input class="form-control" type="lname" id="lname">

                        </div>
                        <div class="form-group">
                            <label class=" form-label" for="email">Email address</label>
                            <input class="form-control" type="email" id="email" required>
                            <div class="invalid-feedback">
                                You must provide your email
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="form-label" for="password">Password</label>
                            <input class="form-control" type="password" id="password" required>
                            <div class="invalid-feedback">
                                Password is required
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="form-label" for="password">Confirm Password</label>
                            <input class="form-control" type="password" id="password" required>
                            <div class="invalid-feedback">
                                Confirm Password is required
                            </div>
                        </div>

                        <div class="btn-group">
                            <button class="btn btn-primary blue-btn" type="submit">Register</button>
                            <a class="btn btn-primary gray-btn" href="login.php" role="button">Login</a>
                        </div>
                        <div class="space"></div>
                    </form>
                    
                </div>

            </div>

            </div>
        </section>
    </main>
    <footer>
        <!--Footer-->
        <?php include './elements/footerDesign.php'; ?>
        <?php include './elements/footer.php'; ?>
        <!--//Footer-->
    </footer>
</body>

</html>