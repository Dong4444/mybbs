<?php
namespace Home\Controller;

use Think\Controller;

class LoginController extends Controller
{
    //注册页面
    public function signup()
    {
        $this->display();   //View/Login/login.html
    }

    //接收注册信息,保存到数据库
    public function save()
    {
       $data = $_POST;
        $data['created_at'] = time();
        $date['auth'] = 3;

        
        //密码不能为空
        if(empty($data['upwd']) || empty($data['reupwd'])) {
          $this->error('密码不能为空!');
        }

        //两次密码要一致
        if($data['upwd'] !== $data['reupwd']){
          $this->error('两次密码不一致!');
        }

        //密码加密
        $data['upwd'] = password_hash($data['upwd'],PASSWORD_DEFAULT);

       

         $row = M('bbs_user') -> add( $data );

        if($row){
          $this->success('注册用户成功','/');
        }else{
          $this->error('注册用户失败');
        }
    }

    //接收登录信息,进行验证
    public function dologin()
    {
      $uname = $_POST['uname'];
      $upwd  = $_POST['upwd'];
      // echo '<pre>';
      // print_r($_POST);
      // die;

      $user = M('bbs_user')->where("uname='$uname'")->find();

      if($user && password_verify($upwd,$user['upwd'])){

            $_SESSION['userInfo'] = $user;
            $_SESSION['flag'] = true;

          $this->success('登录成功','/');
      }else{
          $this->error('账号或密码错误');
      }
    }


    //退出登录
    public function logout()
    {
      $_SESSION['flag'] = false;
      $this->success('正在退出...','/');
    }
}