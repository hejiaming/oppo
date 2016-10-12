<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use DB;
class ConfigController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //加载配置列表页
	   $list = DB::table("op_config")->get();
	 
        return view("admin.config.index",["list"=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		
         return view("admin.config.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  //执行网站添加
    {
         //判断是否有上传文件
       if($request->hasFile('upic')){

           //获取文件上传信息
           $file = $request->file("upic");

           //获取上传文件的后缀名;
           $ext = $file->getClientOriginalExtension();
          
           //随机一个文件名;
           $filename = time().rand(1000,999).".".$ext;

           //执行文件移动；
           $newfile = $file->move("./uploads/",$filename);
          //执行缩放
           $img = Image::make("./uploads/".$filename)->resize(193,48);
           $img->save("./uploads/s_".$filename); //另存为

           //接收数据,并插入数据库;
           $data = ['con_name'=>$request->con_name,'con_keywords'=>$request->con_keywords,'con_des'=>$request->con_des,'con_logo'=>$filename,'con_status'=>$request->con_status,'con_copyright'=>$request->con_copyright];
           // var_dump($data);
           $m = DB::table("op_config")->insert($data);
           if($m>0){
              echo "发布成功";
            }else{
              echo "发布失败";
           }

       }
            return redirect("admin/config");
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
        $list = DB::table("op_config")->where("con_id","=",$id)->first();
        return view("admin.config.edit",["list"=>$list]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)  //执行修改
    {
        ////判断是否有上传文件

          if($request->hasFile('upic')){

        //获取文件上传信息
        $file = $request->file("upic");
        //获取上传文件的后缀名;
        $ext = $file->getClientOriginalExtension();
        // var_dump($ext);
        //随机一个文件名;
        $filename = time().rand(1000,999).".".$ext;

        //执行文件移动；
        $newfile = $file->move("./uploads/",$filename);
       //执行缩放
        $img = Image::make("./uploads/".$filename)->resize(193,48);
        $img->save("./uploads/s_".$filename); //另存为

         $m = DB::table("op_config")->where("con_id",$id)->first();
         @unlink("./uploads/".$m->con_logo);
         @unlink("./uploads/s_".$m->con_logo);

         
         $data = ['con_name'=>$request->con_name,'con_keywords'=>$request->con_keywords,'con_des'=>$request->con_des,'con_logo'=>$filename,'con_status'=>$request->con_status,'con_copyright'=>$request->con_copyright];
         //var_dump($data);die;
         $m = DB::table("op_config")->where("con_id",$id)->update($data);
       if($m>0){
           echo "修改成功";

       }else{
           echo "修改失败";
       } 
        
          }
      return redirect("admin/config");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)  //执行删除
    {   
        $m = DB::table("op_config")->where("con_id",$id)->first();
        @unlink("./uploads/".$m->con_logo);
        @unlink("./uploads/s_".$m->con_logo);

        $m = DB::table('op_config')->where("con_id","=",$id)->delete();
        if($m>0){
            echo "删除成功";
        }else{
            echo "删除失败";
        }
        return redirect("admin/config");
    }
}
