<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
 use Intervention\Image\ImageManagerStatic as Image;
use DB;
class op_tabController extends CommonController
{
    //浏览信息
    public function index()
    {	
		//查看信息
		$data = DB::select("select * from op_tab order by concat(path,id)");
		//var_dump($data);die;
    	return view('admin.op_tab.index',['list'=>$data]);
    }

   //加载添加表单
      public function create()
    {
		//遍历分类列表
		$data1 = DB::select('select * from op_tab order by concat(path,id) asc');
		//拼接缩进
		foreach($data1 as &$v){
			$m = substr_count($v->path,",");
			if($v->zid > 0){
				$v->big_pictrue = str_repeat('&nbsp;',($m-1)*8).'|--'.$v->big_pictrue;
			}
		}
		//$data1 = DB::table("op_tab")->where("zid",0)->get();
		//var_dump($data1);die;
    	return view("admin.op_tab.create",['list3'=>$data1]);
    }

    //执行信息添加
    public function store(Request $request)
    {	
			
			 //判断是否有上传文件
		 if($request->hasFile('op_picture')){

            //获取文件上传信息
            $file = $request->file("op_picture");
            //获取上传文件的后缀名;
            $ext = $file->getClientOriginalExtension();
            //var_dump($ext);
            //随机一个文件名;
            $filename = time().rand(1000,999).".".$ext;
			
            //执行文件移动；
            $newfile = $file->move("./uploads/leibietu/",$filename); 
           
            $img = Image::make("./uploads/leibietu/".$filename)->resize(70,50);
			//var_dump($img);die;
            $img->save("./uploads/leibietu/m_".$filename); //另存为
				//
			
			
			//添加分类		
			$data = ['big_pictrue'=> $filename,'zid'=>$request->zid,'path'=>$request->path,'pxid'=>$request->pxid];
			//$data = $request->only($filename,'zid','path');
			//var_dump($data);die;
				if(!empty($request->pid_c)){
					$data['zid'] = $request->pid_c;   
					
					$paths = \DB::table("op_tab")->where('id', $data['zid'])->first();  
					//var_dump($paths);die;
					$data['path']  = $paths->path.$request->pid_c.',';  
					
				}
			
				 // 判断是否是根分类
				/* if($data['zid']!=0){
					$data['path'] = $data['path'].$data['zid'];
				} */
			   //var_dump($data);
				$m = \DB::table('op_tab')->insertGetId($data);
				
				//dd($data);
				//判断添加结果，根据结果设置提示信息
				if($m>0){
					$info = "商品分类信息添加成功！";
				}else{
					$info = "商品分类信息添加失败";
				}
		}
				return view("admin.info",["info"=>$info]);
    
	
	}
	
	
	public function  getTab()
    {
        $tid = $_GET['tid']+0;
        $options = \DB::table('op_goods_type')->where("pid",$tid)->get();
        $options = json_encode($options);
        return $options;
    }
    //加载编辑表单
    public function edit($id)
    {	
        $list = \DB::table('op_tab')->where('id',$id)->first();
		if($list->zid!=0){
			$path=explode(",",$list->path);
			$path[count($path)-1]=$list->id;
			
			$fpath=\DB::table('op_tab')->select('big_pictrue')->whereIn('id',$path)->orderBy('id','asc')->get();
			
		}else{
            $fpath = '根类';
        }
      
		return view('admin.op_tab.edit',['list'=>$list,'fpath'=>$fpath]);
		
    }

    //执行编辑
    public function update(Request $request,$id)
    {
       if($request->hasFile('big_pictrue')){

		   //获取文件上传信息
		   $file = $request->file("big_pictrue");
		   //获取上传文件的后缀名;
		   $ext = $file->getClientOriginalExtension();
		   // var_dump($ext);
		   //随机一个文件名;
		   $filename = time().rand(1000,999).".".$ext;

		   //执行文件移动；
		   $newfile = $file->move("./uploads/leibietu/",$filename);
		  //执行缩放
		   $img = Image::make("./uploads/leibietu/".$filename)->resize(70,50);
		   $img->save("./uploads/leibietu/m_".$filename); //另存为

			$m = DB::table("op_tab")->where("id",$id)->first();
			
			// var_dump($m->picname);
			@unlink("./uploads/leibietu/".$m->big_pictrue);
			@unlink("./uploads/leibietu/m_".$m->big_pictrue);
		
		
			//获取要编辑的数据
			$data1=['big_pictrue'=>$filename];
			//执行修改
			$m = DB::table("op_tab")->where('id',$id)->update($data1);
			
			/* if($m>0){
				$info = "修改成功！";
			}else{
				$info = "修改失败！";
			} */
		}
		return redirect('admin/op_tab');
				//return view("admin.info",["info"=>$info]);
    
	   
	} 
	
	//执行删除;
    public function destroy($id)  
    {
        //
         $m = DB::table("op_tab")->where("id",$id)->first();
        
        // var_dump($m->icon);
        @unlink("./uploads/leibietu/".$m->big_pictrue);
        @unlink("./uploads/leibietu/m_".$m->big_pictrue);

        $m = DB::table("op_tab")->where("id",$id)->delete();
        if($m>0){
    		$info = "删除成功！";
    	}else{
    		$info = "删除失败！";
    	} 
        return view("admin.info",["info"=>$info]);
    }


    
}
