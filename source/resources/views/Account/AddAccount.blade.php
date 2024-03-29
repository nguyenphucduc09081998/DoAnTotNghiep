<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->

    <link rel="stylesheet" href="{{asset('lib/adminlte/css/adminlte.min.css')}}">
    <!-- iCheck -->
    <!-- <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css"> -->
    <link rel="stylesheet" href="{{asset('lib/iCheck/square/blue.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition register-page">
    <div class="register-box"  style="margin-top:10px;">
        <div class="register-logo">
            <a href="#"><b>DUC NGUYEN</b></a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>

                <form action="#" method="post">
                    <div class="form-group has-feedback">

                        <span class="fa fa-user form-control-feedback"></span>
                        <input type="text" class="form-control" placeholder="Full name">
                    </div>
                    <div class="form-group has-feedback">
                        <span class="fa fa-envelope form-control-feedback"></span>
                        <input type="email" class="form-control" placeholder="Email">

                    </div>
                    <div class="form-group has-feedback">
                        <span class="fa fa-lock form-control-feedback"></span>
                        <input type="password" class="form-control" placeholder="Password">

                    </div>
                    <div class="form-group has-feedback">
                        <span class="fa fa-lock form-control-feedback"></span>
                        <input type="password" class="form-control" placeholder="Retype password">

                    </div>
                    <div class="form-group has-feedback">
                        <span class="fa fa-lock form-control-feedback"></span>
                        <input type="textarea" class="form-control" placeholder="Address">

                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="checkbox icheck">
                                <label>
                                    <!-- <input type="checkbox"> I agree to the <a href="#">terms</a> -->
                                    <a href="#" class="text-center">I already have a membership</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!-- <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fa fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fa fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->

                <!-- <a href="login.html" class="text-center">I already have a membership</a> -->
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <!-- <script src="../../plugins/jquery/jquery.min.js"></script> -->
    <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <!-- <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script href="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- iCheck -->
    <!-- <script src="../../plugins/iCheck/icheck.min.js"></script> -->
    <script href="{{asset('lib/iCheck/icheck.min.js')}}"></script>
    <script>
        //   $(function () {
        //     $('input').iCheck({
        //       checkboxClass: 'icheckbox_square-blue',
        //       radioClass   : 'iradio_square-blue',
        //       increaseArea : '20%' // optional
        //     })
        //   })
    </script>
</body>

</html>