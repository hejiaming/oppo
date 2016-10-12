@extends('admin.base')
@section('content')
		<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            商品管理
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">商品管理</a></li>
            <li class="active">列表</li>
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
                  <h3 class="box-title"><i class="fa fa-plus"></i> 添加商品信息</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="{{url('admin\good')}}" method='post' class="form-horizontal"  enctype="multipart/form-data">					
					{{ csrf_field() }}
                  <div class="box-body">
					<div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">选择商品分类:</label>
                      <div class="col-sm-4">
                        <select type="text" class="form-control" id="inputEmail3" name="good_pid" placeholder="Input name">
							<option>请选择商品分类</option>
							@foreach($list as $v)
							<option value='{{ $v->type_id }}'>{{ $v->sort_name }}</option>
							@endforeach
						</select>
                      </div>
                    </div>
					         <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">选择商品吹牛分类:</label>
                      <div class="col-sm-4">
                        <select type="text" class="form-control" id="inputEmail3" name="good_attr" placeholder="Input name">
							<option>请选择属性分类</option>
							@foreach($attr as $a)
							<option value='{{ $a->attr_id }}'>{{ $a->attr_name }}</option>
							@endforeach
						</select>
                      </div>
                    </div>
             <!------------标签------------------>
          <div class="row">          
           
           
             <label for="inputEmail3" class="col-sm-2 control-label">请选择商品标签:</label>
           
            
            <div class="col-md-2">
              <div class="box box-danger collapsed-box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">风格</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div>
                      <div class="box-body no-padding">
                        <ul class="nav nav-pills nav-stacked">
                        @foreach($tag[0] as $t)
                          <li><input name='style' type="radio" value="{{ $t->tag_type }}" > {{ $t->tag_name }}</li>  
                        @endforeach                      
                        </ul>
                      </div><!-- /.box-body -->
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

             <div class="col-md-2">
              <div class="box box-info collapsed-box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">材质</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div>
                      <div class="box-body no-padding">
                        <ul class="nav nav-pills nav-stacked">
                            @foreach($tag[1] as $t)
                             <li><input name='material' type="radio" value="{{ $t->tag_type }}" > {{ $t->tag_name }}</li>  
                            @endforeach   
                        </ul>
                      </div><!-- /.box-body -->
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->   
             <div class="col-md-2">
              <div class="box box-primary collapsed-box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">元素</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div>
                      <div class="box-body no-padding">
                        <ul class="nav nav-pills nav-stacked">
                           @foreach($tag[2] as $t)
                             <li><input name='element' type="radio" value="{{ $t->tag_type }}" > {{ $t->tag_name }}</li>  
                            @endforeach 
                        </ul>
                      </div><!-- /.box-body -->
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->   

          </div>         
           <!------------标签------------------>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">商品名:</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputEmail3" name="good_name" placeholder="请输入商品名！">
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">商品说明:</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputEmail3" name="good_dec" placeholder="请输入商品描述">
                      </div>
                    </div>
					          <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">商品价格:</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputEmail3" name="good_price" placeholder="I请输入商品价格">
                      </div>
                    </div>
					           <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">商品图片:</label>
                      <div class="col-sm-4">
                        <input type="file" id="inputEmail3" name="good_pic" placeholder="Input name">
                      </div>
                    </div>
				          	<div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">商品状态:</label>
                      <div class="col-sm-4">
                         <input type="radio" name="status" value="0" checked> 未审核
                            <input type="radio" name="status" value="1"> 通过审核
                            <input type="radio" name="status" value="2"> 下架
                      </div>
                    </div>
					
                  </div><!-- /.box-body -->
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