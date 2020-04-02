<?php

namespace app\admin\controller;
use app\common\model\Admin as AdminModel;

class Index extends Base
{

    public function index()
    {
    	//$data = db('admin')->find(1);
    	//var_dump( $data );
        return view();
    }
        public function logout()
    {
    	session(null);
    	$this->success('退出登陆成功','Login/index');
    }
    public function classification()
    {
    	return view();
    	
    }
    public function webinfo()
    {
        return view();
    }

    public function adminlist()
    {
        $adminlist=db('admin')->select();
        $this->assign([
            'adminlist'=>$adminlist,
        ]);
        return view();
    }


    public function adminadd()
    {
        if (request()->isPost())
        {
            $data=input('post.');
            $user = new AdminModel();
            $result=$user->where('admin_name',$data['admin_name'])->find();
            if(!$result)
            {
                $add=db('admin')->insert($data);
                $this-> error('添加成功','adminlist');
                
            }else{
                $this-> error('用户名存在');
            }
        }
        return view();
    }

    public function admindel()
    {
        if(request()->isGet())
        {
            $id =input('get.admin_id');
            db('admin')->where('admin_id',$id)->delete();
            $this-> success('删除成功','adminlist');               

        }


    }


    public function pass()
    {
        if(request()->isGet())
        {
            $id =input('get.admin_id');
            $data = AdminModel::get($id);
            $this->assign([
                'data'=>$data,
            ]);
            return view();                    

        }


    }


    public function updata()
    {
        $data=input('post.');

        $pass = input('post.newpass');
            $user = new AdminModel();
            $result=$user->where('admin_name',$data['admin_name'])->find();
            if($result)
            {
                    if($result['admin_pass']==$data['admin_pass'])
                {
                    db('admin')->where('admin_name',$data['admin_name'])->update(['admin_pass' => $data['newpass']]);
                    $this->error('更新成功','adminlist');

                }else{
                    $this->error('密码错误');
                }
                
            }else{
                $this-> error('你在搞鸡毛呀！');
            }


    }



    //无限极分类函数,递归处理方法
    
    public function sort($data,$pid=0,$level=0)
    {
        static $arr=[];
        foreach ($data as $key) {
            if ($pid == $key['cate_pid']){
                //$key['cate_level']=$level;
                //$key['cate_name']=$key['cate_name'];
                $arr[]=$key;
                $this->sort($data,$key['cate_id'],$level+1);
            }
        }
        return $arr;
    }




    public function catelist()
    {

        $data=db('cate')->select();
        $catelist=$this->sort($data);
        //dump($catelist);die;
        $this->assign([
            'catelist'=>$catelist,
        ]);
        return view();
    }
    public function cateadd()
    {
        if (request()->isPost())
        {
            $data=input('post.');
            //$Admin = new AdminModel();
            //$result=$Admin->table('cate')->where('cate_name',$data['cate_name'])->find();
           $result=AdminModel::table('cate')->where('cate_name',$data['cate_name'])->find();
            if(!$result)
            {
                //$add=db('cate')->insert($data);
                if($data['cate_pid']==0)
                {
                    db('cate')->insert($data);
                }else{
                    $result1=db('cate')->where('cate_id',$data['cate_pid'])->find();
                    $data['cate_level']=$result1['cate_level']+1;
                    //dump($data);die;
                    db('cate')->insert($data);
                }
                $this-> error('添加成功','catelist');
                
            }else{
                $this-> error('目录已存在','catelist');
            }
        }

    } 
    public function cateedit()
    {
        if(request()->isGet())
        {
            $id =input('get.cate_id');
            $catelist = AdminModel::table('cate')->where('cate_id',$id)->find();
           // $data = db('cate')->select();
            $this->assign([
                'catelist'=>$catelist,
            ]);
            return view();                    

        }

    }
    public function cateupdata()
    {
        if (request()->isPost())
        {
            $data=input('post.');
            //$Admin = new AdminModel();
            //$result=$Admin->table('cate')->where('cate_name',$data['cate_name'])->find();
           $result=AdminModel::table('cate')->where('cate_name',$data['cate_name'])->find();
            if(!$result)
            {
                db('cate')->where('cate_id',$data['cate_id'])->update(['cate_name' => $data['cate_name']]);
                $this-> error('更新成功','catelist');
                
            }else{
                $this-> error('目录已存在','catelist');
            }
        }

    }

    public function catedel()
    {
        if(request()->isGet())
        {
            $id =input('get.cate_id');
            db('cate')->where('cate_id',$id)->delete();
            $this-> success('删除成功','catelist');               

        }

    }


    //文章添加
    public function articleadd()
    {

        $catedata=db('cate')->select();
        $catelist=$this->sort($catedata);
        //dump($catelist);die;
        $this->assign([
            'catelist'=>$catelist,
        ]);


        if(request()->isPost())
        {
             $data=input('post.');
             db('article')->insert($data);
             $this->success('文章发布成功');
        }



        return view();
    }

    //文章列表
    public function articlelist()
    {
        //$articlelist=db('article')->select();

        //$articlelist=$this->sort($data);
        //dump($catelist);die;
        
        //$catedata=db('cate')->where('cate_id',$articlelist['cate_id'])->select();

        //$articlelist['cate_name']=$catedata['cate_name'];

        $articlelist=AdminModel::query("SELECT * FROM cate,article where cate.cate_id=article.cate_id");
        //dump($articlelist);die;
        $this->assign([
            'articlelist'=>$articlelist,
        ]);

        return view();
    }

    public function articleedit()
    {
        if(request()->isGet())
        {
            $id =input('get.id');
            $articlelist = AdminModel::table('article')->where('id',$id)->find();
           // $data = db('cate')->select();
           $catelist=db('cate')->select();
            $this->assign([
                'articlelist'=>$articlelist,'catelist'=>$catelist,
            ]);
            return view();                    

        }

    }

    public function articleupdata()
    {
        if (request()->isPost())
        {
            $data=input('post.');
            db('article')->where('id',$data['id'])->update($data);
            $this->success('修改成功','articlelist');

        }else{
            $this->success('修改失败','articlelist');
        }

    }    




}
