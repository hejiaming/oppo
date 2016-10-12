@extends('admin.base')
    @section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-calendar"></i>
			商家回复管理
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">评论回复管理</a></li>
            <li class="active">发表回复信息</li>
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
                  <h3 class="box-title"><i class="fa fa-plus"></i> 添加回复信息</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="{{url('admin/comment')}}?id={{$list->com_id}}" method="post" class="form-horizontal">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <div class="box-body">
                   
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">订单号：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="" name="order_id" readonly value="{{$list->order_id}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">会员姓名：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="" name="mem_id" readonly value="{{$list->mem_id}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">商品：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="" name="goods_id" readonly value="{{$list->goods_id}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">商品评分：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="" name="goods_point" readonly value="{{$list->goods_point}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">评论时间：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="" name="com_time" readonly value="{{date("Y-m-d H:i:s",$list->com_time)}}">
                      </div>
                    </div>
					         <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">评价内容：</label>
                      <div class="col-sm-4">
                        <textarea name="content" id="" cols="30" rows="10" class="form-control" id="inputPassword3" placeholder="" readonly>{{$list->content}}</textarea>
                      </div>
                    
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">卖家回复：</label>
                      <div class="col-sm-4">
                        <textarea name="content" id="" cols="30" rows="10" class="form-control" id="inputPassword3" placeholder=""></textarea>
                      </div>
                    
                    </div>
				
                  </div><!-- /.box-body -->
                  <div class="box-footer">
				    <div class="col-sm-offset-2 col-sm-1">
						<button type="submit" class="btn btn-primary">提交</button>
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