<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use DB;
class LinkController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //加载友情链接显示页
        $data = DB::table("op_link");
		
		//搜索
		$params = array();
		if(!empty($_GET['link_name'])){
			$data->where("link_name","like","%{$_GET['link_name']}%");
			$params['link_name']=$_GET['link_name'];
		}
		
        $list = $data->paginate(3);
        return view("admin.link.index",['list'=>$list,'params'=>$params]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载添加友情链接
        
        return view("admin.link.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)    //执行添加操作
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
            $newfile = $file->move("./uploads/link",$filename);
           //执行缩放
            $img = Image::make("./uploads/link".$filename)->resize(70,50);
            $img->save("./uploads/link/s_".$filename); //另存为

            //接收数据,并插入数据库;
            $data = ['link_name'=>$request->link_name,'link_url'=>$request->link_url,'link_pic'=>$filename,'link_status'=>$request->link_status,'order'=>$request->order];
            $m = DB::table("op_link")->insert($data);
            if($m>0){
                echo "发布成功";
            }else{
                echo "发布失败";
            }

        }
             return redirect("admin/link");

}
    

  
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
    public function edit($id)   //加载修改页面
    {
        //
        $list = DB::table("op_link")->where("link_id","=",$id)->first();
        return view("admin.link.edit",['list'=>$list]);
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
      $img = Image::make("./uploads/".$filename)->resize(70,50);
      $img->save("./uploads/s_".$filename); //另存为

       $m = DB::table("op_link")->where("link_id",$id)->first();
      
       @unlink("./uploads/link".$m->link_pic);
       @unlink("./uploads/link/s_".$m->link_pic);
     $data = ['link_name'=>$request->link_name,'link_url'=>$request->link_url,'link_pic'=>$filename,'link_status'=>$request->link_status,'order'=>$request->order];
     $m = DB::table("op_link")->where("link_id",$id)->update($data);
     if($m>0){
            $info = "修改成功！";
        }else{
            $info = "修改失败！";
        } 
        
      
        }

    return redirect("admin/link");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)  //加载删除
    {
        $m = DB::table("op_link")->where("link_id",$id)->first();
        @unlink("./uploads/".$m->link_pic);
        @unlink("./uploads/s_".$m->link_pic);

        $m = DB::table("op_link")->where("link_id",$id)->delete();
        if($m>0){
            $info = "删除成功！";
        }else{
            $info = "删除失败！";
        } 
        return view("admin.info",["info"=>$info]);
    }

}
