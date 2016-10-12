 @extends("admin.base")

	@section("content")
			<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            用户管理列表
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">用户信息</a></li>
            <li class="active">列表</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 用户信息管理→浏览信息</h3>
				  <div class="box-tools">
				  <form action="{{url('admin/op_admin')}}" method="get">
						<div class="input-group" style="width: 150px;">
						  <input type="text" name="nick_name" class="form-control input-sm pull-right" placeholder="输入昵称"/>
						  <div class="input-group-btn">
							<button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
						  </div>
						</div>
					</form>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width:60px">编号</th>
                      <th>账号</th>
                      <th>昵称</th>
                      <th>密码</th>
                      <th>类别</th>
                      <th>状态</th>
                      <th>头像</th>
                      <th>创建时间</th>
                      <th>创建ip</th>
                      <th>上次登录时间</th>
                      <th>上次登录ip</th>
                      <th style="width: 91px">操作</th>
                    </tr>
                    @foreach($list as $op_admin)
						<tr>
							<td>{{$op_admin->id}}</td>
							<td>{{$op_admin->name}}</td>
							<td>{{$op_admin->nick_name}}</td>
							<td>{{$op_admin->password}}</td>
							<td>{{$op_admin->type}}</td>
							<td>{{$op_admin->status==0?"开启":"禁用"}}</td>
							<td><a href="{{asset('uploads/admin')}}/{{$op_admin->icon}}"><img src="{{asset('uploads/admin')}}/m_{{$op_admin->icon}}">
							<td>{{$op_admin->careate_time}}</td>
							<td>{{$op_admin->create_ip}}</td>
							<td>{{$op_admin->last_log_time}}</td>
							<td>{{$op_admin->last_log_ip}}</td>
							<td><form action="{{url('admin/op_admin')}}/{{$op_admin->id}}" method="post">
                                   {{ method_field('DELETE') }}
                                   <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                   <input type="submit" value="删除">
								</form>
							<a href="{{url('admin/op_admin')}}/{{$op_admin->id}}/edit"><input type="submit" value="编辑"/></a></td>
						</tr>
				@endforeach
                  
                   
                   
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  {!! $list->appends($params)->render() !!}
                </div>
              </div><!-- /.box -->

              
              
            </div><!-- /.col -->
            
          </div><!-- /.row -->
         
        </section><!-- /.content -->
		
	@endsection
	