@extends('admin.base')
	@section('content')
<section class="content-header">
          <h1>
            友情连表
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">网络配置信息</a></li>
            <li class="active">列表</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 网站配置信息管理</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width:60px">网站ID</th>
                      <th>网站名字</th>
                      <th>状态</th>
                      <th>网站关键字</th>
                      <th>网站说明</th>
                      <th>网站版权</th>
					            <th>网站图标</th>
                      <th style="width: 100px">操作</th>
                    </tr>
					@foreach($list as $value)
					<tr>
						<td>{{$value->con_id}}</td>
						<td>{{$value->con_name}}</td>
            <td>{{$value->con_status==0?"开启":"关闭"}}</td>
						<td>{{$value->con_keywords}}</td>
						<td>{{$value->con_des}}</td>
						<td>{{$value->con_copyright}}</td>
						<td><img src="../uploads/s_{{$value->con_logo}}"></td>
						<td><button onclick="doDel({{$value->con_id}})" class="btn btn-xs btn-danger">删除</button> 

                <a href="{{url('admin/config')}}/{{$value->con_id}}/edit"><button class="btn btn-xs btn-primary">编辑</button> </td>

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
		 <form action="" style="display:none;" id="mydeleteform" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="hidden" name="_method" value="DELETE">
        </form>
		@endsection
		
		 @section("myscript")
      <script type="text/javascript">
            function doDel(id){
                if(confirm('确定要删除吗？')){
                    $("#mydeleteform").attr("action","{{url('admin/config')}}/"+id).submit(); 
                }
            }
      </script>
    @endsection
		