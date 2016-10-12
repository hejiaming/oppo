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
                  <h3 class="box-title"><i class="fa fa-plus"></i> 编辑商品分类信息</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="{{url('admin/type')}}/{{ $list->type_id}}" method='post' class="form-horizontal">					
					{{ csrf_field() }}
					{{ method_field('PUT') }}
                  <div class="box-body">
					<div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">被修改的分类名:</label>
                      <div class="col-sm-4">
					  <label for="inputEmail3" class="control-label">
					  @foreach($fpath as $v)
					  {{ $v->sort_name}}&nbsp;&nbsp/
					  @endforeach
					  </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">编辑类名:</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputEmail3" name="sort_name" value="{{ $list->sort_name}}">
                      </div>
                    </div>
                    
					
					<div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">上架:</label>
                      <div class="col-sm-4">
                         <input type="radio" name="status" value="1" @if($list->status==1) checked @endif> 是
                            <input type="radio" name="status" value="0" @if($list->status==0) checked @endif> 否
                      </div>
                    </div>
					
                  
					
                  </div><!-- /.box-body -->
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