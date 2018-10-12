@extends('master_ad')

@section('content')
    <section class="content-header" style="display: none;">
      <h1>
        Danh sách Users
      </h1>
      <div class="col-md-12" style="margin-top: 10px;margin-left: -15px;">
            {{--<a href=""><button class="btn btn-primary"><i class="fa fa-plus"></i> Add Doctor</button></a>--}}
            <a href="" class="btn btn-app">
                <i class="fa fa-edit"></i> THÊM MỚI
            </a>
        </div>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-3">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tài khoản</h3>
                    </div>
                    <!-- /.login-logo -->
                    <div class="login-box-body">
                        <input name="" id="user_id" value="0" type="hidden">
                        <form action="{{url('/user/users')}}" method="post" id="frm-user">
                            <input name="" id="flag" value="0" type="hidden">
                            {!! csrf_field() !!}
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Họ Và Tên" name="name" id="name">
                                <span class="fa fa-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Email" name="email" id="email">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Link" name="link" id="link">
                                <span class="fa fa-phone form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="password" name="password" class="form-control" placeholder="Password" id="password">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="password" name="repassword" class="form-control" placeholder="Repassword" id="repassword">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label>Cung cấp quyền</label>
                                </br>
                                @foreach($roles as $item)
                                    <p>
                                        <input type="checkbox" id="role_{{$item['id']}}" name="role[]" value="{{$item['name']}}"> {{$item['name']}}
                                    </p>
                                @endforeach
                            </div>
                            <div class="form-group has-feedback">
                                <!-- /.col -->
                                <div style="text-align: right; margin-top: 10px;" id="btn_role">
                                    <button class="btn btn-primary" id="btn-add-user">Thêm</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                    </div>
                    <!-- /.login-box-body -->
                </div>
            </div>
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title" style="opacity: 0">Responsive Hover Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-bordered" style="text-align: center;vertical-align: middle">
                                <thead>
                                <tr>
                                    <th style="text-align: center;vertical-align: middle">#</th>
                                    <th style="text-align: center;vertical-align: middle">Tên</th>
                                    <th style="text-align: center;vertical-align: middle">Email</th>
                                    <th style="text-align: center;vertical-align: middle">Số điện thoại</th>
                                    <th style="text-align: center;vertical-align: middle">Linh</th>
                                    <th style="text-align: center;vertical-align: middle">Ngày tạo</th>
                                    <th style="text-align: center;vertical-align: middle">Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $item)
                                    <tr>
                                        <td>{{ $stt++ }}</td>
                                        <td>{{$item['name']}}</td>
                                        <td>{{$item['email']}}</td>
                                        <td>096685494</td>
                                        <td><a href="{{url('buy-sell/'.$item['link'])}}">{{$item['link']}}</a></td>
                                        <td>{{$item['created_at']}}</td>
                                        <td>
                                            <button class="btn btn-xs btn-success edit" style="margin-right:5px;">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button class="btn btn-xs btn-danger">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
  	</section>

@stop
@push('scripts')
    <script>
      var url = `{!! url('') !!}`;
      $('#btn-add-user').click(function(event){
          event.preventDefault();
          var name = $('#name').val();
          var email = $('#email').val();
          var link = $('#link').val();
          var password = $('#password').val();
          
          var data_sigup = {name:name,email:email,password:password,link:link}
          console.log(data_sigup);
          $.ajax({
                  url : url + '/api/auth/signup',
                  type:'POST',
                  data:data_sigup,
                  success:function(data){
                    if(data.status == 'ok'){
                      location.reload();
                    }
                  }
              })
      });
    </script>
@endpush