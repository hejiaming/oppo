<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
 use Intervention\Image\ImageManagerStatic as Image;
use DB;
class op_adminController extends CommonController
{
    //浏览信息
    public function index()
    {	
		//分页查看信息
		$data = DB::table("op_admin");
		
		//搜索
		$params=array();
		if(!empty($_GET['nick_name'])){
			$data->where("nick_name","like","%{$_GET['nick_name']}%");
			$params['nick_name']=$_GET['nick_name'];
		}
		//->get();
		$list=$data->paginate(5);
    	return view('admin.op_admin.index',['list'=>$list,'params'=>$params]);
    }

   //加载添加表单
    public function create()
    {
    	return view("admin.op_admin.add");
    }

    //执行信息添加
    public function store(Request $request)
    {	
		 //判断是否有上传文件
        if($request->hasFile('icon')){

            //获取文件上传信息
            $file = $request->file("icon");
            //获取上传文件的后缀名;
            $ext = $file->getClientOriginalExtension();
            //var_dump($ext);
            //随机一个文件名;
            $filename = time().rand(1000,999).".".$ext;

            //执行文件移动；
            $newfile = $file->move("./uploads/admin",$filename); 
           //执行缩放
          
            $img = Image::make("./uploads/admin".$filename)->resize(70,50);

            $img->save("./uploads/admin/m_".$filename); //另存为 
		
    	//获取要添加的数据
    	$data=['name'=>$request->name,'nick_name'=>$request->nick_name,'password'=>$request->password,'type'=>$request->type,'status'=>$request->status,'icon'=>$filename,'careate_time'=>date('Y-m-d H:i:s',time()),'create_ip'=>$_SERVER['SERVER_ADDR'],'last_log_time'=>date('Y-m-d H:i:s',time()),'last_log_ip'=>$_SERVER['SERVER_ADDR']];
		//var_dump($data);die;
    	//执行添加
					$m=DB::table("op_admin")->insert($data);
					//var_dump($m);die;
					if($m>0){
						$info = "添加成功！";
					}else{
						$info = "添加失败！";
					}
			
			/* if($m>0){
					echo "发布成功";
			}else{
					echo "发布失败";
				} */
		}
		//return redirect()->action('admin\op_adminController@index'); 
		
		return view("admin.info",["info"=>$info]);
    
	}
    //加载编辑表单
    public function edit($id)
    {	
        $m = DB::table("op_admin")->where("id",$id)->first();
        return view("admin.op_admin.edit",['list'=>$m]);
		
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
		   $newfile = $file->move("./uploads/admin/",$filename);
		  //执行缩放
		   $img = Image::make("./uploads/admin/".$filename)->resize(70,50);
		   $img->save("./uploads/admin/m_".$filename); //另存为

			$m = DB::table("op_admin")->where("id",$id)->first();
			
			// var_dump($m->picname);
			@unlink("./uploads/admin/".$m->icon);
			@unlink("./uploads/admin/m_".$m->icon);
		
		
			//获取要编辑的数据
			$data1=['nick_name'=>$request->nick_name,'password'=>$request->password,'type'=>$request->type,'status'=>$request->status,'icon'=>$filename,'last_log_time'=>date('Y-m-d H:i:s',time()),'last_log_ip'=>$_SERVER['SERVER_ADDR']];
			//执行修改
			$m=DB::table("op_admin")->where('id',$id)->update($data1);
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
         $m = DB::table("op_admin")->where("id",$id)->first();
        
        // var_dump($m->icon);
        @unlink("./uploads/admin/".$m->icon);
        @unlink("./uploads/admin/m_".$m->icon);

        $m = DB::table("op_admin")->where("id",$id)->delete();
        if($m>0){
    		$info = "删除成功！";
    	}else{
    		$info = "删除失败！";
    	} 
        return view("admin.info",["info"=>$info]);
    }


     public function response($id)
    {
        return response()->download("./uploads/admin/$id");
    }
}
