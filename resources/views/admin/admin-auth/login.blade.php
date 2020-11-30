<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ABC Shop Admin Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("plugins/fontawesome-free/css/all.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset("plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("admin/css/adminlte.min.css")}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Shop</b> ABC</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <div class="login-box-msg">
                <div class="text-center">
                    @if(session('error'))
                    <span class="text-danger">{{ session('error') }}</span>
                    @endif
                </div>
            </div>

            <form action="{{route('admin.post-login')}}" method="post">
                @csrf


                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @endif" style="background-image: none" placeholder="Email" value="{{old("email", "")}}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope @error('email') text-danger @endif"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @endif" style="background-image: none" placeholder="Password" >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock @error('password') text-danger @endif"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-success btn-block">Đăng nhập</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{asset("plugins/jquery/jquery.min.js")}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("admin/js/adminlte.min.js")}}"></script>

</body>
</html>
