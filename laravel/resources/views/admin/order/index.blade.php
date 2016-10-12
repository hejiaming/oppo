@extends('admin.base')
	@section('content')
<section class="content-header">
          <h1>
            信息订单表
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 订单管理</a></li>
            <li><a href="#">订单信息</a></li>
            <li class="active">列表</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 订单信息管理</h3>
                  <div class="box-tools">
          <form action="{{url('admin/order')}}" method="get">
            <div class="input-group" style="width: 150px;">
              <input type="text" name="order_id" class="form-control input-sm pull-right" placeholder="输入订单编号"/>
              <div class="input-group-btn">
              <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr >
                      <th style="width:100px">订单编号</th>
                      <th>商品</th>
                      <th>单价</th>
                      <th>数量</th>
                      <th>实付款(元)</th>
                      <th>交易状态</th>
                      <th>订单状态</th>

                      <th style="width: 100px">操作</th>
                    </tr>
                    @foreach($list as $value)
                    <tr align="center">
                      <td>{{$value->order_id}}</td>
                      <td>{{$value->mem_id}}</td>
                      <td>{{$value->xj}}</td>
                      <td>{{$value->add_id}}</td>
                      <td>{{$value->add_id}}</td>
                      <td>{{$value->order_status==0?"正常":"交易取消"}}</td>
                      <td>{{$value->order_status}}</td>
                      <td style="width:180px;"><a href="{{url('admin/order/'.$value->order_id)}}"><button class="btn btn-xs btn-danger">加入回收站</button> 
                      <a href="{{url('admin/order')}}/{{$value->order_id}}/edit"><button class="btn btn-xs btn-primary">编辑</button> </a>
                      <a href="{{url('admin/order/details/'.$value->order_id)}}"><button class="btn btn-xs btn-primary">明细</button> </a>
                      </td>
                    </tr>
                   @endforeach
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                   {!! $list->appends($params)->render() !!}
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
                    $("#mydeleteform").attr("action","{{url('admin/link')}}/"+id).submit(); 
                }
            }
      </script>
    @endsection