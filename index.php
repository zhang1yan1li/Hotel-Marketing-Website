<?php
session_start();
include("conn.php");
?>
        <?php
            include("top.php");
            ?>
<html>
<head>
    <meta charset="gb2312">
    <title></title>
    <style>
     #dz_center{
         width:1200px;
         height:1150px;
         background: #f5f5f5;
         margin:10px auto;
     }
     #dz_center  #dzz #dz1{
         width:448px;
         height:380px;
         float:right;
         border:1px dashed #632916;
     }
     #dz_center  #dzz #dz1 #img1{
         width:300px;
         height:220px;
         border:2px solid #632916;
         margin: 20px auto;
         margin-bottom: 20px;
     }
     #dz_center  #dzz #dz2 #img2{
         width:300px;
         height:220px;
         border:2px solid #632916;
         margin: 20px auto;
         margin-bottom: 20px;
     }
     #dz_center  #dzz #dz1 #h1{
         margin-left: 60px;

     }
     #dz_center  #dzz #dz2 #h1{
         margin-left: 60px;
     }
     #dz_center #dzz #dz2{
         width:449px;
         height:380px;
         border:1px dashed #632916;
     }
     #dz_center #dzz{
         width:900px;
         height:400px;
         float:right;
     }
     #dz_center #dz3{
        border:2px solid #632916;
         width:250px;
         height:480px;
     }
     #dz_center  .az1{
         width:448px;
         height:380px;
         float:right;
         border:1px dashed #632916;
     }
     #dz_center .az2{
         width:449px;
         height:380px;
         border:1px dashed #632916;
     }
     #dz_center  .az1 .img3{
         width:300px;
         height:220px;
         border:2px solid #632916;
         margin: 20px auto;
         margin-bottom: 20px;
     }
     #dz_center .az1 h1{
         margin-left: 60px;
     }
     #dz_center  .az2 .img4{
         width:300px;
         height:220px;
         border:2px solid #632916;
         margin: 20px auto;
         margin-bottom: 20px;
     }
     #dz_center .az2 h1{
         margin-left: 60px;
     }
     #dz_center  .cz1{
         width:448px;
         height:380px;
         float:right;
         border:1px dashed #632916;
     }
     #dz_center  .cz1 .img5{
         width:300px;
         height:220px;
         border:2px solid #632916;
         margin: 20px auto;
         margin-bottom: 20px;
     }
     #dz_center .cz1 h1{
         margin-left: 60px;
     }
     #dz_center  .cz2{
         width:448px;
         height:380px;
         float:right;
         border:1px dashed #632916;
     }
     #dz_center  .cz2 .img6{
         width:300px;
         height:220px;
         border:2px solid #632916;
         margin: 20px auto;
         margin-bottom: 20px;
     }
     #dz_center .cz2 h1{
         margin-left: 60px;
     }

    </style>
</head>
<body>
<div id="dz_center">
    <div id="dzz">
    <div id="dz1">
        <div id="img1">
            <?php

     $sql=mysql_query("select * from shangpin where tuijian=1 order by addtime desc limit 0,1");
            $info=mysql_fetch_array($sql);
                   if($info==false){
               echo "本站暂无推荐产品!";
                  }
           else{
            ?>

     <?php
           if(trim($info[tupian]=="")){
               echo "暂无图片";
       }
       else{
        ?>
    <img src="<?php echo $info[tupian];?>" width="300" height="220" border="0">
    <?php
      }
    ?></div>
<div id="h1">
 <h1><font color="EF9C3E">【<?php echo $info[mingcheng];?>】</font></h1>
<h1><font color="910800">【市场价：<?php echo $info[shichangjia];?>】</font></h1>
<h1><font color="DD4679">【会员价：<?php echo $info[huiyuanjia];?>】</font></h1>
<h1>【<a href="lookinfo.php?id=<?php echo $info[id];?>">查看信息</a>】</h1>
<h1>【<a href="addgouwuche.php?id=<?php echo $info[id];?>">放入购物车</a>】</h1>
<h1><font color="13589B">【剩余数量：
                                                                                <?php
                                                                                if($info[shuliang]>0)
                                                                                {
                                                                                    echo $info[shuliang];
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo "已售完";
                                                                                }
                                                                                ?>
                                                                                】</font>


                                                                <?php
                                                            }
                                                            ?>
                                                        </h1>
