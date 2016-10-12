@extends('admin.base')
  @section('content')
<section class="content-header">
          <h1>
            友情链接表
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">链接信息</a></li>
            <li class="active">列表</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
               <!-- search form -->
               <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 友情链接管理</h3>
				  <div class="box-tools">
				  <form action="{{url('admin/link')}}" method="get">
						<div class="input-group" style="width: 150px;">
						  <input type="text" name="link_name" class="form-control input-sm pull-right" placeholder="链接名称"/>
						  <div class="input-group-btn">
							<button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
						  </div>
						</div>
					</form>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width:60px;">id</th>
                      <th>链接名称</th>
                      <th>链接地址</th>
                      <th>链接图片</th>
                      <th>链接状态</th>
                      <th>链接顺序</th>
                      <th style="width: 100px">操作</th>
                    </tr>
                    @foreach($list as $value)
                    <tr align="center">
                      <td>{{$value->link_id}}</td>
                      <td>{{$value->link_name}}</td>
                      <td>{{$value->link_url}}</td>
                      <td><img src="../uploads/s_{{$value->link_pic}}"></td>
                      <td>{{$value->link_status==0?"开启":"禁用"}}</td>
                      <td>{{$value->order}}</td>
                      <td><button class="btn btn-xs btn-danger" onclick="doDel({{$value->link_id}})">删除</button> 
                      <a href="{{url('admin/link')}}/{{$value->link_id}}/edit"><button class="btn btn-xs btn-primary">编辑</button></a></td>
                    </tr>
                  @endforeach
                  </table>
                </div><!-- /.box-body -->
				 <div class="box-footer clearfix">
                  {!! $list->appends($params)->render() !!}
                </div>
              </div><!-- /.box -->

              
              
            </div><!-- /.col -->
            
          </div><!-- /.row -->
         
        </section><!-- /.content -->
       
    @endsection

    