<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/style_1_common.css?gQK" />
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/style_1_forum_viewthread.css?gQK" />
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/layout.css">
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/css.css">
</head>

<body id="nv_forum" class="pg_viewthread">
<!--网页顶部start-->
  <div id="top">
    <div id="top_main">
      <span class="top_content_left">设为主页</span>
      <span class="top_content_left">收藏本站</span>
      <span class="top_content_right">切换到宽版</span>
    </div>
  </div>
 
<div id="main"> 
  <!--网页顶部广告部分start-->
        <div id="banner"></div>
        <!--网页顶部广告部分end-->
        
        <!--网页头部start-->
        <div id="header">
        
          <!--logo、登陆部分start-->
          <div id="logo_login">
          
            <!--logo部分start-->
            <div id="logo"></div>
            <!--logo部分end-->
              
            <!--登陆部分start-->
            <div id="login">
              <table>
                <tr>
                  <td>
                    <label>帐号</label>
                  </td>
                  <td>
                    <input type="text" name="username" />
                  </td>
                  <td width="80px">
                    <label><input type="checkbox" name="remember" />自动登录</label>
                  </td>
                  <td>
                    找回密码
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>密码</label>
                  </td>
                  <td>
                    <input type="password" name="password" />
                  </td>
                  <td>
                    <input type="submit" value="立即登录" />
                  </td>
                  <td>
                    立即注册
                  </td>
                </tr>
              </table>
            </div>
            <!--登陆部分start-->
            
          </div>
          <!--logo、登陆部分end-->
          
          <!--菜单部分start-->
          <div id="menu">
            <ul>
              <li><a href="#">论坛</a></li>
              <li class="line"></li>
              <li><a href="">论坛</a></li>
              <li class="line"></li>
              <li><a href="">论坛</a></li>
              <li class="line"></li>
              <li><a href="">论坛</a></li>
              <li class="line"></li>
            </ul>
          </div>
          <!--菜单部分end-->
            
            <!--搜索部分start-->
            <div id="search">
                <table cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="search_ico"></td>
                    <td class="search_input">
                      <input type="text" name="search" x-webkit-speech speech placeholder="请输入搜索内容" />
                    </td>
                    <td class="search_select">
                      <a href="">帖子</a>
                      <span class="select"></span>
                    </td>
                    <td class="search_btn">
                      <button>搜索</button>
                    </td>
                    <td class="search_hot">
                      <div>
                        <strong>热搜:</strong>
                        <a href="">交友</a>
                        <a href="">教育</a>
                        <a href="">幽默</a>
                        <a href="">搞笑</a>
                        <a href="">房产</a>
                        <a href="">购物</a>
                        <a href="">二手</a>
                        <a href="">衣服</a>
                        <a href="">鞋子</a>
                        <a href="">帮助</a>
                        <a href="">折扣</a>
                        <a href="">电影</a>
                      </div>
                    </td>
                  </tr>
                </table>
            </div>
            <!--搜索部分end-->
            
            <!--小提示部分start-->
            <div id="tip">
            
                <!--路径部分start-->
                <div id="path">
                  <a href="" class="index"></a>
                  <em></em>
                  <a href="" class="path_menu">论坛</a>
                </div>
                <!--路径部分end-->
                
                <!--统计部分start-->
                <div id="count">
                  今日: <em>1520</em>
                  <span class="pipe">|</span>
                  昨日: <em>1520</em>
                  <span class="pipe">|</span>
                  帖子: <em>1520</em>
                  <span class="pipe">|</span>
                  会员: <em>1520</em>
                  <span class="pipe">|</span>
                  欢迎新会员: <em><a href="">1520</a></em>
                </div>
                <!--统计部分end-->
                
            </div>
            <!--小提示部分end-->
            
        </div>
        <!--网页头部end-->
        
</div>

<!--内容 start-->
<div id="wp" class="wp">
<!--留白-->
<div id="pt" class="bm cl"></div>

<!--包含发贴和回贴-->
<div id="ct" class="wp cl">

