<?php
namespace Home\Controller;

use Think\Controller;

class PostController extends Controller
{   
    //发帖
    public function create()
    {
        //可能接收到一个版块ID
        $cid = empty($_GET['cid']) ? 0 : $_GET['cid'];

        //判断是否登录 ,否 就跳转到登录页面
        if(empty($_SESSION['flag'])){
            $this->error('请你先登录...','/');
        }

        //获取版块信息
        $cates = M('bbs_cate')->getField('cid,cname');

        // echo '<pre>';
        // print_R($cates);
        // die;
        $this->assign('cid',$cid);
        $this->assign('cates',$cates);
        $this->display(); //View/Post/create.html
    }

    //帖子的数据
    public function save()
    {
        $data = $_POST;

        //发帖人
        $data['uid'] = $_SESSION['userInfo']['uid'];

        //创建时间, 更新时间
        $data['created_at'] = $data['updated_at'] = time();

        $row = M('bbs_post')->add( $data );

        if($row){
            $this->success('发帖成功');
        }else{
            $this->error('发帖失败');
        }
    }

    //帖子列表
    public function index()
    {
        //要显示哪个版块下面的帖子
        $cid = empty($_GET['cid']) ? 1 : $_GET['cid'];

        //获取数据
        $posts = M('bbs_post')->where("cid=$cid")->order('created_at desc')->select();
         
        // 获取用户信息
        $users = M('bbs_user')->getField('uid,uname');

        //遍历显示
        $this->assign('users',$users);
        $this->assign('posts',$posts);
        $this->display();   //View/Post/index.html
    }
}