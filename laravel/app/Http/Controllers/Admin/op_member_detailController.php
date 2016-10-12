<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use Intervention\Image\ImageManagerStatic as Image;
use DB;
class op_member_detailController extends CommonController
{
    //浏览信息
    public function index()
    {	
		//分页查看信息
		$data = DB::table("op_member_detail");
		//搜索
		$params=array();
		if(!empty($_GET['nick_name'])){
			$data->where("nick_name","like","%{$_GET['nick_name']}%");
			$params['nick_name']=$_GET['nick_name'];
			
		}
		//->get();
		$list=$data->paginate(5);
    	return view('admin.op_member_detail.index',['list'=>$list,'params'=>$params]);
    }

    
    //加载编辑表单
    public function edit($id)
    {	
	
        $m = DB::table("op_member_detail")->where("id",$id)->first();
		
        return view("admin.op_member_detail.edit",['list'=>$m]);
		
    }

    //执行编辑
    public function update(Request $request,$id)
    {
       if($request->hasFile('icon')){

		   //获取文件上传信息
		   $file = $request->file("icon");
		   //获取上传文件的后缀名;
		   $ext = $file->getClientOriginalExtension();
		   // var_dump($ext);
		   //随机一个文件名;
		   $filename = time().rand(1000,999).".".$ext;

		   //执行文件移动；
		   $newfile = $file->move("./uploads/user/",$filename);
		  //执行缩放
		   $img = Image::make("./uploads/user/".$filename)->resize(70,50);
		   $img->save("./uploads/user/m_".$filename); //另存为

			$m = DB::table("op_member_detail")->where("id",$id)->first();
			
			// var_dump($m->picname);
			@unlink("./uploads/user/".$m->icon);
			@unlink("./uploads/user/m_".$m->icon);
		
		
			//获取要编辑的数据
			$data1=['nick_name'=>$request->nick_name,'sex'=>$request->sex,'age'=>$request->age,'email'=>$request->email,'status'=>$request->status,'icon'=>$filename,'log_time'=>date('Y-m-d H:i:s',time()),'reg_ip'=>$_SERVER['SERVER_ADDR']];
			//执行修改
			$m=DB::table("op_member_detail")->where('id',$id)->update($data1);
			if($m>0){
				$info = "修改成功！";
			}else{
				$info = "修改失败！";
			}
		
		}
		return view("admin.info",["info"=>$info]);
    
	   
	} 
	
	
	//执行删除;
    public function destroy($id)  
    {
        //
         $m = DB::table("op_member_detail")->where("id",$id)->first();
        
        // var_dump($m->icon);
       
        @unlink("./uploads/user/".$m->icon);
        @unlink("./uploads/user/m_".$m->icon);
        $m = DB::table("op_member_detail")->where("id",$id)->delete();
        if($m>0){
    		$info = "删除成功！";
    	}else{
    		$info = "删除失败！";
    	} 
        return view("admin.info",["info"=>$info]);
    }


     public function response($id)
    {
        return response()->download("./uploads/user/$id");
}
}