<!--发贴列表start-->
<div id="postlist" class="pl bm">
<table cellspacing="0" cellpadding="0">
<tr>
    <td class="pls ptm pbm">
    <div class="hm">
    <span class="xg1">查看:</span> <span class="xi1">0</span><span class="pipe">|</span><span class="xg1">回复:</span> <span class="xi1">0</span>
    </div>
    </td>
    <td class="plc ptm pbn vwthd">

    <h1 class="ts">
    <a href="forum.php?mod=viewthread&amp;tid=6" id="thread_subject">11111111</a>
    </h1>
    <span class="xg1">
    <a href="forum.php?mod=viewthread&amp;tid=6&amp;fromuid=1" onclick="return copyThreadUrl(this)" title="您的朋友访问此链接后，您将获得相应的积分奖励">[复制链接]</a>
    </span>
    </td>
</tr>
</table>


<table cellspacing="0" cellpadding="0" class="ad"><tr><td class="pls"></td><td class="plc"></td></tr></table>
<div id="post_16">
<table id="pid16" summary="pid16" cellspacing="0" cellpadding="0">
<tr>
<td class="pls" rowspan="2">
 <a name="lastpost"></a><div class="pi">
<div class="authi"><a href="home.php?mod=space&amp;uid=1" target="_blank" class="xw1">admin</a>

</div>
</div>

<div>
<div class="avatar" onmouseover="showauthor(this, 'userinfo16')"><a href="home.php?mod=space&amp;uid=1" target="_blank"><img src="./images/common/tavatar.gif" /></a></div>
<div class="tns xg2">
<table cellspacing="0" cellpadding="0">
<th><p><a href="home.php?mod=space&amp;uid=1&amp;do=thread&amp;view=me&amp;from=space" class="xi2">4</a></p>主题</th>
<th>
<p><a href="home.php?mod=space&amp;uid=1&amp;do=friend&amp;view=me" class="xi2">0</a></p>好友
</th>
<td><p><a href="home.php?mod=space&amp;uid=1&amp;do=profile" class="xi2">35</a></p>积分</td>
</table>
</div>
<p><em><a href="home.php?mod=spacecp&amp;ac=usergroup&amp;gid=1" target="_blank">管理员</a></em></p>
</div>

</td>
<td class="plc">
<div class="pi">

<strong>
<a href="forum.php?mod=viewthread&tid=6&amp;fromuid=1">楼主</a>
</strong>
<div class="pti">
<div class="pdbt">
</div>
<div class="authi">
<img class="authicn vm" id="authicon16" src="./images/common/online_admin.gif" />
<em id="authorposton16">发表于 <span title="2018-5-4 11:05:56">刚刚</span></em>
<span class="pipe">|</span><a href="forum.php?mod=viewthread&amp;tid=6&amp;extra=&amp;ordertype=1">倒序浏览</a>
<span class="pipe">|</span>
</div>
</div>
</div><div class="pct"><style type="text/css">.pcb{margin-right:0}</style><div class="pcb">
<div class="t_fsz">
<table cellspacing="0" cellpadding="0"><tr><td class="t_f" id="postmessage_16">
1111111111111</td></tr></table>
</div>
<div id="comment_16" class="cm">
</div>
<div id="post_rate_div_16"></div>
</div></div>

</td></tr>
<tr><td class="plc plm">


</td>
</tr>
<tr>
<td class="pls"></td>
<td class="plc" style="overflow:visible;">

</td>
</tr>
<tr class="ad">
<td class="pls"></td>
<td class="plc">
</td>
</tr>
</table>
</div>

</div>

<!--发贴列表end-->


<!--回复列表start-->
<div class="pl bm">

<table cellspacing="0" cellpadding="0" class="ad"><tr><td class="pls"></td><td class="plc"></td></tr></table>
<div id="post_16">
<table id="pid16" summary="pid16" cellspacing="0" cellpadding="0">
<tr>
<td class="pls" rowspan="2">
 <a name="lastpost"></a><div class="pi">
<div class="authi"><a href="home.php?mod=space&amp;uid=1" target="_blank" class="xw1">admin</a>

</div>
</div>

