<?php 

include '../class.php';

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <body class="hold-transition login-page">
        <div class="login-box">
          <div class="login-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
          </div><!-- /.login-logo -->
          <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form role="form" method="POST">
              <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="uid">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="pass">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="row">
                <div class="col-xs-8">
                  <div class="checkbox icheck">
                  </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                  <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Sign In</button>
                </div><!-- /.col -->
              </div>
              <div class="">
              <b>
                
                user admin@gmail.com
                <br>
                pass admin
              </b>
              </div>

            </form>

            <?php 
//jika tombol login ditekan, maka objek pengguna menjalankan fungsi login_pengguna()
            if (isset($_POST['login']))
            {
             $teslogin=$pengguna->login_pengguna($_POST['uid'],$_POST['pass']);
 //jika username dan pass benar maka masuk ke index.php
             if ($teslogin)
              {
              echo "<script>alert('login sukses');</script>";
              echo "<script>window.location='index.php?halaman=berita';</script>";
            }
 //jika tidak, kemabli ke form login
            else
            {
              echo "<script>alert('login gagal');</script>";
              echo "<script>window.location='login.php';</script>";
            }

          }

          ?>

        </div><!-- /.login-box-body -->
      </div><!-- /.login-box -->

      <!-- jQuery 2.1.4 -->
      <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
      <!-- Bootstrap 3.3.5 -->
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <!-- iCheck -->
      <script src="plugins/iCheck/icheck.min.js"></script>
      <script>
        $(function () {
          $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
        });
      </script>
    </body>
    </html>
