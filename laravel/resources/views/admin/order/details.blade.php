@extends('admin.base')
	@section('content')
<section class="content-header">
          <h1>
            订单明细表
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 订单管理</a></li>
            <li><a href="#">订单明细</a></li>
            <li class="active">列表</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 订单明细管理</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr >
                      <th style="width:100px">订单编号</th>
                      <th style="width:100px">当前状态</th>
                    </tr>
                   @foreach($list as $value) 
                  <tr>
                    <td>{{$value->order_id}}</td>
                    <td>{{$value->pay_status==0?"未支付":"已支付"}}</td>
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".fade">用户信息</button></td>
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".fadea">商品清单</button></td>
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
    @section('myscript')
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
                            <th style="width:100px">收货人</th>
                            <th>收货地址</th>
                            <th>收货邮编</th>
                            <th>联系电话</th>
                          </tr>
                          @foreach($list as $value)
                          <tr>
                            <td>{{$value->order_id}}</td>
                            <td>北京育容教育园区</td>
                            <td>10000</td>
                            <td>15090133921</td>
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

<!--商品详情-->


 <!-- modal静态框 -->
    <div class="modal fadea" role="dialog" aria-labelledby="gridSystemModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="gridSystemModalLabel">商品信息</h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                    <div class="box">
                      <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-th"></i> 商品信息管理</h3>
                      </div><!-- /.box-header -->
                      <div class="box-body">
                        <table class="table table-bordered">
                          <tr>
                            <th>商品</th>
                            <th>单价</th>
                            <th>数量</th>
                            <th>交易状态</th>
                            <th>订单额</th>
                            <th>图片</th>
                            <th>颜色</th>
                            <th>尺码</th>
                          </tr>
                          @foreach($list as $value)
                          <tr>
                            <td>1001</td>
                            <td>{{$value->xj}}</td>
                            <td>男</td>
                            <td>20</td>
                            <td>20</td>
                            <td>20</td>
                            <td>20</td>
                            <td>lamp138</td>
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
            <button type="button" class="btn btn-primary">登录</button>
          </div>
        </div>
      </div>
    </div>


    <script>
        $("#mymodal").click(function(){
            $("div.fade").modal({backdrop:'static'});
        });
   
        $("#mymodal").click(function(){
            $("div.fadea").modal({backdrop:'static'});
        });
    </script>
@endsection