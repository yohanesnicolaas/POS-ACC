<?php
include("controller/doconnect.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bonne Journée!</title>
    <!-- Toastr -->
    <link rel="stylesheet" href="../vendors/toastr/toastr.min.css">
    <script src="../vendors/toastr/jquery-1.9.1.min.js"></script>
    <script src="../vendors/toastr/toastr.min.js"></script>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form id="formLogin" action="controller/dologin.php" method="post" >
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" id="username" placeholder="Username" name="username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required="" />
              </div>
              <div>
               <input class="btn btn-default" type = "submit" value = " Log in "/>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form id="formRegister" action="controller/doregister.php" method="post">
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" id="usernameregister" placeholder="Username" name="username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" id="passwordregister" placeholder="Password" name="password" required="" />
              </div>
              <div>
                <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" name="cpassword" required="" />
              </div>
             <!--  <div>
                <input type="text" class="form-control" placeholder="Role" name="role" required="" />
              </div> -->
              <div>
                <input type="text" class="form-control" id="outlet" placeholder="Outlet" name="outlet" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-default" name="reg_user">Register</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>

    <script src="../production/common/error.js"></script>
    
  </body>
</html>
