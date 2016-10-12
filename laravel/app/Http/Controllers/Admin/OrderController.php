<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class OrderController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //加载订单
        $pdo = DB::table("op_order");
        $pdo->where("status",0);
        $params=array();
        if(!empty($_GET['order_id'])){
            $pdo->where("order_id","like","%{$_GET['order_id']}%");
            $params['order_id']=$_GET['order_id'];
        }
        //->get();
        // $list=$data->paginate(5);
        $list = $pdo->paginate(3);
        return view("admin.order.index",["list"=>$list,"params"=>$params]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载订单回收站
        $data = DB::table("op_order");
        $data->where("status","=",1);
        $list = $data->paginate(2);
        return view("admin.order.create",["list"=>$list]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)   //执行加入回收站
    {
        $list = DB::update("update op_order set status=1 where order_id=$id");
        return redirect("admin/order");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $list = DB::table("op_order")->where("order_id","=",$id)->first();
        return view("admin.order.edit",["list"=>$list]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = ["xj"=>$request->xj,'order_status'=>$request->order_status];
        $list = DB::table("op_order")->where("order_id","=",$id)->update($data);
        return redirect("admin/order");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)   //执行订单删除
    {
        //
        DB::table("op_order")->where("order_id","=",$id)->delete();
        return redirect("admin/order/create");
    }

    public function details($id)  //执行订单详情加载
    {
        $list = DB::table("op_order")->where("order_id","=",$id)->get();
        return view("admin.order.details",["list"=>$list]);
    }
}
