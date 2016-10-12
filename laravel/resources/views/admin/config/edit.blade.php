@extends('admin.base')
    @section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-calendar"></i>
			修改配置管理
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">修改配置管理</a></li>
            <li class="active">修改配置信息</li>
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
                  <h3 class="box-title"><i class="fa fa-plus"></i> 修改配置信息</h3>
                </div><!-- /.box-header -->
                <form action="{{url('admin/config')}}/{{$list->con_id}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                 {{ method_field('PUT') }}
                                 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">网站标题：</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="" name="con_name" value="{{$list->con_name}}">
                  </div>
                </div>
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">网站关键字：</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="" name="con_keywords" value="{{$list->con_keywords}}">
                  </div>
                </div>
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">网站说明：</label>
                  <div class="col-sm-4">
                  <textarea name="con_des" cols="52" rows="10" id="inputPassword3">{{$list->con_des}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">网站图标：</label>
                  <div class="col-sm-4">
                  <img src="../../../uploads/s_{{$list->con_logo}}" alt="">
                    <input type="file" name="upic" class="form-control" id="inputEmail3" placeholder="" value="">
                  </div>
                </div>
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">网站版权：</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="" name="con_copyright" value="{{$list->con_copyright}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">网站状态：</label>
                  <div class="col-sm-4">
                    <select type="text" name="con_status" id="level" class="form-control" >
                      <option value="0" @if ($list->con_status=='0') selected @endif />&nbsp;&nbsp;开启</option>
                      <option value="1" @if ($list->con_status=='1') selected @endif>&nbsp;&nbsp;关闭</option>
                    </select>
                  </div>
                </div>
           
              </div>
              <div class="box-footer">
              <div class="col-sm-offset-2 col-sm-1">
              <button type="submit" class="btn btn-primary">添加</button>
                </div>
             <div class="col-sm-1">
            <button type="submit" class="btn btn-primary">重置</button>
               </div>
              </div>
            </form>
				<div class="row"><div class="col-sm-12">&nbsp;</div></div>
              </div><!-- /.box -->
       
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
    @endsection