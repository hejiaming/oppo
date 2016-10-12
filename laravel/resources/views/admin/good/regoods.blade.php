@extends('admin.base')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            商品信息管理
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">商品审核</a></li>
            <li class="active">审核详情</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 商品审核</h3>
                                 
                </div><!-- /.box-header -->
                <div class="box-body">
                  <h3>商品基本情况</h3>
                  <table class="table table-bordered table-hove table-condensed table-hover">
                    <thead>
                      <tr>
                        <th style="width:60px">ID</th>
                        <th>品名</th>
                        <th>类别</th>
                        <th>属性类别</th>
                        <th>描述</th>
                        <th>现价</th>
                        <th>原价</th>
                        <th>主图</th>
                        <th>收藏</th>           
                        <th>销量</th>           
                        <th>状态</th>           
                      </tr>
                    </thead>
          
                    <tbody>
                  
                      <tr>
                        <td >{{ $goods->good_id }}</td>
                        <td style="width:15%;">{{ $goods->good_name }}</td>
                        <td style="width:10%;">{{ $goods->good_pid }}</td>
                        <td style="width:10%">{{ $goods->good_attr }}</td>
                        <td  style="width:18%;">{{ $goods->good_dec }}</td>
                        <td style="width:8%;">{{ $goods->good_price }}</td>
                        <td style="width:8%;">{{ $goods->good_now_price }}</td>
                        <td style="width:60px;"><img src="{{ asset('uploads') }}/{{ $goods->good_pic}}" width='50'/></td>
                        <td style="width:5%;">{{ $goods->good_like }}</td>  
                        <td style="width:5%;">{{ $goods->good_sales }}</td>  
                        <td style="width:5%;">{{ $goods->good_status }}</td>  
                      </tr>
                  
                    </tbody>
                  </table>
                </div><!-- /.box-body -->

                <div class="box-footer clearfix">
                <div class="box-body">
                  <h3>商品规格、尺寸、图片</h3>
                  <table class="table table-bordered table-hover table-condensed" id="size_style_table_f" width="80%">
                    <thead>
                      <tr style="text-align:center;" id="y_size_table">                        
                        <th style="width:15%;">尺码</th>
                        <th style="width:15%;">颜色</th>
                        <th style="width:15%;">库存</th>                       
                        <th style="width:30%;">商品图例</th>                
                      </tr>
                    </thead>
                        @foreach($styles as $style)
                          <tr>
                              <td> {{ $style->good_size }}</td>
                              <td> {{ $style->good_color }}</td>
                              <td> {{ $style->good_count }}</td>                              
                              <td><img width='50' src="{{ asset('/uploads') }}/{{ $style->good_pic }}"/></td>

                          </tr>

                        @endforeach
                        <tr>
                            <td>商品详情</td>
                            <td colspan='3'>{{ $goodsdet->good_dec}}</td>
                        </tr>                  
                  </table>

                </div><!-- /.box-body -->
                <div class="box-body">
                   {!! $goodsdet->good_det !!}  
                </div>
                <div class="box-footer clearfix">
                 
                </div>
              </div><!-- /.box -->
             
               <div class="box-footer">
                  <form action="{{ url('admin/goodsreg') }}/{{ $goods->good_id }}" method="post"> 
                      {{ csrf_field() }}                
                    <div class="col-sm-offset-4 col-sm-2">
                      <button type="submit" class="btn btn-primary">审核通过</button>
                    </div>
                    <div class="col-sm-2">
                      <button type="reset" class="btn btn-primary">重置</button>
                    </div>
                  </form>
                </div><!-- /.box-footer -->
                
            </div><!-- /.col -->
            
          </div><!-- /.row -->
         
        </section><!-- /.content -->

@endsection
@section('myscript')
 
        
@endsection