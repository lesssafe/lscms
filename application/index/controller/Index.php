<?php
namespace app\index\controller;
use think\Controller;
class Index extends controller
{
    public function index()
    {
        //显示栏目标题
    	$headerlist=db('cate')->select();
        $this->assign([
            'headerlist'=>$headerlist,
        ]);
        


        //显示文章标题
        $articlelist=db('article')->select();
        $this->assign([
            'articlelist'=>$articlelist,
        ]);
        return view();

        

    }
    public function cate()
    {
        $headerlist=db('cate')->select();
        $this->assign([
            'headerlist'=>$headerlist,
        ]);

        if(request()->isGet())
        {
            $id =input('get.id');
            $data=db('cate')->where('cate_id',$id)->find();
            //dump($data);die;
            if($data)
            {
                //dump($data);die;

                $this->assign(['data'=>$data,]);
                //dump($data);die;
                //
                
                $articlelist=db('article')->where('cate_id',$id)->select();
                $this->assign([
                    'articlelist'=>$articlelist,
                ]);


                return view();
                //dump($data);die;

            }else{
                $this->success('栏目不存在，请不要非法尝试！','../../index');
            }

                         

        }



    }

    public function article()
    {
        //显示栏目标题
        $headerlist=db('cate')->select();
        $this->assign([
            'headerlist'=>$headerlist,
        ]);

        if(request()->isGet())
        {
            //显示文章内容
            //
            $id =input('get.id');
            $article=db('article')->where('id',$id)->find();
            $this->assign([
                'article'=>$article,
            ]);
            return view();
        }
    }
}
