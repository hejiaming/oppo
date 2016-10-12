@extends('admin.base')
@section('content')
		<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            商品信息管理
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">商品属性信息管理</a></li>
            <li class="active">完善</li>
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
                  <h3 class="box-title"><i class="fa fa-plus"></i> 添加商品规格尺寸属性信息</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
               
					<div class="box-body">
						<label for="inputEmail3" class="col-sm-2 control-label" style="text-align:right;">商品名:</label>
						  <div class="col-sm-10">
							{{ $goods->good_name }}
						  </div>					
					</div>
					
					<div class="box-body">
						<label for="inputEmail3" class="col-sm-2 control-label" style="text-align:right;">添加类名:</label>
						  <div class="col-sm-10">
						   @foreach($size as $s)			
							<button class="btn btn-primary" onclick="domymodal(this);">{{ $s->size }}</button>
							@endforeach
						  </div>					
					</div>
					
                    <form action="{{url('admin\good\size\story')}}" method='post' class="form-horizontal" enctype="multipart/form-data">
						{{ csrf_field() }}
						<input type="hidden" name="good_id" value="{{ $goods->good_id}}"/>
						<table class="table table-bordered table-hover table-condensed" id="size_style_table_f">
							<thead>
								<tr style="text-align:center;" id="y_size_table">
									
									<th style="width:15%;">尺码</th>
									<th style="width:15%;">颜色</th>
									<th style="width:15%;">库存</th>
									<th style="width:30%;">添加图片</th>								
								</tr>
							</thead>
							
							<tbody>
								
							</tbody>
						</table>
						  <div class="box-footer">
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
<div class="modal" role="dialog" id="myModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">
					添加属性
					<button class="close" data-dismiss="modal">&times;</button>
				</h4>
			</div>
			
			<div class="table-responsive">
				<!--form id="do_images_submit" method="post" action="" enctype="multipart/form-data"-->
				
				<table id="size_style_table_t" class="table table-striped table-bordered table-hover">
					<thead>
						
						<tr>
							<td colspan="2" style="width:30%;text-align:right;">尺寸</td>
							<td colspan="3"><input id="mysetsizes"  type='text' name="size_b" value="s" readonly/></td>
						</tr>
						<tr>
							<td colspan="2" style="width:30%;text-align:right;">颜色</td>
							<td colspan="3">
							<select name='color_b'>
								<option  value='红色' ><span style="color:red;">红色</span></option>
								<option  value='黄色'/><span style="color:yellow;">黄色</span></option>
								<option value='纯色' selected/>纯色</option>
								<option  value='蓝色' ><span style="color:blue;">蓝色</span></option>
								<option  value='白色'>白色</option>
								<option  value='紫色' ><span style="color:rgb(128,0,128);">紫色</span></option>
								<option  value='橙色' /<span style="color:#fc0;">橙色</span></option>							
							</select>

							</td>
						</tr>
						<tr>
							<td colspan="2" style="width:30%;text-align:right;">库存</td>
							<td colspan="3"><input type='number' name="count_b" value='0'/></td>
						</tr>						
					</thead>
					<tbody>
					
					</tbody>
				</table>
				
			</div>		
			<div class="modal-footer">
				<button class="btn btn-default" data-dismiss="modal">取消</button>
				<button class="btn btn-default" data-dismiss="modal">添加属性</button>
			</div>
			<!--iframe id='frameFile' name='frameFile' style='display: none;'></iframe-->
			 <iframe id='frameFile' name='frameFile' style='display: none;'></iframe>
		</div>
	</div>
</div>
<script>
	
	//表示当整个页面加载完毕之后执行
	
		function domymodal(ob){
			$('#myModal').on('shown.bs.modal',function(){
				//
				
				$("#mysetsizes").val($(ob).html());
								
			});
			$('#myModal').on('hide.bs.modal',function () {
				
				sizeadd();
			});
			
			$('#myModal').on('hidden.bs.modal',function () {				
				
				$("#size_style_table_t input").val('');				
			});
			$('#myModal').modal({
				backdrop:'static',		
				show:true					
			});
		}
		
		//添加表格信息
			function sizeadd(){
				//阻止重复
				var _strf = '';
				if($("#size_style_table_t input[name='size_b']").val()==''){
					return;
				}
				_strf = '<tr>'+'<td><input type="text" name="size[]" value="'+$("#size_style_table_t input[name='size_b']").val()+'"></td>'+'<td><input type="text" name="color[]" value="'+$("#size_style_table_t select[name='color_b']").val()+'"/></td>'+'<td><input type="text" name="count[]" value="'+$("#size_style_table_t input[name='count_b']").val()+'"/></td>'+'<td><input type="file" name="img[]"></td></tr>';
				//alert(_strf);
				$("#size_style_table_t input[name='size_b']").val('');
				$(_strf).appendTo("#size_style_table_f");
			}
			
</script>

@endsection