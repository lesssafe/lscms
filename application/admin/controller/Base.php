<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class Base extends Controller
{
    public function _initialize()
    {
    	if(!session('admin_name'))
    	{
    		$this->error('先登陆哦！','Login/index');

    	}
    }
}
