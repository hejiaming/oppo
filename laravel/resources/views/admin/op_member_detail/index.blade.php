 @extends("admin.base")

	@section("content")
			<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            会员信息管理
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">会员信息</a></li>
            <li class="active">列表</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 会员信息管理</h3>
				  <div class="box-tools">
				  <form action="{{url('admin/op_member_detail')}}" method="get">
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
                      <th style="width:60px">ID</th>
                      <th>会员ID</th>
                      <th>性别</th>
                      <th>年龄</th>
                      <th>邮箱</th>
                      <th>昵称</th>
                      <th>头像</th>
                      <th>积分</th>
                      <th>等级</th>
                      <th>状态</th>
                      <th>注册时间</th>
                      <th>注册ip</th>
                      <th>上次登录时间</th>
                      <th style="width: 100px">操作</th>
                    </tr>
                    @foreach($list as $op_member_detail)
						<tr>
							<td>{{$op_member_detail->id}}</td>
							<td>{{$op_member_detail->uid}}</td>
							<td>{{$op_member_detail->sex}}</td>
							<td>{{$op_member_detail->age}}</td>
							<td>{{$op_member_detail->email}}</td>
							<td>{{$op_member_detail->nick_name}}</td>
							<td><a href="{{asset('uploads/user')}}/{{$op_member_detail->icon}}"><img src="{{asset('uploads/user')}}/m_{{$op_member_detail->icon}}">
							<td>{{$op_member_detail->intelgral}}</td>
							<td>{{$op_member_detail->level}}</td>
							<td>{{$op_member_detail->status==0?"开启":"禁用"}}</td>
							<td>{{$op_member_detail->reg_time}}</td>
							<td>{{$op_member_detail->reg_ip}}</td>
							<td>{{$op_member_detail->log_time}}</td>
							<td style="font-size:11px;"><form style="float:left;" action="{{url('admin/op_member_detail')}}/{{$op_member_detail->id}}" method="post">
                                   {{ method_field('DELETE') }}
                                   <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                   <input type="submit" value="删除">
								</form>
							<a style="color:black" href="{{url('admin/op_member_detail')}}/{{$op_member_detail->id}}/edit"><input type="submit" value="编辑"/></a>
						</tr>
				@endforeach
                  
                   
                   
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  {!! $list->appends($params)->render() !!}
                </div>
              </div>

            </div>
          </div>
         
        </section>
	@endsection
	