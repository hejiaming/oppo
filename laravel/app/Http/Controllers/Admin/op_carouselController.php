<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
 use Intervention\Image\ImageManagerStatic as Image;
use DB;
class op_carouselController extends CommonController
{
    //浏览信息
    public function index()
    {	
		//分页查看信息
		$data = DB::table("op_carousel");
		
		//搜索
		$params=array();
		if(!empty($_GET['nick_name'])){
			$data->where("nick_name","like","%{$_GET['nick_name']}%");
			$params['nick_name']=$_GET['nick_name'];
		}
		//->get();
		$list=$data->paginate(5);
    	return view('admin.op_carousel.index',['list'=>$list,'params'=>$params]);
    }

   //加载添加表单
    public function create()
    {
    	return view("admin.op_carousel.add");
    }

    //执行信息添加
    public function store(Request $request)
    {	
		 //判断是否有上传文件
        if($request->hasFile('pic')){

            //获取文件上传信息
            $file = $request->file("pic");
            //获取上传文件的后缀名;
            $ext = $file->getClientOriginalExtension();
            //var_dump($ext);
            //随机一个文件名;
            $filename = time().rand(1000,999).".".$ext;

            //执行文件移动；
            $newfile = $file->move("./uploads/lunbo/",$filename); 
           
            $img = Image::make("./uploads/lunbo/".$filename)->resize(70,50);
            $img->save("./uploads/lunbo/m_".$filename); //另存为 
		
    	//获取要添加的数据
    	$data=['title'=>$request->title,'pic'=>$filename,'url'=>$request->url,'order'=>$request->order];
		//var_dump($data);die;
    	//执行添加
					$m=DB::table("op_carousel")->insert($data);
					//var_dump($m);die;
					if($m>0){
						$info = "添加成功！";
					}else{
						$info = "添加失败！";
					}
		
		}
		
		return view("admin.info",["info"=>$info]);
    
	}
    //加载编辑表单
    public function edit($id)
    {	
        $m = DB::table("op_carousel")->where("id",$id)->first();
        return view("admin.op_carousel.edit",['list'=>$m]);
		
    }

    //执行编辑
    public function update(Request $request,$id)
    {
       if($request->hasFile('pic')){
		   //获取文件上传信息
		   $file = $request->file("pic");
		   //获取上传文件的后缀名;
		   $ext = $file->getClientOriginalExtension();
		   // var_dump($ext);
		   //随机一个文件名;
		   $filename = time().rand(1000,999).".".$ext;

		   //执行文件移动；
		   $newfile = $file->move("./uploads/lunbo/",$filename);
		  //执行缩放
		   $img = Image::make("./uploads/lunbo/".$filename)->resize(70,50);
		   $img->save("./uploads/lunbo/m_".$filename); //另存为

			$m = DB::table("op_carousel")->where("id",$id)->first();
			
			// var_dump($m->picname);
		   
			@unlink("./uploads/lunbo/".$m->icon);
			@unlink("./uploads/lunbo/m_".$m->icon);
		
		
			//获取要编辑的数据
			$data1=['title'=>$request->title,'pic'=>$filename,'url'=>$request->url,'order'=>$request->order];
			//执行修改
			$m=DB::table("op_carousel")->where('id',$id)->update($data1);
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
         $m = DB::table("op_carousel")->where("id",$id)->first();
        
        // var_dump($m->icon);
       
        @unlink("./uploads/lunbo/".$m->icon);
        @unlink("./uploads/lunbo/m_".$m->icon);

        $m = DB::table("op_carousel")->where("id",$id)->delete();
        if($m>0){
    		$info = "删除成功！";
    	}else{
    		$info = "删除失败！";
    	} 
        return view("admin.info",["info"=>$info]);
    }


     public function response($id)
    {
        return response()->download("./uploads/lunbo/$id");
    }
}
