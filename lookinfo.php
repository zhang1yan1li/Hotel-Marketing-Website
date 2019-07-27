<?php
 include("top.php");
 include("conn.php");
?>
<style type="text/css">
    .center_boxa{
        width:1200px;
        height:900px;
        background: #f5f5f5;
        margin:0 auto;
        position: relative;
    }
    .center_boxa #diva1{
        width:900px;
        height: 30px;
        background:#632916;
        color:#ffffff;
        line-height: 30px;
    }
    .center_boxa #diva2,#diva3{
        width: 200px;
        height:150px;
        float:right;
        position: absolute;
        top:150px;
        left:350px;
    }
    .center_boxa #diva3{
        position: absolute;
        top:150px;
        left:700px;
    }
    .center_boxa #diva2 h1{
        margin-bottom: 15px;
    }
    .center_boxa #diva3 h1{
        margin-bottom: 15px;
    }
    .center_boxa #diva4{
        float:right;
        border: 2px solid #632916;
    }
    .center_boxa #divb{
        width:700px;
        height:110px;
        margin-left: 200px;
        text-indent: 2em;
    }
    .center_boxa #h1{
        margin-top: 30px;
        margin-left: 200px;
        margin-bottom: 20px;
    }
    </style>
<div class="center_boxa">
    <div id="diva4">
    <?php
    include("right.php");
    ?>
    </div>
    <div id="diva1">
        <h1>&nbsp;<font size="+1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;客房信息</font></h1>
    </div>
                <?php
		     $sql=mysql_query("select * from shangpin where id=".$_GET[id]."",$conn);
			 $info=mysql_fetch_object($sql);
		   ?>

                      <div id="diva3">
                          <h1>等级：<?php echo $info->dengji;?></h1>
                          <h1>品牌：<?php echo $info->pinpai;?></h1>
                          <h1>型号：<?php echo $info->xinghao;?></h1>
                          <h1>数量：<?php echo $info->shuliang;?></h1>
                      </div>
    <div id="diva2">
        <h1>客房名称：<?php echo $info->mingcheng;?></h1>
        <h1> 入市时间：<?php echo $info->addtime;?></h1>
        <h1>会员价：<?php echo $info->huiyuanjia;?></h1>
        <h1>市场价：<?php echo $info->shichangjia;?></h1>
    </div>
    <div align="left" style="width:300px;height:220px;margin:25px; border:2px solid #632916;">
        <?php
        if($info->tupian==""){
            echo "暂无图片";
        }
        else
        {
            ?>
            <a href="<?php echo $info->tupian;?>" target="_blank"><img src="<?php echo $info->tupian;?>" alt="查看大图" width="300" height="220" border="0"></a>
            <?php
        }
        ?>
    </div>
    <h1 id="h1">客房简介：</h1>
                    <div id="divb">

                        <?php echo $info->jianjie;?>
                    </div>

        <table width="900" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
              <td><div align="right"><a href="addgouwuche.php?id=<?php echo $info->id;?>"><button>添加订单</button></a>&nbsp;&nbsp;</div></td>
          </tr>
      </table>
        <?php
	   if($_SESSION[username]!="")
	   {

	  ?>
<form name="form1" method="post" action="savepj.php?id=<?php echo $info->id;?>" onSubmit="return chkinput(this)">
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0" >
            <tr>
              <td height="25" bgcolor="#632916"><div align="center" style="color: #FFFFFF">
                <div align="left">&nbsp;&nbsp;<span style="color: #ffffff">发表评论</span></div>
              </div></td>
            </tr>
            <tr>
              <td height="130">
                  <table width="900" border="0" align="center" cellpadding="0" cellspacing="1">
                  <script language="javascript">
		    function chkinput(form)
			{
			   if(form.title.value=="")
			   {
			     alert("请输入评论主题!");
				 form.title.select();
				 return(false);
			   }
			   if(form.content.value=="")
			   {
			     alert("请输入评论内容!");
				 form.content.select();
				 return(false);
			   }
			   return(true);
			}
		  </script>
                  <tr>
                      <br/>
                    <td width="300" height="30"><div align="right">评论主题：</div></td>
                    <td width="467" ><div align="left">
                        <input type="text" name="title" size="30" class="inputcss" style="background-color:#f5f5f5 " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#f5f5f5'">
                    </div></td>
                  </tr>
                  <tr>
                    <td height="125"><div align="right">评论内容：</div></td>
                    <td height="50"><div align="left">
                        <textarea name="content" cols="70" rows="10" class="inputcss" style="background-color:#f5f5f5 " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#f5f5f5'"></textarea>
                    </div></td>
                  </tr>
              </table></td>
            </tr>
        </table>
          <table width="900" height="33" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><div align="center">
                  <input type="submit" value="发表" class="buttoncss">
&nbsp;&nbsp;&nbsp;<a href="showpl.php?id=<?php echo $_GET[id];?>">查看该商品评论</a></div></td>
            </tr>
          </table>
      </form>

    <?php
	   }

	  ?>
</div>
<?php
 include("bottom.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
