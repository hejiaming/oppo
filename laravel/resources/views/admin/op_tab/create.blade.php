@extends('admin.base')
@section('content')
		<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            板块管理
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">板块管理</a></li>
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
                  <h3 class="box-title"><i class="fa fa-plus"></i> 添加父类类别</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="{{url('admin/op_tab')}}" method='post' class="form-horizontal" enctype="multipart/form-data">
					           <input type="hidden" name="zid" value="{{ $_GET['zid'] or 0 }}">
					           <input type="hidden" name="path" value="{{ $_GET['path'] or '0,' }}">
							      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <div class="box-body">
				  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">已经选择的父类名:</label>
                      <div class="col-sm-4">
					        <label for="inputEmail3" class="control-label">根类</label>
                      </div>
                    </div>
                    <div class="form-group" >
                      <label for="inputEmail3" class="col-sm-2 control-label">重新选择位置添加:</label>
                      <div class="col-sm-4" id="type_s">
                            <select name="pid_c" onchange="seonchange(this)">
                                <option value="0" checked>改变选择</option>
                                @foreach($list3 as $ts)
								
                                    <option value="{{ $ts->id}}">{{ $ts->big_pictrue}}</option>
                                @endforeach                                                           
                            </select>
					  </div>
					</div>
					 <div class="form-group" >
					 <label for="inputEmail3" class="col-sm-2 control-label">选择位置:</label>
					  <div class="col-sm-4" id="type_s">
							<select name="pxid" onchange="seonchange(this)">
                                <option value="0" checked>选择位置</option>
                                    <option value="0">父类</option> 
									<option value="1">子左大图1</option>                    
                                    <option value="2">子右2</option>                 
                                    <option value="3">子右3</option>
                                    <option value="4">子右4</option>
                                    <option value="5">子中5</option>
                                    <option value="6">子中6</option>
                                    <option value="7">子中7</option>
                            </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">添加标签</label>
                      <div class="col-sm-4" id="imgdiv">
                       <img id="imgShow" width="150" height="71" />
                        <input type="file" id="up_img" name="op_picture"/>
                      </div>
                    </div>
                    <script>
                    function seonchange(ob){

                    $(ob).nextAll("select").remove();    
                     var tid=$(ob).val();
                   
                     $.ajax({
                        url:"{{ url('admin/op_tab/gettab')}}?tid="+tid,
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
					<script src="{{asset('myadmin/myscript/uploadPreview.js')}}" type="text/javascript"></script>
					<script>
					   window.onload = function () { 
							new uploadPreview({ UpBtn: "up_img", DivShow: "imgdiv", ImgShow: "imgShow" });
						}
					</script>
					
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