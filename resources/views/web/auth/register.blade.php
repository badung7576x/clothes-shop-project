<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ABC Shop Login</title>
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
<body class="hold-transition register-page">

    <div class="register-box">
        <div class="register-logo">
            <a href="#"><b>Shop </b>ABC</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Đăng ký tài khoản</p>

                <form action="{{route('post-register')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" style="background-image: none" placeholder="Họ tên" value="{{old("name", "")}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user @error('name') text-danger @enderror"></span>
                            </div>
                        </div>
                        @error('name')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" style="background-image: none" placeholder="Email" value="{{old("email", "")}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope @error('email') text-danger @enderror"></span>
                            </div>
                        </div>
                        @error('email')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" style="background-image: none" placeholder="Số điện thoại" value="{{old("phone_number", "")}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone @error('phone_number') text-danger @enderror"></span>
                            </div>
                        </div>
                        @error('phone_number')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" style="background-image: none" placeholder="Mật khẩu">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock @error('password') text-danger @enderror"></span>
                            </div>
                        </div>
                        @error('password')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="re_password" class="form-control @error('re_password') is-invalid @enderror" style="background-image: none" placeholder="Nhập lại mật khẩu">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock @error('re_password') text-danger @enderror"></span>
                            </div>
                        </div>
                        @error('re_password')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <a href="{{route('login')}}" class="text-center align-middle">Đã có tài khoản</a>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Đăng ký</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

{{--                <div class="social-auth-links text-center">--}}
{{--                    <p>- OR -</p>--}}
{{--                    <a href="#" class="btn btn-block btn-primary">--}}
{{--                        <i class="fab fa-facebook mr-2"></i>--}}
{{--                        Sign up using Facebook--}}
{{--                    </a>--}}
{{--                    <a href="#" class="btn btn-block btn-danger">--}}
{{--                        <i class="fab fa-google-plus mr-2"></i>--}}
{{--                        Sign up using Google+--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>

    <!-- jQuery -->
    <script src="{{asset("plugins/jquery/jquery.min.js")}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("admin/js/adminlte.min.js")}}"></script>

</body>
</html>
