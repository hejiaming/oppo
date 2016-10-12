@extends("admin.base")


	@section("content")
		<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-calendar"></i>
			修改轮播图信息表
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">轮播图信息</a></li>
            <li class="active">修改轮播图信息</li>
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
                  <h3 class="box-title"><i class="fa fa-plus"></i> 修改轮播图信息</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
               <form action="{{url('admin/op_carousel')}}/{{$list->id}}" method="post" enctype="multipart/form-data" class="form-horizontal">
					{{ method_field('PUT') }}
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">名称</label>
                      <div class="col-sm-4">
                        <input type="text" name="title" value="{{$list->title}}" class="form-control" id="inputEmail3">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">图片</label>
                      <div class="col-sm-4">
						<img src="../../uploads/m_{{$list->pic}}" id="imgShow" width="300" height="200" />
						<input type="file" name="pic" value="">

                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">链接地址</label>
                      <div class="col-sm-4">
                        <input type="text" name="url" value="{{$list->url}}" class="form-control" id="inputEmail3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">轮播次序</label>
                      <div class="col-sm-4">
                        <input type="text" name="order" value="{{$list->order}}" class="form-control" id="inputEmail3">
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