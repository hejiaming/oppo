 @extends("admin.base")

	@section("content")
			<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            板块管理
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">板块管理</a></li>
            <li class="active">版块管理</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 版块管理→浏览板块</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width:60px">编号</th>
                      <th>图片信息</th>
                      <th>子ID</th>
                      <th>关系</th>
                      <th>分类ID</th>
                      <th style="width: 121px">操作</th>
                    </tr>		
					@foreach($list as $op_tab)
					<span style="display:none;">
					{{ $m=substr_count($op_tab->path,',') }}	
					{{ $tc=str_pad('&nbsp;',($m-1)*60,'&nbsp;') }}
					</span>
						<tr>
							<td>{{$op_tab->id}}</td>
							@if($m>1)
							<td>{{ $tc }}<img src="{{asset('myadmin/icon/dirsecond.gif')}}">&nbsp;&nbsp;<a href="{{asset('uploads/leibietu')}}/{{$op_tab->big_pictrue}}"><img src="{{asset('uploads/leibietu')}}/m_{{$op_tab->big_pictrue}}"></td>
							@else
							<td>{{ $tc }}<img src="{{asset('myadmin/icon/dirfirst.gif')}}">&nbsp;&nbsp;<a href="{{asset('uploads/leibietu')}}/{{$op_tab->big_pictrue}}"><img src="{{asset('uploads/leibietu')}}/m_{{$op_tab->big_pictrue}}"></td>
							@endif
							<td>{{$op_tab->zid}}</td>
							<td>{{$op_tab->path}}</td>
							<td>{{$op_tab->pxid}}</td>
							<td><form action="{{url('admin/op_tab')}}/{{$op_tab->id}}" method="post">
                                   {{ method_field('DELETE') }}
                                   <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                   <input type="submit" value="删除">
								</form>
							<a href="{{url('admin/op_tab')}}/{{$op_tab->id}}/edit"><input type="submit" value="编辑"/></a>
						</tr>
					@endforeach
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                </div>
              </div><!-- /.box -->

              
              
            </div><!-- /.col -->
            
          </div><!-- /.row -->
         
        </section><!-- /.content -->
		
	@endsection
	