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
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 商品分类信息管理</h3>
                  <a href="{{ url('admin/type/create')}}"><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">添加分类</button></a>                
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-condensed table-hover">
                    <tr>
                      <th style="width:60px">ID</th>
                      <th>分类名</th>
                      <th>父ID</th>
                      <th>路径</th>
                      <th>状态</th>
                      <th style="width: 100px">操作</th>
                    </tr>
					@foreach($list as $type)
					<span style="display:none;">
					{{ $m=substr_count($type->path,',') }}					
					{{ $tc=str_pad('&nbsp;',($m-1)*30,'&nbsp;') }}
					</span>
                    <tr>
                      <td>{{ $type->type_id }}</td>
					  @if($m>1)
							<td>{{ $tc }}<img src="{{asset('myadmin/icon/dirsecond.gif')}}">&nbsp;&nbsp;{{ $type->sort_name }}</td>
					  @else
							<td>{{ $tc }}<img src="{{asset('myadmin/icon/dirfirst.gif')}}">&nbsp;&nbsp;{{ $type->sort_name }}</td>
					  @endif
                      <td style="width:60px;">{{ $type->pid }}</td>
                      <td  style="width:150px;">{{ $type->path }}</td>
                      <td style="width:60px;">{{ $type->status }}</td>
                      <td style="width:150px;">
						  <a href="{{url('admin/type/create')}}?pid={{ $type->type_id}}&name={{ $type->sort_name}}&path={{ $type->path}}"><button class="btn btn-xs btn-primary">添加</button></a> 
						  <button class="btn btn-xs btn-primary">审核</button> 
						  <a href="{{url('admin/type')}}/{{$type->type_id}}/edit"> <button class="btn btn-xs btn-danger">编辑</button></a>
					  </td>
                    </tr>
					@endforeach
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div><!-- /.box -->

              
              
            </div><!-- /.col -->
            
          </div><!-- /.row -->
         
        </section><!-- /.content -->

@endsection
@section('myjavascript')
 
        
@endsection