</div>

    </div>
    <div id="dz2">
        <div id="img2">
                                                            <?php
                                                            $sql=mysql_query("select * from shangpin where tuijian=1 order by addtime desc limit 1,1");
                                                            $info=mysql_fetch_array($sql);
                                                            if($info==true)
                                                            {
                                                                ?>

                                                                                <?php
                                                                                if(trim($info[tupian]==""))
                                                                                {
                                                                                    echo "暂无图片";
                                                                                }
                                                                                else
                                                                                {
                                                                                    ?>
                                                                                    <img src="<?php echo $info[tupian];?>" width="300" height="220" border="0">
                                                                                    <?php
                                                                                }
                                                                                ?></div>
<div id="h1">

                                                                        <h1 width="124"><font color="EF9C3E">【<?php echo $info[mingcheng];?>】</font></h1>


                                                                        <h1><font color="910800">【市场价：<?php echo $info[shichangjia];?>】</font></h1>

                                                                    <h1>

                                                                        <font color="DD4679">【会员价：<?php echo $info[huiyuanjia];?>】</font>
                                                                    </h1>

                                                                        <h1>【<a href="lookinfo.php?id=<?php echo $info[id];?>">查看信息</a>】</h1>


                                                                        <h1>【<a href="addgouwuche.php?id=<?php echo $info[id];?>">放入购物车</a>】</h1>


                                                                        <h1><font color="13589B">【剩余数量：
                                                                                <?php
                                                                                if($info[shuliang]>0){
                                                                                    echo $info[shuliang];
                                                                                }
                                                                                else{
                                                                                    echo "已售完";
                                                                                }
                                                                                ?>
                                                                                】</font></h1>



                                                                <?php
                                                            }
                                                            ?>
</div>
    </div>

<div class="az1">

<div class="img3">
<?php
    $sql=mysql_query("select * from shangpin order by addtime desc limit 3,1");
    $info=mysql_fetch_array($sql);
    if($info==false)
    {
        echo "本站暂无推荐产品!";
    }
    else
    {
        ?>
        <?php
        if(trim($info[tupian]==""))
        {
            echo "暂无图片";
        }
        else
        {
            ?>
            <img src="<?php echo $info[tupian];?>" width="300" height="220" border="0">
            <?php
        }
        ?></div>
        <h1><font color="EF9C3E">【<?php echo $info[mingcheng];?>】</font></h1>
        <h1><font color="910800">【市场价：<?php echo $info[shichangjia];?>】</font></h1>
        <h1><font color="DD4679">【会员价：<?php echo $info[huiyuanjia];?>】</font></h1>
        <h1>【<a href="lookinfo.php?id=<?php echo $info[id];?>">查看信息</a>】</h1>
        <h1>【<a href="addgouwuche.php?id=<?php echo $info[id];?>">放入购物车</a>】</h1>
        <h1><font color="13589B">【剩余数量：
                <?php
                if($info[shuliang]>0)
                {
                    echo $info[shuliang];
                }
                else
                {
                    echo "已售完";
                }
                ?>
                】</font></h1>
        <?php
    }
