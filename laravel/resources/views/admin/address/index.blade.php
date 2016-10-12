@extends('admin.base')
	@section('content')
<section class="content-header">
          <h1>
            会员地址表
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">地址信息</a></li>
            <li class="active">列表</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 会员地址信息管理</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th>编号</th>
                      <th>省,市,区</th>
                      <th>邮政编码</th> 
                      <th>街道地址</th>
                      <th>收货人姓名</th>
                      <th>手机</th>
                      <th style="width: 100px">操作</th>
                    </tr>
                    @foreach($list as $value) 
                    <tr>
                      <td>{{$value->id}}</td>
                      <td>{{$value->status}}</td>
                      <td>{{$value->postalcode}}</td>
                      <td>{{$value->address}}</td>
                      <td>{{$value->name}}</td>
                      <td>{{$value->phone}}</td>
                      <td><form action="{{url('admin/address')}}/{{$value->id}}" method="post">
                                   {{ method_field('DELETE') }}
                                   <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                   <input type="submit" value="删除">
                </form> 
                      <a style="color:black" href="{{url('admin/address')}}/{{$value->id}}/edit"><input type="submit" value="编辑"/></a></td>
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
              </div>
            </div>
          </div>
        </section>
		@endsection