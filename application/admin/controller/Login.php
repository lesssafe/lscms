<?php

namespace app\admin\controller;

use app\common\model\Admin;
use think\Controller;

class Login extends Controller
{
    public function index()
    {
        return view();
    }

    public function check()
    {
    	$data=input('post.');
    	$user = new Admin();
    	$result=$user->where('admin_name',$data['admin_name'])->find();
    	if($result)
    	{
    		if($result['admin_pass']==$data['admin_pass'])
    		{
    			session('admin_name',$data['admin_name']);

    		}else{
    			$this->error('密码错误');
    		}
    		
    	}else{
    		$this-> error('用户名不存在');
    	}
    	if(captcha_check($data['code']))
    	{
    		$this-> success('登陆成功','Index/index');
    	}else{
    		$this-> error('验证码错误');
    	}
    }

}
