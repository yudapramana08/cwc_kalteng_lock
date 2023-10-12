<?php $this->simple_login->cek_login(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="icon" href="../../favicon.ico">

  <title>E2</title>
  <link rel="stylesheet" href="<?php echo config_item('base_url') ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo config_item('base_url') ?>assets/dist/css/bootstrap.min.css">

  <!-- sweetalert  -->
  <script src="<?php echo config_item('base_url') ?>assets/sweetalert/sweetalert.min.js"></script>
  <!-- sweetalert  -->
  <script src="<?php echo config_item('base_url') ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo config_item('base_url') ?>assets/bootstrap/js/jquery.slim.min.js"></script>
  <link rel="stylesheet" href="<?php echo config_item('base_url') ?>assets/style-login.css">

  <style>
    body,
    html {
      height: 100%;
    }

    .bg {
      /* The image used */
      background-image: url("<?php echo config_item('base_url') ?>assets/x.webp");

      /* Full height */
      height: 100%;

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .form-signin {
      max-width: 330px;
      padding-top: 15px;
      margin: 0 auto;
    }

    .form-signin .form-signin-heading,
    .form-signin .checkbox {
      margin-bottom: 10px;
    }

    .form-signin .checkbox {
      font-weight: normal;
    }

    .form-signin .form-control {
      position: relative;
      height: auto;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      padding: 10px;
      font-size: 16px;
    }

    .form-signin .form-control:focus {
      z-index: 2;
    }

    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 0px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }


    i.glyphicon,
    span.glyphicon {
      color: #1A9DD0;

    }

    button.btn.btn-lg.btn-primary.btn-block {
      background-color: #1A9DD0;
    }
  </style>
</head>


<body class="bg">

  <div class="container">
    <!-- <i class="fa fa-spinner fa-spin spin_s" aria-hidden="true"></i> -->
    <?php if ($this->session->flashdata('sukses')) { ?>
      <script>
        swal("Good job!", "<?php echo $this->session->flashdata('sukses'); ?>", "success");
      </script>
    <?php } else if ($this->session->flashdata('error')) { ?>
      <script>
        swal("Upss..!!", "<?php echo $this->session->flashdata('error'); ?>", "error");
      </script>
    <?php } else if ($this->session->flashdata('session_expired')) {  ?>
      <script>
        swal("Upss..!!", "<?php echo $this->session->flashdata('session_expired'); ?>", "info");
      </script>
    <?php }  ?>


    <div class="row justify-content-md-center" style="margin-top: 15rem;padding-left: 3rem;padding-right: 3rem;">
      <div class="card bg-light rounded-lg" style="width: 50rem;">
        <div class="card-body " style="padding-left: 5rem;padding-right: 5rem;">
          <form class="form-signin" action="<?php echo site_url() . 'login/aksi_login' ?>" method="post">
            <center>
              <h2 class="form-signin-heading" style="font-family: 'Pacifico', cursive;font-size: 40px;"><span class="glyphicon glyphicon glyphicon-qrcode"></span> CWC </h2>
            </center>
            <div class="input-group" style="height: 45px;">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input style="height: 45px;" type="text" id="usernames" name="username" class="form-control" placeholder="username" autocomplete="off" autofocus="on">
            </div><br>

            <div class="input-group" style="height: 45px;">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input style="height: 45px;" type="password" id="password" name="password" class="form-control" placeholder="password" autocomplete="off" autofocus="on">
            </div>
            <br />

            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          </form>
          <div class="row justify-content-md-center text-center mb-5">
            <div class="col col-lg-6">
              <h5 class="form-signin" style="color: black; font-family: 'Pacifico', cursive;">Copyright &copy; <a href="https://www.instagram.com/enterprise2inf/" data-toggle="modal" data-target="#contact">Enterprise 2</a></h5>
            </div>
          </div>
        </div>
      </div>
    </div>




  </div>






  </script>
  <script type="application/javascript">
    /** After windod Load */
    $(window).bind("load", function() {
      window.setTimeout(function() {
        $(".alert").fadeTo(1500, 0).slideUp(500, function() {
          $(this).remove();
        });
      }, 500);
    });
  </script>









</body>

</html>