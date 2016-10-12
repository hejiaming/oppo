@extends("admin.base")


	@section("content")
		<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-calendar"></i>
			修改模板表
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">模板信息</a></li>
            <li class="active">修改模板信息</li>
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
                  <h3 class="box-title"><i class="fa fa-plus"></i> 修改模板信息</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
               <form action="{{url('admin/op_tab')}}/{{ $list->id}}" method='post' class="form-horizontal" enctype="multipart/form-data">         
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                  <div class="box-body">
					<div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">被修改的分类名:</label>
                      <div class="col-sm-4">
					<label for="inputEmail3" class="control-label">
					@if($fpath != '根类')
					  @foreach($fpath as $v)
					  {{ $v->big_pictrue}}&nbsp;&nbsp
					  @endforeach
					@else
					  {{ $fpath}}
					@endif
					</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">编辑类名</label>
                      <div class="col-sm-4" id="imgdiv">
                       <img src="{{ $list->big_pictrue}}" id="imgShow" width="150" height="71" />
                        <input type="file" id="up_img" name="big_pictrue"/>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
				  <script src="{{asset('myadmin/myscript/uploadPreview.js')}}" type="text/javascript"></script>
					<script>
					   window.onload = function () { 
							new uploadPreview({ UpBtn: "up_img", DivShow: "imgdiv", ImgShow: "imgShow" });
						}
					</script>
                  <div class="box-footer">
					<div class="col-sm-offset-2 col-sm-1">
					<button type="submit" class="btn btn-primary">修改</button>
							</div>
				  <div class="col-sm-1">
					<button type="submit" class="btn btn-primary">重置</button>
				  </div>
                  </div><!-- /.box-footer -->
                </form>
				<div class="row"><div class="col-sm-12">&nbsp;</div></div>
              </div><!-- /.box -->
       
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
		
	@endsection