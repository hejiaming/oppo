@extends('admin.base')
    @section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-calendar"></i>
			网络配置管理
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">网络配置管理</a></li>
            <li class="active">添加网络信息</li>
          </ol>
        </section>

        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-plus"></i> 添加网络配置信息</h3>
                </div>
                <form action="{{url('admin/config')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <div class="box-body">
				        <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">网站标题：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="" name="con_name" value="">
                      </div>
                    </div>
					         <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">网站关键字：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="" name="con_keywords" value="">
                      </div>
                    </div>
					         <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">网站说明：</label>
                      <div class="col-sm-4">
                      <textarea name="con_des" cols="52" rows="10" id="inputPassword3"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">网站图标：</label>
                      <div class="col-sm-4">
                        <input type="file" name="upic" class="form-control" id="inputEmail3" placeholder="" value="">
                      </div>
                    </div>
					         <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">网站版权：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="" name="con_copyright" value="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">网站状态：</label>
                      <div class="col-sm-4">
              					<select type="text" name="con_status" id="level" class="form-control" >
              						<option value="1" >&nbsp;&nbsp;开启</option>
              						<option value="0" >&nbsp;&nbsp;关闭</option>
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
              </div>
       
            </div>
          </div>  
        </section>
    @endsection
	