@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Setting</h3>
                    </div>
                    <div class="card-body">

                        <p>Cài đặt đường dẫn đến sau khi người dùng đăng nhập</p>
                        <form id="setting-url" method="post">
                            <div class="input-group input-group-sm">
                                <input type="url" name="redirect-url" id="redirect-url" class="form-control" value="{{$url ? $url->url : ""}}">
                                <span class="input-group-append">
                                    <button type="submit" class="btn btn-info btn-flat">Cài đặt</button>
                                </span>
                            </div>
                        </form>
                        <!-- /input-group -->
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </section>
    </div>
    <script>

        document.querySelector('form#setting-url').addEventListener('submit', (event) => {
            event.preventDefault();
            urlSettingSubmit();
        });

        function urlSettingSubmit(){
            $.ajax({
                url: "{{route('admin.setting.url')}}",
                type:'post',
                data: {
                    _token: '{{ csrf_token() }}',
                    url: $('#redirect-url').val(),
                },
                success:function (result){
                    if(result.status === true) {
                        var Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
                        toastr.success('Cài đặt thành công');
                    }
                }
            });
        }
    </script>
@endsection
