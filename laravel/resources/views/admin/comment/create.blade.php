@extends('admin.base')
  @section('content')
<section class="content-header">
          <h1>
            商品评论回收站
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
                  <h3 class="box-title"><i class="fa fa-th"></i> 会员评论信息回收站</h3>
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
                      <td><a href="{{url('admin/comment/'.$value->com_id)}}"><button class="btn btn-xs btn-danger">恢复</button> </a>
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
    @endsection