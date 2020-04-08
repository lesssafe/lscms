<?php
namespace app\index\controller;
use think\Controller;
use app\common\model\Index as IndexModel;
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
        $articlelist=IndexModel::query("SELECT * FROM cate,article where cate.cate_id=article.cate_id");
        //$articlelist=db('article')->select();
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
                
                //$articlelist=db('article')->where('cate_id',$id)->select();
                $articlelist=IndexModel::query("SELECT * FROM cate,article where cate.cate_id=article.cate_id=$id");
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
            $cate=db('cate')->where('cate_id',$article['cate_id'])->find();
            $article['cate_name']=$cate['cate_name'];
            $this->assign([
                'article'=>$article,
            ]);
            return view();
        }
    }
}
