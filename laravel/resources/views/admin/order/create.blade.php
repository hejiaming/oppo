@extends('admin.base')
  @section('content')
<section class="content-header">
          <h1>
            订单回收站
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 订单管理</a></li>
            <li><a href="#">订单回收站</a></li>
            <li class="active">列表</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 订单回收管理</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr >
                      <th style="width:100px">订单编号</th>
                      <th>用户名</th>
                      <th>付款状态</th>
                      <th>收货地址</th>
                      <th>总价</th>
                      <th style="width: 100px">操作</th>
                    </tr>
                    @foreach($list as $value)
                    <tr align="center">
                      <td>{{$value->order_id}}</td>
                      <td>{{$value->mem_id}}</td>
                      <td>{{$value->pay_status}}</td>
                      <td>{{$value->add_id}}</td>
                      <td>{{$value->xj}}</td>
                      <td><button class="btn btn-xs btn-danger" onclick="doDel({{$value->order_id}})">删除</button> 
                      <button class="btn btn-xs btn-primary">恢复</button> </td>
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
        <form action="" style="display:none;" id="mydeleteform" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="hidden" name="_method" value="DELETE">
        </form>
    @endsection

     @section("myscript")
      <script type="text/javascript">
            function doDel(id){
                if(confirm('确定要删除吗？')){
                    $("#mydeleteform").attr("action","{{url('admin/order')}}/"+id).submit(); 
                }
            }
      </script>
    @endsection