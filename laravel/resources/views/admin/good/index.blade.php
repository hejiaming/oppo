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
                  <h3 class="box-title"><i class="fa fa-th"></i> 商品列表</h3>
                  <a href="{{url('admin/good/create')}}"><button class="btn btn-primary" >添加商品</button></a>
                  <!--搜索框-->
                   <div class="box-tools">
                     <form action="{{ url('admin/good') }}" method="get">
                        <div class="input-group" style="width: 150px;">                      
                          <input type="text" name="good_name" class="form-control input-sm pull-right" placeholder="请输入商品名称"/>
                          <div class="input-group-btn">
                            <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                  </div>  
                  <!--搜索结束-->             
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-hove table-condensed table-hover">
                    <thead>
						<tr>
						  <th style="width:60px">ID</th>
						  <th>品名</th>
						  <th>类别</th>
						  <th>属性类别</th>
						  <th>描述</th>
						  <th>现价</th>
						  <th>原价</th>
						  <th>主图</th>
						  <th>收藏</th>
						  <th style="width: 100px">操作</th>
						</tr>
					</thead>
					
					<tbody>
					@foreach($list as $good)
                    <tr>
                      <td >{{ $good->good_id }}</td>
					            <td style="width:15%;">{{ $good->good_name }}</td>
                      <td style="width:10%;">{{ $good->good_pid }}</td>
                      <td style="width:10%">{{ $good->good_attr }}</td>
                      <td  style="width:20%;">{{ $good->good_dec }}</td>
                      <td style="width:10%;">{{ $good->good_price }}</td>
                      <td style="width:10%;">{{ $good->good_now_price }}</td>
                      <td style="width:60px;"><img src="{{ asset('uploads') }}/{{ $good->good_pic}}" width='50'/></td>
                      <td style="width:5%;">{{ $good->good_like }}</td>                      
                      <td style="width:30%;">
						  <a href="{{url('admin/good/size')}}/{{ $good->good_id }}"><button class="btn btn-xs btn-primary">规尺库</button></a> 
						  <a href="{{url('admin/good/detail')}}/{{ $good->good_id }}"><button class="btn btn-xs btn-success">详情</button></a>
						  <a href="{{url('admin/good/reg')}}/{{ $good->good_id }}"> <button class="btn btn-xs btn-success">审核</button></a> 
						  <a href=""> <button class="btn btn-xs btn-danger">编辑</button></a>
					  </td>
                    </tr>
					@endforeach
					</tbody>
                  </table>
                </div><!-- /.box-body -->

                <div class="box-footer clearfix">
                {!! $list->appends(['good_name' => $good_name])->render() !!}                 
                </div>
              </div><!-- /.box -->

              
              
            </div><!-- /.col -->
            
          </div><!-- /.row -->
         
        </section><!-- /.content -->

@endsection
@section('myjavascript')
 
        
@endsection