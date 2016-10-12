<?php
//收货人地址控制器
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class AddressController extends CommonController

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()  //加载地址信息
    {
        $list = DB::table("op_member_address")->get();
        return view("admin.address.index",["list"=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //加载编辑地址表
        $list1 = DB::table("op_member_address")->get();
        foreach($list1 as $list11){
            $list111 = $list11;
        }
        return view("admin.address.edit",["list1"=>$list111]);
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
        //修改信息
        //获取修改信息
        $data = ['postalcode'=>$request->postalcode,'address'=>$request->address,'name'=>$request->name,'phone'=>$request->phone];
        $m = DB::table("op_member_address")->where("id",$id)->update($data);
        if($m>0){
                $info = "修改成功！";
            }else{
                $info = "修改失败！";
            }

        return view("admin.info",["info"=>$info]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $m = DB::table("op_member_address")->where("id",$id)->first();
        //var_dump($m);die;
        // var_dump($m->icon);
        $m = DB::table("op_member_address")->where("id",$id)->delete();
        if($m>0){
            $info = "删除成功！";
        }else{
            $info = "删除失败！";
        } 
        return view("admin.info",["info"=>$info]);
    }
}
