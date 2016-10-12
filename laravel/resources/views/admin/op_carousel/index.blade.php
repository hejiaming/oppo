 @extends("admin.base")

	@section("content")
			<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            轮播图管理列表
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">轮播图浏览</a></li>
            <li class="active">列表</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 轮播图管理→浏览轮播信息</h3>
				  <div class="box-tools">
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width:60px">编号</th>
                      <th>名称</th>
                      <th>图片</th>
                      <th>链接地址</th>
                      <th>轮播次序</th>
                      <th style="width: 91px">操作</th>
                    </tr>
                    @foreach($list as $op_carousel)
						<tr>
							<td>{{$op_carousel->id}}</td>
							<td>{{$op_carousel->title}}</td>
							<td><a href="{{asset('uploads/lunbo')}}/{{$op_carousel->pic}}"><img src="{{asset('uploads/lunbo')}}/m_{{$op_carousel->pic}}">
							<td>{{$op_carousel->url}}</td>
							<td>{{$op_carousel->order}}</td>
							
							<td><form action="{{url('admin/op_carousel')}}/{{$op_carousel->id}}" method="post">
                                   {{ method_field('DELETE') }}
                                   <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                   <input type="submit" value="删除">
								</form>
							<a href="{{url('admin/op_carousel')}}/{{$op_carousel->id}}/edit"><input type="submit" value="编辑"/></a></td>
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
	