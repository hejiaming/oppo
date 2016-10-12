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
                  <h3 class="box-title"><i class="fa fa-plus"></i> 添加商品分类信息</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="{{url('admin\type')}}" method='post' class="form-horizontal">
					           <input type="hidden" name="pid" value="{{ $_GET['pid'] or 0 }}">
					           <input type="hidden" name="path" value="{{ $_GET['path'] or '0,' }}">
					          {{ csrf_field() }}
                  <div class="box-body">
				      	<div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">已经选择的父类名:</label>
                      <div class="col-sm-4">
					        <label for="inputEmail3" class="control-label">{{ $_GET['name'] or '根类' }}</label>
                      </div>
                    </div>
                    <div class="form-group" >
                      <label for="inputEmail3" class="col-sm-2 control-label">重新选择位置添加:</label>
                      <div class="col-sm-4" id="type_s">
                            <select name="pid_c" onchange="seonchange(this)">
                                <option value="0" checked>改变选择</option>
                                @foreach($type_s as $ts)

                                    <option value="{{ $ts->type_id}}">{{ $ts->sort_name}}</option>
                                @endforeach                                                           
                            </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">添加类名:</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputEmail3" name="sort_name" placeholder="Input name">
                      </div>
                    </div>
                    <script>
                    function seonchange(ob){

                    $(ob).nextAll("select").remove();    
                     var tid=$(ob).val();
                   
                     $.ajax({
                        url:"{{ url('admin/type/gettype')}}?tid="+tid,
                        type:"get",
                        dataType:"json",
                        success:function(res){
                            
                            var op = eval(res);
                           if(op.length>0){
                              var str ='<select name="pid_c" onchange="seonchange(this)">'
                              for(i=0;i<op.length;i++){
                               // alert(op[i].type_name)
                                str += '<option value='+op[i].type_id+'>'+op[i].sort_name+'</option>';
                              }
                              str += '</select>';

                              $(str).appendTo("#type_s");
                            }
                        }
                     });
                    }


                    </script>
					
					<div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">上架:</label>
                      <div class="col-sm-4">
                         <input type="radio" name="status" value="1" checked> 是
                            <input type="radio" name="status" value="0"> 否
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