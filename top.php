<?php
   session_start();
   include("conn.php");
?>
<html>
<head>
    <meta charset="gb2312" />
    <title></title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="js/laydate/theme/default/laydate.css" />
    <script src="js/laydate/laydate.js"></script>
    <style type="text/css">
        /*导航条*/
        #menu_box{
            width:100%;
            height:83px;
            background:url(images/dh-bg.png) repeat-x;
        }
        #menu_box #menu{
            width:1116px;
            height:83px;
            margin:0 auto;
        }
        #menu_box #menu li{
            list-style:none;
            float:left;
        }

        #menu_box #menu li a{
            font-size:16px;
            color:white;
            line-height:83px;
            padding:0px 40px;
            display:block;
            height:83px;
            text-decoration: none;
        }
        #menu_box #menu li a:hover{
            background:url(images/anniu-bg.png) ;
            color:#6B423F;
        }
       #d2{
           width: 300px;
           padding-left: 50px;
           color:chocolate;
           text-decoration: none;
       }

    </style>

</head>
<script language="javascript">
  function chkscreen(){
     if(screen.width<1024){
	   alert("建议您用大于1024*768的分辨率浏览本站!");
	 }
   }
  function chkinput1(form){
    if(form.name.value==""){
      alert("请输入商品名称!");
      form.name.select();
	  return(false);
	  }
	 return(true);
  }
</script>
<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar" onLoad="chkscreen()">
<div id="menu_box">
    <ul id="menu">
        <li><img src="images/logo.png"/></li>
        <li><a href="agreereg.php">会员登录注册</a></li>
        <li><a href="index2.php">网站新闻</a></li>
        <li><a href="index3.php">服务项目</a></li>
        <li><a href="index.php">在线预订</a></li>
        <li><a href="userleaveword.php">在线留言</a></li>
        <li><a href="aboutus.php">关于我们</a></li>
    </ul>
</div>
<div id="d1">
<div id="d2">
      <?php
	  if($_SESSION[username]!=""){
	    echo "当前用户:$_SESSION[username]";
	  }
	?>
	<?php
	if($_SESSION[username]!=""){
	    echo "<a href='logout.php' style='text-decoration: none'>注销离开</a>";
	  }
	?>
</div>
</div>
    </td>
  </tr>

</table>
</body>