<div>
<div class="avatar" onmouseover="showauthor(this, 'userinfo16')"><a href="home.php?mod=space&amp;uid=1" target="_blank"><img src="/Public/Home/images/common/tavatar.gif" /></a></div>
<div class="tns xg2">
<table cellspacing="0" cellpadding="0">
<th><p><a href="home.php?mod=space&amp;uid=1&amp;do=thread&amp;view=me&amp;from=space" class="xi2">4</a></p>主题</th>
<th>
<p><a href="home.php?mod=space&amp;uid=1&amp;do=friend&amp;view=me" class="xi2">0</a></p>好友
</th>
<td><p><a href="home.php?mod=space&amp;uid=1&amp;do=profile" class="xi2">35</a></p>积分</td>
</table>
</div>
<p><em><a href="home.php?mod=spacecp&amp;ac=usergroup&amp;gid=1" target="_blank">管理员</a></em></p>
</div>

</td>
<td class="plc">
<div class="pi">

<strong>
<a href="forum.php?mod=viewthread&tid=6&amp;fromuid=1">沙发</a>
</strong>
<div class="pti">
<div class="pdbt">
</div>
<div class="authi">
<img class="authicn vm" id="authicon16" src="./images/common/online_admin.gif" />
<em id="authorposton16">发表于 <span title="2018-5-4 11:05:56">刚刚</span></em>
<span class="pipe">|</span><a href="forum.php?mod=viewthread&amp;tid=6&amp;extra=&amp;ordertype=1">倒序浏览</a>
<span class="pipe">|</span>
</div>
</div>
</div><div class="pct"><style type="text/css">.pcb{margin-right:0}</style><div class="pcb">
<div class="t_fsz">
<table cellspacing="0" cellpadding="0"><tr><td class="t_f" id="postmessage_16">
1111111111111</td></tr></table>
</div>
<div id="comment_16" class="cm">
</div>
<div id="post_rate_div_16"></div>
</div></div>

</td></tr>
<tr><td class="plc plm">


</td>
</tr>
<tr>
<td class="pls"></td>
<td class="plc" style="overflow:visible;">

</td>
</tr>
<tr class="ad">
<td class="pls"></td>
<td class="plc">
</td>
</tr>
</table>
</div>

</div>

<!--回复列表end-->




<div class="xi2 mbm pbm bbs"></div>
<!--[diy=diyfastposttop]--><div id="diyfastposttop" class="area"></div><!--[/diy]-->
<div id="f_pst" class="pl bm bmw">
<form method="post" id="fastpostform" action="" >
<table cellspacing="0" cellpadding="0">
<tr>
<td class="pls">
<div class="avatar"><img src="./images/common/tavatar.gif" /></div></td>
<td class="plc">

<span id="fastpostreturn"></span>


<div class="cl">
<div id="fastsmiliesdiv" class="y"><div id="fastsmiliesdiv_data"><div id="fastsmilies"></div></div></div><div class="hasfsl" id="fastposteditor">
<div class="tedt mtn">
<div class="bar">
<span class="y">

</span>
</div>
<div class="area">
<textarea rows="6" cols="80" name="message" id="fastpostmessage"  tabindex="4" class="pt"></textarea>
</div>
</div>
</div>
</div>

<input type="hidden" name="posttime" id="posttime" value="1525403156" />
<div class="upfl hasfsl">
<table cellpadding="0" cellspacing="0" border="0" id="attach_tblheader" style="display: none;">
<tr>
<td>点击附件文件名添加到帖子内容中</td>
<td class="atds">描述</td>
<td class="attv">
阅读权限
<img src="./images/common/faq.gif" alt="Tip" class="vm" onmouseover="showTip(this)" tip="阅读权限按由高到低排列，高于或等于选中组的用户才可以阅读" />
</td>
<td class="attpr">金钱</td><td class="attc"></td>
</tr>
</table>
<div class="fieldset flash" id="attachlist"></div>



</div>

<p class="ptm pnpost">
<button type="submit" name="replysubmit" id="fastpostsubmit" class="pn pnc vm" value="replysubmit" tabindex="5"><strong>发表回复</strong></button>
</p>
</td>
</tr>
</table>
</form>


</div>


</div>


</div>
<!--内容 end-->
</body>
</html>