<?php
//订单明细控制器
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        //
        $list = DB::table("op_order")->where("order_id","=",$id)->get();
    
        
    }

   /* public function show($id)
    {
        echo "年后";
        $list = DB::table("op_order")->where("order_id","=",$id)->get();
        return view("admin.order.details",["list"=>$list]);
    }*/
}
