<?php
  //商品评论控制器
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class CommentController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()  //加载商品评论
    {
        // $list = DB::select("select op_replay.*,op_comment.* from op_comment,op_replay where op_replay.order_id=op_comment.com_id");
          $data = DB::table("op_replay")->orderBy("order_id","asc")->get();
          $value = DB::table("op_comment");
          $list = $value->where("com_status","=",0)->paginate(3);
      
        return view("admin.comment.index",["list"=>$list],["data"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       $list = DB::select("select * from op_comment where com_status=1");
        return view("admin.comment.create",["list"=>$list]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  //加载商家回复的内容
    {
        //接收数据

        $id = $_GET['id'];
        $list = DB::table("op_comment")->where("com_id","=",$id)->first();
        $data =['replay_content'=>$request->content,'ctime'=>time(),"order_id"=>$list->order_id]; 
        $valu = DB::table("op_replay")->where("order_id","=",$list->order_id)->insert($data);
        return redirect("admin/comment");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //加载回收站信息
    {   
        $list = DB::table("op_comment")->where("com_id","=",$id)->first();
        if($list->com_status==1){
        
             $list = DB::update("update op_comment set com_status=0 where com_id=$id");
        
        }else{
             $list = DB::update("update op_comment set com_status=1 where com_id=$id");
        }

        return redirect("admin/comment");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function reply($id)  //加载卖家回复视图
    {   
       $list = DB::table("op_comment")->where("com_id","=",$id)->first();
        return view("admin.comment.reply",["list"=>$list]);
    }

    // public function admin_replay()
    // {
    //     echo "nihao";
    // }
}
