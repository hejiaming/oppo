@extends("admin.base")


	@section("content")
		<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-calendar"></i>
			添加轮播图信息表
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">轮播图信息</a></li>
            <li class="active">添加轮播图信息</li>
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
                  <h3 class="box-title"><i class="fa fa-plus"></i>用户轮播图管理→添加轮播图</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="{{url('admin/op_carousel')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
					     <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">名称</label>
                      <div class="col-sm-4">
                        <input type="text" name="title" class="form-control" id="inputEmail3">
                      </div>
                    </div>
					         <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">图片</label>
                      <div class="col-sm-4" id="imgdiv">
                       <img id="imgShow" width="300" height="200" />
                        <input type="file" id="up_img" name="pic"/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">链接地址</label>
                      <div class="col-sm-4">
                        <input type="text" name="url" class="form-control" id="inputEmail3">
                      </div>
                    </div>
					
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">轮播次序</label>
                      <div class="col-sm-4">
						<input type="text" name="order" class="form-control">
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
				    <div class="col-sm-offset-2 col-sm-1">
						<button type="submit" class="btn btn-primary">添加</button>
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

  <script src="{{asset('myadmin/myscript/uploadPreview.js')}}" type="text/javascript"></script>
    <script>
       window.onload = function () { 
            new uploadPreview({ UpBtn: "up_img", DivShow: "imgdiv", ImgShow: "imgShow" });
        }
    </script>
