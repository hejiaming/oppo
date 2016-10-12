<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$list = \DB::select("select * from `op_goods_type` order by concat(path,type_id)");
		return view('admin.type.index',['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $type_s =\DB::table("op_goods_type")->where("pid",0)->get();
		return view('admin.type.create',["type_s"=>$type_s]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //添加分类		
		$data = $request->only('sort_name','pid','path','status');
      
        if(!empty($request->pid_c)){
            $data['pid'] = $request->pid_c;   
            
            $paths = \DB::table("op_goods_type")->where('type_id', $data['pid'])->first();  
            $data['path']  = $paths->path.$request->pid_c.',';     
        }
        
        // 判断是否是根分类
		if($data['pid']!=0){
			$data['path'] = $data['path'].$data['pid'].',';
		}
       //var_dump($data);
		$m = \DB::table('op_goods_type')->insertGetId($data);

        //dd($data);
		//判断添加结果，根据结果设置提示信息
		if($m>0){
			$info = "商品分类信息添加成功！";
		}else{
			$info = "商品分类信息添加失败";
		}


		//加载结果显示模板
		return redirect('admin/type');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }
    /**
    * 获取分类
    */
    public function  getType()
    {
        $tid = $_GET['tid']+0;
        $options = \DB::table('op_goods_type')->where("pid",$tid)->get();
        $options = json_encode($options);
        return $options;
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
		$list = \DB::table('op_goods_type')->where('type_id',$id)->first();
		
		if($list->pid!=0){
			//$path=\DB::table('op_good_type')->where('type_id',$list->pid)->lists("path");
			
			
			$path=explode(",",$list->path);
			$path[count($path)-1]=$list->type_id;
			
			$fpath=\DB::table('op_goods_type')->select('sort_name')->whereIn('type_id',$path)->orderBy('type_id','asc')->get();
			
		}else{
            $fpath = '根类';
        }
      
		return view('admin.type.edit',['list'=>$list,'fpath'=>$fpath]);
    }
    /**
    *   ajax添加分类
    */
    public function type_s()
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
		$data = $request->only("sort_name","status");
		$m = \DB::table("op_goods_type")->where("type_id",$id)->update($data);
		return redirect('admin/type');
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
}
