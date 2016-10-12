@extends('admin.base')
@section('content')
		<script type="text/javascript" charset="utf-8" src="{{ asset('/myadmin/ueditor/ueditor.config.js' )}}"></script>
		<script type="text/javascript" charset="utf-8" src="{{ asset('/myadmin/ueditor/ueditor.all.min.js' )}}"></script>				
		<script type="text/javascript" charset="utf-8" src="{{ asset('/myadmin/ueditor/lang/zh-cn/zh-cn.js' )}}"></script>	
		<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            商品信息管理
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">商品详细信息管理</a></li>
            <li class="active">详情添加</li>
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
                  <h3 class="box-title"><i class="fa fa-plus"></i> 添加商品细节参数整体效果等信息</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
               
					<div class="box-body">
						<label for="inputEmail3" class="col-sm-2 control-label" style="text-align:right;">商品名:</label>
						  <div class="col-sm-10">
						  {{ $list->good_name}}
						  </div>					
					</div>
				
				
				<!--form action="/admin/article" method="post" class="mws-form" enctype="multipart/form-data"-->
				  <form action="{{url('admin\good\detail')}}" method='post' class="form-horizontal" enctype="multipart/form-data">
						<div >
							<div class="box-body">
								<label for="inputEmail3" class="col-sm-2 control-label" style="text-align:right;">商品描述:</label>
								  <div class="col-sm-10">
									<textarea name="good_dec" class="small" rows="4" cols='80'></textarea>
								  </div>					
							</div>		
							<div class="box-body">
								<label for="inputEmail3" class="col-sm-2 control-label" style="text-align:right;">商品详情</label>
								  <div class="col-sm-10">
									<a class="btn btn-primary" onclick="addGoodsDet(this);">细节做工</a>
									<a class="btn btn-primary" onclick="addGoodsDet(this);">商品实拍</a>
									<a class="btn btn-primary" onclick="addGoodsDet(this);">穿着效果</a>
									<a class="btn btn-primary" onclick="addGoodsDet(this);">整体款式</a>								
								  </div>					
							</div>	
							<div class="box-body">
								<label class="col-sm-2 control-label" style="text-align:right;"></label>
								<div class="col-sm-10" id="goodsDetailw">
									<script name="good_det" id="editor" type="text/plain" style="width:750px;height:300px;"></script>
								</div>
							</div>
							<script type="text/javascript">
								var ue = UE.getEditor('editor', {toolbars: [
									['fullscreen', 'source', 'undo', 'redo', 'bold','simpleupload']
								]});
							</script>
						</div>
						
					  <div class="box-footer"> 
						{{csrf_field()}}
						<input type="hidden" name="good_id" value="{{ $list->good_id }}"/>
						<div class="col-sm-offset-2 col-sm-1">
							<button type="submit" class="btn btn-primary">添加</button>
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

@section('myscript')
<script>
function addGoodsDet(ob){
	

	switch($(ob).text()){
		case '0' :
			alert(0);
		break;
	}
}

</script>
@endsection


