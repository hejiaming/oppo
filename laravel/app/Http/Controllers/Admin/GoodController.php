<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use Intervention\Image\ImageManagerStatic as Image;

class GoodController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //判断是否有搜索条件
        if(!empty($_GET['good_name'])){
        	$name = '%'.$_GET['good_name'].'%';
			$list = \DB::table('op_goods')->where('good_name',"like",$name)->paginate(5);
			
			//维持状态值
			$serch = $_GET['good_name'];
		}else{

			//无条件则搜索全部
			$list = \DB::table('op_goods')->paginate(4);
        	$serch = '';
		}

		$pidname = \DB::table('op_goods_type')->select('type_id','sort_name')->get();
		$attr =\DB::table('op_goods_attr')->get();
		
		//将类别的名字更换成汉字 
		foreach($list as &$v){
			//遍历分类表进行替换
			foreach($pidname as $tn){
				
				//判断
				if($v->good_pid == $tn->type_id){
					$v->good_pid = $tn->sort_name;
					break;
				}
			}
			
			//遍历吹牛属性分类表进行替换
			foreach($attr as $at){
				
				//判断
				if($v->good_attr == $at->attr_id){
					$v->good_attr = $at->attr_name;
					break;
				}
			}
			
		}
		return view('admin.good.index',['list'=>$list,'good_name'=>$serch]);
    }
	//显示详情完善表
	public function createDetail($id)
	{	
		//搜索详情数据基本信息
		$list = \DB::table('op_goods')->select('good_name','good_id')->where('good_id',$id)->first();
		//跳转视图
		return view('admin.good.detail',['list'=>$list]);
	}
	
	//添加商品详情
	public function storyDetail(Request $request)
	{
		//实例化商品详情
		$db = \DB::table('op_goods_det');
		
		//获取上传数据
		$data = $request->only('good_dec','good_det','good_id');
			
		$db->insertGetId($data);
		
		//成功后修改商品表good_status状态为3已经添加详情
		\DB::table('op_goods')->where('good_id',$request->input('good_id'))->update(array('good_status'=>3));

		return redirect('admin/good');
	}

	//执行尺寸风格库存修改
	public function updateSize(Request $request)
	{
		//获取上传数据
		$size = $request->input('size');
		$color = $request->input('color');
		$count = $request->input('count');	
		$id = $request->input('id');	
		
		$sum = 0;
		//实例化数据表对象
		
		
		//转换数据
		for($i=0;$i<count($id);$i++){

			//拼装数据
			$temp['good_size'] = $size[$i];
			$temp['good_color'] = $color[$i];
			$temp['good_count'] = $count[$i];

			//执行修改
			$m = \DB::table('op_size_pic_style')->where('style_id',$id[$i])->update($temp);
		}

		//跳转到首页
		return redirect('admin/good');
	}


	//审核商品上架
	public function regGoods($id)
	{		
		//商品基本表
		$goods = \DB::table('op_goods')->where('good_id',$id)->first();
		//判断商品状态是否为已经添加完成 good_status 为3
		if($goods->good_status<3){
			echo "<script>alert('你的商品信息不全，还不能审核')</script>";
			return redirect('admin/good');
		}

		//商品尺寸表
		$style_size_pic =\DB::table('op_size_pic_style')->where('good_id',$id)->orderBy('good_size','asc')->get();
		//商品详情表
		$goodsdet =\DB::table('op_goods_det')->where('good_id',$id)->first();
		
		//显示详情图片
		$goodsdet->good_det = preg_replace('/<img src=\"(.*?)\"/','<img src="http://www.op.com\\1" ',$goodsdet->good_det);
		
		
		return view('admin.good.regoods',['goods'=>$goods,'styles'=>$style_size_pic,'goodsdet'=>$goodsdet]);
	}
	
	//执行审核
	public function doRegGoods($id)
	{
		//审核通过将商品状态改为正常上架4
		$m = \DB::table('op_goods')->where('good_id',$id)->update(array('good_status'=>4));

		//成功跳转
		return redirect('admin/good');
	}
	//款式,尺码属性查询表
	public function checkStyle($id)
	{
		$size = \DB::table('op_goods_size')->get();
		
		//
		$goods = \DB::table('op_goods')->where('good_id',$id)->first();
		
		//
		if($goods->good_status == 1){

			//		
			return view('admin.good.size',['size'=>$size,'goods'=>$goods]);
		}else{
			//
			$stylesize = \DB::table('op_size_pic_style')->where('good_id',$goods->good_id)->get();
			
			//
			return view('admin.good.editsize',['size'=>$size,'goods'=>$goods,'stylesize'=>$stylesize]);

		}
	}

	//款式尺码属性添加表
	public function addStyleSize(Request $request)
	{
	
		//获取尺寸 颜色 库存信息
		$size = $request->input('size');
		$color = $request->input('color');
		$count = $request->input('count');	
		
		
		if($request->hasFile('img')){
			foreach($request->file('img') as $img){
				
				
				//3.获取上传文件信息
				$ext = $img->getClientOriginalExtension();
				
				//4.重新设定新文件名
				$filename = time().rand(1000,9999).".".$ext;
				$path = date('Ymd');
				//5.移动文件到上传后文件夹
				$img->move("uploads/".$path.'/',$filename);
				
				////执行缩放
				$this->doResizeImg($img,$path,$filename);

				//$filename = ltrim($path.$filename,'./');
				$images[] = $path.'/'.$filename;

			}
			
		}
		
		//拼装数据
		$list = array();
		$good_id = $request->input('good_id');
		
		for($i=0 ; $i<count($size);$i++){
			$temp['good_id'] = $good_id;
			$temp['good_size'] = $size[$i];
			$temp['good_color'] = $color[$i];
			$temp['good_count'] = $count[$i];
			$temp['good_pic'] = $images[$i];
			
			$list[] = $temp;
		}
		
		//实例化数据表对象
		$db = \DB::table('op_size_pic_style');
		
		//加入数据库
		foreach($list as $v){
			$m = $db ->insertGetId($v);		
		}
		
		//将op_goods表中的good_status状态改为2尺寸已经修改
		\DB::table('op_goods')->where('good_id',$good_id)->update(array('good_status'=>2));

		//跳转到商品详情
		return redirect('admin/good');
	}
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //遍历分类列表
		$list = \DB::select('select sort_name,type_id,path,pid from op_goods_type order by concat(path,type_id) asc');
		//拼接缩进
		foreach($list as &$v){
			$m = substr_count($v->path,",");
			if($v->pid > 0){
				$v->sort_name = str_repeat('&nbsp;',($m-1)*8).'|--'.$v->sort_name;
			}
		}
		$attr = \DB::table('op_goods_attr')->get();

		//遍历标签属性
		for($i=1;$i<4;$i++){

			//拼装输出
			$temp = \DB::table('op_goods_tag')->where('tag_type',$i)->get();
			$tag[] = $temp;
		}
		
		//dd($tag);
		return view("admin.good.create",['list'=>$list,'attr'=>$attr,'tag'=>$tag]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取添加的商品信息
		$data = $request->only('good_pid','good_name','good_price','good_dec','good_attr');
		$data['good_now_price'] = $data['good_price'];
		

		//上传图片
		$data['good_pic'] = $this->upLoads($request);

		//修改商品状态为1，表示新添加商品状态
		$data['good_status'] = 1;
		
		//插入数据
		$m = \DB::table('op_goods')->insertGetId($data);

		//获取商品标签值
		$tag = '1:'.$request->input('style').'@';
		$tag .= '2:'.$request->input('material').'@';
		$tag .= '3:'.$request->input('element');

		$intag['good_id']=$m;
		$intag['good_tag_val']=$tag;

		//添加标签值
		$res = \DB::table('op_goods_tag_val')->insertGetId($intag);

		//将主图添加到图片库
		
		//成功跳转
		return redirect("admin/good");
    }
	
	public function upLoads(Request $request){		
		//1.判断是否有文件上传
		if($request->hasFile('good_pic')){
			//判断上传文件是否有效
			if ($request->file('good_pic')->isValid()) {
				
				//2.获取上传文件对象
				$file = $request->file('good_pic');
			
				//3.获取上传文件信息
				$ext = $file->getClientOriginalExtension();
				//4.重新设定新文件名
				$filename = time().rand(1000,9999).".".$ext;
				$path = date('Ymd');

				//5.移动文件到上传后文件夹
				$file->move("uploads/".$path.'/',$filename);

				//6.执行缩放
				$this->doResizeImg($file,$path,$filename);
			}
		}else{
			return "no file update;";
		}
		

		return $path.'/'.$filename;
	}

	//执行缩放方法
	public function doResizeImg($img,$path,$filename)
	{
		if(!is_dir("uploads/s_".$path)){
			mkdir("uploads/s_".$path);
		}
		if(!is_dir("uploads/m_".$path)){
			mkdir("uploads/m_".$path);
		}
		if(!is_dir("uploads/b_".$path)){
			mkdir("uploads/b_".$path);
		}
		//缩放为中号和小号缩略图
		$img = Image::make("uploads/".$path.'/'.$filename)->resize(60,60)->save("uploads/s_".$path.'/'.$filename); //另存为
		$img = Image::make("uploads/".$path.'/'.$filename)->resize(400,600)->save("uploads/m_".$path.'/'.$filename); //另存为
		$img = Image::make("uploads/".$path.'/'.$filename)->resize(800,1200)->save("uploads/b_".$path.'/'.$filename); //另存为
           
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
        //
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
}