?>
</div>
        <div class="az2">
            <div class="img4">
                                                            <?php
                                                            $sql=mysql_query("select * from shangpin order by addtime desc limit 4,1");
                                                            $info=mysql_fetch_array($sql);
                                                            if($info==true)

                                                            {
                                                                ?>

                                                                                <?php
                                                                                if(trim($info[tupian]==""))
                                                                                {
                                                                                    echo "暂无图片";
                                                                                }
                                                                                else
                                                                                {
                                                                                    ?>
                                                                                    <img src="<?php echo $info[tupian];?>" width="300" height="220" border="0">
                                                                                    <?php
                                                                                }
                                                                                ?></div>

                                                                        <h1><font color="EF9C3E">【<?php echo $info[mingcheng];?>】</font></h1>
                                                                        <h1><font color="910800">【市场价：<?php echo $info[shichangjia];?>】</font></h1>

                                                                        <h1><font color="DD4679">【会员价：<?php echo $info[huiyuanjia];?>】</font></h1>
                                                                        <h1>【<a href="lookinfo.php?id=<?php echo $info[id];?>">查看信息</a>】</h1>
                                                                        <h1>【<a href="addgouwuche.php?id=<?php echo $info[id];?>">放入购物车</a>】</h1>
                                                                        <h1><font color="13589B">【剩余数量：
                                                                                <?php
                                                                                if($info[shuliang]>0)
                                                                                {
                                                                                    echo $info[shuliang];
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo "已售完";
                                                                                }
                                                                                ?>
                                                                                】</font></h1>
                                                                <?php
                                                            }
                                                            ?>
        </div>

        <div class="cz1">
            <div class="img5">
                                                            <?php
                                                            $sql=mysql_query("select * from shangpin order by cishu desc limit 5,1");
                                                            $info=mysql_fetch_array($sql);
                                                            if($info==false){
                                                                echo "本站暂无推荐产品!";
                                                            }
                                                            else {
                                                                ?>
                                                                                <?php
                                                                                if(trim($info[tupian]=="")){
                                                                                    echo "暂无图片";
                                                                                }
                                                                                else{
                                                                                    ?>
                                                                                    <img src="<?php echo $info[tupian];?>" width="300" height="220" border="0">
                                                                                    <?php
                                                                                }
                                                                                ?>
            </div>

                                                                        <h1><font color="EF9C3E">【<?php echo $info[mingcheng];?>】</font></h1>
                                                                        <h1><font color="910800">【市场价：<?php echo $info[shichangjia];?>】</font></h1>
                                                                        <h1><font color="DD4679">【会员价：<?php echo $info[huiyuanjia];?>】</font></h1>
                                                                        <h1>【<a href="lookinfo.php?id=<?php echo $info[id];?>">查看信息</a>】</h1>
                                                                        <h1>【<a href="addgouwuche.php?id=<?php echo $info[id];?>">放入购物车</a>】</h1>
                                                                        <h1><font color="13589B">【剩余数量：
                                                                                <?php
                                                                                if($info[shuliang]>0){
                                                                                    echo $info[shuliang];
                                                                                }
                                                                                else{
                                                                                    echo "已售完";
                                                                                }
                                                                                ?>
                                                                                】</font></h1>
                                                                <?php
                                                            }
                                                            ?>

        </div>
        <div class="cz2">
            <div class="img6">
                                                            <?php
                                                            $sql=mysql_query("select * from shangpin order by cishu desc limit 6,1 ");
                                                            $info=mysql_fetch_array($sql);
                                                            if($info==true){
                                                                ?>
                                                                                <?php
                                                                                if(trim($info[tupian]=="")){
                                                                                    echo "暂无图片";
                                                                                }
                                                                                else{
                                                                                    ?>
                                                                                    <img src="<?php echo $info[tupian];?>" width="300" height="220" border="0">
                                                                                    <?php
                                                                                }
                                                                                ?>
            </div>
                                                                        <h1><font color="EF9C3E">【<?php echo $info[mingcheng];?>】</font></h1>
                                                                        <h1><font color="910800">【市场价：<?php echo $info[shichangjia];?>】</font></h1>
                                                                        <h1><font color="DD4679">【会员价：<?php echo $info[huiyuanjia];?>】</font></h1>
                                                                        <h1>【<a href="lookinfo.php?id=<?php echo $info[id];?>">查看信息</a>】</h1>
                                                                        <h1>【<a href="addgouwuche.php?id=<?php echo $info[id];?>">放入购物车</a>】</h1>
                                                                        <h1><font color="13589B">【剩余数量：
                                                                                <?php
                                                                                if($info[shuliang]>0){
                                                                                    echo $info[shuliang];
                                                                                }
                                                                                else{
                                                                                    echo "已售完";
                                                                                }
                                                                                ?>
                                                                                】</font></h1>
                                                                <?php
                                                            }
                                                            ?>
    </div>
    </div>
    <div id="dz3">
        <?php
        include("right.php");
        ?>
    </div>
</div>
<?php
include("bottom.php");
?>
</body>
</html>

