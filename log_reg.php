<!doctype html>
<html lang="en">

<head>
  <title>Home Page</title>
  <meta name="keywords" content="">
  <meta name="description" content="">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <?php
  $srcurl = "includes/";
  $basesurl = "assets/";
  ?>




  <?php
  $style = $_SERVER['HTTP_HOST'];
  $style = $srcurl . "style.php";
  include($style);

  $urhere = "homepage";
  ?>

  <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Montserrat|Quicksand');

    * {
      font-family: 'quicksand', Arial, Helvetica, sans-serif;
      box-sizing: border-box;
    }

    body {
      background: #114A6C;
    }

    .form-modal {
      position: relative;
      width: 450px;
      height: auto;
      margin-top: 4em;
      left: 50%;
      transform: translateX(-50%);
      background: #fff;
      border-top-right-radius: 20px;
      border-top-left-radius: 20px;
      border-bottom-right-radius: 20px;
      box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1)
    }

    .form-modal button {
      cursor: pointer;
      position: relative;
      text-transform: capitalize;
      font-size: 1em;
      z-index: 2;
      outline: none;
      background: #fff;
      transition: 0.2s;
    }

    .form-modal .btn {
      border-radius: 20px;
      border: none;
      font-weight: bold;
      font-size: 1.2em;
      padding: 0.8em 1em 0.8em 1em !important;
      transition: 0.5s;
      border: 1px solid #ebebeb;
      margin-bottom: 0.5em;
      margin-top: 0.5em;
    }

    .form-modal .login,
    .form-modal .signup {
      background: #3e7d8e;
      color: #fff;
    }

    .form-modal .login:hover,
    .form-modal .signup:hover {
      background: #222;
    }

    .form-toggle {
      position: relative;
      width: 100%;
      height: auto;
    }

    .form-toggle button {
      width: 50%;
      float: left;
      padding: 1.5em;
      margin-bottom: 1.5em;
      border: none;
      transition: 0.2s;
      font-size: 1.1em;
      font-weight: bold;
      border-top-right-radius: 20px;
      border-top-left-radius: 20px;
    }

    .form-toggle button:nth-child(1) {
      border-bottom-right-radius: 20px;
    }

    .form-toggle button:nth-child(2) {
      border-bottom-left-radius: 20px;
    }

    #login-toggle {
      background: #3e7d8e;
      color: #ffff;
    }

    .form-modal form {
      position: relative;
      width: 90%;
      height: auto;
      left: 50%;
      transform: translateX(-50%);
    }

    #login-form,
    #signup-form {
      position: relative;
      width: 100%;
      height: auto;
      padding-bottom: 1em;
    }

    #signup-form {
      display: none;
    }


    #login-form button,
    #signup-form button {
      width: 100%;
      margin-top: 0.5em;
      padding: 0.6em;
    }

    .form-modal input {
      position: relative;
      width: 100%;
      font-size: 1em;
      padding: 1.2em 1.7em 1.2em 1.7em;
      margin-top: 0.6em;
      margin-bottom: 0.6em;
      border-radius: 20px;
      border: none;
      background: #ebebeb;
      outline: none;
      font-weight: bold;
      transition: 0.4s;
    }

    .form-modal input:focus,
    .form-modal input:active {
      transform: scaleX(1.02);
    }

    .form-modal input::-webkit-input-placeholder {
      color: #222;
    }

    .btn {
      background-color: #3e7d8e;
    }


    .form-modal p {
      font-size: 16px;
      font-weight: bold;
    }

    .form-modal p a {
      color: #57b846;
      text-decoration: none;
      transition: 0.2s;
    }

    .form-modal p a:hover {
      color: #222;
    }


    .form-modal i {
      position: absolute;
      left: 10%;
      top: 50%;
      transform: translateX(-10%) translateY(-50%);
    }

    .fa-google {
      color: #dd4b39;
    }

    .fa-linkedin {
      color: #3b5998;
    }

    .fa-windows {
      color: #0072c6;
    }

    .-box-sd-effect:hover {
      box-shadow: 0 4px 8px hsla(210, 2%, 84%, .2);
    }

    @media only screen and (max-width:500px) {
      .form-modal {
        width: 100%;
      }
    }

    @media only screen and (max-width:400px) {
      i {
        display: none !important;
      }
    }
  </style>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   -->
  <script src="env.js"></script>
