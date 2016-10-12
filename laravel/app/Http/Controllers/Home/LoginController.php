<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class LoginController extends Controller
{
    public function login()
    {
        return view("home.login.index");
    } 
 

    // 登录
    public function dologin(Request $request)
    {
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        if(!empty($phone && $password)){

            // 拿到数据去数据库里面检测，如果有，就成功，，否则，提示登录失败
            $member = DB::table("op_member")->where("phone",$phone)->first();
            //dd($member);

            if(!empty($member)){
                //判断密码
                if($password == $member->password){
                    //存储session跳转页面
                    session()->set("member",$member);
                  
                    return redirect("/");
                }
            }
        }
        return back()->with('msg',"账号或密码错误");
    }

    //执行退出
    public function logout(Request $request){

        $request->session()->forget("member");
        return redirect("/");

    }
}
