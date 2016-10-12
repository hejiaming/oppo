@extends('admin.base')
    @section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-calendar"></i>
			友情链接管理
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">友情链接管理</a></li>
            <li class="active">修改链接信息</li>
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
                  <h3 class="box-title"><i class="fa fa-plus"></i> 修改链接信息</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="{{url('admin/link')}}/{{$list->link_id}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                 {{ method_field('PUT') }}
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">链接名称：</label>
                      <div class="col-sm-4">
                        <input type="text" name="link_name" class="form-control" id="inputEmail3" placeholder="名称" value="{{$list->link_name}}">
                      </div>
                    </div>
                    
                   <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">链接地址：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="地址" name="link_url" value="{{$list->link_url}}">
                      </div>
                    </div>
                   <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">链接图片：</label>
                      <div class="col-sm-4">
                      <img src="../../../uploads/s_{{$list->link_pic}}" alt="">
                        <input type="file" placeholder="图片" name="upic" value="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">链接顺序：</label>
                      <div class="col-sm-4">
                        <input type="text" name="order" class="form-control" id="inputEmail3" placeholder="顺序" value="{{$list->order}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">是否禁用：</label>
                      <div class="col-sm-4">
                        <input type="radio"  name="link_status" value="1" @if($list->link_status=="1") checked @endif >是  &nbsp; &nbsp; &nbsp; &nbsp;
                        <input type="radio"  name="link_status" value="0" @if($list->link_status=="0") checked @endif>否
                      </div>
                    </div>
                  </div>
                  <div class="box-footer">
            <div class="col-sm-offset-2 col-sm-1">
            <button type="submit" class="btn btn-primary">修改</button>
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