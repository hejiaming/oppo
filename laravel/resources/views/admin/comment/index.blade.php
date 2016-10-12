@extends('admin.base')
	@section('content')
<section class="content-header">
          <h1>
            商品评论表
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">评论信息</a></li>
            <li class="active">列表</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 会员评论信息管理</h3>
                  <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target=".fade" style="float:right">回复查看</button>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width:60px">id</th>
                      <th>订单id</th>
                      <th>会员id</th>
                      <th>商品id</th>
                      <th>商品评分</th>
                      <th>评论内容</th>
                      <th>评论时间</th>
                      <th>评论iP</th>
                      <th>评论嗮图</th>
                      <th>操作</th>
                    </tr>
                    @foreach($list as $value)
                    <tr>
                      <td>{{$value->com_id}}</td>
                      <td>{{$value->order_id}}</td>
                      <td>{{$value->mem_id}}</td>
                      <td>{{$value->goods_id}}</td>
                      <td>{{$value->goods_point}}</td>
                      <td>{{$value->content}}</td>
                      <td>{{date("Y-m-d H:i:s",$value->com_time)}}</td>
                      <td>{{$value->com_ip}}</td>
                      <td>{{$value->com_pic}}</td>
                     
                      <td><a href="{{url('admin/comment/'.$value->com_id)}}"><button class="btn btn-xs btn-danger">回收站</button></a> </a>
                      <a href="{{url('admin/comment/reply/'.$value->com_id)}}"><button class="btn btn-xs btn-primary">商家回复</button></a>
                      
                      </td>
                      </tr>
                      @endforeach                    
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
				              {!! $list->render() !!}
                </div>
              </div>
            </div>
          </div>
        </section>
		@endsection

    <!--用户信息-->
     <!-- modal静态框 -->
    <div class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="gridSystemModalLabel">用户信息</h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                    <div class="box">
                      <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-th"></i> 用户信息管理</h3>
                      </div><!-- /.box-header -->
                      <div class="box-body">
                        <table class="table table-bordered">
                          <tr>
                            <th style="width:100px">订单id</th>
                            <th>卖家回复内容</th>
                            <th>卖家回复时间</th>
                          
                          </tr>
                          @foreach($data as $value)
                          <tr>
                            <td>{{$value->order_id}}</td>
                            <td>{{$value->replay_content}}</td>
                            <td>{{date("Y-m-d H:i:s",$value->ctime)}}</td>
                            
                          </tr>
                          @endforeach
                        </table>
                        
                      </div><!-- /.box-body -->
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            <button type="button" class="btn btn-primary">提交</button>
          </div>
        </div>
      </div>
    </div>

<script>
        $("#mymodal").click(function(){
            $("div.fade").modal({backdrop:'static'});
        });
    </script>