</head>
<?php
  $code = $_GET['code'];
  echo $code;
  ?>

  
<body class="hompg">

  


  <div class="form-modal">

    <div class="form-toggle">
      <button id="login-toggle" onclick="toggleLogin()">log in</button>
      <button id="signup-toggle" onclick="toggleSignup()">sign up</button>
    </div>

    <div id="login-form">
      <form>
        <input type="hidden" id="resetcode" value="<?php echo $_GET['code']; ?>">
        <input type="text" id="signinEmail" placeholder="Enter email or username" />
        <input type="password" id="signinPassword" placeholder="Enter password" />
        <button type="button" class="btn login" onclick="signin()">login</button>
        <p><a href="javascript:void(0)" onclick="showSendEmailModal()">Forgotten account</a></p>
        <hr />

      </form>
    </div>

    <div id="signup-form">
      <form>
        <input type="email" id="signupEmail" placeholder="Enter your email" />
        <input type="text" id="signupName" placeholder="Choose username" />
        <input type="password" id="signupPassword" placeholder="Create password" />
        <input type="password" id="signupConfirmPassword" placeholder="Confirm Password" />
        <button type="button" class="btn signup" onclick="signup()">create account</button>
        <p>Clicking <strong>create account</strong> means that you are agree to our <a href="javascript:void(0)">terms of services</a>.</p>
        <hr />

      </form>
    </div>

  </div>
  <div class="modal fade" id="sendEmailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Send Password Email</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="email-div">
            <h4>Please Enter your email</h4>
            <div class="row">
              <div class="col-3">
                <label class="form-control">Email:</label>
              </div>
              <div class="col-9">
                <input type="text" id="sendEmailForPasswordReset" class="form-control">
              </div>
            </div>
          </div>

          <div id="message-div" style="display: none;">
            <h4>Please check your email.</h4>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="sendPasswordResetEmail()">Send</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="passwordResetModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="password-div">
            <h4>Please enter your new password</h4>
            <div class="row">
              <div class="col-3">
                <label class="form-control">New Password:</label>
              </div>
              <div class="col-9">
                <input type="password" id="newPassword" class="form-control">
              </div>
            </div>

            <div class="row">
              <div class="col-3">
                <label class="form-control">Confirm Password:</label>
              </div>
              <div class="col-9">
                <input type="password" id="confirmNewPassword" class="form-control">
              </div>
            </div>

          </div>

          <div id="password-message-div" style="display: none;">
            <h4 class="text-danger bg-black">Password has been changed.</h4>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="resetPassword()">Send</button>
        </div>
      </div>
    </div>
  </div>


  <!-- <?php
        $footer = $_SERVER['HTTP_HOST'];
        $footer = $srcurl . "footer.php";
        include($footer);
        ?> -->

  <script>
    $(document).ready(function() {
      setTimeout(function(){
        console.log($('#resetcode').val())
        if ($('#resetcode').val()) {
          $('#passwordResetModal').modal('show');
        }
      }, 3000);

    })

    function toggleSignup() {
      document.getElementById("login-toggle").style.backgroundColor = "#fff";
      document.getElementById("login-toggle").style.color = "#222";
      document.getElementById("signup-toggle").style.backgroundColor = "#3e7d8e";
      document.getElementById("signup-toggle").style.color = "#fff";
      document.getElementById("login-form").style.display = "none";
      document.getElementById("signup-form").style.display = "block";
    }

    function toggleLogin() {
      document.getElementById("login-toggle").style.backgroundColor = "#3e7d8e";
      document.getElementById("login-toggle").style.color = "#fff";
      document.getElementById("signup-toggle").style.backgroundColor = "#fff";
      document.getElementById("signup-toggle").style.color = "#222";
      document.getElementById("signup-form").style.display = "none";
      document.getElementById("login-form").style.display = "block";
    }
  </script>
  <script src="assets/js/apilinking.js"></script>


</body>

</html>