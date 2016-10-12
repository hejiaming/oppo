@extends("admin.base")


	@section("content")
		<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-calendar"></i>
			修改会员信息表
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">会员信息</a></li>
            <li class="active">修改会员信息</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- right column -->
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-plus"></i>会员信息---修改会员信息</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
               <form action="{{url('admin/op_member_detail')}}/{{$list->id}}" method="post" enctype="multipart/form-data" class="form-horizontal">
					{{ method_field('PUT') }}
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">昵称</label>
                      <div class="col-sm-4">
                        <input type="text" name="nick_name" value="{{$list->nick_name}}" class="form-control" id="inputEmail3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">性别</label>
                      <div class="col-sm-4">
          						<input type="radio" name="sex" value="w" @if($list->sex=='w') checked @endif />男
          						<input type="radio" name="sex" value="m" @if($list->sex=='m') checked @endif />女
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">年龄</label>
                      <div class="col-sm-4">
                        <input type="text" name="age" value="{{$list->age}}" class="form-control" id="inputEmail3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">邮箱</label>
                      <div class="col-sm-4">
                        <input type="email" name="email" value="{{$list->email}}" class="form-control" id="inputEmail3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">状态</label>
                      <div class="col-sm-4">
						<input type="radio" name="status" value="0" @if($list->status=='0') checked @endif />开启
						<input type="radio" name="status" value="1" @if($list->status=='1') checked @endif />关闭
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">头像</label>
                      <div class="col-sm-4">
                        <img src="../../uploads/s_{{$list->icon}}"/><input type="file" name="icon" value="">
                      </div>
                    </div>
					
                  </div><!-- /.box-body -->
                  <div class="box-footer">
				    <div class="col-sm-offset-2 col-sm-1">
						<button type="submit" class="btn btn-primary">修改</button>
                    </div>
					<div class="col-sm-1">
						<button type="reset" class="btn btn-primary">重置</button>
					</div>
                  </div><!-- /.box-footer -->
                </form>
				<div class="row"><div class="col-sm-12">&nbsp;</div></div>
              </div><!-- /.box -->
       
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
		
	@endsection